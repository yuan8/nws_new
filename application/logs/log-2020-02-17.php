<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-02-17 03:24:52 --> Severity: error --> Exception: syntax error, unexpected '}', expecting ';' C:\xampp\htdocs\nws\application\controllers\anggaran\Data.php 8
ERROR - 2020-02-17 03:24:59 --> Severity: error --> Exception: View [pages.anggran.perdaerah] not found. C:\xampp\htdocs\nws\vendor\illuminate\view\FileViewFinder.php 137
ERROR - 2020-02-17 03:43:25 --> Severity: error --> Exception: View [pages.aggaran.urusan] not found. C:\xampp\htdocs\nws\vendor\illuminate\view\FileViewFinder.php 137
ERROR - 2020-02-17 03:43:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;jumlah_kegiatan&quot; does not exist
LINE 12:   GROUP BY u.id ORDER BY jumlah_kegiatan DESC
                                  ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-17 03:43:46 --> Query error: ERROR:  column "jumlah_kegiatan" does not exist
LINE 12:   GROUP BY u.id ORDER BY jumlah_kegiatan DESC
                                  ^ - Invalid query: 
		select 
			u.id,
			CONCAT('{id_urusan:',u.id,'}') as selected,
			CONCAT('http://localhost/nws/program-kegiatan/per-daerah/dataperurusan/detail/',u.id) as link,
			CONCAT('http://localhost/nws/anggaran/urusan/persuburusan/',u.id) as next,
			min(nama) as nama,
			(select sum(anggaran) from kegiatan  as k where k.id_urusan = u.id and k.tahun=2020) as anggaran_kegiatan
			from master_urusan as u
		

		GROUP BY u.id ORDER BY jumlah_kegiatan DESC
		
ERROR - 2020-02-17 03:44:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;jumlah_kegiatan&quot; does not exist
LINE 12:   GROUP BY u.id ORDER BY jumlah_kegiatan DESC
                                  ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-17 03:44:00 --> Query error: ERROR:  column "jumlah_kegiatan" does not exist
LINE 12:   GROUP BY u.id ORDER BY jumlah_kegiatan DESC
                                  ^ - Invalid query: 
		select 
			u.id,
			CONCAT('{id_urusan:',u.id,'}') as selected,
			CONCAT('http://localhost/nws/program-kegiatan/per-daerah/dataperurusan/detail/',u.id) as link,
			CONCAT('http://localhost/nws/anggaran/urusan/persuburusan/',u.id) as next,
			min(nama) as nama,
			(select sum(anggaran) from kegiatan  as k where k.id_urusan = u.id and k.tahun=2020) as anggaran_kegiatan
			from master_urusan as u
		

		GROUP BY u.id ORDER BY jumlah_kegiatan DESC
		
ERROR - 2020-02-17 03:47:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;jumlah_kegiatan&quot; does not exist
LINE 12:   GROUP BY u.id ORDER BY jumlah_kegiatan DESC
                                  ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-17 03:47:40 --> Query error: ERROR:  column "jumlah_kegiatan" does not exist
LINE 12:   GROUP BY u.id ORDER BY jumlah_kegiatan DESC
                                  ^ - Invalid query: 
		select 
			u.id,
			CONCAT('{id_urusan:',u.id,'}') as selected,
			CONCAT('http://localhost/nws/program-kegiatan/per-daerah/dataperurusan/detail/',u.id) as link,
			CONCAT('http://localhost/nws/anggaran/urusan/persuburusan/',u.id) as next,
			min(nama) as nama,
			(select sum(anggaran) from kegiatan  as k where k.id_urusan = u.id and k.tahun=2020) as anggaran_kegiatan
			from master_urusan as u
		

		GROUP BY u.id ORDER BY jumlah_kegiatan DESC
		
