<?php

/**
 * QuickBox Pro 简体中文语言文件
 *
 * 此文件用于将 QuickBox Pro 仪表板翻译成简体中文。
 * 为 QuickBox Pro v3.2.0: 2025年3月28日
 *
 * @package    dashboard
 * @subpackage lang
 * @category   Simplified Chinese
 * @version    3.0.1.101
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
 * @摘要 本文件包含 QuickBox Pro 的导航结构、小部件、杂项元素和页面。
 *
 * 导航 (#1)
 * ------------
 *   - #1.1: 语言和主题选择
 *   - #1.2: 用户菜单
 *   - #1.3: 侧边栏菜单
 *   - #1.4: 侧边栏子菜单
 *   - #1.5: 页脚
 *
 * 杂项 (#2)
 * ------------
 *   - #2.1: 按钮
 *   - #2.2: 弹出纹理
 *   - #2.3: 应用 NGINX 配置编辑模态框
 *   - #2.4: 其他
 *
 * 小部件 (#3)
 * ------------
 *   表头 (#3.1):
 *     - #3.1.1: 应用管理中心
 *
 *   软件包管理中心 (#3.2):
 *     - #3.2.1: 应用信息
 *     - #3.2.2: 卸载应用
 *     - #3.2.3: 重新安装应用
 *     - #3.2.4: 开关和工具提示
 *     - #3.2.5: 服务控制
 *     - #3.2.6: Rclone 特定开关
 *
 *   仪表板小部件 (#3.3):
 *     - #3.3.1: 磁盘状态小部件
 *     - #3.3.2: 系统指标 v1 - 带宽数据
 *     - #3.3.3: 系统指标 v1 - 服务器负载
 *     - #3.3.4: 系统指标 v1 - 内存状态
 *     - #3.3.5: 服务器活动小部件
 *
 * 页面 (#4)
 * ------------
 *   启动屏幕表单 (#4.1):
 *     - #4.1.1: 登录
 *     - #4.1.2: 忘记密码
 *     - #4.1.3: 注册
 *     - #4.1.4: 账户
 *       - #4.1.4.1: 引言
 *       - #4.1.4.2: 编辑账户模态框
 *     - #4.1.5: 概要
 *
 *   设置 (#4.2):
 *     - #4.2.1: 通用设置
 *     - #4.2.2: 邮件设置
 *     - #4.2.3: 会话设置
 *     - #4.2.4: 用户设置
 *     - #4.2.5: 安全设置
 *
 *   用户管理 (#4.3):
 *     - #4.3.1: 注册设置
 *     - #4.3.2: 用户管理
 *       - #4.3.2.1: 管理员用户编辑
 *       - #4.3.2.2: 管理员公告
 *     - #4.3.3: 用户组
 *
 *   系统 (#4.4):
 *     - #4.4.1: Web 控制台
 *     - #4.4.2: API 控制
 *     - #4.4.3: SSL 控制
 *     - #4.4.4: VPN 控制
 *     - #4.4.5: 故障排除
 *     - #4.4.6: 系统日志
 *     - #4.4.7: 帮助手册
 *       - #4.4.7.1: 描述
 *       - #4.4.7.2: 选项
 *       - #4.4.7.3: 软件
 *       - #4.4.7.4: 软件选项表
 *       - #4.4.7.5: 示例标题
 *       - #4.4.7.6: 用户管理
 *       - #4.4.7.7: 清理功能
 *       - #4.4.7.8: 修复功能
 *       - #4.4.7.9: 生成功能
 *       - #4.4.7.10: 管理功能
 *       - #4.4.7.11: 新闻功能
 *       - #4.4.7.12: 支持功能
 *       - #4.4.7.13: 更新功能
 *       - #4.4.7.14: 错误报告
 *       - #4.4.7.15: 免责声明
 *       - #4.4.7.16: 许可证
 *       - #4.4.7.17: 杂项
 *     - #4.4.8: 更新日志 / 更新
 *     - #4.4.9: 系统仪表板
 *       - #4.4.9.1: 带宽总计模式
 *     - #4.4.10: 流媒体仪表盘
 *       - #4.4.10.1: 流媒体 - 页面级错误与消息
 *
 *   错误页面 (#4.5)
 */

/* ********************************************************************************
 * #1 NAVIGATION
 *
 * #1.1 - language & theme selection
 ************************************/
$L['SELECT_LANGUAGE'] = '点击以选择语言';
$L['CHINESE']         = '中文';
$L['DANISH']          = '丹麦语';
$L['ENGLISH']         = '英语';
$L['FRENCH']          = '法语';
$L['GERMAN']          = '德语';
$L['PORTUGUESE']      = '葡萄牙语';
$L['SPANISH']         = '西班牙语';
$L['SELECT_THEME']    = '点击以选择主题';
$L['THEME_DARK']      = '黑暗主题';
$L['THEME_LIGHT']     = '灯光主题';

/* **********************************
 * #1.2 - user menu (top right)
 ************************************/
$L['PROFILE'] = '我的资料';
$L['LOG_OUT'] = '注销';
$L['REBOOT']  = '重启';

/* **********************************
 * #1.3 - sidebar menu
 ************************************/
$L['ABOUT_AND_TIPS']    = '关于 / 快速提示';
$L['APP_DASHBOARD']     = '应用仪表盘';
$L['DASHBOARD']         = '仪表盘';
$L['DB_MGMNT']          = 'phpMyAdmin';
$L['EXTERNAL_LINKS']    = '自定义链接';
$L['GENERAL_SETTINGS']  = '常规设置';
$L['HELP_SUPPORT']      = '帮助 / 更新';
$L['KB']                = '知识库';
$L['PLUGINS']           = '插件';
$L['REGISTRATION']      = '注册';
$L['SECURITY_SETTINGS'] = '安全设置';
$L['SESSION_SETTINGS']  = '会话设置';
$L['SETTINGS']          = '设置';
$L['SYS_DASHBOARD']     = '系统仪表盘';
$L['SYSTEM_LOGS']       = '系统日志';
$L['SYSTEM']            = '系统';
$L['USER_ADMIN']        = '用户管理';
$L['USER_GROUPS']       = '用户组';
$L['USER_MANAGEMENT']   = '用户管理';
$L['USER_SETTINGS']     = '用户设置';
$L['WEB_CONSOLE']       = 'Web 控制台';

/* **********************************
 * #1.4 - sidebar submenus
 ************************************/
$L['APP_MENU']        = '应用菜单';
$L['APPLICATIONS']    = '我的申请';
$L['DASHBOARD_INFO']  = '在管理系统仪表板或所有用户看到的应用程序仪表板之间进行选择。';
$L['DASHBOARD_VIEW']  = '仪表板视图';
$L['DOWNLOADS']       = '下载';
$L['FILEMANAGER']     = '文件管理器';
$L['NZB_CLIENTS']     = 'NZB 客户';
$L['PLUGINS_CENTER']  = '插件中心';
$L['PLUGINS_INFO']    = '只需点击插件名称，就能轻松安装和卸载插件。';
$L['RPLUGINS_NOTICE'] = '只需单击插件名称即可轻松安装和卸载ruTorrent插件';
$L['RPLUGINS']        = 'ruTorrent 插件';
$L['TORRENT_CLIENTS'] = 'Torrent 客户端';

/* **********************************
 * #1.5 - footer
 ************************************/
$L['ALL_RIGHTS'] = '版权所有。';

/* ********************************************************************************
 * #2 MISCELLANEOUS
 *
 * #2.1 - buttons
 ************************************/
$L['ACTIVATE_USERS']                = '启用账户';
$L['ADD_IP_ADDRESS']                = '添加 IP 地址';
$L['ADD_USERNAME']                  = '添加用户名';
$L['AGREE']                         = '我了解，立即执行!';
$L['API_ACTIVATE']                  = '激活';
$L['APP_MANAGEMENT']                = '应用管理';
$L['APPS_INSTALLED']                = '已安装的应用';
$L['AUTO_DISABLE']                  = '禁用自动更新';
$L['AUTO_ENABLE']                   = '启用自动更新';
$L['BACK']                          = '返回';
$L['BAN_USER']                      = '禁令用户';
$L['CANCEL']                        = '取消';
$L['CLEAN_LOG']                     = '清理更新日志';
$L['CLEAN_RCLOG']                   = '清理RClone上传日志';
$L['CLICK_ME']                      = '点我';
$L['CLOSE_REFRESH']                 = '关闭并刷新';
$L['CLOSE']                         = '关闭';
$L['CPU_TAB']                       = 'CPU';
$L['CREATE_ANNOUNCEMENT']           = '创建公告';
$L['CREATE_GROUP']                  = '创建用户组';
$L['CREATE_NEW_GROUP']              = '创建新的用户组';
$L['CREATE_NEW_USER']               = '创建新账户';
$L['CREATE_USER']                   = '创建用户';
$L['DATABASE_SIZE']                 = '数据库大小：';
$L['DELETE_ALL_ANNOUNCEMENTS']      = '删除所有公告';
$L['DELETE_ALL_LOGS']               = '删除全部日志 (> 30 天)';
$L['DELETE_INACTIVE_USERS']         = '删除未启用的账户';
$L['DELETE_LOGS']                   = '删除日志';
$L['DELETE_SELECTED_ANNOUNCEMENTS'] = '删除所选公告';
$L['DELETE_SELECTED_SESSIONS']      = '删除选中的会话';
$L['DELETE_SELECTED']               = '删除所选';
$L['DELETE_USER']                   = '删除用户';
$L['DEMOTE']                        = '从管理员降职';
$L['DISABLED']                      = '已禁用';
$L['DISK_TAB']                      = '磁盘';
$L['DOWNLOAD']                      = '下载';
$L['EDIT_ANNOUNCEMENT']             = '编辑选定的公告';
$L['EDIT_GROUP']                    = '编辑用户组';
$L['EDIT_USER']                     = '编辑用户';
$L['ENABLED']                       = '已启用';
$L['EXECUTE']                       = '执行';
$L['GENERATE']                      = '生成';
$L['GO_BACK']                       = '返回首页';
$L['IN_USE']                        = '正在使用';
$L['INSTALL']                       = '安装';
$L['INSTALLED']                     = '卸载';
$L['INSTALLING']                    = '安装中';
$L['KILL_USER_SESSION']             = '结束所有用户会话';
$L['LAUNCH']                        = '启动';
$L['LOGIN']                         = '登录';
$L['LOGOFF']                        = '注销';
$L['MEMORY_TAB']                    = '记忆';
$L['NETWORK_TAB']                   = '网络';
$L['NGINX_BACKUP']                  = '备份 Nginx 配置';
$L['NGINX_DEFAULT']                 = '恢复默认配置';
$L['NGINX_DISABLE']                 = '禁用弹出式授权检测';
$L['NGINX_ENABLE']                  = '启用弹出式授权检测';
$L['NGINX_RESTORE']                 = '恢复 Nginx 备份';
$L['APP_BACKUP_FULL']               = '完全备份';
$L['APP_BACKUP_PARTIAL']            = '部分备份';
$L['APP_DEFAULT_PARTIAL_RESTORE']   = '恢复默认';
$L['APP_BACKUP_PARTIAL_RESTORE']    = '恢复备份';
$L['ED_MENU_CONFIG_APP']            = '配置和应用程序';
$L['ED_MENU_CONFIG']                = '仅配置';
$L['VERSION_ROLLBACK_OPTIONS']      = '回滚选项';
$L['VERSION_ROLLBACK_V']            = '版本：';
$L['VERSION']                       = '版本';
$L['DATE']                          = '日期';
$L['VERSION_ROLLBACK_CONFIRM']      = '回滚到这个版本？';
$L['VERSION_ROLLBACK_DELETE']       = '删除这个备份？';
$L['PROMOTE']                       = '晋升为管理员';
$L['RCLONE_LOCK_REMOVE']            = '解除锁定';
$L['RCLONE_LOGS']                   = '查看日志';
$L['RCLONE_UPLOAD']                 = '上载';
$L['REFRESH']                       = '刷新';
$L['REGISTER']                      = '注册';
$L['REGISTERED']                    = '已注册';
$L['REINSTALL']                     = '重新安装';
$L['RELOAD_CONF']                   = '重载配置';
$L['RELOAD']                        = '重载';
$L['REMOVE_BANNED_IP']              = '移除已阻止的 IP 地址';
$L['REMOVE_DISALLOWED']             = '移除已禁用的用户名';
$L['REMOVE_MEMBER']                 = '移除集团成员';
$L['REMOVE']                        = '移除';
$L['RESET_VERSION']                 = '重置当前版本';
$L['RESET']                         = '重置';
$L['RESTART']                       = '重启';
$L['SAVE']                          = '节省';
$L['SERVICE_CONTROL']               = '服务控制';
$L['SIMULATE_BUTTON']               = '模拟';
$L['SIMULATE_END']                  = '终止模拟';
$L['SIMULATE_USER']                 = '模拟用户';
$L['NANGINX']                       = '不适用 服务在nginx上运行';
$L['START']                         = '开始';
$L['STOP']                          = '停止';
$L['SUBMIT']                        = '提交更改';
$L['TOP_PROC_TAB']                  = '顶级工艺';
$L['UNBAN_USER']                    = '解除禁令的用户';
$L['UNINSTALLED']                   = '已卸载';
$L['UNINSTALLING']                  = '卸载中';
$L['UP']                            = '上';
$L['UPDATE']                        = '更新';
$L['UPDATE_TOOLTIP']                = '点击查看更多信息';
$L['UPDATE_VERSION']                = '更新版本';
$L['USER_ACTIONS']                  = '用户行动';
$L['VIEW_CHANGELOG']                = '查看更改日志';
$L['LATEST']                        = '最新';
$L['CURRENT']                       = '当前';
$L['VIEW']                          = '查看';

/* **********************************
 * #2.2 - popup texture
 ************************************/
$L['SYSTEM_RESPONSE_TITLE'] = '系统响应';
$L['UNINSTALL_TITLE']       = '卸载';
$L['UNINSTALLING_TXT_1']    = '正在从你的系统中卸载';
$L['UNINSTALLING_TXT_2']    = '进行中，请耐心等待';

/* **********************************
 * #2.3 - app nginx config edit modal
 ************************************/
$L['ALERT_NGINX_EDITOR']  = '建议首先备份当前配置文件，请在精通 Nginx 配置或者在有工作人员的指导时进行修改。';
$L['BACKUP_NGINX_LOC']    = 'Nginx 配置文件备份位置';
$L['CURRENT_NGINX_LOC']   = 'Nginx 当前配置文件位置';
$L['NGINX_APP_CONFIGURE'] = 'Nginx 配置文件编辑器';
$L['NGINX_EDIT']          = '编辑 Nginx 配置文件';
$L['ALERT_CONFIG_EDITOR'] = '建议先备份你的当前配置，只有在你知道正在进行的编辑，查阅了应用程序本身的文档或得到工作人员的指示时，才可以改变下面的配置。';
$L['BACKUP_CONFIG_LOC']   = '配置备份位置';
$L['CURRENT_CONFIG_LOC']  = '配置 当前位置';
$L['APP_CONFIG_OPTIONS']  = '应用配置编辑器';
$L['APP_CONFIG_EDIT']     = '编辑应用配置';

/* **********************************
 * #2.4 - other
 ************************************/
$L['ABOUT_RELEASE']       = '关于发布';
$L['COPYRIGHT']           = '版权';
$L['EMAIL']               = '电子邮件';
$L['HERE']                = '此处';
$L['HOME']                = '主页';
$L['IDLE_L']              = '空闲';
$L['IDLE']                = '空闲';
$L['IS_AVAILABLE']        = '可用。';
$L['LANGUAGES']           = '语言';
$L['NEED_HELP']           = '需要帮助 ?';
$L['NGINX_CONF_OPTIONS']  = 'Nginx Conf选项';
$L['NGINX_CONFIG']        = 'Nginx 配置';
$L['NGINX_SETTINGS']      = 'Nginx 设置';
$L['NO']                  = '否';
$L['NOTIFICATIONS']       = '通知';
$L['OPEN']                = '打开';
$L['OR']                  = '或';
$L['PLEASE_HOLD']         = '- 请等候';
$L['PASSWORD']            = '密码';
$L['REQUIRED_FIELD']      = '必填项目...';
$L['REQUIRED_FIELDS']     = '标有的字段 <span style="color:#d9534f">*</span> 是必要的';
$L['SET_HERE']            = '在此处设置';
$L['SIMULATE_LIST']       = '用户列表';
$L['SIMULATE']            = '模拟用户';
$L['SUMMARY']             = '概要';
$L['THEMES']              = '主题';
$L['UPDATING_QUICKBOX']   = '更新 QuickBox';
$L['UPDATING']            = '更新中 ';
$L['USED_L']              = '已使用';
$L['USERNAME']            = '用户名';
$L['USERS']               = '账户';
$L['YES']                 = '是';
$L['ADD_MOUNT_PATH_INFO'] = '选择是否要忽略所选目录上的配额（如果已安装）。 选择此选项后，将忽略指定路径的配额。 当监视不应考虑配额的目录时，请使用此选项。 这确保了精确的空间计算，特别是对于 rclone 安装座。';
$L['ADD_NEW_MOUNT_CHECK'] = '添加一个现有的挂载或目录来监控';
$L['MOUNT_PATH_SUCCESS']  = '已成功添加监控路径。 正在刷新页面...';
$L['MOUNT_PATH_ERROR']    = '您尝试添加用于监控的路径不存在。<br>请仔细检查该路径，然后重试。';
$L['MOUNTS']              = '坐骑：';
$L['MOUNT_ADD_PATH']      = '添加路径';
$L['MOUNT_CHECK_ABOUT']   = '这些值会定期计算和更新。这些值不是实时的。您可以通过单击下面的 \'开始扫描\' 按钮强制更新这些统计信息。';
$L['MOUNT_CHECK_PROCESS'] = '当前正在后台计算空间百分比值。请稍后再回来查看更新的结果。需要刷新页面。';
$L['MOUNT_MONITOR_INFO']  = '附加挂载信息';
$L['MOUNT_START_SCAN']    = '开始扫描';
$L['REMOVE_MOUNT_PATH']   = '移除监控路径。这不会删除实际目录或挂载点。';

/* ********************************************************************************
 * #3 WIDGETS
 *
 * #3.1 - Tables Headers
 *
 * #3.1.1 - app management center
 ************************************/
$L['AVAILABILITY'] = '状态';
$L['DETAILS']      = '详情';
$L['NAME']         = '名称';
$L['CONFIGS']      = '配置';
$L['EXTRAS']       = '额外';

/* **********************************
 * #3.2 - Package Management Center
 *
 * #3.2.1 - app info
 ************************************/
