#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Project Name: QuickBox Pro
# File Name: cli_software_en
# File Description: English language file - Software Management
# File Version: 1.0.28
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
	declare text="${software_title} will now be installed
this process may take a few minutes..."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::install::rutorrent::header() {
	rtorrent_count=$(quickbox::software::count rtorrent)
	if [[ ${rtorrent_count} -eq 0 ]]; then
		declare text="it looks like rTorrent is not installed

rTorrent 0.9.8 will now install, please hold as this may
take a few minutes (depending on system specs) to install"
	else
		declare text="${software_title} will now be installed
this process may take a few minutes..."
	fi
	quickbox::dashboard::log "${text}"
}

quickbox::lang::install::sources::header() {
	declare text="adding additional keys and sources for ${software_title}..."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::install::dependencies::header() {
	declare text="installing ${software_title} dependencies..."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::install::build::header() {
	declare text="building ${software_title}..."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::install::mktorrent::header() {
	declare text="building mktorrent..."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::install::xmlrpc::header() {
	declare text="building xmlrpc-c..."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::install::libtorrent::header() {
	declare text="building libtorrent..."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::install::rtorrent::header() {
	declare text="building rtorrent..."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::install::certificate::header() {
	declare text="creating ssl certificate for ${d}..."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::install::configure::lecert::header() {
	declare text="configuring NGinx for Let's Encrypt..."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::install::configure::header() {
	declare text="configuring ${software_title}..."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::install::backup::header() {
	declare text="backing up ${software_title} configuration..."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::install::start::header() {
	declare text="starting ${software_title}..."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::install::complete::header() {
	declare text="${software_title} installation complete"
	quickbox::dashboard::log "${text}"
}

################################################################################
# Reinstall Operations
################################################################################
quickbox::lang::reinstall::header() {
	declare text="${software_title} will now be reinstalled
this process may take a few minutes..."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::reinstall::complete::header() {
	declare text="${software_title} reinstallation complete"
	quickbox::dashboard::log "${text}"
}

################################################################################
# Remove Operations
################################################################################
quickbox::lang::remove::header() {
	declare text="${software_title} will now be removed
this process may take a few minutes..."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::remove::stop::header() {
	declare text="stopping ${software_title}..."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::remove::dependencies::header() {
	declare text="removing ${software_title} dependencies..."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::remove::files::header() {
	declare text="removing ${software_title} files..."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::remove::complete::header() {
	declare text="${software_title} removal complete"
	quickbox::dashboard::log "${text}"
}

################################################################################
# Update Operations
################################################################################
quickbox::lang::update::header() {
	declare text="${software_title} will now be updated
this process may take a few minutes..."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::update::files::header() {
	declare text="updating ${software_title}..."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::update::complete::header() {
	declare text="${software_title} update complete"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::update::files::admin() {
	declare text="must be logged in as admin to update ${software_title}"
	quickbox::dashboard::log "${text}"
}

################################################################################
# Software Access Information
################################################################################
quickbox::lang::software::access() {
	declare text="access ${software_title} at:
${quickbox_web_root}${software_name}
${software_title} installed on port: ${software_web_port}"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::software::mu::access() {
	declare text="access ${software_title} at:
${quickbox_web_root}${username}/${software_name}
${software_title} installed on port: ${software_web_port}"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::software::admin::access() {
	declare text="access ${software_title} at:
${quickbox_web_root}${admin_name}/${software_name}
${software_title} installed on port: ${software_web_port}"
	quickbox::dashboard::log "${text}"
}

################################################################################
# System Command Messages
################################################################################

quickbox::lang::system::enhanced::files::removed() {
	declare text="Enhanced service files removed successfully"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::system::health::check::running() {
	declare text="Running comprehensive health check..."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::system::service::status::current() {
	declare text="Current service status:"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::system::service::logs::recent() {
	declare text="Recent service logs:"
	quickbox::dashboard::log "${text}"
}
