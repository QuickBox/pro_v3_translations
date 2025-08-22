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
