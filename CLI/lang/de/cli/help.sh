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

  local processes="  install    ${software_title} installieren
  reinstall  ${software_title} neu installieren
  remove     ${software_title} entfernen"

  if [[ ${has_update} == 1 ]]; then
    processes="${processes}
  update     ${software_title} aktualisieren"
  fi

  processes="${processes}
  help       Diese Hilfemeldung anzeigen"

  declare text="
QuickBox Software-Verwaltung für ${software_title}

Verwendung:
  qb [prozess] ${software_name} [optionen]

Prozesse:
${processes}

Optionen:
${options}

Beispiele:
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
      "  -u | --username  Benutzername für ${software_title} festlegen (erforderlich)
  -d | --domain    Domain für ${software_title} festlegen
  --beta           Beta-Version von ${software_title} installieren" \
      "  qb install ${software_help_name} -u username -d '${software_help_name}.domain.com'
  qb reinstall ${software_help_name} -u username -d '${software_help_name}.domain.com'
  qb install ${software_help_name} -u username --beta
  qb reinstall ${software_help_name} -u username --beta
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username

  ## Mehrere Optionen verwenden
  qb install ${software_help_name} -u username -d '${software_help_name}.domain.com' --beta
  qb reinstall ${software_help_name} -u username -d '${software_help_name}.domain.com' --beta" \
      "
Hinweise:
  - Bei Installation oder Neuinstallation mit der Domain-Option wird der Nginx Reverse Proxy automatisch konfiguriert.
      * Stellen Sie sicher, dass die Domain auf die IP-Adresse des Servers zeigt und die entsprechenden DNS-Einträge gesetzt sind."
    ;;

  mylar3)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u   | --username             Benutzername für ${software_title} festlegen (erforderlich)
  -clp | --comic-location-path  Pfad für Comics festlegen (Standard: /home/username/Media/Comics)" \
      "  qb install ${software_help_name} -u username -clp '/pfad/zu/comics'
  qb reinstall ${software_help_name} -u username -clp '/pfad/zu/comics'
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username" \
      ""
    ;;

  radarr | sonarr)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username  Benutzername für ${software_title} festlegen (erforderlich)
  --4k             Build-Installation für 4k festlegen (Standard: 1080p)
  --nightly        Build-Installation auf dem Nightly-Branch festlegen (Standard: latest)" \
      "  qb install ${software_help_name} -u username              # Standard-Installation (1080p) installieren
  qb install ${software_help_name} -u username --4k         # 4k-Installation installieren
  qb reinstall ${software_help_name} -u username --nightly  # Nightly-Installation neu installieren
  qb reinstall ${software_help_name} -u username --4k       # 4k-Installation neu installieren
  qb remove ${software_help_name} -u username               # Standard-Installation (1080p) entfernen
  qb remove ${software_help_name} -u username --4k          # 4k-Installation entfernen
  qb update ${software_help_name} -u username               # Standard-Installation (1080p) aktualisieren
  qb update ${software_help_name} -u username --4k          # 4k-Installation aktualisieren

  ## Mehrere Optionen verwenden
  qb install ${software_help_name} -u username --4k --nightly    # 4k-Installation auf dem Nightly-Branch installieren
  qb reinstall ${software_help_name} -u username --4k --nightly  # 4k-Installation auf dem Nightly-Branch neu installieren
  qb update ${software_help_name} -u username --4k --nightly     # 4k-Installation auf oder zu Nightly aktualisieren" \
      ""
    ;;

  calibre | kavita)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u  | --username      Benutzername für ${software_title} festlegen (erforderlich)
  -lp | --library-path  Pfad für Ihre Bibliothek festlegen (Standard: /home/username/.config/${software_title}/library)" \
      "  qb install ${software_help_name} -u username -lp '/pfad/zu/bibliothek'
  qb reinstall ${software_help_name} -u username -lp '/pfad/zu/bibliothek'
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username" \
      ""
    ;;

  plex)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u   | --username          Benutzername für ${software_title} festlegen (erforderlich)
  -pct | --plex-claim-token  Plex Claim Token für ${software_title} festlegen (erforderlich für schnelles Claiming)
  -d   | --domain            Domain für ${software_title} festlegen
  -D   | --data-dir          Datenverzeichnis für ${software_title} festlegen (Standard: /home/username/.config/'Plex Media Server')" \
      "  qb install ${software_help_name} -u username -pct 'claim_token' -d 'plex.domain.com' -D '/pfad/zu/daten'
  qb reinstall ${software_help_name} -u username -pct 'claim_token' -d 'plex.domain.com' -D '/pfad/zu/daten'
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username" \
      "
