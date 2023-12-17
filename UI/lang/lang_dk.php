<?php

/**
 * QuickBox Pro Danish Language File
 *
 * This file is used to translate the QuickBox Pro Dashboard into Danish.
 * Ready for QuickBox Pro v3.0.1 : December 15, 2023
 *
 * @package    dashboard
 * @subpackage lang
 * @category   Danish
 * @version    3.0.1.17
 * @since      1.0.0
 *
 * @var Configs $configs The configurations object.
 * @var Session $session The user session object.
 */

// Include required variables
$version  = $configs->getConfig('Version');
$username = $session->username;

/*
 * SUMMARY :
 *
 * NAVIGATION : #1
 *    language & theme selection : #1.1
 *    user menu : #1.2
 *    sidebar menu : #1.3
 *    sidebar submenus : #1.4
 *    footer : #1.5
 * MISCELLANEOUS : #2
 *    buttons : #2.1
 *    popup texture : #2.2
 *    app nginx config edit modal : #2.3
 *    other : #2.4
 * WIDGETS : #3
 *    Tables Headers : #3.1
 *       app management center : #3.1.1
 *    Package Management Center : #3.2
 *       app info : #3.2.1
 *       app uninstall : #3.2.2
 *       app reinstall : #3.2.3
 *       toggles & tooltips : #3.2.4
 *       service control : #3.2.5
 *       rclone specific toggles : #3.2.6
 *    Dashboard Widgets : #3.3
 *       disk status widget : #3.3.1
 *       system index v1 - bandwidth data : #3.3.2
 *       system index v1 - server load : #3.3.3
 *       system index v1 - memory status : #3.3.4
 *       server activity widget : #3.3.5
 * PAGES : #4
 *    Start Screen Forms : #4.1
 *       login : #4.1.1
 *       forgot password : #4.1.2
 *       register : #4.1.3
 *       account : #4.1.4
 *         quotes : #4.1.4.1
 *         edit account modal : #4.1.4.2
 *       summary : #4.1.5
 *    Settings : #4.2
 *       general settings : #4.2.1
 *       email settings : #4.2.2
 *       session settings : #4.2.3
 *       user settings : #4.2.4
 *       security settings : #4.2.5
 *    User Management : #4.3
 *       registration settings : #4.3.1
 *       useradmin : #4.3.2
 *         admin user edit : #4.3.2.1
 *         admin announce : #4.3.2.2
 *       user groups : #4.3.3
 *    System : #4.4
 *       web console : #4.4.1
 *       api-control : #4.4.2
 *       ssl-control : #4.4.3
 *       troubleshooting : #4.4.4
 *       system logs : #4.4.5
 *       help manual : #4.4.6
 *         description : #4.4.6.1
 *         options : #4.4.6.2
 *         software : #4.4.6.3
 *         software options table : #4.4.6.4
 *         examples header : #4.4.6.5
 *         user management : #4.4.6.6
 *         clean functions : #4.4.6.7
 *         fix functions : #4.4.6.8
 *         generate functions : #4.4.6.9
 *         manage functions : #4.4.6.10
 *         news functions : #4.4.6.11
 *         support functions : #4.4.6.12
 *         update functions : #4.4.6.13
 *         bugs & reporting : #4.4.6.14
 *         disclaimer : #4.4.6.15
 *         license : #4.4.6.16
 *         misc : #4.4.6.17
 *       changelogs / update : #4.4.7
 *       system dashboard : #4.4.8
 *    Error Pages : #4.5
 */

/* ********************************************************************************
 * #1 NAVIGATION
 *
 * 1.1 - language & theme selection
 ************************************/
$L['CHINESE']         = 'Kinesisk';
$L['DANISH']          = 'Dansk';
$L['ENGLISH']         = 'Engelsk';
$L['FRENCH']          = 'Fransk';
$L['GERMAN']          = 'Tysk';
$L['PORTUGUESE']      = 'Portugisisk';
$L['SELECT_LANGUAGE'] = 'Klik for at vælge sprog';
$L['SELECT_THEME']    = 'Klik for at vælge tema';
$L['SPANISH']         = 'Spansk';
$L['THEME_DARK']      = 'Mørkt Tema';
$L['THEME_LIGHT']     = 'Lyst Tema';

/* **********************************
 * 1.2 - user menu (top right)
 ************************************/
$L['LOG_OUT'] = 'Log Ud';
$L['PROFILE'] = 'Min Profil';
$L['REBOOT']  = 'Genstart';

/* **********************************
 * 1.3 - sidebar menus
 ************************************/
$L['ABOUT_AND_TIPS']    = 'Om / QuickTips';
$L['APP_DASHBOARD']     = 'Software Dashboard';
$L['DASHBOARD']         = 'Dashboardet';
$L['DB_MGMNT']          = 'phpMyAdmin';
$L['EXTERNAL_LINKS']    = 'Brugerdefinerede links';
$L['GENERAL_SETTINGS']  = 'Generelle indstillinger';
$L['HELP_SUPPORT']      = 'Hjælp / Opdater';
$L['KB']                = 'QuickBox.IO Videns Base';
$L['PLUGINS']           = 'Udvidelser';
$L['REGISTRATION']      = 'Registrering';
$L['SECURITY_SETTINGS'] = 'Sikkerhedsindstillinger';
$L['SESSION_SETTINGS']  = 'Sessionindstillinger';
$L['SETTINGS']          = 'Indstillinger';
$L['SYS_DASHBOARD']     = 'System Dashboard';
$L['SYSTEM_LOGS']       = 'Systemlogfiler';
$L['SYSTEM']            = 'System';
$L['USER_ADMIN']        = 'Brugeradministrator';
$L['USER_GROUPS']       = 'Brugergrupper';
$L['USER_MANAGEMENT']   = 'Brugeradministration';
$L['USER_SETTINGS']     = 'Brugerindstillinger';
$L['WEB_CONSOLE']       = 'Webkonsol';

/* **********************************
 * 1.4 - sidebar submenus
 ************************************/
$L['APP_MENU']        = 'Software';
$L['APPLICATIONS']    = 'Min software';
$L['DASHBOARD_INFO']  = 'Vælg mellem det administrative systemdashboard eller softwaredashboardet, der kan ses af alle brugere.';
$L['DASHBOARD_VIEW']  = 'Dashboard Visning';
$L['DOWNLOADS']       = 'Downloads';
$L['FILEMANAGER']     = 'Filhåndtering';
$L['PLUGINS_CENTER']  = 'Udvidelsescenter';
$L['PLUGINS_INFO']    = 'Installer og afinstaller udvidelser nemt ved blot at klikke på udvidelses-navnet.';
$L['RPLUGINS_NOTICE'] = 'Installer og afinstallér ruTorrent-udvidelser nemt ved blot at klikke på udvidelses-navnet.';
$L['RPLUGINS']        = 'ruTorrent Udvidelser';
$L['TORRENT_CLIENTS'] = 'Torrentklienter';

/* **********************************
 * 1.5 - footer
 ************************************/
$L['ALL_RIGHTS'] = 'Alle rettigheder forbeholdes.';

/* ********************************************************************************
 * #2 MISCELLANEOUS
 **********************************************************************************/
/* **********************************
 * 2.1 - buttons
 ************************************/
$L['ACTIVATE_USERS']                = 'Aktivér Brugere';
$L['ADD_IP_ADDRESS']                = 'Tilføj IP-adresse';
$L['ADD_USERNAME']                  = 'Tilføj Brugernavn';
$L['AGREE']                         = 'Det er forstået - gør det!';
$L['API_ACTIVATE']                  = 'Aktiver';
$L['APP_MANAGEMENT']                = 'Softwareadministration';
$L['APPS_INSTALLED']                = 'Installeret software';
$L['AUTO_DISABLE']                  = 'Deaktiver automatiske opdateringer';
$L['AUTO_ENABLE']                   = 'Aktiver automatiske opdateringer';
$L['BACK']                          = 'Tilbage';
$L['BAN_USER']                      = 'Bandlys Bruger';
$L['CANCEL']                        = 'Fortryd';
$L['CLEAN_LOG']                     = 'Rens opdateringslog';
$L['CLEAN_RCLOG']                   = 'Rens RClone-upload log';
$L['CLICK_ME']                      = 'Klik på mig';
$L['CLOSE_REFRESH']                 = 'Luk & Opdater';
$L['CLOSE']                         = 'Luk';
$L['CPU_TAB']                       = 'CPU';
$L['CREATE_ANNOUNCEMENT']           = 'Opret meddelelse';
$L['CREATE_GROUP']                  = 'Opret Gruppe';
$L['CREATE_NEW_GROUP']              = 'Opret en Ny Gruppe';
$L['CREATE_NEW_USER']               = 'Opret Ny Bruger';
$L['CREATE_USER']                   = 'Opret Bruger';
$L['DELETE_ALL_ANNOUNCEMENTS']      = 'Slet alle meddelelser';
$L['DELETE_ALL_LOGS']               = 'Slet alle logfiler (> 30 dage)';
$L['DELETE_INACTIVE_USERS']         = 'Slet Inaktive Brugere';
$L['DELETE_LOGS']                   = 'Slet logfiler';
$L['DELETE_SELECTED_ANNOUNCEMENTS'] = 'Slet valgte meddelelser';
$L['DELETE_SELECTED_SESSIONS']      = 'Slet valgte Sessioner';
$L['DELETE_SELECTED']               = 'Slet Valgte';
$L['DELETE_USER']                   = 'Slet Bruger';
$L['DEMOTE']                        = 'Degrader fra Admin';
$L['DISABLED']                      = 'Deaktiveret';
$L['DISK_TAB']                      = 'Disk';
$L['DOWNLOAD']                      = 'Hent';
$L['EDIT_ANNOUNCEMENT']             = 'Rediger valgt meddelelse';
$L['EDIT_GROUP']                    = 'Rediger Gruppe';
$L['EDIT_USER']                     = 'Rediger bruger';
$L['ENABLED']                       = 'Aktiveret';
$L['EXECUTE']                       = 'Udfør';
$L['GENERATE']                      = 'Generér';
$L['GO_BACK']                       = 'Tilbage';
$L['IN_USE']                        = 'I brug';
$L['INSTALL']                       = 'Installer';
$L['INSTALLED']                     = 'Afinstaller';
$L['INSTALLING']                    = 'Installerer';
$L['KILL_USER_SESSION']             = 'Dræb alle brugersessioner';
$L['LAUNCH']                        = 'Åben';
$L['LOGIN']                         = 'Log på';
$L['LOGOFF']                        = 'Log af';
$L['MEMORY_TAB']                    = 'Hukommelse';
$L['NETWORK_TAB']                   = 'Netværk';
$L['NGINX_BACKUP']                  = 'Backup Nginx Konfiguration';
$L['NGINX_DEFAULT']                 = 'Gendan Standard Konfiguration';
$L['NGINX_DISABLE']                 = 'Deaktiver Auth Popup';
$L['NGINX_ENABLE']                  = 'Aktiver Auth Popup';
$L['NGINX_RESTORE']                 = 'Gendan Nginx Konfiguration';
$L['APP_BACKUP_FULL']               = 'Fuld sikkerhedskopiering';
$L['APP_BACKUP_PARTIAL']            = 'Delvis sikkerhedskopiering';
$L['APP_DEFAULT_PARTIAL_RESTORE']   = 'Gendan standard';
$L['APP_BACKUP_PARTIAL_RESTORE']    = 'Gendan sikkerhedskopi';
$L['ED_MENU_CONFIG_APP']            = 'konfig & app';
$L['ED_MENU_CONFIG']                = 'kun konfig';
$L['VERSION_ROLLBACK_OPTIONS']      = 'Tilbagestillingsmuligheder';
$L['VERSION_ROLLBACK_V']            = 'Version: ';
$L['VERSION']                       = 'Version';
$L['DATE']                          = 'Dato';
$L['VERSION_ROLLBACK_CONFIRM']      = 'Tilbage til denne version?';
$L['VERSION_ROLLBACK_DELETE']       = 'Slet denne sikkerhedskopi?';
$L['PROMOTE']                       = 'Opgrader til Admin';
$L['RCLONE_LOCK_REMOVE']            = 'fjern låsen';
$L['RCLONE_LOGS']                   = 'se logfiler';
$L['RCLONE_UPLOAD']                 = 'upload';
$L['REFRESH']                       = 'Genindlæs';
$L['REGISTER']                      = 'Tilmeld';
$L['REGISTERED']                    = 'Registreret';
$L['REINSTALL']                     = 'Geninstaller';
$L['RELOAD_CONF']                   = 'Genindlæs Konfigurationer';
$L['RELOAD']                        = 'Genindlæs';
$L['REMOVE_BANNED_IP']              = 'Fjern Bandlyste IP-adresser';
$L['REMOVE_DISALLOWED']             = 'Fjern Brugernavn';
$L['REMOVE_MEMBER']                 = 'Fjern gruppemedlem';
$L['REMOVE']                        = 'Fjern';
$L['RESET_VERSION']                 = 'Nulstil Nuværende Version';
$L['RESET']                         = 'Nulstil';
$L['SAVE']                          = 'Gemme';
$L['SERVICE_CONTROL']               = 'Servicekontrol';
$L['SIMULATE_BUTTON']               = 'Simulér';
$L['SIMULATE_END']                  = 'Afslut Sim';
$L['SIMULATE_USER']                 = 'Simulér Bruger';
$L['NANGINX']                       = 'N/A Service kører via nginx';
$L['START']                         = 'Start';
$L['STOP']                          = 'Stands';
$L['SUBMIT']                        = 'Gem ændringer';
$L['TOP_PROC_TAB']                  = 'Top Processer';
$L['UNBAN_USER']                    = 'Tillad Bruger';
$L['UNINSTALLED']                   = 'Afinstalleret';
$L['UNINSTALLING']                  = 'Afinstallerer';
$L['UP']                            = 'Op';
$L['UPDATE']                        = 'Opdatering';
$L['UPDATE_TOOLTIP']                = 'Klik for at se flere oplysninger';
$L['UPDATE_VERSION']                = 'Opdater';
$L['USER_ACTIONS']                  = 'Brugerhandlinger';
$L['VIEW_CHANGELOG']                = 'Vis Ændringslog';
$L['LATEST']                        = 'seneste';
$L['CURRENT']                       = 'aktuel';
$L['VIEW']                          = 'Vis';

/* **********************************
 * 2.2 - popup texture
 ************************************/
$L['SYSTEM_RESPONSE_TITLE'] = 'Systeminfo';
$L['UNINSTALL_TITLE']       = 'Afinstallation';
$L['UNINSTALLING_TXT_1']    = 'Fjerner filer og rydder op ... afinstallerer';
$L['UNINSTALLING_TXT_2']    = 'er i gang. Vær tålmodig';

/* **********************************
 * 2.3 - app nginx config edit modal
 ************************************/
$L['ALERT_NGINX_EDITOR']  = 'Det rådes til at tage backup af din nuværende konfiguration først og kun ændre konfigurationen nedenfor, hvis du er velbevandret med Nginx eller bliver instrueret af et staffmedlem.';
$L['BACKUP_NGINX_LOC']    = 'Placering af Nginx Konfigurations Backup';
$L['CURRENT_NGINX_LOC']   = 'Nuværenden placering af Nginx Konfiguration';
$L['NGINX_APP_CONFIGURE'] = 'Nginx Konfigurations Editor';
$L['NGINX_EDIT']          = 'Rediger Nginx Konfiguration';
$L['ALERT_CONFIG_EDITOR'] = 'Det anbefales at tage en sikkerhedskopi af din nuværende konfiguration først og kun ændre konfigurationen nedenfor, hvis du er klar over de ændringer, der foretages, har konsulteret programmets egen dokumentation eller får instrukser fra en medarbejder';
$L['BACKUP_CONFIG_LOC']   = 'Placering af Sikkerhedskopiering af Konfigurationen';
$L['CURRENT_CONFIG_LOC']  = 'Config Nuværende Placering';
$L['APP_CONFIG_OPTIONS']  = 'Software-konfigurationseditor';
$L['APP_CONFIG_EDIT']     = 'Rediger softwarekonfiguration';

/* **********************************
 * 2.4 - other
 ************************************/
$L['ABOUT_RELEASE']       = 'Om Frigivelsen';
$L['EMAIL']               = 'Email';
$L['HERE']                = 'her';
$L['HOME']                = 'Hjem';
$L['IDLE_L']              = 'ledig';
$L['IDLE']                = 'Ledig';
$L['IS_AVAILABLE']        = 'er tilgængelig.';
$L['NANGINX']             = 'Kører på Nginx';
$L['NEED_HELP']           = 'Brug for hjælp ?';
$L['NGINX_CONF_OPTIONS']  = 'Nginx Konfigurationsindstillinger';
$L['NGINX_CONFIG']        = 'Nginx Konfiguration';
$L['NGINX_SETTINGS']      = 'Nginx Indstillinger';
$L['NO']                  = 'Nej';
$L['OPEN']                = 'åben';
$L['OR']                  = 'eller';
$L['PASSWORD']            = 'Adgangskode';
$L['PLEASE_HOLD']         = '- Vent venligst';
$L['REQUIRED_FIELD']      = 'Påkrævet område...';
$L['REQUIRED_FIELDS']     = 'Felter markeret med <span style="color:#d9534f">*</span> er påkrævet';
$L['SET_HERE']            = 'Sæt her';
$L['SIMULATE_LIST']       = 'Brugerliste';
$L['SIMULATE']            = 'Simuler Bruger';
$L['SUMMARY']             = 'Oversigt';
$L['UPDATING_QUICKBOX']   = 'Opdaterer QuickBox';
$L['UPDATING']            = 'Opdatering ';
$L['USED_L']              = 'brugt';
$L['USERNAME']            = 'Brugernavn';
$L['USERS']               = 'Brugere';
$L['YES']                 = 'Ja';
$L['ADD_MOUNT_PATH_INFO'] = 'Vælg, om du vil ignorere kvoter (hvis installeret) på den valgte mappe. Denne mulighed vil, når den er valgt, se bort fra kvoter for den angivne sti. Brug denne mulighed, når du overvåger en mappe, hvor kvoter ikke bør tages i betragtning. Dette sikrer nøjagtige pladsberegninger, især for rclone-monteringer.';
$L['ADD_NEW_MOUNT_CHECK'] = 'Tilføj en eksisterende montering eller mappe til at overvåge';
$L['MOUNT_PATH_SUCCESS']  = 'Sti blev tilføjet til overvågning. Opdaterer side...';
$L['MOUNT_PATH_ERROR']    = 'Stien, du forsøgte at tilføje til overvågning, eksisterer ikke.<br>Dobbelttjek stien, og prøv igen.';
$L['MOUNTS']              = 'Monter:';
$L['MOUNT_ADD_PATH']      = 'Tilføj sti';
$L['MOUNT_CHECK_ABOUT']   = 'Disse værdier beregnes og opdateres med jævne mellemrum. Værdierne er ikke i realtid. Du kan gennemtvinge en opdatering af disse statistikker ved at klikke på knappen \'Start scanning\' nedenfor.';
$L['MOUNT_CHECK_PROCESS'] = 'Værder for mellemrumsprocenter bliver i øjeblikket beregnet i baggrunden. Kom venligst tilbage senere for opdaterede resultater. Kræver sideopdatering.';
$L['MOUNT_MONITOR_INFO']  = 'Yderligere monteringsoplysninger';
$L['MOUNT_START_SCAN']    = 'Start scanning';
$L['REMOVE_MOUNT_PATH']   = 'Fjern overvåget sti. Dette vil ikke fjerne den faktiske mappe eller monteringspunktet.';

