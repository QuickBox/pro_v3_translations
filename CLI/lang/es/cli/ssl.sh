#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Nombre del Proyecto: QuickBox Pro
# Nombre del Archivo: cli_ssl_es
# Descripción del Archivo: Archivo de idioma español - Operaciones SSL/LetsEncrypt
# Versión del Archivo: 1.0.3
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
# Renovación - Let's Encrypt
################################################################################
quickbox::lang::install::lecert::complete() {
  declare -a domain_array
  if [[ -n "${dash}" ]]; then
    domain_array+=("https://${domain_options[dash]}")
    application_array+=("QuickBox")
  fi
  if [[ -n "${emby}" ]]; then
    domain_array+=("https://${domain_options[emby]}")
    application_array+=("Emby")
  fi
  if [[ -n "${jellyfin}" ]]; then
    domain_array+=("https://${domain_options[jellyfin]}")
    application_array+=("Jellyfin")
  fi
  if [[ -n "${jellyseerr}" ]]; then
    domain_array+=("https://${domain_options[jellyseerr]}")
    application_array+=("Jellyseerr")
  fi
  if [[ -n "${komga}" ]]; then
    domain_array+=("https://${domain_options[komga]}")
    application_array+=("Komga")
  fi
  if [[ -n "${overseerr}" ]]; then
    domain_array+=("https://${domain_options[overseerr]}")
    application_array+=("Overseerr")
  fi
  if [[ -n "${plex}" ]]; then
    domain_array+=("https://${domain_options[plex]}")
    application_array+=("Plex")
  fi
  if [[ -n "${no_dash}" ]]; then
    domain_array+=("${domain}")
    application_array+=("el dominio personalizado ha sido")
  fi
  for ((i = 0; i < ${#domain_array[@]}; i++)); do
    declare text="certificado ssl para ${application_array[i]} instalado.
dominio: ${domain_array[i]}"
  done
  quickbox::dashboard::log "${text}"
}

quickbox::lang::renew::certificates::header() {
  declare text="el proceso de renovación de certificados ssl comenzará ahora"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::renew::complete::header() {
  declare text="renovación de certificados ssl completada"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::renew() {
  # divide domain entries with commas and set final entry to "and"
  for ((i = 0; i < ${#domain[@]}; i++)); do
    if [[ ${i} -eq 0 ]]; then
      declare text="${domain[i]}"
    elif [[ ${i} -eq $((${#domain[@]} - 1)) ]]; then
      declare text="${text} y ${domain[i]}"
    else
      declare text="${text}, ${domain[i]}"
    fi
  done
  declare text="renovando certificado ssl para ${text}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::renew::info() {
  created_array="${certificate_created}"
  expires_array="${certificate_expiry}"
  days_left_array="${certificate_days_left}"
  # create certificate info header for completion message
  declare text_header="
Información del certificado:
"
  # create certificate info for each domain
  declare text="dominio: ${d}
creado: ${created_array[*]}
expira: ${expires_array[*]}
días restantes: ${days_left_array[*]}
"
  # show text_header only once for multiple domains
  if [[ ${d} == "${domain[0]}" ]]; then
    quickbox::dashboard::log "${text_header}
${text}"
  else
    quickbox::dashboard::log "${text}"
  fi
}

quickbox::lang::reinstall::lecert::complete::header() {
  declare text="reinstalación de certificado ssl completada"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::remove::cert::complete::header() {
  declare text="remoción de certificado ssl completada"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Mensajes de Desafío DNS de Lecert
################################################################################
quickbox::lang::lecert::dns::provider::valid() {
  declare text="✅ Usando proveedor DNS: ${dns_provider} (plugin: ${dns_plugin})"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::provider::invalid() {
  declare text="❌ Proveedor DNS no soportado: ${dns_provider}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::provider::supported() {
  declare text="Proveedores soportados: ${!SUPPORTED_DNS_PROVIDERS[*]}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::wildcard::dns::required() {
  declare text="❌ Los dominios wildcard requieren desafío DNS"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::domain::not::set() {
  declare text="Error: El dominio no está configurado."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::credentials::loaded() {
  declare text="✅ Credenciales DNS cargadas desde account.conf"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::challenge::mode() {
  declare text="Usando desafío DNS con proveedor: ${dns_provider}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::http::challenge::mode() {
  declare text="Usando desafío HTTP"
  quickbox::dashboard::log "${text}"
}

# Mensajes de Error de Credenciales de Proveedor DNS
quickbox::lang::lecert::dns::cloudflare::error() {
  declare text="El desafío DNS con Cloudflare requiere variables de entorno CF_Token o CF_Email/CF_Key"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::route53::error() {
  declare text="El desafío DNS con Route53 requiere AWS_ACCESS_KEY_ID y AWS_SECRET_ACCESS_KEY"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::godaddy::error() {
  declare text="El desafío DNS con GoDaddy requiere variables de entorno GD_Key y GD_Secret"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::namecheap::error() {
  declare text="El desafío DNS con Namecheap requiere variables de entorno Namecheap_Username y Namecheap_ApiKey"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::digitalocean::error() {
  declare text="El desafío DNS con DigitalOcean requiere variable de entorno DO_API_KEY"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::linode::error() {
  declare text="El desafío DNS con Linode requiere variable de entorno LINODE_V4_API_KEY"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::ovh::error() {
  declare text="El desafío DNS con OVH requiere variables de entorno OVH_AK, OVH_AS y OVH_CK"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::vultr::error() {
  declare text="El desafío DNS con Vultr requiere variable de entorno VULTR_API_KEY"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::gandi::error() {
  declare text="El desafío DNS con Gandi requiere variable de entorno GANDI_LIVEDNS_KEY"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::dnsimple::error() {
  declare text="El desafío DNS con DNSimple requiere variable de entorno DNSimple_OAUTH_TOKEN"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::hurricane::error() {
  declare text="El desafío DNS con Hurricane Electric requiere variables de entorno HE_Username y HE_Password"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::azure::error() {
  declare text="El desafío DNS con Azure requiere variables de entorno AZUREDNS_SUBSCRIPTIONID, AZUREDNS_TENANTID, AZUREDNS_APPID y AZUREDNS_CLIENTSECRET"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::gcp::error() {
  declare text="El desafío DNS con Google Cloud Platform requiere variables de entorno GCP_PROJECT y GCP_SERVICE_ACCOUNT_JSON_FILE"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::ionos::error() {
  declare text="El desafío DNS con IONOS requiere variables de entorno IONOS_PREFIX y IONOS_SECRET"
  quickbox::dashboard::log "${text}"
}

# Mensajes de Error de Dominio Kill
quickbox::lang::lecert::error::domain::empty() {
  declare text="el dominio no puede estar vacío"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::dns::provider::required() {
  declare text="Se debe especificar un proveedor DNS cuando se usa el desafío DNS. Use --dns-provider <provider>"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::dns::provider::unsupported() {
  declare text="Proveedor DNS no soportado: ${dns_provider}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::wildcard::dns::flag() {
  declare text="El dominio wildcard ${domain} requiere la bandera --dns"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::move::root() {
  declare text="no se puede mover a /root"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::move::acme() {
  declare text="no se puede mover a /root/acme.sh"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::certificate::install() {
  declare text="no se puede instalar el certificado para ${d}"
  quickbox::dashboard::log "${text}"
}

# Mensajes de Error de Credenciales de Proveedor DNS Kill
quickbox::lang::lecert::error::cloudflare::credentials() {
  declare text="Las credenciales DNS de Cloudflare no están configuradas"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::route53::credentials() {
  declare text="Las credenciales DNS de Route53 no están configuradas"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::godaddy::credentials() {
  declare text="Las credenciales DNS de GoDaddy no están configuradas"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::namecheap::credentials() {
  declare text="Las credenciales DNS de Namecheap no están configuradas"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::digitalocean::credentials() {
  declare text="Las credenciales DNS de DigitalOcean no están configuradas"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::linode::credentials() {
  declare text="Las credenciales DNS de Linode no están configuradas"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::ovh::credentials() {
  declare text="Las credenciales DNS de OVH no están configuradas"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::vultr::credentials() {
  declare text="Las credenciales DNS de Vultr no están configuradas"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::gandi::credentials() {
  declare text="Las credenciales DNS de Gandi no están configuradas"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::dnsimple::credentials() {
  declare text="Las credenciales DNS de DNSimple no están configuradas"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::hurricane::credentials() {
  declare text="Las credenciales DNS de Hurricane Electric no están configuradas"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::azure::credentials() {
  declare text="Las credenciales DNS de Azure no están configuradas"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::gcp::credentials() {
  declare text="Las credenciales DNS de GCP no están configuradas"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::ionos::credentials() {
  declare text="Las credenciales DNS de IONOS no están configuradas"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Mensajes de Sudoers y Seguridad de Lecert
################################################################################
quickbox::lang::lecert::error::sudoers::create() {
  declare text="No se puede crear el archivo sudoers para el acceso www-data a account.conf"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::sudoers::created() {
  declare text="Archivo sudoers creado para el acceso seguro www-data a las credenciales DNS"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Mensajes de Información de Lecert
################################################################################
quickbox::lang::lecert::info::certificate::valid::skip() {
  declare text="El certificado aún es válido, saltando renovación"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::info::acme::failed() {
  declare text="ERROR: el comando acme.sh falló. Salida:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::info::certificate::exists() {
  declare text="Los archivos del certificado ya existen para ${d}, verificando validez..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::info::certificate::valid::exists() {
  declare text="El certificado para ${d} aún es válido, saltando instalación"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::info::certificate::expired::reinstall() {
  declare text="El certificado para ${d} está expirado o vencerá pronto, reiniciando..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::info::verification::retry() {
  declare text="La verificación del certificado falló, reintentando... (${retry_count}/${max_retries})"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::info::cleanup::start() {
  declare text="Realizando limpieza después de la generación del certificado..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::info::nginx::valid::reload() {
  declare text="La configuración de Nginx es válida, recargando..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::warning::nginx::test::failed() {
  declare text="ADVERTENCIA: La prueba de configuración de Nginx falló, puede que sea necesario un intervención manual"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::info::cleanup::complete() {
  declare text="Limpieza completada con éxito"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Mensajes Interactivos de Configuración de DNS de Lecert
################################################################################
quickbox::lang::lecert::dns::interactive::header() {
  declare text="=== Configuración de Credenciales de DNS Interactivo ==="
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::header() {
  declare text="Configurando credenciales DNS de Cloudflare..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::options() {
  declare text="Elige tu método de autenticación:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::option1() {
  declare text="1. Token de API (Recomendado)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::option2() {
  declare text="2. Clave Global de API + Email"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::api::header() {
  declare text="=== Método de Token de API ==="
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::api::step1() {
  declare text="1. Ve a la página de Cloudflare Dashboard > Mi Perfil > Tokens de API"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::api::step2() {
  declare text="2. Crea un nuevo token con permisos de Zona:DNS:Edit"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::api::step3() {
  declare text="3. Ingresa tu token de API a continuación:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::api::error() {
  declare text="❌ El token de API no puede estar vacío"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::legacy::header() {
  declare text="=== Método de Clave Global de API ==="
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::legacy::step1() {
  declare text="1. Ve a la página de Cloudflare Dashboard > Mi Perfil > Claves de API"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::legacy::step2() {
  declare text="2. Copia tu Clave Global de API y Email"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::legacy::error() {
  declare text="❌ El email y la Clave Global de API no pueden estar vacíos"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::invalid() {
  declare text="❌ Opción inválida seleccionada"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::route53::header() {
  declare text="Configurando credenciales DNS de AWS Route53..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::route53::intro() {
  declare text="Necesitas una ID de Clave de Acceso y una Clave de Acceso Secreta con permisos de Route53:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::route53::error() {
  declare text="❌ La ID de Clave de Acceso y la Clave de Acceso Secreta no pueden estar vacías"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::digitalocean::header() {
  declare text="Configurando credenciales DNS de DigitalOcean..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::digitalocean::step1() {
  declare text="1. Ve a la página de DigitalOcean Dashboard > API > Tokens/Keys"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::digitalocean::step2() {
  declare text="2. Genera un nuevo token de API con permisos de Escritura"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::digitalocean::error() {
  declare text="❌ El token de API no puede estar vacío"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::not::implemented() {
  declare text="❌ La configuración interactiva no está implementada para este proveedor"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::manual::setup() {
  declare text="Por favor, configura las credenciales manualmente en /root/.acme.sh/account.conf"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::success() {
  declare text="✅ Credenciales DNS guardadas con éxito"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::continue() {
  declare text="Continuando con la instalación del certificado..."
  quickbox::dashboard::log "${text}"
}

################################################################################
# Mensajes de Pregunta de Lecert
################################################################################
quickbox::lang::lecert::prompt::setup::cloudflare() {
  declare text="¿Te gustaría configurar las credenciales de Cloudflare ahora? (s/n): "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::prompt::setup::route53() {
  declare text="¿Te gustaría configurar las credenciales de Route53 ahora? (s/n): "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::prompt::setup::digitalocean() {
  declare text="¿Te gustaría configurar las credenciales de DigitalOcean ahora? (s/n): "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::prompt::cloudflare::method() {
  declare text="Ingresa tu elección (1 o 2): "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::prompt::cloudflare::api_token() {
  declare text="Ingresa tu token de API de Cloudflare: "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::prompt::cloudflare::email() {
  declare text="Ingresa tu email de Cloudflare: "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::prompt::cloudflare::global_key() {
  declare text="Ingresa tu Clave Global de API de Cloudflare: "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::prompt::route53::access_key() {
  declare text="Ingresa tu ID de Clave de Acceso de AWS: "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::prompt::route53::secret_key() {
  declare text="Ingresa tu Clave de Acceso Secreta de AWS: "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::prompt::digitalocean::api_token() {
  declare text="Ingresa tu token de API de DigitalOcean: "
  quickbox::dashboard::log "${text}"
}

################################################################################
# Mensajes de Configuración de Credenciales de DNS de Lecert
################################################################################
quickbox::lang::lecert::dns::setup::cloudflare::header() {
  declare text="=== Configuración de Credenciales de DNS de Cloudflare ==="
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::intro() {
  declare text="Para usar el desafío DNS con Cloudflare, necesitas configurar credenciales API:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option1::header() {
  declare text="Opción 1: Panel de QuickBox (Recomendado)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option1::step1() {
  declare text="1. Ve a tu panel de QuickBox"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option1::step2() {
  declare text="2. Navega a Configuración > Credenciales de DNS"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option1::step3() {
  declare text="3. Selecciona Cloudflare y ingresa tu token de API"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option1::step4() {
  declare text="4. Guarda la configuración"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option2::header() {
  declare text="Opción 2: Configuración Manual"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option2::step1() {
  declare text="1. Ve a https://dash.cloudflare.com/profile/api-tokens"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option2::step2() {
  declare text="2. Crea un nuevo token de API con los siguientes permisos:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option2::step2a() {
  declare text="   - Zona:Zona:Leer"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option2::step2b() {
  declare text="   - Zona:DNS:Editar"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option2::step3() {
  declare text="3. Establece los recursos de la zona a 'Incluir: Todas las zonas'"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option2::step4() {
  declare text="4. Copia el token generado"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option2::step5() {
  declare text="5. Ejecuta: qb dns-credentials cloudflare <token>"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option3::header() {
  declare text="Opción 3: Clave de API Antigua (si tienes una cuenta más antigua)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option3::step1() {
  declare text="1. Ve a https://dash.cloudflare.com/profile/api-keys"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option3::step2() {
  declare text="2. Copia tu Clave Global de API"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option3::step3() {
  declare text="3. Nota tu dirección de correo electrónico de cuenta"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option3::step4() {
  declare text="4. Ejecuta: qb dns-credentials cloudflare-legacy <email> <api_key>"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::route53::header() {
  declare text="=== Configuración de Credenciales de DNS de AWS Route53 ==="
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::route53::intro() {
  declare text="Para usar el desafío DNS con Route53, necesitas credenciales AWS:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::route53::step1() {
  declare text="1. Crea un usuario IAM con la siguiente política:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::route53::step1a() {
  declare text="   - Route53FullAccess"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::route53::step2() {
  declare text="2. Genera la ID de Clave de Acceso y la Clave de Acceso Secreta"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::route53::step3() {
  declare text="3. Ejecuta: qb dns-credentials route53 <access_key_id> <secret_access_key>"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::digitalocean::header() {
  declare text="=== Configuración de Credenciales de DNS de DigitalOcean ==="
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::digitalocean::intro() {
  declare text="Para usar el desafío DNS con DigitalOcean, necesitas un token de API:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::digitalocean::step1() {
  declare text="1. Ve a https://cloud.digitalocean.com/account/api/tokens"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::digitalocean::step2() {
  declare text="2. Genera un nuevo token de API con 'Escritura' acceso"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::digitalocean::step3() {
  declare text="3. Copia el token generado"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::digitalocean::step4() {
  declare text="4. Ejecuta: qb dns-credentials digitalocean <token>"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::generic::header() {
  declare text="=== Configuración de Credenciales de DNS ==="
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::generic::intro() {
  declare text="Para usar el desafío DNS con ${provider}, necesitas configurar credenciales."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::generic::referral() {
  declare text="Por favor, consulta la documentación de acme.sh para la configuración de ${provider}:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::generic::url() {
  declare text="https://github.com/acmesh-official/acme.sh/wiki/dnsapi#dns_${provider}"
  quickbox::dashboard::log "${text}"
}