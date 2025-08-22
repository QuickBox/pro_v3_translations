#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Projektnavn: QuickBox Pro
# Filnavn: cli_software_dk
# Filbeskrivelse: Dansk sprogfil - Softwarehåndtering
# Filversion: 1.0.1
#
# Gemmeopgaver:
# Automatiseret_Versionering: true
#
# Byggeopgaver:
# Automatiseret_Kommentar_Fjernelse: true
#
# Deploymentopgaver:
# Automatiseret_Kryptering: false
#
# Forfatter: Jason Matthews (JMSolo)
# Forfatter Kontakt: support@quickbox.io
# Forfatter: Jamie Dobbs (Mschf)
# Forfatter Kontakt: jamie.dobbs@mschf.dev
#
# Licens: BSD-3 (Tilgængelig i LICENSE.md)
# Copyright (C) 2019-2025, QuickBox.IO
# Alle rettigheder forbeholdes.
# <END METADATA>
# shellcheck disable=2001,2034,2154,2312,2317
################################################################################

################################################################################
# Installationsoperationer
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

rTorrent 0.9.8 vil nu installeres, vent venligst da dette kan
tage et par minutter (afhængigt af systemets specifikationer) at installere"
	else
		declare text="${software_title} vil nu blive installeret
denne proces kan tage et par minutter..."
	fi
	quickbox::dashboard::log "${text}"
}

quickbox::lang::install::sources::header() {
	declare text="tilføjer ekstra nøgler og kilder for ${software_title}..."
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
	declare text="opretter ssl certifikat for ${d}..."
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
	declare text="backer ${software_title} konfiguration op..."
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
# Geninstallationsoperationer
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
# Fjernelsesoperationer
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
# Opdateringsoperationer
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
	declare text="skal være logget ind som admin for at opdatere ${software_title}"
	quickbox::dashboard::log "${text}"
}

################################################################################
# Software Adgangsinformation
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
# WSDashboard Specifikke Beskeder
################################################################################

################################################################################
# System Kommando Beskeder
################################################################################
quickbox::lang::system::health::check::running() {
	declare text="Kører omfattende sundhedstjek..."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::system::service::status::current() {
	declare text="Nuværende tjeneste status:"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::system::service::logs::recent() {
	declare text="Seneste tjeneste logs:"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::system::enhanced::files::removed() {
	declare text="Forbedrede tjeneste filer fjernet med succes"
	quickbox::dashboard::log "${text}"
}

################################################################################
# WSDashboard Sundhedstjek Beskeder
################################################################################
