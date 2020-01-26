<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-01-23 03:31:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;program_kegiatan_sipd2&quot;
LINE 1: ...n(kode_daerah) as kode_daerah, sum(anggaran) form program_ke...
                                                             ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-23 03:31:25 --> Query error: ERROR:  syntax error at or near "program_kegiatan_sipd2"
LINE 1: ...n(kode_daerah) as kode_daerah, sum(anggaran) form program_ke...
                                                             ^ - Invalid query: select min(kode_daerah) as kode_daerah, sum(anggaran) form program_kegiatan_sipd2 
ERROR - 2020-01-23 03:40:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;a&quot;
LINE 6:     a.kode_daerah a.kode_daerah group by kode_daerah order b...
                          ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-23 03:40:02 --> Query error: ERROR:  syntax error at or near "a"
LINE 6:     a.kode_daerah a.kode_daerah group by kode_daerah order b...
                          ^ - Invalid query: select 
    min(kode_daerah) as kode_daerah,
    sum(anggaran) as anggaran,
    (select nama from provinsi where id_provinsi=a.kode_daerah) as nama_daerah
    from program_kegiatan_sipd2 as a where
    a.kode_daerah a.kode_daerah group by kode_daerah order by sum(anggaran) desc
ERROR - 2020-01-23 03:40:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  argument of WHERE must be type boolean, not type character varying
LINE 6:     a.kode_daerah group by kode_daerah order by sum(anggaran...
            ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-23 03:40:08 --> Query error: ERROR:  argument of WHERE must be type boolean, not type character varying
LINE 6:     a.kode_daerah group by kode_daerah order by sum(anggaran...
            ^ - Invalid query: select 
    min(kode_daerah) as kode_daerah,
    sum(anggaran) as anggaran,
    (select nama from provinsi where id_provinsi=a.kode_daerah) as nama_daerah
    from program_kegiatan_sipd2 as a where
    a.kode_daerah group by kode_daerah order by sum(anggaran) desc
ERROR - 2020-01-23 03:42:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: integer || integer
LINE 6:     length(kode_daerah)= 4||2 group by kode_daerah order by ...
                                  ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-23 03:42:33 --> Query error: ERROR:  operator does not exist: integer || integer
LINE 6:     length(kode_daerah)= 4||2 group by kode_daerah order by ...
                                  ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. - Invalid query: select 
    min(kode_daerah) as kode_daerah,
    sum(anggaran) as anggaran,
    (select nama from provinsi where id_provinsi=a.kode_daerah) as nama_daerah
    from program_kegiatan_sipd2 as a where
    length(kode_daerah)= 4||2 group by kode_daerah order by sum(anggaran) desc
ERROR - 2020-01-23 03:42:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: integer || integer
LINE 6:     length(kode_daerah)=(4||2) group by kode_daerah order by...
                                  ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-23 03:42:47 --> Query error: ERROR:  operator does not exist: integer || integer
LINE 6:     length(kode_daerah)=(4||2) group by kode_daerah order by...
                                  ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. - Invalid query: select 
    min(kode_daerah) as kode_daerah,
    sum(anggaran) as anggaran,
    (select nama from provinsi where id_provinsi=a.kode_daerah) as nama_daerah
    from program_kegiatan_sipd2 as a where
    length(kode_daerah)=(4||2) group by kode_daerah order by sum(anggaran) desc
ERROR - 2020-01-23 03:45:40 --> Severity: error --> Exception: syntax error, unexpected '$query2' (T_VARIABLE) C:\xampp\htdocs\nws\application\controllers\Air_minum.php 14
ERROR - 2020-01-23 03:45:46 --> Severity: Warning --> A non-numeric value encountered C:\xampp\htdocs\nws\application\controllers\Air_minum.php 9
ERROR - 2020-01-23 03:45:46 --> Severity: Warning --> A non-numeric value encountered C:\xampp\htdocs\nws\application\controllers\Air_minum.php 9
ERROR - 2020-01-23 03:45:46 --> Severity: error --> Exception: Modulo by zero C:\xampp\htdocs\nws\application\controllers\Air_minum.php 9
ERROR - 2020-01-23 03:46:31 --> Severity: Warning --> A non-numeric value encountered C:\xampp\htdocs\nws\application\controllers\Air_minum.php 9
ERROR - 2020-01-23 03:46:31 --> Severity: Warning --> A non-numeric value encountered C:\xampp\htdocs\nws\application\controllers\Air_minum.php 9
ERROR - 2020-01-23 03:46:31 --> Severity: error --> Exception: Modulo by zero C:\xampp\htdocs\nws\application\controllers\Air_minum.php 9
ERROR - 2020-01-23 03:47:00 --> Severity: Warning --> A non-numeric value encountered C:\xampp\htdocs\nws\application\controllers\Air_minum.php 9
ERROR - 2020-01-23 03:47:00 --> Severity: Warning --> A non-numeric value encountered C:\xampp\htdocs\nws\application\controllers\Air_minum.php 9
ERROR - 2020-01-23 03:47:00 --> Severity: error --> Exception: Modulo by zero C:\xampp\htdocs\nws\application\controllers\Air_minum.php 9
ERROR - 2020-01-23 03:47:20 --> Severity: Warning --> A non-numeric value encountered C:\xampp\htdocs\nws\application\controllers\Air_minum.php 9
ERROR - 2020-01-23 03:47:20 --> Severity: Warning --> A non-numeric value encountered C:\xampp\htdocs\nws\application\controllers\Air_minum.php 9
ERROR - 2020-01-23 03:47:20 --> Severity: error --> Exception: Modulo by zero C:\xampp\htdocs\nws\application\controllers\Air_minum.php 9
ERROR - 2020-01-23 03:47:30 --> Severity: Warning --> A non-numeric value encountered C:\xampp\htdocs\nws\application\controllers\Air_minum.php 9
ERROR - 2020-01-23 03:47:30 --> Severity: Warning --> A non-numeric value encountered C:\xampp\htdocs\nws\application\controllers\Air_minum.php 9
ERROR - 2020-01-23 03:47:30 --> Severity: error --> Exception: Modulo by zero C:\xampp\htdocs\nws\application\controllers\Air_minum.php 9
ERROR - 2020-01-23 03:47:36 --> Severity: Warning --> A non-numeric value encountered C:\xampp\htdocs\nws\application\controllers\Air_minum.php 9
ERROR - 2020-01-23 03:47:36 --> Severity: Warning --> A non-numeric value encountered C:\xampp\htdocs\nws\application\controllers\Air_minum.php 9
ERROR - 2020-01-23 03:47:36 --> Severity: error --> Exception: Modulo by zero C:\xampp\htdocs\nws\application\controllers\Air_minum.php 9
ERROR - 2020-01-23 03:47:43 --> Severity: Warning --> A non-numeric value encountered C:\xampp\htdocs\nws\application\controllers\Air_minum.php 9
ERROR - 2020-01-23 03:47:43 --> Severity: Warning --> A non-numeric value encountered C:\xampp\htdocs\nws\application\controllers\Air_minum.php 9
ERROR - 2020-01-23 03:47:43 --> Severity: error --> Exception: Modulo by zero C:\xampp\htdocs\nws\application\controllers\Air_minum.php 9
ERROR - 2020-01-23 03:47:51 --> Severity: Warning --> A non-numeric value encountered C:\xampp\htdocs\nws\application\controllers\Air_minum.php 9
ERROR - 2020-01-23 03:47:51 --> Severity: Warning --> A non-numeric value encountered C:\xampp\htdocs\nws\application\controllers\Air_minum.php 9
ERROR - 2020-01-23 03:47:51 --> Severity: error --> Exception: Modulo by zero C:\xampp\htdocs\nws\application\controllers\Air_minum.php 9
ERROR - 2020-01-23 03:49:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: character varying ||%
LINE 2: ...kegiatan_sipd2 as a  on a.kode_daerah like p.id_provinsi||% 
                                                                   ^
HINT:  No operator matches the given name and argument type. You might need to add an explicit type cast. C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-23 03:49:08 --> Query error: ERROR:  operator does not exist: character varying ||%
LINE 2: ...kegiatan_sipd2 as a  on a.kode_daerah like p.id_provinsi||% 
                                                                   ^
HINT:  No operator matches the given name and argument type. You might need to add an explicit type cast. - Invalid query: select (p.id_provinsi) as id from provinsi as p
    join program_kegiatan_sipd2 as a  on a.kode_daerah like p.id_provinsi||% 
    GROUP BY p.id_provinsi  
    
ERROR - 2020-01-23 03:49:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: character varying |%
LINE 2: ..._kegiatan_sipd2 as a  on a.kode_daerah like p.id_provinsi|% 
                                                                    ^
HINT:  No operator matches the given name and argument type. You might need to add an explicit type cast. C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-23 03:49:13 --> Query error: ERROR:  operator does not exist: character varying |%
LINE 2: ..._kegiatan_sipd2 as a  on a.kode_daerah like p.id_provinsi|% 
                                                                    ^
HINT:  No operator matches the given name and argument type. You might need to add an explicit type cast. - Invalid query: select (p.id_provinsi) as id from provinsi as p
    join program_kegiatan_sipd2 as a  on a.kode_daerah like p.id_provinsi|% 
    GROUP BY p.id_provinsi  
    
ERROR - 2020-01-23 03:49:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: character varying |%
LINE 2: ...egiatan_sipd2 as a  on a.kode_daerah like (p.id_provinsi|% )
                                                                   ^
HINT:  No operator matches the given name and argument type. You might need to add an explicit type cast. C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-23 03:49:22 --> Query error: ERROR:  operator does not exist: character varying |%
LINE 2: ...egiatan_sipd2 as a  on a.kode_daerah like (p.id_provinsi|% )
                                                                   ^
HINT:  No operator matches the given name and argument type. You might need to add an explicit type cast. - Invalid query: select (p.id_provinsi) as id from provinsi as p
    join program_kegiatan_sipd2 as a  on a.kode_daerah like (p.id_provinsi|% )
    GROUP BY p.id_provinsi  
    
ERROR - 2020-01-23 03:49:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: character varying | unknown
LINE 2: ...giatan_sipd2 as a  on a.kode_daerah like (p.id_provinsi|'%')
                                                                  ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-23 03:49:35 --> Query error: ERROR:  operator does not exist: character varying | unknown
LINE 2: ...giatan_sipd2 as a  on a.kode_daerah like (p.id_provinsi|'%')
                                                                  ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. - Invalid query: select (p.id_provinsi) as id from provinsi as p
    join program_kegiatan_sipd2 as a  on a.kode_daerah like (p.id_provinsi|'%')
    GROUP BY p.id_provinsi  
    
ERROR - 2020-01-23 03:50:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;a.anggaran&quot; must appear in the GROUP BY clause or be used in an aggregate function
LINE 3:     GROUP BY p.id_provinsi  ORDER BY a.anggaran
                                             ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-23 03:50:37 --> Query error: ERROR:  column "a.anggaran" must appear in the GROUP BY clause or be used in an aggregate function
LINE 3:     GROUP BY p.id_provinsi  ORDER BY a.anggaran
                                             ^ - Invalid query: select min(p.id_provinsi) as id, sum(a.anggaran) as anggaran from provinsi as p
    join program_kegiatan_sipd2 as a  on a.kode_daerah like (p.id_provinsi||'%')
    GROUP BY p.id_provinsi  ORDER BY a.anggaran
    
ERROR - 2020-01-23 03:52:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column p.kode_daerah does not exist
LINE 3:     GROUP BY p.kode_daerah  ORDER BY sum(a.anggaran) DESC
                     ^
HINT:  Perhaps you meant to reference the column &quot;a.kode_daerah&quot;. C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-23 03:52:45 --> Query error: ERROR:  column p.kode_daerah does not exist
LINE 3:     GROUP BY p.kode_daerah  ORDER BY sum(a.anggaran) DESC
                     ^
HINT:  Perhaps you meant to reference the column "a.kode_daerah". - Invalid query: select min(a.kode_daerah) as id, sum(a.anggaran) as anggaran from provinsi as p
    join program_kegiatan_sipd2 as a  on a.kode_daerah like (p.id_provinsi||'%')
    GROUP BY p.kode_daerah  ORDER BY sum(a.anggaran) DESC
    
ERROR - 2020-01-23 03:52:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column p.kode_daerah does not exist
LINE 3:     GROUP BY p.kode_daerah  ORDER BY sum(a.anggaran) DESC
                     ^
HINT:  Perhaps you meant to reference the column &quot;a.kode_daerah&quot;. C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-23 03:52:57 --> Query error: ERROR:  column p.kode_daerah does not exist
LINE 3:     GROUP BY p.kode_daerah  ORDER BY sum(a.anggaran) DESC
                     ^
HINT:  Perhaps you meant to reference the column "a.kode_daerah". - Invalid query: select min(a.kode_daerah) as id, sum(a.anggaran) as anggaran from provinsi as p
    join program_kegiatan_sipd2 as a  on a.kode_daerah like (p.id_provinsi||'%')
    GROUP BY p.kode_daerah  ORDER BY sum(a.anggaran) DESC
    
ERROR - 2020-01-23 03:54:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column p.kode_daerah does not exist
LINE 3:     GROUP BY p.kode_daerah  ORDER BY sum(a.anggaran) DESC
                     ^
HINT:  Perhaps you meant to reference the column &quot;a.kode_daerah&quot;. C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-23 03:54:25 --> Query error: ERROR:  column p.kode_daerah does not exist
LINE 3:     GROUP BY p.kode_daerah  ORDER BY sum(a.anggaran) DESC
                     ^
HINT:  Perhaps you meant to reference the column "a.kode_daerah". - Invalid query: select min(a.kode_daerah) as id, sum(a.anggaran) as anggaran from program_kegiatan_sipd2 as a
    join  view_daerah as p on a.kode_daerah = p.id
    GROUP BY p.kode_daerah  ORDER BY sum(a.anggaran) DESC
    
ERROR - 2020-01-23 03:55:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;p.nama&quot; must appear in the GROUP BY clause or be used in an aggregate function
LINE 1: select p.nama as nama_daerah, min(a.kode_daerah) as id, sum(...
               ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-23 03:55:32 --> Query error: ERROR:  column "p.nama" must appear in the GROUP BY clause or be used in an aggregate function
LINE 1: select p.nama as nama_daerah, min(a.kode_daerah) as id, sum(...
               ^ - Invalid query: select p.nama as nama_daerah, min(a.kode_daerah) as id, sum(a.anggaran) as anggaran 
            from program_kegiatan_sipd2 as a
            join  view_daerah as p on a.kode_daerah = p.id
            GROUP BY a.kode_daerah  ORDER BY sum(a.anggaran) DESC
    
ERROR - 2020-01-23 03:57:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;%&quot;
LINE 4:             where a.kode_daerah ilike (17|'%')
                                                  ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-23 03:57:56 --> Query error: ERROR:  invalid input syntax for integer: "%"
LINE 4:             where a.kode_daerah ilike (17|'%')
                                                  ^ - Invalid query: select min(p.nama) as nama_daerah, (a.kode_daerah) as id, sum(a.anggaran) as anggaran 
            from program_kegiatan_sipd2 as a
            join  view_daerah as p on a.kode_daerah = p.id
            where a.kode_daerah ilike (17|'%')
            GROUP BY a.kode_daerah  ORDER BY sum(a.anggaran) DESC
    
ERROR - 2020-01-23 04:00:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;then&quot;
LINE 1: ..._daerah) as id,CASE WHEN (length(a.kode_daerah)=2 then true ...
                                                             ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-23 04:00:41 --> Query error: ERROR:  syntax error at or near "then"
LINE 1: ..._daerah) as id,CASE WHEN (length(a.kode_daerah)=2 then true ...
                                                             ^ - Invalid query: select min(p.nama) as nama_daerah,(a.kode_daerah) as id,CASE WHEN (length(a.kode_daerah)=2 then true else false end) as tag_provinsi, sum(a.anggaran) as anggaran 
            from program_kegiatan_sipd2 as a
            join  view_daerah as p on a.kode_daerah = p.id
            where a.kode_daerah ilike (32||'%')
            GROUP BY a.kode_daerah  ORDER BY sum(a.anggaran) DESC
    
ERROR - 2020-01-23 04:03:52 --> Severity: error --> Exception: syntax error, unexpected '$query2' (T_VARIABLE) C:\xampp\htdocs\nws\application\controllers\Air_minum.php 25
ERROR - 2020-01-23 04:03:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;where&quot;
LINE 2:     left join program_kegiatan_sipd2 as a where a.kode_daera...
                                                  ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-23 04:03:59 --> Query error: ERROR:  syntax error at or near "where"
LINE 2:     left join program_kegiatan_sipd2 as a where a.kode_daera...
                                                  ^ - Invalid query: select min(p.nama) as nama_daerah,sum(a.anggaran)  as anggaran from view_daerah as p
    left join program_kegiatan_sipd2 as a where a.kode_daerah=p.id
ERROR - 2020-01-23 04:05:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;THEN&quot;
LINE 1: ...anggaran))IS NOT NULL THEN sum(a.anggaran) ELSE 0 THEN  as a...
                                                             ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-23 04:05:39 --> Query error: ERROR:  syntax error at or near "THEN"
LINE 1: ...anggaran))IS NOT NULL THEN sum(a.anggaran) ELSE 0 THEN  as a...
                                                             ^ - Invalid query: select min(p.nama) as nama_daerah,CASE WHEN (sum(a.anggaran))IS NOT NULL THEN sum(a.anggaran) ELSE 0 THEN  as anggaran 
    from view_daerah as p
    left join program_kegiatan_sipd2 as a on a.kode_daerah=p.id
    group by p.id
    
