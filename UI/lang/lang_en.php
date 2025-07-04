<?php

/**
 * QuickBox Pro English Language File
 *
 * This file is used to translate the QuickBox Pro Dashboard into English.
 * Ready for QuickBox Pro v3.2.0 : March 28 2025
 *
 * @package    dashboard
 * @subpackage lang
 * @category   English
 * @version    3.0.1.264
 * @since      1.0.0
 *
 * @var Configs $configs The configurations object.
 * @var Session $session The user session object.
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

/*
 * @summary This file contains the structure for navigation, widgets, miscellaneous items, and pages for QuickBox Pro.
 *
 * NAVIGATION (#1)
 * --------------
 *   - #1.1: Language & Theme Selection
 *   - #1.2: User Menu
 *   - #1.3: Sidebar Menu
 *   - #1.4: Sidebar Submenus
 *   - #1.5: Footer
 *
 * MISCELLANEOUS (#2)
 * ------------------
 *   - #2.1: Buttons
 *   - #2.2: Popup Texture
 *   - #2.3: App NGINX Config Edit Modal
 *   - #2.4: Other
 *
 * WIDGETS (#3)
 * ------------
 *   Tables Headers (#3.1):
 *     - #3.1.1: App Management Center
 *
 *   Package Management Center (#3.2):
 *     - #3.2.1: App Info
 *     - #3.2.2: App Uninstall
 *     - #3.2.3: App Reinstall
 *     - #3.2.4: Toggles & Tooltips
 *     - #3.2.5: Service Control
 *     - #3.2.6: Rclone-Specific Toggles
 *
 *   Dashboard Widgets (#3.3):
 *     - #3.3.1: Disk Status Widget
 *     - #3.3.2: System Index v1 - Bandwidth Data
 *     - #3.3.3: System Index v1 - Server Load
 *     - #3.3.4: System Index v1 - Memory Status
 *     - #3.3.5: Server Activity Widget
 *
 * PAGES (#4)
 * ----------
 *   Start Screen Forms (#4.1):
 *     - #4.1.1: Login
 *     - #4.1.2: Forgot Password
 *     - #4.1.3: Register
 *     - #4.1.4: Account
 *       - #4.1.4.1: Quotes
 *       - #4.1.4.2: Edit Account Modal
 *     - #4.1.5: Summary
 *
 *   Settings (#4.2):
 *     - #4.2.1: General Settings
 *     - #4.2.2: Email Settings
 *     - #4.2.3: Session Settings
 *     - #4.2.4: User Settings
 *     - #4.2.5: Security Settings
 *
 *   User Management (#4.3):
 *     - #4.3.1: Registration Settings
 *     - #4.3.2: UserAdmin
 *       - #4.3.2.1: Admin User Edit
 *       - #4.3.2.2: Admin Announce
 *     - #4.3.3: User Groups
 *
 *   System (#4.4):
 *     - #4.4.1: Web Console
 *     - #4.4.2: API Control
 *     - #4.4.3: SSL Control
 *     - #4.4.4: VPN Control
 *     - #4.4.5: Troubleshooting
 *     - #4.4.6: System Logs
 *     - #4.4.7: Help Manual
 *       - #4.4.7.1: Description
 *       - #4.4.7.2: Options
 *       - #4.4.7.3: Software
 *       - #4.4.7.4: Software Options Table
 *       - #4.4.7.5: Examples Header
 *       - #4.4.7.6: User Management
 *       - #4.4.7.7: Clean Functions
 *       - #4.4.7.8: Fix Functions
 *       - #4.4.7.9: Generate Functions
 *       - #4.4.7.10: Manage Functions
 *       - #4.4.7.11: News Functions
 *       - #4.4.7.12: Support Functions
 *       - #4.4.7.13: Update Functions
 *       - #4.4.7.14: Bugs & Reporting
 *       - #4.4.7.15: Disclaimer
 *       - #4.4.7.16: License
 *       - #4.4.7.17: Miscellaneous
 *     - #4.4.8: Changelogs / Update
 *     - #4.4.9: System Dashboard
 *       - #4.4.9.1: System Index - Bandwidth Data (modal)
 *     - #4.4.10: What's Streaming Dashboard
 *       - #4.4.10.1: What's Streaming - page level errors & messages
 *
 *   Error Pages (#4.6)
 */

/* ********************************************************************************
 * #1 NAVIGATION
 *
 * #1.1 - language & theme selection
 ************************************/
$L['SELECT_LANGUAGE'] = 'Click to select the language';
$L['CHINESE']         = 'Chinese';
$L['DANISH']          = 'Danish';
$L['ENGLISH']         = 'English';
$L['FRENCH']          = 'French';
$L['GERMAN']          = 'German';
$L['PORTUGUESE']      = 'Portuguese';
$L['SPANISH']         = 'Spanish';
$L['SELECT_THEME']    = 'Click to select the theme';
$L['THEME_DARK']      = 'Dark Theme';
$L['THEME_LIGHT']     = 'Light Theme';

/* **********************************
 * #1.2 - user menu (top right)
 ************************************/
$L['LOG_OUT'] = 'Log Out';
$L['PROFILE'] = 'My Profile';
$L['REBOOT']  = 'Reboot';

/* **********************************
 * #1.3 - sidebar menu
 ************************************/
$L['ABOUT_AND_TIPS']    = 'About / QuickTips';
$L['APP_DASHBOARD']     = 'Software Dashboard';
$L['DASHBOARD']         = 'The Dashboard';
$L['DB_MGMNT']          = 'phpMyAdmin';
$L['EXTERNAL_LINKS']    = 'Custom links';
$L['GENERAL_SETTINGS']  = 'General Settings';
$L['HELP_SUPPORT']      = 'Help / Update';
$L['KB']                = 'Knowledge Base';
$L['PLUGINS']           = 'Plugins';
$L['REGISTRATION']      = 'Registration';
$L['SECURITY_SETTINGS'] = 'Security Settings';
$L['SESSION_SETTINGS']  = 'Session Settings';
$L['SETTINGS']          = 'Settings';
$L['SYS_DASHBOARD']     = 'System Dashboard';
$L['SYSTEM_LOGS']       = 'System Logs';
$L['SYSTEM']            = 'System';
$L['USER_ADMIN']        = 'User Admin';
$L['USER_GROUPS']       = 'User Groups';
$L['USER_MANAGEMENT']   = 'User Management';
$L['USER_SETTINGS']     = 'User Settings';
$L['WEB_CONSOLE']       = 'Web Console';

/* **********************************
 * #1.4 - sidebar submenus
 ************************************/
$L['APP_MENU']        = 'Software Menu';
$L['APPLICATIONS']    = 'My Software';
$L['DASHBOARD_INFO']  = 'Select between the administrative system dashboard or the software dashboard seen by all users.';
$L['DASHBOARD_VIEW']  = 'Dashboard View';
$L['DOWNLOADS']       = 'Downloads';
$L['FILEMANAGER']     = 'File Manager';
$L['NZB_CLIENTS']     = 'NZB Clients';
$L['PLUGINS_CENTER']  = 'Plugins Center';
$L['PLUGINS_INFO']    = 'Easily install and uninstall plugins simply by clicking on the plugin name.';
$L['RPLUGINS_NOTICE'] = 'Easily install and uninstall ruTorrent plugins simply by clicking on the plugin name';
$L['RPLUGINS']        = 'ruTorrent Plugins';
$L['TORRENT_CLIENTS'] = 'Torrent Clients';

/* **********************************
 * #1.5 - footer
 ************************************/
$L['ALL_RIGHTS'] = 'All Rights Reserved.';

/* ********************************************************************************
 * #2 MISCELLANEOUS
 *
 * #2.1 - buttons
 ************************************/
$L['ACTIVATE_USERS']                = 'Activate Users';
$L['ADD_IP_ADDRESS']                = 'Add IP Address';
$L['ADD_USERNAME']                  = 'Add Username';
$L['AGREE']                         = 'I understand, do it!';
$L['API_ACTIVATE']                  = 'Activate';
$L['APP_MANAGEMENT']                = 'Software Management';
$L['APPS_INSTALLED']                = 'Software Installed';
$L['AUTO_DISABLE']                  = 'Disable Automatic Updates';
$L['AUTO_ENABLE']                   = 'Enable Automatic Updates';
$L['BACK']                          = 'Back';
$L['BAN_USER']                      = 'Ban User';
$L['CANCEL']                        = 'Cancel';
$L['CLEAN_LOG']                     = 'Clean Update Log';
$L['CLEAN_RCLOG']                   = 'Clean RClone Upload Log';
$L['CLICK_ME']                      = 'Click me';
$L['CLOSE_REFRESH']                 = 'Close & Refresh';
$L['CLOSE']                         = 'Close';
$L['CPU_TAB']                       = 'CPU';
$L['CREATE_ANNOUNCEMENT']           = 'Create Announcement';
$L['CREATE_GROUP']                  = 'Create Group';
$L['CREATE_NEW_GROUP']              = 'Create a New Group';
$L['CREATE_NEW_USER']               = 'Create New User';
$L['CREATE_USER']                   = 'Create User';
$L['DATABASE_SIZE']                 = 'Database Size:';
$L['DELETE_ALL_ANNOUNCEMENTS']      = 'Delete All Announcements';
$L['DELETE_ALL_LOGS']               = 'Delete All Logs (> 30 days)';
$L['DELETE_INACTIVE_USERS']         = 'Delete Inactive Users';
$L['DELETE_LOGS']                   = 'Delete Logs';
$L['DELETE_SELECTED_ANNOUNCEMENTS'] = 'Delete Selected Announcements';
$L['DELETE_SELECTED_SESSIONS']      = 'Delete Selected Sessions';
$L['DELETE_SELECTED']               = 'Delete Selected';
$L['DELETE_USER']                   = 'Delete User';
$L['DEMOTE']                        = 'Demote from Admin';
$L['DISABLED']                      = 'Disabled';
$L['DISK_TAB']                      = 'Disk';
$L['DOWNLOAD']                      = 'Download';
$L['EDIT_ANNOUNCEMENT']             = 'Edit Selected Announcement';
$L['EDIT_GROUP']                    = 'Edit Group';
$L['EDIT_USER']                     = 'Edit User';
$L['ENABLED']                       = 'Enabled';
$L['EXECUTE']                       = 'Execute';
$L['GENERATE']                      = 'Generate';
$L['GO_BACK']                       = 'Go Back';
$L['IN_USE']                        = 'In Use';
$L['INSTALL']                       = 'Install';
$L['INSTALLED']                     = 'Uninstall';
$L['INSTALLING']                    = 'Installing';
$L['KILL_USER_SESSION']             = 'Kill All User Sessions';
$L['LAUNCH']                        = 'Launch';
$L['LOGIN']                         = 'Login';
$L['LOGOFF']                        = 'Logoff';
$L['MEMORY_TAB']                    = 'Memory';
$L['NETWORK_TAB']                   = 'Network';
$L['NGINX_BACKUP']                  = 'Backup Nginx Config';
$L['NGINX_DEFAULT']                 = 'Restore Default Config';
$L['NGINX_DISABLE']                 = 'Disable Auth Popup';
$L['NGINX_ENABLE']                  = 'Enable Auth Popup';
$L['NGINX_RESTORE']                 = 'Restore Nginx Backup';
$L['APP_BACKUP_FULL']               = 'Full Backup';
$L['APP_BACKUP_PARTIAL']            = 'Partial Backup';
$L['APP_DEFAULT_PARTIAL_RESTORE']   = 'Restore Default';
$L['APP_BACKUP_PARTIAL_RESTORE']    = 'Restore Backup';
$L['ED_MENU_CONFIG_APP']            = 'config & app';
$L['ED_MENU_CONFIG']                = 'config only';
$L['VERSION_ROLLBACK_OPTIONS']      = 'Rollback Options';
$L['VERSION_ROLLBACK_V']            = 'Version: ';
$L['VERSION']                       = 'Version';
$L['DATE']                          = 'Date';
$L['VERSION_ROLLBACK_CONFIRM']      = 'Rollback to this version?';
$L['VERSION_ROLLBACK_DELETE']       = 'Delete this backup?';
$L['PROMOTE']                       = 'Promote to Admin';
$L['RCLONE_LOCK_REMOVE']            = 'remove lock';
$L['RCLONE_LOGS']                   = 'view logs';
$L['RCLONE_UPLOAD']                 = 'upload';
$L['REFRESH']                       = 'Refresh';
$L['REGISTER']                      = 'Register';
$L['REGISTERED']                    = 'Registered';
$L['REINSTALL']                     = 'Reinstall';
$L['RELOAD_CONF']                   = 'Reload Configurations';
$L['RELOAD']                        = 'Reload';
$L['REMOVE_BANNED_IP']              = 'Remove Banned IP Addresses';
$L['REMOVE_DISALLOWED']             = 'Remove Disallowed Usernames';
$L['REMOVE_MEMBER']                 = 'Remove Group Member';
$L['REMOVE']                        = 'Remove';
$L['RESET_VERSION']                 = 'Reset Current Version';
$L['RESET']                         = 'Reset';
$L['RESTART']                       = 'Restart';
$L['SAVE']                          = 'Save';
$L['SERVICE_CONTROL']               = 'Service Control';
$L['SIMULATE_BUTTON']               = 'Simulate';
$L['SIMULATE_END']                  = 'End Sim';
$L['SIMULATE_USER']                 = 'Simulate User';
$L['NANGINX']                       = 'N/A Service runs on nginx';
$L['START']                         = 'Start';
$L['STOP']                          = 'Stop';
$L['SUBMIT']                        = 'Submit Changes';
$L['TOP_PROC_TAB']                  = 'Top Processes';
$L['UNBAN_USER']                    = 'Unban User';
$L['UNINSTALLED']                   = 'Uninstalled';
$L['UNINSTALLING']                  = 'Uninstalling';
$L['UP']                            = 'Up';
$L['UPDATE']                        = 'Update';
$L['UPDATE_TOOLTIP']                = 'Click to view more information';
$L['USER_ACTIONS']                  = 'User Actions';
$L['VIEW_CHANGELOG']                = 'View Changelog';
$L['LATEST']                        = 'latest';
$L['CURRENT']                       = 'current';
$L['VIEW']                          = 'View';

/* **********************************
 * #2.2 - popup texture
 ************************************/
$L['SYSTEM_RESPONSE_TITLE'] = 'System Response';
$L['UNINSTALL_TITLE']       = 'Uninstalling';
$L['UNINSTALLING_TXT_1']    = 'Sorry to see you go ... Uninstalling';
$L['UNINSTALLING_TXT_2']    = 'in progress. Please be patient';

/* **********************************
 * #2.3 - app nginx config edit modal
 ************************************/
$L['ALERT_NGINX_EDITOR']  = 'It is advised to backup your current config first and only alter the config below if you\'re well versed with Nginx or being instructed by a staff member';
$L['BACKUP_NGINX_LOC']    = 'Nginx Config Backup Location';
$L['CURRENT_NGINX_LOC']   = 'Nginx Config Current Location';
$L['NGINX_APP_CONFIGURE'] = 'Nginx Config Editor';
$L['NGINX_EDIT']          = 'Edit Nginx Config';
$L['ALERT_CONFIG_EDITOR'] = 'It is advised to backup your current config first and only alter the config below if you\'re aware of the edits being made, have consulted the software\'s own documentation or are being instructed by a staff member';
$L['BACKUP_CONFIG_LOC']   = 'Config Backup Location';
$L['CURRENT_CONFIG_LOC']  = 'Config Current Location';
$L['APP_CONFIG_OPTIONS']  = 'Software Config Editor';
$L['APP_CONFIG_EDIT']     = 'Edit Software Config';

/* **********************************
 * #2.4 - other
 ************************************/
$L['ABOUT_RELEASE']       = 'About Release';
$L['ADD_MOUNT_PATH_INFO'] = 'Select if you want to ignore quotas (if installed) on the selected directory. This option, when chosen, will disregard quotas for the specified path. Use this option when monitoring a directory where quotas should not be considered. This ensures accurate space calculations, especially for rclone mounts.';
$L['ADD_NEW_MOUNT_CHECK'] = 'Add an existing mount or directory to monitor';
$L['COPYRIGHT']           = 'Copyright';
$L['MOUNT_PATH_SUCCESS']  = 'Path successfully added for monitoring. Refreshing page...';
$L['MOUNT_PATH_ERROR']    = 'The path you attempted to add for monitoring does not exist.<br>Please double-check the path and try again.';
$L['EMAIL']               = 'E-mail';
$L['HERE']                = 'here';
$L['HOME']                = 'Home';
$L['IDLE_L']              = 'idle';
$L['IDLE']                = 'Idle';
$L['IS_AVAILABLE']        = 'is available.';
$L['LANGUAGES']           = 'Languages';
$L['MOUNTS']              = 'Mounts:';
$L['MOUNT_ADD_PATH']      = 'Add Path';
$L['MOUNT_CHECK_ABOUT']   = 'These values are calculated and updated periodically. The values are not real-time. You can force an update on these stats by clicking the \'Start Scan\' button below.';
$L['MOUNT_CHECK_PROCESS'] = 'Space percentage values are currently being calculated in the background. Please check back later for updated results. Requires page refresh.';
$L['MOUNT_MONITOR_INFO']  = 'Additional Mount Info';
$L['MOUNT_START_SCAN']    = 'Start Scan';
$L['NEED_HELP']           = 'Need Help ?';
$L['NGINX_CONF_OPTIONS']  = 'Nginx Conf Options';
$L['NGINX_CONFIG']        = 'Nginx Configuration';
$L['NGINX_SETTINGS']      = 'Nginx Settings';
$L['NO']                  = 'No';
$L['NOTIFICATIONS']       = 'Notifications';
$L['OPEN']                = 'open';
$L['OR']                  = 'or';
$L['PASSWORD']            = 'Password';
$L['PLEASE_HOLD']         = '- Please hold';
$L['REMOVE_MOUNT_PATH']   = 'Remove monitored path. This will not remove the actual directory or mount point.';
$L['REQUIRED_FIELD']      = 'Required Field...';
$L['REQUIRED_FIELDS']     = 'Fields marked with <span style="color:#d9534f">*</span> are required';
$L['SET_HERE']            = 'Set here';
$L['SIMULATE_LIST']       = 'User List';
$L['SIMULATE']            = 'Simulate Users';
$L['SUMMARY']             = 'Summary';
$L['THEMES']              = 'Themes';
$L['UPDATING_QUICKBOX']   = 'Updating QuickBox';
$L['UPDATING']            = 'Updating ';
$L['USED_L']              = 'used';
$L['USERNAME']            = 'Username';
$L['USERS']               = 'Users';
$L['YES']                 = 'Yes';

/* ********************************************************************************
 * #3 WIDGETS
 *
 * #3.1 - Tables Headers
 *
 * #3.1.1 - app management center
 ************************************/
$L['AVAILABILITY'] = 'Availability';
$L['DETAILS']      = 'Details';
$L['NAME']         = 'Name';
$L['CONFIGS']      = 'Configs';
$L['EXTRAS']       = 'Extras';

/* **********************************
 * #3.2 - Package Management Center
 *
 * #3.2.1 - app info
 ************************************/
