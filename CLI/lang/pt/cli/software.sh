#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Project Name: QuickBox Pro
# File Name: cli_software_pt
# File Description: Portuguese language file - Software Management
# File Version: 1.0.33
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
# Install Operations
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
# Reinstall Operations
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
# Remove Operations
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
# Update Operations
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
# Software Access Information
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
# System Command Messages
################################################################################

quickbox::lang::system::enhanced::files::removed() {
  declare text="Arquivos de serviço aprimorados removidos com sucesso"
  quickbox::dashboard::log "${text}"
}

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

################################################################################
# WSDashboard Health Check Messages
################################################################################
quickbox::lang::software::wsdashboard::health::usage() {
  declare text="Uso: qbwsd-health-check.sh [--verbose] [--fix]
  --verbose  Habilitar saída detalhada
  --fix      Corrigir automaticamente problemas comuns"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::unknown_option() {
  declare text="Opção desconhecida: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::root_warning() {
  declare text="Executando como root - algumas verificações podem não funcionar corretamente"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::starting_check() {
  declare text="Iniciando verificação de saúde para ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::checking_status() {
  declare text="Verificando status do serviço..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::service_running() {
  declare text="Serviço está em execução"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::service_not_running() {
  declare text="Serviço não está em execução"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::checking_config() {
  declare text="Verificando configuração do serviço..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::config_file_missing() {
  declare text="Arquivo de configuração do serviço não encontrado: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::root_user_warning() {
  declare text="Serviço configurado para executar como root (risco de segurança)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::no_restart_policy() {
  declare text="Nenhuma política de reinicialização configurada"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::config_valid() {
  declare text="Arquivo de configuração do serviço existe e é legível"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::checking_dependencies() {
  declare text="Verificando dependências..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::file_missing() {
  declare text="Arquivo obrigatório ausente: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::file_found() {
  declare text="Encontrado: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::directory_missing() {
  declare text="Diretório obrigatório ausente: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::directory_found() {
  declare text="Diretório encontrado: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::dependencies_missing() {
  declare text="Dependências ausentes: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::dependencies_available() {
  declare text="Todas as dependências estão disponíveis"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::checking_resources() {
  declare text="Verificando uso de recursos..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::service_not_running_skip() {
  declare text="Serviço não está em execução, pulando verificação de recursos"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::pid_not_found() {
  declare text="Não foi possível determinar o PID do serviço"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::memory_usage() {
  declare text="Uso de memória: ${1}MB"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::high_memory_usage() {
  declare text="Alto uso de memória detectado: ${1}MB"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::cpu_usage() {
  declare text="Uso de CPU: ${1}%"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::high_cpu_usage() {
  declare text="Alto uso de CPU detectado: ${1}%"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::checking_logs() {
  declare text="Verificando logs recentes..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::recent_errors_found() {
  declare text="Encontradas ${1} mensagens de erro na última hora"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::no_recent_errors() {
  declare text="Nenhuma mensagem de erro recente encontrada"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::log_file_size() {
  declare text="Arquivo de log ${1}: ${2}MB"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::large_log_file() {
  declare text="Arquivo de log grande detectado: ${1} (${2}MB)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::log_file_not_found() {
  declare text="Arquivo de log não encontrado: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::checking_database() {
  declare text="Verificando conectividade do banco de dados..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::database_file_missing() {
  declare text="Arquivo do banco de dados não encontrado: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::database_accessible() {
  declare text="Banco de dados está acessível e contém tabelas"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::active_sessions() {
  declare text="Sessões ativas na última hora: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::database_corrupted() {
  declare text="Banco de dados não está acessível ou corrompido"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::sqlite3_not_available() {
  declare text="sqlite3 não disponível, pulando verificações do banco de dados"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::attempting_fixes() {
  declare text="Tentando corrigir problemas comuns..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::fixing_permissions() {
  declare text="Corrigindo permissões do ambiente virtual Node.js..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::attempting_restart() {
  declare text="Tentando reiniciar o serviço..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::restart_successful() {
  declare text="Serviço reiniciado com sucesso"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::restart_failed() {
  declare text="Falha ao reiniciar o serviço"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::check_completed_success() {
  declare text="Verificação de saúde concluída com sucesso"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::check_completed_issues() {
  declare text="Verificação de saúde concluída com problemas"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::binary_not_executable() {
  declare text="Binário não executável: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::permission_issues_detected() {
  declare text="Problemas de permissões detectados: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::permissions_fixed() {
  declare text="Permissões dos binários Node.js corrigidas com sucesso"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::permissions_fix_failed() {
  declare text="Falha ao corrigir permissões dos binários Node.js"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::creating_run_directory() {
  declare text="Criando diretório de execução ausente..."
  quickbox::dashboard::log "${text}"
}
