<?php

/**
 * Translation Validation Script for Modular PHP i18n
 *
 * Validates translation packs against English baseline for:
 * - Module file parity
 * - Key parity (missing/extra keys)
 * - Duplicate keys
 * - Placeholder integrity
 * - Encoding and BOM issues
 * - Bridge file structure
 *
 * @author Translation Validator
 */

declare(strict_types=1);

class TranslationValidator {
  private const BASELINE_LANG = 'en';
  private const SUPPORTED_LANGS = ['de', 'dk', 'en', 'es', 'fr', 'hu', 'pt', 'zh-cn'];
  private const EXPECTED_MODULES = [
    'buttons.php',
    'dashboard.php',
    'errors.php',
    'help_manual.php',
    'misc.php',
    'navigation.php',
    'pages.php',
    'popup.php',
    'settings.php',
    'system.php',
    'user_management.php',
    'widgets.php'
  ];

  private string $langRoot;
  /** @var array{lang: string[], json: bool, fix: bool, purge-extras: bool, strict: bool, max-list: int, summary-only: bool, schema: bool} */
  private array $options;
  /** @var array<string, array<string, mixed>> */
  private array $results = [];
  private int $totalErrors = 0;
  private int $totalWarnings = 0;

  public function __construct(?string $langRoot = null) {
    $this->langRoot = $langRoot ?? __DIR__ . '/..';
    $this->options = $this->parseOptions();
  }

  public function run(): int {
    try {
      if ($this->options['schema']) {
        $this->outputSchema();
        return 0;
      }
      $this->validateStructure();
      $this->validateLanguages();
      $this->generateReport();
      if ($this->totalErrors > 0) {
        return 3; // Fatal
      }
      return ($this->options['strict'] && $this->totalWarnings > 0) ? 2 : 0;
    } catch (Exception $e) {
      $this->error("Fatal error: " . $e->getMessage());
      return 3;
    }
  }

  /** @return array{lang: string[], json: bool, fix: bool, purge-extras: bool, strict: bool, max-list: int, summary-only: bool, schema: bool} */
  private function parseOptions(): array {
    global $argv;
    $options = [
      'lang' => [],
      'json' => false,
      'fix' => false,
      'purge-extras' => false,
      'strict' => false,
      'max-list' => 50,
      'summary-only' => false,
      'schema' => false
    ];
    if (isset($argv)) {
      foreach ($argv as $arg) {
        if (strpos($arg, '--lang=') === 0) {
          $lang = substr($arg, 7);
          if (in_array($lang, self::SUPPORTED_LANGS)) {
            $options['lang'][] = $lang;
          }
        } elseif ($arg === '--json') {
          $options['json'] = true;
        } elseif ($arg === '--fix') {
          $options['fix'] = true;
        } elseif ($arg === '--purge-extras') {
          $options['purge-extras'] = true;
        } elseif ($arg === '--strict') {
          $options['strict'] = true;
        } elseif (strpos($arg, '--max-list=') === 0) {
          $options['max-list'] = (int)substr($arg, 11);
        } elseif (strpos($arg, '--limit=') === 0) {
          $options['max-list'] = (int)substr($arg, 8);
        } elseif ($arg === '--summary-only') {
          $options['summary-only'] = true;
        } elseif ($arg === '--schema') {
          $options['schema'] = true;
        }
      }
    }
    // If no specific languages specified, validate all non-English
    if (empty($options['lang'])) {
      $options['lang'] = array_filter(self::SUPPORTED_LANGS, fn($lang) => $lang !== self::BASELINE_LANG);
    }
    return $options;
  }

