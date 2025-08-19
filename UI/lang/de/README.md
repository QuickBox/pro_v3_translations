# QuickBox Dashboard Übersetzungssystem

Dieses Verzeichnis enthält die deutschen Sprachdateien für das modulare Übersetzungssystem des QuickBox Dashboards. Dieses Dokument erklärt die Struktur, Verwendung und Beitragsrichtlinien für das Übersetzungssystem.

## Inhaltsverzeichnis

- [QuickBox Dashboard Übersetzungssystem](#quickbox-dashboard-übersetzungssystem)
  - [Inhaltsverzeichnis](#inhaltsverzeichnis)
  - [Übersicht](#übersicht)
  - [Verzeichnisstruktur](#verzeichnisstruktur)
  - [Übersetzungsdateien](#übersetzungsdateien)
    - [Dateistruktur](#dateistruktur)
    - [Namenskonventionen](#namenskonventionen)
  - [Neue Übersetzungen hinzufügen](#neue-übersetzungen-hinzufügen)
  - [Bestehende Übersetzungen ändern](#bestehende-übersetzungen-ändern)
  - [Übersetzungsschlüssel](#übersetzungsschlüssel)
    - [Schlüsselstruktur](#schlüsselstruktur)
    - [Richtlinien für Schlüsselnamen](#richtlinien-für-schlüsselnamen)
  - [Best Practices](#best-practices)
  - [Beitragen](#beitragen)
    - [Für Übersetzer](#für-übersetzer)
    - [Für Entwickler](#für-entwickler)
  - [Validierung und Tests](#validierung-und-tests)
    - [Validierungsskripte](#validierungsskripte)
    - [Neue Übersetzungen testen](#neue-übersetzungen-testen)
  - [Fehlerbehebung](#fehlerbehebung)
    - [Häufige Probleme](#häufige-probleme)
    - [Hilfe erhalten](#hilfe-erhalten)

## Übersicht

Das QuickBox Dashboard verwendet ein modulares Übersetzungssystem, das Übersetzungen in logische Dateien basierend auf ihren Funktionsbereichen aufteilt. Dies macht das Übersetzungssystem wartungsfreundlicher und einfacher zu handhaben als der vorherige monolithische Ansatz.

## Verzeichnisstruktur

```bash
src/dashboard/lang/
├── de/                     # Deutsche Sprachdateien
│   ├── buttons.php         # Schaltflächenbeschriftungen und Aktionen
│   ├── dashboard.php       # Hauptdashboard-Benutzeroberflächenelemente
│   ├── errors.php          # Fehlermeldungen und Validierung
│   ├── help_manual.php     # Hilfedokumentation und Tooltips
│   ├── misc.php            # Verschiedene Übersetzungen
│   ├── navigation.php      # Navigationsmenüelemente
│   ├── pages.php           # Seitenspezifische Übersetzungen
│   ├── popup.php           # Popup-Dialogmeldungen
│   ├── settings.php        # Einstellungsseiten-Übersetzungen
│   ├── system.php          # Systembezogene Meldungen
│   ├── user_management.php # Benutzerverwaltungs-Benutzeroberfläche
│   ├── widgets.php         # Dashboard-Widget-Inhalt
│   └── README.md           # Diese Datei
├── __testing__/            # Test- und Validierungsskripte
├── lang_de.php             # Hauptdeutsche Übersetzungen
└── lang_de_override.php    # Übersetzungsüberschreibungen
```

## Übersetzungsdateien

### Dateistruktur

Jede Übersetzungsdatei sollte ein assoziatives Array zurückgeben, wobei:
- Schlüssel die Übersetzungsschlüssel sind (in UPPER_SNAKE_CASE)
- Werte die übersetzten Zeichenketten sind

Beispiel (`buttons.php`):

```php
<?php
/**
 * Schaltflächenbeschriftungen und Aktionen
 * 
 * Diese Datei enthält Übersetzungen für Schaltflächen und Aktionselemente, die im gesamten Dashboard verwendet werden.
 */

return [
    'SAVE' => 'Speichern',
    'CANCEL' => 'Abbrechen',
    'EDIT' => 'Bearbeiten',
    'DELETE' => 'Löschen',
    'SUBMIT' => 'Absenden',
    'RESET' => 'Zurücksetzen',
    'CLOSE' => 'Schließen',
    'BACK' => 'Zurück',
    'NEXT' => 'Weiter',
    'CONFIRM' => 'Bestätigen',
    'DISMISS' => 'Verwerfen',
    'ENABLE' => 'Aktivieren',
    'DISABLE' => 'Deaktivieren',
    'UPDATE' => 'Aktualisieren',
    'REMOVE' => 'Entfernen',
    'ADD' => 'Hinzufügen',
    'SEARCH' => 'Suchen',
    'FILTER' => 'Filter',
    'SORT' => 'Sortieren',
    'MORE' => 'Mehr',
    'LESS' => 'Weniger',
    'APPLY' => 'Anwenden',
    'CLEAR' => 'Löschen',
    'UPLOAD' => 'Hochladen',
    'DOWNLOAD' => 'Herunterladen',
    'PREVIEW' => 'Vorschau',
    'SELECT' => 'Auswählen',
    'VIEW_DETAILS' => 'Details anzeigen',
    'MANAGE' => 'Verwalten',
    'CONFIGURE' => 'Konfigurieren',
    'SETTINGS' => 'Einstellungen',
    'PREFERENCES' => 'Voreinstellungen',
    'ADVANCED' => 'Erweitert',
    'LOADING' => 'Lädt...',
    'PROCESSING' => 'Verarbeitung...',
    'PLEASE_WAIT' => 'Bitte warten...',
    'SUCCESS' => 'Erfolg!',
    'ERROR' => 'Fehler!',
    'WARNING' => 'Warnung!',
    'INFO' => 'Info',
    'HELP' => 'Hilfe'
];
```

### Namenskonventionen

1. **Dateinamen**: Verwenden Sie Kleinbuchstaben mit Unterstrichen (z.B. `user_management.php`)
2. **Übersetzungsschlüssel**: Verwenden Sie UPPER_SNAKE_CASE (z.B. `USERNAME_REQUIRED`)
3. **Kommentare**: Fügen Sie PHPDoc-Blöcke am Anfang jeder Datei und für komplexe Übersetzungen hinzu

## Neue Übersetzungen hinzufügen

1. **Wählen Sie die passende Datei** basierend auf dem Zweck der Übersetzung
2. **Fügen Sie die neue Übersetzung** mit einem beschreibenden Schlüssel hinzu
3. **Fügen Sie Kommentare** für den Kontext hinzu, falls erforderlich
4. **Aktualisieren Sie die README**, falls Sie eine neue Kategorie hinzufügen

Beispiel:

```php
// In der passenden Datei (z.B. user_management.php)
return [
    // ... bestehende Übersetzungen ...
    'TWO_FACTOR_AUTH' => 'Zwei-Faktor-Authentifizierung',
    'TWO_FACTOR_AUTH_DESCRIPTION' => 'Fügen Sie eine zusätzliche Sicherheitsebene zu Ihrem Konto hinzu',
];
```

## Bestehende Übersetzungen ändern

1. **Finden Sie den Schlüssel** in der passenden Datei
2. **Aktualisieren Sie den Wert**, während Sie denselben Schlüssel beibehalten
3. **Aktualisieren Sie alle zugehörigen Dokumentationen**, falls sich die Bedeutung geändert hat

## Übersetzungsschlüssel

### Schlüsselstruktur

Übersetzungsschlüssel folgen diesen Mustern:

- `NOUN_VERB`: `USER_CREATED`, `PASSWORD_CHANGED`
- `NOUN_DESCRIPTION`: `ACCOUNT_SETTINGS_DESCRIPTION`
- `NOUN_LABEL`: `USERNAME_LABEL`
- `NOUN_PLACEHOLDER`: `SEARCH_PLACEHOLDER`
- `NOUN_TOOLTIP`: `API_KEY_TOOLTIP`
- `ERROR_NOUN_VERB`: `ERROR_USER_NOT_FOUND`
- `SUCCESS_NOUN_VERB`: `SUCCESS_USER_CREATED`

### Richtlinien für Schlüsselnamen

1. Seien Sie beschreibend, aber prägnant
2. Gruppieren Sie verwandte Schlüssel zusammen
3. Verwenden Sie konsistente Terminologie
4. Vermeiden Sie Abkürzungen, es sei denn, sie sind allgemein verständlich

## Best Practices

1. **Konsistenz**: Verwenden Sie konsistente Terminologie und Stil
2. **Kontext**: Bieten Sie Kontext für mehrdeutige Begriffe
3. **Variablen**: Verwenden Sie `{variable}` Syntax für dynamische Inhalte
4. **HTML**: Fügen Sie nur minimales HTML hinzu, wenn es notwendig ist
5. **Länge**: Halten Sie Übersetzungen prägnant
6. **Kommentare**: Fügen Sie Kommentare für komplexe oder mehrdeutige Übersetzungen hinzu

## Beitragen

### Für Übersetzer

1. **Forken** Sie das Repository
2. **Erstellen Sie einen Branch** für Ihre Übersetzungen
3. **Reichen Sie einen Pull Request** mit Ihren Änderungen ein
4. **Verweisen Sie auf alle zugehörigen Issues** in Ihrem PR

### Für Entwickler

1. **Fügen Sie neue Übersetzungen** zum passenden Modul hinzu
2. **Aktualisieren Sie Tests**, falls erforderlich
3. **Führen Sie Validierung** vor dem Einreichen von PRs aus
4. **Dokumentieren Sie Änderungen** in der PR-Beschreibung

## Validierung und Tests

### Validierungsskripte

Führen Sie das Validierungsskript aus, um Probleme zu überprüfen:

```bash
php src/dashboard/lang/__testing__/validate_translations.php
```

### Neue Übersetzungen testen

1. Löschen Sie den Opcache, falls aktiviert
2. Testen Sie alle betroffenen UI-Elemente
3. Überprüfen Sie die dynamische Inhaltsersetzung
4. Überprüfen Sie die ordnungsgemäße Escaping

## Fehlerbehebung

### Häufige Probleme

1. **Fehlende Übersetzungen**: Überprüfen Sie die richtige Datei und den Schlüssel
2. **Defektes HTML**: Stellen Sie sicher, dass alle Tags ordnungsgemäß geschlossen sind
3. **Variablenfehler**: Stellen Sie sicher, dass alle `{variables}` zwischen den Übersetzungen übereinstimmen
4. **Cache-Probleme**: Löschen Sie Ihren Browser-Cache und PHP-Opcache

### Hilfe erhalten

Falls Sie auf Probleme stoßen:
1. Überprüfen Sie die bestehenden Issues auf ähnliche Probleme
2. Konsultieren Sie die QuickBox-Dokumentation
3. Öffnen Sie ein neues Issue mit Details über das Problem

---

Diese Dokumentation ist Teil des QuickBox Dashboard-Übersetzungssystems.
