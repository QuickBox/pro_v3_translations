#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Projektnavn: QuickBox Pro
# Filnavn: cli_software_dk
# Filbeskrivelse: Dansk sprogfil - Softwarehåndtering
# Filversion: 1.0.1
#
# Gemmeopgaver:
# Automatiseret_Versionering: true
#
# Byggeopgaver:
# Automatiseret_Kommentar_Fjernelse: true
#
# Deploymentopgaver:
# Automatiseret_Kryptering: false
#
# Forfatter: Jason Matthews (JMSolo)
# Forfatter Kontakt: support@quickbox.io
# Forfatter: Jamie Dobbs (Mschf)
# Forfatter Kontakt: jamie.dobbs@mschf.dev
#
# Licens: BSD-3 (Tilgængelig i LICENSE.md)
# Copyright (C) 2019-2025, QuickBox.IO
# Alle rettigheder forbeholdes.
# <END METADATA>
# shellcheck disable=2001,2034,2154,2312,2317
################################################################################

################################################################################
# Installationsoperationer
################################################################################
quickbox::lang::install::header() {
  declare text="${software_title} vil nu blive installeret
denne proces kan tage et par minutter..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::rutorrent::header() {
  rtorrent_count=$(quickbox::software::count rtorrent)
  if [[ ${rtorrent_count} -eq 0 ]]; then
    declare text="det ser ud til at rTorrent ikke er installeret

rTorrent 0.9.8 vil nu installeres, vent venligst da dette kan
tage et par minutter (afhængigt af systemets specifikationer) at installere"
  else
    declare text="${software_title} vil nu blive installeret
denne proces kan tage et par minutter..."
  fi
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::sources::header() {
  declare text="tilføjer ekstra nøgler og kilder for ${software_title}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::dependencies::header() {
  declare text="installerer ${software_title} afhængigheder..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::build::header() {
  declare text="bygger ${software_title}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::mktorrent::header() {
  declare text="bygger mktorrent..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::xmlrpc::header() {
  declare text="bygger xmlrpc-c..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::libtorrent::header() {
  declare text="bygger libtorrent..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::rtorrent::header() {
  declare text="bygger rtorrent..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::certificate::header() {
  declare text="opretter ssl certifikat for ${d}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::configure::lecert::header() {
  declare text="konfigurerer NGinx for Let's Encrypt..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::configure::header() {
  declare text="konfigurerer ${software_title}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::backup::header() {
  declare text="backer ${software_title} konfiguration op..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::start::header() {
  declare text="starter ${software_title}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::complete::header() {
  declare text="${software_title} installation fuldført"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Geninstallationsoperationer
################################################################################
quickbox::lang::reinstall::header() {
  declare text="${software_title} vil nu blive geninstalleret
denne proces kan tage et par minutter..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::reinstall::complete::header() {
  declare text="${software_title} geninstallation fuldført"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Fjernelsesoperationer
################################################################################
quickbox::lang::remove::header() {
  declare text="${software_title} vil nu blive fjernet
denne proces kan tage et par minutter..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::remove::stop::header() {
  declare text="stopper ${software_title}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::remove::dependencies::header() {
  declare text="fjerner ${software_title} afhængigheder..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::remove::files::header() {
  declare text="fjerner ${software_title} filer..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::remove::complete::header() {
  declare text="${software_title} fjernelse fuldført"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Opdateringsoperationer
################################################################################
quickbox::lang::update::header() {
  declare text="${software_title} vil nu blive opdateret
denne proces kan tage et par minutter..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::files::header() {
  declare text="opdaterer ${software_title}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::complete::header() {
  declare text="${software_title} opdatering fuldført"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::files::admin() {
  declare text="skal være logget ind som admin for at opdatere ${software_title}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::jellyfin::ffmpeg() {
  declare text="opdaterer ffmpeg for Jellyfin..."
  quickbox::dashboard::log "${text}"
}

################################################################################
# Software Adgangsinformation
################################################################################
quickbox::lang::software::access() {
  declare text="adgang til ${software_title} på:
${quickbox_web_root}${software_name}
${software_title} installeret på port: ${software_web_port}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::mu::access() {
  declare text="adgang til ${software_title} på:
${quickbox_web_root}${username}/${software_name}
${software_title} installeret på port: ${software_web_port}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::admin::access() {
  declare text="adgang til ${software_title} på:
${quickbox_web_root}${admin_name}/${software_name}
${software_title} installeret på port: ${software_web_port}"
  quickbox::dashboard::log "${text}"
}

################################################################################
# WSDashboard Specifikke Beskeder
################################################################################
quickbox::lang::software::wsdashboard::neither_installed() {
  declare text="Hverken Emby eller Jellyfin er installeret. Process oversprunget."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::api_error() {
  declare text="fejl: kunne ikke få zip_url fra central.quickbox.io API."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::download_error() {
  declare text="fejl: kunne ikke downloade WSD plugin arkiv."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::unzip_error() {
  declare text="fejl: kunne ikke udpakke WSD plugin arkiv."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::missing_directory() {
  declare text="fejl: manglende påkrævet mappe ${req_dir} i plugin arkiv."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::move_backend_error() {
  declare text="Fejlede at flytte backend mappe! Afbryder opdatering."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::move_public_error() {
  declare text="Fejlede at flytte public mappe! Afbryder opdatering."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::move_version_error() {
  declare text="Fejlede at flytte version.txt! Afbryder opdatering."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::complete() {
  declare text="WSD plugin hentning og udpakning fuldført."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::up_to_date() {
  declare text="WSD plugin er opdateret; hentning ikke påkrævet."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::start::success() {
  declare text="Tjeneste startet med succes. Kører sundhedstjek..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::health::passed() {
  declare text="Sundhedstjek bestået. Tjenesten kører optimalt."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::health::warnings() {
  declare text="Sundhedstjek fuldført med advarsler. Gennemgå logs hvis nødvendigt."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::start::failed() {
  declare text="Tjenesten kunne ikke starte. Tjekker status..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::fix::attempting() {
  declare text="Forsøger at rette almindelige problemer..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::update::success() {
  declare text="Tjeneste opdateret med succes. Kører sundhedstjek..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::update::failed() {
  declare text="Tjenesten kunne ikke starte efter opdatering. Tjekker status..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::maintenance::header() {
  declare text="Udfører WSD tjeneste vedligeholdelse og overvågning..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::maintenance::service_not_found() {
  declare text="Tjeneste ikke fundet. Installer venligst WSD først."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::maintenance::completed_success() {
  declare text="Tjeneste vedligeholdelse fuldført med succes."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::maintenance::completed_warnings() {
  declare text="Tjeneste vedligeholdelse fuldført med advarsler."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::maintenance::complete() {
  declare text="Vedligeholdelse fuldført. Brug 'qbwsd-health-check.sh --verbose' for detaljerede diagnoser."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::maintenance::title() {
  declare text="WSD Tjeneste Vedligeholdelse"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::stop::starting() {
  declare text="Stopper ${software_service_name} tjeneste..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::stop::force() {
  declare text="Tjeneste stadig aktiv, tvungen stop..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::stop::cleanup() {
  declare text="Rydder op i resterende Node.js processer..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::stop::warning() {
  declare text="Advarsel: Tjeneste kan stadig køre, fortsætter med forsigtighed..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::stop::success() {
  declare text="Tjeneste stoppet med succes"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::start::starting() {
  declare text="Starter ${software_service_name} tjeneste..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::start::success_attempt() {
  declare text="Tjeneste startet med succes på forsøg ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::start::retry() {
  declare text="Tjeneste start forsøg ${1} fejlede, prøver igen om 3 sekunder..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::start::command_failed() {
  declare text="Tjeneste start kommando fejlede, prøver igen om 3 sekunder..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::chmod::retry() {
  declare text="Chmod forsøg ${1} fejlede, prøver igen om 2 sekunder..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::chmod::warning() {
  declare text="Advarsel: Kunne ikke sætte kørselsrettigheder efter ${1} forsøg"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::node::install::failed() {
  declare text="Fejl: Node.js installation eller verifikation mislykkedes. Kontroller venligst logfilerne og prøv igen."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::virtual_env_corrupted() {
  declare text="Virtuelt miljø ser ud til at være beskadiget. Genopretter..."
  quickbox::dashboard::log "${text}"
}

# Additional WSDashboard translation keys for env.conf and virtual environment operations
quickbox::lang::software::wsdashboard::env::current_port_empty() {
  declare text="current_port er tom eller 0. Kan ikke opdatere env.conf."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::env::streaming_app_empty() {
  declare text="streaming_application er tom. Kan ikke opdatere env.conf."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::env::daemon_port_empty() {
  declare text="software_daemon_port er tom eller 0. Kan ikke opdatere env.conf."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::env::boilerplate_remaining() {
  declare text="Nogle skabelonværdier forbliver i env.conf efter opdatering"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::env::update_success() {
  declare text="env.conf opdateret: APPLICATION_NAME=${1}, APPLICATION_PORT=${2}, LOG_SERVER_PORT=${3}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::env::backup_created() {
  declare text="Backup oprettet: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::env::boilerplate_detected() {
  declare text="Skabelonværdier opdaget efter opdatering - manuel gennemgang kan være nødvendig"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::virtual_env::nodeenv_failed() {
  declare text="nodeenv kunne ikke installeres i Python virtuelle miljø på ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::virtual_env::nodejs_failed() {
  declare text="Node.js virtuelle miljø oprettelse mislykkedes. node eller npm ikke fundet i ${1}"
  quickbox::dashboard::log "${text}"
}

################################################################################
# System Kommando Beskeder
################################################################################
quickbox::lang::system::health::check::running() {
  declare text="Kører omfattende sundhedstjek..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::service::status::current() {
  declare text="Nuværende tjeneste status:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::service::logs::recent() {
  declare text="Seneste tjeneste logs:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::nginx::test() {
  declare text="Tester nginx konfiguration..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::nginx::reload() {
  declare text="Genindlæser nginx tjeneste..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::daemon::reload() {
  declare text="Genindlæser systemd daemon..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::service::enable() {
  declare text="Aktiverer ${software_service_name} tjeneste..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::service::start() {
  declare text="Starter ${software_service_name} tjeneste..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::service::stop() {
  declare text="Stopper ${software_service_name} tjeneste..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::service::disable() {
  declare text="Deaktiverer ${software_service_name} tjeneste..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::file::copy() {
  declare text="Kopierer ${1} til ${2}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::pip::install() {
  declare text="Installerer Python pakker..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::npm::install() {
  declare text="Installerer Node.js pakker..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::enhanced::files::removed() {
  declare text="Forbedrede tjeneste filer fjernet med succes"
  quickbox::dashboard::log "${text}"
}

################################################################################
# WSDashboard Sundhedstjek Beskeder
################################################################################
quickbox::lang::software::wsdashboard::health::usage() {
  declare text="Brug: qbwsd-health-check.sh [--verbose] [--fix]
  --verbose  Aktiver detaljeret output
  --fix      Ret automatisk almindelige problemer"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::unknown_option() {
  declare text="Ukendt mulighed: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::root_warning() {
  declare text="Kører som root - nogle tjek virker måske ikke korrekt"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::starting_check() {
  declare text="Starter sundhedstjek for ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::checking_status() {
  declare text="Tjekker tjeneste status..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::service_running() {
  declare text="Tjenesten kører"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::service_not_running() {
  declare text="Tjenesten kører ikke"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::checking_config() {
  declare text="Tjekker tjeneste konfiguration..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::config_file_missing() {
  declare text="Tjeneste konfigurationsfil ikke fundet: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::root_user_warning() {
  declare text="Tjenesten er konfigureret til at køre som root (sikkerhedsrisiko)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::no_restart_policy() {
  declare text="Ingen genstart politik konfigureret"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::config_valid() {
  declare text="Tjeneste konfigurationsfil eksisterer og er læsbar"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::checking_dependencies() {
  declare text="Tjekker afhængigheder..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::file_missing() {
  declare text="Påkrævet fil mangler: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::file_found() {
  declare text="Fundet: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::directory_missing() {
  declare text="Påkrævet mappe mangler: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::directory_found() {
  declare text="Mappe fundet: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::dependencies_missing() {
  declare text="Manglende afhængigheder: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::dependencies_available() {
  declare text="Alle afhængigheder er tilgængelige"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::checking_resources() {
  declare text="Tjekker ressourceforbrug..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::service_not_running_skip() {
  declare text="Tjeneste kører ikke, springer ressource tjek over"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::pid_not_found() {
  declare text="Kunne ikke bestemme tjeneste PID"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::memory_usage() {
  declare text="Hukommelsesforbrug: ${1}MB"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::high_memory_usage() {
  declare text="Højt hukommelsesforbrug opdaget: ${1}MB"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::cpu_usage() {
  declare text="CPU forbrug: ${1}%"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::high_cpu_usage() {
  declare text="Højt CPU forbrug opdaget: ${1}%"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::checking_logs() {
  declare text="Tjekker seneste logs..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::recent_errors_found() {
  declare text="Fandt ${1} fejlmeddelelser i den sidste time"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::no_recent_errors() {
  declare text="Ingen seneste fejlmeddelelser fundet"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::log_file_size() {
  declare text="Log fil ${1}: ${2}MB"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::large_log_file() {
  declare text="Stor log fil opdaget: ${1} (${2}MB)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::log_file_not_found() {
  declare text="Log fil ikke fundet: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::checking_database() {
  declare text="Tjekker database forbindelse..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::database_file_missing() {
  declare text="Database fil ikke fundet: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::database_accessible() {
  declare text="Databasen er tilgængelig og indeholder tabeller"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::active_sessions() {
  declare text="Aktive sessioner i sidste time: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::database_corrupted() {
  declare text="Databasen er ikke tilgængelig eller beskadiget"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::sqlite3_not_available() {
  declare text="sqlite3 ikke tilgængelig, springer database tjek over"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::attempting_fixes() {
  declare text="Forsøger at rette almindelige problemer..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::fixing_permissions() {
  declare text="Retter Node.js virtuel miljø tilladelser..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::creating_log_directory() {
  declare text="Opretter manglende log mappe..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::attempting_restart() {
  declare text="Forsøger at genstarte tjeneste..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::restart_successful() {
  declare text="Tjeneste genstartet med succes"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::restart_failed() {
  declare text="Kunne ikke genstarte tjeneste"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::check_completed_success() {
  declare text="Sundhedstjek fuldført med succes"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::check_completed_issues() {
  declare text="Sundhedstjek fuldført med problemer"
  quickbox::dashboard::log "${text}"
} 