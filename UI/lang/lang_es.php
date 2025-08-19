<?php

/**
 * QuickBox Pro Spanish Language Bridge File
 *
 * This file merges all modular translation files into a single $lang array
 * while preserving backwards compatibility for all CLI and interface functions.
 *
 * @category   Spanish
 * @version    3.0.1.295
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
  require __DIR__ . '/es/navigation.php',
  require __DIR__ . '/es/buttons.php',
  require __DIR__ . '/es/popup.php',
  require __DIR__ . '/es/misc.php',
  require __DIR__ . '/es/widgets.php',
  require __DIR__ . '/es/pages.php',
  require __DIR__ . '/es/settings.php',
  require __DIR__ . '/es/user_management.php',
  require __DIR__ . '/es/system.php',
  require __DIR__ . '/es/help_manual.php',
  require __DIR__ . '/es/dashboard.php',
  require __DIR__ . '/es/errors.php'
);

// Generate dynamic translations for app uninstall/reinstall
foreach ($APPS as $key => $value) {
  $lang[$key . '_UNINSTALL'] = 'Estás a punto de desinstalar <span style="color:#01cea2">' . $value . '</span> de tu sistema.<br/><br/>Esto eliminará por completo todas tus configuraciones y ajustes... esta acción es irreversible.<br/><br/>Puedes reinstalar <span style="color:#01cea2">' . $value . '</span> en cualquier momento, sin embargo, tu configuración se restablecerá a los valores predeterminados.';
  $lang[$key . '_REINSTALL'] = 'Estás a punto de reinstalar <span style="color:#01cea2">' . $value . '</span>.<br/><br/>Esto eliminará/restablecerá por completo todas tus configuraciones, archivos y ajustes actuales... esta acción es irreversible.';
}

// Add dynamic translations that depend on variables
$lang['CALIBRE_INSTALL_MESSAGE'] = 'Tienes la opción de especificar una ruta de directorio personalizada para tu biblioteca Calibre. Si la ruta elegida no existe actualmente, se generará automáticamente para ti.<br>Alternativamente, si prefieres usar la ruta predeterminada, simplemente deja el campo en blanco, y la biblioteca se ubicará en:<br><code>/home/' . $username . '/.config/Calibre/library</code>';

$lang['CUSTOM_PATH_TOOLTIP_NO_RCLONE'] = 'Establece esto en Sí para ingresar la ruta a tu biblioteca multimedia.<br>La ruta predeterminada es:<br><code>/home/' . $username . '/Media</code>';
$lang['CUSTOM_PATH_TOOLTIP_RCLONE']    = 'Establece esto en Sí para ingresar la ruta a tu biblioteca multimedia.<br>La ruta predeterminada es:<br><code>/home/' . $username . '/rclone/cache</code>';

$lang['JDOWNLOADER_INSTALL_PATH_MESSAGE'] = 'Tienes la opción de especificar una ruta de directorio personalizada para tus descargas de JDownloader. Si la ruta elegida no existe actualmente, se generará automáticamente para ti.<br>Alternativamente, si prefieres usar la ruta predeterminada, simplemente deja el campo en blanco, y la biblioteca se ubicará en:<br><code>/home/' . $username . '/Downloads</code>';

$lang['KAVITA_INSTALL_MESSAGE'] = 'Tienes la opción de especificar una ruta de directorio personalizada para tu biblioteca Kavita. Si la ruta elegida no existe actualmente, se generará automáticamente para ti.<br>Alternativamente, si prefieres usar la ruta predeterminada, simplemente deja el campo en blanco, y la biblioteca se ubicará en:<br><code>/home/' . $username . '/.config/Kavita/library</code>';

$lang['MYLAR3_INSTALL_MESSAGE'] = 'Tienes la opción de especificar una ruta personalizada para tu directorio Mylar3 Comics. Si la ruta elegida no existe actualmente, se generará automáticamente para ti.<br>Alternativamente, si prefieres usar la ruta predeterminada, simplemente deja el campo en blanco, y el directorio se ubicará en:<br><code>/home/' . $username . '/Media/Comics</code>';

$lang['PLEX_DATA_PATH_TOOLTIP'] = 'Tienes la opción de especificar una ruta de datos personalizada para tu instalación de Plex. Si la ruta elegida no existe actualmente, se generará automáticamente para ti.<br>Alternativamente, si prefieres usar la ruta predeterminada, simplemente mantén la selección como \'No\', y el directorio de datos se ubicará en:<br><code>/home/' . $username . '/.config/\'Plex Media Server\'</code>';

$lang['WIREGUARD_INSTALL_POSTUP_RULE_PH'] = 'iptables -A FORWARD -i %i -j ACCEPT; iptables -t nat -A POSTROUTING -o ' . $network_interface . ' -j MASQUERADE';

// Export the language array as $L for backwards compatibility
$L = $lang;
