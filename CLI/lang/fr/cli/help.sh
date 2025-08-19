#!/usr/bin/env bash
################################################################################
# Module de Messages d'Aide
# Contient toutes les fonctions de génération de texte d'aide et les messages d'aide spécifiques aux logiciels
################################################################################

# Fonction pour générer du texte d'aide basé sur les options fournies
generate_help_text() {
  local software_title="$1"
  local software_name="$2"
  local has_update="$3"
  local options="$4"
  local examples="$5"
  local notes="$6"

  local processes="  install    Installer ${software_title}
  reinstall  Réinstaller ${software_title}
  remove     Supprimer ${software_title}"

  if [[ ${has_update} == 1 ]]; then
    processes="${processes}
  update     Mettre à jour ${software_title}"
  fi

  processes="${processes}
  help       Afficher ce message d'aide"

  declare text="
Gestion des Logiciels QuickBox pour ${software_title}

Utilisation:
  qb [processus] ${software_name} [options]

Processus:
${processes}

Options:
${options}

Exemples:
${examples}
${notes}
"
  quickbox::dashboard::log "${text}"
}

# Fonction pour obtenir le texte d'aide pour un logiciel spécifique
quickbox::software::help() {
  local software_help_name="$1"
  local software_title="${software_help_name^}" # Capitaliser la première lettre
  local has_update

  case "${software_help_name}" in
  emby | jellyfin)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username  Définir le nom d'utilisateur pour ${software_title} (requis)
  -d | --domain    Définir le domaine pour ${software_title}
  --beta           Installer la version bêta de ${software_title}" \
      "  qb install ${software_help_name} -u username -d '${software_help_name}.domain.com'
  qb reinstall ${software_help_name} -u username -d '${software_help_name}.domain.com'
  qb install ${software_help_name} -u username --beta
  qb reinstall ${software_help_name} -u username --beta
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username

  ## Utiliser plusieurs options
  qb install ${software_help_name} -u username -d '${software_help_name}.domain.com' --beta
  qb reinstall ${software_help_name} -u username -d '${software_help_name}.domain.com' --beta" \
      "
Notes:
  - Lors de l'installation ou de la réinstallation avec l'option domaine, le proxy inverse Nginx sera configuré automatiquement.
      * Assurez-vous que le domaine pointe vers l'adresse IP du serveur et que les enregistrements DNS appropriés sont configurés."
    ;;

  mylar3)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u   | --username             Définir le nom d'utilisateur pour ${software_title} (requis)
  -clp | --comic-location-path  Définir le chemin d'emplacement pour les bandes dessinées (par défaut: /home/username/Media/Comics)" \
      "  qb install ${software_help_name} -u username -clp '/chemin/vers/bandes-dessinees'
  qb reinstall ${software_help_name} -u username -clp '/chemin/vers/bandes-dessinees'
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username" \
      ""
    ;;

  radarr | sonarr)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username  Définir le nom d'utilisateur pour ${software_title} (requis)
  --4k             Définir l'installation de build pour 4k (par défaut: 1080p)
  --nightly        Définir l'installation de build sur la branche nightly (par défaut: latest)" \
      "  qb install ${software_help_name} -u username              # Installer l'installation standard (1080p)
  qb install ${software_help_name} -u username --4k         # Installer l'installation 4k
  qb reinstall ${software_help_name} -u username --nightly  # Réinstaller l'installation nightly
  qb reinstall ${software_help_name} -u username --4k       # Réinstaller l'installation 4k
  qb remove ${software_help_name} -u username               # Supprimer l'installation standard (1080p)
  qb remove ${software_help_name} -u username --4k          # Supprimer l'installation 4k
  qb update ${software_help_name} -u username               # Mettre à jour l'installation standard (1080p)
  qb update ${software_help_name} -u username --4k          # Mettre à jour l'installation 4k

  ## Utiliser plusieurs options
  qb install ${software_help_name} -u username --4k --nightly    # Installer l'installation 4k sur la branche nightly
  qb reinstall ${software_help_name} -u username --4k --nightly  # Réinstaller l'installation 4k sur la branche nightly
  qb update ${software_help_name} -u username --4k --nightly     # Mettre à jour l'installation 4k sur ou vers nightly" \
      ""
    ;;

  calibre | kavita)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u  | --username      Définir le nom d'utilisateur pour ${software_title} (requis)
  -lp | --library-path  Définir le chemin d'emplacement pour votre bibliothèque (par défaut: /home/username/.config/${software_title}/library)" \
      "  qb install ${software_help_name} -u username -lp '/chemin/vers/bibliotheque'
  qb reinstall ${software_help_name} -u username -lp '/chemin/vers/bibliotheque'
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username" \
      ""
    ;;

  plex)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u   | --username          Définir le nom d'utilisateur pour ${software_title} (requis)
  -pct | --plex-claim-token  Définir le jeton de revendication Plex pour ${software_title} (requis pour la revendication rapide)
  -d   | --domain            Définir le domaine pour ${software_title}
  -D   | --data-dir          Définir le répertoire de données pour ${software_title} (par défaut: /home/username/.config/'Plex Media Server')" \
      "  qb install ${software_help_name} -u username -pct 'jeton_revendication' -d 'plex.domain.com' -D '/chemin/vers/donnees'
  qb reinstall ${software_help_name} -u username -pct 'jeton_revendication' -d 'plex.domain.com' -D '/chemin/vers/donnees'
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username" \
      "
