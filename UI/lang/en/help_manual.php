<?php
return [
  // #4.4.7 - HELP MANUAL
  'QB_HELP'                                           => 'Help Manual',

  // #4.4.7.1 - description
  'DESCRIPTION_CONTENT'                               => '<p>Welcome to the comprehensive graphical display of the <code>qb</code> manpage, designed to offer you a translated, simplified and efficient approach to accessing various information about QuickBox. This user-friendly interface aims to provide in-depth insights into the workings of QuickBox, a powerful and versatile tool for managing your server effortlessly.</p><p>Inside this graphical display, you will find a detailed list of available applications ready for seamless installation, empowering you to customize your server setup according to your specific needs. Moreover, this resource presents a wealth of other essential commands for optimal utilization within the <code>qb</code> CLI environment, enabling you to navigate through your server tasks efficiently and effortlessly.</p><p>Whether you are new to QuickBox or a seasoned user, this graphical display of the <code>qb</code> manpage serves as your ultimate reference to harnessing the full potential of QuickBox and unleashing the true power of your server management. Explore the diverse features, streamline your server operations, and maximize your productivity with the help of this intuitive and informative guide. Let\'s dive in and make your QuickBox experience even more rewarding!</p>',
  'API_INFO_DIRECT'                                   => '<p style="font-weight:600;">For more information and reference on the embedded QuickBox API, <a href="/api-control.php" rel="noopenner nofollow" class="link" style="color:var(--qb-color-37);">see this page</a>.</p>',

  // #4.4.7.2 - options
  'OPTIONS_HEADER'                                    => 'Options',
  'OPTIONS_CONTENT_HELP'                              => 'Displays this help manual in CLI manpage format',
  'OPTIONS_CONTENT_VERBOSE'                           => 'Enables verbose mode for debugging',

  // #4.4.7.3 - software
  'SOFTWARE_HEADER'                                   => 'Software',
  'SOFTWARE_INFO_CONTENT'                             => '<p>The following is a list of all available applications for install provided through the QuickBox build.<br/>Software names are presented as seen by <code>qb [install|reinstall|update|remove|help] [software_name]</code></p>',
  'ADMIN_INSTALLED_SOFTWARE_HEADER'                   => 'Admin Installed Software',
  'ADMIN_INSTALLED_SOFTWARE_INFO_CONTENT'             => '<p>The following applications are required to be installed by the System Administrator.<br/>See availability column below for additional details.</p>',
  'MULTI_USER_SOFTWARE_HEADER'                        => 'Multi User Software',
  'MULTI_USER_SOFTWARE_INFO_CONTENT'                  => '<p>The following applications can be installed by multiple users without needing admin assistance.<br/>All application availability is determined by the System Administrator and granted to additional users within <a href="/usergroups.php" rel="noopener nofollow" class="link">created groups</a>.</p>',
  'SINGLE_USER_SOFTWARE_HEADER'                       => 'Single User Software',
  'SINGLE_USER_SOFTWARE_INFO_CONTENT'                 => '<p>The following applications can be installed by only one assigned user at a time, without needing admin assistance.<br/>All application availability is determined by the System Administrator and granted to additional users within <a href="/usergroups.php" rel="noopener nofollow" class="link">created groups</a>.</p>',
  'SOFTWARE_MANAGEMENT'                               => 'Software Management',
  'SOFTWARE_MANAGEMENT_CONTENT'                       => 'Parameters for installing, reinstalling, updating, or removing designated software with additional options (if present/desired) to an assigned user',
  'SOFTWARE_MANAGEMENT_WARNING_CONTENT'               => '<p>Keep in mind that various applications have various options/requirements. The majority require the use of the username flag (<code>-u</code>), whereas applications such as rtorrent will not. To check all available options for a specific software, utilize <code class="language-bash">qb help [software_name]</code>. Application naming within QuickBox for the software naming scheme can be viewed in the <a href="#software" class="link">software list chart</a> above.</p>',
  'SEE_ALSO_HEADER'                                   => 'See Also',
  'SEE_ALSO_CONTENT'                                  => 'Show helpful command usage for designated software',

  // #4.4.7.4 - software options table
  'SOFTWARE_NAME'                                     => 'Software Name',
  'SOFTWARE_TITLE'                                    => 'Software Title',
  'USABILITY'                                         => 'Usability',
  'CAN_ROLLBACK'                                      => 'Rollback Option',
  'INFO'                                              => 'Info',
  'ADMIN_BADGE'                                       => '<span class="badge badge-pills badge-table-menu" style="padding:2px 6px;line-height:0.7rem;background-color:var(--qb-color-6-rgba);color:#fff;font-size:0.5rem;">admin only</span>',
  'GLOBAL_BADGE'                                      => '<span class="badge badge-pills badge-table-menu" style="padding:2px 6px;line-height:0.7rem;background-color:var(--qb-color-5-rgba);color:#fff;font-size:0.5rem;">global</span>',
  'MULTI_USER_BADGE'                                  => '<span class="badge badge-pills badge-table-menu" style="padding:2px 6px;line-height:0.7rem;background-color:var(--qb-color-4-rgba);color:#fff;font-size:0.5rem;">multi user</span>',
  'SINGLE_USER_BADGE'                                 => '<span class="badge badge-pills badge-table-menu" style="padding:2px 6px;line-height:0.7rem;background-color:var(--qb-color-3-rgba);color:#fff;font-size:0.5rem;">single user</span>',
  'GLOBAL_INFO'                                       => 'requires admin installation and installs for all users on the system.',
  'MULTI_USER_INFO'                                   => 'requires admin installation and can be installed for any assigned user. multiple users are supported.',
  'SINGLE_USER_INFO'                                  => 'single user, admin only. requires admin installation and is installed and operated by admin user.',

  // #4.4.7.5 - examples header
  'EXAMPLES_HEADER'                                   => 'Examples',

  // #4.4.7.6 - user management
  'USER_MANAGEMENT_INFO_CONTENT'                      => '<p>The <code>qb user</code> management functions in QuickBox offer a versatile and powerful set of tools to efficiently manage users on your server. With a focus on ease of use and robust functionality, these functions enable you to streamline user management, enhance security, and ensure a smooth server operation.</p>',
  'CREATE_USER_CONTENT'                               => 'Creates a new QuickBox user account',
  'DELETE_USER_CONTENT'                               => 'Deletes QuickBox user account',
  'CHANGE_USER_PASSWORD'                              => 'Change User Password',
  'CHANGE_USER_PASSWORD_CONTENT'                      => 'Changes password for assigned user account',
  'BAN_USER_CONTENT'                                  => 'Bans assigned user account, preventing login and stopping installed services and their functions.',
  'BAN_USER_PRIMARY_CONTENT'                          => '<p><em>This does not <strong>delete</strong> user data</em>, only disables running services and blocks access.</p>',
  'UNBAN_USER_CONTENT'                                => 'Unbans assigned user account, allowing login and starting installed services and their functions',
  'PROMOTE_USER_TO_ADMIN'                             => 'Promote User to Admin',
  'PROMOTE_USER_TO_ADMIN_CONTENT'                     => 'Promotes assigned user to admin level',
  'DEMOTE_USER_FROM_ADMIN'                            => 'Demote User from Admin',
  'DEMOTE_USER_FROM_ADMIN_CONTENT'                    => 'Demotes assigned user to standard user level',
  'SET_USER_QUOTA'                                    => 'Set User Quota',
  'SHOW_USER_QUOTA'                                   => 'Show User Quota',
  'SET_USER_SHELL'                                    => 'Set User Shell',
  'SET_USER_SHELL_CONTENT'                            => 'Sets the shell environment for assigned user',
  'SET_USER_SHELL_INFO_CONTENT'                       => '<p><strong><code>sudo</code></strong><br>complete admin privileges to the server environment (great power... etc)<br><strong><code>full</code></strong><br>full access to the server environment, with the exception of higher privileged areas; ie: no sudo and cannot access root directories.<br><strong><code>limited</code></strong><br>the limited shell environment. very little access to commands and jailed to their own user home directory.</p><hr/><p>Shell environments are set by the System Administrator and can be viewed on the users edit page located within the <a href="/useradmin.php" rel="noopener nofollow" class="link">User Admin page</a>.<br/>If you would like to add a new shell environment, you can do so by editing the <code>/etc/shells</code> file and adding the path to the shell environment you would like to add.</p>',
  'SET_USER_SHELL_DANGER_CONTENT'                     => '<p><strong>Caution:</strong> Please be aware that changing the shell environment to anything other than <code>/bash</code> may lead to unintended behavior when using <code>qb</code> (QuickBox), as it has been specifically designed and optimized for the <code>/bash</code> environment. In short, <code>qb</code> relies on specific features and functionalities provided by the Bash shell.<br><br>To avoid any potential issues, it is advisable to stick with the <code>/bash</code> environment when using <code>qb</code>. If you still wish to use a different shell, consult the documentation for that shell to review any additional changes to paths, configurations, or other settings that may need to be updated to ensure compatibility with <code>qb</code>.</p>',
  'USER_RCLONE_COMPANION_COMMANDS'                    => 'Rclone Companion Commands',

  // #4.4.7.7 - clean functions
  'CLEAN_FUNCTIONS'                                   => 'Clean Functions',
  'CLEAN_FUNCTIONS_INFO_CONTENT'                      => '<p>The <code>qb clean</code> functions in QuickBox offer a convenient and efficient way to maintain your server\'s cleanliness and optimize its performance. Designed with simplicity and effectiveness in mind, these functions enable you to free up valuable memory, remove unnecessary clutter, and ensure a smooth and streamlined server operation.</p>',
  'CLEAN_MEMORY'                                      => 'Clean Memory',
  'CLEAN_MEMORY_CONTENT'                              => 'Cleans QuickBox memory caches',
  'CLEAN_DASHBOARD_LOGS'                              => 'Clean Dashboard Logs',
  'CLEAN_DASHBOARD_LOGS_CONTENT'                      => 'Cleans QuickBox dashboard logs for the designated user',
  'CLEAN_QB_DASHBOARD_LOGS'                           => 'Clean QB Dashboard log files',
  'CLEAN_QB_DASHBOARD_LOGS_CONTENT'                   => 'This command is designed to clear the current UI Actions log posted from syslog and reset the UI Nginx error log to its initial state',
  'CLEAN_SYSTEM_LOGS'                                 => 'Remove old system log files',
  'CLEAN_SYSTEM_LOGS_CONTENT'                         => 'This command is designed to delete logs and compressed archives in the <code>/var/log</code> directory that have exceeded the assigned retention period. The retention period is set to 7 days by default (if no optional value is entered).',
  'CLEAN_RCLONE_UPLOAD_LOGS'                          => 'Clean Rclone Upload Logs',
  'CLEAN_RCLONE_UPLOAD_LOGS_CONTENT'                  => 'Cleans QuickBox rclone upload logs for the designated user',
  'CLEAN_LOCKS'                                       => 'Clean Locks',
  'CLEAN_LOCKS_CONTENT'                               => 'Cleans QuickBox software and apt-dpkg locks that may prevent QuickBox from installing new software',

  // #4.4.7.8 - fix functions
  'FIX_FUNCTIONS'                                     => 'Fix Functions',
  'FIX_FUNCTIONS_INFO_CONTENT'                        => '<p>The <code>qb fix</code> functions in QuickBox provide a powerful and user-friendly toolkit to address common issues and perform system repairs effortlessly. With a focus on simplicity and effectiveness, these functions enable you to troubleshoot and resolve various problems that may arise on your server, ensuring smooth and uninterrupted operations.</p>',
  'FIX_HOME'                                          => 'Fix Home',
  'FIX_HOME_CONTENT'                                  => 'Fix designated users home directory permissions',
  'FIX_PHP'                                           => 'Fix PHP',
  'FIX_PHP_CONTENT'                                   => 'Fix PHP configuration and install missing extensions',
  'FIX_PYTHON'                                        => 'Fix Python',
  'FIX_PYTHON_CONTENT'                                => 'Fix Python configuration and install missing extensions. Additionally stages python3.9 if not currently available on the system for default use on application builds requiring python',
  'FIX_VERSION'                                       => 'Fix Version',

  // #4.4.7.9 - generate functions
  'GENERATE_FUNCTIONS'                                => 'Generate Functions',
  'GENERATE_FUNCTIONS_INFO_CONTENT'                   => '<p>The <code>qb generate</code> functions in QuickBox offer a convenient and efficient way to create essential elements that enhance server management and monitoring. Presently, the qb generate command supports the qb generate logs function, allowing users to effortlessly generate a preview of the servers stats, api activation, and mount information.<br/>As the qb generate functions evolve, they will likely offer an expanding array of features to enhance server management further.</p>',
  'GENERATE_SYSTEM_LOGS'                              => 'Generate System Logs',
  'GENERATE_SYSTEM_LOGS_CONTENT'                      => 'Generates system logs for the current QuickBox installation',
  'GENERATE_SYSTEM_LOGS_SUCCESS_CONTENT'              => '<p>You can access and download this summary log file in three ways:<br><ol><li><strong>Generate / Download:</strong> Go to \'System > <a href="/troubleshooting.php" class="link">Troubleshooting</a> > System Log\' within the user interface. Here you can generate and/or download the system log summary produced by the generate log command.</li><li><strong>View Logs:</strong> Go to \'System > <a href="/logs.php" class="link">System Logs</a>\'. Here is where you can find additional logs and info gathered by the generate log command.</li><li><strong>Server Directory:</strong> Find it on the server at: \'/srv/quickbox/logs/system_log\'.</li></ol></p>',
  'GENERATE_SYSTEM_LOGS_WARNING_CONTENT'              => '<p><strong>Warning:</strong> This command will generate a comprehensive system log that may contain sensitive information. Please ensure this log is handled securely and not shared publicly.</p>',

  // #4.4.7.10 - manage functions
  'MANAGE_FUNCTIONS'                                  => 'Manage Functions',
  'MANAGE_FUNCTIONS_INFO_CONTENT'                     => '<p>The <code>qb manage</code> functions in QuickBox provide a powerful and comprehensive set of tools to efficiently manage various aspects of your server. Designed with user convenience in mind, these functions empower you to effortlessly control critical elements of your QuickBox-powered environment.<br/>Whether it\'s swapping language settings, checking the status of your main API activation, managing data distribution, or ensuring data integrity through backups and rollbacks, the qb manage functions offer a comprehensive solution for server administrators and enthusiasts alike.</p>',
  'MANAGE_API_KEY'                                    => 'Manage API Key',
  'MANAGE_API_KEY_CONTENT'                            => 'Manage QuickBox API keys and list additional information and options',
  'ADD_API_KEY'                                       => 'Add API Key',
  'ADD_API_KEY_CONTENT'                               => 'Add/Activate API key',
  'REMOVE_API_KEY'                                    => 'Remove API Key',
  'REMOVE_API_KEY_CONTENT'                            => 'Remove/Deactivate API key',
  'MANAGE_DATABASE'                                   => 'Manage Database',
  'MANAGE_DATABASE_CONTENT'                           => 'Manage which database is used for QuickBox',
  'MANAGE_DATABASE_CONNECTION_INFO_CONTENT'           => 'Please note that when specifying a username and password (if the options are used), they do not have to match your current main account\'s credentials. These credentials are intended for local system use, particularly for database connections and various system functions. Therefore, they can be unique and independent of your main account\'s username and password.',
  'MANAGE_DATABASE_INFO_CONTENT'                      => 'QuickBox primarily utilizes SQLite3 as its default database. However, you have the option to seamlessly switch between SQLite3 and MySQL using this command. If you opt for MySQL, ensure you have a MySQL server properly installed and configured on your system. Additionally, you\'ll need a MySQL user account with adequate permissions for database creation and management. Executing this command facilitates these necessary configurations, including the installation of MySQL server and client if they are not already installed on your system. During the process, you will be prompted to install MySQL server and client if they are not detected. Additionally, the command handles the configuration setup, ensuring seamless integration with QuickBox. Please note that all parameters except <code>-o [mysql|sqlite]</code> are optional and will default to predefined values within the script.<br><br>The default values are as follows:<br><code>user=admin, pass=%random%, port=3306, host=localhost, name=qbpro</code><br><br>MySQL details can be found at <code>/root/.my.cnf</code>.<br><br>To convert back to SQLite3, simply run the command again with the <code>-o sqlite</code> flag.',
  'MANAGE_DATABASE_BACKUP'                            => 'Manage Database Backup',
  'MANAGE_DATABASE_BACKUP_CONTENT'                    => 'Backup the QuickBox database',
  'MANAGE_DATABASE_BACKUP_INFO_CONTENT'               => 'The QuickBox backup process runs automatically every 24 hours at 3:30 AM (server time) as part of the maintenance schedule. This task is listed in the <code>/etc/cron.d/quickbox</code> schedule as:<br><br><code>30 3 * * * root /usr/local/bin/qb manage db -o maintenance --cron</code><br><br>However, you can manually trigger a backup (without running the maintenance routine) using the command above.<br><br><strong>About the Backup Process</strong><br><br>Each backup creates a snapshot of the QuickBox database, providing a restore point to safeguard data integrity in case of data loss or corruption. Backup files are saved in a specified directory, with the system retaining the 5 most recent backups to ensure you always have multiple restore points available for recovery.<br><br><strong>Backup File Locations</strong><br><br>Backup files are stored in the following directories:<br><br><strong>MySQL</strong>: <code>/opt/quickbox/backup/system/[DATE_TIME]/db/qbpro.sql</code><br><strong>SQLite</strong>: <code>/opt/quickbox/backup/system/[DATE_TIME]/db/qbpro.db</code>',
  'MANAGE_DATABASE_MAINTENANCE'                       => 'Manage Database Maintenance',
  'MANAGE_DATABASE_MAINTENANCE_CONTENT'               => 'Initiate the QuickBox database maintenance process',
  'MANAGE_DATABASE_MAINTENANCE_INFO_CONTENT'          => 'The QuickBox maintenance process is designed to keep the database running smoothly and efficiently. This process includes:<br><br><ol><li>Cleaning up unneeded data.</li><li>Optimizing database tables.</li><li>Running other maintenance tasks to boost efficiency and prevent data issues, such as checking and repairing tables.</li><li>Triggering a Message of the Day (MotD) notification to alert the system administrator via CLI if unrecoverable errors occur.</li></ol><p><strong>When Maintenance Runs</strong><br><br>The maintenance process runs automatically every 24 hours at 3:30 AM server time. This task is listed in the <code>/etc/cron.d/quickbox</code> schedule as:<br><br><code>30 3 * * * root /usr/local/bin/qb manage db -o maintenance --cron</code><br><br>However, you can manually trigger maintenance using the command above.<br><br><strong>Why Maintenance is Important</strong><br><br>Regular maintenance ensures that your QuickBox database stays healthy, keeps system performance high, and protects your data.</p>',
  'MANAGE_DATABASE_RESTORE'                           => 'Manage Database Restore',
  'MANAGE_DATABASE_RESTORE_CONTENT'                   => 'Restore the QuickBox database',
  'MANAGE_DATABASE_RESTORE_INFO_CONTENT'              => 'This command initiates the database restore process, allowing you to select a specific backup file to restore. The restore process is designed to recover data in case of data loss or corruption, providing a reliable and efficient way to restore your QuickBox database to a previous state.<br><br><strong>How the Restore Process Works</strong><br><br>When you run the restore command, you will be presented with a selection menu listing all available database backup files. You can then choose the backup file you want to restore, and the system will automatically restore the selected backup file, returning your QuickBox database to the state it was in when the backup was created.',
  'MANAGE_DASHBOARD_ACCESS_URL'                       => 'Manage Dashboard access url',
  'MANAGE_DASHBOARD_ACCESS_URL_CONTENT'               => 'This command sets the server web root for dashboard access to either the expressed Domain or IP Address',
  'SET_SERVER_LANG'                                   => 'Set Server Language',
  'SET_SERVER_LANG_CONTENT'                           => 'This command will set the requested language as the default language for the server',
  'MANAGE_PUBLIC_TRACKERS'                            => 'Manage Public Trackers',
  'MANAGE_PUBLIC_TRACKERS_CONTENT'                    => 'This command will enable or disable public trackers for all users',
  'EX_PUB_TRACKERS_ALLOW'                             => 'example to allow public trackers:',
  'EX_PUB_TRACKERS_DISALLOW'                          => 'example to disallow public trackers:',
  'BACKUP_APPLICATIONS'                               => 'Backup Applications',
  'PARTIAL_CONFIG_ONLY_BACKUP'                        => 'Partial Backup <span class="badge badge-pills outline-badge-secondary badge-table-menu" style="padding:2px 6px;line-height:0.7rem;font-size:0.5rem;">config only</span>',
  'PARTIAL_CONFIG_ONLY_BACKUP_CONTENT'                => 'This command will backup the designated application config for the assigned user',
  'FULL_CONFIG_AND_APP_BACKUP'                        => 'Full Backup <span class="badge badge-pills outline-badge-primary badge-table-menu" style="padding:2px 6px;line-height:0.7rem;font-size:0.5rem;">config &amp; app</span>',
  'FULL_CONFIG_AND_APP_BACKUP_CONTENT'                => 'This command will backup the designated application config and application files for the assigned user',
  'PARTIAL_RTORRENT_ALL_USERS_BACKUP'                 => 'Partial Backup (rtorrent only)',
  'PARTIAL_RTORRENT_ALL_USERS_BACKUP_PRIMARY_CONTENT' => '<p>In the case of rtorrent as the software config to backup, the username flag (<code>-u</code>) is not required.</p>',
  'PARTIAL_RTORRENT_ALL_USERS_BACKUP_CONTENT'         => 'This command will backup all existing rtorrent users .rtorrent.rc files.<br>Backups are stored at:<br><code>/home/[USERNAME]/.QuickBox/software/rtorrent/backup/.rtorrent.rc_YEAR-MONTH-DAY_HOUR:MINUTE</code>',
  'ROLLBACK_APPLICATIONS'                             => 'Rollback Application Backup',
  'ROLLBACK_APPLICATIONS_CONTENT'                     => 'Rollback application backups to a previous state',
  'RESTORE_APP_BACKUP_CONFIG'                         => 'Restore Backup <span class="badge badge-pills outline-badge-secondary badge-table-menu" style="padding:2px 6px;line-height:0.7rem;font-size:0.5rem;">config only</span>',
  'RESTORE_APP_BACKUP_CONFIG_CONTENT'                 => 'This command will restore the designated previously backed up application config for the assigned user',
  'RESTORE_APP_DEFAULT_CONFIG'                        => 'Restore Default <span class="badge badge-pills outline-badge-secondary badge-table-menu" style="padding:2px 6px;line-height:0.7rem;font-size:0.5rem;">config only</span>',
  'RESTORE_APP_DEFAULT_CONFIG_CONTENT'                => 'This command will restore the designated default (from install) application config for the assigned user',

  // #4.4.7.11 - news functions
  'NEWS_FUNCTIONS'                                    => 'News Functions',
  'NEWS_FUNCTIONS_INFO_CONTENT'                       => '<p>The <code>qb news</code> functions in QuickBox provide you with the latest information and updates about the QuickBox project. Stay informed about new features, bug fixes, and important announcements.</p>',
  'NEWS'                                              => 'News',
  'NEWS_CONTENT'                                      => 'View latest QuickBox news',

  // #4.4.7.12 - support functions
  'SUPPORT_FUNCTIONS'                                 => 'Support Functions',
  'SUPPORT_FUNCTIONS_INFO_CONTENT'                    => '<p>The <code>qb support</code> function in QuickBox offers a secure and reliable method to grant support staff access to your server when assistance is needed. With a strong emphasis on security and user protection, this feature utilizes the <code>quickSupport</code> account, ensuring that only authorized support personnel can access your server.</p>',
  'ENABLE_SUPPORT'                                    => 'Enable Support',
  'ENABLE_SUPPORT_CONTENT'                            => 'Enable support. Typically assigned to the staff team member who is responsible for the support',
  'DISABLE_SUPPORT'                                   => 'Disable Support',
  'DISABLE_SUPPORT_CONTENT'                           => 'Disable support. Otherwise, the support account will automatically delete itself after 36 hours',

  // #4.4.7.13 - update functions
  'UPDATE_FUNCTIONS'                                  => 'Update Functions',
  'UPDATE_FUNCTIONS_INFO_CONTENT'                     => '<p>The <code>qb update</code> function in QuickBox offers you a convenient and flexible way to manage updates for your QuickBox installation. With this feature, you have full control over the update process, allowing you to manually check for updates and choose when to apply them.</p>',
  'UPDATE_CHECK'                                      => 'Update Check',
  'UPDATE_CHECK_CONTENT'                              => 'Check for updates to QuickBox',
  'UPDATE_QUICKBOX'                                   => 'Update QuickBox',
  'UPDATE_QUICKBOX_CONTENT'                           => 'Update QuickBox installation to latest release, if any available',

  // #4.4.7.14 - bugs & reporting
  'BUGS'                                              => 'Bugs & Reporting',
  'BUGS_INFO_CONTENT'                                 => '<p>The graphical display of QuickBox\'s documentation, will receive regular updates to ensure that the information provided remains easily accessible and user-friendly. Our commitment to enhancing your experience with QuickBox drives us to continually refine and improve the documentation, keeping it up-to-date with the latest features and functionalities.<br/><br/>
With each update, we will strive to simplify complex concepts, clarify instructions, and incorporate user feedback to make the qb manpage even more intuitive and efficient. Our goal is to empower you with a seamless understanding of QuickBox and its vast capabilities, enabling you to master the qb CLI environment and effortlessly manage your server tasks.<br/><br/>
We value your input and encourage you to share any suggestions or ideas you may have to further enhance the qb manpage. Your feedback is instrumental in shaping this resource and ensuring it remains a valuable reference for all QuickBox users. In fact, this page exist because it was requested! 🤪<br/><br/>
Report any reproducable bugs, or suggestions to <strong><a href="https://nullrefer.ir/?https://github.com/QuickBox/pro-v3/issues" rel="noopener nofollow" target="_blank">QuickBox.IO Labs Issue & Feature Tracker</a></strong></p>',

  // #4.4.7.15 - disclaimer
  'DISCLAIMER'                                        => 'Disclaimer',
  'DISCLAIMER_TEXT'                                   => '<p>This script is intended for general use and no warranty is implied for suitability to any given task. QuickBox.IO will hold no responsibility for your setup or any damage done while using/installing/modifying this script or any of its plugins. Please keep in mind QuickBox.IO nor it\'s staff are responsible for keeping your Software and/or Server up-to-date; this is a responsibility solely left to the user of the QuickBox Pro software.</p>',

  // #4.4.7.16 - license
  'LICENSE'                                           => 'License',
  'LICENSE_SET'                                       => 'Licensed under BSD 3-Clause',
  'LICENSE_TEXT'                                      => '<p>Copyright (c) 2018-2025, QuickBox.IO. All rights reserved.</p>
<p>Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:</p>
<ul style="font-size:0.75rem"><li>Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.</li>
<li>Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.</li>
<li>Neither the name of the copyright holder nor the names of its contributors may be used to endorse or promote products derived from this software without specific prior written permission.</li></ul>
<p>THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS \'AS IS\' AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.</p>',

  // #4.4.7.17 - misc
  'EXAMPLE'                                           => 'example:',
  'EXAMPLES'                                          => 'examples:',
  'LOG_MAINTENANCE'                                   => 'Log Maintenance'
];
