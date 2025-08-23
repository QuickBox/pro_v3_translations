#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Project Name: QuickBox Pro
# File Name: cli_ssl_de
# File Description: German language file - SSL/LetsEncrypt Operations
# File Version: 1.0.19
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
    application_array+=("die benutzerdefinierte Domain wurde")
  fi
  for ((i = 0; i < ${#domain_array[@]}; i++)); do
    declare text="SSL-Zertifikat für ${application_array[i]} installiert.
Domain: ${domain_array[i]}"
  done
  quickbox::dashboard::log "${text}"
}

quickbox::lang::renew::certificates::header() {
  declare text="SSL-Zertifikatserneuerungsprozess wird jetzt beginnen"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::renew::complete::header() {
  declare text="SSL-Zertifikatserneuerung abgeschlossen"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::renew() {
  # divide domain entries with commas and set final entry to "and"
  for ((i = 0; i < ${#domain[@]}; i++)); do
    if [[ ${i} -eq 0 ]]; then
      declare text="${domain[i]}"
    elif [[ ${i} -eq $((${#domain[@]} - 1)) ]]; then
      declare text="${text} und ${domain[i]}"
    else
      declare text="${text}, ${domain[i]}"
    fi
  done
  declare text="SSL-Zertifikat für ${text} wird erneuert..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::renew::info() {
  created_array="${certificate_created}"
  expires_array="${certificate_expiry}"
  days_left_array="${certificate_days_left}"
  # create certificate info header for completion message
  declare text_header="
Zertifikatsinformationen:
"
  # create certificate info for each domain
  declare text="Domain: ${d}
Erstellt: ${created_array[*]}
Läuft ab: ${expires_array[*]}
Tage verbleibend: ${days_left_array[*]}
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
  declare text="SSL-Zertifikat-Neuinstallation abgeschlossen"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::remove::cert::complete::header() {
  declare text="SSL-Zertifikat-Entfernung abgeschlossen"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Lecert DNS Challenge Messages
################################################################################
quickbox::lang::lecert::dns::provider::valid() {
  declare text="✅ Verwende DNS-Anbieter: ${dns_provider} (Plugin: ${dns_plugin})"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::provider::invalid() {
  declare text="❌ Nicht unterstützter DNS-Anbieter: ${dns_provider}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::provider::supported() {
  declare text="Unterstützte Anbieter: ${!SUPPORTED_DNS_PROVIDERS[*]}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::wildcard::dns::required() {
  declare text="❌ Wildcard-Domains erfordern DNS-Challenge"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::domain::not::set() {
  declare text="Fehler: Domain ist nicht gesetzt."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::credentials::loaded() {
  declare text="✅ DNS-Anmeldedaten aus account.conf geladen"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::challenge::mode() {
  declare text="Verwende DNS-Challenge mit Anbieter: ${dns_provider}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::http::challenge::mode() {
  declare text="Verwende HTTP-Challenge"
  quickbox::dashboard::log "${text}"
}

# DNS Provider Credential Error Messages
quickbox::lang::lecert::dns::cloudflare::error() {
  declare text="DNS-Challenge mit Cloudflare erfordert CF_Token oder CF_Email/CF_Key Umgebungsvariablen"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::route53::error() {
  declare text="DNS-Challenge mit Route53 erfordert AWS_ACCESS_KEY_ID und AWS_SECRET_ACCESS_KEY"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::godaddy::error() {
  declare text="DNS-Challenge mit GoDaddy erfordert GD_Key und GD_Secret Umgebungsvariablen"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::namecheap::error() {
  declare text="DNS-Challenge mit Namecheap erfordert Namecheap_Username und Namecheap_ApiKey Umgebungsvariablen"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::digitalocean::error() {
  declare text="DNS-Challenge mit DigitalOcean erfordert DO_API_KEY Umgebungsvariable"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::linode::error() {
  declare text="DNS-Challenge mit Linode erfordert LINODE_V4_API_KEY Umgebungsvariable"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::ovh::error() {
  declare text="DNS-Challenge mit OVH erfordert OVH_AK, OVH_AS und OVH_CK Umgebungsvariablen"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::vultr::error() {
  declare text="DNS-Challenge mit Vultr erfordert VULTR_API_KEY Umgebungsvariable"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::gandi::error() {
  declare text="DNS-Challenge mit Gandi erfordert GANDI_LIVEDNS_KEY Umgebungsvariable"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::dnsimple::error() {
  declare text="DNS-Challenge mit DNSimple erfordert DNSimple_OAUTH_TOKEN Umgebungsvariable"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::hurricane::error() {
  declare text="DNS-Challenge mit Hurricane Electric erfordert HE_Username und HE_Password Umgebungsvariablen"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::azure::error() {
  declare text="DNS-Challenge mit Azure erfordert AZUREDNS_SUBSCRIPTIONID, AZUREDNS_TENANTID, AZUREDNS_APPID und AZUREDNS_CLIENTSECRET Umgebungsvariablen"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::gcp::error() {
  declare text="DNS-Challenge mit Google Cloud Platform erfordert GCP_PROJECT und GCP_SERVICE_ACCOUNT_JSON_FILE Umgebungsvariablen"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::ionos::error() {
  declare text="DNS-Challenge mit IONOS erfordert IONOS_PREFIX und IONOS_SECRET Umgebungsvariablen"
  quickbox::dashboard::log "${text}"
}

# DNS Error Kill Messages
quickbox::lang::lecert::error::domain::empty() {
  declare text="Domain kann nicht leer sein"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::dns::provider::required() {
  declare text="DNS-Anbieter muss bei Verwendung der DNS-Challenge angegeben werden. Verwenden Sie --dns-provider <provider>"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::dns::provider::unsupported() {
  declare text="Nicht unterstützter DNS-Anbieter: ${dns_provider}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::wildcard::dns::flag() {
  declare text="Wildcard-Domain ${domain} erfordert --dns Flag"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::move::root() {
  declare text="Kann nicht zu /root wechseln"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::move::acme() {
  declare text="Kann nicht zu /root/acme.sh wechseln"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::certificate::install() {
  declare text="Zertifikat für ${d} konnte nicht installiert werden"
  quickbox::dashboard::log "${text}"
}

# DNS Provider Credential Kill Messages
quickbox::lang::lecert::error::cloudflare::credentials() {
  declare text="Cloudflare DNS-Anmeldedaten nicht konfiguriert"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::route53::credentials() {
  declare text="Route53 DNS-Anmeldedaten nicht konfiguriert"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::godaddy::credentials() {
  declare text="GoDaddy DNS-Anmeldedaten nicht konfiguriert"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::namecheap::credentials() {
  declare text="Namecheap DNS-Anmeldedaten nicht konfiguriert"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::digitalocean::credentials() {
  declare text="DigitalOcean DNS-Anmeldedaten nicht konfiguriert"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::linode::credentials() {
  declare text="Linode DNS-Anmeldedaten nicht konfiguriert"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::ovh::credentials() {
  declare text="OVH DNS-Anmeldedaten nicht konfiguriert"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::vultr::credentials() {
  declare text="Vultr DNS-Anmeldedaten nicht konfiguriert"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::gandi::credentials() {
  declare text="Gandi DNS-Anmeldedaten nicht konfiguriert"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::dnsimple::credentials() {
  declare text="DNSimple DNS-Anmeldedaten nicht konfiguriert"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::hurricane::credentials() {
  declare text="Hurricane Electric DNS-Anmeldedaten nicht konfiguriert"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::azure::credentials() {
  declare text="Azure DNS-Anmeldedaten nicht konfiguriert"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::gcp::credentials() {
  declare text="GCP DNS-Anmeldedaten nicht konfiguriert"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::ionos::credentials() {
  declare text="IONOS DNS-Anmeldedaten nicht konfiguriert"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Lecert Sudoers and Security Messages
################################################################################
quickbox::lang::lecert::error::sudoers::create() {
  declare text="Sudoers-Datei für www-data-Zugriff auf account.conf konnte nicht erstellt werden"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::sudoers::created() {
  declare text="Sudoers-Datei für sicheren www-data-Zugriff auf DNS-Anmeldedaten erstellt"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Lecert Info Messages
################################################################################
quickbox::lang::lecert::info::certificate::valid::skip() {
  declare text="Zertifikat ist noch gültig, Erneuerung wird übersprungen"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::info::acme::failed() {
  declare text="FEHLER: acme.sh Befehl fehlgeschlagen. Ausgabe:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::info::certificate::exists() {
  declare text="Zertifikatsdateien existieren bereits für ${d}, Gültigkeit wird geprüft..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::info::certificate::valid::exists() {
  declare text="Zertifikat für ${d} ist noch gültig, Installation wird übersprungen"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::info::certificate::expired::reinstall() {
  declare text="Zertifikat für ${d} ist abgelaufen oder läuft bald ab, wird neu installiert..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::info::verification::retry() {
  declare text="Zertifikatsverifizierung fehlgeschlagen, wird wiederholt... (${retry_count}/${max_retries})"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::info::cleanup::start() {
  declare text="Bereinigung nach Zertifikatsgenerierung wird durchgeführt..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::info::nginx::valid::reload() {
  declare text="Nginx-Konfiguration ist gültig, wird neu geladen..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::warning::nginx::test::failed() {
  declare text="WARNUNG: Nginx-Konfigurationstest fehlgeschlagen, manuelles Eingreifen erforderlich"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::info::cleanup::complete() {
  declare text="Bereinigung erfolgreich abgeschlossen"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Lecert Interactive DNS Setup Messages
################################################################################
quickbox::lang::lecert::dns::interactive::header() {
  declare text="=== Interaktive DNS-Anmeldedaten Einrichtung ==="
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::header() {
  declare text="Cloudflare DNS-Anmeldedaten werden eingerichtet..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::options() {
  declare text="Wählen Sie Ihre Authentifizierungsmethode:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::option1() {
  declare text="1. API-Token (Empfohlen)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::option2() {
  declare text="2. Globaler API-Schlüssel + E-Mail"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::api::header() {
  declare text="=== API-Token Methode ==="
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::api::step1() {
  declare text="1. Gehen Sie zu Cloudflare Dashboard > Mein Profil > API-Token"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::api::step2() {
  declare text="2. Erstellen Sie einen neuen Token mit Zone:DNS:Bearbeiten Berechtigungen"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::api::step3() {
  declare text="3. Geben Sie Ihren API-Token unten ein:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::api::error() {
  declare text="❌ API-Token kann nicht leer sein"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::legacy::header() {
  declare text="=== Globaler API-Schlüssel Methode ==="
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::legacy::step1() {
  declare text="1. Gehen Sie zu Cloudflare Dashboard > Mein Profil > API-Schlüssel"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::legacy::step2() {
  declare text="2. Kopieren Sie Ihren Globalen API-Schlüssel und E-Mail"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::legacy::error() {
  declare text="❌ E-Mail und Globaler API-Schlüssel können nicht leer sein"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::invalid() {
  declare text="❌ Ungültige Option ausgewählt"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::route53::header() {
  declare text="AWS Route53 DNS-Anmeldedaten werden eingerichtet..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::route53::intro() {
  declare text="Sie benötigen AWS Access Key ID und Secret Access Key mit Route53-Berechtigungen:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::route53::error() {
  declare text="❌ Access Key ID und Secret Access Key können nicht leer sein"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::digitalocean::header() {
  declare text="DigitalOcean DNS-Anmeldedaten werden eingerichtet..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::digitalocean::step1() {
  declare text="1. Gehen Sie zu DigitalOcean Dashboard > API > Token/Schlüssel"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::digitalocean::step2() {
  declare text="2. Generieren Sie einen neuen API-Token mit Schreibberechtigungen"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::digitalocean::error() {
  declare text="❌ API-Token kann nicht leer sein"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::not::implemented() {
  declare text="❌ Interaktive Einrichtung für diesen Anbieter nicht implementiert"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::manual::setup() {
  declare text="Bitte richten Sie Anmeldedaten manuell in /root/.acme.sh/account.conf ein"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::success() {
  declare text="✅ DNS-Anmeldedaten erfolgreich gespeichert"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::continue() {
  declare text="Setze Zertifikatsinstallation fort..."
  quickbox::dashboard::log "${text}"
}

################################################################################
# Lecert Prompt Messages
################################################################################
quickbox::lang::lecert::prompt::setup::cloudflare() {
  declare text="Möchten Sie Cloudflare-Anmeldedaten jetzt einrichten? (j/n): "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::prompt::setup::route53() {
  declare text="Möchten Sie Route53-Anmeldedaten jetzt einrichten? (j/n): "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::prompt::setup::digitalocean() {
  declare text="Möchten Sie DigitalOcean-Anmeldedaten jetzt einrichten? (j/n): "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::prompt::cloudflare::method() {
  declare text="Geben Sie Ihre Wahl ein (1 oder 2): "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::prompt::cloudflare::api_token() {
  declare text="Geben Sie Ihren Cloudflare API-Token ein: "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::prompt::cloudflare::email() {
  declare text="Geben Sie Ihre Cloudflare E-Mail ein: "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::prompt::cloudflare::global_key() {
  declare text="Geben Sie Ihren Cloudflare Global API-Schlüssel ein: "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::prompt::route53::access_key() {
  declare text="Geben Sie Ihre AWS Access Key ID ein: "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::prompt::route53::secret_key() {
  declare text="Geben Sie Ihren AWS Secret Access Key ein: "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::prompt::digitalocean::api_token() {
  declare text="Geben Sie Ihren DigitalOcean API-Token ein: "
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