/* ********************************************************************************
 * #3 WIDGETS
 **********************************************************************************/
/* **********************************
 * 3.1 - Tables Headers
 ************************************/
/* **********************************
 * 3.1.1 - app management center
 ************************************/
$L['AVAILABILITY'] = 'Tilgængelighed';
$L['DETAILS']      = 'Detaljer';
$L['NAME']         = 'Navn';
$L['CONFIGS']      = 'Muligheder';
$L['EXTRAS']       = 'Ekstra';

/* **********************************
 * 3.2 - Package Management Center
 ************************************/
/* **********************************
 * 3.2.1 - app info
 ************************************/
$L['AIRSONIC']      = 'Airsonic-Advanced er en mere moderne implementering af Airsonic-grenen med flere vigtige ydelses- og funktionsforbedringer. Den tilføjer og erstatter flere funktioner i Airsonic. Airsonic er en gratis, webbaseret mediestreamer, der giver universel adgang til din musik.';
$L['AUTOBRR']       = 'Autobrr er en moderne enkelt binær erstatning for autodl-irssi+rutorrent plugin. Autobrr-monitorer IRC annoncerer kanaler og torznab RSS-feeds for at få udgivelser, så snart de er tilgængelige, med god filtrering og regex-understøttelse.';
$L['AUTODL']        = 'AutoDL-iRSSi er et plugin til irssi, der overvåger IRC annoncerer kanaler og downloader torrent-filer baseret på brugerdefinerede filtre.';
$L['AUTOSCAN']      = 'Autoscan erstatter standardadfærden i Plex og Emby til at opsamle filændringer i filsystemet. Autoscan integrerer med Sonarr, Radarr, Lidarr og Google Drive for at hente ændringer i næsten realtid uden at være afhængig af filsystemet.';
$L['BAZARR']        = 'Bazarr er en sameksistrenede applikation til Sonarr og Radarr. Det administrerer og downloader undertekster baseret på dine krav. Du definerer dine præferencer efter tv-show eller film, og Bazarr tager sig af alt for dig.';
$L['BAZARR4K']      = 'Bazarr4K er en selvstændig Bazarr-klon til 4K UHD-profilerne. Det er et middel til at håndtere flere Bazarr-forekomster, samtidig med at UHD-indhold holdes adskilt fra generelt indhold.';
$L['BBR']           = 'BBR er en ny overbelastningsstyringsalgoritme, som er bidraget til Linux-kernen TCP-stakken af Google. Med BBR på plads kan en Linux-server få signifikant øget gennemgang og reduceret forsinkelse for forbindelsessvartider.';
$L['BTSYNC']        = 'BitTorrent Sync fra BitTorrent Inc. er et proprietært peer-to-peer-fil synkroniseringsværktøj.';
$L['CALIBRE']       = 'Calibre er en cross-platform open-source suite af e-bogs software. Calibre understøtter organisering af eksisterende e-bøger ind i virtuelle biblioteker, visning, redigering, oprettelse og konvertering af e-bøger, ligeledes synkronisering til forskellige e-bogs læsere. Redigering af bøger er understøttet for EPUB and AZW3 formater.';
$L['COUCHPOTATO']   = 'Hent film automatisk, nemt og i den bedste kvalitet, så snart de er frigivet via usenet eller torrent.';
$L['CSF']           = 'ConfigServer Firewall, også kendt som CSF, er et firewall-konfigurationsscript således du kan få en bedre sikkerhed til din server og samtidig giver dig et nemt plus avanceret interface til styring af dine firewall-indstillinger.';
$L['DELUGE']        = 'Deluge en gratis letvægts cross-platform BitTorrent klient.';
$L['DUPLICATI']     = 'Duplicati er en gratis, open source backup-klient, der sikkert gemmer krypterede, trinvise, komprimerede sikkerhedskopier på cloud storage-tjenester og eksterne filservere. Det kan fungere med Amazon S3, Dropbox, Google Drive, FTP, SSH/SFTP, WebDAV og <a href="https://nullrefer.ir/?https://duplicati.readthedocs.io/en/latest/01-introduction/#supported-backends" rel="noopener nofollow" target="_blank">mange flere</a>.';
$L['EMBY']          = 'Emby er en klient-server softwarepakke, der lader brugerne være vært og streame personlige kopier af multimedie - musik-, video- og billedfiler. ... Emby-klientsoftwaren er en app, du skal installere på mobile enheder og visse set-top bokse til fjernsyn, som f.eks. Android TV. og har samme træk som Plex/SPMC etc';
$L['FAIL2BAN']      = 'Fail2Ban er et framework til indtrængningsforebyggelse af software som beskytter servere imod brute force angreb.';
$L['FILEBOT']       = 'FileBot er det ultimative værktøj til at organisere og omdøbe dine film, tv-programmer og anime samt hente undertekster og artwork. Det er smart og det virker bare.';
$L['FILEBROWSER']   = 'Filbrowser giver en filhåndteringsgrænseflade indenfor en bestemt mappe, og den kan bruges til at uploade, slette, forhåndsvise, omdøbe og redigere dine filer. Det tillader oprettelse af flere brugere, og hver bruger kan have sin egen mappe. Det kan bruges som en selvstændig app eller som middleware.';
$L['FLARESOLVERR']  = 'FlareSolverr er en proxyserver til at omgå Cloudflare-beskyttelse.';
$L['FLEXGET']       = 'FlexGet er et multifunktionsautomatiseringsværktøj til alle dine medier. Understøtter torrents, nzbs, podcasts, tegneserier, tv, film, RSS, HTML, CSV og meget mere.';
$L['FLOOD']         = 'Flood er en anden webgrænseflade til rtorrent. Det implementerer en Node.js-server til kommunikation med rTorrent API, lagring af historiske data og visning af web-brugergrænsefladen.';
$L['HEADPHONES']    = 'Headphones er en automatiseret musik downloader til NZB og Torrent, skrevet i Python. Den understøtter SABnzbd, NZBget, Transmission, μTorrent, Deluge og Blackhole.';
$L['JACKETT']       = 'Jackett åbner op for API support til dine favorit private trackere.';
$L['JDOWNLOADER']   = 'JDownloader er et gratis download-administrationsværktøj, der giver dig mulighed for hurtigt at downloade filer fra hostingtjenester såsom Mediafire, 4Shared og andre lignende funktionalitetshostingtjenester. Filhostingtjenester holder ofte din fulde downloadhastighed for at tilskynde til at købe premium-pakker; JDownloader hjælper dig med at omgå dette krav.';
$L['JELLYFIN']      = 'Jellyfin er et gratis software medie system, der giver dig kontrol over styring, administration og streaming af dine medier.';
$L['JELLYSEERR']    = 'Jellyseerr er en gratis og open source softwareapplikation til håndtering af anmodninger om dit mediebibliotek. Det er en forgrening af Overseerr bygget til at give support til Jellyfin & Emby medieservere!';
$L['KAVITA']        = 'Kavita er en hurtig, funktionsrig læseserver på tværs af platforme. Bygget med fokus på manga og målet om at være en komplet løsning til alle dine læsebehov. Opsæt din egen server og del din læsesamling med dine venner og familie.';
$L['KOMGA']         = 'Komga er en medieserver til dine digitale tegneserier/manga, med fokus på at levere en enkel og moderne grænseflade.';
$L['LAZYLIBRARIAN'] = 'LazyLibrarian er en SickBeard, CouchPotato, Headphone-lignende applikation til ebøger, lydbøger og magasiner. Den bruger en kombination af <a href="https://nullrefer.ir/?https://www.goodreads.com/" rel="noopener nofollow" target="_blank"> Goodreads </a> <a href="https://nullrefer.ir/?https://www.librarything.com/" rel="noopener nofollow" target="_blank"> Librarything </a> og eventuelt <a href="https://nullrefer.ir/?https://www.googleapis.com/books/v1/" rel="noopener nofollow" target="_blank"> GoogleBooks </a> som kilder til forfatterinfo og boginformation.';
$L['LETSENCRYPT']   = 'Let\'s Encrypt er en gratis, automatiseret og åben certifikatmyndighed (CA). Det er en tjeneste fra <a href="https://nullrefer.ir/?https://letsencrypt.org/isrg/" rel="noopener nofollow" target="_blank">Internet Security Research Group (ISRG)</a>.';
$L['LIDARR']        = 'Lidarr er en uafhængig gren af Sonarr ombygget til automatisk musikdownload via Usenet og BitTorrent. Projektet er inspireret af andre Usenet/BitTorrent musik downloadere som fx. Headphones.';
$L['MEDUSA']        = 'Medusa håndterer nemt dine tv-serier, den holder automatisk øje med nye afsnit af din favorit serie. Tillader manuel søgning og andre eksklusive funktioner, skal du kontrollere Medusa on <a href="https://nullrefer.ir/?https://github.com/pymedusa/Medusa" rel="noopener nofollow" target="_blank">Github</a>.';
$L['MYLAR3']        = 'Mylar er et automatiseret Comic Book-downloadprogram (cbr/cbz) til brug med NZB og torrenter skrevet i python. Det understøtter SABnzbd, NZBGET og mange torrent-klienter ud over DDL.';
$L['NETDATA']       = 'Netdata er et distribueret, realtids - ydeevne og sundheds overvågning for systemer og applikationer.';
$L['NEXTCLOUD']     = 'Nextcloud er en open source, selvhosted fil synkroniserings-, delings- og kommunikationsplatform. Få nem adgang til og synkroniser dine filer, kontakter, kalendre og kommuniker på tværs af alle dine enheder. Du afgør selv hvad der sker med dine data, hvor den lagres, og hvem der kan få adgang!';
$L['NOTIFIARR']     = 'Dette er den forenede klient for <a href="https://nullrefer.ir/?https://notifiarr.com/" rel="noopener nofollow" target="_blank">Notifiarr.com</a>. Klienten aktiverer indholdsanmodninger fra Media Bot i din Discord Server og leverer også rapporter for Plex-brug og systemsundhed blandt mange andre funktioner..';
$L['NOVNC']         = 'noVNC er både et VNC klient JavaScript bibliotek samt et program bygget oven på biblioteket. noVNC kører godt i enhver moderne browser, herunder mobilbrowsere (iOS og Android).';
$L['NZBGET']        = 'NZBGet er en binær downloader, som overfører filer fra Usenet baseret på information givet i nzb-filer. NZBGet er skrevet i C ++ og er kendt for sin ekstraordinære ydeevne og effektivitet.';
$L['NZBHYDRA']      = 'NZBHydra er meta søgning til NZB indeksere. Det giver nem adgang til en række rå og newznab-baserede indeksere. Du kan søge alle indeksere fra ét sted og bruge det som indekskilde til værktøjer som Sonarr eller CouchPotato.';
$L['NZBHYDRA2']     = 'NZBHydra2 er meta søgning til NZB indeksere. Det giver nem adgang til en række rå og newznab-baserede indeksere. Du kan søge alle indeksere fra ét sted og bruge det som indekskilde til værktøjer som Sonarr eller CouchPotato.';
$L['OMBI']          = 'Ombi tilbyder et smuk og let anvendeligt interface, så brugere nemt kan tilføje "Ønsker" til Plex-biblioteket. Integrerer med CouchPotato, SickChill and Sonarr.';
$L['OVERSEERR']     = 'Overseerr er en gratis og open source softwareapplikation til håndtering af anmodninger om dit mediebibliotek. Det integrerer med dine eksisterende tjenester, såsom Sonarr, Radarr og Plex!';
$L['OVPN']          = 'SSL/TLS baseret brugerdefineret VPN. Supporterer Linux, Solaris, OpenBSD, FreeBSD, NetBSD, Mac OS X, og Windows.';
$L['PHPMYADMIN']    = 'phpMyAdmin er et gratis softwareværktøj skrevet i <a href="https://nullrefer.ir/?https://php.net/" rel="noopener nofollow" target="_blank">PHP</a>, der skal håndtere administrationen af <a href="https://nullrefer.ir/?https://www.mysql.com/" rel="noopener nofollow" target="_blank">MySQL</a> over internettet. phpMyAdmin understøtter en bred vifte af operationer på MySQL og MariaDB. Ofte anvendte operationer som (styring af databaser, tabeller, kolonner, relationer, indekser, brugere, tilladelser osv.) Kan udføres via brugergrænsefladen, mens du stadig har evnen til at udføre en SQL-sætning direkte.';
$L['PLEX']          = 'Plex lader dig administrere og streame dit indhold til enhver Plex enhed.';
$L['PROWLARR']      = 'Prowlarr er en indekseringsadministrator/proxy bygget på den populære arr .net/reactjs-basestak til integration med dine forskellige PVR-apps. Prowlarr understøtter både Torrent Trackers og Usenet Indexers. Det integreres problemfrit med Sonarr, Radarr, Lidarr og Readarr, der tilbyder komplet styring af dine indeksører uden nogen app-indekseringsopsætning påkrævet.';
$L['PYLOAD']        = 'pyLoad er en download manager for `Hoster` hjemmesider, videosider og HTTP / FTP links. En liste over understøttede websteder kan findes <a href="https://nullrefer.ir/?https://github.com/pyload/pyload/wiki/Supported-Hoster" rel="noopener nofollow" target="_blank">her</a>';
$L['QBITTORRENT']   = 'qBittorrent er en gratis og pålidelig P2P BitTorrent klient. En avanceret multiplatform BitTorrent-klient med en flot Qt-brugergrænseflade samt et web-interface til remote betjening og en integreret søgemaskine.';
$L['QUASSEL']       = 'Quassel IRC er en moderne, cross-platform, distribueret IRC klient baseret på Qt4 framework.';
$L['QUOTAS']        = 'Denne feature fra Linux tillader administratore at tildele den mængde disk plads en bruger eller gruppe kan tilgå.';
$L['RADARR']        = 'Radarr er en uafhængig gren af Sonarr omarbejdet til automatisk at downloade film via Usenet og BitTorrent.<br>Projektet blev inspireret af andre Usenet/BitTorrent film downloadere som CouchPotato.';
$L['RADARR4K']      = 'Radarr4K er en selvstændig Radarr-klon til 4K UHD-profilerne. Giver mulighed for at håndtere flere Radarr-instanser, mens UHD-indhold holdes adskilt fra generelt indhold.';
$L['RAPIDLEECH']    = 'RapidLeech er et gratis serveroverførsels script op mod forskellige populære upload-/downloadsider som fx. uploaded.net, Rapidshare.com og mere end 120 andre.';
$L['RCLONE']        = 'RClone er et kommandolinjeprogram til synkronisering af filer og mapper til og fra et væld af værter';
$L['READARR']       = 'Readarr er en e-bogsamlingsmanager for Usenet- og BitTorrent-brugere. Den kan overvåge flere RSS-feeds for nye bøger fra dine yndlingsforfattere og vil fungere sammen med klienter og indeksere for at hente, sortere og omdøbe dem.';
$L['REQUESTRR']     = 'Requestrr er en Discord chatbot, der bruges til at forenkle brugen af tjenester som Sonarr/Radarr/Ombi via brugen af chat! Alle brugere af din Discord Server kan anmode om at tilføje nyt indhold og få besked, når det er tilgængeligt.';
$L['RTORRENT']      = 'rTorrent er en hurtig og effektiv BitTorrent-klient, der bruger og er ved at blive udviklet sammen med libTorrent-biblioteket (ikke forveksles med libtorrent-rasterbar). Det er skrevet i C ++ og bruger ncurses programmeringsbiblioteket, hvilket betyder at det bruger en tekstbrugergrænseflade.';
$L['RUTORRENT']     = 'ruTorrent er en front-end til den populære Bittorrent klient rtorrent. Hovedfunktioner: Letvægts serverside, så den kan installeres på gamle og low-end servere og selv på nogle SOHO routere, Udvidelser - der er flere plugins, og alle kan lave deres eget, kommer med <a href="https://nullrefer.ir/?https://lab.quickbox.io/QuickBox/club-QuickBox" rel="noopener nofollow" target="_blank">club-QuickBox tema</a>.';
$L['SABNZBD']       = 'SABnzbd er en multi-platform binær nyhedsgruppe-downloader. Programmet virker i baggrunden og forenkler downloading, verificering og udpakning af filer fra Usenet. SABnzbd bruger NZB-filer (ligner .torrent-filer, men til Usenet), i stedet for at browse Usenet direkte.';
$L['SEEDCROSS']     = 'SeedCross er en webapp til Cross-Seed af torrents i Deluge/qBittorrent/Transmission. Det er en gren af <a href="https://nullrefer.ir/?https://github.com/BC44/Cross-Seed-AutoDL" rel="noopener nofollow" target="_blank">Cross-Seed-AutoDL</a>.';
$L['SICKCHILL']     = 'SickChill håndterer nemt dine tv-serier, den holder automatisk øje med nye afsnit af din favorit serie.';
$L['SICKGEAR']      = 'SickGear er udviklet af SickBear. Automatiser din tv nydelse med innovation, dokumenteret stabilitet og pålidelighed.';
$L['SONARR']        = 'Sonarr håndterer dine tv-serier og virker med både torrents og usenet.';
$L['SONARR4K']      = 'Sonarr4K er en selvstændig Sonarr-klon til 4K UHD-profilerne. Det giver mulighed for at håndtere flere Sonarr-instanser, samtidig med at UHD-indhold holdes adskilt fra generelt indhold.';
$L['SUBSONIC']      = 'Subsonic er en webbaseret medieserver. Det er skrevet i Java, så det kan køre på ethvert operativsystem med Java support. Subsonic understøtter streaming til flere klienter samtidigt, og understøtter alle streamable medier (inklusive MP3, AAC og Ogg).';
$L['SYNCTHING']     = 'Syncthing er en open source kontinuerlig Filsynkronisering med BitTorrent';
$L['TAUTULLI']      = 'Tautulli (tidligere PlexPy) En webapplikation til at monitorere, analysere og spore forskellige data omkring brugen af din Plex Media Server.';
$L['THELOUNGE']     = 'En moderne selvhostet web IRC klient';
$L['TRANSMISSION']  = 'Transmission er designet til nem og kraftig brug. Standardindstillingerne er indstillet til standard brug, og det tager kun et par klik at konfigurere avancerede funktioner som se mapper, peer blocklists og webgrænsefladen. Når Ubuntu valgte Transmission som standard BitTorrent-klient, var en af de mest anførte grunde den nemme indlæringskurve.';
$L['UNIFI']         = 'UniFi® Controller er en trådløs netværksadministration fra Ubiquiti Networks™. Det giver dig mulighed for at styre flere trådløse netværk ved hjælp af en webbrowser.';
$L['UNPACKERR']     = 'Udpak downloads til Radarr, Sonarr, Lidarr, Readarr - Sletter udpakkede filer efter import.';
$L['WEBCONSOLE']    = 'TTYD (alias QuickBox Web Console) er en fuldt udstyret terminal baseret på Xterm.js med CJK og IME support.';
$L['X2GO']          = 'X2Go er et open source fjernskrivebords-software til Linux som benytter sig af NX tech-protokollen.';
$L['XTEVE']         = 'xTeVe er et program, der simulerer en tv-tuner, det giver dig mulighed for at have IPTV-kanaler via Plex eller Emby. xTeVe kan flette flere M3U-og XMLTV-filer og sende det til dit foretrukne Media Center.';
$L['ZNC']           = 'ZNC er en IRC bouncer eller BNC. Den kan frigøre ircklienten fra serveren eller kanalen og holde din klient ajour når der igen sker en tilkobling.';

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
 'QUOTAS'        => 'Quotas',
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
 'X2GO'          => 'X2Go',
 'XTEVE'         => 'XTeVe',
 'ZNC'           => 'ZNC'
];

