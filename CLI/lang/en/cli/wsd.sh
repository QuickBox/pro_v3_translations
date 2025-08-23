#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Project Name: QuickBox Pro
# File Name: cli_wsd_en
# File Description: English language file - WSD (What's Streaming Dashboard) CLI
# File Version: 1.0.72
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
#
# License: BSD-3 (Available in LICENSE.md)
# Copyright (C) 2019-2025, QuickBox.IO
# All rights reserved.
# <END METADATA>
# shellcheck disable=2001,2034,2154,2312,2317
################################################################################

################################################################################
# Service Status Messages (guarded)
################################################################################
quickbox::lang::system::service::status::current() {
	declare text="Current service status:"
	quickbox::dashboard::log "${text}"
}

################################################################################
# Installation Requirements
################################################################################
quickbox::lang::wsd::neither_installed() {
	declare text="Neither Emby nor Jellyfin is installed. WSDashboard requires one of these streaming applications to function."
	quickbox::dashboard::log "${text}"
}

################################################################################
# Port Management
################################################################################
quickbox::lang::wsd::port::fallback_used() {
	declare text="Using fallback port ${1} as no other ports were available"
	quickbox::dashboard::log "${text}"
}

################################################################################
# Environment Configuration
################################################################################
quickbox::lang::wsd::env::port_recovered_from_nginx() {
	declare text="Port recovered from nginx configuration: ${1}"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::env::port_using_available() {
	declare text="Using available port: ${1}"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::env::current_port_empty() {
	declare text="Current port is empty or zero, cannot proceed with env.conf update"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::env::streaming_app_empty() {
	declare text="Streaming application is empty, cannot proceed with env.conf update"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::env::boilerplate_remaining() {
	declare text="Some boilerplate placeholders remain in env.conf"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::env::update_success() {
	declare text="Environment configuration updated successfully: App=${1}, Port=${2}, LogPort=${3}"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::env::backup_created() {
	declare text="Backup created at: ${1}"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::env::boilerplate_detected() {
	declare text="Boilerplate placeholders detected in env.conf"
	quickbox::dashboard::log "${text}"
}

################################################################################
# Nginx Configuration
################################################################################
quickbox::lang::wsd::nginx::config_missing() {
	declare text="Nginx configuration file missing, cannot validate"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::nginx::port_updated() {
	declare text="Nginx port updated from ${1} to ${2}"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::nginx::config_invalid() {
	declare text="Nginx configuration is invalid"
	quickbox::dashboard::log "${text}"
}

################################################################################
# Plugin Management
################################################################################
quickbox::lang::wsd::plugin::fetch::api_error() {
	declare text="API error occurred while fetching plugin"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::plugin::fetch::download_error() {
	declare text="Download error occurred while fetching plugin"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::plugin::fetch::unzip_error() {
	declare text="Unzip error occurred while fetching plugin"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::plugin::fetch::missing_directory() {
	declare text="Required directory missing in plugin archive"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::plugin::fetch::missing_directory_warning() {
	declare text="Warning: directory ${1} not found in plugin archive (continuing for older installs)"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::plugin::fetch::complete() {
	declare text="WSD plugin fetch and extraction complete"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::plugin::fetch::up_to_date() {
	declare text="WSD plugin is up to date"
	quickbox::dashboard::log "${text}"
}

################################################################################
# Virtual Environment
################################################################################
quickbox::lang::wsd::virtual_env::nodeenv_failed() {
	declare text="Failed to install nodeenv in Python virtual environment: ${1}"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::virtual_env::nodejs_failed() {
	declare text="Failed to create Node.js virtual environment: ${1}"
	quickbox::dashboard::log "${text}"
}

################################################################################
# Service Management
################################################################################
quickbox::lang::wsd::service::start::success() {
	declare text="Service started successfully"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::start::failed() {
	declare text="Service failed to start"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::start::starting() {
	declare text="Starting service..."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::start::success_attempt() {
	declare text="Service started successfully on attempt ${1}"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::start::retry() {
	declare text="Retrying service start (attempt ${1})"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::start::command_failed() {
	declare text="Service start command failed"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::health::passed() {
	declare text="Health check passed"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::health::warnings() {
	declare text="Health check completed with warnings"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::fix::attempting() {
	declare text="Attempting to fix service issues"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::stop::starting() {
	declare text="Stopping service..."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::stop::force() {
	declare text="Force stopping service"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::stop::cleanup() {
	declare text="Cleaning up remaining processes"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::stop::warning() {
	declare text="Service stop warning"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::stop::success() {
	declare text="Service stopped successfully"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::log_server::started() {
	declare text="Log server service started successfully"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::log_server::failed() {
	declare text="Log server service failed to start"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::update::success() {
	declare text="Service updated successfully"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::update::failed() {
	declare text="Service update failed"
	quickbox::dashboard::log "${text}"
}

################################################################################
# Access Information
################################################################################
quickbox::lang::wsd::access() {
	declare text="Access WSDashboard at: http://localhost:${software_daemon_port}"
	quickbox::dashboard::log "${text}"
}

################################################################################
# Maintenance
################################################################################
quickbox::lang::wsd::maintenance::header() {
	declare text="WSDashboard maintenance mode"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::maintenance::title() {
	declare text="WSDashboard maintenance"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::maintenance::service_not_found() {
	declare text="WSDashboard service not found"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::maintenance::completed_success() {
	declare text="Maintenance completed successfully"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::maintenance::completed_warnings() {
	declare text="Maintenance completed with warnings"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::maintenance::complete() {
	declare text="Maintenance complete"
	quickbox::dashboard::log "${text}"
}
