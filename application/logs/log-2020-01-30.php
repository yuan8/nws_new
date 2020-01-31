<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-01-30 05:58:16 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\nws\application\controllers\Program-kegiatan\Data.php 11
ERROR - 2020-01-30 06:00:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: character varying |%
LINE 2:   left join program as p on p.kode_daerah ilike d.id|%
                                                            ^
HINT:  No operator matches the given name and argument type. You might need to add an explicit type cast. C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 06:00:56 --> Query error: ERROR:  operator does not exist: character varying |%
LINE 2:   left join program as p on p.kode_daerah ilike d.id|%
                                                            ^
HINT:  No operator matches the given name and argument type. You might need to add an explicit type cast. - Invalid query: select *  from master_daerah as d 
		left join program as p on p.kode_daerah ilike d.id|%

		where d.kode_daerah_parent is null
ERROR - 2020-01-30 06:01:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;where&quot;
LINE 5:   where d.kode_daerah_parent is null
          ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 06:01:13 --> Query error: ERROR:  syntax error at or near "where"
LINE 5:   where d.kode_daerah_parent is null
          ^ - Invalid query: select *  from master_daerah as d 

		left join program as p on p.kode_daerah ilike d.id | %
		
		where d.kode_daerah_parent is null
ERROR - 2020-01-30 06:01:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: character varying | unknown
LINE 3:   left join program as p on p.kode_daerah ilike d.id |'%'
                                                             ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 06:01:35 --> Query error: ERROR:  operator does not exist: character varying | unknown
LINE 3:   left join program as p on p.kode_daerah ilike d.id |'%'
                                                             ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. - Invalid query: select *  from master_daerah as d 

		left join program as p on p.kode_daerah ilike d.id |'%'
		
		where d.kode_daerah_parent is null
ERROR - 2020-01-30 06:04:26 --> Severity: error --> Exception: Call to undefined function session() C:\xampp\htdocs\nws\application\helpers\view_helper.php 27
ERROR - 2020-01-30 06:05:20 --> Severity: Notice --> Undefined index: fokus_tahun C:\xampp\htdocs\nws\application\helpers\view_helper.php 27
ERROR - 2020-01-30 06:07:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;d.id&quot; must appear in the GROUP BY clause or be used in an aggregate function
LINE 1: select d.id,d.nama,count(DISTINCT(p.kode_program)) as jumlah...
               ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 06:07:16 --> Query error: ERROR:  column "d.id" must appear in the GROUP BY clause or be used in an aggregate function
LINE 1: select d.id,d.nama,count(DISTINCT(p.kode_program)) as jumlah...
               ^ - Invalid query: select d.id,d.nama,count(DISTINCT(p.kode_program)) as jumlah_program  from master_daerah as d 

		left join program as p on p.kode_daerah ilike d.id ||'%'
		
		where p.tahun=2020 and d.kode_daerah_parent is null
ERROR - 2020-01-30 06:07:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;d.nama&quot; must appear in the GROUP BY clause or be used in an aggregate function
LINE 1: select d.id,d.nama,count(DISTINCT(p.kode_program)) as jumlah...
                    ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 06:07:54 --> Query error: ERROR:  column "d.nama" must appear in the GROUP BY clause or be used in an aggregate function
LINE 1: select d.id,d.nama,count(DISTINCT(p.kode_program)) as jumlah...
                    ^ - Invalid query: select d.id,d.nama,count(DISTINCT(p.kode_program)) as jumlah_program  from master_daerah as d 

		left join program as p on p.kode_daerah ilike d.id ||'%'
		
		where p.tahun=2020 and d.kode_daerah_parent is null

		GROUP BY d.id
		
ERROR - 2020-01-30 06:08:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  table name &quot;p&quot; specified more than once C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 06:08:54 --> Query error: ERROR:  table name "p" specified more than once - Invalid query: select d.id,min(d.nama),count(DISTINCT(p.kode_program)) as jumlah_program  from master_daerah as d 

		left join program as p on p.kode_daerah ilike d.id ||'%' 
		left join kegiatan as p on p.kode_daerah ilike d.id ||'%' 

		
		where p.tahun=2020 and d.kode_daerah_parent is null

		GROUP BY d.id
		
ERROR - 2020-01-30 06:11:11 --> Severity: Error --> Maximum execution time of 60 seconds exceeded C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 06:11:11 --> Severity: Error --> Maximum execution time of 60 seconds exceeded C:\xampp\htdocs\nws\system\libraries\Session\drivers\Session_files_driver.php 182
ERROR - 2020-01-30 06:11:11 --> Severity: Warning --> Unknown: Cannot call session save handler in a recursive manner Unknown 0
ERROR - 2020-01-30 06:11:11 --> Severity: Warning --> Unknown: Failed to write session data using user defined save handler. (session.save_path: C:\xampp\tmp) Unknown 0
ERROR - 2020-01-30 06:11:11 --> Severity: Error --> Maximum execution time of 60 seconds exceeded C:\xampp\htdocs\nws\system\libraries\Session\drivers\Session_files_driver.php 182
ERROR - 2020-01-30 06:11:11 --> Severity: Warning --> Unknown: Cannot call session save handler in a recursive manner Unknown 0
ERROR - 2020-01-30 06:11:11 --> Severity: Warning --> Unknown: Failed to write session data using user defined save handler. (session.save_path: C:\xampp\tmp) Unknown 0
ERROR - 2020-01-30 06:11:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column p.kode_kegiatan does not exist
LINE 5:   count(DISTINCT(p.kode_kegiatan)) as jumlah_kegiatan
                         ^
HINT:  Perhaps you meant to reference the column &quot;k.kode_kegiatan&quot;. C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 06:11:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column p.kode_kegiatan does not exist
LINE 5:   count(DISTINCT(p.kode_kegiatan)) as jumlah_kegiatan
                         ^
HINT:  Perhaps you meant to reference the column &quot;k.kode_kegiatan&quot;. C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 06:11:11 --> Query error: ERROR:  column p.kode_kegiatan does not exist
LINE 5:   count(DISTINCT(p.kode_kegiatan)) as jumlah_kegiatan
                         ^
HINT:  Perhaps you meant to reference the column "k.kode_kegiatan". - Invalid query: select 
		d.id,
		min(d.nama),
		count(DISTINCT(p.kode_program)) as jumlah_program,
		count(DISTINCT(p.kode_kegiatan)) as jumlah_kegiatan
		from master_daerah as d 
		left join program as p on p.kode_daerah ilike d.id ||'%' 
		left join kegiatan as k on k.kode_daerah ilike d.id ||'%' 

		
		where p.tahun=2020 and d.kode_daerah_parent is null

		GROUP BY d.id
		
ERROR - 2020-01-30 06:11:11 --> Query error: ERROR:  column p.kode_kegiatan does not exist
LINE 5:   count(DISTINCT(p.kode_kegiatan)) as jumlah_kegiatan
                         ^
HINT:  Perhaps you meant to reference the column "k.kode_kegiatan". - Invalid query: select 
		d.id,
		min(d.nama),
		count(DISTINCT(p.kode_program)) as jumlah_program,
		count(DISTINCT(p.kode_kegiatan)) as jumlah_kegiatan
		from master_daerah as d 
		left join program as p on p.kode_daerah ilike d.id ||'%' 
		left join kegiatan as k on k.kode_daerah ilike d.id ||'%' 

		
		where p.tahun=2020 and d.kode_daerah_parent is null

		GROUP BY d.id
		
ERROR - 2020-01-30 06:11:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column p.kode_kegiatan does not exist
LINE 5:   count(DISTINCT(p.kode_kegiatan)) as jumlah_kegiatan
                         ^
HINT:  Perhaps you meant to reference the column &quot;k.kode_kegiatan&quot;. C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 06:11:16 --> Query error: ERROR:  column p.kode_kegiatan does not exist
LINE 5:   count(DISTINCT(p.kode_kegiatan)) as jumlah_kegiatan
                         ^
HINT:  Perhaps you meant to reference the column "k.kode_kegiatan". - Invalid query: select 
		d.id,
		min(d.nama),
		count(DISTINCT(p.kode_program)) as jumlah_program,
		count(DISTINCT(p.kode_kegiatan)) as jumlah_kegiatan
		from master_daerah as d 
		left join program as p on p.kode_daerah ilike d.id ||'%' 
		left join kegiatan as k on k.kode_daerah ilike d.id ||'%' 

		
		where p.tahun=2020 and k.tahun=2020 and d.kode_daerah_parent is null

		GROUP BY d.id
		
ERROR - 2020-01-30 06:14:16 --> Severity: Error --> Maximum execution time of 60 seconds exceeded C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 06:14:16 --> Severity: Error --> Maximum execution time of 60 seconds exceeded C:\xampp\htdocs\nws\system\libraries\Session\drivers\Session_files_driver.php 182
ERROR - 2020-01-30 06:14:16 --> Severity: Warning --> Unknown: Cannot call session save handler in a recursive manner Unknown 0
ERROR - 2020-01-30 06:14:16 --> Severity: Warning --> Unknown: Failed to write session data using user defined save handler. (session.save_path: C:\xampp\tmp) Unknown 0
ERROR - 2020-01-30 06:14:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;from&quot;
LINE 6:    from master_daerah as d 
           ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 06:14:37 --> Query error: ERROR:  syntax error at or near "from"
LINE 6:    from master_daerah as d 
           ^ - Invalid query: 
		select 
			d.id,
			min(d.nama),
			COUNT(DISTINCT(p.kode_program)) as jumlah_program,
			from master_daerah as d 
			left join program as p on p.kode_daerah ilike d.id ||'%' 
			
			where p.tahun=2020 and 
			d.kode_daerah_parent is null

		GROUP BY d.id
		