ERROR - 2020-02-17 03:48:07 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:48:07 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:48:07 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:48:07 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:48:07 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:48:07 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:48:07 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:48:07 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:48:07 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:48:07 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:48:07 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:48:07 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:48:07 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:48:07 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:48:07 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:48:07 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:48:07 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:48:07 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:48:07 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:48:07 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:48:07 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:48:07 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:48:07 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:48:07 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:48:07 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:48:07 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:48:07 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:48:07 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:48:07 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:48:07 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:48:07 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:48:07 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:48:07 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:48:07 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:48:07 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:48:07 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:48:07 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:48:07 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:48:07 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:48:07 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:48:07 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:48:07 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:48:07 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:48:07 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:48:07 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:48:08 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:48:09 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:48:09 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:48:09 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:48:09 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:48:09 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:48:09 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:48:09 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:48:09 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:48:09 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:48:09 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 261
ERROR - 2020-02-17 03:48:09 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 262
ERROR - 2020-02-17 03:48:46 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:48:46 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:48:46 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:48:46 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:48:46 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:48:46 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:48:46 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:48:46 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:48:46 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:48:46 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:48:46 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:48:46 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:48:46 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:48:46 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:48:46 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:48:46 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:48:46 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:48:46 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:48:46 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:48:46 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:48:46 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:48:46 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:48:46 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:48:46 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:48:46 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:48:47 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:48:47 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:48:47 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:48:47 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:48:47 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:48:47 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:48:47 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:48:47 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:48:47 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:48:47 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:48:47 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:48:47 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:48:47 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:48:47 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:48:47 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:48:47 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:48:47 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:48:47 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:48:47 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:48:47 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:48:47 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:48:47 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:48:47 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:48:47 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:48:47 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:48:47 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:48:47 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:48:47 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:48:47 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:48:47 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:48:47 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:48:47 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:48:47 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:48:47 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:48:47 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:48:47 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:48:47 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:48:47 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:48:47 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:48:47 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:48:47 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:48:47 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:48:47 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:48:47 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:48:47 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:48:47 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:48:47 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:48:47 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:48:47 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:48:47 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:48:47 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:48:47 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:48:47 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:48:47 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:48:47 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:48:47 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:48:47 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:48:47 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:48:47 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:48:47 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:48:47 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:48:47 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:48:47 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:48:47 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:48:47 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:48:47 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:48:47 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:48:47 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:48:47 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:48:47 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:48:47 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:48:47 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:48:47 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:48:48 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:48:48 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:48:48 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:48:48 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:48:48 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:48:48 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:48:48 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:48:48 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:48:48 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:48:48 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:48:48 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:48:48 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:48:48 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:48:48 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:48:48 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:48:48 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:48:48 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:48:48 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:48:48 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:48:48 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:48:48 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:48:48 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:48:48 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:48:48 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:48:48 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:48:48 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:48:48 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:48:48 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:48:48 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:48:48 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:48:48 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 261
ERROR - 2020-02-17 03:48:48 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 262
ERROR - 2020-02-17 03:49:15 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:49:15 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:49:15 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:49:15 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:49:15 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:49:15 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:49:15 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:49:16 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:49:16 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:49:16 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:49:16 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:49:16 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:49:16 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:49:16 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:49:16 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:49:16 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:49:16 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:49:16 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:49:16 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:49:16 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:49:16 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:49:16 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:49:16 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:49:16 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:49:16 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:49:16 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:49:16 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:49:16 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:49:16 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:49:16 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:49:16 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:49:16 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:49:16 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:49:16 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:49:16 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:49:16 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:49:16 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:49:16 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:49:16 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:49:16 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:49:16 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:49:16 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:49:16 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:49:16 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:49:16 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:49:16 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:49:16 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:49:16 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:49:16 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:49:16 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:49:16 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:49:16 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:49:16 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:49:16 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:49:16 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:49:16 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:49:16 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:49:16 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:49:16 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:49:16 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:49:16 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:49:16 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:49:16 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:49:16 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:49:16 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:49:16 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:49:16 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:49:16 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:49:16 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:49:16 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:49:16 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:49:16 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:49:16 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:49:16 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:49:16 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:49:16 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:49:16 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:49:16 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:49:16 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:49:16 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:49:17 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:49:17 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:49:17 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:49:17 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:49:17 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:49:17 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:49:17 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:49:17 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:49:17 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:49:17 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:49:17 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:49:17 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:49:17 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:49:17 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:49:17 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:49:17 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:49:17 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:49:17 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:49:17 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:49:17 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:49:17 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:49:17 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:49:17 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:49:17 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:49:17 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:49:17 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:49:17 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:49:17 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:49:17 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:49:17 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:49:17 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:49:17 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:49:17 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:49:17 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:49:17 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:49:17 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:49:17 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:49:17 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:49:17 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:49:17 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:49:17 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:49:17 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:49:17 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:49:17 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:49:17 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:49:17 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:49:17 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:49:17 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:49:17 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 261
ERROR - 2020-02-17 03:49:17 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 262
ERROR - 2020-02-17 03:49:33 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:49:33 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:49:33 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:49:33 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:49:33 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:49:34 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:49:34 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:49:34 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:49:34 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:49:34 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:49:34 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:49:34 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:49:34 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:49:34 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:49:34 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:49:34 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:49:34 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:49:34 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:49:34 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:49:34 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:49:34 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:49:34 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:49:34 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:49:34 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:49:34 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:49:34 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:49:34 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:49:34 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:49:34 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:49:34 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:49:34 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:49:34 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:49:34 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:49:34 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:49:34 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:49:34 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:49:34 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:49:34 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:49:34 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:49:34 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:49:34 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:49:34 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:49:34 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:49:34 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:49:34 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:49:34 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:49:34 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:49:34 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:49:34 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:49:34 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:49:34 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:49:34 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:49:34 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:49:34 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:49:34 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:49:34 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:49:34 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:49:34 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:49:35 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:49:35 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:49:35 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:49:35 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:49:35 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 91
ERROR - 2020-02-17 03:49:35 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 92
ERROR - 2020-02-17 03:49:35 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:49:35 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:49:35 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:49:35 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:49:35 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:49:35 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:49:35 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:49:35 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:49:35 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:49:35 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:49:35 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:49:35 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:49:35 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:49:35 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:49:35 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:49:35 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:49:35 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:49:35 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:49:35 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:49:35 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:49:35 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:49:35 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:49:35 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:49:35 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:49:35 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:49:35 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:49:35 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:49:35 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:49:35 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:49:35 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:49:35 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:49:35 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:49:35 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:49:35 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:49:35 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:49:35 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:49:35 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:49:35 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:49:35 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:49:35 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:49:35 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:49:35 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:49:35 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:49:35 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:49:35 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:49:35 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:49:35 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:49:35 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:49:35 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:49:35 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:49:35 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:49:35 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:49:35 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:49:35 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:49:35 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:49:35 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:49:36 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:49:36 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:49:36 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:49:36 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:49:36 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:49:36 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:49:36 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 136
ERROR - 2020-02-17 03:49:36 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 137
ERROR - 2020-02-17 03:49:36 --> Severity: Notice --> Undefined index: jumlah_program C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 261
ERROR - 2020-02-17 03:49:36 --> Severity: Notice --> Undefined index: jumlah_kegiatan C:\xampp\htdocs\nws\application\views\cahce\42e33d400eba99056db4e4406148137c7963bff5.php 262
ERROR - 2020-02-17 04:03:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;as&quot;
LINE 1: ...jumlah_anggaran_kegiatan from kegiatan as p where as p where...
                                                             ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-17 04:03:57 --> Query error: ERROR:  syntax error at or near "as"
