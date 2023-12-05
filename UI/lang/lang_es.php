<?php

/**
 * QuickBox Pro Spanish Language File
 *
 * This file is used to translate the QuickBox Pro Dashboard into Spanish.
 * Ready for QuickBox Pro v3.0.1 : December 05, 2023
 *
 * @package    dashboard
 * @subpackage lang
 * @category   Spanish
 * @version    3.0.1.6
 * @since      1.0.0
 *
 * @var Configs $configs The configurations object.
 * @var Session $session The user session object.
 */

// Include required variables
$version = $configs->getConfig('Version');
$username = $session->username;

/**
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
 * 1.1 - language & theme selection
 ************************************/
$L['CHINESE'] = 'Chino';
$L['DANISH'] = 'Danés';
$L['ENGLISH'] = 'Inglés';
$L['FRENCH'] = 'Francés';
$L['GERMAN'] = 'Alemán';
$L['PORTUGUESE'] = 'Portugués';
$L['SELECT_LANGUAGE'] = 'Selecciona tu idioma';
$L['SELECT_THEME'] = 'Selección';
$L['SPANISH'] = 'Español';
$L['THEME_DARK'] = 'Tema oscuro';
$L['THEME_LIGHT'] = 'Tema claro';

/* **********************************
 * 1.2 - user menu (top right)
 ************************************/
$L['PROFILE'] = 'Mi perfil';
$L['LOG_OUT'] = 'Desconexión';
$L['REBOOT'] = 'Reiniciar';

/* **********************************
 * 1.3 - sidebar menus
 ************************************/
$L['ABOUT_AND_TIPS'] = 'Acerca de / Consejos rápidos';
$L['APP_DASHBOARD'] = 'Panel de control de software';
$L['DASHBOARD'] = 'El Tablero';
$L['DB_MGNT'] = 'phpMyAdmin';
$L['EXTERNAL_LINKS'] = 'Enlaces personalizados';
$L['GENERAL_SETTINGS'] = 'Configuración General';
$L['HELP_SUPPORT'] = 'Ayuda / Actualización';
$L['KB'] = 'Base de conocimientos';
$L['PLUGINS'] = 'Complementos';
$L['REGISTRATION'] = 'Registro';
$L['SECURITY_SETTINGS'] = 'Configuración de Seguridad';
$L['SESSION_SETTINGS'] = 'Configuración de Sesiones';
$L['SETTINGS'] = 'Configuración';
$L['SYS_DASHBOARD'] = 'Panel de Sistema';
$L['SYSTEM_LOGS'] = 'Registros del sistema';
$L['SYSTEM'] = 'Sistema';
$L['USER_ADMIN'] = 'Gestión de Usuarios';
$L['USER_GROUPS'] = 'Grupos de Usuario';
$L['USER_MANAGEMENT'] = 'User Management';
$L['USER_SETTINGS'] = 'Configuración de Usuario';
$L['WEB_CONSOLE'] = 'Consola Web';

/* **********************************
 * 1.4 - sidebar submenus
 ************************************/
$L['APP_MENU'] = 'Menú de software';
$L['APPLICATIONS'] = 'Mi Software';
$L['DASHBOARD_INFO'] = 'Seleccione entre el panel de administración del sistema o el panel de software visto por todos los usuarios.';
$L['DASHBOARD_VIEW'] = 'Vista del tablero';
$L['DOWNLOADS'] = 'Descargas';
$L['FILEMANAGER'] = 'Administrador de archivos';
$L['PLUGINS_CENTER'] = 'Centro de complementos';
$L['PLUGINS_INFO'] = 'Instala y desinstala fácilmente complementos simplemente haciendo clic en el nombre del complemento.';
$L['RPLUGINS_NOTICE'] = 'Instala y desinstala facilmente plugins de ruTorrent haciendo click en el nombre del plugin';
$L['RPLUGINS'] = 'ruTorrent Plugins';
$L['TORRENT_CLIENTS'] = 'Clientes Torrent';

/* **********************************
 * 1.5 - footer
 ************************************/
$L['ALL_RIGHTS'] = 'Todos los derechos reservados.';

/* ********************************************************************************
 * #2 MISCELLANEOUS
 *
 * 2.1 - buttons
 ************************************/
$L['ACTIVATE_USERS'] = 'Activar Usuarios';
$L['ADD_IP_ADDRESS'] = 'Agregar Dirección IP';
$L['ADD_USERNAME'] = 'Agregar Nombre de Usuario';
$L['AGREE'] = 'Entiendo, hazlo!';
$L['API_ACTIVATE'] = 'Activar';
$L['APP_MANAGEMENT'] = 'Gestión de Aplicaciones';
$L['APPS_INSTALLED'] = 'Apps instaladas';
$L['AUTO_DISABLE'] = 'Desactivar las actualizaciones automáticas';
$L['AUTO_ENABLE'] = 'Habilitar actualizaciones automáticas';
$L['BACK'] = 'Atrás';
$L['BAN_USER'] = 'Prohibir usuario';
$L['CANCEL'] = 'Cancelar';
$L['CLEAN_LOG'] = 'Limpiar registro de actualización';
$L['CLEAN_RCLOG'] = 'Limpie el registro de carga de RClone';
$L['CLICK_ME'] = 'Haz click aquí';
$L['CLOSE_REFRESH'] = 'Cerrar y Actualizar';
$L['CLOSE'] = 'Cerrar';
$L['CPU_TAB'] = 'CPU';
$L['CREATE_ANNOUNCEMENT'] = 'Crear anuncio';
$L['CREATE_GROUP'] = 'Crear Grupo';
$L['CREATE_NEW_GROUP'] = 'Crear un Nuevo Grupo';
$L['CREATE_NEW_USER'] = 'Crear Nuevo Usuario';
$L['CREATE_USER'] = 'Crear Usuario';
$L['DELETE_ALL_ANNOUNCEMENTS'] = 'Eliminar todos los anuncios';
$L['DELETE_ALL_LOGS'] = 'Borrar Todos Los Registros (> 30 días)';
$L['DELETE_INACTIVE_USERS'] = 'Eliminar Usuarios Inactivos';
$L['DELETE_LOGS'] = 'Borrar Registros';
$L['DELETE_SELECTED_ANNOUNCEMENTS'] = 'Eliminar anuncios seleccionados';
$L['DELETE_SELECTED_SESSIONS'] = 'Eliminar Sesiones Seleccionadas';
$L['DELETE_SELECTED'] = 'Eliminar Seleccionados';
$L['DELETE_USER'] = 'Borrar usuario';
$L['DEMOTE'] = 'Descender de administrador';
$L['DISABLED'] = 'Deshabilitada';
$L['DISK_TAB'] = 'Disco';
$L['DOWNLOAD'] = 'Descargar';
$L['EDIT_ANNOUNCEMENT'] = 'Editar anuncio seleccionado';
$L['EDIT_GROUP'] = 'Editar Grupo';
$L['EDIT_USER'] = 'Editar usuario';
$L['ENABLED'] = 'Habilitada';
$L['EXECUTE'] = 'Ejecutar';
$L['GENERATE'] = 'Generar';
$L['GO_BACK'] = 'Regresa';
$L['IN_USE'] = 'En uso';
$L['INSTALL'] = 'Instalar';
$L['INSTALLED'] = 'Desinstalar';
$L['INSTALLING'] = 'Instalando';
$L['KILL_USER_SESSION'] = 'Cerrar todas las sesiones de usuario';
$L['LAUNCH'] = 'Lanzamiento';
$L['LOGIN'] = 'Iniciar sesión';
$L['LOGOFF'] = 'Cerrar sesión';
$L['MEMORY_TAB'] = 'Memoria';
$L['NETWORK_TAB'] = 'La red';
$L['NGINX_BACKUP'] = 'Copia de seguridad de Nginx Config';
$L['NGINX_DEFAULT'] = 'Restaurar configuración predeterminada';
$L['NGINX_DISABLE'] = 'Desactivar la ventana emergente de Autenticación';
$L['NGINX_ENABLE'] = 'Habilitar popup de autenticación';
$L['NGINX_RESTORE'] = 'Restaurar la copia de seguridad de Nginx';
$L['APP_BACKUP_FULL'] = 'Copia de seguridad completa';
$L['APP_BACKUP_PARTIAL'] = 'Copia de seguridad parcial';
$L['APP_DEFAULT_PARTIAL_RESTORE'] = 'Restaurar predeterminado';
$L['APP_BACKUP_PARTIAL_RESTORE'] = 'Restaurar copia de seguridad';
$L['ED_MENU_CONFIG_APP'] = 'config y app';
$L['ED_MENU_CONFIG'] = 'solo config';
$L['VERSION_ROLLBACK_OPTIONS'] = 'Opciones de reversión';
$L['VERSION_ROLLBACK_V'] = 'Versión: ';
$L['VERSION'] = 'Versión';
$L['FECHA'] = 'Fecha';
$L['VERSION_ROLLBACK_CONFIRM'] = '¿Volver a esta versión?';
$L['VERSION_ROLLBACK_DELETE'] = '¿Eliminar esta copia de seguridad?';
$L['PROMOTE'] = 'Promocionar a administrador';
$L['RCLONE_LOCK_REMOVE'] = 'quitar bloqueo';
$L['RCLONE_LOGS'] = 'ver los registros';
$L['RCLONE_UPLOAD'] = 'subir';
$L['REFRESH'] = 'Actualizar';
$L['REGISTER'] = 'Registrarse';
$L['REGISTRADO'] = 'Registrada';
$L['REINSTALL'] = 'Reinstalar';
$L['RELOAD_CONF'] = 'Recargar Configuraciones';
$L['RELOAD'] = 'Recarga';
$L['REMOVE_BANNED_IP'] = 'Eliminar Direcciones IP Bloqueadas';
$L['REMOVE_DISALLOWED'] = 'Eliminar Nombres de Usuario No Permitidos';
$L['REMOVE_MEMBER'] = 'Eliminar Miembro del Grupo';
$L['REMOVE'] = 'Eliminar';
$L['RESET_VERSION'] = 'Reiniciar la versión actual';
$L['RESET'] = 'Reiniciar';
$L['SAVE'] = 'Guardar';
$L['SERVICE_CONTROL'] = 'Control de Servicios';
$L['SIMULATE_BUTTON'] = 'Simular';
$L['SIMULATE_END'] = 'Finalizar Sim';
$L['SIMULATE_USER'] = 'Simular usuario';
$L['NANGINX'] = 'N/A El servicio se ejecuta en nginx';
$L['START'] = 'Comienzo';
$L['STOP'] = 'Detener';
$L['SUBMIT'] = 'Enviar Cambios';
$L['TOP_PROC_TAB'] = 'Procesos principales';
$L['UNBAN_USER'] = 'Desbancar usuario';
$L['UNINSTALLED'] = 'Desinstalada';
$L['UNINSTALLING'] = 'Desinstalando';
$L['UP'] = 'Arriba';
$L['UPDATE'] = 'Actualizar';
$L['UPDATE_TOOLTIP'] = 'Haga clic para ver más información';
$L['UPDATE_VERSION'] = 'Versión de actualización';
$L['USER_ACTIONS'] = 'User Actions';
$L['VIEW_CHANGELOG'] = 'Ver el registro de cambios';
$L['LATEST'] = 'último';
$L['CURRENT'] = 'actual';
$L['VIEW'] = 'Ver';

/* **********************************
 * 2.2 - popup texture
 ************************************/
$L['SYSTEM_RESPONSE_TITLE'] = 'Respuesta del Sistema';
$L['UNINSTALL_TITLE'] = 'Desinstalando';
$L['UNINSTALLING_TXT_1'] = 'Lamento verte ir ... Desinstalando';
$L['UNINSTALLING_TXT_2'] = 'en progreso. Por favor se paciente';

/* **********************************
 * 2.3 - app nginx config edit modal
 ************************************/
$L['ALERT_NGINX_EDITOR'] = 'Se recomienda hacer una copia de seguridad de su configuración actual primero y solo alterar la configuración a continuación si está bien versado en Nginx o si un miembro del personal lo instruye';
$L['BACKUP_NGINX_LOC'] = 'Ubicación de la copia de seguridad de la configuración de Nginx';
$L['CURRENT_NGINX_LOC'] = 'Ubicación actual de la configuración de Nginx';
$L['NGINX_APP_CONFIGURE'] = 'Editor de configuración de Nginx';
$L['NGINX_EDIT'] = 'Editar configuración de Nginx';
$L['ALERT_CONFIG_EDITOR'] = 'Se aconseja hacer primero una copia de seguridad de la configuración actual y sólo alterar la configuración siguiente si se tiene conocimiento de las ediciones que se están realizando, se ha consultado la propia documentación de la aplicación o se reciben instrucciones de un miembro del personal';
$L['BACKUP_CONFIG_LOC'] = 'Ubicación de la copia de seguridad de la configuración';
$L['CURRENT_CONFIG_LOC'] = 'Config Ubicación actual';
$L['APP_CONFIG_OPTIONS'] = 'Editor de configuración de aplicaciones';
$L['APP_CONFIG_EDIT'] = 'Editar la configuración de la aplicación';

/* **********************************
 * 2.4 - other
 ************************************/
$L['ABOUT_RELEASE'] = 'Acerca de Versión';
$L['EMAIL'] = 'E-mail';
$L['HERE'] = 'aquí';
$L['HOME'] = 'Inicio';
$L['IDLE_L'] = 'inactiva';
$L['IDLE'] = 'Inactiva';
$L['IS_AVAILABLE'] = 'disponible.';
$L['NANGINX'] = 'Ejecutando en Nginx';
$L['NEED_HELP'] = 'Necesitas ayuda ?';
$L['NGINX_CONF_OPTIONS'] = 'Opciones de Nginx Conf';
$L['NGINX_CONFIG'] = 'Configuración de Nginx';
$L['NGINX_SETTINGS'] = 'Configuración de Nginx';
$L['NO'] = 'No';
$L['OPEN'] = 'abierto';
$L['OR'] = 'o';
$L['PASSWORD'] = 'Contraseña';
$L['PLEASE_HOLD'] = '- Por favor espera';
$L['REQUIRED_FIELD'] = 'Campo Requerido...';
$L['REQUIRED_FIELDS'] = 'Los campos marcados con <span style="color:#d9534f">*</span> son requeridos';
$L['SET_HERE'] = 'Configurar aquí';
$L['SIMULATE_LIST'] = 'Lista de usuarios';
$L['SIMULATE'] = 'Simulación de usuarios';
$L['SUMMARY'] = 'Descripción';
$L['UPDATING_QUICKBOX'] = 'Actualizando QuickBox';
$L['UPDATING'] = 'Actualizando ';
$L['USED_L'] = 'usado';
$L['USERNAME'] = 'Nombre de Usuario';
$L['USERS'] = 'Usuarios';
$L['YES'] = 'Si';
$L['ADD_MOUNT_PATH_RCLONE_INFO'] = 'Seleccione si se trata de un montaje rclone. Esta opción, cuando se selecciona, reconocerá la ruta como un montaje rclone. Esta opción debe estar marcada si está intentando monitorear un montaje rclone. Esto asegura que los cálculos de espacio sean exactos.';
$L['ADD_NEW_MOUNT_CHECK'] = 'Agregar un montaje o directorio existente para monitorear';
$L['MOUNT_PATH_SUCCESS'] = 'Ruta agregada exitosamente para monitoreo. Actualizando página...';
$L['MOUNT_PATH_ERROR'] = 'La ruta que intentó agregar para monitoreo no existe.<br>Vuelva a verificar la ruta e inténtelo nuevamente.';
$L['MOUNTS'] = 'Monturas:';
$L['MOUNT_ADD_PATH'] = 'Agregar ruta';
$L['MOUNT_CHECK_ABOUT'] = 'Estos valores se calculan y actualizan periódicamente. Los valores no son en tiempo real. Puede forzar una actualización de estas estadísticas haciendo clic en el botón \'Iniciar escaneo\' a continuación.';
$L['MOUNT_CHECK_PROCESS'] = 'Los valores de porcentaje de espacio se están calculando actualmente en segundo plano. Vuelva a consultar más tarde para ver los resultados actualizados. Requiere actualización de página.';
$L['MOUNT_MONITOR_INFO'] = 'Información de montaje adicional';
$L['MOUNT_START_SCAN'] = 'Iniciar escaneo';
$L['REMOVE_MOUNT_PATH'] = 'Eliminar ruta monitoreada. Esto no eliminará el directorio real o el punto de montaje.';

/* ********************************************************************************
 * #3 WIDGETS
 *
 * 3.1 - Tables Headers
 *
 * 3.1.1 - app management center
 ************************************/
$L['AVAILABILITY'] = 'Disponibilidad';
$L['DETAILS'] = 'Detalles';
$L['NAME'] = 'Nombre';
$L['CONFIGS'] = 'Configuraciones';
$L['EXTRAS'] = 'Extras';

/* **********************************
 * 3.2 - Package Management Center
 *
 * 3.2.1 - app info
 ************************************/
