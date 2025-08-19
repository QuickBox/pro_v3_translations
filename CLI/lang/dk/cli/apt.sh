#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Projektnavn: QuickBox Pro
# Filnavn: cli_apt_dk
# Filbeskrivelse: Dansk sprogfil - APT Pakkehåndtering
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
# APT Pakkehåndtering
################################################################################
quickbox::lang::apt::update::header() {
  declare text="kontrollerer og udfører apt opdateringer..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::apt::db::locked() {
  declare text="forsøger at løse dpkg lås..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::apt::update::completed() {
  declare text="apt-get opgradering fuldført succesfuldt"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::apt::check::failed() {
  declare text="apt-get kontrol fejlede, du kan have ødelagte pakker"
  quickbox::dashboard::log "${text}"
} 