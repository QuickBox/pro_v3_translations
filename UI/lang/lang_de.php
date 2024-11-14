<?php

/**
 * QuickBox Pro-Sprachdatei in deutscher Sprache
 *
 * Diese Datei wird verwendet, um das QuickBox Pro-Dashboard ins Deutsche zu übersetzen.
 * Bereit für QuickBox Pro v3.1.2: 12. November 2024
 *
 * @package    dashboard
 * @subpackage lang
 * @category   German
 * @version    3.0.1.86
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
 * @zusammenfassung Diese Datei enthält die Struktur für Navigation, Widgets, verschiedene Elemente und Seiten für QuickBox Pro.
 *
 * NAVIGATION (#1)
 * --------------
 *   - #1.1: Sprach- & Themenauswahl
 *   - #1.2: Benutzermenü
 *   - #1.3: Seitenleistenmenü
 *   - #1.4: Seitenleisten-Untermenüs
 *   - #1.5: Fußzeile
 *
 * VERSCHIEDENES (#2)
 * ------------------
 *   - #2.1: Buttons
 *   - #2.2: Popup-Textur
 *   - #2.3: NGINX-Konfigurations-Modal für Apps
 *   - #2.4: Sonstiges
 *
 * WIDGETS (#3)
 * ------------
 *   Tabellenköpfe (#3.1):
 *     - #3.1.1: App-Management-Center
 *
 *   Paketverwaltungscenter (#3.2):
 *     - #3.2.1: App-Informationen
 *     - #3.2.2: App-Deinstallation
 *     - #3.2.3: App-Neuinstallation
 *     - #3.2.4: Schalter & Tooltips
 *     - #3.2.5: Dienststeuerung
 *     - #3.2.6: Rclone-spezifische Schalter
 *
 *   Dashboard-Widgets (#3.3):
 *     - #3.3.1: Speicherstatus-Widget
 *     - #3.3.2: Systemindex v1 – Bandbreitendaten
 *     - #3.3.3: Systemindex v1 – Serverlast
 *     - #3.3.4: Systemindex v1 – Speicherstatus
 *     - #3.3.5: Serveraktivitäts-Widget
 *
 * SEITEN (#4)
 * -----------
 *   Startbildschirm-Formulare (#4.1):
 *     - #4.1.1: Anmeldung
 *     - #4.1.2: Passwort vergessen
 *     - #4.1.3: Registrierung
 *     - #4.1.4: Konto
 *       - #4.1.4.1: Zitate
 *       - #4.1.4.2: Konto-Bearbeitungs-Modal
 *     - #4.1.5: Zusammenfassung
 *
 *   Einstellungen (#4.2):
 *     - #4.2.1: Allgemeine Einstellungen
 *     - #4.2.2: E-Mail-Einstellungen
 *     - #4.2.3: Sitzungseinstellungen
 *     - #4.2.4: Benutzereinstellungen
 *     - #4.2.5: Sicherheitseinstellungen
 *
 *   Benutzerverwaltung (#4.3):
 *     - #4.3.1: Registrierungseinstellungen
 *     - #4.3.2: UserAdmin
 *       - #4.3.2.1: Admin-Benutzer bearbeiten
 *       - #4.3.2.2: Admin-Ankündigung
 *     - #4.3.3: Benutzergruppen
 *
 *   System (#4.4):
 *     - #4.4.1: Webkonsole
 *     - #4.4.2: API-Steuerung
 *     - #4.4.3: SSL-Steuerung
 *     - #4.4.4: VPN-Steuerung
 *     - #4.4.5: Fehlerbehebung
 *     - #4.4.6: Systemprotokolle
 *     - #4.4.7: Hilfshandbuch
 *       - #4.4.7.1: Beschreibung
 *       - #4.4.7.2: Optionen
 *       - #4.4.7.3: Software
 *       - #4.4.7.4: Software-Optionstabelle
 *       - #4.4.7.5: Überschrift der Beispiele
 *       - #4.4.7.6: Benutzerverwaltung
 *       - #4.4.7.7: Bereinigungsfunktionen
 *       - #4.4.7.8: Reparaturfunktionen
 *       - #4.4.7.9: Generierungsfunktionen
 *       - #4.4.7.10: Verwaltungsfunktionen
 *       - #4.4.7.11: Nachrichtenfunktionen
 *       - #4.4.7.12: Supportfunktionen
 *       - #4.4.7.13: Aktualisierungsfunktionen
 *       - #4.4.7.14: Fehler und Berichterstattung
 *       - #4.4.7.15: Haftungsausschluss
 *       - #4.4.7.16: Lizenz
 *       - #4.4.7.17: Sonstiges
 *     - #4.4.8: Änderungsprotokolle / Updates
 *     - #4.4.9: System-Dashboard
 *
 *   Fehlerseiten (#4.5)
 */

/* ********************************************************************************
 * #1 NAVIGATION
 *
 * #1.1 - language & theme selection
 ************************************/
$L['CHINESE']         = 'Chinesisch';
$L['DANISH']          = 'Dänisch';
$L['ENGLISH']         = 'Englisch';
$L['FRENCH']          = 'Französisch';
$L['GERMAN']          = 'Deutsch';
$L['PORTUGUESE']      = 'Portugiesisch';
$L['SELECT_LANGUAGE'] = 'Klicken Sie, um die Sprache auszuwählen';
$L['SELECT_THEME']    = 'Klicken Sie, um das Thema auszuwählen';
$L['SPANISH']         = 'Spanisch';
$L['THEME_DARK']      = 'Dunkles Thema';
$L['THEME_LIGHT']     = 'Helles Thema';

/* **********************************
 * #1.2 - user menu (top right)
 ************************************/
$L['LOG_OUT'] = 'Abmelden';
$L['PROFILE'] = 'Mein Profil';
$L['REBOOT']  = 'Neustart';

/* **********************************
 * #1.3 - sidebar menus
 ************************************/
$L['ABOUT_AND_TIPS']    = 'Über / QuickTips';
$L['APP_DASHBOARD']     = 'Software Dashboard';
$L['DASHBOARD']         = 'Das Dashboard';
$L['DB_MGMNT']          = 'phpMyAdmin';
$L['EXTERNAL_LINKS']    = 'Benutzerdefinierte Links';
$L['GENERAL_SETTINGS']  = 'Allgemeine Einstellungen';
$L['HELP_SUPPORT']      = 'Hilfe / Update';
$L['KB']                = 'Wissensdatenbank';
$L['PLUGINS']           = 'Plugins';
$L['REGISTRATION']      = 'Registrierung';
$L['SECURITY_SETTINGS'] = 'Sicherheitseinstellungen';
$L['SESSION_SETTINGS']  = 'Sitzungseinstellungen';
$L['SETTINGS']          = 'Einstellungen';
$L['SYS_DASHBOARD']     = 'System Dashboard';
$L['SYSTEM_LOGS']       = 'Systemprotokolle';
$L['SYSTEM']            = 'System';
$L['USER_ADMIN']        = 'Benutzerverwaltung';
$L['USER_GROUPS']       = 'Benutzergruppen';
$L['USER_MANAGEMENT']   = 'Benutzerverwaltung';
$L['USER_SETTINGS']     = 'Benutzereinstellungen';
$L['WEB_CONSOLE']       = 'Web-Konsole';

/* **********************************
 * #1.4 - sidebar submenus
 ************************************/
$L['APP_MENU']        = 'Software-Menü';
$L['APPLICATIONS']    = 'Meine Software';
$L['DASHBOARD_INFO']  = 'Wählen Sie zwischen dem administrativen System-Dashboard oder dem Software-Dashboard, das von allen Benutzern gesehen wird.';
$L['DASHBOARD_VIEW']  = 'Dashboard-Ansicht';
$L['DOWNLOADS']       = 'Downloads';
$L['FILEMANAGER']     = 'Dateimanager';
$L['NZB_CLIENTS']     = 'NZB-Kunden';
$L['PLUGINS_CENTER']  = 'Plugins-Zentrum';
$L['PLUGINS_INFO']    = 'Plugins einfach installieren und deinstallieren, indem Sie auf den Plugin-Namen klicken.';
$L['RPLUGINS_NOTICE'] = 'Installieren und deinstallieren Sie ruTorrent-Plugins, indem Sie einfach auf den Plugin-Namen klicken';
$L['RPLUGINS']        = 'ruTorrent-Plugins';
$L['TORRENT_CLIENTS'] = 'Torrent-Clients';

/* **********************************
 * #1.5 - footer
 ************************************/
$L['ALL_RIGHTS'] = 'Alle Rechte vorbehalten.';

/* ********************************************************************************
 * #2 MISCELLANEOUS
 *
 * #2.1 - buttons
 ************************************/
$L['ACTIVATE_USERS']                = 'Benutzer aktivieren';
$L['ADD_IP_ADDRESS']                = 'IP-Adresse hinzufügen';
$L['ADD_USERNAME']                  = 'Benutzername hinzufügen';
$L['AGREE']                         = 'Ich verstehe, tun Sie es!';
$L['API_ACTIVATE']                  = 'Aktivieren';
$L['APP_MANAGEMENT']                = 'Software-Verwaltung';
$L['APPS_INSTALLED']                = 'Installierte Software';
$L['AUTO_DISABLE']                  = 'Automatische Updates deaktivieren';
$L['AUTO_ENABLE']                   = 'Automatische Updates einschalten';
$L['BACK']                          = 'Zurück';
$L['BAN_USER']                      = 'Benutzer sperren';
$L['CANCEL']                        = 'Abbrechen';
$L['CLEAN_LOG']                     = 'Aktualisierungsprotokoll bereinigen';
$L['CLEAN_RCLOG']                   = 'RClone-Upload-Protokoll bereinigen';
$L['CLICK_ME']                      = 'Klick mich';
$L['CLOSE_REFRESH']                 = 'Schließen und aktualisieren';
$L['CLOSE']                         = 'Schließen';
$L['CPU_TAB']                       = 'CPU';
$L['CREATE_ANNOUNCEMENT']           = 'Ankündigung erstellen';
$L['CREATE_GROUP']                  = 'Gruppe erstellen';
$L['CREATE_NEW_GROUP']              = 'Eine neue Gruppe erstellen';
$L['CREATE_NEW_USER']               = 'Neuen Benutzer anlegen';
$L['CREATE_USER']                   = 'Benutzer anlegen';
$L['DELETE_ALL_ANNOUNCEMENTS']      = 'Alle Ankündigungen löschen';
$L['DELETE_ALL_LOGS']               = 'Alle Logs löschen (> 30 Tage)';
$L['DELETE_INACTIVE_USERS']         = 'Inaktive Benutzer löschen';
$L['DELETE_LOGS']                   = 'Protokolle löschen';
$L['DELETE_SELECTED_ANNOUNCEMENTS'] = 'Ausgewählte Ankündigungen löschen';
$L['DELETE_SELECTED_SESSIONS']      = 'Ausgewählte Sitzungen löschen';
$L['DELETE_SELECTED']               = 'Ausgewählte löschen';
$L['DELETE_USER']                   = 'Benutzer löschen';
$L['DEMOTE']                        = 'Von Admin herabstufen';
$L['DISABLED']                      = 'Deaktiviert';
$L['DISK_TAB']                      = 'Datenträger';
$L['DOWNLOAD']                      = 'Herunterladen';
$L['EDIT_ANNOUNCEMENT']             = 'Ausgewählte Ankündigung bearbeiten';
$L['EDIT_GROUP']                    = 'Gruppe bearbeiten';
$L['EDIT_USER']                     = 'Benutzer bearbeiten';
$L['ENABLED']                       = 'Aktiviert';
$L['EXECUTE']                       = 'Ausführen';
$L['GENERATE']                      = 'Erzeugen';
$L['GO_BACK']                       = 'Zurückgehen';
$L['IN_USE']                        = 'In Benutzung';
$L['INSTALL']                       = 'Installieren';
$L['INSTALLED']                     = 'Deinstallieren';
$L['INSTALLING']                    = 'Installieren';
$L['KILL_USER_SESSION']             = 'Alle Benutzer-Sitzungen löschen';
$L['LAUNCH']                        = 'Starten';
$L['LOGIN']                         = 'Anmelden';
$L['LOGOFF']                        = 'Ausloggen';
$L['MEMORY_TAB']                    = 'Speicher';
$L['NETWORK_TAB']                   = 'Netzwerk';
$L['NGINX_BACKUP']                  = 'Nginx-Konfiguration sichern';
$L['NGINX_DEFAULT']                 = 'Standardkonfiguration wiederherstellen';
$L['NGINX_DISABLE']                 = 'Auth-Popup deaktivieren';
$L['NGINX_ENABLE']                  = 'Auth-Popup einschalten';
$L['NGINX_RESTORE']                 = 'Nginx-Backup wiederherstellen';
$L['APP_BACKUP_FULL']               = 'Vollständige Sicherung';
$L['APP_BACKUP_PARTIAL']            = 'Teilsicherung';
$L['APP_DEFAULT_PARTIAL_RESTORE']   = 'Standard wiederherstellen';
$L['APP_BACKUP_PARTIAL_RESTORE']    = 'Backup wiederherstellen';
$L['ED_MENU_CONFIG_APP']            = 'config & app';
$L['ED_MENU_CONFIG']                = 'nur konfig';
$L['VERSION_ROLLBACK_OPTIONS']      = 'Rollback-Optionen';
$L['VERSION_ROLLBACK_V']            = 'Version: ';
$L['VERSION']                       = 'Version';
$L['DATE']                          = 'Datum';
$L['VERSION_ROLLBACK_CONFIRM']      = 'Rollback auf diese Version?';
$L['VERSION_ROLLBACK_DELETE']       = 'Dieses Backup löschen?';
$L['PROMOTE']                       = 'Zum Administrator befördern';
$L['RCLONE_LOCK_REMOVE']            = 'Sperre entfernen';
$L['RCLONE_LOGS']                   = 'Protokolle anzeigen';
$L['RCLONE_UPLOAD']                 = 'hochladen';
$L['REFRESH']                       = 'Auffrischen';
$L['REGISTER']                      = 'Registrieren';
$L['REGISTERED']                    = 'Eingetragen';
$L['REINSTALL']                     = 'Neu installieren';
$L['RELOAD_CONF']                   = 'Konfigurationen neu laden';
$L['RELOAD']                        = 'Neu laden';
$L['REMOVE_BANNED_IP']              = 'Gesperrte IP-Adressen entfernen';
$L['REMOVE_DISALLOWED']             = 'Nicht zugelassene Benutzernamen entfernen';
$L['REMOVE_MEMBER']                 = 'Gruppenmitglied entfernen';
$L['REMOVE']                        = 'Entfernen';
$L['RESET_VERSION']                 = 'Aktuelle Version zurücksetzen';
$L['RESET']                         = 'Zurücksetzen';
$L['SAVE']                          = 'Speichern';
$L['SERVICE_CONTROL']               = 'Dienststeuerung';
$L['SIMULATE_BUTTON']               = 'Simulieren';
$L['SIMULATE_END']                  = 'Simulation beenden';
$L['SIMULATE_USER']                 = 'Benutzer simulieren';
$L['NANGINX']                       = 'N/A Dienst läuft auf nginx';
$L['START']                         = 'Starten';
$L['STOP']                          = 'Anhalten';
$L['SUBMIT']                        = 'Änderungen einreichen';
$L['TOP_PROC_TAB']                  = 'Top-Prozesse';
$L['UNBAN_USER']                    = 'Benutzer sperren';
$L['UNINSTALLED']                   = 'Deinstalliert';
$L['UNINSTALLING']                  = 'Deinstallation';
$L['UP']                            = 'Up';
$L['UPDATE']                        = 'Aktualisieren';
$L['UPDATE_TOOLTIP']                = 'Klicken Sie, um weitere Informationen anzuzeigen';
$L['UPDATE_VERSION']                = 'Version aktualisieren';
$L['USER_ACTIONS']                  = 'Benutzer-Aktionen';
$L['VIEW_CHANGELOG']                = 'Changelog anzeigen';
$L['LATEST']                        = 'neueste';
$L['CURRENT']                       = 'aktuell';
$L['VIEW']                          = 'Ansicht';

/* **********************************
 * #2.2 - popup texture
 ************************************/
$L['SYSTEM_RESPONSE_TITLE'] = 'Systemantwort';
$L['UNINSTALL_TITLE']       = 'Deinstallation';
$L['UNINSTALLING_TXT_1']    = 'Schade, dass Sie gehen ... Deinstallation';
$L['UNINSTALLING_TXT_2']    = 'in Arbeit. Bitte haben Sie Geduld';

/* **********************************
 * #2.3 - app nginx config edit modal
 ************************************/
$L['ALERT_NGINX_EDITOR']  = 'Es ist ratsam, zuerst ein Backup der aktuellen Konfiguration zu erstellen und die folgende Konfiguration nur zu ändern, wenn Sie sich mit Nginx auskennen oder von einem Mitarbeiter angeleitet werden';
$L['BACKUP_NGINX_LOC']    = 'Speicherort der Nginx-Konfigurations-Sicherung';
$L['CURRENT_NGINX_LOC']   = 'Aktueller Speicherort der Nginx-Konfiguration';
$L['NGINX_APP_CONFIGURE'] = 'Nginx-Konfigurationseditor';
$L['NGINX_EDIT']          = 'Nginx-Konfiguration bearbeiten';
$L['ALERT_CONFIG_EDITOR'] = 'Es wird empfohlen, zuerst ein Backup der aktuellen Konfiguration zu erstellen und die untenstehende Konfiguration nur dann zu ändern, wenn Sie sich über die Änderungen im Klaren sind, die Dokumentation der Software konsultiert haben oder von einem Mitarbeiter angewiesen wurden';
$L['BACKUP_CONFIG_LOC']   = 'Speicherort der Konfigurationssicherung';
$L['CURRENT_CONFIG_LOC']  = 'Aktueller Speicherort der Konfiguration';
$L['APP_CONFIG_OPTIONS']  = 'Software-Konfigurationseditor';
$L['APP_CONFIG_EDIT']     = 'Softwarekonfiguration bearbeiten';

/* **********************************
 * #2.4 - other
 ************************************/
$L['ABOUT_RELEASE']       = 'Über die Veröffentlichung';
$L['EMAIL']               = 'E-Mail';
$L['HERE']                = 'hier';
$L['HOME']                = 'Zuhause';
$L['IDLE_L']              = 'Leerlauf';
$L['IDLE']                = 'Leerlauf';
$L['IS_AVAILABLE']        = 'ist verfügbar.';
$L['LANGUAGES']           = 'Sprachen';
$L['NEED_HELP']           = 'Benötigen Sie Hilfe?';
$L['NGINX_CONF_OPTIONS']  = 'Nginx Conf-Optionen';
$L['NGINX_CONFIG']        = 'Nginx-Konfiguration';
$L['NGINX_SETTINGS']      = 'Nginx-Einstellungen';
$L['NO']                  = 'Nein';
$L['NOTIFICATIONS']       = 'Benachrichtigungen';
$L['OPEN']                = 'offen';
$L['OR']                  = 'oder';
$L['PASSWORT']            = 'Passwort';
$L['PLEASE_HOLD']         = '- Bitte warten';
$L['REQUIRED_FIELD']      = 'Erforderliches Feld...';
$L['REQUIRED_FIELDS']     = 'Mit <span style="color:#d9534f">*</span> markierte Felder sind erforderlich';
$L['SET_HERE']            = 'Hier setzen';
$L['SIMULATE_LIST']       = 'Benutzerliste';
$L['SIMULATE']            = 'Benutzer simulieren';
$L['SUMMARY']             = 'Zusammenfassung';
$L['THEMES']              = 'Themen';
$L['UPDATING_QUICKBOX']   = 'QuickBox wird aktualisiert';
$L['UPDATING']            = 'Aktualisierung';
$L['USED_L']              = 'verwendet';
$L['USERNAME']            = 'Benutzername';
$L['USERS']               = 'Benutzer';
$L['YES']                 = 'Ja';
$L['ADD_MOUNT_PATH_INFO'] = 'Wählen Sie diese Option aus, wenn Sie Kontingente (falls installiert) für das ausgewählte Verzeichnis ignorieren möchten. Wenn diese Option ausgewählt wird, werden Kontingente für den angegebenen Pfad ignoriert. Verwenden Sie diese Option, wenn Sie ein Verzeichnis überwachen, in dem Kontingente nicht berücksichtigt werden sollten. Dies gewährleistet genaue Platzberechnungen, insbesondere für RClone-Montierungen.';
$L['ADD_NEW_MOUNT_CHECK'] = 'Vorhandenes Mount oder Verzeichnis zur Überwachung hinzufügen';
$L['MOUNT_PATH_SUCCESS']  = 'Pfad erfolgreich zur Überwachung hinzugefügt. Seite wird aktualisiert...';
$L['MOUNT_PATH_ERROR']    = 'Der Pfad, den Sie zur Überwachung hinzuzufügen versuchten, existiert nicht.<br>Bitte überprüfen Sie den Pfad noch einmal und versuchen Sie es erneut.';
$L['MOUNTS']              = 'Reittiere:';
$L['MOUNT_ADD_PATH']      = 'Pfad hinzufügen';
$L['MOUNT_CHECK_ABOUT']   = 'Diese Werte werden regelmäßig berechnet und aktualisiert. Die Werte sind nicht in Echtzeit. Sie können eine Aktualisierung dieser Statistiken erzwingen, indem Sie unten auf die Schaltfläche \'Scan starten\' klicken.';
$L['MOUNT_CHECK_PROCESS'] = 'Speicherplatzprozentwerte werden derzeit im Hintergrund berechnet. Bitte schauen Sie später noch einmal vorbei, um aktualisierte Ergebnisse zu erhalten. Seitenaktualisierung erforderlich.';
$L['MOUNT_MONITOR_INFO']  = 'Zusätzliche Mount-Info';
$L['MOUNT_START_SCAN']    = 'Scan starten';
$L['REMOVE_MOUNT_PATH']   = 'Überwachten Pfad entfernen. Dadurch wird das eigentliche Verzeichnis oder der Einhängepunkt nicht entfernt.';

/* ********************************************************************************
 * #3 WIDGETS
 *
 * #3.1 - Tables Headers
 *
 * #3.1.1 - app management center
 ************************************/
$L['AVAILABILITY'] = 'Verfügbarkeit';
$L['DETAILS']      = 'Einzelheiten';
$L['NAME']         = 'Name';
$L['CONFIGS']      = 'Konfigurationen';
$L['EXTRAS']       = 'Extras';

/* **********************************
 * #3.2 - Package Management Center
 *
 * #3.2.1 - app info
 ************************************/