$L['AIRSONIC'] = 'Airsonic-Advanced es una implementación más moderna del fork de Airsonic con varias mejoras clave de rendimiento y características. Añade y sustituye varias características de Airsonic. Airsonic es un streamer multimedia gratuito, basado en la web, que proporciona un acceso omnipresente a tu música.';
$L['AUTOBRR'] = 'Autobrr es un reemplazo binario único moderno para el complemento autodl-irssi+rutorrent. Autobrr supervisa los canales de anuncios de IRC y los feeds RSS de torznab para obtener lanzamientos tan pronto como estén disponibles, con un buen filtrado y compatibilidad con expresiones regulares.';
$L['AUTODL'] = 'AutoDL-iRSSi es un plugin para irssi que supervisa los anuncios en canales IRC y descarga archivos de torrent según los filtros definidos por el usuario.';
$L['AUTOSCAN'] = 'Autoscan reemplaza el comportamiento predeterminado de Plex y Emby para recoger los cambios de archivos en el sistema de archivos. Autoscan se integra con Sonarr, Radarr, Lidarr y Google Drive para recoger los cambios casi en tiempo real sin depender del sistema de archivos';
$L['BAZARR'] = 'Bazarr es una aplicación complementaria para Sonarr y Radarr. Gestiona y descarga subtítulos en función de sus requisitos. Usted define sus preferencias por programa de televisión o película y Bazarr se encarga de todo por usted.';
$L['BAZARR4K'] = 'Bazarr4K es un clon independiente de Bazarr para los perfiles 4K UHD. Es un medio para manejar múltiples instancias de Bazarr, manteniendo el contenido UHD separado del contenido general.';
$L['BBR'] = 'BBR es un nuevo algoritmo de control de congestión desarrollado por Google aplicado al kernel de Linux. Con BBR, el servidor puede obtener un rendimiento significativamente mayor y reducir la latencia de sus conexiones. BBR';
$L['BTSYNC'] = 'BitTorrent Sync de BitTorrent, Inc es un software propietario basado en P2P para la sincronización e intercambio de archivos.';
$L['CALIBRE'] = 'Calibre es un paquete de software de libros electrónicos de código abierto multiplataforma. Calibre admite la organización de libros electrónicos existentes en bibliotecas virtuales, visualización, edición, creación y conversión de libros electrónicos, así como la sincronización de libros electrónicos con una variedad de lectores electrónicos. La edición de libros es compatible con los formatos EPUB y AZW3.';
$L['COUCHPOTATO'] = 'Descarga películas de forma automática, fácil y con la mejor calidad tan pronto como se publiquen, a través de usenet o torrents.';
$L['CSF'] = 'ConfigServer Firewall, también conocido como CSF, es un firewall que proporciona una mejor seguridad para tu servidor, mientras te brinda una interfaz web avanzada fácil de usar, para administrar las configuraciones del firewall.';
$L['DELUGE'] = 'Deluge es un cliente BitTorrent multiplataforma ligero y liviano, de software libre.';
$L['DUPLICATI'] = 'Duplicati es un cliente de respaldo de código abierto y gratuito que almacena de manera segura respaldos encriptados, incrementales y comprimidos en servicios de almacenamiento en la nube y servidores de archivos remotos. Puede funcionar con Amazon S3, Dropbox, Google Drive, FTP, SSH / SFTP, WebDAV y <a href="https://nullrefer.ir/?https://duplicati.readthedocs.io/en/latest/01-introduction/#supported-backends" rel="noopener nofollow" target="_blank">muchos más</a>.';
$L['EMBY'] = 'Emby es un centro multimedia de código abierto diseñado para permitirnos centralizar todo nuestro contenido multimedia en un equipo y poder acceder a todo él desde cualquier otro equipo o dispositivo conectado a internet. Este centro multimedia es compatible con prácticamente cualquier sistema operativo, como Windows, Linux, macOS, NAS y con dispositivos móviles Android y iOS.';
$L['FAIL2BAN'] = 'Fail2Ban es un marco de software de prevención de intrusiones que protege los servidores informáticos de los ataques de fuerza bruta.';
$L['FILEBOT'] = 'FileBot es la herramienta definitiva para organizar y cambiar el nombre de sus películas, programas de televisión y anime, así como para obtener subtítulos e ilustraciones. Es inteligente y solo funciona.';
$L['FILEBROWSER'] = 'filebrowser proporciona una interfaz de administración de archivos dentro de un directorio específico y se puede usar para cargar, eliminar, obtener una vista previa, cambiar el nombre y editar sus archivos. Permite la creación de múltiples usuarios y cada usuario puede tener su propio directorio. Se puede utilizar como aplicación independiente o como middleware.';
$L['FLARESOLVERR'] = 'FlareSolverr es un servidor proxy para evitar la protección de Cloudflare.';
$L['FLEXGET'] = 'FlexGet es una herramienta de automatización multipropósito para todos sus medios. Soporte para torrents, nzbs, podcasts, comics, TV, películas, RSS, HTML, CSV, y más.';
$L['FLOOD'] = 'Flood es un servicio de monitoreo para varios clientes de torrent. Es un servicio de Node.js que se comunica con su cliente de torrent favorito y ofrece una interfaz de usuario web decente para la administración. La organización <a href="https://nullrefer.ir/?https://github.com/Flood-UI" target="_blank" rel="nofollow noopener">Flood-UI</a> alberga proyectos relacionados.';
$L['HEADPHONES'] = 'Headphones es un gestor de descargas automáticas de música para NZB y Torrent, escrito en Python. Es compatible con SABnzbd, NZBget, Transmission, µTorrent, Deluge y Blackhole.';
$L['JACKETT'] = 'Soporte API para tus trackers privados favoritos.';
$L['JDOWNLOADER'] = 'JDownloader es una herramienta de administración de descargas gratuita que le permite descargar rápidamente archivos desde servicios de alojamiento como Mediafire, 4Shared y otros servicios de alojamiento con funcionalidades similares. Los servicios de alojamiento de archivos a menudo mantienen la velocidad de descarga máxima para incentivar la compra de paquetes premium; JDownloader le ayuda a evitar ese requisito.';
$L['JELLYFIN'] = 'Jellyfin es un sistema de medios de software libre que le permite controlar la administración y transmisión de sus medios.';
$L['JELLYSEERR'] = 'Jellyseerr es una aplicación de software gratuita y de código abierto para gestionar las solicitudes de su biblioteca multimedia. ¡Es una bifurcación de Overseerr creada para brindar soporte a los servidores de medios Jellyfin y Emby!';
$L['KAVITA'] = 'Kavita es un servidor de lectura multiplataforma, rápido y rico en funciones. Creado con un enfoque para manga y el objetivo de ser una solución completa para todas sus necesidades de lectura. Configure su propio servidor y comparta su colección de lecturas con sus amigos y familiares.';
$L['KOMGA'] = 'Komga es un servidor de medios para sus cómics/manga digitales, con un enfoque en proporcionar una interfaz simple y moderna.';
$L['LAZYLIBRARIAN'] = 'LazyLibrarian es una aplicación similar a los auriculares SickBeard, CouchPotato, para libros electrónicos, audiolibros y revistas. Utiliza una combinación de <a href="https://nullrefer.ir/?https://www.goodreads.com/" rel="noopener nofollow" target="_blank"> Goodreads </a> <a href="https://nullrefer.ir/?https://www.librarything.com/" rel="noopener nofollow" target="_blank"> Librarything </a> y opcionalmente <a href="https://nullrefer.ir/?https://www.googleapis.com/books/v1/" rel="noopener nofollow" target="_blank"> GoogleBooks </a> como fuentes de información del autor e información del libro.';
$L['LETSENCRYPT'] = 'Let\'s Encrypt es una autoridad de certificación (CA) gratuita, automatizada y abierta, que se ejecuta en beneficio del público por el <a href="https://nullrefer.ir/?https://letsencrypt.org/isrg/" rel="noopener nofollow" target="_blank">Grupo de Investigación de Seguridad de Internet (ISRG)</a>.';
$L['LIDARR'] = 'Lidarr es una aplicación basada en Sonarr, modificada para descargar automáticamente música a través de Usenet y BitTorrent. El proyecto se inspiró en otros gestores de descarga de música de Usenet / BitTorrent, como Headphones.';
$L['MEDUSA'] = 'Video File Manager para programas de televisión, revisa los nuevos episodios de tus programas favoritos y, cuando se publican, hace su magia. Permite realizar búsquedas manuales y otras funciones exclusivas, consulta Medusa en <a href="https://nullrefer.ir/?https://github.com/pymedusa/Medusa" rel="noopener nofollow" target="_blank"> Github </a>.';
$L['MYLAR3'] = 'Mylar es un programa de descarga de cómics (cbr/cbz) automatizado para usar con NZB y torrents escritos en python. Es compatible con SABnzbd, NZBGET y muchos clientes de torrent además de DDL.';
$L['NETDATA'] = 'Netdata is distributed, real-time, performance and health monitoring for systems and applications.';
$L['NEXTCLOUD'] = 'Nextcloud es una plataforma de código abierto cliente-servidor, con el objetivo de crear un servicio de alojamiento de archivos. Accede y sincroniza tus archivos, contactos, calendarios y comuníquese y colabore entre todos sus dispositivos. ¡Decide qué sucede con sus datos, dónde están y quién puede acceder a ellos!';
$L['NOTIFIARR'] = 'Este es el cliente unificado para <a href="https://nullrefer.ir/?https://notifiarr.com/" rel="noopener nofollow" target="_blank">Notifiarr.com</a>. El cliente habilita las solicitudes de contenido de Media Bot en su servidor Discord y también proporciona informes sobre el uso de Plex y el estado del sistema, entre muchas otras características..';
$L['NOVNC'] = 'NoVNC es un cliente VNC escrito completamente en HTML5 de manera que nos permite conectarnos a un servidor remoto sin necesidad de instalar ningún software adicional. noVNC funciona bien en cualquier navegador moderno, incluidos los navegadores móviles (iOS y Android).';
$L['NZBGET'] = 'NZBGet es un gestor de descargas de archivos de Usenet, basándose en la información que se proporciona en los archivos nzb. NZBGet está escrito en C ++ y es conocido por su extraordinario rendimiento y eficiencia.';
$L['NZBHYDRA'] = 'NZBHydra es buscador de indexadores NZB. Proporciona un acceso fácil a varios buscadores basados en raw y newznab. Puede buscar en todos los indexadores desde un solo lugar y utilizarlos en herramientas como Sonarr o CouchPotato.';
$L['NZBHYDRA2'] = 'NZBHydra2 es buscador de indexadores NZB. Proporciona un acceso fácil a varios buscadores basados en raw y newznab. Puede buscar en todos los indexadores desde un solo lugar y utilizarlos en herramientas como Sonarr o CouchPotato.';
$L['OMBI'] = 'Ombi ofrece una interfaz web fácil de usar, en donde los usuarios pueden solicitar fácilmente contenidos para agregar a la biblioteca. Se integra con CouchPotato, SickChill y Sonarr.';
$L['OVERSEERR'] = 'Overseerr es una aplicación de software gratuita y de código abierto para administrar las solicitudes de su biblioteca de medios. ¡Se integra con sus servicios existentes, como Sonarr, Radarr y Plex!';
$L['OVPN'] = 'OpenVPN es una herramienta de conectividad basada en software libre: SSL, VPN Virtual Private Network. Es compatible con Linux, Solaris, OpenBSD, FreeBSD, NetBSD, Mac OS X y Windows 2000 / XP +.';
$L['PHPMYADMIN'] = 'phpMyAdmin es una herramienta escrita en <a href="https://nullrefer.ir/?https://php.net/" rel="noopener nofollow" target="_blank">PHP</a>, con la intención de manejar la administración de <a href="https://nullrefer.ir/?https://www.mysql.com/" rel="noopener nofollow" target="_blank">MySQL</a> a través de páginas web, utilizando Internet. Actualmente puede crear y eliminar Bases de Datos, crear, eliminar y alterar tablas, borrar, editar y añadir campos, ejecutar cualquier sentencia SQL, administrar claves en campos, administrar privilegios y exportar datos en varios formatos.';
$L['PLEX'] = 'Plex te permite transmitir tu contenido a cualquier dispositivo habilitado para Plex.';
$L['PROWLARR'] = 'Prowlarr es un gestor/proxy indexador construido en la popular pila base arr .net/reactjs para integrarse con sus diversas aplicaciones PVR. Prowlarr es compatible con los rastreadores de torrents y los indexadores de Usenet. Se integra a la perfección con Sonarr, Radarr, Lidarr y Readarr, lo que ofrece una gestión completa de sus indexadores sin necesidad de configurar el indexador por aplicación.';
$L['PYLOAD'] = 'pyLoad es un gestor de descargas para sitios web, sitios de video y enlaces HTTP/FTP. Puede encontrar una lista de los sitios admitidos <a href="https://nullrefer.ir/?https://github.com/pyload/pyload/wiki/Supported-Hoster" rel="noopener nofollow" target="_blank">aquí</a>';
$L['QBITTORRENT'] = 'qBittorrent es un cliente BitTorrent P2P gratuito y confiable. Un cliente BitTorrent avanzado y multiplataforma con una agradable interfaz de usuario Qt, así como una interfaz de usuario web para control remoto y un motor de búsqueda integrado.';
$L['QUASSEL'] = 'Quassel IRC es un cliente moderno, multiplataforma y distribuido de IRC basado en Qt4 framework.';
$L['QUOTAS'] = 'Esta característica de Linux le permite al administrador del sistema asignar una cantidad máxima de espacio en disco que un usuario o grupo puede usar.';
$L['RADARR'] = 'Radarr es una aplicación basada en Sonarr, modificada para descargar automáticamente películas a través de Usenet y BitTorrent.<br>El proyecto se inspiró en otros gestores de descargas de películas de Usenet / BitTorrent como CouchPotato.';
$L['RADARR4K'] = 'Radarr4K es un clon independiente de Radarr para los perfiles 4K UHD. Es un medio para manejar múltiples instancias de Radarr, manteniendo el contenido UHD separado del contenido general.';
$L['RAPIDLEECH'] = 'Rapid Leech es un script gratuito de descargas que puede ser utilizado en varios sitios populares como uploaded.net, Rapidshare.com y más de otros 120.';
$L['RCLONE'] = 'RClone es un programa de línea de comandos para sincronizar archivos y directorios desde y hacia una multitud de hosts';
$L['READARR'] = 'Readarr es un gestor de colecciones de libros electrónicos para usuarios de Usenet y BitTorrent. Puede monitorear múltiples canales RSS para nuevos libros de sus autores favoritos y se interconectará con clientes e indexadores para agarrarlos, ordenarlos y renombrarlos.';
$L['REQUESTRR'] = 'Requestrr es un chatbot de Discord que sirve para simplificar el uso de servicios como Sonarr/Radarr/Ombi mediante el uso del chat. Todos los usuarios de su servidor de Discord pueden solicitar la adición de nuevos contenidos y recibir una notificación cuando estén disponibles.';
$L['RTORRENT'] = 'rTorrent es un cliente de BitTorrent rápido y eficiente que utiliza, y está en desarrollo junto con, la biblioteca libTorrent (que no debe confundirse con libtorrent-rasterbar). Está escrito en C ++ y usa la biblioteca de programación ncurses, lo que significa que usa una interfaz de usuario de texto.';
$L['RUTORRENT'] = 'ruTorrent es una interfaz web para el popular cliente de Bittorrent, rtorrent. Características principales: Liviano y ligero, por lo que puede instalarse en servidores antiguos y de gama baja, e incluso en algunos routers SOHO, Extensible: hay muchos plugins y todos pueden crear uno, viene con el tema <a href="https://nullrefer.ir/?https://lab.quickbox.io/QuickBox/club-QuickBox" rel="noopener nofollow" target="_blank">club-QuickBox</a>.';
$L['SABNZBD'] = 'SABnzbd es una aplicación multiplataforma de descarga de noticias. La aplicación funciona en segundo plano y simplifica la descarga, la verificación y la extracción de archivos desde Usenet. SABnzbd usa archivos NZB (similares a los archivos .torrent, pero para Usenet), en lugar de navegar directamente por Usenet.';
$L['SEEDCROSS'] = 'SeedCross es una aplicación web para torrents Cross-Seed en Deluge/qBittorrent/Transmission. Es una bifurcación de <a href="https://nullrefer.ir/?https://github.com/BC44/Cross-Seed-AutoDL" rel="noopener nofollow" target="_blank">Cross-Seed-AutoDL</a>.';
$L['SICKCHILL'] = 'Video File Manager para programas de televisión, revisa los nuevos episodios de tus programas favoritos y, cuando se publican, hace su magia.';
$L['SICKGEAR'] = 'SickGear es la evolución de Sick-Beard. Automatiza el disfrute de tu TV con innovación, estabilidad y confiabilidad.';
$L['SONARR'] = 'Sonarr es una herramienta de gestión de series de televisión que funcionará tanto con torrents como con usenet.';
$L['SONARR4K'] = 'Sonarr4K es un clon independiente de Sonarr para los perfiles 4K UHD. Es un medio para manejar múltiples instancias de Sonarr, manteniendo el contenido UHD separado del contenido general.';
$L['SUBSONIC'] = 'Subsonic es un servidor de medios de comunicación libre, de código abierto, basado en web. Está escrito en Java, se puede ejecutar en cualquier sistema operativo que tenga soporte de máquina virtual Java, admite simultáneamente múltiples clientes streaming y es compatible con cualquier medio streamable, es decir, que pueda transmitir (incluyendo MP3, AAC y Ogg).';
$L['SYNCTHING'] = 'Sincronización continua de archivos con BitTorrent.';
$L['TAUTULLI'] = 'Una aplicación web basada en Python para monitoreo, análisis y notificaciones de tu Plex Media Server.';
$L['THELOUNGE'] = 'A modern self-hosted web IRC client';
$L['TRANSMISSION'] = 'Transmission está diseñado para un uso fácil y poderoso. Los valores predeterminados ya están configurados y solo se necesitan unos pocos clics para configurar funciones avanzadas como directorios, listas de bloqueo de peer incorrectos y la interfaz web. Cuando Ubuntu eligió Transmission como su cliente BitTorrent predeterminado, una de las razones fue por su fácil curva de aprendizaje.';
$L['UNIFI'] = 'El controlador UniFi® es una solución de software de administración de redes inalámbricas de Ubiquiti Networks ™. Le permite administrar múltiples redes inalámbricas usando un navegador web. ';
$L['UNPACKERR'] = 'Extrae descargas para Radarr, Sonarr, Lidarr, Readarr: elimina los archivos extraídos después de la importación.';
$L['WEBCONSOLE'] = 'TTYD (también conocido como QuickBox Web Console) es un terminal con todas las funciones basado en Xterm.js con compatibilidad con CJK e IME.';
$L['X2GO'] = 'X2Go es un software de escritorio remoto para Linux que utiliza el protocolo de tecnología NX.';
$L['XTEVE'] = 'xTeVe es una aplicación que simula un sintonizador de TV, te permite tener canales de IPTV vía Plex o Emby. xTeVe puede combinar varios archivos M3U y XMLTV y enviarlos a su Media Center preferido.';
$L['ZNC'] = 'ZNC es un "IRC bouncer" o BNC. Puede separar al cliente del servidor IRC real, y también de los canales seleccionados.';

/* **********************************
 * 3.2.2 - app uninstall
 ************************************/