$L['AIRSONIC']      = 'Airsonic-Advanced是Airsonic分叉的一个更现代的实现，有几个关键的性能和功能增强。它增加并取代了Airsonic的一些功能。Airsonic是一个免费的、基于网络的媒体流媒体，提供无处不在的音乐访问。';
$L['AUTOBRR']       = 'Autobrr 是 autodl-irssi+rutorrent 插件的现代单一二进制替代品。Autobrr 监控 IRC 公告频道和 torznab RSS 提要，以便在它们可用时立即获得发布，具有良好的过滤和正则表达式支持。';
$L['AUTODL']        = 'AutoDL-iRSSi 是一个 irssi 插件，用于监视 IRC 发布频道并且可以根据用户定义的过滤器下载。';
$L['AUTOSCAN']      = 'Autoscan取代了默认的Plex和Emby的行为，用于在文件系统上采集文件变化。Autoscan与Sonarr，Radarr，Lidarr和Google Drive集成，以接近实时的方式获取变化，而不依赖文件系统。';
$L['BAZARR']        = 'Bazarr是Sonarr和Radarr的配套应用程序。它根据您的要求管理和下载字幕。您可以通过电视节目或电影定义喜好，Bazarr会为您做好一切。';
$L['BAZARR4K']      = 'Bazarr4K 是 4K UHD 配置文件的独立 Bazarr 克隆。这是一种处理多个 Bazarr 实例的方法，同时将 UHD 内容与一般内容分开。';
$L['BBR']           = 'BBR 是一个由 Google 提供的 Linux 内核的新型TCP拥塞控制算法，它可以增加网络吞吐量并且降低连接';
$L['BTSYNC']        = 'BitTorrent 公司的 BitTorrent Sync 是一个专有的对等文件同步工具。';
$L['CALIBRE']       = 'Calibre 是一个跨平台的开源电子书套件。Calibre 可以将电子书整理进一个虚拟的库，并且可以显示，编辑，转换这些电子书。同时它也可以将这些电子书同步到电子阅读器中。书籍编辑支持 EPUB 和 AZW3格式。';
$L['COUCHPOTATO']   = '通过 Usenet 或 Torrents 自动下载电影，轻松和最好的质量。';
$L['CSF']           = 'ConfigServer 防火墙 (也称为 CSF) 是一种防火墙配置脚本，为你的服务器提供更好的安全性，同时为你提供易于使用的高级界面来管理防火墙设置。';
$L['DELUGE']        = 'Deluge 是一款轻量级的免费软件，跨平台的BitTorrent客户端。';
$L['DUPLICATI']     = 'Duplicati是一个免费，开源的备份客户端，可以安全地在云存储服务和远程文件服务器上存储加密，增量，压缩的备份。它可以与Amazon S3，Dropbox，Google Drive，FTP，SSH/SFTP，WebDAV和<a href="https://nullrefer.ir/?https://duplicati.readthedocs.io/en/latest/01-introduction/#supported-backends" rel="noopener nofollow" target="_blank">更多</a>一起工作。';
$L['EMBY']          = 'Emby Server 是一个服务器软件包，可以让消费者托管他们合法的多媒体 - 音乐，视频和图片文件。Emby 客户端软件是一个应用程序，你需要安装在移动设备和某些电视的机顶盒，如Android电视。';
$L['FAIL2BAN']      = 'Fail2Ban 是一种入侵防御软件框架，可以保护计算机和服务器免受暴力攻击的威胁。';
$L['FILEBOT']       = 'FileBot 是一个组织重命名电影，电视节目，动漫文件并且可以抓取字幕和信息的终极工具，它会智能地搞定一切';
$L['FILEBROWSER']   = 'filebrowser 提供了一个指定目录中的文件管理界面，可以用于上传，删除，预览，重命名以及编辑。它允许你创建多个用户，每个用户可以拥有自己的目录。';
$L['FLARESOLVERR']  = 'FlareSolverr 是绕过 Cloudflare 保护的代理服务器。';
$L['FLEXGET']       = 'FlexGet 是一款适用于所有媒体的多功能自动化工具。它支持 torrents，nzbs，podcasts，comics，TV，movies，RSS，HTML，CSV，等形式。';
$L['FLOOD']         = 'Flood 是针对各种洪流客户端的监控服务。它是一个 Node.js 服务，可以与您最喜欢的 torrent 客户端进行通信，并为管理提供一个不错的 Web UI。<a href="https://nullrefer.ir/?https://github.com/Flood-UI" target="_blank" rel="nofollow noopener">Flood-UI</a> 组织托管相关项目。';
$L['HEADPHONES']    = 'Headphones 是用 Python 编写的 NZB 和 Torrent 的自动音乐下载器。它支持 SABnzbd，NZBget，Transmission，μTorrent，Deluge 和 Blackhole。';
$L['JACKETT']       = '对您最喜爱的 private trackers 的 API 支持。';
$L['JDOWNLOADER']   = 'JDownloader 是一款免费的下载管理工具，可让您从 Mediafire，4Shared 等托管服务和其他类似功能的托管服务中快速下载文件。文件托管服务通常会控制您的完整下载速度，以激励购买高级套餐; JDownloader 可帮助您规避该要求。';
$L['JELLYFIN']      = 'Jellyfin 是一个多媒体系统的自由软件，它可以让您控制媒体的管理和流式传输。';
$L['JELLYSEERR']    = 'Jellyseerr 是一个免费的开源软件应用程序，用于管理媒体库的请求。它是 Overseerr 的一个分支，旨在支持 Jellyfin 和 Emby 媒体服务器!';
$L['KAVITA']        = 'Kavita 是一个快速，功能丰富的跨平台阅读服务器。以漫画为重点，目标是成为满足您所有阅读需求的完整解决方案。设置您自己的服务器并与您的朋友和家人分享您的阅读收藏。';
$L['KOMGA']         = 'Komga 是您的数字漫画/漫画的媒体服务器，专注于提供简单而现代的界面。';
$L['LAZYLIBRARIAN'] = 'LazyLibrarian是SickBeard，CouchPotato，类似于耳机的应用程序，用于电子书，有声读物和杂志。它结合使用<a href="https://nullrefer.ir/?https://www.goodreads.com/" rel="noopener nofollow" target="_blank"> Goodreads </a> <a href="https://nullrefer.ir/?https://www.librarything.com/" rel="noopener nofollow" target="_blank"> Librarything </a>和 ( 可选 ) <a href="https://nullrefer.ir/?https://www.googleapis.com/books/v1/" rel="noopener nofollow" target="_blank"> GoogleBooks </a>作为作者信息和书籍信息的来源。';
$L['LETSENCRYPT']   = 'Let\'s Encrypt 是一个免费，自动化的和开放的证书颁发机构 (CA)，由 ISRG (<a href="https://nullrefer.ir/?https://letsencrypt.org/isrg/" rel="noopener nofollow" target="_blank">Internet Security Research Group</a>) 运营。';
$L['LIDARR']        = 'Lidarr 是 Sonarr的一个独立分支，它通过 Usenet 和 BitTorrent 自动下载音乐。该项目的灵感来自其他的 Usenet/BitTorrent 音乐下载器，例如 Headphones。';
$L['MEDUSA']        = '电视节目的视频文件管理器，用来观看你最喜爱的节目的新剧集。允许手动搜索和其他专有功能，请检查<a href="https://nullrefer.ir/?https://github.com/pymedusa/Medusa" rel="noopener nofollow" target="_blank"> Github </a>上的 Medusa。';
$L['MYLAR3']        = 'Mylar是一个自动漫画 (cbr / cbz) 下载程序，可与NZB和用python编写的torrent一起使用。除了DDL外，它还支持SABnzbd，NZBGET和许多torrent客户端。';
$L['NETDATA']       = 'Netdata 分布式的，实时的适用于应用与系统的性能与健康情况的监视器。';
$L['NEXTCLOUD']     = 'Nextcloud是一个开源，自主托管的文件同步和共享通信应用平台。访问和同步你的文件，联系人，日历和沟通和协作你的设备。你可以完全掌控你的数据，存放在哪里以及谁可以访问它!';
$L['NOTIFIARR']     = '这是 <a href="https://nullrefer.ir/?https://notifiarr.com/" rel="noopener nofollow" target="_blank">Notifiarr.com</a>。客户端在您的 Discord 服务器中启用来自 Media Bot 的内容请求，并提供有关 Plex 使用情况和系统健康状况以及许多其他功能的报告.。';
$L['NOVNC']         = 'noVNC不仅是一个 VNC 客户端 JavaScript 库，也是一个利用该库构建的应用程序。noVNC 可以在任何的现代浏览器包括移动浏览器 (iOS and Android) 中运行。';
$L['NZBGET']        = 'NZBGet 是一个二进制下载器，它根据 nzb-files 中给出的信息从 Usenet 下载文件。NZBGet 是用 C ++ 编写的，以其非凡的性能和效率而闻名。';
$L['NZBHYDRA']      = 'NZBHydra 是 NZB 索引器的元搜索程序，它提供了对一些基于 raw 和 newznab 的索引器的简单访问。你可以从一个地方搜索所有索引，并将其用作 Sonarr 或 CouchPotato 等工具的索引。';
$L['NZBHYDRA2']     = 'NZBHydra2 是 NZB 索引器的元搜索程序，它提供了对一些基于 raw 和 newznab 的索引器的简单访问。你可以从一个地方搜索所有索引，并将其用作 Sonarr 或 CouchPotato 等工具的索引。';
$L['OMBI']          = 'Ombi 为希望将内容添加到库的用户提供了一个美观且易于使用的界面，它集成于 CouchPotato，SickChill 和 Sonarr。';
$L['OVERSEERR']     = 'Overseerr 是一款免费的开源软件应用程序，用于管理媒体库的请求。它与您现有的服务集成，例如 Sonarr、Radarr 和 Plex!';
$L['OVPN']          = '基于 SSL/TLS 的 VPN。支持 Linux，Solaris，OpenBSD，FreeBSD，NetBSD，Mac OS X和Windows 2000 / XP +。';
$L['PHPMYADMIN']    = 'phpMyAdmin 是一个使用 <a href="https://nullrefer.ir/?https://php.net/" rel="noopener nofollow" target="_blank">PHP</a> 编写的免费软件，旨在通过网页处理 <a href="https://nullrefer.ir/?https://www.mysql.com/" rel="noopener nofollow" target="_blank">MySQL</a> 数据库的管理。phpMyAdmin 支持 MySQL 和 MariaDB 上的各种操作。可以在用户界面执行常用操作 (管理数据库，表，列，关系，索引，用户，权限等)，同时你也可以直接执行各种 SQL 语句。';
$L['PLEX']          = 'Plex 可让你将内容传输到任何支持 Plex 的设备。';
$L['PROWLARR']      = 'Prowlarr 是建立在流行的 arr .net/reactjs 基础堆栈上的索引器管理器/代理，可与您的各种 PVR 应用程序集成。Prowlarr 支持 Torrent Trackers 和 Usenet Indexers。它与 Sonarr，Radarr，Lidarr 和 Readarr 无缝集成，提供对索引器的完整管理，无需每个应用程序的索引器设置。';
$L['PYLOAD']        = 'pyLoad 是用于 `Hoster` 网站，视频网站和HTTP/FTP链接的下载管理器。你可以在 <a href="https://nullrefer.ir/?https://github.com/pyload/pyload/wiki/Supported-Hoster" rel="noopener nofollow" target="_blank">此处</a> 找到支持的网站列表。';
$L['QBITTORRENT']   = 'qBittorrent 是一款免费可靠的 P2P BitTorrent 客户端，先进的多平台 BitTorrent 客户端，具有良好的 Qt 用户界面以及用于远程控制并且集成搜索引擎的 Web 用户界面。';
$L['QUASSEL']       = 'Quassel IRC 是一个基于Qt4框架的现代化，跨平台，分布式的IRC客户端。';
$L['QUOTAS']        = 'Linux 的这一特性允许系统管理员分配用户或用户组组可以使用的最大磁盘空间。';
$L['RADARR']        = 'Radarr 是 Sonarr 的一个独立分支，通过 Usenet 和 BitTorrent 自动下载电影。<br>该项目的灵感来自其他的 Usenet/BitTorrent 电影下载器，例如 CouchPotato。';
$L['RADARR4K']      = 'Radarr4K 是 4K UHD 配置文件的独立 Radarr 克隆。这是一种处理多个 Radarr 实例的方法，同时将 UHD 内容与一般内容分开。';
$L['RAPIDLEECH']    = 'Rapid Leech 是一个免费的服务器转移脚本，可用于各种流行的上传/下载站点，例如 uploaded.net，Rapidshare.com 和 120 多个其他站点。';
$L['RCLONE']        = 'RClone 是一个命令行程序，它可以将文件或者文件夹同步到多个主机';
$L['READARR']       = 'Readarr是一个针对Usenet和BitTorrent用户的电子书收集管理器。它可以监控多个RSS提要，以获取你喜欢的作者的新书，并将与客户端和索引器接口，以抓取、分类和重命名它们。';
$L['REQUESTRR']     = 'Requestrr是一个Discord聊天机器人，用于通过使用聊天来简化使用Sonarr/Radarr/Ombi等服务! 你的Discord服务器的所有用户都可以请求添加新的内容，并在可用时得到通知';
$L['RTORRENT']      = 'rTorrent 是一个快速高效的 BitTorrent 客户端，同时使用正在开发的 libtorrent 库 (并非 libtorrent-rasterbar)。它是利用 C ++ 和 ncurses 库编写的软件，因此它使用一个字符用户界面。';
$L['RUTORRENT']     = 'ruTorrent 是一个受欢迎的 BitTorrent 客户端 rTorrent 的前端。主要特性: 轻量级的服务端，因此可以被安装在一些较老以及较地段的服务器上，甚至可以安装在一些 SOHO 路由器上; 可扩展，它拥有很多插件，每个人都可以创建自己的插件; 带有 <a href="https://nullrefer.ir/?https://github.com/QuickBox/club-QuickBox" rel="noopener nofollow" target="_blank">club-QuickBox 皮肤</a>。';
$L['SABNZBD']       = 'SABnzbd 是一个多平台的二进制新闻组下载器。该程序在后台工作，并简化了从 Usenet 下载，验证和提取文件的操作。SABnzbd 使用 NZB 文件 (类似于 .torrent文件，但用于 Usenet)，而不是直接浏览 Usenet。';
$L['SEEDCROSS']     = 'SeedCross 是一个用于在 Deluge/qBittorrent/Transmission 中交叉种子种子的网络应用程序。它是 <a href="https://nullrefer.ir/?https://github.com/BC44/Cross-Seed-AutoDL" rel="noopener nofollow" target="_blank">Cross-Seed-AutoDL</a>。';
$L['SICKCHILL']     = '电视节目的视频文件管理器，它可以帮助你及时追剧。';
$L['SICKGEAR']      = 'SickGear 是 Sick-Beard 的进化版。凭借创新，久经考验的稳定性和可靠性实现享受电视的自动化。';
$L['SONARR']        = 'Sonarr 是一个电视连续剧管理工具，可以同时使用 Torrents 和 Usenet 。';
$L['SONARR4K']      = 'Sonarr4K 是 4K UHD 配置文件的独立 Sonarr 克隆。这是一种处理多个 Sonarr 实例的方法，同时将 UHD 内容与一般内容分开。';
$L['SUBSONIC']      = 'Subsonic 是一个基于网络的媒体服务器。它是用 Java 编写的，所以它可以在任何支持 Java 的操作系统上运行。Subsonic 支持同时向多个客户端传输流媒体，并支持任何流媒体 (包括 MP3，AAC 和 Ogg)。';
$L['SYNCTHING']     = '开源的 BitTorrent 文件同步软件。';
$L['TAUTULLI']      = '基于 python 的 Web 应用程序，用于 Plex Media Server 的监视，分析和通知。';
$L['THELOUNGE']     = '一个现代化的 IRC web 客户端';
$L['TRANSMISSION']  = 'Transmission 被设计为功能强大而易于使用的客户端。它的默认设置即可直接运行，只需要简单的点击就可以配置例如如监视目录，不良 peers 拦截列表和 Web 界面等高级功能。Ubuntu 以它作为默认的 BitTorrent 客户端，其中最重要的理由就是它简单易学。';
$L['UNIFI']         = 'The UniFi® 是 Ubiquiti Networks™ 的无线网络管理软件。它允许你在浏览器种管理多个无线网络。';
$L['UNPACKERR']     = '提取 Radarr，Sonarr，Lidarr，Readarr 的下载 - 导入后删除提取的文件。';
$L['WEBCONSOLE']    = 'TTYD ( 又名 QuickBox Web 控制台 ) 是一个基于 Xterm.js 的全功能终端，支持 CJK 和 IME。';
$L['WIREGUARD']     = 'WireGuard® 是一款极其简单但快速且现代的 VPN，采用最先进的加密技术。它旨在比 IPsec 更快、更简单、更精简、更实用，同时避免大量麻烦。它旨在比 OpenVPN 性能更高。WireGuard 被设计为通用 VPN，可在嵌入式接口和超级计算机上运行，​​适用于许多不同情况。';
$L['X2GO']          = 'X2Go 是一款使用 NX 技术协议的 Linux 开源远程桌面软件。';
$L['XTEVE']         = 'XTeVe是一个模拟电视调谐器的应用程序，它允许你通过Plex或Emby拥有IPTV频道。xTeVe可以合并多个M3U和XMLTV文件，并将其发送到你喜欢的媒体中心';
$L['ZNC']           = 'ZNC 是一个 IRC 网络辅助软件。它可以将客户端从实际的 IRC 服务器以及选定的频道中分离出来。';

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
	$L[$key . '_UNINSTALL'] = '您即将卸载 <span style="color:#01cea2">' . $value . '</span> 从您的系统中删除。<br/><br/>这将完全删除您的所有配置和设置...此操作不可逆转。<br/><br/>您可以重新安装<span style="color:#01cea2">' . $value . '</span> 但是，您的设置将随时重置为默认值。';
}

/* **********************************
 * #3.2.3 - app reinstall
 ************************************/
// Loop through the array and create the reinstall translation
foreach ($APPS as $key => $value) {
	$L[$key . '_REINSTALL'] = '您将重新安装 <span style="color:#01cea2">' . $value . '</span>。<br/><br/>这将完全删除/重置您当前的所有配置、文件和设置...此操作不可逆转。';
}

/* **********************************
 * #3.2.4 - toggles & tooltips
 ************************************/
$L['APP_OPTIONS']                  = '应用选项';
$L['NGINX_OPTIONS']                = 'NGINX 选项';
$L['CARD_VIEW']                    = '卡片视图';
$L['LIST_VIEW']                    = '列表查看';
$L['CLI']                          = '仅限 Web 控制台';
$L['COMPAT_E']                     = '兼容性错误';
$L['CURRENTLY_INSTALLED_NOTICE']   = '看来您可以访问一次只能由一个用户安装的应用程序。与系统管理员联系以了解其可用性的进一步状态。';
$L['CURRENTLY_INSTALLED_TITLE']    = '当前有人已安装此应用程序';
$L['DEL1_TOOLTIP']                 = '看起来你运行的是Ubuntu 20.04。Deluge v1不能在这个发行版上运行。请考虑安装Deluge v2来继续，因为Deluge v2运行在更新的libtorrent1.2+和python3+上';
$L['DEL2_TOOLTIP']                 = 'qBittorrent 已安装。Deluge v2 不能兼容已安装的 qBittorrent。请安装 Deluge v1 或者卸载 qBittorrent 以继续。';
$L['DEL2XENIAL_TOOLTIP']           = '看起来你再运行 Ubuntu 16.04。Deluge v2 不能在此平台运行。请选择 Deluge v1 并继续。';
$L['EMBY_JELLYFIN_COMPAT_MESSAGE'] = 'Jellyfin 已安装';
$L['ENTER_MOUNT_POINT']            = '请输入您的首选挂载点';
$L['FAIL2BAN_TOOLTIP']             = '从 SSH:<br><code>qb install fail2ban</code> 以访问此功能';
$L['JELLYFIN_EMBY_COMPAT_MESSAGE'] = 'Emby 已安装';
$L['MEDUSA_INSTALLED']             = 'Medusa 已安装';
$L['OVPN_TOOLTIP']                 = '从 Web 控制台输入:<br><code>qb install vpn -u USER</code> 以访问此功能';
$L['PRIMARY_MOUNTM']               = '首选挂载点';
$L['QBIT_TOOLTIP']                 = 'Deluge 2 已安装。qBittorrent 不能兼容已安装的 Deluge 2。请安装 Deluge v1 或者卸载 Deluge 2 以继续。';
$L['QUOTAS_FSTAB']                 = '编辑您的 fstab';
$L['QUOTAS_HELP']                  = '更多有关安装 quotas 的信息，<a href="https://nullrefer.ir/?https://quickbox.io/knowledge-base/how-to-install-quotas/" rel="noopener nofollow" target="_blank"><strong>请阅读此 F.A.Q first</strong></a>。';
$L['QUOTAS_TOOLTIP']               = '在您的主挂载点添加以下内容以替代 <code class="language-bash">defaults</code> 并继续';
$L['RCLONE_ADMIN_TOOLTIP']         = '从 SSH:<br><code>qb install rclone -u USER [--dropbox|--gdrive] [--encrypted] [--beta]</code> 以访问此功能<br>请参阅 <code>qb help rclone</code> 了解更多选项。';
$L['RCLONE_USER_TOOLTIP']          = '请与系统管理员联系以安装此程序。';
$L['REMOVE_MEDUSA_FIRST']          = '安装此应用需要首先移除 Medusa。';
$L['REMOVE_SICKCHILL_FIRST']       = '安装此应用需要首先移除 SickChill。';
$L['REMOVE_SICKGEAR_FIRST']        = '安装此应用需要首先移除 SickGear。';
$L['SICKCHILL_INSTALLED']          = 'SickChill 已安装';
$L['SICKGEAR_INSTALLED']           = 'SickGear 已安装';
$L['UNIFI_SSL_TOOLTIP']            = '如果您已在站点根目录中设置了域，并且已为域生成了let的加密证书，请选择此选项';
$L['ZNC_TOOLTIP']                  = '从 SSH:<br><code>qb install znc -u USER</code> 以访问此功能';

/* **********************************
 * UI - app install/reinstall modals
 *
 * calibre install/reinstall modal
 ************************************/
