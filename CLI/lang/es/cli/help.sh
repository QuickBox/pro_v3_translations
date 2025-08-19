#!/usr/bin/env bash
################################################################################
# Módulo de Mensajes de Ayuda
# Contiene todas las funciones de generación de texto de ayuda y mensajes de ayuda específicos del software
################################################################################

# Función para generar texto de ayuda basado en las opciones proporcionadas
generate_help_text() {
  local software_title="$1"
  local software_name="$2"
  local has_update="$3"
  local options="$4"
  local examples="$5"
  local notes="$6"

  local processes="  install    Instalar ${software_title}
  reinstall  Reinstalar ${software_title}
  remove     Remover ${software_title}"

  if [[ ${has_update} == 1 ]]; then
    processes="${processes}
  update     Actualizar ${software_title}"
  fi

  processes="${processes}
  help       Mostrar este mensaje de ayuda"

  declare text="
Gestión de Software de QuickBox para ${software_title}

Uso:
  qb [proceso] ${software_name} [opciones]

Procesos:
${processes}

Opciones:
${options}

Ejemplos:
${examples}
${notes}
"
  quickbox::dashboard::log "${text}"
}

# Función para obtener texto de ayuda para software específico
quickbox::software::help() {
  local software_help_name="$1"
  local software_title="${software_help_name^}" # Capitalizar la primera letra
  local has_update

  case "${software_help_name}" in
  emby | jellyfin)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username  Establecer el nombre de usuario para ${software_title} (requerido)
  -d | --domain    Establecer el dominio para ${software_title}
  --beta           Instalar la versión beta de ${software_title}" \
      "  qb install ${software_help_name} -u username -d '${software_help_name}.domain.com'
  qb reinstall ${software_help_name} -u username -d '${software_help_name}.domain.com'
  qb install ${software_help_name} -u username --beta
  qb reinstall ${software_help_name} -u username --beta
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username

  ## Usar múltiples opciones
  qb install ${software_help_name} -u username -d '${software_help_name}.domain.com' --beta
  qb reinstall ${software_help_name} -u username -d '${software_help_name}.domain.com' --beta" \
      "
Notas:
  - Al instalar o reinstalar con la opción de dominio, el proxy inverso de Nginx se configurará automáticamente.
      * Asegúrate de que el dominio apunte a la dirección IP del servidor y que los registros DNS apropiados estén configurados."
    ;;

  mylar3)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u   | --username             Establecer el nombre de usuario para ${software_title} (requerido)
  -clp | --comic-location-path  Establecer la ruta de ubicación para cómics (predeterminado: /home/username/Media/Comics)" \
      "  qb install ${software_help_name} -u username -clp '/path/to/comics'
  qb reinstall ${software_help_name} -u username -clp '/path/to/comics'
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username" \
      ""
    ;;

  radarr | sonarr)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username  Establecer el nombre de usuario para ${software_title} (requerido)
  --4k             Establecer la instalación de compilación para 4k (predeterminado: 1080p)
  --nightly        Establecer la instalación de compilación en la rama nightly (predeterminado: latest)" \
      "  qb install ${software_help_name} -u username              # Instalar instalación estándar (1080p)
  qb install ${software_help_name} -u username --4k         # Instalar instalación 4k
  qb reinstall ${software_help_name} -u username --nightly  # Reinstalar instalación nightly
  qb reinstall ${software_help_name} -u username --4k       # Reinstalar instalación 4k
  qb remove ${software_help_name} -u username               # Remover instalación estándar (1080p)
  qb remove ${software_help_name} -u username --4k          # Remover instalación 4k
  qb update ${software_help_name} -u username               # Actualizar instalación estándar (1080p)
  qb update ${software_help_name} -u username --4k          # Actualizar instalación 4k

  ## Usar múltiples opciones
  qb install ${software_help_name} -u username --4k --nightly    # Instalar instalación 4k en la rama nightly
  qb reinstall ${software_help_name} -u username --4k --nightly  # Reinstalar instalación 4k en la rama nightly
  qb update ${software_help_name} -u username --4k --nightly     # Actualizar instalación 4k en o a nightly" \
      ""
    ;;

  calibre | kavita)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u  | --username      Establecer el nombre de usuario para ${software_title} (requerido)
  -lp | --library-path  Establecer la ruta de ubicación para tu biblioteca (predeterminado: /home/username/.config/${software_title}/library)" \
      "  qb install ${software_help_name} -u username -lp '/path/to/library'
  qb reinstall ${software_help_name} -u username -lp '/path/to/library'
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username" \
      ""
    ;;

  plex)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u   | --username          Establecer el nombre de usuario para ${software_title} (requerido)
  -pct | --plex-claim-token  Establecer el Token de Reclamación de Plex para ${software_title} (requerido para reclamación rápida)
  -d   | --domain            Establecer el dominio para ${software_title}
  -D   | --data-dir          Establecer el directorio de datos para ${software_title} (predeterminado: /home/username/.config/'Plex Media Server')" \
      "  qb install ${software_help_name} -u username -pct 'claim_token' -d 'plex.domain.com' -D '/path/to/data'
  qb reinstall ${software_help_name} -u username -pct 'claim_token' -d 'plex.domain.com' -D '/path/to/data'
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username" \
      "