$L['AIRSONIC']      = 'Airsonic-Advanced ist eine modernere Implementierung des Airsonic-Gabels mit mehreren wichtigen Leistungs- und Funktionsverbesserungen. Sie ergänzt und ersetzt mehrere Funktionen von Airsonic. Airsonic ist ein kostenloser, webbasierter Medienstreamer, der einen allgegenwärtigen Zugang zu Ihrer Musik bietet.';
$L['AUTOBRR']       = 'Autobrr ist ein moderner einzelner binärer Ersatz für das Plugin autodl-irssi+rutorrent. Autobrr überwacht IRC-Ankündigungskanäle und Torznab-RSS-Feeds, um Veröffentlichungen zu erhalten, sobald sie verfügbar sind, mit guter Filterung und Regex-Unterstützung.';
$L['AUTODL']        = 'AutoDL-iRSSi ist ein Plugin für irssi, das IRC-Ankündigungskanäle überwacht und Torrent-Dateien auf Basis benutzerdefinierter Filter herunterlädt.';
$L['AUTOSCAN']      = 'Autoscan ersetzt das Standardverhalten von Plex und Emby, um Dateiänderungen im Dateisystem zu erkennen. Autoscan integriert sich mit Sonarr, Radarr, Lidarr und Google Drive, um Änderungen nahezu in Echtzeit abzurufen, ohne sich auf das Dateisystem zu verlassen.';
$L['BAZARR']        = 'Bazarr ist eine Begleitanwendung für Sonarr und Radarr. Es verwaltet und lädt Untertitel auf der Grundlage Ihrer Anforderungen herunter. Sie definieren Ihre Vorlieben per TV-Show oder Film und Bazarr kümmert sich um alles für Sie.';
$L['BAZARR4K']      = 'Bazarr4K ist ein eigenständiger Bazarr-Klon für die 4K-UHD-Profile. Es ist ein Mittel, um mehrere Bazarr-Instanzen zu handhaben, während UHD-Inhalte von allgemeinen Inhalten getrennt bleiben.';
$L['BBR']           = 'BBR ist ein neuer Algorithmus für die Überlastungskontrolle, der von Google zum TCP-Stack des Linux-Kernels hinzugefügt wird. Mit BBR kann ein Linux-Server einen deutlich höheren Durchsatz und eine geringere Latenz für Verbindungen erzielen.';
$L['BTSYNC']        = 'BitTorrent Sync von BitTorrent, Inc ist ein proprietäres Peer-to-Peer Dateisynchronisationsprogramm.';
$L['CALIBRE']       = 'Calibre ist eine plattformübergreifende Open-Source-Suite für E-Book-Software. Calibre unterstützt das Organisieren vorhandener E-Books in virtuellen Bibliotheken, das Anzeigen, Bearbeiten, Erstellen und Konvertieren von E-Books sowie das Synchronisieren von E-Books mit einer Vielzahl von E-Readern. Das Bearbeiten von Büchern wird nur für die Formate EPUB und AZW3 unterstützt.';
$L['COUCHPOTATO']   = 'Lade deine Filme, nachdem sie released wurden, einfach und automatisiert in der besten Qualität via Torrent und UseNet runter.';
$L['CSF']           = 'ConfigServer Firewall, auch CSF genannt, ist ein Firewall-Konfigurationsskript, das dir eine bessere Sicherheit für deinen Server ermöglicht und dir eine einfache und umfangreiche Benutzeroberfläche für die Firewall-Einstellungen bietet.';
$L['DELUGE']        = 'Deluge ist ein leichter, kostenloser, Cross-Plattform BitTorrent-Client.';
$L['DUPLICATI']     = 'Duplicati ist ein kostenloser Open-Source-Backup-Client, der verschlüsselte, inkrementelle, komprimierte Backups sicher auf Cloud-Speicherdiensten und Remote-Dateiservern speichert. Es funktioniert mit Amazon S3, Dropbox, Google Drive, FTP, SSH/SFTP, WebDAV und <a href="https://nullrefer.ir/?https://duplicati.readthedocs.io/en/latest/01-introduction/#supported-backends" rel="noopener nofollow" target="_blank">viel mehr</a>.';
$L['EMBY']          = 'Embys Server ist ein Client-Server-Softwarepaket, mit dem Verbraucher ihre legalen persönlichen Kopien von Multimedia-Dateien - Musik-, Video- und Bilddateien - hosten können. ... Die Emby Client-Software ist eine App, die Sie auf mobilen Geräten und bestimmten Set-Top-Boxen für Fernseher, wie Android TV, installieren müssen.';
$L['FAIL2BAN']      = 'Fail2Ban ist ein Software-Framework zur Einbruchsvermeidung, das Computerserver vor Brute-Force-Angriffen schützt.';
$L['FILEBOT']       = 'FileBot ist das ultimative Werkzeug zum Organisieren und Umbenennen Ihrer Filme, TV-Shows und Anime sowie zum Abrufen von Untertiteln und Artworks. Es ist intelligent und funktioniert einfach.';
$L['FILEBROWSER']   = 'filebrowser bietet eine Dateiverwaltungsoberfläche innerhalb eines bestimmten Verzeichnisses und kann zum Hochladen, Löschen, Vorschau, Umbenennen und Bearbeiten Deiner Dateien verwendet werden. Es erlaubt das Anlegen mehrerer Benutzer und jeder Benutzer kann sein eigenes Verzeichnis haben. Es kann als eigenständige Anwendung oder als Middleware verwendet werden.';
$L['FLARESOLVERR']  = 'FlareSolverr ist ein Proxy-Server, um den Cloudflare-Schutz zu umgehen.';
$L['FLEXGET']       = 'FlexGet ist ein Mehrzweck-Automatisierungstool für alle Ihre Medien. Unterstützung für Torrents, NZBs, Podcasts, Comics, TV, Filme, RSS, HTML, CSV und mehr.';
$L['FLOOD']         = 'Flood ist ein Überwachungsdienst für verschiedene Torrent-Clients. Es ist ein Node.js-Dienst, der mit Ihrem bevorzugten Torrent-Client kommuniziert und eine anständige Web-Benutzeroberfläche für die Verwaltung bereitstellt. Die Organisation <a href="https://nullrefer.ir/?https://github.com/Flood-UI" target="_blank" rel="nofollow noopener">Flood-UI</a> hostet verwandte Projekte.';
$L['HEADPHONES']    = 'Headphones ist ein automatisierter Musik-Downloader für NZB und Torrent, geschrieben in Python. Es unterstützt SABnzbd, NZBget, Transmission, μTorrent, Deluge und Blackhole.';
$L['JACKETT']       = 'API-Unterstützung für deine favorisierten privaten Tracker.';
$L['JDOWNLOADER']   = 'JDownloader ist ein kostenloses Download-Management-Tool, mit dem Sie schnell Dateien von Hosting-Diensten wie Mediafire, 4Shared und anderen Hosting-Diensten mit ähnlichen Funktionen herunterladen können. File-Hosting-Dienste beschränken häufig Ihre volle Download-Geschwindigkeit, um Anreize für den Kauf von Premium-Paketen zu schaffen. JDownloader hilft Ihnen, diese Anforderung zu umgehen.';
$L['JELLYFIN']      = 'Jellyfin ist ein Free Software Media System, mit dem Sie die Verwaltung und das Streaming Ihrer Medien steuern können.';
$L['JELLYSEERR']    = 'Jellyseerr ist eine kostenlose Open-Source-Softwareanwendung zum Verwalten von Anfragen für Ihre Medienbibliothek. Es handelt sich um einen Fork von Overseerr, der zur Unterstützung der Jellyfin- und Emby-Medienserver entwickelt wurde!';
$L['KAVITA']        = 'Kavita ist ein schneller, funktionsreicher, plattformübergreifender Leseserver. Entwickelt mit Fokus auf Manga und dem Ziel, eine umfassende Lösung für alle Ihre Lesebedürfnisse zu bieten. Richten Sie Ihren eigenen Server ein und teilen Sie Ihre Lesesammlung mit Ihren Freunden und Ihrer Familie.';
$L['KOMGA']         = 'Komga ist ein Medienserver für Ihre digitalen Comics/Manga, mit Schwerpunkt auf der Bereitstellung einer einfachen und modernen Benutzeroberfläche.';
$L['LAZYLIBRARIAN'] = 'LazyLibrarian ist eine SickBeard, CouchPotato, Kopfhörer-ähnliche Anwendung für E-Books, Hörbücher und Magazine. Es wird eine Kombination aus <a href="https://nullrefer.ir/?https://www.goodreads.com/" target="_blank">Goodreads</a> <a href="https://nullrefer.ir/?https://www.librarything.com/" rel="noopener nofollow" target="_blank">Librarything</a> und optional <a href="https://nullrefer.ir/?https://www.googleapis.com/books/v1/" rel="noopener nofollow" target="_blank"> GoogleBooks </a> als Quellen für Autoren- und Buchinformationen.';
$L['LETSENCRYPT']   = 'Let\'s Encrypt ist eine kostenlose, automatisierte und offene Certificate Authority (CA), die zum Nutzen der Öffentlichkeit betrieben wird. Es ist ein Service der <a href="https://nullrefer.ir/?https://letsencrypt.org/isrg/" rel="noopener nofollow" target="_blank">Internet Security Research Group (ISRG)</a>.';
$L['LIDARR']        = 'Lidarr ist eine unabhängige "Fork" von Sonarr, die für das automatische Herunterladen von Musik über Usenet und BitTorrent überarbeitet wurde. Das Projekt wurde von anderen Usenet / BitTorrent-Musikdownloadern wie Headphones inspiriert.';
$L['MEDUSA']        = 'Videodatei-Manager für TV-Sendungen, es sucht nach neuen Episoden deiner Lieblingssendungen und wenn sie gepostet werden, macht es seine Magie. Ermöglicht manuelle Suche und andere exklusive Funktionen, überprüfen Sie Medusa auf <a href="https://nullrefer.ir/?https://github.com/pymedusa/Medusa" rel="noopener nofollow" target="_blank">Github</a>.';
$L['MYLAR3']        = 'Mylar ist ein automatisiertes Comic-Downloader-Programm (cbr/cbz) zur Verwendung mit NZB und in Python geschriebenen Torrents. Es unterstützt neben DDL auch SABnzbd, NZBGET und viele Torrent-Clients.';
$L['NETDATA']       = 'Netdata ist eine verteilte Echtzeit-, Leistungs- und Zustandsüberwachung für Systeme und Anwendungen.';
$L['NEXTCLOUD']     = 'Nextcloud ist eine selbst-gehostete Open-Source, Dateisynchronisations- sowie Teilungs- und Kommunikationsplattform. Greife auf deine Dateien, deinen Kalender, deine Kontakte zu, synchronisiere sie und kommuniziere und kollaboriere auf all deinen Geräten. Dabei entscheidest du, was mit deinen Daten passiert, wo sie sind und wer auf diese zugreifen darf!';
$L['NOTIFIARR']     = 'Dies ist der einheitliche Client für <a href="https://nullrefer.ir/?https://notifiarr.com/" rel="noopener nofollow" target="_blank">Notifiarr.com</a>. Der Client ermöglicht Inhaltsanfragen von Media Bot in Ihrem Discord-Server und bietet neben vielen anderen Funktionen auch Berichte zur Plex-Nutzung und zum Systemzustand.';
$L['NOVNC']         = 'noVNC ist sowohl eine VNC-Client-JavaScript-Bibliothek als auch eine Anwendung, die auf dieser Bibliothek basiert. noVNC kann in allen modernen Browsern, einschließlich mobilen Browsern, verwendet werden (iOS and Android).';
$L['NZBGET']        = 'NZBGet ist ein binärer Downloader, der Dateien aus dem Usenet herunterlädt, basierend auf Informationen in nzb-Dateien. NZBGet ist in C ++ geschrieben und ist für seine außergewöhnliche Leistung und Effizienz bekannt.';
$L['NZBHYDRA']      = 'NZBHydra ist eine Metasuche nach NZB-Indexern. Es bietet einfachen Zugriff auf eine Reihe von root- und newznab-basierten Indexern. Sie können alle Ihre Indexer von einem Ort aus durchsuchen und als Quelle für Werkzeuge wie Sonarr oder CouchPotato verwenden.';
$L['NZBHYDRA2']     = 'NZBHydra2 ist eine Metasuche nach NZB-Indexern. Es bietet einfachen Zugriff auf eine Reihe von root- und newznab-basierten Indexern. Sie können alle Ihre Indexer von einem Ort aus durchsuchen und als Quelle für Werkzeuge wie Sonarr oder CouchPotato verwenden.';
$L['OMBI']          = 'Ombi ist ein schicker und einfach zu bedienender Webdienst, über den die Benutzer Wünsche für die Plex-Bibliothek eintragen können. Dieser funktioniert mit CouchPotato, SickRage und Sonarr.';
$L['OVERSEERR']     = 'Overseerr ist eine kostenlose Open-Source-Softwareanwendung zum Verwalten von Anfragen für Ihre Medienbibliothek. Es lässt sich in Ihre bestehenden Dienste wie Sonarr, Radarr und Plex integrieren!';
$L['OVPN']          = 'SSL / TLS-basiertes Benutzer-Space-VPN. Unterstützt Linux, Solaris, OpenBSD, FreeBSD, NetBSD, Mac OS X und Windows 2000/XP +.';
$L['PHPMYADMIN']    = 'phpMyAdmin ist ein kostenloses Software-Tool in <a href="https://nullrefer.ir/?https://php.net/" rel="noopener nofollow" target="_blank">PHP</a> geschrieben, das die Verwaltung von <a href="https://www.mysql.com/" target="_blank">MySQL</a> über das Web. phpMyAdmin unterstützt eine Vielzahl von Operationen unter MySQL und MariaDB. Häufig verwendete Vorgänge (Verwalten von Datenbanken, Tabellen, Spalten, Relationen, Indizes, Benutzern, Berechtigungen usw.) können über die Benutzeroberfläche ausgeführt werden, während Sie weiterhin die Möglichkeit haben, SQL-Anweisungen direkt auszuführen.';
$L['PLEX']          = 'Mit Plex kannst du deine Medien verwalten und auf jedes Gerät streamen, auf dem Plex verfügbar ist.';
$L['PROWLARR']      = 'Prowlarr ist ein Indexer-Manager/Proxy, der auf dem beliebten arr .net/reactjs-Basisstapel basiert und in Ihre verschiedenen PVR-Apps integriert werden kann. Prowlarr unterstützt sowohl Torrent-Tracker als auch Usenet-Indexer. Es lässt sich nahtlos in Sonarr, Radarr, Lidarr und Readarr integrieren und bietet eine vollständige Verwaltung Ihrer Indexer, ohne dass ein Indexer-Setup pro App erforderlich ist.';
$L['PYLOAD']        = 'pyLoad ist ein Download-Manager für One-Click-Hoster, Video-Webseiten, und HTTP/FTP Links. Eine Liste von unterstützten Webseiten kann <a href="https://nullrefer.ir/?https://github.com/pyload/pyload/wiki/Supported-Hoster" rel="noopener nofollow" target="_blank">hier</a> gefunden werden.';
$L['QBITTORRENT']   = 'qBittorrent ist ein kostenloser und zuverlässiger P2P-BitTorrent-Client. Ein erweiterter BitTorrent-Client für mehrere Plattformen mit einer schönen Qt-Benutzeroberfläche sowie eine Web-Benutzeroberfläche für die Fernsteuerung und eine integrierte Suchmaschine.';
$L['QUASSEL']       = 'Quassel IRC ist ein moderner, plattformübergreifender, verteilter IRC-Client, der auf dem Qt4-Framework basiert.';
$L['QUOTAS']        = 'Dieses Linux-Feature erlaubt es dem Systemadministrator, den maximal verfügbaren Speicherplatz einem Benutzer oder einer Gruppe zuzuweisen.';
$L['RADARR']        = 'Radarr ist ein unabhängiger Fork von Sonarr, der für das automatische Herunterladen von Filmen über Usenet und BitTorrent überarbeitet wurde.<br> Das Projekt wurde von anderen Usenet / BitTorrent Movie Downloadern wie CouchPotato inspiriert.';
$L['RADARR4K']      = 'Radarr4K ist ein eigenständiger Radarr-Klon für die 4K-UHD-Profile. Es ist ein Mittel, um mehrere Radarr-Instanzen zu handhaben, während UHD-Inhalte von allgemeinen Inhalten getrennt bleiben.';
$L['RAPIDLEECH']    = 'RapidLeech ist ein freies Server-Transfer-Skript, das Dateien von populären File-Hostern wie uploaded.net, zippyshare.com oder einem der über 100 anderen Hostern runter- oder sie hochlädt.';
$L['RCLONE']        = 'RClone ist ein Kommandozeilenprogramm zum Synchronisieren von Dateien und Verzeichnissen zu und von einer Vielzahl von Hosts.';
$L['READARR']       = 'Readarr ist ein E-Book-Sammlungsmanager für Usenet- und BitTorrent-Nutzer. Er kann mehrere RSS-Feeds auf neue Bücher Ihrer Lieblingsautoren überwachen und wird mit Clients und Indexern zusammenarbeiten, um sie zu erfassen, zu sortieren und umzubenennen.';
$L['REQUESTRR']     = 'Requestrr ist ein Discord-Chatbot, der verwendet wird, um die Nutzung von Diensten wie Sonarr/Radarr/Ombi über die Verwendung von Chats zu vereinfachen! Alle Benutzer Ihres Discord-Servers können das Hinzufügen neuer Inhalte anfordern und werden benachrichtigt, wenn sie verfügbar sind.';
$L['RTORRENT']      = 'rTorrent ist ein schneller und effizienter BitTorrent-Client, der die Bibliothek libTorrent (nicht zu verwechseln mit libtorrent-rasterbar) verwendet und in Entwicklung ist. Es ist in C ++ geschrieben und verwendet die Programmierbibliothek ncurses, was bedeutet, dass es eine Text-Benutzerschnittstelle verwendet. Das ruTorrent-Frontend wird zusätzlich installiert.';
$L['RUTORRENT']     = 'ruTorrent ist ein Front-End für den beliebten Bittorrent-Client rtorrent. Hauptmerkmale: Leichte Server-Seite, so kann es auf alten und Low-End-Servern und sogar auf einigen SOHO-Routern installiert werden, Extensible - es gibt mehrere Plugins und jeder kann ihre eigenen erstellen, kommt mit <a href="https://nullrefer.ir/?https://lab.quickbox.io/QuickBox/club-QuickBox" rel="noopener nofollow" target="_blank">club-QuickBox haut</a>.';
$L['SABNZBD']       = 'SABnzbd ist ein plattformunabhängiger Binary-Newsgroup-Downloader. Das Programm arbeitet im Hintergrund und vereinfacht das Downloaden, Prüfen und Extrahieren von Dateien aus dem Usenet. SABnzbd nutzt dafür NZB-Dateien (vergleichbar mit .torrent-Dateien, aber für das Usenet), anstatt das Usenet direkt zu durchsuchen.';
$L['SEEDCROSS']     = 'SeedCross ist eine Web-App zum Cross-Seed von Torrents in Deluge/qBittorrent/Transmission. Es ist ein Fork von <a href="https://nullrefer.ir/?https://github.com/BC44/Cross-Seed-AutoDL" rel="noopener nofollow" target="_blank">Cross-Seed-AutoDL</a>.';
$L['SICKCHILL']     = 'Video File Manager für TV-Shows, Es schaut nach neuen Episoden Ihrer Lieblingssendungen.';
$L['SICKGEAR']      = 'SickGear ist Sick-Beard entwickelt. Automatisieren Sie Ihren Fernsehgenuss mit Innovation, bewährter Stabilität und Zuverlässigkeit.';
$L['SONARR']        = 'Sonarr ist ein Serien-Management-Tool, das mit Torrents und UseNet funktioniert.';
$L['SONARR4K']      = 'Sonarr4K ist ein eigenständiger Sonarr-Klon für die 4K-UHD-Profile. Es ist ein Mittel, um mehrere Sonarr-Instanzen zu handhaben, während UHD-Inhalte von allgemeinen Inhalten getrennt bleiben.';
$L['SUBSONIC']      = 'Subsonic ist ein webbasierter Media-Server. Da er in Java geschrieben ist, kann er auf jedem Betriebssystem mit Java-Support betrieben werden. Subsonic ermöglicht das simultane Streamen auf mehrere Clienten und unterstützt jedes streambare Medienformat (inklusive MP3, AAC, und Ogg).';
$L['SYNCTHING']     = 'Syncthing ist eine quelloffen und in Go geschriebene Dateisynchronisation mit BitTorrent.';
$L['TAUTULLI']      = 'Eine auf Python basierende Web-Applikation, um den Plex-Server zu überwachen, zu managen und das Nutzungsverhalten der Benutzer zu analysieren.';
$L['THELOUNGE']     = 'Ein moderner selbst-gehosteter Web-IRC-Client';
$L['TRANSMISSION']  = 'Transmission ist für eine einfache, leistungsstarke verwendung ausgelegt. Die Standardeinstellungen sind auf « Just Work » (Just Work) eingestellt. Die Konfiguration erweiterter Funktionen wie Watch-Verzeichnisse, fehlerhafte Peer-Blocklisten und die Webschnittstelle erfordert nur wenige Klicks. Als Ubuntu Transmission als Standard-BitTorrent-Client auswählte, war einer der am häufigsten genannten Gründe die einfache Lernkurve.';
$L['UNIFI']         = 'Der UniFi® Controller ist eine drahtlose Netzwerkverwaltungssoftware von Ubiquiti Networks ™. Sie können damit mehrere drahtlose Netzwerke mit einem Webbrowser verwalten.';
$L['UNPACKERR']     = 'Extrahiert Downloads für Radarr, Sonarr, Lidarr, Readarr - Löscht extrahierte Dateien nach dem Import.';
$L['WEBCONSOLE']    = 'TTYD (alias The QuickBox Web Console) ist ein voll ausgestattetes Terminal basierend auf Xterm.js mit CJK-und IME-Unterstützung.';
$L['WIREGUARD']     = 'WireGuard® ist ein extrem einfaches, aber schnelles und modernes VPN, das modernste Kryptografie verwendet. Es soll schneller, einfacher, schlanker und nützlicher als IPsec sein und dabei den enormen Aufwand vermeiden. Es soll deutlich leistungsfähiger als OpenVPN sein. WireGuard ist als Allzweck-VPN für den Betrieb auf eingebetteten Schnittstellen und Supercomputern konzipiert und für viele verschiedene Umstände geeignet.';
$L['X2GO']          = 'X2Go ist eine Open-Source Remote-Desktop-Software für Linux, die das NX-Technologie-Protokoll verwendet.';
$L['XTEVE']         = 'xTeVe ist eine Anwendung, die einen TV-Tuner simuliert, mit der Sie IPTV-Kanäle über Plex oder Emby empfangen können. xTeVe kann mehrere M3U und XMLTV-Dateien zusammenführen und an Ihr bevorzugtes Media Center senden.';
$L['ZNC']           = 'ZNC ist ein IRC-Netzwerk Bouncer oder BNC. Er kann den Clienten vom eigentlichen IRC-Server sowie ausgewählten Chaträumen trennen.';

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
	$L[$key . '_UNINSTALL'] = 'Sie sind im Begriff, <span style="color:#01cea2">' . $value . '</span> von Ihrem System zu deinstallieren.<br/><br/>Dadurch werden alle Ihre Konfigurationen und Einstellungen vollständig entfernt. Dieser Vorgang kann nicht rückgängig gemacht werden.<br/><br/>Sie können <span style="color:#01cea2">' . $value . '</span> erneut installieren. Sie können den Wert jederzeit ändern, Ihre Einstellungen werden jedoch auf die Standardeinstellungen zurückgesetzt.';
}