$L['CALIBRE_INSTALL_TITLE']   = 'Calibre 安装';
$L['CALIBRE_REINSTALL_TITLE'] = 'Calibre 重新安装';
$L['CALIBRE_INSTALL_MESSAGE'] = '您可以选择为 Calibre 库指定自定义目录路径。 如果所选路径当前不存在，系统会自动为您生成该路径。<br>或者，如果您喜欢使用默认路径，只需将该字段留空，库将位于：<br> <code>/home/' . $username . '/.config/Calibre/library</code>';

/* **********************************
 * filebot install/reinstall modal
 ************************************/
$L['FILEBOT_INSTALL_TITLE']         = 'Filebot 安装';
$L['FILEBOT_REINSTALL_TITLE']       = 'Filebot 重新安装';
$L['PROCESS_DELUGE']                = '处理 Deluge 的下载？';
$L['PROCESS_DELUGE_TOOLTIP']        = '将此设置为 \'是\' 以处理 Deluge 的下载。<br>请参阅位于<br><code>/home/' . $username . '/.config/Filebot/deluge-postprocess.sh</code>';
$L['CUSTOM_PATH_TOOLTIP_NO_RCLONE'] = '将此设置为 \'是\' 以输入媒体库的路径。<br>默认路径为：<br><code>/home/' . $username . '/Media</code>';
$L['CUSTOM_PATH_TOOLTIP_RCLONE']    = '将此设置为 \'是\' 以输入媒体库的路径。<br>默认路径为：<br><code>/home/' . $username . '/rclone/cache</code>';
$L['PROCESS_NZBGET']                = '处理 NZBGet 的下载？';
$L['PROCESS_NZBGET_TOOLTIP']        = '将此设置为 \'是\' 以处理 NZBGet 的下载。<br>请参阅位于<br><code>/home/' . $username . '/.config/NZBGet/scripts/nzbget-postprocess.sh</code>';
$L['PROCESS_RTORRENT']              = '处理 rTorrent 下载？';
$L['PROCESS_SABNZBD']               = '处理 SABnzbd 的下载？';
$L['CUSTOM_MEDIA_PATH']             = '使用自定义媒体库路径？';
$L['FILEBOT_DEFAULT_PATH']          = '示例';
$L['FILEBOT_LICENSE']               = 'Filebot 许可证';

/* **********************************
 * jdownloader install/reinstall modal
 ************************************/
$L['JDOWNLOADER_INSTALL_TITLE']        = 'JDownloader 安装';
$L['JDOWNLOADER_REINSTALL_TITLE']      = 'JDownloader 重新安装';
$L['JDOWNLOADER_EMAIL']                = 'JDownloader 帐户电子邮件地址';
$L['JDOWNLOADER_PASSWORD']             = 'JDownloader帐户密码';
$L['JDOWNLOADER_INSTALL_PATH_MESSAGE'] = '您可以选择为 JDownloader 下载指定自定义目录路径。 如果所选路径当前不存在，系统会自动为您生成该路径。<br>或者，如果您喜欢使用默认路径，只需将该字段留空，库将位于：<br><code>/home/' . $username . '/Downloads</code>';

/* **********************************
 * kavita install/reinstall modal
 ************************************/
$L['KAVITA_INSTALL_TITLE']   = 'Kavita 安装';
$L['KAVITA_REINSTALL_TITLE'] = 'Kavita 重新安装';
$L['KAVITA_INSTALL_MESSAGE'] = '您可以选择为 Kavita 库指定自定义目录路径。 如果所选路径当前不存在，它将自动为您生成。<br>或者，如果您更喜欢使用默认路径，只需将该字段留空，库将位于：<br><code>/home/' . $username . '/.config/Kavita/library</code>';

/* ************************************
 * mylar3 install/reinstall modal
 ************************************/
$L['MYLAR3_INSTALL_TITLE']   = 'Mylar3 安装';
$L['MYLAR3_REINSTALL_TITLE'] = 'Mylar3 重新安装';
$L['MYLAR3_INSTALL_MESSAGE'] = '您可以选择为 Mylar3 Comics 目录指定自定义路径。 如果所选路径当前不存在，系统将自动为您生成。<br>或者，如果您希望使用默认路径，只需将该字段留空，目录将位于：<br><code>/home/' . $username . '/Media/Comics</code>';

/* **********************************
 * plex install/reinstall modal
 ************************************/
$L['PLEX_CLAIM_MESSAGE']     = '<p style="font-size:12px">要声明您的 Plex 媒体服务器，您必须已有帐户并登录才能从以下位置获取声明代码：<a href="https://www.plex.tv/claim/" rel="noopener nofollow" target="_blank" style="color:var(--qb-color-37);"><strong>https://www.plex.tv/claim/</strong></a></p><div class="alert alert-light-info fade show border-0 mb-2 mt-0" role="alert" style="font-size:12px;color:var(--qb-color-2)"><strong style="color:var(--qb-color-37)">注意：</strong>建议使用声明代码屏幕中的 \'复制到剪贴板\' 按钮以确保 正确插入，因为声明代码区分大小写。</div>';
$L['PLEX_CLAIM_TITLE']       = 'Plex 媒体服务器安装';
$L['PLEX_CLAIM_TOKEN']       = 'Plex 声明代码';
$L['PLEX_DATA_PATH']         = '使用数据目录的自定义路径？';
$L['PLEX_DATA_PATH_TOOLTIP'] = '您可以选择为 Plex 安装指定自定义数据路径。 如果所选路径当前不存在，系统会自动为您生成该路径。<br>或者，如果您更喜欢使用默认路径，只需将选择保留为 \'否\' ，数据目录将会是 位于：<br><code>/home/' . $username . '/.config/\'Plex Media Server\'</code>';
$L['PLEX_DOMAIN']            = '为 Plex 媒体服务器设置域？';
$L['PLEX_DOMAIN_TOOLTIP']    = '如果您已经拥有一个域并为 Plex 子域设置了 DNS 记录，请选择 \'是\' 输入您的 plex 子域。<br>此选项会将您的 Plex 媒体服务器配置为 与您的自定义 Plex 域无缝协作。 它包括设置必要的 Nginx 反向代理并为您的域安装 SSL 证书以确保安全访问。';

/* **********************************
 * rutorrent plugin control modal
 ************************************/
$L['RUTORRENT_PLUGIN_CONTROL_TITLE'] = 'ruTorrent插件控制';
$L['AUTHOR']                         = '作者';
$L['HELP_URL']                       = '文档说明';

/* **********************************
 * wireguard install/reinstall modal
 ************************************/
$L['WIREGUARD_INSTALL_TITLE']                 = 'WireGuard 安装';
$L['WIREGUARD_REINSTALL_TITLE']               = 'WireGuard 重新安装';
$L['WIREGUARD_CLIENT_OR_SERVER']              = 'WireGuard 客户端还是服务器？';
$L['WIREGUARD_CLIENT_OR_SERVER_TOOLTIP']      = '选择 \'服务器\' 将把 WireGuard 安装为服务器。选择 \'客户端\' 将把 WireGuard 安装为客户端。服务器用于托管 VPN 服务器，而客户端用于连接 VPN 服务器。选择 \'客户端\' 将需要 VPN 提供商提供的配置文件，并将通过 VPN 路由所有流量。';
$L['CLIENT']                                  = '客户';
$L['SERVER']                                  = '服务器';
$L['WIREGUARD_CONFIG_TIPS']                   = '请以 <code>.conf</code> 格式上传您的 WireGuard 服务器或客户端配置文件。<br><ul><li>对于 WireGuard 服务器，该文件应包含服务器配置详细信息。</li><li>对于 WireGuard 客户端，该文件应包含客户端配置详细信息。</li></ul>这些文件将存储在 <code>/srv/quickbox/db/wireguard/</code> 中。<br><br>大多数 VPN 提供商都会为 WireGuard 提供配置文件。如果您使用的是 NordVPN（它不直接提供配置文件），则可以使用随附的 NordVPN 配置生成器生成一个配置文件。<br>有关生成 NordVPN 配置文件的更多信息，请在 CLI 中使用命令 <code>nvpn_conf_gen -h</code>。';
$L['WIREGUARD_INSTALL_CONFIG']                = '上传 WireGuard 配置文件';
$L['WIREGUARD_INSTALL_PORT_LABEL']            = '监听端口';
$L['WIREGUARD_INSTALL_PORT_PH']               = '51820';
$L['WIREGUARD_INSTALL_CLIENT_COUNT_LABEL']    = '客户数量';
$L['WIREGUARD_INSTALL_CLIENT_COUNT_PH']       = '1';
$L['WIREGUARD_INSTALL_CIDR_LABEL']            = 'CIDR';
$L['WIREGUARD_INSTALL_CIDR_PH']               = '10.8.0.1/24';
$L['WIREGUARD_INSTALL_ALLOWED_ADDRESS_LABEL'] = '客户端允许的 IP';
$L['WIREGUARD_INSTALL_ALLOWED_ADDRESS_PH']    = '0.0.0.0/0,::/0';
$L['WIREGUARD_INSTALL_ENDPOINT_LABEL']        = '端点（可选）';
$L['WIREGUARD_INSTALL_ENDPOINT_PH']           = 'myserver.dyndns.org:51820';
$L['WIREGUARD_INSTALL_DNS_LABEL']             = 'DNS （可选）';
$L['WIREGUARD_INSTALL_DNS_PH']                = '1.1.1.1';
$L['WIREGUARD_INSTALL_POSTUP_RULE_LABEL']     = 'Post-Up 规则';
$L['WIREGUARD_INSTALL_POSTUP_RULE_PH']        = 'iptables -A FORWARD -i %i -j ACCEPT; iptables -t nat -A POSTROUTING -o ' . $network_interface . ' -j MASQUERADE';
$L['WIREGUARD_INSTALL_POSTDOWN_RULE_LABEL']   = 'Post-Down 规则';
$L['WIREGUARD_INSTALL_POSTDOWN_RULE_PH']      = 'iptables -D FORWARD -i %i -j ACCEPT; iptables -t nat -D POSTROUTING -o ' . $network_interface . ' -j MASQUERADE';
$L['PROCESSING_COMPLETE_INSTALLER']           = '处理完成';
$L['TAP_TO_UNDO_INSTALLER']                   = '单击可撤消';

/* **********************************
 * #3.2.5 - service control
 ************************************/
$L['ACTIVE_STATUS']   = '正在运行';
$L['APP_KEY']         = 'API 密钥';
$L['APP_PORT']        = '端口';
$L['APP_STATUS']      = '状态';
$L['INACTIVE_STATUS'] = '未运行';

/* **********************************
 * #3.2.6 - rclone specific toggles
 ************************************/
$L['ACTIVE_MOUNTED']             = '活动 ( 已安装 ) ';
$L['INACTIVE_NOTMOUNTED']        = '已死 ( 未安装 ) ';
$L['RCLONE_OPTIONS']             = 'RClone选项';
$L['RCLONE_LOG_VIEWER']          = 'RClone move.log';
$L['RCLONE_COMMAND_CENTER']      = 'RClone 指挥中心';
$L['RCLONE_STATUS']              = 'RClone状态';
$L['RCLONE_UPLOAD_MESSAGE']      = 'RClone当前正在后台运行，以将数据上传到 gdrive。在这段时间内，您会看到一个锁定位置，以确认您的过程已开始。该过程完成后，此锁将自行删除。随时关闭此弹出窗口。<br><br/><div class="alert alert-notice" style="color:#fff"><strong>注意: </strong> 服务器每天晚上 03:12 AM 通过 cronjob 自动运行上传。</div>';
$L['RCLONE_UPLOAD_VIEWER']       = 'RClone上传';
$L['RCMOUNT_STATUS']             = 'MergerFS状态';
$L['RCMOUNT_WHERE']              = '安装位置';
$L['CLOUD_MANAGEMENT']           = '云软件';
$L['RCLONE_MOUNT_INFO']          = 'RClone 安装信息';
$L['RCLONE MOUNT CHECK_PROCESS'] = '当前正在后台计算空间百分比值。请稍后再回来查看更新的结果。';

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
$L['DELUGE_TORRENTS']       = '个种子被 Deluge 加载';
$L['DISK_%_1']              = '您已使用';
$L['DISK_%_2']              = '的磁盘空间';
$L['DISK_SPACE']            = '磁盘空间';
$L['FREE']                  = '空闲';
$L['QBITTORRENT_TORRENTS']  = '个种子被 qBittorrent 加载';
$L['RT_TORRENTS']           = '个种子被 rTorrent 加载';
$L['NO_CLIENTS']            = '目前没有安装 torrent 或 nzb 客户端';
$L['SIZE']                  = '总大小';
$L['THERE_ARE']             = '总计有';
$L['TRANSMISSION_TORRENTS'] = '个种子被 Transmission 加载';
$L['USED']                  = '已使用';
$L['YOUR_DISK_STATUS']      = '磁盘状态';
$L['NZBGET_NZB']            = 'NZBGet 中加载的 nzb';
$L['SABNZBD_NZB']           = 'nzb 在 SABnzbd 中加载';

/* **********************************
 * #3.3.2 - System Index v1 : bandwidth data widget
 ************************************/
$L['BANDWIDTH_DATA']     = '带宽数据';
$L['BANDWIDTH_DAILY']    = '每日';
$L['BANDWIDTH_HOURLY']   = '每小时';
$L['BANDWIDTH_LIVE']     = '实时';
$L['BANDWIDTH_MONTHLY']  = '每月';
$L['datefmt_days_img']   = '%d';
$L['datefmt_days']       = '%d %B';
$L['datefmt_hours_img']  = '%l';
$L['datefmt_hours']      = '%l%p';
$L['datefmt_months_img'] = '%b';
$L['datefmt_months']     = '%B %Y';
$L['datefmt_top']        = '%d %B %Y';
$L['NETWORK']            = '网络';
$L['DOWNLOAD']           = '下载';
$L['UPLOAD']             = '上传';

/* **********************************
 * #3.3.3 - System Index v1 : server load widget
 ************************************/
$L['SERVER_LOAD'] = '服务器负载';
$L['SL_TXT']      = '您服务器当前负载的平均值';
$L['UPTIME']      = '运行时间';
$L['DAYS_L']      = '天';
$L['HOURS_L']     = '小时';
$L['MINUTES_L']   = '分钟';
$L['SECONDS_L']   = '秒';

/* **********************************
 * #3.3.4 - System Index v1 : memory status widget
 ************************************/
$L['CACHED_MEMORY']     = '高速缓存使用情况';
$L['CLEAR_CACHE']       = '清除缓存';
$L['CM_BUFFERS']        = '已缓冲';
$L['CM_USAGE']          = '高速缓存已使用';
$L['PHYSICAL_MEMORY']   = '物理内存使用情况';
$L['PM_IDLE']           = '空闲';
$L['PM_USED']           = '已使用';
$L['REAL_MEMORY']       = '实际内存使用情况';
$L['RM_FREE']           = '实际内存空闲';
$L['RM_USAGE']          = '实际内存已使用';
$L['SWAP_IDLE']         = '空闲';
$L['SWAP_TOTAL']        = '总计';
$L['SWAP_USAGE']        = 'Swap 使用情况';
$L['SWAP_USED']         = '已使用';
$L['SWAP_ZONE']         = 'SWAP 区';
$L['SYSTEM_RAM_STATUS'] = '系统内存状态';
$L['TOTAL_RAM']         = '系统内存总计';
$L['TOTAL']             = '总计';

/* **********************************
 * #3.3.5 - server activity widget
 ************************************/
$L['ACC_REQ_ACT']          = '帐户需要激活';
$L['GUESTS_ONLINE']        = '客人在线';
$L['LAST_ACTIVE_ON']       = '最后一次活跃于';
$L['LOGGED_ON']            = '登录';
$L['MEMBERS']              = '成员';
$L['RECORD_ONLINE']        = '在线记录用户';
$L['CURRENT_USERS_ONLINE'] = '目前在线的用户';
$L['THERE_ARE_AW']         = '有';
$L['THERE_ARE_CURRENTLY']  = '目前有';
$L['USERS_AND']            = '用户和';
$L['USERS_LAST_VISIT']     = '自你上次访问以来，已有新用户注册';
$L['CLEAR']                = '清除';

/* ********************************************************************************
 * #4 PAGES
 *
 * #4.1 - START SCREEN FORMS (login/forgot pass/register/account)
 *
 * #4.1.1 - LOGIN
 ************************************/
$L['CREATE_ACCOUNT']           = '创建账户';
$L['REMEMBER_ME']              = '记住我';
$L['FORGOT_PASS']              = '忘记密码?';
$L['LOG_IN']                   = '登录';
$L['CONFIRM_PASS_FIELD_PLACE'] = '请确认您的电子邮件地址。';
$L['LOGIN_ACCOUNT']            = '登录您的账户，继续。';
$L['LOGIN_USERNAME_INVALID']   = '登录无效。请检查您的用户名，然后重试';
$L['LOGIN_PASSWORD_INVALID']   = '登录无效。请检查您的密码，然后再试一次';
$L['LOGIN_MISSING_USERNAME']   = '未输入用户名';
$L['LOGIN_MISSING_PASSWORD']   = '未输入密码';
$L['PASS_FIELD_INVALID']       = '请提供您的密码。';
$L['PASS_FIELD_PLACE']         = '请输入你的密码。';
$L['PASS_FIELD_VALID']         = '提供密码，验证准备就绪。';
$L['REGISTRATION_DISABLED']    = '注册目前是禁用的。';
$L['SIGN_IN']                  = '登入';
$L['UNREGISTERED']             = '没有注册?';
$L['USER_FIELD_INVALID']       = '请提供您的用户名。';
$L['USER_FIELD_PLACE']         = '请输入你的用户名。';
$L['USER_FIELD_VALID']         = '用户名已提供，验证准备就绪。';
$L['ACCOUNT_BANNED']           = '您的帐户已被禁止。<br>请联系系统管理员。';
$L['ACCOUNT_DISABLED']         = '您的帐户未激活或被禁用。<br>如果您认为这是一个问题，请联系系统管理员。';
$L['ACCOUNT_INACTIVE_ADMIN']   = '您的帐户尚未被管理员激活。';
$L['ACCOUNT_INACTIVE_EMAIL']   = '您的帐户尚未激活。<br>请查看您的电子邮件以获取激活链接。';
$L['IP_BANNED']                = '您的 IP 地址已被禁止。<br>请联系系统管理员。';

/* **********************************
 * #4.1.2 - FORGOT PASSWORD
 ************************************/
$L['EMAIL_FIELD_INVALID']      = '请提供您的电子邮件。';
$L['EMAIL_FIELD_PLACE']        = '请键入您的电子邮件地址。';
$L['EMAIL_FIELD_VALID']        = '已提供电子邮件，验证准备就绪。';
$L['PASS_GENERATED']           = '新密码已生成!';
$L['PASS_GENERATED_INFO']      = '您的新密码已经生成并发送至与您的账户相关的电子邮件中。';
$L['PASS_GENERATED_FAIL']      = '新密码失败!';
$L['PASS_GENERATED_FAIL_INFO'] = '向您发送新密码的电子邮件时出现了错误，所以您的密码没有被修改。';
$L['RECOVER_INFO']             = '请输入您的电子邮件，我们将向您发送说明!';
$L['RECOVER']                  = '密码恢复';
$L['PASSWORD_RESET']           = '密码重置';
$L['CONFIRM_PASSWORD']         = '确认密码';

/* **********************************
 * #4.1.3 - REGISTER
 ************************************/
