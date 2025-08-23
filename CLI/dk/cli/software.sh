#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Project Name: QuickBox Pro
# File Name: cli_software_dk
# File Description: Danish language file - Software Management
# File Version: 1.0.35
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
  declare text="${software_title} vil nu blive installeret
denne proces kan tage et par minutter..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::rutorrent::header() {
  rtorrent_count=$(quickbox::software::count rtorrent)
  if [[ ${rtorrent_count} -eq 0 ]]; then
    declare text="det ser ud til at rTorrent ikke er installeret

rTorrent 0.9.8 vil nu blive installeret, vent venligst da dette kan
tage et par minutter (afhængigt af systemets specifikationer) at installere"
  else
    declare text="${software_title} vil nu blive installeret
denne proces kan tage et par minutter..."
  fi
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::sources::header() {
  declare text="tilføjer yderligere nøgler og kilder for ${software_title}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::dependencies::header() {
  declare text="installerer ${software_title} afhængigheder..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::build::header() {
  declare text="bygger ${software_title}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::mktorrent::header() {
  declare text="bygger mktorrent..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::xmlrpc::header() {
  declare text="bygger xmlrpc-c..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::libtorrent::header() {
  declare text="bygger libtorrent..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::rtorrent::header() {
  declare text="bygger rtorrent..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::certificate::header() {
  declare text="opretter ssl-certifikat for ${d}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::configure::lecert::header() {
  declare text="konfigurerer NGinx for Let's Encrypt..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::configure::header() {
  declare text="konfigurerer ${software_title}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::backup::header() {
  declare text="sikkerhedskopierer ${software_title} konfiguration..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::start::header() {
  declare text="starter ${software_title}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::complete::header() {
  declare text="${software_title} installation fuldført"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Reinstall Operations
################################################################################
quickbox::lang::reinstall::header() {
  declare text="${software_title} vil nu blive geninstalleret
denne proces kan tage et par minutter..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::reinstall::complete::header() {
  declare text="${software_title} geninstallation fuldført"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Remove Operations
################################################################################
quickbox::lang::remove::header() {
  declare text="${software_title} vil nu blive fjernet
denne proces kan tage et par minutter..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::remove::stop::header() {
  declare text="stopper ${software_title}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::remove::dependencies::header() {
  declare text="fjerner ${software_title} afhængigheder..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::remove::files::header() {
  declare text="fjerner ${software_title} filer..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::remove::complete::header() {
  declare text="${software_title} fjernelse fuldført"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Update Operations
################################################################################
quickbox::lang::update::header() {
  declare text="${software_title} vil nu blive opdateret
denne proces kan tage et par minutter..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::files::header() {
  declare text="opdaterer ${software_title}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::complete::header() {
  declare text="${software_title} opdatering fuldført"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::files::admin() {
  declare text="skal være logget ind som administrator for at opdatere ${software_title}"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Software Access Information
################################################################################
quickbox::lang::software::access() {
  declare text="adgang til ${software_title} på:
${quickbox_web_root}${software_name}
${software_title} installeret på port: ${software_web_port}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::mu::access() {
  declare text="adgang til ${software_title} på:
${quickbox_web_root}${username}/${software_name}
${software_title} installeret på port: ${software_web_port}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::admin::access() {
  declare text="adgang til ${software_title} på:
${quickbox_web_root}${admin_name}/${software_name}
${software_title} installeret på port: ${software_web_port}"
  quickbox::dashboard::log "${text}"
}

################################################################################
# System Command Messages
################################################################################

quickbox::lang::system::enhanced::files::removed() {
  declare text="Forbedrede servicefiler fjernet succesfuldt"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::health::check::running() {
  declare text="Kører omfattende sundhedskontrol..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::service::status::current() {
  declare text="Nuværende servicestatus:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::service::logs::recent() {
  declare text="Seneste servicelogs:"
  quickbox::dashboard::log "${text}"
}

################################################################################
# WSDashboard Health Check Messages
################################################################################
quickbox::lang::software::wsdashboard::health::usage() {
  declare text="Brug: qbwsd-health-check.sh [--verbose] [--fix]
  --verbose  Aktiverer detaljeret output
  --fix      Løser automatisk almindelige problemer"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::unknown_option() {
  declare text="Ukendt indstilling: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::root_warning() {
  declare text="Kører som root - nogle kontroller fungerer måske ikke korrekt"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::starting_check() {
  declare text="Starter sundhedskontrol for ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::checking_status() {
  declare text="Kontrollerer servicestatus..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::service_running() {
  declare text="Servicen kører"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::service_not_running() {
  declare text="Servicen kører ikke"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::checking_config() {
  declare text="Kontrollerer servicekonfiguration..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::config_file_missing() {
  declare text="Servicekonfigurationsfil ikke fundet: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::root_user_warning() {
  declare text="Servicen er konfigureret til at køre som root (sikkerhedsrisiko)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::no_restart_policy() {
  declare text="Ingen genstartspolitik konfigureret"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::config_valid() {
  declare text="Servicekonfigurationsfil eksisterer og kan læses"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::checking_dependencies() {
  declare text="Kontrollerer afhængigheder..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::file_missing() {
  declare text="Påkrævet fil mangler: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::file_found() {
  declare text="Fundet: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::directory_missing() {
  declare text="Påkrævet mappe mangler: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::directory_found() {
  declare text="Mappe fundet: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::dependencies_missing() {
  declare text="Manglende afhængigheder: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::dependencies_available() {
  declare text="Alle afhængigheder er tilgængelige"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::checking_resources() {
  declare text="Kontrollerer ressourceforbrug..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::service_not_running_skip() {
  declare text="Servicen kører ikke, springer ressourcekontrol over"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::pid_not_found() {
  declare text="Kunne ikke bestemme service PID"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::memory_usage() {
  declare text="Hukommelsesforbrug: ${1}MB"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::high_memory_usage() {
  declare text="Højt hukommelsesforbrug registreret: ${1}MB"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::cpu_usage() {
  declare text="CPU-forbrug: ${1}%"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::high_cpu_usage() {
  declare text="Højt CPU-forbrug registreret: ${1}%"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::checking_logs() {
  declare text="Kontrollerer seneste logs..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::recent_errors_found() {
  declare text="Fandt ${1} fejlmeddelelser i den sidste time"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::no_recent_errors() {
  declare text="Ingen seneste fejlmeddelelser fundet"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::log_file_size() {
  declare text="Logfil ${1}: ${2}MB"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::large_log_file() {
  declare text="Stor logfil registreret: ${1} (${2}MB)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::log_file_not_found() {
  declare text="Logfil ikke fundet: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::checking_database() {
  declare text="Kontrollerer databaseforbindelse..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::database_file_missing() {
  declare text="Databasefil ikke fundet: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::database_accessible() {
  declare text="Databasen er tilgængelig og indeholder tabeller"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::active_sessions() {
  declare text="Aktive sessioner i sidste time: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::database_corrupted() {
  declare text="Databasen er ikke tilgængelig eller beskadiget"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::sqlite3_not_available() {
  declare text="sqlite3 ikke tilgængelig, springer databasekontroller over"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::attempting_fixes() {
  declare text="Forsøger at løse almindelige problemer..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::fixing_permissions() {
  declare text="Løser Node.js virtuelle miljørettigheder..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::attempting_restart() {
  declare text="Forsøger at genstarte service..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::restart_successful() {
  declare text="Service genstartet succesfuldt"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::restart_failed() {
  declare text="Kunne ikke genstarte service"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::check_completed_success() {
  declare text="Sundhedskontrol fuldført succesfuldt"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::check_completed_issues() {
  declare text="Sundhedskontrol fuldført med problemer"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::binary_not_executable() {
  declare text="Binærfil ikke eksekverbar: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::permission_issues_detected() {
  declare text="Rettighedsproblemer registreret: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::permissions_fixed() {
  declare text="Node.js binærfilrettigheder løst succesfuldt"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::permissions_fix_failed() {
  declare text="Kunne ikke løse Node.js binærfilrettigheder"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::creating_run_directory() {
  declare text="Opretter manglende kørselsmappe..."
  quickbox::dashboard::log "${text}"
}
