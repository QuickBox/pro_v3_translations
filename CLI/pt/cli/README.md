# QuickBox Pro - Sistema de Idioma Modular

## Visão Geral

Este diretório contém o sistema de idioma modular para o CLI do QuickBox Pro. O arquivo original `cli_lang` (3.695 linhas) foi dividido em módulos funcionais para melhor organização, manutenibilidade e escalabilidade.

## Estrutura dos Módulos

O sistema de idioma modular está organizado nos seguintes grupos funcionais:

### Módulos Principais
- **core.sh** - Operações básicas do sistema (locks, limpeza, funções básicas)
- **apt.sh** - Operações de gerenciamento de pacotes APT
- **software.sh** - Operações de instalação, remoção e atualização de software
- **ssl.sh** - Gerenciamento de certificados SSL/LetsEncrypt
- **dns.sh** - Gerenciamento de credenciais DNS
- **users.sh** - Operações de gerenciamento de usuários
- **vpn.sh** - Operações VPN/WireGuard
- **database.sh** - Gerenciamento de banco de dados (MySQL/SQLite)
- **updater.sh** - Operações do atualizador do sistema
- **manager.sh** - Gerenciador de software (backup/restauração/rollback)
- **help.sh** - Mensagens de ajuda e tratamento de erros

### Módulos Estendidos
- **software_access.sh** - Informações de acesso ao software e URLs
- **software_config.sh** - Configuração de software e mensagens de configuração
- **wireguard.sh** - Configuração e gerenciamento específicos do WireGuard
- **misc.sh** - Utilitários diversos e mensagens gerais do sistema

## Descrições dos Módulos

### Módulos Principais

#### core.sh
Contém operações básicas do sistema incluindo:
- Funções de limpeza de memória e cache
- Manuseio e remoção de locks
- Utilitários de log do dashboard
- Mensagens básicas de status do sistema

#### apt.sh
Gerencia operações de gerenciamento de pacotes APT:
- Atualizações do banco de dados de pacotes
- Resolução de locks
- Mensagens de conclusão de upgrade
- Verificação e validação de pacotes

#### software.sh
Trata instalação, remoção e atualizações de software:
- Cabeçalhos e progresso de instalação
- Processos de reinstalação
- Operações de remoção
- Procedimentos de atualização
- Gerenciamento de build e dependências

#### ssl.sh
Gerenciamento abrangente de certificados SSL/LetsEncrypt:
- Instalação e renovação de certificados
- Suporte a desafio DNS para múltiplos provedores
- Operações de desafio HTTP
- Validação de certificados e tratamento de erros
- Configuração interativa de DNS para vários provedores

#### dns.sh
Sistema de gerenciamento de credenciais DNS:
- Verificação de status do provedor
- Validação de credenciais
- Instruções de configuração para todos os provedores suportados
- Tratamento de erros e solução de problemas
- Operações de backup e restauração

#### users.sh
Operações de gerenciamento de usuários:
- Criação e exclusão de usuários
- Gerenciamento de senhas
- Promoção e rebaixamento de usuários
- Operações de banimento/desbanimento

#### vpn.sh
Operações VPN e WireGuard:
- Configuração de VPN
- Configuração de cliente
- Gerenciamento de servidor
- Status de conexão

#### database.sh
Gerenciamento de banco de dados para MySQL e SQLite:
- Instalação e configuração
- Migração entre tipos de banco de dados
- Operações de backup e restauração
- Manutenção e otimização
- Verificação de integridade

#### updater.sh
Operações do atualizador do sistema:
- Rastreamento de progresso de atualização
- Gerenciamento de dependências
- Atualizações de componentes
- Status de conclusão

#### manager.sh
Operações do gerenciador de software:
- Criação e gerenciamento de backup
- Operações de restauração
- Funcionalidade de rollback
- Gerenciamento de configuração padrão
- Gerenciamento de versão

#### help.sh
Sistema de ajuda e tratamento de erros:
- Geração de ajuda específica para software
- Instruções de uso de comandos
- Mensagens de erro e avisos
- Funções de ajuda interativas

### Módulos Estendidos

#### software_access.sh
Informações e configuração de acesso ao software:
- URLs e portas de interface web
- Credenciais de acesso e configuração
- Informações de acesso específicas do domínio
- Detalhes de configuração do cliente

#### software_config.sh
Configuração de software e tratamento especial:
- Migração MySQL para Ombi
- Tratamento de credenciais de atualização do Plex
- Configuração do Rclone
- Processos especiais de configuração de software

#### wireguard.sh
Operações específicas do WireGuard:
- Configuração de cliente e servidor
- Processos de configuração interativos
- Sistema de ajuda de gerenciamento
- Tratamento de erros para operações do WireGuard

#### misc.sh
Utilitários diversos e mensagens gerais:
- Tratamento de opções desconhecidas
- Mensagens de erro gerais
- Funções utilitárias
- Ajuda do gerador de configuração NordVPN

## Uso

### Para Desenvolvedores

1. **Adicionando Novas Mensagens**: Adicione novas funções de idioma ao módulo apropriado baseado na funcionalidade
2. **Modificando Mensagens Existentes**: Localize a função no módulo relevante e atualize-a
3. **Criando Novos Módulos**: Siga a convenção de nomenclatura e estrutura dos módulos existentes

