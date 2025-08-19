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

quickbox::lang::wireguard::manage::help() {
  declare text="
QuickBox WireGuard 管理

用法：
  qb manage wireguard [process] [options]

过程：
  add                                添加客户端或服务器配置
    -c    | --client                 移除 WireGuard 客户端配置
    -s    | --server                 移除 WireGuard 服务器配置
    -cn   | --client-name            为 WireGuard 客户端配置设置客户端名称（'-c' 客户端配置必需）
    -noc  | --number-of-clients      为 WireGuard 服务器配置设置客户端数量（默认：1）
    -lp   | --listen-port            为 WireGuard 服务器配置设置监听端口（默认：51820）
    -mtu  | --mtu                    为 WireGuard 服务器配置设置 MTU
    -cai  | --client-allowed-ips     为 WireGuard 客户端配置设置允许的 IP（默认：0.0.0.0/0, ::/0）
    -cidr | --cidr                   为 WireGuard 服务器配置设置 CIDR 表示法（默认：服务器 - <server_ip>/24 | 客户端 - 10.5.0.2/16）
    -pur  | --post-up-rules          为 WireGuard 服务器配置设置启动后规则
    -pdr  | --post-down-rules        为 WireGuard 服务器配置设置关闭后规则

  remove                             移除客户端或服务器配置
    -cn   | --client-name            为 WireGuard 客户端配置设置客户端名称

  check                              检查当前加载和运行的 WireGuard 客户端配置
    -cn   | --client-name            为 WireGuard 客户端配置设置客户端名称
    --deactivate                     停用 WireGuard 客户端配置

  cron                               添加 cron 作业来检查 WireGuard 配置文件

  calc                               计算服务器配置的 CIDR 表示法和 MTU
    --mtu                            为 WireGuard 服务器配置设置 MTU
    --endpoint                       为 WireGuard 服务器配置设置端点
    --protocol                       为 WireGuard 服务器配置设置协议（ipv4 或 ipv6）

  help                               显示此帮助消息

示例：
  qb manage wireguard add -c -cn 'client_name' -cai '0.0.0.0/0' -lp 51820
  qb manage wireguard add -s -noc 5 -lp 51820 -cidr '192.168.0.2/24' -pur 'iptables -A FORWARD -i wg0 -j ACCEPT; iptables -t nat -A POSTROUTING -o eth0 -j MASQUERADE'
  qb manage wireguard remove -cn 'client_name'
  qb manage wireguard check -cn 'client_name' --deactivate
  qb manage wireguard cron
  qb manage wireguard calc --mtu 1420 --endpoint '192.168.0.0' --protocol 'ipv4'
"
  quickbox::dashboard::log "${text}"
} 