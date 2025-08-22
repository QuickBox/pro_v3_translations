#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Project Name: QuickBox Pro
# File Name: cli_wsd_zh-cn
# File Description: Chinese language file - WSD (What's Streaming Dashboard) CLI
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
  declare text="当前服务状态："
  quickbox::dashboard::log "${text}"
}

################################################################################
# Installation Requirements
################################################################################
quickbox::lang::wsd::neither_installed() {
  declare text="既未安装Emby也未安装Jellyfin。WSDashboard需要其中一个流媒体应用程序才能运行。"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Port Management
################################################################################
quickbox::lang::wsd::port::fallback_used() {
  declare text="使用备用端口 ${1}，因为没有其他可用端口"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Environment Configuration
################################################################################
quickbox::lang::wsd::env::port_recovered_from_nginx() {
  declare text="从nginx配置中恢复端口：${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::env::port_using_available() {
  declare text="使用可用端口：${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::env::current_port_empty() {
  declare text="当前端口为空或为零，无法继续更新env.conf"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::env::streaming_app_empty() {
  declare text="流媒体应用程序为空，无法继续更新env.conf"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::env::boilerplate_remaining() {
  declare text="env.conf中仍有一些样板占位符"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::env::update_success() {
  declare text="环境配置更新成功：应用=${1}，端口=${2}，日志端口=${3}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::env::backup_created() {
  declare text="备份创建于：${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::env::boilerplate_detected() {
  declare text="在env.conf中检测到样板占位符"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Nginx Configuration
################################################################################
quickbox::lang::wsd::nginx::config_missing() {
  declare text="Nginx配置文件缺失，无法验证"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::nginx::port_updated() {
  declare text="Nginx端口已从 ${1} 更新为 ${2}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::nginx::config_invalid() {
  declare text="Nginx配置无效"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Plugin Management
################################################################################
quickbox::lang::wsd::plugin::fetch::api_error() {
  declare text="获取插件时发生API错误"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::plugin::fetch::download_error() {
  declare text="获取插件时发生下载错误"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::plugin::fetch::unzip_error() {
  declare text="获取插件时发生解压错误"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::plugin::fetch::missing_directory() {
  declare text="插件存档中缺少必需目录"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::plugin::fetch::missing_directory_warning() {
  declare text="警告：在插件存档中未找到目录 ${1}（为旧安装继续执行）"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::plugin::fetch::complete() {
  declare text="WSD插件获取和解压完成"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::plugin::fetch::up_to_date() {
  declare text="WSD插件已是最新版本"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Virtual Environment
################################################################################
quickbox::lang::wsd::virtual_env::nodeenv_failed() {
  declare text="在Python虚拟环境中安装nodeenv失败：${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::virtual_env::nodejs_failed() {
  declare text="创建Node.js虚拟环境失败：${1}"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Service Management
################################################################################
quickbox::lang::wsd::service::start::success() {
  declare text="服务启动成功"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::start::failed() {
  declare text="服务启动失败"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::start::starting() {
  declare text="正在启动服务..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::start::success_attempt() {
  declare text="服务在第 ${1} 次尝试时成功启动"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::start::retry() {
  declare text="重试服务启动（第 ${1} 次尝试）"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::start::command_failed() {
  declare text="服务启动命令失败"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::health::passed() {
  declare text="健康检查通过"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::health::warnings() {
  declare text="健康检查完成，但有警告"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::fix::attempting() {
  declare text="正在尝试修复服务问题"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::stop::starting() {
  declare text="正在停止服务..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::stop::force() {
  declare text="强制停止服务"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::stop::cleanup() {
  declare text="清理剩余进程"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::stop::warning() {
  declare text="服务停止警告"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::stop::success() {
  declare text="服务成功停止"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::log_server::started() {
  declare text="日志服务器服务启动成功"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::log_server::failed() {
  declare text="日志服务器服务启动失败"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::update::success() {
  declare text="服务更新成功"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::update::failed() {
  declare text="服务更新失败"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Access Information
################################################################################
quickbox::lang::wsd::access() {
  declare text="访问WSDashboard：http://localhost:${software_daemon_port}"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Maintenance
################################################################################
quickbox::lang::wsd::maintenance::header() {
  declare text="WSDashboard维护模式"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::maintenance::title() {
  declare text="WSDashboard维护"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::maintenance::service_not_found() {
  declare text="未找到WSDashboard服务"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::maintenance::completed_success() {
  declare text="维护成功完成"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::maintenance::completed_warnings() {
  declare text="维护完成，但有警告"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::maintenance::complete() {
  declare text="维护完成"
  quickbox::dashboard::log "${text}"
}
