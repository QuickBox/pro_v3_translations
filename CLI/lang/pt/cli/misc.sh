#!/usr/bin/env bash
################################################################################
# Módulo de Mensagens Diversas
# Contém todas as mensagens utilitárias gerais, do sistema e diversas
################################################################################

quickbox::lang::unknown::option() {
  declare text="${2} Opção desconhecida: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::database() {
  declare text="atualizando banco de dados..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::trackers::disable() {
  declare text="desabilitando trackers públicos..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::trackers::enable() {
  declare text="habilitando trackers públicos..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::directory::nomove() {
  declare text="não foi possível mover para $1..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::package::fail() {
  declare text="não foi possível instalar o pacote necessário $1..."
  quickbox::dashboard::log "${text}"
}

quickbox::error::non-empty() {
  declare text="Erro: $1 requer um argumento não vazio"
  quickbox::dashboard::log "${text}"
}