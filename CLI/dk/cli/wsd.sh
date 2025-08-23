#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Project Name: QuickBox Pro
# File Name: cli_wsd_dk
# File Description: Danish language file - WSD (What's Streaming Dashboard) CLI
# File Version: 1.0.77
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
# Service Status Messages (guarded)
################################################################################
quickbox::lang::system::service::status::current() {
	declare text="Nuværende servicestatus:"
	quickbox::dashboard::log "${text}"
}

################################################################################
# Installation Requirements
################################################################################
quickbox::lang::wsd::neither_installed() {
	declare text="Hverken Emby eller Jellyfin er installeret. WSDashboard kræver en af disse streaming-applikationer for at fungere."
	quickbox::dashboard::log "${text}"
}

################################################################################
# Port Management
################################################################################
quickbox::lang::wsd::port::fallback_used() {
	declare text="Bruger fallback-port ${1} da ingen andre porte var tilgængelige"
	quickbox::dashboard::log "${text}"
}

################################################################################
# Environment Configuration
################################################################################
quickbox::lang::wsd::env::port_recovered_from_nginx() {
	declare text="Port gendannet fra nginx-konfiguration: ${1}"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::env::port_using_available() {
	declare text="Bruger tilgængelig port: ${1}"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::env::current_port_empty() {
	declare text="Nuværende port er tom eller nul, kan ikke fortsætte med env.conf-opdatering"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::env::streaming_app_empty() {
	declare text="Streaming-applikation er tom, kan ikke fortsætte med env.conf-opdatering"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::env::boilerplate_remaining() {
	declare text="Nogle boilerplate-pladsholdere forbliver i env.conf"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::env::update_success() {
	declare text="Miljøkonfiguration opdateret succesfuldt: App=${1}, Port=${2}, LogPort=${3}"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::env::backup_created() {
	declare text="Backup oprettet på: ${1}"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::env::boilerplate_detected() {
	declare text="Boilerplate-pladsholdere opdaget i env.conf"
	quickbox::dashboard::log "${text}"
}

################################################################################
# Nginx Configuration
################################################################################
quickbox::lang::wsd::nginx::config_missing() {
	declare text="Nginx-konfigurationsfil mangler, kan ikke validere"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::nginx::port_updated() {
	declare text="Nginx-port opdateret fra ${1} til ${2}"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::nginx::config_invalid() {
	declare text="Nginx-konfiguration er ugyldig"
	quickbox::dashboard::log "${text}"
}

################################################################################
# Plugin Management
################################################################################
quickbox::lang::wsd::plugin::fetch::api_error() {
	declare text="API-fejl opstod under hentning af plugin"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::plugin::fetch::download_error() {
	declare text="Download-fejl opstod under hentning af plugin"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::plugin::fetch::unzip_error() {
	declare text="Udpakningsfejl opstod under hentning af plugin"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::plugin::fetch::missing_directory() {
	declare text="Påkrævet mappe mangler i plugin-arkiv"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::plugin::fetch::missing_directory_warning() {
	declare text="Advarsel: mappe ${1} ikke fundet i plugin-arkiv (fortsætter for ældre installationer)"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::plugin::fetch::complete() {
	declare text="WSD plugin-hentning og udpakning fuldført"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::plugin::fetch::up_to_date() {
	declare text="WSD plugin er opdateret"
	quickbox::dashboard::log "${text}"
}

################################################################################
# Virtual Environment
################################################################################
quickbox::lang::wsd::virtual_env::nodeenv_failed() {
	declare text="Kunne ikke installere nodeenv i Python virtuel miljø: ${1}"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::virtual_env::nodejs_failed() {
	declare text="Kunne ikke oprette Node.js virtuel miljø: ${1}"
	quickbox::dashboard::log "${text}"
}

################################################################################
# Service Management
################################################################################
quickbox::lang::wsd::service::start::success() {
	declare text="Service startet succesfuldt"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::start::failed() {
	declare text="Service kunne ikke starte"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::start::starting() {
	declare text="Starter service..."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::start::success_attempt() {
	declare text="Service startet succesfuldt på forsøg ${1}"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::start::retry() {
	declare text="Forsøger igen at starte service (forsøg ${1})"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::start::command_failed() {
	declare text="Service start-kommando fejlede"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::health::passed() {
	declare text="Sundhedskontrol bestået"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::health::warnings() {
	declare text="Sundhedskontrol fuldført med advarsler"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::fix::attempting() {
	declare text="Forsøger at løse service-problemer"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::stop::starting() {
	declare text="Stopper service..."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::stop::force() {
	declare text="Tvinger stop af service"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::stop::cleanup() {
	declare text="Rydder op i resterende processer"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::stop::warning() {
	declare text="Service stop-advarsel"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::stop::success() {
	declare text="Service stoppet succesfuldt"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::log_server::started() {
	declare text="Log server-service startet succesfuldt"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::log_server::failed() {
	declare text="Log server-service kunne ikke starte"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::update::success() {
	declare text="Service opdateret succesfuldt"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::update::failed() {
	declare text="Service-opdatering fejlede"
	quickbox::dashboard::log "${text}"
}

################################################################################
# Access Information
################################################################################
quickbox::lang::wsd::access() {
	declare text="Få adgang til WSDashboard på: http://localhost:${software_daemon_port}"
	quickbox::dashboard::log "${text}"
}

################################################################################
# Maintenance
################################################################################
quickbox::lang::wsd::maintenance::header() {
	declare text="WSDashboard vedligeholdelsestilstand"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::maintenance::title() {
	declare text="WSDashboard vedligeholdelse"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::maintenance::service_not_found() {
	declare text="WSDashboard-service ikke fundet"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::maintenance::completed_success() {
	declare text="Vedligeholdelse fuldført succesfuldt"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::maintenance::completed_warnings() {
	declare text="Vedligeholdelse fuldført med advarsler"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::maintenance::complete() {
	declare text="Vedligeholdelse fuldført"
	quickbox::dashboard::log "${text}"
}
