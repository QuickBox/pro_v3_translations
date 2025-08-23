# QuickBox Pro - Modulares Sprachsystem

## Übersicht

Dieses Verzeichnis enthält das modulare Sprachsystem für QuickBox Pro CLI. Die ursprüngliche `cli_lang` Datei (3.695 Zeilen) wurde in funktionale Module aufgeteilt für bessere Organisation, Wartbarkeit und Skalierbarkeit.

## Modulstruktur

Das modulare Sprachsystem ist in die folgenden funktionalen Gruppen organisiert:

### Kernmodule
- **core.sh** - Kernsystemoperationen (Sperren, Bereinigung, Grundfunktionen)
- **apt.sh** - APT-Paketverwaltungsoperationen
- **software.sh** - Software-Installation, -Entfernung und -Update-Operationen
- **ssl.sh** - SSL/LetsEncrypt-Zertifikatsverwaltung
- **dns.sh** - DNS-Anmeldedatenverwaltung
- **users.sh** - Benutzerverwaltungsoperationen
- **vpn.sh** - VPN/WireGuard-Operationen
- **database.sh** - Datenbankverwaltung (MySQL/SQLite)
- **updater.sh** - System-Updater-Operationen
- **manager.sh** - Software-Manager (Backup/Wiederherstellung/Rollback)
- **help.sh** - Hilfe- und Fehlermeldungen

### Erweiterte Module
- **software_access.sh** - Software-Zugriffsinformationen und URLs
- **software_config.sh** - Software-Konfiguration und Setup-Nachrichten
- **wireguard.sh** - WireGuard-spezifische Konfiguration und Verwaltung
- **misc.sh** - Verschiedene Utilities und allgemeine Systemnachrichten

## Modulbeschreibungen

### Kernmodule

#### core.sh
Enthält Kernsystemoperationen einschließlich:
- Speicher- und Cache-Bereinigungsfunktionen
- Sperrenbehandlung und -entfernung
- Dashboard-Logging-Utilities
- Grundlegende Systemstatusnachrichten

#### apt.sh
Verwaltet APT-Paketverwaltungsoperationen:
- Paketdatenbank-Updates
- Sperrenauflösung
- Upgrade-Abschlussnachrichten
- Paketprüfung und -validierung

#### software.sh
Behandelt Software-Installation, -Entfernung und -Updates:
- Installations-Header und -Fortschritt
- Neuinstallationsprozesse
- Entfernungsoperationen
- Update-Verfahren
- Build- und Abhängigkeitsverwaltung

#### ssl.sh
Umfassende SSL/LetsEncrypt-Zertifikatsverwaltung:
- Zertifikatsinstallation und -erneuerung
- DNS-Challenge-Unterstützung für mehrere Anbieter
- HTTP-Challenge-Operationen
- Zertifikatsvalidierung und Fehlerbehandlung
- Interaktive DNS-Einrichtung für verschiedene Anbieter

#### dns.sh
DNS-Anmeldedatenverwaltungssystem:
- Anbieterstatusprüfung
- Anmeldedatenvalidierung
- Einrichtungsanweisungen für alle unterstützten Anbieter
- Fehlerbehandlung und Fehlerbehebung
- Backup- und Wiederherstellungsoperationen

#### users.sh
Benutzerverwaltungsoperationen:
- Benutzererstellung und -löschung
- Passwortverwaltung
- Benutzerbeförderung und -degradierung
- Ban/Unban-Operationen

#### vpn.sh
VPN- und WireGuard-Operationen:
- VPN-Konfiguration
- Client-Setup
- Serververwaltung
- Verbindungsstatus

#### database.sh
Datenbankverwaltung für MySQL und SQLite:
- Installation und Konfiguration
- Migration zwischen Datenbanktypen
- Backup- und Wiederherstellungsoperationen
- Wartung und Optimierung
- Integritätsprüfung

#### updater.sh
System-Updater-Operationen:
- Update-Fortschrittsverfolgung
- Abhängigkeitsverwaltung
- Komponenten-Updates
- Abschlussstatus

