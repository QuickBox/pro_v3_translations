#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Project Name: QuickBox Pro
# File Name: cli_database_en
# File Description: English language file - Database Management
# File Version: 1.0.2
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
# Database Installation - MySQL
################################################################################
quickbox::lang::db::install::prompt() {
  declare text="MySQL is not installed. Would you like to install? [y/N]:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::apt() {
  declare text="Updating APT..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql_apt() {
  declare text="Downloading MySQL APT Config..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql_apt::fail() {
  declare text="Failed to download MySQL APT Config."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql_apt::install() {
  declare text="Installing MySQL APT Config..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql_apt::install::fail() {
  declare text="Failed to install MySQL APT Config."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql() {
  declare text="Installing MySQL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::fail() {
  declare text="Failed to install MySQL."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::start::fail() {
  declare text="Failed to start MySQL."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::enable::fail() {
  declare text="Failed to enable MySQL."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::success() {
  declare text="MySQL has been installed."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::installed() {
  declare text="MySQL is already installed, continuing with configuration."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::config() {
  declare text="Updating MySQL configuration..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::config::backup() {
  declare text="Current mysqld.cnf file has been backed up to mysqld.cnf.backup."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::config::write() {
  declare text="[*] Setting MySQL configuration..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::config::write::fail() {
  declare text="[✗] Failed to write MySQL configuration."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::privileges() {
  declare text="Setting MySQL privileges..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::privileges::fail() {
  declare text="Failed to write MySQL privileges."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::client() {
  declare text="Setting MySQL client configuration..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::client::fail() {
  declare text="Failed to write MySQL client configuration."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::reload() {
  declare text="Reloading systemctl daemon..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::reload::fail() {
  declare text="Failed to reload systemctl daemon."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::enable() {
  declare text="Enabling MySQL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::restart() {
  declare text="Restarting MySQL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::restart::fail() {
  declare text="Failed to restart MySQL."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::user() {
  declare text="Creating MySQL user ${mysql_user}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::user::fail() {
  declare text="Failed to create MySQL user."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::grant() {
  declare text="Granting privileges to MySQL user ${mysql_user}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::grant::fail() {
  declare text="Failed to grant privileges to MySQL user."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::flush() {
  declare text="Flushing privileges..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::flush::fail() {
  declare text="Failed to flush privileges."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::convert() {
  declare text="Converting database to MySQL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::convert::success() {
  declare text="Database has been converted to MySQL."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::remove() {
  declare text="Would you like to remove the SQLite database? [y/N]:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::remove::fail() {
  declare text="Failed to disable SQLite in PHP."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::complete() {
  declare text="MySQL has been configured."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::details() {
  declare text="MySQL Connection Details:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::connection::details() {
  declare text="Username: ${mysql_user}
Password: ${mysql_password}
Port: ${mysql_port}
Host: ${mysql_host}
Database: ${mysql_name}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::mycnf() {
  declare text="These details can be found at /root/.my.cnf"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Database Installation - SQLite
################################################################################
quickbox::lang::db::install::sqlite::backup() {
  declare text="Backing up SQLite database..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::sqlite::backup::success() {
  declare text="SQLite database has been backed up to ${sqlite_file}.${date}.backup"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::sqlite::convert() {
  declare text="Converting database to SQLite..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::sqlite::convert::success() {
  declare text="Database has been converted to SQLite."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::sqlite::remove() {
  declare text="Would you like to remove MySQL completely? [y/N]:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::sqlite::remove::mysql() {
  declare text="Would you like to remove the MySQL database? [y/N]:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::sqlite::php::fail() {
  declare text="Failed to install SQLite in PHP."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::sqlite::php::enable::fail() {
  declare text="Failed to enable SQLite in PHP."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::sqlite::complete() {
  declare text="SQLite database conversion process has completed."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::sqlite::invalid() {
  declare text="Invalid option: ${option}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::sqlite::mysql::notfound() {
  declare text="MySQL database not found."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::sqlite::notfound() {
  declare text="SQLite database not found."
  quickbox::dashboard::log "${text}"
}

################################################################################
# Database Backup
################################################################################
quickbox::lang::db::backup::sqlite::integrity() {
  declare text="Checking the integrity of the SQLite database..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::backup::sqlite::integrity::pass() {
  declare text="Database integrity check passed."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::backup::sqlite::complete() {
  declare text="Backup completed: ${full_backup_path}/qbpro.db"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::backup::sqlite::integrity::fail() {
  declare text="Database integrity check failed. No backup was created."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::backup::sqlite::integrity::repair() {
  declare text="
    [WARNING] QuickBox Database Repair!

    The QuickBox Database has failed integrity check and repair has been attempted.

    Command: REINDEX; VACUUM;

    You can find the most recent backups in:
    /opt/quickbox/backup/system/[DATE]/db/qbpro.db

    To delete this message, run the following command:
    rm -f /etc/quickbox_motd
"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::backup::mysql() {
  declare text="Backing up MySQL database..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::backup::mysql::complete() {
  declare text="MySQL backup completed: ${full_backup_path}/qbpro.sql"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::backup::mysql::fail() {
  declare text="MySQL backup failed."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::backup::unsupported() {
  declare text="Unsupported database type: ${db_type}. No backup was created."
  quickbox::dashboard::log "${text}"
}

################################################################################
# Database Maintenance
################################################################################
quickbox::lang::db::maintenance::sqlite::repair() {
  declare text="Attempting to repair the SQLite database..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::sqlite::repair::complete() {
  declare text="SQLite database repair completed."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::sqlite::repair::fail() {
  declare text="Failed to repair the SQLite database."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::sqlite::restore::complete() {
  declare text="SQLite database restore completed."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::backup::sqlite::integrity::restore() {
  declare text="
    [WARNING] QuickBox Database Repair!

    The QuickBox Database has failed integrity check and repair has been attempted.
    Previous valid backup has been restored and permissions adjusted.

    You can find the most recent backups in:
    /opt/quickbox/backup/system/[DATE]/db/qbpro.db

    To delete this message, run the following command:
    rm -f /etc/quickbox_motd
"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::sqlite() {
  declare text="Performing maintenance on SQLite database..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::sqlite::backup() {
  declare text="Backing up the database before maintenance..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::sqlite::optimize() {
  declare text="Optimizing the SQLite database (VACUUM)..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::sqlite::optimize::complete() {
  declare text="SQLite database optimization completed."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::sqlite::optimize::fail() {
  declare text="Failed to optimize the SQLite database."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::sqlite::integrity::fail() {
  declare text="Database integrity check failed. No maintenance was performed."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::mysql() {
  declare text="Performing maintenance on MySQL database..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::mysql::backup() {
  declare text="Backing up the MySQL database before maintenance..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::mysql::backup::fail() {
  declare text="MySQL backup failed. Skipping maintenance."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::mysql::optimize() {
  declare text="Optimizing the MySQL database tables..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::mysql::optimize::complete() {
  declare text="MySQL database optimization completed."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::mysql::optimize::fail() {
  declare text="Failed to optimize the MySQL database."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::mysql::integrity() {
  declare text="Checking the integrity of the MySQL database..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::mysql::integrity::pass() {
  declare text="MySQL database integrity check passed."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::mysql::integrity::fail() {
  declare text="MySQL database integrity check failed."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::unsupported() {
  declare text="Unsupported database type: ${db_type}. No maintenance was performed."
  quickbox::dashboard::log "${text}"
}

################################################################################
# Database Restore
################################################################################
quickbox::lang::db::restore::backup::error() {
  declare text="Backup directory not found: ${backup_root}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::restore::backup::empty() {
  declare text="No backups found in the backup directory."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::restore::backup::select() {
  declare text="Select a backup to restore:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::restore::backup::number() {
  declare text="Enter the number of the backup to restore: "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::restore::backup::invalid() {
  declare text="Invalid selection. Please try again."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::restore::sqlite::success() {
  declare text="SQLite database restored successfully from ${select_backup}."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::restore::sqlite::fail() {
  declare text="Failed to restore the SQLite database."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::restore::mysql::success() {
  declare text="MySQL database restored successfully from ${select_backup}."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::restore::mysql::fail() {
  declare text="Failed to restore the MySQL database."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::restore::unsupported() {
  declare text="Unsupported database type: ${db_type}. No restore was performed."
  quickbox::dashboard::log "${text}"
} 