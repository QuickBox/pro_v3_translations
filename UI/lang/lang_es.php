<?php

/**
 * Archivo de idioma español de QuickBox Pro
 *
 * Este archivo se utiliza para traducir el panel de control de QuickBox Pro al español.
 * Listo para QuickBox Pro v3.2.0: 28 de marzo de 2025
 *
 * @package    dashboard
 * @subpackage lang
 * @category   Spanish
 * @version    3.0.1.103
 * @since      1.0.0
 *
 * @var Configs $configs The configurations object.
 * @var Session $session The user session object.
 */

// Include required variables
$version           = $configs->getConfig('Version');
$username          = $session->username;
$network_interface = $configs->getConfig('server_network_adapter');
// Execute the shell command to get the server IP
$command   = "ip route get 8.8.8.8 | sed -n '/src/{s/.*src *\\([^ ]*\\).*/\\1/p;q}'";
$server_ip = shell_exec($command);
// Trim any trailing whitespace or newlines from the result
$server_ip = trim((string) $server_ip);

/*
 * @resumen Este archivo contiene la estructura de navegación, widgets, elementos varios y páginas para QuickBox Pro.
 *
 * NAVEGACIÓN (#1)
 * ---------------
 *   - #1.1: Selección de idioma y tema
 *   - #1.2: Menú de usuario
 *   - #1.3: Menú de la barra lateral
 *   - #1.4: Submenús de la barra lateral
 *   - #1.5: Pie de página
 *
 * DIVERSOS (#2)
 * ------------
 *   - #2.1: Botones
 *   - #2.2: Textura emergente
 *   - #2.3: Modal de edición de la configuración de NGINX para aplicaciones
 *   - #2.4: Otros
 *
 * WIDGETS (#3)
 * ------------
 *   Cabeceras de tablas (#3.1):
 *     - #3.1.1: Centro de gestión de aplicaciones
 *
 *   Centro de gestión de paquetes (#3.2):
 *     - #3.2.1: Información de la aplicación
 *     - #3.2.2: Desinstalar aplicación
 *     - #3.2.3: Reinstalar aplicación
 *     - #3.2.4: Alternancias y consejos
 *     - #3.2.5: Control de servicios
 *     - #3.2.6: Alternancias específicas de Rclone
 *
 *   Widgets del panel de control (#3.3):
 *     - #3.3.1: Widget de estado del disco
 *     - #3.3.2: Índice del sistema v1 – Datos de ancho de banda
 *     - #3.3.3: Índice del sistema v1 – Carga del servidor
 *     - #3.3.4: Índice del sistema v1 – Estado de la memoria
 *     - #3.3.5: Widget de actividad del servidor
 *
 * PÁGINAS (#4)
 * ------------
 *   Formularios de la pantalla de inicio (#4.1):
 *     - #4.1.1: Iniciar sesión
 *     - #4.1.2: Olvidé mi contraseña
 *     - #4.1.3: Registro
 *     - #4.1.4: Cuenta
 *       - #4.1.4.1: Citas
 *       - #4.1.4.2: Modal de edición de cuenta
 *     - #4.1.5: Resumen
 *
 *   Configuraciones (#4.2):
 *     - #4.2.1: Configuraciones generales
 *     - #4.2.2: Configuraciones de correo electrónico
 *     - #4.2.3: Configuraciones de sesión
 *     - #4.2.4: Configuraciones de usuario
 *     - #4.2.5: Configuraciones de seguridad
 *
 *   Gestión de usuarios (#4.3):
 *     - #4.3.1: Configuraciones de registro
 *     - #4.3.2: Administrador de usuarios
 *       - #4.3.2.1: Editar usuario administrador
 *       - #4.3.2.2: Anuncio del administrador
 *     - #4.3.3: Grupos de usuarios
 *
 *   Sistema (#4.4):
 *     - #4.4.1: Consola web
 *     - #4.4.2: Control de API
 *     - #4.4.3: Control de SSL
 *     - #4.4.4: Control de VPN
 *     - #4.4.5: Solución de problemas
 *     - #4.4.6: Registros del sistema
 *     - #4.4.7: Manual de ayuda
 *       - #4.4.7.1: Descripción
 *       - #4.4.7.2: Opciones
 *       - #4.4.7.3: Software
 *       - #4.4.7.4: Tabla de opciones de software
 *       - #4.4.7.5: Encabezado de ejemplos
 *       - #4.4.7.6: Gestión de usuarios
 *       - #4.4.7.7: Funciones de limpieza
 *       - #4.4.7.8: Funciones de reparación
 *       - #4.4.7.9: Funciones de generación
 *       - #4.4.7.10: Funciones de gestión
 *       - #4.4.7.11: Funciones de noticias
 *       - #4.4.7.12: Funciones de soporte
 *       - #4.4.7.13: Funciones de actualización
 *       - #4.4.7.14: Errores y reportes
 *       - #4.4.7.15: Aviso legal
 *       - #4.4.7.16: Licencia
 *       - #4.4.7.17: Misceláneo
 *     - #4.4.8: Registros de cambios / Actualización
 *     - #4.4.9: Panel del sistema
 *       - #4.4.9.1 - Modal de totales de ancho de banda
 *     - #4.4.10: Panel de Qué Está en Reproducción
 *       - #4.4.10.1: Qué Está en Reproducción - errores y mensajes a nivel de página
 *
 *   Páginas de error (#4.5)
 */

/* ********************************************************************************
 * #1 NAVIGATION
 *
 * #1.1 - language & theme selection
 ************************************/
$L['CHINESE']         = 'Chino';
$L['DANISH']          = 'Danés';
$L['ENGLISH']         = 'Inglés';
$L['FRENCH']          = 'Francés';
$L['GERMAN']          = 'Alemán';
$L['PORTUGUESE']      = 'Portugués';
$L['SELECT_LANGUAGE'] = 'Selecciona tu idioma';
$L['SELECT_THEME']    = 'Selección';
$L['SPANISH']         = 'Español';
$L['THEME_DARK']      = 'Tema oscuro';
$L['THEME_LIGHT']     = 'Tema claro';

/* **********************************
 * #1.2 - user menu (top right)
 ************************************/
$L['PROFILE'] = 'Mi perfil';
$L['LOG_OUT'] = 'Desconexión';
$L['REBOOT']  = 'Reiniciar';

/* **********************************
 * #1.3 - sidebar menu
 ************************************/
$L['ABOUT_AND_TIPS']    = 'Acerca de / Consejos rápidos';
$L['APP_DASHBOARD']     = 'Panel de control de software';
$L['DASHBOARD']         = 'El Tablero';
$L['DB_MGNT']           = 'phpMyAdmin';
$L['EXTERNAL_LINKS']    = 'Enlaces personalizados';
$L['GENERAL_SETTINGS']  = 'Configuración General';
$L['HELP_SUPPORT']      = 'Ayuda / Actualización';
$L['KB']                = 'Base de conocimientos';
$L['PLUGINS']           = 'Complementos';
$L['REGISTRATION']      = 'Registro';
$L['SECURITY_SETTINGS'] = 'Configuración de Seguridad';
$L['SESSION_SETTINGS']  = 'Configuración de Sesiones';
$L['SETTINGS']          = 'Configuración';
$L['SYS_DASHBOARD']     = 'Panel de Sistema';
$L['SYSTEM_LOGS']       = 'Registros del sistema';
$L['SYSTEM']            = 'Sistema';
$L['USER_ADMIN']        = 'Gestión de Usuarios';
$L['USER_GROUPS']       = 'Grupos de Usuario';
$L['USER_MANAGEMENT']   = 'User Management';
$L['USER_SETTINGS']     = 'Configuración de Usuario';
$L['WEB_CONSOLE']       = 'Consola Web';

/* **********************************
 * #1.4 - sidebar submenus
 ************************************/
$L['APP_MENU']        = 'Menú de software';
$L['APPLICATIONS']    = 'Mi Software';
$L['DASHBOARD_INFO']  = 'Seleccione entre el panel de administración del sistema o el panel de software visto por todos los usuarios.';
$L['DASHBOARD_VIEW']  = 'Vista del tablero';
$L['DOWNLOADS']       = 'Descargas';
$L['FILEMANAGER']     = 'Administrador de archivos';
$L['NZB_CLIENTS']     = 'Clientes de NZB';
$L['PLUGINS_CENTER']  = 'Centro de complementos';
$L['PLUGINS_INFO']    = 'Instala y desinstala fácilmente complementos simplemente haciendo clic en el nombre del complemento.';
$L['RPLUGINS_NOTICE'] = 'Instala y desinstala facilmente plugins de ruTorrent haciendo click en el nombre del plugin';
$L['RPLUGINS']        = 'ruTorrent Plugins';
$L['TORRENT_CLIENTS'] = 'Clientes Torrent';

/* **********************************
 * #1.5 - footer
 ************************************/
$L['ALL_RIGHTS'] = 'Todos los derechos reservados.';

/* ********************************************************************************
 * #2 MISCELLANEOUS
 *
 * #2.1 - buttons
 ************************************/
$L['ACTIVATE_USERS']                = 'Activar Usuarios';
$L['ADD_IP_ADDRESS']                = 'Agregar Dirección IP';
$L['ADD_USERNAME']                  = 'Agregar Nombre de Usuario';
$L['AGREE']                         = 'Entiendo, hazlo!';
$L['API_ACTIVATE']                  = 'Activar';
$L['APP_MANAGEMENT']                = 'Gestión de Aplicaciones';
$L['APPS_INSTALLED']                = 'Apps instaladas';
$L['AUTO_DISABLE']                  = 'Desactivar las actualizaciones automáticas';
$L['AUTO_ENABLE']                   = 'Habilitar actualizaciones automáticas';
$L['BACK']                          = 'Atrás';
$L['BAN_USER']                      = 'Prohibir usuario';
$L['CANCEL']                        = 'Cancelar';
$L['CLEAN_LOG']                     = 'Limpiar registro de actualización';
$L['CLEAN_RCLOG']                   = 'Limpie el registro de carga de RClone';
$L['CLICK_ME']                      = 'Haz click aquí';
$L['CLOSE_REFRESH']                 = 'Cerrar y Actualizar';
$L['CLOSE']                         = 'Cerrar';
$L['CPU_TAB']                       = 'CPU';
$L['CREATE_ANNOUNCEMENT']           = 'Crear anuncio';
$L['CREATE_GROUP']                  = 'Crear Grupo';
$L['CREATE_NEW_GROUP']              = 'Crear un Nuevo Grupo';
$L['CREATE_NEW_USER']               = 'Crear Nuevo Usuario';
$L['CREATE_USER']                   = 'Crear Usuario';
$L['DATABASE_SIZE']                 = 'Tamaño de la base de datos:';
$L['DELETE_ALL_ANNOUNCEMENTS']      = 'Eliminar todos los anuncios';
$L['DELETE_ALL_LOGS']               = 'Borrar Todos Los Registros (> 30 días)';
$L['DELETE_INACTIVE_USERS']         = 'Eliminar Usuarios Inactivos';
$L['DELETE_LOGS']                   = 'Borrar Registros';
$L['DELETE_SELECTED_ANNOUNCEMENTS'] = 'Eliminar anuncios seleccionados';
$L['DELETE_SELECTED_SESSIONS']      = 'Eliminar Sesiones Seleccionadas';
$L['DELETE_SELECTED']               = 'Eliminar Seleccionados';
$L['DELETE_USER']                   = 'Borrar usuario';
$L['DEMOTE']                        = 'Descender de administrador';
$L['DISABLED']                      = 'Deshabilitada';
$L['DISK_TAB']                      = 'Disco';
$L['DOWNLOAD']                      = 'Descargar';
$L['EDIT_ANNOUNCEMENT']             = 'Editar anuncio seleccionado';
$L['EDIT_GROUP']                    = 'Editar Grupo';
$L['EDIT_USER']                     = 'Editar usuario';
$L['ENABLED']                       = 'Habilitada';
$L['EXECUTE']                       = 'Ejecutar';
$L['GENERATE']                      = 'Generar';
$L['GO_BACK']                       = 'Regresa';
$L['IN_USE']                        = 'En uso';
$L['INSTALL']                       = 'Instalar';
$L['INSTALLED']                     = 'Desinstalar';
$L['INSTALLING']                    = 'Instalando';
$L['KILL_USER_SESSION']             = 'Cerrar todas las sesiones de usuario';
$L['LAUNCH']                        = 'Lanzamiento';
$L['LOGIN']                         = 'Iniciar sesión';
$L['LOGOFF']                        = 'Cerrar sesión';
$L['MEMORY_TAB']                    = 'Memoria';
$L['NETWORK_TAB']                   = 'La red';
$L['NGINX_BACKUP']                  = 'Copia de seguridad de Nginx Config';
$L['NGINX_DEFAULT']                 = 'Restaurar configuración predeterminada';
$L['NGINX_DISABLE']                 = 'Desactivar la ventana emergente de Autenticación';
$L['NGINX_ENABLE']                  = 'Habilitar popup de autenticación';
$L['NGINX_RESTORE']                 = 'Restaurar la copia de seguridad de Nginx';
$L['APP_BACKUP_FULL']               = 'Copia de seguridad completa';
$L['APP_BACKUP_PARTIAL']            = 'Copia de seguridad parcial';
$L['APP_DEFAULT_PARTIAL_RESTORE']   = 'Restaurar predeterminado';
$L['APP_BACKUP_PARTIAL_RESTORE']    = 'Restaurar copia de seguridad';
$L['ED_MENU_CONFIG_APP']            = 'config y app';
$L['ED_MENU_CONFIG']                = 'solo config';
$L['VERSION_ROLLBACK_OPTIONS']      = 'Opciones de reversión';
$L['VERSION_ROLLBACK_V']            = 'Versión: ';
$L['VERSION']                       = 'Versión';
$L['FECHA']                         = 'Fecha';
$L['VERSION_ROLLBACK_CONFIRM']      = '¿Volver a esta versión?';
$L['VERSION_ROLLBACK_DELETE']       = '¿Eliminar esta copia de seguridad?';
$L['PROMOTE']                       = 'Promocionar a administrador';
$L['RCLONE_LOCK_REMOVE']            = 'quitar bloqueo';
$L['RCLONE_LOGS']                   = 'ver los registros';
$L['RCLONE_UPLOAD']                 = 'subir';
$L['REFRESH']                       = 'Actualizar';
$L['REGISTER']                      = 'Registrarse';
$L['REGISTRADO']                    = 'Registrada';
$L['REINSTALL']                     = 'Reinstalar';
$L['RELOAD_CONF']                   = 'Recargar Configuraciones';
$L['RELOAD']                        = 'Recarga';
$L['REMOVE_BANNED_IP']              = 'Eliminar Direcciones IP Bloqueadas';
$L['REMOVE_DISALLOWED']             = 'Eliminar Nombres de Usuario No Permitidos';
$L['REMOVE_MEMBER']                 = 'Eliminar Miembro del Grupo';
$L['REMOVE']                        = 'Eliminar';
$L['RESET_VERSION']                 = 'Reiniciar la versión actual';
$L['RESET']                         = 'Reiniciar';
$L['RESTART']                       = 'Reanudar';
$L['SAVE']                          = 'Guardar';
$L['SERVICE_CONTROL']               = 'Control de Servicios';
$L['SIMULATE_BUTTON']               = 'Simular';
$L['SIMULATE_END']                  = 'Finalizar Sim';
$L['SIMULATE_USER']                 = 'Simular usuario';
$L['NANGINX']                       = 'N/A El servicio se ejecuta en nginx';
$L['START']                         = 'Comienzo';
$L['STOP']                          = 'Detener';
$L['SUBMIT']                        = 'Enviar Cambios';
$L['TOP_PROC_TAB']                  = 'Procesos principales';
$L['UNBAN_USER']                    = 'Desbancar usuario';
$L['UNINSTALLED']                   = 'Desinstalada';
$L['UNINSTALLING']                  = 'Desinstalando';
$L['UP']                            = 'Arriba';
$L['UPDATE']                        = 'Actualizar';
$L['UPDATE_TOOLTIP']                = 'Haga clic para ver más información';
$L['UPDATE_VERSION']                = 'Versión de actualización';
$L['USER_ACTIONS']                  = 'User Actions';
$L['VIEW_CHANGELOG']                = 'Ver el registro de cambios';
$L['LATEST']                        = 'último';
$L['CURRENT']                       = 'actual';
$L['VIEW']                          = 'Ver';

/* **********************************
 * #2.2 - popup texture
 ************************************/
$L['SYSTEM_RESPONSE_TITLE'] = 'Respuesta del Sistema';
$L['UNINSTALL_TITLE']       = 'Desinstalando';
$L['UNINSTALLING_TXT_1']    = 'Lamento verte ir ... Desinstalando';
$L['UNINSTALLING_TXT_2']    = 'en progreso. Por favor se paciente';

/* **********************************
 * #2.3 - app nginx config edit modal
 ************************************/
$L['ALERT_NGINX_EDITOR']  = 'Se recomienda hacer una copia de seguridad de su configuración actual primero y solo alterar la configuración a continuación si está bien versado en Nginx o si un miembro del personal lo instruye';
$L['BACKUP_NGINX_LOC']    = 'Ubicación de la copia de seguridad de la configuración de Nginx';
$L['CURRENT_NGINX_LOC']   = 'Ubicación actual de la configuración de Nginx';
$L['NGINX_APP_CONFIGURE'] = 'Editor de configuración de Nginx';
$L['NGINX_EDIT']          = 'Editar configuración de Nginx';
$L['ALERT_CONFIG_EDITOR'] = 'Se aconseja hacer primero una copia de seguridad de la configuración actual y sólo alterar la configuración siguiente si se tiene conocimiento de las ediciones que se están realizando, se ha consultado la propia documentación de la aplicación o se reciben instrucciones de un miembro del personal';
$L['BACKUP_CONFIG_LOC']   = 'Ubicación de la copia de seguridad de la configuración';
$L['CURRENT_CONFIG_LOC']  = 'Config Ubicación actual';
$L['APP_CONFIG_OPTIONS']  = 'Editor de configuración de aplicaciones';
$L['APP_CONFIG_EDIT']     = 'Editar la configuración de la aplicación';

/* **********************************
 * #2.4 - other
 ************************************/
$L['ABOUT_RELEASE']       = 'Acerca de Versión';
$L['COPYRIGHT']           = 'Derechos de autor';
$L['EMAIL']               = 'E-mail';
$L['HERE']                = 'aquí';
$L['HOME']                = 'Inicio';
$L['IDLE_L']              = 'inactiva';
$L['IDLE']                = 'Inactiva';
$L['IS_AVAILABLE']        = 'disponible.';
$L['LANGUAGES']           = 'Idiomas';
$L['NEED_HELP']           = 'Necesitas ayuda ?';
$L['NGINX_CONF_OPTIONS']  = 'Opciones de Nginx Conf';
$L['NGINX_CONFIG']        = 'Configuración de Nginx';
$L['NGINX_SETTINGS']      = 'Configuración de Nginx';
$L['NO']                  = 'No';
$L['NOTIFICATIONS']       = 'Notificaciones';
$L['OPEN']                = 'abierto';
$L['OR']                  = 'o';
$L['PASSWORD']            = 'Contraseña';
$L['PLEASE_HOLD']         = '- Por favor espera';
$L['REQUIRED_FIELD']      = 'Campo Requerido...';
$L['REQUIRED_FIELDS']     = 'Los campos marcados con <span style="color:#d9534f">*</span> son requeridos';
$L['SET_HERE']            = 'Configurar aquí';
$L['SIMULATE_LIST']       = 'Lista de usuarios';
$L['SIMULATE']            = 'Simulación de usuarios';
$L['SUMMARY']             = 'Descripción';
$L['THEMES']              = 'Temas';
$L['UPDATING_QUICKBOX']   = 'Actualizando QuickBox';
$L['UPDATING']            = 'Actualizando ';
$L['USED_L']              = 'usado';
$L['USERNAME']            = 'Nombre de Usuario';
$L['USERS']               = 'Usuarios';
$L['YES']                 = 'Si';
$L['ADD_MOUNT_PATH_INFO'] = 'Seleccione si desea ignorar las cuotas (si están instaladas) en el directorio seleccionado. Esta opción, cuando se elige, ignorará las cuotas para la ruta especificada. Utilice esta opción cuando supervise un directorio donde no se deben considerar cuotas. Esto garantiza cálculos de espacio precisos, especialmente para montajes rclone.';
$L['ADD_NEW_MOUNT_CHECK'] = 'Agregar un montaje o directorio existente para monitorear';
$L['MOUNT_PATH_SUCCESS']  = 'Ruta agregada exitosamente para monitoreo. Actualizando página...';
$L['MOUNT_PATH_ERROR']    = 'La ruta que intentó agregar para monitoreo no existe.<br>Vuelva a verificar la ruta e inténtelo nuevamente.';
$L['MOUNTS']              = 'Monturas:';
$L['MOUNT_ADD_PATH']      = 'Agregar ruta';
$L['MOUNT_CHECK_ABOUT']   = 'Estos valores se calculan y actualizan periódicamente. Los valores no son en tiempo real. Puede forzar una actualización de estas estadísticas haciendo clic en el botón \'Iniciar escaneo\' a continuación.';
$L['MOUNT_CHECK_PROCESS'] = 'Los valores de porcentaje de espacio se están calculando actualmente en segundo plano. Vuelva a consultar más tarde para ver los resultados actualizados. Requiere actualización de página.';
$L['MOUNT_MONITOR_INFO']  = 'Información de montaje adicional';
$L['MOUNT_START_SCAN']    = 'Iniciar escaneo';
$L['REMOVE_MOUNT_PATH']   = 'Eliminar ruta monitoreada. Esto no eliminará el directorio real o el punto de montaje.';

/* ********************************************************************************
 * #3 WIDGETS
 *
 * #3.1 - Tables Headers
 *
 * #3.1.1 - app management center
 ************************************/
$L['AVAILABILITY'] = 'Disponibilidad';
$L['DETAILS']      = 'Detalles';
$L['NAME']         = 'Nombre';
$L['CONFIGS']      = 'Configuraciones';
$L['EXTRAS']       = 'Extras';

/* **********************************
 * #3.2 - Package Management Center
 *
 * #3.2.1 - app info
 ************************************/