/* **********************************
 * #3.2.2 - app uninstall
 ************************************/
// Loop through the array and create the uninstall translation
foreach ($APPS as $key => $value) {
 $L[$key . '_UNINSTALL'] = 'Du er ved at afinstallere <span style="color:#01cea2">' . $value . '</span> fra dit system.<br/><br/>Dette vil helt fjerne alle dine konfigurationer og indstillinger... denne handling er irreversibel.<br/><br/>Du kan geninstallere <span style="color:#01cea2">' . $value . '</span> til enhver tid vil dine indstillinger dog blive nulstillet til standard.';
}

/* **********************************
 * #3.2.3 - app reinstall
 ************************************/
// Loop through the array and create the reinstall translation
foreach ($APPS as $key => $value) {
 $L[$key . '_REINSTALL'] = 'Du er ved at geninstallere <span style="color:#01cea2">' . $value . '</span>.<br/><br/>Dette vil fuldstændigt fjerne/nulstille alle dine nuværende konfigurationer, filer og indstillinger... denne handling er irreversibel.';
}

/* **********************************
 * 3.2.4 - toggles & tooltips
 ************************************/
$L['APP_OPTIONS']                  = 'App-indstillinger';
$L['NGINX_OPTIONS']                = 'NGinx-indstillinger';
$L['CARD_VIEW']                    = 'Kortvisning';
$L['LIST_VIEW']                    = 'Listevisning';
$L['CLI']                          = 'Kun via Webkonsol';
$L['COMPAT_E']                     = 'Kompatibilitetsfejl';
$L['CURRENTLY_INSTALLED_NOTICE']   = 'Det ser ud til, at du har adgang til et program, som kun kan installeres af én bruger ad gangen. Tal med din systemadministrator for at få yderligere status om tilgængeligheden.';
$L['CURRENTLY_INSTALLED_TITLE']    = 'Nogen har i øjeblikket installeret denne software';
$L['DEL1_TOOLTIP']                 = 'Det ser ud til, at du kører på Ubuntu 20.04. Deluge v1 kører ikke på denne Distro. Overvej at installere Deluge v2 for at fortsætte, da Deluge v2 kører på opdateret libtorrent1.2 + og python3 +.';
$L['DEL2_TOOLTIP']                 = 'Det ser ud som om qBittorrent er installeret i øjeblikket. Deluge v2 fungerer ikke med qBittorrent installeret. Fjern venligst qBittorrent eller installer Deluge v1 for at fortsætte.';
$L['DEL2XENIAL_TOOLTIP']           = 'Det ser ud til, at du kører på Ubuntu 16.04. Deluge v2 kører ikke på denne Distro. Overvej venligst at installere Deluge v1 for at fortsætte.';
$L['EMBY_JELLYFIN_COMPAT_MESSAGE'] = 'Jellyfin Installeret';
$L['ENTER_MOUNT_POINT']            = 'Indtast venligst dit primære monteringspunkt';
$L['FAIL2BAN_TOOLTIP']             = 'Adgang til denne feature fås via ssh ved at skrive:<br><code>qb install fail2ban</code>';
$L['JELLYFIN_EMBY_COMPAT_MESSAGE'] = 'Emby Installeret';
$L['MEDUSA_INSTALLED']             = 'Medusa Installeret';
$L['OVPN_TOOLTIP']                 = 'Adgang til denne feature fås via webkonsollen ved at skrive:<br><code>qb install vpn -u USER</code>';
$L['PRIMARY_MOUNTM']               = 'Primært monteringspunkt (Mount)';
$L['QBIT_TOOLTIP']                 = 'Det ser ud til, at Deluge 2 er installeret i øjeblikket. qBittorrent fungerer ikke med Deluge 2 installeret. Fjern venligst Deluge 2 eller installer Deluge 1 for at fortsætte.';
$L['QUOTAS_FSTAB']                 = 'Rediger din fstab';
$L['QUOTAS_HELP']                  = 'Mere omkring installering af quotas, <a href="https://nullrefer.ir/?https://quickbox.io/document/how-to-install-quotas/" rel="noopener nofollow" target="_blank"><strong>læs venligst denne F.A.Q først</strong></a>.';
$L['QUOTAS_TOOLTIP']               = 'Tilføj følgende i stedet for <code class="language-bash">defaults</code> på dit hovedmonteringspunkt (main mount) for at fortsætte';
$L['RCLONE_ADMIN_TOOLTIP']         = 'Adgang til denne feature fås via ssh ved at skrive:<br><code>qb install rclone -u USER -o [dropbox|gdrive|encrypted]</code><br>Se <code>qb help rclone</code> for flere muligheder.';
$L['RCLONE_USER_TOOLTIP']          = 'Kontakt en systemadministrator for at få dette installeret.';
$L['REMOVE_MEDUSA_FIRST']          = 'Fjern først Medusa for at installere denne software.';
$L['REMOVE_SICKCHILL_FIRST']       = 'Fjern først SickChill for at installere denne software.';
$L['REMOVE_SICKGEAR_FIRST']        = 'Fjern først SickGear for at installere denne software.';
$L['SICKCHILL_INSTALLED']          = 'SickChill Installeret';
$L['SICKGEAR_INSTALLED']           = 'SickGear Installeret';
$L['UNIFI_SSL_TOOLTIP']            = 'Hvis du allerede har et domæne, der er angivet i dit webstedsrod samt et Lets Encrypt certifikat, der allerede er genereret for domænet, skal du vælge denne indstilling.';
$L['ZNC_TOOLTIP']                  = 'Adgang til denne feature fås via ssh ved at skrive:<br><code>qb install znc -u USER</code>';

/* **********************************
 * UI - app install/reinstall modals
 ************************************/
/* **********************************
 * calibre install/reinstall modal
 ************************************/
$L['CALIBRE_INSTALL_TITLE']   = 'Kaliberinstallation';
$L['CALIBRE_REINSTALL_TITLE'] = 'Geninstaller kaliber';
$L['CALIBRE_INSTALL_MESSAGE'] = 'Du har mulighed for at angive en brugerdefineret mappesti til dit Caliber-bibliotek. Hvis den valgte sti ikke eksisterer i øjeblikket, vil den automatisk blive genereret for dig.<br>Alternativt, hvis du foretrækker at bruge standardstien, skal du blot lade feltet stå tomt, og biblioteket vil være placeret på:<br><code>/home/' . $username . '/.config/Calibre/library</code>';

/* **********************************
 * filebot install/reinstall modal
 ************************************/
$L['FILEBOT_INSTALL_TITLE']         = 'Filebot Installation';
$L['FILEBOT_REINSTALL_TITLE']       = 'Geninstaller filrobot';
$L['PROCESS_DELUGE']                = 'Behandle downloads til Deluge?';
$L['PROCESS_DELUGE_TOOLTIP']        = 'Sæt dette til Ja for at behandle downloads til Deluge.<br>Se, hvordan du implementerer i scriptnoterne på:<br><code>/home/' . $username . '/.config/Filebot/deluge-postprocess.sh</code>';
$L['CUSTOM_PATH_TOOLTIP_NO_RCLONE'] = 'Sæt dette til Ja for at indtaste stien til dit mediebibliotek.<br>Standardstien er:<br><code>/home/' . $username . '/Media</code>';
$L['CUSTOM_PATH_TOOLTIP_RCLONE']    = 'Sæt dette til Ja for at indtaste stien til dit mediebibliotek.<br>Standardstien er:<br><code>/home/' . $username . '/rclone/cache</code>';
$L['PROCESS_NZBGET']                = 'Behandle downloads for NZBGet?';
$L['PROCESS_NZBGET_TOOLTIP']        = 'Sæt dette til Ja for at behandle downloads til NZBGet.<br>Se, hvordan du implementerer i scriptnoterne på:<br><code>/home/' . $username . '/.config/NZBGet/scripts/nzbget-postprocess.sh</code>';
$L['PROCESS_RTORRENT']              = 'Behandle downloads til rTorrent?';
$L['PROCESS_SABNZBD']               = 'Behandle downloads for SABnzbd?';
$L['CUSTOM_MEDIA_PATH']             = 'Brug tilpasset sti til mediebibliotek?';
$L['FILEBOT_DEFAULT_PATH']          = 'eksempel';
$L['FILEBOT_LICENSE']               = 'Filebot-licens';

/* **********************************
 * jdownloader install/reinstall modal
 ************************************/
$L['JDOWNLOADER_INSTALL_TITLE']        = 'JDownloader Installation';
$L['JDOWNLOADER_REINSTALL_TITLE']      = 'JDownloader Geninstaller';
$L['JDOWNLOADER_EMAIL']                = 'JDownloader konto e-mailadresse';
$L['JDOWNLOADER_PASSWORD']             = 'JDownloader kontoadgangskode';
$L['JDOWNLOADER_INSTALL_PATH_MESSAGE'] = 'Du har mulighed for at angive en brugerdefineret mappesti til dine JDownloader-downloads. Hvis den valgte sti ikke eksisterer i øjeblikket, vil den automatisk blive genereret for dig.<br>Alternativt, hvis du foretrækker at bruge standardstien, skal du blot lade feltet stå tomt, og biblioteket vil være placeret på:<br> <code>/home/' . $username . '/Downloads</code>';

/* **********************************
 * kavita install/reinstall modal
 ************************************/
$L['KAVITA_INSTALL_TITLE']   = 'Kavita Installation';
$L['KAVITA_REINSTALL_TITLE'] = 'Kavita geninstaller';
$L['KAVITA_INSTALL_MESSAGE'] = 'Du har mulighed for at angive en brugerdefineret mappesti til dit Kavita-bibliotek. Hvis den valgte sti ikke eksisterer i øjeblikket, vil den automatisk blive genereret for dig.<br>Alternativt, hvis du foretrækker at bruge standardstien, skal du blot lade feltet stå tomt, og biblioteket vil være placeret på:<br><code>/home/' . $username . '/.config/Kavita/library</code>';

/* **********************************
 * plex install/reinstall modal
 ************************************/
$L['PLEX_CLAIM_MESSAGE']     = '<p style="font-size:12px">For at gøre krav på din Plex Media Server skal du allerede have en konto og logget ind for at få kravkoden fra: <a href="https://www.plex.tv/claim/" rel="noopener nofollow" target="_blank" style="color:var(--infoColor);"><strong>https://www.plex.tv/claim/</strong></a></p><div class="alert alert-light-info fade show border-0 mb-2 mt-0" role="alert" style="font-size:12px;color:var(--mainFontColor)"><strong style="color:var(--alertLightInfoColor)">BEMÆRK:</strong> Det anbefales at bruge knappen "Kopiér til udklipsholder" fra skærmbilledet med kravkode for at sikre korrekt indsættelse, da kravkoden skelner mellem store og små bogstaver.</div>';
$L['PLEX_CLAIM_TITLE']       = 'Plex Media Server Installation';
$L['PLEX_CLAIM_TOKEN']       = 'Plex-kravkode';
$L['PLEX_DATA_PATH']         = 'Brug brugerdefineret sti til datamappe?';
$L['PLEX_DATA_PATH_TOOLTIP'] = 'Du har mulighed for at angive en brugerdefineret datasti til din Plex installation. Hvis den valgte sti ikke eksisterer i øjeblikket, vil den automatisk blive genereret for dig.<br>Alternativt, hvis du foretrækker at bruge standardstien, skal du blot beholde valget som \'Nej\', og databiblioteket bliver placeret på:<br><code>/home/' . $username . '/.config/\'Plex Media Server\'</code>';
$L['PLEX_DOMAIN']            = 'Sæt domæne til Plex Media Server?';
$L['PLEX_DOMAIN_TOOLTIP']    = 'Hvis du allerede har et domæne og DNS-posterne sat op for et Plex-underdomæne, skal du vælge \'Ja\' for at indtaste dit plex-underdomæne.<br>Denne mulighed vil konfigurere din Plex Media Server til at arbejde problemfrit med dit brugerdefinerede Plex-domæne. Det inkluderer opsætning af den essentielle Nginx reverse proxy og installation af SSL-certifikatet til dit domæne for at sikre sikker adgang.';

/* **********************************
 * 3.2.5 - service control
 ************************************/
$L['ACTIVE_STATUS']   = 'aktiv (kører)';
$L['APP_KEY']         = 'API Nøgle';
$L['APP_PORT']        = 'Port';
$L['APP_STATUS']      = 'Status';
$L['INACTIVE_STATUS'] = 'inaktiv (død)';

/* **********************************
 * 3.2.6 - rclone specific toggles
 ************************************/
$L['ACTIVE_MOUNTED']             = 'aktiv monteringspunkt (aka mount)';
$L['INACTIVE_NOTMOUNTED']        = 'død (ikke monteret)';
$L['RCLONE_OPTIONS']             = 'RClone Muligheder';
$L['RCLONE_LOG_VIEWER']          = 'RClone move.log visning';
$L['RCLONE_COMMAND_CENTER']      = 'RClone Kommandocenter';
$L['RCLONE_STATUS']              = 'RClone Status';
$L['RCLONE_UPLOAD_MESSAGE']      = 'RClone arbejder i øjeblikket i baggrunden med at uploade dine data til gdrive. I løbet af denne periode vil du se en lås, der er indstillet til at verificere, at din proces er påbegyndt. Denne lås fjerner sig selv, når processen er afsluttet. Du kan altid lukke denne popup når som helst.<br/><br/><div class="alert alert-notice" style="color:#fff"><strong>BEMÆRK: </strong> Uploaden kører automatisk via en cronjob hver aften kl. 03:12 servertid.</div>';
$L['RCLONE_UPLOAD_VIEWER']       = 'RClone-upload visning';
$L['RCMOUNT_STATUS']             = 'MergerFS-status';
$L['RCMOUNT_WHERE']              = 'Monteringspunkt (mount) placering';
$L['CLOUD_MANAGEMENT']           = 'Cloud Software';
$L['RCLONE_MOUNT_INFO']          = 'RClone Mount Info';
$L['RCLONE MOUNT CHECK_PROCESS'] = 'Værder for mellemrumsprocenter bliver i øjeblikket beregnet i baggrunden. Kom venligst tilbage senere for opdaterede resultater.';

/* **********************************
 * 3.3 - DASHBOARD WIDGETS
 ************************************/
/* **********************************
 * 3.3.1 - disk status widget
 ************************************/
$L['DD_DELUGE']             = 'Deluge';
$L['DD_NZBGET']             = 'NZBGet';
$L['DD_QBITTORRENT']        = 'qBittorrent';
$L['DD_RTORRENT']           = 'rTorrent';
$L['DD_SABNZBD']            = 'SABnzbd';
$L['DD_TRANSMISSION']       = 'Transmission';
$L['DELUGE_TORRENTS']       = 'torrents i Deluge';
$L['DISK_%_1']              = 'Du har brugt';
$L['DISK_%_2']              = 'af din totale diskplads!';
$L['DISK_SPACE']            = 'Diskplads';
$L['FREE']                  = 'Ledig';
$L['QBITTORRENT_TORRENTS']  = 'torrents i qBittorrent';
$L['RT_TORRENTS']           = 'torrents i rTorrent';
$L['NO_CLIENTS']            = 'Der er i øjeblikket ingen torrent- eller nzb-klienter installeret';
$L['SIZE']                  = 'Størrelse';
$L['CURRENT_USERS_ONLINE']  = 'Brugere, der i Øjeblikket er Online';
$L['THERE_ARE']             = 'Der er indlæst';
$L['TRANSMISSION_TORRENTS'] = 'torrents i Transmission';
$L['USED']                  = 'Brugt';
$L['YOUR_DISK_STATUS']      = 'Diskstatus';
$L['NZBGET_NZB']            = 'nzb indlæst i NZBGet';
$L['SABNZBD_NZB']           = 'nzb indlæst i SABnzbd';

