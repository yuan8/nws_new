<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-02-14 02:28:58 --> Severity: Notice --> Undefined property: stdClass::$username C:\xampp\htdocs\nws\application\controllers\Login.php 32
ERROR - 2020-02-14 02:59:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;kegiatan&quot; does not exist
LINE 1: ...h_kegiatan, sum(anggaran) as jumlah_anggaran from kegiatan w...
                                                             ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-14 02:59:35 --> Query error: ERROR:  relation "kegiatan" does not exist
LINE 1: ...h_kegiatan, sum(anggaran) as jumlah_anggaran from kegiatan w...
                                                             ^ - Invalid query: select count(*) jumlah_kegiatan, sum(anggaran) as jumlah_anggaran from kegiatan where  tahun=2020
ERROR - 2020-02-14 02:59:49 --> Severity: Notice --> Undefined offset: 0 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 36
ERROR - 2020-02-14 02:59:49 --> Severity: Notice --> Undefined offset: 0 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-14 06:02:49 --> Severity: Notice --> Undefined property: stdClass::$username C:\xampp\htdocs\nws\application\controllers\Login.php 32
ERROR - 2020-02-14 11:13:37 --> Severity: Notice --> Undefined property: stdClass::$username C:\xampp\htdocs\nws\application\controllers\Login.php 32
ERROR - 2020-02-14 11:13:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;provinsi&quot; does not exist
LINE 12: ...unt(a.kode_kegiatan) as data_jumlah_kegiatan from provinsi a...
                                                              ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-14 11:13:50 --> Query error: ERROR:  relation "provinsi" does not exist
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
    