$L['AIRSONIC']      = 'Airsonic-Advanced es una implementación más moderna del fork de Airsonic con varias mejoras clave de rendimiento y características. Añade y sustituye varias características de Airsonic. Airsonic es un streamer multimedia gratuito, basado en la web, que proporciona un acceso omnipresente a tu música.';
$L['AUTOBRR']       = 'Autobrr es un reemplazo binario único moderno para el complemento autodl-irssi+rutorrent. Autobrr supervisa los canales de anuncios de IRC y los feeds RSS de torznab para obtener lanzamientos tan pronto como estén disponibles, con un buen filtrado y compatibilidad con expresiones regulares.';
$L['AUTODL']        = 'AutoDL-iRSSi es un plugin para irssi que supervisa los anuncios en canales IRC y descarga archivos de torrent según los filtros definidos por el usuario.';
$L['AUTOSCAN']      = 'Autoscan reemplaza el comportamiento predeterminado de Plex y Emby para recoger los cambios de archivos en el sistema de archivos. Autoscan se integra con Sonarr, Radarr, Lidarr y Google Drive para recoger los cambios casi en tiempo real sin depender del sistema de archivos';
$L['BAZARR']        = 'Bazarr es una aplicación complementaria para Sonarr y Radarr. Gestiona y descarga subtítulos en función de sus requisitos. Usted define sus preferencias por programa de televisión o película y Bazarr se encarga de todo por usted.';
$L['BAZARR4K']      = 'Bazarr4K es un clon independiente de Bazarr para los perfiles 4K UHD. Es un medio para manejar múltiples instancias de Bazarr, manteniendo el contenido UHD separado del contenido general.';
$L['BBR']           = 'BBR es un nuevo algoritmo de control de congestión desarrollado por Google aplicado al kernel de Linux. Con BBR, el servidor puede obtener un rendimiento significativamente mayor y reducir la latencia de sus conexiones. BBR';
$L['BTSYNC']        = 'BitTorrent Sync de BitTorrent, Inc es un software propietario basado en P2P para la sincronización e intercambio de archivos.';
$L['CALIBRE']       = 'Calibre es un paquete de software de libros electrónicos de código abierto multiplataforma. Calibre admite la organización de libros electrónicos existentes en bibliotecas virtuales, visualización, edición, creación y conversión de libros electrónicos, así como la sincronización de libros electrónicos con una variedad de lectores electrónicos. La edición de libros es compatible con los formatos EPUB y AZW3.';
$L['COUCHPOTATO']   = 'Descarga películas de forma automática, fácil y con la mejor calidad tan pronto como se publiquen, a través de usenet o torrents.';
$L['CSF']           = 'ConfigServer Firewall, también conocido como CSF, es un firewall que proporciona una mejor seguridad para tu servidor, mientras te brinda una interfaz web avanzada fácil de usar, para administrar las configuraciones del firewall.';
$L['DELUGE']        = 'Deluge es un cliente BitTorrent multiplataforma ligero y liviano, de software libre.';
$L['DUPLICATI']     = 'Duplicati es un cliente de respaldo de código abierto y gratuito que almacena de manera segura respaldos encriptados, incrementales y comprimidos en servicios de almacenamiento en la nube y servidores de archivos remotos. Puede funcionar con Amazon S3, Dropbox, Google Drive, FTP, SSH / SFTP, WebDAV y <a href="https://nullrefer.ir/?https://duplicati.readthedocs.io/en/latest/01-introduction/#supported-backends" rel="noopener nofollow" target="_blank">muchos más</a>.';
$L['EMBY']          = 'Emby es un centro multimedia de código abierto diseñado para permitirnos centralizar todo nuestro contenido multimedia en un equipo y poder acceder a todo él desde cualquier otro equipo o dispositivo conectado a internet. Este centro multimedia es compatible con prácticamente cualquier sistema operativo, como Windows, Linux, macOS, NAS y con dispositivos móviles Android y iOS.';
$L['FAIL2BAN']      = 'Fail2Ban es un marco de software de prevención de intrusiones que protege los servidores informáticos de los ataques de fuerza bruta.';
$L['FILEBOT']       = 'FileBot es la herramienta definitiva para organizar y cambiar el nombre de sus películas, programas de televisión y anime, así como para obtener subtítulos e ilustraciones. Es inteligente y solo funciona.';
$L['FILEBROWSER']   = 'filebrowser proporciona una interfaz de administración de archivos dentro de un directorio específico y se puede usar para cargar, eliminar, obtener una vista previa, cambiar el nombre y editar sus archivos. Permite la creación de múltiples usuarios y cada usuario puede tener su propio directorio. Se puede utilizar como aplicación independiente o como middleware.';
$L['FLARESOLVERR']  = 'FlareSolverr es un servidor proxy para evitar la protección de Cloudflare.';
$L['FLEXGET']       = 'FlexGet es una herramienta de automatización multipropósito para todos sus medios. Soporte para torrents, nzbs, podcasts, comics, TV, películas, RSS, HTML, CSV, y más.';
$L['FLOOD']         = 'Flood es un servicio de monitoreo para varios clientes de torrent. Es un servicio de Node.js que se comunica con su cliente de torrent favorito y ofrece una interfaz de usuario web decente para la administración. La organización <a href="https://nullrefer.ir/?https://github.com/Flood-UI" target="_blank" rel="nofollow noopener">Flood-UI</a> alberga proyectos relacionados.';
$L['HEADPHONES']    = 'Headphones es un gestor de descargas automáticas de música para NZB y Torrent, escrito en Python. Es compatible con SABnzbd, NZBget, Transmission, µTorrent, Deluge y Blackhole.';
$L['JACKETT']       = 'Soporte API para tus trackers privados favoritos.';
$L['JDOWNLOADER']   = 'JDownloader es una herramienta de administración de descargas gratuita que le permite descargar rápidamente archivos desde servicios de alojamiento como Mediafire, 4Shared y otros servicios de alojamiento con funcionalidades similares. Los servicios de alojamiento de archivos a menudo mantienen la velocidad de descarga máxima para incentivar la compra de paquetes premium; JDownloader le ayuda a evitar ese requisito.';
$L['JELLYFIN']      = 'Jellyfin es un sistema de medios de software libre que le permite controlar la administración y transmisión de sus medios.';
$L['JELLYSEERR']    = 'Jellyseerr es una aplicación de software gratuita y de código abierto para gestionar las solicitudes de su biblioteca multimedia. ¡Es una bifurcación de Overseerr creada para brindar soporte a los servidores de medios Jellyfin y Emby!';
$L['KAVITA']        = 'Kavita es un servidor de lectura multiplataforma, rápido y rico en funciones. Creado con un enfoque para manga y el objetivo de ser una solución completa para todas sus necesidades de lectura. Configure su propio servidor y comparta su colección de lecturas con sus amigos y familiares.';
$L['KOMGA']         = 'Komga es un servidor de medios para sus cómics/manga digitales, con un enfoque en proporcionar una interfaz simple y moderna.';
$L['LAZYLIBRARIAN'] = 'LazyLibrarian es una aplicación similar a los auriculares SickBeard, CouchPotato, para libros electrónicos, audiolibros y revistas. Utiliza una combinación de <a href="https://nullrefer.ir/?https://www.goodreads.com/" rel="noopener nofollow" target="_blank"> Goodreads </a> <a href="https://nullrefer.ir/?https://www.librarything.com/" rel="noopener nofollow" target="_blank"> Librarything </a> y opcionalmente <a href="https://nullrefer.ir/?https://www.googleapis.com/books/v1/" rel="noopener nofollow" target="_blank"> GoogleBooks </a> como fuentes de información del autor e información del libro.';
$L['LETSENCRYPT']   = 'Let\'s Encrypt es una autoridad de certificación (CA) gratuita, automatizada y abierta, que se ejecuta en beneficio del público por el <a href="https://nullrefer.ir/?https://letsencrypt.org/isrg/" rel="noopener nofollow" target="_blank">Grupo de Investigación de Seguridad de Internet (ISRG)</a>.';
$L['LIDARR']        = 'Lidarr es una aplicación basada en Sonarr, modificada para descargar automáticamente música a través de Usenet y BitTorrent. El proyecto se inspiró en otros gestores de descarga de música de Usenet / BitTorrent, como Headphones.';
$L['MEDUSA']        = 'Video File Manager para programas de televisión, revisa los nuevos episodios de tus programas favoritos y, cuando se publican, hace su magia. Permite realizar búsquedas manuales y otras funciones exclusivas, consulta Medusa en <a href="https://nullrefer.ir/?https://github.com/pymedusa/Medusa" rel="noopener nofollow" target="_blank"> Github </a>.';
$L['MYLAR3']        = 'Mylar es un programa de descarga de cómics (cbr/cbz) automatizado para usar con NZB y torrents escritos en python. Es compatible con SABnzbd, NZBGET y muchos clientes de torrent además de DDL.';
$L['NETDATA']       = 'Netdata is distributed, real-time, performance and health monitoring for systems and applications.';
$L['NEXTCLOUD']     = 'Nextcloud es una plataforma de código abierto cliente-servidor, con el objetivo de crear un servicio de alojamiento de archivos. Accede y sincroniza tus archivos, contactos, calendarios y comuníquese y colabore entre todos sus dispositivos. ¡Decide qué sucede con sus datos, dónde están y quién puede acceder a ellos!';
$L['NOTIFIARR']     = 'Este es el cliente unificado para <a href="https://nullrefer.ir/?https://notifiarr.com/" rel="noopener nofollow" target="_blank">Notifiarr.com</a>. El cliente habilita las solicitudes de contenido de Media Bot en su servidor Discord y también proporciona informes sobre el uso de Plex y el estado del sistema, entre muchas otras características..';
$L['NOVNC']         = 'NoVNC es un cliente VNC escrito completamente en HTML5 de manera que nos permite conectarnos a un servidor remoto sin necesidad de instalar ningún software adicional. noVNC funciona bien en cualquier navegador moderno, incluidos los navegadores móviles (iOS y Android).';
$L['NZBGET']        = 'NZBGet es un gestor de descargas de archivos de Usenet, basándose en la información que se proporciona en los archivos nzb. NZBGet está escrito en C ++ y es conocido por su extraordinario rendimiento y eficiencia.';
$L['NZBHYDRA']      = 'NZBHydra es buscador de indexadores NZB. Proporciona un acceso fácil a varios buscadores basados en raw y newznab. Puede buscar en todos los indexadores desde un solo lugar y utilizarlos en herramientas como Sonarr o CouchPotato.';
$L['NZBHYDRA2']     = 'NZBHydra2 es buscador de indexadores NZB. Proporciona un acceso fácil a varios buscadores basados en raw y newznab. Puede buscar en todos los indexadores desde un solo lugar y utilizarlos en herramientas como Sonarr o CouchPotato.';
$L['OMBI']          = 'Ombi ofrece una interfaz web fácil de usar, en donde los usuarios pueden solicitar fácilmente contenidos para agregar a la biblioteca. Se integra con CouchPotato, SickChill y Sonarr.';
$L['OVERSEERR']     = 'Overseerr es una aplicación de software gratuita y de código abierto para administrar las solicitudes de su biblioteca de medios. ¡Se integra con sus servicios existentes, como Sonarr, Radarr y Plex!';
$L['OVPN']          = 'OpenVPN es una herramienta de conectividad basada en software libre: SSL, VPN Virtual Private Network. Es compatible con Linux, Solaris, OpenBSD, FreeBSD, NetBSD, Mac OS X y Windows 2000 / XP +.';
$L['PHPMYADMIN']    = 'phpMyAdmin es una herramienta escrita en <a href="https://nullrefer.ir/?https://php.net/" rel="noopener nofollow" target="_blank">PHP</a>, con la intención de manejar la administración de <a href="https://nullrefer.ir/?https://www.mysql.com/" rel="noopener nofollow" target="_blank">MySQL</a> a través de páginas web, utilizando Internet. Actualmente puede crear y eliminar Bases de Datos, crear, eliminar y alterar tablas, borrar, editar y añadir campos, ejecutar cualquier sentencia SQL, administrar claves en campos, administrar privilegios y exportar datos en varios formatos.';
$L['PLEX']          = 'Plex te permite transmitir tu contenido a cualquier dispositivo habilitado para Plex.';
$L['PROWLARR']      = 'Prowlarr es un gestor/proxy indexador construido en la popular pila base arr .net/reactjs para integrarse con sus diversas aplicaciones PVR. Prowlarr es compatible con los rastreadores de torrents y los indexadores de Usenet. Se integra a la perfección con Sonarr, Radarr, Lidarr y Readarr, lo que ofrece una gestión completa de sus indexadores sin necesidad de configurar el indexador por aplicación.';
$L['PYLOAD']        = 'pyLoad es un gestor de descargas para sitios web, sitios de video y enlaces HTTP/FTP. Puede encontrar una lista de los sitios admitidos <a href="https://nullrefer.ir/?https://github.com/pyload/pyload/wiki/Supported-Hoster" rel="noopener nofollow" target="_blank">aquí</a>';
$L['QBITTORRENT']   = 'qBittorrent es un cliente BitTorrent P2P gratuito y confiable. Un cliente BitTorrent avanzado y multiplataforma con una agradable interfaz de usuario Qt, así como una interfaz de usuario web para control remoto y un motor de búsqueda integrado.';
$L['QUASSEL']       = 'Quassel IRC es un cliente moderno, multiplataforma y distribuido de IRC basado en Qt4 framework.';
$L['QUOTAS']        = 'Esta característica de Linux le permite al administrador del sistema asignar una cantidad máxima de espacio en disco que un usuario o grupo puede usar.';
$L['RADARR']        = 'Radarr es una aplicación basada en Sonarr, modificada para descargar automáticamente películas a través de Usenet y BitTorrent.<br>El proyecto se inspiró en otros gestores de descargas de películas de Usenet / BitTorrent como CouchPotato.';
$L['RADARR4K']      = 'Radarr4K es un clon independiente de Radarr para los perfiles 4K UHD. Es un medio para manejar múltiples instancias de Radarr, manteniendo el contenido UHD separado del contenido general.';
$L['RAPIDLEECH']    = 'Rapid Leech es un script gratuito de descargas que puede ser utilizado en varios sitios populares como uploaded.net, Rapidshare.com y más de otros 120.';
$L['RCLONE']        = 'RClone es un programa de línea de comandos para sincronizar archivos y directorios desde y hacia una multitud de hosts';
$L['READARR']       = 'Readarr es un gestor de colecciones de libros electrónicos para usuarios de Usenet y BitTorrent. Puede monitorear múltiples canales RSS para nuevos libros de sus autores favoritos y se interconectará con clientes e indexadores para agarrarlos, ordenarlos y renombrarlos.';
$L['REQUESTRR']     = 'Requestrr es un chatbot de Discord que sirve para simplificar el uso de servicios como Sonarr/Radarr/Ombi mediante el uso del chat. Todos los usuarios de su servidor de Discord pueden solicitar la adición de nuevos contenidos y recibir una notificación cuando estén disponibles.';
$L['RTORRENT']      = 'rTorrent es un cliente de BitTorrent rápido y eficiente que utiliza, y está en desarrollo junto con, la biblioteca libTorrent (que no debe confundirse con libtorrent-rasterbar). Está escrito en C ++ y usa la biblioteca de programación ncurses, lo que significa que usa una interfaz de usuario de texto.';
$L['RUTORRENT']     = 'ruTorrent es una interfaz web para el popular cliente de Bittorrent, rtorrent. Características principales: Liviano y ligero, por lo que puede instalarse en servidores antiguos y de gama baja, e incluso en algunos routers SOHO, Extensible: hay muchos plugins y todos pueden crear uno, viene con el tema <a href="https://nullrefer.ir/?https://github.com/QuickBox/club-QuickBox" rel="noopener nofollow" target="_blank">club-QuickBox</a>.';
$L['SABNZBD']       = 'SABnzbd es una aplicación multiplataforma de descarga de noticias. La aplicación funciona en segundo plano y simplifica la descarga, la verificación y la extracción de archivos desde Usenet. SABnzbd usa archivos NZB (similares a los archivos .torrent, pero para Usenet), en lugar de navegar directamente por Usenet.';
$L['SEEDCROSS']     = 'SeedCross es una aplicación web para torrents Cross-Seed en Deluge/qBittorrent/Transmission. Es una bifurcación de <a href="https://nullrefer.ir/?https://github.com/BC44/Cross-Seed-AutoDL" rel="noopener nofollow" target="_blank">Cross-Seed-AutoDL</a>.';
$L['SICKCHILL']     = 'Video File Manager para programas de televisión, revisa los nuevos episodios de tus programas favoritos y, cuando se publican, hace su magia.';
$L['SICKGEAR']      = 'SickGear es la evolución de Sick-Beard. Automatiza el disfrute de tu TV con innovación, estabilidad y confiabilidad.';
$L['SONARR']        = 'Sonarr es una herramienta de gestión de series de televisión que funcionará tanto con torrents como con usenet.';
$L['SONARR4K']      = 'Sonarr4K es un clon independiente de Sonarr para los perfiles 4K UHD. Es un medio para manejar múltiples instancias de Sonarr, manteniendo el contenido UHD separado del contenido general.';
$L['SUBSONIC']      = 'Subsonic es un servidor de medios de comunicación libre, de código abierto, basado en web. Está escrito en Java, se puede ejecutar en cualquier sistema operativo que tenga soporte de máquina virtual Java, admite simultáneamente múltiples clientes streaming y es compatible con cualquier medio streamable, es decir, que pueda transmitir (incluyendo MP3, AAC y Ogg).';
$L['SYNCTHING']     = 'Sincronización continua de archivos con BitTorrent.';
$L['TAUTULLI']      = 'Una aplicación web basada en Python para monitoreo, análisis y notificaciones de tu Plex Media Server.';
$L['THELOUNGE']     = 'A modern self-hosted web IRC client';
$L['TRANSMISSION']  = 'Transmission está diseñado para un uso fácil y poderoso. Los valores predeterminados ya están configurados y solo se necesitan unos pocos clics para configurar funciones avanzadas como directorios, listas de bloqueo de peer incorrectos y la interfaz web. Cuando Ubuntu eligió Transmission como su cliente BitTorrent predeterminado, una de las razones fue por su fácil curva de aprendizaje.';
$L['UNIFI']         = 'El controlador UniFi® es una solución de software de administración de redes inalámbricas de Ubiquiti Networks ™. Le permite administrar múltiples redes inalámbricas usando un navegador web. ';
$L['UNPACKERR']     = 'Extrae descargas para Radarr, Sonarr, Lidarr, Readarr: elimina los archivos extraídos después de la importación.';
$L['WEBCONSOLE']    = 'TTYD (también conocido como QuickBox Web Console) es un terminal con todas las funciones basado en Xterm.js con compatibilidad con CJK e IME.';
$L['WIREGUARD']     = 'WireGuard® es una VPN extremadamente simple pero rápida y moderna que utiliza criptografía de última generación. Su objetivo es ser más rápido, más simple, más ágil y más útil que IPsec, evitando al mismo tiempo el enorme dolor de cabeza. Pretende tener un rendimiento considerablemente mayor que OpenVPN. WireGuard está diseñado como una VPN de uso general para ejecutarse en interfaces integradas y supercomputadoras por igual, apta para muchas circunstancias diferentes.';
$L['X2GO']          = 'X2Go es un software de escritorio remoto para Linux que utiliza el protocolo de tecnología NX.';
$L['XTEVE']         = 'xTeVe es una aplicación que simula un sintonizador de TV, te permite tener canales de IPTV vía Plex o Emby. xTeVe puede combinar varios archivos M3U y XMLTV y enviarlos a su Media Center preferido.';
$L['ZNC']           = 'ZNC es un "IRC bouncer" o BNC. Puede separar al cliente del servidor IRC real, y también de los canales seleccionados.';

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
	'WIREGUARD'     => 'WireGuard',
	'X2GO'          => 'X2Go',
	'XTEVE'         => 'XTeVe',
	'ZNC'           => 'ZNC'
];

/* **********************************
 * #3.2.2 - app uninstall
 ************************************/
// Loop through the array and create the uninstall translation
foreach ($APPS as $key => $value) {
	$L[$key . '_UNINSTALL'] = 'Estás a punto de desinstalar <span style="color:#01cea2">' . $value . '</span> de tu sistema.<br/><br/>Esto eliminará por completo todas tus configuraciones y ajustes... esta acción es irreversible.<br/><br/>Puedes reinstalar <span style="color:#01cea2">' . $value . '</span> en cualquier momento, sin embargo, su configuración se restablecerá a los valores predeterminados.';
}

/* **********************************
 * #3.2.3 - app reinstall
 ************************************/
// Loop through the array and create the reinstall translation
foreach ($APPS as $key => $value) {
	$L[$key . '_REINSTALL'] = 'Estás a punto de reinstalar <span style="color:#01cea2">' . $value . '</span>.<br/><br/>Esto eliminará/restablecerá por completo todas sus configuraciones, archivos y ajustes actuales... esta acción es irreversible.';
}

/* **********************************
 * #3.2.4 - toggles & tooltips
 ************************************/
$L['APP_OPTIONS']                  = 'Opciones de la aplicación';
$L['NGINX_OPTIONS']                = 'Opciones de NGinx';
$L['CARD_VIEW']                    = 'Vista de la tarjeta';
$L['LIST_VIEW']                    = 'Vista de la lista';
$L['CLI']                          = 'Solo Consola Web';
$L['COMPAT_E']                     = 'Error de compatibilidad';
$L['CURRENTLY_INSTALLED_NOTICE']   = 'Parece que tiene acceso a una aplicación que solo puede instalar un usuario a la vez. Hable con el administrador del sistema para obtener más información sobre su disponibilidad.';
$L['CURRENTLY_INSTALLED_TITLE']    = 'Alguien tiene esta aplicación instalada actualmente';
$L['DEL1_TOOLTIP']                 = 'It looks like you are running on Ubuntu 20.04. Deluge v1 will not run on this Distro. Please consider installing Deluge v2 to continue as Deluge v2 runs on updated libtorrent1.2+ and python3+.';
$L['DEL2_TOOLTIP']                 = 'It looks like qBittorrent is currently installed. Deluge v2 will not work with qBittorrent installed. Please either remove qBittorrent or install Deluge v1 to continue.';
$L['DEL2XENIAL_TOOLTIP']           = 'It looks like you are running on Ubuntu 16.04. Deluge v2 will not run on this Distro. Please consider installing Deluge v1 to continue.';
$L['EMBY_JELLYFIN_COMPAT_MESSAGE'] = 'Jellyfin instalado';
$L['ENTER_MOUNT_POINT']            = 'Por favor ingrese su punto de montaje primario';
$L['FAIL2BAN_TOOLTIP']             = 'Acceda a esta función desde ssh escribiendo:<br><code>qb install fail2ban</code>';
$L['JELLYFIN_EMBY_COMPAT_MESSAGE'] = 'Emby instalado';
$L['MEDUSA_INSTALLED']             = 'Medusa Instalada';
$L['OVPN_TOOLTIP']                 = 'Acceda a esta función desde tu consola web escribiendo:<br><code>qb install vpn -u USER</code>';
$L['PRIMARY_MOUNTM']               = 'Montaje Primario';
$L['QBIT_TOOLTIP']                 = 'Parece que Deluge 2 está instalado actualmente. qBittorrent no funcionará con Deluge 2 instalado. Elimine Deluge 2 o instale Deluge 1 para continuar.';
$L['QUOTAS_FSTAB']                 = 'Edita tu fstab';
$L['QUOTAS_HELP']                  = 'Para más información sobre cómo instalar cuotas, <a href="https://nullrefer.ir/?https://quickbox.io/knowledge-base/how-to-install-quotas/" rel="noopener nofollow" target="_blank"><strong>por favor lea estas F.A.Q primero</strong></a>.';
$L['QUOTAS_TOOLTIP']               = 'Agregue lo siguiente en lugar de <code class="language-bash">defaults</code> en su punto de montaje principal para continuar';
$L['RCLONE_ADMIN_TOOLTIP']         = 'Acceda a esta función desde ssh escribiendo:<br><code>qb install rclone -u USER [--dropbox|--gdrive] [--encrypted] [--beta]</code><br>Consulte <code>qb help rclone</code> para obtener más opciones.';
$L['RCLONE_USER_TOOLTIP']          = 'Póngase en contacto con un administrador del sistema para tener esto instalado.';
$L['REMOVE_MEDUSA_FIRST']          = 'Desinstala primero Medusa para instalar esta aplicación.';
$L['REMOVE_SICKCHILL_FIRST']       = 'Desinstala primero SickChill para instalar esta aplicación.';
$L['REMOVE_SICKGEAR_FIRST']        = 'Desinstala primero SickGear para instalar esta aplicación.';
$L['SICKCHILL_INSTALLED']          = 'Sickchill Instalada';
$L['SICKGEAR_INSTALLED']           = 'SickGear Instalada';
$L['UNIFI_SSL_TOOLTIP']            = 'Si ya tiene un dominio establecido en la raíz de su sitio, así como un certificado de cifrado ya generado para el dominio, seleccione esta opción.';
$L['ZNC_TOOLTIP']                  = 'Acceda a esta función desde ssh escribiendo:<br><code>qb install znc -u USER</code>';

/* **********************************
 * UI - app install/reinstall modals
 *
 * calibre install/reinstall modal
 ************************************/