/* **********************************
 * 3.3.2 - System Index v1 : bandwidth data widget
 ************************************/
$L['BANDWIDTH_DAILY']    = 'Daglig';
$L['BANDWIDTH_DATA']     = 'Båndbredde';
$L['BANDWIDTH_HOURLY']   = 'Hver time';
$L['BANDWIDTH_LIVE']     = 'Direkte';
$L['BANDWIDTH_MONTHLY']  = 'Månedlig';
$L['datefmt_days_img']   = '%d';
$L['datefmt_days']       = '%d %B';
$L['datefmt_hours_img']  = '%l';
$L['datefmt_hours']      = '%l%p';
$L['datefmt_months_img'] = '%b';
$L['datefmt_months']     = '%B %Y';
$L['datefmt_top']        = '%d %B %Y';
$L['NETWORK']            = 'Netværk';
$L['UPLOAD']             = 'Upload';

/* **********************************
 * 3.3.3 - System Index v1 : server load widget
 ************************************/
$L['DAYS_L']      = 'dage';
$L['HOURS_L']     = 'timer';
$L['MINUTES_L']   = 'min';
$L['SECONDS_L']   = 'sek';
$L['SERVER_LOAD'] = 'Serverbelastning';
$L['SL_TXT']      = 'Din servers aktuelle belastningsgennemsnit';
$L['UPTIME']      = 'Oppetid';

/* **********************************
 * 3.3.4 - System Index v1 : memory status widget
 ************************************/
$L['CACHED_MEMORY']     = 'Cached Hukommelsesforbrug';
$L['CLEAR_CACHE']       = 'Ryd Hukommelsescache';
$L['CM_BUFFERS']        = 'Buffers ligger på';
$L['CM_USAGE']          = 'Cache hukommelsesforbrug ligger på';
$L['PHYSICAL_MEMORY']   = 'Fysisk Hukommelsesforbrug';
$L['PM_IDLE']           = 'ledig';
$L['PM_USED']           = 'brugt';
$L['REAL_MEMORY']       = 'Aktuel Hukommelsesforbrug';
$L['RM_FREE']           = 'Aktuel hukommelse ledig';
$L['RM_USAGE']          = 'Aktuel hukommelsesforbrug ligger på';
$L['SWAP_IDLE']         = 'ledig';
$L['SWAP_TOTAL']        = 'total';
$L['SWAP_USAGE']        = 'SWAP-Forbrug';
$L['SWAP_USED']         = 'brugt';
$L['SWAP_ZONE']         = 'SWAP-Område';
$L['SYSTEM_RAM_STATUS'] = 'RAM';
$L['TOTAL_RAM']         = 'Samlet system RAM';
$L['TOTAL']             = 'Total';

/* **********************************
 * 3.3.5 - server activity widget
 ************************************/
$L['ACC_REQ_ACT']         = 'kræver kontoaktivering';
$L['GUESTS_ONLINE']       = 'gæster online';
$L['LAST_ACTIVE_ON']      = 'var sidst aktiv den';
$L['LOGGED_ON']           = 'logged på';
$L['MEMBERS']             = 'medlemmer';
$L['RECORD_ONLINE']       = 'Flest brugere online';
$L['THERE_ARE_AW']        = 'Der er';
$L['THERE_ARE_CURRENTLY'] = 'Der er i øjeblikket';
$L['USERS_AND']           = 'brugere og';
$L['USERS_LAST_VISIT']    = 'nye brugere har registreret sig siden dit sidste besøg';
$L['CLEAR']               = 'nulstil';

/* ********************************************************************************
 * #4 PAGES
 **********************************************************************************/
/* **********************************
 * 4.1 - START SCREEN FORMS (login/forgot pass/register/account)
 ************************************/
/* **********************************
 * 4.1.1 - LOGIN
 ************************************/
$L['CONFIRM_PASS_FIELD_PLACE'] = 'Bekræft venligst din email adresse.';
$L['CREATE_ACCOUNT']           = 'Opret en konto';
$L['REMEMBER_ME']              = 'Husk Mig';
$L['FORGOT_PASS']              = 'Glemt din adgangskode?';
$L['LOG_IN']                   = 'Log Ind';
$L['LOGIN_ACCOUNT']            = 'Log ind på din konto for at fortsætte.';
$L['LOGIN_USERNAME_INVALID']   = 'Login er ugyldigt. Tjek venligst dit brugernavn og prøv igen';
$L['LOGIN_PASSWORD_INVALID']   = 'Login er ugyldigt. Tjek venligst din adgangskode og prøv igen';
$L['LOGIN_MISSING_USERNAME']   = 'Brugernavn ikke indtastet';
$L['LOGIN_MISSING_PASSWORD']   = 'Adgangskode ikke indtastet';
$L['PASS_FIELD_INVALID']       = 'Angiv venligst din adgangskode.';
$L['PASS_FIELD_PLACE']         = 'Indtast venligst din adgangskode.';
$L['PASS_FIELD_VALID']         = 'Adgangskode leveret, validering afsluttet.';
$L['REGISTRATION_DISABLED']    = 'Registrering er i øjeblikket deaktiveret.';
$L['SIGN_IN']                  = 'Log ind';
$L['UNREGISTERED']             = 'Ikke registreret?';
$L['USER_FIELD_INVALID']       = 'Angiv venligst dit brugernavn.';
$L['USER_FIELD_PLACE']         = 'Indtast venligst dit brugernavn.';
$L['USER_FIELD_VALID']         = 'Brugernavn leveret, validering afsluttet.';
$L['ACCOUNT_BANNED']           = 'Din konto er blevet forbudt.<br/>Kontakt venligst en systemadministrator.';
$L['ACCOUNT_DISABLED']         = 'Din konto er ikke aktiveret eller er deaktiveret.<br/>Hvis du mener, at dette er et problem, kontakt da venligst en systemadministrator.';
$L['ACCOUNT_INACTIVE_ADMIN']   = 'Din konto er ikke blevet aktiveret af en administrator.';
$L['ACCOUNT_INACTIVE_EMAIL']   = 'Din konto er ikke blevet aktiveret.<br/>Tjek venligst din e-mail for aktiveringslinket.';
$L['IP_BANNED']                = 'Din IP-adresse er blevet forbudt.<br/>Kontakt venligst en systemadministrator.';

/* **********************************
 * 4.1.2 - FORGOT PASSWORD
 ************************************/
$L['EMAIL_FIELD_INVALID']      = 'Angiv venligst din email.';
$L['EMAIL_FIELD_PLACE']        = 'Indtast venligst din email.';
$L['EMAIL_FIELD_VALID']        = 'Email leveret, validering afsluttet.';
$L['PASS_GENERATED']           = 'Ny adgangskode genereret!';
$L['PASS_GENERATED_INFO']      = 'Din nye adgangskode er blevet genereret og sendt til den e-mail, der er tilknyttet din konto.';
$L['PASS_GENERATED_FAIL']      = 'Ny adgangskodefejl!';
$L['PASS_GENERATED_FAIL_INFO'] = 'Der opstod en fejl ved at sende dig e-mailen med den nye adgangskode, så din adgangskode er ikke ændret.';
$L['RECOVER_INFO']             = 'Indtast din e-mail, og instruktioner sendes til dig!';
$L['RECOVER']                  = 'Gendan adgangskode';
$L['PASSWORD_RESET']           = 'Nulstilling af adgangskode';
$L['CONFIRM_PASSWORD']         = 'Bekræft adgangskode';

/* **********************************
 * 4.1.3 - REGISTER
 ************************************/
$L['ACCOUNT_CREATED']           = 'din konto er blevet oprettet. ';
$L['CAN_LOGIN']                 = 'til din registrering. Du kan nu logge ind.';
$L['CREATED_ADM_ACT']           = 'Dette bord kræver imidlertid kontoaktivering af en administrator. Du får besked via e-mail, når din konto er blevet aktiveret.';
$L['CREATED_CHECK_EMAIL']       = 'din konto er blevet oprettet.';
$L['CREATED_EMAIL_ACT']         = 'Dette websted kræver imidlertid kontoaktivering. En aktiveringsnøgle er sendt til den e-mail-adresse, du har angivet.';
$L['EMAIL_EMPTY']               = 'E-mail ikke indtastet';
$L['EMAIL_INVALID']             = 'E-mail er ugyldig';
$L['EMAIL_MATCH']               = 'E-mail-adresser stemmer ikke overens';
$L['EMAIL_TAKEN']               = 'E-mail-adresse er allerede registreret';
$L['RCONF_EMAIL_FIELD_INVALID'] = 'Denne e-mail svarer ikke til den tidligere indtastede. Prøv igen.';
$L['RCONF_EMAIL_FIELD_VALID']   = 'E-mails matcher, validering klar.';
$L['RCONF_PASS_FIELD_INVALID']  = 'Denne adgangskode stemmer ikke overens med den tidligere indtastede. Prøv igen.';
$L['RCONF_PASS_FIELD_VALID']    = 'Adgangskoder matcher, validering klar.';
$L['REG_C_DISABLED_INFO1']      = ',men registrering til dette websted er i øjeblikket deaktiveret';
$L['REG_C_DISABLED_INFO2']      = 'Prøv igen på et senere tidspunkt eller kontakt serverejer';
$L['REG_C_DISABLED']            = 'Registrering er i øjeblikket deaktiveret';
$L['REG_DISABLED_INFO']         = 'Vi beklager, men registreringen er i øjeblikket deaktiveret. Prøv igen på et senere tidspunkt.';
$L['REG_DISABLED']              = 'Registrering Deaktiveret';
$L['REG_FORM_INFO']             = 'Udfyld venligst nedenstående formular for at oprette en konto';
$L['REGISTERED_TXT']            = 'Registreret!';
$L['REG_FAILED']                = 'Registrering mislykkedes';
$L['REG_ERROR_INFO_1']          = 'Vi beklager, men der er opstået en fejl og din registrering af brugernavnet';
$L['REG_ERROR_INFO_2']          = 'kunne ikke fuldføres. Prøv venligst igen på et senere tidspunkt.';
$L['SORRY']                     = 'Vi er kede af det';
$L['THANKS']                    = 'Tak skal du have';
$L['USERNAME_EMPTY']            = 'Brugernavn ikke indtastet';
$L['USERNAME_BELOW']            = 'Brugernavn nedenfor ';
$L['USERNAME_ABOVE']            = 'Brugernavn ovenfor ';
$L['CHARACTERS']                = ' tegn';
$L['USERNAME_REQUIREMENTS']     = 'Brugernavn matcher ikke kravene';
$L['USERNAME_WORD_RESERVED']    = 'Brugernavn reserveret ord';
$L['USERNAME_TAKEN']            = 'Brugernavn er allerede i brug';
$L['USERNAME_DISALLOWED']       = 'Brugernavn ikke tilladt';
$L['REG_IP_BANNED']             = 'IP-adresse forbudt';
$L['PASSWORD_EMPTY']            = 'Adgangskode ikke indtastet';
$L['PASSWORD_SHORT']            = 'Adgangskoden er for kort';
$L['PASSWORD_LONG']             = 'Adgangskoden for lang';
$L['PASSWORD_MATCH']            = 'Adgangskoder stemmer ikke overens';
$L['QUOTA_EMPTY']               = 'Diskkvote ikke indtastet';

/* **********************************
 * 4.1.4 - ACCOUNT
 ************************************/
$L['ADMIN_EDIT_ACC'] = 'Rediger Admin konto';
$L['EDIT_ACCOUNT']   = 'Rediger konto';
$L['USER_LINKS']     = 'Bruger-links';
$L['ADMIN_LINKS']    = 'Admin-links';
$L['Q_APP_DASH']     = 'QuickBox-software Dashboard';
$L['Q_SYS_DASH']     = 'QuickBox-systemets dashboard';
$L['FORGOT_PASS']    = 'Glemt din adgangskode?';
$L['RESET_PASS']     = 'Nulstil kodeord';
$L['USER_PROFILE']   = 'Brugerprofil';
$L['PWD_CHANGE']     = 'Adgangskode ændret';
$L['EMAIL_CHANGE']   = 'E-mail ændret';

/* **********************************
 * 4.1.4.1 - quotes
 ************************************/
$L['DAYUM']               = 'Lækkert';
$L['HEY']                 = 'Hej';
$L['HOW_AWESOME']         = 'du er for vild!';
$L['LOOK_GOOD']           = 'Ser godt ud!';
$L['QUICKBOX_DEDICATION'] = 'vi elsker din dedikation til QuickBox!!!';
$L['SO_GLAD']             = 'Så glad for at du er her';
$L['WITHOUT_YOU']         = 'hvor ville vi være uden dig!';

/* **********************************
 * 4.1.4.2 - edit account modal
 ************************************/
$L['CONFIRM_NEW_PASS_INFO'] = 'Bekræft din nye adgangskode.';
$L['CURRENT_PASS']          = 'Nuværende kodeord';
$L['NEW_EMAIL']             = 'Ny email adresse';

/* **********************************
 * 4.1.5 - SUMMARY
 ************************************/
$L['AWESOME']             = 'Fantastisk';
$L['WITH_PASSWORD']       = 'med adgangskode';
$L['USER_ADDED_TO_DB']    = 'er føjet til databasen';
$L['RETURN_PREVIOUS']     = 'Vend tilbage til forrige side';
$L['REGI_FAIL']           = 'Registreringen fejlede';
$L['REGI_FAIL_ERR1']      = 'Vi beklager, men der opstod en fejl, og din registrering af brugernavnet!';
$L['REGI_FAIL_ERR2']      = 'Kunne ikke gennemføres!';
$L['REGI_FAIL_ERR3']      = 'Prøv venligst igen!';
$L['REGI_FAIL_ERR_FOUND'] = 'fejl fundet';

/* **********************************
 * 4.2 - SETTINGS
 ************************************/
/* **********************************
 * 4.2.1 - GENERAL SETTINGS
 ************************************/
$L['ACCOUNT_PAGE']                = 'Kontoside';
$L['ACTIVATION_IP']               = 'Aktiveringsip';
$L['ACTIVATION_NEED_D_DO']        = 'Gør det her!';
$L['ACTIVATION_NEED_D']           = 'Brug for at de-aktivere?';
$L['ACTIVATION_NEED_G_GET']       = 'Få en her!';
$L['ACTIVATION_NEED_G']           = 'Brug for en API-nøgle?';
$L['ACTIVATION_TIME']             = 'Aktiveringstid';
$L['ADD_DASH_SETTINGS']           = 'Yderligere Dashboard-indstillinger';
$L['ADMIN_HOME']                  = 'Startside';
$L['API_ACTIVE']                  = 'Aktiv';
$L['API_KEY']                     = 'API-nøgle';
$L['API_NOT_ACTIVE']              = 'Ikke Aktiv';
$L['API_PLACE']                   = 'Indtast API-nøgle her...';
$L['API_SETTINGS']                = 'API-indstillinger';
$L['API_STATUS']                  = 'API-Status';
$L['API']                         = 'API';
$L['CONF_SETTINGS']               = 'Konfigurationsindstillinger';
$L['DASH_URL_SETTINGS']           = 'Dashboard URL-indstillinger';
$L['DEFAULT_PAGE']                = 'Destinationsside';
$L['DISK_MOUNT']                  = 'Disk Forbindelse (Mount)';
$L['EDIT_GEN_SETTINGS']           = 'Rediger generelle webstedsindstillinger';
$L['EMAIL_FROM_ADDR']             = 'Webstedets Email-adresse';
$L['EMAIL_FROM_NAME']             = 'Webstedet Email-afsender';
$L['EMAIL_SETTINGS']              = 'Email-indstillinger';
$L['LOGIN_PAGE']                  = 'Loginside';
$L['NET_ADAPTER']                 = 'Netværksgrænseflade';
$L['PHP_DATE_FORMAT']             = 'PHP Datoformat';
$L['PHP_FORMAT_SETTINGS']         = 'PHP Format Indstillinger';
$L['PHP_TIME_ZONE']               = 'PHP Tidszone';
$L['SITE_DESC']                   = 'Webstedets Beskrivelse';
$L['SITE_META_SETTINGS']          = 'Site Meta Indstillinger';
$L['SITE_NAME']                   = 'Webstedets Navn';
$L['SITE_ROOT']                   = 'Webstedets Rod';
$L['SITE_NAME_TOOLTIP']           = 'Webstedsnavnet skal være under 40 tegn og kun alfanumerisk uden specialtegn (mellemrum er acceptable)';
$L['SITE_DESC_TOOLTIP']           = 'Webstedsbeskrivelse skal være under 120 tegn og kun alfanumerisk uden specialtegn (mellemrum er acceptable)';
$L['EMAIL_FROM_NAME_TOOLTIP']     = 'Fra navn skal være under 60 tegn og kun alfanumerisk uden specialtegn (mellemrum er acceptable)';
$L['SITE_ROOT_TOOLTIP']           = 'Indtast din server IP eller gyldigt domæne uden efterfølgende skråstreg. eksempel: https://192.168.0.1 (eller) https://somedomain.com';
$L['SITE_LOGO_COLLAPSED']         = 'Skjulet logo';
$L['SITE_LOGO_FULL']              = 'Fuldt logo';
$L['SITE_LOGO_SETTINGS']          = 'Indstillinger for webstedslogo';
$L['SITE_LOGO_COLLAPSED_TOOLTIP'] = 'Dette er logoet, der vil blive vist, når sidebjælken er foldet sammen og vil blive brugt som browserfaneikonet.';
$L['SITE_LOGO_FULL_TOOLTIP']      = 'Dette er logoet, der vil blive vist, når sidebjælken udvides.';

/* **********************************
 * 4.2.2 - EMAIL SETTINGS
 ************************************/
