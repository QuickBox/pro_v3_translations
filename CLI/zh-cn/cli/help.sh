#!/usr/bin/env bash
################################################################################
# 帮助消息模块
# 包含所有帮助文本生成函数和软件特定的帮助消息
################################################################################

# 根据提供的选项生成帮助文本的函数
generate_help_text() {
  local software_title="$1"
  local software_name="$2"
  local has_update="$3"
  local options="$4"
  local examples="$5"
  local notes="$6"

  local processes="  install    安装 ${software_title}
  reinstall  重新安装 ${software_title}
  remove     移除 ${software_title}"

  if [[ ${has_update} == 1 ]]; then
    processes="${processes}
  update     更新 ${software_title}"
  fi

  processes="${processes}
  help       显示此帮助消息"

  declare text="
QuickBox 软件管理 - ${software_title}

用法：
  qb [process] ${software_name} [options]

过程：
${processes}

选项：
${options}

示例：
${examples}
${notes}
"
  quickbox::dashboard::log "${text}"
}

# 获取特定软件帮助文本的函数
quickbox::software::help() {
  local software_help_name="$1"
  local software_title="${software_help_name^}" # 首字母大写
  local has_update

  case "${software_help_name}" in
  emby | jellyfin)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username  为 ${software_title} 设置用户名（必需）
  -d | --domain    为 ${software_title} 设置域名
  --beta           安装 ${software_title} 的测试版" \
      "  qb install ${software_help_name} -u username -d '${software_help_name}.domain.com'
  qb reinstall ${software_help_name} -u username -d '${software_help_name}.domain.com'
  qb install ${software_help_name} -u username --beta
  qb reinstall ${software_help_name} -u username --beta
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username

  ## 使用多个选项
  qb install ${software_help_name} -u username -d '${software_help_name}.domain.com' --beta
  qb reinstall ${software_help_name} -u username -d '${software_help_name}.domain.com' --beta" \
      "
注意：
  - 使用域名选项安装或重新安装时，将自动配置 Nginx 反向代理。
      * 确保域名指向服务器 IP 地址并设置了正确的 DNS 记录。"
    ;;

  mylar3)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u   | --username             为 ${software_title} 设置用户名（必需）
  -clp | --comic-location-path  为漫画设置位置路径（默认：/home/username/Media/Comics）" \
      "  qb install ${software_help_name} -u username -clp '/path/to/comics'
  qb reinstall ${software_help_name} -u username -clp '/path/to/comics'
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username" \
      ""
    ;;

  radarr | sonarr)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username  为 ${software_title} 设置用户名（必需）
  --4k             设置 4k 构建安装（默认：1080p）
  --nightly        设置夜间分支构建安装（默认：最新版）" \
      "  qb install ${software_help_name} -u username              # 安装标准版（1080p）
  qb install ${software_help_name} -u username --4k         # 安装 4k 版本
  qb reinstall ${software_help_name} -u username --nightly  # 重新安装夜间版本
  qb reinstall ${software_help_name} -u username --4k       # 重新安装 4k 版本
  qb remove ${software_help_name} -u username               # 移除标准版（1080p）
  qb remove ${software_help_name} -u username --4k          # 移除 4k 版本
  qb update ${software_help_name} -u username               # 更新标准版（1080p）
  qb update ${software_help_name} -u username --4k          # 更新 4k 版本

  ## 使用多个选项
  qb install ${software_help_name} -u username --4k --nightly    # 在夜间分支安装 4k 版本
  qb reinstall ${software_help_name} -u username --4k --nightly  # 在夜间分支重新安装 4k 版本
  qb update ${software_help_name} -u username --4k --nightly     # 在夜间分支更新或更新到 4k 版本" \
      ""
    ;;

  calibre | kavita)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u  | --username      为 ${software_title} 设置用户名（必需）
  -lp | --library-path  为您的库设置位置路径（默认：/home/username/.config/${software_title}/library）" \
      "  qb install ${software_help_name} -u username -lp '/path/to/library'
  qb reinstall ${software_help_name} -u username -lp '/path/to/library'
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username" \
      ""
    ;;

  plex)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u   | --username          为 ${software_title} 设置用户名（必需）
  -pct | --plex-claim-token  为 ${software_title} 设置 Plex 声明令牌（快速声明必需）
  -d   | --domain            为 ${software_title} 设置域名
  -D   | --data-dir          为 ${software_title} 设置数据目录（默认：/home/username/.config/'Plex Media Server'）" \
      "  qb install ${software_help_name} -u username -pct 'claim_token' -d 'plex.domain.com' -D '/path/to/data'
  qb reinstall ${software_help_name} -u username -pct 'claim_token' -d 'plex.domain.com' -D '/path/to/data'
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username" \
      "
