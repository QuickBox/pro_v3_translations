#!/usr/bin/env bash
################################################################################
# Módulo de Mensagens de Ajuda
# Contém todas as funções de geração de texto de ajuda e mensagens de ajuda específicas do software
################################################################################

# Função para gerar texto de ajuda baseado nas opções fornecidas
generate_help_text() {
  local software_title="$1"
  local software_name="$2"
  local has_update="$3"
  local options="$4"
  local examples="$5"
  local notes="$6"

  local processes="  install    Instalar ${software_title}
  reinstall  Reinstalar ${software_title}
  remove     Remover ${software_title}"

  if [[ ${has_update} == 1 ]]; then
    processes="${processes}
  update     Atualizar ${software_title}"
  fi

  processes="${processes}
  help       Exibir esta mensagem de ajuda"

  declare text="
Gerenciamento de Software QuickBox para ${software_title}

Uso:
  qb [processo] ${software_name} [opções]

Processos:
${processes}

Opções:
${options}

Exemplos:
${examples}
${notes}
"
  quickbox::dashboard::log "${text}"
}

# Função para obter texto de ajuda para software específico
quickbox::software::help() {
  local software_help_name="$1"
  local software_title="${software_help_name^}" # Capitalizar a primeira letra
  local has_update

  case "${software_help_name}" in
  emby | jellyfin)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username  Definir o nome de usuário para ${software_title} (obrigatório)
  -d | --domain    Definir o domínio para ${software_title}
  --beta           Instalar a versão beta do ${software_title}" \
      "  qb install ${software_help_name} -u username -d '${software_help_name}.domain.com'
  qb reinstall ${software_help_name} -u username -d '${software_help_name}.domain.com'
  qb install ${software_help_name} -u username --beta
  qb reinstall ${software_help_name} -u username --beta
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username

  ## Usar múltiplas opções
  qb install ${software_help_name} -u username -d '${software_help_name}.domain.com' --beta
  qb reinstall ${software_help_name} -u username -d '${software_help_name}.domain.com' --beta" \
      "
Notas:
  - Ao instalar ou reinstalar com a opção de domínio, o proxy reverso Nginx será configurado automaticamente.
      * Certifique-se de que o domínio está apontando para o endereço IP do servidor e os registros DNS apropriados estão configurados."
    ;;

  mylar3)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u   | --username             Definir o nome de usuário para ${software_title} (obrigatório)
  -clp | --comic-location-path  Definir o caminho de localização para quadrinhos (padrão: /home/username/Media/Comics)" \
      "  qb install ${software_help_name} -u username -clp '/caminho/para/quadrinhos'
  qb reinstall ${software_help_name} -u username -clp '/caminho/para/quadrinhos'
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username" \
      ""
    ;;

  radarr | sonarr)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username  Definir o nome de usuário para ${software_title} (obrigatório)
  --4k             Definir a instalação de build para 4k (padrão: 1080p)
  --nightly        Definir a instalação de build na branch nightly (padrão: latest)" \
      "  qb install ${software_help_name} -u username              # Instalar instalação padrão (1080p)
  qb install ${software_help_name} -u username --4k         # Instalar instalação 4k
  qb reinstall ${software_help_name} -u username --nightly  # Reinstalar instalação nightly
  qb reinstall ${software_help_name} -u username --4k       # Reinstalar instalação 4k
  qb remove ${software_help_name} -u username               # Remover instalação padrão (1080p)
  qb remove ${software_help_name} -u username --4k          # Remover instalação 4k
  qb update ${software_help_name} -u username               # Atualizar instalação padrão (1080p)
  qb update ${software_help_name} -u username --4k          # Atualizar instalação 4k

  ## Usar múltiplas opções
  qb install ${software_help_name} -u username --4k --nightly    # Instalar instalação 4k na branch nightly
  qb reinstall ${software_help_name} -u username --4k --nightly  # Reinstalar instalação 4k na branch nightly
  qb update ${software_help_name} -u username --4k --nightly     # Atualizar instalação 4k para/da nightly" \
      ""
    ;;

  calibre | kavita)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u  | --username      Definir o nome de usuário para ${software_title} (obrigatório)
  -lp | --library-path  Definir o caminho de localização para sua biblioteca (padrão: /home/username/.config/${software_title}/library)" \
      "  qb install ${software_help_name} -u username -lp '/caminho/para/biblioteca'
  qb reinstall ${software_help_name} -u username -lp '/caminho/para/biblioteca'
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username" \
      ""
    ;;

  plex)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u   | --username          Definir o nome de usuário para ${software_title} (obrigatório)
  -pct | --plex-claim-token  Definir o Token de Reivindicação Plex para ${software_title} (obrigatório para reivindicação rápida)
  -d   | --domain            Definir o domínio para ${software_title}
  -D   | --data-dir          Definir o diretório de dados para ${software_title} (padrão: /home/username/.config/'Plex Media Server')" \
      "  qb install ${software_help_name} -u username -pct 'token_reivindicacao' -d 'plex.domain.com' -D '/caminho/para/dados'
  qb reinstall ${software_help_name} -u username -pct 'token_reivindicacao' -d 'plex.domain.com' -D '/caminho/para/dados'
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username" \
      "