LINE 1: ...jumlah_anggaran_kegiatan from kegiatan as p where as p where...
                                                             ^ - Invalid query: select sum(aggaran) as jumlah_anggaran_kegiatan from kegiatan as p where as p where p.tahun=2020
ERROR - 2020-02-17 04:04:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;as&quot;
LINE 1: ...jumlah_anggaran_kegiatan from kegiatan as p where as p where...
                                                             ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-17 04:04:10 --> Query error: ERROR:  syntax error at or near "as"
LINE 1: ...jumlah_anggaran_kegiatan from kegiatan as p where as p where...
                                                             ^ - Invalid query: select sum(aggaran) as jumlah_anggaran_kegiatan from kegiatan as p where as p where p.tahun=2020
ERROR - 2020-02-17 04:04:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;aggaran&quot; does not exist
LINE 1: select sum(aggaran) as jumlah_anggaran_kegiatan from kegiata...
                   ^
HINT:  Perhaps you meant to reference the column &quot;p.anggaran&quot;. C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-17 04:04:49 --> Query error: ERROR:  column "aggaran" does not exist
LINE 1: select sum(aggaran) as jumlah_anggaran_kegiatan from kegiata...
                   ^
HINT:  Perhaps you meant to reference the column "p.anggaran". - Invalid query: select sum(aggaran) as jumlah_anggaran_kegiatan from kegiatan as p where p.tahun=2020
ERROR - 2020-02-17 04:05:07 --> Severity: Notice --> Undefined index: jumlah_anggaran_program C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 254
ERROR - 2020-02-17 04:06:24 --> Severity: Notice --> Undefined index: jumlah_anggaran_total C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 8
ERROR - 2020-02-17 04:10:53 --> Severity: Notice --> Undefined variable: tahun C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 9
ERROR - 2020-02-17 04:21:01 --> Severity: Notice --> Undefined variable: tahun C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 9
ERROR - 2020-02-17 04:21:01 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:21:02 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:21:02 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:21:02 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:21:02 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:21:02 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:21:02 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:21:02 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:21:02 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:21:02 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:21:02 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:21:02 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:21:02 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:21:02 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:21:02 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:21:02 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:21:02 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:21:02 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:21:02 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:21:02 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:21:02 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:21:02 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:21:02 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:21:02 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:21:02 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:21:02 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:21:02 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:21:02 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:21:02 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:21:02 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:21:02 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:21:02 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:21:02 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:21:02 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:21:02 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:21:02 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:21:02 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:21:02 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:21:02 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:21:02 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:21:02 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:21:02 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:21:02 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:21:02 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:21:02 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:21:02 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:21:02 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:21:02 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:21:02 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:21:02 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:21:02 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:21:02 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:21:02 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:21:02 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:21:02 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:21:02 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:21:02 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:21:02 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:21:02 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:21:02 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:21:02 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:21:02 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:21:02 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:21:02 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:21:02 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:21:02 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:21:03 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:21:03 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:21:28 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:21:28 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:21:29 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:21:29 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:21:29 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:21:29 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:21:29 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:21:29 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:21:29 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:21:29 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:21:29 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:21:29 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:21:29 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:21:29 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:21:29 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:21:29 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:21:29 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:21:29 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:21:29 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:21:29 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:21:29 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:21:29 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:21:29 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:21:29 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:21:29 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:21:29 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:21:29 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:21:29 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:21:29 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:21:29 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:21:29 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:21:29 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:21:29 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:21:29 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:21:29 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:21:29 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:21:29 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:21:29 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:21:29 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:21:29 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:21:29 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:21:29 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:21:29 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:21:29 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:21:29 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:21:29 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:21:29 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:21:29 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:21:29 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:21:29 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:21:29 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:21:29 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:21:29 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:21:29 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:21:29 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:21:29 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:21:29 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:21:29 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:21:29 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:21:29 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:21:29 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:21:29 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:21:29 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:21:29 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:21:29 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:21:29 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:21:30 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:21:30 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:27:16 --> Severity: Notice --> Undefined variable: tahun C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 9
ERROR - 2020-02-17 04:27:16 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:27:16 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:27:16 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:27:16 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:27:16 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:27:16 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:27:16 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:27:16 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:27:16 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:27:16 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:27:16 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:27:16 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:27:16 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:27:16 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:27:16 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:27:17 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:27:17 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:27:17 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:27:17 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:27:17 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:27:17 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:27:17 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:27:17 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:27:17 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:27:17 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:27:17 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:27:17 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:27:17 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:27:17 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:27:17 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:27:17 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:27:17 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:27:17 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:27:17 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:27:17 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:27:17 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:27:17 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:27:17 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:27:17 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:27:17 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:27:17 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:27:17 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:27:17 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:27:17 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:27:17 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:27:17 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:27:17 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:27:17 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:27:17 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:27:17 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:27:17 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:27:17 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:27:17 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:27:17 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:27:17 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:27:17 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:27:31 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:27:31 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:27:31 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:27:31 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:27:31 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:27:31 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:27:31 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:27:31 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:27:31 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:27:31 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:27:31 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:27:31 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:27:31 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:27:31 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:27:31 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:27:32 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:27:32 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:27:32 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:27:32 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:27:32 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:27:32 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:27:32 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:27:32 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:27:32 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:27:32 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:27:32 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:27:32 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:27:32 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 97
ERROR - 2020-02-17 04:27:32 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:27:32 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:27:32 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:27:32 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:27:32 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:27:32 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:27:32 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:27:32 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:27:32 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:27:32 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:27:32 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:27:32 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:27:32 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:27:32 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:27:32 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:27:32 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:27:32 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:27:32 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:27:32 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:27:32 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:27:32 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:27:32 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:27:32 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:27:32 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:27:32 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:27:32 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:27:32 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:27:32 --> Severity: Notice --> Undefined index: anggaran_kegiatan C:\xampp\htdocs\nws\application\views\cahce\257f9cb5c45011cd35c7322879ab2b486e87c30f.php 137
ERROR - 2020-02-17 04:32:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;anggaran_kegiatan&quot; does not exist
LINE 9:    from anggaran_kegiatan as su
                ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-17 04:32:55 --> Query error: ERROR:  relation "anggaran_kegiatan" does not exist
