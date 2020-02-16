<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-02-16 02:08:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at end of input
LINE 1: ...h=1111 order by period_tahun DESC , period_bulan DESC limit 
                                                                       ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-16 02:08:09 --> Query error: ERROR:  syntax error at end of input
LINE 1: ...h=1111 order by period_tahun DESC , period_bulan DESC limit 
                                                                       ^ - Invalid query: select s.* from sat as s where s.kode_daerah=1111 order by period_tahun DESC , period_bulan DESC limit 
ERROR - 2020-02-16 02:08:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: character varying = integer
LINE 1: select s.* from sat as s where s.kode_daerah=1111 order by p...
                                                    ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-16 02:08:25 --> Query error: ERROR:  operator does not exist: character varying = integer
LINE 1: select s.* from sat as s where s.kode_daerah=1111 order by p...
                                                    ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. - Invalid query: select s.* from sat as s where s.kode_daerah=1111 order by period_tahun DESC , period_bulan DESC limit 2
ERROR - 2020-02-16 02:08:42 --> Severity: error --> Exception: syntax error, unexpected '::' (T_PAAMAYIM_NEKUDOTAYIM) C:\xampp\htdocs\nws\application\controllers\api\Pdam.php 28
ERROR - 2020-02-16 02:09:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at end of input
LINE 1: ...::text order by period_tahun DESC , period_bulan DESC limit 
                                                                       ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-16 02:09:19 --> Query error: ERROR:  syntax error at end of input
LINE 1: ...::text order by period_tahun DESC , period_bulan DESC limit 
                                                                       ^ - Invalid query: select s.* from sat as s where s.kode_daerah=1111::text order by period_tahun DESC , period_bulan DESC limit 
ERROR - 2020-02-16 02:09:28 --> Severity: Notice --> Undefined property: stdClass::$username C:\xampp\htdocs\nws\application\controllers\Login.php 32
ERROR - 2020-02-16 04:03:47 --> Severity: error --> Exception: syntax error, unexpected 'var' (T_VAR), expecting ';' C:\xampp\htdocs\nws\application\controllers\api\Pdam.php 35
ERROR - 2020-02-16 04:04:00 --> Severity: Notice --> Undefined index: period_tahun C:\xampp\htdocs\nws\application\controllers\api\Pdam.php 39
ERROR - 2020-02-16 04:04:00 --> Severity: Notice --> Undefined index: period_bulan C:\xampp\htdocs\nws\application\controllers\api\Pdam.php 39
ERROR - 2020-02-16 04:04:00 --> Severity: Notice --> Undefined index: periode_tahun C:\xampp\htdocs\nws\application\controllers\api\Pdam.php 48
ERROR - 2020-02-16 04:04:00 --> Severity: Notice --> Undefined index: periode_bulan C:\xampp\htdocs\nws\application\controllers\api\Pdam.php 49
ERROR - 2020-02-16 04:04:00 --> Severity: Notice --> Undefined index: period_tahun C:\xampp\htdocs\nws\application\controllers\api\Pdam.php 39
ERROR - 2020-02-16 04:04:00 --> Severity: Notice --> Undefined index: period_bulan C:\xampp\htdocs\nws\application\controllers\api\Pdam.php 39
ERROR - 2020-02-16 04:04:00 --> Severity: Notice --> Undefined index: periode_tahun C:\xampp\htdocs\nws\application\controllers\api\Pdam.php 48
ERROR - 2020-02-16 04:04:00 --> Severity: Notice --> Undefined index: periode_bulan C:\xampp\htdocs\nws\application\controllers\api\Pdam.php 49
ERROR - 2020-02-16 04:04:21 --> Severity: Notice --> Undefined index: period_tahun C:\xampp\htdocs\nws\application\controllers\api\Pdam.php 39
ERROR - 2020-02-16 04:04:21 --> Severity: Notice --> Undefined index: period_bulan C:\xampp\htdocs\nws\application\controllers\api\Pdam.php 39
ERROR - 2020-02-16 04:04:21 --> Severity: Notice --> Undefined index: period_tahun C:\xampp\htdocs\nws\application\controllers\api\Pdam.php 48
ERROR - 2020-02-16 04:04:21 --> Severity: Notice --> Undefined index: period_bulan C:\xampp\htdocs\nws\application\controllers\api\Pdam.php 49
ERROR - 2020-02-16 04:04:21 --> Severity: Notice --> Undefined index: period_tahun C:\xampp\htdocs\nws\application\controllers\api\Pdam.php 39
ERROR - 2020-02-16 04:04:21 --> Severity: Notice --> Undefined index: period_bulan C:\xampp\htdocs\nws\application\controllers\api\Pdam.php 39
ERROR - 2020-02-16 04:04:21 --> Severity: Notice --> Undefined index: period_tahun C:\xampp\htdocs\nws\application\controllers\api\Pdam.php 48
ERROR - 2020-02-16 04:04:21 --> Severity: Notice --> Undefined index: period_bulan C:\xampp\htdocs\nws\application\controllers\api\Pdam.php 49
ERROR - 2020-02-16 04:13:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\nws\application\controllers\api\Pdam.php 82
ERROR - 2020-02-16 04:13:36 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\nws\application\controllers\api\Pdam.php 82
ERROR - 2020-02-16 04:14:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\nws\application\controllers\api\Pdam.php 81
ERROR - 2020-02-16 04:14:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\nws\application\controllers\api\Pdam.php 81
ERROR - 2020-02-16 04:14:58 --> Severity: error --> Exception: syntax error, unexpected ',' C:\xampp\htdocs\nws\application\controllers\api\Pdam.php 81
ERROR - 2020-02-16 04:15:23 --> Severity: Warning --> explode(): Empty delimiter C:\xampp\htdocs\nws\application\controllers\api\Pdam.php 81
ERROR - 2020-02-16 04:15:36 --> Severity: Warning --> explode(): Empty delimiter C:\xampp\htdocs\nws\application\controllers\api\Pdam.php 81
ERROR - 2020-02-16 04:17:54 --> Severity: error --> Exception: Call to a member function format() on string C:\xampp\htdocs\nws\application\controllers\api\Pdam.php 82
ERROR - 2020-02-16 04:19:47 --> Severity: Warning --> date_format() expects parameter 1 to be DateTimeInterface, string given C:\xampp\htdocs\nws\application\controllers\api\Pdam.php 82
ERROR - 2020-02-16 04:20:31 --> Severity: error --> Exception: Call to undefined method DateTime::parse() C:\xampp\htdocs\nws\application\controllers\api\Pdam.php 82
ERROR - 2020-02-16 04:22:09 --> Severity: error --> Exception: Call to a member function fotmat() on bool C:\xampp\htdocs\nws\application\controllers\api\Pdam.php 82
ERROR - 2020-02-16 04:22:15 --> Severity: error --> Exception: Call to a member function format() on bool C:\xampp\htdocs\nws\application\controllers\api\Pdam.php 82
ERROR - 2020-02-16 04:22:51 --> Severity: error --> Exception: Call to a member function format() on bool C:\xampp\htdocs\nws\application\controllers\api\Pdam.php 82
ERROR - 2020-02-16 04:23:22 --> Severity: error --> Exception: Too few arguments to function dd(), 0 passed in C:\xampp\htdocs\nws\application\controllers\api\Pdam.php on line 85 and exactly 1 expected C:\xampp\htdocs\nws\application\helpers\debuger_helper.php 4
ERROR - 2020-02-16 04:35:51 --> Severity: error --> Exception: syntax error, unexpected '}', expecting ';' C:\xampp\htdocs\nws\application\controllers\api\Pdam.php 101
ERROR - 2020-02-16 05:21:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;priod_bulan&quot; does not exist
LINE 1: ...e s.kode_daerah=6205::text order by period_tahun ,priod_bula...
                                                             ^
HINT:  Perhaps you meant to reference the column &quot;s.period_bulan&quot;. C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-16 05:21:09 --> Query error: ERROR:  column "priod_bulan" does not exist
LINE 1: ...e s.kode_daerah=6205::text order by period_tahun ,priod_bula...
                                                             ^
