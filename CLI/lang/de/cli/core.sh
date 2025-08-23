#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Project Name: QuickBox Pro
# File Name: cli_core_de
# File Description: German language file - Core System Operations
# File Version: 1.0.8
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
  declare text="Speicher-Cache wird bereinigt..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::clean::rclone() {
  declare text="Rclone-Upload-Log wird bereinigt..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::clean::dashboard() {
  declare text="Warte auf Systemantwort..."
  quickbox::dashboard::log "${text}"
}

################################################################################
# Lock Management
################################################################################
quickbox::lang::lock::handle() {
  declare text="${quickbox_lock} läuft derzeit
Prozess wird fortgesetzt, sobald ${quickbox_lock} beendet ist"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lock::remove() {
  declare text="Software-Sperren werden entfernt..."
  quickbox::dashboard::log "${text}"
}

################################################################################
# Misc Operations
################################################################################
quickbox::lang::unknown::option() {
  declare text="${2} Unbekannte Option: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::directory::nomove() {
  declare text="Kann nicht zu $1 wechseln..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::package::fail() {
  declare text="Konnte erforderliches Paket $1 nicht installieren..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::database() {
  declare text="Datenbank wird aktualisiert..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::trackers::disable() {
  declare text="Öffentliche Tracker werden deaktiviert..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::trackers::enable() {
  declare text="Öffentliche Tracker werden aktiviert..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::run_via_qb() {
  declare text="Fehler[1]: ${script_name} sollte über qb ausgeführt werden"
  quickbox::dashboard::log "${text}"
}
