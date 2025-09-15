<?php
/**
 * Test module for translation key cleanup script
 * Contains various patterns to test detection
 */

return [
    // Normal key
    'TEST_NORMAL_KEY' => 'This is a normal translation key',
    
    // Unused key (should be detected)
    'TEST_UNUSED_KEY' => 'This key is never used anywhere',
    
    // Intra-file exact duplicate (should be auto-fixed)
    'TEST_DUPLICATE_KEY' => 'This key appears twice with same value',
    
    // Intra-file conflicting duplicate (should be reported, not auto-fixed)
    'TEST_CONFLICT_KEY' => 'This key appears twice with different value 1',
    
    // Cross-module duplicate (should be reported, not auto-fixed)
    'TEST_CROSS_MODULE_KEY' => 'This key appears in multiple modules',
    
    // Keys with different quote styles
    "TEST_DOUBLE_QUOTE" => "Double quoted key",
    'TEST_SINGLE_QUOTE' => 'Single quoted key',
    
    // Keys with special characters
    'TEST_KEY_WITH_DASH' => 'Key with dash',
    'TEST_KEY_WITH_DOT' => 'Key with dot',
    'TEST_KEY_WITH_COLON' => 'Key with colon',
    
    // Legacy $lang array style
    'TEST_LEGACY_STYLE' => 'Legacy style key',
    
    // Keys that should be ignored (dynamic)
    'APP_1_UNINSTALL' => 'App 1 uninstall',
    'APP_2_REINSTALL' => 'App 2 reinstall',
    'SERVICE_1_ENABLED' => 'Service 1 enabled',
];