Hinweise:
  - Der Plex Claim Token kann von folgendem abgerufen werden:
      https://www.plex.tv/claim/

  - Vermeiden Sie es, das Datenverzeichnis auf ein bestehendes Verzeichnis zu setzen, wie:
      /opt, /opt/username, /mnt, /home, /home/username, und so weiter.

  - Es ist sicher, ein neues Datenverzeichnis innerhalb bestehender Verzeichnisse zu erstellen, wie:
      /opt/plex, /opt/username/plex, /mnt/plex, /data/plex, und so weiter.

  - Das Datenverzeichnis wird erstellt, falls es nicht existiert.

  - Das Datenverzeichnis wird dem Benutzer und der Gruppe des Benutzernamens gehören.

  - Bei Installation oder Neuinstallation mit der Domain-Option wird der Nginx Reverse Proxy automatisch konfiguriert.
      * Stellen Sie sicher, dass die Domain auf die IP-Adresse des Servers zeigt und die entsprechenden DNS-Einträge gesetzt sind.

  - Beim Aktualisieren werden Sie aufgefordert, Ihre plex.tv E-Mail, Ihr Passwort sowie den 2FA-Code einzugeben."
    ;;

  bazarr)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username  Benutzername für ${software_title} festlegen (erforderlich)
  --4k             Build-Installation für 4k festlegen (Standard: 1080p)" \
      "  qb install ${software_help_name} -u username                 # Standard-Installation (1080p) installieren
  qb install ${software_help_name} -u username --4k            # 4k-Installation installieren
  qb reinstall ${software_help_name} -u username               # Standard-Installation (1080p) neu installieren
  qb reinstall ${software_help_name} -u username --4k          # 4k-Installation neu installieren
  qb remove ${software_help_name} -u username                  # Standard-Installation (1080p) entfernen
  qb remove ${software_help_name} -u username --4k             # 4k-Installation entfernen
  qb update ${software_help_name} -u username                  # Standard-Installation (1080p) aktualisieren
  qb update ${software_help_name} -u username --4k             # 4k-Installation aktualisieren" \
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
      "  -u  | --username    Benutzername für ${software_title} festlegen (erforderlich)
  -mp | --media-path  Medienpfad für ${software_title} festlegen (Standard: /home/username/Media)
  -o 'deluge'         ${software_title} mit Deluge-Integration installieren
  -o 'nzbget'         ${software_title} mit NZBGet-Integration installieren
  -o 'rtorrent'       ${software_title} mit rTorrent-Integration installieren
  -o 'sabnzbd'        ${software_title} mit SABnzbd-Integration installieren" \
      "  qb install ${software_help_name} -u username
  qb reinstall ${software_help_name} -u username
  qb remove ${software_help_name} -u username

  ## Mehrere Optionen verwenden
  qb install ${software_help_name} -u username -o 'deluge' -o 'nzbget'
  qb reinstall ${software_help_name} -u username -o 'rtorrent' -o 'sabnzbd'" \
      ""
    ;;

  jdownloader)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u  | --username       Benutzername für ${software_title} festlegen (erforderlich)
  -e  | --email          E-Mail für ${software_title} festlegen (erforderlich) .i.
  -p  | --password       Passwort für ${software_title} festlegen (erforderlich) .ii.
  -D  | --downloads-dir  Downloads-Verzeichnis für ${software_title} festlegen (Standard: /home/username/Downloads)" \
      "  qb install ${software_help_name} -u username -e 'email' -p 'password' -D '/pfad/zu/downloads'
  qb reinstall ${software_help_name} -u username -e 'email' -p 'password' -D '/pfad/zu/downloads'
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username" \
      "
