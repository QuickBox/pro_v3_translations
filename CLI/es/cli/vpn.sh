#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Nombre del Proyecto: QuickBox Pro
# Nombre del Archivo: cli_vpn_es
# Descripción del Archivo: Archivo de idioma español - Operaciones VPN/WireGuard
# Versión del Archivo: 1.0.1
#
# Tareas de Guardado:
# Versionado_Automatizado: true
#
# Tareas de Compilación:
# Eliminación_Comentarios_Automatizada: true
#
# Tareas de Despliegue:
# Encriptación_Automatizada: false
#
# Autor: Jason Matthews (JMSolo)
# Contacto del Autor: support@quickbox.io
# Autor: Jamie Dobbs (Mschf)
# Contacto del Autor: jamie.dobbs@mschf.dev
#
# Licencia: BSD-3 (Disponible en LICENSE.md)
# Copyright (C) 2019-2025, QuickBox.IO
# Todos los derechos reservados.
# <END METADATA>
# shellcheck disable=2001,2034,2154,2312,2317
################################################################################

################################################################################
# Operaciones VPN
################################################################################
quickbox::lang::software::vpnzip::access() {
  declare text="descargar perfil de ${software_title} en:
${quickbox_web_root}${username}/ovpn.zip
> para usar en cualquier cliente OpenVPN"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Operaciones WireGuard
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