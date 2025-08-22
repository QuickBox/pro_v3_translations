#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Project Name: QuickBox Pro
# File Name: cli_vpn_zh-cn
# File Description: 简体中文语言文件 - VPN/WireGuard操作
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
# VPN操作
################################################################################
quickbox::lang::software::vpnzip::access() {
  declare text="下载 ${software_title} 配置文件：
${quickbox_web_root}${username}/ovpn.zip
> 用于任何 OpenVPN 客户端"
  quickbox::dashboard::log "${text}"
}

################################################################################
# WireGuard操作
################################################################################
quickbox::lang::wireguard::client_config() {
  declare text="正在为 $1 设置客户端配置"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::server_config() {
  declare text="正在为 $1 设置服务器配置"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::configure::client_ask() {
  declare text="您想要输入客户端配置吗？(y/n)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::configure::client_paste() {
  declare text="请在下面粘贴或输入客户端配置。完成后按 ctrl+D 或 ⌘+D 继续。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::configure::client_ask_extra() {
  declare text="您想要输入另一个客户端配置吗？(y/n)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::configure::client_ask_extra_error() {
  declare text="输入无效。请输入 'y' 或 'n'。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::mtuendpoint::error() {
  declare text="错误：'calc' 过程需要 --mtu 和 --endpoint 参数"
  quickbox::dashboard::log "${text}"
} 