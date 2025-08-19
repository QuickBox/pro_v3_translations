<?php

/**
 * QuickBox Pro German Language Bridge File
 *
 * This file merges all modular translation files into a single $lang array
 * while preserving backwards compatibility for all CLI and interface functions.
 *
 * @category   German
 * @version    3.0.1.302
 * @var Configs $configs The configurations object.
 * @var Session $session The user session object.
 * @package    dashboard
 * @subpackage lang
 *
 * @since      1.0.0
 */
// Include required variables
$version           = $configs->getConfig('Version');
$username          = $session->username;
$network_interface = $configs->getConfig('server_network_adapter');
// Execute the shell command to get the server IP
$command   = "ip route get 8.8.8.8 | sed -n '/src/{s/.*src *\\([^ ]*\\).*/\\1/p;q}'";
$server_ip = shell_exec($command);
// Trim any trailing whitespace or newlines from the result
$server_ip = trim((string) $server_ip);

// Create the apps array for dynamic translations
$APPS = [
  'AIRSONIC'      => 'Airsonic',
  'AUTOBRR'       => 'Autobrr',
  'AUTODL'        => 'AutoDL-iRSSi',
  'AUTOSCAN'      => 'Autoscan',
  'BAZARR'        => 'Bazarr',
  'BAZARR4K'      => 'Bazarr4K',
  'BBR'           => 'BBR',
  'BTSYNC'        => 'BitTorrent Sync',
  'CALIBRE'       => 'Calibre',
  'COUCHPOTATO'   => 'CouchPotato',
  'CSF'           => 'Config Server Firewall (CSF)',
  'DELUGE'        => 'Deluge',
  'DUPLICATI'     => 'Duplicati',
  'EMBY'          => 'Emby',
  'FAIL2BAN'      => 'Fail2Ban',
  'FILEBOT'       => 'FileBot',
  'FILEBROWSER'   => 'Filebrowser',
  'FLARESOLVERR'  => 'FlareSolverr',
  'FLEXGET'       => 'FlexGet',
  'FLOOD'         => 'Flood',
  'HEADPHONES'    => 'Headphones',
  'JACKETT'       => 'Jackett',
  'JDOWNLOADER'   => 'JDownloader',
  'JELLYFIN'      => 'Jellyfin',
  'JELLYSEERR'    => 'Jellyseerr',
  'KAVITA'        => 'Kavita',
  'KOMGA'         => 'Komga',
  'LAZYLIBRARIAN' => 'LazyLibrarian',
  'LETSENCRYPT'   => 'Let\'s Encrypt',
  'LIDARR'        => 'Lidarr',
  'MEDUSA'        => 'Medusa',
  'MYLAR3'        => 'Mylar3',
  'NETDATA'       => 'Netdata',
  'NEXTCLOUD'     => 'Nextcloud',
  'NOTIFIARR'     => 'Notifiarr',
  'NOVNC'         => 'noVNC',
  'NZBGET'        => 'NZBGet',
  'NZBHYDRA2'     => 'NZBHydra2',
  'OMBI'          => 'Ombi',
  'OVERSEERR'     => 'Overseerr',
  'OVPN'          => 'OpenVPN',
  'PHPMYADMIN'    => 'phpMyAdmin',
  'PLEX'          => 'Plex',
  'PROWLARR'      => 'Prowlarr',
  'PYLOAD'        => 'pyLoad',
  'QBITTORRENT'   => 'qBittorrent',
  'QUASSEL'       => 'Quassel',
  'QUOTA'         => 'Quotas',
  'RADARR'        => 'Radarr',
  'RADARR4K'      => 'Radarr4K',
  'RAPIDLEECH'    => 'Rapidleech',
  'RCLONE'        => 'RClone',
  'READARR'       => 'Readarr',
  'REQUESTRR'     => 'Requestrr',
  'RTORRENT'      => 'rTorrent',
  'RUTORRENT'     => 'ruTorrent',
  'SABNZBD'       => 'SABnzbd',
  'SEEDCROSS'     => 'SeedCross',
  'SICKCHILL'     => 'SickChill',
  'SICKGEAR'      => 'SickGear',
  'SONARR'        => 'Sonarr',
  'SONARR4K'      => 'Sonarr4K',
  'SUBSONIC'      => 'Subsonic',
  'SYNCTHING'     => 'Syncthing',
  'TAUTULLI'      => 'Tautulli',
  'THELOUNGE'     => 'The Lounge',
  'TRANSMISSION'  => 'Transmission',
  'UNIFI'         => 'UniFi',
  'UNPACKERR'     => 'Unpackerr',
  'WEBCONSOLE'    => 'Web Console',
  'WIREGUARD'     => 'WireGuard',
  'WSDASHBOARD'   => 'WSDashboard',
  'X2GO'          => 'X2Go',
  'XTEVE'         => 'XTeVe',
  'ZNC'           => 'ZNC'
];

// Initialize the language array
$lang = [];

