# QuickBox Dashboard Fordítási Rendszer

Ez a könyvtár a QuickBox Dashboard moduláris fordítási rendszerének magyar nyelvi fájljait tartalmazza. Ez a dokumentum elmagyarázza a fordítási rendszer struktúráját, használatát és hozzájárulási irányelveit.

## Tartalomjegyzék

- [QuickBox Dashboard Fordítási Rendszer](#quickbox-dashboard-fordítási-rendszer)
  - [Tartalomjegyzék](#tartalomjegyzék)
  - [Áttekintés](#áttekintés)
  - [Könyvtárstruktúra](#könyvtárstruktúra)
  - [Fordítási Fájlok](#fordítási-fájlok)
    - [Fájl Struktúra](#fájl-struktúra)
    - [Elnevezési Konvenciók](#elnevezési-konvenciók)
  - [Új Fordítások Hozzáadása](#új-fordítások-hozzáadása)
  - [Meglévő Fordítások Módosítása](#meglévő-fordítások-módosítása)
  - [Fordítási Kulcsok](#fordítási-kulcsok)
    - [Kulcs Struktúra](#kulcs-struktúra)
    - [Kulcs Elnevezési Irányelvek](#kulcs-elnevezési-irányelvek)
  - [Legjobb Gyakorlatok](#legjobb-gyakorlatok)
  - [Hozzájárulás](#hozzájárulás)
    - [Fordítók Számára](#fordítók-számára)
    - [Fejlesztők Számára](#fejlesztők-számára)
  - [Validálás és Tesztelés](#validálás-és-tesztelés)
    - [Validációs Scriptek](#validációs-scriptek)
    - [Új Fordítások Tesztelése](#új-fordítások-tesztelése)
  - [Hibaelhárítás](#hibaelhárítás)
    - [Gyakori Problémák](#gyakori-problémák)
    - [Segítség Kérése](#segítség-kérése)

## Áttekintés

A QuickBox Dashboard moduláris fordítási rendszert használ, amely a fordításokat funkcionális területek alapján logikai fájlokba szeparálja. Ez a fordítási rendszert fenntarthatóbbá és könnyebben használhatóvá teszi, mint a korábbi monolitikus megközelítés.

## Könyvtárstruktúra

```bash
src/dashboard/lang/
├── hu/                     # Magyar nyelvi fájlok
│   ├── buttons.php         # Gomb címkék és műveletek
│   ├── dashboard.php       # Fő dashboard felületi elemek
│   ├── errors.php          # Hibaüzenetek és validáció
│   ├── help_manual.php     # Súgó dokumentáció és tooltip-ek
│   ├── misc.php            # Vegyes fordítások
│   ├── navigation.php      # Navigációs menü elemek
│   ├── pages.php           # Oldalspecifikus fordítások
│   ├── popup.php           # Felugró ablak üzenetek
│   ├── settings.php        # Beállítások oldal fordítások
│   ├── system.php          # Rendszerrel kapcsolatos üzenetek
│   ├── user_management.php # Felhasználókezelő felület
│   ├── widgets.php         # Dashboard widget tartalom
│   └── README.md           # Ez a fájl
├── __testing__/            # Tesztelési és validációs scriptek
├── lang_hu.php             # Fő magyar fordítások
└── lang_hu_override.php    # Fordítási felülírások
```

## Fordítási Fájlok

### Fájl Struktúra

Minden fordítási fájlnak egy asszociatív tömböt kell visszaadnia, ahol:
- A kulcsok a fordítási kulcsok (UPPER_SNAKE_CASE formátumban)
- Az értékek a lefordított szövegek

Példa (`buttons.php`):

```php
<?php
/**
 * Gomb Címkék és Műveletek
 * 
 * Ez a fájl a dashboard-ban használt gombok és műveleti elemek fordításait tartalmazza.
 */

return [
    'SAVE' => 'Mentés',
    'CANCEL' => 'Mégse',
    'EDIT' => 'Szerkesztés',
    'DELETE' => 'Törlés',
    'SUBMIT' => 'Küldés',
    'RESET' => 'Visszaállítás',
    'CLOSE' => 'Bezárás',
    'BACK' => 'Vissza',
    'NEXT' => 'Következő',
    'CONFIRM' => 'Megerősítés',
    'DISMISS' => 'Elutasítás',
    'ENABLE' => 'Engedélyezés',
    'DISABLE' => 'Letiltás',
    'UPDATE' => 'Frissítés',
    'REMOVE' => 'Eltávolítás',
    'ADD' => 'Hozzáadás',
    'SEARCH' => 'Keresés',
    'FILTER' => 'Szűrés',
    'SORT' => 'Rendezés',
    'MORE' => 'Több',
    'LESS' => 'Kevesebb',
    'APPLY' => 'Alkalmazás',
    'CLEAR' => 'Törlés',
    'UPLOAD' => 'Feltöltés',
    'DOWNLOAD' => 'Letöltés',
    'PREVIEW' => 'Előnézet',
    'SELECT' => 'Kiválasztás',
    'VIEW_DETAILS' => 'Részletek Megtekintése',
    'MANAGE' => 'Kezelés',
    'CONFIGURE' => 'Konfigurálás',
    'SETTINGS' => 'Beállítások',
    'PREFERENCES' => 'Beállítások',
    'ADVANCED' => 'Speciális',
    'LOADING' => 'Betöltés...',
    'PROCESSING' => 'Feldolgozás...',
    'PLEASE_WAIT' => 'Kérjük, várjon...',
    'SUCCESS' => 'Siker!',
    'ERROR' => 'Hiba!',
    'WARNING' => 'Figyelmeztetés!',
    'INFO' => 'Információ',
    'HELP' => 'Súgó'
];
```

### Elnevezési Konvenciók

1. **Fájl Nevek**: Használjon kisbetűket aláhúzással (pl. `user_management.php`)
2. **Fordítási Kulcsok**: Használjon UPPER_SNAKE_CASE formátumot (pl. `USERNAME_REQUIRED`)
3. **Megjegyzések**: Tartalmazzon PHPDoc blokkokat minden fájl tetején és összetett fordításokhoz

## Új Fordítások Hozzáadása

1. **Válassza ki a megfelelő fájlt** a fordítás célja alapján
2. **Adja hozzá az új fordítást** egy leíró kulccsal
3. **Adjon hozzá megjegyzéseket** kontextushoz, ha szükséges
4. **Frissítse a README-t** ha új kategóriát ad hozzá

Példa:

```php
// A megfelelő fájlban (pl. user_management.php)
return [
    // ... meglévő fordítások ...
    'TWO_FACTOR_AUTH' => 'Két Faktoros Hitelesítés',
    'TWO_FACTOR_AUTH_DESCRIPTION' => 'Adjon hozzá egy extra biztonsági réteget a fiókjához',
];
```

## Meglévő Fordítások Módosítása

1. **Keresse meg a kulcsot** a megfelelő fájlban
2. **Frissítse az értéket** megtartva ugyanazt a kulcsot
3. **Frissítse a kapcsolódó dokumentációt** ha a jelentés megváltozott

## Fordítási Kulcsok

### Kulcs Struktúra

A fordítási kulcsok ezeket a mintákat követik:

- `NOUN_VERB`: `USER_CREATED`, `PASSWORD_CHANGED`
- `NOUN_DESCRIPTION`: `ACCOUNT_SETTINGS_DESCRIPTION`
- `NOUN_LABEL`: `USERNAME_LABEL`
- `NOUN_PLACEHOLDER`: `SEARCH_PLACEHOLDER`
- `NOUN_TOOLTIP`: `API_KEY_TOOLTIP`
- `ERROR_NOUN_VERB`: `ERROR_USER_NOT_FOUND`
- `SUCCESS_NOUN_VERB`: `SUCCESS_USER_CREATED`

### Kulcs Elnevezési Irányelvek

1. Legyen leíró, de tömör
2. Csoportosítsa a kapcsolódó kulcsokat
3. Használjon konzisztens terminológiát
4. Kerülje a rövidítéseket, hacsak nem széles körben ismert

## Legjobb Gyakorlatok

1. **Konzisztencia**: Használjon konzisztens terminológiát és stílust
2. **Kontextus**: Adjon kontextust kétértelmű kifejezésekhez
3. **Változók**: Használja a `{variable}` szintaxist dinamikus tartalomhoz
4. **HTML**: Csak szükség esetén tartalmazzon minimális HTML-t
5. **Hossz**: Tartsa a fordításokat tömörek
6. **Megjegyzések**: Adjon megjegyzéseket összetett vagy kétértelmű fordításokhoz

## Hozzájárulás

### Fordítók Számára

1. **Forkolja** a repository-t
2. **Hozzon létre egy ágat** a fordításaihoz
3. **Küldjön pull request-et** a változtatásaival
4. **Hivatkozzon kapcsolódó problémákra** a PR-ben

### Fejlesztők Számára

1. **Adjon hozzá új fordításokat** a megfelelő modulhoz
2. **Frissítse a teszteket** ha szükséges
3. **Futtasson validációt** PR beküldése előtt
4. **Dokumentálja a változtatásokat** a PR leírásában

## Validálás és Tesztelés

### Validációs Scriptek

Futtassa a validációs scriptet a problémák ellenőrzéséhez:

```bash
php src/dashboard/lang/__testing__/validate_translations.php
```

### Új Fordítások Tesztelése

1. Törölje az opcache-t, ha engedélyezett
2. Tesztelje az összes érintett UI elemet
3. Ellenőrizze a dinamikus tartalom cseréjét
4. Ellenőrizze a megfelelő escape-elést

## Hibaelhárítás

### Gyakori Problémák

1. **Hiányzó Fordítások**: Ellenőrizze a helyes fájlt és kulcsot
2. **Törött HTML**: Ellenőrizze, hogy minden tag megfelelően le van-e zárva
3. **Változó Eltérés**: Győződjön meg róla, hogy minden `{variables}` egyezik a fordítások között
4. **Cache Problémák**: Törölje a böngésző cache-t és PHP opcache-t

### Segítség Kérése

Ha problémába ütközik:
1. Ellenőrizze a meglévő problémákat hasonló problémákért
2. Konzultáljon a QuickBox dokumentációval
3. Nyisson új problémát a probléma részleteivel

---

Ez a dokumentáció a QuickBox Dashboard fordítási rendszerének része.
