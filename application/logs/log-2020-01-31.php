<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-01-31 02:07:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;program&quot; does not exist
LINE 10:   from program as p where p.tahun=2020
                ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-31 02:07:46 --> Query error: ERROR:  relation "program" does not exist
LINE 10:   from program as p where p.tahun=2020
                ^ - Invalid query: select count(DISTINCT(p.kode_program)) as jumlah_program ,

		(	select 
			count(DISTINCT(CONCAT(k.kode_daerah,k.kode_kegiatan))) as jumlah_kegiatan 
			from kegiatan as k   
			where k.tahun=2020 )

			 as jumlah_kegiatan

		from program as p where p.tahun=2020
ERROR - 2020-01-31 02:10:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;program&quot; does not exist
LINE 10:   from program as p where p.tahun=2020
                ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-31 02:10:48 --> Query error: ERROR:  relation "program" does not exist
LINE 10:   from program as p where p.tahun=2020
                ^ - Invalid query: select count(DISTINCT(p.kode_program)) as jumlah_program ,

		(	select 
			count(DISTINCT(CONCAT(k.kode_daerah,k.kode_kegiatan))) as jumlah_kegiatan 
			from kegiatan as k   
			where k.tahun=2020 )

			 as jumlah_kegiatan

		from program as p where p.tahun=2020
ERROR - 2020-01-31 02:11:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;program&quot; does not exist
LINE 10:   from program as p where p.tahun=2020
                ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-31 02:11:02 --> Query error: ERROR:  relation "program" does not exist
LINE 10:   from program as p where p.tahun=2020
                ^ - Invalid query: select count(DISTINCT(p.kode_program)) as jumlah_program ,

		(	select 
			count(DISTINCT(CONCAT(k.kode_daerah,k.kode_kegiatan))) as jumlah_kegiatan 
			from kegiatan as k   
			where k.tahun=2020 )

			 as jumlah_kegiatan

		from program as p where p.tahun=2020
ERROR - 2020-01-31 02:14:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;program&quot; does not exist
LINE 10:   from program as p where p.tahun=2020
                ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-31 02:14:21 --> Query error: ERROR:  relation "program" does not exist
LINE 10:   from program as p where p.tahun=2020
                ^ - Invalid query: select count(DISTINCT(p.kode_program)) as jumlah_program ,

		(	select 
			count(DISTINCT(CONCAT(k.kode_daerah,k.kode_kegiatan))) as jumlah_kegiatan 
			from kegiatan as k   
			where k.tahun=2020 )

			 as jumlah_kegiatan

		from program as p where p.tahun=2020
ERROR - 2020-01-31 02:15:05 --> Severity: error --> Exception: Using $this when not in object context C:\xampp\htdocs\nws\application\helpers\debuger_helper.php 25
ERROR - 2020-01-31 02:18:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;master_daerah&quot; does not exist
LINE 1: select nama from master_daerah where id='31'
                         ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-31 02:18:48 --> Query error: ERROR:  relation "master_daerah" does not exist
LINE 1: select nama from master_daerah where id='31'
                         ^ - Invalid query: select nama from master_daerah where id='31'
ERROR - 2020-01-31 02:18:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;master_daerah&quot; does not exist
LINE 1: select nama from master_daerah where id='31'
                         ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-31 02:18:51 --> Query error: ERROR:  relation "master_daerah" does not exist
LINE 1: select nama from master_daerah where id='31'
                         ^ - Invalid query: select nama from master_daerah where id='31'
ERROR - 2020-01-31 02:18:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;master_daerah&quot; does not exist
LINE 1: select nama from master_daerah where id='61'
                         ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-31 02:18:55 --> Query error: ERROR:  relation "master_daerah" does not exist
LINE 1: select nama from master_daerah where id='61'
                         ^ - Invalid query: select nama from master_daerah where id='61'