$L['AIRSONIC_UNINSTALL'] = 'Está a punto de desinstalar <span style="color:#01cea2">Airsonic</span> de su sistema.<br/><br/>Esto eliminará completamente todas sus configuraciones y ajustes... esta acción es irreversible.<br/><br/>Puede volver a instalar <span style="color:#01cea2">Airsonic</span> en cualquier momento, sin embargo, sus configuraciones se restablecerán a los valores predeterminados.';
$L['AUTOBRR_UNINSTALL'] = 'Está a punto de desinstalar <span style="color:#01cea2">Autobrr</span> de su sistema.<br/><br/>Esto eliminará por completo todas sus configuraciones y ajustes... esta acción es irreversible.<br/><br/>Puede reinstalar <span style="color:#01cea2">Autobrr</span> en cualquier momento, sin embargo, su configuración se restablecerá a los valores predeterminados.';
$L['AUTODL_UNINSTALL'] = 'Estás a punto de desinstalar <span style="color:#01cea2">AutoDL-iRSSi</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.<br/><br/>Puedes volver a instalar <span style="color:#01cea2">AutoDL-iRSSi</span> en cualquier momento, sin embargo, la configuración se restablecerá a la predeterminada.';
$L['AUTOSCAN_UNINSTALL'] = 'Está a punto de desinstalar <span style="color:#01cea2">Autoscan</span> de su sistema.<br/><br/>Esto eliminará completamente todas sus configuraciones y ajustes... esta acción es irreversible.<br/><br/>Puede volver a instalar <span style="color:#01cea2">Autoscan</span> en cualquier momento, sin embargo, sus configuraciones se restablecerán a los valores predeterminados.';
$L['BAZARR_UNINSTALL'] = 'Estás a punto de desinstalar <span style="color:#01cea2">Bazarr</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.<br/><br/>Puedes volver a instalar <span style="color:#01cea2">Bazarr</span> en cualquier momento, sin embargo, la configuración se restablecerá a la predeterminada.';
$L['BAZARR4K_UNINSTALL'] = 'Estás a punto de desinstalar <span style="color:#01cea2">Bazarr4K</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.<br/><br/>Puedes volver a instalar <span style="color:#01cea2">Bazarr4K</span> en cualquier momento, sin embargo, la configuración se restablecerá a la predeterminada.';
$L['BBR_UNINSTALL'] = 'Estás a punto de desinstalar <span style="color:#01cea2">BBR</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.<br/><br/>Puedes volver a instalar <span style="color:#01cea2">BBR</span> en cualquier momento.';
$L['BTSYNC_UNINSTALL'] = 'Estás a punto de desinstalar <span style="color:#01cea2">BitTorrent Sync</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.<br/><br/>Puedes volver a instalar <span style="color:#01cea2">BitTorrent Sync</span> en cualquier momento, sin embargo, la ruta de almacenamiento y la configuración de las carpetas vinculadas se restablecerán a los valores predeterminados.';
$L['CALIBRE_UNINSTALL'] = 'Estás a punto de desinstalar <span style="color:#01cea2">Calibre Sync</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.<br/><br/>Puedes volver a instalar <span style="color:#01cea2">Calibre Sync</span> en cualquier momento, sin embargo, la ruta de almacenamiento y la configuración de las carpetas vinculadas se restablecerán a los valores predeterminados.';
$L['COUCHPOTATO_UNINSTALL'] = 'Estás a punto de desinstalar <span style="color:#01cea2">CouchPotato</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.<br/><br/>Puedes volver a instalar <span style="color:#01cea2">CouchPotato</span> en cualquier momento, sin embargo, la configuración se restablecerá a la predeterminada.';
$L['CSF_UNINSTALL'] = 'Estás a punto de desinstalar <span style="color:#01cea2">Config Server Firewall (CSF)</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.<br/><br/>Puedes volver a instalar <span style="color:#01cea2">Config Server Firewall (CSF)</span> en cualquier momento, sin embargo, sus ajustes de configuración (si se realizaron cambios) se restablecerán a los valores predeterminados.';
$L['DELUGE_UNINSTALL'] = 'Estás a punto de desinstalar <span style="color:#01cea2">Deluge</span> de tu sistema.<br/><br/>This will completely remove all of your configuration and shared folder settings for <strong>all users</strong>... this action is irreversible.<br/><br/>Puedes volver a instalar <span style="color:#01cea2">Deluge</span> en cualquier momento, sin embargo, la ruta de almacenamiento y la configuración de las carpetas vinculadas se restablecerán a los valores predeterminados.';
$L['DUPLICATI_UNINSTALL'] = 'Estás a punto de desinstalar <span style="color:#01cea2">Duplicati</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.<br/><br/>Puedes volver a instalar <span style="color:#01cea2">Duplicati</span> en cualquier momento, sin embargo, la configuración se restablecerá a la predeterminada.';
$L['EMBY_UNINSTALL'] = 'Estás a punto de desinstalar <span style="color:#01cea2">Emby</span> de tu sistema.<br/><br/>Esto eliminará por completo todas las configuraciones y carpetas compartidas ... esta acción es irreversible.<br/><br/>Puedes volver a instalar <span style="color:#01cea2">Emby</span> en cualquier momento, sin embargo, la ruta de almacenamiento y la configuración de las carpetas vinculadas se restablecerán a los valores predeterminados.';
$L['FAIL2BAN_UNINSTALL'] = 'Estás a punto de desinstalar <span style="color:#01cea2">Fail2Ban</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.<br/><br/>Puedes volver a instalar <span style="color:#01cea2">Fail2Ban</span> en cualquier momento, sin embargo, la configuración se restablecerá a la predeterminada.';
$L['FILEBOT_UNINSTALL'] = 'Estás a punto de desinstalar <span style="color:#01cea2">FileBot</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.<br/><br/>Puedes volver a instalar <span style="color:#01cea2">FileBot</span> en cualquier momento, sin embargo, la configuración se restablecerá a la predeterminada.';
$L['FILEBROWSER_UNINSTALL'] = 'Estás a punto de desinstalar <span style="color:#01cea2">Filebrowser</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.<br/><br/>Puedes volver a instalar <span style="color:#01cea2">Filebrowser</span> en cualquier momento, sin embargo, la configuración se restablecerá a la predeterminada.';
$L['FLARESOLVERR_UNINSTALL'] = 'Estás a punto de desinstalar <span style="color:#01cea2">FlareSolverr</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.<br/><br/>Puedes volver a instalar <span style="color:#01cea2">FlareSolverr</span> en cualquier momento, sin embargo, la configuración se restablecerá a la predeterminada.';
$L['FLEXGET_UNINSTALL'] = 'Estás a punto de desinstalar <span style="color:#01cea2">FlexGet</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.<br/><br/>Puedes volver a instalar <span style="color:#01cea2">FlexGet</span> en cualquier momento, sin embargo, la configuración se restablecerá a la predeterminada.';
$L['FLOOD_UNINSTALL'] = 'Estás a punto de desinstalar <span style="color:#01cea2">Flood</span> de tu sistema.<br/><br/>Esto eliminará por completo todas las configuraciones y carpetas compartidas ... esta acción es irreversible.<br/><br/>Puedes volver a instalar <span style="color:#01cea2">Flood</span> en cualquier momento, sin embargo, la ruta de almacenamiento y la configuración de las carpetas vinculadas se restablecerán a los valores predeterminados.';
$L['HEADPHONES_UNINSTALL'] = 'Estás a punto de desinstalar <span style="color:#01cea2">Headphones</span> de tu sistema.<br/><br/>Esto eliminará por completo todas las configuraciones y carpetas compartidas ... esta acción es irreversible.<br/><br/>Puedes volver a instalar <span style="color:#01cea2">Headphones</span> en cualquier momento, sin embargo, la ruta de almacenamiento y la configuración de las carpetas vinculadas se restablecerán a los valores predeterminados.';
$L['JACKETT_UNINSTALL'] = 'Estás a punto de desinstalar <span style="color:#01cea2">Jackett</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.<br/><br/>Puedes volver a instalar <span style="color:#01cea2">Jackett</span> en cualquier momento, sin embargo, la configuración se restablecerá a la predeterminada.';
$L['JDOWNLOADER_UNINSTALL'] = 'Estás a punto de desinstalar <span style="color:#01cea2">JDownloader</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.<br/><br/>Puedes volver a instalar <span style="color:#01cea2">JDownloader</span> en cualquier momento, sin embargo, la configuración se restablecerá a la predeterminada.';
$L['JELLYFIN_UNINSTALL'] = 'Estás a punto de desinstalar <span style="color:#01cea2">Jellyfin</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.<br/><br/>Puedes volver a instalar <span style="color:#01cea2">Jellyfin</span> en cualquier momento, sin embargo, la configuración se restablecerá a la predeterminada.';
$L['JELLYSEERR_UNINSTALL'] = 'Estás a punto de desinstalar <span style="color:#01cea2">Jellyseerr</span> de tu sistema.<br/><br/>Esto eliminará por completo todas las configuraciones de tu biblioteca ... esta acción es irreversible.<br/><br/>Puedes volver a instalar <span style="color:#01cea2">Jellyseerr</span> en cualquier momento, sin embargo, la configuración de la biblioteca y los pedidos serán eliminados.';
$L['KAVITA_UNINSTALL'] = 'Estás a punto de desinstalar <span style="color:#01cea2">Kavita</span> de tu sistema.<br/><br/>Esto eliminará por completo todas las configuraciones de tu biblioteca ... esta acción es irreversible.<br/><br/>Puedes volver a instalar <span style="color:#01cea2">Kavita</span> en cualquier momento, sin embargo, la configuración de la biblioteca y los pedidos serán eliminados.';
$L['KOMGA_UNINSTALL'] = 'Estás a punto de desinstalar <span style="color:#01cea2">Komga</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.<br/><br/>Puedes volver a instalar <span style="color:#01cea2">Komga</span> en cualquier momento, sin embargo, la configuración se restablecerá a la predeterminada.';
$L['LAZYLIBRARIAN_UNINSTALL'] = 'Está a punto de desinstalar <span style="color:#01cea2"> LazyLibrarian </span> de su sistema.<br/><br/>Esto eliminará por completo todas las configuraciones ... esta acción es irreversible.<br/><br/>Puede reinstalar <span style="color:#01cea2"> LazyLibrarian </span> en cualquier momento, sin embargo, la configuración se restablecerá a los valores predeterminados.';
$L['LETSENCRYPT_UNINSTALL'] = 'Estás a punto de desinstalar <span style="color:#01cea2">Let\'s Encrypt</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.<br/><br/>Puedes volver a instalar <span style="color:#01cea2">Let\'s Encrypt</span> en cualquier momento, sin embargo, la configuración se restablecerá a la predeterminada.';
$L['LIDARR_UNINSTALL'] = 'Estás a punto de desinstalar <span style="color:#01cea2">Lidarr</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.<br/><br/>Puedes volver a instalar <span style="color:#01cea2">Lidarr</span> en cualquier momento, sin embargo, la configuración se restablecerá a la predeterminada.';
$L['MEDUSA_UNINSTALL'] = 'Estás a punto de desinstalar <span style="color:#01cea2">Medusa</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.<br/><br/>Puedes volver a instalar <span style="color:#01cea2">Medusa</span> en cualquier momento, sin embargo, la configuración se restablecerá a la predeterminada.';
$L['MYLAR3_UNINSTALL'] = 'Está a punto de desinstalar <span style="color:#01cea2"> Mylar3 </span> de su sistema.<br/><br/>Esto eliminará por completo todas las configuraciones ... esta acción es irreversible.<br/><br/>Puede reinstalar <span style="color:#01cea2"> Mylar3 </span> en cualquier momento, sin embargo, sus ajustes de configuración se restablecerán a los valores predeterminados.';
$L['NETDATA_UNINSTALL'] = 'Estás a punto de desinstalar <span style="color:#01cea2">Netdata</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.<br/><br/>Puedes volver a instalar <span style="color:#01cea2">Netdata</span> en cualquier momento, sin embargo, la configuración se restablecerá a la predeterminada.';
$L['NEXTCLOUD_UNINSTALL'] = 'Estás a punto de desinstalar <span style="color:#01cea2">NextCloud</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.<br/><br/>Puedes volver a instalar <span style="color:#01cea2">NextCloud</span> en cualquier momento, sin embargo, la configuración se restablecerá a la predeterminada.';
$L['NOTIFIARR_UNINSTALL'] = 'Estás a punto de desinstalar <span style="color:#01cea2">Notifiarr</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.<br/><br/>Puedes volver a instalar <span style="color:#01cea2">Notifiarr</span> en cualquier momento, sin embargo, la configuración se restablecerá a la predeterminada.';
$L['NOVNC_UNINSTALL'] = 'Estás a punto de desinstalar <span style="color:#01cea2">noVNC</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.<br/><br/>Puedes volver a instalar <span style="color:#01cea2">noVNC</span> en cualquier momento, sin embargo, la configuración se restablecerá a la predeterminada.';
$L['NZBGET_UNINSTALL'] = 'Estás a punto de desinstalar <span style="color:#01cea2">NZBGet</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.<br/><br/>Puedes volver a instalar <span style="color:#01cea2">NZBGet</span> en cualquier momento, sin embargo, la configuración se restablecerá a la predeterminada.';
$L['NZBHYDRA_UNINSTALL'] = 'Estás a punto de desinstalar <span style="color:#01cea2">NZBHydra</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.<br/><br/>Puedes volver a instalar <span style="color:#01cea2">NZBHydra</span> en cualquier momento, sin embargo, la configuración se restablecerá a la predeterminada.';
$L['NZBHYDRA2_UNINSTALL'] = 'Estás a punto de desinstalar <span style="color:#01cea2">NZBHydra2</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.<br/><br/>Puedes volver a instalar <span style="color:#01cea2">NZBHydra2</span> en cualquier momento, sin embargo, la configuración se restablecerá a la predeterminada.';
$L['OMBI_UNINSTALL'] = 'Estás a punto de desinstalar <span style="color:#01cea2">Ombi</span> de tu sistema.<br/><br/>Esto eliminará por completo todas las configuraciones de tu biblioteca ... esta acción es irreversible.<br/><br/>Puedes volver a instalar <span style="color:#01cea2">Ombi</span> en cualquier momento, sin embargo, la configuración de la biblioteca y los pedidos serán eliminados.';
$L['OVERSEERR_UNINSTALL'] = 'Estás a punto de desinstalar <span style="color:#01cea2">Overseerr</span> de tu sistema.<br/><br/>Esto eliminará por completo todas las configuraciones de tu biblioteca ... esta acción es irreversible.<br/><br/>Puedes volver a instalar <span style="color:#01cea2">Overseerr</span> en cualquier momento, sin embargo, la configuración de la biblioteca y los pedidos serán eliminados.';
$L['OVPN_UNINSTALL'] = 'Estás a punto de desinstalar <span style="color:#01cea2">OpenVPN</span> de tu sistema.<br/><br/>Esto eliminará por completo todas las configuraciones de tu biblioteca ... esta acción es irreversible.<br/><br/>Puedes volver a instalar <span style="color:#01cea2">OpenVPN</span> en cualquier momento, sin embargo, la configuración de la biblioteca y los pedidos serán eliminados.';
$L['PHPMYADMIN_UNINSTALL'] = 'Estás a punto de desinstalar <span style="color:#01cea2">phpMyAdmin</span> de tu sistema.<br/><br/>Esto eliminará completamente toda la configuración de la base de datos de phpmyadmin ... esta acción es irreversible.<br/><br/>Puedes volver a instalar <span style="color:#01cea2">phpMyAdmin</span> en cualquier momento.';
$L['PLEX_UNINSTALL'] = 'Estás a punto de desinstalar <span style="color:#01cea2">Plex Media Server</span> de tu sistema.<br/><br/>Esto eliminará por completo todas las configuraciones de tu biblioteca ... esta acción es irreversible.<br/><br/>Puedes volver a instalar <span style="color:#01cea2">Plex</span> en cualquier momento, sin embargo, la configuración de tu biblioteca se restablecerá a la predeterminada.';
$L['PROWLARR_UNINSTALL'] = 'Estás a punto de desinstalar <span style="color:#01cea2">Prowlarr</span> de tu sistema.<br/><br/>Esto eliminará por completo todas las configuraciones de tu biblioteca ... esta acción es irreversible.<br/><br/>Puedes volver a instalar <span style="color:#01cea2">Prowlarr</span> en cualquier momento, sin embargo, la configuración de tu biblioteca se restablecerá a la predeterminada.';
$L['PYLOAD_UNINSTALL'] = 'Estás a punto de desinstalar <span style="color:#01cea2">PyLoad</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.<br/><br/>Puedes volver a instalar <span style="color:#01cea2">PyLoad</span> en cualquier momento, sin embargo, la configuración se restablecerá a la predeterminada.';
$L['QBITTORRENT_UNINSTALL'] = 'Estás a punto de desinstalar <span style="color:#01cea2">QBittorrent</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.<br/><br/>Puedes volver a instalar <span style="color:#01cea2">QBittorrent</span> en cualquier momento, sin embargo, la configuración se restablecerá a la predeterminada.';
$L['QUASSEL_UNINSTALL'] = 'Estás a punto de desinstalar <span style="color:#01cea2">Quassel</span> de tu sistema.<br/><br/>Esto eliminará por completo <span style="color:#01cea2">Quassel</span> y toda sus configuraciones y el backlogs guardado de tu sistema.';
$L['QUOTA_UNINSTALL'] = 'Estás a punto de desinstalar <span style="color:#01cea2">Quotas</span> de tu sistema.<br/><br/>Esto eliminará completamente las cuotas de usuario y cualquier configuración asociada con ello.';
$L['RADARR_UNINSTALL'] = 'Estás a punto de desinstalar <span style="color:#01cea2">Radarr</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.<br/><br/>Puedes volver a instalar <span style="color:#01cea2">Radarr</span> en cualquier momento, sin embargo, la configuración se restablecerá a la predeterminada.';
$L['RADARR4K_UNINSTALL'] = 'Estás a punto de desinstalar <span style="color:#01cea2">Radarr4K</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.<br/><br/>Puedes volver a instalar <span style="color:#01cea2">Radarr4K</span> en cualquier momento, sin embargo, la configuración se restablecerá a la predeterminada.';
$L['RAPIDLEECH_UNINSTALL'] = 'Estás a punto de desinstalar <span style="color:#01cea2">Rapidleech</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.<br/><br/>Puedes volver a instalar <span style="color:#01cea2">Rapidleech</span> en cualquier momento, sin embargo, la configuración se restablecerá a la predeterminada.';
$L['RCLONE_UNINSTALL'] = 'Estás a punto de desinstalar <span style="color:#01cea2">RClone</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.<br/><br/>Puedes volver a instalar <span style="color:#01cea2">RClone</span> en cualquier momento, sin embargo, la configuración se restablecerá a la predeterminada.';
$L['READARR_UNINSTALL'] = 'Estás a punto de desinstalar <span style="color:#01cea2">Readarr</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.<br/><br/>Puedes volver a instalar <span style="color:#01cea2">Readarr</span> en cualquier momento, sin embargo, la configuración se restablecerá a la predeterminada.';
$L['REQUESTRR_UNINSTALL'] = 'Estás a punto de desinstalar <span style="color:#01cea2">Requestrr</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.<br/><br/>Puedes volver a instalar <span style="color:#01cea2">Requestrr</span> en cualquier momento, sin embargo, la configuración se restablecerá a la predeterminada.';
$L['RTORRENT_UNINSTALL'] = 'Estás a punto de desinstalar <span style="color:#01cea2">rTorrent</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.<br/><br/>Puedes volver a instalar <span style="color:#01cea2">rTorrent</span> en cualquier momento, sin embargo, la configuración se restablecerá a la predeterminada.';
$L['RUTORRENT_UNINSTALL'] = 'Estás a punto de desinstalar <span style="color:#01cea2">ruTorrent</span> fde tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.<br/><br/>Puedes volver a instalar <span style="color:#01cea2">ruTorrent</span> aen cualquier momento, sin embargo, la configuración se restablecerá a la predeterminada.';
$L['SABNZBD_UNINSTALL'] = 'Estás a punto de desinstalar <span style="color:#01cea2">SABnzbd</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.<br/><br/>Puedes volver a instalar <span style="color:#01cea2">SABnzbd</span> en cualquier momento, sin embargo, la configuración se restablecerá a la predeterminada.';
$L['SEEDCROSS_UNINSTALL'] = 'Estás a punto de desinstalar <span style="color:#01cea2">SeedCross</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.<br/><br/>Puedes volver a instalar <span style="color:#01cea2">SeedCross</span> en cualquier momento, sin embargo, la configuración se restablecerá a la predeterminada.';
$L['SICKCHILL_UNINSTALL'] = 'Estás a punto de desinstalar <span style="color:#01cea2">SickChill</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.<br/><br/>Puedes volver a instalar <span style="color:#01cea2">SickChill</span> en cualquier momento, sin embargo, la configuración se restablecerá a la predeterminada.';
$L['SICKGEAR_UNINSTALL'] = 'Estás a punto de desinstalar <span style="color:#01cea2">SickGear</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.<br/><br/>Puedes volver a instalar <span style="color:#01cea2">SickGear</span> en cualquier momento, sin embargo, la configuración se restablecerá a la predeterminada.';
$L['SONARR_UNINSTALL'] = 'Estás a punto de desinstalar <span style="color:#01cea2">Sonarr</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.<br/><br/>Puedes volver a instalar <span style="color:#01cea2">Sonarr</span> en cualquier momento, sin embargo, la configuración se restablecerá a la predeterminada.';
$L['SONARR4K_UNINSTALL'] = 'Estás a punto de desinstalar <span style="color:#01cea2">Sonarr4K</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.<br/><br/>Puedes volver a instalar <span style="color:#01cea2">Sonarr4K</span> en cualquier momento, sin embargo, la configuración se restablecerá a la predeterminada.';
$L['SUBSONIC_UNINSTALL'] = 'Estás a punto de desinstalar <span style="color:#01cea2">Subsonic</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.<br/><br/>Puedes volver a instalar <span style="color:#01cea2">Subsonic</span> en cualquier momento, sin embargo, la configuración se restablecerá a la predeterminada.';
$L['SYNCTHING_UNINSTALL'] = 'Estás a punto de desinstalar <span style="color:#01cea2">Syncthing</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.<br/><br/>Puedes volver a instalar <span style="color:#01cea2">Syncthing</span> en cualquier momento, sin embargo, la configuración se restablecerá a la predeterminada.';
$L['TAUTULLI_UNINSTALL'] = 'Estás a punto de desinstalar <span style="color:#01cea2">Tautulli</span> de tu sistema.<br/><br/>Esto eliminará por completo todas las configuraciones de tu biblioteca ... esta acción es irreversible.<br/><br/>Puedes volver a instalar <span style="color:#01cea2">Tautulli</span> en cualquier momento, sin embargo, la configuración se restablecerá a la predeterminada.';
$L['THELOUNGE_UNINSTALL'] = 'Estás a punto de desinstalar <span style="color:#01cea2">TheLounge</span> de tu sistema.<br/><br/>Esto eliminará por completo todas las configuraciones de tu biblioteca ... esta acción es irreversible.<br/><br/>Puedes volver a instalar <span style="color:#01cea2">TheLounge</span> en cualquier momento, sin embargo, la configuración se restablecerá a la predeterminada.';
$L['TRANSMISSION_UNINSTALL'] = 'Estás a punto de desinstalar <span style="color:#01cea2">Transmission</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.<br/><br/>Puedes volver a instalar <span style="color:#01cea2">Transmission</span> en cualquier momento, sin embargo, la configuración se restablecerá a la predeterminada.';
$L['UNIFI_UNINSTALL'] = 'Estás a punto de desinstalar <span style="color:#01cea2">UniFi</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.<br/><br/>Puedes volver a instalar <span style="color:#01cea2">UniFi</span> en cualquier momento, sin embargo, la configuración se restablecerá a la predeterminada.';
$L['UNPACKERR_UNINSTALL'] = 'Estás a punto de desinstalar <span style="color:#01cea2">Unpackerr</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.<br/><br/>Puedes volver a instalar <span style="color:#01cea2">Unpackerr</span> en cualquier momento, sin embargo, la configuración se restablecerá a la predeterminada.';
$L['WEBCONSOLE_UNINSTALL'] = 'Estás a punto de desinstalar <span style="color:#01cea2">Web Console (ttyd)</span> de tu sistema.<br/><br/>Puedes volver a instalar <span style="color:#01cea2">Web Console (ttyd)</span> en cualquier momento.';
$L['X2GO_UNINSTALL'] = 'Estás a punto de desinstalar <span style="color:#01cea2">x2go</span> de tu sistema.<br/><br/>Esto eliminará por completo <span style="color:#01cea2">x2goserver</span> y el entorno de escritorio <span style="color:#01cea2">xfce4</span> desde tu sistema.';
$L['XTEVE_UNINSTALL'] = 'Estás a punto de desinstalar <span style="color:#01cea2">xTeVe</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.<br/><br/>Puedes volver a instalar <span style="color:#01cea2">xTeVe</span> en cualquier momento, sin embargo, la configuración se restablecerá a la predeterminada.';
$L['ZNC_UNINSTALL'] = 'Estás a punto de desinstalar <span style="color:#01cea2">ZNC</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.<br/><br/>Puedes volver a instalar <span style="color:#01cea2">ZNC</span> en cualquier momento, sin embargo, la configuración se restablecerá a la predeterminada.';

/* **********************************
 * 3.2.3 - app reinstall
 ************************************/
