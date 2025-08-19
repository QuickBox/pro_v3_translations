#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Project Name: QuickBox Pro
# File Name: cli_apt_en
# File Description: English language file - APT Package Management
# File Version: 1.0.1
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