ERROR - 2020-01-31 02:18:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;master_daerah&quot; does not exist
LINE 1: select nama from master_daerah where id='91'
                         ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-31 02:18:56 --> Query error: ERROR:  relation "master_daerah" does not exist
LINE 1: select nama from master_daerah where id='91'
                         ^ - Invalid query: select nama from master_daerah where id='91'
ERROR - 2020-01-31 02:19:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;master_daerah&quot; does not exist
LINE 1: select nama from master_daerah where id='32'
                         ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-31 02:19:04 --> Query error: ERROR:  relation "master_daerah" does not exist
LINE 1: select nama from master_daerah where id='32'
                         ^ - Invalid query: select nama from master_daerah where id='32'
ERROR - 2020-01-31 02:19:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;master_daerah&quot; does not exist
LINE 1: select nama from master_daerah where id='31'
                         ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-31 02:19:11 --> Query error: ERROR:  relation "master_daerah" does not exist
LINE 1: select nama from master_daerah where id='31'
                         ^ - Invalid query: select nama from master_daerah where id='31'
ERROR - 2020-01-31 02:19:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;master_daerah&quot; does not exist
LINE 1: select nama from master_daerah where id='31'
                         ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-31 02:19:48 --> Query error: ERROR:  relation "master_daerah" does not exist
LINE 1: select nama from master_daerah where id='31'
                         ^ - Invalid query: select nama from master_daerah where id='31'
ERROR - 2020-01-31 02:33:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;p&quot;
LINE 9: ...TINCT(k.kode_kegiatan)) from kegiatan  as k where p.id_urusa...
                                                             ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-31 02:33:40 --> Query error: ERROR:  missing FROM-clause entry for table "p"
LINE 9: ...TINCT(k.kode_kegiatan)) from kegiatan  as k where p.id_urusa...
                                                             ^ - Invalid query: 
		select 
			u.id,
			CONCAT('{id_urusan:',u.id,'}') as selected,
			CONCAT('http://localhost/nws/program-kegiatan/per-daerah/dataperurusan/detail/',u.id) as link,
			CONCAT('http://localhost/nws/program-kegiatan/dataperurusan/persuburusan/',u.id) as next,
			min(nama) as nama,
			(select count(DISTINCT(p.kode_program)) from program as p where p.id_urusan = u.id and p.tahun=2020) as jumlah_program,
			(select count(DISTINCT(k.kode_kegiatan)) from kegiatan  as k where p.id_urusan = u.id and k.tahun=2020) as jumlah_kegiatan
			from master_urusan as u
		

		GROUP BY u.id ORDER BY jumlah_kegiatan DESC
		
ERROR - 2020-01-31 02:33:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;p&quot;
LINE 9: ...TINCT(k.kode_kegiatan)) from kegiatan  as k where p.id_urusa...
                                                             ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-31 02:33:52 --> Query error: ERROR:  missing FROM-clause entry for table "p"
LINE 9: ...TINCT(k.kode_kegiatan)) from kegiatan  as k where p.id_urusa...
                                                             ^ - Invalid query: 
		select 
			u.id,
			CONCAT('{id_urusan:',u.id,'}') as selected,
			CONCAT('http://localhost/nws/program-kegiatan/per-daerah/dataperurusan/detail/',u.id) as link,
			CONCAT('http://localhost/nws/program-kegiatan/dataperurusan/persuburusan/',u.id) as next,
			min(nama) as nama,
			(select count(DISTINCT(p.kode_program)) from program as p where p.id_urusan = u.id and p.tahun=2020) as jumlah_program,
			(select count(DISTINCT(k.kode_kegiatan)) from kegiatan  as k where p.id_urusan = u.id and k.tahun=2020) as jumlah_kegiatan
			from master_urusan as u
		

		GROUP BY u.id ORDER BY jumlah_kegiatan DESC
		
ERROR - 2020-01-31 02:43:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;as&quot;
LINE 8:     as jumlah_kegiatan
            ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-31 02:43:50 --> Query error: ERROR:  syntax error at or near "as"
