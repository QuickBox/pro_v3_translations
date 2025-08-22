#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Project Name: QuickBox Pro
# File Name: cli_wsd_es
# File Description: Spanish language file - WSD (What's Streaming Dashboard) CLI
# @version: 1.0.80
#
# @save_tasks:
#  automated_versioning: true
#  automated_formatting: true
#
# Build Tasks:
# Automated_Comment_Strip: true
#
# Deploy Tasks:
# Automated_Encryption: false
#
# Author: Jason Matthews (JMSolo)
#
# License: BSD-3 (Available in LICENSE.md)
# Copyright (C) 2019-2025, QuickBox.IO
# All rights reserved.
# <END METADATA>
# shellcheck disable=2001,2034,2154,2312,2317
################################################################################

################################################################################
# Service Status Messages (guarded)
################################################################################
quickbox::lang::system::service::status::current() {
  declare text="Estado actual del servicio:"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Installation Requirements
################################################################################
quickbox::lang::wsd::neither_installed() {
  declare text="Ni Emby ni Jellyfin están instalados. WSDashboard requiere una de estas aplicaciones de streaming para funcionar."
  quickbox::dashboard::log "${text}"
}

################################################################################
# Port Management
################################################################################
quickbox::lang::wsd::port::fallback_used() {
  declare text="Usando puerto de respaldo ${1} ya que no había otros puertos disponibles"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Environment Configuration
################################################################################
quickbox::lang::wsd::env::port_recovered_from_nginx() {
  declare text="Puerto recuperado de la configuración de nginx: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::env::port_using_available() {
  declare text="Usando puerto disponible: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::env::current_port_empty() {
  declare text="El puerto actual está vacío o es cero, no se puede proceder con la actualización de env.conf"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::env::streaming_app_empty() {
  declare text="La aplicación de streaming está vacía, no se puede proceder con la actualización de env.conf"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::env::boilerplate_remaining() {
  declare text="Algunos marcadores de posición de plantilla permanecen en env.conf"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::env::update_success() {
  declare text="Configuración del entorno actualizada exitosamente: App=${1}, Port=${2}, LogPort=${3}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::env::backup_created() {
  declare text="Respaldo creado en: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::env::boilerplate_detected() {
  declare text="Marcadores de posición de plantilla detectados en env.conf"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Nginx Configuration
################################################################################
quickbox::lang::wsd::nginx::config_missing() {
  declare text="Archivo de configuración de Nginx faltante, no se puede validar"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::nginx::port_updated() {
  declare text="Puerto de Nginx actualizado de ${1} a ${2}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::nginx::config_invalid() {
  declare text="La configuración de Nginx no es válida"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Plugin Management
################################################################################
quickbox::lang::wsd::plugin::fetch::api_error() {
  declare text="Error de API ocurrió al obtener el plugin"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::plugin::fetch::download_error() {
  declare text="Error de descarga ocurrió al obtener el plugin"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::plugin::fetch::unzip_error() {
  declare text="Error de descompresión ocurrió al obtener el plugin"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::plugin::fetch::missing_directory() {
  declare text="Directorio requerido faltante en el archivo del plugin"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::plugin::fetch::missing_directory_warning() {
  declare text="Advertencia: directorio ${1} no encontrado en el archivo del plugin (continuando para instalaciones más antiguas)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::plugin::fetch::complete() {
  declare text="Obtención y extracción del plugin WSD completada"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::plugin::fetch::up_to_date() {
  declare text="El plugin WSD está actualizado"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Virtual Environment
################################################################################
quickbox::lang::wsd::virtual_env::nodeenv_failed() {
  declare text="Falló al instalar nodeenv en el entorno virtual de Python: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::virtual_env::nodejs_failed() {
  declare text="Falló al crear el entorno virtual de Node.js: ${1}"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Service Management
################################################################################
quickbox::lang::wsd::service::start::success() {
  declare text="Servicio iniciado exitosamente"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::start::failed() {
  declare text="El servicio falló al iniciar"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::start::starting() {
  declare text="Iniciando servicio..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::start::success_attempt() {
  declare text="Servicio iniciado exitosamente en el intento ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::start::retry() {
  declare text="Reintentando inicio del servicio (intento ${1})"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::start::command_failed() {
  declare text="El comando de inicio del servicio falló"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::health::passed() {
  declare text="Verificación de salud exitosa"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::health::warnings() {
  declare text="Verificación de salud completada con advertencias"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::fix::attempting() {
  declare text="Intentando arreglar problemas del servicio"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::stop::starting() {
  declare text="Deteniendo servicio..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::stop::force() {
  declare text="Forzando detención del servicio"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::stop::cleanup() {
  declare text="Limpiando procesos restantes"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::stop::warning() {
  declare text="Advertencia de detención del servicio"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::stop::success() {
  declare text="Servicio detenido exitosamente"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::log_server::started() {
  declare text="Servicio del servidor de logs iniciado exitosamente"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::log_server::failed() {
  declare text="El servicio del servidor de logs falló al iniciar"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::update::success() {
  declare text="Servicio actualizado exitosamente"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::service::update::failed() {
  declare text="La actualización del servicio falló"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Access Information
################################################################################
quickbox::lang::wsd::access() {
  declare text="Accede a WSDashboard en: http://localhost:${software_daemon_port}"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Maintenance
################################################################################
quickbox::lang::wsd::maintenance::header() {
  declare text="Modo de mantenimiento de WSDashboard"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::maintenance::title() {
  declare text="Mantenimiento de WSDashboard"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::maintenance::service_not_found() {
  declare text="Servicio de WSDashboard no encontrado"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::maintenance::completed_success() {
  declare text="Mantenimiento completado exitosamente"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::maintenance::completed_warnings() {
  declare text="Mantenimiento completado con advertencias"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::maintenance::complete() {
  declare text="Mantenimiento completo"
  quickbox::dashboard::log "${text}"
}
