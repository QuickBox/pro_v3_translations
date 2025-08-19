#!/usr/bin/env bash
################################################################################
# Software Konfigurationsmeddelelser Modul
# Indeholder alle software konfiguration, opsætning og særlig håndteringsmeddelelser
################################################################################

quickbox::lang::software::ombi_mysql_fallback() {
  declare text="[!] MySQL kører ikke eller er ikke tilgængelig, springer DB/bruger drop over, udløser fallback..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_user_skip() {
  declare text="[i] Springer MySQL bruger drop over: '${db_user}' er defineret i /root/.my.cnf"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_user_remove() {
  declare text="[!] Fjerner MySQL bruger: '${db_user}'"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_user_retain() {
  declare text="[i] Beholder MySQL da andre DB'er eller brugere stadig kan eksistere."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_cleanup_complete() {
  declare text="[✓] MySQL oprydning for ${software_name} fuldført."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_fallback_remove() {
  declare text="[⚙] Udfører fallback MySQL fjernelse (ikke-interaktiv)..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_remove() {
  declare text="[*] Fjerner MySQL pakker..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_no_packages() {
  declare text="[i] Ingen MySQL pakker fundet at rydde op."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_autoremove() {
  declare text="[*] Autoremover og rydder restfiler..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_check() {
  declare text="[*] Kontrollerer MySQL installation..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_install() {
  declare text="[*] Installerer MySQL APT repository konfiguration..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_download_fail() {
  declare text="[✗] Kunne ikke downloade MySQL APT konfiguration"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_install_fail() {
  declare text="[✗] Kunne ikke installere mysql-apt-config pakke"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_install_packages() {
  declare text="[*] Installerer MySQL pakker..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_install_retry() {
  declare text="[✗] MySQL installation fejlede — prøver igen efter oprydning"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_install_failed() {
  declare text="[✗] MySQL installation fejlede igen"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_config() {
  declare text="[*] Opretter MySQL konfigurationsfil..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_start() {
  declare text="[*] Starter og aktiverer MySQL service..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_enable_fail() {
  declare text="[✗] Kunne ikke aktivere MySQL service"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_start_fail() {
  declare text="[✗] Kunne ikke starte MySQL service"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_config_fail() {
  declare text="[✗] MySQL konfiguration /etc/mysql/my.cnf mangler. Afbryder opsætning."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_wait() {
  declare text="[*] Venter på MySQL socket at være klar..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_socket_fail() {
  declare text="[✗] MySQL startede ikke korrekt — socket mangler"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_setup() {
  declare text="[*] Opsætter MySQL bruger og database for ${db_user}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_configured() {
  declare text="[✓] MySQL konfigureret for bruger '${db_user}' med DB '${db_name}'"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_migration() {
  declare text="[⚙] Starter Ombi migration til MySQL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_temp_fail() {
  declare text="[✗] Kunne ikke oprette temp mappe"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_python_fail() {
  declare text="[✗] Python 3 og pip3 er påkrævet for migration"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_pip_fail() {
  declare text="[✗] Kunne ikke installere påkrævede Python pakker"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_chdir_fail() {
  declare text="[✗] Kunne ikke skifte mappe til ${TMP_DIR}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_clone() {
  declare text="[*] Kloner ombi_sqlite_mysql migration værktøj..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_clone_fail() {
  declare text="[✗] Kunne ikke klone ombi_sqlite_mysql repository"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_backup() {
  declare text="[!] Backup af ${db} oprettet på ${config_dir}/${db}.bak"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_dbjson_fail() {
  declare text="[✗] Kunne ikke generere database.json"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_schema_fail() {
  declare text="[✗] Kunne ikke oprette DB schema via Ombi"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_migration_fail() {
  declare text="[✗] Kunne ikke oprette migration.json"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_data_fail() {
  declare text="[✗] Data migration fejlede"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_chdir_home_fail() {
  declare text="[✗] Kunne ikke skifte mappe tilbage til ${HOME}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_remove_sqlite() {
  declare text="[!] Fjernede gammel SQLite database: ${config_dir}/${db}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_cleanup() {
  declare text="[*] Rydder midlertidige filer..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_migration_complete() {
  declare text="[✓] Ombi migration til MySQL fuldført succesfuldt!"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plex_directory_warning() {
  declare text="den brugerdefinerede data mappe: '${software_install_directory}' eksisterer allerede.
bruger '${software_install_directory}/plex' i stedet."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexclaim() {
  declare text="claimer plex server for ${username}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_credentials_header() {
  declare text="Indtast venligst dine Plex legitimationsoplysninger (Brugernavn/Adgangskode/2FA):"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_credentials_subheader() {
  declare text="Disse legitimationsoplysninger vil ikke blive gemt eller delt uden for denne instans."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_credentials_email() {
  declare text="Email: "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_credentials_password() {
  declare text="Adgangskode: "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_credentials_otp() {
  declare text="2FA: [Lad stå tomt hvis ingen 2FA er sat] "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_credentials_fail() {
  declare text="Brugernavn og Adgangskode er påkrævet for at downloade PlexPass opdatering."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_credentials_incorrect() {
  declare text="Brugernavn og/eller adgangskode forkert"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_credentials_loginfail() {
  declare text="Kunne ikke logge ind, debug information:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_credentials_retrievefail() {
  declare text="Kunne ikke hente download URL."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_credentials_parsefail() {
  declare text="Kunne ikke parse HTML svar."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_downloading() {
  declare text="Downloader Plex opdatering..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_downloading_fail() {
  declare text="Download fejlede med fejlkode ${code}, ${error}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_installing() {
  declare text="Installerer ny Plex version..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_updated() {
  declare text="Plex er blevet opdateret succesfuldt."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_current() {
  declare text="Plex er allerede opdateret."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone_configure() {
  declare text="
Besøg venligst https://console.developers.google.com og opret et projekt.
Du skal notere din client_id og client_secret.
Du kan også besøge den nedenstående Knowledge Base artikel for en gennemgang:
https://quickbox.io/knowledge-base/creating-a-google-api-client-id-client-secret-code/

Når du har både din client_id og client_secret tryk på en vilkårlig tast for at fortsætte.

"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone_entries() {
  declare text="Indtast dine forbindelsesdetaljer nedenfor."
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
  declare text="Krypteringsadgangskode: "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone_saltpass() {
  declare text="Salt Adgangskode: "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone_salterror() {
  declare text="Salt adgangskode kan ikke være den samme som Krypteringsadgangskoden."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone_confirm() {
  declare text="Bekræft venligst følgende detaljer før du fortsætter..."
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
  declare text="Krypteringsadgangskode: ${encvar}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone_saltpass_confirm() {
  declare text="Salt Adgangskode: ${saltvar}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone_continue() {
  declare text="Hvis du er tilfreds med ovenstående indstillinger, tryk Y for at fortsætte..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::znc_configure() {
  declare text="ZNC konfiguration vil nu køre. Svar venligst på følgende prompts:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::sonarrv4::update::error() {
  declare text
  text="$(tput setaf 7)Sonarr v4 $(tput setaf 1)kan ikke$(tput setaf 7) opdateres fra v3.
Fjern venligst v3 og installer v4.$(tput sgr0)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::build::python311() {
  declare text="installerer python 3.11, vent venligst da dette kan tage et øjeblik..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::build::sabnzbd::par2cmdline() {
  declare text="installerer par2cmdline, vent venligst da dette kan tage et øjeblik..."
  quickbox::dashboard::log "${text}"
} 