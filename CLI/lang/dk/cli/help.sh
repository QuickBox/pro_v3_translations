#!/usr/bin/env bash
################################################################################
# Hjælpemeddelelser Modul
# Indeholder alle hjælpetekst genereringsfunktioner og software-specifikke hjælpemeddelelser
################################################################################

# Funktion til at generere hjælpetekst baseret på angivne muligheder
generate_help_text() {
  local software_title="$1"
  local software_name="$2"
  local has_update="$3"
  local options="$4"
  local examples="$5"
  local notes="$6"

  local processes="  install    Installer ${software_title}
  reinstall  Geninstaller ${software_title}
  remove     Fjern ${software_title}"

  if [[ ${has_update} == 1 ]]; then
    processes="${processes}
  update     Opdater ${software_title}"
  fi

  processes="${processes}
  help       Vis denne hjælpemeddelelse"

  declare text="
QuickBox Softwarehåndtering for ${software_title}

Brug:
  qb [proces] ${software_name} [muligheder]

Processer:
${processes}

Muligheder:
${options}

Eksempler:
${examples}
${notes}
"
  quickbox::dashboard::log "${text}"
}

# Funktion til at få hjælpetekst for specifik software
quickbox::software::help() {
  local software_help_name="$1"
  local software_title="${software_help_name^}" # Stort begyndelsesbogstav
  local has_update

  case "${software_help_name}" in
  emby | jellyfin)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username  Indstil brugernavnet for ${software_title} (påkrævet)
  -d | --domain    Indstil domænet for ${software_title}
  --beta           Installer beta versionen af ${software_title}" \
      "  qb install ${software_help_name} -u username -d '${software_help_name}.domain.com'
  qb reinstall ${software_help_name} -u username -d '${software_help_name}.domain.com'
  qb install ${software_help_name} -u username --beta
  qb reinstall ${software_help_name} -u username --beta
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username

  ## Brug flere muligheder
  qb install ${software_help_name} -u username -d '${software_help_name}.domain.com' --beta
  qb reinstall ${software_help_name} -u username -d '${software_help_name}.domain.com' --beta" \
      "
Noter:
  - Ved installation eller geninstallation med domæne muligheden vil Nginx reverse proxy blive konfigureret automatisk.
      * Sørg for at domænet peger på serverens IP adresse og de korrekte DNS poster er sat."
    ;;

  mylar3)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u   | --username             Indstil brugernavnet for ${software_title} (påkrævet)
  -clp | --comic-location-path  Indstil placeringen for tegneserier (standard: /home/username/Media/Comics)" \
      "  qb install ${software_help_name} -u username -clp '/sti/til/tegneserier'
  qb reinstall ${software_help_name} -u username -clp '/sti/til/tegneserier'
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username" \
      ""
    ;;

  radarr | sonarr)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username  Indstil brugernavnet for ${software_title} (påkrævet)
  --4k             Indstil build installationen for 4k (standard: 1080p)
  --nightly        Indstil build installationen på nightly branch (standard: latest)" \
      "  qb install ${software_help_name} -u username              # Installer standard (1080p) installation
  qb install ${software_help_name} -u username --4k         # Installer 4k installation
  qb reinstall ${software_help_name} -u username --nightly  # Geninstaller nightly installation
  qb reinstall ${software_help_name} -u username --4k       # Geninstaller 4k installation
  qb remove ${software_help_name} -u username               # Fjern standard (1080p) installation
  qb remove ${software_help_name} -u username --4k          # Fjern 4k installation
  qb update ${software_help_name} -u username               # Opdater standard (1080p) installation
  qb update ${software_help_name} -u username --4k          # Opdater 4k installation

  ## Brug flere muligheder
  qb install ${software_help_name} -u username --4k --nightly    # Installer 4k installation på nightly branch
  qb reinstall ${software_help_name} -u username --4k --nightly  # Geninstaller 4k installation på nightly branch
  qb update ${software_help_name} -u username --4k --nightly     # Opdater 4k installation på eller til nightly" \
      ""
    ;;

  calibre | kavita)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u  | --username      Indstil brugernavnet for ${software_title} (påkrævet)
  -lp | --library-path  Indstil placeringen for din bibliotek (standard: /home/username/.config/${software_title}/library)" \
      "  qb install ${software_help_name} -u username -lp '/sti/til/bibliotek'
  qb reinstall ${software_help_name} -u username -lp '/sti/til/bibliotek'
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username" \
      ""
    ;;

  plex)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u   | --username          Indstil brugernavnet for ${software_title} (påkrævet)
  -pct | --plex-claim-token  Indstil Plex Claim Token for ${software_title} (påkrævet for hurtig claiming)
  -d   | --domain            Indstil domænet for ${software_title}
  -D   | --data-dir          Indstil data mappen for ${software_title} (standard: /home/username/.config/'Plex Media Server')" \
      "  qb install ${software_help_name} -u username -pct 'claim_token' -d 'plex.domain.com' -D '/sti/til/data'
  qb reinstall ${software_help_name} -u username -pct 'claim_token' -d 'plex.domain.com' -D '/sti/til/data'
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username" \
      "
