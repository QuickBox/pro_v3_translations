#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Project Name: QuickBox Pro
# File Name: cli_software_pt_br
# File Description: Arquivo de idioma português (Brasil) - Gerenciamento de Software
# File Version: 1.0.10
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

quickbox::lang::update::jellyfin::ffmpeg() {
  declare text="atualizando ffmpeg para Jellyfin..."
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
# Mensagens Específicas do WSDashboard
################################################################################
quickbox::lang::software::wsdashboard::neither_installed() {
  declare text="Nem Emby nem Jellyfin está instalado. Processo ignorado."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::api_error() {
  declare text="erro: não foi possível obter zip_url da API central.quickbox.io."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::download_error() {
  declare text="erro: não foi possível baixar o arquivo do plugin WSD."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::unzip_error() {
  declare text="erro: não foi possível descompactar o arquivo do plugin WSD."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::missing_directory() {
  declare text="erro: diretório necessário ${req_dir} ausente no arquivo do plugin."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::move_backend_error() {
  declare text="Falha ao mover diretório backend! Abortando atualização."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::move_public_error() {
  declare text="Falha ao mover diretório public! Abortando atualização."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::move_version_error() {
  declare text="Falha ao mover version.txt! Abortando atualização."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::complete() {
  declare text="Download e extração do plugin WSD concluídos."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::up_to_date() {
  declare text="Plugin WSD está atualizado; download não necessário."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::start::success() {
  declare text="Serviço iniciado com sucesso. Executando verificação de saúde..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::health::passed() {
  declare text="Verificação de saúde bem-sucedida. O serviço está funcionando de forma ideal."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::health::warnings() {
  declare text="Verificação de saúde concluída com avisos. Revise os logs se necessário."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::start::failed() {
  declare text="O serviço não conseguiu iniciar. Verificando status..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::fix::attempting() {
  declare text="Tentando corrigir problemas comuns..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::update::success() {
  declare text="Serviço atualizado com sucesso. Executando verificação de saúde..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::update::failed() {
  declare text="O serviço não conseguiu iniciar após a atualização. Verificando status..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::maintenance::header() {
  declare text="Executando manutenção e monitoramento do serviço WSD..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::maintenance::service_not_found() {
  declare text="Serviço não encontrado. Por favor, instale o WSD primeiro."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::maintenance::completed_success() {
  declare text="Manutenção do serviço concluída com sucesso."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::maintenance::completed_warnings() {
  declare text="Manutenção do serviço concluída com avisos."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::maintenance::complete() {
  declare text="Manutenção concluída. Use 'qbwsd-health-check.sh --verbose' para diagnósticos detalhados."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::maintenance::title() {
  declare text="Manutenção do Serviço WSD"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::stop::starting() {
  declare text="Parando serviço ${software_service_name}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::stop::force() {
  declare text="Serviço ainda ativo, parada forçada..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::stop::cleanup() {
  declare text="Limpando processos Node.js restantes..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::stop::warning() {
  declare text="Aviso: O serviço pode ainda estar em execução, continuando com cautela..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::stop::success() {
  declare text="Serviço parado com sucesso"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::start::starting() {
  declare text="Iniciando serviço ${software_service_name}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::start::success_attempt() {
  declare text="Serviço iniciado com sucesso na tentativa ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::start::retry() {
  declare text="Tentativa de início do serviço ${1} falhou, tentando novamente em 3 segundos..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::start::command_failed() {
  declare text="Comando de início do serviço falhou, tentando novamente em 3 segundos..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::chmod::retry() {
  declare text="Tentativa chmod ${1} falhou, tentando novamente em 2 segundos..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::chmod::warning() {
  declare text="Aviso: Falha ao definir permissões de execução após ${1} tentativas"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::node::install::failed() {
  declare text="Erro: A instalação ou verificação do Node.js falhou. Por favor, verifique os logs e tente novamente."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::virtual_env_corrupted() {
  declare text="O ambiente virtual parece estar corrompido. Recriando..."
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

quickbox::lang::system::nginx::test() {
  declare text="Testando configuração do nginx..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::nginx::reload() {
  declare text="Recarregando serviço nginx..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::daemon::reload() {
  declare text="Recarregando daemon systemd..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::service::enable() {
  declare text="Habilitando serviço ${software_service_name}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::service::start() {
  declare text="Iniciando serviço ${software_service_name}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::service::stop() {
  declare text="Parando serviço ${software_service_name}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::service::disable() {
  declare text="Desabilitando serviço ${software_service_name}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::file::copy() {
  declare text="Copiando ${1} para ${2}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::pip::install() {
  declare text="Instalando pacotes Python..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::npm::install() {
  declare text="Instalando pacotes Node.js..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::enhanced::files::removed() {
  declare text="Arquivos de serviço aprimorados removidos com sucesso"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Mensagens de Verificação de Saúde WSDashboard
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
  declare text="O serviço está em execução"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::service_not_running() {
  declare text="O serviço não está em execução"
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
  declare text="O serviço está configurado para executar como root (risco de segurança)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::no_restart_policy() {
  declare text="Nenhuma política de reinicialização configurada"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::config_valid() {
  declare text="O arquivo de configuração do serviço existe e é legível"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::checking_dependencies() {
  declare text="Verificando dependências..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::file_missing() {
  declare text="Arquivo necessário ausente: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::file_found() {
  declare text="Encontrado: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::directory_missing() {
  declare text="Diretório necessário ausente: ${1}"
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
  declare text="Serviço não em execução, pulando verificação de recursos"
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
  declare text="Encontrados ${1} mensagens de erro na última hora"
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
  declare text="O banco de dados é acessível e contém tabelas"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::active_sessions() {
  declare text="Sessões ativas na última hora: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::database_corrupted() {
  declare text="O banco de dados não é acessível ou está corrompido"
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

quickbox::lang::software::wsdashboard::health::creating_log_directory() {
  declare text="Criando diretório de logs ausente..."
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