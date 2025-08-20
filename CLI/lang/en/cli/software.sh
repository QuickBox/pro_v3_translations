#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Project Name: QuickBox Pro
# File Name: cli_software_en
# File Description: English language file - Software Management
# File Version: 1.0.23
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

quickbox::lang::update::jellyfin::ffmpeg() {
  declare text="updating ffmpeg for Jellyfin..."
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
# WSDashboard Specific Messages
################################################################################
quickbox::lang::software::wsdashboard::neither_installed() {
  declare text="Neither Emby nor Jellyfin is installed. Skipping process."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::api_error() {
  declare text="error: unable to get zip_url from central.quickbox.io API."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::download_error() {
  declare text="error: unable to download WSD plugin archive."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::unzip_error() {
  declare text="error: unable to unzip WSD plugin archive."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::missing_directory() {
  declare text="error: missing required directory ${req_dir} in plugin archive."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::missing_directory_warning() {
  declare text="warning: directory ${1} not found in plugin archive (continuing for older installs)."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::move_backend_error() {
  declare text="Failed to move backend directory! Aborting update."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::move_backups_error() {
  declare text="Failed to move backups directory! Aborting update."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::move_public_error() {
  declare text="Failed to move public directory! Aborting update."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::move_logs_error() {
  declare text="Failed to move logs directory! Aborting update."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::move_scripts_error() {
  declare text="Failed to move scripts directory! Aborting update."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::move_version_error() {
  declare text="Failed to move version.txt! Aborting update."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::move_requirements_error() {
  declare text="Failed to move requirements.txt! Aborting update."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::move_package_error() {
  declare text="Failed to move package.json! Aborting update."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::move_env_error() {
  declare text="Failed to move env.conf! Aborting update."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::move_changelog_error() {
  declare text="Failed to move CHANGELOG.md! Aborting update."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::move_readme_error() {
  declare text="Failed to move README.md! Aborting update."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::complete() {
  declare text="WSD plugin fetch and extraction complete."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::up_to_date() {
  declare text="WSD plugin is up-to-date; fetch not required."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::start::success() {
  declare text="Service started successfully. Running health check..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::health::passed() {
  declare text="Health check passed. Service is running optimally."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::health::warnings() {
  declare text="Health check completed with warnings. Review logs if needed."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::start::failed() {
  declare text="Service failed to start. Checking status..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::fix::attempting() {
  declare text="Attempting to fix common issues..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::update::success() {
  declare text="Service updated successfully. Running health check..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::update::failed() {
  declare text="Service failed to start after update. Checking status..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::maintenance::header() {
  declare text="Performing WSD service maintenance and monitoring..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::maintenance::service_not_found() {
  declare text="Service not found. Please install WSD first."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::maintenance::completed_success() {
  declare text="Service maintenance completed successfully."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::maintenance::completed_warnings() {
  declare text="Service maintenance completed with warnings."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::maintenance::complete() {
  declare text="Maintenance complete. Use 'qbwsd-health-check.sh --verbose' for detailed diagnostics."
  quickbox::dashboard::log "${text}"
}

################################################################################
# WSDashboard Environment Configuration Messages
################################################################################
quickbox::lang::software::wsdashboard::env::current_port_empty() {
  declare text="error: current_port is empty or zero, cannot proceed with env.conf update."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::env::streaming_app_empty() {
  declare text="error: streaming_application is empty, cannot proceed with env.conf update."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::env::daemon_port_empty() {
  declare text="error: software_daemon_port is empty or zero, cannot proceed with env.conf update."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::env::boilerplate_remaining() {
  declare text="warning: some boilerplate placeholders remain in env.conf, manual review recommended."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::env::update_success() {
  declare text="env.conf updated successfully: app=${1}, port=${2}, log_port=${3}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::env::backup_created() {
  declare text="backup created at: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::env::boilerplate_detected() {
  declare text="warning: boilerplate placeholders detected in env.conf, some values may need manual configuration."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::maintenance::title() {
  declare text="WSD Service Maintenance"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::stop::starting() {
  declare text="Stopping ${software_service_name} service..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::stop::force() {
  declare text="Service still active, forcing stop..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::stop::cleanup() {
  declare text="Cleaning up any remaining Node.js processes..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::stop::warning() {
  declare text="Warning: Service may still be running, proceeding with caution..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::stop::success() {
  declare text="Service successfully stopped"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::start::starting() {
  declare text="Starting ${software_service_name} service..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::start::success_attempt() {
  declare text="Service started successfully on attempt ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::start::retry() {
  declare text="Service start failed, retrying (attempt ${1})..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::start::command_failed() {
  declare text="Service start command failed, retrying..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::log_server::started() {
  declare text="Log server started successfully"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::log_server::failed() {
  declare text="Log server failed to start"
  quickbox::dashboard::log "${text}"
}



quickbox::lang::software::wsdashboard::service::chmod::retry() {
  declare text="Chmod attempt ${1} failed, retrying in 2 seconds..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::chmod::warning() {
  declare text="Warning: Failed to set executable permissions after ${1} attempts"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::node::install::failed() {
  declare text="Error: Node.js installation or verification failed. Please check the logs and try again."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::virtual_env_corrupted() {
  declare text="Virtual environment appears to be corrupted. Recreating..."
  quickbox::dashboard::log "${text}"
}



################################################################################
# System Command Messages
################################################################################
quickbox::lang::system::nginx::test() {
  declare text="Testing nginx configuration..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::nginx::reload() {
  declare text="Reloading nginx service..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::daemon::reload() {
  declare text="Reloading systemd daemon..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::service::enable() {
  declare text="Enabling ${software_service_name} service..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::service::start() {
  declare text="Starting ${software_service_name} service..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::service::stop() {
  declare text="Stopping ${software_service_name} service..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::service::disable() {
  declare text="Disabling ${software_service_name} service..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::file::copy() {
  declare text="Copying ${1} to ${2}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::pip::install() {
  declare text="Installing Python packages..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::npm::install() {
  declare text="Installing Node.js packages..."
  quickbox::dashboard::log "${text}"
}

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

################################################################################
# WSDashboard Health Check Messages
################################################################################
quickbox::lang::software::wsdashboard::health::usage() {
  declare text="Usage: qbwsd-health-check.sh [--verbose] [--fix]
  --verbose  Enable verbose output
  --fix      Automatically fix common issues"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::unknown_option() {
  declare text="Unknown option: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::root_warning() {
  declare text="Running as root - some checks may not work correctly"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::starting_check() {
  declare text="Starting health check for ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::checking_status() {
  declare text="Checking service status..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::service_running() {
  declare text="Service is running"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::service_not_running() {
  declare text="Service is not running"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::checking_config() {
  declare text="Checking service configuration..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::config_file_missing() {
  declare text="Service configuration file not found: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::root_user_warning() {
  declare text="Service is configured to run as root (security risk)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::no_restart_policy() {
  declare text="No restart policy configured"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::config_valid() {
  declare text="Service configuration file exists and is readable"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::checking_dependencies() {
  declare text="Checking dependencies..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::file_missing() {
  declare text="Required file missing: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::file_found() {
  declare text="Found: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::directory_missing() {
  declare text="Required directory missing: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::directory_found() {
  declare text="Found directory: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::dependencies_missing() {
  declare text="Missing dependencies: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::dependencies_available() {
  declare text="All dependencies are available"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::checking_resources() {
  declare text="Checking resource usage..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::service_not_running_skip() {
  declare text="Service not running, skipping resource check"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::pid_not_found() {
  declare text="Could not determine service PID"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::memory_usage() {
  declare text="Memory usage: ${1}MB"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::high_memory_usage() {
  declare text="High memory usage detected: ${1}MB"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::cpu_usage() {
  declare text="CPU usage: ${1}%"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::high_cpu_usage() {
  declare text="High CPU usage detected: ${1}%"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::checking_logs() {
  declare text="Checking recent logs..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::recent_errors_found() {
  declare text="Found ${1} error messages in the last hour"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::no_recent_errors() {
  declare text="No recent error messages found"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::log_file_size() {
  declare text="Log file ${1}: ${2}MB"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::large_log_file() {
  declare text="Large log file detected: ${1} (${2}MB)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::log_file_not_found() {
  declare text="Log file not found: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::checking_database() {
  declare text="Checking database connectivity..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::database_file_missing() {
  declare text="Database file not found: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::database_accessible() {
  declare text="Database is accessible and contains tables"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::active_sessions() {
  declare text="Active sessions in last hour: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::database_corrupted() {
  declare text="Database is not accessible or corrupted"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::sqlite3_not_available() {
  declare text="sqlite3 not available, skipping database checks"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::attempting_fixes() {
  declare text="Attempting to fix common issues..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::fixing_permissions() {
  declare text="Fixing Node.js virtual environment permissions..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::creating_log_directory() {
  declare text="Creating missing log directory..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::attempting_restart() {
  declare text="Attempting to restart service..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::restart_successful() {
  declare text="Service successfully restarted"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::restart_failed() {
  declare text="Failed to restart service"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::check_completed_success() {
  declare text="Health check completed successfully"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::check_completed_issues() {
  declare text="Health check completed with issues"
  quickbox::dashboard::log "${text}"
}
