#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Project Name: QuickBox Pro
# File Name: cli_apt_zh-cn
# File Description: 简体中文语言文件 - APT包管理
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
# APT包管理
################################################################################
quickbox::lang::apt::update::header() {
  declare text="正在检查并执行 apt 更新..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::apt::db::locked() {
  declare text="正在尝试解决 dpkg 锁..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::apt::update::completed() {
  declare text="apt-get upgrade 成功完成"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::apt::check::failed() {
  declare text="apt-get check 失败，您可能有损坏的包"
  quickbox::dashboard::log "${text}"
} 