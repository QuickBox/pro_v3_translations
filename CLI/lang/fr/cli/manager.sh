#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Nom du Projet: QuickBox Pro
# Nom du Fichier: cli_manager_fr
# Description du Fichier: Fichier de langue française - Gestionnaire de Logiciels
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
# QB Manager - Gestion des Logiciels
################################################################################

### Opérations de Sauvegarde
quickbox::lang::backup::configf() {
  declare text="le fichier de configuration pour ${software_name} est maintenant sauvegardé."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::backup::configf::error() {
  declare text="le fichier de configuration ${softwareConf} n'existe pas."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::backup::configf::success() {
  declare text="le fichier de configuration a été sauvegardé."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::backup::installdir::error() {
  declare text="le répertoire d'installation de ${software_title} n'existe pas."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::backup::installdir() {
  declare text="le répertoire d'installation pour ${software_title} (${backup_version}) est maintenant sauvegardé."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::backup::configdir() {
  declare text="le répertoire de configuration pour ${software_title} est maintenant sauvegardé."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::backup::installdir::success() {
  backup_version="$(tput setaf 5)${backup_version}$(tput setaf 2)"
  declare text="${software_title} (${backup_version}) a été sauvegardé."
  quickbox::dashboard::log "${text}$(tput sgr0)"
}

### Opérations de Restauration
quickbox::lang::restore::configf::error() {
  declare text="le fichier de sauvegarde ${backupConf} n'existe pas."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::restore::configf::success() {
  declare text="le fichier de sauvegarde a été restauré."
  quickbox::dashboard::log "${text}"
}

### Opérations par Défaut
quickbox::lang::default::configf::error() {
  declare text="le fichier de configuration par défaut ${defaultConf} n'existe pas."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::default::configf::success() {
  declare text="le fichier de configuration par défaut a été restauré."
  quickbox::dashboard::log "${text}"
}

### Opérations de Retour Arrière
quickbox::lang::rollback::installdir::error() {
  declare text="le répertoire d'installation de ${software_title} n'existe pas."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::rollback::selection::version() {
  declare text="version:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::rollback::selection::date() {
  declare text="date:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::rollback::selection() {
  declare text="sélectionnez un numéro dans la liste ci-dessous pour revenir
à une version précédente de ${software_title}:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::rollback::selection::invalid() {
  declare text="sélection invalide. veuillez réessayer."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::rollback::software::error() {
  declare text="la sauvegarde de l'application ${software_title} n'existe pas."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::rollback::config::error() {
  declare text="la sauvegarde de configuration de ${software_title} n'existe pas."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::rollback::selection::display() {
  version="$(tput setaf 5)${version}$(tput setaf 7)"
  app_package="$(tput setaf 5)${app_package}$(tput setaf 7)"
  config_package="$(tput setaf 5)${config_package}$(tput setaf 7)"
  declare text="vous avez sélectionné la version ${version} pour ${software_title}.
paquet d'application: ${app_package}
paquet de configuration: ${config_package}"
  quickbox::dashboard::log "${text}$(tput sgr0)"
}

quickbox::lang::rollback::selection::confirm() {
  declare text="êtes-vous sûr de vouloir procéder au retour arrière? (y/n)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::rollback::cancelled() {
  declare text="retour arrière annulé."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::rollback::continue() {
  version="$(tput setaf 5)${version}$(tput setaf 7)"
  declare text="${software_title} est maintenant remis à la version ${version}."
  quickbox::dashboard::log "${text}$(tput sgr0)"
}

quickbox::lang::rollback::complete() {
  version="$(tput setaf 5)${version}$(tput setaf 2)"
  declare text="${software_title} (${version}) a été remis."
  quickbox::dashboard::log "${text}$(tput sgr0)"
}

### Opérations de Suppression
quickbox::lang::delete::selection::version() {
  declare text="version:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::delete::selection::date() {
  declare text="date:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::delete::selection() {
  declare text="sélectionnez un numéro dans la liste ci-dessous pour supprimer
une sauvegarde précédente de ${software_title}:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::delete::selection::invalid() {
  declare text="sélection invalide. veuillez réessayer."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::delete::software::error() {
  declare text="la sauvegarde de l'application ${software_title} n'existe pas."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::delete::config::error() {
  declare text="la sauvegarde de configuration de ${software_title} n'existe pas."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::delete::selection::display() {
  version="$(tput setaf 5)${version}$(tput setaf 7)"
  app_package="$(tput setaf 5)${app_package}$(tput setaf 7)"
  config_package="$(tput setaf 5)${config_package}$(tput setaf 7)"
  declare text="vous avez sélectionné la version ${version} pour ${software_title}.
paquet d'application: ${app_package}
paquet de configuration: ${config_package}"
  quickbox::dashboard::log "${text}$(tput sgr0)"
}

quickbox::lang::delete::selection::confirm() {
  declare text="êtes-vous sûr de vouloir procéder à la suppression? (y/n)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::delete::cancelled() {
  declare text="suppression de sauvegarde annulée."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::delete::continue() {
  version="$(tput setaf 5)${version}$(tput setaf 7)"
  declare text="la sauvegarde de ${software_title} (${version}) est maintenant supprimée."
  quickbox::dashboard::log "${text}$(tput sgr0)"
}

quickbox::lang::delete::complete() {
  version="$(tput setaf 5)${version}$(tput setaf 2)"
  declare text="la sauvegarde de ${software_title} (${version}) a été supprimée."
  quickbox::dashboard::log "${text}$(tput sgr0)"
} 