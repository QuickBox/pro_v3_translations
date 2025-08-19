#!/usr/bin/env bash
################################################################################
# Software Configuration Messages Module
# Contains all software configuration, setup, and special handling messages
################################################################################

quickbox::lang::software::ombi_mysql_fallback() {
  declare text="[!] MySQL not running or unavailable, skipping DB/user drop, triggering fallback..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_user_skip() {
  declare text="[i] Skipping MySQL user drop: '${db_user}' is defined in /root/.my.cnf"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_user_remove() {
  declare text="[!] Removing MySQL user: '${db_user}'"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_user_retain() {
  declare text="[i] Retaining MySQL since other DBs or users may still exist."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_cleanup_complete() {
  declare text="[✓] MySQL cleanup for ${software_name} completed."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_fallback_remove() {
  declare text="[⚙] Performing fallback MySQL removal (non-interactive)..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_remove() {
  declare text="[*] Removing MySQL packages..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_no_packages() {
  declare text="[i] No MySQL packages found to purge."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_autoremove() {
  declare text="[*] Autoremoving and cleaning residual files..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_check() {
  declare text="[*] Checking MySQL installation..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_install() {
  declare text="[*] Installing MySQL APT repository config..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_download_fail() {
  declare text="[✗] Failed to download MySQL APT config"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_install_fail() {
  declare text="[✗] Failed to install mysql-apt-config package"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_install_packages() {
  declare text="[*] Installing MySQL packages..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_install_retry() {
  declare text="[✗] MySQL install failed — retrying after cleanup"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_install_failed() {
  declare text="[✗] MySQL installation failed again"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_config() {
  declare text="[*] Creating MySQL config file..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_start() {
  declare text="[*] Starting and enabling MySQL service..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_enable_fail() {
  declare text="[✗] Failed to enable MySQL service"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_start_fail() {
  declare text="[✗] Failed to start MySQL service"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_config_fail() {
  declare text="[✗] MySQL config /etc/mysql/my.cnf is missing. Aborting setup."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_wait() {
  declare text="[*] Waiting for MySQL socket to be ready..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_socket_fail() {
  declare text="[✗] MySQL did not start properly — socket missing"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_setup() {
  declare text="[*] Setting up MySQL user and database for ${db_user}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_configured() {
  declare text="[✓] MySQL configured for user '${db_user}' with DB '${db_name}'"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_migration() {
  declare text="[⚙] Starting Ombi migration to MySQL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_temp_fail() {
  declare text="[✗] Failed to create temp directory"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_python_fail() {
  declare text="[✗] Python 3 and pip3 are required for migration"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_pip_fail() {
  declare text="[✗] Failed to install required Python packages"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_chdir_fail() {
  declare text="[✗] Failed to change directory to ${TMP_DIR}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_clone() {
  declare text="[*] Cloning ombi_sqlite_mysql migration tool..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_clone_fail() {
  declare text="[✗] Failed to clone ombi_sqlite_mysql repository"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_backup() {
  declare text="[!] Backup of ${db} created at ${config_dir}/${db}.bak"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_dbjson_fail() {
  declare text="[✗] Failed to generate database.json"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_schema_fail() {
  declare text="[✗] Failed to create DB schema via Ombi"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_migration_fail() {
  declare text="[✗] Failed to create migration.json"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_data_fail() {
  declare text="[✗] Data migration failed"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_chdir_home_fail() {
  declare text="[✗] Failed to change directory back to ${HOME}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_remove_sqlite() {
  declare text="[!] Removed old SQLite database: ${config_dir}/${db}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_cleanup() {
  declare text="[*] Cleaning up temporary files..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_migration_complete() {
  declare text="[✓] Ombi migration to MySQL completed successfully!"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plex_directory_warning() {
  declare text="the custom data directory: '${software_install_directory}' already exists.
using '${software_install_directory}/plex' instead."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexclaim() {
  declare text="claiming plex server for ${username}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_credentials_header() {
  declare text="Please enter your Plex credentials (Username/Password/2FA):"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_credentials_subheader() {
  declare text="These credentials will not be saved or shared outside of this instance."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_credentials_email() {
  declare text="Email: "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_credentials_password() {
  declare text="Password: "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_credentials_otp() {
  declare text="2FA: [Leave blank if no 2FA set] "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_credentials_fail() {
  declare text="Username and Password is needed to download PlexPass update."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_credentials_incorrect() {
  declare text="Username and/or password incorrect"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_credentials_loginfail() {
  declare text="Failed to login, debug information:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_credentials_retrievefail() {
  declare text="Unable to retrieve download URL."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_credentials_parsefail() {
  declare text="Failed to parse HTML response."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_downloading() {
  declare text="Downloading Plex update..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_downloading_fail() {
  declare text="Download failed with error code ${code}, ${error}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_installing() {
  declare text="Installing new Plex version..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_updated() {
  declare text="Plex has been successfully updated."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_current() {
  declare text="Plex is already up to date."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone_configure() {
  declare text="
Please visit https://console.developers.google.com and create a project.
You'll need to make note of your client_id and client_secret.
You can also visit the below Knowledge Base article for a walk-through:
https://quickbox.io/knowledge-base/creating-a-google-api-client-id-client-secret-code/

Once you have both your client_id and client_secret press any key to continue.

"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone_entries() {
  declare text="Enter your connection details below."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone_clientid() {
  declare text="Client ID: "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone_clientsecret() {
  declare text="Client Secret: "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone_encryptpass() {
  declare text="Encryption Password: "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone_saltpass() {
  declare text="Salt Password: "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone_salterror() {
  declare text="Salt password can not be the same as the Encryption password."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone_confirm() {
  declare text="Please confirm the following details before continuing..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone_clientid_confirm() {
  declare text="Client ID: ${clientvar}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone_clientsecret_confirm() {
  declare text="Client Secret: ${secretvar}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone_encryptpass_confirm() {
  declare text="Encryption Password: ${encvar}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone_saltpass_confirm() {
  declare text="Salt Password: ${saltvar}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone_continue() {
  declare text="If you are happy with the above settings, press Y to continue..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::znc_configure() {
  declare text="ZNC configuration will now run. Please answer the following prompts:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::sonarrv4::update::error() {
  declare text
  text="$(tput setaf 7)Sonarr v4 $(tput setaf 1)can not$(tput setaf 7) be updated from v3.
Please uninstall v3 and install v4.$(tput sgr0)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::build::python311() {
  declare text="installing python 3.11, please hold as this may take a moment..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::build::sabnzbd::par2cmdline() {
  declare text="installing par2cmdline, please hold as this may take a moment..."
  quickbox::dashboard::log "${text}"
} 