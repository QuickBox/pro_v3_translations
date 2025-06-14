<?php

/**
 * Fichier de langue française de QuickBox Pro
 *
 * Ce fichier est utilisé pour traduire le tableau de bord de QuickBox Pro en français.
 * Prêt pour QuickBox Pro v3.2.0 : 28 mars 2025
 *
 * @package    dashboard
 * @subpackage lang
 * @category   French
 * @version    3.0.1.105
 * @since      1.0.0
 *
 * @var Configs $configs The configurations object.
 * @var Session $session The user session object.
 */

// Include required variables
$version           = $configs->getConfig('Version');
$username          = $session->username;
$network_interface = $configs->getConfig('server_network_adapter');
// Execute the shell command to get the server IP
$command   = "ip route get 8.8.8.8 | sed -n '/src/{s/.*src *\\([^ ]*\\).*/\\1/p;q}'";
$server_ip = shell_exec($command);
// Trim any trailing whitespace or newlines from the result
$server_ip = trim((string) $server_ip);

/*
 * @résumé Ce fichier contient la structure de navigation, widgets, divers éléments et pages pour QuickBox Pro.
 *
 * NAVIGATION (#1)
 * ---------------
 *   - #1.1: Sélection de la langue et du thème
 *   - #1.2: Menu utilisateur
 *   - #1.3: Menu de la barre latérale
 *   - #1.4: Sous-menus de la barre latérale
 *   - #1.5: Pied de page
 *
 * DIVERS (#2)
 * ------------
 *   - #2.1: Boutons
 *   - #2.2: Texture de la popup
 *   - #2.3: Modal de configuration NGINX pour les applications
 *   - #2.4: Autres
 *
 * WIDGETS (#3)
 * ------------
 *   En-têtes des tableaux (#3.1):
 *     - #3.1.1: Centre de gestion des applications
 *
 *   Centre de gestion des paquets (#3.2):
 *     - #3.2.1: Informations sur l'application
 *     - #3.2.2: Désinstallation de l'application
 *     - #3.2.3: Réinstallation de l'application
 *     - #3.2.4: Boutons de bascule et info-bulles
 *     - #3.2.5: Contrôle des services
 *     - #3.2.6: Boutons de bascule spécifiques à Rclone
 *
 *   Widgets du tableau de bord (#3.3):
 *     - #3.3.1: Widget d'état du disque
 *     - #3.3.2: Indice système v1 – Données de bande passante
 *     - #3.3.3: Indice système v1 – Charge du serveur
 *     - #3.3.4: Indice système v1 – État de la mémoire
 *     - #3.3.5: Widget d'activité du serveur
 *
 * PAGES (#4)
 * ------------
 *   Formulaires de l'écran d'accueil (#4.1):
 *     - #4.1.1: Connexion
 *     - #4.1.2: Mot de passe oublié
 *     - #4.1.3: Inscription
 *     - #4.1.4: Compte
 *       - #4.1.4.1: Citations
 *       - #4.1.4.2: Modal d'édition de compte
 *     - #4.1.5: Résumé
 *
 *   Paramètres (#4.2):
 *     - #4.2.1: Paramètres généraux
 *     - #4.2.2: Paramètres de messagerie
 *     - #4.2.3: Paramètres de session
 *     - #4.2.4: Paramètres utilisateur
 *     - #4.2.5: Paramètres de sécurité
 *
 *   Gestion des utilisateurs (#4.3):
 *     - #4.3.1: Paramètres d'inscription
 *     - #4.3.2: Administration des utilisateurs
 *       - #4.3.2.1: Édition de l'utilisateur admin
 *       - #4.3.2.2: Annonce de l'administrateur
 *     - #4.3.3: Groupes d'utilisateurs
 *
 *   Système (#4.4):
 *     - #4.4.1: Console web
 *     - #4.4.2: Contrôle de l'API
 *     - #4.4.3: Contrôle SSL
 *     - #4.4.4: Contrôle VPN
 *     - #4.4.5: Dépannage
 *     - #4.4.6: Journaux du système
 *     - #4.4.7: Manuel d'aide
 *       - #4.4.7.1: Description
 *       - #4.4.7.2: Options
 *       - #4.4.7.3: Logiciels
 *       - #4.4.7.4: Tableau des options logicielles
 *       - #4.4.7.5: En-tête des exemples
 *       - #4.4.7.6: Gestion des utilisateurs
 *       - #4.4.7.7: Fonctions de nettoyage
 *       - #4.4.7.8: Fonctions de réparation
 *       - #4.4.7.9: Fonctions de génération
 *       - #4.4.7.10: Fonctions de gestion
 *       - #4.4.7.11: Fonctions de nouvelles
 *       - #4.4.7.12: Fonctions de support
 *       - #4.4.7.13: Fonctions de mise à jour
 *       - #4.4.7.14: Bugs et rapports
 *       - #4.4.7.15: Avertissement légal
 *       - #4.4.7.16: Licence
 *       - #4.4.7.17: Divers
 *     - #4.4.8: Journaux des modifications / Mise à jour
 *     - #4.4.9: Tableau de bord du système
 *       -# 4.4.9.1 - Modalité des totaux de bande passante
 *     - #4.4.10: Tableau de bord « En cours de lecture »
 *       - #4.4.10.1: En cours de lecture - erreurs et messages au niveau de la page
 *
 *   Pages d'erreur (#4.5)
 */

/* ********************************************************************************
 * #1 NAVIGATION
 *
 * #1.1 - language & theme selection
 ************************************/
$L['CHINESE']         = 'Chinois';
$L['DANISH']          = 'Danois';
$L['ENGLISH']         = 'Anglais';
$L['FRENCH']          = 'Français';
$L['GERMAN']          = 'Allemand';
$L['PORTUGUESE']      = 'Portugais';
$L['SELECT_LANGUAGE'] = 'Cliquez pour changer de langue';
$L['SELECT_THEME']    = 'Cliquez pour changer de thème';
$L['SPANISH']         = 'Espagnol';
$L['THEME_DARK']      = 'Theme Sombre';
$L['THEME_LIGHT']     = 'Theme Clair';

/* **********************************
 * #1.2 - user menu (top right)
 ************************************/
$L['LOG_OUT'] = 'Déconnexion';
$L['PROFILE'] = 'Mon Profil';
$L['REBOOT']  = 'Redémarrer';

/* **********************************
 * #1.3 - sidebar menu
 ************************************/
$L['ABOUT_AND_TIPS']    = 'À propos';
$L['APP_DASHBOARD']     = 'Gérer les Applications';
$L['DASHBOARD']         = 'Panel';
$L['DB_MGMNT']          = 'phpMyAdmin';
$L['EXTERNAL_LINKS']    = 'Liens Externes';
$L['GENERAL_SETTINGS']  = 'Réglages Généraux';
$L['HELP_SUPPORT']      = 'Aide / Mise à jour';
$L['KB']                = 'Base de Connaissances';
$L['PLUGINS']           = 'Extensions';
$L['REGISTRATION']      = 'Enregistrement';
$L['SECURITY_SETTINGS'] = 'Paramètres de sécurité';
$L['SESSION_SETTINGS']  = 'Paramètres de session';
$L['SETTINGS']          = 'Réglages';
$L['SYS_DASHBOARD']     = 'Gestion Système';
$L['SYSTEM_LOGS']       = 'Journaux Système';
$L['SYSTEM']            = 'Système';
$L['USER_ADMIN']        = 'Administrer Utilisateurs';
$L['USER_GROUPS']       = 'Groupes utilisateurs';
$L['USER_MANAGEMENT']   = 'Gestion Utilisateurs';
$L['USER_SETTINGS']     = 'Paramètres Utilisateurs';
$L['WEB_CONSOLE']       = 'Console Web';

/* **********************************
 * #1.4 - sidebar submenus
 ************************************/
$L['APP_MENU']        = 'Menu logiciel';
$L['APPLICATIONS']    = 'Mes logiciels';
$L['DASHBOARD_INFO']  = 'Choisissez entre le tableau de bord du système administratif ou le tableau de bord de l\'application vu par tous les utilisateurs.';
$L['DASHBOARD_VIEW']  = 'Tableaux de bord';
$L['DOWNLOADS']       = 'Téléchargements';
$L['FILEMANAGER']     = 'Gestionnaire de Fichiers';
$L['NZB_CLIENTS']     = 'Clients NZB';
$L['PLUGINS_CENTER']  = 'Centre des Extensions';
$L['PLUGINS_INFO']    = 'Installez et désinstallez facilement les plugins simplement en cliquant sur le nom du plugin.';
$L['RPLUGINS_NOTICE'] = 'Installez et désinstallez facilement les plugins ruTorrent en cliquant simplement sur le nom du plugin.';
$L['RPLUGINS']        = 'Plugins ruTorrent';
$L['TORRENT_CLIENTS'] = 'Clients Torrent';

/* **********************************
 * #1.5 - footer
 ************************************/
$L['ALL_RIGHTS'] = 'Tous droits réservés. ';

/* ********************************************************************************
 * #2 MISCELLANEOUS
 *
 * #2.1 - buttons
 ************************************/
$L['ACTIVATE_USERS']                = 'Activer Utilisateur';
$L['ADD_IP_ADDRESS']                = 'Ajouter l\'adresse IP';
$L['ADD_USERNAME']                  = 'Ajouter l\'utilisateur';
$L['AGREE']                         = 'Je comprends, fais-le!';
$L['API_ACTIVATE']                  = 'Activer';
$L['APP_MANAGEMENT']                = 'Gérer les Applications';
$L['APPS_INSTALLED']                = 'Apps installées';
$L['AUTO_DISABLE']                  = 'Désactiver MàJ Automatiques';
$L['AUTO_ENABLE']                   = 'Activer MàJ Automatiques';
$L['BACK']                          = 'Retour';
$L['BAN_USER']                      = 'Bloquer Utilisateur';
$L['CANCEL']                        = 'Annuler';
$L['CLEAN_LOG']                     = 'Nettoyer Logs de MàJ';
$L['CLEAN_RCLOG']                   = 'Nettoyer Logs de RClone';
$L['CLICK_ME']                      = 'Cliquez-moi';
$L['CLOSE_REFRESH']                 = 'Fermer & Rafraîchir';
$L['CLOSE']                         = 'Fermer';
$L['CPU_TAB']                       = 'CPU';
$L['CREATE_ANNOUNCEMENT']           = 'Créer une annonce';
$L['CREATE_GROUP']                  = 'Créer Groupe';
$L['CREATE_NEW_GROUP']              = 'Créer un Nouveau Groupe';
$L['CREATE_NEW_USER']               = 'Créer Nouvel Utilisateur';
$L['CREATE_USER']                   = 'Créer Utilisateur';
$L['DATABASE_SIZE']                 = 'Taille de la base de données :';
$L['DELETE_ALL_ANNOUNCEMENTS']      = 'Supprimer toutes les annonces';
$L['DELETE_ALL_LOGS']               = 'Tout Effacer (> 30 jours)';
$L['DELETE_INACTIVE_USERS']         = 'Supprimer Utilisteur Inactif';
$L['DELETE_LOGS']                   = 'Effacer Logs';
$L['DELETE_SELECTED_ANNOUNCEMENTS'] = 'Supprimer les annonces sélectionnées';
$L['DELETE_SELECTED_SESSIONS']      = 'Supprimer Sessions Selectionnées';
$L['DELETE_SELECTED']               = 'Supprimer la Selection';
$L['DELETE_USER']                   = 'Supprimer Utilisateur';
$L['DEMOTE']                        = 'Rétrograder l\'administrateur';
$L['DISABLED']                      = 'Désactivé';
$L['DISK_TAB']                      = 'Disque';
$L['DOWNLOAD']                      = 'Télécharger';
$L['EDIT_ANNOUNCEMENT']             = 'Modifier l\'annonce sélectionnée';
$L['EDIT_GROUP']                    = 'Editer Groupe';
$L['EDIT_USER']                     = 'Editer Utilisateur';
$L['ENABLED']                       = 'Activé';
$L['EXECUTE']                       = 'Exécuter';
$L['GENERATE']                      = 'Générer';
$L['GO_BACK']                       = 'Revenir à la page précédente';
$L['IN_USE']                        = 'Utilisé';
$L['INSTALL']                       = 'Installer';
$L['INSTALLED']                     = 'Désinstaller';
$L['INSTALLING']                    = 'Installation';
$L['KILL_USER_SESSION']             = 'Déconnecter les Utilisateurs';
$L['LAUNCH']                        = 'Lancer';
$L['LOGIN']                         = 'Connexion';
$L['LOGOFF']                        = 'Déconnexion';
$L['MEMORY_TAB']                    = 'Mémoire';
$L['NETWORK_TAB']                   = 'Réseau';
$L['NGINX_BACKUP']                  = 'Sauvegarde de la configuration Nginx';
$L['NGINX_DEFAULT']                 = 'Restaurer la configuration par défaut';
$L['NGINX_DISABLE']                 = 'Désactiver le popup d\'authentification';
$L['NGINX_ENABLE']                  = 'Activer le popup d\'authentification';
$L['NGINX_RESTORE']                 = 'Restaurer la configuration Nginx';
$L['APP_BACKUP_FULL']               = 'Sauvegarde complète';
$L['APP_BACKUP_PARTIAL']            = 'Sauvegarde partielle';
$L['APP_DEFAULT_PARTIAL_RESTORE']   = 'Restaurer par défaut';
$L['APP_BACKUP_PARTIAL_RESTORE']    = 'Restaurer la sauvegarde';
$L['ED_MENU_CONFIG_APP']            = 'config & app';
$L['ED_MENU_CONFIG']                = 'config uniquement';
$L['VERSION_ROLLBACK_OPTIONS']      = 'Options de restauration';
$L['VERSION_ROLLBACK_V']            = 'Version : ';
$L['VERSION']                       = 'Version';
$L['DATE']                          = 'Date';
$L['VERSION_ROLLBACK_CONFIRM']      = 'Revenir à cette version?';
$L['VERSION_ROLLBACK_DELETE']       = 'Supprimer cette sauvegarde ?';
$L['PROMOTE']                       = 'Promouvoir Admin';
$L['RCLONE_LOCK_REMOVE']            = 'Retirer le verrou';
$L['RCLONE_LOGS']                   = 'Examiner les journaux';
$L['RCLONE_UPLOAD']                 = 'Téléverser';
$L['REFRESH']                       = 'Rafraîchir';
$L['REGISTER']                      = 'S\'enregistrer';
$L['REGISTERED']                    = 'Enregistré';
$L['REINSTALL']                     = 'Réinstaller';
$L['RELOAD_CONF']                   = 'Recharger les Configurations';
$L['RELOAD']                        = 'Recharger';
$L['REMOVE_BANNED_IP']              = 'Autoriser l\'adresses IP';
$L['REMOVE_DISALLOWED']             = 'Autoriser l\'utilisateur';
$L['REMOVE_MEMBER']                 = 'Supprimer Membre du Groupe';
$L['REMOVE']                        = 'Supprimer';
$L['RESET_VERSION']                 = 'Réinitialiser Version';
$L['RESET']                         = 'Réinitialiser';
$L['RESTART']                       = 'Redémarrage';
$L['SAVE']                          = 'Sauvegarder';
$L['SERVICE_CONTROL']               = 'Contrôle des Services';
$L['SIMULATE_BUTTON']               = 'Simuler';
$L['SIMULATE_END']                  = 'Fin Sim';
$L['SIMULATE_USER']                 = 'Simuler Utilisateur';
$L['NANGINX']                       = 'N/A fonctionne avec Nginx';
$L['START']                         = 'Démarrer';
$L['STOP']                          = 'Arrêter';
$L['SUBMIT']                        = 'Enregistrer';
$L['TOP_PROC_TAB']                  = 'Principaux Processus';
$L['UNBAN_USER']                    = 'Débloquer Utilisateur';
$L['UNINSTALLED']                   = 'Désinstallé';
$L['UNINSTALLING']                  = 'Désinstallation';
$L['UP']                            = 'Haut';
$L['UPDATE']                        = 'Mettre à jour';
$L['UPDATE_TOOLTIP']                = 'Cliquez pour voir plus d\'informations';
$L['UPDATE_VERSION']                = 'Mettre à jour la version';
$L['USER_ACTIONS']                  = 'Actions Utilisateur';
$L['VIEW_CHANGELOG']                = 'Voir Changelog';
$L['LATEST']                        = 'La plus récente';
$L['CURRENT']                       = 'Actuelle';
$L['VIEW']                          = 'Voir';

/* **********************************
 * #2.2 - popup texture
 ************************************/
$L['SYSTEM_RESPONSE_TITLE'] = 'Réponse Système';
$L['UNINSTALL_TITLE']       = 'Désinstaller';
$L['UNINSTALLING_TXT_1']    = 'Désolé de te voir partir ... Désinstallation de ';
$L['UNINSTALLING_TXT_2']    = 'en cours. Veuillez patienter.';

/* **********************************
 * #2.3 - app nginx config edit modal
 ************************************/
$L['ALERT_NGINX_EDITOR']  = 'Il est conseillé de sauvegarder votre configuration actuelle en premier et de ne modifier la configuration ci-dessous que si vous connaissez bien Nginx ou si vous êtes guidés par un membre du personnel.';
$L['BACKUP_NGINX_LOC']    = 'Chemin de la Sauvegarde de la configuartion Nginx';
$L['CURRENT_NGINX_LOC']   = 'Chemin actuel de la configuartion Nginx';
$L['NGINX_APP_CONFIGURE'] = 'Editeur de Configuration Nginx';
$L['NGINX_EDIT']          = 'Editer la Configuration Nginx';
$L['ALERT_CONFIG_EDITOR'] = 'Il est conseillé de sauvegarder d\'abord votre configuration actuelle et de ne modifier la configuration ci-dessous que si vous êtes conscient des modifications apportées, si vous avez consulté la documentation de l\'application ou si vous avez reçu des instructions d\'un membre du personnel';
$L['BACKUP_CONFIG_LOC']   = 'Emplacement de la sauvegarde de la configuration';
$L['CURRENT_CONFIG_LOC']  = 'Emplacement de la configuration actuelle';
$L['APP_CONFIG_OPTIONS']  = 'Éditeur de configuration d\'application';
$L['APP_CONFIG_EDIT']     = 'Modifier la configuration de l\'application';

/* **********************************
 * #2.4 - other
 ************************************/
$L['ABOUT_RELEASE']       = 'A propos de la version';
$L['COPYRIGHT']           = 'Droits d\'auteur';
$L['EMAIL']               = 'Email';
$L['HERE']                = 'ici';
$L['HOME']                = 'Accueil';
$L['IDLE_L']              = 'libre';
$L['IDLE']                = 'Libre';
$L['IS_AVAILABLE']        = 'est disponible.';
$L['LANGUAGES']           = 'Langages';
$L['NEED_HELP']           = 'Besoin d\'aide ?';
$L['NGINX_CONF_OPTIONS']  = 'Options Config Nginx';
$L['NGINX_CONFIG']        = 'Configuration Nginx';
$L['NGINX_SETTINGS']      = 'Paramètres Nginx';
$L['NO']                  = 'Non';
$L['NOTIFICATIONS']       = 'Notifications';
$L['OPEN']                = 'ouvrir';
$L['OR']                  = 'ou';
$L['PASSWORD']            = 'Mot de passe';
$L['PLEASE_HOLD']         = 'En cours - Veuillez Patienter';
$L['REQUIRED_FIELD']      = 'Champ requis...';
$L['REQUIRED_FIELDS']     = 'Les champs marqués avec <span style="color:#d9534f">*</span> sont requis';
$L['SET_HERE']            = 'Définissez-le ici';
$L['SIMULATE_LIST']       = 'Liste Utilisateurs';
$L['SIMULATE']            = 'Simuler Utilasateurs';
$L['SUMMARY']             = 'Sommaire';
$L['THEMES']              = 'Thèmes';
$L['UPDATING_QUICKBOX']   = 'Mise à Jour QuickBox';
$L['UPDATING']            = 'Mise à Jour ';
$L['USED_L']              = 'utilisé';
$L['USERNAME']            = 'Nom d\'utilisateur';
$L['USERS']               = 'Utilisateurs';
$L['YES']                 = 'Oui';
$L['ADD_MOUNT_PATH_INFO'] = 'Sélectionnez si vous souhaitez ignorer les quotas (s\'ils sont installés) sur le répertoire sélectionné. Cette option, une fois choisie, ignorera les quotas pour le chemin spécifié. Utilisez cette option lors de la surveillance d\'un répertoire dans lequel les quotas ne doivent pas être pris en compte. Cela garantit des calculs d\'espace précis, en particulier pour les supports rclone.';
$L['ADD_NEW_MOUNT_CHECK'] = 'Ajouter un montage ou un répertoire existant à surveiller';
$L['MOUNT_PATH_SUCCESS']  = 'Chemin ajouté avec succès pour la surveillance. Page actualisée...';
$L['MOUNT_PATH_ERROR']    = 'Le chemin que vous avez tenté d\'ajouter pour la surveillance n\'existe pas.<br>Veuillez vérifier le chemin et réessayer.';
$L['MOUNTS']              = 'Montages:';
$L['MOUNT_ADD_PATH']      = 'Ajouter un chemin';
$L['MOUNT_CHECK_ABOUT']   = 'Ces valeurs sont calculées et mises à jour périodiquement. Les valeurs ne sont pas en temps réel. Vous pouvez forcer une mise à jour de ces statistiques en cliquant sur le bouton \'Lancer l\'analyse\' ci-dessous.';
$L['MOUNT_CHECK_PROCESS'] = 'Les valeurs de pourcentage d\'espace sont actuellement calculées en arrière-plan. Veuillez revenir plus tard pour les résultats mis à jour. Nécessite un rafraichissement de la page.';
$L['MOUNT_MONITOR_INFO']  = 'Informations de montage supplémentaires';
$L['MOUNT_START_SCAN']    = 'Démarrer l\'analyse';
$L['REMOVE_MOUNT_PATH']   = 'Supprimer le chemin surveillé. Cela ne supprimera pas le répertoire ou le point de montage actuel.';

/* ********************************************************************************
 * #3 WIDGETS
 *
 * #3.1 - Tables Headers
 *
 * #3.1.1 - app management center
 ************************************/
$L['AVAILABILITY'] = 'Disponibilité';
$L['DETAILS']      = 'Détails';
$L['NAME']         = 'Nom';
$L['CONFIGS']      = 'Configs';
$L['EXTRAS']       = 'Extras';

/* **********************************
 * #3.2 - Package Management Center
 *
 * #3.2.1 - app info
 ************************************/
