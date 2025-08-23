#!/usr/bin/env bash
################################################################################
# Software Configuration Messages Module
# Contains all software configuration, setup, and special handling messages
################################################################################

quickbox::lang::software::ombi_mysql_fallback() {
  declare text="[!] MySQL läuft nicht oder ist nicht verfügbar, DB/Benutzer-Drop wird übersprungen, Fallback wird ausgelöst..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_user_skip() {
  declare text="[i] MySQL-Benutzerlöschung überspringen: '${db_user}' ist in /root/.my.cnf definiert"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_user_remove() {
  declare text="[!] MySQL-Benutzer wird entfernt: '${db_user}'"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_user_retain() {
  declare text="[i] MySQL wird beibehalten, da möglicherweise noch andere Datenbanken oder Benutzer vorhanden sind."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_cleanup_complete() {
  declare text="[✓] MySQL-Bereinigung für ${software_name} abgeschlossen."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_fallback_remove() {
  declare text="[⚙] Fallback-MySQL-Entfernung durchführen (nicht interaktiv)..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_remove() {
  declare text="[*] MySQL-Pakete werden entfernt..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_no_packages() {
  declare text="[i] Keine MySQL-Pakete zum Löschen gefunden."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_autoremove() {
  declare text="[*] Automatisches Entfernen und Bereinigen von Restdateien..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_check() {
  declare text="[*] MySQL-Installation wird überprüft..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_install() {
  declare text="[*] MySQL APT-Repository-Konfiguration wird installiert..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_download_fail() {
  declare text="[✗] MySQL APT-Konfiguration konnte nicht heruntergeladen werden"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_install_fail() {
  declare text="[✗] Das Paket mysql-apt-config konnte nicht installiert werden"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_install_packages() {
  declare text="[*] MySQL-Pakete werden installiert..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_install_retry() {
  declare text="[✗] MySQL-Installation fehlgeschlagen – erneuter Versuch nach Bereinigung"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_install_failed() {
  declare text="[✗] MySQL-Installation erneut fehlgeschlagen"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_config() {
  declare text="[*] MySQL-Konfigurationsdatei wird erstellt..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_start() {
  declare text="[*] MySQL-Dienst starten und aktivieren..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_enable_fail() {
  declare text="[✗] MySQL-Dienst konnte nicht aktiviert werden"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_start_fail() {
  declare text="[✗] MySQL-Dienst konnte nicht gestartet werden"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_config_fail() {
  declare text="[✗] MySQL-Konfiguration /etc/mysql/my.cnf fehlt. Setup wird abgebrochen."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_wait() {
  declare text="[*] Warte, bis der MySQL-Socket bereit ist..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_socket_fail() {
  declare text="[✗] MySQL ist nicht ordnungsgemäß gestartet – Socket fehlt"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_setup() {
  declare text="[*] MySQL-Benutzer und Datenbank für ${db_user} werden eingerichtet..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_configured() {
  declare text="[✓] MySQL für Benutzer '${db_user}' mit DB '${db_name}' konfiguriert"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_migration() {
  declare text="[⚙] Ombi-Migration zu MySQL wird gestartet..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_temp_fail() {
  declare text="[✗] Temporäres Verzeichnis konnte nicht erstellt werden"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_python_fail() {
  declare text="[✗] Python 3 und pip3 sind für die Migration erforderlich"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_pip_fail() {
  declare text="[✗] Erforderliche Python-Pakete konnten nicht installiert werden"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_chdir_fail() {
  declare text="[✗] Verzeichniswechsel zu ${TMP_DIR} fehlgeschlagen"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_clone() {
  declare text="[*] ombi_sqlite_mysql Migrationstool wird geklont..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_clone_fail() {
  declare text="[✗] ombi_sqlite_mysql Repository konnte nicht geklont werden"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_backup() {
  declare text="[!] Sicherung von ${db} erstellt unter ${config_dir}/${db}.bak"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_dbjson_fail() {
  declare text="[✗] database.json konnte nicht generiert werden"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_schema_fail() {
  declare text="[✗] DB-Schema konnte nicht über Ombi erstellt werden"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_migration_fail() {
  declare text="[✗] migration.json konnte nicht erstellt werden"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_data_fail() {
  declare text="[✗] Datenmigration fehlgeschlagen"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_chdir_home_fail() {
  declare text="[✗] Verzeichniswechsel zurück zu ${HOME} fehlgeschlagen"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_remove_sqlite() {
  declare text="[!] Alte SQLite-Datenbank entfernt: ${config_dir}/${db}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_cleanup() {
  declare text="[*] Temporäre Dateien werden bereinigt..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_migration_complete() {
  declare text="[✓] Ombi-Migration zu MySQL erfolgreich abgeschlossen!"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexclaim() {
  declare text="Plex-Server wird für ${username} geclaimt..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_credentials_header() {
  declare text="Bitte geben Sie Ihre Plex-Anmeldedaten ein (Benutzername/Passwort/2FA):"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_credentials_subheader() {
  declare text="Diese Anmeldedaten werden nicht gespeichert oder außerhalb dieser Instanz weitergegeben."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_credentials_email() {
  declare text="E-Mail: "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_credentials_password() {
  declare text="Passwort: "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_credentials_otp() {
  declare text="2FA: [Leer lassen, wenn kein 2FA eingerichtet] "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_credentials_fail() {
  declare text="Benutzername und Passwort werden benötigt, um PlexPass-Update herunterzuladen."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_credentials_incorrect() {
  declare text="Benutzername und/oder Passwort falsch"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_credentials_loginfail() {
  declare text="Anmeldung fehlgeschlagen, Debug-Informationen:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_credentials_retrievefail() {
  declare text="Download-URL konnte nicht abgerufen werden."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_credentials_parsefail() {
  declare text="HTML-Antwort konnte nicht geparst werden."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_downloading() {
  declare text="Plex-Update wird heruntergeladen..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_downloading_fail() {
  declare text="Download fehlgeschlagen mit Fehlercode ${code}, ${error}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_installing() {
  declare text="Neue Plex-Version wird installiert..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_updated() {
  declare text="Plex wurde erfolgreich aktualisiert."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_current() {
  declare text="Plex ist bereits auf dem neuesten Stand."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone_configure() {
  declare text="
Bitte besuchen Sie https://console.developers.google.com und erstellen Sie ein Projekt.
Sie müssen sich Ihre client_id und client_secret notieren.
Sie können auch den folgenden Knowledge Base-Artikel für eine Anleitung besuchen:
https://quickbox.io/knowledge-base/creating-a-google-api-client-id-client-secret-code/

Sobald Sie sowohl Ihre client_id als auch client_secret haben, drücken Sie eine beliebige Taste, um fortzufahren.

"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone_entries() {
  declare text="Geben Sie Ihre Verbindungsdetails unten ein."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone_clientid() {
  declare text="Client ID: "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone_clientsecret() {
  declare text="Client Secret: "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone_encryptpass() {
  declare text="Verschlüsselungspasswort: "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone_saltpass() {
  declare text="Salt Passwort: "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone_salterror() {
  declare text="Salt-Passwort kann nicht dasselbe wie das Verschlüsselungspasswort sein."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone_confirm() {
  declare text="Bitte bestätigen Sie die folgenden Details, bevor Sie fortfahren..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone_clientid_confirm() {
  declare text="Client ID: ${clientvar}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone_clientsecret_confirm() {
  declare text="Client Secret: ${secretvar}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone_encryptpass_confirm() {
  declare text="Verschlüsselungspasswort: ${encvar}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone_saltpass_confirm() {
  declare text="Salt Passwort: ${saltvar}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone_continue() {
  declare text="Wenn Sie mit den obigen Einstellungen zufrieden sind, drücken Sie Y, um fortzufahren..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::znc_configure() {
  declare text="Die ZNC-Konfiguration wird jetzt ausgeführt. Bitte beantworten Sie die folgenden Fragen:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::sonarrv4::update::error() {
  declare text
  text="$(tput setaf 7)Sonarr v4 $(tput setaf 1)kann $(tput setaf 7) nicht von v3 aktualisiert werden.
Bitte deinstallieren Sie v3 und installieren Sie v4.$(tput sgr0)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::build::python311() {
  declare text="Python 3.11 wird installiert, bitte warten Sie, da dies einen Moment dauern kann..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::build::sabnzbd::par2cmdline() {
  declare text="par2cmdline wird installiert. Bitte warten Sie, da dies einen Moment dauern kann..."
  quickbox::dashboard::log "${text}"
}