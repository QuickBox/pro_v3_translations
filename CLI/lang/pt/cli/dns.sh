#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Project Name: QuickBox Pro
# File Name: cli_dns_pt_br
# File Description: Arquivo de idioma português (Brasil) - Gerenciamento de Credenciais DNS
# File Version: 1.0.2
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
# Mensagens de Status de Credenciais DNS
################################################################################
quickbox::lang::dns::credentials::status::header() {
  declare text="=== Status das Credenciais DNS ==="
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::no_credentials() {
  declare text="Nenhuma credencial DNS encontrada - account.conf não existe"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::setup_help() {
  declare text="Use 'qb dns-setup <provedor>' para configurar credenciais para um provedor específico"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::configured_providers() {
  declare text="Provedores DNS configurados:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::provider_count() {
  declare text="${provider}: ${count} credencial(is)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::total_credentials() {
  declare text="Total de credenciais encontradas: ${total_credentials}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::check_help() {
  declare text="Para verificar credenciais de um provedor específico:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::check_command() {
  declare text="  qb dns-credentials check <provedor>"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::setup_help_header() {
  declare text="Para configurar provedores adicionais:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::setup_command() {
  declare text="  qb dns-setup <provedor>"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::no_providers() {
  declare text="Nenhuma credencial DNS encontrada em account.conf"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::setup_instructions() {
  declare text="Para configurar credenciais DNS:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::available_providers() {
  declare text="Provedores disponíveis:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::provider_list() {
  declare text="  cloudflare, route53, digitalocean, namecheap, godaddy, linode, ovh, vultr, gandi, dnsimple, hurricane, azure, gcp, ionos"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Mensagens de Erro de Credenciais DNS
################################################################################
quickbox::lang::dns::credentials::error::no_provider() {
  declare text="ERRO: Nenhum provedor DNS especificado"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::error::unknown_command() {
  declare text="ERRO: Comando dns-credentials desconhecido: ${task}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::error::invalid_provider() {
  declare text="ERRO: Provedor DNS inválido: ${provider}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::error::temp_file_not_found() {
  declare text="ERRO: Arquivo de credenciais temporário não encontrado ou não legível: ${temp_file}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::error::no_credentials_in_file() {
  declare text="ERRO: Nenhuma credencial encontrada no arquivo temporário"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::error::write_failed() {
  declare text="ERRO: Falha ao escrever credenciais em account.conf"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::error::account_conf_not_found() {
  declare text="ERRO: Arquivo de configuração da conta não encontrado: ${account_conf}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::error::no_credentials_for_provider() {
  declare text="ERRO: Nenhuma credencial encontrada para o provedor: ${provider}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::error::setup_invalid_provider() {
  declare text="ERRO: Provedor DNS inválido: ${provider}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::error::setup_show_available() {
  declare text="Execute 'qb dns-setup' para ver os provedores disponíveis."
  quickbox::dashboard::log "${text}"
}

################################################################################
# Mensagens de Sucesso de Credenciais DNS
################################################################################
quickbox::lang::dns::credentials::success::written() {
  declare text="SUCESSO: Credenciais DNS para ${provider} escritas em account.conf"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::success::test_valid() {
  declare text="SUCESSO: Configuração do provedor DNS ${provider} encontrada e parece válida"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::success::test_note() {
  declare text="Nota: Isso apenas valida que as credenciais existem. Validação completa de DNS requer um domínio de teste."
  quickbox::dashboard::log "${text}"
}

################################################################################
# Mensagens de Uso de Credenciais DNS
################################################################################
quickbox::lang::dns::credentials::usage::check() {
  declare text="Uso: qb dns-credentials check <provedor>"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::usage::general() {
  declare text="Uso: qb dns-credentials <comando> [provedor]"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::usage::available_commands() {
  declare text="Comandos disponíveis: check, status"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::usage::setup() {
  declare text="Uso: qb dns-setup <provedor>"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Mensagens de Configuração de Credenciais DNS
################################################################################
quickbox::lang::dns::credentials::setup::header() {
  declare text="=== Configuração de Credenciais DNS ==="
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::available_providers() {
  declare text="Provedores DNS disponíveis:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::provider_cloudflare() {
  declare text="  cloudflare (cf)     - DNS Cloudflare"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::provider_route53() {
  declare text="  route53             - AWS Route53"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::provider_digitalocean() {
  declare text="  digitalocean (do)   - DNS DigitalOcean"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::provider_godaddy() {
  declare text="  godaddy             - DNS GoDaddy"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::provider_namecheap() {
  declare text="  namecheap           - DNS Namecheap"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::provider_linode() {
  declare text="  linode              - DNS Linode"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::provider_ovh() {
  declare text="  ovh                 - DNS OVH"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::provider_vultr() {
  declare text="  vultr               - DNS Vultr"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::provider_gandi() {
  declare text="  gandi               - Gandi LiveDNS"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::provider_dnsimple() {
  declare text="  dnsimple            - DNSimple"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::provider_hurricane() {
  declare text="  hurricane (he)      - Hurricane Electric"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::provider_azure() {
  declare text="  azure               - Azure DNS"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::provider_gcp() {
  declare text="  gcp                 - Google Cloud DNS"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::provider_ionos() {
  declare text="  ionos               - DNS IONOS"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::example() {
  declare text="Exemplo: qb dns-setup cloudflare"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::fallback_header() {
  declare text="=== Configuração de Credenciais DNS para ${provider} ==="
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::fallback_referral() {
  declare text="Por favor, consulte a documentação do acme.sh para configuração do ${provider}:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::fallback_url() {
  declare text="https://github.com/acmesh-official/acme.sh/wiki/dnsapi#dns_${provider}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::fallback_test() {
  declare text="Após configurar as credenciais, você pode testá-las com:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::fallback_test_command() {
  declare text="qb dns-test ${provider}"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Mensagens de Backup de Credenciais DNS
################################################################################
quickbox::lang::dns::credentials::backup::restored() {
  declare text="Configuração de backup restaurada"
  quickbox::dashboard::log "${text}"
} 