Notas:
  - El Token de Reclamación de Plex se puede obtener desde:
      https://www.plex.tv/claim/

  - Evita establecer el directorio de datos en un directorio existente como:
      /opt, /opt/username, /mnt, /home, /home/username, y así sucesivamente.

  - Es seguro crear un nuevo directorio de datos dentro de directorios existentes como:
      /opt/plex, /opt/username/plex, /mnt/plex, /data/plex, y así sucesivamente.

  - El directorio de datos se creará si no existe.

  - El directorio de datos será propiedad del usuario y grupo del nombre de usuario.

  - Al instalar o reinstalar con la opción de dominio, el proxy inverso de Nginx se configurará automáticamente.
      * Asegúrate de que el dominio apunte a la dirección IP del servidor y que los registros DNS apropiados estén configurados.

  - Al actualizar, se te pedirá que ingreses tu email de plex.tv, contraseña, así como el código 2FA."
    ;;

  bazarr)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username  Establecer el nombre de usuario para ${software_title} (requerido)
  --4k             Establecer la instalación de compilación para 4k (predeterminado: 1080p)" \
      "  qb install ${software_help_name} -u username                 # Instalar instalación estándar (1080p)
  qb install ${software_help_name} -u username --4k            # Instalar instalación 4k
  qb reinstall ${software_help_name} -u username               # Reinstalar instalación estándar (1080p)
  qb reinstall ${software_help_name} -u username --4k          # Reinstalar instalación 4k
  qb remove ${software_help_name} -u username                  # Remover instalación estándar (1080p)
  qb remove ${software_help_name} -u username --4k             # Remover instalación 4k
  qb update ${software_help_name} -u username                  # Actualizar instalación estándar (1080p)
  qb update ${software_help_name} -u username --4k             # Actualizar instalación 4k" \
      ""
    ;;

  autodl | x2go)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "" \
      "  qb install ${software_help_name}
  qb reinstall ${software_help_name}
  qb remove ${software_help_name}
  qb update ${software_help_name}" \
      ""
    ;;

  fail2ban)
    has_update=0
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "" \
      "  qb install ${software_help_name}
  qb reinstall ${software_help_name}
  qb remove ${software_help_name}" \
      ""
    ;;

  filebot)
    has_update=0
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u  | --username    Establecer el nombre de usuario para ${software_title} (requerido)
  -mp | --media-path  Establecer la ruta de medios para ${software_title} (predeterminado: /home/username/Media)
  -o 'deluge'         Instalar ${software_title} con integración de Deluge
  -o 'nzbget'         Instalar ${software_title} con integración de NZBGet
  -o 'rtorrent'       Instalar ${software_title} con integración de rTorrent
  -o 'sabnzbd'        Instalar ${software_title} con integración de SABnzbd" \
      "  qb install ${software_help_name} -u username
  qb reinstall ${software_help_name} -u username
  qb remove ${software_help_name} -u username

  ## Usar múltiples opciones
  qb install ${software_help_name} -u username -o 'deluge' -o 'nzbget'
  qb reinstall ${software_help_name} -u username -o 'rtorrent' -o 'sabnzbd'" \
      ""
    ;;

  jdownloader)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u  | --username       Establecer el nombre de usuario para ${software_title} (requerido)
  -e  | --email          Establecer el email para ${software_title} (requerido) .i.
  -p  | --password       Establecer la contraseña para ${software_title} (requerida) .ii.
  -D  | --downloads-dir  Establecer la ruta de descargas para ${software_title} (predeterminado: /home/username/Downloads)" \
      "  qb install ${software_help_name} -u username -e 'email' -p 'password' -D '/path/to/downloads'
  qb reinstall ${software_help_name} -u username -e 'email' -p 'password' -D '/path/to/downloads'
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username" \
      "