ERROR - 2020-01-23 04:06:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;THEN&quot;
LINE 1: ...nggaran)IS NOT NULL)  THEN sum(a.anggaran) ELSE 0 THEN  as a...
                                                             ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-23 04:06:04 --> Query error: ERROR:  syntax error at or near "THEN"
LINE 1: ...nggaran)IS NOT NULL)  THEN sum(a.anggaran) ELSE 0 THEN  as a...
                                                             ^ - Invalid query: select min(p.nama) as nama_daerah,CASE WHEN (sum(a.anggaran)IS NOT NULL)  THEN sum(a.anggaran) ELSE 0 THEN  as anggaran 
    from view_daerah as p
    left join program_kegiatan_sipd2 as a on a.kode_daerah=p.id
    group by p.id
    
ERROR - 2020-01-23 04:06:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;THEN&quot;
LINE 1: ...(a.anggaran)&lt;&gt; NULL)  THEN sum(a.anggaran) ELSE 0 THEN  as a...
                                                             ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-23 04:06:14 --> Query error: ERROR:  syntax error at or near "THEN"
LINE 1: ...(a.anggaran)<> NULL)  THEN sum(a.anggaran) ELSE 0 THEN  as a...
                                                             ^ - Invalid query: select min(p.nama) as nama_daerah,CASE WHEN (sum(a.anggaran)<> NULL)  THEN sum(a.anggaran) ELSE 0 THEN  as anggaran 
    from view_daerah as p
    left join program_kegiatan_sipd2 as a on a.kode_daerah=p.id
    group by p.id
    