$L['CALIBRE_INSTALL_TITLE']   = 'Instalación de Calibre';
$L['CALIBRE_REINSTALL_TITLE'] = 'Reinstalación de Calibre';
$L['CALIBRE_INSTALL_MESSAGE'] = 'Tiene la opción de especificar una ruta de directorio personalizada para su biblioteca Calibre. Si la ruta elegida no existe actualmente, se generará automáticamente para usted.<br>Alternativamente, si prefiere usar la ruta predeterminada, simplemente deje el campo en blanco y la biblioteca se ubicará en:<br><code>/home/' . $username . '/.config/Calibre/library</code>';

/* **********************************
 * filebot install/reinstall modal
 ************************************/
$L['FILEBOT_INSTALL_TITLE']         = 'Instalar Filebot';
$L['FILEBOT_REINSTALL_TITLE']       = 'Reinstalar Filebot';
$L['PROCESS_DELUGE']                = '¿Procesar descargas para Deluge?';
$L['PROCESS_DELUGE_TOOLTIP']        = 'Establezca esto en Sí para procesar descargas para Deluge.<br>Vea cómo implementarlo en las notas del script ubicadas en:<br><code>/home/' . $username . '/.config/Filebot/deluge-postprocess.sh</code>';
$L['CUSTOM_PATH_TOOLTIP_NO_RCLONE'] = 'Establezca esto en Sí para ingresar la ruta a su biblioteca multimedia.<br>La ruta predeterminada es:<br><code>/home/' . $username . '/Media</code>';
$L['CUSTOM_PATH_TOOLTIP_RCLONE']    = 'Establezca esto en Sí para ingresar la ruta a su biblioteca multimedia.<br>La ruta predeterminada es:<br><code>/home/' . $username . '/rclone/cache</code>';
$L['PROCESS_NZBGET']                = '¿Procesar descargas para NZBGet?';
$L['PROCESS_NZBGET_TOOLTIP']        = 'Establezca esto en Sí para procesar descargas para NZBGet.<br>Vea cómo implementarlo en las notas del script ubicadas en:<br><code>/home/' . $username . '/.config/NZBGet/scripts/nzbget-postprocess.sh</code>';
$L['PROCESS_RTORRENT']              = '¿Procesar descargas para rTorrent?';
$L['PROCESS_SABNZBD']               = '¿Procesar descargas para SABnzbd?';
$L['CUSTOM_MEDIA_PATH']             = '¿Usar una ruta personalizada a la biblioteca multimedia?';
$L['FILEBOT_DEFAULT_PATH']          = 'ejemplo';
$L['FILEBOT_LICENSE']               = 'Licencia de Filebot';

/* **********************************
 * jdownloader install/reinstall modal
 ************************************/
$L['JDOWNLOADER_INSTALL_TITLE']        = 'Instalación de JDownloader';
$L['JDOWNLOADER_REINSTALL_TITLE']      = 'Reinstalación de JDownloader';
$L['JDOWNLOADER_EMAIL']                = 'Dirección de correo electrónico de la cuenta JDownloader';
$L['JDOWNLOADER_PASSWORD']             = 'Contraseña de la cuenta JDownloader';
$L['JDOWNLOADER_INSTALL_PATH_MESSAGE'] = 'Tiene la opción de especificar una ruta de directorio personalizada para sus descargas de JDownloader. Si la ruta elegida no existe actualmente, se generará automáticamente.<br>Como alternativa, si prefiere utilizar la ruta predeterminada, simplemente deje el campo en blanco y la biblioteca se ubicará en:<br><code>/home/' . $username . '/Downloads</code>';

/* **********************************
 * kavita install/reinstall modal
 ************************************/
$L['KAVITA_INSTALL_TITLE']   = 'Instalación de Kavita';
$L['KAVITA_REINSTALL_TITLE'] = 'Reinstalación de Kavita';
$L['KAVITA_INSTALL_MESSAGE'] = 'Tiene la opción de especificar una ruta de directorio personalizada para su biblioteca Kavita. Si la ruta elegida no existe actualmente, se generará automáticamente.<br>Como alternativa, si prefiere utilizar la ruta predeterminada, simplemente deje el campo en blanco y la biblioteca se ubicará en:<br><code>/home/' . $username . '/.config/Kavita/library</code>';

/* **********************************
 * mylar3 install/reinstall modal
 ***************************************/
$L['MYLAR3_INSTALL_TITLE']   = 'Instalación de Mylar3';
$L['MYLAR3_REINSTALL_TITLE'] = 'Reinstalación de Mylar3';
$L['MYLAR3_INSTALL_MESSAGE'] = 'Tiene la opción de especificar una ruta personalizada para su directorio Mylar3 Comics. Si la ruta elegida no existe actualmente, se generará automáticamente para usted.<br>Alternativamente, si prefiere utilizar la ruta predeterminada, simplemente deje el campo en blanco y el directorio se ubicará en:<br><code>/home/' . $username . '/Media/Comics</code>';

/* **********************************
 * plex install/reinstall modal
 ************************************/
$L['PLEX_CLAIM_MESSAGE']     = '<p style="font-size:12px">Para reclamar su Plex Media Server, ya debe tener una cuenta e iniciar sesión para obtener el código de reclamo de: <a href="https://www.plex.tv/claim/" rel="noopener nofollow" target="_blank" style="color:var(--qb-color-37);"><strong>https://www.plex.tv/claim/</strong></a></p><div class="alert alert-light-info fade show border-0 mb-2 mt-0" role="alert" style="font-size:12px;color:var(--qb-color-2)"><strong style="color:var(--qb-color-37)">NOTA:</strong> Se recomienda utilizar el botón "Copiar al portapapeles" en la pantalla del código de reclamo para asegurarse inserción adecuada ya que el código de reclamación distingue entre mayúsculas y minúsculas.</div>';
$L['PLEX_CLAIM_TITLE']       = 'Instalación del servidor Plex Media';
$L['PLEX_CLAIM_TOKEN']       = 'Código de reclamación de Plex';
$L['PLEX_DATA_PATH']         = '¿Usar una ruta personalizada para el directorio de datos?';
$L['PLEX_DATA_PATH_TOOLTIP'] = 'Tiene la opción de especificar una ruta de datos personalizada para su instalación de Plex. Si la ruta elegida no existe actualmente, se generará automáticamente para usted.<br>Alternativamente, si prefiere usar la ruta predeterminada, simplemente mantenga la selección como \'No\', y el directorio de datos será ubicado en:<br><code>/home/' . $username . '/.config/\'Plex Media Server\'</code>';
$L['PLEX_DOMAIN']            = '¿Establecer dominio para Plex Media Server?';
$L['PLEX_DOMAIN_TOOLTIP']    = 'Si ya tiene un dominio y los registros DNS configurados para un subdominio de Plex, seleccione \'Sí\' para ingresar su subdominio de Plex.<br>Esta opción configurará su Plex Media Server para trabaje a la perfección con su dominio Plex personalizado. Incluye configurar el proxy inverso Nginx esencial e instalar el certificado SSL para su dominio para garantizar un acceso seguro.';

/* **********************************
 * rutorrent plugin control modal
 ************************************/
$L['RUTORRENT_PLUGIN_CONTROL_TITLE'] = 'Control del complemento ruTorrent';
$L['AUTHOR']                         = 'Autor';
$L['HELP_URL']                       = 'Documentación';

/* **********************************
 * wireguard install/reinstall modal
 ************************************/
$L['WIREGUARD_INSTALL_TITLE']                 = 'Instalación de WireGuard';
$L['WIREGUARD_REINSTALL_TITLE']               = 'Reinstalación de WireGuard';
$L['WIREGUARD_CLIENT_OR_SERVER']              = '¿Cliente o servidor WireGuard?';
$L['WIREGUARD_CLIENT_OR_SERVER_TOOLTIP']      = 'Al seleccionar \'Servidor\' se instalará WireGuard como servidor. Al seleccionar \'Cliente\' se instalará WireGuard como cliente. El servidor se utiliza para alojar un servidor VPN, mientras que el cliente se utiliza para conectarse a un servidor VPN. Seleccionar \'Cliente\' requerirá un archivo de configuración proporcionado por su proveedor de VPN y enrutará todo el tráfico a través de la VPN.';
$L['CLIENT']                                  = 'Cliente';
$L['SERVER']                                  = 'Servidor';
$L['WIREGUARD_CONFIG_TIPS']                   = 'Cargue el archivo de configuración de su servidor o cliente WireGuard en formato <code>.conf</code>.<br><ul><li>Para un servidor WireGuard, el archivo debe contener detalles de configuración del servidor.</li><li>Para un cliente WireGuard, el archivo debe contener detalles de configuración del cliente.</li></ul>Estos archivos se almacenarán en <code>/srv/quickbox/db/wireguard/</code>.<br><br>La mayoría de los proveedores de VPN proporcionan un archivo de configuración para WireGuard. Si está utilizando NordVPN, que no proporciona un archivo de configuración directamente, puede generar uno usando el generador de configuración de NordVPN incluido.<br>Para obtener más información sobre cómo generar un archivo de configuración de NordVPN, use el comando <code>nvpn_conf_gen -h</code> en la CLI.';
$L['WIREGUARD_INSTALL_CONFIG']                = 'Subir el archivo de configuración de WireGuard';
$L['WIREGUARD_INSTALL_PORT_LABEL']            = 'Puerto de escucha';
$L['WIREGUARD_INSTALL_PORT_PH']               = '51820';
$L['WIREGUARD_INSTALL_CLIENT_COUNT_LABEL']    = 'Numero de Clientes';
$L['WIREGUARD_INSTALL_CLIENT_COUNT_PH']       = '1';
$L['WIREGUARD_INSTALL_CIDR_LABEL']            = 'CIDR';
$L['WIREGUARD_INSTALL_CIDR_PH']               = '10.8.0.1/24';
$L['WIREGUARD_INSTALL_ALLOWED_ADDRESS_LABEL'] = 'IP permitidas por el cliente';
$L['WIREGUARD_INSTALL_ALLOWED_ADDRESS_PH']    = '0.0.0.0/0,::/0';
$L['WIREGUARD_INSTALL_ENDPOINT_LABEL']        = 'Punto final (opcional)';
$L['WIREGUARD_INSTALL_ENDPOINT_PH']           = 'myserver.dyndns.org:51820';
$L['WIREGUARD_INSTALL_DNS_LABEL']             = 'DNS (opcional)';
$L['WIREGUARD_INSTALL_DNS_PH']                = '1.1.1.1';
$L['WIREGUARD_INSTALL_POSTUP_RULE_LABEL']     = 'Post-Up norma';
$L['WIREGUARD_INSTALL_POSTUP_RULE_PH']        = 'iptables -A FORWARD -i %i -j ACCEPT; iptables -t nat -A POSTROUTING -o ' . $network_interface . ' -j MASQUERADE';
$L['WIREGUARD_INSTALL_POSTDOWN_RULE_LABEL']   = 'Post-Down norma';
$L['WIREGUARD_INSTALL_POSTDOWN_RULE_PH']      = 'iptables -D FORWARD -i %i -j ACCEPT; iptables -t nat -D POSTROUTING -o ' . $network_interface . ' -j MASQUERADE';
$L['PROCESSING_COMPLETE_INSTALLER']           = 'Procesamiento completo';
$L['TAP_TO_UNDO_INSTALLER']                   = 'Haga clic para deshacer';

/* **********************************
 * #3.2.5 - service control
 ************************************/
$L['ACTIVE_STATUS']   = 'Activa (corriendo)';
$L['APP_KEY']         = 'API Key';
$L['APP_PORT']        = 'Puerto';
$L['APP_STATUS']      = 'Estado';
$L['INACTIVE_STATUS'] = 'Inactiva (muerta)';

/* **********************************
 * #3.2.6 - rclone specific toggles
 ************************************/
$L['ACTIVE_MOUNTED']             = 'activo (montado)';
$L['INACTIVE_NOTMOUNTED']        = 'muerto (no montado)';
$L['RCLONE_LOG_VIEWER']          = 'RClone move.log';
$L['RCLONE_OPTIONS']             = 'Opciones de clonación';
$L['RCLONE_COMMAND_CENTER']      = 'Centro de Comando RClone';
$L['RCLONE_STATUS']              = 'RClone Status';
$L['RCLONE_UPLOAD_MESSAGE']      = 'RClone está trabajando actualmente en segundo plano para cargar sus datos a gdrive. Durante este tiempo, verá un bloqueo establecido para verificar que su proceso ha comenzado. Este bloqueo se eliminará una vez que el proceso se haya completado. Siéntase libre de cerrar esta ventana emergente en cualquier momento.<br/><br/><div class="alert alert-notice" style="color:#fff"><strong>NOTA: </strong> La carga se ejecuta automáticamente a través de un cronjob todas las noches a las 03:12 hora del servidor.</div>';
$L['RCLONE_UPLOAD_VIEWER']       = 'Subir RClone';
$L['RCMOUNT_STATUS']             = 'Estado de MergerFS';
$L['RCMOUNT_WHERE']              = 'Ubicación de montaje';
$L['CLOUD_MANAGEMENT']           = 'Software en la nube';
$L['RCLONE_MOUNT_INFO']          = 'Información de montaje RClone';
$L['RCLONE MOUNT CHECK_PROCESS'] = 'Los valores de porcentaje de espacio se están calculando actualmente en segundo plano. Vuelva a consultar más tarde para ver los resultados actualizados.';

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
$L['DELUGE_TORRENTS']       = 'torrents cargados en Deluge';
$L['DISK_%_1']              = 'Has usado el';
$L['DISK_%_2']              = 'del espacio total de disco';
$L['DISK_SPACE']            = 'Tamaño de Disco';
$L['FREE']                  = 'Disponible';
$L['QBITTORRENT_TORRENTS']  = 'torrents cargados qBittorrent';
$L['RT_TORRENTS']           = 'torrents cargados en rTorrent';
$L['NO_CLIENTS']            = 'Actualmente no hay clientes torrent o nzb instalados';
$L['SIZE']                  = 'Tamaño';
$L['CURRENT_USERS_ONLINE']  = 'Usuarios Actualmente Conectados';
$L['THERE_ARE']             = 'Hay';
$L['TRANSMISSION_TORRENTS'] = 'torrents cargados en Transmission';
$L['USED']                  = 'Usado';
$L['YOUR_DISK_STATUS']      = 'El estado de tus discos';
$L['NZBGET_NZB']            = 'nzb cargados en NZBGet';
$L['SABNZBD_NZB']           = 'Nzb cargados en SABnzbd';

/* **********************************
 * #3.3.2 - System Index v1 : bandwidth data widget
 ************************************/
$L['BANDWIDTH_DAILY']    = 'Diario';
$L['BANDWIDTH_DATA']     = 'Ancho de Banda';
$L['BANDWIDTH_HOURLY']   = 'Por hora';
$L['BANDWIDTH_LIVE']     = 'Actual';
$L['BANDWIDTH_MONTHLY']  = 'Mensual';
$L['datefmt_days_img']   = '%d';
$L['datefmt_days']       = '%d %B';
$L['datefmt_hours_img']  = '%l';
$L['datefmt_hours']      = '%l%p';
$L['datefmt_months_img'] = '%b';
$L['datefmt_months']     = '%B %Y';
$L['datefmt_top']        = '%d %B %Y';
$L['NETWORK']            = 'Red';
$L['DOWNLOAD']           = 'Descargar';
$L['UPLOAD']             = 'Subida';

/* **********************************
 * #3.3.3 - System Index v1 : server load widget
 ************************************/
$L['DAYS_L']      = 'días';
$L['HOURS_L']     = 'horas';
$L['MINUTES_L']   = 'min';
$L['SECONDS_L']   = 'seg';
$L['SERVER_LOAD'] = 'Utilización del Servidor';
$L['SL_TXT']      = 'Utilización promedio actual de tus servidores';
$L['UPTIME']      = 'Tiempo activo';

/* **********************************
 * #3.3.4 - System Index v1 : memory status widget
 ************************************/
$L['CACHED_MEMORY']     = 'Uso de Memoria Caché';
$L['CLEAR_CACHE']       = 'Limpiar Memoria Caché';
$L['CM_BUFFERS']        = 'El buffer está en';
$L['CM_USAGE']          = 'El uso de la memoria caché está es de';
$L['PHYSICAL_MEMORY']   = 'Uso de memoria física';
$L['PM_IDLE']           = 'libre';
$L['PM_USED']           = 'usado';
$L['REAL_MEMORY']       = 'Uso de Memoria Real';
$L['RM_FREE']           = 'Memoria real libre';
$L['RM_USAGE']          = 'Memoria real usada';
$L['SWAP_IDLE']         = 'Disponible';
$L['SWAP_TOTAL']        = 'Total';
$L['SWAP_USAGE']        = 'Uso de Swap';
$L['SWAP_USED']         = 'Usada';
$L['SWAP_ZONE']         = 'Tamaño de SWAP';
$L['SYSTEM_RAM_STATUS'] = 'Estado de RAM del Sistema';
$L['TOTAL_RAM']         = 'RAM del Sistema Total';
$L['TOTAL']             = 'Total';

/* **********************************
 * #3.3.5 - server activity widget
 ************************************/
$L['ACC_REQ_ACT']         = 'las cuentas requieren activación';
$L['GUESTS_ONLINE']       = 'invitados en línea';
$L['LAST_ACTIVE_ON']      = 'fue la última activa en';
$L['LOGGED_ON']           = 'iniciar sesión';
$L['MEMBERS']             = 'miembros';
$L['RECORD_ONLINE']       = 'Registrar usuarios en línea';
$L['THERE_ARE_AW']        = 'Hay';
$L['THERE_ARE_CURRENTLY'] = 'Hay actualmente';
$L['USERS_AND']           = 'usuarios y';
$L['USERS_LAST_VISIT']    = 'nuevos usuarios se han registrado desde su última visita';
$L['CLEAR']               = 'clara';

/* ********************************************************************************
 * #4 PAGES
 *
 * #4.1 - START SCREEN FORMS (login/forgot pass/register/account)
 *
 * #4.1.1 - LOGIN
 ************************************/
$L['CONFIRM_PASS_FIELD_PLACE'] = 'Confirme su dirección de correo electrónico';
$L['CREATE_ACCOUNT']           = 'Crear una cuenta';
$L['REMEMBER_ME']              = 'Recuérdame';
$L['FORGOT_PASS']              = '¿Olvidaste tu contraseña?';
$L['LOG_IN']                   = 'Iniciar sesión';
$L['LOGIN_ACCOUNT']            = 'Inicie sesión en su cuenta para continuar.';
$L['LOGIN_USERNAME_INVALID']   = 'El inicio de sesión no es válido. Verifique su nombre de usuario y vuelva a intentarlo';
$L['LOGIN_PASSWORD_INVALID']   = 'El inicio de sesión no es válido. Por favor, compruebe su contraseña y vuelva a intentarlo';
$L['LOGIN_MISSING_USERNAME']   = 'Nombre de usuario no ingresado';
$L['LOGIN_MISSING_PASSWORD']   = 'Contraseña no ingresada';
$L['PASS_FIELD_INVALID']       = 'Proporcione su contraseña.';
$L['PASS_FIELD_PLACE']         = 'Por favor escriba su contraseña.';
$L['PASS_FIELD_VALID']         = 'Contraseña proporcionada, validación lista.';
$L['REGISTRATION_DISABLED']    = 'El registro está deshabilitado actualmente.';
$L['SIGN_IN']                  = 'Registrarse';
$L['UNREGISTERED']             = '¿No está registrado?';
$L['USER_FIELD_INVALID']       = 'Proporcione su nombre de usuario.';
$L['USER_FIELD_PLACE']         = 'Escriba su nombre de usuario.';
$L['USER_FIELD_VALID']         = 'Nombre de usuario proporcionado, validación lista.';
$L['ACCOUNT_BANNED']           = 'Su cuenta ha sido bloqueada.<br/>Por favor, póngase en contacto con un administrador del sistema.';
$L['ACCOUNT_DISABLED']         = 'Su cuenta no está activada o está deshabilitada.<br/>Si cree que se trata de un problema, comuníquese con un administrador del sistema.';
$L['ACCOUNT_INACTIVE_ADMIN']   = 'Su cuenta no ha sido activada por un administrador.';
$L['ACCOUNT_INACTIVE_EMAIL']   = 'Su cuenta no ha sido activada.<br/>Por favor revise su correo electrónico para el enlace de activación.';
$L['IP_BANNED']                = 'Su dirección IP ha sido prohibida.<br/>Por favor, póngase en contacto con un administrador del sistematrator.';

/* **********************************
 * #4.1.2 - FORGOT PASSWORD
 ************************************/
$L['EMAIL_FIELD_INVALID']      = 'Proporcione su correo electrónico';
$L['EMAIL_FIELD_PLACE']        = 'Escriba su dirección de correo electrónico';
$L['EMAIL_FIELD_VALID']        = 'Email proporcionado, validación lista.';
$L['PASS_GENERATED']           = '¡Nueva contraseña generada!';
$L['PASS_GENERATED_INFO']      = 'Su nueva contraseña ha sido generada y enviada al correo electrónico asociado con su cuenta.';
$L['PASS_GENERATED_FAIL']      = '¡Error en la nueva contraseña!';
$L['PASS_GENERATED_FAIL_INFO'] = 'Hubo un error al enviarle el correo electrónico con la nueva contraseña, por lo que su contraseña no ha sido cambiada.';
$L['RECOVER_INFO']             = '¡Ingrese su correo electrónico y se le enviarán las instrucciones!';
$L['RECOVER']                  = 'Recuperación de contraseña';
$L['PASSWORD_RESET']           = 'Restablecimiento de contraseña';
$L['CONFIRM_PASSWORD']         = 'Confirmar contraseña';

/* **********************************
 * #4.1.3 - REGISTER
 ************************************/
$L['ACCOUNT_CREATED']           = 'su cuenta ha sido creada. ';
$L['ACTIVATED_USER']            = 'Usuario activado ';
$L['CAN_LOGIN']                 = 'para su registro. Ahora puede iniciar sesión';
$L['CREATED_ADM_ACT']           = 'Sin embargo, este foro requiere la activación de la cuenta por parte de un administrador. Se le informará por correo electrónico cuando su cuenta haya sido activada';
$L['CREATED_CHECK_EMAIL']       = 'Consulte su correo electrónico para obtener más información';
$L['CREATED_EMAIL_ACT']         = 'Sin embargo, este foro requiere la activación de una cuenta. Se ha enviado una clave de activación a la dirección de correo electrónico que proporcionó';
$L['EMAIL_EMPTY']               = 'Correo electrónico no ingresado';
$L['EMAIL_INVALID']             = 'El correo electrónico no es válido';
$L['EMAIL_MATCH']               = 'Las direcciones de correo electrónico no coinciden';
$L['EMAIL_TAKEN']               = 'Dirección de correo electrónico ya registrada';
$L['RCONF_EMAIL_FIELD_INVALID'] = 'Este correo electrónico no coincide con el ingresado anteriormente. Inténtalo de nuevo.';
$L['RCONF_EMAIL_FIELD_VALID']   = 'Correspondencia de correos electrónicos, validación lista.';
$L['RCONF_PASS_FIELD_INVALID']  = 'Esta contraseña no coincide con la ingresada anteriormente. Inténtalo de nuevo.';
$L['RCONF_PASS_FIELD_VALID']    = 'Coincidencia de contraseñas, validación lista.';
$L['REG_C_DISABLED_INFO1']      = 'pero el registro en este sitio está deshabilitado actualmente';
$L['REG_C_DISABLED_INFO2']      = 'Vuelva a intentarlo más tarde o comuníquese con el propietario del servidor';
$L['REG_C_DISABLED']            = 'El registro está deshabilitado actualmente';
$L['REG_DISABLED_INFO']         = 'Lo sentimos, pero el registro está deshabilitado actualmente. Porfavor intente más tarde.';
$L['REG_DISABLED']              = 'Registro deshabilitado';
$L['REG_FORM_INFO']             = 'Por favor complete el siguiente formulario para crear una cuenta';
$L['REGISTERED_TXT']            = '¡Registrado!';
$L['REG_FAILED']                = 'Registro fallido';
$L['REG_ERROR_INFO_1']          = 'Lo sentimos, pero ha ocurrido un error y su registro para el nombre de usuario ';
$L['REG_ERROR_INFO_2']          = ' no se pudo completar. Porfavor intente más tarde.';
$L['SORRY']                     = 'Lo sentimos';
$L['THANKS']                    = 'Gracias';
$L['USERNAME_EMPTY']            = 'Nombre de usuario no ingresado';
$L['USERNAME_BELOW']            = 'Nombre de usuario a continuación';
$L['USERNAME_ABOVE']            = 'Nombre de usuario arriba';
$L['CARACTERES']                = 'caracteres';
$L['USERNAME_REQUIREMENTS']     = 'El nombre de usuario no cumple con los requisitos';
$L['USERNAME_WORD_RESERVED']    = 'Palabra reservada del nombre de usuario';
$L['USERNAME_TAKEN']            = 'Nombre de usuario ya en uso';
$L['USERNAME_DISALLOWED']       = 'Nombre de usuario no permitido';
$L['REG_IP_BANNED']             = 'Dirección IP prohibida';
$L['PASSWORD_EMPTY']            = 'Contraseña no ingresada';
$L['PASSWORD_SHORT']            = 'Contraseña demasiado corta';
$L['PASSWORD_LONG']             = 'Contraseña demasiado larga';
$L['PASSWORD_MATCH']            = 'Las contraseñas no coinciden';
$L['QUOTA_EMPTY']               = 'Cuota de disco no ingresada';

