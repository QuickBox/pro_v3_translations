#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Project Name: QuickBox Pro
# File Name: cli_wsd_es
# File Description: Archivo de idioma español - WSD (What's Streaming Dashboard) CLI
# File Version: 1.0.14
#
# Save Tasks:
# Automated_Versioning: true
#
# Build Tasks:
# Automated_Comment_Strip: true
#
# Deploy Tasks:
# Automated_Encryption: false
#
# Author: Jason Matthews (JMSolo)
# Author Contact: support@quickbox.io
#
# License: BSD-3 (Available in LICENSE.md)
# Copyright (C) 2019-2025, QuickBox.IO
# All rights reserved.
# <END METADATA>
# shellcheck disable=2001,2034,2154,2312,2317
################################################################################

################################################################################
# Mensajes de error
################################################################################
quickbox::lang::software::wsdashboard::ssl::no_domain() {
  declare text="No se encontró dominio. La configuración SSL requiere un dominio válido."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::certificates_not_found() {
  declare text="Certificados SSL no encontrados en las rutas esperadas."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::access_denied() {
  declare text="Acceso denegado a certificados SSL. Verificar permisos."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::service_failed() {
  declare text="El servicio WSD falló al iniciar después de la configuración SSL."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::update::no_username() {
  declare text="Se requiere nombre de usuario para actualización SSL. Usar parámetro -u."
  quickbox::dashboard::log "${text}"
}
quickbox::lang::wsd::error::missing_emby_params() {
  declare text="Faltan parámetros requeridos para Emby: -u"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::missing_jellyfin_params() {
  declare text="Faltan parámetros requeridos para Jellyfin."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::database_not_found() {
  declare text="Archivo de base de datos no encontrado en: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::jellyfin_api_failed() {
  declare text="Error al obtener datos de la API de Jellyfin."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::missing_manual_path() {
  declare text="Falta parámetro de ruta manual."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::path_not_exist() {
  declare text="La ruta especificada no existe: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::missing_empty_path() {
  declare text="Falta ruta de directorio para vaciar."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::directory_not_exist() {
  declare text="El directorio no existe: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::timestamp_creation_failed() {
  declare text="Error al crear archivo de marca de tiempo: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::empty_directory_failed() {
  declare text="Error al vaciar el directorio: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::missing_transcode_id() {
  declare text="Falta ID de transcodificación."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::invalid_transcode_id() {
  declare text="Formato de ID de transcodificación inválido: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::invalid_mode() {
  declare text="Modo inválido: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::delete_contents_failed() {
  declare text="Error al eliminar contenido del directorio de transcodificación: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::delete_jellyfin_failed() {
  declare text="Error al eliminar archivos de transcodificación para Jellyfin."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::missing_verify_path() {
  declare text="Falta ruta de transcodificación para verificación."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::directory_not_empty() {
  declare text="El directorio de transcodificación no está vacío: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::remove_empty_dir_failed() {
  declare text="Error al eliminar directorio vacío: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::timestamp_not_found() {
  declare text="Archivo de marca de tiempo no encontrado: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::newer_files_exist() {
  declare text="Existen archivos de transcodificación más nuevos después de la marca de tiempo para: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::invalid_mode_generic() {
  declare text="Modo inválido o faltante. Use 'emby' o 'jellyfin'."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::service_template_not_found() {
  declare text="Archivo de plantilla de servicio no encontrado: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::copy_template_failed() {
  declare text="Error al copiar plantilla de servicio a ${1}."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::generate_service_failed() {
  declare text="Error al generar archivo de servicio para modo '${1}'."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::reload_systemd_failed() {
  declare text="Error al recargar systemd."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::enable_service_failed() {
  declare text="Error al habilitar e iniciar ${1}."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::stop_service_failed() {
  declare text="Error al detener ${1}."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::disable_service_failed() {
  declare text="Error al deshabilitar ${1}."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::remove_service_file_failed() {
  declare text="Error al eliminar archivo ${1}."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::reload_after_remove_failed() {
  declare text="Error al recargar systemd después de eliminar ${1}."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::invalid_transcode_dir() {
  declare text="Directorio temporal de transcodificación inválido o faltante: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::clear_standard_failed() {
  declare text="Error al limpiar transcodificaciones estándar: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::clear_livetv_failed() {
  declare text="Error al limpiar transcodificaciones LiveTV: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::invalid_option() {
  declare text="Opción inválida. Use -h para ayuda."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::mode_required_c() {
  declare text="El modo (-m) es requerido con la opción -c. Use 'emby' o 'jellyfin'."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::mode_required_a() {
  declare text="El modo (-m) es requerido con la opción -a. Use 'emby' o 'jellyfin'."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::missing_emby_params_generic() {
  declare text="Faltan parámetros requeridos para Emby: -u"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::missing_jellyfin_params_generic() {
  declare text="Faltan parámetros requeridos para Jellyfin: -U y/o -k"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::error::invalid_mode_specified() {
  declare text="Modo especificado inválido. Use 'emby' o 'jellyfin'."
  quickbox::dashboard::log "${text}"
}

################################################################################
# Mensajes de advertencia
################################################################################
quickbox::lang::wsd::warning::transcode_path_not_found() {
  declare text="TranscodingTempPath no encontrado en los datos JSON."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::warning::transcode_path_not_found_api() {
  declare text="TranscodingTempPath no encontrado en la respuesta de la API."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::warning::autoclear_not_enabled() {
  declare text="AutoClearEnabled no es true para el modo '${1}'. No se requiere acción."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::warning::service_already_active() {
  declare text="${1} ya está activo para el modo '${2}'."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::warning::service_not_active() {
  declare text="${1} no está activo. No es necesario detenerlo."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::warning::service_not_enabled() {
  declare text="${1} no está habilitado. No es necesario deshabilitarlo."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::warning::service_file_not_exist() {
  declare text="El archivo de servicio no existe: ${1}. No se requiere acción."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::warning::autoclear_disabled() {
  declare text="Auto-limpieza está deshabilitada en la base de datos. Saliendo del bucle."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::warning::no_matching_files_standard() {
  declare text="No se encontraron archivos coincidentes para transcodificaciones estándar."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::warning::no_matching_files_livetv() {
  declare text="No se encontraron archivos coincidentes para transcodificaciones LiveTV."
  quickbox::dashboard::log "${text}"
}

################################################################################
# Mensajes de información
################################################################################
quickbox::lang::software::wsdashboard::ssl::title() {
  declare text="Configuración SSL de WSD"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::header() {
  declare text="Configurando enlaces simbólicos de certificados SSL para el servicio WSD..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::setup::start() {
  declare text="Iniciando configuración de enlaces simbólicos SSL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::certificates::found() {
  declare text="Certificados SSL encontrados exitosamente."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::creating::symlinks() {
  declare text="Creando enlaces simbólicos a certificados SSL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::symlinks::created() {
  declare text="Enlaces simbólicos de certificados SSL creados exitosamente."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::testing::access() {
  declare text="Probando acceso a certificados para usuario www-data..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::certificate::accessible() {
  declare text="Certificado accesible a través de enlace simbólico."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::private_key::accessible() {
  declare text="Clave privada accesible a través de enlace simbólico."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::env_conf::added() {
  declare text="Configuración SSL agregada a env.conf."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::env_conf::exists() {
  declare text="Configuración SSL ya existe en env.conf."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::env_conf::updated() {
  declare text="Configuración SSL actualizada en env.conf."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::systemd::override::created() {
  declare text="Override de systemd creado para configuración SSL."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::systemd::override::updated() {
  declare text="Override de systemd actualizado para configuración SSL."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::systemd::reloaded() {
  declare text="Daemon de systemd recargado exitosamente."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::restarting::service() {
  declare text="Reiniciando servicio WSD..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::service::running() {
  declare text="Servicio WSD ejecutándose exitosamente."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::testing::connectivity() {
  declare text="Probando conectividad del servicio..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::https::accessible() {
  declare text="Servicio accesible a través de HTTPS."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::https::warning() {
  declare text="Servicio no accesible a través de HTTPS (puede necesitar tiempo para iniciar)."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::http::accessible() {
  declare text="Servicio accesible a través de fallback HTTP."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::http::failed() {
  declare text="Servicio no accesible a través de HTTP."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::complete() {
  declare text="¡Configuración de enlaces simbólicos SSL completada exitosamente!"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::remove::title() {
  declare text="Eliminación SSL de WSD"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::remove::header() {
  declare text="Eliminando enlaces simbólicos de certificados SSL para el servicio WSD..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::remove::start() {
  declare text="Iniciando eliminación de enlaces simbólicos SSL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::remove::symlinks::removed() {
  declare text="Directorio de enlaces simbólicos SSL eliminado exitosamente."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::remove::symlinks::not_found() {
  declare text="Directorio de enlaces simbólicos SSL no encontrado."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::remove::override::removed() {
  declare text="Override de systemd eliminado exitosamente."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::remove::complete() {
  declare text="¡Eliminación de enlaces simbólicos SSL completada exitosamente!"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::update::title() {
  declare text="Actualización SSL de WSD"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::update::header() {
  declare text="Actualizando enlaces simbólicos de certificados SSL para el servicio WSD..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::update::start() {
  declare text="Iniciando actualización de enlaces simbólicos SSL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::update::symlinks() {
  declare text="Actualizando enlaces simbólicos a certificados SSL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::ssl::update::complete() {
  declare text="¡Actualización de enlaces simbólicos SSL completada exitosamente!"
  quickbox::dashboard::log "${text}"
}
quickbox::lang::wsd::info::using_default_path() {
  declare text="Usando ruta por defecto para TranscodingTempPath: "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::manual_path_set() {
  declare text="TranscodingTempPath establecido manualmente a: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::timestamp_created() {
  declare text="Archivo de marca de tiempo creado/actualizado: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::emptying_directory() {
  declare text="Vaciando directorio: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::transcode_dir_removed() {
  declare text="Directorio de transcodificación ya eliminado: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::generating_service() {
  declare text="Generando ${1} para modo '${2}'."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::reloading_systemd() {
  declare text="Recargando systemd y habilitando ${1}."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::stopping_service() {
  declare text="Deteniendo ${1}."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::disabling_service() {
  declare text="Deshabilitando ${1}."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::removing_service_file() {
  declare text="Eliminando archivo de servicio: ${1}."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::reloading_systemd_changes() {
  declare text="Recargando systemd para aplicar cambios."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::running_autoclear_standard() {
  declare text="Ejecutando auto-limpieza para transcodificaciones estándar en: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::running_autoclear_livetv() {
  declare text="Ejecutando auto-limpieza para transcodificaciones LiveTV en: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::files_to_delete() {
  declare text="Archivos a eliminar: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::info::sleeping_minutes() {
  declare text="Durmiendo por ${1} minutos."
  quickbox::dashboard::log "${text}"
}

################################################################################
# Mensajes de éxito
################################################################################
quickbox::lang::wsd::success::directory_emptied() {
  declare text="[SUCCESS] Directory emptied successfully."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::success::transcode_files_deleted() {
  declare text="Archivos de transcodificación eliminados exitosamente."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::success::directory_removed() {
  declare text="Directorio eliminado exitosamente: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::success::directory_emptied_removed() {
  declare text="Directorio vaciado y eliminado exitosamente: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::success::no_files_since_timestamp() {
  declare text="No se encontraron archivos preexistentes desde la marca de tiempo para: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::success::service_enabled_started() {
  declare text="${1} habilitado e iniciado exitosamente para modo '${2}'."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::success::service_stopped_disabled_removed() {
  declare text="${1} detenido, deshabilitado y eliminado exitosamente."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::success::standard_transcodes_cleared() {
  declare text="Transcodificaciones estándar limpiadas exitosamente."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::success::livetv_transcodes_cleared() {
  declare text="Transcodificaciones LiveTV limpiadas exitosamente."
  quickbox::dashboard::log "${text}"
}

################################################################################
# Mensajes de ayuda
################################################################################
quickbox::lang::wsd::help::usage() {
  declare text="Uso:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::emby_usage() {
  declare text="  Uso de Emby:
    $0 -u 'nombre_usuario_admin_servicio' -m 'emby'"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::jellyfin_usage() {
  declare text="  Uso de Jellyfin:
    $0 -U 'url_api' -k 'clave_api' -m 'jellyfin'"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::manual_path() {
  declare text="  Configuración manual de ruta:
    $0 -p 'ruta_manual'"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::empty_directory() {
  declare text="  Vaciar directorio:
    $0 -e 'ruta_directorio'"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::verify_directory() {
  declare text="  Verificar directorio:
    $0 -v 'ruta_directorio'"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::delete_transcode() {
  declare text="  Eliminar archivos de transcodificación:
    $0 -d 'id_transcodificacion'"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::check_enable() {
  declare text="  Verificar y habilitar el servicio qbwsd si AutoClearEnabled es true:
    $0 -c -m 'emby|jellyfin'"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::disable_remove() {
  declare text="  Deshabilitar y eliminar el servicio qbwsd si AutoClearEnabled es false:
    $0 -r"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::run_autoclear() {
  declare text="  Ejecutar lógica de auto-limpieza manualmente:
    $0 -a -m 'emby|jellyfin'"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::options() {
  declare text="Opciones:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::option_u() {
  declare text="  -u  Nombre de usuario admin del servicio (para Emby)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::option_U() {
  declare text="  -U  URL de la API de Jellyfin"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::option_k() {
  declare text="  -k  Clave de la API de Jellyfin"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::option_m() {
  declare text="  -m  Modo del servicio (emby o jellyfin)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::option_p() {
  declare text="  -p  Ruta manual para TranscodingTempPath"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::option_e() {
  declare text="  -e  Vaciar el directorio de transcodificación especificado"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::option_v() {
  declare text="  -v  Verificar si el directorio de transcodificación especificado está vacío"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::option_d() {
  declare text="  -d  Eliminar archivos de transcodificación por ID"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::option_c() {
  declare text="  -c  Verificar y habilitar el servicio qbwsd si AutoClearEnabled es true"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::option_r() {
  declare text="  -r  Deshabilitar y eliminar el servicio qbwsd si AutoClearEnabled es false"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::option_a() {
  declare text="  -a  Ejecutar lógica de auto-limpieza manualmente"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::help::option_h() {
  declare text="  -h  Mostrar este mensaje de ayuda"
  quickbox::dashboard::log "${text}"
} 

################################################################################
# Mensajes de estado del servicio (guarded)
################################################################################
if ! declare -F quickbox::lang::system::service::status::current >/dev/null 2>&1; then
quickbox::lang::system::service::status::current() {
  declare text="Estado actual del servicio:"
  quickbox::dashboard::log "${text}"
}
fi

################################################################################
# Mensajes del servicio del servidor de registros
################################################################################
quickbox::lang::software::wsdashboard::service::log_server::started() {
  declare text="Servicio del servidor de registros iniciado correctamente."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::log_server::failed() {
  declare text="Error al iniciar el servicio del servidor de registros."
  quickbox::dashboard::log "${text}"
}

if ! declare -F quickbox::lang::software::wsdashboard::health::service_running >/dev/null 2>&1; then
quickbox::lang::software::wsdashboard::health::service_running() {
  declare text="El servicio está ejecutándose"
  quickbox::dashboard::log "${text}"
}
fi

if ! declare -F quickbox::lang::software::wsdashboard::health::service_not_running >/dev/null 2>&1; then
quickbox::lang::software::wsdashboard::health::service_not_running() {
  declare text="El servicio no está ejecutándose"
  quickbox::dashboard::log "${text}"
}
fi

################################################################################
# Mensajes del Script de Reinicio de Servicios
################################################################################
quickbox::lang::wsd::restart::running_as_root() {
  declare text="Ejecutando como root (EUID: ${1})"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::restart::using_sudo() {
  declare text="Usando sudo para comandos systemctl"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::restart::sudo_not_functional() {
  declare text="sudo disponible pero no funcional (bandera de no nuevos privilegios establecida)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::restart::sudo_fallback_warning() {
  declare text="Intentará ejecutar systemctl directamente - esto puede fallar si hay privilegios insuficientes"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::restart::no_sudo_available() {
  declare text="No hay sudo disponible, intentará ejecutar systemctl directamente"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::restart::processing_service() {
  declare text="Procesando servicio: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::restart::service_active_reload() {
  declare text="Servicio ${1} está activo, intentando recargar/reiniciar"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::restart::reload_failed_restart() {
  declare text="Recarga falló para ${1}, intentando reinicio duro"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::restart::service_inactive_start() {
  declare text="Servicio ${1} está inactivo, intentando iniciar"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::restart::failed_start_service() {
  declare text="Error al iniciar servicio: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::restart::failed_restart_service() {
  declare text="Error al reiniciar servicio: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::restart::start_fallback_methods() {
  declare text="Intentando métodos alternativos para ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::restart::trying_service_command() {
  declare text="Intentando comando 'service' para ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::restart::service_started_success() {
  declare text="Servicio ${1} iniciado usando comando 'service'"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::restart::trying_direct_systemctl() {
  declare text="Intentando systemctl directo para ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::restart::direct_systemctl_success() {
  declare text="Servicio ${1} iniciado usando systemctl directo"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::restart::all_fallback_failed() {
  declare text="Todos los métodos alternativos fallaron para ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::restart::restart_fallback_methods() {
  declare text="Intentando métodos alternativos de reinicio para ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::restart::trying_service_restart() {
  declare text="Intentando reinicio con comando 'service' para ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::restart::service_restarted_success() {
  declare text="Servicio ${1} reiniciado usando comando 'service'"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::restart::trying_direct_restart() {
  declare text="Intentando reinicio directo con systemctl para ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::restart::direct_restart_success() {
  declare text="Servicio ${1} reiniciado usando systemctl directo"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::restart::all_restart_fallback_failed() {
  declare text="Todos los métodos alternativos de reinicio fallaron para ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::restart::service_restart_completed() {
  declare text="Proceso de reinicio de servicios completado exitosamente"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::restart::error::failed_start_service() {
  declare text="Error al iniciar servicio: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::restart::error::failed_restart_service() {
  declare text="Error al reiniciar servicio: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::restart::error::insufficient_permissions() {
  declare text="Privilegios insuficientes para gestionar servicios systemd (código de salida: ${1}). Verificar si se ejecuta como root o tiene acceso sudo adecuado."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::restart::error::required_command_not_found() {
  declare text="Comando requerido '${1}' no encontrado"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::restart::warning::reload_failed_will_restart() {
  declare text="recarga-reinicio falló para ${1} (código de salida: ${2}), intentará reinicio"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::restart::info::using_sudo_commands() {
  declare text="Usando sudo para comandos systemctl"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::restart::info::running_direct_commands() {
  declare text="Ejecutando comandos systemctl directamente (EUID: ${1})"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wsd::restart::failure::prefix() {
  declare text="FALLO: ${1}"
  quickbox::dashboard::log "${text}"
}