$L['AIRSONIC']      = 'Airsonic-Advanced is a more modern implementation of the Airsonic fork with several key performance and feature enhancements. It adds and supersedes several features in Airsonic. Airsonic is a free, web-based media streamer, providing ubiquitous access to your music.';
$L['AUTOBRR']       = 'Autobrr is a modern single binary replacement for the autodl-irssi+rutorrent plugin. Autobrr monitors IRC announce channels and torznab RSS feeds to get releases as soon as they are available, with good filtering, and regex support.';
$L['AUTODL']        = 'AutoDL-iRSSi is a plugin for irssi that monitors IRC announce channels and downloads torrent files based on user-defined filters.';
$L['AUTOSCAN']      = 'Autoscan replaces the default Plex and Emby behaviour for picking up file changes on the file system. Autoscan integrates with Sonarr, Radarr, Lidarr and Google Drive to fetch changes in near real-time without relying on the file system.';
$L['BAZARR']        = 'Bazarr is a companion application to Sonarr and Radarr. It manages and downloads subtitles based on your requirements. You define your preferences by TV show or movie and Bazarr takes care of everything for you.';
$L['BAZARR4K']      = 'Bazarr4K is a standalone Bazarr clone for the 4K UHD profiles. It is a means to handle multiple Bazarr instances, while keeping UHD content separate from general content.';
$L['BBR']           = 'BBR is a new congestion control algorithm which is contributed to the Linux kernel TCP stack by Google. With BBR in place, a Linux server can get significantly increased throughput and reduced latency for connections. BBR';
$L['BTSYNC']        = 'BitTorrent Sync by BitTorrent, Inc is a proprietary peer-to-peer file synchronization tool.';
$L['CALIBRE']       = 'Calibre is a cross-platform open-source suite of e-book software. Calibre supports organizing existing e-books into virtual libraries, displaying, editing, creating and converting e-books, as well as syncing e-books with a variety of e-readers. Editing books is supported for EPUB and AZW3 formats.';
$L['COUCHPOTATO']   = 'Download movies automatically, easily and in the best quality as soon as they are released, via usenet or torrents.';
$L['CSF']           = 'ConfigServer Firewall, also known as CSF, is a firewall configuration script created to provide better security for your server while giving you an easy to use, advanced interface for managing your firewall settings.';
$L['DELUGE']        = 'Deluge is a lightweight, Free Software, cross-platform BitTorrent client.';
$L['DUPLICATI']     = 'Duplicati is a free, open source, backup client that securely stores encrypted, incremental, compressed backups on cloud storage services and remote file servers. It can works with Amazon S3, Dropbox, Google Drive, FTP, SSH/SFTP, WebDAV, and <a href="https://nullrefer.ir/?https://duplicati.readthedocs.io/en/latest/01-introduction/#supported-backends" rel="noopener nofollow" target="_blank">many more</a>.';
$L['EMBY']          = 'Emby Server is a client-server software package that lets consumers host their legal personal copies of multimedia — music, video and picture files. ... The Emby client software is an app you need to install on mobile devices and certain settop boxes for televisions, like Android TV.';
$L['FAIL2BAN']      = 'Fail2Ban is an intrusion prevention software framework that protects computer servers from brute-force attacks.';
$L['FILEBOT']       = 'FileBot is the ultimate tool for organizing and renaming your Movies, TV Shows and Anime as well as fetching subtitles and artwork. Its smart and just works.';
$L['FILEBROWSER']   = 'Filebrowser provides a file managing interface within a specified directory and it can be used to upload, delete, preview, rename and edit your files. It allows the creation of multiple users and each user can have its own directory. It can be used as a standalone app or as a middleware.';
$L['FLARESOLVERR']  = 'FlareSolverr is a proxy server to bypass Cloudflare protection.';
$L['FLEXGET']       = 'FlexGet is a multipurpose automation tool for all of your media. Support for torrents, nzbs, podcasts, comics, TV, movies, RSS, HTML, CSV, and more.';
$L['FLOOD']         = 'Flood is a monitoring service for various torrent clients. It\'s a Node.js service that communicates with your favorite torrent client and serves a decent web UI for administration. <a href="https://nullrefer.ir/?https://github.com/Flood-UI" target="_blank" rel="nofollow noopener">Flood-UI</a> organization hosts related projects.';
$L['HEADPHONES']    = 'Headphones is an automated music downloader for NZB and Torrent, written in Python. It supports SABnzbd, NZBget, Transmission, µTorrent, Deluge and Blackhole.';
$L['JACKETT']       = 'API Support for your favorite private trackers.';
$L['JDOWNLOADER']   = 'JDownloader is a free download management tool that allows you to quickly download files from hosting services such as Mediafire, 4Shared, and other similar functionality hosting services. File hosting services often gatekeep your full download speed to incentivize purchasing premium packages; JDownloader helps you circumvent that requirement.';
$L['JELLYFIN']      = 'Jellyfin is a Free Software Media System that puts you in control of managing and streaming your media.';
$L['JELLYSEERR']    = 'Jellyseerr is a free and open source software application for managing requests for your media library. It is a a fork of Overseerr built to bring support for Jellyfin & Emby media servers!';
$L['KAVITA']        = 'Kavita is a fast, feature rich, cross platform reading server. Built with a focus for manga and the goal of being a full solution for all your reading needs. Setup your own server and share your reading collection with your friends and family.';
$L['KOMGA']         = 'Komga is a media server for your digital comics/manga, with a focus on providing a simple and modern interface.';
$L['LAZYLIBRARIAN'] = 'LazyLibrarian is a SickBeard, CouchPotato, Headphones-like application for ebooks, audiobooks and magazines. It uses a combination of  <a href="https://nullrefer.ir/?https://www.goodreads.com/" rel="noopener nofollow" target="_blank">Goodreads</a>  <a href="https://nullrefer.ir/?https://www.librarything.com/" rel="noopener nofollow" target="_blank">Librarything</a> and optionally  <a href="https://nullrefer.ir/?https://www.googleapis.com/books/v1/" rel="noopener nofollow" target="_blank">GoogleBooks</a> as sources for author info and book info.';
$L['LETSENCRYPT']   = 'Let\'s Encrypt is a free, automated, and open certificate authority (CA), run for the public\'s benefit. It is a service provided by the <a href="https://nullrefer.ir/?https://letsencrypt.org/isrg/" rel="noopener nofollow" target="_blank">Internet Security Research Group (ISRG)</a>.';
$L['LIDARR']        = 'Lidarr is an independent fork of Sonarr reworked for automatically downloading music via Usenet and BitTorrent. The project was inspired by other Usenet/BitTorrent music downloaders such as Headphones.';
$L['MEDUSA']        = 'Video File Manager for TV Shows, It watches for new episodes of your favorite shows and when they are posted it does its magic. Allows manual search and other exclusive features, check Medusa on <a href="https://nullrefer.ir/?https://github.com/pymedusa/Medusa" rel="noopener nofollow" target="_blank">Github</a>.';
$L['MYLAR3']        = 'Mylar is an automated Comic Book (cbr/cbz) downloader program for use with NZB and torrents written in python. It supports SABnzbd, NZBGET, and many torrent clients in addition to DDL.';
$L['NETDATA']       = 'Netdata is distributed, real-time, performance and health monitoring for systems and applications.';
$L['NEXTCLOUD']     = 'Nextcloud is an open source, self-hosted file sync and share and communication app platform. Access & sync your files, contacts, calendars & communicate and collaborate across your devices. You decide what happens with your data, where it is and who can access it!';
$L['NOTIFIARR']     = 'This is the unified client for <a href="https://nullrefer.ir/?https://notifiarr.com/" rel="noopener nofollow" target="_blank">Notifiarr.com</a>. The client enables content requests from Media Bot in your Discord Server and also provides reports for Plex usage and system health among many other features..';
$L['NOVNC']         = 'noVNC is both a VNC client JavaScript library as well as an application built on top of that library. noVNC runs well in any modern browser including mobile browsers (iOS and Android).';
$L['NZBGET']        = 'NZBGet is a binary downloader, which downloads files from Usenet based on information given in nzb-files.  NZBGet is written in C++ and is known for its extraordinary performance and efficiency.';
$L['NZBHYDRA']      = 'NZBHydra is a meta search for NZB indexers. It provides easy access to a number of raw and newznab based indexers. You can search all your indexers from one place and use it as indexer source for tools like Sonarr or CouchPotato.';
$L['NZBHYDRA2']     = 'NZBHydra2 is a meta search for NZB indexers. It provides easy access to a number of raw and newznab based indexers. You can search all your indexers from one place and use it as indexer source for tools like Sonarr or CouchPotato.';
$L['OMBI']          = 'Ombi offers a beautiful and easy to use interface for items users wish to be added to the library. Integrates with CouchPotato, SickChill and Sonarr.';
$L['OVERSEERR']     = 'Overseerr is a free and open source software application for managing requests for your media library. It integrates with your existing services, such as Sonarr, Radarr, and Plex!';
$L['OVPN']          = 'SSL/TLS based user-space VPN. Supports Linux, Solaris, OpenBSD, FreeBSD, NetBSD, Mac OS X, and Windows 2000/XP+.';
$L['PHPMYADMIN']    = 'phpMyAdmin is a free software tool written in <a href="https://nullrefer.ir/?https://php.net/" rel="noopener nofollow" target="_blank">PHP</a>, intended to handle the administration of <a href="https://nullrefer.ir/?https://www.mysql.com/" rel="noopener nofollow" target="_blank">MySQL</a> over the Web. phpMyAdmin supports a wide range of operations on MySQL and MariaDB. Frequently used operations (managing databases, tables, columns, relations, indexes, users, permissions, etc) can be performed via the user interface, while you still have the ability to directly execute any SQL statement.';
$L['PLEX']          = 'Plex lets you stream your content to any Plex enabled device.';
$L['PROWLARR']      = 'Prowlarr is a indexer manager/proxy built on the popular arr .net/reactjs base stack to integrate with your various PVR apps. Prowlarr supports both Torrent Trackers and Usenet Indexers. It integrates seamlessly with Sonarr, Radarr, Lidarr, and Readarr offering complete management of your indexers with no per app Indexer setup required.';
$L['PYLOAD']        = 'pyLoad is a download manager for `Hoster` websites, video sites, and HTTP/FTP links. A list of supported sites can be found <a href="https://nullrefer.ir/?https://github.com/pyload/pyload/wiki/Supported-Hoster" rel="noopener nofollow" target="_blank">here</a>';
$L['QBITTORRENT']   = 'qBittorrent is a free and reliable P2P BitTorrent client. An advanced and multi-platform BitTorrent client with a nice Qt user interface as well as a Web UI for remote control and an integrated search engine.';
$L['QUASSEL']       = 'Quassel IRC is a modern, cross-platform, distributed IRC client based on the Qt4 framework.';
$L['QUOTAS']        = 'This feature of Linux allows the system administrator to allocate a maximum amount of disk space a user or group may use.';
$L['RADARR']        = 'Radarr is an independent fork of Sonarr reworked for automatically downloading movies via Usenet and BitTorrent.<br>The project was inspired by other Usenet/BitTorrent movie downloaders such as CouchPotato.';
$L['RADARR4K']      = 'Radarr4K is a standalone Radarr clone for the 4K UHD profiles. It is a means to handle multiple Radarr instances, while keeping UHD content separate from general content.';
$L['RAPIDLEECH']    = 'Rapid Leech is a free server transfer script for use on various popular upload/download sites such as uploaded.net, Rapidshare.com and more than 120 others.';
$L['RCLONE']        = 'RClone is a command line program to sync files and directories to and from a multitude of hosts';
$L['READARR']       = 'Readarr is a ebook collection manager for Usenet and BitTorrent users. It can monitor multiple RSS feeds for new books from your favorite authors and will interface with clients and indexers to grab, sort, and rename them.';
$L['REQUESTRR']     = 'Requestrr is a Discord chatbot used to simplify using services like Sonarr/Radarr/Ombi via the use of chat! All the users of your Discord Server can request for adding new content and get notified when available.';
$L['RTORRENT']      = 'rTorrent is a quick and efficient BitTorrent client that uses, and is in development alongside, the libTorrent (not to be confused with libtorrent-rasterbar) library. It is written in C++ and uses the ncurses programming library, which means it uses a text user interface.';
$L['RUTORRENT']     = 'ruTorrent is a front-end for the popular Bittorrent client rtorrent. Main features: Lightweight server side, so it can be installed on old and low-end servers and even on some SOHO routers, Extensible - there are several plugins and everybody can create their own one, comes with <a href="https://nullrefer.ir/?https://github.com/QuickBox/club-QuickBox" rel="noopener nofollow" target="_blank">club-QuickBox skin</a>.';
$L['SABNZBD']       = 'SABnzbd is a multi-platform binary newsgroup downloader. The program works in the background and simplifies the downloading verifying and extracting of files from Usenet. SABnzbd uses NZB files (similar to .torrent files, but for Usenet), instead of browsing Usenet directly.';
$L['SEEDCROSS']     = 'SeedCross is a web app to Cross-Seed torrents in Deluge/qBittorrent/Transmission. It is a fork of <a href="https://nullrefer.ir/?https://github.com/BC44/Cross-Seed-AutoDL" rel="noopener nofollow" target="_blank">Cross-Seed-AutoDL</a>.';
$L['SICKCHILL']     = 'Video File Manager for TV Shows, It watches for new episodes of your favorite shows and when they are posted it does its magic.';
$L['SICKGEAR']      = 'SickGear is Sick-Beard evolved. Automate your TV enjoyment with innovation, proven stability and reliability.';
$L['SONARR']        = 'Sonarr is a tv series management tool which will work with both torrents and usenet.';
$L['SONARR4K']      = 'Sonarr4K is a standalone Sonarr clone for the 4K UHD profiles. It is a means to handle multiple Sonarr instances, while keeping UHD content separate from general content.';
$L['SUBSONIC']      = 'Subsonic is a web-based media server. It is written in Java, so it can run on any operating system with Java support. Subsonic supports streaming to multiple clients simultaneously, and supports any streamable media (including MP3, AAC, and Ogg).';
$L['SYNCTHING']     = 'Open Source Continuous File Synchronization with BitTorrent';
$L['TAUTULLI']      = 'A python based web application for monitoring, analytics and notifications for Plex Media Server';
$L['THELOUNGE']     = 'A modern self-hosted web IRC client';
$L['TRANSMISSION']  = 'Transmission is designed for easy, powerful use. The defaults are set to Just Work and it only takes a few clicks to configure advanced features like watch directories, bad peer blocklists, and the web interface. When Ubuntu chose Transmission as its default BitTorrent client, one of the most-cited reasons was its easy learning curve.';
$L['UNIFI']         = 'The UniFi® Controller is a wireless network management software solution from Ubiquiti Networks™. It allows you to manage multiple wireless networks using a web browser.';
$L['UNPACKERR']     = 'Extracts downloads for Radarr, Sonarr, Lidarr, Readarr - Deletes extracted files after import.';
$L['WEBCONSOLE']    = 'TTYD (aka The QuickBox Web Console) is a fully-featured terminal based on Xterm.js with CJK and IME support.';
$L['WIREGUARD']     = 'WireGuard® is an extremely simple yet fast and modern VPN that utilizes state-of-the-art cryptography. It aims to be faster, simpler, leaner, and more useful than IPsec, while avoiding the massive headache. It intends to be considerably more performant than OpenVPN. WireGuard is designed as a general purpose VPN for running on embedded interfaces and super computers alike, fit for many different circumstances.';
$L['X2GO']          = 'X2Go is an open source remote desktop software for Linux that uses the NX technology protocol.';
$L['XTEVE']         = 'XTeVe is an application that simulates a TV tuner, it allows you to have IPTV channels via Plex or Emby. xTeVe can merge multiple M3U and XMLTV files, and send it to your preferred Media Center.';
$L['ZNC']           = 'ZNC is an IRC network bouncer or BNC. It can detach the client from the actual IRC server, and also from selected channels.';

// Create an array of the app names for the uninstall/reinstall translation
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
	'X2GO'          => 'X2Go',
	'XTEVE'         => 'XTeVe',
	'ZNC'           => 'ZNC'
];

/* **********************************
 * #3.2.2 - app uninstall
 ************************************/
// Loop through the array and create the uninstall translation
foreach ($APPS as $key => $value) {
	$L[$key . '_UNINSTALL'] = 'You are about to uninstall <span style="color:#01cea2">' . $value . '</span> from your system.<br/><br/>This will completely remove all of your configurations and settings... this action is irreversible.<br/><br/>You may reinstall <span style="color:#01cea2">' . $value . '</span> at any time, however, your settings will be reset to default.';
}

/* **********************************
 * #3.2.3 - app reinstall
 ************************************/
// Loop through the array and create the reinstall translation
foreach ($APPS as $key => $value) {
	$L[$key . '_REINSTALL'] = 'You are about to reinstall <span style="color:#01cea2">' . $value . '</span>.<br/><br/>This will completely remove/reset all of your current configurations, files and settings... this action is irreversible.';
}

/* **********************************
 * #3.2.4 - toggles & tooltips
 ************************************/
$L['APP_OPTIONS']                  = 'App Options';
$L['NGINX_OPTIONS']                = 'NGinx Options';
$L['CARD_VIEW']                    = 'Card View';
$L['LIST_VIEW']                    = 'List View';
$L['CLI']                          = 'Web Console Only';
$L['COMPAT_E']                     = 'Compatibility Error';
$L['CURRENTLY_INSTALLED_NOTICE']   = 'Looks like you have access to an software that can be installed by only one user at a time. Talk with your System Admin for further status on it\'s availability.';
$L['CURRENTLY_INSTALLED_TITLE']    = 'Someone Currently Has This Software Installed';
$L['DEL1_TOOLTIP']                 = 'It looks like you are running on Ubuntu 20.04. Deluge v1 will not run on this Distro. Please consider installing Deluge v2 to continue as Deluge v2 runs on updated libtorrent1.2+ and python3+.';
$L['DEL2_TOOLTIP']                 = 'It looks like qBittorrent is currently installed. Deluge v2 will not work with qBittorrent installed. Please either remove qBittorrent or install Deluge v1 to continue.';
$L['DEL2XENIAL_TOOLTIP']           = 'It looks like you are running on Ubuntu 16.04. Deluge v2 will not run on this Distro. Please consider installing Deluge v1 to continue.';
$L['EMBY_JELLYFIN_COMPAT_MESSAGE'] = 'Jellyfin Installed';
$L['ENTER_MOUNT_POINT']            = 'Please enter your primary mount point';
$L['FAIL2BAN_TOOLTIP']             = 'Access this feature from ssh by typing:<br><code>qb install fail2ban</code>';
$L['JELLYFIN_EMBY_COMPAT_MESSAGE'] = 'Emby Installed';
$L['MEDUSA_INSTALLED']             = 'Medusa Installed';
$L['OVPN_TOOLTIP']                 = 'Access this feature from ssh by typing:<br><code>qb install vpn -u USER</code>';
$L['PRIMARY_MOUNTM']               = 'Primary Mount';
$L['QBIT_TOOLTIP']                 = 'It looks like Deluge 2 is currently installed. qBittorrent will not work with Deluge 2 installed. Please either remove Deluge 2 or install Deluge 1 to continue.';
$L['QUOTAS_FSTAB']                 = 'Edit your fstab';
$L['QUOTAS_HELP']                  = 'For more about how to install quotas, <a href="https://nullrefer.ir/?https://quickbox.io/knowledge-base/how-to-install-quotas/" rel="noopener nofollow" target="_blank"><strong>please read this F.A.Q first</strong></a>.';
$L['QUOTAS_TOOLTIP']               = 'Add the following instead of <code class="language-bash">defaults</code> on your main mount point to continue';
$L['RCLONE_ADMIN_TOOLTIP']         = 'Access this feature from ssh by typing:<br><code>qb install rclone -u USER [--dropbox|--gdrive] [--encrypted] [--beta]</code><br>See <code>qb help rclone</code> for more options.';
$L['RCLONE_USER_TOOLTIP']          = 'Please contact an System Administrator to have this installed.';
$L['REMOVE_MEDUSA_FIRST']          = 'Remove Medusa first to install this software.';
$L['REMOVE_SICKCHILL_FIRST']       = 'Remove SickChill first to install this software.';
$L['REMOVE_SICKGEAR_FIRST']        = 'Remove SickGear first to install this software.';
$L['SICKCHILL_INSTALLED']          = 'SickChill Installed';
$L['SICKGEAR_INSTALLED']           = 'SickGear Installed';
$L['UNIFI_SSL_TOOLTIP']            = 'If you already have a domain set in your site root as well as a Lets Encrypt certificate already generated for the domain, select this option.';
$L['ZNC_TOOLTIP']                  = 'Access this feature from ssh by typing:<br><code>qb install znc -u USER</code>';

/* **********************************
 * UI - app install/reinstall modals
 *
 * calibre install/reinstall modal
 ************************************/
$L['CALIBRE_INSTALL_TITLE']   = 'Calibre Install';
$L['CALIBRE_REINSTALL_TITLE'] = 'Calibre Reinstall';
$L['CALIBRE_INSTALL_MESSAGE'] = 'You have the option to specify a custom directory path for your Calibre library. If the chosen path doesn\'t currently exist, it will be automatically generated for you.<br>Alternatively, if you prefer to use the default path, simply leave the field blank, and the library will be located at:<br><code>/home/' . $username . '/.config/Calibre/library</code>';

