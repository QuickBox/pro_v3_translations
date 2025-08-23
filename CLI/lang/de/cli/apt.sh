#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Project Name: QuickBox Pro
# File Name: cli_apt_de
# File Description: German language file - APT Package Management
# File Version: 1.0.5
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
# APT Package Management
################################################################################
quickbox::lang::apt::update::header() {
  declare text="APT-Updates werden geprüft und durchgeführt..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::apt::db::locked() {
  declare text="Versuche dpkg-Sperre zu lösen..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::apt::update::completed() {
  declare text="apt-get upgrade erfolgreich abgeschlossen"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::apt::check::failed() {
  declare text="apt-get check fehlgeschlagen, Sie haben möglicherweise beschädigte Pakete"
  quickbox::dashboard::log "${text}"
}