#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Nombre del Proyecto: QuickBox Pro
# Nombre del Archivo: cli_software_es
# Descripción del Archivo: Archivo de idioma español - Gestión de Software
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
# Operaciones de Instalación
################################################################################
quickbox::lang::install::header() {
  declare text="${software_title} será instalado ahora
este proceso puede tomar unos minutos..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::rutorrent::header() {
  rtorrent_count=$(quickbox::software::count rtorrent)
  if [[ ${rtorrent_count} -eq 0 ]]; then
    declare text="parece que rTorrent no está instalado

rTorrent 0.9.8 se instalará ahora, por favor espera ya que esto puede
tomar unos minutos (dependiendo de las especificaciones del sistema) para instalar"
  else
    declare text="${software_title} será instalado ahora
este proceso puede tomar unos minutos..."
  fi
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::sources::header() {
  declare text="agregando claves y fuentes adicionales para ${software_title}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::dependencies::header() {
  declare text="instalando dependencias de ${software_title}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::build::header() {
  declare text="compilando ${software_title}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::mktorrent::header() {
  declare text="compilando mktorrent..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::xmlrpc::header() {
  declare text="compilando xmlrpc-c..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::libtorrent::header() {
  declare text="compilando libtorrent..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::rtorrent::header() {
  declare text="compilando rtorrent..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::certificate::header() {
  declare text="creando certificado ssl para ${d}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::configure::lecert::header() {
  declare text="configurando NGinx para Let's Encrypt..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::configure::header() {
  declare text="configurando ${software_title}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::backup::header() {
  declare text="respaldo de configuración de ${software_title}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::start::header() {
  declare text="iniciando ${software_title}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::install::complete::header() {
  declare text="instalación de ${software_title} completada"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Operaciones de Reinstalación
################################################################################
quickbox::lang::reinstall::header() {
  declare text="${software_title} será reinstalado ahora
este proceso puede tomar unos minutos..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::reinstall::complete::header() {
  declare text="reinstalación de ${software_title} completada"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Operaciones de Remoción
################################################################################
quickbox::lang::remove::header() {
  declare text="${software_title} será removido ahora
este proceso puede tomar unos minutos..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::remove::stop::header() {
  declare text="deteniendo ${software_title}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::remove::dependencies::header() {
  declare text="removiendo dependencias de ${software_title}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::remove::files::header() {
  declare text="removiendo archivos de ${software_title}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::remove::complete::header() {
  declare text="remoción de ${software_title} completada"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Operaciones de Actualización
################################################################################
quickbox::lang::update::header() {
  declare text="${software_title} será actualizado ahora
este proceso puede tomar unos minutos..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::files::header() {
  declare text="actualizando ${software_title}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::complete::header() {
  declare text="actualización de ${software_title} completada"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::update::files::admin() {
  declare text="debe estar conectado como administrador para actualizar ${software_title}"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Información de Acceso al Software
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

quickbox::lang::software::admin::access() {
  declare text="acceder a ${software_title} en:
${quickbox_web_root}${admin_name}/${software_name}
${software_title} instalado en puerto: ${software_web_port}"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Mensajes de Comandos del Sistema
################################################################################
quickbox::lang::system::health::check::running() {
  declare text="Ejecutando verificación de salud integral..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::service::status::current() {
  declare text="Estado actual del servicio:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::service::logs::recent() {
  declare text="Logs recientes del servicio:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::enhanced::files::removed() {
  declare text="Archivos de servicio mejorados eliminados exitosamente"
  quickbox::dashboard::log "${text}"
}