Hinweise:
  - .i. Die E-Mail und das Passwort sind für die JDownloader-Installation erforderlich.
      * .ii. Dies sind die Anmeldeinformationen für Ihr MyJDownloader-Konto."
    ;;

  jellyseerr | komga | overseerr)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u  | --username  Benutzername für ${software_title} festlegen (erforderlich)
  -d  | --domain    Domain für ${software_title} festlegen" \
      "  qb install ${software_help_name} -u username -d '${software_help_name}.domain.com'
  qb reinstall ${software_help_name} -u username -d '${software_help_name}.domain.com'
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username" \
      "
Hinweise:
  - Bei Installation oder Neuinstallation mit der Domain [-d] Option wird der Nginx Reverse Proxy automatisch konfiguriert.
      * Stellen Sie sicher, dass die Domain auf die IP-Adresse des Servers zeigt und die entsprechenden DNS-Einträge gesetzt sind."
    ;;

  lecert)
    has_update=0
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  --dash          Zertifikat für die mit '-d' angegebene Domain erstellen und einen Reverse Proxy für das QuickBox Dashboard konfigurieren
  --no-dash       Zertifikat für eine mit '-d' angegebene benutzerdefinierte Domain erstellen (nur Zertifikat, kein Reverse Proxy)
  --emby          Zertifikat für die mit '-d' angegebene Domain erstellen und einen Reverse Proxy für Emby konfigurieren
  --jellyfin      Zertifikat für die mit '-d' angegebene Domain erstellen und einen Reverse Proxy für Jellyfin konfigurieren
  --jellyseerr    Zertifikat für die mit '-d' angegebene Domain erstellen und einen Reverse Proxy für Jellyseerr konfigurieren
  --komga         Zertifikat für die mit '-d' angegebene Domain erstellen und einen Reverse Proxy für Komga konfigurieren
  --overseerr     Zertifikat für die mit '-d' angegebene Domain erstellen und einen Reverse Proxy für Overseerr konfigurieren
  --plex          Zertifikat für die mit '-d' angegebene Domain erstellen und einen Reverse Proxy für Plex konfigurieren

  Herausforderungsmethoden:
  --dns           DNS-Herausforderung anstelle der HTTP-Herausforderung verwenden (Wildcard-Zertifikate ermöglichen)
  --dns-provider  DNS-Provider für DNS-Herausforderung
                  Unterstützte Anbieter: cloudflare (cf), route53, godaddy, namecheap, digitalocean (do),
                  linode, ovh, vultr, gandi, dnsimple, hurricane (he), azure, gcp, ionos

  Domain-Optionen:
  -d  | --domain  Domain für ${software_title} festlegen (unterstützt Wildcards mit DNS-Herausforderung)" \
      "  # Standard-HTTP-Herausforderungsbeispiele
  qb install ${software_help_name} --dash -d 'example.com'
  qb install ${software_help_name} --jellyfin -d 'jellyfin.example.com' --plex -d 'plex.example.com'

  # DNS-Herausforderungsbeispiele (für Wildcard-Zertifikate)
  qb install ${software_help_name} --dash -d '*.example.com' --dns --dns-provider cloudflare
  qb install ${software_help_name} --jellyseerr -d '*.movies.example.com' --dns --dns-provider route53
  qb install ${software_help_name} --plex -d '*.media.example.com' --dns --dns-provider vultr
  qb install ${software_help_name} --komga -d '*.books.example.com' --dns --dns-provider gandi

  # Mehrere Domains in einem Befehl
  qb install ${software_help_name} --dash -d 'example.com' --overseerr -d 'requests.example.com'

  # Zertifikatsverwaltung
  qb reinstall ${software_help_name} --plex -d 'plex.example.com' --dns --dns-provider godaddy
  qb remove ${software_help_name} --emby -d 'emby.example.com'
  qb renew ${software_help_name} -d 'domain1.com' -d 'domain2.com'" \
      "