/* **********************************
 * filebot install/reinstall modal
 ************************************/
$L['FILEBOT_INSTALL_TITLE']         = 'Filebot Install';
$L['FILEBOT_REINSTALL_TITLE']       = 'Filebot Reinstall';
$L['PROCESS_DELUGE']                = 'Process downloads for Deluge?';
$L['PROCESS_DELUGE_TOOLTIP']        = 'Set this to Yes to process downloads for Deluge.<br>See how to implement in the script notes located at:<br><code>/home/' . $username . '/.config/Filebot/deluge-postprocess.sh</code>';
$L['CUSTOM_PATH_TOOLTIP_NO_RCLONE'] = 'Set this to Yes to enter the path to your media library.<br>The default path is:<br><code>/home/' . $username . '/Media</code>';
$L['CUSTOM_PATH_TOOLTIP_RCLONE']    = 'Set this to Yes to enter the path to your media library.<br>The default path is:<br><code>/home/' . $username . '/rclone/cache</code>';
$L['PROCESS_NZBGET']                = 'Process downloads for NZBGet?';
$L['PROCESS_NZBGET_TOOLTIP']        = 'Set this to Yes to process downloads for NZBGet.<br>See how to implement in the script notes located at:<br><code>/home/' . $username . '/.config/NZBGet/scripts/nzbget-postprocess.sh</code>';
$L['PROCESS_RTORRENT']              = 'Process downloads for rTorrent?';
$L['PROCESS_SABNZBD']               = 'Process downloads for SABnzbd?';
$L['CUSTOM_MEDIA_PATH']             = 'Use custom path to media library?';
$L['FILEBOT_DEFAULT_PATH']          = 'example';
$L['FILEBOT_LICENSE']               = 'Filebot License';

/* **********************************
 * jdownloader install/reinstall modal
 ************************************/
$L['JDOWNLOADER_INSTALL_TITLE']        = 'JDownloader Install';
$L['JDOWNLOADER_REINSTALL_TITLE']      = 'JDownloader Reinstall';
$L['JDOWNLOADER_EMAIL']                = 'JDownloader account email address';
$L['JDOWNLOADER_PASSWORD']             = 'JDownloader account password';
$L['JDOWNLOADER_INSTALL_PATH_MESSAGE'] = 'You have the option to specify a custom directory path for your JDownloader downloads. If the chosen path doesn\'t currently exist, it will be automatically generated for you.<br>Alternatively, if you prefer to use the default path, simply leave the field blank, and the library will be located at:<br><code>/home/' . $username . '/Downloads</code>';

/* **********************************
 * kavita install/reinstall modal
 ************************************/
$L['KAVITA_INSTALL_TITLE']   = 'Kavita Install';
$L['KAVITA_REINSTALL_TITLE'] = 'Kavita Reinstall';
$L['KAVITA_INSTALL_MESSAGE'] = 'You have the option to specify a custom directory path for your Kavita library. If the chosen path doesn\'t currently exist, it will be automatically generated for you.<br>Alternatively, if you prefer to use the default path, simply leave the field blank, and the library will be located at:<br><code>/home/' . $username . '/.config/Kavita/library</code>';

/* **********************************
 * mylar3 install/reinstall modal
 ************************************/
$L['MYLAR3_INSTALL_TITLE']   = 'Mylar3 Install';
$L['MYLAR3_REINSTALL_TITLE'] = 'Mylar3 Reinstall';
$L['MYLAR3_INSTALL_MESSAGE'] = 'You have the option to specify a custom path for your Mylar3 Comics directory. If the chosen path doesn\'t currently exist, it will be automatically generated for you.<br>Alternatively, if you prefer to use the default path, simply leave the field blank, and the directory will be located at:<br><code>/home/' . $username . '/Media/Comics</code>';

/* **********************************
 * plex install/reinstall modal
 ************************************/
$L['PLEX_CLAIM_MESSAGE']     = '<p style="font-size:12px">To claim your Plex Media Server you must already have an account and signed in to obtain the claim code from: <a href="https://www.plex.tv/claim/" rel="noopener nofollow" target="_blank" style="color:var(--qb-color-37);"><strong>https://www.plex.tv/claim/</strong></a></p><div class="alert alert-light-info fade show border-0 mb-2 mt-0" role="alert" style="font-size:12px;color:var(--qb-color-2)"><strong style="color:var(--qb-color-37)">NOTE:</strong> It is advised to use the \'Copy to Clipboard\' button from the claim code screen to ensure proper insertion as the claim code is case-sensitive.</div>';
$L['PLEX_CLAIM_TITLE']       = 'Plex Media Server Install';
$L['PLEX_CLAIM_TOKEN']       = 'Plex Claim Code';
$L['PLEX_DATA_PATH']         = 'Use custom path for data directory?';
$L['PLEX_DATA_PATH_TOOLTIP'] = 'You have the option to specify a custom data path for your Plex install. If the chosen path doesn\'t currently exist, it will be automatically generated for you.<br>Alternatively, if you prefer to use the default path, simply keep the selection as \'No\', and the data directory will be located at:<br><code>/home/' . $username . '/.config/\'Plex Media Server\'</code>';
$L['PLEX_DOMAIN']            = 'Set domain for Plex Media Server?';
$L['PLEX_DOMAIN_TOOLTIP']    = 'If you already have a domain and the DNS records set up for a Plex subdomain, select \'Yes\' to enter your plex subdomain.<br>This option will configure your Plex Media Server to work seamlessly with your custom Plex domain. It includes setting up the essential Nginx reverse proxy and installing the SSL certificate for your domain to ensure secure access.';

/* **********************************
 * rutorrent plugin control modal
 ************************************/
$L['RUTORRENT_PLUGIN_CONTROL_TITLE'] = 'ruTorrent Plugin Control';
$L['AUTHOR']                         = 'Author';
$L['HELP_URL']                       = 'Documentation';

/* **********************************
 * wireguard install/reinstall modal
 ************************************/
$L['WIREGUARD_INSTALL_TITLE']                 = 'WireGuard Install';
$L['WIREGUARD_REINSTALL_TITLE']               = 'WireGuard Reinstall';
$L['WIREGUARD_CLIENT_OR_SERVER']              = 'WireGuard Client or Server?';
$L['WIREGUARD_CLIENT_OR_SERVER_TOOLTIP']      = 'Selecting « Server » will install WireGuard as a server. Selecting « Client » will install WireGuard as a client. Server is used to host a VPN server, while Client is used to connect to a VPN server. Selecting « Client » will require a provided configuration file from your VPN provider and will route all traffic through the VPN.';
$L['CLIENT']                                  = 'Client';
$L['SERVER']                                  = 'Server';
$L['WIREGUARD_CONFIG_TIPS']                   = 'Please upload your WireGuard server or client configuration file in <code>.conf</code> format.<br><ul><li>For a WireGuard server, the file should contain server configuration details.</li><li>For a WireGuard client, the file should contain client configuration details.</li></ul>These files will be stored in <code>/srv/quickbox/db/wireguard/</code>.<br><br>Most VPN providers supply a configuration file for WireGuard. If you are using NordVPN, which does not provide a configuration file directly, you can generate one using the included NordVPN configuration generator.<br>For more information on generating a NordVPN configuration file, use the command <code>nvpn_conf_gen -h</code> in the CLI.';
$L['WIREGUARD_INSTALL_CONFIG']                = 'Upload WireGuard configuration file';
$L['WIREGUARD_INSTALL_PORT_LABEL']            = 'Listen Port';
$L['WIREGUARD_INSTALL_PORT_PH']               = '51820';
$L['WIREGUARD_INSTALL_CLIENT_COUNT_LABEL']    = 'Number of Clients';
$L['WIREGUARD_INSTALL_CLIENT_COUNT_PH']       = '1';
$L['WIREGUARD_INSTALL_CIDR_LABEL']            = 'CIDR';
$L['WIREGUARD_INSTALL_CIDR_PH']               = '10.8.0.1/24';
$L['WIREGUARD_INSTALL_ALLOWED_ADDRESS_LABEL'] = 'Client Allowed IPs';
$L['WIREGUARD_INSTALL_ALLOWED_ADDRESS_PH']    = '0.0.0.0/0,::/0';
$L['WIREGUARD_INSTALL_ENDPOINT_LABEL']        = 'Endpoint (Optional)';
$L['WIREGUARD_INSTALL_ENDPOINT_PH']           = 'myserver.dyndns.org:51820';
$L['WIREGUARD_INSTALL_DNS_LABEL']             = 'DNS (Optional)';
$L['WIREGUARD_INSTALL_DNS_PH']                = '1.1.1.1';
$L['WIREGUARD_INSTALL_POSTUP_RULE_LABEL']     = 'Post-Up rule';
$L['WIREGUARD_INSTALL_POSTUP_RULE_PH']        = 'iptables -A FORWARD -i %i -j ACCEPT; iptables -t nat -A POSTROUTING -o ' . $network_interface . ' -j MASQUERADE';
$L['WIREGUARD_INSTALL_POSTDOWN_RULE_LABEL']   = 'Post-Down rule';
$L['WIREGUARD_INSTALL_POSTDOWN_RULE_PH']      = 'iptables -D FORWARD -i %i -j ACCEPT; iptables -t nat -D POSTROUTING -o ' . $network_interface . ' -j MASQUERADE';
$L['PROCESSING_COMPLETE_INSTALLER']           = 'Processing complete';
$L['TAP_TO_UNDO_INSTALLER']                   = 'Click to undo';

/* **********************************
 * #3.2.5 - service control
 ************************************/
$L['ACTIVE_STATUS']   = 'active (running)';
$L['APP_KEY']         = 'API Key';
$L['APP_PORT']        = 'Port';
$L['APP_STATUS']      = 'Status';
$L['INACTIVE_STATUS'] = 'inactive (dead)';

/* **********************************
 * #3.2.6 - rclone specific toggles
 ************************************/
$L['ACTIVE_MOUNTED']        = 'active (mounted)';
$L['INACTIVE_NOTMOUNTED']   = 'dead (not mounted)';
$L['RCLONE_LOG_VIEWER']     = 'RClone move.log';
$L['RCLONE_OPTIONS']        = 'RClone Options';
$L['RCLONE_COMMAND_CENTER'] = 'RClone Command Center';
$L['RCLONE_STATUS']         = 'RClone Status';
$L['RCLONE_UPLOAD_MESSAGE'] = 'RClone is currently working in the background to upload your data to gdrive. During this time you will see a lock set in place to verify your process has commenced. This lock will remove itself once the process has completed. Feel free to close this popup at any time.<br/><br/><div class="alert alert-notice" style="color:#fff"><strong>NOTE: </strong> The upload automatically runs via a cronjob every night at 03:12 AM server time.</div>';
$L['RCLONE_UPLOAD_VIEWER']  = 'RClone Upload';
$L['RCMOUNT_STATUS']        = 'MergerFS Status';
$L['RCMOUNT_WHERE']         = 'Mount Location';
$L['CLOUD_MANAGEMENT']      = 'Cloud Software';

/* **********************************
 * #3.3 - DASHBOARD WIDGETS
 *
 * #3.3.1 - disk status widget
 ************************************/
$L['DD_DELUGE']             = 'Deluge';
$L['DD_NZBGET']             = 'NZBGet';
$L['DD_QBITTORRENT']        = 'qBittorrent';
$L['DD_RTORRENT']           = 'rTorrent';
$L['DD_SABNZBD']            = 'SABnzbd';
$L['DD_TRANSMISSION']       = 'Transmission';
$L['DELUGE_TORRENTS']       = 'torrents loaded in Deluge';
$L['DISK_%_1']              = 'You have used';
$L['DISK_%_2']              = 'of your total disk space';
$L['DISK_SPACE']            = 'Disk Space';
$L['FREE']                  = 'Free';
$L['NZBGET_NZB']            = 'nzb loaded in NZBGet';
$L['QBITTORRENT_TORRENTS']  = 'torrents loaded in qBittorrent';
$L['RT_TORRENTS']           = 'torrents loaded in rTorrent';
$L['NO_CLIENTS']            = 'There are currently no torrent or nzb clients installed';
$L['SIZE']                  = 'Size';
$L['CURRENT_USERS_ONLINE']  = 'Users Currently Online';
$L['THERE_ARE']             = 'There are';
$L['SABNZBD_NZB']           = 'nzb loaded in SABnzbd';
$L['TRANSMISSION_TORRENTS'] = 'torrents loaded in Transmission';
$L['USED']                  = 'Used';
$L['YOUR_DISK_STATUS']      = 'Your Disk Status';

/* **********************************
 * #3.3.2 - System Index v1 : bandwidth data widget
 ************************************/
$L['BANDWIDTH_DAILY']    = 'Daily';
$L['BANDWIDTH_DATA']     = 'Bandwidth Data';
$L['BANDWIDTH_HOURLY']   = 'Hourly';
$L['BANDWIDTH_LIVE']     = 'Live';
$L['BANDWIDTH_MONTHLY']  = 'Monthly';
$L['datefmt_days_img']   = '%d';
$L['datefmt_days']       = '%d %B';
$L['datefmt_hours_img']  = '%l';
$L['datefmt_hours']      = '%l%p';
$L['datefmt_months_img'] = '%b';
$L['datefmt_months']     = '%B %Y';
$L['datefmt_top']        = '%d %B %Y';
$L['NETWORK']            = 'Network';
$L['DOWNLOAD']           = 'Download';
$L['UPLOAD']             = 'Upload';

/* **********************************
 * #3.3.3 - System Index v1 : server load widget
 ************************************/
$L['DAYS_L']      = 'days';
$L['HOURS_L']     = 'hours';
$L['MINUTES_L']   = 'min';
$L['SECONDS_L']   = 'sec';
$L['SERVER_LOAD'] = 'Server Load';
$L['SL_TXT']      = 'This is your servers current load average';
$L['UPTIME']      = 'Uptime';

/* **********************************
 * #3.3.4 - System Index v1 : memory status widget
 ************************************/
$L['CACHED_MEMORY']     = 'Cached Memory Usage';
$L['CLEAR_CACHE']       = 'Clear Memory Cache';
$L['CM_BUFFERS']        = 'Buffers are at';
$L['CM_USAGE']          = 'Cache memory usage is at';
$L['PHYSICAL_MEMORY']   = 'Physical Memory Usage';
$L['PM_IDLE']           = 'idle';
$L['PM_USED']           = 'used';
$L['REAL_MEMORY']       = 'Real Memory Usage';
$L['RM_FREE']           = 'Real memory free';
$L['RM_USAGE']          = 'Real memory usage';
$L['SWAP_IDLE']         = 'idle';
$L['SWAP_TOTAL']        = 'total';
$L['SWAP_USAGE']        = 'Swap Usage';
$L['SWAP_USED']         = 'used';
$L['SWAP_ZONE']         = 'SWAP Area';
$L['SYSTEM_RAM_STATUS'] = 'System RAM Status';
$L['TOTAL_RAM']         = 'Total System RAM';
$L['TOTAL']             = 'Total';

/* **********************************
 * #3.3.5 - server activity widget
 ************************************/
$L['ACC_REQ_ACT']         = 'accounts require activation';
$L['GUESTS_ONLINE']       = 'guests online';
$L['LAST_ACTIVE_ON']      = 'was last active on';
$L['LOGGED_ON']           = 'logged on';
$L['MEMBERS']             = 'members';
$L['RECORD_ONLINE']       = 'Record Users Online';
$L['THERE_ARE_AW']        = 'There are';
$L['THERE_ARE_CURRENTLY'] = 'There are currently';
$L['USERS_AND']           = 'users and';
$L['USERS_LAST_VISIT']    = 'new users have registered since your last visit';
$L['CLEAR']               = 'clear';

/* ********************************************************************************
 * #4 PAGES
 *
 * #4.1 - START SCREEN FORMS (login/forgot pass/register/account)
 *
 * #4.1.1 - LOGIN
 ************************************/
$L['CONFIRM_PASS_FIELD_PLACE'] = 'Please confirm your email address.';
$L['CREATE_ACCOUNT']           = 'Create an account';
$L['REMEMBER_ME']              = 'Remember Me';
$L['FORGOT_PASS']              = 'Forgot password?';
$L['LOG_IN']                   = 'Log In';
$L['LOGIN_ACCOUNT']            = 'Log in to your account to continue.';
$L['LOGIN_USERNAME_INVALID']   = 'Login is invalid. Please check your username and try again';
$L['LOGIN_PASSWORD_INVALID']   = 'Login is invalid. Please check your password and try again';
$L['LOGIN_MISSING_USERNAME']   = 'Username not entered';
$L['LOGIN_MISSING_PASSWORD']   = 'Password not entered';
$L['PASS_FIELD_INVALID']       = 'Please provide your password.';
$L['PASS_FIELD_PLACE']         = 'Please type your password.';
$L['PASS_FIELD_VALID']         = 'Password provided, validation ready.';
$L['REGISTRATION_DISABLED']    = 'Registration is currently disabled.';
$L['SIGN_IN']                  = 'Sign In';
$L['UNREGISTERED']             = 'Not registered?';
$L['USER_FIELD_INVALID']       = 'Please provide your username.';
$L['USER_FIELD_PLACE']         = 'Please type your username.';
$L['USER_FIELD_VALID']         = 'Username provided, validation ready.';
$L['ACCOUNT_BANNED']           = 'Your account has been banned.<br/>Please contact a System Administrator.';
$L['ACCOUNT_DISABLED']         = 'Your account is not activated or is disabled.<br/>If you think this is a problem please contact a System Administrator.';
$L['ACCOUNT_INACTIVE_ADMIN']   = 'Your account has not been activated by an Administrator.';
$L['ACCOUNT_INACTIVE_EMAIL']   = 'Your account has not been activated.<br/>Please check your email for the activation link.';
$L['IP_BANNED']                = 'Your IP address has been banned.<br/>Please contact a System Administrator.';

/* **********************************
 * #4.1.2 - FORGOT PASSWORD
 ************************************/
$L['FORGOT_PASSWORD']          = 'Forgot Password';
$L['FORGOT_PASSWORD_INFO']     = 'Please fill out the form below. You\'ll need your username and the e-mail address you used to register (unless you have since changed it).';
$L['EMAIL_FIELD_INVALID']      = 'Please provide your email.';
$L['EMAIL_FIELD_PLACE']        = 'Please type your email address.';
$L['EMAIL_FIELD_VALID']        = 'Email provided, validation ready.';
$L['PASS_GENERATED']           = 'New Password Generated!';
$L['PASS_GENERATED_INFO']      = 'Your new password has been generated and sent to the email associated with your account.';
$L['PASS_GENERATED_FAIL']      = 'New Password Failure!';
$L['PASS_GENERATED_FAIL_INFO'] = 'There was an error sending you the email with the new password, so your password has not been changed.';
$L['RECOVER_INFO']             = 'Enter your email and instructions will sent to you!';
$L['RECOVER']                  = 'Password Recovery';
$L['PASSWORD_RESET']           = 'Password Reset';
$L['CONFIRM_PASSWORD']         = 'Confirm Password';
$L['EMAIL_ADDRESS_TXT']        = 'Email Address';
$L['RESET_LINK_INVALID']       = 'The reset link you have followed is invalid. Please try again.';
$L['PASS_UPDATED']             = 'Password updated!';

/* **********************************
 * #4.1.3 - REGISTER
 ************************************/