$L['AIRSONIC']      = 'Airsonic-Advanced est une implémentation plus moderne de la bifurcation d\'Airsonic avec plusieurs améliorations clés en termes de performances et de fonctionnalités. Il ajoute et remplace plusieurs fonctionnalités d\'Airsonic. Airsonic est un lecteur multimédia gratuit, basé sur le web, qui fournit un accès omniprésent à votre musique.';
$L['AUTOBRR']       = 'Autobrr est un simple binaire moderne remplaçant le plugin autodl-irssi+rutorrent. Autobrr surveille les canaux d\'annonce IRC et les flux RSS torznab pour obtenir les versions dès qu\'elles sont disponibles, avec un bon filtrage et un support regex.';
$L['AUTODL']        = 'AutoDL-iRSSi est un plugin pour iRSSi qui surveille les canaux IRC et télécharge des fichiers torrent basés sur des filtres définis par l\'utilisateur.';
$L['AUTOSCAN']      = 'Autoscan remplace le comportement par défaut de Plex et Emby pour capter les modifications de fichiers sur le système de fichiers. Autoscan s\'intègre à Sonarr, Radarr, Lidarr et Google Drive pour récupérer les modifications en temps quasi réel sans dépendre du système de fichiers.';
$L['BAZARR']        = 'Bazarr est une application compagnon de Sonarr et Radarr. Il gère et télécharge les sous-titres en fonction de vos besoins. Vous définissez vos préférences par émission de télévision ou par film et Bazarr s\'occupe de tout pour vous.';
$L['BAZARR4K']      = 'Bazarr4K est un clone Bazarr autonome pour les profils 4K UHD. C\'est un moyen de gérer plusieurs instances de Bazarr, tout en séparant le contenu UHD du contenu général.';
$L['BBR']           = 'BBR est un nouvel algorithme de contrôle de congestion qui est contribué à la pile TCP du noyau Linux par Google. Avec BBR en place, un serveur Linux peut augmenter considérablement le débit et réduire la latence des connexions.';
$L['BTSYNC']        = 'BitTorrent Sync par BitTorrent.Inc est un outil propriétaire peer-to-peer de synchronisation de fichiers.';
$L['CALIBRE']       = 'Calibre est une suite d\'applications open source multi-plateforme de livres électroniques. Calibre prend en charge l\'organisation de livres électroniques existants dans des bibliothèques virtuelles, l\'affichage, l\'édition (formats EPUB et AZW3), la création et la conversion de livres électroniques, ainsi que la synchronisation de livres électroniques avec une variété de lecteurs électroniques.';
$L['COUCHPOTATO']   = 'Téléchargez automatiquement des films, facilement et dans la meilleure qualité dès qu\'ils sont libérés, par l\'intermédiaire d\'Usenet ou de torrents.';
$L['CSF']           = 'ConfigServer Firewall, connu sous le nom de CSF, est un script de configuration de pare-feu créé pour assurer une meilleure sécurité pour votre serveur tout en vous donnant une interface avancée et facile à utiliser pour gérer vos paramètres de pare-feu.';
$L['DELUGE']        = 'Deluge est un client BitTorrent léger, gratuit et multi-plateforme.';
$L['DUPLICATI']     = 'Duplicati est un client de sauvegarde gratuit et open source qui stocke en toute sécurité des sauvegardes cryptées, incrémentielles et compressées sur des services de stockage en nuage et des serveurs de fichiers distants. Il peut fonctionner avec Amazon S3, Dropbox, Google Drive, FTP, SSH/SFTP, WebDAV et <a href="https://nullrefer.ir/?https://duplicati.readthedocs.io/en/latest/01-introduction/#supported-backends" rel="noopener nofollow" target="_blank">beaucoup plus</a>.';
$L['EMBY']          = 'Importer toutes vos vidéos, vos musiques et vos photos dans un seul endroit n\'a jamais été aussi simple. Votre Serveur Emby personnel convertit automatiquement et diffuse vos médias à la volée pour jouer sur n\'importe quel appareil (Android TV, Apple TV, smartphones, Roku, Consoles de jeu et <a href="https://nullrefer.ir/?https://emby.media/download.html" rel="noopener nofollow" target="_blank">plein d\'autres</a>).';
$L['FAIL2BAN']      = 'Fail2Ban est une structure logicielle de prévention des intrusions qui protège les serveurs d\'ordinateur des attaques par force brute.';
$L['FILEBOT']       = 'FileBot est l\'outil ultime pour organiser et renommer vos films, vos émissions de télévision et vos dessins animés, ainsi que pour récupérer des sous-titres et des illustrations.';
$L['FILEBROWSER']   = 'FileBrowser fournit une interface de gestion de fichiers dans un répertoire spécifié et peut être utilisé pour télécharger, supprimer, prévisualiser, renommer et éditer vos fichiers. Il permet la création de plusieurs utilisateurs et chaque utilisateur peut avoir son propre répertoire.';
$L['FLARESOLVERR']  = 'FlareSolverr est un serveur proxy pour contourner la protection Cloudflare.';
$L['FLEXGET']       = 'FlexGet est un outil d\'automatisation polyvalent pour tous vos médias. Il prends en charge des torrents, NZBs, podcasts, bandes dessinées, télévision, films, flux RSS, HTML, CSV, etc.';
$L['FLOOD']         = 'Flood est un service de surveillance pour divers clients torrent. C\'est un service Node.js qui communique avec votre client torrent préféré et sert une interface utilisateur Web décente pour l\'administration. L\'organisation <a href="https://nullrefer.ir/?https://github.com/Flood-UI" target="_blank" rel="nofollow noopener">Flood-UI</a> héberge des projets connexes.';
$L['HEADPHONES']    = 'Headphones est un logiciel de téléchargement automatique de musique pour NZB et Torrent, écrit en Python. Il supporte SABnzbd, NZBget, Transmission, μTorrent, Deluge et Blackhole.';
$L['JACKETT']       = 'Support API pour vos trackers privés préférés.';
$L['JDOWNLOADER']   = 'JDownloader est un outil de gestion de téléchargement gratuit qui vous permet de télécharger rapidement des fichiers à partir de services d\'hébergement tels que Mediafire, 4Shared et d\'autres services d\'hébergement de fonctionnalités similaires. Les services d\'hébergement de fichiers contrôlent souvent votre vitesse de téléchargement complète pour inciter à l\'achat de forfaits premium ; JDownloader vous aide à contourner cette exigence.';
$L['JELLYFIN']      = 'Jellyfin est un système multimédia logiciel libre, basé sur Emby qui vous permet de contrôler la gestion et la diffusion de vos médias.';
$L['JELLYSEERR']    = 'Jellyseerr est un logiciel libre et open source permettant de gérer les requêtes pour votre médiathèque. Il s\'agit d\'un fork d\'Overseerr conçu pour prendre en charge les serveurs multimédias Jellyfin et Emby!';
$L['KAVITA']        = 'Kavita est un serveur de lecture multiplateforme rapide et riche en fonctionnalités. Conçu en mettant l\'accent sur les mangas et dans le but d\'être une solution complète pour tous vos besoins de lecture. Configurez votre propre serveur et partagez votre collection de lectures avec vos amis et votre famille.';
$L['KOMGA']         = 'Komga est un serveur multimédia pour vos bandes dessinées/mangas numériques, avec pour objectif de fournir une interface simple et moderne.';
$L['LAZYLIBRARIAN'] = 'LazyLibrarian est une application SickBeard, CouchPotato, semblable à un casque pour les livres électroniques, les livres audio et les magazines. Il utilise une combinaison de <a href="https://nullrefer.ir/?https://www.goodreads.com/" rel="noopener nofollow" target="_blank"> Goodreads </a> <a href="https://nullrefer.ir/?https://www.librarything.com/" rel="noopener nofollow" target="_blank"> Librarything </a> et éventuellement <a href="https://nullrefer.ir/?https://www.googleapis.com/books/v1/" rel="noopener nofollow" target="_blank"> GoogleBooks </a> comme sources d\'informations sur l\'auteur et les informations sur le livre.';
$L['LETSENCRYPT']   = 'Let\'s Encrypt est une autorité de certification (CA) gratuite, automatisée et ouverte, exploitée pour le bénéfice du public. Il s\'agit d\'un service fourni par l\' <a href="https://nullrefer.ir/?https://letsencrypt.org/isrg/" rel="noopener nofollow" target="_blank">Internet Security Research Group (ISRG)</a>.';
$L['LIDARR']        = 'Lidarr est un fork indépendant de Sonarr retravaillé pour télécharger automatiquement de la musique via Usenet et BitTorrent et inspiré par Headphones.';
$L['MEDUSA']        = 'Gestionnaire de fichiers vidéo pour Séries TV. Il surveille les nouveaux épisodes de vos émissions préférées à votre place et quand ils sont sur la toile, sa magie entre en jeu.';
$L['MYLAR3']        = 'Mylar est un programme de téléchargement automatisé de bandes dessinées (cbr/cbz) à utiliser avec NZB et des torrents écrits en python. Il prend en charge SABnzbd, NZBGET et de nombreux clients torrent en plus de DDL.';
$L['NETDATA']       = 'Netdata est une surveillance distribuée, en temps réel, des performances et de l\'intégrité des systèmes et des applications.';
$L['NEXTCLOUD']     = 'NextCloud est un logiciel open source vous permettant d\'accéder depuis n\'importe quel endroit à vos documents importants. Il peut être installé sur n\'importe quel serveur et vous permet de synchroniser vos données (contacts, calendriers) \'dans le nuage\' sur votre serveur. Vous décidez de ce qui se passe avec vos données, où elles sont et qui peut y accéder!';
$L['NOTIFIARR']     = 'Ceci est le client unifié pour <a href="https://nullrefer.ir/?https://notifiarr.com/" rel="noopener nofollow" target="_blank">Notifiarr.com</a>. Le client active les demandes de contenu de Media Bot dans votre serveur Discord et fournit également des rapports sur l\'utilisation de Plex et la santé du système parmi de nombreuses autres fonctionnalités..';
$L['NOVNC']         = 'noVNC est à la fois une bibliothèque JavaScript proposant client VNC et une application construite au-dessus de cette bibliothèque. noVNC fonctionne dans tous les navigateurs modernes, y compris les navigateurs mobiles (iOS et Android).';
$L['NZBGET']        = 'NZBGet est un programme de téléchargement binaire, qui télécharge les fichiers d\'Usenet en fonction des informations fournies dans les fichiers nzb. NZBGet est écrit en C++ et est connu pour ses performances et son efficacité exceptionnelle.';
$L['NZBHYDRA']      = 'NZBHydra offre un accès facile à un certain nombre d\'indexeurs basés sur raw et newznab. Vous pouvez rechercher tous vos indexateurs au même endroit et l\'utiliser comme source d\'indexation pour des outils tels que Sonarr ou CouchPotato.';
$L['NZBHYDRA2']     = 'NZBHydra2 offre un accès facile à un certain nombre d\'indexeurs basés sur raw et newznab. Vous pouvez rechercher tous vos indexateurs au même endroit et l\'utiliser comme source d\'indexation pour des outils tels que Sonarr ou CouchPotato.';
$L['OMBI']          = 'Ombi offre une belle interface pour que vos utilisateurs vous demandent facilement d\'ajouter de nouveaux films à la bibliothèque. S\'intègre avec CouchPotato, SickChill et Sonarr.';
$L['OVERSEERR']     = 'Overseerr est un logiciel libre et open source permettant de gérer les requêtes pour votre médiathèque. Il s\'intègre à vos services existants, tels que Sonarr, Radarr et Plex!';
$L['OVPN']          = 'VPN basé sur SSL/TLS. Supporté sur Solaris, OpenBSD, FreeBSD, NetBSD, Mac OS X, et Windows 2000/XP+.';
$L['PHPMYADMIN']    = 'phpMyAdmin est un outil logiciel gratuit écrit en <a href="https://nullrefer.ir/?https://php.net/" rel="noopener nofollow" target="_blank">PHP</a>, destiné à gérer l\'administration de <a href="https://nullrefer.ir/?https://www.mysql.com/" rel="noopener nofollow" target="_blank">MySQL</a> sur le Web. Il supporte un large éventail d\'opérations sur MySQL et MariaDB. Il est utilisé pour la gestion des bases de données, des tables, des colonnes, des relations, des index, des utilisateurs, des permissions, etc.';
$L['PLEX']          = 'Plex vous permet de diffuser votre contenu à tous vos dispositifs Plex activés.';
$L['PROWLARR']      = 'Prowlarr est un gestionnaire d\'indexation/proxy construit sur la populaire pile de base arr .net/reactjs pour s\'intégrer à vos différentes applications PVR. Prowlarr prend en charge à la fois les Torrent Trackers et les Usenet Indexers. Il s\'intègre parfaitement à Sonarr, Radarr, Lidarr et Readarr, offrant une gestion complète de vos indexeurs sans aucune configuration d\'indexeur par application requise.';
$L['PYLOAD']        = 'pyLoad vous permet de télécharger directement sur votre serveur des liens provenant de sites comme Sendspace ou Rapidshare (une liste de ces sites peut être trouvée en cliquant <a href="https://nullrefer.ir/?https://github.com/pyload/pyload/wiki/Supported-Hoster" rel="noopener nofollow" target="_blank">ici</a>. Vous pourrez ensuite facilement récupérer ces fichiers via votre client FTP habituel.';
$L['QBITTORRENT']   = 'qBittorrent est un client BitTorrent multi-plateforme, multilingue, léger et libre. Livré avec une interface utilisateur agréable et un moteur de recherche intégré.';
$L['QUASSEL']       = 'Quassel est un client IRC multi-plateforme moderne basé sur le framework Qt4.';
$L['QUOTAS']        = 'Cette fonctionnalité de Linux permet à l\'administrateur du système d\'allouer un montant maximum de l\'espace disque d\'un utilisateur.';
$L['RADARR']        = 'Radarr est un fork indépendant de Sonarr retravaillé pour le téléchargement automatique de films via Usenet et BitTorrent. Il est inspiré d\'outils tels que CouchPotato.';
$L['RADARR4K']      = 'Radarr4K est un clone Radarr autonome pour les profils 4K UHD. C\'est un moyen de gérer plusieurs instances de Radarr, tout en séparant le contenu UHD du contenu général.';
$L['RAPIDLEECH']    = 'RapidLeech est un script de transfert de serveur gratuit pour une utilisation sur différents sites de Direct Download populaires tels que uploaded.net, rapidshare.com et plus de 120 autres.';
$L['RCLONE']        = 'RClone est un programme en ligne de commande permettant de synchroniser des fichiers et des répertoires depuis et vers une multitude d\'hôtes.';
$L['READARR']       = 'Readarr est un gestionnaire de collection d\'ebooks pour les utilisateurs de Usenet et BitTorrent. Il peut surveiller plusieurs flux RSS pour les nouveaux livres de vos auteurs préférés et s\'interfacer avec des clients et des indexeurs pour les saisir, les trier et les renommer.';
$L['REQUESTRR']     = 'Requestrr est un chatbot Discord utilisé pour simplifier l\'utilisation de services comme Sonarr/Radarr/Ombi via l\'utilisation du chat! Tous les utilisateurs de votre serveur Discord peuvent demander l\'ajout d\'un nouveau contenu et être informés de sa disponibilité.';
$L['RTORRENT']      = 'rTorrent est un client BitTorrent rapide et efficace qui utilise, la bibliothèque libTorrent (à ne pas confondre avec libtorrent-rasterbar). Il est écrit en C ++ et utilise la bibliothèque de programmation ncurses, ce qui signifie qu\'il utilise une interface utilisateur texte. L\'interface de ruTorrent sera installée en plus.';
$L['RUTORRENT']     = 'ruTorrent est l\'interface front-end du client Bittorrent \'rTorrent\'. Très léger côté serveur, il peut être installé sur des serveurs anciens et bas de gamme et même sur certains routeurs SOHO. Il existe plusieurs plugins pour que tout le monde puisse créer l\'interface qui lui ressemble, d\'ailleurs il vient avec notre thème maison : <a href="https://nullrefer.ir/?https://github.com/QuickBox/club-QuickBox" rel="noopener nofollow" target="_blank">club-QuickBox</a>.';
$L['SABNZBD']       = 'SABnzbd est un projet Open Source de lecteur de newsgroup pour fichier binaire écrit en Python. Le programme fonctionne en arrière-plan et simplifie la vérification de téléchargement et l\'extraction de fichiers à partir de Usenet. SABnzbd utilise des fichiers NZB (similaires aux fichiers .torrent, mais pour Usenet), au lieu de naviguer sur Usenet.';
$L['SEEDCROSS']     = 'SeedCross est une application Web pour croiser les torrents dans Deluge/qBittorrent/Transmission. C\'est un fork de <a href="https://nullrefer.ir/?https://github.com/BC44/Cross-Seed-AutoDL" rel="noopener nofollow" target="_blank">Cross-Seed-AutoDL</a>.';
$L['SICKCHILL']     = 'Gestionnaire de fichiers vidéo pour Séries TV. Il surveille les nouveaux épisodes de vos émissions préférées et quand ils sont postés, sa magie entre en jeu.';
$L['SICKGEAR']      = 'SickGear est comme Sick Beard, mais en mieux. Automatisez votre plaisir de télévision avec l\'innovation, la stabilité éprouvée et la fiabilité en plus.';
$L['SONARR']        = 'Sonarr est un outil de gestion de Séries TV qui travaillera avec les torrents et liens Usenet.';
$L['SONARR4K']      = 'Sonarr4K est un clone Sonarr autonome pour les profils 4K UHD. C\'est un moyen de gérer plusieurs instances de Sonarr, tout en séparant le contenu UHD du contenu général.';
$L['SUBSONIC']      = 'Subsonic est un serveur de contenu audio et vidéo en streaming écrit en JAVA avec une interface web (via HHTP ou HTTPS) et une gestion de plusieurs utilisateurs, ainsi que l\'authentification LDAP. Il suuporte un grand nombre de fichiers (MP3, AAC, OGG, FLAC, WMA, APE...).';
$L['SYNCTHING']     = 'Syncthing est une application open source vous permettant de synchroniser vos fichiers en continu avec BitTorrent.';
$L['TAUTULLI']      = 'Une application web python conçue pour surveiller, analyser et obtenir des notifications de votre serveur Plex.';
$L['THELOUNGE']     = 'Un client web IRC auto-hebergé.';
$L['TRANSMISSION']  = 'Transmission est conçue pour une utilisation facile et puissante. Les valeurs par défaut sont définies sur \'Just Work\' et il suffit de quelques clics pour configurer les fonctionnalités avancées telles que les répertoires de surveillance, les listes de blocage des pairs et l\'interface Web. Quand Ubuntu a choisi Transmission comme client BitTorrent par défaut, l\'une des raisons les plus citées était sa courbe d\'apprentissage facile.';
$L['UNIFI']         = 'UniFi® Controller est une solution logicielle de gestion de réseau sans fil d\'Ubiquiti Networks™. Il vous permet de gérer plusieurs réseaux sans fil à l\'aide d\'un navigateur Web.';
$L['UNPACKERR']     = 'Extrait les téléchargements pour Radarr, Sonarr, Lidarr, Readarr - Supprime les fichiers extraits après l\'importation.';
$L['WEBCONSOLE']    = 'TTYD (alias la console Web QuickBox) est un terminal complet basé sur Xterm.js avec prise en charge CJK et IME.';
$L['WIREGUARD']     = 'WireGuard® est un VPN extrêmement simple mais rapide et moderne qui utilise une cryptographie de pointe. Il vise à être plus rapide, plus simple, plus simple et plus utile qu\'IPsec, tout en évitant les énormes maux de tête. Il a l\'intention d\'être considérablement plus performant qu\'OpenVPN. WireGuard est conçu comme un VPN à usage général pour fonctionner aussi bien sur des interfaces intégrées que sur des super-ordinateurs, adapté à de nombreuses circonstances différentes.';
$L['X2GO']          = 'X2Go est un logiciel de bureau à distance open source pour Linux qui utilise le protocole de technologie NX.';
$L['XTEVE']         = 'xTeVe est une application qui simule un tuner TV, elle permet d\'avoir des chaines IPTV via Plex ou Emby. xTeVe peut fusionner plusieurs fichiers M3U et XMLTV et les envoyer à votre Media Center préféré.';
$L['ZNC']           = 'ZNC est un bouncer IRC sous licence GPL. Celui-ci sera connecté en permanence à vos salons de discussions et fera office de passerelle entre votre client et vos serveurs IRC.';

// Create an array of the app names for the uninstall/reinstall translation
$APPS = [
	'AIRSONIC'      => 'Airsonic',
	'AUTOBRR'       => 'Autobrr',
	'AUTODL'        => 'AutoDL-iRSSi',
	'AUTOSCAN'      => 'Autoscan',
	'BAZARR'        => 'Bazarr',
	'BAZARR4K'      => 'Bazarr4K',
	'BBR'           => 'BBR',
	'BTSYNC'        => 'BitTorrent Sync',
	'CALIBRE'       => 'Calibre',
	'COUCHPOTATO'   => 'CouchPotato',
	'CSF'           => 'Config Server Firewall (CSF)',
	'DELUGE'        => 'Deluge',
	'DUPLICATI'     => 'Duplicati',
	'EMBY'          => 'Emby',
	'FAIL2BAN'      => 'Fail2Ban',
	'FILEBOT'       => 'FileBot',
	'FILEBROWSER'   => 'Filebrowser',
	'FLARESOLVERR'  => 'FlareSolverr',
	'FLEXGET'       => 'FlexGet',
	'FLOOD'         => 'Flood',
	'HEADPHONES'    => 'Headphones',
	'JACKETT'       => 'Jackett',
	'JDOWNLOADER'   => 'JDownloader',
	'JELLYFIN'      => 'Jellyfin',
	'JELLYSEERR'    => 'Jellyseerr',
	'KAVITA'        => 'Kavita',
	'KOMGA'         => 'Komga',
	'LAZYLIBRARIAN' => 'LazyLibrarian',
	'LETSENCRYPT'   => 'Let\'s Encrypt',
	'LIDARR'        => 'Lidarr',
	'MEDUSA'        => 'Medusa',
	'MYLAR3'        => 'Mylar3',
	'NETDATA'       => 'Netdata',
	'NEXTCLOUD'     => 'Nextcloud',
	'NOTIFIARR'     => 'Notifiarr',
	'NOVNC'         => 'noVNC',
	'NZBGET'        => 'NZBGet',
	'NZBHYDRA2'     => 'NZBHydra2',
	'OMBI'          => 'Ombi',
	'OVERSEERR'     => 'Overseerr',
	'OVPN'          => 'OpenVPN',
	'PHPMYADMIN'    => 'phpMyAdmin',
	'PLEX'          => 'Plex',
	'PROWLARR'      => 'Prowlarr',
	'PYLOAD'        => 'pyLoad',
	'QBITTORRENT'   => 'qBittorrent',
	'QUASSEL'       => 'Quassel',
	'QUOTA'         => 'Quotas',
	'RADARR'        => 'Radarr',
	'RADARR4K'      => 'Radarr4K',
	'RAPIDLEECH'    => 'Rapidleech',
	'RCLONE'        => 'RClone',
	'READARR'       => 'Readarr',
	'REQUESTRR'     => 'Requestrr',
	'RTORRENT'      => 'rTorrent',
	'RUTORRENT'     => 'ruTorrent',
	'SABNZBD'       => 'SABnzbd',
	'SEEDCROSS'     => 'SeedCross',
	'SICKCHILL'     => 'SickChill',
	'SICKGEAR'      => 'SickGear',
	'SONARR'        => 'Sonarr',
	'SONARR4K'      => 'Sonarr4K',
	'SUBSONIC'      => 'Subsonic',
	'SYNCTHING'     => 'Syncthing',
	'TAUTULLI'      => 'Tautulli',
	'THELOUNGE'     => 'The Lounge',
	'TRANSMISSION'  => 'Transmission',
	'UNIFI'         => 'UniFi',
	'UNPACKERR'     => 'Unpackerr',
	'WEBCONSOLE'    => 'Web Console',
	'WIREGUARD'     => 'WireGuard',
	'X2GO'          => 'X2Go',
	'XTEVE'         => 'XTeVe',
	'ZNC'           => 'ZNC'
];

/* **********************************
 * #3.2.2 - app uninstall
 ************************************/
// Loop through the array and create the uninstall translation
foreach ($APPS as $key => $value) {
	$L[$key . '_UNINSTALL'] = 'Vous êtes sur le point de désinstaller <span style="color:#01cea2">' . $value . '</span> de votre système.<br/><br/>Cela supprimera complètement toutes vos configurations et paramètres... cette action est irréversible.<br/><br/>Vous pouvez réinstaller <span style="color:#01cea2">' . $value . '</span> à tout moment, cependant, vos paramètres seront réinitialisés par défaut.';
}

/* **********************************
 * #3.2.3 - app reinstall
 ************************************/
// Loop through the array and create the reinstall translation
foreach ($APPS as $key => $value) {
	$L[$key . '_REINSTALL'] = 'Vous êtes sur le point de réinstaller <span style="color:#01cea2">' . $value . '</span>.<br/><br/>Cela supprimera/réinitialisera complètement toutes vos configurations, fichiers et paramètres actuels... cette action est irréversible.';
}

/* **********************************
 * #3.2.4 - toggles & tooltips
 ************************************/
$L['APP_OPTIONS']                  = 'Options de l\'application';
$L['NGINX_OPTIONS']                = 'Options NGinx';
$L['CARD_VIEW']                    = 'Vue cartes';
$L['LIST_VIEW']                    = 'Vue liste';
$L['CLI']                          = 'Console Web Seulement';
$L['COMPAT_E']                     = 'Erreur de Compatibilité';
$L['CURRENTLY_INSTALLED_NOTICE']   = 'On dirait que vous avez accès à une application qui ne peut être installée que par un utilisateur à la fois. Parlez à votre administrateur système pour connaître l\'état de sa disponibilité.';
$L['CURRENTLY_INSTALLED_TITLE']    = 'Quelqu\'un a déjà installé cette application';
$L['DEL1_TOOLTIP']                 = 'Il semblerait que vous utilisez Ubuntu 20.04. Deluge v1 est incompatible avec cette distribution. Veuillez considérer l\'installation de Deluge v2 pour continuer car Deluge v2 fonctionne avec des versions à jour de libtorrent1.2+ et python3+.';
$L['DEL2_TOOLTIP']                 = 'Il semblerait que qBittorrent est actuellement installé. Deluge v2 ne fonctionnera si Deluge 2 est installé. Veuillez désinstaller qBittorrent ou installer Deluge 1 pour continuer.';
$L['DEL2XENIAL_TOOLTIP']           = 'Il semblerait que vous utilisez Ubuntu 16.04. Deluge v2 n\'est pas compatible avec cette distribution. Veuillez installer Deluge v1 pour continuer.';
$L['EMBY_JELLYFIN_COMPAT_MESSAGE'] = 'Jellyfin Installé';
$L['ENTER_MOUNT_POINT']            = 'Veuillez entrer votre point de montage principal';
$L['FAIL2BAN_TOOLTIP']             = 'Installez Fail2Ban en tapant:<br><code>qb install fail2ban</code> dans votre terminal SSH.';
$L['JELLYFIN_EMBY_COMPAT_MESSAGE'] = 'Emby Installé';
$L['MEDUSA_INSTALLED']             = 'Medusa Installé';
$L['OVPN_TOOLTIP']                 = 'Accedez à cette fonctionnalité depuis votre console web en tapant:<br><code>qb install vpn -u USER</code>.';
$L['PRIMARY_MOUNTM']               = 'Point de Montage';
$L['QBIT_TOOLTIP']                 = 'Il semblerait que Deluge 2 est actuellement installé. qBittorrent ne fonctionnera si Deluge 2 est installé. Veuillez désinstaller Deluge 2 ou installer Deluge 1 pour continuer.';
$L['QUOTAS_FSTAB']                 = 'Editez votre fstab';
$L['QUOTAS_HELP']                  = 'Pour en savoir plus sur l\'installation de Quotas, <a href="https://nullrefer.ir/?https://quickbox.io/knowledge-base/how-to-install-quotas/" rel="noopener nofollow" target="_blank"><strong>Lisez cette F.A.Q en premier</strong></a>.';
$L['QUOTAS_TOOLTIP']               = 'Ajoutez ce qui suit au lieu de <code class="language-bash">defaults</code> sur votre point de montage principal pour continuer';
$L['RCLONE_ADMIN_TOOLTIP']         = 'Installez RClone en tapant:<br><code>qb install rclone -u USER [--dropbox|--gdrive] [--encrypted] [--beta]</code> dans votre terminal SSH.<br>Voir <code>qb help rclone</code> pour plus d\'options.';
$L['RCLONE_USER_TOOLTIP']          = 'Veuillez contacter un administrateur système pour l\'installer.';
$L['REMOVE_MEDUSA_FIRST']          = 'Désinstallez Medusa pour pouvoir installer cette app.';
$L['REMOVE_SICKCHILL_FIRST']       = 'Désinstallez SickChill pour pouvoir cette app.';
$L['REMOVE_SICKGEAR_FIRST']        = 'Désinstallez SickGear pour pouvoir cette app.';
$L['SICKCHILL_INSTALLED']          = 'SickChill Installé';
$L['SICKGEAR_INSTALLED']           = 'SickGear Installé';
$L['UNIFI_SSL_TOOLTIP']            = 'Si vous avez déjà un domaine défini dans la racine de votre site ainsi qu un certificat de chiffrement déjà généré pour le domaine, sélectionnez cette option.';
$L['ZNC_TOOLTIP']                  = 'Installez ZNC en tapant:<br><code>qb install znc -u USER</code> dans votre terminal SSH.';