Notas:
  - .i. El email y la contraseña son requeridos para la instalación de JDownloader.
      * .ii. Estas son las credenciales para tu cuenta MyJDownloader."
    ;;

  jellyseerr | komga | overseerr)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u  | --username  Establecer el nombre de usuario para ${software_title} (requerido)
  -d  | --domain    Establecer el dominio para ${software_title}" \
      "  qb install ${software_help_name} -u username -d '${software_help_name}.domain.com'
  qb reinstall ${software_help_name} -u username -d '${software_help_name}.domain.com'
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username" \
      "
Notas:
  - Al instalar o reinstalar con la opción de dominio [-d], el proxy inverso de Nginx se configurará automáticamente.
      * Asegúrate de que el dominio apunte a la dirección IP del servidor y que los registros DNS apropiados estén configurados."
    ;;

  lecert)
    has_update=0
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  --dash          Instalar un certificado para el dominio especificado con '-d' y crear un proxy inverso para el panel de QuickBox
  --no-dash       Instalar un certificado para un dominio personalizado especificado con '-d' (certificado solo, sin proxy inverso)
  --emby          Instalar un certificado para el dominio especificado con '-d' y crear un proxy inverso para Emby
  --jellyfin      Instalar un certificado para el dominio especificado con '-d' y crear un proxy inverso para Jellyfin
  --jellyseerr    Instalar un certificado para el dominio especificado con '-d' y crear un proxy inverso para Jellyseerr
  --komga         Instalar un certificado para el dominio especificado con '-d' y crear un proxy inverso para Komga
  --overseerr     Instalar un certificado para el dominio especificado con '-d' y crear un proxy inverso para Overseerr
  --plex          Instalar un certificado para el dominio especificado con '-d' y crear un proxy inverso para Plex

  Métodos de Desafío:
  --dns           Usar desafío DNS en lugar de desafío HTTP (habilita certificados de asterisco)
  --dns-provider  Proveedor de DNS para validación de desafío DNS
                  Proveedores soportados: cloudflare (cf), route53, godaddy, namecheap, digitalocean (do),
                  linode, ovh, vultr, gandi, dnsimple, hurricane (he), azure, gcp, ionos

  Opciones de Dominio:
  -d  | --domain  Establecer el dominio para ${software_title} (admite wildcards con desafío DNS)" \
      "  # Ejemplos de desafío HTTP estándar
  qb install ${software_help_name} --dash -d 'example.com'
  qb install ${software_help_name} --jellyfin -d 'jellyfin.example.com' --plex -d 'plex.example.com'

  # Ejemplos de desafío DNS (para certificados de asterisco)
  qb install ${software_help_name} --dash -d '*.example.com' --dns --dns-provider cloudflare
  qb install ${software_help_name} --jellyseerr -d '*.movies.example.com' --dns --dns-provider route53
  qb install ${software_help_name} --plex -d '*.media.example.com' --dns --dns-provider vultr
  qb install ${software_help_name} --komga -d '*.books.example.com' --dns --dns-provider gandi

  # Dominios múltiples en un solo comando
  qb install ${software_help_name} --dash -d 'example.com' --overseerr -d 'requests.example.com'

  # Gestión de certificados
  qb reinstall ${software_help_name} --plex -d 'plex.example.com' --dns --dns-provider godaddy
  qb remove ${software_help_name} --emby -d 'emby.example.com'
  qb renew ${software_help_name} -d 'domain1.com' -d 'domain2.com'" \
      "