Noter:
  - Plex Claim Token kan fås fra:
      https://www.plex.tv/claim/

  - Undgå at sætte data mappen til en eksisterende mappe såsom:
      /opt, /opt/username, /mnt, /home, /home/username, og så videre.

  - Det er sikkert at oprette en ny data mappe inden for eksisterende mapper såsom:
      /opt/plex, /opt/username/plex, /mnt/plex, /data/plex, og så videre.

  - Data mappen vil blive oprettet hvis den ikke eksisterer.

  - Data mappen vil blive ejet af brugeren og gruppen af brugernavnet.

  - Ved installation eller geninstallation med domæne muligheden vil Nginx reverse proxy blive konfigureret automatisk.
      * Sørg for at domænet peger på serverens IP adresse og de korrekte DNS poster er sat.

  - Ved opdatering vil du blive bedt om at indtaste din plex.tv email, adgangskode, samt 2FA kode."
    ;;

  bazarr)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username  Indstil brugernavnet for ${software_title} (påkrævet)
  --4k             Indstil build installationen for 4k (standard: 1080p)" \
      "  qb install ${software_help_name} -u username                 # Installer standard (1080p) installation
  qb install ${software_help_name} -u username --4k            # Installer 4k installation
  qb reinstall ${software_help_name} -u username               # Geninstaller standard (1080p) installation
  qb reinstall ${software_help_name} -u username --4k          # Geninstaller 4k installation
  qb remove ${software_help_name} -u username                  # Fjern standard (1080p) installation
  qb remove ${software_help_name} -u username --4k             # Fjern 4k installation
  qb update ${software_help_name} -u username                  # Opdater standard (1080p) installation
  qb update ${software_help_name} -u username --4k             # Opdater 4k installation" \
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
      "  -u  | --username    Indstil brugernavnet for ${software_title} (påkrævet)
  -mp | --media-path  Indstil media stien for ${software_title} (standard: /home/username/Media)
  -o 'deluge'         Installer ${software_title} med Deluge integration
  -o 'nzbget'         Installer ${software_title} med NZBGet integration
  -o 'rtorrent'       Installer ${software_title} med rTorrent integration
  -o 'sabnzbd'        Installer ${software_title} med SABnzbd integration" \
      "  qb install ${software_help_name} -u username
  qb reinstall ${software_help_name} -u username
  qb remove ${software_help_name} -u username

  ## Brug flere muligheder
  qb install ${software_help_name} -u username -o 'deluge' -o 'nzbget'
  qb reinstall ${software_help_name} -u username -o 'rtorrent' -o 'sabnzbd'" \
      ""
    ;;

  jdownloader)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u  | --username       Indstil brugernavnet for ${software_title} (påkrævet)
  -e  | --email          Indstil emailen for ${software_title} (påkrævet) .i.
  -p  | --password       Indstil adgangskoden for ${software_title} (påkrævet) .ii.
  -D  | --downloads-dir  Indstil downloads stien for ${software_title} (standard: /home/username/Downloads)" \
      "  qb install ${software_help_name} -u username -e 'email' -p 'adgangskode' -D '/sti/til/downloads'
  qb reinstall ${software_help_name} -u username -e 'email' -p 'adgangskode' -D '/sti/til/downloads'
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username" \
      "