$L['ACCOUNT_CREATED']           = 'your account has been created. ';
$L['ACTIVATED_USER']            = 'Activated user ';
$L['CAN_LOGIN']                 = 'for your registration. You may now log in';
$L['CREATED_ADM_ACT']           = 'However, this board requires account activation by an Admin. You will be informed by e-mail when your account has been activated.';
$L['CREATED_CHECK_EMAIL']       = 'Please check your e-mail for further information';
$L['CREATED_EMAIL_ACT']         = 'However, this board requires account activation. An activation key has been sent to the e-mail address you provided.';
$L['EMAIL_EMPTY']               = 'Email not entered';
$L['EMAIL_INVALID']             = 'Email is invalid';
$L['EMAIL_MATCH']               = 'Email addresses do not match';
$L['EMAIL_TAKEN']               = 'Email address already registered';
$L['RCONF_EMAIL_FIELD_INVALID'] = 'This email does not match the one previously entered. Please try again.';
$L['RCONF_EMAIL_FIELD_VALID']   = 'Emails match, validation ready.';
$L['RCONF_PASS_FIELD_INVALID']  = 'This password does not match the one previously entered. Please try again.';
$L['RCONF_PASS_FIELD_VALID']    = 'Passwords matching, validation ready.';
$L['REG_C_DISABLED_INFO1']      = 'but registration to this site is currently disabled';
$L['REG_C_DISABLED_INFO2']      = 'Please try again at a later time or contact the server owner';
$L['REG_C_DISABLED']            = 'Registration is currently disabled';
$L['REG_DISABLED_INFO']         = 'We\'re sorry but registration is currently disabled. Please try again at a later time.';
$L['REG_DISABLED']              = 'Registration Disabled';
$L['REG_DISABLED_ALT']          = 'Registration is currently disabled.';
$L['REG_FORM_INFO']             = 'Please fill out the form below to create an account';
$L['REGISTERED_TXT']            = 'Registered!';
$L['REG_FAILED']                = 'Registration Failed';
$L['REG_ERROR_INFO_1']          = 'We\'re sorry, but an error has occurred and your registration for the username ';
$L['REG_ERROR_INFO_2']          = ' could not be completed. Please try again at a later time.';
$L['SORRY']                     = 'We\'re sorry';
$L['THANKS']                    = 'Thank you';
$L['USERNAME_EMPTY']            = 'Username not entered';
$L['USERNAME_BELOW']            = 'Username below ';
$L['USERNAME_ABOVE']            = 'Username above ';
$L['CHARACTERS']                = ' characters';
$L['USERNAME_REQUIREMENTS']     = 'Username does not match requirements';
$L['USERNAME_WORD_RESERVED']    = 'Username reserved word';
$L['USERNAME_TAKEN']            = 'Username already in use';
$L['USERNAME_DISALLOWED']       = 'Username not allowed';
$L['REG_IP_BANNED']             = 'IP Address banned';
$L['PASSWORD_EMPTY']            = 'Password not entered';
$L['PASSWORD_SHORT']            = 'Password too short';
$L['PASSWORD_LONG']             = 'Password too long';
$L['PASSWORD_MATCH']            = 'Passwords do not match';
$L['QUOTA_EMPTY']               = 'Disk Quota not entered';

/* **********************************
 * #4.1.4 - ACCOUNT
 ************************************/
$L['ADMIN_EDIT_ACC'] = 'Admin Edit Account';
$L['EDIT_ACCOUNT']   = 'Edit Account';
$L['USER_LINKS']     = 'User Links';
$L['ADMIN_LINKS']    = 'Admin Links';
$L['Q_APP_DASH']     = 'QuickBox Software Dashboard';
$L['Q_SYS_DASH']     = 'QuickBox System Dashboard';
$L['RESET_PASS']     = 'Reset password';
$L['RESET_PASSWORD'] = 'Reset your password';
$L['USER_PROFILE']   = 'User profile';
$L['PWD_CHANGE']     = 'Password Changed';
$L['EMAIL_CHANGE']   = 'Email Changed';

/* **********************************
 * #4.1.4.1 - quotes
 ************************************/
$L['DAYUM']               = 'Dayum';
$L['HEY']                 = 'Hey';
$L['HOW_AWESOME']         = 'how\'d you get so awesome?';
$L['LOOK_GOOD']           = 'Look\'n good!';
$L['QUICKBOX_DEDICATION'] = 'we love your dedication to QuickBox!!!';
$L['SO_GLAD']             = 'So glad you\'re here';
$L['WITHOUT_YOU']         = 'where would I be without you!';

/* **********************************
 * #4.1.4.2 - edit account modal
 ************************************/
$L['CONFIRM_NEW_PASS_INFO'] = 'Confirm your new password.';
$L['CURRENT_PASS']          = 'Current Password';
$L['NEW_EMAIL']             = 'New E-mail Address';

/* **********************************
 * #4.1.5 - SUMMARY
 ************************************/
$L['AWESOME']             = 'Awesome';
$L['REGI_FAIL_ERR_FOUND'] = 'error(s) found';
$L['REGI_FAIL_ERR1']      = 'We\'re sorry, but an error has occurred and your registration for the username';
$L['REGI_FAIL_ERR2']      = 'could not be completed';
$L['REGI_FAIL_ERR3']      = 'Please try again';
$L['REGI_FAIL']           = 'Registration Failed';
$L['RETURN_PREVIOUS']     = 'Return to previous page';
$L['USER_ADDED_TO_DB']    = 'has been added to the database';
$L['WITH_PASSWORD']       = 'with password';

/* **********************************
 * #4.2 - SETTINGS
 *
 * #4.2.1 - GENERAL SETTINGS
 ************************************/
$L['ACCOUNT_PAGE']                      = 'Account Page';
$L['ACTION_NOT_EXECUTED']               = 'Action not executed.';
$L['ACTIVATION_IP']                     = 'Activation IP';
$L['ACTIVATION_NEED_D_DO']              = 'Do it here!';
$L['ACTIVATION_NEED_D']                 = 'Need to de-activate?';
$L['ACTIVATION_NEED_G_GET']             = 'Get one here!';
$L['ACTIVATION_NEED_G']                 = 'Need an API Key?';
$L['ACTIVATION_TIME']                   = 'Activation Time';
$L['ADD_DASH_SETTINGS']                 = 'Additional Dashboard Settings';
$L['ADMIN_HOME']                        = 'Home Page';
$L['API_ACTIVE']                        = 'Active';
$L['API_KEY']                           = 'API Key';
$L['API_NOT_ACTIVE']                    = 'Not Active';
$L['API_PLACE']                         = 'Enter API Key here...';
$L['API_SETTINGS']                      = 'API Control';
$L['API_STATUS']                        = 'API Status';
$L['API']                               = 'API';
$L['BANDWIDTH_RESET_STATS']             = 'Reset Bandwidth Stats';
$L['BANDWIDTH_RESET_STATS_TOOLTIP']     = 'This will reset all bandwidth statistics collected. This action is irreversible and will effectively remove the current vnStat database and create a new one. New data will begin to repopulate the database within 5 minutes.<br/><br/>A backup of the current vnStat database will be stored at: <code>/opt/quickbox/backup/system/[Y-m-d_H-M-S]/vnstat/vnstat.db</code>';
$L['BANDWIDTH_RESET_STATS_DB_TOOLTIP']  = 'Click to refresh the current database size. This is done on page load, but is useful for reflecting the size if resetting a larger database.<br/><br/><em>Note: This does not affect the data stored in the database. It only updates the posted database size.</em>';
$L['BANDWIDTH_START_DATE']              = 'Bandwidth Start Date';
$L['BANDWIDTH_START_DATE_TOOLTIP']      = 'Select the start date for bandwidth monitoring. The chosen day will repeat monthly, ideal for tracking from specific dates like ISP resets or server setups.<br/>This applies to totals shown on the System Dashboard.<br/><br/><em>Note: Existing data will remain unaffected.</em>';
$L['CALCULATING']                       = 'Calculating...';
$L['CONF_SETTINGS']                     = 'Configuration Settings';
$L['CONFIRM_RESET_BANDWIDTH_TITLE']     = 'Confirm Bandwidth Reset';
$L['CONFIRM_RESET_BANDWIDTH_SUBTEXT']   = 'Resetting the bandwidth statistics will delete the current vnStat database and create a new one.<br/><div class=\'mt-3 p-3\' style=\'text-align:left;background:var(--qb-color-26);border-radius:6px;\'><p style=\'font-size:13px;color:var(--qb-color-5)\'>A backup of the current database will be created with the following details:</p><ul class=\'mb-0\'><li class=\'mb-2\'>Directory:<br/><code>/opt/quickbox/backup/system/[Y-m-d_H-M-S]/vnstat/</code></li><li>Filename:<br/><code>vnstat.db</code></li></ul></div><br/>Are you sure you want to proceed?';
$L['DASH_URL_SETTINGS']                 = 'Dashboard URL Settings';
$L['DEFAULT_PAGE']                      = 'Landing Page';
$L['DISK_MOUNT']                        = 'Disk Mount';
$L['EDIT_GEN_SETTINGS']                 = 'Edit General Site Settings';
$L['EMAIL_FROM_ADDR']                   = 'Site E-mail Address';
$L['EMAIL_FROM_NAME']                   = 'E-mail From Name';
$L['EMAIL_SETTINGS']                    = 'Email Settings';
$L['ERROR']                             = 'Error';
$L['LOADING']                           = 'Loading...';
$L['LOGIN_PAGE']                        = 'Login Page';
$L['NET_ADAPTER']                       = 'Network Interface';
$L['PHP_DATE_FORMAT']                   = 'PHP Date Format';
$L['PHP_FORMAT_SETTINGS']               = 'PHP Format Settings';
$L['PHP_TIME_ZONE']                     = 'PHP Time Zone';
$L['RESET_BANDWIDTH_CANCEL']            = 'No, Cancel';
$L['RESET_BANDWIDTH_CANCELLED']         = 'Bandwidth reset cancelled';
$L['RESET_BANDWIDTH_CONFIRM']           = 'Yes, Reset';
$L['RESET_BANDWIDTH_STATS']             = 'Reset Bandwidth Stats';
$L['SITE_DESC']                         = 'Site Description';
$L['SITE_LOGO_COLLAPSED']               = 'Collapsed Logo';
$L['SITE_LOGO_FULL']                    = 'Full Logo';
$L['SITE_LOGO_SETTINGS']                = 'Site Logo Settings';
$L['SITE_META_SETTINGS']                = 'Site Meta Settings';
$L['SITE_NAME']                         = 'Site Name';
$L['SITE_ROOT']                         = 'Site Root';
$L['SITE_LOGO_COLLAPSED_TOOLTIP']       = 'This is the logo that will be displayed when the sidebar is collapsed and will be used as the browser tab icon.';
$L['SITE_LOGO_FULL_TOOLTIP']            = 'This is the logo that will be displayed when the sidebar is expanded.';
$L['SITE_NAME_TOOLTIP']                 = 'Site name should be under 40 characters and alphanumeric only with no special characters (spaces are acceptable)';
$L['SITE_DESC_TOOLTIP']                 = 'Site description should be under 120 characters and alphanumeric only with no special characters (spaces are acceptable)';
$L['EMAIL_FROM_NAME_TOOLTIP']           = 'From Name should be under 60 characters and alphanumeric only with no special characters (spaces are acceptable)';
$L['SITE_ROOT_TOOLTIP']                 = 'Enter your server IP or valid domain w/o trailing forward slash. example: https://192.168.0.1 (or) https://somedomain.com';
$L['UNEXPECTED_ERROR']                  = 'An unexpected error occurred.';
$L['UNKNOWN_ERROR']                     = 'An unknown error occurred.';
$L['VNSTAT_DATABASE_DELETE_SUCCESSFUL'] = 'vnStat database deleted successfully.';
$L['VNSTAT_DATABASE_DELETE_FAILED']     = 'Failed to delete vnStat database.';
$L['VNSTAT_DATABASE_DELETE_INVALID']    = 'Invalid request.';

/* **********************************
 * #4.2.2 - EMAIL SETTINGS
 ************************************/
$L['SMTP_AUTH']     = 'Enable SMTP authentication';
$L['SMTP_SECURE']   = 'Enable SSL encryption, TLS also accepted with port 465';
$L['MAIL_HOST']     = 'Set the SMTP server to send through';
$L['MAIL_PORT']     = 'TCP port to connect to';
$L['MAIL_USERNAME'] = 'SMTP username';
$L['MAIL_PASS']     = 'SMTP password';

/* **********************************
 * #4.2.3 - SESSION SETTINGS
 ************************************/
$L['CHANGE_SESSION_SETTINGS'] = 'Change the settings regarding sessions.';
$L['COOKIE_EXPIRY']           = '\'Remember Me\' Cookie Expiry';
$L['COOKIE_PATH']             = 'Cookie Path';
$L['DAYS']                    = 'Days';
$L['GUEST_TIMEOUT']           = 'Guest Timeout';
$L['MINUTES']                 = 'Minutes';
$L['RESET_EXPIRY']            = 'Reset Expiry at Logon';
$L['USER_TIMEOUT']            = 'User Inactivity Timeout';

/* **********************************
 * #4.2.4 - USER SETTINGS
 ************************************/
$L['ALLOW_MULTI_LOGINS']                   = 'Multiple Logins';
$L['ALLOW_MULTI_LOGINS_DESC']              = 'This option allows for simaltenous logins from multiple devices. If disabled, the user will be logged out of all other devices when they login from a new device.';
$L['ALLOW_CONFIG_EDITING']                 = 'Config Editors on Dashboard';
$L['ALLOW_CONFIG_EDITING_DESC']            = 'This option allows for the editing of the config files from the dashboard. If disabled, the option to view/edit configs will be hidden.';
$L['ALLOW_MOUNT_INFO']                     = 'Mount Monitoring and Adding Panel';
$L['ALLOW_MOUNT_INFO_DESC']                = 'This option allows users to view and add directories for monitoring from the dashboard. If disabled, the ability to view and add directories will be hidden.';
$L['ALLOW_AUTOBACKUP_APP_ON_INSTALL']      = 'Auto-Backup App on Install';
$L['ALLOW_AUTOBACKUP_APP_ON_INSTALL_DESC'] = 'This option allows for the automatic full backup of the application when it is installed. If disabled, applications will not be backed up when installed. <span style="color:var(--qb-color-41);">Application configuration files will be backed up regardless of this setting.</span><br>Backups are stored at:<br><code>/home/[USERNAME]/.QuickBox/software/</code>';
$L['BY_ADMIN']                             = 'By Admin (Set below..)';
$L['BY_USER']                              = 'By User (See User Admin pages)';
$L['CHANGE_USER_SETTINGS']                 = 'Change global settings for user accounts.';
$L['EXCLUDE_ADMINS']                       = 'Exclude Admins';
$L['EXCLUDE_REDIRECTED_ADMINS']            = 'Exclude Admins from being redirected.';
$L['GEN_USER_SETTINGSTINGS']               = 'General User Settings';
$L['HOW_SET']                              = 'How are they Set?';
$L['INDIV_USER_HOME']                      = 'Individual User Homepages';
$L['INDIVIDUAL_USER_FOLDERS']              = 'Individual User Folders';
$L['PATH_ADMIN']                           = 'Path (Set by Admin)';
$L['SITE_ROOT_RELATIVE']                   = 'Relative to Site Root';
$L['SETTING']                              = 'Setting';
$L['DESCRIPTION']                          = 'Description';
$L['VALUE']                                = 'Value';

/* **********************************
 * #4.2.5 - SECURITY SETTINGS
 ************************************/
$L['BAN_IP_ADDRESS']       = 'Block / Ban IP Address';
$L['BAN_IP_INFO']          = 'e.g. 192.168.0.1 without leading zeros';
$L['BAN_IP_REGISTER']      = 'Ban IP Addresses from Registering (or logging in)';
$L['BANNED_IP_ADDRESSES']  = 'Banned IP Addresses';
$L['DISALLOW_USERNAME']    = 'Disallow Username';
$L['DISALLOWED_USERNAME']  = 'Disallowed Username';
$L['DISALLOW_USERNAMES']   = 'Disallow Usernames';
$L['DISALLOWED_USERNAMES'] = 'Disallowed Usernames';
$L['PREVENT_USERNAMES']    = 'Prevent Usernames from being registered';

/* **********************************
 * #4.3 - USER MANAGEMENT
 *
 * #4.3.1 - REGISTRATION SETTINGS
 ************************************/
$L['ACCOUNT_ACTIVATION']           = 'Account activation';
$L['ADMIN_ACT']                    = 'Admin Activation';
$L['ADMIN_ACT_INFO']               = 'When this option is selected, following registration the user will be informed that they must wait for the Administrator to activate the account. The user will receive an email to this effect too, as will the Administrator who will then have the option to activate the user with the link provided in the e-mail or to visit the Administration Panel and activate the user there.';
$L['ALPHANUMERIC_ONLY']            = 'Alphanumeric Only';
$L['ALPHANUMERIC_SPACERS']         = 'Alphanumeric Spacers';
$L['ANY_CHARS']                    = 'Any Chars';
$L['ANY_LETTER_NUM']               = 'Any Letter Num';
$L['DEFAULT_QUOTA_ALLOWANCE']      = 'Default Quota Allowance';
$L['DEFAULT_QUOTA_ALLOWANCE_INFO'] = 'Set a default quota amount for new accounts created. This value is only used when the Linux Quota package is installed.';
$L['DISABLE_REGISTRATION']         = 'Disable Registration';
$L['DISABLE_REGISTRATION_INFO']    = 'This disables registration. The registration form is not displayed and is replaced with an informational message.';
$L['ENABLE_CAPTCHA']               = 'Enable Captcha';
$L['LETTER_NUM_AND_SPACE']         = 'Letter Num and Spaces';
$L['LIMIT_CHAR']                   = 'Limit Username Characters';
$L['NO_ACTIVATION']                = 'No Activation (immediate access)';
$L['NO_ACTIVATION_INFO']           = 'Setting this option allows the user to register normally without the need for any additional activation process.';
$L['PASSWORD_LENGTH']              = 'Password Length';
$L['RECOMMENDED']                  = 'QuickBox Recommended';
$L['REG_SETTINGS_INFO']            = 'Change the settings regarding registration to the site.';
$L['REG_SETTINGS']                 = 'Registration settings';
$L['SEND_WELCOME_EMAIL']           = 'Send Welcome E-mail';
$L['SEND_WELCOME_EMAIL_YES_INFO']  = 'Setting this option to Yes sends welcome emails to the user, as well as the system admin. This option requires SMTP setup for properly sending emails. These options can be controlled on the <a href="/email-settings.php" style="color: var(--qb-color-29);text-decoration: underline;">Email Settings</a> page.';
$L['SEND_WELCOME_EMAIL_NO_INFO']   = 'Setting this option to No will not send out welcome emails to newly registered users. All user creation/registration remains silent, much like user creation within the CLI environment.';
$L['USER_ACT']                     = 'User Activation (e-mail verification)';
$L['USER_ACT_INFO']                = 'Setting this option requires the user to activate their account by clicking a link sent to their registered e-mail address.';
$L['USERNAME_LENGTH']              = 'Username Length';
$L['USERNAME_LOWERCASE']           = 'Username Lowercase';
$L['USERNAME_LOWERCASE_YES_INFO']  = 'Setting this option to Yes changes all new registered usernames to Lowercase. This is the recommended option.';
$L['USERNAME_LOWERCASE_NO_INFO']   = 'Setting this option to No will not change new registrered usernames to Lowercase. Usernames will appear as they are registered, but will maintain Lowercase in the server enironment for proper software functionality.';

/* **********************************
 * #4.3.2 - USER ADMINISTRATION
 ************************************/
$L['ADMIN_ANNOUNCE']        = 'Admin Announcements';
$L['AWAITING_ADMIN']        = 'Awaiting Admin Activation';
$L['AWAITING_EMAIL']        = 'Awaiting E-mail Activation';
$L['BANNED']                = 'Banned';
$L['CU_CONFIRM_EMAIL_INFO'] = 'Please confirm E-mail';
$L['CU_CONFIRM_EMAIL']      = 'Confirm E-mail';
$L['CU_CONFIRM_PASS_INFO']  = 'Confirm your password.';
$L['CU_CONFIRM_PASSWORD']   = 'Confirm Password';
$L['CU_DISK_QUOTA']         = 'Disk Quota:';
$L['CU_GROUP']              = 'Group';
$L['CU_EMAIL']              = 'E-mail';
$L['CU_NEW_PASS_INFO']      = 'Enter your new password';
$L['CU_NEW_PASSWORD']       = 'New Password';
$L['CU_SHELL_ENV']          = 'Preferred shell environment:';
$L['CURRENT_SHELLS']        = 'Current Shell';
$L['CURRENT_USERS']         = 'Current Users';
$L['DEFAULT_GROUP_TAG']     = 'default';
$L['DELETED_ALL_SESSIONS']  = 'Deleted all sessions';
$L['DISK_STATUS']           = 'Disk Status';
$L['EDIT_USER_SHELL']       = 'Edit the User\'s Shell Environment';
$L['EXPIRY']                = 'Expiry';
$L['HAS_USED']              = 'has used';
$L['IP_ADDRESS']            = 'IP Address';
$L['LAST_IP_ADDRESS']       = 'Last IP Address';
$L['LAST_LOGIN']            = 'Last Login';
$L['LAST']                  = 'Last';
$L['MEMBER_STATUS']         = 'Member Status';
$L['MEMBER_GROUP']          = 'Member Group';
$L['OF_QUOTA']              = 'of their total quota';
$L['RECENTLY_ONLINE']       = 'Recently Online';
$L['REGISTERED_DISK_QUOTA'] = 'Disk Quota';
$L['REGISTERED']            = 'Registered';
$L['REGISTRATION_LOGIN']    = 'Registration & Login';
$L['STATISTICS']            = 'Statistics';
$L['USER_ACTIVITY']         = 'User Activity';
$L['PASSWORD_NOTICE']       = 'Password should not contain the following characters';
$L['USER_QUOTA_HELP']       = 'Enter the amount of diskspace you would like to assign a user. Quotas must be installed to make use of this option.';
$L['USER_SHELL_HELP']       = 'Select the dropdown above to add the user to a shell.';
$L['USERNAME_ADMIN_USER']   = 'Username:';
$L['USERNAMES']             = 'Username';
$L['USERS_AWAITING']        = 'Users Awaiting Activation';
$L['USERS_SESSIONS']        = 'User Sessions';

