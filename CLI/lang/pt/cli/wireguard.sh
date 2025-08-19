#!/usr/bin/env bash
################################################################################
# Módulo de Mensagens WireGuard
# Contém todas as mensagens de configuração, gerenciamento e configuração de cliente do WireGuard
################################################################################

quickbox::lang::wireguard::client_config() {
  declare text="configurando configuração do cliente para $1"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::server_config() {
  declare text="configurando configuração do servidor para $1"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::configure::client_ask() {
  declare text="Você quer inserir uma configuração de cliente? (s/n)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::configure::client_paste() {
  declare text="Cole ou insira a configuração do cliente abaixo. Pressione ctrl+D ou ⌘+D quando terminar para continuar."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::configure::client_ask_extra() {
  declare text="Você quer inserir outra configuração de cliente? (s/n)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::configure::client_ask_extra_error() {
  declare text="Entrada inválida. Por favor, insira 's' ou 'n'."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::mtuendpoint::error() {
  declare text="Erro: --mtu e --endpoint são necessários para o processo 'calc'"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::manage::help() {
  declare text="
Gerenciamento WireGuard QuickBox

Uso:
  qb manage wireguard [processo] [opções]

Processos:
  add                                Adicionar uma configuração de cliente ou servidor
    -c    | --client                 Remover uma configuração de cliente WireGuard
    -s    | --server                 Remover a configuração do servidor WireGuard
    -cn   | --client-name            Definir o nome do cliente para a configuração do cliente WireGuard (necessário para configuração '-c' cliente)
    -noc  | --number-of-clients      Definir o número de clientes para a configuração do servidor WireGuard (padrão: 1)
    -lp   | --listen-port            Definir a porta de escuta para a configuração do servidor WireGuard (padrão: 51820)
    -mtu  | --mtu                    Definir o MTU para a configuração do servidor WireGuard
    -cai  | --client-allowed-ips     Definir os IPs permitidos para a configuração do cliente WireGuard (padrão: 0.0.0.0/0, ::/0)
    -cidr | --cidr                   Definir a notação CIDR para a configuração do servidor WireGuard (padrão: servidor - <ip_servidor>/24 | cliente - 10.5.0.2/16)
    -pur  | --post-up-rules          Definir as regras post-up para a configuração do servidor WireGuard
    -pdr  | --post-down-rules        Definir as regras post-down para a configuração do servidor WireGuard

  remove                             Remover uma configuração de cliente ou servidor
    -cn   | --client-name            Definir o nome do cliente para a configuração do cliente WireGuard

  check                              Verificar as configurações de cliente WireGuard atualmente carregadas e em execução
    -cn   | --client-name            Definir o nome do cliente para a configuração do cliente WireGuard
    --deactivate                     Desativar a configuração do cliente WireGuard

  cron                               Adicionar uma tarefa cron para verificar os arquivos de configuração WireGuard

  calc                               Calcular a notação CIDR e MTU para a configuração do servidor
    --mtu                            Definir o MTU para a configuração do servidor WireGuard
    --endpoint                       Definir o endpoint para a configuração do servidor WireGuard
    --protocol                       Definir o protocolo para a configuração do servidor WireGuard (ipv4 ou ipv6)

  help                               Exibir esta mensagem de ajuda

Exemplos:
  qb manage wireguard add -c -cn 'nome_cliente' -cai '0.0.0.0/0' -lp 51820
  qb manage wireguard add -s -noc 5 -lp 51820 -cidr '192.168.0.2/24' -pur 'iptables -A FORWARD -i wg0 -j ACCEPT; iptables -t nat -A POSTROUTING -o eth0 -j MASQUERADE'
  qb manage wireguard remove -cn 'nome_cliente'
  qb manage wireguard check -cn 'nome_cliente' --deactivate
  qb manage wireguard cron
  qb manage wireguard calc --mtu 1420 --endpoint '192.168.0.0' --protocol 'ipv4'
"
  quickbox::dashboard::log "${text}"
} 