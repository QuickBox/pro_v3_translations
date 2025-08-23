#!/usr/bin/env bash
################################################################################
# Módulo de Mensajes de Acceso al Software
# Contiene toda la información de acceso al software y mensajes de configuración
################################################################################

quickbox::lang::software::access() {
  declare text="acceder a ${software_title} en:
${quickbox_web_root}${software_name}
${software_title} instalado en puerto: ${software_web_port}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::mu::access() {
  declare text="acceder a ${software_title} en:
${quickbox_web_root}${username}/${software_name}
${software_title} instalado en puerto: ${software_web_port}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::airsonic::access() {
  declare text="acceder a ${software_title} en:
${quickbox_web_root}${username}/${software_name}
nombre de usuario: admin
contraseña: admin
${software_title} instalado en puerto: ${software_web_port}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::autodl::access() {
  cfg_output=$(cat "/home/${admin_name:-}/.autodl/autodl.cfg" 2>/dev/null) && grep_output=$(echo "${cfg_output}" | grep "gui-server-port = ") && adl_port="${grep_output#gui-server-port = }" || adl_port=""
  declare text="acceder a ${software_title} en:
${quickbox_web_root}rutorrent
  > menú > autodl-irssi
${software_title} instalado en puerto: ${adl_port}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::calibre::access() {
  declare text="acceder a ${software_title} en:
${quickbox_web_root}${username}/${software_name}
nombre de usuario: ${username}
contraseña: admin123
ubicación de la base de datos: ${software_library_directory}
${software_title} instalado en puerto: ${software_web_port}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::jdownloader::access() {
  declare text="acceder a ${software_title} en:
https://my.jdownloader.org/
ubicación de descarga: ${software_downloads_directory}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rtorrent::access() {
  declare text="> versión de rTorrent: ${rtorrent_version}
> versión de libtorrent: ${libtorrent_version}
> ruta del socket: /var/run/${admin_name}/.rtorrent.sock"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rutorrent::access() {
  declare text="acceder a ${software_title} en:
${quickbox_web_root}${software_name}
> ruta del socket: /var/run/${admin_name}/.rtorrent.sock"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::admin::access() {
  declare text="acceder a ${software_title} en:
${quickbox_web_root}${admin_name}/${software_name}
${software_title} instalado en puerto: ${software_web_port}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::flaresolverr::access() {
  curl_output=$(curl -s "127.0.0.1:${software_web_port}") && curl_check=$(echo "${curl_output}" | grep -o "FlareSolverr is ready!") || curl_check=""
  if [[ ${curl_check} == "FlareSolverr is ready!" ]]; then
    declare text="estado: ok. ¡FlareSolverr está listo!
${software_title} instalado en puerto: ${software_web_port}"
    quickbox::dashboard::log "${text}"
  else
    declare text="Parece que algo salió mal"
    quickbox::dashboard::log "${text}"
  fi
}

quickbox::lang::software::jellyfin::access() {
  if [[ -n ${domain:-} ]]; then
    jellyfin_web_root="${domain%/}"
    declare text="acceder a ${software_title} en:
https://${jellyfin_web_root}/"
  else
    declare text="acceder a ${software_title} en:
${quickbox_web_root}${username}/${software_name}/
${software_title} instalado en puerto: ${software_web_port}"
  fi
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::jellyseerr::access() {
  if [[ -n ${domain:-} ]]; then
    jellyseerr_web_root="${domain%/}"
    declare text="acceder a ${software_title} en:
https://${jellyseerr_web_root}/"
  else
    ip_output=$(ip route get 8.8.8.8 2>/dev/null) && server_ip=$(echo "${ip_output}" | sed -n '/src/{s/.*src *\([^ ]*\).*/\1/p;q}') || server_ip="127.0.0.1"
    declare text="acceder a ${software_title} en:
http://${server_ip}:${software_web_port}/
${software_title} instalado en puerto: ${software_web_port}"
  fi
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::notifiarr::access() {
  if [[ ${#user_password} -lt 9 ]]; then
    declare text="acceder a ${software_title} en:
${quickbox_web_root}${username}/${software_name}
${software_title} instalado en puerto: ${software_web_port}
nombre de usuario: ${username}
contraseña: ${notifiarr_user_password}

Nota: Tu contraseña tiene menos de 9 caracteres.
      Notifiarr requiere contraseñas de al menos 9 caracteres.
      He modificado esto para añadir caracteres aleatorios adicionales.
      Puedes iniciar sesión usando la contraseña dada y cambiarla en la configuración.
      -----------------------------------------------------
      Para tu conveniencia, la nueva contraseña se encuentra en:
      /home/${username}/.config/Notifiarr/config/.notifiarr.pass.txt"
    quickbox::dashboard::log "${text}"
  else
    declare text="acceder a ${software_title} en:
${quickbox_web_root}${username}/${software_name}
${software_title} instalado en puerto: ${software_web_port}
nombre de usuario: ${username}
contraseña: ${notifiarr_user_password}"
    quickbox::dashboard::log "${text}"
  fi
}

quickbox::lang::software::novnc::access() {
  declare text="acceder a ${software_title} en:
${quickbox_web_root}${username}/vnc/vnc.html?resize=remote&host=${novnc_web_root}&path=${username}/websockify
${software_title} instalado en puerto: ${software_web_port}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::overseerr::access() {
  if [[ -n ${domain:-} ]]; then
    overseerr_web_root="${domain%/}"
    declare text="acceder a ${software_title} en:
https://${overseerr_web_root}/"
  else
    ip_output=$(ip route get 8.8.8.8 2>/dev/null) && server_ip=$(echo "${ip_output}" | sed -n '/src/{s/.*src *\([^ ]*\).*/\1/p;q}') || server_ip="127.0.0.1"
    declare text="acceder a ${software_title} en:
http://${server_ip}:${software_web_port}/
${software_title} instalado en puerto: ${software_web_port}"
  fi
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plex::access() {
  declare text="acceder a ${software_title} en:
${quickbox_web_root}web/
${software_title} instalado en puerto: ${software_web_port}

> Si no has reclamado y/o no estás seguro de cómo
reclamar tu servidor plex, sigue esta guía:
https://quickbox.io/kb-categories/plex/"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::pyload::access() {
  declare text="acceder a ${software_title} en:
${quickbox_web_root}${username}/${software_name}/
${software_title} instalado en puerto: ${software_web_port}

> nombre de usuario = ${username}
> contraseña = pyload

> Inicia sesión en pyload y cambia la contraseña por defecto por seguridad.
Tu contraseña se puede cambiar en la pestaña [usuarios] en pyload."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::quassel::access() {
  ip_output=$(ip route get 8.8.8.8 2>/dev/null) && server_ip=$(echo "${ip_output}" | sed -n '/src/{s/.*src *\([^ ]*\).*/\1/p;q}') || server_ip="127.0.0.1"
  declare text="${software_title} instalado en puerto: ${software_daemon_port}

> Por favor instala quassel-client en tu
computadora personal y conéctate al ${software_title} Core recién creado
para configurar tu cuenta en:
${server_ip}:${software_daemon_port}

> Descarga quassel-client desde:
https://quassel-irc.org/downloads"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone::access() {
  declare text="${software_title} instalado

> Para más información sobre cómo instalar rclone, consulta:
  qb help rclone
"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::vpnzip::access() {
  declare text="descargar perfil ${software_title} en:
${quickbox_web_root}${username}/ovpn.zip
> para usar en cualquier cliente OpenVPN"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::x2go::access() {
  ip_output=$(ip route get 8.8.8.8 2>/dev/null) && server_ip=$(echo "${ip_output}" | sed -n '/src/{s/.*src *\([^ ]*\).*/\1/p;q}') || server_ip="127.0.0.1"
  declare text="${software_title} Servidor instalado

> Por favor instala x2go-client en tu
computadora personal y conéctate al ${software_title} Servidor recién creado
usando lo siguiente:
Host:       ${server_ip}
Login:      ${username}
Puerto SSH:   4747
Tipo de sesión:	XFCE o MATE

> Descarga x2go-client desde:
https://wiki.x2go.org/doku.php/doc:installation:x2goclient"
  quickbox::dashboard::log "${text}"
}