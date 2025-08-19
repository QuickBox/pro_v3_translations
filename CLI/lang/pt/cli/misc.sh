#!/usr/bin/env bash
################################################################################
# Módulo de Mensagens Diversas
# Contém todas as mensagens utilitárias gerais, do sistema e diversas
################################################################################

quickbox::lang::unknown::option() {
  declare text="${2} Opção desconhecida: ${1}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::username::specified() {
  declare text="erro: nome de usuário não especificado"
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

quickbox::lang::directory::noexist() {
  declare text="diretório necessário não existe..."
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

quickbox::lang::nvpn::conf::generator::usage() {
  declare text="
Gerador de Configuração NordVPN WireGuard

Uso:
  nvpn_conf_gen -t 'token_privado' [-dns 'dns_preferido'] [-c 'nome_do_país'] [-L 'número_de_configurações'] [-l] [-h]

Opções:
  -t   | --token    Token privado NordVPN
  -dns | --dns      DNS preferido (padrão: 103.86.96.100)
  -c   | --country  Nome do país preferido (use --list para listar países disponíveis)
  -L   | --limit    Limitar o número de configurações a criar (padrão: 5)
  -l   | --list     Listar países disponíveis para conexões WireGuard
  -h   | --help     Exibir esta mensagem de ajuda

Exemplo:
  nvpn_conf_gen -t 'seu_token' -c 'Estados Unidos' -L 10

Notas:
  - O token pode ser gerado em:
    https://my.nordaccount.com/dashboard/nordvpn/manual-configuration/
  - Os arquivos de configuração serão salvos em '${wg_conf_storage_dir}'
"
  quickbox::dashboard::log "${text}"
}

quickbox::error::non-empty() {
  declare text="Erro: $1 requer um argumento não vazio"
  quickbox::dashboard::log "${text}"
} 