Notas:
  - O Token de Reivindicação Plex pode ser obtido em:
      https://www.plex.tv/claim/

  - Evite definir o diretório de dados para um diretório existente como:
      /opt, /opt/username, /mnt, /home, /home/username, e assim por diante.

  - É seguro criar um novo diretório de dados dentro de diretórios existentes como:
      /opt/plex, /opt/username/plex, /mnt/plex, /data/plex, e assim por diante.

  - O diretório de dados será criado se não existir.

  - O diretório de dados será propriedade do usuário e grupo do nome de usuário.

  - Ao instalar ou reinstalar com a opção de domínio, o proxy reverso Nginx será configurado automaticamente.
      * Certifique-se de que o domínio está apontando para o endereço IP do servidor e os registros DNS apropriados estão configurados.

  - Ao atualizar, você será solicitado a inserir seu email plex.tv, senha, bem como código 2FA."
    ;;

  bazarr)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username  Definir o nome de usuário para ${software_title} (obrigatório)
  --4k             Definir a instalação de build para 4k (padrão: 1080p)" \
      "  qb install ${software_help_name} -u username                 # Instalar instalação padrão (1080p)
  qb install ${software_help_name} -u username --4k            # Instalar instalação 4k
  qb reinstall ${software_help_name} -u username               # Reinstalar instalação padrão (1080p)
  qb reinstall ${software_help_name} -u username --4k          # Reinstalar instalação 4k
  qb remove ${software_help_name} -u username                  # Remover instalação padrão (1080p)
  qb remove ${software_help_name} -u username --4k             # Remover instalação 4k
  qb update ${software_help_name} -u username                  # Atualizar instalação padrão (1080p)
  qb update ${software_help_name} -u username --4k             # Atualizar instalação 4k" \
      ""
    ;;

  autodl | x2go)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "" \
      "  qb install ${software_help_name}
  qb reinstall ${software_help_name}
  qb remove ${software_help_name}
  qb update ${software_help_name}" \
      ""
    ;;

  fail2ban)
    has_update=0
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "" \
      "  qb install ${software_help_name}
  qb reinstall ${software_help_name}
  qb remove ${software_help_name}" \
      ""
    ;;

  filebot)
    has_update=0
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u  | --username    Definir o nome de usuário para ${software_title} (obrigatório)
  -mp | --media-path  Definir o caminho de mídia para ${software_title} (padrão: /home/username/Media)
  -o 'deluge'         Instalar ${software_title} com integração Deluge
  -o 'nzbget'         Instalar ${software_title} com integração NZBGet
  -o 'rtorrent'       Instalar ${software_title} com integração rTorrent
  -o 'sabnzbd'        Instalar ${software_title} com integração SABnzbd" \
      "  qb install ${software_help_name} -u username
  qb reinstall ${software_help_name} -u username
  qb remove ${software_help_name} -u username

  ## Usar múltiplas opções
  qb install ${software_help_name} -u username -o 'deluge' -o 'nzbget'
  qb reinstall ${software_help_name} -u username -o 'rtorrent' -o 'sabnzbd'" \
      ""
    ;;

  jdownloader)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u  | --username       Definir o nome de usuário para ${software_title} (obrigatório)
  -e  | --email          Definir o email para ${software_title} (obrigatório) .i.
  -p  | --password       Definir a senha para ${software_title} (obrigatório) .ii.
  -D  | --downloads-dir  Definir o caminho de downloads para ${software_title} (padrão: /home/username/Downloads)" \
      "  qb install ${software_help_name} -u username -e 'email' -p 'senha' -D '/caminho/para/downloads'
  qb reinstall ${software_help_name} -u username -e 'email' -p 'senha' -D '/caminho/para/downloads'
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username" \
      "
