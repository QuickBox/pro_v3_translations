<?php

/**
 * QuickBox Pro English Language Bridge File
 *
 * This file merges all modular translation files into a single $lang array
 * while preserving backwards compatibility for all CLI and interface functions.
 *
 * @category   English
 * @version    3.0.1.288
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
  require __DIR__ . '/hu/navigation.php',
  require __DIR__ . '/hu/buttons.php',
  require __DIR__ . '/hu/popup.php',
  require __DIR__ . '/hu/misc.php',
  require __DIR__ . '/hu/widgets.php',
  require __DIR__ . '/hu/pages.php',
  require __DIR__ . '/hu/settings.php',
  require __DIR__ . '/hu/user_management.php',
  require __DIR__ . '/hu/system.php',
  require __DIR__ . '/hu/help_manual.php',
  require __DIR__ . '/hu/dashboard.php',
  require __DIR__ . '/hu/errors.php'
);

// Generate dynamic translations for app uninstall/reinstall
foreach ($APPS as $key => $value) {
  $lang[$key . '_UNINSTALL'] = 'You are about to uninstall <span style="color:#01cea2">' . $value . '</span> from your system.<br/><br/>This will completely remove all of your configurations and settings... this action is irreversible.<br/><br/>You may reinstall <span style="color:#01cea2">' . $value . '</span> at any time, however, your settings will be reset to default.';
  $lang[$key . '_REINSTALL'] = 'You are about to reinstall <span style="color:#01cea2">' . $value . '</span>.<br/><br/>This will completely remove/reset all of your current configurations, files and settings... this action is irreversible.';
}

// Add dynamic translations that depend on variables
$lang['CALIBRE_INSTALL_MESSAGE'] = 'You have the option to specify a custom directory path for your Calibre library. If the chosen path doesn\'t currently exist, it will be automatically generated for you.<br>Alternatively, if you prefer to use the default path, simply leave the field blank, and the library will be located at:<br><code>/home/' . $username . '/.config/Calibre/library</code>';

$lang['CUSTOM_PATH_TOOLTIP_NO_RCLONE'] = 'Set this to Yes to enter the path to your media library.<br>The default path is:<br><code>/home/' . $username . '/Media</code>';
$lang['CUSTOM_PATH_TOOLTIP_RCLONE']    = 'Set this to Yes to enter the path to your media library.<br>The default path is:<br><code>/home/' . $username . '/rclone/cache</code>';

$lang['JDOWNLOADER_INSTALL_PATH_MESSAGE'] = 'You have the option to specify a custom directory path for your JDownloader downloads. If the chosen path doesn\'t currently exist, it will be automatically generated for you.<br>Alternatively, if you prefer to use the default path, simply leave the field blank, and the library will be located at:<br><code>/home/' . $username . '/Downloads</code>';

$lang['KAVITA_INSTALL_MESSAGE'] = 'You have the option to specify a custom directory path for your Kavita library. If the chosen path doesn\'t currently exist, it will be automatically generated for you.<br>Alternatively, if you prefer to use the default path, simply leave the field blank, and the library will be located at:<br><code>/home/' . $username . '/.config/Kavita/library</code>';

$lang['MYLAR3_INSTALL_MESSAGE'] = 'You have the option to specify a custom path for your Mylar3 Comics directory. If the chosen path doesn\'t currently exist, it will be automatically generated for you.<br>Alternatively, if you prefer to use the default path, simply leave the field blank, and the directory will be located at:<br><code>/home/' . $username . '/Media/Comics</code>';

$lang['PLEX_DATA_PATH_TOOLTIP'] = 'You have the option to specify a custom data path for your Plex install. If the chosen path doesn\'t currently exist, it will be automatically generated for you.<br>Alternatively, if you prefer to use the default path, simply keep the selection as \'No\', and the data directory will be located at:<br><code>/home/' . $username . '/.config/\'Plex Media Server\'</code>';

$lang['WIREGUARD_INSTALL_POSTUP_RULE_PH'] = 'iptables -A FORWARD -i %i -j ACCEPT; iptables -t nat -A POSTROUTING -o ' . $network_interface . ' -j MASQUERADE';

// Export the language array as $L for backwards compatibility
$L = $lang;