$L['ACCOUNT_CREATED']           = '您的账户已被创建。';
$L['ACTIVATED_USER']            = '激活用户 ';
$L['CAN_LOGIN']                 = '为您注册。您现在可以登录了';
$L['CREATED_ADM_ACT']           = '但是，这个论坛需要管理员激活账户。当您的账户被激活后，我们会通过电子邮件通知您。';
$L['CREATED_CHECK_EMAIL']       = '请查看您的电子邮件以了解更多信息';
$L['CREATED_EMAIL_ACT']         = '然而，这个论坛需要账户激活。激活密钥已被发送到您提供的电子邮件地址。';
$L['EMAIL_EMPTY']               = '未输入电子邮件';
$L['EMAIL_INVALID']             = '电子邮件无效';
$L['EMAIL_MATCH']               = '电子邮件地址不匹配';
$L['EMAIL_TAKEN']               = '邮箱地址已经注册';
$L['RCONF_EMAIL_FIELD_INVALID'] = '这个电子邮件与之前输入的电子邮件不一致。请再试一次。';
$L['RCONF_EMAIL_FIELD_VALID']   = '电子邮件匹配，验证准备就绪。';
$L['RCONF_PASS_FIELD_INVALID']  = '这个密码与之前输入的密码不一致。请再试一次。';
$L['RCONF_PASS_FIELD_VALID']    = '密码匹配，验证准备就绪。';
$L['REG_C_DISABLED_INFO1']      = '但该网站的注册目前是禁用的';
$L['REG_C_DISABLED_INFO2']      = '请稍后再试，或联系服务器所有者';
$L['REG_C_DISABLED']            = '注册目前已被禁用';
$L['REG_DISABLED_INFO']         = '我们很抱歉，但目前注册是无效的。请在以后的时间再试。';
$L['REG_DISABLED']              = '注册已被禁用';
$L['REG_FORM_INFO']             = '请填写下面的表格来创建一个账户';
$L['REGISTERED_TXT']            = '已注册！';
$L['REG_FAILED']                = '注册失败';
$L['REG_ERROR_INFO_1']          = '很抱歉，出现错误，您注册的用户名';
$L['REG_ERROR_INFO_2']          = ' 无法完成。请稍后再试。';
$L['SORRY']                     = '我们很抱歉';
$L['THANKS']                    = '谢谢你';
$L['USERNAME_EMPTY']            = '未输入用户名';
$L['USERNAME_BELOW']            = '下面的用户名';
$L['USERNAME_ABOVE']            = '上面的用户名';
$L['CHARACTERS']                = '字符';
$L['USERNAME_REQUIREMENTS']     = '用户名不符合要求';
$L['USERNAME_WORD_RESERVED']    = '用户名保留字';
$L['USERNAME_TAKEN']            = '用户名已被使用';
$L['USERNAME_DISALLOWED']       = '用户名不允许';
$L['REG_IP_BANNED']             = 'IP地址被禁止';
$L['PASSWORD_EMPTY']            = '未输入密码';
$L['PASSWORD_SHORT']            = '密码太短';
$L['PASSWORD_LONG']             = '密码太长';
$L['PASSWORD_MATCH']            = '密码不匹配';
$L['QUOTA_EMPTY']               = '未输入磁盘配额';

/* **********************************
 * #4.1.4 - ACCOUNT
 ************************************/
$L['ADMIN_EDIT_ACC'] = '管理员编辑账户';
$L['EDIT_ACCOUNT']   = '编辑账户';
$L['USER_LINKS']     = '用户链接';
$L['ADMIN_LINKS']    = '管理员链接';
$L['Q_APP_DASH']     = 'QuickBox应用程序仪表板';
$L['Q_SYS_DASH']     = 'QuickBox系统仪表板';
$L['RESET_PASS']     = '重置密码';
$L['RESET_PASSWORD'] = '重置你的密码';
$L['USER_PROFILE']   = '用户个人信息';
$L['PWD_CHANGE']     = '密码已更改';
$L['EMAIL_CHANGE']   = '电子邮件已更改';

/* **********************************
 * #4.1.4.1 - quotes
 ************************************/
$L['HEY']                 = '嗨';
$L['DAYUM']               = '嗨';
$L['SO_GLAD']             = '很高兴在这里见到你';
$L['HOW_AWESOME']         = '你怎么这么棒？';
$L['LOOK_GOOD']           = '看起来不错';
$L['WITHOUT_YOU']         = '很高兴见到你';
$L['QUICKBOX_DEDICATION'] = '欢迎使用 QuickBox!';

/* **********************************
 * #4.1.4.2 - edit account modal
 ************************************/
$L['CONFIRM_NEW_PASS_INFO'] = '请确认您的新密码。';
$L['CURRENT_PASS']          = '当前密码';
$L['NEW_EMAIL']             = '新的电子邮件地址';

/* **********************************
 * #4.1.5 - SUMMARY
 ************************************/
$L['AWESOME']             = '真棒';
$L['WITH_PASSWORD']       = '有密码';
$L['USER_ADDED_TO_DB']    = '已被添加到数据库中';
$L['RETURN_PREVIOUS']     = '返回前页';
$L['REGI_FAIL']           = '注册失败';
$L['REGI_FAIL_ERR1']      = '我们很抱歉，但发生了一个错误，您的注册用户名为';
$L['REGI_FAIL_ERR2']      = '无法完成';
$L['REGI_FAIL_ERR3']      = '请再试一次';
$L['REGI_FAIL_ERR_FOUND'] = '发现错误';

/* **********************************
 * #4.2 - SETTINGS
 *
 * #4.2.1 - GENERAL SETTINGS
 ************************************/
$L['ACCOUNT_PAGE']                      = '账户页面';
$L['ACTION_NOT_EXECUTED']               = '操作未执行。';
$L['ACTIVATION_IP']                     = '激活 IP';
$L['ACTIVATION_NEED_D_DO']              = '在这里搞定!';
$L['ACTIVATION_NEED_D']                 = '需要取消激活?';
$L['ACTIVATION_NEED_G_GET']             = '在这里获取!';
$L['ACTIVATION_NEED_G']                 = '需要一个 API 密钥?';
$L['ACTIVATION_TIME']                   = '激活时间';
$L['ADD_DASH_SETTINGS']                 = '其他仪表板设置';
$L['ADMIN_HOME']                        = '主页';
$L['API_ACTIVE']                        = '已激活';
$L['API_KEY']                           = 'API 密钥';
$L['API_NOT_ACTIVE']                    = '未激活';
$L['API_PLACE']                         = '再此输入 API 密钥...';
$L['API_SETTINGS']                      = 'API 控制';
$L['API_STATUS']                        = 'API 状态';
$L['API']                               = 'API';
$L['BANDWIDTH_RESET_STATS']             = '重置带宽统计信息';
$L['BANDWIDTH_RESET_STATS_TOOLTIP']     = '这将重置收集的所有带宽统计信息。此操作不可逆，将有效删除当前 vnStat 数据库并创建新数据库。新数据将在 5 分钟内开始重新填充数据库。<br/><br/>当前 vnStat 数据库的备份将存储在：<code>/opt/quickbox/backup/system/[Y-m-d_H-M-S]/vnstat/vnstat.db</code>';
$L['BANDWIDTH_RESET_STATS_DB_TOOLTIP']  = '单击刷新当前数据库大小。此操作在页面加载时完成，但如果重置较大的数据库，则可用于反映大小。<br/><br/><em>注意：这不会影响存储在数据库中的数据。它只会更新已发布的数据库大小。</em>';
$L['BANDWIDTH_START_DATE']              = '带宽开始日期';
$L['BANDWIDTH_START_DATE_TOOLTIP']      = '选择带宽监控的开始日期。所选日期将每月重复一次，非常适合从特定日期（如 ISP 重置或服务器设置）进行跟踪。<br/>这适用于系统仪表板上显示的总数。<br/><br/><em>注意：现有数据将不受影响。</em>';
$L['CALCULATING']                       = '正在计算...';
$L['CONF_SETTINGS']                     = '站点设置';
$L['CONFIRM_RESET_BANDWIDTH_TITLE']     = '确认带宽重置';
$L['CONFIRM_RESET_BANDWIDTH_SUBTEXT']   = '重置带宽统计信息将删除当前的 vnStat 数据库并创建一个新的数据库。<br/><div class=\'mt-3 p-3\' style=\'text-align:left;background:var(--qb-color-26);border-radius:6px;\'><p style=\'font-size:13px;color:var(--qb-color-5)\'>将使用以下详细信息创建当前数据库的备份：</p><ul class=\'mb-0\'><li class=\'mb-2\'>目录：<br/><code>/opt/quickbox/backup/system/[Y-m-d_H-M-S]/vnstat/</code></li><li>文件名：<br/><code>vnstat.db</code></li></ul></div><br/>您确定要继续吗？';
$L['DASH_URL_SETTINGS']                 = '仪表盘 URL 设置';
$L['DEFAULT_PAGE']                      = '默认主页';
$L['DISK_MOUNT']                        = '磁盘挂载点';
$L['EDIT_GEN_SETTINGS']                 = '编辑常规设置';
$L['EMAIL_FROM_ADDR']                   = '站点邮件地址';
$L['EMAIL_FROM_NAME']                   = '站点邮件标识';
$L['EMAIL_SETTINGS']                    = '电子邮件设置';
$L['ERROR']                             = '错误';
$L['LOADING']                           = '正在加载...';
$L['LOGIN_PAGE']                        = '登录页面';
$L['NET_ADAPTER']                       = '网络接口';
$L['PHP_DATE_FORMAT']                   = 'PHP 日期格式';
$L['PHP_FORMAT_SETTINGS']               = 'PHP 格式设置';
$L['PHP_TIME_ZONE']                     = 'PHP 时区';
$L['RESET_BANDWIDTH_CANCEL']            = '否，取消';
$L['RESET_BANDWIDTH_CANCELLED']         = '带宽重置已取消';
$L['RESET_BANDWIDTH_CONFIRM']           = '是，重置';
$L['RESET_BANDWIDTH_STATS']             = '重置带宽统计';
$L['SITE_DESC']                         = '站点描述';
$L['SITE_META_SETTINGS']                = '站点元设置';
$L['SITE_NAME']                         = '站点名称';
$L['SITE_ROOT']                         = '站点根目录';
$L['SITE_NAME_TOOLTIP']                 = '网站名称应少于 40 个字符，只能是字母数字，不能有特殊字符 ( 可以有空格 ) ';
$L['SITE_DESC_TOOLTIP']                 = '网站描述应少于 120 个字符和字母数字，没有特殊字符 (空格是可以接受的)';
$L['EMAIL_FROM_NAME_TOOLTIP']           = 'From Name 应该少于 60 个字符，只有字母数字，没有特殊字符 (空格是可以接受的)';
$L['SITE_ROOT_TOOLTIP']                 = '输入您的服务器 IP 或有效域，不带尾部正斜杠。示例: https://192.168.0.1 (或) https://somedomain.com';
$L['SITE_LOGO_COLLAPSED']               = '折叠徽标';
$L['SITE_LOGO_FULL']                    = '完整标志';
$L['SITE_LOGO_SETTINGS']                = '站点徽标设置';
$L['SITE_LOGO_COLLAPSED_TOOLTIP']       = '这是侧边栏折叠时将显示的徽标，将用作浏览器标签图标。';
$L['SITE_LOGO_FULL_TOOLTIP']            = '这是侧边栏展开时将显示的徽标。';
$L['UNEXPECTED_ERROR']                  = '发生意外错误。';
$L['UNKNOWN_ERROR']                     = '发生未知错误。';
$L['VNSTAT_DATABASE_DELETE_SUCCESSFUL'] = 'vnStat 数据库已成功删除。';
$L['VNSTAT_DATABASE_DELETE_FAILED']     = '无法删除 vnStat 数据库。';
$L['VNSTAT_DATABASE_DELETE_INVALID']    = '请求无效。';

/* **********************************
 * #4.2.2 - EMAIL SETTINGS
 ************************************/
$L['SMTP_AUTH']     = '启用 SMTP 身份验证';
$L['SMTP_SECURE']   = '启用 SSL 加密，端口 465 也接受 TLS';
$L['MAIL_HOST']     = '设置 SMTP 服务器以通过发送';
$L['MAIL_PORT']     = '要连接的 TCP 端口';
$L['MAIL_USERNAME'] = 'SMTP 用户名';
$L['MAIL_PASS']     = 'SMTP 密码';

/* **********************************
 * #4.2.3 - SESSION SETTINGS
 ************************************/
$L['CHANGE_SESSION_SETTINGS'] = '更改会话相关设置。';
$L['COOKIE_EXPIRY']           = '\'记住我\' Cookie 有效期';
$L['COOKIE_PATH']             = 'Cookie 路径';
$L['DAYS']                    = '天';
$L['GUEST_TIMEOUT']           = '访客超时';
$L['MINUTES']                 = '分钟';
$L['RESET_EXPIRY']            = '登陆时重置有效期';
$L['USER_TIMEOUT']            = '用户会话超时';

/* **********************************
 * #4.2.4 - USER SETTINGS
 ************************************/
$L['ALLOW_MULTI_LOGINS']                   = '多次登录';
$L['ALLOW_MULTI_LOGINS_DESC']              = '此选项允许从多个设备同时登录。如果禁用，用户从新设备登录时将从所有其他设备注销。';
$L['ALLOW_CONFIG_EDITING']                 = '在仪表板上配置编辑器';
$L['ALLOW_CONFIG_EDITING_DESC']            = '此选项允许从仪表板编辑配置文件。如果禁用，查看/编辑配置的选项将被隐藏。';
$L['ALLOW_MOUNT_INFO']                     = '安装监控和添加面板';
$L['ALLOW_MOUNT_INFO_DESC']                = '此选项允许用户从仪表板查看和添加用于监控的目录。 如果禁用，查看和添加目录的功能将被隐藏。';
$L['ALLOW_AUTOBACKUP_APP_ON_INSTALL']      = '安装时自动备份应用程序';
$L['ALLOW_AUTOBACKUP_APP_ON_INSTALL_DESC'] = '此选项允许在安装应用程序时自动完整备份应用程序。 如果禁用，应用程序在安装时将不会进行备份。 <span style="color:var(--qb-color-41);">无论此设置如何，都将备份应用程序配置文件。</span><br>备份存储在：<br><code>/home/[用户名]/.QuickBox/software/</code>';
$L['BY_ADMIN']                             = '管理员设定 (见下方..)';
$L['BY_USER']                              = '用户设定 (查看用户管理页面)';
$L['CHANGE_USER_SETTINGS']                 = '更改用户帐户的全局设置。';
$L['EXCLUDE_ADMINS']                       = '排除管理员';
$L['EXCLUDE_REDIRECTED_ADMINS']            = '对管理员禁用重定向。';
$L['GEN_USER_SETTINGSTINGS']               = '一般用户设置';
$L['HOW_SET']                              = '它们将被如何设定?';
$L['INDIV_USER_HOME']                      = '个人用户主页';
$L['INDIVIDUAL_USER_FOLDERS']              = '个人用户文件夹';
$L['PATH_ADMIN']                           = '路径 (由管理员设置)';
$L['SITE_ROOT_RELATIVE']                   = '相对于站点根目录';
$L['SETTING']                              = '设置';
$L['DESCRIPTION']                          = '描述';
$L['VALUE']                                = '价值';

/* **********************************
 * #4.2.5 - SECURITY SETTINGS
 ************************************/
$L['BAN_IP_ADDRESS']       = '阻止 IP 地址';
$L['BAN_IP_INFO']          = '例如 192.168.0.1 第一位非零';
$L['BAN_IP_REGISTER']      = '阻止 IP 地址注册 (或登录)';
$L['BANNED_IP_ADDRESSES']  = '已阻止的 IP 地址';
$L['DISALLOW_USERNAME']    = '禁用的用户名';
$L['DISALLOWED_USERNAME']  = '不允许的用户名';
$L['DISALLOW_USERNAMES']   = '禁用用户名';
$L['DISALLOWED_USERNAMES'] = '已禁用的用户名';
$L['PREVENT_USERNAMES']    = '防止用户名被注册';

/* **********************************
 * #4.3 - USER MANAGEMENT
 *
 * #4.3.1 - REGISTRATION SETTINGS
 ************************************/
$L['ACCOUNT_ACTIVATION']           = '账户激活设定';
$L['ADMIN_ACT']                    = '管理员手动激活';
$L['ADMIN_ACT_INFO']               = '选择此选项时，注册后将告知用户必须等待管理员激活帐户。用户也将收到一封这样的电子邮件，管理员也将可以选择使用电子邮件中提供的链接激活用户或访问管理面板并在那里激活用户';
$L['ALPHANUMERIC_ONLY']            = '仅限字母数字';
$L['ALPHANUMERIC_SPACERS']         = '字母数字及空格';
$L['ANY_CHARS']                    = '任何字符';
$L['ANY_LETTER_NUM']               = '任何符号字母和数字';
$L['DEFAULT_QUOTA_ALLOWANCE']      = '默认配额津贴';
$L['DEFAULT_QUOTA_ALLOWANCE_INFO'] = '为创建的新帐户设置默认配额。此值仅在安装 Linux Quota 包时使用。';
$L['DISABLE_REGISTRATION']         = '禁用注册';
$L['DISABLE_REGISTRATION_INFO']    = '这将禁用注册。注册表不显示，取而代之的是信息性消息。';
$L['ENABLE_CAPTCHA']               = '启用 Captcha';
$L['LETTER_NUM_AND_SPACE']         = '任何符号字母和数字空格';
$L['LIMIT_CHAR']                   = '限制用户名字符';
$L['NO_ACTIVATION']                = '无需激活 (立即访问)';
$L['NO_ACTIVATION_INFO']           = '设置此选项允许用户正常注册，无需任何额外的激活过程。';
$L['PASSWORD_LENGTH']              = '密码长度';
$L['RECOMMENDED']                  = 'QuickBox推荐';
$L['REG_SETTINGS_INFO']            = '更改有关站点注册的设置。';
$L['REG_SETTINGS']                 = '注册设置';
$L['SEND_WELCOME_EMAIL']           = '发送欢迎电子邮件';
$L['SEND_WELCOME_EMAIL_YES_INFO']  = '将此选项设置为是会向用户以及系统管理员发送欢迎电子邮件。此选项需要 SMTP 设置才能正确发送电子邮件。这些选项可以在 <a href="/email-settings.php" style="color: var(--qb-color-29);text-decoration: underline;">电子邮件设置</a>页面上进行控制。';
$L['SEND_WELCOME_EMAIL_NO_INFO']   = '将此选项设置为否将不会向新注册的用户发送欢迎电子邮件。所有用户创建/注册都保持静默，就像在 CLI 环境中创建用户一样。';
$L['USER_ACT']                     = '用户激活 (电子邮件验证)';
$L['USER_ACT_INFO']                = '设置此选项要求用户通过单击发送到其注册电子邮件地址的链接来激活其帐户。';
$L['USERNAME_LENGTH']              = '用户名长度';
$L['USERNAME_LOWERCASE']           = '强制用户名小写';
$L['USERNAME_LOWERCASE_YES_INFO']  = '将此选项设置为是会将所有新注册的用户名更改为小写。这是推荐的选项。';
$L['USERNAME_LOWERCASE_NO_INFO']   = '将此选项设置为否不会将新注册的用户名更改为小写。用户名将在注册时出现，但将在服务器环境中保持小写以确保软件功能正常。';

/* **********************************
 * #4.3.2 - USER ADMINISTRATION
 ************************************/
$L['ADMIN_ANNOUNCE']        = '管理员公告';
$L['ANNOUNCEMENT_LIST']     = '公告内容';
$L['AWAITING_ADMIN']        = '等待管理员激活';
$L['AWAITING_EMAIL']        = '等待电子邮件激活';
$L['BANNED']                = '被禁止';
$L['CU_CONFIRM_EMAIL']      = '确认电子邮件';
$L['CU_CONFIRM_PASS_INFO']  = '请确认您的密码';
$L['CU_CONFIRM_PASSWORD']   = '确认密码';
$L['CU_DISK_QUOTA']         = '磁盘配额:';
$L['CU_GROUP']              = '组';
$L['CU_EMAIL']              = '电子邮件';
$L['CU_NEW_PASS_INFO']      = '请输入您的新密码';
$L['CU_NEW_PASSWORD']       = '新密码';
$L['CU_SHELL_ENV']          = '首选的外壳环境';
$L['CURRENT_SHELLS']        = '目前的壳牌';
$L['CURRENT_USERS']         = '当前用户';
$L['DEFAULT_GROUP_TAG']     = '默认';
$L['DELETED_ALL_SESSIONS']  = '删除了所有会话';
$L['DISK_STATUS']           = '磁盘状态';
$L['EDIT_USER_SHELL']       = '编辑用户的外壳环境';
$L['EXPIRY']                = '登录有效期至';
$L['HAS_USED']              = '已使用';
$L['IP_ADDRESS']            = 'IP 地址';
$L['LAST_IP_ADDRESS']       = '最后一个 IP 地址';
$L['LAST_LOGIN']            = '上次登录';
$L['LAST']                  = '最后的';
$L['OF_QUOTA']              = '的总配额';
$L['MEMBER_STATUS']         = '会员身份';
$L['MEMBER_GROUP']          = '会员组';
$L['RECENTLY_ONLINE']       = '近期在线';
$L['REGISTERED_DISK_QUOTA'] = '磁盘配额';
$L['REGISTERED']            = '已注册';
$L['REGISTRATION_LOGIN']    = '注册与登录';
$L['STATISTICS']            = '统计';
$L['USER_ACTIVITY']         = '用户行为';
$L['PASSWORD_NOTICE']       = '密码不应包含以下字符';
$L['USER_QUOTA_HELP']       = '输入你想分配给用户的磁盘空间的数量。必须安装配额才能使用这个选项';
$L['USER_SHELL_HELP']       = '选择上面的下拉菜单，将用户添加到一个壳中。';
$L['USERNAME_ADMIN_USER']   = '用户名:';
$L['USERNAMES']             = '用户名';
$L['USERS_AWAITING']        = '等待激活的用户';
$L['USERS_SESSIONS']        = '用户会话';
$L['VIEW']                  = '查看';

