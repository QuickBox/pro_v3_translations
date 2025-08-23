#!/usr/bin/env bash
################################################################################
# Módulo de Mensagens WireGuard
# Contém todas as mensagens de configuração, gerenciamento e configuração de cliente do WireGuard
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
