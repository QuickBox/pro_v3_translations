#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Project Name: QuickBox Pro
# File Name: cli_dns_en
# File Description: English language file - DNS Credentials Management
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
	declare text="=== DNS Credentials Status ==="
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::no_credentials() {
	declare text="No DNS credentials found - account.conf does not exist"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::setup_help() {
	declare text="Use 'qb dns-setup <provider>' to set up credentials for a specific provider"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::configured_providers() {
	declare text="Configured DNS providers:"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::total_credentials() {
	declare text="Total credentials found: ${total_credentials}"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::check_help() {
	declare text="To check specific provider credentials:"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::check_command() {
	declare text="  qb dns-credentials check <provider>"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::setup_help_header() {
	declare text="To set up additional providers:"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::setup_command() {
	declare text="  qb dns-setup <provider>"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::no_providers() {
	declare text="No DNS credentials found in account.conf"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::setup_instructions() {
	declare text="To set up DNS credentials:"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::available_providers() {
	declare text="Available providers:"
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
	declare text="ERROR: No DNS provider specified"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::error::unknown_command() {
	declare text="ERROR: Unknown dns-credentials command: ${task}"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::error::invalid_provider() {
	declare text="ERROR: Invalid DNS provider: ${provider}"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::error::temp_file_not_found() {
	declare text="ERROR: Temporary credentials file not found or not readable: ${temp_file}"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::error::no_credentials_in_file() {
	declare text="ERROR: No credentials found in temp file"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::error::write_failed() {
	declare text="ERROR: Failed to write credentials to account.conf"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::error::account_conf_not_found() {
	declare text="ERROR: Account configuration file not found: ${account_conf}"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::error::no_credentials_for_provider() {
	declare text="ERROR: No credentials found for provider: ${provider}"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::error::setup_invalid_provider() {
	declare text="ERROR: Invalid DNS provider: ${provider}"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::error::setup_show_available() {
	declare text="Run 'qb dns-setup' to see available providers."
	quickbox::dashboard::log "${text}"
}

################################################################################
# DNS Credentials Success Messages
################################################################################
quickbox::lang::dns::credentials::success::written() {
	declare text="SUCCESS: DNS credentials for ${provider} written to account.conf"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::success::test_valid() {
	declare text="SUCCESS: DNS provider ${provider} configuration found and appears valid"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::success::test_note() {
	declare text="Note: This only validates that credentials exist. Full DNS validation requires a test domain."
	quickbox::dashboard::log "${text}"
}

################################################################################
# DNS Credentials Usage Messages
################################################################################
quickbox::lang::dns::credentials::usage::check() {
	declare text="Usage: qb dns-credentials check <provider>"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::usage::general() {
	declare text="Usage: qb dns-credentials <command> [provider]"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::usage::available_commands() {
	declare text="Available commands: check, status"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::usage::setup() {
	declare text="Usage: qb dns-setup <provider>"
	quickbox::dashboard::log "${text}"
}

################################################################################
# DNS Credentials Setup Messages
################################################################################
quickbox::lang::dns::credentials::setup::header() {
	declare text="=== DNS Credentials Setup ==="
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::available_providers() {
	declare text="Available DNS providers:"
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
	declare text="Example: qb dns-setup cloudflare"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::fallback_header() {
	declare text="=== DNS Credentials Setup for ${provider} ==="
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::fallback_referral() {
	declare text="Please refer to the acme.sh documentation for ${provider} setup:"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::fallback_url() {
	declare text="https://github.com/acmesh-official/acme.sh/wiki/dnsapi#dns_${provider}"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::fallback_test() {
	declare text="After setting up credentials, you can test them with:"
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
	declare text="Restored backup configuration"
	quickbox::dashboard::log "${text}"
}
