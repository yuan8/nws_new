<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-02-09 02:10:28 --> Severity: Notice --> Undefined index: role C:\xampp\htdocs\nws\application\controllers\dash\file\rpjmd.php 8
ERROR - 2020-02-09 02:17:04 --> Severity: Notice --> Undefined property: stdClass::$username C:\xampp\htdocs\nws\application\controllers\Login.php 32
ERROR - 2020-02-09 02:18:39 --> Severity: Notice --> Undefined property: stdClass::$username C:\xampp\htdocs\nws\application\controllers\Login.php 32
ERROR - 2020-02-09 02:21:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;user_daerah&quot; does not exist
LINE 1: select string_agg(kode_daerah',') from user_daerah where use...
                                               ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-09 02:21:56 --> Query error: ERROR:  relation "user_daerah" does not exist
LINE 1: select string_agg(kode_daerah',') from user_daerah where use...
                                               ^ - Invalid query: select string_agg(kode_daerah',') from user_daerah where user_id =3
ERROR - 2020-02-09 02:22:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  type &quot;kode_daerah&quot; does not exist
LINE 1: select string_agg(kode_daerah',') from user_perwakilan_nuwas...
                          ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-09 02:22:36 --> Query error: ERROR:  type "kode_daerah" does not exist
LINE 1: select string_agg(kode_daerah',') from user_perwakilan_nuwas...
                          ^ - Invalid query: select string_agg(kode_daerah',') from user_perwakilan_nuwas where user_id =3
ERROR - 2020-02-09 02:23:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  type &quot;kode_daerah&quot; does not exist
LINE 1: select string_agg(kode_daerah',') from user_perwakilan_nuwas...
                          ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-09 02:23:08 --> Query error: ERROR:  type "kode_daerah" does not exist
LINE 1: select string_agg(kode_daerah',') from user_perwakilan_nuwas...
                          ^ - Invalid query: select string_agg(kode_daerah',') from user_perwakilan_nuwas where user_id =3
ERROR - 2020-02-09 02:23:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  type &quot;kode_daerah&quot; does not exist
LINE 1: select string_agg(kode_daerah',') from user_perwakilan_nuwas...
                          ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-09 02:23:11 --> Query error: ERROR:  type "kode_daerah" does not exist
LINE 1: select string_agg(kode_daerah',') from user_perwakilan_nuwas...
                          ^ - Invalid query: select string_agg(kode_daerah',') from user_perwakilan_nuwas where user_id =3
ERROR - 2020-02-09 02:24:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  type &quot;kode_daerah&quot; does not exist
LINE 1: select string_agg(kode_daerah',') as kode_daerah from user_p...
                          ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-09 02:24:17 --> Query error: ERROR:  type "kode_daerah" does not exist
LINE 1: select string_agg(kode_daerah',') as kode_daerah from user_p...
                          ^ - Invalid query: select string_agg(kode_daerah',') as kode_daerah from user_perwakilan_nuwas where user_id =3
ERROR - 2020-02-09 02:26:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: ` unknown
LINE 1: select string_agg(CONCAT(`'`,kode_daerah,`'`),',') as kode_d...
                                 ^
HINT:  No operator matches the given name and argument type. You might need to add an explicit type cast. C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-09 02:26:55 --> Query error: ERROR:  operator does not exist: ` unknown
LINE 1: select string_agg(CONCAT(`'`,kode_daerah,`'`),',') as kode_d...
                                 ^
HINT:  No operator matches the given name and argument type. You might need to add an explicit type cast. - Invalid query: select string_agg(CONCAT(`'`,kode_daerah,`'`),',') as kode_daerah from user_perwakilan_nuwas where user_id =3
ERROR - 2020-02-09 02:28:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;)&quot;
LINE 1: select * from master_daerah where id in ()
                                                 ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-09 02:28:28 --> Query error: ERROR:  syntax error at or near ")"
LINE 1: select * from master_daerah where id in ()
                                                 ^ - Invalid query: select * from master_daerah where id in ()
ERROR - 2020-02-09 02:29:01 --> Severity: error --> Exception: syntax error, unexpected '')'' (T_CONSTANT_ENCAPSED_STRING) C:\xampp\htdocs\nws\application\controllers\dash\file\rpjmd.php 11
ERROR - 2020-02-09 02:29:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: character varying = integer
LINE 1: select * from master_daerah where id in (0)
                                             ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-09 02:29:11 --> Query error: ERROR:  operator does not exist: character varying = integer
LINE 1: select * from master_daerah where id in (0)
                                             ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. - Invalid query: select * from master_daerah where id in (0)
ERROR - 2020-02-09 02:29:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: ` integer
LINE 1: select * from master_daerah where id in (`0`)
                                                 ^
HINT:  No operator matches the given name and argument type. You might need to add an explicit type cast. C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-09 02:29:21 --> Query error: ERROR:  operator does not exist: ` integer
LINE 1: select * from master_daerah where id in (`0`)
                                                 ^