Noter:
  - .i. Email og adgangskode er påkrævet for JDownloader installation.
      * .ii. dette er legitimationsoplysningerne for din MyJDownloader konto."
    ;;

  jellyseerr | komga | overseerr)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u  | --username  Indstil brugernavnet for ${software_title} (påkrævet)
  -d  | --domain    Indstil domænet for ${software_title}" \
      "  qb install ${software_help_name} -u username -d '${software_help_name}.domain.com'
  qb reinstall ${software_help_name} -u username -d '${software_help_name}.domain.com'
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username" \
      "
Noter:
  - Ved installation eller geninstallation med domæne [-d] muligheden vil Nginx reverse proxy blive konfigureret automatisk.
      * Sørg for at domænet peger på serverens IP adresse og de korrekte DNS poster er sat."
    ;;

  lecert)
    has_update=0
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  --dash          Installer et certifikat for domænet angivet med '-d' og opret en reverse proxy for QuickBox dashboard
  --no-dash       Installer et certifikat for et brugerdefineret domæne angivet med '-d' (certifikat kun, ingen reverse proxy)
  --emby          Installer et certifikat for domænet angivet med '-d' og opret en reverse proxy for Emby
  --jellyfin      Installer et certifikat for domænet angivet med '-d' og opret en reverse proxy for Jellyfin
  --jellyseerr    Installer et certifikat for domænet angivet med '-d' og opret en reverse proxy for Jellyseerr
  --komga         Installer et certifikat for domænet angivet med '-d' og opret en reverse proxy for Komga
  --overseerr     Installer et certifikat for domænet angivet med '-d' og opret en reverse proxy for Overseerr
  --plex          Installer et certifikat for domænet angivet med '-d' og opret en reverse proxy for Plex

  Udfordringsmetoder:
  --dns           Brug DNS udfordring i stedet for HTTP udfordring (aktiverer wildcard certifikater)
  --dns-provider  DNS udbyder for DNS udfordring validering
                  Understøttede udbydere: cloudflare (cf), route53, godaddy, namecheap, digitalocean (do),
                  linode, ovh, vultr, gandi, dnsimple, hurricane (he), azure, gcp, ionos

  Domæne muligheder:
  -d  | --domain  Indstil domænet for ${software_title} (understøtter wildcards med DNS udfordring)" \
      "  # Standard HTTP udfordring eksempler
  qb install ${software_help_name} --dash -d 'example.com'
  qb install ${software_help_name} --jellyfin -d 'jellyfin.example.com' --plex -d 'plex.example.com'

  # DNS udfordring eksempler (for wildcard certifikater)
  qb install ${software_help_name} --dash -d '*.example.com' --dns --dns-provider cloudflare
  qb install ${software_help_name} --jellyseerr -d '*.movies.example.com' --dns --dns-provider route53
  qb install ${software_help_name} --plex -d '*.media.example.com' --dns --dns-provider vultr
  qb install ${software_help_name} --komga -d '*.books.example.com' --dns --dns-provider gandi

  # Flere domæner i enkelt kommando
  qb install ${software_help_name} --dash -d 'example.com' --overseerr -d 'requests.example.com'

  # Certifikat håndtering
  qb reinstall ${software_help_name} --plex -d 'plex.example.com' --dns --dns-provider godaddy
  qb remove ${software_help_name} --emby -d 'emby.example.com'
  qb renew ${software_help_name} -d 'domain1.com' -d 'domain2.com'" \
      "