Configuración de Desafío DNS:
  Configura las credenciales de tu proveedor de DNS usando uno de estos métodos:

  Método 1 - Panel de QuickBox (Recomendado):
    Navega al Control de SSL en el panel web de QuickBox
    Selecciona Desafío DNS, elige tu proveedor, y ingresa las credenciales
    El panel de control almacenará de forma segura las credenciales para su uso futuro

  Método 2 - Configuración CLI:
    qb dns-credentials setup cloudflare
    Sigue las instrucciones interactivas para configurar tus credenciales

  Método 3 - Variables de entorno (uso único):
    export CF_Token='tu_token_de_api_cloudflare' && qb install lecert --dash -d '*.example.com' --dns --dns-provider cloudflare

  Credenciales específicas del proveedor:

  Cloudflare (Recomendado):
    export CF_Token='tu_token_de_api_cloudflare'
    # O (método antiguo)
    export CF_Email='tu@email.com'
    export CF_Key='tu_api_global_key'

  AWS Route53:
    export AWS_ACCESS_KEY_ID='tu_key_de_acceso'
    export AWS_SECRET_ACCESS_KEY='tu_secreto_de_acceso'

  GoDaddy:
    export GD_Key='tu_api_key'
    export GD_Secret='tu_api_secreto'

  NameCheap:
    export Namecheap_Username='tu_nombre_de_usuario'
    export Namecheap_ApiKey='tu_api_key'

  DigitalOcean:
    export DO_API_KEY='tu_api_token'

  Linode:
    export LINODE_V4_API_KEY='tu_api_key'

  OVH:
    export OVH_AK='tu_clave_de_aplicación'
    export OVH_AS='tu_secreto_de_aplicación'
    export OVH_CK='tu_consumidor_key'

  Vultr:
    export VULTR_API_KEY='tu_api_key'

  Gandi:
    export GANDI_LIVEDNS_KEY='tu_api_key'

  DNSimple:
    export DNSimple_OAUTH_TOKEN='tu_oauth_token'

  Hurricane Electric (he):
    export HE_Username='tu_nombre_de_usuario'
    export HE_Password='tu_contraseña'

  Microsoft Azure:
    export AZUREDNS_SUBSCRIPTIONID='tu_id_de_suscripción'
    export AZUREDNS_TENANTID='tu_id_de_inquilino'
    export AZUREDNS_APPID='tu_id_de_aplicación'
    export AZUREDNS_CLIENTSECRET='tu_secreto_de_cliente'

  Google Cloud Platform:
    export GCP_PROJECT='tu_id_de_proyecto'
    export GCP_SERVICE_ACCOUNT_JSON_FILE='/ruta/a/service-account.json'

  IONOS:
    export IONOS_PREFIX='tu_prefijo'
    export IONOS_SECRET='tu_secreto'

Características:
  • Desafío HTTP: Método por defecto, requiere puertos 80/443 accesibles
  • Desafío DNS: Para certificados de asterisco (*.domain.com) y redes restringidas
  • Configuración de proxy inverso de Nginx automática para aplicaciones soportadas
  • Instalación de certificados multi-dominio en un solo comando
  • Renovación de certificados con 'qb renew lecert'
  • Almacenamiento y gestión de credenciales seguras

Requisitos:
  • El dominio debe apuntar a la dirección IP del servidor con registros DNS apropiados
  • Para desafío DNS: Las credenciales de proveedor de DNS válidas deben configurarse
  • Para certificados de asterisco: El desafío DNS es obligatorio
  • Asegúrate de que el firewall permita el tráfico HTTP (80) y HTTPS (443) para el desafío HTTP