HINT:  No operator matches the given name and argument type. You might need to add an explicit type cast. - Invalid query: select * from master_daerah where id in (`0`)
ERROR - 2020-02-09 02:32:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: character varying = integer
LINE 1: select * from master_daerah where id in (11)
                                             ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-09 02:32:35 --> Query error: ERROR:  operator does not exist: character varying = integer
LINE 1: select * from master_daerah where id in (11)
                                             ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. - Invalid query: select * from master_daerah where id in (11)
ERROR - 2020-02-09 02:35:55 --> Severity: Warning --> array_walk() expects parameter 1 to be array, null given C:\xampp\htdocs\nws\application\controllers\dash\file\rpjmd.php 15
ERROR - 2020-02-09 02:37:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: character varying = integer
LINE 1: select * from master_daerah where id in (11)
                                             ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-09 02:37:00 --> Query error: ERROR:  operator does not exist: character varying = integer
LINE 1: select * from master_daerah where id in (11)
                                             ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. - Invalid query: select * from master_daerah where id in (11)
ERROR - 2020-02-09 02:37:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: character varying = integer
LINE 1: select * from master_daerah where id in (11)
                                             ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-09 02:37:30 --> Query error: ERROR:  operator does not exist: character varying = integer
LINE 1: select * from master_daerah where id in (11)
                                             ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. - Invalid query: select * from master_daerah where id in (11)
ERROR - 2020-02-09 02:38:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: character varying = integer
LINE 1: select * from master_daerah where id in (11)
                                             ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-09 02:38:53 --> Query error: ERROR:  operator does not exist: character varying = integer
LINE 1: select * from master_daerah where id in (11)
                                             ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. - Invalid query: select * from master_daerah where id in (11)
ERROR - 2020-02-09 02:39:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: character varying = integer
LINE 1: select * from master_daerah where id in (11)
                                             ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-09 02:39:11 --> Query error: ERROR:  operator does not exist: character varying = integer
LINE 1: select * from master_daerah where id in (11)
                                             ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. - Invalid query: select * from master_daerah where id in (11)
ERROR - 2020-02-09 02:39:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: character varying = integer
LINE 1: select * from master_daerah where id in (11)
                                             ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-09 02:39:38 --> Query error: ERROR:  operator does not exist: character varying = integer
LINE 1: select * from master_daerah where id in (11)
                                             ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. - Invalid query: select * from master_daerah where id in (11)
ERROR - 2020-02-09 02:40:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: character varying = integer
LINE 1: select * from master_daerah where id in ((11))
                                             ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-09 02:40:00 --> Query error: ERROR:  operator does not exist: character varying = integer
LINE 1: select * from master_daerah where id in ((11))
                                             ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. - Invalid query: select * from master_daerah where id in ((11))
ERROR - 2020-02-09 02:41:24 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp\htdocs\nws\application\controllers\dash\file\rpjmd.php 19
ERROR - 2020-02-09 02:45:39 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\nws\application\controllers\dash\file\rpjmd.php 20
ERROR - 2020-02-09 02:45:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;)&quot;
LINE 1: select * from master_daerah where id in (Array)
                                                      ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-09 02:45:39 --> Query error: ERROR:  syntax error at or near ")"
LINE 1: select * from master_daerah where id in (Array)
                                                      ^ - Invalid query: select * from master_daerah where id in (Array)