DNS Udfordring Opsætning:
  Konfigurer dine DNS udbyder legitimationsoplysninger ved hjælp af en af disse metoder:

  Metode 1 - QuickBox Dashboard (Anbefalet):
    Naviger til SSL Kontrol i QuickBox web dashboard
    Vælg DNS Udfordring, vælg din udbyder, og indtast legitimationsoplysninger
    Dashboard vil sikkert gemme legitimationsoplysninger til fremtidig brug

  Metode 2 - CLI Konfiguration:
    qb dns-credentials setup cloudflare
    Følg de interaktive prompts for at konfigurere dine legitimationsoplysninger

  Metode 3 - Miljøvariabler (engangsbrug):
    export CF_Token='din_cloudflare_api_token' && qb install lecert --dash -d '*.example.com' --dns --dns-provider cloudflare

  Udbyderspecifikke legitimationsoplysninger:

  Cloudflare (Anbefalet):
    export CF_Token='din_cloudflare_api_token'
    # ELLER (legacy metode)
    export CF_Email='din@email.com'
    export CF_Key='din_global_api_nøgle'

  AWS Route53:
    export AWS_ACCESS_KEY_ID='din_access_key'
    export AWS_SECRET_ACCESS_KEY='din_secret_key'

  GoDaddy:
    export GD_Key='din_api_nøgle'
    export GD_Secret='din_api_secret'

  NameCheap:
    export Namecheap_Username='dit_brugernavn'
    export Namecheap_ApiKey='din_api_nøgle'

  DigitalOcean:
    export DO_API_KEY='din_api_token'

  Linode:
    export LINODE_V4_API_KEY='din_api_nøgle'

  OVH:
    export OVH_AK='din_application_key'
    export OVH_AS='din_application_secret'
    export OVH_CK='din_consumer_key'

  Vultr:
    export VULTR_API_KEY='din_api_nøgle'

  Gandi:
    export GANDI_LIVEDNS_KEY='din_api_nøgle'

  DNSimple:
    export DNSimple_OAUTH_TOKEN='din_oauth_token'

  Hurricane Electric (he):
    export HE_Username='dit_brugernavn'
    export HE_Password='din_adgangskode'

  Microsoft Azure:
    export AZUREDNS_SUBSCRIPTIONID='dit_subscription_id'
    export AZUREDNS_TENANTID='dit_tenant_id'
    export AZUREDNS_APPID='dit_app_id'
    export AZUREDNS_CLIENTSECRET='din_client_secret'

  Google Cloud Platform:
    export GCP_PROJECT='dit_project_id'
    export GCP_SERVICE_ACCOUNT_JSON_FILE='/sti/til/service-account.json'

  IONOS:
    export IONOS_PREFIX='dit_prefix'
    export IONOS_SECRET='din_secret'

Nøglefunktioner:
  • HTTP Udfordring: Standard metode, kræver porte 80/443 tilgængelige
  • DNS Udfordring: For wildcard certifikater (*.domain.com) og begrænsede netværk
  • Automatisk Nginx reverse proxy konfiguration for understøttede applikationer
  • Multi-domæne certifikat installation i enkelt kommando
  • Certifikat fornyelse med 'qb renew lecert'
  • Sikker legitimationsoplysning lagring og håndtering

Krav:
  • Domæne skal pege på server IP adresse med korrekte DNS poster
  • For DNS udfordring: Gyldige DNS udbyder legitimationsoplysninger skal være konfigureret
  • For wildcard certifikater: DNS udfordring er obligatorisk
  • Sørg for at firewall tillader HTTP (80) og HTTPS (443) trafik for HTTP udfordring

