#!/usr/bin/env bash
################################################################################
# Module de Messages WireGuard
# Contient tous les messages de configuration, gestion et configuration client WireGuard
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