LINE 9:    from anggaran_kegiatan as su
                ^ - Invalid query: 
		select 
			su.id,
			CONCAT('{kode_daerah:','3203,','id_urusan:','3,','id_sub_urusan:',su.id,'}') as selected,
			CONCAT('http://localhost/nws/program-kegiatan/per-daerah/data/detail/','3203/','3/',su.id) as link,
			min(su.nama) as nama,
			
			(select  case when sum(anggaran)>0 then sum(anggaran) else 0 end  from kegiatan  as k where k.id_urusan = (3) and k.id_sub_urusan=su.id and k.tahun=2020 and k.kode_daerah=('3203')) as anggaran_kegiatan
			from anggaran_kegiatan as su
			
			where su.id_urusan = 3

		GROUP BY su.id ORDER BY anggaran_kegiatan DESC
		
ERROR - 2020-02-17 04:33:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;anggaran_kegiatan&quot; does not exist
LINE 9:    from anggaran_kegiatan as su
                ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-17 04:33:03 --> Query error: ERROR:  relation "anggaran_kegiatan" does not exist
LINE 9:    from anggaran_kegiatan as su
                ^ - Invalid query: 
		select 
			su.id,
			CONCAT('{kode_daerah:','3203,','id_urusan:','3,','id_sub_urusan:',su.id,'}') as selected,
			CONCAT('http://localhost/nws/program-kegiatan/per-daerah/data/detail/','3203/','3/',su.id) as link,
			min(su.nama) as nama,
			
			(select  case when sum(anggaran)>0 then sum(anggaran) else 0 end  from kegiatan  as k where k.id_urusan = (3) and k.id_sub_urusan=su.id and k.tahun=2020 and k.kode_daerah=('3203')) as anggaran_kegiatan
			from anggaran_kegiatan as su
			
			where su.id_urusan = 3

		GROUP BY su.id ORDER BY anggaran_kegiatan DESC
		
