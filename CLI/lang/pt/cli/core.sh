#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Project Name: QuickBox Pro
# File Name: cli_core_pt_br
# File Description: Arquivo de idioma português (Brasil) - Operações Básicas do Sistema
# File Version: 1.0.4
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
# Author Contact: support@quickbox.io
# Author: Jamie Dobbs (Mschf)
# Author Contact: jamie.dobbs@mschf.dev
#
# License: BSD-3 (Available in LICENSE.md)
# Copyright (C) 2019-2025, QuickBox.IO
# All rights reserved.
# <END METADATA>
# shellcheck disable=2001,2034,2154,2312,2317
################################################################################

################################################################################
# Função Básica de Log do Dashboard
################################################################################
quickbox::dashboard::log() {
  admin_name="$(quickbox::database "SELECT username FROM user_information WHERE user_level = '10';")"
  if [[ ! -f "/srv/quickbox/logs/dashboard" ]]; then
    mkdir -p /srv/quickbox/logs
    touch /srv/quickbox/logs/dashboard
    chown www-data:www-data /srv/quickbox/logs/dashboard
  fi
  if [[ ! -f "/srv/quickbox/logs/${username:-${admin_name}}.dashboard" ]]; then
    mkdir -p /srv/quickbox/logs
    touch "/srv/quickbox/logs/${username:-${admin_name}}.dashboard"
    chown www-data:www-data "/srv/quickbox/logs/${username:-${admin_name}}.dashboard"
  fi
  if [[ -n ${username} ]]; then
    echo "${1:-null}" | sed -z "s/\n/\n<br>/" >"/srv/quickbox/logs/${username:-}.dashboard"
  else
    echo "${1:-null}" | sed -z "s/\n/\n<br>/" >"/srv/quickbox/logs/${admin_name:-}.dashboard"
  fi
  echo "${1:-null}"
}

################################################################################
# Operações de Limpeza
################################################################################
quickbox::lang::clean::memory() {
  declare text="limpando cache de memória..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::clean::rclone() {
  declare text="limpando log de upload do rclone..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::clean::rclone::error() {
  declare text="erro: arquivo de log não presente."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::clean::dashboard() {
  declare text="aguardando resposta do sistema..."
  quickbox::dashboard::log "${text}"
}

################################################################################
# Gerenciamento de Locks
################################################################################
quickbox::lang::lock::handle() {
  declare text="${quickbox_lock} está executando atualmente
o processo será retomado quando ${quickbox_lock} terminar"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lock::remove() {
  declare text="removendo locks de software..."
  quickbox::dashboard::log "${text}"
}

################################################################################
# Operações Diversas
################################################################################
quickbox::lang::unknown::option() {
  declare text="${2} Opção desconhecida: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::username::specified() {
  declare text="erro: nome de usuário não especificado"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::directory::noexist() {
  declare text="diretório necessário não existe..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::directory::nomove() {
  declare text="não foi possível mover para $1..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::package::fail() {
  declare text="não foi possível instalar o pacote necessário $1..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::database() {
  declare text="atualizando banco de dados..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::trackers::disable() {
  declare text="desabilitando trackers públicos..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::trackers::enable() {
  declare text="habilitando trackers públicos..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::run_via_qb() {
  declare text="erro[1]: ${script_name} deve ser executado via qb"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::mflibs_not_readable() {
  declare text="erro[1]: mflibs não legível"
  quickbox::dashboard::log "${text}"
}