ERROR - 2020-01-23 04:06:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;THEN&quot;
LINE 1: ...um(a.anggaran)=null)  THEN sum(a.anggaran) ELSE 0 THEN  as a...
                                                             ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-23 04:06:30 --> Query error: ERROR:  syntax error at or near "THEN"
LINE 1: ...um(a.anggaran)=null)  THEN sum(a.anggaran) ELSE 0 THEN  as a...
                                                             ^ - Invalid query: select min(p.nama) as nama_daerah,CASE WHEN (sum(a.anggaran)=null)  THEN sum(a.anggaran) ELSE 0 THEN  as anggaran 
    from view_daerah as p
    left join program_kegiatan_sipd2 as a on a.kode_daerah=p.id
    group by p.id
    
ERROR - 2020-01-23 04:06:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;THEN&quot;
LINE 1: ...um(a.anggaran)=NULL)  THEN sum(a.anggaran) ELSE 0 THEN)  as ...
                                                             ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-23 04:06:54 --> Query error: ERROR:  syntax error at or near "THEN"
LINE 1: ...um(a.anggaran)=NULL)  THEN sum(a.anggaran) ELSE 0 THEN)  as ...
                                                             ^ - Invalid query: select min(p.nama) as nama_daerah, (CASE WHEN (sum(a.anggaran)=NULL)  THEN sum(a.anggaran) ELSE 0 THEN)  as anggaran 
    from view_daerah as p
    left join program_kegiatan_sipd2 as a on a.kode_daerah=p.id
    group by p.id
    
