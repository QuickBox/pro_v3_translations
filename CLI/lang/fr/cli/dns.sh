#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Nom du Projet: QuickBox Pro
# Nom du Fichier: cli_dns_fr
# Description du Fichier: Fichier de langue française - Gestion des Identifiants DNS
# Version du Fichier: 1.0.1
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
# Messages de Statut des Identifiants DNS
################################################################################
quickbox::lang::dns::credentials::status::header() {
  declare text="=== Statut des Identifiants DNS ==="
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::no_credentials() {
  declare text="Aucun identifiant DNS trouvé - account.conf n'existe pas"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::setup_help() {
  declare text="Utilisez 'qb dns-setup <fournisseur>' pour configurer les identifiants pour un fournisseur spécifique"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::configured_providers() {
  declare text="Fournisseurs DNS configurés:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::provider_count() {
  declare text="${provider}: ${count} identifiant(s)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::total_credentials() {
  declare text="Total des identifiants trouvés: ${total_credentials}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::check_help() {
  declare text="Pour vérifier les identifiants d'un fournisseur spécifique:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::check_command() {
  declare text="  qb dns-credentials check <fournisseur>"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::setup_help_header() {
  declare text="Pour configurer des fournisseurs supplémentaires:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::setup_command() {
  declare text="  qb dns-setup <fournisseur>"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::no_providers() {
  declare text="Aucun identifiant DNS trouvé dans account.conf"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::setup_instructions() {
  declare text="Pour configurer les identifiants DNS:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::available_providers() {
  declare text="Fournisseurs disponibles:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::provider_list() {
  declare text="  cloudflare, route53, digitalocean, namecheap, godaddy, linode, ovh, vultr, gandi, dnsimple, hurricane, azure, gcp, ionos"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Messages d'Erreur des Identifiants DNS
################################################################################
quickbox::lang::dns::credentials::error::no_provider() {
  declare text="ERREUR: Aucun fournisseur DNS spécifié"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::error::unknown_command() {
  declare text="ERREUR: Commande dns-credentials inconnue: ${task}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::error::invalid_provider() {
  declare text="ERREUR: Fournisseur DNS invalide: ${provider}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::error::temp_file_not_found() {
  declare text="ERREUR: Fichier d'identifiants temporaire non trouvé ou non lisible: ${temp_file}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::error::no_credentials_in_file() {
  declare text="ERREUR: Aucun identifiant trouvé dans le fichier temporaire"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::error::write_failed() {
  declare text="ERREUR: Échec de l'écriture des identifiants dans account.conf"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::error::account_conf_not_found() {
  declare text="ERREUR: Fichier de configuration de compte non trouvé: ${account_conf}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::error::no_credentials_for_provider() {
  declare text="ERREUR: Aucun identifiant trouvé pour le fournisseur: ${provider}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::error::setup_invalid_provider() {
  declare text="ERREUR: Fournisseur DNS invalide: ${provider}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::error::setup_show_available() {
  declare text="Exécutez 'qb dns-setup' pour voir les fournisseurs disponibles."
  quickbox::dashboard::log "${text}"
}

################################################################################
# Messages de Succès des Identifiants DNS
################################################################################
quickbox::lang::dns::credentials::success::written() {
  declare text="SUCCÈS: Identifiants DNS pour ${provider} écrits dans account.conf"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::success::test_valid() {
  declare text="SUCCÈS: Configuration du fournisseur DNS ${provider} trouvée et semble valide"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::success::test_note() {
  declare text="Note: Ceci valide seulement que les identifiants existent. La validation DNS complète nécessite un domaine de test."
  quickbox::dashboard::log "${text}"
}

################################################################################
# Messages d'Utilisation des Identifiants DNS
################################################################################
quickbox::lang::dns::credentials::usage::check() {
  declare text="Utilisation: qb dns-credentials check <fournisseur>"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::usage::general() {
  declare text="Utilisation: qb dns-credentials <commande> [fournisseur]"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::usage::available_commands() {
  declare text="Commandes disponibles: check, status"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::usage::setup() {
  declare text="Utilisation: qb dns-setup <fournisseur>"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Messages de Configuration des Identifiants DNS
################################################################################
quickbox::lang::dns::credentials::setup::header() {
  declare text="=== Configuration des Identifiants DNS ==="
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::available_providers() {
  declare text="Fournisseurs DNS disponibles:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::provider_cloudflare() {
  declare text="  cloudflare (cf)     - DNS Cloudflare"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::provider_route53() {
  declare text="  route53             - AWS Route53"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::provider_digitalocean() {
  declare text="  digitalocean (do)   - DNS DigitalOcean"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::provider_godaddy() {
  declare text="  godaddy             - DNS GoDaddy"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::provider_namecheap() {
  declare text="  namecheap           - DNS Namecheap"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::provider_linode() {
  declare text="  linode              - DNS Linode"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::provider_ovh() {
  declare text="  ovh                 - DNS OVH"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::provider_vultr() {
  declare text="  vultr               - DNS Vultr"
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
  declare text="  azure               - DNS Azure"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::provider_gcp() {
  declare text="  gcp                 - DNS Google Cloud"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::provider_ionos() {
  declare text="  ionos               - DNS IONOS"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::example() {
  declare text="Exemple: qb dns-setup cloudflare"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::fallback_header() {
  declare text="=== Configuration des Identifiants DNS pour ${provider} ==="
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::fallback_referral() {
  declare text="Veuillez consulter la documentation acme.sh pour la configuration de ${provider}:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::fallback_url() {
  declare text="https://github.com/acmesh-official/acme.sh/wiki/dnsapi#dns_${provider}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::fallback_test() {
  declare text="Après avoir configuré les identifiants, vous pouvez les tester avec:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::fallback_test_command() {
  declare text="qb dns-test ${provider}"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Messages de Sauvegarde des Identifiants DNS
################################################################################
quickbox::lang::dns::credentials::backup::restored() {
  declare text="Configuration de sauvegarde restaurée"
  quickbox::dashboard::log "${text}"
} 