Notes:
  - Le jeton de revendication Plex peut être obtenu depuis:
      https://www.plex.tv/claim/

  - Évitez de définir le répertoire de données sur un répertoire existant tel que:
      /opt, /opt/username, /mnt, /home, /home/username, et ainsi de suite.

  - Il est sûr de créer un nouveau répertoire de données dans des répertoires existants tels que:
      /opt/plex, /opt/username/plex, /mnt/plex, /data/plex, et ainsi de suite.

  - Le répertoire de données sera créé s'il n'existe pas.

  - Le répertoire de données sera détenu par l'utilisateur et le groupe du nom d'utilisateur.

  - Lors de l'installation ou de la réinstallation avec l'option domaine, le proxy inverse Nginx sera configuré automatiquement.
      * Assurez-vous que le domaine pointe vers l'adresse IP du serveur et que les enregistrements DNS appropriés sont configurés.

  - Lors de la mise à jour, vous serez invité à entrer votre email plex.tv, mot de passe, ainsi que le code 2FA."
    ;;

  bazarr)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username  Définir le nom d'utilisateur pour ${software_title} (requis)
  --4k             Définir l'installation de build pour 4k (par défaut: 1080p)" \
      "  qb install ${software_help_name} -u username                 # Installer l'installation standard (1080p)
  qb install ${software_help_name} -u username --4k            # Installer l'installation 4k
  qb reinstall ${software_help_name} -u username               # Réinstaller l'installation standard (1080p)
  qb reinstall ${software_help_name} -u username --4k          # Réinstaller l'installation 4k
  qb remove ${software_help_name} -u username                  # Supprimer l'installation standard (1080p)
  qb remove ${software_help_name} -u username --4k             # Supprimer l'installation 4k
  qb update ${software_help_name} -u username                  # Mettre à jour l'installation standard (1080p)
  qb update ${software_help_name} -u username --4k             # Mettre à jour l'installation 4k" \
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
      "  -u  | --username    Définir le nom d'utilisateur pour ${software_title} (requis)
  -mp | --media-path  Définir le chemin média pour ${software_title} (par défaut: /home/username/Media)
  -o 'deluge'         Installer ${software_title} avec l'intégration Deluge
  -o 'nzbget'         Installer ${software_title} avec l'intégration NZBGet
  -o 'rtorrent'       Installer ${software_title} avec l'intégration rTorrent
  -o 'sabnzbd'        Installer ${software_title} avec l'intégration SABnzbd" \
      "  qb install ${software_help_name} -u username
  qb reinstall ${software_help_name} -u username
  qb remove ${software_help_name} -u username

  ## Utiliser plusieurs options
  qb install ${software_help_name} -u username -o 'deluge' -o 'nzbget'
  qb reinstall ${software_help_name} -u username -o 'rtorrent' -o 'sabnzbd'" \
      ""
    ;;

  jdownloader)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u  | --username       Définir le nom d'utilisateur pour ${software_title} (requis)
  -e  | --email          Définir l'email pour ${software_title} (requis) .i.
  -p  | --password       Définir le mot de passe pour ${software_title} (requis) .ii.
  -D  | --downloads-dir  Définir le chemin de téléchargement pour ${software_title} (par défaut: /home/username/Downloads)" \
      "  qb install ${software_help_name} -u username -e 'email' -p 'mot_de_passe' -D '/chemin/vers/telechargements'
  qb reinstall ${software_help_name} -u username -e 'email' -p 'mot_de_passe' -D '/chemin/vers/telechargements'
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username" \
      "
