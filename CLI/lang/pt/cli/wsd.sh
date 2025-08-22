#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Project Name: QuickBox Pro
# File Name: cli_wsd_pt
# File Description: Portuguese language file - WSD (What's Streaming Dashboard) CLI
# File Version: 1.0.77
#
# Save Tasks:
# Automated_Versioning: true
# Automated_Formatting: true
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
# Service Status Messages (guarded)
################################################################################
quickbox::lang::system::service::status::current() {
  declare text="Status atual do serviço:"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Installation Requirements
################################################################################
quickbox::lang::wsd::neither_installed() {
  declare text="Nem Emby nem Jellyfin estão instalados. O WSDashboard requer uma dessas aplicações de streaming para funcionar."
  quickbox::dashboard::log "${text}"
}

################################################################################
# Port Management
################################################################################
quickbox::lang::wsd::port::fallback_used() {
  declare text="Usando porta de fallback ${1} pois nenhuma outra porta estava disponível"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Environment Configuration
################################################################################
quickbox::lang::wsd::env::port_recovered_from_nginx() {
  declare text="Porta recuperada da configuração do nginx: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::env::port_using_available() {
  declare text="Usando porta disponível: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::env::current_port_empty() {
  declare text="Porta atual está vazia ou zero, não é possível prosseguir com a atualização do env.conf"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::env::streaming_app_empty() {
  declare text="Aplicação de streaming está vazia, não é possível prosseguir com a atualização do env.conf"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::env::boilerplate_remaining() {
  declare text="Alguns placeholders de modelo permanecem no env.conf"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::env::update_success() {
  declare text="Configuração do ambiente atualizada com sucesso: App=${1}, Porta=${2}, PortaLog=${3}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::env::backup_created() {
  declare text="Backup criado em: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::env::boilerplate_detected() {
  declare text="Placeholders de modelo detectados no env.conf"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Nginx Configuration
################################################################################
quickbox::lang::wsd::nginx::config_missing() {
  declare text="Arquivo de configuração do nginx ausente, não é possível validar"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::nginx::port_updated() {
  declare text="Porta do nginx atualizada de ${1} para ${2}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::nginx::config_invalid() {
  declare text="Configuração do nginx é inválida"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Plugin Management
################################################################################
quickbox::lang::wsd::plugin::fetch::api_error() {
  declare text="Erro de API ocorreu ao buscar o plugin"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::plugin::fetch::download_error() {
  declare text="Erro de download ocorreu ao buscar o plugin"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::plugin::fetch::unzip_error() {
  declare text="Erro de descompactação ocorreu ao buscar o plugin"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::plugin::fetch::missing_directory() {
  declare text="Diretório obrigatório ausente no arquivo do plugin"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::plugin::fetch::missing_directory_warning() {
  declare text="Aviso: diretório ${1} não encontrado no arquivo do plugin (continuando para instalações mais antigas)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::plugin::fetch::complete() {
  declare text="Busca e extração do plugin WSD concluída"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::plugin::fetch::up_to_date() {
  declare text="Plugin WSD está atualizado"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Virtual Environment
################################################################################
quickbox::lang::wsd::virtual_env::nodeenv_failed() {
  declare text="Falha ao instalar nodeenv no ambiente virtual Python: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::virtual_env::nodejs_failed() {
  declare text="Falha ao criar ambiente virtual Node.js: ${1}"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Service Management
################################################################################
quickbox::lang::wsd::service::start::success() {
  declare text="Serviço iniciado com sucesso"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::start::failed() {
  declare text="Serviço falhou ao iniciar"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::start::starting() {
  declare text="Iniciando serviço..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::start::success_attempt() {
  declare text="Serviço iniciado com sucesso na tentativa ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::start::retry() {
  declare text="Tentando iniciar o serviço novamente (tentativa ${1})"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::start::command_failed() {
  declare text="Comando de início do serviço falhou"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::health::passed() {
  declare text="Verificação de saúde aprovada"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::health::warnings() {
  declare text="Verificação de saúde concluída com avisos"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::fix::attempting() {
  declare text="Tentando corrigir problemas do serviço"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::stop::starting() {
  declare text="Parando serviço..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::stop::force() {
  declare text="Forçando parada do serviço"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::stop::cleanup() {
  declare text="Limpando processos restantes"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::stop::warning() {
  declare text="Aviso de parada do serviço"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::stop::success() {
  declare text="Serviço parado com sucesso"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::log_server::started() {
  declare text="Serviço do servidor de log iniciado com sucesso"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::log_server::failed() {
  declare text="Serviço do servidor de log falhou ao iniciar"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::update::success() {
  declare text="Serviço atualizado com sucesso"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::update::failed() {
  declare text="Atualização do serviço falhou"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Access Information
################################################################################
quickbox::lang::wsd::access() {
  declare text="Acesse o WSDashboard em: http://localhost:${software_daemon_port}"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Maintenance
################################################################################
quickbox::lang::wsd::maintenance::header() {
  declare text="Modo de manutenção do WSDashboard"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::maintenance::title() {
  declare text="Manutenção do WSDashboard"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::maintenance::service_not_found() {
  declare text="Serviço WSDashboard não encontrado"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::maintenance::completed_success() {
  declare text="Manutenção concluída com sucesso"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::maintenance::completed_warnings() {
  declare text="Manutenção concluída com avisos"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::maintenance::complete() {
  declare text="Manutenção concluída"
  quickbox::dashboard::log "${text}"
}