/* **********************************
 * #4.1.4 - ACCOUNT
 ************************************/
$L['ADMIN_EDIT_ACC'] = 'Editar cuenta Admin';
$L['EDIT_ACCOUNT']   = 'Editar cuenta';
$L['USER_LINKS']     = 'User Links';
$L['ADMIN_LINKS']    = 'Admin Links';
$L['Q_APP_DASH']     = 'Panel de Aplicaciones QuickBox';
$L['Q_SYS_DASH']     = 'Panel de Sistema QuickBox';
$L['RESET_PASS']     = 'Restablecer contraseña';
$L['RESET_PASSWORD'] = 'Reset your password';
$L['USER_PROFILE']   = 'Perfil de usuario';
$L['PWD_CHANGE']     = 'Contraseña cambiada';
$L['EMAIL_CHANGE']   = 'Correo electrónico modificado';

/* **********************************
 * #4.1.4.1 - quotes
 ************************************/
$L['DAYUM']               = 'Super!';
$L['HEY']                 = 'Hola';
$L['HOW_AWESOME']         = '¿Cómo es que te has vuelto tan genial?';
$L['LOOK_GOOD']           = '¡Que bien!';
$L['QUICKBOX_DEDICATION'] = 'nos encanta tu dedicación a QuickBox!';
$L['SO_GLAD']             = 'Que bueno que estés aquí';
$L['WITHOUT_YOU']         = '¿Qué haría sin ti?';

/* **********************************
 * #4.1.4.2 - edit account modal
 ************************************/
$L['CONFIRM_NEW_PASS_INFO'] = 'Please confirm your new password.';
$L['CURRENT_PASS']          = 'Current Password';
$L['NEW_EMAIL']             = 'New E-mail Address';

/* **********************************
 * #4.1.5 - SUMMARY
 ************************************/
$L['AWESOME']             = 'Asombroso';
$L['WITH_PASSWORD']       = 'con contraseña';
$L['USER_ADDED_TO_DB']    = 'ha sido agregado a la base de datos';
$L['RETURN_PREVIOUS']     = 'Volver a la página anterior';
$L['REGI_FAIL']           = 'Registro fallido';
$L['REGI_FAIL_ERR1']      = 'Lo sentimos, pero ha ocurrido un error y su registro para el nombre de usuario';
$L['REGI_FAIL_ERR2']      = 'no se pudo completar';
$L['REGI_FAIL_ERR3']      = 'Por favor inténtalo de nuevo';
$L['REGI_FAIL_ERR_FOUND'] = 'error(es) encontrado(s)';

/* **********************************
 * #4.2 - SETTINGS
 *
 * #4.2.1 - GENERAL SETTINGS
 ************************************/
$L['ACCOUNT_PAGE']                      = 'Página de Cuenta';
$L['ACTION_NOT_EXECUTED']               = 'Acción no ejecutada.';
$L['ACTIVATION_IP']                     = 'IP de activación';
$L['ACTIVATION_NEED_D_DO']              = '¡Hazlo aquí!';
$L['ACTIVATION_NEED_D']                 = '¿Necesita desactivar?';
$L['ACTIVATION_NEED_G_GET']             = '¡Consigue uno aquí!';
$L['ACTIVATION_NEED_G']                 = '¿Necesita una clave API?';
$L['ACTIVATION_TIME']                   = 'Tiempo de activación';
$L['ADD_DASH_SETTINGS']                 = 'Configuración adicional del panel';
$L['ADMIN_HOME']                        = 'Página de Inicio';
$L['API_ACTIVE']                        = 'Activa';
$L['API_KEY']                           = 'Clave de Licencia';
$L['API_NOT_ACTIVE']                    = 'No Activa';
$L['API_PLACE']                         = 'Ingrese la clave API aquí...';
$L['API_SETTINGS']                      = 'Control de Licencia';
$L['API_STATUS']                        = 'Estado de la API';
$L['API']                               = 'Licencia';
$L['BANDWIDTH_RESET_STATS']             = 'Restablecer estadísticas de ancho de banda';
$L['BANDWIDTH_RESET_STATS_TOOLTIP']     = 'Esto restablecerá todas las estadísticas de ancho de banda recopiladas. Esta acción es irreversible y eliminará de manera efectiva la base de datos vnStat actual y creará una nueva. Los datos nuevos comenzarán a volver a llenar la base de datos en 5 minutos.<br/><br/>Se almacenará una copia de seguridad de la base de datos vnStat actual en: <code>/opt/quickbox/backup/system/[Y-m-d_H-M-S]/vnstat/vnstat.db</code>';
$L['BANDWIDTH_RESET_STATS_DB_TOOLTIP']  = 'Haga clic para actualizar el tamaño actual de la base de datos. Esto se realiza al cargar la página, pero es útil para reflejar el tamaño si se restablece una base de datos más grande.<br/><br/><em>Nota: Esto no afecta los datos almacenados en la base de datos. Solo actualiza el tamaño de la base de datos publicada.</em>';
$L['BANDWIDTH_START_DATE']              = 'Fecha de inicio del ancho de banda';
$L['BANDWIDTH_START_DATE_TOOLTIP']      = 'Seleccione la fecha de inicio para el monitoreo del ancho de banda. El día elegido se repetirá mensualmente, ideal para el seguimiento a partir de fechas específicas como restablecimientos de ISP o configuraciones de servidores.<br/>Esto se aplica a los totales que se muestran en el Panel de control del sistema.<br/><br/><em>Nota: Los datos existentes no se verán afectados.</em>';
$L['CALCULATING']                       = 'Calculando...';
$L['CONF_SETTINGS']                     = 'Ajustes de Configuración';
$L['CONFIRM_RESET_BANDWIDTH_TITLE']     = 'Confirmar restablecimiento del ancho de banda';
$L['CONFIRM_RESET_BANDWIDTH_SUBTEXT']   = 'Restablecer las estadísticas de ancho de banda eliminará la base de datos vnStat actual y creará una nueva.<br/><div class=\'mt-3 p-3\' style=\'text-align:left;background:var(--qb-color-26);border-radius:6px;\'><p style=\'font-size:13px;color:var(--qb-color-5)\'>Se creará una copia de seguridad de la base de datos actual con los siguientes detalles:</p><ul class=\'mb-0\'><li class=\'mb-2\'>Directorio:<br/><code>/opt/quickbox/backup/system/[Y-m-d_H-M-S]/vnstat/</code></li><li>Nombre de archivo:<br/><code>vnstat.db</code></li></ul></div><br/>¿Está ¿Seguro que quieres continuar?';
$L['DASH_URL_SETTINGS']                 = 'Configuración de la URL del panel';
$L['DEFAULT_PAGE']                      = 'Página de destino';
$L['DISK_MOUNT']                        = 'Montaje de Disco';
$L['EDIT_GEN_SETTINGS']                 = 'Editar Configuración General del Sitio';
$L['EMAIL_FROM_ADDR']                   = 'E-mail del Sitio';
$L['EMAIL_FROM_NAME']                   = 'E-mail de (Nombre)';
$L['EMAIL_SETTINGS']                    = 'Configuración de correo electrónico';
$L['ERROR']                             = 'Error';
$L['CARGANDO']                          = 'Cargando...';
$L['LOGIN_PAGE']                        = 'Página de Inicio de Sesión';
$L['NET_ADAPTER']                       = 'Interfaz de red';
$L['PHP_DATE_FORMAT']                   = 'Formato de Fecha PHP';
$L['PHP_FORMAT_SETTINGS']               = 'Configuración de formato PHP';
$L['PHP_TIME_ZONE']                     = 'Zona horaria de PHP';
$L['RESET_BANDWIDTH_CANCEL']            = 'No, cancelar';
$L['RESET_BANDWIDTH_CANCELLED']         = 'Restablecimiento del ancho de banda cancelado';
$L['RESET_BANDWIDTH_CONFIRM']           = 'Sí, restablecer';
$L['RESET_BANDWIDTH_STATS']             = 'Restablecer estadísticas de ancho de banda';
$L['SITE_DESC']                         = 'Descripción del Sitio';
$L['SITE_META_SETTINGS']                = 'Site Meta Settings';
$L['SITE_NAME']                         = 'Nombre del Sitio';
$L['SITE_ROOT']                         = 'Raíz del Sitio';
$L['SITE_NAME_TOOLTIP']                 = 'El nombre del sitio debe tener menos de 40 caracteres y solo debe ser alfanumérico sin caracteres especiales (se aceptan espacios)';
$L['SITE_DESC_TOOLTIP']                 = 'La descripción del sitio debe tener menos de 120 caracteres y ser alfanumérica sin caracteres especiales (se aceptan espacios)';
$L['EMAIL_FROM_NAME_TOOLTIP']           = 'De El nombre debe tener menos de 60 caracteres y solo debe ser alfanumérico sin caracteres especiales (se aceptan espacios)';
$L['SITE_ROOT_TOOLTIP']                 = 'Ingrese la IP de su servidor o un dominio válido sin barra diagonal final. ejemplo: https://192.168.0.1 (o) https://somedomain.com';
$L['SITE_LOGO_COLLAPSED']               = 'Logotipo contraído';
$L['SITE_LOGO_FULL']                    = 'Logotipo completo';
$L['SITE_LOGO_SETTINGS']                = 'Configuración del logotipo del sitio';
$L['SITE_LOGO_COLLAPSED_TOOLTIP']       = 'Este es el logotipo que se mostrará cuando la barra lateral esté contraída y se utilizará como icono de la pestaña del navegador.';
$L['SITE_LOGO_FULL_TOOLTIP']            = 'Este es el logotipo que se mostrará cuando se expanda la barra lateral.';
$L['UNEXPECTED_ERROR']                  = 'Se produjo un error inesperado.';
$L['UNKNOWN_ERROR']                     = 'Se produjo un error desconocido.';
$L['VNSTAT_DATABASE_DELETE_SUCCESSFUL'] = 'La base de datos vnStat se eliminó correctamente.';
$L['VNSTAT_DATABASE_DELETE_FAILED']     = 'Error al eliminar la base de datos vnStat.';
$L['VNSTAT_DATABASE_DELETE_INVALID']    = 'Solicitud no válida.';

/* **********************************
 * #4.2.2 - EMAIL SETTINGS
 ************************************/
$L['SMTP_AUTH']     = 'Habilitar la autenticación SMTP';
$L['SMTP_SECURE']   = 'Habilite el cifrado SSL, TLS también se acepta con el puerto 465';
$L['MAIL_HOST']     = 'Configure el servidor SMTP para enviar';
$L['MAIL_PORT']     = 'Puerto TCP para conectarse';
$L['MAIL_USERNAME'] = 'Nombre de usuario SMTP';
$L['MAIL_PASS']     = 'Contraseña SMTP';

/* **********************************
 * #4.2.3 - SESSION SETTINGS
 ************************************/
$L['CHANGE_SESSION_SETTINGS'] = 'Cambiar configuración de sesiones.';
$L['COOKIE_EXPIRY']           = '\'Recuérdame\' Expiración de Cookies';
$L['COOKIE_PATH']             = 'Ruta de Cookies';
$L['DAYS']                    = 'Días';
$L['GUEST_TIMEOUT']           = 'Tiempo de inactividad del invitado';
$L['MINUTES']                 = 'Minutos';
$L['RESET_EXPIRY']            = 'Restablecer Caducidad al Iniciar Sesión';
$L['USER_TIMEOUT']            = 'Tiempo de inactividad del usuario';

/* **********************************
 * #4.2.4 - USER SETTINGS
 ************************************/
$L['ALLOW_MULTI_LOGINS']                   = 'Inicios de sesión múltiples';
$L['ALLOW_MULTI_LOGINS_DESC']              = 'Esta opción permite inicios de sesión simultáneos desde varios dispositivos. Si está deshabilitado, se cerrará la sesión del usuario en todos los demás dispositivos cuando inicie sesión desde un nuevo dispositivo.';
$L['ALLOW_CONFIG_EDITING']                 = 'Editores de configuración en el panel';
$L['ALLOW_CONFIG_EDITING_DESC']            = 'Esta opción permite editar los archivos de configuración desde el tablero. Si está desactivada, la opción para ver/editar configuraciones estará oculta.';
$L['ALLOW_MOUNT_INFO']                     = 'Montar panel de monitoreo y adición';
$L['ALLOW_MOUNT_INFO_DESC']                = 'Esta opción permite a los usuarios ver y agregar directorios para monitorear desde el panel. Si está deshabilitado, se ocultará la capacidad de ver y agregar directorios.';
$L['ALLOW_AUTOBACKUP_APP_ON_INSTALL']      = 'Aplicación de copia de seguridad automática al instalar';
$L['ALLOW_AUTOBACKUP_APP_ON_INSTALL_DESC'] = 'Esta opción permite la copia de seguridad completa automática de la aplicación cuando está instalada. Si está deshabilitado, no se realizará una copia de seguridad de las aplicaciones cuando se instalen. <span style="color:var(--qb-color-41);">Se realizará una copia de seguridad de los archivos de configuración de la aplicación independientemente de esta configuración.</span><br>Las copias de seguridad se almacenan en:<br><code>/home/[NOMBRE DE USUARIO]/.QuickBox/software/</code>';
$L['BY_ADMIN']                             = 'Por Admin (Configurar a continuación)';
$L['BY_USER']                              = 'Por Usuario (Ver página de admin de usuarios)';
$L['CHANGE_USER_SETTINGS']                 = 'Cambiar la configuración global de cuentas de usuario.';
$L['EXCLUDE_ADMINS']                       = 'Excluir Administradores';
$L['EXCLUDE_REDIRECTED_ADMINS']            = 'Excluir a los Administradores de ser redirigidos.';
$L['GEN_USER_SETTINGSTINGS']               = 'Configuración General de Usuario';
$L['HOW_SET']                              = '¿Como están configuradas?';
$L['INDIV_USER_HOME']                      = 'Páginas de Usuario Individuales';
$L['INDIVIDUAL_USER_FOLDERS']              = 'Carpetas de Usuario Individuales';
$L['PATH_ADMIN']                           = 'Ruta (Configurada por el Admin)';
$L['SITE_ROOT_RELATIVE']                   = 'Relativo a la Raíz del Sitio';
$L['SETTING']                              = 'Configuración';
$L['DESCRIPTION']                          = 'Descripción';
$L['VALUE']                                = 'Valor';

/* **********************************
 * #4.2.5 - SECURITY SETTINGS
 ************************************/
$L['BAN_IP_ADDRESS']       = 'Bloquear / Prohibir Direcciones IP';
$L['BAN_IP_INFO']          = 'ej. 192.168.0.1 sin los ceros iniciales';
$L['BAN_IP_REGISTER']      = 'Bloquear Dirección IP para Registrarse (o iniciar sesión)';
$L['BANNED_IP_ADDRESSES']  = 'Direcciones IP Bloqueadas';
$L['DISALLOW_USERNAME']    = 'Nombre de usuario no permitido';
$L['DISALLOWED_USERNAME']  = 'Nombre de usuario no permitido';
$L['DISALLOW_USERNAMES']   = 'Nombres de usuario no permitidos';
$L['DISALLOWED_USERNAMES'] = 'Nombres de usuario no permitidos';
$L['PREVENT_USERNAMES']    = 'Prevenir registro de Nombres de Usuarios';

/* **********************************
 * #4.3 - USER MANAGEMENT
 *
 * #4.3.1 - REGISTRATION SETTINGS
 ************************************/
$L['ACCOUNT_ACTIVATION']           = 'Activación de cuenta';
$L['ADMIN_ACT']                    = 'Activación de Administrador';
$L['ADMIN_ACT_INFO']               = 'Al seleccionar esta opción, luego del registro se le informará al usuario que debe esperar a que el Administrador active la cuenta. El usuario también recibirá un correo electrónico a tal efecto, al igual que el Administrador, quien luego tendrá la opción de activar al usuario con el enlace proporcionado en el correo electrónico o visitar el Panel de Administración y activar al usuario allí.';
$L['ALPHANUMERIC_ONLY']            = 'Solo Alfanumérico';
$L['ALPHANUMERIC_SPACERS']         = 'Espaciador Alfanuméricos';
$L['ANY_CHARS']                    = 'Cualquier Caracter';
$L['ANY_LETTER_NUM']               = 'Cualquier Número o Letra';
$L['DEFAULT_QUOTA_ALLOWANCE']      = 'Asignación de cuota predeterminada';
$L['DEFAULT_QUOTA_ALLOWANCE_INFO'] = 'Establecer un monto de cuota predeterminado para las nuevas cuentas creadas. Este valor solo se usa cuando está instalado el paquete de cuotas de Linux.';
$L['DISABLE_REGISTRATION']         = 'Deshabilitar Registro';
$L['DISABLE_REGISTRATION_INFO']    = 'Esto deshabilita el registro. El formulario de registro no se muestra y se reemplaza con un mensaje informativo.';
$L['ENABLE_CAPTCHA']               = 'Habilitar Captcha';
$L['LETTER_NUM_AND_SPACE']         = 'Letra Número y Espacios';
$L['LIMIT_CHAR']                   = 'Limitar Caracteres de Nombre de Usuario';
$L['NO_ACTIVATION']                = 'Sin Activación (acceso inmediato)';
$L['NO_ACTIVATION_INFO']           = 'La configuración de esta opción permite al usuario registrarse normalmente sin necesidad de ningún proceso de activación adicional.';
$L['PASSWORD_LENGTH']              = 'Longitud de Contraseña';
$L['RECOMMENDED']                  = 'QuickBox recomendado';
$L['REG_SETTINGS_INFO']            = 'Cambia la configuración de registro al sitio.';
$L['REG_SETTINGS']                 = 'Configuración de Registro';
$L['SEND_WELCOME_EMAIL']           = 'Enviar E-mail de Bienvenida';
$L['SEND_WELCOME_EMAIL_YES_INFO']  = 'Al establecer esta opción en Sí, se envían correos electrónicos de bienvenida al usuario, así como al administrador del sistema. Esta opción requiere la configuración de SMTP para enviar correos electrónicos correctamente. Estas opciones se pueden controlar en la página <a href="/email-settings.php" style="color: var(--qb-color-29);text-decoration: underline;">Configuración de correo electrónico</a>.';
$L['SEND_WELCOME_EMAIL_NO_INFO']   = 'Al establecer esta opción en No, no se enviarán correos electrónicos de bienvenida a los nuevos usuarios registrados. Toda la creación/registro de usuarios permanece en silencio, al igual que la creación de usuarios dentro del entorno CLI.';
$L['USER_ACT']                     = 'Activación de Usuario (verificación de correo electrónico)';
$L['USER_ACT_INFO']                = 'Configurar esta opción requiere que el usuario active su cuenta haciendo clic en un enlace enviado a su dirección de correo electrónico registrada.';
$L['USERNAME_LENGTH']              = 'Longitud del Nombre de Usuario';
$L['USERNAME_LOWERCASE']           = 'Nombre de Usuario en Minúscula';
$L['USERNAME_LOWERCASE_YES_INFO']  = 'Establecer esta opción en Sí cambia todos los nuevos nombres de usuario registrados a minúsculas. Esta es la opción recomendada.';
$L['USERNAME_LOWERCASE_NO_INFO']   = 'Establecer esta opción en No no cambiará los nuevos nombres de usuario registrados a minúsculas. Los nombres de usuario aparecerán tal como están registrados, pero se mantendrán en minúsculas en el entorno del servidor para que el software funcione correctamente.';

/* **********************************
 * #4.3.2 - USER ADMINISTRATION
 ************************************/
$L['ADMIN_ANNOUNCE']        = 'Anuncios de administrador';
$L['AWAITING_ADMIN']        = 'Esperando activación del administrador';
$L['AWAITING_EMAIL']        = 'Esperando activación por correo electrónico';
$L['BANNED']                = 'Prohibido';
$L['CU_CONFIRM_EMAIL_INFO'] = 'Por favor confirme el correo electrónico';
$L['CU_CONFIRM_EMAIL']      = 'Confirmar E-mail';
$L['CU_CONFIRM_PASS_INFO']  = 'Por favor, confirme tu contraseña';
$L['CU_CONFIRM_PASSWORD']   = 'Confirmar Contraseña';
$L['CU_DISK_QUOTA']         = 'Cuota de Disco:';
$L['CU_GROUP']              = 'Grupo';
$L['CU_EMAIL']              = 'E-mail';
$L['CU_NEW_PASS_INFO']      = 'Por favor ingresa tu nueva contraseña';
$L['CU_NEW_PASSWORD']       = 'Nueva Contraseña';
$L['CU_SHELL_ENV']          = 'Entorno de shell preferido';
$L['CURRENT_SHELLS']        = 'Shell actual';
$L['CURRENT_USERS']         = 'Usuarios Actuales';
$L['DEFAULT_GROUP_TAG']     = 'predeterminado';
$L['DELETED_ALL_SESSIONS']  = 'Eliminadas todas las sesiones';
$L['DISK_STATUS']           = 'Estado de Disco';
$L['EDIT_USER_SHELL']       = 'Editar el entorno del shell de usuarios';
$L['EXPIRY']                = 'Expira';
$L['HAS_USED']              = 'ha usado';
$L['IP_ADDRESS']            = 'Dirección IP';
$L['LAST_IP_ADDRESS']       = 'Última Dirección IP';
$L['LAST_LOGIN']            = 'Último Inicio de Sesión';
$L['LAST']                  = 'Última';
$L['MEMBER_STATUS']         = 'Estado del Miembro';
$L['MEMBER_GROUP']          = 'Grupo de Miembros';
$L['OF_QUOTA']              = 'de la cuota total';
$L['RECENTLY_ONLINE']       = 'Recientemente Conectados';
$L['REGISTERED_DISK_QUOTA'] = 'Cuota de Disco';
$L['REGISTERED']            = 'Registrado';
$L['REGISTRATION_LOGIN']    = 'Registro e Iniciar Sesión';
$L['STATISTICS']            = 'Estadísticas';
$L['USER_ACTIVITY']         = 'Actvidad de Usuario';
$L['PASSWORD_NOTICE']       = 'La contraseña no debe contener los siguientes caracteres';
$L['USER_QUOTA_HELP']       = 'Introduzca la cantidad de espacio en disco que desea asignar a un usuario. Las cuotas deben estar instaladas para hacer uso de esta opción';
$L['USER_SHELL_HELP']       = 'Seleccione el menú desplegable de arriba para añadir el usuario a un shell.';
$L['USERNAME_ADMIN_USER']   = 'Nombre de Usuario:';
$L['USERNAMES']             = 'Nombre de Usuario';
$L['USERS_AWAITING']        = 'Usuarios en Espera de Activación';
$L['USERS_SESSIONS']        = 'Sesiones de Usuario';