Notes:
  - .i. L'email et le mot de passe sont requis pour l'installation JDownloader.
      * .ii. ce sont les identifiants de votre compte MyJDownloader."
    ;;

  jellyseerr | komga | overseerr)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u  | --username  Définir le nom d'utilisateur pour ${software_title} (requis)
  -d  | --domain    Définir le domaine pour ${software_title}" \
      "  qb install ${software_help_name} -u username -d '${software_help_name}.domain.com'
  qb reinstall ${software_help_name} -u username -d '${software_help_name}.domain.com'
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username" \
      "
Notes:
  - Lors de l'installation ou de la réinstallation avec l'option domaine [-d], le proxy inverse Nginx sera configuré automatiquement.
      * Assurez-vous que le domaine pointe vers l'adresse IP du serveur et que les enregistrements DNS appropriés sont configurés."
    ;;

  lecert)
    has_update=0
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  --dash          Installer un certificat pour le domaine spécifié avec '-d' et créer un proxy inverse pour le tableau de bord QuickBox
  --no-dash       Installer un certificat pour un domaine personnalisé spécifié avec '-d' (certificat seulement, pas de proxy inverse)
  --emby          Installer un certificat pour le domaine spécifié avec '-d' et créer un proxy inverse pour Emby
  --jellyfin      Installer un certificat pour le domaine spécifié avec '-d' et créer un proxy inverse pour Jellyfin
  --jellyseerr    Installer un certificat pour le domaine spécifié avec '-d' et créer un proxy inverse pour Jellyseerr
  --komga         Installer un certificat pour le domaine spécifié avec '-d' et créer un proxy inverse pour Komga
  --overseerr     Installer un certificat pour le domaine spécifié avec '-d' et créer un proxy inverse pour Overseerr
  --plex          Installer un certificat pour le domaine spécifié avec '-d' et créer un proxy inverse pour Plex

  Méthodes de Défi:
  --dns           Utiliser le défi DNS au lieu du défi HTTP (permet les certificats génériques)
  --dns-provider  Fournisseur DNS pour la validation du défi DNS
                  Fournisseurs pris en charge: cloudflare (cf), route53, godaddy, namecheap, digitalocean (do),
                  linode, ovh, vultr, gandi, dnsimple, hurricane (he), azure, gcp, ionos

  Options de Domaine:
  -d  | --domain  Définir le domaine pour ${software_title} (prend en charge les génériques avec le défi DNS)" \
      "  # Exemples de défi HTTP standard
  qb install ${software_help_name} --dash -d 'example.com'
  qb install ${software_help_name} --jellyfin -d 'jellyfin.example.com' --plex -d 'plex.example.com'

  # Exemples de défi DNS (pour les certificats génériques)
  qb install ${software_help_name} --dash -d '*.example.com' --dns --dns-provider cloudflare
  qb install ${software_help_name} --jellyseerr -d '*.movies.example.com' --dns --dns-provider route53
  qb install ${software_help_name} --plex -d '*.media.example.com' --dns --dns-provider vultr
  qb install ${software_help_name} --komga -d '*.books.example.com' --dns --dns-provider gandi

  # Domaines multiples dans une seule commande
  qb install ${software_help_name} --dash -d 'example.com' --overseerr -d 'requests.example.com'

  # Gestion des certificats
  qb reinstall ${software_help_name} --plex -d 'plex.example.com' --dns --dns-provider godaddy
  qb remove ${software_help_name} --emby -d 'emby.example.com'
  qb renew ${software_help_name} -d 'domain1.com' -d 'domain2.com'" \
      "
