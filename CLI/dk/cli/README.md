# QuickBox Pro - Modulært Sprogsystem

## Oversigt

Denne mappe indeholder det modulære sprogsystem for QuickBox Pro CLI. Den oprindelige `cli_lang` fil (3.695 linjer) er blevet opdelt i funktionelle moduler for bedre organisation, vedligeholdelse og skalerbarhed.

## Modulstruktur

Det modulære sprogsystem er organiseret i følgende funktionelle grupper:

### Kerne Moduler
- **core.sh** - Kerne systemoperationer (låse, rensning, grundlæggende funktioner)
- **apt.sh** - APT pakkehåndteringsoperationer
- **software.sh** - Software installation, fjernelse og opdateringsoperationer
- **ssl.sh** - SSL/LetsEncrypt certifikathåndtering
- **dns.sh** - DNS legitimationshåndtering
- **users.sh** - Brugerhåndteringsoperationer
- **vpn.sh** - VPN/WireGuard operationer
- **database.sh** - Databasehåndtering (MySQL/SQLite)
- **updater.sh** - Systemopdateringsoperationer
- **manager.sh** - Software manager (backup/gendannelse/rollback)
- **help.sh** - Hjælpemeddelelser og fejlhåndtering

### Udvidede Moduler
- **software_access.sh** - Software adgangsinformation og URL'er
- **software_config.sh** - Software konfiguration og opsætningsmeddelelser
- **wireguard.sh** - WireGuard-specifik konfiguration og håndtering
- **misc.sh** - Diverse hjælpeprogrammer og generelle systemmeddelelser

## Modulbeskrivelser

### Kerne Moduler

#### core.sh
Indeholder kerne systemoperationer inklusive:
- Hukommelse og cache rensningsfunktioner
- Låsehåndtering og fjernelse
- Dashboard logging hjælpeprogrammer
- Grundlæggende systemstatusmeddelelser

#### apt.sh
Håndterer APT pakkehåndteringsoperationer:
- Pakke databaseopdateringer
- Låseopløsning
- Opgraderingsfuldførelsesmeddelelser
- Pakke kontrol og validering

#### software.sh
Håndterer software installation, fjernelse og opdateringer:
- Installationsoverskrifter og fremskridt
- Geninstallationsprocesser
- Fjernelsesoperationer
- Opdateringsprocedurer
- Bygning og afhængighedshåndtering

#### ssl.sh
Omfattende SSL/LetsEncrypt certifikathåndtering:
- Certifikat installation og fornyelse
- DNS udfordring understøttelse for flere udbydere
- HTTP udfordringsoperationer
- Certifikatvalidering og fejlhåndtering
- Interaktiv DNS opsætning for forskellige udbydere

#### dns.sh
DNS legitimationshåndteringssystem:
- Udbyders statuskontrol
- Legitimationsvalidering
- Opsætningsinstruktioner for alle understøttede udbydere
- Fejlhåndtering og fejlfinding
- Backup og gendannelsesoperationer

#### users.sh
Brugerhåndteringsoperationer:
- Brugeroprettelse og -sletning
- Adgangskodehåndtering
- Brugerfremme og -degradering
- Ban/fjern ban operationer

#### vpn.sh
VPN og WireGuard operationer:
- VPN konfiguration
- Klientopsætning
- Serverhåndtering
- Forbindelsesstatus

#### database.sh
Databasehåndtering for MySQL og SQLite:
- Installation og konfiguration
- Migration mellem databasetyper
- Backup og gendannelsesoperationer
- Vedligeholdelse og optimering
- Integritetskontrol

#### updater.sh
Systemopdateringsoperationer:
- Opdateringsfremskridtssporing
- Afhængighedshåndtering
- Komponentopdateringer
- Fuldførelsesstatus

#### manager.sh
Software manager operationer:
- Backup oprettelse og håndtering
- Gendannelsesoperationer
- Rollback funktionalitet
- Standardkonfigurationshåndtering
- Versionshåndtering

#### help.sh
Hjælpesystem og fejlhåndtering:
- Software-specifik hjælpegenerering
- Kommandobrugsinstruktioner
- Fejlmeddelelser og advarsler
- Interaktive hjælpefunktioner

### Udvidede Moduler

#### software_access.sh
Software adgangsinformation og konfiguration:
- Web interface URL'er og porte
- Adgangslegitimationer og opsætning
- Domæne-specifik adgangsinformation
- Klientkonfigurationsdetaljer

#### software_config.sh
Software konfiguration og særlig håndtering:
- MySQL migration for Ombi
- Plex opdateringslegitimationshåndtering
- Rclone konfiguration
- Særlige software opsætningsprocesser

#### wireguard.sh
WireGuard-specifikke operationer:
- Klient- og serverkonfiguration
- Interaktive opsætningsprocesser
- Håndteringshjælpesystem
- Fejlhåndtering for WireGuard operationer

#### misc.sh
Diverse hjælpeprogrammer og generelle meddelelser:
- Ukendt mulighedshåndtering
- Generelle fejlmeddelelser
- Hjælpeprogrammer
- NordVPN konfigurationsgenerator hjælp

## Brug

### For Udviklere

