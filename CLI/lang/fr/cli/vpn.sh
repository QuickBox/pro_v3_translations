#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Nom du Projet: QuickBox Pro
# Nom du Fichier: cli_vpn_fr
# Description du Fichier: Fichier de langue française - Opérations VPN/WireGuard
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
# Opérations VPN
################################################################################
quickbox::lang::software::vpnzip::access() {
  declare text="téléchargez le profil ${software_title} à:
${quickbox_web_root}${username}/ovpn.zip
> à utiliser dans n'importe quel client OpenVPN"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Opérations WireGuard
################################################################################
quickbox::lang::wireguard::client_config() {
  declare text="configuration de la configuration client pour $1"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::server_config() {
  declare text="configuration de la configuration serveur pour $1"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::configure::client_ask() {
  declare text="Voulez-vous entrer une configuration client? (y/n)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::configure::client_paste() {
  declare text="Collez ou entrez la configuration client ci-dessous. Appuyez sur ctrl+D ou ⌘+D quand vous avez terminé pour continuer."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::configure::client_ask_extra() {
  declare text="Voulez-vous entrer une autre configuration client? (y/n)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::configure::client_ask_extra_error() {
  declare text="Entrée invalide. Veuillez entrer 'y' ou 'n'."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::mtuendpoint::error() {
  declare text="Erreur: --mtu et --endpoint sont requis pour le processus 'calc'"
  quickbox::dashboard::log "${text}"
} 