DNS-Herausforderungs-Setup:
  Konfigurieren Sie die Anmeldeinformationen Ihres DNS-Providers über eine dieser Methoden:

  Methode 1 - QuickBox Dashboard (empfohlen):
    Navigieren Sie im QuickBox Web-Dashboard zu SSL-Steuerung
    Wählen Sie DNS-Herausforderung, wählen Sie Ihren Provider und geben Sie Anmeldeinformationen ein
    Das Dashboard speichert Anmeldeinformationen sicher für zukünftige Verwendung

  Methode 2 - CLI-Konfiguration:
    qb dns-credentials setup cloudflare
    Folgen Sie den interaktiven Anweisungen, um Ihre Anmeldeinformationen zu konfigurieren

  Methode 3 - Umgebungsvariablen (einmalige Verwendung):
    export CF_Token='your_cloudflare_api_token' && qb install lecert --dash -d '*.example.com' --dns --dns-provider cloudflare

  Anbieterspezifische Anmeldeinformationen:

  Cloudflare (empfohlen):
    export CF_Token='your_cloudflare_api_token'
    # ODER (Legacy-Methode)
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
    export GCP_SERVICE_ACCOUNT_JSON_FILE='/pfad/zu/service-account.json'

  IONOS:
    export IONOS_PREFIX='your_prefix'
    export IONOS_SECRET='your_secret'

Hauptmerkmale:
  • HTTP-Herausforderung: Standardmethode, erfordert Ports 80/443 zugänglich
  • DNS-Herausforderung: Für Wildcard-Zertifikate (*.domain.com) und eingeschränkte Netzwerke
  • Automatische Nginx Reverse Proxy-Konfiguration für unterstützte Anwendungen
  • Mehrfach-Domain-Zertifikatsinstallation in einem Befehl
  • Zertifikatserneuerung mit 'qb renew lecert'
  • Sichere Anmeldeinformationenspeicherung und Verwaltung

Anforderungen:
  • Domain muss auf die Server-IP-Adresse mit den entsprechenden DNS-Einträgen zeigen
  • Für DNS-Herausforderung: Validierte Anmeldeinformationen für den DNS-Provider müssen konfiguriert sein
  • Für Wildcard-Zertifikate: DNS-Herausforderung ist obligatorisch
  • Stellen Sie sicher, dass der Firewall HTTP (80) und HTTPS (443) für die HTTP-Herausforderung zulässt

Fehlerbehebung:
  • Prüfen Sie die DNS-Propagation: 'dig domain.com' oder 'nslookup domain.com'
  • Überprüfen Sie die Anmeldeinformationen: Verwenden Sie 'qb dns-credentials check [provider]' zum Überprüfen gespeicherter Anmeldeinformationen
  • Prüfen Sie das Zertifikatsstatus: Verwenden Sie 'qb dns-credentials status' zum Anzeigen installierter Zertifikate
  • Rate-Limits: Let's Encrypt hat Rate-Limits - vermeiden Sie zu viele Anfragen pro Stunde
  • Domänenvalidierung: Stellen Sie sicher, dass die Domäne korrekt in Ihrem DNS-Provider konfiguriert ist"
    ;;

  lidarr | readarr)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username  Benutzername für ${software_title} festlegen (erforderlich)
  --nightly        Build-Installation auf dem Nightly-Branch festlegen (Standard: latest)" \
      "  qb install ${software_help_name} -u username                 # Standard-Installation (latest) installieren
  qb install ${software_help_name} -u username --nightly       # Nightly-Installation installieren
  qb reinstall ${software_help_name} -u username               # Standard-Installation (latest) neu installieren
  qb reinstall ${software_help_name} -u username --nightly     # Nightly-Installation neu installieren
  qb remove ${software_help_name} -u username                  # Aktuelle Installation entfernen
  qb update ${software_help_name} -u username                  # Standard-Installation (latest) aktualisieren
  qb update ${software_help_name} -u username --nightly        # Auf oder von Nightly aktualisieren" \
      ""
    ;;

  ombi)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username          Benutzername für ${software_title} festlegen (erforderlich)
  --ombi2mysql             Ombi-Daten in MySQL migrieren
  --phmyadmin              phpMyAdmin für Ombi-Migration installieren
  --mysql-user=<username>  MySQL-Benutzername für Ombi-Migration festlegen (Standard: Benutzername mit -u Option)
  --mysql-pass=<password>  MySQL-Passwort für Ombi-Migration festlegen (Standard: zufällig generiert)
  --mysql-host=<host>      MySQL-Host für Ombi-Migration festlegen (Standard: localhost)
  --mysql-port=<port>      MySQL-Port für Ombi-Migration festlegen (Standard: 3306)
  --mysql-db=<database>    MySQL-Datenbank für Ombi-Migration festlegen (Standard: Ombi)" \
      "  qb install ${software_help_name} -u username
  qb reinstall ${software_help_name} -u username
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username --ombi2mysql --phpmyadmin" \
      "
