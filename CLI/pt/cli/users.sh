#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Project Name: QuickBox Pro
# File Name: cli_users_pt_br
# File Description: Arquivo de idioma português (Brasil) - Gerenciamento de Usuários
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
# Gerenciamento de Usuários
################################################################################
quickbox::lang::user::create() {
  declare text="usuário quickbox criado:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::user::delete() {
  declare text="${username:-"usuário quickbox"} excluído"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::user::username() {
  declare text="usuário: ${username}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::user::password() {
  declare text="senha: ${password}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::user::password::updated() {
  declare text="senha do ${username:-"usuário quickbox"} atualizada"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::user::ban() {
  declare text="${username:-"usuário quickbox"} banido"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::user::unban() {
  declare text="${username:-"usuário quickbox"} desbanido"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::user::demote() {
  declare text="${username:-"usuário quickbox"} rebaixado de administrador"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::user::promote() {
  declare text="${username:-"usuário quickbox"} promovido a administrador"
  quickbox::dashboard::log "${text}"
} 