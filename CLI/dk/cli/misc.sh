#!/usr/bin/env bash
################################################################################
# Diverse Meddelelser Modul
# Indeholder alle generelle hjælpeprogrammer, system og diverse meddelelser
################################################################################

quickbox::lang::unknown::option() {
	declare text="${2} Ukendt mulighed: ${1}"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::database() {
	declare text="opdaterer database..."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::trackers::disable() {
	declare text="deaktiverer offentlige trackere..."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::trackers::enable() {
	declare text="aktiverer offentlige trackere..."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::directory::nomove() {
	declare text="kan ikke flytte til $1..."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::package::fail() {
	declare text="kunne ikke installere et påkrævet pakke $1..."
	quickbox::dashboard::log "${text}"
}

quickbox::error::non-empty() {
	declare text="Fejl: $1 kræver et ikke-tomt argument"
	quickbox::dashboard::log "${text}"
}
