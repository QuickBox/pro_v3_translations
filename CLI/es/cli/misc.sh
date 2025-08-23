#!/usr/bin/env bash
################################################################################
# Módulo de Mensajes Misceláneos
# Contiene todos los mensajes generales de utilidad, sistema y misceláneos
################################################################################

quickbox::lang::unknown::option() {
  declare text="${2} Opción desconocida: ${1}"
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

quickbox::lang::directory::nomove() {
  declare text="no se puede mover a $1..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::package::fail() {
  declare text="no se pudo instalar un paquete requerido $1..."
  quickbox::dashboard::log "${text}"
}

quickbox::error::non-empty() {
  declare text="Error: $1 requiere un argumento no vacío"
  quickbox::dashboard::log "${text}"
}