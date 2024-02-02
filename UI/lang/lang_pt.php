<?php

/**
 * QuickBox Pro Portuguese Language File
 *
 * This file is used to translate the QuickBox Pro Dashboard into Portuguese.
 * Ready for QuickBox Pro v3.0.1 : January 20, 2024
 *
 * @package    dashboard
 * @subpackage lang
 * @category   Portuguese
 * @version    3.0.1.36
 * @since      1.0.0
 *
 * @var Configs $configs The configurations object.
 * @var Session $session The user session object.
 */

// Include required variables
$version  = $configs->getConfig('Version');
$username = $session->username;

/*
 * SUMMARY :
 *
 * NAVIGATION : #1
 *    language & theme selection : #1.1
 *    user menu : #1.2
 *    sidebar menu : #1.3
 *    sidebar submenus : #1.4
 *    footer : #1.5
 * MISCELLANEOUS : #2
 *    buttons : #2.1
 *    popup texture : #2.2
 *    app nginx config edit modal : #2.3
 *    other : #2.4
 * WIDGETS : #3
 *    Tables Headers : #3.1
 *       app management center : #3.1.1
 *    Package Management Center : #3.2
 *       app info : #3.2.1
 *       app uninstall : #3.2.2
 *       app reinstall : #3.2.3
 *       toggles & tooltips : #3.2.4
 *       service control : #3.2.5
 *       rclone specific toggles : #3.2.6
 *    Dashboard Widgets : #3.3
 *       disk status widget : #3.3.1
 *       system index v1 - bandwidth data : #3.3.2
 *       system index v1 - server load : #3.3.3
 *       system index v1 - memory status : #3.3.4
 *       server activity widget : #3.3.5
 * PAGES : #4
 *    Start Screen Forms : #4.1
 *       login : #4.1.1
 *       forgot password : #4.1.2
 *       register : #4.1.3
 *       account : #4.1.4
 *         quotes : #4.1.4.1
 *         edit account modal : #4.1.4.2
 *       summary : #4.1.5
 *    Settings : #4.2
 *       general settings : #4.2.1
 *       email settings : #4.2.2
 *       session settings : #4.2.3
 *       user settings : #4.2.4
 *       security settings : #4.2.5
 *    User Management : #4.3
 *       registration settings : #4.3.1
 *       useradmin : #4.3.2
 *         admin user edit : #4.3.2.1
 *         admin announce : #4.3.2.2
 *       user groups : #4.3.3
 *    System : #4.4
 *       web console : #4.4.1
 *       api-control : #4.4.2
 *       ssl-control : #4.4.3
 *       troubleshooting : #4.4.4
 *       system logs : #4.4.5
 *       help manual : #4.4.6
 *         description : #4.4.6.1
 *         options : #4.4.6.2
 *         software : #4.4.6.3
 *         software options table : #4.4.6.4
 *         examples header : #4.4.6.5
 *         user management : #4.4.6.6
 *         clean functions : #4.4.6.7
 *         fix functions : #4.4.6.8
 *         generate functions : #4.4.6.9
 *         manage functions : #4.4.6.10
 *         news functions : #4.4.6.11
 *         support functions : #4.4.6.12
 *         update functions : #4.4.6.13
 *         bugs & reporting : #4.4.6.14
 *         disclaimer : #4.4.6.15
 *         license : #4.4.6.16
 *         misc : #4.4.6.17
 *       changelogs / update : #4.4.7
 *       system dashboard : #4.4.8
 *    Error Pages : #4.5
 */

/* ********************************************************************************
 * #1 NAVIGATION
 *
 * #1.1 - language & theme selection
 ************************************/
$L['CHINESE']         = 'Chinês';
$L['DANISH']          = 'Dinamarquês';
$L['ENGLISH']         = 'Inglês';
$L['FRENCH']          = 'Francês';
$L['GERMAN']          = 'Alemão';
$L['PORTUGUESE']      = 'Português';
$L['SELECT_LANGUAGE'] = 'Clique para selecionar o idioma';
$L['SELECT_THEME']    = 'Clique para selecionar o tema';
$L['SPANISH']         = 'Espanhol';
$L['THEME_DARK']      = 'Tema Negro';
$L['THEME_LIGHT']     = 'Tema Leve';

/* **********************************
 * #1.2 - user menu (top right)
 ************************************/
$L['LOG_OUT'] = 'Sair';
$L['PROFILE'] = 'O meu Perfil';
$L['REBOOT']  = 'Reiniciar';

/* **********************************
 * #1.3 - sidebar menus
 ************************************/
$L['ABOUT_AND_TIPS']    = 'About / QuickTips';
$L['APP_DASHBOARD']     = 'Painel de controlo de Software';
$L['DASHBOARD']         = 'Meus Painéis';
$L['DB_MGMNT']          = 'phpMyAdmin';
$L['EXTERNAL_LINKS']    = 'Ligações Personalizadas';
$L['GENERAL_SETTINGS']  = 'Configurações Gerais';
$L['HELP_SUPPORT']      = 'Ajuda / Atualização';
$L['KB']                = 'Base de Conhecimento';
$L['PLUGINS']           = 'Plugins';
$L['REGISTRATION']      = 'Inscrição';
$L['SECURITY_SETTINGS'] = 'Configurações de Segurança';
$L['SESSION_SETTINGS']  = 'Configurações de Sessão';
$L['SETTINGS']          = 'Configurações';
$L['SYS_DASHBOARD']     = 'Painel do sistema';
$L['SYSTEM_LOGS']       = 'Registos do sistema';
$L['SYSTEM']            = 'Sistema';
$L['USER_ADMIN']        = 'Administrar de Usuários';
$L['USER_GROUPS']       = 'Grupos de Usuários';
$L['USER_MANAGEMENT']   = 'Gestão de Utilizadores';
$L['USER_SETTINGS']     = 'Configurações do Usuário';
$L['WEB_CONSOLE']       = 'Console Web';

/* **********************************
 * #1.4 - sidebar submenus
 ************************************/
$L['APP_MENU']        = 'Menu de Software';
$L['APPLICATIONS']    = 'Meu software';
$L['DASHBOARD_INFO']  = 'Seleccionar entre o painel do sistema administrativo ou o painel de aplicação visto por todos os utilizadores.';
$L['DASHBOARD_VIEW']  = 'Vista do painel de instrumentos';
$L['DOWNLOADS']       = 'Transferências';
$L['FILEMANAGER']     = 'Gestor de Ficheiros';
$L['PLUGINS_CENTER']  = 'Centro de Plugins';
$L['PLUGINS_INFO']    = 'Instalar e desinstalar facilmente os plugins simplesmente clicando no nome do plugin.';
$L['RPLUGINS_NOTICE'] = 'Facilmente instale e desinstale os plugins do ruTorrent simplesmente clicando no nome do plugin';
$L['RPLUGINS']        = 'Plugins ruTorrent';
$L['TORRENT_CLIENTS'] = 'Clientes Torrent';

/* **********************************
 * #1.5 - footer
 ************************************/
$L['ALL_RIGHTS'] = 'Todos os direitos reservados.';

/* ********************************************************************************
 * #2 MISCELLANEOUS
 *
 * #2.1 - buttons
 ************************************/
$L['ACTIVATE_USERS']                = 'Ativar Usuários';
$L['ADD_IP_ADDRESS']                = 'Adicionar endereço IP';
$L['ADD_USERNAME']                  = 'Adicionar nome de usuário';
$L['AGREE']                         = 'Eu entendo, faça isso!';
$L['API_ACTIVATE']                  = 'Ativar';
$L['APP_MANAGEMENT']                = 'Gestão de software';
$L['APPS_INSTALLED']                = 'Software instalado';
$L['AUTO_DISABLE']                  = 'Desativar atualizações automáticas';
$L['AUTO_ENABLE']                   = 'Ativar atualizações automáticas';
$L['BACK']                          = 'Voltar';
$L['BAN_USER']                      = 'Proibir Utilizador';
$L['CANCEL']                        = 'Cancelar';
$L['CLEAN_LOG']                     = 'Limpar registro de atualização';
$L['CLEAN_RCLOG']                   = 'Limpar o registro de upload do RClone';
$L['CLICK_ME']                      = 'Clique aqui';
$L['CLOSE_REFRESH']                 = 'Fechar e Atualizar';
$L['CLOSE']                         = 'Fechar';
$L['CPU_TAB']                       = 'CPU';
$L['CREATE_ANNOUNCEMENT']           = 'Criar anúncio';
$L['CREATE_GROUP']                  = 'Criar grupo';
$L['CREATE_NEW_GROUP']              = 'Crie um novo grupo';
$L['CREATE_NEW_USER']               = 'Criar novo usuário';
$L['CREATE_USER']                   = 'Criar usuário';
$L['DELETE_ALL_ANNOUNCEMENTS']      = 'Excluir todos os anúncios';
$L['DELETE_ALL_LOGS']               = 'Excluir todos os registros (> 30 dias)';
$L['DELETE_INACTIVE_USERS']         = 'Excluir usuários inativos';
$L['DELETE_LOGS']                   = 'Excluir logs';
$L['DELETE_SELECTED_ANNOUNCEMENTS'] = 'Excluir anúncios selecionados';
$L['DELETE_SELECTED_SESSIONS']      = 'Excluir Sessões Selecionadas';
$L['DELETE_SELECTED']               = 'Excluir selecionado';
$L['DELETE_USER']                   = 'Eliminar Utilizador';
$L['DEMOTE']                        = 'Demonstração de Admin';
$L['DISABLED']                      = 'Desativado';
$L['DISK_TAB']                      = 'Disco';
$L['DOWNLOAD']                      = 'Descarregar';
$L['EDIT_ANNOUNCEMENT']             = 'Editar anúncio selecionado';
$L['EDIT_GROUP']                    = 'Editar grupo';
$L['EDIT_USER']                     = 'Editar Utilizador';
$L['ENABLED']                       = 'Ativado';
$L['EXECUTE']                       = 'Executar';
$L['GENERATE']                      = 'Gerar';
$L['GO_BACK']                       = 'Voltar';
$L['IN_USE']                        = 'Em uso';
$L['INSTALL']                       = 'Instalar';
$L['INSTALLED']                     = 'Desinstalar';
$L['INSTALLING']                    = 'Instalando';
$L['KILL_USER_SESSION']             = 'Finalisar todas as sessões do usuário';
$L['LAUNCH']                        = 'Lançamento';
$L['LOGIN']                         = 'Login';
$L['LOGOFF']                        = 'Logoff';
$L['MEMORY_TAB']                    = 'Memória';
$L['NETWORK_TAB']                   = 'Rede';
$L['NGINX_BACKUP']                  = 'Configuração do Nginx Backup';
$L['NGINX_DEFAULT']                 = 'Restaurar Configuração Padrão';
$L['NGINX_DISABLE']                 = 'Desativar o Popup de Autenticação';
$L['NGINX_ENABLE']                  = 'Ativar Popup de Autenticação';
$L['NGINX_RESTORE']                 = 'Restaurar Backup do Nginx';
$L['APP_BACKUP_FULL']               = 'Backup Completo';
$L['APP_BACKUP_PARTIAL']            = 'Backup parcial';
$L['APP_DEFAULT_PARTIAL_RESTORE']   = 'Restaurar padrão';
$L['APP_BACKUP_PARTIAL_RESTORE']    = 'Restaurar backup';
$L['ED_MENU_CONFIG_APP']            = 'config e app';
$L['ED_MENU_CONFIG']                = 'somente config';
$L['VERSION_ROLLBACK_OPTIONS']      = 'Opções de reversão';
$L['VERSION_ROLLBACK_V']            = 'Versão: ';
$L['VERSÃO']                       = 'Versão';
$L['DATA']                          = 'Data';
$L['VERSION_ROLLBACK_CONFIRM']      = 'Reverter para esta versão?';
$L['VERSION_ROLLBACK_DELETE']       = 'Excluir este backup?';
$L['PROMOTE']                       = 'Promover a Administração';
$L['RCLONE_LOCK_REMOVE']            = 'remover bloqueio';
$L['RCLONE_LOGS']                   = 'ver registros';
$L['RCLONE_UPLOAD']                 = 'envio';
$L['REFRESH']                       = 'Atualizar';
$L['REGISTER']                      = 'Registo';
$L['REGISTERED']                    = 'Registrado';
$L['REINSTALL']                     = 'Reinstalar';
$L['RELOAD_CONF']                   = 'Recarregar configurações';
$L['RELOAD']                        = 'Recarregar';
$L['REMOVE_BANNED_IP']              = 'Remover endereços IP proibidos';
$L['REMOVE_DISALLOWED']             = 'Remover nomes de usuários não permitidos';
$L['REMOVE_MEMBER']                 = 'Remover Membro do Grupo';
$L['REMOVE']                        = 'Remover';
$L['RESET_VERSION']                 = 'Redefinir versão atual';
$L['RESET']                         = 'Redefinir';
$L['SAVE']                          = 'Salve';
$L['SERVICE_CONTROL']               = 'Controle de Serviço';
$L['SIMULATE_BUTTON']               = 'Simular';
$L['SIMULATE_END']                  = 'Terminar simulação';
$L['SIMULATE_USER']                 = 'Simular Utilizador';
$L['NANGINX']                       = 'Serviço N/A funciona em nginx';
$L['START']                         = 'Início';
$L['STOP']                          = 'Parar';
$L['SUBMIT']                        = 'Executar alterações';
$L['TOP_PROC_TAB']                  = 'Processos de Topo';
$L['UNBAN_USER']                    = 'Utilizador Unban';
$L['UNINSTALLED']                   = 'Desinstalado';
$L['UNINSTALLING']                  = 'Desinstalando';
$L['UP']                            = 'Acima';
$L['UPDATE']                        = 'Atualizar';
$L['UPDATE_TOOLTIP']                = 'Clique para ver mais informações';
$L['UPDATE_VERSION']                = 'Versão de atualização';
$L['USER_ACTIONS']                  = 'Acções do utilizador';
$L['VIEW_CHANGELOG']                = 'Ver Changelog';
$L['LATEST']                        = 'mais recente';
$L['CURRENT']                       = 'atual';
$L['VIEW']                          = 'Visão';

/* **********************************
 * #2.2 - popup texture
 ************************************/
$L['SYSTEM_RESPONSE_TITLE'] = 'Resposta do sistema';
$L['UNINSTALL_TITLE']       = 'Desinstalando';
$L['UNINSTALLING_TXT_1']    = 'Desculpe ver você ir ... Desinstalando';
$L['UNINSTALLING_TXT_2']    = 'em progresso. Por favor, seja paciente';

/* **********************************
 * #2.3 - app nginx config edit modal
 ************************************/
$L['ALERT_NGINX_EDITOR']  = 'É aconselhável fazer o backup da sua configuração atual primeiro e somente alterar a configuração abaixo se você for bem versado com o Nginx ou for instruído por um membro da equipe';
$L['BACKUP_NGINX_LOC']    = 'Localização de backup da configuração do Nginx';
$L['CURRENT_NGINX_LOC']   = 'Localização atual da configuração do Nginx';
$L['NGINX_APP_CONFIGURE'] = 'Editor da configuração do Nginx';
$L['NGINX_EDIT']          = 'Editar configuração do Nginx';
$L['ALERT_CONFIG_EDITOR'] = 'Aconselha-se a fazer primeiro o backup da sua configuração actual e só alterar a configuração abaixo se tiver conhecimento das edições que estão a ser feitas, se tiver consultado a própria documentação da aplicação ou se estiver a ser instruído por um membro do pessoal';
$L['BACKUP_CONFIG_LOC']   = 'Configurar local de cópia de segurança';
$L['CURRENT_CONFIG_LOC']  = 'Configurar Localização Actual';
$L['APP_CONFIG_OPTIONS']  = 'Editor de configuração de software';
$L['APP_CONFIG_EDIT']     = 'Configurar software de edição';

/* **********************************
 * #2.4 - other
 ************************************/
$L['ABOUT_RELEASE']      = 'Sobre o Release';
$L['EMAIL']              = 'E-mail';
$L['HERE']               = 'aqui';
$L['HOME']               = 'Home';
$L['IDLE_L']             = 'ocioso';
$L['IDLE']               = 'Ocioso';
$L['IS_AVAILABLE']       = 'está disponível.';
$L['LANGUAGES']          = 'Línguas';
$L['NANGINX']            = 'Executando no Nginx';
$L['NEED_HELP']          = 'Preciso de ajuda ?';
$L['NGINX_CONF_OPTIONS'] = 'Opções de configuração do Nginx';
$L['NGINX_CONFIG']       = 'Configuração Nginx';
$L['NGINX_SETTINGS']     = 'Configurações Nginx';
$L['NO']                 = 'Não';
$L['NOTIFICATIONS']      = 'Notificações';
$L['OPEN']               = 'abrir';
$L['OR']                 = 'ou';
$L['PASSWORD']           = 'Senha';
$L['PLEASE_HOLD']        = '- Por favor, espere';
$L['REQUIRED_FIELD']     = 'Campo obrigatório...';
$L['REQUIRED_FIELDS']    = 'Campos marcados com <span style="color:#d9534f">*</span> é requerido';
$L['SET_HERE']           = 'Coloque aqui';
$L['SIMULATE_LIST']      = 'Lista de usuários';
$L['SIMULATE']           = 'Simular usuários';
$L['SUMMARY']            = 'Resumo';
$L['THEMES']             = 'Temas';
$L['UPDATING_QUICKBOX']  = 'Atualizando o QuickBox';
$L['UPDATING']           = 'Atualizando ';
$L['USED_L']             = 'usado';
$L['USERNAME']           = 'Nome de usuário';
$L['USERS']              = 'Usuários';
$L['YES']                = 'Sim';

/* ********************************************************************************
 * #3 WIDGETS
 *
 * #3.1 - Tables Headers
 *
 * #3.1.1 - app management center
 ************************************/
$L['AVAILABILITY'] = 'Disponibilidade';
$L['DETAILS']      = 'Detalhes';
$L['NAME']         = 'Nome';
$L['CONFIGS']      = 'Konfigurációk';
$L['EXTRAS']       = 'Extras';

/* **********************************
 * #3.2 - Package Management Center
 *
 * #3.2.1 - app info
 ************************************/
