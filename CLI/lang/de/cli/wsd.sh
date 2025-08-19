#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Project Name: QuickBox Pro
# File Name: cli_wsd_de
# File Description: Deutsche Sprachdatei - WSD (What's Streaming Dashboard) CLI
# File Version: 1.0.11
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
#
# License: BSD-3 (Available in LICENSE.md)
# Copyright (C) 2019-2025, QuickBox.IO
# All rights reserved.
# <END METADATA>
# shellcheck disable=2001,2034,2154,2312,2317
################################################################################

################################################################################
# Fehlermeldungen
################################################################################
quickbox::lang::software::wsdashboard::ssl::no_domain() {
  declare text="Keine Domain gefunden. SSL-Setup erfordert eine gültige Domain."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::certificates_not_found() {
  declare text="SSL-Zertifikate nicht an erwarteten Pfaden gefunden."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::access_denied() {
  declare text="Zugriff auf SSL-Zertifikate verweigert. Berechtigungen prüfen."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::service_failed() {
  declare text="WSD-Service konnte nach SSL-Konfiguration nicht gestartet werden."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::update::no_username() {
  declare text="Benutzername ist für SSL-Update erforderlich. Verwenden Sie -u Parameter."
  quickbox::dashboard::log "${text}"
}
quickbox::lang::wsd::error::missing_emby_params() {
  declare text="Fehlende erforderliche Parameter für Emby: -u"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::missing_jellyfin_params() {
  declare text="Fehlende erforderliche Parameter für Jellyfin."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::database_not_found() {
  declare text="Datenbankdatei nicht gefunden unter: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::jellyfin_api_failed() {
  declare text="Fehler beim Abrufen von Daten von der Jellyfin API."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::missing_manual_path() {
  declare text="Fehlender manueller Pfadparameter."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::path_not_exist() {
  declare text="Angegebener Pfad existiert nicht: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::missing_empty_path() {
  declare text="Fehlender Verzeichnispfad zum Leeren."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::directory_not_exist() {
  declare text="Verzeichnis existiert nicht: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::timestamp_creation_failed() {
  declare text="Fehler beim Erstellen der Zeitstempeldatei: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::empty_directory_failed() {
  declare text="Fehler beim Leeren des Verzeichnisses: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::missing_transcode_id() {
  declare text="Fehlende Transcode-ID."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::invalid_transcode_id() {
  declare text="Ungültiges Transcode-ID-Format: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::invalid_mode() {
  declare text="Ungültiger Modus: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::delete_contents_failed() {
  declare text="Fehler beim Löschen der Inhalte des Transcode-Verzeichnisses: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::delete_jellyfin_failed() {
  declare text="Fehler beim Löschen der Transcode-Dateien für Jellyfin."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::missing_verify_path() {
  declare text="Fehlender Transcode-Pfad für die Überprüfung."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::directory_not_empty() {
  declare text="Transcode-Verzeichnis ist nicht leer: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::remove_empty_dir_failed() {
  declare text="Fehler beim Entfernen des leeren Verzeichnisses: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::timestamp_not_found() {
  declare text="Zeitstempeldatei nicht gefunden: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::newer_files_exist() {
  declare text="Neuere Transcode-Dateien existieren nach dem Zeitstempel für: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::invalid_mode_generic() {
  declare text="Ungültiger oder fehlender Modus. Verwenden Sie 'emby' oder 'jellyfin'."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::service_template_not_found() {
  declare text="Service-Template-Datei nicht gefunden: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::copy_template_failed() {
  declare text="Fehler beim Kopieren der Service-Vorlage nach ${1}."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::generate_service_failed() {
  declare text="Fehler beim Generieren der Service-Datei für Modus '${1}'."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::reload_systemd_failed() {
  declare text="Fehler beim Neuladen von systemd."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::enable_service_failed() {
  declare text="Fehler beim Aktivieren und Starten von ${1}."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::stop_service_failed() {
  declare text="Fehler beim Stoppen von ${1}."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::disable_service_failed() {
  declare text="Fehler beim Deaktivieren von ${1}."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::remove_service_file_failed() {
  declare text="Fehler beim Entfernen der ${1}-Datei."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::reload_after_remove_failed() {
  declare text="Fehler beim Neuladen von systemd nach dem Entfernen von ${1}."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::invalid_transcode_dir() {
  declare text="Ungültiges oder fehlendes Transcoding-Temp-Verzeichnis: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::clear_standard_failed() {
  declare text="Fehler beim Löschen der Standard-Transcodes: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::clear_livetv_failed() {
  declare text="Fehler beim Löschen der LiveTV-Transcodes: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::invalid_option() {
  declare text="Ungültige Option. Verwenden Sie -h für Hilfe."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::mode_required_c() {
  declare text="Modus (-m) ist mit der -c-Option erforderlich. Verwenden Sie 'emby' oder 'jellyfin'."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::mode_required_a() {
  declare text="Modus (-m) ist mit der -a-Option erforderlich. Verwenden Sie 'emby' oder 'jellyfin'."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::missing_emby_params_generic() {
  declare text="Fehlende erforderliche Parameter für Emby: -u"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::missing_jellyfin_params_generic() {
  declare text="Fehlende erforderliche Parameter für Jellyfin: -U und/oder -k"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::invalid_mode_specified() {
  declare text="Ungültiger Modus angegeben. Verwenden Sie 'emby' oder 'jellyfin'."
  quickbox::dashboard::log "${text}"
}

################################################################################
# Warnmeldungen
################################################################################
quickbox::lang::wsd::warning::transcode_path_not_found() {
  declare text="TranscodingTempPath nicht in den JSON-Daten gefunden."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::warning::transcode_path_not_found_api() {
  declare text="TranscodingTempPath nicht in der API-Antwort gefunden."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::warning::autoclear_not_enabled() {
  declare text="AutoClearEnabled ist nicht true für Modus '${1}'. Keine Aktion erforderlich."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::warning::service_already_active() {
  declare text="${1} ist bereits aktiv für Modus '${2}'."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::warning::service_not_active() {
  declare text="${1} ist nicht aktiv. Kein Stopp erforderlich."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::warning::service_not_enabled() {
  declare text="${1} ist nicht aktiviert. Keine Deaktivierung erforderlich."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::warning::service_file_not_exist() {
  declare text="Service-Datei existiert nicht: ${1}. Keine Aktion erforderlich."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::warning::autoclear_disabled() {
  declare text="Auto-Clear ist in der Datenbank deaktiviert. Beende Schleife."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::warning::no_matching_files_standard() {
  declare text="Keine passenden Dateien für Standard-Transcodes gefunden."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::warning::no_matching_files_livetv() {
  declare text="Keine passenden Dateien für LiveTV-Transcodes gefunden."
  quickbox::dashboard::log "${text}"
}

################################################################################
# Informationsmeldungen
################################################################################
quickbox::lang::software::wsdashboard::ssl::title() {
  declare text="WSD SSL-Konfiguration"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::header() {
  declare text="Richte SSL-Zertifikat-Symlinks für WSD-Service ein..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::setup::start() {
  declare text="Starte SSL-Symlink-Setup..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::certificates::found() {
  declare text="SSL-Zertifikate erfolgreich gefunden."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::creating::symlinks() {
  declare text="Erstelle Symlinks zu SSL-Zertifikaten..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::symlinks::created() {
  declare text="SSL-Zertifikat-Symlinks erfolgreich erstellt."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::testing::access() {
  declare text="Teste Zertifikat-Zugriff für www-data-Benutzer..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::certificate::accessible() {
  declare text="Zertifikat über Symlink zugänglich."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::private_key::accessible() {
  declare text="Privater Schlüssel über Symlink zugänglich."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::env_conf::added() {
  declare text="SSL-Konfiguration zu env.conf hinzugefügt."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::env_conf::exists() {
  declare text="SSL-Konfiguration existiert bereits in env.conf."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::env_conf::updated() {
  declare text="SSL-Konfiguration in env.conf aktualisiert."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::systemd::override::created() {
  declare text="Systemd-Override für SSL-Konfiguration erstellt."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::systemd::override::updated() {
  declare text="Systemd-Override für SSL-Konfiguration aktualisiert."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::systemd::reloaded() {
  declare text="Systemd-Daemon erfolgreich neu geladen."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::restarting::service() {
  declare text="Starte WSD-Service neu..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::service::running() {
  declare text="WSD-Service läuft erfolgreich."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::testing::connectivity() {
  declare text="Teste Service-Konnektivität..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::https::accessible() {
  declare text="Service über HTTPS zugänglich."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::https::warning() {
  declare text="Service über HTTPS nicht zugänglich (benötigt möglicherweise Zeit zum Starten)."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::http::accessible() {
  declare text="Service über HTTP-Fallback zugänglich."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::http::failed() {
  declare text="Service über HTTP nicht zugänglich."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::complete() {
  declare text="SSL-Zertifikat-Symlink-Setup erfolgreich abgeschlossen!"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::remove::title() {
  declare text="WSD SSL-Entfernung"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::remove::header() {
  declare text="Entferne SSL-Zertifikat-Symlinks für WSD-Service..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::remove::start() {
  declare text="Starte SSL-Symlink-Entfernung..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::remove::symlinks::removed() {
  declare text="SSL-Symlink-Verzeichnis erfolgreich entfernt."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::remove::symlinks::not_found() {
  declare text="SSL-Symlink-Verzeichnis nicht gefunden."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::remove::override::removed() {
  declare text="Systemd-Override erfolgreich entfernt."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::remove::complete() {
  declare text="SSL-Zertifikat-Symlink-Entfernung erfolgreich abgeschlossen!"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::update::title() {
  declare text="WSD SSL-Update"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::update::header() {
  declare text="Aktualisiere SSL-Zertifikat-Symlinks für WSD-Service..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::update::start() {
  declare text="Starte SSL-Symlink-Update..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::update::symlinks() {
  declare text="Aktualisiere Symlinks zu SSL-Zertifikaten..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::update::complete() {
  declare text="SSL-Zertifikat-Symlink-Update erfolgreich abgeschlossen!"
  quickbox::dashboard::log "${text}"
}
quickbox::lang::wsd::info::using_default_path() {
  declare text="Verwende Standardpfad für TranscodingTempPath: "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::manual_path_set() {
  declare text="TranscodingTempPath manuell gesetzt auf: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::timestamp_created() {
  declare text="Zeitstempeldatei erstellt/aktualisiert: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::emptying_directory() {
  declare text="Leere Verzeichnis: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::transcode_dir_removed() {
  declare text="Transcode-Verzeichnis bereits entfernt: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::generating_service() {
  declare text="Generiere ${1} für Modus '${2}'."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::reloading_systemd() {
  declare text="Lade systemd neu und aktiviere ${1}."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::stopping_service() {
  declare text="Stoppe ${1}."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::disabling_service() {
  declare text="Deaktiviere ${1}."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::removing_service_file() {
  declare text="Entferne Service-Datei: ${1}."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::reloading_systemd_changes() {
  declare text="Lade systemd neu, um Änderungen zu übernehmen."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::running_autoclear_standard() {
  declare text="Führe Auto-Clear für Standard-Transcodes aus in: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::running_autoclear_livetv() {
  declare text="Führe Auto-Clear für LiveTV-Transcodes aus in: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::files_to_delete() {
  declare text="Zu löschende Dateien: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::sleeping_minutes() {
  declare text="Schlafe für ${1} Minuten."
  quickbox::dashboard::log "${text}"
}

################################################################################
# Erfolgsmeldungen
################################################################################
quickbox::lang::wsd::success::directory_emptied() {
  declare text="[ERFOLGREICH] Verzeichnis erfolgreich geleert."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::success::transcode_files_deleted() {
  declare text="Transcode-Dateien erfolgreich gelöscht."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::success::directory_removed() {
  declare text="Verzeichnis erfolgreich entfernt: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::success::directory_emptied_removed() {
  declare text="Verzeichnis erfolgreich geleert und entfernt: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::success::no_files_since_timestamp() {
  declare text="Keine vorherigen Dateien seit dem Zeitstempel für: ${1} gefunden."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::success::service_enabled_started() {
  declare text="${1} erfolgreich aktiviert und gestartet für Modus '${2}'."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::success::service_stopped_disabled_removed() {
  declare text="${1} erfolgreich gestoppt, deaktiviert und entfernt."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::success::standard_transcodes_cleared() {
  declare text="Standard-Transcodes erfolgreich gelöscht."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::success::livetv_transcodes_cleared() {
  declare text="LiveTV-Transcodes erfolgreich gelöscht."
  quickbox::dashboard::log "${text}"
}

################################################################################
# Hilfemeldungen
################################################################################
quickbox::lang::wsd::help::usage() {
  declare text="Verwendung:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::emby_usage() {
  declare text="  Emby-Verwendung:
    $0 -u 'service_admin_username' -m 'emby'"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::jellyfin_usage() {
  declare text="  Jellyfin-Verwendung:
    $0 -U 'api_url' -k 'api_key' -m 'jellyfin'"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::manual_path() {
  declare text="  Manueller Pfad:
    $0 -p 'manual_path'"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::empty_directory() {
  declare text="  Verzeichnis leeren:
    $0 -e 'directory_path'"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::verify_directory() {
  declare text="  Verzeichnis überprüfen:
    $0 -v 'directory_path'"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::delete_transcode() {
  declare text="  Transcode-Dateien löschen:
    $0 -d 'transcode_id'"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::check_enable() {
  declare text="  Prüfen und aktivieren des qbwsd.service wenn AutoClearEnabled true ist:
    $0 -c -m 'emby|jellyfin'"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::disable_remove() {
  declare text="  Deaktivieren und entfernen des qbwsd.service wenn AutoClearEnabled false ist:
    $0 -r"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::run_autoclear() {
  declare text="  Auto-Clear-Logik manuell ausführen:
    $0 -a -m 'emby|jellyfin'"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::options() {
  declare text="Optionen:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::option_u() {
  declare text="  -u  Service-Admin-Benutzername (für Emby)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::option_U() {
  declare text="  -U  Jellyfin API URL"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::option_k() {
  declare text="  -k  Jellyfin API-Schlüssel"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::option_m() {
  declare text="  -m  Service-Modus (emby oder jellyfin)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::option_p() {
  declare text="  -p  Manueller Pfad für TranscodingTempPath"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::option_e() {
  declare text="  -e  Angegebenes Transcode-Verzeichnis leeren"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::option_v() {
  declare text="  -v  Überprüfen, ob das angegebene Transcode-Verzeichnis leer ist"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::option_d() {
  declare text="  -d  Transcode-Dateien nach ID löschen"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::option_c() {
  declare text="  -c  Prüfen und aktivieren des qbwsd.service wenn AutoClearEnabled true ist"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::option_r() {
  declare text="  -r  Deaktivieren und entfernen des qbwsd.service wenn AutoClearEnabled false ist"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::option_a() {
  declare text="  -a  Auto-Clear-Logik manuell ausführen"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::option_h() {
  declare text="  -h  Diese Hilfemeldung anzeigen"
  quickbox::dashboard::log "${text}"
} 

################################################################################
# Service Status Nachrichten (guarded)
################################################################################
if ! declare -F quickbox::lang::system::service::status::current >/dev/null 2>&1; then
quickbox::lang::system::service::status::current() {
  declare text="Aktueller Service Status:"
  quickbox::dashboard::log "${text}"
}
fi

################################################################################
# Service Log Server Meldungen
################################################################################
quickbox::lang::software::wsdashboard::service::log_server::started() {
  declare text="Logserver-Dienst erfolgreich gestartet."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::log_server::failed() {
  declare text="Start des Logserver-Dienstes fehlgeschlagen."
  quickbox::dashboard::log "${text}"
}

if ! declare -F quickbox::lang::software::wsdashboard::health::service_running >/dev/null 2>&1; then
quickbox::lang::software::wsdashboard::health::service_running() {
  declare text="Service läuft"
  quickbox::dashboard::log "${text}"
}
fi

if ! declare -F quickbox::lang::software::wsdashboard::health::service_not_running >/dev/null 2>&1; then
quickbox::lang::software::wsdashboard::health::service_not_running() {
  declare text="Service läuft nicht"
  quickbox::dashboard::log "${text}"
}
fi