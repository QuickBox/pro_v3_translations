#!/usr/bin/env bash
################################################################################
# Módulo de Mensajes WireGuard
# Contiene todos los mensajes de configuración, gestión y configuración de cliente de WireGuard
################################################################################

quickbox::lang::wireguard::client_config() {
  declare text="configurando configuración de cliente para $1"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::server_config() {
  declare text="configurando configuración de servidor para $1"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::configure::client_ask() {
  declare text="¿Quieres ingresar una configuración de cliente? (y/n)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::configure::client_paste() {
  declare text="Pega o ingresa la configuración del cliente abajo. Presiona ctrl+D o ⌘+D cuando termines para continuar."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::configure::client_ask_extra() {
  declare text="¿Quieres ingresar otra configuración de cliente? (y/n)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::configure::client_ask_extra_error() {
  declare text="Entrada inválida. Por favor ingresa 'y' o 'n'."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::mtuendpoint::error() {
  declare text="Error: --mtu y --endpoint son requeridos para el proceso 'calc'"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::manage::help() {
  declare text="
Gestión de WireGuard de QuickBox

Uso:
  qb manage wireguard [proceso] [opciones]

Procesos:
  add                                Agregar una configuración de cliente o servidor
    -c    | --client                 Remover una configuración de cliente WireGuard
    -s    | --server                 Remover la configuración de servidor WireGuard
    -cn   | --client-name            Establecer el nombre del cliente para la configuración de cliente WireGuard (requerido para configuración de cliente '-c')
    -noc  | --number-of-clients      Establecer el número de clientes para la configuración de servidor WireGuard (predeterminado: 1)
    -lp   | --listen-port            Establecer el puerto de escucha para la configuración de servidor WireGuard (predeterminado: 51820)
    -mtu  | --mtu                    Establecer el MTU para la configuración de servidor WireGuard
    -cai  | --client-allowed-ips     Establecer las IPs permitidas para la configuración de cliente WireGuard (predeterminado: 0.0.0.0/0, ::/0)
    -cidr | --cidr                   Establecer la notación CIDR para la configuración de servidor WireGuard (predeterminado: servidor - <ip_servidor>/24 | cliente - 10.5.0.2/16)
    -pur  | --post-up-rules          Establecer las reglas post-up para la configuración de servidor WireGuard
    -pdr  | --post-down-rules        Establecer las reglas post-down para la configuración de servidor WireGuard

  remove                             Remover una configuración de cliente o servidor
    -cn   | --client-name            Establecer el nombre del cliente para la configuración de cliente WireGuard

  check                              Verificar las configuraciones de cliente WireGuard cargadas y ejecutándose actualmente
    -cn   | --client-name            Establecer el nombre del cliente para la configuración de cliente WireGuard
    --deactivate                     Desactivar la configuración de cliente WireGuard

  cron                               Agregar un trabajo cron para verificar los archivos de configuración de WireGuard

  calc                               Calcular la notación CIDR y MTU para la configuración del servidor
    --mtu                            Establecer el MTU para la configuración de servidor WireGuard
    --endpoint                       Establecer el endpoint para la configuración de servidor WireGuard
    --protocol                       Establecer el protocolo para la configuración de servidor WireGuard (ipv4 o ipv6)

  help                               Mostrar este mensaje de ayuda

Ejemplos:
  qb manage wireguard add -c -cn 'nombre_cliente' -cai '0.0.0.0/0' -lp 51820
  qb manage wireguard add -s -noc 5 -lp 51820 -cidr '192.168.0.2/24' -pur 'iptables -A FORWARD -i wg0 -j ACCEPT; iptables -t nat -A POSTROUTING -o eth0 -j MASQUERADE'
  qb manage wireguard remove -cn 'nombre_cliente'
  qb manage wireguard check -cn 'nombre_cliente' --deactivate
  qb manage wireguard cron
  qb manage wireguard calc --mtu 1420 --endpoint '192.168.0.0' --protocol 'ipv4'
"
  quickbox::dashboard::log "${text}"
} 