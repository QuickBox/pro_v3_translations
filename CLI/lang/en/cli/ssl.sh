#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Project Name: QuickBox Pro
# File Name: cli_ssl_en
# File Description: English language file - SSL/LetsEncrypt Operations
# File Version: 1.0.5
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
# Renew - Let's Encrypt
################################################################################
quickbox::lang::install::lecert::complete() {
	declare -a domain_array
	if [[ -n "${dash}" ]]; then
		domain_array+=("https://${domain_options[dash]}")
		application_array+=("QuickBox")
	fi
	if [[ -n "${emby}" ]]; then
		domain_array+=("https://${domain_options[emby]}")
		application_array+=("Emby")
	fi
	if [[ -n "${jellyfin}" ]]; then
		domain_array+=("https://${domain_options[jellyfin]}")
		application_array+=("Jellyfin")
	fi
	if [[ -n "${jellyseerr}" ]]; then
		domain_array+=("https://${domain_options[jellyseerr]}")
		application_array+=("Jellyseerr")
	fi
	if [[ -n "${komga}" ]]; then
		domain_array+=("https://${domain_options[komga]}")
		application_array+=("Komga")
	fi
	if [[ -n "${overseerr}" ]]; then
		domain_array+=("https://${domain_options[overseerr]}")
		application_array+=("Overseerr")
	fi
	if [[ -n "${plex}" ]]; then
		domain_array+=("https://${domain_options[plex]}")
		application_array+=("Plex")
	fi
	if [[ -n "${no_dash}" ]]; then
		domain_array+=("${domain}")
		application_array+=("the custom domain has been")
	fi
	for ((i = 0; i < ${#domain_array[@]}; i++)); do
		declare text="ssl certificate for ${application_array[i]} installed.
domain: ${domain_array[i]}"
	done
	quickbox::dashboard::log "${text}"
}

quickbox::lang::renew::certificates::header() {
	declare text="ssl certificate renewal process will now begin"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::renew::complete::header() {
	declare text="ssl certificate renewal complete"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::renew() {
	# divide domain entries with commas and set final entry to "and"
	for ((i = 0; i < ${#domain[@]}; i++)); do
		if [[ ${i} -eq 0 ]]; then
			declare text="${domain[i]}"
		elif [[ ${i} -eq $((${#domain[@]} - 1)) ]]; then
			declare text="${text} and ${domain[i]}"
		else
			declare text="${text}, ${domain[i]}"
		fi
	done
	declare text="renewing ssl certificate for ${text}..."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::renew::info() {
	created_array="${certificate_created}"
	expires_array="${certificate_expiry}"
	days_left_array="${certificate_days_left}"
	# create certificate info header for completion message
	declare text_header="
Certificate information:
"
	# create certificate info for each domain
	declare text="domain: ${d}
created: ${created_array[*]}
expires: ${expires_array[*]}
days left: ${days_left_array[*]}
"
	# show text_header only once for multiple domains
	if [[ ${d} == "${domain[0]}" ]]; then
		quickbox::dashboard::log "${text_header}
${text}"
	else
		quickbox::dashboard::log "${text}"
	fi
}

quickbox::lang::reinstall::lecert::complete::header() {
	declare text="ssl certificate reinstallation complete"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::remove::cert::complete::header() {
	declare text="ssl certificate removal complete"
	quickbox::dashboard::log "${text}"
}

################################################################################
# Lecert DNS Challenge Messages
################################################################################
quickbox::lang::lecert::dns::provider::valid() {
	declare text="✅ Using DNS provider: ${dns_provider} (plugin: ${dns_plugin})"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::provider::invalid() {
	declare text="❌ Unsupported DNS provider: ${dns_provider}"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::provider::supported() {
	declare text="Supported providers: ${!SUPPORTED_DNS_PROVIDERS[*]}"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::wildcard::dns::required() {
	declare text="❌ Wildcard domains require DNS challenge"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::domain::not::set() {
	declare text="Error: Domain is not set."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::credentials::loaded() {
	declare text="✅ Loaded DNS credentials from account.conf"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::challenge::mode() {
	declare text="Using DNS challenge with provider: ${dns_provider}"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::http::challenge::mode() {
	declare text="Using HTTP challenge"
	quickbox::dashboard::log "${text}"
}

# DNS Provider Credential Error Messages
quickbox::lang::lecert::dns::cloudflare::error() {
	declare text="DNS challenge with Cloudflare requires CF_Token or CF_Email/CF_Key environment variables"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::route53::error() {
	declare text="DNS challenge with Route53 requires AWS_ACCESS_KEY_ID and AWS_SECRET_ACCESS_KEY"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::godaddy::error() {
	declare text="DNS challenge with GoDaddy requires GD_Key and GD_Secret environment variables"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::namecheap::error() {
	declare text="DNS challenge with Namecheap requires Namecheap_Username and Namecheap_ApiKey environment variables"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::digitalocean::error() {
	declare text="DNS challenge with DigitalOcean requires DO_API_KEY environment variable"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::linode::error() {
	declare text="DNS challenge with Linode requires LINODE_V4_API_KEY environment variable"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::ovh::error() {
	declare text="DNS challenge with OVH requires OVH_AK, OVH_AS, and OVH_CK environment variables"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::vultr::error() {
	declare text="DNS challenge with Vultr requires VULTR_API_KEY environment variable"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::gandi::error() {
	declare text="DNS challenge with Gandi requires GANDI_LIVEDNS_KEY environment variable"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::dnsimple::error() {
	declare text="DNS challenge with DNSimple requires DNSimple_OAUTH_TOKEN environment variable"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::hurricane::error() {
	declare text="DNS challenge with Hurricane Electric requires HE_Username and HE_Password environment variables"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::azure::error() {
	declare text="DNS challenge with Azure requires AZUREDNS_SUBSCRIPTIONID, AZUREDNS_TENANTID, AZUREDNS_APPID, and AZUREDNS_CLIENTSECRET environment variables"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::gcp::error() {
	declare text="DNS challenge with Google Cloud Platform requires GCP_PROJECT and GCP_SERVICE_ACCOUNT_JSON_FILE environment variables"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::ionos::error() {
	declare text="DNS challenge with IONOS requires IONOS_PREFIX and IONOS_SECRET environment variables"
	quickbox::dashboard::log "${text}"
}

# DNS Error Kill Messages
quickbox::lang::lecert::error::domain::empty() {
	declare text="domain can not be empty"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::dns::provider::required() {
	declare text="DNS provider must be specified when using DNS challenge. Use --dns-provider <provider>"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::dns::provider::unsupported() {
	declare text="Unsupported DNS provider: ${dns_provider}"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::wildcard::dns::flag() {
	declare text="Wildcard domain ${domain} requires --dns flag"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::move::root() {
	declare text="unable to move to /root"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::move::acme() {
	declare text="unable to move to /root/acme.sh"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::certificate::install() {
	declare text="unable to install certificate for ${d}"
	quickbox::dashboard::log "${text}"
}

# DNS Provider Credential Kill Messages
quickbox::lang::lecert::error::cloudflare::credentials() {
	declare text="Cloudflare DNS credentials not configured"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::route53::credentials() {
	declare text="Route53 DNS credentials not configured"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::godaddy::credentials() {
	declare text="GoDaddy DNS credentials not configured"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::namecheap::credentials() {
	declare text="Namecheap DNS credentials not configured"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::digitalocean::credentials() {
	declare text="DigitalOcean DNS credentials not configured"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::linode::credentials() {
	declare text="Linode DNS credentials not configured"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::ovh::credentials() {
	declare text="OVH DNS credentials not configured"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::vultr::credentials() {
	declare text="Vultr DNS credentials not configured"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::gandi::credentials() {
	declare text="Gandi DNS credentials not configured"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::dnsimple::credentials() {
	declare text="DNSimple DNS credentials not configured"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::hurricane::credentials() {
	declare text="Hurricane Electric DNS credentials not configured"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::azure::credentials() {
	declare text="Azure DNS credentials not configured"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::gcp::credentials() {
	declare text="GCP DNS credentials not configured"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::ionos::credentials() {
	declare text="IONOS DNS credentials not configured"
	quickbox::dashboard::log "${text}"
}

################################################################################
# Lecert Sudoers and Security Messages
################################################################################
quickbox::lang::lecert::error::sudoers::create() {
	declare text="Unable to create sudoers file for www-data access to account.conf"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::sudoers::created() {
	declare text="Sudoers file created for secure www-data access to DNS credentials"
	quickbox::dashboard::log "${text}"
}

################################################################################
# Lecert Info Messages
################################################################################
quickbox::lang::lecert::info::certificate::valid::skip() {
	declare text="Certificate is still valid, skipping renewal"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::info::acme::failed() {
	declare text="ERROR: acme.sh command failed. Output:"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::info::certificate::exists() {
	declare text="Certificate files already exist for ${d}, checking validity..."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::info::certificate::valid::exists() {
	declare text="Certificate for ${d} is still valid, skipping installation"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::info::certificate::expired::reinstall() {
	declare text="Certificate for ${d} is expired or will expire soon, reinstalling..."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::info::verification::retry() {
	declare text="Certificate verification failed, retrying... (${retry_count}/${max_retries})"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::info::cleanup::start() {
	declare text="Performing cleanup after certificate generation..."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::info::nginx::valid::reload() {
	declare text="Nginx configuration is valid, reloading..."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::warning::nginx::test::failed() {
	declare text="WARNING: Nginx configuration test failed, manual intervention may be required"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::info::cleanup::complete() {
	declare text="Cleanup completed successfully"
	quickbox::dashboard::log "${text}"
}

################################################################################
# Lecert Interactive DNS Setup Messages
################################################################################
quickbox::lang::lecert::dns::interactive::header() {
	declare text="=== Interactive DNS Credentials Setup ==="
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::header() {
	declare text="Setting up Cloudflare DNS credentials..."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::options() {
	declare text="Choose your authentication method:"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::option1() {
	declare text="1. API Token (Recommended)"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::option2() {
	declare text="2. Global API Key + Email"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::api::header() {
	declare text="=== API Token Method ==="
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::api::step1() {
	declare text="1. Go to Cloudflare Dashboard > My Profile > API Tokens"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::api::step2() {
	declare text="2. Create a new token with Zone:DNS:Edit permissions"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::api::step3() {
	declare text="3. Enter your API token below:"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::api::error() {
	declare text="❌ API token cannot be empty"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::legacy::header() {
	declare text="=== Global API Key Method ==="
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::legacy::step1() {
	declare text="1. Go to Cloudflare Dashboard > My Profile > API Keys"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::legacy::step2() {
	declare text="2. Copy your Global API Key and Email"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::legacy::error() {
	declare text="❌ Email and Global API Key cannot be empty"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::invalid() {
	declare text="❌ Invalid option selected"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::route53::header() {
	declare text="Setting up AWS Route53 DNS credentials..."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::route53::intro() {
	declare text="You need AWS Access Key ID and Secret Access Key with Route53 permissions:"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::route53::error() {
	declare text="❌ Access Key ID and Secret Access Key cannot be empty"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::digitalocean::header() {
	declare text="Setting up DigitalOcean DNS credentials..."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::digitalocean::step1() {
	declare text="1. Go to DigitalOcean Dashboard > API > Tokens/Keys"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::digitalocean::step2() {
	declare text="2. Generate a new API token with Write permissions"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::digitalocean::error() {
	declare text="❌ API token cannot be empty"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::not::implemented() {
	declare text="❌ Interactive setup not implemented for this provider"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::manual::setup() {
	declare text="Please set up credentials manually in /root/.acme.sh/account.conf"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::success() {
	declare text="✅ DNS credentials saved successfully"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::continue() {
	declare text="Continuing with certificate installation..."
	quickbox::dashboard::log "${text}"
}

################################################################################
# Lecert Prompt Messages
################################################################################
quickbox::lang::lecert::prompt::setup::cloudflare() {
	declare text="Would you like to set up Cloudflare credentials now? (y/n): "
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::prompt::setup::route53() {
	declare text="Would you like to set up Route53 credentials now? (y/n): "
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::prompt::setup::digitalocean() {
	declare text="Would you like to set up DigitalOcean credentials now? (y/n): "
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::prompt::cloudflare::method() {
	declare text="Enter your choice (1 or 2): "
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::prompt::cloudflare::api_token() {
	declare text="Enter your Cloudflare API Token: "
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::prompt::cloudflare::email() {
	declare text="Enter your Cloudflare Email: "
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::prompt::cloudflare::global_key() {
	declare text="Enter your Cloudflare Global API Key: "
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::prompt::route53::access_key() {
	declare text="Enter your AWS Access Key ID: "
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::prompt::route53::secret_key() {
	declare text="Enter your AWS Secret Access Key: "
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::prompt::digitalocean::api_token() {
	declare text="Enter your DigitalOcean API Token: "
	quickbox::dashboard::log "${text}"
}

################################################################################
# Lecert DNS Credentials Setup Messages
################################################################################
quickbox::lang::lecert::dns::setup::cloudflare::header() {
	declare text="=== Cloudflare DNS Credentials Setup ==="
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::intro() {
	declare text="To use DNS challenge with Cloudflare, you need to set up API credentials:"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option1::header() {
	declare text="Option 1: QuickBox Dashboard (Recommended)"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option1::step1() {
	declare text="1. Go to your QuickBox dashboard"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option1::step2() {
	declare text="2. Navigate to Settings > DNS Credentials"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option1::step3() {
	declare text="3. Select Cloudflare and enter your API token"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option1::step4() {
	declare text="4. Save the configuration"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option2::header() {
	declare text="Option 2: Manual Setup"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option2::step1() {
	declare text="1. Go to https://dash.cloudflare.com/profile/api-tokens"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option2::step2() {
	declare text="2. Create a new API token with the following permissions:"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option2::step2a() {
	declare text="   - Zone:Zone:Read"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option2::step2b() {
	declare text="   - Zone:DNS:Edit"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option2::step3() {
	declare text="3. Set the zone resources to 'Include: All zones'"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option2::step4() {
	declare text="4. Copy the generated token"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option2::step5() {
	declare text="5. Run: qb dns-credentials cloudflare <token>"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option3::header() {
	declare text="Option 3: Legacy API Key (if you have an older account)"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option3::step1() {
	declare text="1. Go to https://dash.cloudflare.com/profile/api-keys"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option3::step2() {
	declare text="2. Copy your Global API Key"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option3::step3() {
	declare text="3. Note your account email address"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option3::step4() {
	declare text="4. Run: qb dns-credentials cloudflare-legacy <email> <api_key>"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::route53::header() {
	declare text="=== AWS Route53 DNS Credentials Setup ==="
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::route53::intro() {
	declare text="To use DNS challenge with Route53, you need AWS credentials:"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::route53::step1() {
	declare text="1. Create an IAM user with the following policy:"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::route53::step1a() {
	declare text="   - Route53FullAccess"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::route53::step2() {
	declare text="2. Generate Access Key ID and Secret Access Key"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::route53::step3() {
	declare text="3. Run: qb dns-credentials route53 <access_key_id> <secret_access_key>"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::digitalocean::header() {
	declare text="=== DigitalOcean DNS Credentials Setup ==="
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::digitalocean::intro() {
	declare text="To use DNS challenge with DigitalOcean, you need an API token:"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::digitalocean::step1() {
	declare text="1. Go to https://cloud.digitalocean.com/account/api/tokens"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::digitalocean::step2() {
	declare text="2. Generate a new API token with 'Write' access"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::digitalocean::step3() {
	declare text="3. Copy the generated token"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::digitalocean::step4() {
	declare text="4. Run: qb dns-credentials digitalocean <token>"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::generic::header() {
	declare text="=== DNS Credentials Setup ==="
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::generic::intro() {
	declare text="To use DNS challenge with ${provider}, you need to configure credentials."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::generic::referral() {
	declare text="Please refer to the acme.sh documentation for ${provider} setup:"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::generic::url() {
	declare text="https://github.com/acmesh-official/acme.sh/wiki/dnsapi#dns_${provider}"
	quickbox::dashboard::log "${text}"
}