$L['SMTP_AUTH']     = 'Aktivér SMTP-godkendelse';
$L['SMTP_SECURE']   = 'Aktivér SSL-kryptering, TLS accepteres også med port 465';
$L['MAIL_HOST']     = 'Indstil SMTP-serveren til at sende igennem';
$L['MAIL_PORT']     = 'TCP-port at oprette forbindelse til';
$L['MAIL_USERNAME'] = 'SMTP-brugernavn';
$L['MAIL_PASS']     = 'SMTP-adgangskode';

/* **********************************
 * 4.2.3 - SESSION SETTINGS
 ************************************/
$L['CHANGE_SESSION_SETTINGS'] = 'Skift indstillingerne vedrørende sessioner.';
$L['COOKIE_EXPIRY']           = '\'Husk mig\' Cookie udløb';
$L['COOKIE_PATH']             = 'Cookie Sti';
$L['DAYS']                    = 'Dage';
$L['GUEST_TIMEOUT']           = 'Gæsteinaktivitet';
$L['MINUTES']                 = 'Minutter';
$L['RESET_EXPIRY']            = 'Nulstil udløb ved log på';
$L['USER_TIMEOUT']            = 'Brugerinaktivitet';

/* **********************************
 * 4.2.4 - USER SETTINGS
 ************************************/
$L['ALLOW_MULTI_LOGINS']        = 'Flere logins';
$L['ALLOW_MULTI_LOGINS_DESC']   = 'Denne mulighed giver mulighed for samtidige login fra flere enheder. Hvis deaktiveret, vil brugeren blive logget ud af alle andre enheder, når de logger på fra en ny enhed.';
$L['ALLOW_CONFIG_EDITING']      = 'Konfigurer editorer på Dashboard';
$L['ALLOW_CONFIG_EDITING_DESC'] = 'Denne mulighed giver mulighed for at redigere konfigurationsfilerne fra dashboardet. Hvis deaktiveret, vil muligheden for at se/redigere konfigurationer blive skjult.';
$L['ALLOW_MOUNT_INFO']          = 'Monter info visning og tilføjelse af panel';
$L['ALLOW_MOUNT_INFO_DESC']     = 'Denne mulighed giver mulighed for at se og tilføje monteringsoplysninger fra dashboardet. Hvis deaktiveret, vil muligheden for at se/tilføje monteringsoplysninger være skjult.';
$L['BY_ADMIN']                  = 'Af Admin (Indstil herunder..)';
$L['BY_USER']                   = 'Af Bruger (Se brugeradministrator sider)';
$L['CHANGE_USER_SETTINGS']      = 'Skift globale indstillinger for brugerkonti.';
$L['EXCLUDE_ADMINS']            = 'Ekskluder admins';
$L['EXCLUDE_REDIRECTED_ADMINS'] = 'Ekskluder Admins fra at blive omdirigeret.';
$L['GEN_USER_SETTINGSTINGS']    = 'Generelle brugerindstillinger';
$L['HOW_SET']                   = 'Hvordan er de indstillet?';
$L['INDIV_USER_HOME']           = 'Individuelle brugerhjemmesider';
$L['INDIVIDUAL_USER_FOLDERS']   = 'Individuelle brugermapper';
$L['PATH_ADMIN']                = 'Sti (indstillet af Admin)';
$L['SITE_ROOT_RELATIVE']        = 'I forhold til Sidens Rod';
$L['SETTING']                   = 'Indstilling';
$L['DESCRIPTION']               = 'Beskrivelse';
$L['VALUE']                     = 'Værdi';

/* **********************************
 * 4.2.5 - SECURITY SETTINGS
 ************************************/
$L['BAN_IP_ADDRESS']       = 'Blokér / Bandlys IP-adresse';
$L['BAN_IP_INFO']          = 'f.eks. 192.168.0.1 uden ledende nuller';
$L['BAN_IP_REGISTER']      = 'Bandlys IP-adresser fra at Registrere (eller logge ind)';
$L['BANNED_IP_ADDRESSES']  = 'Bandlyste IP-adresser';
$L['DISALLOW_USERNAME']    = 'Blokér Brugernavn';
$L['DISALLOW_USERNAMES']   = 'Blokerede Brugernavne';
$L['DISALLOWED_USERNAMES'] = 'Blokerede Brugernavne';
$L['PREVENT_USERNAMES']    = 'Tillad ikke registrering af udvalgte Brugernavne';

/* **********************************
 * 4.3 - USER MANAGEMENT
 ************************************/
/* **********************************
 * 4.3.1 - REGISTRATION SETTINGS
 ************************************/
$L['ACCOUNT_ACTIVATION']           = 'Kontoaktivering';
$L['ADMIN_ACT']                    = 'Adminaktivering (Administrator godkendelse)';
$L['ADMIN_ACT_INFO']               = 'Når denne mulighed er valgt, vil brugeren efter registrering blive informeret om, at de skal vente på, at administratoren aktiverer kontoen. Brugeren vil også modtage en e-mail herom, ligesom administratoren vil have mulighed for at aktivere brugeren med linket i e-mailen eller besøge administrationspanelet og aktivere brugeren der.';
$L['ALPHANUMERIC_ONLY']            = 'Kun alfanumerisk';
$L['ALPHANUMERIC_SPACERS']         = 'Alfanumeriske';
$L['ANY_CHARS']                    = 'Alle tegn';
$L['ANY_LETTER_NUM']               = 'Enhvert bogstav, tegn og tal';
$L['DEFAULT_QUOTA_ALLOWANCE']      = 'Standard kvotetilladelse';
$L['DEFAULT_QUOTA_ALLOWANCE_INFO'] = 'Indstil et standard kvotebeløb for nye oprettede konti. Denne værdi bruges kun, når Linux Quota-pakken er installeret.';
$L['DISABLE_REGISTRATION']         = 'Deaktiver registrering';
$L['DISABLE_REGISTRATION_INFO']    = 'Dette deaktiverer registrering. Registreringsformularen vises ikke og erstattes med en informationsmeddelelse.';
$L['ENABLE_CAPTCHA']               = 'Aktivér Captcha';
$L['LETTER_NUM_AND_SPACE']         = 'Bogstav, tegn, tal';
$L['LIMIT_CHAR']                   = 'Brugernavnsbegrænsning til';
$L['NO_ACTIVATION']                = 'Ingen aktivering (øjeblikkelig adgang)';
$L['NO_ACTIVATION_INFO']           = 'Indstilling af denne mulighed giver brugeren mulighed for at registrere sig normalt uden behov for yderligere aktiveringsproces.';
$L['PASSWORD_LENGTH']              = 'Adgangskode længde';
$L['RECOMMENDED']                  = 'QuickBox anbefales';
$L['REG_SETTINGS_INFO']            = 'Skift indstillinger vedrørende registrering til webstedet.';
$L['REG_SETTINGS']                 = 'Registreringsindstillinger';
$L['SEND_WELCOME_EMAIL']           = 'Send Velkomstemail';
$L['SEND_WELCOME_EMAIL_YES_INFO']  = 'Indstilling af denne indstilling til Ja sender velkomst-e-mails til både brugeren og systemadministratoren. Denne mulighed kræver SMTP-opsætning for korrekt afsendelse af e-mails. Disse muligheder kan kontrolleres på siden <a href="/email-settings.php" style="color: var(--successColor);text-decoration: underline;">E-mailindstillinger</a>.';
$L['SEND_WELCOME_EMAIL_NO_INFO']   = 'Indstilling af denne indstilling til Nej vil ikke sende velkomstmails til nyregistrerede brugere. Al brugeroprettelse/registrering forbliver tavs, ligesom brugeroprettelse i CLI-miljøet.';
$L['USER_ACT']                     = 'Brugeraktivering (via Email)';
$L['USER_ACT_INFO']                = 'Indstilling af denne mulighed kræver, at brugeren aktiverer sin konto ved at klikke på et link sendt til sin registrerede e-mail-adresse.';
$L['USERNAME_LENGTH']              = 'Brugernavns længde';
$L['USERNAME_LOWERCASE']           = 'Brugernavn til små bogstaver';
$L['USERNAME_LOWERCASE_YES_INFO']  = 'Indstilling af denne indstilling til Ja ændrer alle nye registrerede brugernavne til små bogstaver. Dette er den anbefalede mulighed.';
$L['USERNAME_LOWERCASE_NO_INFO']   = 'Indstilling af denne indstilling til Nej vil ikke ændre nye registrerede brugernavne til små bogstaver. Brugernavne vises efterhånden som de er registreret, men vil bevare små bogstaver i servermiljøet for korrekt softwarefunktionalitet.';

/* **********************************
 * 4.3.2 - USER ADMINISTRATION
 ************************************/
$L['ADMIN_ANNOUNCE']        = 'Admin Bekendtgørelse';
$L['ANNOUNCEMENT_LIST']     = 'Bekendtgørelsesindhold';
$L['AWAITING_ADMIN']        = 'Venter på Admin aktivering ';
$L['AWAITING_EMAIL']        = 'Venter på Email aktivering';
$L['BANNED']                = 'Bandlyst';
$L['CU_CONFIRM_EMAIL_INFO'] = 'Bekræft venligst Email';
$L['CU_CONFIRM_EMAIL']      = 'Bekræft Email';
$L['CU_CONFIRM_PASS_INFO']  = 'Bekræft venligst dit kodeord';
$L['CU_CONFIRM_PASSWORD']   = 'Bekræft Kodeord';
$L['CU_DISK_QUOTA']         = 'Diskkvota:';
$L['CU_GROUP']              = 'Gruppe';
$L['CU_EMAIL']              = 'Email';
$L['CU_NEW_PASS_INFO']      = 'Indtast venligst din nye adgangskode';
$L['CU_NEW_PASSWORD']       = 'Nyt Kodeord';
$L['CU_SHELL_ENV']          = 'Foretrukket shell-miljø';
$L['CURRENT_SHELLS']        = 'Nuværende Shell';
$L['CURRENT_USERS']         = 'Nuværende Brugere';
$L['DEFAULT_GROUP_TAG']     = 'standard';
$L['DISK_STATUS']           = 'Diskstatus';
$L['EDIT_USER_SHELL']       = 'Rediger brugernes skalmiljø';
$L['EXPIRY']                = 'Udløb';
$L['HAS_USED']              = 'har brugt';
$L['IP_ADDRESS']            = 'IP-adresse';
$L['LAST_IP_ADDRESS']       = 'Seneste IP-adresse';
$L['LAST_LOGIN']            = 'Seneste Logind';
$L['LAST']                  = 'Seneste Logind';
$L['MEMBER_STATUS']         = 'Medlems Status';
$L['MEMBER_GROUP']          = 'Medlems Gruppe';
$L['OF_QUOTA']              = 'af deres samlede kvote';
$L['RECENTLY_ONLINE']       = 'Senest Online';
$L['REGISTERED_DISK_QUOTA'] = 'Disk-kvote';
$L['REGISTERED']            = 'Registreret';
$L['REGISTRATION_LOGIN']    = 'Registrering & Login';
$L['STATISTICS']            = 'Statistik';
$L['USER_ACTIVITY']         = 'Brugeraktivitet';
$L['PASSWORD_NOTICE']       = 'Adgangskoden bør ikke indeholde følgende tegn';
$L['USER_QUOTA_HELP']       = 'Indtast mængden af diskplads du vil tildele en bruger. Kvoter skal installeres for at gøre brug af denne mulighed.';
$L['USER_SHELL_HELP']       = 'Vælg rullemenuen nedenfor for at tilføje brugeren til et shell ...';
$L['USERNAME_ADMIN_USER']   = 'Brugernavn:';
$L['USERNAMES']             = 'Brugernavn';
$L['USERS_AWAITING']        = 'Afventer Aktivering';
$L['USERS_SESSIONS']        = 'Brugersessioner';

/* **********************************
 * 4.3.2.1 - admin user edit
 ************************************/
$L['ACTIONS']                 = 'Handlinger';
$L['ACTIVE_SESSION']          = 'Aktive Sessioner';
$L['APPLICATION']             = 'Software';
$L['BANNED_USER']             = 'Udelukket bruger';
$L['CURRENT_FULL_PATH']       = 'Nuværende Fulde Sti';
$L['CURRENT_GROUPS']          = 'Nuværende Grupper';
$L['CURRENT_STATUS']          = 'Nuværende Status';
$L['EDIT_DEFAULT_GROUP']      = 'Standardgruppe';
$L['EDIT_DEFAULT_GROUP_INFO'] = 'Denne mulighed, når den er valgt, vil sætte denne som standardgruppe. Dette er nyttigt, når du opretter brugere ved hjælp af CLI og ønsker at have en specialfremstillet gruppe som standard tildelt.';
$L['EDIT_GROUP_MEMBERSHIP']   = 'Rediger brugerens gruppemedlemskab';
$L['EU_PATH']                 = 'Sti';
$L['GENERAL_INFO']            = 'Generelle oplysninger';
$L['GROUP_MEMBERSHIP_HELP']   = 'Klik på nedenstående tekstfelt for at tilføje brugeren til flere grupper ...';
$L['GROUP_MEMBERSHIP']        = 'Gruppemedlemskab';
$L['HOMEPAGE']                = 'Hjemmeside';
$L['INSTRUCTIONS']            = 'Instruktioner';
$L['LAST_ACTIVE_IP']          = 'Senest Aktive IP';
$L['LAST_ACTIVE']             = 'Senest Aktiv';
$L['LAST_UPDATE']             = 'Senest Ændret';
$L['PERSISTENT']              = 'Vedvarende';
$L['REGISTERED_IP']           = 'Registreret IP';
$L['SESSION_EXPIRY']          = 'Session Udløb';
$L['STATUS']                  = 'Status';
$L['UNBANNED_USER']           = 'Uforbudt bruger';
$L['UNIQUE_USER_HP_SETTINGS'] = 'Unik Bruger Side - Indstillinger';
$L['USER_EDIT1']              = 'Brugerredigering :';
$L['USER_EDIT2']              = 'Brugerredigering';
$L['SELECT_GROUP']            = 'Vælg gruppe';

/* **********************************
 * #4.3.2.2 - admin announce
 ************************************/
$L['ENABLE_USER_ANNOUNCE']          = 'Aktiver Dashboard-meddelelse';
$L['ANNOUNCEMENT_HISTORY']          = 'Dine tidligere meddelelser';
$L['TYPE']                          = 'Type';
$L['USER']                          = 'Bruger';
$L['TIME']                          = 'Tid';
$L['ANNOUNCEMENT_LIST']             = 'Meddelelsesindhold';
$L['GLOBAL_USER_ANNOUNCEMENT']      = 'Global (alle brugere)';
$L['CREATE_DASHBOARD_ANNOUNCEMENT'] = 'Opret Dashboard-meddelelse';
$L['GLOBAL_ANNOUNCEMENT']           = 'Global meddelelse';
$L['GLOBAL_ANNOUNCEMENT_INFO']      = 'Valg af denne mulighed vil skabe en global meddelelse, der er synlig på hver brugers dashboard, uanset deres gruppemedlemskab. Hvis du allerede har tildelt en meddelelse til en bruger, vil den blive vist ved siden af denne globale meddelelse.';
$L['SELECT_USER']                   = 'Vælg bruger:';
$L['SELECT_ANNOUNCEMENT_TYPE']      = 'Meddelelsestype:';
$L['EDIT_DASHBOARD_ANNOUNCEMENT']   = 'Rediger Dashboard-meddelelse';
$L['EDIT_ANNOUNCEMENT_INFO']        = 'Redigering og lagring af en eksisterende meddelelse vil nulstille dens synlighed på den angivne brugers dashboard. Hvis meddelelsen er global, vil den også nulstille visningshistorikken på alle brugeres dashboards.';
$L['ANNOUNCEMENT_ID']               = 'Meddelelses-id';
$L['ANNOUNCEMENT_TYPE']             = 'Meddelelsestype';
$L['PREVIEW']                       = 'Forhåndsvisning';

/* **********************************
 * 4.3.3 - USERS GROUPS
 ************************************/
$L['ADMINISTRATORS']    = 'Administratorer';
$L['ASSIGN_LEVEL']      = 'Tildel Gruppeniveau :';
$L['CLICK_HERE']        = 'Klik Her...';
$L['DELETE_GROUP']      = 'Slet Gruppe';
$L['DELETED']           = 'Slettet';
$L['GROUP_DELETED']     = 'Denne gruppe er blevet fjernet, brugergrupper nulstillet.';
$L['GROUP_STAY']        = 'Gruppen forbliver :)';
$L['GROUP_YES']         = 'Ja, jeg er sikker!';
$L['GROUP_NO']          = 'Nej, annuller!';
$L['EDIT_ADD_USER']     = 'Tilføj Bruger :';
$L['EDIT_GROUP_LEVEL']  = 'Gruppeniveau :';
$L['EDIT_GROUP_NAME']   = 'Gruppenavn :';
$L['GROUP_LEVEL']       = 'Gruppeniveau';
$L['GROUP_NAME']        = 'Gruppenavn';
$L['LEVEL_INFO']        = 'Indtast et tal mellem 2 - 256';
$L['NEW_GROUP_NAME']    = 'Nyt Gruppenavn :';
$L['NUMBER_MEMBERS']    = '# Antal Medlemmer';
$L['USER_GROUPS_INFO']  = 'Opret, se og rediger brugergrupper. Tildel brugere til brugergrupper.';
$L['SOFT_GROUP_ASGMNT'] = 'Software Gruppe Tildeling';

/* **********************************
 * 4.4 - SYSTEM
 ************************************/
/* **********************************
 * 4.4.1 - WEB CONSOLE
 ************************************/
$L['WEB_CONSOLE_INFO'] = 'Få adgang til webkonsollen.';

/* **********************************
 * 4.4.2 - API CONTROL
 ************************************/
