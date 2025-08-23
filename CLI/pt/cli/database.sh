#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Project Name: QuickBox Pro
# File Name: cli_database_pt_br
# File Description: Arquivo de idioma português (Brasil) - Gerenciamento de Banco de Dados
# File Version: 1.0.7
#
# Save Tasks:
# Automated_Versioning: true
#
# Build Tasks:
# Automated_Comment_Strip: true
#
# Deploy Tasks:
# Automated_Encryption: false
#
# Author: Jason Matthews (JMSolo)
#
# License: BSD-3 (Available in LICENSE.md)
# Copyright (C) 2019-2025, QuickBox.IO
# All rights reserved.
# <END METADATA>
# shellcheck disable=2001,2034,2154,2312,2317
################################################################################

################################################################################
# Instalação de Banco de Dados - MySQL
################################################################################
quickbox::lang::db::install::prompt() {
  declare text="MySQL não está instalado. Você gostaria de instalar? [s/N]:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::apt() {
  declare text="Atualizando APT..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql_apt() {
  declare text="Baixando Configuração APT do MySQL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql_apt::fail() {
  declare text="Falha ao baixar Configuração APT do MySQL."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql_apt::install() {
  declare text="Instalando Configuração APT do MySQL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql_apt::install::fail() {
  declare text="Falha ao instalar pacote mysql-apt-config."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql() {
  declare text="Instalando MySQL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::fail() {
  declare text="Falha ao instalar MySQL."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::start::fail() {
  declare text="Falha ao iniciar MySQL."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::enable::fail() {
  declare text="Falha ao habilitar MySQL."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::success() {
  declare text="MySQL foi instalado."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::installed() {
  declare text="MySQL já está instalado, continuando com a configuração."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::config() {
  declare text="Atualizando configuração do MySQL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::config::backup() {
  declare text="Arquivo mysqld.cnf atual foi salvo como mysqld.cnf.backup."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::config::write() {
  declare text="[*] Definindo configuração do MySQL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::config::write::fail() {
  declare text="[✗] Falha ao escrever configuração do MySQL."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::privileges() {
  declare text="Definindo privilégios do MySQL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::privileges::fail() {
  declare text="Falha ao escrever privilégios do MySQL."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::client() {
  declare text="Definindo configuração do cliente MySQL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::client::fail() {
  declare text="Falha ao escrever configuração do cliente MySQL."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::reload::fail() {
  declare text="Falha ao recarregar daemon systemctl."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::enable() {
  declare text="Habilitando MySQL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::restart() {
  declare text="Reiniciando MySQL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::restart::fail() {
  declare text="Falha ao reiniciar MySQL."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::user() {
  declare text="Criando usuário MySQL ${mysql_user}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::user::fail() {
  declare text="Falha ao criar usuário MySQL."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::grant() {
  declare text="Concedendo privilégios ao usuário MySQL ${mysql_user}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::grant::fail() {
  declare text="Falha ao conceder privilégios ao usuário MySQL."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::flush() {
  declare text="Limpando privilégios..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::flush::fail() {
  declare text="Falha ao limpar privilégios."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::convert() {
  declare text="Convertendo banco de dados para MySQL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::convert::success() {
  declare text="Banco de dados foi convertido para MySQL."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::remove() {
  declare text="Você gostaria de remover o banco de dados SQLite? [s/N]:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::remove::fail() {
  declare text="Falha ao desabilitar SQLite no PHP."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::complete() {
  declare text="MySQL foi configurado."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::details() {
  declare text="Detalhes de Conexão MySQL:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::connection::details() {
  declare text="Usuário: ${mysql_user}
Senha: ${mysql_password}
Porta: ${mysql_port}
Host: ${mysql_host}
Banco de Dados: ${mysql_name}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::mycnf() {
  declare text="Esses detalhes podem ser encontrados em /root/.my.cnf"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Instalação de Banco de Dados - SQLite
################################################################################
quickbox::lang::db::install::sqlite::backup() {
  declare text="Fazendo backup do banco de dados SQLite..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::sqlite::backup::success() {
  declare text="Banco de dados SQLite foi salvo como ${sqlite_file}.${date}.backup"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::sqlite::convert() {
  declare text="Convertendo banco de dados para SQLite..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::sqlite::convert::success() {
  declare text="Banco de dados foi convertido para SQLite."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::sqlite::remove() {
  declare text="Você gostaria de remover MySQL completamente? [s/N]:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::sqlite::remove::mysql() {
  declare text="Você gostaria de remover o banco de dados MySQL? [s/N]:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::sqlite::php::fail() {
  declare text="Falha ao instalar SQLite no PHP."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::sqlite::php::enable::fail() {
  declare text="Falha ao habilitar SQLite no PHP."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::sqlite::complete() {
  declare text="Processo de conversão do banco de dados SQLite foi concluído."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::sqlite::invalid() {
  declare text="Opção inválida: ${option}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::sqlite::mysql::notfound() {
  declare text="Banco de dados MySQL não encontrado."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::install::mysql::sqlite::notfound() {
  declare text="Banco de dados SQLite não encontrado."
  quickbox::dashboard::log "${text}"
}

################################################################################
# Backup de Banco de Dados
################################################################################
quickbox::lang::db::backup::sqlite::integrity() {
  declare text="Verificando a integridade do banco de dados SQLite..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::backup::sqlite::integrity::pass() {
  declare text="Verificação de integridade do banco de dados passou."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::backup::sqlite::complete() {
  declare text="Backup concluído: ${full_backup_path}/qbpro.db"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::backup::sqlite::integrity::fail() {
  declare text="Verificação de integridade do banco de dados falhou. Nenhum backup foi criado."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::backup::sqlite::integrity::repair() {
  declare text="
    [AVISO] Reparo do Banco de Dados QuickBox!

    O Banco de Dados QuickBox falhou na verificação de integridade e o reparo foi tentado.

    Comando: REINDEX; VACUUM;

    Você pode encontrar os backups mais recentes em:
    /opt/quickbox/backup/system/[DATA]/db/qbpro.db

    Para deletar esta mensagem, execute o seguinte comando:
    rm -f /etc/quickbox_motd
"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::backup::mysql() {
  declare text="Fazendo backup do banco de dados MySQL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::backup::mysql::complete() {
  declare text="Backup MySQL concluído: ${full_backup_path}/qbpro.sql"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::backup::mysql::fail() {
  declare text="Backup MySQL falhou."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::backup::unsupported() {
  declare text="Tipo de banco de dados não suportado: ${db_type}. Nenhum backup foi criado."
  quickbox::dashboard::log "${text}"
}

################################################################################
# Manutenção de Banco de Dados
################################################################################
quickbox::lang::db::maintenance::sqlite::repair() {
  declare text="Tentando reparar o banco de dados SQLite..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::sqlite::repair::complete() {
  declare text="Reparo do banco de dados SQLite concluído."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::sqlite::repair::fail() {
  declare text="Falha ao reparar o banco de dados SQLite."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::sqlite::restore::complete() {
  declare text="Restauração do banco de dados SQLite concluída."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::backup::sqlite::integrity::restore() {
  declare text="
    [AVISO] Reparo do Banco de Dados QuickBox!

    O Banco de Dados QuickBox falhou na verificação de integridade e o reparo foi tentado.
    Backup válido anterior foi restaurado e permissões ajustadas.

    Você pode encontrar os backups mais recentes em:
    /opt/quickbox/backup/system/[DATA]/db/qbpro.db

    Para deletar esta mensagem, execute o seguinte comando:
    rm -f /etc/quickbox_motd
"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::sqlite() {
  declare text="Executando manutenção no banco de dados SQLite..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::sqlite::backup() {
  declare text="Fazendo backup do banco de dados antes da manutenção..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::sqlite::optimize() {
  declare text="Otimizando o banco de dados SQLite (VACUUM)..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::sqlite::optimize::complete() {
  declare text="Otimização do banco de dados SQLite concluída."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::sqlite::optimize::fail() {
  declare text="Falha ao otimizar o banco de dados SQLite."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::sqlite::integrity::fail() {
  declare text="Verificação de integridade do banco de dados falhou. Nenhuma manutenção foi executada."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::mysql() {
  declare text="Executando manutenção no banco de dados MySQL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::mysql::backup() {
  declare text="Fazendo backup do banco de dados MySQL antes da manutenção..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::mysql::backup::fail() {
  declare text="Backup MySQL falhou. Pulando manutenção."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::mysql::optimize() {
  declare text="Otimizando tabelas do banco de dados MySQL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::mysql::optimize::complete() {
  declare text="Otimização do banco de dados MySQL concluída."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::mysql::optimize::fail() {
  declare text="Falha ao otimizar o banco de dados MySQL."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::mysql::integrity() {
  declare text="Verificando a integridade do banco de dados MySQL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::mysql::integrity::pass() {
  declare text="Verificação de integridade do banco de dados MySQL passou."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::mysql::integrity::fail() {
  declare text="Verificação de integridade do banco de dados MySQL falhou."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::maintenance::unsupported() {
  declare text="Tipo de banco de dados não suportado: ${db_type}. Nenhuma manutenção foi executada."
  quickbox::dashboard::log "${text}"
}

################################################################################
# Restauração de Banco de Dados
################################################################################
quickbox::lang::db::restore::backup::error() {
  declare text="Diretório de backup não encontrado: ${backup_root}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::restore::backup::empty() {
  declare text="Nenhum backup encontrado no diretório de backup."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::restore::backup::select() {
  declare text="Selecione um backup para restaurar:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::restore::backup::number() {
  declare text="Digite o número do backup para restaurar: "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::restore::backup::invalid() {
  declare text="Seleção inválida. Por favor, tente novamente."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::restore::sqlite::success() {
  declare text="Banco de dados SQLite restaurado com sucesso de ${select_backup}."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::restore::sqlite::fail() {
  declare text="Falha ao restaurar o banco de dados SQLite."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::restore::mysql::success() {
  declare text="Banco de dados MySQL restaurado com sucesso de ${select_backup}."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::restore::mysql::fail() {
  declare text="Falha ao restaurar o banco de dados MySQL."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::db::restore::unsupported() {
  declare text="Tipo de banco de dados não suportado: ${db_type}. Nenhuma restauração foi executada."
  quickbox::dashboard::log "${text}"
}