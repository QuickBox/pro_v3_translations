#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Project Name: QuickBox Pro
# File Name: cli_users_zh-cn
# File Description: 简体中文语言文件 - 用户管理
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
# 用户管理
################################################################################
quickbox::lang::user::create() {
  declare text="quickbox 用户已创建："
  quickbox::dashboard::log "${text}"
}

quickbox::lang::user::delete() {
  declare text="${username:-"quickbox 用户"} 已删除"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::user::username() {
  declare text="用户：${username}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::user::password() {
  declare text="密码：${password}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::user::password::updated() {
  declare text="${username:-"quickbox 用户"} 的密码已更新"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::user::ban() {
  declare text="${username:-"quickbox 用户"} 已被封禁"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::user::unban() {
  declare text="${username:-"quickbox 用户"} 已被解封"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::user::demote() {
  declare text="${username:-"quickbox 用户"} 已从管理员降级"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::user::promote() {
  declare text="${username:-"quickbox 用户"} 已提升为管理员"
  quickbox::dashboard::log "${text}"
} 