  private function validateStructure(): void {
    if (!is_dir($this->langRoot)) {
      throw new Exception("Language root directory not found: {$this->langRoot}");
    }
    $baselinePath = $this->langRoot . '/' . self::BASELINE_LANG;
    if (!is_dir($baselinePath)) {
      throw new Exception("Baseline language directory not found: {$baselinePath}");
    }
    // Verify all expected modules exist in baseline
    foreach (self::EXPECTED_MODULES as $module) {
      $modulePath = $baselinePath . '/' . $module;
      if (!file_exists($modulePath)) {
        throw new Exception("Expected module not found in baseline: {$module}");
      }
    }
  }

  private function validateLanguages(): void {
    foreach ($this->options['lang'] as $lang) {
      if ($lang === self::BASELINE_LANG) {
        continue; // Skip baseline language
      }
      $this->results[$lang] = [
        'files' => [],
        'bridge' => [
          'hasAllRequires' => false,
          'missingRequires' => [],
          'exportsL' => false
        ],
        'errors' => 0,
        'warnings' => 0,
        'categoryCounts' => [
          'errors' => [
            'missingFiles' => 0,
            'parseErrors' => 0,
            'missingKeys' => 0,
            'duplicates' => 0,
            'placeholderMismatches' => 0,
            'bridgeMissingRequires' => 0
          ],
          'warnings' => [
            'extraKeys' => 0,
            'untranslated' => 0,
            'bom' => 0,
            'bridgeNoLExport' => 0
          ]
        ]
      ];
      $this->validateLanguage($lang);
    }
  }

  private function validateLanguage(string $lang): void {
    $langPath = $this->langRoot . '/' . $lang;
    if (!is_dir($langPath)) {
      $this->error("Language directory not found: {$lang}");
      if ($this->options['fix']) {
        $this->createLanguageDirectory($lang);
      }
      return;
    }
    // Validate each module
    foreach (self::EXPECTED_MODULES as $module) {
      $this->validateModule($lang, $module);
    }
    // Validate bridge file
    $this->validateBridge($lang);
    // Apply fixes if requested
    if ($this->options['fix']) {
      $this->applyFixes($lang);
    }
  }

