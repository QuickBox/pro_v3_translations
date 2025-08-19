#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Projektnavn: QuickBox Pro
# Filnavn: cli_vpn_dk
# Filbeskrivelse: Dansk sprogfil - VPN/WireGuard Operationer
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
# VPN Operationer
################################################################################
quickbox::lang::software::vpnzip::access() {
  declare text="download ${software_title} profil på:
${quickbox_web_root}${username}/ovpn.zip
> til brug i enhver OpenVPN klient"
  quickbox::dashboard::log "${text}"
}

################################################################################
# WireGuard Operationer
################################################################################
quickbox::lang::wireguard::client_config() {
  declare text="opsætter klientkonfiguration for $1"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::server_config() {
  declare text="opsætter serverkonfiguration for $1"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::configure::client_ask() {
  declare text="Vil du indtaste en klientkonfiguration? (y/n)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::configure::client_paste() {
  declare text="Indsæt eller indtast klientkonfigurationen nedenfor. Tryk ctrl+D eller ⌘+D når du er færdig for at fortsætte."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::configure::client_ask_extra() {
  declare text="Vil du indtaste en anden klientkonfiguration? (y/n)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::configure::client_ask_extra_error() {
  declare text="Ugyldig indtastning. Indtast venligst 'y' eller 'n'."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::mtuendpoint::error() {
  declare text="Fejl: --mtu og --endpoint er påkrævet for 'calc' processen"
  quickbox::dashboard::log "${text}"
} 