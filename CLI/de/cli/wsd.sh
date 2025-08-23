#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Project Name: QuickBox Pro
# File Name: cli_wsd_de
# File Description: German language file - WSD (What's Streaming Dashboard) CLI
# File Version: 1.0.72
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
#
# License: BSD-3 (Available in LICENSE.md)
# Copyright (C) 2019-2025, QuickBox.IO
# All rights reserved.
# <END METADATA>
# shellcheck disable=2001,2034,2154,2312,2317
################################################################################

################################################################################
# Service Status Messages (guarded)
################################################################################
quickbox::lang::system::service::status::current() {
  declare text="Aktueller Dienststatus:"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Installation Requirements
################################################################################
quickbox::lang::wsd::neither_installed() {
  declare text="Weder Emby noch Jellyfin ist installiert. WSDashboard benötigt eine dieser Streaming-Anwendungen, um zu funktionieren."
  quickbox::dashboard::log "${text}"
}

################################################################################
# Port Management
################################################################################
quickbox::lang::wsd::port::fallback_used() {
  declare text="Verwende Fallback-Port ${1}, da keine anderen Ports verfügbar waren"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Environment Configuration
################################################################################
quickbox::lang::wsd::env::port_recovered_from_nginx() {
  declare text="Port aus nginx-Konfiguration wiederhergestellt: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::env::port_using_available() {
  declare text="Verwende verfügbaren Port: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::env::current_port_empty() {
  declare text="Aktueller Port ist leer oder null, kann mit env.conf-Update nicht fortfahren"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::env::streaming_app_empty() {
  declare text="Streaming-Anwendung ist leer, kann mit env.conf-Update nicht fortfahren"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::env::boilerplate_remaining() {
  declare text="Einige Boilerplate-Platzhalter verbleiben in env.conf"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::env::update_success() {
  declare text="Umgebungskonfiguration erfolgreich aktualisiert: App=${1}, Port=${2}, LogPort=${3}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::env::backup_created() {
  declare text="Backup erstellt unter: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::env::boilerplate_detected() {
  declare text="Boilerplate-Platzhalter in env.conf erkannt"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Nginx Configuration
################################################################################
quickbox::lang::wsd::nginx::config_missing() {
  declare text="Nginx-Konfigurationsdatei fehlt, kann nicht validieren"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::nginx::port_updated() {
  declare text="Nginx-Port von ${1} auf ${2} aktualisiert"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::nginx::config_invalid() {
  declare text="Nginx-Konfiguration ist ungültig"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Plugin Management
################################################################################
quickbox::lang::wsd::plugin::fetch::api_error() {
  declare text="API-Fehler beim Abrufen des Plugins aufgetreten"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::plugin::fetch::download_error() {
  declare text="Download-Fehler beim Abrufen des Plugins aufgetreten"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::plugin::fetch::unzip_error() {
  declare text="Entpackfehler beim Abrufen des Plugins aufgetreten"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::plugin::fetch::missing_directory() {
  declare text="Erforderliches Verzeichnis im Plugin-Archiv fehlt"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::plugin::fetch::missing_directory_warning() {
  declare text="Warnung: Verzeichnis ${1} im Plugin-Archiv nicht gefunden (setze für ältere Installationen fort)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::plugin::fetch::complete() {
  declare text="WSD-Plugin-Abruf und -Extraktion abgeschlossen"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::plugin::fetch::up_to_date() {
  declare text="WSD-Plugin ist auf dem neuesten Stand"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Virtual Environment
################################################################################
quickbox::lang::wsd::virtual_env::nodeenv_failed() {
  declare text="Fehler beim Installieren von nodeenv in Python-Virtual-Environment: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::virtual_env::nodejs_failed() {
  declare text="Fehler beim Erstellen des Node.js-Virtual-Environment: ${1}"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Service Management
################################################################################
quickbox::lang::wsd::service::start::success() {
  declare text="Dienst erfolgreich gestartet"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::start::failed() {
  declare text="Dienst konnte nicht gestartet werden"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::start::starting() {
  declare text="Starte Dienst..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::start::success_attempt() {
  declare text="Dienst erfolgreich gestartet bei Versuch ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::start::retry() {
  declare text="Wiederhole Dienststart (Versuch ${1})"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::start::command_failed() {
  declare text="Dienststart-Befehl fehlgeschlagen"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::health::passed() {
  declare text="Gesundheitsprüfung bestanden"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::health::warnings() {
  declare text="Gesundheitsprüfung mit Warnungen abgeschlossen"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::fix::attempting() {
  declare text="Versuche Dienstprobleme zu beheben"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::stop::starting() {
  declare text="Stoppe Dienst..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::stop::force() {
  declare text="Erzwinge Dienststopp"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::stop::cleanup() {
  declare text="Bereinige verbleibende Prozesse"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::stop::warning() {
  declare text="Dienststopp-Warnung"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::stop::success() {
  declare text="Dienst erfolgreich gestoppt"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::log_server::started() {
  declare text="Log-Server-Dienst erfolgreich gestartet"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::log_server::failed() {
  declare text="Log-Server-Dienst konnte nicht gestartet werden"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::update::success() {
  declare text="Dienst erfolgreich aktualisiert"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::update::failed() {
  declare text="Dienstaktualisierung fehlgeschlagen"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Access Information
################################################################################
quickbox::lang::wsd::access() {
  declare text="Greife auf WSDashboard zu unter: http://localhost:${software_daemon_port}"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Maintenance
################################################################################
quickbox::lang::wsd::maintenance::header() {
  declare text="WSDashboard-Wartungsmodus"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::maintenance::title() {
  declare text="WSDashboard-Wartung"
  quickbox::dashboard::log "${text}"d
}

quickbox::lang::wsd::maintenance::service_not_found() {
  declare text="WSDashboard-Dienst nicht gefunden"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::maintenance::completed_success() {
  declare text="Wartung erfolgreich abgeschlossen"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::maintenance::completed_warnings() {
  declare text="Wartung mit Warnungen abgeschlossen"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::maintenance::complete() {
  declare text="Wartung abgeschlossen"
  quickbox::dashboard::log "${text}"
}
