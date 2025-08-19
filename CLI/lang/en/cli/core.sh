#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Project Name: QuickBox Pro
# File Name: cli_core_en
# File Description: English language file - Core System Operations
# File Version: 1.0.4
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
# Core Dashboard Logging Function
################################################################################
quickbox::dashboard::log() {
  admin_name="$(quickbox::database "SELECT username FROM user_information WHERE user_level = '10';")"
  if [[ ! -f "/srv/quickbox/logs/dashboard" ]]; then
    mkdir -p /srv/quickbox/logs
    touch /srv/quickbox/logs/dashboard
    chown www-data:www-data /srv/quickbox/logs/dashboard
  fi
  if [[ ! -f "/srv/quickbox/logs/${username:-${admin_name}}.dashboard" ]]; then
    mkdir -p /srv/quickbox/logs
    touch "/srv/quickbox/logs/${username:-${admin_name}}.dashboard"
    chown www-data:www-data "/srv/quickbox/logs/${username:-${admin_name}}.dashboard"
  fi
  if [[ -n ${username} ]]; then
    echo "${1:-null}" | sed -z "s/\n/\n<br>/" >"/srv/quickbox/logs/${username:-}.dashboard"
  else
    echo "${1:-null}" | sed -z "s/\n/\n<br>/" >"/srv/quickbox/logs/${admin_name:-}.dashboard"
  fi
  echo "${1:-null}"
}

################################################################################
# Clean Operations
################################################################################
quickbox::lang::clean::memory() {
  declare text="cleaning memory cache..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::clean::rclone() {
  declare text="cleaning rclone upload log..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::clean::rclone::error() {
  declare text="error: log file not present."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::clean::dashboard() {
  declare text="awaiting system response..."
  quickbox::dashboard::log "${text}"
}

################################################################################
# Lock Management
################################################################################
quickbox::lang::lock::handle() {
  declare text="${quickbox_lock} is currently running
process will resume once ${quickbox_lock} finishes"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lock::remove() {
  declare text="removing software locks..."
  quickbox::dashboard::log "${text}"
}

################################################################################
# Misc Operations
################################################################################
quickbox::lang::unknown::option() {
  declare text="${2} Unknown option: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::username::specified() {
  declare text="error: username not specified"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::directory::noexist() {
  declare text="required directory does not exist..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::directory::nomove() {
  declare text="unable to move to $1..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::package::fail() {
  declare text="could not install a required package $1..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::run_via_qb() {
  declare text="error[1]: ${script_name} should be run via qb"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::mflibs_not_readable() {
  declare text="error[1]: mflibs not readable"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::database() {
  declare text="updating database..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::trackers::disable() {
  declare text="disabling public trackers..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::trackers::enable() {
  declare text="enabling public trackers..."
  quickbox::dashboard::log "${text}"
} 