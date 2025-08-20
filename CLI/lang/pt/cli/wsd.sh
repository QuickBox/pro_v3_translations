#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Project Name: QuickBox Pro
# File Name: cli_wsd_pt
# File Description: Arquivo de idioma português - WSD (What's Streaming Dashboard) CLI
# File Version: 1.0.52
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
#
# License: BSD-3 (Available in LICENSE.md)
# Copyright (C) 2019-2025, QuickBox.IO
# All rights reserved.
# <END METADATA>
# shellcheck disable=2001,2034,2154,2312,2317
################################################################################

################################################################################
# Mensagens de erro
################################################################################
quickbox::lang::wsd::error::missing_emby_params() {
  declare text="Parâmetros obrigatórios ausentes para Emby: -u"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::missing_jellyfin_params() {
  declare text="Parâmetros obrigatórios ausentes para Jellyfin."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::database_not_found() {
  declare text="Arquivo de banco de dados não encontrado em: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::jellyfin_api_failed() {
  declare text="Falha ao buscar dados da API do Jellyfin."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::missing_manual_path() {
  declare text="Parâmetro de caminho manual ausente."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::path_not_exist() {
  declare text="O caminho especificado não existe: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::missing_empty_path() {
  declare text="Caminho do diretório ausente para esvaziar."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::directory_not_exist() {
  declare text="O diretório não existe: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::timestamp_creation_failed() {
  declare text="Falha ao criar arquivo de timestamp: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::empty_directory_failed() {
  declare text="Falha ao esvaziar o diretório: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::missing_transcode_id() {
  declare text="ID de transcodificação ausente."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::invalid_transcode_id() {
  declare text="Formato de ID de transcodificação inválido: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::invalid_mode() {
  declare text="Modo inválido: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::delete_contents_failed() {
  declare text="Falha ao excluir conteúdo do diretório de transcodificação: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::delete_jellyfin_failed() {
  declare text="Falha ao excluir arquivos de transcodificação para Jellyfin."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::missing_verify_path() {
  declare text="Caminho de transcodificação ausente para verificação."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::directory_not_empty() {
  declare text="O diretório de transcodificação não está vazio: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::remove_empty_dir_failed() {
  declare text="Falha ao remover diretório vazio: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::timestamp_not_found() {
  declare text="Arquivo de timestamp não encontrado: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::newer_files_exist() {
  declare text="Arquivos de transcodificação mais novos existem após o timestamp para: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::invalid_mode_generic() {
  declare text="Modo inválido ou ausente. Use 'emby' ou 'jellyfin'."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::service_template_not_found() {
  declare text="Arquivo de template de serviço não encontrado: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::copy_template_failed() {
  declare text="Falha ao copiar template de serviço para ${1}."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::generate_service_failed() {
  declare text="Falha ao gerar arquivo de serviço para modo '${1}'."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::reload_systemd_failed() {
  declare text="Falha ao recarregar systemd."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::enable_service_failed() {
  declare text="Falha ao habilitar e iniciar ${1}."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::stop_service_failed() {
  declare text="Falha ao parar ${1}."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::disable_service_failed() {
  declare text="Falha ao desabilitar ${1}."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::remove_service_file_failed() {
  declare text="Falha ao remover arquivo ${1}."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::reload_after_remove_failed() {
  declare text="Falha ao recarregar systemd após remover ${1}."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::invalid_transcode_dir() {
  declare text="Diretório temporário de transcodificação inválido ou ausente: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::clear_standard_failed() {
  declare text="Falha ao limpar transcodificações padrão: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::clear_livetv_failed() {
  declare text="Falha ao limpar transcodificações LiveTV: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::invalid_option() {
  declare text="Opção inválida. Use -h para ajuda."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::mode_required_c() {
  declare text="O modo (-m) é obrigatório com a opção -c. Use 'emby' ou 'jellyfin'."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::mode_required_a() {
  declare text="O modo (-m) é obrigatório com a opção -a. Use 'emby' ou 'jellyfin'."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::missing_emby_params_generic() {
  declare text="Parâmetros obrigatórios ausentes para Emby: -u"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::missing_jellyfin_params_generic() {
  declare text="Parâmetros obrigatórios ausentes para Jellyfin: -U e/ou -k"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::invalid_mode_specified() {
  declare text="Modo especificado inválido. Use 'emby' ou 'jellyfin'."
  quickbox::dashboard::log "${text}"
}

################################################################################
# Mensagens de aviso
################################################################################
quickbox::lang::wsd::warning::transcode_path_not_found() {
  declare text="TranscodingTempPath não encontrado nos dados JSON."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::warning::transcode_path_not_found_api() {
  declare text="TranscodingTempPath não encontrado na resposta da API."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::warning::autoclear_not_enabled() {
  declare text="AutoClearEnabled não é true para o modo '${1}'. Nenhuma ação necessária."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::warning::service_already_active() {
  declare text="${1} já está ativo para o modo '${2}'."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::warning::service_not_active() {
  declare text="${1} não está ativo. Não é necessário pará-lo."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::warning::service_not_enabled() {
  declare text="${1} não está habilitado. Não é necessário desabilitá-lo."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::warning::service_file_not_exist() {
  declare text="O arquivo de serviço não existe: ${1}. Nenhuma ação necessária."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::warning::autoclear_disabled() {
  declare text="Auto-limpeza está desabilitada no banco de dados. Saindo do loop."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::warning::no_matching_files_standard() {
  declare text="Nenhum arquivo correspondente encontrado para transcodificações padrão."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::warning::no_matching_files_livetv() {
  declare text="Nenhum arquivo correspondente encontrado para transcodificações LiveTV."
  quickbox::dashboard::log "${text}"
}

################################################################################
# Mensagens de informação
################################################################################
quickbox::lang::wsd::info::using_default_path() {
  declare text="Usando caminho padrão para TranscodingTempPath: "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::manual_path_set() {
  declare text="TranscodingTempPath definido manualmente para: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::timestamp_created() {
  declare text="Arquivo de timestamp criado/atualizado: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::emptying_directory() {
  declare text="Esvaziando diretório: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::transcode_dir_removed() {
  declare text="Diretório de transcodificação já removido: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::generating_service() {
  declare text="Gerando ${1} para modo '${2}'."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::reloading_systemd() {
  declare text="Recarregando systemd e habilitando ${1}."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::stopping_service() {
  declare text="Parando ${1}."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::disabling_service() {
  declare text="Desabilitando ${1}."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::removing_service_file() {
  declare text="Removendo arquivo de serviço: ${1}."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::reloading_systemd_changes() {
  declare text="Recarregando systemd para aplicar mudanças."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::running_autoclear_standard() {
  declare text="Executando auto-limpeza para transcodificações padrão em: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::running_autoclear_livetv() {
  declare text="Executando auto-limpeza para transcodificações LiveTV em: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::files_to_delete() {
  declare text="Arquivos para excluir: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::sleeping_minutes() {
  declare text="Dormindo por ${1} minutos."
  quickbox::dashboard::log "${text}"
}

################################################################################
# Mensagens de sucesso
################################################################################
quickbox::lang::wsd::success::directory_emptied() {
  declare text="[SUCESSO] Diretório esvaziado com sucesso."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::success::transcode_files_deleted() {
  declare text="Arquivos de transcodificação excluídos com sucesso."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::success::directory_removed() {
  declare text="Diretório removido com sucesso: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::success::directory_emptied_removed() {
  declare text="Diretório esvaziado e removido com sucesso: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::success::no_files_since_timestamp() {
  declare text="Nenhum arquivo pré-existente encontrado desde o timestamp para: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::success::service_enabled_started() {
  declare text="${1} habilitado e iniciado com sucesso para modo '${2}'."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::success::service_stopped_disabled_removed() {
  declare text="${1} parado, desabilitado e removido com sucesso."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::success::standard_transcodes_cleared() {
  declare text="Transcodificações padrão limpas com sucesso."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::success::livetv_transcodes_cleared() {
  declare text="Transcodificações LiveTV limpas com sucesso."
  quickbox::dashboard::log "${text}"
}

################################################################################
# Mensagens de ajuda
################################################################################
quickbox::lang::wsd::help::usage() {
  declare text="Uso:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::emby_usage() {
  declare text="  Uso do Emby:
    $0 -u 'nome_usuario_admin_servico' -m 'emby'"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::jellyfin_usage() {
  declare text="  Uso do Jellyfin:
    $0 -U 'url_api' -k 'chave_api' -m 'jellyfin'"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::manual_path() {
  declare text="  Configuração manual de caminho:
    $0 -p 'caminho_manual'"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::empty_directory() {
  declare text="  Esvaziar diretório:
    $0 -e 'caminho_diretorio'"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::verify_directory() {
  declare text="  Verificar diretório:
    $0 -v 'caminho_diretorio'"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::delete_transcode() {
  declare text="  Excluir arquivos de transcodificação:
    $0 -d 'id_transcodificacao'"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::check_enable() {
  declare text="  Verificar e habilitar o serviço qbwsd se AutoClearEnabled for true:
    $0 -c -m 'emby|jellyfin'"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::disable_remove() {
  declare text="  Desabilitar e remover o serviço qbwsd se AutoClearEnabled for false:
    $0 -r"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::run_autoclear() {
  declare text="  Executar lógica de auto-limpeza manualmente:
    $0 -a -m 'emby|jellyfin'"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::options() {
  declare text="Opções:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::option_u() {
  declare text="  -u  Nome de usuário admin do serviço (para Emby)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::option_U() {
  declare text="  -U  URL da API do Jellyfin"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::option_k() {
  declare text="  -k  Chave da API do Jellyfin"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::option_m() {
  declare text="  -m  Modo do serviço (emby ou jellyfin)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::option_p() {
  declare text="  -p  Caminho manual para TranscodingTempPath"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::option_e() {
  declare text="  -e  Esvaziar o diretório de transcodificação especificado"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::option_v() {
  declare text="  -v  Verificar se o diretório de transcodificação especificado está vazio"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::option_d() {
  declare text="  -d  Excluir arquivos de transcodificação por ID"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::option_c() {
  declare text="  -c  Verificar e habilitar o serviço qbwsd se AutoClearEnabled for true"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::option_r() {
  declare text="  -r  Desabilitar e remover o serviço qbwsd se AutoClearEnabled for false"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::option_a() {
  declare text="  -a  Executar lógica de auto-limpeza manualmente"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::option_h() {
  declare text="  -h  Mostrar esta mensagem de ajuda"
  quickbox::dashboard::log "${text}"
} 

################################################################################
# Mensagens de status do serviço (guarded)
################################################################################
if ! declare -F quickbox::lang::system::service::status::current >/dev/null 2>&1; then
quickbox::lang::system::service::status::current() {
  declare text="Status atual do serviço:"
  quickbox::dashboard::log "${text}"
}
fi

################################################################################
# Mensagens do serviço do servidor de logs
################################################################################
quickbox::lang::software::wsdashboard::service::log_server::started() {
  declare text="Serviço do servidor de logs iniciado com sucesso."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::log_server::failed() {
  declare text="Falha ao iniciar o serviço do servidor de logs."
  quickbox::dashboard::log "${text}"
}

if ! declare -F quickbox::lang::software::wsdashboard::health::service_running >/dev/null 2>&1; then
quickbox::lang::software::wsdashboard::health::service_running() {
  declare text="O serviço está em execução"
  quickbox::dashboard::log "${text}"
}
fi

if ! declare -F quickbox::lang::software::wsdashboard::health::service_not_running >/dev/null 2>&1; then
quickbox::lang::software::wsdashboard::health::service_not_running() {
  declare text="O serviço não está em execução"
  quickbox::dashboard::log "${text}"
}
fi