ERROR - 2020-02-17 04:33:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;anggaran_kegiatan&quot; does not exist
LINE 9:    from anggaran_kegiatan as su
                ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-17 04:33:04 --> Query error: ERROR:  relation "anggaran_kegiatan" does not exist
LINE 9:    from anggaran_kegiatan as su
                ^ - Invalid query: 
		select 
			su.id,
			CONCAT('{kode_daerah:','3203,','id_urusan:','3,','id_sub_urusan:',su.id,'}') as selected,
			CONCAT('http://localhost/nws/program-kegiatan/per-daerah/data/detail/','3203/','3/',su.id) as link,
			min(su.nama) as nama,
			
			(select  case when sum(anggaran)>0 then sum(anggaran) else 0 end  from kegiatan  as k where k.id_urusan = (3) and k.id_sub_urusan=su.id and k.tahun=2020 and k.kode_daerah=('3203')) as anggaran_kegiatan
			from anggaran_kegiatan as su
			
			where su.id_urusan = 3

		GROUP BY su.id ORDER BY anggaran_kegiatan DESC
		
ERROR - 2020-02-17 04:33:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;anggaran_kegiatan&quot; does not exist
LINE 9:    from anggaran_kegiatan as su
                ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-17 04:33:13 --> Query error: ERROR:  relation "anggaran_kegiatan" does not exist
LINE 9:    from anggaran_kegiatan as su
                ^ - Invalid query: 
		select 
			su.id,
			CONCAT('{kode_daerah:','3203,','id_urusan:','3,','id_sub_urusan:',su.id,'}') as selected,
			CONCAT('http://localhost/nws/program-kegiatan/per-daerah/data/detail/','3203/','3/',su.id) as link,
			min(su.nama) as nama,
			
			(select  case when sum(anggaran)>0 then sum(anggaran) else 0 end  from kegiatan  as k where k.id_urusan = (3) and k.id_sub_urusan=su.id and k.tahun=2020 and k.kode_daerah=('3203')) as anggaran_kegiatan
			from anggaran_kegiatan as su
			
			where su.id_urusan = 3

		GROUP BY su.id ORDER BY anggaran_kegiatan DESC
		
ERROR - 2020-02-17 19:17:18 --> Severity: Notice --> Undefined property: stdClass::$username C:\xampp\htdocs\nws\application\controllers\Login.php 32