/* **********************************
 * #4.3.2.1 - admin user edit
 ************************************/
$L['ACTIONS']                 = 'Comportamiento';
$L['ACTIVE_SESSION']          = 'Sesión Activa';
$L['APPLICATION']             = 'Software';
$L['BANNED_USER']             = 'Usuario prohibido';
$L['CURRENT_FULL_PATH']       = 'Ruta Completa Actual';
$L['CURRENT_GROUPS']          = 'Grupos Actuales';
$L['CURRENT_STATUS']          = 'Estado Actual';
$L['EDIT_DEFAULT_GROUP']      = 'Grupo predeterminado';
$L['EDIT_DEFAULT_GROUP_INFO'] = 'Esta opción, cuando se selecciona, lo establecerá como el grupo predeterminado. Esto es útil cuando se crean usuarios a través de CLI y se desea tener un grupo personalizado como predeterminado asignado.';
$L['EDIT_GROUP_MEMBERSHIP']   = 'Editar la Membresía de Grupo del Usuario';
$L['EU_PATH']                 = 'Ruta';
$L['GENERAL_INFO']            = 'Información General';
$L['GROUP_MEMBERSHIP_HELP']   = 'Haga clic en el cuadro de texto a continuación para agregar el usuario a más grupos...';
$L['GROUP_MEMBERSHIP']        = 'Membresía de Grupo';
$L['HOMEPAGE']                = 'Página de Inicio';
$L['INSTRUCTIONS']            = 'Instrucciones';
$L['LAST_ACTIVE_IP']          = 'Última IP Activa';
$L['LAST_ACTIVE']             = 'Última Actividad';
$L['LAST_UPDATE']             = 'Última Actualización';
$L['PERSISTENT']              = 'Persistente';
$L['REGISTERED_IP']           = 'IP Registrada';
$L['SESSION_EXPIRY']          = 'Expiración de Sesión';
$L['STATUS']                  = 'Estado';
$L['UNBANNED_USER']           = 'Usuario no baneado';
$L['UNIQUE_USER_HP_SETTINGS'] = 'Página Única de Usuario - Configuraciones';
$L['USER_EDIT1']              = 'Editar Usuario :';
$L['USER_EDIT2']              = 'Editar Usuario';
$L['SELECT_GROUP']            = 'Seleccionar Grupo';

/* **********************************
 * #4.3.2.2 - admin announce
 ************************************/
$L['ENABLE_USER_ANNOUNCE']          = 'Habilitar anuncio en el panel de control';
$L['ANNOUNCEMENT_HISTORY']          = 'Sus anuncios anteriores';
$L['TYPE']                          = 'Tipo';
$L['USER']                          = 'Usuario';
$L['TIME']                          = 'Tiempo';
$L['ANNOUNCEMENT_LIST']             = 'Contenido del anuncio';
$L['GLOBAL_USER_ANNOUNCEMENT']      = 'Global (todos los usuarios)';
$L['CREATE_DASHBOARD_ANNOUNCEMENT'] = 'Crear anuncio en el panel';
$L['GLOBAL_ANNOUNCEMENT']           = 'Anuncio global';
$L['GLOBAL_ANNOUNCEMENT_INFO']      = 'Al seleccionar esta opción se creará un anuncio global visible en el panel de control de cada usuario, independientemente de su membresía en el grupo. Si ya ha asignado un anuncio a un usuario, se mostrará junto a este anuncio global.';
$L['SELECT_USER']                   = 'Seleccionar usuario:';
$L['SELECT_ANNOUNCEMENT_TYPE']      = 'Tipo de anuncio:';
$L['EDIT_DASHBOARD_ANNOUNCEMENT']   = 'Editar anuncio del panel';
$L['EDIT_ANNOUNCEMENT_INFO']        = 'Editar y guardar un anuncio existente restablecerá su visibilidad en el panel del usuario especificado. Si el anuncio es global, también restablecerá el historial de vistas en los paneles de todos los usuarios.';
$L['ANNOUNCEMENT_ID']               = 'Identificación del anuncio';
$L['ANNOUNCEMENT_TYPE']             = 'Tipo de anuncio';
$L['PREVIEW']                       = 'Vista previa';

/* **********************************
 * #4.3.3 - USERS GROUPS
 ************************************/
$L['ADMINISTRADORES']              = 'Administradores';
$L['ASSIGN_LEVEL']                 = 'Asignar nivel de grupo:';
$L['CANCELLED']                    = 'Cancelado';
$L['CLICK_HERE']                   = 'Haga clic aquí...';
$L['CONFIRM_DELETE_GROUP_TITLE']   = '¿Estás seguro?';
$L['CONFIRM_DELETE_GROUP_SUBTEXT'] = 'Esto eliminará el grupo y restablecerá todos los usuarios del grupo. Asegúrese de que estos usuarios estén asignados a otro grupo.';
$L['DELETE_GROUP']                 = 'Eliminar grupo';
$L['DELETED']                      = 'Eliminado';
$L['GROUP_DELETED']                = 'Este grupo ha sido eliminado, los grupos de usuarios se han restablecido.';
$L['GROUP_DELETE_CANCEL']          = 'Eliminación de grupo cancelada.';
$L['GROUP_STAY']                   = 'El grupo permanecerá :)';
$L['GROUP_USER_REMOVED']           = 'El usuario ha sido eliminado del grupo.';
$L['GROUP_USER_STAY']              = 'El usuario permanece en el grupo :)';
$L['GROUP_YES']                    = '¡Sí, estoy seguro!';
$L['GROUP_NO']                     = '¡No, cancelar!';
$L['EDIT_ADD_USER']                = 'Agregar usuario:';
$L['EDIT_GROUP_LEVEL']             = 'Nivel de grupo :';
$L['EDIT_GROUP_NAME']              = 'Nombre del grupo :';
$L['GROUP_LEVEL']                  = 'Nivel de grupo';
$L['GROUP_NAME']                   = 'Nombre del grupo';
$L['LEVEL_INFO']                   = 'Ingrese un número entre 2 y 256';
$L['NEW_GROUP_NAME']               = 'Nuevo nombre de grupo:';
$L['NUMBER_MEMBERS']               = '# de miembros';
$L['REMOVED']                      = 'Eliminado';
$L['USER_GROUPS_INFO']             = 'Crear, ver y editar grupos de usuarios. Asignar usuarios a grupos de usuarios.';
$L['SOFT_GROUP_ASGMNT']            = 'Asignación de grupo de software';

/* **********************************
 * #4.4 - SYSTEM
 *
 * #4.4.1 - WEB CONSOLE
 ************************************/
$L['WEB_CONSOLE_INFO'] = 'Accede a tu entorno de comandos';

/* **********************************
 * #4.4.2 - API CONTROL
 ************************************/
