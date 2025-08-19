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

quickbox::lang::update::jellyfin::ffmpeg() {
  declare text="actualizando ffmpeg para Jellyfin..."
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
# Mensajes Específicos de WSDashboard
################################################################################
quickbox::lang::software::wsdashboard::neither_installed() {
  declare text="Ni Emby ni Jellyfin está instalado. Proceso omitido."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::api_error() {
  declare text="error: no se pudo obtener zip_url desde la API central.quickbox.io."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::download_error() {
  declare text="error: no se pudo descargar el archivo del plugin WSD."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::unzip_error() {
  declare text="error: no se pudo descomprimir el archivo del plugin WSD."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::missing_directory() {
  declare text="error: directorio requerido ${req_dir} faltante en el archivo del plugin."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::move_backend_error() {
  declare text="¡Error al mover el directorio backend! Abortando actualización."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::move_public_error() {
  declare text="¡Error al mover el directorio public! Abortando actualización."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::move_version_error() {
  declare text="¡Error al mover version.txt! Abortando actualización."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::complete() {
  declare text="Descarga y extracción del plugin WSD completada."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::plugin::fetch::up_to_date() {
  declare text="El plugin WSD está actualizado; descarga no requerida."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::start::success() {
  declare text="Servicio iniciado exitosamente. Ejecutando verificación de salud..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::health::passed() {
  declare text="Verificación de salud exitosa. El servicio funciona de manera óptima."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::health::warnings() {
  declare text="Verificación de salud completada con advertencias. Revisar logs si es necesario."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::start::failed() {
  declare text="El servicio no pudo iniciar. Verificando estado..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::fix::attempting() {
  declare text="Intentando corregir problemas comunes..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::update::success() {
  declare text="Servicio actualizado exitosamente. Ejecutando verificación de salud..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::update::failed() {
  declare text="El servicio no pudo iniciar después de la actualización. Verificando estado..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::maintenance::header() {
  declare text="Ejecutando mantenimiento y monitoreo del servicio WSD..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::maintenance::service_not_found() {
  declare text="Servicio no encontrado. Por favor instale WSD primero."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::maintenance::completed_success() {
  declare text="Mantenimiento del servicio completado exitosamente."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::maintenance::completed_warnings() {
  declare text="Mantenimiento del servicio completado con advertencias."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::maintenance::complete() {
  declare text="Mantenimiento completado. Use 'qbwsd-health-check.sh --verbose' para diagnósticos detallados."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::maintenance::title() {
  declare text="Mantenimiento del Servicio WSD"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::stop::starting() {
  declare text="Deteniendo servicio ${software_service_name}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::stop::force() {
  declare text="Servicio aún activo, detención forzada..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::stop::cleanup() {
  declare text="Limpiando procesos Node.js restantes..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::stop::warning() {
  declare text="Advertencia: El servicio puede seguir ejecutándose, continuando con precaución..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::stop::success() {
  declare text="Servicio detenido exitosamente"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::start::starting() {
  declare text="Iniciando servicio ${software_service_name}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::start::success_attempt() {
  declare text="Servicio iniciado exitosamente en el intento ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::start::retry() {
  declare text="Intento de inicio del servicio ${1} falló, reintentando en 3 segundos..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::start::command_failed() {
  declare text="Comando de inicio del servicio falló, reintentando en 3 segundos..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::chmod::retry() {
  declare text="Intento chmod ${1} falló, reintentando en 2 segundos..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::service::chmod::warning() {
  declare text="Advertencia: Falló al establecer permisos de ejecución después de ${1} intentos"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::node::install::failed() {
  declare text="Error: La instalación o verificación de Node.js falló. Por favor revise los registros e inténtelo de nuevo."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::virtual_env_corrupted() {
  declare text="El entorno virtual parece estar corrupto. Recreando..."
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

quickbox::lang::system::nginx::test() {
  declare text="Probando configuración de nginx..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::nginx::reload() {
  declare text="Recargando servicio nginx..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::daemon::reload() {
  declare text="Recargando daemon systemd..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::service::enable() {
  declare text="Habilitando servicio ${software_service_name}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::service::start() {
  declare text="Iniciando servicio ${software_service_name}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::service::stop() {
  declare text="Deteniendo servicio ${software_service_name}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::service::disable() {
  declare text="Deshabilitando servicio ${software_service_name}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::file::copy() {
  declare text="Copiando ${1} a ${2}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::pip::install() {
  declare text="Instalando paquetes Python..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::npm::install() {
  declare text="Instalando paquetes Node.js..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::system::enhanced::files::removed() {
  declare text="Archivos de servicio mejorados eliminados exitosamente"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Mensajes de Verificación de Salud WSDashboard
################################################################################
quickbox::lang::software::wsdashboard::health::usage() {
  declare text="Uso: qbwsd-health-check.sh [--verbose] [--fix]
  --verbose  Habilitar salida detallada
  --fix      Corregir automáticamente problemas comunes"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::unknown_option() {
  declare text="Opción desconocida: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::root_warning() {
  declare text="Ejecutando como root - algunas verificaciones pueden no funcionar correctamente"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::starting_check() {
  declare text="Iniciando verificación de salud para ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::checking_status() {
  declare text="Verificando estado del servicio..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::service_running() {
  declare text="El servicio está ejecutándose"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::service_not_running() {
  declare text="El servicio no está ejecutándose"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::checking_config() {
  declare text="Verificando configuración del servicio..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::config_file_missing() {
  declare text="Archivo de configuración del servicio no encontrado: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::root_user_warning() {
  declare text="El servicio está configurado para ejecutarse como root (riesgo de seguridad)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::no_restart_policy() {
  declare text="No hay política de reinicio configurada"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::config_valid() {
  declare text="El archivo de configuración del servicio existe y es legible"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::checking_dependencies() {
  declare text="Verificando dependencias..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::file_missing() {
  declare text="Archivo requerido faltante: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::file_found() {
  declare text="Encontrado: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::directory_missing() {
  declare text="Directorio requerido faltante: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::directory_found() {
  declare text="Directorio encontrado: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::dependencies_missing() {
  declare text="Dependencias faltantes: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::dependencies_available() {
  declare text="Todas las dependencias están disponibles"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::checking_resources() {
  declare text="Verificando uso de recursos..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::service_not_running_skip() {
  declare text="Servicio no ejecutándose, omitiendo verificación de recursos"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::pid_not_found() {
  declare text="No se pudo determinar el PID del servicio"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::memory_usage() {
  declare text="Uso de memoria: ${1}MB"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::high_memory_usage() {
  declare text="Alto uso de memoria detectado: ${1}MB"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::cpu_usage() {
  declare text="Uso de CPU: ${1}%"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::high_cpu_usage() {
  declare text="Alto uso de CPU detectado: ${1}%"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::checking_logs() {
  declare text="Verificando logs recientes..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::recent_errors_found() {
  declare text="Se encontraron ${1} mensajes de error en la última hora"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::no_recent_errors() {
  declare text="No se encontraron mensajes de error recientes"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::log_file_size() {
  declare text="Archivo de log ${1}: ${2}MB"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::large_log_file() {
  declare text="Archivo de log grande detectado: ${1} (${2}MB)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::log_file_not_found() {
  declare text="Archivo de log no encontrado: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::checking_database() {
  declare text="Verificando conectividad de la base de datos..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::database_file_missing() {
  declare text="Archivo de base de datos no encontrado: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::database_accessible() {
  declare text="La base de datos es accesible y contiene tablas"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::active_sessions() {
  declare text="Sesiones activas en la última hora: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::database_corrupted() {
  declare text="La base de datos no es accesible o está corrupta"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::sqlite3_not_available() {
  declare text="sqlite3 no disponible, omitiendo verificaciones de base de datos"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::attempting_fixes() {
  declare text="Intentando corregir problemas comunes..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::fixing_permissions() {
  declare text="Corrigiendo permisos del entorno virtual Node.js..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::creating_log_directory() {
  declare text="Creando directorio de logs faltante..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::attempting_restart() {
  declare text="Intentando reiniciar el servicio..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::restart_successful() {
  declare text="Servicio reiniciado exitosamente"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::restart_failed() {
  declare text="Falló el reinicio del servicio"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::check_completed_success() {
  declare text="Verificación de salud completada exitosamente"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::wsdashboard::health::check_completed_issues() {
  declare text="Verificación de salud completada con problemas"
  quickbox::dashboard::log "${text}"
} 