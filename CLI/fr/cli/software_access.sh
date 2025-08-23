#!/usr/bin/env bash
################################################################################
# Module de Messages d'Accès aux Logiciels
# Contient tous les messages d'informations d'accès et de configuration des logiciels
################################################################################

quickbox::lang::software::access() {
  declare text="accédez à ${software_title} à:
${quickbox_web_root}${software_name}
${software_title} installé sur le port: ${software_web_port}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::mu::access() {
  declare text="accédez à ${software_title} à:
${quickbox_web_root}${username}/${software_name}
${software_title} installé sur le port: ${software_web_port}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::airsonic::access() {
  declare text="accédez à ${software_title} à:
${quickbox_web_root}${username}/${software_name}
nom d'utilisateur: admin
mot de passe: admin
${software_title} installé sur le port: ${software_web_port}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::autodl::access() {
  cfg_output=$(cat "/home/${admin_name:-}/.autodl/autodl.cfg" 2>/dev/null) && grep_output=$(echo "${cfg_output}" | grep "gui-server-port = ") && adl_port="${grep_output#gui-server-port = }" || adl_port=""
  declare text="accédez à ${software_title} à:
${quickbox_web_root}rutorrent
  > menu > autodl-irssi
${software_title} installé sur le port: ${adl_port}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::calibre::access() {
  declare text="accédez à ${software_title} à:
${quickbox_web_root}${username}/${software_name}
nom d'utilisateur: ${username}
mot de passe: admin123
emplacement de la base de données: ${software_library_directory}
${software_title} installé sur le port: ${software_web_port}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::jdownloader::access() {
  declare text="accédez à ${software_title} à:
https://my.jdownloader.org/
emplacement de téléchargement: ${software_downloads_directory}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rtorrent::access() {
  declare text="> version rTorrent: ${rtorrent_version}
> version libtorrent: ${libtorrent_version}
> chemin socket: /var/run/${admin_name}/.rtorrent.sock"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rutorrent::access() {
  declare text="accédez à ${software_title} à:
${quickbox_web_root}${software_name}
> chemin socket: /var/run/${admin_name}/.rtorrent.sock"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::admin::access() {
  declare text="accédez à ${software_title} à:
${quickbox_web_root}${admin_name}/${software_name}
${software_title} installé sur le port: ${software_web_port}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::flaresolverr::access() {
  curl_output=$(curl -s "127.0.0.1:${software_web_port}") && curl_check=$(echo "${curl_output}" | grep -o "FlareSolverr is ready!") || curl_check=""
  if [[ ${curl_check} == "FlareSolverr is ready!" ]]; then
    declare text="statut: ok. FlareSolverr est prêt!
${software_title} installé sur le port: ${software_web_port}"
    quickbox::dashboard::log "${text}"
  else
    declare text="Il semble que quelque chose se soit mal passé"
    quickbox::dashboard::log "${text}"
  fi
}

quickbox::lang::software::jellyfin::access() {
  if [[ -n ${domain:-} ]]; then
    jellyfin_web_root="${domain%/}"
    declare text="accédez à ${software_title} à:
https://${jellyfin_web_root}/"
  else
    declare text="accédez à ${software_title} à:
${quickbox_web_root}${username}/${software_name}/
${software_title} installé sur le port: ${software_web_port}"
  fi
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::jellyseerr::access() {
  if [[ -n ${domain:-} ]]; then
    jellyseerr_web_root="${domain%/}"
    declare text="accédez à ${software_title} à:
https://${jellyseerr_web_root}/"
  else
    ip_output=$(ip route get 8.8.8.8 2>/dev/null) && server_ip=$(echo "${ip_output}" | sed -n '/src/{s/.*src *\([^ ]*\).*/\1/p;q}') || server_ip="127.0.0.1"
    declare text="accédez à ${software_title} à:
http://${server_ip}:${software_web_port}/
${software_title} installé sur le port: ${software_web_port}"
  fi
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::notifiarr::access() {
  if [[ ${#user_password} -lt 9 ]]; then
    declare text="accédez à ${software_title} à:
${quickbox_web_root}${username}/${software_name}
${software_title} installé sur le port: ${software_web_port}
nom d'utilisateur: ${username}
mot de passe: ${notifiarr_user_password}

Note: Votre mot de passe fait moins de 9 caractères.
      Notifiarr nécessite que les mots de passe fassent au moins 9 caractères.
      J'ai modifié cela pour ajouter des caractères aléatoires supplémentaires.
      Vous pouvez vous connecter en utilisant le mot de passe donné et le changer dans les paramètres.
      -----------------------------------------------------
      Pour votre commodité, le nouveau mot de passe se trouve dans:
      /home/${username}/.config/Notifiarr/config/.notifiarr.pass.txt"
    quickbox::dashboard::log "${text}"
  else
    declare text="accédez à ${software_title} à:
${quickbox_web_root}${username}/${software_name}
${software_title} installé sur le port: ${software_web_port}
nom d'utilisateur: ${username}
mot de passe: ${notifiarr_user_password}"
    quickbox::dashboard::log "${text}"
  fi
}

quickbox::lang::software::novnc::access() {
  declare text="accédez à ${software_title} à:
${quickbox_web_root}${username}/vnc/vnc.html?resize=remote&host=${novnc_web_root}&path=${username}/websockify
${software_title} installé sur le port: ${software_web_port}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::overseerr::access() {
  if [[ -n ${domain:-} ]]; then
    overseerr_web_root="${domain%/}"
    declare text="accédez à ${software_title} à:
https://${overseerr_web_root}/"
  else
    ip_output=$(ip route get 8.8.8.8 2>/dev/null) && server_ip=$(echo "${ip_output}" | sed -n '/src/{s/.*src *\([^ ]*\).*/\1/p;q}') || server_ip="127.0.0.1"
    declare text="accédez à ${software_title} à:
http://${server_ip}:${software_web_port}/
${software_title} installé sur le port: ${software_web_port}"
  fi
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plex::access() {
  declare text="accédez à ${software_title} à:
${quickbox_web_root}web/
${software_title} installé sur le port: ${software_web_port}

> Si vous n'avez pas et/ou n'êtes pas sûr de comment
revendiquer votre serveur plex, veuillez suivre ce guide:
https://quickbox.io/kb-categories/plex/"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::pyload::access() {
  declare text="accédez à ${software_title} à:
${quickbox_web_root}${username}/${software_name}/
${software_title} installé sur le port: ${software_web_port}

> nom d'utilisateur = ${username}
> mot de passe = pyload

> Connectez-vous à pyload et changez le mot de passe par défaut pour la sécurité.
Votre mot de passe peut être changé sous l'onglet [utilisateurs] dans pyload."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::quassel::access() {
  ip_output=$(ip route get 8.8.8.8 2>/dev/null) && server_ip=$(echo "${ip_output}" | sed -n '/src/{s/.*src *\([^ ]*\).*/\1/p;q}') || server_ip="127.0.0.1"
  declare text="${software_title} installé sur le port: ${software_daemon_port}

> Veuillez installer quassel-client sur votre
ordinateur personnel et vous connecter au nouveau ${software_title} Core
créé pour configurer votre compte à:
${server_ip}:${software_daemon_port}

> Téléchargez quassel-client depuis:
https://quassel-irc.org/downloads"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone::access() {
  declare text="${software_title} installé

> Pour plus d'informations sur l'installation de rclone, voir:
  qb help rclone
"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::vpnzip::access() {
  declare text="téléchargez le profil ${software_title} à:
${quickbox_web_root}${username}/ovpn.zip
> pour l'utiliser dans tout client OpenVPN"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::x2go::access() {
  ip_output=$(ip route get 8.8.8.8 2>/dev/null) && server_ip=$(echo "${ip_output}" | sed -n '/src/{s/.*src *\([^ ]*\).*/\1/p;q}') || server_ip="127.0.0.1"
  declare text="${software_title} Serveur installé

> Veuillez installer le client x2go sur votre ordinateur personnel
et vous connecter au nouveau ${software_title} Serveur
en utilisant les informations suivantes:
Hôte:       ${server_ip}
Identifiant: ${username}
Port SSH:   4747
Type de session:	XFCE ou MATE

> Téléchargez le client x2go depuis:
https://wiki.x2go.org/doku.php/doc:installation:x2goclient"
  quickbox::dashboard::log "${text}"
}