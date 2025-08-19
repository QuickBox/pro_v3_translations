#!/usr/bin/env bash
################################################################################
# Module de Messages de Configuration des Logiciels
# Contient tous les messages de configuration, de configuration et de gestion spéciale des logiciels
################################################################################

quickbox::lang::software::ombi_mysql_fallback() {
  declare text="[!] MySQL ne fonctionne pas ou n'est pas disponible, ignore la suppression de la base de données/utilisateur, déclenche le mode de secours..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_user_skip() {
  declare text="[i] Ignore la suppression de l'utilisateur MySQL: '${db_user}' est défini dans /root/.my.cnf"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_user_remove() {
  declare text="[!] Suppression de l'utilisateur MySQL: '${db_user}'"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_user_retain() {
  declare text="[i] Conservation de MySQL car d'autres bases de données ou utilisateurs peuvent encore exister."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_cleanup_complete() {
  declare text="[✓] Nettoyage MySQL pour ${software_name} terminé."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_fallback_remove() {
  declare text="[⚙] Exécution de la suppression MySQL de secours (non interactive)..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_remove() {
  declare text="[*] Suppression des paquets MySQL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_no_packages() {
  declare text="[i] Aucun paquet MySQL trouvé à purger."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_autoremove() {
  declare text="[*] Suppression automatique et nettoyage des fichiers résiduels..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_check() {
  declare text="[*] Vérification de l'installation MySQL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_install() {
  declare text="[*] Installation de la configuration du dépôt APT MySQL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_download_fail() {
  declare text="[✗] Échec du téléchargement de la configuration APT MySQL"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_install_fail() {
  declare text="[✗] Échec de l'installation du paquet mysql-apt-config"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_install_packages() {
  declare text="[*] Installation des paquets MySQL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_install_retry() {
  declare text="[✗] L'installation MySQL a échoué — nouvelle tentative après nettoyage"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_install_failed() {
  declare text="[✗] L'installation MySQL a échoué à nouveau"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_config() {
  declare text="[*] Création du fichier de configuration MySQL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_start() {
  declare text="[*] Démarrage et activation du service MySQL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_enable_fail() {
  declare text="[✗] Échec de l'activation du service MySQL"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_start_fail() {
  declare text="[✗] Échec du démarrage du service MySQL"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_config_fail() {
  declare text="[✗] La configuration MySQL /etc/mysql/my.cnf est manquante. Arrêt de la configuration."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_wait() {
  declare text="[*] Attente que le socket MySQL soit prêt..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_socket_fail() {
  declare text="[✗] MySQL ne s'est pas correctement démarré — socket manquant"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_setup() {
  declare text="[*] Configuration de l'utilisateur et de la base de données MySQL pour ${db_user}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_configured() {
  declare text="[✓] MySQL configuré pour l'utilisateur '${db_user}' avec la base de données '${db_name}'"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_migration() {
  declare text="[⚙] Démarrage de la migration Ombi vers MySQL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_temp_fail() {
  declare text="[✗] Échec de la création du répertoire temporaire"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_python_fail() {
  declare text="[✗] Python 3 et pip3 sont requis pour la migration"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_pip_fail() {
  declare text="[✗] Échec de l'installation des paquets Python requis"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_chdir_fail() {
  declare text="[✗] Échec du changement de répertoire vers ${TMP_DIR}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_clone() {
  declare text="[*] Clonage de l'outil de migration ombi_sqlite_mysql..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_clone_fail() {
  declare text="[✗] Échec du clonage du dépôt ombi_sqlite_mysql"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_backup() {
  declare text="[!] Sauvegarde de ${db} créée à ${config_dir}/${db}.bak"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_dbjson_fail() {
  declare text="[✗] Échec de la génération de database.json"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_schema_fail() {
  declare text="[✗] Échec de la création du schéma de base de données via Ombi"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_migration_fail() {
  declare text="[✗] Échec de la création de migration.json"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_data_fail() {
  declare text="[✗] La migration des données a échoué"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_chdir_home_fail() {
  declare text="[✗] Échec du changement de répertoire vers ${HOME}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_remove_sqlite() {
  declare text="[!] Ancienne base de données SQLite supprimée: ${config_dir}/${db}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_cleanup() {
  declare text="[*] Nettoyage des fichiers temporaires..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_migration_complete() {
  declare text="[✓] Migration d'Ombi vers MySQL terminée avec succès!"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plex_directory_warning() {
  declare text="le répertoire de données personnalisé: '${software_install_directory}' existe déjà.
utilisation de '${software_install_directory}/plex' à la place."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexclaim() {
  declare text="revendication du serveur plex pour ${username}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_credentials_header() {
  declare text="Veuillez entrer vos identifiants Plex (Nom d'utilisateur/Mot de passe/2FA):"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_credentials_subheader() {
  declare text="Ces identifiants ne seront pas sauvegardés ou partagés en dehors de cette instance."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_credentials_email() {
  declare text="Email: "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_credentials_password() {
  declare text="Mot de passe: "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_credentials_otp() {
  declare text="2FA: [Laissez vide si aucun 2FA configuré] "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_credentials_fail() {
  declare text="Le nom d'utilisateur et le mot de passe sont nécessaires pour télécharger la mise à jour PlexPass."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_credentials_incorrect() {
  declare text="Nom d'utilisateur et/ou mot de passe incorrect"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_credentials_loginfail() {
  declare text="Échec de la connexion, informations de débogage:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_credentials_retrievefail() {
  declare text="Impossible de récupérer l'URL de téléchargement."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_credentials_parsefail() {
  declare text="Échec de l'analyse de la réponse HTML."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_downloading() {
  declare text="Téléchargement de la mise à jour Plex..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_downloading_fail() {
  declare text="Le téléchargement a échoué avec le code d'erreur ${code}, ${error}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_installing() {
  declare text="Installation de la nouvelle version Plex..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_updated() {
  declare text="Plex a été mis à jour avec succès."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_current() {
  declare text="Plex est déjà à jour."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone_configure() {
  declare text="
Veuillez visiter https://console.developers.google.com et créer un projet.
Vous devrez noter votre client_id et client_secret.
Vous pouvez également visiter l'article de la base de connaissances ci-dessous pour un guide:
https://quickbox.io/knowledge-base/creating-a-google-api-client-id-client-secret-code/

Une fois que vous avez votre client_id et client_secret, appuyez sur une touche pour continuer.

"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone_entries() {
  declare text="Entrez vos détails de connexion ci-dessous."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone_clientid() {
  declare text="ID Client: "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone_clientsecret() {
  declare text="Secret Client: "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone_encryptpass() {
  declare text="Mot de passe de chiffrement: "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone_saltpass() {
  declare text="Mot de passe Salt: "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone_salterror() {
  declare text="Le mot de passe Salt ne peut pas être le même que le mot de passe de chiffrement."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone_confirm() {
  declare text="Veuillez confirmer les détails suivants avant de continuer..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone_clientid_confirm() {
  declare text="ID Client: ${clientvar}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone_clientsecret_confirm() {
  declare text="Secret Client: ${secretvar}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone_encryptpass_confirm() {
  declare text="Mot de passe de chiffrement: ${encvar}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone_saltpass_confirm() {
  declare text="Mot de passe Salt: ${saltvar}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone_continue() {
  declare text="Si vous êtes satisfait des paramètres ci-dessus, appuyez sur Y pour continuer..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::znc_configure() {
  declare text="La configuration ZNC va maintenant s'exécuter. Veuillez répondre aux invites suivantes:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::sonarrv4::update::error() {
  declare text
  text="$(tput setaf 7)Sonarr v4 $(tput setaf 1)ne peut pas$(tput setaf 7) être mis à jour depuis v3.
Veuillez désinstaller v3 et installer v4.$(tput sgr0)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::build::python311() {
  declare text="installation de python 3.11, veuillez patienter car cela peut prendre un moment..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::build::sabnzbd::par2cmdline() {
  declare text="installation de par2cmdline, veuillez patienter car cela peut prendre un moment..."
  quickbox::dashboard::log "${text}"
} 