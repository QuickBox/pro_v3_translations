#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Project Name: QuickBox Pro
# File Name: cli_ssl_zh-cn
# File Description: 简体中文语言文件 - SSL/LetsEncrypt操作
# File Version: 1.0.13
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
# 续期 - Let's Encrypt
################################################################################
quickbox::lang::install::lecert::complete() {
  declare -a domain_array
  if [[ -n "${dash}" ]]; then
    domain_array+=("https://${domain_options[dash]}")
    application_array+=("QuickBox")
  fi
  if [[ -n "${emby}" ]]; then
    domain_array+=("https://${domain_options[emby]}")
    application_array+=("Emby")
  fi
  if [[ -n "${jellyfin}" ]]; then
    domain_array+=("https://${domain_options[jellyfin]}")
    application_array+=("Jellyfin")
  fi
  if [[ -n "${jellyseerr}" ]]; then
    domain_array+=("https://${domain_options[jellyseerr]}")
    application_array+=("Jellyseerr")
  fi
  if [[ -n "${komga}" ]]; then
    domain_array+=("https://${domain_options[komga]}")
    application_array+=("Komga")
  fi
  if [[ -n "${overseerr}" ]]; then
    domain_array+=("https://${domain_options[overseerr]}")
    application_array+=("Overseerr")
  fi
  if [[ -n "${plex}" ]]; then
    domain_array+=("https://${domain_options[plex]}")
    application_array+=("Plex")
  fi
  if [[ -n "${no_dash}" ]]; then
    domain_array+=("${domain}")
    application_array+=("自定义域名已")
  fi
  for ((i = 0; i < ${#domain_array[@]}; i++)); do
    declare text="${application_array[i]} 的 ssl 证书已安装。
域名：${domain_array[i]}"
  done
  quickbox::dashboard::log "${text}"
}

quickbox::lang::renew::certificates::header() {
  declare text="ssl 证书续期过程现在开始"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::renew::complete::header() {
  declare text="ssl 证书续期完成"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::renew() {
  # 用逗号分隔域名条目，并将最终条目设置为"和"
  for ((i = 0; i < ${#domain[@]}; i++)); do
    if [[ ${i} -eq 0 ]]; then
      declare text="${domain[i]}"
    elif [[ ${i} -eq $((${#domain[@]} - 1)) ]]; then
      declare text="${text} 和 ${domain[i]}"
    else
      declare text="${text}, ${domain[i]}"
    fi
  done
  declare text="正在续期 ${text} 的 ssl 证书..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::renew::info() {
  created_array="${certificate_created}"
  expires_array="${certificate_expiry}"
  days_left_array="${certificate_days_left}"
  # 为完成消息创建证书信息标题
  declare text_header="
证书信息：
"
  # 为每个域名创建证书信息
  declare text="域名：${d}
创建时间：${created_array[*]}
过期时间：${expires_array[*]}
剩余天数：${days_left_array[*]}
"
  # 对于多个域名只显示一次 text_header
  if [[ ${d} == "${domain[0]}" ]]; then
    quickbox::dashboard::log "${text_header}
${text}"
  else
    quickbox::dashboard::log "${text}"
  fi
}

quickbox::lang::reinstall::lecert::complete::header() {
  declare text="ssl 证书重新安装完成"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::remove::cert::complete::header() {
  declare text="ssl 证书移除完成"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Lecert DNS 挑战消息
################################################################################
quickbox::lang::lecert::dns::provider::valid() {
  declare text="✅ 使用 DNS 提供商：${dns_provider}（插件：${dns_plugin}）"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::provider::invalid() {
  declare text="❌ 不支持的 DNS 提供商：${dns_provider}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::provider::supported() {
  declare text="支持的提供商：${!SUPPORTED_DNS_PROVIDERS[*]}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::wildcard::dns::required() {
  declare text="❌ 通配符域名需要 DNS 挑战"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::domain::not::set() {
  declare text="错误：未设置域名。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::credentials::loaded() {
  declare text="✅ 已从 account.conf 加载 DNS 凭据"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::challenge::mode() {
  declare text="使用 DNS 挑战，提供商：${dns_provider}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::http::challenge::mode() {
  declare text="使用 HTTP 挑战"
  quickbox::dashboard::log "${text}"
}

# DNS 提供商凭据错误消息
quickbox::lang::lecert::dns::cloudflare::error() {
  declare text="Cloudflare 的 DNS 挑战需要 CF_Token 或 CF_Email/CF_Key 环境变量"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::route53::error() {
  declare text="Route53 的 DNS 挑战需要 AWS_ACCESS_KEY_ID 和 AWS_SECRET_ACCESS_KEY"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::godaddy::error() {
  declare text="GoDaddy 的 DNS 挑战需要 GD_Key 和 GD_Secret 环境变量"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::namecheap::error() {
  declare text="Namecheap 的 DNS 挑战需要 Namecheap_Username 和 Namecheap_ApiKey 环境变量"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::digitalocean::error() {
  declare text="DigitalOcean 的 DNS 挑战需要 DO_API_KEY 环境变量"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::linode::error() {
  declare text="Linode 的 DNS 挑战需要 LINODE_V4_API_KEY 环境变量"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::ovh::error() {
  declare text="OVH 的 DNS 挑战需要 OVH_AK、OVH_AS 和 OVH_CK 环境变量"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::vultr::error() {
  declare text="Vultr 的 DNS 挑战需要 VULTR_API_KEY 环境变量"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::gandi::error() {
  declare text="Gandi 的 DNS 挑战需要 GANDI_LIVEDNS_KEY 环境变量"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::dnsimple::error() {
  declare text="DNSimple 的 DNS 挑战需要 DNSimple_OAUTH_TOKEN 环境变量"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::hurricane::error() {
  declare text="Hurricane Electric 的 DNS 挑战需要 HE_Username 和 HE_Password 环境变量"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::azure::error() {
  declare text="Azure 的 DNS 挑战需要 AZUREDNS_SUBSCRIPTIONID、AZUREDNS_TENANTID、AZUREDNS_APPID 和 AZUREDNS_CLIENTSECRET 环境变量"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::gcp::error() {
  declare text="Google Cloud Platform 的 DNS 挑战需要 GCP_PROJECT 和 GCP_SERVICE_ACCOUNT_JSON_FILE 环境变量"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::ionos::error() {
  declare text="IONOS 的 DNS 挑战需要 IONOS_PREFIX 和 IONOS_SECRET 环境变量"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::credentials::help() {
  declare text="通过 QuickBox 仪表板设置或在 /root/.acme.sh/account.conf 中手动设置"
  quickbox::dashboard::log "${text}"
}

# DNS 错误终止消息
quickbox::lang::lecert::error::domain::empty() {
  declare text="域名不能为空"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::dns::provider::required() {
  declare text="使用 DNS 挑战时必须指定 DNS 提供商。使用 --dns-provider <provider>"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::dns::provider::unsupported() {
  declare text="不支持的 DNS 提供商：${dns_provider}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::wildcard::dns::flag() {
  declare text="通配符域名 ${domain} 需要 --dns 标志"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::move::root() {
  declare text="无法移动到 /root"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::move::acme() {
  declare text="无法移动到 /root/acme.sh"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::certificate::install() {
  declare text="无法为 ${d} 安装证书"
  quickbox::dashboard::log "${text}"
}

# DNS 提供商凭据终止消息
quickbox::lang::lecert::error::cloudflare::credentials() {
  declare text="Cloudflare DNS 凭据未配置"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::route53::credentials() {
  declare text="Route53 DNS 凭据未配置"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::godaddy::credentials() {
  declare text="GoDaddy DNS 凭据未配置"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::namecheap::credentials() {
  declare text="Namecheap DNS 凭据未配置"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::digitalocean::credentials() {
  declare text="DigitalOcean DNS 凭据未配置"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::linode::credentials() {
  declare text="Linode DNS 凭据未配置"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::ovh::credentials() {
  declare text="OVH DNS 凭据未配置"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::vultr::credentials() {
  declare text="Vultr DNS 凭据未配置"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::gandi::credentials() {
  declare text="Gandi DNS 凭据未配置"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::dnsimple::credentials() {
  declare text="DNSimple DNS 凭据未配置"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::hurricane::credentials() {
  declare text="Hurricane Electric DNS 凭据未配置"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::azure::credentials() {
  declare text="Azure DNS 凭据未配置"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::gcp::credentials() {
  declare text="GCP DNS 凭据未配置"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::ionos::credentials() {
  declare text="IONOS DNS 凭据未配置"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Lecert Sudoers 和安全消息
################################################################################
quickbox::lang::lecert::error::sudoers::create() {
  declare text="无法为 www-data 访问 account.conf 创建 sudoers 文件"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::sudoers::created() {
  declare text="已创建 sudoers 文件以安全访问 DNS 凭据"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Lecert 信息消息
################################################################################
quickbox::lang::lecert::info::certificate::valid::skip() {
  declare text="证书仍然有效，跳过续期"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::info::acme::failed() {
  declare text="错误：acme.sh 命令失败。输出："
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::info::certificate::exists() {
  declare text="${d} 的证书文件已存在，检查有效性..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::info::certificate::valid::exists() {
  declare text="${d} 的证书仍然有效，跳过安装"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::info::certificate::expired::reinstall() {
  declare text="${d} 的证书已过期或即将过期，重新安装..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::info::verification::retry() {
  declare text="证书验证失败，重试中...（${retry_count}/${max_retries}）"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::info::cleanup::start() {
  declare text="证书生成后执行清理..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::info::nginx::valid::reload() {
  declare text="Nginx 配置有效，重新加载中..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::warning::nginx::test::failed() {
  declare text="警告：Nginx 配置测试失败，可能需要手动干预"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::info::cleanup::complete() {
  declare text="清理成功完成"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Lecert 交互式 DNS 设置消息
################################################################################
quickbox::lang::lecert::dns::interactive::header() {
  declare text="=== 交互式 DNS 凭据设置 ==="
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::header() {
  declare text="设置 Cloudflare DNS 凭据..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::options() {
  declare text="选择您的身份验证方法："
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::option1() {
  declare text="1. API 令牌（推荐）"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::option2() {
  declare text="2. 全局 API 密钥 + 电子邮件"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::api::header() {
  declare text="=== API Token Method ==="
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::api::step1() {
  declare text="1. Go to Cloudflare Dashboard > My Profile > API Tokens"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::api::step2() {
  declare text="2. Create a new token with Zone:DNS:Edit permissions"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::api::step3() {
  declare text="3. Enter your API token below:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::api::error() {
  declare text="❌ API token cannot be empty"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::legacy::header() {
  declare text="=== Global API Key Method ==="
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::legacy::step1() {
  declare text="1. Go to Cloudflare Dashboard > My Profile > API Keys"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::legacy::step2() {
  declare text="2. Copy your Global API Key and Email"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::legacy::error() {
  declare text="❌ Email and Global API Key cannot be empty"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::invalid() {
  declare text="❌ Invalid option selected"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::route53::header() {
  declare text="Setting up AWS Route53 DNS credentials..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::route53::intro() {
  declare text="You need AWS Access Key ID and Secret Access Key with Route53 permissions:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::route53::error() {
  declare text="❌ Access Key ID and Secret Access Key cannot be empty"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::digitalocean::header() {
  declare text="Setting up DigitalOcean DNS credentials..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::digitalocean::step1() {
  declare text="1. Go to DigitalOcean Dashboard > API > Tokens/Keys"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::digitalocean::step2() {
  declare text="2. Generate a new API token with Write permissions"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::digitalocean::error() {
  declare text="❌ API token cannot be empty"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::not::implemented() {
  declare text="❌ Interactive setup not implemented for this provider"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::manual::setup() {
  declare text="Please set up credentials manually in /root/.acme.sh/account.conf"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::success() {
  declare text="✅ DNS credentials saved successfully"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::continue() {
  declare text="Continuing with certificate installation..."
  quickbox::dashboard::log "${text}"
}

################################################################################
# Lecert Prompt Messages
################################################################################
quickbox::lang::lecert::prompt::setup::cloudflare() {
  declare text="Would you like to set up Cloudflare credentials now? (y/n): "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::prompt::setup::route53() {
  declare text="Would you like to set up Route53 credentials now? (y/n): "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::prompt::setup::digitalocean() {
  declare text="Would you like to set up DigitalOcean credentials now? (y/n): "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::prompt::cloudflare::method() {
  declare text="Enter your choice (1 or 2): "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::prompt::cloudflare::api_token() {
  declare text="Enter your Cloudflare API Token: "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::prompt::cloudflare::email() {
  declare text="Enter your Cloudflare Email: "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::prompt::cloudflare::global_key() {
  declare text="Enter your Cloudflare Global API Key: "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::prompt::route53::access_key() {
  declare text="输入您的 AWS 访问密钥 ID："
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::prompt::route53::secret_key() {
  declare text="输入您的 AWS 秘密访问密钥："
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::prompt::digitalocean::api_token() {
  declare text="输入您的 DigitalOcean API 令牌："
  quickbox::dashboard::log "${text}"
}

################################################################################
# Lecert DNS 凭据设置消息
################################################################################
quickbox::lang::lecert::dns::setup::cloudflare::header() {
  declare text="=== Cloudflare DNS 凭据设置 ==="
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::intro() {
  declare text="要使用 Cloudflare 的 DNS 挑战，您需要设置 API 凭据："
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option1::header() {
  declare text="选项 1：QuickBox 仪表板（推荐）"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option1::step1() {
  declare text="1. 转到您的 QuickBox 仪表板"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option1::step2() {
  declare text="2. 导航到设置 > DNS 凭据"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option1::step3() {
  declare text="3. 选择 Cloudflare 并输入您的 API 令牌"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option1::step4() {
  declare text="4. 保存配置"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option2::header() {
  declare text="Option 2: Manual Setup"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option2::step1() {
  declare text="1. Go to https://dash.cloudflare.com/profile/api-tokens"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option2::step2() {
  declare text="2. Create a new API token with the following permissions:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option2::step2a() {
  declare text="   - Zone:Zone:Read"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option2::step2b() {
  declare text="   - Zone:DNS:Edit"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option2::step3() {
  declare text="3. Set the zone resources to 'Include: All zones'"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option2::step4() {
  declare text="4. Copy the generated token"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option2::step5() {
  declare text="5. Run: qb dns-credentials cloudflare <token>"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option3::header() {
  declare text="Option 3: Legacy API Key (if you have an older account)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option3::step1() {
  declare text="1. Go to https://dash.cloudflare.com/profile/api-keys"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option3::step2() {
  declare text="2. Copy your Global API Key"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option3::step3() {
  declare text="3. Note your account email address"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option3::step4() {
  declare text="4. Run: qb dns-credentials cloudflare-legacy <email> <api_key>"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::route53::header() {
  declare text="=== AWS Route53 DNS Credentials Setup ==="
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::route53::intro() {
  declare text="To use DNS challenge with Route53, you need AWS credentials:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::route53::step1() {
  declare text="1. Create an IAM user with the following policy:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::route53::step1a() {
  declare text="   - Route53FullAccess"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::route53::step2() {
  declare text="2. Generate Access Key ID and Secret Access Key"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::route53::step3() {
  declare text="3. Run: qb dns-credentials route53 <access_key_id> <secret_access_key>"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::digitalocean::header() {
  declare text="=== DigitalOcean DNS Credentials Setup ==="
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::digitalocean::intro() {
  declare text="To use DNS challenge with DigitalOcean, you need an API token:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::digitalocean::step1() {
  declare text="1. Go to https://cloud.digitalocean.com/account/api/tokens"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::digitalocean::step2() {
  declare text="2. Generate a new API token with 'Write' access"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::digitalocean::step3() {
  declare text="3. Copy the generated token"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::digitalocean::step4() {
  declare text="4. Run: qb dns-credentials digitalocean <token>"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::generic::header() {
  declare text="=== DNS Credentials Setup ==="
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::generic::intro() {
  declare text="To use DNS challenge with ${provider}, you need to configure credentials."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::generic::referral() {
  declare text="Please refer to the acme.sh documentation for ${provider} setup:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::generic::url() {
  declare text="https://github.com/acmesh-official/acme.sh/wiki/dnsapi#dns_${provider}"
  quickbox::dashboard::log "${text}"
} 