ERROR - 2020-02-14 11:13:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;program_kegiatan_sipd2&quot; does not exist
LINE 15:       join program_kegiatan_sipd2 as  a on a.id_urusan = p.i...
                    ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-14 11:13:50 --> Query error: ERROR:  relation "program_kegiatan_sipd2" does not exist
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

    
ERROR - 2020-02-14 20:27:43 --> Severity: Notice --> Undefined property: stdClass::$username C:\xampp\htdocs\nws\application\controllers\Login.php 32
ERROR - 2020-02-14 20:30:50 --> Severity: error --> Exception: syntax error, unexpected '$select' (T_VARIABLE), expecting function (T_FUNCTION) or const (T_CONST) C:\xampp\htdocs\nws\application\controllers\h-pdam\Data.php 5
ERROR - 2020-02-14 20:37:57 --> Severity: Warning --> Use of undefined constant CURRENT_URL - assumed 'CURRENT_URL' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\controllers\h-pdam\Data.php 7
ERROR - 2020-02-14 20:54:53 --> Severity: Notice --> Undefined index: tanggal_masukan C:\xampp\htdocs\nws\application\views\cahce\6daa4b28611017ccff68cafbe40d266f59b9fa14.php 33
ERROR - 2020-02-14 20:54:53 --> Severity: Notice --> Undefined index: tanggal_masukan C:\xampp\htdocs\nws\application\views\cahce\6daa4b28611017ccff68cafbe40d266f59b9fa14.php 33
ERROR - 2020-02-14 20:54:53 --> Severity: Notice --> Undefined index: tanggal_masukan C:\xampp\htdocs\nws\application\views\cahce\6daa4b28611017ccff68cafbe40d266f59b9fa14.php 33
ERROR - 2020-02-14 20:54:53 --> Severity: Notice --> Undefined index: tanggal_masukan C:\xampp\htdocs\nws\application\views\cahce\6daa4b28611017ccff68cafbe40d266f59b9fa14.php 33
ERROR - 2020-02-14 20:54:53 --> Severity: Notice --> Undefined index: tanggal_masukan C:\xampp\htdocs\nws\application\views\cahce\6daa4b28611017ccff68cafbe40d266f59b9fa14.php 33
ERROR - 2020-02-14 20:54:53 --> Severity: Notice --> Undefined index: tanggal_masukan C:\xampp\htdocs\nws\application\views\cahce\6daa4b28611017ccff68cafbe40d266f59b9fa14.php 33
ERROR - 2020-02-14 20:54:53 --> Severity: Notice --> Undefined index: tanggal_masukan C:\xampp\htdocs\nws\application\views\cahce\6daa4b28611017ccff68cafbe40d266f59b9fa14.php 33
ERROR - 2020-02-14 20:54:53 --> Severity: Notice --> Undefined index: tanggal_masukan C:\xampp\htdocs\nws\application\views\cahce\6daa4b28611017ccff68cafbe40d266f59b9fa14.php 33
ERROR - 2020-02-14 20:54:53 --> Severity: Notice --> Undefined index: tanggal_masukan C:\xampp\htdocs\nws\application\views\cahce\6daa4b28611017ccff68cafbe40d266f59b9fa14.php 33
ERROR - 2020-02-14 20:54:54 --> Severity: Notice --> Undefined index: tanggal_masukan C:\xampp\htdocs\nws\application\views\cahce\6daa4b28611017ccff68cafbe40d266f59b9fa14.php 33
ERROR - 2020-02-14 20:55:10 --> Severity: Notice --> Undefined index: tanggal_memasukan C:\xampp\htdocs\nws\application\views\cahce\6daa4b28611017ccff68cafbe40d266f59b9fa14.php 33
ERROR - 2020-02-14 20:55:10 --> Severity: Notice --> Undefined index: tanggal_memasukan C:\xampp\htdocs\nws\application\views\cahce\6daa4b28611017ccff68cafbe40d266f59b9fa14.php 33
ERROR - 2020-02-14 20:55:10 --> Severity: Notice --> Undefined index: tanggal_memasukan C:\xampp\htdocs\nws\application\views\cahce\6daa4b28611017ccff68cafbe40d266f59b9fa14.php 33
ERROR - 2020-02-14 20:55:10 --> Severity: Notice --> Undefined index: tanggal_memasukan C:\xampp\htdocs\nws\application\views\cahce\6daa4b28611017ccff68cafbe40d266f59b9fa14.php 33
ERROR - 2020-02-14 20:55:10 --> Severity: Notice --> Undefined index: tanggal_memasukan C:\xampp\htdocs\nws\application\views\cahce\6daa4b28611017ccff68cafbe40d266f59b9fa14.php 33
ERROR - 2020-02-14 20:55:10 --> Severity: Notice --> Undefined index: tanggal_memasukan C:\xampp\htdocs\nws\application\views\cahce\6daa4b28611017ccff68cafbe40d266f59b9fa14.php 33
ERROR - 2020-02-14 20:55:10 --> Severity: Notice --> Undefined index: tanggal_memasukan C:\xampp\htdocs\nws\application\views\cahce\6daa4b28611017ccff68cafbe40d266f59b9fa14.php 33
ERROR - 2020-02-14 20:55:10 --> Severity: Notice --> Undefined index: tanggal_memasukan C:\xampp\htdocs\nws\application\views\cahce\6daa4b28611017ccff68cafbe40d266f59b9fa14.php 33
ERROR - 2020-02-14 20:55:10 --> Severity: Notice --> Undefined index: tanggal_memasukan C:\xampp\htdocs\nws\application\views\cahce\6daa4b28611017ccff68cafbe40d266f59b9fa14.php 33
ERROR - 2020-02-14 20:55:10 --> Severity: Notice --> Undefined index: tanggal_memasukan C:\xampp\htdocs\nws\application\views\cahce\6daa4b28611017ccff68cafbe40d266f59b9fa14.php 33
ERROR - 2020-02-14 21:13:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;OFSET&quot;
LINE 2: ...m_profile as p order by p.updated_at DESC limit 10 OFSET  10
                                                              ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-14 21:13:05 --> Query error: ERROR:  syntax error at or near "OFSET"
LINE 2: ...m_profile as p order by p.updated_at DESC limit 10 OFSET  10
                                                              ^ - Invalid query: select p.*,(select d.nama from master_daerah as d where d.id=p.kode_daerah limit 1) as nama_daerah,
		(select d.nama from master_daerah as d where d.id=left(p.kode_daerah,2) limit 1) as nama_provinsi from pdam_profile as p order by p.updated_at DESC limit 10 OFSET  10
