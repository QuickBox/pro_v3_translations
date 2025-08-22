#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Project Name: QuickBox Pro
# File Name: cli_apt_pt_br
# File Description: Arquivo de idioma português (Brasil) - Gerenciamento de Pacotes APT
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
# Gerenciamento de Pacotes APT
################################################################################
quickbox::lang::apt::update::header() {
  declare text="verificando e executando atualizações do apt..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::apt::db::locked() {
  declare text="tentando resolver lock do dpkg..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::apt::update::completed() {
  declare text="upgrade do apt-get concluído com sucesso"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::apt::check::failed() {
  declare text="apt-get check falhou, você pode ter pacotes quebrados"
  quickbox::dashboard::log "${text}"
} 