$L['ACTIVATION_INFO_STATS']             = 'Aktiveringsinformationsstatistik';
$L['QB_CONTROL_API']                    = 'QB Control API';
$L['QB_CONTROL_API_NOTICE']             = 'API kontrolnøgler er opdelt i to komponenter som vist nedenfor.<br/>Eksempler på brug er blevet mærket for at illustrere et specifikt kommandoniveau af tilladelser, der er nødvendige for at udføre dens udpegede opgave. Biblioteket med API-brug vil fortsætte med at modtage opdateringer, efterhånden som yderligere endepunkter og funktioner implementeres.<br/><br/><table><tbody><tr><td style="width:15px;vertical-align:middle;"><span class="badge badge-pills badge-primary">&nbsp;</span></td><td>Nøglen <em>læsetilladelser</em> har kun mulighed for at skrabe data. Denne nøgle kan ikke signalere driftsopgaver til QuickBox-serveren. Medmindre du forsøger at fjernstyre din installation, er denne nøgle alt, der skal til.</td></tr><tr><td style="width:15px;vertical-align:middle;"><span class= "badge badge-pills badge-success">&nbsp;</span></td><td>Nøglen til <em>skrivetilladelser</em> har mulighed for at udføre yderligere opgaver, såsom at opdatere QuickBox-installation, styring af hoved-API-aktiveringen og mere. Denne nøgle vil også fungere for læsetilladelser og skal betragtes som den højest privilegerede nøgle. Nyttigt til fjernudførelse af grundlæggende administrationsopgaver til din server.</td></tr></tbody></table><br/>Husk at behandle dine API-nøgler, som du ville gøre med adgangskoder, del dem aldrig.<br/>Du kan til enhver tid genskabe en ny tilfældig kontrolnøgle ved at trykke på <i data-feather="refresh-cw" style="width:14px;"></i> knappen nedenfor.';
$L['CLOSE_ACKNOWLEDGE']                 = 'Bekræft og luk';
$L['READ_PERM_KEY']                     = 'Læsetilladelsesnøgle';
$L['REGENERATE_READ_KEY']               = 'Generer ny læsetilladelsesnøgle';
$L['WRITE_PERM_KEY']                    = 'Skrivetilladelsesnøgle';
$L['REGENERATE_WRITE_KEY']              = 'Generer ny skrivetilladelsesnøgle';
$L['API_SPEC_USAGE']                    = 'API-specifik brug';
$L['DISPLAY_CURRENT_API_STAT']          = 'Vis nuværende API-status';
$L['EXAMPLE_CODE']                      = 'kode:';
$L['EXAMPLE_OUTPUT']                    = 'output:';
$L['ACTIVATE_QUICKBOX_API']             = 'Aktiver QuickBox API nøgle';
$L['DEACTIVATE_QUICKBOX_API']           = 'Deaktiver QuickBox API nøgle';
$L['VERSION_SPEC_USAGE']                = 'Versionsspecifik brug';
$L['DISPLAY_CURRENT_VERSION']           = 'Vis den aktuelle QuickBox-versionsstatus';
$L['UPDATE_QUICKBOX_VERSION']           = 'Opdater QuickBox-version';
$L['UPDATE_ALERT_NOTICE']               = 'Hvis din instans allerede er opdateret, vil du se følgende output';
$L['RUN_FIX_VERSION']                   = 'Kør versionsfix';
$L['USER_SPEC_USAGE']                   = 'Brugerspecifik brug';
$L['DISPLAY_ALL_USER_INFO']             = 'Vis information for alle brugere';
$L['DISPLAY_SINGLE_USER_INFO']          = 'Vis information for specificeret bruger';
$L['DISPLAY_USER_SOFTWARE']             = 'Vis software installeret i øjeblikket af specificeret bruger';
$L['CREATE_SPECIFIED_USER']             = 'Opret specificeret bruger';
$L['CREATE_SPECIFIED_USER_INFO_NOTICE'] = 'Hvis du gerne vil iscenesætte en bruger med deres eksisterende e-mail og indstille en kvote. Bemærk, at både e-mail og kvote er rent valgfrit. Hvis der ikke indtastes nogen kvote, vil den bruge standarden fra dit konfigurerede beløb <a href="/registration.php" rel="noopener nofollow" target="_blank">her</a>.';
$L['DELETE_SPECIFIED_USER']             = 'Slet specificeret bruger';
$L['BAN_SPECIFIED_USER']                = 'Forbyd angivet bruger';
$L['UNBAN_SPECIFIED_USER']              = 'Ophæv udelukkelse af angivet bruger';
$L['SOFTWARE_SPEC_USAGE']               = 'Softwarespecifik brug';
$L['DISPLAY_ALL_SOFTWARE']              = 'Vis alle softwareprogrammer, der er tilgængelige for installation';
$L['DISPLAY_SINGLE_SOFTWARE']           = 'Vis information for specificeret software';
$L['API_SOFTWARE_NOTICE']               = 'For at finde vejledning om, hvordan softwarenavne (appnavne) er struktureret, henvises til \'Software\'-afsnittet i din brugervejledning. Du kan få adgang til den ved at klikke <a href="/help.php#software">her</a>.';
$L['API_SOFTWARE_WARNING']              = 'Vær opmærksom på, at for visse applikationer er navnekonventionerne muligvis ikke officielt udpeget og kan i stedet være en del af et udvidet sæt af muligheder.<br/><br/>
Her er et eksempel ved brug af Bazarr4K:<br>
<pre class="mb-2"><code class="language-json">"bazarr4k": {
    "software_title": "Bazarr4K",
    "qb_package_name": "bazarr",
    "qb_options": "-o 4k",
    ...</code></pre>
Bemærk venligst følgende vigtige oplysninger vedrørende QuickBox\'s software API-output:
<ul>
<li>Når du får adgang til softwarepakker via QuickBox, vil du konsekvent finde attributten \'qb_pakkenavn\'. Denne attribut er markeret og brugt af <code>qb</code> navngivningskonventionen.</li>
<li>Derudover inkluderer hvert API-output indgangen \'qb_options\', som giver værdifulde muligheder for tilpasning. En af disse muligheder er \'4K\' installationsflaget, betegnet som <code>-o 4k</code>.</li>
</ul><br/>
For eksempel, hvis du har til hensigt at installere \'Bazarr\' med 4K-understøttelse, skal du bruge følgende kommando:<br/>
<pre class="mb-0"><code class="language-bash">qb install bazarr -o 4k -u [USERNAME]</code></pre><br/>
Det er vigtigt at bemærke, at du ikke bør bruge \'bazarr4k\' som pakkenavn, da \'qb_options\'-indgangen er designet til at håndtere sådanne tilpasninger effektivt.';
$L['SOFTWARE_SERVICE_STATUS']            = 'Vis status for specificeret software og bruger';
$L['SOFT_STATUS_ACTIVE_NOTICE']          = 'Hvis tjenesten er aktiv.';
$L['SOFT_STATUS_INACTIVE_NOTICE']        = 'Hvis tjenesten er inaktiv.';
$L['SOFT_STATUS_NOT_ISNTALLED_NOTICE']   = 'Hvis programmet ikke er installeret for den angivne bruger.';
$L['SOFTWARE_SERVICE_CONTROL']           = 'Signal specificeret handling for specificeret software og bruger';
$L['SOFT_CONTROL_ACTION_RESTART_NOTICE'] = 'Hvor action=restart...';
$L['SOFT_CONTROL_ACTION_START_NOTICE']   = 'Hvor action=start...';
$L['SOFT_CONTROL_ACTION_STOP_NOTICE']    = 'Hvor action=stop...';

/* **********************************
 * 4.4.3 - SSL CONTROL
 ************************************/
$L['LETSENCRYPT_DOMAIN']         = 'Let\'s Encrypt domænet';
$L['SSL_CONTROL']                = 'SSL kontrol';
$L['ABOUT_SSL_CONTROL']          = 'Denne funktion gør det muligt for dig nemt at generere SSL-certifikater til de understøttede programmer, du har installeret. Ved at vælge "Ja" og indtaste dit domæne, vil du problemfrit opsætte Nginx reverse proxy sammen med SSL-certifikatet.';
$L['STAGE_DASHBOARD_SSL']        = 'Stage SSL for Dashboardet?';
$L['DASHBOARD_SSL_TOOLTIP']      = 'For at sikre dit QuickBox Dashboard med et SSL-certifikat skal du blot vælge \'Ja\'. Denne handling vil ikke kun konfigurere SSL-certifikatet, men også etablere de nødvendige NGinx-indstillinger og links, hvilket letter sikker adgang til dit dashboard via dit domæne.';
$L['STAGE_OWNED_DOMAIN_SSL']     = 'Stage SSL for et ejet domæne?';
$L['NON_DASHBOARD_SSL_TOOLTIP']  = 'Vælg venligst \'Ja\' for at oprette et SSL-certifikat for et domæne, du foretrækker. Denne mulighed er designet til oprettelse af yderligere SSL-certifikater. Sørg for, at de relevante DNS-poster for domænet er korrekt konfigureret, da denne proces udelukkende genererer de anmodede SSL-certifikater.';
$L['STAGE_EMBY_SSL']             = 'Stage SSL for Emby?';
$L['EMBY_SSL_TOOLTIP']           = 'For at sikre din Emby-installation med et SSL-certifikat skal du blot vælge \'Ja\'. Denne handling vil ikke kun konfigurere SSL-certifikatet, men også etablere de nødvendige NGinx-indstillinger og links, hvilket letter sikker adgang til din Emby-installation via dit domæne.';
$L['STAGE_JELLYFIN_SSL']         = 'Stage SSL for Jellyfin?';
$L['JELLYFIN_SSL_TOOLTIP']       = 'For at sikre din Jellyfin-installation med et SSL-certifikat skal du blot vælge \'Ja\'. Denne handling vil ikke kun konfigurere SSL-certifikatet, men også etablere de nødvendige NGinx-indstillinger og links, hvilket letter sikker adgang til din Jellyfin-installation via dit domæne.';
$L['STAGE_JELLYSEERR_SSL']       = 'Stage SSL for Jellyseerr?';
$L['JELLYSEERR_SSL_TOOLTIP']     = 'For at sikre din Jellyseerr-installation med et SSL-certifikat skal du blot vælge \'Ja\'. Denne handling vil ikke kun konfigurere SSL-certifikatet, men også etablere de nødvendige NGinx-indstillinger og links, hvilket letter sikker adgang til din Jellyseerr-installation via dit domæne.';
$L['STAGE_KOMGA_SSL']            = 'Stage SSL for Komga?';
$L['KOMGA_SSL_TOOLTIP']          = 'For at sikre din Komga-installation med et SSL-certifikat skal du blot vælge \'Ja\'. Denne handling vil ikke kun konfigurere SSL-certifikatet, men også etablere de nødvendige NGinx-indstillinger og links, hvilket letter sikker adgang til din Komga-installation via dit domæne.';
$L['STAGE_OVERSEERR_SSL']        = 'Stage SSL for Overseerr?';
$L['OVERSEERR_SSL_TOOLTIP']      = 'For at sikre din Overseerr-installation med et SSL-certifikat skal du blot vælge \'Ja\'. Denne handling vil ikke kun konfigurere SSL-certifikatet, men også etablere de nødvendige NGinx-indstillinger og links, hvilket letter sikker adgang til din Overseerr-installation via dit domæne.';
$L['STAGE_PLEX_SSL']             = 'Stage SSL for Plex?';
$L['PLEX_SSL_TOOLTIP']           = 'For at sikre din Plex-installation med et SSL-certifikat skal du blot vælge \'Ja\'. Denne handling vil ikke kun konfigurere SSL-certifikatet, men også etablere de nødvendige NGinx-indstillinger og links, hvilket letter sikker adgang til din Plex-installation via dit domæne.';
$L['DOMAIN']                     = 'Domæne';
$L['SSL_ALREADY_INSTALLED']      = 'Vær opmærksom på, at der allerede er et SSL-certifikat installeret for denne mulighed. Geninstallation af certifikatet ved at indtaste et nyt domæne nedenfor vil nulstille den aktuelle NGinx omvendte konfiguration, fjerne det tidligere certifikat og nulstille den aktuelt indstillede linkadgang.';
$L['SSL_SUBMIT']                 = 'Installer SSL-certifikat';
$L['SSL_STATUS_MONITOR_TOOLTIP'] = 'Overvåg status for dine eksisterende SSL-certifikater med mulighed for at udføre to nøglehandlinger: sletning eller gennemtving fornyelse. For certifikater forbundet med understøttede applikationer som Emby, Jellyfin, Jellyseerr, Komga, Overseerr og Plex vil sletning af et certifikat også udløse fjernelse og omkonfiguration af Nginx omvendt proxy for det tilsvarende domæne.<br><br>Du kan problemfrit slet et certifikat ved hjælp af mulighederne nedenfor og vælg efterfølgende din ønskede applikation ovenfor for at starte installationen af et nyt underdomæne og certifikat. Denne strømlinede proces sikrer den største fleksibilitet og kontrol over dit SSL-certifikathåndtering.';
$L['CERTS_STORED_AT']            = 'Overvågede certifikater er gemt på';
$L['CERT_EXPIRES']               = 'Udløber:';
$L['CERT_RENEW']                 = 'Forny certifikat';
$L['CERT_DELETE']                = 'Slet SSL-certifikat og eventuelle yderligere konfigurationer. Denne handling er irreversibel.';
$L['CERT_DELETE_CONFIRM']        = 'Er du sikker på, at du vil slette dette certifikat?';
$L['NO_CERTS_INSTALLED']         = 'Der er ingen SSL-certifikater installeret og/eller overvåget på nuværende tidspunkt.';

/* **********************************
 * 4.4.4 - TROUBLESHOOTING
 ************************************/
$L['APP_SELECT']             = 'Vælg Software';
$L['APPLIANCE']              = 'Kommandoer';
$L['CLEAN_MEM']              = 'Ryd Fysisk Cachehukommelse';
$L['FIX']                    = 'Rette op';
$L['FIXUPDATE']              = 'Fiks dpkg frontend locks';
$L['LOG_GEN']                = 'Log-generator';
$L['NGINX']                  = 'Nginx';
$L['PHP']                    = 'Php-fpm';
$L['PHP7_2']                 = 'Php72-fpm';
$L['QSUPPORT']               = 'QuickBox Support';
$L['QSUPPORTU']              = 'QuickBox Support Adgang';
$L['SERVER_TROUBLESHOOTING'] = 'Server Fejlfinding';
$L['SYSTEM_INFO']            = 'System-Info';
$L['SYSTEM_LOG_FILES']       = 'System-Log';
$L['TROUBLESHOOTING']        = 'Fejlfinding';
$L['WEB_SERVER']             = 'Webserver';

/* **********************************
 * 4.4.5 - SYSTEM LOGS
 ************************************/
$L['LOGS']                         = 'Logs';
$L['NO_LOGS']                      = 'Ingen logs fundet';
$L['NO_LOGS_MESSAGE']              = 'I øjeblikket er der ingen log-registreringer tilgængelige for visning. Logposter genereres, når applikationer sender deres logningsoplysninger til systemets syslog. Hvis du leder efter en bestemt log, anbefaler vi at konsultere dokumentationen fra den respektive applikation for yderligere vejledning. QuickBox bestræber sig flittigt på at centralisere forskellige applikationer og deres loggede data; det afhænger dog af de individuelle applikationer at sende deres logningsoplysninger til sysloggen.';
$$L['ACCESS_LOGS']                 = 'Adgangslogfiler';
$L['APP_LOGS']                     = 'Softwarelogfiler';
$L['USER_LOGS']                    = 'Brugerlogfiler';
$L['DATE_TIME']                    = 'Dato/tid';
$L['EVENT']                        = 'Begivenhed';
$L['LOG_MESSAGE']                  = 'Log besked';
$L['LOGS_SUMMARY']                 = 'Logoversigt';
$L['COMMAND']                      = 'Kommando';
$L['SOFTWARE']                     = 'Software';
$L['USER_ACTION_LOGS']             = 'Brugerhandlingslogs';
$L['VIEW_USER_ACTION_LOGS']        = 'Se brugerhandlingslog';
$L['ABOUT_USER_ACTION_LOGS']       = 'Logfilerne i denne sammenhæng vedrører brugerrelaterede opgaver og hændelser, der er initieret via QuickBox-grænsefladen.';
$L['SOFTWARE_ACTION_LOGS']         = 'Softwarehandlingslogs';
$L['VIEW_SOFTWARE_ACTION_LOGS']    = 'Se softwarehandlingslog';
$L['ABOUT_SOFTWARE_ACTION_LOGS']   = 'Disse logfiler er designet til at give en registrering af handlinger relateret til software, herunder installationer, fjernelser, opdateringer og andre væsentlige begivenheder.';
$L['SYSTEM_ACTION_LOGS']           = 'Systemhandlingslogs';
$L['VIEW_SYSTEM_ACTION_LOGS']      = 'Se systemhandlingslog';
$L['ABOUT_SYSTEM_ACTION_LOGS']     = 'Disse logfiler er skræddersyet til at fange aktiviteter og handlinger på systemniveau, der er initieret gennem kommandolinjeværktøjet <code>qb</code>.';
$L['UI_ACTION_LOGS']               = 'UI Action Logs';
$L['VIEW_UI_ACTION_LOGS']          = 'Se UI-handlingslog';
$L['ABOUT_UI_ACTION_LOGS']         = 'Disse logfiler er afledt af systemets syslog og tjener som en konsolideret registrering af alle kommandoer og handlinger, der er startet gennem QuickBox Dashboards brugergrænseflade.';
$L['USER_APPLICATION_LOGS']        = 'Brugerapplikationslogfiler';
$L['SYSTEM_LOG_SUMMARY']           = 'Systemlogoversigt';
$L['SYSTEM_LOG_SUMMARY_TOOLTIP']   = 'Denne oversigt og alle yderligere logfiler genereres under tre betingelser:<br><ol><li><strong>Cron:</strong> Logfiler opdateres automatisk med udførelse af en cron-opgave hvert 15. minut. Dette starter <code>qb_log_miner</code>-binæren, der samler logposter fra systemets syslog.</li><li><strong>Manuel generering:</strong> Du kan generere den fra \'System > Fejlfinding > Systemlog\' sektion ved at klikke på knappen \'(Generer)\'.</li><li><strong>Kommandolinje:</strong> Den kan også genereres ved at køre kommandoen <code>qb generate log</code>.</li></ol>Du kan få adgang til og downloade denne oversigtslogfil på to måder:<br><ol><li><strong>Webgrænseflade:</strong> Gå til \'System > Fejlfinding > Systemlog (Download)\' i brugergrænsefladen.</li><li><strong>Serverkatalog:</strong> Find den på serveren på: \'/srv/quickbox/logs/system_log\'.</li></ol>';
$L['CLEAR_LOG']                    = 'Ryd log';
$L['CLEAR_LOG_CONFIRM']            = 'Er du sikker på, at du vil slette disse logfiler. Dette kan ikke fortrydes?';
$L['DELETED_ALL_APP_LOGS']         = 'Slettede alle softwarelogfiler';
$L['DELETED_ALL_APPLICATION_LOGS'] = 'Slet alle applikationslogfiler';
$L['DELETED_ALL_SUMMARY_LOGS']     = 'Slettede alle oversigtslogfiler';
$L['DELETED_ALL_SYSTEM_LOGS']      = 'Slettede alle systemlogfiler';
$L['DELETED_ALL_UI_LOGS']          = 'Slettede alle UI-logfiler';
$L['DELETED_ALL_USER_LOGS']        = 'Slettede alle brugerlogfiler';
$L['DELETED_APPLICATION_LOGS']     = 'Slettede applikationslogfiler';
$L['DELETED_SUMMARY_LOGS']         = 'Slettede oversigtslogfiler';
$L['DELETED_USER']                 = 'Slettet bruger';
$L['DELETE_USER_LOGS']             = 'Slet brugerlogfiler';
$L['QUICKBOX_VERSION_CHECK']       = 'Søg efter QuickBox-opdateringer';
$L['QUOTA_CHECK']                  = 'Kvote sæt kontrol';
$L['SOFTWARE_VERSION_CHECK']       = 'Søg efter installerede softwareopdateringer';
$L['SCHEDULED_TASK']               = 'Planlagt opgave';

/* **********************************
 * 4.4.6 - HELP MANUAL
 ************************************/
$L['QB_HELP'] = 'Hjælpmanual';

/* **********************************
 * description
 ************************************/
$L['DESCRIPTION_CONTENT'] = '<p>Velkommen til den omfattende grafiske visning af <code>qb</code>-manpagen, designet til at tilbyde dig en oversat, forenklet og effektiv tilgang til at få adgang til diverse informationer om QuickBox. Denne brugervenlige grænseflade har til formål at give dybdegående indsigt i QuickBox funktion, et kraftfuldt og alsidigt værktøj til ubesværet administration af din server.</p>
<p>Inde i dette grafiske display finder du en detaljeret liste over tilgængelige applikationer klar til problemfri installation, hvilket giver dig mulighed for at tilpasse din serveropsætning efter dine specifikke behov. Desuden præsenterer denne ressource et væld af andre vigtige kommandoer til optimal udnyttelse i <code>qb</code> CLI-miljøet, hvilket gør det muligt for dig at navigere gennem dine serveropgaver effektivt og ubesværet.</p>
<p>Uanset om du er ny til QuickBox eller en erfaren bruger, tjener denne grafiske visning af <code>qb</code>-manpagen som din ultimative reference til at udnytte QuickBox fulde potentiale og frigøre den sande kraft i din serveradministration. Udforsk de forskellige funktioner, strømlin din serverdrift, og maksimer din produktivitet ved hjælp af denne intuitive og informative guide. Lad os dykke ned og gøre din QuickBox-oplevelse endnu mere givende!</p>';
$L['API_INFO_DIRECT'] = '<p style="font-weight:600;">For mere information og reference om den indlejrede QuickBox API, <a href="/api-control.php" rel="noopenner nofollow " class="link" style="color:var(--infoColor);">se denne side</a>.</p>';

/* **********************************
 * options
 ************************************/
$L['OPTIONS_HEADER']          = 'Valgmuligheder';
$L['OPTIONS_CONTENT_HELP']    = 'Viser denne hjælpemanual i CLI-manpage-format';
$L['OPTIONS_CONTENT_VERBOSE'] = 'Aktiverer detaljeret tilstand for fejlretning';

/* **********************************
 * software
 ************************************/
$L['SOFTWARE_HEADER']                       = 'Software';
$L['SOFTWARE_INFO_CONTENT']                 = '<p>Det følgende er en liste over alle tilgængelige applikationer til installation, der leveres gennem QuickBox-builden.<br/>Softwarenavne er præsenteret som set af <code>qb [install|reinstall|update|remove|help] [software_name]</code></p>';
$L['ADMIN_INSTALLED_SOFTWARE_HEADER']       = 'Administrator installeret software';
$L['ADMIN_INSTALLED_SOFTWARE_INFO_CONTENT'] = '<p>Følgende applikationer skal installeres af systemadministratoren.<br/>Se tilgængelighedskolonnen nedenfor for yderligere detaljer.</p>';
$L['MULTI_USER_SOFTWARE_HEADER']            = 'Multibrugersoftware';
$L['MULTI_USER_SOFTWARE_INFO_CONTENT']      = '<p>Følgende applikationer kan installeres af flere brugere uden behov for administratorhjælp.<br/>Al applikationstilgængelighed bestemmes af systemadministratoren og tildeles yderligere brugere inden for <a href="/usergroups.php" rel="noopener nofollow" class="link">oprettede grupper</a>.</p>';
$L['SINGLE_USER_SOFTWARE_HEADER']           = 'Enkeltbrugersoftware';
$L['SINGLE_USER_SOFTWARE_INFO_CONTENT']     = '<p>Følgende applikationer kan kun installeres af én tildelt bruger ad gangen uden behov for admin assistance.<br/>Al applikationstilgængelighed bestemmes af systemadministratoren og tildeles yderligere brugere inden for <a href="/usergroups.php" rel="noopener nofollow" class="link">oprettede grupper</a>.</p>';
$L['SOFTWARE_MANAGEMENT']                   = 'Softwarestyring';
$L['SOFTWARE_MANAGEMENT_CONTENT']           = 'Parametre for installation, geninstallation, opdatering eller fjernelse af udpeget software med yderligere muligheder (hvis tilstede/ønsket) til en tildelt bruger';
$L['SOFTWARE_MANAGEMENT_WARNING_CONTENT']   = '<p>Husk at forskellige applikationer har forskellige muligheder/krav. De fleste kræver brug af brugernavnflaget (<code>-u</code>), hvorimod applikationer som rtorrent ikke vil. For at kontrollere alle tilgængelige muligheder for en specifik software, brug <code class="language-bash">qb-hjælp [software_name]</code>. Applikationsnavngivning i QuickBox til softwarenavneskemaet kan ses i <a href="#software" class="link">softwarelistediagrammet</a> ovenfor.</p>';
$L['SEE_ALSO_HEADER']                       = 'Se også';
$L['SEE_ALSO_CONTENT']                      = 'Vis nyttig kommandobrug for udpeget software';

/* **********************************
 * software options table
 ************************************/
$L['SOFTWARE_NAME']     = 'Softwarenavn';
$L['SOFTWARE_TITLE']    = 'Softwaretitel';
$L['USABILITY']         = 'Anvendelighed';
$L['CAN_ROLLBACK']      = 'Tilbagestilling';
$L['INFO']              = 'Info';
$L['ADMIN_BADGE']       = '<span class="badge badge-pills badge-table-menu" style="padding:2px 6px;line-height:0.7rem;background-color:var(--alertLightDangerBorder);color:#fff;font-size:0.5rem;">kun admin</span>';
$L['GLOBAL_BADGE']      = '<span class="badge badge-pills badge-table-menu" style="padding:2px 6px;line-height:0.7rem;background-color:var(--alertLightWarningBorder);color:#fff;font-size:0.5rem;">global</span>';
$L['MULTI_USER_BADGE']  = '<span class="badge badge-pills badge-table-menu" style="padding:2px 6px;line-height:0.7rem;background-color:var(--alertLightInfoBorder);color:#fff;font-size:0.5rem;">flerbruger</span>';
$L['SINGLE_USER_BADGE'] = '<span class="badge badge-pills badge-table-menu" style="padding:2px 6px;line-height:0.7rem;background-color:var(--alertLightPrimaryBorder);color:#fff;font-size:0.5rem;">enkeltbruger</span>';
$L['GLOBAL_INFO']       = 'kræver admininstallation og installationer for alle brugere på systemet.';
$L['MULTI_USER_INFO']   = 'kræver admin installation og kan installeres for enhver tildelt bruger. flere brugere er understøttet.';
$L['SINGLE_USER_INFO']  = 'enkelt bruger, kun admin. kræver admin installation og installeres og betjenes af admin bruger.';

/* **********************************
 * examples header
 ************************************/
$L['EXAMPLES_HEADER'] = 'Eksempler';

/* **********************************
 * user management
 ************************************/
$L['USER_MANAGEMENT_INFO_CONTENT']   = '<p><code>qb user</code>-administrationsfunktionerne i QuickBox tilbyder et alsidigt og kraftfuldt sæt værktøjer til effektivt at administrere brugere på din server. Med fokus på brugervenlighed og robust funktionalitet gør disse funktioner dig i stand til at strømline brugeradministration, forbedre sikkerheden og sikre en jævn serverdrift.</p>';
$L['CREATE_USER_CONTENT']            = 'Opretter en ny QuickBox brugerkonto';
$L['DELETE_USER_CONTENT']            = 'Sletter QuickBox brugerkonto';
$L['CHANGE_USER_PASSWORD']           = 'Skift brugeradgangskode';
$L['CHANGE_USER_PASSWORD_CONTENT']   = 'Ændre adgangskode for tildelt brugerkonto';
$L['BAN_USER_CONTENT']               = 'Forbyder tildelt brugerkonto, forhindrer login og stopper installerede tjenester og deres funktioner.';
$L['BAN_USER_PRIMARY_CONTENT']       = '<p><em>Dette <strong>sletter ikke</strong> brugerdata</em>, deaktiverer kun kørende tjenester og blokerer adgang.</p>';
$L['UNBAN_USER_CONTENT']             = 'Ophæver tildelt brugerkonto, hvilket tillader login og start af installerede tjenester og deres funktioner';
$L['PROMOTE_USER_TO_ADMIN']          = 'Forfrem bruger til administrator';
$L['PROMOTE_USER_TO_ADMIN_CONTENT']  = 'Forfremmer tildelt bruger til admin niveau';
$L['DEMOTE_USER_FROM_ADMIN']         = 'Degrader bruger fra Admin';
$L['DEMOTE_USER_FROM_ADMIN_CONTENT'] = 'Degraderer tildelt bruger til standardbrugerniveau';
$L['SET_USER_QUOTA']                 = 'Sæt brugerkvote';
$L['SHOW_USER_QUOTA']                = 'Vis brugerkvote';
$L['SET_USER_SHELL']                 = 'Indstil brugerskal';
$L['SET_USER_SHELL_CONTENT']         = 'Indstiller shell-miljøet for tildelt bruger';
$L['SET_USER_SHELL_INFO_CONTENT']    = '<p><strong><code>sudo</code></strong><br>fuldfør administratorrettigheder til servermiljøet (stor kraft... osv.)<br><strong><code>full</code></strong><br>fuld adgang til servermiljøet, med undtagelse af højere privilegerede områder; dvs: ingen sudo og kan ikke få adgang til rodmapper.<br><strong><code>limited</code></strong><br>det begrænsede skalmiljø. meget lidt adgang til kommandoer og fængslet til deres egen brugerhjemmemappe.</p><hr/><p>Shell-miljøer er indstillet af systemadministratoren og kan ses på brugerens redigeringsside, der er placeret på <a href="/useradmin.php" rel="noopener nofollow" class="link">Brugeradminside</a>.<br/>Hvis du gerne vil tilføje et nyt shell-miljø, kan du gøre det ved at redigere <code>/etc/shells</code> fil og tilføjer stien til det shellmiljø, du gerne vil tilføje.</p>';
$L['SET_USER_SHELL_DANGER_CONTENT']  = '<p><strong>Forsigtig:</strong> Vær opmærksom på, at ændring af shell-miljøet til noget andet end <code>/bash</code> kan føre til utilsigtet adfærd ved brug af <code>qb</code> (QuickBox), da det er blevet specifikt designet og optimeret til <code>/bash</code>-miljøet. Kort sagt er <code>qb</code> afhængig af specifikke funktioner og funktionaliteter leveret af Bash-skallen.<br><br>For at undgå potentielle problemer, er det tilrådeligt at holde sig til <code>/bash</code > miljø ved brug af <code>qb</code>. Hvis du stadig ønsker at bruge en anden shell, skal du konsultere dokumentationen til denne shell for at gennemgå eventuelle yderligere ændringer af stier, konfigurationer eller andre indstillinger, der muligvis skal opdateres for at sikre kompatibilitet med <code>qb</code>.</p>';
$L['USER_RCLONE_COMPANION_COMMANDS'] = 'Rclone ledsagende kommandoer';

/* **********************************
 * clean functions
 ************************************/
$L['CLEAN_FUNCTIONS']                  = 'Rengørende funktioner';
$L['CLEAN_FUNCTIONS_INFO_CONTENT']     = '<p><code>qb clean</code>-funktionerne i QuickBox tilbyder en praktisk og effektiv måde at vedligeholde din servers renhed og optimere dens ydeevne. Disse funktioner er designet med enkelhed og effektivitet i tankerne og giver dig mulighed for at frigøre værdifuld hukommelse, fjerne unødvendigt rod og sikre en jævn og strømlinet serverdrift.</p>';
$L['CLEAN_MEMORY']                     = 'Rens hukommelse';
$L['CLEAN_MEMORY_CONTENT']             = 'Renser QuickBox hukommelsescaches';
$L['CLEAN_DASHBOARD_LOGS']             = 'Rengør dashboard-logfiler';
$L['CLEAN_DASHBOARD_LOGS_CONTENT']     = 'Renser QuickBox dashboard logs for den udpegede bruger';
$L['CLEAN_QB_DASHBOARD_LOGS']          = 'Renser QB Dashboard logfiler';
$L['CLEAN_QB_DASHBOARD_LOGS_CONTENT']  = 'Denne kommando er designet til at rydde den aktuelle UI Actions log, der er sendt fra syslog og nulstille UI Nginx fejlloggen til dens oprindelige tilstand';
$L['CLEAN_SYSTEM_LOGS']                = 'Fjern gamle systemlogfiler';
$L['CLEAN_SYSTEM_LOGS_CONTENT']        = 'Denne kommando er designet til at slette logfiler og komprimerede arkiver i <code>/var/log</code> biblioteket, som har overskredet den tildelte opbevaringsperiode. Opbevaringsperioden er som standard sat til 7 dage (hvis der ikke er indtastet en valgfri værdi).';
$L['CLEAN_RCLONE_UPLOAD_LOGS']         = 'Rens Rclone upload logs';
$L['CLEAN_RCLONE_UPLOAD_LOGS_CONTENT'] = 'Renser QuickBox rclone upload logs for den udpegede bruger';
$L['CLEAN_LOCKS']                      = 'Rengør låse';
$L['CLEAN_LOCKS_CONTENT']              = 'Renser QuickBox-software og apt-dpkg-låse, der kan forhindre QuickBox i at installere ny software';

/* **********************************
 * fix functions
 ************************************/
$L['FIX_FUNCTIONS']              = 'Ret funktioner';
$L['FIX_FUNCTIONS_INFO_CONTENT'] = '<p><code>qb fix</code>-funktionerne i QuickBox giver et kraftfuldt og brugervenligt værktøjssæt til at løse almindelige problemer og udføre systemreparationer uden besvær. Med fokus på enkelhed og effektivitet gør disse funktioner dig i stand til at fejlfinde og løse forskellige problemer, der kan opstå på din server, hvilket sikrer en jævn og uafbrudt drift.</p>';
$L['FIX_HOME']                   = 'Ret Home';
$L['FIX_HOME_CONTENT']           = 'Ret udpegede brugeres hjemmemappetilladelser';
$L['FIX_PHP']                    = 'Ret PHP';
$L['FIX_PHP_CONTENT']            = 'Ret PHP-konfiguration og installer manglende udvidelser. Dette vil også opdatere PHP-pakker til den nyeste version';
$L['FIX_PYTHON']                 = 'Ret Python';
$L['FIX_PYTHON_CONTENT']         = 'Ret Python-konfiguration og installer manglende udvidelser. Yderligere trin python3.9, hvis det ikke i øjeblikket er tilgængeligt på systemet til standardbrug på applikationsbuilds, der kræver python';
$L['FIX_VERSION']                = 'Ret version';
$L['FIX_VERSION_CONTENT']        = 'Ret QuickBox-installationen ved at geninstallere den seneste tilgængelige version';

/* **********************************
 * generate functions
 ************************************/
$L['GENERATE_FUNCTIONS']                   = 'Generer funktioner';
$L['GENERATE_FUNCTIONS_INFO_CONTENT']      = '<p>Funktionerne <code>qb generate</code> i QuickBox tilbyder en praktisk og effektiv måde at skabe væsentlige elementer, der forbedrer serverstyring og overvågning. I øjeblikket understøtter kommandoen qb generering funktionen qb generer logfiler, hvilket giver brugerne mulighed for nemt at generere en forhåndsvisning af serverstatistik, api-aktivering og mount-information.<br/>I takt med at qb-genereringsfunktionerne udvikler sig, vil de sandsynligvis tilbyde et ekspanderende array funktioner til at forbedre serverstyringen yderligere.</p>';
$L['GENERATE_SYSTEM_LOGS']                 = 'Generer systemlogfiler';
$L['GENERATE_SYSTEM_LOGS_CONTENT']         = 'Genererer systemlogfiler for den aktuelle QuickBox installation';
$L['GENERATE_SYSTEM_LOGS_WARNING_CONTENT'] = '<p>Fra og med version <em>3.0.0.<strong>36+</strong></em> har <code>qb generate log</code> udviklet sig til et mere dybtgående værktøj til logaggregation og -organisering. Det sigter mod at forenkle loghentning ved at komplementere en applikations indbyggede logfiler ved at opsummere og centralisere kritiske logdata, hvilket gør fejlfinding meget mere effektiv.</p><p>Denne kommando og dens funktionalitet er et fortsat igangværende arbejde.</p>';
$L['GENERATE_SYSTEM_LOGS_SUCCESS_CONTENT'] = '<p>Du kan få adgang til og downloade denne oversigtslogfil på tre måder:<br><ol><li><strong>Generer/download:</strong> Gå til \'System > <a href="/troubleshooting.php" class="link">Fejlfinding</a> > Systemlog\' i brugergrænsefladen. Her kan du generere og/eller downloade systemlogoversigten produceret af generér log-kommandoen.</li><li><strong>Se logfiler:</strong> Gå til \'System > <a href="/logs.php" class="link">Systemlogfiler</a>\'. Her kan du finde yderligere logfiler og oplysninger indsamlet af generér log-kommandoen.</li><li><strong>Serverkatalog:</strong> Find det på serveren på: \'/srv/quickbox/logs/system_log\'.</li></ol></p>';

/* **********************************
 * manage functions
 ************************************/
$L['MANAGE_FUNCTIONS']                                  = 'Administrer funktioner';
$L['MANAGE_FUNCTIONS_INFO_CONTENT']                     = '<p><code>qb manage</code>-funktionerne i QuickBox giver et kraftfuldt og omfattende sæt værktøjer til effektivt at administrere forskellige aspekter af din server. Disse funktioner er designet med brugervenlighed i tankerne og giver dig mulighed for ubesværet at kontrollere kritiske elementer i dit QuickBox-drevne miljø.<br/>Uanset om det er at udskifte sprogindstillinger, kontrollere status for din primære API-aktivering, administrere datadistribution eller qb-styringsfunktionerne sikrer dataintegritet gennem sikkerhedskopier og rollbacks, og tilbyder en omfattende løsning for både serveradministratorer og entusiaster.</p>';
$L['MANAGE_API_KEY']                                    = 'Administrer API-nøgle';
$L['MANAGE_API_KEY_CONTENT']                            = 'Administrer QuickBox API-nøgler og angiv yderligere information og muligheder';
$L['ADD_API_KEY']                                       = 'Tilføj API-nøgle';
$L['ADD_API_KEY_CONTENT']                               = 'Tilføj/aktiver API-nøgle';
$L['REMOVE_API_KEY']                                    = 'Fjern API-nøgle';
$L['REMOVE_API_KEY_CONTENT']                            = 'Fjern/Deaktiver API-nøgle';
$L['MANAGE_DASHBOARD_ACCESS_URL']                       = 'Administrer Dashboard adgang url';
$L['MANAGE_DASHBOARD_ACCESS_URL_CONTENT']               = 'Denne kommando indstiller serverens webrod for dashboard-adgang til enten det udtrykte domæne eller IP-adresse';
$L['SET_SERVER_LANG']                                   = 'Indstil serversprog';
$L['SET_SERVER_LANG_CONTENT']                           = 'Denne kommando vil sætte det anmodede sprog som standardsprog for serveren';
$L['MANAGE_PUBLIC_TRACKERS']                            = 'Administrer offentlige sporere';
$L['MANAGE_PUBLIC_TRACKERS_CONTENT']                    = 'Denne kommando vil aktivere eller deaktivere offentlige trackere for alle brugere';
$L['EX_PUB_TRACKERS_ALLOW']                             = 'eksempel til at tillade offentlige trackere:';
$L['EX_PUB_TRACKERS_DISALLOW']                          = 'eksempel på at forbyde offentlige trackers:';
$L['BACKUP_APPLICATIONS']                               = 'Sikkerhedskopieringsprogrammer';
$L['PARTIAL_CONFIG_ONLY_BACKUP']                        = 'Delvis backup <span class="badge badge-pills badge-table-menu" style="padding:2px 6px;line-height:0.7rem;background-color:var(--indigo);color:#fff;font-size:0.5rem;">kun config</span>';
$L['PARTIAL_CONFIG_ONLY_BACKUP_CONTENT']                = 'Denne kommando vil sikkerhedskopiere den udpegede applikationskonfiguration for den tildelte bruger';
$L['FULL_CONFIG_AND_APP_BACKUP']                        = 'Fuld sikkerhedskopi <span class="badge badge-pills badge-table-menu" style="padding:2px 6px;line-height:0.7rem;background-color:var(--primaryColor);color:#fff;font-size:0.5rem;">config &amp; app</span>';
$L['FULL_CONFIG_AND_APP_BACKUP_CONTENT']                = 'Denne kommando vil sikkerhedskopiere den udpegede applikation for den tildelte bruger. Inkluderer applikations- og konfigurationsdata, praktisk til at rulle tilbage til tidligere installerede og sikkerhedskopierede versioner';
$L['PARTIAL_RTORRENT_ALL_USERS_BACKUP']                 = 'Delvis backup (kun rtorrent)';
$L['PARTIAL_RTORRENT_ALL_USERS_BACKUP_PRIMARY_CONTENT'] = '<p>I tilfælde af rtorrent som softwarekonfigurationen til backup, er brugernavnflaget (<code>-u</code>) ikke påkrævet.</p>';
$L['PARTIAL_RTORRENT_ALL_USERS_BACKUP_CONTENT']         = 'Denne kommando vil sikkerhedskopiere alle eksisterende rtorrent-brugere .rtorrent.rc-filer.<br>Sikkerhedskopier er gemt på:<br><code>/home/[BRUGERNAVN]/.QuickBox/software/rtorrent /backup/.rtorrent.rc_YEAR-MONTH-DAY_HOUR:MINUTE</code>';
$L['ROLLBACK_APPLICATIONS']                             = 'Tilbageføring af applikationssikkerhedskopi';
$L['ROLLBACK_APPLICATIONS_CONTENT']                     = 'Denne kommando vil rulle den udpegede applikation for den tildelte bruger tilbage til en tidligere version gemt/valgt i backup-mappen.<br>Sikkerhedskopier er gemt på:<br><code>/home/[BRUGERNAVN]/.QuickBox/software/[SOFTWARE_NAME]/backup/</code>';
$L['RESTORE_APP_BACKUP_CONFIG']                         = 'Gendan sikkerhedskopi <span class="badge badge-pills badge-table-menu" style="padding:2px 6px;line-height:0.7rem;background-color:var(--indigo);color:#fff;font-size:0.5rem;">kun config</span>';
$L['RESTORE_APP_BACKUP_CONFIG_CONTENT']                 = 'Denne kommando vil gendanne den udpegede tidligere sikkerhedskopierede applikationskonfiguration for den tildelte bruger';
$L['RESTORE_APP_DEFAULT_CONFIG']                        = 'Gendan standard <span class="badge badge-pills badge-table-menu" style="padding:2px 6px;line-height:0.7rem;background-color:var(--indigo);color:#fff;font-size:0.5rem;">kun config</span>';
$L['RESTORE_APP_DEFAULT_CONFIG_CONTENT']                = 'Denne kommando vil gendanne den angivne standard (fra installation) programkonfiguration for den tildelte bruger';

/* **********************************
 * news functions
 ************************************/
$L['NEWS_FUNCTIONS']              = 'Nyhedsfunktioner';
$L['NEWS_FUNCTIONS_INFO_CONTENT'] = '<p>Funktionen <code>qb news</code> i QuickBox leverer rettidige og relevante nyhedsopdateringer direkte til din server, hvilket sikrer, at du holder dig informeret om den seneste udvikling og ændringer i QuickBox-økosystemet . Med fokus på at holde dig opdateret, giver denne funktion væsentlig information om aktuelle og kommende udgivelser, versionsændringer og andre ting af interesse.</p>';
$L['NEWS']                        = 'Nyheder';
$L['NEWS_CONTENT']                = 'Se seneste QuickBox nyheder';

/* **********************************
 * support functions
 ************************************/
$L['SUPPORT_FUNCTIONS']              = 'Supportfunktioner';
$L['SUPPORT_FUNCTIONS_INFO_CONTENT'] = '<p><code>qb support</code>-funktionen i QuickBox tilbyder en sikker og pålidelig metode til at give supportmedarbejdere adgang til din server, når der er behov for hjælp. Med stor vægt på sikkerhed og brugerbeskyttelse bruger denne funktion kontoen <code>quickSupport</code>, hvilket sikrer, at kun autoriseret supportpersonale kan få adgang til din server.</p>';
$L['ENABLE_SUPPORT']                 = 'Aktiver support';
$L['ENABLE_SUPPORT_CONTENT']         = 'Aktiver support. Typisk tildelt den medarbejder, der er ansvarlig for supporten';
$L['DISABLE_SUPPORT']                = 'Deaktiver support';
$L['DISABLE_SUPPORT_CONTENT']        = 'Deaktiver support. Ellers vil supportkontoen automatisk slette sig selv efter 36 timer';

/* **********************************
 * update functions
 ************************************/
$L['UPDATE_FUNCTIONS']              = 'Opdateringsfunktioner';
$L['UPDATE_FUNCTIONS_INFO_CONTENT'] = '<p><code>qb update</code>-funktionen i QuickBox tilbyder dig en bekvem og fleksibel måde at administrere opdateringer til din QuickBox-installation på. Med denne funktion har du fuld kontrol over opdateringsprocessen, så du manuelt kan tjekke for opdateringer og vælge, hvornår du vil anvende dem.</p>';
$L['UPDATE_CHECK']                  = 'Opdateringstjek';
$L['UPDATE_CHECK_CONTENT']          = 'Se efter opdateringer til QuickBox';
$L['UPDATE_QUICKBOX']               = 'Opdater QuickBox';
$L['UPDATE_QUICKBOX_CONTENT']       = 'Opdater QuickBox-installationen til seneste udgivelse, hvis nogen er tilgængelig';

/* **********************************
 * bugs & reporting
 ************************************/
$L['BUGS']              = 'Bug og rapportering';
$L['BUGS_INFO_CONTENT'] = '<p>Den grafiske visning af QuickBox\'s dokumentation vil modtage regelmæssige opdateringer for at sikre, at den angivne information forbliver let tilgængelig og brugervenlig. Vores forpligtelse til at forbedre din oplevelse med QuickBox driver os til løbende at forfine og forbedre dokumentationen og holde den opdateret med de nyeste funktioner og funktioner.<br/><br/>
Med hver opdatering vil vi stræbe efter at forenkle komplekse koncepter, præcisere instruktioner og indarbejde brugerfeedback for at gøre qb-manpagen endnu mere intuitiv og effektiv. Vores mål er at give dig en problemfri forståelse af QuickBox og dens enorme muligheder, så du kan mestre qb CLI-miljøet og nemt administrere dine serveropgaver.<br/><br/>
Vi værdsætter dit input og opfordrer dig til at dele forslag eller ideer, du måtte have for at forbedre qb-manpagen yderligere. Din feedback er medvirkende til at forme denne ressource og sikre, at den forbliver en værdifuld reference for alle QuickBox-brugere. Faktisk eksisterer denne side, fordi den blev anmodet om! 🤪<br/><br/>
Rapporter eventuelle reproducerbare fejl eller forslag til <strong><a href="https://nullrefer.ir/?https://lab.quickbox.io/QuickBox/pro-v3/-/issues" rel="noopener nofollow" target="_blank">QuickBox.IO Labs Issue & Feature Tracker</a></strong></p>';

/* **********************************
 * disclaimer
 ************************************/
$L['DISCLAIMER']      = 'Ansvarsfraskrivelse';
$L['DISCLAIMER_TEXT'] = '<p>Dette script er beregnet til generel brug, og der gives ingen garanti for egnethed til en given opgave. QuickBox.IO påtager sig intet ansvar for din opsætning eller enhver skade, der er sket under brug/installation/ændring af dette script eller nogen af dets plugins. Husk QuickBox.IO eller dets personale er ansvarlige for at holde din software og/eller server opdateret; dette er et ansvar udelukkende overladt til brugeren af QuickBox Pro-softwaren.</p>';

/* **********************************
 * license
 ************************************/
$L['LICENSE']      = 'Licens';
$L['LICENSE_SET']  = 'Licenseret under BSD 3-klausul';
$L['LICENSE_TEXT'] = '<p>Copyright (c) 2018-2023, QuickBox.IO. Alle rettigheder forbeholdes.</p>
<p>Omfordeling og brug i kilde- og binære former, med eller uden ændringer, er tilladt, forudsat at følgende betingelser er opfyldt:</p>
<ul style="font-size:0.75rem"><li>Videredistribution af kildekode skal bevare ovenstående copyright-meddelelse, denne liste over betingelser og følgende ansvarsfraskrivelse.</li>
<li>Gendistribution i binær form skal gengive ovenstående copyright-meddelelse, denne liste over betingelser og følgende ansvarsfraskrivelse i dokumentationen og/eller andet materiale, der følger med distributionen.</li>
<li>Hverken navnet på indehaveren af ophavsretten eller navnene på dennes bidragydere må bruges til at støtte eller promovere produkter afledt af denne software uden specifik forudgående skriftlig tilladelse.</li></ul>
<p>DENNE SOFTWARE LEVERES AF OPHAVSRETSHEDHEDERNE OG BIDRAGENDE "SOM DEN ER" OG ENHVER UDTRYKKELIG ELLER UNDERFORSTÅET GARANTI, INKLUSIVE, MEN IKKE BEGRÆNSET TIL, DE UNDERFORSTÅEDE GARANTIER OM SALGBARHED OG EGNETHED TIL EN DELVIS EGNETHED. Under ingen omstændigheder kan copyright indehaveren eller bidragyderne være ansvarlige for direkte, indirekte, tilfældige, specielle, eksemplariske eller følgeskader (herunder, men ikke begrænset til, indkøb af erstatningsvarer eller tjenester; tab af brug, data eller overskud; ELLER VIRKSOMHEDSAFBRYDELSE), HVORDAN FORÅRSAGET OG PÅ ENHVER MÅDE OM ANSVAR, HVANDEN I KONTRAKTER, STRIKT ANSVAR ELLER STORT (HERunder uagtsomhed ELLER ANDEN MÅDE), SOM OPSTÅR PÅ NOGEN MÅDE VED ANVENDELSE AF DENNE ANVENDELSE, ELLER DETTE ELLER DETTE ELLER DETTE. ALDER. </p>';

/* **********************************
 * misc
 ************************************/
$L['EXAMPLE']  = 'eksempel:';
$L['EXAMPLES'] = 'eksempler:';

/* **********************************
 * 4.4.7 - CHANGELOG / UPDATE
 ************************************/
$L['CURRENT_VERSION']   = 'Nuværende Version';
$L['DASH_UPDATE_TITLE'] = 'QuickBox Opdateringer';
$L['QB_UPDATE']         = 'QuickBox Opdateringer';
$L['QBUPDATE']          = 'Ændringslog / Opdateringer';
$L['UPCOMING_CHANGES']  = 'Kommende Ændringer';
$L['UPDATE_AVAILABLE']  = 'Opdatering Klar';
$L['UPDATE_TO_DATE']    = 'Aktuel version';
$L['VERSION_STATUS']    = 'Versionsstatus';
$L['UPDATE_TXT']        = 'Opdater';
$L['AVAILABLE_TXT']     = 'Tilgængelig!';
$L['UPDATE_VERSION']    = 'Opdater version';
$L['UPDATE_ACTIVATE']   = 'Aktiver venligst dit Pro-abonnement for at modtage opdateringer';
$L['UPDATE_CURRENT']    = 'Du er opdateret!';
$L['CHANGELOGS']        = 'Ændringslog';

/* **********************************
 * 4.4.8 - SYSTEM DASHBOARD
 ************************************/
$L['DISK_UTIL_TIME']          = 'Diskudnyttelsestid';
$L['DISK_IO_BW']              = 'Disk I/O båndbredde';
$L['DISK_SPACE_USAGE_FOR']    = 'Diskpladsbrug for:';
$L['DISK_UTILIZATION']        = 'Udnyttelse';
$L['DISK_WRITE']              = 'Skriv';
$L['DISK_READ']               = 'Læs';
$L['SYS_DISK_READ']           = 'Disk Læs';
$L['SYS_DISK_WRITE']          = 'Disk Skriv';
$L['TOP_CPU_PROC']            = 'Top CPU-applikationsprocesser';
$L['TOP_CPUMEM_PROC']         = 'Top CPU-hukommelsesprocesser';
$L['TOP_CPUSYS_PROC']         = 'Top CPU-systemprocesser';
$L['SERVICE_MEM_USAGE']       = 'Systemd Services hukommelsesforbrug uden cache';
$L['SYS_SWAP_USAGE']          = 'Systemets Swapforbrug';
$L['SYS_MEM_USAGE']           = 'Systemets Hukommelsesforbrug';
$L['CPU_FREQ']                = 'Nuværende CPU-frekvens';
$L['CPU_LOAD']                = 'CPU-belastning';
$L['CPU_USAGE']               = 'CPU-forbrug';
$L['RAM_USAGE']               = 'RAM-forbrug';
$L['BW_UPLOAD']               = 'Båndbredde Upload';
$L['BW_DOWNLOAD']             = 'Båndbredde Download';
$L['SYS_UPLOAD']              = 'Upload';
$L['SYS_DOWNLOAD']            = 'Download';
$L['SYS_DASH_POWERED_BY']     = 'System Dashboard drevet af:';
$L['SYS_DASH_UPTIME']         = 'Systemets Oppetid';
$L['SYS_DASH_SWAP_USED']      = 'Forbrug swap';
$L['SYS_DASH_RAM_USED']       = 'Forbrug RAM';
$L['SYS_DASH_CPU']            = 'CPU';
$L['SYS_DASH_TMD']            = 'Samlet Månedlig Download';
$L['SYS_DASH_TMU']            = 'Samlet Månedlig Upload';
$L['APT_UPDATES']             = 'APT-opdateringer';
$L['APT_DEPENDENCY']          = 'Afhængighedspakke';
$L['APT_VERSION_INSTALLED']   = 'Nuværende version';
$L['APT_VERSION_AVAILABLE']   = 'Tilgængelig version';
$L['UPDATE_APT_DEPENDENCIES'] = 'Opdater apt-afhængigheder';

/* **********************************
 * 4.5 - ERROR PAGES
 ************************************/
$L['404HACK'] = 'Av! Vil du virkelig gøre mig ondt?';
$L['404PAGE'] = 'Dette er ikke den side, du leder efter.';
$L['404PRO']  = 'Køb venligst en <a href="https://nullrefer.ir/?https://quickbox.io/product/quickbox-pro-subscription/" rel="noopener nofollow" target="_blank">QuickBox API-nøgle</a> for at få adgang til denne side.';
$L['500PAGE'] = 'Det her er pinligt, det tyder på at der er noget som er gået galt.';
$L['WHOOPS']  = 'Ups!';
