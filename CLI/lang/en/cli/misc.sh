#!/usr/bin/env bash
################################################################################
# Miscellaneous Messages Module
# Contains all general utility, system, and miscellaneous messages
################################################################################

quickbox::lang::unknown::option() {
  declare text="${2} Unknown option: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::username::specified() {
  declare text="error: username not specified"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::database() {
  declare text="updating database..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::trackers::disable() {
  declare text="disabling public trackers..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::trackers::enable() {
  declare text="enabling public trackers..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::directory::noexist() {
  declare text="required directory does not exist..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::directory::nomove() {
  declare text="unable to move to $1..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::package::fail() {
  declare text="could not install a required package $1..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::nvpn::conf::generator::usage() {
  declare text="
NordVPN WireGuard Configuration Generator

Usage:
  nvpn_conf_gen -t 'private_token' [-dns 'preferred_dns'] [-c 'country_name'] [-L 'number_of_configs'] [-l] [-h]

Options:
  -t   | --token    NordVPN private token
  -dns | --dns      Preferred DNS (default: 103.86.96.100)
  -c   | --country  Preferred country name (use --list to list available countries)
  -L   | --limit    Limit the number of configurations to create (default: 5)
  -l   | --list     List available countries for WireGuard connections
  -h   | --help     Display this help message

Example:
  nvpn_conf_gen -t 'your_token' -c 'United States' -L 10

Notes:
  - The token can be generated from:
    https://my.nordaccount.com/dashboard/nordvpn/manual-configuration/
  - Configuration files will be saved in '${wg_conf_storage_dir}'
"
  quickbox::dashboard::log "${text}"
}

quickbox::error::non-empty() {
  declare text="Error: $1 requires a non-empty argument"
  quickbox::dashboard::log "${text}"
} 