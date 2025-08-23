#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Project Name: QuickBox Pro
# File Name: cli_vpn_de
# File Description: German language file - VPN/WireGuard Operations
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
# VPN Operations
################################################################################
quickbox::lang::software::vpnzip::access() {
  declare text="Laden Sie das ${software_title}-Profil herunter unter:
${quickbox_web_root}${username}/ovpn.zip
> zur Verwendung in jedem OpenVPN-Client"
  quickbox::dashboard::log "${text}"
}

################################################################################
# WireGuard Operations
################################################################################
quickbox::lang::wireguard::client_config() {
  declare text="Client-Konfiguration für $1 wird eingerichtet"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::server_config() {
  declare text="Server-Konfiguration für $1 wird eingerichtet"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::configure::client_ask() {
  declare text="Möchten Sie eine Client-Konfiguration eingeben? (j/n)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::configure::client_paste() {
  declare text="Fügen Sie die Client-Konfiguration unten ein oder geben Sie sie ein. Drücken Sie Strg+D oder ⌘+D, wenn Sie fertig sind, um fortzufahren."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::configure::client_ask_extra() {
  declare text="Möchten Sie eine weitere Client-Konfiguration eingeben? (j/n)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::configure::client_ask_extra_error() {
  declare text="Ungültige Eingabe. Bitte geben Sie 'j' oder 'n' ein."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::mtuendpoint::error() {
  declare text="Fehler: --mtu und --endpoint sind für den 'calc'-Prozess erforderlich"
  quickbox::dashboard::log "${text}"
} 