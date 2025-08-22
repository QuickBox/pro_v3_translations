#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Project Name: QuickBox Pro
# File Name: cli_wsd_fr
# File Description: French language file - WSD (What's Streaming Dashboard) CLI
# File Version: 1.0.77
#
# Save Tasks:
# Automated_Versioning: true
# Automated_Formatting: true
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
# Service Status Messages (guarded)
################################################################################
quickbox::lang::system::service::status::current() {
  declare text="Statut actuel du service :"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Installation Requirements
################################################################################
quickbox::lang::wsd::neither_installed() {
  declare text="Ni Emby ni Jellyfin n'est installé. WSDashboard nécessite l'une de ces applications de streaming pour fonctionner."
  quickbox::dashboard::log "${text}"
}

################################################################################
# Port Management
################################################################################
quickbox::lang::wsd::port::fallback_used() {
  declare text="Utilisation du port de secours ${1} car aucun autre port n'était disponible"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Environment Configuration
################################################################################
quickbox::lang::wsd::env::port_recovered_from_nginx() {
  declare text="Port récupéré depuis la configuration nginx : ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::env::port_using_available() {
  declare text="Utilisation du port disponible : ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::env::current_port_empty() {
  declare text="Le port actuel est vide ou nul, impossible de procéder à la mise à jour d'env.conf"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::env::streaming_app_empty() {
  declare text="L'application de streaming est vide, impossible de procéder à la mise à jour d'env.conf"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::env::boilerplate_remaining() {
  declare text="Certains modèles de base restent dans env.conf"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::env::update_success() {
  declare text="Configuration de l'environnement mise à jour avec succès : App=${1}, Port=${2}, LogPort=${3}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::env::backup_created() {
  declare text="Sauvegarde créée à : ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::env::boilerplate_detected() {
  declare text="Modèles de base détectés dans env.conf"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Nginx Configuration
################################################################################
quickbox::lang::wsd::nginx::config_missing() {
  declare text="Fichier de configuration nginx manquant, impossible de valider"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::nginx::port_updated() {
  declare text="Port nginx mis à jour de ${1} vers ${2}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::nginx::config_invalid() {
  declare text="La configuration nginx est invalide"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Plugin Management
################################################################################
quickbox::lang::wsd::plugin::fetch::api_error() {
  declare text="Erreur API survenue lors de la récupération du plugin"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::plugin::fetch::download_error() {
  declare text="Erreur de téléchargement survenue lors de la récupération du plugin"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::plugin::fetch::unzip_error() {
  declare text="Erreur de décompression survenue lors de la récupération du plugin"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::plugin::fetch::missing_directory() {
  declare text="Répertoire requis manquant dans l'archive du plugin"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::plugin::fetch::missing_directory_warning() {
  declare text="Avertissement : répertoire ${1} non trouvé dans l'archive du plugin (continuation pour les installations plus anciennes)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::plugin::fetch::complete() {
  declare text="Récupération et extraction du plugin WSD terminées"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::plugin::fetch::up_to_date() {
  declare text="Le plugin WSD est à jour"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Virtual Environment
################################################################################
quickbox::lang::wsd::virtual_env::nodeenv_failed() {
  declare text="Échec de l'installation de nodeenv dans l'environnement virtuel Python : ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::virtual_env::nodejs_failed() {
  declare text="Échec de la création de l'environnement virtuel Node.js : ${1}"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Service Management
################################################################################
quickbox::lang::wsd::service::start::success() {
  declare text="Service démarré avec succès"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::start::failed() {
  declare text="Le service a échoué au démarrage"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::start::starting() {
  declare text="Démarrage du service..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::start::success_attempt() {
  declare text="Service démarré avec succès à la tentative ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::start::retry() {
  declare text="Nouvelle tentative de démarrage du service (tentative ${1})"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::start::command_failed() {
  declare text="La commande de démarrage du service a échoué"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::health::passed() {
  declare text="Vérification de santé réussie"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::health::warnings() {
  declare text="Vérification de santé terminée avec des avertissements"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::fix::attempting() {
  declare text="Tentative de résolution des problèmes du service"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::stop::starting() {
  declare text="Arrêt du service..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::stop::force() {
  declare text="Arrêt forcé du service"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::stop::cleanup() {
  declare text="Nettoyage des processus restants"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::stop::warning() {
  declare text="Avertissement d'arrêt du service"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::stop::success() {
  declare text="Service arrêté avec succès"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::log_server::started() {
  declare text="Service serveur de logs démarré avec succès"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::log_server::failed() {
  declare text="Le service serveur de logs a échoué au démarrage"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::update::success() {
  declare text="Service mis à jour avec succès"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::update::failed() {
  declare text="La mise à jour du service a échoué"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Access Information
################################################################################
quickbox::lang::wsd::access() {
  declare text="Accédez à WSDashboard à : http://localhost:${software_daemon_port}"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Maintenance
################################################################################
quickbox::lang::wsd::maintenance::header() {
  declare text="Mode maintenance WSDashboard"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::maintenance::title() {
  declare text="Maintenance WSDashboard"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::maintenance::service_not_found() {
  declare text="Service WSDashboard non trouvé"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::maintenance::completed_success() {
  declare text="Maintenance terminée avec succès"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::maintenance::completed_warnings() {
  declare text="Maintenance terminée avec des avertissements"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::maintenance::complete() {
  declare text="Maintenance terminée"
  quickbox::dashboard::log "${text}"
}