Fejlfinding:
  • Tjek DNS propagation: 'dig domain.com' eller 'nslookup domain.com'
  • Verificer legitimationsoplysninger: Brug 'qb dns-credentials check [udbyder]' for at verificere gemte legitimationsoplysninger
  • Tjek certifikat status: Brug 'qb dns-credentials status' for at se installerede certifikater
  • Rate grænser: Let's Encrypt har rate grænser - undgå for mange forespørgsler per time
  • Domæne validering: Sørg for at domænet er korrekt konfigureret i din DNS udbyder"
    ;;

  lidarr | readarr)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username  Indstil brugernavnet for ${software_title} (påkrævet)
  --nightly        Indstil build installationen på nightly branch (standard: latest)" \
      "  qb install ${software_help_name} -u username                 # Installer standard (latest) installation
  qb install ${software_help_name} -u username --nightly       # Installer nightly installation
  qb reinstall ${software_help_name} -u username               # Geninstaller standard (latest) installation
  qb reinstall ${software_help_name} -u username --nightly     # Geninstaller nightly installation
  qb remove ${software_help_name} -u username                  # Fjern nuværende installation
  qb update ${software_help_name} -u username                  # Opdater standard (latest) installation
  qb update ${software_help_name} -u username --nightly        # Opdater til/fra nightly installation" \
      ""
    ;;

  ombi)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username          Indstil brugernavnet for ${software_title} (påkrævet)
  --ombi2mysql             Migrer Ombi data til MySQL
  --phmyadmin              Installer phpMyAdmin for Ombi migration
  --mysql-user=<brugernavn>  Indstil MySQL brugernavnet for Ombi migration (standard: brugernavn angivet med -u)
  --mysql-pass=<adgangskode>  Indstil MySQL adgangskoden for Ombi migration (standard: tilfældigt genereret)
  --mysql-host=<host>      Indstil MySQL hosten for Ombi migration (standard: localhost)
  --mysql-port=<port>      Indstil MySQL porten for Ombi migration (standard: 3306)
  --mysql-db=<database>    Indstil MySQL databasen for Ombi migration (standard: Ombi)" \
      "  qb install ${software_help_name} -u username
  qb reinstall ${software_help_name} -u username
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username --ombi2mysql --phpmyadmin" \
      "
Noter:
  - --ombi2mysql muligheden vil migrere Ombi data til MySQL.
    * Dette kræver at MySQL brugernavn, adgangskode, host, port, og database er angivet.
    * Hvis ingen er angivet, vil standardværdierne blive brugt:
      - MySQL Bruger: Brugernavn (fra -u mulighed)
      - MySQL Adgangskode: Tilfældigt genereret adgangskode
      - MySQL Host: localhost
      - MySQL Port: 3306
      - MySQL Database: Ombi

  - --phpmyadmin muligheden vil installere phpMyAdmin for Ombi migration.
    * Dette vil tillade dig at håndtere MySQL databasen for Ombi via /phpMyAdmin webUI.
  - --mysql-user, --mysql-pass, --mysql-host, --mysql-port, og --mysql-db muligheder er valgfrie.
    * Hvis angivet, vil de overskrive standardværdierne.

  - Ombi er installeret med SQLite understøttelse som standard.
  - MySQL understøttelse er kun tilgængelig når du bruger --ombi2mysql muligheden på opdateringsprocessen."
    ;;

  phpmyadmin)
    has_update=0
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username  Indstil brugernavnet for ${software_title} (påkrævet)
  --pma-user       Indstil phpMyAdmin brugernavnet (standard: brugernavn angivet med -u)
  --pma-pass       Indstil phpMyAdmin adgangskoden (standard: tilfældigt genereret)
  --pma-host       Indstil phpMyAdmin hosten (standard: localhost)" \
      "  qb install ${software_help_name} -u username --pma-user 'pma_user' --pma-pass 'pma_pass' --pma-host 'localhost'
  qb reinstall ${software_help_name} -u username --pma-user 'pma_user' --pma-pass 'pma_pass' --pma-host 'localhost'
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username" \
      "