注意：
  - Plex 声明令牌可以从以下位置获取：
      https://www.plex.tv/claim/

  - 避免将数据目录设置为现有目录，例如：
      /opt, /opt/username, /mnt, /home, /home/username 等。

  - 在现有目录中创建新数据目录是安全的，例如：
      /opt/plex, /opt/username/plex, /mnt/plex, /data/plex 等。

  - 如果数据目录不存在，将创建它。

  - 数据目录将归用户名的用户和组所有。

  - 使用域名选项安装或重新安装时，将自动配置 Nginx 反向代理。
      * 确保域名指向服务器 IP 地址并设置了正确的 DNS 记录。

  - 更新时，系统将提示您输入 plex.tv 电子邮件、密码以及 2FA 代码。"
    ;;

  bazarr)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username  为 ${software_title} 设置用户名（必需）
  --4k             设置 4k 构建安装（默认：1080p）" \
      "  qb install ${software_help_name} -u username                 # 安装标准版（1080p）
  qb install ${software_help_name} -u username --4k            # 安装 4k 版本
  qb reinstall ${software_help_name} -u username               # 重新安装标准版（1080p）
  qb reinstall ${software_help_name} -u username --4k          # 重新安装 4k 版本
  qb remove ${software_help_name} -u username                  # 移除标准版（1080p）
  qb remove ${software_help_name} -u username --4k             # 移除 4k 版本
  qb update ${software_help_name} -u username                  # 更新标准版（1080p）
  qb update ${software_help_name} -u username --4k             # 更新 4k 版本" \
      ""
    ;;

  autodl | x2go)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "" \
      "  qb install ${software_help_name}
  qb reinstall ${software_help_name}
  qb remove ${software_help_name}
  qb update ${software_help_name}" \
      ""
    ;;

  fail2ban)
    has_update=0
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "" \
      "  qb install ${software_help_name}
  qb reinstall ${software_help_name}
  qb remove ${software_help_name}" \
      ""
    ;;

  filebot)
    has_update=0
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u  | --username    为 ${software_title} 设置用户名（必需）
  -mp | --media-path  为 ${software_title} 设置媒体路径（默认：/home/username/Media）
  -o 'deluge'         安装带有 Deluge 集成的 ${software_title}
  -o 'nzbget'         安装带有 NZBGet 集成的 ${software_title}
  -o 'rtorrent'       安装带有 rTorrent 集成的 ${software_title}
  -o 'sabnzbd'        安装带有 SABnzbd 集成的 ${software_title}" \
      "  qb install ${software_help_name} -u username
  qb reinstall ${software_help_name} -u username
  qb remove ${software_help_name} -u username

  ## 使用多个选项
  qb install ${software_help_name} -u username -o 'deluge' -o 'nzbget'
  qb reinstall ${software_help_name} -u username -o 'rtorrent' -o 'sabnzbd'" \
      ""
    ;;

  jdownloader)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u  | --username      为 ${software_title} 设置用户名（必需）
  -e  | --email         为 ${software_title} 设置电子邮件（必需） .i.
  -p  | --password      为 ${software_title} 设置密码（必需） .ii.
  -D  | --downloads-dir 为 ${software_title} 设置下载路径（默认：/home/username/Downloads）" \
      "  qb install ${software_help_name} -u username -e 'email' -p 'password' -D '/path/to/downloads'
  qb reinstall ${software_help_name} -u username -e 'email' -p 'password' -D '/path/to/downloads'
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username" \
      "
注意：
  - .i. 安装 JDownloader 需要电子邮件和密码。
      * .ii. 这些是您的 MyJDownloader 账户凭据。"
    ;;

  jellyseerr | komga | overseerr)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u  | --username 为 ${software_title} 设置用户名（必需）
  -d  | --domain   为 ${software_title} 设置域名" \
      "  qb install ${software_help_name} -u username -d '${software_help_name}.domain.com'
  qb reinstall ${software_help_name} -u username -d '${software_help_name}.domain.com'
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username" \
      "