/* **********************************
 * #4.3.2.1 - admin user edit
 ************************************/
$L['ACTIONS']                 = '动作';
$L['ACTIVE_SESSION']          = '活动会话';
$L['APPLICATION']             = '应用领域';
$L['BANNED_USER']             = '被禁止的用户';
$L['CURRENT_FULL_PATH']       = '当前的完整路径';
$L['CURRENT_GROUPS']          = '当前用户组';
$L['CURRENT_STATUS']          = '当前状态';
$L['EDIT_DEFAULT_GROUP']      = '默认组';
$L['EDIT_DEFAULT_GROUP_INFO'] = '选择此选项后，会将其设置为默认组。这在通过 CLI 创建用户并希望将自定义组作为默认分配时很有用。';
$L['EDIT_GROUP_MEMBERSHIP']   = '编辑用户的用户组成员';
$L['EU_PATH']                 = '路径';
$L['GENERAL_INFO']            = '常规信息';
$L['GROUP_MEMBERSHIP_HELP']   = '点击下方文本框为用户添加更多用户组...';
$L['GROUP_MEMBERSHIP']        = '用户组成员';
$L['HOMEPAGE']                = '主页';
$L['INSTRUCTIONS']            = '说明';
$L['LAST_ACTIVE_IP']          = '最后活跃的 IP';
$L['LAST_ACTIVE']             = '最后活跃';
$L['LAST_UPDATE']             = '最后更新于';
$L['PERSISTENT']              = '持久化';
$L['REGISTERED_IP']           = '注册 IP';
$L['SELECT_GROUP']            = '选择组';
$L['SESSION_EXPIRY']          = '会话有效期';
$L['STATUS']                  = '状态';
$L['UNBANNED_USER']           = '取消禁止的用户';
$L['UNIQUE_USER_HP_SETTINGS'] = '唯一用户主页 - 设置';
$L['USER_EDIT1']              = '编辑用户 :';
$L['USER_EDIT2']              = '编辑用户';

/* **********************************
 * #4.3.2.2 - admin announce
 ************************************/
$L['ENABLE_USER_ANNOUNCE']         = '启用仪表板公告';
$L['ANNOUNCMENT_HISTORY']          = '您之前的公告';
$L['TYPE']                         = '类型';
$L['USER']                         = '用户';
$L['TIME']                         = '时间';
$L['ANNOUNCMENT_LIST']             = '公告内容';
$L['GLOBAL_USER_ANNOUNCMENT']      = '全局（所有用户）';
$L['CREATE_DASHBOARD_ANNOUNCMENT'] = '创建仪表板公告';
$L['GLOBAL_ANNOUNCMENT']           = '全球公告';
$L['GLOBAL_ANNOUNCMENT_INFO']      = '选择此选项将创建一个在每个用户的仪表板上可见的全局公告，无论其组成员身份如何。 如果您已经向用户分配了公告，则该公告将与此全局公告一起显示。';
$L['SELECT_USER']                  = '选择用户：';
$L['SELECT_ANNOUNCMENT_TYPE']      = '公告类型：';
$L['EDIT_DASHBOARD_ANNOUNCMENT']   = '编辑仪表板公告';
$L['EDIT_ANNOUNCMENT_INFO']        = '编辑并保存现有公告将重置其在指定用户仪表板上的可见性。 如果公告是全局性的，它还将重置所有用户仪表板上的查看历史记录。';
$L['ANNOUNCMENT_ID']               = '公告 ID';
$L['ANNOUNCMENT_TYPE']             = '公告类型';
$L['PREVIEW']                      = '预览';

/* **********************************
 * #4.3.3 - USERS GROUPS
 ************************************/
$L['ADMINISTRATORS']               = '管理员';
$L['ASSIGN_LEVEL']                 = '分配组级别：';
$L['CANCELLED']                    = '已取消';
$L['CLICK_HERE']                   = '点击此处...';
$L['CONFIRM_DELETE_GROUP_TITLE']   = '您确定吗？';
$L['CONFIRM_DELETE_GROUP_SUBTEXT'] = '这将删除组并重置组中的所有用户。 确保这些用户被分配到另一个组。';
$L['DELETE_GROUP']                 = '删除组';
$L['DELETED']                      = '已删除';
$L['GROUP_DELETED']                = '该组已被删除，用户组已重置。';
$L['GROUP_DELETE_CANCEL']          = '群组删除已取消。';
$L['GROUP_STAY']                   = '该小组将留下:)';
$L['GROUP_USER_REMOVED']           = '用户已从组中删除。';
$L['GROUP_USER_STAY']              = '用户保留在组中:)';
$L['GROUP_YES']                    = '是的，我确定！';
$L['GROUP_NO']                     = '不，取消！';
$L['EDIT_ADD_USER']                = '添加用户：';
$L['EDIT_GROUP_LEVEL']             = '组级别：';
$L['EDIT_GROUP_NAME']              = '群组名称：';
$L['GROUP_LEVEL']                  = '组级别';
$L['GROUP_NAME']                   = '群组名称';
$L['LEVEL_INFO']                   = '输入 2 - 256 之间的数字';
$L['NEW_GROUP_NAME']               = '新组名称：';
$L['NUMBER_MEMBERS']               = '会员数量';
$L['REMOVED']                      = '已删除';
$L['USER_GROUPS_INFO']             = '创建、查看和编辑用户组。 将用户分配到用户组。';
$L['SOFT_GROUP_ASGMNT']            = '软件组分配';

/* **********************************
 * #4.4 - SYSTEM
 *
 * #4.4.1 - WEB CONSOLE
 ************************************/
$L['WEB_CONSOLE_INFO'] = '访问您的命令行环境。';

/* **********************************
 * #4.4.2 - API CONTROL
 ************************************/
