#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Projektnavn: QuickBox Pro
# Filnavn: cli_users_dk
# Filbeskrivelse: Dansk sprogfil - Brugerhåndtering
# Filversion: 1.0.1
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
# Brugerhåndtering
################################################################################
quickbox::lang::user::create() {
  declare text="quickbox bruger oprettet:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::user::delete() {
  declare text="${username:-"quickbox bruger"} slettet"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::user::username() {
  declare text="bruger: ${username}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::user::password() {
  declare text="adgangskode: ${password}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::user::password::updated() {
  declare text="${username:-"quickbox bruger"}s adgangskode opdateret"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::user::ban() {
  declare text="${username:-"quickbox bruger"} bannet"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::user::unban() {
  declare text="${username:-"quickbox bruger"} fjernet fra ban"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::user::demote() {
  declare text="${username:-"quickbox bruger"} degraderet fra admin"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::user::promote() {
  declare text="${username:-"quickbox bruger"} forfremmet til admin"
  quickbox::dashboard::log "${text}"
} 