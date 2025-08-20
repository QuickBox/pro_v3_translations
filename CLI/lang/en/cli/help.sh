#!/usr/bin/env bash
################################################################################
# Help Messages Module
# Contains all help text generation functions and software-specific help messages
################################################################################

# Function to generate help text based on provided options
generate_help_text() {
  local software_title="$1"
  local software_name="$2"
  local has_update="$3"
  local options="$4"
  local examples="$5"
  local notes="$6"

  local processes="  install    Install ${software_title}
  reinstall  Reinstall ${software_title}
  remove     Remove ${software_title}"

  if [[ ${has_update} == 1 ]]; then
    processes="${processes}
  update     Update ${software_title}"
  fi

  processes="${processes}
  help       Display this help message"

  declare text="
QuickBox Software Management for ${software_title}

Usage:
  qb [process] ${software_name} [options]

Processes:
${processes}

Options:
${options}

Examples:
${examples}
${notes}
"
  quickbox::dashboard::log "${text}"
}

# Function to get help text for specific software
quickbox::software::help() {
  local software_help_name="$1"
  local software_title="${software_help_name^}" # Capitalize the first letter
  local has_update

  case "${software_help_name}" in
  emby | jellyfin)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username  Set the username for ${software_title} (required)
  -d | --domain    Set the domain for ${software_title}
  --beta           Install the beta version of ${software_title}" \
      "  qb install ${software_help_name} -u username -d '${software_help_name}.domain.com'
  qb reinstall ${software_help_name} -u username -d '${software_help_name}.domain.com'
  qb install ${software_help_name} -u username --beta
  qb reinstall ${software_help_name} -u username --beta
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username

  ## Use multiple options
  qb install ${software_help_name} -u username -d '${software_help_name}.domain.com' --beta
  qb reinstall ${software_help_name} -u username -d '${software_help_name}.domain.com' --beta" \
      "
Notes:
  - When installing or reinstalling with the domain option, the Nginx reverse proxy will be configured automatically.
      * Ensure the domain is pointing to the server's IP address and the proper DNS records are set."
    ;;

  mylar3)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u   | --username             Set the username for ${software_title} (required)
  -clp | --comic-location-path  Set the location path for comics (default: /home/username/Media/Comics)" \
      "  qb install ${software_help_name} -u username -clp '/path/to/comics'
  qb reinstall ${software_help_name} -u username -clp '/path/to/comics'
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username" \
      ""
    ;;

  radarr | sonarr)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username  Set the username for ${software_title} (required)
  --4k             Set the build installation for 4k (default: 1080p)
  --nightly        Set the build installation on the nightly branch (default: latest)" \
      "  qb install ${software_help_name} -u username              # Install standard (1080p) installation
  qb install ${software_help_name} -u username --4k         # Install 4k installation
  qb reinstall ${software_help_name} -u username --nightly  # Reinstall nightly installation
  qb reinstall ${software_help_name} -u username --4k       # Reinstall 4k installation
  qb remove ${software_help_name} -u username               # Remove standard (1080p) installation
  qb remove ${software_help_name} -u username --4k          # Remove 4k installation
  qb update ${software_help_name} -u username               # Update standard (1080p) installation
  qb update ${software_help_name} -u username --4k          # Update 4k installation

  ## Use multiple options
  qb install ${software_help_name} -u username --4k --nightly    # Install 4k installation on the nightly branch
  qb reinstall ${software_help_name} -u username --4k --nightly  # Reinstall 4k installation on the nightly branch
  qb update ${software_help_name} -u username --4k --nightly     # Update 4k installation on or to nightly" \
      ""
    ;;

  calibre | kavita)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u  | --username      Set the username for ${software_title} (required)
  -lp | --library-path  Set the location path for your library (default: /home/username/.config/${software_title}/library)" \
      "  qb install ${software_help_name} -u username -lp '/path/to/library'
  qb reinstall ${software_help_name} -u username -lp '/path/to/library'
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username" \
      ""
    ;;

  plex)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u   | --username          Set the username for ${software_title} (required)
  -pct | --plex-claim-token  Set the Plex Claim Token for ${software_title} (required for quick claiming)
  -d   | --domain            Set the domain for ${software_title}
  -D   | --data-dir          Set the data directory for ${software_title} (default: /home/username/.config/'Plex Media Server')" \
      "  qb install ${software_help_name} -u username -pct 'claim_token' -d 'plex.domain.com' -D '/path/to/data'
  qb reinstall ${software_help_name} -u username -pct 'claim_token' -d 'plex.domain.com' -D '/path/to/data'
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username" \
      "