Notas:
  - .i. O email e senha são obrigatórios para instalação do JDownloader.
      * .ii. estas são as credenciais para sua conta MyJDownloader."
    ;;

  jellyseerr | komga | overseerr)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u  | --username  Definir o nome de usuário para ${software_title} (obrigatório)
  -d  | --domain    Definir o domínio para ${software_title}" \
      "  qb install ${software_help_name} -u username -d '${software_help_name}.domain.com'
  qb reinstall ${software_help_name} -u username -d '${software_help_name}.domain.com'
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username" \
      "
Notas:
  - Ao instalar ou reinstalar com a opção de domínio [-d], o proxy reverso Nginx será configurado automaticamente.
      * Certifique-se de que o domínio está apontando para o endereço IP do servidor e os registros DNS apropriados estão configurados."
    ;;

  lecert)
    has_update=0
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  --dash          Instalar um certificado para o domínio especificado com '-d' e criar um proxy reverso para o dashboard QuickBox
  --no-dash       Instalar um certificado para um domínio personalizado especificado com '-d' (apenas certificado, sem proxy reverso)
  --emby          Instalar um certificado para o domínio especificado com '-d' e criar um proxy reverso para Emby
  --jellyfin      Instalar um certificado para o domínio especificado com '-d' e criar um proxy reverso para Jellyfin
  --jellyseerr    Instalar um certificado para o domínio especificado com '-d' e criar um proxy reverso para Jellyseerr
  --komga         Instalar um certificado para o domínio especificado com '-d' e criar um proxy reverso para Komga
  --overseerr     Instalar um certificado para o domínio especificado com '-d' e criar um proxy reverso para Overseerr
  --plex          Instalar um certificado para o domínio especificado com '-d' e criar um proxy reverso para Plex

  Métodos de Desafio:
  --dns           Usar desafio DNS em vez de desafio HTTP (permite certificados wildcard)
  --dns-provider  Provedor DNS para validação de desafio DNS
                  Provedores suportados: cloudflare (cf), route53, godaddy, namecheap, digitalocean (do),
                  linode, ovh, vultr, gandi, dnsimple, hurricane (he), azure, gcp, ionos

  Opções de Domínio:
  -d  | --domain  Definir o domínio para ${software_title} (suporta wildcards com desafio DNS)" \
      "  # Exemplos de desafio HTTP padrão
  qb install ${software_help_name} --dash -d 'example.com'
  qb install ${software_help_name} --jellyfin -d 'jellyfin.example.com' --plex -d 'plex.example.com'

  # Exemplos de desafio DNS (para certificados wildcard)
  qb install ${software_help_name} --dash -d '*.example.com' --dns --dns-provider cloudflare
  qb install ${software_help_name} --jellyseerr -d '*.movies.example.com' --dns --dns-provider route53
  qb install ${software_help_name} --plex -d '*.media.example.com' --dns --dns-provider vultr
  qb install ${software_help_name} --komga -d '*.books.example.com' --dns --dns-provider gandi

  # Múltiplos domínios em comando único
  qb install ${software_help_name} --dash -d 'example.com' --overseerr -d 'requests.example.com'

  # Gerenciamento de certificados
  qb reinstall ${software_help_name} --plex -d 'plex.example.com' --dns --dns-provider godaddy
  qb remove ${software_help_name} --emby -d 'emby.example.com'
  qb renew ${software_help_name} -d 'domain1.com' -d 'domain2.com'" \
      "
