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
