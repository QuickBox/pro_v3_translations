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

quickbox::lang::wireguard::manage::help() {
  declare text="
QuickBox WireGuard Management

Usage:
  qb manage wireguard [process] [options]

Processes:
  add                                Add a client or server configuration
    -c    | --client                 Remove a WireGuard client configuration
    -s    | --server                 Remove the WireGuard server configuration
    -cn   | --client-name            Set the client name for the WireGuard client configuration (required for '-c' client configuration)
    -noc  | --number-of-clients      Set the number of clients for the WireGuard server configuration (default: 1)
    -lp   | --listen-port            Set the listen port for the WireGuard server configuration (default: 51820)
    -mtu  | --mtu                    Set the MTU for the WireGuard server configuration
    -cai  | --client-allowed-ips     Set the allowed IPs for the WireGuard client configuration (default: 0.0.0.0/0, ::/0)
    -cidr | --cidr                   Set the CIDR notation for the WireGuard server configuration (default: server - <server_ip>/24 | client - 10.5.0.2/16)
    -pur  | --post-up-rules          Set the post-up rules for the WireGuard server configuration
    -pdr  | --post-down-rules        Set the post-down rules for the WireGuard server configuration

  remove                             Remove a client or server configuration
    -cn   | --client-name            Set the client name for the WireGuard client configuration

  check                              Check the currently loaded and running WireGuard client configurations
    -cn   | --client-name            Set the client name for the WireGuard client configuration
    --deactivate                     Deactivate the WireGuard client configuration

  cron                               Add a cron job to check the WireGuard configuration files

  calc                               Calculate the CIDR notation and MTU for the server configuration
    --mtu                            Set the MTU for the WireGuard server configuration
    --endpoint                       Set the endpoint for the WireGuard server configuration
    --protocol                       Set the protocol for the WireGuard server configuration (ipv4 or ipv6)

  help                               Display this help message

Examples:
  qb manage wireguard add -c -cn 'client_name' -cai '0.0.0.0/0' -lp 51820
  qb manage wireguard add -s -noc 5 -lp 51820 -cidr '192.168.0.2/24' -pur 'iptables -A FORWARD -i wg0 -j ACCEPT; iptables -t nat -A POSTROUTING -o eth0 -j MASQUERADE'
  qb manage wireguard remove -cn 'client_name'
  qb manage wireguard check -cn 'client_name' --deactivate
  qb manage wireguard cron
  qb manage wireguard calc --mtu 1420 --endpoint '192.168.0.0' --protocol 'ipv4'
"
  quickbox::dashboard::log "${text}"
} 