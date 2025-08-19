# Système de Traduction du Tableau de Bord QuickBox

Ce répertoire contient les fichiers de langue française pour le système de traduction modulaire du Tableau de Bord QuickBox. Ce document explique la structure, l'utilisation et les directives de contribution pour le système de traduction.

## Table des Matières

- [Système de Traduction du Tableau de Bord QuickBox](#système-de-traduction-du-tableau-de-bord-quickbox)
  - [Table des Matières](#table-des-matières)
  - [Vue d'ensemble](#vue-densemble)
  - [Structure des Répertoires](#structure-des-répertoires)
  - [Fichiers de Traduction](#fichiers-de-traduction)
    - [Structure des Fichiers](#structure-des-fichiers)
    - [Conventions de Nommage](#conventions-de-nommage)
  - [Ajouter de Nouvelles Traductions](#ajouter-de-nouvelles-traductions)
  - [Modifier les Traductions Existantes](#modifier-les-traductions-existantes)
  - [Clés de Traduction](#clés-de-traduction)
    - [Structure des Clés](#structure-des-clés)
    - [Directives de Nommage des Clés](#directives-de-nommage-des-clés)
  - [Bonnes Pratiques](#bonnes-pratiques)
  - [Contribuer](#contribuer)
    - [Pour les Traducteurs](#pour-les-traducteurs)
    - [Pour les Développeurs](#pour-les-développeurs)
  - [Validation et Tests](#validation-et-tests)
    - [Scripts de Validation](#scripts-de-validation)
    - [Tester de Nouvelles Traductions](#tester-de-nouvelles-traductions)
  - [Dépannage](#dépannage)
    - [Problèmes Courants](#problèmes-courants)
    - [Obtenir de l'Aide](#obtenir-de-laide)

## Vue d'ensemble

Le Tableau de Bord QuickBox utilise un système de traduction modulaire qui sépare les traductions en fichiers logiques basés sur leurs domaines fonctionnels. Cela rend le système de traduction plus maintenable et plus facile à utiliser que l'approche monolithique précédente.

## Structure des Répertoires

```bash
src/dashboard/lang/
├── fr/                     # Fichiers de langue française
│   ├── buttons.php         # Labels et actions des boutons
│   ├── dashboard.php       # Éléments de l'interface principale du tableau de bord
│   ├── errors.php          # Messages d'erreur et validation
│   ├── help_manual.php     # Documentation d'aide et infobulles
│   ├── misc.php            # Traductions diverses
│   ├── navigation.php      # Éléments du menu de navigation
│   ├── pages.php           # Traductions spécifiques aux pages
│   ├── popup.php           # Messages des boîtes de dialogue
│   ├── settings.php        # Traductions de la page des paramètres
│   ├── system.php          # Messages liés au système
│   ├── user_management.php # Interface de gestion des utilisateurs
│   ├── widgets.php         # Contenu des widgets du tableau de bord
│   └── README.md           # Ce fichier
├── __testing__/            # Scripts de test et validation
├── lang_fr.php             # Traductions françaises principales
└── lang_fr_override.php    # Surcharges de traduction
```

## Fichiers de Traduction

### Structure des Fichiers

Chaque fichier de traduction doit retourner un tableau associatif où :
- Les clés sont les clés de traduction (en UPPER_SNAKE_CASE)
- Les valeurs sont les chaînes traduites

Exemple (`buttons.php`) :

```php
<?php
/**
 * Labels et Actions des Boutons
 * 
 * Ce fichier contient les traductions pour les boutons et éléments d'action utilisés dans tout le tableau de bord.
 */

return [
    'SAVE' => 'Enregistrer',
    'CANCEL' => 'Annuler',
    'EDIT' => 'Modifier',
    'DELETE' => 'Supprimer',
    'SUBMIT' => 'Soumettre',
    'RESET' => 'Réinitialiser',
    'CLOSE' => 'Fermer',
    'BACK' => 'Retour',
    'NEXT' => 'Suivant',
    'CONFIRM' => 'Confirmer',
    'DISMISS' => 'Rejeter',
    'ENABLE' => 'Activer',
    'DISABLE' => 'Désactiver',
    'UPDATE' => 'Mettre à jour',
    'REMOVE' => 'Supprimer',
    'ADD' => 'Ajouter',
    'SEARCH' => 'Rechercher',
    'FILTER' => 'Filtrer',
    'SORT' => 'Trier',
    'MORE' => 'Plus',
    'LESS' => 'Moins',
    'APPLY' => 'Appliquer',
    'CLEAR' => 'Effacer',
    'UPLOAD' => 'Télécharger',
    'DOWNLOAD' => 'Télécharger',
    'PREVIEW' => 'Aperçu',
    'SELECT' => 'Sélectionner',
    'VIEW_DETAILS' => 'Voir les détails',
    'MANAGE' => 'Gérer',
    'CONFIGURE' => 'Configurer',
    'SETTINGS' => 'Paramètres',
    'PREFERENCES' => 'Préférences',
    'ADVANCED' => 'Avancé',
    'LOADING' => 'Chargement...',
    'PROCESSING' => 'Traitement...',
    'PLEASE_WAIT' => 'Veuillez patienter...',
    'SUCCESS' => 'Succès !',
    'ERROR' => 'Erreur !',
    'WARNING' => 'Attention !',
    'INFO' => 'Info',
    'HELP' => 'Aide'
];
```

### Conventions de Nommage

1. **Noms de Fichiers** : Utilisez des minuscules avec des underscores (ex : `user_management.php`)
2. **Clés de Traduction** : Utilisez UPPER_SNAKE_CASE (ex : `USERNAME_REQUIRED`)
3. **Commentaires** : Incluez des blocs PHPDoc en haut de chaque fichier et pour les traductions complexes

## Ajouter de Nouvelles Traductions

1. **Choisissez le fichier approprié** selon l'objectif de la traduction
2. **Ajoutez la nouvelle traduction** avec une clé descriptive
3. **Ajoutez des commentaires** pour le contexte si nécessaire
4. **Mettez à jour le README** si vous ajoutez une nouvelle catégorie

Exemple :

```php
// Dans le fichier approprié (ex : user_management.php)
return [
    // ... traductions existantes ...
    'TWO_FACTOR_AUTH' => 'Authentification à deux facteurs',
    'TWO_FACTOR_AUTH_DESCRIPTION' => 'Ajoutez une couche de sécurité supplémentaire à votre compte',
];
```

## Modifier les Traductions Existantes

1. **Trouvez la clé** dans le fichier approprié
2. **Mettez à jour la valeur** tout en conservant la même clé
3. **Mettez à jour toute documentation connexe** si le sens a changé

## Clés de Traduction

### Structure des Clés

Les clés de traduction suivent ces modèles :

- `NOUN_VERB` : `USER_CREATED`, `PASSWORD_CHANGED`
- `NOUN_DESCRIPTION` : `ACCOUNT_SETTINGS_DESCRIPTION`
- `NOUN_LABEL` : `USERNAME_LABEL`
- `NOUN_PLACEHOLDER` : `SEARCH_PLACEHOLDER`
- `NOUN_TOOLTIP` : `API_KEY_TOOLTIP`
- `ERROR_NOUN_VERB` : `ERROR_USER_NOT_FOUND`
- `SUCCESS_NOUN_VERB` : `SUCCESS_USER_CREATED`

### Directives de Nommage des Clés

1. Soyez descriptif mais concis
2. Groupez les clés connexes ensemble
3. Utilisez une terminologie cohérente
4. Évitez les abréviations sauf si elles sont largement comprises

## Bonnes Pratiques

1. **Cohérence** : Utilisez une terminologie et un style cohérents
2. **Contexte** : Fournissez un contexte pour les termes ambigus
3. **Variables** : Utilisez la syntaxe `{variable}` pour le contenu dynamique
4. **HTML** : Incluez un HTML minimal uniquement si nécessaire
5. **Longueur** : Gardez les traductions concises
6. **Commentaires** : Ajoutez des commentaires pour les traductions complexes ou ambiguës

## Contribuer

### Pour les Traducteurs

1. **Forkez** le dépôt
2. **Créez une branche** pour vos traductions
3. **Soumettez une pull request** avec vos modifications
4. **Référencez tout problème connexe** dans votre PR

### Pour les Développeurs

1. **Ajoutez de nouvelles traductions** au module approprié
2. **Mettez à jour les tests** si nécessaire
3. **Exécutez la validation** avant de soumettre les PRs
4. **Documentez les changements** dans la description de la PR

## Validation et Tests

### Scripts de Validation

Exécutez le script de validation pour vérifier les problèmes :

```bash
php src/dashboard/lang/__testing__/validate_translations.php
```

### Tester de Nouvelles Traductions

1. Effacez tout opcache si activé
2. Testez tous les éléments d'interface affectés
3. Vérifiez le remplacement du contenu dynamique
4. Vérifiez l'échappement approprié

## Dépannage

### Problèmes Courants

1. **Traductions Manquantes** : Vérifiez le bon fichier et la bonne clé
2. **HTML Cassé** : Vérifiez que toutes les balises sont correctement fermées
3. **Incompatibilité de Variables** : Assurez-vous que toutes les `{variables}` correspondent entre les traductions
4. **Problèmes de Cache** : Effacez le cache de votre navigateur et l'opcache PHP

### Obtenir de l'Aide

Si vous rencontrez des problèmes :
1. Vérifiez les problèmes existants pour des problèmes similaires
2. Consultez la documentation QuickBox
3. Ouvrez un nouveau problème avec des détails sur le problème

---

Cette documentation fait partie du système de traduction du Tableau de Bord QuickBox.