ERROR - 2020-01-23 04:06:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;THEN&quot;
LINE 1: ... (sum(a.anggaran)=0)  THEN sum(a.anggaran) ELSE 0 THEN)  as ...
                                                             ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-23 04:06:59 --> Query error: ERROR:  syntax error at or near "THEN"
LINE 1: ... (sum(a.anggaran)=0)  THEN sum(a.anggaran) ELSE 0 THEN)  as ...
                                                             ^ - Invalid query: select min(p.nama) as nama_daerah, (CASE WHEN (sum(a.anggaran)=0)  THEN sum(a.anggaran) ELSE 0 THEN)  as anggaran 
    from view_daerah as p
    left join program_kegiatan_sipd2 as a on a.kode_daerah=p.id
    group by p.id
    
ERROR - 2020-01-23 04:07:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;THEN&quot;
LINE 1: ...N (sum(a.anggaran)=0) THEN sum(a.anggaran) ELSE 0 THEN)  as ...
                                                             ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-23 04:07:18 --> Query error: ERROR:  syntax error at or near "THEN"
LINE 1: ...N (sum(a.anggaran)=0) THEN sum(a.anggaran) ELSE 0 THEN)  as ...
                                                             ^ - Invalid query: select min(p.nama) as nama_daerah, (CASE WHEN (sum(a.anggaran)=0) THEN sum(a.anggaran) ELSE 0 THEN)  as anggaran 
    from view_daerah as p
    left join program_kegiatan_sipd2 as a on a.kode_daerah=p.id
    group by p.id
    
