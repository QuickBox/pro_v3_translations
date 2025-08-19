#!/usr/bin/env bash
################################################################################
# Módulo de Mensagens de Configuração de Software
# Contém todas as mensagens de configuração, configuração e tratamento especial de software
################################################################################

quickbox::lang::software::ombi_mysql_fallback() {
  declare text="[!] MySQL não está rodando ou indisponível, pulando remoção de DB/usuário, acionando fallback..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_user_skip() {
  declare text="[i] Pulando remoção de usuário MySQL: '${db_user}' está definido em /root/.my.cnf"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_user_remove() {
  declare text="[!] Removendo usuário MySQL: '${db_user}'"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_user_retain() {
  declare text="[i] Mantendo MySQL já que outros DBs ou usuários ainda podem existir."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_cleanup_complete() {
  declare text="[✓] Limpeza MySQL para ${software_name} concluída."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_fallback_remove() {
  declare text="[⚙] Executando remoção MySQL de fallback (não interativa)..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_remove() {
  declare text="[*] Removendo pacotes MySQL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_no_packages() {
  declare text="[i] Nenhum pacote MySQL encontrado para purgar."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_autoremove() {
  declare text="[*] Removendo automaticamente e limpando arquivos residuais..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_check() {
  declare text="[*] Verificando instalação MySQL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_install() {
  declare text="[*] Instalando configuração de repositório APT MySQL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_download_fail() {
  declare text="[✗] Falha ao baixar configuração APT MySQL"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_install_fail() {
  declare text="[✗] Falha ao instalar pacote mysql-apt-config"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_install_packages() {
  declare text="[*] Instalando pacotes MySQL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_install_retry() {
  declare text="[✗] Instalação MySQL falhou — tentando novamente após limpeza"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_install_failed() {
  declare text="[✗] Instalação MySQL falhou novamente"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_config() {
  declare text="[*] Criando arquivo de configuração MySQL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_start() {
  declare text="[*] Iniciando e habilitando serviço MySQL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_enable_fail() {
  declare text="[✗] Falha ao habilitar serviço MySQL"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_start_fail() {
  declare text="[✗] Falha ao iniciar serviço MySQL"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_config_fail() {
  declare text="[✗] Configuração MySQL /etc/mysql/my.cnf está ausente. Abortando configuração."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_wait() {
  declare text="[*] Aguardando socket MySQL estar pronto..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_socket_fail() {
  declare text="[✗] MySQL não iniciou corretamente — socket ausente"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_setup() {
  declare text="[*] Configurando usuário e banco de dados MySQL para ${db_user}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_configured() {
  declare text="[✓] MySQL configurado para usuário '${db_user}' com DB '${db_name}'"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_migration() {
  declare text="[⚙] Iniciando migração Ombi para MySQL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_temp_fail() {
  declare text="[✗] Falha ao criar diretório temporário"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_python_fail() {
  declare text="[✗] Python 3 e pip3 são necessários para migração"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_pip_fail() {
  declare text="[✗] Falha ao instalar pacotes Python necessários"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_chdir_fail() {
  declare text="[✗] Falha ao mudar diretório para ${TMP_DIR}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_clone() {
  declare text="[*] Clonando ferramenta de migração ombi_sqlite_mysql..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_clone_fail() {
  declare text="[✗] Falha ao clonar repositório ombi_sqlite_mysql"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_backup() {
  declare text="[!] Backup de ${db} criado em ${config_dir}/${db}.bak"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_dbjson_fail() {
  declare text="[✗] Falha ao gerar database.json"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_schema_fail() {
  declare text="[✗] Falha ao criar esquema DB via Ombi"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_migration_fail() {
  declare text="[✗] Falha ao criar migration.json"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_data_fail() {
  declare text="[✗] Migração de dados falhou"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_chdir_home_fail() {
  declare text="[✗] Falha ao mudar diretório de volta para ${HOME}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_remove_sqlite() {
  declare text="[!] Banco de dados SQLite antigo removido: ${config_dir}/${db}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_cleanup() {
  declare text="[*] Limpando arquivos temporários..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_migration_complete() {
  declare text="[✓] Migração Ombi para MySQL concluída com sucesso!"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plex_directory_warning() {
  declare text="o diretório de dados personalizado: '${software_install_directory}' já existe.
usando '${software_install_directory}/plex' em vez disso."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexclaim() {
  declare text="reivindicando servidor plex para ${username}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_credentials_header() {
  declare text="Por favor, insira suas credenciais Plex (Nome de usuário/Senha/2FA):"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_credentials_subheader() {
  declare text="Essas credenciais não serão salvas ou compartilhadas fora desta instância."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_credentials_email() {
  declare text="Email: "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_credentials_password() {
  declare text="Senha: "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_credentials_otp() {
  declare text="2FA: [Deixe em branco se 2FA não estiver configurado] "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_credentials_fail() {
  declare text="Nome de usuário e senha são necessários para baixar atualização PlexPass."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_credentials_incorrect() {
  declare text="Nome de usuário e/ou senha incorretos"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_credentials_loginfail() {
  declare text="Falha ao fazer login, informações de debug:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_credentials_retrievefail() {
  declare text="Não foi possível recuperar URL de download."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_credentials_parsefail() {
  declare text="Falha ao analisar resposta HTML."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_downloading() {
  declare text="Baixando atualização Plex..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_downloading_fail() {
  declare text="Download falhou com código de erro ${code}, ${error}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_installing() {
  declare text="Instalando nova versão Plex..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_updated() {
  declare text="Plex foi atualizado com sucesso."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_current() {
  declare text="Plex já está atualizado."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone_configure() {
  declare text="
Por favor, visite https://console.developers.google.com e crie um projeto.
Você precisará anotar seu client_id e client_secret.
Você também pode visitar o artigo da Base de Conhecimento abaixo para um passo a passo:
https://quickbox.io/knowledge-base/creating-a-google-api-client-id-client-secret-code/

Uma vez que você tenha tanto seu client_id quanto client_secret, pressione qualquer tecla para continuar.

"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone_entries() {
  declare text="Insira seus detalhes de conexão abaixo."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone_clientid() {
  declare text="Client ID: "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone_clientsecret() {
  declare text="Client Secret: "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone_encryptpass() {
  declare text="Senha de Criptografia: "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone_saltpass() {
  declare text="Senha Salt: "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone_salterror() {
  declare text="Senha salt não pode ser a mesma que a senha de criptografia."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone_confirm() {
  declare text="Por favor, confirme os seguintes detalhes antes de continuar..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone_clientid_confirm() {
  declare text="Client ID: ${clientvar}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone_clientsecret_confirm() {
  declare text="Client Secret: ${secretvar}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone_encryptpass_confirm() {
  declare text="Senha de Criptografia: ${encvar}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone_saltpass_confirm() {
  declare text="Senha Salt: ${saltvar}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone_continue() {
  declare text="Se você está satisfeito com as configurações acima, pressione Y para continuar..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::znc_configure() {
  declare text="A configuração ZNC será executada agora. Por favor, responda aos seguintes prompts:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::sonarrv4::update::error() {
  declare text
  text="$(tput setaf 7)Sonarr v4 $(tput setaf 1)não pode$(tput setaf 7) ser atualizado do v3.
Por favor, desinstale o v3 e instale o v4.$(tput sgr0)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::build::python311() {
  declare text="instalando python 3.11, por favor aguarde pois isso pode levar um momento..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::build::sabnzbd::par2cmdline() {
  declare text="instalando par2cmdline, por favor aguarde pois isso pode levar um momento..."
  quickbox::dashboard::log "${text}"
} 