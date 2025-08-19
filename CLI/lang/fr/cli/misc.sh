#!/usr/bin/env bash
################################################################################
# Module de Messages Divers
# Contient tous les messages utilitaires, système et divers généraux
################################################################################

quickbox::lang::unknown::option() {
  declare text="${2} Option inconnue: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::username::specified() {
  declare text="erreur: nom d'utilisateur non spécifié"
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

quickbox::lang::nvpn::conf::generator::usage() {
  declare text="
Générateur de Configuration WireGuard NordVPN

Utilisation:
  nvpn_conf_gen -t 'token_privé' [-dns 'dns_préféré'] [-c 'nom_pays'] [-L 'nombre_de_configurations'] [-l] [-h]

Options:
  -t   | --token    Token privé NordVPN
  -dns | --dns      DNS préféré (par défaut: 103.86.96.100)
  -c   | --country  Nom de pays préféré (utilisez --list pour lister les pays disponibles)
  -L   | --limit    Limiter le nombre de configurations à créer (par défaut: 5)
  -l   | --list     Lister les pays disponibles pour les connexions WireGuard
  -h   | --help     Afficher ce message d'aide

Exemple:
  nvpn_conf_gen -t 'votre_token' -c 'États-Unis' -L 10

Notes:
  - Le token peut être généré depuis:
    https://my.nordaccount.com/dashboard/nordvpn/manual-configuration/
  - Les fichiers de configuration seront sauvegardés dans '${wg_conf_storage_dir}'
"
  quickbox::dashboard::log "${text}"
}

quickbox::error::non-empty() {
  declare text="Erreur: $1 nécessite un argument non vide"
  quickbox::dashboard::log "${text}"
} 