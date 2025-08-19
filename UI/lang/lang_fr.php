<?php

/**
 * QuickBox Pro French Language Bridge File
 *
 * This file merges all modular translation files into a single $lang array
 * while preserving backwards compatibility for all CLI and interface functions.
 *
 * @category   French
 * @version    3.0.1.297
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
  require __DIR__ . '/fr/navigation.php',
  require __DIR__ . '/fr/buttons.php',
  require __DIR__ . '/fr/popup.php',
  require __DIR__ . '/fr/misc.php',
  require __DIR__ . '/fr/widgets.php',
  require __DIR__ . '/fr/pages.php',
  require __DIR__ . '/fr/settings.php',
  require __DIR__ . '/fr/user_management.php',
  require __DIR__ . '/fr/system.php',
  require __DIR__ . '/fr/help_manual.php',
  require __DIR__ . '/fr/dashboard.php',
  require __DIR__ . '/fr/errors.php'
);

// Generate dynamic translations for app uninstall/reinstall
foreach ($APPS as $key => $value) {
  $lang[$key . '_UNINSTALL'] = 'Vous êtes sur le point de désinstaller <span style="color:#01cea2">' . $value . '</span> de votre système.<br/><br/>Cela supprimera complètement toutes vos configurations et paramètres... cette action est irréversible.<br/><br/>Vous pouvez réinstaller <span style="color:#01cea2">' . $value . '</span> à tout moment, cependant, vos paramètres seront réinitialisés par défaut.';
  $lang[$key . '_REINSTALL'] = 'Vous êtes sur le point de réinstaller <span style="color:#01cea2">' . $value . '</span>.<br/><br/>Cela supprimera/réinitialisera complètement toutes vos configurations, fichiers et paramètres actuels... cette action est irréversible.';
}

// Add dynamic translations that depend on variables
$lang['CALIBRE_INSTALL_MESSAGE'] = 'Vous avez la possibilité de spécifier un chemin de répertoire personnalisé pour votre bibliothèque Calibre. Si le chemin choisi n\'existe pas actuellement, il sera automatiquement généré pour vous.<br>Alternativement, si vous préférez utiliser le chemin par défaut, laissez simplement le champ vide, et la bibliothèque sera située à :<br><code>/home/' . $username . '/.config/Calibre/library</code>';

$lang['CUSTOM_PATH_TOOLTIP_NO_RCLONE'] = 'Réglez ceci sur Oui pour entrer le chemin vers votre médiathèque.<br>Le chemin par défaut est :<br><code>/home/' . $username . '/Media</code>';
$lang['CUSTOM_PATH_TOOLTIP_RCLONE']    = 'Réglez ceci sur Oui pour saisir le chemin d\'accès à votre médiathèque.<br>Le chemin par défaut est :<br><code>/home/' . $username . '/rclone/cache</code>';

$lang['JDOWNLOADER_INSTALL_PATH_MESSAGE'] = 'Vous avez la possibilité de spécifier un chemin de répertoire personnalisé pour vos téléchargements JDownloader. Si le chemin choisi n\'existe pas actuellement, il sera automatiquement généré pour vous.<br>Alternativement, si vous préférez utiliser le chemin par défaut, laissez simplement le champ vide, et la bibliothèque se trouvera à :<br><code>/home/' . $username . '/Downloads</code>';

$lang['KAVITA_INSTALL_MESSAGE'] = 'Vous avez la possibilité de spécifier un chemin de répertoire personnalisé pour votre bibliothèque Kavita. Si le chemin choisi n\'existe pas actuellement, il sera automatiquement généré pour vous.<br>Alternativement, si vous préférez utiliser le chemin par défaut, laissez simplement le champ vide, et la bibliothèque se trouvera à :<br><code>/home/' . $username . '/.config/Kavita/library</code>';

$lang['MYLAR3_INSTALL_MESSAGE'] = 'Vous avez la possibilité de spécifier un chemin personnalisé pour votre répertoire Mylar3 Comics. Si le chemin choisi n\'existe pas actuellement, il sera automatiquement généré pour vous.<br>Alternativement, si vous préférez utiliser le chemin par défaut, laissez simplement le champ vide, et le répertoire sera situé à :<br><code>/home/' . $username . '/Media/Comics</code>';

$lang['PLEX_DATA_PATH_TOOLTIP'] = 'Vous avez la possibilité de spécifier un chemin de données personnalisé pour votre installation Plex. Si le chemin choisi n\'existe pas actuellement, il sera automatiquement généré pour vous.<br>Si vous préférez utiliser le chemin par défaut, conservez simplement la sélection sur \'Non\', et le répertoire de données sera situé à :<br><code>/home/' . $username . '/.config/\'Plex Media Server\'</code>';

$lang['WIREGUARD_INSTALL_POSTUP_RULE_PH'] = 'iptables -A FORWARD -i %i -j ACCEPT; iptables -t nat -A POSTROUTING -o ' . $network_interface . ' -j MASQUERADE';

// Export the language array as $L for backwards compatibility
$L = $lang;