Noter:
  - phpMyAdmin brugernavnet og adgangskoden er valgfrie.
    * Hvis ikke angivet, vil standardværdierne blive brugt:
      - phpMyAdmin Bruger: Brugernavn (fra -u mulighed)
      - phpMyAdmin Adgangskode: Tilfældigt genereret adgangskode
      - phpMyAdmin Host: localhost"
    ;;

  quota)
    has_update=0
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -qm | --quota-mount  Indstil system mount punktet for ${software_title} (påkrævet)" \
      "  qb install ${software_help_name} -qm '/sti/til/mount/point'
  qb reinstall ${software_help_name} -qm '/sti/til/mount/point'
  qb remove ${software_help_name}" \
      ""
    ;;

  rclone)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username  Indstil brugernavnet for ${software_title} (påkrævet)
  --dropbox        Installer ${software_title} med Dropbox integration
  --gdrive         Installer ${software_title} med Google Drive integration
  --encrypted      Installer ${software_title} med kryptering
  --beta           Installer beta versionen af ${software_title}" \
      "  qb install ${software_help_name} -u username --dropbox
  qb install ${software_help_name} -u username --beta --gdrive
  qb reinstall ${software_help_name} -u username --dropbox --encrypted
  qb reinstall ${software_help_name} -u username --gdrive
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username" \
      "
Noter:
  - Det anbefales at bruge enten --dropbox eller --gdrive muligheden på en enkelt install pass.
     * Dette vil forhindre eventuelle konflikter med rclone konfigurationen.

  - Ved installation med --dropbox eller --gdrive muligheden vil rclone konfigurationen blive oprettet automatisk.

  - Ved installation med --encrypted muligheden vil rclone konfigurationen blive krypteret ved hjælp af de angivne oplysninger.

  - Ved installation med --beta muligheden vil beta versionen af rclone blive installeret."
    ;;

  requestrr | vpn)
    has_update=0
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username  Indstil brugernavnet for ${software_title} (påkrævet)" \
      "  qb install ${software_help_name} -u username
  qb reinstall ${software_help_name} -u username
  qb remove ${software_help_name} -u username" \
      ""
    ;;

  rtorrent)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username    Indstil brugernavnet for ${software_title} (påkrævet)
  -o '0.15.1'        Installer version 0.15.1
  -o '0.10.0'        Installer version 0.10.0
  -o '0.9.8'         Installer version 0.9.8
  -o '0.9.7'         Installer version 0.9.7
  -o '0.9.6'         Installer version 0.9.6
  -o 'feature-bind'  Installer feature-bind versionen af ${software_title}" \
      "  qb install ${software_help_name} -u username -o '0.15.1'
  qb install ${software_help_name} -u username -o '0.10.0'
  qb install ${software_help_name} -u username -o '0.9.8'
  qb install ${software_help_name} -u username -o '0.9.7'
  qb reinstall ${software_help_name} -u username -o '0.9.6'
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username -o '0.15.1'
  qb update ${software_help_name} -u username -o 'feature-bind'" \
      "
Noter:
  - rTorrent er en globalt installeret applikation og vil være tilgængelig for alle brugere på serveren.

  - Feature-bind versionen af rTorrent er en brugerdefineret build der inkluderer bind funktionen.
     * Bind funktionen tillader dig at binde rTorrent til en specifik IP adresse."
    ;;

  rutorrent)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username    Indstil brugernavnet for ${software_title} (påkrævet)
  --beta             Installer beta versionen af ${software_title}" \
      "  qb install ${software_help_name} -u username
  qb reinstall ${software_help_name} -u username
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username --beta" \
      "