1. **Tilføjelse af Nye Meddelelser**: Tilføj nye sprogfunktioner til det passende modul baseret på funktionalitet
2. **Ændring af Eksisterende Meddelelser**: Find funktionen i det relevante modul og opdater den
3. **Oprettelse af Nye Moduler**: Følg navnekonventionen og strukturen af eksisterende moduler

### For Systemadministratorer

1. **Brug af Det Modulære System**: Systemet indlæser automatisk alle moduler via `cli_lang_modular`
2. **Bagudkompatibilitet**: Alle eksisterende funktionskald fortsætter med at virke uændret
3. **Modulvalidering**: Systemet validerer at alle påkrævede moduler er til stede

## Navnekonventioner

- **Filnavne**: Brug beskrivende navne med `.sh` udvidelse (f.eks. `software_access.sh`)
- **Funktionsnavne**: Følg `quickbox::lang::kategori::underkategori::handling()` mønsteret
- **Variabler**: Brug beskrivende navne med korrekt scope
- **Kommentarer**: Inkluder omfattende dokumentation for komplekse funktioner

## Fordele

### Vedligeholdelse
- **Fokuserede Moduler**: Hvert modul håndterer et specifikt funktionsområde
- **Lettere Navigation**: Udviklere kan hurtigt finde relevante funktioner
- **Reduceret Kompleksitet**: Mindre filer er lettere at forstå og ændre

### Skalerbarhed
- **Modulær Vækst**: Ny funktionalitet kan tilføjes uden at påvirke eksisterende moduler
- **Uafhængig Udvikling**: Flere udviklere kan arbejde på forskellige moduler samtidigt
- **Selektiv Indlæsning**: Kun påkrævede moduler behøver at indlæses

### Organisation
- **Logisk Gruppering**: Relaterede funktioner er grupperet sammen
- **Tydelig Struktur**: Modulhierarkiet afspejler systemarkitekturen
- **Dokumentation**: Hvert modul er selvdokumenterende med tydelige formål

## Migreringsstrategi

### Fase 1: Moduloprettelse ✅
- [x] Opdel oprindelig `cli_lang` i funktionelle moduler
- [x] Opret bridge fil `cli_lang_modular`
- [x] Implementer modulvalidering og fejlhåndtering

### Fase 2: Test og Validering
- [ ] Test alle moduler med eksisterende QuickBox Pro funktionalitet
- [ ] Valider bagudkompatibilitet
- [ ] Ydeevnetest og optimering

### Fase 3: Deployment
- [ ] Gradvis udrulning til udviklingsmiljøer
- [ ] Brugeraccepttest
- [ ] Produktionsdeployment

### Fase 4: Dokumentation og Træning
- [ ] Færdiggør udviklerdokumentation
- [ ] Opret migrationsguider
- [ ] Træningsmaterialer for bidragsydere

## Bidrag

### Retningslinjer
1. **Følg Navnekonventioner**: Brug etablerede mønstre for konsistens
2. **Tilføj Dokumentation**: Inkluder kommentarer for komplekse funktioner
3. **Test Ændringer**: Sikr at ændringer ikke ødelægger eksisterende funktionalitet
4. **Opdater README**: Hold dokumentationen opdateret med ændringer

### Tilføjelse af Nye Moduler
1. Opret modulfilen i `cli/` mappen
2. Tilføj modulet til bridge filen (`cli_lang_modular`)
3. Opdater valideringslisten
4. Dokumenter modulet i denne README

### Ændring af Eksisterende Moduler
1. Find det passende modul til dine ændringer
2. Følg den eksisterende kodestil og mønstre
3. Test dine ændringer grundigt
4. Opdater relevant dokumentation

## Filstruktur

```bash
cli/
├── README.md                 # Denne dokumentationsfil
├── core.sh                   # Kerne systemoperationer
├── apt.sh                    # APT pakkehåndtering
├── software.sh               # Software installation/fjernelse/opdatering
├── ssl.sh                    # SSL/LetsEncrypt operationer
├── dns.sh                    # DNS legitimationshåndtering
├── users.sh                  # Brugerhåndteringsoperationer
├── vpn.sh                    # VPN/WireGuard operationer
├── database.sh               # Databasehåndtering
├── updater.sh                # Systemopdateringsoperationer
├── manager.sh                # Software manager operationer
├── help.sh                   # Hjælp og fejlhåndtering
├── software_access.sh        # Software adgangsinformation
├── software_config.sh        # Software konfiguration
├── wireguard.sh              # WireGuard specifikke operationer
└── misc.sh                   # Diverse hjælpeprogrammer
```

## Succesmålinger

- **Reduceret Filstørrelse**: Hvert modul er betydeligt mindre end den oprindelige 3.695-linjers fil
- **Forbedret Vedligeholdelse**: Lettere at finde og ændre specifik funktionalitet
- **Forbedret Samarbejde**: Flere udviklere kan arbejde på forskellige moduler
- **Bedre Organisation**: Logisk gruppering af relaterede funktioner
- **Bagudkompatibilitet**: Al eksisterende funktionalitet fortsætter med at virke uændret

## Support

For spørgsmål eller problemer med det modulære sprogsystem:
- Tjek denne README for brugsretningslinjer
- Gennemgå modulstrukturen og navnekonventionerne
- Test ændringer i et udviklingsmiljø først
- Konsulter QuickBox Pro udviklingsteamet for komplekse ændringer 