#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Project Name: QuickBox Pro
# File Name: cli_manager_pt_br
# File Description: Arquivo de idioma português (Brasil) - Gerenciador de Software
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
# Gerenciador QB - Gerenciamento de Software
################################################################################

### Operações de Backup
quickbox::lang::backup::configf() {
  declare text="arquivo de configuração para ${software_name} está sendo salvo agora."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::backup::configf::error() {
  declare text="arquivo de configuração ${softwareConf} não existe."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::backup::configf::success() {
  declare text="arquivo de configuração foi salvo."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::backup::installdir::error() {
  declare text="diretório de instalação do ${software_title} não existe."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::backup::installdir() {
  declare text="diretório de instalação para ${software_title} (${backup_version}) está sendo salvo agora."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::backup::configdir() {
  declare text="diretório de configuração para ${software_title} está sendo salvo agora."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::backup::installdir::success() {
  backup_version="$(tput setaf 5)${backup_version}$(tput setaf 2)"
  declare text="${software_title} (${backup_version}) foi salvo."
  quickbox::dashboard::log "${text}$(tput sgr0)"
}

### Operações de Restauração
quickbox::lang::restore::configf::error() {
  declare text="arquivo de backup ${backupConf} não existe."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::restore::configf::success() {
  declare text="arquivo de backup foi restaurado."
  quickbox::dashboard::log "${text}"
}

### Operações Padrão
quickbox::lang::default::configf::error() {
  declare text="arquivo de configuração padrão ${defaultConf} não existe."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::default::configf::success() {
  declare text="arquivo de configuração padrão foi restaurado."
  quickbox::dashboard::log "${text}"
}

### Operações de Rollback
quickbox::lang::rollback::installdir::error() {
  declare text="diretório de instalação do ${software_title} não existe."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::rollback::selection::version() {
  declare text="versão:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::rollback::selection::date() {
  declare text="data:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::rollback::selection() {
  declare text="selecione um número da lista abaixo para fazer rollback
para uma versão anterior do ${software_title}:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::rollback::selection::invalid() {
  declare text="seleção inválida. por favor, tente novamente."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::rollback::software::error() {
  declare text="backup da aplicação ${software_title} não existe."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::rollback::config::error() {
  declare text="backup da configuração ${software_title} não existe."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::rollback::selection::display() {
  version="$(tput setaf 5)${version}$(tput setaf 7)"
  app_package="$(tput setaf 5)${app_package}$(tput setaf 7)"
  config_package="$(tput setaf 5)${config_package}$(tput setaf 7)"
  declare text="você selecionou a versão ${version} para ${software_title}.
pacote da aplicação: ${app_package}
pacote da configuração: ${config_package}"
  quickbox::dashboard::log "${text}$(tput sgr0)"
}

quickbox::lang::rollback::selection::confirm() {
  declare text="você tem certeza que quer prosseguir com o rollback? (s/n)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::rollback::cancelled() {
  declare text="rollback cancelado."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::rollback::continue() {
  version="$(tput setaf 5)${version}$(tput setaf 7)"
  declare text="${software_title} está sendo revertido para a versão ${version} agora."
  quickbox::dashboard::log "${text}$(tput sgr0)"
}

quickbox::lang::rollback::complete() {
  version="$(tput setaf 5)${version}$(tput setaf 2)"
  declare text="${software_title} (${version}) foi revertido."
  quickbox::dashboard::log "${text}$(tput sgr0)"
}

### Operações de Exclusão
quickbox::lang::delete::selection::version() {
  declare text="versão:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::delete::selection::date() {
  declare text="data:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::delete::selection() {
  declare text="selecione um número da lista abaixo para excluir
um backup anterior do ${software_title}:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::delete::selection::invalid() {
  declare text="seleção inválida. por favor, tente novamente."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::delete::software::error() {
  declare text="backup da aplicação ${software_title} não existe."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::delete::config::error() {
  declare text="backup da configuração ${software_title} não existe."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::delete::selection::display() {
  version="$(tput setaf 5)${version}$(tput setaf 7)"
  app_package="$(tput setaf 5)${app_package}$(tput setaf 7)"
  config_package="$(tput setaf 5)${config_package}$(tput setaf 7)"
  declare text="você selecionou a versão ${version} para ${software_title}.
pacote da aplicação: ${app_package}
pacote da configuração: ${config_package}"
  quickbox::dashboard::log "${text}$(tput sgr0)"
}

quickbox::lang::delete::selection::confirm() {
  declare text="você tem certeza que quer prosseguir com a exclusão? (s/n)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::delete::cancelled() {
  declare text="exclusão do backup cancelada."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::delete::continue() {
  version="$(tput setaf 5)${version}$(tput setaf 7)"
  declare text="backup do ${software_title} (${version}) está sendo excluído agora."
  quickbox::dashboard::log "${text}$(tput sgr0)"
}

quickbox::lang::delete::complete() {
  version="$(tput setaf 5)${version}$(tput setaf 2)"
  declare text="backup do ${software_title} (${version}) foi excluído."
  quickbox::dashboard::log "${text}$(tput sgr0)"
} 