Configuration du Défi DNS:
  Configurez les identifiants de votre fournisseur DNS en utilisant l'une de ces méthodes:

  Méthode 1 - Tableau de Bord QuickBox (Recommandé):
    Naviguez vers Contrôle SSL dans le tableau de bord web QuickBox
    Sélectionnez Défi DNS, choisissez votre fournisseur et entrez les identifiants
    Le tableau de bord stockera les identifiants de manière sécurisée pour une utilisation future

  Méthode 2 - Configuration CLI:
    qb dns-credentials setup cloudflare
    Suivez les invites interactives pour configurer vos identifiants

  Méthode 3 - Variables d'Environnement (utilisation unique):
    export CF_Token='votre_jeton_api_cloudflare' && qb install lecert --dash -d '*.example.com' --dns --dns-provider cloudflare

  Identifiants spécifiques aux fournisseurs:

  Cloudflare (Recommandé):
    export CF_Token='votre_jeton_api_cloudflare'
    # OU (méthode legacy)
    export CF_Email='votre@email.com'
    export CF_Key='votre_cle_api_globale'

  AWS Route53:
    export AWS_ACCESS_KEY_ID='votre_cle_acces'
    export AWS_SECRET_ACCESS_KEY='votre_cle_secrete'

  GoDaddy:
    export GD_Key='votre_cle_api'
    export GD_Secret='votre_secret_api'

  NameCheap:
    export Namecheap_Username='votre_nom_utilisateur'
    export Namecheap_ApiKey='votre_cle_api'

  DigitalOcean:
    export DO_API_KEY='votre_jeton_api'

  Linode:
    export LINODE_V4_API_KEY='votre_cle_api'

  OVH:
    export OVH_AK='votre_cle_application'
    export OVH_AS='votre_secret_application'
    export OVH_CK='votre_cle_consommateur'

  Vultr:
    export VULTR_API_KEY='votre_cle_api'

  Gandi:
    export GANDI_LIVEDNS_KEY='votre_cle_api'

  DNSimple:
    export DNSimple_OAUTH_TOKEN='votre_jeton_oauth'

  Hurricane Electric (he):
    export HE_Username='votre_nom_utilisateur'
    export HE_Password='votre_mot_de_passe'

  Microsoft Azure:
    export AZUREDNS_SUBSCRIPTIONID='votre_id_abonnement'
    export AZUREDNS_TENANTID='votre_id_tenant'
    export AZUREDNS_APPID='votre_id_app'
    export AZUREDNS_CLIENTSECRET='votre_secret_client'

  Google Cloud Platform:
    export GCP_PROJECT='votre_id_projet'
    export GCP_SERVICE_ACCOUNT_JSON_FILE='/chemin/vers/compte-service.json'

  IONOS:
    export IONOS_PREFIX='votre_prefix'
    export IONOS_SECRET='votre_secret'

Fonctionnalités Clés:
  • Défi HTTP: Méthode par défaut, nécessite les ports 80/443 accessibles
  • Défi DNS: Pour les certificats génériques (*.domain.com) et les réseaux restreints
  • Configuration automatique du proxy inverse Nginx pour les applications prises en charge
  • Installation de certificats multi-domaines dans une seule commande
  • Renouvellement de certificat avec 'qb renew lecert'
  • Stockage et gestion sécurisés des identifiants

Exigences:
  • Le domaine doit pointer vers l'adresse IP du serveur avec les enregistrements DNS appropriés
  • Pour le défi DNS: Des identifiants de fournisseur DNS valides doivent être configurés
  • Pour les certificats génériques: Le défi DNS est obligatoire
  • Assurez-vous que le pare-feu autorise le trafic HTTP (80) et HTTPS (443) pour le défi HTTP

