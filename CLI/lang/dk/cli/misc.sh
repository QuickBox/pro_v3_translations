#!/usr/bin/env bash
################################################################################
# Diverse Meddelelser Modul
# Indeholder alle generelle hjælpeprogrammer, system og diverse meddelelser
################################################################################

quickbox::lang::unknown::option() {
  declare text="${2} Ukendt mulighed: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::username::specified() {
  declare text="fejl: brugernavn ikke angivet"
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

quickbox::lang::nvpn::conf::generator::usage() {
  declare text="
NordVPN WireGuard Konfigurationsgenerator

Brug:
  nvpn_conf_gen -t 'privat_token' [-dns 'foretrukken_dns'] [-c 'land_navn'] [-L 'antal_konfigurationer'] [-l] [-h]

Muligheder:
  -t   | --token    NordVPN privat token
  -dns | --dns      Foretrukken DNS (standard: 103.86.96.100)
  -c   | --country  Foretrukket landnavn (brug --list til at liste tilgængelige lande)
  -L   | --limit    Begræns antallet af konfigurationer der skal oprettes (standard: 5)
  -l   | --list     List tilgængelige lande for WireGuard forbindelser
  -h   | --help     Vis denne hjælpemeddelelse

Eksempel:
  nvpn_conf_gen -t 'din_token' -c 'Danmark' -L 10

Noter:
  - Tokenen kan genereres fra:
    https://my.nordaccount.com/dashboard/nordvpn/manual-configuration/
  - Konfigurationsfiler vil blive gemt i '${wg_conf_storage_dir}'
"
  quickbox::dashboard::log "${text}"
}

quickbox::error::non-empty() {
  declare text="Fejl: $1 kræver et ikke-tomt argument"
  quickbox::dashboard::log "${text}"
} 