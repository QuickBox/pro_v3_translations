#!/usr/bin/env bash
################################################################################
# WireGuard Messages Module
# Contains all WireGuard configuration, management, and client setup messages
################################################################################

quickbox::lang::wireguard::client_config() {
  declare text="Client-Konfiguration für $1 wird eingerichtet"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::server_config() {
  declare text="Server-Konfiguration für $1 wird eingerichtet"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::configure::client_ask() {
  declare text="Möchten Sie eine Client-Konfiguration eingeben? (j/n)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::configure::client_paste() {
  declare text="Fügen Sie die Client-Konfiguration unten ein oder geben Sie sie ein. Drücken Sie Strg+D oder ⌘+D, wenn Sie fertig sind, um fortzufahren."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::configure::client_ask_extra() {
  declare text="Möchten Sie eine weitere Client-Konfiguration eingeben? (j/n)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::configure::client_ask_extra_error() {
  declare text="Ungültige Eingabe. Bitte geben Sie 'j' oder 'n' ein."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::mtuendpoint::error() {
  declare text="Fehler: --mtu und --endpoint sind für den 'calc'-Prozess erforderlich"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::manage::help() {
  declare text="
QuickBox WireGuard-Verwaltung

Verwendung:
  qb manage wireguard [prozess] [optionen]

Prozesse:
  add                                Client- oder Server-Konfiguration hinzufügen
    -c    | --client                 WireGuard-Client-Konfiguration entfernen
    -s    | --server                 WireGuard-Server-Konfiguration entfernen
    -cn   | --client-name            Client-Name für WireGuard-Client-Konfiguration festlegen (erforderlich für '-c' Client-Konfiguration)
    -noc  | --number-of-clients      Anzahl der Clients für WireGuard-Server-Konfiguration festlegen (Standard: 1)
    -lp   | --listen-port            Abhörport für WireGuard-Server-Konfiguration festlegen (Standard: 51820)
    -mtu  | --mtu                    MTU für WireGuard-Server-Konfiguration festlegen
    -cai  | --client-allowed-ips     Erlaubte IPs für WireGuard-Client-Konfiguration festlegen (Standard: 0.0.0.0/0, ::/0)
    -cidr | --cidr                   CIDR-Notation für WireGuard-Server-Konfiguration festlegen (Standard: Server - <server_ip>/24 | Client - 10.5.0.2/16)
    -pur  | --post-up-rules          Post-Up-Regeln für WireGuard-Server-Konfiguration festlegen
    -pdr  | --post-down-rules        Post-Down-Regeln für WireGuard-Server-Konfiguration festlegen

  remove                             Client- oder Server-Konfiguration entfernen
    -cn   | --client-name            Client-Name für WireGuard-Client-Konfiguration festlegen

  check                              Aktuell geladene und laufende WireGuard-Client-Konfigurationen prüfen
    -cn   | --client-name            Client-Name für WireGuard-Client-Konfiguration festlegen
    --deactivate                     WireGuard-Client-Konfiguration deaktivieren

  cron                               Cron-Job hinzufügen, um WireGuard-Konfigurationsdateien zu prüfen

  calc                               CIDR-Notation und MTU für Server-Konfiguration berechnen
    --mtu                            MTU für WireGuard-Server-Konfiguration festlegen
    --endpoint                       Endpunkt für WireGuard-Server-Konfiguration festlegen
    --protocol                       Protokoll für WireGuard-Server-Konfiguration festlegen (ipv4 oder ipv6)

  help                               Diese Hilfemeldung anzeigen

Beispiele:
  qb manage wireguard add -c -cn 'client_name' -cai '0.0.0.0/0' -lp 51820
  qb manage wireguard add -s -noc 5 -lp 51820 -cidr '192.168.0.2/24' -pur 'iptables -A FORWARD -i wg0 -j ACCEPT; iptables -t nat -A POSTROUTING -o eth0 -j MASQUERADE'
  qb manage wireguard remove -cn 'client_name'
  qb manage wireguard check -cn 'client_name' --deactivate
  qb manage wireguard cron
  qb manage wireguard calc --mtu 1420 --endpoint '192.168.0.0' --protocol 'ipv4'
"
  quickbox::dashboard::log "${text}"
} 