$L['ACTIVATION_INFO_STATS']             = '激活信息统计';
$L['QB_CONTROL_API']                    = 'QB 控制 API';
$L['QB_CONTROL_API_NOTICE']             = 'API 控制键分为两个部分，如下所示。<br>已标记使用示例以说明执行其指定任务所需的特定命令权限级别。随着其他端点和功能的实现，API 使用库将继续接收更新。<br><br/><table><tbody><tr><td style="width:15px;vertical-align:middle;"><span class="badge badge-indicators badge-primary">&nbsp;</span></td><td><em>读取权限密钥</em>仅具有抓取数据的能力。该键无法向 QuickBox 服务器发出操作任务信号。除非您尝试远程控制您的安装，否则只需此键即可。</td></tr><tr><td style="width:15px;vertical-align:middle;"><span class="badge badge-indicators badge-success">&nbsp;</span></td><td><em>写入权限密钥</em>能够执行其他任务，例如更新 QuickBox 安装，管理 主要 api 激活等等。该密钥也适用于读取权限，并且被视为最高特权密钥。对于远程执行服务器的基本管理任务非常有用.</td></tr></tbody></table><br/>请记住像对待密码一样对待您的 API 密钥，切勿共享它们。<br>您可以随时按下面的 <i data-feather="refresh-cw" style="width:14px;"></i> 按钮重新生成新的随机控制键。';
$L['CLOSE_ACKNOWLEDGE']                 = '确认并关闭';
$L['READ_PERM_KEY']                     = '读取权限密钥';
$L['REGENERATE_READ_KEY']               = '重新生成读取密钥';
$L['WRITE_PERM_KEY']                    = '写入权限密钥';
$L['REGENERATE_WRITE_KEY']              = '重新生成写入密钥';
$L['API_SPEC_USAGE']                    = 'API 特定用法';
$L['DISPLAY_CURRENT_API_STAT']          = '显示当前API状态';
$L['EXAMPLE_CODE']                      = '代码：';
$L['EXAMPLE_OUTPUT']                    = '输出：';
$L['ACTIVATE_QUICKBOX_API']             = '激活 QuickBox API 密钥';
$L['DEACTIVATE_QUICKBOX_API']           = '停用 QuickBox API 密钥';
$L['VERSION_SPEC_USAGE']                = '版本特定用法';
$L['DISPLAY_CURRENT_VERSION']           = '显示当前 QuickBox 版本状态';
$L['UPDATE_QUICKBOX_VERSION']           = '更新 QuickBox 版本';
$L['UPDATE_ALERT_NOTICE']               = '如果您的实例已经是最新的，您将看到以下输出';
$L['RUN_FIX_VERSION']                   = '运行版本修复';
$L['USER_SPEC_USAGE']                   = '用户特定用法';
$L['DISPLAY_ALL_USER_INFO']             = '显示所有用户的信息';
$L['DISPLAY_SINGLE_USER_INFO']          = '显示指定用户的信息';
$L['DISPLAY_USER_SOFTWARE']             = '显示指定用户当前安装的软件';
$L['CREATE_SPECIFIED_USER']             = '创建指定用户';
$L['CREATE_SPECIFIED_USER_INFO_NOTICE'] = '如果您想使用现有电子邮件暂存用户并设置配额限额。请注意，电子邮件和配额都是纯粹可选的。如果未输入配额，它将使用<a href="/registration.php" rel="noopener nofollow" target="_blank">此处</a>设置的默认配额。';
$L['DELETE_SPECIFIED_USER']             = '删除指定用户';
$L['BAN_SPECIFIED_USER']                = '禁止指定用户';
$L['UNBAN_SPECIFIED_USER']              = '取消禁止指定用户';
$L['SOFTWARE_SPEC_USAGE']               = '软件特定用法';
$L['DISPLAY_ALL_SOFTWARE']              = '显示所有可供安装的软件应用程序';
$L['DISPLAY_SINGLE_SOFTWARE']           = '显示指定软件的信息';
$L['API_SOFTWARE_NOTICE']               = '要查找有关软件名称（应用程序名称）结构的指南，请参阅用户手册中的 \'软件\' 部分。 您可以通过点击<a href="/help.php#software">此处</a>来访问它。';
$L['API_SOFTWARE_WARNING']              = '请注意，对于某些应用程序，命名约定可能不是正式指定的，而是可能是扩展选项集的一部分。<br><br/>
这是使用 Bazarr4K 的示例：<br>
<pre class="mb-2"><code class="language-json">"bazarr4k": {
    "software_title": "Bazarr4K"，
    "qb_package_name": "bazarr"，
    "qb_options": "--4k"，
    ...</code></pre>
<br/>
请注意以下有关 QuickBox 软件 API 输出的重要信息：
<ul>
<li>通过 QuickBox 访问软件包时，您将始终找到 \'qb_package_name\' 属性。 此属性由 <code>qb</code> 命名约定标记和使用。</li>
<li>此外，每个 API 输出都包含 \'qb_options\' 条目，它提供了有价值的自定义选项。 这些选项之一是 \'4K\' 安装标志，表示为 <code>--4k</code>。</li>
</ul><br/>
例如，如果您打算安装支持 4K 的 \'Bazarr\' ，则应使用以下命令：<br/>
<pre class="mb-0"><code class="language-bash">qb install bazarr --4k -u [USERNAME]</code></pre><br/>
需要注意的是，您不应使用 \'bazarr4k\' 作为包名称，因为 \'qb_options\' 条目旨在有效地处理此类自定义。';
$L['SOFTWARE_SERVICE_STATUS']            = '显示指定软件和用户的状态';
$L['SOFT_STATUS_ACTIVE_NOTICE']          = '如果服务处于活动状态。';
$L['SOFT_STATUS_INACTIVE_NOTICE']        = '如果服务处于非活动状态。';
$L['SOFT_STATUS_NOT_INSTALLED_NOTICE']   = '如果没有为指定用户安装应用程序。';
$L['SOFTWARE_SERVICE_CONTROL']           = '向指定软件和用户发出指定操作信号';
$L['SOFT_CONTROL_ACTION_RESTART_NOTICE'] = '其中 action=restart...';
$L['SOFT_CONTROL_ACTION_START_NOTICE']   = '其中 action=start...';
$L['SOFT_CONTROL_ACTION_STOP_NOTICE']    = '其中 action=stop...';

/* **********************************
 * 4.4.3 - SSL CONTROL
 ************************************/
$L['LETSENCRYPT_DOMAIN']         = '让我们加密域名';
$L['SSL_CONTROL']                = 'SSL控制';
$L['ABOUT_SSL_CONTROL']          = '此功能使您能够轻松为已安装的受支持应用程序生成 SSL 证书。 通过选择 \'是\' 并输入您的域名，您将无缝设置 Nginx 反向代理以及 SSL 证书。';
$L['STAGE_DASHBOARD_SSL']        = '仪表板的阶段 SSL？';
$L['DASHBOARD_SSL_TOOLTIP']      = '要使用 SSL 证书保护您的 QuickBox Dashboard，只需选择 \'是\' 。 此操作不仅会配置 SSL 证书，还会建立必要的 NGinx 设置和链接，从而促进通过您的域安全访问您的仪表板。';
$L['STAGE_OWNED_DOMAIN_SSL']     = '为自有域设置 SSL？';
$L['NON_DASHBOARD_SSL_TOOLTIP']  = '要为您首选的域建立 SSL 证书，请选择 \'是\' 。 此选项设计用于创建附加 SSL 证书。 请确保正确配置该域的相应 DNS 记录，因为此过程专门生成所请求的 SSL 证书。';
$L['STAGE_EMBY_SSL']             = 'Emby 的舞台 SSL？';
$L['EMBY_SSL_TOOLTIP']           = '要使用 SSL 证书保护您的 Emby 安装，只需选择 \'是\' 。 此操作不仅会配置 SSL 证书，还会建立必要的 NGinx 设置和链接，从而促进通过您的域安全访问您的 Emby 安装。';
$L['STAGE_JELLYFIN_SSL']         = 'Jellyfin 的阶段 SSL？';
$L['JELLYFIN_SSL_TOOLTIP']       = '要使用 SSL 证书保护您的 Jellyfin 安装，只需选择 \'是\' 。 此操作不仅会配置 SSL 证书，还会建立必要的 NGinx 设置和链接，以便通过您的域安全访问 Jellyfin 安装。';
$L['STAGE_JELLYSEERR_SSL']       = 'Jellyseerr 的阶段 SSL？';
$L['JELLYSEERR_SSL_TOOLTIP']     = '要使用 SSL 证书保护您的 Jellyseerr 安装，只需选择 \'是\' 。 此操作不仅会配置 SSL 证书，还会建立必要的 NGinx 设置和链接，以便通过您的域安全访问您的 Jellyseerr 安装。';
$L['STAGE_KOMGA_SSL']            = 'Komga 的阶段 SSL？';
$L['KOMGA_SSL_TOOLTIP']          = '要使用 SSL 证书保护您的 Komga 安装，只需选择 \'是\' 。 此操作不仅会配置 SSL 证书，还会建立必要的 NGinx 设置和链接，以便通过您的域安全访问您的 Komga 安装。';
$L['STAGE_OVERSEERR_SSL']        = 'Overseerr 的阶段 SSL？';
$L['OVERSEERR_SSL_TOOLTIP']      = '要使用 SSL 证书保护您的 Overseerr 安装，只需选择 \'是\' 。 此操作不仅会配置 SSL 证书，还会建立必要的 NGinx 设置和链接，从而促进通过您的域安全访问您的 Overseerr 安装。';
$L['STAGE_PLEX_SSL']             = 'Plex 的阶段 SSL？';
$L['PLEX_SSL_TOOLTIP']           = '要使用 SSL 证书保护您的 Plex 安装，只需选择 \'是\' 。 此操作不仅会配置 SSL 证书，还会建立必要的 NGinx 设置和链接，以便通过您的域安全访问您的 Plex 安装。';
$L['DOMAIN']                     = '领域';
$L['SSL_ALREADY_INSTALLED']      = '请注意，已经为此选项安装了 SSL 证书。 通过输入下面的新域来重新安装证书将重置当前的 NGinx 反向配置，删除之前的证书，并重置当前设置的链接访问权限。';
$L['SSL_SUBMIT']                 = '安装 SSL 证书';
$L['SSL_CERTIFICATE_STATUS']     = 'SSL 证书状态';
$L['SSL_STATUS_MONITOR_TOOLTIP'] = '监控现有 SSL 证书的状态，并能够执行两个关键操作：删除或强制续订。 对于与 Emby、Jellyfin、Jellyseerr、Komga、Overseerr 和 Plex 等受支持应用程序关联的证书，删除证书还将触发相应域的 Nginx 反向代理的删除和重新配置。<br><br>您可以无缝地 使用以下选项删除证书，然后在上面选择所需的应用程序以启动新子域和证书的安装。 这种简化的流程可确保您的 SSL 证书管理具有最大的灵活性和控制力。';
$L['CERTS_STORED_AT']            = '受监控的证书存储在';
$L['CERT_ACTIVE']                = '到期：';
$L['CERT_EXPIRES']               = '到期：';
$L['CERT_EXPIRED']               = '已到期';
$L['CERT_RENEW']                 = '更新证书';
$L['CERT_DELETE']                = '删除 SSL 证书和任何其他配置。 此操作不可逆转。';
$L['CERT_DELETE_CONFIRM']        = '您确定要删除此证书吗？';
$L['NO_CERTS_INSTALLED']         = '目前没有安装和/或监控 SSL 证书。';

/* **********************************
 * #4.4.4 - VPN CONTROL
 ************************************/
$L['ABORT']                            = '中止';
$L['ACTIVE']                           = '活动';
$L['ADD_PEER']                         = '添加对等配置';
$L['CANCEL']                           = '取消';
$L['CITY']                             = '城市';
$L['COUNTRY']                          = '国';
$L['CURRENT_IP']                       = '服务器 IP';
$L['CURRENT_PEER_LIST']                = '当前同行名单';
$L['DATE_ADDED']                       = '添加时间';
$L['DELETE_PEER']                      = '删除同行配置文件？';
$L['DRAG_DROP_FILES']                  = '拖放对等配置文件或<span class="filepond--label-action">点击浏览</span>';
$L['HOST']                             = '主机名称';
$L['LOCAL_HOSTED']                     = '私有 IP';
$L['ORGANIZATION']                     = '组织机构';
$L['PEER_CONFIG_NAME']                 = '姓名';
$L['PEER_INFO']                        = '同行信息';
$L['PEER_PING']                        = '萍';
$L['PROCESSING']                       = '加工...';
$L['PROCESSING_ABORTED']               = '处理已取消。请重试。';
$L['PROCESSING_COMPLETE']              = '處理完成。';
$L['PROCESSING_ERROR']                 = '处理出错。请重试。';
$L['PROCESSING_ERROR_EXTENSION']       = '<span style="font-weight:400">仅允许使用带有 <span style="font-weight:900" class="text-warning">.conf</span> 扩展名的对等配置文件。</span>';
$L['PROCESSING_REVERT_ERROR']          = '恢复时出错。请重试。';
$L['REMOVE']                           = '去掉';
$L['RETRY']                            = '重试';
$L['REVERT']                           = '回复';
$L['REGION']                           = '地区';
$L['SERVER_CONFIG']                    = '服务器配置';
$L['TAP_TO_CANCEL']                    = '点击取消';
$L['TAP_TO_RETRY']                     = '点击以重试';
$L['TAP_TO_UNDO']                      = '正在刷新页面...';
$L['UNDO']                             = '撤消';
$L['VPN_CONTROL']                      = 'VPN 控制';
$L['WAITING_FOR_SIZE']                 = '正在等待文件大小...';
$L['WG_PRIVATE_KEY']                   = '私钥';
$L['WG_PUBLIC_KEY']                    = '公钥';
$L['WG_SERVER_INFO']                   = '当前连接信息';
$L['WIREGUARD_CONFIG_ACTIVATION_TIPS'] = '要激活 WireGuard 配置，请从下表中选择所需的 VPN 配置。要停用当前活动的配置，只需取消选中活动复选框或选择其他配置。这将自动重新启动 WireGuard 服务，并且 \'当前连接信息\' 表将更新相关详细信息。';

/* **********************************
 * #4.4.5 - TROUBLESHOOTING
 ************************************/
$L['SERVICE']                = '服务';
$L['APP_SELECT']             = '选择应用';
$L['APPLIANCE']              = '器具';
$L['CLEAN_MEM']              = '清除物理内存中的缓存';
$L['FIX']                    = '修复';
$L['FIXUPDATE']              = '修复 dpkg 锁定';
$L['LOG_GEN']                = '系统日志生成器';
$L['NGINX']                  = 'nginx';
$L['PHP']                    = 'php-fpm';
$L['PHP7_2']                 = 'php-fpm';
$L['QSUPPORT']               = 'QuickBox 支持';
$L['QSUPPORTU']              = 'QuickBox 支持账户';
$L['SERVER_TROUBLESHOOTING'] = '服务器疑难解答';
$L['SYSTEM_INFO']            = '系统信息';
$L['SYSTEM_LOG_FILES']       = '系统日志';
$L['TROUBLESHOOTING']        = '疑难解答';
$L['WEB_SERVER']             = 'Web 服务器';

/* **********************************
 * #4.4.6 - SYSTEM LOGS
 ************************************/
$L['ABOUT_SOFTWARE_ACTION_LOGS']       = '这些日志旨在提供与软件相关的操作记录，包括安装、删除、更新和其他重要事件。';
$L['ABOUT_SYSTEM_ACTION_LOGS']         = '这些日志专门用于捕获通过 <code>qb</code> 命令行工具启动的系统级活动和操作。';
$L['ABOUT_UI_ACTION_LOGS']             = '这些日志源自系统的 syslog，并作为通过 QuickBox Dashboard 用户界面启动的所有命令和操作的综合记录。';
$L['ABOUT_USER_ACTION_LOGS']           = '此上下文中的日志与通过 QuickBox 界面启动的用户相关任务和事件有关。';
$L['ACCESS_LOGS']                      = '访问日志';
$L['APP_LOGS']                         = '软件日志';
$L['AUTO_PROCESS']                     = '自动流程';
$L['CLEAN_DASHBOARD_USER_ACTION_LOGS'] = '清理用户操作日志';
$L['CLEAN_SYSTEM_ACTION_LOGS']         = '清理系统操作日志';
$L['CLEAR_LOG']                        = '清除日志';
$L['CLEAR_LOG_CONFIRM']                = '您确定要删除这些日志吗？此操作无法撤消？';
$L['COMMAND']                          = '命令';
$L['COMMAND_SOFTWARE']                 = '命令/软件';
$L['DATABASE_BACKUP']                  = '数据库备份';
$L['DATABASE_MAINTENANCE']             = '数据库维护';
$L['DATABASE_REPAIR']                  = '数据库修复';
$L['DATABASE_RESTORE']                 = '数据库恢复';
$L['DATE_TIME']                        = '日期/时间';
$L['DELETED_ALL_APP_LOGS']             = '删除所有软件日志';
$L['DELETED_ALL_APPLICATION_LOGS']     = '删除所有应用程序日志';
$L['DELETED_ALL_SUMMARY_LOGS']         = '删除所有摘要日志';
$L['DELETED_ALL_SYSTEM_LOGS']          = '删除所有系统日志';
$L['DELETED_ALL_UI_LOGS']              = '删除所有 UI 日志';
$L['DELETED_ALL_USER_LOGS']            = '删除所有用户日志';
$L['DELETED_APPLICATION_LOGS']         = '已删除的应用程序日志';
$L['DELETED_SUMMARY_LOGS']             = '已删除的摘要日志';
$L['DELETED_USER']                     = '已删除的用户';
$L['DELETE_USER_LOGS']                 = '删除用户日志';
$L['EVENT']                            = '事件';
$L['LOG_MESSAGE']                      = '日志消息';
$L['LOGS']                             = '日志';
$L['LOGS_SUMMARY']                     = '日志摘要';
$L['NO_LOGS']                          = '未找到日志';
$L['NO_LOGS_MESSAGE']                  = '目前没有可供查看的日志记录。 当应用程序将其日志记录信息发送到系统的 syslog 时，会生成日志条目。 如果您正在搜索特定日志，我们建议您查阅相应应用程序提供的文档以获取进一步指导。 QuickBox 努力集中各种应用程序及其记录的数据； 然而，这取决于各个应用程序将其日志记录信息传输到系统日志。';
$L['QUICKBOX_VERSION_CHECK']           = '检查 QuickBox 更新';
$L['QUOTA_CHECK']                      = '配额设置检查';
$L['SCHEDULED_TASK']                   = '计划任务';
$L['SOFTWARE']                         = '软件';
$L['SOFTWARE_ACTION_LOGS']             = '软件操作日志';
$L['SOFTWARE_VERSION_CHECK']           = '检查已安装的软件更新';
$L['SYSTEM_ACTION_LOGS']               = '系统操作日志';
$L['SYSTEM_LOG_SUMMARY']               = '系统日志摘要';
$L['SYSTEM_LOG_SUMMARY_TOOLTIP']       = '此摘要和所有附加日志是在三种情况下生成的：<br><ol><li><strong>Cron：</strong>每 15 分钟执行一次 cron 任务，日志就会自动更新。 这将启动 <code>qb_log_miner</code> 二进制文件，该二进制文件聚合系统日志中的日志条目。</li><li><strong>手动生成：</strong>您可以通过单击 \'（生成）\' 按钮从 \'系统 > 故障排除 > 系统日志\' 部分生成它。</li><li><strong>命令行：</strong>也可以通过运行命令<code>qb generate log</code>来生成。</li></ol>您可以通过两种方式访问和下载此摘要日志文件：<br><ol><li><strong>网络界面</strong>：转至用户界面中的 \'系统 > 故障排除 > 系统日志（下载）\' 。</li><li><strong>服务器目录：</strong>在服务器上找到它：\'/srv/quickbox/logs/system_log\'。</li></ol>';
$L['UI_ACTION_LOGS']                   = 'UI 操作日志';
$L['USER_ACTION_LOGS']                 = '用户操作日志';
$L['USER_APPLICATION_LOGS']            = '用户应用程序日志';
$L['USER_LOGS']                        = '用户日志';
$L['VIEW_SOFTWARE_ACTION_LOGS']        = '查看软件操作日志';
$L['VIEW_SYSTEM_ACTION_LOGS']          = '查看系统操作日志';
$L['VIEW_UI_ACTION_LOGS']              = '查看 UI 操作日志';
$L['VIEW_USER_ACTION_LOGS']            = '查看用户操作日志';

/* **********************************
 * #4.4.7 - HELP MANUAL
 ************************************/
$L['QB_HELP'] = '帮助手册';

/* **********************************
 * #4.4.7.1 - description
 ************************************/
$L['DESCRIPTION_CONTENT'] = '<p>欢迎使用 <code>qb</code> 联机帮助页的全面图形显示，该联机帮助页旨在为您提供一种经过翻译、简化且高效的方法来访问有关 QuickBox 的各种信息。这个用户友好的界面旨在提供对 QuickBox 工作原理的深入了解，QuickBox 是一个强大且多功能的工具，可轻松管理您的服务器。</p>
<p>在此图形显示中，您将找到可供无缝安装的可用应用程序的详细列表，使您能够根据您的特定需求自定义服务器设置。此外，该资源还提供了大量其他基本命令，可在 <code>qb</code> CLI 环境中实现最佳利用，使您能够高效、轻松地浏览服务器任务。</p>
<p>无论您是 QuickBox 的新手还是经验丰富的用户，<code>qb</code> 联机帮助页的图形显示都可以作为您充分利用 QuickBox 潜力并释放服务器管理真正威力的最终参考。借助这份直观且信息丰富的指南，探索各种功能、简化服务器操作并最大限度地提高您的工作效率。让我们深入研究，让您的 QuickBox 体验更加有意义！</p>';
$L['API_INFO_DIRECT'] = '<p style="font-weight:600;">有关嵌入式 QuickBox API 的更多信息和参考，<a href="/api-control.php" rel="noopenner nofollow " class="link" style="color:var(--qb-color-37);">查看此页面</a>。</p>';

/* **********************************
 * #4.4.7.2 - options
 ************************************/
$L['OPTIONS_HEADER']          = '选项';
$L['OPTIONS_CONTENT_HELP']    = '以 CLI 联机帮助页格式显示此帮助手册';
$L['OPTIONS_CONTENT_VERBOSE'] = '启用详细模式进行调试';

/* **********************************
 * #4.4.7.3 - software
 ************************************/
$L['SOFTWARE_HEADER']                       = '软件';
$L['SOFTWARE_INFO_CONTENT']                 = '<p>以下是通过 QuickBox 构建提供的所有可用安装应用程序的列表。<br>软件名称显示为 <code>qb [install|reinstall|update|remove|help] [软件名称]</code></p>';
$L['ADMIN_INSTALLED_SOFTWARE_HEADER']       = '管理员安装的软件';
$L['ADMIN_INSTALLED_SOFTWARE_INFO_CONTENT'] = '<p>系统管理员需要安装以下应用程序。<br>有关其他详细信息，请参阅下面的可用性列。</p>';
$L['MULTI_USER_SOFTWARE_HEADER']            = '多用户软件';
$L['MULTI_USER_SOFTWARE_INFO_CONTENT']      = '<p>以下应用程序可由多个用户安装，无需管理员协助。<br>所有应用程序的可用性均由系统管理员确定，并授予 <a href="/usergroups.php" rel="noopener nofollow" class="link">已创建群组</a>。</p>';
$L['SINGLE_USER_SOFTWARE_HEADER']           = '单用户软件';
$L['SINGLE_USER_SOFTWARE_INFO_CONTENT']     = '<p>以下应用程序一次只能由一名指定用户安装，无需管理员协助。<br>所有应用程序的可用性均由系统管理员确定并授予其他用户 在<a href="/usergroups.php" rel="noopener nofollow" class="link">创建的群组</a>内。</p>';
$L['SOFTWARE_MANAGEMENT']                   = '软件管理';
$L['SOFTWARE_MANAGEMENT_CONTENT']           = '用于为指定用户安装、重新安装、更新或删除指定软件以及附加选项(如果存在/需要)的参数';
$L['SOFTWARE_MANAGEMENT_WARNING_CONTENT']   = '<p>请记住，不同的应用程序有不同的选项/要求。大多数需要使用用户名标志 (<code>-u</code>)，而 rtorrent 等应用程序则不需要。要检查特定软件的所有可用选项，请使用 <code class="language-bash">qb help [software_name]</code>。QuickBox 中软件命名方案的应用程序命名可以在上面的<a href="#software" class="link">软件列表图表</a>中查看。</p>';
$L['SEE_ALSO_HEADER']                       = '另请参阅';
$L['SEE_ALSO_CONTENT']                      = '显示指定软件的有用命令用法';

/* **********************************
 * #4.4.7.4 - software options table
 ************************************/
$L['SOFTWARE_NAME']     = '软件名称';
$L['SOFTWARE_TITLE']    = '软件标题';
$L['USABILITY']         = '可用性';
$L['CAN_ROLLBACK']      = '回滚选项';
$L['INFO']              = '信息';
$L['ADMIN_BADGE']       = '<span class="badge badge-pills badge-table-menu" style="padding:2px 6px;line-height:0.7rem;background-color:var(--qb-color-6-rgba);color:#fff;font-size:0.5rem;">仅限管理员</span>';
$L['GLOBAL_BADGE']      = '<span class="badge badge-pills badge-table-menu" style="padding:2px 6px;line-height:0.7rem;background-color:var(--qb-color-5-rgba);color:#fff;font-size:0.5rem;">全球</span>';
$L['MULTI_USER_BADGE']  = '<span class="badge badge-pills badge-table-menu" style="padding:2px 6px;line-height:0.7rem;background-color:var(--qb-color-4-rgba);color:#fff;font-size:0.5rem;">多用户</span>';
$L['SINGLE_USER_BADGE'] = '<span class="badge badge-pills badge-table-menu" style="padding:2px 6px;line-height:0.7rem;background-color:var(--qb-color-3-rgba);color:#fff;font-size:0.5rem;">单用户</span>';
$L['GLOBAL_INFO']       = '需要管理员安装并为系统上的所有用户安装。';
$L['MULTI_USER_INFO']   = '需要管理员安装并且可以为任何分配的用户安装。支持多个用户。';
$L['SINGLE_USER_INFO']  = '单用户，仅限管理员。需要管理员安装并由管理员用户安装和操作。';

/* **********************************
 * #4.4.7.5 - examples header
 ************************************/
$L['EXAMPLES_HEADER'] = '示例';

/* **********************************
 * #4.4.7.6 - user management
 ************************************/
$L['USER_MANAGEMENT_INFO_CONTENT']   = '<p>QuickBox 中的 <code>qb user</code> 管理功能提供了一套多功能且强大的工具来有效管理服务器上的用户。这些功能注重易用性和强大的功能，使您能够简化用户管理、增强安全性并确保服务器平稳运行。</p>';
$L['CREATE_USER_CONTENT']            = '创建一个新的 QuickBox 用户帐户';
$L['DELETE_USER_CONTENT']            = '删除 QuickBox 用户帐户';
$L['CHANGE_USER_PASSWORD']           = '更改用户密码';
$L['CHANGE_USER_PASSWORD_CONTENT']   = '更改指定用户帐户的密码';
$L['BAN_USER_CONTENT']               = '禁止分配的用户帐户，阻止登录并停止已安装的服务及其功能。';
$L['BAN_USER_PRIMARY_CONTENT']       = '<p><em>这不会<strong>删除</strong>用户数据</em>，只会禁用正在运行的服务并阻止访问。</p>';
$L['UNBAN_USER_CONTENT']             = '取消禁止指定的用户帐户，允许登录并启动已安装的服务及其功能';
$L['PROMOTE_USER_TO_ADMIN']          = '将用户升级为管理员';
$L['PROMOTE_USER_TO_ADMIN_CONTENT']  = '将分配的用户提升至管理员级别';
$L['DEMOTE_USER_FROM_ADMIN']         = '将用户从管理员降级';
$L['DEMOTE_USER_FROM_ADMIN_CONTENT'] = '将分配的用户降级到标准用户级别';
$L['SET_USER_QUOTA']                 = '设置用户配额';
$L['SHOW_USER_QUOTA']                = '显示用户配额';
$L['SET_USER_SHELL']                 = '设置用户外壳';
$L['SET_USER_SHELL_CONTENT']         = '为指定用户设置 shell 环境';
$L['SET_USER_SHELL_INFO_CONTENT']    = '<p><strong><code>sudo</code></strong><br>服务器环境的完整管理员权限（强大的权限...等）<br><strong><code>full</code></strong><br>对服务器环境的完全访问权限，但较高特权区域除外; 即: 没有 sudo，无法访问根目录。<br><strong><code>limited</code></strong><br>有限的 shell 环境。对命令的访问权限很少，并且被限制在自己的用户主目录中。</p><hr/><p>Shell 环境由系统管理员设置，可以在位于 的用户编辑页面上查看 <a href="/useradmin.php" rel="noopener nofollow" class="link">用户管理页面</a>。<br>如果您想添加新的 shell 环境，可以通过编辑 来实现 <code>/etc/shells</code> 文件并添加您要添加的 shell 环境的路径。</p>';
$L['SET_USER_SHELL_DANGER_CONTENT']  = '<p><strong>警告：</strong>请注意，将 shell 环境更改为 <code>/bash</code> 以外的任何环境可能会在使用 <code>qb</code> (QuickBox)，因为它是专门为 <code>/bash</code> 环境设计和优化的。简而言之，<code>qb</code> 依赖于 Bash shell 提供的特定特性和功能。<br><br>为避免任何潜在问题，建议坚持使用 <code>/bash</code> 使用<code>qb</code>时的环境。如果您仍然希望使用不同的 shell，请查阅该 shell 的文档，以查看对路径、配置或其他设置的任何其他更改，这些更改可能需要更新以确保与 <code>qb</code> 的兼容性。</p>';
$L['USER_RCLONE_COMPANION_COMMANDS'] = 'Rclone 配套命令';

/* **********************************
 * #4.4.7.7 - clean functions
 ************************************/
$L['CLEAN_FUNCTIONS']                  = '清理函数';
$L['CLEAN_FUNCTIONS_INFO_CONTENT']     = '<p>QuickBox 中的 <code>qb clean</code> 功能提供了一种方便有效的方法来维护服务器的清洁度并优化其性能。这些功能在设计时考虑到了简单性和有效性，使您能够释放宝贵的内存，消除不必要的混乱，并确保平稳和简化的服务器操作。</p>';
$L['CLEAN_MEMORY']                     = '清理内存';
$L['CLEAN_MEMORY_CONTENT']             = '清理 QuickBox 内存缓存';
$L['CLEAN_DASHBOARD_LOGS']             = '清理仪表板日志';
$L['CLEAN_DASHBOARD_LOGS_CONTENT']     = '清理指定用户的 QuickBox 仪表板日志';
$L['CLEAN_QB_DASHBOARD_LOGS']          = '清理 QB Dashboard 日志文件';
$L['CLEAN_QB_DASHBOARD_LOGS_CONTENT']  = '此命令旨在清除从 syslog 发布的当前 UI 操作日志并将 UI Nginx 错误日志重置为其初始状态';
$L['CLEAN_SYSTEM_LOGS']                = '删除旧的系统日志文件';
$L['CLEAN_SYSTEM_LOGS_CONTENT']        = '此命令旨在删除 <code>/var/log</code> 目录中已超过指定保留期限的日志和压缩存档。 保留期默认设置为 7 天（如果未输入可选值）。';
$L['CLEAN_RCLONE_UPLOAD_LOGS']         = '清理 Rclone 上传日志';
$L['CLEAN_RCLONE_UPLOAD_LOGS_CONTENT'] = '清除指定用户的 QuickBox rclone 上传日志';
$L['CLEAN_LOCKS']                      = '清洁锁';
$L['CLEAN_LOCKS_CONTENT']              = '清除可能阻止 QuickBox 安装新软件的 QuickBox 软件和 apt-dpkg 锁';

/* **********************************
 * #4.4.7.8 - fix functions
 ************************************/
$L['FIX_FUNCTIONS']              = '修复函数';
$L['FIX_FUNCTIONS_INFO_CONTENT'] = '<p>QuickBox 中的 <code>qb fix</code> 功能提供了一个强大且用户友好的工具包，可以解决常见问题并轻松执行系统修复。这些功能注重简单性和有效性，使您能够排查并解决服务器上可能出现的各种问题，确保运行顺利、不间断。</p>';
$L['FIX_HOME']                   = '修复主页';
$L['FIX_HOME_CONTENT']           = '修复指定用户主目录权限';
$L['FIX_PHP']                    = '修复 PHP';
$L['FIX_PHP_CONTENT']            = '修复 PHP 配置并安装缺少的扩展。这还将 PHP 包更新到最新版本';
$L['FIX_PYTHON']                 = '修复 Python';
$L['FIX_PYTHON_CONTENT']         = '修复 Python 配置并安装缺少的扩展。如果当前系统上不支持 python3.9，则还可以在需要 python 的应用程序构建中默认使用该版本';
$L['FIX_VERSION']                = '修复版本';
$L['FIX_VERSION_CONTENT']        = '通过重新安装可用的最新版本来修复 QuickBox 安装';

/* **********************************
 * #4.4.7.9 - generate functions
 ************************************/
$L['GENERATE_FUNCTIONS']                   = '生成函数';
$L['GENERATE_FUNCTIONS_INFO_CONTENT']      = '<p>QuickBox 中的 <code>qb generate</code> 函数提供了一种方便高效的方法来创建增强服务器管理和监控的基本元素。目前，qb generate 命令支持 qb generate log 功能，允许用户轻松生成服务器统计信息、API激活和挂载信息的预览。<br>随着 qb generate 函数的发展，它们可能会提供扩展的数组 进一步增强服务器管理的功能。</p>';
$L['GENERATE_SYSTEM_LOGS']                 = '生成系统日志';
$L['GENERATE_SYSTEM_LOGS_CONTENT']         = '为当前 QuickBox 安装生成系统日志';
$L['GENERATE_SYSTEM_LOGS_WARNING_CONTENT'] = '<p>从版本<em>3.0.0.<strong>36+</strong></em>开始，<code>qb generate log</code>已经发展成为一个更深入的日志聚合和组织实用程序 。 它旨在通过汇总和集中关键日志数据来补充应用程序的本机日志，从而简化日志检索，从而使故障排除更加高效。</p><p>此命令及其功能是一项持续进行中的工作 。</p>';
$L['GENERATE_SYSTEM_LOGS_SUCCESS_CONTENT'] = '<p>您可以通过三种方式访问和下载此摘要日志文件：<br><ol><li><strong>生成/下载：</strong>转至用户界面中的 \'系统 > <a href="/troubleshooting.php" class="link">故障排除</a> > 系统日志\'  。 您可以在此处生成和/或下载由生成日志命令生成的系统日志摘要。</li><li><strong>查看日志：</strong>转至 \'系统 > <a href="/logs.php" class="link">系统日志</a>\' 。 您可以在此处找到由生成日志命令收集的其他日志和信息。</li><li><strong>服务器目录：</strong>在服务器上找到它：\'/srv/quickbox/logs/system_log\'。</li></ol></p>';

/* **********************************
 * #4.4.7.10 - manage functions
 ************************************/
$L['MANAGE_FUNCTIONS']                                  = '管理功能';
$L['MANAGE_FUNCTIONS_INFO_CONTENT']                     = '<p>QuickBox 中的<code>qb manage</code> 功能提供了一套强大而全面的工具来有效管理服务器的各个方面。这些功能在设计时充分考虑了用户的便利性，使您能够轻松控制 QuickBox 支持的环境的关键元素。<br>无论是交换语言设置、检查主要 API 激活的状态、管理数据分发，还是 qb 管理功能通过备份和回滚确保数据完整性，为服务器管理员和爱好者提供了全面的解决方案。</p>';
$L['MANAGE_API_KEY']                                    = '管理 API 密钥';
$L['MANAGE_API_KEY_CONTENT']                            = '管理 QuickBox API 密钥并列出其他信息和选项';
$L['ADD_API_KEY']                                       = '添加 API 密钥';
$L['ADD_API_KEY_CONTENT']                               = '添加/激活 API 密钥';
$L['REMOVE_API_KEY']                                    = '删除 API 密钥';
$L['REMOVE_API_KEY_CONTENT']                            = '删除/停用 API 密钥';
$L['MANAGE_DATABASE']                                   = '管理数据库';
$L['MANAGE_DATABASE_CONTENT']                           = '管理 QuickBox 使用哪个数据库';
$L['MANAGE_DATABASE_CONNECTION_INFO_CONTENT']           = '请注意，指定用户名和密码时（如果使用了选项），它们不必与您当前主帐户的凭据匹配。 这些凭据供本地系统使用，特别是数据库连接和各种系统功能。 因此，它们可以是唯一的并且独立于您的主帐户的用户名和密码。';
$L['MANAGE_DATABASE_INFO_CONTENT']                      = 'QuickBox 主要使用 SQLite3 作为其默认数据库。 但是，您可以选择使用此命令在 SQLite3 和 MySQL 之间无缝切换。 如果您选择 MySQL，请确保您的系统上正确安装和配置了 MySQL 服务器。 此外，您还需要一个具有足够权限的 MySQL 用户帐户来创建和管理数据库。 执行此命令可以简化这些必要的配置，包括安装 MySQL 服务器和客户端（如果您的系统上尚未安装）。 在此过程中，如果没有检测到，将会提示您安装MySQL服务器和客户端。 此外，该命令还可以处理配置设置，确保与 QuickBox 无缝集成。 请注意，除了 <code>-o [mysql|sqlite]</code> 之外的所有参数都是可选的，并且将默认为脚本中的预定义值。<br><br>默认值如下：<br><code>user=admin, pass=%random%, port=3306, host=localhost, name=qbpro</code><br><br>MySQL 详细信息可在 <code>/root/.my.cnf</code>。<br><br>要转换回 SQLite3，只需使用 <code>-o sqlite</code> 标志再次运行该命令即可。';
$L['MANAGE_DATABASE_BACKUP']                            = '管理数据库备份';
$L['MANAGE_DATABASE_BACKUP_CONTENT']                    = '备份 QuickBox 数据库';
$L['MANAGE_DATABASE_BACKUP_INFO_CONTENT']               = '作为维护计划的一部分，QuickBox 备份过程每 24 小时在凌晨 3:30（服务器时间）自动运行一次。此任务在 <code>/etc/cron.d/quickbox</code> 计划中列出，如下所示：<br><br><code>30 3 * * * root /usr/local/bin/qb manage db -o Maintenance --cron</code><br><br>但是，您可以使用上述命令手动触发备份（不运行维护例程）。<br><br><strong>关于备份过程</strong><br><br>每次备份都会创建 QuickBox 数据库的快照，提供还原点以在数据丢失或损坏的情况下保护数据完整性。备份文件保存在指定目录中，系统会保留最近的 5 个备份，以确保您始终有多个还原点可供恢复。<br><br><strong>备份文件位置</strong><br><br>备份文件存储在以下目录中：<br><br><strong>MySQL</strong>：<code>/opt/quickbox/backup/system/[DATE_TIME]/db/qbpro.sql</code><br><strong>SQLite</strong>：<code>/opt/quickbox/backup/system/[DATE_TIME]/db/qbpro.db</code>';
$L['MANAGE_DATABASE_MAINTENANCE']                       = '管理数据库维护';
$L['MANAGE_DATABASE_MAINTENANCE_CONTENT']               = '启动 QuickBox 数据库维护过程';
$L['MANAGE_DATABASE_MAINTENANCE_INFO_CONTENT']          = 'QuickBox 维护过程旨在确保数据库平稳高效地运行。此过程包括：<br><br><ol><li>清理不需要的数据。</li><li>优化数据库表。</li><li>运行其他维护任务以提高效率并防止数据问题，例如检查和修复表。</li><li>如果发生不可恢复的错误，则触发每日消息 (MotD) 通知以通过 CLI 提醒系统管理员。</li></ol><p><strong>维护运行时</strong><br><br>维护过程每 24 小时自动运行一次，时间为服务器时间凌晨 3:30。此任务在 <code>/etc/cron.d/quickbox</code> 计划中列出如下：<br><br><code>30 3 * * * root /usr/local/bin/qb manage db -o Maintenance --cron</code><br><br>但是，您可以使用上述命令手动触发维护。<br><br><strong>维护为何重要</strong><br><br>定期维护可确保您的 QuickBox 数据库保持健康、保持系统高性能并保护您的数据。</p>';
$L['MANAGE_DATABASE_RESTORE']                           = '管理数据库还原';
$L['MANAGE_DATABASE_RESTORE_CONTENT']                   = '还原 QuickBox 数据库';
$L['MANAGE_DATABASE_RESTORE_INFO_CONTENT']              = '此命令启动数据库还原过程，允许您选择要还原的特定备份文件。恢复过程旨在在数据丢失或损坏的情况下恢复数据，提供一种可靠而有效的方式将您的 QuickBox 数据库恢复到以前的状态。<br><br><strong>恢复过程的工作原理</strong><br><br>运行恢复命令时，您将看到一个选择菜单，其中列出了所有可用的数据库备份文件。然后，您可以选择要恢复的备份文件，系统将自动恢复所选的备份文件，将您的 QuickBox 数据库恢复到创建备份时的状态。';
$L['MANAGE_DASHBOARD_ACCESS_URL']                       = '管理仪表板访问 URL';
$L['MANAGE_DASHBOARD_ACCESS_URL_CONTENT']               = '此命令设置服务器 Web 根目录，以便仪表板访问所表达的域或 IP 地址';
$L['SET_SERVER_LANG']                                   = '设置服务器语言';
$L['SET_SERVER_LANG_CONTENT']                           = '该命令将把请求的语言设置为服务器的默认语言';
$L['MANAGE_PUBLIC_TRACKERS']                            = '管理公共跟踪器';
$L['MANAGE_PUBLIC_TRACKERS_CONTENT']                    = '此命令将为所有用户启用或禁用公共跟踪器';
$L['EX_PUB_TRACKERS_ALLOW']                             = '允许公共跟踪器的示例：';
$L['EX_PUB_TRACKERS_DISALLOW']                          = '禁止公共跟踪器的示例：';
$L['BACKUP_APPLICATIONS']                               = '备份应用程序';
$L['PARTIAL_CONFIG_ONLY_BACKUP']                        = '部分备份 <span class="badge badge-pills outline-badge-secondary badge-table-menu" style="padding:2px 6px;line-height:0.7rem;font-size:0.5rem;">仅配置</span>';
$L['PARTIAL_CONFIG_ONLY_BACKUP_CONTENT']                = '此命令将为指定用户备份指定的应用程序配置';
$L['FULL_CONFIG_AND_APP_BACKUP']                        = '完整备份 <span class="badge badge-pills outline-badge-primary badge-table-menu" style="padding:2px 6px;line-height:0.7rem;font-size:0.5rem;">配置 &amp; 应用程序</span>';
$L['FULL_CONFIG_AND_APP_BACKUP_CONTENT']                = '此命令将为指定用户备份指定应用程序。包括应用程序和配置数据，方便回滚到以前安装和备份的版本';
$L['PARTIAL_RTORRENT_ALL_USERS_BACKUP']                 = '部分备份(仅限 rtorrent)';
$L['PARTIAL_RTORRENT_ALL_USERS_BACKUP_PRIMARY_CONTENT'] = '<p>如果使用 rtorrent 作为要备份的软件配置，则不需要用户名标志 (<code>-u</code>)。</p>';
$L['PARTIAL_RTORRENT_ALL_USERS_BACKUP_CONTENT']         = '此命令将备份所有现有 rtorrent 用户 .rtorrent.rc 文件。<br>备份存储在：<br><code>/home/[USERNAME]/.QuickBox/software/rtorrent/backup/.rtorrent.rc_YEAR-MONTH-DAY_HOUR:MINUTE</code>';
$L['ROLLBACK_APPLICATIONS']                             = '回滚应用程序备份';
$L['ROLLBACK_APPLICATIONS_CONTENT']                     = '此命令会将指定用户的指定应用程序回滚到备份目录中存储/选择的先前版本。<br>备份存储在：<br><code>/home/[USERNAME]/.QuickBox/software/[SOFTWARE_NAME]/backup/</code>';
$L['RESTORE_APP_BACKUP_CONFIG']                         = '恢复备份 <span class="badge badge-pills outline-badge-secondary badge-table-menu" style="padding:2px 6px;line-height:0.7rem;font-size:0.5rem;">仅配置</span>';
$L['RESTORE_APP_BACKUP_CONFIG_CONTENT']                 = '此命令将为指定用户恢复指定的先前备份的应用程序配置';
$L['RESTORE_APP_DEFAULT_CONFIG']                        = '恢复默认 <span class="badge badge-pills outline-badge-secondary badge-table-menu" style="padding:2px 6px;line-height:0.7rem;font-size:0.5rem;">仅配置</span>';
$L['RESTORE_APP_DEFAULT_CONFIG_CONTENT']                = '此命令将为指定用户恢复指定的默认(从安装)应用程序配置';

/* **********************************
 * #4.4.7.11 - news functions
 ************************************/
$L['NEWS_FUNCTIONS']              = '新闻功能';
$L['NEWS_FUNCTIONS_INFO_CONTENT'] = '<p>QuickBox 中的 <code>qb news</code> 功能直接向您的服务器提供及时且相关的新闻更新，确保您随时了解 QuickBox 生态系统的最新发展和变化。此功能旨在让您了解最新情况，提供有关当前和即将发布的版本、版本更改以及其他感兴趣的项目的基本信息。</p>';
$L['NEWS']                        = '新闻';
$L['NEWS_CONTENT']                = '查看最新的 QuickBox 新闻';

/* **********************************
 * #4.4.7.12 - support functions
 ************************************/
$L['SUPPORT_FUNCTIONS']              = '支持函数';
$L['SUPPORT_FUNCTIONS_INFO_CONTENT'] = '<p>QuickBox 中的<code>qb support</code> 功能提供了一种安全可靠的方法，可在需要帮助时授予支持人员访问您的服务器的权限。该功能非常重视安全性和用户保护，利用 <code>quickSupport</code> 帐户，确保只有授权的支持人员才能访问您的服务器。</p>';
$L['ENABLE_SUPPORT']                 = '启用支持';
$L['ENABLE_SUPPORT_CONTENT']         = '启用支持。通常分配给负责支持的工作人员团队成员';
$L['DISABLE_SUPPORT']                = '禁用支持';
$L['DISABLE_SUPPORT_CONTENT']        = '禁用支持。否则，支持帐户将在 36 小时后自动删除';

/* **********************************
 * #4.4.7.13 - update functions
 ************************************/
$L['UPDATE_FUNCTIONS']              = '更新函数';
$L['UPDATE_FUNCTIONS_INFO_CONTENT'] = '<p>QuickBox 中的<code>qb update</code> 功能为您提供了一种方便灵活的方式来管理 QuickBox 安装的更新。通过此功能，您可以完全控制更新过程，允许您手动检查更新并选择何时应用它们。</p>';
$L['UPDATE_CHECK']                  = '更新检查';
$L['UPDATE_CHECK_CONTENT']          = '检查 QuickBox 的更新';
$L['UPDATE_QUICKBOX']               = '更新 QuickBox';
$L['UPDATE_QUICKBOX_CONTENT']       = '将 QuickBox 安装更新到最新版本(如果有)';

/* **********************************
 * #4.4.7.14 - bugs & reporting
 ************************************/
$L['BUGS']              = '错误和报告';
$L['BUGS_INFO_CONTENT'] = '<p>QuickBox 文档的图形显示将定期更新，以确保所提供的信息易于访问且用户友好。我们致力于增强您的 QuickBox 体验，这促使我们不断完善和改进文档，使其保持最新的特性和功能。<br><br/>
在每次更新中，我们将努力简化复杂的概念、澄清说明并纳入用户反馈，以使 qb 手册页更加直观和高效。我们的目标是让您能够无缝了解 QuickBox 及其丰富的功能，使您能够掌握 qb CLI 环境并轻松管理您的服务器任务。<br><br/>
我们重视您的意见，并鼓励您分享任何建议或想法，以进一步增强 qb 联机帮助页。您的反馈有助于塑造此资源并确保它对所有 QuickBox 用户仍然是有价值的参考。事实上，该页面存在是因为有人请求！ 🤪<br/><br/>
向 <strong><a href="https://nullrefer.ir/?https://github.com/QuickBox/pro-v3/issues" rel="noopener nofollow" target="_blank">QuickBox.IO 实验室问题和功能跟踪器</a></strong></p>';

/* **********************************
 * #4.4.7.15 - disclaimer
 ************************************/
$L['DISCLAIMER']      = '免责声明';
$L['DISCLAIMER_TEXT'] = '<p>此脚本仅供一般用途，不保证其适用于任何给定任务。QuickBox.IO 对您的设置或使用/安装/修改此脚本或其任何插件时造成的任何损害不承担任何责任。请记住，QuickBox.IO 及其员工不负责使您的软件和/或服务器保持最新状态； 这是 QuickBox Pro 软件用户的全部责任。</p>';

/* **********************************
 * #4.4.7.16 - license
 ************************************/
$L['LICENSE']      = '许可证';
$L['LICENSE_SET']  = '根据 BSD 3-Clause 获得许可';
$L['LICENSE_TEXT'] = '<p>版权所有 (c) 2018-2024，QuickBox.IO。保留所有权利。</p>
<p>只要满足以下条件，就可以以源代码和二进制形式重新分发和使用，无论是否经过修改：</p>
<ul style="font-size:0.75rem"><li>源代码的重新分发必须保留上述版权声明、此条件列表以及以下免责声明.</li>
<li>以二进制形式重新分发时，必须在随分发提供的文档和/或其他材料中复制上述版权声明、本条件列表以及以下免责声明.</li>
<li>未经事先明确书面许可，不得使用版权所有者的姓名及其贡献者的姓名来认可或推广从此软件衍生的产品.</li></ul>
<p>本软件由版权所有者和贡献者 \'按原样\' 提供，不承担任何明示或默示的保证，包括但不限于适销性和特定用途适用性的默示保证。在任何情况下，版权持有者或贡献者均不对任何直接、间接、附带、特殊、惩戒性或后果性损害(包括但不限于采购替代商品或服务；使用损失、数据或利润损失；或损失)承担责任。或业务中断)，无论是何种原因造成的，并且基于任何责任理论，无论是合同责任、严格责任还是侵权行为(包括疏忽或其他)，均因使用本软件而产生，即使已被告知可能发生此类损害。</p>';

/* **********************************
 * #4.4.7.17 - misc
 ************************************/
$L['EXAMPLE']  = '示例:';
$L['EXAMPLES'] = '示例:';

/* **********************************
 * #4.4.8 - CHANGELOG / UPDATE
 ************************************/
$L['CURRENT_VERSION']   = '当前版本';
$L['DASH_UPDATE_TITLE'] = 'QuickBox 版本面板';
$L['QB_UPDATE']         = 'QuickBox 版本面板';
$L['QBUPDATE']          = '更改日志 / 更新';
$L['UPCOMING_CHANGES']  = '即将到来的变化';
$L['UPDATE_AVAILABLE']  = '可用更新';
$L['UPDATE_TO_DATE']    = '最新';
$L['VERSION_STATUS']    = '版本状态';
$L['UPDATE_TXT']        = '更新';
$L['AVAILABLE_TXT']     = '可用！';
$L['UPDATE_VERSION']    = '更新版本';
$L['UPDATE_ACTIVATE']   = '请激活您的专业订阅以接收更新';
$L['UPDATE_CURRENT']    = '你是最新的！';
$L['CHANGELOGS']        = '更新日志';

/* **********************************
 * #4.4.9 - SYSTEM DASHBOARD
 ************************************/
$L['BANDWIDTH_TOTALS_TOOLTIP'] = '您可以通过<a href=\'/configurations.php#additionals\'>常规设置 > 其他仪表板设置</a>管理每月带宽开始日期并重置统计信息。这允许您调整开始日期或清除 vnStat 数据库以重置总数。<br/><br/>查看当前累计总数和历史记录：<a href=\'javascript:void(0)\' class=\'open_bandwidthtotals_modal\' data-toggle=\'modal\' data-target=\'#viewBandwidthTotals\'><span class=\'badge badge-pills badge-info\'>带宽总数</span></a>';
$L['DISK_UTIL_TIME']           = '磁盘使用时间';
$L['DISK_IO_BW']               = '磁盘 I/O 带宽';
$L['DISK_SPACE_USAGE_FOR']     = '的磁盘空间使用情况:';
$L['DISK_UTILIZATION']         = '使用率';
$L['DISK_WRITE']               = '写';
$L['DISK_READ']                = '读';
$L['SYS_DISK_READ']            = '磁盘读取';
$L['SYS_DISK_WRITE']           = '磁盘写';
$L['TOP_CPU_PROC']             = '顶级 CPU 应用程序进程';
$L['TOP_CPUMEM_PROC']          = '顶级 CPU 内存进程';
$L['TOP_CPUSYS_PROC']          = '顶级 CPU 系统进程';
$L['SERVICE_MEM_USAGE']        = '系统服务使用的不带缓存的内存';
$L['SYS_SWAP_USAGE']           = '系统交换使用';
$L['SYS_MEM_USAGE']            = '系统内存使用率';
$L['CPU_FREQ']                 = '当前 CPU 频率';
$L['CPU_LOAD']                 = 'CPU 负载';
$L['CPU_USAGE']                = 'CPU 使用率';
$L['RAM_USAGE']                = 'RAM 使用率';
$L['BW_UPLOAD']                = '带宽上传';
$L['BW_DOWNLOAD']              = '带宽下载';
$L['SYS_UPLOAD']               = '上载';
$L['SYS_DOWNLOAD']             = '下载';
$L['SYS_DASH_POWERED_BY']      = '系统仪表板由:';
$L['SYS_DASH_UPTIME']          = '系统正常运行时间';
$L['SYS_DASH_SWAP_USED']       = '二手交换';
$L['SYS_DASH_RAM_USED']        = '使用的 RAM';
$L['SYS_DASH_CPU']             = 'CPU';
$L['SYS_DASH_TMD']             = '每月总下载';
$L['SYS_DASH_TMU']             = '每月总上传';
$L['APT_UPDATES']              = 'APT更新';
$L['APT_DEPENDENCY']           = '依赖性包';
$L['APT_VERSION_INSTALLED']    = '当前版本';
$L['APT_VERSION_AVAILABLE']    = '现有版本';

/* ************************************
 * #4.4.9.1 - 带宽总计模式
 ************************************/
$L['BANDWIDTH_TOTALS']            = '带宽总数';
$L['BANDWIDTH_DATA_TIME_NOTICE']  = '注意：这些图表上显示的时间基于服务器的时区，而不是您的本地时区。要调整服务器的时区，请按照以下步骤操作。<br/><ul><li>通过 SSH 进入您的服务器</li><li>运行命令<br/><code>sudo dpkg-reconfigure tzdata</code></li><li>按照提示选择您的时区</li><li>完成后，运行以下命令<br><code>qb-vnstat --adjust-timestamps</code></li></ul><p class=\'text-warning\'>调整服务器时区将影响累积的图表数据。</p>';
$L['SELECT_AN_INTERFACE']         = '选择一个接口';
$L['BANDWIDTH_TOTALS_DATA_INFO']  = '此数据是从 vnStat 数据库收集的，基于 vnStat 配置中设置的每月周期。数据收集并存储在 vnStat 数据库中，并在此处显示以方便您使用。您可以通过<a href=\'/configurations.php#additionals\' style=\'display:inline-flex\'>常规设置 > 其他仪表板设置</a>管理每月带宽开始日期和重置统计信息。这允许您调整开始日期或清除 vnStat 数据库以重置总数。';
$L['VIEWING_DATA_FOR']            = '查看数据：';
$L['MONTHLY_BANDWIDTH_DATA']      = '每月带宽数据';
$L['DAILY_BANDWIDTH_DATA']        = '每日带宽数据';
$L['HOURLY_BANDWIDTH_DATA']       = '每小时带宽数据';
$L['BANDWIDTH_YEAR']              = '年';
$L['BANDWIDTH_MONTH']             = '月';
$L['BANDWIDTH_DAY']               = '日';
$L['BANDWIDTH_HOUR']              = '小时';
$L['BANDWIDTH_TOTAL']             = '总流量';
$L['BANDWIDTH_RX']                = '下载';
$L['BANDWIDTH_TX']                = '上传';
$L['BANDWIDTH_SELECT_INTERFACE']  = '选择接口';
$L['BANDWIDTH_SELECT_MONTH']      = '选择月份';
$L['BANDWIDTH_SELECT_DAY']        = '选择日期';
$L['BANDWIDTH_SELECT_HOUR']       = '选择小时';
$L['BANDWIDTH_SELECT_YEAR']       = '选择年份';
$L['BANDWIDTH_USAGE']             = '带宽使用情况';
$L['BANDWIDTH_VIEWING_INTERFACE'] = '(( 查看 ))';

/* **********************************
 * #4.4.10 - WHAT'S STREAMING DASHBOARD
 ************************************/
$L['STREAMING_DASHBOARD']                        = '流媒体仪表盘';
$L['STREAMING_DASHBOARD_INFO']                   = '“流媒体仪表盘”提供了服务器当前流媒体活动的概览。本功能目前支持 Emby 和 Jellyfin 流媒体服务。仪表盘显示活跃的流媒体数量、总带宽使用情况，以及当前正在播放的媒体。此外，您还可以查看用户最近观看的电影和剧集。';
$L['DAEMON_AND_STREAMING_SERVICES']              = '守护进程 + 媒体服务器控制面板';
$L['STREAMING_APP_VERSION']                      = '{applicationName} 版本';
$L['ENTER_API_KEY']                              = '输入您的 API 密钥';
$L['API_KEY_PLACEHOLDER']                        = '请输入您的 {serviceName} API 密钥';
$L['MASS_NOTIFICATION']                          = '群发通知';
$L['TEMP_TRANSCODE_PATH']                        = '临时转码路径';
$L['CLEAR_TEMP_TRANSCODE_PATH']                  = '清空临时转码文件';
$L['INTERVAL_SETTINGS_FOR_TEMP_TRANSCODES']      = '临时转码清理间隔设置';
$L['INTERVAL_SETTINGS_FOR_TEMP_TRANSCODES_TIPS'] = '<strong><em>以下单位为分钟。</em></strong><br><small>(例如：90分钟 = 1.5小时)</small><hr>这些设置用于确定清理临时转码文件的时间间隔。系统将根据指定的间隔自动清理，以释放磁盘空间并优化性能。';
$L['INTERVAL_STANDARD']                          = '标准媒体';
$L['INTERVAL_LIVE_TV']                           = '直播电视';
$L['ENABLE_TRANSCODE_AUTO_CLEAR']                = '启用临时转码自动清理';
$L['TRANSCODE_AUTO_CLEAR_ACTIVATED']             = '临时转码自动清理已启用。<br>标准媒体间隔：{standardInterval} 分钟。<br>直播电视间隔：{liveTvInterval} 分钟。';
$L['TRANSCODE_AUTO_CLEAR_DEACTIVATED']           = '临时转码自动清理已停用。';
$L['SETTINGS_SAVE_SUCCESS']                      = '设置保存成功。';
$L['STREAMING_STATS']                            = '流媒体统计';
$L['LATEST_MOVIES']                              = '最新电影';
$L['MOVIE']                                      = '电影';
$L['MOVIES']                                     = '电影';
$L['LATEST_EPISODES']                            = '最新剧集';
$L['SHOWS']                                      = '节目';
$L['SERIES']                                     = '系列剧';
$L['EPISODE']                                    = '剧集';
$L['SEASON_EPISODE']                             = '季/集';
$L['EPISODE_TITLE']                              = '剧集';
$L['LIVETV']                                     = '直播电视';
$L['CHANNEL']                                    = '频道';
$L['CHANNEL_NUMBER']                             = '频道号';
$L['NOW_PLAYING']                                = '正在播放';
$L['MEDIA_TITLE']                                = '媒体标题';
$L['MEDIA_TYPE']                                 = '媒体类型';
$L['YEAR']                                       = '年份';
$L['DURATION']                                   = '时长';
$L['ACTION']                                     = '操作';
$L['DISCONNECT_REASON']                          = '断开原因';
$L['NOTIFICATION']                               = '通知';
$L['LIBRARY']                                    = '媒体库';
$L['LIBRARY_PATH']                               = '媒体库路径';
$L['PREMIERE_DATE']                              = '首映日期';
$L['ACTIVE_STREAMS_PLACEHOLDER']                 = '(0个活跃流媒体)';
$L['BANDWIDTH_USED_PLACEHOLDER']                 = '(带宽使用：0 Mbps)';
$L['MEDIA_ITEM']                                 = '媒体项目';
$L['ACTION_INFO']                                = '操作信息';
$L['ADDITIONAL_INFO']                            = '附加信息';
$L['NO_DETAILS_AVAILABLE']                       = '无可用详细信息。';
$L['DEVICE_INFO']                                = '设备信息';
$L['STREAM_INFO']                                = '流媒体信息';
$L['PLAY_STATE_PRIORITY']                        = '播放状态优先级';
$L['VIEW_WSD_LOGS']                              = '查看 WSD 日志';
$L['WSD_ACTION_LOGS']                            = 'WSD 操作日志';
$L['CLEAR_LOGS']                                 = '清除日志';
$L['NO_ACTIONS_CURRENTLY_LOGGED']                = '当前未记录任何操作。';
$L['KILL_STREAM_SETTINGS']                       = '流媒体强制停止设置';
$L['NOTIFICATION_TITLE']                         = '通知标题';
$L['NOTIFICATION_MESSAGE']                       = '通知内容';
$L['THRESHOLD_SETTINGS_FOR_KILLSTREAM']          = '流媒体强制停止阈值设置';
$L['THRESHOLD_SETTINGS_FOR_KILLSTREAM_TIPS']     = '<strong><em>以下单位为秒。</em></strong><br><small>(例如：600秒 = 10分钟)</small><hr>这些设置用于确定因不活动而强制停止流媒体的条件。系统会监控流媒体的活动状态，当达到指定条件时，会自动停止流媒体以释放资源。';
$L['STANDARD_MEDIA']                             = '标准媒体';
$L['LIVE_TV_MEDIA']                              = '直播电视';
$L['SKIP_NOTIFICATION']                          = '跳过通知';
$L['SKIP_DISCONNECTION']                         = '跳过断开连接';
$L['PAUSE_DURATION']                             = '暂停持续时间';
$L['DISCONNECT_DURATION']                        = '断开持续时间';
$L['WSD_ACTION_CLEAR_LOGS_CONFIRM']              = '您确定要清除日志吗？';
$L['WSD_ACTION_CLEAR_LOGS']                      = '是的，清除它们！';
$L['WSD_ACTION_CLEAR_LOGS_FAILED']               = '清除日志失败。';
$L['WSD_ACTION_CLEAR_LOGS_SUCCESS']              = '日志已成功清除。';
$L['WSD_ADMIN_NOTIFY']                           = '<span class="text-info fw900">[admin-notify]</span> <strong>{admin}</strong> {admin_status} 向正在观看 <span class="text-primary fw600">{media}</span> 的 <strong>{user}</strong> 发送了<span class="text-warning fw600">通知</span>。<br><div style="border:1px solid var(--qb-color-8-rgba);background:var(--qb-color-1-rgba);padding:4px 12px;border-radius:3px;text-wrap:pretty;min-width:250px;"><span class="fw600">{notif_header}</span><br><span class="fw300">{notif_text}</span></div>';
$L['WSD_KILL_NOTIFY']                            = '<span class="text-info fw900">[kill-notify]</span> {user} 从 <span class="text-mute fw600">{device} {ip}</span> 观看的 <span class="text-primary fw600">{media}</span> 已暂停 <span class="text-info fw600">{paused_time}</span>，暂停位置为 <span class="text-mute">{pause_position}</span>，时间为 <span class="text-mute fw600">{pause_date} {pause_time}</span>，由于空闲超时已被发送<span class="text-warning fw600">通知</span>。';
$L['WSD_NOTIFY']                                 = '<span class="text-info fw900">[notify]</span> {user} 收到了一条通知。';
$L['WSD_ADMIN_STOP']                             = '<span class="text-info fw900">[admin-stop]</span> {user} 正在通过 <span class="text-mute fw600">{device}</span> 观看的 <span class="text-primary fw600">{media}</span> 已被 <strong>{admin}</strong> {admin_status} <span class="text-danger fw600">强制停止</span>。';
$L['WSD_KILL_STREAM']                            = '<span class="text-info fw900">[kill-stream]</span> {user} 从 <span class="text-mute fw600">{device} {ip}</span> 观看的 <span class="text-primary fw600">{media}</span> 已暂停 <span class="text-info fw600">{paused_time}</span>，暂停位置为 <span class="text-mute">{pause_position}</span>，时间为 <span class="text-mute fw600">{pause_date} {pause_time}</span>，由于空闲超时已被<span class="text-danger fw600">停止播放</span>。';
$L['WSD_ADMIN_DISCONNECT']                       = '<span class="text-info fw900">[admin-disconnect]</span> {user} 正在通过 <span class="text-mute fw600">{device}</span> 观看的 <span class="text-primary fw600">{media}</span> 已被 <strong>{admin}</strong> {admin_status} <span class="text-danger fw600">强制断开连接</span>。';
$L['WSD_DISCONNECT_STREAM']                      = '<span class="text-info fw900">[kill-stream]</span> {user} 从 <span class="text-mute fw600">{device} {ip}</span> 观看的 <span class="text-primary fw600">{media}</span> 已暂停 <span class="text-info fw600">{paused_time}</span>，暂停位置为 <span class="text-mute">{pause_position}</span>，时间为 <span class="text-mute fw600">{pause_date} {pause_time}</span>，由于空闲超时已被<span class="text-danger fw600">断开连接</span>。';
$L['WSD_MASS_NOTIFICATION']                      = '<span class="text-info fw900">[mass-notification]</span> <strong>{admin}</strong> {admin_status} 发送了群发通知。<br><strong>已通知用户：</strong>{users_notified}<br><strong>活跃用户：</strong>{active_users}，<strong>总会话数：</strong>{session_count}。<div style="border:1px solid var(--qb-color-8-rgba);background:var(--qb-color-1-rgba);padding:4px 12px;border-radius:3px;text-wrap:pretty;min-width:250px;"><strong>{notif_header}</strong><br>{notif_text}</div>';
$L['WSD_USER_ACTION']                            = '<span class="text-info fw900">[user-action]</span> {user} 执行了操作：<span class="text-primary fw600">{action}</span>，时间为 <span class="text-mute fw600">{date} {time}</span>。';
$L['NONE']                                       = '无';

/* *****************************************
 * #4.4.10.1 - page level errors & messages
 *******************************************/
$L['MISSING_FIELD']                    = '缺少字段';
$L['MISSING_API_KEY']                  = '缺少 API 密钥';
$L['INVALID_API_KEY_FORMAT']           = 'API 密钥格式无效，请输入有效的 API 密钥。';
$L['UNKNOWN_MEDIA']                    = '未知媒体';
$L['UNKNOWN_DURATION']                 = '未知时长';
$L['UNKNOWN_PAUSE_TIME']               = '未知暂停时间';
$L['ERROR_FETCHING_LOGS']              = '获取日志时出错。';
$L['NO_SUPPORTED_STREAMING_SERVICE']   = '未安装任何受支持的流媒体服务。';
$L['PROCESS_REQUEST_ERROR']            = '处理请求时出错，请重试。';
$L['API_CONNECTION_ERROR']             = '无法连接到 {serviceName} API。请检查您的 API 密钥和服务器配置。';
$L['INPUT_READ_FAILED']                = '读取输入失败。';
$L['INVALID_INPUT']                    = '输入无效，请检查您的输入并重试。';
$L['INVALID_JSON_PAYLOAD']             = '无效的 JSON 数据：{error}';
$L['INVALID_EMBY_API_KEY']             = '无效的 Emby API 密钥。';
$L['INVALID_JELLYFIN_API_KEY']         = '无效的 Jellyfin API 密钥。';
$L['DB_FILE_NOT_FOUND']                = '未找到数据库文件：{dbPath}';
$L['API_KEY_SAVE_SUCCESS']             = 'API 密钥保存成功。';
$L['API_KEY_SAVE_FAILED']              = 'API 密钥保存失败。';
$L['INVALID_TEMP_TRANSCODE_PATH']      = '无效的临时转码路径。';
$L['INVALID_SERVICE_SPECIFIED']        = '指定的服务无效。';
$L['TEMP_TRANSCODE_PATH_SAVE_FAIL']    = '保存临时转码路径失败。';
$L['TEMP_TRANSCODE_PATH_SAVE_SUCCESS'] = '临时转码路径保存成功。';
$L['TRANSCODE_INTERVAL_SAVE']          = '转码自动清理间隔保存成功。';
$L['TRANSCODE_INTERVAL_FAILED']        = '转码自动清理间隔保存失败。';
$L['INVALID_TRANSCODE_PATH']           = '无效或缺少转码路径。';
$L['TRANSCODE_DIR_EMPTY_FAILED']       = '清空临时转码目录失败。';
$L['TRANSCODE_DIR_EMPTY_SUCCESS']      = '临时转码目录已成功清空。';
$L['EMBY_CONFIG_LOAD_FAILED']          = '加载 Emby 配置失败。';
$L['EMBY_API_KEY_RETRIEVE_FAILED']     = '检索 Emby API 密钥失败。';
$L['JELLYFIN_API_KEY_RETRIEVE_FAILED'] = '检索 Jellyfin API 密钥失败。';
$L['JELLYFIN_CONFIG_LOAD_FAILED']      = '加载 Jellyfin 配置失败。';
$L['LATEST_LOG_FETCH_FAILED']          = '获取最新日志失败。';
$L['ERROR_PREFIX']                     = '[错误] ';
$L['UNKNOWN']                          = '未知';
$L['UNKNOWN_USER']                     = '未知用户';
$L['UNKNOWN_DEVICE']                   = '未知设备';
$L['API_URL_KEY_REQUIRED']             = '需要 API URL 和密钥。';
$L['FAILED_TO_CREATE_UPDATE_TRIGGER']  = '创建更新触发器失败：';
$L['DB_TABLE_CREATE_FAILED']           = '创建 `media_api` 数据表失败：{error}';
$L['DB_TABLE_INFO_FAILED']             = '获取 `media_api` 表信息失败：{error}';
$L['DB_COLUMN_ADD_FAILED']             = '向 `media_api` 表添加 `{column}` 字段失败：{error}';
$L['LOCATION_PRIVATE_RESERVED']        = '私有/本地 IP';
$L['UNKNOWN_IP']                       = '未知 IP';
$L['LOCATION_UNKNOWN_CITY']            = '未知城市';
$L['LOCATION_UNKNOWN_STATE']           = '未知州/省';
$L['LOCATION_UNKNOWN_COUNTRY']         = '未知国家';
$L['LOCATION_LOADING']                 = '正在加载位置...';
$L['LOCATION_ERROR']                   = '错误';
$L['API_MOVIE_COUNT_FETCH_FAILED']     = '从 {applicationName} API 获取电影数量失败。HTTP 状态码：{httpCode}，错误：{error}';
$L['API_MOVIE_COUNT_NOT_FOUND']        = '{applicationName} API 响应中未找到电影数量。';
$L['API_SERIES_COUNT_FETCH_FAILED']    = '从 {applicationName} API 获取剧集数量失败。HTTP 状态码：{httpCode}，错误：{error}';
$L['API_SERIES_COUNT_NOT_FOUND']       = '{applicationName} API 响应中未找到剧集数量。';
$L['API_EPISODE_COUNT_FETCH_FAILED']   = '从 {applicationName} API 获取集数失败。HTTP 状态码：{httpCode}，错误：{error}';
$L['API_EPISODE_COUNT_NOT_FOUND']      = '{applicationName} API 响应中未找到集数。';
$L['CURL_INIT_FAILED']                 = '为 {applicationName} 初始化 cURL 会话失败。';
$L['CURL_ERROR']                       = 'cURL 错误：{error}';
$L['HTTP_ERROR']                       = 'HTTP 错误：状态码 {httpStatus}';
$L['UNEXPECTED_RESPONSE_TYPE']         = '意外的响应类型：{responseType}';
$L['INVALID_LOGS_FORMAT']              = '无效的日志格式：期望数组，但收到 {logType}';
$L['INVALID_APPLICATION_NAME']         = '无效的应用程序名称，必须为 \'jellyfin\' 或 \'emby\'。';
$L['DB_QUERY_PREPARE_FAILED']          = '准备数据库查询失败：{error}';
$L['DB_QUERY_EXECUTION_FAILED']        = '执行数据库查询失败：{error}';
$L['DB_SELECT_QUERY_PREPARE_FAILED']   = '准备 SELECT 查询失败：{error}';
$L['DB_SELECT_QUERY_EXECUTE_FAILED']   = '执行 SELECT 查询失败：{error}';
$L['DB_UPDATE_QUERY_PREPARE_FAILED']   = '准备 UPDATE 查询失败：{error}';
$L['DB_INSERT_QUERY_PREPARE_FAILED']   = '准备 INSERT 查询失败：{error}';
$L['DB_API_KEY_RETRIEVAL_FAILED']      = '因数据库错误而无法检索 API 密钥。';
$L['UNSUPPORTED_DB_TYPE']              = '不支持的数据库类型：{dbType}';
$L['DOMAIN_NOT_DEFINED']               = '未定义 {applicationName} 域名。';
$L['QUERY_FAILED']                     = '查询失败：{errorInfo}';
$L['NO_INSTALLATION_FOUND']            = '未找到任何用户的 {applicationName} 安装。';
$L['USERNAME_FETCH_FAILED']            = '无法获取 {applicationName} 用户名，用户 ID：{appUID}。';
$L['INVALID_API_URL']                  = '无效的 {applicationName} API URL：{apiUrl}。';
$L['INVALID_TOGGLE_VALUE']             = '无效的切换值，期望为 0 或 1。';
$L['INVALID_PATH_FORMAT']              = '无效的路径格式，期望为字符串。';
$L['INVALID_INTERVAL']                 = '无效的间隔格式，期望为正整数。';
$L['SETTINGS_SAVE_FAILED']             = '设置保存失败，请重试。';
$L['SERVER_ERROR']                     = '服务器错误';

/* **********************************
 * #4.5 - ERROR PAGES
 ************************************/
$L['404HACK'] = '哎哟! 你真的想伤害我？';
$L['404PAGE'] = '您查找的页面不存在。';
$L['404PRO']  = '请购买 <a href="https://nullrefer.ir/?https://quickbox.io/product/quickbox-pro-subscription/" rel="noopener nofollow" target="_blank">QuickBox 许可证</a> 以使用此页面。';
$L['500PAGE'] = '这很尴尬，似乎出了问题。';
$L['WHOOPS']  = '呜呼!';
