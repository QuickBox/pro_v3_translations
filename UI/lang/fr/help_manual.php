<?php
return [
  // #4.4.7 - HELP MANUAL
  'QB_HELP'                                           => 'Manuel d\'Aide',

  // #4.4.7.1 - description
  'DESCRIPTION_CONTENT'                               => '<p>Bienvenue dans l\'affichage graphique complet de la page de manuel <code>qb</code>, conçu pour vous offrir une approche traduite, simplifiée et efficace pour accéder à diverses informations sur QuickBox. Cette interface conviviale vise à fournir des aperçus approfondis du fonctionnement de QuickBox, un outil puissant et polyvalent pour gérer votre serveur sans effort.</p><p>Dans cet affichage graphique, vous trouverez une liste détaillée des applications disponibles prêtes pour une installation transparente, vous permettant de personnaliser la configuration de votre serveur selon vos besoins spécifiques. De plus, cette ressource présente une multitude d\'autres commandes essentielles pour une utilisation optimale dans l\'environnement CLI <code>qb</code>, vous permettant de naviguer efficacement et sans effort dans vos tâches de serveur.</p><p>Que vous soyez nouveau sur QuickBox ou un utilisateur expérimenté, cet affichage graphique de la page de manuel <code>qb</code> sert de référence ultime pour exploiter tout le potentiel de QuickBox et libérer la vraie puissance de votre gestion de serveur. Explorez les fonctionnalités diverses, rationalisez vos opérations de serveur et maximisez votre productivité avec l\'aide de ce guide intuitif et informatif. Plongeons et rendons votre expérience QuickBox encore plus enrichissante !</p>',
  'API_INFO_DIRECT'                                   => '<p style="font-weight:600;">Pour plus d\'informations et de références sur l\'API QuickBox intégrée, <a href="/api-control.php" rel="noopenner nofollow" class="link" style="color:var(--qb-color-37);">voir cette page</a>.</p>',

  // #4.4.7.2 - options
  'OPTIONS_HEADER'                                    => 'Options',
  'OPTIONS_CONTENT_HELP'                              => 'Affiche ce manuel d\'aide au format page de manuel CLI',
  'OPTIONS_CONTENT_VERBOSE'                           => 'Active le mode verbeux pour le débogage',

  // #4.4.7.3 - software
  'SOFTWARE_HEADER'                                   => 'Logiciels',
  'SOFTWARE_INFO_CONTENT'                             => '<p>Ce qui suit est une liste de toutes les applications disponibles pour l\'installation fournies via la compilation QuickBox.<br/>Les noms des logiciels sont présentés tels qu\'ils sont vus par <code>qb [install|reinstall|update|remove|help] [nom_logiciel]</code></p>',
  'ADMIN_INSTALLED_SOFTWARE_HEADER'                   => 'Logiciels Installés par l\'Administrateur',
  'ADMIN_INSTALLED_SOFTWARE_INFO_CONTENT'             => '<p>Les applications suivantes doivent être installées par l\'Administrateur Système.<br/>Voir la colonne de disponibilité ci-dessous pour plus de détails.</p>',
  'MULTI_USER_SOFTWARE_HEADER'                        => 'Logiciels Multi-Utilisateurs',
  'MULTI_USER_SOFTWARE_INFO_CONTENT'                  => '<p>Les applications suivantes peuvent être installées par plusieurs utilisateurs sans avoir besoin d\'assistance administrative.<br/>Toute disponibilité d\'application est déterminée par l\'Administrateur Système et accordée aux utilisateurs supplémentaires dans des <a href="/usergroups.php" rel="noopener nofollow" class="link">groupes créés</a>.</p>',
  'SINGLE_USER_SOFTWARE_HEADER'                       => 'Logiciels Utilisateur Unique',
  'SINGLE_USER_SOFTWARE_INFO_CONTENT'                 => '<p>Les applications suivantes peuvent être installées par un seul utilisateur assigné à la fois, sans avoir besoin d\'assistance administrative.<br/>Toute disponibilité d\'application est déterminée par l\'Administrateur Système et accordée aux utilisateurs supplémentaires dans des <a href="/usergroups.php" rel="noopener nofollow" class="link">groupes créés</a>.</p>',
  'SOFTWARE_MANAGEMENT'                               => 'Gestion des Logiciels',
  'SOFTWARE_MANAGEMENT_CONTENT'                       => 'Paramètres pour installer, réinstaller, mettre à jour ou supprimer le logiciel désigné avec des options supplémentaires (si présentes/souhaitées) à un utilisateur assigné',
  'SOFTWARE_MANAGEMENT_WARNING_CONTENT'               => '<p>Gardez à l\'esprit que diverses applications ont diverses options/exigences. La majorité nécessite l\'utilisation du drapeau nom d\'utilisateur (<code>-u</code>), alors que des applications telles que rtorrent ne le feront pas. Pour vérifier toutes les options disponibles pour un logiciel spécifique, utilisez <code class="language-bash">qb help [nom_logiciel]</code>. La dénomination d\'application dans QuickBox pour le schéma de dénomination des logiciels peut être consultée dans le <a href="#software" class="link">tableau de liste des logiciels</a> ci-dessus.</p>',
  'SEE_ALSO_HEADER'                                   => 'Voir Aussi',
  'SEE_ALSO_CONTENT'                                  => 'Afficher l\'utilisation utile des commandes pour le logiciel désigné',

  // #4.4.7.4 - software options table
  'SOFTWARE_NAME'                                     => 'Nom du Logiciel',
  'SOFTWARE_TITLE'                                    => 'Titre du Logiciel',
  'USABILITY'                                         => 'Utilisabilité',
  'CAN_ROLLBACK'                                      => 'Option de Retour Arrière',
  'INFO'                                              => 'Info',
  'ADMIN_BADGE'                                       => '<span class="badge badge-pills badge-table-menu" style="padding:2px 6px;line-height:0.7rem;background-color:var(--qb-color-6-rgba);color:#fff;font-size:0.5rem;">admin seulement</span>',
  'GLOBAL_BADGE'                                      => '<span class="badge badge-pills badge-table-menu" style="padding:2px 6px;line-height:0.7rem;background-color:var(--qb-color-5-rgba);color:#fff;font-size:0.5rem;">global</span>',
  'MULTI_USER_BADGE'                                  => '<span class="badge badge-pills badge-table-menu" style="padding:2px 6px;line-height:0.7rem;background-color:var(--qb-color-4-rgba);color:#fff;font-size:0.5rem;">multi utilisateur</span>',
  'SINGLE_USER_BADGE'                                 => '<span class="badge badge-pills badge-table-menu" style="padding:2px 6px;line-height:0.7rem;background-color:var(--qb-color-3-rgba);color:#fff;font-size:0.5rem;">utilisateur unique</span>',
  'GLOBAL_INFO'                                       => 'nécessite une installation administrative et installe pour tous les utilisateurs du système.',
  'MULTI_USER_INFO'                                   => 'nécessite une installation administrative et peut être installé pour tout utilisateur assigné. plusieurs utilisateurs sont pris en charge.',
  'SINGLE_USER_INFO'                                  => 'utilisateur unique, admin seulement. nécessite une installation administrative et est installé et exploité par l\'utilisateur admin.',

  // #4.4.7.5 - examples header
  'EXAMPLES_HEADER'                                   => 'Exemples',

  // #4.4.7.6 - user management
  'USER_MANAGEMENT_INFO_CONTENT'                      => '<p>Les fonctions de gestion <code>qb user</code> dans QuickBox offrent un ensemble d\'outils polyvalents et puissants pour gérer efficacement les utilisateurs sur votre serveur. Avec un accent sur la facilité d\'utilisation et la robustesse fonctionnelle, ces fonctions vous permettent de rationaliser la gestion des utilisateurs, d\'améliorer la sécurité et d\'assurer un fonctionnement fluide du serveur.</p>',
  'CREATE_USER_CONTENT'                               => 'Crée un nouveau compte utilisateur QuickBox',
  'DELETE_USER_CONTENT'                               => 'Supprime le compte utilisateur QuickBox',
  'CHANGE_USER_PASSWORD'                              => 'Changer le Mot de Passe Utilisateur',
  'CHANGE_USER_PASSWORD_CONTENT'                      => 'Change le mot de passe pour le compte utilisateur assigné',
  'BAN_USER_CONTENT'                                  => 'Bannit le compte utilisateur assigné, empêchant la connexion et arrêtant les services installés et leurs fonctions.',
  'BAN_USER_PRIMARY_CONTENT'                          => '<p><em>Cela ne <strong>supprime</strong> pas les données utilisateur</em>, désactive seulement les services en cours et bloque l\'accès.</p>',
  'UNBAN_USER_CONTENT'                                => 'Débannit le compte utilisateur assigné, permettant la connexion et démarrant les services installés et leurs fonctions',
  'PROMOTE_USER_TO_ADMIN'                             => 'Promouvoir l\'Utilisateur en Admin',
  'PROMOTE_USER_TO_ADMIN_CONTENT'                     => 'Promouvoit l\'utilisateur assigné au niveau administrateur',
  'DEMOTE_USER_FROM_ADMIN'                            => 'Rétrograder l\'Utilisateur d\'Admin',
  'DEMOTE_USER_FROM_ADMIN_CONTENT'                    => 'Rétrograde l\'utilisateur assigné au niveau utilisateur standard',
  'SET_USER_QUOTA'                                    => 'Définir le Quota Utilisateur',
  'SHOW_USER_QUOTA'                                   => 'Afficher le Quota Utilisateur',
  'SET_USER_SHELL'                                    => 'Définir le Shell Utilisateur',
  'SET_USER_SHELL_CONTENT'                            => 'Définit l\'environnement shell pour l\'utilisateur assigné',
  'SET_USER_SHELL_INFO_CONTENT'                       => '<p><strong><code>sudo</code></strong><br>privilèges administratifs complets sur l\'environnement serveur (grand pouvoir... etc)<br><strong><code>full</code></strong><br>accès complet à l\'environnement serveur, à l\'exception des zones de privilèges plus élevés ; c\'est-à-dire : pas de sudo et ne peut pas accéder aux répertoires racine.<br><strong><code>limited</code></strong><br>l\'environnement shell limité. très peu d\'accès aux commandes et emprisonné dans leur propre répertoire utilisateur.</p><hr/><p>Les environnements shell sont définis par l\'Administrateur Système et peuvent être consultés sur la page de modification des utilisateurs située dans la <a href="/useradmin.php" rel="noopener nofollow" class="link">page d\'Administration Utilisateur</a>.<br/>Si vous souhaitez ajouter un nouvel environnement shell, vous pouvez le faire en modifiant le fichier <code>/etc/shells</code> et en ajoutant le chemin vers l\'environnement shell que vous souhaitez ajouter.</p>',
  'SET_USER_SHELL_DANGER_CONTENT'                     => '<p><strong>Attention :</strong> Veuillez noter que changer l\'environnement shell vers autre chose que <code>/bash</code> peut entraîner un comportement non intentionnel lors de l\'utilisation de <code>qb</code> (QuickBox), car il a été spécifiquement conçu et optimisé pour l\'environnement <code>/bash</code>. En bref, <code>qb</code> dépend de fonctionnalités et fonctionnalités spécifiques fournies par le shell Bash.<br><br>Pour éviter tout problème potentiel, il est conseillé de s\'en tenir à l\'environnement <code>/bash</code> lors de l\'utilisation de <code>qb</code>. Si vous souhaitez toujours utiliser un shell différent, consultez la documentation de ce shell pour examiner tout changement supplémentaire aux chemins, configurations ou autres paramètres qui peuvent devoir être mis à jour pour assurer la compatibilité avec <code>qb</code>.</p>',
  'USER_RCLONE_COMPANION_COMMANDS'                    => 'Commandes Compagnon Rclone',

  // #4.4.7.7 - clean functions
  'CLEAN_FUNCTIONS'                                   => 'Fonctions de Nettoyage',
  'CLEAN_FUNCTIONS_INFO_CONTENT'                      => '<p>Les fonctions <code>qb clean</code> dans QuickBox offrent un moyen pratique et efficace de maintenir la propreté de votre serveur et d\'optimiser ses performances. Conçues avec la simplicité et l\'efficacité à l\'esprit, ces fonctions vous permettent de libérer une mémoire précieuse, de supprimer l\'encombrement inutile et d\'assurer un fonctionnement fluide et rationalisé du serveur.</p>',
  'CLEAN_MEMORY'                                      => 'Nettoyer la Mémoire',
  'CLEAN_MEMORY_CONTENT'                              => 'Nettoie les caches mémoire QuickBox',
  'CLEAN_DASHBOARD_LOGS'                              => 'Nettoyer les Logs du Tableau de Bord',
  'CLEAN_DASHBOARD_LOGS_CONTENT'                      => 'Nettoie les logs du tableau de bord QuickBox pour l\'utilisateur désigné',
  'CLEAN_QB_DASHBOARD_LOGS'                           => 'Nettoyer les fichiers de log du Tableau de Bord QB',
  'CLEAN_QB_DASHBOARD_LOGS_CONTENT'                   => 'Cette commande est conçue pour effacer le log d\'Actions UI actuel publié depuis syslog et réinitialiser le log d\'erreur UI Nginx à son état initial',
  'CLEAN_SYSTEM_LOGS'                                 => 'Supprimer les anciens fichiers de log système',
  'CLEAN_SYSTEM_LOGS_CONTENT'                         => 'Cette commande est conçue pour supprimer les logs et archives compressées dans le répertoire <code>/var/log</code> qui ont dépassé la période de rétention assignée. La période de rétention est définie à 7 jours par défaut (si aucune valeur optionnelle n\'est saisie).',
  'CLEAN_RCLONE_UPLOAD_LOGS'                          => 'Nettoyer les Logs de Téléchargement Rclone',
  'CLEAN_RCLONE_UPLOAD_LOGS_CONTENT'                  => 'Nettoie les logs de téléchargement rclone QuickBox pour l\'utilisateur désigné',
  'CLEAN_LOCKS'                                       => 'Nettoyer les Verrous',
  'CLEAN_LOCKS_CONTENT'                               => 'Nettoie les verrous logiciels QuickBox et apt-dpkg qui peuvent empêcher QuickBox d\'installer de nouveaux logiciels',

  // #4.4.7.8 - fix functions
  'FIX_FUNCTIONS'                                     => 'Fonctions de Correction',
  'FIX_FUNCTIONS_INFO_CONTENT'                        => '<p>Les fonctions <code>qb fix</code> dans QuickBox fournissent une boîte à outils puissante et conviviale pour résoudre les problèmes courants et effectuer des réparations système sans effort. Avec un accent sur la simplicité et l\'efficacité, ces fonctions vous permettent de diagnostiquer et résoudre divers problèmes qui peuvent survenir sur votre serveur, assurant des opérations fluides et ininterrompues.</p>',
  'FIX_HOME'                                          => 'Corriger l\'Accueil',
  'FIX_HOME_CONTENT'                                  => 'Corrige les permissions du répertoire d\'accueil des utilisateurs désignés',
  'FIX_PHP'                                           => 'Corriger PHP',
  'FIX_PHP_CONTENT'                                   => 'Corrige la configuration PHP et installe les extensions manquantes',
  'FIX_PYTHON'                                        => 'Corriger Python',
  'FIX_PYTHON_CONTENT'                                => 'Corrige la configuration Python et installe les extensions manquantes. De plus, prépare python3.9 s\'il n\'est pas actuellement disponible sur le système pour une utilisation par défaut sur les compilations d\'applications nécessitant python',
  'FIX_VERSION'                                       => 'Corriger la Version',

  // #4.4.7.9 - generate functions
  'GENERATE_FUNCTIONS'                                => 'Fonctions de Génération',
  'GENERATE_FUNCTIONS_INFO_CONTENT'                   => '<p>Les fonctions <code>qb generate</code> dans QuickBox offrent un moyen pratique et efficace de créer des éléments essentiels qui améliorent la gestion et la surveillance du serveur. Actuellement, la commande qb generate prend en charge la fonction qb generate logs, permettant aux utilisateurs de générer sans effort un aperçu des statistiques du serveur, de l\'activation de l\'API et des informations de montage.<br/>À mesure que les fonctions qb generate évoluent, elles offriront probablement un éventail croissant de fonctionnalités pour améliorer davantage la gestion du serveur.</p>',
  'GENERATE_SYSTEM_LOGS'                              => 'Générer les Logs Système',
  'GENERATE_SYSTEM_LOGS_CONTENT'                      => 'Génère les logs système pour l\'installation QuickBox actuelle',
  'GENERATE_SYSTEM_LOGS_SUCCESS_CONTENT'              => '<p>Vous pouvez accéder et télécharger ce fichier de log de résumé de trois manières :<br><ol><li><strong>Générer / Télécharger :</strong> Allez dans \'Système > <a href="/troubleshooting.php" class="link">Dépannage</a> > Log Système\' dans l\'interface utilisateur. Ici, vous pouvez générer et/ou télécharger le résumé de log système produit par la commande generate log.</li><li><strong>Voir les Logs :</strong> Allez dans \'Système > <a href="/logs.php" class="link">Logs Système</a>\'. C\'est ici que vous pouvez trouver des logs supplémentaires et des informations collectées par la commande generate log.</li><li><strong>Répertoire Serveur :</strong> Trouvez-le sur le serveur à : \'/srv/quickbox/logs/system_log\'.</li></ol></p>',
  'GENERATE_SYSTEM_LOGS_WARNING_CONTENT'              => '<p><strong>Attention :</strong> Cette commande générera un log système complet qui peut contenir des informations sensibles. Veuillez vous assurer que ce log est géré de manière sécurisée et ne soit pas partagé publiquement.</p>',

  // #4.4.7.10 - manage functions
  'MANAGE_FUNCTIONS'                                  => 'Fonctions de Gestion',
  'MANAGE_FUNCTIONS_INFO_CONTENT'                     => '<p>Les fonctions <code>qb manage</code> dans QuickBox fournissent un ensemble puissant et complet d\'outils pour gérer divers aspects de votre serveur. Conçues avec la commodité pour l\'utilisateur à l\'esprit, ces fonctions vous permettent d\'effectuer sans effort le contrôle des éléments critiques de votre environnement QuickBox-puissant.<br/>Que ce soit pour échanger les paramètres de langue, vérifier le statut de votre activation principale de l\'API, gérer la distribution des données ou assurer l\'intégrité des données via les sauvegardes et les rollbacks, les fonctions qb manage offrent une solution complète pour les administrateurs de serveur et les amateurs de serveur.</p>',
  'MANAGE_API_KEY'                                    => 'Gérer la Clé API',
  'MANAGE_API_KEY_CONTENT'                            => 'Gérez les clés API QuickBox et listez les informations et options supplémentaires',
  'ADD_API_KEY'                                       => 'Ajouter une Clé API',
  'ADD_API_KEY_CONTENT'                               => 'Ajouter/Activer la clé API',
  'REMOVE_API_KEY'                                    => 'Supprimer la Clé API',
  'REMOVE_API_KEY_CONTENT'                            => 'Supprimer/Désactiver la clé API',
  'MANAGE_DATABASE'                                   => 'Gérer la Base de Données',
  'MANAGE_DATABASE_CONTENT'                           => 'Gérez laquelle des bases de données est utilisée pour QuickBox',
  'MANAGE_DATABASE_CONNECTION_INFO_CONTENT'           => 'Veuillez noter que lors de la spécification d\'un nom d\'utilisateur et d\'un mot de passe (si les options sont utilisées), ils n\'ont pas besoin de correspondre aux identifiants de votre compte principal actuel. Ces identifiants sont destinés à une utilisation locale, notamment pour les connexions de base de données et diverses fonctions système. Par conséquent, ils peuvent être uniques et indépendants de votre nom d\'utilisateur et de votre mot de passe principal.',
  'MANAGE_DATABASE_INFO_CONTENT'                      => 'QuickBox utilise principalement SQLite3 comme base de données par défaut. Cependant, vous avez la possibilité de basculer facilement entre SQLite3 et MySQL à l\'aide de cette commande. Si vous choisissez MySQL, assurez-vous d\'avoir un serveur MySQL correctement installé et configuré sur votre système. De plus, vous aurez besoin d\'un compte d\'utilisateur MySQL avec des permissions adéquates pour la création et la gestion de la base de données. L\'exécution de cette commande facilite ces configurations nécessaires, y compris l\'installation du serveur MySQL et du client si elles ne sont pas déjà installées sur votre système. Pendant le processus, vous serez invité à installer le serveur MySQL et le client si elles ne sont pas détectées. De plus, la commande gère la configuration de l\'installation, assurant une intégration fluide avec QuickBox. Veuillez noter que tous les paramètres sauf <code>-o [mysql|sqlite]</code> sont facultatifs et prendront par défaut les valeurs prédéfinies dans le script.<br><br>Les valeurs par défaut sont les suivantes :<br><code>user=admin, pass=%random%, port=3306, host=localhost, name=qbpro</code><br><br>Les détails MySQL peuvent être trouvés à <code>/root/.my.cnf</code>.<br><br>Pour revenir à SQLite3, il suffit d\'exécuter à nouveau la commande avec le drapeau <code>-o sqlite</code>.',
  'MANAGE_DATABASE_BACKUP'                            => 'Gérer la Sauvegarde de la Base de Données',
  'MANAGE_DATABASE_BACKUP_CONTENT'                    => 'Sauvegardez la base de données QuickBox',
  'MANAGE_DATABASE_BACKUP_INFO_CONTENT'               => 'Le processus de sauvegarde QuickBox s\'exécute automatiquement toutes les 24 heures à 3h30 (heure du serveur) comme partie du calendrier de maintenance. Cette tâche est listée dans le <code>/etc/cron.d/quickbox</code> comme :<br><br><code>30 3 * * * root /usr/local/bin/qb manage db -o maintenance --cron</code><br><br>Cependant, vous pouvez déclencher une sauvegarde manuelle (sans exécuter la routine de maintenance) en utilisant la commande ci-dessus.<br><br><strong>À propos du Processus de Sauvegarde</strong><br><br>Chaque sauvegarde crée un instantané de la base de données QuickBox, fournissant ainsi un point de restauration pour assurer l\'intégrité des données en cas de perte ou de corruption. Les fichiers de sauvegarde sont sauvegardés dans un répertoire spécifié, avec le système conservant les 5 dernières sauvegardes pour vous assurer toujours plusieurs points de restauration disponibles pour la récupération.<br><br><strong>Emplacements des Fichiers de Sauvegarde</strong><br><br>Les fichiers de sauvegarde sont stockés dans les répertoires suivants :<br><br><strong>MySQL</strong> : <code>/opt/quickbox/backup/system/[DATE_TIME]/db/qbpro.sql</code><br><strong>SQLite</strong> : <code>/opt/quickbox/backup/system/[DATE_TIME]/db/qbpro.db</code>',
  'MANAGE_DATABASE_MAINTENANCE'                       => 'Gérer la Maintenance de la Base de Données',
  'MANAGE_DATABASE_MAINTENANCE_CONTENT'               => 'Initie le processus de maintenance de la base de données QuickBox',
  'MANAGE_DATABASE_MAINTENANCE_INFO_CONTENT'          => 'Le processus de maintenance de la base de données QuickBox est conçu pour maintenir la base de données en bon état et en bon fonctionnement. Ce processus comprend :<br><br><ol><li>Nettoyage des données inutiles.</li><li>Optimisation des tables de base de données.</li><li>Exécution d\'autres tâches de maintenance pour booster l\'efficacité et prévenir les problèmes de données, comme la vérification et la réparation des tables.</li><li>Déclenchement d\'une notification du Message du Jour (MotD) pour avertir l\'administrateur du système via CLI si des erreurs irrécupérables se produisent.</li></ol><p><strong>Quand la Maintenance S\'exécute</strong><br><br>Le processus de maintenance s\'exécute automatiquement toutes les 24 heures à 3h30 (heure du serveur). Cette tâche est listée dans le <code>/etc/cron.d/quickbox</code> comme :<br><br><code>30 3 * * * root /usr/local/bin/qb manage db -o maintenance --cron</code><br><br>Cependant, vous pouvez déclencher la maintenance manuellement en utilisant la commande ci-dessus.<br><br><strong>Pourquoi la Maintenance est-elle Importante</strong><br><br>La maintenance régulière garantit que votre base de données QuickBox reste en bon état, maintient les performances du système élevées et protège vos données.</p>',
  'MANAGE_DATABASE_RESTORE'                           => 'Gérer la Restauration de la Base de Données',
  'MANAGE_DATABASE_RESTORE_CONTENT'                   => 'Restaurez la base de données QuickBox',
  'MANAGE_DATABASE_RESTORE_INFO_CONTENT'              => 'Cette commande initie le processus de restauration de la base de données, vous permettant de sélectionner un fichier de sauvegarde spécifique à restaurer. Le processus de restauration est conçu pour récupérer les données en cas de perte ou de corruption, fournissant ainsi une méthode fiable et efficace pour restaurer votre base de données QuickBox à un état précédent.',
  'MANAGE_DASHBOARD_ACCESS_URL'                       => 'Gérer l\'URL d\'accès au Tableau de Bord',
  'MANAGE_DASHBOARD_ACCESS_URL_CONTENT'               => 'Cette commande définit la racine web du serveur pour l\'accès au tableau de bord sur le domaine exprimé ou l\'adresse IP',
  'SET_SERVER_LANG'                                   => 'Définir la Langue du Serveur',
  'SET_SERVER_LANG_CONTENT'                           => 'Cette commande définira la langue demandée comme langue par défaut pour le serveur',
  'MANAGE_PUBLIC_TRACKERS'                            => 'Gérer les Trackers Publics',
  'MANAGE_PUBLIC_TRACKERS_CONTENT'                    => 'Cette commande permettra d\'activer ou de désactiver les trackers publics pour tous les utilisateurs',
  'EX_PUB_TRACKERS_ALLOW'                             => 'exemple pour activer les trackers publics :',
  'EX_PUB_TRACKERS_DISALLOW'                          => 'exemple pour désactiver les trackers publics :',
  'BACKUP_APPLICATIONS'                               => 'Sauvegarder les Applications',
  'PARTIAL_CONFIG_ONLY_BACKUP'                        => 'Sauvegarde Partielle <span class="badge badge-pills outline-badge-secondary badge-table-menu" style="padding:2px 6px;line-height:0.7rem;font-size:0.5rem;">config uniquement</span>',
  'PARTIAL_CONFIG_ONLY_BACKUP_CONTENT'                => 'Cette commande sauvegardera la configuration désignée de l\'application pour l\'utilisateur assigné',
  'FULL_CONFIG_AND_APP_BACKUP'                        => 'Sauvegarde Complète <span class="badge badge-pills outline-badge-primary badge-table-menu" style="padding:2px 6px;line-height:0.7rem;font-size:0.5rem;">config &amp; app</span>',
  'FULL_CONFIG_AND_APP_BACKUP_CONTENT'                => 'Cette commande sauvegardera la configuration désignée de l\'application et les fichiers d\'application pour l\'utilisateur assigné',
  'PARTIAL_RTORRENT_ALL_USERS_BACKUP'                 => 'Sauvegarde Partielle (rtorrent uniquement)',
  'PARTIAL_RTORRENT_ALL_USERS_BACKUP_PRIMARY_CONTENT' => '<p>Dans le cas d\'une configuration de logiciel rtorrent à sauvegarder, le drapeau nom d\'utilisateur (<code>-u</code>) n\'est pas requis.</p>',
  'PARTIAL_RTORRENT_ALL_USERS_BACKUP_CONTENT'         => 'Cette commande sauvegardera tous les fichiers .rtorrent.rc existants des utilisateurs rtorrent.<br>Les sauvegardes sont stockées à :<br><code>/home/[USERNAME]/.QuickBox/software/rtorrent/backup/.rtorrent.rc_YEAR-MONTH-DAY_HOUR:MINUTE</code>',
  'ROLLBACK_APPLICATIONS'                             => 'Restaurer la Sauvegarde de l\'Application',
  'ROLLBACK_APPLICATIONS_CONTENT'                     => 'Restaurez les sauvegardes d\'application à un état précédent',
  'RESTORE_APP_BACKUP_CONFIG'                         => 'Restaurer la Sauvegarde <span class="badge badge-pills outline-badge-secondary badge-table-menu" style="padding:2px 6px;line-height:0.7rem;font-size:0.5rem;">config uniquement</span>',
  'RESTORE_APP_BACKUP_CONFIG_CONTENT'                 => 'Cette commande restaurera la configuration déjà sauvegardée de l\'application désignée pour l\'utilisateur assigné',
  'RESTORE_APP_DEFAULT_CONFIG'                        => 'Restaurer la Configuration par Défaut <span class="badge badge-pills outline-badge-secondary badge-table-menu" style="padding:2px 6px;line-height:0.7rem;font-size:0.5rem;">config uniquement</span>',
  'RESTORE_APP_DEFAULT_CONFIG_CONTENT'                => 'Cette commande restaurera la configuration désignée (à partir de l\'installation) de l\'application par défaut pour l\'utilisateur assigné',

  // #4.4.7.11 - news functions
  'NEWS_FUNCTIONS'                                    => 'Fonctions de Nouvelles',
  'NEWS_FUNCTIONS_INFO_CONTENT'                       => '<p>Les fonctions <code>qb news</code> dans QuickBox vous fournissent les dernières informations et mises à jour sur le projet QuickBox. Restez informé sur les nouvelles fonctionnalités, les corrections de bogues et les annonces importantes.</p>',
  'NEWS'                                              => 'Nouvelles',
  'NEWS_CONTENT'                                      => 'Voir les dernières nouvelles QuickBox',

  // #4.4.7.12 - support functions
  'SUPPORT_FUNCTIONS'                                 => 'Fonctions de Support',
  'SUPPORT_FUNCTIONS_INFO_CONTENT'                    => '<p>La fonction <code>qb support</code> dans QuickBox offre une méthode sécurisée et fiable pour accorder l\'accès aux équipes de support lorsqu\'une assistance est nécessaire. Avec une forte emphase sur la sécurité et la protection des utilisateurs, cette fonctionnalité utilise le compte <code>quickSupport</code>, assurant que seuls les personnel de support autorisés peuvent accéder à votre serveur.</p>',
  'ENABLE_SUPPORT'                                    => 'Activer le Support',
  'ENABLE_SUPPORT_CONTENT'                            => 'Activer le support. Typiquement assigné au membre de l\'équipe responsable du support',
  'DISABLE_SUPPORT'                                   => 'Désactiver le Support',
  'DISABLE_SUPPORT_CONTENT'                           => 'Désactiver le support. Sinon, le compte de support supprimera automatiquement lui-même après 36 heures',

  // #4.4.7.13 - update functions
  'UPDATE_FUNCTIONS'                                  => 'Fonctions de Mise à Jour',
  'UPDATE_FUNCTIONS_INFO_CONTENT'                     => '<p>La fonction <code>qb update</code> dans QuickBox vous offre une méthode pratique et flexible pour gérer les mises à jour de votre installation QuickBox. Avec cette fonctionnalité, vous avez le contrôle total sur le processus de mise à jour, vous permettant de vérifier manuellement les mises à jour et de choisir quand les appliquer.</p>',
  'UPDATE_CHECK'                                      => 'Vérifier la Mise à Jour',
  'UPDATE_CHECK_CONTENT'                              => 'Vérifiez les mises à jour de QuickBox',
  'UPDATE_QUICKBOX'                                   => 'Mettre à Jour QuickBox',
  'UPDATE_QUICKBOX_CONTENT'                           => 'Mettez à jour l\'installation QuickBox vers la dernière version disponible, si elle est disponible',

  // #4.4.7.14 - bugs & reporting
  'BUGS'                                              => 'Bugs & Reporting',
  'BUGS_INFO_CONTENT'                                 => '<p>L\'affichage graphique de la documentation de QuickBox recevra des mises à jour régulières pour s\'assurer que l\'information fournie reste facilement accessible et conviviale. Notre engagement pour améliorer votre expérience avec QuickBox nous pousse à continuer à affiner et à améliorer la documentation, la gardant à jour avec les dernières fonctionnalités et fonctionnalités.<br/><br/>
Avec chaque mise à jour, nous nous efforcerons de simplifier les concepts complexes, de clarifier les instructions et d\'intégrer les commentaires des utilisateurs pour rendre le manpage qb encore plus intuitif et efficace. Notre objectif est d\'équiper vous avec une compréhension parfaite de QuickBox et de ses vastes capacités, vous permettant de maîtriser l\'environnement CLI qb et de gérer efficacement vos tâches de serveur.<br/><br/>
Nous apprécions votre contribution et encouragez-vous à partager toutes vos suggestions ou idées pour améliorer le manpage qb. Votre retour est essentiel pour donner forme à cette ressource et la garantir comme une référence précieuse pour tous les utilisateurs de QuickBox. En fait, cette page existe parce qu\'elle a été demandée ! 🤪<br/><br/>
Reportez toutes les erreurs reproductibles ou les suggestions à <strong><a href="https://nullrefer.ir/?https://github.com/QuickBox/pro-v3/issues" rel="noopener nofollow" target="_blank">QuickBox.IO Labs Issue & Feature Tracker</a></strong></p>',

  // #4.4.7.15 - disclaimer
  'DISCLAIMER'                                        => 'Avertissement',
  'DISCLAIMER_TEXT'                                   => '<p>Ce script est conçu pour un usage général et aucune garantie n\'est fournie pour sa pertinence à toute tâche donnée. QuickBox.IO ne sera pas responsable de votre configuration ou de tout dommage causé pendant l\'utilisation/installation/modification de ce script ou de ses plugins. Veuillez garder à l\'esprit que QuickBox.IO ni ses employés ne sont pas responsables de la mise à jour de votre logiciel et/ou de votre serveur ; c\'est une responsabilité exclusivement laissée à l\'utilisateur du logiciel QuickBox Pro.</p>',

  // #4.4.7.16 - license
  'LICENSE'                                           => 'Licence',
  'LICENSE_SET'                                       => 'Sous licence BSD 3-Clause',
  'LICENSE_TEXT'                                      => '<p>Copyright (c) 2018-2025, QuickBox.IO. Tous droits réservés.</p>
<p>La redistribution et l\'utilisation, sous quelque forme que ce soit, sont autorisées à condition que les conditions suivantes soient remplies :</p>
<ul style="font-size:0.75rem"><li>La redistribution du code source doit conserver l\'avis de copyright ci-dessus, cette liste des conditions et le cautionnement suivant.</li>
<li>La redistribution sous forme binaire doit reproduire l\'avis de copyright ci-dessus, cette liste des conditions et le cautionnement suivant dans la documentation et/ou les matériaux fournis avec la distribution.</li>
<li>Ni le nom du titulaire du copyright ni les noms de ses contributeurs ne peuvent être utilisés pour appuyer ou promouvoir des produits dérivés de ce logiciel sans permission écrite préalable.</li></ul>
<p>CE LOGICIEL EST FOURNI PAR LES TITULAIRES ET CONTRIBUTORS \'EN L\'ÉTAT\' ET TOUTE GARANTIE EXPRESSE OU IMPLICITE, Y COMPRIS, MAIS NON LIMITÉE À, LES GARANTIES DE VALEUR COMMERCIALE ET DE FIDÉLITÉ POUR UN BUT PARTICULIER SONT DÉCLAIRÉES. EN AUCUN CAS, LES TITULAIRES OU CONTRIBUTORS NE SERONT RESPONSABLES DE TOUT DOMMAGE DIRECT, INDIRECT, INCIDENTAL, SPÉCIAL, EXEMPLAIRE OU CONSEQUENTIEL (Y COMPRIS, MAIS NON LIMITÉ À, LA PROCUREMENT DE BIENS OU SERVICES SUBSTITUTAIRES ; PERTE D\'UTILISATION, DONNÉES OU BÉNÉFICES ; OU INTERRUPTION D\'ACTIVITÉ) QUI SERAIT CAUSÉ PAR UN ÉVÉNEMENT DE TOUTE NATURE, QUE CE SOIT DANS UN CONTRAT, UN DÉLIT OU UN AUTRE TORT (Y COMPRIS, MAIS NON LIMITÉ À, LA NÉGLIGENCE OU AUTREMENT) SURVENANT DANS L\'UTILISATION DE CE LOGICIEL, MÊME SI ADVISE DE LA POSSIBILITÉ D\'UN TEL DOMMAGE.</p>',

  // #4.4.7.17 - misc
  'EXAMPLE'                                           => 'exemple :',
  'EXAMPLES'                                          => 'exemples :',
  'LOG_MAINTENANCE'                                   => 'Maintenance des Logs'
];