/* **********************************
 * UI - app install/reinstall modals
 *
 * calibre install/reinstall modal
 ************************************/
$L['CALIBRE_INSTALL_TITLE']   = 'Calibre Install';
$L['CALIBRE_REINSTALL_TITLE'] = 'Réinstaller Calibre';
$L['CALIBRE_INSTALL_MESSAGE'] = 'Vous avez la possibilité de spécifier un chemin de répertoire personnalisé pour votre bibliothèque Calibre. Si le chemin choisi n\'existe pas actuellement, il sera automatiquement généré pour vous.<br>Si vous préférez utiliser le chemin par défaut, laissez simplement le champ vide et la bibliothèque sera située à :<br><code>/home/' . $username . '/.config/Calibre/library</code>';

/* **********************************
 * filebot install/reinstall modal
 ************************************/
$L['FILEBOT_INSTALL_TITLE']         = 'Installer Filebot';
$L['FILEBOT_REINSTALL_TITLE']       = 'Réinstallation de Filebot';
$L['PROCESS_DELUGE']                = 'Traiter les téléchargements pour Deluge?';
$L['PROCESS_DELUGE_TOOLTIP']        = 'Réglez ceci sur Oui pour traiter les téléchargements pour Deluge.<br>Voir comment mettre en œuvre dans les notes de script situées à:<br><code>/home/' . $username . '/.config/Filebot/deluge-postprocess.sh</code>';
$L['CUSTOM_PATH_TOOLTIP_NO_RCLONE'] = 'Réglez ceci sur Oui pour entrer le chemin vers votre médiathèque.<br>Le chemin par défaut est :<br><code>/home/' . $username . '/Media</code>';
$L['CUSTOM_PATH_TOOLTIP_RCLONE']    = 'Réglez ceci sur Oui pour saisir le chemin d\'accès à votre médiathèque.<br>Le chemin par défaut est:<br><code>/home/' . $username . '/rclone/cache</code>';
$L['PROCESS_NZBGET']                = 'Traiter les téléchargements pour NZBGet?';
$L['PROCESS_NZBGET_TOOLTIP']        = 'Définissez ceci sur Oui pour traiter les téléchargements pour NZBGet.<br>Voir comment mettre en œuvre dans les notes de script situées à:<br><code>/home/' . $username . '/.config/NZBGet/scripts/nzbget-postprocess.sh</code>';
$L['PROCESS_RTORRENT']              = 'Traiter les téléchargements pour rTorrent?';
$L['PROCESS_SABNZBD']               = 'Traiter les téléchargements pour SABnzbd?';
$L['CUSTOM_MEDIA_PATH']             = 'Utiliser un chemin personnalisé vers la médiathèque?';
$L['FILEBOT_DEFAULT_PATH']          = 'exemple';
$L['FILEBOT_LICENSE']               = 'Licence Filebot';

/* **********************************
 * jdownloader install/reinstall modal
 ************************************/
$L['JDOWNLOADER_INSTALL_TITLE']        = 'Installation de JDownloader';
$L['JDOWNLOADER_REINSTALL_TITLE']      = 'Réinstallation de JDownloader';
$L['JDOWNLOADER_EMAIL']                = 'Adresse email du compte JDownloader';
$L['JDOWNLOADER_PASSWORD']             = 'Mot de passe du compte JDownloader';
$L['JDOWNLOADER_INSTALL_PATH_MESSAGE'] = 'Vous avez la possibilité de spécifier un chemin de répertoire personnalisé pour vos téléchargements JDownloader. Si le chemin choisi n\'existe pas actuellement, il sera automatiquement généré pour vous.<br>Alternativement, si vous préférez utiliser le chemin par défaut, laissez simplement le champ vide et la bibliothèque se trouvera à :<br><code>/home/' . $username . '/Downloads</code>';

/* **********************************
 * kavita install/reinstall modal
 ************************************/
$L['KAVITA_INSTALL_TITLE']   = 'Installation Kavita';
$L['KAVITA_REINSTALL_TITLE'] = 'Réinstallation de Kavita';
$L['KAVITA_INSTALL_MESSAGE'] = 'Vous avez la possibilité de spécifier un chemin de répertoire personnalisé pour votre bibliothèque Kavita. Si le chemin choisi n\'existe pas actuellement, il sera automatiquement généré pour vous.<br>Alternativement, si vous préférez utiliser le chemin par défaut, laissez simplement le champ vide et la bibliothèque se trouvera à :<br><code>/home/' . $username . '/.config/Kavita/library</code>';

/* *********************************
 * mylar3 install/reinstall modal
 ***************************************/
$L['MYLAR3_INSTALL_TITLE']   = 'Installation de Mylar3';
$L['MYLAR3_REINSTALL_TITLE'] = 'Réinstallation de Mylar3';
$L['MYLAR3_INSTALL_MESSAGE'] = 'Vous avez la possibilité de spécifier un chemin personnalisé pour votre répertoire Mylar3 Comics. Si le chemin choisi n\'existe pas actuellement, il sera automatiquement généré pour vous.<br>Alternativement, si vous préférez utiliser le chemin par défaut, laissez simplement le champ vide et le répertoire sera situé à :<br><code>/home/' . $username . '/Media/Comics</code>';

/* **********************************
 * plex install/reinstall modal
 ************************************/
$L['PLEX_CLAIM_MESSAGE']     = '<p style="font-size:12px">Pour réclamer votre Plex Media Server, vous devez déjà avoir un compte et être connecté pour obtenir le code de réclamation auprès de : <a href="https://www.plex.tv/claim/" rel="noopener nofollow" target="_blank" style="color:var(--qb-color-37);"><strong>https://www.plex.tv/claim/</strong></a></p><div class="alert alert-light-info fade show border-0 mb-2 mt-0" role="alert" style="font-size:12px; color:var(--qb-color-2)"><strong style="color:var(--qb-color-37)">REMARQUE :</strong> Il est conseillé d\'utiliser le bouton "Copier dans le presse-papiers" à partir de l\'écran du code de réclamation pour s\'assurer insertion correcte car le code de réclamation est sensible à la casse.</div>';
$L['PLEX_CLAIM_TITLE']       = 'Installation du serveur multimédia Plex';
$L['PLEX_CLAIM_TOKEN']       = 'Code de réclamation Plex';
$L['PLEX_DATA_PATH']         = 'Utiliser un chemin personnalisé pour le répertoire de données ?';
$L['PLEX_DATA_PATH_TOOLTIP'] = 'Vous avez la possibilité de spécifier un chemin de données personnalisé pour votre installation Plex. Si le chemin choisi n\'existe pas actuellement, il sera automatiquement généré pour vous.<br>Si vous préférez utiliser le chemin par défaut, conservez simplement la sélection sur \'Non\', et le répertoire de données sera situé à :<br><code>/home/' . $username . '/.config/\'Plex Media Server\'</code>';
$L['PLEX_DOMAIN']            = 'Définir le domaine pour Plex Media Server ?';
$L['PLEX_DOMAIN_TOOLTIP']    = 'Si vous avez déjà un domaine et les enregistrements DNS configurés pour un sous-domaine Plex, sélectionnez \'Oui\' pour entrer votre sous-domaine plex.<br>Cette option configurera votre Plex Media Server pour travaillez de manière transparente avec votre domaine Plex personnalisé. Cela inclut la configuration du proxy inverse Nginx essentiel et l\'installation du certificat SSL pour votre domaine afin de garantir un accès sécurisé.';

/* **********************************
 * rutorrent plugin control modal
 ************************************/
$L['RUTORRENT_PLUGIN_CONTROL_TITLE'] = 'Contrôle du plugin ruTorrent';
$L['AUTHOR']                         = 'Auteur';
$L['HELP_URL']                       = 'Documentation';

/* **********************************
 * wireguard install/reinstall modal
 ************************************/
$L['WIREGUARD_INSTALL_TITLE']                 = 'Installation de WireGuard';
$L['WIREGUARD_REINSTALL_TITLE']               = 'Réinstallation de WireGuard';
$L['WIREGUARD_CLIENT_OR_SERVER']              = 'Client ou Serveur WireGuard ?';
$L['WIREGUARD_CLIENT_OR_SERVER_TOOLTIP']      = 'La sélection de « Serveur » installera WireGuard en tant que serveur. La sélection de « Client » installera WireGuard en tant que client. Le serveur est utilisé pour héberger un serveur VPN, tandis que le client est utilisé pour se connecter à un serveur VPN. La sélection de « Client » nécessitera un fichier de configuration fourni par votre fournisseur VPN et acheminera tout le trafic via le VPN.';
$L['CLIENT']                                  = 'Client';
$L['SERVER']                                  = 'Serveur';
$L['WIREGUARD_CONFIG_TIPS']                   = 'Veuillez télécharger votre fichier de configuration de serveur ou client WireGuard au format <code>.conf</code>.<br><ul><li>Pour un serveur WireGuard, le fichier doit contenir les détails de configuration du serveur.</li><li>Pour un client WireGuard, le fichier doit contenir les détails de configuration du client.</li></ul>Ces fichiers seront stockés dans <code>/srv/quickbox/db/wireguard/</code>.<br><br>La plupart des fournisseurs VPN fournissent un fichier de configuration pour WireGuard. Si vous utilisez NordVPN, qui ne fournit pas directement de fichier de configuration, vous pouvez en générer un à l\'aide du générateur de configuration NordVPN inclus.<br>Pour plus d\'informations sur la génération d\'un fichier de configuration NordVPN, utilisez la commande <code>nvpn_conf_gen -h</code> dans la CLI.';
$L['WIREGUARD_INSTALL_CONFIG']                = 'Téléverser le fichier de configuration WireGuard';
$L['WIREGUARD_INSTALL_PORT_LABEL']            = 'Port d\'écoute';
$L['WIREGUARD_INSTALL_PORT_PH']               = '51820';
$L['WIREGUARD_INSTALL_CLIENT_COUNT_LABEL']    = 'Nombre de clients';
$L['WIREGUARD_INSTALL_CLIENT_COUNT_PH']       = '1';
$L['WIREGUARD_INSTALL_CIDR_LABEL']            = 'CIDR';
$L['WIREGUARD_INSTALL_CIDR_PH']               = '10.8.0.1/24';
$L['WIREGUARD_INSTALL_ALLOWED_ADDRESS_LABEL'] = 'IP autorisées par le client';
$L['WIREGUARD_INSTALL_ALLOWED_ADDRESS_PH']    = '0.0.0.0/0,::/0';
$L['WIREGUARD_INSTALL_ENDPOINT_LABEL']        = 'Point de terminaison (facultatif)';
$L['WIREGUARD_INSTALL_ENDPOINT_PH']           = 'myserver.dyndns.org:51820';
$L['WIREGUARD_INSTALL_DNS_LABEL']             = 'DNS (facultatif)';
$L['WIREGUARD_INSTALL_DNS_PH']                = '1.1.1.1';
$L['WIREGUARD_INSTALL_POSTUP_RULE_LABEL']     = 'Post-Up statuer';
$L['WIREGUARD_INSTALL_POSTUP_RULE_PH']        = 'iptables -A FORWARD -i %i -j ACCEPT; iptables -t nat -A POSTROUTING -o ' . $network_interface . ' -j MASQUERADE';
$L['WIREGUARD_INSTALL_POSTDOWN_RULE_LABEL']   = 'Post-Down statuer';
$L['WIREGUARD_INSTALL_POSTDOWN_RULE_PH']      = 'iptables -D FORWARD -i %i -j ACCEPT; iptables -t nat -D POSTROUTING -o ' . $network_interface . ' -j MASQUERADE';
$L['PROCESSING_COMPLETE_INSTALLER']           = 'Traitement terminé';
$L['TAP_TO_UNDO_INSTALLER']                   = 'Cliquez pour annuler';

/* **********************************
 * #3.2.5 - service control
 ************************************/
$L['ACTIVE_STATUS']   = 'actif (en fonction)';
$L['APP_KEY']         = 'clé API';
$L['APP_PORT']        = 'Port';
$L['APP_STATUS']      = 'Statut';
$L['INACTIVE_STATUS'] = 'inactif (mort)';

/* **********************************
 * #3.2.6 - rclone specific toggles
 ************************************/
$L['ACTIVE_MOUNTED']             = 'actif (monté)';
$L['INACTIVE_NOTMOUNTED']        = 'innactif (non monté)';
$L['RCLONE_OPTIONS']             = 'Options RClone';
$L['RCLONE_LOG_VIEWER']          = 'RClone move.log';
$L['RCLONE_COMMAND_CENTER']      = 'Centre de commande RClone';
$L['RCLONE_STATUS']              = 'Statut RClone';
$L['RCLONE_UPLOAD_MESSAGE']      = 'RClone travaille actuellement en arrière-plan pour télécharger vos données sur gdrive. Pendant ce temps, vous verrez un verrou mis en place pour vérifier que votre processus a commencé. Ce verrou se supprimera une fois le processus terminé. N\'hésitez pas à fermer cette fenêtre contextuelle à tout moment.<br/><br/><div class="alert alert-notice" style="color:#fff"><strong>REMARQUE: </strong> Le téléchargement s\'exécute automatiquement via un cronjob tous les soirs à 03h12 heure du serveur.</div>';
$L['RCLONE_UPLOAD_VIEWER']       = 'Téléchargement de RClone';
$L['RCMOUNT_STATUS']             = 'Statut MergerFS';
$L['RCMOUNT_WHERE']              = 'Point de montage';
$L['CLOUD_MANAGEMENT']           = 'Logiciel Cloud';
$L['RCLONE_MOUNT_INFO']          = 'Informations sur le montage de RClone';
$L['RCLONE MOUNT CHECK_PROCESS'] = 'Les valeurs de pourcentage d\'espace sont actuellement calculées en arrière-plan. Veuillez revenir plus tard pour des résultats mis à jour.';

/* **********************************
 * #3.3 - DASHBOARD WIDGETS
 *
 * #3.3.1 - disk status widget
 ************************************/
$L['DD_DELUGE']             = 'Deluge';
$L['DD_NZBGET']             = 'NZBGet';
$L['DD_QBITTORRENT']        = 'qBittorrent';
$L['DD_RTORRENT']           = 'rTorrent';
$L['DD_SABNZBD']            = 'SABnzbd';
$L['DD_TRANSMISSION']       = 'Transmission';
$L['DELUGE_TORRENTS']       = 'torrents chargés dans Deluge';
$L['DISK_%_1']              = 'Vous avez utilisé';
$L['DISK_%_2']              = 'de votre espace disque total.';
$L['DISK_SPACE']            = 'Espace Disque';
$L['FREE']                  = 'Libre';
$L['QBITTORRENT_TORRENTS']  = 'torrents chargés dans qBittorrent';
$L['RT_TORRENTS']           = 'torrents chargés dans rTorrent';
$L['NO_CLIENTS']            = 'Aucun client torrent ou nzb n\'est actuellement installé';
$L['SIZE']                  = 'Taille';
$L['CURRENT_USERS_ONLINE']  = 'Utilisateurs Actuellement en Ligne';
$L['THERE_ARE']             = 'Vous avez';
$L['TRANSMISSION_TORRENTS'] = 'torrents chargés dans Transmission';
$L['USED']                  = 'Utilisé';
$L['YOUR_DISK_STATUS']      = 'Statut Du Disque';
$L['NZBGET_NZB']            = 'nzb chargé dans NZBGet';
$L['SABNZBD_NZB']           = 'nzb chargé dans SABnzbd';

/* **********************************
 * #3.3.2 - System Index v1 : bandwidth data widget
 ************************************/
$L['BANDWIDTH_DAILY']    = 'Quotidien';
$L['BANDWIDTH_DATA']     = 'Bande Passante';
$L['BANDWIDTH_HOURLY']   = 'Cette Heure';
$L['BANDWIDTH_LIVE']     = 'Direct';
$L['BANDWIDTH_MONTHLY']  = 'Mensuel';
$L['datefmt_days_img']   = '%d';
$L['datefmt_days']       = '%d %B';
$L['datefmt_hours_img']  = '%l';
$L['datefmt_hours']      = '%l%p';
$L['datefmt_months_img'] = '%b';
$L['datefmt_months']     = '%B %Y';
$L['datefmt_top']        = '%d %B %Y';
$L['NETWORK']            = 'Réseau';
$L['DOWNLOAD']           = 'Download';
$L['UPLOAD']             = 'Upload';

/* **********************************
 * #3.3.3 - System Index v1 : server load widget
 ************************************/
$L['DAYS_L']      = 'jours';
$L['HOURS_L']     = 'heures';
$L['MINUTES_L']   = 'min';
$L['SECONDS_L']   = 'sec';
$L['SERVER_LOAD'] = 'Charge Serveur';
$L['SL_TXT']      = 'Ceci est la moyenne de charge de votre serveur.';
$L['UPTIME']      = 'Uptime';

/* **********************************
 * #3.3.4 - System Index v1 : memory status widget
 ************************************/
$L['CACHED_MEMORY']     = 'Utilisation de la Mémoire Cache';
$L['CLEAR_CACHE']       = 'Nettoyer le cache Mémoire';
$L['CM_BUFFERS']        = 'Mémoire tampon est à';
$L['CM_USAGE']          = 'Mémoire cache utilisée :';
$L['PHYSICAL_MEMORY']   = 'Utilisation de la Mémoire Physique';
$L['PM_IDLE']           = 'Libre';
$L['PM_USED']           = 'Utilisé';
$L['REAL_MEMORY']       = 'Utilisation de la Mémoire Réelle';
$L['RM_FREE']           = 'Mémoire Réelle libre:';
$L['RM_USAGE']          = 'Mémoire Réelle utilisée:';
$L['SWAP_IDLE']         = 'Libre:';
$L['SWAP_TOTAL']        = 'total';
$L['SWAP_USAGE']        = 'Utilisation Swap';
$L['SWAP_USED']         = 'Utilisé:';
$L['SWAP_ZONE']         = 'Zone SWAP';
$L['SYSTEM_RAM_STATUS'] = 'Statut mémoire RAM';
$L['TOTAL_RAM']         = 'RAM Totale du Système: ';
$L['TOTAL']             = 'Total';

/* **********************************
 * #3.3.5 - server activity widget
 ************************************/
$L['ACC_REQ_ACT']         = 'comptes nécessitant une activation';
$L['GUESTS_ONLINE']       = 'invités en ligne';
$L['LAST_ACTIVE_ON']      = 'a été actif pour la dernière fois les';
$L['LOGGED_ON']           = 'connecté le';
$L['MEMBERS']             = 'membres';
$L['RECORD_ONLINE']       = 'Record Utilisateurs connectés';
$L['THERE_ARE_AW']        = 'Il y a';
$L['THERE_ARE_CURRENTLY'] = 'Il y a actuellement';
$L['USERS_AND']           = 'utilisateurs et';
$L['USERS_LAST_VISIT']    = 'nouveaux utilisateurs inscrits depuis votre dernière visite';
$L['CLEAR']               = 'nettoyer';

/* ********************************************************************************
 * #4 PAGES
 *
 * #4.1 - START SCREEN FORMS (login/forgot pass/register/account)
 *
 * #4.1.1 - LOGIN
 ************************************/
$L['CONFIRM_PASS_FIELD_PLACE'] = 'Merci de confirmer votre adresse e-mail.';
$L['CREATE_ACCOUNT']           = 'Créer un compte';
$L['REMEMBER_ME']              = 'Souviens-toi de Moi';
$L['FORGOT_PASS']              = 'Mot de passe oublié?';
$L['LOG_IN']                   = 'S\'identifier';
$L['LOGIN_ACCOUNT']            = 'Connectez-vous à votre compte pour continuer.';
$L['LOGIN_USERNAME_INVALID']   = 'La connexion est invalide. Veuillez vérifier votre nom d\'utilisateur et réessayer';
$L['LOGIN_PASSWORD_INVALID']   = 'La connexion est invalide. Veuillez vérifier votre mot de passe et réessayer';
$L['LOGIN_MISSING_USERNAME']   = 'Nom d\'utilisateur non saisi';
$L['LOGIN_MISSING_PASSWORD']   = 'Mot de passe non saisi';
$L['PASS_FIELD_INVALID']       = 'Veuillez fournir votre mot de passe.';
$L['PASS_FIELD_PLACE']         = 'Veuillez saisir votre mot de passe.';
$L['PASS_FIELD_VALID']         = 'Mot de passe fourni, validation prête.';
$L['REGISTRATION_DISABLED']    = 'Inscription est actuellement désactivée.';
$L['SIGN_IN']                  = 'Se connecter';
$L['UNREGISTERED']             = 'Pas de compte?';
$L['USER_FIELD_INVALID']       = 'Veuillez fournir votre nom d\'utilisateur.';
$L['USER_FIELD_PLACE']         = 'Veuillez saisir votre nom d\'utilisateur.';
$L['USER_FIELD_VALID']         = 'Nom d\'utilisateur fourni, validation prête.';
$L['ACCOUNT_BANNED']           = 'Votre compte a été banni.<br/>Veuillez contacter un administrateur système.';
$L['ACCOUNT_DISABLED']         = 'Votre compte n\'est pas activé ou est désactivé.<br/>Si vous pensez qu\'il s\'agit d\'un problème, veuillez contacter un administrateur système.';
$L['ACCOUNT_INACTIVE_ADMIN']   = 'Votre compte n\'a pas été activé par un administrateur.';
$L['ACCOUNT_INACTIVE_EMAIL']   = 'Votre compte n\'a pas été activé.<br/>Veuillez vérifier votre e-mail pour le lien d\'activation.';
$L['IP_BANNED']                = 'Votre adresse IP a été bannie.<br/>Veuillez contacter un administrateur système.';

/* **********************************
 * #4.1.2 - FORGOT PASSWORD
 ************************************/
$L['EMAIL_FIELD_INVALID']      = 'Veuillez fournir votre email.';
$L['EMAIL_FIELD_PLACE']        = 'Veuillez saisir votre email.';
$L['EMAIL_FIELD_VALID']        = 'Email fourni, validation prête.';
$L['PASS_GENERATED']           = 'Nouveau Mot de Passe Généré !';
$L['PASS_GENERATED_INFO']      = 'Votre nouveau mot de passe a été généré et envoyé à l\'e-mail associé à votre compte.';
$L['PASS_GENERATED_FAIL']      = 'Échec Nouveau Mot de Passe !';
$L['PASS_GENERATED_FAIL_INFO'] = 'Une erreur s\'est produite lors de l\'envoi de l\'e-mail avec le nouveau mot de passe. Votre mot de passe n\'a donc pas été modifié.';
$L['RECOVER_INFO']             = 'Entrez votre e-mail et des instructions vous seront envoyées!';
$L['RECOVER']                  = 'Récupération Mot de Passe';
$L['PASSWORD_RESET']           = 'Réinitialisation du mot de passe';
$L['CONFIRM_PASSWORD']         = 'Confirmer le mot de passe';

/* **********************************
 * #4.1.3 - REGISTER
 ************************************/
