#!/usr/bin/env bash
################################################################################
# 软件配置消息模块
# 包含所有软件配置、设置和特殊处理消息
################################################################################

quickbox::lang::software::ombi_mysql_fallback() {
  declare text="[!] MySQL 未运行或不可用，跳过数据库/用户删除，触发备用方案..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_user_skip() {
  declare text="[i] 跳过 MySQL 用户删除：'${db_user}' 在 /root/.my.cnf 中定义"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_user_remove() {
  declare text="[!] 移除 MySQL 用户：'${db_user}'"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_user_retain() {
  declare text="[i] 保留 MySQL，因为其他数据库或用户可能仍然存在。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_cleanup_complete() {
  declare text="[✓] ${software_name} 的 MySQL 清理完成。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_fallback_remove() {
  declare text="[⚙] 执行备用 MySQL 移除（非交互式）..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_remove() {
  declare text="[*] 移除 MySQL 包..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_no_packages() {
  declare text="[i] 未找到要清除的 MySQL 包。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_autoremove() {
  declare text="[*] 自动移除并清理残留文件..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_check() {
  declare text="[*] 检查 MySQL 安装..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_install() {
  declare text="[*] 安装 MySQL APT 仓库配置..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_download_fail() {
  declare text="[✗] 下载 MySQL APT 配置失败"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_install_fail() {
  declare text="[✗] 安装 mysql-apt-config 包失败"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_install_packages() {
  declare text="[*] 安装 MySQL 包..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_install_retry() {
  declare text="[✗] MySQL 安装失败 — 清理后重试"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_install_failed() {
  declare text="[✗] MySQL 安装再次失败"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_config() {
  declare text="[*] 创建 MySQL 配置文件..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_start() {
  declare text="[*] 启动并启用 MySQL 服务..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_enable_fail() {
  declare text="[✗] 启用 MySQL 服务失败"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_start_fail() {
  declare text="[✗] 启动 MySQL 服务失败"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_config_fail() {
  declare text="[✗] MySQL 配置 /etc/mysql/my.cnf 缺失。中止设置。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_wait() {
  declare text="[*] 等待 MySQL 套接字准备就绪..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_socket_fail() {
  declare text="[✗] MySQL 未正常启动 — 套接字缺失"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_setup() {
  declare text="[*] 为 ${db_user} 设置 MySQL 用户和数据库..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_configured() {
  declare text="[✓] MySQL 已为用户 '${db_user}' 配置，数据库为 '${db_name}'"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_migration() {
  declare text="[⚙] 开始 Ombi 迁移到 MySQL..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_temp_fail() {
  declare text="[✗] 创建临时目录失败"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_python_fail() {
  declare text="[✗] 迁移需要 Python 3 和 pip3"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_pip_fail() {
  declare text="[✗] 安装必需的 Python 包失败"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_chdir_fail() {
  declare text="[✗] 更改目录到 ${TMP_DIR} 失败"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_clone() {
  declare text="[*] 克隆 ombi_sqlite_mysql 迁移工具..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_clone_fail() {
  declare text="[✗] 克隆 ombi_sqlite_mysql 仓库失败"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_backup() {
  declare text="[!] ${db} 的备份已创建在 ${config_dir}/${db}.bak"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_dbjson_fail() {
  declare text="[✗] 生成 database.json 失败"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_schema_fail() {
  declare text="[✗] 通过 Ombi 创建数据库架构失败"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_migration_fail() {
  declare text="[✗] 创建 migration.json 失败"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_data_fail() {
  declare text="[✗] 数据迁移失败"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_chdir_home_fail() {
  declare text="[✗] 更改目录回到 ${HOME} 失败"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_remove_sqlite() {
  declare text="[!] 已移除旧的 SQLite 数据库：${config_dir}/${db}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_cleanup() {
  declare text="[*] 清理临时文件..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::ombi_mysql_migration_complete() {
  declare text="[✓] Ombi 迁移到 MySQL 成功完成！"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plex_directory_warning() {
  declare text="自定义数据目录：'${software_install_directory}' 已存在。
使用 '${software_install_directory}/plex' 代替。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexclaim() {
  declare text="为 ${username} 申请 plex 服务器..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_credentials_header() {
  declare text="请输入您的 Plex 凭据（用户名/密码/2FA）："
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_credentials_subheader() {
  declare text="这些凭据不会被保存或与本实例之外共享。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_credentials_email() {
  declare text="电子邮件："
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_credentials_password() {
  declare text="密码："
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_credentials_otp() {
  declare text="2FA：[如果未设置2FA，请留空] "
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_credentials_fail() {
  declare text="需要用户名和密码才能下载 PlexPass 更新。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_credentials_incorrect() {
  declare text="用户名或密码不正确"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_credentials_loginfail() {
  declare text="登录失败，调试信息："
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_credentials_retrievefail() {
  declare text="无法检索下载 URL。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_credentials_parsefail() {
  declare text="无法解析 HTML 响应。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_downloading() {
  declare text="正在下载 Plex 更新..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_downloading_fail() {
  declare text="下载失败，错误代码 ${code}，${error}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_installing() {
  declare text="正在安装新版本的 Plex..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_updated() {
  declare text="Plex 已成功更新。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::plexupdate_current() {
  declare text="Plex 已是最新版本。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone_configure() {
  declare text="
请访问 https://console.developers.google.com 并创建一个项目。
您需要记下您的 client_id 和 client_secret。
您还可以访问以下知识库文章获取指导：
https://quickbox.io/knowledge-base/creating-a-google-api-client-id-client-secret-code/

在您记下 client_id 和 client_secret 后，请按任意键继续。

"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone_entries() {
  declare text="请在下方输入您的连接详情。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone_clientid() {
  declare text="客户端 ID："
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone_clientsecret() {
  declare text="客户端密钥："
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone_encryptpass() {
  declare text="加密密码："
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone_saltpass() {
  declare text="盐密码："
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone_salterror() {
  declare text="盐密码不能与加密密码相同。"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone_confirm() {
  declare text="请确认以下详细信息，然后继续..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone_clientid_confirm() {
  declare text="客户端 ID：${clientvar}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone_clientsecret_confirm() {
  declare text="客户端密钥：${secretvar}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone_encryptpass_confirm() {
  declare text="加密密码：${encvar}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone_saltpass_confirm() {
  declare text="盐密码：${saltvar}"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::rclone_continue() {
  declare text="如果您对上述设置感到满意，请按 Y 继续..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::software::znc_configure() {
  declare text="ZNC 配置现在将运行。请回答以下提示："
  quickbox::dashboard::log "${text}"
}

quickbox::lang::sonarrv4::update::error() {
  declare text
  text="$(tput setaf 7)Sonarr v4 $(tput setaf 1)不能$(tput setaf 7)从 v3 更新。
请卸载 v3 并安装 v4。$(tput sgr0)"
  quickbox::dashboard::log "${text}"
}

quickbox::lang::build::python311() {
  declare text="正在安装 python 3.11，请稍候，这可能需要一段时间..."
  quickbox::dashboard::log "${text}"
}

quickbox::lang::build::sabnzbd::par2cmdline() {
  declare text="正在安装 par2cmdline，请稍候，这可能需要一段时间..."
  quickbox::dashboard::log "${text}"
} 