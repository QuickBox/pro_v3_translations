#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Project Name: QuickBox Pro
# File Name: cli_software_zh-cn
# File Description: 简体中文语言文件 - 软件管理
# File Version: 1.0.12
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

quickbox::lang::update::jellyfin::ffmpeg() {
  declare text="正在为 Jellyfin 更新 ffmpeg..."
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
# WSDashboard 特定消息
################################################################################
quickbox::lang::software::wsdashboard::neither_installed() {
  declare text="Emby 和 Jellyfin 都未安装。跳过过程。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::api_error() {
  declare text="错误：无法从 central.quickbox.io API 获取 zip_url。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::download_error() {
  declare text="错误：无法下载 WSD 插件压缩包。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::unzip_error() {
  declare text="错误：无法解压 WSD 插件压缩包。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::missing_directory() {
  declare text="错误：插件压缩包中缺少必需的目录 ${req_dir}。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::move_backend_error() {
  declare text="移动后端目录失败！中止更新。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::move_public_error() {
  declare text="移动公共目录失败！中止更新。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::move_version_error() {
  declare text="移动 version.txt 失败！中止更新。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::complete() {
  declare text="WSD 插件获取和提取完成。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::up_to_date() {
  declare text="WSD 插件是最新的；无需获取。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::start::success() {
  declare text="服务启动成功。正在运行健康检查..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::health::passed() {
  declare text="健康检查通过。服务运行正常。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::health::warnings() {
  declare text="健康检查完成，但有警告。如有需要请查看日志。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::start::failed() {
  declare text="服务启动失败。正在检查状态..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::fix::attempting() {
  declare text="正在尝试修复常见问题..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::update::success() {
  declare text="服务更新成功。正在运行健康检查..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::update::failed() {
  declare text="更新后服务启动失败。正在检查状态..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::maintenance::header() {
  declare text="正在执行 WSD 服务维护和监控..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::maintenance::service_not_found() {
  declare text="未找到服务。请先安装 WSD。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::maintenance::completed_success() {
  declare text="服务维护成功完成。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::maintenance::completed_warnings() {
  declare text="服务维护完成，但有警告。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::maintenance::complete() {
  declare text="维护完成。使用 'qbwsd-health-check.sh --verbose' 进行详细诊断。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::maintenance::title() {
  declare text="WSD 服务维护"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::stop::starting() {
  declare text="正在停止 ${software_service_name} 服务..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::stop::force() {
  declare text="服务仍在运行，强制停止..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::stop::cleanup() {
  declare text="清理剩余的 Node.js 进程..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::stop::warning() {
  declare text="警告：服务可能仍在运行，谨慎继续..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::stop::success() {
  declare text="服务成功停止"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::start::starting() {
  declare text="正在启动 ${software_service_name} 服务..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::start::success_attempt() {
  declare text="服务在第 ${1} 次尝试时成功启动"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::start::retry() {
  declare text="服务启动尝试 ${1} 失败，3 秒后重试..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::start::command_failed() {
  declare text="服务启动命令失败，3 秒后重试..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::chmod::retry() {
  declare text="Chmod 尝试 ${1} 失败，2 秒后重试..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::chmod::warning() {
  declare text="警告：在 ${1} 次尝试后仍无法设置执行权限"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::node::install::failed() {
  declare text="错误：Node.js 安装或验证失败。请检查日志并重试。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::virtual_env_corrupted() {
  declare text="虚拟环境似乎已损坏。正在重新创建..."
  quickbox::dashboard::log "${text}"
}

# Additional WSDashboard translation keys for env.conf and virtual environment operations
quickbox::lang::software::wsdashboard::env::current_port_empty() {
  declare text="current_port 为空或为 0。无法更新 env.conf。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::env::streaming_app_empty() {
  declare text="streaming_application 为空。无法更新 env.conf。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::env::daemon_port_empty() {
  declare text="software_daemon_port 为空或为 0。无法更新 env.conf。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::env::boilerplate_remaining() {
  declare text="更新后 env.conf 中仍有一些样板值"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::env::update_success() {
  declare text="env.conf 已更新：APPLICATION_NAME=${1}，APPLICATION_PORT=${2}，LOG_SERVER_PORT=${3}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::env::backup_created() {
  declare text="已创建备份：${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::env::boilerplate_detected() {
  declare text="更新后检测到样板值 - 可能需要手动审查"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::virtual_env::nodeenv_failed() {
  declare text="无法在 Python 虚拟环境 ${1} 中安装 nodeenv"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::virtual_env::nodejs_failed() {
  declare text="Node.js 虚拟环境创建失败。在 ${1} 中未找到 node 或 npm"
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

quickbox::lang::system::nginx::test() {
  declare text="测试 nginx 配置..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::nginx::reload() {
  declare text="重新加载 nginx 服务..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::daemon::reload() {
  declare text="重新加载 systemd 守护进程..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::service::enable() {
  declare text="启用 ${software_service_name} 服务..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::service::start() {
  declare text="启动 ${software_service_name} 服务..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::service::stop() {
  declare text="停止 ${software_service_name} 服务..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::service::disable() {
  declare text="禁用 ${software_service_name} 服务..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::file::copy() {
  declare text="复制 ${1} 到 ${2}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::pip::install() {
  declare text="安装 Python 包..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::npm::install() {
  declare text="安装 Node.js 包..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::enhanced::files::removed() {
  declare text="增强的服务文件已成功移除"
  quickbox::dashboard::log "${text}"
}

################################################################################
# WSDashboard 健康检查消息
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
  declare text="开始对 ${1} 进行健康检查"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::checking_status() {
  declare text="检查服务状态..."
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
  declare text="检查服务配置..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::config_file_missing() {
  declare text="服务配置文件未找到：${1}"
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
  declare text="检查依赖项..."
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
  declare text="检查资源使用情况..."
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
  declare text="内存使用：${1}MB"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::high_memory_usage() {
  declare text="检测到高内存使用：${1}MB"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::cpu_usage() {
  declare text="CPU 使用：${1}%"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::high_cpu_usage() {
  declare text="检测到高 CPU 使用：${1}%"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::checking_logs() {
  declare text="检查最近的日志..."
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
  declare text="检查数据库连接..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::database_file_missing() {
  declare text="数据库文件未找到：${1}"
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
  declare text="尝试修复常见问题..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::fixing_permissions() {
  declare text="修复 Node.js 虚拟环境权限..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::creating_log_directory() {
  declare text="创建缺失的日志目录..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::attempting_restart() {
  declare text="尝试重启服务..."
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
  declare text="健康检查完成但存在问题"
  quickbox::dashboard::log "${text}"
} 