Notes:
  - The Plex Claim Token can be obtained from:
      https://www.plex.tv/claim/

  - Avoid setting the data directory to an existing directory such as:
      /opt, /opt/username, /mnt, /home, /home/username, and so on.

  - It is safe to create a new data directory within existing directories such as:
      /opt/plex, /opt/username/plex, /mnt/plex, /data/plex, and so on.

  - The data directory will be created if it does not exist.

  - The data directory will be owned by the user and group of the username.

  - When installing or reinstalling with the domain option, the Nginx reverse proxy will be configured automatically.
      * Ensure the domain is pointing to the server's IP address and the proper DNS records are set.

  - When updating, you will be prompted to enter your plex.tv email, password, as well as 2FA code."
    ;;

  bazarr)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username  Set the username for ${software_title} (required)
  --4k             Set the build installation for 4k (default: 1080p)" \
      "  qb install ${software_help_name} -u username                 # Install standard (1080p) installation
  qb install ${software_help_name} -u username --4k            # Install 4k installation
  qb reinstall ${software_help_name} -u username               # Reinstall standard (1080p) installation
  qb reinstall ${software_help_name} -u username --4k          # Reinstall 4k installation
  qb remove ${software_help_name} -u username                  # Remove standard (1080p) installation
  qb remove ${software_help_name} -u username --4k             # Remove 4k installation
  qb update ${software_help_name} -u username                  # Update standard (1080p) installation
  qb update ${software_help_name} -u username --4k             # Update 4k installation" \
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
      "  -u  | --username    Set the username for ${software_title} (required)
  -mp | --media-path  Set the media path for ${software_title} (default: /home/username/Media)
  -o 'deluge'         Install ${software_title} with Deluge integration
  -o 'nzbget'         Install ${software_title} with NZBGet integration
  -o 'rtorrent'       Install ${software_title} with rTorrent integration
  -o 'sabnzbd'        Install ${software_title} with SABnzbd integration" \
      "  qb install ${software_help_name} -u username
  qb reinstall ${software_help_name} -u username
  qb remove ${software_help_name} -u username

  ## Use multiple options
  qb install ${software_help_name} -u username -o 'deluge' -o 'nzbget'
  qb reinstall ${software_help_name} -u username -o 'rtorrent' -o 'sabnzbd'" \
      ""
    ;;

  jdownloader)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u  | --username       Set the username for ${software_title} (required)
  -e  | --email          Set the email for ${software_title} (required) .i.
  -p  | --password       Set the password for ${software_title} (required) .ii.
  -D  | --downloads-dir  Set the downloads path for ${software_title} (default: /home/username/Downloads)" \
      "  qb install ${software_help_name} -u username -e 'email' -p 'password' -D '/path/to/downloads'
  qb reinstall ${software_help_name} -u username -e 'email' -p 'password' -D '/path/to/downloads'
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username" \
      "
Notes:
  - .i. The email and password are required for JDownloader installation.
      * .ii. these are the credentials for your MyJDownloader account."
    ;;

  jellyseerr | komga | overseerr)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u  | --username  Set the username for ${software_title} (required)
  -d  | --domain    Set the domain for ${software_title}" \
      "  qb install ${software_help_name} -u username -d '${software_help_name}.domain.com'
  qb reinstall ${software_help_name} -u username -d '${software_help_name}.domain.com'
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username" \
      "