注意：
  - 使用域名 [-d] 选项安装或重新安装时，将自动配置 Nginx 反向代理。
      * 确保域名指向服务器 IP 地址并设置了正确的 DNS 记录。"
    ;;

  lecert)
    has_update=0
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  --dash         为使用 '-d' 指定的域名安装证书并为 QuickBox 仪表板创建反向代理
  --no-dash      为使用 '-d' 指定的自定义域名安装证书（仅证书，无反向代理）
  --emby         为使用 '-d' 指定的域名安装证书并为 Emby 创建反向代理
  --jellyfin     为使用 '-d' 指定的域名安装证书并为 Jellyfin 创建反向代理
  --jellyseerr   为使用 '-d' 指定的域名安装证书并为 Jellyseerr 创建反向代理
  --komga        为使用 '-d' 指定的域名安装证书并为 Komga 创建反向代理
  --overseerr    为使用 '-d' 指定的域名安装证书并为 Overseerr 创建反向代理
  --plex         为使用 '-d' 指定的域名安装证书并为 Plex 创建反向代理

  挑战方法：
  --dns           使用 DNS 挑战而不是 HTTP 挑战（启用通配符证书）
  --dns-provider  DNS 挑战验证的 DNS 提供商
                  支持的提供商：cloudflare (cf), route53, godaddy, namecheap, digitalocean (do),
                  linode, ovh, vultr, gandi, dnsimple, hurricane (he), azure, gcp, ionos

  域名选项：
  -d  | --domain  为 ${software_title} 设置域名（DNS 挑战支持通配符）" \
      "  # 标准 HTTP 挑战示例
  qb install ${software_help_name} --dash -d 'example.com'
  qb install ${software_help_name} --jellyfin -d 'jellyfin.example.com' --plex -d 'plex.example.com'

  # DNS 挑战示例（用于通配符证书）
  qb install ${software_help_name} --dash -d '*.example.com' --dns --dns-provider cloudflare
  qb install ${software_help_name} --jellyseerr -d '*.movies.example.com' --dns --dns-provider route53
  qb install ${software_help_name} --plex -d '*.media.example.com' --dns --dns-provider vultr
  qb install ${software_help_name} --komga -d '*.books.example.com' --dns --dns-provider gandi

  # 单个命令中的多个域名
  qb install ${software_help_name} --dash -d 'example.com' --overseerr -d 'requests.example.com'

  # 证书管理
  qb reinstall ${software_help_name} --plex -d 'plex.example.com' --dns --dns-provider godaddy
  qb remove ${software_help_name} --emby -d 'emby.example.com'
  qb renew ${software_help_name} -d 'domain1.com' -d 'domain2.com'" \
      "
DNS 挑战设置：
  使用以下方法之一配置您的 DNS 提供商凭据：

  方法 1 - QuickBox 仪表板（推荐）：
    导航到 QuickBox Web 仪表板中的 SSL 控制
    选择 DNS 挑战，选择您的提供商，并输入凭据
    仪表板将安全存储凭据以供将来使用

  方法 2 - CLI 配置：
    qb dns-credentials setup cloudflare
    按照交互式提示配置您的凭据

  方法 3 - 环境变量（一次性使用）：
    export CF_Token='your_cloudflare_api_token' && qb install lecert --dash -d '*.example.com' --dns --dns-provider cloudflare

  提供商特定凭据：

  Cloudflare（推荐）：
    export CF_Token='your_cloudflare_api_token'
    # 或（传统方法）
    export CF_Email='your@email.com'
    export CF_Key='your_global_api_key'

  AWS Route53：
    export AWS_ACCESS_KEY_ID='your_access_key'
    export AWS_SECRET_ACCESS_KEY='your_secret_key'

  GoDaddy：
    export GD_Key='your_api_key'
    export GD_Secret='your_api_secret'

  NameCheap：
    export Namecheap_Username='your_username'
    export Namecheap_ApiKey='your_api_key'

  DigitalOcean：
    export DO_API_KEY='your_api_token'

  Linode：
    export LINODE_V4_API_KEY='your_api_key'

  OVH：
    export OVH_AK='your_application_key'
    export OVH_AS='your_application_secret'
    export OVH_CK='your_consumer_key'

  Vultr：
    export VULTR_API_KEY='your_api_key'

  Gandi：
    export GANDI_LIVEDNS_KEY='your_api_key'

  DNSimple：
    export DNSimple_OAUTH_TOKEN='your_oauth_token'

  Hurricane Electric (he)：
    export HE_Username='your_username'
    export HE_Password='your_password'

  Microsoft Azure：
    export AZUREDNS_SUBSCRIPTIONID='your_subscription_id'
    export AZUREDNS_TENANTID='your_tenant_id'
    export AZUREDNS_APPID='your_app_id'
    export AZUREDNS_CLIENTSECRET='your_client_secret'

  Google Cloud Platform：
    export GCP_PROJECT='your_project_id'
    export GCP_SERVICE_ACCOUNT_JSON_FILE='/path/to/service-account.json'

  IONOS：
    export IONOS_PREFIX='your_prefix'
    export IONOS_SECRET='your_secret'

