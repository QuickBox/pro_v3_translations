#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Project Name: QuickBox Pro
# File Name: cli_manager_en
# File Description: English language file - Software Manager
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
	declare text="configuration file for ${software_name} is now being backed up."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::backup::configf::error() {
	declare text="configuration file ${softwareConf} does not exist."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::backup::configf::success() {
	declare text="configuration file has been backed up."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::backup::installdir::error() {
	declare text="${software_title} installation directory does not exist."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::backup::installdir() {
	declare text="installation directory for ${software_title} (${backup_version}) is now being backed up."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::backup::configdir() {
	declare text="configuration directory for ${software_title} is now being backed up."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::backup::installdir::success() {
	backup_version="$(tput setaf 5)${backup_version}$(tput setaf 2)"
	declare text="${software_title} (${backup_version}) has been backed up."
	quickbox::dashboard::log "${text}$(tput sgr0)"
}

### Restore Operations
quickbox::lang::restore::configf::error() {
	declare text="backup file ${backupConf} does not exist."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::restore::configf::success() {
	declare text="backup file has been restored."
	quickbox::dashboard::log "${text}"
}

### Default Operations
quickbox::lang::default::configf::error() {
	declare text="default configuration ${defaultConf} file does not exist."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::default::configf::success() {
	declare text="default configuration file has been restored."
	quickbox::dashboard::log "${text}"
}

### Rollback Operations
quickbox::lang::rollback::installdir::error() {
	declare text="${software_title} installation directory does not exist."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::rollback::selection::version() {
	declare text="version:"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::rollback::selection::date() {
	declare text="date:"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::rollback::selection() {
	declare text="select a number from the list below to rollback
to a previous version of ${software_title}:"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::rollback::selection::invalid() {
	declare text="invalid selection. please try again."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::rollback::software::error() {
	declare text="${software_title} application backup does not exist."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::rollback::config::error() {
	declare text="${software_title} configuration backup does not exist."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::rollback::selection::display() {
	version="$(tput setaf 5)${version}$(tput setaf 7)"
	app_package="$(tput setaf 5)${app_package}$(tput setaf 7)"
	config_package="$(tput setaf 5)${config_package}$(tput setaf 7)"
	declare text="you have selected version ${version} for ${software_title}.
app package: ${app_package}
config package: ${config_package}"
	quickbox::dashboard::log "${text}$(tput sgr0)"
}

quickbox::lang::rollback::selection::confirm() {
	declare text="are you sure you want to proceed with the rollback? (y/n)"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::rollback::cancelled() {
	declare text="rollback cancelled."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::rollback::continue() {
	version="$(tput setaf 5)${version}$(tput setaf 7)"
	declare text="${software_title} is now being rolled back to version ${version}."
	quickbox::dashboard::log "${text}$(tput sgr0)"
}

quickbox::lang::rollback::complete() {
	version="$(tput setaf 5)${version}$(tput setaf 2)"
	declare text="${software_title} (${version}) has been rolled back."
	quickbox::dashboard::log "${text}$(tput sgr0)"
}

### Delete Operations
quickbox::lang::delete::selection::version() {
	declare text="version:"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::delete::selection::date() {
	declare text="date:"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::delete::selection() {
	declare text="select a number from the list below to delete
a previous backup of ${software_title}:"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::delete::selection::invalid() {
	declare text="invalid selection. please try again."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::delete::selection::display() {
	version="$(tput setaf 5)${version}$(tput setaf 7)"
	app_package="$(tput setaf 5)${app_package}$(tput setaf 7)"
	config_package="$(tput setaf 5)${config_package}$(tput setaf 7)"
	declare text="you have selected version ${version} for ${software_title}.
app package: ${app_package}
config package: ${config_package}"
	quickbox::dashboard::log "${text}$(tput sgr0)"
}

quickbox::lang::delete::selection::confirm() {
	declare text="are you sure you want to proceed with the deletion? (y/n)"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::delete::cancelled() {
	declare text="backup deletion cancelled."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::delete::continue() {
	version="$(tput setaf 5)${version}$(tput setaf 7)"
	declare text="${software_title} backup (${version}) is now being deleted."
	quickbox::dashboard::log "${text}$(tput sgr0)"
}

quickbox::lang::delete::complete() {
	version="$(tput setaf 5)${version}$(tput setaf 2)"
	declare text="${software_title} backup (${version}) has been deleted."
	quickbox::dashboard::log "${text}$(tput sgr0)"
}
