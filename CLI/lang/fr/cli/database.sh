#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Nom du Projet: QuickBox Pro
# Nom du Fichier: cli_database_fr
# Description du Fichier: Fichier de langue française - Gestion de Base de Données
# Version du Fichier: 1.0.2
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
# Installation de Base de Données - MySQL
################################################################################
quickbox::lang::db::install::prompt() {
  declare text="MySQL n'est pas installé. Voulez-vous l'installer? [y/N]:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::apt() {
  declare text="Mise à jour d'APT..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql_apt() {
  declare text="Téléchargement de la configuration APT MySQL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql_apt::fail() {
  declare text="Échec du téléchargement de la configuration APT MySQL."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql_apt::install() {
  declare text="Installation de la configuration APT MySQL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql_apt::install::fail() {
  declare text="Échec de l'installation de la configuration APT MySQL."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql() {
  declare text="Installation de MySQL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::fail() {
  declare text="Échec de l'installation de MySQL."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::start::fail() {
  declare text="Échec du démarrage de MySQL."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::enable::fail() {
  declare text="Échec de l'activation de MySQL."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::success() {
  declare text="MySQL a été installé."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::installed() {
  declare text="MySQL est déjà installé, continuation avec la configuration."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::config() {
  declare text="Mise à jour de la configuration MySQL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::config::backup() {
  declare text="Le fichier mysqld.cnf actuel a été sauvegardé vers mysqld.cnf.backup."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::config::write() {
  declare text="[*] Configuration de MySQL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::config::write::fail() {
  declare text="[✗] Échec de l'écriture de la configuration MySQL."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::privileges() {
  declare text="Configuration des privilèges MySQL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::privileges::fail() {
  declare text="Échec de l'écriture des privilèges MySQL."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::client() {
  declare text="Configuration du client MySQL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::client::fail() {
  declare text="Échec de l'écriture de la configuration client MySQL."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::reload() {
  declare text="Rechargement du démon systemctl..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::reload::fail() {
  declare text="Échec du rechargement du démon systemctl."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::enable() {
  declare text="Activation de MySQL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::restart() {
  declare text="Redémarrage de MySQL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::restart::fail() {
  declare text="Échec du redémarrage de MySQL."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::user() {
  declare text="Création de l'utilisateur MySQL ${mysql_user}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::user::fail() {
  declare text="Échec de la création de l'utilisateur MySQL."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::grant() {
  declare text="Octroi des privilèges à l'utilisateur MySQL ${mysql_user}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::grant::fail() {
  declare text="Échec de l'octroi des privilèges à l'utilisateur MySQL."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::flush() {
  declare text="Vidage des privilèges..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::flush::fail() {
  declare text="Échec du vidage des privilèges."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::convert() {
  declare text="Conversion de la base de données vers MySQL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::convert::success() {
  declare text="La base de données a été convertie vers MySQL."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::remove() {
  declare text="Voulez-vous supprimer la base de données SQLite? [y/N]:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::remove::fail() {
  declare text="Échec de la désactivation de SQLite dans PHP."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::complete() {
  declare text="MySQL a été configuré."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::details() {
  declare text="Détails de Connexion MySQL:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::connection::details() {
  declare text="Nom d'utilisateur: ${mysql_user}
Mot de passe: ${mysql_password}
Port: ${mysql_port}
Hôte: ${mysql_host}
Base de données: ${mysql_name}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::mycnf() {
  declare text="Ces détails peuvent être trouvés dans /root/.my.cnf"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Installation de Base de Données - SQLite
################################################################################
quickbox::lang::db::install::sqlite::backup() {
  declare text="Sauvegarde de la base de données SQLite..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::sqlite::backup::success() {
  declare text="La base de données SQLite a été sauvegardée vers ${sqlite_file}.${date}.backup"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::sqlite::convert() {
  declare text="Conversion de la base de données vers SQLite..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::sqlite::convert::success() {
  declare text="La base de données a été convertie vers SQLite."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::sqlite::remove() {
  declare text="Voulez-vous supprimer MySQL complètement? [y/N]:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::sqlite::remove::mysql() {
  declare text="Voulez-vous supprimer la base de données MySQL? [y/N]:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::sqlite::php::fail() {
  declare text="Échec de l'installation de SQLite dans PHP."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::sqlite::php::enable::fail() {
  declare text="Échec de l'activation de SQLite dans PHP."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::sqlite::complete() {
  declare text="Le processus de conversion de base de données SQLite est terminé."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::sqlite::invalid() {
  declare text="Option invalide: ${option}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::sqlite::mysql::notfound() {
  declare text="Base de données MySQL non trouvée."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::sqlite::notfound() {
  declare text="Base de données SQLite non trouvée."
  quickbox::dashboard::log "${text}"
}

################################################################################
# Sauvegarde de Base de Données
################################################################################
quickbox::lang::db::backup::sqlite::integrity() {
  declare text="Vérification de l'intégrité de la base de données SQLite..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::backup::sqlite::integrity::pass() {
  declare text="Vérification d'intégrité de la base de données réussie."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::backup::sqlite::complete() {
  declare text="Sauvegarde terminée: ${full_backup_path}/qbpro.db"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::backup::sqlite::integrity::fail() {
  declare text="Vérification d'intégrité de la base de données échouée. Aucune sauvegarde n'a été créée."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::backup::sqlite::integrity::repair() {
  declare text="
    [AVERTISSEMENT] Réparation de la Base de Données QuickBox!

    La base de données QuickBox a échoué à la vérification d'intégrité et une réparation a été tentée.

    Commande: REINDEX; VACUUM;

    Vous pouvez trouver les sauvegardes les plus récentes dans:
    /opt/quickbox/backup/system/[DATE]/db/qbpro.db

    Pour supprimer ce message, exécutez la commande suivante:
    rm -f /etc/quickbox_motd
"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::backup::mysql() {
  declare text="Sauvegarde de la base de données MySQL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::backup::mysql::complete() {
  declare text="Sauvegarde MySQL terminée: ${full_backup_path}/qbpro.sql"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::backup::mysql::fail() {
  declare text="Sauvegarde MySQL échouée."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::backup::unsupported() {
  declare text="Type de base de données non pris en charge: ${db_type}. Aucune sauvegarde n'a été créée."
  quickbox::dashboard::log "${text}"
}

################################################################################
# Maintenance de Base de Données
################################################################################
quickbox::lang::db::maintenance::sqlite::repair() {
  declare text="Tentative de réparation de la base de données SQLite..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::sqlite::repair::complete() {
  declare text="Réparation de la base de données SQLite terminée."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::sqlite::repair::fail() {
  declare text="Échec de la réparation de la base de données SQLite."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::sqlite::restore::complete() {
  declare text="Restauration de la base de données SQLite terminée."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::backup::sqlite::integrity::restore() {
  declare text="
    [AVERTISSEMENT] Réparation de la Base de Données QuickBox!

    La base de données QuickBox a échoué à la vérification d'intégrité et une réparation a été tentée.
    Une sauvegarde valide précédente a été restaurée et les permissions ajustées.

    Vous pouvez trouver les sauvegardes les plus récentes dans:
    /opt/quickbox/backup/system/[DATE]/db/qbpro.db

    Pour supprimer ce message, exécutez la commande suivante:
    rm -f /etc/quickbox_motd
"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::sqlite() {
  declare text="Exécution de la maintenance sur la base de données SQLite..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::sqlite::backup() {
  declare text="Sauvegarde de la base de données avant maintenance..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::sqlite::optimize() {
  declare text="Optimisation de la base de données SQLite (VACUUM)..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::sqlite::optimize::complete() {
  declare text="Optimisation de la base de données SQLite terminée."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::sqlite::optimize::fail() {
  declare text="Échec de l'optimisation de la base de données SQLite."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::sqlite::integrity::fail() {
  declare text="Vérification d'intégrité de la base de données échouée. Aucune maintenance n'a été effectuée."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::mysql() {
  declare text="Exécution de la maintenance sur la base de données MySQL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::mysql::backup() {
  declare text="Sauvegarde de la base de données MySQL avant maintenance..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::mysql::backup::fail() {
  declare text="Sauvegarde MySQL échouée. Maintenance ignorée."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::mysql::optimize() {
  declare text="Optimisation des tables de la base de données MySQL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::mysql::optimize::complete() {
  declare text="Optimisation de la base de données MySQL terminée."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::mysql::optimize::fail() {
  declare text="Échec de l'optimisation de la base de données MySQL."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::mysql::integrity() {
  declare text="Vérification de l'intégrité de la base de données MySQL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::mysql::integrity::pass() {
  declare text="Vérification d'intégrité de la base de données MySQL réussie."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::mysql::integrity::fail() {
  declare text="Vérification d'intégrité de la base de données MySQL échouée."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::unsupported() {
  declare text="Type de base de données non pris en charge: ${db_type}. Aucune maintenance n'a été effectuée."
  quickbox::dashboard::log "${text}"
}

################################################################################
# Restauration de Base de Données
################################################################################
quickbox::lang::db::restore::backup::error() {
  declare text="Répertoire de sauvegarde non trouvé: ${backup_root}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::restore::backup::empty() {
  declare text="Aucune sauvegarde trouvée dans le répertoire de sauvegarde."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::restore::backup::select() {
  declare text="Sélectionnez une sauvegarde à restaurer:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::restore::backup::number() {
  declare text="Entrez le numéro de la sauvegarde à restaurer: "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::restore::backup::invalid() {
  declare text="Sélection invalide. Veuillez réessayer."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::restore::sqlite::success() {
  declare text="Base de données SQLite restaurée avec succès depuis ${select_backup}."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::restore::sqlite::fail() {
  declare text="Échec de la restauration de la base de données SQLite."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::restore::mysql::success() {
  declare text="Base de données MySQL restaurée avec succès depuis ${select_backup}."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::restore::mysql::fail() {
  declare text="Échec de la restauration de la base de données MySQL."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::restore::unsupported() {
  declare text="Type de base de données non pris en charge: ${db_type}. Aucune restauration n'a été effectuée."
  quickbox::dashboard::log "${text}"
} 