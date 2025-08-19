#!/usr/bin/env bash
################################################################################
# Miscellaneous Messages Module
# Contains all general utility, system, and miscellaneous messages
################################################################################

quickbox::lang::unknown::option() {
  declare text="${2} Unbekannte Option: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::username::specified() {
  declare text="Fehler: Benutzername nicht angegeben"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::database() {
  declare text="Datenbank wird aktualisiert..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::trackers::disable() {
  declare text="Öffentliche Tracker werden deaktiviert..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::trackers::enable() {
  declare text="Öffentliche Tracker werden aktiviert..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::directory::noexist() {
  declare text="Erforderliches Verzeichnis existiert nicht..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::directory::nomove() {
  declare text="Kann nicht zu $1 wechseln..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::package::fail() {
  declare text="Konnte erforderliches Paket $1 nicht installieren..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::nvpn::conf::generator::usage() {
  declare text="
NordVPN WireGuard-Konfigurationsgenerator

Verwendung:
  nvpn_conf_gen -t 'private_token' [-dns 'preferred_dns'] [-c 'country_name'] [-L 'number_of_configs'] [-l] [-h]

Optionen:
  -t   | --token    NordVPN privater Token
  -dns | --dns      Bevorzugter DNS (Standard: 103.86.96.100)
  -c   | --country  Bevorzugter Ländername (verwenden Sie --list, um verfügbare Länder aufzulisten)
  -L   | --limit    Begrenzen Sie die Anzahl der zu erstellenden Konfigurationen (Standard: 5)
  -l   | --list     Verfügbare Länder für WireGuard-Verbindungen auflisten
  -h   | --help     Diese Hilfemeldung anzeigen

Beispiel:
  nvpn_conf_gen -t 'your_token' -c 'United States' -L 10

Hinweise:
  - Der Token kann generiert werden von:
    https://my.nordaccount.com/dashboard/nordvpn/manual-configuration/
  - Konfigurationsdateien werden in '${wg_conf_storage_dir}' gespeichert
"
  quickbox::dashboard::log "${text}"
}

quickbox::error::non-empty() {
  declare text="Fehler: $1 erfordert ein nicht-leeres Argument"
  quickbox::dashboard::log "${text}"
} 