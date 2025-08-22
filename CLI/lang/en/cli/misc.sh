#!/usr/bin/env bash
################################################################################
# Miscellaneous Messages Module
# Contains all general utility, system, and miscellaneous messages
################################################################################

quickbox::lang::unknown::option() {
	declare text="${2} Unknown option: ${1}"
	quickbox::dashboard::log "${text}"
}

quickbox::lang::database() {
	declare text="updating database..."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::trackers::disable() {
	declare text="disabling public trackers..."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::trackers::enable() {
	declare text="enabling public trackers..."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::directory::nomove() {
	declare text="unable to move to $1..."
	quickbox::dashboard::log "${text}"
}

quickbox::lang::package::fail() {
	declare text="could not install a required package $1..."
	quickbox::dashboard::log "${text}"
}

quickbox::error::non-empty() {
	declare text="Error: $1 requires a non-empty argument"
	quickbox::dashboard::log "${text}"
}
