#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Project Name: QuickBox Pro
# File Name: cli_users_de
# File Description: German language file - User Management
# File Version: 1.0.2
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
# User Management
################################################################################
quickbox::lang::user::create() {
  declare text="QuickBox-Benutzer erstellt:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::user::delete() {
  declare text="${username:-"QuickBox-Benutzer"} gelöscht"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::user::username() {
  declare text="Benutzer: ${username}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::user::password() {
  declare text="Passwort: ${password}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::user::password::updated() {
  declare text="Passwort von ${username:-"QuickBox-Benutzer"} aktualisiert"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::user::ban() {
  declare text="${username:-"QuickBox-Benutzer"} gesperrt"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::user::unban() {
  declare text="${username:-"QuickBox-Benutzer"} entsperrt"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::user::demote() {
  declare text="${username:-"QuickBox-Benutzer"} von Administrator degradiert"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::user::promote() {
  declare text="${username:-"QuickBox-Benutzer"} zum Administrator befördert"
  quickbox::dashboard::log "${text}"
} 