#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Project Name: QuickBox Pro
# File Name: cli_manager_de
# File Description: German language file - Software Manager
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
# QB Manager - Software Management
################################################################################

### Backup Operations
quickbox::lang::backup::configf() {
  declare text="Konfigurationsdatei für ${software_name} wird jetzt gesichert."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::backup::configf::error() {
  declare text="Konfigurationsdatei ${softwareConf} existiert nicht."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::backup::configf::success() {
  declare text="Konfigurationsdatei wurde gesichert."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::backup::installdir::error() {
  declare text="${software_title} Installationsverzeichnis existiert nicht."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::backup::installdir() {
  declare text="Installationsverzeichnis für ${software_title} (${backup_version}) wird jetzt gesichert."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::backup::configdir() {
  declare text="Konfigurationsverzeichnis für ${software_title} wird jetzt gesichert."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::backup::installdir::success() {
  backup_version="$(tput setaf 5)${backup_version}$(tput setaf 2)"
  declare text="${software_title} (${backup_version}) wurde gesichert."
  quickbox::dashboard::log "${text}$(tput sgr0)"
}

### Restore Operations
quickbox::lang::restore::configf::error() {
  declare text="Sicherungsdatei ${backupConf} existiert nicht."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::restore::configf::success() {
  declare text="Sicherungsdatei wurde wiederhergestellt."
  quickbox::dashboard::log "${text}"
}

### Default Operations
quickbox::lang::default::configf::error() {
  declare text="Standard-Konfigurationsdatei ${defaultConf} existiert nicht."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::default::configf::success() {
  declare text="Standard-Konfigurationsdatei wurde wiederhergestellt."
  quickbox::dashboard::log "${text}"
}

### Rollback Operations
quickbox::lang::rollback::installdir::error() {
  declare text="${software_title} Installationsverzeichnis existiert nicht."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::rollback::selection::version() {
  declare text="Version:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::rollback::selection::date() {
  declare text="Datum:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::rollback::selection() {
  declare text="Wählen Sie eine Nummer aus der Liste unten aus, um
zu einer früheren Version von ${software_title} zurückzukehren:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::rollback::selection::invalid() {
  declare text="Ungültige Auswahl. Bitte versuchen Sie es erneut."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::rollback::software::error() {
  declare text="${software_title} Anwendungssicherung existiert nicht."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::rollback::config::error() {
  declare text="${software_title} Konfigurationssicherung existiert nicht."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::rollback::selection::display() {
  version="$(tput setaf 5)${version}$(tput setaf 7)"
  app_package="$(tput setaf 5)${app_package}$(tput setaf 7)"
  config_package="$(tput setaf 5)${config_package}$(tput setaf 7)"
  declare text="Sie haben Version ${version} für ${software_title} ausgewählt.
Anwendungspaket: ${app_package}
Konfigurationspaket: ${config_package}"
  quickbox::dashboard::log "${text}$(tput sgr0)"
}

quickbox::lang::rollback::selection::confirm() {
  declare text="Sind Sie sicher, dass Sie mit dem Rollback fortfahren möchten? (j/n)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::rollback::cancelled() {
  declare text="Rollback abgebrochen."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::rollback::continue() {
  version="$(tput setaf 5)${version}$(tput setaf 7)"
  declare text="${software_title} wird jetzt auf Version ${version} zurückgesetzt."
  quickbox::dashboard::log "${text}$(tput sgr0)"
}

quickbox::lang::rollback::complete() {
  version="$(tput setaf 5)${version}$(tput setaf 2)"
  declare text="${software_title} (${version}) wurde zurückgesetzt."
  quickbox::dashboard::log "${text}$(tput sgr0)"
}

### Delete Operations
quickbox::lang::delete::selection::version() {
  declare text="Version:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::delete::selection::date() {
  declare text="Datum:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::delete::selection() {
  declare text="Wählen Sie eine Nummer aus der Liste unten aus, um
eine frühere Sicherung von ${software_title} zu löschen:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::delete::selection::invalid() {
  declare text="Ungültige Auswahl. Bitte versuchen Sie es erneut."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::delete::selection::display() {
  version="$(tput setaf 5)${version}$(tput setaf 7)"
  app_package="$(tput setaf 5)${app_package}$(tput setaf 7)"
  config_package="$(tput setaf 5)${config_package}$(tput setaf 7)"
  declare text="Sie haben Version ${version} für ${software_title} ausgewählt.
Anwendungspaket: ${app_package}
Konfigurationspaket: ${config_package}"
  quickbox::dashboard::log "${text}$(tput sgr0)"
}

quickbox::lang::delete::selection::confirm() {
  declare text="Sind Sie sicher, dass Sie mit dem Löschen fortfahren möchten? (j/n)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::delete::cancelled() {
  declare text="Sicherungslöschung abgebrochen."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::delete::continue() {
  version="$(tput setaf 5)${version}$(tput setaf 7)"
  declare text="${software_title} Sicherung (${version}) wird jetzt gelöscht."
  quickbox::dashboard::log "${text}$(tput sgr0)"
}

quickbox::lang::delete::complete() {
  version="$(tput setaf 5)${version}$(tput setaf 2)"
  declare text="${software_title} Sicherung (${version}) wurde gelöscht."
  quickbox::dashboard::log "${text}$(tput sgr0)"
}