ERROR - 2020-01-23 04:07:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  argument of CASE/WHEN must be type boolean, not type numeric
LINE 1: select min(p.nama) as nama_daerah, (CASE WHEN (sum(a.anggara...
                                                       ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-23 04:07:51 --> Query error: ERROR:  argument of CASE/WHEN must be type boolean, not type numeric
LINE 1: select min(p.nama) as nama_daerah, (CASE WHEN (sum(a.anggara...
                                                       ^ - Invalid query: select min(p.nama) as nama_daerah, (CASE WHEN (sum(a.anggaran)) THEN sum(a.anggaran) ELSE 0 end)  as anggaran 
    from view_daerah as p
    left join program_kegiatan_sipd2 as a on a.kode_daerah=p.id
    group by p.id
    
ERROR - 2020-01-23 04:09:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;a.kode_daerah&quot; must appear in the GROUP BY clause or be used in an aggregate function
LINE 7:       group by p.id ORDER by a.kode_daerah
                                     ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-23 04:09:01 --> Query error: ERROR:  column "a.kode_daerah" must appear in the GROUP BY clause or be used in an aggregate function
LINE 7:       group by p.id ORDER by a.kode_daerah
                                     ^ - Invalid query: select
      min(p.nama) as nama_daerah,
      (CASE WHEN (sum(a.anggaran) IS NOT NULL) THEN sum(a.anggaran) ELSE 0 END)  as anggaran 

      from view_daerah as p
      left join program_kegiatan_sipd2 as a on a.kode_daerah=p.id
      group by p.id ORDER by a.kode_daerah
   
    
ERROR - 2020-01-23 04:09:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;a.kode_daerah&quot; must appear in the GROUP BY clause or be used in an aggregate function
LINE 8:       group by p.id ORDER by a.kode_daerah
                                     ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-23 04:09:21 --> Query error: ERROR:  column "a.kode_daerah" must appear in the GROUP BY clause or be used in an aggregate function
LINE 8:       group by p.id ORDER by a.kode_daerah
                                     ^ - Invalid query: select
      min(p.nama) as nama_daerah,
      min(a.kode_daerah) as kode_daerah,
      (CASE WHEN (sum(a.anggaran) IS NOT NULL) THEN sum(a.anggaran) ELSE 0 END)  as anggaran 

      from view_daerah as p
      left join program_kegiatan_sipd2 as a on a.kode_daerah=p.id
      group by p.id ORDER by a.kode_daerah
   
    
ERROR - 2020-01-23 04:09:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;a.id&quot; must appear in the GROUP BY clause or be used in an aggregate function
LINE 8:       group by p.id ORDER by a.id
                                     ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-23 04:09:53 --> Query error: ERROR:  column "a.id" must appear in the GROUP BY clause or be used in an aggregate function
LINE 8:       group by p.id ORDER by a.id
                                     ^ - Invalid query: select
      min(p.nama) as nama_daerah,
      min(p.id) as kode_daerah,
      (CASE WHEN (sum(a.anggaran) IS NOT NULL) THEN sum(a.anggaran) ELSE 0 END)  as anggaran 

      from view_daerah as p
      left join program_kegiatan_sipd2 as a on a.kode_daerah=p.id
      group by p.id ORDER by a.id
   
    
ERROR - 2020-01-23 04:10:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;a.anggaran&quot; must appear in the GROUP BY clause or be used in an aggregate function
LINE 8:       group by p.id ORDER by a.anggaran
                                     ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-23 04:10:17 --> Query error: ERROR:  column "a.anggaran" must appear in the GROUP BY clause or be used in an aggregate function
LINE 8:       group by p.id ORDER by a.anggaran
                                     ^ - Invalid query: select
      min(p.nama) as nama_daerah,
      min(p.id) as kode_daerah,
      (CASE WHEN (sum(a.anggaran) IS NOT NULL) THEN sum(a.anggaran) ELSE 0 END)  as anggaran 

      from view_daerah as p
      left join program_kegiatan_sipd2 as a on a.kode_daerah=p.id
      group by p.id ORDER by a.anggaran
   
    
ERROR - 2020-01-23 04:10:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;a.anggaran&quot; must appear in the GROUP BY clause or be used in an aggregate function
LINE 7:       group by p.id ORDER BY a.anggaran 
                                     ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-23 04:10:32 --> Query error: ERROR:  column "a.anggaran" must appear in the GROUP BY clause or be used in an aggregate function
LINE 7:       group by p.id ORDER BY a.anggaran 
                                     ^ - Invalid query: select
      min(p.nama) as nama_daerah,
      min(p.id) as kode_daerah,
      (CASE WHEN (sum(a.anggaran) IS NOT NULL) THEN sum(a.anggaran) ELSE 0 END)  as anggaran 
      from view_daerah as p
      left join program_kegiatan_sipd2 as a on a.kode_daerah=p.id
      group by p.id ORDER BY a.anggaran 
   
    
ERROR - 2020-01-23 04:10:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  aggregate function calls cannot be nested
LINE 4:       MIN(CASE WHEN (sum(a.anggaran) IS NOT NULL) THEN sum(a...
                             ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-23 04:10:44 --> Query error: ERROR:  aggregate function calls cannot be nested
LINE 4:       MIN(CASE WHEN (sum(a.anggaran) IS NOT NULL) THEN sum(a...
                             ^ - Invalid query: select
      min(p.nama) as nama_daerah,
      min(p.id) as kode_daerah,
      MIN(CASE WHEN (sum(a.anggaran) IS NOT NULL) THEN sum(a.anggaran) ELSE 0 END)  as anggaran 
      from view_daerah as p
      left join program_kegiatan_sipd2 as a on a.kode_daerah=p.id
      group by p.id ORDER BY a.anggaran 
   
    
ERROR - 2020-01-23 04:10:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  aggregate function calls cannot be nested
LINE 4:       min(CASE WHEN (sum(a.anggaran) IS NOT NULL) THEN sum(a...
                             ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-23 04:10:53 --> Query error: ERROR:  aggregate function calls cannot be nested
LINE 4:       min(CASE WHEN (sum(a.anggaran) IS NOT NULL) THEN sum(a...
                             ^ - Invalid query: select
      min(p.nama) as nama_daerah,
      min(p.id) as kode_daerah,
      min(CASE WHEN (sum(a.anggaran) IS NOT NULL) THEN sum(a.anggaran) ELSE 0 END)  as anggaran 
      from view_daerah as p
      left join program_kegiatan_sipd2 as a on a.kode_daerah=p.id
      group by p.id ORDER BY a.anggaran 
   
    
ERROR - 2020-01-23 04:11:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;a.anggaran&quot; must appear in the GROUP BY clause or be used in an aggregate function
LINE 7:       group by p.id ORDER BY a.anggaran DESC
                                     ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-23 04:11:04 --> Query error: ERROR:  column "a.anggaran" must appear in the GROUP BY clause or be used in an aggregate function
LINE 7:       group by p.id ORDER BY a.anggaran DESC
                                     ^ - Invalid query: select
      min(p.nama) as nama_daerah,
      min(p.id) as kode_daerah,
      (CASE WHEN (sum(a.anggaran) IS NOT NULL) THEN sum(a.anggaran) ELSE 0 END)  as anggaran 
      from view_daerah as p
      left join program_kegiatan_sipd2 as a on a.kode_daerah=p.id
      group by p.id ORDER BY a.anggaran DESC
   
    
ERROR - 2020-01-23 04:11:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;a.anggaran&quot; must appear in the GROUP BY clause or be used in an aggregate function
LINE 9:       group by p.id ORDER BY a.anggaran DESC
                                     ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-23 04:11:39 --> Query error: ERROR:  column "a.anggaran" must appear in the GROUP BY clause or be used in an aggregate function
LINE 9:       group by p.id ORDER BY a.anggaran DESC
                                     ^ - Invalid query: select
      min(p.nama) as nama_daerah,
      min(p.id) as kode_daerah,
      (CASE WHEN (sum(a.anggaran) IS NOT NULL) THEN sum(a.anggaran) ELSE 0 END)  as anggaran 
      from view_daerah as p
      left join program_kegiatan_sipd2 as a on a.kode_daerah=p.id
      where p.id ilike (32||'%')

      group by p.id ORDER BY a.anggaran DESC
   
    
ERROR - 2020-01-23 04:13:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;group&quot;
LINE 9:       group by p.id 
              ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-23 04:13:47 --> Query error: ERROR:  syntax error at or near "group"
LINE 9:       group by p.id 
              ^ - Invalid query: select
      min(p.nama) as nama_daerah,
      min(p.id) as kode_daerah,
      (CASE WHEN (sum(a.anggaran) IS NOT NULL) THEN sum(a.anggaran) ELSE 0 END)  as anggaran 
      from view_daerah as p
      left join program_kegiatan_sipd2 as a on a.kode_daerah=p.id
      where p.id ilike (13||'%')
      ORDER BY sum(a.anggaran) DESC
      group by p.id 
   
    
ERROR - 2020-01-23 09:27:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: character varying = integer
LINE 4:     order by a.kode_daerah=13 
                                  ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-23 09:27:10 --> Query error: ERROR:  operator does not exist: character varying = integer
LINE 4:     order by a.kode_daerah=13 
                                  ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. - Invalid query: select min(u.id) as id_urusan, sum(a.anggaran) as anggaran from master_urusan as u
    left join program_kegiatan_sipd2 as a on a.id_urusan=u.id
    GROUP BY u.id
    order by a.kode_daerah=13 
      
    
ERROR - 2020-01-23 09:27:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;a.kode_daerah&quot; must appear in the GROUP BY clause or be used in an aggregate function
LINE 4:     order by a.kode_daerah=13::text 
                     ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-23 09:27:43 --> Query error: ERROR:  column "a.kode_daerah" must appear in the GROUP BY clause or be used in an aggregate function
LINE 4:     order by a.kode_daerah=13::text 
                     ^ - Invalid query: select min(u.id) as id_urusan, sum(a.anggaran) as anggaran from master_urusan as u
    left join program_kegiatan_sipd2 as a on a.id_urusan=u.id
    GROUP BY u.id
    order by a.kode_daerah=13::text 
      
    
ERROR - 2020-01-23 09:30:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;a.kode_daerah&quot; must appear in the GROUP BY clause or be used in an aggregate function
LINE 1: select min(u.nama) as nama_urusan,a.kode_daerah, min(u.id) a...
                                          ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-23 09:30:48 --> Query error: ERROR:  column "a.kode_daerah" must appear in the GROUP BY clause or be used in an aggregate function
LINE 1: select min(u.nama) as nama_urusan,a.kode_daerah, min(u.id) a...
                                          ^ - Invalid query: select min(u.nama) as nama_urusan,a.kode_daerah, min(u.id) as id_urusan, sum(a.anggaran) as anggaran from master_urusan as u
    left join program_kegiatan_sipd2 as a on a.id_urusan=u.id
    where a.kode_daerah=13::text  
    GROUP BY u.id
  
      
    