Configuração de Desafio DNS:
  Configure as credenciais do seu provedor DNS usando um destes métodos:

  Método 1 - Dashboard QuickBox (Recomendado):
    Navegue até Controle SSL no dashboard web do QuickBox
    Selecione Desafio DNS, escolha seu provedor e insira as credenciais
    O dashboard armazenará as credenciais de forma segura para uso futuro

  Método 2 - Configuração CLI:
    qb dns-credentials setup cloudflare
    Siga os prompts interativos para configurar suas credenciais

  Método 3 - Variáveis de Ambiente (uso único):
    export CF_Token='seu_token_api_cloudflare' && qb install lecert --dash -d '*.example.com' --dns --dns-provider cloudflare

  Credenciais específicas do provedor:

  Cloudflare (Recomendado):
    export CF_Token='seu_token_api_cloudflare'
    # OU (método legado)
    export CF_Email='seu@email.com'
    export CF_Key='sua_chave_api_global'

  AWS Route53:
    export AWS_ACCESS_KEY_ID='sua_chave_de_acesso'
    export AWS_SECRET_ACCESS_KEY='sua_chave_secreta'

  GoDaddy:
    export GD_Key='sua_chave_api'
    export GD_Secret='seu_segredo_api'

  NameCheap:
    export Namecheap_Username='seu_nome_usuario'
    export Namecheap_ApiKey='sua_chave_api'

  DigitalOcean:
    export DO_API_KEY='seu_token_api'

  Linode:
    export LINODE_V4_API_KEY='sua_chave_api'

  OVH:
    export OVH_AK='sua_chave_aplicacao'
    export OVH_AS='seu_segredo_aplicacao'
    export OVH_CK='sua_chave_consumidor'

  Vultr:
    export VULTR_API_KEY='sua_chave_api'

  Gandi:
    export GANDI_LIVEDNS_KEY='sua_chave_api'

  DNSimple:
    export DNSimple_OAUTH_TOKEN='seu_token_oauth'

  Hurricane Electric (he):
    export HE_Username='seu_nome_usuario'
    export HE_Password='sua_senha'

  Microsoft Azure:
    export AZUREDNS_SUBSCRIPTIONID='seu_id_assinatura'
    export AZUREDNS_TENANTID='seu_id_tenant'
    export AZUREDNS_APPID='seu_id_app'
    export AZUREDNS_CLIENTSECRET='seu_segredo_cliente'

  Google Cloud Platform:
    export GCP_PROJECT='seu_id_projeto'
    export GCP_SERVICE_ACCOUNT_JSON_FILE='/caminho/para/service-account.json'

  IONOS:
    export IONOS_PREFIX='seu_prefixo'
    export IONOS_SECRET='seu_segredo'

Características Principais:
  • Desafio HTTP: Método padrão, requer portas 80/443 acessíveis
  • Desafio DNS: Para certificados wildcard (*.domain.com) e redes restritas
  • Configuração automática de proxy reverso Nginx para aplicações suportadas
  • Instalação de certificado multi-domínio em comando único
  • Renovação de certificado com 'qb renew lecert'
  • Armazenamento e gerenciamento seguro de credenciais

Requisitos:
  • Domínio deve apontar para endereço IP do servidor com registros DNS apropriados
  • Para desafio DNS: Credenciais válidas do provedor DNS devem ser configuradas
  • Para certificados wildcard: Desafio DNS é obrigatório
  • Certifique-se de que o firewall permite tráfego HTTP (80) e HTTPS (443) para desafio HTTP

