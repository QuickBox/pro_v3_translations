#!/usr/bin/env bash
################################################################################
# <START METADATA>
# Project Name: QuickBox Pro
# File Name: cli_ssl_pt_br
# File Description: Arquivo de idioma português (Brasil) - Operações SSL/LetsEncrypt
# File Version: 1.0.5
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
# Author: Jamie Dobbs (Mschf)
# Author Contact: jamie.dobbs@mschf.dev
#
# License: BSD-3 (Available in LICENSE.md)
# Copyright (C) 2019-2025, QuickBox.IO
# All rights reserved.
# <END METADATA>
# shellcheck disable=2001,2034,2154,2312,2317
################################################################################

################################################################################
# Renovação - Let's Encrypt
################################################################################
quickbox::lang::install::lecert::complete() {
  declare -a domain_array
  if [[ -n "${dash}" ]]; then
    domain_array+=("https://${domain_options[dash]}")
    application_array+=("QuickBox")
  fi
  if [[ -n "${emby}" ]]; then
    domain_array+=("https://${domain_options[emby]}")
    application_array+=("Emby")
  fi
  if [[ -n "${jellyfin}" ]]; then
    domain_array+=("https://${domain_options[jellyfin]}")
    application_array+=("Jellyfin")
  fi
  if [[ -n "${jellyseerr}" ]]; then
    domain_array+=("https://${domain_options[jellyseerr]}")
    application_array+=("Jellyseerr")
  fi
  if [[ -n "${komga}" ]]; then
    domain_array+=("https://${domain_options[komga]}")
    application_array+=("Komga")
  fi
  if [[ -n "${overseerr}" ]]; then
    domain_array+=("https://${domain_options[overseerr]}")
    application_array+=("Overseerr")
  fi
  if [[ -n "${plex}" ]]; then
    domain_array+=("https://${domain_options[plex]}")
    application_array+=("Plex")
  fi
  if [[ -n "${no_dash}" ]]; then
    domain_array+=("${domain}")
    application_array+=("o domínio personalizado foi")
  fi
  for ((i = 0; i < ${#domain_array[@]}; i++)); do
    declare text="certificado ssl para ${application_array[i]} instalado.
domínio: ${domain_array[i]}"
  done
  quickbox::dashboard::log "${text}"
}

quickbox::lang::renew::certificates::header() {
  declare text="processo de renovação de certificado ssl será iniciado agora"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::renew::complete::header() {
  declare text="renovação de certificado ssl concluída"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::renew() {
  # dividir entradas de domínio com vírgulas e definir entrada final para "e"
  for ((i = 0; i < ${#domain[@]}; i++)); do
    if [[ ${i} -eq 0 ]]; then
      declare text="${domain[i]}"
    elif [[ ${i} -eq $((${#domain[@]} - 1)) ]]; then
      declare text="${text} e ${domain[i]}"
    else
      declare text="${text}, ${domain[i]}"
    fi
  done
  declare text="renovando certificado ssl para ${text}..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::renew::info() {
  created_array="${certificate_created}"
  expires_array="${certificate_expiry}"
  days_left_array="${certificate_days_left}"
  # criar cabeçalho de informações do certificado para mensagem de conclusão
  declare text_header="
Informações do certificado:
"
  # criar informações do certificado para cada domínio
  declare text="domínio: ${d}
criado: ${created_array[*]}
expira: ${expires_array[*]}
dias restantes: ${days_left_array[*]}
"
  # mostrar text_header apenas uma vez para múltiplos domínios
  if [[ ${d} == "${domain[0]}" ]]; then
    quickbox::dashboard::log "${text_header}
${text}"
  else
    quickbox::dashboard::log "${text}"
  fi
}

quickbox::lang::reinstall::lecert::complete::header() {
  declare text="reinstalação de certificado ssl concluída"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::remove::cert::complete::header() {
  declare text="remoção de certificado ssl concluída"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Mensagens de Desafio DNS do Lecert
################################################################################
quickbox::lang::lecert::dns::provider::valid() {
  declare text="✅ Usando provedor DNS: ${dns_provider} (plugin: ${dns_plugin})"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::provider::invalid() {
  declare text="❌ Provedor DNS não suportado: ${dns_provider}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::provider::supported() {
  declare text="Provedores suportados: ${!SUPPORTED_DNS_PROVIDERS[*]}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::wildcard::dns::required() {
  declare text="❌ Domínios wildcard requerem desafio DNS"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::domain::not::set() {
  declare text="Erro: Domínio não está definido."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::credentials::loaded() {
  declare text="✅ Credenciais DNS carregadas de account.conf"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::challenge::mode() {
  declare text="Usando desafio DNS com provedor: ${dns_provider}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::http::challenge::mode() {
  declare text="Usando desafio HTTP"
  quickbox::dashboard::log "${text}"
}

# Mensagens de Erro de Credenciais de Provedor DNS
quickbox::lang::lecert::dns::cloudflare::error() {
  declare text="Desafio DNS com Cloudflare requer variáveis de ambiente CF_Token ou CF_Email/CF_Key"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::route53::error() {
  declare text="Desafio DNS com Route53 requer AWS_ACCESS_KEY_ID e AWS_SECRET_ACCESS_KEY"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::godaddy::error() {
  declare text="Desafio DNS com GoDaddy requer variáveis de ambiente GD_Key e GD_Secret"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::namecheap::error() {
  declare text="Desafio DNS com Namecheap requer variáveis de ambiente Namecheap_Username e Namecheap_ApiKey"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::digitalocean::error() {
  declare text="Desafio DNS com DigitalOcean requer variável de ambiente DO_API_KEY"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::linode::error() {
  declare text="Desafio DNS com Linode requer variável de ambiente LINODE_V4_API_KEY"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::ovh::error() {
  declare text="Desafio DNS com OVH requer variáveis de ambiente OVH_AK, OVH_AS e OVH_CK"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::vultr::error() {
  declare text="Desafio DNS com Vultr requer variável de ambiente VULTR_API_KEY"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::gandi::error() {
  declare text="Desafio DNS com Gandi requer variável de ambiente GANDI_LIVEDNS_KEY"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::dnsimple::error() {
  declare text="Desafio DNS com DNSimple requer variável de ambiente DNSimple_OAUTH_TOKEN"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::hurricane::error() {
  declare text="Desafio DNS com Hurricane Electric requer variáveis de ambiente HE_Username e HE_Password"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::azure::error() {
  declare text="Desafio DNS com Azure requer variáveis de ambiente AZUREDNS_SUBSCRIPTIONID, AZUREDNS_TENANTID, AZUREDNS_APPID e AZUREDNS_CLIENTSECRET"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::gcp::error() {
  declare text="Desafio DNS com Google Cloud Platform requer variáveis de ambiente GCP_PROJECT e GCP_SERVICE_ACCOUNT_JSON_FILE"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::ionos::error() {
  declare text="Desafio DNS com IONOS requer variáveis de ambiente IONOS_PREFIX e IONOS_SECRET"
  quickbox::dashboard::log "${text}"
}

# Mensagens de Erro de Kill DNS
quickbox::lang::lecert::error::domain::empty() {
  declare text="domínio não pode estar vazio"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::dns::provider::required() {
  declare text="Provedor DNS deve ser especificado ao usar desafio DNS. Use --dns-provider <provedor>"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::dns::provider::unsupported() {
  declare text="Provedor DNS não suportado: ${dns_provider}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::wildcard::dns::flag() {
  declare text="Domínio wildcard ${domain} requer flag --dns"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::move::root() {
  declare text="não foi possível mover para /root"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::move::acme() {
  declare text="não foi possível mover para /root/acme.sh"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::certificate::install() {
  declare text="não foi possível instalar certificado para ${d}"
  quickbox::dashboard::log "${text}"
}

# Mensagens de Kill de Credenciais de Provedor DNS
quickbox::lang::lecert::error::cloudflare::credentials() {
  declare text="Credenciais DNS Cloudflare não configuradas"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::route53::credentials() {
  declare text="Credenciais DNS Route53 não configuradas"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::godaddy::credentials() {
  declare text="Credenciais DNS GoDaddy não configuradas"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::namecheap::credentials() {
  declare text="Credenciais DNS Namecheap não configuradas"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::digitalocean::credentials() {
  declare text="Credenciais DNS DigitalOcean não configuradas"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::linode::credentials() {
  declare text="Credenciais DNS Linode não configuradas"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::ovh::credentials() {
  declare text="Credenciais DNS OVH não configuradas"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::vultr::credentials() {
  declare text="Credenciais DNS Vultr não configuradas"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::gandi::credentials() {
  declare text="Credenciais DNS Gandi não configuradas"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::dnsimple::credentials() {
  declare text="Credenciais DNS DNSimple não configuradas"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::hurricane::credentials() {
  declare text="Credenciais DNS Hurricane Electric não configuradas"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::azure::credentials() {
  declare text="Credenciais DNS Azure não configuradas"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::gcp::credentials() {
  declare text="Credenciais DNS GCP não configuradas"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::error::ionos::credentials() {
  declare text="Credenciais DNS IONOS não configuradas"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Mensagens de Segurança e Sudoers do Lecert
################################################################################
quickbox::lang::lecert::error::sudoers::create() {
  declare text="Não foi possível criar arquivo sudoers para acesso www-data a account.conf"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::sudoers::created() {
  declare text="Arquivo sudoers criado para acesso seguro www-data a credenciais DNS"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Mensagens de Informação do Lecert
################################################################################
quickbox::lang::lecert::info::certificate::valid::skip() {
  declare text="Certificado ainda é válido, pulando renovação"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::info::acme::failed() {
  declare text="ERRO: comando acme.sh falhou. Saída:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::info::certificate::exists() {
  declare text="Arquivos de certificado já existem para ${d}, verificando validade..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::info::certificate::valid::exists() {
  declare text="Certificado para ${d} ainda é válido, pulando instalação"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::info::certificate::expired::reinstall() {
  declare text="Certificado para ${d} expirou ou expirará em breve, reinstalando..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::info::verification::retry() {
  declare text="Verificação de certificado falhou, tentando novamente... (${retry_count}/${max_retries})"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::info::cleanup::start() {
  declare text="Executando limpeza após geração de certificado..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::info::nginx::valid::reload() {
  declare text="Configuração Nginx é válida, recarregando..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::warning::nginx::test::failed() {
  declare text="AVISO: Teste de configuração Nginx falhou, intervenção manual pode ser necessária"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::info::cleanup::complete() {
  declare text="Limpeza concluída com sucesso"
  quickbox::dashboard::log "${text}"
}

################################################################################
# Mensagens de Configuração DNS Interativa do Lecert
################################################################################
quickbox::lang::lecert::dns::interactive::header() {
  declare text="=== Configuração Interativa de Credenciais DNS ==="
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::header() {
  declare text="Configurando credenciais DNS Cloudflare..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::options() {
  declare text="Escolha seu método de autenticação:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::option1() {
  declare text="1. Token API (Recomendado)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::option2() {
  declare text="2. Chave API Global + Email"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::api::header() {
  declare text="=== Método Token API ==="
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::api::step1() {
  declare text="1. Vá para Dashboard Cloudflare > Meu Perfil > Tokens API"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::api::step2() {
  declare text="2. Crie um novo token com permissões Zone:DNS:Edit"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::api::step3() {
  declare text="3. Insira seu token API abaixo:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::api::error() {
  declare text="❌ Token API não pode estar vazio"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::legacy::header() {
  declare text="=== Método Chave API Global ==="
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::legacy::step1() {
  declare text="1. Vá para Dashboard Cloudflare > Meu Perfil > Chaves API"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::legacy::step2() {
  declare text="2. Copie sua Chave API Global e Email"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::legacy::error() {
  declare text="❌ Email e Chave API Global não podem estar vazios"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::cloudflare::invalid() {
  declare text="❌ Opção inválida selecionada"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::route53::header() {
  declare text="Configurando credenciais DNS AWS Route53..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::route53::intro() {
  declare text="Você precisa de AWS Access Key ID e Secret Access Key com permissões Route53:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::route53::error() {
  declare text="❌ Access Key ID e Secret Access Key não podem estar vazios"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::digitalocean::header() {
  declare text="Configurando credenciais DNS DigitalOcean..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::digitalocean::step1() {
  declare text="1. Vá para Dashboard DigitalOcean > API > Tokens/Chaves"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::digitalocean::step2() {
  declare text="2. Gere um novo token API com permissões de Escrita"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::digitalocean::error() {
  declare text="❌ Token API não pode estar vazio"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::not::implemented() {
  declare text="❌ Configuração interativa não implementada para este provedor"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::manual::setup() {
  declare text="Por favor, configure credenciais manualmente em /root/.acme.sh/account.conf"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::success() {
  declare text="✅ Credenciais DNS salvas com sucesso"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::interactive::continue() {
  declare text="Continuando com instalação de certificado..."
  quickbox::dashboard::log "${text}"
}

################################################################################
# Mensagens de Prompt do Lecert
################################################################################
quickbox::lang::lecert::prompt::setup::cloudflare() {
  declare text="Você gostaria de configurar credenciais Cloudflare agora? (s/n): "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::prompt::setup::route53() {
  declare text="Você gostaria de configurar credenciais Route53 agora? (s/n): "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::prompt::setup::digitalocean() {
  declare text="Você gostaria de configurar credenciais DigitalOcean agora? (s/n): "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::prompt::cloudflare::method() {
  declare text="Insira sua escolha (1 ou 2): "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::prompt::cloudflare::api_token() {
  declare text="Insira seu Token API Cloudflare: "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::prompt::cloudflare::email() {
  declare text="Insira seu Email Cloudflare: "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::prompt::cloudflare::global_key() {
  declare text="Insira sua Chave API Global Cloudflare: "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::prompt::route53::access_key() {
  declare text="Insira seu AWS Access Key ID: "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::prompt::route53::secret_key() {
  declare text="Insira seu AWS Secret Access Key: "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::prompt::digitalocean::api_token() {
  declare text="Insira seu Token API DigitalOcean: "
  quickbox::dashboard::log "${text}"
}

################################################################################
# Mensagens de Configuração de Credenciais DNS do Lecert
################################################################################
quickbox::lang::lecert::dns::setup::cloudflare::header() {
  declare text="=== Configuração de Credenciais DNS Cloudflare ==="
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::intro() {
  declare text="Para usar desafio DNS com Cloudflare, você precisa configurar credenciais API:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option1::header() {
  declare text="Opção 1: Dashboard QuickBox (Recomendado)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option1::step1() {
  declare text="1. Vá para seu dashboard QuickBox"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option1::step2() {
  declare text="2. Navegue até Configurações > Credenciais DNS"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option1::step3() {
  declare text="3. Selecione Cloudflare e insira seu token API"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option1::step4() {
  declare text="4. Salve a configuração"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option2::header() {
  declare text="Opção 2: Configuração Manual"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option2::step1() {
  declare text="1. Vá para https://dash.cloudflare.com/profile/api-tokens"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option2::step2() {
  declare text="2. Crie um novo token API com as seguintes permissões:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option2::step2a() {
  declare text="   - Zone:Zone:Read"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option2::step2b() {
  declare text="   - Zone:DNS:Edit"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option2::step3() {
  declare text="3. Defina os recursos de zona para 'Include: All zones'"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option2::step4() {
  declare text="4. Copie o token gerado"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option2::step5() {
  declare text="5. Execute: qb dns-credentials cloudflare <token>"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option3::header() {
  declare text="Opção 3: Chave API Legada (se você tem uma conta mais antiga)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option3::step1() {
  declare text="1. Vá para https://dash.cloudflare.com/profile/api-keys"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option3::step2() {
  declare text="2. Copie sua Chave API Global"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option3::step3() {
  declare text="3. Anote seu endereço de email da conta"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::cloudflare::option3::step4() {
  declare text="4. Execute: qb dns-credentials cloudflare-legacy <email> <api_key>"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::route53::header() {
  declare text="=== Configuração de Credenciais DNS AWS Route53 ==="
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::route53::intro() {
  declare text="Para usar desafio DNS com Route53, você precisa de credenciais AWS:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::route53::step1() {
  declare text="1. Crie um usuário IAM com a seguinte política:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::route53::step1a() {
  declare text="   - Route53FullAccess"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::route53::step2() {
  declare text="2. Gere Access Key ID e Secret Access Key"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::route53::step3() {
  declare text="3. Execute: qb dns-credentials route53 <access_key_id> <secret_access_key>"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::digitalocean::header() {
  declare text="=== Configuração de Credenciais DNS DigitalOcean ==="
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::digitalocean::intro() {
  declare text="Para usar desafio DNS com DigitalOcean, você precisa de um token API:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::digitalocean::step1() {
  declare text="1. Vá para https://cloud.digitalocean.com/account/api/tokens"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::digitalocean::step2() {
  declare text="2. Gere um novo token API com acesso 'Write'"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::digitalocean::step3() {
  declare text="3. Copie o token gerado"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::digitalocean::step4() {
  declare text="4. Execute: qb dns-credentials digitalocean <token>"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::generic::header() {
  declare text="=== Configuração de Credenciais DNS ==="
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::generic::intro() {
  declare text="Para usar desafio DNS com ${provider}, você precisa configurar credenciais."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::generic::referral() {
  declare text="Por favor, consulte a documentação do acme.sh para configuração do ${provider}:"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::lecert::dns::setup::generic::url() {
  declare text="https://github.com/acmesh-official/acme.sh/wiki/dnsapi#dns_${provider}"
  quickbox::dashboard::log "${text}"
}