$L['ACCOUNT_CREATED']           = 'Votre compte a été créé. ';
$L['ACTIVATED_USER']            = 'Utilisateur activé ';
$L['CAN_LOGIN']                 = 'pour votre inscription. Vous pouvez maintenant vous connecter';
$L['CREATED_ADM_ACT']           = 'Cependant, cette carte nécessite l\'activation du compte par un administrateur. Vous serez informé par e-mail de l\'activation de votre compte';
$L['CREATED_CHECK_EMAIL']       = 'Veuillez vérifier votre e-mail pour plus d\'informations';
$L['CREATED_EMAIL_ACT']         = 'Cependant, cette carte nécessite l\'activation du compte. Une clé d\'activation a été envoyée à l\'adresse e-mail que vous avez fournie';
$L['EMAIL_EMPTY']               = 'Email non renseigné';
$L['EMAIL_INVALID']             = 'L\'email est invalide';
$L['EMAIL_MATCH']               = 'Les adresses e-mail ne correspondent pas';
$L['EMAIL_TAKEN']               = 'Adresse e-mail déjà enregistrée';
$L['RCONF_EMAIL_FIELD_INVALID'] = 'Cet e-mail ne correspond pas à celui entré précédemment. Veuillez réessayer.';
$L['RCONF_EMAIL_FIELD_VALID']   = 'Correspondance des e-mails, validation prête.';
$L['RCONF_PASS_FIELD_INVALID']  = 'Ce mot de passe ne correspond pas à celui entré précédemment. Veuillez réessayer.';
$L['RCONF_PASS_FIELD_VALID']    = 'Correspondance des mots de passe, validation prête.';
$L['REG_C_DISABLED_INFO1']      = 'mais l\'inscription à ce site est actuellement désactivée';
$L['REG_C_DISABLED_INFO2']      = 'Veuillez réessayer ultérieurement ou contacter le propriétaire du serveur';
$L['REG_C_DISABLED']            = 'L\'inscription est actuellement désactivée';
$L['REG_DISABLED_INFO']         = 'Nous sommes désolés mais l\'inscription est actuellement désactivée. Veuillez réessayer ultérieurement.';
$L['REG_DISABLED']              = 'Inscription désactivée';
$L['REG_FORM_INFO']             = 'Veuillez remplir le formulaire ci-dessous pour créer un compte';
$L['REGISTERED_TXT']            = 'Inscrit !';
$L['REG_FAILED']                = 'L\'enregistrement a échoué';
$L['REG_ERROR_INFO_1']          = 'Nous sommes désolés, mais une erreur s\'est produite et votre enregistrement pour le nom d\'utilisateur ';
$L['REG_ERROR_INFO_2']          = ' n\'a pas pu être terminé. Veuillez réessayer ultérieurement.';
$L['SORRY']                     = 'Nous sommes désolés';
$L['THANKS']                    = 'Je vous remercie';
$L['USERNAME_EMPTY']            = 'Nom d\'utilisateur non saisi';
$L['USERNAME_BELOW']            = 'Nom d\'utilisateur ci-dessous';
$L['USERNAME_ABOVE']            = 'Nom d\'utilisateur ci-dessus';
$L['CARACTÈRES']               = 'caractères';
$L['USERNAME_REQUIREMENTS']     = 'Le nom d\'utilisateur ne correspond pas aux exigences';
$L['USERNAME_WORD_RESERVED']    = 'Mot réservé du nom d\'utilisateur';
$L['USERNAME_TAKEN']            = 'Nom d\'utilisateur déjà utilisé';
$L['USERNAME_DISALLOWED']       = 'Nom d\'utilisateur non autorisé';
$L['REG_IP_BANNED']             = 'Adresse IP interdite';
$L['PASSWORD_EMPTY']            = 'Mot de passe non saisi';
$L['PASSWORD_SHORT']            = 'Mot de passe trop court';
$L['PASSWORD_LONG']             = 'Mot de passe trop long';
$L['PASSWORD_MATCH']            = 'Les mots de passe ne correspondent pas';
$L['QUOTA_EMPTY']               = 'Quota de disque non saisi';

/* **********************************
 * #4.1.4 - ACCOUNT
 ************************************/
$L['ADMIN_EDIT_ACC'] = 'Editer le compte Admin';
$L['EDIT_ACCOUNT']   = 'Editer le compte';
$L['USER_LINKS']     = 'Liens Utiles';
$L['ADMIN_LINKS']    = 'Administration';
$L['Q_APP_DASH']     = 'Tableau de Bord Applications';
$L['Q_SYS_DASH']     = 'Tableau de Bord Système';
$L['RESET_PASS']     = 'Réinitialiser mot de passe';
$L['RESET_PASSWORD'] = 'Réinitialiser votre mot de passe';
$L['USER_PROFILE']   = 'Mon profil';
$L['PWD_CHANGE']     = 'Mot de passe modifié';
$L['EMAIL_CHANGE']   = 'E-mail modifié';

/* **********************************
 * #4.1.4.1 - quotes
 ************************************/
$L['HEY']                 = 'Salut';
$L['DAYUM']               = 'Génial';
$L['SO_GLAD']             = 'Tellement content que vous soyez là';
$L['HOW_AWESOME']         = 'comment êtes vous devenu si génial?';
$L['LOOK_GOOD']           = 'Vous avez l\'air bien!';
$L['WITHOUT_YOU']         = 'où serais-je sans vous!';
$L['QUICKBOX_DEDICATION'] = 'nous aimons votre dévouement à QuickBox!!!';

/* **********************************
 * #4.1.4.2 - edit account modal
 ************************************/
$L['CONFIRM_NEW_PASS_INFO'] = 'Veuillez confirmer votre nouveau mot de passe.';
$L['CURRENT_PASS']          = 'Mot de passe actuel';
$L['NEW_EMAIL']             = 'Nouvelle adresse email';

/* **********************************
 * #4.1.5 - SUMMARY
 ************************************/
$L['AWESOME']             = 'Impressionnant';
$L['WITH_PASSWORD']       = 'avec le mot de passe';
$L['USER_ADDED_TO_DB']    = 'a été ajouté à la base de données';
$L['RETURN_PREVIOUS']     = 'Retourner à la page précédente';
$L['REGI_FAIL']           = 'Échec de l\'inscription';
$L['REGI_FAIL_ERR1']      = 'Nous sommes désolés, mais une erreur s\'est produite et votre inscription pour le nom d\'utilisateur';
$L['REGI_FAIL_ERR2']      = 'n\'a pas pu être terminé';
$L['REGI_FAIL_ERR3']      = 'Veuillez réessayer';
$L['REGI_FAIL_ERR_FOUND'] = 'erreur(s) trouvée(s)';

/* **********************************
 * #4.2 - SETTINGS
 *
 * #4.2.1 - GENERAL SETTINGS
 ************************************/
$L['ACCOUNT_PAGE']                      = 'Page du compte';
$L['ACTION_NOT_EXECUTED']               = 'Action non exécutée.';
$L['ACTIVATION_IP']                     = 'IP d\'activation';
$L['ACTIVATION_NEED_D_DO']              = 'Faites-les ici!';
$L['ACTIVATION_NEED_D']                 = 'Besoin de désactiver votre clé?';
$L['ACTIVATION_NEED_G_GET']             = 'Obtenez-en une ici!';
$L['ACTIVATION_NEED_G']                 = 'Besoin d\'une clé API?';
$L['ACTIVATION_TIME']                   = 'Activée le';
$L['ADD_DASH_SETTINGS']                 = 'Paramètres supplémentaires Tableau de Bord';
$L['ADMIN_HOME']                        = 'Page d\'accueil';
$L['API_ACTIVE']                        = 'Valide';
$L['API_KEY']                           = 'Clé API';
$L['API_NOT_ACTIVE']                    = 'Invalide';
$L['API_PLACE']                         = 'Entrez votre clé API ici...';
$L['API_SETTINGS']                      = 'Contrôle clé API';
$L['API_STATUS']                        = 'Validité';
$L['API']                               = 'API';
$L['BANDWIDTH_RESET_STATS']             = 'Réinitialiser les statistiques de bande passante';
$L['BANDWIDTH_RESET_STATS_TOOLTIP']     = 'Cela réinitialisera toutes les statistiques de bande passante collectées. Cette action est irréversible et supprimera effectivement la base de données vnStat actuelle et en créera une nouvelle. De nouvelles données commenceront à repeupler la base de données dans les 5 minutes.<br/><br/>Une sauvegarde de la base de données vnStat actuelle sera stockée à : <code>/opt/quickbox/backup/system/[Y-m-d_H-M-S]/vnstat/vnstat.db</code>';
$L['BANDWIDTH_RESET_STATS_DB_TOOLTIP']  = 'Cliquez pour actualiser la taille actuelle de la base de données. Cela se fait au chargement de la page, mais est utile pour refléter la taille si vous réinitialisez une base de données plus grande.<br/><br/><em>Remarque : cela n\'affecte pas les données stockées dans la base de données. Cela met uniquement à jour la taille de la base de données publiée.</em>';
$L['BANDWIDTH_START_DATE']              = 'Date de début de la bande passante';
$L['BANDWIDTH_START_DATE_TOOLTIP']      = 'Sélectionnez la date de début de la surveillance de la bande passante. Le jour choisi se répétera tous les mois, idéal pour le suivi à partir de dates spécifiques comme les réinitialisations de FAI ou les configurations de serveur.<br/>Cela s\'applique aux totaux affichés sur le tableau de bord système.<br/><br/><em>Remarque : les données existantes ne seront pas affectées.</em>';
$L['CALCULATING']                       = 'Calcul en cours...';
$L['CONF_SETTINGS']                     = 'Paramètres de configuration';
$L['CONFIRM_RESET_BANDWIDTH_TITLE']     = 'Confirmer la réinitialisation de la bande passante';
$L['CONFIRM_RESET_BANDWIDTH_SUBTEXT']   = 'La réinitialisation des statistiques de bande passante supprimera la base de données vnStat actuelle et en créera une nouvelle.<br/><div class=\'mt-3 p-3\' style=\'text-align:left;background:var(--qb-color-26);border-radius:6px;\'><p style=\'font-size:13px;color:var(--qb-color-5)\'>Une sauvegarde de la base de données actuelle sera créée avec les détails suivants :</p><ul class=\'mb-0\'><li class=\'mb-2\'>Répertoire :<br/><code>/opt/quickbox/backup/system/[Y-m-d_H-M-S]/vnstat/</code></li><li>Nom de fichier :<br/><code>vnstat.db</code></li></ul></div><br/>Êtes-vous sûr tu veux continuer ?';
$L['DASH_URL_SETTINGS']                 = 'Paramètres d\'accès à la Dashboard';
$L['DEFAULT_PAGE']                      = 'Page de démarrage';
$L['DISK_MOUNT']                        = 'Montage disque';
$L['EDIT_GEN_SETTINGS']                 = 'Editer les paramètres généraux du site';
$L['EMAIL_FROM_ADDR']                   = 'Adresse de l\'expéditeur';
$L['EMAIL_FROM_NAME']                   = 'Expéditeur de l\'email';
$L['EMAIL_SETTINGS']                    = 'Paramètres email';
$L['ERROR']                             = 'Erreur';
$L['LOADING']                           = 'Chargement...';
$L['LOGIN_PAGE']                        = 'Page de connexion';
$L['NET_ADAPTER']                       = 'Interface réseau';
$L['PHP_DATE_FORMAT']                   = 'Format de la date';
$L['PHP_FORMAT_SETTINGS']               = 'Paramètres Format PHP';
$L['PHP_TIME_ZONE']                     = 'Fuseau Horaire';
$L['RESET_BANDWIDTH_CANCEL']            = 'Non, Annuler';
$L['RESET_BANDWIDTH_CANCELLED']         = 'Réinitialisation de la bande passante annulée';
$L['RESET_BANDWIDTH_CONFIRM']           = 'Oui, réinitialiser';
$L['RESET_BANDWIDTH_STATS']             = 'Réinitialiser les statistiques de bande passante';
$L['SITE_DESC']                         = 'Description';
$L['SITE_META_SETTINGS']                = 'Paramètres Métadonnées';
$L['SITE_NAME']                         = 'Nom du site';
$L['SITE_ROOT']                         = 'Chemin du site';
$L['SITE_NAME_TOOLTIP']                 = 'Le nom du site doit comporter moins de 40 caractères et alphanumérique uniquement sans caractères spéciaux (les espaces sont acceptables)';
$L['SITE_DESC_TOOLTIP']                 = 'La description du site doit comporter moins de 120 caractères et alphanumérique uniquement sans caractères spéciaux (les espaces sont acceptables)';
$L['EMAIL_FROM_NAME_TOOLTIP']           = 'De Le nom doit comporter moins de 60 caractères et alphanumérique uniquement sans caractères spéciaux (les espaces sont acceptables)';
$L['SITE_ROOT_TOOLTIP']                 = 'Entrez l\'IP de votre serveur ou un domaine valide sans barre oblique à la fin. exemple: https://192.168.0.1 (ou) https://somedomain.com';
$L['SITE_LOGO_COLLAPSED']               = 'Logo réduit';
$L['SITE_LOGO_FULL']                    = 'Logo complet';
$L['SITE_LOGO_SETTINGS']                = 'Paramètres du logo du site';
$L['SITE_LOGO_COLLAPSED_TOOLTIP']       = 'Ceci est le logo qui s\'affichera lorsque la barre latérale sera réduite et sera utilisé comme icône de l\'onglet du navigateur.';
$L['SITE_LOGO_FULL_TOOLTIP']            = 'Ceci est le logo qui sera affiché lorsque la barre latérale sera agrandie.';
$L['UNEXPECTED_ERROR']                  = 'Une erreur inattendue s\'est produite.';
$L['UNKNOWN_ERROR']                     = 'Une erreur inconnue s\'est produite.';
$L['VNSTAT_DATABASE_DELETE_SUCCESSFUL'] = 'La base de données vnStat a été supprimée avec succès.';
$L['VNSTAT_DATABASE_DELETE_FAILED']     = 'Échec de la suppression de la base de données vnStat.';
$L['VNSTAT_DATABASE_DELETE_INVALID']    = 'Requête non valide.';

/* **********************************
 * #4.2.2 - EMAIL SETTINGS
 ************************************/
$L['SMTP_AUTH']     = 'Activer authentification SMTP';
$L['SMTP_SECURE']   = 'Activer le cryptage SSL, TLS également accepté avec le port 465';
$L['MAIL_HOST']     = 'Configurez le serveur SMTP pour envoyer via';
$L['MAIL_PORT']     = 'Port TCP auquel se connecter';
$L['MAIL_USERNAME'] = 'Utilisateur SMTP';
$L['MAIL_PASS']     = 'Mot de passe SMTP';

/* **********************************
 * #4.2.3 - SESSION SETTINGS
 ************************************/
$L['CHANGE_SESSION_SETTINGS'] = 'Modifier les paramètres concernant les sessions.';
$L['COOKIE_EXPIRY']           = 'Expiration des cookies';
$L['COOKIE_PATH']             = 'Chemin des cookies';
$L['DAYS']                    = 'Jours';
$L['GUEST_TIMEOUT']           = 'Expiration de l\'invité';
$L['MINUTES']                 = 'Minutes';
$L['RESET_EXPIRY']            = 'Réinitialiser l\'expiration à l\'ouverture de session';
$L['USER_TIMEOUT']            = 'Délai d\'inactivité de l\'utilisateur';

/* **********************************
 * #4.2.4 - USER SETTINGS
 ************************************/
$L['ALLOW_MULTI_LOGINS']                   = 'Connexions multiples';
$L['ALLOW_MULTI_LOGINS_DESC']              = 'Cette option permet des connexions simultanées à partir de plusieurs appareils. Si désactivé, l\'utilisateur sera déconnecté de tous les autres appareils lorsqu\'il se connectera à partir d\'un nouvel appareil.';
$L['ALLOW_CONFIG_EDITING']                 = 'Éditeurs de configuration sur le tableau de bord';
$L['ALLOW_CONFIG_EDITING_DESC']            = 'Cette option permet de modifier les fichiers de configuration depuis le tableau de bord. Si elle est désactivée, l\'option permettant d\'afficher/modifier les configurations sera masquée.';
$L['ALLOW_MOUNT_INFO']                     = 'Monter le panneau de surveillance et d\'ajout';
$L['ALLOW_MOUNT_INFO_DESC']                = 'Cette option permet aux utilisateurs d\'afficher et d\'ajouter des répertoires à surveiller à partir du tableau de bord. Si désactivé, la possibilité d\'afficher et d\'ajouter des répertoires sera masquée.';
$L['ALLOW_AUTOBACKUP_APP_ON_INSTALL']      = 'Application de sauvegarde automatique lors de l\'installation';
$L['ALLOW_AUTOBACKUP_APP_ON_INSTALL_DESC'] = 'Cette option permet la sauvegarde complète automatique de l\'application lors de son installation. Si cette option est désactivée, les applications ne seront pas sauvegardées une fois installées. <span style="color:var(--qb-color-41);">Les fichiers de configuration de l\'application seront sauvegardés quel que soit ce paramètre.</span><br>Les sauvegardes sont stockées à :<br><code>/home/[NOM D\'UTILISATEUR]/.QuickBox/software/</code>';
$L['BY_ADMIN']                             = 'Par l\'administrateur (réglages en dessous..)';
$L['BY_USER']                              = 'Par l\'utilisateur (voir la page d\'administration utilisateur)';
$L['CHANGE_USER_SETTINGS']                 = 'Modifier les paramètres globaux pour les utilisateurs';
$L['EXCLUDE_ADMINS']                       = 'Exclure les administrateurs';
$L['EXCLUDE_REDIRECTED_ADMINS']            = 'Empêcher la redirection des Administrateurs.';
$L['GEN_USER_SETTINGSTINGS']               = 'Paramètres généraux de l\'utilisateur';
$L['HOW_SET']                              = 'Comment sont-ils réglés?';
$L['INDIV_USER_HOME']                      = 'Pages d\'accueil Utilisateur Individuelles';
$L['INDIVIDUAL_USER_FOLDERS']              = 'Dossiers Utilisateur Individuels';
$L['PATH_ADMIN']                           = 'Chemin (défini par Admin)';
$L['SITE_ROOT_RELATIVE']                   = 'Relatif à la racine du site';
$L['SETTING']                              = 'Paramètre';
$L['DESCRIPTION']                          = 'La Description';
$L['VALUE']                                = 'Valeur';

/* **********************************
 * #4.2.5 - SECURITY SETTINGS
 ************************************/
$L['BAN_IP_ADDRESS']       = 'Bannir l\'adresse IP';
$L['BAN_IP_INFO']          = 'exemple: 192.168.0.1';
$L['BAN_IP_REGISTER']      = 'Interdire les adresses IP d\'enregistrement (ou de connexion)';
$L['BANNED_IP_ADDRESSES']  = 'Adresses IP bannies';
$L['DISALLOW_USERNAME']    = 'Désactiver l\'utilisateur';
$L['DISALLOWED_USERNAME']  = 'Nom d\'utilisateur non autorisé';
$L['DISALLOW_USERNAMES']   = 'Interdire l\'utilisateur';
$L['DISALLOWED_USERNAMES'] = 'Utilisateurs interdits';
$L['PREVENT_USERNAMES']    = 'Empêcher les utilisateurs d\'être enregistrés';

/* **********************************
 * #4.3 - USER MANAGEMENT
 *
 * #4.3.1 - REGISTRATION SETTINGS
 ************************************/
$L['ACCOUNT_ACTIVATION']           = 'Activation des comptes';
$L['ADMIN_ACT']                    = 'Validation par l\'administrateur';
$L['ADMIN_ACT_INFO']               = 'Lorsque cette option est sélectionnée, après l\'inscription, l\'utilisateur sera informé qu\'il doit attendre que l\'administrateur active le compte. L\'utilisateur recevra également un e-mail à cet effet, tout comme l\'administrateur qui aura alors la possibilité d\'activer l\'utilisateur avec le lien fourni dans l\'e-mail ou de visiter le panneau d\'administration et d\'y activer l\'utilisateur.';
$L['ALPHANUMERIC_ONLY']            = 'Seulement Alphanumérique';
$L['ALPHANUMERIC_SPACERS']         = 'Alphanumerique + Espaces';
$L['ANY_CHARS']                    = 'Tous les caractères';
$L['ANY_LETTER_NUM']               = 'Alphanumérique + Symboles';
$L['DEFAULT_QUOTA_ALLOWANCE']      = 'Allocation de quota par défaut';
$L['DEFAULT_QUOTA_ALLOWANCE_INFO'] = 'Définissez un montant de quota par défaut pour les nouveaux comptes créés. Cette valeur n\'est utilisée que lorsque le package Linux Quota est installé.';
$L['DISABLE_REGISTRATION']         = 'Interdire l\'inscription';
$L['DISABLE_REGISTRATION_INFO']    = 'Ceci désactive l\'enregistrement. Le formulaire d\'inscription ne s\'affiche pas et est remplacé par un message d\'information.';
$L['ENABLE_CAPTCHA']               = 'Activer Captcha';
$L['LETTER_NUM_AND_SPACE']         = 'Alphanumérique + Symboles + Espaces';
$L['LIMIT_CHAR']                   = 'Caractères de nom d\'utilisateur';
$L['NO_ACTIVATION']                = 'Pas d\'activation (accès immédiat)';
$L['NO_ACTIVATION_INFO']           = 'Cette option permet à l\'utilisateur de s\'enregistrer normalement sans avoir besoin d\'un processus d\'activation supplémentaire.';
$L['PASSWORD_LENGTH']              = 'Longueur mot de passe';
$L['RECOMMENDED']                  = 'QuickBox recommandé';
$L['REG_SETTINGS_INFO']            = 'Changez les paramètres concernant l\'inscription sur le site.';
$L['REG_SETTINGS']                 = 'Paramètres d\'inscription';
$L['SEND_WELCOME_EMAIL']           = 'Envoyer e-mail de bienvenue';
$L['SEND_WELCOME_EMAIL_YES_INFO']  = 'La définition de cette option sur Oui envoie des e-mails de bienvenue à l\'utilisateur, ainsi qu\'à l\'administrateur système. Cette option nécessite une configuration SMTP pour envoyer correctement les e-mails. Ces options peuvent être contrôlées sur la page <a href="/email-settings.php" style="color: var(--qb-color-29);text-decoration: underline;">Paramètres de messagerie</a>.';
$L['SEND_WELCOME_EMAIL_NO_INFO']   = 'Régler cette option sur Non n\'enverra pas d\'e-mails de bienvenue aux utilisateurs nouvellement enregistrés. Toute création/enregistrement d\'utilisateur reste silencieux, un peu comme la création d\'utilisateur dans l\'environnement CLI.';
$L['USER_ACT']                     = 'Activation par l\'utilisateur (e-mail verification)';
$L['USER_ACT_INFO']                = 'La définition de cette option nécessite que l\'utilisateur active son compte en cliquant sur un lien envoyé à son adresse e-mail enregistrée.';
$L['USERNAME_LENGTH']              = 'Longueur nom d\'utilisateur';
$L['USERNAME_LOWERCASE']           = 'Utilisateurs en minuscule';
$L['USERNAME_LOWERCASE_YES_INFO']  = 'Définir cette option sur Oui change tous les nouveaux noms d\'utilisateur enregistrés en minuscules. C\'est l\'option recommandée.';
$L['USERNAME_LOWERCASE_NO_INFO']   = 'Définir cette option sur Non ne changera pas les nouveaux noms d\'utilisateur enregistrés en minuscules. Les noms d\'utilisateur apparaîtront tels qu\'ils sont enregistrés, mais conserveront les minuscules dans l\'enironnement du serveur pour un bon fonctionnement du logiciel.';

/* **********************************
 * #4.3.2 - USER ADMINISTRATION
 ************************************/
