#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Projektnavn: QuickBox Pro
# Filnavn: cli_manager_dk
# Filbeskrivelse: Dansk sprogfil - Software Manager
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
# QB Manager - Softwarehåndtering
################################################################################

### Backup Operationer
quickbox::lang::backup::configf() {
  declare text="konfigurationsfil for ${software_name} bliver nu backet op."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::backup::configf::error() {
  declare text="konfigurationsfil ${softwareConf} eksisterer ikke."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::backup::configf::success() {
  declare text="konfigurationsfil er blevet backet op."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::backup::installdir::error() {
  declare text="${software_title} installationsmappe eksisterer ikke."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::backup::installdir() {
  declare text="installationsmappe for ${software_title} (${backup_version}) bliver nu backet op."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::backup::configdir() {
  declare text="konfigurationsmappe for ${software_title} bliver nu backet op."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::backup::installdir::success() {
  backup_version="$(tput setaf 5)${backup_version}$(tput setaf 2)"
  declare text="${software_title} (${backup_version}) er blevet backet op."
  quickbox::dashboard::log "${text}$(tput sgr0)"
}

### Gendannelsesoperationer
quickbox::lang::restore::configf::error() {
  declare text="backup fil ${backupConf} eksisterer ikke."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::restore::configf::success() {
  declare text="backup fil er blevet gendannet."
  quickbox::dashboard::log "${text}"
}

### Standardoperationer
quickbox::lang::default::configf::error() {
  declare text="standard konfiguration ${defaultConf} fil eksisterer ikke."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::default::configf::success() {
  declare text="standard konfigurationsfil er blevet gendannet."
  quickbox::dashboard::log "${text}"
}

### Rollback Operationer
quickbox::lang::rollback::installdir::error() {
  declare text="${software_title} installationsmappe eksisterer ikke."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::rollback::selection::version() {
  declare text="version:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::rollback::selection::date() {
  declare text="dato:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::rollback::selection() {
  declare text="vælg et nummer fra listen nedenfor for at rulle tilbage
til en tidligere version af ${software_title}:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::rollback::selection::invalid() {
  declare text="ugyldigt valg. prøv venligst igen."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::rollback::software::error() {
  declare text="${software_title} applikationsbackup eksisterer ikke."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::rollback::config::error() {
  declare text="${software_title} konfigurationsbackup eksisterer ikke."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::rollback::selection::display() {
  version="$(tput setaf 5)${version}$(tput setaf 7)"
  app_package="$(tput setaf 5)${app_package}$(tput setaf 7)"
  config_package="$(tput setaf 5)${config_package}$(tput setaf 7)"
  declare text="du har valgt version ${version} for ${software_title}.
app pakke: ${app_package}
konfigurations pakke: ${config_package}"
  quickbox::dashboard::log "${text}$(tput sgr0)"
}

quickbox::lang::rollback::selection::confirm() {
  declare text="er du sikker på at du vil fortsætte med rollback? (y/n)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::rollback::cancelled() {
  declare text="rollback annulleret."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::rollback::continue() {
  version="$(tput setaf 5)${version}$(tput setaf 7)"
  declare text="${software_title} bliver nu rullet tilbage til version ${version}."
  quickbox::dashboard::log "${text}$(tput sgr0)"
}

quickbox::lang::rollback::complete() {
  version="$(tput setaf 5)${version}$(tput setaf 2)"
  declare text="${software_title} (${version}) er blevet rullet tilbage."
  quickbox::dashboard::log "${text}$(tput sgr0)"
}

### Sletteoperationer
quickbox::lang::delete::selection::version() {
  declare text="version:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::delete::selection::date() {
  declare text="dato:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::delete::selection() {
  declare text="vælg et nummer fra listen nedenfor for at slette
en tidligere backup af ${software_title}:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::delete::selection::invalid() {
  declare text="ugyldigt valg. prøv venligst igen."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::delete::software::error() {
  declare text="${software_title} applikationsbackup eksisterer ikke."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::delete::config::error() {
  declare text="${software_title} konfigurationsbackup eksisterer ikke."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::delete::selection::display() {
  version="$(tput setaf 5)${version}$(tput setaf 7)"
  app_package="$(tput setaf 5)${app_package}$(tput setaf 7)"
  config_package="$(tput setaf 5)${config_package}$(tput setaf 7)"
  declare text="du har valgt version ${version} for ${software_title}.
app pakke: ${app_package}
konfigurations pakke: ${config_package}"
  quickbox::dashboard::log "${text}$(tput sgr0)"
}

quickbox::lang::delete::selection::confirm() {
  declare text="er du sikker på at du vil fortsætte med sletningen? (y/n)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::delete::cancelled() {
  declare text="backup sletning annulleret."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::delete::continue() {
  version="$(tput setaf 5)${version}$(tput setaf 7)"
  declare text="${software_title} backup (${version}) bliver nu slettet."
  quickbox::dashboard::log "${text}$(tput sgr0)"
}

quickbox::lang::delete::complete() {
  version="$(tput setaf 5)${version}$(tput setaf 2)"
  declare text="${software_title} backup (${version}) er blevet slettet."
  quickbox::dashboard::log "${text}$(tput sgr0)"
} 