/* **********************************
 * #3.2.3 - app reinstall
 ************************************/
// Loop through the array and create the reinstall translation
foreach ($APPS as $key => $value) {
	$L[$key . '_REINSTALL'] = 'Sie sind dabei, <span style="color:#01cea2">' . $value . '</span> neu zu installieren.<br/><br/>Dadurch werden alle Ihre aktuellen Konfigurationen, Dateien und Einstellungen vollständig entfernt/zurückgesetzt. Diese Aktion kann nicht rückgängig gemacht werden.';
}

/* **********************************
 * #3.2.4 - toggles & tooltips
 ************************************/
$L['APP_OPTIONS']                  = 'App-Optionen';
$L['NGINX_OPTIONS']                = 'NGinx-Optionen';
$L['CARD_VIEW']                    = 'Kartenansicht';
$L['LIST_VIEW']                    = 'Listenansicht';
$L['CLI']                          = 'Nur Webkonsole';
$L['COMPAT_E']                     = 'Kompatibilitätsfehler';
$L['CURRENTLY_INSTALLED_NOTICE']   = 'Sieht so aus, als hätten Sie Zugriff auf eine Software, die jeweils nur von einem Benutzer installiert werden kann. Sprechen Sie mit Ihrem Systemadministrator, um weitere Informationen zur Verfügbarkeit zu erhalten.';
$L['CURRENTLY_INSTALLED_TITLE']    = 'Jemand hat derzeit diese Software installiert';
$L['DEL1_TOOLTIP']                 = 'Es sieht so aus, als ob Sie Ubuntu 20.04 verwenden. Deluge v1 läuft nicht auf dieser Distribution. Bitte erwägen Sie die Installation von Deluge v2, um fortzufahren, da Deluge v2 auf aktualisierten libtorrent1.2+ und python3+ läuft.';
$L['DEL2_TOOLTIP']                 = 'Es sieht so aus, als ob qBittorrent derzeit installiert ist. Deluge v2 funktioniert nicht, wenn qBittorrent installiert ist. Bitte entfernen Sie entweder qBittorrent oder installieren Sie Deluge v1, um fortzufahren.';
$L['DEL2XENIAL_TOOLTIP']           = 'Es sieht so aus, als ob Sie Ubuntu 16.04 verwenden. Deluge v2 läuft nicht auf dieser Distribution. Bitte erwägen Sie die Installation von Deluge v1, um fortzufahren.';
$L['EMBY_JELLYFIN_COMPAT_MESSAGE'] = 'Jellyfin installiert';
$L['ENTER_MOUNT_POINT']            = 'Bitte geben Sie Ihren primären Einhängepunkt ein';
$L['FAIL2BAN_TOOLTIP']             = 'Zugriff auf diese Funktion über ssh durch Eingabe von:<br><code>qb install fail2ban</code>';
$L['JELLYFIN_EMBY_COMPAT_MESSAGE'] = 'Emby installiert';
$L['MEDUSA_INSTALLED']             = 'Medusa installiert';
$L['OVPN_TOOLTIP']                 = 'Zugriff auf diese Funktion von Ihrer Web-Konsole aus durch Eingabe von:<br><code>qb install vpn -u USER</code>';
$L['PRIMARY_MOUNTM']               = 'Primäres Mount';
$L['QBIT_TOOLTIP']                 = 'Es sieht so aus, als ob Deluge 2 derzeit installiert ist. qBittorrent funktioniert nicht, wenn Deluge 2 installiert ist. Bitte entfernen Sie entweder Deluge 2 oder installieren Sie Deluge 1, um fortzufahren.';
$L['QUOTAS_FSTAB']                 = 'Ihre fstab bearbeiten';
$L['QUOTAS_HELP']                  = 'Weitere Informationen zum Installieren von Kontingenten finden Sie unter <a href="https://nullrefer.ir/?https://quickbox.io/knowledge-base/how-to-install-quotas /" rel="noopener nofollow" target="_blank"><strong>bitte zuerst diese FAQ lesen</strong></a>.';
$L['QUOTAS_TOOLTIP']               = 'Fügen Sie Folgendes anstelle von <code class="language-bash">Standards</code> zu Ihrem Haupteinhängepunkt hinzu, um fortzufahren';
$L['RCLONE_ADMIN_TOOLTIP']         = 'Zugriff auf diese Funktion über ssh durch Eingabe von:<br><code>qb install rclone -u USER [--dropbox|--gdrive] [--encrypted] [--beta]</code><br>Weitere Optionen finden Sie unter <code>qb help rclone</code>.';
$L['RCLONE_USER_TOOLTIP']          = 'Bitte wenden Sie sich an einen Systemadministrator, um dies installieren zu lassen.';
$L['REMOVE_MEDUSA_FIRST']          = 'Entfernen Sie zuerst Medusa, um diese Software zu installieren.';
$L['REMOVE_SICKCHILL_FIRST']       = 'Entfernen Sie zuerst SickChill, um diese Software zu installieren.';
$L['REMOVE_SICKGEAR_FIRST']        = 'Entfernen Sie zuerst SickGear, um diese Software zu installieren.';
$L['SICKCHILL_INSTALLED']          = 'SickChill installiert';
$L['SICKGEAR_INSTALLED']           = 'SickGear installiert';
$L['UNIFI_SSL_TOOLTIP']            = 'Wenn Sie bereits eine Domain in Ihrem Site-Root festgelegt und ein Lets Encrypt-Zertifikat bereits für die Domain generiert haben, wählen Sie diese Option aus.';
$L['ZNC_TOOLTIP']                  = 'Zugriff auf diese Funktion über ssh durch Eingabe von:<br><code>qb install znc -u USER</code>';

/* **********************************
 * UI - app install/reinstall modals
 *
 * calibre install/reinstall modal
 ************************************/
$L['CALIBRE_INSTALL_TITLE']   = 'Calibre-Installation';
$L['CALIBRE_REINSTALL_TITLE'] = 'Calibre Neuinstallation';
$L['CALIBRE_INSTALL_MESSAGE'] = 'Sie haben die Möglichkeit, einen benutzerdefinierten Verzeichnispfad für Ihre Calibre-Bibliothek anzugeben. Wenn der ausgewählte Pfad derzeit nicht existiert, wird er automatisch für Sie generiert.<br>Wenn Sie alternativ lieber den Standardpfad verwenden möchten, lassen Sie das Feld einfach leer und die Bibliothek befindet sich unter:<br><code>/home/' . $username . '/.config/Calibre/library</code>';

/* **********************************
 * filebot install/reinstall modal
 ************************************/
$L['FILEBOT_INSTALL_TITLE']         = 'Filebot-Installation';
$L['FILEBOT_REINSTALL_TITLE']       = 'Filebot Neuinstallation';
$L['PROCESS_DELUGE']                = 'Downloads für Deluge verarbeiten?';
$L['PROCESS_DELUGE_TOOLTIP']        = 'Setzen Sie dies auf Ja, um Downloads für Deluge zu verarbeiten.<br>Informationen zur Implementierung finden Sie in den Skriptnotizen unter:<br><code>/home/' . $username . '/.config/Filebot/deluge-postprocess.sh</code>';
$L['CUSTOM_PATH_TOOLTIP_NO_RCLONE'] = 'Setzen Sie dies auf Ja, um den Pfad zu Ihrer Medienbibliothek einzugeben.<br>Der Standardpfad ist:<br><code>/home/' . $username . '/Media</code>';
$L['CUSTOM_PATH_TOOLTIP_RCLONE']    = 'Setzen Sie dies auf Ja, um den Pfad zu Ihrer Medienbibliothek einzugeben.<br>Der Standardpfad ist:<br><code>/home/' . $username . '/rclone/cache</code>';
$L['PROCESS_NZBGET']                = 'Downloads für NZBGet verarbeiten?';
$L['PROCESS_NZBGET_TOOLTIP']        = 'Setzen Sie dies auf Ja, um Downloads für NZBGet zu verarbeiten.<br>Informationen zur Implementierung finden Sie in den Skriptnotizen unter:<br><code>/home/' . $username . '/.config/NZBGet/scripts/nzbget-postprocess.sh</code>';
$L['PROCESS_RTORRENT']              = 'Downloads für rTorrent verarbeiten?';
$L['PROCESS_SABNZBD']               = 'Downloads für SABnzbd verarbeiten?';
$L['CUSTOM_MEDIA_PATH']             = 'Benutzerdefinierten Pfad zur Medienbibliothek verwenden?';
$L['FILEBOT_DEFAULT_PATH']          = 'Beispiel';
$L['FILEBOT_LICENSE']               = 'Filebot-Lizenz';

/* **********************************
 * jdownloader install/reinstall modal
 ************************************/
$L['JDOWNLOADER_INSTALL_TITLE']        = 'JDownloader-Installation';
$L['JDOWNLOADER_REINSTALL_TITLE']      = 'JDownloader Neuinstallation';
$L['JDOWNLOADER_EMAIL']                = 'E-Mail-Adresse des JDownloader-Kontos';
$L['JDOWNLOADER_PASSWORD']             = 'Passwort für das JDownloader-Konto';
$L['JDOWNLOADER_INSTALL_PATH_MESSAGE'] = 'Sie haben die Möglichkeit, einen benutzerdefinierten Verzeichnispfad für Ihre JDownloader-Downloads anzugeben. Wenn der ausgewählte Pfad derzeit nicht existiert, wird er automatisch für Sie generiert.<br>Wenn Sie alternativ lieber den Standardpfad verwenden möchten, lassen Sie das Feld einfach leer und die Bibliothek befindet sich unter:<br><code>/home/' . $username . '/Downloads</code>';

/* **********************************
 * kavita install/reinstall modal
 ************************************/
$L['KAVITA_INSTALL_TITLE']   = 'Kavita-Installation';
$L['KAVITA_REINSTALL_TITLE'] = 'Kavita Neuinstallation';
$L['KAVITA_INSTALL_MESSAGE'] = 'Sie haben die Möglichkeit, einen benutzerdefinierten Verzeichnispfad für Ihre Kavita-Bibliothek anzugeben. Wenn der ausgewählte Pfad derzeit nicht existiert, wird er automatisch für Sie generiert.<br>Wenn Sie alternativ lieber den Standardpfad verwenden möchten, lassen Sie das Feld einfach leer und die Bibliothek befindet sich unter:<br><code>/home/' . $username . '/.config/Kavita/library</code>';

/* **************************************
 * mylar3 install/reinstall modal
 ****************************************/
$L['MYLAR3_INSTALL_TITLE']   = 'Mylar3 installieren';
$L['MYLAR3_REINSTALL_TITLE'] = 'Mylar3 neu installieren';
$L['MYLAR3_INSTALL_MESSAGE'] = 'Sie haben die Möglichkeit, einen benutzerdefinierten Pfad für Ihr Mylar3 Comics-Verzeichnis anzugeben. Wenn der gewählte Pfad derzeit nicht existiert, wird er automatisch für Sie generiert.<br>Wenn Sie alternativ lieber den Standardpfad verwenden möchten, lassen Sie das Feld einfach leer und das Verzeichnis befindet sich unter:<br><code>/home/' . $username . '/Media/Comics</code>';

/* **********************************
 * plex install/reinstall modal
 ************************************/
$L['PLEX_CLAIM_MESSAGE']     = '<p style="font-size:12px">Um Ihren Plex Media Server zu beanspruchen, müssen Sie bereits über ein Konto verfügen und angemeldet sein, um den Beanspruchungscode zu erhalten von: <a href="https://www.plex.tv/claim/" rel="noopener nofollow" target="_blank" style="color:var(--qb-color-37);"><strong>https://www.plex.tv/claim/</strong></a></p><div class="alert alert-light-info fade show border-0 mb-2 mt-0" role="alert" style="font-size:12px;color:var(--qb-color-2)"><strong style="color:var(--qb-color-37)">HINWEIS:</strong> Es wird empfohlen, die Schaltfläche « In die Zwischenablage kopieren » im Bildschirm « Anspruchscode » zu verwenden, um dies sicherzustellen Korrekte Einfügung, da beim Anspruchscode die Groß-/Kleinschreibung beachtet wird.</div>';
$L['PLEX_CLAIM_TITLE']       = 'Plex Media Server-Installation';
$L['PLEX_CLAIM_TOKEN']       = 'Plex-Anspruchscode';
$L['PLEX_DATA_PATH']         = 'Benutzerdefinierten Pfad für Datenverzeichnis verwenden?';
$L['PLEX_DATA_PATH_TOOLTIP'] = 'Sie haben die Möglichkeit, einen benutzerdefinierten Datenpfad für Ihre Plex-Installation anzugeben. Wenn der ausgewählte Pfad derzeit nicht vorhanden ist, wird er automatisch für Sie generiert.<br>Wenn Sie alternativ lieber den Standardpfad verwenden möchten, behalten Sie einfach die Auswahl « Nein » bei und das Datenverzeichnis wird angezeigt befindet sich unter:<br><code>/home/' . $username . '/.config/\'Plex Media Server\'</code>';
$L['PLEX_DOMAIN']            = 'Domäne für Plex Media Server festlegen?';
$L['PLEX_DOMAIN_TOOLTIP']    = 'Wenn Sie bereits eine Domäne haben und die DNS-Einträge für eine Plex-Subdomäne eingerichtet sind, wählen Sie « Ja », um Ihre Plex-Subdomäne einzugeben.<br>Mit dieser Option wird Ihr Plex Media Server so konfiguriert Arbeiten Sie nahtlos mit Ihrer benutzerdefinierten Plex-Domäne. Dazu gehört die Einrichtung des wesentlichen Nginx-Reverse-Proxys und die Installation des SSL-Zertifikats für Ihre Domain, um einen sicheren Zugriff zu gewährleisten.';

/* **********************************
 * rutorrent plugin control modal
 ************************************/
$L['RUTORRENT_PLUGIN_CONTROL_TITLE'] = 'ruTorrent-Plugin-Steuerung';
$L['AUTHOR']                         = 'Autor';
$L['HELP_URL']                       = 'Dokumentation';

/* **********************************
 * wireguard install/reinstall modal
 ************************************/
$L['WIREGUARD_INSTALL_TITLE']                 = 'WireGuard installieren';
$L['WIREGUARD_REINSTALL_TITLE']               = 'WireGuard neu installieren';
$L['WIREGUARD_CLIENT_OR_SERVER']              = 'WireGuard-Client oder -Server?';
$L['WIREGUARD_CLIENT_OR_SERVER_TOOLTIP']      = 'Wenn Sie « Server » auswählen, wird WireGuard als Server installiert. Wenn Sie « Client » auswählen, wird WireGuard als Client installiert. Der Server wird zum Hosten eines VPN-Servers verwendet, während der Client zum Herstellen einer Verbindung mit einem VPN-Server verwendet wird. Wenn Sie « Client » auswählen, ist eine von Ihrem VPN-Anbieter bereitgestellte Konfigurationsdatei erforderlich, und der gesamte Datenverkehr wird über das VPN geleitet.';
$L['CLIENT']                                  = 'Client';
$L['SERVER']                                  = 'Server';
$L['WIREGUARD_CONFIG_TIPS']                   = 'Bitte laden Sie Ihre WireGuard-Server- oder Client-Konfigurationsdatei im Format <code>.conf</code> hoch.<br><ul><li>Für einen WireGuard-Server sollte die Datei Serverkonfigurationsdetails enthalten.</li><li>Für einen WireGuard-Client sollte die Datei Clientkonfigurationsdetails enthalten.</li></ul>Diese Dateien werden in <code>/srv/quickbox/db/wireguard/</code> gespeichert.<br><br>Die meisten VPN-Anbieter stellen eine Konfigurationsdatei für WireGuard bereit. Wenn Sie NordVPN verwenden, das nicht direkt eine Konfigurationsdatei bereitstellt, können Sie mit dem enthaltenen NordVPN-Konfigurationsgenerator eine erstellen.<br>Weitere Informationen zum Erstellen einer NordVPN-Konfigurationsdatei erhalten Sie mit dem Befehl <code>nvpn_conf_gen -h</code> in der CLI.';
$L['WIREGUARD_INSTALL_CONFIG']                = 'Laden Sie die WireGuard-Konfigurationsdatei hoch';
$L['WIREGUARD_INSTALL_PORT_LABEL']            = 'Abhörport';
$L['WIREGUARD_INSTALL_PORT_PH']               = '51820';
$L['WIREGUARD_INSTALL_CLIENT_COUNT_LABEL']    = 'Anzahl der Kunden';
$L['WIREGUARD_INSTALL_CLIENT_COUNT_PH']       = '1';
$L['WIREGUARD_INSTALL_CIDR_LABEL']            = 'CIDR';
$L['WIREGUARD_INSTALL_CIDR_PH']               = '10.8.0.1/24';
$L['WIREGUARD_INSTALL_ALLOWED_ADDRESS_LABEL'] = 'Für den Client zulässige IPs';
$L['WIREGUARD_INSTALL_ALLOWED_ADDRESS_PH']    = '0.0.0.0/0,::/0';
$L['WIREGUARD_INSTALL_ENDPOINT_LABEL']        = 'Endpunkt (optional)';
$L['WIREGUARD_INSTALL_ENDPOINT_PH']           = 'myserver.dyndns.org:51820';
$L['WIREGUARD_INSTALL_DNS_LABEL']             = 'DNS (optional)';
$L['WIREGUARD_INSTALL_DNS_PH']                = '1.1.1.1';
$L['WIREGUARD_INSTALL_POSTUP_RULE_LABEL']     = 'Post-Up-Regel';
$L['WIREGUARD_INSTALL_POSTUP_RULE_PH']        = 'iptables -A FORWARD -i %i -j ACCEPT; iptables -t nat -A POSTROUTING -o ' . $network_interface . ' -j MASQUERADE';
$L['WIREGUARD_INSTALL_POSTDOWN_RULE_LABEL']   = 'Post-Down-Regel';
$L['WIREGUARD_INSTALL_POSTDOWN_RULE_PH']      = 'iptables -D FORWARD -i %i -j ACCEPT; iptables -t nat -D POSTROUTING -o ' . $network_interface . ' -j MASQUERADE';
$L['PROCESSING_COMPLETE_INSTALLER']           = 'Verarbeitung abgeschlossen';
$L['TAP_TO_UNDO_INSTALLER']                   = 'Klicken Sie zum Rückgängigmachen';

/* **********************************
 * #3.2.5 - service control
 ************************************/
$L['ACTIVE_STATUS']   = 'aktiv (läuf)';
$L['APP_KEY']         = 'API Schlüssel';
$L['APP_PORT']        = 'Port';
$L['APP_STATUS']      = 'Status';
$L['INACTIVE_STATUS'] = 'inaktiv (tot)';

/* **********************************
 * #3.2.6 - rclone specific toggles
 ************************************/
$L['ACTIVE_MOUNTED']             = 'aktiv (montiert)';
$L['INACTIVE_NOTMOUNTED']        = 'tot (nicht montiert)';
$L['RCLONE_LOG_VIEWER']          = 'RClone move.log';
$L['RCLONE_OPTIONS']             = 'RClone-Optionen';
$L['RCLONE_COMMAND_CENTER']      = 'RClone Command Center';
$L['RCLONE_STATUS']              = 'RClone-Status';
$L['RCLONE_UPLOAD_MESSAGE']      = 'RClone arbeitet derzeit im Hintergrund, um Ihre Daten auf gdrive hochzuladen. Während dieser Zeit wird eine Sperre angezeigt, die bestätigt, dass der Vorgang gestartet wurde. Diese Sperre entfernt sich von selbst, sobald der Vorgang abgeschlossen ist. Sie können dieses Popup jederzeit schließen.<br/><br/><div class="alert alert-notice" style="color:#fff"><strong>HINWEIS: </strong> Der Upload erfolgt automatisch über einen Cronjob jede Nacht um 03:12 Uhr Serverzeit.</div>';
$L['RCLONE_UPLOAD_VIEWER']       = 'RClone Upload';
$L['RCMOUNT_STATUS']             = 'MergerFS-Status';
$L['RCMOUNT_WHERE']              = 'Eingebunden';
$L['CLOUD_MANAGEMENT']           = 'Cloud-Software';
$L['RCLONE_MOUNT_INFO']          = 'RClone Mount-Info';
$L['RCLONE MOUNT CHECK_PROCESS'] = 'Speicherplatzprozentwerte werden derzeit im Hintergrund berechnet. Bitte schauen Sie später noch einmal vorbei, um aktualisierte Ergebnisse zu erhalten.';

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
$L['DELUGE_TORRENTS']       = 'torrents in Deluge geladen';
$L['DISK_%_1']              = 'Du verwendest';
$L['DISK_%_2']              = 'deines gesamten festplattenspeichers';
$L['DISK_SPACE']            = 'Speicherplatz';
$L['FREE']                  = 'Frei';
$L['QBITTORRENT_TORRENTS']  = 'Torrents in qBittorrent geladen';
$L['RT_TORRENTS']           = 'Torrents in rTorrent geladen';
$L['NO_CLIENTS']            = 'Derzeit sind keine torrent- oder nzb-clients installiert';
$L['SIZE']                  = 'Größe';
$L['CURRENT_USERS_ONLINE']  = 'Benutzer Derzeit Online';
$L['THERE_ARE']             = 'Es sind';
$L['TRANSMISSION_TORRENTS'] = 'Torrents in Transmission geladen';
$L['USED']                  = 'Belegt';
$L['YOUR_DISK_STATUS']      = 'Dein Festplattenstatus';
$L['NZBGET_NZB']            = 'nzb geladen in NZBGet';
$L['SABNZBD_NZB']           = 'nzb geladen in SABnzbd';

/* **********************************
 * #3.3.2 - System Index v1 : bandwidth data widget
 ************************************/
$L['BANDWIDTH_DAILY']    = 'Täglich';
$L['BANDWIDTH_DATA']     = 'Bandbreite Data';
$L['BANDWIDTH_HOURLY']   = 'Stündlich';
$L['BANDWIDTH_LIVE']     = 'Live';
$L['BANDWIDTH_MONTHLY']  = 'Monatlich';
$L['datefmt_days_img']   = '%d';
$L['datefmt_days']       = '%d %B';
$L['datefmt_hours_img']  = '%l';
$L['datefmt_hours']      = '%l%p';
$L['datefmt_months_img'] = '%b';
$L['datefmt_months']     = '%B %Y';
$L['datefmt_top']        = '%d %B %Y';
$L['NETWORK']            = 'Netzwerk';
$L['DOWNLOAD']           = 'Download';
$L['UPLOAD']             = 'Hochladen';

