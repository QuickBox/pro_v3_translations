#!/usr/bin/env bash
################################################################################
# Módulo de Mensagens de Acesso ao Software
# Contém todas as informações de acesso ao software e mensagens de configuração
################################################################################

quickbox::lang::software::access() {
  declare text="acesse ${software_title} em:
${quickbox_web_root}${software_name}
${software_title} instalado na porta: ${software_web_port}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::mu::access() {
  declare text="acesse ${software_title} em:
${quickbox_web_root}${username}/${software_name}
${software_title} instalado na porta: ${software_web_port}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::airsonic::access() {
  declare text="acesse ${software_title} em:
${quickbox_web_root}${username}/${software_name}
usuário: admin
senha: admin
${software_title} instalado na porta: ${software_web_port}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::autodl::access() {
  cfg_output=$(cat "/home/${admin_name:-}/.autodl/autodl.cfg" 2>/dev/null) && grep_output=$(echo "${cfg_output}" | grep "gui-server-port = ") && adl_port="${grep_output#gui-server-port = }" || adl_port=""
  declare text="acesse ${software_title} em:
${quickbox_web_root}rutorrent
  > menu > autodl-irssi
${software_title} instalado na porta: ${adl_port}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::calibre::access() {
  declare text="acesse ${software_title} em:
${quickbox_web_root}${username}/${software_name}
usuário: ${username}
senha: admin123
localização do banco de dados: ${software_library_directory}
${software_title} instalado na porta: ${software_web_port}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::jdownloader::access() {
  declare text="acesse ${software_title} em:
https://my.jdownloader.org/
local de download: ${software_downloads_directory}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rtorrent::access() {
  declare text="> versão rTorrent: ${rtorrent_version}
> versão libtorrent: ${libtorrent_version}
> caminho do socket: /var/run/${admin_name}/.rtorrent.sock"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rutorrent::access() {
  declare text="acesse ${software_title} em:
${quickbox_web_root}${software_name}
> caminho do socket: /var/run/${admin_name}/.rtorrent.sock"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::admin::access() {
  declare text="acesse ${software_title} em:
${quickbox_web_root}${admin_name}/${software_name}
${software_title} instalado na porta: ${software_web_port}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::flaresolverr::access() {
  curl_output=$(curl -s "127.0.0.1:${software_web_port}") && curl_check=$(echo "${curl_output}" | grep -o "FlareSolverr is ready!") || curl_check=""
  if [[ ${curl_check} == "FlareSolverr is ready!" ]]; then
    declare text="status: ok. FlareSolverr está pronto!
${software_title} instalado na porta: ${software_web_port}"
    quickbox::dashboard::log "${text}"
  else
    declare text="Parece que algo deu errado"
    quickbox::dashboard::log "${text}"
  fi
}

quickbox::lang::software::jellyfin::access() {
  if [[ -n ${domain:-} ]]; then
    jellyfin_web_root="${domain%/}"
    declare text="acesse ${software_title} em:
https://${jellyfin_web_root}/"
  else
    declare text="acesse ${software_title} em:
${quickbox_web_root}${username}/${software_name}/
${software_title} instalado na porta: ${software_web_port}"
  fi
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::jellyseerr::access() {
  if [[ -n ${domain:-} ]]; then
    jellyseerr_web_root="${domain%/}"
    declare text="acesse ${software_title} em:
https://${jellyseerr_web_root}/"
  else
    ip_output=$(ip route get 8.8.8.8 2>/dev/null) && server_ip=$(echo "${ip_output}" | sed -n '/src/{s/.*src *\([^ ]*\).*/\1/p;q}') || server_ip="127.0.0.1"
    declare text="acesse ${software_title} em:
http://${server_ip}:${software_web_port}/
${software_title} instalado na porta: ${software_web_port}"
  fi
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::notifiarr::access() {
  if [[ ${#user_password} -lt 9 ]]; then
    declare text="acesse ${software_title} em:
${quickbox_web_root}${username}/${software_name}
${software_title} instalado na porta: ${software_web_port}
usuário: ${username}
senha: ${notifiarr_user_password}

Nota: Sua senha tem menos de 9 caracteres.
      Notifiarr requer senhas com pelo menos 9 caracteres.
      Modifiquei isso para adicionar caracteres aleatórios adicionais.
      Você pode fazer login usando a senha fornecida e alterá-la nas configurações.
      -----------------------------------------------------
      Para sua conveniência, a nova senha está localizada em:
      /home/${username}/.config/Notifiarr/config/.notifiarr.pass.txt"
    quickbox::dashboard::log "${text}"
  else
    declare text="acesse ${software_title} em:
${quickbox_web_root}${username}/${software_name}
${software_title} instalado na porta: ${software_web_port}
usuário: ${username}
senha: ${notifiarr_user_password}"
    quickbox::dashboard::log "${text}"
  fi
}

quickbox::lang::software::novnc::access() {
  declare text="acesse ${software_title} em:
${quickbox_web_root}${username}/vnc/vnc.html?resize=remote&host=${novnc_web_root}&path=${username}/websockify
${software_title} instalado na porta: ${software_web_port}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::overseerr::access() {
  if [[ -n ${domain:-} ]]; then
    overseerr_web_root="${domain%/}"
    declare text="acesse ${software_title} em:
https://${overseerr_web_root}/"
  else
    ip_output=$(ip route get 8.8.8.8 2>/dev/null) && server_ip=$(echo "${ip_output}" | sed -n '/src/{s/.*src *\([^ ]*\).*/\1/p;q}') || server_ip="127.0.0.1"
    declare text="acesse ${software_title} em:
http://${server_ip}:${software_web_port}/
${software_title} instalado na porta: ${software_web_port}"
  fi
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plex::access() {
  declare text="acesse ${software_title} em:
${quickbox_web_root}web/
${software_title} instalado na porta: ${software_web_port}

> Se você não tem e/ou não tem certeza de como 
reivindicar seu servidor plex, siga este guia:
https://quickbox.io/kb-categories/plex/"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::pyload::access() {
  declare text="acesse ${software_title} em:
${quickbox_web_root}${username}/${software_name}/
${software_title} instalado na porta: ${software_web_port}

> usuário = ${username}
> senha = pyload

> Faça login no pyload e altere a senha padrão por segurança.
Sua senha pode ser alterada na aba [usuários] no pyload."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::quassel::access() {
  ip_output=$(ip route get 8.8.8.8 2>/dev/null) && server_ip=$(echo "${ip_output}" | sed -n '/src/{s/.*src *\([^ ]*\).*/\1/p;q}') || server_ip="127.0.0.1"
  declare text="${software_title} instalado na porta: ${software_daemon_port}

> Por favor, instale quassel-client no seu 
computador pessoal e conecte-se ao ${software_title} Core recém-criado 
para configurar sua conta em:
${server_ip}:${software_daemon_port}

> Baixe quassel-client do seguinte:
https://quassel-irc.org/downloads"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone::access() {
  declare text="${software_title} instalado

> Para mais informações sobre como instalar rclone, veja:
  qb help rclone
"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::vpnzip::access() {
  declare text="baixe o perfil ${software_title} em:
${quickbox_web_root}${username}/ovpn.zip
> para usar em qualquer cliente OpenVPN"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::access() {
  declare text="acesse ${software_title} em:
${quickbox_web_root}whats-streaming.php"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::x2go::access() {
  ip_output=$(ip route get 8.8.8.8 2>/dev/null) && server_ip=$(echo "${ip_output}" | sed -n '/src/{s/.*src *\([^ ]*\).*/\1/p;q}') || server_ip="127.0.0.1"
  declare text="Servidor ${software_title} instalado

> Por favor, instale x2go-client no seu computador pessoal 
e conecte-se ao Servidor ${software_title} recém-criado 
usando o seguinte:
Host:       ${server_ip}
Login:      ${username}
Porta SSH:   4747
Tipo de sessão:	XFCE ou MATE

> Baixe x2go-client do seguinte:
https://wiki.x2go.org/doku.php/doc:installation:x2goclient"
  quickbox::dashboard::log "${text}"
} 