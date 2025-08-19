#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Project Name: QuickBox Pro
# File Name: cli_updater_pt_br
# File Description: Arquivo de idioma português (Brasil) - Atualizador do Sistema
# File Version: 1.0.3
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
# Atualizador QB
################################################################################
quickbox::lang::update::ntp() {
  declare text="verificando com servidor ntp..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::apt() {
  declare text="executando atualizações do apt..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::initial::dependencies() {
  declare text="verificando dependências iniciais..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::download::v3() {
  declare text="baixando atualização v3..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::quickbox::dependencies() {
  declare text="verificando dependências do quickbox..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::base::dependencies() {
  declare text="instalando dependências base: "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::web::dependencies() {
  declare text="instalando dependências web: "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::python::dependencies() {
  declare text="instalando dependências python: "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::dependencies::log() {
  declare text="salvando dependências instaladas..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::pip() {
  declare text="atualizando pip..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::lshell() {
  declare text="atualizando lshell..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::iris() {
  declare text="atualizando iris..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::libraries() {
  declare text="atualizando bibliotecas quickbox..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::cron() {
  declare text="atualizando tarefas cron..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::sudo() {
  declare text="atualizando configurações sudo..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::curl() {
  declare text="atualizando curl..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::php::check() {
  declare text="verificando php..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::qbcommands() {
  declare text="configurando comandos quickbox pro..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::dashboard() {
  declare text="atualizando dashboard quickbox..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::database() {
  declare text="atualizando banco de dados quickbox..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::services() {
  declare text="verificando e atualizando arquivos de serviço do software instalado..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::autocomplete() {
  declare text="atualizando autocompletar quickbox..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::manpage() {
  declare text="atualizando página de manual quickbox..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::permissions() {
  declare text="configurando permissões..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::clean() {
  declare text="limpando arquivos de atualização..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::complete() {
  declare text="atualização concluída!"
  quickbox::dashboard::log "${text}"
} 