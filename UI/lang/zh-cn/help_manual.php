<?php
return [
  // #4.4.7 - HELP MANUAL
  'QB_HELP'                                           => '帮助手册',

  // #4.4.7.1 - description
  'DESCRIPTION_CONTENT'                               => '<p>欢迎使用 <code>qb</code> 手册页的综合图形显示，旨在为您提供翻译、简化和高效的方法来访问有关 QuickBox 的各种信息。这个用户友好的界面旨在深入了解 QuickBox 的工作原理，这是一个强大而多功能的工具，可以轻松管理您的服务器。</p><p>在这个图形显示中，您将找到准备无缝安装的可用应用程序的详细列表，使您能够根据特定需求自定义服务器设置。此外，此资源提供了丰富的其他基本命令，以便在 <code>qb</code> CLI 环境中最佳利用，使您能够高效且轻松地导航服务器任务。</p><p>无论您是 QuickBox 的新手还是经验丰富的用户，<code>qb</code> 手册页的此图形显示都作为您利用 QuickBox 全部潜力并释放服务器管理真正力量的终极参考。探索多样化功能，简化服务器操作，并借助这个直观且信息丰富的指南最大化您的生产力。让我们深入并让您的 QuickBox 体验更加有益！</p>',
  'API_INFO_DIRECT'                                   => '<p style="font-weight:600;">有关嵌入式 QuickBox API 的更多信息和参考，<a href="/api-control.php" rel="noopenner nofollow" class="link" style="color:var(--qb-color-37);">请参阅此页面</a>。</p>',

  // #4.4.7.2 - options
  'OPTIONS_HEADER'                                    => '选项',
  'OPTIONS_CONTENT_HELP'                              => '以 CLI 手册页格式显示此帮助手册',
  'OPTIONS_CONTENT_VERBOSE'                           => '启用详细模式进行调试',

  // #4.4.7.3 - software
  'SOFTWARE_HEADER'                                   => '软件',
  'SOFTWARE_INFO_CONTENT'                             => '<p>以下是 QuickBox 构建提供的所有可用安装应用程序的列表。<br/>软件名称按 <code>qb [install|reinstall|update|remove|help] [software_name]</code> 中看到的方式呈现</p>',
  'ADMIN_INSTALLED_SOFTWARE_HEADER'                   => '管理员安装的软件',
  'ADMIN_INSTALLED_SOFTWARE_INFO_CONTENT'             => '<p>以下应用程序需要由系统管理员安装。<br/>请参阅下面的可用性列以获取其他详细信息。</p>',
  'MULTI_USER_SOFTWARE_HEADER'                        => '多用户软件',
  'MULTI_USER_SOFTWARE_INFO_CONTENT'                  => '<p>以下应用程序可以由多个用户安装，无需管理员协助。<br/>所有应用程序可用性由系统管理员确定，并授予 <a href="/usergroups.php" rel="noopener nofollow" class="link">已创建组</a> 内的其他用户。</p>',
  'SINGLE_USER_SOFTWARE_HEADER'                       => '单用户软件',
  'SINGLE_USER_SOFTWARE_INFO_CONTENT'                 => '<p>以下应用程序一次只能由一个指定用户安装，无需管理员协助。<br/>所有应用程序可用性由系统管理员确定，并授予 <a href="/usergroups.php" rel="noopener nofollow" class="link">已创建组</a> 内的其他用户。</p>',
  'SOFTWARE_MANAGEMENT'                               => '软件管理',
  'SOFTWARE_MANAGEMENT_CONTENT'                       => '用于安装、重新安装、更新或移除指定软件到指定用户的参数，具有其他选项（如果存在/需要）',
  'SOFTWARE_MANAGEMENT_WARNING_CONTENT'               => '<p>请记住，各种应用程序有各种选项/要求。大多数需要使用用户名标志 (<code>-u</code>)，而 rtorrent 等应用程序则不需要。要检查特定软件的所有可用选项，请使用 <code class="language-bash">qb help [software_name]</code>。QuickBox 内软件命名方案的应用程序命名可以在上面的 <a href="#software" class="link">软件列表图表</a> 中查看。</p>',
  'SEE_ALSO_HEADER'                                   => '另请参阅',
  'SEE_ALSO_CONTENT'                                  => '显示指定软件的有用命令用法',

  // #4.4.7.4 - software options table
  'SOFTWARE_NAME'                                     => '软件名称',
  'SOFTWARE_TITLE'                                    => '软件标题',
  'USABILITY'                                         => '可用性',
  'CAN_ROLLBACK'                                      => '回滚选项',
  'INFO'                                              => '信息',
  'ADMIN_BADGE'                                       => '<span class="badge badge-pills badge-table-menu" style="padding:2px 6px;line-height:0.7rem;background-color:var(--qb-color-6-rgba);color:#fff;font-size:0.5rem;">仅限管理员</span>',
  'GLOBAL_BADGE'                                      => '<span class="badge badge-pills badge-table-menu" style="padding:2px 6px;line-height:0.7rem;background-color:var(--qb-color-5-rgba);color:#fff;font-size:0.5rem;">全局</span>',
  'MULTI_USER_BADGE'                                  => '<span class="badge badge-pills badge-table-menu" style="padding:2px 6px;line-height:0.7rem;background-color:var(--qb-color-4-rgba);color:#fff;font-size:0.5rem;">多用户</span>',
  'SINGLE_USER_BADGE'                                 => '<span class="badge badge-pills badge-table-menu" style="padding:2px 6px;line-height:0.7rem;background-color:var(--qb-color-3-rgba);color:#fff;font-size:0.5rem;">单用户</span>',
  'GLOBAL_INFO'                                       => '需要管理员安装并为系统上的所有用户安装。',
  'MULTI_USER_INFO'                                   => '需要管理员安装，可以为任何指定用户安装。支持多个用户。',
  'SINGLE_USER_INFO'                                  => '单用户，仅限管理员。需要管理员安装并由管理员用户安装和操作。',

  // #4.4.7.5 - examples header
  'EXAMPLES_HEADER'                                   => '示例',

  // #4.4.7.6 - user management
  'USER_MANAGEMENT_INFO_CONTENT'                      => '<p>QuickBox 中的 <code>qb user</code> 管理功能提供了一套多功能且强大的工具，可以高效地管理服务器上的用户。专注于易用性和强大功能，这些功能使您能够简化用户管理、增强安全性并确保服务器操作顺畅。</p>',
  'CREATE_USER_CONTENT'                               => '创建新的 QuickBox 用户账户',
  'DELETE_USER_CONTENT'                               => '删除 QuickBox 用户账户',
  'CHANGE_USER_PASSWORD'                              => '更改用户密码',
  'CHANGE_USER_PASSWORD_CONTENT'                      => '更改指定用户账户的密码',
  'BAN_USER_CONTENT'                                  => '禁止指定的用户账户，防止登录并停止已安装的服务及其功能。',
  'BAN_USER_PRIMARY_CONTENT'                          => '<p><em>这不会 <strong>删除</strong> 用户数据</em>，只会禁用运行的服务并阻止访问。</p>',
  'UNBAN_USER_CONTENT'                                => '解除指定用户账户的禁令，允许登录并启动已安装的服务及其功能',
  'PROMOTE_USER_TO_ADMIN'                             => '将用户提升为管理员',
  'PROMOTE_USER_TO_ADMIN_CONTENT'                     => '将指定用户提升到管理员级别',
  'DEMOTE_USER_FROM_ADMIN'                            => '将用户从管理员降级',
  'DEMOTE_USER_FROM_ADMIN_CONTENT'                    => '将指定用户降级到标准用户级别',
  'SET_USER_QUOTA'                                    => '设置用户配额',
  'SHOW_USER_QUOTA'                                   => '显示用户配额',
  'SET_USER_SHELL'                                    => '设置用户 Shell',
  'SET_USER_SHELL_CONTENT'                            => '为指定用户设置 shell 环境',
  'SET_USER_SHELL_INFO_CONTENT'                       => '<p><strong><code>sudo</code></strong><br>对服务器环境的完全管理员权限（巨大权力...等）<br><strong><code>full</code></strong><br>对服务器环境的完全访问，但更高权限区域除外；即：没有 sudo 且无法访问根目录。<br><strong><code>limited</code></strong><br>受限的 shell 环境。对命令的访问很少，并被限制在自己的用户主目录中。</p><hr/><p>Shell 环境由系统管理员设置，可以在位于 <a href="/useradmin.php" rel="noopener nofollow" class="link">用户管理页面</a> 内的用户编辑页面上查看。<br/>如果您想添加新的 shell 环境，可以通过编辑 <code>/etc/shells</code> 文件并添加您想要添加的 shell 环境的路径来实现。</p>',
  'SET_USER_SHELL_DANGER_CONTENT'                     => '<p><strong>注意：</strong> 请注意，将 shell 环境更改为 <code>/bash</code> 以外的任何内容在使用 <code>qb</code> (QuickBox) 时可能导致意外行为，因为它专门为 <code>/bash</code> 环境设计和优化。简而言之，<code>qb</code> 依赖于 Bash shell 提供的特定功能和功能。<br><br>为避免任何潜在问题，建议在使用 <code>qb</code> 时坚持使用 <code>/bash</code> 环境。如果您仍然希望使用不同的 shell，请查阅该 shell 的文档，以查看可能需要更新的路径、配置或其他设置的任何其他更改，以确保与 <code>qb</code> 的兼容性。</p>',
  'USER_RCLONE_COMPANION_COMMANDS'                    => 'Rclone 配套命令',

  // #4.4.7.7 - clean functions
  'CLEAN_FUNCTIONS'                                   => '清理功能',
  'CLEAN_FUNCTIONS_INFO_CONTENT'                      => '<p>QuickBox 中的 <code>qb clean</code> 功能提供了一种方便且高效的方式来维护服务器的清洁度并优化其性能。设计时考虑到简单性和有效性，这些功能使您能够释放宝贵的内存、移除不必要的混乱，并确保顺畅和精简的服务器操作。</p>',
  'CLEAN_MEMORY'                                      => '清理内存',
  'CLEAN_MEMORY_CONTENT'                              => '清理 QuickBox 内存缓存',
  'CLEAN_DASHBOARD_LOGS'                              => '清理仪表板日志',
  'CLEAN_DASHBOARD_LOGS_CONTENT'                      => '清理指定用户的 QuickBox 仪表板日志',
  'CLEAN_QB_DASHBOARD_LOGS'                           => '清理 QB 仪表板日志文件',
  'CLEAN_QB_DASHBOARD_LOGS_CONTENT'                   => '此命令旨在清除从 syslog 发布的当前 UI 操作日志，并将 UI Nginx 错误日志重置为其初始状态',
  'CLEAN_SYSTEM_LOGS'                                 => '移除旧的系统日志文件',
  'CLEAN_SYSTEM_LOGS_CONTENT'                         => '此命令旨在删除 <code>/var/log</code> 目录中超过指定保留期的日志和压缩存档。保留期默认设置为 7 天（如果未输入可选值）。',
  'CLEAN_RCLONE_UPLOAD_LOGS'                          => '清理 Rclone 上传日志',
  'CLEAN_RCLONE_UPLOAD_LOGS_CONTENT'                  => '清理指定用户的 QuickBox rclone 上传日志',
  'CLEAN_LOCKS'                                       => '清理锁',
  'CLEAN_LOCKS_CONTENT'                               => '清理可能阻止 QuickBox 安装新软件的 QuickBox 软件和 apt-dpkg 锁',

  // #4.4.7.8 - fix functions
  'FIX_FUNCTIONS'                                     => '修复功能',
  'FIX_FUNCTIONS_INFO_CONTENT'                        => '<p>QuickBox 中的 <code>qb fix</code> 功能提供了一个强大且用户友好的工具包，可以轻松地解决常见问题并执行系统修复。专注于简单性和有效性，这些功能使您能够排除故障并解决服务器上可能出现的各种问题，确保顺畅且不间断的操作。</p>',
  'FIX_HOME'                                          => '修复主目录',
  'FIX_HOME_CONTENT'                                  => '修复指定用户的主目录权限',
  'FIX_PHP'                                           => '修复 PHP',
  'FIX_PHP_CONTENT'                                   => '修复 PHP 配置并安装缺失的扩展',
  'FIX_PYTHON'                                        => '修复 Python',
  'FIX_PYTHON_CONTENT'                                => '修复 Python 配置并安装缺失的扩展。此外，如果系统上当前不可用，则为需要 python 的应用程序构建的默认使用准备 python3.9',
  'FIX_VERSION'                                       => '修复版本',

  // #4.4.7.9 - generate functions
  'GENERATE_FUNCTIONS'                                => '生成功能',
  'GENERATE_FUNCTIONS_INFO_CONTENT'                   => '<p>QuickBox 中的 <code>qb generate</code> 功能提供了一种方便且高效的方式来创建增强服务器管理和监控的基本元素。目前，qb generate 命令支持 qb generate logs 功能，允许用户轻松生成服务器统计、api 激活和挂载信息的预览。<br/>随着 qb generate 功能的发展，它们可能会提供不断扩展的功能阵列，以进一步增强服务器管理。</p>',
  'GENERATE_SYSTEM_LOGS'                              => '生成系统日志',
  'GENERATE_SYSTEM_LOGS_CONTENT'                      => '为当前 QuickBox 安装生成系统日志',
  'GENERATE_SYSTEM_LOGS_SUCCESS_CONTENT'              => '<p>您可以通过三种方式访问和下载此摘要日志文件：<br><ol><li><strong>生成 / 下载：</strong> 转到用户界面内的"系统 > <a href="/troubleshooting.php" class="link">故障排除</a> > 系统日志"。在这里，您可以生成和/或下载由 generate log 命令产生的系统日志摘要。</li><li><strong>查看日志：</strong> 转到"系统 > <a href="/logs.php" class="link">系统日志</a>"。这里是您可以找到由 generate log 命令收集的其他日志和信息的地方。</li><li><strong>服务器目录：</strong> 在服务器上找到它：\'/srv/quickbox/logs/system_log\'。</li></ol></p>',
  'GENERATE_SYSTEM_LOGS_WARNING_CONTENT'              => '<p><strong>警告：</strong> 此命令将生成可能包含敏感信息的综合系统日志。请确保此日志得到安全处理，不要公开共享。</p>',

  // #4.4.7.10 - manage functions
  'MANAGE_FUNCTIONS'                                  => '管理功能',
  'MANAGE_FUNCTIONS_INFO_CONTENT'                     => '<p>QuickBox 中的 <code>qb manage</code> 功能提供了一套强大且全面的工具，可以高效地管理服务器的各个方面。设计时考虑到用户便利性，这些功能使您能够轻松控制 QuickBox 驱动环境的关键元素。<br/>无论是交换语言设置、检查主 API 激活状态、管理数据分发，还是通过备份和回滚确保数据完整性，qb manage 功能为服务器管理员和爱好者提供了全面的解决方案。</p>',
  'MANAGE_API_KEY'                                    => '管理 API 密钥',
  'MANAGE_API_KEY_CONTENT'                            => '管理 QuickBox API 密钥并列出其他信息和选项',
  'ADD_API_KEY'                                       => '添加 API 密钥',
  'ADD_API_KEY_CONTENT'                               => '添加/激活 API 密钥',
  'REMOVE_API_KEY'                                    => '移除 API 密钥',
  'REMOVE_API_KEY_CONTENT'                            => '移除/停用 API 密钥',
  'MANAGE_DATABASE'                                   => '管理数据库',
  'MANAGE_DATABASE_CONTENT'                           => '管理 QuickBox 使用的数据库',
  'MANAGE_DATABASE_CONNECTION_INFO_CONTENT'           => '请注意，在指定用户名和密码时（如果使用选项），它们不必与您当前主账户的凭据匹配。这些凭据旨在供本地系统使用，特别是数据库连接和各种系统功能。因此，它们可以是唯一的，独立于您主账户的用户名和密码。',
  'MANAGE_DATABASE_INFO_CONTENT'                      => 'QuickBox 主要使用 SQLite3 作为其默认数据库。但是，您可以选择使用此命令在 SQLite3 和 MySQL 之间无缝切换。如果您选择 MySQL，请确保您的系统上正确安装和配置了 MySQL 服务器。此外，您需要一个具有足够权限的 MySQL 用户账户来创建和管理数据库。执行此命令有助于这些必要的配置，包括如果系统上尚未安装 MySQL 服务器和客户端，则安装它们。在此过程中，如果未检测到，系统将提示您安装 MySQL 服务器和客户端。此外，该命令处理配置设置，确保与 QuickBox 的无缝集成。请注意，除了 <code>-o [mysql|sqlite]</code> 之外的所有参数都是可选的，将在脚本中默认为预定义值。<br><br>默认值如下：<br><code>user=admin, pass=%random%, port=3306, host=localhost, name=qbpro</code><br><br>MySQL 详细信息可以在 <code>/root/.my.cnf</code> 中找到。<br><br>要转换回 SQLite3，只需使用 <code>-o sqlite</code> 标志再次运行命令。',
  'MANAGE_DATABASE_BACKUP'                            => '管理数据库备份',
  'MANAGE_DATABASE_BACKUP_CONTENT'                    => '备份 QuickBox 数据库',
  'MANAGE_DATABASE_BACKUP_INFO_CONTENT'               => 'QuickBox 备份过程作为维护计划的一部分，每 24 小时在凌晨 3:30（服务器时间）自动运行。此任务在 <code>/etc/cron.d/quickbox</code> 计划中列出为：<br><br><code>30 3 * * * root /usr/local/bin/qb manage db -o maintenance --cron</code><br><br>但是，您可以使用上述命令手动触发备份（不运行维护例程）。<br><br><strong>关于备份过程</strong><br><br>每次备份都会创建 QuickBox 数据库的快照，提供恢复点以在数据丢失或损坏时保护数据完整性。备份文件保存在指定目录中，系统保留 5 个最近的备份，确保您始终有多个恢复点可用于恢复。<br><br><strong>备份文件位置</strong><br><br>备份文件存储在以下目录中：<br><br><strong>MySQL</strong>：<code>/opt/quickbox/backup/system/[DATE_TIME]/db/qbpro.sql</code><br><strong>SQLite</strong>：<code>/opt/quickbox/backup/system/[DATE_TIME]/db/qbpro.db</code>',
  'MANAGE_DATABASE_MAINTENANCE'                       => '管理数据库维护',
  'MANAGE_DATABASE_MAINTENANCE_CONTENT'               => '启动 QuickBox 数据库维护过程',
  'MANAGE_DATABASE_MAINTENANCE_INFO_CONTENT'          => 'QuickBox 维护过程旨在保持数据库顺畅高效地运行。此过程包括：<br><br><ol><li>清理不需要的数据。</li><li>优化数据库表。</li><li>运行其他维护任务以提高效率并防止数据问题，如检查和修复表。</li><li>如果发生不可恢复的错误，触发每日消息 (MotD) 通知，通过 CLI 提醒系统管理员。</li></ol><p><strong>维护运行时间</strong><br><br>维护过程每 24 小时在服务器时间凌晨 3:30 自动运行。此任务在 <code>/etc/cron.d/quickbox</code> 计划中列出为：<br><br><code>30 3 * * * root /usr/local/bin/qb manage db -o maintenance --cron</code><br><br>但是，您可以使用上述命令手动触发维护。<br><br><strong>为什么维护很重要</strong><br><br>定期维护确保您的 QuickBox 数据库保持健康，保持系统性能高，并保护您的数据。</p>',
  'MANAGE_DATABASE_RESTORE'                           => '管理数据库恢复',
  'MANAGE_DATABASE_RESTORE_CONTENT'                   => '恢复 QuickBox 数据库',
  'MANAGE_DATABASE_RESTORE_INFO_CONTENT'              => '此命令启动数据库恢复过程，允许您选择要恢复的特定备份文件。恢复过程旨在在数据丢失或损坏时恢复数据，提供可靠且高效的方式来将您的 QuickBox 数据库恢复到以前的状态。<br><br><strong>恢复过程如何工作</strong><br><br>当您运行恢复命令时，您将看到一个选择菜单，列出所有可用的数据库备份文件。然后您可以选择要恢复的备份文件，系统将自动恢复选定的备份文件，将您的 QuickBox 数据库返回到创建备份时的状态。',
  'MANAGE_DASHBOARD_ACCESS_URL'                       => '管理仪表板访问 URL',
  'MANAGE_DASHBOARD_ACCESS_URL_CONTENT'               => '此命令将仪表板访问的服务器 Web 根目录设置为表达的域或 IP 地址',
  'SET_SERVER_LANG'                                   => '设置服务器语言',
  'SET_SERVER_LANG_CONTENT'                           => '此命令将请求的语言设置为服务器的默认语言',
  'MANAGE_PUBLIC_TRACKERS'                            => '管理公共追踪器',
  'MANAGE_PUBLIC_TRACKERS_CONTENT'                    => '此命令将为所有用户启用或禁用公共追踪器',
  'EX_PUB_TRACKERS_ALLOW'                             => '允许公共追踪器的示例：',
  'EX_PUB_TRACKERS_DISALLOW'                          => '不允许公共追踪器的示例：',
  'BACKUP_APPLICATIONS'                               => '备份应用程序',
  'PARTIAL_CONFIG_ONLY_BACKUP'                        => '部分备份 <span class="badge badge-pills outline-badge-secondary badge-table-menu" style="padding:2px 6px;line-height:0.7rem;font-size:0.5rem;">仅配置</span>',
  'PARTIAL_CONFIG_ONLY_BACKUP_CONTENT'                => '此命令将备份指定用户的指定应用程序配置',
  'FULL_CONFIG_AND_APP_BACKUP'                        => '完全备份 <span class="badge badge-pills outline-badge-primary badge-table-menu" style="padding:2px 6px;line-height:0.7rem;font-size:0.5rem;">配置和应用程序</span>',
  'FULL_CONFIG_AND_APP_BACKUP_CONTENT'                => '此命令将备份指定用户的指定应用程序配置和应用程序文件',
  'PARTIAL_RTORRENT_ALL_USERS_BACKUP'                 => '部分备份（仅限 rtorrent）',
  'PARTIAL_RTORRENT_ALL_USERS_BACKUP_PRIMARY_CONTENT' => '<p>在 rtorrent 作为要备份的软件配置的情况下，不需要用户名标志 (<code>-u</code>)。</p>',
  'PARTIAL_RTORRENT_ALL_USERS_BACKUP_CONTENT'         => '此命令将备份所有现有 rtorrent 用户的 .rtorrent.rc 文件。<br>备份存储在：<br><code>/home/[USERNAME]/.QuickBox/software/rtorrent/backup/.rtorrent.rc_YEAR-MONTH-DAY_HOUR:MINUTE</code>',
  'ROLLBACK_APPLICATIONS'                             => '回滚应用程序备份',
  'ROLLBACK_APPLICATIONS_CONTENT'                     => '将应用程序备份回滚到以前的状态',
  'RESTORE_APP_BACKUP_CONFIG'                         => '恢复备份 <span class="badge badge-pills outline-badge-secondary badge-table-menu" style="padding:2px 6px;line-height:0.7rem;font-size:0.5rem;">仅配置</span>',
  'RESTORE_APP_BACKUP_CONFIG_CONTENT'                 => '此命令将恢复指定用户之前备份的指定应用程序配置',
  'RESTORE_APP_DEFAULT_CONFIG'                        => '恢复默认 <span class="badge badge-pills outline-badge-secondary badge-table-menu" style="padding:2px 6px;line-height:0.7rem;font-size:0.5rem;">仅配置</span>',
  'RESTORE_APP_DEFAULT_CONFIG_CONTENT'                => '此命令将恢复指定用户的指定默认（从安装）应用程序配置',

  // #4.4.7.11 - news functions
  'NEWS_FUNCTIONS'                                    => '新闻功能',
  'NEWS_FUNCTIONS_INFO_CONTENT'                       => '<p>QuickBox 中的 <code>qb news</code> 功能为您提供有关 QuickBox 项目的最新信息和更新。了解新功能、错误修复和重要公告。</p>',
  'NEWS'                                              => '新闻',
  'NEWS_CONTENT'                                      => '查看最新的 QuickBox 新闻',

  // #4.4.7.12 - support functions
  'SUPPORT_FUNCTIONS'                                 => '支持功能',
  'SUPPORT_FUNCTIONS_INFO_CONTENT'                    => '<p>QuickBox 中的 <code>qb support</code> 功能提供了一种安全可靠的方法，在需要帮助时授予支持人员对您服务器的访问权限。强烈强调安全性和用户保护，此功能利用 <code>quickSupport</code> 账户，确保只有授权支持人员才能访问您的服务器。</p>',
  'ENABLE_SUPPORT'                                    => '启用支持',
  'ENABLE_SUPPORT_CONTENT'                            => '启用支持。通常分配给负责支持的工作人员团队成员',
  'DISABLE_SUPPORT'                                   => '禁用支持',
  'DISABLE_SUPPORT_CONTENT'                           => '禁用支持。否则，支持账户将在 36 小时后自动删除自己',

  // #4.4.7.13 - update functions
  'UPDATE_FUNCTIONS'                                  => '更新功能',
  'UPDATE_FUNCTIONS_INFO_CONTENT'                     => '<p>QuickBox 中的 <code>qb update</code> 功能为您提供了一种方便且灵活的方式来管理 QuickBox 安装的更新。使用此功能，您可以完全控制更新过程，允许您手动检查更新并选择何时应用它们。</p>',
  'UPDATE_CHECK'                                      => '更新检查',
  'UPDATE_CHECK_CONTENT'                              => '检查 QuickBox 的更新',
  'UPDATE_QUICKBOX'                                   => '更新 QuickBox',
  'UPDATE_QUICKBOX_CONTENT'                           => '将 QuickBox 安装更新到最新版本（如果有可用）',

  // #4.4.7.14 - bugs & reporting
  'BUGS'                                              => '错误和报告',
  'BUGS_INFO_CONTENT'                                 => '<p>QuickBox 文档的图形显示将定期更新，以确保提供的信息保持易于访问和用户友好。我们致力于增强您在 QuickBox 中的体验，推动我们不断完善和改进文档，使其与最新功能和功能保持同步。<br/><br/>
随着每次更新，我们将努力简化复杂概念、澄清说明并整合用户反馈，使 qb 手册页更加直观和高效。我们的目标是让您无缝理解 QuickBox 及其强大功能，使您能够掌握 qb CLI 环境并轻松管理服务器任务。<br/><br/>
我们重视您的意见，并鼓励您分享任何建议或想法，以进一步增强 qb 手册页。您的反馈对于塑造此资源并确保它仍然是所有 QuickBox 用户的宝贵参考至关重要。事实上，此页面存在是因为它被要求了！🤪<br/><br/>
向 <strong><a href="https://nullrefer.ir/?https://github.com/QuickBox/pro-v3/issues" rel="noopener nofollow" target="_blank">QuickBox.IO Labs 问题和功能跟踪器</a></strong> 报告任何可重现的错误或建议</p>',

  // #4.4.7.15 - disclaimer
  'DISCLAIMER'                                        => '免责声明',
  'DISCLAIMER_TEXT'                                   => '<p>此脚本旨在一般使用，对任何给定任务的适用性不暗示任何保证。QuickBox.IO 对您的设置或在使用/安装/修改此脚本或其任何插件时造成的任何损害不承担任何责任。请记住，QuickBox.IO 或其工作人员不负责保持您的软件和/或服务器最新；这是完全留给 QuickBox Pro 软件用户的责任。</p>',

  // #4.4.7.16 - license
  'LICENSE'                                           => '许可证',
  'LICENSE_SET'                                       => '根据 BSD 3-Clause 许可',
  'LICENSE_TEXT'                                      => '<p>版权所有 (c) 2018-2025，QuickBox.IO。保留所有权利。</p>
<p>在满足以下条件的情况下，允许以源代码和二进制形式重新分发和使用，无论是否修改：</p>
<ul style="font-size:0.75rem"><li>源代码的重新分发必须保留上述版权声明、此条件列表和以下免责声明。</li><li>二进制形式的重新分发必须在分发时提供的文档和/或其他材料中复制上述版权声明、此条件列表和以下免责声明。</li><li>未经事先书面许可，不得使用版权持有者的姓名或其贡献者的姓名来认可或推广从此软件衍生的产品。</li></ul>
<p>本软件由版权持有者和贡献者"按原样"提供，任何明示或暗示的保证，包括但不限于对适销性和特定用途适用性的暗示保证，均被否认。在任何情况下，版权持有者或贡献者均不对任何直接、间接、偶然、特殊、示例性或后果性损害（包括但不限于替代商品或服务的采购；使用、数据或利润的损失；或业务中断）承担责任，无论是基于合同、严格责任或侵权（包括疏忽或其他）的任何责任理论，即使已被告知此类损害的可能性。</p>',

  // #4.4.7.17 - misc
  'EXAMPLE'                                           => '示例：',
  'EXAMPLES'                                          => '示例：',
  'LOG_MAINTENANCE'                                   => '日志维护'
];
