#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Project Name: QuickBox Pro
# File Name: cli_wsd_fr
# File Description: Fichier de langue française - WSD (What's Streaming Dashboard) CLI
# File Version: 1.0.11
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
# Messages d'erreur
################################################################################
quickbox::lang::software::wsdashboard::ssl::no_domain() {
  declare text="Aucun domaine trouvé. La configuration SSL nécessite un domaine valide."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::certificates_not_found() {
  declare text="Certificats SSL non trouvés aux chemins attendus."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::access_denied() {
  declare text="Accès refusé aux certificats SSL. Vérifier les permissions."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::service_failed() {
  declare text="Le service WSD a échoué à démarrer après la configuration SSL."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::update::no_username() {
  declare text="Nom d'utilisateur requis pour la mise à jour SSL. Utiliser le paramètre -u."
  quickbox::dashboard::log "${text}"
}
quickbox::lang::wsd::error::missing_emby_params() {
  declare text="Paramètres requis manquants pour Emby: -u"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::missing_jellyfin_params() {
  declare text="Paramètres requis manquants pour Jellyfin."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::database_not_found() {
  declare text="Fichier de base de données introuvable à: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::jellyfin_api_failed() {
  declare text="Échec de récupération des données depuis l'API Jellyfin."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::missing_manual_path() {
  declare text="Paramètre de chemin manuel manquant."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::path_not_exist() {
  declare text="Le chemin spécifié n'existe pas: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::missing_empty_path() {
  declare text="Chemin de répertoire manquant pour le vidage."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::directory_not_exist() {
  declare text="Le répertoire n'existe pas: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::timestamp_creation_failed() {
  declare text="Échec de création du fichier horodaté: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::empty_directory_failed() {
  declare text="Échec du vidage du répertoire: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::missing_transcode_id() {
  declare text="ID de transcodage manquant."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::invalid_transcode_id() {
  declare text="Format d'ID de transcodage invalide: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::invalid_mode() {
  declare text="Mode invalide: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::delete_contents_failed() {
  declare text="Échec de suppression du contenu du répertoire de transcodage: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::delete_jellyfin_failed() {
  declare text="Échec de suppression des fichiers de transcodage pour Jellyfin."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::missing_verify_path() {
  declare text="Chemin de transcodage manquant pour la vérification."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::directory_not_empty() {
  declare text="Le répertoire de transcodage n'est pas vide: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::remove_empty_dir_failed() {
  declare text="Échec de suppression du répertoire vide: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::timestamp_not_found() {
  declare text="Fichier horodaté introuvable: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::newer_files_exist() {
  declare text="Des fichiers de transcodage plus récents existent après l'horodatage pour: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::invalid_mode_generic() {
  declare text="Mode invalide ou manquant. Utilisez 'emby' ou 'jellyfin'."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::service_template_not_found() {
  declare text="Fichier modèle de service introuvable: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::copy_template_failed() {
  declare text="Échec de copie du modèle de service vers ${1}."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::generate_service_failed() {
  declare text="Échec de génération du fichier de service pour le mode '${1}'."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::reload_systemd_failed() {
  declare text="Échec du rechargement de systemd."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::enable_service_failed() {
  declare text="Échec d'activation et de démarrage de ${1}."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::stop_service_failed() {
  declare text="Échec d'arrêt de ${1}."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::disable_service_failed() {
  declare text="Échec de désactivation de ${1}."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::remove_service_file_failed() {
  declare text="Échec de suppression du fichier ${1}."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::reload_after_remove_failed() {
  declare text="Échec du rechargement de systemd après suppression de ${1}."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::invalid_transcode_dir() {
  declare text="Répertoire temporaire de transcodage invalide ou manquant: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::clear_standard_failed() {
  declare text="Échec de suppression des transcodages standard: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::clear_livetv_failed() {
  declare text="Échec de suppression des transcodages LiveTV: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::invalid_option() {
  declare text="Option invalide. Utilisez -h pour l'aide."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::mode_required_c() {
  declare text="Le mode (-m) est requis avec l'option -c. Utilisez 'emby' ou 'jellyfin'."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::mode_required_a() {
  declare text="Le mode (-m) est requis avec l'option -a. Utilisez 'emby' ou 'jellyfin'."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::missing_emby_params_generic() {
  declare text="Paramètres requis manquants pour Emby: -u"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::missing_jellyfin_params_generic() {
  declare text="Paramètres requis manquants pour Jellyfin: -U et/ou -k"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::invalid_mode_specified() {
  declare text="Mode spécifié invalide. Utilisez 'emby' ou 'jellyfin'."
  quickbox::dashboard::log "${text}"
}

################################################################################
# Messages d'avertissement
################################################################################
quickbox::lang::wsd::warning::transcode_path_not_found() {
  declare text="TranscodingTempPath introuvable dans les données JSON."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::warning::transcode_path_not_found_api() {
  declare text="TranscodingTempPath introuvable dans la réponse API."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::warning::autoclear_not_enabled() {
  declare text="AutoClearEnabled n'est pas true pour le mode '${1}'. Aucune action requise."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::warning::service_already_active() {
  declare text="${1} est déjà actif pour le mode '${2}'."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::warning::service_not_active() {
  declare text="${1} n'est pas actif. Aucun arrêt nécessaire."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::warning::service_not_enabled() {
  declare text="${1} n'est pas activé. Aucune désactivation nécessaire."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::warning::service_file_not_exist() {
  declare text="Le fichier de service n'existe pas: ${1}. Aucune action requise."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::warning::autoclear_disabled() {
  declare text="L'auto-suppression est désactivée dans la base de données. Sortie de la boucle."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::warning::no_matching_files_standard() {
  declare text="Aucun fichier correspondant trouvé pour les transcodages standard."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::warning::no_matching_files_livetv() {
  declare text="Aucun fichier correspondant trouvé pour les transcodages LiveTV."
  quickbox::dashboard::log "${text}"
}

################################################################################
# Messages d'information
################################################################################
quickbox::lang::software::wsdashboard::ssl::title() {
  declare text="Configuration SSL WSD"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::header() {
  declare text="Configuration des liens symboliques de certificats SSL pour le service WSD..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::setup::start() {
  declare text="Démarrage de la configuration des liens symboliques SSL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::certificates::found() {
  declare text="Certificats SSL trouvés avec succès."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::creating::symlinks() {
  declare text="Création des liens symboliques vers les certificats SSL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::symlinks::created() {
  declare text="Liens symboliques de certificats SSL créés avec succès."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::testing::access() {
  declare text="Test d'accès aux certificats pour l'utilisateur www-data..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::certificate::accessible() {
  declare text="Certificat accessible via lien symbolique."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::private_key::accessible() {
  declare text="Clé privée accessible via lien symbolique."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::env_conf::added() {
  declare text="Configuration SSL ajoutée à env.conf."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::env_conf::exists() {
  declare text="Configuration SSL existe déjà dans env.conf."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::env_conf::updated() {
  declare text="Configuration SSL mise à jour dans env.conf."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::systemd::override::created() {
  declare text="Override systemd créé pour la configuration SSL."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::systemd::override::updated() {
  declare text="Override systemd mis à jour pour la configuration SSL."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::systemd::reloaded() {
  declare text="Daemon systemd rechargé avec succès."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::restarting::service() {
  declare text="Redémarrage du service WSD..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::service::running() {
  declare text="Service WSD fonctionne avec succès."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::testing::connectivity() {
  declare text="Test de connectivité du service..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::https::accessible() {
  declare text="Service accessible via HTTPS."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::https::warning() {
  declare text="Service non accessible via HTTPS (peut nécessiter du temps pour démarrer)."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::http::accessible() {
  declare text="Service accessible via fallback HTTP."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::http::failed() {
  declare text="Service non accessible via HTTP."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::complete() {
  declare text="Configuration des liens symboliques SSL terminée avec succès!"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::remove::title() {
  declare text="Suppression SSL WSD"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::remove::header() {
  declare text="Suppression des liens symboliques de certificats SSL pour le service WSD..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::remove::start() {
  declare text="Démarrage de la suppression des liens symboliques SSL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::remove::symlinks::removed() {
  declare text="Répertoire de liens symboliques SSL supprimé avec succès."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::remove::symlinks::not_found() {
  declare text="Répertoire de liens symboliques SSL non trouvé."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::remove::override::removed() {
  declare text="Override systemd supprimé avec succès."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::remove::complete() {
  declare text="Suppression des liens symboliques SSL terminée avec succès!"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::update::title() {
  declare text="Mise à jour SSL WSD"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::update::header() {
  declare text="Mise à jour des liens symboliques de certificats SSL pour le service WSD..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::update::start() {
  declare text="Démarrage de la mise à jour des liens symboliques SSL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::update::symlinks() {
  declare text="Mise à jour des liens symboliques vers les certificats SSL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::update::complete() {
  declare text="Mise à jour des liens symboliques SSL terminée avec succès!"
  quickbox::dashboard::log "${text}"
}
quickbox::lang::wsd::info::using_default_path() {
  declare text="Utilisation du chemin par défaut pour TranscodingTempPath: "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::manual_path_set() {
  declare text="TranscodingTempPath défini manuellement à: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::timestamp_created() {
  declare text="Fichier horodaté créé/mis à jour: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::emptying_directory() {
  declare text="Vidage du répertoire: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::transcode_dir_removed() {
  declare text="Répertoire de transcodage déjà supprimé: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::generating_service() {
  declare text="Génération de ${1} pour le mode '${2}'."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::reloading_systemd() {
  declare text="Rechargement de systemd et activation de ${1}."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::stopping_service() {
  declare text="Arrêt de ${1}."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::disabling_service() {
  declare text="Désactivation de ${1}."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::removing_service_file() {
  declare text="Suppression du fichier de service: ${1}."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::reloading_systemd_changes() {
  declare text="Rechargement de systemd pour appliquer les changements."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::running_autoclear_standard() {
  declare text="Exécution de l'auto-suppression pour les transcodages standard dans: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::running_autoclear_livetv() {
  declare text="Exécution de l'auto-suppression pour les transcodages LiveTV dans: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::files_to_delete() {
  declare text="Fichiers à supprimer: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::sleeping_minutes() {
  declare text="Pause de ${1} minutes."
  quickbox::dashboard::log "${text}"
}

################################################################################
# Messages de succès
################################################################################
quickbox::lang::wsd::success::directory_emptied() {
  declare text="[SUCCESS] Répertoire vidé avec succès."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::success::transcode_files_deleted() {
  declare text="Fichiers de transcodage supprimés avec succès."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::success::directory_removed() {
  declare text="Répertoire supprimé avec succès: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::success::directory_emptied_removed() {
  declare text="Répertoire vidé et supprimé avec succès: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::success::no_files_since_timestamp() {
  declare text="Aucun fichier préexistant trouvé depuis l'horodatage pour: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::success::service_enabled_started() {
  declare text="${1} activé et démarré avec succès pour le mode '${2}'."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::success::service_stopped_disabled_removed() {
  declare text="${1} arrêté, désactivé et supprimé avec succès."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::success::standard_transcodes_cleared() {
  declare text="Transcodages standard supprimés avec succès."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::success::livetv_transcodes_cleared() {
  declare text="Transcodages LiveTV supprimés avec succès."
  quickbox::dashboard::log "${text}"
}

################################################################################
# Messages d'aide
################################################################################
quickbox::lang::wsd::help::usage() {
  declare text="Utilisation:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::emby_usage() {
  declare text="  Utilisation Emby:
    $0 -u 'nom_utilisateur_admin_service' -m 'emby'"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::jellyfin_usage() {
  declare text="  Utilisation Jellyfin:
    $0 -U 'url_api' -k 'cle_api' -m 'jellyfin'"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::manual_path() {
  declare text="  Définition manuelle du chemin:
    $0 -p 'chemin_manuel'"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::empty_directory() {
  declare text="  Vider le répertoire:
    $0 -e 'chemin_repertoire'"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::verify_directory() {
  declare text="  Vérifier le répertoire:
    $0 -v 'chemin_repertoire'"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::delete_transcode() {
  declare text="  Supprimer les fichiers de transcodage:
    $0 -d 'id_transcode'"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::check_enable() {
  declare text="  Vérifier et activer le service qbwsd si AutoClearEnabled est true:
    $0 -c -m 'emby|jellyfin'"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::disable_remove() {
  declare text="  Désactiver et supprimer le service qbwsd si AutoClearEnabled est false:
    $0 -r"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::run_autoclear() {
  declare text="  Exécuter la logique d'auto-suppression manuellement:
    $0 -a -m 'emby|jellyfin'"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::options() {
  declare text="Options:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::option_u() {
  declare text="  -u  Nom d'utilisateur admin du service (pour Emby)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::option_U() {
  declare text="  -U  URL de l'API Jellyfin"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::option_k() {
  declare text="  -k  Clé de l'API Jellyfin"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::option_m() {
  declare text="  -m  Mode du service (emby ou jellyfin)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::option_p() {
  declare text="  -p  Chemin manuel pour TranscodingTempPath"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::option_e() {
  declare text="  -e  Vider le répertoire de transcodage spécifié"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::option_v() {
  declare text="  -v  Vérifier si le répertoire de transcodage spécifié est vide"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::option_d() {
  declare text="  -d  Supprimer les fichiers de transcodage par ID"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::option_c() {
  declare text="  -c  Vérifier et activer le service qbwsd si AutoClearEnabled est true"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::option_r() {
  declare text="  -r  Désactiver et supprimer le service qbwsd si AutoClearEnabled est false"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::option_a() {
  declare text="  -a  Exécuter la logique d'auto-suppression manuellement"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::option_h() {
  declare text="  -h  Afficher ce message d'aide"
  quickbox::dashboard::log "${text}"
} 

################################################################################
# Messages d'état du service (guarded)
################################################################################
if ! declare -F quickbox::lang::system::service::status::current >/dev/null 2>&1; then
quickbox::lang::system::service::status::current() {
  declare text="Statut actuel du service:"
  quickbox::dashboard::log "${text}"
}
fi

################################################################################
# Messages du service du serveur de journaux
################################################################################
quickbox::lang::software::wsdashboard::service::log_server::started() {
  declare text="Service du serveur de journaux démarré avec succès."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::log_server::failed() {
  declare text="Échec du démarrage du service du serveur de journaux."
  quickbox::dashboard::log "${text}"
}

if ! declare -F quickbox::lang::software::wsdashboard::health::service_running >/dev/null 2>&1; then
quickbox::lang::software::wsdashboard::health::service_running() {
  declare text="Le service fonctionne"
  quickbox::dashboard::log "${text}"
}
fi

if ! declare -F quickbox::lang::software::wsdashboard::health::service_not_running >/dev/null 2>&1; then
quickbox::lang::software::wsdashboard::health::service_not_running() {
  declare text="Le service ne fonctionne pas"
  quickbox::dashboard::log "${text}"
}
fi