Solução de Problemas:
  • Verificar propagação DNS: 'dig domain.com' ou 'nslookup domain.com'
  • Verificar credenciais: Use 'qb dns-credentials check [provedor]' para verificar credenciais armazenadas
  • Verificar status do certificado: Use 'qb dns-credentials status' para visualizar certificados instalados
  • Limites de taxa: Let's Encrypt tem limites de taxa - evite muitas solicitações por hora
  • Validação de domínio: Certifique-se de que o domínio está configurado corretamente no seu provedor DNS"
    ;;

  lidarr | readarr)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username  Definir o nome de usuário para ${software_title} (obrigatório)
  --nightly        Definir a instalação de build na branch nightly (padrão: latest)" \
      "  qb install ${software_help_name} -u username                 # Instalar instalação padrão (latest)
  qb install ${software_help_name} -u username --nightly       # Instalar instalação nightly
  qb reinstall ${software_help_name} -u username               # Reinstalar instalação padrão (latest)
  qb reinstall ${software_help_name} -u username --nightly     # Reinstalar instalação nightly
  qb remove ${software_help_name} -u username                  # Remover instalação atual
  qb update ${software_help_name} -u username                  # Atualizar instalação padrão (latest)
  qb update ${software_help_name} -u username --nightly        # Atualizar para/da instalação nightly" \
      ""
    ;;

  ombi)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username          Definir o nome de usuário para ${software_title} (obrigatório)
  --ombi2mysql             Migrar dados do Ombi para MySQL
  --phmyadmin              Instalar phpMyAdmin para migração do Ombi
  --mysql-user=<username>  Definir o nome de usuário MySQL para migração do Ombi (padrão: nome de usuário especificado com -u)
  --mysql-pass=<password>  Definir a senha MySQL para migração do Ombi (padrão: gerada aleatoriamente)
  --mysql-host=<host>      Definir o host MySQL para migração do Ombi (padrão: localhost)
  --mysql-port=<port>      Definir a porta MySQL para migração do Ombi (padrão: 3306)
  --mysql-db=<database>    Definir o banco de dados MySQL para migração do Ombi (padrão: Ombi)" \
      "  qb install ${software_help_name} -u username
  qb reinstall ${software_help_name} -u username
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username --ombi2mysql --phpmyadmin" \
      "
Notas:
  - A opção --ombi2mysql migrará os dados do Ombi para MySQL.
    * Isso requer que o nome de usuário, senha, host, porta e banco de dados MySQL sejam especificados.
    * Se nenhum for especificado, os valores padrão serão usados:
      - Usuário MySQL: Nome de usuário (da opção -u)
      - Senha MySQL: Senha gerada aleatoriamente
      - Host MySQL: localhost
      - Porta MySQL: 3306
      - Banco de Dados MySQL: Ombi

  - A opção --phpmyadmin instalará phpMyAdmin para migração do Ombi.
    * Isso permitirá que você gerencie o banco de dados MySQL do Ombi via webUI /phpMyAdmin.
  - As opções --mysql-user, --mysql-pass, --mysql-host, --mysql-port e --mysql-db são opcionais.
    * Se especificadas, elas substituirão os valores padrão.

  - O Ombi é instalado com suporte SQLite por padrão.
  - O suporte MySQL está disponível apenas ao usar a opção --ombi2mysql no processo de atualização."
    ;;

  phpmyadmin)
    has_update=0
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username  Definir o nome de usuário para ${software_title} (obrigatório)
  --pma-user       Definir o nome de usuário phpMyAdmin (padrão: nome de usuário especificado com -u)
  --pma-pass       Definir a senha phpMyAdmin (padrão: gerada aleatoriamente)
  --pma-host       Definir o host phpMyAdmin (padrão: localhost)" \
      "  qb install ${software_help_name} -u username --pma-user 'pma_user' --pma-pass 'pma_pass' --pma-host 'localhost'
  qb reinstall ${software_help_name} -u username --pma-user 'pma_user' --pma-pass 'pma_pass' --pma-host 'localhost'
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username" \
      "
Notas:
  - O nome de usuário e senha do phpMyAdmin são opcionais.
    * Se não especificados, os valores padrão serão usados:
      - Usuário phpMyAdmin: Nome de usuário (da opção -u)
      - Senha phpMyAdmin: Senha gerada aleatoriamente
      - Host phpMyAdmin: localhost"
    ;;

  quota)
    has_update=0
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -qm | --quota-mount  Definir o ponto de montagem do sistema para ${software_title} (obrigatório)" \
      "  qb install ${software_help_name} -qm '/caminho/para/ponto/montagem'
  qb reinstall ${software_help_name} -qm '/caminho/para/ponto/montagem'
  qb remove ${software_help_name}" \
      ""
    ;;

  rclone)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username  Definir o nome de usuário para ${software_title} (obrigatório)
  --dropbox        Instalar ${software_title} com integração Dropbox
  --gdrive         Instalar ${software_title} com integração Google Drive
  --encrypted      Instalar ${software_title} com criptografia
  --beta           Instalar a versão beta do ${software_title}" \
      "  qb install ${software_help_name} -u username --dropbox
  qb install ${software_help_name} -u username --beta --gdrive
  qb reinstall ${software_help_name} -u username --dropbox --encrypted
  qb reinstall ${software_help_name} -u username --gdrive
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username" \
      "
