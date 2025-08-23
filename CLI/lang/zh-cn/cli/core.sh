#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Project Name: QuickBox Pro
# File Name: cli_core_zh-cn
# File Description: 简体中文语言文件 - 核心系统操作
# File Version: 1.0.8
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
# 核心仪表板日志记录函数
################################################################################
quickbox::dashboard::log() {
  admin_name="$(quickbox::database "SELECT username FROM user_information WHERE user_level = '10';")"
  if [[ ! -f "/srv/quickbox/logs/dashboard" ]]; then
    mkdir -p /srv/quickbox/logs
    touch /srv/quickbox/logs/dashboard
    chown www-data:www-data /srv/quickbox/logs/dashboard
  fi
  if [[ ! -f "/srv/quickbox/logs/${username:-${admin_name}}.dashboard" ]]; then
    mkdir -p /srv/quickbox/logs
    touch "/srv/quickbox/logs/${username:-${admin_name}}.dashboard"
    chown www-data:www-data "/srv/quickbox/logs/${username:-${admin_name}}.dashboard"
  fi
  if [[ -n ${username} ]]; then
    echo "${1:-null}" | sed -z "s/\n/\n<br>/" >"/srv/quickbox/logs/${username:-}.dashboard"
  else
    echo "${1:-null}" | sed -z "s/\n/\n<br>/" >"/srv/quickbox/logs/${admin_name:-}.dashboard"
  fi
  echo "${1:-null}"
}

################################################################################
# 清理操作
################################################################################
quickbox::lang::clean::memory() {
  declare text="正在清理内存缓存..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::clean::rclone() {
  declare text="正在清理 rclone 上传日志..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::clean::dashboard() {
  declare text="等待系统响应..."
  quickbox::dashboard::log "${text}"
}

################################################################################
# 锁管理
################################################################################
quickbox::lang::lock::handle() {
  declare text="${quickbox_lock} 当前正在运行
进程将在 ${quickbox_lock} 完成后恢复"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lock::remove() {
  declare text="正在移除软件锁..."
  quickbox::dashboard::log "${text}"
}

################################################################################
# 杂项操作
################################################################################
quickbox::lang::unknown::option() {
  declare text="${2} 未知选项：${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::username::specified() {
  declare text="错误：未指定用户名"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::directory::noexist() {
  declare text="所需目录不存在..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::directory::nomove() {
  declare text="无法移动到 $1..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::package::fail() {
  declare text="无法安装必需的包 $1..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::database() {
  declare text="正在更新数据库..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::trackers::disable() {
  declare text="正在禁用公共追踪器..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::trackers::enable() {
  declare text="正在启用公共追踪器..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::run_via_qb() {
  declare text="错误[1]：${script_name} 应通过 qb 运行"
  quickbox::dashboard::log "${text}"
}