Notes:
  - When installing or reinstalling with the domain [-d] option, the Nginx reverse proxy will be configured automatically.
      * Ensure the domain is pointing to the server's IP address and the proper DNS records are set."
    ;;

  lecert)
    has_update=0
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  --dash          Install a certificate for the domain specified with '-d' and create a reverse proxy for the QuickBox dashboard
  --no-dash       Install a certificate for a custom domain specified with '-d' (certificate only, no reverse proxy)
  --emby          Install a certificate for the domain specified with '-d' and create a reverse proxy for Emby
  --jellyfin      Install a certificate for the domain specified with '-d' and create a reverse proxy for Jellyfin
  --jellyseerr    Install a certificate for the domain specified with '-d' and create a reverse proxy for Jellyseerr
  --komga         Install a certificate for the domain specified with '-d' and create a reverse proxy for Komga
  --overseerr     Install a certificate for the domain specified with '-d' and create a reverse proxy for Overseerr
  --plex          Install a certificate for the domain specified with '-d' and create a reverse proxy for Plex

  Challenge Methods:
  --dns           Use DNS challenge instead of HTTP challenge (enables wildcard certificates)
  --dns-provider  DNS provider for DNS challenge validation
                  Supported providers: cloudflare (cf), route53, godaddy, namecheap, digitalocean (do),
                  linode, ovh, vultr, gandi, dnsimple, hurricane (he), azure, gcp, ionos

  Domain Options:
  -d  | --domain  Set the domain for ${software_title} (supports wildcards with DNS challenge)" \
      "  # Standard HTTP challenge examples
  qb install ${software_help_name} --dash -d 'example.com'
  qb install ${software_help_name} --jellyfin -d 'jellyfin.example.com' --plex -d 'plex.example.com'

  # DNS challenge examples (for wildcard certificates)
  qb install ${software_help_name} --dash -d '*.example.com' --dns --dns-provider cloudflare
  qb install ${software_help_name} --jellyseerr -d '*.movies.example.com' --dns --dns-provider route53
  qb install ${software_help_name} --plex -d '*.media.example.com' --dns --dns-provider vultr
  qb install ${software_help_name} --komga -d '*.books.example.com' --dns --dns-provider gandi

  # Multiple domains in single command
  qb install ${software_help_name} --dash -d 'example.com' --overseerr -d 'requests.example.com'

  # Certificate management
  qb reinstall ${software_help_name} --plex -d 'plex.example.com' --dns --dns-provider godaddy
  qb remove ${software_help_name} --emby -d 'emby.example.com'
  qb renew ${software_help_name} -d 'domain1.com' -d 'domain2.com'" \
      "
DNS Challenge Setup:
  Configure your DNS provider credentials using one of these methods:

  Method 1 - QuickBox Dashboard (Recommended):
    Navigate to SSL Control in the QuickBox web dashboard
    Select DNS Challenge, choose your provider, and enter credentials
    The dashboard will securely store credentials for future use

  Method 2 - CLI Configuration:
    qb dns-credentials setup cloudflare
    Follow the interactive prompts to configure your credentials

  Method 3 - Environment Variables (one-time use):
    export CF_Token='your_cloudflare_api_token' && qb install lecert --dash -d '*.example.com' --dns --dns-provider cloudflare

  Provider-specific credentials:

  Cloudflare (Recommended):
    export CF_Token='your_cloudflare_api_token'
    # OR (legacy method)
    export CF_Email='your@email.com'
    export CF_Key='your_global_api_key'

  AWS Route53:
    export AWS_ACCESS_KEY_ID='your_access_key'
    export AWS_SECRET_ACCESS_KEY='your_secret_key'

  GoDaddy:
    export GD_Key='your_api_key'
    export GD_Secret='your_api_secret'

  NameCheap:
    export Namecheap_Username='your_username'
    export Namecheap_ApiKey='your_api_key'

  DigitalOcean:
    export DO_API_KEY='your_api_token'

  Linode:
    export LINODE_V4_API_KEY='your_api_key'

  OVH:
    export OVH_AK='your_application_key'
    export OVH_AS='your_application_secret'
    export OVH_CK='your_consumer_key'

  Vultr:
    export VULTR_API_KEY='your_api_key'

  Gandi:
    export GANDI_LIVEDNS_KEY='your_api_key'

  DNSimple:
    export DNSimple_OAUTH_TOKEN='your_oauth_token'

  Hurricane Electric (he):
    export HE_Username='your_username'
    export HE_Password='your_password'

  Microsoft Azure:
    export AZUREDNS_SUBSCRIPTIONID='your_subscription_id'
    export AZUREDNS_TENANTID='your_tenant_id'
    export AZUREDNS_APPID='your_app_id'
    export AZUREDNS_CLIENTSECRET='your_client_secret'

  Google Cloud Platform:
    export GCP_PROJECT='your_project_id'
    export GCP_SERVICE_ACCOUNT_JSON_FILE='/path/to/service-account.json'

  IONOS:
    export IONOS_PREFIX='your_prefix'
    export IONOS_SECRET='your_secret'