主要功能：
  • HTTP 挑战：默认方法，需要端口 80/443 可访问
  • DNS 挑战：用于通配符证书（*.domain.com）和受限网络
  • 为支持的应用程序自动配置 Nginx 反向代理
  • 单个命令中的多域名证书安装
  • 使用 'qb renew lecert' 进行证书续期
  • 安全的凭据存储和管理

要求：
  • 域名必须指向具有正确 DNS 记录的服务器 IP 地址
  • 对于 DNS 挑战：必须配置有效的 DNS 提供商凭据
  • 对于通配符证书：DNS 挑战是强制性的
  • 确保防火墙允许 HTTP（80）和 HTTPS（443）流量用于 HTTP 挑战

故障排除：
  • 检查 DNS 传播：'dig domain.com' 或 'nslookup domain.com'
  • 验证凭据：使用 'qb dns-credentials check [provider]' 验证存储的凭据
  • 检查证书状态：使用 'qb dns-credentials status' 查看已安装的证书
  • 速率限制：Let's Encrypt 有速率限制 - 避免每小时过多请求
  • 域名验证：确保域名在您的 DNS 提供商中正确配置"
    ;;

  lidarr | readarr)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username  为 ${software_title} 设置用户名（必需）
  --nightly        设置夜间分支构建安装（默认：最新版）" \
      "  qb install ${software_help_name} -u username                 # 安装默认版（最新版）
  qb install ${software_help_name} -u username --nightly       # 安装夜间版
  qb reinstall ${software_help_name} -u username               # 重新安装默认版（最新版）
  qb reinstall ${software_help_name} -u username --nightly     # 重新安装夜间版
  qb remove ${software_help_name} -u username                  # 移除当前安装
  qb update ${software_help_name} -u username                  # 更新默认版（最新版）
  qb update ${software_help_name} -u username --nightly        # 更新到/从夜间版" \
      ""
    ;;

  ombi)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username          为 ${software_title} 设置用户名（必需）
  --ombi2mysql             将 Ombi 数据迁移到 MySQL
  --phmyadmin              为 Ombi 迁移安装 phpMyAdmin
  --mysql-user=<username>  为 Ombi 迁移设置 MySQL 用户名（默认：使用 -u 指定的用户名）
  --mysql-pass=<password>  为 Ombi 迁移设置 MySQL 密码（默认：随机生成）
  --mysql-host=<host>      为 Ombi 迁移设置 MySQL 主机（默认：localhost）
  --mysql-port=<port>      为 Ombi 迁移设置 MySQL 端口（默认：3306）
  --mysql-db=<database>    为 Ombi 迁移设置 MySQL 数据库（默认：Ombi）" \
      "  qb install ${software_help_name} -u username
  qb reinstall ${software_help_name} -u username
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username --ombi2mysql --phpmyadmin" \
      "
注意：
  - --ombi2mysql 选项将把 Ombi 数据迁移到 MySQL。
    * 这需要指定 MySQL 用户名、密码、主机、端口和数据库。
    * 如果未指定任何值，将使用默认值：
      - MySQL 用户：用户名（来自 -u 选项）
      - MySQL 密码：随机生成的密码
      - MySQL 主机：localhost
      - MySQL 端口：3306
      - MySQL 数据库：Ombi

  - --phpmyadmin 选项将为 Ombi 迁移安装 phpMyAdmin。
    * 这将允许您通过 /phpMyAdmin webUI 管理 Ombi 的 MySQL 数据库。
  - --mysql-user、--mysql-pass、--mysql-host、--mysql-port 和 --mysql-db 选项是可选的。
    * 如果指定，它们将覆盖默认值。

  - Ombi 默认安装时支持 SQLite。
  - MySQL 支持仅在更新过程中使用 --ombi2mysql 选项时可用。"
    ;;

  phpmyadmin)
    has_update=0
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username  为 ${software_title} 设置用户名（必需）
  --pma-user       设置 phpMyAdmin 用户名（默认：使用 -u 指定的用户名）
  --pma-pass       设置 phpMyAdmin 密码（默认：随机生成）
  --pma-host       设置 phpMyAdmin 主机（默认：localhost）" \
      "  qb install ${software_help_name} -u username --pma-user 'pma_user' --pma-pass 'pma_pass' --pma-host 'localhost'
  qb reinstall ${software_help_name} -u username --pma-user 'pma_user' --pma-pass 'pma_pass' --pma-host 'localhost'
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username" \
      "
