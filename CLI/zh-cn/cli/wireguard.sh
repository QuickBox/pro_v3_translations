#!/usr/bin/env bash
################################################################################
# WireGuard 消息模块
# 包含所有 WireGuard 配置、管理和客户端设置消息
################################################################################

quickbox::lang::wireguard::client_config() {
  declare text="正在为 $1 设置客户端配置"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::server_config() {
  declare text="正在为 $1 设置服务器配置"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::configure::client_ask() {
  declare text="您想要输入客户端配置吗？(y/n)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::configure::client_paste() {
  declare text="请在下面粘贴或输入客户端配置。完成后按 ctrl+D 或 ⌘+D 继续。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::configure::client_ask_extra() {
  declare text="您想要输入另一个客户端配置吗？(y/n)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::configure::client_ask_extra_error() {
  declare text="输入无效。请输入 'y' 或 'n'。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::mtuendpoint::error() {
  declare text="错误：'calc' 过程需要 --mtu 和 --endpoint 参数"
  quickbox::dashboard::log "${text}"
}