/* **********************************
 * #4.3.2.1 - admin user edit
 ************************************/
$L['ACTIONS']                 = 'Actions';
$L['ACTIVE_SESSION']          = 'Active Session';
$L['APPLICATION']             = 'Software';
$L['BANNED_USER']             = 'Banned user';
$L['CURRENT_FULL_PATH']       = 'Current Full Path';
$L['CURRENT_GROUPS']          = 'Current Groups';
$L['CURRENT_STATUS']          = 'Current Status';
$L['EDIT_DEFAULT_GROUP']      = 'Default Group';
$L['EDIT_DEFAULT_GROUP_INFO'] = 'This option, when selected, will set this as the default group. This is useful when creating users by way of CLI and are wanting to have a custom made group as the default assigned.';
$L['EDIT_GROUP_MEMBERSHIP']   = 'Edit the User\'s Group Membership';
$L['EU_PATH']                 = 'Path';
$L['GENERAL_INFO']            = 'General Info';
$L['GROUP_MEMBERSHIP_HELP']   = 'Click the text box below to add the user to more groups...';
$L['GROUP_MEMBERSHIP']        = 'Group Membership';
$L['HOMEPAGE']                = 'Home Page';
$L['INSTRUCTIONS']            = 'Instructions';
$L['LAST_ACTIVE_IP']          = 'Last Active IP';
$L['LAST_ACTIVE']             = 'Last Active';
$L['LAST_UPDATE']             = 'Last Update';
$L['PERSISTENT']              = 'Persistent';
$L['REGISTERED_IP']           = 'Registered IP';
$L['SESSION_EXPIRY']          = 'Session Expiry';
$L['STATUS']                  = 'Status';
$L['UNBANNED_USER']           = 'Unbanned user';
$L['UNIQUE_USER_HP_SETTINGS'] = 'Unique User Home Page - Settings';
$L['USER_EDIT1']              = 'User Edit :';
$L['USER_EDIT2']              = 'User Edit';
$L['SELECT_GROUP']            = 'Select Group';

/* **********************************
 * #4.3.2.2 - admin announce
 ************************************/
$L['ENABLE_USER_ANNOUNCE']          = 'Enable Dashboard Announcement';
$L['ANNOUNCEMENT_HISTORY']          = 'Your Previous Announcements';
$L['TYPE']                          = 'Type';
$L['USER']                          = 'User';
$L['TIME']                          = 'Time';
$L['ANNOUNCEMENT_LIST']             = 'Announcement Content';
$L['GLOBAL_USER_ANNOUNCEMENT']      = 'Global (all users)';
$L['CREATE_DASHBOARD_ANNOUNCEMENT'] = 'Create Dashboard Announcement';
$L['GLOBAL_ANNOUNCEMENT']           = 'Global Announcement';
$L['GLOBAL_ANNOUNCEMENT_INFO']      = 'Selecting this option will create a global announcement visible on every user\'s dashboard, regardless of their group membership. If you\'ve already assigned an announcement to a user, it will be displayed alongside this global announcement.';
$L['SELECT_USER']                   = 'Select User:';
$L['SELECT_ANNOUNCEMENT_TYPE']      = 'Announcement Type:';
$L['EDIT_DASHBOARD_ANNOUNCEMENT']   = 'Edit Dashboard Announcement';
$L['EDIT_ANNOUNCEMENT_INFO']        = 'Editing and saving an existing announcement will reset its visibility on the specified user\'s dashboard. If the announcement is global, it will also reset the view history on all users\' dashboards.';
$L['ANNOUNCEMENT_ID']               = 'Announcement Id';
$L['ANNOUNCEMENT_TYPE']             = 'Announcement Type';
$L['PREVIEW']                       = 'Preview';

/* **********************************
 * #4.3.3 - USERS GROUPS
 ************************************/
$L['ADMINISTRATORS']               = 'Administrators';
$L['ASSIGN_LEVEL']                 = 'Assign Group Level :';
$L['CANCELLED']                    = 'Cancelled';
$L['CLICK_HERE']                   = 'Click Here...';
$L['CONFIRM_DELETE_GROUP_TITLE']   = 'Are you sure?';
$L['CONFIRM_DELETE_GROUP_SUBTEXT'] = 'This will delete the group and reset all users in the group. Ensure these users are assigned to another group.';
$L['DELETE_GROUP']                 = 'Delete Group';
$L['DELETED']                      = 'Deleted';
$L['GROUP_DELETED']                = 'This group has been removed, user groups reset.';
$L['GROUP_DELETE_CANCEL']          = 'Group deletion cancelled.';
$L['GROUP_STAY']                   = 'The group will stay :)';
$L['GROUP_USER_REMOVED']           = 'User has been removed from the group.';
$L['GROUP_USER_STAY']              = 'The user remains in the group :)';
$L['GROUP_YES']                    = 'Yes, I am sure!';
$L['GROUP_NO']                     = 'No, cancel!';
$L['EDIT_ADD_USER']                = 'Add User :';
$L['EDIT_GROUP_LEVEL']             = 'Group Level :';
$L['EDIT_GROUP_NAME']              = 'Group Name :';
$L['GROUP_LEVEL']                  = 'Group Level';
$L['GROUP_NAME']                   = 'Group Name';
$L['LEVEL_INFO']                   = 'Enter a number between 2 - 256';
$L['NEW_GROUP_NAME']               = 'New Group Name :';
$L['NUMBER_MEMBERS']               = '# of Members';
$L['REMOVED']                      = 'Removed';
$L['USER_GROUPS_INFO']             = 'Create, view and edit user groups. Assign users to user groups.';
$L['SOFT_GROUP_ASGMNT']            = 'Software Group Assignment';

/* **********************************
 * #4.4 - SYSTEM
 *
 * #4.4.1 - WEB CONSOLE
 ************************************/
$L['WEB_CONSOLE_INFO'] = 'Access your command environment.';

/* **********************************
 * #4.4.2 - API CONTROL
 ************************************/