$L['AIRSONIC']      = 'Airsonic-Advanced é uma implementação mais moderna do garfo Airsonic com vários desempenhos chave e melhorias de características. Acrescenta e substitui várias características em Airsonic. Airsonic é um media streamer gratuito, baseado na web, proporcionando um acesso omnipresente à sua música.';
$L['AUTOBRR']       = 'Autobrr é um único substituto binário moderno para o plugin autodl-irssi+rutorrent. Autobrr monitora canais de anúncios de IRC e feeds RSS torznab para obter lançamentos assim que estiverem disponíveis, com boa filtragem e suporte a regex.';
$L['AUTODL']        = 'AutoDL-iRSSi é um plugin para o irssi que monitora o IRC, anuncia canais e baixa arquivos torrent baseados em filtros definidos pelo usuário.';
$L['AUTOSCAN']      = 'Autoscan substitui o comportamento padrão de Plex e Emby para recolher as alterações de ficheiros no sistema de ficheiros. Autoscan integra-se com Sonarr, Radarr, Lidarr e Google Drive para ir buscar as alterações em tempo quase real sem depender do sistema de ficheiros';
$L['BAZARR']        = 'Bazarr é um aplicativo que complementa Sonarr e Radarr. Ele gerencia e baixa legendas com base em seus requisitos. Você define suas preferências por programa de TV ou filme e Bazarr cuida de tudo para você.';
$L['BAZARR4K']      = 'Bazarr4K é um clone autônomo do Bazarr para perfis 4K UHD. É um meio de lidar com várias instâncias do Bazarr, mantendo o conteúdo UHD separado do conteúdo geral.';
$L['BBR']           = 'BBR é um novo algoritmo de controle de congestionamento que é contribuído para a pilha TCP do kernel Linux do Google. Com o BBR no lugar, um servidor Linux pode obter uma taxa de transferência significativamente maior e reduzir a latência das conexões. BBR';
$L['BTSYNC']        = 'BitTorrent Sync por BitTorrent, Inc é uma ferramenta de sincronização de arquivos peer-to-peer proprietária.';
$L['CALIBRE']       = 'Calibre é um conjunto de software de e-book de código aberto multiplataforma. O Caliber suporta a organização de e-books existentes em bibliotecas virtuais, exibindo, editando, criando e convertendo e-books, bem como sincronizando e-books com uma variedade de e-readers. A edição de livros é compatível com os formatos EPUB e AZW3.';
$L['COUCHPOTATO']   = 'Baixe filmes automaticamente, com facilidade e com a melhor qualidade assim que forem lançados, via usenet ou torrents.';
$L['CSF']           = 'ConfigServer Firewall, também conhecido como CSF, é um script de configuração de firewall criado para fornecer melhor segurança ao servidor, além de oferecer uma interface avançada e fácil de usar para gerenciar as configurações do firewall.';
$L['DELUGE']        = 'Deluge é um cliente BitTorrent leve, de Software Livre e multiplataforma.';
$L['DUPLICATI']     = 'Duplicati é um cliente de backup de código aberto gratuito que armazena com segurança backups criptografados, incrementais e compactados em serviços de armazenamento em nuvem e servidores de arquivos remotos. Pode funcionar com Amazon S3, Dropbox, Google Drive, FTP, SSH / SFTP, WebDAV e <a href="https://nullrefer.ir/?https://duplicati.readthedocs.io/en/latest/01 -introduction/#supported-backends" rel="noopener nofollow" target="_blank"> muitos mais </a>.';
$L['EMBY']          = 'Emby Server é um pacote de software cliente-servidor que permite que os clientes hospedem suas cópias pessoais legais de arquivos multimídia - música, vídeo e imagem. ... O software cliente Emby é um aplicativo que você precisa instalar em dispositivos móveis e determinadas HDBox para televisores, como a Android TV.';
$L['FAIL2BAN']      = 'Fail2Ban é uma estrutura de software de prevenção de intrusões que protege servidores de computador contra ataques de força bruta.';
$L['FILEBOT']       = 'FileBot é a melhor ferramenta para organizar e renomear seus filmes, programas de TV e anime, bem como buscar legendas e ilustrações. É inteligente e só funciona.';
$L['FILEBROWSER']   = 'filebrowser provides a file managing interface within a specified directory and it can be used to upload, delete, preview, rename and edit your files. It allows the creation of multiple users and each user can have its own directory. It can be used as a standalone app or as a middleware.';
$L['FLARESOLVERR']  = 'FlareSolverr é um servidor proxy para contornar a proteção Cloudflare.';
$L['FLEXGET']       = 'FlexGet é uma ferramenta de automação multiuso para todas as suas mídias. Suporte para torrents, nzbs, podcasts, quadrinhos, TV, filmes, RSS, HTML, CSV e muito mais.';
$L['FLOOD']         = 'Flood é um serviço de monitoramento para vários clientes de torrent. É um serviço Node.js que se comunica com seu cliente de torrent favorito e serve uma interface web decente para administração. A organização <a href="https://nullrefer.ir/?https://github.com/Flood-UI" target="_blank" rel="nofollow noopener">Flood-UI</a> hospeda projetos relacionados.';
$L['HEADPHONES']    = 'Headphones é um baixador de música automatizado para NZB e Torrent, escrito em Python. Suporta SABnzbd, NZBget, Transmission, µTorrent, Deluge e Blackhole.';
$L['JACKETT']       = 'Suporte API para seus rastreadores privados favoritos.';
$L['JDOWNLOADER']   = 'JDownloader é uma ferramenta gratuita de gerenciamento de download que permite baixar rapidamente arquivos de serviços de hospedagem como Mediafire, 4Shared e outros serviços de hospedagem com funcionalidades semelhantes. Os serviços de hospedagem de arquivos geralmente controlam sua velocidade total de download para incentivar a compra de pacotes premium; JDownloader ajuda você a contornar esse requisito.';
$L['JELLYFIN']      = 'Jellyfin é um Sistema de Mídia de Software Livre que coloca você no controle do gerenciamento e streaming de sua mídia.';
$L['JELLYSEERR']    = 'Jellyseerr é um aplicativo de software gratuito e de código aberto para gerenciar solicitações de sua biblioteca de mídia. É um fork do Overseerr construído para trazer suporte para os servidores de mídia Jellyfin & Emby!';
$L['KAVITA']        = 'Kavita é um servidor de leitura multiplataforma rápido e rico em recursos. Construído com foco em mangá e com o objetivo de ser uma solução completa para todas as suas necessidades de leitura. Configure seu próprio servidor e compartilhe sua coleção de leitura com seus amigos e familiares.';
$L['KOMGA']         = 'Komga é um servidor de mídia para seus quadrinhos/mangás digitais, com foco em fornecer uma interface simples e moderna.';
$L['LAZYLIBRARIAN'] = 'LazyLibrarian é um aplicativo do tipo SickBeard, CouchPotato, Headphones para ebooks, audiolivros e revistas. Ele usa uma combinação de <a href="https://nullrefer.ir/?https://www.goodreads.com/" rel="noopener nofollow" target="_blank"> Goodreads </a> <a href="https://nullrefer.ir/?https://www.librarything.com/" rel="noopener nofollow" target="_blank"> Librarything </a> e, opcionalmente, <a href="https://nullrefer.ir/?https://www.googleapis.com/books/v1/" rel="noopener nofollow" target="_blank"> GoogleBooks </a> como fontes para informações do autor e informações do livro.';
$L['LETSENCRYPT']   = 'Let\'s Encrypt é uma autoridade de certificação (CA) gratuita, automatizada e aberta, gerada para o benefício do público. É um serviço prestado pela <a href="https://nullrefer.ir/?https://letsencrypt.org/isrg/" rel="noopener nofollow" target="_blank">Internet Security Research Group (ISRG)</a>.';
$L['LIDARR']        = 'Lidarr é um fork independente do Sonarr retrabalhado para baixar automaticamente músicas via Usenet e BitTorrent. O projeto foi inspirado por outros baixadores de música da Usenet / BitTorrent como o Headphones.';
$L['MEDUSA']        = 'Gerenciador de arquivos de vídeo para programas de TV, ele assiste a novos episódios de seus programas favoritos e quando eles são publicados, faz sua mágica. Permite a busca manual e outros recursos exclusivos, verifique a Medusa no <a href="https://nullrefer.ir/?https://github.com/pymedusa/Medusa" rel="noopener nofollow" target="_blank">Github</a>.';
$L['MYLAR3']        = 'O Mylar é um programa de download automático de quadrinhos (cbr/cbz) para uso com NZB e torrents escritos em python. Ele suporta SABnzbd, NZBGET e muitos clientes de torrent, além do DDL.';
$L['NETDATA']       = 'Netdata is distributed, real-time, performance and health monitoring for systems and applications.';
$L['NEXTCLOUD']     = 'Nextcloud é uma plataforma de sincronização de arquivos e compartilhamento de aplicativos de comunicação aberta e auto-hospedada. Aceda e sincronize os seus ficheiros, contactos, calendários e comunique e colabore nos seus dispositivos. Você decide o que acontece com seus dados, onde está e quem pode acessá-los!';
$L['NOTIFIARR']     = 'Este é o cliente unificado para <a href="https://nullrefer.ir/?https://notifiarr.com/" rel="noopener nofollow" target="_blank">Notifiarr.com</a>. O cliente permite solicitações de conteúdo do Media Bot em seu Discord Server e também fornece relatórios de uso do Plex e integridade do sistema, entre muitos outros recursos..';
$L['NOVNC']         = 'noVNC é tanto uma biblioteca JavaScript do cliente VNC quanto um aplicativo criado sobre essa biblioteca. O noVNC funciona bem em qualquer navegador moderno, incluindo navegadores móveis (iOS e Android).';
$L['NZBGET']        = 'NZBGet é um downloader binário, que baixa arquivos da Usenet com base em informações fornecidas em arquivos nzb. O NZBGet é escrito em C ++ e é conhecido por seu extraordinário desempenho e eficiência.';
$L['NZBHYDRA']      = 'NZBHydra é uma busca meta para indexadores NZB. Ele fornece acesso fácil a vários indexadores baseados em raw e newznab. Você pode pesquisar todos os seus indexadores de um lugar e usá-los como fonte de indexador para ferramentas como Sonarr ou CouchPotato.';
$L['NZBHYDRA2']     = 'NZBHydra2 é uma busca meta para indexadores NZB. Ele fornece acesso fácil a vários indexadores baseados em raw e newznab. Você pode pesquisar todos os seus indexadores de um lugar e usá-los como fonte de indexador para ferramentas como Sonarr ou CouchPotato.';
$L['OMBI']          = 'Ombi oferece uma interface bonita e fácil de usar para itens que os usuários desejam adicionar à biblioteca. Integra-se com o CouchPotato, SickChill e Sonarr.';
$L['OVERSEERR']     = 'Overseerr é um aplicativo de software gratuito e de código aberto para gerenciar solicitações para sua biblioteca de mídia. Ele se integra aos seus serviços existentes, como Sonarr, Radarr e Plex!';
$L['OVPN']          = 'SSL/TLS VPN baseada no espaço do usuário. Suporta Linux, Solaris, OpenBSD, FreeBSD, NetBSD, Mac OS X, and Windows 2000/XP+.';
$L['PHPMYADMIN']    = 'phpMyAdmin é uma ferramenta de software livre escrita em <a href="https://nullrefer.ir/?https://php.net/" rel="noopener nofollow" target="_blank">PHP</a>, destina-se a lidar com a administração de <a href="https://nullrefer.ir/?https://www.mysql.com/" rel="noopener nofollow" target="_blank">MySQL</a> pela Web. phpMyAdmin suporta uma ampla gama de operações no MySQL e no MariaDB. Operações freqüentemente usadas (gerenciamento de bancos de dados, tabelas, colunas, relações, índices, usuários, permissões, etc) podem ser realizadas através da interface do usuário, enquanto você ainda tem a capacidade de executar diretamente qualquer instrução SQL.';
$L['PLEX']          = 'Plex permite transmitir seu conteúdo para qualquer dispositivo habilitado para Plex.';
$L['PROWLARR']      = 'Prowlarr é um gerenciador/proxy de indexador construído na popular pilha de base arr .net/reactjs para integração com seus vários aplicativos PVR. Prowlarr oferece suporte a Torrent Trackers e Usenet Indexers. Ele se integra perfeitamente com Sonarr, Radarr, Lidarr e Readarr, oferecendo gerenciamento completo de seus indexadores sem a necessidade de configuração do Indexer por aplicativo.';
$L['PYLOAD']        = 'pyLoad é um gerenciador de downloads para sites do `Hoster`, sites de vídeo e links HTTP / FTP. Uma lista de sites suportados pode ser encontrada <a href="https://nullrefer.ir/?https://github.com/pyload/pyload/wiki/Supported-Hoster" rel="noopener nofollow" target="_blank">aqui</a>';
$L['QBITTORRENT']   = 'qBittorrent é um cliente P2P BitTorrent gratuito e confiável. Um cliente BitTorrent avançado e multiplataforma com uma interface de usuário agradável do Qt, bem como uma interface de usuário da Web para controle remoto e um mecanismo de pesquisa integrado.';
$L['QUASSEL']       = 'Quassel IRC é um cliente de IRC moderno, multiplataforma e distribuído, baseado no framework Qt4.';
$L['QUOTAS']        = 'Esse recurso do Linux permite que o administrador do sistema aloque uma quantidade máxima de espaço em disco que um usuário ou grupo pode usar.';
$L['RADARR']        = 'Radarr é um fork independente de Sonarr retrabalhado para baixar automaticamente filmes via Usenet e BitTorrent. <br>O projeto foi inspirado em outros downloaders de filmes Usenet / BitTorrent, como CouchPotato.';
$L['RADARR4K']      = 'Radarr4K é um clone autônomo do Radarr para os perfis 4K UHD. É um meio de lidar com várias instâncias do Radarr, mantendo o conteúdo UHD separado do conteúdo geral.';
$L['RAPIDLEECH']    = 'Rapid Leech é um script de transferência de servidor gratuito para uso em vários sites populares de upload / download, como upload.net, Rapidshare.com e mais de 120 outros.';
$L['RCLONE']        = 'RClone é um programa de linha de comando para sincronizar arquivos e diretórios de e para vários hosts.';
$L['READARR']       = 'Readarr é um gestor de colecção de livros electrónicos para utilizadores da Usenet e BitTorrent. Pode monitorizar múltiplos feeds RSS para novos livros dos seus autores favoritos e fará interface com clientes e indexadores para os agarrar, classificar, e renomear.';
$L['REQUESTRR']     = 'Requestrr é um chatbot Discord utilizado para simplificar a utilização de serviços como Sonarr/Radarr/Ombi através da utilização do chat! Todos os utilizadores do seu Servidor Discord podem solicitar a adição de novos conteúdos e ser notificados quando disponíveis.';
$L['RTORRENT']      = 'rTorrent é um cliente BitTorrent rápido e eficiente que usa, e está em desenvolvimento ao lado, a biblioteca libTorrent (não deve ser confundida com libtorrent-rasterbar). Ele é escrito em C ++ e usa a biblioteca de programação ncurses, o que significa que usa uma interface de usuário de texto.';
$L['RUTORRENT']     = 'ruTorrent é um front-end para o popular cliente Bittorrent rtorrent. Principais características: Lado do servidor leve, para que possa ser instalado em servidores antigos e de baixo custo e até mesmo em alguns roteadores SOHO, Extensivel - existem vários plugins e todos podem criar seus próprios, vem com <a href="https://nullrefer.ir/?https://lab.quickbox.io/QuickBox/club-QuickBox" rel="noopener nofollow" target="_blank">a skin club-QuickBox</a>.';
$L['SABNZBD']       = 'SABnzbd é um downloader de newsgroup binários multi-plataforma. O programa funciona em segundo plano e simplifica o download de verificação e extração de arquivos da Usenet. O SABnzbd usa arquivos NZB (similares aos arquivos .torrent, mas para Usenet), em vez de navegar diretamente na Usenet.';
$L['SEEDCROSS']     = 'SeedCross é um aplicativo da web para torrents Cross-Seed em Deluge/qBittorrent/Transmission. É uma bifurcação de <a href="https://nullrefer.ir/?https://github.com/BC44/Cross-Seed-AutoDL" rel="noopener nofollow" target="_blank">Cross-Seed-AutoDL</a>.';
$L['SICKCHILL']     = 'Gerenciador de arquivos de vídeo para programas de TV, ele assiste a novos episódios de seus programas favoritos e quando eles são publicados, faz sua mágica.';
$L['SICKGEAR']      = 'SickGear é a evolução do Sick-Beard. Automatize o prazer da sua TV com inovação, estabilidade comprovada e confiabilidade.';
$L['SONARR']        = 'Sonarr é uma ferramenta de gerenciamento de séries de TV que funcionará com torrents e usenet.';
$L['SONARR4K']      = 'O Sonarr4K é um clone autônomo do Sonarr para os perfis 4K UHD. É um meio de lidar com várias instâncias do Sonarr, mantendo o conteúdo UHD separado do conteúdo geral.';
$L['SUBSONIC']      = 'Subsonic é um servidor de mídia baseado na web. Ele é escrito em Java, portanto, pode ser executado em qualquer sistema operacional com suporte a Java. O subsonic suporta streaming para vários clientes simultaneamente e suporta qualquer mídia streamable (incluindo MP3, AAC e Ogg).';
$L['SYNCTHING']     = 'Sincronização contínua de arquivos de código aberto com o BitTorrent';
$L['TAUTULLI']      = 'Um aplicativo da web baseado em python para monitoramento, análise e notificações do Plex Media Server';
$L['THELOUNGE']     = 'A modern self-hosted web IRC client';
$L['TRANSMISSION']  = 'Transmission é projetado para uso fácil e poderoso. Os padrões são definidos como Apenas trabalho e leva apenas alguns cliques para configurar recursos avançados, como diretórios de observação, listas de bloqueio de mesmo nível e a interface da web. Quando o Ubuntu escolheu o Transmission como seu cliente BitTorrent padrão, um dos motivos mais citados foi sua fácil curva de aprendizado.';
$L['UNIFI']         = 'O UniFi® Controller é uma solução de software de gerenciamento de rede sem fio da Ubiquiti Networks™. Ele permite que você gerencie várias redes sem fio usando um navegador da web.';
$L['UNPACKERR']     = 'Extrai downloads para Radarr, Sonarr, Lidarr, Readarr - Exclui arquivos extraídos após a importação.';
$L['WEBCONSOLE']    = 'TTYD (também conhecido como QuickBox Web Console) é um terminal completo baseado em Xterm.js com suporte a CJK e IME.';
$L['X2GO']          = 'X2Go é um software de desktop remoto de código aberto para Linux que usa o protocolo de tecnologia NX.';
$L['XTEVE']         = 'XTeVe é um aplicativo que simula um sintonizador de TV, permite ter canais IPTV via Plex ou Emby. O xTeVe pode mesclar vários arquivos M3U e XMLTV e enviá-los ao seu Media Center preferido.';
$L['ZNC']           = 'ZNC é um segurança da rede IRC ou BNC. Pode separar o cliente do servidor IRC real e também dos canais selecionados.';