ERROR - 2020-01-30 06:18:07 --> Severity: Error --> Maximum execution time of 60 seconds exceeded C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 06:19:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column k.kegiatan does not exist
LINE 7:    (select count(DISTINCT(k.kegiatan)) from kegiatan  as k w...
                                  ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 06:19:24 --> Query error: ERROR:  column k.kegiatan does not exist
LINE 7:    (select count(DISTINCT(k.kegiatan)) from kegiatan  as k w...
                                  ^ - Invalid query: 
		select 
			d.id,
			min(d.nama),

			(select count(DISTINCT(p.kode_program)) from program as p where p.kode_daerah like d.id || '%') as jumlah_program,
			(select count(DISTINCT(k.kegiatan)) from kegiatan  as k where k.kode_daerah like d.id || '%') as jumlah_kegiatan

			from master_daerah as d 
			
			where  
			d.kode_daerah_parent is null

		GROUP BY d.id
		
ERROR - 2020-01-30 06:26:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;as&quot;
LINE 5: ... (u.id) and p.tahun=2020 and p.kode_daerah=('13') as jumlah_...
                                                             ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 06:26:16 --> Query error: ERROR:  syntax error at or near "as"
LINE 5: ... (u.id) and p.tahun=2020 and p.kode_daerah=('13') as jumlah_...
                                                             ^ - Invalid query: 
		select 
			u.id,
			min(u.nama),
			(select count(DISTINCT(p.kode_program)) from program as p where p.id_urusan = (u.id) and p.tahun=2020 and p.kode_daerah=('13') as jumlah_program,
			(select count(DISTINCT(k.kode_kegiatan)) from kegiatan  as k where k.id_urusan = (u.id) and k.tahun=2020 and k.kode_daerah=('13')) as jumlah_kegiatan
			from master_urusan as d 
			

		GROUP BY u.id
		
ERROR - 2020-01-30 06:26:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;as&quot;
LINE 5: ... (u.id) and p.tahun=2020 and p.kode_daerah=('13') as jumlah_...
                                                             ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 06:26:23 --> Query error: ERROR:  syntax error at or near "as"
LINE 5: ... (u.id) and p.tahun=2020 and p.kode_daerah=('13') as jumlah_...
                                                             ^ - Invalid query: 
		select 
			u.id,
			min(u.nama),
			(select count(DISTINCT(p.kode_program)) from program as p where p.id_urusan = (u.id) and p.tahun=2020 and p.kode_daerah=('13') as jumlah_program,
			(select count(DISTINCT(k.kode_kegiatan)) from kegiatan  as k where k.id_urusan = (u.id) and k.tahun=2020 and k.kode_daerah=('13')) as jumlah_kegiatan
			from master_urusan as u
			

		GROUP BY u.id
		
ERROR - 2020-01-30 06:27:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;as&quot;
LINE 5: ... (u.id) and p.tahun=2020 and p.kode_daerah=('13') as jumlah_...
                                                             ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 06:27:06 --> Query error: ERROR:  syntax error at or near "as"
LINE 5: ... (u.id) and p.tahun=2020 and p.kode_daerah=('13') as jumlah_...
                                                             ^ - Invalid query: 
		select 
			u.id,
			min(u.nama),
			(select count(DISTINCT(p.kode_program)) from program as p where p.id_urusan = (u.id) and p.tahun=2020 and p.kode_daerah=('13') as jumlah_program,
			(select count(DISTINCT(k.kode_kegiatan)) from kegiatan  as k where k.id_urusan = (u.id) and k.tahun=2020 and k.kode_daerah=('13')) as jumlah_kegiatan
			from master_urusan as u
			

		GROUP BY u.id
		
ERROR - 2020-01-30 06:29:03 --> Severity: error --> Exception: syntax error, unexpected '$daerah' (T_VARIABLE) C:\xampp\htdocs\nws\application\controllers\Program-kegiatan\Data.php 44
ERROR - 2020-01-30 06:29:08 --> Severity: error --> Exception: syntax error, unexpected '$daerah' (T_VARIABLE) C:\xampp\htdocs\nws\application\controllers\Program-kegiatan\Data.php 44
ERROR - 2020-01-30 06:29:25 --> Severity: error --> Exception: syntax error, unexpected '$daerah' (T_VARIABLE) C:\xampp\htdocs\nws\application\controllers\Program-kegiatan\Data.php 44
ERROR - 2020-01-30 06:29:50 --> Severity: error --> Exception: syntax error, unexpected '$daerah' (T_VARIABLE) C:\xampp\htdocs\nws\application\controllers\Program-kegiatan\Data.php 44
ERROR - 2020-01-30 06:29:58 --> Severity: error --> Exception: syntax error, unexpected '$daerah' (T_VARIABLE) C:\xampp\htdocs\nws\application\controllers\Program-kegiatan\Data.php 44
ERROR - 2020-01-30 06:33:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;k&quot;
LINE 5: ...as p where p.id_urusan = (4) and p.tahun=2020 and k.id_sub_u...
                                                             ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 06:33:28 --> Query error: ERROR:  missing FROM-clause entry for table "k"
LINE 5: ...as p where p.id_urusan = (4) and p.tahun=2020 and k.id_sub_u...
                                                             ^ - Invalid query: 
		select 
			su.id,
			min(su.nama),
			(select count(DISTINCT(p.kode_program)) from program as p where p.id_urusan = (4) and p.tahun=2020 and k.id_sub_urusan=su.id and p.kode_daerah=('13')) as jumlah_program,
			(select count(DISTINCT(k.kode_kegiatan)) from kegiatan  as k where k.id_urusan = (4) and k.id_sub_urusan=su.id and k.tahun=2020 and k.kode_daerah=('13')) as jumlah_kegiatan
			from master_sub_urusan as su
			

		GROUP BY u.id
		
ERROR - 2020-01-30 06:33:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;u&quot;
LINE 10:   GROUP BY u.id
                    ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 06:33:53 --> Query error: ERROR:  missing FROM-clause entry for table "u"
LINE 10:   GROUP BY u.id
                    ^ - Invalid query: 
		select 
			su.id,
			min(su.nama),
			(select count(DISTINCT(p.kode_program)) from program as p where p.id_urusan = (4) and p.tahun=2020 and p.id_sub_urusan=su.id and p.kode_daerah=('13')) as jumlah_program,
			(select count(DISTINCT(k.kode_kegiatan)) from kegiatan  as k where k.id_urusan = (4) and k.id_sub_urusan=su.id and k.tahun=2020 and k.kode_daerah=('13')) as jumlah_kegiatan
			from master_sub_urusan as su
			

		GROUP BY u.id
		
ERROR - 2020-01-30 06:46:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: character varying = integer
LINE 1: select nama from master_daerah where id=13
                                               ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 06:46:45 --> Query error: ERROR:  operator does not exist: character varying = integer
LINE 1: select nama from master_daerah where id=13
                                               ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. - Invalid query: select nama from master_daerah where id=13
ERROR - 2020-01-30 06:46:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: character varying = integer
LINE 1: select nama from master_daerah where id=13
                                               ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 06:46:50 --> Query error: ERROR:  operator does not exist: character varying = integer
LINE 1: select nama from master_daerah where id=13
                                               ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. - Invalid query: select nama from master_daerah where id=13
ERROR - 2020-01-30 06:47:25 --> Severity: Notice --> Undefined index: nam C:\xampp\htdocs\nws\application\controllers\Program-kegiatan\Data.php 40
ERROR - 2020-01-30 06:51:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;nama&quot;
LINE 1: select CONCAT('Perurusan ,'nama) from master_daerah where id...
                                   ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 06:51:07 --> Query error: ERROR:  syntax error at or near "nama"
LINE 1: select CONCAT('Perurusan ,'nama) from master_daerah where id...
                                   ^ - Invalid query: select CONCAT('Perurusan ,'nama) from master_daerah where id='13'
ERROR - 2020-01-30 06:51:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;nama&quot;
LINE 1: select CONCATE('Perurusan ,'nama) from master_daerah where i...
                                    ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 06:51:37 --> Query error: ERROR:  syntax error at or near "nama"
LINE 1: select CONCATE('Perurusan ,'nama) from master_daerah where i...
                                    ^ - Invalid query: select CONCATE('Perurusan ,'nama) from master_daerah where id='13'
ERROR - 2020-01-30 06:51:51 --> Severity: Notice --> Undefined index: nama C:\xampp\htdocs\nws\application\controllers\Program-kegiatan\Data.php 73
ERROR - 2020-01-30 06:57:39 --> Severity: error --> Exception: syntax error, unexpected '"' C:\xampp\htdocs\nws\application\controllers\Program-kegiatan\Data.php 81
ERROR - 2020-01-30 06:57:43 --> Severity: error --> Exception: syntax error, unexpected '"' C:\xampp\htdocs\nws\application\controllers\Program-kegiatan\Data.php 81
ERROR - 2020-01-30 06:57:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: ` unknown
LINE 3:    CONCAT('{kode_daerah:',`'1508'`) as selected,
                                  ^
HINT:  No operator matches the given name and argument type. You might need to add an explicit type cast. C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 06:57:50 --> Query error: ERROR:  operator does not exist: ` unknown
LINE 3:    CONCAT('{kode_daerah:',`'1508'`) as selected,
                                  ^
HINT:  No operator matches the given name and argument type. You might need to add an explicit type cast. - Invalid query: 
		select 
			CONCAT('{kode_daerah:',`'1508'`) as selected,
			u.id,
			min(u.nama) as nama,
			(select count(DISTINCT(p.kode_program)) from program as p where p.id_urusan = (u.id) and p.tahun=2020 and p.kode_daerah=('1508')) as jumlah_program,
			(select count(DISTINCT(k.kode_kegiatan)) from kegiatan  as k where k.id_urusan = (u.id) and k.tahun=2020 and k.kode_daerah=('1508')) as jumlah_kegiatan
			from master_urusan as u
			

		GROUP BY u.id
		
ERROR - 2020-01-30 07:00:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;:&quot;
LINE 3:    CONCAT('{`kode_daerah`:','`1508`',`id_urusan:`,u.id,'}') ...
                                                       ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 07:00:59 --> Query error: ERROR:  syntax error at or near ":"
LINE 3:    CONCAT('{`kode_daerah`:','`1508`',`id_urusan:`,u.id,'}') ...
                                                       ^ - Invalid query: 
		select 
			CONCAT('{`kode_daerah`:','`1508`',`id_urusan:`,u.id,'}') as selected,
			u.id,
			min(u.nama) as nama,
			(select count(DISTINCT(p.kode_program)) from program as p where p.id_urusan = (u.id) and p.tahun=2020 and p.kode_daerah=('1508')) as jumlah_program,
			(select count(DISTINCT(k.kode_kegiatan)) from kegiatan  as k where k.id_urusan = (u.id) and k.tahun=2020 and k.kode_daerah=('1508')) as jumlah_kegiatan
			from master_urusan as u
			

		GROUP BY u.id
		
ERROR - 2020-01-30 07:01:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;:&quot;
LINE 3:    CONCAT('{`kode_daerah`:','`1508`,',`id_urusan:`,u.id,'}')...
                                                        ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 07:01:25 --> Query error: ERROR:  syntax error at or near ":"
LINE 3:    CONCAT('{`kode_daerah`:','`1508`,',`id_urusan:`,u.id,'}')...
                                                        ^ - Invalid query: 
		select 
			CONCAT('{`kode_daerah`:','`1508`,',`id_urusan:`,u.id,'}') as selected,
			u.id,
			min(u.nama) as nama,
			(select count(DISTINCT(p.kode_program)) from program as p where p.id_urusan = (u.id) and p.tahun=2020 and p.kode_daerah=('1508')) as jumlah_program,
			(select count(DISTINCT(k.kode_kegiatan)) from kegiatan  as k where k.id_urusan = (u.id) and k.tahun=2020 and k.kode_daerah=('1508')) as jumlah_kegiatan
			from master_urusan as u
			

		GROUP BY u.id
		
ERROR - 2020-01-30 07:22:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;u&quot;
LINE 5: ...s/program-kegiatan/per-daerah/data/detail/','13/',u.id) as l...
                                                             ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 07:22:19 --> Query error: ERROR:  missing FROM-clause entry for table "u"
LINE 5: ...s/program-kegiatan/per-daerah/data/detail/','13/',u.id) as l...
                                                             ^ - Invalid query: 
		select 
			su.id,
			CONCAT('{kode_daerah:','13,','id_urusan:','4','id_sub_urusan',su.id,'}') as selected,
			CONCAT('http://localhost/nws/program-kegiatan/per-daerah/data/detail/','13/',u.id) as link,
			min(su.nama) as nama,
			(select count(DISTINCT(p.kode_program)) from program as p where p.id_urusan = (4) and p.tahun=2020 and p.id_sub_urusan=su.id and p.kode_daerah=('13')) as jumlah_program,
			(select count(DISTINCT(k.kode_kegiatan)) from kegiatan  as k where k.id_urusan = (4) and k.id_sub_urusan=su.id and k.tahun=2020 and k.kode_daerah=('13')) as jumlah_kegiatan
			from master_sub_urusan as su
			
			where su.id_urusan = 4

		GROUP BY su.id
		
ERROR - 2020-01-30 07:32:16 --> Severity: error --> Exception: View [helper.map] not found. C:\xampp\htdocs\nws\vendor\illuminate\view\FileViewFinder.php 137
ERROR - 2020-01-30 07:32:37 --> Severity: error --> Exception: View [helper.map] not found. C:\xampp\htdocs\nws\vendor\illuminate\view\FileViewFinder.php 137
ERROR - 2020-01-30 07:33:36 --> Severity: error --> Exception: View [compont.map] not found. C:\xampp\htdocs\nws\vendor\illuminate\view\FileViewFinder.php 137
ERROR - 2020-01-30 07:35:30 --> Severity: error --> Exception: View [pages.map] not found. C:\xampp\htdocs\nws\vendor\illuminate\view\FileViewFinder.php 137
ERROR - 2020-01-30 07:35:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;provinsi&quot; does not exist
LINE 12: ...unt(a.kode_kegiatan) as data_jumlah_kegiatan from provinsi a...
                                                              ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 07:35:40 --> Query error: ERROR:  relation "provinsi" does not exist
LINE 12: ...unt(a.kode_kegiatan) as data_jumlah_kegiatan from provinsi a...
                                                              ^ - Invalid query: select p.id_provinsi as key,p.nama as key_name,
      CONCAT('[[',
        '`a.kode_daerah`',
        ',',
        '` ilike `',
        ',','`',
        p.id_provinsi,
        '%`',
        ',',
        '`string`]]'
        ) as where_add,
      count(DISTINCT(a.kode_program)) as data_jumlah_program,count(a.kode_kegiatan) as data_jumlah_kegiatan from provinsi as p
       join program_kegiatan_sipd2 as a on a.kode_daerah ILIKE p.id_provinsi || '%'  where  a.tag_air_minum  =  true
      group by p.id_provinsi order by count(a.kode_kegiatan) desc
    
ERROR - 2020-01-30 07:35:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;program_kegiatan_sipd2&quot; does not exist
LINE 15:       join program_kegiatan_sipd2 as  a on a.id_urusan = p.i...
                    ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 07:35:40 --> Query error: ERROR:  relation "program_kegiatan_sipd2" does not exist
LINE 15:       join program_kegiatan_sipd2 as  a on a.id_urusan = p.i...
                    ^ - Invalid query: 
      select p.id as key, p.nama as key_name,
       CONCAT('[[',
        '`a.id_urusan`',
        ',',
        '` =`',
        ',','`',
        p.id,
        '`',
        ',',
        '`numberic`]]'
        ) as where_add,
      count(DISTINCT(a.kode_program)) as data_jumlah_program,count(a.kode_kegiatan) as data_jumlah_kegiatan
      from master_urusan as p
      join program_kegiatan_sipd2 as  a on a.id_urusan = p.id 
       where  a.kode_kegiatan  is not  null and  a.tag_air_minum  =  true 
      group by p.id  order by count(a.kode_kegiatan) desc

    
ERROR - 2020-01-30 08:50:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;program_kegiatan_sipd2&quot; does not exist
LINE 1: ...h_kegiatan, sum(anggaran) as jumlah_anggaran from program_ke...
                                                             ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 08:50:21 --> Query error: ERROR:  relation "program_kegiatan_sipd2" does not exist
LINE 1: ...h_kegiatan, sum(anggaran) as jumlah_anggaran from program_ke...
                                                             ^ - Invalid query: select count(*) jumlah_kegiatan, sum(anggaran) as jumlah_anggaran from program_kegiatan_sipd2 where tag_air_minum = true and  tahun=2020
ERROR - 2020-01-30 09:16:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;)&quot;
LINE 2: ...umlah_kegiatan from kegiatan k  where k.tahun=2020) as jumla...
                                                             ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 09:16:22 --> Query error: ERROR:  syntax error at or near ")"
LINE 2: ...umlah_kegiatan from kegiatan k  where k.tahun=2020) as jumla...
                                                             ^ - Invalid query: select count(DISTICT(p.kode_program)) as jumlah_program ,
		(select count(DISTICT(k.kode_kegiatan))) as jumlah_kegiatan from kegiatan k  where k.tahun=2020) as jumlah_kegiatan
		from program where p.tahun=2020
ERROR - 2020-01-30 09:16:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;)&quot;
LINE 2: ...mlah_kegiatan from kegiatan k  where k.tahun=2020 ) as jumla...
                                                             ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 09:16:48 --> Query error: ERROR:  syntax error at or near ")"
