#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Projektnavn: QuickBox Pro
# Filnavn: cli_ssl_dk
# Filbeskrivelse: Dansk sprogfil - SSL/LetsEncrypt Operationer
# Filversion: 1.0.3
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
# Forny - Let's Encrypt
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
		application_array+=("det brugerdefinerede domæne er blevet")
	fi
	for ((i = 0; i < ${#domain_array[@]}; i++)); do
		declare text="ssl certifikat for ${application_array[i]} installeret.
domæne: ${domain_array[i]}"
	done
	quickbox::dashboard::log "${text}"
}

quickbox::lang::renew::certificates::header() {
	declare text="ssl certifikat fornyelsesprocessen vil nu begynde"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::renew::complete::header() {
	declare text="ssl certifikat fornyelse fuldført"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::renew() {
	# divider domæne poster med kommaer og sæt sidste post til "og"
	for ((i = 0; i < ${#domain[@]}; i++)); do
		if [[ ${i} -eq 0 ]]; then
			declare text="${domain[i]}"
		elif [[ ${i} -eq $((${#domain[@]} - 1)) ]]; then
			declare text="${text} og ${domain[i]}"
		else
			declare text="${text}, ${domain[i]}"
		fi
	done
	declare text="fornyer ssl certifikat for ${text}..."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::renew::info() {
	created_array="${certificate_created}"
	expires_array="${certificate_expiry}"
	days_left_array="${certificate_days_left}"
	# opret certifikat info header for fuldførelsesmeddelelse
	declare text_header="
Certifikat information:
"
	# opret certifikat info for hvert domæne
	declare text="domæne: ${d}
oprettet: ${created_array[*]}
udløber: ${expires_array[*]}
dage tilbage: ${days_left_array[*]}
"
	# vis text_header kun én gang for flere domæner
	if [[ ${d} == "${domain[0]}" ]]; then
		quickbox::dashboard::log "${text_header}
${text}"
	else
		quickbox::dashboard::log "${text}"
	fi
}

quickbox::lang::reinstall::lecert::complete::header() {
	declare text="ssl certifikat geninstallation fuldført"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::remove::cert::complete::header() {
	declare text="ssl certifikat fjernelse fuldført"
	quickbox::dashboard::log "${text}"
}

################################################################################
# Lecert DNS Udfordring Meddelelser
################################################################################
quickbox::lang::lecert::dns::provider::valid() {
	declare text="✅ Bruger DNS udbyder: ${dns_provider} (plugin: ${dns_plugin})"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::provider::invalid() {
	declare text="❌ Understøttet DNS udbyder: ${dns_provider}"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::provider::supported() {
	declare text="Understøttede udbydere: ${!SUPPORTED_DNS_PROVIDERS[*]}"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::wildcard::dns::required() {
	declare text="❌ Wildcard domæner kræver DNS udfordring"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::domain::not::set() {
	declare text="Fejl: Domæne er ikke sat."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::credentials::loaded() {
	declare text="✅ Indlæste DNS legitimationsoplysninger fra account.conf"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::challenge::mode() {
	declare text="Bruger DNS udfordring med udbyder: ${dns_provider}"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::http::challenge::mode() {
	declare text="Bruger HTTP udfordring"
	quickbox::dashboard::log "${text}"
}

# DNS Udbyderspecifikke Legitimationsoplysninger Fejlmeddelelser
quickbox::lang::lecert::dns::cloudflare::error() {
	declare text="DNS udfordring med Cloudflare kræver CF_Token eller CF_Email/CF_Key miljøvariabler"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::route53::error() {
	declare text="DNS udfordring med Route53 kræver AWS_ACCESS_KEY_ID og AWS_SECRET_ACCESS_KEY"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::godaddy::error() {
	declare text="DNS udfordring med GoDaddy kræver GD_Key og GD_Secret miljøvariabler"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::namecheap::error() {
	declare text="DNS udfordring med Namecheap kræver Namecheap_Username og Namecheap_ApiKey miljøvariabler"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::digitalocean::error() {
	declare text="DNS udfordring med DigitalOcean kræver DO_API_KEY miljøvariabel"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::linode::error() {
	declare text="DNS udfordring med Linode kræver LINODE_V4_API_KEY miljøvariabel"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::ovh::error() {
	declare text="DNS udfordring med OVH kræver OVH_AK, OVH_AS, og OVH_CK miljøvariabler"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::vultr::error() {
	declare text="DNS udfordring med Vultr kræver VULTR_API_KEY miljøvariabel"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::gandi::error() {
	declare text="DNS udfordring med Gandi kræver GANDI_LIVEDNS_KEY miljøvariabel"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::dnsimple::error() {
	declare text="DNS udfordring med DNSimple kræver DNSimple_OAUTH_TOKEN miljøvariabel"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::hurricane::error() {
	declare text="DNS udfordring med Hurricane Electric kræver HE_Username og HE_Password miljøvariabler"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::azure::error() {
	declare text="DNS udfordring med Azure kræver AZUREDNS_SUBSCRIPTIONID, AZUREDNS_TENANTID, AZUREDNS_APPID, og AZUREDNS_CLIENTSECRET miljøvariabler"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::gcp::error() {
	declare text="DNS udfordring med Google Cloud Platform kræver GCP_PROJECT og GCP_SERVICE_ACCOUNT_JSON_FILE miljøvariabler"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::ionos::error() {
	declare text="DNS udfordring med IONOS kræver IONOS_PREFIX og IONOS_SECRET miljøvariabler"
	quickbox::dashboard::log "${text}"
}

# DNS Fejl Kill Meddelelser
quickbox::lang::lecert::error::domain::empty() {
	declare text="domæne kan ikke være tom"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::dns::provider::required() {
	declare text="DNS udbyder skal specificeres, når der bruges DNS udfordring. Brug --dns-provider <udbyder>"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::dns::provider::unsupported() {
	declare text="Understøttet DNS udbyder: ${dns_provider}"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::wildcard::dns::flag() {
	declare text="Wildcard domæne ${domain} kræver --dns flag"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::move::root() {
	declare text="kunne ikke flytte til /root"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::move::acme() {
	declare text="kunne ikke flytte til /root/acme.sh"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::certificate::install() {
	declare text="kunne ikke installere certifikat for ${d}"
	quickbox::dashboard::log "${text}"
}

# DNS Udbyderspecifikke Legitimationsoplysninger Fejlmeddelelser
quickbox::lang::lecert::error::cloudflare::credentials() {
	declare text="Cloudflare DNS legitimationsoplysninger ikke konfigureret"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::route53::credentials() {
	declare text="Route53 DNS legitimationsoplysninger ikke konfigureret"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::godaddy::credentials() {
	declare text="GoDaddy DNS legitimationsoplysninger ikke konfigureret"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::namecheap::credentials() {
	declare text="Namecheap DNS legitimationsoplysninger ikke konfigureret"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::digitalocean::credentials() {
	declare text="DigitalOcean DNS legitimationsoplysninger ikke konfigureret"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::linode::credentials() {
	declare text="Linode DNS legitimationsoplysninger ikke konfigureret"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::ovh::credentials() {
	declare text="OVH DNS legitimationsoplysninger ikke konfigureret"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::vultr::credentials() {
	declare text="Vultr DNS legitimationsoplysninger ikke konfigureret"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::gandi::credentials() {
	declare text="Gandi DNS legitimationsoplysninger ikke konfigureret"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::dnsimple::credentials() {
	declare text="DNSimple DNS legitimationsoplysninger ikke konfigureret"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::hurricane::credentials() {
	declare text="Hurricane Electric DNS legitimationsoplysninger ikke konfigureret"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::azure::credentials() {
	declare text="Azure DNS legitimationsoplysninger ikke konfigureret"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::gcp::credentials() {
	declare text="GCP DNS legitimationsoplysninger ikke konfigureret"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::ionos::credentials() {
	declare text="IONOS DNS legitimationsoplysninger ikke konfigureret"
	quickbox::dashboard::log "${text}"
}

################################################################################
# Lecert Sudoers og Sikkerhedsmeddelelser
################################################################################
quickbox::lang::lecert::error::sudoers::create() {
	declare text="Kunne ikke oprette sudoers fil for www-data adgang til account.conf"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::sudoers::created() {
	declare text="Sudoers fil oprettet for sikker www-data adgang til DNS legitimationsoplysninger"
	quickbox::dashboard::log "${text}"
}

################################################################################
# Lecert Info Meddelelser
################################################################################
quickbox::lang::lecert::info::certificate::valid::skip() {
	declare text="Certifikatet er stadig gyldigt, spring over fornyelse"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::info::acme::failed() {
	declare text="FEJL: acme.sh kommando fejlede. Output:"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::info::certificate::exists() {
	declare text="Certifikatfilerne eksisterer allerede for ${d}, kontrollerer gyldighed..."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::info::certificate::valid::exists() {
	declare text="Certifikat for ${d} er stadig gyldigt, spring over installation"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::info::certificate::expired::reinstall() {
	declare text="Certifikat for ${d} er udløbet eller vil udløbe snart, geninstaller..."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::info::verification::retry() {
	declare text="Certifikat verifikation fejlede, forsøger igen... (${retry_count}/${max_retries})"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::info::cleanup::start() {
	declare text="Udfører renseopgaver efter certifikatgenerering..."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::info::nginx::valid::reload() {
	declare text="Nginx konfiguration er gyldig, genlæser..."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::warning::nginx::test::failed() {
	declare text="VARNING: Nginx konfigurationstest fejlede, manuel intervention kan være nødvendig"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::info::cleanup::complete() {
	declare text="Rense opgav fuldført"
	quickbox::dashboard::log "${text}"
}

################################################################################
# Lecert Interaktiv DNS Opsætning Meddelelser
################################################################################
quickbox::lang::lecert::dns::interactive::header() {
	declare text="=== Interaktiv DNS legitimationsopsætning ==="
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::header() {
	declare text="Opsætter Cloudflare DNS legitimationsoplysninger..."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::options() {
	declare text="Vælg din autentificeringsmetode:"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::option1() {
	declare text="1. API Token (Anbefales)"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::option2() {
	declare text="2. Global API Key + Email"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::api::header() {
	declare text="=== API Token Metode ==="
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::api::step1() {
	declare text="1. Gå til Cloudflare Dashboard > Min Profil > API Tokener"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::api::step2() {
	declare text="2. Opret en ny token med Zone:DNS:Edit tilladelser"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::api::step3() {
	declare text="3. Indtast din API token nedenfor:"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::api::error() {
	declare text="❌ API token kan ikke være tom"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::legacy::header() {
	declare text="=== Global API Key Metode ==="
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::legacy::step1() {
	declare text="1. Gå til Cloudflare Dashboard > Min Profil > API Keys"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::legacy::step2() {
	declare text="2. Kopier din Global API Key og Email"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::legacy::error() {
	declare text="❌ Email og Global API Key kan ikke være tomme"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::invalid() {
	declare text="❌ Ugyldig valg"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::route53::header() {
	declare text="Opsætter AWS Route53 DNS legitimationsoplysninger..."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::route53::intro() {
	declare text="Du har brug for AWS Access Key ID og Secret Access Key med Route53 tilladelser:"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::route53::error() {
	declare text="❌ Access Key ID og Secret Access Key kan ikke være tomme"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::digitalocean::header() {
	declare text="Opsætter DigitalOcean DNS legitimationsoplysninger..."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::digitalocean::step1() {
	declare text="1. Gå til DigitalOcean Dashboard > API > Tokener/Nøgler"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::digitalocean::step2() {
	declare text="2. Opret en ny API token med 'Skriv' tilladelse"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::digitalocean::error() {
	declare text="❌ API token kan ikke være tom"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::not::implemented() {
	declare text="❌ Interaktiv opsætning ikke implementeret for denne udbyder"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::manual::setup() {
	declare text="Indstil legitimationsoplysninger manuelt i /root/.acme.sh/account.conf"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::success() {
	declare text="✅ DNS legitimationsoplysninger gemt"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::continue() {
	declare text="Fortsæt med certifikatinstallation..."
	quickbox::dashboard::log "${text}"
}

################################################################################
# Lecert Prompt Meddelelser
################################################################################
quickbox::lang::lecert::prompt::setup::cloudflare() {
	declare text="Vil du gerne opsætte Cloudflare legitimationsoplysninger nu? (j/n): "
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::prompt::setup::route53() {
	declare text="Vil du gerne opsætte Route53 legitimationsoplysninger nu? (j/n): "
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::prompt::setup::digitalocean() {
	declare text="Vil du gerne opsætte DigitalOcean legitimationsoplysninger nu? (j/n): "
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::prompt::cloudflare::method() {
	declare text="Indtast dit valg (1 eller 2): "
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::prompt::cloudflare::api_token() {
	declare text="Indtast din Cloudflare API Token: "
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::prompt::cloudflare::email() {
	declare text="Indtast din Cloudflare Email: "
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::prompt::cloudflare::global_key() {
	declare text="Indtast din Cloudflare Global API Key: "
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::prompt::route53::access_key() {
	declare text="Indtast din AWS Access Key ID: "
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::prompt::route53::secret_key() {
	declare text="Indtast din AWS Secret Access Key: "
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::prompt::digitalocean::api_token() {
	declare text="Indtast din DigitalOcean API Token: "
	quickbox::dashboard::log "${text}"
}

################################################################################
# Lecert DNS Legitimationsoplysninger Opsætning Meddelelser
################################################################################
quickbox::lang::lecert::dns::setup::cloudflare::header() {
	declare text="=== Cloudflare DNS Legitimationsoplysninger Opsætning ==="
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::intro() {
	declare text="For at bruge DNS udfordring med Cloudflare skal du opsætte API legitimationsoplysninger:"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option1::header() {
	declare text="Mulighed 1: QuickBox Dashboard (Anbefales)"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option1::step1() {
	declare text="1. Gå til din QuickBox dashboard"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option1::step2() {
	declare text="2. Naviger til Indstillinger > DNS legitimationsoplysninger"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option1::step3() {
	declare text="3. Vælg Cloudflare og indtast din API token"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option1::step4() {
	declare text="4. Gem konfigurationen"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option2::header() {
	declare text="Mulighed 2: Manuelt Opsætning"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option2::step1() {
	declare text="1. Gå til https://dash.cloudflare.com/profile/api-tokens"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option2::step2() {
	declare text="2. Opret en ny API token med følgende tilladelser:"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option2::step2a() {
	declare text="   - Zone:Zone:Læs"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option2::step2b() {
	declare text="   - Zone:DNS:Rediger"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option2::step3() {
	declare text="3. Sæt zonens ressourcer til 'Inkluder: Alle zoner'"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option2::step4() {
	declare text="4. Kopier den genererede token"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option2::step5() {
	declare text="5. Kør: qb dns-credentials cloudflare <token>"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option3::header() {
	declare text="Mulighed 3: Legacy API Key (hvis du har en ældre konto)"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option3::step1() {
	declare text="1. Gå til https://dash.cloudflare.com/profile/api-keys"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option3::step2() {
	declare text="2. Kopier din Global API Key"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option3::step3() {
	declare text="3. Noter din konto e-mailadresse"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option3::step4() {
	declare text="4. Kør: qb dns-credentials cloudflare-legacy <email> <api_key>"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::route53::header() {
	declare text="=== AWS Route53 DNS Legitimationsoplysninger Opsætning ==="
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::route53::intro() {
	declare text="For at bruge DNS udfordring med Route53 skal du have AWS legitimationsoplysninger:"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::route53::step1() {
	declare text="1. Opret en IAM bruger med følgende politik:"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::route53::step1a() {
	declare text="   - Route53FullAccess"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::route53::step2() {
	declare text="2. Generer Access Key ID og Secret Access Key"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::route53::step3() {
	declare text="3. Kør: qb dns-credentials route53 <access_key_id> <secret_access_key>"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::digitalocean::header() {
	declare text="=== DigitalOcean DNS Legitimationsoplysninger Opsætning ==="
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::digitalocean::intro() {
	declare text="For at bruge DNS udfordring med DigitalOcean skal du have en API token:"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::digitalocean::step1() {
	declare text="1. Gå til https://cloud.digitalocean.com/account/api/tokens"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::digitalocean::step2() {
	declare text="2. Opret en ny API token med 'Skriv' tilladelse"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::digitalocean::step3() {
	declare text="3. Kopier den genererede token"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::digitalocean::step4() {
	declare text="4. Kør: qb dns-credentials digitalocean <token>"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::generic::header() {
	declare text="=== DNS Legitimationsoplysninger Opsætning ==="
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::generic::intro() {
	declare text="For at bruge DNS udfordring med ${provider}, skal du konfigurere legitimationsoplysninger."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::generic::referral() {
	declare text="Vær venlig at henvis til acme.sh dokumentation for ${provider} opsætning:"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::generic::url() {
	declare text="https://github.com/acmesh-official/acme.sh/wiki/dnsapi#dns_${provider}"
	quickbox::dashboard::log "${text}"
}