HINT:  Perhaps you meant to reference the column "s.period_bulan". - Invalid query: select s.* from sat as s where s.kode_daerah=6205::text order by period_tahun ,priod_bulan DESC limit 3
ERROR - 2020-02-16 05:23:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  argument of AND must be type boolean, not type integer
LINE 1: ... sat as s where s.kode_daerah=6205::text order by s.period_t...
                                                             ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-16 05:23:28 --> Query error: ERROR:  argument of AND must be type boolean, not type integer
LINE 1: ... sat as s where s.kode_daerah=6205::text order by s.period_t...
                                                             ^ - Invalid query: select s.* from sat as s where s.kode_daerah=6205::text order by s.period_tahun and s.period_bulan DESC limit 3
ERROR - 2020-02-16 05:24:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  schema &quot;s&quot; does not exist
LINE 1: ... sat as s where s.kode_daerah=6205::text order by s.CONCAT(p...
                                                             ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-16 05:24:23 --> Query error: ERROR:  schema "s" does not exist
LINE 1: ... sat as s where s.kode_daerah=6205::text order by s.CONCAT(p...
                                                             ^ - Invalid query: select s.* from sat as s where s.kode_daerah=6205::text order by s.CONCAT(period_tahun ,s.period_bulan) DESC limit 3
ERROR - 2020-02-16 05:24:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  type &quot;number&quot; does not exist
LINE 1: ... order by CONCAT(s.period_tahun ,s.period_bulan)::number DES...
                                                             ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-16 05:24:56 --> Query error: ERROR:  type "number" does not exist
LINE 1: ... order by CONCAT(s.period_tahun ,s.period_bulan)::number DES...
                                                             ^ - Invalid query: select s.* from sat as s where s.kode_daerah=6205::text order by CONCAT(s.period_tahun ,s.period_bulan)::number DESC limit 3
ERROR - 2020-02-16 05:46:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;from&quot;
LINE 7:    from sat as s where s.kode_daerah='6205'::text order by C...
           ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-16 05:46:52 --> Query error: ERROR:  syntax error at or near "from"
LINE 7:    from sat as s where s.kode_daerah='6205'::text order by C...
           ^ - Invalid query: select s.*,(select nilai from sat_detail where id_sat=s.id and id_q='1.1')::numeric as nilai_kinerja_total,(select nilai from sat_detail where id_sat=s.id and id_q='1.2')::numeric as nilai_keuangan,
		(select nilai from sat_detail where id_sat=s.id and id_q='1.3')::numeric as nilai_operasioanal,
		(select nilai from sat_detail where id_sat=s.id and id_q='1.4')::numeric as nilai_pelayanan,
		(select nilai from sat_detail where id_sat=s.id and id_q='1.5')::numeric as nilai_sdm,


		 from sat as s where s.kode_daerah='6205'::text order by CONCAT(s.period_tahun ,s.period_bulan)::numeric DESC,s.tanggal_masukan desc limit 3
ERROR - 2020-02-16 10:19:43 --> Severity: Notice --> Undefined property: stdClass::$username C:\xampp\htdocs\nws\application\controllers\Login.php 32
ERROR - 2020-02-16 10:24:14 --> Severity: Notice --> Undefined variable: sats C:\xampp\htdocs\nws\application\views\cahce\aa029760e83b1a2f2a0bef0c3d5ddddb6acf9c8b.php 132
ERROR - 2020-02-16 10:24:14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\nws\application\views\cahce\aa029760e83b1a2f2a0bef0c3d5ddddb6acf9c8b.php 132
ERROR - 2020-02-16 10:28:02 --> Severity: Error --> Method Illuminate\View\View::__toString() must not throw an exception, caught ErrorException: syntax error, unexpected ':' (View: C:\xampp\htdocs\nws\application\views\pages\pdam\detail.blade.php) C:\xampp\htdocs\nws\application\helpers\view_helper.php 0
ERROR - 2020-02-16 10:28:21 --> Severity: Notice --> Undefined index: period_bulan C:\xampp\htdocs\nws\application\views\cahce\aa029760e83b1a2f2a0bef0c3d5ddddb6acf9c8b.php 140
ERROR - 2020-02-16 10:28:21 --> Severity: Notice --> Undefined index: period_bulan C:\xampp\htdocs\nws\application\views\cahce\aa029760e83b1a2f2a0bef0c3d5ddddb6acf9c8b.php 140
ERROR - 2020-02-16 10:29:56 --> Severity: Error --> Method Illuminate\View\View::__toString() must not throw an exception, caught ErrorException: Call to a member function format() on bool (View: C:\xampp\htdocs\nws\application\views\pages\pdam\detail.blade.php) C:\xampp\htdocs\nws\application\helpers\view_helper.php 0
ERROR - 2020-02-16 10:30:09 --> Severity: Error --> Method Illuminate\View\View::__toString() must not throw an exception, caught ErrorException: Call to a member function format() on bool (View: C:\xampp\htdocs\nws\application\views\pages\pdam\detail.blade.php) C:\xampp\htdocs\nws\application\helpers\view_helper.php 0
ERROR - 2020-02-16 10:31:22 --> Severity: Warning --> DateTime::createFromFormat() expects at least 2 parameters, 1 given C:\xampp\htdocs\nws\application\views\cahce\aa029760e83b1a2f2a0bef0c3d5ddddb6acf9c8b.php 145
ERROR - 2020-02-16 10:31:22 --> Severity: Error --> Method Illuminate\View\View::__toString() must not throw an exception, caught ErrorException: Call to a member function format() on bool (View: C:\xampp\htdocs\nws\application\views\pages\pdam\detail.blade.php) C:\xampp\htdocs\nws\application\helpers\view_helper.php 0
ERROR - 2020-02-16 10:31:31 --> Severity: Error --> Method Illuminate\View\View::__toString() must not throw an exception, caught ErrorException: Call to undefined method DateTime::createDateTime() (View: C:\xampp\htdocs\nws\application\views\pages\pdam\detail.blade.php) C:\xampp\htdocs\nws\application\helpers\view_helper.php 0
ERROR - 2020-02-16 10:31:43 --> Severity: Warning --> DateTime::createFromFormat() expects at least 2 parameters, 1 given C:\xampp\htdocs\nws\application\views\cahce\aa029760e83b1a2f2a0bef0c3d5ddddb6acf9c8b.php 145
ERROR - 2020-02-16 10:31:43 --> Severity: Error --> Method Illuminate\View\View::__toString() must not throw an exception, caught ErrorException: Call to a member function format() on bool (View: C:\xampp\htdocs\nws\application\views\pages\pdam\detail.blade.php) C:\xampp\htdocs\nws\application\helpers\view_helper.php 0
ERROR - 2020-02-16 10:32:03 --> Severity: Error --> Method Illuminate\View\View::__toString() must not throw an exception, caught ErrorException: Call to a member function format() on bool (View: C:\xampp\htdocs\nws\application\views\pages\pdam\detail.blade.php) C:\xampp\htdocs\nws\application\helpers\view_helper.php 0
ERROR - 2020-02-16 10:32:17 --> Severity: Error --> Method Illuminate\View\View::__toString() must not throw an exception, caught ErrorException: Call to a member function format() on bool (View: C:\xampp\htdocs\nws\application\views\pages\pdam\detail.blade.php) C:\xampp\htdocs\nws\application\helpers\view_helper.php 0
ERROR - 2020-02-16 10:32:40 --> Severity: Error --> Method Illuminate\View\View::__toString() must not throw an exception, caught ErrorException: syntax error, unexpected '}' (View: C:\xampp\htdocs\nws\application\views\pages\pdam\detail.blade.php) C:\xampp\htdocs\nws\application\helpers\view_helper.php 0
ERROR - 2020-02-16 10:33:09 --> Severity: Error --> Method Illuminate\View\View::__toString() must not throw an exception, caught ErrorException: Call to a member function format() on bool (View: C:\xampp\htdocs\nws\application\views\pages\pdam\detail.blade.php) C:\xampp\htdocs\nws\application\helpers\view_helper.php 0
ERROR - 2020-02-16 10:33:26 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\nws\application\views\cahce\aa029760e83b1a2f2a0bef0c3d5ddddb6acf9c8b.php 144
ERROR - 2020-02-16 10:33:26 --> Severity: Notice --> Undefined variable: Array C:\xampp\htdocs\nws\application\views\cahce\aa029760e83b1a2f2a0bef0c3d5ddddb6acf9c8b.php 144
ERROR - 2020-02-16 10:34:20 --> Severity: Error --> Method Illuminate\View\View::__toString() must not throw an exception, caught ErrorException: Call to a member function format() on string (View: C:\xampp\htdocs\nws\application\views\pages\pdam\detail.blade.php) C:\xampp\htdocs\nws\application\helpers\view_helper.php 0
ERROR - 2020-02-16 10:39:35 --> Severity: Notice --> Undefined index: nilai_operasional C:\xampp\htdocs\nws\application\views\cahce\aa029760e83b1a2f2a0bef0c3d5ddddb6acf9c8b.php 153
ERROR - 2020-02-16 10:39:42 --> Severity: Notice --> Undefined index: nilai_oprasional C:\xampp\htdocs\nws\application\views\cahce\aa029760e83b1a2f2a0bef0c3d5ddddb6acf9c8b.php 153
ERROR - 2020-02-16 10:41:00 --> Severity: Notice --> Undefined index: hasil_penilaian_nuwas C:\xampp\htdocs\nws\application\views\cahce\aa029760e83b1a2f2a0bef0c3d5ddddb6acf9c8b.php 156
ERROR - 2020-02-16 10:46:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;program_kegiatan_sipd2&quot; does not exist
LINE 16:       join program_kegiatan_sipd2 as  a on a.id_urusan = p.i...
                    ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-16 10:46:37 --> Query error: ERROR:  relation "program_kegiatan_sipd2" does not exist
LINE 16:       join program_kegiatan_sipd2 as  a on a.id_urusan = p.i...
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
     sum(a.anggaran) as data_Total_Anggaran_kegiatan
      
      from master_urusan as p
      join program_kegiatan_sipd2 as  a on a.id_urusan = p.id 
       where  a.kode_kegiatan  is not  null and  a.tag_air_minum  =  true and  a.kode_daerah in('1207','1373','1472','1403','1709','3202','3311','3572','3524','3502','6301','7172') 
      group by p.id  order by sum(a.anggaran) desc

    
ERROR - 2020-02-16 10:46:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;provinsi&quot; does not exist
LINE 17:       from provinsi as p
                    ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-16 10:46:37 --> Query error: ERROR:  relation "provinsi" does not exist
LINE 17:       from provinsi as p
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
     	
     sum(a.anggaran) as data_Total_Anggaran_kegiatan,
     sum(t.total_anggaran) as data_anggaran_daerah,

     CASE WHEN (sum(t.total_anggaran) is NULL) THEN 100 ELSE SUM(a.anggaran)*100 /sum(t.total_anggaran)  END  as data_Persentase_anggaran_kegiatan
      from provinsi as p
       join program_kegiatan_sipd2 as a on a.kode_daerah ILIKE p.id_provinsi || '%' 
        join total_anggaran as t on t.tahun = a.tahun and  t.kodepemda ILIKE p.id_provinsi || '%' 

        where  a.tag_air_minum  =  true and  a.kode_daerah in('1207','1373','1472','1403','1709','3202','3311','3572','3524','3502','6301','7172')
      group by p.id_provinsi order by sum(a.anggaran) desc
    
ERROR - 2020-02-16 10:54:33 --> Severity: Notice --> Undefined variable: sat C:\xampp\htdocs\nws\application\controllers\Dashboard.php 46
ERROR - 2020-02-16 10:59:55 --> Severity: error --> Exception: syntax error, unexpected end of file, expecting function (T_FUNCTION) or const (T_CONST) C:\xampp\htdocs\nws\application\controllers\h-pdam\Sat.php 15
ERROR - 2020-02-16 11:07:43 --> Severity: error --> Exception: View [h-pdam.detail_sat] not found. C:\xampp\htdocs\nws\vendor\illuminate\view\FileViewFinder.php 137
ERROR - 2020-02-16 11:09:39 --> Severity: error --> Exception: View [pdam.detail_sat] not found. C:\xampp\htdocs\nws\vendor\illuminate\view\FileViewFinder.php 137
ERROR - 2020-02-16 11:09:53 --> Severity: Warning --> Use of undefined constant nilai - assumed 'nilai' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 20
ERROR - 2020-02-16 11:09:53 --> Severity: Warning --> Use of undefined constant nilai - assumed 'nilai' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 20
ERROR - 2020-02-16 11:09:53 --> Severity: Warning --> Use of undefined constant nilai - assumed 'nilai' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 20
ERROR - 2020-02-16 11:09:53 --> Severity: Warning --> Use of undefined constant nilai - assumed 'nilai' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 20
ERROR - 2020-02-16 11:09:53 --> Severity: Warning --> Use of undefined constant nilai - assumed 'nilai' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 20
ERROR - 2020-02-16 11:09:53 --> Severity: Warning --> Use of undefined constant nilai - assumed 'nilai' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 20
ERROR - 2020-02-16 11:09:53 --> Severity: Warning --> Use of undefined constant nilai - assumed 'nilai' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 20
ERROR - 2020-02-16 11:09:53 --> Severity: Warning --> Use of undefined constant nilai - assumed 'nilai' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 20
ERROR - 2020-02-16 11:09:53 --> Severity: Warning --> Use of undefined constant nilai - assumed 'nilai' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 20
ERROR - 2020-02-16 11:09:53 --> Severity: Warning --> Use of undefined constant nilai - assumed 'nilai' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 20
ERROR - 2020-02-16 11:09:53 --> Severity: Warning --> Use of undefined constant nilai - assumed 'nilai' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 20
ERROR - 2020-02-16 11:09:53 --> Severity: Warning --> Use of undefined constant nilai - assumed 'nilai' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 20
ERROR - 2020-02-16 11:09:53 --> Severity: Warning --> Use of undefined constant nilai - assumed 'nilai' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 20
ERROR - 2020-02-16 11:09:53 --> Severity: Warning --> Use of undefined constant nilai - assumed 'nilai' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 20
ERROR - 2020-02-16 11:09:53 --> Severity: Warning --> Use of undefined constant nilai - assumed 'nilai' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 20
ERROR - 2020-02-16 11:09:53 --> Severity: Warning --> Use of undefined constant nilai - assumed 'nilai' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 20
ERROR - 2020-02-16 11:09:53 --> Severity: Warning --> Use of undefined constant nilai - assumed 'nilai' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 20
ERROR - 2020-02-16 11:09:53 --> Severity: Warning --> Use of undefined constant nilai - assumed 'nilai' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 20
ERROR - 2020-02-16 11:09:53 --> Severity: Warning --> Use of undefined constant nilai - assumed 'nilai' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 20
ERROR - 2020-02-16 11:09:53 --> Severity: Warning --> Use of undefined constant nilai - assumed 'nilai' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 20
ERROR - 2020-02-16 11:09:53 --> Severity: Warning --> Use of undefined constant nilai - assumed 'nilai' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 20
ERROR - 2020-02-16 11:09:53 --> Severity: Warning --> Use of undefined constant nilai - assumed 'nilai' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 20
ERROR - 2020-02-16 11:09:53 --> Severity: Warning --> Use of undefined constant nilai - assumed 'nilai' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 20
ERROR - 2020-02-16 11:09:53 --> Severity: Warning --> Use of undefined constant nilai - assumed 'nilai' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 20
ERROR - 2020-02-16 11:09:53 --> Severity: Warning --> Use of undefined constant nilai - assumed 'nilai' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 20
ERROR - 2020-02-16 11:09:53 --> Severity: Warning --> Use of undefined constant nilai - assumed 'nilai' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 20
ERROR - 2020-02-16 11:09:53 --> Severity: Warning --> Use of undefined constant nilai - assumed 'nilai' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 20
ERROR - 2020-02-16 11:09:53 --> Severity: Warning --> Use of undefined constant nilai - assumed 'nilai' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 20
ERROR - 2020-02-16 11:09:53 --> Severity: Warning --> Use of undefined constant nilai - assumed 'nilai' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 20
ERROR - 2020-02-16 11:09:53 --> Severity: Warning --> Use of undefined constant nilai - assumed 'nilai' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 20
ERROR - 2020-02-16 11:09:53 --> Severity: Warning --> Use of undefined constant nilai - assumed 'nilai' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 20
ERROR - 2020-02-16 11:09:53 --> Severity: Warning --> Use of undefined constant nilai - assumed 'nilai' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 20
ERROR - 2020-02-16 11:09:53 --> Severity: Warning --> Use of undefined constant nilai - assumed 'nilai' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 20
ERROR - 2020-02-16 11:09:53 --> Severity: Warning --> Use of undefined constant nilai - assumed 'nilai' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 20
ERROR - 2020-02-16 11:09:53 --> Severity: Warning --> Use of undefined constant nilai - assumed 'nilai' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 20
ERROR - 2020-02-16 11:09:53 --> Severity: Warning --> Use of undefined constant nilai - assumed 'nilai' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 20
ERROR - 2020-02-16 11:09:53 --> Severity: Warning --> Use of undefined constant nilai - assumed 'nilai' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 20
ERROR - 2020-02-16 11:09:53 --> Severity: Warning --> Use of undefined constant nilai - assumed 'nilai' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 20
ERROR - 2020-02-16 11:09:53 --> Severity: Warning --> Use of undefined constant nilai - assumed 'nilai' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 20
ERROR - 2020-02-16 11:09:53 --> Severity: Warning --> Use of undefined constant nilai - assumed 'nilai' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 20
ERROR - 2020-02-16 11:09:53 --> Severity: Warning --> Use of undefined constant nilai - assumed 'nilai' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 20
ERROR - 2020-02-16 11:09:53 --> Severity: Warning --> Use of undefined constant nilai - assumed 'nilai' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 20
ERROR - 2020-02-16 11:09:53 --> Severity: Warning --> Use of undefined constant nilai - assumed 'nilai' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 20
ERROR - 2020-02-16 11:09:53 --> Severity: Warning --> Use of undefined constant nilai - assumed 'nilai' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 20
ERROR - 2020-02-16 11:09:53 --> Severity: Warning --> Use of undefined constant nilai - assumed 'nilai' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 20
ERROR - 2020-02-16 11:09:53 --> Severity: Warning --> Use of undefined constant nilai - assumed 'nilai' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 20
ERROR - 2020-02-16 11:09:53 --> Severity: Warning --> Use of undefined constant nilai - assumed 'nilai' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 20
ERROR - 2020-02-16 11:09:53 --> Severity: Warning --> Use of undefined constant nilai - assumed 'nilai' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 20
ERROR - 2020-02-16 11:09:53 --> Severity: Warning --> Use of undefined constant nilai - assumed 'nilai' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 20
ERROR - 2020-02-16 11:09:53 --> Severity: Warning --> Use of undefined constant nilai - assumed 'nilai' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 20
ERROR - 2020-02-16 11:09:53 --> Severity: Warning --> Use of undefined constant nilai - assumed 'nilai' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 20
ERROR - 2020-02-16 11:09:53 --> Severity: Warning --> Use of undefined constant nilai - assumed 'nilai' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 20
ERROR - 2020-02-16 11:09:53 --> Severity: Warning --> Use of undefined constant nilai - assumed 'nilai' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 20
ERROR - 2020-02-16 11:22:11 --> Severity: Error --> Method Illuminate\View\View::__toString() must not throw an exception, caught ErrorException: syntax error, unexpected '!=' (T_IS_NOT_EQUAL) (View: C:\xampp\htdocs\nws\application\views\pages\pdam\detail_sat.blade.php) C:\xampp\htdocs\nws\application\helpers\view_helper.php 0
ERROR - 2020-02-16 11:22:20 --> Severity: Notice --> Undefined index: id_category C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 12
ERROR - 2020-02-16 11:22:20 --> Severity: Notice --> Undefined index: id_category C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 12
ERROR - 2020-02-16 11:22:20 --> Severity: Notice --> Undefined index: id_category C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 12
ERROR - 2020-02-16 11:22:20 --> Severity: Notice --> Undefined index: id_category C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 12
ERROR - 2020-02-16 11:22:20 --> Severity: Notice --> Undefined index: id_category C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 12
ERROR - 2020-02-16 11:22:20 --> Severity: Notice --> Undefined index: id_category C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 12
ERROR - 2020-02-16 11:22:20 --> Severity: Notice --> Undefined index: id_category C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 12
ERROR - 2020-02-16 11:22:20 --> Severity: Notice --> Undefined index: id_category C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 12
ERROR - 2020-02-16 11:22:20 --> Severity: Notice --> Undefined index: id_category C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 12
ERROR - 2020-02-16 11:22:21 --> Severity: Notice --> Undefined index: id_category C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 12
ERROR - 2020-02-16 11:22:21 --> Severity: Notice --> Undefined index: id_category C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 12
ERROR - 2020-02-16 11:22:21 --> Severity: Notice --> Undefined index: id_category C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 12
ERROR - 2020-02-16 11:22:21 --> Severity: Notice --> Undefined index: id_category C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 12
ERROR - 2020-02-16 11:22:21 --> Severity: Notice --> Undefined index: id_category C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 12
ERROR - 2020-02-16 11:22:21 --> Severity: Notice --> Undefined index: id_category C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 12
ERROR - 2020-02-16 11:22:21 --> Severity: Notice --> Undefined index: id_category C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 12
ERROR - 2020-02-16 11:22:21 --> Severity: Notice --> Undefined index: id_category C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 12
ERROR - 2020-02-16 11:22:21 --> Severity: Notice --> Undefined index: id_category C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 12
ERROR - 2020-02-16 11:22:21 --> Severity: Notice --> Undefined index: id_category C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 12
ERROR - 2020-02-16 11:22:21 --> Severity: Notice --> Undefined index: id_category C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 12
ERROR - 2020-02-16 11:22:21 --> Severity: Notice --> Undefined index: id_category C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 12
ERROR - 2020-02-16 11:22:21 --> Severity: Notice --> Undefined index: id_category C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 12
ERROR - 2020-02-16 11:22:21 --> Severity: Notice --> Undefined index: id_category C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 12
ERROR - 2020-02-16 11:22:21 --> Severity: Notice --> Undefined index: id_category C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 12
ERROR - 2020-02-16 11:22:21 --> Severity: Notice --> Undefined index: id_category C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 12
ERROR - 2020-02-16 11:22:21 --> Severity: Notice --> Undefined index: id_category C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 12
ERROR - 2020-02-16 11:22:21 --> Severity: Notice --> Undefined index: id_category C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 12
ERROR - 2020-02-16 11:22:21 --> Severity: Notice --> Undefined index: id_category C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 12
ERROR - 2020-02-16 11:22:21 --> Severity: Notice --> Undefined index: id_category C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 12
ERROR - 2020-02-16 11:22:21 --> Severity: Notice --> Undefined index: id_category C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 12
ERROR - 2020-02-16 11:22:21 --> Severity: Notice --> Undefined index: id_category C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 12
ERROR - 2020-02-16 11:22:21 --> Severity: Notice --> Undefined index: id_category C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 12
ERROR - 2020-02-16 11:22:21 --> Severity: Notice --> Undefined index: id_category C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 12
ERROR - 2020-02-16 11:22:21 --> Severity: Notice --> Undefined index: id_category C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 12
ERROR - 2020-02-16 11:22:21 --> Severity: Notice --> Undefined index: id_category C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 12
ERROR - 2020-02-16 11:22:21 --> Severity: Notice --> Undefined index: id_category C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 12
ERROR - 2020-02-16 11:22:21 --> Severity: Notice --> Undefined index: id_category C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 12
ERROR - 2020-02-16 11:22:21 --> Severity: Notice --> Undefined index: id_category C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 12
ERROR - 2020-02-16 11:22:21 --> Severity: Notice --> Undefined index: id_category C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 12
ERROR - 2020-02-16 11:22:21 --> Severity: Notice --> Undefined index: id_category C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 12
ERROR - 2020-02-16 11:22:21 --> Severity: Notice --> Undefined index: id_category C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 12
ERROR - 2020-02-16 11:22:21 --> Severity: Notice --> Undefined index: id_category C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 12
ERROR - 2020-02-16 11:22:21 --> Severity: Notice --> Undefined index: id_category C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 12
ERROR - 2020-02-16 11:22:21 --> Severity: Notice --> Undefined index: id_category C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 12
ERROR - 2020-02-16 11:22:21 --> Severity: Notice --> Undefined index: id_category C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 12
ERROR - 2020-02-16 11:22:21 --> Severity: Notice --> Undefined index: id_category C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 12
ERROR - 2020-02-16 11:22:21 --> Severity: Notice --> Undefined index: id_category C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 12
ERROR - 2020-02-16 11:22:21 --> Severity: Notice --> Undefined index: id_category C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 12
ERROR - 2020-02-16 11:22:21 --> Severity: Notice --> Undefined index: id_category C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 12
ERROR - 2020-02-16 11:22:21 --> Severity: Notice --> Undefined index: id_category C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 12
ERROR - 2020-02-16 11:22:21 --> Severity: Notice --> Undefined index: id_category C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 12
ERROR - 2020-02-16 11:22:21 --> Severity: Notice --> Undefined index: id_category C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 12
ERROR - 2020-02-16 11:22:21 --> Severity: Notice --> Undefined index: id_category C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 12
ERROR - 2020-02-16 11:23:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;id_category&quot; does not exist
LINE 2:    (select id_category from master_pertanyaan_sat where kode...
                   ^
HINT:  Perhaps you meant to reference the column &quot;master_pertanyaan_sat.id_kategori&quot;. C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-16 11:23:18 --> Query error: ERROR:  column "id_category" does not exist
LINE 2:    (select id_category from master_pertanyaan_sat where kode...
                   ^
HINT:  Perhaps you meant to reference the column "master_pertanyaan_sat.id_kategori". - Invalid query: select *,(select nama from master_pertanyaan_sat where kode=sat_d.id_q) as pertanyaan,
			(select id_category from master_pertanyaan_sat where kode=sat_d.id_q) as id_category
			 from sat_detail as sat_d where id_sat=122
ERROR - 2020-02-16 11:23:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;id_kategory&quot; does not exist
LINE 2:    (select id_kategory from master_pertanyaan_sat where kode...
                   ^
HINT:  Perhaps you meant to reference the column &quot;master_pertanyaan_sat.id_kategori&quot;. C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-16 11:23:27 --> Query error: ERROR:  column "id_kategory" does not exist
LINE 2:    (select id_kategory from master_pertanyaan_sat where kode...
                   ^
HINT:  Perhaps you meant to reference the column "master_pertanyaan_sat.id_kategori". - Invalid query: select *,(select nama from master_pertanyaan_sat where kode=sat_d.id_q) as pertanyaan,
			(select id_kategory from master_pertanyaan_sat where kode=sat_d.id_q) as id_category
			 from sat_detail as sat_d where id_sat=122
ERROR - 2020-02-16 11:23:54 --> Severity: error --> Exception: syntax error, unexpected 'return' (T_RETURN) C:\xampp\htdocs\nws\application\controllers\h-pdam\Sat.php 18
ERROR - 2020-02-16 11:25:25 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:25 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:25 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:25:25 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:25:25 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:25 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:25 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:25:25 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:25:25 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:25 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:25 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:25:25 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:25:25 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:25 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:25 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:25:25 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:25:25 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:25 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:25 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:25:25 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:25:25 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:25 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:25 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:25:25 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:25:25 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:25 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:25 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:25:25 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:25:25 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:25 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:25 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:25:25 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:25:25 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:25 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:25 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:25:25 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:25:25 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:25 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:25 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:25:25 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:25:25 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:25 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:25 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:25:25 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:25:26 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:26 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:26 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:25:26 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:25:26 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:26 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:26 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:25:26 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:25:26 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:26 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:26 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:25:26 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:25:26 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:26 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:26 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:25:26 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:25:26 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:26 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:26 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:25:26 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:25:26 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:26 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:26 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:25:26 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:25:26 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:26 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:26 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:25:26 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:25:26 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:26 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:26 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:25:26 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:25:26 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:26 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:26 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:25:26 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:25:26 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:26 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:26 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:25:26 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:25:26 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:26 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:26 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:25:26 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:25:26 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:26 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:26 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:25:26 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:25:26 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:26 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:26 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:25:26 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:25:26 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:26 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:26 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:25:26 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:25:26 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:26 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:26 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:25:26 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:25:26 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:26 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:26 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:25:26 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:25:26 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:26 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:26 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:25:26 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:25:27 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:27 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:27 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:25:27 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:25:27 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:27 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:27 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:25:27 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:25:27 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:27 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:27 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:25:27 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:25:27 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:27 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:27 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:25:27 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:25:27 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:27 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:27 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:25:27 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:25:27 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:27 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:27 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:25:27 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:25:27 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:27 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:27 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:25:27 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:25:27 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:27 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:27 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:25:27 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:25:27 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:27 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:27 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:25:27 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:25:27 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:27 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:27 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:25:27 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:25:27 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:27 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:27 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:25:27 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:25:27 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:27 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:27 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:25:27 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:25:27 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:27 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:27 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:25:27 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:25:27 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:27 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:27 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:25:27 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:25:27 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:27 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:27 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:25:27 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:25:27 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:27 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:28 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:25:28 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:25:28 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:28 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:28 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:25:28 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:25:28 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:28 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:28 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:25:28 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:25:28 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:28 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:28 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:25:28 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:25:28 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:28 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:28 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:25:28 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:25:28 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:28 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:28 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:25:28 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:25:28 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:28 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:28 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:25:28 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:25:28 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:28 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:28 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:25:28 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:25:28 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:28 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:28 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:25:28 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:25:28 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:28 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:25:28 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:25:28 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:30:13 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:13 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:13 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:30:13 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:30:13 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:13 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:13 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:30:13 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:30:13 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:13 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:13 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:30:13 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:30:13 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:13 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:13 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:30:13 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:30:13 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:13 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:13 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:30:13 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:30:13 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:13 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:13 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:30:13 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:30:13 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:13 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:13 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:30:13 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:30:13 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:13 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:13 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:30:13 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:30:13 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:13 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:13 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:30:13 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:30:13 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:14 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:14 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:30:14 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:30:14 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:14 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:14 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:30:14 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:30:14 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:14 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:14 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:30:14 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:30:14 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:14 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:14 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:30:14 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:30:14 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:14 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:14 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:30:14 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:30:14 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:14 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:14 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:30:14 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:30:14 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:14 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:14 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:30:14 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:30:14 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:14 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:14 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:30:14 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:30:14 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:14 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:14 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:30:14 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:30:14 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:14 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:14 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:30:14 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:30:14 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:14 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:14 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:30:14 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:30:14 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:14 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:14 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:30:14 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:30:14 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:14 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:14 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:30:14 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:30:14 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:14 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:14 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:30:14 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:30:14 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:14 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:14 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:30:14 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:30:14 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:14 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:14 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:30:15 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:30:15 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:15 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:15 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:30:15 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:30:15 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:15 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:15 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:30:15 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:30:15 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:15 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:15 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:30:15 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:30:15 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:15 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:15 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:30:15 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:30:15 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:15 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:15 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:30:15 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:30:15 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:15 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:15 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:30:15 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:30:15 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:15 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:15 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:30:15 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:30:15 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:15 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:15 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:30:15 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:30:15 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:15 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:15 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:30:15 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:30:15 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:15 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:15 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:30:15 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:30:15 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:15 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:15 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:30:15 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:30:15 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:15 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:15 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:30:15 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:30:15 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:15 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:15 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:30:15 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:30:15 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:15 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:15 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:30:15 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:30:15 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:15 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:15 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:30:15 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:30:15 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:15 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:16 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:30:16 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:30:16 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:16 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:16 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:30:16 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:30:16 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:16 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:16 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:30:16 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:30:16 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:16 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:16 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:30:16 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:30:16 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:16 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:16 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:30:16 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:30:16 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:16 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:16 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:30:16 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:30:16 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:16 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:16 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:30:16 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:30:16 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:16 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:16 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:30:16 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:30:16 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:16 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:16 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:30:16 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:30:16 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:16 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:16 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:30:16 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:30:16 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:16 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:16 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:30:16 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:30:16 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:16 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:16 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:30:16 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:30:16 --> Severity: Notice --> Undefined index: id_q C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:16 --> Severity: Notice --> Undefined index: pertanyaan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 56
ERROR - 2020-02-16 11:30:16 --> Severity: Notice --> Undefined index: nilai C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 57
ERROR - 2020-02-16 11:30:16 --> Severity: Notice --> Undefined index: satuan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 58
ERROR - 2020-02-16 11:31:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;as&quot;
LINE 4:     as sat_d where sat_d.id_sat=122
            ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-16 11:31:07 --> Query error: ERROR:  syntax error at or near "as"
LINE 4:     as sat_d where sat_d.id_sat=122
            ^ - Invalid query: select sat_d.*,p.nama as pertanyaan,p.id_kategori,(select nama from master_kategori_pertanyaan_sat where id = p.id_kategori) as kategori
			 from sat_detail 
			 left join master_pertanyaan_sat as p on kode = sat_d.id_q
			 as sat_d where sat_d.id_sat=122
ERROR - 2020-02-16 11:31:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;as&quot;
LINE 4:     as sat_d where sat_d.id_sat=122
            ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-16 11:31:40 --> Query error: ERROR:  syntax error at or near "as"
LINE 4:     as sat_d where sat_d.id_sat=122
            ^ - Invalid query: select sat_d.*,p.nama as pertanyaan,p.id_kategori,(select c.nama from master_kategori_pertanyaan_sat as c where c.id = p.id_kategori) as kategori
			 from sat_detail 
			 left join master_pertanyaan_sat as p on kode = sat_d.id_q
			 as sat_d where sat_d.id_sat=122
ERROR - 2020-02-16 11:44:01 --> Severity: Error --> Method Illuminate\View\View::__toString() must not throw an exception, caught ErrorException: syntax error, unexpected 'endforeach' (T_ENDFOREACH), expecting elseif (T_ELSEIF) or else (T_ELSE) or endif (T_ENDIF) (View: C:\xampp\htdocs\nws\application\views\pages\pdam\detail_sat.blade.php) C:\xampp\htdocs\nws\application\helpers\view_helper.php 0
ERROR - 2020-02-16 11:46:11 --> Severity: Notice --> Undefined index: keteranagan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 32
ERROR - 2020-02-16 11:46:11 --> Severity: Notice --> Undefined index: keteranagan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 32
ERROR - 2020-02-16 11:46:11 --> Severity: Notice --> Undefined index: keteranagan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 32
ERROR - 2020-02-16 11:46:12 --> Severity: Notice --> Undefined index: keteranagan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 32
ERROR - 2020-02-16 11:46:12 --> Severity: Notice --> Undefined index: keteranagan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 32
ERROR - 2020-02-16 11:46:12 --> Severity: Notice --> Undefined index: keteranagan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 32
ERROR - 2020-02-16 11:46:12 --> Severity: Notice --> Undefined index: keteranagan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 32
ERROR - 2020-02-16 11:46:12 --> Severity: Notice --> Undefined index: keteranagan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 32
ERROR - 2020-02-16 11:46:12 --> Severity: Notice --> Undefined index: keteranagan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 32
ERROR - 2020-02-16 11:46:12 --> Severity: Notice --> Undefined index: keteranagan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 32
ERROR - 2020-02-16 11:46:12 --> Severity: Notice --> Undefined index: keteranagan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 32
ERROR - 2020-02-16 11:46:12 --> Severity: Notice --> Undefined index: keteranagan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 32
ERROR - 2020-02-16 11:46:12 --> Severity: Notice --> Undefined index: keteranagan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 32
ERROR - 2020-02-16 11:46:12 --> Severity: Notice --> Undefined index: keteranagan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 32
ERROR - 2020-02-16 11:46:12 --> Severity: Notice --> Undefined index: keteranagan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 32
ERROR - 2020-02-16 11:46:12 --> Severity: Notice --> Undefined index: keteranagan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 32
ERROR - 2020-02-16 11:46:12 --> Severity: Notice --> Undefined index: keteranagan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 32
ERROR - 2020-02-16 11:46:12 --> Severity: Notice --> Undefined index: keteranagan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 32
ERROR - 2020-02-16 11:46:12 --> Severity: Notice --> Undefined index: keteranagan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 32
ERROR - 2020-02-16 11:46:12 --> Severity: Notice --> Undefined index: keteranagan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 32
ERROR - 2020-02-16 11:46:12 --> Severity: Notice --> Undefined index: keteranagan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 32
ERROR - 2020-02-16 11:46:12 --> Severity: Notice --> Undefined index: keteranagan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 32
ERROR - 2020-02-16 11:46:12 --> Severity: Notice --> Undefined index: keteranagan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 32
ERROR - 2020-02-16 11:46:12 --> Severity: Notice --> Undefined index: keteranagan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 32
ERROR - 2020-02-16 11:46:12 --> Severity: Notice --> Undefined index: keteranagan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 32
ERROR - 2020-02-16 11:46:12 --> Severity: Notice --> Undefined index: keteranagan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 32
ERROR - 2020-02-16 11:46:12 --> Severity: Notice --> Undefined index: keteranagan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 32
ERROR - 2020-02-16 11:46:12 --> Severity: Notice --> Undefined index: keteranagan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 32
ERROR - 2020-02-16 11:46:12 --> Severity: Notice --> Undefined index: keteranagan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 32
ERROR - 2020-02-16 11:46:12 --> Severity: Notice --> Undefined index: keteranagan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 32
ERROR - 2020-02-16 11:46:12 --> Severity: Notice --> Undefined index: keteranagan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 32
ERROR - 2020-02-16 11:46:12 --> Severity: Notice --> Undefined index: keteranagan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 32
ERROR - 2020-02-16 11:46:12 --> Severity: Notice --> Undefined index: keteranagan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 32
ERROR - 2020-02-16 11:46:12 --> Severity: Notice --> Undefined index: keteranagan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 32
ERROR - 2020-02-16 11:46:12 --> Severity: Notice --> Undefined index: keteranagan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 32
ERROR - 2020-02-16 11:46:12 --> Severity: Notice --> Undefined index: keteranagan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 32
ERROR - 2020-02-16 11:46:12 --> Severity: Notice --> Undefined index: keteranagan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 32
ERROR - 2020-02-16 11:46:12 --> Severity: Notice --> Undefined index: keteranagan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 32
ERROR - 2020-02-16 11:46:12 --> Severity: Notice --> Undefined index: keteranagan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 32
ERROR - 2020-02-16 11:46:12 --> Severity: Notice --> Undefined index: keteranagan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 32
ERROR - 2020-02-16 11:46:12 --> Severity: Notice --> Undefined index: keteranagan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 32
ERROR - 2020-02-16 11:46:12 --> Severity: Notice --> Undefined index: keteranagan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 32
ERROR - 2020-02-16 11:46:12 --> Severity: Notice --> Undefined index: keteranagan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 32
ERROR - 2020-02-16 11:46:12 --> Severity: Notice --> Undefined index: keteranagan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 32
ERROR - 2020-02-16 11:46:12 --> Severity: Notice --> Undefined index: keteranagan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 32
ERROR - 2020-02-16 11:46:12 --> Severity: Notice --> Undefined index: keteranagan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 32
ERROR - 2020-02-16 11:46:12 --> Severity: Notice --> Undefined index: keteranagan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 32
ERROR - 2020-02-16 11:46:12 --> Severity: Notice --> Undefined index: keteranagan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 32
ERROR - 2020-02-16 11:46:12 --> Severity: Notice --> Undefined index: keteranagan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 32
ERROR - 2020-02-16 11:46:12 --> Severity: Notice --> Undefined index: keteranagan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 32
ERROR - 2020-02-16 11:46:12 --> Severity: Notice --> Undefined index: keteranagan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 32
ERROR - 2020-02-16 11:46:12 --> Severity: Notice --> Undefined index: keteranagan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 32
ERROR - 2020-02-16 11:46:12 --> Severity: Notice --> Undefined index: keteranagan C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 32
ERROR - 2020-02-16 12:00:07 --> Severity: Warning --> Use of undefined constant flase - assumed 'flase' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 37
ERROR - 2020-02-16 12:00:07 --> Severity: Warning --> Use of undefined constant flase - assumed 'flase' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 37
ERROR - 2020-02-16 12:00:07 --> Severity: Warning --> Use of undefined constant flase - assumed 'flase' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 37
ERROR - 2020-02-16 12:00:07 --> Severity: Warning --> Use of undefined constant flase - assumed 'flase' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 37
ERROR - 2020-02-16 12:00:07 --> Severity: Warning --> Use of undefined constant flase - assumed 'flase' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 37
ERROR - 2020-02-16 12:00:07 --> Severity: Warning --> Use of undefined constant flase - assumed 'flase' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 37
ERROR - 2020-02-16 12:00:07 --> Severity: Warning --> Use of undefined constant flase - assumed 'flase' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 37
ERROR - 2020-02-16 12:00:07 --> Severity: Warning --> Use of undefined constant flase - assumed 'flase' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 37
ERROR - 2020-02-16 12:00:07 --> Severity: Warning --> Use of undefined constant flase - assumed 'flase' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 37
ERROR - 2020-02-16 12:00:07 --> Severity: Warning --> Use of undefined constant flase - assumed 'flase' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 37
ERROR - 2020-02-16 12:00:07 --> Severity: Warning --> Use of undefined constant flase - assumed 'flase' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 37
ERROR - 2020-02-16 12:00:07 --> Severity: Warning --> Use of undefined constant flase - assumed 'flase' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 37
ERROR - 2020-02-16 12:00:07 --> Severity: Warning --> Use of undefined constant flase - assumed 'flase' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 37
ERROR - 2020-02-16 12:00:07 --> Severity: Warning --> Use of undefined constant flase - assumed 'flase' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 37
ERROR - 2020-02-16 12:00:07 --> Severity: Warning --> Use of undefined constant flase - assumed 'flase' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 37
ERROR - 2020-02-16 12:00:07 --> Severity: Warning --> Use of undefined constant flase - assumed 'flase' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 37
ERROR - 2020-02-16 12:00:07 --> Severity: Warning --> Use of undefined constant flase - assumed 'flase' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 37
ERROR - 2020-02-16 12:00:07 --> Severity: Warning --> Use of undefined constant flase - assumed 'flase' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 37
ERROR - 2020-02-16 12:00:07 --> Severity: Warning --> Use of undefined constant flase - assumed 'flase' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 37
ERROR - 2020-02-16 12:00:07 --> Severity: Warning --> Use of undefined constant flase - assumed 'flase' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 37
ERROR - 2020-02-16 12:00:07 --> Severity: Warning --> Use of undefined constant flase - assumed 'flase' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 37
ERROR - 2020-02-16 12:00:07 --> Severity: Warning --> Use of undefined constant flase - assumed 'flase' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 37
ERROR - 2020-02-16 12:00:07 --> Severity: Warning --> Use of undefined constant flase - assumed 'flase' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 37
ERROR - 2020-02-16 12:00:07 --> Severity: Warning --> Use of undefined constant flase - assumed 'flase' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 37
ERROR - 2020-02-16 12:00:07 --> Severity: Warning --> Use of undefined constant flase - assumed 'flase' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 37
ERROR - 2020-02-16 12:00:07 --> Severity: Warning --> Use of undefined constant flase - assumed 'flase' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 37
ERROR - 2020-02-16 12:00:07 --> Severity: Warning --> Use of undefined constant flase - assumed 'flase' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 37
ERROR - 2020-02-16 12:00:07 --> Severity: Warning --> Use of undefined constant flase - assumed 'flase' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 37
ERROR - 2020-02-16 12:00:07 --> Severity: Warning --> Use of undefined constant flase - assumed 'flase' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 37
ERROR - 2020-02-16 12:00:07 --> Severity: Warning --> Use of undefined constant flase - assumed 'flase' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 37
ERROR - 2020-02-16 12:00:07 --> Severity: Warning --> Use of undefined constant flase - assumed 'flase' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 37
ERROR - 2020-02-16 12:00:07 --> Severity: Warning --> Use of undefined constant flase - assumed 'flase' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 37
ERROR - 2020-02-16 12:00:07 --> Severity: Warning --> Use of undefined constant flase - assumed 'flase' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 37
ERROR - 2020-02-16 12:00:07 --> Severity: Warning --> Use of undefined constant flase - assumed 'flase' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 37
ERROR - 2020-02-16 12:00:07 --> Severity: Warning --> Use of undefined constant flase - assumed 'flase' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 37
ERROR - 2020-02-16 12:00:07 --> Severity: Warning --> Use of undefined constant flase - assumed 'flase' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 37
ERROR - 2020-02-16 12:00:07 --> Severity: Warning --> Use of undefined constant flase - assumed 'flase' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 37
ERROR - 2020-02-16 12:00:07 --> Severity: Warning --> Use of undefined constant flase - assumed 'flase' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 37
ERROR - 2020-02-16 12:00:07 --> Severity: Warning --> Use of undefined constant flase - assumed 'flase' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 37
ERROR - 2020-02-16 12:00:07 --> Severity: Warning --> Use of undefined constant flase - assumed 'flase' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 37
ERROR - 2020-02-16 12:00:07 --> Severity: Warning --> Use of undefined constant flase - assumed 'flase' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 37
ERROR - 2020-02-16 12:00:07 --> Severity: Warning --> Use of undefined constant flase - assumed 'flase' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 37
ERROR - 2020-02-16 12:00:07 --> Severity: Warning --> Use of undefined constant flase - assumed 'flase' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 37
ERROR - 2020-02-16 12:00:08 --> Severity: Warning --> Use of undefined constant flase - assumed 'flase' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 37
ERROR - 2020-02-16 12:00:08 --> Severity: Warning --> Use of undefined constant flase - assumed 'flase' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 37
ERROR - 2020-02-16 12:00:08 --> Severity: Warning --> Use of undefined constant flase - assumed 'flase' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 37
ERROR - 2020-02-16 12:00:08 --> Severity: Warning --> Use of undefined constant flase - assumed 'flase' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 37
ERROR - 2020-02-16 12:00:08 --> Severity: Warning --> Use of undefined constant flase - assumed 'flase' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 37
ERROR - 2020-02-16 12:00:08 --> Severity: Warning --> Use of undefined constant flase - assumed 'flase' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 37
ERROR - 2020-02-16 12:00:08 --> Severity: Warning --> Use of undefined constant flase - assumed 'flase' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 37
ERROR - 2020-02-16 12:00:08 --> Severity: Warning --> Use of undefined constant flase - assumed 'flase' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\28d4bbb348c119653d30c3b2f87e086f8d0b2998.php 37
ERROR - 2020-02-16 15:19:22 --> Severity: Notice --> Undefined property: stdClass::$username C:\xampp\htdocs\nws\application\controllers\Login.php 32
ERROR - 2020-02-16 15:19:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;provinsi&quot; does not exist
LINE 17:       from provinsi as p
                    ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-16 15:19:50 --> Query error: ERROR:  relation "provinsi" does not exist
LINE 17:       from provinsi as p
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
     	
     sum(a.anggaran) as data_Total_Anggaran_kegiatan,
     sum(t.total_anggaran) as data_anggaran_daerah,

     CASE WHEN (sum(t.total_anggaran) is NULL) THEN 100 ELSE SUM(a.anggaran)*100 /sum(t.total_anggaran)  END  as data_Persentase_anggaran_kegiatan
      from provinsi as p
       join program_kegiatan_sipd2 as a on a.kode_daerah ILIKE p.id_provinsi || '%' 
        join total_anggaran as t on t.tahun = a.tahun and  t.kodepemda ILIKE p.id_provinsi || '%' 

        where  a.tag_air_minum  =  true
      group by p.id_provinsi order by sum(a.anggaran) desc
    
ERROR - 2020-02-16 15:19:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;program_kegiatan_sipd2&quot; does not exist
LINE 16:       join program_kegiatan_sipd2 as  a on a.id_urusan = p.i...
                    ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-16 15:19:50 --> Query error: ERROR:  relation "program_kegiatan_sipd2" does not exist
LINE 16:       join program_kegiatan_sipd2 as  a on a.id_urusan = p.i...
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
     sum(a.anggaran) as data_Total_Anggaran_kegiatan
      
      from master_urusan as p
      join program_kegiatan_sipd2 as  a on a.id_urusan = p.id 
       where  a.kode_kegiatan  is not  null and  a.tag_air_minum  =  true 
      group by p.id  order by sum(a.anggaran) desc

    
ERROR - 2020-02-16 15:19:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;view_daerah&quot; does not exist
LINE 1: select * from view_daerah  where id in ('1207','1373','1472'...
                      ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-16 15:19:52 --> Query error: ERROR:  relation "view_daerah" does not exist
LINE 1: select * from view_daerah  where id in ('1207','1373','1472'...
                      ^ - Invalid query: select * from view_daerah  where id in ('1207','1373','1472','1403','1709','3202','3311','3572','3524','3502','6301','7172')
ERROR - 2020-02-16 16:00:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;form&quot;
LINE 1: select * form  pdam_profile where kordinate is not null
                 ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-16 16:00:54 --> Query error: ERROR:  syntax error at or near "form"
LINE 1: select * form  pdam_profile where kordinate is not null
                 ^ - Invalid query: select * form  pdam_profile where kordinate is not null
ERROR - 2020-02-16 16:01:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;kordinate&quot; does not exist
LINE 1: select * from  pdam_profile where kordinate is not null
                                          ^
HINT:  Perhaps you meant to reference the column &quot;pdam_profile.kordinat&quot;. C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-16 16:01:04 --> Query error: ERROR:  column "kordinate" does not exist
LINE 1: select * from  pdam_profile where kordinate is not null
                                          ^
HINT:  Perhaps you meant to reference the column "pdam_profile.kordinat". - Invalid query: select * from  pdam_profile where kordinate is not null
ERROR - 2020-02-16 16:01:26 --> Severity: Notice --> Undefined variable: pdam_db C:\xampp\htdocs\nws\application\controllers\Dashboard.php 32
ERROR - 2020-02-16 16:01:26 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\nws\application\controllers\Dashboard.php 32
ERROR - 2020-02-16 16:01:36 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:37 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:37 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:37 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:37 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:37 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:37 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:37 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:37 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:37 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:37 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:37 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:37 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:37 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:37 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:37 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:37 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:37 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:37 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:37 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:37 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:37 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:37 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:37 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:37 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:38 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:38 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:38 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:38 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:38 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:38 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:38 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:38 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:38 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:38 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:38 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:38 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:38 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:38 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:38 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:38 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:38 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:38 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:38 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:38 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:38 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:38 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:38 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:38 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:38 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:38 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:38 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:38 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:38 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:38 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:38 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:38 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:38 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:38 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:38 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:38 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:38 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:38 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:38 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:38 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:38 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:38 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:38 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:38 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:38 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:38 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:38 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:38 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:38 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:38 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:38 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:38 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:39 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:39 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:39 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:39 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:39 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:39 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:39 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:39 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:39 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:39 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:39 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:39 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:39 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:39 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:39 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:39 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:39 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:39 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:39 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:39 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:39 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:39 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:39 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:39 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:39 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:39 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:39 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:39 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:39 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:39 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:39 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:39 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:39 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:39 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:39 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:39 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:39 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:39 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:40 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:40 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:40 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:40 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:40 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:40 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:40 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:40 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:40 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:40 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:40 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:40 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:40 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:40 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:40 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:40 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:40 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:40 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:40 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:40 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:40 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:40 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:40 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:40 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:40 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:40 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:40 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:40 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:40 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:40 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:40 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:40 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:40 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:40 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:40 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:40 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:40 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:40 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:40 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:40 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:40 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:40 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:40 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:40 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:40 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:40 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:40 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:40 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:40 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:40 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:40 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:40 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:40 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:41 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:41 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:41 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:41 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:41 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:41 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:41 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:41 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:41 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:41 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:41 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:41 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:41 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:41 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:41 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:41 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:41 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:41 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:41 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:41 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:41 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:41 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:41 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:41 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:41 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:41 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:41 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:41 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:41 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:41 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:41 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:41 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:41 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:41 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:41 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:41 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:41 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:41 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:41 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:41 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:41 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:41 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:41 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:41 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:41 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:41 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:41 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:41 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:41 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:41 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:41 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:41 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:41 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:41 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:41 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:42 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:42 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:42 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:42 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:42 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:01:42 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:42 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:01:42 --> Severity: Notice --> Undefined index: kordinate C:\xampp\htdocs\nws\application\controllers\Dashboard.php 38
ERROR - 2020-02-16 16:02:09 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:02:09 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 37
ERROR - 2020-02-16 16:02:54 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 35
ERROR - 2020-02-16 16:02:54 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\nws\application\controllers\Dashboard.php 35
ERROR - 2020-02-16 16:04:02 --> Severity: Compile Error --> Cannot use isset() on the result of an expression (you can use "null !== expression" instead) C:\xampp\htdocs\nws\application\controllers\Dashboard.php 36
ERROR - 2020-02-16 16:04:14 --> Severity: error --> Exception: syntax error, unexpected '_' (T_STRING), expecting ')' C:\xampp\htdocs\nws\application\controllers\Dashboard.php 36
ERROR - 2020-02-16 16:05:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;''&quot;
LINE 1: ...dam_profile where kordinat is not null or kordinat is not ''
                                                                     ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-16 16:05:21 --> Query error: ERROR:  syntax error at or near "''"
LINE 1: ...dam_profile where kordinat is not null or kordinat is not ''
                                                                     ^ - Invalid query: select * from  pdam_profile where kordinat is not null or kordinat is not ''
ERROR - 2020-02-16 16:41:40 --> Severity: Warning --> Use of undefined constant is - assumed 'is' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\12cf16b23e04e7f095f9fea0a4a884411c4d1d91.php 2
ERROR - 2020-02-16 16:41:56 --> Severity: Warning --> Use of undefined constant is - assumed 'is' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\nws\application\views\cahce\12cf16b23e04e7f095f9fea0a4a884411c4d1d91.php 2
ERROR - 2020-02-16 17:23:08 --> Severity: Notice --> Undefined offset: 0 C:\xampp\htdocs\nws\application\controllers\program-kegiatan\per-daerah\Data_rkpd.php 19
ERROR - 2020-02-16 17:23:08 --> Severity: Notice --> Undefined offset: 0 C:\xampp\htdocs\nws\application\controllers\program-kegiatan\per-daerah\Data_rkpd.php 20
ERROR - 2020-02-16 17:23:08 --> Severity: Notice --> Undefined index: undefined C:\xampp\htdocs\nws\application\controllers\program-kegiatan\per-daerah\Data_rkpd.php 29
ERROR - 2020-02-16 18:53:37 --> Severity: error --> Exception: syntax error, unexpected 'break' (T_BREAK), expecting ';' C:\xampp\htdocs\nws\application\controllers\Dashboard.php 17
ERROR - 2020-02-16 18:54:01 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:02 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:02 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:02 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:02 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:02 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:02 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:02 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:02 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:02 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:02 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:02 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:02 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:02 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:02 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:02 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:02 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:02 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:02 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:02 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:02 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:02 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:02 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:02 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:02 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:02 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:02 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:02 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:02 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:02 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:02 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:02 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:02 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:02 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:02 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:02 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:02 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:02 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:02 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:02 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:02 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:02 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:02 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:02 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:02 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:02 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:02 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:02 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:02 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:02 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:03 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:03 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:03 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:03 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:03 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:03 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:03 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:03 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:03 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:03 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:03 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:03 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:03 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:03 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:03 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:03 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:03 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:03 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:03 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:03 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:03 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:03 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:03 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:03 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:03 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:31 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:31 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:31 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:32 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:32 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:32 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:32 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:32 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:32 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:32 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:32 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:32 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:32 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:32 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:32 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:32 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:32 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:32 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:32 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:32 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:32 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:32 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:32 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:32 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:32 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:32 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:32 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:32 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:32 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:32 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:32 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:32 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:32 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:32 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:32 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:32 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:32 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:32 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:32 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:32 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:32 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:32 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:32 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:32 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:32 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:32 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:32 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:32 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:32 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:33 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:33 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:33 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:33 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:33 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:33 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:33 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:33 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:33 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:33 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:33 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:33 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:33 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:33 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:33 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:33 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:33 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:33 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:33 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:33 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:33 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:33 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:33 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:33 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:33 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 18:54:33 --> Severity: Notice --> Undefined index: penilaian C:\xampp\htdocs\nws\application\controllers\Dashboard.php 76
ERROR - 2020-02-16 19:06:08 --> Severity: error --> Exception: syntax error, unexpected 'break' (T_BREAK), expecting ';' C:\xampp\htdocs\nws\application\controllers\Dashboard.php 16
