#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Nombre del Proyecto: QuickBox Pro
# Nombre del Archivo: cli_database_es
# Descripción del Archivo: Archivo de idioma español - Gestión de Base de Datos
# Versión del Archivo: 1.0.2
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
# Instalación de Base de Datos - MySQL
################################################################################
quickbox::lang::db::install::prompt() {
  declare text="MySQL no está instalado. ¿Te gustaría instalar? [y/N]:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::apt() {
  declare text="Actualizando APT..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql_apt() {
  declare text="Descargando Configuración APT de MySQL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql_apt::fail() {
  declare text="Falló al descargar la Configuración APT de MySQL."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql_apt::install() {
  declare text="Instalando Configuración APT de MySQL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql_apt::install::fail() {
  declare text="Falló al instalar el paquete mysql-apt-config."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql() {
  declare text="Instalando MySQL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::fail() {
  declare text="Falló al instalar MySQL."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::start::fail() {
  declare text="Falló al iniciar MySQL."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::enable::fail() {
  declare text="Falló al habilitar MySQL."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::success() {
  declare text="MySQL ha sido instalado."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::installed() {
  declare text="MySQL ya está instalado, continuando con la configuración."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::config() {
  declare text="Actualizando configuración de MySQL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::config::backup() {
  declare text="El archivo mysqld.cnf actual ha sido respaldado a mysqld.cnf.backup."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::config::write() {
  declare text="[*] Estableciendo configuración de MySQL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::config::write::fail() {
  declare text="[✗] Falló al escribir la configuración de MySQL."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::privileges() {
  declare text="Estableciendo privilegios de MySQL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::privileges::fail() {
  declare text="Falló al escribir privilegios de MySQL."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::client() {
  declare text="Estableciendo configuración de cliente MySQL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::client::fail() {
  declare text="Falló al escribir la configuración de cliente MySQL."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::reload() {
  declare text="Recargando daemon de systemctl..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::reload::fail() {
  declare text="Falló al recargar el daemon de systemctl."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::enable() {
  declare text="Habilitando MySQL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::restart() {
  declare text="Reiniciando MySQL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::restart::fail() {
  declare text="Falló al reiniciar MySQL."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::user() {
  declare text="Creando usuario MySQL ${mysql_user}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::user::fail() {
  declare text="Falló al crear usuario MySQL."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::grant() {
  declare text="Otorgando privilegios al usuario MySQL ${mysql_user}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::grant::fail() {
  declare text="Falló al otorgar privilegios al usuario MySQL."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::flush() {
  declare text="Limpiando privilegios..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::flush::fail() {
  declare text="Falló al limpiar privilegios."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::convert() {
  declare text="Convirtiendo base de datos a MySQL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::convert::success() {
  declare text="La base de datos ha sido convertida a MySQL."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::remove() {
  declare text="¿Te gustaría remover la base de datos SQLite? [y/N]:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::remove::fail() {
  declare text="Falló al deshabilitar SQLite en PHP."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::complete() {
  declare text="MySQL ha sido configurado."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::details() {
  declare text="Detalles de Conexión MySQL:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::connection::details() {
  declare text="Usuario: ${mysql_user}
Contraseña: ${mysql_password}
Puerto: ${mysql_port}
Host: ${mysql_host}
Base de datos: ${mysql_name}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::mycnf() {
  declare text="Estos detalles se pueden encontrar en /root/.my.cnf"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Instalación de Base de Datos - SQLite
################################################################################
quickbox::lang::db::install::sqlite::backup() {
  declare text="Respaldando base de datos SQLite..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::sqlite::backup::success() {
  declare text="La base de datos SQLite ha sido respaldada a ${sqlite_file}.${date}.backup"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::sqlite::convert() {
  declare text="Convirtiendo base de datos a SQLite..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::sqlite::convert::success() {
  declare text="La base de datos ha sido convertida a SQLite."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::sqlite::remove() {
  declare text="¿Te gustaría remover MySQL completamente? [y/N]:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::sqlite::remove::mysql() {
  declare text="¿Te gustaría remover la base de datos MySQL? [y/N]:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::sqlite::php::fail() {
  declare text="Falló al instalar SQLite en PHP."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::sqlite::php::enable::fail() {
  declare text="Falló al habilitar SQLite en PHP."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::sqlite::complete() {
  declare text="El proceso de conversión de base de datos SQLite ha sido completado."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::sqlite::invalid() {
  declare text="Opción inválida: ${option}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::sqlite::mysql::notfound() {
  declare text="Base de datos MySQL no encontrada."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::sqlite::notfound() {
  declare text="Base de datos SQLite no encontrada."
  quickbox::dashboard::log "${text}"
}

################################################################################
# Respaldo de Base de Datos
################################################################################
quickbox::lang::db::backup::sqlite::integrity() {
  declare text="Verificando la integridad de la base de datos SQLite..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::backup::sqlite::integrity::pass() {
  declare text="Verificación de integridad de la base de datos pasó."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::backup::sqlite::complete() {
  declare text="Respaldo completado: ${full_backup_path}/qbpro.db"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::backup::sqlite::integrity::fail() {
  declare text="Verificación de integridad de la base de datos falló. No se creó respaldo."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::backup::sqlite::integrity::repair() {
  declare text="
    [ADVERTENCIA] ¡Reparación de Base de Datos QuickBox!

    La Base de Datos de QuickBox ha fallado en la verificación de integridad y se ha intentado la reparación.

    Comando: REINDEX; VACUUM;

    Puedes encontrar los respaldos más recientes en:
    /opt/quickbox/backup/system/[FECHA]/db/qbpro.db

    Para eliminar este mensaje, ejecuta el siguiente comando:
    rm -f /etc/quickbox_motd
"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::backup::mysql() {
  declare text="Respaldando base de datos MySQL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::backup::mysql::complete() {
  declare text="Respaldo MySQL completado: ${full_backup_path}/qbpro.sql"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::backup::mysql::fail() {
  declare text="Respaldo MySQL falló."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::backup::unsupported() {
  declare text="Tipo de base de datos no soportado: ${db_type}. No se creó respaldo."
  quickbox::dashboard::log "${text}"
}

################################################################################
# Mantenimiento de Base de Datos
################################################################################
quickbox::lang::db::maintenance::sqlite::repair() {
  declare text="Intentando reparar la base de datos SQLite..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::sqlite::repair::complete() {
  declare text="Reparación de base de datos SQLite completada."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::sqlite::repair::fail() {
  declare text="Falló al reparar la base de datos SQLite."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::sqlite::restore::complete() {
  declare text="Restauración de base de datos SQLite completada."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::backup::sqlite::integrity::restore() {
  declare text="
    [ADVERTENCIA] ¡Reparación de Base de Datos QuickBox!

    La Base de Datos de QuickBox ha fallado en la verificación de integridad y se ha intentado la reparación.
    Se ha restaurado un respaldo válido anterior y se han ajustado los permisos.

    Puedes encontrar los respaldos más recientes en:
    /opt/quickbox/backup/system/[FECHA]/db/qbpro.db

    Para eliminar este mensaje, ejecuta el siguiente comando:
    rm -f /etc/quickbox_motd
"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::sqlite() {
  declare text="Realizando mantenimiento en la base de datos SQLite..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::sqlite::backup() {
  declare text="Respaldando la base de datos antes del mantenimiento..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::sqlite::optimize() {
  declare text="Optimizando la base de datos SQLite (VACUUM)..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::sqlite::optimize::complete() {
  declare text="Optimización de base de datos SQLite completada."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::sqlite::optimize::fail() {
  declare text="Falló al optimizar la base de datos SQLite."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::sqlite::integrity::fail() {
  declare text="Verificación de integridad de la base de datos falló. No se realizó mantenimiento."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::mysql() {
  declare text="Realizando mantenimiento en la base de datos MySQL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::mysql::backup() {
  declare text="Respaldando la base de datos MySQL antes del mantenimiento..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::mysql::backup::fail() {
  declare text="Respaldo MySQL falló. Omitiendo mantenimiento."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::mysql::optimize() {
  declare text="Optimizando las tablas de la base de datos MySQL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::mysql::optimize::complete() {
  declare text="Optimización de base de datos MySQL completada."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::mysql::optimize::fail() {
  declare text="Falló al optimizar la base de datos MySQL."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::mysql::integrity() {
  declare text="Verificando la integridad de la base de datos MySQL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::mysql::integrity::pass() {
  declare text="Verificación de integridad de la base de datos MySQL pasó."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::mysql::integrity::fail() {
  declare text="Verificación de integridad de la base de datos MySQL falló."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::unsupported() {
  declare text="Tipo de base de datos no soportado: ${db_type}. No se realizó mantenimiento."
  quickbox::dashboard::log "${text}"
}

################################################################################
# Restauración de Base de Datos
################################################################################
quickbox::lang::db::restore::backup::error() {
  declare text="Directorio de respaldo no encontrado: ${backup_root}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::restore::backup::empty() {
  declare text="No se encontraron respaldos en el directorio de respaldo."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::restore::backup::select() {
  declare text="Selecciona un respaldo para restaurar:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::restore::backup::number() {
  declare text="Ingresa el número del respaldo a restaurar: "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::restore::backup::invalid() {
  declare text="Selección inválida. Por favor intenta de nuevo."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::restore::sqlite::success() {
  declare text="Base de datos SQLite restaurada exitosamente desde ${select_backup}."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::restore::sqlite::fail() {
  declare text="Falló al restaurar la base de datos SQLite."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::restore::mysql::success() {
  declare text="Base de datos MySQL restaurada exitosamente desde ${select_backup}."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::restore::mysql::fail() {
  declare text="Falló al restaurar la base de datos MySQL."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::restore::unsupported() {
  declare text="Tipo de base de datos no soportado: ${db_type}. No se realizó restauración."
  quickbox::dashboard::log "${text}"
} 