#### manager.sh
Software-Manager-Operationen:
- Backup-Erstellung und -verwaltung
- Wiederherstellungsoperationen
- Rollback-Funktionalität
- Standard-Konfigurationsverwaltung
- Versionsverwaltung

#### help.sh
Hilfesystem und Fehlerbehandlung:
- Software-spezifische Hilfe-Generierung
- Befehlsverwendungsanweisungen
- Fehlermeldungen und Warnungen
- Interaktive Hilfefunktionen

### Erweiterte Module

#### software_access.sh
Software-Zugriffsinformationen und -konfiguration:
- Web-Interface-URLs und -Ports
- Zugriffsanmeldedaten und -Setup
- Domain-spezifische Zugriffsinformationen
- Client-Konfigurationsdetails

#### software_config.sh
Software-Konfiguration und spezielle Behandlung:
- MySQL-Migration für Ombi
- Plex-Update-Anmeldedatenbehandlung
- Rclone-Konfiguration
- Spezielle Software-Setup-Prozesse

#### wireguard.sh
WireGuard-spezifische Operationen:
- Client- und Server-Konfiguration
- Interaktive Setup-Prozesse
- Verwaltungshilfesystem
- Fehlerbehandlung für WireGuard-Operationen

#### misc.sh
Verschiedene Utilities und allgemeine Nachrichten:
- Unbekannte Optionenbehandlung
- Allgemeine Fehlermeldungen
- Utility-Funktionen
- NordVPN-Konfigurationsgenerator-Hilfe

## Verwendung

### Für Entwickler

1. **Neue Nachrichten hinzufügen**: Fügen Sie neue Sprachfunktionen zum entsprechenden Modul basierend auf der Funktionalität hinzu
2. **Bestehende Nachrichten modifizieren**: Lokalisieren Sie die Funktion im relevanten Modul und aktualisieren Sie sie
3. **Neue Module erstellen**: Folgen Sie der Namenskonvention und Struktur bestehender Module

### Für Systemadministratoren

1. **Modulares System verwenden**: Das System lädt automatisch alle Module über `cli_lang_modular`
2. **Rückwärtskompatibilität**: Alle bestehenden Funktionsaufrufe funktionieren unverändert weiter
3. **Modulvalidierung**: Das System validiert, dass alle erforderlichen Module vorhanden sind

## Namenskonventionen

- **Dateinamen**: Verwenden Sie beschreibende Namen mit `.sh`-Erweiterung (z.B. `software_access.sh`)
- **Funktionsnamen**: Folgen Sie dem `quickbox::lang::category::subcategory::action()`-Muster
- **Variablen**: Verwenden Sie beschreibende Namen mit ordnungsgemäßer Gültigkeitsbereichsregelung
- **Kommentare**: Fügen Sie umfassende Dokumentation für komplexe Funktionen hinzu

## Vorteile

### Wartbarkeit
- **Fokussierte Module**: Jedes Modul behandelt einen spezifischen Funktionsbereich
- **Einfachere Navigation**: Entwickler können schnell relevante Funktionen lokalisieren
- **Reduzierte Komplexität**: Kleinere Dateien sind einfacher zu verstehen und zu modifizieren

### Skalierbarkeit
- **Modulares Wachstum**: Neue Funktionalität kann hinzugefügt werden, ohne bestehende Module zu beeinträchtigen
- **Unabhängige Entwicklung**: Mehrere Entwickler können gleichzeitig an verschiedenen Modulen arbeiten
- **Selektives Laden**: Nur erforderliche Module müssen geladen werden

### Organisation
- **Logische Gruppierung**: Verwandte Funktionen sind gruppiert
- **Klare Struktur**: Die Modulhierarchie spiegelt die Systemarchitektur wider
- **Dokumentation**: Jedes Modul ist selbst-dokumentierend mit klaren Zwecken

## Migrationsstrategie

