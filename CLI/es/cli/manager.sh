#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Nombre del Proyecto: QuickBox Pro
# Nombre del Archivo: cli_manager_es
# Descripción del Archivo: Archivo de idioma español - Gestor de Software
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
# QB Gestor - Gestión de Software
################################################################################

### Operaciones de Respaldo
quickbox::lang::backup::configf() {
  declare text="el archivo de configuración para ${software_name} está siendo respaldado ahora."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::backup::configf::error() {
  declare text="el archivo de configuración ${softwareConf} no existe."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::backup::configf::success() {
  declare text="el archivo de configuración ha sido respaldado."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::backup::installdir::error() {
  declare text="el directorio de instalación de ${software_title} no existe."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::backup::installdir() {
  declare text="el directorio de instalación para ${software_title} (${backup_version}) está siendo respaldado ahora."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::backup::configdir() {
  declare text="el directorio de configuración para ${software_title} está siendo respaldado ahora."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::backup::installdir::success() {
  backup_version="$(tput setaf 5)${backup_version}$(tput setaf 2)"
  declare text="${software_title} (${backup_version}) ha sido respaldado."
  quickbox::dashboard::log "${text}$(tput sgr0)"
}

### Operaciones de Restauración
quickbox::lang::restore::configf::error() {
  declare text="el archivo de respaldo ${backupConf} no existe."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::restore::configf::success() {
  declare text="el archivo de respaldo ha sido restaurado."
  quickbox::dashboard::log "${text}"
}

### Operaciones Predeterminadas
quickbox::lang::default::configf::error() {
  declare text="el archivo de configuración predeterminado ${defaultConf} no existe."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::default::configf::success() {
  declare text="el archivo de configuración predeterminado ha sido restaurado."
  quickbox::dashboard::log "${text}"
}

### Operaciones de Rollback
quickbox::lang::rollback::installdir::error() {
  declare text="el directorio de instalación de ${software_title} no existe."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::rollback::selection::version() {
  declare text="versión:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::rollback::selection::date() {
  declare text="fecha:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::rollback::selection() {
  declare text="selecciona un número de la lista de abajo para hacer rollback
a una versión anterior de ${software_title}:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::rollback::selection::invalid() {
  declare text="selección inválida. por favor intenta de nuevo."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::rollback::software::error() {
  declare text="el respaldo de aplicación de ${software_title} no existe."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::rollback::config::error() {
  declare text="el respaldo de configuración de ${software_title} no existe."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::rollback::selection::display() {
  version="$(tput setaf 5)${version}$(tput setaf 7)"
  app_package="$(tput setaf 5)${app_package}$(tput setaf 7)"
  config_package="$(tput setaf 5)${config_package}$(tput setaf 7)"
  declare text="has seleccionado la versión ${version} para ${software_title}.
paquete de aplicación: ${app_package}
paquete de configuración: ${config_package}"
  quickbox::dashboard::log "${text}$(tput sgr0)"
}

quickbox::lang::rollback::selection::confirm() {
  declare text="¿estás seguro de que quieres proceder con el rollback? (y/n)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::rollback::cancelled() {
  declare text="rollback cancelado."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::rollback::continue() {
  version="$(tput setaf 5)${version}$(tput setaf 7)"
  declare text="${software_title} está siendo revertido a la versión ${version} ahora."
  quickbox::dashboard::log "${text}$(tput sgr0)"
}

quickbox::lang::rollback::complete() {
  version="$(tput setaf 5)${version}$(tput setaf 2)"
  declare text="${software_title} (${version}) ha sido revertido."
  quickbox::dashboard::log "${text}$(tput sgr0)"
}

### Operaciones de Eliminación
quickbox::lang::delete::selection::version() {
  declare text="versión:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::delete::selection::date() {
  declare text="fecha:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::delete::selection() {
  declare text="selecciona un número de la lista de abajo para eliminar
un respaldo anterior de ${software_title}:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::delete::selection::invalid() {
  declare text="selección inválida. por favor intenta de nuevo."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::delete::selection::display() {
  version="$(tput setaf 5)${version}$(tput setaf 7)"
  app_package="$(tput setaf 5)${app_package}$(tput setaf 7)"
  config_package="$(tput setaf 5)${config_package}$(tput setaf 7)"
  declare text="has seleccionado la versión ${version} para ${software_title}.
paquete de aplicación: ${app_package}
paquete de configuración: ${config_package}"
  quickbox::dashboard::log "${text}$(tput sgr0)"
}

quickbox::lang::delete::selection::confirm() {
  declare text="¿estás seguro de que quieres proceder con la eliminación? (y/n)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::delete::cancelled() {
  declare text="eliminación de respaldo cancelada."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::delete::continue() {
  version="$(tput setaf 5)${version}$(tput setaf 7)"
  declare text="el respaldo de ${software_title} (${version}) está siendo eliminado ahora."
  quickbox::dashboard::log "${text}$(tput sgr0)"
}

quickbox::lang::delete::complete() {
  version="$(tput setaf 5)${version}$(tput setaf 2)"
  declare text="el respaldo de ${software_title} (${version}) ha sido eliminado."
  quickbox::dashboard::log "${text}$(tput sgr0)"
}