Dépannage:
  • Vérifier la propagation DNS: 'dig domain.com' ou 'nslookup domain.com'
  • Vérifier les identifiants: Utilisez 'qb dns-credentials check [fournisseur]' pour vérifier les identifiants stockés
  • Vérifier le statut du certificat: Utilisez 'qb dns-credentials status' pour voir les certificats installés
  • Limites de taux: Let's Encrypt a des limites de taux - évitez trop de demandes par heure
  • Validation de domaine: Assurez-vous que le domaine est correctement configuré dans votre fournisseur DNS"
    ;;

  lidarr | readarr)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username  Définir le nom d'utilisateur pour ${software_title} (requis)
  --nightly        Définir l'installation de build sur la branche nightly (par défaut: latest)" \
      "  qb install ${software_help_name} -u username                 # Installer l'installation par défaut (latest)
  qb install ${software_help_name} -u username --nightly       # Installer l'installation nightly
  qb reinstall ${software_help_name} -u username               # Réinstaller l'installation par défaut (latest)
  qb reinstall ${software_help_name} -u username --nightly     # Réinstaller l'installation nightly
  qb remove ${software_help_name} -u username                  # Supprimer l'installation actuelle
  qb update ${software_help_name} -u username                  # Mettre à jour l'installation par défaut (latest)
  qb update ${software_help_name} -u username --nightly        # Mettre à jour vers/depuis l'installation nightly" \
      ""
    ;;

  ombi)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username          Définir le nom d'utilisateur pour ${software_title} (requis)
  --ombi2mysql             Migrer les données Ombi vers MySQL
  --phmyadmin              Installer phpMyAdmin pour la migration Ombi
  --mysql-user=<username>  Définir le nom d'utilisateur MySQL pour la migration Ombi (par défaut: nom d'utilisateur spécifié avec -u)
  --mysql-pass=<password>  Définir le mot de passe MySQL pour la migration Ombi (par défaut: généré aléatoirement)
  --mysql-host=<host>      Définir l'hôte MySQL pour la migration Ombi (par défaut: localhost)
  --mysql-port=<port>      Définir le port MySQL pour la migration Ombi (par défaut: 3306)
  --mysql-db=<database>    Définir la base de données MySQL pour la migration Ombi (par défaut: Ombi)" \
      "  qb install ${software_help_name} -u username
  qb reinstall ${software_help_name} -u username
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username --ombi2mysql --phpmyadmin" \
      "
Notes:
  - L'option --ombi2mysql migrera les données Ombi vers MySQL.
    * Cela nécessite que le nom d'utilisateur, mot de passe, hôte, port et base de données MySQL soient spécifiés.
    * Si aucun n'est spécifié, les valeurs par défaut seront utilisées:
      - Utilisateur MySQL: Nom d'utilisateur (de l'option -u)
      - Mot de passe MySQL: Mot de passe généré aléatoirement
      - Hôte MySQL: localhost
      - Port MySQL: 3306
      - Base de données MySQL: Ombi

  - L'option --phpmyadmin installera phpMyAdmin pour la migration Ombi.
    * Cela vous permettra de gérer la base de données MySQL pour Ombi via l'interface web /phpMyAdmin.
  - Les options --mysql-user, --mysql-pass, --mysql-host, --mysql-port et --mysql-db sont optionnelles.
    * Si spécifiées, elles remplaceront les valeurs par défaut.

  - Ombi est installé avec le support SQLite par défaut.
  - Le support MySQL n'est disponible que lors de l'utilisation de l'option --ombi2mysql sur le processus de mise à jour."
    ;;

  phpmyadmin)
    has_update=0
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username  Définir le nom d'utilisateur pour ${software_title} (requis)
  --pma-user       Définir le nom d'utilisateur phpMyAdmin (par défaut: nom d'utilisateur spécifié avec -u)
  --pma-pass       Définir le mot de passe phpMyAdmin (par défaut: généré aléatoirement)
  --pma-host       Définir l'hôte phpMyAdmin (par défaut: localhost)" \
      "  qb install ${software_help_name} -u username --pma-user 'pma_user' --pma-pass 'pma_pass' --pma-host 'localhost'
  qb reinstall ${software_help_name} -u username --pma-user 'pma_user' --pma-pass 'pma_pass' --pma-host 'localhost'
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username" \
      "
