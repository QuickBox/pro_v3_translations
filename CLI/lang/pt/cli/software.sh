#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Project Name: QuickBox Pro
# File Name: cli_software_pt_br
# File Description: Arquivo de idioma português (Brasil) - Gerenciamento de Software
# File Version: 1.0.24
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
# Operações de Instalação
################################################################################
quickbox::lang::install::header() {
  declare text="${software_title} será instalado agora
este processo pode levar alguns minutos..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::rutorrent::header() {
  rtorrent_count=$(quickbox::software::count rtorrent)
  if [[ ${rtorrent_count} -eq 0 ]]; then
    declare text="parece que o rTorrent não está instalado

rTorrent 0.9.8 será instalado agora, aguarde pois isso pode
levar alguns minutos (dependendo das especificações do sistema) para instalar"
  else
    declare text="${software_title} será instalado agora
este processo pode levar alguns minutos..."
  fi
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::sources::header() {
  declare text="adicionando chaves e fontes adicionais para ${software_title}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::dependencies::header() {
  declare text="instalando dependências do ${software_title}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::build::header() {
  declare text="compilando ${software_title}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::mktorrent::header() {
  declare text="compilando mktorrent..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::xmlrpc::header() {
  declare text="compilando xmlrpc-c..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::libtorrent::header() {
  declare text="compilando libtorrent..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::rtorrent::header() {
  declare text="compilando rtorrent..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::certificate::header() {
  declare text="criando certificado ssl para ${d}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::configure::lecert::header() {
  declare text="configurando NGinx para Let's Encrypt..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::configure::header() {
  declare text="configurando ${software_title}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::backup::header() {
  declare text="fazendo backup da configuração do ${software_title}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::start::header() {
  declare text="iniciando ${software_title}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::complete::header() {
  declare text="instalação do ${software_title} concluída"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Operações de Reinstalação
################################################################################
quickbox::lang::reinstall::header() {
  declare text="${software_title} será reinstalado agora
este processo pode levar alguns minutos..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::reinstall::complete::header() {
  declare text="reinstalação do ${software_title} concluída"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Operações de Remoção
################################################################################
quickbox::lang::remove::header() {
  declare text="${software_title} será removido agora
este processo pode levar alguns minutos..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::remove::stop::header() {
  declare text="parando ${software_title}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::remove::dependencies::header() {
  declare text="removendo dependências do ${software_title}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::remove::files::header() {
  declare text="removendo arquivos do ${software_title}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::remove::complete::header() {
  declare text="remoção do ${software_title} concluída"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Operações de Atualização
################################################################################
quickbox::lang::update::header() {
  declare text="${software_title} será atualizado agora
este processo pode levar alguns minutos..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::files::header() {
  declare text="atualizando ${software_title}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::complete::header() {
  declare text="atualização do ${software_title} concluída"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::files::admin() {
  declare text="deve estar logado como administrador para atualizar ${software_title}"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Informações de Acesso ao Software
################################################################################
quickbox::lang::software::access() {
  declare text="acesse ${software_title} em:
${quickbox_web_root}${software_name}
${software_title} instalado na porta: ${software_web_port}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::mu::access() {
  declare text="acesse ${software_title} em:
${quickbox_web_root}${username}/${software_name}
${software_title} instalado na porta: ${software_web_port}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::admin::access() {
  declare text="acesse ${software_title} em:
${quickbox_web_root}${admin_name}/${software_name}
${software_title} instalado na porta: ${software_web_port}"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Mensagens de Comandos do Sistema
################################################################################
quickbox::lang::system::health::check::running() {
  declare text="Executando verificação de saúde abrangente..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::service::status::current() {
  declare text="Status atual do serviço:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::service::logs::recent() {
  declare text="Logs recentes do serviço:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::enhanced::files::removed() {
  declare text="Arquivos de serviço aprimorados removidos com sucesso"
  quickbox::dashboard::log "${text}"
}
