#!/usr/bin/env bash
################################################################################
# Software Access Messages Module
# Contains all software access information and configuration messages
################################################################################

quickbox::lang::software::access() {
  declare text="Greifen Sie auf ${software_title} zu unter:
${quickbox_web_root}${software_name}
${software_title} installiert auf Port: ${software_web_port}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::mu::access() {
  declare text="Greifen Sie auf ${software_title} zu unter:
${quickbox_web_root}${username}/${software_name}
${software_title} installiert auf Port: ${software_web_port}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::airsonic::access() {
  declare text="Greifen Sie auf ${software_title} zu unter:
${quickbox_web_root}${username}/${software_name}
Benutzername: admin
Passwort: admin
${software_title} installiert auf Port: ${software_web_port}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::autodl::access() {
  cfg_output=$(cat "/home/${admin_name:-}/.autodl/autodl.cfg" 2>/dev/null) && grep_output=$(echo "${cfg_output}" | grep "gui-server-port = ") && adl_port="${grep_output#gui-server-port = }" || adl_port=""
  declare text="Greifen Sie auf ${software_title} zu unter:
${quickbox_web_root}rutorrent
  > Menü > autodl-irssi
${software_title} installiert auf Port: ${adl_port}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::calibre::access() {
  declare text="Greifen Sie auf ${software_title} zu unter:
${quickbox_web_root}${username}/${software_name}
Benutzername: ${username}
Passwort: admin123
Datenbankstandort: ${software_library_directory}
${software_title} installiert auf Port: ${software_web_port}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::jdownloader::access() {
  declare text="Greifen Sie auf ${software_title} zu unter:
https://my.jdownloader.org/
Download-Standort: ${software_downloads_directory}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rtorrent::access() {
  declare text="> rTorrent Version: ${rtorrent_version}
> libtorrent Version: ${libtorrent_version}
> Socket-Pfad: /var/run/${admin_name}/.rtorrent.sock"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rutorrent::access() {
  declare text="Greifen Sie auf ${software_title} zu unter:
${quickbox_web_root}${software_name}
> Socket-Pfad: /var/run/${admin_name}/.rtorrent.sock"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::admin::access() {
  declare text="Greifen Sie auf ${software_title} zu unter:
${quickbox_web_root}${admin_name}/${software_name}
${software_title} installiert auf Port: ${software_web_port}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::flaresolverr::access() {
  curl_output=$(curl -s "127.0.0.1:${software_web_port}") && curl_check=$(echo "${curl_output}" | grep -o "FlareSolverr is ready!") || curl_check=""
  if [[ ${curl_check} == "FlareSolverr is ready!" ]]; then
    declare text="Status: OK. FlareSolverr ist bereit!
${software_title} installiert auf Port: ${software_web_port}"
    quickbox::dashboard::log "${text}"
  else
    declare text="Es scheint, als wäre etwas schief gelaufen"
    quickbox::dashboard::log "${text}"
  fi
}

quickbox::lang::software::jellyfin::access() {
  if [[ -n ${domain:-} ]]; then
    jellyfin_web_root="${domain%/}"
    declare text="Greifen Sie auf ${software_title} zu unter:
https://${jellyfin_web_root}/"
  else
    declare text="Greifen Sie auf ${software_title} zu unter:
${quickbox_web_root}${username}/${software_name}/
${software_title} installiert auf Port: ${software_web_port}"
  fi
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::jellyseerr::access() {
  if [[ -n ${domain:-} ]]; then
    jellyseerr_web_root="${domain%/}"
    declare text="Greifen Sie auf ${software_title} zu unter:
https://${jellyseerr_web_root}/"
  else
    ip_output=$(ip route get 8.8.8.8 2>/dev/null) && server_ip=$(echo "${ip_output}" | sed -n '/src/{s/.*src *\([^ ]*\).*/\1/p;q}') || server_ip="127.0.0.1"
    declare text="Greifen Sie auf ${software_title} zu unter:
http://${server_ip}:${software_web_port}/
${software_title} installiert auf Port: ${software_web_port}"
  fi
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::notifiarr::access() {
  if [[ ${#user_password} -lt 9 ]]; then
    declare text="Greifen Sie auf ${software_title} zu unter:
${quickbox_web_root}${username}/${software_name}
${software_title} installiert auf Port: ${software_web_port}
Benutzername: ${username}
Passwort: ${notifiarr_user_password}

Hinweis: Ihr Passwort hat weniger als 9 Zeichen.
      Notifiarr erfordert Passwörter mit mindestens 9 Zeichen.
      Ich habe dies geändert, um zusätzliche zufällige Zeichen hinzuzufügen.
      Sie können sich mit dem angegebenen Passwort anmelden und es in den Einstellungen ändern.
      -----------------------------------------------------
      Der Einfachheit halber befindet sich das neue Passwort in:
      /home/${username}/.config/Notifiarr/config/.notifiarr.pass.txt"
    quickbox::dashboard::log "${text}"
  else
    declare text="Greifen Sie auf ${software_title} zu unter:
${quickbox_web_root}${username}/${software_name}
${software_title} installiert auf Port: ${software_web_port}
Benutzername: ${username}
Passwort: ${notifiarr_user_password}"
    quickbox::dashboard::log "${text}"
  fi
}

quickbox::lang::software::novnc::access() {
  declare text="Greifen Sie auf ${software_title} zu unter:
${quickbox_web_root}${username}/vnc/vnc.html?resize=remote&host=${novnc_web_root}&path=${username}/websockify
${software_title} installiert auf Port: ${software_web_port}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::overseerr::access() {
  if [[ -n ${domain:-} ]]; then
    overseerr_web_root="${domain%/}"
    declare text="Greifen Sie auf ${software_title} zu unter:
https://${overseerr_web_root}/"
  else
    ip_output=$(ip route get 8.8.8.8 2>/dev/null) && server_ip=$(echo "${ip_output}" | sed -n '/src/{s/.*src *\([^ ]*\).*/\1/p;q}') || server_ip="127.0.0.1"
    declare text="Greifen Sie auf ${software_title} zu unter:
http://${server_ip}:${software_web_port}/
${software_title} installiert auf Port: ${software_web_port}"
  fi
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plex::access() {
  declare text="Greifen Sie auf ${software_title} zu unter:
${quickbox_web_root}web/
${software_title} installiert auf Port: ${software_web_port}

> Falls Sie nicht sicher sind, wie Sie Ihren Plex-Server
claimen können, folgen Sie dieser Anleitung:
https://quickbox.io/kb-categories/plex/"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::pyload::access() {
  declare text="Greifen Sie auf ${software_title} zu unter:
${quickbox_web_root}${username}/${software_name}/
${software_title} installiert auf Port: ${software_web_port}

> Benutzername = ${username}
> Passwort = pyload

> Melden Sie sich bei pyload an und ändern Sie das Standardpasswort aus Sicherheitsgründen.
Ihr Passwort kann unter dem [Benutzer]-Tab in pyload geändert werden."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::quassel::access() {
  ip_output=$(ip route get 8.8.8.8 2>/dev/null) && server_ip=$(echo "${ip_output}" | sed -n '/src/{s/.*src *\([^ ]*\).*/\1/p;q}') || server_ip="127.0.0.1"
  declare text="${software_title} installiert auf Port: ${software_daemon_port}

> Bitte installieren Sie quassel-client auf Ihrem persönlichen 
Computer und verbinden Sie sich mit dem neu erstellten ${software_title} Core 
um Ihr Konto einzurichten unter:
${server_ip}:${software_daemon_port}

> Laden Sie quassel-client von folgendem herunter:
https://quassel-irc.org/downloads"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone::access() {
  declare text="${software_title} installiert

> Weitere Informationen zur Installation von rclone finden Sie unter:
  qb help rclone
"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::vpnzip::access() {
  declare text="Laden Sie das ${software_title}-Profil herunter unter:
${quickbox_web_root}${username}/ovpn.zip
> zur Verwendung in jedem OpenVPN-Client"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::access() {
  declare text="Greifen Sie auf ${software_title} zu unter:
${quickbox_web_root}whats-streaming.php"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::x2go::access() {
  ip_output=$(ip route get 8.8.8.8 2>/dev/null) && server_ip=$(echo "${ip_output}" | sed -n '/src/{s/.*src *\([^ ]*\).*/\1/p;q}') || server_ip="127.0.0.1"
  declare text="${software_title} Server installiert

> Bitte installieren Sie x2go-client auf Ihrem persönlichen Computer 
und verbinden Sie sich mit dem neu erstellten ${software_title} Server 
mit folgendem:
Host:       ${server_ip}
Anmeldung:  ${username}
SSH-Port:   4747
Sitzungstyp:	XFCE oder MATE

> Laden Sie x2go-client von folgendem herunter:
https://wiki.x2go.org/doku.php/doc:installation:x2goclient"
  quickbox::dashboard::log "${text}"
} 