Solución de problemas:
  • Comprueba la propagación de DNS: 'dig domain.com' o 'nslookup domain.com'
  • Verifica las credenciales: Usa 'qb dns-credentials check [provider]' para verificar las credenciales almacenadas
  • Comprueba el estado del certificado: Usa 'qb dns-credentials status' para ver los certificados instalados
  • Límites de tasa: Let's Encrypt tiene límites de tasa - evita demasiadas solicitudes por hora
  • Validación de dominio: Asegúrate de que el dominio esté configurado correctamente en tu proveedor de DNS"
    ;;

  lidarr | readarr)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username  Establecer el nombre de usuario para ${software_title} (requerido)
  --nightly        Establecer la instalación de compilación en la rama nightly (predeterminado: latest)" \
      "  qb install ${software_help_name} -u username                 # Instalar instalación por defecto (última)
  qb install ${software_help_name} -u username --nightly       # Instalar instalación nightly
  qb reinstall ${software_help_name} -u username               # Reinstalar instalación por defecto (última)
  qb reinstall ${software_help_name} -u username --nightly     # Reinstalar instalación nightly
  qb remove ${software_help_name} -u username                  # Remover instalación actual
  qb update ${software_help_name} -u username                  # Actualizar instalación por defecto (última)
  qb update ${software_help_name} -u username --nightly        # Actualizar a/desde instalación nightly" \
      ""
    ;;

  ombi)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username          Establecer el nombre de usuario para ${software_title} (requerido)
  --ombi2mysql             Migrar datos de Ombi a MySQL
  --phmyadmin              Instalar phpMyAdmin para la migración de Ombi
  --mysql-user=<username>  Establecer el nombre de usuario de MySQL para la migración de Ombi (predeterminado: nombre de usuario especificado con -u)
  --mysql-pass=<password>  Establecer la contraseña de MySQL para la migración de Ombi (predeterminado: contraseña aleatoria)
  --mysql-host=<host>      Establecer el host de MySQL para la migración de Ombi (predeterminado: localhost)
  --mysql-port=<port>      Establecer el puerto de MySQL para la migración de Ombi (predeterminado: 3306)
  --mysql-db=<database>    Establecer la base de datos de MySQL para la migración de Ombi (predeterminado: Ombi)" \
      "  qb install ${software_help_name} -u username
  qb reinstall ${software_help_name} -u username
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username --ombi2mysql --phpmyadmin" \
      "
Notas:
  - La opción --ombi2mysql migrará los datos de Ombi a MySQL.
    * Esto requiere el nombre de usuario, contraseña, host, puerto y base de datos para ser especificados.
    * Si no se especifican, se utilizarán los valores por defecto:
      - Usuario MySQL: Nombre (desde la opción -u)
      - Contraseña MySQL: Contraseña aleatoria
      - Host MySQL: localhost
      - Puerto MySQL: 3306
      - Base de datos MySQL: Ombi

  - La opción --phpmyadmin instalará phpMyAdmin para la migración de Ombi.
    * Esto te permitirá administrar la base de datos MySQL para Ombi a través de la interfaz web /phpMyAdmin.
  - Las opciones --mysql-user, --mysql-pass, --mysql-host, --mysql-port, y --mysql-db son opcionales.
    * Si se especifican, sobrescribirán los valores por defecto.

  - Ombi está instalado con soporte para SQLite por defecto.
  - El soporte para MySQL solo está disponible cuando se usa la opción --ombi2mysql en el proceso de actualización."
    ;;

  phpmyadmin)
    has_update=0
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username  Establecer el nombre de usuario para ${software_title} (requerido)
  --pma-user       Establecer el nombre de usuario de phpMyAdmin (predeterminado: nombre de usuario especificado con -u)
  --pma-pass       Establecer la contraseña de phpMyAdmin (predeterminado: contraseña aleatoria)
  --pma-host       Establecer el host de phpMyAdmin (predeterminado: localhost)" \
      "  qb install ${software_help_name} -u username --pma-user 'pma_user' --pma-pass 'pma_pass' --pma-host 'localhost'
  qb reinstall ${software_help_name} -u username --pma-user 'pma_user' --pma-pass 'pma_pass' --pma-host 'localhost'
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username" \
      "
Notas:
  - El nombre de usuario y la contraseña de phpMyAdmin son opcionales.
    * Si no se especifican, se utilizarán los valores por defecto:
      - Usuario phpMyAdmin: Nombre (desde la opción -u)
      - Contraseña phpMyAdmin: Contraseña aleatoria
      - Host phpMyAdmin: localhost"
    ;;

  quota)
    has_update=0
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -qm | --quota-mount  Establecer el punto de montaje del sistema para ${software_title} (requerido)" \
      "  qb install ${software_help_name} -qm '/path/to/mount/point'
  qb reinstall ${software_help_name} -qm '/path/to/mount/point'
  qb remove ${software_help_name}" \
      ""
    ;;

  rclone)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username  Establecer el nombre de usuario para ${software_title} (requerido)
  --dropbox        Instalar ${software_title} con integración de Dropbox
  --gdrive         Instalar ${software_title} con integración de Google Drive
  --encrypted      Instalar ${software_title} con cifrado
  --beta           Instalar la versión beta de ${software_title}" \
      "  qb install ${software_help_name} -u username --dropbox
  qb install ${software_help_name} -u username --beta --gdrive
  qb reinstall ${software_help_name} -u username --dropbox --encrypted
  qb reinstall ${software_help_name} -u username --gdrive
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username" \
      "
