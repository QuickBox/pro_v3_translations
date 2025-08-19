#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Projektnavn: QuickBox Pro
# Filnavn: cli_core_dk
# Filbeskrivelse: Dansk sprogfil - Kerne Systemoperationer
# Filversion: 1.0.1
#
# Gemmeopgaver:
# Automatiseret_Versionering: true
#
# Byggeopgaver:
# Automatiseret_Kommentar_Fjernelse: true
#
# Deploymentopgaver:
# Automatiseret_Kryptering: false
#
# Forfatter: Jason Matthews (JMSolo)
# Forfatter Kontakt: support@quickbox.io
# Forfatter: Jamie Dobbs (Mschf)
# Forfatter Kontakt: jamie.dobbs@mschf.dev
#
# Licens: BSD-3 (Tilgængelig i LICENSE.md)
# Copyright (C) 2019-2025, QuickBox.IO
# Alle rettigheder forbeholdes.
# <END METADATA>
# shellcheck disable=2001,2034,2154,2312,2317
################################################################################

################################################################################
# Kerne Dashboard Logging Funktion
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
# Rensningsoperationer
################################################################################
quickbox::lang::clean::memory() {
  declare text="rydder hukommelsescache..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::clean::rclone() {
  declare text="rydder rclone upload log..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::clean::rclone::error() {
  declare text="fejl: logfil ikke til stede."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::clean::dashboard() {
  declare text="afventer systemrespons..."
  quickbox::dashboard::log "${text}"
}

################################################################################
# Låsehåndtering
################################################################################
quickbox::lang::lock::handle() {
  declare text="${quickbox_lock} kører i øjeblikket
processen vil genoptages når ${quickbox_lock} er færdig"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lock::remove() {
  declare text="fjerner softwarelåse..."
  quickbox::dashboard::log "${text}"
}

################################################################################
# Diverse Operationer
################################################################################
quickbox::lang::unknown::option() {
  declare text="${2} Ukendt mulighed: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::username::specified() {
  declare text="fejl: brugernavn ikke angivet"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::directory::noexist() {
  declare text="påkrævet mappe eksisterer ikke..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::directory::nomove() {
  declare text="kan ikke flytte til $1..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::package::fail() {
  declare text="kunne ikke installere et påkrævet pakke $1..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::database() {
  declare text="opdaterer database..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::trackers::disable() {
  declare text="deaktiverer offentlige trackere..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::trackers::enable() {
  declare text="aktiverer offentlige trackere..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::run_via_qb() {
  declare text="fejl[1]: ${script_name} skal køres via qb"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::mflibs_not_readable() {
  declare text="fejl[1]: mflibs ikke læsbar"
  quickbox::dashboard::log "${text}"
}