#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Project Name: QuickBox Pro
# File Name: cli_database_de
# File Description: German language file - Database Management
# File Version: 1.0.3
#
# Save Tasks:
# Automated_Versioning: true
#
# Build Tasks:
# Automated_Comment_Strip: true
#
# Deploy Tasks:
# Automated_Encryption: false
#
# Author: Jason Matthews (JMSolo)
# Author Contact: support@quickbox.io
# Author: Jamie Dobbs (Mschf)
# Author Contact: jamie.dobbs@mschf.dev
#
# License: BSD-3 (Available in LICENSE.md)
# Copyright (C) 2019-2025, QuickBox.IO
# All rights reserved.
# <END METADATA>
# shellcheck disable=2001,2034,2154,2312,2317
################################################################################

################################################################################
# Database Installation - MySQL
################################################################################
quickbox::lang::db::install::prompt() {
  declare text="MySQL ist nicht installiert. Möchten Sie es installieren? [j/N]:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::apt() {
  declare text="APT wird aktualisiert..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql_apt() {
  declare text="MySQL APT-Konfiguration wird heruntergeladen..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql_apt::fail() {
  declare text="MySQL APT-Konfiguration konnte nicht heruntergeladen werden."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql_apt::install() {
  declare text="MySQL APT-Konfiguration wird installiert..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql_apt::install::fail() {
  declare text="MySQL APT-Konfiguration konnte nicht installiert werden."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql() {
  declare text="MySQL wird installiert..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::fail() {
  declare text="MySQL konnte nicht installiert werden."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::start::fail() {
  declare text="MySQL konnte nicht gestartet werden."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::enable::fail() {
  declare text="MySQL konnte nicht aktiviert werden."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::success() {
  declare text="MySQL wurde installiert."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::installed() {
  declare text="MySQL ist bereits installiert, Konfiguration wird fortgesetzt."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::config() {
  declare text="MySQL-Konfiguration wird aktualisiert..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::config::backup() {
  declare text="Aktuelle mysqld.cnf-Datei wurde zu mysqld.cnf.backup gesichert."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::config::write() {
  declare text="[*] MySQL-Konfiguration wird gesetzt..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::config::write::fail() {
  declare text="[✗] MySQL-Konfiguration konnte nicht geschrieben werden."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::privileges() {
  declare text="MySQL-Berechtigungen werden gesetzt..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::privileges::fail() {
  declare text="MySQL-Berechtigungen konnten nicht geschrieben werden."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::client() {
  declare text="MySQL-Client-Konfiguration wird gesetzt..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::client::fail() {
  declare text="MySQL-Client-Konfiguration konnte nicht geschrieben werden."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::reload() {
  declare text="Systemctl-Daemon wird neu geladen..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::reload::fail() {
  declare text="Systemctl-Daemon konnte nicht neu geladen werden."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::enable() {
  declare text="MySQL wird aktiviert..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::restart() {
  declare text="MySQL wird neu gestartet..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::restart::fail() {
  declare text="MySQL konnte nicht neu gestartet werden."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::user() {
  declare text="MySQL-Benutzer ${mysql_user} wird erstellt..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::user::fail() {
  declare text="MySQL-Benutzer konnte nicht erstellt werden."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::grant() {
  declare text="Berechtigungen für MySQL-Benutzer ${mysql_user} werden erteilt..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::grant::fail() {
  declare text="Berechtigungen für MySQL-Benutzer konnten nicht erteilt werden."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::flush() {
  declare text="Berechtigungen werden aktualisiert..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::flush::fail() {
  declare text="Berechtigungen konnten nicht aktualisiert werden."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::convert() {
  declare text="Datenbank wird zu MySQL konvertiert..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::convert::success() {
  declare text="Datenbank wurde zu MySQL konvertiert."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::remove() {
  declare text="Möchten Sie die SQLite-Datenbank entfernen? [j/N]:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::remove::fail() {
  declare text="SQLite konnte nicht in PHP deaktiviert werden."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::complete() {
  declare text="MySQL wurde konfiguriert."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::details() {
  declare text="MySQL-Verbindungsdetails:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::connection::details() {
  declare text="Benutzername: ${mysql_user}
Passwort: ${mysql_password}
Port: ${mysql_port}
Host: ${mysql_host}
Datenbank: ${mysql_name}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::mycnf() {
  declare text="Diese Details finden Sie unter /root/.my.cnf"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Database Installation - SQLite
################################################################################
quickbox::lang::db::install::sqlite::backup() {
  declare text="SQLite-Datenbank wird gesichert..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::sqlite::backup::success() {
  declare text="SQLite-Datenbank wurde zu ${sqlite_file}.${date}.backup gesichert"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::sqlite::convert() {
  declare text="Datenbank wird zu SQLite konvertiert..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::sqlite::convert::success() {
  declare text="Datenbank wurde zu SQLite konvertiert."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::sqlite::remove() {
  declare text="Möchten Sie MySQL vollständig entfernen? [j/N]:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::sqlite::remove::mysql() {
  declare text="Möchten Sie die MySQL-Datenbank entfernen? [j/N]:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::sqlite::php::fail() {
  declare text="SQLite konnte nicht in PHP installiert werden."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::sqlite::php::enable::fail() {
  declare text="SQLite konnte nicht in PHP aktiviert werden."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::sqlite::complete() {
  declare text="SQLite-Datenbank-Konvertierungsprozess wurde abgeschlossen."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::sqlite::invalid() {
  declare text="Ungültige Option: ${option}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::sqlite::mysql::notfound() {
  declare text="MySQL-Datenbank nicht gefunden."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::sqlite::notfound() {
  declare text="SQLite-Datenbank nicht gefunden."
  quickbox::dashboard::log "${text}"
}

################################################################################
# Database Backup
################################################################################
quickbox::lang::db::backup::sqlite::integrity() {
  declare text="Integrität der SQLite-Datenbank wird geprüft..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::backup::sqlite::integrity::pass() {
  declare text="Datenbank-Integritätsprüfung bestanden."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::backup::sqlite::complete() {
  declare text="Sicherung abgeschlossen: ${full_backup_path}/qbpro.db"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::backup::sqlite::integrity::fail() {
  declare text="Datenbank-Integritätsprüfung fehlgeschlagen. Keine Sicherung erstellt."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::backup::sqlite::integrity::repair() {
  declare text="
    [WARNUNG] QuickBox-Datenbank-Reparatur!

    Die QuickBox-Datenbank hat die Integritätsprüfung nicht bestanden und eine Reparatur wurde versucht.

    Befehl: REINDEX; VACUUM;

    Sie finden die neuesten Sicherungen unter:
    /opt/quickbox/backup/system/[DATUM]/db/qbpro.db

    Um diese Nachricht zu löschen, führen Sie folgenden Befehl aus:
    rm -f /etc/quickbox_motd
"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::backup::mysql() {
  declare text="MySQL-Datenbank wird gesichert..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::backup::mysql::complete() {
  declare text="MySQL-Sicherung abgeschlossen: ${full_backup_path}/qbpro.sql"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::backup::mysql::fail() {
  declare text="MySQL-Sicherung fehlgeschlagen."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::backup::unsupported() {
  declare text="Nicht unterstützter Datenbanktyp: ${db_type}. Keine Sicherung erstellt."
  quickbox::dashboard::log "${text}"
}

################################################################################
# Database Maintenance
################################################################################
quickbox::lang::db::maintenance::sqlite::repair() {
  declare text="Versuche SQLite-Datenbank zu reparieren..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::sqlite::repair::complete() {
  declare text="SQLite-Datenbank-Reparatur abgeschlossen."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::sqlite::repair::fail() {
  declare text="SQLite-Datenbank konnte nicht repariert werden."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::sqlite::restore::complete() {
  declare text="SQLite-Datenbank-Wiederherstellung abgeschlossen."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::backup::sqlite::integrity::restore() {
  declare text="
    [WARNUNG] QuickBox-Datenbank-Reparatur!

    Die QuickBox-Datenbank hat die Integritätsprüfung nicht bestanden und eine Reparatur wurde versucht.
    Vorherige gültige Sicherung wurde wiederhergestellt und Berechtigungen angepasst.

    Sie finden die neuesten Sicherungen unter:
    /opt/quickbox/backup/system/[DATUM]/db/qbpro.db

    Um diese Nachricht zu löschen, führen Sie folgenden Befehl aus:
    rm -f /etc/quickbox_motd
"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::sqlite() {
  declare text="Wartung der SQLite-Datenbank wird durchgeführt..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::sqlite::backup() {
  declare text="Datenbank wird vor der Wartung gesichert..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::sqlite::optimize() {
  declare text="SQLite-Datenbank wird optimiert (VACUUM)..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::sqlite::optimize::complete() {
  declare text="SQLite-Datenbank-Optimierung abgeschlossen."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::sqlite::optimize::fail() {
  declare text="SQLite-Datenbank konnte nicht optimiert werden."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::sqlite::integrity::fail() {
  declare text="Datenbank-Integritätsprüfung fehlgeschlagen. Keine Wartung durchgeführt."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::mysql() {
  declare text="Wartung der MySQL-Datenbank wird durchgeführt..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::mysql::backup() {
  declare text="MySQL-Datenbank wird vor der Wartung gesichert..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::mysql::backup::fail() {
  declare text="MySQL-Sicherung fehlgeschlagen. Wartung wird übersprungen."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::mysql::optimize() {
  declare text="MySQL-Datenbank-Tabellen werden optimiert..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::mysql::optimize::complete() {
  declare text="MySQL-Datenbank-Optimierung abgeschlossen."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::mysql::optimize::fail() {
  declare text="MySQL-Datenbank konnte nicht optimiert werden."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::mysql::integrity() {
  declare text="Integrität der MySQL-Datenbank wird geprüft..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::mysql::integrity::pass() {
  declare text="MySQL-Datenbank-Integritätsprüfung bestanden."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::mysql::integrity::fail() {
  declare text="MySQL-Datenbank-Integritätsprüfung fehlgeschlagen."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::unsupported() {
  declare text="Nicht unterstützter Datenbanktyp: ${db_type}. Keine Wartung durchgeführt."
  quickbox::dashboard::log "${text}"
}

################################################################################
# Database Restore
################################################################################
quickbox::lang::db::restore::backup::error() {
  declare text="Sicherungsverzeichnis nicht gefunden: ${backup_root}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::restore::backup::empty() {
  declare text="Keine Sicherungen im Sicherungsverzeichnis gefunden."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::restore::backup::select() {
  declare text="Wählen Sie eine Sicherung zur Wiederherstellung aus:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::restore::backup::number() {
  declare text="Geben Sie die Nummer der wiederherzustellenden Sicherung ein: "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::restore::backup::invalid() {
  declare text="Ungültige Auswahl. Bitte versuchen Sie es erneut."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::restore::sqlite::success() {
  declare text="SQLite-Datenbank erfolgreich von ${select_backup} wiederhergestellt."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::restore::sqlite::fail() {
  declare text="SQLite-Datenbank konnte nicht wiederhergestellt werden."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::restore::mysql::success() {
  declare text="MySQL-Datenbank erfolgreich von ${select_backup} wiederhergestellt."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::restore::mysql::fail() {
  declare text="MySQL-Datenbank konnte nicht wiederhergestellt werden."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::restore::unsupported() {
  declare text="Nicht unterstützter Datenbanktyp: ${db_type}. Keine Wiederherstellung durchgeführt."
  quickbox::dashboard::log "${text}"
} 