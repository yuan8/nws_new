<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-02-07 11:01:10 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  password authentication failed for user &quot;production_nuwas&quot; C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 154
ERROR - 2020-02-07 11:01:10 --> Unable to connect to the database
ERROR - 2020-02-07 11:01:53 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  password authentication failed for user &quot;postgre&quot; C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 154
ERROR - 2020-02-07 11:01:53 --> Unable to connect to the database
ERROR - 2020-02-07 11:02:13 --> Severity: Notice --> Undefined property: stdClass::$username C:\xampp\htdocs\nws\application\controllers\Login.php 32
ERROR - 2020-02-07 11:02:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;program_kegiatan_sipd2&quot; does not exist
LINE 1: ...h_kegiatan, sum(anggaran) as jumlah_anggaran from program_ke...
                                                             ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-07 11:02:14 --> Query error: ERROR:  relation "program_kegiatan_sipd2" does not exist
LINE 1: ...h_kegiatan, sum(anggaran) as jumlah_anggaran from program_ke...
                                                             ^ - Invalid query: select count(*) jumlah_kegiatan, sum(anggaran) as jumlah_anggaran from program_kegiatan_sipd2 where tag_air_minum = true and  tahun=2020
ERROR - 2020-02-07 11:03:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;data_sat&quot; does not exist
LINE 1: select count(*) jumlah_pdam from data_sat where tahun=2020
                                         ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-07 11:03:30 --> Query error: ERROR:  relation "data_sat" does not exist
LINE 1: select count(*) jumlah_pdam from data_sat where tahun=2020
                                         ^ - Invalid query: select count(*) jumlah_pdam from data_sat where tahun=2020
ERROR - 2020-02-07 11:03:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;tahun&quot; does not exist
LINE 1: select count(*) jumlah_pdam from sat where tahun=2020
                                                   ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-07 11:03:41 --> Query error: ERROR:  column "tahun" does not exist
LINE 1: select count(*) jumlah_pdam from sat where tahun=2020
                                                   ^ - Invalid query: select count(*) jumlah_pdam from sat where tahun=2020
ERROR - 2020-02-07 11:07:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;program_kegiatan_sipd2&quot; does not exist
LINE 15:       join program_kegiatan_sipd2 as  a on a.id_urusan = p.i...
                    ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-07 11:07:50 --> Query error: ERROR:  relation "program_kegiatan_sipd2" does not exist
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

    
ERROR - 2020-02-07 11:07:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;provinsi&quot; does not exist
LINE 12: ...unt(a.kode_kegiatan) as data_jumlah_kegiatan from provinsi a...
                                                              ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-07 11:07:50 --> Query error: ERROR:  relation "provinsi" does not exist
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
    
ERROR - 2020-02-07 11:07:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;view_daerah&quot; does not exist
LINE 1: select * from view_daerah 
                      ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-07 11:07:52 --> Query error: ERROR:  relation "view_daerah" does not exist
LINE 1: select * from view_daerah 
                      ^ - Invalid query: select * from view_daerah 
ERROR - 2020-02-07 11:07:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;view_daerah&quot; does not exist
LINE 1: select * from view_daerah 
                      ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-07 11:07:57 --> Query error: ERROR:  relation "view_daerah" does not exist
LINE 1: select * from view_daerah 
                      ^ - Invalid query: select * from view_daerah 
ERROR - 2020-02-07 11:11:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;program_kegiatan_sipd2&quot; does not exist
LINE 16:       join program_kegiatan_sipd2 as  a on a.id_urusan = p.i...
                    ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-07 11:11:29 --> Query error: ERROR:  relation "program_kegiatan_sipd2" does not exist
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

    
ERROR - 2020-02-07 11:11:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;provinsi&quot; does not exist
LINE 17:       from provinsi as p
                    ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-07 11:11:29 --> Query error: ERROR:  relation "provinsi" does not exist
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
    
