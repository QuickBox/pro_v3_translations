#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Projektnavn: QuickBox Pro
# Filnavn: cli_dns_dk
# Filbeskrivelse: Dansk sprogfil - DNS Legitimationshåndtering
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
# DNS Legitimations Statusmeddelelser
################################################################################
quickbox::lang::dns::credentials::status::header() {
	declare text="=== DNS Legitimations Status ==="
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::no_credentials() {
	declare text="Ingen DNS legitimationsoplysninger fundet - account.conf eksisterer ikke"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::setup_help() {
	declare text="Brug 'qb dns-setup <udbyder>' til at opsætte legitimationsoplysninger for en specifik udbyder"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::configured_providers() {
	declare text="Konfigurerede DNS udbydere:"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::total_credentials() {
	declare text="Totale legitimationsoplysninger fundet: ${total_credentials}"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::check_help() {
	declare text="For at kontrollere specifikke udbyder legitimationsoplysninger:"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::check_command() {
	declare text="  qb dns-credentials check <udbyder>"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::setup_help_header() {
	declare text="For at opsætte yderligere udbydere:"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::setup_command() {
	declare text="  qb dns-setup <udbyder>"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::no_providers() {
	declare text="Ingen DNS legitimationsoplysninger fundet i account.conf"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::setup_instructions() {
	declare text="For at opsætte DNS legitimationsoplysninger:"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::available_providers() {
	declare text="Tilgængelige udbydere:"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::provider_list() {
	declare text="  cloudflare, route53, digitalocean, namecheap, godaddy, linode, ovh, vultr, gandi, dnsimple, hurricane, azure, gcp, ionos"
	quickbox::dashboard::log "${text}"
}

################################################################################
# DNS Legitimations Fejlmeddelelser
################################################################################
quickbox::lang::dns::credentials::error::no_provider() {
	declare text="FEJL: Ingen DNS udbyder angivet"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::error::unknown_command() {
	declare text="FEJL: Ukendt dns-credentials kommando: ${task}"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::error::invalid_provider() {
	declare text="FEJL: Ugyldig DNS udbyder: ${provider}"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::error::temp_file_not_found() {
	declare text="FEJL: Midlertidig legitimationsfil ikke fundet eller ikke læsbar: ${temp_file}"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::error::no_credentials_in_file() {
	declare text="FEJL: Ingen legitimationsoplysninger fundet i midlertidig fil"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::error::write_failed() {
	declare text="FEJL: Kunne ikke skrive legitimationsoplysninger til account.conf"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::error::account_conf_not_found() {
	declare text="FEJL: Konto konfigurationsfil ikke fundet: ${account_conf}"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::error::no_credentials_for_provider() {
	declare text="FEJL: Ingen legitimationsoplysninger fundet for udbyder: ${provider}"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::error::setup_invalid_provider() {
	declare text="FEJL: Ugyldig DNS udbyder: ${provider}"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::error::setup_show_available() {
	declare text="Kør 'qb dns-setup' for at se tilgængelige udbydere."
	quickbox::dashboard::log "${text}"
}

################################################################################
# DNS Legitimations Succesmeddelelser
################################################################################
quickbox::lang::dns::credentials::success::written() {
	declare text="SUCCES: DNS legitimationsoplysninger for ${provider} skrevet til account.conf"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::success::test_valid() {
	declare text="SUCCES: DNS udbyder ${provider} konfiguration fundet og ser gyldig ud"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::success::test_note() {
	declare text="Bemærk: Dette validerer kun at legitimationsoplysninger eksisterer. Fuld DNS validering kræver et testdomæne."
	quickbox::dashboard::log "${text}"
}

################################################################################
# DNS Legitimations Brugsmeddelelser
################################################################################
quickbox::lang::dns::credentials::usage::check() {
	declare text="Brug: qb dns-credentials check <udbyder>"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::usage::general() {
	declare text="Brug: qb dns-credentials <kommando> [udbyder]"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::usage::available_commands() {
	declare text="Tilgængelige kommandoer: check, status"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::usage::setup() {
	declare text="Brug: qb dns-setup <udbyder>"
	quickbox::dashboard::log "${text}"
}

################################################################################
# DNS Legitimations Opsætningsmeddelelser
################################################################################
quickbox::lang::dns::credentials::setup::header() {
	declare text="=== DNS Legitimations Opsætning ==="
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::available_providers() {
	declare text="Tilgængelige DNS udbydere:"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::provider_cloudflare() {
	declare text="  cloudflare (cf)     - Cloudflare DNS"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::provider_route53() {
	declare text="  route53             - AWS Route53"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::provider_digitalocean() {
	declare text="  digitalocean (do)   - DigitalOcean DNS"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::provider_godaddy() {
	declare text="  godaddy             - GoDaddy DNS"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::provider_namecheap() {
	declare text="  namecheap           - Namecheap DNS"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::provider_linode() {
	declare text="  linode              - Linode DNS"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::provider_ovh() {
	declare text="  ovh                 - OVH DNS"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::provider_vultr() {
	declare text="  vultr               - Vultr DNS"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::provider_gandi() {
	declare text="  gandi               - Gandi LiveDNS"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::provider_dnsimple() {
	declare text="  dnsimple            - DNSimple"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::provider_hurricane() {
	declare text="  hurricane (he)      - Hurricane Electric"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::provider_azure() {
	declare text="  azure               - Azure DNS"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::provider_gcp() {
	declare text="  gcp                 - Google Cloud DNS"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::provider_ionos() {
	declare text="  ionos               - IONOS DNS"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::example() {
	declare text="Eksempel: qb dns-setup cloudflare"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::fallback_header() {
	declare text="=== DNS Legitimations Opsætning for ${provider} ==="
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::fallback_referral() {
	declare text="Se venligst acme.sh dokumentationen for ${provider} opsætning:"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::fallback_url() {
	declare text="https://github.com/acmesh-official/acme.sh/wiki/dnsapi#dns_${provider}"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::fallback_test() {
	declare text="Efter opsætning af legitimationsoplysninger kan du teste dem med:"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::fallback_test_command() {
	declare text="qb dns-test ${provider}"
	quickbox::dashboard::log "${text}"
}

################################################################################
# DNS Legitimations Backup Meddelelser
################################################################################
quickbox::lang::dns::credentials::backup::restored() {
	declare text="Backup konfiguration gendannet"
	quickbox::dashboard::log "${text}"
}