// Create an array of the app names for the uninstall/reinstall translation
$APPS = [
	'AIRSONIC'      => 'Airsonic',
	'AUTOBRR'       => 'Autobrr',
	'AUTODL'        => 'AutoDL-iRSSi',
	'AUTOSCAN'      => 'Autoscan',
	'BAZARR'        => 'Bazarr',
	'BAZARR4K'      => 'Bazarr4K',
	'BBR'           => 'BBR',
	'BTSYNC'        => 'BitTorrent Sync',
	'CALIBRE'       => 'Calibre',
	'COUCHPOTATO'   => 'CouchPotato',
	'CSF'           => 'Config Server Firewall (CSF)',
	'DELUGE'        => 'Deluge',
	'DUPLICATI'     => 'Duplicati',
	'EMBY'          => 'Emby',
	'FAIL2BAN'      => 'Fail2Ban',
	'FILEBOT'       => 'FileBot',
	'FILEBROWSER'   => 'Filebrowser',
	'FLARESOLVERR'  => 'FlareSolverr',
	'FLEXGET'       => 'FlexGet',
	'FLOOD'         => 'Flood',
	'HEADPHONES'    => 'Headphones',
	'JACKETT'       => 'Jackett',
	'JDOWNLOADER'   => 'JDownloader',
	'JELLYFIN'      => 'Jellyfin',
	'JELLYSEERR'    => 'Jellyseerr',
	'KAVITA'        => 'Kavita',
	'KOMGA'         => 'Komga',
	'LAZYLIBRARIAN' => 'LazyLibrarian',
	'LETSENCRYPT'   => 'Let\'s Encrypt',
	'LIDARR'        => 'Lidarr',
	'MEDUSA'        => 'Medusa',
	'MYLAR3'        => 'Mylar3',
	'NETDATA'       => 'Netdata',
	'NEXTCLOUD'     => 'Nextcloud',
	'NOTIFIARR'     => 'Notifiarr',
	'NOVNC'         => 'noVNC',
	'NZBGET'        => 'NZBGet',
	'NZBHYDRA2'     => 'NZBHydra2',
	'OMBI'          => 'Ombi',
	'OVERSEERR'     => 'Overseerr',
	'OVPN'          => 'OpenVPN',
	'PHPMYADMIN'    => 'phpMyAdmin',
	'PLEX'          => 'Plex',
	'PROWLARR'      => 'Prowlarr',
	'PYLOAD'        => 'pyLoad',
	'QBITTORRENT'   => 'qBittorrent',
	'QUASSEL'       => 'Quassel',
	'QUOTA'         => 'Quotas',
	'RADARR'        => 'Radarr',
	'RADARR4K'      => 'Radarr4K',
	'RAPIDLEECH'    => 'Rapidleech',
	'RCLONE'        => 'RClone',
	'READARR'       => 'Readarr',
	'REQUESTRR'     => 'Requestrr',
	'RTORRENT'      => 'rTorrent',
	'RUTORRENT'     => 'ruTorrent',
	'SABNZBD'       => 'SABnzbd',
	'SEEDCROSS'     => 'SeedCross',
	'SICKCHILL'     => 'SickChill',
	'SICKGEAR'      => 'SickGear',
	'SONARR'        => 'Sonarr',
	'SONARR4K'      => 'Sonarr4K',
	'SUBSONIC'      => 'Subsonic',
	'SYNCTHING'     => 'Syncthing',
	'TAUTULLI'      => 'Tautulli',
	'THELOUNGE'     => 'The Lounge',
	'TRANSMISSION'  => 'Transmission',
	'UNIFI'         => 'UniFi',
	'UNPACKERR'     => 'Unpackerr',
	'WEBCONSOLE'    => 'Web Console',
	'X2GO'          => 'X2Go',
	'XTEVE'         => 'XTeVe',
	'ZNC'           => 'ZNC'
];

/* **********************************
 * #3.2.2 - app uninstall
 ************************************/
// Loop through the array and create the uninstall translation
foreach ($APPS as $key => $value) {
	$L[$key . '_UNINSTALL'] = 'Você está prestes a desinstalar <span style="color:#01cea2">' . $value . '</span> do seu sistema.<br/><br/>Isso removerá completamente todas as suas configurações e ajustes... esta ação é irreversível.<br/><br/>Você pode reinstalar <span style="color:#01cea2">' . $value . '</span> a qualquer momento, no entanto, suas configurações serão redefinidas para o padrão.';
}

/* **********************************
 * #3.2.3 - app reinstall
 ************************************/
// Loop through the array and create the reinstall translation
foreach ($APPS as $key => $value) {
	$L[$key . '_REINSTALL'] = 'Você está prestes a reinstalar <span style="color:#01cea2">' . $value . '</span>.<br/><br/>Isso removerá/redefinirá completamente todas as suas configurações, arquivos e configurações atuais... esta ação é irreversível.';
}

/* **********************************
 * #3.2.4 - toggles & tooltips
 ************************************/
$L['APP_OPTIONS']                  = 'Opções do aplicativo';
$L['NGINX_OPTIONS']                = 'Opções do NGinx';
$L['CARD_VIEW']                    = 'Vista de Cartão';
$L['LIST_VIEW']                    = 'Vista de lista';
$L['CLI']                          = 'Somente console da web';
$L['COMPAT_E']                     = 'Erro de Compatibilidade';
$L['CURRENTLY_INSTALLED_NOTICE']   = 'Parece que você tem acesso a um aplicativo que pode ser instalado por apenas um usuário por vez. Fale com o administrador do sistema para obter mais status sobre sua disponibilidade.';
$L['CURRENTLY_INSTALLED_TITLE']    = 'Alguém atualmente já tem este aplicativo instalado';
$L['DEL1_TOOLTIP']                 = 'Parece que você está executando o Ubuntu 20.04. O Deluge v1 não funcionará nesta Distro. Considere instalar o Deluge v2 para continuar enquanto o Deluge v2 é executado no libtorrent1.2 + e python3 + atualizados.';
$L['DEL2_TOOLTIP']                 = 'Parece que o qBittorrent está atualmente instalado. O Deluge v2 não funcionará com o qBittorrent instalado. Por favor, remova o qBittorrent ou instale o Deluge v1 para continuar.';
$L['DEL2XENIAL_TOOLTIP']           = 'Parece que você está usando Ubuntu 16.04. O Deluge v2 não funcionará neste Distro. Por favor, considere instalar o Deluge v1 para continuar.';
$L['EMBY_JELLYFIN_COMPAT_MESSAGE'] = 'Jellyfin Instalado';
$L['ENTER_MOUNT_POINT']            = 'Por favor, digite seu principal ponto de montagem';
$L['FAIL2BAN_TOOLTIP']             = 'Acesse este recurso do ssh digitando:<br><code>qb install fail2ban</code>';
$L['JELLYFIN_EMBY_COMPAT_MESSAGE'] = 'Emby Instalado';
$L['MEDUSA_INSTALLED']             = 'Medusa Instalado';
$L['OVPN_TOOLTIP']                 = 'Acesse esse recurso no seu console da web digitando:<br><code>qb install vpn -u USER</code>';
$L['PRIMARY_MOUNTM']               = 'Montagem Primária';
$L['QBIT_TOOLTIP']                 = 'Parece que o Deluge 2 está atualmente instalado. qBittorrent não funcionará com o Deluge 2 instalado. Por favor, remova o Deluge 2 ou instale o Deluge 1 para continuar.';
$L['QUOTAS_FSTAB']                 = 'Edite seu fstab';
$L['QUOTAS_HELP']                  = 'Para mais informações sobre como instalar cotas, <a href="https://nullrefer.ir/?https://quickbox.io/knowledge-base/how-to-install-quotas/" rel="noopener nofollow" target="_blank"><strong>por favor leia este F.A.Q primeiro</strong></a>.';
$L['QUOTAS_TOOLTIP']               = 'Adicione o seguinte em vez de <code class="language-bash">defaults</code> no seu ponto de montagem principal para continuar';
$L['RCLONE_ADMIN_TOOLTIP']         = 'Acesse este recurso do ssh digitando:<br><code>qb install rclone -u USER -o [dropbox|gdrive|encrypted]</code><br>Veja <code>qb help rclone</code> para mais opções.';
$L['RCLONE_USER_TOOLTIP']          = 'Entre em contato com um administrador do sistema para instalá-lo.';
$L['REMOVE_MEDUSA_FIRST']          = 'Remove Medusa primeiro para instalar este aplicativo.';
$L['REMOVE_SICKCHILL_FIRST']       = 'Remove SickChill primeiro para instalar este aplicativo.';
$L['REMOVE_SICKGEAR_FIRST']        = 'Remove SickGear primeiro para instalar este aplicativo.';
$L['SICKCHILL_INSTALLED']          = 'SickChill Instalado';
$L['SICKGEAR_INSTALLED']           = 'SickGear Instalado';
$L['UNIFI_SSL_TOOLTIP']            = 'Se você já tiver um domínio definido na raiz do seu site e um certificado já criptografado para o domínio, selecione essa opção.';
$L['ZNC_TOOLTIP']                  = 'Acesse este recurso do ssh digitando:<br><code>qb install znc -u USER</code>';

/* **********************************
 * UI - app install/reinstall modals
 *
 * calibre install/reinstall modal
 ************************************/
$L['CALIBRE_INSTALL_TITLE']   = 'Instalação do Calibre';
$L['CALIBRE_REINSTALL_TITLE'] = 'Reinstalar o Calibre';
$L['CALIBRE_INSTALL_MESSAGE'] = 'Você tem a opção de especificar um caminho de diretório personalizado para sua biblioteca Calibre. Caso o caminho escolhido não exista no momento, ele será gerado automaticamente para você.<br>Alternativamente, se preferir usar o caminho padrão, basta deixar o campo em branco e a biblioteca estará localizada em:<br><code>/home/' . $username . '/.config/Calibre/library</code>';

/* **********************************
 * filebot install/reinstall modal
 ************************************/
$L['FILEBOT_INSTALL_TITLE']         = 'Instalação do Filebot';
$L['FILEBOT_REINSTALL_TITLE']       = 'Reinstalação do Filebot';
$L['PROCESS_DELUGE']                = 'Processar downloads para o Deluge?';
$L['PROCESS_DELUGE_TOOLTIP']        = 'Defina como Sim para processar downloads para o Deluge.<br>Veja como implementar nas notas do script localizadas em:<br><code>/home/' . $username . '/.config/Filebot/deluge-postprocess.sh</code>';
$L['CUSTOM_PATH_TOOLTIP_NO_RCLONE'] = 'Defina como Sim para inserir o caminho para sua biblioteca de mídia.<br>O caminho padrão é:<br><code>/home/' . $username . '/Media</code>';
$L['CUSTOM_PATH_TOOLTIP_RCLONE']    = 'Defina como Sim para inserir o caminho para sua biblioteca de mídia.<br>O caminho padrão é:<br><code>/home/' . $username . '/rclone/cache</code>';
$L['PROCESS_NZBGET']                = 'Processar downloads para NZBGet?';
$L['PROCESS_NZBGET_TOOLTIP']        = 'Defina como Sim para processar downloads para NZBGet.<br>Veja como implementar nas notas do script localizadas em:<br><code>/home/' . $username . '/.config/NZBGet/scripts/nzbget-postprocess.sh</code>';
$L['PROCESS_RTORRENT']              = 'Processar downloads para rTorrent?';
$L['PROCESS_SABNZBD']               = 'Processar downloads para SABnzbd?';
$L['CUSTOM_MEDIA_PATH']             = 'Usar caminho personalizado para a biblioteca de mídia?';
$L['FILEBOT_DEFAULT_PATH']          = 'exemplo';
$L['FILEBOT_LICENSE']               = 'Licença do Filebot';

/* **********************************
 * jdownloader install/reinstall modal
 ************************************/
$L['JDOWNLOADER_INSTALL_TITLE']        = 'Instalação do JDownloader';
$L['JDOWNLOADER_REINSTALL_TITLE']      = 'Reinstalar o JDownloader';
$L['JDOWNLOADER_EMAIL']                = 'Endereço de e-mail da conta JDownloader';
$L['JDOWNLOADER_PASSWORD']             = 'Senha da conta JDownloader';
$L['JDOWNLOADER_INSTALL_PATH_MESSAGE'] = 'Você tem a opção de especificar um caminho de diretório personalizado para seus downloads do JDownloader. Se o caminho escolhido não existir no momento, ele será gerado automaticamente para você.<br>Alternativamente, se preferir usar o caminho padrão, basta deixar o campo em branco e a biblioteca estará localizada em:<br><code>/home/' . $username . '/Downloads</code>';

/* **********************************
 * kavita install/reinstall modal
 ************************************/
$L['KAVITA_INSTALL_TITLE']   = 'Instalação do Kavita';
$L['KAVITA_REINSTALL_TITLE'] = 'Reinstalar Kavita';
$L['KAVITA_INSTALL_MESSAGE'] = 'Você tem a opção de especificar um caminho de diretório personalizado para sua biblioteca Kavita. Se o caminho escolhido não existir no momento, ele será gerado automaticamente para você.<br>Alternativamente, se preferir usar o caminho padrão, basta deixar o campo em branco e a biblioteca estará localizada em:<br><code>/home/' . $username . '/.config/Kavita/library</code>';

/* **********************************
 * plex install/reinstall modal
 ************************************/
$L['PLEX_CLAIM_MESSAGE']     = '<p style="font-size:12px">Para reivindicar seu Plex Media Server, você já deve ter uma conta e fazer login para obter o código de reivindicação de: <a href="https://www.plex.tv/claim/" rel="noopener nofollow" target="_blank" style="color:var(--qb-color-37);"><strong>https://www.plex.tv/claim/</strong></a></p><div class="alert alert-light-info fade show border-0 mb-2 mt-0" role="alert" style="font-size:12px;color:var(--qb-color-2)"><strong style="color:var(--qb-color-37)">OBSERVAÇÃO:</strong> é recomendável usar o botão "Copiar para a área de transferência" na tela do código de reivindicação para garantir inserção adequada, pois o código de reivindicação diferencia maiúsculas de minúsculas.</div>';
$L['PLEX_CLAIM_TITLE']       = 'Instalação do Plex Media Server';
$L['PLEX_CLAIM_TOKEN']       = 'Código de Reivindicação Plex';
$L['PLEX_DATA_PATH']         = 'Usar caminho personalizado para o diretório de dados?';
$L['PLEX_DATA_PATH_TOOLTIP'] = 'Você tem a opção de especificar um caminho de dados personalizado para sua instalação do Plex. Se o caminho escolhido não existir atualmente, ele será gerado automaticamente para você.<br>Alternativamente, se você preferir usar o caminho padrão, simplesmente mantenha a seleção como \'Não\', e o diretório de dados será localizado em:<br><code>/home/' . $username . '/.config/\'Plex Media Server\'</code>';
$L['PLEX_DOMAIN']            = 'Definir domínio para o Plex Media Server?';
$L['PLEX_DOMAIN_TOOLTIP']    = 'Se você já possui um domínio e os registros DNS configurados para um subdomínio Plex, selecione \'Sim\' para inserir seu subdomínio plex.<br>Esta opção configurará seu Plex Media Server para trabalhe perfeitamente com seu domínio Plex personalizado. Inclui a configuração do proxy reverso Nginx essencial e a instalação do certificado SSL para seu domínio para garantir acesso seguro.';

/* **********************************
 * #3.2.5 - service control
 ************************************/
$L['ACTIVE_STATUS']   = 'ativo (execução)';
$L['APP_KEY']         = 'Chave API';
$L['APP_PORT']        = 'Porta';
$L['APP_STATUS']      = 'Estado';
$L['INACTIVE_STATUS'] = 'inativo (parado)';

/* **********************************
 * #3.2.6 - rclone specific toggles
 ************************************/
$L['ACTIVE_MOUNTED']        = 'ativo (montado)';
$L['INACTIVE_NOTMOUNTED']   = 'morto (não montado)';
$L['RCLONE_OPTIONS']        = 'Opções de RClone';
$L['RCLONE_COMMAND_CENTER'] = 'Centro de Comando RClone';
$L['RCLONE_LOG_VIEWER']     = 'RClone move.log';
$L['RCLONE_STATUS']         = 'Status do clone';
$L['RCLONE_UPLOAD_MESSAGE'] = 'Atualmente, o RClone está trabalhando em segundo plano para enviar seus dados para o gdrive. Durante esse período, você verá um bloqueio definido para verificar se seu processo foi iniciado. Esse bloqueio será removido assim que o processo for concluído. Sinta-se à vontade para fechar esse pop-up a qualquer momento.<br/><br/><div class="alert alert-notice" style="color:#fff"><strong>NOTA: </strong> O upload é executado automaticamente por meio de um cronjob todas as noites às 03:12, horário do servidor.</div>';
$L['RCLONE_UPLOAD_VIEWER']  = 'Upload de RClone';
$L['RCMOUNT_STATUS']        = 'Status do MergerFS';
$L['RCMOUNT_WHERE']         = 'Localização da montagem';
$L['ADD_MOUNT_PATH_INFO']   = 'Selecione se deseja ignorar as cotas (se instaladas) no diretório selecionado. Esta opção, quando escolhida, desconsiderará as cotas do caminho especificado. Use esta opção ao monitorar um diretório onde as cotas não devem ser consideradas. Isso garante cálculos precisos de espaço, especialmente para montagens rclone.';
$L['ADD_NEW_MOUNT_CHECK']   = 'Adicionar uma montagem ou diretório existente para monitorar';
$L['MOUNT_PATH_SUCCESS']    = 'Caminho adicionado com sucesso para monitoramento. Atualizando página...';
$L['MOUNT_PATH_ERROR']      = 'O caminho que você tentou adicionar para monitoramento não existe.<br>Verifique o caminho novamente e tente novamente.';
$L['MOUNTS']                = 'Montagens:';
$L['MOUNT_ADD_PATH']        = 'Adicionar caminho';
$L['MOUNT_CHECK_ABOUT']     = 'Estes valores são calculados e atualizados periodicamente. Os valores não são em tempo real. Você pode forçar uma atualização dessas estatísticas clicando no botão \'Iniciar verificação\' abaixo.';
$L['MOUNT_CHECK_PROCESS']   = 'Os valores de porcentagem de espaço estão sendo calculados em segundo plano. Volte mais tarde para ver os resultados atualizados. Requer atualização de página.';
$L['MOUNT_MONITOR_INFO']    = 'Informações adicionais de montagem';
$L['MOUNT_START_SCAN']      = 'Iniciar verificação';
$L['REMOVE_MOUNT_PATH']     = 'Remover caminho monitorado. Isso não removerá o diretório atual ou o ponto de montagem.';

