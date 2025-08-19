<?php
return [
  // #4.4.7 - HELP MANUAL
  'QB_HELP'                                           => 'Súgó Kézikönyv',

  // #4.4.7.1 - description
  'DESCRIPTION_CONTENT'                               => '<p>Üdvözöljük a <code>qb</code> manpage átfogó grafikus megjelenítésében, amelyet arra terveztek, hogy egy lefordított, egyszerűsített és hatékony megközelítést nyújtson a QuickBox-ról szóló különféle információk eléréséhez. Ez a felhasználóbarát felület célja, hogy mélyreható betekintést nyújtson a QuickBox működésébe, egy erős és sokoldalú eszközbe, amely segít könnyedén kezelni a szerverét.</p><p>Ebben a grafikus megjelenítésben részletes listát talál a zökkenőmentes telepítésre kész elérhető alkalmazásokról, lehetővé téve, hogy testre szabja a szerver beállítását a saját igényei szerint. Továbbá ez az erőforrás sok más lényeges parancsot is bemutat az optimális használathoz a <code>qb</code> CLI környezetben, lehetővé téve, hogy hatékonyan és könnyedén navigáljon a szerver feladatai között.</p><p>Akár új QuickBox felhasználó, akár tapasztalt felhasználó, ez a <code>qb</code> manpage grafikus megjelenítése szolgál mint végső hivatkozás a QuickBox teljes potenciáljának kiaknázásához és a szerverkezelés valódi erejének felszabadításához. Fedezze fel a sokféle funkciókat, egyszerűsítse a szerver műveleteit, és maximalizálja a produktivitását ennek az intuitív és informatív útmutató segítségével. Merüljön el, és tegye még hasznosabbá a QuickBox élményét!</p>',
  'API_INFO_DIRECT'                                   => '<p style="font-weight:600;">További információk és hivatkozások a beágyazott QuickBox API-ról: <a href="/api-control.php" rel="noopenner nofollow" class="link" style="color:var(--qb-color-37);">lásd ezt az oldalt</a>.</p>',

  // #4.4.7.2 - options
  'OPTIONS_HEADER'                                    => 'Opciók',
  'OPTIONS_CONTENT_HELP'                              => 'Megjeleníti ezt a súgó kézikönyvet CLI manpage formátumban',
  'OPTIONS_CONTENT_VERBOSE'                           => 'Engedélyezi a részletes módot hibakereséshez',

  // #4.4.7.3 - software
  'SOFTWARE_HEADER'                                   => 'Szoftver',
  'SOFTWARE_INFO_CONTENT'                             => '<p>Az alábbiak a QuickBox build által biztosított telepítésre elérhető alkalmazások listája.<br/>A szoftver nevek úgy jelennek meg, ahogy a <code>qb [install|reinstall|update|remove|help] [software_name]</code> parancsban láthatók</p>',
  'ADMIN_INSTALLED_SOFTWARE_HEADER'                   => 'Admin által telepített szoftver',
  'ADMIN_INSTALLED_SOFTWARE_INFO_CONTENT'             => '<p>Az alábbi alkalmazásokat a Rendszergazdának kell telepítenie.<br/>Lásd a rendelkezésre állás oszlopot alul további részletekért.</p>',
  'MULTI_USER_SOFTWARE_HEADER'                        => 'Több felhasználós szoftver',
  'MULTI_USER_SOFTWARE_INFO_CONTENT'                  => '<p>Az alábbi alkalmazásokat több felhasználó is telepítheti admin segítség nélkül.<br/>Minden alkalmazás rendelkezésre állását a Rendszergazda határozza meg és adja meg további felhasználóknak a <a href="/usergroups.php" rel="noopener nofollow" class="link">létrehozott csoportokon</a> belül.</p>',
  'SINGLE_USER_SOFTWARE_HEADER'                       => 'Egy felhasználós szoftver',
  'SINGLE_USER_SOFTWARE_INFO_CONTENT'                 => '<p>Az alábbi alkalmazásokat egyszerre csak egy hozzárendelt felhasználó telepítheti, admin segítség nélkül.<br/>Minden alkalmazás rendelkezésre állását a Rendszergazda határozza meg és adja meg további felhasználóknak a <a href="/usergroups.php" rel="noopener nofollow" class="link">létrehozott csoportokon</a> belül.</p>',
  'SOFTWARE_MANAGEMENT'                               => 'Szoftver Kezelés',
  'SOFTWARE_MANAGEMENT_CONTENT'                       => 'Paraméterek a kijelölt szoftver telepítéséhez, újratelepítéséhez, frissítéséhez vagy eltávolításához további opciókkal (ha jelen vannak/kívántak) egy hozzárendelt felhasználóhoz',
  'SOFTWARE_MANAGEMENT_WARNING_CONTENT'               => '<p>Ne feledje, hogy a különféle alkalmazásoknak különféle opciói/követelményei vannak. A többség megköveteli a felhasználónév jelző (<code>-u</code>) használatát, míg az olyan alkalmazások, mint az rtorrent, nem. Egy adott szoftver összes elérhető opciójának ellenőrzéséhez használja a <code class="language-bash">qb help [software_name]</code> parancsot. A QuickBox-on belüli alkalmazás elnevezést a szoftver elnevezési sémához a fenti <a href="#software" class="link">szoftver lista táblázatban</a> tekintheti meg.</p>',
  'SEE_ALSO_HEADER'                                   => 'Lásd Még',
  'SEE_ALSO_CONTENT'                                  => 'Hasznos parancs használatot mutat a kijelölt szoftverhez',

  // #4.4.7.4 - software options table
  'SOFTWARE_NAME'                                     => 'Szoftver Név',
  'SOFTWARE_TITLE'                                    => 'Szoftver Cím',
  'USABILITY'                                         => 'Használhatóság',
  'CAN_ROLLBACK'                                      => 'Visszaállítási Opció',
  'INFO'                                              => 'Információ',
  'ADMIN_BADGE'                                       => '<span class="badge badge-pills badge-table-menu" style="padding:2px 6px;line-height:0.7rem;background-color:var(--qb-color-6-rgba);color:#fff;font-size:0.5rem;">csak admin</span>',
  'GLOBAL_BADGE'                                      => '<span class="badge badge-pills badge-table-menu" style="padding:2px 6px;line-height:0.7rem;background-color:var(--qb-color-5-rgba);color:#fff;font-size:0.5rem;">globális</span>',
  'MULTI_USER_BADGE'                                  => '<span class="badge badge-pills badge-table-menu" style="padding:2px 6px;line-height:0.7rem;background-color:var(--qb-color-4-rgba);color:#fff;font-size:0.5rem;">több felhasználó</span>',
  'SINGLE_USER_BADGE'                                 => '<span class="badge badge-pills badge-table-menu" style="padding:2px 6px;line-height:0.7rem;background-color:var(--qb-color-3-rgba);color:#fff;font-size:0.5rem;">egy felhasználó</span>',
  'GLOBAL_INFO'                                       => 'admin telepítést igényel és minden felhasználónak telepíti a rendszeren.',
  'MULTI_USER_INFO'                                   => 'admin telepítést igényel és bármely hozzárendelt felhasználónak telepíthető. több felhasználó támogatott.',
  'SINGLE_USER_INFO'                                  => 'egy felhasználó, csak admin. admin telepítést igényel és a admin felhasználó telepíti és működteti.',

  // #4.4.7.5 - examples header
  'EXAMPLES_HEADER'                                   => 'Példák',

  // #4.4.7.6 - user management
  'USER_MANAGEMENT_INFO_CONTENT'                      => '<p>A <code>qb user</code> kezelési funkciók a QuickBox-ban sokoldalú és erős eszközkészletet nyújtanak a felhasználók hatékony kezeléséhez a szerverén. A könnyű használat és robusztus funkcionalitás fókuszával ezek a funkciók lehetővé teszik a felhasználókezelés egyszerűsítését, a biztonság növelését és a zökkenőmentes szerver működés biztosítását.</p>',
  'CREATE_USER_CONTENT'                               => 'Új QuickBox felhasználói fiókot hoz létre',
  'DELETE_USER_CONTENT'                               => 'QuickBox felhasználói fiókot töröl',
  'CHANGE_USER_PASSWORD'                              => 'Felhasználói jelszó megváltoztatása',
  'CHANGE_USER_PASSWORD_CONTENT'                      => 'Jelszót változtat a hozzárendelt felhasználói fiókhoz',
  'BAN_USER_CONTENT'                                  => 'Kitiltja a hozzárendelt felhasználói fiókot, megakadályozva a bejelentkezést és leállítva a telepített szolgáltatásokat és funkcióikat.',
  'BAN_USER_PRIMARY_CONTENT'                          => '<p><em>Ez <strong>nem törli</strong> a felhasználói adatokat</em>, csak letiltja a futó szolgáltatásokat és blokkolja a hozzáférést.</p>',
  'UNBAN_USER_CONTENT'                                => 'Feloldja a hozzárendelt felhasználói fiók kitiltását, lehetővé téve a bejelentkezést és elindítva a telepített szolgáltatásokat és funkcióikat',
  'PROMOTE_USER_TO_ADMIN'                             => 'Felhasználó előléptetése adminná',
  'PROMOTE_USER_TO_ADMIN_CONTENT'                     => 'Előlépteti a hozzárendelt felhasználót admin szintre',
  'DEMOTE_USER_FROM_ADMIN'                            => 'Felhasználó visszaminősítése adminból',
  'DEMOTE_USER_FROM_ADMIN_CONTENT'                    => 'Visszaminősíti a hozzárendelt felhasználót szabványos felhasználói szintre',
  'SET_USER_QUOTA'                                    => 'Felhasználói kvóta beállítása',
  'SHOW_USER_QUOTA'                                   => 'Felhasználói kvóta megjelenítése',
  'SET_USER_SHELL'                                    => 'Felhasználói shell beállítása',
  'SET_USER_SHELL_CONTENT'                            => 'Beállítja a shell környezetet a hozzárendelt felhasználóhoz',
  'SET_USER_SHELL_INFO_CONTENT'                       => '<p><strong><code>sudo</code></strong><br>teljes admin jogosultságok a szerver környezethez (nagy hatalom... stb)<br><strong><code>full</code></strong><br>teljes hozzáférés a szerver környezethez, a magasabb jogosultságú területek kivételével; pl: nincs sudo és nem férhet hozzá a root könyvtárakhoz.<br><strong><code>limited</code></strong><br>a korlátozott shell környezet. nagyon kevés hozzáférés a parancsokhoz és a saját felhasználói home könyvtárhoz van bezárva.</p><hr/><p>A shell környezeteket a Rendszergazda állítja be és megtekinthetők a felhasználók szerkesztési oldalán, amely a <a href="/useradmin.php" rel="noopener nofollow" class="link">Felhasználó Admin oldalon</a> található.<br/>Ha új shell környezetet szeretne hozzáadni, ezt megteheti a <code>/etc/shells</code> fájl szerkesztésével és hozzáadva a hozzáadni kívánt shell környezet útvonalát.</p>',
  'SET_USER_SHELL_DANGER_CONTENT'                     => '<p><strong>Óvatosság:</strong> Kérjük, vegye figyelembe, hogy a shell környezet <code>/bash</code>-tól eltérőre változtatása nem kívánt viselkedést eredményezhet a <code>qb</code> (QuickBox) használatakor, mivel kifejezetten a <code>/bash</code> környezethez tervezték és optimalizálták. Röviden, a <code>qb</code> a Bash shell által biztosított specifikus funkciókra és funkcionalitásokra támaszkodik.<br><br>Az esetleges problémák elkerülése érdekében tanácsos a <code>/bash</code> környezetben maradni a <code>qb</code> használatakor. Ha mégis más shell-t szeretne használni, konzultáljon az adott shell dokumentációjával, hogy áttekintse az útvonalak, konfigurációk vagy más beállítások további változásait, amelyeket frissíteni kell a <code>qb</code>-val való kompatibilitás biztosításához.</p>',
  'USER_RCLONE_COMPANION_COMMANDS'                    => 'Rclone Kísérő Parancsok',

  // #4.4.7.7 - clean functions
  'CLEAN_FUNCTIONS'                                   => 'Tisztítási Funkciók',
  'CLEAN_FUNCTIONS_INFO_CONTENT'                      => '<p>A <code>qb clean</code> funkciók a QuickBox-ban kényelmes és hatékony módot nyújtanak a szerver tisztaságának fenntartásához és teljesítményének optimalizálásához. Az egyszerűség és hatékonyság fókuszával tervezve, ezek a funkciók lehetővé teszik a értékes memória felszabadítását, a szükségtelen felesleg eltávolítását és a zökkenőmentes és optimalizált szerver működés biztosítását.</p>',
  'CLEAN_MEMORY'                                      => 'Memória Tisztítása',
  'CLEAN_MEMORY_CONTENT'                              => 'Tisztítja a QuickBox memória gyorsítótárakat',
  'CLEAN_DASHBOARD_LOGS'                              => 'Irányítópult Naplók Tisztítása',
  'CLEAN_DASHBOARD_LOGS_CONTENT'                      => 'Tisztítja a QuickBox irányítópult naplókat a kijelölt felhasználóhoz',
  'CLEAN_QB_DASHBOARD_LOGS'                           => 'QB Irányítópult napló fájlok tisztítása',
  'CLEAN_QB_DASHBOARD_LOGS_CONTENT'                   => 'Ez a parancs arra szolgál, hogy törölje a jelenlegi UI Műveletek naplót a syslog-ból és visszaállítsa a UI Nginx hiba naplót kezdeti állapotába',
  'CLEAN_SYSTEM_LOGS'                                 => 'Régi rendszer napló fájlok eltávolítása',
  'CLEAN_SYSTEM_LOGS_CONTENT'                         => 'Ez a parancs arra szolgál, hogy törölje a naplókat és tömörített archívumokat a <code>/var/log</code> könyvtárban, amelyek meghaladták a hozzárendelt megőrzési időszakot. A megőrzési időszak alapértelmezetten 7 napra van beállítva (ha nincs opcionális érték megadva).',
  'CLEAN_RCLONE_UPLOAD_LOGS'                          => 'Rclone Feltöltési Naplók Tisztítása',
  'CLEAN_RCLONE_UPLOAD_LOGS_CONTENT'                  => 'Tisztítja a QuickBox rclone feltöltési naplókat a kijelölt felhasználóhoz',
  'CLEAN_LOCKS'                                       => 'Zárak Tisztítása',
  'CLEAN_LOCKS_CONTENT'                               => 'Tisztítja a QuickBox szoftver és apt-dpkg zárakat, amelyek megakadályozhatják a QuickBox új szoftver telepítését',

  // #4.4.7.8 - fix functions
  'FIX_FUNCTIONS'                                     => 'Javítási Funkciók',
  'FIX_FUNCTIONS_INFO_CONTENT'                        => '<p>A <code>qb fix</code> funkciók a QuickBox-ban erős és felhasználóbarát eszközkészletet nyújtanak a gyakori problémák megoldásához és a rendszer javítások zökkenőmentes végrehajtásához. Az egyszerűség és hatékonyság fókuszával ezek a funkciók lehetővé teszik a különféle problémák hibakeresését és megoldását, amelyek a szerverén felmerülhetnek, biztosítva a zökkenőmentes és megszakítás nélküli működést.</p>',
  'FIX_HOME'                                          => 'Home Javítása',
  'FIX_HOME_CONTENT'                                  => 'Javítja a kijelölt felhasználók home könyvtár jogosultságait',
  'FIX_PHP'                                           => 'PHP Javítása',
  'FIX_PHP_CONTENT'                                   => 'Javítja a PHP konfigurációt és telepíti a hiányzó bővítményeket',
  'FIX_PYTHON'                                        => 'Python Javítása',
  'FIX_PYTHON_CONTENT'                                => 'Javítja a Python konfigurációt és telepíti a hiányzó bővítményeket. Továbbá előkészíti a python3.9-et, ha jelenleg nem elérhető a rendszeren az alapértelmezett használathoz a python-t igénylő alkalmazás build-ekhez',
  'FIX_VERSION'                                       => 'Verzió Javítása',

  // #4.4.7.9 - generate functions
  'GENERATE_FUNCTIONS'                                => 'Generálási Funkciók',
  'GENERATE_FUNCTIONS_INFO_CONTENT'                   => '<p>A <code>qb generate</code> funkciók a QuickBox-ban kényelmes és hatékony módot nyújtanak a szerverkezelés és -figyelés javításához szükséges lényeges elemek létrehozásához. Jelenleg a qb generate parancs támogatja a qb generate logs funkciót, lehetővé téve a felhasználók számára, hogy könnyedén generáljanak előnézetet a szerver statisztikákról, API aktivációról és csatolási információkról.<br/>Ahogy a qb generate funkciók fejlődnek, valószínűleg egy bővülő funkciók tömböt fognak nyújtani a szerverkezelés további javításához.</p>',
  'GENERATE_SYSTEM_LOGS'                              => 'Rendszer Naplók Generálása',
  'GENERATE_SYSTEM_LOGS_CONTENT'                      => 'Rendszer naplókat generál a jelenlegi QuickBox telepítéshez',
  'GENERATE_SYSTEM_LOGS_SUCCESS_CONTENT'              => '<p>Három módon férhet hozzá és töltheti le ezt az összefoglaló napló fájlt:<br><ol><li><strong>Generálás / Letöltés:</strong> Menjen a \'Rendszer > <a href="/troubleshooting.php" class="link">Hibaelhárítás</a> > Rendszer Napló\' menübe a felhasználói felületen. Itt generálhatja és/vagy letöltheti a generate log parancs által létrehozott rendszer napló összefoglalót.</li><li><strong>Naplók Megtekintése:</strong> Menjen a \'Rendszer > <a href="/logs.php" class="link">Rendszer Naplók</a>\' menübe. Itt találhat további naplókat és információkat, amelyeket a generate log parancs gyűjtött.</li><li><strong>Szerver Könyvtár:</strong> Keresse meg a szerveren itt: \'/srv/quickbox/logs/system_log\'.</li></ol></p>',
  'GENERATE_SYSTEM_LOGS_WARNING_CONTENT'              => '<p><strong>Figyelmeztetés:</strong> Ez a parancs átfogó rendszer naplót generál, amely érzékeny információkat tartalmazhat. Kérjük, biztosítsa, hogy ez a napló biztonságosan kezelendő és ne ossza meg nyilvánosan.</p>',

  // #4.4.7.10 - manage functions
  'MANAGE_FUNCTIONS'                                  => 'Kezelési Funkciók',
  'MANAGE_FUNCTIONS_INFO_CONTENT'                     => '<p>A <code>qb manage</code> funkciók a QuickBox-ban erős és átfogó eszközkészletet nyújtanak a szerver különféle aspektusainak hatékony kezeléséhez. A felhasználói kényelem fókuszával tervezve, ezek a funkciók lehetővé teszik, hogy könnyedén irányítsa a QuickBox által működtetett környezet kritikus elemeit.<br/>Akár nyelvi beállítások cseréje, a fő API aktiváció állapotának ellenőrzése, adatforgalom kezelése, vagy az adatok integritásának biztosítása mentések és visszaállítások révén, a qb manage funkciók átfogó megoldást nyújtanak mind a szerver adminisztrátorok, mind a lelkes felhasználók számára.</p>',
  'MANAGE_API_KEY'                                    => 'API Kulcs Kezelése',
  'MANAGE_API_KEY_CONTENT'                            => 'QuickBox API kulcsok kezelése és további információk és opciók listázása',
  'ADD_API_KEY'                                       => 'API Kulcs Hozzáadása',
  'ADD_API_KEY_CONTENT'                               => 'API kulcs hozzáadása/aktiválása',
  'REMOVE_API_KEY'                                    => 'API Kulcs Eltávolítása',
  'REMOVE_API_KEY_CONTENT'                            => 'API kulcs eltávolítása/deaktiválása',
  'MANAGE_DATABASE'                                   => 'Adatbázis Kezelése',
  'MANAGE_DATABASE_CONTENT'                           => 'Kezeli, hogy melyik adatbázist használja a QuickBox',
  'MANAGE_DATABASE_CONNECTION_INFO_CONTENT'           => 'Kérjük, vegye figyelembe, hogy amikor felhasználónevet és jelszót ad meg (ha az opciókat használja), ezeknek nem kell egyezniük a jelenlegi fő fiók hitelesítő adataival. Ezek a hitelesítő adatok helyi rendszer használatra szolgálnak, különösen adatbázis kapcsolatokhoz és különféle rendszer funkciókhoz. Ezért egyediek és függetlenek lehetnek a fő fiók felhasználónevétől és jelszavától.',
  'MANAGE_DATABASE_INFO_CONTENT'                      => 'A QuickBox elsősorban SQLite3-at használ alapértelmezett adatbázisként. Azonban lehetősége van zökkenőmentesen váltani SQLite3 és MySQL között ezzel a paranccsal. Ha MySQL-t választ, győződjön meg róla, hogy a rendszerén megfelelően telepített és konfigurált MySQL szerver van. Továbbá MySQL felhasználói fiókra lesz szüksége megfelelő jogosultságokkal az adatbázis létrehozásához és kezeléséhez. A parancs végrehajtása megkönnyíti ezeket a szükséges konfigurációkat, beleértve a MySQL szerver és kliens telepítését, ha ezek még nincsenek telepítve a rendszerén. A folyamat során felkérést kap a MySQL szerver és kliens telepítésére, ha ezek nem észlelhetők. Továbbá a parancs kezeli a konfigurációs beállítást, biztosítva a zökkenőmentes integrációt a QuickBox-szal. Kérjük, vegye figyelembe, hogy minden paraméter, kivéve a <code>-o [mysql|sqlite]</code> opcionális és alapértelmezett értékekre fog visszaállni a scripten belül.<br><br>Az alapértelmezett értékek a következők:<br><code>user=admin, pass=%random%, port=3306, host=localhost, name=qbpro</code><br><br>MySQL részletek megtalálhatók a <code>/root/.my.cnf</code> fájlban.<br><br>Visszaállításhoz SQLite3-ra, egyszerűen futtassa újra a parancsot a <code>-o sqlite</code> jelzővel.',
  'MANAGE_DATABASE_BACKUP'                            => 'Adatbázis Mentés Kezelése',
  'MANAGE_DATABASE_BACKUP_CONTENT'                    => 'QuickBox adatbázis mentése',
  'MANAGE_DATABASE_BACKUP_INFO_CONTENT'               => 'A QuickBox mentési folyamat automatikusan fut 24 óránként 3:30-kor (szerver idő) a karbantartási ütemezés részeként. Ez a feladat a <code>/etc/cron.d/quickbox</code> ütemezésben szerepel:<br><br><code>30 3 * * * root /usr/local/bin/qb manage db -o maintenance --cron</code><br><br>Azonban manuálisan is kiválthat mentést (a karbantartási rutin futtatása nélkül) a fenti paranccsal.<br><br><strong>A Mentési Folyamatról</strong><br><br>Minden mentés pillanatfelvételt készít a QuickBox adatbázisról, visszaállítási pontot biztosítva az adatok integritásának védelméhez adatvesztés vagy sérülés esetén. A mentési fájlok egy megadott könyvtárban mentődnek, a rendszer megtartja az 5 legutóbbi mentést, biztosítva, hogy mindig több visszaállítási pont legyen elérhető a helyreállításhoz.<br><br><strong>Mentési Fájlok Helye</strong><br><br>A mentési fájlok a következő könyvtárakban tárolódnak:<br><br><strong>MySQL</strong>: <code>/opt/quickbox/backup/system/[DATE_TIME]/db/qbpro.sql</code><br><strong>SQLite</strong>: <code>/opt/quickbox/backup/system/[DATE_TIME]/db/qbpro.db</code>',
  'MANAGE_DATABASE_MAINTENANCE'                       => 'Adatbázis Karbantartás Kezelése',
  'MANAGE_DATABASE_MAINTENANCE_CONTENT'               => 'QuickBox adatbázis karbantartási folyamat indítása',
  'MANAGE_DATABASE_MAINTENANCE_INFO_CONTENT'          => 'A QuickBox karbantartási folyamat arra szolgál, hogy az adatbázis zökkenőmentesen és hatékonyan működjön. Ez a folyamat tartalmazza:<br><br><ol><li>Szükségtelen adatok tisztítását.</li><li>Adatbázis táblák optimalizálását.</li><li>Egyéb karbantartási feladatok futtatását a hatékonyság növeléséhez és az adatproblémák megelőzéséhez, például táblák ellenőrzése és javítása.</li><li>Napi üzenet (MotD) értesítés kiváltását a rendszer adminisztrátor figyelmeztetéséhez CLI-n keresztül, ha helyreállíthatatlan hibák történnek.</li></ol><p><strong>Mikor Fut a Karbantartás</strong><br><br>A karbantartási folyamat automatikusan fut 24 óránként 3:30-kor szerver idő szerint. Ez a feladat a <code>/etc/cron.d/quickbox</code> ütemezésben szerepel:<br><br><code>30 3 * * * root /usr/local/bin/qb manage db -o maintenance --cron</code><br><br>Azonban manuálisan is kiválthatja a karbantartást a fenti paranccsal.<br><br><strong>Miért Fontos a Karbantartás</strong><br><br>A rendszeres karbantartás biztosítja, hogy a QuickBox adatbázis egészséges maradjon, a rendszer teljesítménye magas maradjon, és az adatai védettek legyenek.</p>',
  'MANAGE_DATABASE_RESTORE'                           => 'Adatbázis Visszaállítás Kezelése',
  'MANAGE_DATABASE_RESTORE_CONTENT'                   => 'QuickBox adatbázis visszaállítása',
  'MANAGE_DATABASE_RESTORE_INFO_CONTENT'              => 'Ez a parancs elindítja az adatbázis visszaállítási folyamatot, lehetővé téve egy adott mentési fájl kiválasztását a visszaállításhoz. A visszaállítási folyamat arra szolgál, hogy helyreállítsa az adatokat adatvesztés vagy sérülés esetén, megbízható és hatékony módot biztosítva a QuickBox adatbázis korábbi állapotra való visszaállításához.<br><br><strong>Hogyan Működik a Visszaállítási Folyamat</strong><br><br>Amikor futtatja a visszaállítási parancsot, egy kiválasztási menüt kap, amely felsorolja az összes elérhető adatbázis mentési fájlt. Ezután kiválaszthatja a visszaállítani kívánt mentési fájlt, és a rendszer automatikusan visszaállítja a kiválasztott mentési fájlt, visszaadva a QuickBox adatbázist annak az állapotába, amiben a mentés létrejött.',
  'MANAGE_DASHBOARD_ACCESS_URL'                       => 'Irányítópult hozzáférési URL kezelése',
  'MANAGE_DASHBOARD_ACCESS_URL_CONTENT'               => 'Ez a parancs beállítja a szerver web gyökérét az irányítópult hozzáféréshez a megadott Domain vagy IP Címhez',
  'SET_SERVER_LANG'                                   => 'Szerver Nyelv Beállítása',
  'SET_SERVER_LANG_CONTENT'                           => 'Ez a parancs a kért nyelvet állítja be alapértelmezett nyelvként a szerverhez',
  'MANAGE_PUBLIC_TRACKERS'                            => 'Nyilvános Tracker-ek Kezelése',
  'MANAGE_PUBLIC_TRACKERS_CONTENT'                    => 'Ez a parancs engedélyezi vagy letiltja a nyilvános tracker-eket minden felhasználó számára',
  'EX_PUB_TRACKERS_ALLOW'                             => 'példa a nyilvános tracker-ek engedélyezéséhez:',
  'EX_PUB_TRACKERS_DISALLOW'                          => 'példa a nyilvános tracker-ek tiltásához:',
  'BACKUP_APPLICATIONS'                               => 'Alkalmazások Mentése',
  'PARTIAL_CONFIG_ONLY_BACKUP'                        => 'Részleges Mentés <span class="badge badge-pills outline-badge-secondary badge-table-menu" style="padding:2px 6px;line-height:0.7rem;font-size:0.5rem;">csak konfig</span>',
  'PARTIAL_CONFIG_ONLY_BACKUP_CONTENT'                => 'Ez a parancs menti a kijelölt alkalmazás konfigurációját a hozzárendelt felhasználóhoz',
  'FULL_CONFIG_AND_APP_BACKUP'                        => 'Teljes Mentés <span class="badge badge-pills outline-badge-primary badge-table-menu" style="padding:2px 6px;line-height:0.7rem;font-size:0.5rem;">konfig &amp; alkalmazás</span>',
  'FULL_CONFIG_AND_APP_BACKUP_CONTENT'                => 'Ez a parancs menti a kijelölt alkalmazás konfigurációját és alkalmazás fájljait a hozzárendelt felhasználóhoz',
  'PARTIAL_RTORRENT_ALL_USERS_BACKUP'                 => 'Részleges Mentés (csak rtorrent)',
  'PARTIAL_RTORRENT_ALL_USERS_BACKUP_PRIMARY_CONTENT' => '<p>Az rtorrent esetében, mint mentendő szoftver konfiguráció, a felhasználónév jelző (<code>-u</code>) nem szükséges.</p>',
  'PARTIAL_RTORRENT_ALL_USERS_BACKUP_CONTENT'         => 'Ez a parancs menti az összes meglévő rtorrent felhasználó .rtorrent.rc fájljait.<br>A mentések itt tárolódnak:<br><code>/home/[USERNAME]/.QuickBox/software/rtorrent/backup/.rtorrent.rc_YEAR-MONTH-DAY_HOUR:MINUTE</code>',
  'ROLLBACK_APPLICATIONS'                             => 'Alkalmazás Mentés Visszaállítása',
  'ROLLBACK_APPLICATIONS_CONTENT'                     => 'Alkalmazás mentések visszaállítása korábbi állapotra',
  'RESTORE_APP_BACKUP_CONFIG'                         => 'Mentés Visszaállítása <span class="badge badge-pills outline-badge-secondary badge-table-menu" style="padding:2px 6px;line-height:0.7rem;font-size:0.5rem;">csak konfig</span>',
  'RESTORE_APP_BACKUP_CONFIG_CONTENT'                 => 'Ez a parancs visszaállítja a kijelölt korábban mentett alkalmazás konfigurációt a hozzárendelt felhasználóhoz',
  'RESTORE_APP_DEFAULT_CONFIG'                        => 'Alapértelmezett Visszaállítása <span class="badge badge-pills outline-badge-secondary badge-table-menu" style="padding:2px 6px;line-height:0.7rem;font-size:0.5rem;">csak konfig</span>',
  'RESTORE_APP_DEFAULT_CONFIG_CONTENT'                => 'Ez a parancs visszaállítja a kijelölt alapértelmezett (telepítésből) alkalmazás konfigurációt a hozzárendelt felhasználóhoz',

  // #4.4.7.11 - news functions
  'NEWS_FUNCTIONS'                                    => 'Hírek Funkciók',
  'NEWS_FUNCTIONS_INFO_CONTENT'                       => '<p>A <code>qb news</code> funkciók a QuickBox-ban a legfrissebb információkat és frissítéseket nyújtják a QuickBox projektről. Maradjon tájékoztatott az új funkciókról, hibajavításokról és fontos bejelentésekről.</p>',
  'NEWS'                                              => 'Hírek',
  'NEWS_CONTENT'                                      => 'Legfrissebb QuickBox hírek megtekintése',

  // #4.4.7.12 - support functions
  'SUPPORT_FUNCTIONS'                                 => 'Támogatás Funkciók',
  'SUPPORT_FUNCTIONS_INFO_CONTENT'                    => '<p>A <code>qb support</code> funkció a QuickBox-ban biztonságos és megbízható módszert nyújt a támogatási személyzet szerverhez való hozzáférésének biztosítására, amikor segítségre van szükség. A biztonság és felhasználói védelem erős hangsúlyával ez a funkció a <code>quickSupport</code> fiókot használja, biztosítva, hogy csak a jogosult támogatási személyzet férhessen hozzá a szerverhez.</p>',
  'ENABLE_SUPPORT'                                    => 'Támogatás Engedélyezése',
  'ENABLE_SUPPORT_CONTENT'                            => 'Támogatás engedélyezése. Tipikusan a támogatásért felelős csapat tagjához rendelve',
  'DISABLE_SUPPORT'                                   => 'Támogatás Letiltása',
  'DISABLE_SUPPORT_CONTENT'                           => 'Támogatás letiltása. Egyébként a támogatási fiók automatikusan törli magát 36 óra után',

  // #4.4.7.13 - update functions
  'UPDATE_FUNCTIONS'                                  => 'Frissítés Funkciók',
  'UPDATE_FUNCTIONS_INFO_CONTENT'                     => '<p>A <code>qb update</code> funkció a QuickBox-ban kényelmes és rugalmas módot nyújt a QuickBox telepítés frissítéseinek kezelésére. Ezzel a funkcióval teljes ellenőrzésed van a frissítési folyamat felett, lehetővé téve a frissítések manuális ellenőrzését és a mikor alkalmazásuk kiválasztását.</p>',
  'UPDATE_CHECK'                                      => 'Frissítés Ellenőrzés',
  'UPDATE_CHECK_CONTENT'                              => 'QuickBox frissítések ellenőrzése',
  'UPDATE_QUICKBOX'                                   => 'QuickBox Frissítés',
  'UPDATE_QUICKBOX_CONTENT'                           => 'QuickBox telepítés frissítése legújabb kiadásra, ha elérhető',

  // #4.4.7.14 - bugs & reporting
  'BUGS'                                              => 'Hibák & Jelentés',
  'BUGS_INFO_CONTENT'                                 => '<p>A QuickBox dokumentáció grafikus megjelenítése rendszeres frissítéseket kap, biztosítva, hogy a nyújtott információk könnyen elérhetők és felhasználóbarátok maradjanak. Elkötelezettségünk a QuickBox-szal való élményed javítása iránt arra késztet minket, hogy folyamatosan finomítsuk és javítsuk a dokumentációt, naprakészen tartva a legújabb funkciókkal és funkcionalitásokkal.<br/><br/>
Minden frissítéssel törekszünk a komplex fogalmak egyszerűsítésére, az utasítások tisztázására és a felhasználói visszajelzések beépítésére, hogy a qb manpage még intuitívabb és hatékonyabb legyen. Célunk, hogy zökkenőmentes megértést adjunk a QuickBox-ról és annak hatalmas képességeiről, lehetővé téve a qb CLI környezet elsajátítását és a szerver feladatok könnyed kezelését.<br/><br/>
Értékeljük a hozzájárulásodat és bátorítunk, hogy ossz meg bármilyen javaslatot vagy ötletet, amely tovább javíthatja a qb manpage-t. A visszajelzésed kulcsfontosságú a forrás alakításában és biztosításában, hogy értékes hivatkozás maradjon minden QuickBox felhasználó számára. Valójában ez az oldal azért létezik, mert kérték! 🤪<br/><br/>
Jelentsen bármilyen reprodukálható hibát vagy javaslatot a <strong><a href="https://nullrefer.ir/?https://github.com/QuickBox/pro-v3/issues" rel="noopener nofollow" target="_blank">QuickBox.IO Labs Issue & Feature Tracker</a></strong> oldalon</p>',

  // #4.4.7.15 - disclaimer
  'DISCLAIMER'                                        => 'Felelősségvállalás',
  'DISCLAIMER_TEXT'                                   => '<p>Ez a script általános használatra szolgál és nem adunk garanciát semmilyen adott feladatra való alkalmasságára. A QuickBox.IO nem vállal felelősséget a beállításodért vagy bármilyen kárért, amely a script vagy bármelyik plugin használata/telepítése/módosítása során keletkezik. Kérjük, ne feledje, hogy a QuickBox.IO vagy annak személyzete nem felelős a szoftver és/vagy szerver naprakészen tartásáért; ez kizárólag a QuickBox Pro szoftver felhasználójának felelőssége.</p>',

  // #4.4.7.16 - license
  'LICENSE'                                           => 'Licenc',
  'LICENSE_SET'                                       => 'BSD 3-Clause licenc alatt',
  'LICENSE_TEXT'                                      => '<p>Copyright (c) 2018-2025, QuickBox.IO. Minden jog fenntartva.</p>
<p>A forráskód és bináris formák újraelosztása és használata, módosítással vagy anélkül, engedélyezett, feltéve, hogy a következő feltételek teljesülnek:</p>
<ul style="font-size:0.75rem"><li>A forráskód újraelosztásai meg kell őrizzék a fenti szerzői jogi értesítést, a feltételek listáját és a következő felelősségvállalást.</li>
<li>A bináris formában való újraelosztásoknak reprodukálniuk kell a fenti szerzői jogi értesítést, a feltételek listáját és a következő felelősségvállalást a dokumentációban és/vagy a forgalmazással együtt nyújtott más anyagokban.</li>
<li>A szerzői jog tulajdonosának neve vagy a hozzájárulók nevei nem használhatók fel ebből a szoftverből származó termékek támogatására vagy reklámozására specifikus előzetes írásbeli engedély nélkül.</li></ul>
<p>EZ A SZOFTVER A SZERZŐI JOG TULAJDONOSOK ÉS HOZZÁJÁRULÓK TARALMÁBAN VAN MEGADVA "AHOGY VAN" ÉS BÁRMILYEN KIFEJEZETT VAGY ALULRÓL ÉRTETT GARANCIA NÉLKÜL, BELEÉRTVE, DE NEM KORLÁTOZVA AZ ÜZEMELHETŐSÉGRE ÉS EGY ADOTT CÉLRA VALÓ ALKALMASSÁGRA VONATKOZÓ ALULRÓL ÉRTETT GARANCIÁKAT. SEMMILYEN ESETBEN NEM FELELŐS A SZERZŐI JOG TULAJDONOS VAGY HOZZÁJÁRULÓK BÁRMILYEN KÖZVETLEN, KÖZVETETT, VÉLETLEN, KÜLÖNÖS, PÉLDAKÉNT SZOLGÁLÓ VAGY KÖVETKEZMÉNYES KÁRÉRT (BELEÉRTVE, DE NEM KORLÁTOZVA A HELYETTES ÁRUK VAGY SZOLGÁLTATÁSOK BESZERZÉSÉRE; HASZNÁLAT, ADAT VAGY NYERESÉG VESZTÉSÉRE; VAGY ÜZLETI MEGSZAKADÁSRA) BÁRMILYEN FELELŐSSÉG ELMÉLET ALAPJÁN, FÜGGETLENÜL A SZERZŐDÉSTŐL, SZIGORÚ FELELŐSSÉGTŐL VAGY KÁROKÉRT (BELEÉRTVE A HANYAGSÁGOT VAGY EGYÉBET), AMELY BÁRMILYEN MÓDON A SZOFTVER HASZNÁLATÁBÓL ERED, MÉG HA TÁJÉKOZTATTÁK AZ ILYEN KÁR LEHETŐSÉGÉRŐL.</p>',

  // #4.4.7.17 - misc
  'EXAMPLE'                                           => 'példa:',
  'EXAMPLES'                                          => 'példák:',
  'LOG_MAINTENANCE'                                   => 'Napló Karbantartás'
];
