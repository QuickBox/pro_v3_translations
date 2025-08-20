#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Nom du Projet: QuickBox Pro
# Nom du Fichier: cli_software_fr
# Description du Fichier: Fichier de langue française - Gestion des Logiciels
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
# Opérations d'Installation
################################################################################
quickbox::lang::install::header() {
  declare text="${software_title} va maintenant être installé
ce processus peut prendre quelques minutes..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::rutorrent::header() {
  rtorrent_count=$(quickbox::software::count rtorrent)
  if [[ ${rtorrent_count} -eq 0 ]]; then
    declare text="il semble que rTorrent ne soit pas installé

rTorrent 0.9.8 va maintenant s'installer, veuillez patienter car cela peut
prendre quelques minutes (selon les spécifications du système) pour s'installer"
  else
    declare text="${software_title} va maintenant être installé
ce processus peut prendre quelques minutes..."
  fi
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::sources::header() {
  declare text="ajout de clés et sources supplémentaires pour ${software_title}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::dependencies::header() {
  declare text="installation des dépendances de ${software_title}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::build::header() {
  declare text="compilation de ${software_title}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::mktorrent::header() {
  declare text="compilation de mktorrent..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::xmlrpc::header() {
  declare text="compilation de xmlrpc-c..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::libtorrent::header() {
  declare text="compilation de libtorrent..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::rtorrent::header() {
  declare text="compilation de rtorrent..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::certificate::header() {
  declare text="création du certificat ssl pour ${d}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::configure::lecert::header() {
  declare text="configuration de NGinx pour Let's Encrypt..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::configure::header() {
  declare text="configuration de ${software_title}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::backup::header() {
  declare text="sauvegarde de la configuration de ${software_title}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::start::header() {
  declare text="démarrage de ${software_title}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::complete::header() {
  declare text="installation de ${software_title} terminée"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Opérations de Réinstallation
################################################################################
quickbox::lang::reinstall::header() {
  declare text="${software_title} va maintenant être réinstallé
ce processus peut prendre quelques minutes..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::reinstall::complete::header() {
  declare text="réinstallation de ${software_title} terminée"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Opérations de Suppression
################################################################################
quickbox::lang::remove::header() {
  declare text="${software_title} va maintenant être supprimé
ce processus peut prendre quelques minutes..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::remove::stop::header() {
  declare text="arrêt de ${software_title}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::remove::dependencies::header() {
  declare text="suppression des dépendances de ${software_title}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::remove::files::header() {
  declare text="suppression des fichiers de ${software_title}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::remove::complete::header() {
  declare text="suppression de ${software_title} terminée"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Opérations de Mise à Jour
################################################################################
quickbox::lang::update::header() {
  declare text="${software_title} va maintenant être mis à jour
ce processus peut prendre quelques minutes..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::files::header() {
  declare text="mise à jour de ${software_title}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::complete::header() {
  declare text="mise à jour de ${software_title} terminée"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::files::admin() {
  declare text="doit être connecté en tant qu'administrateur pour mettre à jour ${software_title}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::jellyfin::ffmpeg() {
  declare text="mise à jour de ffmpeg pour Jellyfin..."
  quickbox::dashboard::log "${text}"
}

################################################################################
# Informations d'Accès aux Logiciels
################################################################################
quickbox::lang::software::access() {
  declare text="accédez à ${software_title} à:
${quickbox_web_root}${software_name}
${software_title} installé sur le port: ${software_web_port}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::mu::access() {
  declare text="accédez à ${software_title} à:
${quickbox_web_root}${username}/${software_name}
${software_title} installé sur le port: ${software_web_port}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::admin::access() {
  declare text="accédez à ${software_title} à:
${quickbox_web_root}${admin_name}/${software_name}
${software_title} installé sur le port: ${software_web_port}"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Messages Spécifiques à WSDashboard
################################################################################
quickbox::lang::software::wsdashboard::neither_installed() {
  declare text="Ni Emby ni Jellyfin n'est installé. Processus ignoré."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::api_error() {
  declare text="erreur: impossible d'obtenir zip_url depuis l'API central.quickbox.io."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::download_error() {
  declare text="erreur: impossible de télécharger l'archive du plugin WSD."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::unzip_error() {
  declare text="erreur: impossible de décompresser l'archive du plugin WSD."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::missing_directory() {
  declare text="erreur: répertoire requis ${req_dir} manquant dans l'archive du plugin."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::missing_directory_warning() {
  declare text="avertissement: répertoire ${1} non trouvé dans l'archive du plugin (continuation pour les installations plus anciennes)."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::move_backend_error() {
  declare text="Échec du déplacement du répertoire backend! Annulation de la mise à jour."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::move_backups_error() {
  declare text="Échec du déplacement du répertoire backups! Annulation de la mise à jour."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::move_public_error() {
  declare text="Échec du déplacement du répertoire public! Annulation de la mise à jour."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::move_logs_error() {
  declare text="Échec du déplacement du répertoire logs! Annulation de la mise à jour."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::move_scripts_error() {
  declare text="Échec du déplacement du répertoire scripts! Annulation de la mise à jour."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::move_version_error() {
  declare text="Échec du déplacement de version.txt! Annulation de la mise à jour."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::move_requirements_error() {
  declare text="Échec du déplacement de requirements.txt! Annulation de la mise à jour."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::move_package_error() {
  declare text="Échec du déplacement de package.json! Annulation de la mise à jour."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::move_env_error() {
  declare text="Échec du déplacement de env.conf! Annulation de la mise à jour."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::move_changelog_error() {
  declare text="Échec du déplacement de CHANGELOG.md! Annulation de la mise à jour."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::move_readme_error() {
  declare text="Échec du déplacement de README.md! Annulation de la mise à jour."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::complete() {
  declare text="Récupération et extraction du plugin WSD terminées."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::up_to_date() {
  declare text="Le plugin WSD est à jour; récupération non requise."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::start::success() {
  declare text="Service démarré avec succès. Exécution du contrôle de santé..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::health::passed() {
  declare text="Contrôle de santé réussi. Le service fonctionne de manière optimale."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::health::warnings() {
  declare text="Contrôle de santé terminé avec des avertissements. Vérifiez les logs si nécessaire."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::start::failed() {
  declare text="Le service n'a pas pu démarrer. Vérification du statut..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::fix::attempting() {
  declare text="Tentative de correction des problèmes courants..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::update::success() {
  declare text="Service mis à jour avec succès. Exécution du contrôle de santé..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::update::failed() {
  declare text="Le service n'a pas pu démarrer après la mise à jour. Vérification du statut..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::maintenance::header() {
  declare text="Exécution de la maintenance et surveillance du service WSD..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::maintenance::service_not_found() {
  declare text="Service non trouvé. Veuillez d'abord installer WSD."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::maintenance::completed_success() {
  declare text="Maintenance du service terminée avec succès."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::maintenance::completed_warnings() {
  declare text="Maintenance du service terminée avec des avertissements."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::maintenance::complete() {
  declare text="Maintenance terminée. Utilisez 'qbwsd-health-check.sh --verbose' pour des diagnostics détaillés."
  quickbox::dashboard::log "${text}"
}

################################################################################
# Messages de Configuration d'Environnement WSDashboard
################################################################################
quickbox::lang::software::wsdashboard::env::current_port_empty() {
  declare text="erreur: current_port est vide ou zéro, impossible de procéder à la mise à jour d'env.conf."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::env::streaming_app_empty() {
  declare text="erreur: streaming_application est vide, impossible de procéder à la mise à jour d'env.conf."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::env::daemon_port_empty() {
  declare text="erreur: software_daemon_port est vide ou zéro, impossible de procéder à la mise à jour d'env.conf."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::env::boilerplate_remaining() {
  declare text="avertissement: certains espaces réservés boilerplate restent dans env.conf, révision manuelle recommandée."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::env::update_success() {
  declare text="env.conf mis à jour avec succès: app=${1}, port=${2}, log_port=${3}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::env::backup_created() {
  declare text="sauvegarde créée à: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::env::boilerplate_detected() {
  declare text="avertissement: espaces réservés boilerplate détectés dans env.conf, certaines valeurs peuvent nécessiter une configuration manuelle."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::maintenance::title() {
  declare text="Maintenance du Service WSD"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::stop::starting() {
  declare text="Arrêt du service ${software_service_name}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::stop::force() {
  declare text="Service encore actif, arrêt forcé..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::stop::cleanup() {
  declare text="Nettoyage des processus Node.js restants..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::stop::warning() {
  declare text="Attention: Le service peut encore fonctionner, continuation avec précaution..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::stop::success() {
  declare text="Service arrêté avec succès"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::start::starting() {
  declare text="Démarrage du service ${software_service_name}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::start::success_attempt() {
  declare text="Service démarré avec succès à la tentative ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::start::retry() {
  declare text="Échec du démarrage du service, nouvelle tentative (tentative ${1})..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::start::command_failed() {
  declare text="Échec de la commande de démarrage du service, nouvelle tentative..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::log_server::started() {
  declare text="Serveur de logs démarré avec succès"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::log_server::failed() {
  declare text="Échec du démarrage du serveur de logs"
  quickbox::dashboard::log "${text}"
}



################################################################################
# Messages de Commandes Système
################################################################################
quickbox::lang::system::health::check::running() {
  declare text="Exécution du contrôle de santé complet..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::service::status::current() {
  declare text="Statut actuel du service:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::service::logs::recent() {
  declare text="Logs récents du service:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::nginx::test() {
  declare text="Test de la configuration nginx..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::nginx::reload() {
  declare text="Rechargement du service nginx..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::daemon::reload() {
  declare text="Rechargement du daemon systemd..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::service::enable() {
  declare text="Activation du service ${software_service_name}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::service::start() {
  declare text="Démarrage du service ${software_service_name}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::service::stop() {
  declare text="Arrêt du service ${software_service_name}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::service::disable() {
  declare text="Désactivation du service ${software_service_name}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::file::copy() {
  declare text="Copie de ${1} vers ${2}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::pip::install() {
  declare text="Installation des packages Python..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::npm::install() {
  declare text="Installation des packages Node.js..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::enhanced::files::removed() {
  declare text="Fichiers de service améliorés supprimés avec succès"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Messages de Vérification de Santé WSDashboard
################################################################################
quickbox::lang::software::wsdashboard::health::usage() {
  declare text="Utilisation: qbwsd-health-check.sh [--verbose] [--fix]
  --verbose  Activer la sortie détaillée
  --fix      Corriger automatiquement les problèmes courants"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::unknown_option() {
  declare text="Option inconnue: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::root_warning() {
  declare text="Exécution en tant que root - certaines vérifications peuvent ne pas fonctionner correctement"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::starting_check() {
  declare text="Démarrage de la vérification de santé pour ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::checking_status() {
  declare text="Vérification du statut du service..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::service_running() {
  declare text="Le service fonctionne"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::service_not_running() {
  declare text="Le service ne fonctionne pas"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::checking_config() {
  declare text="Vérification de la configuration du service..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::config_file_missing() {
  declare text="Fichier de configuration du service introuvable: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::root_user_warning() {
  declare text="Le service est configuré pour fonctionner en tant que root (risque de sécurité)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::no_restart_policy() {
  declare text="Aucune politique de redémarrage configurée"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::config_valid() {
  declare text="Le fichier de configuration du service existe et est lisible"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::checking_dependencies() {
  declare text="Vérification des dépendances..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::file_missing() {
  declare text="Fichier requis manquant: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::file_found() {
  declare text="Trouvé: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::directory_missing() {
  declare text="Répertoire requis manquant: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::directory_found() {
  declare text="Répertoire trouvé: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::dependencies_missing() {
  declare text="Dépendances manquantes: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::dependencies_available() {
  declare text="Toutes les dépendances sont disponibles"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::checking_resources() {
  declare text="Vérification de l'utilisation des ressources..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::service_not_running_skip() {
  declare text="Service non actif, vérification des ressources ignorée"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::pid_not_found() {
  declare text="Impossible de déterminer le PID du service"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::memory_usage() {
  declare text="Utilisation de la mémoire: ${1}MB"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::high_memory_usage() {
  declare text="Utilisation élevée de la mémoire détectée: ${1}MB"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::cpu_usage() {
  declare text="Utilisation CPU: ${1}%"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::high_cpu_usage() {
  declare text="Utilisation élevée du CPU détectée: ${1}%"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::checking_logs() {
  declare text="Vérification des logs récents..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::recent_errors_found() {
  declare text="${1} messages d'erreur trouvés dans la dernière heure"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::no_recent_errors() {
  declare text="Aucun message d'erreur récent trouvé"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::log_file_size() {
  declare text="Fichier log ${1}: ${2}MB"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::large_log_file() {
  declare text="Fichier log volumineux détecté: ${1} (${2}MB)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::log_file_not_found() {
  declare text="Fichier log introuvable: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::checking_database() {
  declare text="Vérification de la connectivité de la base de données..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::database_file_missing() {
  declare text="Fichier de base de données introuvable: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::database_accessible() {
  declare text="La base de données est accessible et contient des tables"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::active_sessions() {
  declare text="Sessions actives dans la dernière heure: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::database_corrupted() {
  declare text="La base de données n'est pas accessible ou est corrompue"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::sqlite3_not_available() {
  declare text="sqlite3 non disponible, vérifications de base de données ignorées"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::attempting_fixes() {
  declare text="Tentative de correction des problèmes courants..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::fixing_permissions() {
  declare text="Correction des permissions de l'environnement virtuel Node.js..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::creating_log_directory() {
  declare text="Création du répertoire de logs manquant..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::attempting_restart() {
  declare text="Tentative de redémarrage du service..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::restart_successful() {
  declare text="Service redémarré avec succès"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::restart_failed() {
  declare text="Échec du redémarrage du service"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::check_completed_success() {
  declare text="Vérification de santé terminée avec succès"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::check_completed_issues() {
  declare text="Vérification de santé terminée avec des problèmes"
  quickbox::dashboard::log "${text}"
} 