/* **********************************
 * #3.3.3 - System Index v1 : server load widget
 ************************************/
$L['DAYS_L']      = 'Tage';
$L['HOURS_L']     = 'Stunden';
$L['MINUTES_L']   = 'min.';
$L['SECONDS_L']   = 'sek.';
$L['SERVER_LOAD'] = 'Server-Last';
$L['SL_TXT']      = 'Aktuelle Durchschnittsbelastung deines Servers';
$L['UPTIME']      = 'Betriebszeit';

/* **********************************
 * #3.3.4 - System Index v1 : memory status widget
 ************************************/
$L['CACHED_MEMORY']     = 'Gecachte Speichernutzung';
$L['CLEAR_CACHE']       = 'Lösche Cache-Speicher';
$L['CM_BUFFERS']        = 'Zwischenspeicher liegen bei';
$L['CM_USAGE']          = 'Cache Speichernutzung liegt bei';
$L['PHYSICAL_MEMORY']   = 'Physikalisch genutzter Speicher';
$L['PM_IDLE']           = 'frei';
$L['PM_USED']           = 'belegt';
$L['REAL_MEMORY']       = 'Tatsächliche Speichernutzung';
$L['RM_FREE']           = 'Tatsächlich freier Speicher';
$L['RM_USAGE']          = 'Tatsächlich verwendeter Speicher';
$L['SWAP_IDLE']         = 'frei';
$L['SWAP_TOTAL']        = 'gesamt';
$L['SWAP_USAGE']        = 'Swap-Nutzung';
$L['SWAP_USED']         = 'belegt';
$L['SWAP_ZONE']         = 'SWAP Bereich';
$L['SYSTEM_RAM_STATUS'] = 'Arbeitsspeicher Status';
$L['TOTAL_RAM']         = 'Gesamter Arbeitsspeicher';
$L['TOTAL']             = 'Gesamt';

/* **********************************
 * #3.3.5 - server activity widget
 ************************************/
$L['ACC_REQ_ACT']         = 'Konten müssen aktiviert werden';
$L['GUESTS_ONLINE']       = 'Gäste online';
$L['LAST_ACTIVE_ON']      = 'war zuletzt aktiv am';
$L['LOGGED_ON']           = 'Eingeloggt';
$L['MEMBERS']             = 'Mitglieder';
$L['RECORD_ONLINE']       = 'Benutzer online aufzeichnen';
$L['THERE_ARE_AW']        = 'Es gibt';
$L['THERE_ARE_CURRENTLY'] = 'Derzeit gibt es';
$L['USERS_AND']           = 'Benutzer und';
$L['USERS_LAST_VISIT']    = 'neue Benutzer haben sich seit Ihrem letzten Besuch registriert';
$L['CLEAR']               = 'klar';

/* ********************************************************************************
 * #4 PAGES
 *
 * #4.1 - START SCREEN FORMS (login/forgot pass/register/account)
 *
 * #4.1.1 - LOGIN
 ************************************/
$L['CONFIRM_PASS_FIELD_PLACE'] = 'Bitte bestätige deine E-Mail-Adresse.';
$L['CREATE_ACCOUNT']           = 'Ein Konto erstellen';
$L['REMEMBER_ME']              = 'Erinnere Mich';
$L['FORGOT_PASS']              = 'Passwort vergessen?';
$L['LOG_IN']                   = 'Einloggen';
$L['LOGIN_ACCOUNT']            = 'Logge dich in dein Konto ein, um fortzufahren.';
$L['LOGIN_USERNAME_INVALID']   = 'Anmeldung ist ungültig. Bitte überprüfen Sie Ihren Benutzernamen und versuchen Sie es erneut';
$L['LOGIN_PASSWORD_INVALID']   = 'Anmeldung ist ungültig. Bitte überprüfen Sie Ihr Passwort und versuchen Sie es erneut';
$L['LOGIN_MISSING_USERNAME']   = 'Benutzername nicht eingegeben';
$L['LOGIN_MISSING_PASSWORD']   = 'Passwort nicht eingegeben';
$L['PASS_FIELD_INVALID']       = 'Falsches Passwort!';
$L['PASS_FIELD_PLACE']         = 'Bitte gib dein Passwort ein.';
$L['PASS_FIELD_VALID']         = 'Password provided, validation ready.';
$L['REGISTRATION_DISABLED']    = 'Die Registrierung ist derzeit deaktiviert.';
$L['SIGN_IN']                  = 'Anmelden';
$L['UNREGISTERED']             = 'Noch nicht registriert?';
$L['USER_FIELD_INVALID']       = 'Falscher Benutzername!';
$L['USER_FIELD_PLACE']         = 'Bitte gib deinen Benutzernamen ein.';
$L['USER_FIELD_VALID']         = 'Benutzername angegeben, Validierung bereit.';
$L['ACCOUNT_BANNED']           = 'Ihr Konto wurde gesperrt.<br/>Bitte wenden Sie sich an einen Systemadministrator.';
$L['ACCOUNT_DISABLED']         = 'Ihr Konto ist nicht aktiviert oder deaktiviert.<br/>Wenn Sie glauben, dass dies ein Problem ist, wenden Sie sich bitte an einen Systemadministrator.';
$L['ACCOUNT_INACTIVE_ADMIN']   = 'Ihr Konto wurde nicht von einem Administrator aktiviert.';
$L['ACCOUNT_INACTIVE_EMAIL']   = 'Ihr Konto wurde nicht aktiviert.<br/>Bitte überprüfen Sie Ihre E-Mail auf den Aktivierungslink.';
$L['IP_BANNED']                = 'Ihre IP-Adresse wurde gesperrt.<br/>Bitte wenden Sie sich an einen Systemadministrator.';

/* **********************************
 * #4.1.2 - FORGOT PASSWORD
 ************************************/
$L['EMAIL_FIELD_INVALID']      = 'Falsche E-Mail-Adresse!';
$L['EMAIL_FIELD_PLACE']        = 'Bitte gib deine E-Mail-Adresse ein.';
$L['EMAIL_FIELD_VALID']        = 'E-Mail bereitgestellt, Validierung bereit.';
$L['PASS_GENERATED']           = 'Neues Passwort generiert !';
$L['PASS_GENERATED_INFO']      = 'Ihr neues Passwort wurde generiert und an die mit Ihrem Konto verknüpfte E-Mail gesendet.';
$L['PASS_GENERATED_FAIL']      = 'Neues Passwort fehlgeschlagen!';
$L['PASS_GENERATED_FAIL_INFO'] = 'Beim Senden der E-Mail mit dem neuen Passwort ist ein Fehler aufgetreten, daher wurde Ihr Passwort nicht geändert.';
$L['RECOVER_INFO']             = 'Geben Sie Ihre E-Mail-Adresse ein und Anweisungen werden Ihnen zugesandt!';
$L['RECOVER']                  = 'Passwortwiederherstellung';
$L['PASSWORD_RESET']           = 'Passwort zurücksetzen';
$L['CONFIRM_PASSWORD']         = 'Passwort bestätigen';

/* **********************************
 * #4.1.3 - REGISTER
 ************************************/
$L['ACCOUNT_CREATED']           = 'Ihr Konto wurde erstellt. ';
$L['ACTIVATED_USER']            = 'Aktivierter Benutzer ';
$L['CAN_LOGIN']                 = 'für Ihre Registrierung. Sie dürfen sich jetzt anmelden';
$L['CREATED_ADM_ACT']           = 'Dieses Board erfordert jedoch eine Kontoaktivierung durch einen Administrator. Sie werden per E-Mail benachrichtigt, wenn Ihr Konto aktiviert wurde';
$L['CREATED_CHECK_EMAIL']       = 'Bitte überprüfen Sie Ihre E-Mail für weitere Informationen';
$L['CREATED_EMAIL_ACT']         = 'Dieses Board erfordert jedoch eine Kontoaktivierung. Ein Aktivierungsschlüssel wurde an die von Ihnen angegebene E-Mail-Adresse gesendet.';
$L['EMAIL_EMPTY']               = 'E-Mail nicht eingetragen';
$L['EMAIL_INVALID']             = 'E-Mail ist ungültig';
$L['EMAIL_MATCH']               = 'E-Mail-Adressen stimmen nicht überein';
$L['EMAIL_TAKEN']               = 'E-Mail-Adresse bereits registriert';
$L['RCONF_EMAIL_FIELD_INVALID'] = 'Diese E-Mail stimmt nicht mit der zuvor eingegebenen überein. Bitte versuche es erneut.';
$L['RCONF_EMAIL_FIELD_VALID']   = 'E-Mails stimmen überein, Validierung bereit.';
$L['RCONF_PASS_FIELD_INVALID']  = 'Dieses Passwort stimmt nicht mit dem zuvor eingegebenen überein. Bitte versuche es erneut.';
$L['RCONF_PASS_FIELD_VALID']    = 'Passwörter übereinstimmen, Validierung bereit.';
$L['REG_C_DISABLED_INFO1']      = 'aber die Registrierung auf dieser Seite ist derzeit deaktiviert';
$L['REG_C_DISABLED_INFO2']      = 'Bitte versuchen Sie es später noch einmal oder kontaktieren Sie den Serverbesitzer';
$L['REG_C_DISABLED']            = 'Registrierung ist derzeit deaktiviert';
$L['REG_DISABLED_ALT']          = 'Registrierung ist derzeit deaktiviert.';
$L['REG_DISABLED_INFO']         = 'Es tut uns leid, aber die Registrierung ist derzeit deaktiviert. Bitte versuchen Sie es später noch einmal.';
$L['REG_DISABLED']              = 'Registrierung deaktiviert';
$L['REG_FORM_INFO']             = 'Bitte füllen Sie das folgende Formular aus, um ein Konto zu erstellen';
$L['REGISTERED_TXT']            = 'Registriert!';
$L['REG_FAILED']                = 'Registrierung fehlgeschlagen';
$L['REG_ERROR_INFO_1']          = 'Es tut uns leid, aber es ist ein Fehler aufgetreten und Ihre Registrierung für den Benutzernamen ';
$L['REG_ERROR_INFO_2']          = ' konnte nicht abgeschlossen werden. Bitte versuchen Sie es später noch einmal.';
$L['SORRY']                     = 'Es tut uns leid';
$L['THANKS']                    = 'Danke';
$L['USERNAME_EMPTY']            = 'Benutzername nicht eingegeben';
$L['USERNAME_BELOW']            = 'Benutzername unten ';
$L['USERNAME_ABOVE']            = 'Benutzername oben';
$L['CHARACTERS']                = 'Zeichen';
$L['USERNAME_REQUIREMENTS']     = 'Benutzername entspricht nicht den Anforderungen';
$L['USERNAME_WORD_RESERVED']    = 'Benutzername reserviertes Wort';
$L['USERNAME_TAKEN']            = 'Benutzername wird bereits verwendet';
$L['USERNAME_DISALLOWED']       = 'Benutzername nicht erlaubt';
$L['REG_IP_BANNED']             = 'IP-Adresse gesperrt';
$L['PASSWORD_EMPTY']            = 'Passwort nicht eingegeben';
$L['PASSWORD_SHORT']            = 'Passwort zu kurz';
$L['PASSWORD_LONG']             = 'Passwort zu lang';
$L['PASSWORD_MATCH']            = 'Passwörter stimmen nicht überein';
$L['QUOTA_EMPTY']               = 'Festplattenquote nicht eingegeben';

/* **********************************
 * #4.1.4 - ACCOUNT
 ************************************/
$L['ADMIN_EDIT_ACC'] = 'Admin-Konto bearbeiten';
$L['EDIT_ACCOUNT']   = 'Konto bearbeiten';
$L['USER_LINKS']     = 'Benutzerlinks';
$L['ADMIN_LINKS']    = 'Admin-Links';
$L['Q_APP_DASH']     = 'QuickBox-Software-Dashboard';
$L['Q_SYS_DASH']     = 'QuickBox-System-Dashboard';
$L['RESET_PASS']     = 'Passwort zurücksetzen';
$L['RESET_PASSWORD'] = 'Setze dein Passwort zurück';
$L['USER_PROFILE']   = 'Benutzerprofil';
$L['PWD_CHANGE']     = 'Passwort geändert';
$L['EMAIL_CHANGE']   = 'E-Mail geändert';

/* **********************************
 * #4.1.4.1 - quotes
 ************************************/
$L['DAYUM']               = 'groß';
$L['HEY']                 = 'Hallo';
$L['HOW_AWESOME']         = 'Wie bist du so cool geworden?';
$L['LOOK_GOOD']           = 'Schaut gut aus!';
$L['QUICKBOX_DEDICATION'] = 'wir freuen uns über dein Interesse an der QuickBox.';
$L['SO_GLAD']             = 'Ich bin so froh, dass du hier bist.';
$L['WITHOUT_YOU']         = 'was wäre ich ohne dich!';

/* **********************************
 * #4.1.4.2 - edit account modal
 ************************************/
$L['CONFIRM_NEW_PASS_INFO'] = 'Bitte bestätigen Sie Ihr neues Passwort.';
$L['CURRENT_PASS']          = 'Aktuelles Passwort';
$L['NEW_EMAIL']             = 'Neue E-Mail-Adresse';

/* **********************************
 * #4.1.5 - SUMMARY
 ************************************/
$L['AWESOME']             = 'Super';
$L['REGI_FAIL_ERR_FOUND'] = 'Fehler gefunden';
$L['REGI_FAIL_ERR1']      = 'Es tut uns leid, aber ein Fehler ist aufgetreten und Ihre Registrierung für den Benutzernamen';
$L['REGI_FAIL_ERR2']      = 'konnte nicht abgeschlossen werden';
$L['REGI_FAIL_ERR3']      = 'Bitte versuchen Sie es erneut';
$L['REGI_FAIL']           = 'Registrierung fehlgeschlagen';
$L['RETURN_PREVIOUS']     = 'Zurück zur vorherigen Seite';
$L['USER_ADDED_TO_DB']    = 'wurde zur Datenbank hinzugefügt';
$L['WITH_PASSWORD']       = 'mit Passwort';

/* **********************************
 * #4.2 - SETTINGS
 *
 * #4.2.1 - GENERAL SETTINGS
 ************************************/
$L['ACCOUNT_PAGE']                = 'Kontoseite';
$L['ACTIVATION_IP']               = 'Aktivierungs-IP';
$L['ACTIVATION_NEED_D_DO']        = 'Mach es hier!';
$L['ACTIVATION_NEED_D']           = 'Hol dir einen hier!';
$L['ACTIVATION_NEED_G_GET']       = 'Holen Sie sich hier eins!';
$L['ACTIVATION_NEED_G']           = 'Brauchst du einen API-Schlüssel?';
$L['ACTIVATION_TIME']             = 'Aktivierungszeit';
$L['ADD_DASH_SETTINGS']           = 'Addidtionnal Dashboard Settings';
$L['ADMIN_HOME']                  = 'Admin-Startseite';
$L['API_ACTIVE']                  = 'Aktiv';
$L['API_KEY']                     = 'API-Schlüssel';
$L['API_NOT_ACTIVE']              = 'Nicht Aktiv';
$L['API_PLACE']                   = 'Gebe den API-Schlüssel hier ein...';
$L['API_SETTINGS']                = 'API-Kontrolle';
$L['API_STATUS']                  = 'API-Status';
$L['API']                         = 'API';
$L['CONF_SETTINGS']               = 'Konfigurationseinstellungen';
$L['DASH_URL_SETTINGS']           = 'Dashboard-URL-Einstellungen';
$L['DEFAULT_PAGE']                = 'Startseite';
$L['DISK_MOUNT']                  = 'Festplatte Einbinden (Eingebunden)';
$L['EDIT_GEN_SETTINGS']           = 'Allgemeine Seiteneinstellungen bearbeiten';
$L['EMAIL_FROM_ADDR']             = 'Seiten E-Mail Adresse';
$L['EMAIL_FROM NAME']             = 'E-Mail-Alias';
$L['EMAIL_SETTINGS']              = 'E-Mail-Einstellungen';
$L['LOGIN_PAGE']                  = 'Anmeldeseite';
$L['NET_ADAPTER']                 = 'Netzwerkschnittstelle';
$L['PHP_DATE_FORMAT']             = 'PHP Datumsformat';
$L['PHP_FORMAT_SETTINGS']         = 'PHP-Formateinstellungen';
$L['PHP_TIME_ZONE']               = 'PHP-Zeitzone';
$L['SITE_DESC']                   = 'Seitenbeschreibung';
$L['SITE_META_SETTINGS']          = 'Site Meta Settings';
$L['SITE_NAME']                   = 'Websitenname';
$L['SITE_ROOT']                   = 'Webadresse';
$L['SITE_NAME_TOOLTIP']           = 'Der Site-Name sollte weniger als 40 Zeichen umfassen und nur alphanumerisch ohne Sonderzeichen sein (Leerzeichen sind zulässig).';
$L['SITE_DESC_TOOLTIP']           = 'Die Site-Beschreibung sollte weniger als 120 Zeichen umfassen und nur alphanumerisch ohne Sonderzeichen sein (Leerzeichen sind zulässig)';
$L['EMAIL_FROM_NAME_TOOLTIP']     = 'Von Name sollte weniger als 60 Zeichen lang sein und nur alphanumerisch ohne Sonderzeichen sein (Leerzeichen sind zulässig)';
$L['SITE_ROOT_TOOLTIP']           = 'Geben Sie Ihre Server-IP oder gültige Domain ohne abschließenden Schrägstrich ein. Beispiel: https://192.168.0.1 (oder) https://somedomain.com';
$L['SITE_LOGO_COLLAPSED']         = 'Reduziertes Logo';
$L['SITE_LOGO_FULL']              = 'Vollständiges Logo';
$L['SITE_LOGO_SETTINGS']          = 'Site-Logo-Einstellungen';
$L['SITE_LOGO_COLLAPSED_TOOLTIP'] = 'Dies ist das Logo, das angezeigt wird, wenn die Seitenleiste eingeklappt ist, und das als Browser-Tab-Symbol verwendet wird.';
$L['SITE_LOGO_FULL_TOOLTIP']      = 'Dies ist das Logo, das angezeigt wird, wenn die Seitenleiste erweitert wird.';

/* **********************************
 * #4.2.2 - EMAIL SETTINGS
 ************************************/
$L['SMTP_AUTH']     = 'Aktivieren Sie die SMTP-Authentifizierung';
$L['SMTP_SECURE']   = 'Aktivieren Sie die SSL-Verschlüsselung. TLS wird auch mit Port 465 akzeptiert';
$L['MAIL_HOST']     = 'Stellen Sie den SMTP-Server zum Senden ein';
$L['MAIL_PORT']     = 'TCP-Port, zu dem eine Verbindung hergestellt werden soll';
$L['MAIL_USERNAME'] = 'SMTP-Benutzername';
$L['MAIL_PASS']     = 'SMTP-Passwort';

/* **********************************
 * #4.2.3 - SESSION SETTINGS
 ************************************/
$L['CHANGE_SESSION_SETTINGS'] = 'Ändern der Einstellungen für die Sitzung.';
$L['COOKIE_EXPIRY']           = '\'Erinnere dich an mich\' Cookie Ablaufdatum';
$L['COOKIE_PATH']             = 'Cookie-Pfad';
$L['DAYS']                    = 'Tage';
$L['GUEST_TIMEOUT']           = 'Gäste-Timeout';
$L['MINUTES']                 = 'Minuten';
$L['RESET_EXPIRY']            = 'Ablaufdatum bei der Anmeldung zurücksetzen';
$L['USER_TIMEOUT']            = 'Timeout bei Inaktivität des Benutzers';

/* **********************************
 * #4.2.4 - USER SETTINGS
 ************************************/
$L['ALLOW_MULTI_LOGINS']                   = 'Mehrere Anmeldungen';
$L['ALLOW_MULTI_LOGINS_DESC']              = 'Diese Option ermöglicht gleichzeitige Anmeldungen von mehreren Geräten. Wenn deaktiviert, wird der Benutzer von allen anderen Geräten abgemeldet, wenn er sich von einem neuen Gerät aus anmeldet.';
$L['ALLOW_CONFIG_EDITING']                 = 'Editoren im Dashboard konfigurieren';
$L['ALLOW_CONFIG_EDITING_DESC']            = 'Diese Option ermöglicht die Bearbeitung der Konfigurationsdateien vom Dashboard aus. Wenn deaktiviert, wird die Option zum Anzeigen/Bearbeiten von Konfigurationen ausgeblendet.';
$L['ALLOW_MOUNT_INFO']                     = 'Überwachung und Hinzufügen von Panels bereitstellen';
$L['ALLOW_MOUNT_INFO_DESC']                = 'Mit dieser Option können Benutzer Verzeichnisse zur Überwachung über das Dashboard anzeigen und hinzufügen. Wenn deaktiviert, wird die Möglichkeit zum Anzeigen und Hinzufügen von Verzeichnissen ausgeblendet.';
$L['ALLOW_AUTOBACKUP_APP_ON_INSTALL']      = 'App bei Installation automatisch sichern';
$L['ALLOW_AUTOBACKUP_APP_ON_INSTALL_DESC'] = 'Diese Option ermöglicht die automatische vollständige Sicherung der Anwendung bei der Installation. Wenn diese Option deaktiviert ist, werden Anwendungen bei der Installation nicht gesichert. <span style="color:var(--qb-color-41);">Anwendungskonfigurationsdateien werden unabhängig von dieser Einstellung gesichert.</span><br>Sicherungen werden gespeichert unter:<br><code>/home/[BENUTZERNAME]/.QuickBox/software/</code>';
$L['BY_ADMIN']                             = 'Von Admin (siehe unten...)';
$L['BY_USER']                              = 'Nach Benutzer (Siehe Benutzer-Admin-Seiten)';
$L['CHANGE_USER_SETTINGS']                 = 'Ändere die globalen Einstellungen für Benutzerkonten.';
$L['EXCLUDE_ADMINS']                       = 'Administratoren ausschließen';
$L['EXCLUDE_REDIRECTED_ADMINS']            = 'Schließe Admins davon ab, umgeleitet zu werden.';
$L['GEN_USER_SETTINGSTINGS']               = 'Allgemeine Benutzereinstellungen';
$L['HOW_SET']                              = 'Wie eingestellt sind diese?';
$L['INDIV_USER_HOME']                      = 'Individuelle Benutzerhomepages';
$L['INDIVIDUAL_USER_FOLDERS']              = 'Einzelne Benutzerordner';
$L['PATH_ADMIN']                           = 'Pfad (von Administrator festgelegt)';
$L['SITE_ROOT_RELATIVE']                   = 'Root-Verzeichnis Relativ';
$L['SETTING']                              = 'Einstellung';
$L['DESCRIPTION']                          = 'Beschreibung';
$L['VALUE']                                = 'Wert';

