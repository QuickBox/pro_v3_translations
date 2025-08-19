#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Projektnavn: QuickBox Pro
# Filnavn: cli_database_dk
# Filbeskrivelse: Dansk sprogfil - Databasehåndtering
# Filversion: 1.0.2
#
# Gemmeopgaver:
# Automatiseret_Versionering: true
#
# Byggeopgaver:
# Automatiseret_Kommentar_Fjernelse: true
#
# Deploymentopgaver:
# Automatiseret_Kryptering: false
#
# Forfatter: Jason Matthews (JMSolo)
# Forfatter Kontakt: support@quickbox.io
# Forfatter: Jamie Dobbs (Mschf)
# Forfatter Kontakt: jamie.dobbs@mschf.dev
#
# Licens: BSD-3 (Tilgængelig i LICENSE.md)
# Copyright (C) 2019-2025, QuickBox.IO
# Alle rettigheder forbeholdes.
# <END METADATA>
# shellcheck disable=2001,2034,2154,2312,2317
################################################################################

################################################################################
# Database Installation - MySQL
################################################################################
quickbox::lang::db::install::prompt() {
  declare text="MySQL er ikke installeret. Vil du installere det? [y/N]:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::apt() {
  declare text="Opdaterer APT..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql_apt() {
  declare text="Downloader MySQL APT Konfiguration..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql_apt::fail() {
  declare text="Kunne ikke downloade MySQL APT Konfiguration."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql_apt::install() {
  declare text="Installerer MySQL APT Konfiguration..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql_apt::install::fail() {
  declare text="Kunne ikke installere MySQL APT Konfiguration."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql() {
  declare text="Installerer MySQL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::fail() {
  declare text="Kunne ikke installere MySQL."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::start::fail() {
  declare text="Kunne ikke starte MySQL."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::enable::fail() {
  declare text="Kunne ikke aktivere MySQL."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::success() {
  declare text="MySQL er blevet installeret."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::installed() {
  declare text="MySQL er allerede installeret, fortsætter med konfiguration."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::config() {
  declare text="Opdaterer MySQL konfiguration..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::config::backup() {
  declare text="Nuværende mysqld.cnf fil er blevet backet op til mysqld.cnf.backup."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::config::write() {
  declare text="[*] Indstiller MySQL konfiguration..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::config::write::fail() {
  declare text="[✗] Kunne ikke skrive MySQL konfiguration."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::privileges() {
  declare text="Indstiller MySQL privilegier..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::privileges::fail() {
  declare text="Kunne ikke skrive MySQL privilegier."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::client() {
  declare text="Indstiller MySQL klient konfiguration..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::client::fail() {
  declare text="Kunne ikke skrive MySQL klient konfiguration."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::reload() {
  declare text="Genindlæser systemctl daemon..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::reload::fail() {
  declare text="Kunne ikke genindlæse systemctl daemon."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::enable() {
  declare text="Aktiverer MySQL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::restart() {
  declare text="Genstarter MySQL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::restart::fail() {
  declare text="Kunne ikke genstarte MySQL."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::user() {
  declare text="Opretter MySQL bruger ${mysql_user}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::user::fail() {
  declare text="Kunne ikke oprette MySQL bruger."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::grant() {
  declare text="Giver privilegier til MySQL bruger ${mysql_user}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::grant::fail() {
  declare text="Kunne ikke give privilegier til MySQL bruger."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::flush() {
  declare text="Rydder privilegier..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::flush::fail() {
  declare text="Kunne ikke rydde privilegier."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::convert() {
  declare text="Konverterer database til MySQL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::convert::success() {
  declare text="Database er blevet konverteret til MySQL."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::remove() {
  declare text="Vil du fjerne SQLite databasen? [y/N]:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::remove::fail() {
  declare text="Kunne ikke deaktivere SQLite i PHP."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::complete() {
  declare text="MySQL er blevet konfigureret."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::details() {
  declare text="MySQL Forbindelsesdetaljer:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::connection::details() {
  declare text="Brugernavn: ${mysql_user}
Adgangskode: ${mysql_password}
Port: ${mysql_port}
Host: ${mysql_host}
Database: ${mysql_name}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::mycnf() {
  declare text="Disse detaljer kan findes på /root/.my.cnf"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Database Installation - SQLite
################################################################################
quickbox::lang::db::install::sqlite::backup() {
  declare text="Backer SQLite database op..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::sqlite::backup::success() {
  declare text="SQLite database er blevet backet op til ${sqlite_file}.${date}.backup"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::sqlite::convert() {
  declare text="Konverterer database til SQLite..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::sqlite::convert::success() {
  declare text="Database er blevet konverteret til SQLite."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::sqlite::remove() {
  declare text="Vil du fjerne MySQL helt? [y/N]:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::sqlite::remove::mysql() {
  declare text="Vil du fjerne MySQL databasen? [y/N]:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::sqlite::php::fail() {
  declare text="Kunne ikke installere SQLite i PHP."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::sqlite::php::enable::fail() {
  declare text="Kunne ikke aktivere SQLite i PHP."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::sqlite::complete() {
  declare text="SQLite database konverteringsprocess er fuldført."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::sqlite::invalid() {
  declare text="Ugyldig mulighed: ${option}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::sqlite::mysql::notfound() {
  declare text="MySQL database ikke fundet."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::sqlite::notfound() {
  declare text="SQLite database ikke fundet."
  quickbox::dashboard::log "${text}"
}

################################################################################
# Database Backup
################################################################################
quickbox::lang::db::backup::sqlite::integrity() {
  declare text="Kontrollerer integriteten af SQLite databasen..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::backup::sqlite::integrity::pass() {
  declare text="Database integritetskontrol bestået."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::backup::sqlite::complete() {
  declare text="Backup fuldført: ${full_backup_path}/qbpro.db"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::backup::sqlite::integrity::fail() {
  declare text="Database integritetskontrol fejlede. Ingen backup blev oprettet."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::backup::sqlite::integrity::repair() {
  declare text="
    [ADVARSEL] QuickBox Database Reparation!

    QuickBox Databasen har fejlet integritetskontrol og reparation er blevet forsøgt.

    Kommando: REINDEX; VACUUM;

    Du kan finde de seneste backups i:
    /opt/quickbox/backup/system/[DATO]/db/qbpro.db

    For at slette denne meddelelse, kør følgende kommando:
    rm -f /etc/quickbox_motd
"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::backup::mysql() {
  declare text="Backer MySQL database op..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::backup::mysql::complete() {
  declare text="MySQL backup fuldført: ${full_backup_path}/qbpro.sql"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::backup::mysql::fail() {
  declare text="MySQL backup fejlede."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::backup::unsupported() {
  declare text="Ikke understøttet databasetype: ${db_type}. Ingen backup blev oprettet."
  quickbox::dashboard::log "${text}"
}

################################################################################
# Database Vedligeholdelse
################################################################################
quickbox::lang::db::maintenance::sqlite::repair() {
  declare text="Forsøger at reparere SQLite databasen..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::sqlite::repair::complete() {
  declare text="SQLite database reparation fuldført."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::sqlite::repair::fail() {
  declare text="Kunne ikke reparere SQLite databasen."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::sqlite::restore::complete() {
  declare text="SQLite database gendannelse fuldført."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::backup::sqlite::integrity::restore() {
  declare text="
    [ADVARSEL] QuickBox Database Reparation!

    QuickBox Databasen har fejlet integritetskontrol og reparation er blevet forsøgt.
    Tidligere gyldig backup er blevet gendannet og tilladelser justeret.

    Du kan finde de seneste backups i:
    /opt/quickbox/backup/system/[DATO]/db/qbpro.db

    For at slette denne meddelelse, kør følgende kommando:
    rm -f /etc/quickbox_motd
"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::sqlite() {
  declare text="Udfører vedligeholdelse på SQLite database..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::sqlite::backup() {
  declare text="Backer databasen op før vedligeholdelse..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::sqlite::optimize() {
  declare text="Optimerer SQLite databasen (VACUUM)..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::sqlite::optimize::complete() {
  declare text="SQLite database optimering fuldført."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::sqlite::optimize::fail() {
  declare text="Kunne ikke optimere SQLite databasen."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::sqlite::integrity::fail() {
  declare text="Database integritetskontrol fejlede. Ingen vedligeholdelse blev udført."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::mysql() {
  declare text="Udfører vedligeholdelse på MySQL database..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::mysql::backup() {
  declare text="Backer MySQL databasen op før vedligeholdelse..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::mysql::backup::fail() {
  declare text="MySQL backup fejlede. Springer vedligeholdelse over."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::mysql::optimize() {
  declare text="Optimerer MySQL database tabeller..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::mysql::optimize::complete() {
  declare text="MySQL database optimering fuldført."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::mysql::optimize::fail() {
  declare text="Kunne ikke optimere MySQL databasen."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::mysql::integrity() {
  declare text="Kontrollerer integriteten af MySQL databasen..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::mysql::integrity::pass() {
  declare text="MySQL database integritetskontrol bestået."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::mysql::integrity::fail() {
  declare text="MySQL database integritetskontrol fejlede."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::unsupported() {
  declare text="Ikke understøttet databasetype: ${db_type}. Ingen vedligeholdelse blev udført."
  quickbox::dashboard::log "${text}"
}

################################################################################
# Database Gendannelse
################################################################################
quickbox::lang::db::restore::backup::error() {
  declare text="Backup mappe ikke fundet: ${backup_root}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::restore::backup::empty() {
  declare text="Ingen backups fundet i backup mappen."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::restore::backup::select() {
  declare text="Vælg en backup at gendanne:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::restore::backup::number() {
  declare text="Indtast nummeret på backupen der skal gendannes: "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::restore::backup::invalid() {
  declare text="Ugyldigt valg. Prøv venligst igen."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::restore::sqlite::success() {
  declare text="SQLite database gendannet succesfuldt fra ${select_backup}."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::restore::sqlite::fail() {
  declare text="Kunne ikke gendanne SQLite databasen."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::restore::mysql::success() {
  declare text="MySQL database gendannet succesfuldt fra ${select_backup}."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::restore::mysql::fail() {
  declare text="Kunne ikke gendanne MySQL databasen."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::restore::unsupported() {
  declare text="Ikke understøttet databasetype: ${db_type}. Ingen gendannelse blev udført."
  quickbox::dashboard::log "${text}"
} 