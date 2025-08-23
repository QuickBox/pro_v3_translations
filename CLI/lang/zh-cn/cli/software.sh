#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Project Name: QuickBox Pro
# File Name: cli_software_zh-cn
# File Description: Chinese (Simplified) language file - Software Management
# File Version: 1.0.34
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
  declare text="${software_title} 现在将开始安装
此过程可能需要几分钟..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::rutorrent::header() {
  rtorrent_count=$(quickbox::software::count rtorrent)
  if [[ ${rtorrent_count} -eq 0 ]]; then
    declare text="看起来 rTorrent 未安装

rTorrent 0.9.8 现在将安装，请稍等，这可能需要
几分钟时间（取决于系统配置）来完成安装"
  else
    declare text="${software_title} 现在将开始安装
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
  declare text="正在为 ${d} 创建 SSL 证书..."
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
# Reinstall Operations
################################################################################
quickbox::lang::reinstall::header() {
  declare text="${software_title} 现在将重新安装
此过程可能需要几分钟..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::reinstall::complete::header() {
  declare text="${software_title} 重新安装完成"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Remove Operations
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
# Update Operations
################################################################################
quickbox::lang::update::header() {
  declare text="${software_title} 现在将更新
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
# Software Access Information
################################################################################
quickbox::lang::software::access() {
  declare text="访问 ${software_title} 地址：
${quickbox_web_root}${software_name}
${software_title} 安装在端口：${software_web_port}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::mu::access() {
  declare text="访问 ${software_title} 地址：
${quickbox_web_root}${username}/${software_name}
${software_title} 安装在端口：${software_web_port}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::admin::access() {
  declare text="访问 ${software_title} 地址：
${quickbox_web_root}${admin_name}/${software_name}
${software_title} 安装在端口：${software_web_port}"
  quickbox::dashboard::log "${text}"
}

################################################################################
# System Command Messages
################################################################################

quickbox::lang::system::enhanced::files::removed() {
  declare text="增强服务文件已成功移除"
  quickbox::dashboard::log "${text}"
}

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

################################################################################
# WSDashboard Health Check Messages
################################################################################
quickbox::lang::software::wsdashboard::health::usage() {
  declare text="用法：qbwsd-health-check.sh [--verbose] [--fix]
  --verbose  启用详细输出
  --fix      自动修复常见问题"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::unknown_option() {
  declare text="未知选项：${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::root_warning() {
  declare text="以 root 身份运行 - 某些检查可能无法正常工作"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::starting_check() {
  declare text="正在为 ${1} 启动健康检查"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::checking_status() {
  declare text="正在检查服务状态..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::service_running() {
  declare text="服务正在运行"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::service_not_running() {
  declare text="服务未运行"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::checking_config() {
  declare text="正在检查服务配置..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::config_file_missing() {
  declare text="未找到服务配置文件：${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::root_user_warning() {
  declare text="服务配置为以 root 身份运行（安全风险）"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::no_restart_policy() {
  declare text="未配置重启策略"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::config_valid() {
  declare text="服务配置文件存在且可读"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::checking_dependencies() {
  declare text="正在检查依赖项..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::file_missing() {
  declare text="缺少必需文件：${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::file_found() {
  declare text="找到：${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::directory_missing() {
  declare text="缺少必需目录：${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::directory_found() {
  declare text="找到目录：${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::dependencies_missing() {
  declare text="缺少依赖项：${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::dependencies_available() {
  declare text="所有依赖项都可用"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::checking_resources() {
  declare text="正在检查资源使用情况..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::service_not_running_skip() {
  declare text="服务未运行，跳过资源检查"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::pid_not_found() {
  declare text="无法确定服务 PID"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::memory_usage() {
  declare text="内存使用量：${1}MB"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::high_memory_usage() {
  declare text="检测到高内存使用量：${1}MB"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::cpu_usage() {
  declare text="CPU 使用量：${1}%"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::high_cpu_usage() {
  declare text="检测到高 CPU 使用量：${1}%"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::checking_logs() {
  declare text="正在检查最近的日志..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::recent_errors_found() {
  declare text="在过去一小时内发现 ${1} 条错误消息"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::no_recent_errors() {
  declare text="未发现最近的错误消息"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::log_file_size() {
  declare text="日志文件 ${1}：${2}MB"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::large_log_file() {
  declare text="检测到大日志文件：${1} (${2}MB)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::log_file_not_found() {
  declare text="未找到日志文件：${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::checking_database() {
  declare text="正在检查数据库连接..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::database_file_missing() {
  declare text="未找到数据库文件：${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::database_accessible() {
  declare text="数据库可访问且包含表"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::active_sessions() {
  declare text="过去一小时内的活跃会话：${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::database_corrupted() {
  declare text="数据库不可访问或已损坏"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::sqlite3_not_available() {
  declare text="sqlite3 不可用，跳过数据库检查"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::attempting_fixes() {
  declare text="正在尝试修复常见问题..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::fixing_permissions() {
  declare text="正在修复 Node.js 虚拟环境权限..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::attempting_restart() {
  declare text="正在尝试重启服务..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::restart_successful() {
  declare text="服务成功重启"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::restart_failed() {
  declare text="重启服务失败"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::check_completed_success() {
  declare text="健康检查成功完成"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::check_completed_issues() {
  declare text="健康检查完成，发现问题"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::binary_not_executable() {
  declare text="二进制文件不可执行: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::permission_issues_detected() {
  declare text="检测到权限问题: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::permissions_fixed() {
  declare text="Node.js 二进制文件权限修复成功"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::permissions_fix_failed() {
  declare text="修复 Node.js 二进制文件权限失败"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::creating_run_directory() {
  declare text="创建缺失的运行目录..."
  quickbox::dashboard::log "${text}"
}
