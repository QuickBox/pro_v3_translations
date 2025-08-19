#!/usr/bin/env bash
################################################################################
# WireGuard Meddelelser Modul
# Indeholder alle WireGuard konfiguration, håndtering og klientopsætningsmeddelelser
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

quickbox::lang::wireguard::manage::help() {
  declare text="
QuickBox WireGuard Håndtering

Brug:
  qb manage wireguard [process] [muligheder]

Processer:
  add                                Tilføj en klient eller server konfiguration
    -c    | --client                 Fjern en WireGuard klient konfiguration
    -s    | --server                 Fjern WireGuard server konfigurationen
    -cn   | --client-name            Indstil klientnavnet for WireGuard klient konfigurationen (påkrævet for '-c' klient konfiguration)
    -noc  | --number-of-clients      Indstil antallet af klienter for WireGuard server konfigurationen (standard: 1)
    -lp   | --listen-port            Indstil lytteporten for WireGuard server konfigurationen (standard: 51820)
    -mtu  | --mtu                    Indstil MTU for WireGuard server konfigurationen
    -cai  | --client-allowed-ips     Indstil tilladte IP'er for WireGuard klient konfigurationen (standard: 0.0.0.0/0, ::/0)
    -cidr | --cidr                   Indstil CIDR notation for WireGuard server konfigurationen (standard: server - <server_ip>/24 | klient - 10.5.0.2/16)
    -pur  | --post-up-rules          Indstil post-up regler for WireGuard server konfigurationen
    -pdr  | --post-down-rules        Indstil post-down regler for WireGuard server konfigurationen

  remove                             Fjern en klient eller server konfiguration
    -cn   | --client-name            Indstil klientnavnet for WireGuard klient konfigurationen

  check                              Kontroller de nuværende indlæste og kørende WireGuard klient konfigurationer
    -cn   | --client-name            Indstil klientnavnet for WireGuard klient konfigurationen
    --deactivate                     Deaktiver WireGuard klient konfigurationen

  cron                               Tilføj et cron job til at kontrollere WireGuard konfigurationsfilerne

  calc                               Beregn CIDR notation og MTU for server konfigurationen
    --mtu                            Indstil MTU for WireGuard server konfigurationen
    --endpoint                       Indstil endpoint for WireGuard server konfigurationen
    --protocol                       Indstil protokollen for WireGuard server konfigurationen (ipv4 eller ipv6)

  help                               Vis denne hjælpemeddelelse

Eksempler:
  qb manage wireguard add -c -cn 'klient_navn' -cai '0.0.0.0/0' -lp 51820
  qb manage wireguard add -s -noc 5 -lp 51820 -cidr '192.168.0.2/24' -pur 'iptables -A FORWARD -i wg0 -j ACCEPT; iptables -t nat -A POSTROUTING -o eth0 -j MASQUERADE'
  qb manage wireguard remove -cn 'klient_navn'
  qb manage wireguard check -cn 'klient_navn' --deactivate
  qb manage wireguard cron
  qb manage wireguard calc --mtu 1420 --endpoint '192.168.0.0' --protocol 'ipv4'
"
  quickbox::dashboard::log "${text}"
} 