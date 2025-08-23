#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Nombre del Proyecto: QuickBox Pro
# Nombre del Archivo: cli_users_es
# Descripción del Archivo: Archivo de idioma español - Gestión de Usuarios
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
# Gestión de Usuarios
################################################################################
quickbox::lang::user::create() {
  declare text="usuario de quickbox creado:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::user::delete() {
  declare text="${username:-"usuario de quickbox"} eliminado"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::user::username() {
  declare text="usuario: ${username}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::user::password() {
  declare text="contraseña: ${password}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::user::password::updated() {
  declare text="contraseña de ${username:-"usuario de quickbox"} actualizada"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::user::ban() {
  declare text="${username:-"usuario de quickbox"} baneado"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::user::unban() {
  declare text="${username:-"usuario de quickbox"} desbaneado"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::user::demote() {
  declare text="${username:-"usuario de quickbox"} degradado de administrador"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::user::promote() {
  declare text="${username:-"usuario de quickbox"} promovido a administrador"
  quickbox::dashboard::log "${text}"
} 