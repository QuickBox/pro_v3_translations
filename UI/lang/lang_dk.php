<?php

/**
 * QuickBox Pro Danish Language Bridge File
 *
 * This file merges all modular translation files into a single $lang array
 * while preserving backwards compatibility for all CLI and interface functions.
 *
 * @category   Danish
 * @version    3.0.1.298
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
  require __DIR__ . '/dk/navigation.php',
  require __DIR__ . '/dk/buttons.php',
  require __DIR__ . '/dk/popup.php',
  require __DIR__ . '/dk/misc.php',
  require __DIR__ . '/dk/widgets.php',
  require __DIR__ . '/dk/pages.php',
  require __DIR__ . '/dk/settings.php',
  require __DIR__ . '/dk/user_management.php',
  require __DIR__ . '/dk/system.php',
  require __DIR__ . '/dk/help_manual.php',
  require __DIR__ . '/dk/dashboard.php',
  require __DIR__ . '/dk/errors.php'
);

// Generate dynamic translations for app uninstall/reinstall
foreach ($APPS as $key => $value) {
  $lang[$key . '_UNINSTALL'] = 'Du er ved at afinstallere <span style="color:#01cea2">' . $value . '</span> fra dit system.<br/><br/>Dette vil helt fjerne alle dine konfigurationer og indstillinger... denne handling er uigenkaldelig.<br/><br/>Du kan geninstallere <span style="color:#01cea2">' . $value . '</span> når som helst, men dine indstillinger vil blive nulstillet til standard.';
  $lang[$key . '_REINSTALL'] = 'Du er ved at geninstallere <span style="color:#01cea2">' . $value . '</span>.<br/><br/>Dette vil helt fjerne/nulstille alle dine nuværende konfigurationer, filer og indstillinger... denne handling er uigenkaldelig.';
}

// Add dynamic translations that depend on variables
$lang['CALIBRE_INSTALL_MESSAGE'] = 'Du har mulighed for at angive en brugerdefineret mappesti til din Calibre-bibliotek. Hvis den valgte sti ikke findes i øjeblikket, vil den blive automatisk genereret for dig.<br>Alternativt, hvis du foretrækker at bruge standardstien, skal du blot lade feltet være tomt, og biblioteket vil være placeret på:<br><code>/home/' . $username . '/.config/Calibre/library</code>';

$lang['CUSTOM_PATH_TOOLTIP_NO_RCLONE'] = 'Sæt dette til Ja for at indtaste stien til dit mediebibliotek.<br>Standardstien er:<br><code>/home/' . $username . '/Media</code>';
$lang['CUSTOM_PATH_TOOLTIP_RCLONE']    = 'Sæt dette til Ja for at indtaste stien til dit mediebibliotek.<br>Standardstien er:<br><code>/home/' . $username . '/rclone/cache</code>';

$lang['JDOWNLOADER_INSTALL_PATH_MESSAGE'] = 'Du har mulighed for at angive en brugerdefineret mappesti til dine JDownloader-downloads. Hvis den valgte sti ikke findes i øjeblikket, vil den blive automatisk genereret for dig.<br>Alternativt, hvis du foretrækker at bruge standardstien, skal du blot lade feltet være tomt, og biblioteket vil være placeret på:<br><code>/home/' . $username . '/Downloads</code>';

$lang['KAVITA_INSTALL_MESSAGE'] = 'Du har mulighed for at angive en brugerdefineret mappesti til dit Kavita-bibliotek. Hvis den valgte sti ikke findes i øjeblikket, vil den blive automatisk genereret for dig.<br>Alternativt, hvis du foretrækker at bruge standardstien, skal du blot lade feltet være tomt, og biblioteket vil være placeret på:<br><code>/home/' . $username . '/.config/Kavita/library</code>';

$lang['MYLAR3_INSTALL_MESSAGE'] = 'Du har mulighed for at angive en brugerdefineret sti til din Mylar3 Comics-mappe. Hvis den valgte sti ikke findes i øjeblikket, vil den blive automatisk genereret for dig.<br>Alternativt, hvis du foretrækker at bruge standardstien, skal du blot lade feltet være tomt, og mappen vil være placeret på:<br><code>/home/' . $username . '/Media/Comics</code>';

$lang['PLEX_DATA_PATH_TOOLTIP'] = 'Du har mulighed for at angive en brugerdefineret datasti til din Plex-installation. Hvis den valgte sti ikke findes i øjeblikket, vil den blive automatisk genereret for dig.<br>Alternativt, hvis du foretrækker at bruge standardstien, skal du blot beholde valget som \'Nej\', og datamappen vil være placeret på:<br><code>/home/' . $username . '/.config/\'Plex Media Server\'</code>';

$lang['WIREGUARD_INSTALL_POSTUP_RULE_PH'] = 'iptables -A FORWARD -i %i -j ACCEPT; iptables -t nat -A POSTROUTING -o ' . $network_interface . ' -j MASQUERADE';

// Export the language array as $L for backwards compatibility
$L = $lang;
