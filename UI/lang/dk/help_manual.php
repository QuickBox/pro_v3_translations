<?php
return [
  // #4.4.7 - HELP MANUAL
  'QB_HELP'                                           => 'Hjælpemanual',

  // #4.4.7.1 - description
  'DESCRIPTION_CONTENT'                               => '<p>Velkommen til den omfattende grafiske visning af <code>qb</code> manpage, designet til at give dig en oversat, forenklet og effektiv tilgang til at få adgang til forskellige oplysninger om QuickBox. Dette brugervenlige interface sigter mod at give dybdegående indsigt i, hvordan QuickBox fungerer, et kraftfuldt og alsidigt værktøj til at administrere din server uden besvær.</p><p>I denne grafiske visning finder du en detaljeret liste over tilgængelige applikationer klar til problemfri installation, hvilket giver dig mulighed for at tilpasse din serveropsætning efter dine specifikke behov. Desuden præsenterer denne ressource en række andre væsentlige kommandoer til optimal udnyttelse inden for <code>qb</code> CLI-miljøet, hvilket giver dig mulighed for at navigere gennem dine serveropgaver effektivt og uden besvær.</p><p>Uanset om du er ny til QuickBox eller en erfaren bruger, fungerer denne grafiske visning af <code>qb</code> manpage som din ultimative reference til at udnytte QuickBox\'s fulde potentiale og frigøre den sande kraft i din serveradministration. Udforsk de forskellige funktioner, strømlinje dine serveroperationer og maksimer din produktivitet med hjælp fra denne intuitive og informative guide. Lad os dykke ned i det og gøre din QuickBox-oplevelse endnu mere givende!</p>',
  'API_INFO_DIRECT'                                   => '<p style="font-weight:600;">For mere information og reference om den indlejrede QuickBox API, <a href="/api-control.php" rel="noopenner nofollow" class="link" style="color:var(--qb-color-37);">se denne side</a>.</p>',

  // #4.4.7.2 - options
  'OPTIONS_HEADER'                                    => 'Indstillinger',
  'OPTIONS_CONTENT_HELP'                              => 'Viser denne hjælpemanual i CLI manpage-format',
  'OPTIONS_CONTENT_VERBOSE'                           => 'Aktiverer detaljeret tilstand til fejlfinding',

  // #4.4.7.3 - software
  'SOFTWARE_HEADER'                                   => 'Software',
  'SOFTWARE_INFO_CONTENT'                             => '<p>Følgende er en liste over alle tilgængelige applikationer til installation leveret gennem QuickBox-buildet.<br/>Softwarenavne præsenteres som set af <code>qb [install|reinstall|update|remove|help] [software_name]</code></p>',
  'ADMIN_INSTALLED_SOFTWARE_HEADER'                   => 'Admin-installeret software',
  'ADMIN_INSTALLED_SOFTWARE_INFO_CONTENT'             => '<p>Følgende applikationer skal installeres af systemadministratoren.<br/>Se tilgængelighedskolonnen nedenfor for yderligere detaljer.</p>',
  'MULTI_USER_SOFTWARE_HEADER'                        => 'Flere brugere software',
  'MULTI_USER_SOFTWARE_INFO_CONTENT'                  => '<p>Følgende applikationer kan installeres af flere brugere uden at have brug for admin-hjælp.<br/>Al applikationstilgængelighed bestemmes af systemadministratoren og gives til yderligere brugere inden for <a href="/usergroups.php" rel="noopener nofollow" class="link">oprettede grupper</a>.</p>',
  'SINGLE_USER_SOFTWARE_HEADER'                       => 'Enkelt bruger software',
  'SINGLE_USER_SOFTWARE_INFO_CONTENT'                 => '<p>Følgende applikationer kan installeres af kun én tildelt bruger ad gangen, uden at have brug for admin-hjælp.<br/>Al applikationstilgængelighed bestemmes af systemadministratoren og gives til yderligere brugere inden for <a href="/usergroups.php" rel="noopener nofollow" class="link">oprettede grupper</a>.</p>',
  'SOFTWARE_MANAGEMENT'                               => 'Softwareadministration',
  'SOFTWARE_MANAGEMENT_CONTENT'                       => 'Parametre til installation, geninstallation, opdatering eller fjernelse af bestemt software med yderligere indstillinger (hvis tilgængelige/ønskede) til en tildelt bruger',
  'SOFTWARE_MANAGEMENT_WARNING_CONTENT'               => '<p>Husk på, at forskellige applikationer har forskellige indstillinger/krav. De fleste kræver brugen af brugernavnsflaget (<code>-u</code>), mens applikationer som rtorrent ikke vil. For at tjekke alle tilgængelige indstillinger for bestemt software, brug <code class="language-bash">qb help [software_name]</code>. Applikationsnavngivning inden for QuickBox for softwarenavngivningsskemaet kan ses i <a href="#software" class="link">softwareliste-diagrammet</a> ovenfor.</p>',
  'SEE_ALSO_HEADER'                                   => 'Se også',
  'SEE_ALSO_CONTENT'                                  => 'Vis hjælpsom kommandoanvendelse for bestemt software',

  // #4.4.7.4 - software options table
  'SOFTWARE_NAME'                                     => 'Softwarenavn',
  'SOFTWARE_TITLE'                                    => 'Softwaretitel',
  'USABILITY'                                         => 'Brugbarhed',
  'CAN_ROLLBACK'                                      => 'Rollback-indstilling',
  'INFO'                                              => 'Info',
  'ADMIN_BADGE'                                       => '<span class="badge badge-pills badge-table-menu" style="padding:2px 6px;line-height:0.7rem;background-color:var(--qb-color-6-rgba);color:#fff;font-size:0.5rem;">kun admin</span>',
  'GLOBAL_BADGE'                                      => '<span class="badge badge-pills badge-table-menu" style="padding:2px 6px;line-height:0.7rem;background-color:var(--qb-color-5-rgba);color:#fff;font-size:0.5rem;">global</span>',
  'MULTI_USER_BADGE'                                  => '<span class="badge badge-pills badge-table-menu" style="padding:2px 6px;line-height:0.7rem;background-color:var(--qb-color-4-rgba);color:#fff;font-size:0.5rem;">flere brugere</span>',
  'SINGLE_USER_BADGE'                                 => '<span class="badge badge-pills badge-table-menu" style="padding:2px 6px;line-height:0.7rem;background-color:var(--qb-color-3-rgba);color:#fff;font-size:0.5rem;">enkelt bruger</span>',
  'GLOBAL_INFO'                                       => 'kræver admin-installation og installerer for alle brugere på systemet.',
  'MULTI_USER_INFO'                                   => 'kræver admin-installation og kan installeres for enhver tildelt bruger. flere brugere understøttes.',
  'SINGLE_USER_INFO'                                  => 'enkelt bruger, kun admin. kræver admin-installation og installeres og betjenes af admin-bruger.',

  // #4.4.7.5 - examples header
  'EXAMPLES_HEADER'                                   => 'Eksempler',

  // #4.4.7.6 - user management
  'USER_MANAGEMENT_INFO_CONTENT'                      => '<p><code>qb user</code> administrationsfunktionerne i QuickBox tilbyder et alsidigt og kraftfuldt sæt værktøjer til effektivt at administrere brugere på din server. Med fokus på brugervenlighed og robust funktionalitet giver disse funktioner dig mulighed for at strømlinje brugeradministration, forbedre sikkerheden og sikre en problemfri serverdrift.</p>',
  'CREATE_USER_CONTENT'                               => 'Opretter en ny QuickBox-brugerkonto',
  'DELETE_USER_CONTENT'                               => 'Sletter QuickBox-brugerkonto',
  'CHANGE_USER_PASSWORD'                              => 'Skift brugeradgangskode',
  'CHANGE_USER_PASSWORD_CONTENT'                      => 'Skifter adgangskode for tildelt brugerkonto',
  'BAN_USER_CONTENT'                                  => 'Forbyder tildelt brugerkonto, forhindrer login og stopper installerede tjenester og deres funktioner.',
  'BAN_USER_PRIMARY_CONTENT'                          => '<p><em>Dette <strong>sletter ikke</strong> brugerdata</em>, deaktiverer kun kørende tjenester og blokerer adgang.</p>',
  'UNBAN_USER_CONTENT'                                => 'Fjerner forbud mod tildelt brugerkonto, tillader login og starter installerede tjenester og deres funktioner',
  'PROMOTE_USER_TO_ADMIN'                             => 'Forfrem bruger til admin',
  'PROMOTE_USER_TO_ADMIN_CONTENT'                     => 'Forfremmer tildelt bruger til admin-niveau',
  'DEMOTE_USER_FROM_ADMIN'                            => 'Degrader bruger fra admin',
  'DEMOTE_USER_FROM_ADMIN_CONTENT'                    => 'Degraderer tildelt bruger til standardbrugerniveau',
  'SET_USER_QUOTA'                                    => 'Sæt brugerkvote',
  'SHOW_USER_QUOTA'                                   => 'Vis brugerkvote',
  'SET_USER_SHELL'                                    => 'Sæt bruger-shell',
  'SET_USER_SHELL_CONTENT'                            => 'Sætter shell-miljøet for tildelt bruger',
  'SET_USER_SHELL_INFO_CONTENT'                       => '<p><strong><code>sudo</code></strong><br>komplette admin-privilegier til servermiljøet (stor magt... osv)<br><strong><code>full</code></strong><br>fuld adgang til servermiljøet, med undtagelse af højere privilegerede områder; dvs.: ingen sudo og kan ikke få adgang til root-mapper.<br><strong><code>limited</code></strong><br>det begrænsede shell-miljø. meget lidt adgang til kommandoer og indespærret i deres egen bruger-hjemmemappe.</p><hr/><p>Shell-miljøer sættes af systemadministratoren og kan ses på brugernes redigeringsside placeret inden for <a href="/useradmin.php" rel="noopener nofollow" class="link">Bruger Admin-siden</a>.<br/>Hvis du gerne vil tilføje et nyt shell-miljø, kan du gøre det ved at redigere <code>/etc/shells</code>-filen og tilføje stien til det shell-miljø, du gerne vil tilføje.</p>',
  'SET_USER_SHELL_DANGER_CONTENT'                     => '<p><strong>Advarsel:</strong> Vær opmærksom på, at ændring af shell-miljøet til noget andet end <code>/bash</code> kan føre til uønsket adfærd, når du bruger <code>qb</code> (QuickBox), da det er specifikt designet og optimeret til <code>/bash</code>-miljøet. Kort sagt er <code>qb</code> afhængig af specifikke funktioner og funktionaliteter leveret af Bash-shell.<br><br>For at undgå potentielle problemer er det tilrådeligt at holde sig til <code>/bash</code>-miljøet, når du bruger <code>qb</code>. Hvis du stadig ønsker at bruge et andet shell, konsulter dokumentationen for det shell for at gennemgå eventuelle yderligere ændringer til stier, konfigurationer eller andre indstillinger, der måske skal opdateres for at sikre kompatibilitet med <code>qb</code>.</p>',
  'USER_RCLONE_COMPANION_COMMANDS'                    => 'Rclone Companion-kommandoer',

  // #4.4.7.7 - clean functions
  'CLEAN_FUNCTIONS'                                   => 'Rydningsfunktioner',
  'CLEAN_FUNCTIONS_INFO_CONTENT'                      => '<p><code>qb clean</code> funktionerne i QuickBox tilbyder en bekvem og effektiv måde at vedligeholde din servers renlighed og optimere dens ydeevne. Designet med enkelhed og effektivitet i tankerne giver disse funktioner dig mulighed for at frigøre værdifuld hukommelse, fjerne unødvendig rod og sikre en problemfri og strømlinet serverdrift.</p>',
  'CLEAN_MEMORY'                                      => 'Ryd hukommelse',
  'CLEAN_MEMORY_CONTENT'                              => 'Rydder QuickBox hukommelsescache',
  'CLEAN_DASHBOARD_LOGS'                              => 'Ryd dashboard-logs',
  'CLEAN_DASHBOARD_LOGS_CONTENT'                      => 'Rydder QuickBox dashboard-logs for den angivne bruger',
  'CLEAN_QB_DASHBOARD_LOGS'                           => 'Ryd QB Dashboard logfiler',
  'CLEAN_QB_DASHBOARD_LOGS_CONTENT'                   => 'Denne kommando er designet til at rydde den nuværende UI Actions log postet fra syslog og nulstille UI Nginx fejllog til dens oprindelige tilstand',
  'CLEAN_SYSTEM_LOGS'                                 => 'Fjern gamle systemlogfiler',
  'CLEAN_SYSTEM_LOGS_CONTENT'                         => 'Denne kommando er designet til at slette logs og komprimerede arkiver i <code>/var/log</code>-mappen, der har overskredet den tildelte opbevaringsperiode. Opbevaringsperioden er sat til 7 dage som standard (hvis ingen valgfri værdi indtastes).',
  'CLEAN_RCLONE_UPLOAD_LOGS'                          => 'Ryd Rclone upload-logs',
  'CLEAN_RCLONE_UPLOAD_LOGS_CONTENT'                  => 'Rydder QuickBox rclone upload-logs for den angivne bruger',
  'CLEAN_LOCKS'                                       => 'Ryd låse',
  'CLEAN_LOCKS_CONTENT'                               => 'Rydder QuickBox software- og apt-dpkg-låse, der kan forhindre QuickBox i at installere ny software',

  // #4.4.7.8 - fix functions
  'FIX_FUNCTIONS'                                     => 'Reparationsfunktioner',
  'FIX_FUNCTIONS_INFO_CONTENT'                        => '<p><code>qb fix</code> funktionerne i QuickBox giver et kraftfuldt og brugervenligt værktøjssæt til at løse almindelige problemer og udføre systemreparationer uden besvær. Med fokus på enkelhed og effektivitet giver disse funktioner dig mulighed for at fejlfinde og løse forskellige problemer, der kan opstå på din server, og sikre problemfri og uafbrudt drift.</p>',
  'FIX_HOME'                                          => 'Reparer hjem',
  'FIX_HOME_CONTENT'                                  => 'Reparerer tildelte brugers hjemmemappetilladelser',
  'FIX_PHP'                                           => 'Reparer PHP',
  'FIX_PHP_CONTENT'                                   => 'Reparerer PHP-konfiguration og installerer manglende udvidelser',
  'FIX_PYTHON'                                        => 'Reparer Python',
  'FIX_PYTHON_CONTENT'                                => 'Reparerer Python-konfiguration og installerer manglende udvidelser. Desuden stadier python3.9, hvis den ikke i øjeblikket er tilgængelig på systemet til standardbrug på applikationsbuilds, der kræver python',

  // #4.4.7.9 - generate functions
  'GENERATE_FUNCTIONS'                                => 'Genereringsfunktioner',
  'GENERATE_FUNCTIONS_INFO_CONTENT'                   => '<p><code>qb generate</code> funktionerne i QuickBox tilbyder en bekvem og effektiv måde at oprette væsentlige elementer, der forbedrer serveradministration og overvågning. For tiden understøtter qb generate-kommandoen qb generate logs-funktionen, hvilket giver brugere mulighed for uden besvær at generere en forhåndsvisning af serverens statistikker, api-aktivering og monteringsinformation.<br/>Efterhånden som qb generate-funktionerne udvikler sig, vil de sandsynligvis tilbyde et udvidende sæt funktioner til yderligere at forbedre serveradministration.</p>',
  'GENERATE_SYSTEM_LOGS'                              => 'Generer systemlogs',
  'GENERATE_SYSTEM_LOGS_CONTENT'                      => 'Genererer systemlogs for den nuværende QuickBox-installation',
  'GENERATE_SYSTEM_LOGS_SUCCESS_CONTENT'              => '<p>Du kan få adgang til og downloade denne sammendragslogfil på tre måder:<br><ol><li><strong>Generer / Download:</strong> Gå til \'System > <a href="/troubleshooting.php" class="link">Fejlfinding</a> > System Log\' i brugergrænsefladen. Her kan du generere og/eller downloade systemlog-sammenfatningen produceret af generate log-kommandoen.</li><li><strong>Vis logs:</strong> Gå til \'System > <a href="/logs.php" class="link">Systemlogs</a>\'. Her kan du finde yderligere logs og info samlet af generate log-kommandoen.</li><li><strong>Server-mappe:</strong> Find den på serveren på: \'/srv/quickbox/logs/system_log\'.</li></ol></p>',
  'GENERATE_SYSTEM_LOGS_WARNING_CONTENT'              => '<p><strong>Advarsel:</strong> Denne kommando vil generere en omfattende systemlog, der kan indeholde følsomme oplysninger. Sørg venligst for, at denne log håndteres sikkert og ikke deles offentligt.</p>',

  // #4.4.7.10 - manage functions
  'MANAGE_FUNCTIONS'                                  => 'Administrationsfunktioner',
  'MANAGE_FUNCTIONS_INFO_CONTENT'                     => '<p><code>qb manage</code> funktionerne i QuickBox giver et kraftfuldt og omfattende sæt værktøjer til effektivt at administrere forskellige aspekter af din server. Designet med brugerbekvemmelighed i tankerne giver disse funktioner dig mulighed for uden besvær at kontrollere kritiske elementer af dit QuickBox-drevne miljø.<br/>Uanset om det er at skifte sprogindstillinger, tjekke status for din hoved-API-aktivering, administrere datadistribution eller sikre dataintegritet gennem backups og rollbacks, tilbyder qb manage-funktionerne en omfattende løsning for serveradministratorer og entusiaster.</p>',
  'MANAGE_API_KEY'                                    => 'Administrer API-nøgle',
  'MANAGE_API_KEY_CONTENT'                            => 'Administrer QuickBox API-nøgler og list yderligere information og indstillinger',
  'ADD_API_KEY'                                       => 'Tilføj API-nøgle',
  'ADD_API_KEY_CONTENT'                               => 'Tilføj/Aktiver API-nøgle',
  'REMOVE_API_KEY'                                    => 'Fjern API-nøgle',
  'REMOVE_API_KEY_CONTENT'                            => 'Fjern/Deaktiver API-nøgle',
  'MANAGE_DATABASE'                                   => 'Administrer database',
  'MANAGE_DATABASE_CONTENT'                           => 'Administrer hvilken database der bruges til QuickBox',
  'MANAGE_DATABASE_CONNECTION_INFO_CONTENT'           => 'Bemærk venligst, at når du specificerer et brugernavn og adgangskode (hvis indstillingerne bruges), behøver de ikke at matche dine nuværende hovedkontos legitimationsoplysninger. Disse legitimationsoplysninger er beregnet til lokalt systembrug, især til databaseforbindelser og forskellige systemfunktioner. Derfor kan de være unikke og uafhængige af din hovedkontos brugernavn og adgangskode.',
  'MANAGE_DATABASE_INFO_CONTENT'                      => 'QuickBox bruger primært SQLite3 som sin standarddatabase. Du har dog mulighed for problemfrit at skifte mellem SQLite3 og MySQL ved hjælp af denne kommando. Hvis du vælger MySQL, sørg for, at du har en MySQL-server ordentligt installeret og konfigureret på dit system. Desuden skal du have en MySQL-brugerkonto med tilstrækkelige tilladelser til databaseoprettelse og administration. Udførelse af denne kommando faciliterer disse nødvendige konfigurationer, herunder installation af MySQL-server og klient, hvis de ikke allerede er installeret på dit system. Under processen vil du blive bedt om at installere MySQL-server og klient, hvis de ikke opdages. Desuden håndterer kommandoen konfigurationsopsætningen og sikrer problemfri integration med QuickBox. Bemærk venligst, at alle parametre undtagen <code>-o [mysql|sqlite]</code> er valgfrie og vil standardværdi til foruddefinerede værdier i scriptet.<br><br>Standardværdierne er som følger:<br><code>user=admin, pass=%random%, port=3306, host=localhost, name=qbpro</code><br><br>MySQL-detaljer kan findes på <code>/root/.my.cnf</code>.<br><br>For at konvertere tilbage til SQLite3, kør blot kommandoen igen med <code>-o sqlite</code>-flaget.',
  'MANAGE_DATABASE_BACKUP'                            => 'Administrer databasebackup',
  'MANAGE_DATABASE_BACKUP_CONTENT'                    => 'Backup af QuickBox-databasen',
  'MANAGE_DATABASE_BACKUP_INFO_CONTENT'               => 'QuickBox backup-processen kører automatisk hver 24. time kl. 3:30 (server-tid) som del af vedligeholdelsesplanen. Denne opgave er listet i <code>/etc/cron.d/quickbox</code> planen som:<br><br><code>30 3 * * * root /usr/local/bin/qb manage db -o maintenance --cron</code><br><br>Du kan dog manuelt udløse en backup (uden at køre vedligeholdelsesrutinen) ved hjælp af kommandoen ovenfor.<br><br><strong>Om backup-processen</strong><br><br>Hver backup skaber et øjebliksbillede af QuickBox-databasen og giver et gendannelsespunkt til at beskytte dataintegritet i tilfælde af datatab eller korruption. Backup-filer gemmes i en specificeret mappe, hvor systemet bevarer de 5 seneste backups for at sikre, at du altid har flere gendannelsespunkter tilgængelige til gendannelse.<br><br><strong>Backup-filplaceringer</strong><br><br>Backup-filer gemmes i følgende mapper:<br><br><strong>MySQL</strong>: <code>/opt/quickbox/backup/system/[DATE_TIME]/db/qbpro.sql</code><br><strong>SQLite</strong>: <code>/opt/quickbox/backup/system/[DATE_TIME]/db/qbpro.db</code>',
  'MANAGE_DATABASE_MAINTENANCE'                       => 'Administrer databasevedligeholdelse',
  'MANAGE_DATABASE_MAINTENANCE_CONTENT'               => 'Start QuickBox databasevedligeholdelsesprocessen',
  'MANAGE_DATABASE_MAINTENANCE_INFO_CONTENT'          => 'QuickBox vedligeholdelsesprocessen er designet til at holde databasen kørende glat og effektivt. Denne proces inkluderer:<br><br><ol><li>Rydning af unødvendige data.</li><li>Optimering af databasetabeller.</li><li>Kørsel af andre vedligeholdelsesopgaver til at booste effektivitet og forhindre dataproblemer, såsom tjekning og reparation af tabeller.</li><li>Udløsning af en Message of the Day (MotD) notifikation til at advare systemadministratoren via CLI, hvis uoprettelige fejl opstår.</li></ol><p><strong>Når vedligeholdelse kører</strong><br><br>Vedligeholdelsesprocessen kører automatisk hver 24. time kl. 3:30 server-tid. Denne opgave er listet i <code>/etc/cron.d/quickbox</code> planen som:<br><br><code>30 3 * * * root /usr/local/bin/qb manage db -o maintenance --cron</code><br><br>Du kan dog manuelt udløse vedligeholdelse ved hjælp af kommandoen ovenfor.<br><br><strong>Hvorfor vedligeholdelse er vigtig</strong><br><br>Regelmæssig vedligeholdelse sikrer, at din QuickBox-database forbliver sund, holder systemets ydeevne høj og beskytter dine data.</p>',
  'MANAGE_DATABASE_RESTORE'                           => 'Administrer databasegendannelse',
  'MANAGE_DATABASE_RESTORE_CONTENT'                   => 'Gendan QuickBox-databasen',
  'MANAGE_DATABASE_RESTORE_INFO_CONTENT'              => 'Denne kommando starter databasegendannelsesprocessen og giver dig mulighed for at vælge en specifik backup-fil at gendanne. Gendannelsesprocessen er designet til at gendanne data i tilfælde af datatab eller korruption og giver en pålidelig og effektiv måde at gendanne din QuickBox-database til en tidligere tilstand.<br><br><strong>Hvordan gendannelsesprocessen fungerer</strong><br><br>Når du kører gendannelseskommandoen, vil du blive præsenteret med en valgmenu, der viser alle tilgængelige databasebackup-filer. Du kan derefter vælge backup-filen, du vil gendanne, og systemet vil automatisk gendanne den valgte backup-fil og returnere din QuickBox-database til den tilstand, den var i, da backup blev oprettet.',
  'MANAGE_DASHBOARD_ACCESS_URL'                       => 'Administrer dashboard adgangs-URL',
  'MANAGE_DASHBOARD_ACCESS_URL_CONTENT'               => 'Denne kommando sætter server web root for dashboard-adgang til enten det udtrykte domæne eller IP-adresse',
  'SET_SERVER_LANG'                                   => 'Sæt server sprog',
  'SET_SERVER_LANG_CONTENT'                           => 'Denne kommando vil sætte det ønskede sprog som standardsprog for serveren',
  'MANAGE_PUBLIC_TRACKERS'                            => 'Administrer offentlige trackere',
  'MANAGE_PUBLIC_TRACKERS_CONTENT'                    => 'Denne kommando vil aktivere eller deaktivere offentlige trackere for alle brugere',
  'EX_PUB_TRACKERS_ALLOW'                             => 'eksempel til at tillade offentlige trackere:',
  'EX_PUB_TRACKERS_DISALLOW'                          => 'eksempel til at forbyde offentlige trackere:',
  'BACKUP_APPLICATIONS'                               => 'Backup applikationer',
  'PARTIAL_CONFIG_ONLY_BACKUP'                        => 'Delvis backup <span class="badge badge-pills outline-badge-secondary badge-table-menu" style="padding:2px 6px;line-height:0.7rem;font-size:0.5rem;">kun config</span>',
  'PARTIAL_CONFIG_ONLY_BACKUP_CONTENT'                => 'Denne kommando vil backup den angivne applikationsconfig for den tildelte bruger',
  'FULL_CONFIG_AND_APP_BACKUP'                        => 'Fuld backup <span class="badge badge-pills outline-badge-primary badge-table-menu" style="padding:2px 6px;line-height:0.7rem;font-size:0.5rem;">config &amp; app</span>',
  'FULL_CONFIG_AND_APP_BACKUP_CONTENT'                => 'Denne kommando vil backup den angivne applikationsconfig og applikationsfiler for den tildelte bruger',
  'PARTIAL_RTORRENT_ALL_USERS_BACKUP'                 => 'Delvis backup (kun rtorrent)',
  'PARTIAL_RTORRENT_ALL_USERS_BACKUP_PRIMARY_CONTENT' => '<p>I tilfælde af rtorrent som softwareconfig til backup er brugernavnsflaget (<code>-u</code>) ikke påkrævet.</p>',
  'PARTIAL_RTORRENT_ALL_USERS_BACKUP_CONTENT'         => 'Denne kommando vil backup alle eksisterende rtorrent-brugere .rtorrent.rc-filer.<br>Backups gemmes på:<br><code>/home/[USERNAME]/.QuickBox/software/rtorrent/backup/.rtorrent.rc_YEAR-MONTH-DAY_HOUR:MINUTE</code>',
  'ROLLBACK_APPLICATIONS'                             => 'Rollback applikationsbackup',
  'ROLLBACK_APPLICATIONS_CONTENT'                     => 'Rollback applikationsbackups til en tidligere tilstand',
  'RESTORE_APP_BACKUP_CONFIG'                         => 'Gendan backup <span class="badge badge-pills outline-badge-secondary badge-table-menu" style="padding:2px 6px;line-height:0.7rem;font-size:0.5rem;">kun config</span>',
  'RESTORE_APP_BACKUP_CONFIG_CONTENT'                 => 'Denne kommando vil gendanne den angivne tidligere backupede applikationsconfig for den tildelte bruger',
  'RESTORE_APP_DEFAULT_CONFIG'                        => 'Gendan standard <span class="badge badge-pills outline-badge-secondary badge-table-menu" style="padding:2px 6px;line-height:0.7rem;font-size:0.5rem;">kun config</span>',
  'RESTORE_APP_DEFAULT_CONFIG_CONTENT'                => 'Denne kommando vil gendanne den angivne standard (fra installation) applikationsconfig for den tildelte bruger',

  // #4.4.7.11 - news functions
  'NEWS_FUNCTIONS'                                    => 'Nyhedsfunktioner',
  'NEWS_FUNCTIONS_INFO_CONTENT'                       => '<p><code>qb news</code> funktionerne i QuickBox giver dig de seneste oplysninger og opdateringer om QuickBox-projektet. Bliv informeret om nye funktioner, fejlrettelser og vigtige meddelelser.</p>',
  'NEWS'                                              => 'Nyheder',
  'NEWS_CONTENT'                                      => 'Vis seneste QuickBox-nyheder',

  // #4.4.7.12 - support functions
  'SUPPORT_FUNCTIONS'                                 => 'Supportfunktioner',
  'SUPPORT_FUNCTIONS_INFO_CONTENT'                    => '<p><code>qb support</code> funktionen i QuickBox tilbyder en sikker og pålidelig metode til at give supportpersonale adgang til din server, når hjælp er nødvendig. Med et stærkt fokus på sikkerhed og brugerbeskyttelse bruger denne funktion <code>quickSupport</code>-kontoen og sikrer, at kun autoriseret supportpersonale kan få adgang til din server.</p>',
  'ENABLE_SUPPORT'                                    => 'Aktiver support',
  'ENABLE_SUPPORT_CONTENT'                            => 'Aktiver support. Typisk tildelt til teammedlemmet, der er ansvarlig for supporten',
  'DISABLE_SUPPORT'                                   => 'Deaktiver support',
  'DISABLE_SUPPORT_CONTENT'                           => 'Deaktiver support. Ellers vil supportkontoen automatisk slette sig selv efter 36 timer',

  // #4.4.7.13 - update functions
  'UPDATE_FUNCTIONS'                                  => 'Opdateringsfunktioner',
  'UPDATE_FUNCTIONS_INFO_CONTENT'                     => '<p><code>qb update</code> funktionen i QuickBox tilbyder dig en bekvem og fleksibel måde at administrere opdateringer for din QuickBox-installation. Med denne funktion har du fuld kontrol over opdateringsprocessen, hvilket giver dig mulighed for manuelt at tjekke efter opdateringer og vælge, hvornår du vil anvende dem.</p>',
  'UPDATE_CHECK'                                      => 'Opdateringstjek',
  'UPDATE_CHECK_CONTENT'                              => 'Tjek efter opdateringer til QuickBox',
  'UPDATE_QUICKBOX'                                   => 'Opdater QuickBox',
  'UPDATE_QUICKBOX_CONTENT'                           => 'Opdater QuickBox-installation til seneste udgivelse, hvis nogen er tilgængelige',

  // #4.4.7.14 - bugs & reporting
  'BUGS'                                              => 'Fejl & rapportering',
  'BUGS_INFO_CONTENT'                                 => '<p>Den grafiske visning af QuickBox\'s dokumentation vil modtage regelmæssige opdateringer for at sikre, at de leverede oplysninger forbliver nemt tilgængelige og brugervenlige. Vores engagement i at forbedre din oplevelse med QuickBox driver os til kontinuerligt at forfine og forbedre dokumentationen og holde den opdateret med de seneste funktioner og funktionaliteter.<br/><br/>
Med hver opdatering vil vi stræbe efter at forenkle komplekse koncepter, tydeliggøre instruktioner og inkorporere brugerfeedback for at gøre qb manpage endnu mere intuitiv og effektiv. Vores mål er at give dig en problemfri forståelse af QuickBox og dets omfattende funktioner, hvilket giver dig mulighed for at mestre qb CLI-miljøet og uden besvær administrere dine serveropgaver.<br/><br/>
Vi værdsætter dit input og opfordrer dig til at dele eventuelle forslag eller idéer, du måtte have til yderligere at forbedre qb manpage. Din feedback er afgørende for at forme denne ressource og sikre, at den forbliver en værdifuld reference for alle QuickBox-brugere. Faktisk eksisterer denne side, fordi den blev efterspurgt! 🤪<br/><br/>
Rapporter eventuelle reproducerbare fejl eller forslag til <strong><a href="https://nullrefer.ir/?https://github.com/QuickBox/pro-v3/issues" rel="noopener nofollow" target="_blank">QuickBox.IO Labs Issue & Feature Tracker</a></strong></p>',

  // #4.4.7.15 - disclaimer
  'DISCLAIMER'                                        => 'Ansvarsfraskrivelse',
  'DISCLAIMER_TEXT'                                   => '<p>Dette script er beregnet til generelt brug og ingen garanti gives for egnethed til enhver given opgave. QuickBox.IO vil ikke påtage sig ansvar for din opsætning eller eventuelle skader, der opstår under brug/installation/modifikation af dette script eller nogen af dets plugins. Husk venligst på, at QuickBox.IO eller dets personale ikke er ansvarlige for at holde din software og/eller server opdateret; dette er et ansvar, der udelukkende overlades til brugeren af QuickBox Pro-softwaren.</p>',

  // #4.4.7.16 - license
  'LICENSE'                                           => 'Licens',
  'LICENSE_SET'                                       => 'Licenseret under BSD 3-Clause',
  'LICENSE_TEXT'                                      => '<p>Copyright (c) 2018-2025, QuickBox.IO. Alle rettigheder forbeholdes.</p>
<p>Redistribution og brug i kilde- og binære former, med eller uden modifikation, er tilladt, forudsat at følgende betingelser er opfyldt:</p>
<ul style="font-size:0.75rem"><li>Redistributioner af kildekode skal bevare ovenstående copyright-meddelelse, denne liste over betingelser og følgende ansvarsfraskrivelse.</li>
<li>Redistributioner i binær form skal reproducere ovenstående copyright-meddelelse, denne liste over betingelser og følgende ansvarsfraskrivelse i dokumentationen og/eller andre materialer leveret med distributionen.</li>
<li>Hverken navnet på copyrightindehaveren eller navnene på dets bidragsydere må bruges til at godkende eller promovere produkter afledt af denne software uden specifik forudgående skriftlig tilladelse.</li></ul>
<p>DENNE SOFTWARE LEVERES AF COPYRIGHTINDEHAVERNE OG BIDRAGSYDERNE \'SOM DEN ER\' OG ALLE UDTALTE ELLER UNDERFORSTÅEDE GARANTIER, HERUNDER, MEN IKKE BEGRÆNSET TIL, DE UNDERFORSTÅEDE GARANTIER FOR SALGBARHED OG EGNETHED TIL ET BESTEMT FORMÅL, FRASKRIVES. I INGEN HENSEENDE SKAL COPYRIGHTINDEHAVEREN ELLER BIDRAGSYDERNE VÆRE ANSVARLIGE FOR NOGEN DIREKTE, INDIREKTE, TILFÆLDIGE, SPECIELLE, EKSEMPLARISKE ELLER FØLGEMÆSSIGE SKADER (HERUNDER, MEN IKKE BEGRÆNSET TIL, FORSKAFFELSE AF ERSTATNINGSVARER ELLER TJENESTER; TAB AF BRUG, DATA ELLER FORTJENESTER; ELLER FORRETNINGSAFBRYDELSE) HVORDAN END FORÅRSAGET OG PÅ NOGEN TEORI OM ANSVAR, UANSET OM I KONTRAKT, STRENGT ANSVAR ELLER FORSEELSE (HERUNDER UAGTSOMHED ELLER ANDET) OPSTÅET PÅ NOGEN MÅDE UD AF BRUGEN AF DENNE SOFTWARE, SELV HVIS ADVISERET OM MULIGHEDEN FOR SÅDANNE SKADER.</p>',

  // #4.4.7.17 - misc
  'EXAMPLE'                                           => 'eksempel:',
  'EXAMPLES'                                          => 'eksempler:',
  'LOG_MAINTENANCE'                                   => 'Log vedligeholdelse',
  'FIX_VERSION'                                       => 'Ret Version'
];