Notas:
  - Se recomienda usar la opción --dropbox o --gdrive en una sola instalación.
     * Esto evitará conflictos con la configuración de rclone.

  - Al instalar con la opción --dropbox o --gdrive, la configuración de rclone se creará automáticamente.

  - Al instalar con la opción --encrypted, la configuración de rclone se cifrará usando la información especificada.

  - Al instalar con la opción --beta, se instalará la versión beta de rclone."
    ;;

  requestrr | vpn)
    has_update=0
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username  Establecer el nombre de usuario para ${software_title} (requerido)" \
      "  qb install ${software_help_name} -u username
  qb reinstall ${software_help_name} -u username
  qb remove ${software_help_name} -u username" \
      ""
    ;;

  rtorrent)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username    Establecer el nombre de usuario para ${software_title} (requerido)
  -o '0.15.1'        Instalar versión 0.15.1
  -o '0.10.0'        Instalar versión 0.10.0
  -o '0.9.8'         Instalar versión 0.9.8
  -o '0.9.7'         Instalar versión 0.9.7
  -o '0.9.6'         Instalar versión 0.9.6
  -o 'feature-bind'  Instalar la versión feature-bind de ${software_title}" \
      "  qb install ${software_help_name} -u username -o '0.15.1'
  qb install ${software_help_name} -u username -o '0.10.0'
  qb install ${software_help_name} -u username -o '0.9.8'
  qb install ${software_help_name} -u username -o '0.9.7'
  qb reinstall ${software_help_name} -u username -o '0.9.6'
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username -o '0.15.1'
  qb update ${software_help_name} -u username -o 'feature-bind'" \
      "
Notas:
  - rTorrent es una aplicación globalmente instalada y estará disponible para todos los usuarios del servidor.

  - La versión feature-bind de rTorrent es una compilación personalizada que incluye la función de enlace.
     * La función de enlace te permite enlazar rTorrent a una dirección IP específica."
    ;;

  rutorrent)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username    Establecer el nombre de usuario para ${software_title} (requerido)
  --beta             Instalar la versión beta de ${software_title}" \
      "  qb install ${software_help_name} -u username
  qb reinstall ${software_help_name} -u username
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username --beta" \
      "
Notas:
  - ruTorrent es una aplicación globalmente instalada y estará disponible para todos los usuarios del servidor.

  - ruTorrent es parte del proceso de instalación de rTorrent, y cuando se instala rTorrent
    ruTorrent se instalará con la versión más reciente por defecto. Si rTorrent no está instalado,
    entonces ruTorrent instalará la versión 0.9.8.

  - rutorrent se instalará con la versión más reciente por defecto. Si deseas instalar la versión beta,
	usa la opción --beta. Ten en cuenta que las dos versiones no siempre son diferentes."
    ;;

  sabnzbd | thelounge | xteve)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username  Establecer el nombre de usuario para ${software_title} (requerido)
  --beta           Instalar la versión beta de ${software_title}" \
      "  qb install ${software_help_name} -u username
  qb install ${software_help_name} -u username --beta
  qb reinstall ${software_help_name} -u username
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username" \
      ""
    ;;

  transmission)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username  Establecer el nombre de usuario para ${software_title} (requerido)
  --v4             Instalar versión 4 de ${software_title} (predeterminado: versión 3)" \
      "  qb install ${software_help_name} -u username --v4
  qb reinstall ${software_help_name} -u username --v4
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username --v4" \
      ""
    ;;

  wireguard)
    has_update=0
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username              Establecer el nombre de usuario para ${software_title} (requerido)
  -o [client|server]           Instalar WireGuard como cliente o servidor
  -cai  | --client-allowed-ip  Establecer el IP permitido para el servidor WireGuard
  -cidr | --cidr               Establecer el CIDR para el servidor WireGuard (predeterminado: 10.5.0.2/16)
  -dns  | --dns                Establecer el DNS para el servidor WireGuard (predeterminado: 1.1.1.1)
  -ep   | --endpoint           Establecer el punto final para el servidor WireGuard
  -lp   | --listen-port        Establecer el puerto de escucha para el servidor WireGuard (predeterminado: 51820)
  -noc  | --number-of-clients  Establecer el número de clientes para el servidor WireGuard
  -pdr  | --postdown-rule      Establecer la regla post-down para el servidor WireGuard
  -pur  | --postup-rule        Establecer la regla post-up para el servidor WireGuard" \
      "  qb install ${software_help_name} -u username -o server \\
  -cai '192.168.0.2,192.168.0.3' \\
  -cidr '10.5.0.2/16' \\
  -dns '0.0.0.0' \\
  -ep 'server.domain.com' \\
  -lp 51820 \\
  -noc 5 \\
  -pdr 'iptables -D INPUT -i wg0 -j ACCEPT' \\
  -pur 'iptables -A INPUT -i wg0 -j ACCEPT'
  qb reinstall ${software_help_name} -u username -o client
  qb remove ${software_help_name} -u username" \
      "
