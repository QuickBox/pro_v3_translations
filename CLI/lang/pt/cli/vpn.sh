#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Project Name: QuickBox Pro
# File Name: cli_vpn_pt_br
# File Description: Arquivo de idioma português (Brasil) - Operações VPN/WireGuard
# File Version: 1.0.6
#
# Save Tasks:
# Automated_Versioning: true
#
# Build Tasks:
# Automated_Comment_Strip: true
#
# Deploy Tasks:
# Automated_Encryption: false
#
# Author: Jason Matthews (JMSolo)
#
# License: BSD-3 (Available in LICENSE.md)
# Copyright (C) 2019-2025, QuickBox.IO
# All rights reserved.
# <END METADATA>
# shellcheck disable=2001,2034,2154,2312,2317
################################################################################

################################################################################
# Operações VPN
################################################################################
quickbox::lang::software::vpnzip::access() {
  declare text="baixe o perfil ${software_title} em:
${quickbox_web_root}${username}/ovpn.zip
> para usar em qualquer cliente OpenVPN"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Operações WireGuard
################################################################################
quickbox::lang::wireguard::client_config() {
  declare text="configurando configuração do cliente para $1"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::server_config() {
  declare text="configurando configuração do servidor para $1"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::configure::client_ask() {
  declare text="Você quer inserir uma configuração de cliente? (s/n)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::configure::client_paste() {
  declare text="Cole ou insira a configuração do cliente abaixo. Pressione ctrl+D ou ⌘+D quando terminar para continuar."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::configure::client_ask_extra() {
  declare text="Você quer inserir outra configuração de cliente? (s/n)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::configure::client_ask_extra_error() {
  declare text="Entrada inválida. Por favor, insira 's' ou 'n'."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::mtuendpoint::error() {
  declare text="Erro: --mtu e --endpoint são necessários para o processo 'calc'"
  quickbox::dashboard::log "${text}"
} 