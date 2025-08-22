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

quickbox::lang::system::enhanced::files::removed() {
  declare text="Fichiers de service améliorés supprimés avec succès"
  quickbox::dashboard::log "${text}"
}
