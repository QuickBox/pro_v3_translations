#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Project Name: QuickBox Pro
# File Name: cli_wsd_en
# File Description: English language file - WSD (What's Streaming Dashboard) CLI
# File Version: 1.0.21
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
#
# License: BSD-3 (Available in LICENSE.md)
# Copyright (C) 2019-2025, QuickBox.IO
# All rights reserved.
# <END METADATA>
# shellcheck disable=2001,2034,2154,2312,2317
################################################################################

################################################################################
# Error Messages
################################################################################
quickbox::lang::software::wsdashboard::ssl::no_domain() {
  declare text="No domain found. SSL setup requires a valid domain."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::certificates_not_found() {
  declare text="SSL certificates not found at expected paths."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::access_denied() {
  declare text="Access denied to SSL certificates. Check permissions."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::service_failed() {
  declare text="WSD service failed to start after SSL configuration."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::update::no_username() {
  declare text="Username is required for SSL update. Use -u parameter."
  quickbox::dashboard::log "${text}"
}
quickbox::lang::wsd::error::missing_emby_params() {
  declare text="Missing required parameters for Emby: -u"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::missing_jellyfin_params() {
  declare text="Missing required parameters for Jellyfin."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::database_not_found() {
  declare text="Database file not found at: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::jellyfin_api_failed() {
  declare text="Failed to fetch data from Jellyfin API."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::missing_manual_path() {
  declare text="Missing manual path parameter."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::path_not_exist() {
  declare text="Specified path does not exist: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::missing_empty_path() {
  declare text="Missing directory path for emptying."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::directory_not_exist() {
  declare text="Directory does not exist: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::timestamp_creation_failed() {
  declare text="Failed to create timestamp file: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::empty_directory_failed() {
  declare text="Failed to empty the directory: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::missing_transcode_id() {
  declare text="Missing transcode ID."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::invalid_transcode_id() {
  declare text="Invalid transcode ID format: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::invalid_mode() {
  declare text="Invalid mode: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::delete_contents_failed() {
  declare text="Failed to delete contents of transcode directory: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::delete_jellyfin_failed() {
  declare text="Failed to delete transcode files for Jellyfin."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::missing_verify_path() {
  declare text="Missing transcode path for verification."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::directory_not_empty() {
  declare text="Transcode directory is not empty: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::remove_empty_dir_failed() {
  declare text="Failed to remove empty directory: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::timestamp_not_found() {
  declare text="Timestamp file not found: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::newer_files_exist() {
  declare text="Newer transcode files exist after the timestamp for: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::invalid_mode_generic() {
  declare text="Invalid or missing mode. Use 'emby' or 'jellyfin'."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::service_template_not_found() {
  declare text="Service template file not found: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::copy_template_failed() {
  declare text="Failed to copy service template to ${1}."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::generate_service_failed() {
  declare text="Failed to generate service file for mode '${1}'."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::reload_systemd_failed() {
  declare text="Failed to reload systemd."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::enable_service_failed() {
  declare text="Failed to enable and start ${1}."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::stop_service_failed() {
  declare text="Failed to stop ${1}."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::disable_service_failed() {
  declare text="Failed to disable ${1}."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::remove_service_file_failed() {
  declare text="Failed to remove ${1} file."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::reload_after_remove_failed() {
  declare text="Failed to reload systemd after removing ${1}."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::invalid_transcode_dir() {
  declare text="Invalid or missing transcoding temp directory: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::clear_standard_failed() {
  declare text="Failed to clear standard transcodes: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::clear_livetv_failed() {
  declare text="Failed to clear LiveTV transcodes: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::invalid_option() {
  declare text="Invalid option. Use -h for help."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::mode_required_c() {
  declare text="Mode (-m) is required with the -c option. Use 'emby' or 'jellyfin'."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::mode_required_a() {
  declare text="Mode (-m) is required with the -a option. Use 'emby' or 'jellyfin'."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::missing_emby_params_generic() {
  declare text="Missing required parameters for Emby: -u"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::missing_jellyfin_params_generic() {
  declare text="Missing required parameters for Jellyfin: -U and/or -k"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::invalid_mode_specified() {
  declare text="Invalid mode specified. Use 'emby' or 'jellyfin'."
  quickbox::dashboard::log "${text}"
}

################################################################################
# Warning Messages
################################################################################
quickbox::lang::wsd::warning::transcode_path_not_found() {
  declare text="TranscodingTempPath not found in the JSON data."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::warning::transcode_path_not_found_api() {
  declare text="TranscodingTempPath not found in the API response."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::warning::autoclear_not_enabled() {
  declare text="AutoClearEnabled is not true for mode '${1}'. No action required."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::warning::service_already_active() {
  declare text="${1} is already active for mode '${2}'."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::warning::service_not_active() {
  declare text="${1} is not active. No need to stop it."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::warning::service_not_enabled() {
  declare text="${1} is not enabled. No need to disable it."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::warning::service_file_not_exist() {
  declare text="Service file does not exist: ${1}. No action required."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::warning::autoclear_disabled() {
  declare text="Auto-clear is disabled in the database. Exiting loop."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::warning::no_matching_files_standard() {
  declare text="No matching files found for standard transcodes."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::warning::no_matching_files_livetv() {
  declare text="No matching files found for LiveTV transcodes."
  quickbox::dashboard::log "${text}"
}

################################################################################
# Info Messages
################################################################################
quickbox::lang::software::wsdashboard::ssl::title() {
  declare text="WSD SSL Configuration"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::header() {
  declare text="Setting up SSL certificate symlinks for WSD service..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::setup::start() {
  declare text="Starting SSL symlink setup..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::certificates::found() {
  declare text="SSL certificates found successfully."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::creating::symlinks() {
  declare text="Creating symlinks to SSL certificates..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::symlinks::created() {
  declare text="SSL certificate symlinks created successfully."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::testing::access() {
  declare text="Testing certificate access for www-data user..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::certificate::accessible() {
  declare text="Certificate accessible via symlink."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::private_key::accessible() {
  declare text="Private key accessible via symlink."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::env_conf::added() {
  declare text="SSL configuration added to env.conf."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::env_conf::exists() {
  declare text="SSL configuration already exists in env.conf."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::env_conf::updated() {
  declare text="SSL configuration updated in env.conf."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::systemd::override::created() {
  declare text="Systemd override created for SSL configuration."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::systemd::override::updated() {
  declare text="Systemd override updated for SSL configuration."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::systemd::reloaded() {
  declare text="Systemd daemon reloaded successfully."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::restarting::service() {
  declare text="Restarting WSD service..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::service::running() {
  declare text="WSD service is running successfully."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::testing::connectivity() {
  declare text="Testing service connectivity..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::https::accessible() {
  declare text="Service accessible via HTTPS."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::https::warning() {
  declare text="Service not accessible via HTTPS (may need time to start)."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::http::accessible() {
  declare text="Service accessible via HTTP fallback."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::http::failed() {
  declare text="Service not accessible via HTTP."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::complete() {
  declare text="SSL certificate symlink setup completed successfully!"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::remove::title() {
  declare text="WSD SSL Removal"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::remove::header() {
  declare text="Removing SSL certificate symlinks for WSD service..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::remove::start() {
  declare text="Starting SSL symlink removal..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::remove::symlinks::removed() {
  declare text="SSL symlink directory removed successfully."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::remove::symlinks::not_found() {
  declare text="SSL symlink directory not found."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::remove::override::removed() {
  declare text="Systemd override removed successfully."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::remove::complete() {
  declare text="SSL certificate symlink removal completed successfully!"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::update::title() {
  declare text="WSD SSL Update"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::update::header() {
  declare text="Updating SSL certificate symlinks for WSD service..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::update::start() {
  declare text="Starting SSL symlink update..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::update::symlinks() {
  declare text="Updating symlinks to SSL certificates..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::update::complete() {
  declare text="SSL certificate symlink update completed successfully!"
  quickbox::dashboard::log "${text}"
}
quickbox::lang::wsd::info::using_default_path() {
  declare text="Using default path for TranscodingTempPath: "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::manual_path_set() {
  declare text="TranscodingTempPath manually set to: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::timestamp_created() {
  declare text="Timestamp file created/updated: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::emptying_directory() {
  declare text="Emptying directory: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::transcode_dir_removed() {
  declare text="Transcode directory already removed: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::generating_service() {
  declare text="Generating ${1} for mode '${2}'."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::reloading_systemd() {
  declare text="Reloading systemd and enabling ${1}."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::stopping_service() {
  declare text="Stopping ${1}."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::disabling_service() {
  declare text="Disabling ${1}."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::removing_service_file() {
  declare text="Removing service file: ${1}."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::reloading_systemd_changes() {
  declare text="Reloading systemd to apply changes."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::running_autoclear_standard() {
  declare text="Running auto-clear for standard transcodes in: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::running_autoclear_livetv() {
  declare text="Running auto-clear for LiveTV transcodes in: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::files_to_delete() {
  declare text="Files to delete: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::sleeping_minutes() {
  declare text="Sleeping for ${1} minutes."
  quickbox::dashboard::log "${text}"
}

################################################################################
# Success Messages
################################################################################
quickbox::lang::wsd::success::directory_emptied() {
  declare text="[SUCCESS] Directory emptied successfully."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::success::transcode_files_deleted() {
  declare text="Transcode files deleted successfully."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::success::directory_removed() {
  declare text="Directory successfully removed: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::success::directory_emptied_removed() {
  declare text="Directory successfully emptied and removed: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::success::no_files_since_timestamp() {
  declare text="No pre-existing files found since the timestamp for: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::success::service_enabled_started() {
  declare text="${1} enabled and started successfully for mode '${2}'."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::success::service_stopped_disabled_removed() {
  declare text="${1} stopped, disabled, and removed successfully."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::success::standard_transcodes_cleared() {
  declare text="Standard transcodes cleared successfully."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::success::livetv_transcodes_cleared() {
  declare text="LiveTV transcodes cleared successfully."
  quickbox::dashboard::log "${text}"
}

################################################################################
# Help Messages
################################################################################
quickbox::lang::wsd::help::usage() {
  declare text="Usage:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::emby_usage() {
  declare text="  Emby Usage:
    $0 -u 'service_admin_username' -m 'emby'"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::jellyfin_usage() {
  declare text="  Jellyfin Usage:
    $0 -U 'api_url' -k 'api_key' -m 'jellyfin'"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::manual_path() {
  declare text="  Manual Path Setting:
    $0 -p 'manual_path'"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::empty_directory() {
  declare text="  Empty Directory:
    $0 -e 'directory_path'"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::verify_directory() {
  declare text="  Verify Directory:
    $0 -v 'directory_path'"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::delete_transcode() {
  declare text="  Delete Transcode Files:
    $0 -d 'transcode_id'"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::check_enable() {
  declare text="  Check and enable the qbwsd.service if AutoClearEnabled is true:
    $0 -c -m 'emby|jellyfin'"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::disable_remove() {
  declare text="  Disable and remove the qbwsd.service if AutoClearEnabled is false:
    $0 -r"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::run_autoclear() {
  declare text="  Run the auto-clear logic manually:
    $0 -a -m 'emby|jellyfin'"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::options() {
  declare text="Options:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::option_u() {
  declare text="  -u  Service admin username (for Emby)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::option_U() {
  declare text="  -U  Jellyfin API URL"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::option_k() {
  declare text="  -k  Jellyfin API key"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::option_m() {
  declare text="  -m  Service mode (emby or jellyfin)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::option_p() {
  declare text="  -p  Manual path for TranscodingTempPath"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::option_e() {
  declare text="  -e  Empty the specified transcode directory"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::option_v() {
  declare text="  -v  Verify if the specified transcode directory is empty"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::option_d() {
  declare text="  -d  Delete transcode files by ID"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::option_c() {
  declare text="  -c  Check and enable the qbwsd.service if AutoClearEnabled is true"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::option_r() {
  declare text="  -r  Disable and remove the qbwsd.service if AutoClearEnabled is false"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::option_a() {
  declare text="  -a  Run the auto-clear logic manually"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::option_h() {
  declare text="  -h  Display this help message"
  quickbox::dashboard::log "${text}"
} 

################################################################################
# Service Status Messages (guarded)
################################################################################
quickbox::lang::system::service::status::current() {
  declare text="Current service status:"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Service Log Server Messages
################################################################################
quickbox::lang::software::wsdashboard::service::log_server::started() {
  declare text="Log server service started successfully."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::log_server::failed() {
  declare text="Failed to start log server service."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsdashboard::health::service_running() {
  declare text="Service is running"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsdashboard::health::service_not_running() {
  declare text="Service is not running"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Restart Services Script Messages
################################################################################
quickbox::lang::wsd::restart::running_as_root() {
  declare text="Running as root (EUID: ${1})"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::restart::using_sudo() {
  declare text="Using sudo for systemctl commands"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::restart::sudo_not_functional() {
  declare text="sudo available but not functional (no new privileges flag set)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::restart::sudo_fallback_warning() {
  declare text="Will attempt to run systemctl directly - this may fail if insufficient privileges"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::restart::no_sudo_available() {
  declare text="No sudo available, will attempt to run systemctl directly"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::restart::processing_service() {
  declare text="Processing service: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::restart::service_active_reload() {
  declare text="Service ${1} is active, attempting reload/restart"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::restart::reload_failed_restart() {
  declare text="Reload failed for ${1}, attempting hard restart"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::restart::service_inactive_start() {
  declare text="Service ${1} is inactive, attempting to start"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::restart::failed_start_service() {
  declare text="Failed to start service: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::restart::failed_restart_service() {
  declare text="Failed to restart service: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::restart::start_fallback_methods() {
  declare text="Attempting fallback methods for ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::restart::trying_service_command() {
  declare text="Trying 'service' command for ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::restart::service_started_success() {
  declare text="Service ${1} started using 'service' command"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::restart::trying_direct_systemctl() {
  declare text="Trying direct systemctl for ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::restart::direct_systemctl_success() {
  declare text="Service ${1} started using direct systemctl"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::restart::all_fallback_failed() {
  declare text="All fallback methods failed for ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::restart::restart_fallback_methods() {
  declare text="Attempting fallback restart methods for ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::restart::trying_service_restart() {
  declare text="Trying 'service' command restart for ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::restart::service_restarted_success() {
  declare text="Service ${1} restarted using 'service' command"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::restart::trying_direct_restart() {
  declare text="Trying direct systemctl restart for ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::restart::direct_restart_success() {
  declare text="Service ${1} restarted using direct systemctl"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::restart::all_restart_fallback_failed() {
  declare text="All fallback restart methods failed for ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::restart::service_restart_completed() {
  declare text="Service restart process completed successfully"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::restart::error::failed_start_service() {
  declare text="Failed to start service: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::restart::error::failed_restart_service() {
  declare text="Failed to restart service: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::restart::error::insufficient_permissions() {
  declare text="Insufficient permissions to manage systemd services (exit code: ${1}). Check if running as root or have proper sudo access."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::restart::error::required_command_not_found() {
  declare text="Required command '${1}' not found"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::restart::warning::reload_failed_will_restart() {
  declare text="try-reload-or-restart failed for ${1} (exit code: ${2}), will attempt restart"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::restart::info::using_sudo_commands() {
  declare text="Using sudo for systemctl commands"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::restart::info::running_direct_commands() {
  declare text="Running systemctl commands directly (EUID: ${1})"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::restart::failure::prefix() {
  declare text="FAILURE: ${1}"
  quickbox::dashboard::log "${text}"
}