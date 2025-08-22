#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Nombre del Proyecto: QuickBox Pro
# Nombre del Archivo: cli_core_es
# Descripción del Archivo: Archivo de idioma español - Operaciones del Sistema Central
# Versión del Archivo: 1.0.1
#
# Tareas de Guardado:
# Versionado_Automatizado: true
#
# Tareas de Compilación:
# Eliminación_Comentarios_Automatizada: true
#
# Tareas de Despliegue:
# Encriptación_Automatizada: false
#
# Autor: Jason Matthews (JMSolo)
# Contacto del Autor: support@quickbox.io
# Autor: Jamie Dobbs (Mschf)
# Contacto del Autor: jamie.dobbs@mschf.dev
#
# Licencia: BSD-3 (Disponible en LICENSE.md)
# Copyright (C) 2019-2025, QuickBox.IO
# Todos los derechos reservados.
# <END METADATA>
# shellcheck disable=2001,2034,2154,2312,2317
################################################################################

################################################################################
# Función Central de Logging del Dashboard
################################################################################
quickbox::dashboard::log() {
  admin_name="$(quickbox::database "SELECT username FROM user_information WHERE user_level = '10';")"
  if [[ ! -f "/srv/quickbox/logs/dashboard" ]]; then
    mkdir -p /srv/quickbox/logs
    touch /srv/quickbox/logs/dashboard
    chown www-data:www-data /srv/quickbox/logs/dashboard
  fi
  if [[ ! -f "/srv/quickbox/logs/${username:-${admin_name}}.dashboard" ]]; then
    mkdir -p /srv/quickbox/logs
    touch "/srv/quickbox/logs/${username:-${admin_name}}.dashboard"
    chown www-data:www-data "/srv/quickbox/logs/${username:-${admin_name}}.dashboard"
  fi
  if [[ -n ${username} ]]; then
    echo "${1:-null}" | sed -z "s/\n/\n<br>/" >"/srv/quickbox/logs/${username:-}.dashboard"
  else
    echo "${1:-null}" | sed -z "s/\n/\n<br>/" >"/srv/quickbox/logs/${admin_name:-}.dashboard"
  fi
  echo "${1:-null}"
}

################################################################################
# Operaciones de Limpieza
################################################################################
quickbox::lang::clean::memory() {
  declare text="limpiando caché de memoria..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::clean::rclone() {
  declare text="limpiando log de carga de rclone..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::clean::dashboard() {
  declare text="esperando respuesta del sistema..."
  quickbox::dashboard::log "${text}"
}

################################################################################
# Gestión de Bloqueos
################################################################################
quickbox::lang::lock::handle() {
  declare text="${quickbox_lock} está ejecutándose actualmente
el proceso se reanudará una vez que ${quickbox_lock} termine"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lock::remove() {
  declare text="removiendo bloqueos de software..."
  quickbox::dashboard::log "${text}"
}

################################################################################
# Operaciones Misceláneas
################################################################################
quickbox::lang::unknown::option() {
  declare text="${2} Opción desconocida: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::directory::nomove() {
  declare text="no se puede mover a $1..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::package::fail() {
  declare text="no se pudo instalar un paquete requerido $1..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::database() {
  declare text="actualizando base de datos..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::trackers::disable() {
  declare text="deshabilitando trackers públicos..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::trackers::enable() {
  declare text="habilitando trackers públicos..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::run_via_qb() {
  declare text="error[1]: ${script_name} debe ejecutarse a través de qb"
  quickbox::dashboard::log "${text}"
}
