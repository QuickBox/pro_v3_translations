#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Project Name: QuickBox Pro
# File Name: cli_vpn_en
# File Description: English language file - VPN/WireGuard Operations
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
	declare text="download ${software_title} profile at:
${quickbox_web_root}${username}/ovpn.zip
> to use in any OpenVPN client"
	quickbox::dashboard::log "${text}"
}

################################################################################
# WireGuard Operations
################################################################################
quickbox::lang::wireguard::client_config() {
	declare text="setting up client configuration for $1"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::server_config() {
	declare text="setting up server configuration for $1"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::configure::client_ask() {
	declare text="Do you want to enter a client configuration? (y/n)"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::configure::client_paste() {
	declare text="Paste or enter the client configuration below. Press ctrl+D or ⌘+D when done to continue."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::configure::client_ask_extra() {
	declare text="Do you want to enter another client configuration? (y/n)"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::configure::client_ask_extra_error() {
	declare text="Invalid input. Please enter 'y' or 'n'."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::mtuendpoint::error() {
	declare text="Error: --mtu and --endpoint are required for the 'calc' process"
	quickbox::dashboard::log "${text}"
}