$L['ADMIN_ANNOUNCE']        = 'Annonces de l\'administrateur';
$L['AWAITING_ADMIN']        = 'Attente d\'activation par l\'administrateur';
$L['AWAITING_EMAIL']        = 'En attente d\'activation par email';
$L['BANNED']                = 'Banni';
$L['CU_CONFIRM_EMAIL_INFO'] = 'Confirmez email';
$L['CU_CONFIRM_EMAIL']      = 'Confirmation email';
$L['CU_CONFIRM_PASS_INFO']  = 'Confirmez votre mot de passe';
$L['CU_CONFIRM_PASSWORD']   = 'Confirmation Mot de Passe';
$L['CU_DISK_QUOTA']         = 'Espace Disque:';
$L['CU_GROUP']              = 'Groupe';
$L['CU_EMAIL']              = 'email';
$L['CU_NEW_PASS_INFO']      = 'Tapez votre nouveau mot de passe';
$L['CU_NEW_PASSWORD']       = 'Nouveau Mot de Passe';
$L['CU_SHELL_ENV']          = 'Environnement shell préféré';
$L['CURRENT_SHELLS']        = 'Shell actuel';
$L['CURRENT_USERS']         = 'Utilisateurs Actuels';
$L['DEFAULT_GROUP_TAG']     = 'par défaut';
$L['DELETED_ALL_SESSIONS']  = 'Supprimé toutes les sessions';
$L['DISK_STATUS']           = 'Statut du disque';
$L['EDIT_USER_SHELL']       = 'Modifier l\'environnement du shell des utilisateurs';
$L['EXPIRY']                = 'Expiration';
$L['HAS_USED']              = 'a utilisé';
$L['IP_ADDRESS']            = 'Adresse IP';
$L['LAST_IP_ADDRESS']       = 'Dernière Adresse IP';
$L['LAST_LOGIN']            = 'Dernière connexion:';
$L['LAST']                  = 'Dernière';
$L['MEMBER_STATUS']         = 'Statut Membre';
$L['MEMBER_GROUP']          = 'Groupe de Membre';
$L['OF_QUOTA']              = 'de son espace disque';
$L['RECENTLY_ONLINE']       = 'Connecté Récemment';
$L['REGISTERED_DISK_QUOTA'] = 'Quota de Disque';
$L['REGISTERED']            = 'Inscrit le';
$L['REGISTRATION_LOGIN']    = 'Inscription et Connexion';
$L['STATISTICS']            = 'Statistiques';
$L['USER_ACTIVITY']         = 'Activité de l\'Utilisateur';
$L['PASSWORD_NOTICE']       = 'Le mot de passe ne doit pas contenir les caractères suivants';
$L['USER_QUOTA_HELP']       = 'Entrez la quantité d\'espace disque que vous souhaitez attribuer à un utilisateur. Les quotas doivent être installés pour pouvoir utiliser cette option.';
$L['USER_SHELL_HELP']       = 'Sélectionnez la liste déroulante ci-dessus pour ajouter l\'utilisateur à un shell.';
$L['USERNAME_ADMIN_USER']   = 'Utilisateur:';
$L['USERNAMES']             = 'utilisateurs';
$L['USERS_AWAITING']        = 'Utilisateurs en attente d\'activation';
$L['USERS_SESSIONS']        = 'Sessions utilisateurs';

/* **********************************
 * #4.3.2.1 - admin user edit
 ************************************/
$L['ACTIONS']                 = 'Actions';
$L['ACTIVE_SESSION']          = 'Session Active';
$L['APPLICATION']             = 'Applications';
$L['BANNED_USER']             = 'Utilisateur banni';
$L['CURRENT_FULL_PATH']       = 'Chemin Complet Actuel';
$L['CURRENT_GROUPS']          = 'Groupes Actuels';
$L['CURRENT_STATUS']          = 'Statuts Actuels';
$L['EDIT_DEFAULT_GROUP']      = 'Groupe par défaut';
$L['EDIT_DEFAULT_GROUP_INFO'] = 'Cette option, lorsqu\'elle est sélectionnée, le définira comme groupe par défaut. Ceci est utile lors de la création d\'utilisateurs via CLI et que vous souhaitez qu\'un groupe personnalisé soit affecté par défaut.';
$L['EDIT_GROUP_MEMBERSHIP']   = 'Modifier l\'appartenance de l\'Utilisateur au Groupe';
$L['EU_PATH']                 = 'Chemin';
$L['GENERAL_INFO']            = 'Informations Générales';
$L['GROUP_MEMBERSHIP_HELP']   = 'Cliquez sur la zone de texte ci-dessous pour ajouter l\'utilisateur à plus de groupes ...';
$L['GROUP_MEMBERSHIP']        = 'Appartenance à un groupe';
$L['HOMEPAGE']                = 'Page d\'Accueil';
$L['INSTRUCTIONS']            = 'Instructions';
$L['LAST_ACTIVE_IP']          = 'Dernière IP Active';
$L['LAST_ACTIVE']             = 'Dernière Activité';
$L['LAST_UPDATE']             = 'Dernière Mise à Jour';
$L['PERSISTENT']              = 'Persistance';
$L['REGISTERED_IP']           = 'IP Enregistrée';
$L['SESSION_EXPIRY']          = 'Expiration de la Session';
$L['STATUS']                  = 'Statut';
$L['UNBANNED_USER']           = 'Utilisateur non banni';
$L['UNIQUE_USER_HP_SETTINGS'] = 'Paramètres de la Page d\'Accueil Utilisateur Unique';
$L['USER_EDIT1']              = 'Edition Utilisateur :';
$L['USER_EDIT2']              = 'Editer Utilisateur';
$L['SELECT_GROUP']            = 'Sélectionner un groupe';

/* **********************************
 * #4.3.2.2 - admin announce
 ************************************/
$L['ENABLE_USER_ANNOUNCE']          = 'Activer l\'annonce du tableau de bord';
$L['ANNOUNCEMENT_HISTORY']          = 'Vos annonces précédentes';
$L['TYPE']                          = 'Type';
$L['USER']                          = 'Utilisateur';
$L['TIME']                          = 'Heure';
$L['ANNOUNCEMENT_LIST']             = 'Contenu de l\'annonce';
$L['GLOBAL_USER_ANNOUNCEMENT']      = 'Global (tous les utilisateurs)';
$L['CREATE_DASHBOARD_ANNOUNCEMENT'] = 'Créer une annonce sur le tableau de bord';
$L['GLOBAL_ANNOUNCEMENT']           = 'Annonce globale';
$L['GLOBAL_ANNOUNCEMENT_INFO']      = 'La sélection de cette option créera une annonce globale visible sur le tableau de bord de chaque utilisateur, quelle que soit son appartenance au groupe. Si vous avez déjà attribué une annonce à un utilisateur, elle sera affichée à côté de cette annonce globale.';
$L['SELECT_USER']                   = 'Sélectionner un utilisateur :';
$L['SELECT_ANNOUNCEMENT_TYPE']      = 'Type d\'annonce :';
$L['EDIT_DASHBOARD_ANNOUNCEMENT']   = 'Modifier l\'annonce du tableau de bord';
$L['EDIT_ANNOUNCEMENT_INFO']        = 'La modification et l\'enregistrement d\'une annonce existante réinitialiseront sa visibilité sur le tableau de bord de l\'utilisateur spécifié. Si l\'annonce est globale, elle réinitialisera également l\'historique de visualisation sur les tableaux de bord de tous les utilisateurs.';
$L['ANNOUNCEMENT_ID']               = 'Identifiant de l\'annonce';
$L['ANNOUNCEMENT_TYPE']             = 'Type d\'annonce';
$L['PREVIEW']                       = 'Aperçu';

/* **********************************
 * #4.3.3 - USERS GROUPS
 ************************************/
$L['ADMINISTRATEURS']              = 'Administrateurs';
$L['ASSIGN_LEVEL']                 = 'Attribuer un niveau de groupe :';
$L['CANCELLED']                    = 'Annulé';
$L['CLICK_HERE']                   = 'Cliquez ici...';
$L['CONFIRM_DELETE_GROUP_TITLE']   = 'Etes-vous sûr ?';
$L['CONFIRM_DELETE_GROUP_SUBTEXT'] = 'Cela supprimera le groupe et réinitialisera tous les utilisateurs du groupe. Assurez-vous que ces utilisateurs sont affectés à un autre groupe.';
$L['DELETE_GROUP']                 = 'Supprimer le groupe';
$L['DELETED']                      = 'Supprimé';
$L['GROUP_DELETED']                = 'Ce groupe a été supprimé, les groupes d\'utilisateurs ont été réinitialisés.';
$L['GROUP_DELETE_CANCEL']          = 'Suppression du groupe annulée.';
$L['GROUP_STAY']                   = 'Le groupe restera :)';
$L['GROUP_USER_REMOVED']           = 'L\'utilisateur a été supprimé du groupe.';
$L['GROUP_USER_STAY']              = 'L\'utilisateur reste dans le groupe :)';
$L['GROUP_YES']                    = 'Oui, j\'en suis sûr !';
$L['GROUP_NO']                     = 'Non, annuler !';
$L['EDIT_ADD_USER']                = 'Ajouter un utilisateur :';
$L['EDIT_GROUP_LEVEL']             = 'Niveau du groupe :';
$L['EDIT_GROUP_NAME']              = 'Nom du groupe :';
$L['GROUP_LEVEL']                  = 'Niveau du groupe';
$L['GROUP_NAME']                   = 'Nom du groupe';
$L['LEVEL_INFO']                   = 'Entrez un nombre compris entre 2 et 256';
$L['NEW_GROUP_NAME']               = 'Nouveau nom de groupe :';
$L['NUMBER_MEMBERS']               = 'Nombre de membres';
$L['REMOVED']                      = 'Supprimé';
$L['USER_GROUPS_INFO']             = 'Créer, afficher et modifier des groupes d\'utilisateurs. Attribuer des utilisateurs à des groupes d\'utilisateurs.';
$L['SOFT_GROUP_ASGMNT']            = 'Affectation du groupe de logiciels';

/* **********************************
 * #4.4 - SYSTEM
 *
 * #4.4.1 - WEB CONSOLE
 ************************************/
$L['WEB_CONSOLE_INFO'] = 'Accédez à votre terminal de commande.';

/* **********************************
 * #4.4.2 - API CONTROL
 ************************************/