### Para Administradores de Sistema

1. **Usando o Sistema Modular**: O sistema carrega automaticamente todos os módulos via `cli_lang_modular`
2. **Compatibilidade Reversa**: Todas as chamadas de função existentes continuam funcionando sem alterações
3. **Validação de Módulos**: O sistema valida que todos os módulos necessários estão presentes

## Convenções de Nomenclatura

- **Nomes de Arquivos**: Use nomes descritivos com extensão `.sh` (ex: `software_access.sh`)
- **Nomes de Funções**: Siga o padrão `quickbox::lang::categoria::subcategoria::acao()`
- **Variáveis**: Use nomes descritivos com escopo apropriado
- **Comentários**: Inclua documentação abrangente para funções complexas

## Benefícios

### Manutenibilidade
- **Módulos Focados**: Cada módulo trata uma área funcional específica
- **Navegação Mais Fácil**: Desenvolvedores podem localizar rapidamente funções relevantes
- **Complexidade Reduzida**: Arquivos menores são mais fáceis de entender e modificar

### Escalabilidade
- **Crescimento Modular**: Novas funcionalidades podem ser adicionadas sem afetar módulos existentes
- **Desenvolvimento Independente**: Múltiplos desenvolvedores podem trabalhar em diferentes módulos simultaneamente
- **Carregamento Seletivo**: Apenas módulos necessários precisam ser carregados

### Organização
- **Agrupamento Lógico**: Funções relacionadas são agrupadas juntas
- **Estrutura Clara**: A hierarquia de módulos reflete a arquitetura do sistema
- **Documentação**: Cada módulo é auto-documentado com propósitos claros

## Estratégia de Migração

### Fase 1: Criação de Módulos ✅
- [x] Dividir `cli_lang` original em módulos funcionais
- [x] Criar arquivo ponte `cli_lang_modular`
- [x] Implementar validação de módulos e tratamento de erros

### Fase 2: Teste e Validação
- [ ] Testar todos os módulos com funcionalidade existente do QuickBox Pro
- [ ] Validar compatibilidade reversa
- [ ] Teste de performance e otimização

### Fase 3: Implantação
- [ ] Lançamento gradual para ambientes de desenvolvimento
- [ ] Teste de aceitação do usuário
- [ ] Implantação em produção

### Fase 4: Documentação e Treinamento
- [ ] Documentação completa para desenvolvedores
- [ ] Criar guias de migração
- [ ] Materiais de treinamento para contribuidores

## Contribuindo

### Diretrizes
1. **Siga as Convenções de Nomenclatura**: Use padrões estabelecidos para consistência
2. **Adicione Documentação**: Inclua comentários para funções complexas
3. **Teste Alterações**: Garanta que modificações não quebrem funcionalidade existente
4. **Atualize o README**: Mantenha a documentação atualizada com as alterações

### Adicionando Novos Módulos
1. Crie o arquivo do módulo no diretório `cli/`
2. Adicione o módulo ao arquivo ponte (`cli_lang_modular`)
3. Atualize a lista de validação
4. Documente o módulo neste README

### Modificando Módulos Existentes
1. Localize o módulo apropriado para suas alterações
2. Siga o estilo de código e padrões existentes
3. Teste suas alterações completamente
4. Atualize documentação relevante

## Estrutura de Arquivos

```bash
cli/
├── README.md                 # Este arquivo de documentação
├── core.sh                   # Operações básicas do sistema
├── apt.sh                    # Gerenciamento de pacotes APT
├── software.sh               # Instalação/remoção/atualização de software
├── ssl.sh                    # Operações SSL/LetsEncrypt
├── dns.sh                    # Gerenciamento de credenciais DNS
├── users.sh                  # Operações de gerenciamento de usuários
├── vpn.sh                    # Operações VPN/WireGuard
├── database.sh               # Gerenciamento de banco de dados
├── updater.sh                # Operações do atualizador do sistema
├── manager.sh                # Operações do gerenciador de software
├── help.sh                   # Ajuda e tratamento de erros
├── software_access.sh        # Informações de acesso ao software
├── software_config.sh        # Configuração de software
├── wireguard.sh              # Operações específicas do WireGuard
└── misc.sh                   # Utilitários diversos
```

## Métricas de Sucesso

- **Tamanho de Arquivo Reduzido**: Cada módulo é significativamente menor que o arquivo original de 3.695 linhas
- **Manutenibilidade Aprimorada**: Mais fácil de localizar e modificar funcionalidade específica
- **Colaboração Aprimorada**: Múltiplos desenvolvedores podem trabalhar em diferentes módulos
- **Melhor Organização**: Agrupamento lógico de funções relacionadas
- **Compatibilidade Reversa**: Toda funcionalidade existente continua funcionando sem alterações

## Suporte

Para perguntas ou problemas com o sistema de idioma modular:
- Verifique este README para diretrizes de uso
- Revise a estrutura de módulos e convenções de nomenclatura
- Teste alterações em um ambiente de desenvolvimento primeiro
- Consulte o time de desenvolvimento do QuickBox Pro para modificações complexas