$L['AIRSONIC_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2">Airsonic</span> de su sistema.<br/><br/>Esto eliminará completamente todas sus configuraciones y ajustes... esta acción es irreversible.';
$L['AUTOBRR_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2">Autobrr</span> de su sistema.<br/><br/>Esto eliminará por completo todas sus configuraciones y ajustes... esta acción es irreversible.';
$L['AUTODL_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2">AutoDL-iRSSi</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.';
$L['AUTOSCAN_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2">Autoscan</span> de su sistema.<br/><br/>Esto eliminará completamente todas sus configuraciones y ajustes... esta acción es irreversible.';
$L['BAZARR_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2">Bazarr</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.';
$L['BAZARR4K_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2">Bazarr4K</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.';
$L['BBR_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2">BBR</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.';
$L['BTSYNC_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2">BitTorrent Sync</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.';
$L['CALIBRE_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2">Calibre Sync</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.';
$L['COUCHPOTATO_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2">CouchPotato</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.';
$L['CSF_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2">Config Server Firewall (CSF)</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.';
$L['DELUGE_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2">Deluge</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.';
$L['DUPLICATI_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2">Duplicati</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.';
$L['EMBY_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2">Emby</span> de tu sistema.<br/><br/>Esto eliminará por completo todas las configuraciones y carpetas compartidas ... esta acción es irreversible.';
$L['FAIL2BAN_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2">Fail2Ban</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.';
$L['FILEBOT_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2">FileBot</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.';
$L['FILEBROWSER_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2">Filebrowser</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.';
$L['FLARESOLVERR_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2">FlareSolverr</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.';
$L['FLEXGET_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2">FlexGet</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.';
$L['FLOOD_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2">Flood</span> de tu sistema.<br/><br/>Esto eliminará por completo todas las configuraciones y carpetas compartidas ... esta acción es irreversible.';
$L['HEADPHONES_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2">Headphones</span> de tu sistema.<br/><br/>Esto eliminará por completo todas las configuraciones y carpetas compartidas ... esta acción es irreversible.';
$L['JACKETT_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2">Jackett</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.';
$L['JDOWNLOADER_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2">JDownloader</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.';
$L['JELLYFIN_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2">Jellyfin</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.';
$L['JELLYSEERR_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2">Jellyseerr</span> de tu sistema.<br/><br/>Esto eliminará por completo todas las configuraciones de tu biblioteca ... esta acción es irreversible.';
$L['KAVITA_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2">Kavita</span> de tu sistema.<br/><br/>Esto eliminará por completo todas las configuraciones de tu biblioteca ... esta acción es irreversible.';
$L['KOMGA_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2">Komga</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.';
$L['LAZYLIBRARIAN_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2"> LazyLibrarian </span> de su sistema.<br/><br/>Esto eliminará por completo todas las configuraciones ... esta acción es irreversible.';
$L['LETSENCRYPT_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2">Let\'s Encrypt</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.';
$L['LIDARR_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2">Lidarr</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.';
$L['MEDUSA_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2">Medusa</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.';
$L['MYLAR3_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2"> Mylar3 </span> de su sistema.<br/><br/>Esto eliminará por completo todas las configuraciones ... esta acción es irreversible.<br/><br/>Puede reinstalar <span style="color:#01cea2"> Mylar3 </span> en cualquier momento, sin embargo, sus ajustes de configuración se restablecerán a los valores predeterminados.';
$L['NETDATA_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2">Netdata</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.';
$L['NEXTCLOUD_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2">NextCloud</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.';
$L['NOTIFIARR_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2">Notifiarr</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.';
$L['NOVNC_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2">noVNC</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.';
$L['NZBGET_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2">NZBGet</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.';
$L['NZBHYDRA_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2">NZBHydra</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.';
$L['NZBHYDRA2_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2">NZBHydra2</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.';
$L['OMBI_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2">Ombi</span> de tu sistema.<br/><br/>Esto eliminará por completo todas las configuraciones de tu biblioteca ... esta acción es irreversible.';
$L['OVERSEERR_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2">Overseerr</span> de tu sistema.<br/><br/>Esto eliminará por completo todas las configuraciones de tu biblioteca ... esta acción es irreversible.';
$L['OVPN_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2">OpenVPN</span> de tu sistema.<br/><br/>Esto eliminará por completo todas las configuraciones de tu biblioteca ... esta acción es irreversible.';
$L['PHPMYADMIN_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2">phpMyAdmin</span> de tu sistema.<br/><br/>Esto eliminará completamente toda la configuración de la base de datos de phpmyadmin ... esta acción es irreversible.';
$L['PLEX_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2">Plex Media Server</span> de tu sistema.<br/><br/>Esto eliminará por completo todas las configuraciones de tu biblioteca ... esta acción es irreversible.';
$L['PROWLARR_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2">Prowlarr</span> de tu sistema.<br/><br/>Esto eliminará por completo todas las configuraciones de tu biblioteca ... esta acción es irreversible.';
$L['PYLOAD_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2">PyLoad</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.';
$L['QBITTORRENT_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2">QBittorrent</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.';
$L['QUASSEL_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2">Quassel</span> de tu sistema.<br/><br/>Esto eliminará por completo <span style="color:#01cea2">Quassel</span> y toda sus configuraciones y el backlogs guardado de tu sistema.';
$L['QUOTA_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2">Quotas</span> de tu sistema.<br/><br/>Esto eliminará completamente las cuotas de usuario y cualquier configuración asociada con ello.';
$L['RADARR_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2">Radarr</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.';
$L['RADARR4K_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2">Radarr4K</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.';
$L['RAPIDLEECH_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2">Rapidleech</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.';
$L['RCLONE_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2">RClone</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.';
$L['READARR_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2">Readarr</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.';
$L['REQUESTRR_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2">Requestrr</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.';
$L['RTORRENT_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2">rTorrent</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.';
$L['RUTORRENT_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2">ruTorrent</span> fde tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.';
$L['SABNZBD_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2">SABnzbd</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.';
$L['SEEDCROSS_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2">SeedCross</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.';
$L['SICKCHILL_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2">SickChill</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.';
$L['SICKGEAR_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2">SickGear</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.';
$L['SONARR_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2">Sonarr</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.';
$L['SONARR4K_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2">Sonarr4K</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.';
$L['SUBSONIC_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2">Subsonic</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.';
$L['SYNCTHING_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2">Syncthing</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.';
$L['TAUTULLI_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2">Tautulli</span> de tu sistema.<br/><br/>Esto eliminará por completo todas las configuraciones de tu biblioteca ... esta acción es irreversible.';
$L['THELOUNGE_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2">TheLounge</span> de tu sistema.<br/><br/>Esto eliminará por completo todas las configuraciones de tu biblioteca ... esta acción es irreversible.';
$L['TRANSMISSION_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2">Transmission</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.';
$L['UNIFI_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2">UniFi</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.';
$L['UNPACKERR_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2">Unpackerr</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.';
$L['WEBCONSOLE_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2">Web Console (ttyd)</span> de tu sistema.<br/><br/>Puedes volver a instalar <span style="color:#01cea2">Web Console (ttyd)</span> en cualquier momento.';
$L['X2GO_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2">x2go</span> de tu sistema.<br/><br/>Esto eliminará por completo <span style="color:#01cea2">x2goserver</span> y el entorno de escritorio <span style="color:#01cea2">xfce4</span> desde tu sistema.';
$L['XTEVE_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2">xTeVe</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.';
$L['ZNC_REINSTALL'] = 'Está a punto de reinstalar <span style="color:#01cea2">ZNC</span> de tu sistema.<br/><br/>Esto eliminará completamente todas las configuraciones ... esta acción es irreversible.';

/* **********************************
 * 3.2.4 - toggles & tooltips
 ************************************/
$L['APP_OPTIONS'] = 'Opciones de la aplicación';
$L['NGINX_OPTIONS'] = 'Opciones de NGinx';
$L['CARD_VIEW'] = 'Vista de la tarjeta';
$L['LIST_VIEW'] = 'Vista de la lista';
$L['CLI'] = 'Solo Consola Web';
$L['COMPAT_E'] = 'Error de compatibilidad';
$L['CURRENTLY_INSTALLED_NOTICE'] = 'Parece que tiene acceso a una aplicación que solo puede instalar un usuario a la vez. Hable con el administrador del sistema para obtener más información sobre su disponibilidad.';
$L['CURRENTLY_INSTALLED_TITLE'] = 'Alguien tiene esta aplicación instalada actualmente';
$L['DEL1_TOOLTIP'] = 'It looks like you are running on Ubuntu 20.04. Deluge v1 will not run on this Distro. Please consider installing Deluge v2 to continue as Deluge v2 runs on updated libtorrent1.2+ and python3+.';
$L['DEL2_TOOLTIP'] = 'It looks like qBittorrent is currently installed. Deluge v2 will not work with qBittorrent installed. Please either remove qBittorrent or install Deluge v1 to continue.';
$L['DEL2XENIAL_TOOLTIP'] = 'It looks like you are running on Ubuntu 16.04. Deluge v2 will not run on this Distro. Please consider installing Deluge v1 to continue.';
$L['EMBY_JELLYFIN_COMPAT_MESSAGE'] = 'Jellyfin instalado';
$L['ENTER_MOUNT_POINT'] = 'Por favor ingrese su punto de montaje primario';
$L['FAIL2BAN_TOOLTIP'] = 'Acceda a esta función desde ssh escribiendo:<br><code>qb install fail2ban</code>';
$L['JELLYFIN_EMBY_COMPAT_MESSAGE'] = 'Emby instalado';
$L['MEDUSA_INSTALLED'] = 'Medusa Instalada';
$L['OVPN_TOOLTIP'] = 'Acceda a esta función desde tu consola web escribiendo:<br><code>qb install vpn -u USER</code>';
$L['PRIMARY_MOUNTM'] = 'Montaje Primario';
$L['QBIT_TOOLTIP'] = 'Parece que Deluge 2 está instalado actualmente. qBittorrent no funcionará con Deluge 2 instalado. Elimine Deluge 2 o instale Deluge 1 para continuar.';
$L['QUOTAS_FSTAB'] = 'Edita tu fstab';
$L['QUOTAS_HELP'] = 'Para más información sobre cómo instalar cuotas, <a href="https://nullrefer.ir/?https://quickbox.io/knowledge-base/how-to-install-quotas/" rel="noopener nofollow" target="_blank"><strong>por favor lea estas F.A.Q primero</strong></a>.';
$L['QUOTAS_TOOLTIP'] = 'Agregue lo siguiente en lugar de <code class="language-bash">defaults</code> en su punto de montaje principal para continuar';
$L['RCLONE_ADMIN_TOOLTIP'] = 'Acceda a esta función desde ssh escribiendo:<br><code>qb install rclone -u USER [-o encrypted]</code><br>Consulte <code>qb help rclone</code> para obtener más opciones.';
$L['RCLONE_USER_TOOLTIP'] = 'Póngase en contacto con un administrador del sistema para tener esto instalado.';
$L['REMOVE_MEDUSA_FIRST'] = 'Desinstala primero Medusa para instalar esta aplicación.';
$L['REMOVE_SICKCHILL_FIRST'] = 'Desinstala primero SickChill para instalar esta aplicación.';
$L['REMOVE_SICKGEAR_FIRST'] = 'Desinstala primero SickGear para instalar esta aplicación.';
$L['SICKCHILL_INSTALLED'] = 'Sickchill Instalada';
$L['SICKGEAR_INSTALLED'] = 'SickGear Instalada';
$L['UNIFI_SSL_TOOLTIP'] = 'Si ya tiene un dominio establecido en la raíz de su sitio, así como un certificado de cifrado ya generado para el dominio, seleccione esta opción.';
$L['ZNC_TOOLTIP'] = 'Acceda a esta función desde ssh escribiendo:<br><code>qb install znc -u USER</code>';

/* **********************************
 * UI - app install/reinstall modals
 *
 * calibre install/reinstall modal
 ************************************/
$L['CALIBRE_INSTALL_TITLE'] = 'Instalación de Calibre';
$L['CALIBRE_REINSTALL_TITLE'] = 'Reinstalación de Calibre';
$L['CALIBRE_INSTALL_MESSAGE'] = 'Tiene la opción de especificar una ruta de directorio personalizada para su biblioteca Calibre. Si la ruta elegida no existe actualmente, se generará automáticamente para usted.<br>Alternativamente, si prefiere usar la ruta predeterminada, simplemente deje el campo en blanco y la biblioteca se ubicará en:<br><code>/home/' . $username . '/.config/Calibre/library</code>';

/* **********************************
 * filebot install/reinstall modal
 ************************************/
$L['FILEBOT_INSTALL_TITLE'] = 'Instalar Filebot';
$L['FILEBOT_REINSTALL_TITLE'] = 'Reinstalar Filebot';
$L['PROCESS_DELUGE'] = '¿Procesar descargas para Deluge?';
$L['PROCESS_DELUGE_TOOLTIP'] = 'Establezca esto en Sí para procesar descargas para Deluge.<br>Vea cómo implementarlo en las notas del script ubicadas en:<br><code>/home/' . $username . '/.config/Filebot/deluge-postprocess.sh</code>';
$L['CUSTOM_PATH_TOOLTIP_NO_RCLONE'] = 'Establezca esto en Sí para ingresar la ruta a su biblioteca multimedia.<br>La ruta predeterminada es:<br><code>/home/' . $username . '/Media</code>';
$L['CUSTOM_PATH_TOOLTIP_RCLONE'] = 'Establezca esto en Sí para ingresar la ruta a su biblioteca multimedia.<br>La ruta predeterminada es:<br><code>/home/' . $username . '/rclone/cache</code>';
$L['PROCESS_NZBGET'] = '¿Procesar descargas para NZBGet?';
$L['PROCESS_NZBGET_TOOLTIP'] = 'Establezca esto en Sí para procesar descargas para NZBGet.<br>Vea cómo implementarlo en las notas del script ubicadas en:<br><code>/home/' . $username . '/.config/NZBGet/scripts/nzbget-postprocess.sh</code>';
$L['PROCESS_RTORRENT'] = '¿Procesar descargas para rTorrent?';
$L['PROCESS_SABNZBD'] = '¿Procesar descargas para SABnzbd?';
$L['CUSTOM_MEDIA_PATH'] = '¿Usar una ruta personalizada a la biblioteca multimedia?';
$L['FILEBOT_DEFAULT_PATH'] = 'ejemplo';
$L['FILEBOT_LICENSE'] = 'Licencia de Filebot';

/* **********************************
* jdownloader install/reinstall modal
 ************************************/
$L['JDOWNLOADER_INSTALL_TITLE'] = 'Instalación de JDownloader';
$L['JDOWNLOADER_REINSTALL_TITLE'] = 'Reinstalación de JDownloader';
$L['JDOWNLOADER_EMAIL'] = 'Dirección de correo electrónico de la cuenta JDownloader';
$L['JDOWNLOADER_PASSWORD'] = 'Contraseña de la cuenta JDownloader';
$L['JDOWNLOADER_INSTALL_PATH_MESSAGE'] = 'Tiene la opción de especificar una ruta de directorio personalizada para sus descargas de JDownloader. Si la ruta elegida no existe actualmente, se generará automáticamente.<br>Como alternativa, si prefiere utilizar la ruta predeterminada, simplemente deje el campo en blanco y la biblioteca se ubicará en:<br><code>/home/' . $username . '/Downloads</code>';

/* **********************************
* kavita install/reinstall modal
 ************************************/
$L['KAVITA_INSTALL_TITLE'] = 'Instalación de Kavita';
$L['KAVITA_REINSTALL_TITLE'] = 'Reinstalación de Kavita';
$L['KAVITA_INSTALL_MESSAGE'] = 'Tiene la opción de especificar una ruta de directorio personalizada para su biblioteca Kavita. Si la ruta elegida no existe actualmente, se generará automáticamente.<br>Como alternativa, si prefiere utilizar la ruta predeterminada, simplemente deje el campo en blanco y la biblioteca se ubicará en:<br><code>/home/' . $username . '/.config/Kavita/library</code>';

/* **********************************
 * plex install/reinstall modal
 ************************************/
$L['PLEX_CLAIM_MESSAGE'] = '<p style="font-size:12px">Para reclamar su Plex Media Server, ya debe tener una cuenta e iniciar sesión para obtener el código de reclamo de: <a href="https://www.plex.tv/claim/" rel="noopener nofollow" target="_blank" style="color:var(--infoColor);"><strong>https://www.plex.tv/claim/</strong></a></p><div class="alert alert-light-info fade show border-0 mb-2 mt-0" role="alert" style="font-size:12px;color:var(--mainFontColor)"><strong style="color:var(--alertLightInfoColor)">NOTA:</strong> Se recomienda utilizar el botón "Copiar al portapapeles" en la pantalla del código de reclamo para asegurarse inserción adecuada ya que el código de reclamación distingue entre mayúsculas y minúsculas.</div>';
$L['PLEX_CLAIM_TITLE'] = 'Instalación del servidor Plex Media';
$L['PLEX_CLAIM_TOKEN'] = 'Código de reclamación de Plex';
$L['PLEX_DATA_PATH'] = '¿Usar una ruta personalizada para el directorio de datos?';
$L['PLEX_DATA_PATH_TOOLTIP'] = 'Tiene la opción de especificar una ruta de datos personalizada para su instalación de Plex. Si la ruta elegida no existe actualmente, se generará automáticamente para usted.<br>Alternativamente, si prefiere usar la ruta predeterminada, simplemente mantenga la selección como \'No\', y el directorio de datos será ubicado en:<br><code>/home/' . $username . '/.config/\'Plex Media Server\'</code>';
$L['PLEX_DOMAIN'] = '¿Establecer dominio para Plex Media Server?';
$L['PLEX_DOMAIN_TOOLTIP'] = 'Si ya tiene un dominio y los registros DNS configurados para un subdominio de Plex, seleccione \'Sí\' para ingresar su subdominio de Plex.<br>Esta opción configurará su Plex Media Server para trabaje a la perfección con su dominio Plex personalizado. Incluye configurar el proxy inverso Nginx esencial e instalar el certificado SSL para su dominio para garantizar un acceso seguro.';

/* **********************************
 * 3.2.5 - service control
 ************************************/
$L['ACTIVE_STATUS'] = 'Activa (corriendo)';
$L['APP_KEY'] = 'API Key';
$L['APP_PORT'] = 'Puerto';
$L['APP_STATUS'] = 'Estado';
$L['INACTIVE_STATUS'] = 'Inactiva (muerta)';

/* **********************************
 * 3.2.6 - rclone specific toggles
 ************************************/
$L['ACTIVE_MOUNTED'] = 'activo (montado)';
$L['INACTIVE_NOTMOUNTED'] = 'muerto (no montado)';
$L['RCLONE_LOG_VIEWER'] = 'RClone move.log';
$L['RCLONE_OPTIONS'] = 'Opciones de clonación';
$L['RCLONE_COMMAND_CENTER'] = 'Centro de Comando RClone';
$L['RCLONE_STATUS'] = 'RClone Status';
$L['RCLONE_UPLOAD_MESSAGE'] = 'RClone está trabajando actualmente en segundo plano para cargar sus datos a gdrive. Durante este tiempo, verá un bloqueo establecido para verificar que su proceso ha comenzado. Este bloqueo se eliminará una vez que el proceso se haya completado. Siéntase libre de cerrar esta ventana emergente en cualquier momento.<br/><br/><div class="alert alert-notice" style="color:#fff"><strong>NOTA: </strong> La carga se ejecuta automáticamente a través de un cronjob todas las noches a las 03:12 hora del servidor.</div>';
$L['RCLONE_UPLOAD_VIEWER'] = 'Subir RClone';
$L['RCMOUNT_STATUS'] = 'Estado de MergerFS';
$L['RCMOUNT_WHERE'] = 'Ubicación de montaje';
$L['CLOUD_MANAGEMENT'] = 'Software en la nube';
$L['RCLONE_MOUNT_INFO'] = 'Información de montaje RClone';
$L['RCLONE MOUNT CHECK_PROCESS'] = 'Los valores de porcentaje de espacio se están calculando actualmente en segundo plano. Vuelva a consultar más tarde para ver los resultados actualizados.';

/* **********************************
 * 3.3 - DASHBOARD WIDGETS
 *
 * 3.3.1 - disk status widget
 ************************************/
$L['DD_DELUGE'] = 'Deluge';
$L['DD_NZBGET'] = 'NZBGet';
$L['DD_QBITTORRENT'] = 'qBittorrent';
$L['DD_RTORRENT'] = 'rTorrent';
$L['DD_SABNZBD'] = 'SABnzbd';
$L['DD_TRANSMISSION'] = 'Transmission';
$L['DELUGE_TORRENTS'] = 'torrents cargados en Deluge';
$L['DISK_%_1'] = 'Has usado el';
$L['DISK_%_2'] = 'del espacio total de disco';
$L['DISK_SPACE'] = 'Tamaño de Disco';
$L['FREE'] = 'Disponible';
$L['QBITTORRENT_TORRENTS'] = 'torrents cargados qBittorrent';
$L['RT_TORRENTS'] = 'torrents cargados en rTorrent';
$L['NO_CLIENTS'] = 'Actualmente no hay clientes torrent o nzb instalados';
$L['SIZE'] = 'Tamaño';
$L['CURRENT_USERS_ONLINE'] = 'Usuarios Actualmente Conectados';
$L['THERE_ARE'] = 'Hay';
$L['TRANSMISSION_TORRENTS'] = 'torrents cargados en Transmission';
$L['USED'] = 'Usado';
$L['YOUR_DISK_STATUS'] = 'El estado de tus discos';
$L['NZBGET_NZB'] = 'nzb cargados en NZBGet';
$L['SABNZBD_NZB'] = 'Nzb cargados en SABnzbd';

/* **********************************
 * 3.3.2 - System Index v1 : bandwidth data widget
 ************************************/
$L['BANDWIDTH_DAILY'] = 'Diario';
$L['BANDWIDTH_DATA'] = 'Ancho de Banda';
$L['BANDWIDTH_HOURLY'] = 'Por hora';
$L['BANDWIDTH_LIVE'] = 'Actual';
$L['BANDWIDTH_MONTHLY'] = 'Mensual';
$L['datefmt_days_img'] = '%d';
$L['datefmt_days'] = '%d %B';
$L['datefmt_hours_img'] = '%l';
$L['datefmt_hours'] = '%l%p';
$L['datefmt_months_img'] = '%b';
$L['datefmt_months'] = '%B %Y';
$L['datefmt_top'] = '%d %B %Y';
$L['NETWORK'] = 'Red';
$L['DOWNLOAD'] = 'Descargar';
$L['UPLOAD'] = 'Subida';

/* **********************************
 * 3.3.3 - System Index v1 : server load widget
 ************************************/
$L['DAYS_L'] = 'días';
$L['HOURS_L'] = 'horas';
$L['MINUTES_L'] = 'min';
$L['SECONDS_L'] = 'seg';
$L['SERVER_LOAD'] = 'Utilización del Servidor';
$L['SL_TXT'] = 'Utilización promedio actual de tus servidores';
$L['UPTIME'] = 'Tiempo activo';

/* **********************************
 * 3.3.4 - System Index v1 : memory status widget
 ************************************/
$L['CACHED_MEMORY'] = 'Uso de Memoria Caché';
$L['CLEAR_CACHE'] = 'Limpiar Memoria Caché';
$L['CM_BUFFERS'] = 'El buffer está en';
$L['CM_USAGE'] = 'El uso de la memoria caché está es de';
$L['PHYSICAL_MEMORY'] = 'Uso de memoria física';
$L['PM_IDLE'] = 'libre';
$L['PM_USED'] = 'usado';
$L['REAL_MEMORY'] = 'Uso de Memoria Real';
$L['RM_FREE'] = 'Memoria real libre';
$L['RM_USAGE'] = 'Memoria real usada';
$L['SWAP_IDLE'] = 'Disponible';
$L['SWAP_TOTAL'] = 'Total';
$L['SWAP_USAGE'] = 'Uso de Swap';
$L['SWAP_USED'] = 'Usada';
$L['SWAP_ZONE'] = 'Tamaño de SWAP';
$L['SYSTEM_RAM_STATUS'] = 'Estado de RAM del Sistema';
$L['TOTAL_RAM'] = 'RAM del Sistema Total';
$L['TOTAL'] = 'Total';

/* **********************************
 * 3.3.5 - server activity widget
 ************************************/
$L['ACC_REQ_ACT'] = 'las cuentas requieren activación';
$L['GUESTS_ONLINE'] = 'invitados en línea';
$L['LAST_ACTIVE_ON'] = 'fue la última activa en';
$L['LOGGED_ON'] = 'iniciar sesión';
$L['MEMBERS'] = 'miembros';
$L['RECORD_ONLINE'] = 'Registrar usuarios en línea';
$L['THERE_ARE_AW'] = 'Hay';
$L['THERE_ARE_CURRENTLY'] = 'Hay actualmente';
$L['USERS_AND'] = 'usuarios y';
$L['USERS_LAST_VISIT'] = 'nuevos usuarios se han registrado desde su última visita';
$L['CLEAR'] = 'clara';

/* ********************************************************************************
 * #4 PAGES
 *
 * 4.1 - START SCREEN FORMS (login/forgot pass/register/account)
 *
 * 4.1.1 - LOGIN
 ************************************/
$L['CONFIRM_PASS_FIELD_PLACE'] = 'Confirme su dirección de correo electrónico';
$L['CREATE_ACCOUNT'] = 'Crear una cuenta';
$L['REMEMBER_ME'] = 'Recuérdame';
$L['FORGOT_PASS'] = '¿Olvidaste tu contraseña?';
$L['LOG_IN'] = 'Iniciar sesión';
$L['LOGIN_ACCOUNT'] = 'Inicie sesión en su cuenta para continuar.';
$L['LOGIN_USERNAME_INVALID'] = 'El inicio de sesión no es válido. Verifique su nombre de usuario y vuelva a intentarlo';
$L['LOGIN_PASSWORD_INVALID'] = 'El inicio de sesión no es válido. Por favor, compruebe su contraseña y vuelva a intentarlo';
$L['LOGIN_MISSING_USERNAME'] = 'Nombre de usuario no ingresado';
$L['LOGIN_MISSING_PASSWORD'] = 'Contraseña no ingresada';
$L['PASS_FIELD_INVALID'] = 'Proporcione su contraseña.';
$L['PASS_FIELD_PLACE'] = 'Por favor escriba su contraseña.';
$L['PASS_FIELD_VALID'] = 'Contraseña proporcionada, validación lista.';
$L['REGISTRATION_DISABLED'] = 'El registro está deshabilitado actualmente.';
$L['SIGN_IN'] = 'Registrarse';
$L['UNREGISTERED'] = '¿No está registrado?';
$L['USER_FIELD_INVALID'] = 'Proporcione su nombre de usuario.';
$L['USER_FIELD_PLACE'] = 'Escriba su nombre de usuario.';
$L['USER_FIELD_VALID'] = 'Nombre de usuario proporcionado, validación lista.';
$L['ACCOUNT_BANNED'] = 'Su cuenta ha sido bloqueada.<br/>Por favor, póngase en contacto con un administrador del sistema.';
$L['ACCOUNT_DISABLED'] = 'Su cuenta no está activada o está deshabilitada.<br/>Si cree que se trata de un problema, comuníquese con un administrador del sistema.';
$L['ACCOUNT_INACTIVE_ADMIN'] = 'Su cuenta no ha sido activada por un administrador.';
$L['ACCOUNT_INACTIVE_EMAIL'] = 'Su cuenta no ha sido activada.<br/>Por favor revise su correo electrónico para el enlace de activación.';
$L['IP_BANNED'] = 'Su dirección IP ha sido prohibida.<br/>Por favor, póngase en contacto con un administrador del sistematrator.';

/* **********************************
 * 4.1.2 - FORGOT PASSWORD
 ************************************/
$L['EMAIL_FIELD_INVALID'] = 'Proporcione su correo electrónico';
$L['EMAIL_FIELD_PLACE'] = 'Escriba su dirección de correo electrónico';
$L['EMAIL_FIELD_VALID'] = 'Email proporcionado, validación lista.';
$L['PASS_GENERATED'] = '¡Nueva contraseña generada!';
$L['PASS_GENERATED_INFO'] = 'Su nueva contraseña ha sido generada y enviada al correo electrónico asociado con su cuenta.';
$L['PASS_GENERATED_FAIL'] = '¡Error en la nueva contraseña!';
$L['PASS_GENERATED_FAIL_INFO'] = 'Hubo un error al enviarle el correo electrónico con la nueva contraseña, por lo que su contraseña no ha sido cambiada.';
$L['RECOVER_INFO'] = '¡Ingrese su correo electrónico y se le enviarán las instrucciones!';
$L['RECOVER'] = 'Recuperación de contraseña';
$L['PASSWORD_RESET'] = 'Restablecimiento de contraseña';
$L['CONFIRM_PASSWORD'] = 'Confirmar contraseña';

/* **********************************
 * 4.1.3 - REGISTER
 ************************************/
$L['ACCOUNT_CREATED'] = 'su cuenta ha sido creada. ';
$L['CAN_LOGIN'] = 'para su registro. Ahora puede iniciar sesión';
$L['CREATED_ADM_ACT'] = 'Sin embargo, este foro requiere la activación de la cuenta por parte de un administrador. Se le informará por correo electrónico cuando su cuenta haya sido activada';
$L['CREATED_CHECK_EMAIL'] = 'Consulte su correo electrónico para obtener más información';
$L['CREATED_EMAIL_ACT'] = 'Sin embargo, este foro requiere la activación de una cuenta. Se ha enviado una clave de activación a la dirección de correo electrónico que proporcionó';
$L['EMAIL_EMPTY'] = 'Correo electrónico no ingresado';
$L['EMAIL_INVALID'] = 'El correo electrónico no es válido';
$L['EMAIL_MATCH'] = 'Las direcciones de correo electrónico no coinciden';
$L['EMAIL_TAKEN'] = 'Dirección de correo electrónico ya registrada';
$L['RCONF_EMAIL_FIELD_INVALID'] = 'Este correo electrónico no coincide con el ingresado anteriormente. Inténtalo de nuevo.';
$L['RCONF_EMAIL_FIELD_VALID'] = 'Correspondencia de correos electrónicos, validación lista.';
$L['RCONF_PASS_FIELD_INVALID'] = 'Esta contraseña no coincide con la ingresada anteriormente. Inténtalo de nuevo.';
$L['RCONF_PASS_FIELD_VALID'] = 'Coincidencia de contraseñas, validación lista.';
$L['REG_C_DISABLED_INFO1'] = 'pero el registro en este sitio está deshabilitado actualmente';
$L['REG_C_DISABLED_INFO2'] = 'Vuelva a intentarlo más tarde o comuníquese con el propietario del servidor';
$L['REG_C_DISABLED'] = 'El registro está deshabilitado actualmente';
$L['REG_DISABLED_INFO'] = 'Lo sentimos, pero el registro está deshabilitado actualmente. Porfavor intente más tarde.';
$L['REG_DISABLED'] = 'Registro deshabilitado';
$L['REG_FORM_INFO'] = 'Por favor complete el siguiente formulario para crear una cuenta';
$L['REGISTERED_TXT'] = '¡Registrado!';
$L['REG_FAILED'] = 'Registro fallido';
$L['REG_ERROR_INFO_1'] = 'Lo sentimos, pero ha ocurrido un error y su registro para el nombre de usuario ';
$L['REG_ERROR_INFO_2'] = ' no se pudo completar. Porfavor intente más tarde.';
$L['SORRY'] = 'Lo sentimos';
$L['THANKS'] = 'Gracias';
$L['USERNAME_EMPTY'] = 'Nombre de usuario no ingresado';
$L['USERNAME_BELOW'] = 'Nombre de usuario a continuación';
$L['USERNAME_ABOVE'] = 'Nombre de usuario arriba';
$L['CARACTERES'] = 'caracteres';
$L['USERNAME_REQUIREMENTS'] = 'El nombre de usuario no cumple con los requisitos';
$L['USERNAME_WORD_RESERVED'] = 'Palabra reservada del nombre de usuario';
$L['USERNAME_TAKEN'] = 'Nombre de usuario ya en uso';
$L['USERNAME_DISALLOWED'] = 'Nombre de usuario no permitido';
$L['REG_IP_BANNED'] = 'Dirección IP prohibida';
$L['PASSWORD_EMPTY'] = 'Contraseña no ingresada';
$L['PASSWORD_SHORT'] = 'Contraseña demasiado corta';
$L['PASSWORD_LONG'] = 'Contraseña demasiado larga';
$L['PASSWORD_MATCH'] = 'Las contraseñas no coinciden';
$L['QUOTA_EMPTY'] = 'Cuota de disco no ingresada';

/* **********************************
 * 4.1.4 - ACCOUNT
 ************************************/
$L['ADMIN_EDIT_ACC'] = 'Editar cuenta Admin';
$L['EDIT_ACCOUNT'] = 'Editar cuenta';
$L['USER_LINKS'] = 'User Links';
$L['ADMIN_LINKS'] = 'Admin Links';
$L['Q_APP_DASH'] = 'Panel de Aplicaciones QuickBox';
$L['Q_SYS_DASH'] = 'Panel de Sistema QuickBox';
$L['RESET_PASS'] = 'Restablecer contraseña';
$L['RESET_PASSWORD'] = 'Reset your password';
$L['USER_PROFILE'] = 'Perfil de usuario';
$L['PWD_CHANGE'] = 'Contraseña cambiada';
$L['EMAIL_CHANGE'] = 'Correo electrónico modificado';

/* **********************************
 * 4.1.4.1 - quotes
 ************************************/
$L['DAYUM'] = 'Super!';
$L['HEY'] = 'Hola';
$L['HOW_AWESOME'] = '¿Cómo es que te has vuelto tan genial?';
$L['LOOK_GOOD'] = '¡Que bien!';
$L['QUICKBOX_DEDICATION'] = 'nos encanta tu dedicación a QuickBox!';
$L['SO_GLAD'] = 'Que bueno que estés aquí';
$L['WITHOUT_YOU'] = '¿Qué haría sin ti?';

/* **********************************
 * 4.1.4.2 - edit account modal
 ************************************/
$L['CONFIRM_NEW_PASS_INFO'] = 'Please confirm your new password.';
$L['CURRENT_PASS'] = 'Current Password';
$L['NEW_EMAIL'] = 'New E-mail Address';

/* **********************************
 * 4.1.5 - SUMMARY
 ************************************/
$L['AWESOME'] = 'Asombroso';
$L['WITH_PASSWORD'] = 'con contraseña';
$L['USER_ADDED_TO_DB'] = 'ha sido agregado a la base de datos';
$L['RETURN_PREVIOUS'] = 'Volver a la página anterior';
$L['REGI_FAIL'] = 'Registro fallido';
$L['REGI_FAIL_ERR1'] = 'Lo sentimos, pero ha ocurrido un error y su registro para el nombre de usuario';
$L['REGI_FAIL_ERR2'] = 'no se pudo completar';
$L['REGI_FAIL_ERR3'] = 'Por favor inténtalo de nuevo';
$L['REGI_FAIL_ERR_FOUND'] = 'error(es) encontrado(s)';

/* **********************************
 * 4.2 - SETTINGS
 *
 * 4.2.1 - GENERAL SETTINGS
 ************************************/
$L['ACCOUNT_PAGE'] = 'Página de Cuenta';
$L['ACTIVATION_IP'] = 'IP de activación';
$L['ACTIVATION_NEED_D_DO'] = '¡Hazlo aquí!';
$L['ACTIVATION_NEED_D'] = '¿Necesita desactivar?';
$L['ACTIVATION_NEED_G_GET'] = '¡Consigue uno aquí!';
$L['ACTIVATION_NEED_G'] = '¿Necesita una clave API?';
$L['ACTIVATION_TIME'] = 'Tiempo de activación';
$L['ADD_DASH_SETTINGS'] = 'Configuración adicional del panel';
$L['ADMIN_HOME'] = 'Página de Inicio';
$L['API_ACTIVE'] = 'Activa';
$L['API_KEY'] = 'Clave de Licencia';
$L['API_NOT_ACTIVE'] = 'No Activa';
$L['API_PLACE'] = 'Ingrese la clave API aquí...';
$L['API_SETTINGS'] = 'Control de Licencia';
$L['API_STATUS'] = 'Estado de la API';
$L['API'] = 'Licencia';
$L['CONF_SETTINGS'] = 'Ajustes de Configuración';
$L['DASH_URL_SETTINGS'] = 'Configuración de la URL del panel';
$L['DEFAULT_PAGE'] = 'Página de destino';
$L['DISK_MOUNT'] = 'Montaje de Disco';
$L['EDIT_GEN_SETTINGS'] = 'Editar Configuración General del Sitio';
$L['EMAIL_FROM_ADDR'] = 'E-mail del Sitio';
$L['EMAIL_FROM_NAME'] = 'E-mail de (Nombre)';
$L['EMAIL_SETTINGS'] = 'Configuración de correo electrónico';
$L['LOGIN_PAGE'] = 'Página de Inicio de Sesión';
$L['NET_ADAPTER'] = 'Interfaz de red';
$L['PHP_DATE_FORMAT'] = 'Formato de Fecha PHP';
$L['PHP_FORMAT_SETTINGS'] = 'Configuración de formato PHP';
$L['PHP_TIME_ZONE'] = 'Zona horaria de PHP';
$L['SITE_DESC'] = 'Descripción del Sitio';
$L['SITE_META_SETTINGS'] = 'Site Meta Settings';
$L['SITE_NAME'] = 'Nombre del Sitio';
$L['SITE_ROOT'] = 'Raíz del Sitio';
$L['SITE_NAME_TOOLTIP'] = 'El nombre del sitio debe tener menos de 40 caracteres y solo debe ser alfanumérico sin caracteres especiales (se aceptan espacios)';
$L['SITE_DESC_TOOLTIP'] = 'La descripción del sitio debe tener menos de 120 caracteres y ser alfanumérica sin caracteres especiales (se aceptan espacios)';
$L['EMAIL_FROM_NAME_TOOLTIP'] = 'De El nombre debe tener menos de 60 caracteres y solo debe ser alfanumérico sin caracteres especiales (se aceptan espacios)';
$L['SITE_ROOT_TOOLTIP'] = 'Ingrese la IP de su servidor o un dominio válido sin barra diagonal final. ejemplo: https://192.168.0.1 (o) https://somedomain.com';
$L['SITE_LOGO_COLLAPSED'] = 'Logotipo contraído';
$L['SITE_LOGO_FULL'] = 'Logotipo completo';
$L['SITE_LOGO_SETTINGS'] = 'Configuración del logotipo del sitio';
$L['SITE_LOGO_COLLAPSED_TOOLTIP'] = 'Este es el logotipo que se mostrará cuando la barra lateral esté contraída y se utilizará como icono de la pestaña del navegador.';
$L['SITE_LOGO_FULL_TOOLTIP'] = 'Este es el logotipo que se mostrará cuando se expanda la barra lateral.';

/* **********************************
 * 4.2.2 - EMAIL SETTINGS
 ************************************/
$L['SMTP_AUTH'] = 'Habilitar la autenticación SMTP';
$L['SMTP_SECURE'] = 'Habilite el cifrado SSL, TLS también se acepta con el puerto 465';
$L['MAIL_HOST'] = 'Configure el servidor SMTP para enviar';
$L['MAIL_PORT'] = 'Puerto TCP para conectarse';
$L['MAIL_USERNAME'] = 'Nombre de usuario SMTP';
$L['MAIL_PASS'] = 'Contraseña SMTP';

/* **********************************
 * 4.2.3 - SESSION SETTINGS
 ************************************/
$L['CHANGE_SESSION_SETTINGS'] = 'Cambiar configuración de sesiones.';
$L['COOKIE_EXPIRY'] = '\'Recuérdame\' Expiración de Cookies';
$L['COOKIE_PATH'] = 'Ruta de Cookies';
$L['DAYS'] = 'Días';
$L['GUEST_TIMEOUT'] = 'Tiempo de inactividad del invitado';
$L['MINUTES'] = 'Minutos';
$L['RESET_EXPIRY'] = 'Restablecer Caducidad al Iniciar Sesión';
$L['USER_TIMEOUT'] = 'Tiempo de inactividad del usuario';

/* **********************************
 * 4.2.4 - USER SETTINGS
 ************************************/
$L['ALLOW_MULTI_LOGINS'] = 'Inicios de sesión múltiples';
$L['ALLOW_MULTI_LOGINS_DESC'] = 'Esta opción permite inicios de sesión simultáneos desde varios dispositivos. Si está deshabilitado, se cerrará la sesión del usuario en todos los demás dispositivos cuando inicie sesión desde un nuevo dispositivo.';
$L['ALLOW_CONFIG_EDITING'] = 'Editores de configuración en el panel';
$L['ALLOW_CONFIG_EDITING_DESC'] = 'Esta opción permite editar los archivos de configuración desde el tablero. Si está desactivada, la opción para ver/editar configuraciones estará oculta.';
$L['ALLOW_MOUNT_INFO'] = 'Panel de visualización y adición de información de montaje';
$L['ALLOW_MOUNT_INFO_DESC'] = 'Esta opción permite ver y agregar información de la montura desde el tablero. Si está desactivada, la opción para ver/añadir información de montaje estará oculta.';
$L['BY_ADMIN'] = 'Por Admin (Configurar a continuación)';
$L['BY_USER'] = 'Por Usuario (Ver página de admin de usuarios)';
$L['CHANGE_USER_SETTINGS'] = 'Cambiar la configuración global de cuentas de usuario.';
$L['EXCLUDE_ADMINS'] = 'Excluir Administradores';
$L['EXCLUDE_REDIRECTED_ADMINS'] = 'Excluir a los Administradores de ser redirigidos.';
$L['GEN_USER_SETTINGSTINGS'] = 'Configuración General de Usuario';
$L['HOW_SET'] = '¿Como están configuradas?';
$L['INDIV_USER_HOME'] = 'Páginas de Usuario Individuales';
$L['INDIVIDUAL_USER_FOLDERS'] = 'Carpetas de Usuario Individuales';
$L['PATH_ADMIN'] = 'Ruta (Configurada por el Admin)';
$L['SITE_ROOT_RELATIVE'] = 'Relativo a la Raíz del Sitio';
$L['PATH_INFOS'] = '<p class="help-block">La ruta que elijas debería configurarse en relación con la carpeta de administración (que será tu sitio principal, establecida en la página de Configuración General, en el Panel de Control).
Por lo tanto, es muy probable que quieras volver una carpeta atrás, antes de elegir cualquier subcarpeta que crees para las páginas de usuario únicas. Usa <i>../</i> para retroceder una carpeta. Así, por ejemplo, si el panel de control de administración de tu sitio está aquí: <i>http://www.website.com/admin/</i> y las carpetas de usuarios están aquí - <i>http://www.website.com/users/</i> deberías establecer la configuración de la ruta a <i>../users/</i> junto con tu página única - entonces <i>../users/admin.php</i>.</p>
<p class="help-block">Wildcard disponible : <strong>%username% </strong>(por ejemplo, el usuario ha iniciado sesión) </p>';
$L['SETTING'] = 'Configuración';
$L['DESCRIPTION'] = 'Descripción';
$L['VALUE'] = 'Valor';

/* **********************************
 * 4.2.5 - SECURITY SETTINGS
 ************************************/
$L['BAN_IP_ADDRESS'] = 'Bloquear / Prohibir Direcciones IP';
$L['BAN_IP_INFO'] = 'ej. 192.168.0.1 sin los ceros iniciales';
$L['BAN_IP_REGISTER'] = 'Bloquear Dirección IP para Registrarse (o iniciar sesión)';
$L['BANNED_IP_ADDRESSES'] = 'Direcciones IP Bloqueadas';
$L['DISALLOW_USERNAME'] = 'Nombre de usuario no permitido';
$L['DISALLOW_USERNAMES'] = 'Nombres de usuario no permitidos';
$L['DISALLOWED_USERNAMES'] = 'Nombres de usuario no permitidos';
$L['PREVENT_USERNAMES'] = 'Prevenir registro de Nombres de Usuarios';

/* **********************************
 * 4.3 - USER MANAGEMENT
 *
 * 4.3.1 - REGISTRATION SETTINGS
 ************************************/
$L['ACCOUNT_ACTIVATION'] = 'Activación de cuenta';
$L['ADMIN_ACT'] = 'Activación de Administrador';
$L['ADMIN_ACT_INFO'] = 'Al seleccionar esta opción, luego del registro se le informará al usuario que debe esperar a que el Administrador active la cuenta. El usuario también recibirá un correo electrónico a tal efecto, al igual que el Administrador, quien luego tendrá la opción de activar al usuario con el enlace proporcionado en el correo electrónico o visitar el Panel de Administración y activar al usuario allí.';
$L['ALPHANUMERIC_ONLY'] = 'Solo Alfanumérico';
$L['ALPHANUMERIC_SPACERS'] = 'Espaciador Alfanuméricos';
$L['ANY_CHARS'] = 'Cualquier Caracter';
$L['ANY_LETTER_NUM'] = 'Cualquier Número o Letra';
$L['DEFAULT_QUOTA_ALLOWANCE'] = 'Asignación de cuota predeterminada';
$L['DEFAULT_QUOTA_ALLOWANCE_INFO'] = 'Establecer un monto de cuota predeterminado para las nuevas cuentas creadas. Este valor solo se usa cuando está instalado el paquete de cuotas de Linux.';
$L['DISABLE_REGISTRATION'] = 'Deshabilitar Registro';
$L['DISABLE_REGISTRATION_INFO'] = 'Esto deshabilita el registro. El formulario de registro no se muestra y se reemplaza con un mensaje informativo.';
$L['ENABLE_CAPTCHA'] = 'Habilitar Captcha';
$L['LETTER_NUM_AND_SPACE'] = 'Letra Número y Espacios';
$L['LIMIT_CHAR'] = 'Limitar Caracteres de Nombre de Usuario';
$L['NO_ACTIVATION'] = 'Sin Activación (acceso inmediato)';
$L['NO_ACTIVATION_INFO'] = 'La configuración de esta opción permite al usuario registrarse normalmente sin necesidad de ningún proceso de activación adicional.';
$L['PASSWORD_LENGTH'] = 'Longitud de Contraseña';
$L['RECOMMENDED'] = 'QuickBox recomendado';
$L['REG_SETTINGS_INFO'] = 'Cambia la configuración de registro al sitio.';
$L['REG_SETTINGS'] = 'Configuración de Registro';
$L['SEND_WELCOME_EMAIL'] = 'Enviar E-mail de Bienvenida';
$L['SEND_WELCOME_EMAIL_YES_INFO'] = 'Al establecer esta opción en Sí, se envían correos electrónicos de bienvenida al usuario, así como al administrador del sistema. Esta opción requiere la configuración de SMTP para enviar correos electrónicos correctamente. Estas opciones se pueden controlar en la página <a href="/email-settings.php" style="color: var(--successColor);text-decoration: underline;">Configuración de correo electrónico</a>.';
$L['SEND_WELCOME_EMAIL_NO_INFO'] = 'Al establecer esta opción en No, no se enviarán correos electrónicos de bienvenida a los nuevos usuarios registrados. Toda la creación/registro de usuarios permanece en silencio, al igual que la creación de usuarios dentro del entorno CLI.';
$L['USER_ACT'] = 'Activación de Usuario (verificación de correo electrónico)';
$L['USER_ACT_INFO'] = 'Configurar esta opción requiere que el usuario active su cuenta haciendo clic en un enlace enviado a su dirección de correo electrónico registrada.';
$L['USERNAME_LENGTH'] = 'Longitud del Nombre de Usuario';
$L['USERNAME_LOWERCASE'] = 'Nombre de Usuario en Minúscula';
$L['USERNAME_LOWERCASE_YES_INFO'] = 'Establecer esta opción en Sí cambia todos los nuevos nombres de usuario registrados a minúsculas. Esta es la opción recomendada.';
$L['USERNAME_LOWERCASE_NO_INFO'] = 'Establecer esta opción en No no cambiará los nuevos nombres de usuario registrados a minúsculas. Los nombres de usuario aparecerán tal como están registrados, pero se mantendrán en minúsculas en el entorno del servidor para que el software funcione correctamente.';

/* **********************************
 * 4.3.2 - USER ADMINISTRATION
 ************************************/
$L['ADMIN_ANNOUNCE'] = 'Anuncios de administrador';
$L['ANNOUNCEMENT_LIST'] = 'Contenido de anuncio';
$L['AWAITING_ADMIN'] = 'Awaiting Admin Activation';
$L['AWAITING_EMAIL'] = 'Awaiting E-mail Activation';
$L['BANNED'] = 'Prohibido';
$L['CU_CONFIRM_EMAIL_INFO'] = 'Por favor confirme el correo electrónico';
$L['CU_CONFIRM_EMAIL'] = 'Confirmar E-mail';
$L['CU_CONFIRM_PASS_INFO'] = 'Por favor, confirme tu contraseña';
$L['CU_CONFIRM_PASSWORD'] = 'Confirmar Contraseña';
$L['CU_DISK_QUOTA'] = 'Cuota de Disco:';
$L['CU_GROUP'] = 'Grupo';
$L['CU_EMAIL'] = 'E-mail';
$L['CU_NEW_PASS_INFO'] = 'Por favor ingresa tu nueva contraseña';
$L['CU_NEW_PASSWORD'] = 'Nueva Contraseña';
$L['CU_SHELL_ENV'] = 'Entorno de shell preferido';
$L['CURRENT_SHELLS'] = 'Shell actual';
$L['CURRENT_USERS'] = 'Usuarios Actuales';
$L['DEFAULT_GROUP_TAG'] = 'predeterminado';
$L['DISK_STATUS'] = 'Estado de Disco';
$L['EDIT_USER_SHELL'] = 'Editar el entorno del shell de usuarios';
$L['EXPIRY'] = 'Expira';
$L['HAS_USED'] = 'ha usado';
$L['IP_ADDRESS'] = 'Dirección IP';
$L['LAST_IP_ADDRESS'] = 'Última Dirección IP';
$L['LAST_LOGIN'] = 'Último Inicio de Sesión:';
$L['LAST'] = 'Última';
$L['MEMBER_STATUS'] = 'Estado del Miembro';
$L['MEMBER_GROUP'] = 'Grupo de Miembros';
$L['OF_QUOTA'] = 'de la cuota total';
$L['RECENTLY_ONLINE'] = 'Recientemente Conectados';
$L['REGISTERED_DISK_QUOTA'] = 'Cuota de Disco';
$L['REGISTERED'] = 'Registrado';
$L['REGISTRATION_LOGIN'] = 'Registro e Iniciar Sesión';
$L['STATISTICS'] = 'Estadísticas';
$L['USER_ACTIVITY'] = 'Actvidad de Usuario';
$L['PASSWORD_NOTICE'] = 'La contraseña no debe contener los siguientes caracteres';
$L['USER_QUOTA_HELP'] = 'Introduzca la cantidad de espacio en disco que desea asignar a un usuario. Las cuotas deben estar instaladas para hacer uso de esta opción';
$L['USER_SHELL_HELP'] = 'Seleccione el menú desplegable de arriba para añadir el usuario a un shell.';
$L['USERNAME_ADMIN_USER'] = 'Nombre de Usuario:';
$L['USERNAMES'] = 'Nombre de Usuario';
$L['USERS_AWAITING'] = 'Usuarios en Espera de Activación';
$L['USERS_SESSIONS'] = 'Sesiones de Usuario';

/* **********************************
 * 4.3.2.1 - admin user edit
 ************************************/
$L['ACTIONS'] = 'Comportamiento';
$L['ACTIVE_SESSION'] = 'Sesión Activa';
$L['APPLICATION'] = 'aplicaciones';
$L['CURRENT_FULL_PATH'] = 'Ruta Completa Actual';
$L['CURRENT_GROUPS'] = 'Grupos Actuales';
$L['CURRENT_STATUS'] = 'Estado Actual';
$L['EDIT_DEFAULT_GROUP'] = 'Grupo predeterminado';
$L['EDIT_DEFAULT_GROUP_INFO'] = 'Esta opción, cuando se selecciona, lo establecerá como el grupo predeterminado. Esto es útil cuando se crean usuarios a través de CLI y se desea tener un grupo personalizado como predeterminado asignado.';
$L['EDIT_GROUP_MEMBERSHIP'] = 'Editar la Membresía de Grupo del Usuario';
$L['EU_PATH'] = 'Ruta';
$L['GENERAL_INFO'] = 'Información General';
$L['GROUP_MEMBERSHIP_HELP'] = 'Haga clic en el cuadro de texto a continuación para agregar el usuario a más grupos...';
$L['GROUP_MEMBERSHIP'] = 'Membresía de Grupo';
$L['HOMEPAGE'] = 'Página de Inicio';
$L['INSTRUCTIONS'] = 'Instrucciones';
$L['LAST_ACTIVE_IP'] = 'Última IP Activa';
$L['LAST_ACTIVE'] = 'Última Actividad';
$L['LAST_UPDATE'] = 'Última Actualización';
$L['PATH_HOWTO'] = 'Usa ../ para volver una carpeta atras';
$L['PATH_INSTRUCTIONS'] = 'La ruta que elijas debería configurarse en relación con la carpeta de administración (que será tu sitio principal, establecida en la página de Configuración General, en el Panel de Control).
Por lo tanto, es muy probable que quieras volver una carpeta atrás, antes de elegir cualquier subcarpeta que crees para las páginas de usuario únicas. Usa <i>../</i> para volver atras una carpeta. Así, por ejemplo, si el panel de control de administración de tu sitio está aquí - <i>http://www.website.com/admin/</i> y las carpetas de usuarios están aquí - <i>http://www.website.com/users/</i> deberías establecer la configuración de la ruta a <i>../users/</i> junto con tu página única - entonces <i>../users/admin.php</i>. La ruta completa se mostrará como <i>http://www.website.com/admin/../users/admin.php</i> - la carpeta/archivo estará en realidad ubicada en <i>http://www.website.com/users/admin.php</i>.</p>';
$L['PERSISTENT'] = 'Persistente';
$L['REGISTERED_IP'] = 'IP Registrada';
$L['SESSION_EXPIRY'] = 'Expiración de Sesión';
$L['STATUS'] = 'Estado';
$L['UNIQUE_USER_HP_SETTINGS'] = 'Página Única de Usuario - Configuraciones';
$L['USER_EDIT1'] = 'Editar Usuario :';
$L['USER_EDIT2'] = 'Editar Usuario';
$L['SELECT_GROUP'] = 'Seleccionar Grupo';

/* **********************************
 * #4.3.2.2 - admin announce
 ************************************/
$L['ENABLE_USER_ANNOUNCE'] = 'Habilitar anuncio en el panel de control';
$L['ANNOUNCEMENT_HISTORY'] = 'Sus anuncios anteriores';
$L['TYPE'] = 'Tipo';
$L['USER'] = 'Usuario';
$L['TIME'] = 'Tiempo';
$L['ANNOUNCEMENT_LIST'] = 'Contenido del anuncio';
$L['GLOBAL_USER_ANNOUNCEMENT'] = 'Global (todos los usuarios)';
$L['CREATE_DASHBOARD_ANNOUNCEMENT'] = 'Crear anuncio en el panel';
$L['GLOBAL_ANNOUNCEMENT'] = 'Anuncio global';
$L['GLOBAL_ANNOUNCEMENT_INFO'] = 'Al seleccionar esta opción se creará un anuncio global visible en el panel de control de cada usuario, independientemente de su membresía en el grupo. Si ya ha asignado un anuncio a un usuario, se mostrará junto a este anuncio global.';
$L['SELECT_USER'] = 'Seleccionar usuario:';
$L['SELECT_ANNOUNCEMENT_TYPE'] = 'Tipo de anuncio:';
$L['EDIT_DASHBOARD_ANNOUNCEMENT'] = 'Editar anuncio del panel';
$L['EDIT_ANNOUNCEMENT_INFO'] = 'Editar y guardar un anuncio existente restablecerá su visibilidad en el panel del usuario especificado. Si el anuncio es global, también restablecerá el historial de vistas en los paneles de todos los usuarios.';
$L['ANNOUNCEMENT_ID'] = 'Identificación del anuncio';
$L['ANNOUNCEMENT_TYPE'] = 'Tipo de anuncio';
$L['PREVIEW'] = 'Vista previa';

/* **********************************
 * 4.3.3 - USERS GROUPS
 ************************************/
$L['ADMINISTRATORS'] = 'Administradores';
$L['ASSIGN_LEVEL'] = 'Asignar Nivel de Grupo :';
$L['CLICK_HERE'] = 'Click Aquí...';
$L['DELETE_GROUP'] = 'Eliminar Grupo';
$L['DELETED'] = 'Eliminado';
$L['GROUP_DELETED'] = 'Este grupo ha sido eliminado, los grupos de usuarios se han restablecido.';
$L['GROUP_STAY'] = 'El grupo se quedará :)';
$L['GROUP_YES'] = '¡Sí, estoy seguro!';
$L['GROUP_NO'] = '¡No, cancelar!';
$L['EDIT_ADD_USER'] = 'Agregar Usuario :';
$L['EDIT_GROUP_LEVEL'] = 'Nivel del Grupo :';
$L['EDIT_GROUP_NAME'] = 'Nombre del Grupo :';
$L['GROUP_LEVEL'] = 'Nivel del Grupo';
$L['GROUP_NAME'] = 'Nombre del Grupo';
$L['LEVEL_INFO'] = 'Ingresa un número entre 2 - 256';
$L['NEW_GROUP_NAME'] = 'Nombre de Grupo Nuevo :';
$L['NUMBER_MEMBERS'] = '# de Miembros';
$L['USER_GROUPS_INFO'] = 'Crear, ver y editar grupos de usuarios. Asignar usuarios a grupos de usuarios.';
$L['SOFT_GROUP_ASGMNT'] = 'Asignación de Grupo de Software';

/* **********************************
 * 4.4 - SYSTEM
 *
 * 4.4.1 - WEB CONSOLE
 ************************************/
$L['WEB_CONSOLE_INFO'] = 'Accede a tu entorno de comandos';

/* **********************************
 * 4.4.2 - API CONTROL
 ************************************/
$L['ACTIVATION_INFO_STATS'] = 'Estadísticas de información de activación';
$L['QB_CONTROL_API'] = 'API de Control QB';
$L['QB_CONTROL_API_NOTICE'] = 'Las claves de control de API están compartimentadas en dos componentes, como se ve a continuación.<br/>Los ejemplos de uso se han etiquetado para ilustrar el nivel de permisos de un comando específico necesario para realizar la tarea designada. La biblioteca de uso de API continuará recibiendo actualizaciones a medida que se implementen puntos finales y funciones adicionales.<br/><br/><table><tbody><tr><td style="width:15px;vertical-align:middle;"><span class="badge badge-pills badge-primary">&nbsp;</span></td><td>La <em>clave de permisos de lectura</em> solo tiene la capacidad de extraer datos. Esta clave no puede señalar tareas operativas al servidor QuickBox. A menos que esté intentando controlar su instalación de forma remota, esta tecla es todo lo que necesita.</td></tr><tr><td style="width:15px;vertical-align:middle;"><span class="badge badge-pills badge-success">&nbsp;</span></td><td>La <em>clave de permisos de escritura</em> tiene la capacidad de realizar tareas adicionales, como actualizar la instalación de QuickBox, administrar la activación de la API principal, y más. Esta clave también funcionará para los permisos de lectura y debe considerarse la clave con el privilegio más alto. Útil para realizar de forma remota tareas básicas de administración de su servidor.</td></tr></tbody></table><br/>Recuerde tratar sus claves API como lo haría con las contraseñas, nunca las comparta.<br/>Puede regenerar una nueva clave de control aleatoria en cualquier momento presionando el botón <i data-feather="refresh-cw" style="width:14px;"></i> a continuación.';
$L['CLOSE_ACKNOWLEDGE'] = 'Reconocer y cerrar';
$L['READ_PERM_KEY'] = 'Clave de permisos de lectura';
$L['REGENERATE_READ_KEY'] = 'Regenerar clave de permisos de lectura';
$L['WRITE_PERM_KEY'] = 'Clave de permisos de escritura';
$L['REGENERATE_WRITE_KEY'] = 'Regenerar clave de permisos de escritura';
$L['API_SPEC_USAGE'] = 'Uso específico de API';
$L['DISPLAY_CURRENT_API_STAT'] = 'Mostrar el estado actual de la API';
$L['EXAMPLE_CODE'] = 'código:';
$L['EXAMPLE_OUTPUT'] = 'salida:';
$L['ACTIVATE_QUICKBOX_API'] = 'Activar clave API de QuickBox';
$L['DEACTIVATE_QUICKBOX_API'] = 'Desactivar clave API de QuickBox';
$L['VERSION_SPEC_USAGE'] = 'Uso específico de la versión';
$L['DISPLAY_CURRENT_VERSION'] = 'Mostrar el estado actual de la versión de QuickBox';
$L['UPDATE_QUICKBOX_VERSION'] = 'Actualizar versión de QuickBox';
$L['UPDATE_ALERT_NOTICE'] = 'Si su instancia ya está actualizada, verá el siguiente resultado';
$L['RUN_FIX_VERSION'] = 'Ejecutar corrección de versión';
$L['USER_SPEC_USAGE'] = 'Uso específico del usuario';
$L['DISPLAY_ALL_USER_INFO'] = 'Mostrar información para todos los usuarios';
$L['DISPLAY_SINGLE_USER_INFO'] = 'Mostrar información para el usuario especificado';
$L['DISPLAY_USER_SOFTWARE'] = 'Mostrar el software instalado actualmente por el usuario especificado';
$L['CREATE_SPECIFIED_USER'] = 'Crear usuario especificado';
$L['CREATE_SPECIFIED_USER_INFO_NOTICE'] = 'Si desea configurar un usuario con su correo electrónico existente y establecer una asignación de cuota. Tenga en cuenta que tanto el correo electrónico como la cuota son puramente opcionales. Si no se ingresa ninguna cuota, utilizará el valor predeterminado de la cantidad configurada establecida <a href="/registration.php" rel="noopener nofollow" target="_blank">aquí</a>.';
$L['DELETE_SPECIFIED_USER'] = 'Eliminar usuario especificado';
$L['BAN_SPECIFIED_USER'] = 'Prohibir usuario especificado';
$L['UNBAN_SPECIFIED_USER'] = 'Desbancar usuario especificado';
$L['SOFTWARE_SPEC_USAGE'] = 'Uso específico del software';
$L['DISPLAY_ALL_SOFTWARE'] = 'Mostrar todas las aplicaciones de software disponibles para instalar';
$L['DISPLAY_SINGLE_SOFTWARE'] = 'Mostrar información para el software especificado';
$L['API_SOFTWARE_NOTICE'] = 'Para encontrar orientación sobre cómo se estructuran los nombres de software (nombres de aplicaciones), consulte la sección \'Software\' en su manual de usuario. Puede acceder a él haciendo clic <a href="/help.php#software">aquí</a>.';
$L['API_SOFTWARE_WARNING'] = 'Tenga en cuenta que, para determinadas aplicaciones, es posible que las convenciones de nomenclatura no estén designadas oficialmente y, en cambio, podrían formar parte de un conjunto ampliado de opciones.<br/><br/>
Aquí hay un ejemplo usando Bazarr4K:<br>
<pre class="mb-2"><code class="language-json">"bazarr4k": {
    "software_title": "Bazarr4K",
    "qb_package_name": "bazarr",
    "qb_options": "-o 4k",
    ...</code></pre>
Tome nota de la siguiente información importante sobre la salida API del software de QuickBox:
<ul>
<li>Al acceder a paquetes de software a través de QuickBox, encontrará constantemente el atributo \'qb_package_name\'. Este atributo está marcado y utilizado por la convención de nomenclatura <code>qb</code>.</li>
<li>Además, cada salida de API incluye la entrada \'qb_options\', que proporciona valiosas opciones de personalización. Una de estas opciones es el indicador de instalación \'4K\', indicado como <code>-o 4k</code>.</li>
</ul><br/>
Por ejemplo, si desea instalar \'Bazarr\' con soporte 4K, debe usar el siguiente comando:<br/>
<pre class="mb-0"><code class="language-bash">qb install bazarr -o 4k -u [USERNAME]</code></pre><br/>
Es importante tener en cuenta que no debe utilizar \'bazarr4k\' como nombre del paquete, ya que la entrada \'qb_options\' está diseñada para manejar dichas personalizaciones de manera eficiente.';
$L['SOFTWARE_SERVICE_STATUS'] = 'Mostrar estado para software y usuario especificados';
$L['SOFT_STATUS_ACTIVE_NOTICE'] = 'Si el servicio está activo.';
$L['SOFT_STATUS_INACTIVE_NOTICE'] = 'Si el servicio está inactivo.';
$L['SOFT_STATUS_NOT_ISNTALLED_NOTICE'] = 'Si la aplicación no está instalada para el usuario especificado.';
$L['SOFTWARE_SERVICE_CONTROL'] = 'Indicar la acción especificada para el software y el usuario especificados';
$L['SOFT_CONTROL_ACTION_RESTART_NOTICE'] = 'Donde la action=restart...';
$L['SOFT_CONTROL_ACTION_START_NOTICE'] = 'Dónde la action=start...';
$L['SOFT_CONTROL_ACTION_STOP_NOTICE'] = 'Donde la action=stop...';

/* **********************************
 * 4.4.3 - SSL CONTROL
 ************************************/
$L['LETSENCRYPT_DOMAIN'] = 'Let\'s Encrypt el dominio';
$L['SSL_CONTROL'] = 'Control SSL';
$L['ABOUT_SSL_CONTROL'] = 'Esta función le permite generar fácilmente certificados SSL para las aplicaciones compatibles que haya instalado. Al seleccionar "Sí" e ingresar su dominio, configurará sin problemas el proxy inverso de Nginx junto con el certificado SSL.';
$L['STAGE_DASHBOARD_SSL'] = '¿Preparar SSL para el Panel de control?';
$L['DASHBOARD_SSL_TOOLTIP'] = 'Para proteger su Panel QuickBox con un certificado SSL, simplemente seleccione \'Sí\'. Esta acción no solo configurará el certificado SSL sino que también establecerá las configuraciones y enlaces necesarios de NGinx, facilitando el acceso seguro a su panel a través de su dominio.';
$L['STAGE_OWNED_DOMAIN_SSL'] = '¿Preparar SSL para un dominio propio?';
$L['NON_DASHBOARD_SSL_TOOLTIP'] = 'Para establecer un certificado SSL para un dominio de su preferencia, elija \'Sí\'. Esta opción está diseñada para la creación de certificados SSL adicionales. Asegúrese de que los registros DNS apropiados para el dominio estén configurados correctamente, ya que este proceso genera exclusivamente los certificados SSL solicitados.';
$L['STAGE_EMBY_SSL'] = '¿Preparar SSL para Emby?';
$L['EMBY_SSL_TOOLTIP'] = 'Para proteger su instalación de Emby con un certificado SSL, simplemente seleccione \'Sí\'. Esta acción no solo configurará el certificado SSL sino que también establecerá las configuraciones y enlaces necesarios de NGinx, facilitando el acceso seguro a su instalación de Emby a través de su dominio.';
$L['STAGE_JELLYFIN_SSL'] = '¿Preparar SSL para Jellyfin?';
$L['JELLYFIN_SSL_TOOLTIP'] = 'Para proteger su instalación de Jellyfin con un certificado SSL, simplemente seleccione \'Sí\'. Esta acción no solo configurará el certificado SSL sino que también establecerá las configuraciones y enlaces necesarios de NGinx, facilitando el acceso seguro a su instalación Jellyfin a través de su dominio.';
$L['STAGE_JELLYSEERR_SSL'] = '¿Preparar SSL para Jellyseerr?';
$L['JELLYSEERR_SSL_TOOLTIP'] = 'Para proteger su instalación de Jellyseerr con un certificado SSL, simplemente seleccione \'Sí\'. Esta acción no solo configurará el certificado SSL sino que también establecerá las configuraciones y enlaces necesarios de NGinx, facilitando el acceso seguro a su instalación de Jellyseerr a través de su dominio.';
$L['STAGE_KOMGA_SSL'] = '¿Preparar SSL para Komga?';
$L['KOMGA_SSL_TOOLTIP'] = 'Para proteger su instalación de Komga con un certificado SSL, simplemente seleccione \'Sí\'. Esta acción no solo configurará el certificado SSL sino que también establecerá las configuraciones y enlaces necesarios de NGinx, facilitando el acceso seguro a su instalación de Komga a través de su dominio.';
$L['STAGE_OVERSEERR_SSL'] = '¿Preparar SSL para Overseerr?';
$L['OVERSEERR_SSL_TOOLTIP'] = 'Para proteger su instalación de Overseerr con un certificado SSL, simplemente seleccione \'Sí\'. Esta acción no solo configurará el certificado SSL sino que también establecerá las configuraciones y enlaces necesarios de NGinx, facilitando el acceso seguro a su instalación de Overseerr a través de su dominio.';
$L['STAGE_PLEX_SSL'] = '¿Preparar SSL para Plex?';
$L['PLEX_SSL_TOOLTIP'] = 'Para proteger su instalación de Plex con un certificado SSL, simplemente seleccione \'Sí\'. Esta acción no solo configurará el certificado SSL sino que también establecerá las configuraciones y enlaces necesarios de NGinx, facilitando el acceso seguro a su instalación Plex a través de su dominio.';
$L['DOMAIN'] = 'Dominio';
$L['SSL_ALREADY_INSTALLED'] = 'Tenga en cuenta que ya existe un certificado SSL instalado para esta opción. Reinstalar el certificado ingresando un nuevo dominio a continuación restablecerá la configuración inversa actual de NGinx, eliminará el certificado anterior y restablecerá el acceso al enlace establecido actualmente.';
$L['SSL_SUBMIT'] = 'Instalar certificado SSL';
$L['SSL_STATUS_MONITOR_TOOLTIP'] = 'Supervise el estado de sus certificados SSL existentes con la capacidad de realizar dos acciones clave: eliminar o forzar la renovación. Para los certificados asociados con aplicaciones compatibles como Emby, Jellyfin, Jellyseerr, Komga, Overseerr y Plex, eliminar un certificado también activará la eliminación y reconfiguración del proxy inverso de Nginx para el dominio correspondiente.<br><br>Puede hacerlo sin problemas elimine un certificado usando las opciones a continuación y luego seleccione la aplicación que desee arriba para iniciar la instalación de un nuevo subdominio y certificado. Este proceso simplificado garantiza la máxima flexibilidad y control sobre la gestión de su certificado SSL.';
$L['CERTS_STORED_AT'] = 'Los certificados monitoreados se almacenan en';
$L['CERT_EXPIRES'] = 'Expira el:';
$L['CERT_RENEW'] = 'Renovar certificado';
$L['CERT_DELETE'] = 'Eliminar el certificado SSL y cualquier configuración adicional. Esta acción es irreversible.';
$L['CERT_DELETE_CONFIRM'] = '¿Está seguro de que desea eliminar este certificado?';
$L['NO_CERTS_INSTALLED'] = 'No hay certificados SSL instalados y/o monitoreados en este momento.';

/* **********************************
 * 4.4.4 - TROUBLESHOOTING
 ************************************/
$L['APP_SELECT'] = 'Seleccione la aplicación';
$L['APPLIANCE'] = 'Software';
$L['CLEAN_MEM'] = 'Borrar la memoria caché física';
$L['FIX'] = 'Arreglar';
$L['FIXUPDATE'] = 'Fijar los bloqueos del frontend de dpkg';
$L['LOG_GEN'] = 'Generador de registros del sistema';
$L['NGINX'] = 'nginx';
$L['PHP'] = 'php-fpm';
$L['PHP7_2'] = 'php-fpm';
$L['QSUPPORT'] = 'Soporte QuickBox';
$L['QSUPPORTU'] = 'Usuario de Soporte QuickBox';
$L['SERVER_TROUBLESHOOTING'] = 'Solución de problemas del servidor';
$L['SYSTEM_INFO'] = 'Información del sistema';
$L['SYSTEM_LOG_FILES'] = 'Registro del sistema';
$L['TROUBLESHOOTING'] = 'Solución de problemas';
$L['WEB_SERVER'] = 'Servidor web';

/* **********************************
 * 4.4.5 - SYSTEM LOGS
 ************************************/
$L['LOGS'] = 'Registros';
$L['NO_LOGS'] = 'No se encontraron registros';
$L['NO_LOGS_MESSAGE'] = 'En este momento, no hay registros disponibles para ver. Las entradas de registro se generan cuando las aplicaciones envían su información de registro al syslog del sistema. Si está buscando un registro en particular, le recomendamos consultar la documentación proporcionada por la aplicación respectiva para obtener más orientación. QuickBox se esfuerza diligentemente por centralizar varias aplicaciones y sus datos registrados; sin embargo, depende de las aplicaciones individuales transmitir su información de registro al syslog.';
$L['ACCESS_LOGS'] = 'Registros de acceso';
$L['APP_LOGS'] = 'Registros de software';
$L['USER_LOGS'] = 'Registros de usuario';
$L['DATE_TIME'] = 'Fecha/Hora';
$L['EVENT'] = 'Evento';
$L['LOG_MESSAGE'] = 'Registrar mensaje';
$L['LOGS_SUMMARY'] = 'Resumen de registros';
$L['COMMAND'] = 'Comando';
$L['SOFTWARE'] = 'Software';
$L['USER_ACTION_LOGS'] = 'Registros de acciones del usuario';
$L['VIEW_USER_ACTION_LOGS'] = 'Ver registro de acciones del usuario';
$L['ABOUT_USER_ACTION_LOGS'] = 'Los registros en este contexto pertenecen a tareas y eventos relacionados con el usuario iniciados a través de la interfaz QuickBox.';
$L['SOFTWARE_ACTION_LOGS'] = 'Registros de acciones de software';
$L['VIEW_SOFTWARE_ACTION_LOGS'] = 'Ver registro de acciones del software';
$L['ABOUT_SOFTWARE_ACTION_LOGS'] = 'Estos registros están diseñados para proporcionar un registro de acciones relacionadas con el software, incluidas instalaciones, eliminaciones, actualizaciones y otros eventos importantes.';
$L['SYSTEM_ACTION_LOGS'] = 'Registros de acciones del sistema';
$L['VIEW_SYSTEM_ACTION_LOGS'] = 'Ver registro de acciones del sistema';
$L['ABOUT_SYSTEM_ACTION_LOGS'] = 'Estos registros están diseñados para capturar actividades y acciones a nivel del sistema iniciadas a través de la herramienta de línea de comando <code>qb</code>.';
$L['UI_ACTION_LOGS'] = 'Registros de acciones de la interfaz de usuario';
$L['VIEW_UI_ACTION_LOGS'] = 'Ver registro de acciones de la interfaz de usuario';
$L['ABOUT_UI_ACTION_LOGS'] = 'Estos registros se derivan del syslog del sistema y sirven como un registro consolidado de todos los comandos y acciones iniciadas a través de la interfaz de usuario del QuickBox Dashboard.';
$L['USER_APPLICATION_LOGS'] = 'Registros de aplicaciones de usuario';
$L['SYSTEM_LOG_SUMMARY'] = 'Resumen del registro del sistema';
$L['SYSTEM_LOG_SUMMARY_TOOLTIP'] = 'Este resumen y todos los registros adicionales se generan bajo tres condiciones:<br><ol><li><strong>Cron:</strong> los registros se actualizan automáticamente con la ejecución de una tarea cron cada 15 minutos. Esto inicia el binario <code>qb_log_miner</code> que agrega entradas de registro del syslog del sistema.</li><li><strong>Generar manualmente:</strong> Puede generarlo desde la sección \'Sistema > Solución de problemas > Registro del sistema\' haciendo clic en el botón \'(Generar)\'.</li><li>< strong>Línea de comando:</strong> También se puede generar ejecutando el comando <code>qb generate log</code>.</li><li><strong>Línea de comando:</strong> También se puede generar ejecutando el comando <code>qb generate log</code>.</li></ol>Puede acceder y descargar este archivo de registro resumido de dos maneras:<br><ol><li><strong>Interfaz web:</strong> Vaya a \'Sistema > Solución de problemas > Registro del sistema (descargar)\' dentro de la interfaz de usuario.</li><li><strong>Directorio del servidor:</strong> Encuéntrelo en el servidor en: \'/srv/quickbox/logs/system_log\'.</li></ol>';
$L['CLEAR_LOG'] = 'Borrar registro';
$L['CLEAR_LOG_CONFIRM'] = '¿Está seguro de que desea eliminar estos registros? ¿Esto no se puede deshacer?';
$L['DELETED_ALL_APP_LOGS'] = 'Se eliminaron todos los registros de software';
$L['DELETED_ALL_APPLICATION_LOGS'] = 'Eliminar todos los registros de la aplicación';
$L['DELETED_ALL_SUMMARY_LOGS'] = 'Se eliminaron todos los registros de resumen';
$L['DELETED_ALL_SYSTEM_LOGS'] = 'Se eliminaron todos los registros del sistema';
$L['DELETED_ALL_UI_LOGS'] = 'Se eliminaron todos los registros de la interfaz de usuario';
$L['DELETED_ALL_USER_LOGS'] = 'Se eliminaron todos los registros de usuarios';
$L['DELETED_APPLICATION_LOGS'] = 'Registros de aplicaciones eliminados';
$L['DELETED_SUMMARY_LOGS'] = 'Registros resumidos eliminados';
$L['DELETED_USER'] = 'Usuario eliminado';
$L['DELETE_USER_LOGS'] = 'Eliminar registros de usuario';
$L['QUICKBOX_VERSION_CHECK'] = 'Buscar actualizaciones de QuickBox';
$L['SOFTWARE_VERSION_CHECK'] = 'Buscar actualizaciones de software instaladas';
$L['SCHEDULED_TASK'] = 'Tarea programada';

/* **********************************
 * 4.4.6 - HELP MANUAL
 ************************************/
$L['QB_HELP'] = 'Manual de ayuda';

/* **********************************
 * description
 ************************************/
$L['DESCRIPTION_CONTENT'] = '<p>Bienvenido a la visualización gráfica integral de la página de manual de <code>qb</code>, diseñada para ofrecerle un enfoque traducido, simplificado y eficiente para acceder a diversa información sobre QuickBox. Esta interfaz fácil de usar tiene como objetivo proporcionar información detallada sobre el funcionamiento de QuickBox, una herramienta poderosa y versátil para administrar su servidor sin esfuerzo.</p>
<p>Dentro de esta pantalla gráfica, encontrará una lista detallada de las aplicaciones disponibles listas para una instalación perfecta, lo que le permitirá personalizar la configuración de su servidor de acuerdo con sus necesidades específicas. Además, este recurso presenta una gran cantidad de otros comandos esenciales para una utilización óptima dentro del entorno CLI de <code>qb</code>, lo que le permite navegar a través de las tareas de su servidor de manera eficiente y sin esfuerzo.</p>
<p>Tanto si es nuevo en QuickBox como si es un usuario experimentado, esta visualización gráfica de la página de manual de <code>qb</code> sirve como referencia definitiva para aprovechar todo el potencial de QuickBox y liberar el verdadero poder de la administración de su servidor. Explore las diversas funciones, optimice las operaciones de su servidor y maximice su productividad con la ayuda de esta guía intuitiva e informativa. ¡Sumerjámonos y hagamos que su experiencia con QuickBox sea aún más gratificante!</p>';
$L['API_INFO_DIRECT'] = '<p style="font-weight:600;">Para obtener más información y referencias sobre la API integrada de QuickBox, <a href="/api-control.php" rel="noopenner nofollow " class="link" style="color:var(--infoColor);">ver esta página</a>.</p>';

/* **********************************
 * options
 ************************************/
$L['OPTIONS_HEADER'] = 'Opciones';
$L['OPTIONS_CONTENT_HELP'] = 'Muestra este manual de ayuda en formato de página de manual CLI';
$L['OPTIONS_CONTENT_VERBOSE'] = 'Habilita el modo detallado para la depuración';

/* **********************************
 * software
 ************************************/
$L['SOFTWARE_HEADER'] = 'Software';
$L['SOFTWARE_INFO_CONTENT'] = '<p>La siguiente es una lista de todas las aplicaciones disponibles para instalar proporcionadas a través de la compilación de QuickBox.<br/>Los nombres de software se presentan como los ve <code>qb [install|reinstall|update|remove|help] [software_name]</code></p>';
$L['ADMIN_INSTALLED_SOFTWARE_HEADER'] = 'Software instalado por el administrador';
$L['ADMIN_INSTALLED_SOFTWARE_INFO_CONTENT'] = '<p>El administrador del sistema debe instalar las siguientes aplicaciones.<br/>Consulte la columna de disponibilidad a continuación para obtener detalles adicionales.</p>';
$L['MULTI_USER_SOFTWARE_HEADER'] = 'Software multiusuario';
$L['MULTI_USER_SOFTWARE_INFO_CONTENT'] = '<p>Múltiples usuarios pueden instalar las siguientes aplicaciones sin necesidad de asistencia administrativa.<br/>El administrador del sistema determina la disponibilidad de todas las aplicaciones y se otorga a usuarios adicionales dentro de <a href="/usergroups.php" rel="noopener nofollow" class="link">grupos creados</a>.</p>';
$L['SINGLE_USER_SOFTWARE_HEADER'] = 'Software de usuario único';
$L['SINGLE_USER_SOFTWARE_INFO_CONTENT'] = '<p>Las siguientes aplicaciones pueden ser instaladas por un solo usuario asignado a la vez, sin necesidad de asistencia administrativa.<br/>Toda la disponibilidad de la aplicación la determina el administrador del sistema y se otorga a usuarios adicionales dentro de <a href="/usergroups.php" rel="noopener nofollow" class="link">grupos creados</a>.</p>';
$L['SOFTWARE_MANAGEMENT'] = 'Administración de software';
$L['SOFTWARE_MANAGEMENT_CONTENT'] = 'Parámetros para instalar, reinstalar, actualizar o eliminar software designado con opciones adicionales (si están presentes/deseadas) para un usuario asignado';
$L['SOFTWARE_MANAGEMENT_WARNING_CONTENT'] = '<p>Recuerde que varias aplicaciones tienen varias opciones/requisitos. La mayoría requiere el uso de la marca de nombre de usuario (<code>-u</code>), mientras que aplicaciones como rtorrent no lo harán. Para verificar todas las opciones disponibles para un software específico, utilice <code class="language-bash">qb help [software_name]</code>. Los nombres de aplicaciones dentro de QuickBox para el esquema de nombres de software se pueden ver en el <a href="#software" class="link">gráfico de lista de software</a> anterior.</p>';
$L['SEE_ALSO_HEADER'] = 'Ver también';
$L['SEE_ALSO_CONTENT'] = 'Mostrar el uso de comandos útiles para el software designado';

/* **********************************
 * software options table
 ************************************/
$L['SOFTWARE_NAME'] = 'Nombre del software';
$L['SOFTWARE_TITLE'] = 'Título del software';
$L['USABILITY'] = 'Usabilidad';
$L['CAN_ROLLBACK'] = 'Opción de reversión';
$L['INFO'] = 'Información';
$L['ADMIN_BADGE'] = '<span class="badge badge-pills badge-table-menu" style="padding:2px 6px;line-height:0.7rem;background-color:var(--alertLightDangerBorder);color:#fff;font-size:0.5rem;">solo administrador</span>';
$L['GLOBAL_BADGE'] = '<span class="badge badge-pills badge-table-menu" style="padding:2px 6px;line-height:0.7rem;background-color:var(--alertLightWarningBorder);color:#fff;tamaño de fuente:0.5rem;">global</span>';
$L['MULTI_USER_BADGE'] = '<span class="badge badge-pills badge-table-menu" style="padding:2px 6px;line-height:0.7rem;background-color:var(--alertLightInfoBorder);color:#fff;font-size:0.5rem;">multiusuario</span>';
$L['SINGLE_USER_BADGE'] = '<span class="badge badge-pills badge-table-menu" style="padding:2px 6px;line-height:0.7rem;background-color:var(--alertLightPrimaryBorder);color:#fff;font-size:0.5rem;">usuario único</span>';
$L['GLOBAL_INFO'] = 'requiere instalación del administrador e instalaciones para todos los usuarios del sistema.';
$L['MULTI_USER_INFO'] = 'requiere instalación de administrador y se puede instalar para cualquier usuario asignado. se admiten múltiples usuarios.';
$L['SINGLE_USER_INFO'] = 'usuario único, solo administrador. requiere la instalación del administrador y es instalado y operado por el usuario administrador.';

/* **********************************
 * examples header
 ************************************/
$L['EXAMPLES_HEADER'] = 'Ejemplos';

/* **********************************
 * user management
 ************************************/
$L['USER_MANAGEMENT_INFO_CONTENT'] = '<p>Las funciones de administración de <code>qb user</code> en QuickBox ofrecen un conjunto versátil y poderoso de herramientas para administrar eficientemente a los usuarios en su servidor. Con un enfoque en la facilidad de uso y la funcionalidad robusta, estas funciones le permiten optimizar la administración de usuarios, mejorar la seguridad y garantizar una operación fluida del servidor.</p>';
$L['CREATE_USER_CONTENT'] = 'Crea una nueva cuenta de usuario de QuickBox';
$L['DELETE_USER_CONTENT'] = 'Elimina la cuenta de usuario de QuickBox';
$L['CHANGE_USER_PASSWORD'] = 'Cambiar contraseña de usuario';
$L['CHANGE_USER_PASSWORD_CONTENT'] = 'Cambia la contraseña de la cuenta de usuario asignada';
$L['BAN_USER_CONTENT'] = 'Prohíbe la cuenta de usuario asignada, impidiendo el inicio de sesión y deteniendo los servicios instalados y sus funciones.';
$L['BAN_USER_PRIMARY_CONTENT'] = '<p><em>Esto no <strong>borra</strong> los datos del usuario</em>, solo desactiva los servicios en ejecución y bloquea el acceso.</p>';
$L['UNBAN_USER_CONTENT'] = 'Desbanea la cuenta de usuario asignada, permitiendo iniciar sesión e iniciar los servicios instalados y sus funciones';
$L['PROMOTE_USER_TO_ADMIN'] = 'Promocionar usuario a administrador';
$L['PROMOTE_USER_TO_ADMIN_CONTENT'] = 'Asciende al usuario asignado al nivel de administrador';
$L['DEMOTE_USER_FROM_ADMIN'] = 'Degradar usuario de administrador';
$L['DEMOTE_USER_FROM_ADMIN_CONTENT'] = 'Degrada al usuario asignado al nivel de usuario estándar';
$L['SET_USER_QUOTA'] = 'Establecer cuota de usuario';
$L['SHOW_USER_QUOTA'] = 'Mostrar cuota de usuario';
$L['SET_USER_SHELL'] = 'Establecer shell de usuario';
$L['SET_USER_SHELL_CONTENT'] = 'Establece el entorno de shell para el usuario asignado';
$L['SET_USER_SHELL_INFO_CONTENT'] = '<p><strong><code>sudo</code></strong><br>privilegios de administrador completos para el entorno del servidor (gran poder... etc.)<br><strong><code>full</code></strong><br>acceso completo al entorno del servidor, con la excepción de las áreas privilegiadas más altas; es decir: no sudo y no puede acceder a los directorios raíz.<br><strong><code>limited</code></strong><br>el entorno de shell limitado. muy poco acceso a los comandos y encarcelados en su propio directorio de inicio de usuario.</p><hr/><p>Los entornos de shell los establece el administrador del sistema y se pueden ver en la página de edición de usuarios ubicada dentro de <a href="/useradmin.php" rel="noopener nofollow" class="link">Página de administración de usuarios</a>.<br/>Si desea agregar un nuevo entorno de shell, puede hacerlo editando el <code>/etc/shells</code> y agregando la ruta al entorno de shell que le gustaría agregar.</p>';
$L['SET_USER_SHELL_DANGER_CONTENT'] = '<p><strong>Precaución:</strong> tenga en cuenta que cambiar el entorno de shell a cualquier otro que no sea <code>/bash</code> puede provocar un comportamiento no deseado al usar <code>qb</code> (QuickBox), ya que ha sido específicamente diseñado y optimizado para el entorno <code>/bash</code>. En resumen, <code>qb</code> se basa en características y funcionalidades específicas proporcionadas por el shell Bash.<br><br>Para evitar posibles problemas, se recomienda seguir con <code>/bash</code> entorno al usar <code>qb</code>. Si aún desea usar un shell diferente, consulte la documentación de ese shell para revisar cualquier cambio adicional en las rutas, configuraciones u otras configuraciones que puedan necesitar ser actualizadas para garantizar la compatibilidad con <code>qb</code>.</p>';
$L['USER_RCLONE_COMPANION_COMMANDS'] = 'Comandos de Rclone';

/* **********************************
 * clean functions
 ************************************/
$L['CLEAN_FUNCTIONS'] = 'Limpiar funciones';
$L['CLEAN_FUNCTIONS_INFO_CONTENT'] = '<p>Las funciones <code>qb clean</code> en QuickBox ofrecen una forma conveniente y eficiente de mantener la limpieza de su servidor y optimizar su rendimiento. Diseñadas teniendo en cuenta la simplicidad y la eficacia, estas funciones le permiten liberar memoria valiosa, eliminar el desorden innecesario y garantizar un funcionamiento del servidor fluido y optimizado.</p>';
$L['CLEAN_MEMORY'] = 'Limpiar memoria';
$L['CLEAN_MEMORY_CONTENT'] = 'Limpia cachés de memoria de QuickBox';
$L['CLEAN_DASHBOARD_LOGS'] = 'Limpiar registros del panel';
$L['CLEAN_DASHBOARD_LOGS_CONTENT'] = 'Limpia los registros del tablero de QuickBox para el usuario designado';
$L['CLEAN_QB_DASHBOARD_LOGS'] = 'Limpia los archivos de registro del panel QB';
$L['CLEAN_QB_DASHBOARD_LOGS_CONTENT'] = 'Este comando está diseñado para borrar el registro de acciones de UI actual publicado desde syslog y restablecer el registro de errores de UI Nginx a su estado inicial';
$L['CLEAN_SYSTEM_LOGS'] = 'Eliminar archivos de registro antiguos del sistema';
$L['CLEAN_SYSTEM_LOGS_CONTENT'] = 'Este comando está diseñado para eliminar registros y archivos comprimidos en el directorio <code>/var/log</code> que han excedido el período de retención asignado. El período de retención está establecido en 7 días de forma predeterminada (si no se ingresa ningún valor opcional).';
$L['CLEAN_RCLONE_UPLOAD_LOGS'] = 'Limpiar registros de carga de Rclone';
$L['CLEAN_RCLONE_UPLOAD_LOGS_CONTENT'] = 'Limpia los registros de carga de QuickBox rclone para el usuario designado';
$L['CLEAN_LOCKS'] = 'Limpiar candados';
$L['CLEAN_LOCKS_CONTENT'] = 'Limpia el software QuickBox y los bloqueos apt-dpkg que pueden impedir que QuickBox instale software nuevo';

/* **********************************
 * fix functions
 ************************************/
$L['FIX_FUNCTIONS'] = 'Reparar funciones';
$L['FIX_FUNCTIONS_INFO_CONTENT'] = '<p>Las funciones <code>qb fix</code> en QuickBox proporcionan un conjunto de herramientas potente y fácil de usar para abordar problemas comunes y realizar reparaciones del sistema sin esfuerzo. Con un enfoque en la simplicidad y la eficacia, estas funciones le permiten detectar y resolver varios problemas que puedan surgir en su servidor, lo que garantiza operaciones fluidas e ininterrumpidas.</p>';
$L['FIX_HOME'] = 'Reparar Inicio';
$L['FIX_HOME_CONTENT'] = 'Corregir los permisos del directorio principal de los usuarios designados';
$L['FIX_PHP'] = 'Reparar PHP';
$L['FIX_PHP_CONTENT'] = 'Arreglar la configuración de PHP e instalar las extensiones faltantes. Esto también actualizará los paquetes de PHP a la última versión';
$L['FIX_PYTHON'] = 'Reparar Python';
$L['FIX_PYTHON_CONTENT'] = 'Reparar la configuración de Python e instalar las extensiones faltantes. Además, las etapas de python3.9 si no están disponibles actualmente en el sistema para su uso predeterminado en compilaciones de aplicaciones que requieren python';
$L['FIX_VERSION'] = 'Versión fija';
$L['FIX_VERSION_CONTENT'] = 'Arreglar la instalación de QuickBox reinstalando la última versión disponible';

/* **********************************
 * generate functions
 ************************************/
$L['GENERATE_FUNCTIONS'] = 'Generar funciones';
$L['GENERATE_FUNCTIONS_INFO_CONTENT'] = '<p>Las funciones <code>qb generate</code> en QuickBox ofrecen una forma conveniente y eficiente de crear elementos esenciales que mejoran la administración y el monitoreo del servidor. Actualmente, el comando qb generate es compatible con la función de generación de registros de qb, lo que permite a los usuarios generar sin esfuerzo una vista previa de las estadísticas de los servidores, la activación de API y la información de montaje.<br/>A medida que las funciones de generación de qb evolucionen, es probable que ofrezcan una matriz en expansión de funciones para mejorar aún más la administración del servidor.</p>';
$L['GENERATE_SYSTEM_LOGS'] = 'Generar registros del sistema';
$L['GENERATE_SYSTEM_LOGS_CONTENT'] = 'Genera registros del sistema para la instalación actual de QuickBox';
$L['GENERATE_SYSTEM_LOGS_WARNING_CONTENT'] = '<p>A partir de la versión <em>3.0.0.<strong>36+</strong></em>, <code>qb generate log</code> ha evolucionado hasta convertirse en una utilidad más detallada para la agregación y organización de registros. Su objetivo es simplificar la recuperación de registros complementando los registros nativos de una aplicación al resumir y centralizar los datos de registro críticos, haciendo que la resolución de problemas sea mucho más eficiente.</p><p>Este comando y su funcionalidad son un trabajo continuo en progreso.</p>';
$L['GENERATE_SYSTEM_LOGS_SUCCESS_CONTENT'] = '<p>Puede acceder y descargar este archivo de registro resumido de tres maneras:<br><ol><li><strong>Generar/Descargar:</strong> Vaya a \'Sistema > <a href="/troubleshooting.php" class="link">Solución de problemas</a> > Registro del sistema\' dentro de la interfaz de usuario. Aquí puede generar y/o descargar el resumen del registro del sistema producido por el comando generar registro.</li><li><strong>Ver registros:</strong> Vaya a \'Sistema > <a href="/logs.php" class="link">Registros del sistema</a>\'. Aquí es donde puede encontrar registros adicionales e información recopilada por el comando generar registro.</li><li><strong>Directorio del servidor:</strong> Encuéntrelo en el servidor en: \'/srv/quickbox/logs/system_log\'.</li></ol></p>';

/* **********************************
 * manage functions
 ************************************/
$L['MANAGE_FUNCTIONS'] = 'Administrar funciones';
$L['MANAGE_FUNCTIONS_INFO_CONTENT'] = '<p>Las funciones <code>qb manage</code> en QuickBox brindan un conjunto de herramientas poderoso y completo para administrar eficientemente varios aspectos de su servidor. Diseñadas pensando en la comodidad del usuario, estas funciones le permiten controlar sin esfuerzo los elementos críticos de su entorno impulsado por QuickBox.<br/>Ya sea para cambiar la configuración de idioma, verificar el estado de la activación de su API principal, administrar la distribución de datos o garantizando la integridad de los datos a través de copias de seguridad y reversiones, las funciones de gestión de qb ofrecen una solución integral para administradores de servidores y entusiastas por igual.</p>';
$L['MANAGE_API_KEY'] = 'Administrar clave API';
$L['MANAGE_API_KEY_CONTENT'] = 'Administrar claves API de QuickBox y enumerar información y opciones adicionales';
$L['ADD_API_KEY'] = 'Agregar clave API';
$L['ADD_API_KEY_CONTENT'] = 'Agregar/Activar clave API';
$L['REMOVE_API_KEY'] = 'Quitar clave API';
$L['REMOVE_API_KEY_CONTENT'] = 'Quitar/Desactivar clave API';
$L['MANAGE_DASHBOARD_ACCESS_URL'] = 'Administrar URL de acceso al panel';
$L['MANAGE_DASHBOARD_ACCESS_URL_CONTENT'] = 'Este comando establece la raíz web del servidor para el acceso al tablero ya sea al Dominio expresado oa la Dirección IP';
$L['SET_SERVER_LANG'] = 'Establecer idioma del servidor';
$L['SET_SERVER_LANG_CONTENT'] = 'Este comando establecerá el idioma solicitado como idioma predeterminado para el servidor';
$L['MANAGE_PUBLIC_TRACKERS'] = 'Administrar rastreadores públicos';
$L['MANAGE_PUBLIC_TRACKERS_CONTENT'] = 'Este comando activará o desactivará los rastreadores públicos para todos los usuarios';
$L['EX_PUB_TRACKERS_ALLOW'] = 'ejemplo para permitir rastreadores públicos:';
$L['EX_PUB_TRACKERS_DISALLOW'] = 'ejemplo para no permitir rastreadores públicos:';
$L['BACKUP_APPLICATIONS'] = 'Aplicaciones de respaldo';
$L['PARTIAL_CONFIG_ONLY_BACKUP'] = 'Copia de seguridad parcial <span class="badge badge-pills badge-table-menu" style="padding:2px 6px;line-height:0.7rem;background-color:var(--indigo);color:#fff;font-size:0.5rem;">config only</span>';
$L['PARTIAL_CONFIG_ONLY_BACKUP_CONTENT'] = 'Este comando respaldará la configuración de la aplicación designada para el usuario asignado';
$L['FULL_CONFIG_AND_APP_BACKUP'] = 'Copia de seguridad completa <span class="badge badge-pills badge-table-menu" style="padding:2px 6px;line-height:0.7rem;background-color:var(--primaryColor);color:#fff;font-size:0.5rem;">config &amp; aplicación</span>';
$L['FULL_CONFIG_AND_APP_BACKUP_CONTENT'] = 'Este comando hará una copia de seguridad de la aplicación designada para el usuario asignado. Incluye la aplicación y los datos de configuración, útiles para revertir a versiones previamente instaladas y respaldadas';
$L['PARTIAL_RTORRENT_ALL_USERS_BACKUP'] = 'Copia de seguridad parcial (solo rtorrent)';
$L['PARTIAL_RTORRENT_ALL_USERS_BACKUP_PRIMARY_CONTENT'] = '<p>En el caso de rtorrent como la configuración de software para la copia de seguridad, no se requiere el indicador de nombre de usuario (<code>-u</code>).</p>';
$L['PARTIAL_RTORRENT_ALL_USERS_BACKUP_CONTENT'] = 'Este comando realizará una copia de seguridad de todos los archivos .rtorrent.rc de los usuarios de rtorrent existentes.<br>Las copias de seguridad se almacenan en:<br><code>/home/[USERNAME]/.QuickBox/software/rtorrent /backup/.rtorrent.rc_AÑO-MES-DÍA_HORA:MINUTO</código>';
$L['ROLLBACK_APPLICATIONS'] = 'Restaurar copia de seguridad de la aplicación';
$L['ROLLBACK_APPLICATIONS_CONTENT'] = 'Este comando revertirá la aplicación designada para el usuario asignado a una versión anterior almacenada/seleccionada en el directorio de copia de seguridad.<br>Las copias de seguridad se almacenan en:<br><code>/home/[ NOMBRE DE USUARIO]/.QuickBox/software/[SOFTWARE_NAME]/backup/</code>';
$L['RESTORE_APP_BACKUP_CONFIG'] = 'Restaurar copia de seguridad <span class="badge badge-pills badge-table-menu" style="padding:2px 6px;line-height:0.7rem;background-color:var(--indigo);color:#fff;font-size:0.5rem;">config only</span>';
$L['RESTORE_APP_BACKUP_CONFIG_CONTENT'] = 'Este comando restaurará la configuración de la aplicación designada previamente respaldada para el usuario asignado';
$L['RESTORE_APP_DEFAULT_CONFIG'] = 'Restaurar predeterminado <span class="badge badge-pills badge-table-menu" style="padding:2px 6px;line-height:0.7rem;background-color:var(--indigo);color:#fff;font-size:0.5rem;">config only</span>';
$L['RESTORE_APP_DEFAULT_CONFIG_CONTENT'] = 'Este comando restaurará la configuración de la aplicación predeterminada designada (desde la instalación) para el usuario asignado';

/* **********************************
 * news functions
 ************************************/
$L['NEWS_FUNCTIONS'] = 'Funciones de Noticias';
$L['NEWS_FUNCTIONS_INFO_CONTENT'] = '<p>La función <code>qb news</code> en QuickBox ofrece actualizaciones de noticias oportunas y relevantes directamente a su servidor, lo que garantiza que se mantenga informado sobre los últimos desarrollos y cambios en el ecosistema de QuickBox. . Con el objetivo de mantenerlo actualizado, esta función brinda información esencial sobre los lanzamientos actuales y futuros, los cambios de versión y otros elementos de interés.</p>';
$L['NEWS'] = 'Noticias';
$L['NEWS_CONTENT'] = 'Ver las últimas noticias de QuickBox';

/* **********************************
 * support functions
 ************************************/
$L['SUPPORT_FUNCTIONS'] = 'Funciones de soporte';
$L['SUPPORT_FUNCTIONS_INFO_CONTENT'] = '<p>La función <code>qb support</code> en QuickBox ofrece un método seguro y confiable para otorgar acceso al personal de soporte a su servidor cuando se necesita asistencia. Con un fuerte énfasis en la seguridad y la protección del usuario, esta función utiliza la cuenta <code>quickSupport</code>, lo que garantiza que solo el personal de soporte autorizado pueda acceder a su servidor.</p>';
$L['ENABLE_SUPPORT'] = 'Habilitar soporte';
$L['ENABLE_SUPPORT_CONTENT'] = 'Habilitar soporte. Por lo general, se asigna al miembro del equipo de personal que es responsable del soporte';
$L['DISABLE_SUPPORT'] = 'Deshabilitar soporte';
$L['DISABLE_SUPPORT_CONTENT'] = 'Deshabilitar soporte. De lo contrario, la cuenta de soporte se eliminará automáticamente después de 36 horas';

/* **********************************
 * update functions
 ************************************/
$L['UPDATE_FUNCTIONS'] = 'Funciones de actualización';
$L['UPDATE_FUNCTIONS_INFO_CONTENT'] = '<p>La función <code>qb update</code> en QuickBox le ofrece una forma conveniente y flexible de administrar las actualizaciones para su instalación de QuickBox. Con esta función, tiene control total sobre el proceso de actualización, lo que le permite buscar actualizaciones manualmente y elegir cuándo aplicarlas.</p>';
$L['UPDATE_CHECK'] = 'Actualizar verificación';
$L['UPDATE_CHECK_CONTENT'] = 'Buscar actualizaciones de QuickBox';
$L['UPDATE_QUICKBOX'] = 'Actualizar QuickBox';
$L['UPDATE_QUICKBOX_CONTENT'] = 'Actualizar la instalación de QuickBox a la última versión, si hay alguna disponible';

/* **********************************
 * bugs & reporting
 ************************************/
$L['BUGS'] = 'Errores e informes';
$L['BUGS_INFO_CONTENT'] = '<p>La visualización gráfica de la documentación de QuickBox recibirá actualizaciones periódicas para garantizar que la información proporcionada siga siendo fácilmente accesible y fácil de usar. Nuestro compromiso de mejorar su experiencia con QuickBox nos impulsa a refinar y mejorar continuamente la documentación, manteniéndola actualizada con las últimas características y funcionalidades.<br/><br/>
Con cada actualización, nos esforzaremos por simplificar conceptos complejos, aclarar instrucciones e incorporar comentarios de los usuarios para hacer que la página de manual de qb sea aún más intuitiva y eficiente. Nuestro objetivo es brindarle una comprensión perfecta de QuickBox y sus amplias capacidades, lo que le permite dominar el entorno qb CLI y administrar sin esfuerzo las tareas de su servidor.<br/><br/>
Valoramos sus comentarios y lo alentamos a compartir cualquier sugerencia o idea que pueda tener para mejorar aún más la página de manual de qb. Sus comentarios son fundamentales para dar forma a este recurso y garantizar que siga siendo una referencia valiosa para todos los usuarios de QuickBox. ¡De hecho, esta página existe porque fue solicitada! 🤪<br/><br/>
Informe cualquier error reproducible o sugerencia a <strong><a href="https://nullrefer.ir/?https://lab.quickbox.io/QuickBox/pro-v3/-/issues" rel="noopener nofollow" target="_blank">Rastreador de problemas y funciones de QuickBox.IO Labs</a></strong></p>';

/* **********************************
 * disclaimer
 ************************************/
$L['DISLAIMER'] = 'Descargo de responsabilidad';
$L['DISCLAIMER_TEXT'] = '<p>Este script está diseñado para uso general y no implica ninguna garantía de idoneidad para una tarea dada. QuickBox.IO no será responsable de su configuración ni de ningún daño causado durante el uso/instalación/modificación de este script o cualquiera de sus complementos. Tenga en cuenta que ni QuickBox.IO ni su personal son responsables de mantener actualizado su Software y/o Servidor; esta es una responsabilidad exclusiva del usuario del software QuickBox Pro.</p>';

/* **********************************
 * license
 ************************************/
$L['LICENSE'] = 'Licencia';
$L['LICENSE_SET'] = 'Con licencia bajo BSD 3-Cláusula';
$L['LICENSE_TEXT'] = '<p>Copyright (c) 2018-2023, QuickBox.IO. Todos los derechos reservados.</p>
<p>Se permite la redistribución y el uso en formato fuente y binario, con o sin modificaciones, siempre que se cumplan las siguientes condiciones:</p>
<ul style="font-size:0.75rem"><li>Las redistribuciones del código fuente deben conservar el aviso de derechos de autor anterior, esta lista de condiciones y el siguiente descargo de responsabilidad.</li>
<li>Las redistribuciones en forma binaria deben reproducir el aviso de derechos de autor anterior, esta lista de condiciones y el siguiente descargo de responsabilidad en la documentación y/u otros materiales provistos con la distribución.</li>
<li>Ni el nombre del titular de los derechos de autor ni los nombres de sus colaboradores pueden utilizarse para respaldar o promocionar productos derivados de este software sin el permiso previo por escrito.</li></ul>
<p>ESTE SOFTWARE ES PROPORCIONADO POR LOS TITULARES DE LOS DERECHOS DE AUTOR Y LOS CONTRIBUYENTES "TAL CUAL" Y CUALQUIER GARANTÍA EXPLÍCITA O IMPLÍCITA, INCLUYENDO, ENTRE OTRAS, LAS GARANTÍAS IMPLÍCITAS DE COMERCIABILIDAD E IDONEIDAD PARA UN FIN DETERMINADO. EN NINGÚN CASO EL TITULAR DE LOS DERECHOS DE AUTOR O LOS CONTRIBUYENTES SERÁN RESPONSABLES POR CUALQUIER DAÑO DIRECTO, INDIRECTO, INCIDENTAL, ESPECIAL, EJEMPLAR O CONSECUENTE (INCLUYENDO, ENTRE OTROS, LA ADQUISICIÓN DE BIENES O SERVICIOS SUSTITUTOS; PÉRDIDA DE USO, DATOS O BENEFICIOS; O INTERRUPCIÓN DEL NEGOCIO) CUALQUIER CAUSA Y EN CUALQUIER TEORÍA DE RESPONSABILIDAD, YA SEA POR CONTRATO, RESPONSABILIDAD ESTRICTA O AGRAVIO (INCLUYENDO NEGLIGENCIA O DE OTRO TIPO) QUE SURJA DE CUALQUIER FORMA DEL USO DE ESTE SOFTWARE, INCLUSO SI SE ADVIERTE DE LA POSIBILIDAD DE DICHO DAÑO. </p>';

/* **********************************
 * misc
 ************************************/
$L['EXAMPLE'] = 'ejemplo:';
$L['EXAMPLES'] = 'ejemplos:';

/* **********************************
 * 4.4.7 - CHANGELOG / UPDATE
 ************************************/
$L['CURRENT_VERSION'] = 'Versión actual';
$L['DASH_UPDATE_TITLE'] = 'Panel de la versión QuickBox';
$L['QB_UPDATE'] = 'Panel de la versión QuickBox';
$L['QBUPDATE'] = 'Registro de cambios / Actualización';
$L['UPCOMING_CHANGES'] = 'Próximos cambios';
$L['UPDATE_AVAILABLE'] = 'Actualización disponible';
$L['UPDATE_TO_DATE'] = 'Al día';
$L['VERSION_STATUS'] = 'Estado de la versión';
$L['UPDATE_TXT'] = 'Actualizar';
$L['AVAILABLE_TXT'] = '¡Disponible!';
$L['UPDATE_VERSION'] = 'Actualizar versión';
$L['UPDATE_ACTIVATE'] = 'Active su suscripción Pro para recibir actualizaciones';
$L['UPDATE_CURRENT'] = '¡Estás actualizado!';
$L['CHANGELOGS'] = 'Registros de cambios';

/* **********************************
 * 4.4.8 - SYSTEM DASHBOARD
 ************************************/
$L['DISK_UTIL_TIME'] = 'Tiempo de utilización del disco';
$L['DISK_IO_BW'] = 'Ancho de banda de E/S de disco';
$L['DISK_SPACE_USAGE_FOR'] = 'Uso de espacio en disco para:';
$L['DISK_UTILIZATION'] = 'Utilización';
$L['DISK_WRITE'] = 'Escribir';
$L['DISK_READ'] = 'Leer';
$L['SYS_DISK_READ'] = 'Lectura de Disco';
$L['SYS_DISK_WRITE'] = 'Escritura en Disco';
$L['TOP_CPU_PROC'] = 'Principales procesos de aplicación de CPU';
$L['TOP_CPUMEM_PROC'] = 'Principales procesos de memoria de la CPU';
$L['TOP_CPUSYS_PROC'] = 'Principales procesos del sistema de CPU';
$L['SERVICE_MEM_USAGE'] = 'Memoria utilizada de Systemd Services sin caché';
$L['SYS_SWAP_USAGE'] = 'Uso de intercambio del sistema';
$L['SYS_MEM_USAGE'] = 'Uso de la memoria del sistema';
$L['CPU_FREQ'] = 'Frecuencia de CPU actual';
$L['CPU_LOAD'] = 'Carga de CPU';
$L['CPU_USAGE'] = 'Uso de CPU';
$L['RAM_USAGE'] = 'Uso de RAM';
$L['BW_UPLOAD'] = 'Carga de ancho de banda';
$L['BW_DOWNLOAD'] = 'Descarga de ancho de banda';
$L['SYS_UPLOAD'] = 'Subir';
$L['SYS_DOWNLOAD'] = 'Descargar';
$L['SYS_DASH_POWERED_BY'] = 'Panel del sistema impulsado por:';
$L['SYS_DASH_UPTIME'] = 'Tiempo de actividad del sistema';
$L['SYS_DASH_SWAP_USED'] = 'Swap usado';
$L['SYS_DASH_RAM_USED'] = 'RAM usada';
$L['SYS_DASH_CPU'] = 'CPU';
$L['SYS_DASH_TMD'] = 'Descarga mensual total';
$L['SYS_DASH_TMU'] = 'Carga mensual total';
$L['APT_UPDATES'] = 'Actualizaciones de APT';
$L['APT_DEPENDENCY'] = 'Paquete de dependencia';
$L['APT_VERSION_INSTALLED'] = 'Versión actual';
$L['APT_VERSION_AVAILABLE'] = 'Versión disponible';
$L['UPDATE_APT_DEPENDENCIES'] = 'Actualizar dependencias apt';

/* **********************************
 * 4.5 - ERROR PAGES
 ************************************/
$L['404HACK'] = '¡Ay! ¿Realmente quieres lastimarme?';
$L['404PAGE'] = 'Esta no es la página que está buscando.';
$L['404PRO'] = 'Por favor, compre un <a href="https://nullrefer.ir/?https://quickbox.io/product/quickbox-pro-subscription/" rel="noopener nofollow" target="_blank">Licencia QuickBox</a> para acceder a esta página.';
$L['500PAGE'] = 'Esto es vergonzoso, algo parece haber salido mal.';
$L['WHOOPS'] = 'Whoops!';

/* ************************************************************************************
! BEGIN DEPRECATED !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
***************************************************************************************/
$L['ABOUT'] = 'Acerca de';
$L['GETTING_SUPPORT'] = 'Getting Support';
$L['HELP_TEXT'] = '<p class="fs14">Hecho con amor por <a href="https://nullrefer.ir/?https://quickbox.io" rel="noopener nofollow" target="_blank">QuickBox.IO</a>.<br><br>
Podrás encontrar ayuda en varios lugares, incluidos los foros. Si necesitas asistencia o tienes una duda relacionada con QuickBox Pro y sus aplicaciones, puedes encontrarla <a href="https://nullrefer.ir/?https://plaza.quickbox.io" rel="noopener nofollow" target="_blank">aquí</a>.<br><br>
O visitanos en QuickBox.IO, donde hay algunos bits más de información, incluido un chat <a href="https://nullrefer.ir/?https://discord.gg/hCCbVhu" rel="noopener nofollow" target="_blank"> aquí</a>.<br><br>
Si necesitas ponerte en contacto con el personal de QuickBox sobre un problema o falla con el script, puedes reportarlo en nuestra <a href="https://nullrefer.ir/?https://discord.gg/hCCbVhu" rel="noopener nofollow" target="_blank">Discord</a> o enviar una publicación <a href="https://nullrefer.ir/?https://plaza.quickbox.io/c/bugs "rel="noopener nofollow" target="_blank"> here </a>.</p><br><br>';
$L['HELP_TITLE'] = 'Panel de Control QuickBox, Página Principal & Gestión de Usuarios';
$L['HELP'] = 'Ayuda';
//commands
$L['ADDITIONAL_ADMIN_COMMANDS'] = 'Comandos adicionales de Configuración de las Aplicaciones de Administración';
$L['ADMIN_UPGRADE_COMMANDS'] = 'Comandos de Actualización del Administrador';
$L['CLEAN_MEM_INFO'] = 'Usa el comando anterior como root cuando quiera borrar la memoria caché física de tu sistema.';
$L['DISKTEST_INFO'] = 'Escribe este comando para realizar una prueba rápida de L/E de tu disco.';
$L['ESSENTIAL_USER_COMMANDS'] = 'Comandos Esenciales del Usuario';
$L['FIXHOME_INFO'] = 'Escribe este comando para ajustar rápidamente los permisos del directorio /home.';
$L['QUICK_SYSTEM_TIPS'] = 'Consejos Rápidos Del Sistema';
$L['QUICKVPN_INFO'] = 'Escribe este comando en ssh para configurar tu propio servidor VPN en no más de un minuto, así como administrar y crear nuevos certificados de usuario para usar el servidor VPN.';
$L['SCREEN_IRSSI_INFO'] = 'Permite al usuario reiniciar irssi desde SSH.';
$L['SCREEN_RTORRENT_INFO'] = 'Permite al usuario reiniciar rtorrent desde SSH.';
$L['UPGRADEBTSYNC_INFO'] = 'Escribe este comando en ssh para actualizar BTSync a la versión más reciente cuando esté disponible.';
$L['UPGRADEDELUGE_INFO'] = 'Escribe este comando en ssh para actualizar Deluge a la versión más reciente cuando esté disponible.';
$L['UPGRADEOMBI_INFO'] = 'Escribe este comando en ssh para actualizar Ombi a la versión más reciente cuando esté disponible.';
$L['UPGRADEPLEX_INFO'] = 'Escribe este comando en ssh para actualizar Plex a la versión más reciente cuando esté disponible.';
$L['UPGRADERUTORRENT_INFO'] = 'Escribe este comando en ssh para actualizar ruTorrent y el tema club-QuickBox a la versión más reciente cuando esté disponible.';
/* ************************************************************************************
! END DEPRECATED !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
***************************************************************************************/