ERROR - 2020-02-09 03:21:04 --> Severity: Notice --> Undefined index: status C:\xampp\htdocs\nws\application\views\cahce\98079210ac37a5895a0f19404f65e8b0895f061d.php 110
ERROR - 2020-02-09 03:21:04 --> Severity: Notice --> Undefined index: status C:\xampp\htdocs\nws\application\views\cahce\98079210ac37a5895a0f19404f65e8b0895f061d.php 110
ERROR - 2020-02-09 17:34:16 --> Severity: Notice --> Undefined property: stdClass::$username C:\xampp\htdocs\nws\application\controllers\Login.php 32
ERROR - 2020-02-09 20:33:29 --> Severity: error --> Exception: syntax error, unexpected '$data5' (T_VARIABLE) C:\xampp\htdocs\nws\application\controllers\Dashboard.php 31
ERROR - 2020-02-09 20:33:38 --> Severity: error --> Exception: syntax error, unexpected '$data5' (T_VARIABLE) C:\xampp\htdocs\nws\application\controllers\Dashboard.php 31
ERROR - 2020-02-09 20:33:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;kegiatan&quot;
LINE 1: select (select sum(anggaran) form kegiatan where kode_daerah...
                                          ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-09 20:33:51 --> Query error: ERROR:  syntax error at or near "kegiatan"
LINE 1: select (select sum(anggaran) form kegiatan where kode_daerah...
                                          ^ - Invalid query: select (select sum(anggaran) form kegiatan where kode_daerah ilike  d.id||'%' and tahun = 2020) as anggaran from master_daerah as d where kode_daerah_parent is null order by anggaran desc
ERROR - 2020-02-09 20:34:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;kegiatan&quot;
LINE 1: select (select sum(k.anggaran) form kegiatan as k where kode...
                                            ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-09 20:34:38 --> Query error: ERROR:  syntax error at or near "kegiatan"
LINE 1: select (select sum(k.anggaran) form kegiatan as k where kode...
                                            ^ - Invalid query: select (select sum(k.anggaran) form kegiatan as k where kode_daerah ilike  d.id||'%' and tahun = 2020) as anggaran from master_daerah as d where kode_daerah_parent is null order by anggaran desc
ERROR - 2020-02-09 20:35:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;kegiatan&quot;
LINE 1: select (select sum(k.anggaran) form kegiatan as k where k.ko...
                                            ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-09 20:35:03 --> Query error: ERROR:  syntax error at or near "kegiatan"
LINE 1: select (select sum(k.anggaran) form kegiatan as k where k.ko...
                                            ^ - Invalid query: select (select sum(k.anggaran) form kegiatan as k where k.kode_daerah ilike  d.id||'%' and k.tahun = 2020) as anggaran from master_daerah as d where kode_daerah_parent is null order by anggaran desc
ERROR - 2020-02-09 20:35:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;kegiatan&quot;
LINE 1: select (select sum(k.anggaran) form kegiatan as k where k.ko...
                                            ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-09 20:35:22 --> Query error: ERROR:  syntax error at or near "kegiatan"
LINE 1: select (select sum(k.anggaran) form kegiatan as k where k.ko...
                                            ^ - Invalid query: select (select sum(k.anggaran) form kegiatan as k where k.kode_daerah ilike  d.id||'%' and k.tahun = 2020) as anggaran from master_daerah as d where d.kode_daerah_parent is null order by anggaran desc
ERROR - 2020-02-09 20:35:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;kegiatan&quot;
LINE 1: select (select sum(k.anggaran) form kegiatan as k where k.ko...
                                            ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-09 20:35:37 --> Query error: ERROR:  syntax error at or near "kegiatan"
LINE 1: select (select sum(k.anggaran) form kegiatan as k where k.ko...
                                            ^ - Invalid query: select (select sum(k.anggaran) form kegiatan as k where k.kode_daerah ilike  d.id||'%' and k.tahun = 2020) as value from master_daerah as d where d.kode_daerah_parent is null order by value desc
ERROR - 2020-02-09 20:35:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;kegiatan&quot;
LINE 1: select (select sum(k.anggaran) form kegiatan as k where k.ko...
                                            ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-09 20:35:44 --> Query error: ERROR:  syntax error at or near "kegiatan"
LINE 1: select (select sum(k.anggaran) form kegiatan as k where k.ko...
                                            ^ - Invalid query: select (select sum(k.anggaran) form kegiatan as k where k.kode_daerah ilike  d.id||'%' and k.tahun = 2020) as value from master_daerah as d where d.kode_daerah_parent is null 
ERROR - 2020-02-09 20:39:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;as&quot;
LINE 1: ...rah ilike  d.id||'%' and k.tahun = 2020)::numeric as value) ...
                                                             ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-09 20:39:24 --> Query error: ERROR:  syntax error at or near "as"
LINE 1: ...rah ilike  d.id||'%' and k.tahun = 2020)::numeric as value) ...
                                                             ^ - Invalid query: select  CONCAT(d.id,(select CASE WHEN sum(k.anggaran) > 0 THEN sum(k.anggaran) ELSE 0 END from kegiatan as k where k.kode_daerah ilike  d.id||'%' and k.tahun = 2020)::numeric as value) from master_daerah as d where d.kode_daerah_parent is null order by value desc
ERROR - 2020-02-09 20:39:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;value&quot; does not exist
LINE 1: ... as d where d.kode_daerah_parent is null order by value desc
                                                             ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-09 20:39:37 --> Query error: ERROR:  column "value" does not exist
LINE 1: ... as d where d.kode_daerah_parent is null order by value desc
                                                             ^ - Invalid query: select  CONCAT(d.id,(select CASE WHEN sum(k.anggaran) > 0 THEN sum(k.anggaran) ELSE 0 END from kegiatan as k where k.kode_daerah ilike  d.id||'%' and k.tahun = 2020)::numeric ) from master_daerah as d where d.kode_daerah_parent is null order by value desc
ERROR - 2020-02-09 20:44:21 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\nws\application\controllers\Dashboard.php 34
ERROR - 2020-02-09 20:46:02 --> Severity: Notice --> Undefined variable: anggaran C:\xampp\htdocs\nws\application\views\cahce\12cf16b23e04e7f095f9fea0a4a884411c4d1d91.php 164
ERROR - 2020-02-09 20:46:33 --> Severity: Notice --> Undefined variable: anggaran C:\xampp\htdocs\nws\application\views\cahce\12cf16b23e04e7f095f9fea0a4a884411c4d1d91.php 164
