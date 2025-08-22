#!/usr/bin/env bash
################################################################################
# Módulo de Mensajes WireGuard
# Contiene todos los mensajes de configuración, gestión y configuración de cliente de WireGuard
################################################################################

quickbox::lang::wireguard::client_config() {
  declare text="configurando configuración de cliente para $1"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::server_config() {
  declare text="configurando configuración de servidor para $1"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::configure::client_ask() {
  declare text="¿Quieres ingresar una configuración de cliente? (y/n)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::configure::client_paste() {
  declare text="Pega o ingresa la configuración del cliente abajo. Presiona ctrl+D o ⌘+D cuando termines para continuar."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::configure::client_ask_extra() {
  declare text="¿Quieres ingresar otra configuración de cliente? (y/n)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::configure::client_ask_extra_error() {
  declare text="Entrada inválida. Por favor ingresa 'y' o 'n'."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::mtuendpoint::error() {
  declare text="Error: --mtu y --endpoint son requeridos para el proceso 'calc'"
  quickbox::dashboard::log "${text}"
}
