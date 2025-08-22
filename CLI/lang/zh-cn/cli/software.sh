#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Project Name: QuickBox Pro
# File Name: cli_software_zh-cn
# File Description: 简体中文语言文件 - 软件管理
# File Version: 1.0.23
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
# 安装操作
################################################################################
quickbox::lang::install::header() {
  declare text="${software_title} 现在将被安装
此过程可能需要几分钟..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::rutorrent::header() {
  rtorrent_count=$(quickbox::software::count rtorrent)
  if [[ ${rtorrent_count} -eq 0 ]]; then
    declare text="看起来 rTorrent 未安装

rTorrent 0.9.8 现在将安装，请稍等，这可能需要
几分钟（取决于系统规格）才能安装完成"
  else
    declare text="${software_title} 现在将被安装
此过程可能需要几分钟..."
  fi
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::sources::header() {
  declare text="正在为 ${software_title} 添加额外的密钥和源..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::dependencies::header() {
  declare text="正在安装 ${software_title} 依赖项..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::build::header() {
  declare text="正在构建 ${software_title}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::mktorrent::header() {
  declare text="正在构建 mktorrent..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::xmlrpc::header() {
  declare text="正在构建 xmlrpc-c..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::libtorrent::header() {
  declare text="正在构建 libtorrent..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::rtorrent::header() {
  declare text="正在构建 rtorrent..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::certificate::header() {
  declare text="正在为 ${d} 创建 ssl 证书..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::configure::lecert::header() {
  declare text="正在为 Let's Encrypt 配置 NGinx..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::configure::header() {
  declare text="正在配置 ${software_title}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::backup::header() {
  declare text="正在备份 ${software_title} 配置..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::start::header() {
  declare text="正在启动 ${software_title}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::complete::header() {
  declare text="${software_title} 安装完成"
  quickbox::dashboard::log "${text}"
}

################################################################################
# 重新安装操作
################################################################################
quickbox::lang::reinstall::header() {
  declare text="${software_title} 现在将被重新安装
此过程可能需要几分钟..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::reinstall::complete::header() {
  declare text="${software_title} 重新安装完成"
  quickbox::dashboard::log "${text}"
}

################################################################################
# 移除操作
################################################################################
quickbox::lang::remove::header() {
  declare text="${software_title} 现在将被移除
此过程可能需要几分钟..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::remove::stop::header() {
  declare text="正在停止 ${software_title}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::remove::dependencies::header() {
  declare text="正在移除 ${software_title} 依赖项..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::remove::files::header() {
  declare text="正在移除 ${software_title} 文件..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::remove::complete::header() {
  declare text="${software_title} 移除完成"
  quickbox::dashboard::log "${text}"
}

################################################################################
# 更新操作
################################################################################
quickbox::lang::update::header() {
  declare text="${software_title} 现在将被更新
此过程可能需要几分钟..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::files::header() {
  declare text="正在更新 ${software_title}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::complete::header() {
  declare text="${software_title} 更新完成"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::files::admin() {
  declare text="必须以管理员身份登录才能更新 ${software_title}"
  quickbox::dashboard::log "${text}"
}

################################################################################
# 软件访问信息
################################################################################
quickbox::lang::software::access() {
  declare text="访问 ${software_title}：
${quickbox_web_root}${software_name}
${software_title} 安装在端口：${software_web_port}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::mu::access() {
  declare text="访问 ${software_title}：
${quickbox_web_root}${username}/${software_name}
${software_title} 安装在端口：${software_web_port}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::admin::access() {
  declare text="访问 ${software_title}：
${quickbox_web_root}${admin_name}/${software_name}
${software_title} 安装在端口：${software_web_port}"
  quickbox::dashboard::log "${text}"
}

################################################################################
# 系统命令消息
################################################################################
quickbox::lang::system::health::check::running() {
  declare text="正在运行全面健康检查..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::service::status::current() {
  declare text="当前服务状态："
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::service::logs::recent() {
  declare text="最近的服务日志："
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::enhanced::files::removed() {
  declare text="增强的服务文件已成功移除"
  quickbox::dashboard::log "${text}"
}
