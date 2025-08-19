<?php
return [
  // #4.4.7 - HELP MANUAL
  'QB_HELP'                                           => 'Hilfe-Handbuch',

  // #4.4.7.1 - description
  'DESCRIPTION_CONTENT'                               => '<p>Willkommen zur umfassenden grafischen Darstellung der <code>qb</code>-Manpage, die Ihnen einen übersetzten, vereinfachten und effizienten Ansatz bietet, um auf verschiedene Informationen über QuickBox zuzugreifen. Diese benutzerfreundliche Oberfläche zielt darauf ab, tiefgreifende Einblicke in die Funktionsweise von QuickBox zu bieten, einem leistungsstarken und vielseitigen Tool für die mühelose Verwaltung Ihres Servers.</p><p>In dieser grafischen Darstellung finden Sie eine detaillierte Liste verfügbarer Anwendungen, die bereit für eine nahtlose Installation sind und es Ihnen ermöglichen, Ihr Server-Setup nach Ihren spezifischen Bedürfnissen anzupassen. Darüber hinaus präsentiert diese Ressource eine Fülle anderer wesentlicher Befehle für die optimale Nutzung in der <code>qb</code>-CLI-Umgebung, wodurch Sie Ihre Server-Aufgaben effizient und mühelos durchführen können.</p><p>Ob Sie neu bei QuickBox sind oder ein erfahrener Benutzer, diese grafische Darstellung der <code>qb</code>-Manpage dient als Ihre ultimative Referenz, um das volle Potenzial von QuickBox zu nutzen und die wahre Kraft Ihrer Server-Verwaltung freizusetzen. Erkunden Sie die vielfältigen Funktionen, optimieren Sie Ihre Server-Operationen und maximieren Sie Ihre Produktivität mit Hilfe dieses intuitiven und informativen Leitfadens. Lassen Sie uns eintauchen und Ihre QuickBox-Erfahrung noch lohnender machen!</p>',
  'API_INFO_DIRECT'                                   => '<p style="font-weight:600;">Für weitere Informationen und Referenzen zur eingebetteten QuickBox API <a href="/api-control.php" rel="noopenner nofollow" class="link" style="color:var(--qb-color-37);">siehe diese Seite</a>.</p>',

  // #4.4.7.2 - options
  'OPTIONS_HEADER'                                    => 'Optionen',
  'OPTIONS_CONTENT_HELP'                              => 'Zeigt dieses Hilfe-Handbuch im CLI-Manpage-Format an',
  'OPTIONS_CONTENT_VERBOSE'                           => 'Aktiviert den ausführlichen Modus für die Fehlerbehebung',

  // #4.4.7.3 - software
  'SOFTWARE_HEADER'                                   => 'Software',
  'SOFTWARE_INFO_CONTENT'                             => '<p>Das Folgende ist eine Liste aller verfügbaren Anwendungen für die Installation, die über den QuickBox-Build bereitgestellt werden.<br/>Software-Namen werden angezeigt, wie sie von <code>qb [install|reinstall|update|remove|help] [software_name]</code> gesehen werden</p>',
  'ADMIN_INSTALLED_SOFTWARE_HEADER'                   => 'Vom Administrator installierte Software',
  'ADMIN_INSTALLED_SOFTWARE_INFO_CONTENT'             => '<p>Die folgenden Anwendungen müssen vom Systemadministrator installiert werden.<br/>Siehe Verfügbarkeits-Spalte unten für weitere Details.</p>',
  'MULTI_USER_SOFTWARE_HEADER'                        => 'Multi-User-Software',
  'MULTI_USER_SOFTWARE_INFO_CONTENT'                  => '<p>Die folgenden Anwendungen können von mehreren Benutzern installiert werden, ohne dass Administrator-Hilfe erforderlich ist.<br/>Alle Anwendungsverfügbarkeiten werden vom Systemadministrator bestimmt und zusätzlichen Benutzern innerhalb <a href="/usergroups.php" rel="noopener nofollow" class="link">erstellter Gruppen</a> gewährt.</p>',
  'SINGLE_USER_SOFTWARE_HEADER'                       => 'Einzelbenutzer-Software',
  'SINGLE_USER_SOFTWARE_INFO_CONTENT'                 => '<p>Die folgenden Anwendungen können jeweils nur von einem zugewiesenen Benutzer installiert werden, ohne dass Administrator-Hilfe erforderlich ist.<br/>Alle Anwendungsverfügbarkeiten werden vom Systemadministrator bestimmt und zusätzlichen Benutzern innerhalb <a href="/usergroups.php" rel="noopener nofollow" class="link">erstellter Gruppen</a> gewährt.</p>',
  'SOFTWARE_MANAGEMENT'                               => 'Software-Verwaltung',
  'SOFTWARE_MANAGEMENT_CONTENT'                       => 'Parameter für die Installation, Neuinstallation, Aktualisierung oder Entfernung der bezeichneten Software mit zusätzlichen Optionen (falls vorhanden/gewünscht) für einen zugewiesenen Benutzer',
  'SOFTWARE_MANAGEMENT_WARNING_CONTENT'               => '<p>Beachten Sie, dass verschiedene Anwendungen verschiedene Optionen/Anforderungen haben. Die Mehrheit erfordert die Verwendung des Benutzernamen-Flags (<code>-u</code>), während Anwendungen wie rtorrent dies nicht tun. Um alle verfügbaren Optionen für eine bestimmte Software zu überprüfen, verwenden Sie <code class="language-bash">qb help [software_name]</code>. Die Anwendungsbenennung innerhalb QuickBox für das Software-Benennungsschema kann in der <a href="#software" class="link">Software-Listentabelle</a> oben angezeigt werden.</p>',
  'SEE_ALSO_HEADER'                                   => 'Siehe auch',
  'SEE_ALSO_CONTENT'                                  => 'Zeigt hilfreiche Befehlsverwendung für die bezeichnete Software an',

  // #4.4.7.4 - software options table
  'SOFTWARE_NAME'                                     => 'Software-Name',
  'SOFTWARE_TITLE'                                    => 'Software-Titel',
  'USABILITY'                                         => 'Verwendbarkeit',
  'CAN_ROLLBACK'                                      => 'Rollback-Option',
  'INFO'                                              => 'Info',
  'ADMIN_BADGE'                                       => '<span class="badge badge-pills badge-table-menu" style="padding:2px 6px;line-height:0.7rem;background-color:var(--qb-color-6-rgba);color:#fff;font-size:0.5rem;">nur admin</span>',
  'GLOBAL_BADGE'                                      => '<span class="badge badge-pills badge-table-menu" style="padding:2px 6px;line-height:0.7rem;background-color:var(--qb-color-5-rgba);color:#fff;font-size:0.5rem;">global</span>',
  'MULTI_USER_BADGE'                                  => '<span class="badge badge-pills badge-table-menu" style="padding:2px 6px;line-height:0.7rem;background-color:var(--qb-color-4-rgba);color:#fff;font-size:0.5rem;">multi user</span>',
  'SINGLE_USER_BADGE'                                 => '<span class="badge badge-pills badge-table-menu" style="padding:2px 6px;line-height:0.7rem;background-color:var(--qb-color-3-rgba);color:#fff;font-size:0.5rem;">single user</span>',
  'GLOBAL_INFO'                                       => 'erfordert Admin-Installation und installiert für alle Benutzer im System.',
  'MULTI_USER_INFO'                                   => 'erfordert Admin-Installation und kann für jeden zugewiesenen Benutzer installiert werden. Mehrere Benutzer werden unterstützt.',
  'SINGLE_USER_INFO'                                  => 'Einzelbenutzer, nur Admin. Erfordert Admin-Installation und wird vom Admin-Benutzer installiert und betrieben.',

  // #4.4.7.5 - examples header
  'EXAMPLES_HEADER'                                   => 'Beispiele',

  // #4.4.7.6 - user management
  'USER_MANAGEMENT_INFO_CONTENT'                      => '<p>Die <code>qb user</code>-Verwaltungsfunktionen in QuickBox bieten einen vielseitigen und leistungsstarken Satz von Tools zur effizienten Verwaltung von Benutzern auf Ihrem Server. Mit Fokus auf Benutzerfreundlichkeit und robuste Funktionalität ermöglichen diese Funktionen es Ihnen, die Benutzerverwaltung zu optimieren, die Sicherheit zu verbessern und einen reibungslosen Serverbetrieb zu gewährleisten.</p>',
  'CREATE_USER_CONTENT'                               => 'Erstellt ein neues QuickBox-Benutzerkonto',
  'DELETE_USER_CONTENT'                               => 'Löscht das QuickBox-Benutzerkonto',
  'CHANGE_USER_PASSWORD'                              => 'Benutzerpasswort ändern',
  'CHANGE_USER_PASSWORD_CONTENT'                      => 'Ändert das Passwort für das zugewiesene Benutzerkonto',
  'BAN_USER_CONTENT'                                  => 'Sperrt das zugewiesene Benutzerkonto, verhindert die Anmeldung und stoppt installierte Dienste und ihre Funktionen.',
  'BAN_USER_PRIMARY_CONTENT'                          => '<p><em>Dies <strong>löscht nicht</strong> die Benutzerdaten</em>, deaktiviert nur laufende Dienste und blockiert den Zugang.</p>',
  'UNBAN_USER_CONTENT'                                => 'Entsperrt das zugewiesene Benutzerkonto, ermöglicht die Anmeldung und startet installierte Dienste und ihre Funktionen',
  'PROMOTE_USER_TO_ADMIN'                             => 'Benutzer zum Admin befördern',
  'PROMOTE_USER_TO_ADMIN_CONTENT'                     => 'Befördert den zugewiesenen Benutzer auf Admin-Ebene',
  'DEMOTE_USER_FROM_ADMIN'                            => 'Benutzer vom Admin degradieren',
  'DEMOTE_USER_FROM_ADMIN_CONTENT'                    => 'Degradiert den zugewiesenen Benutzer auf Standard-Benutzerebene',
  'SET_USER_QUOTA'                                    => 'Benutzer-Quota setzen',
  'SHOW_USER_QUOTA'                                   => 'Benutzer-Quota anzeigen',
  'SET_USER_SHELL'                                    => 'Benutzer-Shell setzen',
  'SET_USER_SHELL_CONTENT'                            => 'Setzt die Shell-Umgebung für den zugewiesenen Benutzer',
  'SET_USER_SHELL_INFO_CONTENT'                       => '<p><strong><code>sudo</code></strong><br>vollständige Admin-Berechtigungen für die Server-Umgebung (große Macht... etc)<br><strong><code>full</code></strong><br>voller Zugang zur Server-Umgebung, mit Ausnahme höher privilegierter Bereiche; d.h.: kein sudo und kann nicht auf Root-Verzeichnisse zugreifen.<br><strong><code>limited</code></strong><br>die eingeschränkte Shell-Umgebung. sehr wenig Zugang zu Befehlen und in ihrem eigenen Benutzer-Home-Verzeichnis eingesperrt.</p><hr/><p>Shell-Umgebungen werden vom Systemadministrator gesetzt und können auf der Benutzer-Bearbeitungsseite angezeigt werden, die sich auf der <a href="/useradmin.php" rel="noopener nofollow" class="link">Benutzer-Admin-Seite</a> befindet.<br/>Wenn Sie eine neue Shell-Umgebung hinzufügen möchten, können Sie dies tun, indem Sie die <code>/etc/shells</code>-Datei bearbeiten und den Pfad zur Shell-Umgebung hinzufügen, die Sie hinzufügen möchten.</p>',
  'SET_USER_SHELL_DANGER_CONTENT'                     => '<p><strong>Vorsicht:</strong> Bitte beachten Sie, dass das Ändern der Shell-Umgebung auf etwas anderes als <code>/bash</code> zu unbeabsichtigtem Verhalten führen kann, wenn Sie <code>qb</code> (QuickBox) verwenden, da es speziell für die <code>/bash</code>-Umgebung entwickelt und optimiert wurde. Kurz gesagt, <code>qb</code> verlässt sich auf spezifische Funktionen und Funktionalitäten, die von der Bash-Shell bereitgestellt werden.<br><br>Um potenzielle Probleme zu vermeiden, ist es ratsam, bei der <code>/bash</code>-Umgebung zu bleiben, wenn Sie <code>qb</code> verwenden. Wenn Sie dennoch eine andere Shell verwenden möchten, konsultieren Sie die Dokumentation für diese Shell, um alle zusätzlichen Änderungen an Pfaden, Konfigurationen oder anderen Einstellungen zu überprüfen, die möglicherweise aktualisiert werden müssen, um die Kompatibilität mit <code>qb</code> zu gewährleisten.</p>',
  'USER_RCLONE_COMPANION_COMMANDS'                    => 'Rclone-Begleitbefehle',

  // #4.4.7.7 - clean functions
  'CLEAN_FUNCTIONS'                                   => 'Bereinigungsfunktionen',
  'CLEAN_FUNCTIONS_INFO_CONTENT'                      => '<p>Die <code>qb clean</code>-Funktionen in QuickBox bieten eine bequeme und effiziente Möglichkeit, die Sauberkeit Ihres Servers zu wahren und seine Leistung zu optimieren. Mit Einfachheit und Effektivität im Sinn entwickelt, ermöglichen diese Funktionen es Ihnen, wertvollen Speicher freizugeben, unnötigen Ballast zu entfernen und einen reibungslosen und optimierten Serverbetrieb zu gewährleisten.</p>',
  'CLEAN_MEMORY'                                      => 'Speicher bereinigen',
  'CLEAN_MEMORY_CONTENT'                              => 'Bereinigt QuickBox-Speicher-Caches',
  'CLEAN_DASHBOARD_LOGS'                              => 'Dashboard-Logs bereinigen',
  'CLEAN_DASHBOARD_LOGS_CONTENT'                      => 'Bereinigt QuickBox-Dashboard-Logs für den bezeichneten Benutzer',
  'CLEAN_QB_DASHBOARD_LOGS'                           => 'QB Dashboard-Log-Dateien bereinigen',
  'CLEAN_QB_DASHBOARD_LOGS_CONTENT'                   => 'Dieser Befehl ist darauf ausgelegt, das aktuelle UI-Aktionen-Log zu löschen, das aus dem syslog gepostet wurde, und das UI-Nginx-Fehler-Log auf seinen ursprünglichen Zustand zurückzusetzen',
  'CLEAN_SYSTEM_LOGS'                                 => 'Alte System-Log-Dateien entfernen',
  'CLEAN_SYSTEM_LOGS_CONTENT'                         => 'Dieser Befehl ist darauf ausgelegt, Logs und komprimierte Archive im <code>/var/log</code>-Verzeichnis zu löschen, die den zugewiesenen Aufbewahrungszeitraum überschritten haben. Der Aufbewahrungszeitraum ist standardmäßig auf 7 Tage gesetzt (wenn kein optionaler Wert eingegeben wird).',
  'CLEAN_RCLONE_UPLOAD_LOGS'                          => 'Rclone-Upload-Logs bereinigen',
  'CLEAN_RCLONE_UPLOAD_LOGS_CONTENT'                  => 'Bereinigt QuickBox-rclone-Upload-Logs für den bezeichneten Benutzer',
  'CLEAN_LOCKS'                                       => 'Sperren bereinigen',
  'CLEAN_LOCKS_CONTENT'                               => 'Bereinigt QuickBox-Software- und apt-dpkg-Sperren, die QuickBox daran hindern könnten, neue Software zu installieren',

  // #4.4.7.8 - fix functions
  'FIX_FUNCTIONS'                                     => 'Reparaturfunktionen',
  'FIX_FUNCTIONS_INFO_CONTENT'                        => '<p>Die <code>qb fix</code>-Funktionen in QuickBox bieten ein leistungsstarkes und benutzerfreundliches Toolkit, um häufige Probleme zu beheben und Systemreparaturen mühelos durchzuführen. Mit Fokus auf Einfachheit und Effektivität ermöglichen diese Funktionen es Ihnen, verschiedene Probleme zu beheben und zu lösen, die auf Ihrem Server auftreten könnten, und gewährleisten reibungslose und ununterbrochene Operationen.</p>',
  'FIX_HOME'                                          => 'Home reparieren',
  'FIX_HOME_CONTENT'                                  => 'Repariert die Berechtigungen des Home-Verzeichnisses des bezeichneten Benutzers',
  'FIX_PHP'                                           => 'PHP reparieren',
  'FIX_PHP_CONTENT'                                   => 'Repariert die PHP-Konfiguration und installiert fehlende Erweiterungen',
  'FIX_PYTHON'                                        => 'Python reparieren',
  'FIX_PYTHON_CONTENT'                                => 'Repariert die Python-Konfiguration und installiert fehlende Erweiterungen. Zusätzlich inszeniert python3.9, falls es derzeit nicht auf dem System verfügbar ist, für die Standardverwendung bei Anwendungsbuilds, die Python erfordern',
  'FIX_VERSION'                                       => 'Version reparieren',

  // #4.4.7.9 - generate functions
  'GENERATE_FUNCTIONS'                                => 'Generierungsfunktionen',
  'GENERATE_FUNCTIONS_INFO_CONTENT'                   => '<p>Die <code>qb generate</code>-Funktionen in QuickBox bieten eine bequeme und effiziente Möglichkeit, wesentliche Elemente zu erstellen, die die Server-Verwaltung und -Überwachung verbessern. Derzeit unterstützt der qb generate-Befehl die qb generate logs-Funktion, die es Benutzern ermöglicht, mühelos eine Vorschau der Server-Statistiken, API-Aktivierung und Mount-Informationen zu generieren.<br/>Da sich die qb generate-Funktionen weiterentwickeln, werden sie wahrscheinlich eine wachsende Reihe von Funktionen bieten, um die Server-Verwaltung weiter zu verbessern.</p>',
  'GENERATE_SYSTEM_LOGS'                              => 'System-Logs generieren',
  'GENERATE_SYSTEM_LOGS_CONTENT'                      => 'Generiert System-Logs für die aktuelle QuickBox-Installation',
  'GENERATE_SYSTEM_LOGS_SUCCESS_CONTENT'              => '<p>Sie können auf diese Zusammenfassungs-Log-Datei auf drei Arten zugreifen und sie herunterladen:<br><ol><li><strong>Generieren / Herunterladen:</strong> Gehen Sie zu \'System > <a href="/troubleshooting.php" class="link">Fehlerbehebung</a> > System-Log\' in der Benutzeroberfläche. Hier können Sie die System-Log-Zusammenfassung generieren und/oder herunterladen, die vom generate log-Befehl erstellt wurde.</li><li><strong>Logs anzeigen:</strong> Gehen Sie zu \'System > <a href="/logs.php" class="link">System-Logs</a>\'. Hier finden Sie zusätzliche Logs und Informationen, die vom generate log-Befehl gesammelt wurden.</li><li><strong>Server-Verzeichnis:</strong> Finden Sie es auf dem Server unter: \'/srv/quickbox/logs/system_log\'.</li></ol></p>',
  'GENERATE_SYSTEM_LOGS_WARNING_CONTENT'              => '<p><strong>Warnung:</strong> Dieser Befehl generiert einen umfassenden System-Log, der möglicherweise sensible Informationen enthält. Bitte stellen Sie sicher, dass dieser Log sicher behandelt und nicht öffentlich geteilt wird.</p>',

  // #4.4.7.10 - manage functions
  'MANAGE_FUNCTIONS'                                  => 'Verwaltungsfunktionen',
  'MANAGE_FUNCTIONS_INFO_CONTENT'                     => '<p>Die <code>qb manage</code>-Funktionen in QuickBox bieten einen leistungsstarken und umfassenden Satz von Tools zur effizienten Verwaltung verschiedener Aspekte Ihres Servers. Mit Benutzerfreundlichkeit im Sinn entwickelt, ermöglichen diese Funktionen es Ihnen, kritische Elemente Ihrer QuickBox-Umgebung mühelos zu kontrollieren.<br/>Ob es um das Wechseln von Spracheinstellungen, das Überprüfen des Status Ihrer Haupt-API-Aktivierung, das Verwalten der Datenverteilung oder das Gewährleisten der Datenintegrität durch Backups und Rollbacks geht, bieten die qb manage-Funktionen eine umfassende Lösung für Server-Administratoren und Enthusiasten gleichermaßen.</p>',
  'MANAGE_API_KEY'                                    => 'API-Schlüssel verwalten',
  'MANAGE_API_KEY_CONTENT'                            => 'QuickBox API-Schlüssel verwalten und zusätzliche Informationen und Optionen auflisten',
  'ADD_API_KEY'                                       => 'API-Schlüssel hinzufügen',
  'ADD_API_KEY_CONTENT'                               => 'API-Schlüssel hinzufügen/aktivieren',
  'REMOVE_API_KEY'                                    => 'API-Schlüssel entfernen',
  'REMOVE_API_KEY_CONTENT'                            => 'API-Schlüssel entfernen/deaktivieren',
  'MANAGE_DATABASE'                                   => 'Datenbank verwalten',
  'MANAGE_DATABASE_CONTENT'                           => 'Verwalten, welche Datenbank für QuickBox verwendet wird',
  'MANAGE_DATABASE_CONNECTION_INFO_CONTENT'           => 'Bitte beachten Sie, dass bei der Angabe eines Benutzernamens und Passworts (falls die Optionen verwendet werden) diese nicht mit den Anmeldedaten Ihres aktuellen Hauptkontos übereinstimmen müssen. Diese Anmeldedaten sind für die lokale Systemnutzung vorgesehen, insbesondere für Datenbankverbindungen und verschiedene Systemfunktionen. Daher können sie eindeutig und unabhängig von dem Benutzernamen und Passwort Ihres Hauptkontos sein.',
  'MANAGE_DATABASE_INFO_CONTENT'                      => 'QuickBox verwendet hauptsächlich SQLite3 als Standarddatenbank. Sie haben jedoch die Möglichkeit, nahtlos zwischen SQLite3 und MySQL zu wechseln, indem Sie diesen Befehl verwenden. Wenn Sie sich für MySQL entscheiden, stellen Sie sicher, dass Sie einen MySQL-Server ordnungsgemäß installiert und konfiguriert auf Ihrem System haben. Zusätzlich benötigen Sie ein MySQL-Benutzerkonto mit angemessenen Berechtigungen für die Erstellung und Verwaltung von Datenbanken. Die Ausführung dieses Befehls erleichtert diese notwendigen Konfigurationen, einschließlich der Installation von MySQL-Server und -Client, falls sie nicht bereits auf Ihrem System installiert sind. Während des Prozesses werden Sie aufgefordert, MySQL-Server und -Client zu installieren, falls sie nicht erkannt werden. Zusätzlich behandelt der Befehl die Konfigurationseinrichtung und gewährleistet eine nahtlose Integration mit QuickBox. Bitte beachten Sie, dass alle Parameter außer <code>-o [mysql|sqlite]</code> optional sind und auf vordefinierte Werte innerhalb des Skripts zurückgreifen.<br><br>Die Standardwerte sind wie folgt:<br><code>user=admin, pass=%random%, port=3306, host=localhost, name=qbpro</code><br><br>MySQL-Details finden Sie unter <code>/root/.my.cnf</code>.<br><br>Um zurück zu SQLite3 zu konvertieren, führen Sie den Befehl einfach erneut mit dem <code>-o sqlite</code>-Flag aus.',
  'MANAGE_DATABASE_BACKUP'                            => 'Datenbank-Backup verwalten',
  'MANAGE_DATABASE_BACKUP_CONTENT'                    => 'Backup der QuickBox-Datenbank erstellen',
  'MANAGE_DATABASE_BACKUP_INFO_CONTENT'               => 'Der QuickBox-Backup-Prozess läuft automatisch alle 24 Stunden um 3:30 Uhr (Server-Zeit) als Teil des Wartungsplans. Diese Aufgabe ist im <code>/etc/cron.d/quickbox</code>-Zeitplan aufgeführt als:<br><br><code>30 3 * * * root /usr/local/bin/qb manage db -o maintenance --cron</code><br><br>Sie können jedoch manuell ein Backup auslösen (ohne den Wartungsablauf auszuführen), indem Sie den obigen Befehl verwenden.<br><br><strong>Über den Backup-Prozess</strong><br><br>Jedes Backup erstellt eine Momentaufnahme der QuickBox-Datenbank und bietet einen Wiederherstellungspunkt, um die Datenintegrität im Falle von Datenverlust oder -beschädigung zu schützen. Backup-Dateien werden in einem angegebenen Verzeichnis gespeichert, wobei das System die 5 neuesten Backups behält, um sicherzustellen, dass Sie immer mehrere Wiederherstellungspunkte für die Wiederherstellung zur Verfügung haben.<br><br><strong>Backup-Datei-Standorte</strong><br><br>Backup-Dateien werden in den folgenden Verzeichnissen gespeichert:<br><br><strong>MySQL</strong>: <code>/opt/quickbox/backup/system/[DATE_TIME]/db/qbpro.sql</code><br><strong>SQLite</strong>: <code>/opt/quickbox/backup/system/[DATE_TIME]/db/qbpro.db</code>',
  'MANAGE_DATABASE_MAINTENANCE'                       => 'Datenbank-Wartung verwalten',
  'MANAGE_DATABASE_MAINTENANCE_CONTENT'               => 'Den QuickBox-Datenbank-Wartungsprozess initiieren',
  'MANAGE_DATABASE_MAINTENANCE_INFO_CONTENT'          => 'Der QuickBox-Wartungsprozess ist darauf ausgelegt, die Datenbank reibungslos und effizient laufen zu lassen. Dieser Prozess umfasst:<br><br><ol><li>Bereinigung nicht benötigter Daten.</li><li>Optimierung der Datenbanktabellen.</li><li>Ausführung anderer Wartungsaufgaben zur Steigerung der Effizienz und Verhinderung von Datenproblemen, wie das Überprüfen und Reparieren von Tabellen.</li><li>Auslösen einer Message of the Day (MotD)-Benachrichtigung, um den Systemadministrator über CLI zu alarmieren, falls nicht wiederherstellbare Fehler auftreten.</li></ol><p><strong>Wann die Wartung läuft</strong><br><br>Der Wartungsprozess läuft automatisch alle 24 Stunden um 3:30 Uhr Server-Zeit. Diese Aufgabe ist im <code>/etc/cron.d/quickbox</code>-Zeitplan aufgeführt als:<br><br><code>30 3 * * * root /usr/local/bin/qb manage db -o maintenance --cron</code><br><br>Sie können jedoch manuell die Wartung auslösen, indem Sie den obigen Befehl verwenden.<br><br><strong>Warum Wartung wichtig ist</strong><br><br>Regelmäßige Wartung stellt sicher, dass Ihre QuickBox-Datenbank gesund bleibt, die Systemleistung hoch hält und Ihre Daten schützt.</p>',
  'MANAGE_DATABASE_RESTORE'                           => 'Datenbank-Wiederherstellung verwalten',
  'MANAGE_DATABASE_RESTORE_CONTENT'                   => 'Die QuickBox-Datenbank wiederherstellen',
  'MANAGE_DATABASE_RESTORE_INFO_CONTENT'              => 'Dieser Befehl initiiert den Datenbank-Wiederherstellungsprozess und ermöglicht es Ihnen, eine bestimmte Backup-Datei zur Wiederherstellung auszuwählen. Der Wiederherstellungsprozess ist darauf ausgelegt, Daten im Falle von Datenverlust oder -beschädigung wiederherzustellen und bietet eine zuverlässige und effiziente Möglichkeit, Ihre QuickBox-Datenbank auf einen vorherigen Zustand zurückzusetzen.<br><br><strong>Wie der Wiederherstellungsprozess funktioniert</strong><br><br>Wenn Sie den Wiederherstellungsbefehl ausführen, wird Ihnen ein Auswahlmenü angezeigt, das alle verfügbaren Datenbank-Backup-Dateien auflistet. Sie können dann die Backup-Datei auswählen, die Sie wiederherstellen möchten, und das System stellt automatisch die ausgewählte Backup-Datei wieder her und setzt Ihre QuickBox-Datenbank auf den Zustand zurück, in dem sie sich befand, als das Backup erstellt wurde.',
  'MANAGE_DASHBOARD_ACCESS_URL'                       => 'Dashboard-Zugriffs-URL verwalten',
  'MANAGE_DASHBOARD_ACCESS_URL_CONTENT'               => 'Dieser Befehl setzt den Server-Web-Root für den Dashboard-Zugriff auf die ausgedrückte Domain oder IP-Adresse',
  'SET_SERVER_LANG'                                   => 'Server-Sprache setzen',
  'SET_SERVER_LANG_CONTENT'                           => 'Dieser Befehl setzt die angeforderte Sprache als Standardsprache für den Server',
  'MANAGE_PUBLIC_TRACKERS'                            => 'Öffentliche Tracker verwalten',
  'MANAGE_PUBLIC_TRACKERS_CONTENT'                    => 'Dieser Befehl aktiviert oder deaktiviert öffentliche Tracker für alle Benutzer',
  'EX_PUB_TRACKERS_ALLOW'                             => 'Beispiel zum Erlauben öffentlicher Tracker:',
  'EX_PUB_TRACKERS_DISALLOW'                          => 'Beispiel zum Verweigern öffentlicher Tracker:',
  'BACKUP_APPLICATIONS'                               => 'Anwendungen sichern',
  'PARTIAL_CONFIG_ONLY_BACKUP'                        => 'Teil-Backup <span class="badge badge-pills outline-badge-secondary badge-table-menu" style="padding:2px 6px;line-height:0.7rem;font-size:0.5rem;">nur config</span>',
  'PARTIAL_CONFIG_ONLY_BACKUP_CONTENT'                => 'Dieser Befehl sichert die bezeichnete Anwendungskonfiguration für den zugewiesenen Benutzer',
  'FULL_CONFIG_AND_APP_BACKUP'                        => 'Voll-Backup <span class="badge badge-pills outline-badge-primary badge-table-menu" style="padding:2px 6px;line-height:0.7rem;font-size:0.5rem;">config &amp; app</span>',
  'FULL_CONFIG_AND_APP_BACKUP_CONTENT'                => 'Dieser Befehl sichert die bezeichnete Anwendungskonfiguration und Anwendungsdateien für den zugewiesenen Benutzer',
  'PARTIAL_RTORRENT_ALL_USERS_BACKUP'                 => 'Teil-Backup (nur rtorrent)',
  'PARTIAL_RTORRENT_ALL_USERS_BACKUP_PRIMARY_CONTENT' => '<p>Im Fall von rtorrent als zu sichernde Software-Konfiguration ist das Benutzernamen-Flag (<code>-u</code>) nicht erforderlich.</p>',
  'PARTIAL_RTORRENT_ALL_USERS_BACKUP_CONTENT'         => 'Dieser Befehl sichert alle bestehenden rtorrent-Benutzer .rtorrent.rc-Dateien.<br>Backups werden gespeichert unter:<br><code>/home/[USERNAME]/.QuickBox/software/rtorrent/backup/.rtorrent.rc_YEAR-MONTH-DAY_HOUR:MINUTE</code>',
  'ROLLBACK_APPLICATIONS'                             => 'Anwendungs-Backup zurücksetzen',
  'ROLLBACK_APPLICATIONS_CONTENT'                     => 'Anwendungs-Backups auf einen vorherigen Zustand zurücksetzen',
  'RESTORE_APP_BACKUP_CONFIG'                         => 'Backup wiederherstellen <span class="badge badge-pills outline-badge-secondary badge-table-menu" style="padding:2px 6px;line-height:0.7rem;font-size:0.5rem;">nur config</span>',
  'RESTORE_APP_BACKUP_CONFIG_CONTENT'                 => 'Dieser Befehl stellt die bezeichnete zuvor gesicherte Anwendungskonfiguration für den zugewiesenen Benutzer wieder her',
  'RESTORE_APP_DEFAULT_CONFIG'                        => 'Standard wiederherstellen <span class="badge badge-pills outline-badge-secondary badge-table-menu" style="padding:2px 6px;line-height:0.7rem;font-size:0.5rem;">nur config</span>',
  'RESTORE_APP_DEFAULT_CONFIG_CONTENT'                => 'Dieser Befehl stellt die bezeichnete Standard-Anwendungskonfiguration (von der Installation) für den zugewiesenen Benutzer wieder her',

  // #4.4.7.11 - news functions
  'NEWS_FUNCTIONS'                                    => 'Nachrichtenfunktionen',
  'NEWS_FUNCTIONS_INFO_CONTENT'                       => '<p>Die <code>qb news</code>-Funktionen in QuickBox versorgen Sie mit den neuesten Informationen und Updates über das QuickBox-Projekt. Bleiben Sie über neue Funktionen, Fehlerbehebungen und wichtige Ankündigungen informiert.</p>',
  'NEWS'                                              => 'Nachrichten',
  'NEWS_CONTENT'                                      => 'Neueste QuickBox-Nachrichten anzeigen',

  // #4.4.7.12 - support functions
  'SUPPORT_FUNCTIONS'                                 => 'Support-Funktionen',
  'SUPPORT_FUNCTIONS_INFO_CONTENT'                    => '<p>Die <code>qb support</code>-Funktion in QuickBox bietet eine sichere und zuverlässige Methode, um Support-Mitarbeitern Zugang zu Ihrem Server zu gewähren, wenn Hilfe benötigt wird. Mit starkem Fokus auf Sicherheit und Benutzer-Schutz nutzt diese Funktion das <code>quickSupport</code>-Konto und stellt sicher, dass nur autorisierte Support-Mitarbeiter auf Ihren Server zugreifen können.</p>',
  'ENABLE_SUPPORT'                                    => 'Support aktivieren',
  'ENABLE_SUPPORT_CONTENT'                            => 'Support aktivieren. Typischerweise dem Teammitglied zugewiesen, das für den Support verantwortlich ist',
  'DISABLE_SUPPORT'                                   => 'Support deaktivieren',
  'DISABLE_SUPPORT_CONTENT'                           => 'Support deaktivieren. Andernfalls wird das Support-Konto automatisch nach 36 Stunden gelöscht',

  // #4.4.7.13 - update functions
  'UPDATE_FUNCTIONS'                                  => 'Update-Funktionen',
  'UPDATE_FUNCTIONS_INFO_CONTENT'                     => '<p>Die <code>qb update</code>-Funktion in QuickBox bietet Ihnen eine bequeme und flexible Möglichkeit, Updates für Ihre QuickBox-Installation zu verwalten. Mit dieser Funktion haben Sie die vollständige Kontrolle über den Update-Prozess und können manuell nach Updates suchen und wählen, wann Sie sie anwenden möchten.</p>',
  'UPDATE_CHECK'                                      => 'Update prüfen',
  'UPDATE_CHECK_CONTENT'                              => 'Nach Updates für QuickBox suchen',
  'UPDATE_QUICKBOX'                                   => 'QuickBox aktualisieren',
  'UPDATE_QUICKBOX_CONTENT'                           => 'QuickBox-Installation auf die neueste Version aktualisieren, falls verfügbar',

  // #4.4.7.14 - bugs & reporting
  'BUGS'                                              => 'Fehler & Berichterstattung',
  'BUGS_INFO_CONTENT'                                 => '<p>Die grafische Darstellung der QuickBox-Dokumentation wird regelmäßig aktualisiert, um sicherzustellen, dass die bereitgestellten Informationen leicht zugänglich und benutzerfreundlich bleiben. Unser Engagement für die Verbesserung Ihrer Erfahrung mit QuickBox treibt uns dazu an, die Dokumentation kontinuierlich zu verfeinern und zu verbessern und sie mit den neuesten Funktionen und Funktionalitäten auf dem neuesten Stand zu halten.<br/><br/>
Mit jedem Update werden wir uns bemühen, komplexe Konzepte zu vereinfachen, Anweisungen zu klären und Benutzer-Feedback zu integrieren, um die qb-Manpage noch intuitiver und effizienter zu gestalten. Unser Ziel ist es, Ihnen ein nahtloses Verständnis von QuickBox und seinen umfangreichen Fähigkeiten zu vermitteln, damit Sie die qb-CLI-Umgebung beherrschen und Ihre Server-Aufgaben mühelos verwalten können.<br/><br/>
Wir schätzen Ihren Input und ermutigen Sie, alle Vorschläge oder Ideen zu teilen, die Sie haben könnten, um die qb-Manpage weiter zu verbessern. Ihr Feedback ist entscheidend für die Gestaltung dieser Ressource und stellt sicher, dass sie eine wertvolle Referenz für alle QuickBox-Benutzer bleibt. Tatsächlich existiert diese Seite, weil sie angefordert wurde! 🤪<br/><br/>
Melden Sie alle reproduzierbaren Fehler oder Vorschläge an <strong><a href="https://nullrefer.ir/?https://github.com/QuickBox/pro-v3/issues" rel="noopener nofollow" target="_blank">QuickBox.IO Labs Issue & Feature Tracker</a></strong></p>',

  // #4.4.7.15 - disclaimer
  'DISCLAIMER'                                        => 'Haftungsausschluss',
  'DISCLAIMER_TEXT'                                   => '<p>Dieses Skript ist für den allgemeinen Gebrauch bestimmt und es wird keine Garantie für die Eignung für eine bestimmte Aufgabe impliziert. QuickBox.IO übernimmt keine Verantwortung für Ihr Setup oder Schäden, die bei der Verwendung/Installation/Modifikation dieses Skripts oder seiner Plugins entstehen. Bitte beachten Sie, dass QuickBox.IO noch sein Personal dafür verantwortlich ist, Ihre Software und/oder Ihren Server auf dem neuesten Stand zu halten; dies ist eine Verantwortung, die allein dem Benutzer der QuickBox Pro-Software überlassen bleibt.</p>',

  // #4.4.7.16 - license
  'LICENSE'                                           => 'Lizenz',
  'LICENSE_SET'                                       => 'Lizenziert unter BSD 3-Clause',
  'LICENSE_TEXT'                                      => '<p>Copyright (c) 2018-2025, QuickBox.IO. Alle Rechte vorbehalten.</p>
<p>Die Weiterverbreitung und Verwendung in Quell- und Binärform, mit oder ohne Modifikation, ist unter den folgenden Bedingungen gestattet:</p>
<ul style="font-size:0.75rem"><li>Weiterverbreitungen des Quellcodes müssen den obigen Copyright-Hinweis, diese Liste der Bedingungen und den folgenden Haftungsausschluss beibehalten.</li>
<li>Weiterverbreitungen in Binärform müssen den obigen Copyright-Hinweis, diese Liste der Bedingungen und den folgenden Haftungsausschluss in der Dokumentation und/oder anderen Materialien, die mit der Verbreitung bereitgestellt werden, reproduzieren.</li>
<li>Weder der Name des Copyright-Inhabers noch die Namen seiner Mitwirkenden dürfen verwendet werden, um Produkte, die von dieser Software abgeleitet sind, ohne spezifische vorherige schriftliche Genehmigung zu befürworten oder zu fördern.</li></ul>
<p>DIESE SOFTWARE WIRD VON DEN COPYRIGHT-INHABERN UND MITWIRKENDEN "WIE BESEHEN" BEREITGESTELLT UND JEGLICHE AUSDRÜCKLICHE ODER IMPLIZIERTE GARANTIEN, EINSCHLIESSLICH, ABER NICHT BESCHRÄNKT AUF DIE IMPLIZIERTEN GARANTIEN DER MARKTGÄNGIGKEIT UND EIGNUNG FÜR EINEN BESTIMMTEN ZWECK, WERDEN ABGELEHNT. IN KEINEM FALL SIND DER COPYRIGHT-INHABER ODER DIE MITWIRKENDEN FÜR JEGLICHE DIREKTEN, INDIREKTEN, ZUFÄLLIGEN, BESONDEREN, EXEMPLARISCHEN ODER FOLGESCHÄDEN (EINSCHLIESSLICH, ABER NICHT BESCHRÄNKT AUF DIE BESCHAFFUNG VON ERSATZGÜTERN ODER -DIENSTLEISTUNGEN; VERLUST DER NUTZUNG, DATEN ODER GEWINNE; ODER GESCHÄFTSUNTERBRECHUNG) HAFTBAR, WIE AUCH IMMER VERURSACHT UND UNTER WELCHER THEORIE DER HAFTUNG, OB VERTRAGLICH, STRENGER HAFTUNG ODER UNERLAUBTE HANDLUNG (EINSCHLIESSLICH FAHRLÄSSIGKEIT ODER ANDERWEITIG) ENTSTEHT, DIE IN IRGENDEINER WEISE AUS DER NUTZUNG DIESER SOFTWARE ENTSTEHT, AUCH WENN AUF DIE MÖGLICHKEIT SOLCHER SCHÄDEN HINGEWIESEN WURDE.</p>',

  // #4.4.7.17 - misc
  'EXAMPLE'                                           => 'Beispiel:',
  'EXAMPLES'                                          => 'Beispiele:',
  'LOG_MAINTENANCE'                                   => 'Log-Wartung'
];
