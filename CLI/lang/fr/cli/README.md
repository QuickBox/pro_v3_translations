# QuickBox Pro - Système de Langue Modulaire

## Vue d'ensemble

Ce répertoire contient le système de langue modulaire pour QuickBox Pro CLI. Le fichier original `cli_lang` (3 695 lignes) a été divisé en modules fonctionnels pour une meilleure organisation, maintenabilité et évolutivité.

## Structure des Modules

Le système de langue modulaire est organisé en groupes fonctionnels suivants :

### Modules Principaux
- **core.sh** - Opérations système de base (verrous, nettoyage, fonctions de base)
- **apt.sh** - Opérations de gestion des paquets APT
- **software.sh** - Opérations d'installation, suppression et mise à jour de logiciels
- **ssl.sh** - Gestion des certificats SSL/LetsEncrypt
- **dns.sh** - Gestion des identifiants DNS
- **users.sh** - Opérations de gestion des utilisateurs
- **vpn.sh** - Opérations VPN/WireGuard
- **database.sh** - Gestion de base de données (MySQL/SQLite)
- **updater.sh** - Opérations de mise à jour système
- **manager.sh** - Gestionnaire de logiciels (sauvegarde/restauration/retour arrière)
- **help.sh** - Messages d'aide et gestion des erreurs

### Modules Étendus
- **software_access.sh** - Informations d'accès et URLs des logiciels
- **software_config.sh** - Messages de configuration et de configuration des logiciels
- **wireguard.sh** - Configuration et gestion spécifiques à WireGuard
- **misc.sh** - Utilitaires divers et messages système généraux

## Descriptions des Modules

### Modules Principaux

#### core.sh
Contient les opérations système de base, y compris :
- Fonctions de nettoyage de mémoire et de cache
- Gestion et suppression des verrous
- Utilitaires de journalisation du tableau de bord
- Messages de statut système de base

#### apt.sh
Gère les opérations de gestion des paquets APT :
- Mises à jour de la base de données des paquets
- Résolution des verrous
- Messages de fin de mise à jour
- Vérification et validation des paquets

#### software.sh
Gère l'installation, la suppression et les mises à jour de logiciels :
- En-têtes d'installation et progression
- Processus de réinstallation
- Opérations de suppression
- Procédures de mise à jour
- Gestion de la compilation et des dépendances

#### ssl.sh
Gestion complète des certificats SSL/LetsEncrypt :
- Installation et renouvellement de certificats
- Support des défis DNS pour plusieurs fournisseurs
- Opérations de défis HTTP
- Validation des certificats et gestion des erreurs
- Configuration DNS interactive pour divers fournisseurs

#### dns.sh
Système de gestion des identifiants DNS :
- Vérification du statut des fournisseurs
- Validation des identifiants
- Instructions de configuration pour tous les fournisseurs pris en charge
- Gestion des erreurs et dépannage
- Opérations de sauvegarde et de restauration

#### users.sh
Opérations de gestion des utilisateurs :
- Création et suppression d'utilisateurs
- Gestion des mots de passe
- Promotion et rétrogradation d'utilisateurs
- Opérations de bannissement/débannissement

#### vpn.sh
Opérations VPN et WireGuard :
- Configuration VPN
- Configuration des clients
- Gestion des serveurs
- Statut de connexion

#### database.sh
Gestion de base de données pour MySQL et SQLite :
- Installation et configuration
- Migration entre types de bases de données
- Opérations de sauvegarde et de restauration
- Maintenance et optimisation
- Vérification d'intégrité

#### updater.sh
Opérations de mise à jour système :
- Suivi de la progression des mises à jour
- Gestion des dépendances
- Mises à jour des composants
- Statut de fin

#### manager.sh
Opérations du gestionnaire de logiciels :
- Création et gestion des sauvegardes
- Opérations de restauration
- Fonctionnalité de retour arrière
- Gestion de la configuration par défaut
- Gestion des versions

#### help.sh
Système d'aide et gestion des erreurs :
- Génération d'aide spécifique aux logiciels
- Instructions d'utilisation des commandes
- Messages d'erreur et avertissements
- Fonctions d'aide interactive

### Modules Étendus

#### software_access.sh
Informations d'accès et configuration des logiciels :
- URLs et ports des interfaces web
- Identifiants d'accès et configuration
- Informations d'accès spécifiques aux domaines
- Détails de configuration des clients

#### software_config.sh
Configuration des logiciels et gestion spéciale :
- Migration MySQL pour Ombi
- Gestion des identifiants de mise à jour Plex
- Configuration Rclone
- Processus de configuration spéciaux des logiciels

#### wireguard.sh
Opérations spécifiques à WireGuard :
- Configuration des clients et serveurs
- Processus de configuration interactive
- Système d'aide de gestion
- Gestion des erreurs pour les opérations WireGuard

#### misc.sh
Utilitaires divers et messages généraux :
- Gestion des options inconnues
- Messages d'erreur généraux
- Fonctions utilitaires
- Aide du générateur de configuration NordVPN

## Utilisation

### Pour les Développeurs

1. **Ajouter de Nouveaux Messages** : Ajoutez de nouvelles fonctions de langue au module approprié selon la fonctionnalité
2. **Modifier les Messages Existants** : Localisez la fonction dans le module pertinent et mettez-la à jour
3. **Créer de Nouveaux Modules** : Suivez la convention de nommage et la structure des modules existants

