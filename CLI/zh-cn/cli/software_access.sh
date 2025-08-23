#!/usr/bin/env bash
################################################################################
# 软件访问消息模块
# 包含所有软件访问信息和配置消息
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

quickbox::lang::software::airsonic::access() {
  declare text="访问 ${software_title}：
${quickbox_web_root}${username}/${software_name}
用户名：admin
密码：admin
${software_title} 安装在端口：${software_web_port}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::autodl::access() {
  cfg_output=$(cat "/home/${admin_name:-}/.autodl/autodl.cfg" 2>/dev/null) && grep_output=$(echo "${cfg_output}" | grep "gui-server-port = ") && adl_port="${grep_output#gui-server-port = }" || adl_port=""
  declare text="访问 ${software_title}：
${quickbox_web_root}rutorrent
  > 菜单 > autodl-irssi
${software_title} 安装在端口：${adl_port}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::calibre::access() {
  declare text="访问 ${software_title}：
${quickbox_web_root}${username}/${software_name}
用户名：${username}
密码：admin123
数据库位置：${software_library_directory}
${software_title} 安装在端口：${software_web_port}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::jdownloader::access() {
  declare text="访问 ${software_title}：
https://my.jdownloader.org/
下载位置：${software_downloads_directory}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rtorrent::access() {
  declare text="> rTorrent 版本：${rtorrent_version}
> libtorrent 版本：${libtorrent_version}
> 套接字路径：/var/run/${admin_name}/.rtorrent.sock"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rutorrent::access() {
  declare text="访问 ${software_title}：
${quickbox_web_root}${software_name}
> 套接字路径：/var/run/${admin_name}/.rtorrent.sock"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::admin::access() {
  declare text="访问 ${software_title}：
${quickbox_web_root}${admin_name}/${software_name}
${software_title} 安装在端口：${software_web_port}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::flaresolverr::access() {
  curl_output=$(curl -s "127.0.0.1:${software_web_port}") && curl_check=$(echo "${curl_output}" | grep -o "FlareSolverr is ready!") || curl_check=""
  if [[ ${curl_check} == "FlareSolverr is ready!" ]]; then
    declare text="状态：正常。FlareSolverr 已准备就绪！
${software_title} 安装在端口：${software_web_port}"
    quickbox::dashboard::log "${text}"
  else
    declare text="看起来出现了问题"
    quickbox::dashboard::log "${text}"
  fi
}

quickbox::lang::software::jellyfin::access() {
  if [[ -n ${domain:-} ]]; then
    jellyfin_web_root="${domain%/}"
    declare text="访问 ${software_title}：
https://${jellyfin_web_root}/"
  else
    declare text="访问 ${software_title}：
${quickbox_web_root}${username}/${software_name}/
${software_title} 安装在端口：${software_web_port}"
  fi
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::jellyseerr::access() {
  if [[ -n ${domain:-} ]]; then
    jellyseerr_web_root="${domain%/}"
    declare text="访问 ${software_title}：
https://${jellyseerr_web_root}/"
  else
    ip_output=$(ip route get 8.8.8.8 2>/dev/null) && server_ip=$(echo "${ip_output}" | sed -n '/src/{s/.*src *\([^ ]*\).*/\1/p;q}') || server_ip="127.0.0.1"
    declare text="访问 ${software_title}：
http://${server_ip}:${software_web_port}/
${software_title} 安装在端口：${software_web_port}"
  fi
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::notifiarr::access() {
  if [[ ${#user_password} -lt 9 ]]; then
    declare text="访问 ${software_title}：
${quickbox_web_root}${username}/${software_name}
${software_title} 安装在端口：${software_web_port}
用户名：${username}
密码：${notifiarr_user_password}

注意：您的密码少于 9 个字符。
      Notifiarr 要求密码至少为 9 个字符。
      我已修改此密码以添加额外的随机字符。
      您可以使用给定密码登录并在设置中更改它。
      -----------------------------------------------------
      为方便起见，新密码位于：
      /home/${username}/.config/Notifiarr/config/.notifiarr.pass.txt"
    quickbox::dashboard::log "${text}"
  else
    declare text="访问 ${software_title}：
${quickbox_web_root}${username}/${software_name}
${software_title} 安装在端口：${software_web_port}
用户名：${username}
密码：${notifiarr_user_password}"
    quickbox::dashboard::log "${text}"
  fi
}

quickbox::lang::software::novnc::access() {
  declare text="访问 ${software_title}：
${quickbox_web_root}${username}/vnc/vnc.html?resize=remote&host=${novnc_web_root}&path=${username}/websockify
${software_title} 安装在端口：${software_web_port}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::overseerr::access() {
  if [[ -n ${domain:-} ]]; then
    overseerr_web_root="${domain%/}"
    declare text="访问 ${software_title}：
https://${overseerr_web_root}/"
  else
    ip_output=$(ip route get 8.8.8.8 2>/dev/null) && server_ip=$(echo "${ip_output}" | sed -n '/src/{s/.*src *\([^ ]*\).*/\1/p;q}') || server_ip="127.0.0.1"
    declare text="访问 ${software_title}：
http://${server_ip}:${software_web_port}/
${software_title} 安装在端口：${software_web_port}"
  fi
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plex::access() {
  declare text="访问 ${software_title}：
${quickbox_web_root}web/
${software_title} 安装在端口：${software_web_port}

> 如果您不确定如何声明您的 plex 服务器，请按照以下指南操作：
https://quickbox.io/kb-categories/plex/"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::pyload::access() {
  declare text="访问 ${software_title}：
${quickbox_web_root}${username}/${software_name}/
${software_title} 安装在端口：${software_web_port}

> 用户名 = ${username}
> 密码 = pyload

> 登录 pyload 并更改默认密码以确保安全。
您的密码可以在 pyload 的 [用户] 选项卡中更改。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::quassel::access() {
  ip_output=$(ip route get 8.8.8.8 2>/dev/null) && server_ip=$(echo "${ip_output}" | sed -n '/src/{s/.*src *\([^ ]*\).*/\1/p;q}') || server_ip="127.0.0.1"
  declare text="${software_title} 安装在端口：${software_daemon_port}

> 请在您的个人计算机上安装 quassel-client 并连接到新创建的 ${software_title} Core
以在以下位置设置您的账户：
${server_ip}:${software_daemon_port}

> 从以下位置下载 quassel-client：
https://quassel-irc.org/downloads"
  quickbox::dashboard::log "${text}"
}