LINE 2: ...mlah_kegiatan from kegiatan k  where k.tahun=2020 ) as jumla...
                                                             ^ - Invalid query: select count(DISTICT(p.kode_program)) as jumlah_program ,
		(select count(DISTICT(k.kode_kegiatan))) as jumlah_kegiatan from kegiatan k  where k.tahun=2020 ) as jumlah_kegiatan
		from program where p.tahun=2020
ERROR - 2020-01-30 09:17:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;)&quot;
LINE 5:    where k.tahun=2020 ) as jumlah_kegiatan
                              ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 09:17:17 --> Query error: ERROR:  syntax error at or near ")"
LINE 5:    where k.tahun=2020 ) as jumlah_kegiatan
                              ^ - Invalid query: select count(DISTICT(p.kode_program)) as jumlah_program ,

		(select count(DISTICT(k.kode_kegiatan))) as jumlah_kegiatan 
			from kegiatan as k   
			where k.tahun=2020 ) as jumlah_kegiatan
		from program as p where p.tahun=2020
ERROR - 2020-01-30 09:18:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;)&quot;
LINE 6:    where k.tahun=2020 )
                              ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 09:18:28 --> Query error: ERROR:  syntax error at or near ")"
LINE 6:    where k.tahun=2020 )
                              ^ - Invalid query: select count(DISTICT(p.kode_program)) as jumlah_program ,

		(	select 
			count(DISTICT(k.kode_kegiatan))) as jumlah_kegiatan 
			from kegiatan as k   
			where k.tahun=2020 )

		from program as p where p.tahun=2020
ERROR - 2020-01-30 09:18:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;)&quot;
LINE 6:    where k.tahun=2020 )
                              ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 09:18:44 --> Query error: ERROR:  syntax error at or near ")"
LINE 6:    where k.tahun=2020 )
                              ^ - Invalid query: select count(DISTICT(p.kode_program)) as jumlah_program ,

		(	select 
			count(DISTICT(k.kode_kegiatan))) as jumlah_kegiatan 
			from kegiatan as k   
			where k.tahun=2020 )

			 as jumlah_kegiatan

		from program as p where p.tahun=2020
ERROR - 2020-01-30 09:18:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function distict(character varying) does not exist
LINE 1: select count(DISTICT(p.kode_program)) as jumlah_program ,
                     ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts. C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 09:18:54 --> Query error: ERROR:  function distict(character varying) does not exist
LINE 1: select count(DISTICT(p.kode_program)) as jumlah_program ,
                     ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts. - Invalid query: select count(DISTICT(p.kode_program)) as jumlah_program ,

		(	select 
			count(DISTICT(k.kode_kegiatan)) as jumlah_kegiatan 
			from kegiatan as k   
			where k.tahun=2020 )

			 as jumlah_kegiatan

		from program as p where p.tahun=2020
ERROR - 2020-01-30 09:21:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;)&quot;
LINE 1: ...ect SUM(CASE WHEN k.id_kp is not null THEN 1 ELSE 0) as PN ,
                                                              ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 09:21:41 --> Query error: ERROR:  syntax error at or near ")"
LINE 1: ...ect SUM(CASE WHEN k.id_kp is not null THEN 1 ELSE 0) as PN ,
                                                              ^ - Invalid query: select SUM(CASE WHEN k.id_kp is not null THEN 1 ELSE 0) as PN ,
		from kegiatan as k where k.tahun=2020
ERROR - 2020-01-30 09:22:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;from&quot;
LINE 2:   from kegiatan as k where k.tahun=2020
          ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 09:22:16 --> Query error: ERROR:  syntax error at or near "from"
LINE 2:   from kegiatan as k where k.tahun=2020
          ^ - Invalid query: select SUM(CASE WHEN k.id_kp is not null THEN 1 ELSE 0 END ) as PN ,
		from kegiatan as k where k.tahun=2020
ERROR - 2020-01-30 09:35:42 --> Severity: Notice --> Undefined variable: pie C:\xampp\htdocs\nws\application\views\cahce\75fcc097202dfb7433ad23dd40e3af178fdc073c.php 162
ERROR - 2020-01-30 09:35:42 --> Severity: Notice --> Undefined variable: pie C:\xampp\htdocs\nws\application\views\cahce\75fcc097202dfb7433ad23dd40e3af178fdc073c.php 163
ERROR - 2020-01-30 10:55:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;k&quot;
LINE 6:   from kegiatan as k where k.tahun=2020 k.kode_daerah and li...
                                                ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 10:55:39 --> Query error: ERROR:  syntax error at or near "k"
LINE 6:   from kegiatan as k where k.tahun=2020 k.kode_daerah and li...
                                                ^ - Invalid query: select 
		SUM(CASE WHEN k.id_kp is not null THEN 1 ELSE 0 END ) as PN,
		SUM(CASE WHEN k.id_nspk is not null THEN 1 ELSE 0 END ) as NSPK,
		SUM(CASE WHEN k.id_sdgs is not null THEN 1 ELSE 0 END ) as SDGS,
		SUM(CASE WHEN k.id_spm is not null THEN 1 ELSE 0 END ) as SPM 
		from kegiatan as k where k.tahun=2020 k.kode_daerah and like '35' || '%'
ERROR - 2020-01-30 10:55:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;k&quot;
LINE 6:   from kegiatan as k where k.tahun=2020 k.kode_daerah and li...
                                                ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 10:55:41 --> Query error: ERROR:  syntax error at or near "k"
LINE 6:   from kegiatan as k where k.tahun=2020 k.kode_daerah and li...
                                                ^ - Invalid query: select 
		SUM(CASE WHEN k.id_kp is not null THEN 1 ELSE 0 END ) as PN,
		SUM(CASE WHEN k.id_nspk is not null THEN 1 ELSE 0 END ) as NSPK,
		SUM(CASE WHEN k.id_sdgs is not null THEN 1 ELSE 0 END ) as SDGS,
		SUM(CASE WHEN k.id_spm is not null THEN 1 ELSE 0 END ) as SPM 
		from kegiatan as k where k.tahun=2020 k.kode_daerah and like '35' || '%'
ERROR - 2020-01-30 10:55:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;k&quot;
LINE 6:   from kegiatan as k where k.tahun=2020 k.kode_daerah and li...
                                                ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 10:55:58 --> Query error: ERROR:  syntax error at or near "k"
LINE 6:   from kegiatan as k where k.tahun=2020 k.kode_daerah and li...
                                                ^ - Invalid query: select 
		SUM(CASE WHEN k.id_kp is not null THEN 1 ELSE 0 END ) as PN,
		SUM(CASE WHEN k.id_nspk is not null THEN 1 ELSE 0 END ) as NSPK,
		SUM(CASE WHEN k.id_sdgs is not null THEN 1 ELSE 0 END ) as SDGS,
		SUM(CASE WHEN k.id_spm is not null THEN 1 ELSE 0 END ) as SPM 
		from kegiatan as k where k.tahun=2020 k.kode_daerah and like '12' || '%'
ERROR - 2020-01-30 10:56:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  argument of AND must be type boolean, not type character varying
LINE 6:   from kegiatan as k where k.tahun=2020 and k.kode_daerah an...
                                                    ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 10:56:47 --> Query error: ERROR:  argument of AND must be type boolean, not type character varying
LINE 6:   from kegiatan as k where k.tahun=2020 and k.kode_daerah an...
                                                    ^ - Invalid query: select 
		SUM(CASE WHEN k.id_kp is not null THEN 1 ELSE 0 END ) as PN,
		SUM(CASE WHEN k.id_nspk is not null THEN 1 ELSE 0 END ) as NSPK,
		SUM(CASE WHEN k.id_sdgs is not null THEN 1 ELSE 0 END ) as SDGS,
		SUM(CASE WHEN k.id_spm is not null THEN 1 ELSE 0 END ) as SPM 
		from kegiatan as k where k.tahun=2020 and k.kode_daerah and like '62' || '%'