/* **********************************
 * #3.3 - DASHBOARD WIDGETS
 *
 * #3.3.1 - disk status widget
 ************************************/
$L['DD_DELUGE']             = 'Deluge';
$L['DD_NZBGET']             = 'NZBGet';
$L['DD_QBITTORRENT']        = 'qBittorrent';
$L['DD_RTORRENT']           = 'rTorrent';
$L['DD_SABNZBD']            = 'SABnzbd';
$L['DD_TRANSMISSION']       = 'Transmission';
$L['DELUGE_TORRENTS']       = 'torrents carregados em Deluge';
$L['DISK_%_1']              = 'Você usou';
$L['DISK_%_2']              = 'do seu espaço total em disco';
$L['DISK_SPACE']            = 'Espaço em disco';
$L['FREE']                  = 'Livre';
$L['QBITTORRENT_TORRENTS']  = 'torrents carregados em qBittorrent';
$L['RT_TORRENTS']           = 'torrents carregados em rTorrent';
$L['NO_CLIENTS']            = 'Atualmente não há clientes torrent ou nzb instalados';
$L['SIZE']                  = 'Tamanho';
$L['CURRENT_USERS_ONLINE']  = 'Utilizadores Actualmente em Linha';
$L['THERE_ARE']             = 'Tem';
$L['TRANSMISSION_TORRENTS'] = 'torrents carregados em Transmission';
$L['USED']                  = 'Usado';
$L['YOUR_DISK_STATUS']      = 'Seu status de disco';
$L['NZBGET_NZB']            = 'nzb carregado em NZBGet';
$L['SABNZBD_NZB']           = 'nzb carregado em SABnzbd';

/* **********************************
 * #3.3.2 - System Index v1 : bandwidth data widget
 ************************************/
$L['BANDWIDTH_DAILY']    = 'Por Dia';
$L['BANDWIDTH_DATA']     = 'Dados de largura de banda';
$L['BANDWIDTH_HOURLY']   = 'Por Hora';
$L['BANDWIDTH_LIVE']     = 'Ao Vivo';
$L['BANDWIDTH_MONTHLY']  = 'Por Mês';
$L['datefmt_days_img']   = '%d';
$L['datefmt_days']       = '%d %B';
$L['datefmt_hours_img']  = '%l';
$L['datefmt_hours']      = '%l%p';
$L['datefmt_months_img'] = '%b';
$L['datefmt_months']     = '%B %Y';
$L['datefmt_top']        = '%d %B %Y';
$L['DOWNLOAD']           = 'Download';
$L['NETWORK']            = 'Rede';
$L['UPLOAD']             = 'Carregar';

/* **********************************
 * #3.3.3 - System Index v1 : server load widget
 ************************************/
$L['DAYS_L']      = 'dias';
$L['HOURS_L']     = 'horas';
$L['MINUTES_L']   = 'min';
$L['SECONDS_L']   = 'sec';
$L['SERVER_LOAD'] = 'Carga do servidor';
$L['SL_TXT']      = 'Esta é a média de carga atual dos seus servidores';
$L['UPTIME']      = 'Tempo de atividade';

/* **********************************
 * #3.3.4 - System Index v1 : memory status widget
 ************************************/
$L['CACHED_MEMORY']     = 'Uso de memória em cache';
$L['CLEAR_CACHE']       = 'Limpar cache de memória';
$L['CM_BUFFERS']        = 'Buffers estão em';
$L['CM_USAGE']          = 'O uso da memória cache está em';
$L['PHYSICAL_MEMORY']   = 'Uso de memória física';
$L['PM_IDLE']           = 'ocioso';
$L['PM_USED']           = 'usado';
$L['REAL_MEMORY']       = 'Uso Real da Memória';
$L['RM_FREE']           = 'Memória real livre';
$L['RM_USAGE']          = 'Uso de memória real';
$L['SWAP_IDLE']         = 'ocioso';
$L['SWAP_TOTAL']        = 'total';
$L['SWAP_USAGE']        = 'Uso da Swap';
$L['SWAP_USED']         = 'usado';
$L['SWAP_ZONE']         = 'Área da SWAP';
$L['SYSTEM_RAM_STATUS'] = 'Status da RAM do sistema';
$L['TOTAL_RAM']         = 'RAM total do sistema';
$L['TOTAL']             = 'Total';

/* **********************************
 * #3.3.5 - server activity widget
 ************************************/
$L['ACC_REQ_ACT']         = 'contas requerem ativação';
$L['GUESTS_ONLINE']       = 'convidados online';
$L['LAST_ACTIVE_ON']      = 'esteve ativo pela última vez em';
$L['LOGGED_ON']           = 'conectado';
$L['MEMBERS']             = 'membros';
$L['RECORD_ONLINE']       = 'Registrar usuários online';
$L['THERE_ARE_AW']        = 'Existem';
$L['THERE_ARE_CURRENTLY'] = 'Existem atualmente';
$L['USERS_AND']           = 'usuários e';
$L['USERS_LAST_VISIT']    = 'novos usuários se registraram desde sua última visita';
$L['CLEAR']               = 'clara';

/* ********************************************************************************
 * #4 PAGES
 *
 * #4.1 - START SCREEN FORMS (login/forgot pass/register/account)
 *
 * #4.1.1 - LOGIN
 ************************************/
$L['CONFIRM_PASS_FIELD_PLACE'] = 'Por favor, confirme seu endereço de e-mail.';
$L['CREATE_ACCOUNT']           = 'Criar uma conta';
$L['REMEMBER_ME']              = 'Lembrar de mim';
$L['FORGOT_PASS']              = 'Esqueceu a senha?';
$L['LOG_IN']                   = 'Login';
$L['LOGIN_ACCOUNT']            = 'Faça login em sua conta para continuar.';
$L['LOGIN_USERNAME_INVALID']   = 'Login inválido. Verifique seu nome de usuário e tente novamente';
$L['LOGIN_PASSWORD_INVALID']   = 'Login inválido. Verifique sua senha e tente novamente';
$L['LOGIN_MISSING_USERNAME']   = 'Nome de usuário não informado';
$L['LOGIN_MISSING_PASSWORD']   = 'Senha não digitada';
$L['PASS_FIELD_INVALID']       = 'Por favor, forneça sua senha.';
$L['PASS_FIELD_PLACE']         = 'Por favor, digite sua senha.';
$L['PASS_FIELD_VALID']         = 'Senha fornecida, validação pronta.';
$L['REGISTRATION_DISABLED']    = 'O registro está desabilitado no momento.';
$L['SIGN_IN']                  = 'Entrar';
$L['UNREGISTERED']             = 'Não registrado?';
$L['USER_FIELD_INVALID']       = 'Por favor, forneça seu nome de usuário.';
$L['USER_FIELD_PLACE']         = 'Por favor, digite seu nome de usuário.';
$L['USER_FIELD_VALID']         = 'Nome de usuário fornecido, validação pronta.';
$L['ACCOUNT_BANNED']           = 'Sua conta foi banida.<br/>Por favor, contate um Administrador do Sistema.';
$L['ACCOUNT_DISABLED']         = 'Sua conta não está ativada ou está desativada.<br/>Se você acha que isso é um problema, entre em contato com um Administrador do Sistema.';
$L['ACCOUNT_INACTIVE_ADMIN']   = 'Sua conta não foi ativada por um Administrador.';
$L['ACCOUNT_INACTIVE_EMAIL']   = 'Sua conta não foi ativada.<br/>Por favor, verifique seu e-mail para obter o link de ativação.';
$L['IP_BANNED']                = 'Seu endereço IP foi banido.<br/>Por favor, contate um Administrador do Sistema.';

/* **********************************
 * #4.1.2 - FORGOT PASSWORD
 ************************************/
$L['EMAIL_FIELD_INVALID']      = 'Por favor, forneça o seu e-mail.';
$L['EMAIL_FIELD_PLACE']        = 'Por favor escreva o seu endereço de correio electrónico';
$L['EMAIL_FIELD_VALID']        = 'Email fornecido, validação pronta';
$L['PASS_GENERATED']           = 'Nova Senha Gerada!';
$L['PASS_GENERATED_INFO']      = 'A sua nova palavra-passe foi gerada e enviada para o e-mail associado à sua conta';
$L['PASS_GENERATED_FAIL']      = 'Nova palavra-passe falhada !';
$L['PASS_GENERATED_FAIL_INFO'] = 'Houve um erro ao enviar-lhe o e-mail com a nova senha, pelo que a sua senha não foi alterada';
$L['RECOVER_INFO']             = 'Introduza o seu e-mail e as instruções ser-lhe-ão enviadas!';
$L['RECOVER']                  = 'Recuperação da palavra-passe';
$L['PASSWORD_RESET']           = 'Redefinir senha';
$L['CONFIRM_PASSWORD']         = 'Confirmar senha';

/* **********************************
 * #4.1.3 - REGISTER
 ************************************/
$L['ACCOUNT_CREATED']           = 'a sua conta foi criada. ';
$L['ACTIVATED_USER']            = 'Usuário ativado ';
$L['CAN_LOGIN']                 = 'para o seu registo. Pode agora iniciar sessão';
$L['CREATED_ADM_ACT']           = 'However, this board requires account activation by an Admin. Será informado por e-mail quando a sua conta tiver sido activada';
$L['CREATED_CHECK_EMAIL']       = 'Por favor, verifique o seu e-mail para mais informações';
$L['CREATED_EMAIL_ACT']         = 'No entanto, este quadro requer a activação da conta. Foi enviada uma chave de activação para o endereço de correio electrónico que forneceu';
$L['EMAIL_EMPTY']               = 'E-mail não informado';
$L['EMAIL_INVALID']             = 'E-mail inválido';
$L['EMAIL_MATCH']               = 'Os endereços de e-mail não correspondem';
$L['EMAIL_TAKEN']               = 'Endereço de e-mail já cadastrado';
$L['RCONF_EMAIL_FIELD_INVALID'] = 'Este e-mail não corresponde ao anteriormente introduzido. Por favor, tente novamente';
$L['RCONF_EMAIL_FIELD_VALID']   = 'Este email corresponde, validação pronta';
$L['RCONF_PASS_FIELD_INVALID']  = 'Esta palavra-passe não corresponde à que foi introduzida anteriormente. Por favor, tente novamente';
$L['RCONF_PASS_FIELD_VALID']    = 'Senha de correspondência, validação pronta';
$L['REG_C_DISABLED_INFO1']      = 'mas o registo neste site está actualmente desactivado';
$L['REG_C_DISABLED_INFO2']      = 'Por favor tente novamente mais tarde ou contacte o proprietário do servidor';
$L['REG_C_DISABLED']            = 'o registo está actualmente desactivado';
$L['REG_DISABLED_INFO']         = 'Lamentamos mas o registo está actualmente desactivado\'. Por favor, tente novamente mais tarde';
$L['REG_DISABLED']              = 'Registo Deficiente';
$L['REG_FORM_INFO']             = 'Por favor, preencha o formulário abaixo para criar uma conta';
$L['REGISTERED_TXT']            = 'Registrado!';
$L['REG_FAILED']                = 'Falha no registro';
$L['REG_ERROR_INFO_1']          = 'Lamentamos, mas ocorreu um erro e seu registro para o nome de usuário ';
$L['REG_ERROR_INFO_2']          = ' não pôde ser completado. Por favor tente novamente mais tarde.';
$L['SORRY']                     = 'Pedimos desculpa';
$L['THANKS']                    = 'Obrigado';
$L['USERNAME_EMPTY']            = 'Nome de usuário não informado';
$L['USERNAME_BELOW']            = 'Nome de usuário abaixo ';
$L['USERNAME_ABOVE']            = 'Nome de usuário acima ';
$L['CHARACTERS']                = 'caracteres';
$L['USERNAME_REQUIREMENTS']     = 'O nome de usuário não atende aos requisitos';
$L['USERNAME_WORD_RESERVED']    = 'Palavra reservada do nome de usuário';
$L['USERNAME_TAKEN']            = 'Nome de usuário já em uso';
$L['USERNAME_DISALLOWED']       = 'Nome de usuário não permitido';
$L['REG_IP_BANNED']             = 'Endereço IP banido';
$L['PASSWORD_EMPTY']            = 'Senha não digitada';
$L['PASSWORD_SHORT']            = 'Senha muito curta';
$L['PASSWORD_LONG']             = 'Senha muito longa';
$L['PASSWORD_MATCH']            = 'As senhas não coincidem';
$L['QUOTA_EMPTY']               = 'Cota de disco não inserida';

/* **********************************
 * #4.1.4 - ACCOUNT
 ************************************/
$L['ADMIN_EDIT_ACC'] = 'Editar conta Admin';
$L['EDIT_ACCOUNT']   = 'Editar conta';
$L['USER_LINKS']     = 'Ligações do utilizador';
$L['ADMIN_LINKS']    = 'Ligações administrativas';
$L['Q_APP_DASH']     = 'Painel de controlo QuickBox';
$L['Q_SYS_DASH']     = 'Painel do sistema QuickBox';
$L['RESET_PASS']     = 'Redefinir senha';
$L['RESET_PASSWORD'] = 'Redefinir sua senha';
$L['USER_PROFILE']   = 'Perfil de usuário';
$L['PWD_CHANGE']     = 'Senha alterada';
$L['EMAIL_CHANGE']   = 'E-mail alterado';

/* **********************************
 * #4.1.4.1 - quotes
 ************************************/
$L['DAYUM']               = 'Caramba';
$L['HEY']                 = 'Ei';
$L['HOW_AWESOME']         = 'como você ficou tão incrível?';
$L['LOOK_GOOD']           = 'Parece bom!';
$L['QUICKBOX_DEDICATION'] = 'nós amamos sua dedicação ao QuickBox!!!';
$L['SO_GLAD']             = 'Estou tão feliz por você estar aqui';
$L['WITHOUT_YOU']         = 'Onde eu estaria sem você?';

/* **********************************
 * #4.1.4.2 - edit account modal
 ************************************/
$L['CONFIRM_NEW_PASS_INFO'] = 'Por favor, confirme a sua nova palavra-passe';
$L['CURRENT_PASS']          = 'Palavra-passe actual';
$L['NEW_EMAIL']             = 'Novo endereço de correio electrónico';

/* **********************************
 * #4.1.5 - SUMMARY
 ************************************/
$L['AWESOME']              = 'Fantástico';
$L['WITH_PASSWORD']        = 'com password';
$L['USER_ADDED_TO_DB']     = 'foi adicionado à base de dados';
$L['RETURN_PREVIOUS']      = 'Regressar à página anterior';
$L['REGI_FAIL']            = 'Inscrição falhada';
$L['REGI_FAIL_ERR1']       = 'Lamentamos, mas ocorreu um erro e o seu registo para o nome de utilizador';
$L['REGI_FAIL_ERR2']       = 'não pôde ser completado';
$L['REGI_FAIL_ERR3']       = 'Por favor tente novamente';
$L['REGI_FAIL_ERRR_FOUND'] = 'erro(s) encontrado(s)';

/* **********************************
 * #4.2 - SETTINGS
 *
 * #4.2.1 - GENERAL SETTINGS
 ************************************/
$L['ACCOUNT_PAGE']                = 'Página da conta';
$L['ACTIVATION_IP']               = 'IP de ativação';
$L['ACTIVATION_NEED_D_DO']        = 'Faça aqui!';
$L['ACTIVATION_NEED_D']           = 'Precisa desativar?';
$L['ACTIVATION_NEED_G_GET']       = 'Pegue uma aqui!';
$L['ACTIVATION_NEED_G']           = 'Precisa de uma chave de licença?';
$L['ACTIVATION_TIME']             = 'Tempo de ativação';
$L['ADD_DASH_SETTINGS']           = 'Addidtionnal Dashboard Settings';
$L['ADMIN_HOME']                  = 'Pagina inicial';
$L['API_ACTIVE']                  = 'Ativa';
$L['API_KEY']                     = 'Chave de licença';
$L['API_NOT_ACTIVE']              = 'Desativada';
$L['API_PLACE']                   = 'Insira a chave de licença aqui ...';
$L['API_SETTINGS']                = 'Controle de Licença';
$L['API_STATUS']                  = 'Status da API';
$L['API']                         = 'Licença';
$L['CONF_SETTINGS']               = 'Definições de configuração';
$L['DASH_URL_SETTINGS']           = 'Dashboard URL Settings';
$L['DEFAULT_PAGE']                = 'Página de destino';
$L['DISK_MOUNT']                  = 'Montagem em disco';
$L['EDIT_GEN_SETTINGS']           = 'Editar configurações gerais do site';
$L['EMAIL_FROM_ADDR']             = 'Endereço de e-mail do site';
$L['EMAIL_FROM_NAME']             = 'Nome do E-mail';
$L['EMAIL_SETTINGS']              = 'Configurações de e-mail';
$L['LOGIN_PAGE']                  = 'Página de login';
$L['NET_ADAPTER']                 = 'Interface de Rede';
$L['PHP_DATE_FORMAT']             = 'Formato de Data PHP';
$L['PHP_FORMAT_SETTINGS']         = 'Configurações do formato PHP';
$L['PHP_TIME_ZONE']               = 'Fuso horário do PHP';
$L['SITE_DESC']                   = 'Descrição do Site';
$L['SITE_META_SETTINGS']          = 'Configurações Meta do Site';
$L['SITE_NAME']                   = 'Nome do site';
$L['SITE_ROOT']                   = 'Raiz do Site';
$L['SITE_NAME_TOOLTIP']           = 'O nome do site deve ter menos de 40 caracteres alfanuméricos, sem caracteres especiais (são permitidos espaços)';
$L['SITE_DESC_TOOLTIP']           = 'A descrição do site deve ter menos de 120 caracteres alfanuméricos, sem caracteres especiais (são permitidos espaços)';
$L['EMAIL_FROM_NAME_TOOLTIP']     = 'O nome de origem deve ter menos de 60 caracteres e ser alfanuméricos, sem caracteres especiais (são permitidos espaços)';
$L['SITE_ROOT_TOOLTIP']           = 'Digite o IP do seu servidor ou domínio válido sem a barra final. exemplo: https://192.168.0.1 (ou) https://somedomain.com';
$L['SITE_LOGO_COLLAPSED']         = 'Logotipo recolhido';
$L['SITE_LOGO_FULL']              = 'Logotipo Completo';
$L['SITE_LOGO_SETTINGS']          = 'Configurações do logotipo do site';
$L['SITE_LOGO_COLLAPSED_TOOLTIP'] = 'Este é o logotipo que será exibido quando a barra lateral for recolhida e será usado como o ícone da aba do navegador.';
$L['SITE_LOGO_FULL_TOOLTIP']      = 'Este é o logotipo que será exibido quando a barra lateral for expandida.';

