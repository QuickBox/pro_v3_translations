#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Project Name: QuickBox Pro
# File Name: cli_manager_zh-cn
# File Description: 简体中文语言文件 - 软件管理器
# File Version: 1.0.5
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
#
# License: BSD-3 (Available in LICENSE.md)
# Copyright (C) 2019-2025, QuickBox.IO
# All rights reserved.
# <END METADATA>
# shellcheck disable=2001,2034,2154,2312,2317
################################################################################

################################################################################
# QB 管理器 - 软件管理
################################################################################

### 备份操作
quickbox::lang::backup::configf() {
  declare text="${software_name} 的配置文件现在正在备份。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::backup::configf::error() {
  declare text="配置文件 ${softwareConf} 不存在。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::backup::configf::success() {
  declare text="配置文件已备份。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::backup::installdir::error() {
  declare text="${software_title} 安装目录不存在。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::backup::installdir() {
  declare text="${software_title} (${backup_version}) 的安装目录现在正在备份。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::backup::configdir() {
  declare text="${software_title} 的配置目录现在正在备份。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::backup::installdir::success() {
  backup_version="$(tput setaf 5)${backup_version}$(tput setaf 2)"
  declare text="${software_title} (${backup_version}) 已备份。"
  quickbox::dashboard::log "${text}$(tput sgr0)"
}

### 恢复操作
quickbox::lang::restore::configf::error() {
  declare text="备份文件 ${backupConf} 不存在。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::restore::configf::success() {
  declare text="备份文件已恢复。"
  quickbox::dashboard::log "${text}"
}

### 默认操作
quickbox::lang::default::configf::error() {
  declare text="默认配置文件 ${defaultConf} 不存在。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::default::configf::success() {
  declare text="默认配置文件已恢复。"
  quickbox::dashboard::log "${text}"
}

### 回滚操作
quickbox::lang::rollback::installdir::error() {
  declare text="${software_title} 安装目录不存在。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::rollback::selection::version() {
  declare text="版本："
  quickbox::dashboard::log "${text}"
}

quickbox::lang::rollback::selection::date() {
  declare text="日期："
  quickbox::dashboard::log "${text}"
}

quickbox::lang::rollback::selection() {
  declare text="从下面的列表中选择一个数字来回滚
到 ${software_title} 的先前版本："
  quickbox::dashboard::log "${text}"
}

quickbox::lang::rollback::selection::invalid() {
  declare text="选择无效。请重试。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::rollback::software::error() {
  declare text="${software_title} 应用程序备份不存在。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::rollback::config::error() {
  declare text="${software_title} 配置备份不存在。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::rollback::selection::display() {
  version="$(tput setaf 5)${version}$(tput setaf 7)"
  app_package="$(tput setaf 5)${app_package}$(tput setaf 7)"
  config_package="$(tput setaf 5)${config_package}$(tput setaf 7)"
  declare text="您已为 ${software_title} 选择版本 ${version}。
应用程序包：${app_package}
配置包：${config_package}"
  quickbox::dashboard::log "${text}$(tput sgr0)"
}

quickbox::lang::rollback::selection::confirm() {
  declare text="您确定要继续回滚吗？(y/n)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::rollback::cancelled() {
  declare text="回滚已取消。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::rollback::continue() {
  version="$(tput setaf 5)${version}$(tput setaf 7)"
  declare text="${software_title} 现在正在回滚到版本 ${version}。"
  quickbox::dashboard::log "${text}$(tput sgr0)"
}

quickbox::lang::rollback::complete() {
  version="$(tput setaf 5)${version}$(tput setaf 2)"
  declare text="${software_title} (${version}) 已回滚。"
  quickbox::dashboard::log "${text}$(tput sgr0)"
}

### 删除操作
quickbox::lang::delete::selection::version() {
  declare text="版本："
  quickbox::dashboard::log "${text}"
}

quickbox::lang::delete::selection::date() {
  declare text="日期："
  quickbox::dashboard::log "${text}"
}

quickbox::lang::delete::selection() {
  declare text="从下面的列表中选择一个数字来删除
${software_title} 的先前备份："
  quickbox::dashboard::log "${text}"
}

quickbox::lang::delete::selection::invalid() {
  declare text="选择无效。请重试。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::delete::selection::display() {
  version="$(tput setaf 5)${version}$(tput setaf 7)"
  app_package="$(tput setaf 5)${app_package}$(tput setaf 7)"
  config_package="$(tput setaf 5)${config_package}$(tput setaf 7)"
  declare text="您已为 ${software_title} 选择版本 ${version}。
应用程序包：${app_package}
配置包：${config_package}"
  quickbox::dashboard::log "${text}$(tput sgr0)"
}

quickbox::lang::delete::selection::confirm() {
  declare text="您确定要继续删除吗？(y/n)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::delete::cancelled() {
  declare text="备份删除已取消。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::delete::continue() {
  version="$(tput setaf 5)${version}$(tput setaf 7)"
  declare text="${software_title} 备份 (${version}) 现在正在删除。"
  quickbox::dashboard::log "${text}$(tput sgr0)"
}

quickbox::lang::delete::complete() {
  version="$(tput setaf 5)${version}$(tput setaf 2)"
  declare text="${software_title} 备份 (${version}) 已删除。"
  quickbox::dashboard::log "${text}$(tput sgr0)"
}