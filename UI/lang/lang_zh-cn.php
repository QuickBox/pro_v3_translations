<?php

/**
 * QuickBox Pro Simplified Chinese Language Bridge File
 *
 * This file merges all modular translation files into a single $lang array
 * while preserving backwards compatibility for all CLI and interface functions.
 *
 * @category   Simplified Chinese
 * @version    3.0.1.291
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
  require __DIR__ . '/zh-cn/navigation.php',
  require __DIR__ . '/zh-cn/buttons.php',
  require __DIR__ . '/zh-cn/popup.php',
  require __DIR__ . '/zh-cn/misc.php',
  require __DIR__ . '/zh-cn/widgets.php',
  require __DIR__ . '/zh-cn/pages.php',
  require __DIR__ . '/zh-cn/settings.php',
  require __DIR__ . '/zh-cn/user_management.php',
  require __DIR__ . '/zh-cn/system.php',
  require __DIR__ . '/zh-cn/help_manual.php',
  require __DIR__ . '/zh-cn/dashboard.php',
  require __DIR__ . '/zh-cn/errors.php'
);

// Generate dynamic translations for app uninstall/reinstall
foreach ($APPS as $key => $value) {
  $lang[$key . '_UNINSTALL'] = '您即将从系统中卸载 <span style="color:#01cea2">' . $value . '</span>。<br/><br/>这将完全删除您的所有配置和设置...此操作不可逆转。<br/><br/>您可以随时重新安装 <span style="color:#01cea2">' . $value . '</span>，但是，您的设置将重置为默认值。';
  $lang[$key . '_REINSTALL'] = '您即将重新安装 <span style="color:#01cea2">' . $value . '</span>。<br/><br/>这将完全删除/重置您当前的所有配置、文件和设置...此操作不可逆转。';
}

// Add dynamic translations that depend on variables
$lang['CALIBRE_INSTALL_MESSAGE'] = '您可以选择为 Calibre 库指定自定义目录路径。如果所选路径当前不存在，系统会自动为您生成该路径。<br>或者，如果您喜欢使用默认路径，只需将该字段留空，库将位于：<br><code>/home/' . $username . '/.config/Calibre/library</code>';

$lang['CUSTOM_PATH_TOOLTIP_NO_RCLONE'] = '将此设置为"是"以输入媒体库的路径。<br>默认路径为：<br><code>/home/' . $username . '/Media</code>';
$lang['CUSTOM_PATH_TOOLTIP_RCLONE']    = '将此设置为"是"以输入媒体库的路径。<br>默认路径为：<br><code>/home/' . $username . '/rclone/cache</code>';

$lang['JDOWNLOADER_INSTALL_PATH_MESSAGE'] = '您可以选择为 JDownloader 下载指定自定义目录路径。如果所选路径当前不存在，系统会自动为您生成该路径。<br>或者，如果您喜欢使用默认路径，只需将该字段留空，库将位于：<br><code>/home/' . $username . '/Downloads</code>';

$lang['KAVITA_INSTALL_MESSAGE'] = '您可以选择为 Kavita 库指定自定义目录路径。如果所选路径当前不存在，它将自动为您生成。<br>或者，如果您更喜欢使用默认路径，只需将该字段留空，库将位于：<br><code>/home/' . $username . '/.config/Kavita/library</code>';

$lang['MYLAR3_INSTALL_MESSAGE'] = '您可以选择为 Mylar3 Comics 目录指定自定义路径。如果所选路径当前不存在，系统将自动为您生成。<br>或者，如果您希望使用默认路径，只需将该字段留空，目录将位于：<br><code>/home/' . $username . '/Media/Comics</code>';

$lang['PLEX_DATA_PATH_TOOLTIP'] = '您可以选择为 Plex 安装指定自定义数据路径。如果所选路径当前不存在，系统会自动为您生成该路径。<br>或者，如果您更喜欢使用默认路径，只需将选择保留为"否"，数据目录将位于：<br><code>/home/' . $username . '/.config/\'Plex Media Server\'</code>';

$lang['WIREGUARD_INSTALL_POSTUP_RULE_PH'] = 'iptables -A FORWARD -i %i -j ACCEPT; iptables -t nat -A POSTROUTING -o ' . $network_interface . ' -j MASQUERADE';

// Export the language array as $L for backwards compatibility
$L = $lang;