Notes:
  - Le nom d'utilisateur et le mot de passe phpMyAdmin sont optionnels.
    * Si non spécifiés, les valeurs par défaut seront utilisées:
      - Utilisateur phpMyAdmin: Nom d'utilisateur (de l'option -u)
      - Mot de passe phpMyAdmin: Mot de passe généré aléatoirement
      - Hôte phpMyAdmin: localhost"
    ;;

  quota)
    has_update=0
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -qm | --quota-mount  Définir le point de montage système pour ${software_title} (requis)" \
      "  qb install ${software_help_name} -qm '/chemin/vers/point/montage'
  qb reinstall ${software_help_name} -qm '/chemin/vers/point/montage'
  qb remove ${software_help_name}" \
      ""
    ;;

  rclone)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username  Définir le nom d'utilisateur pour ${software_title} (requis)
  --dropbox        Installer ${software_title} avec l'intégration Dropbox
  --gdrive         Installer ${software_title} avec l'intégration Google Drive
  --encrypted      Installer ${software_title} avec le chiffrement
  --beta           Installer la version bêta de ${software_title}" \
      "  qb install ${software_help_name} -u username --dropbox
  qb install ${software_help_name} -u username --beta --gdrive
  qb reinstall ${software_help_name} -u username --dropbox --encrypted
  qb reinstall ${software_help_name} -u username --gdrive
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username" \
      "
Notes:
  - Il est recommandé d'utiliser soit l'option --dropbox soit --gdrive sur une seule passe d'installation.
     * Cela empêchera tout conflit avec la configuration rclone.

  - Lors de l'installation avec l'option --dropbox ou --gdrive, la configuration rclone sera créée automatiquement.

  - Lors de l'installation avec l'option --encrypted, la configuration rclone sera chiffrée en utilisant les informations spécifiées.

  - Lors de l'installation avec l'option --beta, la version bêta de rclone sera installée."
    ;;

  requestrr | vpn)
    has_update=0
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username  Définir le nom d'utilisateur pour ${software_title} (requis)" \
      "  qb install ${software_help_name} -u username
  qb reinstall ${software_help_name} -u username
  qb remove ${software_help_name} -u username" \
      ""
    ;;

  rtorrent)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username    Définir le nom d'utilisateur pour ${software_title} (requis)
  -o '0.15.1'        Installer la version 0.15.1
  -o '0.10.0'        Installer la version 0.10.0
  -o '0.9.8'         Installer la version 0.9.8
  -o '0.9.7'         Installer la version 0.9.7
  -o '0.9.6'         Installer la version 0.9.6
  -o 'feature-bind'  Installer la version feature-bind de ${software_title}" \
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
  - rTorrent est une application installée globalement et sera disponible pour tous les utilisateurs sur le serveur.

  - La version feature-bind de rTorrent est une compilation personnalisée qui inclut la fonctionnalité bind.
     * La fonctionnalité bind vous permet de lier rTorrent à une adresse IP spécifique."
    ;;

  rutorrent)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username    Définir le nom d'utilisateur pour ${software_title} (requis)
  --beta             Installer la version bêta de ${software_title}" \
      "  qb install ${software_help_name} -u username
  qb reinstall ${software_help_name} -u username
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username --beta" \
      "
