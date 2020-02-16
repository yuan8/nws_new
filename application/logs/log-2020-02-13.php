<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-02-13 08:01:47 --> Severity: Notice --> Undefined property: stdClass::$username C:\xampp\htdocs\nws\application\controllers\Login.php 32
ERROR - 2020-02-13 17:00:55 --> Severity: Notice --> Undefined property: stdClass::$username C:\xampp\htdocs\nws\application\controllers\Login.php 32
ERROR - 2020-02-13 17:02:54 --> Severity: error --> Exception: View [api.pdam.dashboard] not found. C:\xampp\htdocs\nws\vendor\illuminate\view\FileViewFinder.php 137
ERROR - 2020-02-13 17:03:34 --> Severity: Notice --> Undefined index: nama_daerah C:\xampp\htdocs\nws\application\views\cahce\5a1e866162a4282e4f7918fa73f5cf4ed42ce82c.php 66
ERROR - 2020-02-13 17:03:42 --> Severity: Notice --> Undefined index: nama_daerah C:\xampp\htdocs\nws\application\views\cahce\5a1e866162a4282e4f7918fa73f5cf4ed42ce82c.php 66
ERROR - 2020-02-13 17:03:53 --> Severity: Notice --> Undefined index: nama_daerah C:\xampp\htdocs\nws\application\views\cahce\5a1e866162a4282e4f7918fa73f5cf4ed42ce82c.php 66
ERROR - 2020-02-13 17:04:30 --> Severity: Notice --> Undefined index: nama_daerah C:\xampp\htdocs\nws\application\views\cahce\5a1e866162a4282e4f7918fa73f5cf4ed42ce82c.php 66
ERROR - 2020-02-13 17:05:19 --> Severity: Notice --> Undefined index: nama_daerah C:\xampp\htdocs\nws\application\views\cahce\5a1e866162a4282e4f7918fa73f5cf4ed42ce82c.php 66
ERROR - 2020-02-13 17:06:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;master_daerah&quot;
LINE 1: select *,(select nama form master_daerah where id=pdam_profi...
                                   ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-13 17:06:33 --> Query error: ERROR:  syntax error at or near "master_daerah"
LINE 1: select *,(select nama form master_daerah where id=pdam_profi...
                                   ^ - Invalid query: select *,(select nama form master_daerah where id=pdam_profile.kode_daerah) as nama_daerah from pdam_profile where traffic_penilaian_nuwas = -1 order by created_at desc limit 3
ERROR - 2020-02-13 17:08:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;master_daerah&quot;
LINE 1: select p.*,(select d.nama form master_daerah as d where id=p...
                                       ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-13 17:08:11 --> Query error: ERROR:  syntax error at or near "master_daerah"
LINE 1: select p.*,(select d.nama form master_daerah as d where id=p...
                                       ^ - Invalid query: select p.*,(select d.nama form master_daerah as d where id=p.kode_daerah limit 1) as nama_daerah from pdam_profile as p where traffic_penilaian_nuwas = -1 order by created_at desc limit 3
ERROR - 2020-02-13 17:09:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;master_daerah&quot;
LINE 1: select p.*,(select d.nama form master_daerah as d where d.id...
                                       ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-13 17:09:06 --> Query error: ERROR:  syntax error at or near "master_daerah"
LINE 1: select p.*,(select d.nama form master_daerah as d where d.id...
                                       ^ - Invalid query: select p.*,(select d.nama form master_daerah as d where d.id=p.kode_daerah limit 1) as nama_daerah from pdam_profile as p where traffic_penilaian_nuwas = -1 order by created_at desc limit 3
ERROR - 2020-02-13 17:17:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;order&quot;
LINE 1: ...profile as p order by traffic_penilaian_nuwas asc order by c...
                                                             ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-13 17:17:19 --> Query error: ERROR:  syntax error at or near "order"
LINE 1: ...profile as p order by traffic_penilaian_nuwas asc order by c...
                                                             ^ - Invalid query: select p.*,(select d.nama from master_daerah as d where d.id=p.kode_daerah limit 1) as nama_daerah from pdam_profile as p order by traffic_penilaian_nuwas asc order by created_at desc limit 3
ERROR - 2020-02-13 17:20:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;desc&quot;
LINE 1: ...rofile as p order by traffic_penilaian_nuwas ASC  desc limit...
                                                             ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-13 17:20:12 --> Query error: ERROR:  syntax error at or near "desc"
LINE 1: ...rofile as p order by traffic_penilaian_nuwas ASC  desc limit...
                                                             ^ - Invalid query: select p.*,(select d.nama from master_daerah as d where d.id=p.kode_daerah limit 1) as nama_daerah from pdam_profile as p order by traffic_penilaian_nuwas ASC  desc limit 3
ERROR - 2020-02-13 17:26:51 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\nws\application\controllers\api\Pdam.php 11
ERROR - 2020-02-13 17:26:51 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\nws\application\controllers\api\Pdam.php 11
ERROR - 2020-02-13 17:26:51 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\nws\application\controllers\api\Pdam.php 11
ERROR - 2020-02-13 17:26:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;in&quot;
LINE 1: ...) as nama_daerah from pdam_profile as p where not in (0,,,) ...
                                                             ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-13 17:26:51 --> Query error: ERROR:  syntax error at or near "in"
LINE 1: ...) as nama_daerah from pdam_profile as p where not in (0,,,) ...
                                                             ^ - Invalid query: select p.*,(select d.nama from master_daerah as d where d.id=p.kode_daerah limit 1) as nama_daerah from pdam_profile as p where not in (0,,,) order by traffic_penilaian_nuwas DESC  limit 3
ERROR - 2020-02-13 17:27:00 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\nws\application\controllers\api\Pdam.php 11
ERROR - 2020-02-13 17:27:00 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\nws\application\controllers\api\Pdam.php 11
ERROR - 2020-02-13 17:27:01 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\nws\application\controllers\api\Pdam.php 11
ERROR - 2020-02-13 17:27:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;in&quot;
LINE 1: ...) as nama_daerah from pdam_profile as p where not in (0,,,) ...
                                                             ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-13 17:27:01 --> Query error: ERROR:  syntax error at or near "in"
LINE 1: ...) as nama_daerah from pdam_profile as p where not in (0,,,) ...
                                                             ^ - Invalid query: select p.*,(select d.nama from master_daerah as d where d.id=p.kode_daerah limit 1) as nama_daerah from pdam_profile as p where not in (0,,,) order by traffic_penilaian_nuwas DESC  limit 3
