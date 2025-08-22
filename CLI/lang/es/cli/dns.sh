#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Nombre del Proyecto: QuickBox Pro
# Nombre del Archivo: cli_dns_es
# Descripción del Archivo: Archivo de idioma español - Gestión de Credenciales DNS
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
# Mensajes de Estado de Credenciales DNS
################################################################################
quickbox::lang::dns::credentials::status::header() {
  declare text="=== Estado de Credenciales DNS ==="
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::no_credentials() {
  declare text="No se encontraron credenciales DNS - account.conf no existe"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::setup_help() {
  declare text="Usa 'qb dns-setup <proveedor>' para configurar credenciales para un proveedor específico"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::configured_providers() {
  declare text="Proveedores DNS configurados:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::total_credentials() {
  declare text="Total de credenciales encontradas: ${total_credentials}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::check_help() {
  declare text="Para verificar credenciales de proveedor específico:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::check_command() {
  declare text="  qb dns-credentials check <proveedor>"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::setup_help_header() {
  declare text="Para configurar proveedores adicionales:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::setup_command() {
  declare text="  qb dns-setup <proveedor>"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::no_providers() {
  declare text="No se encontraron credenciales DNS en account.conf"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::setup_instructions() {
  declare text="Para configurar credenciales DNS:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::available_providers() {
  declare text="Proveedores disponibles:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::status::provider_list() {
  declare text="  cloudflare, route53, digitalocean, namecheap, godaddy, linode, ovh, vultr, gandi, dnsimple, hurricane, azure, gcp, ionos"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Mensajes de Error de Credenciales DNS
################################################################################
quickbox::lang::dns::credentials::error::no_provider() {
  declare text="ERROR: No se especificó proveedor DNS"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::error::unknown_command() {
  declare text="ERROR: Comando dns-credentials desconocido: ${task}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::error::invalid_provider() {
  declare text="ERROR: Proveedor DNS inválido: ${provider}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::error::temp_file_not_found() {
  declare text="ERROR: Archivo de credenciales temporal no encontrado o no legible: ${temp_file}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::error::no_credentials_in_file() {
  declare text="ERROR: No se encontraron credenciales en el archivo temporal"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::error::write_failed() {
  declare text="ERROR: Falló al escribir credenciales en account.conf"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::error::account_conf_not_found() {
  declare text="ERROR: Archivo de configuración de cuenta no encontrado: ${account_conf}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::error::no_credentials_for_provider() {
  declare text="ERROR: No se encontraron credenciales para el proveedor: ${provider}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::error::setup_invalid_provider() {
  declare text="ERROR: Proveedor DNS inválido: ${provider}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::error::setup_show_available() {
  declare text="Ejecuta 'qb dns-setup' para ver proveedores disponibles."
  quickbox::dashboard::log "${text}"
}

################################################################################
# Mensajes de Éxito de Credenciales DNS
################################################################################
quickbox::lang::dns::credentials::success::written() {
  declare text="ÉXITO: Credenciales DNS para ${provider} escritas en account.conf"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::success::test_valid() {
  declare text="ÉXITO: Configuración del proveedor DNS ${provider} encontrada y parece válida"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::success::test_note() {
  declare text="Nota: Esto solo valida que las credenciales existen. La validación completa de DNS requiere un dominio de prueba."
  quickbox::dashboard::log "${text}"
}

################################################################################
# Mensajes de Uso de Credenciales DNS
################################################################################
quickbox::lang::dns::credentials::usage::check() {
  declare text="Uso: qb dns-credentials check <proveedor>"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::usage::general() {
  declare text="Uso: qb dns-credentials <comando> [proveedor]"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::usage::available_commands() {
  declare text="Comandos disponibles: check, status"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::usage::setup() {
  declare text="Uso: qb dns-setup <proveedor>"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Mensajes de Configuración de Credenciales DNS
################################################################################
quickbox::lang::dns::credentials::setup::header() {
  declare text="=== Configuración de Credenciales DNS ==="
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::available_providers() {
  declare text="Proveedores DNS disponibles:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::provider_cloudflare() {
  declare text="  cloudflare (cf)     - DNS de Cloudflare"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::provider_route53() {
  declare text="  route53             - AWS Route53"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::provider_digitalocean() {
  declare text="  digitalocean (do)   - DNS de DigitalOcean"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::provider_godaddy() {
  declare text="  godaddy             - DNS de GoDaddy"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::provider_namecheap() {
  declare text="  namecheap           - DNS de Namecheap"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::provider_linode() {
  declare text="  linode              - DNS de Linode"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::provider_ovh() {
  declare text="  ovh                 - DNS de OVH"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::provider_vultr() {
  declare text="  vultr               - DNS de Vultr"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::provider_gandi() {
  declare text="  gandi               - Gandi LiveDNS"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::provider_dnsimple() {
  declare text="  dnsimple            - DNSimple"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::provider_hurricane() {
  declare text="  hurricane (he)      - Hurricane Electric"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::provider_azure() {
  declare text="  azure               - DNS de Azure"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::provider_gcp() {
  declare text="  gcp                 - DNS de Google Cloud"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::provider_ionos() {
  declare text="  ionos               - DNS de IONOS"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::example() {
  declare text="Ejemplo: qb dns-setup cloudflare"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::fallback_header() {
  declare text="=== Configuración de Credenciales DNS para ${provider} ==="
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::fallback_referral() {
  declare text="Por favor consulta la documentación de acme.sh para la configuración de ${provider}:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::fallback_url() {
  declare text="https://github.com/acmesh-official/acme.sh/wiki/dnsapi#dns_${provider}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::fallback_test() {
  declare text="Después de configurar las credenciales, puedes probarlas con:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::dns::credentials::setup::fallback_test_command() {
  declare text="qb dns-test ${provider}"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Mensajes de Respaldo de Credenciales DNS
################################################################################
quickbox::lang::dns::credentials::backup::restored() {
  declare text="Configuración de respaldo restaurada"
  quickbox::dashboard::log "${text}"
}