ERROR - 2020-02-14 22:07:34 --> Severity: Notice --> Undefined index: data_hours C:\xampp\htdocs\nws\application\views\cahce\aa029760e83b1a2f2a0bef0c3d5ddddb6acf9c8b.php 4
ERROR - 2020-02-14 22:07:34 --> Severity: Notice --> Undefined index: data_hours C:\xampp\htdocs\nws\application\views\cahce\aa029760e83b1a2f2a0bef0c3d5ddddb6acf9c8b.php 10
ERROR - 2020-02-14 22:07:34 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\nws\application\views\cahce\aa029760e83b1a2f2a0bef0c3d5ddddb6acf9c8b.php 10
ERROR - 2020-02-14 22:08:08 --> Severity: Notice --> Undefined index: data_hours C:\xampp\htdocs\nws\application\views\cahce\aa029760e83b1a2f2a0bef0c3d5ddddb6acf9c8b.php 10
ERROR - 2020-02-14 22:08:08 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\nws\application\views\cahce\aa029760e83b1a2f2a0bef0c3d5ddddb6acf9c8b.php 10
ERROR - 2020-02-14 22:30:45 --> Severity: Notice --> Undefined index: website C:\xampp\htdocs\nws\application\views\cahce\aa029760e83b1a2f2a0bef0c3d5ddddb6acf9c8b.php 59
ERROR - 2020-02-14 22:30:45 --> Severity: Notice --> Undefined index: website C:\xampp\htdocs\nws\application\views\cahce\aa029760e83b1a2f2a0bef0c3d5ddddb6acf9c8b.php 59
ERROR - 2020-02-14 22:38:03 --> Severity: Notice --> Undefined index: open_hours C:\xampp\htdocs\nws\application\views\cahce\aa029760e83b1a2f2a0bef0c3d5ddddb6acf9c8b.php 4
ERROR - 2020-02-14 22:38:03 --> Severity: Notice --> Undefined index: nama_pdam C:\xampp\htdocs\nws\application\views\cahce\aa029760e83b1a2f2a0bef0c3d5ddddb6acf9c8b.php 12
ERROR - 2020-02-14 22:38:03 --> Severity: Notice --> Undefined index: nama_daerah C:\xampp\htdocs\nws\application\views\cahce\aa029760e83b1a2f2a0bef0c3d5ddddb6acf9c8b.php 15
ERROR - 2020-02-14 22:38:03 --> Severity: Notice --> Undefined index: nama_provinsi C:\xampp\htdocs\nws\application\views\cahce\aa029760e83b1a2f2a0bef0c3d5ddddb6acf9c8b.php 15
ERROR - 2020-02-14 22:38:03 --> Severity: Notice --> Undefined index: open_hours C:\xampp\htdocs\nws\application\views\cahce\aa029760e83b1a2f2a0bef0c3d5ddddb6acf9c8b.php 22
ERROR - 2020-02-14 22:38:03 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\nws\application\views\cahce\aa029760e83b1a2f2a0bef0c3d5ddddb6acf9c8b.php 22
ERROR - 2020-02-14 22:38:03 --> Severity: Notice --> Undefined index: url_img C:\xampp\htdocs\nws\application\views\cahce\aa029760e83b1a2f2a0bef0c3d5ddddb6acf9c8b.php 34
ERROR - 2020-02-14 22:38:03 --> Severity: Notice --> Undefined index: alamat C:\xampp\htdocs\nws\application\views\cahce\aa029760e83b1a2f2a0bef0c3d5ddddb6acf9c8b.php 43
ERROR - 2020-02-14 22:38:03 --> Severity: Notice --> Undefined index: no_telp C:\xampp\htdocs\nws\application\views\cahce\aa029760e83b1a2f2a0bef0c3d5ddddb6acf9c8b.php 51
ERROR - 2020-02-14 22:38:03 --> Severity: Notice --> Undefined index: website C:\xampp\htdocs\nws\application\views\cahce\aa029760e83b1a2f2a0bef0c3d5ddddb6acf9c8b.php 59
ERROR - 2020-02-14 22:38:03 --> Severity: Notice --> Undefined index: website C:\xampp\htdocs\nws\application\views\cahce\aa029760e83b1a2f2a0bef0c3d5ddddb6acf9c8b.php 59
ERROR - 2020-02-14 22:38:03 --> Severity: Notice --> Undefined index: url_img C:\xampp\htdocs\nws\application\views\cahce\aa029760e83b1a2f2a0bef0c3d5ddddb6acf9c8b.php 69
ERROR - 2020-02-14 23:01:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;p&quot;
LINE 1: select * from sat as s where p.kode_daerah ='6205' order by ...
                                     ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-14 23:01:28 --> Query error: ERROR:  missing FROM-clause entry for table "p"
LINE 1: select * from sat as s where p.kode_daerah ='6205' order by ...
                                     ^ - Invalid query: select * from sat as s where p.kode_daerah ='6205' order by s.period_tahun DESC,s.period_bulan DESC 