注意：
  - phpMyAdmin 用户名和密码是可选的。
    * 如果未指定，将使用默认值：
      - phpMyAdmin 用户：用户名（来自 -u 选项）
      - phpMyAdmin 密码：随机生成的密码
      - phpMyAdmin 主机：localhost"
    ;;

  quota)
    has_update=0
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -qm | --quota-mount  为 ${software_title} 设置系统挂载点（必需）" \
      "  qb install ${software_help_name} -qm '/path/to/mount/point'
  qb reinstall ${software_help_name} -qm '/path/to/mount/point'
  qb remove ${software_help_name}" \
      ""
    ;;

  rclone)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username  为 ${software_title} 设置用户名（必需）
  --dropbox        安装带有 Dropbox 集成的 ${software_title}
  --gdrive         安装带有 Google Drive 集成的 ${software_title}
  --encrypted      安装带有加密的 ${software_title}
  --beta           安装 ${software_title} 的测试版" \
      "  qb install ${software_help_name} -u username --dropbox
  qb install ${software_help_name} -u username --beta --gdrive
  qb reinstall ${software_help_name} -u username --dropbox --encrypted
  qb reinstall ${software_help_name} -u username --gdrive
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username" \
      "
注意：
  - 建议在单次安装过程中使用 --dropbox 或 --gdrive 选项之一。
     * 这将防止与 rclone 配置发生任何冲突。

  - 使用 --dropbox 或 --gdrive 选项安装时，rclone 配置将自动创建。

  - 使用 --encrypted 选项安装时，rclone 配置将使用指定的信息进行加密。

  - 使用 --beta 选项安装时，将安装 rclone 的测试版。"
    ;;

  requestrr | vpn)
    has_update=0
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username  为 ${software_title} 设置用户名（必需）" \
      "  qb install ${software_help_name} -u username
  qb reinstall ${software_help_name} -u username
  qb remove ${software_help_name} -u username" \
      ""
    ;;

  rtorrent)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username    为 ${software_title} 设置用户名（必需）
  -o '0.15.1'        安装版本 0.15.1
  -o '0.10.0'        安装版本 0.10.0
  -o '0.9.8'         安装版本 0.9.8
  -o '0.9.7'         安装版本 0.9.7
  -o '0.9.6'         安装版本 0.9.6
  -o 'feature-bind'  安装 ${software_title} 的 feature-bind 版本" \
      "  qb install ${software_help_name} -u username -o '0.15.1'
  qb install ${software_help_name} -u username -o '0.10.0'
  qb install ${software_help_name} -u username -o '0.9.8'
  qb install ${software_help_name} -u username -o '0.9.7'
  qb reinstall ${software_help_name} -u username -o '0.9.6'
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username -o '0.15.1'
  qb update ${software_help_name} -u username -o 'feature-bind'" \
      "
注意：
  - rTorrent 是一个全局安装的应用程序，服务器上的所有用户都可以使用。

  - rTorrent 的 feature-bind 版本是一个包含绑定功能的自定义构建。
     * 绑定功能允许您将 rTorrent 绑定到特定的 IP 地址。"
    ;;

  rutorrent)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username    为 ${software_title} 设置用户名（必需）
  --beta             安装 ${software_title} 的测试版" \
      "  qb install ${software_help_name} -u username
  qb reinstall ${software_help_name} -u username
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username --beta" \
      "