  private function validateModule(string $lang, string $module): void {
    $langPath = $this->langRoot . '/' . $lang;
    $baselinePath = $this->langRoot . '/' . self::BASELINE_LANG;
    $modulePath = $langPath . '/' . $module;
    $baselineModulePath = $baselinePath . '/' . $module;
    
    $this->results[$lang]['files'][$module] = [
      'missing' => [],
      'extra' => [],
      'duplicates' => [],
      'untranslated' => [],
      'placeholderMismatches' => [],
      'bom' => false,
      'errors' => 0,
      'warnings' => 0,
      'issueCounts' => [
        'missing' => 0,
        'extra' => 0,
        'duplicates' => 0,
        'untranslated' => 0,
        'placeholderMismatches' => 0,
        'bom' => 0
      ]
    ];
    
    // Check if module file exists
    if (!file_exists($modulePath)) {
      $this->results[$lang]['files'][$module]['missing'][] = 'FILE_MISSING';
      $this->results[$lang]['files'][$module]['issueCounts']['missing'] = 1;
      $this->results[$lang]['categoryCounts']['errors']['missingFiles']++;
      $this->results[$lang]['errors']++;
      $this->totalErrors++;
      return;
    }
    
    // Check for BOM
    if ($this->hasBOM($modulePath)) {
      $this->results[$lang]['files'][$module]['bom'] = true;
      $this->results[$lang]['files'][$module]['issueCounts']['bom'] = 1;
      $this->results[$lang]['categoryCounts']['warnings']['bom']++;
      $this->results[$lang]['warnings']++;
      $this->totalWarnings++;
    }
    
    // Load baseline module
    $baselineKeys = $this->readModule($baselineModulePath);
    if ($baselineKeys === null) {
      $this->error("Failed to read baseline module: {$module}");
      return;
    }
    
    // Load target module
    $targetKeys = $this->readModule($modulePath);
    if ($targetKeys === null) {
      $this->results[$lang]['files'][$module]['missing'][] = 'PARSE_ERROR';
      $this->results[$lang]['files'][$module]['issueCounts']['missing'] = 1;
      $this->results[$lang]['categoryCounts']['errors']['parseErrors']++;
      $this->results[$lang]['errors']++;
      $this->totalErrors++;
      return;
    }
    
    // Check key parity
    $missingKeys = array_diff_key($baselineKeys, $targetKeys);
    $extraKeys = array_diff_key($targetKeys, $baselineKeys);
    
    if (!empty($missingKeys)) {
      $this->results[$lang]['files'][$module]['missing'] = array_keys($missingKeys);
      $this->results[$lang]['files'][$module]['issueCounts']['missing'] = count($missingKeys);
      $this->results[$lang]['categoryCounts']['errors']['missingKeys']++;
      $this->results[$lang]['errors']++;
      $this->totalErrors++;
    }
    
    if (!empty($extraKeys)) {
      $this->results[$lang]['files'][$module]['extra'] = array_keys($extraKeys);
      $this->results[$lang]['files'][$module]['issueCounts']['extra'] = count($extraKeys);
      $this->results[$lang]['categoryCounts']['warnings']['extraKeys']++;
      $this->results[$lang]['warnings']++;
      $this->totalWarnings++;
    }
    
    // Check for duplicates
    $duplicates = $this->scanDuplicates($modulePath);
    if (!empty($duplicates)) {
      $this->results[$lang]['files'][$module]['duplicates'] = $duplicates;
      $this->results[$lang]['files'][$module]['issueCounts']['duplicates'] = count($duplicates);
      $this->results[$lang]['categoryCounts']['errors']['duplicates']++;
      $this->results[$lang]['errors']++;
      $this->totalErrors++;
    }
    
    // Check for untranslated strings
    $untranslated = [];
    foreach ($baselineKeys as $key => $enValue) {
      if (
        isset($targetKeys[$key]) && $targetKeys[$key] === $enValue &&
        (!preg_match('/^[A-Z_]+$/', $key) || !$this->isBrandName($enValue))
      ) {
        $untranslated[] = $key;
      }
    }
    if (!empty($untranslated)) {
      $this->results[$lang]['files'][$module]['untranslated'] = $untranslated;
      $this->results[$lang]['files'][$module]['issueCounts']['untranslated'] = count($untranslated);
      $this->results[$lang]['categoryCounts']['warnings']['untranslated']++;
      $this->results[$lang]['warnings']++;
      $this->totalWarnings++;
    }
    
    // Check placeholder integrity
    $placeholderMismatches = [];
    foreach ($baselineKeys as $key => $enValue) {
      if (isset($targetKeys[$key])) {
        $enPlaceholders = $this->extractPlaceholders($enValue);
        $targetPlaceholders = $this->extractPlaceholders($targetKeys[$key]);
        if ($enPlaceholders !== $targetPlaceholders) {
          $placeholderMismatches[] = [
            'key' => $key,
            'en' => $enValue,
            'tr' => $targetKeys[$key]
          ];
        }
      }
    }
    if (!empty($placeholderMismatches)) {
      $this->results[$lang]['files'][$module]['placeholderMismatches'] = $placeholderMismatches;
      $this->results[$lang]['files'][$module]['issueCounts']['placeholderMismatches'] = count($placeholderMismatches);
      $this->results[$lang]['categoryCounts']['errors']['placeholderMismatches']++;
      $this->results[$lang]['errors']++;
      $this->totalErrors++;
    }
  }

