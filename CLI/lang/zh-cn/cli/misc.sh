#!/usr/bin/env bash
################################################################################
# 杂项消息模块
# 包含所有通用实用工具、系统和杂项消息
################################################################################

quickbox::lang::unknown::option() {
  declare text="${2} 未知选项：${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::username::specified() {
  declare text="错误：未指定用户名"
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

quickbox::lang::nvpn::conf::generator::usage() {
  declare text="
NordVPN WireGuard 配置生成器

用法：
  nvpn_conf_gen -t 'private_token' [-dns 'preferred_dns'] [-c 'country_name'] [-L 'number_of_configs'] [-l] [-h]

选项：
  -t   | --token    NordVPN 私有令牌
  -dns | --dns      首选 DNS（默认：103.86.96.100）
  -c   | --country  首选国家名称（使用 --list 列出可用国家）
  -L   | --limit    限制创建的配置数量（默认：5）
  -l   | --list     列出 WireGuard 连接的可用国家
  -h   | --help     显示此帮助消息

示例：
  nvpn_conf_gen -t 'your_token' -c 'United States' -L 10

说明：
  - 令牌可以从以下位置生成：
    https://my.nordaccount.com/dashboard/nordvpn/manual-configuration/
  - 配置文件将保存在 '${wg_conf_storage_dir}'
"
  quickbox::dashboard::log "${text}"
}

quickbox::error::non-empty() {
  declare text="错误：$1 需要非空参数"
  quickbox::dashboard::log "${text}"
} 