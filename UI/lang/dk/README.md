# QuickBox Dashboard Oversættelsessystem

Denne mappe indeholder de danske sprogfiler for QuickBox Dashboards modulære oversættelsessystem. Dette dokument forklarer strukturen, brugen og bidragsretningslinjerne for oversættelsessystemet.

## Indholdsfortegnelse

- [QuickBox Dashboard Oversættelsessystem](#quickbox-dashboard-oversættelsessystem)
  - [Indholdsfortegnelse](#indholdsfortegnelse)
  - [Oversigt](#oversigt)
  - [Mappestruktur](#mappestruktur)
  - [Oversættelsesfiler](#oversættelsesfiler)
    - [Filstruktur](#filstruktur)
    - [Navngivningskonventioner](#navngivningskonventioner)
  - [Tilføjelse af nye oversættelser](#tilføjelse-af-nye-oversættelser)
  - [Ændring af eksisterende oversættelser](#ændring-af-eksisterende-oversættelser)
  - [Oversættelsesnøgler](#oversættelsesnøgler)
    - [Nøglestruktur](#nøglestruktur)
    - [Retningslinjer for nøglenavngivning](#retningslinjer-for-nøglenavngivning)
  - [Bedste praksis](#bedste-praksis)
  - [Bidrag](#bidrag)
    - [For oversættere](#for-oversættere)
    - [For udviklere](#for-udviklere)
  - [Validering og test](#validering-og-test)
    - [Valideringsscripts](#valideringsscripts)
    - [Test af nye oversættelser](#test-af-nye-oversættelser)
  - [Fejlfinding](#fejlfinding)
    - [Almindelige problemer](#almindelige-problemer)
    - [Få hjælp](#få-hjælp)

## Oversigt

QuickBox Dashboard bruger et modulært oversættelsessystem, der adskiller oversættelser i logiske filer baseret på deres funktionelle områder. Dette gør oversættelsessystemet mere vedligeholdelsesvenligt og lettere at arbejde med end den tidligere monolitiske tilgang.

## Mappestruktur

```bash
src/dashboard/lang/
├── dk/                     # Danske sprogfiler
│   ├── buttons.php         # Knapetiketter og handlinger
│   ├── dashboard.php       # Hoveddashboard interface-elementer
│   ├── errors.php          # Fejlmeddelelser og validering
│   ├── help_manual.php     # Hjælpedokumentation og værktøjstip
│   ├── misc.php            # Diverse oversættelser
│   ├── navigation.php      # Navigationsmenu-elementer
│   ├── pages.php           # Sidespecifikke oversættelser
│   ├── popup.php           # Popup-dialogmeddelelser
│   ├── settings.php        # Indstillingsside-oversættelser
│   ├── system.php          # Systemrelaterede meddelelser
│   ├── user_management.php # Brugergrænseflade for brugergestaltung
│   ├── widgets.php         # Dashboard-widget-indhold
│   └── README.md           # Denne fil
├── __testing__/            # Test- og valideringsscripts
├── lang_dk.php             # Hoveddanske oversættelser
└── lang_dk_override.php    # Oversættelsesoverskrivninger
```

## Oversættelsesfiler

### Filstruktur

Hver oversættelsesfil skal returnere et associativt array hvor:
- Nøgler er oversættelsesnøglerne (i UPPER_SNAKE_CASE)
- Værdier er de oversatte strenge

Eksempel (`buttons.php`):

```php
<?php
/**
 * Knapetiketter og handlinger
 * 
 * Denne fil indeholder oversættelser for knapper og handlings-elementer, der bruges gennem hele dashboardet.
 */

return [
    'SAVE' => 'Gem',
    'CANCEL' => 'Annuller',
    'EDIT' => 'Rediger',
    'DELETE' => 'Slet',
    'SUBMIT' => 'Send',
    'RESET' => 'Nulstil',
    'CLOSE' => 'Luk',
    'BACK' => 'Tilbage',
    'NEXT' => 'Næste',
    'CONFIRM' => 'Bekræft',
    'DISMISS' => 'Afvis',
    'ENABLE' => 'Aktiver',
    'DISABLE' => 'Deaktiver',
    'UPDATE' => 'Opdater',
    'REMOVE' => 'Fjern',
    'ADD' => 'Tilføj',
    'SEARCH' => 'Søg',
    'FILTER' => 'Filtrer',
    'SORT' => 'Sortér',
    'MORE' => 'Mere',
    'LESS' => 'Mindre',
    'APPLY' => 'Anvend',
    'CLEAR' => 'Ryd',
    'UPLOAD' => 'Upload',
    'DOWNLOAD' => 'Download',
    'PREVIEW' => 'Forhåndsvisning',
    'SELECT' => 'Vælg',
    'VIEW_DETAILS' => 'Se detaljer',
    'MANAGE' => 'Administrer',
    'CONFIGURE' => 'Konfigurer',
    'SETTINGS' => 'Indstillinger',
    'PREFERENCES' => 'Præferencer',
    'ADVANCED' => 'Avanceret',
    'LOADING' => 'Indlæser...',
    'PROCESSING' => 'Behandler...',
    'PLEASE_WAIT' => 'Vent venligst...',
    'SUCCESS' => 'Succes!',
    'ERROR' => 'Fejl!',
    'WARNING' => 'Advarsel!',
    'INFO' => 'Info',
    'HELP' => 'Hjælp'
];
```

### Navngivningskonventioner

1. **Filnavne**: Brug små bogstaver med understregninger (f.eks. `user_management.php`)
2. **Oversættelsesnøgler**: Brug UPPER_SNAKE_CASE (f.eks. `USERNAME_REQUIRED`)
3. **Kommentarer**: Inkluder PHPDoc-blokke øverst i hver fil og for komplekse oversættelser

## Tilføjelse af nye oversættelser

1. **Vælg den passende fil** baseret på oversættelsens formål
2. **Tilføj den nye oversættelse** med en beskrivende nøgle
3. **Tilføj kommentarer** for kontekst hvis nødvendigt
4. **Opdater README'en** hvis du tilføjer en ny kategori

Eksempel:

```php
// I passende fil (f.eks. user_management.php)
return [
    // ... eksisterende oversættelser ...
    'TWO_FACTOR_AUTH' => 'Tofaktor-autentificering',
    'TWO_FACTOR_AUTH_DESCRIPTION' => 'Tilføj et ekstra lag af sikkerhed til din konto',
];
```

## Ændring af eksisterende oversættelser

1. **Find nøglen** i den passende fil
2. **Opdater værdien** mens du bevarer den samme nøgle
3. **Opdater eventuel relateret dokumentation** hvis betydningen har ændret sig

## Oversættelsesnøgler

### Nøglestruktur

Oversættelsesnøgler følger disse mønstre:

- `NOUN_VERB`: `USER_CREATED`, `PASSWORD_CHANGED`
- `NOUN_DESCRIPTION`: `ACCOUNT_SETTINGS_DESCRIPTION`
- `NOUN_LABEL`: `USERNAME_LABEL`
- `NOUN_PLACEHOLDER`: `SEARCH_PLACEHOLDER`
- `NOUN_TOOLTIP`: `API_KEY_TOOLTIP`
- `ERROR_NOUN_VERB`: `ERROR_USER_NOT_FOUND`
- `SUCCESS_NOUN_VERB`: `SUCCESS_USER_CREATED`

### Retningslinjer for nøglenavngivning

1. Vær beskrivende men præcis
2. Gruppér relaterede nøgler sammen
3. Brug konsistent terminologi
4. Undgå forkortelser medmindre de er bredt forståede

## Bedste praksis

1. **Konsistens**: Brug konsistent terminologi og stil
2. **Kontekst**: Giv kontekst for tvetydige termer
3. **Variabler**: Brug `{variable}` syntaks for dynamisk indhold
4. **HTML**: Inkluder minimal HTML kun når nødvendigt
5. **Længde**: Hold oversættelser præcise
6. **Kommentarer**: Tilføj kommentarer for komplekse eller tvetydige oversættelser

## Bidrag

### For oversættere

1. **Fork** repository'et
2. **Opret en gren** for dine oversættelser
3. **Indsend en pull request** med dine ændringer
4. **Henvis til eventuelle relaterede problemer** i din PR

### For udviklere

1. **Tilføj nye oversættelser** til den passende modul
2. **Opdater tests** hvis nødvendigt
3. **Kør validering** før du indsender PR'er
4. **Dokumenter ændringer** i PR-beskrivelsen

## Validering og test

### Valideringsscripts

Kør valideringsscriptet for at kontrollere for problemer:

```bash
php src/dashboard/lang/__testing__/validate_translations.php
```

### Test af nye oversættelser

1. Ryd eventuel opcache hvis aktiveret
2. Test alle berørte UI-elementer
3. Verificer dynamisk indholdsudskiftning
4. Kontroller for korrekt escaping

## Fejlfinding

### Almindelige problemer

1. **Manglende oversættelser**: Kontroller den korrekte fil og nøgle
2. **Ødelagt HTML**: Verificer at alle tags er korrekt lukket
3. **Variabelmismatch**: Sørg for at alle `{variables}` matcher mellem oversættelser
4. **Cache-problemer**: Ryd din browser-cache og PHP opcache

### Få hjælp

Hvis du støder på problemer:
1. Kontroller de eksisterende problemer for lignende problemer
2. Konsulter QuickBox-dokumentationen
3. Åbn et nyt problem med detaljer om problemet

---

Denne dokumentation er en del af QuickBox Dashboard oversættelsessystemet.
