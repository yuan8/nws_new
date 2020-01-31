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