Noter:
  - ruTorrent er en globalt installeret applikation og vil være tilgængelig for alle brugere på serveren.

  - ruTorrent er en del af rTorrent installationsprocessen, og når rTorrent installeres
    vil ruTorrent blive installeret med den seneste version som standard. Hvis rTorrent ikke er installeret,
    så vil ruTorrent installere version 0.9.8.

  - rutorrent vil blive installeret med den seneste version som standard. Hvis du ønsker at installere beta versionen,
	kan du bruge --beta muligheden. Husk at de to versioner ikke altid er forskellige."
    ;;

  sabnzbd | thelounge | xteve)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username  Indstil brugernavnet for ${software_title} (påkrævet)
  --beta           Installer beta versionen af ${software_title}" \
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
      "  -u | --username  Indstil brugernavnet for ${software_title} (påkrævet)
  --v4             Installer version 4 af ${software_title} (standard: version 3)" \
      "  qb install ${software_help_name} -u username --v4
  qb reinstall ${software_help_name} -u username --v4
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username --v4" \
      ""
    ;;

  wireguard)
    has_update=0
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username              Indstil brugernavnet for ${software_title} (påkrævet)
  -o [client|server]           Installer WireGuard som en klient eller server
  -cai  | --client-allowed-ip  Indstil den tilladte IP for WireGuard serveren
  -cidr | --cidr               Indstil CIDR for WireGuard serveren (standard: 10.5.0.2/16)
  -dns  | --dns                Indstil DNS for WireGuard serveren (standard: 1.1.1.1)
  -ep   | --endpoint           Indstil endpoint for WireGuard serveren
  -lp   | --listen-port        Indstil lytte porten for WireGuard serveren (standard: 51820)
  -noc  | --number-of-clients  Indstil antallet af klienter for WireGuard serveren
  -pdr  | --postdown-rule      Indstil post-down regel for WireGuard serveren
  -pur  | --postup-rule        Indstil post-up regel for WireGuard serveren" \
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
Noter:
  - WireGuard serveren vil blive installeret med standard CIDR på 10.5.0.2/16,
    DNS på 1.1.1.1, 1 klient konfiguration, og lytte port på 51820.

  - WireGuard serveren vil blive installeret med standard post-down og post-up regler.
     * Post-down reglen vil fjerne iptables reglen for WireGuard serveren.
	 * Post-up reglen vil tilføje iptables reglen for WireGuard serveren.

  - '-noc' muligheden specificerer antallet af klienter der skal oprettes konfigurationer for.
    Disse konfigurationer vil blive gemt i '/srv/quickbox/db/wireguard' mappen.

  - De fleste VPN udbydere leverer en konfigurationsfil for WireGuard.
    Hvis du bruger NordVPN, som ikke leverer en konfigurationsfil direkte,
    kan du generere en ved hjælp af den inkluderede NordVPN konfigurationsgenerator.
    For mere information om at generere en NordVPN konfigurationsfil,
    brug kommandoen: nvpn_conf_gen -h"
    ;;

  wsdashboard)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username  Indstil brugernavnet for ${software_title} (påkrævet)" \
      "  qb install ${software_help_name} -u username     - Installer WSD med forbedret service konfiguration
  qb reinstall ${software_help_name} -u username   - Geninstaller WSD med forbedret service konfiguration
  qb remove ${software_help_name} -u username      - Fjern WSD og ryd op i alle service filer
  qb update ${software_help_name} -u username      - Opdater WSD med forbedret service konfiguration
  qb maintenance ${software_help_name} -u username - Udfør service vedligeholdelse og sundhedskontroller" \
      "
Forbedrede funktioner:
  - Ikke-root service udførelse (www-data bruger)
  - Omfattende sikkerhed sandboxing
  - Ressourcegrænser og overvågning
  - Automatiske sundhedskontroller og diagnostik
  - Graceful proces håndtering
  - Struktureret logging og overvågning
  - Automatisk certifikat adgang for www-data bruger

Service håndtering:
  systemctl status qbwsd.service     - Tjek service status
  systemctl restart qbwsd.service    - Genstart service
  journalctl -u qbwsd.service -f     - Vis live logs
  qbwsd-health-check.sh --verbose    - Kør detaljeret sundhedskontrol
  qbwsd-health-check.sh --fix        - Auto-fix almindelige problemer"
    ;;

  *)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username  Indstil brugernavnet for ${software_title} (påkrævet)" \
      "  qb install ${software_help_name} -u username
  qb reinstall ${software_help_name} -u username
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username" \
      ""
    ;;
  esac
} 