ERROR - 2020-02-07 11:11:31 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;public.data_input&quot; does not exist
LINE 1: select i.* from (select max(id) as id from public.data_input...
                                                   ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-07 11:11:31 --> Query error: ERROR:  relation "public.data_input" does not exist
LINE 1: select i.* from (select max(id) as id from public.data_input...
                                                   ^ - Invalid query: select i.* from (select max(id) as id from public.data_input group by kode_daerah order by max(tanggal) DESC
  )as k
  join public.data_input as i on i.id = k.id  order by i.tahun DESC
ERROR - 2020-02-07 11:11:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;program_kegiatan_sipd2&quot; does not exist
LINE 16:       join program_kegiatan_sipd2 as  a on a.id_urusan = p.i...
                    ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-07 11:11:34 --> Query error: ERROR:  relation "program_kegiatan_sipd2" does not exist
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

    
ERROR - 2020-02-07 11:11:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;provinsi&quot; does not exist
LINE 17:       from provinsi as p
                    ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-07 11:11:34 --> Query error: ERROR:  relation "provinsi" does not exist
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
    
ERROR - 2020-02-07 11:12:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;public.data_input&quot; does not exist
LINE 1: select i.* from (select max(id) as id from public.data_input...
                                                   ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-07 11:12:18 --> Query error: ERROR:  relation "public.data_input" does not exist
LINE 1: select i.* from (select max(id) as id from public.data_input...
                                                   ^ - Invalid query: select i.* from (select max(id) as id from public.data_input group by kode_daerah order by max(tanggal) DESC
  )as k
  join public.data_input as i on i.id = k.id  order by i.tahun DESC
ERROR - 2020-02-07 11:13:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;provinsi&quot; does not exist
LINE 17:       from provinsi as p
                    ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-07 11:13:51 --> Query error: ERROR:  relation "provinsi" does not exist
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
    
ERROR - 2020-02-07 11:13:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;program_kegiatan_sipd2&quot; does not exist
LINE 16:       join program_kegiatan_sipd2 as  a on a.id_urusan = p.i...
                    ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-07 11:13:51 --> Query error: ERROR:  relation "program_kegiatan_sipd2" does not exist
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

    
ERROR - 2020-02-07 11:16:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;provinsi&quot; does not exist
LINE 12: ...unt(a.kode_kegiatan) as data_jumlah_kegiatan from provinsi a...
                                                              ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-07 11:16:09 --> Query error: ERROR:  relation "provinsi" does not exist
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
    
ERROR - 2020-02-07 11:16:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;program_kegiatan_sipd2&quot; does not exist
LINE 15:       join program_kegiatan_sipd2 as  a on a.id_urusan = p.i...
                    ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-07 11:16:09 --> Query error: ERROR:  relation "program_kegiatan_sipd2" does not exist
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

    
ERROR - 2020-02-07 11:16:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;program_kegiatan_sipd2&quot; does not exist
LINE 15:       join program_kegiatan_sipd2 as  a on a.id_urusan = p.i...
                    ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-07 11:16:13 --> Query error: ERROR:  relation "program_kegiatan_sipd2" does not exist
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

    
ERROR - 2020-02-07 11:16:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;provinsi&quot; does not exist
LINE 12: ...unt(a.kode_kegiatan) as data_jumlah_kegiatan from provinsi a...
                                                              ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-07 11:16:13 --> Query error: ERROR:  relation "provinsi" does not exist
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
    
ERROR - 2020-02-07 11:16:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;provinsi&quot; does not exist
LINE 12: ...unt(a.kode_kegiatan) as data_jumlah_kegiatan from provinsi a...
                                                              ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-07 11:16:16 --> Query error: ERROR:  relation "provinsi" does not exist
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
    
ERROR - 2020-02-07 11:16:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;program_kegiatan_sipd2&quot; does not exist
LINE 15:       join program_kegiatan_sipd2 as  a on a.id_urusan = p.i...
                    ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-07 11:16:16 --> Query error: ERROR:  relation "program_kegiatan_sipd2" does not exist
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

    
ERROR - 2020-02-07 11:16:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;view_daerah&quot; does not exist
LINE 1: select * from view_daerah  where id in ('1207','1373','1472'...
                      ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-07 11:16:34 --> Query error: ERROR:  relation "view_daerah" does not exist
LINE 1: select * from view_daerah  where id in ('1207','1373','1472'...
                      ^ - Invalid query: select * from view_daerah  where id in ('1207','1373','1472','1403','1709','3202','3311','3572','3524','3502','6301','7172')
ERROR - 2020-02-07 11:16:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;provinsi&quot; does not exist
LINE 12: ...unt(a.kode_kegiatan) as data_jumlah_kegiatan from provinsi a...
                                                              ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-07 11:16:38 --> Query error: ERROR:  relation "provinsi" does not exist
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
    
ERROR - 2020-02-07 11:16:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;program_kegiatan_sipd2&quot; does not exist
LINE 15:       join program_kegiatan_sipd2 as  a on a.id_urusan = p.i...
                    ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-07 11:16:38 --> Query error: ERROR:  relation "program_kegiatan_sipd2" does not exist
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

    
ERROR - 2020-02-07 11:20:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;provinsi&quot; does not exist
LINE 12: ...unt(a.kode_kegiatan) as data_jumlah_kegiatan from provinsi a...
                                                              ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-07 11:20:19 --> Query error: ERROR:  relation "provinsi" does not exist
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
    
ERROR - 2020-02-07 11:20:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;program_kegiatan_sipd2&quot; does not exist
LINE 15:       join program_kegiatan_sipd2 as  a on a.id_urusan = p.i...
                    ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-07 11:20:19 --> Query error: ERROR:  relation "program_kegiatan_sipd2" does not exist
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

    
ERROR - 2020-02-07 11:41:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;provinsi&quot; does not exist
LINE 12: ...unt(a.kode_kegiatan) as data_jumlah_kegiatan from provinsi a...
                                                              ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-07 11:41:49 --> Query error: ERROR:  relation "provinsi" does not exist
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
    
ERROR - 2020-02-07 11:41:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;program_kegiatan_sipd2&quot; does not exist
LINE 15:       join program_kegiatan_sipd2 as  a on a.id_urusan = p.i...
                    ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-07 11:41:49 --> Query error: ERROR:  relation "program_kegiatan_sipd2" does not exist
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

    
ERROR - 2020-02-07 11:47:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;program_kegiatan_sipd2&quot; does not exist
LINE 15:       join program_kegiatan_sipd2 as  a on a.id_urusan = p.i...
                    ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-07 11:47:36 --> Query error: ERROR:  relation "program_kegiatan_sipd2" does not exist
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

    
ERROR - 2020-02-07 11:47:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;provinsi&quot; does not exist
LINE 12: ...unt(a.kode_kegiatan) as data_jumlah_kegiatan from provinsi a...
                                                              ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-07 11:47:36 --> Query error: ERROR:  relation "provinsi" does not exist
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
    
ERROR - 2020-02-07 11:48:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;provinsi&quot; does not exist
LINE 12: ...unt(a.kode_kegiatan) as data_jumlah_kegiatan from provinsi a...
                                                              ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-07 11:48:42 --> Query error: ERROR:  relation "provinsi" does not exist
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
    
ERROR - 2020-02-07 11:48:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;program_kegiatan_sipd2&quot; does not exist
LINE 15:       join program_kegiatan_sipd2 as  a on a.id_urusan = p.i...
                    ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-07 11:48:42 --> Query error: ERROR:  relation "program_kegiatan_sipd2" does not exist
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

    
ERROR - 2020-02-07 11:48:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;program_kegiatan_sipd2&quot; does not exist
LINE 15:       join program_kegiatan_sipd2 as  a on a.id_urusan = p.i...
                    ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-07 11:48:49 --> Query error: ERROR:  relation "program_kegiatan_sipd2" does not exist
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

    
ERROR - 2020-02-07 11:48:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;provinsi&quot; does not exist
LINE 12: ...unt(a.kode_kegiatan) as data_jumlah_kegiatan from provinsi a...
                                                              ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-07 11:48:49 --> Query error: ERROR:  relation "provinsi" does not exist
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
    
ERROR - 2020-02-07 11:48:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;program_kegiatan_sipd2&quot; does not exist
LINE 15:       join program_kegiatan_sipd2 as  a on a.id_urusan = p.i...
                    ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-07 11:48:52 --> Query error: ERROR:  relation "program_kegiatan_sipd2" does not exist
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

    
ERROR - 2020-02-07 11:48:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;provinsi&quot; does not exist
LINE 12: ...unt(a.kode_kegiatan) as data_jumlah_kegiatan from provinsi a...
                                                              ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-07 11:48:52 --> Query error: ERROR:  relation "provinsi" does not exist
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
    
ERROR - 2020-02-07 12:02:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;program_kegiatan_sipd2&quot; does not exist
LINE 15:       join program_kegiatan_sipd2 as  a on a.id_urusan = p.i...
                    ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-07 12:02:15 --> Query error: ERROR:  relation "program_kegiatan_sipd2" does not exist
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

    
ERROR - 2020-02-07 12:02:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;provinsi&quot; does not exist
LINE 12: ...unt(a.kode_kegiatan) as data_jumlah_kegiatan from provinsi a...
                                                              ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-07 12:02:15 --> Query error: ERROR:  relation "provinsi" does not exist
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
    
ERROR - 2020-02-07 12:02:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;view_daerah&quot; does not exist
LINE 1: select * from view_daerah 
                      ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-07 12:02:18 --> Query error: ERROR:  relation "view_daerah" does not exist
LINE 1: select * from view_daerah 
                      ^ - Invalid query: select * from view_daerah 
ERROR - 2020-02-07 12:29:07 --> Severity: Notice --> Undefined property: stdClass::$username C:\xampp\htdocs\nws\application\controllers\Login.php 32
ERROR - 2020-02-07 12:30:39 --> Severity: Notice --> Undefined property: Illuminate\View\Engines\CompilerEngine::$session C:\xampp\htdocs\nws\application\views\cahce\1aba9dd8cb3ce43837d78391c827f479df57eb25.php 165
ERROR - 2020-02-07 12:30:39 --> Severity: Error --> Method Illuminate\View\View::__toString() must not throw an exception, caught ErrorException: Call to a member function userdata() on null (View: C:\xampp\htdocs\nws\application\views\template\admin.blade.php) (View: C:\xampp\htdocs\nws\application\views\template\admin.blade.php) C:\xampp\htdocs\nws\application\helpers\view_helper.php 0
ERROR - 2020-02-07 12:32:27 --> Severity: Error --> Method Illuminate\View\View::__toString() must not throw an exception, caught ErrorException: Call to undefined function CI() (View: C:\xampp\htdocs\nws\application\views\template\admin.blade.php) (View: C:\xampp\htdocs\nws\application\views\template\admin.blade.php) C:\xampp\htdocs\nws\application\helpers\view_helper.php 0
ERROR - 2020-02-07 12:32:29 --> Severity: Error --> Method Illuminate\View\View::__toString() must not throw an exception, caught ErrorException: Call to undefined function CI() (View: C:\xampp\htdocs\nws\application\views\template\admin.blade.php) (View: C:\xampp\htdocs\nws\application\views\template\admin.blade.php) C:\xampp\htdocs\nws\application\helpers\view_helper.php 0
ERROR - 2020-02-07 12:35:27 --> Severity: Error --> Method Illuminate\View\View::__toString() must not throw an exception, caught ErrorException: Call to undefined function CI() (View: C:\xampp\htdocs\nws\application\views\template\admin.blade.php) (View: C:\xampp\htdocs\nws\application\views\template\admin.blade.php) C:\xampp\htdocs\nws\application\helpers\view_helper.php 0
ERROR - 2020-02-07 12:35:37 --> Severity: Notice --> Undefined property: Illuminate\View\Engines\CompilerEngine::$session C:\xampp\htdocs\nws\application\views\cahce\1aba9dd8cb3ce43837d78391c827f479df57eb25.php 165
ERROR - 2020-02-07 12:35:37 --> Severity: Error --> Method Illuminate\View\View::__toString() must not throw an exception, caught ErrorException: Call to a member function userdata() on null (View: C:\xampp\htdocs\nws\application\views\template\admin.blade.php) (View: C:\xampp\htdocs\nws\application\views\template\admin.blade.php) C:\xampp\htdocs\nws\application\helpers\view_helper.php 0
ERROR - 2020-02-07 12:44:57 --> Severity: Error --> Method Illuminate\View\View::__toString() must not throw an exception, caught ErrorException: syntax error, unexpected '<' (View: C:\xampp\htdocs\nws\application\views\admin\file\rpjmd.blade.php) C:\xampp\htdocs\nws\application\helpers\view_helper.php 0
ERROR - 2020-02-07 12:52:45 --> Severity: error --> Exception: Call to undefined function reguest() C:\xampp\htdocs\nws\application\controllers\dash\file\rpjmd.php 20
ERROR - 2020-02-07 12:53:05 --> Severity: error --> Exception: Too few arguments to function request(), 0 passed in C:\xampp\htdocs\nws\application\controllers\dash\file\rpjmd.php on line 20 and exactly 1 expected C:\xampp\htdocs\nws\application\helpers\mapper_helper.php 108
ERROR - 2020-02-07 13:00:15 --> Severity: Notice --> Undefined index: file C:\xampp\htdocs\nws\application\helpers\mapper_helper.php 134
ERROR - 2020-02-07 13:00:15 --> Severity: Notice --> Undefined index: tahun C:\xampp\htdocs\nws\application\helpers\mapper_helper.php 134
ERROR - 2020-02-07 13:00:15 --> Severity: Notice --> Undefined index: tahun_selesai C:\xampp\htdocs\nws\application\helpers\mapper_helper.php 134
ERROR - 2020-02-07 13:03:21 --> Severity: Notice --> Undefined index: file C:\xampp\htdocs\nws\application\helpers\mapper_helper.php 133
ERROR - 2020-02-07 13:03:21 --> Severity: Notice --> Undefined index: tahun C:\xampp\htdocs\nws\application\helpers\mapper_helper.php 133
ERROR - 2020-02-07 13:03:21 --> Severity: Notice --> Undefined index: tahun_selesai C:\xampp\htdocs\nws\application\helpers\mapper_helper.php 133
ERROR - 2020-02-07 13:11:10 --> Severity: Notice --> Undefined index: s C:\xampp\htdocs\nws\application\helpers\mapper_helper.php 132
ERROR - 2020-02-07 13:19:09 --> Severity: error --> Exception: Call to undefined function StoragePut() C:\xampp\htdocs\nws\application\controllers\dash\file\rpjmd.php 22
ERROR - 2020-02-07 13:22:56 --> Severity: error --> Exception: Call to undefined function random() C:\xampp\htdocs\nws\application\helpers\url_bind_helper.php 21
ERROR - 2020-02-07 13:23:05 --> Severity: error --> Exception: Call to undefined function base64() C:\xampp\htdocs\nws\application\helpers\url_bind_helper.php 22
ERROR - 2020-02-07 13:23:26 --> Severity: Notice --> Undefined variable: nama_file C:\xampp\htdocs\nws\application\helpers\url_bind_helper.php 24
ERROR - 2020-02-07 13:26:18 --> Severity: Warning --> move_uploaded_file(C:\xampp\htdocs\nws\application\Storage/app//MjAyMC0wMi0wNy0wMS0yNi0wMDAwMDAtcG0tODU2.geojson): failed to open stream: No such file or directory C:\xampp\htdocs\nws\application\helpers\url_bind_helper.php 24
ERROR - 2020-02-07 13:26:18 --> Severity: Warning --> move_uploaded_file(): Unable to move 'C:\xampp\tmp\php7977.tmp' to 'C:\xampp\htdocs\nws\application\Storage/app//MjAyMC0wMi0wNy0wMS0yNi0wMDAwMDAtcG0tODU2.geojson' C:\xampp\htdocs\nws\application\helpers\url_bind_helper.php 24
ERROR - 2020-02-07 13:26:49 --> Severity: Warning --> move_uploaded_file(C:\xampp\htdocs\nws\application\Storage/app/MjAyMC0wMi0wNy0wMS0yNi0wMDAwMDAtcG0tOTM2.geojson): failed to open stream: No such file or directory C:\xampp\htdocs\nws\application\helpers\url_bind_helper.php 24
ERROR - 2020-02-07 13:26:49 --> Severity: Warning --> move_uploaded_file(): Unable to move 'C:\xampp\tmp\phpF119.tmp' to 'C:\xampp\htdocs\nws\application\Storage/app/MjAyMC0wMi0wNy0wMS0yNi0wMDAwMDAtcG0tOTM2.geojson' C:\xampp\htdocs\nws\application\helpers\url_bind_helper.php 24
ERROR - 2020-02-07 13:27:19 --> Severity: Warning --> move_uploaded_file(C:\xampp\htdocs\nws\application\Storage/app/MjAyMC0wMi0wNy0wMS0yNy0wMDAwMDAtcG0tNjQx.geojson): failed to open stream: No such file or directory C:\xampp\htdocs\nws\application\helpers\url_bind_helper.php 24
ERROR - 2020-02-07 13:27:19 --> Severity: Warning --> move_uploaded_file(): Unable to move 'C:\xampp\tmp\php67C1.tmp' to 'C:\xampp\htdocs\nws\application\Storage/app/MjAyMC0wMi0wNy0wMS0yNy0wMDAwMDAtcG0tNjQx.geojson' C:\xampp\htdocs\nws\application\helpers\url_bind_helper.php 24
ERROR - 2020-02-07 13:29:50 --> Severity: Notice --> Undefined index: file C:\xampp\htdocs\nws\application\controllers\dash\file\rpjmd.php 22
ERROR - 2020-02-07 13:30:27 --> Severity: Notice --> Undefined index: file C:\xampp\htdocs\nws\application\controllers\dash\file\rpjmd.php 22
ERROR - 2020-02-07 13:31:19 --> Severity: Warning --> move_uploaded_file(C:\xampp\htdocs\nws\application\Storage/app/MjAyMC0wMi0wNy0wMS0zMS0wMDAwMDAtcG0tNjQ0.png): failed to open stream: No such file or directory C:\xampp\htdocs\nws\application\helpers\url_bind_helper.php 23
ERROR - 2020-02-07 13:31:19 --> Severity: Warning --> move_uploaded_file(): Unable to move 'C:\xampp\tmp\php1299.tmp' to 'C:\xampp\htdocs\nws\application\Storage/app/MjAyMC0wMi0wNy0wMS0zMS0wMDAwMDAtcG0tNjQ0.png' C:\xampp\htdocs\nws\application\helpers\url_bind_helper.php 23
ERROR - 2020-02-07 13:31:54 --> Severity: Warning --> move_uploaded_file(C:\xampp\htdocs\nws\application\../Storage/app/MjAyMC0wMi0wNy0wMS0zMS0wMDAwMDAtcG0tNzkx.png): failed to open stream: No such file or directory C:\xampp\htdocs\nws\application\helpers\url_bind_helper.php 23
ERROR - 2020-02-07 13:31:54 --> Severity: Warning --> move_uploaded_file(): Unable to move 'C:\xampp\tmp\php9BB0.tmp' to 'C:\xampp\htdocs\nws\application\../Storage/app/MjAyMC0wMi0wNy0wMS0zMS0wMDAwMDAtcG0tNzkx.png' C:\xampp\htdocs\nws\application\helpers\url_bind_helper.php 23
ERROR - 2020-02-07 13:35:12 --> Severity: Warning --> move_uploaded_file(C:\xampp\htdocs\nws\application\Storage/app/publi/MjAyMC0wMi0wNy0wMS0zNS0wMDAwMDAtcG0tOTE2.png): failed to open stream: No such file or directory C:\xampp\htdocs\nws\application\helpers\url_bind_helper.php 23
ERROR - 2020-02-07 13:35:12 --> Severity: Warning --> move_uploaded_file(): Unable to move 'C:\xampp\tmp\phpA162.tmp' to 'C:\xampp\htdocs\nws\application\Storage/app/publi/MjAyMC0wMi0wNy0wMS0zNS0wMDAwMDAtcG0tOTE2.png' C:\xampp\htdocs\nws\application\helpers\url_bind_helper.php 23
ERROR - 2020-02-07 13:35:35 --> Severity: Warning --> move_uploaded_file(C:\xampp\htdocs\nws\application\Storage/app/publi/MjAyMC0wMi0wNy0wMS0zNS0wMDAwMDAtcG0tMzcx.pdf): failed to open stream: No such file or directory C:\xampp\htdocs\nws\application\helpers\url_bind_helper.php 23
ERROR - 2020-02-07 13:35:35 --> Severity: Warning --> move_uploaded_file(): Unable to move 'C:\xampp\tmp\phpF956.tmp' to 'C:\xampp\htdocs\nws\application\Storage/app/publi/MjAyMC0wMi0wNy0wMS0zNS0wMDAwMDAtcG0tMzcx.pdf' C:\xampp\htdocs\nws\application\helpers\url_bind_helper.php 23
ERROR - 2020-02-07 13:42:17 --> Severity: Warning --> mkdir(): File exists C:\xampp\htdocs\nws\application\helpers\url_bind_helper.php 29
ERROR - 2020-02-07 13:45:00 --> Severity: Warning --> mkdir(): No such file or directory C:\xampp\htdocs\nws\application\helpers\url_bind_helper.php 28
ERROR - 2020-02-07 13:45:00 --> Severity: Warning --> move_uploaded_file(C:\xampp\htdocs\nws\application\Storage/app/public/file/rpjmd/MjAyMC0wMi0wNy0wMS00NS0wMDAwMDAtcG0tMzAx.pdf): failed to open stream: No such file or directory C:\xampp\htdocs\nws\application\helpers\url_bind_helper.php 40
ERROR - 2020-02-07 13:45:00 --> Severity: Warning --> move_uploaded_file(): Unable to move 'C:\xampp\tmp\php9905.tmp' to 'C:\xampp\htdocs\nws\application\Storage/app/public/file/rpjmd/MjAyMC0wMi0wNy0wMS00NS0wMDAwMDAtcG0tMzAx.pdf' C:\xampp\htdocs\nws\application\helpers\url_bind_helper.php 40
ERROR - 2020-02-07 13:47:14 --> Severity: Warning --> implode(): Invalid arguments passed C:\xampp\htdocs\nws\application\helpers\url_bind_helper.php 29
ERROR - 2020-02-07 13:47:14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\nws\application\helpers\url_bind_helper.php 29
ERROR - 2020-02-07 13:47:14 --> Severity: Warning --> move_uploaded_file(C:\xampp\htdocs\nws\application\Storage/app/public/file/rpjmd/MjAyMC0wMi0wNy0wMS00Ny0wMDAwMDAtcG0tMjcx.pdf): failed to open stream: No such file or directory C:\xampp\htdocs\nws\application\helpers\url_bind_helper.php 50
ERROR - 2020-02-07 13:47:14 --> Severity: Warning --> move_uploaded_file(): Unable to move 'C:\xampp\tmp\phpA39C.tmp' to 'C:\xampp\htdocs\nws\application\Storage/app/public/file/rpjmd/MjAyMC0wMi0wNy0wMS00Ny0wMDAwMDAtcG0tMjcx.pdf' C:\xampp\htdocs\nws\application\helpers\url_bind_helper.php 50
ERROR - 2020-02-07 13:47:26 --> Severity: Warning --> is_dir() expects exactly 1 parameter, 0 given C:\xampp\htdocs\nws\application\helpers\url_bind_helper.php 33
ERROR - 2020-02-07 13:47:26 --> Severity: Warning --> mkdir(): File exists C:\xampp\htdocs\nws\application\helpers\url_bind_helper.php 34
ERROR - 2020-02-07 13:47:26 --> Severity: Warning --> is_dir() expects exactly 1 parameter, 0 given C:\xampp\htdocs\nws\application\helpers\url_bind_helper.php 33
ERROR - 2020-02-07 13:47:26 --> Severity: Warning --> mkdir(): File exists C:\xampp\htdocs\nws\application\helpers\url_bind_helper.php 34
ERROR - 2020-02-07 13:47:26 --> Severity: Warning --> is_dir() expects exactly 1 parameter, 0 given C:\xampp\htdocs\nws\application\helpers\url_bind_helper.php 33
ERROR - 2020-02-07 13:47:26 --> Severity: Warning --> is_dir() expects exactly 1 parameter, 0 given C:\xampp\htdocs\nws\application\helpers\url_bind_helper.php 33
ERROR - 2020-02-07 13:47:26 --> Severity: Warning --> is_dir() expects exactly 1 parameter, 0 given C:\xampp\htdocs\nws\application\helpers\url_bind_helper.php 33
ERROR - 2020-02-07 14:05:14 --> Severity: error --> Exception: syntax error, unexpected ';' C:\xampp\htdocs\nws\application\helpers\url_bind_helper.php 26
ERROR - 2020-02-07 14:05:42 --> Severity: error --> Exception: syntax error, unexpected ')' C:\xampp\htdocs\nws\application\helpers\url_bind_helper.php 49
ERROR - 2020-02-07 14:07:19 --> Severity: error --> Exception: syntax error, unexpected ')' C:\xampp\htdocs\nws\application\helpers\url_bind_helper.php 49
ERROR - 2020-02-07 14:07:23 --> Severity: error --> Exception: syntax error, unexpected ')' C:\xampp\htdocs\nws\application\helpers\url_bind_helper.php 49
ERROR - 2020-02-07 14:07:30 --> Severity: error --> Exception: syntax error, unexpected ';' C:\xampp\htdocs\nws\application\helpers\url_bind_helper.php 66
ERROR - 2020-02-07 14:08:01 --> Severity: error --> Exception: Unsupported operand types C:\xampp\htdocs\nws\application\helpers\url_bind_helper.php 23
ERROR - 2020-02-07 14:08:18 --> Severity: error --> Exception: Unsupported operand types C:\xampp\htdocs\nws\application\helpers\url_bind_helper.php 63
ERROR - 2020-02-07 14:13:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\nws\application\helpers\url_bind_helper.php 64
ERROR - 2020-02-07 14:14:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\nws\application\helpers\url_bind_helper.php 63
ERROR - 2020-02-07 14:15:16 --> Severity: Warning --> move_uploaded_file(): The second argument to copy() function cannot be a directory C:\xampp\htdocs\nws\application\helpers\url_bind_helper.php 78
ERROR - 2020-02-07 14:15:16 --> Severity: Warning --> move_uploaded_file(): Unable to move 'C:\xampp\tmp\php4B55.tmp' to 'C:\xampp\htdocs\nws\application\Storage/app/public/file/sss.pdf' C:\xampp\htdocs\nws\application\helpers\url_bind_helper.php 78
ERROR - 2020-02-07 14:16:02 --> Severity: Warning --> move_uploaded_file(): The second argument to copy() function cannot be a directory C:\xampp\htdocs\nws\application\helpers\url_bind_helper.php 78
ERROR - 2020-02-07 14:16:02 --> Severity: Warning --> move_uploaded_file(): Unable to move 'C:\xampp\tmp\phpFEF7.tmp' to 'C:\xampp\htdocs\nws\application\Storage/app/public/file/sss.pdf' C:\xampp\htdocs\nws\application\helpers\url_bind_helper.php 78
ERROR - 2020-02-07 14:16:28 --> Severity: Warning --> move_uploaded_file(): The second argument to copy() function cannot be a directory C:\xampp\htdocs\nws\application\helpers\url_bind_helper.php 78
ERROR - 2020-02-07 14:16:28 --> Severity: Warning --> move_uploaded_file(): Unable to move 'C:\xampp\tmp\php65B0.tmp' to 'C:\xampp\htdocs\nws\application\Storage/app/public/file/sss.pdf' C:\xampp\htdocs\nws\application\helpers\url_bind_helper.php 78
ERROR - 2020-02-07 14:28:38 --> Severity: Notice --> Undefined variable: reuqest C:\xampp\htdocs\nws\application\controllers\dash\file\rpjmd.php 28
ERROR - 2020-02-07 14:28:38 --> Severity: Notice --> Undefined variable: reuqest C:\xampp\htdocs\nws\application\controllers\dash\file\rpjmd.php 29
ERROR - 2020-02-07 14:28:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  null value in column &quot;kode_daerah&quot; violates not-null constraint
DETAIL:  Failing row contains (1, null, storage/files/rpjmd/2020-02/MjAyMC0wMi0wNy0wMi0yOC0wMDAwMDAtcG0t..., 3, null, null, 0, 2020-02-07 00:02:28, 2020-02-07 00:02:28). C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-07 14:28:38 --> Query error: ERROR:  null value in column "kode_daerah" violates not-null constraint
DETAIL:  Failing row contains (1, null, storage/files/rpjmd/2020-02/MjAyMC0wMi0wNy0wMi0yOC0wMDAwMDAtcG0t..., 3, null, null, 0, 2020-02-07 00:02:28, 2020-02-07 00:02:28). - Invalid query: INSERT INTO "file_rpjmd" ("path", "tahun", "tahun_selesai", "user_id", "created_at", "updated_at") VALUES ('storage/files/rpjmd/2020-02/MjAyMC0wMi0wNy0wMi0yOC0wMDAwMDAtcG0tNjQ2.pdf', NULL, NULL, 3, '2020-02-07 02:28.000000', '2020-02-07 02:28.000000')
ERROR - 2020-02-07 14:28:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  null value in column &quot;kode_daerah&quot; violates not-null constraint
DETAIL:  Failing row contains (2, null, storage/files/rpjmd/2020-02/MjAyMC0wMi0wNy0wMi0yOC0wMDAwMDAtcG0t..., 3, 2020, 2025, 0, 2020-02-07 00:02:28, 2020-02-07 00:02:28). C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-07 14:28:51 --> Query error: ERROR:  null value in column "kode_daerah" violates not-null constraint
DETAIL:  Failing row contains (2, null, storage/files/rpjmd/2020-02/MjAyMC0wMi0wNy0wMi0yOC0wMDAwMDAtcG0t..., 3, 2020, 2025, 0, 2020-02-07 00:02:28, 2020-02-07 00:02:28). - Invalid query: INSERT INTO "file_rpjmd" ("path", "tahun", "tahun_selesai", "user_id", "created_at", "updated_at") VALUES ('storage/files/rpjmd/2020-02/MjAyMC0wMi0wNy0wMi0yOC0wMDAwMDAtcG0tNzIx.pdf', '2020', '2025', 3, '2020-02-07 02:28.000000', '2020-02-07 02:28.000000')