/* **********************************
 * #4.2.2 - EMAIL SETTINGS
 ************************************/
$L['SMTP_AUTH']     = 'Habilitar autenticação SMTP';
$L['SMTP_SECURE']   = 'Ative a criptografia SSL, TLS também aceita com a porta 465';
$L['MAIL_HOST']     = 'Defina o servidor SMTP para enviar';
$L['MAIL_PORT']     = 'Porta TCP para conectar';
$L['MAIL_USERNAME'] = 'Nome de usuário SMTP';
$L['MAIL_PASS']     = 'Senha SMTP';

/* **********************************
 * #4.2.3 - SESSION SETTINGS
 ************************************/
$L['CHANGE_SESSION_SETTINGS'] = 'Altere as configurações relativas às sessões.';
$L['COOKIE_EXPIRY']           = '\'Lembre de mim\' Expiração do Cookie';
$L['COOKIE_PATH']             = 'Caminho do Cookie';
$L['DAYS']                    = 'Dias';
$L['GUEST_TIMEOUT']           = 'Tempo limite do convidado';
$L['MINUTES']                 = 'Minutos';
$L['RESET_EXPIRY']            = 'Redefinir Expiração no Logon';
$L['USER_TIMEOUT']            = 'Tempo limite de inatividade do usuário';

/* **********************************
 * #4.2.4 - USER SETTINGS
 ************************************/
$L['ALLOW_MULTI_LOGINS']        = 'Vários acessos';
$L['ALLOW_MULTI_LOGINS_DESC']   = 'Esta opção permite logins simultâneos de vários dispositivos. Se desativado, o usuário será desconectado de todos os outros dispositivos quando fizer login em um novo dispositivo.';
$L['ALLOW_CONFIG_EDITING']      = 'Configurar editores no painel';
$L['ALLOW_CONFIG_EDITING_DESC'] = 'Esta opção permite a edição dos arquivos de configuração do painel. Se desativado, a opção de visualizar/editar configurações ficará oculta.';
$L['ALLOW_MOUNT_INFO']          = 'Painel de visualização e adição de informações de montagem';
$L['ALLOW_MOUNT_INFO_DESC']     = 'Esta opção permite visualizar e adicionar informações de montagem no painel. Se desativado, a opção de visualizar/adicionar informações de montagem ficará oculta.';
$L['BY_ADMIN']                  = 'Por Admin (Definir abaixo ..)';
$L['BY_USER']                   = 'Por usuário (consulte as páginas de administração do usuário)';
$L['CHANGE_USER_SETTINGS']      = 'Alterar configurações globais para contas de usuários.';
$L['EXCLUDE_ADMINS']            = 'Excluir administradores';
$L['EXCLUDE_REDIRECTED_ADMINS'] = 'Excluir administradores de serem redirecionados.';
$L['GEN_USER_SETTINGSTINGS']    = 'Configurações gerais do usuário';
$L['HOW_SET']                   = 'Como eles estão definidos?';
$L['INDIV_USER_HOME']           = 'Homepages individuais de usuários';
$L['INDIVIDUAL_USER_FOLDERS']   = 'Pastas de Usuários Individuais';
$L['PATH_ADMIN']                = 'Caminho (definido pelo administrador)';
$L['SITE_ROOT_RELATIVE']        = 'Relativo à Raiz do Site';
$L['SETTING']                   = 'Configuração';
$L['DESCRIPTION']               = 'Descrição';
$L['VALUE']                     = 'Valor';

/* **********************************
 * #4.2.5 - SECURITY SETTINGS
 ************************************/
$L['BAN_IP_ADDRESS']       = 'Bloquear / Banir Endereço IP';
$L['BAN_IP_INFO']          = 'por exemplo. 192.168.0.1 sem zeros à esquerda';
$L['BAN_IP_REGISTER']      = 'Proibir endereços IP de registrar (ou fazer login)';
$L['BANNED_IP_ADDRESSES']  = 'Endereços IP proibidos';
$L['DISALLOW_USERNAME']    = 'Não permitir nome de usuário';
$L['DISALLOWED_USERNAME']  = 'Nome de usuário não permitido';
$L['DISALLOW_USERNAMES']   = 'Não permitir nomes de usuário';
$L['DISALLOWED_USERNAMES'] = 'Nomes de usuário não permitidos';
$L['PREVENT_USERNAMES']    = 'Evitar que nomes de usuário sejam registrados';

/* **********************************
 * #4.3 - USER MANAGEMENT
 *
 * #4.3.1 - REGISTRATION SETTINGS
 ************************************/
$L['ACCOUNT_ACTIVATION']           = 'Ativação de conta';
$L['ADMIN_ACT']                    = 'Ativação de administrador';
$L['ADMIN_ACT_INFO']               = 'Quando esta opção for selecionada, após o registro o usuário será informado que deve aguardar o Administrador ativar a conta. O usuário também receberá um e-mail para este efeito, assim como o Administrador que terá a opção de ativar o usuário com o link fornecido no e-mail ou visitar o Painel de Administração e ativar o usuário lá.';
$L['ALPHANUMERIC_ONLY']            = 'Somente alfanumérico';
$L['ALPHANUMERIC_SPACERS']         = 'Espaçadores alfanuméricos';
$L['ANY_CHARS']                    = 'Quaisquer Caracteres';
$L['ANY_LETTER_NUM']               = 'Qualquer número e letra';
$L['DEFAULT_QUOTA_ALLOWANCE']      = 'Subsídio de cota padrão';
$L['DEFAULT_QUOTA_ALLOWANCE_INFO'] = 'Defina um valor de cota padrão para novas contas criadas. Este valor é usado apenas quando o pacote Linux Quota está instalado.';
$L['DISABLE_REGISTRATION']         = 'Desativar registro';
$L['DISABLE_REGISTRATION_INFO']    = 'Isto desabilita o registro. O formulário de inscrição não é exibido e é substituído por uma mensagem informativa.';
$L['ENABLE_CAPTCHA']               = 'Ativar Captcha';
$L['LETTER_NUM_AND_SPACE']         = 'Letras Números e espaços';
$L['LIMIT_CHAR']                   = 'Limitar os caracteres de nome de usuário';
$L['NO_ACTIVATION']                = 'Sem ativação (acesso imediato)';
$L['NO_ACTIVATION_INFO']           = 'A configuração desta opção permite que o usuário se registre normalmente sem a necessidade de qualquer processo de ativação adicional.';
$L['PASSWORD_LENGTH']              = 'Comprimento da senha';
$L['RECOMMENDED']                  = 'QuickBox recomendado';
$L['REG_SETTINGS_INFO']            = 'Altere as configurações referentes ao registro no site.';
$L['REG_SETTINGS']                 = 'Configurações de registro';
$L['SEND_WELCOME_EMAIL']           = 'Enviar e-mail de boas-vindas';
$L['SEND_WELCOME_EMAIL_YES_INFO']  = 'Definir esta opção como Sim envia emails de boas-vindas ao usuário, bem como ao administrador do sistema. Esta opção requer configuração SMTP para enviar e-mails corretamente. Essas opções podem ser controladas na página <a href="/email-settings.php" style="color: var(--qb-color-29);text-decoration: underline;">Configurações de e-mail</a>.';
$L['SEND_WELCOME_EMAIL_NO_INFO']   = 'Definir esta opção como Não não enviará emails de boas-vindas para usuários recém-registrados. Todas as criações/registros de usuários permanecem em silêncio, assim como a criação de usuários dentro do ambiente CLI.';
$L['USER_ACT']                     = 'Ativação do usuário (verificação por e-mail)';
$L['USER_ACT_INFO']                = 'A configuração desta opção requer que o usuário ative sua conta clicando em um link enviado para seu endereço de e-mail registrado.';
$L['USERNAME_LENGTH']              = 'Comprimento do nome de usuário';
$L['USERNAME_LOWERCASE']           = 'Nome de usuário em minúsculas';
$L['USERNAME_LOWERCASE_YES_INFO']  = 'Definir esta opção para Sim altera todos os novos nomes de usuário registrados para minúsculas. Esta é a opção recomendada.';
$L['USERNAME_LOWERCASE_NO_INFO']   = 'Definir esta opção como Não não alterará os novos nomes de usuário registrados para minúsculas. Os nomes de usuário aparecerão conforme forem registrados, mas manterão as minúsculas no ambiente do servidor para a funcionalidade adequada do software.';

/* **********************************
 * #4.3.2 - USER ADMINISTRATION
 ************************************/
$L['ADMIN_ANNOUNCE']        = 'Anúncios de administração';
$L['ANNOUNCEMENT_LIST']     = 'Conteúdo do anúncio';
$L['AWAITING_ADMIN']        = 'Awaiting Admin Activation';
$L['AWAITING_EMAIL']        = 'Awaiting E-mail Activation';
$L['BANNED']                = 'Banned';
$L['CU_CONFIRM_EMAIL_INFO'] = 'Please confirm E-mail';
$L['CU_CONFIRM_EMAIL']      = 'Confirmar e-mail';
$L['CU_CONFIRM_PASS_INFO']  = 'Por favor, confirme sua senha';
$L['CU_CONFIRM_PASSWORD']   = 'Confirme a Senha';
$L['CU_DISK_QUOTA']         = 'Quota de disco:';
$L['CU_GROUP']              = 'Grupo';
$L['CU_EMAIL']              = 'E-mail';
$L['CU_NEW_PASS_INFO']      = 'Por favor, insira sua nova senha';
$L['CU_NEW_PASSWORD']       = 'Nova senha';
$L['CU_SHELL_ENV']          = 'Ambiente de shell preferido';
$L['CURRENT_SHELLS']        = 'Shell atual';
$L['CURRENT_USERS']         = 'Usuários atuais';
$L['DEFAULT_GROUP_TAG']     = 'padrão';
$L['DELETED_ALL_SESSIONS']  = 'Excluiu todas as sessões';
$L['DISK_STATUS']           = 'Status do Disco';
$L['EDIT_USER_SHELL']       = 'Edite o ambiente de shell do usuário';
$L['EXPIRY']                = 'Expira';
$L['HAS_USED']              = 'usou';
$L['IP_ADDRESS']            = 'Endereço IP';
$L['LAST_IP_ADDRESS']       = 'Último endereço IP';
$L['LAST_LOGIN']            = 'Último login:';
$L['LAST']                  = 'Último';
$L['MEMBER_STATUS']         = 'Estatuto de Membro';
$L['MEMBER_GROUP']          = 'Grupo de Membro';
$L['OF_QUOTA']              = 'da sua quota total';
$L['RECENTLY_ONLINE']       = 'Recentemente Online';
$L['REGISTERED_DISK_QUOTA'] = 'Quota de Disco';
$L['REGISTERED']            = 'Registrado';
$L['REGISTRATION_LOGIN']    = 'Registro e Login';
$L['STATISTICS']            = 'Estatisticas';
$L['USER_ACTIVITY']         = 'Atividade do usuário';
$L['PASSWORD_NOTICE']       = 'Palavra-passe não deve conter os seguintes caracteres';
$L['USER_QUOTA_HELP']       = 'Introduza a quantidade de espaço em disco que gostaria de atribuir a um utilizador. As cotas devem ser instaladas para fazer uso desta opção';
$L['USER_SHELL_HELP']       = 'Seleccione o menu suspenso acima para adicionar o utilizador a uma concha.';
$L['USERNAME_ADMIN_USER']   = 'Nome de usuário:';
$L['USERNAMES']             = 'Nome de usuário';
$L['USERS_AWAITING']        = 'Usuários aguardando ativação';
$L['USERS_SESSIONS']        = 'Sessões do Usuário';

/* **********************************
 * #4.3.2.1 - admin user edit
 ************************************/
$L['ACTIONS']                 = 'Ações';
$L['ACTIVE_SESSION']          = 'Sessão ativa';
$L['APPLICATION']             = 'Software';
$L['BANNED_USER']             = 'Usuário banido';
$L['CURRENT_FULL_PATH']       = 'Caminho completo atual';
$L['CURRENT_GROUPS']          = 'Grupos atuais';
$L['CURRENT_STATUS']          = 'Status atual';
$L['EDIT_DEFAULT_GROUP']      = 'Grupo padrão';
$L['EDIT_DEFAULT_GROUP_INFO'] = 'Esta opção, quando selecionada, definirá este como o grupo padrão. Isso é útil ao criar usuários por meio de CLI e deseja ter um grupo personalizado como o padrão atribuído.';
$L['EDIT_GROUP_MEMBERSHIP']   = 'Editar a associação do grupo do usuário';
$L['EU_PATH']                 = 'Caminho';
$L['GENERAL_INFO']            = 'Informações gerais';
$L['GROUP_MEMBERSHIP_HELP']   = 'Clique na caixa de texto abaixo para adicionar o usuário a mais grupos...';
$L['GROUP_MEMBERSHIP']        = 'Membro do grupo';
$L['HOMEPAGE']                = 'Pagina inicial';
$L['INSTRUCTIONS']            = 'Instruções';
$L['LAST_ACTIVE_IP']          = 'Último IP ativo';
$L['LAST_ACTIVE']             = 'ativo pela última vez';
$L['LAST_UPDATE']             = 'Última atualização';
$L['PERSISTENT']              = 'Persistente';
$L['REGISTERED_IP']           = 'IP registrado';
$L['SESSION_EXPIRY']          = 'Expiração da sessão';
$L['SELECT_GROUP']            = 'Selecionar Grupo';
$L['STATUS']                  = 'Status';
$L['UNBANNED_USER']           = 'Usuário não banido';
$L['UNIQUE_USER_HP_SETTINGS'] = 'Página inicial exclusiva do usuário - Configurações';
$L['USER_EDIT1']              = 'Editar Usuário :';
$L['USER_EDIT2']              = 'Editar Usuário';

/* **********************************
 * #4.3.2.2 - admin announce
 ************************************/
$L['ENABLE_USER_ANNOUNCE']          = 'Ativar anúncio no painel';
$L['ANNOUNCEMENT_HISTORY']          = 'Seus anúncios anteriores';
$L['TYPE']                          = 'Tipo';
$L['USER']                          = 'Usuário';
$L['TIME']                          = 'Hora';
$L['ANNOUNCEMENT_LIST']             = 'Conteúdo do anúncio';
$L['GLOBAL_USER_ANNOUNCEMENT']      = 'Global (todos os usuários)';
$L['CREATE_DASHBOARD_ANNOUNCEMENT'] = 'Criar anúncio do painel';
$L['GLOBAL_ANNOUNCEMENT']           = 'Anúncio Global';
$L['GLOBAL_ANNOUNCEMENT_INFO']      = 'Selecionar esta opção criará um anúncio global visível no painel de cada usuário, independentemente de sua participação no grupo. Se você já atribuiu um anúncio a um usuário, ele será exibido junto com este anúncio global.';
$L['SELECT_USER']                   = 'Selecionar usuário:';
$L['SELECT_ANNOUNCEMENT_TYPE']      = 'Tipo de anúncio:';
$L['EDIT_DASHBOARD_ANNOUNCEMENT']   = 'Editar anúncio do painel';
$L['EDIT_ANNOUNCEMENT_INFO']        = 'Editar e salvar um anúncio existente redefinirá sua visibilidade no painel do usuário especificado. Se o anúncio for global, ele também redefinirá o histórico de visualização nos painéis de todos os usuários.';
$L['ANNOUNCEMENT_ID']               = 'ID do anúncio';
$L['ANNOUNCEMENT_TYPE']             = 'Tipo de anúncio';
$L['PREVIEW']                       = 'Pré-visualização';

/* **********************************
 * #4.3.3 - USERS GROUPS
 ************************************/
$L['ADMINISTRADORES']              = 'Administradores';
$L['ASSIGN_LEVEL']                 = 'Atribuir nível de grupo:';
$L['CANCELLED']                    = 'Cancelado';
$L['CLICK_HERE']                   = 'Clique aqui...';
$L['CONFIRM_DELETE_GROUP_TITLE']   = 'Tem certeza?';
$L['CONFIRM_DELETE_GROUP_SUBTEXT'] = 'Isso excluirá o grupo e redefinirá todos os usuários do grupo. Certifique-se de que esses usuários estejam atribuídos a outro grupo.';
$L['DELETE_GROUP']                 = 'Excluir Grupo';
$L['DELETED']                      = 'Excluído';
$L['GROUP_DELETED']                = 'Este grupo foi removido, grupos de usuários redefinidos.';
$L['GROUP_DELETE_CANCEL']          = 'Exclusão do grupo cancelada.';
$L['GROUP_STAY']                   = 'O grupo ficará :)';
$L['GROUP_USER_REMOVED']           = 'O usuário foi removido do grupo.';
$L['GROUP_USER_STAY']              = 'O usuário permanece no grupo :)';
$L['GROUP_YES']                    = 'Sim, tenho certeza!';
$L['GROUP_NO']                     = 'Não, cancele!';
$L['EDIT_ADD_USER']                = 'Adicionar usuário:';
$L['EDIT_GROUP_LEVEL']             = 'Nível do grupo:';
$L['EDIT_GROUP_NAME']              = 'Nome do Grupo:';
$L['GROUP_LEVEL']                  = 'Nível do Grupo';
$L['GROUP_NAME']                   = 'Nome do Grupo';
$L['LEVEL_INFO']                   = 'Digite um número entre 2 - 256';
$L['NEW_GROUP_NAME']               = 'Novo nome do grupo:';
$L['NUMBER_MEMBERS']               = '# de membros';
$L['REMOVED']                      = 'Removido';
$L['USER_GROUPS_INFO']             = 'Criar, visualizar e editar grupos de usuários. Atribuir usuários a grupos de usuários.';
$L['SOFT_GROUP_ASGMNT']            = 'Atribuição de grupo de software';