### Pour les Administrateurs Système

1. **Utiliser le Système Modulaire** : Le système charge automatiquement tous les modules via `cli_lang_modular`
2. **Compatibilité** : Tous les appels de fonctions existants continuent de fonctionner sans modification
3. **Validation des Modules** : Le système valide que tous les modules requis sont présents

## Conventions de Nommage

- **Noms de Fichiers** : Utilisez des noms descriptifs avec l'extension `.sh` (ex: `software_access.sh`)
- **Noms de Fonctions** : Suivez le modèle `quickbox::lang::catégorie::souscatégorie::action()`
- **Variables** : Utilisez des noms descriptifs avec une portée appropriée
- **Commentaires** : Incluez une documentation complète pour les fonctions complexes

## Avantages

### Maintenabilité
- **Modules Ciblés** : Chaque module gère un domaine fonctionnel spécifique
- **Navigation Plus Facile** : Les développeurs peuvent rapidement localiser les fonctions pertinentes
- **Complexité Réduite** : Les fichiers plus petits sont plus faciles à comprendre et modifier

### Évolutivité
- **Croissance Modulaire** : De nouvelles fonctionnalités peuvent être ajoutées sans affecter les modules existants
- **Développement Indépendant** : Plusieurs développeurs peuvent travailler sur différents modules simultanément
- **Chargement Sélectif** : Seuls les modules requis doivent être chargés

### Organisation
- **Regroupement Logique** : Les fonctions liées sont regroupées ensemble
- **Structure Claire** : La hiérarchie des modules reflète l'architecture du système
- **Documentation** : Chaque module est auto-documenté avec des objectifs clairs

## Stratégie de Migration

### Phase 1: Création des Modules ✅
- [x] Diviser le fichier `cli_lang` original en modules fonctionnels
- [x] Créer le fichier pont `cli_lang_modular`
- [x] Implémenter la validation des modules et la gestion des erreurs

### Phase 2: Tests et Validation
- [ ] Tester tous les modules avec les fonctionnalités QuickBox Pro existantes
- [ ] Valider la compatibilité
- [ ] Tests de performance et optimisation

### Phase 3: Déploiement
- [ ] Déploiement progressif dans les environnements de développement
- [ ] Tests d'acceptation utilisateur
- [ ] Déploiement en production

### Phase 4: Documentation et Formation
- [ ] Documentation complète pour les développeurs
- [ ] Créer des guides de migration
- [ ] Matériaux de formation pour les contributeurs

## Contribution

### Directives
1. **Suivre les Conventions de Nommage** : Utilisez les modèles établis pour la cohérence
2. **Ajouter de la Documentation** : Incluez des commentaires pour les fonctions complexes
3. **Tester les Modifications** : Assurez-vous que les modifications ne cassent pas les fonctionnalités existantes
4. **Mettre à Jour le README** : Gardez la documentation à jour avec les changements

### Ajouter de Nouveaux Modules
1. Créez le fichier module dans le répertoire `cli/`
2. Ajoutez le module au fichier pont (`cli_lang_modular`)
3. Mettez à jour la liste de validation
4. Documentez le module dans ce README

### Modifier les Modules Existants
1. Localisez le module approprié pour vos modifications
2. Suivez le style de code et les modèles existants
3. Testez vos modifications à fond
4. Mettez à jour la documentation pertinente

## Structure des Fichiers

```bash
cli/
├── README.md                 # Ce fichier de documentation
├── core.sh                   # Opérations système de base
├── apt.sh                    # Gestion des paquets APT
├── software.sh               # Installation/suppression/mise à jour de logiciels
├── ssl.sh                    # Opérations SSL/LetsEncrypt
├── dns.sh                    # Gestion des identifiants DNS
├── users.sh                  # Opérations de gestion des utilisateurs
├── vpn.sh                    # Opérations VPN/WireGuard
├── database.sh               # Gestion de base de données
├── updater.sh                # Opérations de mise à jour système
├── manager.sh                # Opérations du gestionnaire de logiciels
├── help.sh                   # Aide et gestion des erreurs
├── software_access.sh        # Informations d'accès aux logiciels
├── software_config.sh        # Configuration des logiciels
├── wireguard.sh              # Opérations spécifiques à WireGuard
└── misc.sh                   # Utilitaires divers
```

## Métriques de Succès

- **Taille de Fichier Réduite** : Chaque module est considérablement plus petit que le fichier original de 3 695 lignes
- **Maintenabilité Améliorée** : Plus facile de localiser et modifier des fonctionnalités spécifiques
- **Collaboration Améliorée** : Plusieurs développeurs peuvent travailler sur différents modules
- **Meilleure Organisation** : Regroupement logique des fonctions liées
- **Compatibilité** : Toutes les fonctionnalités existantes continuent de fonctionner sans modification

## Support

Pour des questions ou problèmes avec le système de langue modulaire :
- Consultez ce README pour les directives d'utilisation
- Examinez la structure des modules et les conventions de nommage
- Testez les modifications dans un environnement de développement d'abord
- Consultez l'équipe de développement QuickBox Pro pour des modifications complexes 