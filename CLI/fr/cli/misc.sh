#!/usr/bin/env bash
################################################################################
# Module de Messages Divers
# Contient tous les messages utilitaires, système et divers généraux
################################################################################

quickbox::lang::unknown::option() {
  declare text="${2} Option inconnue: ${1}"
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

quickbox::lang::directory::nomove() {
  declare text="impossible de se déplacer vers $1..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::package::fail() {
  declare text="impossible d'installer un paquet requis $1..."
  quickbox::dashboard::log "${text}"
}

quickbox::error::non-empty() {
  declare text="Erreur: $1 nécessite un argument non vide"
  quickbox::dashboard::log "${text}"
}