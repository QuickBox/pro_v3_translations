#!/usr/bin/env bash
################################################################################
# Software Access Messages Module
# Contains all software access information and configuration messages
################################################################################

quickbox::lang::software::access() {
  declare text="access ${software_title} at:
${quickbox_web_root}${software_name}
${software_title} installed on port: ${software_web_port}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::mu::access() {
  declare text="access ${software_title} at:
${quickbox_web_root}${username}/${software_name}
${software_title} installed on port: ${software_web_port}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::airsonic::access() {
  declare text="access ${software_title} at:
${quickbox_web_root}${username}/${software_name}
username: admin
password: admin
${software_title} installed on port: ${software_web_port}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::autodl::access() {
  cfg_output=$(cat "/home/${admin_name:-}/.autodl/autodl.cfg" 2>/dev/null) && grep_output=$(echo "${cfg_output}" | grep "gui-server-port = ") && adl_port="${grep_output#gui-server-port = }" || adl_port=""
  declare text="access ${software_title} at:
${quickbox_web_root}rutorrent
  > menu > autodl-irssi
${software_title} installed on port: ${adl_port}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::calibre::access() {
  declare text="access ${software_title} at:
${quickbox_web_root}${username}/${software_name}
username: ${username}
password: admin123
database location: ${software_library_directory}
${software_title} installed on port: ${software_web_port}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::jdownloader::access() {
  declare text="access ${software_title} at:
https://my.jdownloader.org/
download location: ${software_downloads_directory}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rtorrent::access() {
  declare text="> rTorrent version: ${rtorrent_version}
> libtorrent version: ${libtorrent_version}
> socket path: /var/run/${admin_name}/.rtorrent.sock"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rutorrent::access() {
  declare text="access ${software_title} at:
${quickbox_web_root}${software_name}
> socket path: /var/run/${admin_name}/.rtorrent.sock"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::admin::access() {
  declare text="access ${software_title} at:
${quickbox_web_root}${admin_name}/${software_name}
${software_title} installed on port: ${software_web_port}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::flaresolverr::access() {
  curl_output=$(curl -s "127.0.0.1:${software_web_port}") && curl_check=$(echo "${curl_output}" | grep -o "FlareSolverr is ready!") || curl_check=""
  if [[ ${curl_check} == "FlareSolverr is ready!" ]]; then
    declare text="status: ok. FlareSolverr is ready!
${software_title} installed on port: ${software_web_port}"
    quickbox::dashboard::log "${text}"
  else
    declare text="Looks like something went wrong"
    quickbox::dashboard::log "${text}"
  fi
}

quickbox::lang::software::jellyfin::access() {
  if [[ -n ${domain:-} ]]; then
    jellyfin_web_root="${domain%/}"
    declare text="access ${software_title} at:
https://${jellyfin_web_root}/"
  else
    declare text="access ${software_title} at:
${quickbox_web_root}${username}/${software_name}/
${software_title} installed on port: ${software_web_port}"
  fi
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::jellyseerr::access() {
  if [[ -n ${domain:-} ]]; then
    jellyseerr_web_root="${domain%/}"
    declare text="access ${software_title} at:
https://${jellyseerr_web_root}/"
  else
    ip_output=$(ip route get 8.8.8.8 2>/dev/null) && server_ip=$(echo "${ip_output}" | sed -n '/src/{s/.*src *\([^ ]*\).*/\1/p;q}') || server_ip="127.0.0.1"
    declare text="access ${software_title} at:
http://${server_ip}:${software_web_port}/
${software_title} installed on port: ${software_web_port}"
  fi
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::notifiarr::access() {
  if [[ ${#user_password} -lt 9 ]]; then
    declare text="access ${software_title} at:
${quickbox_web_root}${username}/${software_name}
${software_title} installed on port: ${software_web_port}
username: ${username}
password: ${notifiarr_user_password}

Note: Your password is less than 9 characters.
      Notifiarr requires passwords to be at least 9 characters.
      I have modified this to add additional random characters.
      You can login using the given password and change it in the settings.
      -----------------------------------------------------
      For your convenience, the new password is located in:
      /home/${username}/.config/Notifiarr/config/.notifiarr.pass.txt"
    quickbox::dashboard::log "${text}"
  else
    declare text="access ${software_title} at:
${quickbox_web_root}${username}/${software_name}
${software_title} installed on port: ${software_web_port}
username: ${username}
password: ${notifiarr_user_password}"
    quickbox::dashboard::log "${text}"
  fi
}

quickbox::lang::software::novnc::access() {
  declare text="access ${software_title} at:
${quickbox_web_root}${username}/vnc/vnc.html?resize=remote&host=${novnc_web_root}&path=${username}/websockify
${software_title} installed on port: ${software_web_port}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::overseerr::access() {
  if [[ -n ${domain:-} ]]; then
    overseerr_web_root="${domain%/}"
    declare text="access ${software_title} at:
https://${overseerr_web_root}/"
  else
    ip_output=$(ip route get 8.8.8.8 2>/dev/null) && server_ip=$(echo "${ip_output}" | sed -n '/src/{s/.*src *\([^ ]*\).*/\1/p;q}') || server_ip="127.0.0.1"
    declare text="access ${software_title} at:
http://${server_ip}:${software_web_port}/
${software_title} installed on port: ${software_web_port}"
  fi
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plex::access() {
  declare text="access ${software_title} at:
${quickbox_web_root}web/
${software_title} installed on port: ${software_web_port}

> If you have not and/or are unsure on how to 
claim your plex server please follow this guide:
https://quickbox.io/kb-categories/plex/"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::pyload::access() {
  declare text="access ${software_title} at:
${quickbox_web_root}${username}/${software_name}/
${software_title} installed on port: ${software_web_port}

> username = ${username}
> password = pyload

> Login to pyload and change the default password for security.
Your password can be changed under the [users] tab in pyload."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::quassel::access() {
  ip_output=$(ip route get 8.8.8.8 2>/dev/null) && server_ip=$(echo "${ip_output}" | sed -n '/src/{s/.*src *\([^ ]*\).*/\1/p;q}') || server_ip="127.0.0.1"
  declare text="${software_title} installed on port: ${software_daemon_port}

> Please install quassel-client on your personal 
computer and connect to the newly created ${software_title} Core 
to setup your account at:
${server_ip}:${software_daemon_port}

> Download quassel-client from the following:
https://quassel-irc.org/downloads"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone::access() {
  declare text="${software_title} installed

> For more information on how to install rclone, see:
  qb help rclone
"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::vpnzip::access() {
  declare text="download ${software_title} profile at:
${quickbox_web_root}${username}/ovpn.zip
> to use in any OpenVPN client"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::access() {
  declare text="access ${software_title} at:
${quickbox_web_root}whats-streaming.php"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::x2go::access() {
  ip_output=$(ip route get 8.8.8.8 2>/dev/null) && server_ip=$(echo "${ip_output}" | sed -n '/src/{s/.*src *\([^ ]*\).*/\1/p;q}') || server_ip="127.0.0.1"
  declare text="${software_title} Server installed

> Please install x2go-client on your personal computer 
and connect to the newly created ${software_title} Server 
using the following:
Host:       ${server_ip}
Login:      ${username}
SSH port:   4747
Session type:	XFCE or MATE

> Download x2go-client from the following:
https://wiki.x2go.org/doku.php/doc:installation:x2goclient"
  quickbox::dashboard::log "${text}"
} 