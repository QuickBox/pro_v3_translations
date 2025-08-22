#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Nom du Projet: QuickBox Pro
# Nom du Fichier: cli_core_fr
# Description du Fichier: Fichier de langue française - Opérations Système de Base
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
# Fonction de Journalisation du Tableau de Bord de Base
################################################################################
quickbox::dashboard::log() {
  admin_name="$(quickbox::database "SELECT username FROM user_information WHERE user_level = '10';")"
  if [[ ! -f "/srv/quickbox/logs/dashboard" ]]; then
    mkdir -p /srv/quickbox/logs
    touch /srv/quickbox/logs/dashboard
    chown www-data:www-data /srv/quickbox/logs/dashboard
  fi
  if [[ ! -f "/srv/quickbox/logs/${username:-${admin_name}}.dashboard" ]]; then
    mkdir -p /srv/quickbox/logs
    touch "/srv/quickbox/logs/${username:-${admin_name}}.dashboard"
    chown www-data:www-data "/srv/quickbox/logs/${username:-${admin_name}}.dashboard"
  fi
  if [[ -n ${username} ]]; then
    echo "${1:-null}" | sed -z "s/\n/\n<br>/" >"/srv/quickbox/logs/${username:-}.dashboard"
  else
    echo "${1:-null}" | sed -z "s/\n/\n<br>/" >"/srv/quickbox/logs/${admin_name:-}.dashboard"
  fi
  echo "${1:-null}"
}

################################################################################
# Opérations de Nettoyage
################################################################################
quickbox::lang::clean::memory() {
  declare text="nettoyage du cache mémoire..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::clean::rclone() {
  declare text="nettoyage du journal de téléchargement rclone..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::clean::dashboard() {
  declare text="en attente de la réponse du système..."
  quickbox::dashboard::log "${text}"
}

################################################################################
# Gestion des Verrous
################################################################################
quickbox::lang::lock::handle() {
  declare text="${quickbox_lock} est actuellement en cours d'exécution
le processus reprendra une fois que ${quickbox_lock} sera terminé"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lock::remove() {
  declare text="suppression des verrous de logiciels..."
  quickbox::dashboard::log "${text}"
}

################################################################################
# Opérations Diverses
################################################################################
quickbox::lang::unknown::option() {
  declare text="${2} Option inconnue: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::username::specified() {
  declare text="erreur: nom d'utilisateur non spécifié"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::directory::noexist() {
  declare text="le répertoire requis n'existe pas..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::directory::nomove() {
  declare text="impossible de se déplacer vers $1..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::package::fail() {
  declare text="impossible d'installer un paquet requis $1..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::database() {
  declare text="mise à jour de la base de données..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::trackers::disable() {
  declare text="désactivation des trackers publics..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::trackers::enable() {
  declare text="activation des trackers publics..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::run_via_qb() {
  declare text="erreur[1]: ${script_name} doit être exécuté via qb"
  quickbox::dashboard::log "${text}"
}