Notas:
  - É recomendado usar apenas a opção --dropbox ou --gdrive em uma única passagem de instalação.
     * Isso evitará conflitos com a configuração do rclone.

  - Ao instalar com a opção --dropbox ou --gdrive, a configuração do rclone será criada automaticamente.

  - Ao instalar com a opção --encrypted, a configuração do rclone será criptografada usando as informações especificadas.

  - Ao instalar com a opção --beta, a versão beta do rclone será instalada."
    ;;

  requestrr | vpn)
    has_update=0
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username  Definir o nome de usuário para ${software_title} (obrigatório)" \
      "  qb install ${software_help_name} -u username
  qb reinstall ${software_help_name} -u username
  qb remove ${software_help_name} -u username" \
      ""
    ;;

  rtorrent)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username    Definir o nome de usuário para ${software_title} (obrigatório)
  -o '0.15.1'        Instalar versão 0.15.1
  -o '0.10.0'        Instalar versão 0.10.0
  -o '0.9.8'         Instalar versão 0.9.8
  -o '0.9.7'         Instalar versão 0.9.7
  -o '0.9.6'         Instalar versão 0.9.6
  -o 'feature-bind'  Instalar a versão feature-bind do ${software_title}" \
      "  qb install ${software_help_name} -u username -o '0.15.1'
  qb install ${software_help_name} -u username -o '0.10.0'
  qb install ${software_help_name} -u username -o '0.9.8'
  qb install ${software_help_name} -u username -o '0.9.7'
  qb reinstall ${software_help_name} -u username -o '0.9.6'
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username -o '0.15.1'
  qb update ${software_help_name} -u username -o 'feature-bind'" \
      "
Notas:
  - rTorrent é uma aplicação instalada globalmente e estará disponível para todos os usuários no servidor.

  - A versão feature-bind do rTorrent é uma compilação personalizada que inclui o recurso bind.
     * O recurso bind permite que você vincule o rTorrent a um endereço IP específico."
    ;;

  rutorrent)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username    Definir o nome de usuário para ${software_title} (obrigatório)
  --beta             Instalar a versão beta do ${software_title}" \
      "  qb install ${software_help_name} -u username
  qb reinstall ${software_help_name} -u username
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username --beta" \
      "
Notas:
  - ruTorrent é uma aplicação instalada globalmente e estará disponível para todos os usuários no servidor.

  - ruTorrent é parte do processo de instalação do rTorrent, e ao instalar rTorrent
    ruTorrent será instalado com a versão mais recente por padrão. Se rTorrent não estiver instalado,
    então ruTorrent instalará a versão 0.9.8.

  - rutorrent será instalado com a versão mais recente por padrão. Se você deseja instalar a versão beta,
	você pode usar a opção --beta. Tenha em mente que as duas versões nem sempre são diferentes."
    ;;

  sabnzbd | thelounge | xteve)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username  Definir o nome de usuário para ${software_title} (obrigatório)
  --beta           Instalar a versão beta do ${software_title}" \
      "  qb install ${software_help_name} -u username
  qb install ${software_help_name} -u username --beta
  qb reinstall ${software_help_name} -u username
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username" \
      ""
    ;;

  transmission)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username  Definir o nome de usuário para ${software_title} (obrigatório)
  --v4             Instalar versão 4 do ${software_title} (padrão: versão 3)" \
      "  qb install ${software_help_name} -u username --v4
  qb reinstall ${software_help_name} -u username --v4
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username --v4" \
      ""
    ;;

  wireguard)
    has_update=0
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username              Definir o nome de usuário para ${software_title} (obrigatório)
  -o [client|server]           Instalar WireGuard como cliente ou servidor
  -cai  | --client-allowed-ip  Definir o IP permitido para o servidor WireGuard
  -cidr | --cidr               Definir o CIDR para o servidor WireGuard (padrão: 10.5.0.2/16)
  -dns  | --dns                Definir o DNS para o servidor WireGuard (padrão: 1.1.1.1)
  -ep   | --endpoint           Definir o endpoint para o servidor WireGuard
  -lp   | --listen-port        Definir a porta de escuta para o servidor WireGuard (padrão: 51820)
  -noc  | --number-of-clients  Definir o número de clientes para o servidor WireGuard
  -pdr  | --postdown-rule      Definir a regra post-down para o servidor WireGuard
  -pur  | --postup-rule        Definir a regra post-up para o servidor WireGuard" \
      "  qb install ${software_help_name} -u username -o server \\
  -cai '192.168.0.2,192.168.0.3' \\
  -cidr '10.5.0.2/16' \\
  -dns '0.0.0.0' \\
  -ep 'server.domain.com' \\
  -lp 51820 \\
  -noc 5 \\
  -pdr 'iptables -D INPUT -i wg0 -j ACCEPT' \\
  -pur 'iptables -A INPUT -i wg0 -j ACCEPT'
  qb reinstall ${software_help_name} -u username -o client
  qb remove ${software_help_name} -u username" \
      "
