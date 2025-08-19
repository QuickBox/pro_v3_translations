#!/usr/bin/env bash
################################################################################
# Software Adgangsmeddelelser Modul
# Indeholder alle software adgangsinformation og konfigurationsmeddelelser
################################################################################

quickbox::lang::software::access() {
  declare text="adgang til ${software_title} på:
${quickbox_web_root}${software_name}
${software_title} installeret på port: ${software_web_port}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::mu::access() {
  declare text="adgang til ${software_title} på:
${quickbox_web_root}${username}/${software_name}
${software_title} installeret på port: ${software_web_port}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::airsonic::access() {
  declare text="adgang til ${software_title} på:
${quickbox_web_root}${username}/${software_name}
brugernavn: admin
adgangskode: admin
${software_title} installeret på port: ${software_web_port}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::autodl::access() {
  cfg_output=$(cat "/home/${admin_name:-}/.autodl/autodl.cfg" 2>/dev/null) && grep_output=$(echo "${cfg_output}" | grep "gui-server-port = ") && adl_port="${grep_output#gui-server-port = }" || adl_port=""
  declare text="adgang til ${software_title} på:
${quickbox_web_root}rutorrent
  > menu > autodl-irssi
${software_title} installeret på port: ${adl_port}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::calibre::access() {
  declare text="adgang til ${software_title} på:
${quickbox_web_root}${username}/${software_name}
brugernavn: ${username}
adgangskode: admin123
database placering: ${software_library_directory}
${software_title} installeret på port: ${software_web_port}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::jdownloader::access() {
  declare text="adgang til ${software_title} på:
https://my.jdownloader.org/
download placering: ${software_downloads_directory}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rtorrent::access() {
  declare text="> rTorrent version: ${rtorrent_version}
> libtorrent version: ${libtorrent_version}
> socket sti: /var/run/${admin_name}/.rtorrent.sock"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rutorrent::access() {
  declare text="adgang til ${software_title} på:
${quickbox_web_root}${software_name}
> socket sti: /var/run/${admin_name}/.rtorrent.sock"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::admin::access() {
  declare text="adgang til ${software_title} på:
${quickbox_web_root}${admin_name}/${software_name}
${software_title} installeret på port: ${software_web_port}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::flaresolverr::access() {
  curl_output=$(curl -s "127.0.0.1:${software_web_port}") && curl_check=$(echo "${curl_output}" | grep -o "FlareSolverr is ready!") || curl_check=""
  if [[ ${curl_check} == "FlareSolverr is ready!" ]]; then
    declare text="status: ok. FlareSolverr er klar!
${software_title} installeret på port: ${software_web_port}"
    quickbox::dashboard::log "${text}"
  else
    declare text="Det ser ud til at noget gik galt"
    quickbox::dashboard::log "${text}"
  fi
}

quickbox::lang::software::jellyfin::access() {
  if [[ -n ${domain:-} ]]; then
    jellyfin_web_root="${domain%/}"
    declare text="adgang til ${software_title} på:
https://${jellyfin_web_root}/"
  else
    declare text="adgang til ${software_title} på:
${quickbox_web_root}${username}/${software_name}/
${software_title} installeret på port: ${software_web_port}"
  fi
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::jellyseerr::access() {
  if [[ -n ${domain:-} ]]; then
    jellyseerr_web_root="${domain%/}"
    declare text="adgang til ${software_title} på:
https://${jellyseerr_web_root}/"
  else
    ip_output=$(ip route get 8.8.8.8 2>/dev/null) && server_ip=$(echo "${ip_output}" | sed -n '/src/{s/.*src *\([^ ]*\).*/\1/p;q}') || server_ip="127.0.0.1"
    declare text="adgang til ${software_title} på:
http://${server_ip}:${software_web_port}/
${software_title} installeret på port: ${software_web_port}"
  fi
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::notifiarr::access() {
  if [[ ${#user_password} -lt 9 ]]; then
    declare text="adgang til ${software_title} på:
${quickbox_web_root}${username}/${software_name}
${software_title} installeret på port: ${software_web_port}
brugernavn: ${username}
adgangskode: ${notifiarr_user_password}

Bemærk: Din adgangskode er mindre end 9 tegn.
      Notifiarr kræver adgangskoder på mindst 9 tegn.
      Jeg har ændret dette til at tilføje yderligere tilfældige tegn.
      Du kan logge ind ved hjælp af den givne adgangskode og ændre den i indstillingerne.
      -----------------------------------------------------
      For din bekvemmelighed er den nye adgangskode placeret i:
      /home/${username}/.config/Notifiarr/config/.notifiarr.pass.txt"
    quickbox::dashboard::log "${text}"
  else
    declare text="adgang til ${software_title} på:
${quickbox_web_root}${username}/${software_name}
${software_title} installeret på port: ${software_web_port}
brugernavn: ${username}
adgangskode: ${notifiarr_user_password}"
    quickbox::dashboard::log "${text}"
  fi
}

quickbox::lang::software::novnc::access() {
  declare text="adgang til ${software_title} på:
${quickbox_web_root}${username}/vnc/vnc.html?resize=remote&host=${novnc_web_root}&path=${username}/websockify
${software_title} installeret på port: ${software_web_port}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::overseerr::access() {
  if [[ -n ${domain:-} ]]; then
    overseerr_web_root="${domain%/}"
    declare text="adgang til ${software_title} på:
https://${overseerr_web_root}/"
  else
    ip_output=$(ip route get 8.8.8.8 2>/dev/null) && server_ip=$(echo "${ip_output}" | sed -n '/src/{s/.*src *\([^ ]*\).*/\1/p;q}') || server_ip="127.0.0.1"
    declare text="adgang til ${software_title} på:
http://${server_ip}:${software_web_port}/
${software_title} installeret på port: ${software_web_port}"
  fi
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plex::access() {
  declare text="adgang til ${software_title} på:
${quickbox_web_root}web/
${software_title} installeret på port: ${software_web_port}

> Hvis du ikke har og/eller er usikker på hvordan du 
claim din plex server følg venligst denne guide:
https://quickbox.io/kb-categories/plex/"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::pyload::access() {
  declare text="adgang til ${software_title} på:
${quickbox_web_root}${username}/${software_name}/
${software_title} installeret på port: ${software_web_port}

> brugernavn = ${username}
> adgangskode = pyload

> Log ind på pyload og ændre standardadgangskoden for sikkerhed.
Din adgangskode kan ændres under [users] fanen i pyload."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::quassel::access() {
  ip_output=$(ip route get 8.8.8.8 2>/dev/null) && server_ip=$(echo "${ip_output}" | sed -n '/src/{s/.*src *\([^ ]*\).*/\1/p;q}') || server_ip="127.0.0.1"
  declare text="${software_title} installeret på port: ${software_daemon_port}

> Installer venligst quassel-client på din personlige 
computer og forbind til den nyoprettede ${software_title} Core 
for at opsætte din konto på:
${server_ip}:${software_daemon_port}

> Download quassel-client fra følgende:
https://quassel-irc.org/downloads"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone::access() {
  declare text="${software_title} installeret

> For mere information om hvordan du installerer rclone, se:
  qb help rclone
"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::vpnzip::access() {
  declare text="download ${software_title} profil på:
${quickbox_web_root}${username}/ovpn.zip
> til brug i enhver OpenVPN klient"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::access() {
  declare text="adgang til ${software_title} på:
${quickbox_web_root}whats-streaming.php"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::x2go::access() {
  ip_output=$(ip route get 8.8.8.8 2>/dev/null) && server_ip=$(echo "${ip_output}" | sed -n '/src/{s/.*src *\([^ ]*\).*/\1/p;q}') || server_ip="127.0.0.1"
  declare text="${software_title} Server installeret

> Installer venligst x2go-client på din personlige computer 
og forbind til den nyoprettede ${software_title} Server 
ved hjælp af følgende:
Host:       ${server_ip}
Login:      ${username}
SSH port:   4747
Session type:	XFCE eller MATE

> Download x2go-client fra følgende:
https://wiki.x2go.org/doku.php/doc:installation:x2goclient"
  quickbox::dashboard::log "${text}"
} 