### Phase 1: Modulerstellung ✅
- [x] Ursprüngliche `cli_lang` in funktionale Module aufteilen
- [x] Bridge-Datei `cli_lang_modular` erstellen
- [x] Modulvalidierung und Fehlerbehandlung implementieren

### Phase 2: Testing und Validierung
- [ ] Alle Module mit bestehender QuickBox Pro-Funktionalität testen
- [ ] Rückwärtskompatibilität validieren
- [ ] Performance-Testing und Optimierung

### Phase 3: Bereitstellung
- [ ] Graduelle Einführung in Entwicklungsumgebungen
- [ ] Benutzerakzeptanztests
- [ ] Produktionsbereitstellung

### Phase 4: Dokumentation und Schulung
- [ ] Entwicklerdokumentation vervollständigen
- [ ] Migrationsanleitungen erstellen
- [ ] Schulungsmaterialien für Mitwirkende

## Mitwirken

### Richtlinien
1. **Namenskonventionen befolgen**: Verwenden Sie etablierte Muster für Konsistenz
2. **Dokumentation hinzufügen**: Fügen Sie Kommentare für komplexe Funktionen hinzu
3. **Änderungen testen**: Stellen Sie sicher, dass Modifikationen bestehende Funktionalität nicht brechen
4. **README aktualisieren**: Halten Sie Dokumentation mit Änderungen aktuell

### Neue Module hinzufügen
1. Erstellen Sie die Moduldatei im `cli/`-Verzeichnis
2. Fügen Sie das Modul zur Bridge-Datei hinzu (`cli_lang_modular`)
3. Aktualisieren Sie die Validierungsliste
4. Dokumentieren Sie das Modul in diesem README

### Bestehende Module modifizieren
1. Lokalisieren Sie das entsprechende Modul für Ihre Änderungen
2. Folgen Sie dem bestehenden Codestil und den Mustern
3. Testen Sie Ihre Änderungen gründlich
4. Aktualisieren Sie relevante Dokumentation

## Dateistruktur

```bash
cli/
├── README.md                 # Diese Dokumentationsdatei
├── core.sh                   # Kernsystemoperationen
├── apt.sh                    # APT-Paketverwaltung
├── software.sh               # Software-Installation/Entfernung/Update
├── ssl.sh                    # SSL/LetsEncrypt-Operationen
├── dns.sh                    # DNS-Anmeldedatenverwaltung
├── users.sh                  # Benutzerverwaltungsoperationen
├── vpn.sh                    # VPN/WireGuard-Operationen
├── database.sh               # Datenbankverwaltung
├── updater.sh                # System-Updater-Operationen
├── manager.sh                # Software-Manager-Operationen
├── help.sh                   # Hilfe und Fehlerbehandlung
├── software_access.sh        # Software-Zugriffsinformationen
├── software_config.sh        # Software-Konfiguration
├── wireguard.sh              # WireGuard-spezifische Operationen
└── misc.sh                   # Verschiedene Utilities
```

## Erfolgsmetriken

- **Reduzierte Dateigröße**: Jedes Modul ist deutlich kleiner als die ursprüngliche 3.695-Zeilen-Datei
- **Verbesserte Wartbarkeit**: Einfacher, spezifische Funktionalität zu lokalisieren und zu modifizieren
- **Verbesserte Zusammenarbeit**: Mehrere Entwickler können an verschiedenen Modulen arbeiten
- **Bessere Organisation**: Logische Gruppierung verwandter Funktionen
- **Rückwärtskompatibilität**: Alle bestehenden Funktionalitäten funktionieren unverändert weiter

## Support

Für Fragen oder Probleme mit dem modularen Sprachsystem:
- Überprüfen Sie dieses README für Verwendungsrichtlinien
- Überprüfen Sie die Modulstruktur und Namenskonventionen
- Testen Sie Änderungen zuerst in einer Entwicklungsumgebung
- Konsultieren Sie das QuickBox Pro-Entwicklungsteam für komplexe Modifikationen 