Hinweise:
  - Die --ombi2mysql Option migriert Ombi-Daten in MySQL.
    * Dies erfordert die Angabe des MySQL-Benutzernamens, -Passworts, -Hosts, -Ports und -Datenbank.
    * Falls keine angegeben sind, werden die Standardwerte verwendet:
      - MySQL-Benutzer: Benutzername (aus -u Option)
      - MySQL-Passwort: Zufällig generiertes Passwort
      - MySQL-Host: localhost
      - MySQL-Port: 3306
      - MySQL-Datenbank: Ombi

  - Die --phpmyadmin Option installiert phpMyAdmin für die Ombi-Migration.
    * Dies erlaubt Ihnen, die MySQL-Datenbank für Ombi über die /phpMyAdmin WebUI zu verwalten.
  - Die --mysql-user, --mysql-pass, --mysql-host, --mysql-port, und --mysql-db Optionen sind optional.
    * Falls angegeben, überschreiben sie die Standardwerte.

  - Ombi wird mit SQLite-Unterstützung standardmäßig installiert.
  - MySQL-Unterstützung ist nur bei Verwendung der --ombi2mysql Option beim Aktualisierungsprozess verfügbar."
    ;;

  phpmyadmin)
    has_update=0
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username  Benutzername für ${software_title} festlegen (erforderlich)
  --pma-user       phpMyAdmin-Benutzername festlegen (Standard: Benutzername mit -u Option)
  --pma-pass       phpMyAdmin-Passwort festlegen (Standard: zufällig generiert)
  --pma-host       phpMyAdmin-Host festlegen (Standard: localhost)" \
      "  qb install ${software_help_name} -u username --pma-user 'pma_user' --pma-pass 'pma_pass' --pma-host 'localhost'
  qb reinstall ${software_help_name} -u username --pma-user 'pma_user' --pma-pass 'pma_pass' --pma-host 'localhost'
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username" \
      "
Hinweise:
  - Der phpMyAdmin-Benutzername und das Passwort sind optional.
    * Falls nicht angegeben, werden die Standardwerte verwendet:
      - phpMyAdmin-Benutzer: Benutzername (aus -u Option)
      - phpMyAdmin-Passwort: Zufällig generiertes Passwort
      - phpMyAdmin-Host: localhost"
    ;;

  quota)
    has_update=0
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -qm | --quota-mount  System-Mountpunkt für ${software_title} festlegen (erforderlich)" \
      "  qb install ${software_help_name} -qm '/pfad/zu/mount/punkt'
  qb reinstall ${software_help_name} -qm '/pfad/zu/mount/punkt'
  qb remove ${software_help_name}" \
      ""
    ;;

  rclone)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username  Benutzername für ${software_title} festlegen (erforderlich)
  --dropbox        ${software_title} mit Dropbox-Integration installieren
  --gdrive         ${software_title} mit Google Drive-Integration installieren
  --encrypted      ${software_title} mit Verschlüsselung installieren
  --beta           Beta-Version von ${software_title} installieren" \
      "  qb install ${software_help_name} -u username --dropbox
  qb install ${software_help_name} -u username --beta --gdrive
  qb reinstall ${software_help_name} -u username --dropbox --encrypted
  qb reinstall ${software_help_name} -u username --gdrive
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username" \
      "
