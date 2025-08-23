#!/usr/bin/env bash
################################################################################
# 杂项消息模块
# 包含所有通用实用工具、系统和杂项消息
################################################################################

quickbox::lang::unknown::option() {
  declare text="${2} 未知选项：${1}"
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

quickbox::lang::directory::nomove() {
  declare text="无法移动到 $1..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::package::fail() {
  declare text="无法安装必需的包 $1..."
  quickbox::dashboard::log "${text}"
}

quickbox::error::non-empty() {
  declare text="错误：$1 需要非空参数"
  quickbox::dashboard::log "${text}"
}