/* **********************************
 * #4.2.5 - SECURITY SETTINGS
 ************************************/
$L['BAN_IP_ADDRESS']       = 'IP-Adresse blockieren / sperren';
$L['BAN_IP_INFO']          = 'z.B. 192.168.0.1 ohne führende Nullen';
$L['BAN_IP_REGISTER']      = 'IP-Adressen von der Registrierung abmelden (oder anmelden)';
$L['BANNED_IP_ADDRESSES']  = 'Gebannte IP-Adressen';
$L['DISALLOW_USERNAME']    = 'Benutzername nicht zulassen';
$L['DISALLOWED_USERNAME']  = 'Unzulässiger Benutzername';
$L['DISALLOW_USERNAMES']   = 'Benutzernamen nicht zulassen';
$L['DISALLOWED_USERNAMES'] = 'Nicht erlaubte Benutzernamen';
$L['PREVENT_USERNAMES']    = 'Verhindern, dass Benutzernamen registriert werden';

/* **********************************
 * #4.3 - USER MANAGEMENT
 *
 * #4.3.1 - REGISTRATION SETTINGS
 ************************************/
$L['ACCOUNT_ACTIVATION']           = 'Account Aktivierung';
$L['ADMIN_ACT']                    = 'Administratoraktivierung';
$L['ADMIN_ACT_INFO']               = 'Wenn diese Option ausgewählt ist, wird der Benutzer nach der Registrierung darüber informiert, dass er warten muss, bis der Administrator das Konto aktiviert. Auch der Benutzer erhält eine entsprechende E-Mail sowie der Administrator, der dann die Möglichkeit hat, den Benutzer über den in der E-Mail angegebenen Link zu aktivieren oder das Administrationspanel zu besuchen und den Benutzer dort zu aktivieren.';
$L['ALPHANUMERIC_ONLY']            = 'Nur alphanumerisch';
$L['ALPHANUMERIC_SPACERS']         = 'Alphanumerische Abstandshalter';
$L['ANY_CHARS']                    = 'Alle Zeichen';
$L['ANY_LETTER_NUM']               = 'Jeder Buchstabe und Nummer';
$L['DEFAULT_QUOTA_ALLOWANCE']      = 'Standardkontingent';
$L['DEFAULT_QUOTA_ALLOWANCE_INFO'] = 'Legen Sie einen Standardkontingentbetrag für neu erstellte Konten fest. Dieser Wert wird nur verwendet, wenn das Linux-Kontingentpaket installiert ist.';
$L['DISABLE_REGISTRATION']         = 'Deaktiviere die Registrierung';
$L['DISABLE_REGISTRATION_INFO']    = 'Dies deaktiviert die Registrierung. Das Registrierungsformular wird nicht angezeigt und durch eine Informationsnachricht ersetzt.';
$L['ENABLE_CAPTCHA']               = 'Aktiviere das Captcha';
$L['LETTER_NUM_AND_SPACE']         = 'Buchstabe, Nummer und Leerzeichen';
$L['LIMIT_CHAR']                   = 'Beschränkung der Zeichen für den Benutzernamen';
$L['NO_ACTIVATION']                = 'Keine Aktivierung (sofortiger Zugriff)';
$L['NO_ACTIVATION_INFO']           = 'Das Setzen dieser Option ermöglicht es dem Benutzer, sich normal zu registrieren, ohne dass ein zusätzlicher Aktivierungsprozess erforderlich ist.';
$L['PASSWORD_LENGTH']              = 'Passwortlänge';
$L['RECOMMENDED']                  = 'QuickBox Empfohlen';
$L['REG_SETTINGS_INFO']            = 'Ändere die Einstellungen bezüglich der Registrierung auf der Site.';
$L['REG_SETTINGS']                 = 'Registrierungseinstellungen';
$L['SEND_WELCOME_EMAIL']           = 'Sende eine Willkommens-E-Mail';
$L['SEND_WELCOME_EMAIL_YES_INFO']  = 'Wenn Sie diese Option auf Ja setzen, werden sowohl dem Benutzer als auch dem Systemadministrator Willkommens-E-Mails gesendet. Diese Option erfordert eine SMTP-Einrichtung zum ordnungsgemäßen Senden von E-Mails. Diese Optionen können auf der Seite <a href="/email-settings.php" style="color: var(--qb-color-29);text-decoration: underline;">E-Mail-Einstellungen</a> gesteuert werden.';
$L['SEND_WELCOME_EMAIL_NO_INFO']   = 'Wenn Sie diese Option auf Nein setzen, werden keine Willkommens-E-Mails an neu registrierte Benutzer versendet. Die gesamte Benutzererstellung/-registrierung bleibt still, ähnlich wie die Benutzererstellung innerhalb der CLI-Umgebung.';
$L['USER_ACT']                     = 'Benutzeraktivierung (E-Mail-Bestätigung)';
$L['USER_ACT_INFO']                = 'Das Setzen dieser Option erfordert, dass der Benutzer sein Konto aktiviert, indem er auf einen Link klickt, der an seine registrierte E-Mail-Adresse gesendet wird.';
$L['USERNAME_LENGTH']              = 'Benutzernamen länge';
$L['USERNAME_LOWERCASE']           = 'Benutzername Kleinbuchstaben';
$L['USERNAME_LOWERCASE_YES_INFO']  = 'Das Setzen dieser Option auf Ja ändert alle neu registrierten Benutzernamen in Kleinbuchstaben. Dies ist die empfohlene Option.';
$L['USERNAME_LOWERCASE_NO_INFO']   = 'Wenn Sie diese Option auf Nein setzen, werden neu registrierte Benutzernamen nicht in Kleinbuchstaben geändert. Benutzernamen werden so angezeigt, wie sie registriert sind, behalten jedoch Kleinbuchstaben in der Serverumgebung bei, um eine ordnungsgemäße Softwarefunktionalität zu gewährleisten.';

/* **********************************
 * #4.3.2 - USER ADMINISTRATION
 ************************************/
$L['ADMIN_ANNOUNCE']        = 'Admin-Ankündigung';
$L['AWAITING_ADMIN']        = 'Warten auf Admin-Aktivierung';
$L['AWAITING_EMAIL']        = 'Warten auf E-Mail-Aktivierung';
$L['BANNED']                = 'Verboten';
$L['CU_CONFIRM_EMAIL_INFO'] = 'Bitte bestätigen Sie die E-Mail';
$L['CU_CONFIRM_EMAIL']      = 'Bestätigungs-Email';
$L['CU_CONFIRM_PASS_INFO']  = 'Bitte bestätige dein Passwort';
$L['CU_CONFIRM_PASSWORD']   = 'Bestätige das Passwort';
$L['CU_DISK_QUOTA']         = 'Datenträgerkontingent:';
$L['CU_GROUP']              = 'Gruppe';
$L['CU_EMAIL']              = 'Email';
$L['CU_NEW_PASS_INFO']      = 'Bitte gebe dein neues Passwort ein';
$L['CU_NEW_PASSWORD']       = 'Neues Passwort';
$L['CU_SHELL_ENV']          = 'Bevorzugte Shell-Umgebung';
$L['CURRENT_SHELLS']        = 'Aktuelle Shell';
$L['CURRENT_USERS']         = 'Derzeitige Nutzer';
$L['DEFAULT_GROUP_TAG']     = 'standard';
$L['DELETED_ALL_SESSIONS']  = 'Alle Sitzungen gelöscht';
$L['DISK_STATUS']           = 'Festplattenstatus';
$L['EDIT_USER_SHELL']       = 'Bearbeiten Sie die Benutzer-Shell-Umgebung';
$L['EXPIRY']                = 'Ablauf';
$L['HAS_USED']              = 'hat benutzt';
$L['IP_ADDRESS']            = 'IP Adresse';
$L['LAST_IP_ADDRESS']       = 'Letzte IP-Adresse';
$L['LAST_LOGIN']            = 'Letzte Anmeldung';
$L['LAST']                  = 'Zuletzt';
$L['MEMBER_STATUS']         = 'Mitgliederstatus';
$L['MEMBER_GROUP']          = 'Mitgliedergruppe';
$L['OF_QUOTA']              = 'ihrer Gesamtquote';
$L['RECENTLY_ONLINE']       = 'Kürzlich online';
$L['REGISTERED_DISK_QUOTA'] = 'Festplattenkontingent';
$L['REGISTERED']            = 'Eingetragen';
$L['REGISTRATION_LOGIN']    = 'Registrierung und Anmeldung';
$L['STATISTICS']            = 'Statistiken';
$L['USER_ACTIVITY']         = 'Benutzeraktivität';
$L['PASSWORD_NOTICE']       = 'Das Passwort darf die folgenden Zeichen nicht enthalten';
$L['USER_QUOTA_HELP']       = 'Geben Sie die Menge an Speicherplatz ein, die Sie einem Benutzer zuweisen möchten. Um diese Option nutzen zu können, müssen Kontingente installiert werden.';
$L['USER_SHELL_HELP']       = 'Wählen Sie die Dropdown-Liste unten aus, um den Benutzer zu einer Shell hinzuzufügen ...';
$L['USERNAME_ADMIN_USER']   = 'Nutzername:';
$L['USERNAMES']             = 'Nutzername';
$L['USERS_AWAITING']        = 'Benutzer warten auf Aktivierung';
$L['USERS_SESSIONS']        = 'Benutzersitzungen';

/* **********************************
 * #4.3.2.1 - admin user edit
 ************************************/
$L['ACTIONS']                 = 'Aktionen';
$L['ACTIVE_SESSION']          = 'Aktive Sitzung';
$L['APPLICATION']             = 'Software';
$L['BANNED_USER']             = 'Gesperrter Benutzer';
$L['CURRENT_FULL_PATH']       = 'Aktueller vollständiger Pfad';
$L['CURRENT_GROUPS']          = 'Aktuelle Gruppen';
$L['CURRENT_STATUS']          = 'Aktuelle Status';
$L['EDIT_DEFAULT_GROUP']      = 'Standardgruppe';
$L['EDIT_DEFAULT_GROUP_INFO'] = 'Wenn diese Option ausgewählt ist, wird sie als Standardgruppe festgelegt. Dies ist nützlich, wenn Sie Benutzer über die CLI erstellen und eine benutzerdefinierte Gruppe als Standard zugewiesen haben möchten.';
$L['EDIT_GROUP_MEMBERSHIP']   = 'Bearbeite die Gruppenmitgliedschaft des Benutzers';
$L['EU_PATH']                 = 'Pfad';
$L['GENERAL_INFO']            = 'Allgemeine Information';
$L['GROUP_MEMBERSHIP_HELP']   = 'Klicke auf das Textfeld unten, um den Benutzer zu weiteren Gruppen hinzuzufügen...';
$L['GROUP_MEMBERSHIP']        = 'Gruppenmitgliedschaft';
$L['HOMEPAGE']                = 'Startseite';
$L['INSTRUCTIONS']            = 'Anleitung';
$L['LAST_ACTIVE_IP']          = 'Letzte aktive IP';
$L['LAST_ACTIVE']             = 'letzte Aktivität';
$L['LAST_UPDATE']             = 'Letztes Update';
$L['PERSISTENT']              = 'Hartnäckig';
$L['REGISTERED_IP']           = 'Registrierte IP';
$L['SESSION_EXPIRY']          = 'Ablauf der Sitzung';
$L['STATUS']                  = 'Status';
$L['UNBANNED_USER']           = 'Benutzer nicht gesperrt';
$L['UNIQUE_USER_HP_SETTINGS'] = 'Unique User Homepage - Einstellungen';
$L['USER_EDIT1']              = 'Benutzer bearbeiten :';
$L['USER_EDIT2']              = 'Benutzer bearbeiten';
$L['SELECT_GROUP']            = 'Gruppe auswählen';

/* **********************************
 * #4.3.2.2 - admin announce
 ************************************/
$L['ENABLE_USER_ANNOUNCE']          = 'Dashboard-Ankündigung aktivieren';
$L['ANNOUNCEMENT_HISTORY']          = 'Ihre vorherigen Ankündigungen';
$L['TYPE']                          = 'Typ';
$L['USER']                          = 'Benutzer';
$L['TIME']                          = 'Zeit';
$L['ANNOUNCEMENT_LIST']             = 'Ankündigungsinhalt';
$L['GLOBAL_USER_ANNOUNCEMENT']      = 'Global (alle Benutzer)';
$L['CREATE_DASHBOARD_ANNOUNCEMENT'] = 'Dashboard-Ankündigung erstellen';
$L['GLOBAL_ANNOUNCEMENT']           = 'Globale Ankündigung';
$L['GLOBAL_ANNOUNCEMENT_INFO']      = 'Durch Auswahl dieser Option wird eine globale Ankündigung erstellt, die auf dem Dashboard jedes Benutzers sichtbar ist, unabhängig von seiner Gruppenmitgliedschaft. Wenn Sie einem Benutzer bereits eine Ankündigung zugewiesen haben, wird diese neben dieser globalen Ankündigung angezeigt.';
$L['SELECT_USER']                   = 'Benutzer auswählen:';
$L['SELECT_ANNOUNCEMENT_TYPE']      = 'Ankündigungstyp:';
$L['EDIT_DASHBOARD_ANNOUNCEMENT']   = 'Dashboard-Ankündigung bearbeiten';
$L['EDIT_ANNOUNCEMENT_INFO']        = 'Durch das Bearbeiten und Speichern einer vorhandenen Ankündigung wird ihre Sichtbarkeit im Dashboard des angegebenen Benutzers zurückgesetzt. Wenn die Ankündigung global ist, wird auch der Ansichtsverlauf auf den Dashboards aller Benutzer zurückgesetzt.';
$L['ANNOUNCEMENT_ID']               = 'Ankündigungs-ID';
$L['ANNOUNCEMENT_TYPE']             = 'Ankündigungstyp';
$L['PREVIEW']                       = 'Vorschau';

/* **********************************
 * #4.3.3 - USERS GROUPS
 ************************************/
$L['ADMINISTRATORS']               = 'Administratoren';
$L['ASSIGN_LEVEL']                 = 'Gruppenniveau zuweisen :';
$L['CANCELLED']                    = 'Abgesagt';
$L['CLICK_HERE']                   = 'Klick hier...';
$L['CONFIRM_DELETE_GROUP_TITLE']   = 'Bist du sicher?';
$L['CONFIRM_DELETE_GROUP_SUBTEXT'] = 'Dadurch wird die Gruppe gelöscht und alle Benutzer in der Gruppe zurückgesetzt. Stellen Sie sicher, dass diese Benutzer einer anderen Gruppe zugewiesen sind.';
$L['DELETE_GROUP']                 = 'Gruppe löschen';
$L['DELETED']                      = 'gelöscht';
$L['GROUP_DELETED']                = 'Diese Gruppe wurde entfernt, Benutzergruppen zurückgesetzt.';
$L['GROUP_STAY']                   = 'Die Gruppe bleibt :)';
$L['GROUP_USER_REMOVED']           = 'Der Benutzer wurde aus der Gruppe entfernt.';
$L['GROUP_USER_STAY']              = 'Der Benutzer bleibt in der Gruppe :)';
$L['GROUP_YES']                    = 'Ja, ich bin sicher!';
$L['GROUP_NO']                     = 'Nein, abbrechen!';
$L['EDIT_ADD_USER']                = 'Benutzer hinzufügen :';
$L['EDIT_GROUP_LEVEL']             = 'Gruppenebene :';
$L['EDIT_GROUP_NAME']              = 'Gruppenname :';
$L['GROUP_LEVEL']                  = 'Gruppenebene';
$L['GROUP_NAME']                   = 'Gruppenname';
$L['LEVEL_INFO']                   = 'Gebe eine Zahl zwischen 2 und 256 ein';
$L['NEW_GROUP_NAME']               = 'Neuer Gruppenname :';
$L['NUMBER_MEMBERS']               = '# Mitglieder';
$L['REMOVED']                      = 'Entfernt';
$L['USER_GROUPS_INFO']             = 'Erstellen, Anzeigen und Bearbeiten von Benutzergruppen. Ordne Benutzer zu Benutzergruppen zu.';
$L['SOFT_GROUP_ASGMNT']            = 'Softwaregruppenzuweisung';

/* **********************************
 * #4.4 - SYSTEM
 *
 * #4.4.1 - WEB CONSOLE
 ************************************/
$L['WEB_CONSOLE_INFO'] = 'Zugriff auf die Befehlsumgebung.';

/* **********************************
 * #4.4.2 - API CONTROL
 ************************************/