LINE 8:     as jumlah_kegiatan
            ^ - Invalid query: select count(DISTINCT(p.kode_program)) as jumlah_program ,

		(	select 
			count(DISTINCT(CONCAT(k.kode_daerah,k.kode_kegiatan))) as jumlah_kegiatan 
			from kegiatan as k   
			where k.tahun=2020 and k.id_urusan = 3

			 as jumlah_kegiatan

		from program as p where p.tahun=2020 and p.id_urusan = 3
ERROR - 2020-01-31 02:43:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;as&quot;
LINE 8:     as jumlah_kegiatan
            ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-31 02:43:52 --> Query error: ERROR:  syntax error at or near "as"
LINE 8:     as jumlah_kegiatan
            ^ - Invalid query: select count(DISTINCT(p.kode_program)) as jumlah_program ,

		(	select 
			count(DISTINCT(CONCAT(k.kode_daerah,k.kode_kegiatan))) as jumlah_kegiatan 
			from kegiatan as k   
			where k.tahun=2020 and k.id_urusan = 3

			 as jumlah_kegiatan

		from program as p where p.tahun=2020 and p.id_urusan = 3
ERROR - 2020-01-31 02:44:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;as&quot;
LINE 8:     as jumlah_kegiatan
            ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-31 02:44:00 --> Query error: ERROR:  syntax error at or near "as"
LINE 8:     as jumlah_kegiatan
            ^ - Invalid query: select count(DISTINCT(p.kode_program)) as jumlah_program ,

		(	select 
			count(DISTINCT(CONCAT(k.kode_daerah,k.kode_kegiatan))) as jumlah_kegiatan 
			from kegiatan as k   
			where k.tahun=2020 and k.id_urusan = 15

			 as jumlah_kegiatan

		from program as p where p.tahun=2020 and p.id_urusan = 15
ERROR - 2020-01-31 02:45:19 --> Severity: Notice --> Undefined variable: daerah C:\xampp\htdocs\nws\application\controllers\Program-kegiatan\DataPerUrusan.php 112
ERROR - 2020-01-31 02:45:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;su&quot;
LINE 3:    su.id,
           ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-31 02:45:19 --> Query error: ERROR:  missing FROM-clause entry for table "su"
LINE 3:    su.id,
           ^ - Invalid query: 
		select 
			su.id,
			CONCAT('{id_urusan:',3,',id_sub_urusan:',su.id,'}') as selected,
			CONCAT('http://localhost/nws/program-kegiatan/per-daerah/dataperurusan/detail/',3,'/',su.id) as link,


			min(su.nama) as nama,
			(select count(DISTINCT(p.kode_program)) from program as p where p.id_urusan=3 and p.id_sub_urusan= (su.id) and p.tahun=2020) as jumlah_program,
			(select count(DISTINCT(k.kode_kegiatan)) from kegiatan  as k where k.id_urusan=3 and k.id_sub_urusan = (su.id) and k.tahun=2020) as jumlah_kegiatan
			from master_sub_urusan as d 
			where  
			d.id ilike ('' ||'%')

		GROUP BY su.id ORDER BY jumlah_kegiatan DESC
		
ERROR - 2020-01-31 02:52:57 --> Severity: Notice --> Undefined variable: nama C:\xampp\htdocs\nws\application\controllers\Program-kegiatan\Per-daerah\DataPerUrusan.php 22
ERROR - 2020-01-31 02:52:57 --> Severity: Notice --> Undefined variable: nama C:\xampp\htdocs\nws\application\controllers\Program-kegiatan\Per-daerah\DataPerUrusan.php 76
ERROR - 2020-01-31 03:00:17 --> Severity: error --> Exception: Too few arguments to function Data::perurusan(), 0 passed in C:\xampp\htdocs\nws\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\nws\application\controllers\Program-kegiatan\Data.php 141
