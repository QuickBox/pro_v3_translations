#!/usr/bin/env bash
################################################################################
# Módulo de Mensajes Misceláneos
# Contiene todos los mensajes generales de utilidad, sistema y misceláneos
################################################################################

quickbox::lang::unknown::option() {
  declare text="${2} Opción desconocida: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::username::specified() {
  declare text="error: nombre de usuario no especificado"
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

quickbox::lang::directory::noexist() {
  declare text="el directorio requerido no existe..."
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

quickbox::lang::nvpn::conf::generator::usage() {
  declare text="
Generador de Configuración WireGuard de NordVPN

Uso:
  nvpn_conf_gen -t 'token_privado' [-dns 'dns_preferido'] [-c 'nombre_país'] [-L 'número_de_configuraciones'] [-l] [-h]

Opciones:
  -t   | --token    Token privado de NordVPN
  -dns | --dns      DNS preferido (predeterminado: 103.86.96.100)
  -c   | --country  Nombre del país preferido (usa --list para listar países disponibles)
  -L   | --limit    Limitar el número de configuraciones a crear (predeterminado: 5)
  -l   | --list     Listar países disponibles para conexiones WireGuard
  -h   | --help     Mostrar este mensaje de ayuda

Ejemplo:
  nvpn_conf_gen -t 'tu_token' -c 'Estados Unidos' -L 10

Notas:
  - El token puede ser generado desde:
    https://my.nordaccount.com/dashboard/nordvpn/manual-configuration/
  - Los archivos de configuración se guardarán en '${wg_conf_storage_dir}'
"
  quickbox::dashboard::log "${text}"
}

quickbox::error::non-empty() {
  declare text="Error: $1 requiere un argumento no vacío"
  quickbox::dashboard::log "${text}"
} 