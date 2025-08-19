# Sistema de Tradução do QuickBox Dashboard

Este diretório contém os arquivos de idioma português para o sistema de tradução modular do QuickBox Dashboard. Este documento explica a estrutura, uso e diretrizes de contribuição para o sistema de tradução.

## Índice

- [Sistema de Tradução do QuickBox Dashboard](#sistema-de-tradução-do-quickbox-dashboard)
  - [Índice](#índice)
  - [Visão Geral](#visão-geral)
  - [Estrutura de Diretórios](#estrutura-de-diretórios)
  - [Arquivos de Tradução](#arquivos-de-tradução)
    - [Estrutura de Arquivo](#estrutura-de-arquivo)
    - [Convenções de Nomenclatura](#convenções-de-nomenclatura)
  - [Adicionando Novas Traduções](#adicionando-novas-traduções)
  - [Modificando Traduções Existentes](#modificando-traduções-existentes)
  - [Chaves de Tradução](#chaves-de-tradução)
    - [Estrutura de Chaves](#estrutura-de-chaves)
    - [Diretrizes de Nomenclatura de Chaves](#diretrizes-de-nomenclatura-de-chaves)
  - [Melhores Práticas](#melhores-práticas)
  - [Contribuindo](#contribuindo)
    - [Para Tradutores](#para-tradutores)
    - [Para Desenvolvedores](#para-desenvolvedores)
  - [Validação e Testes](#validação-e-testes)
    - [Scripts de Validação](#scripts-de-validação)
    - [Testando Novas Traduções](#testando-novas-traduções)
  - [Solução de Problemas](#solução-de-problemas)
    - [Problemas Comuns](#problemas-comuns)
    - [Obtendo Ajuda](#obtendo-ajuda)

## Visão Geral

O QuickBox Dashboard usa um sistema de tradução modular que separa as traduções em arquivos lógicos baseados em suas áreas funcionais. Isso torna o sistema de tradução mais sustentável e mais fácil de trabalhar do que a abordagem monolítica anterior.

## Estrutura de Diretórios

```bash
src/dashboard/lang/
├── pt/                     # Arquivos de idioma português
│   ├── buttons.php         # Rótulos e ações de botões
│   ├── dashboard.php       # Elementos da interface principal do dashboard
│   ├── errors.php          # Mensagens de erro e validação
│   ├── help_manual.php     # Documentação de ajuda e tooltips
│   ├── misc.php            # Traduções diversas
│   ├── navigation.php      # Itens do menu de navegação
│   ├── pages.php           # Traduções específicas de páginas
│   ├── popup.php           # Mensagens de diálogos popup
│   ├── settings.php        # Traduções da página de configurações
│   ├── system.php          # Mensagens relacionadas ao sistema
│   ├── user_management.php # Interface de gerenciamento de usuários
│   ├── widgets.php         # Conteúdo dos widgets do dashboard
│   └── README.md           # Este arquivo
├── __testing__/            # Scripts de teste e validação
├── lang_pt.php             # Traduções principais em português
└── lang_pt_override.php    # Substituições de tradução
```

## Arquivos de Tradução

### Estrutura de Arquivo

Cada arquivo de tradução deve retornar um array associativo onde:
- As chaves são as chaves de tradução (em UPPER_SNAKE_CASE)
- Os valores são as strings traduzidas

Exemplo (`buttons.php`):

```php
<?php
/**
 * Rótulos e Ações de Botões
 * 
 * Este arquivo contém traduções para botões e elementos de ação usados em todo o dashboard.
 */

return [
    'SAVE' => 'Salvar',
    'CANCEL' => 'Cancelar',
    'EDIT' => 'Editar',
    'DELETE' => 'Excluir',
    'SUBMIT' => 'Enviar',
    'RESET' => 'Redefinir',
    'CLOSE' => 'Fechar',
    'BACK' => 'Voltar',
    'NEXT' => 'Próximo',
    'CONFIRM' => 'Confirmar',
    'DISMISS' => 'Dispensar',
    'ENABLE' => 'Ativar',
    'DISABLE' => 'Desativar',
    'UPDATE' => 'Atualizar',
    'REMOVE' => 'Remover',
    'ADD' => 'Adicionar',
    'SEARCH' => 'Pesquisar',
    'FILTER' => 'Filtrar',
    'SORT' => 'Ordenar',
    'MORE' => 'Mais',
    'LESS' => 'Menos',
    'APPLY' => 'Aplicar',
    'CLEAR' => 'Limpar',
    'UPLOAD' => 'Enviar',
    'DOWNLOAD' => 'Baixar',
    'PREVIEW' => 'Visualizar',
    'SELECT' => 'Selecionar',
    'VIEW_DETAILS' => 'Ver Detalhes',
    'MANAGE' => 'Gerenciar',
    'CONFIGURE' => 'Configurar',
    'SETTINGS' => 'Configurações',
    'PREFERENCES' => 'Preferências',
    'ADVANCED' => 'Avançado',
    'LOADING' => 'Carregando...',
    'PROCESSING' => 'Processando...',
    'PLEASE_WAIT' => 'Por favor, aguarde...',
    'SUCCESS' => 'Sucesso!',
    'ERROR' => 'Erro!',
    'WARNING' => 'Aviso!',
    'INFO' => 'Informação',
    'HELP' => 'Ajuda'
];
```

### Convenções de Nomenclatura

1. **Nomes de Arquivos**: Use minúsculas com underscores (ex: `user_management.php`)
2. **Chaves de Tradução**: Use UPPER_SNAKE_CASE (ex: `USERNAME_REQUIRED`)
3. **Comentários**: Inclua blocos PHPDoc no topo de cada arquivo e para traduções complexas

## Adicionando Novas Traduções

1. **Escolha o arquivo apropriado** baseado no propósito da tradução
2. **Adicione a nova tradução** com uma chave descritiva
3. **Adicione comentários** para contexto se necessário
4. **Atualize o README** se estiver adicionando uma nova categoria

Exemplo:

```php
// No arquivo apropriado (ex: user_management.php)
return [
    // ... traduções existentes ...
    'TWO_FACTOR_AUTH' => 'Autenticação de Dois Fatores',
    'TWO_FACTOR_AUTH_DESCRIPTION' => 'Adicione uma camada extra de segurança à sua conta',
];
```

## Modificando Traduções Existentes

1. **Encontre a chave** no arquivo apropriado
2. **Atualize o valor** mantendo a mesma chave
3. **Atualize qualquer documentação relacionada** se o significado mudou

## Chaves de Tradução

### Estrutura de Chaves

As chaves de tradução seguem estes padrões:

- `NOUN_VERB`: `USER_CREATED`, `PASSWORD_CHANGED`
- `NOUN_DESCRIPTION`: `ACCOUNT_SETTINGS_DESCRIPTION`
- `NOUN_LABEL`: `USERNAME_LABEL`
- `NOUN_PLACEHOLDER`: `SEARCH_PLACEHOLDER`
- `NOUN_TOOLTIP`: `API_KEY_TOOLTIP`
- `ERROR_NOUN_VERB`: `ERROR_USER_NOT_FOUND`
- `SUCCESS_NOUN_VERB`: `SUCCESS_USER_CREATED`

### Diretrizes de Nomenclatura de Chaves

1. Seja descritivo mas conciso
2. Agrupe chaves relacionadas juntas
3. Use terminologia consistente
4. Evite abreviações a menos que sejam amplamente compreendidas

## Melhores Práticas

1. **Consistência**: Use terminologia e estilo consistentes
2. **Contexto**: Forneça contexto para termos ambíguos
3. **Variáveis**: Use sintaxe `{variable}` para conteúdo dinâmico
4. **HTML**: Inclua HTML mínimo apenas quando necessário
5. **Comprimento**: Mantenha as traduções concisas
6. **Comentários**: Adicione comentários para traduções complexas ou ambíguas

## Contribuindo

### Para Tradutores

1. **Faça fork** do repositório
2. **Crie uma branch** para suas traduções
3. **Envie um pull request** com suas mudanças
4. **Referencie quaisquer problemas relacionados** no seu PR

### Para Desenvolvedores

1. **Adicione novas traduções** ao módulo apropriado
2. **Atualize testes** se necessário
3. **Execute validação** antes de enviar PRs
4. **Documente mudanças** na descrição do PR

## Validação e Testes

### Scripts de Validação

Execute o script de validação para verificar problemas:

```bash
php src/dashboard/lang/__testing__/validate_translations.php
```

### Testando Novas Traduções

1. Limpe qualquer opcache se habilitado
2. Teste todos os elementos de UI afetados
3. Verifique a substituição de conteúdo dinâmico
4. Verifique o escape adequado

## Solução de Problemas

### Problemas Comuns

1. **Traduções Ausentes**: Verifique o arquivo e chave corretos
2. **HTML Quebrado**: Verifique se todas as tags estão adequadamente fechadas
3. **Incompatibilidade de Variáveis**: Certifique-se de que todas as `{variables}` correspondem entre traduções
4. **Problemas de Cache**: Limpe o cache do seu navegador e PHP opcache

### Obtendo Ajuda

Se você encontrar problemas:
1. Verifique os problemas existentes para problemas similares
2. Consulte a documentação do QuickBox
3. Abra um novo problema com detalhes sobre o problema

---

Esta documentação faz parte do sistema de tradução do QuickBox Dashboard.