Key Features:
  • HTTP Challenge: Default method, requires ports 80/443 accessible
  • DNS Challenge: For wildcard certificates (*.domain.com) and restricted networks
  • Automatic Nginx reverse proxy configuration for supported applications
  • Multi-domain certificate installation in single command
  • Certificate renewal with 'qb renew lecert'
  • Secure credential storage and management

Requirements:
  • Domain must point to server IP address with proper DNS records
  • For DNS challenge: Valid DNS provider credentials must be configured
  • For wildcard certificates: DNS challenge is mandatory
  • Ensure firewall allows HTTP (80) and HTTPS (443) traffic for HTTP challenge

Troubleshooting:
  • Check DNS propagation: 'dig domain.com' or 'nslookup domain.com'
  • Verify credentials: Use 'qb dns-credentials check [provider]' to verify stored credentials
  • Check certificate status: Use 'qb dns-credentials status' to view installed certificates
  • Rate limits: Let's Encrypt has rate limits - avoid too many requests per hour
  • Domain validation: Ensure domain is properly configured in your DNS provider"
    ;;

  lidarr | readarr)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username  Set the username for ${software_title} (required)
  --nightly        Set the build installation on the nightly branch (default: latest)" \
      "  qb install ${software_help_name} -u username                 # Install default (latest) installation
  qb install ${software_help_name} -u username --nightly       # Install nightly installation
  qb reinstall ${software_help_name} -u username               # Reinstall default (latest) installation
  qb reinstall ${software_help_name} -u username --nightly     # Reinstall nightly installation
  qb remove ${software_help_name} -u username                  # Remove current installation
  qb update ${software_help_name} -u username                  # Update default (latest) installation
  qb update ${software_help_name} -u username --nightly        # Update to/from nightly installation" \
      ""
    ;;

  ombi)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username          Set the username for ${software_title} (required)
  --ombi2mysql             Migrate Ombi data to MySQL
  --phmyadmin              Install phpMyAdmin for Ombi migration
  --mysql-user=<username>  Set the MySQL username for Ombi migration (default: username specified with -u)
  --mysql-pass=<password>  Set the MySQL password for Ombi migration (default: randomly generated)
  --mysql-host=<host>      Set the MySQL host for Ombi migration (default: localhost)
  --mysql-port=<port>      Set the MySQL port for Ombi migration (default: 3306)
  --mysql-db=<database>    Set the MySQL database for Ombi migration (default: Ombi)" \
      "  qb install ${software_help_name} -u username
  qb reinstall ${software_help_name} -u username
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username --ombi2mysql --phpmyadmin" \
      "
