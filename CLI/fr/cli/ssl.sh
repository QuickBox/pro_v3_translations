#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Nom du Projet: QuickBox Pro
# Nom du Fichier: cli_ssl_fr
# Description du Fichier: Fichier de langue française - Opérations SSL/LetsEncrypt
# Version du Fichier: 1.0.3
#
# Tâches de Sauvegarde:
# Versioning_Automatisé: true
#
# Tâches de Construction:
# Suppression_Commentaires_Automatisée: true
#
# Tâches de Déploiement:
# Chiffrement_Automatisé: false
#
# Auteur: Jason Matthews (JMSolo)
# Contact Auteur: support@quickbox.io
# Auteur: Jamie Dobbs (Mschf)
# Contact Auteur: jamie.dobbs@mschf.dev
#
# Licence: BSD-3 (Disponible dans LICENSE.md)
# Copyright (C) 2019-2025, QuickBox.IO
# Tous droits réservés.
# <END METADATA>
# shellcheck disable=2001,2034,2154,2312,2317
################################################################################

################################################################################
# Renouvellement - Let's Encrypt
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
    application_array+=("le domaine personnalisé a été")
  fi
  for ((i = 0; i < ${#domain_array[@]}; i++)); do
    declare text="certificat ssl pour ${application_array[i]} installé.
domaine: ${domain_array[i]}"
  done
  quickbox::dashboard::log "${text}"
}

quickbox::lang::renew::certificates::header() {
  declare text="le processus de renouvellement du certificat ssl va maintenant commencer"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::renew::complete::header() {
  declare text="renouvellement du certificat ssl terminé"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::renew() {
  # diviser les entrées de domaine avec des virgules et définir la dernière entrée comme "et"
  for ((i = 0; i < ${#domain[@]}; i++)); do
    if [[ ${i} -eq 0 ]]; then
      declare text="${domain[i]}"
    elif [[ ${i} -eq $((${#domain[@]} - 1)) ]]; then
      declare text="${text} et ${domain[i]}"
    else
      declare text="${text}, ${domain[i]}"
    fi
  done
  declare text="renouvellement du certificat ssl pour ${text}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::renew::info() {
  created_array="${certificate_created}"
  expires_array="${certificate_expiry}"
  days_left_array="${certificate_days_left}"
  # créer l'en-tête d'informations du certificat pour le message de fin
  declare text_header="
Informations du certificat:
"
  # créer les informations du certificat pour chaque domaine
  declare text="domaine: ${d}
créé: ${created_array[*]}
expire: ${expires_array[*]}
jours restants: ${days_left_array[*]}
"
  # afficher text_header seulement une fois pour plusieurs domaines
  if [[ ${d} == "${domain[0]}" ]]; then
    quickbox::dashboard::log "${text_header}
${text}"
  else
    quickbox::dashboard::log "${text}"
  fi
}

quickbox::lang::reinstall::lecert::complete::header() {
  declare text="réinstallation du certificat ssl terminée"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::remove::cert::complete::header() {
  declare text="suppression du certificat ssl terminée"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Messages de Défi DNS Lecert
################################################################################
quickbox::lang::lecert::dns::provider::valid() {
  declare text="✅ Utilisation du fournisseur DNS: ${dns_provider} (plugin: ${dns_plugin})"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::provider::invalid() {
  declare text="❌ Fournisseur DNS non pris en charge: ${dns_provider}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::provider::supported() {
  declare text="Fournisseurs pris en charge: ${!SUPPORTED_DNS_PROVIDERS[*]}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::wildcard::dns::required() {
  declare text="❌ Les domaines génériques nécessitent un défi DNS"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::domain::not::set() {
  declare text="Erreur: Le domaine n'est pas défini."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::credentials::loaded() {
  declare text="✅ Identifiants DNS chargés depuis account.conf"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::challenge::mode() {
  declare text="Utilisation du défi DNS avec le fournisseur: ${dns_provider}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::http::challenge::mode() {
  declare text="Utilisation du défi HTTP"
  quickbox::dashboard::log "${text}"
}

# Messages d'Erreur d'Identifiants Fournisseur DNS
quickbox::lang::lecert::dns::cloudflare::error() {
  declare text="Le défi DNS avec Cloudflare nécessite les variables d'environnement CF_Token ou CF_Email/CF_Key"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::route53::error() {
  declare text="Le défi DNS avec Route53 nécessite AWS_ACCESS_KEY_ID et AWS_SECRET_ACCESS_KEY"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::godaddy::error() {
  declare text="Le défi DNS avec GoDaddy nécessite les variables d'environnement GD_Key et GD_Secret"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::namecheap::error() {
  declare text="Le défi DNS avec Namecheap nécessite les variables d'environnement Namecheap_Username et Namecheap_ApiKey"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::digitalocean::error() {
  declare text="Le défi DNS avec DigitalOcean nécessite la variable d'environnement DO_API_KEY"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::linode::error() {
  declare text="Le défi DNS avec Linode nécessite la variable d'environnement LINODE_V4_API_KEY"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::ovh::error() {
  declare text="Le défi DNS avec OVH nécessite les variables d'environnement OVH_AK, OVH_AS et OVH_CK"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::vultr::error() {
  declare text="Le défi DNS avec Vultr nécessite la variable d'environnement VULTR_API_KEY"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::gandi::error() {
  declare text="Le défi DNS avec Gandi nécessite la variable d'environnement GANDI_LIVEDNS_KEY"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::dnsimple::error() {
  declare text="Le défi DNS avec DNSimple nécessite la variable d'environnement DNSimple_OAUTH_TOKEN"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::hurricane::error() {
  declare text="Le défi DNS avec Hurricane Electric nécessite les variables d'environnement HE_Username et HE_Password"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::azure::error() {
  declare text="Le défi DNS avec Azure nécessite les variables d'environnement AZUREDNS_SUBSCRIPTIONID, AZUREDNS_TENANTID, AZUREDNS_APPID et AZUREDNS_CLIENTSECRET"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::gcp::error() {
  declare text="Le défi DNS avec Google Cloud Platform nécessite les variables d'environnement GCP_PROJECT et GCP_SERVICE_ACCOUNT_JSON_FILE"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::ionos::error() {
  declare text="Le défi DNS avec IONOS nécessite les variables d'environnement IONOS_PREFIX et IONOS_SECRET"
  quickbox::dashboard::log "${text}"
}

# Messages d'Erreur DNS
quickbox::lang::lecert::error::domain::empty() {
  declare text="le domaine ne peut pas être vide"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::dns::provider::required() {
  declare text="Le fournisseur DNS doit être spécifié lors de l'utilisation du défi DNS. Utilisez --dns-provider <fournisseur>"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::dns::provider::unsupported() {
  declare text="Fournisseur DNS non pris en charge: ${dns_provider}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::wildcard::dns::flag() {
  declare text="Le domaine générique ${domain} nécessite le drapeau --dns"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::move::root() {
  declare text="impossible de se déplacer vers /root"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::move::acme() {
  declare text="impossible de se déplacer vers /root/acme.sh"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::certificate::install() {
  declare text="impossible d'installer le certificat pour ${d}"
  quickbox::dashboard::log "${text}"
}

# Messages d'Erreur d'Identifiants Fournisseur DNS
quickbox::lang::lecert::error::cloudflare::credentials() {
  declare text="Identifiants DNS Cloudflare non configurés"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::route53::credentials() {
  declare text="Identifiants DNS Route53 non configurés"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::godaddy::credentials() {
  declare text="Identifiants DNS GoDaddy non configurés"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::namecheap::credentials() {
  declare text="Identifiants DNS Namecheap non configurés"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::digitalocean::credentials() {
  declare text="Identifiants DNS DigitalOcean non configurés"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::linode::credentials() {
  declare text="Identifiants DNS Linode non configurés"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::ovh::credentials() {
  declare text="Identifiants DNS OVH non configurés"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::vultr::credentials() {
  declare text="Identifiants DNS Vultr non configurés"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::gandi::credentials() {
  declare text="Identifiants DNS Gandi non configurés"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::dnsimple::credentials() {
  declare text="Identifiants DNS DNSimple non configurés"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::hurricane::credentials() {
  declare text="Identifiants DNS Hurricane Electric non configurés"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::azure::credentials() {
  declare text="Identifiants DNS Azure non configurés"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::gcp::credentials() {
  declare text="Identifiants DNS GCP non configurés"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::ionos::credentials() {
  declare text="Identifiants DNS IONOS non configurés"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Messages Sudoers et Sécurité Lecert
################################################################################
quickbox::lang::lecert::error::sudoers::create() {
  declare text="Impossible de créer le fichier sudoers pour l'accès www-data à account.conf"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::sudoers::created() {
  declare text="Fichier sudoers créé pour un accès sécurisé www-data aux identifiants DNS"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Messages d'Information Lecert
################################################################################
quickbox::lang::lecert::info::certificate::valid::skip() {
  declare text="Le certificat est encore valide, renouvellement ignoré"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::info::acme::failed() {
  declare text="ERREUR: La commande acme.sh a échoué. Sortie:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::info::certificate::exists() {
  declare text="Les fichiers de certificat existent déjà pour ${d}, vérification de la validité..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::info::certificate::valid::exists() {
  declare text="Le certificat pour ${d} est encore valide, installation ignorée"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::info::certificate::expired::reinstall() {
  declare text="Le certificat pour ${d} a expiré ou expirera bientôt, réinstallation..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::info::verification::retry() {
  declare text="La vérification du certificat a échoué, nouvelle tentative... (${retry_count}/${max_retries})"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::info::cleanup::start() {
  declare text="Exécution du nettoyage après la génération du certificat..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::info::nginx::valid::reload() {
  declare text="La configuration Nginx est valide, rechargement..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::warning::nginx::test::failed() {
  declare text="AVERTISSEMENT: Le test de configuration Nginx a échoué, une intervention manuelle peut être nécessaire"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::info::cleanup::complete() {
  declare text="Nettoyage terminé avec succès"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Messages de Configuration DNS Interactive Lecert
################################################################################
quickbox::lang::lecert::dns::interactive::header() {
  declare text="=== Configuration Interactive des Identifiants DNS ==="
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::header() {
  declare text="Configuration des identifiants DNS Cloudflare..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::options() {
  declare text="Choisissez votre méthode d'authentification:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::option1() {
  declare text="1. Jeton API (Recommandé)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::option2() {
  declare text="2. Clé API Globale + Email"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::api::header() {
  declare text="=== Méthode Jeton API ==="
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::api::step1() {
  declare text="1. Allez dans Tableau de bord Cloudflare > Mon Profil > Jetons API"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::api::step2() {
  declare text="2. Créez un nouveau jeton avec les permissions Zone:DNS:Modifier"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::api::step3() {
  declare text="3. Entrez votre jeton API ci-dessous:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::api::error() {
  declare text="❌ Le jeton API ne peut pas être vide"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::legacy::header() {
  declare text="=== Méthode Clé API Globale ==="
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::legacy::step1() {
  declare text="1. Allez dans Tableau de bord Cloudflare > Mon Profil > Clés API"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::legacy::step2() {
  declare text="2. Copiez votre Clé API Globale et Email"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::legacy::error() {
  declare text="❌ L'email et la Clé API Globale ne peuvent pas être vides"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::invalid() {
  declare text="❌ Option invalide sélectionnée"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::route53::header() {
  declare text="Configuration des identifiants DNS AWS Route53..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::route53::intro() {
  declare text="Vous avez besoin de l'ID de Clé d'Accès AWS et de la Clé d'Accès Secrète avec les permissions Route53:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::route53::error() {
  declare text="❌ L'ID de Clé d'Accès et la Clé d'Accès Secrète ne peuvent pas être vides"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::digitalocean::header() {
  declare text="Configuration des identifiants DNS DigitalOcean..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::digitalocean::step1() {
  declare text="1. Allez dans Tableau de bord DigitalOcean > API > Jetons/Clés"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::digitalocean::step2() {
  declare text="2. Générez un nouveau jeton API avec les permissions d'Écriture"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::digitalocean::error() {
  declare text="❌ Le jeton API ne peut pas être vide"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::not::implemented() {
  declare text="❌ Configuration interactive non implémentée pour ce fournisseur"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::manual::setup() {
  declare text="Veuillez configurer les identifiants manuellement dans /root/.acme.sh/account.conf"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::success() {
  declare text="✅ Identifiants DNS sauvegardés avec succès"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::continue() {
  declare text="Continuation avec l'installation du certificat..."
  quickbox::dashboard::log "${text}"
}

################################################################################
# Messages d'Invite Lecert
################################################################################
quickbox::lang::lecert::prompt::setup::cloudflare() {
  declare text="Voulez-vous configurer les identifiants Cloudflare maintenant? (y/n): "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::prompt::setup::route53() {
  declare text="Voulez-vous configurer les identifiants Route53 maintenant? (y/n): "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::prompt::setup::digitalocean() {
  declare text="Voulez-vous configurer les identifiants DigitalOcean maintenant? (y/n): "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::prompt::cloudflare::method() {
  declare text="Entrez votre choix (1 ou 2): "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::prompt::cloudflare::api_token() {
  declare text="Entrez votre Jeton API Cloudflare: "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::prompt::cloudflare::email() {
  declare text="Entrez votre Email Cloudflare: "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::prompt::cloudflare::global_key() {
  declare text="Entrez votre Clé API Globale Cloudflare: "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::prompt::route53::access_key() {
  declare text="Entrez votre ID de Clé d'Accès AWS: "
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