$L['ACTIVATION_INFO_STATS']             = 'Activation Info Stats';
$L['QB_CONTROL_API']                    = 'QB Control API';
$L['QB_CONTROL_API_NOTICE']             = 'API control keys are compartmentalized into two components as seen below.<br/>Usage examples have been labeled to illustrate a specific commands level of permissions needed to perform it\'s designated task. The library of api use will continue to receive updates as additional endpoints and functions are implemented.<br/><br/><table><tbody><tr><td style="width:15px;vertical-align:middle;"><span class="badge badge-indicators badge-primary">&nbsp;</span></td><td>The <em>read permissions key</em> only has the ability to scrape data. This key cannot signal operational tasks to the QuickBox server. Unless you are attempting to remote control your installation, this key is all that is needed.</td></tr><tr><td style="width:15px;vertical-align:middle;"><span class="badge badge-indicators badge-success">&nbsp;</span></td><td>The <em>write permissions key</em> has the ability to perform additional tasks, such as updating the QuickBox install, managing the main api activation, and more. This key will work for read permissions as well and is to be considered the highest privileged key. Useful for remotely performing basic management tasks to your server.</td></tr></tbody></table><br/>Remember to treat your API keys as you would passwords, never share them.<br/>You can regenerate a new random control key at any time by pressing the <i data-feather="refresh-cw" style="width:14px;"></i> button below.';
$L['CLOSE_ACKNOWLEDGE']                 = 'Acknowledge and Close';
$L['READ_PERM_KEY']                     = 'Read Permissions Key';
$L['REGENERATE_READ_KEY']               = 'Regenerate Read Key';
$L['WRITE_PERM_KEY']                    = 'Write Permissions Key';
$L['REGENERATE_WRITE_KEY']              = 'Regenerate Write Key';
$L['API_SPEC_USAGE']                    = 'API Specific Usage';
$L['DISPLAY_CURRENT_API_STAT']          = 'Display current API status';
$L['EXAMPLE_CODE']                      = 'code:';
$L['EXAMPLE_OUTPUT']                    = 'output:';
$L['ACTIVATE_QUICKBOX_API']             = 'Activate QuickBox API key';
$L['DEACTIVATE_QUICKBOX_API']           = 'Deactivate QuickBox API key';
$L['VERSION_SPEC_USAGE']                = 'Version Specific Usage';
$L['DISPLAY_CURRENT_VERSION']           = 'Display current QuickBox version status';
$L['UPDATE_QUICKBOX_VERSION']           = 'Update QuickBox version';
$L['UPDATE_ALERT_NOTICE']               = 'If your instance is already up-to-date, you will see the following output';
$L['RUN_FIX_VERSION']                   = 'Run version fix';
$L['USER_SPEC_USAGE']                   = 'User Specific Usage';
$L['DISPLAY_ALL_USER_INFO']             = 'Display information for all users';
$L['DISPLAY_SINGLE_USER_INFO']          = 'Display information for specified user';
$L['DISPLAY_USER_SOFTWARE']             = 'Display software currently installed by specified user';
$L['CREATE_SPECIFIED_USER']             = 'Create specified user';
$L['CREATE_SPECIFIED_USER_INFO_NOTICE'] = 'If you would like to stage a user with their existing email and set a quota allowance. Note that both email and quota are purely optional. If no quota is entered, it will utilize the default from your configured amount set <a href="/registration.php" rel="noopener nofollow" target="_blank">here</a>.';
$L['DELETE_SPECIFIED_USER']             = 'Delete specified user';
$L['BAN_SPECIFIED_USER']                = 'Ban specified user';
$L['UNBAN_SPECIFIED_USER']              = 'Unban specified user';
$L['SOFTWARE_SPEC_USAGE']               = 'Software Specific Usage';
$L['DISPLAY_ALL_SOFTWARE']              = 'Display all software applications available for install';
$L['DISPLAY_SINGLE_SOFTWARE']           = 'Display information for specified software';
$L['API_SOFTWARE_NOTICE']               = 'To find guidance on how software names (app names) are structured, please refer to the \'Software\' section in your user manual. You can access it by clicking <a href="/help.php#software">here</a>.';
$L['API_SOFTWARE_WARNING']              = 'Please be aware that for certain applications, the naming conventions may not be officially designated and could instead be part of an expanded set of options.<br/><br/>
Here\'s an example using Bazarr4K:<br>
<pre class="mb-2"><code class="language-json">"bazarr4k": {
    "software_title": "Bazarr4K",
    "qb_package_name": "bazarr",
    "qb_options": "--4k",
    ...</code></pre>
Please take note of the following important information regarding QuickBox\'s software API output:
<ul>
<li>When accessing software packages through QuickBox, you will consistently find the \'qb_package_name\' attribute. This attribute is marked and used by the <code>qb</code> naming convention.</li>
<li>Additionally, each API output includes the \'qb_options\' entry, which provides valuable options for customization. One of these options is the \'4K\' installation flag, denoted as <code>--4k</code>.</li>
</ul><br/>
For instance, if you intend to install \'Bazarr\' with 4K support, you should use the following command:<br/>
<pre class="mb-0"><code class="language-bash">qb install bazarr --4k -u [USERNAME]</code></pre><br/>
It\'s important to note that you should not use \'bazarr4k\' as the package name, as the \'qb_options\' entry is designed to handle such customizations efficiently.';
$L['SOFTWARE_SERVICE_STATUS']            = 'Display status for specified software and user';
$L['SOFT_STATUS_ACTIVE_NOTICE']          = 'If the service is active.';
$L['SOFT_STATUS_INACTIVE_NOTICE']        = 'If the service is inactive.';
$L['SOFT_STATUS_NOT_INSTALLED_NOTICE']   = 'If the application is not installed for the specified user.';
$L['SOFTWARE_SERVICE_CONTROL']           = 'Signal specified action for specified software and user';
$L['SOFT_CONTROL_ACTION_RESTART_NOTICE'] = 'Where the action=restart...';
$L['SOFT_CONTROL_ACTION_START_NOTICE']   = 'Where the action=start...';
$L['SOFT_CONTROL_ACTION_STOP_NOTICE']    = 'Where the action=stop...';

/* **********************************
 * #4.4.3 - SSL CONTROL
 ************************************/
$L['LETSENCRYPT_DOMAIN']         = 'Let\'s Encrypt Domain';
$L['SSL_CONTROL']                = 'SSL Control';
$L['ABOUT_SSL_CONTROL']          = 'This feature enables you to easily generate SSL certificates for the supported applications you have installed. By selecting \'Yes\' and entering your domain, you will seamlessly set up the Nginx reverse proxy along with the SSL certificate.';
$L['STAGE_DASHBOARD_SSL']        = 'Stage SSL for the Dashboard?';
$L['DASHBOARD_SSL_TOOLTIP']      = 'To secure your QuickBox Dashboard with an SSL certificate, simply select \'Yes\'. This action will not only configure the SSL certificate but also establish the necessary NGinx settings and links, facilitating secure access to your dashboard via your domain.';
$L['STAGE_OWNED_DOMAIN_SSL']     = 'Stage SSL for an owned domain?';
$L['NON_DASHBOARD_SSL_TOOLTIP']  = 'To establish an SSL certificate for a domain of your preference, please choose \'Yes\'. This option is designed for the creation of additional SSL certificates. Please ensure that the appropriate DNS records for the domain are properly configured, as this process exclusively generates the requested SSL certificates.';
$L['STAGE_EMBY_SSL']             = 'Stage SSL for Emby?';
$L['EMBY_SSL_TOOLTIP']           = 'To secure your Emby installation with an SSL certificate, simply select \'Yes\'. This action will not only configure the SSL certificate but also establish the necessary NGinx settings and links, facilitating secure access to your Emby installation via your domain.';
$L['STAGE_JELLYFIN_SSL']         = 'Stage SSL for Jellyfin?';
$L['JELLYFIN_SSL_TOOLTIP']       = 'To secure your Jellyfin installation with an SSL certificate, simply select \'Yes\'. This action will not only configure the SSL certificate but also establish the necessary NGinx settings and links, facilitating secure access to your Jellyfin installation via your domain.';
$L['STAGE_JELLYSEERR_SSL']       = 'Stage SSL for Jellyseerr?';
$L['JELLYSEERR_SSL_TOOLTIP']     = 'To secure your Jellyseerr installation with an SSL certificate, simply select \'Yes\'. This action will not only configure the SSL certificate but also establish the necessary NGinx settings and links, facilitating secure access to your Jellyseerr installation via your domain.';
$L['STAGE_KOMGA_SSL']            = 'Stage SSL for Komga?';
$L['KOMGA_SSL_TOOLTIP']          = 'To secure your Komga installation with an SSL certificate, simply select \'Yes\'. This action will not only configure the SSL certificate but also establish the necessary NGinx settings and links, facilitating secure access to your Komga installation via your domain.';
$L['STAGE_OVERSEERR_SSL']        = 'Stage SSL for Overseerr?';
$L['OVERSEERR_SSL_TOOLTIP']      = 'To secure your Overseerr installation with an SSL certificate, simply select \'Yes\'. This action will not only configure the SSL certificate but also establish the necessary NGinx settings and links, facilitating secure access to your Overseerr installation via your domain.';
$L['STAGE_PLEX_SSL']             = 'Stage SSL for Plex?';
$L['PLEX_SSL_TOOLTIP']           = 'To secure your Plex installation with an SSL certificate, simply select \'Yes\'. This action will not only configure the SSL certificate but also establish the necessary NGinx settings and links, facilitating secure access to your Plex installation via your domain.';
$L['DOMAIN']                     = 'Domain';
$L['SSL_ALREADY_INSTALLED']      = 'Please be aware that there is already an SSL certificate installed for this option. Reinstalling the certificate by entering a new domain below will reset the current NGinx reverse configuration, remove the previous certificate, and reset the currently set link access.';
$L['SSL_SUBMIT']                 = 'Install SSL Certificate';
$L['SSL_CERTIFICATE_STATUS']     = 'SSL Certificate Status';
$L['SSL_STATUS_MONITOR_TOOLTIP'] = 'Monitor the status of your existing SSL certificates with the capability to perform two key actions: deletion or force renewal. For certificates associated with supported applications such as Emby, Jellyfin, Jellyseerr, Komga, Overseerr, and Plex, deleting a certificate will also trigger the removal and reconfiguration of the Nginx reverse proxy for the corresponding domain.<br><br>You can seamlessly delete a certificate using the options below and subsequently select your desired application above to initiate the installation of a new subdomain and certificate. This streamlined process ensures the utmost flexibility and control over your SSL certificate management.';
$L['CERTS_STORED_AT']            = 'Certificates monitored are stored at';
$L['CERT_ACTIVE']                = 'Expires on:';
$L['CERT_EXPIRES']               = 'Expires on:';
$L['CERT_EXPIRED']               = 'Expired';
$L['CERT_RENEW']                 = 'Renew Certificate';
$L['CERT_DELETE']                = 'Delete SSL Certificate and any additional configurations. This action is irreversible.';
$L['CERT_DELETE_CONFIRM']        = 'Are you sure you want to delete this certificate?';
$L['NO_CERTS_INSTALLED']         = 'There are no SSL certificates installed and/or monitored at this time.';

/* **********************************
 * #4.4.4 - VPN CONTROL
 ************************************/
$L['ABORT']                            = 'Abort';
$L['ACTIVE']                           = 'Active';
$L['ADD_PEER']                         = 'Add Peer Configuration';
$L['CITY']                             = 'City';
$L['COUNTRY']                          = 'Country';
$L['CURRENT_IP']                       = 'Server IP';
$L['CURRENT_PEER_LIST']                = 'Current Peer List';
$L['DATE_ADDED']                       = 'Date Added';
$L['DELETE_PEER']                      = 'Delete peer configuration file?';
$L['DRAG_DROP_FILES']                  = 'Drag &amp; Drop your peer config files or <span class="filepond--label-action">Click to Browse</span>';
$L['HOST']                             = 'Hostname';
$L['LOCAL_HOSTED']                     = 'Private IP';
$L['ORGANIZATION']                     = 'Organization';
$L['PEER_CONFIG_NAME']                 = 'Name';
$L['PEER_INFO']                        = 'Peer Information';
$L['PEER_PING']                        = 'Ping';
$L['PROCESSING']                       = 'Processing...';
$L['PROCESSING_ABORTED']               = 'Processing cancelled. Please try again.';
$L['PROCESSING_COMPLETE']              = 'Processing Completed.';
$L['PROCESSING_ERROR']                 = 'Processing Error. Please try again.';
$L['PROCESSING_ERROR_EXTENSION']       = '<span style="font-weight:400">Only peer configuration files with the <span style="font-weight:900" class="text-warning">.conf</span> extension are allowed.</span>';
$L['PROCESSING_REVERT_ERROR']          = 'Error during revert. Please try again.';
$L['REMOVE']                           = 'Remove';
$L['RETRY']                            = 'Retry';
$L['REVERT']                           = 'Revert';
$L['REGION']                           = 'Region';
$L['SERVER_CONFIG']                    = 'Server Configuration';
$L['TAP_TO_CANCEL']                    = 'Tap to Cancel';
$L['TAP_TO_RETRY']                     = 'Tap to Retry';
$L['TAP_TO_UNDO']                      = 'Refreshing page...';
$L['UNDO']                             = 'Undo';
$L['VPN_CONTROL']                      = 'VPN Control';
$L['WAITING_FOR_SIZE']                 = 'Waiting for file size...';
$L['WG_PRIVATE_KEY']                   = 'Private Key';
$L['WG_PUBLIC_KEY']                    = 'Public Key';
$L['WG_SERVER_INFO']                   = 'Current Connection Information';
$L['WIREGUARD_CONFIG_ACTIVATION_TIPS'] = 'To activate a WireGuard configuration, please select your desired VPN configuration from the table below. To deactivate the currently active configuration, simply uncheck the active checkbox or choose a different configuration. This will automatically restart the WireGuard service, and the \'Current VPN Connection Information\' table will update with the relevant details.';

/* **********************************
 * #4.4.5 - TROUBLESHOOTING
 ************************************/
$L['SERVICE']                = 'Service';
$L['APP_SELECT']             = 'Select Software';
$L['APPLIANCE']              = 'Appliance';
$L['CLEAN_MEM']              = 'Clear Physical Memory Cache';
$L['FIX']                    = 'Fix';
$L['FIXUPDATE']              = 'Fix dpkg frontend locks';
$L['LOG_GEN']                = 'System Log Generator';
$L['NGINX']                  = 'nginx';
$L['PHP']                    = 'php-fpm';
$L['PHP7_2']                 = 'php-fpm';
$L['QSUPPORT']               = 'QuickBox Support';
$L['QSUPPORTU']              = 'QuickBox Support User';
$L['SERVER_TROUBLESHOOTING'] = 'Server Troubleshooting';
$L['SYSTEM_INFO']            = 'System Info';
$L['SYSTEM_LOG_FILES']       = 'System Log';
$L['TROUBLESHOOTING']        = 'Troubleshooting';
$L['WEB_SERVER']             = 'Webserver';

/* **********************************
 * #4.4.6 - SYSTEM LOGS
 ************************************/
$L['ABOUT_SOFTWARE_ACTION_LOGS']       = 'These logs are designed to provide a record of actions related to software, including installations, removals, updates, and other significant events.';
$L['ABOUT_SYSTEM_ACTION_LOGS']         = 'These logs are tailored to capture system-level activities and actions initiated through the <code>qb</code> command line tool.';
$L['ABOUT_UI_ACTION_LOGS']             = 'These logs are derived from the system\'s syslog and serve as a consolidated record of all commands and actions initiated through the QuickBox Dashboard\'s user interface.';
$L['ABOUT_USER_ACTION_LOGS']           = 'The logs in this context pertain to user-related tasks and events initiated through the QuickBox interface.';
$L['ACCESS_LOGS']                      = 'Access Logs';
$L['APP_LOGS']                         = 'Software Logs';
$L['AUTO_PROCESS']                     = 'Auto Process';
$L['CLEAN_DASHBOARD_USER_ACTION_LOGS'] = 'Clean User Action Logs';
$L['CLEAN_SYSTEM_ACTION_LOGS']         = 'Clean System Action Logs';
$L['CLEAR_LOG']                        = 'Clear Log';
$L['CLEAR_LOG_CONFIRM']                = 'Are you sure you want to delete these logs, this cannot be undone?';
$L['COMMAND']                          = 'Command';
$L['COMMAND_SOFTWARE']                 = 'Command/Software';
$L['DATABASE_BACKUP']                  = 'Database Backup';
$L['DATABASE_MAINTENANCE']             = 'Database Maintenance';
$L['DATABASE_REPAIR']                  = 'Database Repair';
$L['DATABASE_RESTORE']                 = 'Database Restore';
$L['DATE_TIME']                        = 'Date/Time';
$L['DELETED_ALL_APP_LOGS']             = 'Deleted all software logs';
$L['DELETED_ALL_APPLICATION_LOGS']     = 'Delete all application logs';
$L['DELETED_ALL_SUMMARY_LOGS']         = 'Deleted all summary logs';
$L['DELETED_ALL_SYSTEM_LOGS']          = 'Deleted all system logs';
$L['DELETED_ALL_UI_LOGS']              = 'Deleted all UI logs';
$L['DELETED_ALL_USER_LOGS']            = 'Deleted all user logs';
$L['DELETED_APPLICATION_LOGS']         = 'Deleted application logs';
$L['DELETED_SUMMARY_LOGS']             = 'Deleted summary logs';
$L['DELETED_USER']                     = 'Deleted User';
$L['DELETE_USER_LOGS']                 = 'Delete User Logs';
$L['EVENT']                            = 'Event';
$L['LOG_MESSAGE']                      = 'Log Message';
$L['LOGS']                             = 'Logs';
$L['LOGS_SUMMARY']                     = 'Logs Summary';
$L['NO_LOGS']                          = 'No logs found';
$L['NO_LOGS_MESSAGE']                  = 'At present, there are no log records available for viewing. Log entries are generated when applications send their logging information to the system\'s syslog. If you are in search of a particular log, we recommend consulting the documentation provided by the respective application for further guidance. QuickBox diligently endeavors to centralize various applications and their logged data; however, it depends on the individual applications to transmit their logging information to the syslog.';
$L['QUICKBOX_VERSION_CHECK']           = 'Check for QuickBox updates';
$L['QUOTA_CHECK']                      = 'Quota set check';
$L['SCHEDULED_TASK']                   = 'Scheduled Task';
$L['SOFTWARE']                         = 'Software';
$L['SOFTWARE_ACTION_LOGS']             = 'Software Action Logs';
$L['SOFTWARE_VERSION_CHECK']           = 'Check for installed software updates';
$L['SYSTEM_ACTION_LOGS']               = 'System Action Logs';
$L['SYSTEM_LOG_SUMMARY']               = 'System Log Summary';
$L['SYSTEM_LOG_SUMMARY_TOOLTIP']       = 'This summary and all additional logs are generated under three conditions:<br><ol><li><strong>Cron:</strong> Logs are automatically updated with the execution of a cron task every 15 minutes. This initiates the <code>qb_log_miner</code> binary that aggregates log entries from the system syslog.</li><li><strong>Manually Generate:</strong> You can generate it from the \'System > Troubleshooting > System Log\' section by clicking the \'(Generate)\' button.</li><li><strong>Command Line:</strong> It can also be generated by running the command <code>qb generate log</code>.</li></ol>You can access and download this summary log file in two ways:<br><ol><li><strong>Web Interface:</strong> Go to \'System > Troubleshooting > System Log (Download)\' within the user interface.</li><li><strong>Server Directory:</strong> Find it on the server at: \'/srv/quickbox/logs/system_log\'.</li></ol>';
$L['UI_ACTION_LOGS']                   = 'UI Action Logs';
$L['USER_ACTION_LOGS']                 = 'User Action Logs';
$L['USER_APPLICATION_LOGS']            = 'User Application Logs';
$L['USER_LOGS']                        = 'User Logs';
$L['VIEW_SOFTWARE_ACTION_LOGS']        = 'View Software Action Log';
$L['VIEW_SYSTEM_ACTION_LOGS']          = 'View System Action Log';
$L['VIEW_UI_ACTION_LOGS']              = 'View UI Action Log';
$L['VIEW_USER_ACTION_LOGS']            = 'View User Action Log';

/* **********************************
 * #4.4.7 - HELP MANUAL
 ************************************/
$L['QB_HELP'] = 'Help Manual';

/* **********************************
 * #4.4.7.1 - description
 ************************************/
$L['DESCRIPTION_CONTENT'] = '<p>Welcome to the comprehensive graphical display of the <code>qb</code> manpage, designed to offer you a translated, simplified and efficient approach to accessing various information about QuickBox. This user-friendly interface aims to provide in-depth insights into the workings of QuickBox, a powerful and versatile tool for managing your server effortlessly.</p>
<p>Inside this graphical display, you will find a detailed list of available applications ready for seamless installation, empowering you to customize your server setup according to your specific needs. Moreover, this resource presents a wealth of other essential commands for optimal utilization within the <code>qb</code> CLI environment, enabling you to navigate through your server tasks efficiently and effortlessly.</p>
<p>Whether you are new to QuickBox or a seasoned user, this graphical display of the <code>qb</code> manpage serves as your ultimate reference to harnessing the full potential of QuickBox and unleashing the true power of your server management. Explore the diverse features, streamline your server operations, and maximize your productivity with the help of this intuitive and informative guide. Let\'s dive in and make your QuickBox experience even more rewarding!</p>';
$L['API_INFO_DIRECT'] = '<p style="font-weight:600;">For more information and reference on the embedded QuickBox API, <a href="/api-control.php" rel="noopenner nofollow" class="link" style="color:var(--qb-color-37);">see this page</a>.</p>';

/* **********************************
 * #4.4.7.2 - options
 ************************************/
$L['OPTIONS_HEADER']          = 'Options';
$L['OPTIONS_CONTENT_HELP']    = 'Displays this help manual in CLI manpage format';
$L['OPTIONS_CONTENT_VERBOSE'] = 'Enables verbose mode for debugging';

/* **********************************
 * #4.4.7.3 - software
 ************************************/
$L['SOFTWARE_HEADER']                       = 'Software';
$L['SOFTWARE_INFO_CONTENT']                 = '<p>The following is a list of all available applications for install provided through the QuickBox build.<br/>Software names are presented as seen by <code>qb [install|reinstall|update|remove|help] [software_name]</code></p>';
$L['ADMIN_INSTALLED_SOFTWARE_HEADER']       = 'Admin Installed Software';
$L['ADMIN_INSTALLED_SOFTWARE_INFO_CONTENT'] = '<p>The following applications are required to be installed by the System Administrator.<br/>See availability column below for additional details.</p>';
$L['MULTI_USER_SOFTWARE_HEADER']            = 'Multi User Software';
$L['MULTI_USER_SOFTWARE_INFO_CONTENT']      = '<p>The following applications can be installed by multiple users without needing admin assistance.<br/>All application availability is determined by the System Administrator and granted to additional users within <a href="/usergroups.php" rel="noopener nofollow" class="link">created groups</a>.</p>';
$L['SINGLE_USER_SOFTWARE_HEADER']           = 'Single User Software';
$L['SINGLE_USER_SOFTWARE_INFO_CONTENT']     = '<p>The following applications can be installed by only one assigned user at a time, without needing admin assistance.<br/>All application availability is determined by the System Administrator and granted to additional users within <a href="/usergroups.php" rel="noopener nofollow" class="link">created groups</a>.</p>';
$L['SOFTWARE_MANAGEMENT']                   = 'Software Management';
$L['SOFTWARE_MANAGEMENT_CONTENT']           = 'Parameters for installing, reinstalling, updating, or removing designated software with additional options (if present/desired) to an assigned user';
$L['SOFTWARE_MANAGEMENT_WARNING_CONTENT']   = '<p>Keep in mind that various applications have various options/requirements. The majority require the use of the username flag (<code>-u</code>), whereas applications such as rtorrent will not. To check all available options for a specific software, utilize <code class="language-bash">qb help [software_name]</code>. Application naming within QuickBox for the software naming scheme can be viewed in the <a href="#software" class="link">software list chart</a> above.</p>';
$L['SEE_ALSO_HEADER']                       = 'See Also';
$L['SEE_ALSO_CONTENT']                      = 'Show helpful command usage for designated software';

/* **********************************
 * #4.4.7.4 - software options table
 ************************************/
$L['SOFTWARE_NAME']     = 'Software Name';
$L['SOFTWARE_TITLE']    = 'Software Title';
$L['USABILITY']         = 'Usability';
$L['CAN_ROLLBACK']      = 'Rollback Option';
$L['INFO']              = 'Info';
$L['ADMIN_BADGE']       = '<span class="badge badge-pills badge-table-menu" style="padding:2px 6px;line-height:0.7rem;background-color:var(--qb-color-6-rgba);color:#fff;font-size:0.5rem;">admin only</span>';
$L['GLOBAL_BADGE']      = '<span class="badge badge-pills badge-table-menu" style="padding:2px 6px;line-height:0.7rem;background-color:var(--qb-color-5-rgba);color:#fff;font-size:0.5rem;">global</span>';
$L['MULTI_USER_BADGE']  = '<span class="badge badge-pills badge-table-menu" style="padding:2px 6px;line-height:0.7rem;background-color:var(--qb-color-4-rgba);color:#fff;font-size:0.5rem;">multi user</span>';
$L['SINGLE_USER_BADGE'] = '<span class="badge badge-pills badge-table-menu" style="padding:2px 6px;line-height:0.7rem;background-color:var(--qb-color-3-rgba);color:#fff;font-size:0.5rem;">single user</span>';
$L['GLOBAL_INFO']       = 'requires admin installation and installs for all users on the system.';
$L['MULTI_USER_INFO']   = 'requires admin installation and can be installed for any assigned user. multiple users are supported.';
$L['SINGLE_USER_INFO']  = 'single user, admin only. requires admin installation and is installed and operated by admin user.';

/* **********************************
 * #4.4.7.5 - examples header
 ************************************/
$L['EXAMPLES_HEADER'] = 'Examples';

/* **********************************
 * #4.4.7.6 - user management
 ************************************/
$L['USER_MANAGEMENT_INFO_CONTENT']   = '<p>The <code>qb user</code> management functions in QuickBox offer a versatile and powerful set of tools to efficiently manage users on your server. With a focus on ease of use and robust functionality, these functions enable you to streamline user management, enhance security, and ensure a smooth server operation.</p>';
$L['CREATE_USER_CONTENT']            = 'Creates a new QuickBox user account';
$L['DELETE_USER_CONTENT']            = 'Deletes QuickBox user account';
$L['CHANGE_USER_PASSWORD']           = 'Change User Password';
$L['CHANGE_USER_PASSWORD_CONTENT']   = 'Changes password for assigned user account';
$L['BAN_USER_CONTENT']               = 'Bans assigned user account, preventing login and stopping installed services and their functions.';
$L['BAN_USER_PRIMARY_CONTENT']       = '<p><em>This does not <strong>delete</strong> user data</em>, only disables running services and blocks access.</p>';
$L['UNBAN_USER_CONTENT']             = 'Unbans assigned user account, allowing login and starting installed services and their functions';
$L['PROMOTE_USER_TO_ADMIN']          = 'Promote User to Admin';
$L['PROMOTE_USER_TO_ADMIN_CONTENT']  = 'Promotes assigned user to admin level';
$L['DEMOTE_USER_FROM_ADMIN']         = 'Demote User from Admin';
$L['DEMOTE_USER_FROM_ADMIN_CONTENT'] = 'Demotes assigned user to standard user level';
$L['SET_USER_QUOTA']                 = 'Set User Quota';
$L['SHOW_USER_QUOTA']                = 'Show User Quota';
$L['SET_USER_SHELL']                 = 'Set User Shell';
$L['SET_USER_SHELL_CONTENT']         = 'Sets the shell environment for assigned user';
$L['SET_USER_SHELL_INFO_CONTENT']    = '<p><strong><code>sudo</code></strong><br>complete admin privileges to the server environment (great power... etc)<br><strong><code>full</code></strong><br>full access to the server environment, with the exception of higher privileged areas; ie: no sudo and cannot access root directories.<br><strong><code>limited</code></strong><br>the limited shell environment. very little access to commands and jailed to their own user home directory.</p><hr/><p>Shell environments are set by the System Administrator and can be viewed on the users edit page located within the <a href="/useradmin.php" rel="noopener nofollow" class="link">User Admin page</a>.<br/>If you would like to add a new shell environment, you can do so by editing the <code>/etc/shells</code> file and adding the path to the shell environment you would like to add.</p>';
$L['SET_USER_SHELL_DANGER_CONTENT']  = '<p><strong>Caution:</strong> Please be aware that changing the shell environment to anything other than <code>/bash</code> may lead to unintended behavior when using <code>qb</code> (QuickBox), as it has been specifically designed and optimized for the <code>/bash</code> environment. In short, <code>qb</code> relies on specific features and functionalities provided by the Bash shell.<br><br>To avoid any potential issues, it is advisable to stick with the <code>/bash</code> environment when using <code>qb</code>. If you still wish to use a different shell, consult the documentation for that shell to review any additional changes to paths, configurations, or other settings that may need to be updated to ensure compatibility with <code>qb</code>.</p>';
$L['USER_RCLONE_COMPANION_COMMANDS'] = 'Rclone Companion Commands';

/* **********************************
 * #4.4.7.7 - clean functions
 ************************************/
$L['CLEAN_FUNCTIONS']                  = 'Clean Functions';
$L['CLEAN_FUNCTIONS_INFO_CONTENT']     = '<p>The <code>qb clean</code> functions in QuickBox offer a convenient and efficient way to maintain your server\'s cleanliness and optimize its performance. Designed with simplicity and effectiveness in mind, these functions enable you to free up valuable memory, remove unnecessary clutter, and ensure a smooth and streamlined server operation.</p>';
$L['CLEAN_MEMORY']                     = 'Clean Memory';
$L['CLEAN_MEMORY_CONTENT']             = 'Cleans QuickBox memory caches';
$L['CLEAN_DASHBOARD_LOGS']             = 'Clean Dashboard Logs';
$L['CLEAN_DASHBOARD_LOGS_CONTENT']     = 'Cleans QuickBox dashboard logs for the designated user';
$L['CLEAN_QB_DASHBOARD_LOGS']          = 'Clean QB Dashboard log files';
$L['CLEAN_QB_DASHBOARD_LOGS_CONTENT']  = 'This command is designed to clear the current UI Actions log posted from syslog and reset the UI Nginx error log to its initial state';
$L['CLEAN_SYSTEM_LOGS']                = 'Remove old system log files';
$L['CLEAN_SYSTEM_LOGS_CONTENT']        = 'This command is designed to delete logs and compressed archives in the <code>/var/log</code> directory that have exceeded the assigned retention period. The retention period is set to 7 days by default (if no optional value is entered).';
$L['CLEAN_RCLONE_UPLOAD_LOGS']         = 'Clean Rclone Upload Logs';
$L['CLEAN_RCLONE_UPLOAD_LOGS_CONTENT'] = 'Cleans QuickBox rclone upload logs for the designated user';
$L['CLEAN_LOCKS']                      = 'Clean Locks';
$L['CLEAN_LOCKS_CONTENT']              = 'Cleans QuickBox software and apt-dpkg locks that may prevent QuickBox from installing new software';

/* **********************************
 * #4.4.7.8 - fix functions
 ************************************/
$L['FIX_FUNCTIONS']              = 'Fix Functions';
$L['FIX_FUNCTIONS_INFO_CONTENT'] = '<p>The <code>qb fix</code> functions in QuickBox provide a powerful and user-friendly toolkit to address common issues and perform system repairs effortlessly. With a focus on simplicity and effectiveness, these functions enable you to troubleshoot and resolve various problems that may arise on your server, ensuring smooth and uninterrupted operations.</p>';
$L['FIX_HOME']                   = 'Fix Home';
$L['FIX_HOME_CONTENT']           = 'Fix designated users home directory permissions';
$L['FIX_PHP']                    = 'Fix PHP';
$L['FIX_PHP_CONTENT']            = 'Fix PHP configuration and install missing extensions. This will also update PHP packages to the latest version';
$L['FIX_PYTHON']                 = 'Fix Python';
$L['FIX_PYTHON_CONTENT']         = 'Fix Python configuration and install missing extensions. Additionally stages python3.9 if not currently available on the system for default use on application builds requiring python';
$L['FIX_VERSION']                = 'Fix Version';
$L['FIX_VERSION_CONTENT']        = 'Fix QuickBox installation by reinstalling latest version available';

/* **********************************
 * #4.4.7.9 - generate functions
 ************************************/
$L['GENERATE_FUNCTIONS']                   = 'Generate Functions';
$L['GENERATE_FUNCTIONS_INFO_CONTENT']      = '<p>The <code>qb generate</code> functions in QuickBox offer a convenient and efficient way to create essential elements that enhance server management and monitoring. Presently, the qb generate command supports the qb generate logs function, allowing users to effortlessly generate a preview of the servers stats, api activation, and mount information.<br/>As the qb generate functions evolve, they will likely offer an expanding array of features to enhance server management further.</p>';
$L['GENERATE_SYSTEM_LOGS']                 = 'Generate System Logs';
$L['GENERATE_SYSTEM_LOGS_CONTENT']         = 'Generates system logs for the current QuickBox installation';
$L['GENERATE_SYSTEM_LOGS_WARNING_CONTENT'] = '<p>As of version <em>3.0.0.<strong>36+</strong></em>, <code>qb generate log</code> has evolved into a more in depth utility for log aggregation and organization. It aims to simplify log retrieval through complementing an application\'s native logs by summarizing and centralizing critical log data, making troubleshooting much more efficient.</p><p>This command and it\'s functionality is a continued work in progress.</p>';
$L['GENERATE_SYSTEM_LOGS_SUCCESS_CONTENT'] = '<p>You can access and download this summary log file in three ways:<br><ol><li><strong>Generate / Download:</strong> Go to \'System > <a href="/troubleshooting.php" class="link">Troubleshooting</a> > System Log\' within the user interface. Here you can generate and/or download the system log summary produced by the generate log command.</li><li><strong>View Logs:</strong> Go to \'System > <a href="/logs.php" class="link">System Logs</a>\'. Here is where you can find additional logs and info gathered by the generate log command.</li><li><strong>Server Directory:</strong> Find it on the server at: \'/srv/quickbox/logs/system_log\'.</li></ol></p>';

/* **********************************
 * #4.4.7.10 - manage functions
 ************************************/
$L['MANAGE_FUNCTIONS']                                  = 'Manage Functions';
$L['MANAGE_FUNCTIONS_INFO_CONTENT']                     = '<p>The <code>qb manage</code> functions in QuickBox provide a powerful and comprehensive set of tools to efficiently manage various aspects of your server. Designed with user convenience in mind, these functions empower you to effortlessly control critical elements of your QuickBox-powered environment.<br/>Whether it\'s swapping language settings, checking the status of your main API activation, managing data distribution, or ensuring data integrity through backups and rollbacks, the qb manage functions offer a comprehensive solution for server administrators and enthusiasts alike.</p>';
$L['MANAGE_API_KEY']                                    = 'Manage API Key';
$L['MANAGE_API_KEY_CONTENT']                            = 'Manage QuickBox API keys and list additional information and options';
$L['ADD_API_KEY']                                       = 'Add API Key';
$L['ADD_API_KEY_CONTENT']                               = 'Add/Activate API key';
$L['REMOVE_API_KEY']                                    = 'Remove API Key';
$L['REMOVE_API_KEY_CONTENT']                            = 'Remove/Deactivate API key';
$L['MANAGE_DATABASE']                                   = 'Manage Database';
$L['MANAGE_DATABASE_CONTENT']                           = 'Manage which database is used for QuickBox';
$L['MANAGE_DATABASE_CONNECTION_INFO_CONTENT']           = 'Please note that when specifying a username and password (if the options are used), they do not have to match your current main account\'s credentials. These credentials are intended for local system use, particularly for database connections and various system functions. Therefore, they can be unique and independent of your main account\'s username and password.';
$L['MANAGE_DATABASE_INFO_CONTENT']                      = 'QuickBox primarily utilizes SQLite3 as its default database. However, you have the option to seamlessly switch between SQLite3 and MySQL using this command. If you opt for MySQL, ensure you have a MySQL server properly installed and configured on your system. Additionally, you\'ll need a MySQL user account with adequate permissions for database creation and management. Executing this command facilitates these necessary configurations, including the installation of MySQL server and client if they are not already installed on your system. During the process, you will be prompted to install MySQL server and client if they are not detected. Additionally, the command handles the configuration setup, ensuring seamless integration with QuickBox. Please note that all parameters except <code>-o [mysql|sqlite]</code> are optional and will default to predefined values within the script.<br><br>The default values are as follows:<br><code>user=admin, pass=%random%, port=3306, host=localhost, name=qbpro</code><br><br>MySQL details can be found at <code>/root/.my.cnf</code>.<br><br>To convert back to SQLite3, simply run the command again with the <code>-o sqlite</code> flag.';
$L['MANAGE_DATABASE_BACKUP']                            = 'Manage Database Backup';
$L['MANAGE_DATABASE_BACKUP_CONTENT']                    = 'Backup the QuickBox database';
$L['MANAGE_DATABASE_BACKUP_INFO_CONTENT']               = 'The QuickBox backup process runs automatically every 24 hours at 3:30 AM (server time) as part of the maintenance schedule. This task is listed in the <code>/etc/cron.d/quickbox</code> schedule as:<br><br><code>30 3 * * * root /usr/local/bin/qb manage db -o maintenance --cron</code><br><br>However, you can manually trigger a backup (without running the maintenance routine) using the command above.<br><br><strong>About the Backup Process</strong><br><br>Each backup creates a snapshot of the QuickBox database, providing a restore point to safeguard data integrity in case of data loss or corruption. Backup files are saved in a specified directory, with the system retaining the 5 most recent backups to ensure you always have multiple restore points available for recovery.<br><br><strong>Backup File Locations</strong><br><br>Backup files are stored in the following directories:<br><br><strong>MySQL</strong>: <code>/opt/quickbox/backup/system/[DATE_TIME]/db/qbpro.sql</code><br><strong>SQLite</strong>: <code>/opt/quickbox/backup/system/[DATE_TIME]/db/qbpro.db</code>';
$L['MANAGE_DATABASE_MAINTENANCE']                       = 'Manage Database Maintenance';
$L['MANAGE_DATABASE_MAINTENANCE_CONTENT']               = 'Initiate the QuickBox database maintenance process';
$L['MANAGE_DATABASE_MAINTENANCE_INFO_CONTENT']          = 'The QuickBox maintenance process is designed to keep the database running smoothly and efficiently. This process includes:<br><br><ol><li>Cleaning up unneeded data.</li><li>Optimizing database tables.</li><li>Running other maintenance tasks to boost efficiency and prevent data issues, such as checking and repairing tables.</li><li>Triggering a Message of the Day (MotD) notification to alert the system administrator via CLI if unrecoverable errors occur.</li></ol><p><strong>When Maintenance Runs</strong><br><br>The maintenance process runs automatically every 24 hours at 3:30 AM server time. This task is listed in the <code>/etc/cron.d/quickbox</code> schedule as:<br><br><code>30 3 * * * root /usr/local/bin/qb manage db -o maintenance --cron</code><br><br>However, you can manually trigger maintenance using the command above.<br><br><strong>Why Maintenance is Important</strong><br><br>Regular maintenance ensures that your QuickBox database stays healthy, keeps system performance high, and protects your data.</p>';
$L['MANAGE_DATABASE_RESTORE']                           = 'Manage Database Restore';
$L['MANAGE_DATABASE_RESTORE_CONTENT']                   = 'Restore the QuickBox database';
$L['MANAGE_DATABASE_RESTORE_INFO_CONTENT']              = 'This command initiates the database restore process, allowing you to select a specific backup file to restore. The restore process is designed to recover data in case of data loss or corruption, providing a reliable and efficient way to restore your QuickBox database to a previous state.<br><br><strong>How the Restore Process Works</strong><br><br>When you run the restore command, you will be presented with a selection menu listing all available database backup files. You can then choose the backup file you want to restore, and the system will automatically restore the selected backup file, returning your QuickBox database to the state it was in when the backup was created.';
$L['MANAGE_DASHBOARD_ACCESS_URL']                       = 'Manage Dashboard access url';
$L['MANAGE_DASHBOARD_ACCESS_URL_CONTENT']               = 'This command sets the server web root for dashboard access to either the expressed Domain or IP Address';
$L['SET_SERVER_LANG']                                   = 'Set Server Language';
$L['SET_SERVER_LANG_CONTENT']                           = 'This command will set the requested language as the default language for the server';
$L['MANAGE_PUBLIC_TRACKERS']                            = 'Manage Public Trackers';
$L['MANAGE_PUBLIC_TRACKERS_CONTENT']                    = 'This command will enable or disable public trackers for all users';
$L['EX_PUB_TRACKERS_ALLOW']                             = 'example to allow public trackers:';
$L['EX_PUB_TRACKERS_DISALLOW']                          = 'example to disallow public trackers:';
$L['BACKUP_APPLICATIONS']                               = 'Backup Applications';
$L['PARTIAL_CONFIG_ONLY_BACKUP']                        = 'Partial Backup <span class="badge badge-pills outline-badge-secondary badge-table-menu" style="padding:2px 6px;line-height:0.7rem;font-size:0.5rem;">config only</span>';
$L['PARTIAL_CONFIG_ONLY_BACKUP_CONTENT']                = 'This command will backup the designated application config for the assigned user';
$L['FULL_CONFIG_AND_APP_BACKUP']                        = 'Full Backup <span class="badge badge-pills outline-badge-primary badge-table-menu" style="padding:2px 6px;line-height:0.7rem;font-size:0.5rem;">config &amp; app</span>';
$L['FULL_CONFIG_AND_APP_BACKUP_CONTENT']                = 'This command will backup the designated application for the assigned user. Includes the application and config data, handy for rolling back to previously installed and backed up versions';
$L['PARTIAL_RTORRENT_ALL_USERS_BACKUP']                 = 'Partial Backup (rtorrent only)';
$L['PARTIAL_RTORRENT_ALL_USERS_BACKUP_PRIMARY_CONTENT'] = '<p>In the case of rtorrent as the software config to backup, the username flag (<code>-u</code>) is not required.</p>';
$L['PARTIAL_RTORRENT_ALL_USERS_BACKUP_CONTENT']         = 'This command will backup all existing rtorrent users .rtorrent.rc files.<br>Backups are stored at:<br><code>/home/[USERNAME]/.QuickBox/software/rtorrent/backup/.rtorrent.rc_YEAR-MONTH-DAY_HOUR:MINUTE</code>';
$L['ROLLBACK_APPLICATIONS']                             = 'Rollback Application Backup';
$L['ROLLBACK_APPLICATIONS_CONTENT']                     = 'This command will rollback the designated application for the assigned user to a previous version stored/selected in the backup directory.<br>Backups are stored at:<br><code>/home/[USERNAME]/.QuickBox/software/[SOFTWARE_NAME]/backup/</code>';
$L['RESTORE_APP_BACKUP_CONFIG']                         = 'Restore Backup <span class="badge badge-pills outline-badge-secondary badge-table-menu" style="padding:2px 6px;line-height:0.7rem;font-size:0.5rem;">config only</span>';
$L['RESTORE_APP_BACKUP_CONFIG_CONTENT']                 = 'This command will restore the designated previously backed up application config for the assigned user';
$L['RESTORE_APP_DEFAULT_CONFIG']                        = 'Restore Default <span class="badge badge-pills outline-badge-secondary badge-table-menu" style="padding:2px 6px;line-height:0.7rem;font-size:0.5rem;">config only</span>';
$L['RESTORE_APP_DEFAULT_CONFIG_CONTENT']                = 'This command will restore the designated default (from install) application config for the assigned user';

/* **********************************
 * #4.4.7.11 - news functions
 ************************************/
$L['NEWS_FUNCTIONS']              = 'News Functions';
$L['NEWS_FUNCTIONS_INFO_CONTENT'] = '<p>The <code>qb news</code> function in QuickBox delivers timely and relevant news updates directly to your server, ensuring you stay informed about the latest developments and changes in the QuickBox ecosystem. With a focus on keeping you up-to-date, this feature provides essential information about current and upcoming releases, version changes, and other items of interest.</p>';
$L['NEWS']                        = 'News';
$L['NEWS_CONTENT']                = 'View latest QuickBox news';

/* **********************************
 * #4.4.7.12 - support functions
 ************************************/
$L['SUPPORT_FUNCTIONS']              = 'Support Functions';
$L['SUPPORT_FUNCTIONS_INFO_CONTENT'] = '<p>The <code>qb support</code> function in QuickBox offers a secure and reliable method to grant support staff access to your server when assistance is needed. With a strong emphasis on security and user protection, this feature utilizes the <code>quickSupport</code> account, ensuring that only authorized support personnel can access your server.</p>';
$L['ENABLE_SUPPORT']                 = 'Enable Support';
$L['ENABLE_SUPPORT_CONTENT']         = 'Enable support. Typically assigned to the staff team member who is responsible for the support';
$L['DISABLE_SUPPORT']                = 'Disable Support';
$L['DISABLE_SUPPORT_CONTENT']        = 'Disable support. Otherwise, the support account will automatically delete itself after 36 hours';

/* **********************************
 * #4.4.7.13 - update functions
 ************************************/
$L['UPDATE_FUNCTIONS']              = 'Update Functions';
$L['UPDATE_FUNCTIONS_INFO_CONTENT'] = '<p>The <code>qb update</code> function in QuickBox offers you a convenient and flexible way to manage updates for your QuickBox installation. With this feature, you have full control over the update process, allowing you to manually check for updates and choose when to apply them.</p>';
$L['UPDATE_CHECK']                  = 'Update Check';
$L['UPDATE_CHECK_CONTENT']          = 'Check for updates to QuickBox';
$L['UPDATE_QUICKBOX']               = 'Update QuickBox';
$L['UPDATE_QUICKBOX_CONTENT']       = 'Update QuickBox installation to latest release, if any available';

/* **********************************
 * #4.4.7.14 - bugs & reporting
 ************************************/
$L['BUGS']              = 'Bugs & Reporting';
$L['BUGS_INFO_CONTENT'] = '<p>The graphical display of QuickBox\'s documentation, will receive regular updates to ensure that the information provided remains easily accessible and user-friendly. Our commitment to enhancing your experience with QuickBox drives us to continually refine and improve the documentation, keeping it up-to-date with the latest features and functionalities.<br/><br/>
With each update, we will strive to simplify complex concepts, clarify instructions, and incorporate user feedback to make the qb manpage even more intuitive and efficient. Our goal is to empower you with a seamless understanding of QuickBox and its vast capabilities, enabling you to master the qb CLI environment and effortlessly manage your server tasks.<br/><br/>
We value your input and encourage you to share any suggestions or ideas you may have to further enhance the qb manpage. Your feedback is instrumental in shaping this resource and ensuring it remains a valuable reference for all QuickBox users. In fact, this page exist because it was requested! 🤪<br/><br/>
Report any reproducable bugs, or suggestions to <strong><a href="https://nullrefer.ir/?https://github.com/QuickBox/pro-v3/issues" rel="noopener nofollow" target="_blank">QuickBox.IO Labs Issue & Feature Tracker</a></strong></p>';

/* **********************************
 * #4.4.7.15 - disclaimer
 ************************************/
$L['DISCLAIMER']      = 'Disclaimer';
$L['DISCLAIMER_TEXT'] = '<p>This script is intended for general use and no warranty is implied for suitability to any given task. QuickBox.IO will hold no responsibility for your setup or any damage done while using/installing/modifying this script or any of its plugins. Please keep in mind QuickBox.IO nor it\'s staff are responsible for keeping your Software and/or Server up-to-date; this is a responsibility solely left to the user of the QuickBox Pro software.</p>';

/* **********************************
 * #4.4.7.16 - license
 ************************************/
$L['LICENSE']      = 'License';
$L['LICENSE_SET']  = 'Licensed under BSD 3-Clause';
$L['LICENSE_TEXT'] = '<p>Copyright (c) 2018-2024, QuickBox.IO. All rights reserved.</p>
<p>Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:</p>
<ul style="font-size:0.75rem"><li>Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.</li>
<li>Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.</li>
<li>Neither the name of the copyright holder nor the names of its contributors may be used to endorse or promote products derived from this software without specific prior written permission.</li></ul>
<p>THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS \'AS IS\' AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.</p>';

/* **********************************
 * #4.4.7.17 - misc
 ************************************/
$L['EXAMPLE']         = 'example:';
$L['EXAMPLES']        = 'examples:';
$L['LOG_MAINTENANCE'] = 'Log Maintenance';

/* **********************************
 * #4.4.8 - CHANGELOG / UPDATE
 ************************************/
$L['CURRENT_VERSION']   = 'Current Version';
$L['DASH_UPDATE_TITLE'] = 'QuickBox Version Panel';
$L['QB_UPDATE']         = 'QuickBox Version Panel';
$L['QBUPDATE']          = 'Changelog / Update';
$L['UPCOMING_CHANGES']  = 'Upcoming Changes';
$L['UPDATE_AVAILABLE']  = 'Update Available';
$L['UPDATE_TO_DATE']    = 'Up to date';
$L['VERSION_STATUS']    = 'Version Status';
$L['UPDATE_TXT']        = 'Update';
$L['AVAILABLE_TXT']     = 'Available!';
$L['UPDATE_VERSION']    = 'Update Version';
$L['UPDATE_ACTIVATE']   = 'Please activate your Pro Subscription to receive updates';
$L['UPDATE_CURRENT']    = 'You\'re up-to-date!';
$L['CHANGELOGS']        = 'Changelogs';

/* **********************************
 * #4.4.9 - SYSTEM DASHBOARD
 ************************************/
$L['BANDWIDTH_TOTALS_TOOLTIP'] = 'You can manage the monthly bandwidth start date and reset statistics via <a href=\'/configurations.php#additionals\'>General Settings > Additional Dashboard Settings</a>. This allows you to adjust the start date or clear the vnStat database to reset totals.<br/><br/>View the current accumulated totals and history : <a href=\'javascript:void(0)\' class=\'open_bandwidthtotals_modal\' data-toggle=\'modal\' data-target=\'#viewBandwidthTotals\'><span class=\'badge badge-pills badge-info\'>Bandwidth Totals</span></a>';
$L['DISK_UTIL_TIME']           = 'Disk Utilization Time';
$L['DISK_IO_BW']               = 'Disk I/O Bandwidth';
$L['DISK_SPACE_USAGE_FOR']     = 'Disk Space Usage for:';
$L['DISK_UTILIZATION']         = 'Utilization';
$L['DISK_WRITE']               = 'Write';
$L['DISK_READ']                = 'Read';
$L['SYS_DISK_READ']            = 'Disk Read';
$L['SYS_DISK_WRITE']           = 'Disk Write';
$L['TOP_CPU_PROC']             = 'Top CPU Application Processes';
$L['TOP_CPUMEM_PROC']          = 'Top CPU Memory Processes';
$L['TOP_CPUSYS_PROC']          = 'Top CPU System Processes';
$L['SERVICE_MEM_USAGE']        = 'Systemd Services Used Memory without Cache';
$L['SYS_SWAP_USAGE']           = 'System swap Usage';
$L['SYS_MEM_USAGE']            = 'System Memory Usage';
$L['CPU_FREQ']                 = 'Current CPU Frequency';
$L['CPU_LOAD']                 = 'CPU Load';
$L['CPU_USAGE']                = 'CPU Usage';
$L['RAM_USAGE']                = 'RAM Usage';
$L['BW_UPLOAD']                = 'Bandwidth Upload';
$L['BW_DOWNLOAD']              = 'Bandwidth Download';
$L['SYS_UPLOAD']               = 'Upload';
$L['SYS_DOWNLOAD']             = 'Download';
$L['SYS_DASH_POWERED_BY']      = 'System Dashboard powered by:';
$L['SYS_DASH_UPTIME']          = 'System Uptime';
$L['SYS_DASH_SWAP_USED']       = 'Used swap';
$L['SYS_DASH_RAM_USED']        = 'Used RAM';
$L['SYS_DASH_CPU']             = 'CPU';
$L['SYS_DASH_TMD']             = 'Total Monthly Download';
$L['SYS_DASH_TMU']             = 'Total Monthly Upload';
$L['APT_UPDATES']              = 'APT Updates';
$L['APT_DEPENDENCY']           = 'Dependency Package';
$L['APT_VERSION_INSTALLED']    = 'Current Version';
$L['APT_VERSION_AVAILABLE']    = 'Available Version';
$L['UPDATE_APT_DEPENDENCIES']  = 'Update apt dependencies';

/* **********************************
 * #4.4.9.1 - Bandwidth Totals Modal
 ************************************/
$L['BANDWIDTH_TOTALS']            = 'Bandwidth Totals';
$L['BANDWIDTH_DATA_TIME_NOTICE']  = 'Note: The times displayed on these charts are based on the server\'s timezone, not your local timezone. To adjust the server\'s timezone, please follow the steps below.<br/><ul><li>SSH into your server</li><li>Run the command<br/><code>sudo dpkg-reconfigure tzdata</code></li><li>Follow the prompts to select your timezone</li><li>Once finished, run the below command<br><code>qb-vnstat --adjust-timestamps</code></li></ul><p class=\'text-warning\'>Adjusting the server timezone will impact the accumulated chart data.</p>';
$L['SELECT_AN_INTERFACE']         = 'Select an Interface';
$L['BANDWIDTH_TOTALS_DATA_INFO']  = 'This data is collected from the vnStat database and is based on the monthly cycle set within the vnStat configuration. The data is collected and stored in the vnStat database and is displayed here for your convenience. You can manage the monthly bandwidth start date and reset statistics via <a href=\'/configurations.php#additionals\' style=\'display:inline-flex\'>General Settings > Additional Dashboard Settings</a>. This allows you to adjust the start date or clear the vnStat database to reset totals.';
$L['VIEWING_DATA_FOR']            = 'Viewing data for:';
$L['MONTHLY_BANDWIDTH_DATA']      = 'Monthly Bandwidth Data';
$L['DAILY_BANDWIDTH_DATA']        = 'Daily Bandwidth Data';
$L['HOURLY_BANDWIDTH_DATA']       = 'Hourly Bandwidth Data';
$L['BANDWIDTH_YEAR']              = 'Year';
$L['BANDWIDTH_MONTH']             = 'Month';
$L['BANDWIDTH_DAY']               = 'Day';
$L['BANDWIDTH_HOUR']              = 'Hour';
$L['BANDWIDTH_TOTAL']             = 'Total Traffic';
$L['BANDWIDTH_RX']                = 'Download';
$L['BANDWIDTH_TX']                = 'Upload';
$L['BANDWIDTH_SELECT_INTERFACE']  = 'Select Interface';
$L['BANDWIDTH_SELECT_MONTH']      = 'Select Month';
$L['BANDWIDTH_SELECT_DAY']        = 'Select Day';
$L['BANDWIDTH_SELECT_HOUR']       = 'Select Hour';
$L['BANDWIDTH_SELECT_YEAR']       = 'Select Year';
$L['BANDWIDTH_USAGE']             = 'Bandwidth Usage';
$L['BANDWIDTH_VIEWING_INTERFACE'] = '(( viewing ))';

/* **********************************
 * #4.4.10 - WHAT'S STREAMING DASHBOARD
 ************************************/
$L['STREAMING_DASHBOARD']                        = 'Streaming Dashboard';
$L['STREAMING_DASHBOARD_INFO']                   = 'The What\'s Streaming Dashboard provides an overview of the current streaming activity on your server. This feature currently supports Emby and Jellyfin streaming services. The dashboard displays the number of active streams, the total bandwidth used, and the current media being streamed. Additionally, you can view the latest movies and episodes being watched by your users.';
$L['DAEMON_AND_STREAMING_SERVICES']              = 'Daemon + Media Server Control Deck';
$L['STREAMING_APP_VERSION']                      = '{applicationName} Version';
$L['ENTER_API_KEY']                              = 'Enter Your API Key';
$L['API_KEY_PLACEHOLDER']                        = 'Enter Your {serviceName} API Key';
$L['MASS_NOTIFICATION']                          = 'Mass Notification';
$L['TEMP_TRANSCODE_PATH']                        = 'Temp Transcode Path';
$L['CLEAR_TEMP_TRANSCODE_PATH']                  = 'Empty Temp Transcodes';
$L['INTERVAL_SETTINGS_FOR_TEMP_TRANSCODES']      = 'Interval Settings for Temp Transcodes';
$L['INTERVAL_SETTINGS_FOR_TEMP_TRANSCODES_TIPS'] = '<strong><em>The following are measured in minutes.</em></strong><br><small>(ex: 90 minutes = 1.5 hours)</small><hr>These settings determine the intervals at which temporary transcodes are cleared. The system will automatically clear transcodes based on the specified intervals to free up disk space and optimize performance.';
$L['INTERVAL_STANDARD']                          = 'Standard Media';
$L['INTERVAL_LIVE_TV']                           = 'LiveTV';
$L['ENABLE_TRANSCODE_AUTO_CLEAR']                = 'Enable Automatic Clearing of Temp Transcodes';
$L['TRANSCODE_AUTO_CLEAR_ACTIVATED']             = 'Transcode auto-clear activated.<br>Standard interval: {standardInterval} minutes.<br>LiveTV interval: {liveTvInterval} minutes.';
$L['TRANSCODE_AUTO_CLEAR_DEACTIVATED']           = 'Transcode auto-clear deactivated.';
$L['SETTINGS_SAVE_SUCCESS']                      = 'Settings saved successfully.';
$L['STREAMING_STATS']                            = 'Streaming Stats';
$L['LATEST_MOVIES']                              = 'Latest Movies';
$L['MOVIE']                                      = 'Movie';
$L['MOVIES']                                     = 'Movies';
$L['LATEST_EPISODES']                            = 'Latest Episodes';
$L['SHOWS']                                      = 'Shows';
$L['SERIES']                                     = 'Series';
$L['EPISODE']                                    = 'Episode';
$L['SEASON_EPISODE']                             = 'Season/Episode';
$L['EPISODE_TITLE']                              = 'Episode';
$L['LIVETV']                                     = 'Live TV';
$L['CHANNEL']                                    = 'Channel';
$L['CHANNEL_NUMBER']                             = 'Channel Number';
$L['NOW_PLAYING']                                = 'Now Playing';
$L['MEDIA_TITLE']                                = 'Media Title';
$L['MEDIA_TYPE']                                 = 'Media Type';
$L['YEAR']                                       = 'Year';
$L['DURATION']                                   = 'Duration';
$L['ACTION']                                     = 'Action';
$L['DISCONNECT_REASON']                          = 'Disconnect Reason';
$L['NOTIFICATION']                               = 'Notification';
$L['LIBRARY']                                    = 'Library';
$L['LIBRARY_PATH']                               = 'Library Path';
$L['PREMIERE_DATE']                              = 'Premiere Date';
$L['ACTIVE_STREAMS_PLACEHOLDER']                 = '(0 active streams)';
$L['BANDWIDTH_USED_PLACEHOLDER']                 = '(Bandwidth Used: 0 Mbps)';
$L['MEDIA_ITEM']                                 = 'Media Item';
$L['ACTION_INFO']                                = 'Action Info';
$L['ADDITIONAL_INFO']                            = 'Additional Info';
$L['NO_DETAILS_AVAILABLE']                       = 'No details available.';
$L['DEVICE_INFO']                                = 'Device Info';
$L['STREAM_INFO']                                = 'Stream Info';
$L['PLAY_STATE_PRIORITY']                        = 'Play State Priority';
$L['VIEW_WSD_LOGS']                              = 'View WSD Logs';
$L['WSD_ACTION_LOGS']                            = 'WSD Action Logs';
$L['CLEAR_LOGS']                                 = 'Clear Logs';
$L['NO_ACTIONS_CURRENTLY_LOGGED']                = 'No actions currently logged.';
$L['KILL_STREAM_SETTINGS']                       = 'Killstream Settings';
$L['NOTIFICATION_TITLE']                         = 'Notification';
$L['NOTIFICATION_MESSAGE']                       = 'Message';
$L['THRESHOLD_SETTINGS_FOR_KILLSTREAM']          = 'Threshold Settings for Killstream';
$L['THRESHOLD_SETTINGS_FOR_KILLSTREAM_TIPS']     = '<strong><em>The following are measured in seconds.</em></strong><br><small>(ex: 600 seconds = 10 minutes)</small><hr>These settings determine the conditions under which a stream will be forcefully stopped due to inactivity. The system will monitor the stream\'s activity and, if the conditions are met, it will automatically stop the stream to free up resources.';
$L['STANDARD_MEDIA']                             = 'Standard Media';
$L['LIVE_TV_MEDIA']                              = 'Live TV';
$L['SKIP_NOTIFICATION']                          = 'Skip Notification';
$L['SKIP_DISCONNECTION']                         = 'Skip Disconnection';
$L['PAUSE_DURATION']                             = 'Pause Duration';
$L['DISCONNECT_DURATION']                        = 'Disconnect Duration';
$L['WSD_ACTION_CLEAR_LOGS_CONFIRM']              = 'Are you sure you want to clear the logs?';
$L['WSD_ACTION_CLEAR_LOGS']                      = 'Yes, clear them!';
$L['WSD_ACTION_CLEAR_LOGS_FAILED']               = 'Failed to clear logs.';
$L['WSD_ACTION_CLEAR_LOGS_SUCCESS']              = 'Logs cleared successfully.';
$L['WSD_ADMIN_NOTIFY']                           = '<span class="text-info fw900">[admin-notify]</span> <strong>{admin}</strong> {admin_status} issued a <span class="text-warning fw600">notification</span> to <strong>{user}</strong> while watching <span class="text-primary fw600">{media}</span>.<br><div style="border:1px solid var(--qb-color-8-rgba);background:var(--qb-color-1-rgba);padding:4px 12px;border-radius:3px;text-wrap:pretty;min-width:250px;"><span class="fw600">{notif_header}</span><br><span class="fw300">{notif_text}</span></div>';
$L['WSD_KILL_NOTIFY']                            = '<span class="text-info fw900">[kill-notify]</span> {user} watching <span class="text-primary fw600">{media}</span> paused for <span class="text-info fw600">{paused_time}</span> at <span class="text-mute">{pause_position}</span> on <span class="text-mute fw600">{pause_date} {pause_time}</span> from <span class="text-mute fw600">{device} {ip}</span> has been <span class="text-warning fw600">notified</span> for idle violation.';
$L['WSD_NOTIFY']                                 = '<span class="text-info fw900">[notify]</span> {user} received a notification.';
$L['WSD_ADMIN_STOP']                             = '<span class="text-info fw900">[admin-stop]</span> {user} watching <span class="text-primary fw600">{media}</span> from <span class="text-mute fw600">{device}</span> has been <span class="text-danger fw600">force stopped</span> by <strong>{admin}</strong> {admin_status}.';
$L['WSD_KILL_STREAM']                            = '<span class="text-info fw900">[kill-stream]</span> {user} watching <span class="text-primary fw600">{media}</span> paused for <span class="text-info fw600">{paused_time}</span> at <span class="text-mute">{pause_position}</span> on <span class="text-mute fw600">{pause_date} {pause_time}</span> from <span class="text-mute fw600">{device} {ip}</span> has been <span class="text-danger fw600">stopped</span> for idle violation.';
$L['WSD_ADMIN_DISCONNECT']                       = '<span class="text-info fw900">[admin-disconnect]</span> {user} watching <span class="text-primary fw600">{media}</span> from <span class="text-mute fw600">{device}</span> has been <span class="text-danger fw600">force disconnected</span> by <strong>{admin}</strong> {admin_status}.';
$L['WSD_DISCONNECT_STREAM']                      = '<span class="text-info fw900">[kill-stream]</span> {user} watching <span class="text-primary fw600">{media}</span> paused for <span class="text-info fw600">{paused_time}</span> at <span class="text-mute">{pause_position}</span> on <span class="text-mute fw600">{pause_date} {pause_time}</span> from <span class="text-mute fw600">{device} {ip}</span> has been <span class="text-danger fw600">disconnected</span> for idle violation.';
$L['WSD_MASS_NOTIFICATION']                      = '<span class="text-info fw900">[mass-notification]</span> <strong>{admin}</strong> {admin_status} issued a mass notification.<br><strong>Users Notified:</strong> {users_notified}<br><strong>Active Users:</strong> {active_users}, <strong>Total Sessions:</strong> {session_count}.<div style="border:1px solid var(--qb-color-8-rgba);background:var(--qb-color-1-rgba);padding:4px 12px;border-radius:3px;text-wrap:pretty;min-width:250px;"><strong>{notif_header}</strong><br>{notif_text}</div>';
$L['WSD_USER_ACTION']                            = '<span class="text-info fw900">[user-action]</span> {user} performed action: <span class="text-primary fw600">{action}</span> on <span class="text-mute fw600">{date} {time}</span>.';
$L['NONE']                                       = 'None';

/* *****************************************
 * #4.4.10.1 - page level errors & messages
 *******************************************/
$L['MISSING_FIELD']                    = 'Missing field';
$L['MISSING_API_KEY']                  = 'Missing API Key';
$L['INVALID_API_KEY_FORMAT']           = 'Invalid API Key format. Please enter a valid API Key.';
$L['UNKNOWN_MEDIA']                    = 'Unknown Media';
$L['UNKNOWN_DURATION']                 = 'Unknown Duration';
$L['UNKNOWN_PAUSE_TIME']               = 'Unknown Pause Time';
$L['ERROR_FETCHING_LOGS']              = 'Error fetching logs.';
$L['NO_SUPPORTED_STREAMING_SERVICE']   = 'No supported streaming service is installed.';
$L['PROCESS_REQUEST_ERROR']            = 'Error processing request. Please try again.';
$L['API_CONNECTION_ERROR']             = 'Unable to connect to the {serviceName} API. Please check your API key and server configuration.';
$L['INPUT_READ_FAILED']                = 'Failed to read input.';
$L['INVALID_INPUT']                    = 'Invalid input. Please check your input and try again.';
$L['INVALID_JSON_PAYLOAD']             = 'Invalid JSON payload: {error}';
$L['INVALID_EMBY_API_KEY']             = 'Invalid Emby API Key.';
$L['INVALID_JELLYFIN_API_KEY']         = 'Invalid Jellyfin API Key.';
$L['DB_FILE_NOT_FOUND']                = 'Database file not found: {dbPath}';
$L['API_KEY_SAVE_SUCCESS']             = 'API Key saved successfully.';
$L['API_KEY_SAVE_FAILED']              = 'Failed to save API Key.';
$L['INVALID_TEMP_TRANSCODE_PATH']      = 'Invalid temporary transcode path.';
$L['INVALID_SERVICE_SPECIFIED']        = 'Invalid service specified.';
$L['TEMP_TRANSCODE_PATH_SAVE_FAIL']    = 'Failed to save temporary transcode path.';
$L['TEMP_TRANSCODE_PATH_SAVE_SUCCESS'] = 'Temporary transcode path saved successfully.';
$L['TRANSCODE_INTERVAL_SAVE']          = 'Transcode auto clean interval saved successfully.';
$L['TRANSCODE_INTERVAL_FAILED']        = 'Failed to save transcode auto clean interval.';
$L['INVALID_TRANSCODE_PATH']           = 'Invalid or missing transcode path.';
$L['TRANSCODE_DIR_EMPTY_FAILED']       = 'Failed to empty the temporary transcode directory.';
$L['TRANSCODE_DIR_EMPTY_SUCCESS']      = 'Temporary transcode directory emptied successfully.';
$L['EMBY_CONFIG_LOAD_FAILED']          = 'Failed to load Emby configuration.';
$L['EMBY_API_KEY_RETRIEVE_FAILED']     = 'Failed to retrieve Emby API key.';
$L['JELLYFIN_API_KEY_RETRIEVE_FAILED'] = 'Failed to retrieve Jellyfin API key.';
$L['JELLYFIN_CONFIG_LOAD_FAILED']      = 'Failed to load Jellyfin configuration.';
$L['LATEST_LOG_FETCH_FAILED']          = 'Failed to fetch the latest log.';
$L['ERROR_PREFIX']                     = '[ERROR] ';
$L['UNKNOWN']                          = 'Unknown';
$L['UNKNOWN_USER']                     = 'Unknown User';
$L['UNKNOWN_DEVICE']                   = 'Unknown Device';
$L['API_URL_KEY_REQUIRED']             = 'API URL and Key are required.';
$L['FAILED_TO_CREATE_UPDATE_TRIGGER']  = 'Failed to create update trigger: ';
$L['DB_TABLE_CREATE_FAILED']           = 'Failed to create `media_api` table: {error}';
$L['DB_TABLE_INFO_FAILED']             = 'Failed to retrieve table info for `media_api`: {error}';
$L['DB_COLUMN_ADD_FAILED']             = 'Failed to add `{column}` column to `media_api`: {error}';
$L['LOCATION_PRIVATE_RESERVED']        = 'Private/Local IP';
$L['UNKNOWN_IP']                       = 'Unknown IP';
$L['LOCATION_UNKNOWN_CITY']            = 'Unknown City';
$L['LOCATION_UNKNOWN_STATE']           = 'Unknown State';
$L['LOCATION_UNKNOWN_COUNTRY']         = 'Unknown Country';
$L['LOCATION_LOADING']                 = 'Loading location...';
$L['LOCATION_ERROR']                   = 'Error';
$L['API_MOVIE_COUNT_FETCH_FAILED']     = 'Failed to fetch movie count from {applicationName} API. HTTP Code: {httpCode}. Error: {error}';
$L['API_MOVIE_COUNT_NOT_FOUND']        = 'Movie count not found in {applicationName} API response.';
$L['API_SERIES_COUNT_FETCH_FAILED']    = 'Failed to fetch series count from {applicationName} API. HTTP Code: {httpCode}. Error: {error}';
$L['API_SERIES_COUNT_NOT_FOUND']       = 'Series count not found in {applicationName} API response.';
$L['API_EPISODE_COUNT_FETCH_FAILED']   = 'Failed to fetch episode count from {applicationName} API. HTTP Code: {httpCode}. Error: {error}';
$L['API_EPISODE_COUNT_NOT_FOUND']      = 'Episode count not found in {applicationName} API response.';
$L['CURL_INIT_FAILED']                 = 'Failed to initialize cURL session for {applicationName}.';
$L['CURL_ERROR']                       = 'cURL error: {error}';
$L['HTTP_ERROR']                       = 'HTTP error: Status code {httpStatus}';
$L['UNEXPECTED_RESPONSE_TYPE']         = 'Unexpected response type: {responseType}';
$L['INVALID_LOGS_FORMAT']              = 'Invalid logs format: Expected array but got {logType}';
$L['INVALID_APPLICATION_NAME']         = 'Invalid application name. Must be \'jellyfin\' or \'emby\'.';
$L['DB_QUERY_PREPARE_FAILED']          = 'Failed to prepare the database query: {error}';
$L['DB_QUERY_EXECUTION_FAILED']        = 'Failed to execute the database query: {error}';
$L['DB_SELECT_QUERY_PREPARE_FAILED']   = 'Failed to prepare the SELECT query: {error}';
$L['DB_SELECT_QUERY_EXECUTE_FAILED']   = 'Failed to execute the SELECT query: {error}';
$L['DB_UPDATE_QUERY_PREPARE_FAILED']   = 'Failed to prepare the UPDATE query: {error}';
$L['DB_INSERT_QUERY_PREPARE_FAILED']   = 'Failed to prepare the INSERT query: {error}';
$L['DB_API_KEY_RETRIEVAL_FAILED']      = 'Failed to retrieve API key due to a database error.';
$L['UNSUPPORTED_DB_TYPE']              = 'Unsupported database type: {dbType}';
$L['DOMAIN_NOT_DEFINED']               = '{applicationName} domain is not defined.';
$L['QUERY_FAILED']                     = 'Query failed: {errorInfo}';
$L['NO_INSTALLATION_FOUND']            = 'No {applicationName} installation found for any user.';
$L['USERNAME_FETCH_FAILED']            = 'Failed to fetch username for {applicationName} user ID: {appUID}.';
$L['INVALID_API_URL']                  = 'Invalid {applicationName} API URL: {apiUrl}.';
$L['INVALID_TOGGLE_VALUE']             = 'Invalid toggle value. Expected 0 or 1.';
$L['INVALID_PATH_FORMAT']              = 'Invalid path format. Expected a string.';
$L['INVALID_INTERVAL']                 = 'Invalid interval format. Expected a positive integer.';
$L['SETTINGS_SAVE_FAILED']             = 'Failed to save settings. Please try again.';
$L['SERVER_ERROR']                     = 'Server Error';

/* **********************************
 * #4.6 - ERROR PAGES
 ************************************/
$L['404HACK'] = 'Ouch! Do you really want to hurt me?';
$L['404PAGE'] = 'This is not the page you are looking for.';
$L['404PRO']  = 'Please purchase a <a href="https://nullrefer.ir/?https://quickbox.io/product/quickbox-pro-subscription/" rel="noopener nofollow" target="_blank">QuickBox API key</a> to access this page.';
$L['500PAGE'] = 'This is embarrassing, something appears to have gone wrong.';
$L['WHOOPS']  = 'Whoops!';