  private function validateBridge(string $lang): void {
    $bridgePath = $this->langRoot . '/lang_' . $lang . '.php';
    if (!file_exists($bridgePath)) {
      $this->results[$lang]['bridge']['missingRequires'] = self::EXPECTED_MODULES;
      $this->results[$lang]['categoryCounts']['errors']['bridgeMissingRequires']++;
      $this->results[$lang]['errors']++;
      $this->totalErrors++;
      return;
    }
    
    $bridgeContent = file_get_contents($bridgePath);
    if ($bridgeContent === false) {
      $this->error("Failed to read bridge file: {$bridgePath}");
      return;
    }
    
    // Check for required module includes
    $missingRequires = [];
    foreach (self::EXPECTED_MODULES as $module) {
      $pattern = '/require\s+__DIR__\s*\.\s*[\'"]\/' . preg_quote($lang, '/') . '\/' . preg_quote($module, '/') . '[\'"]/';
      if (!preg_match($pattern, $bridgeContent)) {
        $missingRequires[] = $module;
      }
    }
    
    // Check for $L export
    $exportsL = preg_match('/\$L\s*=\s*\$lang/', $bridgeContent);
    
    $this->results[$lang]['bridge']['hasAllRequires'] = empty($missingRequires);
    $this->results[$lang]['bridge']['missingRequires'] = $missingRequires;
    $this->results[$lang]['bridge']['exportsL'] = $exportsL;
    
    if (!empty($missingRequires)) {
      $this->results[$lang]['categoryCounts']['errors']['bridgeMissingRequires']++;
      $this->results[$lang]['errors']++;
      $this->totalErrors++;
    }
    
    if (!$exportsL) {
      $this->results[$lang]['categoryCounts']['warnings']['bridgeNoLExport']++;
      $this->results[$lang]['warnings']++;
      $this->totalWarnings++;
    }
  }

  /** @return array<string, string>|null */
  private function readModule(string $path): ?array {
    try {
      // Use include to load the module file
      $result = include $path;
      if (is_array($result)) {
        return $result;
      }
      return null;
    } catch (Throwable $e) {
      return null;
    }
  }

  /** @return array<int, array{key: string, lines: array<int>}> */
  private function scanDuplicates(string $path): array {
    $content = file_get_contents($path);
    if ($content === false) {
      return [];
    }
    $duplicates = [];
    $keyLines = [];
    // Find all key definitions with line numbers
    preg_match_all('/[\'"]([\w]+)[\'"]\s*=>/', $content, $matches, PREG_OFFSET_CAPTURE);
    foreach ($matches[1] as $match) {
      $key = $match[0];
      $offset = (int)$match[1];
      // Calculate line number
      $line = substr_count(substr($content, 0, $offset), "\n") + 1;
      if (isset($keyLines[$key])) {
        $keyLines[$key][] = $line;
      } else {
        $keyLines[$key] = [$line];
      }
    }
    // Find duplicates
    foreach ($keyLines as $key => $lines) {
      if (count($lines) > 1) {
        $duplicates[] = [
          'key' => $key,
          'lines' => $lines
        ];
      }
    }
    return $duplicates;
  }

  /** @return array<int, string> */
  private function extractPlaceholders(string $text): array {
    $placeholders = [];
    // printf-style placeholders: %s, %d, %1$s, %2$d, etc.
    preg_match_all('/%(\d+\$)?[sd]/', $text, $matches);
    foreach ($matches[0] as $match) {
      $placeholders[] = $match;
    }
    // Named placeholders: {name}, :name
    preg_match_all('/\{([^}]+)\}/', $text, $matches);
    foreach ($matches[0] as $match) {
      $placeholders[] = $match;
    }
    preg_match_all('/:([\w]+)/', $text, $matches);
    foreach ($matches[0] as $match) {
      $placeholders[] = $match;
    }
    // HTML tags (check balance)
    preg_match_all('/<([^>]+)>/', $text, $matches);
    foreach ($matches[0] as $match) {
      $placeholders[] = $match;
    }
    sort($placeholders);
    return $placeholders;
  }

  private function hasBOM(string $path): bool {
    $handle = fopen($path, 'rb');
    if ($handle === false) {
      return false;
    }
    $bom = fread($handle, 3);
    fclose($handle);
    return $bom === "\xEF\xBB\xBF";
  }