$L['ACTIVATION_INFO_STATS']             = 'Aktivierungsinformationsstatistiken';
$L['QB_CONTROL_API']                    = 'QB-Steuerungs-API';
$L['QB_CONTROL_API_NOTICE']             = 'API-Steuerschlüssel sind wie unten gezeigt in zwei komponenten unterteilt.<br/>Nutzungsbeispiele wurden beschriftet, um eine bestimmte befehlsebene an berechtigungen zu veranschaulichen, die zum ausführen der vorgesehenen aufgabe erforderlich ist. Die API-nutzungsbibliothek wird weiterhin aktualisiert, wenn zusätzliche endpunkte und funktionen implementiert werden.<br/><br/><table><tbody><tr><td style="width:15px;vertical-align:middle;"><span class="badge badge-indicators badge-primary">&nbsp;</span></td><td>Der <em>leseberechtigungsschlüssel</em> hat nur die fähigkeit zum scrapen daten. Dieser schlüssel kann dem QuickBox-server keine operativen aufgaben signalisieren. Sofern sie nicht versuchen, ihre installation fernzusteuern, ist dieser schlüssel alles, was sie benötigen.</td></tr><tr><td style="width:15px;vertical-align:middle;"><span class= "badge badge-indicators badge-success">&nbsp;</span></td><td>Der <em>schreibberechtigungsschlüssel</em> hat die möglichkeit, zusätzliche aufgaben auszuführen, wie z. das aktualisieren des QuickBox-installation, verwaltung der haupt-API-aktivierung und mehr. Dieser schlüssel funktioniert auch für leseberechtigungen und gilt als der schlüssel mit den höchsten privilegien. Nützlich für die fernausführung grundlegender verwaltungsaufgaben auf ihrem server.</td></tr></tbody></table><br/>Denken sie daran, ihre API-schlüssel wie passwörter zu behandeln und sie niemals weiterzugeben.<br/>Sie können jederzeit einen neuen zufallssteuerschlüssel neu generieren, indem sie unten auf die <i data-feather="refresh-cw" style="width:14px;"></i> schaltfläche.';
$L['CLOSE_ACKNOWLEDGE']                 = 'Bestätigen und schließen';
$L['READ_PERM_KEY']                     = 'Berechtigungsschlüssel lesen';
$L['REGENERATE_READ_KEY']               = 'Leseschlüssel neu generieren';
$L['WRITE_PERM_KEY']                    = 'Berechtigungsschlüssel schreiben';
$L['REGENERATE_WRITE_KEY']              = 'Schreibschlüssel neu generieren';
$L['API_SPEC_USAGE']                    = 'API-spezifische Verwendung';
$L['DISPLAY_CURRENT_API_STAT']          = 'Aktuellen API-Status anzeigen';
$L['EXAMPLE_CODE']                      = 'code:';
$L['EXAMPLE_OUTPUT']                    = 'ausgabe:';
$L['ACTIVATE_QUICKBOX_API']             = 'QuickBox-API-Schlüssel aktivieren';
$L['DEACTIVATE_QUICKBOX_API']           = 'QuickBox-API-Schlüssel deaktivieren';
$L['VERSION_SPEC_USAGE']                = 'Versionsspezifische Verwendung';
$L['DISPLAY_CURRENT_VERSION']           = 'Aktuellen QuickBox-versionsstatus anzeigen';
$L['UPDATE_QUICKBOX_VERSION']           = 'QuickBox-version aktualisieren';
$L['UPDATE_ALERT_NOTICE']               = 'Wenn ihre initanz bereits auf dem neuesten stand ist, sehen sie die folgende ausgabe';
$L['RUN_FIX_VERSION']                   = 'Versionskorrektur ausführen';
$L['USER_SPEC_USAGE']                   = 'Benutzerspezifische Nutzung';
$L['DISPLAY_ALL_USER_INFO']             = 'Informationen für alle benutzer anzeigen';
$L['DISPLAY_SINGLE_USER_INFO']          = 'Informationen für den angegebenen benutzer anzeigen';
$L['DISPLAY_USER_SOFTWARE']             = 'Zeigt die aktuell vom angegebenen benutzer installierte software an';
$L['CREATE_SPECIFIED_USER']             = 'Angegebenen benutzer erstellen';
$L['CREATE_SPECIFIED_USER_INFO_NOTICE'] = 'Wenn Sie einen benutzer mit seiner vorhandenen e-mail-adresse bereitstellen und ein kontingent festlegen möchten. Beachten sie, dass sowohl e-mail als auch kontingent rein optional sind. Wenn kein kontingent eingegeben wird, wird der standardwert aus ihrem konfigurierten betrag verwendet, der <a href="/registration.php" rel="noopener nofollow" target="_blank">hier</a>.';
$L['DELETE_SPECIFIED_USER']             = 'Angegebenen benutzer löschen';
$L['BAN_SPECIFIED_USER']                = 'Angegebenen benutzer sperren';
$L['UNBAN_SPECIFIED_USER']              = 'Angegebenen benutzer entsperren';
$L['SOFTWARE_SPEC_USAGE']               = 'Softwarespezifische Nutzung';
$L['DISPLAY_ALL_SOFTWARE']              = 'Alle zur installation verfügbaren softwareanwendungen anzeigen';
$L['DISPLAY_SINGLE_SOFTWARE']           = 'Informationen für angegebene software anzeigen';
$L['API_SOFTWARE_NOTICE']               = 'Hinweise zur Strukturierung von Softwarenamen (App-Namen) finden Sie im Abschnitt « Software » in Ihrem Benutzerhandbuch. Sie können darauf zugreifen, indem Sie <a href="/help.php#software">hier</a> klicken.';
$L['API_SOFTWARE_WARNING']              = 'Bitte beachten Sie, dass die Namenskonventionen für bestimmte Anwendungen möglicherweise nicht offiziell festgelegt sind und stattdessen Teil eines erweiterten Satzes von Optionen sein können.<br/><br/>
Hier ist ein Beispiel mit Bazarr4K:<br>
<pre class="mb-2"><code class="language-json">"bazarr4k": {
    "software_title": "Bazarr4K",
    "qb_package_name": "bazarr",
    "qb_options": "--4k",
    ...</code></pre>
Bitte beachten Sie die folgenden wichtigen Informationen zur Software-API-Ausgabe von QuickBox:
<ul>
<li>Wenn Sie über QuickBox auf Softwarepakete zugreifen, finden Sie immer das Attribut « qb_package_name ». Dieses Attribut wird durch die Namenskonvention <code>qb</code> markiert und verwendet.</li>
<li>Zusätzlich enthält jede API-Ausgabe den Eintrag « qb_options », der wertvolle Optionen zur Anpassung bietet. Eine dieser Optionen ist das \'4K\'-Installationsflag, bezeichnet als <code>--4k</code>.</li>
</ul><br/>
Wenn Sie beispielsweise « Bazarr » mit 4K-Unterstützung installieren möchten, sollten Sie den folgenden Befehl verwenden:<br/>
<pre class="mb-0"><code class="language-bash">qb install bazarr --4k -u [USERNAME]</code></pre><br/>
Es ist wichtig zu beachten, dass Sie nicht « bazarr4k » als Paketnamen verwenden sollten, da der Eintrag « qb_options » darauf ausgelegt ist, solche Anpassungen effizient durchzuführen.';
$L['SOFTWARE_SERVICE_STATUS']            = 'Status für angegebene software und benutzer anzeigen';
$L['SOFT_STATUS_ACTIVE_NOTICE']          = 'Wenn der dienst aktiv ist.';
$L['SOFT_STATUS_INACTIVE_NOTICE']        = 'Wenn der dienst inaktiv ist.';
$L['SOFT_STATUS_NOT_INSTALLED_NOTICE']   = 'Wenn die anwendung für den angegebenen benutzer nicht installiert ist.';
$L['SOFTWARE_SERVICE_CONTROL']           = 'Spezifizierte aktion für angegebene software und benutzer signalisieren';
$L['SOFT_CONTROL_ACTION_RESTART_NOTICE'] = 'Wo die action=restart...';
$L['SOFT_CONTROL_ACTION_START_NOTICE']   = 'Wo die action=start...';
$L['SOFT_CONTROL_ACTION_STOP_NOTICE']    = 'Wo die action=stop...';

/* **********************************
 * #4.4.3 - SSL CONTROL
 ************************************/
$L['LETSENCRYPT_DOMAIN']         = 'Let\'s Encrypt Domäne';
$L['SSL_CONTROL']                = 'SSL-Steuerung';
$L['ABOUT_SSL_CONTROL']          = 'Mit dieser Funktion können Sie ganz einfach SSL-Zertifikate für die unterstützten Anwendungen generieren, die Sie installiert haben. Wenn Sie « Ja » auswählen und Ihre Domain eingeben, richten Sie den Nginx-Reverse-Proxy zusammen mit dem SSL-Zertifikat nahtlos ein.';
$L['STAGE_DASHBOARD_SSL']        = 'SSL für das Dashboard bereitstellen?';
$L['DASHBOARD_SSL_TOOLTIP']      = 'Um Ihr QuickBox-Dashboard mit einem SSL-Zertifikat zu sichern, wählen Sie einfach \'Ja\'. Diese Aktion konfiguriert nicht nur das SSL-Zertifikat, sondern richtet auch die erforderlichen NGinx-Einstellungen und Links ein und erleichtert so den sicheren Zugriff auf Ihr Dashboard über Ihre Domain.';
$L['STAGE_OWNED_DOMAIN_SSL']     = 'SSL für eine eigene Domain bereitstellen?';
$L['NON_DASHBOARD_SSL_TOOLTIP']  = 'Um ein SSL-Zertifikat für eine Domain Ihrer Wahl einzurichten, wählen Sie bitte \'Ja\'. Diese Option ist für die Erstellung zusätzlicher SSL-Zertifikate gedacht. Bitte stellen Sie sicher, dass die entsprechenden DNS-Einträge für die Domain ordnungsgemäß konfiguriert sind, da dieser Prozess ausschließlich die angeforderten SSL-Zertifikate generiert.';
$L['STAGE_EMBY_SSL']             = 'SSL für Emby bereitstellen?';
$L['EMBY_SSL_TOOLTIP']           = 'Um Ihre Emby-Installation mit einem SSL-Zertifikat zu sichern, wählen Sie einfach \'Ja\'. Diese Aktion konfiguriert nicht nur das SSL-Zertifikat, sondern richtet auch die erforderlichen NGinx-Einstellungen und Links ein und erleichtert so den sicheren Zugriff auf Ihre Emby-Installation über Ihre Domain.';
$L['STAGE_JELLYFIN_SSL']         = 'SSL für Jellyfin bereitstellen?';
$L['JELLYFIN_SSL_TOOLTIP']       = 'Um Ihre Jellyfin-Installation mit einem SSL-Zertifikat zu sichern, wählen Sie einfach « Ja ». Diese Aktion konfiguriert nicht nur das SSL-Zertifikat, sondern richtet auch die erforderlichen NGinx-Einstellungen und Links ein und erleichtert so den sicheren Zugriff auf Ihre Jellyfin-Installation über Ihre Domain.';
$L['STAGE_JELLYSEERR_SSL']       = 'SSL für Jellyseerr bereitstellen?';
$L['JELLYSEERR_SSL_TOOLTIP']     = 'Um Ihre Jellyseerr-Installation mit einem SSL-Zertifikat zu sichern, wählen Sie einfach \'Ja\'. Diese Aktion konfiguriert nicht nur das SSL-Zertifikat, sondern richtet auch die erforderlichen NGinx-Einstellungen und Links ein und erleichtert so den sicheren Zugriff auf Ihre Jellyseerr-Installation über Ihre Domain.';
$L['STAGE_KOMGA_SSL']            = 'SSL für Komga bereitstellen?';
$L['KOMGA_SSL_TOOLTIP']          = 'Um Ihre Komga-Installation mit einem SSL-Zertifikat zu sichern, wählen Sie einfach « Ja ». Diese Aktion konfiguriert nicht nur das SSL-Zertifikat, sondern richtet auch die erforderlichen NGinx-Einstellungen und Links ein und erleichtert so den sicheren Zugriff auf Ihre Komga-Installation über Ihre Domain.';
$L['STAGE_OVERSEERR_SSL']        = 'SSL für Overseerr bereitstellen?';
$L['OVERSEERR_SSL_TOOLTIP']      = 'Um Ihre Overseerr-Installation mit einem SSL-Zertifikat zu sichern, wählen Sie einfach \'Ja\'. Diese Aktion konfiguriert nicht nur das SSL-Zertifikat, sondern richtet auch die erforderlichen NGinx-Einstellungen und Links ein und erleichtert so den sicheren Zugriff auf Ihre Overseerr-Installation über Ihre Domain.';
$L['STAGE_PLEX_SSL']             = 'SSL für Plex bereitstellen?';
$L['PLEX_SSL_TOOLTIP']           = 'Um Ihre Plex-Installation mit einem SSL-Zertifikat zu sichern, wählen Sie einfach \'Ja\'. Diese Aktion konfiguriert nicht nur das SSL-Zertifikat, sondern richtet auch die erforderlichen NGinx-Einstellungen und Links ein und erleichtert so den sicheren Zugriff auf Ihre Plex-Installation über Ihre Domain.';
$L['DOMAIN']                     = 'Domäne';
$L['SSL_ALREADY_INSTALLED']      = 'Bitte beachten Sie, dass für diese Option bereits ein SSL-Zertifikat installiert ist. Durch die Neuinstallation des Zertifikats durch Eingabe einer neuen Domäne unten wird die aktuelle NGinx-Reverse-Konfiguration zurückgesetzt, das vorherige Zertifikat entfernt und der aktuell eingestellte Linkzugriff zurückgesetzt.';
$L['SSL_SUBMIT']                 = 'SSL-Zertifikat installieren';
$L['SSL_CERTIFICATE_STATUS']     = 'SSL-Zertifikatstatus';
$L['SSL_STATUS_MONITOR_TOOLTIP'] = 'Überwachen Sie den Status Ihrer vorhandenen SSL-Zertifikate mit der Möglichkeit, zwei wichtige Aktionen durchzuführen: Löschen oder Erneuerung erzwingen. Bei Zertifikaten, die mit unterstützten Anwendungen wie Emby, Jellyfin, Jellyseerr, Komga, Overseerr und Plex verknüpft sind, löst das Löschen eines Zertifikats auch die Entfernung und Neukonfiguration des Nginx-Reverse-Proxys für die entsprechende Domäne aus.<br><br>Sie können dies problemlos tun Löschen Sie ein Zertifikat mit den folgenden Optionen und wählen Sie anschließend oben Ihre gewünschte Anwendung aus, um die Installation einer neuen Subdomain und eines neuen Zertifikats zu starten. Dieser optimierte Prozess gewährleistet höchste Flexibilität und Kontrolle über die Verwaltung Ihres SSL-Zertifikats.';
$L['CERTS_STORED_AT']            = 'Überwachte Zertifikate werden gespeichert unter';
$L['CERT_ACTIVE']                = 'Läuft ab am:';
$L['CERT_EXPIRES']               = 'Läuft ab am:';
$L['CERT_EXPIRED']               = 'Abgelaufen';
$L['CERT_RENEW']                 = 'Zertifikat erneuern';
$L['CERT_DELETE']                = 'SSL-Zertifikat und alle zusätzlichen Konfigurationen löschen. Diese Aktion ist irreversibel.';
$L['CERT_DELETE_CONFIRM']        = 'Sind Sie sicher, dass Sie dieses Zertifikat löschen möchten?';
$L['NO_CERTS_INSTALLED']         = 'Derzeit sind keine SSL-Zertifikate installiert und/oder überwacht.';

/* **********************************
 * #4.4.4 - VPN CONTROL
 ************************************/
$L['ABORT']                            = 'Abbrechen';
$L['ACTIVE']                           = 'Aktiv';
$L['ADD_PEER']                         = 'Peer-Konfiguration hinzufügen';
$L['CANCEL']                           = 'Stornieren';
$L['CITY']                             = 'Stadt';
$L['COUNTRY']                          = 'Land';
$L['CURRENT_IP']                       = 'Server-IP';
$L['CURRENT_PEER_LIST']                = 'Aktuelle Peer-Liste';
$L['DATE_ADDED']                       = 'Datum hinzugefügt';
$L['DELETE_PEER']                      = 'Peer-Konfigurationsdatei löschen?';
$L['DRAG_DROP_FILES']                  = 'Ziehen Sie Ihre Peer-Konfigurationsdateien per Drag &amp; Drop oder <span class="filepond--label-action">Klicken Sie zum Durchsuchen</span>';
$L['HOST']                             = 'Hostname';
$L['LOCAL_HOSTED']                     = 'Private IP';
$L['ORGANIZATION']                     = 'Organisation';
$L['PEER_CONFIG_NAME']                 = 'Name';
$L['PEER_INFO']                        = 'Peer-Informationen';
$L['PEER_PING']                        = 'Ping';
$L['PROCESSING']                       = 'Verarbeitung...';
$L['PROCESSING_ABORTED']               = 'Verarbeitung abgebrochen. Bitte versuchen Sie es erneut.';
$L['PROCESSING_COMPLETE']              = 'Verarbeitung abgeschlossen.';
$L['PROCESSING_ERROR']                 = 'Verarbeitungsfehler. Bitte versuchen Sie es erneut.';
$L['PROCESSING_ERROR_EXTENSION']       = '<span style="font-weight:400">Nur Peer-Konfigurationsdateien mit der Erweiterung <span style="font-weight:900" class="text-warning">.conf</span> sind zulässig.</span>';
$L['PROCESSING_REVERT_ERROR']          = 'Fehler beim Zurücksetzen. Bitte versuche es erneut.';
$L['REMOVE']                           = 'Entfernen';
$L['RETRY']                            = 'Versuchen Sie es noch einmal';
$L['REVERT']                           = 'Zurücksetzen';
$L['REGION']                           = 'Region';
$L['SERVER_CONFIG']                    = 'Serverkonfiguration';
$L['TAP_TO_CANCEL']                    = 'Zum Abbrechen tippen';
$L['TAP_TO_RETRY']                     = 'Zum Erneut versuchen tippen';
$L['TAP_TO_UNDO']                      = 'Seite wird aktualisiert...';
$L['UNDO']                             = 'Rückgängig machen';
$L['VPN_CONTROL']                      = 'VPN-Kontrolle';
$L['WAITING_FOR_SIZE']                 = 'Warte auf die Dateigröße...';
$L['WG_PRIVATE_KEY']                   = 'Privat Schlüssel';
$L['WG_PUBLIC_KEY']                    = 'Öffentlicher Schlüssel';
$L['WG_SERVER_INFO']                   = 'Aktuelle Verbindungsinformationen';
$L['WIREGUARD_CONFIG_ACTIVATION_TIPS'] = 'Um eine WireGuard-Konfiguration zu aktivieren, wählen Sie bitte die gewünschte VPN-Konfiguration aus der folgenden Tabelle aus. Um die aktuell aktive Konfiguration zu deaktivieren, entfernen Sie einfach das Häkchen aus dem aktiven Kontrollkästchen oder wählen Sie eine andere Konfiguration aus. Dadurch wird der WireGuard-Dienst automatisch neu gestartet und die Tabelle \'Aktuelle Verbindungsinformationen\' wird mit den relevanten Details aktualisiert.';

/* **********************************
 * #4.4.5 - TROUBLESHOOTING
 ************************************/
$L['SERVICE']                = 'Service';
$L['APP_SELECT']             = 'Software Wählen';
$L['APPLIANCE']              = 'Gerät';
$L['CLEAN_MEM']              = 'Cache für physischen Speicher löschen';
$L['FIX']                    = 'Korrigieren';
$L['FIXUPDATE']              = 'Dpkg-Frontend-Sperren korrigieren';
$L['LOG_GEN']                = 'Systemprotokoll-Generator';
$L['NGINX']                  = 'Nginx';
$L['PHP']                    = 'Php-fpm';
$L['PHP7_2']                 = 'Php72-fpm';
$L['QSUPPORT']               = 'QuickBox-Unterstützung';
$L['QSUPPORTU']              = 'QuickBox-Unterstützung Nutzer';
$L['SERVER_TROUBLESHOOTING'] = 'Server Fehlerbehebung';
$L['SYSTEM_INFO']            = 'Systeminformationen';
$L['SYSTEM_LOG_FILES']       = 'Systemprotokoll';
$L['TROUBLESHOOTING']        = 'Fehlerbehebung';
$L['WEB_SERVER']             = 'Webserver';

/* **********************************
 * 4.4.6 - SYSTEM LOGS
 ************************************/
$L['ABOUT_SOFTWARE_ACTION_LOGS']       = 'Diese Protokolle sollen eine Aufzeichnung von Aktionen im Zusammenhang mit Software liefern, einschließlich Installationen, Entfernungen, Updates und anderen wichtigen Ereignissen.';
$L['ABOUT_SYSTEM_ACTION_LOGS']         = 'Diese Protokolle sind darauf zugeschnitten, Aktivitäten und Aktionen auf Systemebene zu erfassen, die über das <code>qb</code>-Befehlszeilentool initiiert werden.';
$L['ABOUT_UI_ACTION_LOGS']             = 'Diese Protokolle werden aus dem Syslog des Systems abgeleitet und dienen als konsolidierte Aufzeichnung aller Befehle und Aktionen, die über die Benutzeroberfläche des QuickBox-Dashboards initiiert werden.';
$L['ABOUT_USER_ACTION_LOGS']           = 'Die Protokolle in diesem Kontext beziehen sich auf benutzerbezogene Aufgaben und Ereignisse, die über die QuickBox-Schnittstelle initiiert wurden.';
$L['ACCESS_LOGS']                      = 'Zugriffsprotokolle';
$L['APP_LOGS']                         = 'Softwareprotokolle';
$L['AUTO_PROCESS']                     = 'Automatischer Prozess';
$L['CLEAN_DASHBOARD_USER_ACTION_LOGS'] = 'Benutzeraktionsprotokolle bereinigen';
$L['CLEAN_SYSTEM_ACTION_LOGS']         = 'Systemaktionsprotokolle bereinigen';
$L['CLEAR_LOG']                        = 'Protokoll löschen';
$L['CLEAR_LOG_CONFIRM']                = 'Sind Sie sicher, dass Sie diese Protokolle löschen möchten. Dies kann nicht rückgängig gemacht werden?';
$L['COMMAND']                          = 'Befehl';
$L['COMMAND_SOFTWARE']                 = 'Befehl/Software';
$L['DATABASE_BACKUP']                  = 'Datenbanksicherung';
$L['DATABASE_MAINTENANCE']             = 'Datenbankwartung';
$L['DATABASE_REPAIR']                  = 'Datenbankreparatur';
$L['DATABASE_RESTORE']                 = 'Datenbankwiederherstellung';
$L['DATE_TIME']                        = 'Datum/Uhrzeit';
$L['DELETED_ALL_APP_LOGS']             = 'Alle Softwareprotokolle gelöscht';
$L['DELETED_ALL_APPLICATION_LOGS']     = 'Alle Anwendungsprotokolle löschen';
$L['DELETED_ALL_SUMMARY_LOGS']         = 'Alle zusammenfassenden Protokolle gelöscht';
$L['DELETED_ALL_SYSTEM_LOGS']          = 'Alle Systemprotokolle gelöscht';
$L['DELETED_ALL_UI_LOGS']              = 'Alle UI-Protokolle gelöscht';
$L['DELETED_ALL_USER_LOGS']            = 'Alle Benutzerprotokolle gelöscht';
$L['DELETED_APPLICATION_LOGS']         = 'Anwendungsprotokolle gelöscht';
$L['DELETED_SUMMARY_LOGS']             = 'Zusammenfassungsprotokolle gelöscht';
$L['DELETED_USER']                     = 'Gelöschter Benutzer';
$L['DELETE_USER_LOGS']                 = 'Benutzerprotokolle löschen';
$L['EVENT']                            = 'Ereignis';
$L['LOG_MESSAGE']                      = 'Protokollnachricht';
$L['LOGS']                             = 'Protokolle';
$L['LOGS_SUMMARY']                     = 'Protokollzusammenfassung';
$L['NO_LOGS']                          = 'Keine Protokolle gefunden';
$L['NO_LOGS_MESSAGE']                  = 'Derzeit sind keine Protokolldatensätze zum Anzeigen verfügbar. Protokolleinträge werden generiert, wenn Anwendungen ihre Protokollinformationen an das Syslog des Systems senden. Wenn Sie auf der Suche nach einem bestimmten Protokoll sind, empfehlen wir Ihnen, zur weiteren Orientierung die Dokumentation der jeweiligen Anwendung zu konsultieren. QuickBox ist bestrebt, verschiedene Anwendungen und ihre protokollierten Daten zu zentralisieren. es hängt jedoch von den einzelnen Anwendungen ab, ihre Protokollierungsinformationen an das Syslog zu übermitteln.';
$L['QUICKBOX_VERSION_CHECK']           = 'Nach QuickBox-Updates suchen';
$L['QUOTA_CHECK']                      = 'Kontingentsatzprüfung';
$L['SCHEDULED_TASK']                   = 'Geplante Aufgabe';
$L['SOFTWARE']                         = 'Software';
$L['SOFTWARE_ACTION_LOGS']             = 'Software-Aktionsprotokolle';
$L['SOFTWARE_VERSION_CHECK']           = 'Nach installierten Software-Updates suchen';
$L['SYSTEM_ACTION_LOGS']               = 'Systemaktionsprotokolle';
$L['SYSTEM_LOG_SUMMARY']               = 'Zusammenfassung des Systemprotokolls';
$L['SYSTEM_LOG_SUMMARY_TOOLTIP']       = 'Diese Zusammenfassung und alle zusätzlichen Protokolle werden unter drei Bedingungen generiert:<br><ol><li><strong>Cron:</strong> Protokolle werden automatisch alle 15 Minuten mit der Ausführung einer Cron-Aufgabe aktualisiert. Dies initiiert die Binärdatei <code>qb_log_miner</code>, die Protokolleinträge aus dem System-Syslog zusammenfasst.</li><li><strong>Manuell generieren:</strong> Sie können es im Abschnitt « System > Fehlerbehebung > Systemprotokoll » generieren, indem Sie auf die Schaltfläche « (Generieren) » klicken.</li><li><strong>Befehlszeile:</strong> Es kann auch durch Ausführen des Befehls <code>qb generate log</code> generiert werden.</li></ol>Sie können auf diese zusammenfassende Protokolldatei auf zwei Arten zugreifen und sie herunterladen:<br><ol><li><strong>Weboberfläche:</strong> Gehen Sie in der Benutzeroberfläche zu « System > Fehlerbehebung > Systemprotokoll (Download) ».</li><li><strong>Serververzeichnis:</strong> Finden Sie es auf dem Server unter: \'/srv/quickbox/logs/system_log\'.</li></ol>';
$L['UI_ACTION_LOGS']                   = 'UI-Aktionsprotokolle';
$L['USER_ACTION_LOGS']                 = 'Benutzeraktionsprotokolle';
$L['USER_APPLICATION_LOGS']            = 'Benutzeranwendungsprotokolle';
$L['USER_LOGS']                        = 'Benutzerprotokolle';
$L['VIEW_SOFTWARE_ACTION_LOGS']        = 'Software-Aktionsprotokoll anzeigen';
$L['VIEW_SYSTEM_ACTION_LOGS']          = 'Systemaktionsprotokoll anzeigen';
$L['VIEW_UI_ACTION_LOGS']              = 'UI-Aktionsprotokoll anzeigen';
$L['VIEW_USER_ACTION_LOGS']            = 'Benutzeraktionsprotokoll anzeigen';

/* **********************************
 * 4.4.7 - HELP MANUAL
 ************************************/
$L['QB_HELP'] = 'Hilfehandbuch';

/* **********************************
 * #4.4.7.1 - description
 ************************************/
$L['DESCRIPTION_CONTENT'] = '<p>Willkommen bei der umfassenden grafischen Darstellung der <code>qb</code>-Manpage, die Ihnen einen übersetzten, vereinfachten und effizienten Ansatz für den Zugriff auf verschiedene Informationen über QuickBox bieten soll. Diese benutzerfreundliche Oberfläche bietet detaillierte Einblicke in die Funktionsweise von QuickBox, einem leistungsstarken und vielseitigen Tool zur mühelosen Verwaltung Ihres Servers.</p>
<p>In dieser grafischen Anzeige finden Sie eine detaillierte Liste der verfügbaren Anwendungen, die zur nahtlosen Installation bereitstehen, sodass Sie Ihr Server-Setup an Ihre spezifischen Anforderungen anpassen können. Darüber hinaus stellt diese Ressource eine Fülle weiterer wichtiger Befehle für die optimale Nutzung innerhalb der <code>qb</code> CLI-Umgebung bereit, sodass Sie effizient und mühelos durch Ihre Serveraufgaben navigieren können.</p>
<p>Ganz gleich, ob Sie neu bei QuickBox sind oder ein erfahrener Benutzer, diese grafische Darstellung der <code>qb</code>-Manpage dient als ultimative Referenz, um das volle Potenzial von QuickBox auszuschöpfen und die wahre Leistungsfähigkeit Ihrer Serververwaltung freizusetzen. Entdecken Sie die vielfältigen Funktionen, optimieren Sie Ihren Serverbetrieb und maximieren Sie Ihre Produktivität mithilfe dieses intuitiven und informativen Leitfadens. Lassen Sie uns eintauchen und Ihr QuickBox-Erlebnis noch lohnender machen!</p>';
$L['API_INFO_DIRECT'] = '<p style="font-weight:600;">Weitere Informationen und Referenzen zur eingebetteten QuickBox-API finden Sie unter <a href="/api-control.php" rel="noopenner nofollow " class="link" style="color:var(--qb-color-37);">siehe diese Seite</a>.</p>';

/* **********************************
 * #4.4.7.2 - options
 ************************************/
$L['OPTIONS_HEADER']          = 'Optionen';
$L['OPTIONS_CONTENT_HELP']    = 'Zeigt dieses Hilfehandbuch im CLI-Manpage-Format an';
$L['OPTIONS_CONTENT_VERBOSE'] = 'Aktiviert den ausführlichen Modus zum Debuggen';

/* **********************************
 * #4.4.7.3 - software
 ************************************/
$L['SOFTWARE_HEADER']                       = 'Software';
$L['SOFTWARE_INFO_CONTENT']                 = '<p>Das Folgende ist eine Liste aller verfügbaren Anwendungen zur Installation, die über den QuickBox-Build bereitgestellt werden.<br/>Softwarenamen werden so dargestellt, wie sie von <code>qb [install|reinstall|update|remove|help] [Softwarename]</code></p>';
$L['ADMIN_INSTALLED_SOFTWARE_HEADER']       = 'Vom Administrator installierte Software';
$L['ADMIN_INSTALLED_SOFTWARE_INFO_CONTENT'] = '<p>Die folgenden Anwendungen müssen vom Systemadministrator installiert werden.<br/>Weitere Details finden Sie in der Spalte « Verfügbarkeit » unten.</p>';
$L['MULTI_USER_SOFTWARE_HEADER']            = 'Mehrbenutzersoftware';
$L['MULTI_USER_SOFTWARE_INFO_CONTENT']      = '<p>Die folgenden Anwendungen können von mehreren Benutzern installiert werden, ohne dass Administratorunterstützung erforderlich ist.<br/>Die Verfügbarkeit aller Anwendungen wird vom Systemadministrator festgelegt und zusätzlichen Benutzern innerhalb von <a href="/usergroups.php" rel="noopener nofollow" class="link">erstellte Gruppen</a>.</p>';
$L['SINGLE_USER_SOFTWARE_HEADER']           = 'Einzelbenutzersoftware';
$L['SINGLE_USER_SOFTWARE_INFO_CONTENT']     = '<p>Die folgenden Anwendungen können jeweils nur von einem zugewiesenen Benutzer installiert werden, ohne dass Administratorunterstützung erforderlich ist.<br/>Die Verfügbarkeit aller Anwendungen wird vom Systemadministrator bestimmt und zusätzlichen Benutzern gewährt innerhalb von <a href="/usergroups.php" rel="noopener nofollow" class="link">erstellten Gruppen</a>.</p>';
$L['SOFTWARE_MANAGEMENT']                   = 'Softwareverwaltung';
$L['SOFTWARE_MANAGEMENT_CONTENT']           = 'Parameter zum Installieren, Neuinstallieren, Aktualisieren oder Entfernen bestimmter Software mit zusätzlichen Optionen (falls vorhanden/gewünscht) für einen zugewiesenen Benutzer';
$L['SOFTWARE_MANAGEMENT_WARNING_CONTENT']   = '<p>Bedenken Sie, dass verschiedene Anwendungen unterschiedliche Optionen/Anforderungen haben. Die meisten erfordern die Verwendung des Benutzernamen-Flags (<code>-u</code>), während dies bei Anwendungen wie rtorrent nicht der Fall ist. Um alle verfügbaren Optionen für eine bestimmte Software zu überprüfen, verwenden Sie <code class="lingual-bash">qb help [software_name]</code>. Die Anwendungsbenennung innerhalb von QuickBox für das Softwarebenennungsschema kann im <a href="#software" class="link">Softwarelistendiagramm</a> oben angezeigt werden.</p>';
$L['SEE_ALSO_HEADER']                       = 'Siehe auch';
$L['SEE_ALSO_CONTENT']                      = 'Hilfreiche Befehlsverwendung für bestimmte Software anzeigen';

/* **********************************
 * #4.4.7.4 - software options table
 ************************************/
$L['SOFTWARE_NAME']     = 'Softwarename';
$L['SOFTWARE_TITLE']    = 'Softwaretitel';
$L['USABILITY']         = 'Benutzerfreundlichkeit';
$L['CAN_ROLLBACK']      = 'Rollback-Option';
$L['INFO']              = 'Info';
$L['ADMIN_BADGE']       = '<span class="badge badge-pills badge-table-menu" style="padding:2px 6px;line-height:0.7rem;background-color:var(--qb-color-6-rgba);color:#fff;font-size:0.5rem;">nur Administratoren</span>';
$L['GLOBAL_BADGE']      = '<span class="badge badge-pills badge-table-menu" style="padding:2px 6px;line-height:0.7rem;background-color:var(--qb-color-5-rgba);color:#fff;font-size:0.5rem;">global</span>';
$L['MULTI_USER_BADGE']  = '<span class="badge badge-pills badge-table-menu" style="padding:2px 6px;line-height:0.7rem;background-color:var(--qb-color-4-rgba);color:#fff;font-size:0.5rem;">multi user</span>';
$L['SINGLE_USER_BADGE'] = '<span class="badge badge-pills badge-table-menu" style="padding:2px 6px;line-height:0.7rem;background-color:var(--qb-color-3-rgba);color:#fff;font-size:0.5rem;">einzelner Benutzer</span>';
$L['GLOBAL_INFO']       = 'erfordert eine Administratorinstallation und wird für alle Benutzer auf dem System installiert.';
$L['MULTI_USER_INFO']   = 'erfordert eine Administratorinstallation und kann für jeden zugewiesenen Benutzer installiert werden. Es werden mehrere Benutzer unterstützt.';
$L['SINGLE_USER_INFO']  = 'Einzelbenutzer, nur Administrator. erfordert eine Admin-Installation und wird vom Admin-Benutzer installiert und betrieben.';

/* **********************************
 * #4.4.7.5 - examples header
 ************************************/
$L['EXAMPLES_HEADER'] = 'Beispiele';

/* **********************************
 * #4.4.7.6 - user management
 ************************************/
$L['USER_MANAGEMENT_INFO_CONTENT']   = '<p>Die <code>qb user</code>-Verwaltungsfunktionen in QuickBox bieten vielseitige und leistungsstarke Tools zur effizienten Verwaltung von Benutzern auf Ihrem Server. Mit dem Fokus auf Benutzerfreundlichkeit und robuster Funktionalität ermöglichen Ihnen diese Funktionen, die Benutzerverwaltung zu optimieren, die Sicherheit zu erhöhen und einen reibungslosen Serverbetrieb sicherzustellen.</p>';
$L['CREATE_USER_CONTENT']            = 'Erstellt ein neues QuickBox-Benutzerkonto';
$L['DELETE_USER_CONTENT']            = 'Löscht das QuickBox-Benutzerkonto';
$L['CHANGE_USER_PASSWORD']           = 'Benutzerpasswort ändern';
$L['CHANGE_USER_PASSWORD_CONTENT']   = 'Ändert das Passwort für das zugewiesene Benutzerkonto';
$L['BAN_USER_CONTENT']               = 'Bannt zugewiesenes Benutzerkonto, verhindert die Anmeldung und stoppt installierte Dienste und ihre Funktionen.';
$L['BAN_USER_PRIMARY_CONTENT']       = '<p><em>Dies <strong>löscht</strong> keine Benutzerdaten</em>, sondern deaktiviert lediglich laufende Dienste und blockiert den Zugriff.</p>';
$L['UNBAN_USER_CONTENT']             = 'Entsperrt zugewiesenes Benutzerkonto, ermöglicht die Anmeldung und das Starten installierter Dienste und ihrer Funktionen';
$L['PROMOTE_USER_TO_ADMIN']          = 'Benutzer zum Administrator befördern';
$L['PROMOTE_USER_TO_ADMIN_CONTENT']  = 'Befördert den zugewiesenen Benutzer zur Administratorebene';
$L['DEMOTE_USER_FROM_ADMIN']         = 'Benutzer vom Administrator herabstufen';
$L['DEMOTE_USER_FROM_ADMIN_CONTENT'] = 'Stuft den zugewiesenen Benutzer auf die Standardbenutzerebene herab';
$L['SET_USER_QUOTA']                 = 'Benutzerkontingent festlegen';
$L['SHOW_USER_QUOTA']                = 'Benutzerkontingent anzeigen';
$L['SET_USER_SHELL']                 = 'Benutzer-Shell festlegen';
$L['SET_USER_SHELL_CONTENT']         = 'Legt die Shell-Umgebung für den zugewiesenen Benutzer fest';
$L['SET_USER_SHELL_INFO_CONTENT']    = '<p><strong><code>sudo</code></strong><br>vollständige Administratorrechte für die Serverumgebung (große Leistung... usw.)<br><strong><code>full</code></strong><br>vollständiger Zugriff auf die Serverumgebung, mit Ausnahme höher privilegierter Bereiche; Das heißt: kein Sudo und kein Zugriff auf Stammverzeichnisse.<br><strong><code>limited</code></strong><br>die eingeschränkte Shell-Umgebung. sehr wenig Zugriff auf Befehle und in ihrem eigenen Benutzer-Home-Verzeichnis eingesperrt.</p><hr/><p>Shell-Umgebungen werden vom Systemadministrator festgelegt und können auf der Bearbeitungsseite des Benutzers im angezeigt werden <a href="/useradmin.php" rel="noopener nofollow" class="link">Benutzerverwaltungsseite</a>.<br/>Wenn Sie eine neue Shell-Umgebung hinzufügen möchten, können Sie dies durch Bearbeiten des <code>/etc/shells</code>-Datei und fügen Sie den Pfad zur Shell-Umgebung hinzu, die Sie hinzufügen möchten.</p>';
$L['SET_USER_SHELL_DANGER_CONTENT']  = '<p><strong>Achtung:</strong> Bitte beachten Sie, dass die Änderung der Shell-Umgebung auf etwas anderes als <code>/bash</code> zu unbeabsichtigtem Verhalten bei der Verwendung von <code>qb</code> (QuickBox), da es speziell für die Umgebung <code>/bash</code> entwickelt und optimiert wurde. Kurz gesagt, <code>qb</code> basiert auf spezifischen Features und Funktionalitäten, die von der Bash-Shell bereitgestellt werden.<br><br>Um potenzielle Probleme zu vermeiden, ist es ratsam, bei <code>/bash</code> Umgebung bei Verwendung von <code>qb</code>. Wenn Sie dennoch eine andere Shell verwenden möchten, konsultieren Sie die Dokumentation dieser Shell, um alle zusätzlichen Änderungen an Pfaden, Konfigurationen oder anderen Einstellungen zu überprüfen, die möglicherweise aktualisiert werden müssen, um die Kompatibilität mit <code>qb</code> sicherzustellen.</p>';
$L['USER_RCLONE_COMPANION_COMMANDS'] = 'Rclone Companion-Befehle';

/* **********************************
 * #4.4.7.7 - clean functions
 ************************************/
$L['CLEAN_FUNCTIONS']                  = 'Funktionen bereinigen';
$L['CLEAN_FUNCTIONS_INFO_CONTENT']     = '<p>Die <code>qb clean</code>-Funktionen in QuickBox bieten eine bequeme und effiziente Möglichkeit, die Sauberkeit Ihres Servers aufrechtzuerhalten und seine Leistung zu optimieren. Diese Funktionen sind auf Einfachheit und Effektivität ausgelegt und ermöglichen es Ihnen, wertvollen Speicher freizugeben, unnötige Unordnung zu beseitigen und einen reibungslosen und optimierten Serverbetrieb sicherzustellen.</p>';
$L['CLEAN_MEMORY']                     = 'Speicher bereinigen';
$L['CLEAN_MEMORY_CONTENT']             = 'Bereinigt QuickBox-Speichercaches';
$L['CLEAN_DASHBOARD_LOGS']             = 'Dashboard-Protokolle bereinigen';
$L['CLEAN_DASHBOARD_LOGS_CONTENT']     = 'Bereinigt die QuickBox-Dashboard-Protokolle für den angegebenen Benutzer';
$L['CLEAN_QB_DASHBOARD_LOGS']          = 'Bereinigt QB-Dashboard-Protokolldateien';
$L['CLEAN_QB_DASHBOARD_LOGS_CONTENT']  = 'Dieser Befehl soll das aktuelle UI-Aktionsprotokoll aus Syslog löschen und das UI-Nginx-Fehlerprotokoll auf seinen ursprünglichen Zustand zurücksetzen.';
$L['CLEAN_SYSTEM_LOGS']                = 'Alte Systemprotokolldateien entfernen';
$L['CLEAN_SYSTEM_LOGS_CONTENT']        = 'Dieser Befehl dient zum Löschen von Protokollen und komprimierten Archiven im Verzeichnis <code>/var/log</code>, die den zugewiesenen Aufbewahrungszeitraum überschritten haben. Der Aufbewahrungszeitraum ist standardmäßig auf 7 Tage eingestellt (sofern kein optionaler Wert eingegeben wird).';
$L['CLEAN_RCLONE_UPLOAD_LOGS']         = 'Rclone-Upload-Protokolle bereinigen';
$L['CLEAN_RCLONE_UPLOAD_LOGS_CONTENT'] = 'Bereinigt die QuickBox-RClone-Upload-Protokolle für den angegebenen Benutzer';
$L['CLEAN_LOCKS']                      = 'Sperren bereinigen';
$L['CLEAN_LOCKS_CONTENT']              = 'Reinigt QuickBox-Software und apt-dpkg-Sperren, die QuickBox möglicherweise daran hindern, neue Software zu installieren';

/* **********************************
 * #4.4.7.8 - fix functions
 ************************************/
$L['FIX_FUNCTIONS']              = 'Funktionen reparieren';
$L['FIX_FUNCTIONS_INFO_CONTENT'] = '<p>Die <code>qb fix</code>-Funktionen in QuickBox bieten ein leistungsstarkes und benutzerfreundliches Toolkit, um häufige Probleme zu beheben und Systemreparaturen mühelos durchzuführen. Mit dem Fokus auf Einfachheit und Effektivität ermöglichen Ihnen diese Funktionen die Fehlerbehebung und Lösung verschiedener Probleme, die auf Ihrem Server auftreten können, und sorgen so für einen reibungslosen und unterbrechungsfreien Betrieb.</p>';
$L['FIX_HOME']                   = 'Startseite reparieren';
$L['FIX_HOME_CONTENT']           = 'Berechtigungen für das Home-Verzeichnis bestimmter Benutzer korrigieren';
$L['FIX_PHP']                    = 'PHP reparieren';
$L['FIX_PHP_CONTENT']            = 'PHP-Konfiguration korrigieren und fehlende Erweiterungen installieren. Dadurch werden auch PHP-Pakete auf die neueste Version aktualisiert.';
$L['FIX_PYTHON']                 = 'Python reparieren';
$L['FIX_PYTHON_CONTENT']         = 'Python-Konfiguration korrigieren und fehlende Erweiterungen installieren. Stellt zusätzlich Python3.9 bereit, wenn es derzeit nicht auf dem System verfügbar ist, für die Standardverwendung bei Anwendungs-Builds, die Python erfordern.';
$L['FIX_VERSION']                = 'Version reparieren';
$L['FIX_VERSION_CONTENT']        = 'QuickBox-Installation durch Neuinstallation der neuesten verfügbaren Version beheben';

/* **********************************
 * #4.4.7.9 - generate functions
 ************************************/
$L['GENERATE_FUNCTIONS']                   = 'Funktionen generieren';
$L['GENERATE_FUNCTIONS_INFO_CONTENT']      = '<p>Die <code>qb generate</code>-Funktionen in QuickBox bieten eine bequeme und effiziente Möglichkeit, wesentliche Elemente zu erstellen, die die Serververwaltung und -überwachung verbessern. Derzeit unterstützt der qb-Generate-Befehl die qb-Generate-Logs-Funktion, sodass Benutzer mühelos eine Vorschau der Serverstatistiken, der API-Aktivierung und der Bereitstellungsinformationen erstellen können.<br/>Da sich die qb-Generate-Funktionen weiterentwickeln, werden sie wahrscheinlich ein wachsendes Array anbieten von Funktionen zur weiteren Verbesserung der Serververwaltung.</p>';
$L['GENERATE_SYSTEM_LOGS']                 = 'Systemprotokolle generieren';
$L['GENERATE_SYSTEM_LOGS_CONTENT']         = 'Generiert Systemprotokolle für die aktuelle QuickBox-Installation';
$L['GENERATE_SYSTEM_LOGS_WARNING_CONTENT'] = '<p>Ab Version <em>3.0.0.<strong>36+</strong></em> hat sich <code>qb generate log</code> zu einem entwickelt Ausführlicheres Dienstprogramm zur Protokollaggregation und -organisation. Ziel ist es, den Protokollabruf zu vereinfachen, indem die nativen Protokolle einer Anwendung durch die Zusammenfassung und Zentralisierung kritischer Protokolldaten ergänzt werden, wodurch die Fehlerbehebung deutlich effizienter wird.</p><p>Dieser Befehl und seine Funktionalität sind noch in Arbeit.</p>';
$L['GENERATE_SYSTEM_LOGS_SUCCESS_CONTENT'] = '<p>Sie können auf diese zusammenfassende Protokolldatei auf drei Arten zugreifen und sie herunterladen:<br><ol><li><strong>Generieren/Herunterladen:</strong> Gehen Sie zu \'System > <a href="/troubleshooting.php" class="link">Fehlerbehebung</a> > Systemprotokoll\' innerhalb der Benutzeroberfläche. Hier können Sie die Systemprotokollzusammenfassung generieren und/oder herunterladen, die mit dem Befehl « generate log » erstellt wurde.</li><li><strong>Protokolle anzeigen:</strong> Gehen Sie zu \'System > <a href="/logs.php" class="link">Systemprotokolle</a>\'. Hier finden Sie zusätzliche Protokolle und Informationen, die mit dem Befehl « Protokoll generieren » gesammelt wurden.</li><li><strong>Serververzeichnis:</strong> Finden Sie es auf dem Server unter: \'/srv/quickbox/logs/system_log\'.</li></ol></p>';

/* **********************************
 * #4.4.7.10 - manage functions
 ************************************/
$L['MANAGE_FUNCTIONS']                                  = 'Funktionen verwalten';
$L['MANAGE_FUNCTIONS_INFO_CONTENT']                     = '<p>Die <code>qb manage</code>-Funktionen in QuickBox bieten leistungsstarke und umfassende Tools zur effizienten Verwaltung verschiedener Aspekte Ihres Servers. Diese Funktionen wurden im Hinblick auf den Benutzerkomfort entwickelt und ermöglichen Ihnen die mühelose Steuerung wichtiger Elemente Ihrer QuickBox-basierten Umgebung.<br/>Ganz gleich, ob Sie Spracheinstellungen austauschen, den Status Ihrer Haupt-API-Aktivierung überprüfen, die Datenverteilung verwalten oder … Die QB-Verwaltungsfunktionen gewährleisten die Datenintegrität durch Backups und Rollbacks und bieten eine umfassende Lösung für Serveradministratoren und Enthusiasten gleichermaßen.</p>';
$L['MANAGE_API_KEY']                                    = 'API-Schlüssel verwalten';
$L['MANAGE_API_KEY_CONTENT']                            = 'QuickBox-API-Schlüssel verwalten und zusätzliche Informationen und Optionen auflisten';
$L['ADD_API_KEY']                                       = 'API-Schlüssel hinzufügen';
$L['ADD_API_KEY_CONTENT']                               = 'API-Schlüssel hinzufügen/aktivieren';
$L['REMOVE_API_KEY']                                    = 'API-Schlüssel entfernen';
$L['REMOVE_API_KEY_CONTENT']                            = 'API-Schlüssel entfernen/deaktivieren';
$L['MANAGE_DATABASE']                                   = 'Datenbank verwalten';
$L['MANAGE_DATABASE_CONTENT']                           = 'Verwalten Sie, welche Datenbank für QuickBox verwendet wird';
$L['MANAGE_DATABASE_CONNECTION_INFO_CONTENT']           = 'Bitte beachten Sie, dass bei der Angabe eines Benutzernamens und Passworts (falls die Optionen verwendet werden) diese nicht mit den Anmeldeinformationen Ihres aktuellen Hauptkontos übereinstimmen müssen. Diese Anmeldeinformationen sind für die Verwendung im lokalen System gedacht, insbesondere für Datenbankverbindungen und verschiedene Systemfunktionen. Daher können sie eindeutig und unabhängig vom Benutzernamen und Passwort Ihres Hauptkontos sein.';
$L['MANAGE_DATABASE_INFO_CONTENT']                      = 'QuickBox verwendet hauptsächlich SQLite3 als Standarddatenbank. Mit diesem Befehl haben Sie jedoch die Möglichkeit, nahtlos zwischen SQLite3 und MySQL zu wechseln. Wenn Sie sich für MySQL entscheiden, stellen Sie sicher, dass auf Ihrem System ein MySQL-Server ordnungsgemäß installiert und konfiguriert ist. Darüber hinaus benötigen Sie ein MySQL-Benutzerkonto mit entsprechenden Berechtigungen für die Datenbankerstellung und -verwaltung. Die Ausführung dieses Befehls erleichtert diese notwendigen Konfigurationen, einschließlich der Installation des MySQL-Servers und -Clients, sofern diese noch nicht auf Ihrem System installiert sind. Während des Vorgangs werden Sie aufgefordert, den MySQL-Server und -Client zu installieren, falls diese nicht erkannt werden. Darüber hinaus übernimmt der Befehl die Konfigurationseinrichtung und gewährleistet so eine nahtlose Integration mit QuickBox. Bitte beachten Sie, dass alle Parameter außer <code>-o [mysql|sqlite]</code> optional sind und standardmäßig auf vordefinierte Werte im Skript zurückgreifen.<br><br>Die Standardwerte lauten wie folgt:<br><code>user=admin, pass=%random%, port=3306, host=localhost, name=qbpro</code><br><br>MySQL-Details finden Sie unter <code>/root/.my.cnf</code>.<br><br>Um zurück zu SQLite3 zu konvertieren, führen Sie den Befehl einfach erneut mit dem Flag <code>-o sqlite</code> aus.';
$L['MANAGE_DATABASE_BACKUP']                            = 'Datenbanksicherung verwalten';
$L['MANAGE_DATABASE_BACKUP_CONTENT']                    = 'QuickBox-Datenbank sichern';
$L['MANAGE_DATABASE_BACKUP_INFO_CONTENT']               = 'Der QuickBox-Sicherungsprozess wird im Rahmen des Wartungsplans automatisch alle 24 Stunden um 3:30 Uhr (Serverzeit) ausgeführt. Diese Aufgabe wird im Zeitplan <code>/etc/cron.d/quickbox</code> wie folgt aufgeführt:<br><br><code>30 3 * * * root /usr/local/bin/qb manage db -o maintenance --cron</code><br><br>Sie können jedoch mit dem obigen Befehl manuell eine Sicherung auslösen (ohne die Wartungsroutine auszuführen).<br><br><strong>Informationen zum Sicherungsprozess</strong><br><br>Jede Sicherung erstellt einen Snapshot der QuickBox-Datenbank und bietet einen Wiederherstellungspunkt, um die Datenintegrität bei Datenverlust oder -beschädigung zu schützen. Sicherungsdateien werden in einem angegebenen Verzeichnis gespeichert. Das System behält dabei die 5 aktuellsten Sicherungen bei, um sicherzustellen, dass Ihnen immer mehrere Wiederherstellungspunkte zur Verfügung stehen.<br><br><strong>Speicherorte für Sicherungsdateien</strong><br><br>Sicherungsdateien werden in den folgenden Verzeichnissen gespeichert:<br><br><strong>MySQL</strong>: <code>/opt/quickbox/backup/system/[DATE_TIME]/db/qbpro.sql</code><br><strong>SQLite</strong>: <code>/opt/quickbox/backup/system/[DATE_TIME]/db/qbpro.db</code>';
$L['MANAGE_DATABASE_MAINTENANCE']                       = 'Datenbankwartung verwalten';
$L['MANAGE_DATABASE_MAINTENANCE_CONTENT']               = 'QuickBox-Datenbankwartungsprozess starten';
$L['MANAGE_DATABASE_MAINTENANCE_INFO_CONTENT']          = 'Der QuickBox-Wartungsprozess ist darauf ausgelegt, die Datenbank reibungslos und effizient laufen zu lassen. Dieser Prozess umfasst:<br><br><ol><li>Bereinigen nicht benötigter Daten.</li><li>Optimieren von Datenbanktabellen.</li><li>Ausführen anderer Wartungsaufgaben zur Steigerung der Effizienz und Vermeidung von Datenproblemen, wie z. B. Überprüfen und Reparieren von Tabellen.</li><li>Auslösen einer MotD-Benachrichtigung (Message of the Day), um den Systemadministrator über die CLI zu benachrichtigen, wenn nicht behebbare Fehler auftreten.</li></ol><p><strong>Wann die Wartung ausgeführt wird</strong><br><br>Der Wartungsprozess wird automatisch alle 24 Stunden um 3:30 Uhr Serverzeit ausgeführt. Diese Aufgabe wird im Zeitplan <code>/etc/cron.d/quickbox</code> wie folgt aufgeführt:<br><br><code>30 3 * * * root /usr/local/bin/qb manage db -o maintenance --cron</code><br><br>Sie können die Wartung jedoch mit dem obigen Befehl manuell auslösen.<br><br><strong>Warum Wartung wichtig ist</strong><br><br>Regelmäßige Wartung stellt sicher, dass Ihre QuickBox-Datenbank gesund bleibt, die Systemleistung hoch bleibt und Ihre Daten geschützt sind.</p>';
$L['MANAGE_DATABASE_RESTORE']                           = 'Datenbankwiederherstellung verwalten';
$L['MANAGE_DATABASE_RESTORE_CONTENT']                   = 'QuickBox-Datenbank wiederherstellen';
$L['MANAGE_DATABASE_RESTORE_INFO_CONTENT']              = 'Dieser Befehl leitet den Datenbankwiederherstellungsprozess ein und ermöglicht Ihnen die Auswahl einer bestimmten Sicherungsdatei zur Wiederherstellung. Der Wiederherstellungsprozess ist darauf ausgelegt, Daten im Falle von Datenverlust oder -beschädigung wiederherzustellen und bietet eine zuverlässige und effiziente Möglichkeit, Ihre QuickBox-Datenbank in einen früheren Zustand zurückzusetzen.<br><br><strong>So funktioniert der Wiederherstellungsprozess</strong><br><br>Wenn Sie den Wiederherstellungsbefehl ausführen, wird Ihnen ein Auswahlmenü mit allen verfügbaren Datenbanksicherungsdateien angezeigt. Sie können dann die Sicherungsdatei auswählen, die Sie wiederherstellen möchten, und das System stellt die ausgewählte Sicherungsdatei automatisch wieder her und versetzt Ihre QuickBox-Datenbank in den Zustand, in dem sie sich befand, als die Sicherung erstellt wurde.';
$L['MANAGE_DASHBOARD_ACCESS_URL']                       = 'Dashboard-Zugriffs-URL verwalten';
$L['MANAGE_DASHBOARD_ACCESS_URL_CONTENT']               = 'Dieser Befehl legt das Server-Webstammverzeichnis für den Dashboard-Zugriff entweder auf die angegebene Domäne oder IP-Adresse fest';
$L['SET_SERVER_LANG']                                   = 'Serversprache festlegen';
$L['SET_SERVER_LANG_CONTENT']                           = 'Dieser Befehl legt die angeforderte Sprache als Standardsprache für den Server fest';
$L['MANAGE_PUBLIC_TRACKERS']                            = 'Öffentliche Tracker verwalten';
$L['MANAGE_PUBLIC_TRACKERS_CONTENT']                    = 'Dieser Befehl aktiviert oder deaktiviert öffentliche Tracker für alle Benutzer';
$L['EX_PUB_TRACKERS_ALLOW']                             = 'Beispiel zum Zulassen öffentlicher Tracker:';
$L['EX_PUB_TRACKERS_DISALLOW']                          = 'Beispiel, um öffentliche Tracker zu verbieten:';
$L['BACKUP_APPLICATIONS']                               = 'Anwendungen sichern';
$L['PARTIAL_CONFIG_ONLY_BACKUP']                        = 'Teilweise Sicherung <span class="badge badge-pills outline-badge-secondary badge-table-menu" style="padding:2px 6px;line-height:0.7rem;font-size:0.5rem;">config only</span>';
$L['PARTIAL_CONFIG_ONLY_BACKUP_CONTENT']                = 'Dieser Befehl sichert die angegebene Anwendungskonfiguration für den zugewiesenen Benutzer.';
$L['FULL_CONFIG_AND_APP_BACKUP']                        = 'Vollständige Sicherung <span class="badge badge-pills outline-badge-primary badge-table-menu" style="padding:2px 6px;line-height:0.7rem;font-size:0.5rem;">config &amp; app</span>';
$L['FULL_CONFIG_AND_APP_BACKUP_CONTENT']                = 'Dieser Befehl sichert die angegebene Anwendung für den zugewiesenen Benutzer. Enthält die Anwendungs- und Konfigurationsdaten, praktisch zum Zurücksetzen auf zuvor installierte und gesicherte Versionen.';
$L['PARTIAL_RTORRENT_ALL_USERS_BACKUP']                 = 'Teilsicherung (nur Rtorrent)';
$L['PARTIAL_RTORRENT_ALL_USERS_BACKUP_PRIMARY_CONTENT'] = '<p>Im Fall von rtorrent als zu sichernde Softwarekonfiguration ist das Benutzernamen-Flag (<code>-u</code>) nicht erforderlich.</p>';
$L['PARTIAL_RTORRENT_ALL_USERS_BACKUP_CONTENT']         = 'Dieser Befehl sichert alle vorhandenen .rtorrent.rc-Dateien von Rtorrent-Benutzern.<br>Sicherungen werden gespeichert unter:<br><code>/home/[USERNAME]/.QuickBox/software/rtorrent /backup/.rtorrent.rc_YEAR-MONTH-DAY_HOUR:MINUTE</code>';
$L['ROLLBACK_APPLICATIONS']                             = 'Anwendungssicherung rückgängig machen';
$L['ROLLBACK_APPLICATIONS_CONTENT']                     = 'Dieser Befehl setzt die angegebene Anwendung für den zugewiesenen Benutzer auf eine frühere Version zurück, die im Sicherungsverzeichnis gespeichert/ausgewählt ist.<br>Sicherungen werden gespeichert unter:<br><code>/home/[USERNAME]/.QuickBox/software/[SOFTWARE_NAME]/backup/</code>';
$L['RESTORE_APP_BACKUP_CONFIG']                         = 'Backup wiederherstellen <span class="badge badge-pills outline-badge-secondary badge-table-menu" style="padding:2px 6px;line-height:0.7rem;font-size:0.5rem;">config only</span>';
$L['RESTORE_APP_BACKUP_CONFIG_CONTENT']                 = 'Dieser Befehl stellt die zuvor gesicherte Anwendungskonfiguration für den zugewiesenen Benutzer wieder her';
$L['RESTORE_APP_DEFAULT_CONFIG']                        = 'Standard wiederherstellen <span class="badge badge-pills outline-badge-secondary badge-table-menu" style="padding:2px 6px;line-height:0.7rem;font-size:0.5rem;">config only</span>';
$L['RESTORE_APP_DEFAULT_CONFIG_CONTENT']                = 'Dieser Befehl stellt die festgelegte Standardanwendungskonfiguration (aus der Installation) für den zugewiesenen Benutzer wieder her';

/* **********************************
 * #4.4.7.11 - news functions
 ************************************/
$L['NEWS_FUNCTIONS']              = 'News-Funktionen';
$L['NEWS_FUNCTIONS_INFO_CONTENT'] = '<p>Die Funktion <code>qb news</code> in QuickBox liefert zeitnahe und relevante Nachrichtenaktualisierungen direkt an Ihren Server und stellt so sicher, dass Sie über die neuesten Entwicklungen und Änderungen im QuickBox-Ökosystem auf dem Laufenden bleiben . Mit dem Fokus darauf, Sie auf dem Laufenden zu halten, bietet diese Funktion wichtige Informationen über aktuelle und kommende Veröffentlichungen, Versionsänderungen und andere interessante Dinge.</p>';
$L['NEWS']                        = 'Neuigkeiten';
$L['NEWS_CONTENT']                = 'Neueste QuickBox-Neuigkeiten anzeigen';

/* **********************************
 * #4.4.7.12 - support functions
 ************************************/
$L['SUPPORT_FUNCTIONS']              = 'Unterstützungsfunktionen';
$L['SUPPORT_FUNCTIONS_INFO_CONTENT'] = '<p>Die Funktion <code>qb support</code> in QuickBox bietet eine sichere und zuverlässige Methode, um Support-Mitarbeitern Zugriff auf Ihren Server zu gewähren, wenn Hilfe benötigt wird. Mit einem starken Schwerpunkt auf Sicherheit und Benutzerschutz nutzt diese Funktion das <code>quickSupport</code>-Konto und stellt so sicher, dass nur autorisiertes Supportpersonal auf Ihren Server zugreifen kann.</p>';
$L['ENABLE_SUPPORT']                 = 'Unterstützung aktivieren';
$L['ENABLE_SUPPORT_CONTENT']         = 'Unterstützung aktivieren. Wird normalerweise dem Mitarbeiter zugewiesen, der für den Support verantwortlich ist.';
$L['DISABLE_SUPPORT']                = 'Unterstützung deaktivieren';
$L['DISABLE_SUPPORT_CONTENT']        = 'Unterstützung deaktivieren. Andernfalls löscht sich das Support-Konto automatisch nach 36 Stunden.';

/* **********************************
 * #4.4.7.13 - update functions
 ************************************/
$L['UPDATE_FUNCTIONS']              = 'Funktionen aktualisieren';
$L['UPDATE_FUNCTIONS_INFO_CONTENT'] = '<p>Die Funktion <code>qb update</code> in QuickBox bietet Ihnen eine bequeme und flexible Möglichkeit, Updates für Ihre QuickBox-Installation zu verwalten. Mit dieser Funktion haben Sie die volle Kontrolle über den Aktualisierungsprozess, sodass Sie manuell nach Aktualisierungen suchen und auswählen können, wann diese angewendet werden sollen.</p>';
$L['UPDATE_CHECK']                  = 'Aktualisierungsprüfung';
$L['UPDATE_CHECK_CONTENT']          = 'Nach Updates für QuickBox suchen';
$L['UPDATE_QUICKBOX']               = 'QuickBox aktualisieren';
$L['UPDATE_QUICKBOX_CONTENT']       = 'QuickBox-Installation auf die neueste Version aktualisieren, falls verfügbar';

/* **********************************
 * #4.4.7.14 - bugs & reporting
 ************************************/
$L['BUGS']              = 'Fehler und Berichte';
$L['BUGS_INFO_CONTENT'] = '<p>Die grafische Darstellung der QuickBox-Dokumentation wird regelmäßig aktualisiert, um sicherzustellen, dass die bereitgestellten Informationen leicht zugänglich und benutzerfreundlich bleiben. Unser Engagement, Ihre Erfahrung mit QuickBox zu verbessern, treibt uns dazu, die Dokumentation kontinuierlich zu verfeinern und zu verbessern und sie mit den neuesten Features und Funktionalitäten auf dem neuesten Stand zu halten.<br/><br/>
Mit jedem Update werden wir uns bemühen, komplexe Konzepte zu vereinfachen, Anweisungen zu verdeutlichen und Benutzerfeedback einzubeziehen, um die qb-Manpage noch intuitiver und effizienter zu gestalten. Unser Ziel ist es, Ihnen ein nahtloses Verständnis von QuickBox und seinen umfangreichen Funktionen zu vermitteln, sodass Sie die qb-CLI-Umgebung beherrschen und Ihre Serveraufgaben mühelos verwalten können.<br/><br/>
Wir schätzen Ihren Beitrag und ermutigen Sie, Vorschläge oder Ideen mitzuteilen, die Sie zur weiteren Verbesserung der qb-Manpage haben. Ihr Feedback trägt maßgeblich zur Gestaltung dieser Ressource bei und stellt sicher, dass sie eine wertvolle Referenz für alle QuickBox-Benutzer bleibt. Tatsächlich existiert diese Seite, weil sie angefordert wurde! 🤪<br/><br/>
Melden Sie reproduzierbare Fehler oder Vorschläge an <strong><a href="https://nullrefer.ir/?https://lab.quickbox.io/QuickBox/pro-v3/-/issues" rel="noopener nofollow" target="_blank">QuickBox.IO Labs Issue & Feature Tracker</a></strong></p>';

/* **********************************
 * #4.4.7.15 - disclaimer
 ************************************/
$L['DISCLAIMER']      = 'Haftungsausschluss';
$L['DISCLAIMER_TEXT'] = '<p>Dieses Skript ist für den allgemeinen Gebrauch bestimmt und es wird keine Garantie für die Eignung für eine bestimmte aufgabe übernommen. QuickBox.IO übernimmt keine Verantwortung für Ihr Setup oder Schäden, die während der Verwendung / Installation / Änderung dieses Skripts oder eines seiner Plugins entstanden sind. Bitte beachten Sie, dass QuickBox.IO und seine Mitarbeiter dafür verantwortlich sind, Ihre Software und / oder Ihren Server auf dem neuesten Stand zu halten. Diese Verantwortung liegt ausschließlich beim Benutzer der QuickBox Pro-Software.</p>';

/* **********************************
 * #4.4.7.16 - license
 ************************************/
$L['LICENSE']      = 'Lizenz';
$L['LICENSE_SET']  = 'Lizenziert unter BSD 3-Klausel';
$L['LICENSE_TEXT'] = '<p>Copyright (c) 2018-2024, QuickBox.IO. Alle Rechte vorbehalten. </p>
<p>Die Weiterverteilung und Verwendung in Quell- und Binärformularen mit oder ohne Änderung ist zulässig, sofern die folgenden Bedingungen erfüllt sind:
<ul><li>Bei der Weitergabe von Quellcode müssen der oben genannte Copyright-Hinweis, diese Liste der Bedingungen und der folgende Haftungsausschluss beibehalten werden.</li>
<li style = "font-size: 14px">Bei Weiterverteilungen in binärer Form müssen der obige Copyright-Hinweis, diese Liste der Bedingungen und der folgende Haftungsausschluss in der Dokumentation und / oder anderen mit der Verteilung bereitgestellten Materialien wiedergegeben werden.</li>
<li>Weder der Name des Inhabers des Urheberrechts noch die Namen seiner Mitwirkenden dürfen verwendet werden, um von dieser Software abgeleitete Produkte ohne vorherige schriftliche Genehmigung zu unterstützen oder zu fördern.</li></ul>
<p>DIESE SOFTWARE WIRD VON DEN COPYRIGHT-INHABERN UND DEN-TEILNEHMERN "WIE BESEHEN" UND JEGLICHEN AUSDRÜCKLICHEN ODER IMPLIZIERTEN GEWÄHRLEISTUNGEN ENTHALTEN, EINSCHLIESSLICH DER GEWÄHRLEISTUNG FÜR EINEN TEILNEHMER ZWECK IST HAFTUNGSAUSSCHLUSS. IN KEINEM FALL HAFTET DER COPYRIGHT-INHABER ODER DIE BEITRAGGEBER FÜR DIREKTE, INDIREKTE, ZUFÄLLIGE, SPEZIELLE, BEISPIELHAFTE ODER FOLGESCHÄDEN (EINSCHLIESSLICH, OHNE BESCHRÄNKUNG VON ERSATZWERKEN ODER SERVICES); ODER UNTERBRECHUNG DES GESCHÄFTSZWECKS) JEDOCH VERURSACHT UND AUF EINER THEMA DER HAFTUNG, WENN SIE AUSSCHLIESSLICH DER VERWENDUNG DIESER SOFTWARE AUSSCHLIESSLICH DER VERWENDUNG DIESER SOFTWARE ENTSTEHEN.</p>';

