#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Project Name: QuickBox Pro
# File Name: cli_updater_de
# File Description: German language file - System Updater
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
# QB Updater
################################################################################
quickbox::lang::update::ntp() {
  declare text="Prüfe mit NTP-Server..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::apt() {
  declare text="APT-Updates werden durchgeführt..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::initial::dependencies() {
  declare text="Prüfe auf anfängliche Abhängigkeiten..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::download::v3() {
  declare text="v3-Update wird heruntergeladen..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::quickbox::dependencies() {
  declare text="Prüfe auf QuickBox-Abhängigkeiten..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::base::dependencies() {
  declare text="Basis-Abhängigkeiten werden installiert: "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::web::dependencies() {
  declare text="Web-Abhängigkeiten werden installiert: "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::python::dependencies() {
  declare text="Python-Abhängigkeiten werden installiert: "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::dependencies::log() {
  declare text="Installierte Abhängigkeiten werden gespeichert..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::pip() {
  declare text="pip wird aktualisiert..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::lshell() {
  declare text="lshell wird aktualisiert..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::iris() {
  declare text="iris wird aktualisiert..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::libraries() {
  declare text="QuickBox-Bibliotheken werden aktualisiert..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::cron() {
  declare text="Cron-Jobs werden aktualisiert..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::sudo() {
  declare text="Sudo-Konfigurationen werden aktualisiert..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::curl() {
  declare text="curl wird aktualisiert..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::php::check() {
  declare text="PHP wird geprüft..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::qbcommands() {
  declare text="QuickBox Pro-Befehle werden konfiguriert..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::dashboard() {
  declare text="QuickBox-Dashboard wird aktualisiert..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::database() {
  declare text="QuickBox-Datenbank wird aktualisiert..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::services() {
  declare text="Installierte Software-Service-Dateien werden geprüft und aktualisiert..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::autocomplete() {
  declare text="QuickBox-Autovervollständigung wird aktualisiert..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::manpage() {
  declare text="QuickBox-Manpage wird aktualisiert..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::permissions() {
  declare text="Berechtigungen werden konfiguriert..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::clean() {
  declare text="Update-Dateien werden bereinigt..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::complete() {
  declare text="Update abgeschlossen!"
  quickbox::dashboard::log "${text}"
}