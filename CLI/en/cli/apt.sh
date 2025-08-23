#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Project Name: QuickBox Pro
# File Name: cli_apt_en
# File Description: English language file - APT Package Management
# @version: 1.0.6
#
# @save_tasks:
#  automated_versioning: true
#  automated_formatting: true
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
# APT Package Management
################################################################################
quickbox::lang::apt::update::header() {
	declare text="checking and performing apt updates..."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::apt::db::locked() {
	declare text="trying to resolve dpkg lock..."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::apt::update::completed() {
	declare text="apt-get upgrade completed successfully"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::apt::check::failed() {
	declare text="apt-get check failed, you may have broken packages"
	quickbox::dashboard::log "${text}"
}
