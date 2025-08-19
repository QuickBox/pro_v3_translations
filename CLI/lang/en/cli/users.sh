#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Project Name: QuickBox Pro
# File Name: cli_users_en
# File Description: English language file - User Management
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
# User Management
################################################################################
quickbox::lang::user::create() {
  declare text="quickbox user created:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::user::delete() {
  declare text="${username:-"quickbox user"} deleted"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::user::username() {
  declare text="user: ${username}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::user::password() {
  declare text="password: ${password}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::user::password::updated() {
  declare text="${username:-"quickbox user"}'s password updated"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::user::ban() {
  declare text="${username:-"quickbox user"} banned"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::user::unban() {
  declare text="${username:-"quickbox user"} unbanned"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::user::demote() {
  declare text="${username:-"quickbox user"} demoted from admin"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::user::promote() {
  declare text="${username:-"quickbox user"} promoted to admin"
  quickbox::dashboard::log "${text}"
} 