Notes:
  - ruTorrent est une application installée globalement et sera disponible pour tous les utilisateurs sur le serveur.

  - ruTorrent fait partie du processus d'installation rTorrent, et lors de l'installation de rTorrent
    ruTorrent sera installé avec la dernière version par défaut. Si rTorrent n'est pas installé,
    alors ruTorrent installera la version 0.9.8.

  - rutorrent sera installé avec la dernière version par défaut. Si vous souhaitez installer la version bêta,
	vous pouvez utiliser l'option --beta. Gardez à l'esprit que les deux versions ne sont pas toujours différentes."
    ;;

  sabnzbd | thelounge | xteve)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username  Définir le nom d'utilisateur pour ${software_title} (requis)
  --beta           Installer la version bêta de ${software_title}" \
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
      "  -u | --username  Définir le nom d'utilisateur pour ${software_title} (requis)
  --v4             Installer la version 4 de ${software_title} (par défaut: version 3)" \
      "  qb install ${software_help_name} -u username --v4
  qb reinstall ${software_help_name} -u username --v4
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username --v4" \
      ""
    ;;

  wireguard)
    has_update=0
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username              Définir le nom d'utilisateur pour ${software_title} (requis)
  -o [client|server]           Installer WireGuard comme client ou serveur
  -cai  | --client-allowed-ip  Définir l'IP autorisée pour le serveur WireGuard
  -cidr | --cidr               Définir le CIDR pour le serveur WireGuard (par défaut: 10.5.0.2/16)
  -dns  | --dns                Définir le DNS pour le serveur WireGuard (par défaut: 1.1.1.1)
  -ep   | --endpoint           Définir l'endpoint pour le serveur WireGuard
  -lp   | --listen-port        Définir le port d'écoute pour le serveur WireGuard (par défaut: 51820)
  -noc  | --number-of-clients  Définir le nombre de clients pour le serveur WireGuard
  -pdr  | --postdown-rule      Définir la règle post-down pour le serveur WireGuard
  -pur  | --postup-rule        Définir la règle post-up pour le serveur WireGuard" \
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
  - Le serveur WireGuard sera installé avec le CIDR par défaut de 10.5.0.2/16,
    DNS de 1.1.1.1, 1 configuration client, et port d'écoute de 51820.

  - Le serveur WireGuard sera installé avec les règles post-down et post-up par défaut.
     * La règle post-down supprimera la règle iptables pour le serveur WireGuard.
	 * La règle post-up ajoutera la règle iptables pour le serveur WireGuard.

  - L'option '-noc' spécifie le nombre de clients pour lesquels créer des configurations.
    Ces configurations seront sauvegardées dans le répertoire '/srv/quickbox/db/wireguard'.

  - La plupart des fournisseurs VPN fournissent un fichier de configuration pour WireGuard.
    Si vous utilisez NordVPN, qui ne fournit pas directement un fichier de configuration,
    vous pouvez en générer un en utilisant le générateur de configuration NordVPN inclus.
    Pour plus d'informations sur la génération d'un fichier de configuration NordVPN,
    utilisez la commande: nvpn_conf_gen -h"
    ;;

  wsdashboard)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username  Définir le nom d'utilisateur pour ${software_title} (requis)" \
      "  qb install ${software_help_name} -u username     - Installer WSD avec configuration de service améliorée
  qb reinstall ${software_help_name} -u username   - Réinstaller WSD avec configuration de service améliorée
  qb remove ${software_help_name} -u username      - Supprimer WSD et nettoyer tous les fichiers de service
  qb update ${software_help_name} -u username      - Mettre à jour WSD avec configuration de service améliorée
  qb maintenance ${software_help_name} -u username - Effectuer la maintenance du service et les contrôles de santé

Gestion des Certificats SSL:
  qb ssl ${software_help_name} -u username         - Configurer les liens symboliques de certificats SSL pour le service WSD
  qb ssl-remove ${software_help_name} -u username  - Supprimer les liens symboliques de certificats SSL
  qb ssl-update ${software_help_name} -u username  - Mettre à jour la configuration SSL pour les nouveaux certificats" \
      "
Fonctionnalités Améliorées:
  - Exécution du service sans privilèges root (utilisateur www-data)
  - Sandboxing de sécurité complet
  - Limites de ressources et surveillance
  - Contrôles de santé automatiques et diagnostics
  - Gestion gracieuse des processus
  - Journalisation et surveillance structurées
  - Gestion des liens symboliques de certificats SSL
  - Accès automatique aux certificats pour l'utilisateur www-data

Gestion du Service:
  systemctl status qbwsd.service     - Vérifier le statut du service
  systemctl restart qbwsd.service    - Redémarrer le service
  journalctl -u qbwsd.service -f     - Voir les logs en direct
  qbwsd-health-check.sh --verbose    - Exécuter un contrôle de santé détaillé
  qbwsd-health-check.sh --fix        - Corriger automatiquement les problèmes courants

Gestion des Certificats SSL:
  - Création automatique de liens symboliques vers /srv/quickbox/ssl/domain/
  - Configuration des variables d'environnement pour les chemins de certificats
  - Override systemd pour les variables d'environnement SSL
  - Test d'accès aux certificats pour l'utilisateur www-data
  - Test de connectivité HTTPS/HTTP"
    ;;

  *)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username  Définir le nom d'utilisateur pour ${software_title} (requis)" \
      "  qb install ${software_help_name} -u username
  qb reinstall ${software_help_name} -u username
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username" \
      ""
    ;;
  esac
} 