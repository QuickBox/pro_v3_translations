<?php
return [
  // #4.4.7 - HELP MANUAL
  'QB_HELP'                                           => 'Manual de Ayuda',

  // #4.4.7.1 - description
  'DESCRIPTION_CONTENT'                               => '<p>Bienvenido a la visualización gráfica integral de la página de manual de <code>qb</code>, diseñada para ofrecerte un enfoque traducido, simplificado y eficiente para acceder a información variada sobre QuickBox. Esta interfaz fácil de usar tiene como objetivo proporcionar información profunda sobre el funcionamiento de QuickBox, una herramienta poderosa y versátil para gestionar tu servidor sin esfuerzo.</p><p>Dentro de esta visualización gráfica, encontrarás una lista detallada de aplicaciones disponibles listas para instalación fluida, permitiéndote personalizar la configuración de tu servidor según tus necesidades específicas. Además, este recurso presenta una gran cantidad de otros comandos esenciales para la utilización óptima dentro del entorno CLI de <code>qb</code>, permitiéndote navegar a través de las tareas de tu servidor de manera eficiente y sin esfuerzo.</p><p>Ya seas nuevo en QuickBox o un usuario experimentado, esta visualización gráfica de la página de manual de <code>qb</code> sirve como tu referencia definitiva para aprovechar todo el potencial de QuickBox y liberar el verdadero poder de tu gestión de servidor. Explora las diversas características, optimiza las operaciones de tu servidor y maximiza tu productividad con la ayuda de esta guía intuitiva e informativa. ¡Vamos a sumergirnos y hacer tu experiencia de QuickBox aún más gratificante!</p>',
  'API_INFO_DIRECT'                                   => '<p style="font-weight:600;">Para más información y referencia sobre la API de QuickBox integrada, <a href="/api-control.php" rel="noopenner nofollow" class="link" style="color:var(--qb-color-37);">ve esta página</a>.</p>',

  // #4.4.7.2 - options
  'OPTIONS_HEADER'                                    => 'Opciones',
  'OPTIONS_CONTENT_HELP'                              => 'Muestra este manual de ayuda en formato de página de manual CLI',
  'OPTIONS_CONTENT_VERBOSE'                           => 'Habilita el modo verboso para depuración',

  // #4.4.7.3 - software
  'SOFTWARE_HEADER'                                   => 'Software',
  'SOFTWARE_INFO_CONTENT'                             => '<p>Lo siguiente es una lista de todas las aplicaciones disponibles para instalar proporcionadas a través de la compilación de QuickBox.<br/>Los nombres del software se presentan como se ven en <code>qb [install|reinstall|update|remove|help] [software_name]</code></p>',
  'ADMIN_INSTALLED_SOFTWARE_HEADER'                   => 'Software Instalado por Administrador',
  'ADMIN_INSTALLED_SOFTWARE_INFO_CONTENT'             => '<p>Las siguientes aplicaciones requieren ser instaladas por el Administrador del Sistema.<br/>Ver columna de disponibilidad a continuación para detalles adicionales.</p>',
  'MULTI_USER_SOFTWARE_HEADER'                        => 'Software Multi Usuario',
  'MULTI_USER_SOFTWARE_INFO_CONTENT'                  => '<p>Las siguientes aplicaciones pueden ser instaladas por múltiples usuarios sin necesidad de asistencia de administrador.<br/>Toda la disponibilidad de aplicaciones es determinada por el Administrador del Sistema y otorgada a usuarios adicionales dentro de <a href="/usergroups.php" rel="noopener nofollow" class="link">grupos creados</a>.</p>',
  'SINGLE_USER_SOFTWARE_HEADER'                       => 'Software de Usuario Único',
  'SINGLE_USER_SOFTWARE_INFO_CONTENT'                 => '<p>Las siguientes aplicaciones pueden ser instaladas por solo un usuario asignado a la vez, sin necesidad de asistencia de administrador.<br/>Toda la disponibilidad de aplicaciones es determinada por el Administrador del Sistema y otorgada a usuarios adicionales dentro de <a href="/usergroups.php" rel="noopener nofollow" class="link">grupos creados</a>.</p>',
  'SOFTWARE_MANAGEMENT'                               => 'Gestión de Software',
  'SOFTWARE_MANAGEMENT_CONTENT'                       => 'Parámetros para instalar, reinstalar, actualizar o eliminar software designado con opciones adicionales (si están presentes/deseadas) a un usuario asignado',
  'SOFTWARE_MANAGEMENT_WARNING_CONTENT'               => '<p>Ten en cuenta que varias aplicaciones tienen varias opciones/requisitos. La mayoría requiere el uso de la bandera de nombre de usuario (<code>-u</code>), mientras que aplicaciones como rtorrent no lo harán. Para verificar todas las opciones disponibles para un software específico, utiliza <code class="language-bash">qb help [software_name]</code>. La nomenclatura de aplicaciones dentro de QuickBox para el esquema de nomenclatura de software se puede ver en la <a href="#software" class="link">tabla de lista de software</a> arriba.</p>',
  'SEE_ALSO_HEADER'                                   => 'Ver También',
  'SEE_ALSO_CONTENT'                                  => 'Mostrar uso de comandos útiles para software designado',

  // #4.4.7.4 - software options table
  'SOFTWARE_NAME'                                     => 'Nombre del Software',
  'SOFTWARE_TITLE'                                    => 'Título del Software',
  'USABILITY'                                         => 'Usabilidad',
  'CAN_ROLLBACK'                                      => 'Opción de Rollback',
  'INFO'                                              => 'Información',
  'ADMIN_BADGE'                                       => '<span class="badge badge-pills badge-table-menu" style="padding:2px 6px;line-height:0.7rem;background-color:var(--qb-color-6-rgba);color:#fff;font-size:0.5rem;">solo admin</span>',
  'GLOBAL_BADGE'                                      => '<span class="badge badge-pills badge-table-menu" style="padding:2px 6px;line-height:0.7rem;background-color:var(--qb-color-5-rgba);color:#fff;font-size:0.5rem;">global</span>',
  'MULTI_USER_BADGE'                                  => '<span class="badge badge-pills badge-table-menu" style="padding:2px 6px;line-height:0.7rem;background-color:var(--qb-color-4-rgba);color:#fff;font-size:0.5rem;">multi usuario</span>',
  'SINGLE_USER_BADGE'                                 => '<span class="badge badge-pills badge-table-menu" style="padding:2px 6px;line-height:0.7rem;background-color:var(--qb-color-3-rgba);color:#fff;font-size:0.5rem;">usuario único</span>',
  'GLOBAL_INFO'                                       => 'requiere instalación de administrador e instala para todos los usuarios en el sistema.',
  'MULTI_USER_INFO'                                   => 'requiere instalación de administrador y puede ser instalado para cualquier usuario asignado. se admiten múltiples usuarios.',
  'SINGLE_USER_INFO'                                  => 'usuario único, solo administrador. requiere instalación de administrador y es instalado y operado por el usuario administrador.',

  // #4.4.7.5 - examples header
  'EXAMPLES_HEADER'                                   => 'Ejemplos',

  // #4.4.7.6 - user management
  'USER_MANAGEMENT_INFO_CONTENT'                      => '<p>Las funciones de gestión de <code>qb user</code> en QuickBox ofrecen un conjunto versátil y poderoso de herramientas para gestionar eficientemente usuarios en tu servidor. Con un enfoque en la facilidad de uso y funcionalidad robusta, estas funciones te permiten optimizar la gestión de usuarios, mejorar la seguridad y asegurar una operación fluida del servidor.</p>',
  'CREATE_USER_CONTENT'                               => 'Crea una nueva cuenta de usuario de QuickBox',
  'DELETE_USER_CONTENT'                               => 'Elimina cuenta de usuario de QuickBox',
  'CHANGE_USER_PASSWORD'                              => 'Cambiar Contraseña de Usuario',
  'CHANGE_USER_PASSWORD_CONTENT'                      => 'Cambia la contraseña para la cuenta de usuario asignada',
  'BAN_USER_CONTENT'                                  => 'Prohíbe la cuenta de usuario asignada, impidiendo el inicio de sesión y deteniendo los servicios instalados y sus funciones.',
  'BAN_USER_PRIMARY_CONTENT'                          => '<p><em>Esto no <strong>elimina</strong> los datos del usuario</em>, solo deshabilita los servicios en ejecución y bloquea el acceso.</p>',
  'UNBAN_USER_CONTENT'                                => 'Desprohíbe la cuenta de usuario asignada, permitiendo el inicio de sesión y iniciando los servicios instalados y sus funciones',
  'PROMOTE_USER_TO_ADMIN'                             => 'Promover Usuario a Administrador',
  'PROMOTE_USER_TO_ADMIN_CONTENT'                     => 'Promueve al usuario asignado al nivel de administrador',
  'DEMOTE_USER_FROM_ADMIN'                            => 'Degradar Usuario de Administrador',
  'DEMOTE_USER_FROM_ADMIN_CONTENT'                    => 'Degrada al usuario asignado al nivel de usuario estándar',
  'SET_USER_QUOTA'                                    => 'Establecer Cuota de Usuario',
  'SHOW_USER_QUOTA'                                   => 'Mostrar Cuota de Usuario',
  'SET_USER_SHELL'                                    => 'Establecer Shell de Usuario',
  'SET_USER_SHELL_CONTENT'                            => 'Establece el entorno de shell para el usuario asignado',
  'SET_USER_SHELL_INFO_CONTENT'                       => '<p><strong><code>sudo</code></strong><br>privilegios completos de administrador al entorno del servidor (gran poder... etc)<br><strong><code>full</code></strong><br>acceso completo al entorno del servidor, con la excepción de áreas de mayor privilegio; es decir: no sudo y no puede acceder a directorios raíz.<br><strong><code>limited</code></strong><br>el entorno de shell limitado. muy poco acceso a comandos y confinado a su propio directorio de inicio de usuario.</p><hr/><p>Los entornos de shell son establecidos por el Administrador del Sistema y se pueden ver en la página de edición de usuarios ubicada dentro de la <a href="/useradmin.php" rel="noopener nofollow" class="link">página de Administración de Usuarios</a>.<br/>Si te gustaría agregar un nuevo entorno de shell, puedes hacerlo editando el archivo <code>/etc/shells</code> y agregando la ruta al entorno de shell que te gustaría agregar.</p>',
  'SET_USER_SHELL_DANGER_CONTENT'                     => '<p><strong>Precaución:</strong> Por favor ten en cuenta que cambiar el entorno de shell a algo diferente de <code>/bash</code> puede llevar a comportamientos no intencionados al usar <code>qb</code> (QuickBox), ya que ha sido específicamente diseñado y optimizado para el entorno <code>/bash</code>. En resumen, <code>qb</code> depende de características y funcionalidades específicas proporcionadas por el shell Bash.<br><br>Para evitar cualquier problema potencial, es recomendable mantener el entorno <code>/bash</code> al usar <code>qb</code>. Si aún deseas usar un shell diferente, consulta la documentación para ese shell para revisar cualquier cambio adicional a rutas, configuraciones u otros ajustes que puedan necesitar ser actualizados para asegurar compatibilidad con <code>qb</code>.</p>',
  'USER_RCLONE_COMPANION_COMMANDS'                    => 'Comandos de Acompañante de Rclone',

  // #4.4.7.7 - clean functions
  'CLEAN_FUNCTIONS'                                   => 'Funciones de Limpieza',
  'CLEAN_FUNCTIONS_INFO_CONTENT'                      => '<p>Las funciones de <code>qb clean</code> en QuickBox ofrecen una manera conveniente y eficiente de mantener la limpieza de tu servidor y optimizar su rendimiento. Diseñadas con simplicidad y efectividad en mente, estas funciones te permiten liberar memoria valiosa, eliminar desorden innecesario y asegurar una operación fluida y optimizada del servidor.</p>',
  'CLEAN_MEMORY'                                      => 'Limpiar Memoria',
  'CLEAN_MEMORY_CONTENT'                              => 'Limpia las cachés de memoria de QuickBox',
  'CLEAN_DASHBOARD_LOGS'                              => 'Limpiar Registros del Dashboard',
  'CLEAN_DASHBOARD_LOGS_CONTENT'                      => 'Limpia los registros del dashboard de QuickBox para el usuario designado',
  'CLEAN_QB_DASHBOARD_LOGS'                           => 'Limpiar archivos de registro del Dashboard QB',
  'CLEAN_QB_DASHBOARD_LOGS_CONTENT'                   => 'Este comando está diseñado para limpiar el registro actual de Acciones de UI publicado desde syslog y resetear el registro de errores de Nginx de UI a su estado inicial',
  'CLEAN_SYSTEM_LOGS'                                 => 'Eliminar archivos de registro del sistema antiguos',
  'CLEAN_SYSTEM_LOGS_CONTENT'                         => 'Este comando está diseñado para eliminar registros y archivos comprimidos en el directorio <code>/var/log</code> que han excedido el período de retención asignado. El período de retención se establece en 7 días por defecto (si no se ingresa ningún valor opcional).',
  'CLEAN_RCLONE_UPLOAD_LOGS'                          => 'Limpiar Registros de Subida de Rclone',
  'CLEAN_RCLONE_UPLOAD_LOGS_CONTENT'                  => 'Limpia los registros de subida de rclone de QuickBox para el usuario designado',
  'CLEAN_LOCKS'                                       => 'Limpiar Bloqueos',
  'CLEAN_LOCKS_CONTENT'                               => 'Limpia los bloqueos de software de QuickBox y apt-dpkg que pueden impedir que QuickBox instale nuevo software',

  // #4.4.7.8 - fix functions
  'FIX_FUNCTIONS'                                     => 'Funciones de Reparación',
  'FIX_FUNCTIONS_INFO_CONTENT'                        => '<p>Las funciones de <code>qb fix</code> en QuickBox proporcionan un conjunto de herramientas poderoso y fácil de usar para abordar problemas comunes y realizar reparaciones del sistema sin esfuerzo. Con un enfoque en simplicidad y efectividad, estas funciones te permiten solucionar problemas y resolver varios problemas que pueden surgir en tu servidor, asegurando operaciones fluidas e ininterrumpidas.</p>',
  'FIX_HOME'                                          => 'Reparar Inicio',
  'FIX_HOME_CONTENT'                                  => 'Repara los permisos del directorio de inicio del usuario designado',
  'FIX_PHP'                                           => 'Reparar PHP',
  'FIX_PHP_CONTENT'                                   => 'Repara la configuración de PHP e instala extensiones faltantes',
  'FIX_PYTHON'                                        => 'Reparar Python',
  'FIX_PYTHON_CONTENT'                                => 'Repara la configuración de Python e instala extensiones faltantes. Además, prepara python3.9 si no está disponible actualmente en el sistema para uso predeterminado en compilaciones de aplicaciones que requieren python',
  'FIX_VERSION'                                       => 'Reparar Versión',

  // #4.4.7.9 - generate functions
  'GENERATE_FUNCTIONS'                                => 'Funciones de Generación',
  'GENERATE_FUNCTIONS_INFO_CONTENT'                   => '<p>Las funciones de <code>qb generate</code> en QuickBox ofrecen una manera conveniente y eficiente de crear elementos esenciales que mejoran la gestión y monitoreo del servidor. Actualmente, el comando qb generate admite la función qb generate logs, permitiendo a los usuarios generar sin esfuerzo una vista previa de las estadísticas del servidor, activación de API e información de montaje.<br/>A medida que las funciones de qb generate evolucionan, probablemente ofrecerán una gama en expansión de características para mejorar aún más la gestión del servidor.</p>',
  'GENERATE_SYSTEM_LOGS'                              => 'Generar Registros del Sistema',
  'GENERATE_SYSTEM_LOGS_CONTENT'                      => 'Genera registros del sistema para la instalación actual de QuickBox',
  'GENERATE_SYSTEM_LOGS_SUCCESS_CONTENT'              => '<p>Puedes acceder y descargar este archivo de resumen de registro de tres maneras:<br><ol><li><strong>Generar / Descargar:</strong> Ve a \'Sistema > <a href="/troubleshooting.php" class="link">Solución de Problemas</a> > Registros del Sistema\' dentro de la interfaz de usuario. Aquí puedes generar y/o descargar el resumen de registro del sistema producido por el comando generate log.</li><li><strong>Ver Registros:</strong> Ve a \'Sistema > <a href="/logs.php" class="link">Registros del Sistema</a>\'. Aquí es donde puedes encontrar registros adicionales e información recopilada por el comando generate log.</li><li><strong>Directorio del Servidor:</strong> Encuéntralo en el servidor en: \'/srv/quickbox/logs/system_log\'.</li></ol></p>',
  'GENERATE_SYSTEM_LOGS_WARNING_CONTENT'              => '<p><strong>Advertencia:</strong> Este comando generará un registro del sistema completo que puede contener información sensible. Por favor asegúrate de que este registro se maneje de forma segura y no se comparta públicamente.</p>',

  // #4.4.7.10 - manage functions
  'MANAGE_FUNCTIONS'                                  => 'Funciones de Gestión',
  'MANAGE_FUNCTIONS_INFO_CONTENT'                     => '<p>Las funciones de <code>qb manage</code> en QuickBox proporcionan un conjunto poderoso y completo de herramientas para gestionar eficientemente varios aspectos de tu servidor. Diseñadas con la conveniencia del usuario en mente, estas funciones te permiten controlar sin esfuerzo elementos críticos de tu entorno impulsado por QuickBox.<br/>Ya sea intercambiando configuraciones de idioma, verificando el estado de tu activación principal de API, gestionando la distribución de datos, o asegurando la integridad de los datos a través de respaldos y reversiones, las funciones de qb manage ofrecen una solución completa para administradores de servidores y entusiastas por igual.</p>',
  'MANAGE_API_KEY'                                    => 'Gestionar Clave API',
  'MANAGE_API_KEY_CONTENT'                            => 'Gestionar claves API de QuickBox y listar información adicional y opciones',
  'ADD_API_KEY'                                       => 'Agregar Clave API',
  'ADD_API_KEY_CONTENT'                               => 'Agregar/Activar clave API',
  'REMOVE_API_KEY'                                    => 'Eliminar Clave API',
  'REMOVE_API_KEY_CONTENT'                            => 'Eliminar/Desactivar clave API',
  'MANAGE_DATABASE'                                   => 'Gestionar Base de Datos',
  'MANAGE_DATABASE_CONTENT'                           => 'Gestionar qué base de datos se usa para QuickBox',
  'MANAGE_DATABASE_CONNECTION_INFO_CONTENT'           => 'Ten en cuenta que al especificar un nombre de usuario y contraseña (si se usan las opciones), no tienen que coincidir con las credenciales de tu cuenta principal actual. Estas credenciales están destinadas para uso del sistema local, particularmente para conexiones de base de datos y varias funciones del sistema. Por lo tanto, pueden ser únicas e independientes del nombre de usuario y contraseña de tu cuenta principal.',
  'MANAGE_DATABASE_INFO_CONTENT'                      => 'QuickBox utiliza principalmente SQLite3 como su base de datos predeterminada. Sin embargo, tienes la opción de cambiar sin problemas entre SQLite3 y MySQL usando este comando. Si optas por MySQL, asegúrate de tener un servidor MySQL instalado y configurado correctamente en tu sistema. Además, necesitarás una cuenta de usuario MySQL con permisos adecuados para la creación y gestión de bases de datos. Ejecutar este comando facilita estas configuraciones necesarias, incluyendo la instalación del servidor y cliente MySQL si no están ya instalados en tu sistema. Durante el proceso, se te pedirá instalar el servidor y cliente MySQL si no se detectan. Además, el comando maneja la configuración, asegurando una integración sin problemas con QuickBox. Ten en cuenta que todos los parámetros excepto <code>-o [mysql|sqlite]</code> son opcionales y se establecerán en valores predeterminados predefinidos dentro del script.<br><br>Los valores predeterminados son los siguientes:<br><code>user=admin, pass=%random%, port=3306, host=localhost, name=qbpro</code><br><br>Los detalles de MySQL se pueden encontrar en <code>/root/.my.cnf</code>.<br><br>Para convertir de vuelta a SQLite3, simplemente ejecuta el comando nuevamente con la bandera <code>-o sqlite</code>.',
  'MANAGE_DATABASE_BACKUP'                            => 'Gestionar Respaldo de Base de Datos',
  'MANAGE_DATABASE_BACKUP_CONTENT'                    => 'Respaldar la base de datos de QuickBox',
  'MANAGE_DATABASE_BACKUP_INFO_CONTENT'               => 'El proceso de respaldo de QuickBox se ejecuta automáticamente cada 24 horas a las 3:30 AM (hora del servidor) como parte del horario de mantenimiento. Esta tarea está listada en el horario <code>/etc/cron.d/quickbox</code> como:<br><br><code>30 3 * * * root /usr/local/bin/qb manage db -o maintenance --cron</code><br><br>Sin embargo, puedes activar manualmente un respaldo (sin ejecutar la rutina de mantenimiento) usando el comando anterior.<br><br><strong>Acerca del Proceso de Respaldo</strong><br><br>Cada respaldo crea una instantánea de la base de datos de QuickBox, proporcionando un punto de restauración para salvaguardar la integridad de los datos en caso de pérdida o corrupción de datos. Los archivos de respaldo se guardan en un directorio especificado, con el sistema reteniendo los 5 respaldos más recientes para asegurar que siempre tengas múltiples puntos de restauración disponibles para la recuperación.<br><br><strong>Ubicaciones de Archivos de Respaldo</strong><br><br>Los archivos de respaldo se almacenan en los siguientes directorios:<br><br><strong>MySQL</strong>: <code>/opt/quickbox/backup/system/[DATE_TIME]/db/qbpro.sql</code><br><strong>SQLite</strong>: <code>/opt/quickbox/backup/system/[DATE_TIME]/db/qbpro.db</code>',
  'MANAGE_DATABASE_MAINTENANCE'                       => 'Gestionar Mantenimiento de Base de Datos',
  'MANAGE_DATABASE_MAINTENANCE_CONTENT'               => 'Iniciar el proceso de mantenimiento de la base de datos de QuickBox',
  'MANAGE_DATABASE_MAINTENANCE_INFO_CONTENT'          => 'El proceso de mantenimiento de QuickBox está diseñado para mantener la base de datos funcionando de manera fluida y eficiente. Este proceso incluye:<br><br><ol><li>Limpiar datos innecesarios.</li><li>Optimizar tablas de base de datos.</li><li>Ejecutar otras tareas de mantenimiento para aumentar la eficiencia y prevenir problemas de datos, como verificar y reparar tablas.</li><li>Activar una notificación de Mensaje del Día (MotD) para alertar al administrador del sistema vía CLI si ocurren errores irrecuperables.</li></ol><p><strong>Cuándo se Ejecuta el Mantenimiento</strong><br><br>El proceso de mantenimiento se ejecuta automáticamente cada 24 horas a las 3:30 AM hora del servidor. Esta tarea está listada en el horario <code>/etc/cron.d/quickbox</code> como:<br><br><code>30 3 * * * root /usr/local/bin/qb manage db -o maintenance --cron</code><br><br>Sin embargo, puedes activar manualmente el mantenimiento usando el comando anterior.<br><br><strong>Por Qué el Mantenimiento es Importante</strong><br><br>El mantenimiento regular asegura que tu base de datos de QuickBox se mantenga saludable, mantenga el rendimiento del sistema alto y proteja tus datos.</p>',
  'MANAGE_DATABASE_RESTORE'                           => 'Gestionar Restauración de Base de Datos',
  'MANAGE_DATABASE_RESTORE_CONTENT'                   => 'Restaurar la base de datos de QuickBox',
  'MANAGE_DATABASE_RESTORE_INFO_CONTENT'              => 'Este comando inicia el proceso de restauración de la base de datos, permitiéndote seleccionar un archivo de respaldo específico para restaurar. El proceso de restauración está diseñado para recuperar datos en caso de pérdida o corrupción de datos, proporcionando una manera confiable y eficiente de restaurar tu base de datos de QuickBox a un estado anterior.<br><br><strong>Cómo Funciona el Proceso de Restauración</strong><br><br>Cuando ejecutes el comando de restauración, se te presentará un menú de selección que lista todos los archivos de respaldo de base de datos disponibles. Luego puedes elegir el archivo de respaldo que quieres restaurar, y el sistema restaurará automáticamente el archivo de respaldo seleccionado, devolviendo tu base de datos de QuickBox al estado en que estaba cuando se creó el respaldo.',
  'MANAGE_DASHBOARD_ACCESS_URL'                       => 'Gestionar URL de acceso al Dashboard',
  'MANAGE_DASHBOARD_ACCESS_URL_CONTENT'               => 'Este comando establece la raíz web del servidor para el acceso al dashboard a la dirección IP o Dominio expresado',
  'SET_SERVER_LANG'                                   => 'Establecer Idioma del Servidor',
  'SET_SERVER_LANG_CONTENT'                           => 'Este comando establecerá el idioma solicitado como el idioma predeterminado para el servidor',
  'MANAGE_PUBLIC_TRACKERS'                            => 'Gestionar Trackers Públicos',
  'MANAGE_PUBLIC_TRACKERS_CONTENT'                    => 'Este comando habilitará o deshabilitará trackers públicos para todos los usuarios',
  'EX_PUB_TRACKERS_ALLOW'                             => 'ejemplo para permitir trackers públicos:',
  'EX_PUB_TRACKERS_DISALLOW'                          => 'ejemplo para no permitir trackers públicos:',
  'BACKUP_APPLICATIONS'                               => 'Respaldar Aplicaciones',
  'PARTIAL_CONFIG_ONLY_BACKUP'                        => 'Respaldo Parcial <span class="badge badge-pills outline-badge-secondary badge-table-menu" style="padding:2px 6px;line-height:0.7rem;font-size:0.5rem;">solo config</span>',
  'PARTIAL_CONFIG_ONLY_BACKUP_CONTENT'                => 'Este comando respaldará la configuración de la aplicación designada para el usuario asignado',
  'FULL_CONFIG_AND_APP_BACKUP'                        => 'Respaldo Completo <span class="badge badge-pills outline-badge-primary badge-table-menu" style="padding:2px 6px;line-height:0.7rem;font-size:0.5rem;">config &amp; app</span>',
  'FULL_CONFIG_AND_APP_BACKUP_CONTENT'                => 'Este comando respaldará la configuración de la aplicación designada y los archivos de la aplicación para el usuario asignado',
  'PARTIAL_RTORRENT_ALL_USERS_BACKUP'                 => 'Respaldo Parcial (solo rtorrent)',
  'PARTIAL_RTORRENT_ALL_USERS_BACKUP_PRIMARY_CONTENT' => '<p>En el caso de rtorrent como el software de configuración para respaldar, la bandera de nombre de usuario (<code>-u</code>) no es requerida.</p>',
  'PARTIAL_RTORRENT_ALL_USERS_BACKUP_CONTENT'         => 'Este comando respaldará todos los archivos .rtorrent.rc de usuarios existentes de rtorrent.<br>Los respaldos se almacenan en:<br><code>/home/[USERNAME]/.QuickBox/software/rtorrent/backup/.rtorrent.rc_YEAR-MONTH-DAY_HOUR:MINUTE</code>',
  'ROLLBACK_APPLICATIONS'                             => 'Reversión de Respaldo de Aplicación',
  'ROLLBACK_APPLICATIONS_CONTENT'                     => 'Reversión de respaldos de aplicaciones a un estado anterior',
  'RESTORE_APP_BACKUP_CONFIG'                         => 'Restaurar Respaldo <span class="badge badge-pills outline-badge-secondary badge-table-menu" style="padding:2px 6px;line-height:0.7rem;font-size:0.5rem;">solo config</span>',
  'RESTORE_APP_BACKUP_CONFIG_CONTENT'                 => 'Este comando restaurará la configuración de la aplicación previamente respaldada designada para el usuario asignado',
  'RESTORE_APP_DEFAULT_CONFIG'                        => 'Restaurar Predeterminado <span class="badge badge-pills outline-badge-secondary badge-table-menu" style="padding:2px 6px;line-height:0.7rem;font-size:0.5rem;">solo config</span>',
  'RESTORE_APP_DEFAULT_CONFIG_CONTENT'                => 'Este comando restaurará la configuración predeterminada designada (desde la instalación) de la aplicación para el usuario asignado',

  // #4.4.7.11 - news functions
  'NEWS_FUNCTIONS'                                    => 'Funciones de Noticias',
  'NEWS_FUNCTIONS_INFO_CONTENT'                       => '<p>Las funciones de <code>qb news</code> en QuickBox te proporcionan la información más reciente y actualizaciones sobre el proyecto QuickBox. Mantente informado sobre nuevas características, correcciones de errores y anuncios importantes.</p>',
  'NEWS'                                              => 'Noticias',
  'NEWS_CONTENT'                                      => 'Ver las últimas noticias de QuickBox',

  // #4.4.7.12 - support functions
  'SUPPORT_FUNCTIONS'                                 => 'Funciones de Soporte',
  'SUPPORT_FUNCTIONS_INFO_CONTENT'                    => '<p>La función de <code>qb support</code> en QuickBox ofrece un método seguro y confiable para otorgar acceso al personal de soporte a tu servidor cuando se necesita asistencia. Con un fuerte énfasis en la seguridad y protección del usuario, esta característica utiliza la cuenta <code>quickSupport</code>, asegurando que solo el personal de soporte autorizado pueda acceder a tu servidor.</p>',
  'ENABLE_SUPPORT'                                    => 'Habilitar Soporte',
  'ENABLE_SUPPORT_CONTENT'                            => 'Habilitar soporte. Típicamente asignado al miembro del equipo de personal que es responsable del soporte',
  'DISABLE_SUPPORT'                                   => 'Deshabilitar Soporte',
  'DISABLE_SUPPORT_CONTENT'                           => 'Deshabilitar soporte. De lo contrario, la cuenta de soporte se eliminará automáticamente después de 36 horas',

  // #4.4.7.13 - update functions
  'UPDATE_FUNCTIONS'                                  => 'Funciones de Actualización',
  'UPDATE_FUNCTIONS_INFO_CONTENT'                     => '<p>La función de <code>qb update</code> en QuickBox te ofrece una manera conveniente y flexible de gestionar las actualizaciones para tu instalación de QuickBox. Con esta característica, tienes control total sobre el proceso de actualización, permitiéndote verificar manualmente las actualizaciones y elegir cuándo aplicarlas.</p>',
  'UPDATE_CHECK'                                      => 'Verificar Actualizaciones',
  'UPDATE_CHECK_CONTENT'                              => 'Verificar actualizaciones para QuickBox',
  'UPDATE_QUICKBOX'                                   => 'Actualizar QuickBox',
  'UPDATE_QUICKBOX_CONTENT'                           => 'Actualizar la instalación de QuickBox a la última versión, si hay alguna disponible',

  // #4.4.7.14 - bugs & reporting
  'BUGS'                                              => 'Errores y Reportes',
  'BUGS_INFO_CONTENT'                                 => '<p>La visualización gráfica de la documentación de QuickBox recibirá actualizaciones regulares para asegurar que la información proporcionada permanezca fácilmente accesible y fácil de usar. Nuestro compromiso de mejorar tu experiencia con QuickBox nos impulsa a refinar y mejorar continuamente la documentación, manteniéndola actualizada con las últimas características y funcionalidades.<br/><br/>
Con cada actualización, nos esforzaremos por simplificar conceptos complejos, aclarar instrucciones e incorporar comentarios de usuarios para hacer la página de manual de qb aún más intuitiva y eficiente. Nuestro objetivo es empoderarte con una comprensión fluida de QuickBox y sus vastas capacidades, permitiéndote dominar el entorno CLI de qb y gestionar sin esfuerzo las tareas de tu servidor.<br/><br/>
Valoramos tu aporte y te animamos a compartir cualquier sugerencia o idea que puedas tener para mejorar aún más la página de manual de qb. Tus comentarios son fundamentales para dar forma a este recurso y asegurar que permanezca como una referencia valiosa para todos los usuarios de QuickBox. De hecho, ¡esta página existe porque fue solicitada! 🤪<br/><br/>
Reporta cualquier error reproducible o sugerencias a <strong><a href="https://nullrefer.ir/?https://github.com/QuickBox/pro-v3/issues" rel="noopener nofollow" target="_blank">QuickBox.IO Labs Issue & Feature Tracker</a></strong></p>',

  // #4.4.7.15 - disclaimer
  'DISCLAIMER'                                        => 'Descargo de Responsabilidad',
  'DISCLAIMER_TEXT'                                   => '<p>Este script está destinado para uso general y no se implica ninguna garantía de idoneidad para cualquier tarea dada. QuickBox.IO no asumirá ninguna responsabilidad por tu configuración o cualquier daño causado mientras usas/instalas/modificas este script o cualquiera de sus plugins. Ten en cuenta que QuickBox.IO ni su personal son responsables de mantener tu Software y/o Servidor actualizado; esta es una responsabilidad únicamente dejada al usuario del software QuickBox Pro.</p>',

  // #4.4.7.16 - license
  'LICENSE'                                           => 'Licencia',
  'LICENSE_SET'                                       => 'Licenciado bajo BSD 3-Clause',
  'LICENSE_TEXT'                                      => '<p>Copyright (c) 2018-2025, QuickBox.IO. Todos los derechos reservados.</p>
<p>La redistribución y uso en formas fuente y binarias, con o sin modificación, están permitidas siempre que se cumplan las siguientes condiciones:</p>
<ul style="font-size:0.75rem"><li>Las redistribuciones del código fuente deben retener el aviso de copyright anterior, esta lista de condiciones y el siguiente descargo de responsabilidad.</li>
<li>Las redistribuciones en forma binaria deben reproducir el aviso de copyright anterior, esta lista de condiciones y el siguiente descargo de responsabilidad en la documentación y/o otros materiales proporcionados con la distribución.</li>
<li>Ni el nombre del titular de los derechos de autor ni los nombres de sus contribuyentes pueden ser utilizados para respaldar o promover productos derivados de este software sin permiso previo específico por escrito.</li></ul>
<p>ESTE SOFTWARE ES PROPORCIONADO POR LOS TITULARES DE LOS DERECHOS DE AUTOR Y CONTRIBUYENTES \'TAL COMO ESTÁ\' Y CUALQUIER GARANTÍA EXPRESA O IMPLÍCITA, INCLUYENDO, PERO NO LIMITADO A, LAS GARANTÍAS IMPLÍCITAS DE COMERCIABILIDAD Y APTITUD PARA UN PROPÓSITO PARTICULAR SON RECHAZADAS. EN NINGÚN CASO EL TITULAR DE LOS DERECHOS DE AUTOR O CONTRIBUYENTES SERÁ RESPONSABLE DE CUALQUIER DAÑO DIRECTO, INDIRECTO, INCIDENTAL, ESPECIAL, EJEMPLAR O CONSECUENTE (INCLUYENDO, PERO NO LIMITADO A, ADQUISICIÓN DE BIENES O SERVICIOS SUSTITUTOS; PÉRDIDA DE USO, DATOS O BENEFICIOS; O INTERRUPCIÓN DEL NEGOCIO) SIN EMBARGO CAUSADO Y EN CUALQUIER TEORÍA DE RESPONSABILIDAD, YA SEA EN CONTRATO, RESPONSABILIDAD ESTRICTA O AGRAVIO (INCLUYENDO NEGLIGENCIA O DE OTRO MODO) QUE SURJA DE CUALQUIER MANERA DEL USO DE ESTE SOFTWARE, INCLUSO SI SE ADVIERTE DE LA POSIBILIDAD DE TALES DAÑOS.</p>',

  // #4.4.7.17 - misc
  'EXAMPLE'                                           => 'ejemplo:',
  'EXAMPLES'                                          => 'ejemplos:',
  'LOG_MAINTENANCE'                                   => 'Mantenimiento de Registros'
];
