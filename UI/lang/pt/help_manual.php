<?php
return [
  // #4.4.7 - HELP MANUAL
  'QB_HELP'                                           => 'Manual de Ajuda',

  // #4.4.7.1 - description
  'DESCRIPTION_CONTENT'                               => '<p>Bem-vindo à exibição gráfica abrangente da página de manual <code>qb</code>, projetada para oferecer uma abordagem traduzida, simplificada e eficiente para acessar várias informações sobre o QuickBox. Esta interface amigável visa fornecer insights detalhados sobre o funcionamento do QuickBox, uma ferramenta poderosa e versátil para gerenciar seu servidor sem esforço.</p><p>Dentro desta exibição gráfica, você encontrará uma lista detalhada de aplicações disponíveis prontas para instalação perfeita, capacitando-o a personalizar a configuração do seu servidor de acordo com suas necessidades específicas. Além disso, este recurso apresenta uma riqueza de outros comandos essenciais para utilização ideal dentro do ambiente CLI <code>qb</code>, permitindo que você navegue pelas tarefas do seu servidor de forma eficiente e sem esforço.</p><p>Seja você novo no QuickBox ou um usuário experiente, esta exibição gráfica da página de manual <code>qb</code> serve como sua referência definitiva para aproveitar todo o potencial do QuickBox e liberar o verdadeiro poder do seu gerenciamento de servidor. Explore os diversos recursos, simplifique suas operações de servidor e maximize sua produtividade com a ajuda deste guia intuitivo e informativo. Vamos mergulhar e tornar sua experiência QuickBox ainda mais gratificante!</p>',
  'API_INFO_DIRECT'                                   => '<p style="font-weight:600;">Para mais informações e referência sobre a API QuickBox integrada, <a href="/api-control.php" rel="noopenner nofollow" class="link" style="color:var(--qb-color-37);">veja esta página</a>.</p>',

  // #4.4.7.2 - options
  'OPTIONS_HEADER'                                    => 'Opções',
  'OPTIONS_CONTENT_HELP'                              => 'Exibe este manual de ajuda no formato de página de manual CLI',
  'OPTIONS_CONTENT_VERBOSE'                           => 'Ativa o modo verboso para depuração',

  // #4.4.7.3 - software
  'SOFTWARE_HEADER'                                   => 'Software',
  'SOFTWARE_INFO_CONTENT'                             => '<p>A seguir está uma lista de todas as aplicações disponíveis para instalação fornecidas através da compilação QuickBox.<br/>Os nomes do software são apresentados como vistos por <code>qb [install|reinstall|update|remove|help] [software_name]</code></p>',
  'ADMIN_INSTALLED_SOFTWARE_HEADER'                   => 'Software Instalado pelo Administrador',
  'ADMIN_INSTALLED_SOFTWARE_INFO_CONTENT'             => '<p>As seguintes aplicações são necessárias para serem instaladas pelo Administrador do Sistema.<br/>Veja a coluna de disponibilidade abaixo para detalhes adicionais.</p>',
  'MULTI_USER_SOFTWARE_HEADER'                        => 'Software Multi-Usuário',
  'MULTI_USER_SOFTWARE_INFO_CONTENT'                  => '<p>As seguintes aplicações podem ser instaladas por múltiplos usuários sem precisar de assistência administrativa.<br/>Toda a disponibilidade de aplicação é determinada pelo Administrador do Sistema e concedida a usuários adicionais dentro de <a href="/usergroups.php" rel="noopener nofollow" class="link">grupos criados</a>.</p>',
  'SINGLE_USER_SOFTWARE_HEADER'                       => 'Software de Usuário Único',
  'SINGLE_USER_SOFTWARE_INFO_CONTENT'                 => '<p>As seguintes aplicações podem ser instaladas por apenas um usuário designado por vez, sem precisar de assistência administrativa.<br/>Toda a disponibilidade de aplicação é determinada pelo Administrador do Sistema e concedida a usuários adicionais dentro de <a href="/usergroups.php" rel="noopener nofollow" class="link">grupos criados</a>.</p>',
  'SOFTWARE_MANAGEMENT'                               => 'Gerenciamento de Software',
  'SOFTWARE_MANAGEMENT_CONTENT'                       => 'Parâmetros para instalar, reinstalar, atualizar ou remover software designado com opções adicionais (se presentes/desejadas) para um usuário designado',
  'SOFTWARE_MANAGEMENT_WARNING_CONTENT'               => '<p>Tenha em mente que várias aplicações têm várias opções/requisitos. A maioria requer o uso da flag de nome de usuário (<code>-u</code>), enquanto aplicações como rtorrent não. Para verificar todas as opções disponíveis para um software específico, utilize <code class="language-bash">qb help [software_name]</code>. A nomenclatura de aplicação dentro do QuickBox para o esquema de nomenclatura de software pode ser visualizada no <a href="#software" class="link">gráfico da lista de software</a> acima.</p>',
  'SEE_ALSO_HEADER'                                   => 'Veja Também',
  'SEE_ALSO_CONTENT'                                  => 'Mostra uso útil de comando para software designado',

  // #4.4.7.4 - software options table
  'SOFTWARE_NAME'                                     => 'Nome do Software',
  'SOFTWARE_TITLE'                                    => 'Título do Software',
  'USABILITY'                                         => 'Usabilidade',
  'CAN_ROLLBACK'                                      => 'Opção de Reversão',
  'INFO'                                              => 'Info',
  'ADMIN_BADGE'                                       => '<span class="badge badge-pills badge-table-menu" style="padding:2px 6px;line-height:0.7rem;background-color:var(--qb-color-6-rgba);color:#fff;font-size:0.5rem;">apenas admin</span>',
  'GLOBAL_BADGE'                                      => '<span class="badge badge-pills badge-table-menu" style="padding:2px 6px;line-height:0.7rem;background-color:var(--qb-color-5-rgba);color:#fff;font-size:0.5rem;">global</span>',
  'MULTI_USER_BADGE'                                  => '<span class="badge badge-pills badge-table-menu" style="padding:2px 6px;line-height:0.7rem;background-color:var(--qb-color-4-rgba);color:#fff;font-size:0.5rem;">multi usuário</span>',
  'SINGLE_USER_BADGE'                                 => '<span class="badge badge-pills badge-table-menu" style="padding:2px 6px;line-height:0.7rem;background-color:var(--qb-color-3-rgba);color:#fff;font-size:0.5rem;">usuário único</span>',
  'GLOBAL_INFO'                                       => 'requer instalação administrativa e instala para todos os usuários no sistema.',
  'MULTI_USER_INFO'                                   => 'requer instalação administrativa e pode ser instalado para qualquer usuário designado. múltiplos usuários são suportados.',
  'SINGLE_USER_INFO'                                  => 'usuário único, apenas admin. requer instalação administrativa e é instalado e operado pelo usuário administrador.',

  // #4.4.7.5 - examples header
  'EXAMPLES_HEADER'                                   => 'Exemplos',

  // #4.4.7.6 - user management
  'USER_MANAGEMENT_INFO_CONTENT'                      => '<p>As funções de gerenciamento <code>qb user</code> no QuickBox oferecem um conjunto versátil e poderoso de ferramentas para gerenciar eficientemente usuários no seu servidor. Com foco na facilidade de uso e funcionalidade robusta, essas funções permitem que você simplifique o gerenciamento de usuários, melhore a segurança e garanta uma operação suave do servidor.</p>',
  'CREATE_USER_CONTENT'                               => 'Cria uma nova conta de usuário QuickBox',
  'DELETE_USER_CONTENT'                               => 'Exclui conta de usuário QuickBox',
  'CHANGE_USER_PASSWORD'                              => 'Alterar Senha do Usuário',
  'CHANGE_USER_PASSWORD_CONTENT'                      => 'Altera a senha para a conta de usuário designada',
  'BAN_USER_CONTENT'                                  => 'Bane a conta de usuário designada, impedindo login e parando serviços instalados e suas funções.',
  'BAN_USER_PRIMARY_CONTENT'                          => '<p><em>Isso não <strong>exclui</strong> dados do usuário</em>, apenas desabilita serviços em execução e bloqueia acesso.</p>',
  'UNBAN_USER_CONTENT'                                => 'Desbane a conta de usuário designada, permitindo login e iniciando serviços instalados e suas funções',
  'PROMOTE_USER_TO_ADMIN'                             => 'Promover Usuário a Administrador',
  'PROMOTE_USER_TO_ADMIN_CONTENT'                     => 'Promove o usuário designado ao nível de administrador',
  'DEMOTE_USER_FROM_ADMIN'                            => 'Rebaixar Usuário de Administrador',
  'DEMOTE_USER_FROM_ADMIN_CONTENT'                    => 'Rebaixa o usuário designado ao nível de usuário padrão',
  'SET_USER_QUOTA'                                    => 'Definir Cota do Usuário',
  'SHOW_USER_QUOTA'                                   => 'Mostrar Cota do Usuário',
  'SET_USER_SHELL'                                    => 'Definir Shell do Usuário',
  'SET_USER_SHELL_CONTENT'                            => 'Define o ambiente shell para o usuário designado',
  'SET_USER_SHELL_INFO_CONTENT'                       => '<p><strong><code>sudo</code></strong><br>privilégios administrativos completos para o ambiente do servidor (grande poder... etc)<br><strong><code>full</code></strong><br>acesso completo ao ambiente do servidor, com exceção de áreas de maior privilégio; ie: sem sudo e não pode acessar diretórios raiz.<br><strong><code>limited</code></strong><br>o ambiente shell limitado. muito pouco acesso a comandos e preso ao seu próprio diretório home do usuário.</p><hr/><p>Ambientes shell são definidos pelo Administrador do Sistema e podem ser visualizados na página de edição do usuário localizada dentro da <a href="/useradmin.php" rel="noopener nofollow" class="link">página de Administração do Usuário</a>.<br/>Se você gostaria de adicionar um novo ambiente shell, você pode fazer isso editando o arquivo <code>/etc/shells</code> e adicionando o caminho para o ambiente shell que você gostaria de adicionar.</p>',
  'SET_USER_SHELL_DANGER_CONTENT'                     => '<p><strong>Cuidado:</strong> Por favor, esteja ciente de que alterar o ambiente shell para qualquer coisa diferente de <code>/bash</code> pode levar a comportamento não intencional ao usar <code>qb</code> (QuickBox), pois foi especificamente projetado e otimizado para o ambiente <code>/bash</code>. Em resumo, <code>qb</code> depende de recursos e funcionalidades específicas fornecidas pelo shell Bash.<br><br>Para evitar quaisquer problemas potenciais, é aconselhável manter o ambiente <code>/bash</code> ao usar <code>qb</code>. Se você ainda deseja usar um shell diferente, consulte a documentação para esse shell para revisar quaisquer alterações adicionais em caminhos, configurações ou outras configurações que podem precisar ser atualizadas para garantir compatibilidade com <code>qb</code>.</p>',
  'USER_RCLONE_COMPANION_COMMANDS'                    => 'Comandos Companheiros Rclone',

  // #4.4.7.7 - clean functions
  'CLEAN_FUNCTIONS'                                   => 'Funções de Limpeza',
  'CLEAN_FUNCTIONS_INFO_CONTENT'                      => '<p>As funções <code>qb clean</code> no QuickBox oferecem uma maneira conveniente e eficiente de manter a limpeza do seu servidor e otimizar seu desempenho. Projetadas com simplicidade e eficácia em mente, essas funções permitem que você libere memória valiosa, remova desordem desnecessária e garanta uma operação suave e simplificada do servidor.</p>',
  'CLEAN_MEMORY'                                      => 'Limpar Memória',
  'CLEAN_MEMORY_CONTENT'                              => 'Limpa caches de memória QuickBox',
  'CLEAN_DASHBOARD_LOGS'                              => 'Limpar Logs do Painel',
  'CLEAN_DASHBOARD_LOGS_CONTENT'                      => 'Limpa logs do painel QuickBox para o usuário designado',
  'CLEAN_QB_DASHBOARD_LOGS'                           => 'Limpar arquivos de log do Painel QB',
  'CLEAN_QB_DASHBOARD_LOGS_CONTENT'                   => 'Este comando é projetado para limpar o log atual de Ações da UI postado do syslog e redefinir o log de erro Nginx da UI para seu estado inicial',
  'CLEAN_SYSTEM_LOGS'                                 => 'Remover arquivos de log do sistema antigos',
  'CLEAN_SYSTEM_LOGS_CONTENT'                         => 'Este comando é projetado para excluir logs e arquivos compactados no diretório <code>/var/log</code> que excederam o período de retenção designado. O período de retenção é definido para 7 dias por padrão (se nenhum valor opcional for inserido).',
  'CLEAN_RCLONE_UPLOAD_LOGS'                          => 'Limpar Logs de Upload Rclone',
  'CLEAN_RCLONE_UPLOAD_LOGS_CONTENT'                  => 'Limpa logs de upload rclone QuickBox para o usuário designado',
  'CLEAN_LOCKS'                                       => 'Limpar Bloqueios',
  'CLEAN_LOCKS_CONTENT'                               => 'Limpa bloqueios de software QuickBox e apt-dpkg que podem impedir o QuickBox de instalar novo software',

  // #4.4.7.8 - fix functions
  'FIX_FUNCTIONS'                                     => 'Funções de Correção',
  'FIX_FUNCTIONS_INFO_CONTENT'                        => '<p>As funções <code>qb fix</code> no QuickBox fornecem um kit de ferramentas poderoso e amigável ao usuário para abordar problemas comuns e realizar reparos do sistema sem esforço. Com foco na simplicidade e eficácia, essas funções permitem que você solucione e resolva vários problemas que podem surgir no seu servidor, garantindo operações suaves e ininterruptas.</p>',
  'FIX_HOME'                                          => 'Corrigir Home',
  'FIX_HOME_CONTENT'                                  => 'Corrige permissões do diretório home do usuário designado',
  'FIX_PHP'                                           => 'Corrigir PHP',
  'FIX_PHP_CONTENT'                                   => 'Corrige configuração PHP e instala extensões ausentes',
  'FIX_PYTHON'                                        => 'Corrigir Python',
  'FIX_PYTHON_CONTENT'                                => 'Corrige configuração Python e instala extensões ausentes. Além disso, prepara python3.9 se não estiver atualmente disponível no sistema para uso padrão em compilações de aplicação que requerem python',
  'FIX_VERSION'                                       => 'Corrigir Versão',

  // #4.4.7.9 - generate functions
  'GENERATE_FUNCTIONS'                                => 'Funções de Geração',
  'GENERATE_FUNCTIONS_INFO_CONTENT'                   => '<p>As funções <code>qb generate</code> no QuickBox oferecem uma maneira conveniente e eficiente de criar elementos essenciais que melhoram o gerenciamento e monitoramento do servidor. Atualmente, o comando qb generate suporta a função qb generate logs, permitindo que os usuários gerem sem esforço uma prévia das estatísticas do servidor, ativação da api e informações de montagem.<br/>À medida que as funções qb generate evoluem, elas provavelmente oferecerão uma gama crescente de recursos para melhorar ainda mais o gerenciamento do servidor.</p>',
  'GENERATE_SYSTEM_LOGS'                              => 'Gerar Logs do Sistema',
  'GENERATE_SYSTEM_LOGS_CONTENT'                      => 'Gera logs do sistema para a instalação QuickBox atual',
  'GENERATE_SYSTEM_LOGS_SUCCESS_CONTENT'              => '<p>Você pode acessar e baixar este arquivo de log resumido de três maneiras:<br><ol><li><strong>Gerar / Baixar:</strong> Vá para \'Sistema > <a href="/troubleshooting.php" class="link">Solução de Problemas</a> > Log do Sistema\' dentro da interface do usuário. Aqui você pode gerar e/ou baixar o resumo do log do sistema produzido pelo comando generate log.</li><li><strong>Ver Logs:</strong> Vá para \'Sistema > <a href="/logs.php" class="link">Logs do Sistema</a>\'. Aqui é onde você pode encontrar logs adicionais e informações coletadas pelo comando generate log.</li><li><strong>Diretório do Servidor:</strong> Encontre-o no servidor em: \'/srv/quickbox/logs/system_log\'.</li></ol></p>',
  'GENERATE_SYSTEM_LOGS_WARNING_CONTENT'              => '<p><strong>Aviso:</strong> Este comando irá gerar um log abrangente do sistema que pode conter informações sensíveis. Por favor, certifique-se de que este log seja tratado com segurança e não seja compartilhado publicamente.</p>',

  // #4.4.7.10 - manage functions
  'MANAGE_FUNCTIONS'                                  => 'Funções de Gerenciamento',
  'MANAGE_FUNCTIONS_INFO_CONTENT'                     => '<p>As funções <code>qb manage</code> no QuickBox fornecem um conjunto poderoso e abrangente de ferramentas para gerenciar eficientemente vários aspectos do seu servidor. Projetadas com conveniência do usuário em mente, essas funções capacitam você a controlar sem esforço elementos críticos do seu ambiente alimentado pelo QuickBox.<br/>Seja trocando configurações de idioma, verificando o status da sua ativação principal da API, gerenciando distribuição de dados, ou garantindo integridade de dados através de backups e reversões, as funções qb manage oferecem uma solução abrangente para administradores de servidor e entusiastas.</p>',
  'MANAGE_API_KEY'                                    => 'Gerenciar Chave API',
  'MANAGE_API_KEY_CONTENT'                            => 'Gerenciar chaves API QuickBox e listar informações e opções adicionais',
  'ADD_API_KEY'                                       => 'Adicionar Chave API',
  'ADD_API_KEY_CONTENT'                               => 'Adicionar/Ativar chave API',
  'REMOVE_API_KEY'                                    => 'Remover Chave API',
  'REMOVE_API_KEY_CONTENT'                            => 'Remover/Desativar chave API',
  'MANAGE_DATABASE'                                   => 'Gerenciar Banco de Dados',
  'MANAGE_DATABASE_CONTENT'                           => 'Gerenciar qual banco de dados é usado para QuickBox',
  'MANAGE_DATABASE_CONNECTION_INFO_CONTENT'           => 'Por favor, note que ao especificar um nome de usuário e senha (se as opções forem usadas), eles não precisam corresponder às credenciais da sua conta principal atual. Essas credenciais são destinadas para uso do sistema local, particularmente para conexões de banco de dados e várias funções do sistema. Portanto, elas podem ser únicas e independentes do nome de usuário e senha da sua conta principal.',
  'MANAGE_DATABASE_INFO_CONTENT'                      => 'O QuickBox utiliza principalmente SQLite3 como seu banco de dados padrão. No entanto, você tem a opção de alternar perfeitamente entre SQLite3 e MySQL usando este comando. Se você optar pelo MySQL, certifique-se de ter um servidor MySQL adequadamente instalado e configurado no seu sistema. Além disso, você precisará de uma conta de usuário MySQL com permissões adequadas para criação e gerenciamento de banco de dados. Executar este comando facilita essas configurações necessárias, incluindo a instalação do servidor e cliente MySQL se eles não estiverem já instalados no seu sistema. Durante o processo, você será solicitado a instalar o servidor e cliente MySQL se eles não forem detectados. Além disso, o comando lida com a configuração de configuração, garantindo integração perfeita com QuickBox. Por favor, note que todos os parâmetros exceto <code>-o [mysql|sqlite]</code> são opcionais e irão padrão para valores predefinidos dentro do script.<br><br>Os valores padrão são os seguintes:<br><code>user=admin, pass=%random%, port=3306, host=localhost, name=qbpro</code><br><br>Detalhes do MySQL podem ser encontrados em <code>/root/.my.cnf</code>.<br><br>Para converter de volta para SQLite3, simplesmente execute o comando novamente com a flag <code>-o sqlite</code>.',
  'MANAGE_DATABASE_BACKUP'                            => 'Gerenciar Backup do Banco de Dados',
  'MANAGE_DATABASE_BACKUP_CONTENT'                    => 'Fazer backup do banco de dados QuickBox',
  'MANAGE_DATABASE_BACKUP_INFO_CONTENT'               => 'O processo de backup do QuickBox é executado automaticamente a cada 24 horas às 3:30 AM (hora do servidor) como parte da programação de manutenção. Esta tarefa está listada na programação <code>/etc/cron.d/quickbox</code> como:<br><br><code>30 3 * * * root /usr/local/bin/qb manage db -o maintenance --cron</code><br><br>No entanto, você pode acionar manualmente um backup (sem executar a rotina de manutenção) usando o comando acima.<br><br><strong>Sobre o Processo de Backup</strong><br><br>Cada backup cria um instantâneo do banco de dados QuickBox, fornecendo um ponto de restauração para salvaguardar a integridade dos dados em caso de perda ou corrupção de dados. Arquivos de backup são salvos em um diretório especificado, com o sistema retendo os 5 backups mais recentes para garantir que você sempre tenha múltiplos pontos de restauração disponíveis para recuperação.<br><br><strong>Localizações dos Arquivos de Backup</strong><br><br>Arquivos de backup são armazenados nos seguintes diretórios:<br><br><strong>MySQL</strong>: <code>/opt/quickbox/backup/system/[DATE_TIME]/db/qbpro.sql</code><br><strong>SQLite</strong>: <code>/opt/quickbox/backup/system/[DATE_TIME]/db/qbpro.db</code>',
  'MANAGE_DATABASE_MAINTENANCE'                       => 'Gerenciar Manutenção do Banco de Dados',
  'MANAGE_DATABASE_MAINTENANCE_CONTENT'               => 'Iniciar o processo de manutenção do banco de dados QuickBox',
  'MANAGE_DATABASE_MAINTENANCE_INFO_CONTENT'          => 'O processo de manutenção do QuickBox é projetado para manter o banco de dados funcionando suavemente e eficientemente. Este processo inclui:<br><br><ol><li>Limpando dados desnecessários.</li><li>Otimizando tabelas do banco de dados.</li><li>Executando outras tarefas de manutenção para aumentar a eficiência e prevenir problemas de dados, como verificar e reparar tabelas.</li><li>Acionando uma notificação de Mensagem do Dia (MotD) para alertar o administrador do sistema via CLI se erros irrecuperáveis ocorrerem.</li></ol><p><strong>Quando a Manutenção Executa</strong><br><br>O processo de manutenção é executado automaticamente a cada 24 horas às 3:30 AM hora do servidor. Esta tarefa está listada na programação <code>/etc/cron.d/quickbox</code> como:<br><br><code>30 3 * * * root /usr/local/bin/qb manage db -o maintenance --cron</code><br><br>No entanto, você pode acionar manualmente a manutenção usando o comando acima.<br><br><strong>Por que a Manutenção é Importante</strong><br><br>A manutenção regular garante que seu banco de dados QuickBox permaneça saudável, mantém o desempenho do sistema alto e protege seus dados.</p>',
  'MANAGE_DATABASE_RESTORE'                           => 'Gerenciar Restauração do Banco de Dados',
  'MANAGE_DATABASE_RESTORE_CONTENT'                   => 'Restaurar o banco de dados QuickBox',
  'MANAGE_DATABASE_RESTORE_INFO_CONTENT'              => 'Este comando inicia o processo de restauração do banco de dados, permitindo que você selecione um arquivo de backup específico para restaurar. O processo de restauração é projetado para recuperar dados em caso de perda ou corrupção de dados, fornecendo uma maneira confiável e eficiente de restaurar seu banco de dados QuickBox para um estado anterior.<br><br><strong>Como o Processo de Restauração Funciona</strong><br><br>Quando você executa o comando de restauração, você será apresentado com um menu de seleção listando todos os arquivos de backup do banco de dados disponíveis. Você pode então escolher o arquivo de backup que deseja restaurar, e o sistema irá automaticamente restaurar o arquivo de backup selecionado, retornando seu banco de dados QuickBox ao estado em que estava quando o backup foi criado.',
  'MANAGE_DASHBOARD_ACCESS_URL'                       => 'Gerenciar URL de acesso do painel',
  'MANAGE_DASHBOARD_ACCESS_URL_CONTENT'               => 'Este comando define a raiz web do servidor para acesso ao painel para o Domínio expresso ou Endereço IP',
  'SET_SERVER_LANG'                                   => 'Definir Idioma do Servidor',
  'SET_SERVER_LANG_CONTENT'                           => 'Este comando irá definir o idioma solicitado como o idioma padrão para o servidor',
  'MANAGE_PUBLIC_TRACKERS'                            => 'Gerenciar Rastreadores Públicos',
  'MANAGE_PUBLIC_TRACKERS_CONTENT'                    => 'Este comando irá habilitar ou desabilitar rastreadores públicos para todos os usuários',
  'EX_PUB_TRACKERS_ALLOW'                             => 'exemplo para permitir rastreadores públicos:',
  'EX_PUB_TRACKERS_DISALLOW'                          => 'exemplo para não permitir rastreadores públicos:',
  'BACKUP_APPLICATIONS'                               => 'Fazer Backup de Aplicações',
  'PARTIAL_CONFIG_ONLY_BACKUP'                        => 'Backup Parcial <span class="badge badge-pills outline-badge-secondary badge-table-menu" style="padding:2px 6px;line-height:0.7rem;font-size:0.5rem;">apenas config</span>',
  'PARTIAL_CONFIG_ONLY_BACKUP_CONTENT'                => 'Este comando irá fazer backup da config da aplicação designada para o usuário designado',
  'FULL_CONFIG_AND_APP_BACKUP'                        => 'Backup Completo <span class="badge badge-pills outline-badge-primary badge-table-menu" style="padding:2px 6px;line-height:0.7rem;font-size:0.5rem;">config &amp; app</span>',
  'FULL_CONFIG_AND_APP_BACKUP_CONTENT'                => 'Este comando irá fazer backup da config da aplicação designada e arquivos da aplicação para o usuário designado',
  'PARTIAL_RTORRENT_ALL_USERS_BACKUP'                 => 'Backup Parcial (apenas rtorrent)',
  'PARTIAL_RTORRENT_ALL_USERS_BACKUP_PRIMARY_CONTENT' => '<p>No caso de rtorrent como o software config para backup, a flag de nome de usuário (<code>-u</code>) não é necessária.</p>',
  'PARTIAL_RTORRENT_ALL_USERS_BACKUP_CONTENT'         => 'Este comando irá fazer backup de todos os usuários rtorrent existentes arquivos .rtorrent.rc.<br>Backups são armazenados em:<br><code>/home/[USERNAME]/.QuickBox/software/rtorrent/backup/.rtorrent.rc_YEAR-MONTH-DAY_HOUR:MINUTE</code>',
  'ROLLBACK_APPLICATIONS'                             => 'Reversão de Backup de Aplicação',
  'ROLLBACK_APPLICATIONS_CONTENT'                     => 'Reversão de backups de aplicação para um estado anterior',
  'RESTORE_APP_BACKUP_CONFIG'                         => 'Restaurar Backup <span class="badge badge-pills outline-badge-secondary badge-table-menu" style="padding:2px 6px;line-height:0.7rem;font-size:0.5rem;">apenas config</span>',
  'RESTORE_APP_BACKUP_CONFIG_CONTENT'                 => 'Este comando irá restaurar a config da aplicação designada previamente em backup para o usuário designado',
  'RESTORE_APP_DEFAULT_CONFIG'                        => 'Restaurar Padrão <span class="badge badge-pills outline-badge-secondary badge-table-menu" style="padding:2px 6px;line-height:0.7rem;font-size:0.5rem;">apenas config</span>',
  'RESTORE_APP_DEFAULT_CONFIG_CONTENT'                => 'Este comando irá restaurar a config padrão designada (da instalação) da aplicação para o usuário designado',

  // #4.4.7.11 - news functions
  'NEWS_FUNCTIONS'                                    => 'Funções de Notícias',
  'NEWS_FUNCTIONS_INFO_CONTENT'                       => '<p>As funções <code>qb news</code> no QuickBox fornecem as informações mais recentes e atualizações sobre o projeto QuickBox. Mantenha-se informado sobre novos recursos, correções de bugs e anúncios importantes.</p>',
  'NEWS'                                              => 'Notícias',
  'NEWS_CONTENT'                                      => 'Ver notícias mais recentes do QuickBox',

  // #4.4.7.12 - support functions
  'SUPPORT_FUNCTIONS'                                 => 'Funções de Suporte',
  'SUPPORT_FUNCTIONS_INFO_CONTENT'                    => '<p>A função <code>qb support</code> no QuickBox oferece um método seguro e confiável para conceder acesso da equipe de suporte ao seu servidor quando a assistência for necessária. Com forte ênfase na segurança e proteção do usuário, este recurso utiliza a conta <code>quickSupport</code>, garantindo que apenas pessoal de suporte autorizado possa acessar seu servidor.</p>',
  'ENABLE_SUPPORT'                                    => 'Habilitar Suporte',
  'ENABLE_SUPPORT_CONTENT'                            => 'Habilitar suporte. Tipicamente designado para o membro da equipe que é responsável pelo suporte',
  'DISABLE_SUPPORT'                                   => 'Desabilitar Suporte',
  'DISABLE_SUPPORT_CONTENT'                           => 'Desabilitar suporte. Caso contrário, a conta de suporte irá automaticamente se excluir após 36 horas',

  // #4.4.7.13 - update functions
  'UPDATE_FUNCTIONS'                                  => 'Funções de Atualização',
  'UPDATE_FUNCTIONS_INFO_CONTENT'                     => '<p>A função <code>qb update</code> no QuickBox oferece uma maneira conveniente e flexível de gerenciar atualizações para sua instalação QuickBox. Com este recurso, você tem controle total sobre o processo de atualização, permitindo que você verifique manualmente atualizações e escolha quando aplicá-las.</p>',
  'UPDATE_CHECK'                                      => 'Verificar Atualização',
  'UPDATE_CHECK_CONTENT'                              => 'Verificar atualizações para QuickBox',
  'UPDATE_QUICKBOX'                                   => 'Atualizar QuickBox',
  'UPDATE_QUICKBOX_CONTENT'                           => 'Atualizar instalação QuickBox para a versão mais recente, se houver disponível',

  // #4.4.7.14 - bugs & reporting
  'BUGS'                                              => 'Bugs & Relatórios',
  'BUGS_INFO_CONTENT'                                 => '<p>A exibição gráfica da documentação do QuickBox receberá atualizações regulares para garantir que as informações fornecidas permaneçam facilmente acessíveis e amigáveis ao usuário. Nosso compromisso de melhorar sua experiência com o QuickBox nos leva a continuamente refinar e melhorar a documentação, mantendo-a atualizada com os recursos e funcionalidades mais recentes.<br/><br/>
Com cada atualização, nos esforçaremos para simplificar conceitos complexos, esclarecer instruções e incorporar feedback do usuário para tornar a página de manual qb ainda mais intuitiva e eficiente. Nosso objetivo é capacitá-lo com uma compreensão perfeita do QuickBox e suas vastas capacidades, permitindo que você domine o ambiente CLI qb e gerencie sem esforço suas tarefas de servidor.<br/><br/>
Valorizamos sua contribuição e encorajamos você a compartilhar quaisquer sugestões ou ideias que possa ter para melhorar ainda mais a página de manual qb. Seu feedback é instrumental em moldar este recurso e garantir que ele permaneça uma referência valiosa para todos os usuários do QuickBox. Na verdade, esta página existe porque foi solicitada! 🤪<br/><br/>
Reporte quaisquer bugs reproduzíveis ou sugestões para <strong><a href="https://nullrefer.ir/?https://github.com/QuickBox/pro-v3/issues" rel="noopener nofollow" target="_blank">Rastreador de Problemas e Recursos do QuickBox.IO Labs</a></strong></p>',

  // #4.4.7.15 - disclaimer
  'DISCLAIMER'                                        => 'Aviso Legal',
  'DISCLAIMER_TEXT'                                   => '<p>Este script é destinado para uso geral e nenhuma garantia é implícita para adequação a qualquer tarefa específica. O QuickBox.IO não será responsável pela sua configuração ou qualquer dano feito ao usar/instalar/modificar este script ou qualquer um de seus plugins. Por favor, tenha em mente que nem o QuickBox.IO nem sua equipe são responsáveis por manter seu Software e/ou Servidor atualizado; esta é uma responsabilidade deixada unicamente ao usuário do software QuickBox Pro.</p>',

  // #4.4.7.16 - license
  'LICENSE'                                           => 'Licença',
  'LICENSE_SET'                                       => 'Licenciado sob BSD 3-Clause',
  'LICENSE_TEXT'                                      => '<p>Copyright (c) 2018-2025, QuickBox.IO. Todos os direitos reservados.</p>
<p>Redistribuição e uso em formas de origem e binárias, com ou sem modificação, são permitidas desde que as seguintes condições sejam atendidas:</p>
<ul style="font-size:0.75rem"><li>Redistribuições de código de origem devem reter o aviso de copyright acima, esta lista de condições e o seguinte aviso.</li>
<li>Redistribuições em forma binária devem reproduzir o aviso de copyright acima, esta lista de condições e o seguinte aviso na documentação e/ou outros materiais fornecidos com a distribuição.</li>
<li>Nem o nome do titular dos direitos autorais nem os nomes de seus contribuidores podem ser usados para endossar ou promover produtos derivados deste software sem permissão específica prévia por escrito.</li></ul>
<p>ESTE SOFTWARE É FORNECIDO PELOS TITULARES DOS DIREITOS AUTORAIS E CONTRIBUIDORES \'COMO ESTÁ\' E QUAISQUER GARANTIAS EXPRESSAS OU IMPLÍCITAS, INCLUINDO, MAS NÃO SE LIMITANDO A, AS GARANTIAS IMPLÍCITAS DE COMERCIABILIDADE E ADEQUAÇÃO PARA UM PROPÓSITO ESPECÍFICO SÃO NEGADAS. EM NENHUM EVENTO O TITULAR DOS DIREITOS AUTORAIS OU CONTRIBUIDORES SERÃO RESPONSÁVEIS POR QUAISQUER DANOS DIRETOS, INDIRETOS, INCIDENTAIS, ESPECIAIS, EXEMPLARES OU CONSEQUENCIAIS (INCLUINDO, MAS NÃO SE LIMITANDO A, AQUISIÇÃO DE BENS OU SERVIÇOS SUBSTITUTOS; PERDA DE USO, DADOS OU LUCROS; OU INTERRUPÇÃO DE NEGÓCIOS) NO ENTANTO CAUSADOS E EM QUALQUER TEORIA DE RESPONSABILIDADE, SEJA EM CONTRATO, RESPONSABILIDADE ESTRITA OU DELITO (INCLUINDO NEGLIGÊNCIA OU DE OUTRA FORMA) SURGINDO DE QUALQUER FORMA DO USO DESTE SOFTWARE, MESMO SE ADVISADO DA POSSIBILIDADE DE TAIS DANOS.</p>',

  // #4.4.7.17 - misc
  'EXAMPLE'                                           => 'exemplo:',
  'EXAMPLES'                                          => 'exemplos:',
  'LOG_MAINTENANCE'                                   => 'Manutenção de Log'
];