注意：
  - ruTorrent 是一个全局安装的应用程序，服务器上的所有用户都可以使用。

  - ruTorrent 是 rTorrent 安装过程的一部分，安装 rTorrent 时
    ruTorrent 将默认安装最新版本。如果 rTorrent 未安装，
    则 ruTorrent 将安装版本 0.9.8。

  - ruTorrent 默认将安装最新版本。如果您希望安装测试版，
    可以使用 --beta 选项。请记住，两个版本并不总是不同。"
    ;;

  sabnzbd | thelounge | xteve)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username  为 ${software_title} 设置用户名（必需）
  --beta           安装 ${software_title} 的测试版" \
      "  qb install ${software_help_name} -u username
  qb install ${software_help_name} -u username --beta
  qb reinstall ${software_help_name} -u username
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username" \
      ""
    ;;

  transmission)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username  为 ${software_title} 设置用户名（必需）
  --v4             安装 ${software_title} 版本 4（默认：版本 3）" \
      "  qb install ${software_help_name} -u username --v4
  qb reinstall ${software_help_name} -u username --v4
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username --v4" \
      ""
    ;;

  wireguard)
    has_update=0
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username              为 ${software_title} 设置用户名（必需）
  -o [client|server]           将 WireGuard 安装为客户端或服务器
  -cai  | --client-allowed-ip  为 WireGuard 服务器设置允许的 IP
  -cidr | --cidr               为 WireGuard 服务器设置 CIDR（默认：10.5.0.2/16）
  -dns  | --dns                为 WireGuard 服务器设置 DNS（默认：1.1.1.1）
  -ep   | --endpoint           为 WireGuard 服务器设置端点
  -lp   | --listen-port        为 WireGuard 服务器设置监听端口（默认：51820）
  -noc  | --number-of-clients  为 WireGuard 服务器设置客户端数量
  -pdr  | --postdown-rule      为 WireGuard 服务器设置关闭后规则
  -pur  | --postup-rule        为 WireGuard 服务器设置启动后规则" \
      "  qb install ${software_help_name} -u username -o server \\
  -cai '192.168.0.2,192.168.0.3' \\
  -cidr '10.5.0.2/16' \\
  -dns '0.0.0.0' \\
  -ep 'server.domain.com' \\
  -lp 51820 \\
  -noc 5 \\
  -pdr 'iptables -D INPUT -i wg0 -j ACCEPT' \\
  -pur 'iptables -A INPUT -i wg0 -j ACCEPT'
  qb reinstall ${software_help_name} -u username -o client
  qb remove ${software_help_name} -u username" \
      "
注意：
  - WireGuard 服务器将安装默认 CIDR 为 10.5.0.2/16，
    DNS 为 1.1.1.1，1 个客户端配置，监听端口为 51820。

  - WireGuard 服务器将安装默认的关闭后和启动后规则。
     * 关闭后规则将移除 WireGuard 服务器的 iptables 规则。
     * 启动后规则将添加 WireGuard 服务器的 iptables 规则。

  - '-noc' 选项指定要为其创建配置的客户端数量。
    这些配置将保存在 '/srv/quickbox/db/wireguard' 目录中。

  - 大多数 VPN 提供商为 WireGuard 提供配置文件。
    如果您使用 NordVPN，它不直接提供配置文件，
    您可以使用包含的 NordVPN 配置生成器生成一个。
    有关生成 NordVPN 配置文件的更多信息，
    请使用命令：nvpn_conf_gen -h"
    ;;

  wsdashboard)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username  为 ${software_title} 设置用户名（必需）" \
      "  qb install ${software_help_name} -u username     - 安装具有增强服务配置的 WSD
  qb reinstall ${software_help_name} -u username   - 重新安装具有增强服务配置的 WSD
  qb remove ${software_help_name} -u username      - 删除 WSD 并清理所有服务文件
  qb update ${software_help_name} -u username      - 更新具有增强服务配置的 WSD
  qb maintenance ${software_help_name} -u username - 执行服务维护和健康检查" \
      "
增强功能：
  - 非 root 服务执行（www-data 用户）
  - 全面的安全沙盒
  - 资源限制和监控
  - 自动健康检查和诊断
  - 优雅的进程管理
  - 结构化日志记录和监控
  - www-data 用户的自动证书访问

服务管理：
  systemctl status qbwsd.service     - 检查服务状态
  systemctl restart qbwsd.service    - 重启服务
  journalctl -u qbwsd.service -f     - 查看实时日志
  qbwsd-health-check.sh --verbose    - 运行详细健康检查
  qbwsd-health-check.sh --fix        - 自动修复常见问题"
    ;;

  *)
    has_update=1
    generate_help_text "${software_title}" "${software_help_name}" "${has_update}" \
      "  -u | --username  为 ${software_title} 设置用户名（必需）" \
      "  qb install ${software_help_name} -u username
  qb reinstall ${software_help_name} -u username
  qb remove ${software_help_name} -u username
  qb update ${software_help_name} -u username" \
      ""
    ;;
  esac
}