Hinweise:
  - Es wird empfohlen, entweder die --dropbox oder die --gdrive Option bei einer einzelnen Installationsdurchführung zu verwenden.
     * Dies verhindert Konflikte mit der rclone-Konfiguration.

  - Bei Installation mit der --dropbox oder --gdrive Option wird die rclone-Konfiguration automatisch erstellt.

  - Bei Installation mit der --encrypted Option wird die rclone-Konfiguration mit den angegebenen Informationen verschlüsselt.

  - Bei Installation mit der --beta Option wird die Beta-Version von rclone installiert."
    ;;

  requestrr | vpn)
    has_update=0
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username  Benutzername für ${software_title} festlegen (erforderlich)" \
      "  qb install ${software_help_name} -u username
  qb reinstall ${software_help_name} -u username
  qb remove ${software_help_name} -u username" \
      ""
    ;;

  rtorrent)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username    Benutzername für ${software_title} festlegen (erforderlich)
  -o '0.15.1'        Version 0.15.1 installieren
  -o '0.10.0'        Version 0.10.0 installieren
  -o '0.9.8'         Version 0.9.8 installieren
  -o '0.9.7'         Version 0.9.7 installieren
  -o '0.9.6'         Version 0.9.6 installieren
  -o 'feature-bind'  Feature-bind Version von ${software_title} installieren" \
      "  qb install ${software_help_name} -u username -o '0.15.1'
  qb install ${software_help_name} -u username -o '0.10.0'
  qb install ${software_help_name} -u username -o '0.9.8'
  qb install ${software_help_name} -u username -o '0.9.7'
  qb reinstall ${software_help_name} -u username -o '0.9.6'
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username -o '0.15.1'
  qb update ${software_help_name} -u username -o 'feature-bind'" \
      "
Hinweise:
  - rTorrent ist eine global installierte Anwendung und steht allen Benutzern auf dem Server zur Verfügung.

  - Die Feature-bind Version von rTorrent ist eine benutzerdefinierte Build, die die Bind-Funktion enthält.
     * Die Bind-Funktion ermöglicht es Ihnen, rTorrent an eine bestimmte IP-Adresse zu binden."
    ;;

  rutorrent)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username    Benutzername für ${software_title} festlegen (erforderlich)
  --beta             Beta-Version von ${software_title} installieren" \
      "  qb install ${software_help_name} -u username
  qb reinstall ${software_help_name} -u username
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username --beta" \
      "