  private function isBrandName(string $text): bool {
    $brandNames = [
      'Airsonic',
      'Autobrr',
      'AutoDL-iRSSi',
      'Autoscan',
      'Bazarr',
      'Bazarr4K',
      'BBR',
      'BitTorrent Sync',
      'Calibre',
      'CouchPotato',
      'Config Server Firewall (CSF)',
      'Deluge',
      'Duplicati',
      'Emby',
      'Fail2Ban',
      'FileBot',
      'Filebrowser',
      'FlareSolverr',
      'FlexGet',
      'Flood',
      'Headphones',
      'Jackett',
      'JDownloader',
      'Jellyfin',
      'Jellyseerr',
      'Kavita',
      'Komga',
      'LazyLibrarian',
      'Let\'s Encrypt',
      'Lidarr',
      'Medusa',
      'Mylar3',
      'Netdata',
      'Nextcloud',
      'Notifiarr',
      'noVNC',
      'NZBGet',
      'NZBHydra2',
      'Ombi',
      'Overseerr',
      'OpenVPN',
      'phpMyAdmin',
      'Plex',
      'Prowlarr',
      'pyLoad',
      'qBittorrent',
      'Quassel',
      'Quotas',
      'Radarr',
      'Radarr4K',
      'Rapidleech',
      'RClone',
      'Readarr',
      'Requestrr',
      'rTorrent',
      'ruTorrent',
      'SABnzbd',
      'SeedCross',
      'SickChill',
      'SickGear',
      'Sonarr',
      'Sonarr4K',
      'Subsonic',
      'Syncthing',
      'Tautulli',
      'The Lounge',
      'Transmission',
      'UniFi',
      'Unpackerr',
      'Web Console',
      'WireGuard',
      'WSDashboard',
      'X2Go',
      'XTeVe',
      'ZNC'
    ];

    return in_array($text, $brandNames);
  }

  private function createLanguageDirectory(string $lang): void {
    $langPath = $this->langRoot . '/' . $lang;
    if (!mkdir($langPath, 0755, true)) {
      $this->error("Failed to create language directory: {$langPath}");
      return;
    }
    $this->info("Created language directory: {$langPath}");
  }

  private function applyFixes(string $lang): void {
    $langPath = $this->langRoot . '/' . $lang;
    $baselinePath = $this->langRoot . '/' . self::BASELINE_LANG;
    // Create missing module files
    foreach (self::EXPECTED_MODULES as $module) {
      $modulePath = $langPath . '/' . $module;
      $baselineModulePath = $baselinePath . '/' . $module;
      if (!file_exists($modulePath)) {
        $this->copyModuleFromEn($baselineModulePath, $modulePath);
      }
    }
    // Add missing keys to existing modules
    foreach (self::EXPECTED_MODULES as $module) {
      $modulePath = $langPath . '/' . $module;
      $baselineModulePath = $baselinePath . '/' . $module;
      if (file_exists($modulePath) && file_exists($baselineModulePath)) {
        $this->addMissingKeys($modulePath, $baselineModulePath);
      }
    }
    // Fix bridge file
    $this->fixBridgeFile($lang);
    // Remove BOMs
    foreach (self::EXPECTED_MODULES as $module) {
      $modulePath = $langPath . '/' . $module;
      if (file_exists($modulePath) && $this->hasBOM($modulePath)) {
        $this->removeBOM($modulePath);
      }
    }
  }

  private function copyModuleFromEn(string $enPath, string $targetPath): void {
    $enKeys = $this->readModule($enPath);
    if ($enKeys === null) {
      return;
    }
    $content = "<?php\nreturn [\n";
    foreach ($enKeys as $key => $value) {
      $content .= "  '{$key}' => '__TODO_TRANSLATE__ {$value}', // TODO translate\n";
    }
    $content .= "];\n";
    if (file_put_contents($targetPath, $content) === false) {
      $this->error("Failed to create module file: {$targetPath}");
      return;
    }
    $this->info("Created module file: {$targetPath}");
  }