Notas:
  - El servidor WireGuard se instalará con el CIDR por defecto de 10.5.0.2/16,
    DNS de 1.1.1.1, 1 configuración de cliente, y puerto de escucha de 51820.

  - El servidor WireGuard se instalará con las reglas post-down y post-up por defecto.
     * La regla post-down eliminará la regla iptables para el servidor WireGuard.
	 * La regla post-up añadirá la regla iptables para el servidor WireGuard.

  - La opción '-noc' especifica el número de clientes para crear configuraciones.
    Estas configuraciones se guardarán en el directorio '/srv/quickbox/db/wireguard'.

  - La mayoría de los proveedores de VPN proporcionan un archivo de configuración para WireGuard.
    Si estás usando NordVPN, que no proporciona un archivo de configuración directamente,
    puedes generar uno usando el generador de configuración de NordVPN incluido.
    Para más información sobre cómo generar un archivo de configuración de NordVPN,
    usa el comando: nvpn_conf_gen -h"
    ;;

  wsdashboard)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username  Establecer el nombre de usuario para ${software_title} (requerido)" \
      "  qb install ${software_help_name} -u username     - Instalar WSD con configuración de servicio mejorada
  qb reinstall ${software_help_name} -u username   - Reinstalar WSD con configuración de servicio mejorada
  qb remove ${software_help_name} -u username      - Eliminar WSD y limpiar todos los archivos de servicio
  qb update ${software_help_name} -u username      - Actualizar WSD con configuración de servicio mejorada
  qb maintenance ${software_help_name} -u username - Realizar mantenimiento del servicio y verificaciones de salud

Gestión de Certificados SSL:
  qb ssl ${software_help_name} -u username         - Configurar enlaces simbólicos de certificados SSL para el servicio WSD
  qb ssl-remove ${software_help_name} -u username  - Eliminar enlaces simbólicos de certificados SSL
  qb ssl-update ${software_help_name} -u username  - Actualizar configuración SSL para nuevos certificados" \
      "
Características Mejoradas:
  - Ejecución del servicio sin privilegios root (usuario www-data)
  - Sandboxing de seguridad completo
  - Límites de recursos y monitoreo
  - Verificaciones de salud automáticas y diagnósticos
  - Gestión graciosa de procesos
  - Registro y monitoreo estructurados
  - Gestión de enlaces simbólicos de certificados SSL
  - Acceso automático a certificados para usuario www-data

Gestión del Servicio:
  systemctl status qbwsd.service     - Verificar estado del servicio
  systemctl restart qbwsd.service    - Reiniciar servicio
  journalctl -u qbwsd.service -f     - Ver logs en vivo
  qbwsd-health-check.sh --verbose    - Ejecutar verificación de salud detallada
  qbwsd-health-check.sh --fix        - Corregir automáticamente problemas comunes

Gestión de Certificados SSL:
  - Creación automática de enlaces simbólicos en /srv/quickbox/ssl/domain/
  - Configuración de variables de entorno para rutas de certificados
  - Override de systemd para variables de entorno SSL
  - Prueba de acceso a certificados para usuario www-data
  - Prueba de conectividad HTTPS/HTTP"
    ;;

  *)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username  Establecer el nombre de usuario para ${software_title} (requerido)" \
      "  qb install ${software_help_name} -u username
  qb reinstall ${software_help_name} -u username
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username" \
      ""
    ;;
  esac
} 