ERROR - 2020-01-30 11:12:21 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\nws\application\controllers\Program-kegiatan\Per-daerah\Data.php 18
ERROR - 2020-01-30 11:16:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;and&quot;
LINE 1: and k.id_sub_urusan=''
        ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 11:16:25 --> Query error: ERROR:  syntax error at or near "and"
LINE 1: and k.id_sub_urusan=''
        ^ - Invalid query: and k.id_sub_urusan=''
ERROR - 2020-01-30 11:16:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;and&quot;
LINE 1:  and k.id_sub_urusan=''
         ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 11:16:34 --> Query error: ERROR:  syntax error at or near "and"
LINE 1:  and k.id_sub_urusan=''
         ^ - Invalid query:  and k.id_sub_urusan=''
ERROR - 2020-01-30 11:16:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;and&quot;
LINE 1:  and k.id_sub_urusan=
         ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 11:16:50 --> Query error: ERROR:  syntax error at or near "and"
LINE 1:  and k.id_sub_urusan=
         ^ - Invalid query:  and k.id_sub_urusan=
ERROR - 2020-01-30 11:20:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column p.nama does not exist
LINE 4:    CONCAT(p.kode_program,'|*|',p.nama)
                                       ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 11:20:46 --> Query error: ERROR:  column p.nama does not exist
LINE 4:    CONCAT(p.kode_program,'|*|',p.nama)
                                       ^ - Invalid query: 
		select *,
		(select 
			CONCAT(p.kode_program,'|*|',p.nama)
			from program as p where  p.kode_program = k.kode_program and p.kode_daerah=k.kode_daerah) from kegiatan as k

		where k.kode_daerah='3327'
