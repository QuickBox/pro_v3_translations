#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Project Name: QuickBox Pro
# File Name: cli_software_de
# File Description: German language file - Software Management
# File Version: 1.0.37
#
# Save Tasks:
# Automated_Versioning: true
# Automated_Formatting: true
#
# Build Tasks:
# Automated_Comment_Strip: true
#
# Deploy Tasks:
# Automated_Encryption: false
#
# Author: Jason Matthews (JMSolo)
#
# License: BSD-3 (Available in LICENSE.md)
# Copyright (C) 2019-2025, QuickBox.IO
# All rights reserved.
# <END METADATA>
# shellcheck disable=2001,2034,2154,2312,2317
################################################################################

################################################################################
# Install Operations
################################################################################
quickbox::lang::install::header() {
  declare text="${software_title} wird jetzt installiert
dieser Vorgang kann einige Minuten dauern..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::rutorrent::header() {
  rtorrent_count=$(quickbox::software::count rtorrent)
  if [[ ${rtorrent_count} -eq 0 ]]; then
    declare text="es scheint, als ob rTorrent nicht installiert ist

rTorrent 0.9.8 wird jetzt installiert, bitte warten Sie, da dies
einige Minuten dauern kann (abhängig von den Systemanforderungen)"
  else
    declare text="${software_title} wird jetzt installiert
dieser Vorgang kann einige Minuten dauern..."
  fi
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::sources::header() {
  declare text="füge zusätzliche Schlüssel und Quellen für ${software_title} hinzu..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::dependencies::header() {
  declare text="installiere ${software_title} Abhängigkeiten..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::build::header() {
  declare text="baue ${software_title}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::mktorrent::header() {
  declare text="baue mktorrent..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::xmlrpc::header() {
  declare text="baue xmlrpc-c..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::libtorrent::header() {
  declare text="baue libtorrent..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::rtorrent::header() {
  declare text="baue rtorrent..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::certificate::header() {
  declare text="erstelle SSL-Zertifikat für ${d}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::configure::lecert::header() {
  declare text="konfiguriere NGinx für Let's Encrypt..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::configure::header() {
  declare text="konfiguriere ${software_title}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::backup::header() {
  declare text="sichere ${software_title} Konfiguration..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::start::header() {
  declare text="starte ${software_title}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::complete::header() {
  declare text="${software_title} Installation abgeschlossen"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Reinstall Operations
################################################################################
quickbox::lang::reinstall::header() {
  declare text="${software_title} wird jetzt neu installiert
dieser Vorgang kann einige Minuten dauern..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::reinstall::complete::header() {
  declare text="${software_title} Neuinstallation abgeschlossen"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Remove Operations
################################################################################
quickbox::lang::remove::header() {
  declare text="${software_title} wird jetzt entfernt
dieser Vorgang kann einige Minuten dauern..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::remove::stop::header() {
  declare text="stoppe ${software_title}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::remove::dependencies::header() {
  declare text="entferne ${software_title} Abhängigkeiten..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::remove::files::header() {
  declare text="entferne ${software_title} Dateien..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::remove::complete::header() {
  declare text="${software_title} Entfernung abgeschlossen"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Update Operations
################################################################################
quickbox::lang::update::header() {
  declare text="${software_title} wird jetzt aktualisiert
dieser Vorgang kann einige Minuten dauern..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::files::header() {
  declare text="aktualisiere ${software_title}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::complete::header() {
  declare text="${software_title} Aktualisierung abgeschlossen"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::files::admin() {
  declare text="muss als Administrator angemeldet sein, um ${software_title} zu aktualisieren"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Software Access Information
################################################################################
quickbox::lang::software::access() {
  declare text="greife auf ${software_title} zu unter:
${quickbox_web_root}${software_name}
${software_title} installiert auf Port: ${software_web_port}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::mu::access() {
  declare text="greife auf ${software_title} zu unter:
${quickbox_web_root}${username}/${software_name}
${software_title} installiert auf Port: ${software_web_port}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::admin::access() {
  declare text="greife auf ${software_title} zu unter:
${quickbox_web_root}${admin_name}/${software_name}
${software_title} installiert auf Port: ${software_web_port}"
  quickbox::dashboard::log "${text}"
}

################################################################################
# System Command Messages
################################################################################

quickbox::lang::system::enhanced::files::removed() {
  declare text="Erweiterte Dienstdateien erfolgreich entfernt"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::health::check::running() {
  declare text="Führe umfassende Gesundheitsprüfung durch..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::service::status::current() {
  declare text="Aktueller Dienststatus:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::service::logs::recent() {
  declare text="Aktuelle Dienstprotokolle:"
  quickbox::dashboard::log "${text}"
}

################################################################################
# WSDashboard Health Check Messages
################################################################################
quickbox::lang::software::wsdashboard::health::usage() {
  declare text="Verwendung: qbwsd-health-check.sh [--verbose] [--fix]
  --verbose  Aktiviert ausführliche Ausgabe
  --fix      Behebt automatisch häufige Probleme"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::unknown_option() {
  declare text="Unbekannte Option: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::root_warning() {
  declare text="Läuft als Root - einige Prüfungen funktionieren möglicherweise nicht korrekt"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::starting_check() {
  declare text="Starte Gesundheitsprüfung für ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::checking_status() {
  declare text="Prüfe Dienststatus..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::service_running() {
  declare text="Dienst läuft"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::service_not_running() {
  declare text="Dienst läuft nicht"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::checking_config() {
  declare text="Prüfe Dienstkonfiguration..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::config_file_missing() {
  declare text="Dienstkonfigurationsdatei nicht gefunden: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::root_user_warning() {
  declare text="Dienst ist so konfiguriert, dass er als Root läuft (Sicherheitsrisiko)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::no_restart_policy() {
  declare text="Keine Neustart-Richtlinie konfiguriert"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::config_valid() {
  declare text="Dienstkonfigurationsdatei existiert und ist lesbar"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::checking_dependencies() {
  declare text="Prüfe Abhängigkeiten..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::file_missing() {
  declare text="Erforderliche Datei fehlt: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::file_found() {
  declare text="Gefunden: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::directory_missing() {
  declare text="Erforderliches Verzeichnis fehlt: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::directory_found() {
  declare text="Verzeichnis gefunden: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::dependencies_missing() {
  declare text="Fehlende Abhängigkeiten: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::dependencies_available() {
  declare text="Alle Abhängigkeiten sind verfügbar"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::binary_not_executable() {
  declare text="Binärdatei nicht ausführbar: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::permission_issues_detected() {
  declare text="Berechtigungsprobleme erkannt: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::checking_resources() {
  declare text="Prüfe Ressourcenverbrauch..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::service_not_running_skip() {
  declare text="Dienst läuft nicht, überspringe Ressourcenprüfung"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::pid_not_found() {
  declare text="Konnte Dienst-PID nicht ermitteln"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::memory_usage() {
  declare text="Speicherverbrauch: ${1}MB"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::high_memory_usage() {
  declare text="Hoher Speicherverbrauch erkannt: ${1}MB"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::cpu_usage() {
  declare text="CPU-Verbrauch: ${1}%"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::high_cpu_usage() {
  declare text="Hoher CPU-Verbrauch erkannt: ${1}%"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::checking_logs() {
  declare text="Prüfe aktuelle Protokolle..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::recent_errors_found() {
  declare text="Gefunden ${1} Fehlermeldungen in der letzten Stunde"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::no_recent_errors() {
  declare text="Keine aktuellen Fehlermeldungen gefunden"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::log_file_size() {
  declare text="Protokolldatei ${1}: ${2}MB"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::large_log_file() {
  declare text="Große Protokolldatei erkannt: ${1} (${2}MB)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::log_file_not_found() {
  declare text="Protokolldatei nicht gefunden: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::checking_database() {
  declare text="Prüfe Datenbankverbindung..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::database_file_missing() {
  declare text="Datenbankdatei nicht gefunden: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::database_accessible() {
  declare text="Datenbank ist zugänglich und enthält Tabellen"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::active_sessions() {
  declare text="Aktive Sitzungen in der letzten Stunde: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::database_corrupted() {
  declare text="Datenbank ist nicht zugänglich oder beschädigt"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::sqlite3_not_available() {
  declare text="sqlite3 nicht verfügbar, überspringe Datenbankprüfungen"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::attempting_fixes() {
  declare text="Versuche häufige Probleme zu beheben..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::fixing_permissions() {
  declare text="Behebe Node.js virtuelle Umgebungsberechtigungen..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::attempting_restart() {
  declare text="Versuche Dienst neu zu starten..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::restart_successful() {
  declare text="Dienst erfolgreich neu gestartet"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::restart_failed() {
  declare text="Fehler beim Neustarten des Dienstes"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::check_completed_success() {
  declare text="Gesundheitsprüfung erfolgreich abgeschlossen"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::check_completed_issues() {
  declare text="Gesundheitsprüfung mit Problemen abgeschlossen"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::permissions_fixed() {
  declare text="Node.js Binärdatei-Berechtigungen erfolgreich behoben"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::permissions_fix_failed() {
  declare text="Fehler beim Beheben der Node.js Binärdatei-Berechtigungen"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::creating_run_directory() {
  declare text="Erstelle fehlendes Laufzeitverzeichnis..."
  quickbox::dashboard::log "${text}"
}