$L['ACTIVATION_INFO_STATS']             = 'Estadísticas de información de activación';
$L['QB_CONTROL_API']                    = 'API de Control QB';
$L['QB_CONTROL_API_NOTICE']             = 'Las claves de control de API están compartimentadas en dos componentes, como se ve a continuación.<br/>Los ejemplos de uso se han etiquetado para ilustrar el nivel de permisos de un comando específico necesario para realizar la tarea designada. La biblioteca de uso de API continuará recibiendo actualizaciones a medida que se implementen puntos finales y funciones adicionales.<br/><br/><table><tbody><tr><td style="width:15px;vertical-align:middle;"><span class="badge badge-indicators badge-primary">&nbsp;</span></td><td>La <em>clave de permisos de lectura</em> solo tiene la capacidad de extraer datos. Esta clave no puede señalar tareas operativas al servidor QuickBox. A menos que esté intentando controlar su instalación de forma remota, esta tecla es todo lo que necesita.</td></tr><tr><td style="width:15px;vertical-align:middle;"><span class="badge badge-indicators badge-success">&nbsp;</span></td><td>La <em>clave de permisos de escritura</em> tiene la capacidad de realizar tareas adicionales, como actualizar la instalación de QuickBox, administrar la activación de la API principal, y más. Esta clave también funcionará para los permisos de lectura y debe considerarse la clave con el privilegio más alto. Útil para realizar de forma remota tareas básicas de administración de su servidor.</td></tr></tbody></table><br/>Recuerde tratar sus claves API como lo haría con las contraseñas, nunca las comparta.<br/>Puede regenerar una nueva clave de control aleatoria en cualquier momento presionando el botón <i data-feather="refresh-cw" style="width:14px;"></i> a continuación.';
$L['CLOSE_ACKNOWLEDGE']                 = 'Reconocer y cerrar';
$L['READ_PERM_KEY']                     = 'Clave de permisos de lectura';
$L['REGENERATE_READ_KEY']               = 'Regenerar clave de permisos de lectura';
$L['WRITE_PERM_KEY']                    = 'Clave de permisos de escritura';
$L['REGENERATE_WRITE_KEY']              = 'Regenerar clave de permisos de escritura';
$L['API_SPEC_USAGE']                    = 'Uso específico de API';
$L['DISPLAY_CURRENT_API_STAT']          = 'Mostrar el estado actual de la API';
$L['EXAMPLE_CODE']                      = 'código:';
$L['EXAMPLE_OUTPUT']                    = 'salida:';
$L['ACTIVATE_QUICKBOX_API']             = 'Activar clave API de QuickBox';
$L['DEACTIVATE_QUICKBOX_API']           = 'Desactivar clave API de QuickBox';
$L['VERSION_SPEC_USAGE']                = 'Uso específico de la versión';
$L['DISPLAY_CURRENT_VERSION']           = 'Mostrar el estado actual de la versión de QuickBox';
$L['UPDATE_QUICKBOX_VERSION']           = 'Actualizar versión de QuickBox';
$L['UPDATE_ALERT_NOTICE']               = 'Si su instancia ya está actualizada, verá el siguiente resultado';
$L['RUN_FIX_VERSION']                   = 'Ejecutar corrección de versión';
$L['USER_SPEC_USAGE']                   = 'Uso específico del usuario';
$L['DISPLAY_ALL_USER_INFO']             = 'Mostrar información para todos los usuarios';
$L['DISPLAY_SINGLE_USER_INFO']          = 'Mostrar información para el usuario especificado';
$L['DISPLAY_USER_SOFTWARE']             = 'Mostrar el software instalado actualmente por el usuario especificado';
$L['CREATE_SPECIFIED_USER']             = 'Crear usuario especificado';
$L['CREATE_SPECIFIED_USER_INFO_NOTICE'] = 'Si desea configurar un usuario con su correo electrónico existente y establecer una asignación de cuota. Tenga en cuenta que tanto el correo electrónico como la cuota son puramente opcionales. Si no se ingresa ninguna cuota, utilizará el valor predeterminado de la cantidad configurada establecida <a href="/registration.php" rel="noopener nofollow" target="_blank">aquí</a>.';
$L['DELETE_SPECIFIED_USER']             = 'Eliminar usuario especificado';
$L['BAN_SPECIFIED_USER']                = 'Prohibir usuario especificado';
$L['UNBAN_SPECIFIED_USER']              = 'Desbancar usuario especificado';
$L['SOFTWARE_SPEC_USAGE']               = 'Uso específico del software';
$L['DISPLAY_ALL_SOFTWARE']              = 'Mostrar todas las aplicaciones de software disponibles para instalar';
$L['DISPLAY_SINGLE_SOFTWARE']           = 'Mostrar información para el software especificado';
$L['API_SOFTWARE_NOTICE']               = 'Para encontrar orientación sobre cómo se estructuran los nombres de software (nombres de aplicaciones), consulte la sección \'Software\' en su manual de usuario. Puede acceder a él haciendo clic <a href="/help.php#software">aquí</a>.';
$L['API_SOFTWARE_WARNING']              = 'Tenga en cuenta que, para determinadas aplicaciones, es posible que las convenciones de nomenclatura no estén designadas oficialmente y, en cambio, podrían formar parte de un conjunto ampliado de opciones.<br/><br/>
Aquí hay un ejemplo usando Bazarr4K:<br>
<pre class="mb-2"><code class="language-json">"bazarr4k": {
    "software_title": "Bazarr4K",
    "qb_package_name": "bazarr",
    "qb_options": "--4k",
    ...</code></pre>
Tome nota de la siguiente información importante sobre la salida API del software de QuickBox:
<ul>
<li>Al acceder a paquetes de software a través de QuickBox, encontrará constantemente el atributo \'qb_package_name\'. Este atributo está marcado y utilizado por la convención de nomenclatura <code>qb</code>.</li>
<li>Además, cada salida de API incluye la entrada \'qb_options\', que proporciona valiosas opciones de personalización. Una de estas opciones es el indicador de instalación \'4K\', indicado como <code>--4k</code>.</li>
</ul><br/>
Por ejemplo, si desea instalar \'Bazarr\' con soporte 4K, debe usar el siguiente comando:<br/>
<pre class="mb-0"><code class="language-bash">qb install bazarr --4k -u [USERNAME]</code></pre><br/>
Es importante tener en cuenta que no debe utilizar \'bazarr4k\' como nombre del paquete, ya que la entrada \'qb_options\' está diseñada para manejar dichas personalizaciones de manera eficiente.';
$L['SOFTWARE_SERVICE_STATUS']            = 'Mostrar estado para software y usuario especificados';
$L['SOFT_STATUS_ACTIVE_NOTICE']          = 'Si el servicio está activo.';
$L['SOFT_STATUS_INACTIVE_NOTICE']        = 'Si el servicio está inactivo.';
$L['SOFT_STATUS_NOT_INSTALLED_NOTICE']   = 'Si la aplicación no está instalada para el usuario especificado.';
$L['SOFTWARE_SERVICE_CONTROL']           = 'Indicar la acción especificada para el software y el usuario especificados';
$L['SOFT_CONTROL_ACTION_RESTART_NOTICE'] = 'Donde la action=restart...';
$L['SOFT_CONTROL_ACTION_START_NOTICE']   = 'Dónde la action=start...';
$L['SOFT_CONTROL_ACTION_STOP_NOTICE']    = 'Donde la action=stop...';

/* **********************************
 * #4.4.3 - SSL CONTROL
 ************************************/
$L['LETSENCRYPT_DOMAIN']         = 'Let\'s Encrypt el dominio';
$L['SSL_CONTROL']                = 'Control SSL';
$L['ABOUT_SSL_CONTROL']          = 'Esta función le permite generar fácilmente certificados SSL para las aplicaciones compatibles que haya instalado. Al seleccionar "Sí" e ingresar su dominio, configurará sin problemas el proxy inverso de Nginx junto con el certificado SSL.';
$L['STAGE_DASHBOARD_SSL']        = '¿Preparar SSL para el Panel de control?';
$L['DASHBOARD_SSL_TOOLTIP']      = 'Para proteger su Panel QuickBox con un certificado SSL, simplemente seleccione \'Sí\'. Esta acción no solo configurará el certificado SSL sino que también establecerá las configuraciones y enlaces necesarios de NGinx, facilitando el acceso seguro a su panel a través de su dominio.';
$L['STAGE_OWNED_DOMAIN_SSL']     = '¿Preparar SSL para un dominio propio?';
$L['NON_DASHBOARD_SSL_TOOLTIP']  = 'Para establecer un certificado SSL para un dominio de su preferencia, elija \'Sí\'. Esta opción está diseñada para la creación de certificados SSL adicionales. Asegúrese de que los registros DNS apropiados para el dominio estén configurados correctamente, ya que este proceso genera exclusivamente los certificados SSL solicitados.';
$L['STAGE_EMBY_SSL']             = '¿Preparar SSL para Emby?';
$L['EMBY_SSL_TOOLTIP']           = 'Para proteger su instalación de Emby con un certificado SSL, simplemente seleccione \'Sí\'. Esta acción no solo configurará el certificado SSL sino que también establecerá las configuraciones y enlaces necesarios de NGinx, facilitando el acceso seguro a su instalación de Emby a través de su dominio.';
$L['STAGE_JELLYFIN_SSL']         = '¿Preparar SSL para Jellyfin?';
$L['JELLYFIN_SSL_TOOLTIP']       = 'Para proteger su instalación de Jellyfin con un certificado SSL, simplemente seleccione \'Sí\'. Esta acción no solo configurará el certificado SSL sino que también establecerá las configuraciones y enlaces necesarios de NGinx, facilitando el acceso seguro a su instalación Jellyfin a través de su dominio.';
$L['STAGE_JELLYSEERR_SSL']       = '¿Preparar SSL para Jellyseerr?';
$L['JELLYSEERR_SSL_TOOLTIP']     = 'Para proteger su instalación de Jellyseerr con un certificado SSL, simplemente seleccione \'Sí\'. Esta acción no solo configurará el certificado SSL sino que también establecerá las configuraciones y enlaces necesarios de NGinx, facilitando el acceso seguro a su instalación de Jellyseerr a través de su dominio.';
$L['STAGE_KOMGA_SSL']            = '¿Preparar SSL para Komga?';
$L['KOMGA_SSL_TOOLTIP']          = 'Para proteger su instalación de Komga con un certificado SSL, simplemente seleccione \'Sí\'. Esta acción no solo configurará el certificado SSL sino que también establecerá las configuraciones y enlaces necesarios de NGinx, facilitando el acceso seguro a su instalación de Komga a través de su dominio.';
$L['STAGE_OVERSEERR_SSL']        = '¿Preparar SSL para Overseerr?';
$L['OVERSEERR_SSL_TOOLTIP']      = 'Para proteger su instalación de Overseerr con un certificado SSL, simplemente seleccione \'Sí\'. Esta acción no solo configurará el certificado SSL sino que también establecerá las configuraciones y enlaces necesarios de NGinx, facilitando el acceso seguro a su instalación de Overseerr a través de su dominio.';
$L['STAGE_PLEX_SSL']             = '¿Preparar SSL para Plex?';
$L['PLEX_SSL_TOOLTIP']           = 'Para proteger su instalación de Plex con un certificado SSL, simplemente seleccione \'Sí\'. Esta acción no solo configurará el certificado SSL sino que también establecerá las configuraciones y enlaces necesarios de NGinx, facilitando el acceso seguro a su instalación Plex a través de su dominio.';
$L['DOMAIN']                     = 'Dominio';
$L['SSL_ALREADY_INSTALLED']      = 'Tenga en cuenta que ya existe un certificado SSL instalado para esta opción. Reinstalar el certificado ingresando un nuevo dominio a continuación restablecerá la configuración inversa actual de NGinx, eliminará el certificado anterior y restablecerá el acceso al enlace establecido actualmente.';
$L['SSL_SUBMIT']                 = 'Instalar certificado SSL';
$L['SSL_CERTIFICATE_STATUS']     = 'Estado del certificado SSL';
$L['SSL_STATUS_MONITOR_TOOLTIP'] = 'Supervise el estado de sus certificados SSL existentes con la capacidad de realizar dos acciones clave: eliminar o forzar la renovación. Para los certificados asociados con aplicaciones compatibles como Emby, Jellyfin, Jellyseerr, Komga, Overseerr y Plex, eliminar un certificado también activará la eliminación y reconfiguración del proxy inverso de Nginx para el dominio correspondiente.<br><br>Puede hacerlo sin problemas elimine un certificado usando las opciones a continuación y luego seleccione la aplicación que desee arriba para iniciar la instalación de un nuevo subdominio y certificado. Este proceso simplificado garantiza la máxima flexibilidad y control sobre la gestión de su certificado SSL.';
$L['CERTS_STORED_AT']            = 'Los certificados monitoreados se almacenan en';
$L['CERT_ACTIVE']                = 'Caduca el:';
$L['CERT_EXPIRES']               = 'Expira el:';
$L['CERT_EXPIRED']               = 'Caducado';
$L['CERT_RENEW']                 = 'Renovar certificado';
$L['CERT_DELETE']                = 'Eliminar el certificado SSL y cualquier configuración adicional. Esta acción es irreversible.';
$L['CERT_DELETE_CONFIRM']        = '¿Está seguro de que desea eliminar este certificado?';
$L['NO_CERTS_INSTALLED']         = 'No hay certificados SSL instalados y/o monitoreados en este momento.';

/* **********************************
 * #4.4.4 - VPN CONTROL
 ************************************/
$L['ABORT']                            = 'Abortar';
$L['ACTIVE']                           = 'Activo';
$L['ADD_PEER']                         = 'Agregar configuración de pares';
$L['CANCEL']                           = 'Cancelar';
$L['CITY']                             = 'Ciudad';
$L['COUNTRY']                          = 'País';
$L['CURRENT_IP']                       = 'Servidor IP';
$L['CURRENT_PEER_LIST']                = 'Lista de pares actual';
$L['DATE_ADDED']                       = 'Fecha Agregada';
$L['DELETE_PEER']                      = '¿Eliminar el archivo de configuración de pares?';
$L['DRAG_DROP_FILES']                  = 'Arrastre y &amp; Suelte sus archivos de configuración de pares o <span class="filepond--label-action">Haga clic para explorar</span>';
$L['HOST']                             = 'Nombre de host';
$L['LOCAL_HOSTED']                     = 'IP privada';
$L['ORGANIZATION']                     = 'Organización';
$L['PEER_CONFIG_NAME']                 = 'Nombre';
$L['PEER_INFO']                        = 'Información de pares';
$L['PEER_PING']                        = 'Ping';
$L['PROCESSING']                       = 'Procesando...';
$L['PROCESSING_ABORTED']               = 'Tramitación cancelada. Por favor inténtelo de nuevo.';
$L['PROCESSING_COMPLETE']              = 'Procesamiento completado.';
$L['PROCESSING_ERROR']                 = 'Error de procesamiento. Por favor inténtelo de nuevo.';
$L['PROCESSING_ERROR_EXTENSION']       = '<span style="font-weight:400">Solo se permiten archivos de configuración de pares con la extensión <span style="font-weight:900" class="text-warning">.conf</span>.</span >';
$L['PROCESSING_REVERT_ERROR']          = 'Error al revertir Por favor inténtelo de nuevo.';
$L['REMOVE']                           = 'Remover';
$L['RETRY']                            = 'Reintentar';
$L['REVERT']                           = 'Revertir';
$L['REGION']                           = 'Región';
$L['SERVER_CONFIG']                    = 'Configuración del servidor';
$L['TAP_TO_CANCEL']                    = 'Toque para cancelar';
$L['TAP_TO_RETRY']                     = 'Toque para reintentar';
$L['TAP_TO_UNDO']                      = 'Página refrescante...';
$L['UNDO']                             = 'Deshacer';
$L['VPN_CONTROL']                      = 'Control de VPN';
$L['WAITING_FOR_SIZE']                 = 'Esperando el tamaño del archivo...';
$L['WG_PRIVATE_KEY']                   = 'Llave privada';
$L['WG_PUBLIC_KEY']                    = 'Llave pública';
$L['WG_SERVER_INFO']                   = 'Información de conexión actual';
$L['WIREGUARD_CONFIG_ACTIVATION_TIPS'] = 'Para activar una configuración de WireGuard, seleccione la configuración de VPN que desee en la siguiente tabla. Para desactivar la configuración actualmente activa, simplemente desmarque la casilla de verificación activa o elija una configuración diferente. Esto reiniciará automáticamente el servicio WireGuard y la tabla \'Información de conexión actual\' se actualizará con los detalles relevantes.';

/* **********************************
 * #4.4.5 - TROUBLESHOOTING
 ************************************/
$L['SERVICE']                = 'Servicio';
$L['APP_SELECT']             = 'Seleccione la aplicación';
$L['APPLIANCE']              = 'Software';
$L['CLEAN_MEM']              = 'Borrar la memoria caché física';
$L['FIX']                    = 'Arreglar';
$L['FIXUPDATE']              = 'Fijar los bloqueos del frontend de dpkg';
$L['LOG_GEN']                = 'Generador de registros del sistema';
$L['NGINX']                  = 'nginx';
$L['PHP']                    = 'php-fpm';
$L['PHP7_2']                 = 'php-fpm';
$L['QSUPPORT']               = 'Soporte QuickBox';
$L['QSUPPORTU']              = 'Usuario de Soporte QuickBox';
$L['SERVER_TROUBLESHOOTING'] = 'Solución de problemas del servidor';
$L['SYSTEM_INFO']            = 'Información del sistema';
$L['SYSTEM_LOG_FILES']       = 'Registro del sistema';
$L['TROUBLESHOOTING']        = 'Solución de problemas';
$L['WEB_SERVER']             = 'Servidor web';

/* **********************************
 * #4.4.6 - SYSTEM LOGS
 ************************************/
$L['ABOUT_SOFTWARE_ACTION_LOGS']       = 'Estos registros están diseñados para proporcionar un registro de acciones relacionadas con el software, incluidas instalaciones, eliminaciones, actualizaciones y otros eventos importantes.';
$L['ABOUT_SYSTEM_ACTION_LOGS']         = 'Estos registros están diseñados para capturar actividades y acciones a nivel del sistema iniciadas a través de la herramienta de línea de comando <code>qb</code>.';
$L['ABOUT_UI_ACTION_LOGS']             = 'Estos registros se derivan del syslog del sistema y sirven como un registro consolidado de todos los comandos y acciones iniciadas a través de la interfaz de usuario del QuickBox Dashboard.';
$L['ABOUT_USER_ACTION_LOGS']           = 'Los registros en este contexto pertenecen a tareas y eventos relacionados con el usuario iniciados a través de la interfaz QuickBox.';
$L['ACCESS_LOGS']                      = 'Registros de acceso';
$L['APP_LOGS']                         = 'Registros de software';
$L['AUTO_PROCESS']                     = 'Processus automatique';
$L['CLEAN_DASHBOARD_USER_ACTION_LOGS'] = 'Limpiar registros de acciones del usuario';
$L['CLEAN_SYSTEM_ACTION_LOGS']         = 'Limpiar registros de acciones del sistema';
$L['CLEAR_LOG']                        = 'Borrar registro';
$L['CLEAR_LOG_CONFIRM']                = '¿Está seguro de que desea eliminar estos registros? ¿Esto no se puede deshacer?';
$L['COMMAND']                          = 'Comando';
$L['COMMAND_SOFTWARE']                 = 'Comando/Software';
$L['DATABASE_BACKUP']                  = 'Copia de seguridad de la Base de Datos';
$L['DATABASE_MAINTENANCE']             = 'Mantenimiento de la Base de Datos';
$L['DATABASE_REPAIR']                  = 'Reparación de la Base de Datos';
$L['DATABASE_RESTORE']                 = 'Restauración de la Base de Datos';
$L['DATE_TIME']                        = 'Fecha/Hora';
$L['DELETED_ALL_APP_LOGS']             = 'Se eliminaron todos los registros de software';
$L['DELETED_ALL_APPLICATION_LOGS']     = 'Eliminar todos los registros de la aplicación';
$L['DELETED_ALL_SUMMARY_LOGS']         = 'Se eliminaron todos los registros de resumen';
$L['DELETED_ALL_SYSTEM_LOGS']          = 'Se eliminaron todos los registros del sistema';
$L['DELETED_ALL_UI_LOGS']              = 'Se eliminaron todos los registros de la interfaz de usuario';
$L['DELETED_ALL_USER_LOGS']            = 'Se eliminaron todos los registros de usuarios';
$L['DELETED_APPLICATION_LOGS']         = 'Registros de aplicaciones eliminados';
$L['DELETED_SUMMARY_LOGS']             = 'Registros resumidos eliminados';
$L['DELETED_USER']                     = 'Usuario eliminado';
$L['DELETE_USER_LOGS']                 = 'Eliminar registros de usuario';
$L['EVENT']                            = 'Evento';
$L['LOGS']                             = 'Registros';
$L['LOGS_SUMMARY']                     = 'Resumen de registros';
$L['LOG_MESSAGE']                      = 'Registrar mensaje';
$L['NO_LOGS']                          = 'No se encontraron registros';
$L['NO_LOGS_MESSAGE']                  = 'En este momento, no hay registros disponibles para ver. Las entradas de registro se generan cuando las aplicaciones envían su información de registro al syslog del sistema. Si está buscando un registro en particular, le recomendamos consultar la documentación proporcionada por la aplicación respectiva para obtener más orientación. QuickBox se esfuerza diligentemente por centralizar varias aplicaciones y sus datos registrados; sin embargo, depende de las aplicaciones individuales transmitir su información de registro al syslog.';
$L['QUICKBOX_VERSION_CHECK']           = 'Buscar actualizaciones de QuickBox';
$L['QUOTA_CHECK']                      = 'Verificación de cuota establecida';
$L['SCHEDULED_TASK']                   = 'Tarea programada';
$L['SOFTWARE']                         = 'Software';
$L['SOFTWARE_ACTION_LOGS']             = 'Registros de acciones de software';
$L['SOFTWARE_VERSION_CHECK']           = 'Buscar actualizaciones de software instaladas';
$L['SYSTEM_ACTION_LOGS']               = 'Registros de acciones del sistema';
$L['SYSTEM_LOG_SUMMARY']               = 'Resumen del registro del sistema';
$L['SYSTEM_LOG_SUMMARY_TOOLTIP']       = 'Este resumen y todos los registros adicionales se generan bajo tres condiciones:<br><ol><li><strong>Cron:</strong> los registros se actualizan automáticamente con la ejecución de una tarea cron cada 15 minutos. Esto inicia el binario <code>qb_log_miner</code> que agrega entradas de registro del syslog del sistema.</li><li><strong>Generar manualmente:</strong> Puede generarlo desde la sección \'Sistema > Solución de problemas > Registro del sistema\' haciendo clic en el botón \'(Generar)\'.</li><li>< strong>Línea de comando:</strong> También se puede generar ejecutando el comando <code>qb generate log</code>.</li><li><strong>Línea de comando:</strong> También se puede generar ejecutando el comando <code>qb generate log</code>.</li></ol>Puede acceder y descargar este archivo de registro resumido de dos maneras:<br><ol><li><strong>Interfaz web:</strong> Vaya a \'Sistema > Solución de problemas > Registro del sistema (descargar)\' dentro de la interfaz de usuario.</li><li><strong>Directorio del servidor:</strong> Encuéntrelo en el servidor en: \'/srv/quickbox/logs/system_log\'.</li></ol>';
$L['UI_ACTION_LOGS']                   = 'Registros de acciones de la interfaz de usuario';
$L['USER_ACTION_LOGS']                 = 'Registros de acciones del usuario';
$L['USER_APPLICATION_LOGS']            = 'Registros de aplicaciones de usuario';
$L['USER_LOGS']                        = 'Registros de usuario';
$L['VIEW_SOFTWARE_ACTION_LOGS']        = 'Ver registro de acciones del software';
$L['VIEW_SYSTEM_ACTION_LOGS']          = 'Ver registro de acciones del sistema';
$L['VIEW_UI_ACTION_LOGS']              = 'Ver registro de acciones de la interfaz de usuario';
$L['VIEW_USER_ACTION_LOGS']            = 'Ver registro de acciones del usuario';

/* **********************************
 * #4.4.7 - HELP MANUAL
 ************************************/
$L['QB_HELP'] = 'Manual de ayuda';

/* **********************************
 * #4.4.7.1 - description
 ************************************/
$L['DESCRIPTION_CONTENT'] = '<p>Bienvenido a la visualización gráfica integral de la página de manual de <code>qb</code>, diseñada para ofrecerle un enfoque traducido, simplificado y eficiente para acceder a diversa información sobre QuickBox. Esta interfaz fácil de usar tiene como objetivo proporcionar información detallada sobre el funcionamiento de QuickBox, una herramienta poderosa y versátil para administrar su servidor sin esfuerzo.</p>
<p>Dentro de esta pantalla gráfica, encontrará una lista detallada de las aplicaciones disponibles listas para una instalación perfecta, lo que le permitirá personalizar la configuración de su servidor de acuerdo con sus necesidades específicas. Además, este recurso presenta una gran cantidad de otros comandos esenciales para una utilización óptima dentro del entorno CLI de <code>qb</code>, lo que le permite navegar a través de las tareas de su servidor de manera eficiente y sin esfuerzo.</p>
<p>Tanto si es nuevo en QuickBox como si es un usuario experimentado, esta visualización gráfica de la página de manual de <code>qb</code> sirve como referencia definitiva para aprovechar todo el potencial de QuickBox y liberar el verdadero poder de la administración de su servidor. Explore las diversas funciones, optimice las operaciones de su servidor y maximice su productividad con la ayuda de esta guía intuitiva e informativa. ¡Sumerjámonos y hagamos que su experiencia con QuickBox sea aún más gratificante!</p>';
$L['API_INFO_DIRECT'] = '<p style="font-weight:600;">Para obtener más información y referencias sobre la API integrada de QuickBox, <a href="/api-control.php" rel="noopenner nofollow " class="link" style="color:var(--qb-color-37);">ver esta página</a>.</p>';

/* **********************************
 * #4.4.7.2 - options
 ************************************/
$L['OPTIONS_HEADER']          = 'Opciones';
$L['OPTIONS_CONTENT_HELP']    = 'Muestra este manual de ayuda en formato de página de manual CLI';
$L['OPTIONS_CONTENT_VERBOSE'] = 'Habilita el modo detallado para la depuración';

/* **********************************
 * #4.4.7.3 - software
 ************************************/
$L['SOFTWARE_HEADER']                       = 'Software';
$L['SOFTWARE_INFO_CONTENT']                 = '<p>La siguiente es una lista de todas las aplicaciones disponibles para instalar proporcionadas a través de la compilación de QuickBox.<br/>Los nombres de software se presentan como los ve <code>qb [install|reinstall|update|remove|help] [software_name]</code></p>';
$L['ADMIN_INSTALLED_SOFTWARE_HEADER']       = 'Software instalado por el administrador';
$L['ADMIN_INSTALLED_SOFTWARE_INFO_CONTENT'] = '<p>El administrador del sistema debe instalar las siguientes aplicaciones.<br/>Consulte la columna de disponibilidad a continuación para obtener detalles adicionales.</p>';
$L['MULTI_USER_SOFTWARE_HEADER']            = 'Software multiusuario';
$L['MULTI_USER_SOFTWARE_INFO_CONTENT']      = '<p>Múltiples usuarios pueden instalar las siguientes aplicaciones sin necesidad de asistencia administrativa.<br/>El administrador del sistema determina la disponibilidad de todas las aplicaciones y se otorga a usuarios adicionales dentro de <a href="/usergroups.php" rel="noopener nofollow" class="link">grupos creados</a>.</p>';
$L['SINGLE_USER_SOFTWARE_HEADER']           = 'Software de usuario único';
$L['SINGLE_USER_SOFTWARE_INFO_CONTENT']     = '<p>Las siguientes aplicaciones pueden ser instaladas por un solo usuario asignado a la vez, sin necesidad de asistencia administrativa.<br/>Toda la disponibilidad de la aplicación la determina el administrador del sistema y se otorga a usuarios adicionales dentro de <a href="/usergroups.php" rel="noopener nofollow" class="link">grupos creados</a>.</p>';
$L['SOFTWARE_MANAGEMENT']                   = 'Administración de software';
$L['SOFTWARE_MANAGEMENT_CONTENT']           = 'Parámetros para instalar, reinstalar, actualizar o eliminar software designado con opciones adicionales (si están presentes/deseadas) para un usuario asignado';
$L['SOFTWARE_MANAGEMENT_WARNING_CONTENT']   = '<p>Recuerde que varias aplicaciones tienen varias opciones/requisitos. La mayoría requiere el uso de la marca de nombre de usuario (<code>-u</code>), mientras que aplicaciones como rtorrent no lo harán. Para verificar todas las opciones disponibles para un software específico, utilice <code class="language-bash">qb help [software_name]</code>. Los nombres de aplicaciones dentro de QuickBox para el esquema de nombres de software se pueden ver en el <a href="#software" class="link">gráfico de lista de software</a> anterior.</p>';
$L['SEE_ALSO_HEADER']                       = 'Ver también';
$L['SEE_ALSO_CONTENT']                      = 'Mostrar el uso de comandos útiles para el software designado';

/* **********************************
 * #4.4.7.4 - software options table
 ************************************/
$L['SOFTWARE_NAME']     = 'Nombre del software';
$L['SOFTWARE_TITLE']    = 'Título del software';
$L['USABILITY']         = 'Usabilidad';
$L['CAN_ROLLBACK']      = 'Opción de reversión';
$L['INFO']              = 'Información';
$L['ADMIN_BADGE']       = '<span class="badge badge-pills badge-table-menu" style="padding:2px 6px;line-height:0.7rem;background-color:var(--qb-color-6-rgba);color:#fff;font-size:0.5rem;">solo administrador</span>';
$L['GLOBAL_BADGE']      = '<span class="badge badge-pills badge-table-menu" style="padding:2px 6px;line-height:0.7rem;background-color:var(--qb-color-5-rgba);color:#fff;tamaño de fuente:0.5rem;">global</span>';
$L['MULTI_USER_BADGE']  = '<span class="badge badge-pills badge-table-menu" style="padding:2px 6px;line-height:0.7rem;background-color:var(--qb-color-4-rgba);color:#fff;font-size:0.5rem;">multiusuario</span>';
$L['SINGLE_USER_BADGE'] = '<span class="badge badge-pills badge-table-menu" style="padding:2px 6px;line-height:0.7rem;background-color:var(--qb-color-3-rgba);color:#fff;font-size:0.5rem;">usuario único</span>';
$L['GLOBAL_INFO']       = 'requiere instalación del administrador e instalaciones para todos los usuarios del sistema.';
$L['MULTI_USER_INFO']   = 'requiere instalación de administrador y se puede instalar para cualquier usuario asignado. se admiten múltiples usuarios.';
$L['SINGLE_USER_INFO']  = 'usuario único, solo administrador. requiere la instalación del administrador y es instalado y operado por el usuario administrador.';

/* **********************************
 * #4.4.7.5 - examples header
 ************************************/
$L['EXAMPLES_HEADER'] = 'Ejemplos';

/* **********************************
 * #4.4.7.6 - user management
 ************************************/
$L['USER_MANAGEMENT_INFO_CONTENT']   = '<p>Las funciones de administración de <code>qb user</code> en QuickBox ofrecen un conjunto versátil y poderoso de herramientas para administrar eficientemente a los usuarios en su servidor. Con un enfoque en la facilidad de uso y la funcionalidad robusta, estas funciones le permiten optimizar la administración de usuarios, mejorar la seguridad y garantizar una operación fluida del servidor.</p>';
$L['CREATE_USER_CONTENT']            = 'Crea una nueva cuenta de usuario de QuickBox';
$L['DELETE_USER_CONTENT']            = 'Elimina la cuenta de usuario de QuickBox';
$L['CHANGE_USER_PASSWORD']           = 'Cambiar contraseña de usuario';
$L['CHANGE_USER_PASSWORD_CONTENT']   = 'Cambia la contraseña de la cuenta de usuario asignada';
$L['BAN_USER_CONTENT']               = 'Prohíbe la cuenta de usuario asignada, impidiendo el inicio de sesión y deteniendo los servicios instalados y sus funciones.';
$L['BAN_USER_PRIMARY_CONTENT']       = '<p><em>Esto no <strong>borra</strong> los datos del usuario</em>, solo desactiva los servicios en ejecución y bloquea el acceso.</p>';
$L['UNBAN_USER_CONTENT']             = 'Desbanea la cuenta de usuario asignada, permitiendo iniciar sesión e iniciar los servicios instalados y sus funciones';
$L['PROMOTE_USER_TO_ADMIN']          = 'Promocionar usuario a administrador';
$L['PROMOTE_USER_TO_ADMIN_CONTENT']  = 'Asciende al usuario asignado al nivel de administrador';
$L['DEMOTE_USER_FROM_ADMIN']         = 'Degradar usuario de administrador';
$L['DEMOTE_USER_FROM_ADMIN_CONTENT'] = 'Degrada al usuario asignado al nivel de usuario estándar';
$L['SET_USER_QUOTA']                 = 'Establecer cuota de usuario';
$L['SHOW_USER_QUOTA']                = 'Mostrar cuota de usuario';
$L['SET_USER_SHELL']                 = 'Establecer shell de usuario';
$L['SET_USER_SHELL_CONTENT']         = 'Establece el entorno de shell para el usuario asignado';
$L['SET_USER_SHELL_INFO_CONTENT']    = '<p><strong><code>sudo</code></strong><br>privilegios de administrador completos para el entorno del servidor (gran poder... etc.)<br><strong><code>full</code></strong><br>acceso completo al entorno del servidor, con la excepción de las áreas privilegiadas más altas; es decir: no sudo y no puede acceder a los directorios raíz.<br><strong><code>limited</code></strong><br>el entorno de shell limitado. muy poco acceso a los comandos y encarcelados en su propio directorio de inicio de usuario.</p><hr/><p>Los entornos de shell los establece el administrador del sistema y se pueden ver en la página de edición de usuarios ubicada dentro de <a href="/useradmin.php" rel="noopener nofollow" class="link">Página de administración de usuarios</a>.<br/>Si desea agregar un nuevo entorno de shell, puede hacerlo editando el <code>/etc/shells</code> y agregando la ruta al entorno de shell que le gustaría agregar.</p>';
$L['SET_USER_SHELL_DANGER_CONTENT']  = '<p><strong>Precaución:</strong> tenga en cuenta que cambiar el entorno de shell a cualquier otro que no sea <code>/bash</code> puede provocar un comportamiento no deseado al usar <code>qb</code> (QuickBox), ya que ha sido específicamente diseñado y optimizado para el entorno <code>/bash</code>. En resumen, <code>qb</code> se basa en características y funcionalidades específicas proporcionadas por el shell Bash.<br><br>Para evitar posibles problemas, se recomienda seguir con <code>/bash</code> entorno al usar <code>qb</code>. Si aún desea usar un shell diferente, consulte la documentación de ese shell para revisar cualquier cambio adicional en las rutas, configuraciones u otras configuraciones que puedan necesitar ser actualizadas para garantizar la compatibilidad con <code>qb</code>.</p>';
$L['USER_RCLONE_COMPANION_COMMANDS'] = 'Comandos de Rclone';

/* **********************************
 * #4.4.7.7 - clean functions
 ************************************/
$L['CLEAN_FUNCTIONS']                  = 'Limpiar funciones';
$L['CLEAN_FUNCTIONS_INFO_CONTENT']     = '<p>Las funciones <code>qb clean</code> en QuickBox ofrecen una forma conveniente y eficiente de mantener la limpieza de su servidor y optimizar su rendimiento. Diseñadas teniendo en cuenta la simplicidad y la eficacia, estas funciones le permiten liberar memoria valiosa, eliminar el desorden innecesario y garantizar un funcionamiento del servidor fluido y optimizado.</p>';
$L['CLEAN_MEMORY']                     = 'Limpiar memoria';
$L['CLEAN_MEMORY_CONTENT']             = 'Limpia cachés de memoria de QuickBox';
$L['CLEAN_DASHBOARD_LOGS']             = 'Limpiar registros del panel';
$L['CLEAN_DASHBOARD_LOGS_CONTENT']     = 'Limpia los registros del tablero de QuickBox para el usuario designado';
$L['CLEAN_QB_DASHBOARD_LOGS']          = 'Limpia los archivos de registro del panel QB';
$L['CLEAN_QB_DASHBOARD_LOGS_CONTENT']  = 'Este comando está diseñado para borrar el registro de acciones de UI actual publicado desde syslog y restablecer el registro de errores de UI Nginx a su estado inicial';
$L['CLEAN_SYSTEM_LOGS']                = 'Eliminar archivos de registro antiguos del sistema';
$L['CLEAN_SYSTEM_LOGS_CONTENT']        = 'Este comando está diseñado para eliminar registros y archivos comprimidos en el directorio <code>/var/log</code> que han excedido el período de retención asignado. El período de retención está establecido en 7 días de forma predeterminada (si no se ingresa ningún valor opcional).';
$L['CLEAN_RCLONE_UPLOAD_LOGS']         = 'Limpiar registros de carga de Rclone';
$L['CLEAN_RCLONE_UPLOAD_LOGS_CONTENT'] = 'Limpia los registros de carga de QuickBox rclone para el usuario designado';
$L['CLEAN_LOCKS']                      = 'Limpiar candados';
$L['CLEAN_LOCKS_CONTENT']              = 'Limpia el software QuickBox y los bloqueos apt-dpkg que pueden impedir que QuickBox instale software nuevo';

/* **********************************
 * #4.4.7.8 - fix functions
 ************************************/
$L['FIX_FUNCTIONS']              = 'Reparar funciones';
$L['FIX_FUNCTIONS_INFO_CONTENT'] = '<p>Las funciones <code>qb fix</code> en QuickBox proporcionan un conjunto de herramientas potente y fácil de usar para abordar problemas comunes y realizar reparaciones del sistema sin esfuerzo. Con un enfoque en la simplicidad y la eficacia, estas funciones le permiten detectar y resolver varios problemas que puedan surgir en su servidor, lo que garantiza operaciones fluidas e ininterrumpidas.</p>';
$L['FIX_HOME']                   = 'Reparar Inicio';
$L['FIX_HOME_CONTENT']           = 'Corregir los permisos del directorio principal de los usuarios designados';
$L['FIX_PHP']                    = 'Reparar PHP';
$L['FIX_PHP_CONTENT']            = 'Arreglar la configuración de PHP e instalar las extensiones faltantes. Esto también actualizará los paquetes de PHP a la última versión';
$L['FIX_PYTHON']                 = 'Reparar Python';
$L['FIX_PYTHON_CONTENT']         = 'Reparar la configuración de Python e instalar las extensiones faltantes. Además, las etapas de python3.9 si no están disponibles actualmente en el sistema para su uso predeterminado en compilaciones de aplicaciones que requieren python';
$L['FIX_VERSION']                = 'Versión fija';
$L['FIX_VERSION_CONTENT']        = 'Arreglar la instalación de QuickBox reinstalando la última versión disponible';

/* **********************************
 * #4.4.7.9 - generate functions
 ************************************/
$L['GENERATE_FUNCTIONS']                   = 'Generar funciones';
$L['GENERATE_FUNCTIONS_INFO_CONTENT']      = '<p>Las funciones <code>qb generate</code> en QuickBox ofrecen una forma conveniente y eficiente de crear elementos esenciales que mejoran la administración y el monitoreo del servidor. Actualmente, el comando qb generate es compatible con la función de generación de registros de qb, lo que permite a los usuarios generar sin esfuerzo una vista previa de las estadísticas de los servidores, la activación de API y la información de montaje.<br/>A medida que las funciones de generación de qb evolucionen, es probable que ofrezcan una matriz en expansión de funciones para mejorar aún más la administración del servidor.</p>';
$L['GENERATE_SYSTEM_LOGS']                 = 'Generar registros del sistema';
$L['GENERATE_SYSTEM_LOGS_CONTENT']         = 'Genera registros del sistema para la instalación actual de QuickBox';
$L['GENERATE_SYSTEM_LOGS_WARNING_CONTENT'] = '<p>A partir de la versión <em>3.0.0.<strong>36+</strong></em>, <code>qb generate log</code> ha evolucionado hasta convertirse en una utilidad más detallada para la agregación y organización de registros. Su objetivo es simplificar la recuperación de registros complementando los registros nativos de una aplicación al resumir y centralizar los datos de registro críticos, haciendo que la resolución de problemas sea mucho más eficiente.</p><p>Este comando y su funcionalidad son un trabajo continuo en progreso.</p>';
$L['GENERATE_SYSTEM_LOGS_SUCCESS_CONTENT'] = '<p>Puede acceder y descargar este archivo de registro resumido de tres maneras:<br><ol><li><strong>Generar/Descargar:</strong> Vaya a \'Sistema > <a href="/troubleshooting.php" class="link">Solución de problemas</a> > Registro del sistema\' dentro de la interfaz de usuario. Aquí puede generar y/o descargar el resumen del registro del sistema producido por el comando generar registro.</li><li><strong>Ver registros:</strong> Vaya a \'Sistema > <a href="/logs.php" class="link">Registros del sistema</a>\'. Aquí es donde puede encontrar registros adicionales e información recopilada por el comando generar registro.</li><li><strong>Directorio del servidor:</strong> Encuéntrelo en el servidor en: \'/srv/quickbox/logs/system_log\'.</li></ol></p>';

/* **********************************
 * #4.4.7.10 - manage functions
 ************************************/
$L['MANAGE_FUNCTIONS']                                  = 'Administrar funciones';
$L['MANAGE_FUNCTIONS_INFO_CONTENT']                     = '<p>Las funciones <code>qb manage</code> en QuickBox brindan un conjunto de herramientas poderoso y completo para administrar eficientemente varios aspectos de su servidor. Diseñadas pensando en la comodidad del usuario, estas funciones le permiten controlar sin esfuerzo los elementos críticos de su entorno impulsado por QuickBox.<br/>Ya sea para cambiar la configuración de idioma, verificar el estado de la activación de su API principal, administrar la distribución de datos o garantizando la integridad de los datos a través de copias de seguridad y reversiones, las funciones de gestión de qb ofrecen una solución integral para administradores de servidores y entusiastas por igual.</p>';
$L['MANAGE_API_KEY']                                    = 'Administrar clave API';
$L['MANAGE_API_KEY_CONTENT']                            = 'Administrar claves API de QuickBox y enumerar información y opciones adicionales';
$L['ADD_API_KEY']                                       = 'Agregar clave API';
$L['ADD_API_KEY_CONTENT']                               = 'Agregar/Activar clave API';
$L['REMOVE_API_KEY']                                    = 'Quitar clave API';
$L['REMOVE_API_KEY_CONTENT']                            = 'Quitar/Desactivar clave API';
$L['MANAGE_DATABASE']                                   = 'Administrar base de datos';
$L['MANAGE_DATABASE_CONTENT']                           = 'Administrar qué base de datos se utiliza para QuickBox';
$L['MANAGE_DATABASE_CONNECTION_INFO_CONTENT']           = 'Tenga en cuenta que al especificar un nombre de usuario y contraseña (si se utilizan las opciones), no es necesario que coincidan con las credenciales de su cuenta principal actual. Estas credenciales están destinadas al uso del sistema local, particularmente para conexiones de bases de datos y diversas funciones del sistema. Por lo tanto, pueden ser únicos e independientes del nombre de usuario y contraseña de su cuenta principal.';
$L['MANAGE_DATABASE_INFO_CONTENT']                      = 'QuickBox utiliza principalmente SQLite3 como su base de datos predeterminada. Sin embargo, tiene la opción de cambiar sin problemas entre SQLite3 y MySQL usando este comando. Si opta por MySQL, asegúrese de tener un servidor MySQL correctamente instalado y configurado en su sistema. Además, necesitará una cuenta de usuario MySQL con permisos adecuados para la creación y administración de bases de datos. La ejecución de este comando facilita estas configuraciones necesarias, incluida la instalación del servidor y cliente MySQL si aún no están instalados en su sistema. Durante el proceso, se le pedirá que instale el servidor y el cliente MySQL si no se detectan. Además, el comando maneja la configuración, lo que garantiza una integración perfecta con QuickBox. Tenga en cuenta que todos los parámetros excepto <code>-o [mysql|sqlite]</code> son opcionales y utilizarán de forma predeterminada valores predefinidos dentro del script.<br><br>Los valores predeterminados son los siguientes:<br><code>user=admin, pass=%random%, port=3306, host=localhost, name=qbpro</code><br><br>Los detalles de MySQL se pueden encontrar en <code>/root/.my.cnf</code>.<br><br>Para volver a convertir a SQLite3, simplemente ejecute el comando nuevamente con el indicador <code>-o sqlite</code>.';
$L['MANAGE_DATABASE_BACKUP']                            = 'Administrar copia de seguridad de la base de datos';
$L['MANAGE_DATABASE_BACKUP_CONTENT']                    = 'Realizar copia de seguridad de la base de datos de QuickBox';
$L['MANAGE_DATABASE_BACKUP_INFO_CONTENT']               = 'El proceso de copia de seguridad de QuickBox se ejecuta automáticamente cada 24 horas a las 3:30 a. m. (hora del servidor) como parte del programa de mantenimiento. Esta tarea aparece en la programación de <code>/etc/cron.d/quickbox</code> como:<br><br><code>30 3 * * * root /usr/local/bin/qb manage db -o Maintenance --cron</code><br><br>Sin embargo, puede activar manualmente una copia de seguridad (sin ejecutar la rutina de mantenimiento) utilizando el comando anterior.<br><br><strong>Acerca del proceso de copia de seguridad</strong><br><br>Cada copia de seguridad crea una instantánea de la base de datos de QuickBox, lo que proporciona un punto de restauración para salvaguardar la integridad de los datos en caso de pérdida o corrupción de datos. Los archivos de respaldo se guardan en un directorio específico y el sistema conserva los 5 respaldos más recientes para garantizar que siempre tenga varios puntos de restauración disponibles para la recuperación.<br><br><strong>Ubicaciones de los archivos de respaldo</strong><br><br>Los archivos de respaldo se almacenan en los siguientes directorios:<br><br><strong>MySQL</strong>: <code>/opt/quickbox/backup/system/[DATE_TIME]/db/qbpro.sql</code><br><strong>SQLite</strong>: <code>/opt/quickbox/backup/system/[DATE_TIME]/db/qbpro.db</code>';
$L['MANAGE_DATABASE_MAINTENANCE']                       = 'Administrar el mantenimiento de la base de datos';
$L['MANAGE_DATABASE_MAINTENANCE_CONTENT']               = 'Iniciar el proceso de mantenimiento de la base de datos de QuickBox';
$L['MANAGE_DATABASE_MAINTENANCE_INFO_CONTENT']          = 'El proceso de mantenimiento de QuickBox está diseñado para mantener la base de datos funcionando de manera eficiente y sin problemas. Este proceso incluye:<br><br><ol><li>Limpiar los datos innecesarios.</li><li>Optimizar las tablas de la base de datos.</li><li>Ejecutar otras tareas de mantenimiento para aumentar la eficiencia y evitar problemas con los datos, como verificar y reparar tablas.</li><li>Activar una notificación de Mensaje del día (MotD) para alertar al administrador del sistema a través de la CLI si ocurren errores irrecuperables.</li></ol><p><strong>Cuándo se ejecuta el mantenimiento</strong><br><br>El proceso de mantenimiento se ejecuta automáticamente cada 24 horas a las 3:30 a. m., hora del servidor. Esta tarea se incluye en la programación de <code>/etc/cron.d/quickbox</code> como:<br><br><code>30 3 * * * root /usr/local/bin/qb manage db -o Maintenance --cron</code><br><br>Sin embargo, puede activar el mantenimiento manualmente utilizando el comando anterior.<br><br><strong>Por qué es importante el mantenimiento</strong><br><br>El mantenimiento regular garantiza que su base de datos QuickBox se mantenga en buen estado, mantenga un alto rendimiento del sistema y proteja sus datos.</p>';
$L['MANAGE_DATABASE_RESTORE']                           = 'Administrar la restauración de la base de datos';
$L['MANAGE_DATABASE_RESTORE_CONTENT']                   = 'Restaurar la base de datos QuickBox';
$L['MANAGE_DATABASE_RESTORE_INFO_CONTENT']              = 'Este comando inicia el proceso de restauración de la base de datos, lo que le permite seleccionar un archivo de respaldo específico para restaurar. El proceso de restauración está diseñado para recuperar datos en caso de pérdida o corrupción de datos, lo que proporciona una forma confiable y eficiente de restaurar su base de datos QuickBox a un estado anterior.<br><br><strong>Cómo funciona el proceso de restauración</strong><br><br>Cuando ejecute el comando de restauración, se le presentará un menú de selección que enumera todos los archivos de respaldo de la base de datos disponibles. Luego, puede elegir el archivo de respaldo que desea restaurar y el sistema restaurará automáticamente el archivo de respaldo seleccionado, devolviendo su base de datos QuickBox al estado en el que se encontraba cuando se creó el respaldo.';
$L['MANAGE_DASHBOARD_ACCESS_URL']                       = 'Administrar URL de acceso al panel';
$L['MANAGE_DASHBOARD_ACCESS_URL_CONTENT']               = 'Este comando establece la raíz web del servidor para el acceso al tablero ya sea al Dominio expresado oa la Dirección IP';
$L['SET_SERVER_LANG']                                   = 'Establecer idioma del servidor';
$L['SET_SERVER_LANG_CONTENT']                           = 'Este comando establecerá el idioma solicitado como idioma predeterminado para el servidor';
$L['MANAGE_PUBLIC_TRACKERS']                            = 'Administrar rastreadores públicos';
$L['MANAGE_PUBLIC_TRACKERS_CONTENT']                    = 'Este comando activará o desactivará los rastreadores públicos para todos los usuarios';
$L['EX_PUB_TRACKERS_ALLOW']                             = 'ejemplo para permitir rastreadores públicos:';
$L['EX_PUB_TRACKERS_DISALLOW']                          = 'ejemplo para no permitir rastreadores públicos:';
$L['BACKUP_APPLICATIONS']                               = 'Aplicaciones de respaldo';
$L['PARTIAL_CONFIG_ONLY_BACKUP']                        = 'Copia de seguridad parcial <span class="badge badge-pills outline-badge-secondary badge-table-menu" style="padding:2px 6px;line-height:0.7rem;font-size:0.5rem;">config solamente</span>';
$L['PARTIAL_CONFIG_ONLY_BACKUP_CONTENT']                = 'Este comando respaldará la configuración de la aplicación designada para el usuario asignado';
$L['FULL_CONFIG_AND_APP_BACKUP']                        = 'Copia de seguridad completa <span class="badge badge-pills outline-badge-primary badge-table-menu" style="padding:2px 6px;line-height:0.7rem;font-size:0.5rem;">config &amp; app</span>';
$L['FULL_CONFIG_AND_APP_BACKUP_CONTENT']                = 'Este comando hará una copia de seguridad de la aplicación designada para el usuario asignado. Incluye la aplicación y los datos de configuración, útiles para revertir a versiones previamente instaladas y respaldadas';
$L['PARTIAL_RTORRENT_ALL_USERS_BACKUP']                 = 'Copia de seguridad parcial (solo rtorrent)';
$L['PARTIAL_RTORRENT_ALL_USERS_BACKUP_PRIMARY_CONTENT'] = '<p>En el caso de rtorrent como la configuración de software para la copia de seguridad, no se requiere el indicador de nombre de usuario (<code>-u</code>).</p>';
$L['PARTIAL_RTORRENT_ALL_USERS_BACKUP_CONTENT']         = 'Este comando realizará una copia de seguridad de todos los archivos .rtorrent.rc de los usuarios de rtorrent existentes.<br>Las copias de seguridad se almacenan en:<br><code>/home/[USERNAME]/.QuickBox/software/rtorrent /backup/.rtorrent.rc_AÑO-MES-DÍA_HORA:MINUTO</código>';
$L['ROLLBACK_APPLICATIONS']                             = 'Restaurar copia de seguridad de la aplicación';
$L['ROLLBACK_APPLICATIONS_CONTENT']                     = 'Este comando revertirá la aplicación designada para el usuario asignado a una versión anterior almacenada/seleccionada en el directorio de copia de seguridad.<br>Las copias de seguridad se almacenan en:<br><code>/home/[ NOMBRE DE USUARIO]/.QuickBox/software/[SOFTWARE_NAME]/backup/</code>';
$L['RESTORE_APP_BACKUP_CONFIG']                         = 'Restaurar copia de seguridad <span class="badge badge-pills outline-badge-secondary badge-table-menu" style="padding:2px 6px;line-height:0.7rem;font-size:0.5rem;">config solamente</span>';
$L['RESTORE_APP_BACKUP_CONFIG_CONTENT']                 = 'Este comando restaurará la configuración de la aplicación designada previamente respaldada para el usuario asignado';
$L['RESTORE_APP_DEFAULT_CONFIG']                        = 'Restaurar valor predeterminado <span class="badge badge-pills outline-badge-secondary badge-table-menu" style="padding:2px 6px;line-height:0.7rem;font-size:0.5rem;">config solamente</span>';
$L['RESTORE_APP_DEFAULT_CONFIG_CONTENT']                = 'Este comando restaurará la configuración de la aplicación predeterminada designada (desde la instalación) para el usuario asignado';

/* **********************************
 * #4.4.7.11 - news functions
 ************************************/
$L['NEWS_FUNCTIONS']              = 'Funciones de Noticias';
$L['NEWS_FUNCTIONS_INFO_CONTENT'] = '<p>La función <code>qb news</code> en QuickBox ofrece actualizaciones de noticias oportunas y relevantes directamente a su servidor, lo que garantiza que se mantenga informado sobre los últimos desarrollos y cambios en el ecosistema de QuickBox. . Con el objetivo de mantenerlo actualizado, esta función brinda información esencial sobre los lanzamientos actuales y futuros, los cambios de versión y otros elementos de interés.</p>';
$L['NEWS']                        = 'Noticias';
$L['NEWS_CONTENT']                = 'Ver las últimas noticias de QuickBox';

/* **********************************
 * #4.4.7.12 - support functions
 ************************************/
$L['SUPPORT_FUNCTIONS']              = 'Funciones de soporte';
$L['SUPPORT_FUNCTIONS_INFO_CONTENT'] = '<p>La función <code>qb support</code> en QuickBox ofrece un método seguro y confiable para otorgar acceso al personal de soporte a su servidor cuando se necesita asistencia. Con un fuerte énfasis en la seguridad y la protección del usuario, esta función utiliza la cuenta <code>quickSupport</code>, lo que garantiza que solo el personal de soporte autorizado pueda acceder a su servidor.</p>';
$L['ENABLE_SUPPORT']                 = 'Habilitar soporte';
$L['ENABLE_SUPPORT_CONTENT']         = 'Habilitar soporte. Por lo general, se asigna al miembro del equipo de personal que es responsable del soporte';
$L['DISABLE_SUPPORT']                = 'Deshabilitar soporte';
$L['DISABLE_SUPPORT_CONTENT']        = 'Deshabilitar soporte. De lo contrario, la cuenta de soporte se eliminará automáticamente después de 36 horas';

/* **********************************
 * #4.4.7.13 - update functions
 ************************************/
$L['UPDATE_FUNCTIONS']              = 'Funciones de actualización';
$L['UPDATE_FUNCTIONS_INFO_CONTENT'] = '<p>La función <code>qb update</code> en QuickBox le ofrece una forma conveniente y flexible de administrar las actualizaciones para su instalación de QuickBox. Con esta función, tiene control total sobre el proceso de actualización, lo que le permite buscar actualizaciones manualmente y elegir cuándo aplicarlas.</p>';
$L['UPDATE_CHECK']                  = 'Actualizar verificación';
$L['UPDATE_CHECK_CONTENT']          = 'Buscar actualizaciones de QuickBox';
$L['UPDATE_QUICKBOX']               = 'Actualizar QuickBox';
$L['UPDATE_QUICKBOX_CONTENT']       = 'Actualizar la instalación de QuickBox a la última versión, si hay alguna disponible';

/* **********************************
 * #4.4.7.14 - bugs & reporting
 ************************************/
$L['BUGS']              = 'Errores e informes';
$L['BUGS_INFO_CONTENT'] = '<p>La visualización gráfica de la documentación de QuickBox recibirá actualizaciones periódicas para garantizar que la información proporcionada siga siendo fácilmente accesible y fácil de usar. Nuestro compromiso de mejorar su experiencia con QuickBox nos impulsa a refinar y mejorar continuamente la documentación, manteniéndola actualizada con las últimas características y funcionalidades.<br/><br/>
Con cada actualización, nos esforzaremos por simplificar conceptos complejos, aclarar instrucciones e incorporar comentarios de los usuarios para hacer que la página de manual de qb sea aún más intuitiva y eficiente. Nuestro objetivo es brindarle una comprensión perfecta de QuickBox y sus amplias capacidades, lo que le permite dominar el entorno qb CLI y administrar sin esfuerzo las tareas de su servidor.<br/><br/>
Valoramos sus comentarios y lo alentamos a compartir cualquier sugerencia o idea que pueda tener para mejorar aún más la página de manual de qb. Sus comentarios son fundamentales para dar forma a este recurso y garantizar que siga siendo una referencia valiosa para todos los usuarios de QuickBox. ¡De hecho, esta página existe porque fue solicitada! 🤪<br/><br/>
Informe cualquier error reproducible o sugerencia a <strong><a href="https://nullrefer.ir/?https://github.com/QuickBox/pro-v3/issues" rel="noopener nofollow" target="_blank">Rastreador de problemas y funciones de QuickBox.IO Labs</a></strong></p>';

/* **********************************
 * #4.4.7.15 - disclaimer
 ************************************/
$L['DISLAIMER']       = 'Descargo de responsabilidad';
$L['DISCLAIMER_TEXT'] = '<p>Este script está diseñado para uso general y no implica ninguna garantía de idoneidad para una tarea dada. QuickBox.IO no será responsable de su configuración ni de ningún daño causado durante el uso/instalación/modificación de este script o cualquiera de sus complementos. Tenga en cuenta que ni QuickBox.IO ni su personal son responsables de mantener actualizado su Software y/o Servidor; esta es una responsabilidad exclusiva del usuario del software QuickBox Pro.</p>';

/* **********************************
 * #4.4.7.16 - license
 ************************************/
$L['LICENSE']      = 'Licencia';
$L['LICENSE_SET']  = 'Con licencia bajo BSD 3-Cláusula';
$L['LICENSE_TEXT'] = '<p>Copyright (c) 2018-2024, QuickBox.IO. Todos los derechos reservados.</p>
<p>Se permite la redistribución y el uso en formato fuente y binario, con o sin modificaciones, siempre que se cumplan las siguientes condiciones:</p>
<ul style="font-size:0.75rem"><li>Las redistribuciones del código fuente deben conservar el aviso de derechos de autor anterior, esta lista de condiciones y el siguiente descargo de responsabilidad.</li>
<li>Las redistribuciones en forma binaria deben reproducir el aviso de derechos de autor anterior, esta lista de condiciones y el siguiente descargo de responsabilidad en la documentación y/u otros materiales provistos con la distribución.</li>
<li>Ni el nombre del titular de los derechos de autor ni los nombres de sus colaboradores pueden utilizarse para respaldar o promocionar productos derivados de este software sin el permiso previo por escrito.</li></ul>
<p>ESTE SOFTWARE ES PROPORCIONADO POR LOS TITULARES DE LOS DERECHOS DE AUTOR Y LOS CONTRIBUYENTES "TAL CUAL" Y CUALQUIER GARANTÍA EXPLÍCITA O IMPLÍCITA, INCLUYENDO, ENTRE OTRAS, LAS GARANTÍAS IMPLÍCITAS DE COMERCIABILIDAD E IDONEIDAD PARA UN FIN DETERMINADO. EN NINGÚN CASO EL TITULAR DE LOS DERECHOS DE AUTOR O LOS CONTRIBUYENTES SERÁN RESPONSABLES POR CUALQUIER DAÑO DIRECTO, INDIRECTO, INCIDENTAL, ESPECIAL, EJEMPLAR O CONSECUENTE (INCLUYENDO, ENTRE OTROS, LA ADQUISICIÓN DE BIENES O SERVICIOS SUSTITUTOS; PÉRDIDA DE USO, DATOS O BENEFICIOS; O INTERRUPCIÓN DEL NEGOCIO) CUALQUIER CAUSA Y EN CUALQUIER TEORÍA DE RESPONSABILIDAD, YA SEA POR CONTRATO, RESPONSABILIDAD ESTRICTA O AGRAVIO (INCLUYENDO NEGLIGENCIA O DE OTRO TIPO) QUE SURJA DE CUALQUIER FORMA DEL USO DE ESTE SOFTWARE, INCLUSO SI SE ADVIERTE DE LA POSIBILIDAD DE DICHO DAÑO. </p>';

/* **********************************
 * #4.4.7.17 - misc
 ************************************/
$L['EXAMPLE']  = 'ejemplo:';
$L['EXAMPLES'] = 'ejemplos:';

/* **********************************
 * #4.4.8 - CHANGELOG / UPDATE
 ************************************/
$L['CURRENT_VERSION']   = 'Versión actual';
$L['DASH_UPDATE_TITLE'] = 'Panel de la versión QuickBox';
$L['QB_UPDATE']         = 'Panel de la versión QuickBox';
$L['QBUPDATE']          = 'Registro de cambios / Actualización';
$L['UPCOMING_CHANGES']  = 'Próximos cambios';
$L['UPDATE_AVAILABLE']  = 'Actualización disponible';
$L['UPDATE_TO_DATE']    = 'Al día';
$L['VERSION_STATUS']    = 'Estado de la versión';
$L['UPDATE_TXT']        = 'Actualizar';
$L['AVAILABLE_TXT']     = '¡Disponible!';
$L['UPDATE_VERSION']    = 'Actualizar versión';
$L['UPDATE_ACTIVATE']   = 'Active su suscripción Pro para recibir actualizaciones';
$L['UPDATE_CURRENT']    = '¡Estás actualizado!';
$L['CHANGELOGS']        = 'Registros de cambios';

/* **********************************
 * #4.4.9 - SYSTEM DASHBOARD
 ************************************/
$L['BANDWIDTH_TOTALS_TOOLTIP'] = 'Puede administrar la fecha de inicio del ancho de banda mensual y restablecer las estadísticas a través de <a href=\'/configurations.php#additionals\'>Configuración general > Configuración adicional del panel</a>. Esto le permite ajustar la fecha de inicio o borrar la base de datos vnStat para restablecer los totales.<br/><br/>Vea los totales acumulados actuales y el historial: <a href=\'javascript:void(0)\' class=\'open_bandwidthtotals_modal\' data-toggle=\'modal\' data-target=\'#viewBandwidthTotals\'><span class=\'badge badge-pills badge-info\'>Totales de ancho de banda</span></a>';
$L['DISK_UTIL_TIME']           = 'Tiempo de utilización del disco';
$L['DISK_IO_BW']               = 'Ancho de banda de E/S de disco';
$L['DISK_SPACE_USAGE_FOR']     = 'Uso de espacio en disco para:';
$L['DISK_UTILIZATION']         = 'Utilización';
$L['DISK_WRITE']               = 'Escribir';
$L['DISK_READ']                = 'Leer';
$L['SYS_DISK_READ']            = 'Lectura de Disco';
$L['SYS_DISK_WRITE']           = 'Escritura en Disco';
$L['TOP_CPU_PROC']             = 'Principales procesos de aplicación de CPU';
$L['TOP_CPUMEM_PROC']          = 'Principales procesos de memoria de la CPU';
$L['TOP_CPUSYS_PROC']          = 'Principales procesos del sistema de CPU';
$L['SERVICE_MEM_USAGE']        = 'Memoria utilizada de Systemd Services sin caché';
$L['SYS_SWAP_USAGE']           = 'Uso de intercambio del sistema';
$L['SYS_MEM_USAGE']            = 'Uso de la memoria del sistema';
$L['CPU_FREQ']                 = 'Frecuencia de CPU actual';
$L['CPU_LOAD']                 = 'Carga de CPU';
$L['CPU_USAGE']                = 'Uso de CPU';
$L['RAM_USAGE']                = 'Uso de RAM';
$L['BW_UPLOAD']                = 'Carga de ancho de banda';
$L['BW_DOWNLOAD']              = 'Descarga de ancho de banda';
$L['SYS_UPLOAD']               = 'Subir';
$L['SYS_DOWNLOAD']             = 'Descargar';
$L['SYS_DASH_POWERED_BY']      = 'Panel del sistema impulsado por:';
$L['SYS_DASH_UPTIME']          = 'Tiempo de actividad del sistema';
$L['SYS_DASH_SWAP_USED']       = 'Swap usado';
$L['SYS_DASH_RAM_USED']        = 'RAM usada';
$L['SYS_DASH_CPU']             = 'CPU';
$L['SYS_DASH_TMD']             = 'Descarga mensual total';
$L['SYS_DASH_TMU']             = 'Carga mensual total';
$L['APT_UPDATES']              = 'Actualizaciones de APT';
$L['APT_DEPENDENCY']           = 'Paquete de dependencia';
$L['APT_VERSION_INSTALLED']    = 'Versión actual';
$L['APT_VERSION_AVAILABLE']    = 'Versión disponible';
$L['UPDATE_APT_DEPENDENCIES']  = 'Actualizar dependencias apt';

/* **********************************
 * #4.4.9.1 - Modal de totales de ancho de banda
 ************************************/
$L['BANDWIDTH_TOTALS']            = 'Totales de ancho de banda';
$L['BANDWIDTH_DATA_TIME_NOTICE']  = 'Nota: Las horas que se muestran en estos gráficos se basan en la zona horaria del servidor, no en la zona horaria local. Para ajustar la zona horaria del servidor, siga los pasos que se indican a continuación.<br/><ul><li>Acceda a su servidor mediante SSH</li><li>Ejecute el comando<br/><code>sudo dpkg-reconfigure tzdata</code></li><li>Siga las indicaciones para seleccionar su zona horaria</li><li>Una vez que haya terminado, ejecute el siguiente comando<br><code>qb-vnstat --adjust-timestamps</code></li></ul><p class=\'text-warning\'>Ajustar la zona horaria del servidor afectará los datos acumulados del gráfico.</p>';
$L['SELECT_AN_INTERFACE']         = 'Seleccione una interfaz';
$L['BANDWIDTH_TOTALS_DATA_INFO']  = 'Estos datos se recopilan de la base de datos de vnStat y se basan en el ciclo mensual establecido dentro de la configuración de vnStat. Los datos se recopilan y almacenan en la base de datos de vnStat y se muestran aquí para su conveniencia. Puede administrar la fecha de inicio del ancho de banda mensual y restablecer las estadísticas a través de <a href=\'/configurations.php#additionals\' style=\'display:inline-flex\'>Configuración general > Configuración adicional del panel</a>. Esto le permite ajustar la fecha de inicio o borrar la base de datos de vnStat para restablecer los totales.';
$L['VIEWING_DATA_FOR']            = 'Viendo datos para:';
$L['MONTHLY_BANDWIDTH_DATA']      = 'Datos mensuales de ancho de banda';
$L['DAILY_BANDWIDTH_DATA']        = 'Datos diarios de ancho de banda';
$L['HOURLY_BANDWIDTH_DATA']       = 'Datos horarios de ancho de banda';
$L['BANDWIDTH_YEAR']              = 'Año';
$L['BANDWIDTH_MONTH']             = 'Mes';
$L['BANDWIDTH_DAY']               = 'Día';
$L['BANDWIDTH_HOUR']              = 'Hora';
$L['BANDWIDTH_TOTAL']             = 'Tráfico total';
$L['BANDWIDTH_RX']                = 'Descargar';
$L['BANDWIDTH_TX']                = 'Cargar';
$L['BANDWIDTH_SELECT_INTERFACE']  = 'Seleccionar interfaz';
$L['BANDWIDTH_SELECT_MONTH']      = 'Seleccionar mes';
$L['BANDWIDTH_SELECT_DAY']        = 'Seleccionar día';
$L['BANDWIDTH_SELECT_HOUR']       = 'Seleccionar hora';
$L['BANDWIDTH_SELECT_YEAR']       = 'Seleccionar año';
$L['BANDWIDTH_USAGE']             = 'Uso de ancho de banda';
$L['BANDWIDTH_VIEWING_INTERFACE'] = '(( viendo ))';

/* **********************************
 * #4.4.10 - PANEL DE QUÉ ESTÁ EN REPRODUCCIÓN
 ************************************/
$L['STREAMING_DASHBOARD']                        = 'Panel de Streaming';
$L['STREAMING_DASHBOARD_INFO']                   = 'El panel de Qué Está en Reproducción ofrece una vista general de la actividad actual de streaming en tu servidor. Esta función actualmente es compatible con los servicios de streaming Emby y Jellyfin. El panel muestra el número de streams activos, el ancho de banda total utilizado y el contenido que se está reproduciendo actualmente. Además, puedes ver las últimas películas y episodios que tus usuarios están viendo.';
$L['DAEMON_AND_STREAMING_SERVICES']              = 'Deck de control de servidor de medios y demonio';
$L['STREAMING_APP_VERSION']                      = 'Versión de {applicationName}';
$L['ENTER_API_KEY']                              = 'Introduce tu clave API';
$L['API_KEY_PLACEHOLDER']                        = 'Introduce tu clave API de {serviceName}';
$L['MASS_NOTIFICATION']                          = 'Notificación Masiva';
$L['TEMP_TRANSCODE_PATH']                        = 'Ruta Temporal de Transcodificación';
$L['CLEAR_TEMP_TRANSCODE_PATH']                  = 'Vaciar Transcodificaciones Temporales';
$L['INTERVAL_SETTINGS_FOR_TEMP_TRANSCODES']      = 'Configuración de Intervalos para Transcodificaciones Temporales';
$L['INTERVAL_SETTINGS_FOR_TEMP_TRANSCODES_TIPS'] = '<strong><em>Las siguientes medidas están en minutos.</em></strong><br><small>(ej.: 90 minutos = 1.5 horas)</small><hr>Estas configuraciones determinan los intervalos en los que se borran las transcodificaciones temporales. El sistema limpiará automáticamente las transcodificaciones según los intervalos especificados para liberar espacio en disco y optimizar el rendimiento.';
$L['INTERVAL_STANDARD']                          = 'Medios Estándar';
$L['INTERVAL_LIVE_TV']                           = 'TV en Vivo';
$L['ENABLE_TRANSCODE_AUTO_CLEAR']                = 'Activar Limpieza Automática de Transcodificaciones Temporales';
$L['TRANSCODE_AUTO_CLEAR_ACTIVATED']             = 'Limpieza automática de transcodificaciones activada.<br>Intervalo estándar: {standardInterval} minutos.<br>Intervalo TV en vivo: {liveTvInterval} minutos.';
$L['TRANSCODE_AUTO_CLEAR_DEACTIVATED']           = 'Limpieza automática de transcodificaciones desactivada.';
$L['SETTINGS_SAVE_SUCCESS']                      = 'Configuración guardada exitosamente.';
$L['STREAMING_STATS']                            = 'Estadísticas de Streaming';
$L['LATEST_MOVIES']                              = 'Últimas Películas';
$L['MOVIE']                                      = 'Película';
$L['MOVIES']                                     = 'Películas';
$L['LATEST_EPISODES']                            = 'Últimos Episodios';
$L['SHOWS']                                      = 'Programas';
$L['SERIES']                                     = 'Series';
$L['EPISODE']                                    = 'Episodio';
$L['SEASON_EPISODE']                             = 'Temporada/Episodio';
$L['EPISODE_TITLE']                              = 'Episodio';
$L['LIVETV']                                     = 'TV en Vivo';
$L['CHANNEL']                                    = 'Canal';
$L['CHANNEL_NUMBER']                             = 'Número del Canal';
$L['NOW_PLAYING']                                = 'Reproduciendo Ahora';
$L['MEDIA_TITLE']                                = 'Título del Medio';
$L['MEDIA_TYPE']                                 = 'Tipo de Medio';
$L['YEAR']                                       = 'Año';
$L['DURATION']                                   = 'Duración';
$L['ACTION']                                     = 'Acción';
$L['DISCONNECT_REASON']                          = 'Razón de Desconexión';
$L['NOTIFICATION']                               = 'Notificación';
$L['LIBRARY']                                    = 'Biblioteca';
$L['LIBRARY_PATH']                               = 'Ruta de la Biblioteca';
$L['PREMIERE_DATE']                              = 'Fecha de Estreno';
$L['ACTIVE_STREAMS_PLACEHOLDER']                 = '(0 streams activos)';
$L['BANDWIDTH_USED_PLACEHOLDER']                 = '(Ancho de Banda Usado: 0 Mbps)';
$L['MEDIA_ITEM']                                 = 'Elemento Multimedia';
$L['ACTION_INFO']                                = 'Información de la Acción';
$L['ADDITIONAL_INFO']                            = 'Información Adicional';
$L['NO_DETAILS_AVAILABLE']                       = 'No hay detalles disponibles.';
$L['DEVICE_INFO']                                = 'Información del Dispositivo';
$L['STREAM_INFO']                                = 'Información del Stream';
$L['PLAY_STATE_PRIORITY']                        = 'Prioridad del Estado de Reproducción';
$L['VIEW_WSD_LOGS']                              = 'Ver Registros de WSD';
$L['WSD_ACTION_LOGS']                            = 'Registros de Acciones de WSD';
$L['CLEAR_LOGS']                                 = 'Limpiar Registros';
$L['NO_ACTIONS_CURRENTLY_LOGGED']                = 'No hay acciones registradas actualmente.';
$L['KILL_STREAM_SETTINGS']                       = 'Configuración de Killstream';
$L['NOTIFICATION_TITLE']                         = 'Notificación';
$L['NOTIFICATION_MESSAGE']                       = 'Mensaje';
$L['THRESHOLD_SETTINGS_FOR_KILLSTREAM']          = 'Configuración de Umbrales para Killstream';
$L['THRESHOLD_SETTINGS_FOR_KILLSTREAM_TIPS']     = '<strong><em>Las siguientes medidas están en segundos.</em></strong><br><small>(ej.: 600 segundos = 10 minutos)</small><hr>Estas configuraciones determinan las condiciones bajo las cuales un stream será detenido forzosamente debido a la inactividad. El sistema monitorizará la actividad del stream y, si se cumplen las condiciones, lo detendrá automáticamente para liberar recursos.';
$L['STANDARD_MEDIA']                             = 'Medios Estándar';
$L['LIVE_TV_MEDIA']                              = 'TV en Vivo';
$L['SKIP_NOTIFICATION']                          = 'Omitir Notificación';
$L['SKIP_DISCONNECTION']                         = 'Omitir Desconexión';
$L['PAUSE_DURATION']                             = 'Duración de la Pausa';
$L['DISCONNECT_DURATION']                        = 'Duración para Desconexión';
$L['WSD_ACTION_CLEAR_LOGS_CONFIRM']              = '¿Seguro que deseas limpiar los registros?';
$L['WSD_ACTION_CLEAR_LOGS']                      = '¡Sí, límpialos!';
$L['WSD_ACTION_CLEAR_LOGS_FAILED']               = 'Error al limpiar los registros.';
$L['WSD_ACTION_CLEAR_LOGS_SUCCESS']              = 'Registros limpiados con éxito.';
$L['WSD_ADMIN_NOTIFY']                           = '<span class="text-info fw900">[admin-notify]</span> <strong>{admin}</strong> {admin_status} envió una <span class="text-warning fw600">notificación</span> a <strong>{user}</strong> mientras veía <span class="text-primary fw600">{media}</span>.<br><div style="border:1px solid var(--qb-color-8-rgba);background:var(--qb-color-1-rgba);padding:4px 12px;border-radius:3px;text-wrap:pretty;min-width:250px;"><span class="fw600">{notif_header}</span><br><span class="fw300">{notif_text}</span></div>';
$L['WSD_KILL_NOTIFY']                            = '<span class="text-info fw900">[kill-notify]</span> {user} viendo <span class="text-primary fw600">{media}</span> pausado por <span class="text-info fw600">{paused_time}</span> en <span class="text-mute">{pause_position}</span> el <span class="text-mute fw600">{pause_date} {pause_time}</span> desde <span class="text-mute fw600">{device} {ip}</span> ha sido <span class="text-warning fw600">notificado</span> por inactividad.';
$L['WSD_NOTIFY']                                 = '<span class="text-info fw900">[notify]</span> {user} recibió una notificación.';
$L['WSD_ADMIN_STOP']                             = '<span class="text-info fw900">[admin-stop]</span> {user} viendo <span class="text-primary fw600">{media}</span> desde <span class="text-mute fw600">{device}</span> ha sido <span class="text-danger fw600">detenido</span> por <strong>{admin}</strong> {admin_status}.';
$L['WSD_KILL_STREAM']                            = '<span class="text-info fw900">[kill-stream]</span> {user} viendo <span class="text-primary fw600">{media}</span> pausado por <span class="text-info fw600">{paused_time}</span> en <span class="text-mute">{pause_position}</span> el <span class="text-mute fw600">{pause_date} {pause_time}</span> desde <span class="text-mute fw600">{device} {ip}</span> ha sido <span class="text-danger fw600">detenido</span> por inactividad.';
$L['WSD_ADMIN_DISCONNECT']                       = '<span class="text-info fw900">[admin-disconnect]</span> {user} viendo <span class="text-primary fw600">{media}</span> desde <span class="text-mute fw600">{device}</span> ha sido <span class="text-danger fw600">desconectado</span> por <strong>{admin}</strong> {admin_status}.';
$L['WSD_DISCONNECT_STREAM']                      = '<span class="text-info fw900">[kill-stream]</span> {user} viendo <span class="text-primary fw600">{media}</span> pausado por <span class="text-info fw600">{paused_time}</span> en <span class="text-mute">{pause_position}</span> el <span class="text-mute fw600">{pause_date} {pause_time}</span> desde <span class="text-mute fw600">{device} {ip}</span> ha sido <span class="text-danger fw600">desconectado</span> por inactividad.';
$L['WSD_MASS_NOTIFICATION']                      = '<span class="text-info fw900">[mass-notification]</span> <strong>{admin}</strong> {admin_status} envió una notificación masiva.<br><strong>Usuarios notificados:</strong> {users_notified}<br><strong>Usuarios activos:</strong> {active_users}, <strong>Total de sesiones:</strong> {session_count}.<div style="border:1px solid var(--qb-color-8-rgba);background:var(--qb-color-1-rgba);padding:4px 12px;border-radius:3px;text-wrap:pretty;min-width:250px;"><strong>{notif_header}</strong><br>{notif_text}</div>';
$L['WSD_USER_ACTION']                            = '<span class="text-info fw900">[user-action]</span> {user} realizó la acción: <span class="text-primary fw600">{action}</span> el <span class="text-mute fw600">{date} {time}</span>.';
$L['NONE']                                       = 'Ninguno';

/* *****************************************
 * #4.4.10.1 - errores y mensajes a nivel de página
 *******************************************/
$L['MISSING_FIELD']                    = 'Campo faltante';
$L['MISSING_API_KEY']                  = 'Clave API faltante';
$L['INVALID_API_KEY_FORMAT']           = 'Formato de clave API inválido. Por favor ingresa una clave API válida.';
$L['UNKNOWN_MEDIA']                    = 'Medio desconocido';
$L['UNKNOWN_DURATION']                 = 'Duración desconocida';
$L['UNKNOWN_PAUSE_TIME']               = 'Tiempo de pausa desconocido';
$L['ERROR_FETCHING_LOGS']              = 'Error al obtener registros.';
$L['NO_SUPPORTED_STREAMING_SERVICE']   = 'No hay un servicio de streaming compatible instalado.';
$L['PROCESS_REQUEST_ERROR']            = 'Error al procesar la solicitud. Por favor, inténtalo de nuevo.';
$L['API_CONNECTION_ERROR']             = 'No se pudo conectar a la API de {serviceName}. Por favor revisa tu clave API y configuración del servidor.';
$L['INPUT_READ_FAILED']                = 'Error al leer la entrada.';
$L['INVALID_INPUT']                    = 'Entrada inválida. Por favor revisa tu entrada e inténtalo de nuevo.';
$L['INVALID_JSON_PAYLOAD']             = 'Carga JSON inválida: {error}';
$L['INVALID_EMBY_API_KEY']             = 'Clave API de Emby inválida.';
$L['INVALID_JELLYFIN_API_KEY']         = 'Clave API de Jellyfin inválida.';
$L['DB_FILE_NOT_FOUND']                = 'Archivo de base de datos no encontrado: {dbPath}';
$L['API_KEY_SAVE_SUCCESS']             = 'Clave API guardada exitosamente.';
$L['API_KEY_SAVE_FAILED']              = 'Error al guardar la clave API.';
$L['INVALID_TEMP_TRANSCODE_PATH']      = 'Ruta temporal de transcodificación inválida.';
$L['INVALID_SERVICE_SPECIFIED']        = 'Servicio especificado inválido.';
$L['TEMP_TRANSCODE_PATH_SAVE_FAIL']    = 'Error al guardar la ruta temporal de transcodificación.';
$L['TEMP_TRANSCODE_PATH_SAVE_SUCCESS'] = 'Ruta temporal de transcodificación guardada exitosamente.';
$L['TRANSCODE_INTERVAL_SAVE']          = 'Intervalo de limpieza automática de transcodificación guardado exitosamente.';
$L['TRANSCODE_INTERVAL_FAILED']        = 'Error al guardar el intervalo de limpieza automática de transcodificación.';
$L['INVALID_TRANSCODE_PATH']           = 'Ruta de transcodificación inválida o faltante.';
$L['TRANSCODE_DIR_EMPTY_FAILED']       = 'Error al vaciar el directorio temporal de transcodificación.';
$L['TRANSCODE_DIR_EMPTY_SUCCESS']      = 'Directorio temporal de transcodificación vaciado exitosamente.';
$L['EMBY_CONFIG_LOAD_FAILED']          = 'Error al cargar la configuración de Emby.';
$L['EMBY_API_KEY_RETRIEVE_FAILED']     = 'Error al obtener la clave API de Emby.';
$L['JELLYFIN_API_KEY_RETRIEVE_FAILED'] = 'Error al obtener la clave API de Jellyfin.';
$L['JELLYFIN_CONFIG_LOAD_FAILED']      = 'Error al cargar la configuración de Jellyfin.';
$L['LATEST_LOG_FETCH_FAILED']          = 'Error al obtener el registro más reciente.';
$L['ERROR_PREFIX']                     = '[ERROR] ';
$L['UNKNOWN']                          = 'Desconocido';
$L['UNKNOWN_USER']                     = 'Usuario desconocido';
$L['UNKNOWN_DEVICE']                   = 'Dispositivo desconocido';
$L['API_URL_KEY_REQUIRED']             = 'Se requieren la URL y la clave API.';
$L['FAILED_TO_CREATE_UPDATE_TRIGGER']  = 'Error al crear el disparador de actualización: ';
$L['DB_TABLE_CREATE_FAILED']           = 'Error al crear la tabla `media_api`: {error}';
$L['DB_TABLE_INFO_FAILED']             = 'Error al obtener información de la tabla `media_api`: {error}';
$L['DB_COLUMN_ADD_FAILED']             = 'Error al añadir la columna `{column}` a `media_api`: {error}';
$L['LOCATION_PRIVATE_RESERVED']        = 'IP Privada/Local';
$L['UNKNOWN_IP']                       = 'IP desconocida';
$L['LOCATION_UNKNOWN_CITY']            = 'Ciudad desconocida';
$L['LOCATION_UNKNOWN_STATE']           = 'Estado desconocido';
$L['LOCATION_UNKNOWN_COUNTRY']         = 'País desconocido';
$L['LOCATION_LOADING']                 = 'Cargando ubicación...';
$L['LOCATION_ERROR']                   = 'Error';
$L['API_MOVIE_COUNT_FETCH_FAILED']     = 'Error al obtener la cantidad de películas desde la API de {applicationName}. Código HTTP: {httpCode}. Error: {error}';
$L['API_MOVIE_COUNT_NOT_FOUND']        = 'Cantidad de películas no encontrada en la respuesta de la API de {applicationName}.';
$L['API_SERIES_COUNT_FETCH_FAILED']    = 'Error al obtener la cantidad de series desde la API de {applicationName}. Código HTTP: {httpCode}. Error: {error}';
$L['API_SERIES_COUNT_NOT_FOUND']       = 'Cantidad de series no encontrada en la respuesta de la API de {applicationName}.';
$L['API_EPISODE_COUNT_FETCH_FAILED']   = 'Error al obtener la cantidad de episodios desde la API de {applicationName}. Código HTTP: {httpCode}. Error: {error}';
$L['API_EPISODE_COUNT_NOT_FOUND']      = 'Cantidad de episodios no encontrada en la respuesta de la API de {applicationName}.';
$L['CURL_INIT_FAILED']                 = 'Error al inicializar sesión cURL para {applicationName}.';
$L['CURL_ERROR']                       = 'Error cURL: {error}';
$L['HTTP_ERROR']                       = 'Error HTTP: Código de estado {httpStatus}';
$L['UNEXPECTED_RESPONSE_TYPE']         = 'Tipo de respuesta inesperado: {responseType}';
$L['INVALID_LOGS_FORMAT']              = 'Formato de registros inválido: Se esperaba un arreglo, pero se obtuvo {logType}';
$L['INVALID_APPLICATION_NAME']         = 'Nombre de aplicación inválido. Debe ser \'jellyfin\' o \'emby\'.';
$L['DB_QUERY_PREPARE_FAILED']          = 'Error al preparar la consulta de base de datos: {error}';
$L['DB_QUERY_EXECUTION_FAILED']        = 'Error al ejecutar la consulta de base de datos: {error}';
$L['DB_SELECT_QUERY_PREPARE_FAILED']   = 'Error al preparar la consulta SELECT: {error}';
$L['DB_SELECT_QUERY_EXECUTE_FAILED']   = 'Error al ejecutar la consulta SELECT: {error}';
$L['DB_UPDATE_QUERY_PREPARE_FAILED']   = 'Error al preparar la consulta UPDATE: {error}';
$L['DB_INSERT_QUERY_PREPARE_FAILED']   = 'Error al preparar la consulta INSERT: {error}';
$L['DB_API_KEY_RETRIEVAL_FAILED']      = 'Error al obtener la clave API debido a un error de base de datos.';
$L['UNSUPPORTED_DB_TYPE']              = 'Tipo de base de datos no compatible: {dbType}';
$L['DOMAIN_NOT_DEFINED']               = 'El dominio de {applicationName} no está definido.';
$L['QUERY_FAILED']                     = 'Error en la consulta: {errorInfo}';
$L['NO_INSTALLATION_FOUND']            = 'No se encontró ninguna instalación de {applicationName} para ningún usuario.';
$L['USERNAME_FETCH_FAILED']            = 'Error al obtener el nombre de usuario para el ID de usuario {appUID} de {applicationName}.';
$L['INVALID_API_URL']                  = 'URL de la API de {applicationName} inválida: {apiUrl}.';
$L['INVALID_TOGGLE_VALUE']             = 'Valor de alternancia inválido. Se esperaba 0 o 1.';
$L['INVALID_PATH_FORMAT']              = 'Formato de ruta inválido. Se esperaba una cadena de texto.';
$L['INVALID_INTERVAL']                 = 'Formato de intervalo inválido. Se esperaba un número entero positivo.';
$L['SETTINGS_SAVE_FAILED']             = 'Error al guardar la configuración. Por favor inténtalo de nuevo.';
$L['SERVER_ERROR']                     = 'Error del servidor';

/* **********************************
 * #4.5 - PÁGINAS DE ERROR
 ************************************/
$L['404HACK'] = '¡Ay! ¿Realmente quieres lastimarme?';
$L['404PAGE'] = 'Esta no es la página que está buscando.';
$L['404PRO']  = 'Por favor, compre un <a href="https://nullrefer.ir/?https://quickbox.io/product/quickbox-pro-subscription/" rel="noopener nofollow" target="_blank">Licencia QuickBox</a> para acceder a esta página.';
$L['500PAGE'] = 'Esto es vergonzoso, algo parece haber salido mal.';
$L['WHOOPS']  = 'Whoops!';