Notes:
  - The --ombi2mysql option will migrate Ombi data to MySQL.
    * This requires the MySQL username, password, host, port, and database to be specified.
    * If none are specified, the default values will be used:
      - MySQL User: Username (from -u option)
      - MySQL Password: Randomly generated password
      - MySQL Host: localhost
      - MySQL Port: 3306
      - MySQL Database: Ombi

  - The --phpmyadmin option will install phpMyAdmin for Ombi migration.
    * This will allow you to manage the MySQL database for Ombi via /phpMyAdmin webUI.
  - The --mysql-user, --mysql-pass, --mysql-host, --mysql-port, and --mysql-db options are optional.
    * If specified, they will override the default values.

  - Ombi is installed with SQLite support by default.
  - MySQL support is only available when using the --ombi2mysql option on the update process."
    ;;

  phpmyadmin)
    has_update=0
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username  Set the username for ${software_title} (required)
  --pma-user       Set the phpMyAdmin username (default: username specified with -u)
  --pma-pass       Set the phpMyAdmin password (default: randomly generated)
  --pma-host       Set the phpMyAdmin host (default: localhost)" \
      "  qb install ${software_help_name} -u username --pma-user 'pma_user' --pma-pass 'pma_pass' --pma-host 'localhost'
  qb reinstall ${software_help_name} -u username --pma-user 'pma_user' --pma-pass 'pma_pass' --pma-host 'localhost'
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username" \
      "
Notes:
  - The phpMyAdmin username and password are optional.
    * If not specified, the default values will be used:
      - phpMyAdmin User: Username (from -u option)
      - phpMyAdmin Password: Randomly generated password
      - phpMyAdmin Host: localhost"
    ;;

  quota)
    has_update=0
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -qm | --quota-mount  Set the system mount point for ${software_title} (required)" \
      "  qb install ${software_help_name} -qm '/path/to/mount/point'
  qb reinstall ${software_help_name} -qm '/path/to/mount/point'
  qb remove ${software_help_name}" \
      ""
    ;;

  rclone)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username  Set the username for ${software_title} (required)
  --dropbox        Install ${software_title} with Dropbox integration
  --gdrive         Install ${software_title} with Google Drive integration
  --encrypted      Install ${software_title} with encryption
  --beta           Install the beta version of ${software_title}" \
      "  qb install ${software_help_name} -u username --dropbox
  qb install ${software_help_name} -u username --beta --gdrive
  qb reinstall ${software_help_name} -u username --dropbox --encrypted
  qb reinstall ${software_help_name} -u username --gdrive
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username" \
      "
Notes:
  - It is recommended to use either the --dropbox or --gdrive option on a single install pass.
     * This will prevent any conflicts with the rclone configuration.

  - When installing with the --dropbox or --gdrive option, the rclone configuration will be created automatically.

  - When installing with the --encrypted option, the rclone configuration will be encrypted using the specified information.

  - When installing with the --beta option, the beta version of rclone will be installed."
    ;;

  requestrr | vpn)
    has_update=0
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username  Set the username for ${software_title} (required)" \
      "  qb install ${software_help_name} -u username
  qb reinstall ${software_help_name} -u username
  qb remove ${software_help_name} -u username" \
      ""
    ;;

  rtorrent)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username    Set the username for ${software_title} (required)
  -o '0.15.1'        Install version 0.15.1
  -o '0.10.0'        Install version 0.10.0
  -o '0.9.8'         Install version 0.9.8
  -o '0.9.7'         Install version 0.9.7
  -o '0.9.6'         Install version 0.9.6
  -o 'feature-bind'  Install the feature-bind version of ${software_title}" \
      "  qb install ${software_help_name} -u username -o '0.15.1'
  qb install ${software_help_name} -u username -o '0.10.0'
  qb install ${software_help_name} -u username -o '0.9.8'
  qb install ${software_help_name} -u username -o '0.9.7'
  qb reinstall ${software_help_name} -u username -o '0.9.6'
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username -o '0.15.1'
  qb update ${software_help_name} -u username -o 'feature-bind'" \
      "
Notes:
  - rTorrent is a globally installed application and will be available for all users on the server.

  - The feature-bind version of rTorrent is a custom build that includes the bind feature.
     * The bind feature allows you to bind rTorrent to a specific IP address."
    ;;

  rutorrent)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username    Set the username for ${software_title} (required)
  --beta             Install the beta version of ${software_title}" \
      "  qb install ${software_help_name} -u username
  qb reinstall ${software_help_name} -u username
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username --beta" \
      "
