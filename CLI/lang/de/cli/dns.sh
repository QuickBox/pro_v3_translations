#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Project Name: QuickBox Pro
# File Name: cli_dns_de
# File Description: German language file - DNS Credentials Management
# File Version: 1.0.3
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
# DNS Credentials Status Messages
################################################################################
quickbox::lang::dns::credentials::status::header() {
  declare text="=== DNS-Anmeldedaten Status ==="
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::no_credentials() {
  declare text="Keine DNS-Anmeldedaten gefunden - account.conf existiert nicht"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::setup_help() {
  declare text="Verwenden Sie 'qb dns-setup <provider>', um Anmeldedaten für einen bestimmten Anbieter einzurichten"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::configured_providers() {
  declare text="Konfigurierte DNS-Anbieter:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::total_credentials() {
  declare text="Gesamte Anmeldedaten gefunden: ${total_credentials}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::check_help() {
  declare text="Um spezifische Anbieter-Anmeldedaten zu prüfen:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::check_command() {
  declare text="  qb dns-credentials check <provider>"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::setup_help_header() {
  declare text="Um zusätzliche Anbieter einzurichten:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::setup_command() {
  declare text="  qb dns-setup <provider>"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::no_providers() {
  declare text="Keine DNS-Anmeldedaten in account.conf gefunden"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::setup_instructions() {
  declare text="Um DNS-Anmeldedaten einzurichten:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::available_providers() {
  declare text="Verfügbare Anbieter:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::provider_list() {
  declare text="  cloudflare, route53, digitalocean, namecheap, godaddy, linode, ovh, vultr, gandi, dnsimple, hurricane, azure, gcp, ionos"
  quickbox::dashboard::log "${text}"
}

################################################################################
# DNS Credentials Error Messages
################################################################################
quickbox::lang::dns::credentials::error::no_provider() {
  declare text="FEHLER: Kein DNS-Anbieter angegeben"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::error::unknown_command() {
  declare text="FEHLER: Unbekannter dns-credentials Befehl: ${task}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::error::invalid_provider() {
  declare text="FEHLER: Ungültiger DNS-Anbieter: ${provider}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::error::temp_file_not_found() {
  declare text="FEHLER: Temporäre Anmeldedaten-Datei nicht gefunden oder nicht lesbar: ${temp_file}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::error::no_credentials_in_file() {
  declare text="FEHLER: Keine Anmeldedaten in temporärer Datei gefunden"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::error::write_failed() {
  declare text="FEHLER: Anmeldedaten konnten nicht in account.conf geschrieben werden"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::error::account_conf_not_found() {
  declare text="FEHLER: Account-Konfigurationsdatei nicht gefunden: ${account_conf}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::error::no_credentials_for_provider() {
  declare text="FEHLER: Keine Anmeldedaten für Anbieter gefunden: ${provider}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::error::setup_invalid_provider() {
  declare text="FEHLER: Ungültiger DNS-Anbieter: ${provider}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::error::setup_show_available() {
  declare text="Führen Sie 'qb dns-setup' aus, um verfügbare Anbieter zu sehen."
  quickbox::dashboard::log "${text}"
}

################################################################################
# DNS Credentials Success Messages
################################################################################
quickbox::lang::dns::credentials::success::written() {
  declare text="ERFOLG: DNS-Anmeldedaten für ${provider} in account.conf geschrieben"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::success::test_valid() {
  declare text="ERFOLG: DNS-Anbieter ${provider} Konfiguration gefunden und scheint gültig zu sein"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::success::test_note() {
  declare text="Hinweis: Dies validiert nur, dass Anmeldedaten existieren. Vollständige DNS-Validierung erfordert eine Test-Domain."
  quickbox::dashboard::log "${text}"
}

################################################################################
# DNS Credentials Usage Messages
################################################################################
quickbox::lang::dns::credentials::usage::check() {
  declare text="Verwendung: qb dns-credentials check <provider>"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::usage::general() {
  declare text="Verwendung: qb dns-credentials <command> [provider]"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::usage::available_commands() {
  declare text="Verfügbare Befehle: check, status"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::usage::setup() {
  declare text="Verwendung: qb dns-setup <provider>"
  quickbox::dashboard::log "${text}"
}

################################################################################
# DNS Credentials Setup Messages
################################################################################
quickbox::lang::dns::credentials::setup::header() {
  declare text="=== DNS-Anmeldedaten Einrichtung ==="
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::available_providers() {
  declare text="Verfügbare DNS-Anbieter:"
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
  declare text="Beispiel: qb dns-setup cloudflare"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::fallback_header() {
  declare text="=== DNS-Anmeldedaten Einrichtung für ${provider} ==="
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::fallback_referral() {
  declare text="Bitte konsultieren Sie die acme.sh Dokumentation für ${provider} Einrichtung:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::fallback_url() {
  declare text="https://github.com/acmesh-official/acme.sh/wiki/dnsapi#dns_${provider}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::fallback_test() {
  declare text="Nach der Einrichtung der Anmeldedaten können Sie sie testen mit:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::fallback_test_command() {
  declare text="qb dns-test ${provider}"
  quickbox::dashboard::log "${text}"
}

################################################################################
# DNS Credentials Backup Messages
################################################################################
quickbox::lang::dns::credentials::backup::restored() {
  declare text="Sicherungskonfiguration wiederhergestellt"
  quickbox::dashboard::log "${text}"
}