ERROR - 2020-01-30 11:22:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;(&quot;
LINE 6:   (select 
          ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 11:22:43 --> Query error: ERROR:  syntax error at or near "("
LINE 6:   (select 
          ^ - Invalid query: 
		select *,
		(select 
			CONCAT(p.uraian)
			from program as p where  p.kode_program = k.kode_program and p.kode_daerah=k.kode_daerah and p.tahun=k.tahun) as program
		(select 
			CONCAT(d.nama)
			from master_daerah as d where d.kode_daerah=k.kode_daerah) as daerah

		from kegiatan as k

		where k.kode_daerah='3327'
ERROR - 2020-01-30 11:22:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;(&quot;
LINE 6:   (select 
          ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 11:22:57 --> Query error: ERROR:  syntax error at or near "("
LINE 6:   (select 
          ^ - Invalid query: 
		select *,
		(select 
			CONCAT(p.uraian)
			from program as p where  p.kode_program = k.kode_program and p.kode_daerah=k.kode_daerah and p.tahun=k.tahun) as program
		(select 
			CONCAT(d.nama)
			from master_daerah as d where d.id=k.kode_daerah) as daerah

		from kegiatan as k

		where k.kode_daerah='3327'
ERROR - 2020-01-30 11:46:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;master_daerah&quot; does not exist
LINE 1: select CONCAT('PERURUSAN ',nama) as nama from master_daerah ...
                                                      ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 11:46:25 --> Query error: ERROR:  relation "master_daerah" does not exist
LINE 1: select CONCAT('PERURUSAN ',nama) as nama from master_daerah ...
                                                      ^ - Invalid query: select CONCAT('PERURUSAN ',nama) as nama from master_daerah where id='13'
ERROR - 2020-01-30 11:46:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;program&quot; does not exist
LINE 10:   from program as p where p.tahun=2020
                ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 11:46:29 --> Query error: ERROR:  relation "program" does not exist
LINE 10:   from program as p where p.tahun=2020
                ^ - Invalid query: select count(DISTINCT(p.kode_program)) as jumlah_program ,

		(	select 
			count(DISTINCT(CONCAT(k.kode_daerah,k.kode_kegiatan))) as jumlah_kegiatan 
			from kegiatan as k   
			where k.tahun=2020 )

			 as jumlah_kegiatan

		from program as p where p.tahun=2020
ERROR - 2020-01-30 11:46:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;program&quot; does not exist
LINE 10:   from program as p where p.tahun=2020
                ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 11:46:41 --> Query error: ERROR:  relation "program" does not exist
LINE 10:   from program as p where p.tahun=2020
                ^ - Invalid query: select count(DISTINCT(p.kode_program)) as jumlah_program ,

		(	select 
			count(DISTINCT(CONCAT(k.kode_daerah,k.kode_kegiatan))) as jumlah_kegiatan 
			from kegiatan as k   
			where k.tahun=2020 )

			 as jumlah_kegiatan

		from program as p where p.tahun=2020
ERROR - 2020-01-30 11:47:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;program&quot; does not exist
LINE 10:   from program as p where p.tahun=2020
                ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 11:47:05 --> Query error: ERROR:  relation "program" does not exist
LINE 10:   from program as p where p.tahun=2020
                ^ - Invalid query: select count(DISTINCT(p.kode_program)) as jumlah_program ,

		(	select 
			count(DISTINCT(CONCAT(k.kode_daerah,k.kode_kegiatan))) as jumlah_kegiatan 
			from kegiatan as k   
			where k.tahun=2020 )

			 as jumlah_kegiatan

		from program as p where p.tahun=2020
ERROR - 2020-01-30 11:47:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;program&quot; does not exist
LINE 10:   from program as p where p.tahun=2020
                ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 11:47:11 --> Query error: ERROR:  relation "program" does not exist
LINE 10:   from program as p where p.tahun=2020
                ^ - Invalid query: select count(DISTINCT(p.kode_program)) as jumlah_program ,

		(	select 
			count(DISTINCT(CONCAT(k.kode_daerah,k.kode_kegiatan))) as jumlah_kegiatan 
			from kegiatan as k   
			where k.tahun=2020 )

			 as jumlah_kegiatan

		from program as p where p.tahun=2020
ERROR - 2020-01-30 11:47:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;program&quot; does not exist
LINE 10:   from program as p where p.tahun=2020
                ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 11:47:20 --> Query error: ERROR:  relation "program" does not exist
LINE 10:   from program as p where p.tahun=2020
                ^ - Invalid query: select count(DISTINCT(p.kode_program)) as jumlah_program ,

		(	select 
			count(DISTINCT(CONCAT(k.kode_daerah,k.kode_kegiatan))) as jumlah_kegiatan 
			from kegiatan as k   
			where k.tahun=2020 )

			 as jumlah_kegiatan

		from program as p where p.tahun=2020
ERROR - 2020-01-30 12:10:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;master_daerah&quot; does not exist
LINE 8:    from master_daerah as d where d.id=k.kode_daerah) as daer...
                ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 12:10:15 --> Query error: ERROR:  relation "master_daerah" does not exist
LINE 8:    from master_daerah as d where d.id=k.kode_daerah) as daer...
                ^ - Invalid query: 
		select *,
		(select 
			CONCAT(p.uraian)
			from program as p where  p.kode_program = k.kode_program and p.kode_daerah=k.kode_daerah and p.tahun=k.tahun) as program,
		(select 
			CONCAT(d.nama)
			from master_daerah as d where d.id=k.kode_daerah) as daerah,
		(select 
			CONCAT(u.nama)
			from master_urusan as u where u.id=k.id_urusan) as urusan,
		(select 
			CONCAT(su.nama)
			from master_sub_urusan as su where su.id=k.id_sub_urusan) as suburusan

		from kegiatan as k

		where k.kode_daerah='3514' and k.id_urusan=1 ORDER BY k.kode_daerah,k.id_urusan,id_sub_urusan
ERROR - 2020-01-30 12:13:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;kegiatan&quot; does not exist
LINE 16:   from kegiatan as k
                ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 12:13:26 --> Query error: ERROR:  relation "kegiatan" does not exist
LINE 16:   from kegiatan as k
                ^ - Invalid query: 
		select *,
		(select 
			CONCAT(p.uraian)
			from program as p where  p.kode_program = k.kode_program and p.kode_daerah=k.kode_daerah and p.tahun=k.tahun) as program,
		(select 
			CONCAT(d.nama)
			from master_daerah as d where d.id=k.kode_daerah) as daerah,
		(select 
			CONCAT(u.nama)
			from master_urusan as u where u.id=k.id_urusan) as urusan,
		(select 
			CONCAT(su.nama)
			from master_sub_urusan as su where su.id=k.id_sub_urusan) as suburusan

		from kegiatan as k

		where k.kode_daerah='3514' and k.id_urusan=1 ORDER BY k.kode_daerah,k.id_urusan,id_sub_urusan
ERROR - 2020-01-30 12:23:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;program_kegiatan_sipd2&quot; does not exist
LINE 1: ...h_kegiatan, sum(anggaran) as jumlah_anggaran from program_ke...
                                                             ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 12:23:29 --> Query error: ERROR:  relation "program_kegiatan_sipd2" does not exist
LINE 1: ...h_kegiatan, sum(anggaran) as jumlah_anggaran from program_ke...
                                                             ^ - Invalid query: select count(*) jumlah_kegiatan, sum(anggaran) as jumlah_anggaran from program_kegiatan_sipd2 where tag_air_minum = true and  tahun=2020
ERROR - 2020-01-30 12:23:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;provinsi&quot; does not exist
LINE 12: ...unt(a.kode_kegiatan) as data_jumlah_kegiatan from provinsi a...
                                                              ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 12:23:36 --> Query error: ERROR:  relation "provinsi" does not exist
LINE 12: ...unt(a.kode_kegiatan) as data_jumlah_kegiatan from provinsi a...
                                                              ^ - Invalid query: select p.id_provinsi as key,p.nama as key_name,
      CONCAT('[[',
        '`a.kode_daerah`',
        ',',
        '` ilike `',
        ',','`',
        p.id_provinsi,
        '%`',
        ',',
        '`string`]]'
        ) as where_add,
      count(DISTINCT(a.kode_program)) as data_jumlah_program,count(a.kode_kegiatan) as data_jumlah_kegiatan from provinsi as p
       join program_kegiatan_sipd2 as a on a.kode_daerah ILIKE p.id_provinsi || '%'  where  a.tag_air_minum  =  true
      group by p.id_provinsi order by count(a.kode_kegiatan) desc
    
ERROR - 2020-01-30 12:23:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;program_kegiatan_sipd2&quot; does not exist
LINE 15:       join program_kegiatan_sipd2 as  a on a.id_urusan = p.i...
                    ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 12:23:36 --> Query error: ERROR:  relation "program_kegiatan_sipd2" does not exist
LINE 15:       join program_kegiatan_sipd2 as  a on a.id_urusan = p.i...
                    ^ - Invalid query: 
      select p.id as key, p.nama as key_name,
       CONCAT('[[',
        '`a.id_urusan`',
        ',',
        '` =`',
        ',','`',
        p.id,
        '`',
        ',',
        '`numberic`]]'
        ) as where_add,
      count(DISTINCT(a.kode_program)) as data_jumlah_program,count(a.kode_kegiatan) as data_jumlah_kegiatan
      from master_urusan as p
      join program_kegiatan_sipd2 as  a on a.id_urusan = p.id 
       where  a.kode_kegiatan  is not  null and  a.tag_air_minum  =  true 
      group by p.id  order by count(a.kode_kegiatan) desc

    
ERROR - 2020-01-30 12:23:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;program_kegiatan_sipd2&quot; does not exist
LINE 15:       join program_kegiatan_sipd2 as  a on a.id_urusan = p.i...
                    ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 12:23:40 --> Query error: ERROR:  relation "program_kegiatan_sipd2" does not exist
LINE 15:       join program_kegiatan_sipd2 as  a on a.id_urusan = p.i...
                    ^ - Invalid query: 
      select p.id as key, p.nama as key_name,
       CONCAT('[[',
        '`a.id_urusan`',
        ',',
        '` =`',
        ',','`',
        p.id,
        '`',
        ',',
        '`numberic`]]'
        ) as where_add,
      count(DISTINCT(a.kode_program)) as data_jumlah_program,count(a.kode_kegiatan) as data_jumlah_kegiatan
      from master_urusan as p
      join program_kegiatan_sipd2 as  a on a.id_urusan = p.id 
       where  a.kode_kegiatan  is not  null and  a.tag_air_minum  =  true 
      group by p.id  order by count(a.kode_kegiatan) desc

    
ERROR - 2020-01-30 12:23:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;provinsi&quot; does not exist
LINE 12: ...unt(a.kode_kegiatan) as data_jumlah_kegiatan from provinsi a...
                                                              ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 12:23:40 --> Query error: ERROR:  relation "provinsi" does not exist
LINE 12: ...unt(a.kode_kegiatan) as data_jumlah_kegiatan from provinsi a...
                                                              ^ - Invalid query: select p.id_provinsi as key,p.nama as key_name,
      CONCAT('[[',
        '`a.kode_daerah`',
        ',',
        '` ilike `',
        ',','`',
        p.id_provinsi,
        '%`',
        ',',
        '`string`]]'
        ) as where_add,
      count(DISTINCT(a.kode_program)) as data_jumlah_program,count(a.kode_kegiatan) as data_jumlah_kegiatan from provinsi as p
       join program_kegiatan_sipd2 as a on a.kode_daerah ILIKE p.id_provinsi || '%'  where  a.tag_air_minum  =  true
      group by p.id_provinsi order by count(a.kode_kegiatan) desc
    
ERROR - 2020-01-30 12:23:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;program_kegiatan_sipd2&quot; does not exist
LINE 1: ...h_kegiatan, sum(anggaran) as jumlah_anggaran from program_ke...
                                                             ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 12:23:41 --> Query error: ERROR:  relation "program_kegiatan_sipd2" does not exist
LINE 1: ...h_kegiatan, sum(anggaran) as jumlah_anggaran from program_ke...
                                                             ^ - Invalid query: select count(*) jumlah_kegiatan, sum(anggaran) as jumlah_anggaran from program_kegiatan_sipd2 where tag_air_minum = true and  tahun=2020
ERROR - 2020-01-30 12:23:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;program_kegiatan_sipd2&quot; does not exist
LINE 15:       join program_kegiatan_sipd2 as  a on a.id_urusan = p.i...
                    ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 12:23:44 --> Query error: ERROR:  relation "program_kegiatan_sipd2" does not exist
LINE 15:       join program_kegiatan_sipd2 as  a on a.id_urusan = p.i...
                    ^ - Invalid query: 
      select p.id as key, p.nama as key_name,
       CONCAT('[[',
        '`a.id_urusan`',
        ',',
        '` =`',
        ',','`',
        p.id,
        '`',
        ',',
        '`numberic`]]'
        ) as where_add,
      count(DISTINCT(a.kode_program)) as data_jumlah_program,count(a.kode_kegiatan) as data_jumlah_kegiatan
      from master_urusan as p
      join program_kegiatan_sipd2 as  a on a.id_urusan = p.id 
       where  a.kode_kegiatan  is not  null and  a.tag_air_minum  =  true 
      group by p.id  order by count(a.kode_kegiatan) desc

    
ERROR - 2020-01-30 12:23:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;provinsi&quot; does not exist
LINE 12: ...unt(a.kode_kegiatan) as data_jumlah_kegiatan from provinsi a...
                                                              ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 12:23:44 --> Query error: ERROR:  relation "provinsi" does not exist
LINE 12: ...unt(a.kode_kegiatan) as data_jumlah_kegiatan from provinsi a...
                                                              ^ - Invalid query: select p.id_provinsi as key,p.nama as key_name,
      CONCAT('[[',
        '`a.kode_daerah`',
        ',',
        '` ilike `',
        ',','`',
        p.id_provinsi,
        '%`',
        ',',
        '`string`]]'
        ) as where_add,
      count(DISTINCT(a.kode_program)) as data_jumlah_program,count(a.kode_kegiatan) as data_jumlah_kegiatan from provinsi as p
       join program_kegiatan_sipd2 as a on a.kode_daerah ILIKE p.id_provinsi || '%'  where  a.tag_air_minum  =  true
      group by p.id_provinsi order by count(a.kode_kegiatan) desc
    
ERROR - 2020-01-30 12:23:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;provinsi&quot; does not exist
LINE 12: ...unt(a.kode_kegiatan) as data_jumlah_kegiatan from provinsi a...
                                                              ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 12:23:56 --> Query error: ERROR:  relation "provinsi" does not exist
LINE 12: ...unt(a.kode_kegiatan) as data_jumlah_kegiatan from provinsi a...
                                                              ^ - Invalid query: select p.id_provinsi as key,p.nama as key_name,
      CONCAT('[[',
        '`a.kode_daerah`',
        ',',
        '` ilike `',
        ',','`',
        p.id_provinsi,
        '%`',
        ',',
        '`string`]]'
        ) as where_add,
      count(DISTINCT(a.kode_program)) as data_jumlah_program,count(a.kode_kegiatan) as data_jumlah_kegiatan from provinsi as p
       join program_kegiatan_sipd2 as a on a.kode_daerah ILIKE p.id_provinsi || '%'  where  a.tag_air_minum  =  true
      group by p.id_provinsi order by count(a.kode_kegiatan) desc
    
ERROR - 2020-01-30 12:23:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;program_kegiatan_sipd2&quot; does not exist
LINE 15:       join program_kegiatan_sipd2 as  a on a.id_urusan = p.i...
                    ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 12:23:56 --> Query error: ERROR:  relation "program_kegiatan_sipd2" does not exist
LINE 15:       join program_kegiatan_sipd2 as  a on a.id_urusan = p.i...
                    ^ - Invalid query: 
      select p.id as key, p.nama as key_name,
       CONCAT('[[',
        '`a.id_urusan`',
        ',',
        '` =`',
        ',','`',
        p.id,
        '`',
        ',',
        '`numberic`]]'
        ) as where_add,
      count(DISTINCT(a.kode_program)) as data_jumlah_program,count(a.kode_kegiatan) as data_jumlah_kegiatan
      from master_urusan as p
      join program_kegiatan_sipd2 as  a on a.id_urusan = p.id 
       where  a.kode_kegiatan  is not  null and  a.tag_air_minum  =  true 
      group by p.id  order by count(a.kode_kegiatan) desc

    
ERROR - 2020-01-30 12:45:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;view_daerah&quot; does not exist
LINE 1: select * from view_daerah 
                      ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 12:45:07 --> Query error: ERROR:  relation "view_daerah" does not exist
LINE 1: select * from view_daerah 
                      ^ - Invalid query: select * from view_daerah 
ERROR - 2020-01-30 12:49:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;program_kegiatan_sipd2&quot; does not exist
LINE 15:       join program_kegiatan_sipd2 as  a on a.id_urusan = p.i...
                    ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 12:49:53 --> Query error: ERROR:  relation "program_kegiatan_sipd2" does not exist
LINE 15:       join program_kegiatan_sipd2 as  a on a.id_urusan = p.i...
                    ^ - Invalid query: 
      select p.id as key, p.nama as key_name,
       CONCAT('[[',
        '`a.id_urusan`',
        ',',
        '` =`',
        ',','`',
        p.id,
        '`',
        ',',
        '`numberic`]]'
        ) as where_add,
      count(DISTINCT(a.kode_program)) as data_jumlah_program,count(a.kode_kegiatan) as data_jumlah_kegiatan
      from master_urusan as p
      join program_kegiatan_sipd2 as  a on a.id_urusan = p.id 
       where  a.kode_kegiatan  is not  null and  a.tag_air_minum  =  true 
      group by p.id  order by count(a.kode_kegiatan) desc

    
ERROR - 2020-01-30 12:49:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;provinsi&quot; does not exist
LINE 12: ...unt(a.kode_kegiatan) as data_jumlah_kegiatan from provinsi a...
                                                              ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 12:49:53 --> Query error: ERROR:  relation "provinsi" does not exist
LINE 12: ...unt(a.kode_kegiatan) as data_jumlah_kegiatan from provinsi a...
                                                              ^ - Invalid query: select p.id_provinsi as key,p.nama as key_name,
      CONCAT('[[',
        '`a.kode_daerah`',
        ',',
        '` ilike `',
        ',','`',
        p.id_provinsi,
        '%`',
        ',',
        '`string`]]'
        ) as where_add,
      count(DISTINCT(a.kode_program)) as data_jumlah_program,count(a.kode_kegiatan) as data_jumlah_kegiatan from provinsi as p
       join program_kegiatan_sipd2 as a on a.kode_daerah ILIKE p.id_provinsi || '%'  where  a.tag_air_minum  =  true
      group by p.id_provinsi order by count(a.kode_kegiatan) desc
    
ERROR - 2020-01-30 13:07:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;program_kegiatan_sipd2&quot; does not exist
LINE 15:       join program_kegiatan_sipd2 as  a on a.id_urusan = p.i...
                    ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 13:07:52 --> Query error: ERROR:  relation "program_kegiatan_sipd2" does not exist
LINE 15:       join program_kegiatan_sipd2 as  a on a.id_urusan = p.i...
                    ^ - Invalid query: 
      select p.id as key, p.nama as key_name,
       CONCAT('[[',
        '`a.id_urusan`',
        ',',
        '` =`',
        ',','`',
        p.id,
        '`',
        ',',
        '`numberic`]]'
        ) as where_add,
      count(DISTINCT(a.kode_program)) as data_jumlah_program,count(a.kode_kegiatan) as data_jumlah_kegiatan
      from master_urusan as p
      join program_kegiatan_sipd2 as  a on a.id_urusan = p.id 
       where  a.kode_kegiatan  is not  null and  a.tag_air_minum  =  true 
      group by p.id  order by count(a.kode_kegiatan) desc

    
ERROR - 2020-01-30 13:07:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;provinsi&quot; does not exist
LINE 12: ...unt(a.kode_kegiatan) as data_jumlah_kegiatan from provinsi a...
                                                              ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 13:07:52 --> Query error: ERROR:  relation "provinsi" does not exist
LINE 12: ...unt(a.kode_kegiatan) as data_jumlah_kegiatan from provinsi a...
                                                              ^ - Invalid query: select p.id_provinsi as key,p.nama as key_name,
      CONCAT('[[',
        '`a.kode_daerah`',
        ',',
        '` ilike `',
        ',','`',
        p.id_provinsi,
        '%`',
        ',',
        '`string`]]'
        ) as where_add,
      count(DISTINCT(a.kode_program)) as data_jumlah_program,count(a.kode_kegiatan) as data_jumlah_kegiatan from provinsi as p
       join program_kegiatan_sipd2 as a on a.kode_daerah ILIKE p.id_provinsi || '%'  where  a.tag_air_minum  =  true
      group by p.id_provinsi order by count(a.kode_kegiatan) desc
    
ERROR - 2020-01-30 13:07:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;provinsi&quot; does not exist
LINE 12: ...unt(a.kode_kegiatan) as data_jumlah_kegiatan from provinsi a...
                                                              ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 13:07:58 --> Query error: ERROR:  relation "provinsi" does not exist
LINE 12: ...unt(a.kode_kegiatan) as data_jumlah_kegiatan from provinsi a...
                                                              ^ - Invalid query: select p.id_provinsi as key,p.nama as key_name,
      CONCAT('[[',
        '`a.kode_daerah`',
        ',',
        '` ilike `',
        ',','`',
        p.id_provinsi,
        '%`',
        ',',
        '`string`]]'
        ) as where_add,
      count(DISTINCT(a.kode_program)) as data_jumlah_program,count(a.kode_kegiatan) as data_jumlah_kegiatan from provinsi as p
       join program_kegiatan_sipd2 as a on a.kode_daerah ILIKE p.id_provinsi || '%'  where  a.tag_air_minum  =  true
      group by p.id_provinsi order by count(a.kode_kegiatan) desc
    
ERROR - 2020-01-30 13:07:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;program_kegiatan_sipd2&quot; does not exist
LINE 15:       join program_kegiatan_sipd2 as  a on a.id_urusan = p.i...
                    ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 13:07:58 --> Query error: ERROR:  relation "program_kegiatan_sipd2" does not exist
LINE 15:       join program_kegiatan_sipd2 as  a on a.id_urusan = p.i...
                    ^ - Invalid query: 
      select p.id as key, p.nama as key_name,
       CONCAT('[[',
        '`a.id_urusan`',
        ',',
        '` =`',
        ',','`',
        p.id,
        '`',
        ',',
        '`numberic`]]'
        ) as where_add,
      count(DISTINCT(a.kode_program)) as data_jumlah_program,count(a.kode_kegiatan) as data_jumlah_kegiatan
      from master_urusan as p
      join program_kegiatan_sipd2 as  a on a.id_urusan = p.id 
       where  a.kode_kegiatan  is not  null and  a.tag_air_minum  =  true 
      group by p.id  order by count(a.kode_kegiatan) desc

    
ERROR - 2020-01-30 13:14:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;pelaksana&quot; does not exist
LINE 16: ...||',target_awal,'||',target_awal,'||',satuan,'||',pelaksana)...
                                                              ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 13:14:12 --> Query error: ERROR:  column "pelaksana" does not exist
LINE 16: ...||',target_awal,'||',target_awal,'||',satuan,'||',pelaksana)...
                                                              ^ - Invalid query: 
		select *,
		(select 
			CONCAT(p.uraian)
			from program as p where  p.id = k.id_program and p.kode_daerah=k.kode_daerah and p.tahun=k.tahun) as program,
		(select 
			CONCAT(d.nama)
			from master_daerah as d where d.id=k.kode_daerah) as daerah,
		(select 
			CONCAT(u.nama)
			from master_urusan as u where u.id=k.id_urusan) as urusan,
		(select 
			CONCAT(su.nama)
			from master_sub_urusan as su where su.id=k.id_sub_urusan) as suburusan,

		(select string_agg(CONCAT(id,'||',indikator,'||',target_awal,'||',target_awal,'||',satuan,'||',pelaksana),'|++|') 
            
            from  indikator_kegiatan as i
            where i.id_kegiaatan= k.id
          ) as indikator

		from kegiatan as k

		where k.kode_daerah='31' ORDER BY k.kode_daerah,k.id_urusan,id_sub_urusan
ERROR - 2020-01-30 13:14:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column i.id_kegiaatan does not exist
LINE 19:             where i.id_kegiaatan= k.id
                           ^
HINT:  Perhaps you meant to reference the column &quot;i.id_kegiatan&quot;. C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 13:14:54 --> Query error: ERROR:  column i.id_kegiaatan does not exist
LINE 19:             where i.id_kegiaatan= k.id
                           ^
HINT:  Perhaps you meant to reference the column "i.id_kegiatan". - Invalid query: 
		select *,
		(select 
			CONCAT(p.uraian)
			from program as p where  p.id = k.id_program and p.kode_daerah=k.kode_daerah and p.tahun=k.tahun) as program,
		(select 
			CONCAT(d.nama)
			from master_daerah as d where d.id=k.kode_daerah) as daerah,
		(select 
			CONCAT(u.nama)
			from master_urusan as u where u.id=k.id_urusan) as urusan,
		(select 
			CONCAT(su.nama)
			from master_sub_urusan as su where su.id=k.id_sub_urusan) as suburusan,

		(select string_agg(CONCAT(id,'||',indikator,'||',target_awal,'||',target_awal,'||',satuan),'|++|') 
            
            from  indikator_kegiatan as i
            where i.id_kegiaatan= k.id
          ) as indikator

		from kegiatan as k

		where k.kode_daerah='31' ORDER BY k.kode_daerah,k.id_urusan,id_sub_urusan
ERROR - 2020-01-30 13:22:50 --> Severity: Error --> Method Illuminate\View\View::__toString() must not throw an exception, caught ErrorException: syntax error, unexpected 'endforeach' (T_ENDFOREACH) (View: C:\xampp\htdocs\nws\application\views\helper\table_daerah.blade.php) C:\xampp\htdocs\nws\application\helpers\view_helper.php 0
ERROR - 2020-01-30 13:28:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column i.id_program does not exist
LINE 17:             where i.id_program= p.id
                           ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 13:28:29 --> Query error: ERROR:  column i.id_program does not exist
LINE 17:             where i.id_program= p.id
                           ^ - Invalid query: 
		select *,
		
		(select 
			CONCAT(d.nama)
			from master_daerah as d where d.id=p.kode_daerah) as daerah,
		(select 
			CONCAT(u.nama)
			from master_urusan as u where u.id=p.id_urusan) as urusan,
		(select 
			CONCAT(su.nama)
			from master_sub_urusan as su where su.id=p.id_sub_urusan) as suburusan,

		(select string_agg(CONCAT(id,'||',indikator,'||',target_awal,'||',target_ahir,'||',satuan),'|++|') 
            
            from  indikator_kegiatan as i
            where i.id_program= p.id
          ) as indikator

		from program as p

		where k.kode_daerah='31' ORDER BY k.kode_daerah,k.id_urusan,id_sub_urusan
ERROR - 2020-01-30 13:28:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;k&quot;
LINE 22:   where k.kode_daerah='31' ORDER BY k.kode_daerah,k.id_urusa...
                 ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 13:28:41 --> Query error: ERROR:  missing FROM-clause entry for table "k"
LINE 22:   where k.kode_daerah='31' ORDER BY k.kode_daerah,k.id_urusa...
                 ^ - Invalid query: 
		select *,
		
		(select 
			CONCAT(d.nama)
			from master_daerah as d where d.id=p.kode_daerah) as daerah,
		(select 
			CONCAT(u.nama)
			from master_urusan as u where u.id=p.id_urusan) as urusan,
		(select 
			CONCAT(su.nama)
			from master_sub_urusan as su where su.id=p.id_sub_urusan) as suburusan,

		(select string_agg(CONCAT(id,'||',indikator,'||',target_awal,'||',target_ahir,'||',satuan),'|++|') 
            
            from  indikator_program as i
            where i.id_program= p.id
          ) as indikator

		from program as p

		where k.kode_daerah='31' ORDER BY k.kode_daerah,k.id_urusan,id_sub_urusan
ERROR - 2020-01-30 13:29:06 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:06 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:06 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:06 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:06 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:06 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:06 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:06 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:06 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:06 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:06 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:06 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:06 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:06 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:06 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:06 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:06 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:06 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:06 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:06 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:06 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:06 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:06 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:06 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:06 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:06 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:06 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:06 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:06 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:06 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:06 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:06 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:06 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:06 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:06 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:06 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:06 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:06 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:06 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:06 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:06 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:06 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:06 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:06 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:06 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:06 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:06 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:06 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:06 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:06 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:06 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:06 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:06 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:06 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:06 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:06 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:06 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:06 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:07 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:07 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:07 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:07 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:07 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:07 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:07 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:07 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:07 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:07 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:07 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:07 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:07 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:07 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:07 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:07 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:07 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:07 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:07 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:07 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:07 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:07 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:07 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:07 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:07 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:07 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:07 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:07 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:07 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:07 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:07 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:07 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:07 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:07 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:07 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:07 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:07 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:07 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:07 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:07 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:07 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:07 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:07 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:07 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:07 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:07 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:07 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:07 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:07 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:07 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:07 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:07 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:07 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:07 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:07 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:07 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:07 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:07 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:07 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:07 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:07 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:07 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:07 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:07 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:07 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:07 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:07 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:08 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:08 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:08 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:08 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:08 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:08 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:08 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:08 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:08 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:08 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:08 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:08 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:08 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:08 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:08 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:08 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:08 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:08 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:08 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:08 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:08 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:08 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:08 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:08 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:08 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:08 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:08 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:08 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:08 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:08 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:08 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:08 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:08 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:08 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:08 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:08 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:08 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:08 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:08 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:08 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:08 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:08 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:08 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:08 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:08 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:08 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:08 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:08 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:08 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:08 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:08 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:08 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:08 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:08 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:08 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:08 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:08 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:08 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:08 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:08 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:08 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:08 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:08 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:09 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:09 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:09 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:09 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:09 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:09 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:09 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:09 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:09 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:09 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:09 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:09 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:09 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:09 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:09 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:09 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:09 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:09 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:09 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:09 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:09 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:09 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:09 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:09 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:09 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:09 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:09 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:09 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:09 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:09 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:09 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:09 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:09 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:09 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:09 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:09 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:09 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:09 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:09 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:09 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:09 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:09 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:09 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:09 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:09 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:09 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:09 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:09 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:09 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:09 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:09 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:09 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:09 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:09 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:09 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:09 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:09 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:09 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:09 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:09 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:09 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:09 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:09 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:10 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:10 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:10 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:10 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:10 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:10 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:10 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:10 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:10 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:10 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:10 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:10 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:10 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:10 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:10 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:10 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:29:10 --> Severity: Notice --> Undefined index: program C:\xampp\htdocs\nws\application\views\cahce\2121a2fb00a04e8b993484cc8690f87b043f5fd0.php 33
ERROR - 2020-01-30 13:41:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;p&quot;
LINE 22:   where p.tahun=2020 p.kode_daerah='91' ORDER BY p.kode_daer...
                              ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 13:41:07 --> Query error: ERROR:  syntax error at or near "p"
LINE 22:   where p.tahun=2020 p.kode_daerah='91' ORDER BY p.kode_daer...
                              ^ - Invalid query: 
		select *,
		
		(select 
			CONCAT(d.nama)
			from master_daerah as d where d.id=p.kode_daerah) as daerah,
		(select 
			CONCAT(u.nama)
			from master_urusan as u where u.id=p.id_urusan) as urusan,
		(select 
			CONCAT(su.nama)
			from master_sub_urusan as su where su.id=p.id_sub_urusan) as suburusan,

		(select string_agg(CONCAT(id,'||',indikator,'||',target_awal,'||',target_ahir,'||',satuan,'||',anggaran),'|++|') 
            
            from  indikator_program as i
            where i.id_program= p.id
          ) as indikator

		from program as p

		where p.tahun=2020 p.kode_daerah='91' ORDER BY p.kode_daerah,p.id_urusan,p.id_sub_urusan
ERROR - 2020-01-30 13:46:45 --> Severity: error --> Exception: syntax error, unexpected '.' C:\xampp\htdocs\nws\application\controllers\Program-kegiatan\Per-daerah\Data.php 18
ERROR - 2020-01-30 13:51:44 --> Severity: error --> Exception: syntax error, unexpected '}', expecting ';' C:\xampp\htdocs\nws\application\controllers\Program-kegiatan\Per-daerah\Data.php 103
ERROR - 2020-01-30 13:51:51 --> Severity: Notice --> Undefined variable: link C:\xampp\htdocs\nws\application\controllers\Program-kegiatan\Per-daerah\Data.php 84
ERROR - 2020-01-30 13:51:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;p&quot;
LINE 20:            concat('','?id_program=',p.id) as link
                                             ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 13:51:51 --> Query error: ERROR:  missing FROM-clause entry for table "p"
LINE 20:            concat('','?id_program=',p.id) as link
                                             ^ - Invalid query: 
			select *,
			
			(select 
				CONCAT(d.nama)
				from master_daerah as d where d.id=k.kode_daerah) as daerah,
			(select 
				CONCAT(u.nama)
				from master_urusan as u where u.id=k.id_urusan) as urusan,
			(select 
				CONCAT(su.nama)
				from master_sub_urusan as su where su.id=k.id_sub_urusan) as suburusan,

			(select string_agg(CONCAT(id,'||',indikator,'||',target_awal,'||',target_ahir,'||',satuan,'||',anggaran),'|++|') 
	            
	            from  indikator_kegiatan as i
	            where i.id_kegiatan= k.id
	          ) as indikator,

	          concat('','?id_program=',p.id) as link


			from kegiatan as k

			where k.tahun=2020 and  k.kode_daerah='91' ORDER BY k.kode_daerah,k.id_urusan,k.id_sub_urusan
ERROR - 2020-01-30 13:51:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;from&quot;
LINE 22:    from kegiatan as k
            ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 13:51:56 --> Query error: ERROR:  syntax error at or near "from"
LINE 22:    from kegiatan as k
            ^ - Invalid query: 
			select *,
			
			(select 
				CONCAT(d.nama)
				from master_daerah as d where d.id=k.kode_daerah) as daerah,
			(select 
				CONCAT(u.nama)
				from master_urusan as u where u.id=k.id_urusan) as urusan,
			(select 
				CONCAT(su.nama)
				from master_sub_urusan as su where su.id=k.id_sub_urusan) as suburusan,

			(select string_agg(CONCAT(id,'||',indikator,'||',target_awal,'||',target_ahir,'||',satuan,'||',anggaran),'|++|') 
	            
	            from  indikator_kegiatan as i
	            where i.id_kegiatan= k.id
	          ) as indikator,



			from kegiatan as k

			where k.tahun=2020 and  k.kode_daerah='91' ORDER BY k.kode_daerah,k.id_urusan,k.id_sub_urusan
ERROR - 2020-01-30 13:53:06 --> Severity: error --> Exception: Call to undefined function reuqest() C:\xampp\htdocs\nws\application\controllers\Program-kegiatan\Per-daerah\Data.php 67
ERROR - 2020-01-30 13:54:06 --> Severity: error --> Exception: View [helper.table_daerah_kegiatan] not found. C:\xampp\htdocs\nws\vendor\illuminate\view\FileViewFinder.php 137
ERROR - 2020-01-30 13:54:52 --> Severity: error --> Exception: View [helper.table_daerah_kegiatan] not found. C:\xampp\htdocs\nws\vendor\illuminate\view\FileViewFinder.php 137
ERROR - 2020-01-30 14:01:39 --> Severity: Warning --> Use of undefined constant anggaran - assumed 'anggaran' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\50e3a0513a328a113c417b68737735fc91acb36c.php 52
ERROR - 2020-01-30 14:01:39 --> Severity: Warning --> Use of undefined constant anggaran - assumed 'anggaran' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\50e3a0513a328a113c417b68737735fc91acb36c.php 52
ERROR - 2020-01-30 14:01:39 --> Severity: Warning --> Use of undefined constant anggaran - assumed 'anggaran' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\50e3a0513a328a113c417b68737735fc91acb36c.php 52
ERROR - 2020-01-30 14:01:39 --> Severity: Warning --> Use of undefined constant anggaran - assumed 'anggaran' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\50e3a0513a328a113c417b68737735fc91acb36c.php 52
ERROR - 2020-01-30 14:01:39 --> Severity: Warning --> Use of undefined constant anggaran - assumed 'anggaran' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\50e3a0513a328a113c417b68737735fc91acb36c.php 52
ERROR - 2020-01-30 14:01:39 --> Severity: Warning --> Use of undefined constant anggaran - assumed 'anggaran' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\50e3a0513a328a113c417b68737735fc91acb36c.php 52
ERROR - 2020-01-30 14:01:39 --> Severity: Warning --> Use of undefined constant anggaran - assumed 'anggaran' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\50e3a0513a328a113c417b68737735fc91acb36c.php 52
ERROR - 2020-01-30 14:01:39 --> Severity: Warning --> Use of undefined constant anggaran - assumed 'anggaran' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\50e3a0513a328a113c417b68737735fc91acb36c.php 52
ERROR - 2020-01-30 14:01:39 --> Severity: Warning --> Use of undefined constant anggaran - assumed 'anggaran' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\50e3a0513a328a113c417b68737735fc91acb36c.php 52
ERROR - 2020-01-30 14:01:39 --> Severity: Warning --> Use of undefined constant anggaran - assumed 'anggaran' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\50e3a0513a328a113c417b68737735fc91acb36c.php 52
ERROR - 2020-01-30 14:01:40 --> Severity: Warning --> Use of undefined constant anggaran - assumed 'anggaran' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\50e3a0513a328a113c417b68737735fc91acb36c.php 52
ERROR - 2020-01-30 14:01:40 --> Severity: Warning --> Use of undefined constant anggaran - assumed 'anggaran' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\50e3a0513a328a113c417b68737735fc91acb36c.php 52
ERROR - 2020-01-30 14:01:40 --> Severity: Warning --> Use of undefined constant anggaran - assumed 'anggaran' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\50e3a0513a328a113c417b68737735fc91acb36c.php 52
ERROR - 2020-01-30 14:01:40 --> Severity: Warning --> Use of undefined constant anggaran - assumed 'anggaran' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\50e3a0513a328a113c417b68737735fc91acb36c.php 52
ERROR - 2020-01-30 14:01:40 --> Severity: Warning --> Use of undefined constant anggaran - assumed 'anggaran' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\50e3a0513a328a113c417b68737735fc91acb36c.php 52
ERROR - 2020-01-30 14:01:40 --> Severity: Warning --> Use of undefined constant anggaran - assumed 'anggaran' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\50e3a0513a328a113c417b68737735fc91acb36c.php 52
ERROR - 2020-01-30 14:01:40 --> Severity: Warning --> Use of undefined constant anggaran - assumed 'anggaran' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\50e3a0513a328a113c417b68737735fc91acb36c.php 52
ERROR - 2020-01-30 14:01:40 --> Severity: Warning --> Use of undefined constant anggaran - assumed 'anggaran' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\50e3a0513a328a113c417b68737735fc91acb36c.php 52
ERROR - 2020-01-30 14:01:40 --> Severity: Warning --> Use of undefined constant anggaran - assumed 'anggaran' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\50e3a0513a328a113c417b68737735fc91acb36c.php 52
ERROR - 2020-01-30 14:01:40 --> Severity: Warning --> Use of undefined constant anggaran - assumed 'anggaran' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\50e3a0513a328a113c417b68737735fc91acb36c.php 52
ERROR - 2020-01-30 14:01:40 --> Severity: Warning --> Use of undefined constant anggaran - assumed 'anggaran' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\50e3a0513a328a113c417b68737735fc91acb36c.php 52
ERROR - 2020-01-30 14:01:40 --> Severity: Warning --> Use of undefined constant anggaran - assumed 'anggaran' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\50e3a0513a328a113c417b68737735fc91acb36c.php 52
ERROR - 2020-01-30 14:01:40 --> Severity: Warning --> Use of undefined constant anggaran - assumed 'anggaran' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\50e3a0513a328a113c417b68737735fc91acb36c.php 52
ERROR - 2020-01-30 14:01:40 --> Severity: Warning --> Use of undefined constant anggaran - assumed 'anggaran' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\50e3a0513a328a113c417b68737735fc91acb36c.php 52
ERROR - 2020-01-30 14:01:40 --> Severity: Warning --> Use of undefined constant anggaran - assumed 'anggaran' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\50e3a0513a328a113c417b68737735fc91acb36c.php 52
ERROR - 2020-01-30 14:01:40 --> Severity: Warning --> Use of undefined constant anggaran - assumed 'anggaran' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\50e3a0513a328a113c417b68737735fc91acb36c.php 52
ERROR - 2020-01-30 14:01:40 --> Severity: Warning --> Use of undefined constant anggaran - assumed 'anggaran' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\50e3a0513a328a113c417b68737735fc91acb36c.php 52
ERROR - 2020-01-30 14:01:40 --> Severity: Warning --> Use of undefined constant anggaran - assumed 'anggaran' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\50e3a0513a328a113c417b68737735fc91acb36c.php 52
ERROR - 2020-01-30 14:01:40 --> Severity: Warning --> Use of undefined constant anggaran - assumed 'anggaran' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\50e3a0513a328a113c417b68737735fc91acb36c.php 52
ERROR - 2020-01-30 14:01:40 --> Severity: Warning --> Use of undefined constant anggaran - assumed 'anggaran' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\50e3a0513a328a113c417b68737735fc91acb36c.php 52
ERROR - 2020-01-30 14:01:40 --> Severity: Warning --> Use of undefined constant anggaran - assumed 'anggaran' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\50e3a0513a328a113c417b68737735fc91acb36c.php 52
ERROR - 2020-01-30 14:01:40 --> Severity: Warning --> Use of undefined constant anggaran - assumed 'anggaran' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\50e3a0513a328a113c417b68737735fc91acb36c.php 52
ERROR - 2020-01-30 14:01:40 --> Severity: Warning --> Use of undefined constant anggaran - assumed 'anggaran' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\50e3a0513a328a113c417b68737735fc91acb36c.php 52
ERROR - 2020-01-30 14:01:40 --> Severity: Warning --> Use of undefined constant anggaran - assumed 'anggaran' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\50e3a0513a328a113c417b68737735fc91acb36c.php 52
ERROR - 2020-01-30 14:01:40 --> Severity: Warning --> Use of undefined constant anggaran - assumed 'anggaran' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\50e3a0513a328a113c417b68737735fc91acb36c.php 52
ERROR - 2020-01-30 14:01:40 --> Severity: Warning --> Use of undefined constant anggaran - assumed 'anggaran' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\50e3a0513a328a113c417b68737735fc91acb36c.php 52
ERROR - 2020-01-30 14:09:58 --> Severity: error --> Exception: syntax error, unexpected '$', expecting variable (T_VARIABLE) C:\xampp\htdocs\nws\application\controllers\Program-kegiatan\Per-daerah\Data.php 61
ERROR - 2020-01-30 14:11:57 --> Severity: Notice --> Undefined variable: tahun C:\xampp\htdocs\nws\application\controllers\Program-kegiatan\Per-daerah\Data.php 90
ERROR - 2020-01-30 14:11:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;and&quot;
LINE 25:   where p.tahun= and  p.kode_daerah ilike '31'|'%'  ORDER BY...
                          ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 14:11:57 --> Query error: ERROR:  syntax error at or near "and"
LINE 25:   where p.tahun= and  p.kode_daerah ilike '31'|'%'  ORDER BY...
                          ^ - Invalid query: 
		select *,
		
		(select 
			CONCAT(d.nama)
			from master_daerah as d where d.id=p.kode_daerah) as daerah,
		(select 
			CONCAT(u.nama)
			from master_urusan as u where u.id=p.id_urusan) as urusan,
		(select 
			CONCAT(su.nama)
			from master_sub_urusan as su where su.id=p.id_sub_urusan) as suburusan,

		(select string_agg(CONCAT(id,'||',indikator,'||',target_awal,'||',target_ahir,'||',satuan,'||',anggaran),'|++|') 
            
            from  indikator_program as i
            where i.id_program= p.id
          ) as indikator,

          concat('http://localhost/nws/program-kegiatan/per-daerah/data/kegiatan/31/','?id_program=',p.id) as link


		from program as p

		where p.tahun= and  p.kode_daerah ilike '31'|'%'  ORDER BY p.kode_daerah,p.id_urusan,p.id_sub_urusan
ERROR - 2020-01-30 14:12:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator is not unique: unknown | unknown
LINE 25:   where p.tahun=2020 and  p.kode_daerah ilike '31'|'%'  ORDE...
                                                           ^
HINT:  Could not choose a best candidate operator. You might need to add explicit type casts. C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 14:12:10 --> Query error: ERROR:  operator is not unique: unknown | unknown
LINE 25:   where p.tahun=2020 and  p.kode_daerah ilike '31'|'%'  ORDE...
                                                           ^
HINT:  Could not choose a best candidate operator. You might need to add explicit type casts. - Invalid query: 
		select *,
		
		(select 
			CONCAT(d.nama)
			from master_daerah as d where d.id=p.kode_daerah) as daerah,
		(select 
			CONCAT(u.nama)
			from master_urusan as u where u.id=p.id_urusan) as urusan,
		(select 
			CONCAT(su.nama)
			from master_sub_urusan as su where su.id=p.id_sub_urusan) as suburusan,

		(select string_agg(CONCAT(id,'||',indikator,'||',target_awal,'||',target_ahir,'||',satuan,'||',anggaran),'|++|') 
            
            from  indikator_program as i
            where i.id_program= p.id
          ) as indikator,

          concat('http://localhost/nws/program-kegiatan/per-daerah/data/kegiatan/31/','?id_program=',p.id) as link


		from program as p

		where p.tahun=2020 and  p.kode_daerah ilike '31'|'%'  ORDER BY p.kode_daerah,p.id_urusan,p.id_sub_urusan
ERROR - 2020-01-30 14:12:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator is not unique: unknown | unknown
LINE 25: ... where p.tahun=2020 and  p.kode_daerah ilike ('31'|'%')  ORD...
                                                              ^
HINT:  Could not choose a best candidate operator. You might need to add explicit type casts. C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 14:12:28 --> Query error: ERROR:  operator is not unique: unknown | unknown
LINE 25: ... where p.tahun=2020 and  p.kode_daerah ilike ('31'|'%')  ORD...
                                                              ^
HINT:  Could not choose a best candidate operator. You might need to add explicit type casts. - Invalid query: 
		select *,
		
		(select 
			CONCAT(d.nama)
			from master_daerah as d where d.id=p.kode_daerah) as daerah,
		(select 
			CONCAT(u.nama)
			from master_urusan as u where u.id=p.id_urusan) as urusan,
		(select 
			CONCAT(su.nama)
			from master_sub_urusan as su where su.id=p.id_sub_urusan) as suburusan,

		(select string_agg(CONCAT(id,'||',indikator,'||',target_awal,'||',target_ahir,'||',satuan,'||',anggaran),'|++|') 
            
            from  indikator_program as i
            where i.id_program= p.id
          ) as indikator,

          concat('http://localhost/nws/program-kegiatan/per-daerah/data/kegiatan/31/','?id_program=',p.id) as link


		from program as p

		where p.tahun=2020 and  p.kode_daerah ilike ('31'|'%')  ORDER BY p.kode_daerah,p.id_urusan,p.id_sub_urusan
ERROR - 2020-01-30 14:12:34 --> Severity: error --> Exception: View [helper.table] not found. C:\xampp\htdocs\nws\vendor\illuminate\view\FileViewFinder.php 137
ERROR - 2020-01-30 14:15:13 --> Severity: error --> Exception: View [helper.table] not found. C:\xampp\htdocs\nws\vendor\illuminate\view\FileViewFinder.php 137
ERROR - 2020-01-30 14:25:29 --> Severity: error --> Exception: syntax error, unexpected '$suburusan' (T_VARIABLE) C:\xampp\htdocs\nws\application\controllers\Program-kegiatan\Per-daerah\Data.php 26
ERROR - 2020-01-30 14:28:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;program_kegiatan_sipd2&quot; does not exist
LINE 1: ...h_kegiatan, sum(anggaran) as jumlah_anggaran from program_ke...
                                                             ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 14:28:06 --> Query error: ERROR:  relation "program_kegiatan_sipd2" does not exist
LINE 1: ...h_kegiatan, sum(anggaran) as jumlah_anggaran from program_ke...
                                                             ^ - Invalid query: select count(*) jumlah_kegiatan, sum(anggaran) as jumlah_anggaran from program_kegiatan_sipd2 where tag_air_minum = true and  tahun=2020
ERROR - 2020-01-30 14:28:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;program_kegiatan_sipd2&quot; does not exist
LINE 15:       join program_kegiatan_sipd2 as  a on a.id_urusan = p.i...
                    ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 14:28:12 --> Query error: ERROR:  relation "program_kegiatan_sipd2" does not exist
LINE 15:       join program_kegiatan_sipd2 as  a on a.id_urusan = p.i...
                    ^ - Invalid query: 
      select p.id as key, p.nama as key_name,
       CONCAT('[[',
        '`a.id_urusan`',
        ',',
        '` =`',
        ',','`',
        p.id,
        '`',
        ',',
        '`numberic`]]'
        ) as where_add,
      count(DISTINCT(a.kode_program)) as data_jumlah_program,count(a.kode_kegiatan) as data_jumlah_kegiatan
      from master_urusan as p
      join program_kegiatan_sipd2 as  a on a.id_urusan = p.id 
       where  a.kode_kegiatan  is not  null and  a.tag_air_minum  =  true 
      group by p.id  order by count(a.kode_kegiatan) desc

    
ERROR - 2020-01-30 14:28:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;provinsi&quot; does not exist
LINE 12: ...unt(a.kode_kegiatan) as data_jumlah_kegiatan from provinsi a...
                                                              ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 14:28:12 --> Query error: ERROR:  relation "provinsi" does not exist
LINE 12: ...unt(a.kode_kegiatan) as data_jumlah_kegiatan from provinsi a...
                                                              ^ - Invalid query: select p.id_provinsi as key,p.nama as key_name,
      CONCAT('[[',
        '`a.kode_daerah`',
        ',',
        '` ilike `',
        ',','`',
        p.id_provinsi,
        '%`',
        ',',
        '`string`]]'
        ) as where_add,
      count(DISTINCT(a.kode_program)) as data_jumlah_program,count(a.kode_kegiatan) as data_jumlah_kegiatan from provinsi as p
       join program_kegiatan_sipd2 as a on a.kode_daerah ILIKE p.id_provinsi || '%'  where  a.tag_air_minum  =  true
      group by p.id_provinsi order by count(a.kode_kegiatan) desc
    
ERROR - 2020-01-30 14:28:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;program_kegiatan_sipd2&quot; does not exist
LINE 15:       join program_kegiatan_sipd2 as  a on a.id_urusan = p.i...
                    ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 14:28:15 --> Query error: ERROR:  relation "program_kegiatan_sipd2" does not exist
LINE 15:       join program_kegiatan_sipd2 as  a on a.id_urusan = p.i...
                    ^ - Invalid query: 
      select p.id as key, p.nama as key_name,
       CONCAT('[[',
        '`a.id_urusan`',
        ',',
        '` =`',
        ',','`',
        p.id,
        '`',
        ',',
        '`numberic`]]'
        ) as where_add,
      count(DISTINCT(a.kode_program)) as data_jumlah_program,count(a.kode_kegiatan) as data_jumlah_kegiatan
      from master_urusan as p
      join program_kegiatan_sipd2 as  a on a.id_urusan = p.id 
       where  a.kode_kegiatan  is not  null and  a.tag_air_minum  =  true and  a.kode_daerah in('1207','1373','1472','1403','1709','3202','3311','3572','3524','3502','6301','7172') 
      group by p.id  order by count(a.kode_kegiatan) desc

    
ERROR - 2020-01-30 14:28:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;provinsi&quot; does not exist
LINE 12: ...unt(a.kode_kegiatan) as data_jumlah_kegiatan from provinsi a...
                                                              ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 14:28:16 --> Query error: ERROR:  relation "provinsi" does not exist
LINE 12: ...unt(a.kode_kegiatan) as data_jumlah_kegiatan from provinsi a...
                                                              ^ - Invalid query: select p.id_provinsi as key,p.nama as key_name,
      CONCAT('[[',
        '`a.kode_daerah`',
        ',',
        '` ilike `',
        ',','`',
        p.id_provinsi,
        '%`',
        ',',
        '`string`]]'
        ) as where_add,
      count(DISTINCT(a.kode_program)) as data_jumlah_program,count(a.kode_kegiatan) as data_jumlah_kegiatan from provinsi as p
       join program_kegiatan_sipd2 as a on a.kode_daerah ILIKE p.id_provinsi || '%'  where  a.tag_air_minum  =  true and  a.kode_daerah in('1207','1373','1472','1403','1709','3202','3311','3572','3524','3502','6301','7172')
      group by p.id_provinsi order by count(a.kode_kegiatan) desc
    
ERROR - 2020-01-30 14:39:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;view_daerah&quot; does not exist
LINE 1: select * from view_daerah  where id in ('1207','1373','1472'...
                      ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 14:39:53 --> Query error: ERROR:  relation "view_daerah" does not exist
LINE 1: select * from view_daerah  where id in ('1207','1373','1472'...
                      ^ - Invalid query: select * from view_daerah  where id in ('1207','1373','1472','1403','1709','3202','3311','3572','3524','3502','6301','7172')
ERROR - 2020-01-30 14:57:26 --> Severity: Notice --> Undefined index: id_program C:\xampp\htdocs\nws\application\controllers\Program-kegiatan\Per-daerah\Data.php 163
ERROR - 2020-01-30 14:57:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at end of input
LINE 1: select * from program where id =
                                        ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 14:57:26 --> Query error: ERROR:  syntax error at end of input
LINE 1: select * from program where id =
                                        ^ - Invalid query: select * from program where id =
ERROR - 2020-01-30 14:57:38 --> Severity: Notice --> Undefined offset: 0 C:\xampp\htdocs\nws\application\controllers\Program-kegiatan\Per-daerah\Data.php 164
ERROR - 2020-01-30 15:01:59 --> Severity: Notice --> Undefined offset: 0 C:\xampp\htdocs\nws\application\controllers\Program-kegiatan\Per-daerah\Data.php 148
ERROR - 2020-01-30 15:02:36 --> Severity: Notice --> Undefined offset: 0 C:\xampp\htdocs\nws\application\controllers\Program-kegiatan\Per-daerah\Data.php 148
ERROR - 2020-01-30 15:03:22 --> Severity: Notice --> Undefined offset: 0 C:\xampp\htdocs\nws\application\controllers\Program-kegiatan\Per-daerah\Data.php 148
ERROR - 2020-01-30 15:05:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;view_daerah&quot; does not exist
LINE 1: select * from view_daerah  where id in ('1207','1373','1472'...
                      ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 15:05:08 --> Query error: ERROR:  relation "view_daerah" does not exist
LINE 1: select * from view_daerah  where id in ('1207','1373','1472'...
                      ^ - Invalid query: select * from view_daerah  where id in ('1207','1373','1472','1403','1709','3202','3311','3572','3524','3502','6301','7172')
ERROR - 2020-01-30 15:05:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;view_daerah&quot; does not exist
LINE 1: select * from view_daerah  where id in ('1207','1373','1472'...
                      ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-30 15:05:10 --> Query error: ERROR:  relation "view_daerah" does not exist
LINE 1: select * from view_daerah  where id in ('1207','1373','1472'...
                      ^ - Invalid query: select * from view_daerah  where id in ('1207','1373','1472','1403','1709','3202','3311','3572','3524','3502','6301','7172')
