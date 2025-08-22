#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Project Name: QuickBox Pro
# File Name: cli_software_de
# File Description: German language file - Software Management
# File Version: 1.0.21
#
# Save Tasks:
# Automated_Versioning: true
# Automated_Formatting: true
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
# Install Operations
################################################################################
quickbox::lang::install::header() {
  declare text="${software_title} wird jetzt installiert
dieser Prozess kann einige Minuten dauern..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::rutorrent::header() {
  rtorrent_count=$(quickbox::software::count rtorrent)
  if [[ ${rtorrent_count} -eq 0 ]]; then
    declare text="es scheint, als wäre rTorrent nicht installiert

rTorrent 0.9.8 wird jetzt installiert, bitte warten Sie, da dies
je nach Systemleistung einige Minuten dauern kann"
  else
    declare text="${software_title} wird jetzt installiert
dieser Prozess kann einige Minuten dauern..."
  fi
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::sources::header() {
  declare text="Zusätzliche Schlüssel und Quellen für ${software_title} werden hinzugefügt..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::dependencies::header() {
  declare text="${software_title} Abhängigkeiten werden installiert..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::build::header() {
  declare text="${software_title} wird kompiliert..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::mktorrent::header() {
  declare text="mktorrent wird kompiliert..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::xmlrpc::header() {
  declare text="xmlrpc-c wird kompiliert..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::libtorrent::header() {
  declare text="libtorrent wird kompiliert..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::rtorrent::header() {
  declare text="rtorrent wird kompiliert..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::certificate::header() {
  declare text="SSL-Zertifikat für ${d} wird erstellt..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::configure::lecert::header() {
  declare text="NGinx für Let's Encrypt wird konfiguriert..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::configure::header() {
  declare text="${software_title} wird konfiguriert..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::backup::header() {
  declare text="${software_title} Konfiguration wird gesichert..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::start::header() {
  declare text="${software_title} wird gestartet..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::complete::header() {
  declare text="${software_title} Installation abgeschlossen"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Reinstall Operations
################################################################################
quickbox::lang::reinstall::header() {
  declare text="${software_title} wird jetzt neu installiert
dieser Prozess kann einige Minuten dauern..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::reinstall::complete::header() {
  declare text="${software_title} Neuinstallation abgeschlossen"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Remove Operations
################################################################################
quickbox::lang::remove::header() {
  declare text="${software_title} wird jetzt entfernt
dieser Prozess kann einige Minuten dauern..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::remove::stop::header() {
  declare text="${software_title} wird gestoppt..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::remove::dependencies::header() {
  declare text="${software_title} Abhängigkeiten werden entfernt..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::remove::files::header() {
  declare text="${software_title} Dateien werden entfernt..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::remove::complete::header() {
  declare text="${software_title} Entfernung abgeschlossen"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Update Operations
################################################################################
quickbox::lang::update::header() {
  declare text="${software_title} wird jetzt aktualisiert
dieser Prozess kann einige Minuten dauern..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::files::header() {
  declare text="${software_title} wird aktualisiert..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::complete::header() {
  declare text="${software_title} Update abgeschlossen"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::files::admin() {
  declare text="muss als Administrator angemeldet sein, um ${software_title} zu aktualisieren"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Software Access Information
################################################################################
quickbox::lang::software::access() {
  declare text="Greifen Sie auf ${software_title} zu unter:
${quickbox_web_root}${software_name}
${software_title} installiert auf Port: ${software_web_port}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::mu::access() {
  declare text="Greifen Sie auf ${software_title} zu unter:
${quickbox_web_root}${username}/${software_name}
${software_title} installiert auf Port: ${software_web_port}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::admin::access() {
  declare text="Greifen Sie auf ${software_title} zu unter:
${quickbox_web_root}${admin_name}/${software_name}
${software_title} installiert auf Port: ${software_web_port}"
  quickbox::dashboard::log "${text}"
}

################################################################################
# WSDashboard Specific Messages
################################################################################

################################################################################
# System Command Messages
################################################################################
quickbox::lang::system::health::check::running() {
  declare text="Umfassende Gesundheitsprüfung wird durchgeführt..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::service::status::current() {
  declare text="Aktueller Service Status:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::service::logs::recent() {
  declare text="Aktuelle Service Logs:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::enhanced::files::removed() {
  declare text="Erweiterte Service Dateien erfolgreich entfernt"
  quickbox::dashboard::log "${text}"
}
