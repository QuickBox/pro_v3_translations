#!/usr/bin/env bash
################################################################################
# Module de Messages WireGuard
# Contient tous les messages de configuration, gestion et configuration client WireGuard
################################################################################

quickbox::lang::wireguard::client_config() {
  declare text="configuration de la configuration client pour $1"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::server_config() {
  declare text="configuration de la configuration serveur pour $1"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::configure::client_ask() {
  declare text="Voulez-vous entrer une configuration client? (y/n)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::configure::client_paste() {
  declare text="Collez ou entrez la configuration client ci-dessous. Appuyez sur ctrl+D ou ⌘+D quand vous avez terminé pour continuer."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::configure::client_ask_extra() {
  declare text="Voulez-vous entrer une autre configuration client? (y/n)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::configure::client_ask_extra_error() {
  declare text="Entrée invalide. Veuillez entrer 'y' ou 'n'."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::mtuendpoint::error() {
  declare text="Erreur: --mtu et --endpoint sont requis pour le processus 'calc'"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::wireguard::manage::help() {
  declare text="
Gestion WireGuard QuickBox

Utilisation:
  qb manage wireguard [processus] [options]

Processus:
  add                                Ajouter une configuration client ou serveur
    -c    | --client                 Supprimer une configuration client WireGuard
    -s    | --server                 Supprimer la configuration serveur WireGuard
    -cn   | --client-name            Définir le nom du client pour la configuration client WireGuard (requis pour la configuration client '-c')
    -noc  | --number-of-clients      Définir le nombre de clients pour la configuration serveur WireGuard (par défaut: 1)
    -lp   | --listen-port            Définir le port d'écoute pour la configuration serveur WireGuard (par défaut: 51820)
    -mtu  | --mtu                    Définir le MTU pour la configuration serveur WireGuard
    -cai  | --client-allowed-ips     Définir les IPs autorisées pour la configuration client WireGuard (par défaut: 0.0.0.0/0, ::/0)
    -cidr | --cidr                   Définir la notation CIDR pour la configuration serveur WireGuard (par défaut: serveur - <ip_serveur>/24 | client - 10.5.0.2/16)
    -pur  | --post-up-rules          Définir les règles post-up pour la configuration serveur WireGuard
    -pdr  | --post-down-rules        Définir les règles post-down pour la configuration serveur WireGuard

  remove                             Supprimer une configuration client ou serveur
    -cn   | --client-name            Définir le nom du client pour la configuration client WireGuard

  check                              Vérifier les configurations client WireGuard actuellement chargées et en cours d'exécution
    -cn   | --client-name            Définir le nom du client pour la configuration client WireGuard
    --deactivate                     Désactiver la configuration client WireGuard

  cron                               Ajouter une tâche cron pour vérifier les fichiers de configuration WireGuard

  calc                               Calculer la notation CIDR et le MTU pour la configuration serveur
    --mtu                            Définir le MTU pour la configuration serveur WireGuard
    --endpoint                       Définir l'endpoint pour la configuration serveur WireGuard
    --protocol                       Définir le protocole pour la configuration serveur WireGuard (ipv4 ou ipv6)

  help                               Afficher ce message d'aide

Exemples:
  qb manage wireguard add -c -cn 'nom_client' -cai '0.0.0.0/0' -lp 51820
  qb manage wireguard add -s -noc 5 -lp 51820 -cidr '192.168.0.2/24' -pur 'iptables -A FORWARD -i wg0 -j ACCEPT; iptables -t nat -A POSTROUTING -o eth0 -j MASQUERADE'
  qb manage wireguard remove -cn 'nom_client'
  qb manage wireguard check -cn 'nom_client' --deactivate
  qb manage wireguard cron
  qb manage wireguard calc --mtu 1420 --endpoint '192.168.0.0' --protocol 'ipv4'
"
  quickbox::dashboard::log "${text}"
} 