  private function addMissingKeys(string $targetPath, string $baselinePath): void {
    $targetKeys = $this->readModule($targetPath);
    $baselineKeys = $this->readModule($baselinePath);
    $content = file_get_contents($targetPath);
    if ($content === false || $targetKeys === null || $baselineKeys === null ||
        empty(array_diff_key($baselineKeys, $targetKeys))) {
      return;
    }
    
    $pos = strrpos($content, '];');
    if ($pos === false) {
      return;
    }
    // Insert missing keys before closing bracket
    $missingKeys = array_diff_key($baselineKeys, $targetKeys);
    $insert = '';
    foreach ($missingKeys as $key => $value) {
      $insert .= "  '{$key}' => '__TODO_TRANSLATE__ {$value}', // TODO translate\n";
    }
    $newContent = substr($content, 0, $pos) . $insert . substr($content, $pos);
    if (file_put_contents($targetPath, $newContent) === false) {
      $this->error("Failed to update module file: {$targetPath}");
      return;
    }
    $this->info("Added missing keys to: {$targetPath}");
  }

  private function fixBridgeFile(string $lang): void {
    $bridgePath = $this->langRoot . '/lang_' . $lang . '.php';
    $baselineBridgePath = $this->langRoot . '/lang_' . self::BASELINE_LANG . '.php';
    if (!file_exists($baselineBridgePath)) {
      return;
    }
    $baselineContent = file_get_contents($baselineBridgePath);
    if ($baselineContent === false) {
      return;
    }
    // Replace language references
    $content = str_replace(
      ["'/en/", "'en/", 'en/'],
      ["'/{$lang}/", "'{$lang}/", "{$lang}/"],
      $baselineContent
    );
    if (file_put_contents($bridgePath, $content) === false) {
      $this->error("Failed to create bridge file: {$bridgePath}");
      return;
    }
    $this->info("Created bridge file: {$bridgePath}");
  }

  private function removeBOM(string $path): void {
    $content = file_get_contents($path);
    if ($content === false) {
      return;
    }
    if (strpos($content, "\xEF\xBB\xBF") === 0) {
      $content = substr($content, 3);
      if (file_put_contents($path, $content) === false) {
        $this->error("Failed to remove BOM from: {$path}");
        return;
      }
      $this->info("Removed BOM from: {$path}");
    }
  }

  private function generateReport(): void {
    if ($this->options['json']) {
      $this->outputJson();
    } else {
      $this->outputHuman();
    }
  }

  private function outputSchema(): void {
    echo "Translation Validator JSON Schema v1.1.0\n";
    echo "========================================\n\n";
    echo "The validator outputs structured JSON with the following schema:\n\n";
    echo "{\n";
    echo "  \"schemaVersion\": \"1.1.0\",\n";
    echo "  \"baseline\": \"en\",\n";
    echo "  \"modules\": [\"buttons.php\", \"dashboard.php\", ...],\n";
    echo "  \"languages\": [\"de\", \"dk\", \"es\", ...],\n";
    echo "  \"results\": {\n";
    echo "    \"<lang>\": {\n";
    echo "      \"errors\": <int>,\n";
    echo "      \"warnings\": <int>,\n";
    echo "      \"categoryCounts\": {\n";
    echo "        \"errors\": {\n";
    echo "          \"missingFiles\": <int>,\n";
    echo "          \"parseErrors\": <int>,\n";
    echo "          \"missingKeys\": <int>,\n";
    echo "          \"duplicates\": <int>,\n";
    echo "          \"placeholderMismatches\": <int>,\n";
    echo "          \"bridgeMissingRequires\": <int>\n";
    echo "        },\n";
    echo "        \"warnings\": {\n";
    echo "          \"extraKeys\": <int>,\n";
    echo "          \"untranslated\": <int>,\n";
    echo "          \"bom\": <int>,\n";
    echo "          \"bridgeNoLExport\": <int>\n";
    echo "        }\n";
    echo "      },\n";
    echo "      \"files\": { ... },\n";
    echo "      \"bridge\": { ... }\n";
    echo "    }\n";
    echo "  },\n";
    echo "  \"totals\": {\n";
    echo "    \"errors\": <int>,\n";
    echo "    \"warnings\": <int>,\n";
    echo "    \"byCategory\": { ... }\n";
    echo "  }\n";
    echo "}\n\n";
    echo "Exit codes: 0 (OK), 2 (warnings + --strict), 3 (errors)\n";
  }