Hinweise:
  - ruTorrent ist eine global installierte Anwendung und steht allen Benutzern auf dem Server zur Verfügung.

  - ruTorrent ist Teil des rTorrent-Installationsprozesses, und wenn rTorrent installiert ist,
    wird ruTorrent mit der neuesten Version installiert. Falls rTorrent nicht installiert ist,
    wird ruTorrent Version 0.9.8 installiert.

  - rutorrent wird mit der neuesten Version installiert. Falls Sie die Beta-Version installieren möchten,
	verwenden Sie die --beta Option. Beachten Sie, dass die beiden Versionen nicht immer unterschiedlich sind."
    ;;

  sabnzbd | thelounge | xteve)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username  Benutzername für ${software_title} festlegen (erforderlich)
  --beta           Beta-Version von ${software_title} installieren" \
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
      "  -u | --username  Benutzername für ${software_title} festlegen (erforderlich)
  --v4             Version 4 von ${software_title} (Standard: Version 3)" \
      "  qb install ${software_help_name} -u username --v4
  qb reinstall ${software_help_name} -u username --v4
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username --v4" \
      ""
    ;;

  wireguard)
    has_update=0
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username              Benutzername für ${software_title} festlegen (erforderlich)
  -o [client|server]           WireGuard als Client oder Server installieren
  -cai  | --client-allowed-ip  Erlaubte IP für den WireGuard-Server festlegen
  -cidr | --cidr               CIDR für den WireGuard-Server festlegen (Standard: 10.5.0.2/16)
  -dns  | --dns                DNS für den WireGuard-Server festlegen (Standard: 1.1.1.1)
  -ep   | --endpoint           Endpunkt für den WireGuard-Server festlegen
  -lp   | --listen-port        Listenport für den WireGuard-Server festlegen (Standard: 51820)
  -noc  | --number-of-clients  Anzahl der Clients für den WireGuard-Server festlegen
  -pdr  | --postdown-rule      Post-Down-Regel für den WireGuard-Server festlegen
  -pur  | --postup-rule        Post-Up-Regel für den WireGuard-Server festlegen" \
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
Hinweise:
  - Der WireGuard-Server wird mit dem Standard-CIDR von 10.5.0.2/16,
    DNS von 1.1.1.1, 1 Client-Konfiguration, und Listenport 51820 installiert.

  - Der WireGuard-Server wird mit den Standard-Post-Down- und Post-Up-Regeln installiert.
     * Die Post-Down-Regel entfernt die iptables-Regel für den WireGuard-Server.
	 * Die Post-Up-Regel fügt die iptables-Regel für den WireGuard-Server hinzu.

  - Die '-noc' Option gibt die Anzahl der zu erstellenden Konfigurationen an.
    Diese Konfigurationen werden in das '/srv/quickbox/db/wireguard' Verzeichnis gespeichert.

  - Die meisten VPN-Anbieter liefern eine Konfigurationsdatei für WireGuard.
    Falls Sie NordVPN verwenden, das keine Konfigurationsdatei direkt liefert,
    können Sie eine mit dem eingebauten NordVPN-Konfigurationsgenerator generieren.
    Weitere Informationen zum Generieren einer NordVPN-Konfigurationsdatei finden Sie unter: nvpn_conf_gen -h"
    ;;

  wsdashboard)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username  Benutzername für ${software_title} festlegen (erforderlich)" \
      "  qb install ${software_help_name} -u username     - WSD mit erweiterter Service-Konfiguration installieren
  qb reinstall ${software_help_name} -u username   - WSD mit erweiterter Service-Konfiguration neu installieren
  qb remove ${software_help_name} -u username      - WSD entfernen und alle Service-Dateien bereinigen
  qb update ${software_help_name} -u username      - WSD mit erweiterter Service-Konfiguration aktualisieren
  qb maintenance ${software_help_name} -u username - Service-Wartung und Gesundheitsprüfungen durchführen

SSL-Zertifikat-Management:
  qb ssl ${software_help_name} -u username         - SSL-Zertifikat-Symlinks für WSD-Service einrichten
  qb ssl-remove ${software_help_name} -u username  - SSL-Zertifikat-Symlinks entfernen
  qb ssl-update ${software_help_name} -u username  - SSL-Konfiguration für neue Zertifikate aktualisieren" \
      "
Erweiterte Funktionen:
  - Nicht-Root Service-Ausführung (www-data Benutzer)
  - Umfassende Sicherheits-Sandboxing
  - Ressourcenlimits und Überwachung
  - Automatische Gesundheitsprüfungen und Diagnose
  - Graceful Prozess-Management
  - Strukturiertes Logging und Überwachung
  - SSL-Zertifikat-Symlink-Management
  - Automatischer Zertifikat-Zugriff für www-data Benutzer

Service-Management:
  systemctl status qbwsd.service     - Service-Status überprüfen
  systemctl restart qbwsd.service    - Service neu starten
  journalctl -u qbwsd.service -f     - Live-Logs anzeigen
  qbwsd-health-check.sh --verbose    - Detaillierte Gesundheitsprüfung durchführen
  qbwsd-health-check.sh --fix        - Häufige Probleme automatisch beheben

SSL-Zertifikat-Management:
  - Automatische Symlink-Erstellung zu /srv/quickbox/ssl/domain/
  - Umgebungsvariablen-Konfiguration für Zertifikat-Pfade
  - Systemd-Override für SSL-Umgebungsvariablen
  - Zertifikat-Zugriffstest für www-data Benutzer
  - HTTPS/HTTP-Konnektivitätstest"
    ;;

  *)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username  Benutzername für ${software_title} festlegen (erforderlich)" \
      "  qb install ${software_help_name} -u username
  qb reinstall ${software_help_name} -u username
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username" \
      ""
    ;;
  esac
} 