/* **********************************
 * #4.4.7.17 - misc
 ************************************/
$L['EXAMPLE']  = 'Beispiel:';
$L['EXAMPLES'] = 'Beispiele:';

/* **********************************
 * #4.4.8 - CHANGELOG / UPDATE
 ************************************/
$L['CURRENT_VERSION']   = 'Aktuelle Version';
$L['DASH_UPDATE_TITLE'] = 'QuickBox-Versionsübersicht';
$L['QB_UPDATE']         = 'QuickBox-Versionsübersicht';
$L['QBUPDATE']          = 'Änderungsliste / Update';
$L['UPCOMING_CHANGES']  = 'Anstehende Änderungen';
$L['UPDATE_AVAILABLE']  = 'Update verfügbar';
$L['UPDATE_TO_DATE']    = 'Auf dem neusten Stand';
$L['VERSION_STATUS']    = 'Versionsstatus';
$L['UPDATE_TXT']        = 'Aktualisieren';
$L['AVAILABLE_TXT']     = 'Verfügbar!';
$L['UPDATE_VERSION']    = 'Version aktualisieren';
$L['UPDATE_ACTIVATE']   = 'Bitte aktivieren Sie Ihr Pro-Abonnement, um Updates zu erhalten';
$L['UPDATE_CURRENT']    = 'Sie sind auf dem Laufenden!';
$L['CHANGELOGS']        = 'Änderungsprotokolle';

