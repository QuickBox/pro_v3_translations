#!/usr/bin/env bash
################################################################################
# Miscellaneous Messages Module
# Contains all general utility, system, and miscellaneous messages
################################################################################

quickbox::lang::unknown::option() {
  declare text="${2} Unbekannte Option: ${1}"
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

quickbox::lang::directory::nomove() {
  declare text="Kann nicht zu $1 wechseln..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::package::fail() {
  declare text="Konnte erforderliches Paket $1 nicht installieren..."
  quickbox::dashboard::log "${text}"
}

quickbox::error::non-empty() {
  declare text="Fehler: $1 erfordert ein nicht-leeres Argument"
  quickbox::dashboard::log "${text}"
}