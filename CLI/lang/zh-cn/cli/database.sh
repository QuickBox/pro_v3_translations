#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Project Name: QuickBox Pro
# File Name: cli_database_zh-cn
# File Description: 简体中文语言文件 - 数据库管理
# File Version: 1.0.4
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
# 数据库安装 - MySQL
################################################################################
quickbox::lang::db::install::prompt() {
  declare text="MySQL未安装。您想要安装吗？[y/N]："
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::apt() {
  declare text="正在更新APT..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql_apt() {
  declare text="正在下载MySQL APT配置..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql_apt::fail() {
  declare text="下载MySQL APT配置失败。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql_apt::install() {
  declare text="正在安装MySQL APT配置..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql_apt::install::fail() {
  declare text="安装MySQL APT配置失败。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql() {
  declare text="正在安装MySQL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::fail() {
  declare text="安装MySQL失败。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::start::fail() {
  declare text="启动MySQL失败。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::enable::fail() {
  declare text="启用MySQL失败。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::success() {
  declare text="MySQL已安装。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::installed() {
  declare text="MySQL已安装，继续配置。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::config() {
  declare text="正在更新MySQL配置..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::config::backup() {
  declare text="当前mysqld.cnf文件已备份为mysqld.cnf.backup。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::config::write() {
  declare text="[*] 正在设置MySQL配置..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::config::write::fail() {
  declare text="[✗] 写入MySQL配置失败。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::privileges() {
  declare text="正在设置MySQL权限..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::privileges::fail() {
  declare text="写入MySQL权限失败。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::client() {
  declare text="正在设置MySQL客户端配置..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::client::fail() {
  declare text="写入MySQL客户端配置失败。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::reload::fail() {
  declare text="重新加载systemctl守护进程失败。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::enable() {
  declare text="正在启用MySQL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::restart() {
  declare text="正在重启MySQL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::restart::fail() {
  declare text="重启MySQL失败。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::user() {
  declare text="正在创建MySQL用户${mysql_user}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::user::fail() {
  declare text="创建MySQL用户失败。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::grant() {
  declare text="正在为MySQL用户${mysql_user}授予权限..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::grant::fail() {
  declare text="为MySQL用户授予权限失败。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::flush() {
  declare text="正在刷新权限..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::flush::fail() {
  declare text="刷新权限失败。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::convert() {
  declare text="正在将数据库转换为MySQL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::convert::success() {
  declare text="数据库已转换为MySQL。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::remove() {
  declare text="您想要移除SQLite数据库吗？[y/N]："
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::remove::fail() {
  declare text="在PHP中禁用SQLite失败。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::complete() {
  declare text="MySQL已配置。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::details() {
  declare text="MySQL连接详情："
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::connection::details() {
  declare text="用户名：${mysql_user}
密码：${mysql_password}
端口：${mysql_port}
主机：${mysql_host}
数据库：${mysql_name}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::mycnf() {
  declare text="这些详情可以在/root/.my.cnf中找到"
  quickbox::dashboard::log "${text}"
}

################################################################################
# 数据库安装 - SQLite
################################################################################
quickbox::lang::db::install::sqlite::backup() {
  declare text="正在备份SQLite数据库..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::sqlite::backup::success() {
  declare text="SQLite数据库已备份为${sqlite_file}.${date}.backup"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::sqlite::convert() {
  declare text="正在将数据库转换为SQLite..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::sqlite::convert::success() {
  declare text="数据库已转换为SQLite。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::sqlite::remove() {
  declare text="您想要完全移除MySQL吗？[y/N]："
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::sqlite::remove::mysql() {
  declare text="您想要移除MySQL数据库吗？[y/N]："
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::sqlite::php::fail() {
  declare text="在PHP中安装SQLite失败。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::sqlite::php::enable::fail() {
  declare text="在PHP中启用SQLite失败。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::sqlite::complete() {
  declare text="SQLite数据库转换过程已完成。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::sqlite::invalid() {
  declare text="无效选项：${option}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::sqlite::mysql::notfound() {
  declare text="未找到MySQL数据库。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::sqlite::notfound() {
  declare text="未找到SQLite数据库。"
  quickbox::dashboard::log "${text}"
}

################################################################################
# 数据库备份
################################################################################
quickbox::lang::db::backup::sqlite::integrity() {
  declare text="正在检查SQLite数据库的完整性..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::backup::sqlite::integrity::pass() {
  declare text="数据库完整性检查通过。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::backup::sqlite::complete() {
  declare text="备份完成：${full_backup_path}/qbpro.db"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::backup::sqlite::integrity::fail() {
  declare text="数据库完整性检查失败。未创建备份。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::backup::sqlite::integrity::repair() {
  declare text="
    [警告] QuickBox数据库修复！

    QuickBox数据库完整性检查失败，已尝试修复。

    命令：REINDEX; VACUUM;

    您可以在以下位置找到最近的备份：
    /opt/quickbox/backup/system/[DATE]/db/qbpro.db

    要删除此消息，请运行以下命令：
    rm -f /etc/quickbox_motd
"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::backup::mysql() {
  declare text="正在备份MySQL数据库..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::backup::mysql::complete() {
  declare text="MySQL备份完成：${full_backup_path}/qbpro.sql"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::backup::mysql::fail() {
  declare text="MySQL备份失败。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::backup::unsupported() {
  declare text="不支持的数据库类型：${db_type}。未创建备份。"
  quickbox::dashboard::log "${text}"
}

################################################################################
# 数据库维护
################################################################################
quickbox::lang::db::maintenance::sqlite::repair() {
  declare text="正在尝试修复SQLite数据库..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::sqlite::repair::complete() {
  declare text="SQLite数据库修复完成。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::sqlite::repair::fail() {
  declare text="修复SQLite数据库失败。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::sqlite::restore::complete() {
  declare text="SQLite数据库恢复完成。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::backup::sqlite::integrity::restore() {
  declare text="
    [警告] QuickBox数据库修复！

    QuickBox数据库完整性检查失败，已尝试修复。
    已恢复先前的有效备份并调整了权限。

    您可以在以下位置找到最近的备份：
    /opt/quickbox/backup/system/[DATE]/db/qbpro.db

    要删除此消息，请运行以下命令：
    rm -f /etc/quickbox_motd
"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::sqlite() {
  declare text="正在对SQLite数据库执行维护..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::sqlite::backup() {
  declare text="正在维护前备份数据库..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::sqlite::optimize() {
  declare text="正在优化SQLite数据库（VACUUM）..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::sqlite::optimize::complete() {
  declare text="SQLite数据库优化完成。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::sqlite::optimize::fail() {
  declare text="优化SQLite数据库失败。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::sqlite::integrity::fail() {
  declare text="数据库完整性检查失败。未执行维护。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::mysql() {
  declare text="正在对MySQL数据库执行维护..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::mysql::backup() {
  declare text="正在维护前备份MySQL数据库..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::mysql::backup::fail() {
  declare text="MySQL备份失败。跳过维护。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::mysql::optimize() {
  declare text="正在优化MySQL数据库表..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::mysql::optimize::complete() {
  declare text="MySQL数据库优化完成。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::mysql::optimize::fail() {
  declare text="优化MySQL数据库失败。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::mysql::integrity() {
  declare text="正在检查MySQL数据库的完整性..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::mysql::integrity::pass() {
  declare text="MySQL数据库完整性检查通过。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::mysql::integrity::fail() {
  declare text="MySQL数据库完整性检查失败。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::unsupported() {
  declare text="不支持的数据库类型：${db_type}。未执行维护。"
  quickbox::dashboard::log "${text}"
}

################################################################################
# 数据库恢复
################################################################################
quickbox::lang::db::restore::backup::error() {
  declare text="未找到备份目录：${backup_root}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::restore::backup::empty() {
  declare text="在备份目录中未找到备份。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::restore::backup::select() {
  declare text="选择要恢复的备份："
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::restore::backup::number() {
  declare text="输入要恢复的备份编号："
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::restore::backup::invalid() {
  declare text="选择无效。请重试。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::restore::sqlite::success() {
  declare text="SQLite数据库已从${select_backup}成功恢复。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::restore::sqlite::fail() {
  declare text="恢复SQLite数据库失败。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::restore::mysql::success() {
  declare text="MySQL数据库已从${select_backup}成功恢复。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::restore::mysql::fail() {
  declare text="恢复MySQL数据库失败。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::restore::unsupported() {
  declare text="不支持的数据库类型：${db_type}。未执行恢复。"
  quickbox::dashboard::log "${text}"
}