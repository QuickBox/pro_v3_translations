#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Project Name: QuickBox Pro
# File Name: cli_wsd_dk
# File Description: Dansk sprogfil - WSD (What's Streaming Dashboard) CLI
# File Version: 1.0.52
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
# Fejlmeddelelser
################################################################################
quickbox::lang::wsd::error::missing_emby_params() {
  declare text="Påkrævede parametre mangler for Emby: -u"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::missing_jellyfin_params() {
  declare text="Påkrævede parametre mangler for Jellyfin."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::database_not_found() {
  declare text="Databasefil ikke fundet på: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::jellyfin_api_failed() {
  declare text="Kunne ikke hente data fra Jellyfin API."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::missing_manual_path() {
  declare text="Manuel sti parameter mangler."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::path_not_exist() {
  declare text="Den angivne sti eksisterer ikke: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::missing_empty_path() {
  declare text="Mappe sti mangler for at tømme."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::directory_not_exist() {
  declare text="Mappen eksisterer ikke: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::timestamp_creation_failed() {
  declare text="Kunne ikke oprette tidsstempel fil: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::empty_directory_failed() {
  declare text="Kunne ikke tømme mappen: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::missing_transcode_id() {
  declare text="Transkodnings ID mangler."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::invalid_transcode_id() {
  declare text="Ugyldigt transkodnings ID format: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::invalid_mode() {
  declare text="Ugyldig tilstand: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::delete_contents_failed() {
  declare text="Kunne ikke slette indhold af transkodnings mappe: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::delete_jellyfin_failed() {
  declare text="Kunne ikke slette transkodnings filer for Jellyfin."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::missing_verify_path() {
  declare text="Transkodnings sti mangler for verifikation."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::directory_not_empty() {
  declare text="Transkodnings mappen er ikke tom: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::remove_empty_dir_failed() {
  declare text="Kunne ikke fjerne tom mappe: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::timestamp_not_found() {
  declare text="Tidsstempel fil ikke fundet: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::newer_files_exist() {
  declare text="Nyere transkodnings filer eksisterer efter tidsstempel for: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::invalid_mode_generic() {
  declare text="Ugyldig eller manglende tilstand. Brug 'emby' eller 'jellyfin'."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::service_template_not_found() {
  declare text="Service template fil ikke fundet: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::copy_template_failed() {
  declare text="Kunne ikke kopiere service template til ${1}."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::generate_service_failed() {
  declare text="Kunne ikke generere service fil for tilstand '${1}'."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::reload_systemd_failed() {
  declare text="Kunne ikke genindlæse systemd."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::enable_service_failed() {
  declare text="Kunne ikke aktivere og starte ${1}."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::stop_service_failed() {
  declare text="Kunne ikke stoppe ${1}."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::disable_service_failed() {
  declare text="Kunne ikke deaktivere ${1}."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::remove_service_file_failed() {
  declare text="Kunne ikke fjerne fil ${1}."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::reload_after_remove_failed() {
  declare text="Kunne ikke genindlæse systemd efter fjernelse af ${1}."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::invalid_transcode_dir() {
  declare text="Ugyldig eller manglende midlertidig transkodnings mappe: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::clear_standard_failed() {
  declare text="Kunne ikke rydde standard transkodninger: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::clear_livetv_failed() {
  declare text="Kunne ikke rydde LiveTV transkodninger: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::invalid_option() {
  declare text="Ugyldig mulighed. Brug -h for hjælp."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::mode_required_c() {
  declare text="Tilstand (-m) er påkrævet med mulighed -c. Brug 'emby' eller 'jellyfin'."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::mode_required_a() {
  declare text="Tilstand (-m) er påkrævet med mulighed -a. Brug 'emby' eller 'jellyfin'."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::missing_emby_params_generic() {
  declare text="Påkrævede parametre mangler for Emby: -u"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::missing_jellyfin_params_generic() {
  declare text="Påkrævede parametre mangler for Jellyfin: -U og/eller -k"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::invalid_mode_specified() {
  declare text="Ugyldig angivet tilstand. Brug 'emby' eller 'jellyfin'."
  quickbox::dashboard::log "${text}"
}

################################################################################
# Advarselsmeddelelser
################################################################################
quickbox::lang::wsd::warning::transcode_path_not_found() {
  declare text="TranscodingTempPath ikke fundet i JSON data."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::warning::transcode_path_not_found_api() {
  declare text="TranscodingTempPath ikke fundet i API svar."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::warning::autoclear_not_enabled() {
  declare text="AutoClearEnabled er ikke true for tilstand '${1}'. Ingen handling påkrævet."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::warning::service_already_active() {
  declare text="${1} er allerede aktiv for tilstand '${2}'."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::warning::service_not_active() {
  declare text="${1} er ikke aktiv. Ingen stop nødvendig."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::warning::service_not_enabled() {
  declare text="${1} er ikke aktiveret. Ingen deaktivering nødvendig."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::warning::service_file_not_exist() {
  declare text="Service fil eksisterer ikke: ${1}. Ingen handling påkrævet."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::warning::autoclear_disabled() {
  declare text="Auto-rydning er deaktiveret i databasen. Afslutter loop."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::warning::no_matching_files_standard() {
  declare text="Ingen matchende filer fundet for standard transkodninger."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::warning::no_matching_files_livetv() {
  declare text="Ingen matchende filer fundet for LiveTV transkodninger."
  quickbox::dashboard::log "${text}"
}

################################################################################
# Informationsmeddelelser
################################################################################
quickbox::lang::wsd::info::using_default_path() {
  declare text="Benytter standardsti for TranscodingTempPath: "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::manual_path_set() {
  declare text="TranscodingTempPath sat manuelt til: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::timestamp_created() {
  declare text="Tidsstempel fil oprettet/opdateret: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::emptying_directory() {
  declare text="Tømmer mappe: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::transcode_dir_removed() {
  declare text="Transkodnings mappe allerede fjernet: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::generating_service() {
  declare text="Genererer ${1} for tilstand '${2}'."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::reloading_systemd() {
  declare text="Genindlæser systemd og aktiverer ${1}."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::stopping_service() {
  declare text="Stopper ${1}."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::disabling_service() {
  declare text="Deaktiverer ${1}."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::removing_service_file() {
  declare text="Fjerner service fil: ${1}."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::reloading_systemd_changes() {
  declare text="Genindlæser systemd for at anvende ændringer."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::running_autoclear_standard() {
  declare text="Kører auto-rydning for standard transkodninger i: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::running_autoclear_livetv() {
  declare text="Kører auto-rydning for LiveTV transkodninger i: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::files_to_delete() {
  declare text="Filer at slette: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::sleeping_minutes() {
  declare text="Sover i ${1} minutter."
  quickbox::dashboard::log "${text}"
}

################################################################################
# Succesmeddelelser
################################################################################
quickbox::lang::wsd::success::directory_emptied() {
  declare text="[SUCCES] Mappen er tømt."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::success::transcode_files_deleted() {
  declare text="Transkodnings filer slettet succesfuldt."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::success::directory_removed() {
  declare text="Mappe fjernet succesfuldt: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::success::directory_emptied_removed() {
  declare text="Mappe tømt og fjernet succesfuldt: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::success::no_files_since_timestamp() {
  declare text="Ingen forud eksisterende filer fundet siden tidsstempel for: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::success::service_enabled_started() {
  declare text="${1} aktiveret og startet succesfuldt for tilstand '${2}'."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::success::service_stopped_disabled_removed() {
  declare text="${1} stoppet, deaktiveret og fjernet succesfuldt."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::success::standard_transcodes_cleared() {
  declare text="Standard transkodninger ryddet succesfuldt."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::success::livetv_transcodes_cleared() {
  declare text="LiveTV transkodninger ryddet succesfuldt."
  quickbox::dashboard::log "${text}"
}

################################################################################
# Hjælpemeddelelser
################################################################################
quickbox::lang::wsd::help::usage() {
  declare text="Brug:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::emby_usage() {
  declare text="  Emby brug:
    $0 -u 'admin_service_bruger_navn' -m 'emby'"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::jellyfin_usage() {
  declare text="  Jellyfin brug:
    $0 -U 'api_url' -k 'api_nøgle' -m 'jellyfin'"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::manual_path() {
  declare text="  Manuel sti konfiguration:
    $0 -p 'manuel_sti'"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::empty_directory() {
  declare text="  Tøm mappe:
    $0 -e 'mappe_sti'"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::verify_directory() {
  declare text="  Verificer mappe:
    $0 -v 'mappe_sti'"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::delete_transcode() {
  declare text="  Slet transkodnings filer:
    $0 -d 'transkodnings_id'"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::check_enable() {
  declare text="  Verificer og aktiver qbwsd service hvis AutoClearEnabled er true:
    $0 -c -m 'emby|jellyfin'"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::disable_remove() {
  declare text="  Deaktiver og fjern qbwsd service hvis AutoClearEnabled er false:
    $0 -r"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::run_autoclear() {
  declare text="  Kør auto-rydning logik manuelt:
    $0 -a -m 'emby|jellyfin'"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::options() {
  declare text="Muligheder:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::option_u() {
  declare text="  -u  Service admin bruger navn (for Emby)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::option_U() {
  declare text="  -U  Jellyfin API URL"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::option_k() {
  declare text="  -k  Jellyfin API nøgle"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::option_m() {
  declare text="  -m  Service tilstand (emby eller jellyfin)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::option_p() {
  declare text="  -p  Manuel sti for TranscodingTempPath"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::option_e() {
  declare text="  -e  Tøm den angivne transkodnings mappe"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::option_v() {
  declare text="  -v  Verificer om den angivne transkodnings mappe er tom"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::option_d() {
  declare text="  -d  Slet transkodnings filer efter ID"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::option_c() {
  declare text="  -c  Verificer og aktiver qbwsd service hvis AutoClearEnabled er true"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::option_r() {
  declare text="  -r  Deaktiver og fjern qbwsd service hvis AutoClearEnabled er false"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::option_a() {
  declare text="  -a  Kør auto-rydning logik manuelt"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::option_h() {
  declare text="  -h  Vis denne hjælpemeddelelse"
  quickbox::dashboard::log "${text}"
} 

################################################################################
# Tjeneste status meddelelser (guarded)
################################################################################
if ! declare -F quickbox::lang::system::service::status::current >/dev/null 2>&1; then
quickbox::lang::system::service::status::current() {
  declare text="Nuværende tjeneste status:"
  quickbox::dashboard::log "${text}"
}
fi

################################################################################
# Logserver-tjeneste beskeder
################################################################################
quickbox::lang::software::wsdashboard::service::log_server::started() {
  declare text="Logserver-tjenesten startet med succes."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::log_server::failed() {
  declare text="Kunne ikke starte logserver-tjenesten."
  quickbox::dashboard::log "${text}"
}

if ! declare -F quickbox::lang::software::wsdashboard::health::service_running >/dev/null 2>&1; then
quickbox::lang::software::wsdashboard::health::service_running() {
  declare text="Tjenesten kører"
  quickbox::dashboard::log "${text}"
}
fi

if ! declare -F quickbox::lang::software::wsdashboard::health::service_not_running >/dev/null 2>&1; then
quickbox::lang::software::wsdashboard::health::service_not_running() {
  declare text="Tjenesten kører ikke"
  quickbox::dashboard::log "${text}"
}
fi