Notas:
  - O servidor WireGuard será instalado com o CIDR padrão de 10.5.0.2/16,
    DNS de 1.1.1.1, 1 configuração de cliente e porta de escuta de 51820.

  - O servidor WireGuard será instalado com as regras post-down e post-up padrão.
     * A regra post-down removerá a regra iptables para o servidor WireGuard.
	 * A regra post-up adicionará a regra iptables para o servidor WireGuard.

  - A opção '-noc' especifica o número de clientes para criar configurações.
    Essas configurações serão salvas no diretório '/srv/quickbox/db/wireguard'.

  - A maioria dos provedores VPN fornece um arquivo de configuração para WireGuard.
    Se você estiver usando NordVPN, que não fornece um arquivo de configuração diretamente,
    você pode gerar um usando o gerador de configuração NordVPN incluído.
    Para mais informações sobre como gerar um arquivo de configuração NordVPN,
    use o comando: nvpn_conf_gen -h"
    ;;

  wsdashboard)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username  Definir o nome de usuário para ${software_title} (obrigatório)" \
      "  qb install ${software_help_name} -u username     - Instalar WSD com configuração de serviço aprimorada
  qb reinstall ${software_help_name} -u username   - Reinstalar WSD com configuração de serviço aprimorada
  qb remove ${software_help_name} -u username      - Remover WSD e limpar todos os arquivos de serviço
  qb update ${software_help_name} -u username      - Atualizar WSD com configuração de serviço aprimorada
  qb maintenance ${software_help_name} -u username - Executar manutenção de serviço e verificações de saúde

Gerenciamento de Certificados SSL:
  qb ssl ${software_help_name} -u username         - Configurar links simbólicos de certificados SSL para o serviço WSD
  qb ssl-remove ${software_help_name} -u username  - Remover links simbólicos de certificados SSL
  qb ssl-update ${software_help_name} -u username  - Atualizar configuração SSL para novos certificados" \
      "
Recursos Aprimorados:
  - Execução de serviço não-root (usuário www-data)
  - Sandboxing de segurança abrangente
  - Limites de recursos e monitoramento
  - Verificações de saúde e diagnósticos automáticos
  - Gerenciamento de processo gracioso
  - Logging e monitoramento estruturados
  - Gerenciamento de links simbólicos de certificados SSL
  - Acesso automático a certificados para usuário www-data

Gerenciamento de Serviço:
  systemctl status qbwsd.service     - Verificar status do serviço
  systemctl restart qbwsd.service    - Reiniciar serviço
  journalctl -u qbwsd.service -f     - Visualizar logs ao vivo
  qbwsd-health-check.sh --verbose    - Executar verificação de saúde detalhada
  qbwsd-health-check.sh --fix        - Corrigir problemas comuns automaticamente

Gerenciamento de Certificados SSL:
  - Criação automática de links simbólicos para /srv/quickbox/ssl/domain/
  - Configuração de variáveis de ambiente para caminhos de certificados
  - Override do systemd para variáveis de ambiente SSL
  - Teste de acesso a certificados para usuário www-data
  - Teste de conectividade HTTPS/HTTP"
    ;;

  *)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username  Definir o nome de usuário para ${software_title} (obrigatório)" \
      "  qb install ${software_help_name} -u username
  qb reinstall ${software_help_name} -u username
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username" \
      ""
    ;;
  esac
} 