/* **********************************
 * #4.4.9 - SYSTEM DASHBOARD
 ************************************/
$L['DISK_UTIL_TIME']          = 'Festplatten-Auslastungszeit';
$L['DISK_IO_BW']              = 'Festplatten-E/A-Bandbreite';
$L['DISK_SPACE_USAGE_FOR']    = 'Plattenplatznutzung für:';
$L['DISK_UTILIZATION']        = 'Nutzung';
$L['DISK_WRITE']              = 'Schreiben Sie';
$L['DISK_READ']               = 'Lesen Sie';
$L['SYS_DISK_READ']           = 'Festplatte lesen';
$L['SYS_DISK_WRITE']          = 'Diskettenschreiben';
$L['TOP_CPU_PROC']            = 'Top CPU-Anwendungsprozesse';
$L['TOP_CPUMEM_PROC']         = 'Top-CPU-Speicherprozesse';
$L['TOP_CPUSYS_PROC']         = 'Top-CPU-Systemprozesse';
$L['SERVICE_MEM_USAGE']       = 'Systemdienste genutzter Speicher ohne Cache';
$L['SYS_SWAP_USAGE']          = 'Verwendung von Systemaustausch';
$L['SYS_MEM_USAGE']           = 'Nutzung des Systemspeichers';
$L['CPU_FREQ']                = 'Aktuelle CPU-Frequenz';
$L['CPU_LOAD']                = 'CPU-Last';
$L['CPU_USAGE']               = 'CPU-Nutzung';
$L['RAM_USAGE']               = 'RAM-Nutzung';
$L['BW_UPLOAD']               = 'Bandbreiten-Upload';
$L['BW_DOWNLOAD']             = 'Bandbreiten-Download';
$L['SYS_UPLOAD']              = 'Hochladen';
$L['SYS_DOWNLOAD']            = 'Herunterladen';
$L['SYS_DASH_POWERED_BY']     = 'System-Dashboard angetrieben von:';
$L['SYS_DASH_UPTIME']         = 'Systemverfügbarkeit';
$L['SYS_DASH_SWAP_USED']      = 'Gebrauchter Swap';
$L['SYS_DASH_RAM_USED']       = 'Benutzter RAM';
$L['SYS_DASH_CPU']            = 'CPU';
$L['SYS_DASH_TMD']            = 'Monatlicher Gesamt-Download';
$L['SYS_DASH_TMU']            = 'Gesamter Monatlicher Upload';
$L['APT_UPDATES']             = 'APT-Aktualisierungen';
$L['APT_DEPENDENCY']          = 'Abhängigkeits-Paket';
$L['APT_VERSION_INSTALLED']   = 'Aktuelle Version';
$L['APT_VERSION_AVAILABLE']   = 'Verfügbare Version';
$L['UPDATE_APT_DEPENDENCIES'] = 'Aktualisieren Sie apt-abhängigkeiten';

/* **********************************
 * #4.5 - ERROR PAGES
 ************************************/
$L['404HACK'] = 'Autsch! Willst du mich wirklich verletzen?';
$L['404PAGE'] = 'Dies ist nicht die Seite, nach der du suchst.';
$L['404PRO']  = 'Bitte erwerbe einen <a href="https://nullrefer.ir/?https://quickbox.io/product/quickbox-pro-subscription/" rel="noopener nofollow" target="_blank"> QuickBox API-Schlüssel </a>, um auf diese Seite zuzugreifen.';
$L['500PAGE'] = 'Das ist peinlich, etwas scheint schiefgegangen zu sein.';
$L['WHOOPS']  = 'Hoppla!';
