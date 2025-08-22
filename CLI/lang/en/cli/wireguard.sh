#!/usr/bin/env bash
################################################################################
# WireGuard Messages Module
# Contains all WireGuard configuration, management, and client setup messages
################################################################################

quickbox::lang::wireguard::client_config() {
	declare text="setting up client configuration for $1"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::server_config() {
	declare text="setting up server configuration for $1"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::configure::client_ask() {
	declare text="Do you want to enter a client configuration? (y/n)"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::configure::client_paste() {
	declare text="Paste or enter the client configuration below. Press ctrl+D or ⌘+D when done to continue."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::configure::client_ask_extra() {
	declare text="Do you want to enter another client configuration? (y/n)"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::configure::client_ask_extra_error() {
	declare text="Invalid input. Please enter 'y' or 'n'."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::mtuendpoint::error() {
	declare text="Error: --mtu and --endpoint are required for the 'calc' process"
	quickbox::dashboard::log "${text}"
}