  private function outputJson(): void {
    // Calculate global category totals
    $globalCategoryCounts = [
      'errors' => [
        'missingFiles' => 0,
        'parseErrors' => 0,
        'missingKeys' => 0,
        'duplicates' => 0,
        'placeholderMismatches' => 0,
        'bridgeMissingRequires' => 0
      ],
      'warnings' => [
        'extraKeys' => 0,
        'untranslated' => 0,
        'bom' => 0,
        'bridgeNoLExport' => 0
      ]
    ];

    foreach ($this->results as $langResult) {
      foreach ($langResult['categoryCounts']['errors'] as $category => $count) {
        $globalCategoryCounts['errors'][$category] += $count;
      }
      foreach ($langResult['categoryCounts']['warnings'] as $category => $count) {
        $globalCategoryCounts['warnings'][$category] += $count;
      }
    }

    $report = [
      'schemaVersion' => '1.1.0',
      'baseline' => self::BASELINE_LANG,
      'modules' => self::EXPECTED_MODULES,
      'languages' => array_keys($this->results),
      'results' => $this->results,
      'totals' => [
        'errors' => $this->totalErrors,
        'warnings' => $this->totalWarnings,
        'byCategory' => $globalCategoryCounts
      ]
    ];
    echo json_encode($report, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) . "\n";
  }

  private function outputHuman(): void {
    echo "Translation Validation Report\n";
    echo "============================\n\n";
    foreach ($this->results as $lang => $result) {
      echo "Language: {$lang}\n";
      echo str_repeat('-', strlen($lang) + 10) . "\n";
      
      if ($result['errors'] === 0 && $result['warnings'] === 0) {
        echo "✓ All checks passed\n";
      } else {
        if ($result['errors'] > 0) {
          echo "✗ {$result['errors']} errors\n";
        }
        if ($result['warnings'] > 0) {
          echo "⚠ {$result['warnings']} warnings\n";
        }
        
        // Show file issues (unless summary-only)
        if (!$this->options['summary-only']) {
          foreach ($result['files'] as $module => $fileResult) {
            $this->showFileIssues($module, $fileResult);
          }
        }
        
        // Show bridge issues
        if (!$result['bridge']['hasAllRequires'] || !$result['bridge']['exportsL']) {
          echo "  Bridge file issues:\n";
          if (!$result['bridge']['hasAllRequires']) {
            echo "    Missing requires: " . implode(', ', $result['bridge']['missingRequires']) . "\n";
          }
          if (!$result['bridge']['exportsL']) {
            echo "    Missing \$L export\n";
          }
        }
      }
      
      // Show breakdown
      $this->showLanguageBreakdown($lang, $result);
      echo "\n";
    }
    echo "Summary: {$this->totalErrors} errors, {$this->totalWarnings} warnings\n";
  }

