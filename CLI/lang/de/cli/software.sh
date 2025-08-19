#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Project Name: QuickBox Pro
# File Name: cli_software_de
# File Description: German language file - Software Management
# File Version: 1.0.9
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
# Install Operations
################################################################################
quickbox::lang::install::header() {
  declare text="${software_title} wird jetzt installiert
dieser Prozess kann einige Minuten dauern..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::rutorrent::header() {
  rtorrent_count=$(quickbox::software::count rtorrent)
  if [[ ${rtorrent_count} -eq 0 ]]; then
    declare text="es scheint, als wäre rTorrent nicht installiert

rTorrent 0.9.8 wird jetzt installiert, bitte warten Sie, da dies
je nach Systemleistung einige Minuten dauern kann"
  else
    declare text="${software_title} wird jetzt installiert
dieser Prozess kann einige Minuten dauern..."
  fi
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::sources::header() {
  declare text="Zusätzliche Schlüssel und Quellen für ${software_title} werden hinzugefügt..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::dependencies::header() {
  declare text="${software_title} Abhängigkeiten werden installiert..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::build::header() {
  declare text="${software_title} wird kompiliert..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::mktorrent::header() {
  declare text="mktorrent wird kompiliert..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::xmlrpc::header() {
  declare text="xmlrpc-c wird kompiliert..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::libtorrent::header() {
  declare text="libtorrent wird kompiliert..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::rtorrent::header() {
  declare text="rtorrent wird kompiliert..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::certificate::header() {
  declare text="SSL-Zertifikat für ${d} wird erstellt..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::configure::lecert::header() {
  declare text="NGinx für Let's Encrypt wird konfiguriert..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::configure::header() {
  declare text="${software_title} wird konfiguriert..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::backup::header() {
  declare text="${software_title} Konfiguration wird gesichert..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::start::header() {
  declare text="${software_title} wird gestartet..."
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
dieser Prozess kann einige Minuten dauern..."
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
dieser Prozess kann einige Minuten dauern..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::remove::stop::header() {
  declare text="${software_title} wird gestoppt..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::remove::dependencies::header() {
  declare text="${software_title} Abhängigkeiten werden entfernt..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::remove::files::header() {
  declare text="${software_title} Dateien werden entfernt..."
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
dieser Prozess kann einige Minuten dauern..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::files::header() {
  declare text="${software_title} wird aktualisiert..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::complete::header() {
  declare text="${software_title} Update abgeschlossen"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::files::admin() {
  declare text="muss als Administrator angemeldet sein, um ${software_title} zu aktualisieren"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::jellyfin::ffmpeg() {
  declare text="ffmpeg für Jellyfin wird aktualisiert..."
  quickbox::dashboard::log "${text}"
}

################################################################################
# Software Access Information
################################################################################
quickbox::lang::software::access() {
  declare text="Greifen Sie auf ${software_title} zu unter:
${quickbox_web_root}${software_name}
${software_title} installiert auf Port: ${software_web_port}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::mu::access() {
  declare text="Greifen Sie auf ${software_title} zu unter:
${quickbox_web_root}${username}/${software_name}
${software_title} installiert auf Port: ${software_web_port}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::admin::access() {
  declare text="Greifen Sie auf ${software_title} zu unter:
${quickbox_web_root}${admin_name}/${software_name}
${software_title} installiert auf Port: ${software_web_port}"
  quickbox::dashboard::log "${text}"
}

################################################################################
# WSDashboard Specific Messages
################################################################################
quickbox::lang::software::wsdashboard::neither_installed() {
  declare text="Weder Emby noch Jellyfin ist installiert. Prozess wird übersprungen."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::api_error() {
  declare text="Fehler: zip_url von central.quickbox.io API konnte nicht abgerufen werden."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::download_error() {
  declare text="Fehler: WSD Plugin Archiv konnte nicht heruntergeladen werden."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::unzip_error() {
  declare text="Fehler: WSD Plugin Archiv konnte nicht entpackt werden."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::missing_directory() {
  declare text="Fehler: Erforderliches Verzeichnis ${req_dir} im Plugin Archiv fehlt."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::move_backend_error() {
  declare text="Backend-Verzeichnis konnte nicht verschoben werden! Update wird abgebrochen."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::move_public_error() {
  declare text="Public-Verzeichnis konnte nicht verschoben werden! Update wird abgebrochen."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::move_version_error() {
  declare text="version.txt konnte nicht verschoben werden! Update wird abgebrochen."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::complete() {
  declare text="WSD Plugin Abruf und Extraktion abgeschlossen."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::up_to_date() {
  declare text="WSD Plugin ist aktuell; Abruf nicht erforderlich."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::start::success() {
  declare text="Service erfolgreich gestartet. Gesundheitsprüfung wird durchgeführt..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::health::passed() {
  declare text="Gesundheitsprüfung bestanden. Service läuft optimal."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::health::warnings() {
  declare text="Gesundheitsprüfung mit Warnungen abgeschlossen. Logs überprüfen falls nötig."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::start::failed() {
  declare text="Service konnte nicht gestartet werden. Status wird überprüft..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::fix::attempting() {
  declare text="Versuche häufige Probleme zu beheben..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::update::success() {
  declare text="Service erfolgreich aktualisiert. Gesundheitsprüfung wird durchgeführt..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::update::failed() {
  declare text="Service konnte nach Update nicht gestartet werden. Status wird überprüft..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::maintenance::header() {
  declare text="WSD Service Wartung und Überwachung wird durchgeführt..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::maintenance::service_not_found() {
  declare text="Service nicht gefunden. Bitte installieren Sie WSD zuerst."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::maintenance::completed_success() {
  declare text="Service Wartung erfolgreich abgeschlossen."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::maintenance::completed_warnings() {
  declare text="Service Wartung mit Warnungen abgeschlossen."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::maintenance::complete() {
  declare text="Wartung abgeschlossen. Verwenden Sie 'qbwsd-health-check.sh --verbose' für detaillierte Diagnose."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::maintenance::title() {
  declare text="WSD Service Wartung"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::stop::starting() {
  declare text="${software_service_name} Service wird gestoppt..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::stop::force() {
  declare text="Service läuft noch, erzwinge Stopp..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::stop::cleanup() {
  declare text="Verbleibende Node.js Prozesse werden bereinigt..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::stop::warning() {
  declare text="Warnung: Service läuft möglicherweise noch, fahre vorsichtig fort..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::stop::success() {
  declare text="Service erfolgreich gestoppt"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::start::starting() {
  declare text="${software_service_name} Service wird gestartet..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::start::success_attempt() {
  declare text="Service erfolgreich gestartet beim Versuch ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::start::retry() {
  declare text="Service Start Versuch ${1} fehlgeschlagen, wiederhole in 3 Sekunden..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::start::command_failed() {
  declare text="Service Start Befehl fehlgeschlagen, wiederhole in 3 Sekunden..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::chmod::retry() {
  declare text="Chmod Versuch ${1} fehlgeschlagen, wiederhole in 2 Sekunden..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::chmod::warning() {
  declare text="Warnung: Ausführungsberechtigungen nach ${1} Versuchen fehlgeschlagen"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::node::install::failed() {
  declare text="Fehler: Node.js-Installation oder -Verifizierung fehlgeschlagen. Bitte überprüfen Sie die Protokolle und versuchen Sie es erneut."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::virtual_env_corrupted() {
  declare text="Virtuelle Umgebung scheint beschädigt zu sein. Wird neu erstellt..."
  quickbox::dashboard::log "${text}"
}

################################################################################
# System Command Messages
################################################################################
quickbox::lang::system::health::check::running() {
  declare text="Umfassende Gesundheitsprüfung wird durchgeführt..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::service::status::current() {
  declare text="Aktueller Service Status:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::service::logs::recent() {
  declare text="Aktuelle Service Logs:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::nginx::test() {
  declare text="Teste nginx Konfiguration..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::nginx::reload() {
  declare text="Lade nginx Service neu..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::daemon::reload() {
  declare text="Lade systemd Daemon neu..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::service::enable() {
  declare text="Aktiviere ${software_service_name} Service..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::service::start() {
  declare text="Starte ${software_service_name} Service..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::service::stop() {
  declare text="Stoppe ${software_service_name} Service..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::service::disable() {
  declare text="Deaktiviere ${software_service_name} Service..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::file::copy() {
  declare text="Kopiere ${1} nach ${2}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::pip::install() {
  declare text="Installiere Python Pakete..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::npm::install() {
  declare text="Installiere Node.js Pakete..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::enhanced::files::removed() {
  declare text="Erweiterte Service Dateien erfolgreich entfernt"
  quickbox::dashboard::log "${text}"
}

################################################################################
# WSDashboard Health Check Messages
################################################################################
quickbox::lang::software::wsdashboard::health::usage() {
  declare text="Verwendung: qbwsd-health-check.sh [--verbose] [--fix]
  --verbose  Ausführliche Ausgabe aktivieren
  --fix      Häufige Probleme automatisch beheben"
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
  declare text="Überprüfe Service Status..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::service_running() {
  declare text="Service läuft"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::service_not_running() {
  declare text="Service läuft nicht"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::checking_config() {
  declare text="Überprüfe Service Konfiguration..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::config_file_missing() {
  declare text="Service Konfigurationsdatei nicht gefunden: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::root_user_warning() {
  declare text="Service ist so konfiguriert, dass er als Root läuft (Sicherheitsrisiko)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::no_restart_policy() {
  declare text="Keine Neustart-Richtlinie konfiguriert"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::config_valid() {
  declare text="Service Konfigurationsdatei existiert und ist lesbar"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::checking_dependencies() {
  declare text="Überprüfe Abhängigkeiten..."
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

quickbox::lang::software::wsdashboard::health::checking_resources() {
  declare text="Überprüfe Ressourcenverbrauch..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::service_not_running_skip() {
  declare text="Service läuft nicht, überspringe Ressourcenprüfung"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::pid_not_found() {
  declare text="Service PID konnte nicht ermittelt werden"
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
  declare text="Überprüfe aktuelle Logs..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::recent_errors_found() {
  declare text="${1} Fehlermeldungen in der letzten Stunde gefunden"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::no_recent_errors() {
  declare text="Keine aktuellen Fehlermeldungen gefunden"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::log_file_size() {
  declare text="Log-Datei ${1}: ${2}MB"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::large_log_file() {
  declare text="Große Log-Datei erkannt: ${1} (${2}MB)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::log_file_not_found() {
  declare text="Log-Datei nicht gefunden: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::checking_database() {
  declare text="Überprüfe Datenbankverbindung..."
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

quickbox::lang::software::wsdashboard::health::creating_log_directory() {
  declare text="Erstelle fehlendes Log-Verzeichnis..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::attempting_restart() {
  declare text="Versuche Service neu zu starten..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::restart_successful() {
  declare text="Service erfolgreich neu gestartet"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::restart_failed() {
  declare text="Service Neustart fehlgeschlagen"
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