$L['ACTIVATION_INFO_STATS']             = 'Statistiques d\'informations d\'activation';
$L['QB_CONTROL_API']                    = 'API de contrôle QB';
$L['QB_CONTROL_API_NOTICE']             = 'Les clés de contrôle de l\'API sont divisées en deux composants, comme indiqué ci-dessous.<br/>Des exemples d\'utilisation ont été étiquetés pour illustrer un niveau spécifique de commandes de permissions nécessaires pour effectuer la tâche désignée. La bibliothèque d\'utilisation de l\'api continuera à recevoir des mises à jour à mesure que des points de terminaison et des fonctions supplémentaires seront implémentés.<br/><br/><table><tbody><tr><td style="width:15px;vertical-align:middle;"><span class="badge badge-indicators badge-primary">&nbsp;</span></td><td>La <em>clé d\'autorisation de lecture</em> n\'a la capacité que de récupérer des données. Cette clé ne peut pas signaler les tâches opérationnelles au serveur QuickBox. Sauf si vous essayez de contrôler votre installation à distance, cette clé est tout ce dont vous avez besoin.</td></tr><tr><td style="width:15px;vertical-align:middle;"><span class="badge badge-indicators badge-success">&nbsp;</span></td><td>La <em>clé d\'autorisation d\'écriture</em> a la capacité d\'effectuer des tâches supplémentaires, telles que la mise à jour de l\'installation de QuickBox, la gestion l\'activation de l\'API principale, et plus encore. Cette clé fonctionnera également pour les autorisations de lecture et doit être considérée comme la clé privilégiée la plus élevée. Utile pour effectuer à distance des tâches de gestion de base sur votre serveur.</td></tr></tbody></table><br/>N\'oubliez pas de traiter vos clés API comme des mots de passe, ne les partagez jamais.<br/>Vous pouvez régénérer une nouvelle clé de contrôle aléatoire à tout moment en appuyant sur le bouton <i data-feather="refresh-cw" style="width:14px;"></i> ci-dessous.';
$L['CLOSE_ACKNOWLEDGE']                 = 'Acquitter et fermer';
$L['READ_PERM_KEY']                     = 'Lire la clé des autorisations';
$L['REGENERATE_READ_KEY']               = 'Régénérer la clé de lecture';
$L['WRITE_PERM_KEY']                    = 'Clé d\'autorisation d\'écriture';
$L['REGENERATE_WRITE_KEY']              = 'Régénérer la clé d\'écriture';
$L['API_SPEC_USAGE']                    = 'Utilisation spécifique de l\'API';
$L['DISPLAY_CURRENT_API_STAT']          = 'Afficher l\'état actuel de l\'API';
$L['EXAMPLE_CODE']                      = 'code :';
$L['EXAMPLE_OUTPUT']                    = 'sortie:';
$L['ACTIVATE_QUICKBOX_API']             = 'Activer la clé API QuickBox';
$L['DEACTIVATE_QUICKBOX_API']           = 'Désactiver la clé API QuickBox';
$L['VERSION_SPEC_USAGE']                = 'Utilisation spécifique à la version';
$L['DISPLAY_CURRENT_VERSION']           = 'Afficher l\'état de la version actuelle de QuickBox';
$L['UPDATE_QUICKBOX_VERSION']           = 'Mettre à jour la version de QuickBox';
$L['UPDATE_ALERT_NOTICE']               = 'Si votre instance est déjà à jour, vous verrez la sortie suivante';
$L['RUN_FIX_VERSION']                   = 'Exécuter le correctif de version';
$L['USER_SPEC_USAGE']                   = 'Utilisation spécifique à l\'utilisateur';
$L['DISPLAY_ALL_USER_INFO']             = 'Afficher les informations pour tous les utilisateurs';
$L['DISPLAY_SINGLE_USER_INFO']          = 'Afficher les informations pour l\'utilisateur spécifié';
$L['DISPLAY_USER_SOFTWARE']             = 'Afficher le logiciel actuellement installé par l\'utilisateur spécifié';
$L['CREATE_SPECIFIED_USER']             = 'Créer l\'utilisateur spécifié';
$L['CREATE_SPECIFIED_USER_INFO_NOTICE'] = 'Si vous souhaitez mettre en scène un utilisateur avec son e-mail existant et définir une allocation de quota. Notez que l\'e-mail et le quota sont purement facultatifs. Si aucun quota n\'est entré, il utilisera la valeur par défaut de votre ensemble de montant configuré <a href="/registration.php" rel="noopener nofollow" target="_blank">ici</a>.';
$L['DELETE_SPECIFIED_USER']             = 'Supprimer l\'utilisateur spécifié';
$L['BAN_SPECIFIED_USER']                = 'Bannir l\'utilisateur spécifié';
$L['UNBAN_SPECIFIED_USER']              = 'Débannir l\'utilisateur spécifié';
$L['SOFTWARE_SPEC_USAGE']               = 'Utilisation spécifique du logiciel';
$L['DISPLAY_ALL_SOFTWARE']              = 'Afficher toutes les applications logicielles disponibles pour installation';
$L['DISPLAY_SINGLE_SOFTWARE']           = 'Afficher les informations du logiciel spécifié';
$L['API_SOFTWARE_NOTICE']               = 'Pour obtenir des conseils sur la façon dont les noms de logiciels (noms d\'applications) sont structurés, veuillez vous référer à la section « Logiciel » de votre manuel d\'utilisation. Vous pouvez y accéder en cliquant <a href="/help.php#software">ici</a>.';
$L['API_SOFTWARE_WARNING']              = 'Veuillez noter que pour certaines applications, les conventions de dénomination peuvent ne pas être officiellement désignées et pourraient plutôt faire partie d\'un ensemble étendu d\'options.<br/><br/>
Voici un exemple utilisant Bazarr4K :<br>
<pre class="mb-2"><code class="language-json">"bazarr4k": {
    "software_title": "Bazarr4K",
    "qb_package_name": "bazarr",
    "qb_options": "--4k",
    ...</code></pre>
Veuillez prendre note des informations importantes suivantes concernant la sortie de l\'API du logiciel QuickBox :
<ul>
<li>Lorsque vous accédez aux progiciels via QuickBox, vous trouverez systématiquement l\'attribut \'qb_package_name\'. Cet attribut est marqué et utilisé par la convention de dénomination <code>qb</code>.</li>
<li>De plus, chaque sortie de l\'API inclut l\'entrée \'qb_options\', qui fournit de précieuses options de personnalisation. L\'une de ces options est l\'indicateur d\'installation \'4K\', noté <code>--4k</code>.</li>
</ul><br/>
Par exemple, si vous avez l\'intention d\'installer \'Bazarr\' avec le support 4K, vous devez utiliser la commande suivante :<br/>
<pre class="mb-0"><code class="language-bash">qb install bazarr --4k -u [USERNAME]</code></pre><br/>
Il est important de noter que vous ne devez pas utiliser \'bazarr4k\' comme nom de package, car l\'entrée \'qb_options\' est conçue pour gérer efficacement de telles personnalisations.';
$L['SOFTWARE_SERVICE_STATUS']            = 'Afficher l\'état du logiciel et de l\'utilisateur spécifiés';
$L['SOFT_STATUS_ACTIVE_NOTICE']          = 'Si le service est actif.';
$L['SOFT_STATUS_INACTIVE_NOTICE']        = 'Si le service est inactif.';
$L['SOFT_STATUS_NOT_INSTALLED_NOTICE']   = 'Si l\'application n\'est pas installée pour l\'utilisateur spécifié.';
$L['SOFTWARE_SERVICE_CONTROL']           = 'Signaler l\'action spécifiée pour le logiciel et l\'utilisateur spécifiés';
$L['SOFT_CONTROL_ACTION_RESTART_NOTICE'] = 'Où le action=restart...';
$L['SOFT_CONTROL_ACTION_START_NOTICE']   = 'Où le action=start...';
$L['SOFT_CONTROL_ACTION_STOP_NOTICE']    = 'Où le action=stop...';

/* **********************************
 * #4.4.3 - SSL CONTROL
 ************************************/
$L['LETSENCRYPT_DOMAIN']         = 'Let\'s Encrypt le domaine';
$L['SSL_CONTROL']                = 'Contrôle SSL';
$L['ABOUT_SSL_CONTROL']          = 'Cette fonctionnalité vous permet de générer facilement des certificats SSL pour les applications prises en charge que vous avez installées. En sélectionnant "Oui" et en entrant votre domaine, vous configurerez de manière transparente le proxy inverse Nginx ainsi que le certificat SSL.';
$L['STAGE_DASHBOARD_SSL']        = 'Stage SSL pour le tableau de bord ?';
$L['DASHBOARD_SSL_TOOLTIP']      = 'Pour sécuriser votre tableau de bord QuickBox avec un certificat SSL, sélectionnez simplement \'Oui\'. Cette action configurera non seulement le certificat SSL mais établira également les paramètres et liens NGinx nécessaires, facilitant un accès sécurisé à votre tableau de bord via votre domaine.';
$L['STAGE_OWNED_DOMAIN_SSL']     = 'Stage SSL pour un domaine détenu ?';
$L['NON_DASHBOARD_SSL_TOOLTIP']  = 'Pour établir un certificat SSL pour un domaine de votre préférence, veuillez choisir \'Oui\'. Cette option est conçue pour la création de certificats SSL supplémentaires. Veuillez vous assurer que les enregistrements DNS appropriés pour le domaine sont correctement configurés, car ce processus génère exclusivement les certificats SSL demandés.';
$L['STAGE_EMBY_SSL']             = 'Stage SSL pour Emby ?';
$L['EMBY_SSL_TOOLTIP']           = 'Pour sécuriser votre installation Emby avec un certificat SSL, sélectionnez simplement \'Oui\'. Cette action configurera non seulement le certificat SSL, mais établira également les paramètres et liens NGinx nécessaires, facilitant un accès sécurisé à votre installation Emby via votre domaine.';
$L['STAGE_JELLYFIN_SSL']         = 'Stage SSL pour Jellyfin ?';
$L['JELLYFIN_SSL_TOOLTIP']       = 'Pour sécuriser votre installation Jellyfin avec un certificat SSL, sélectionnez simplement \'Oui\'. Cette action configurera non seulement le certificat SSL, mais établira également les paramètres et liens NGinx nécessaires, facilitant un accès sécurisé à votre installation Jellyfin via votre domaine.';
$L['STAGE_JELLYSEERR_SSL']       = 'Stage SSL pour Jellyseerr ?';
$L['JELLYSEERR_SSL_TOOLTIP']     = 'Pour sécuriser votre installation Jellyseerr avec un certificat SSL, sélectionnez simplement \'Oui\'. Cette action configurera non seulement le certificat SSL, mais établira également les paramètres et liens NGinx nécessaires, facilitant un accès sécurisé à votre installation Jellyseerr via votre domaine.';
$L['STAGE_KOMGA_SSL']            = 'Stage SSL pour Komga ?';
$L['KOMGA_SSL_TOOLTIP']          = 'Pour sécuriser votre installation Komga avec un certificat SSL, sélectionnez simplement \'Oui\'. Cette action configurera non seulement le certificat SSL mais établira également les paramètres et liens NGinx nécessaires, facilitant un accès sécurisé à votre installation Komga via votre domaine.';
$L['STAGE_OVERSEERR_SSL']        = 'Stage SSL pour Overseerr ?';
$L['OVERSEERR_SSL_TOOLTIP']      = 'Pour sécuriser votre installation Overseerr avec un certificat SSL, sélectionnez simplement \'Oui\'. Cette action configurera non seulement le certificat SSL, mais établira également les paramètres et liens NGinx nécessaires, facilitant un accès sécurisé à votre installation Overseerr via votre domaine.';
$L['STAGE_PLEX_SSL']             = 'Stage SSL pour Plex ?';
$L['PLEX_SSL_TOOLTIP']           = 'Pour sécuriser votre installation Plex avec un certificat SSL, sélectionnez simplement \'Oui\'. Cette action configurera non seulement le certificat SSL, mais établira également les paramètres et liens NGinx nécessaires, facilitant un accès sécurisé à votre installation Plex via votre domaine.';
$L['DOMAIN']                     = 'Domaine';
$L['SSL_ALREADY_INSTALLED']      = 'Veuillez noter qu\'un certificat SSL est déjà installé pour cette option. La réinstallation du certificat en entrant un nouveau domaine ci-dessous réinitialisera la configuration inverse actuelle de NGinx, supprimera le certificat précédent et réinitialisera l\'accès au lien actuellement défini.';
$L['SSL_SUBMIT']                 = 'Installer le certificat SSL';
$L['SSL_CERTIFICATE_STATUS']     = 'Statut du certificat SSL';
$L['SSL_STATUS_MONITOR_TOOLTIP'] = 'Surveillez l\'état de vos certificats SSL existants avec la possibilité d\'effectuer deux actions clés : la suppression ou le renouvellement forcé. Pour les certificats associés aux applications prises en charge telles que Emby, Jellyfin, Jellyseerr, Komga, Overseerr et Plex, la suppression d\'un certificat déclenchera également la suppression et la reconfiguration du proxy inverse Nginx pour le domaine correspondant.<br><br>Vous pouvez en toute transparence supprimez un certificat à l\'aide des options ci-dessous, puis sélectionnez l\'application souhaitée ci-dessus pour lancer l\'installation d\'un nouveau sous-domaine et d\'un nouveau certificat. Ce processus rationalisé garantit une flexibilité et un contrôle maximum sur la gestion de vos certificats SSL.';
$L['CERTS_STORED_AT']            = 'Les certificats surveillés sont stockés dans';
$L['CERT_ACTIVE']                = 'Expire le :';
$L['CERT_EXPIRES']               = 'Expire le :';
$L['CERT_EXPIRED']               = 'Expiré';
$L['CERT_RENEW']                 = 'Renouveller le certificat';
$L['CERT_DELETE']                = 'Supprimer le certificat SSL et toute configuration supplémentaire. Cette action est irréversible.';
$L['CERT_DELETE_CONFIRM']        = 'Êtes-vous sûr de vouloir supprimer ce certificat ?';
$L['NO_CERTS_INSTALLED']         = 'Aucun certificat SSL n\'est installé et/ou surveillé pour le moment.';

/* **********************************
 * #4.4.4 - VPN CONTROL
 ************************************/
$L['ABORT']                            = 'Avorter';
$L['ACTIVE']                           = 'Actif';
$L['ADD_PEER']                         = 'Ajouter une configuration homologue';
$L['CANCEL']                           = 'Annuler';
$L['CITY']                             = 'Ville';
$L['COUNTRY']                          = 'Pays';
$L['CURRENT_IP']                       = 'IP du serveur';
$L['CURRENT_PEER_LIST']                = 'Liste des pairs actuelle';
$L['DATE_ADDED']                       = 'Date d\'ajout';
$L['DELETE_PEER']                      = 'Supprimer le fichier de configuration des pairs ?';
$L['DRAG_DROP_FILES']                  = 'Faites glisser et déposez vos fichiers de configuration homologues ou <span class="filepond--label-action">Cliquez pour parcourir</span>';
$L['HOST']                             = 'Nom d\'hôte';
$L['LOCAL_HOSTED']                     = 'IP privée';
$L['ORGANIZATION']                     = 'Organisation';
$L['PEER_CONFIG_NAME']                 = 'Nom';
$L['PEER_INFO']                        = 'Information des pairs';
$L['PEER_PING']                        = 'Ping';
$L['PROCESSING']                       = 'En traitement...';
$L['PROCESSING_ABORTED']               = 'Traitement annulé. S\'il vous plaît essayer à nouveau.';
$L['PROCESSING_COMPLETE']              = 'Traitement terminé.';
$L['PROCESSING_ERROR']                 = 'Erreur de traitement. S\'il vous plaît essayer à nouveau.';
$L['PROCESSING_ERROR_EXTENSION']       = '<span style="font-weight:400">Seuls les fichiers de configuration homologues avec l\'extension <span style="font-weight:900" class="text-warning">.conf</span> sont autorisés.</span >';
$L['PROCESSING_REVERT_ERROR']          = 'Erreur lors du retour. S\'il vous plaît essayer à nouveau.';
$L['REMOVE']                           = 'Retirez';
$L['RETRY']                            = 'Réessayer';
$L['REVERT']                           = 'Retourner';
$L['REGION']                           = 'Région';
$L['SERVER_CONFIG']                    = 'Configuration du serveur';
$L['TAP_TO_CANCEL']                    = 'Appuyez pour annuler';
$L['TAP_TO_RETRY']                     = 'Appuyez pour réessayer';
$L['TAP_TO_UNDO']                      = 'Appuyez pour annuler';
$L['UNDO']                             = 'Annuler';
$L['VPN_CONTROL']                      = 'Contrôle VPN';
$L['WAITING_FOR_SIZE']                 = 'En attente de la taille du fichier...';
$L['WG_PRIVATE_KEY']                   = 'Clé privée';
$L['WG_PUBLIC_KEY']                    = 'Clé publique';
$L['WG_SERVER_INFO']                   = 'Informations sur la connexion actuelle';
$L['WIREGUARD_CONFIG_ACTIVATION_TIPS'] = 'Pour activer une configuration WireGuard, veuillez sélectionner la configuration VPN souhaitée dans le tableau ci-dessous. Pour désactiver la configuration actuellement active, décochez simplement la case active ou choisissez une configuration différente. Cela redémarrera automatiquement le service WireGuard et le tableau « Informations sur la connexion actuelle » sera mis à jour avec les détails pertinents.';

/* **********************************
 * #4.4.5 - TROUBLESHOOTING
 ************************************/
$L['SERVICE']                = 'Service';
$L['APP_SELECT']             = 'Selectionner Application';
$L['APPLIANCE']              = 'Commande';
$L['CLEAN_MEM']              = 'Effacer le cache de la mémoire physique';
$L['FIX']                    = 'Réparer';
$L['FIXUPDATE']              = 'Correction des verrous dpkg';
$L['LOG_GEN']                = 'Générateur de Logs Système';
$L['NGINX']                  = 'nginx';
$L['PHP']                    = 'php-fpm';
$L['PHP7_2']                 = 'php-fpm';
$L['QSUPPORT']               = 'QuickBox Support';
$L['QSUPPORTU']              = 'Utilisateur QuickBox Support';
$L['SERVER_TROUBLESHOOTING'] = 'Dépannage Serveur';
$L['SYSTEM_INFO']            = 'Infos Système';
$L['SYSTEM_LOG_FILES']       = 'Logs Système';
$L['TROUBLESHOOTING']        = 'Dépannage';
$L['WEB_SERVER']             = 'Serveur Web';

/* **********************************
 * #4.4.6 - SYSTEM LOGS
 ************************************/
$L['ABOUT_SOFTWARE_ACTION_LOGS']       = 'Ces journaux sont conçus pour fournir un enregistrement des actions liées aux logiciels, y compris les installations, suppressions, mises à jour et autres événements importants.';
$L['ABOUT_SYSTEM_ACTION_LOGS']         = 'Ces journaux sont conçus pour capturer les activités et les actions au niveau du système initiées via l\'outil de ligne de commande <code>qb</code>.';
$L['ABOUT_UI_ACTION_LOGS']             = 'Ces journaux sont dérivés du syslog du système et servent d\'enregistrement consolidé de toutes les commandes et actions initiées via l\'interface utilisateur du tableau de bord QuickBox.';
$L['ABOUT_USER_ACTION_LOGS']           = 'Les journaux dans ce contexte concernent les tâches et événements liés aux utilisateurs initiés via l\'interface QuickBox.';
$L['ACCESS_LOGS']                      = 'Journaux d\'accès';
$L['APP_LOGS']                         = 'Journaux du logiciel';
$L['AUTO_PROCESS']                     = 'Processus automatique';
$L['CLEAN_DASHBOARD_USER_ACTION_LOGS'] = 'Nettoyer les journaux d\'actions utilisateur';
$L['CLEAN_SYSTEM_ACTION_LOGS']         = 'Nettoyer les journaux d\'actions système';
$L['CLEAR_LOG']                        = 'Effacer le journal';
$L['CLEAR_LOG_CONFIRM']                = 'Êtes-vous sûr de vouloir supprimer ces journaux, cela est irréversible ?';
$L['COMMAND']                          = 'Commande';
$L['COMMAND_SOFTWARE']                 = 'Commande/Logiciel';
$L['DATABASE_BACKUP']                  = 'Sauvegarde de la Base de Données';
$L['DATABASE_MAINTENANCE']             = 'Maintenance de la Base de Données';
$L['DATABASE_REPAIR']                  = 'Réparation de la Base de Données';
$L['DATABASE_RESTORE']                 = 'Restauration de la Base de Données';
$L['DATE_TIME']                        = 'Date/Heure';
$L['DELETED_ALL_APP_LOGS']             = 'Tous les journaux du logiciel supprimés';
$L['DELETED_ALL_APPLICATION_LOGS']     = 'Supprimer tous les journaux d\'application';
$L['DELETED_ALL_SUMMARY_LOGS']         = 'Tous les journaux récapitulatifs supprimés';
$L['DELETED_ALL_SYSTEM_LOGS']          = 'Tous les journaux système supprimés';
$L['DELETED_ALL_UI_LOGS']              = 'Tous les journaux de l\'interface utilisateur supprimés';
$L['DELETED_ALL_USER_LOGS']            = 'Tous les journaux utilisateur supprimés';
$L['DELETED_APPLICATION_LOGS']         = 'Journaux d\'application supprimés';
$L['DELETED_SUMMARY_LOGS']             = 'Journaux récapitulatifs supprimés';
$L['DELETED_USER']                     = 'Utilisateur supprimé';
$L['DELETE_USER_LOGS']                 = 'Supprimer les journaux utilisateur';
$L['EVENT']                            = 'Evénement';
$L['LOG_MESSAGE']                      = 'Message du journal';
$L['LOGS']                             = 'Journaux';
$L['LOGS_SUMMARY']                     = 'Résumé des journaux';
$L['NO_LOGS']                          = 'Aucun journal trouvé';
$L['NO_LOGS_MESSAGE']                  = 'À l\'heure actuelle, aucun enregistrement de journal n\'est disponible pour visualisation. Les entrées de journal sont générées lorsque les applications envoient leurs informations de journalisation au syslog du système. Si vous recherchez un journal particulier, nous vous recommandons de consulter la documentation fournie par l\'application respective pour obtenir des conseils supplémentaires. QuickBox s\'efforce avec diligence de centraliser diverses applications et leurs données enregistrées; cependant, cela dépend des applications individuelles pour transmettre leurs informations de journalisation au syslog.';
$L['QUICKBOX_VERSION_CHECK']           = 'Vérifier les mises à jour de QuickBox';
$L['QUOTA_CHECK']                      = 'Vérification du quota défini';
$L['SCHEDULED_TASK']                   = 'Tâche planifiée';
$L['SOFTWARE']                         = 'Logiciel';
$L['SOFTWARE_ACTION_LOGS']             = 'Journaux d\'actions logicielles';
$L['SOFTWARE_VERSION_CHECK']           = 'Vérifier les mises à jour logicielles installées';
$L['SYSTEM_ACTION_LOGS']               = 'Journaux des actions système';
$L['SYSTEM_LOG_SUMMARY']               = 'Résumé du journal système';
$L['SYSTEM_LOG_SUMMARY_TOOLTIP']       = 'Ce résumé et tous les journaux supplémentaires sont générés sous trois conditions:<br><ol><li><strong>Cron:</strong> Les journaux sont automatiquement mis à jour lors de l\'exécution d\'une tâche cron. toutes les 15 minutes. Cela lance le binaire <code>qb_log_miner</code> qui regroupe les entrées de journal du syslog du système.</li><li><strong>Générer manuellement:</strong> Vous pouvez le générer à partir de \'Système > Dépannage > Section Journal système\' en cliquant sur le bouton \'(Générer)\'.</li><li><strong>Ligne de commande:</strong> Il peut également être généré en exécutant la commande <code>qb generate log</code>.</li></ol>Vous pouvez accéder et télécharger ce fichier journal récapitulatif de deux manières:<br><ol><li><strong>Interface Web:</strong> Accédez à \'Système > Dépannage > Journal système (téléchargement)\' dans l\'interface utilisateur.</li><li><strong>Répertoire du serveur:</strong> Recherchez-le sur le serveur à l\'adresse: \'/srv/quickbox/logs/system_log\'.</li></ol>';
$L['UI_ACTION_LOGS']                   = 'Journaux d\'actions de l\'interface utilisateur';
$L['USER_ACTION_LOGS']                 = 'Journaux d\'actions utilisateur';
$L['USER_APPLICATION_LOGS']            = 'Journaux des applications utilisateur';
$L['USER_LOGS']                        = 'Journaux des utilisateurs';
$L['VIEW_SOFTWARE_ACTION_LOGS']        = 'Afficher le journal des actions logicielles';
$L['VIEW_SYSTEM_ACTION_LOGS']          = 'Afficher le journal des actions du système';
$L['VIEW_UI_ACTION_LOGS']              = 'Afficher le journal des actions de l\'interface utilisateur';
$L['VIEW_USER_ACTION_LOGS']            = 'Afficher le journal des actions de l\'utilisateur';

/* **********************************
 * #4.4.7 - HELP MANUAL
 ************************************/
$L['QB_HELP'] = 'Manuel d\'aide';

/* **********************************
 * #4.4.7.1 - description
 ************************************/
$L['DESCRIPTION_CONTENT'] = '<p>Bienvenue dans l\'affichage graphique complet de la page de manuel <code>qb</code>, conçue pour vous offrir une approche traduite, simplifiée et efficace pour accéder à diverses informations sur QuickBox. Cette interface conviviale vise à fournir des informations détaillées sur le fonctionnement de QuickBox, un outil puissant et polyvalent pour gérer votre serveur sans effort.</p>
<p>À l\'intérieur de cet affichage graphique, vous trouverez une liste détaillée des applications disponibles prêtes pour une installation transparente, vous permettant de personnaliser la configuration de votre serveur en fonction de vos besoins spécifiques. De plus, cette ressource présente une multitude d\'autres commandes essentielles pour une utilisation optimale dans l\'environnement CLI <code>qb</code>, vous permettant de naviguer efficacement et sans effort dans les tâches de votre serveur.</p>
<p> Que vous soyez nouveau sur QuickBox ou un utilisateur chevronné, cet affichage graphique de la page de manuel <code>qb</code> sert de référence ultime pour exploiter tout le potentiel de QuickBox et libérer la véritable puissance de la gestion de votre serveur. Explorez les diverses fonctionnalités, rationalisez les opérations de votre serveur et maximisez votre productivité à l\'aide de ce guide intuitif et informatif. Plongeons-nous et rendons votre expérience QuickBox encore plus enrichissante !</p>';
$L['API_INFO_DIRECT'] = '<p style="font-weight:600;">Pour plus d\'informations et de référence sur l\'API QuickBox intégrée, <a href="/api-control.php" rel="noopenner nofollow" class="link" style="color:var(--qb-color-37);">voir cette page</a>.</p>';

/* **********************************
 * #4.4.7.2 - options
 ************************************/
$L['OPTIONS_HEADER']          = 'Options';
$L['OPTIONS_CONTENT_HELP']    = 'Affiche ce manuel d\'aide au format de page de manuel CLI';
$L['OPTIONS_CONTENT_VERBOSE'] = 'Active le mode verbeux pour le débogage';

/* **********************************
 * #4.4.7.3 - software
 ************************************/
$L['SOFTWARE_HEADER']                       = 'Logiciel';
$L['SOFTWARE_INFO_CONTENT']                 = '<p>Ce qui suit est une liste de toutes les applications disponibles pour l\'installation fournies via la construction de QuickBox.<br/>Les noms de logiciels sont présentés tels qu\'ils sont vus par <code>qb [install|reinstall|update|remove|help] [nom_du_logiciel]</code></p>';
$L['ADMIN_INSTALLED_SOFTWARE_HEADER']       = 'Logiciel installé par l\'administrateur';
$L['ADMIN_INSTALLED_SOFTWARE_INFO_CONTENT'] = '<p>Les applications suivantes doivent être installées par l\'administrateur système.<br/>Voir la colonne de disponibilité ci-dessous pour plus de détails.</p>';
$L['MULTI_USER_SOFTWARE_HEADER']            = 'Logiciel multi-utilisateurs';
$L['MULTI_USER_SOFTWARE_INFO_CONTENT']      = '<p>Les applications suivantes peuvent être installées par plusieurs utilisateurs sans avoir besoin de l\'assistance de l\'administrateur.<br/>Toutes les disponibilités des applications sont déterminées par l\'administrateur système et accordées à des utilisateurs supplémentaires dans <a href="/usergroups.php" rel="noopener nofollow" class="link">groupes créés</a>.</p>';
$L['SINGLE_USER_SOFTWARE_HEADER']           = 'Logiciel mono-utilisateur';
$L['SINGLE_USER_SOFTWARE_INFO_CONTENT']     = '<p>Les applications suivantes peuvent être installées par un seul utilisateur assigné à la fois, sans avoir besoin de l\'assistance de l\'administrateur.<br/>Toute la disponibilité des applications est déterminée par l\'administrateur système et accordée à des utilisateurs supplémentaires dans <a href="/usergroups.php" rel="noopener nofollow" class="link">groupes créés</a>.</p>';
$L['SOFTWARE_MANAGEMENT']                   = 'Gestion des logiciels';
$L['SOFTWARE_MANAGEMENT_CONTENT']           = 'Paramètres pour l\'installation, la réinstallation, la mise à jour ou la suppression du logiciel désigné avec des options supplémentaires (si présentes/désirées) pour un utilisateur assigné';
$L['SOFTWARE_MANAGEMENT_WARNING_CONTENT']   = '<p>Gardez à l\'esprit que diverses applications ont diverses options/exigences. La majorité nécessite l\'utilisation du drapeau de nom d\'utilisateur (<code>-u</code>), contrairement aux applications telles que rtorrent. Pour vérifier toutes les options disponibles pour un logiciel spécifique, utilisez <code class="language-bash">qb help [software_name]</code>. La dénomination des applications dans QuickBox pour le schéma de dénomination des logiciels peut être consultée dans le <a href="#software" class="link">tableau de la liste des logiciels</a> ci-dessus.</p>';
$L['SEE_ALSO_HEADER']                       = 'Voir aussi';
$L['SEE_ALSO_CONTENT']                      = 'Afficher l\'utilisation des commandes utiles pour le logiciel désigné';

/* **********************************
 * #4.4.7.4 - software options table
 ************************************/
$L['SOFTWARE_NAME']     = 'Nom du logiciel';
$L['SOFTWARE_TITLE']    = 'Titre du logiciel';
$L['USABILITY']         = 'Utilisabilité';
$L['CAN_ROLLBACK']      = 'Option de restauration';
$L['INFO']              = 'Info';
$L['ADMIN_BADGE']       = '<span class="badge badge-pills badge-table-menu" style="padding:2px 6px;line-height:0.7rem;background-color:var(--qb-color-6-rgba);color:#fff;font-size:0.5rem;">administrateur uniquement</span>';
$L['GLOBAL_BADGE']      = '<span class="badge badge-pills badge-table-menu" style="padding:2px 6px;line-height:0.7rem;background-color:var(--qb-color-5-rgba);color:#fff;font-size:0.5rem;">global</span>';
$L['MULTI_USER_BADGE']  = '<span class="badge badge-pills badge-table-menu" style="padding:2px 6px;line-height:0.7rem;background-color:var(--qb-color-4-rgba);color:#fff;font-size:0.5rem;">multi utilisateur</span>';
$L['SINGLE_USER_BADGE'] = '<span class="badge badge-pills badge-table-menu" style="padding:2px 6px;line-height:0.7rem;background-color:var(--qb-color-3-rgba);color:#fff;font-size:0.5rem;">utilisateur unique</span>';
$L['GLOBAL_INFO']       = 'nécessite l\'installation de l\'administrateur et s\'installe pour tous les utilisateurs du système.';
$L['MULTI_USER_INFO']   = 'nécessite une installation administrateur et peut être installé pour n\'importe quel utilisateur assigné. plusieurs utilisateurs sont pris en charge.';
$L['SINGLE_USER_INFO']  = 'utilisateur unique, administrateur uniquement. nécessite une installation admin et est installé et exploité par l\'utilisateur admin.';

/* **********************************
 * #4.4.7.5 - examples header
 ************************************/
$L['EXAMPLES_HEADER'] = 'Exemples';

/* **********************************
 * #4.4.7.6 - user management
 ************************************/
$L['USER_MANAGEMENT_INFO_CONTENT']   = '<p>Les fonctions de gestion <code>qb user</code> dans QuickBox offrent un ensemble d\'outils polyvalents et puissants pour gérer efficacement les utilisateurs sur votre serveur. En mettant l\'accent sur la facilité d\'utilisation et les fonctionnalités robustes, ces fonctions vous permettent de rationaliser la gestion des utilisateurs, d\'améliorer la sécurité et d\'assurer un fonctionnement fluide du serveur.</p>';
$L['CREATE_USER_CONTENT']            = 'Crée un nouveau compte utilisateur QuickBox';
$L['DELETE_USER_CONTENT']            = 'Supprime le compte utilisateur QuickBox';
$L['CHANGE_USER_PASSWORD']           = 'Modifier le mot de passe utilisateur';
$L['CHANGE_USER_PASSWORD_CONTENT']   = 'Modifie le mot de passe du compte utilisateur attribué';
$L['BAN_USER_CONTENT']               = 'Banni le compte utilisateur assigné, empêchant la connexion et arrêtant les services installés et leurs fonctions.';
$L['BAN_USER_PRIMARY_CONTENT']       = '<p><em>Ceci ne <strong>supprime</strong> les données utilisateur</em>, désactive uniquement les services en cours d\'exécution et bloque l\'accès.</p>';
$L['UNBAN_USER_CONTENT']             = 'Débloque le compte utilisateur assigné, permettant de se connecter et de démarrer les services installés et leurs fonctions';
$L['PROMOTE_USER_TO_ADMIN']          = 'Promouvoir l\'utilisateur au rang d\'administrateur';
$L['PROMOTE_USER_TO_ADMIN_CONTENT']  = 'Promouve l\'utilisateur assigné au niveau admin';
$L['DEMOTE_USER_FROM_ADMIN']         = 'Retroduire l\'utilisateur de l\'administrateur';
$L['DEMOTE_USER_FROM_ADMIN_CONTENT'] = 'Rétrograde l\'utilisateur assigné au niveau d\'utilisateur standard';
$L['SET_USER_QUOTA']                 = 'Définir le quota d\'utilisateurs';
$L['SHOW_USER_QUOTA']                = 'Afficher le quota d\'utilisateurs';
$L['SET_USER_SHELL']                 = 'Définir le shell utilisateur';
$L['SET_USER_SHELL_CONTENT']         = 'Définit l\'environnement shell pour l\'utilisateur assigné';
$L['SET_USER_SHELL_INFO_CONTENT']    = '<p><strong><code>sudo</code></strong><br>complète les privilèges d\'administrateur sur l\'environnement du serveur (grande puissance... etc)<br><strong><code>full</code></strong><br>accès complet à l\'environnement du serveur, à l\'exception des zones à privilèges plus élevés; c\'est-à-dire: pas de sudo et ne peut pas accéder aux répertoires racine.<br><strong><code>limited</code></strong><br>l\'environnement shell limité. très peu d\'accès aux commandes et emprisonnés dans leur propre répertoire d\'accueil utilisateur.</p><hr/><p>Les environnements shell sont définis par l\'administrateur système et peuvent être consultés sur la page d\'édition des utilisateurs située dans le <a href="/useradmin.php" rel="noopener nofollow" class="link">Page d\'administration des utilisateurs</a>.<br/>Si vous souhaitez ajouter un nouvel environnement shell, vous pouvez le faire en modifiant le <code>/etc/shells</code> et en ajoutant le chemin vers l\'environnement shell que vous souhaitez ajouter.</p>';
$L['SET_USER_SHELL_DANGER_CONTENT']  = '<p><strong>Attention:</strong> Veuillez noter que la modification de l\'environnement du shell par autre chose que <code>/bash</code> peut entraîner un comportement inattendu lors de l\'utilisation de <code>qb</code> (QuickBox), car il a été spécifiquement conçu et optimisé pour l\'environnement <code>/bash</code>. En bref, <code>qb</code> s\'appuie sur des caractéristiques et fonctionnalités spécifiques fournies par le shell Bash.<br><br>Pour éviter tout problème potentiel, il est conseillé de s\'en tenir à <code>/bash</code> environnement lors de l\'utilisation de <code>qb</code>. Si vous souhaitez toujours utiliser un shell différent, consultez la documentation de ce shell pour examiner toute modification supplémentaire des chemins, des configurations ou d\'autres paramètres pouvant nécessiter une mise à jour pour garantir la compatibilité avec <code>qb</code>.</p>';
$L['USER_RCLONE_COMPANION_COMMANDS'] = 'Commandes Rclone';

/* **********************************
 * #4.4.7.7 - clean functions
 ************************************/
$L['CLEAN_FUNCTIONS']                  = 'Nettoyer les fonctions';
$L['CLEAN_FUNCTIONS_INFO_CONTENT']     = '<p>Les fonctions <code>qb clean</code> de QuickBox offrent un moyen pratique et efficace de maintenir la propreté de votre serveur et d\'optimiser ses performances. Conçues dans un souci de simplicité et d\'efficacité, ces fonctions vous permettent de libérer de la mémoire précieuse, de supprimer l\'encombrement inutile et d\'assurer un fonctionnement fluide et rationalisé du serveur.</p>';
$L['CLEAN_MEMORY']                     = 'Nettoyer la mémoire';
$L['CLEAN_MEMORY_CONTENT']             = 'Nettoie les caches mémoire de QuickBox';
$L['CLEAN_DASHBOARD_LOGS']             = 'Nettoyer les journaux du tableau de bord';
$L['CLEAN_DASHBOARD_LOGS_CONTENT']     = 'Nettoie les journaux du tableau de bord QuickBox pour l\'utilisateur désigné';
$L['CLEAN_QB_DASHBOARD_LOGS']          = 'Nettoie les fichiers journaux du tableau de bord QB';
$L['CLEAN_QB_DASHBOARD_LOGS_CONTENT']  = 'Cette commande est conçue pour effacer le journal actuel des actions de l\'interface utilisateur publié à partir du syslog et réinitialiser le journal des erreurs de l\'interface utilisateur Nginx à son état initial';
$L['CLEAN_SYSTEM_LOGS']                = 'Supprimer les anciens fichiers journaux du système';
$L['CLEAN_SYSTEM_LOGS_CONTENT']        = 'Cette commande est conçue pour supprimer les journaux et les archives compressées dans le répertoire <code>/var/log</code> qui ont dépassé la période de conservation attribuée. La durée de conservation est fixée à 7 jours par défaut (si aucune valeur facultative n\'est renseignée).';
$L['CLEAN_RCLONE_UPLOAD_LOGS']         = 'Nettoyer les journaux de téléchargement de Rclone';
$L['CLEAN_RCLONE_UPLOAD_LOGS_CONTENT'] = 'Nettoie les journaux de téléchargement QuickBox rclone pour l\'utilisateur désigné';
$L['CLEAN_LOCKS']                      = 'Nettoyer les serrures';
$L['CLEAN_LOCKS_CONTENT']              = 'Nettoie le logiciel QuickBox et les verrous apt-dpkg qui peuvent empêcher QuickBox d\'installer un nouveau logiciel';

/* **********************************
 * #4.4.7.8 - fix functions
 ************************************/
$L['FIX_FUNCTIONS']              = 'Fixer les fonctions';
$L['FIX_FUNCTIONS_INFO_CONTENT'] = '<p>Les fonctions <code>qb fix</code> de QuickBox fournissent une boîte à outils puissante et conviviale pour résoudre les problèmes courants et effectuer des réparations du système sans effort. En mettant l\'accent sur la simplicité et l\'efficacité, ces fonctions vous permettent de dépanner et de résoudre divers problèmes pouvant survenir sur votre serveur, garantissant des opérations fluides et ininterrompues.</p>';
$L['FIX_HOME']                   = 'Fixer l\'accueil';
$L['FIX_HOME_CONTENT']           = 'Corrige les autorisations du répertoire personnel des utilisateurs désignés';
$L['FIX_PHP']                    = 'Réparer PHP';
$L['FIX_PHP_CONTENT']            = 'Corrigez la configuration PHP et installez les extensions manquantes. Cela mettra également à jour les packages PHP vers la dernière version';
$L['FIX_PYTHON']                 = 'Réparer Python';
$L['FIX_PYTHON_CONTENT']         = 'Corrigez la configuration de Python et installez les extensions manquantes. De plus, il met en scène python3.9 s\'il n\'est pas actuellement disponible sur le système pour une utilisation par défaut sur les versions d\'application nécessitant python';
$L['FIX_VERSION']                = 'Corriger la version';
$L['FIX_VERSION_CONTENT']        = 'Corrigez l\'installation de QuickBox en réinstallant la dernière version disponible';

/* **********************************
 * #4.4.7.9 - generate functions
 ************************************/
$L['GENERATE_FUNCTIONS']                   = 'Générer des fonctions';
$L['GENERATE_FUNCTIONS_INFO_CONTENT']      = '<p>Les fonctions <code>qb generate</code> dans QuickBox offrent un moyen pratique et efficace de créer des éléments essentiels qui améliorent la gestion et la surveillance du serveur. Actuellement, la commande qb generate prend en charge la fonction qb generate logs, permettant aux utilisateurs de générer sans effort un aperçu des statistiques des serveurs, de l\'activation de l\'api et des informations de montage.<br/>À mesure que les fonctions qb generate évoluent, elles offriront probablement un tableau en expansion de fonctionnalités pour améliorer encore la gestion du serveur.</p>';
$L['GENERATE_SYSTEM_LOGS']                 = 'Générer les journaux système';
$L['GENERATE_SYSTEM_LOGS_CONTENT']         = 'Génère des journaux système pour l\'installation actuelle de QuickBox';
$L['GENERATE_SYSTEM_LOGS_WARNING_CONTENT'] = '<p>Depuis la version <em>3.0.0.<strong>36+</strong></em>, <code>qb generate log</code> a évolué vers un utilitaire plus approfondi pour l\'agrégation et l\'organisation des journaux. Elle vise à simplifier la récupération des journaux en complétant les journaux natifs d\'une application en résumant et en centralisant les données de journaux critiques, rendant le dépannage beaucoup plus efficace.</p><p>Cette commande et ses fonctionnalités sont un travail en cours continu.</p>';
$L['GENERATE_SYSTEM_LOGS_SUCCESS_CONTENT'] = '<p>Vous pouvez accéder et télécharger ce fichier journal récapitulatif de trois manières :<br><ol><li><strong>Générer/Télécharger :</strong> Accédez à \'Système > <a href="/troubleshooting.php" class="link">Dépannage</a> > Journal système\' dans l\'interface utilisateur. . Ici, vous pouvez générer et/ou télécharger le résumé du journal système produit par la commande generate log.</li><li><strong>Afficher les journaux :</strong> Accédez à \'Système > <a href="/logs.php" class="link">Journaux système</a>\'. C\'est ici que vous pouvez trouver des journaux et des informations supplémentaires collectées par la commande generate log.</li><li><strong>Répertoire du serveur :</strong> Trouvez-le sur le serveur à l\'adresse : \'/srv/quickbox/logs/system_log\'.</li></ol></p>';

/* **********************************
 * #4.4.7.10 - manage functions
 ************************************/
$L['MANAGE_FUNCTIONS']                                  = 'Gérer les fonctions';
$L['MANAGE_FUNCTIONS_INFO_CONTENT']                     = '<p>Les fonctions <code>qb manage</code> de QuickBox fournissent un ensemble d\'outils puissants et complets pour gérer efficacement divers aspects de votre serveur. Conçues pour la commodité de l\'utilisateur, ces fonctions vous permettent de contrôler sans effort les éléments critiques de votre environnement alimenté par QuickBox.<br/>Qu\'il s\'agisse de changer les paramètres de langue, de vérifier l\'état de l\'activation de votre API principale, de gérer la distribution des données ou garantissant l\'intégrité des données par le biais de sauvegardes et de restaurations, les fonctions de gestion qb offrent une solution complète pour les administrateurs de serveurs et les passionnés.</p>';
$L['MANAGE_API_KEY']                                    = 'Gérer la clé API';
$L['MANAGE_API_KEY_CONTENT']                            = 'Gérer les clés API QuickBox et lister les informations et options supplémentaires';
$L['ADD_API_KEY']                                       = 'Ajouter une clé API';
$L['ADD_API_KEY_CONTENT']                               = 'Ajouter/Activer la clé API';
$L['REMOVE_API_KEY']                                    = 'Supprimer la clé API';
$L['REMOVE_API_KEY_CONTENT']                            = 'Supprimer/Désactiver la clé API';
$L['MANAGE_DATABASE']                                   = 'Gérer la base de données';
$L['MANAGE_DATABASE_CONTENT']                           = 'Gérer quelle base de données est utilisée pour QuickBox';
$L['MANAGE_DATABASE_CONNECTION_INFO_CONTENT']           = 'Veuillez noter que lorsque vous spécifiez un nom d\'utilisateur et un mot de passe (si les options sont utilisées), ils ne doivent pas nécessairement correspondre aux informations d\'identification de votre compte principal actuel. Ces informations d\'identification sont destinées à être utilisées sur le système local, en particulier pour les connexions à la base de données et diverses fonctions du système. Par conséquent, ils peuvent être uniques et indépendants du nom d\'utilisateur et du mot de passe de votre compte principal.';
$L['MANAGE_DATABASE_INFO_CONTENT']                      = 'QuickBox utilise principalement SQLite3 comme base de données par défaut. Cependant, vous avez la possibilité de basculer de manière transparente entre SQLite3 et MySQL à l\'aide de cette commande. Si vous optez pour MySQL, assurez-vous d\'avoir un serveur MySQL correctement installé et configuré sur votre système. De plus, vous aurez besoin d\'un compte utilisateur MySQL avec les autorisations adéquates pour la création et la gestion de bases de données. L\'exécution de cette commande facilite ces configurations nécessaires, y compris l\'installation du serveur et du client MySQL s\'ils ne sont pas déjà installés sur votre système. Pendant le processus, vous serez invité à installer le serveur et le client MySQL s\'ils ne sont pas détectés. De plus, la commande gère la configuration, garantissant une intégration transparente avec QuickBox. Veuillez noter que tous les paramètres, à l\'exception de <code>-o [mysql|sqlite]</code>, sont facultatifs et prendront par défaut les valeurs prédéfinies dans le script.<br><br>Les valeurs par défaut sont les suivantes :<br><code>user=admin, pass=%random%, port=3306, host=localhost, name=qbpro</code><br><br>Les détails MySQL peuvent être trouvés sur <code>/root/.my.cnf</code>.<br><br>Pour reconvertir en SQLite3, exécutez simplement à nouveau la commande avec l\'indicateur <code>-o sqlite</code>.';
$L['MANAGE_DATABASE_BACKUP']                            = 'Gérer la sauvegarde de la base de données';
$L['MANAGE_DATABASE_BACKUP_CONTENT']                    = 'Sauvegarder la base de données QuickBox';
$L['MANAGE_DATABASE_BACKUP_INFO_CONTENT']               = 'Le processus de sauvegarde QuickBox s\'exécute automatiquement toutes les 24 heures à 3h30 du matin (heure du serveur) dans le cadre du calendrier de maintenance. Cette tâche est répertoriée dans la planification <code>/etc/cron.d/quickbox</code> comme suit :<br><br><code>30 3 * * * root /usr/local/bin/qb manage db -o maintenance --cron</code><br><br>Cependant, vous pouvez déclencher manuellement une sauvegarde (sans exécuter la routine de maintenance) à l\'aide de la commande ci-dessus.<br><br><strong>À propos du processus de sauvegarde</strong><br><br>Chaque sauvegarde crée un instantané de la base de données QuickBox, fournissant un point de restauration pour préserver l\'intégrité des données en cas de perte ou de corruption des données. Les fichiers de sauvegarde sont enregistrés dans un répertoire spécifié, le système conservant les 5 sauvegardes les plus récentes pour garantir que vous disposez toujours de plusieurs points de restauration disponibles pour la récupération.<br><br><strong>Emplacements des fichiers de sauvegarde</strong><br><br>Les fichiers de sauvegarde sont stockés dans les répertoires suivants :<br><br><strong>MySQL</strong>: <code>/opt/quickbox/backup/system/[DATE_TIME]/db/qbpro.sql</code><br><strong>SQLite</strong>: <code>/opt/quickbox/backup/system/[DATE_TIME]/db/qbpro.db</code>';
$L['MANAGE_DATABASE_MAINTENANCE']                       = 'Gérer la maintenance de la base de données';
$L['MANAGE_DATABASE_MAINTENANCE_CONTENT']               = 'Initier le processus de maintenance de la base de données QuickBox';
$L['MANAGE_DATABASE_MAINTENANCE_INFO_CONTENT']          = 'Le processus de maintenance de QuickBox est conçu pour assurer le bon fonctionnement et l\'efficacité de la base de données. Ce processus comprend :<br><br><ol><li>Nettoyage des données inutiles.</li><li>Optimisation des tables de base de données.</li><li>Exécution d\'autres tâches de maintenance pour améliorer l\'efficacité et prévenir les problèmes de données, comme la vérification et la réparation des tables.</li><li>Déclenchement d\'une notification de message du jour (MotD) pour alerter l\'administrateur système via la CLI si des erreurs irrécupérables se produisent.</li></ol><p><strong>Lorsque la maintenance s\'exécute</strong><br><br>Le processus de maintenance s\'exécute automatiquement toutes les 24 heures à 3 h 30, heure du serveur. Cette tâche est répertoriée dans le planning <code>/etc/cron.d/quickbox</code> comme suit :<br><br><code>30 3 * * * root /usr/local/bin/qb manage db -o maintenance --cron</code><br><br>Cependant, vous pouvez déclencher manuellement la maintenance à l\'aide de la commande ci-dessus.<br><br><strong>Pourquoi la maintenance est-elle importante ?</strong><br><br>Une maintenance régulière garantit que votre base de données QuickBox reste en bonne santé, maintient les performances du système à un niveau élevé et protège vos données.</p>';
$L['MANAGE_DATABASE_RESTORE']                           = 'Gérer la restauration de la base de données';
$L['MANAGE_DATABASE_RESTORE_CONTENT']                   = 'Restaurer la base de données QuickBox';
$L['MANAGE_DATABASE_RESTORE_INFO_CONTENT']              = 'Cette commande lance le processus de restauration de la base de données, vous permettant de sélectionner un fichier de sauvegarde spécifique à restaurer. Le processus de restauration est conçu pour récupérer des données en cas de perte ou de corruption des données, offrant ainsi un moyen fiable et efficace de restaurer votre base de données QuickBox à un état antérieur.<br><br><strong>Fonctionnement du processus de restauration</strong><br><br>Lorsque vous exécutez la commande de restauration, un menu de sélection répertoriant tous les fichiers de sauvegarde de base de données disponibles s\'affiche. Vous pouvez ensuite choisir le fichier de sauvegarde que vous souhaitez restaurer, et le système restaurera automatiquement le fichier de sauvegarde sélectionné, ramenant votre base de données QuickBox à l\'état dans lequel elle se trouvait lors de la création de la sauvegarde.';
$L['MANAGE_DASHBOARD_ACCESS_URL']                       = 'Gérer l\'URL d\'accès au tableau de bord';
$L['MANAGE_DASHBOARD_ACCESS_URL_CONTENT']               = 'Cette commande définit la racine Web du serveur pour l\'accès au tableau de bord au domaine ou à l\'adresse IP exprimés';
$L['SET_SERVER_LANG']                                   = 'Définir la langue du serveur';
$L['SET_SERVER_LANG_CONTENT']                           = 'Cette commande définira la langue demandée comme langue par défaut pour le serveur';
$L['MANAGE_PUBLIC_TRACKERS']                            = 'Gérer les traqueurs publics';
$L['MANAGE_PUBLIC_TRACKERS_CONTENT']                    = 'Cette commande activera ou désactivera les trackers publics pour tous les utilisateurs';
$L['EX_PUB_TRACKERS_ALLOW']                             = 'exemple pour autoriser les trackers publics :';
$L['EX_PUB_TRACKERS_DISALLOW']                          = 'exemple pour interdire les trackers publics :';
$L['BACKUP_APPLICATIONS']                               = 'Applications de sauvegarde';
$L['PARTIAL_CONFIG_ONLY_BACKUP']                        = 'Sauvegarde partielle <span class="badge badge-pills outline-badge-secondary badge-table-menu" style="padding:2px 6px;line-height:0.7rem;font-size:0.5rem;">config unique</span>';
$L['PARTIAL_CONFIG_ONLY_BACKUP_CONTENT']                = 'Cette commande sauvegardera la configuration de l\'application désignée pour l\'utilisateur assigné';
$L['FULL_CONFIG_AND_APP_BACKUP']                        = 'Sauvegarde complète <span class="badge badge-pills outline-badge-primary badge-table-menu" style="padding:2px 6px;line-height:0.7rem;font-size:0.5rem;">config &amp; app</span>';
$L['FULL_CONFIG_AND_APP_BACKUP_CONTENT']                = 'Cette commande sauvegardera l\'application désignée pour l\'utilisateur assigné. Inclut les données d\'application et de configuration, pratiques pour revenir aux versions précédemment installées et sauvegardées';
$L['PARTIAL_RTORRENT_ALL_USERS_BACKUP']                 = 'Sauvegarde partielle (rtorrent uniquement)';
$L['PARTIAL_RTORRENT_ALL_USERS_BACKUP_PRIMARY_CONTENT'] = '<p>Dans le cas de rtorrent comme configuration logicielle à sauvegarder, le drapeau de nom d\'utilisateur (<code>-u</code>) n\'est pas requis.</p>';
$L['PARTIAL_RTORRENT_ALL_USERS_BACKUP_CONTENT']         = 'Cette commande sauvegardera tous les fichiers .rtorrent.rc des utilisateurs rtorrent existants.<br>Les sauvegardes sont stockées à:<br><code>/home/[USERNAME]/.QuickBox/software/rtorrent /backup/.rtorrent.rc_YEAR-MONTH-DAY_HOUR:MINUTE</code>';
$L['ROLLBACK_APPLICATIONS']                             = 'Annuler la sauvegarde de l\'application';
$L['ROLLBACK_APPLICATIONS_CONTENT']                     = 'Cette commande restaurera l\'application désignée pour l\'utilisateur assigné à une version précédente stockée/sélectionnée dans le répertoire de sauvegarde.<br>Les sauvegardes sont stockées à:<br><code>/home/[USERNAME]/.QuickBox/software/[SOFTWARE_NAME]/backup/</code>';
$L['RESTORE_APP_BACKUP_CONFIG']                         = 'Restaurer la sauvegarde <span class="badge badge-pills outline-badge-secondary badge-table-menu" style="padding:2px 6px;line-height:0.7rem;font-size:0.5rem;">config unique</span>';
$L['RESTORE_APP_BACKUP_CONFIG_CONTENT']                 = 'Cette commande restaurera la configuration d\'application précédemment sauvegardée désignée pour l\'utilisateur assigné';
$L['RESTORE_APP_DEFAULT_CONFIG']                        = 'Restaurer par défaut <span class="badge badge-pills outline-badge-secondary badge-table-menu" style="padding:2px 6px;line-height:0.7rem;font-size:0.5rem;">config unique</span>';
$L['RESTORE_APP_DEFAULT_CONFIG_CONTENT']                = 'Cette commande restaurera la configuration d\'application par défaut désignée (depuis l\'installation) pour l\'utilisateur assigné';

/* **********************************
 * #4.4.7.11 - news functions
 ************************************/
$L['NEWS_FUNCTIONS']              = 'Fonctions de nouvelles';
$L['NEWS_FUNCTIONS_INFO_CONTENT'] = '<p>La fonction <code>qb news</code> de QuickBox fournit des mises à jour opportunes et pertinentes directement sur votre serveur, vous assurant de rester informé des derniers développements et changements dans l\'écosystème QuickBox . Dans le but de vous tenir à jour, cette fonctionnalité fournit des informations essentielles sur les versions actuelles et à venir, les changements de version et d\'autres éléments d\'intérêt.</p>';
$L['NEWS']                        = 'Actualités';
$L['NEWS_CONTENT']                = 'Voir les dernières actualités QuickBox';

/* **********************************
 * #4.4.7.12 - support functions
 ************************************/
$L['SUPPORT_FUNCTIONS']              = 'Fonctions de support';
$L['SUPPORT_FUNCTIONS_INFO_CONTENT'] = '<p>La fonction <code>qb support</code> de QuickBox offre une méthode sécurisée et fiable pour accorder au personnel d\'assistance l\'accès à votre serveur lorsqu\'une assistance est nécessaire. En mettant l\'accent sur la sécurité et la protection des utilisateurs, cette fonctionnalité utilise le compte <code>quickSupport</code>, garantissant que seul le personnel d\'assistance autorisé peut accéder à votre serveur.</p>';
$L['ENABLE_SUPPORT']                 = 'Activer l\'assistance';
$L['ENABLE_SUPPORT_CONTENT']         = 'Activer la prise en charge. Généralement attribué au membre de l\'équipe du personnel qui est responsable du soutien';
$L['DISABLE_SUPPORT']                = 'Désactiver l\'assistance';
$L['DISABLE_SUPPORT_CONTENT']        = 'Désactiver la prise en charge. Sinon, le compte d\'assistance se supprimera automatiquement après 36 heures';

/* **********************************
 * #4.4.7.13 - update functions
 ************************************/
$L['UPDATE_FUNCTIONS']              = 'Fonctions de mise à jour';
$L['UPDATE_FUNCTIONS_INFO_CONTENT'] = '<p>La fonction <code>qb update</code> de QuickBox vous offre un moyen pratique et flexible de gérer les mises à jour de votre installation QuickBox. Avec cette fonctionnalité, vous avez un contrôle total sur le processus de mise à jour, vous permettant de vérifier manuellement les mises à jour et de choisir quand les appliquer.</p>';
$L['UPDATE_CHECK']                  = 'Vérification des mises à jour';
$L['UPDATE_CHECK_CONTENT']          = 'Vérifier les mises à jour de QuickBox';
$L['UPDATE_QUICKBOX']               = 'Mettre à jour QuickBox';
$L['UPDATE_QUICKBOX_CONTENT']       = 'Mettre à jour l\'installation de QuickBox vers la dernière version, le cas échéant';

/* **********************************
 * #4.4.7.14 - bugs & reporting
 ************************************/
$L['BUGS']              = 'Bogues et rapports';
$L['BUGS_INFO_CONTENT'] = '<p>L\'affichage graphique de la documentation de QuickBox recevra des mises à jour régulières pour garantir que les informations fournies restent facilement accessibles et conviviales. Notre engagement à améliorer votre expérience avec QuickBox nous pousse à affiner et à améliorer continuellement la documentation, en la maintenant à jour avec les dernières caractéristiques et fonctionnalités.<br/><br/>
À chaque mise à jour, nous nous efforcerons de simplifier les concepts complexes, de clarifier les instructions et d\'intégrer les commentaires des utilisateurs pour rendre la page de manuel qb encore plus intuitive et efficace. Notre objectif est de vous donner une compréhension transparente de QuickBox et de ses vastes capacités, vous permettant de maîtriser l\'environnement Qb CLI et de gérer sans effort vos tâches de serveur.<br/><br/>
Nous apprécions votre contribution et vous encourageons à partager toutes suggestions ou idées que vous pourriez avoir pour améliorer encore la page de manuel qb. Vos commentaires sont déterminants pour façonner cette ressource et garantir qu\'elle reste une référence précieuse pour tous les utilisateurs de QuickBox. En fait, cette page existe parce qu\'elle a été demandée! 🤪<br/><br/>
Signalez tout bug reproductible ou suggestion à <strong><a href="https://nullrefer.ir/?https://github.com/QuickBox/pro-v3/issues" rel="noopener nofollow" target="_blank">QuickBox.IO Labs Issue & Feature Tracker</a></strong></p>';

/* **********************************
 * #4.4.7.15 - disclaimer
 ************************************/
$L['DISCLAIMER']      = 'Avis de non-responsabilité';
$L['DISCLAIMER_TEXT'] = '<p>Ce script est destiné à un usage général et aucune garantie n\'est implicite quant à son adéquation à une tâche donnée. QuickBox.IO ne sera pas responsable de votre configuration ou de tout dommage causé lors de l\'utilisation/installation/modification de ce script ou de l\'un de ses plugins. Veuillez garder à l\'esprit que ni QuickBox.IO ni son personnel ne sont responsables de la mise à jour de votre logiciel et/ou de votre serveur; il s\'agit d\'une responsabilité laissée uniquement à l\'utilisateur du logiciel QuickBox Pro.</p>';

/* **********************************
 * #4.4.7.16 - license
 ************************************/
$L['LICENCE']      = 'Licence';
$L['LICENSE_SET']  = 'Licence sous BSD 3-Clause';
$L['LICENSE_TEXT'] = '<p>Copyright (c) 2018-2024, QuickBox.IO. Tous droits réservés.</p>
<p>La redistribution et l\'utilisation sous forme source et binaire, avec ou sans modification, sont autorisées à condition que les conditions suivantes soient remplies:</p>
<ul style="font-size:0.75rem"><li>Les redistributions du code source doivent conserver l\'avis de droit d\'auteur ci-dessus, cette liste de conditions et la clause de non-responsabilité suivante.</li>
<li>Les redistributions sous forme binaire doivent reproduire l\'avis de droit d\'auteur ci-dessus, cette liste de conditions et la clause de non-responsabilité suivante dans la documentation et/ou les autres éléments fournis avec la distribution.</li>
<li>Ni le nom du détenteur des droits d\'auteur ni les noms de ses contributeurs ne peuvent être utilisés pour approuver ou promouvoir des produits dérivés de ce logiciel sans autorisation écrite préalable spécifique.</li></ul>
<p>CE LOGICIEL EST FOURNI PAR LES DÉTENTEURS DU COPYRIGHT ET LES CONTRIBUTEURS "TEL QUEL" ET TOUTE GARANTIE EXPRESSE OU IMPLICITE, Y COMPRIS, MAIS SANS S\'Y LIMITER, LES GARANTIES IMPLICITES DE QUALITÉ MARCHANDE ET D\'ADÉQUATION À UN USAGE PARTICULIER SONT EXCLUES. EN AUCUN CAS LE TITULAIRE DU COPYRIGHT OU SES CONTRIBUTEURS NE SERONT RESPONSABLES DE TOUT DOMMAGE DIRECT, INDIRECT, ACCIDENTEL, SPÉCIAL, EXEMPLAIRE OU CONSÉCUTIF (Y COMPRIS, MAIS SANS S\'Y LIMITER, L\'ACQUISITION DE BIENS OU DE SERVICES DE SUBSTITUTION; LA PERTE D\'UTILISATION, DE DONNÉES OU DE PROFITS; OU INTERRUPTION D\'ACTIVITÉ) QUELLE QU\'EN SOIT LA CAUSE ET SUR TOUTE THÉORIE DE RESPONSABILITÉ, QU\'ELLE SOIT CONTRACTUELLE, RESPONSABLE OU DÉLICTUELLE (Y COMPRIS LA NÉGLIGENCE OU AUTRE) RÉSULTANT DE QUELQUE MANIÈRE QUE CE SOIT DE L\'UTILISATION DE CE LOGICIEL, MÊME SI AVISÉ DE LA POSSIBILITÉ DE TELS DOMMAGES.</p>';

/* **********************************
 * #4.4.7.17 - misc
 ************************************/
$L['EXAMPLE']  = 'exemple:';
$L['EXAMPLES'] = 'exemples:';

/* **********************************
 * #4.4.8 - CHANGELOG / UPDATE
 ************************************/
$L['CURRENT_VERSION']   = 'Version Actuelle';
$L['DASH_UPDATE_TITLE'] = 'Panneau de Version QuickBox';
$L['QB_UPDATE']         = 'Panneau de Version QuickBox';
$L['QBUPDATE']          = 'Mise à Jour / Changelog';
$L['UPCOMING_CHANGES']  = 'Notes de version';
$L['UPDATE_AVAILABLE']  = 'MaJ Disponible';
$L['UPDATE_TO_DATE']    = 'A jour';
$L['VERSION_STATUS']    = 'Statut Version';
$L['UPDATE_TXT']        = 'Mettre à jour';
$L['AVAILABLE_TXT']     = 'Disponible!';
$L['UPDATE_VERSION']    = 'Mettre à jour la version';
$L['UPDATE_ACTIVATE']   = 'Veuillez activer votre abonnement Pro pour recevoir les mises à jour';
$L['UPDATE_CURRENT']    = 'Vous êtes à jour!';
$L['CHANGELOGS']        = 'Journaux des modifications';

/* **********************************
 * #4.4.9 - SYSTEM DASHBOARD
 ************************************/
$L['BANDWIDTH_TOTALS_TOOLTIP'] = 'Vous pouvez gérer la date de début de la bande passante mensuelle et réinitialiser les statistiques via <a href=\'/configurations.php#additionals\'>Paramètres généraux > Paramètres supplémentaires du tableau de bord</a>. Cela vous permet d\'ajuster la date de début ou d\'effacer la base de données vnStat pour réinitialiser les totaux.<br/><br/>Afficher les totaux accumulés actuels et l\'historique : <a href=\'javascript:void(0)\' class=\'open_bandwidthtotals_modal\' data-toggle=\'modal\' data-target=\'#viewBandwidthTotals\'><span class=\'badge badge-pills badge-info\'>Totaux de bande passante</span></a>';
$L['DISK_UTIL_TIME']           = 'Temps d\'utilisation du disque';
$L['DISK_IO_BW']               = 'Bande passante d\'E/S disque';
$L['DISK_SPACE_USAGE_FOR']     = 'Utilisation de l\'espace disque pour:';
$L['DISK_UTILIZATION']         = 'Utilisation';
$L['DISK_WRITE']               = 'Écriture';
$L['DISK_READ']                = 'Lectures';
$L['SYS_DISK_READ']            = 'Lecture de disque';
$L['SYS_DISK_WRITE']           = 'Écriture sur disque';
$L['TOP_CPU_PROC']             = 'Principaux processus d\'application du processeur';
$L['TOP_CPUMEM_PROC']          = 'Principaux processus de mémoire du processeur';
$L['TOP_CPUSYS_PROC']          = 'Principaux processus du système CPU';
$L['SERVICE_MEM_USAGE']        = 'Mémoire utilisée par les services Systemd sans cache';
$L['SYS_SWAP_USAGE']           = 'Utilisation du Swap système';
$L['SYS_MEM_USAGE']            = 'Utilisation de la mémoire système';
$L['CPU_FREQ']                 = 'Fréquence actuelle du processeur';
$L['CPU_LOAD']                 = 'Charge CPU';
$L['CPU_USAGE']                = 'Utilisation du processeur';
$L['RAM_USAGE']                = 'Utilisation de la RAM';
$L['BW_UPLOAD']                = 'Téléversement';
$L['BW_DOWNLOAD']              = 'Téléchargement';
$L['SYS_UPLOAD']               = 'Téléverser';
$L['SYS_DOWNLOAD']             = 'Télécharger';
$L['SYS_DASH_POWERED_BY']      = 'Tableau de bord système alimenté par:';
$L['SYS_DASH_UPTIME']          = 'Disponibilité du système';
$L['SYS_DASH_SWAP_USED']       = 'Swap utilisé';
$L['SYS_DASH_RAM_USED']        = 'RAM utilisée';
$L['SYS_DASH_CPU']             = 'CPU';
$L['SYS_DASH_TMD']             = 'Total des téléversements mensuels';
$L['SYS_DASH_TMU']             = 'Total des téléchargements mensuels';
$L['APT_UPDATES']              = 'Mises à jour APT';
$L['APT_DEPENDENCY']           = 'Paquet de dépendances';
$L['APT_VERSION_INSTALLED']    = 'Version actuelle';
$L['APT_VERSION_AVAILABLE']    = 'Version disponible';
$L['UPDATE_APT_DEPENDENCIES']  = 'Mettre à jour les dépendances apt';

/* *********************************
 * #4.4.9.1 - Modalité des totaux de bande passante
 *************************************/
$L['BANDWIDTH_TOTALS']            = 'Totaux de bande passante';
$L['BANDWIDTH_DATA_TIME_NOTICE']  = 'Remarque : les heures affichées sur ces graphiques sont basées sur le fuseau horaire du serveur et non sur votre fuseau horaire local. Pour ajuster le fuseau horaire du serveur, veuillez suivre les étapes ci-dessous.<br/><ul><li>Connectez-vous en SSH à votre serveur</li><li>Exécutez la commande<br/><code>sudo dpkg-reconfigure tzdata</code></li><li>Suivez les instructions pour sélectionner votre fuseau horaire</li><li>Une fois terminé, exécutez la commande ci-dessous<br><code>qb-vnstat --adjust-timestamps</code></li></ul><p class=\'text-warning\'>Le réglage du fuseau horaire du serveur aura un impact sur les données de graphique accumulées.</p>';
$L['SELECT_AN_INTERFACE']         = 'Sélectionnez une interface';
$L['BANDWIDTH_TOTALS_DATA_INFO']  = 'Ces données sont collectées à partir de la base de données vnStat et sont basées sur le cycle mensuel défini dans la configuration vnStat. Les données sont collectées et stockées dans la base de données vnStat et sont affichées ici pour votre commodité. Vous pouvez gérer la date de début de la bande passante mensuelle et réinitialiser les statistiques via <a href=\'/configurations.php#additionals\' style=\'display:inline-flex\'>Paramètres généraux > Paramètres supplémentaires du tableau de bord</a>. Cela vous permet d\'ajuster la date de début ou d\'effacer la base de données vnStat pour réinitialiser les totaux.';
$L['VIEWING_DATA_FOR']            = 'Affichage des données pour :';
$L['MONTHLY_BANDWIDTH_DATA']      = 'Données mensuelles de bande passante';
$L['DAILY_BANDWIDTH_DATA']        = 'Données quotidiennes de bande passante';
$L['HOURLY_BANDWIDTH_DATA']       = 'Données horaires de bande passante';
$L['BANDWIDTH_YEAR']              = 'Année';
$L['BANDWIDTH_MONTH']             = 'Mois';
$L['BANDWIDTH_DAY']               = 'Jour';
$L['BANDWIDTH_HOUR']              = 'Heure';
$L['BANDWIDTH_TOTAL']             = 'Trafic total';
$L['BANDWIDTH_RX']                = 'Télécharger';
$L['BANDWIDTH_TX']                = 'Télécharger';
$L['BANDWIDTH_SELECT_INTERFACE']  = 'Sélectionner l\'interface';
$L['BANDWIDTH_SELECT_MONTH']      = 'Sélectionner le mois';
$L['BANDWIDTH_SELECT_DAY']        = 'Sélectionner le jour';
$L['BANDWIDTH_SELECT_HOUR']       = 'Sélectionner l\'heure';
$L['BANDWIDTH_SELECT_YEAR']       = 'Sélectionner l\'année';
$L['BANDWIDTH_USAGE']             = 'Utilisation de la bande passante';
$L['BANDWIDTH_VIEWING_INTERFACE'] = '(( visualisation ))';

/* **********************************
 * #4.4.10 - TABLEAU DE BORD « EN COURS DE LECTURE »
 ************************************/
$L['STREAMING_DASHBOARD']                        = 'Tableau de bord Streaming';
$L['STREAMING_DASHBOARD_INFO']                   = 'Le tableau de bord « En cours de lecture » offre un aperçu de l’activité de streaming en cours sur votre serveur. Cette fonctionnalité prend actuellement en charge les services de streaming Emby et Jellyfin. Le tableau affiche le nombre de flux actifs, la bande passante totale utilisée, et les médias actuellement diffusés. De plus, vous pouvez voir les derniers films et épisodes visionnés par vos utilisateurs.';
$L['DAEMON_AND_STREAMING_SERVICES']              = 'Deck de contrôle Daemon + Media Server';
$L['STREAMING_APP_VERSION']                      = 'Version de {applicationName}';
$L['ENTER_API_KEY']                              = 'Entrez votre clé API';
$L['API_KEY_PLACEHOLDER']                        = 'Entrez votre clé API {serviceName}';
$L['MASS_NOTIFICATION']                          = 'Notification de masse';
$L['TEMP_TRANSCODE_PATH']                        = 'Chemin temporaire de transcodage';
$L['CLEAR_TEMP_TRANSCODE_PATH']                  = 'Vider les transcodages temporaires';
$L['INTERVAL_SETTINGS_FOR_TEMP_TRANSCODES']      = 'Paramètres d’intervalle pour les transcodages temporaires';
$L['INTERVAL_SETTINGS_FOR_TEMP_TRANSCODES_TIPS'] = '<strong><em>Les valeurs suivantes sont exprimées en minutes.</em></strong><br><small>(ex : 90 minutes = 1,5 heures)</small><hr>Ces paramètres définissent les intervalles auxquels les transcodages temporaires sont supprimés. Le système supprimera automatiquement les transcodages selon les intervalles spécifiés pour libérer de l’espace disque et optimiser les performances.';
$L['INTERVAL_STANDARD']                          = 'Médias standards';
$L['INTERVAL_LIVE_TV']                           = 'TV en direct';
$L['ENABLE_TRANSCODE_AUTO_CLEAR']                = 'Activer la suppression automatique des transcodages temporaires';
$L['TRANSCODE_AUTO_CLEAR_ACTIVATED']             = 'Suppression automatique des transcodages activée.<br>Intervalle standard : {standardInterval} minutes.<br>Intervalle TV en direct : {liveTvInterval} minutes.';
$L['TRANSCODE_AUTO_CLEAR_DEACTIVATED']           = 'Suppression automatique des transcodages désactivée.';
$L['SETTINGS_SAVE_SUCCESS']                      = 'Paramètres enregistrés avec succès.';
$L['STREAMING_STATS']                            = 'Statistiques de streaming';
$L['LATEST_MOVIES']                              = 'Derniers films';
$L['MOVIE']                                      = 'Film';
$L['MOVIES']                                     = 'Films';
$L['LATEST_EPISODES']                            = 'Derniers épisodes';
$L['SHOWS']                                      = 'Émissions';
$L['SERIES']                                     = 'Séries';
$L['EPISODE']                                    = 'Épisode';
$L['SEASON_EPISODE']                             = 'Saison/Épisode';
$L['EPISODE_TITLE']                              = 'Épisode';
$L['LIVETV']                                     = 'TV en direct';
$L['CHANNEL']                                    = 'Chaîne';
$L['CHANNEL_NUMBER']                             = 'Numéro de chaîne';
$L['NOW_PLAYING']                                = 'Lecture en cours';
$L['MEDIA_TITLE']                                = 'Titre du média';
$L['MEDIA_TYPE']                                 = 'Type de média';
$L['YEAR']                                       = 'Année';
$L['DURATION']                                   = 'Durée';
$L['ACTION']                                     = 'Action';
$L['DISCONNECT_REASON']                          = 'Raison de la déconnexion';
$L['NOTIFICATION']                               = 'Notification';
$L['LIBRARY']                                    = 'Bibliothèque';
$L['LIBRARY_PATH']                               = 'Chemin de la bibliothèque';
$L['PREMIERE_DATE']                              = 'Date de sortie';
$L['ACTIVE_STREAMS_PLACEHOLDER']                 = '(0 flux actifs)';
$L['BANDWIDTH_USED_PLACEHOLDER']                 = '(Bande passante utilisée : 0 Mbps)';
$L['MEDIA_ITEM']                                 = 'Élément multimédia';
$L['ACTION_INFO']                                = 'Infos action';
$L['ADDITIONAL_INFO']                            = 'Informations supplémentaires';
$L['NO_DETAILS_AVAILABLE']                       = 'Aucun détail disponible.';
$L['DEVICE_INFO']                                = 'Infos appareil';
$L['STREAM_INFO']                                = 'Infos flux';
$L['PLAY_STATE_PRIORITY']                        = 'Priorité d’état de lecture';
$L['VIEW_WSD_LOGS']                              = 'Voir les journaux WSD';
$L['WSD_ACTION_LOGS']                            = 'Journaux des actions WSD';
$L['CLEAR_LOGS']                                 = 'Effacer les journaux';
$L['NO_ACTIONS_CURRENTLY_LOGGED']                = 'Aucune action enregistrée actuellement.';
$L['KILL_STREAM_SETTINGS']                       = 'Paramètres Killstream';
$L['NOTIFICATION_TITLE']                         = 'Notification';
$L['NOTIFICATION_MESSAGE']                       = 'Message';
$L['THRESHOLD_SETTINGS_FOR_KILLSTREAM']          = 'Paramètres de seuil pour Killstream';
$L['THRESHOLD_SETTINGS_FOR_KILLSTREAM_TIPS']     = '<strong><em>Les valeurs suivantes sont exprimées en secondes.</em></strong><br><small>(ex : 600 secondes = 10 minutes)</small><hr>Ces paramètres définissent les conditions dans lesquelles un flux sera arrêté de force pour inactivité. Le système surveillera l’activité du flux et, si les conditions sont remplies, il arrêtera automatiquement le flux pour libérer des ressources.';
$L['STANDARD_MEDIA']                             = 'Médias standards';
$L['LIVE_TV_MEDIA']                              = 'TV en direct';
$L['SKIP_NOTIFICATION']                          = 'Ignorer la notification';
$L['SKIP_DISCONNECTION']                         = 'Ignorer la déconnexion';
$L['PAUSE_DURATION']                             = 'Durée de pause';
$L['DISCONNECT_DURATION']                        = 'Durée avant déconnexion';
$L['WSD_ACTION_CLEAR_LOGS_CONFIRM']              = 'Voulez-vous vraiment effacer les journaux ?';
$L['WSD_ACTION_CLEAR_LOGS']                      = 'Oui, les effacer !';
$L['WSD_ACTION_CLEAR_LOGS_FAILED']               = 'Échec de l’effacement des journaux.';
$L['WSD_ACTION_CLEAR_LOGS_SUCCESS']              = 'Journaux effacés avec succès.';
$L['WSD_ADMIN_NOTIFY']                           = '<span class="text-info fw900">[admin-notify]</span> <strong>{admin}</strong> {admin_status} a envoyé une <span class="text-warning fw600">notification</span> à <strong>{user}</strong> en train de regarder <span class="text-primary fw600">{media}</span>.<br><div style="border:1px solid var(--qb-color-8-rgba);background:var(--qb-color-1-rgba);padding:4px 12px;border-radius:3px;text-wrap:pretty;min-width:250px;"><span class="fw600">{notif_header}</span><br><span class="fw300">{notif_text}</span></div>';
$L['WSD_KILL_NOTIFY']                            = '<span class="text-info fw900">[kill-notify]</span> {user} regardant <span class="text-primary fw600">{media}</span> en pause depuis <span class="text-info fw600">{paused_time}</span> à <span class="text-mute">{pause_position}</span> le <span class="text-mute fw600">{pause_date} {pause_time}</span> depuis <span class="text-mute fw600">{device} {ip}</span> a été <span class="text-warning fw600">notifié</span> pour inactivité.';
$L['WSD_NOTIFY']                                 = '<span class="text-info fw900">[notify]</span> {user} a reçu une notification.';
$L['WSD_ADMIN_STOP']                             = '<span class="text-info fw900">[admin-stop]</span> {user} regardant <span class="text-primary fw600">{media}</span> depuis <span class="text-mute fw600">{device}</span> a été <span class="text-danger fw600">arrêté de force</span> par <strong>{admin}</strong> {admin_status}.';
$L['WSD_KILL_STREAM']                            = '<span class="text-info fw900">[kill-stream]</span> {user} regardant <span class="text-primary fw600">{media}</span> en pause depuis <span class="text-info fw600">{paused_time}</span> à <span class="text-mute">{pause_position}</span> le <span class="text-mute fw600">{pause_date} {pause_time}</span> depuis <span class="text-mute fw600">{device} {ip}</span> a été <span class="text-danger fw600">arrêté</span> pour inactivité.';
$L['WSD_ADMIN_DISCONNECT']                       = '<span class="text-info fw900">[admin-disconnect]</span> {user} regardant <span class="text-primary fw600">{media}</span> depuis <span class="text-mute fw600">{device}</span> a été <span class="text-danger fw600">déconnecté de force</span> par <strong>{admin}</strong> {admin_status}.';
$L['WSD_DISCONNECT_STREAM']                      = '<span class="text-info fw900">[kill-stream]</span> {user} regardant <span class="text-primary fw600">{media}</span> en pause depuis <span class="text-info fw600">{paused_time}</span> à <span class="text-mute">{pause_position}</span> le <span class="text-mute fw600">{pause_date} {pause_time}</span> depuis <span class="text-mute fw600">{device} {ip}</span> a été <span class="text-danger fw600">déconnecté</span> pour inactivité.';
$L['WSD_MASS_NOTIFICATION']                      = '<span class="text-info fw900">[mass-notification]</span> <strong>{admin}</strong> {admin_status} a envoyé une notification de masse.<br><strong>Utilisateurs notifiés :</strong> {users_notified}<br><strong>Utilisateurs actifs :</strong> {active_users}, <strong>Total des sessions :</strong> {session_count}.<div style="border:1px solid var(--qb-color-8-rgba);background:var(--qb-color-1-rgba);padding:4px 12px;border-radius:3px;text-wrap:pretty;min-width:250px;"><strong>{notif_header}</strong><br>{notif_text}</div>';
$L['WSD_USER_ACTION']                            = '<span class="text-info fw900">[user-action]</span> {user} a effectué l\'action : <span class="text-primary fw600">{action}</span> le <span class="text-mute fw600">{date} {time}</span>.';
$L['NONE']                                       = 'Aucun';

/* *****************************************
 * #4.4.10.1 - erreurs et messages au niveau de la page
 *******************************************/
$L['MISSING_FIELD']                    = 'Champ manquant';
$L['MISSING_API_KEY']                  = 'Clé API manquante';
$L['INVALID_API_KEY_FORMAT']           = 'Format de clé API invalide. Veuillez entrer une clé API valide.';
$L['UNKNOWN_MEDIA']                    = 'Média inconnu';
$L['UNKNOWN_DURATION']                 = 'Durée inconnue';
$L['UNKNOWN_PAUSE_TIME']               = 'Temps de pause inconnu';
$L['ERROR_FETCHING_LOGS']              = 'Erreur lors de la récupération des journaux.';
$L['NO_SUPPORTED_STREAMING_SERVICE']   = 'Aucun service de streaming pris en charge n’est installé.';
$L['PROCESS_REQUEST_ERROR']            = 'Erreur lors du traitement de la requête. Veuillez réessayer.';
$L['API_CONNECTION_ERROR']             = 'Impossible de se connecter à l’API {serviceName}. Veuillez vérifier votre clé API et la configuration du serveur.';
$L['INPUT_READ_FAILED']                = 'Échec de lecture de l’entrée.';
$L['INVALID_INPUT']                    = 'Entrée invalide. Veuillez vérifier votre saisie et réessayer.';
$L['INVALID_JSON_PAYLOAD']             = 'Charge JSON invalide : {error}';
$L['INVALID_EMBY_API_KEY']             = 'Clé API Emby invalide.';
$L['INVALID_JELLYFIN_API_KEY']         = 'Clé API Jellyfin invalide.';
$L['DB_FILE_NOT_FOUND']                = 'Fichier de base de données introuvable : {dbPath}';
$L['API_KEY_SAVE_SUCCESS']             = 'Clé API enregistrée avec succès.';
$L['API_KEY_SAVE_FAILED']              = 'Échec de l’enregistrement de la clé API.';
$L['INVALID_TEMP_TRANSCODE_PATH']      = 'Chemin temporaire de transcodage invalide.';
$L['INVALID_SERVICE_SPECIFIED']        = 'Service spécifié invalide.';
$L['TEMP_TRANSCODE_PATH_SAVE_FAIL']    = 'Échec de l’enregistrement du chemin temporaire de transcodage.';
$L['TEMP_TRANSCODE_PATH_SAVE_SUCCESS'] = 'Chemin temporaire de transcodage enregistré avec succès.';
$L['TRANSCODE_INTERVAL_SAVE']          = 'Intervalle de nettoyage automatique du transcodage enregistré avec succès.';
$L['TRANSCODE_INTERVAL_FAILED']        = 'Échec de l’enregistrement de l’intervalle de nettoyage automatique du transcodage.';
$L['INVALID_TRANSCODE_PATH']           = 'Chemin de transcodage invalide ou manquant.';
$L['TRANSCODE_DIR_EMPTY_FAILED']       = 'Échec du vidage du répertoire temporaire de transcodage.';
$L['TRANSCODE_DIR_EMPTY_SUCCESS']      = 'Répertoire temporaire de transcodage vidé avec succès.';
$L['EMBY_CONFIG_LOAD_FAILED']          = 'Échec du chargement de la configuration Emby.';
$L['EMBY_API_KEY_RETRIEVE_FAILED']     = 'Échec de récupération de la clé API Emby.';
$L['JELLYFIN_API_KEY_RETRIEVE_FAILED'] = 'Échec de récupération de la clé API Jellyfin.';
$L['JELLYFIN_CONFIG_LOAD_FAILED']      = 'Échec du chargement de la configuration Jellyfin.';
$L['LATEST_LOG_FETCH_FAILED']          = 'Échec de la récupération du dernier journal.';
$L['ERROR_PREFIX']                     = '[ERREUR] ';
$L['UNKNOWN']                          = 'Inconnu';
$L['UNKNOWN_USER']                     = 'Utilisateur inconnu';
$L['UNKNOWN_DEVICE']                   = 'Appareil inconnu';
$L['API_URL_KEY_REQUIRED']             = 'L’URL et la clé API sont requises.';
$L['FAILED_TO_CREATE_UPDATE_TRIGGER']  = 'Échec de création du déclencheur de mise à jour : ';
$L['DB_TABLE_CREATE_FAILED']           = 'Échec de création de la table `media_api` : {error}';
$L['DB_TABLE_INFO_FAILED']             = 'Échec de récupération des informations de la table `media_api` : {error}';
$L['DB_COLUMN_ADD_FAILED']             = 'Échec de l’ajout de la colonne `{column}` à `media_api` : {error}';
$L['LOCATION_PRIVATE_RESERVED']        = 'IP privée/locale';
$L['UNKNOWN_IP']                       = 'IP inconnue';
$L['LOCATION_UNKNOWN_CITY']            = 'Ville inconnue';
$L['LOCATION_UNKNOWN_STATE']           = 'État inconnu';
$L['LOCATION_UNKNOWN_COUNTRY']         = 'Pays inconnu';
$L['LOCATION_LOADING']                 = 'Chargement de l’emplacement...';
$L['LOCATION_ERROR']                   = 'Erreur';
$L['API_MOVIE_COUNT_FETCH_FAILED']     = 'Échec de récupération du nombre de films depuis l’API {applicationName}. Code HTTP : {httpCode}. Erreur : {error}';
$L['API_MOVIE_COUNT_NOT_FOUND']        = 'Nombre de films introuvable dans la réponse de l’API {applicationName}.';
$L['API_SERIES_COUNT_FETCH_FAILED']    = 'Échec de récupération du nombre de séries depuis l’API {applicationName}. Code HTTP : {httpCode}. Erreur : {error}';
$L['API_SERIES_COUNT_NOT_FOUND']       = 'Nombre de séries introuvable dans la réponse de l’API {applicationName}.';
$L['API_EPISODE_COUNT_FETCH_FAILED']   = 'Échec de récupération du nombre d’épisodes depuis l’API {applicationName}. Code HTTP : {httpCode}. Erreur : {error}';
$L['API_EPISODE_COUNT_NOT_FOUND']      = 'Nombre d’épisodes introuvable dans la réponse de l’API {applicationName}.';
$L['CURL_INIT_FAILED']                 = 'Échec de l’initialisation de la session cURL pour {applicationName}.';
$L['CURL_ERROR']                       = 'Erreur cURL : {error}';
$L['HTTP_ERROR']                       = 'Erreur HTTP : Code d’état {httpStatus}';
$L['UNEXPECTED_RESPONSE_TYPE']         = 'Type de réponse inattendu : {responseType}';
$L['INVALID_LOGS_FORMAT']              = 'Format des journaux invalide : tableau attendu mais {logType} reçu';
$L['INVALID_APPLICATION_NAME']         = 'Nom d’application invalide. Doit être \'jellyfin\' ou \'emby\'.';
$L['DB_QUERY_PREPARE_FAILED']          = 'Échec de préparation de la requête à la base de données : {error}';
$L['DB_QUERY_EXECUTION_FAILED']        = 'Échec d’exécution de la requête à la base de données : {error}';
$L['DB_SELECT_QUERY_PREPARE_FAILED']   = 'Échec de préparation de la requête SELECT : {error}';
$L['DB_SELECT_QUERY_EXECUTE_FAILED']   = 'Échec d’exécution de la requête SELECT : {error}';
$L['DB_UPDATE_QUERY_PREPARE_FAILED']   = 'Échec de préparation de la requête UPDATE : {error}';
$L['DB_INSERT_QUERY_PREPARE_FAILED']   = 'Échec de préparation de la requête INSERT : {error}';
$L['DB_API_KEY_RETRIEVAL_FAILED']      = 'Échec de récupération de la clé API en raison d’une erreur de base de données.';
$L['UNSUPPORTED_DB_TYPE']              = 'Type de base de données non supporté : {dbType}';
$L['DOMAIN_NOT_DEFINED']               = 'Le domaine {applicationName} n’est pas défini.';
$L['QUERY_FAILED']                     = 'Échec de la requête : {errorInfo}';
$L['NO_INSTALLATION_FOUND']            = 'Aucune installation de {applicationName} trouvée pour aucun utilisateur.';
$L['USERNAME_FETCH_FAILED']            = 'Échec de récupération du nom d’utilisateur pour l’ID utilisateur {appUID} de {applicationName}.';
$L['INVALID_API_URL']                  = 'URL API de {applicationName} invalide : {apiUrl}.';
$L['INVALID_TOGGLE_VALUE']             = 'Valeur de bascule invalide. 0 ou 1 attendu.';
$L['INVALID_PATH_FORMAT']              = 'Format de chemin invalide. Chaîne attendue.';
$L['INVALID_INTERVAL']                 = 'Format d’intervalle invalide. Entier positif attendu.';
$L['SETTINGS_SAVE_FAILED']             = 'Échec de l’enregistrement des paramètres. Veuillez réessayer.';
$L['SERVER_ERROR']                     = 'Erreur du serveur';

/* **********************************
 * #4.5 - ERROR PAGES
 ************************************/
$L['404HACK'] = 'Aie! Voulez-vous vraiment me faire du mal?';
$L['404PAGE'] = 'La page que vous recherchez n\'est pas disponible.';
$L['404PRO']  = 'Votre licence est probablement expirée. Veuillez acheter une <a href="https://nullrefer.ir/?https://quickbox.io/product/quickbox-pro-subscription/" rel="noopener nofollow" target="_blank">nouvelle licence</a> pour acceder à cette page.';
$L['500PAGE'] = 'C\'est embarrassant, quelque chose semble s\'être mal passé.';
$L['WHOOPS']  = 'Oops!';