  /**
   * @param string $module
   * @param array<string, mixed> $fileResult
   */
  private function showFileIssues(string $module, array $fileResult): void {
    $issues = [];
    if ($fileResult['issueCounts']['missing'] > 0) {
      $issues[] = "{$fileResult['issueCounts']['missing']} missing keys";
    }
    if ($fileResult['issueCounts']['extra'] > 0) {
      $issues[] = "{$fileResult['issueCounts']['extra']} extra keys";
    }
    if ($fileResult['issueCounts']['duplicates'] > 0) {
      $issues[] = "{$fileResult['issueCounts']['duplicates']} duplicate keys";
    }
    if ($fileResult['issueCounts']['placeholderMismatches'] > 0) {
      $issues[] = "{$fileResult['issueCounts']['placeholderMismatches']} placeholder mismatches";
    }
    if ($fileResult['issueCounts']['untranslated'] > 0) {
      $issues[] = "{$fileResult['issueCounts']['untranslated']} untranslated keys";
    }
    if ($fileResult['issueCounts']['bom'] > 0) {
      $issues[] = "BOM detected";
    }
    if (!empty($issues)) {
      echo "  {$module}: " . implode(', ', $issues) . "\n";
    }
  }

  /**
   * @param string $lang
   * @param array<string, mixed> $result
   */
  private function showLanguageBreakdown(string $lang, array $result): void {
    $errorBreakdown = [];
    if ($result['categoryCounts']['errors']['missingFiles'] > 0) {
      $errorBreakdown[] = "missingFiles:{$result['categoryCounts']['errors']['missingFiles']}";
    }
    if ($result['categoryCounts']['errors']['parseErrors'] > 0) {
      $errorBreakdown[] = "parseOrMissingFiles:{$result['categoryCounts']['errors']['parseErrors']}";
    }
    if ($result['categoryCounts']['errors']['missingKeys'] > 0) {
      $errorBreakdown[] = "missingKeys:{$result['categoryCounts']['errors']['missingKeys']}";
    }
    if ($result['categoryCounts']['errors']['duplicates'] > 0) {
      $errorBreakdown[] = "duplicates:{$result['categoryCounts']['errors']['duplicates']}";
    }
    if ($result['categoryCounts']['errors']['placeholderMismatches'] > 0) {
      $errorBreakdown[] = "placeholders:{$result['categoryCounts']['errors']['placeholderMismatches']}";
    }
    if ($result['categoryCounts']['errors']['bridgeMissingRequires'] > 0) {
      $errorBreakdown[] = "bridgeMissing:{$result['categoryCounts']['errors']['bridgeMissingRequires']}";
    }

    $warningBreakdown = [];
    if ($result['categoryCounts']['warnings']['extraKeys'] > 0) {
      $warningBreakdown[] = "extraKeys:{$result['categoryCounts']['warnings']['extraKeys']}";
    }
    if ($result['categoryCounts']['warnings']['untranslated'] > 0) {
      $warningBreakdown[] = "untranslated:{$result['categoryCounts']['warnings']['untranslated']}";
    }
    if ($result['categoryCounts']['warnings']['bom'] > 0) {
      $warningBreakdown[] = "bom:{$result['categoryCounts']['warnings']['bom']}";
    }
         if ($result['categoryCounts']['warnings']['bridgeNoLExport'] > 0) {
       $warningBreakdown[] = "bridgeNoL:{$result['categoryCounts']['warnings']['bridgeNoLExport']}";
     }

    $errorStr = !empty($errorBreakdown) ? implode(', ', $errorBreakdown) : '0';
    $warningStr = !empty($warningBreakdown) ? implode(', ', $warningBreakdown) : '0';
    
    echo "  Breakdown — errors: {{$errorStr}} | warnings: {{$warningStr}}\n";
  }

  private function error(string $message): void {
    if (!$this->options['json']) {
      fwrite(STDERR, "ERROR: {$message}\n");
    }
  }

  private function info(string $message): void {
    if (!$this->options['json']) {
      echo "INFO: {$message}\n";
    }
  }
}

// CLI entry point
if (php_sapi_name() === 'cli') {
  $validator = new TranslationValidator();
  exit($validator->run());
}