// Load all modular translation files
$lang = array_merge(
  $lang,
  require __DIR__ . '/de/navigation.php',
  require __DIR__ . '/de/buttons.php',
  require __DIR__ . '/de/popup.php',
  require __DIR__ . '/de/misc.php',
  require __DIR__ . '/de/widgets.php',
  require __DIR__ . '/de/pages.php',
  require __DIR__ . '/de/settings.php',
  require __DIR__ . '/de/user_management.php',
  require __DIR__ . '/de/system.php',
  require __DIR__ . '/de/help_manual.php',
  require __DIR__ . '/de/dashboard.php',
  require __DIR__ . '/de/errors.php'
);

// Generate dynamic translations for app uninstall/reinstall
foreach ($APPS as $key => $value) {
  $lang[$key . '_UNINSTALL'] = 'Sie sind dabei, <span style="color:#01cea2">' . $value . '</span> von Ihrem System zu deinstallieren.<br/><br/>Dies wird alle Ihre Konfigurationen und Einstellungen vollständig entfernen... diese Aktion ist unumkehrbar.<br/><br/>Sie können <span style="color:#01cea2">' . $value . '</span> jederzeit neu installieren, jedoch werden Ihre Einstellungen auf Standard zurückgesetzt.';
  $lang[$key . '_REINSTALL'] = 'Sie sind dabei, <span style="color:#01cea2">' . $value . '</span> neu zu installieren.<br/><br/>Dies wird alle Ihre aktuellen Konfigurationen, Dateien und Einstellungen vollständig entfernen/zurücksetzen... diese Aktion ist unumkehrbar.';
}

// Add dynamic translations that depend on variables
$lang['CALIBRE_INSTALL_MESSAGE'] = 'Sie haben die Möglichkeit, einen benutzerdefinierten Verzeichnispfad für Ihre Calibre-Bibliothek anzugeben. Falls der gewählte Pfad derzeit nicht existiert, wird er automatisch für Sie generiert.<br>Alternativ können Sie, wenn Sie den Standardpfad bevorzugen, das Feld einfach leer lassen, und die Bibliothek wird sich unter folgendem Pfad befinden:<br><code>/home/' . $username . '/.config/Calibre/library</code>';

$lang['CUSTOM_PATH_TOOLTIP_NO_RCLONE'] = 'Setzen Sie dies auf Ja, um den Pfad zu Ihrer Medienbibliothek einzugeben.<br>Der Standardpfad ist:<br><code>/home/' . $username . '/Media</code>';
$lang['CUSTOM_PATH_TOOLTIP_RCLONE']    = 'Setzen Sie dies auf Ja, um den Pfad zu Ihrer Medienbibliothek einzugeben.<br>Der Standardpfad ist:<br><code>/home/' . $username . '/rclone/cache</code>';

$lang['JDOWNLOADER_INSTALL_PATH_MESSAGE'] = 'Sie haben die Möglichkeit, einen benutzerdefinierten Verzeichnispfad für Ihre JDownloader-Downloads anzugeben. Falls der gewählte Pfad derzeit nicht existiert, wird er automatisch für Sie generiert.<br>Alternativ können Sie, wenn Sie den Standardpfad bevorzugen, das Feld einfach leer lassen, und die Bibliothek wird sich unter folgendem Pfad befinden:<br><code>/home/' . $username . '/Downloads</code>';

$lang['KAVITA_INSTALL_MESSAGE'] = 'Sie haben die Möglichkeit, einen benutzerdefinierten Verzeichnispfad für Ihre Kavita-Bibliothek anzugeben. Falls der gewählte Pfad derzeit nicht existiert, wird er automatisch für Sie generiert.<br>Alternativ können Sie, wenn Sie den Standardpfad bevorzugen, das Feld einfach leer lassen, und die Bibliothek wird sich unter folgendem Pfad befinden:<br><code>/home/' . $username . '/.config/Kavita/library</code>';

$lang['MYLAR3_INSTALL_MESSAGE'] = 'Sie haben die Möglichkeit, einen benutzerdefinierten Pfad für Ihr Mylar3 Comics-Verzeichnis anzugeben. Falls der gewählte Pfad derzeit nicht existiert, wird er automatisch für Sie generiert.<br>Alternativ können Sie, wenn Sie den Standardpfad bevorzugen, das Feld einfach leer lassen, und das Verzeichnis wird sich unter folgendem Pfad befinden:<br><code>/home/' . $username . '/Media/Comics</code>';

$lang['PLEX_DATA_PATH_TOOLTIP'] = 'Sie haben die Möglichkeit, einen benutzerdefinierten Datenpfad für Ihre Plex-Installation anzugeben. Falls der gewählte Pfad derzeit nicht existiert, wird er automatisch für Sie generiert.<br>Alternativ können Sie, wenn Sie den Standardpfad bevorzugen, die Auswahl einfach als \'Nein\' belassen, und das Datenverzeichnis wird sich unter folgendem Pfad befinden:<br><code>/home/' . $username . '/.config/\'Plex Media Server\'</code>';

$lang['WIREGUARD_INSTALL_POSTUP_RULE_PH'] = 'iptables -A FORWARD -i %i -j ACCEPT; iptables -t nat -A POSTROUTING -o ' . $network_interface . ' -j MASQUERADE';

// Export the language array as $L for backwards compatibility
$L = $lang;
