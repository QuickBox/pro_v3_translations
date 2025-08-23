#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Nombre del Proyecto: QuickBox Pro
# Nombre del Archivo: cli_apt_es
# Descripción del Archivo: Archivo de idioma español - Gestión de Paquetes APT
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
# Gestión de Paquetes APT
################################################################################
quickbox::lang::apt::update::header() {
  declare text="verificando y realizando actualizaciones de apt..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::apt::db::locked() {
  declare text="intentando resolver bloqueo de dpkg..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::apt::update::completed() {
  declare text="apt-get upgrade completado exitosamente"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::apt::check::failed() {
  declare text="apt-get check falló, puede que tengas paquetes rotos"
  quickbox::dashboard::log "${text}"
} 