Notes:
  - ruTorrent is a globally installed application and will be available for all users on the server.

  - ruTorrent is a part of the rTorrent installation process, and when installing rTorrent
    ruTorrent will be installed with the latest version by default. If rTorrent is not installed,
    then ruTorrent will install version 0.9.8.

  - rutorrent will be installed with the latest version by default. If you wish to install the beta version,
	you can use the --beta option. Keep in mind that the two versions are not always different."
    ;;

  sabnzbd | thelounge | xteve)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username  Set the username for ${software_title} (required)
  --beta           Install the beta version of ${software_title}" \
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
      "  -u | --username  Set the username for ${software_title} (required)
  --v4             Install version 4 of ${software_title} (default: version 3)" \
      "  qb install ${software_help_name} -u username --v4
  qb reinstall ${software_help_name} -u username --v4
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username --v4" \
      ""
    ;;

  wireguard)
    has_update=0
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username              Set the username for ${software_title} (required)
  -o [client|server]           Install WireGuard as a client or server
  -cai  | --client-allowed-ip  Set the allowed IP for the WireGuard server
  -cidr | --cidr               Set the CIDR for the WireGuard server (default: 10.5.0.2/16)
  -dns  | --dns                Set the DNS for the WireGuard server (default: 1.1.1.1)
  -ep   | --endpoint           Set the endpoint for the WireGuard server
  -lp   | --listen-port        Set the listen port for the WireGuard server (default: 51820)
  -noc  | --number-of-clients  Set the number of clients for the WireGuard server
  -pdr  | --postdown-rule      Set the post-down rule for the WireGuard server
  -pur  | --postup-rule        Set the post-up rule for the WireGuard server" \
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
Notes:
  - The WireGuard server will be installed with the default CIDR of 10.5.0.2/16,
    DNS of 1.1.1.1, 1 client config, and listen port of 51820.

  - The WireGuard server will be installed with the default post-down and post-up rules.
     * The post-down rule will remove the iptables rule for the WireGuard server.
	 * The post-up rule will add the iptables rule for the WireGuard server.

  - The '-noc' option specifies the number of clients to create configurations for.
    These configurations will be saved in the '/srv/quickbox/db/wireguard' directory.

  - Most VPN providers supply a configuration file for WireGuard.
    If you are using NordVPN, which does not provide a configuration file directly,
    you can generate one using the included NordVPN configuration generator.
    For more information on generating a NordVPN configuration file,
    use the command: nvpn_conf_gen -h"
    ;;

  wsdashboard)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username  Set the username for ${software_title} (required)" \
      "  qb install ${software_help_name} -u username     - Install WSD with enhanced service configuration
  qb reinstall ${software_help_name} -u username   - Reinstall WSD with enhanced service configuration
  qb remove ${software_help_name} -u username      - Remove WSD and clean up all service files
  qb update ${software_help_name} -u username      - Update WSD with enhanced service configuration
  qb maintenance ${software_help_name} -u username - Perform service maintenance and health checks" \
      "
Enhanced Features:
  - Non-root service execution (www-data user)
  - Comprehensive security sandboxing
  - Resource limits and monitoring
  - Automatic health checks and diagnostics
  - Graceful process management
  - Structured logging and monitoring
  - Automatic certificate access for www-data user

Service Management:
  systemctl status qbwsd.service     - Check service status
  systemctl restart qbwsd.service    - Restart service
  journalctl -u qbwsd.service -f     - View live logs
  qbwsd-health-check.sh --verbose    - Run detailed health check
  qbwsd-health-check.sh --fix        - Auto-fix common issues"
    ;;

  *)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username  Set the username for ${software_title} (required)" \
      "  qb install ${software_help_name} -u username
  qb reinstall ${software_help_name} -u username
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username" \
      ""
    ;;
  esac
} 