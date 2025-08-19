#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Project Name: QuickBox Pro
# File Name: cli_dns_zh-cn
# File Description: 简体中文语言文件 - DNS凭据管理
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
# DNS凭据状态消息
################################################################################
quickbox::lang::dns::credentials::status::header() {
  declare text="=== DNS凭据状态 ==="
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::no_credentials() {
  declare text="未找到DNS凭据 - account.conf不存在"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::setup_help() {
  declare text="使用 'qb dns-setup <provider>' 为特定提供商设置凭据"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::configured_providers() {
  declare text="已配置的DNS提供商："
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::provider_count() {
  declare text="${provider}：${count} 个凭据"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::total_credentials() {
  declare text="找到的凭据总数：${total_credentials}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::check_help() {
  declare text="要检查特定提供商凭据："
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::check_command() {
  declare text="  qb dns-credentials check <provider>"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::setup_help_header() {
  declare text="要设置其他提供商："
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::setup_command() {
  declare text="  qb dns-setup <provider>"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::no_providers() {
  declare text="在account.conf中未找到DNS凭据"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::setup_instructions() {
  declare text="要设置DNS凭据："
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::available_providers() {
  declare text="可用提供商："
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::provider_list() {
  declare text="  cloudflare, route53, digitalocean, namecheap, godaddy, linode, ovh, vultr, gandi, dnsimple, hurricane, azure, gcp, ionos"
  quickbox::dashboard::log "${text}"
}

################################################################################
# DNS凭据错误消息
################################################################################
quickbox::lang::dns::credentials::error::no_provider() {
  declare text="错误：未指定DNS提供商"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::error::unknown_command() {
  declare text="错误：未知的dns-credentials命令：${task}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::error::invalid_provider() {
  declare text="错误：无效的DNS提供商：${provider}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::error::temp_file_not_found() {
  declare text="错误：临时凭据文件未找到或不可读：${temp_file}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::error::no_credentials_in_file() {
  declare text="错误：在临时文件中未找到凭据"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::error::write_failed() {
  declare text="错误：无法将凭据写入account.conf"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::error::account_conf_not_found() {
  declare text="错误：未找到账户配置文件：${account_conf}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::error::no_credentials_for_provider() {
  declare text="错误：未找到提供商凭据：${provider}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::error::setup_invalid_provider() {
  declare text="错误：无效的DNS提供商：${provider}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::error::setup_show_available() {
  declare text="运行 'qb dns-setup' 查看可用提供商。"
  quickbox::dashboard::log "${text}"
}

################################################################################
# DNS凭据成功消息
################################################################################
quickbox::lang::dns::credentials::success::written() {
  declare text="成功：${provider}的DNS凭据已写入account.conf"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::success::test_valid() {
  declare text="成功：找到DNS提供商${provider}配置且看起来有效"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::success::test_note() {
  declare text="注意：这仅验证凭据存在。完整的DNS验证需要测试域名。"
  quickbox::dashboard::log "${text}"
}

################################################################################
# DNS凭据用法消息
################################################################################
quickbox::lang::dns::credentials::usage::check() {
  declare text="用法：qb dns-credentials check <provider>"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::usage::general() {
  declare text="用法：qb dns-credentials <command> [provider]"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::usage::available_commands() {
  declare text="可用命令：check, status"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::usage::setup() {
  declare text="用法：qb dns-setup <provider>"
  quickbox::dashboard::log "${text}"
}

################################################################################
# DNS凭据设置消息
################################################################################
quickbox::lang::dns::credentials::setup::header() {
  declare text="=== DNS凭据设置 ==="
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::available_providers() {
  declare text="可用的DNS提供商："
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::provider_cloudflare() {
  declare text="  cloudflare (cf)     - Cloudflare DNS"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::provider_route53() {
  declare text="  route53             - AWS Route53"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::provider_digitalocean() {
  declare text="  digitalocean (do)   - DigitalOcean DNS"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::provider_godaddy() {
  declare text="  godaddy             - GoDaddy DNS"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::provider_namecheap() {
  declare text="  namecheap           - Namecheap DNS"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::provider_linode() {
  declare text="  linode              - Linode DNS"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::provider_ovh() {
  declare text="  ovh                 - OVH DNS"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::provider_vultr() {
  declare text="  vultr               - Vultr DNS"
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
  declare text="  ionos               - IONOS DNS"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::example() {
  declare text="示例：qb dns-setup cloudflare"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::fallback_header() {
  declare text="=== ${provider}的DNS凭据设置 ==="
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::fallback_referral() {
  declare text="请参考acme.sh文档了解${provider}设置："
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::fallback_url() {
  declare text="https://github.com/acmesh-official/acme.sh/wiki/dnsapi#dns_${provider}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::fallback_test() {
  declare text="设置凭据后，您可以使用以下命令测试："
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::fallback_test_command() {
  declare text="qb dns-test ${provider}"
  quickbox::dashboard::log "${text}"
}

################################################################################
# DNS凭据备份消息
################################################################################
quickbox::lang::dns::credentials::backup::restored() {
  declare text="已恢复备份配置"
  quickbox::dashboard::log "${text}"
} 