/* **********************************
 * #4.4 - SYSTEM
 *
 * #4.4.1 - WEB CONSOLE
 ************************************/
$L['WEB_CONSOLE_INFO'] = 'Acesse seu ambiente de comando.';

/* **********************************
 * #4.4.2 - API CONTROL
 ************************************/
$L['ACTIVATION_INFO_STATS']             = 'Estatísticas de informações de ativação';
$L['QB_CONTROL_API']                    = 'API de controle QB';
$L['QB_CONTROL_API_NOTICE']             = 'As teclas de controle da API são compartimentadas em dois componentes, conforme mostrado abaixo.<br/>Exemplos de uso foram rotulados para ilustrar um nível específico de permissões de comandos necessários para executar a tarefa designada. A biblioteca de uso da API continuará recebendo atualizações à medida que endpoints e funções adicionais forem implementados.<br/><br/><table><tbody><tr><td style="width:15px;vertical-align:middle;"><span class="badge badge-indicators badge-primary">&nbsp;</span></td><td>A <em>chave de permissões de leitura</em> só tem a capacidade de extrair dados. Esta chave não pode sinalizar tarefas operacionais para o servidor QuickBox. A menos que você esteja tentando controlar remotamente sua instalação, esta chave é tudo o que é necessário.</td></tr><tr><td style="width:15px;vertical-align:middle;"><span class="badge badge-indicators badge-success">&nbsp;</span></td><td>A <em>chave de permissões de gravação</em> tem a capacidade de executar tarefas adicionais, como atualizar a instalação do QuickBox, gerenciar a ativação da API principal e muito mais. Essa chave também funcionará para permissões de leitura e deve ser considerada a chave privilegiada mais alta. Útil para executar remotamente tarefas básicas de gerenciamento em seu servidor.</td></tr></tbody></table><br/>Lembre-se de tratar suas chaves de API como se fossem senhas, nunca as compartilhe.<br/>Você pode gerar novamente uma nova chave de controle aleatório a qualquer momento pressionando o botão <i data-feather="refresh-cw" style="width:14px;"></i> abaixo.';
$L['CLOSE_ACKNOWLEDGE']                 = 'Reconhecer e fechar';
$L['READ_PERM_KEY']                     = 'Chave de permissões de leitura';
$L['REGENERATE_READ_KEY']               = 'Regenerar chave de permissões de leitura';
$L['WRITE_PERM_KEY']                    = 'Escrever chave de permissões';
$L['REGENERATE_WRITE_KEY']              = 'Regenerar chave de permissões de gravação';
$L['API_SPEC_USAGE']                    = 'Uso específico da API';
$L['DISPLAY_CURRENT_API_STAT']          = 'Exibir o status atual da API';
$L['EXAMPLE_CODE']                      = 'código:';
$L['EXAMPLE_OUTPUT']                    = 'saída:';
$L['ACTIVATE_QUICKBOX_API']             = 'Ativar chave API QuickBox';
$L['DEACTIVATE_QUICKBOX_API']           = 'Desativar chave API QuickBox';
$L['VERSION_SPEC_USAGE']                = 'Uso específico da versão';
$L['DISPLAY_CURRENT_VERSION']           = 'Exibir o status da versão atual do QuickBox';
$L['UPDATE_QUICKBOX_VERSION']           = 'Atualizar versão do QuickBox';
$L['UPDATE_ALERT_NOTICE']               = 'Se sua instância já estiver atualizada, você verá a seguinte saída';
$L['RUN_FIX_VERSION']                   = 'Executar correção de versão';
$L['USER_SPEC_USAGE']                   = 'Uso específico do usuário';
$L['DISPLAY_ALL_USER_INFO']             = 'Exibir informações para todos os usuários';
$L['DISPLAY_SINGLE_USER_INFO']          = 'Exibir informações para o usuário especificado';
$L['DISPLAY_USER_SOFTWARE']             = 'Exibir o software atualmente instalado pelo usuário especificado';
$L['CREATE_SPECIFIED_USER']             = 'Criar usuário especificado';
$L['CREATE_SPECIFIED_USER_INFO_NOTICE'] = 'Se você gostaria de testar um usuário com seu e-mail existente e definir um limite de cota. Observe que tanto o e-mail quanto a cota são puramente opcionais. Se nenhuma cota for inserida, ele utilizará o valor padrão do seu conjunto configurado <a href="/registration.php" rel="noopener nofollow" target="_blank">aqui</a>.';
$L['DELETE_SPECIFIED_USER']             = 'Excluir usuário especificado';
$L['BAN_SPECIFIED_USER']                = 'Banir usuário especificado';
$L['UNBAN_SPECIFIED_USER']              = 'Desbanir usuário especificado';
$L['SOFTWARE_SPEC_USAGE']               = 'Uso específico do software';
$L['DISPLAY_ALL_SOFTWARE']              = 'Mostrar todos os aplicativos de software disponíveis para instalação';
$L['DISPLAY_SINGLE_SOFTWARE']           = 'Exibir informações para o software especificado';
$L['API_SOFTWARE_NOTICE']               = 'Para encontrar orientação sobre como os nomes de software (nomes de aplicativos) são estruturados, consulte a seção \'Software\' no manual do usuário. Você pode acessá-lo clicando <a href="/help.php#software">aqui</a>.';
$L['API_SOFTWARE_WARNING']              = 'Esteja ciente de que, para determinados aplicativos, as convenções de nomenclatura podem não ser designadas oficialmente e, em vez disso, podem fazer parte de um conjunto expandido de opções.<br/><br/>
Aqui está um exemplo usando Bazarr4K:<br>
<pre class="mb-2"><code class="language-json">"bazarr4k": {
    "software_title": "Bazarr4K",
    "qb_package_name": "bazarr",
    "qb_options": "-o 4k",
    ...</code></pre>
Observe as seguintes informações importantes sobre a saída da API do software QuickBox:
<ul>
<li>Ao acessar pacotes de software através do QuickBox, você encontrará consistentemente o atributo \'qb_package_name\'. Este atributo é marcado e usado pela convenção de nomenclatura <code>qb</code>.</li>
<li>Além disso, cada saída da API inclui a entrada \'qb_options\', que fornece opções valiosas para personalização. Uma dessas opções é o sinalizador de instalação \'4K\', denotado como <code>-o 4k</code>.</li>
</ul><br/>
Por exemplo, se você pretende instalar o \'Bazarr\' com suporte a 4K, você deve usar o seguinte comando:<br/>
<pre class="mb-0"><code class="language-bash">qb install bazarr -o 4k -u [USERNAME]</code></pre><br/>
É importante observar que você não deve usar \'bazarr4k\' como nome do pacote, pois a entrada \'qb_options\' foi projetada para lidar com tais personalizações de forma eficiente.';
$L['SOFTWARE_SERVICE_STATUS']            = 'Exibir status para software e usuário especificados';
$L['SOFT_STATUS_ACTIVE_NOTICE']          = 'Se o serviço estiver ativo.';
$L['SOFT_STATUS_INACTIVE_NOTICE']        = 'Se o serviço estiver inativo.';
$L['SOFT_STATUS_NOT_ISNTALLED_NOTICE']   = 'Se o aplicativo não estiver instalado para o usuário especificado.';
$L['SOFTWARE_SERVICE_CONTROL']           = 'Sinalizar ação especificada para software e usuário especificados';
$L['SOFT_CONTROL_ACTION_RESTART_NOTICE'] = 'Onde a action=restart...';
$L['SOFT_CONTROL_ACTION_START_NOTICE']   = 'Onde a action=start...';
$L['SOFT_CONTROL_ACTION_STOP_NOTICE']    = 'Onde a action=stop...';

/* **********************************
 * 4.4.3 - SSL CONTROL
 ************************************/
$L['LETSENCRYPT_DOMAIN']         = 'Let\'s Encrypt o domínio';
$L['SSL_CONTROL']                = 'Controle SSL';
$L['ABOUT_SSL_CONTROL']          = 'Este recurso permite gerar facilmente certificados SSL para os aplicativos suportados que você instalou. Ao selecionar “Sim” e inserir seu domínio, você configurará perfeitamente o proxy reverso Nginx junto com o certificado SSL.';
$L['STAGE_DASHBOARD_SSL']        = 'Estágio SSL para o painel?';
$L['DASHBOARD_SSL_TOOLTIP']      = 'Para proteger seu painel QuickBox com um certificado SSL, basta selecionar \'Sim\'. Esta ação não apenas configurará o certificado SSL, mas também estabelecerá as configurações e links necessários do NGinx, facilitando o acesso seguro ao seu painel através do seu domínio.';
$L['STAGE_OWNED_DOMAIN_SSL']     = 'Stage SSL para um domínio próprio?';
$L['NON_DASHBOARD_SSL_TOOLTIP']  = 'Para estabelecer um certificado SSL para um domínio de sua preferência, escolha \'Sim\'. Esta opção foi projetada para a criação de certificados SSL adicionais. Certifique-se de que os registos DNS apropriados para o domínio estão devidamente configurados, pois este processo gera exclusivamente os certificados SSL solicitados.';
$L['STAGE_EMBY_SSL']             = 'Estágio SSL para Emby?';
$L['EMBY_SSL_TOOLTIP']           = 'Para proteger sua instalação Emby com um certificado SSL, simplesmente selecione \'Sim\'. Esta ação não apenas configurará o certificado SSL, mas também estabelecerá as configurações e links necessários do NGinx, facilitando o acesso seguro à sua instalação Emby através do seu domínio.';
$L['STAGE_JELLYFIN_SSL']         = 'Estágio SSL para Jellyfin?';
$L['JELLYFIN_SSL_TOOLTIP']       = 'Para proteger sua instalação do Jellyfin com um certificado SSL, basta selecionar \'Sim\'. Esta ação não apenas configurará o certificado SSL, mas também estabelecerá as configurações e links necessários do NGinx, facilitando o acesso seguro à sua instalação do Jellyfin através do seu domínio.';
$L['STAGE_JELLYSEERR_SSL']       = 'Estágio SSL para Jellyseerr?';
$L['JELLYSEERR_SSL_TOOLTIP']     = 'Para proteger sua instalação do Jellyseerr com um certificado SSL, simplesmente selecione \'Sim\'. Esta ação não apenas configurará o certificado SSL, mas também estabelecerá as configurações e links necessários do NGinx, facilitando o acesso seguro à sua instalação do Jellyseerr através do seu domínio.';
$L['STAGE_KOMGA_SSL']            = 'SSL de estágio para Komga?';
$L['KOMGA_SSL_TOOLTIP']          = 'Para proteger sua instalação do Komga com um certificado SSL, simplesmente selecione \'Sim\'. Esta ação não apenas configurará o certificado SSL, mas também estabelecerá as configurações e links necessários do NGinx, facilitando o acesso seguro à sua instalação Komga através do seu domínio.';
$L['STAGE_OVERSEERR_SSL']        = 'Estágio SSL para Overseerr?';
$L['OVERSEERR_SSL_TOOLTIP']      = 'Para proteger sua instalação do Overseerr com um certificado SSL, simplesmente selecione \'Sim\'. Esta ação não apenas configurará o certificado SSL, mas também estabelecerá as configurações e links necessários do NGinx, facilitando o acesso seguro à instalação do Overseerr através do seu domínio.';
$L['STAGE_PLEX_SSL']             = 'Estágio SSL para Plex?';
$L['PLEX_SSL_TOOLTIP']           = 'Para proteger sua instalação do Plex com um certificado SSL, basta selecionar \'Sim\'. Esta ação não apenas configurará o certificado SSL, mas também estabelecerá as configurações e links necessários do NGinx, facilitando o acesso seguro à sua instalação Plex através do seu domínio.';
$L['DOMAIN']                     = 'Domínio';
$L['SSL_ALREADY_INSTALLED']      = 'Por favor, esteja ciente de que já existe um certificado SSL instalado para esta opção. Reinstalar o certificado inserindo um novo domínio abaixo redefinirá a configuração reversa atual do NGinx, removerá o certificado anterior e redefinirá o acesso ao link atualmente definido.';
$L['SSL_SUBMIT']                 = 'Instalar certificado SSL';
$L['SSL_STATUS_MONITOR_TOOLTIP'] = 'Monitore o status dos seus certificados SSL existentes com a capacidade de realizar duas ações principais: exclusão ou renovação forçada. Para certificados associados a aplicativos compatíveis, como Emby, Jellyfin, Jellyseerr, Komga, Overseerr e Plex, a exclusão de um certificado também acionará a remoção e reconfiguração do proxy reverso Nginx para o domínio correspondente.<br><br>Você pode facilmente exclua um certificado usando as opções abaixo e posteriormente selecione o aplicativo desejado acima para iniciar a instalação de um novo subdomínio e certificado. Este processo simplificado garante a máxima flexibilidade e controle sobre o gerenciamento do seu certificado SSL.';
$L['CERTS_STORED_AT']            = 'Certificados monitorados são armazenados em';
$L['CERT_EXPIRES']               = 'Expira em:';
$L['CERT_RENEW']                 = 'Renovar Certificado';
$L['CERT_DELETE']                = 'Exclua o certificado SSL e quaisquer configurações adicionais. Esta ação é irreversível.';
$L['CERT_DELETE_CONFIRM']        = 'Tem certeza que deseja excluir este certificado?';
$L['NO_CERTS_INSTALLED']         = 'Não há certificados SSL instalados e/ou monitorados neste momento.';

/* **********************************
 * #4.4.4 - TROUBLESHOOTING
 ************************************/
$L['SERVICE']                = 'Serviço';
$L['APP_SELECT']             = 'Seleccione o software';
$L['APPLICATION']            = 'Aparelho';
$L['CLEAN_MEM']              = 'Limpar cache de memória física';
$L['FIX']                    = 'Consertar';
$L['FIXUPDATE']              = 'Corrigir bloqueios do frontend do dpkg';
$L['LOG_GEN']                = 'Gerador de Log do Sistema';
$L['NGINX']                  = 'nginx';
$L['PHP']                    = 'php-fpm';
$L['PHP7_2']                 = 'php-fpm';
$L['QSUPPORT']               = 'Suporte QuickBox';
$L['QSUPPORTU']              = 'Usuário do Suporte QuickBox';
$L['SERVER_TROUBLESHOOTING'] = 'Solução de problemas do Servidor';
$L['SYSTEM_INFO']            = 'Info do sistema';
$L['SYSTEM_LOG_FILES']       = 'Log do sistema';
$L['TROUBLESHOOTING']        = 'Solução de problemas';
$L['WEB_SERVER']             = 'Servidor web';

/* **********************************
 * #4.4.5 - SYSTEM LOGS
 ************************************/
$L['LOGS']                         = 'Registros';
$L['NO_LOGS']                      = 'Nenhum registro encontrado';
$L['NO_LOGS_MESSAGE']              = 'No momento, não há registros de log disponíveis para visualização. As entradas de log são geradas quando os aplicativos enviam suas informações de log para o syslog do sistema. Caso esteja em busca de um determinado log, recomendamos consultar a documentação fornecida pela respectiva aplicação para maiores orientações. QuickBox se esforça diligentemente para centralizar vários aplicativos e seus dados registrados; entretanto, depende das aplicações individuais transmitirem suas informações de registro para o syslog.';
$L['ACCESS_LOGS']                  = 'Registros de acesso';
$L['APP_LOGS']                     = 'Logs de software';
$L['USER_LOGS']                    = 'Registros do usuário';
$L['DATE_TIME']                    = 'Data/Hora';
$L['EVENT']                        = 'Evento';
$L['LOG_MESSAGE']                  = 'Mensagem de registro';
$L['LOGS_SUMMARY']                 = 'Resumo dos registros';
$L['COMMAND']                      = 'Comando';
$L['SOFTWARE']                     = 'Software';
$L['USER_ACTION_LOGS']             = 'Registros de ações do usuário';
$L['VIEW_USER_ACTION_LOGS']        = 'Ver registro de ações do usuário';
$L['ABOUT_USER_ACTION_LOGS']       = 'Os logs neste contexto pertencem a tarefas e eventos relacionados ao usuário iniciados através da interface QuickBox.';
$L['SOFTWARE_ACTION_LOGS']         = 'Registros de ações de software';
$L['VIEW_SOFTWARE_ACTION_LOGS']    = 'Ver registro de ações do software';
$L['ABOUT_SOFTWARE_ACTION_LOGS']   = 'Esses logs são projetados para fornecer um registro de ações relacionadas ao software, incluindo instalações, remoções, atualizações e outros eventos significativos.';
$L['SYSTEM_ACTION_LOGS']           = 'Logs de ações do sistema';
$L['VIEW_SYSTEM_ACTION_LOGS']      = 'Ver registro de ações do sistema';
$L['ABOUT_SYSTEM_ACTION_LOGS']     = 'Esses logs são adaptados para capturar atividades e ações no nível do sistema iniciadas através da ferramenta de linha de comando <code>qb</code>.';
$L['UI_ACTION_LOGS']               = 'Logs de ações da UI';
$L['VIEW_UI_ACTION_LOGS']          = 'Ver registro de ações da UI';
$L['ABOUT_UI_ACTION_LOGS']         = 'Esses logs são derivados do syslog do sistema e servem como um registro consolidado de todos os comandos e ações iniciadas através da interface de usuário do QuickBox Dashboard.';
$L['USER_APPLICATION_LOGS']        = 'Logs de aplicativos do usuário';
$L['CLEAR_LOG']                    = 'Limpar registro';
$L['CLEAR_LOG_CONFIRM']            = 'Tem certeza que deseja excluir estes logs, isso não pode ser desfeito?';
$L['DELETED_ALL_APP_LOGS']         = 'Todos os logs de software excluídos';
$L['DELETED_ALL_APPLICATION_LOGS'] = 'Excluir todos os logs do aplicativo';
$L['DELETED_ALL_SUMMARY_LOGS']     = 'Todos os registros de resumo foram excluídos';
$L['DELETED_ALL_SYSTEM_LOGS']      = 'Todos os logs do sistema foram excluídos';
$L['DELETED_ALL_UI_LOGS']          = 'Todos os logs de UI foram excluídos';
$L['DELETED_ALL_USER_LOGS']        = 'Todos os registros de usuários foram excluídos';
$L['DELETED_APPLICATION_LOGS']     = 'Logs de aplicativos excluídos';
$L['DELETED_SUMMARY_LOGS']         = 'Registros de resumo excluídos';
$L['DELETED_USER']                 = 'Usuário excluído';
$L['DELETE_USER_LOGS']             = 'Excluir registros do usuário';
$L['QUICKBOX_VERSION_CHECK']       = 'Verificar atualizações do QuickBox';
$L['QUOTA_CHECK']                  = 'Verificação do conjunto de cotas';
$L['SOFTWARE_VERSION_CHECK']       = 'Verificar atualizações de software instaladas';
$L['SCHEDULED_TASK']               = 'Tarefa Agendada';
$L['SYSTEM_LOG_SUMMARY']           = 'Resumo do Log do Sistema';
$L['SYSTEM_LOG_SUMMARY_TOOLTIP']   = 'Este resumo e todos os registros adicionais são gerados sob três condições:<br><ol><li><strong>Cron:</strong> os logs são atualizados automaticamente com a execução de uma tarefa cron a cada 15 minutos. Isso inicia o binário <code>qb_log_miner</code> que agrega entradas de log do syslog do sistema.</li><li><strong>Gerar manualmente:</strong> você pode gerá-lo na seção \'Sistema > Solução de problemas > Log do sistema\' clicando no botão \'(Gerar)\'.</li><li><strong>Linha de comando:</strong> Também pode ser gerado executando o comando <code>qb generate log</code>.</li></ol>Você pode acessar e baixar esse arquivo de registro resumido de duas maneiras:<br><ol><li><strong>Interface da Web:</strong> vá para \'Sistema > Solução de problemas > Log do sistema (download)\' na interface do usuário.</li><li><strong>Diretório do servidor:</strong> Encontre-o no servidor em: \'/srv/quickbox/logs/system_log\'.</li></ol>';

/* **********************************
 * #4.4.6 - HELP MANUAL
 ************************************/
$L['QB_HELP'] = 'Manual de Ajuda';

/* **********************************
 * #4.4.6.1 - description
 ************************************/
$L['DESCRIPTION_CONTENT'] = '<p>Bem-vindo à exibição gráfica abrangente da página de manual <code>qb</code>, projetada para oferecer a você uma abordagem traduzida, simplificada e eficiente para acessar várias informações sobre o QuickBox. Essa interface amigável visa fornecer informações detalhadas sobre o funcionamento do QuickBox, uma ferramenta poderosa e versátil para gerenciar seu servidor sem esforço.</p>
<p>Dentro desta exibição gráfica, você encontrará uma lista detalhada de aplicativos disponíveis prontos para instalação perfeita, permitindo que você personalize a configuração do servidor de acordo com suas necessidades específicas. Além disso, este recurso apresenta uma variedade de outros comandos essenciais para utilização ideal no ambiente <code>qb</code> CLI, permitindo que você navegue pelas tarefas do servidor com eficiência e sem esforço.</p>
<p>Seja você novo no QuickBox ou um usuário experiente, esta exibição gráfica da página de manual <code>qb</code> serve como sua referência definitiva para aproveitar todo o potencial do QuickBox e liberar o verdadeiro poder do gerenciamento do seu servidor. Explore os diversos recursos, simplifique suas operações de servidor e maximize sua produtividade com a ajuda deste guia intuitivo e informativo. Vamos nos aprofundar e tornar sua experiência no QuickBox ainda mais gratificante!</p>';
$L['API_INFO_DIRECT'] = '<p style="font-weight:600;">Para mais informações e referências sobre a API QuickBox incorporada, <a href="/api-control.php" rel="noopenner nofollow" class="link" style="color:var(--qb-color-37);">veja esta página</a>.</p>';

/* **********************************
 * #4.4.6.2 - options
 ************************************/
$L['OPTIONS_HEADER']          = 'Opções';
$L['OPTIONS_CONTENT_HELP']    = 'Exibe este manual de ajuda em formato de página de manual CLI';
$L['OPTIONS_CONTENT_VERBOSE'] = 'Ativa o modo detalhado para depuração';

/* **********************************
 * #4.4.6.3 - software
 ************************************/
$L['SOFTWARE_HEADER']                       = 'Software';
$L['SOFTWARE_INFO_CONTENT']                 = '<p>A seguir está uma lista de todos os aplicativos disponíveis para instalação fornecidos por meio da compilação do QuickBox.<br/>Nomes de software são apresentados como visto por <code>qb [install|reinstall|update|remove|help] [software_name]</code></p>';
$L['ADMIN_INSTALLED_SOFTWARE_HEADER']       = 'Software instalado pelo administrador';
$L['ADMIN_INSTALLED_SOFTWARE_INFO_CONTENT'] = '<p>Os seguintes aplicativos devem ser instalados pelo administrador do sistema.<br/>Consulte a coluna de disponibilidade abaixo para obter detalhes adicionais.</p>';
$L['MULTI_USER_SOFTWARE_HEADER']            = 'Software multiusuário';
$L['MULTI_USER_SOFTWARE_INFO_CONTENT']      = '<p>Os seguintes aplicativos podem ser instalados por vários usuários sem a necessidade de assistência administrativa.<br/>A disponibilidade de todos os aplicativos é determinada pelo administrador do sistema e concedida a usuários adicionais dentro de <a href="/usergroups.php" rel="noopener nofollow" class="link">grupos criados</a>.</p>';
$L['SINGLE_USER_SOFTWARE_HEADER']           = 'Software de usuário único';
$L['SINGLE_USER_SOFTWARE_INFO_CONTENT']     = '<p>Os seguintes aplicativos podem ser instalados por apenas um usuário atribuído por vez, sem a necessidade de assistência administrativa.<br/>Toda a disponibilidade do aplicativo é determinada pelo Administrador do sistema e concedida a usuários adicionais dentro de <a href="/usergroups.php" rel="noopener nofollow" class="link">grupos criados</a>.</p>';
$L['SOFTWARE_MANAGEMENT']                   = 'Gerenciamento de software';
$L['SOFTWARE_MANAGEMENT_CONTENT']           = 'Parâmetros para instalação, reinstalação, atualização ou remoção de software designado com opções adicionais (se presente/desejado) para um usuário atribuído';
$L['SOFTWARE_MANAGEMENT_WARNING_CONTENT']   = '<p>Lembre-se de que vários aplicativos têm várias opções/requisitos. A maioria exige o uso do sinalizador de nome de usuário (<code>-u</code>), enquanto aplicativos como o rtorrent não. Para verificar todas as opções disponíveis para um software específico, utilize <code class="language-bash">qb help [software_name]</code>. A nomenclatura de aplicativos no QuickBox para o esquema de nomenclatura de software pode ser visualizada no <a href="#software" class="link">gráfico de lista de software</a> acima.</p>';
$L['SEE_ALSO_HEADER']                       = 'Veja também';
$L['SEE_ALSO_CONTENT']                      = 'Mostrar o uso de comandos úteis para o software designado';

/* **********************************
 * #4.4.6.4 - software options table
 ************************************/
$L['SOFTWARE_NAME']     = 'Nome do software';
$L['SOFTWARE_TITLE']    = 'Título do software';
$L['USABILITY']         = 'Usabilidade';
$L['CAN_ROLLBACK']      = 'Opção de reversão';
$L['INFO']              = 'Informações';
$L['ADMIN_BADGE']       = '<span class="badge badge-pills badge-table-menu" style="padding:2px 6px;line-height:0.7rem;background-color:var(--qb-color-6-rgba);color:#fff;font-size:0.5rem;">somente administrador</span>';
$L['GLOBAL_BADGE']      = '<span class="badge badge-pills badge-table-menu" style="padding:2px 6px;line-height:0.7rem;background-color:var(--qb-color-5-rgba);color:#fff;font-size:0.5rem;">global</span>';
$L['MULTI_USER_BADGE']  = '<span class="badge badge-pills badge-table-menu" style="padding:2px 6px;line-height:0.7rem;background-color:var(--qb-color-4-rgba);color:#fff;font-size:0.5rem;">multiusuário</span>';
$L['SINGLE_USER_BADGE'] = '<span class="badge badge-pills badge-table-menu" style="padding:2px 6px;line-height:0.7rem;background-color:var(--qb-color-3-rgba);color:#fff;font-size:0.5rem;">usuário único</span>';
$L['GLOBAL_INFO']       = 'requer instalação de administrador e instalação para todos os usuários do sistema.';
$L['MULTI_USER_INFO']   = 'requer instalação de administrador e pode ser instalado por qualquer usuário atribuído. vários usuários são suportados.';
$L['SINGLE_USER_INFO']  = 'usuário único, apenas administrador. requer instalação de administrador e é instalado e operado pelo usuário administrador.';

/* **********************************
 * #4.4.6.5 - examples header
 ************************************/
$L['EXAMPLES_HEADER'] = 'Exemplos';

/* **********************************
 * #4.4.6.6 - user management
 ************************************/
$L['USER_MANAGEMENT_INFO_CONTENT']   = '<p>As funções de gerenciamento <code>qb user</code> no QuickBox oferecem um conjunto versátil e poderoso de ferramentas para gerenciar com eficiência os usuários em seu servidor. Com foco na facilidade de uso e funcionalidade robusta, essas funções permitem simplificar o gerenciamento de usuários, aumentar a segurança e garantir uma operação de servidor tranquila.</p>';
$L['CREATE_USER_CONTENT']            = 'Cria uma nova conta de usuário do QuickBox';
$L['DELETE_USER_CONTENT']            = 'Exclui a conta de usuário do QuickBox';
$L['CHANGE_USER_PASSWORD']           = 'Alterar senha do usuário';
$L['CHANGE_USER_PASSWORD_CONTENT']   = 'Altera a senha da conta de usuário atribuída';
$L['BAN_USER_CONTENT']               = 'Bani a conta de usuário atribuída, impedindo o login e interrompendo os serviços instalados e suas funções.';
$L['BAN_USER_PRIMARY_CONTENT']       = '<p><em>Isso não <strong>exclui</strong> os dados do usuário</em>, apenas desativa os serviços em execução e bloqueia o acesso.</p>';
$L['UNBAN_USER_CONTENT']             = 'Desbane conta de usuário atribuída, permitindo login e iniciando serviços instalados e suas funções';
$L['PROMOTE_USER_TO_ADMIN']          = 'Promover usuário a administrador';
$L['PROMOTE_USER_TO_ADMIN_CONTENT']  = 'Promove o usuário atribuído ao nível de administrador';
$L['DEMOTE_USER_FROM_ADMIN']         = 'Rebaixar usuário de administrador';
$L['DEMOTE_USER_FROM_ADMIN_CONTENT'] = 'Rebaixa o usuário atribuído ao nível de usuário padrão';
$L['SET_USER_QUOTA']                 = 'Definir cota de usuário';
$L['SHOW_USER_QUOTA']                = 'Mostrar cota de usuário';
$L['SET_USER_SHELL']                 = 'Definir shell do usuário';
$L['SET_USER_SHELL_CONTENT']         = 'Define o ambiente shell para o usuário atribuído';
$L['SET_USER_SHELL_INFO_CONTENT']    = '<p><strong><code>sudo</code></strong><br>privilégios de administrador completos para o ambiente do servidor (grande poder... etc)<br><strong><code>full</code></strong><br>acesso total ao ambiente do servidor, com exceção das áreas privilegiadas mais altas; ou seja: sem sudo e não pode acessar diretórios raiz.<br><strong><code>limited</code></strong><br>o ambiente de shell limitado. muito pouco acesso aos comandos e presos ao diretório inicial do usuário.</p><hr/><p>Os ambientes de shell são definidos pelo administrador do sistema e podem ser visualizados na página de edição do usuário localizada em <a href="/useradmin.php" rel="noopener nofollow" class="link">Página de administração do usuário</a>.<br/>Se você gostaria de adicionar um novo ambiente de shell, pode fazê-lo editando o <code>/etc/shells</code> e adicionando o caminho para o ambiente shell que você gostaria de adicionar.</p>';
$L['SET_USER_SHELL_DANGER_CONTENT']  = '<p><strong>Cuidado:</strong> Esteja ciente de que alterar o ambiente shell para algo diferente de <code>/bash</code> pode levar a um comportamento não intencional ao usar <code>qb</code> (QuickBox), pois foi especificamente projetado e otimizado para o ambiente <code>/bash</code>. Resumindo, <code>qb</code> depende de recursos e funcionalidades específicos fornecidos pelo shell Bash.<br><br>Para evitar possíveis problemas, é aconselhável manter o <code>/bash</code> ambiente ao usar <code>qb</code>. Se você ainda deseja usar um shell diferente, consulte a documentação desse shell para revisar quaisquer alterações adicionais em caminhos, configurações ou outras configurações que possam precisar ser atualizadas para garantir a compatibilidade com <code>qb</code>.</p>';
$L['USER_RCLONE_COMPANION_COMMANDS'] = 'Comandos do Rclone';

/* **********************************
 * #4.4.6.7 - clean functions
 ************************************/
$L['CLEAN_FUNCTIONS']                  = 'Limpar funções';
$L['CLEAN_FUNCTIONS_INFO_CONTENT']     = '<p>As funções <code>qb clean</code> no QuickBox oferecem uma maneira conveniente e eficiente de manter a limpeza do seu servidor e otimizar seu desempenho. Projetado com simplicidade e eficácia em mente, essas funções permitem que você libere memória valiosa, remova a desordem desnecessária e garanta uma operação de servidor suave e otimizada.</p>';
$L['CLEAN_MEMORY']                     = 'Limpar memória';
$L['CLEAN_MEMORY_CONTENT']             = 'Limpa os caches de memória do QuickBox';
$L['CLEAN_DASHBOARD_LOGS']             = 'Limpar logs do painel';
$L['CLEAN_DASHBOARD_LOGS_CONTENT']     = 'Limpa os logs do painel do QuickBox para o usuário designado';
$L['CLEAN_QB_DASHBOARD_LOGS']          = 'Limpa arquivos de log do Painel QB';
$L['CLEAN_QB_DASHBOARD_LOGS_CONTENT']  = 'Este comando foi projetado para limpar o log atual de ações da UI postado no syslog e redefinir o log de erros do UI Nginx para seu estado inicial';
$L['CLEAN_SYSTEM_LOGS']                = 'Remover arquivos de log antigos do sistema';
$L['CLEAN_SYSTEM_LOGS_CONTENT']        = 'Este comando foi projetado para excluir logs e arquivos compactados no diretório <code>/var/log</code> que excederam o período de retenção atribuído. O período de retenção é definido como 7 dias por padrão (se nenhum valor opcional for inserido).';
$L['CLEAN_RCLONE_UPLOAD_LOGS']         = 'Limpar logs de upload do Rclone';
$L['CLEAN_RCLONE_UPLOAD_LOGS_CONTENT'] = 'Limpa os logs de upload do QuickBox rclone para o usuário designado';
$L['CLEAN_LOCKS']                      = 'Limpar fechaduras';
$L['CLEAN_LOCKS_CONTENT']              = 'Limpa o software QuickBox e os bloqueios do apt-dpkg que podem impedir o QuickBox de instalar um novo software';

/* **********************************
 * #4.4.6.8 - fix functions
 ************************************/
$L['FIX_FUNCTIONS']              = 'Corrigir funções';
$L['FIX_FUNCTIONS_INFO_CONTENT'] = '<p>As funções <code>qb fix</code> no QuickBox fornecem um kit de ferramentas poderoso e fácil de usar para resolver problemas comuns e executar reparos de sistema sem esforço. Com foco na simplicidade e eficácia, essas funções permitem que você solucione e resolva vários problemas que possam surgir em seu servidor, garantindo operações suaves e ininterruptas.</p>';
$L['FIX_HOME']                   = 'Corrigir Home';
$L['FIX_HOME_CONTENT']           = 'Corrigir as permissões do diretório pessoal dos usuários designados';
$L['FIX_PHP']                    = 'Corrigir PHP';
$L['FIX_PHP_CONTENT']            = 'Corrija a configuração do PHP e instale as extensões ausentes. Isso também atualizará os pacotes PHP para a versão mais recente';
$L['FIX_PYTHON']                 = 'Corrigir Python';
$L['FIX_PYTHON_CONTENT']         = 'Corrija a configuração do Python e instale as extensões ausentes. Além disso, prepara python3.9 se não estiver disponível no sistema para uso padrão em compilações de aplicativos que requerem python';
$L['FIX_VERSION']                = 'Versão corrigida';
$L['FIX_VERSION_CONTENT']        = 'Corrija a instalação do QuickBox reinstalando a última versão disponível';

/* **********************************
 * #4.4.6.9 - generate functions
 ************************************/
$L['GENERATE_FUNCTIONS']                   = 'Gerar funções';
$L['GENERATE_FUNCTIONS_INFO_CONTENT']      = '<p>As funções <code>qb generate</code> no QuickBox oferecem uma maneira conveniente e eficiente de criar elementos essenciais que aprimoram o gerenciamento e monitoramento do servidor. Atualmente, o comando qb generate oferece suporte à função qb generate logs, permitindo que os usuários gerem sem esforço uma visualização das estatísticas dos servidores, ativação da API e informações de montagem.<br/>À medida que as funções qb generate evoluem, elas provavelmente oferecerão uma matriz em expansão de recursos para aprimorar ainda mais o gerenciamento do servidor.</p>';
$L['GENERATE_SYSTEM_LOGS']                 = 'Gerar logs do sistema';
$L['GENERATE_SYSTEM_LOGS_CONTENT']         = 'Gera logs do sistema para a instalação atual do QuickBox';
$L['GENERATE_SYSTEM_LOGS_WARNING_CONTENT'] = '<p>A partir da versão <em>3.0.0.<strong>36+</strong></em>, <code>qb generate log</code> evoluiu para um utilitário mais aprofundado para agregação e organização de logs. Seu objetivo é simplificar a recuperação de logs complementando os logs nativos de um aplicativo, resumindo e centralizando dados críticos de log, tornando a solução de problemas muito mais eficiente.</p><p>Este comando e sua funcionalidade são um trabalho contínuo em andamento.</p>';
$L['GENERATE_SYSTEM_LOGS_SUCCESS_CONTENT'] = '<p>Você pode acessar e baixar esse arquivo de registro resumido de três maneiras:<br><ol><li><strong>Gerar/Baixar:</strong> Vá para \'Sistema > <a href="/troubleshooting.php" class="link">Solução de problemas</a> > Log do sistema\' na interface do usuário . Aqui você pode gerar e/ou baixar o resumo do log do sistema produzido pelo comando generate log.</li><li><strong>Ver registros:</strong> vá para \'Sistema > <a href="/logs.php" class="link">Registros do sistema</a>\'. Aqui é onde você pode encontrar registros e informações adicionais coletados pelo comando gerar log.</li><li><strong>Diretório do servidor:</strong> Encontre-o no servidor em: \'/srv/quickbox/logs/system_log\'.</li></ol></p>';

/* **********************************
 * #4.4.6.10 - manage functions
 ************************************/
$L['MANAGE_FUNCTIONS']                                  = 'Gerenciar funções';
$L['MANAGE_FUNCTIONS_INFO_CONTENT']                     = '<p>As funções <code>qb manage</code> no QuickBox fornecem um conjunto poderoso e abrangente de ferramentas para gerenciar com eficiência vários aspectos do seu servidor. Projetadas com a conveniência do usuário em mente, essas funções permitem que você controle facilmente os elementos críticos do seu ambiente com tecnologia QuickBox.<br/>Seja trocando configurações de idioma, verificando o status de sua ativação de API principal, gerenciando a distribuição de dados ou garantindo a integridade dos dados por meio de backups e reversões, as funções de gerenciamento qb oferecem uma solução abrangente para administradores de servidores e entusiastas.</p>';
$L['MANAGE_API_KEY']                                    = 'Gerenciar chave de API';
$L['MANAGE_API_KEY_CONTENT']                            = 'Gerenciar as chaves de API do QuickBox e listar informações e opções adicionais';
$L['ADD_API_KEY']                                       = 'Adicionar chave de API';
$L['ADD_API_KEY_CONTENT']                               = 'Adicionar/Ativar chave de API';
$L['REMOVE_API_KEY']                                    = 'Remover chave API';
$L['REMOVE_API_KEY_CONTENT']                            = 'Remover/desativar chave API';
$L['MANAGE_DASHBOARD_ACCESS_URL']                       = 'Gerenciar URL de acesso ao Painel';
$L['MANAGE_DASHBOARD_ACCESS_URL_CONTENT']               = 'Este comando define a raiz da web do servidor para acesso ao painel para o domínio ou endereço IP expresso';
$L['SET_SERVER_LANG']                                   = 'Definir idioma do servidor';
$L['SET_SERVER_LANG_CONTENT']                           = 'Este comando definirá o idioma solicitado como o idioma padrão do servidor';
$L['MANAGE_PUBLIC_TRACKERS']                            = 'Gerenciar rastreadores públicos';
$L['MANAGE_PUBLIC_TRACKERS_CONTENT']                    = 'Este comando ativará ou desativará rastreadores públicos para todos os usuários';
$L['EX_PUB_TRACKERS_ALLOW']                             = 'exemplo para permitir rastreadores públicos:';
$L['EX_PUB_TRACKERS_DISALLOW']                          = 'exemplo para não permitir rastreadores públicos:';
$L['BACKUP_APPLICATIONS']                               = 'Aplicativos de backup';
$L['PARTIAL_CONFIG_ONLY_BACKUP']                        = 'Backup parcial <span class="badge badge-pills outline-badge-secondary badge-table-menu" style="padding:2px 6px;line-height:0.7rem;font-size:0.5rem;">apenas config</span>';
$L['PARTIAL_CONFIG_ONLY_BACKUP_CONTENT']                = 'Este comando fará backup da configuração do aplicativo designado para o usuário atribuído';
$L['FULL_CONFIG_AND_APP_BACKUP']                        = 'Backup completo <span class="badge badge-pills outline-badge-primary badge-table-menu" style="padding:2px 6px;line-height:0.7rem;font-size:0.5rem;">config &amp; app</span>';
$L['FULL_CONFIG_AND_APP_BACKUP_CONTENT']                = 'Este comando fará backup do aplicativo designado para o usuário atribuído. Inclui o aplicativo e os dados de configuração, úteis para reverter para versões previamente instaladas e com backup';
$L['PARTIAL_RTORRENT_ALL_USERS_BACKUP']                 = 'Backup parcial (somente rtorrent)';
$L['PARTIAL_RTORRENT_ALL_USERS_BACKUP_PRIMARY_CONTENT'] = '<p>No caso de rtorrent como a configuração de software para backup, o sinalizador de nome de usuário (<code>-u</code>) não é necessário.</p>';
$L['PARTIAL_RTORRENT_ALL_USERS_BACKUP_CONTENT']         = 'Este comando fará backup de todos os arquivos .rtorrent.rc existentes dos usuários do rtorrent.<br>Os backups são armazenados em:<br><code>/home/[USERNAME]/.QuickBox/software/rtorrent /backup/.rtorrent.rc_YEAR-MONTH-DAY_HOUR:MINUTE</code>';
$L['ROLLBACK_APPLICATIONS']                             = 'Reverter backup do aplicativo';
$L['ROLLBACK_APPLICATIONS_CONTENT']                     = 'Este comando reverterá o aplicativo designado para o usuário atribuído a uma versão anterior armazenada/selecionada no diretório de backup.<br>Os backups são armazenados em:<br><code>/home/[USERNAME]/.QuickBox/software/[SOFTWARE_NAME]/backup/</code>';
$L['RESTORE_APP_BACKUP_CONFIG']                         = 'Restaurar backup <span class="badge badge-pills outline-badge-secondary badge-table-menu" style="padding:2px 6px;line-height:0.7rem;font-size:0.5rem;">apenas config</span>';
$L['RESTORE_APP_BACKUP_CONFIG_CONTENT']                 = 'Este comando restaurará a configuração do aplicativo designado anteriormente com backup para o usuário atribuído';
$L['RESTORE_APP_DEFAULT_CONFIG']                        = 'Restore Default <span class="badge badge-pills outline-badge-secondary badge-table-menu" style="padding:2px 6px;line-height:0.7rem;font-size:0.5rem;">apenas config</span>';
$L['RESTORE_APP_DEFAULT_CONFIG_CONTENT']                = 'Este comando irá restaurar a configuração do aplicativo padrão designado (a partir da instalação) para o usuário atribuído';

/* **********************************
 * #4.4.6.11 - news functions
 ************************************/
$L['NEWS_FUNCTIONS']              = 'Funções de notícias';
$L['NEWS_FUNCTIONS_INFO_CONTENT'] = '<p>A função <code>qb news</code> no QuickBox fornece atualizações de notícias oportunas e relevantes diretamente para o seu servidor, garantindo que você fique informado sobre os últimos desenvolvimentos e mudanças no ecossistema QuickBox . Com foco em mantê-lo atualizado, esse recurso fornece informações essenciais sobre lançamentos atuais e futuros, alterações de versão e outros itens de interesse.</p>';
$L['NEWS']                        = 'Notícias';
$L['NEWS_CONTENT']                = 'Ver as últimas notícias do QuickBox';

/* **********************************
 * #4.4.6.12 - support functions
 ************************************/
$L['SUPPORT_FUNCTIONS']              = 'Funções de suporte';
$L['SUPPORT_FUNCTIONS_INFO_CONTENT'] = '<p>A função <code>qb support</code> no QuickBox oferece um método seguro e confiável para conceder à equipe de suporte acesso ao seu servidor quando a assistência for necessária. Com forte ênfase na segurança e proteção do usuário, esse recurso utiliza a conta <code>quickSupport</code>, garantindo que apenas pessoal de suporte autorizado possa acessar seu servidor.</p>';
$L['ENABLE_SUPPORT']                 = 'Habilitar suporte';
$L['ENABLE_SUPPORT_CONTENT']         = 'Ativar suporte. Normalmente atribuído ao membro da equipe responsável pelo suporte';
$L['DISABLE_SUPPORT']                = 'Desativar suporte';
$L['DISABLE_SUPPORT_CONTENT']        = 'Desativar suporte. Caso contrário, a conta de suporte será deletada automaticamente após 36 horas';

/* **********************************
 * #4.4.6.13 - update functions
 ************************************/
$L['UPDATE_FUNCTIONS']              = 'Atualizar funções';
$L['UPDATE_FUNCTIONS_INFO_CONTENT'] = '<p>A função <code>qb update</code> no QuickBox oferece uma maneira conveniente e flexível de gerenciar atualizações para sua instalação do QuickBox. Com esse recurso, você tem controle total sobre o processo de atualização, permitindo verificar manualmente as atualizações e escolher quando aplicá-las.</p>';
$L['UPDATE_CHECK']                  = 'Verificar atualização';
$L['UPDATE_CHECK_CONTENT']          = 'Verificar atualizações do QuickBox';
$L['UPDATE_QUICKBOX']               = 'Atualizar QuickBox';
$L['UPDATE_QUICKBOX_CONTENT']       = 'Atualize a instalação do QuickBox para a versão mais recente, se disponível';

/* **********************************
 * #4.4.6.14 - bugs & reporting
 ************************************/
$L['BUGS']              = 'Bugs e relatórios';
$L['BUGS_INFO_CONTENT'] = '<p>A exibição gráfica da documentação do QuickBox receberá atualizações regulares para garantir que as informações fornecidas permaneçam facilmente acessíveis e fáceis de usar. Nosso compromisso em aprimorar sua experiência com o QuickBox nos leva a refinar e melhorar continuamente a documentação, mantendo-a atualizada com os recursos e funcionalidades mais recentes.<br/><br/>
A cada atualização, nos esforçaremos para simplificar conceitos complexos, esclarecer instruções e incorporar feedback do usuário para tornar a página de manual qb ainda mais intuitiva e eficiente. Nosso objetivo é capacitá-lo com uma compreensão perfeita do QuickBox e seus vastos recursos, permitindo que você domine o ambiente qb CLI e gerencie facilmente suas tarefas de servidor.<br/><br/>
Valorizamos sua contribuição e encorajamos você a compartilhar quaisquer sugestões ou ideias que possa ter para aprimorar ainda mais a página de manual qb. Seu feedback é fundamental para moldar este recurso e garantir que ele continue sendo uma referência valiosa para todos os usuários do QuickBox. Na verdade, esta página existe porque foi solicitada! 🤪<br/><br/>
Relate quaisquer bugs reproduzíveis ou sugestões para <strong><a href="https://nullrefer.ir/?https://lab.quickbox.io/QuickBox/pro-v3/-/issues" rel="noopener nofollow" target="_blank">Rastreador de problemas e recursos do QuickBox.IO Labs</a></strong></p>';

/* **********************************
 * #4.4.6.15 - disclaimer
 ************************************/
$L['DISCLAIMER']      = 'Isenção de responsabilidade';
$L['DISCLAIMER_TEXT'] = '<p>Este script destina-se ao uso geral e nenhuma garantia está implícita quanto à adequação a qualquer tarefa. QuickBox.IO não terá nenhuma responsabilidade por sua configuração ou qualquer dano causado ao usar/instalar/modificar este script ou qualquer um de seus plugins. Lembre-se de que nem o QuickBox.IO nem sua equipe são responsáveis por manter seu Software e/ou Servidor atualizados; esta é uma responsabilidade exclusiva do usuário do software QuickBox Pro.</p>';

/* **********************************
 * #4.4.6.16 - license
 ************************************/
$L['LICENSE']      = 'Licença';
$L['LICENSE_SET']  = 'Licenciado sob BSD 3-Clause';
$L['LICENSE_TEXT'] = '<p>Copyright (c) 2018-2024, QuickBox.IO. Todos os direitos reservados.</p>
<p>A redistribuição e o uso nos formatos fonte e binário, com ou sem modificação, são permitidos desde que as seguintes condições sejam atendidas:</p>
<ul style="font-size:0.75rem"><li>As redistribuições do código-fonte devem manter o aviso de direitos autorais acima, esta lista de condições e o aviso de isenção de responsabilidade a seguir.</li>
<li>As redistribuições em formato binário devem reproduzir o aviso de direitos autorais acima, esta lista de condições e a seguinte isenção de responsabilidade na documentação e/ou outros materiais fornecidos com a distribuição.</li>
<li>Nem o nome do detentor dos direitos autorais nem os nomes de seus colaboradores podem ser usados para endossar ou promover produtos derivados deste software sem permissão prévia específica por escrito.</li></ul>
<p>ESTE SOFTWARE É FORNECIDO PELOS DETENTORES DOS DIREITOS AUTORAIS E COLABORADORES "COMO ESTÁ" E QUAISQUER GARANTIAS EXPRESSAS OU IMPLÍCITAS, INCLUINDO, SEM LIMITAÇÃO, AS GARANTIAS IMPLÍCITAS DE COMERCIALIZAÇÃO E ADEQUAÇÃO PARA UM FIM ESPECÍFICO SÃO REJEITADAS. EM NENHUM CASO O TITULAR DOS DIREITOS AUTORAIS OU COLABORADORES SERÃO RESPONSÁVEIS POR QUAISQUER DANOS DIRETOS, INDIRETOS, INCIDENTAIS, ESPECIAIS, EXEMPLARES OU CONSEQUENTES (INCLUINDO, SEM LIMITAÇÃO, AQUISIÇÃO DE BENS OU SERVIÇOS SUBSTITUTOS; PERDA DE USO, DADOS OU LUCROS; OU INTERRUPÇÃO DE NEGÓCIOS) DE QUALQUER CAUSA E EM QUALQUER TEORIA DE RESPONSABILIDADE, SEJA EM CONTRATO, RESPONSABILIDADE ESTRITA OU ILÍCITO (INCLUINDO NEGLIGÊNCIA OU DE OUTRA FORMA) DECORRENTE DE QUALQUER FORMA DO USO DESTE SOFTWARE, MESMO SE AVISADO DA POSSIBILIDADE DE TAIS DANOS.</p>';

/* **********************************
 * #4.4.6.17 - misc
 ************************************/
$L['EXAMPLE']  = 'exemplo:';
$L['EXAMPLES'] = 'exemplos:';

/* **********************************
 * #4.4.7 - CHANGELOG / UPDATE
 ************************************/
$L['CURRENT_VERSION']   = 'Versão Atual';
$L['DASH_UPDATE_TITLE'] = 'Painel de versão QuickBox';
$L['QB_UPDATE']         = 'Painel de versão QuickBox';
$L['QBUPDATE']          = 'Changelog / Atualização';
$L['UPCOMING_CHANGES']  = 'Próximas alterações';
$L['UPDATE_AVAILABLE']  = 'Atualização disponível';
$L['UPDATE_TO_DATE']    = 'Atualização';
$L['VERSION_STATUS']    = 'Status da versão';
$L['UPDATE_TXT']        = 'Atualizar';
$L['AVAILABLE_TXT']     = 'Disponível!';
$L['UPDATE_VERSION']    = 'Atualizar versão';
$L['UPDATE_ACTIVATE']   = 'Ative sua assinatura Pro para receber atualizações';
$L['UPDATE_CURRENT']    = 'Você está atualizado!';
$L['CHANGELOGS']        = 'Registros de alterações';

/* **********************************
 * #4.4.8 - SYSTEM DASHBOARD
 ************************************/
$L['DISK_UTIL_TIME']        = 'Tempo de utilização do disco';
$L['DISK_IO_BW']            = 'Largura de banda de E/S de disco';
$L['DISK_SPACE_USAGE_FOR']  = 'Uso de espaço em disco para:';
$L['DISK_UTILIZATION']      = 'Utilização';
$L['DISK_WRITE']            = 'Escreva';
$L['DISK_READ']             = 'Ler';
$L['SYS_DISK_READ']         = 'Leitura de disco';
$L['SYS_DISK_WRITE']        = 'Gravação de disco';
$L['TOP_CPU_PROC']          = 'Principais processos de aplicação de CPU';
$L['TOP_CPUMEM_PROC']       = 'Principais processos de memória da CPU';
$L['TOP_CPUSYS_PROC']       = 'Principais processos de sistema da CPU';
$L['SERVICE_MEM_USAGE']     = 'Os serviços Systemd usaram memória sem cache';
$L['SYS_SWAP_USAGE']        = 'Uso de troca de sistema';
$L['SYS_MEM_USAGE']         = 'Uso da memória do sistema';
$L['CPU_FREQ']              = 'Frequência atual da CPU';
$L['CPU_LOAD']              = 'Carga CPU';
$L['CPU_USAGE']             = 'Utilização do CPU';
$L['RAM_USAGE']             = 'Utilização do RAM';
$L['BW_UPLOAD']             = 'Upload de largura de banda';
$L['BW_DOWNLOAD']           = 'Download de largura de banda';
$L['SYS_UPLOAD']            = 'Envio';
$L['SYS_DOWNLOAD']          = 'Baixar';
$L['SYS_DASH_POWERED_BY']   = 'Painel do sistema desenvolvido por:';
$L['SYS_DASH_UPTIME']       = 'Tempo de atividade do sistema';
$L['SYS_DASH_SWAP_USED']    = 'Troca usada';
$L['SYS_DASH_RAM_USED']     = 'RAM usada';
$L['SYS_DASH_CPU']          = 'CPU';
$L['SYS_DASH_TMD']          = 'Download total mensal';
$L['SYS_DASH_TMU']          = 'Upload mensal total';
$L['APT_UPDATES']           = 'Actualizações APT';
$L['APT_DEPENDENCY']        = 'Pacote de Dependência';
$L['APT_VERSION_INSTALLED'] = 'Versão Actual';
$L['APT_VERSION_AVAILABLE'] = 'Versão Disponível';

/* **********************************
 * #4.5 - ERROR PAGES
 ************************************/
$L['404HACK'] = 'Ai! Você realmente quer me machucar?';
$L['404PAGE'] = 'Esta não é a página que você está procurando.';
$L['404PRO']  = 'Por favor, compre um <a href="https://nullrefer.ir/?https://quickbox.io/product/quickbox-pro-subscription/" rel="noopener nofollow" target="_blank">Chave de licença do QuickBox</a> para acessar esta página.';
$L['500PAGE'] = 'Isso é embaraçoso, algo parece ter dado errado.';
$L['WHOOPS']  = 'Ops!';
