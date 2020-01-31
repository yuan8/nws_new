<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-01-28 05:18:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;data_input.id&quot; must appear in the GROUP BY clause or be used in an aggregate function
LINE 1: select * from data_input where kode_daerah in ('1207','1373'...
               ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-28 05:18:47 --> Query error: ERROR:  column "data_input.id" must appear in the GROUP BY clause or be used in an aggregate function
LINE 1: select * from data_input where kode_daerah in ('1207','1373'...
               ^ - Invalid query: select * from data_input where kode_daerah in ('1207','1373','1472','1403','1709','3202','3311','3572','3524','3502','6301','7172') 

    GROUP BY kode_daerah

    order by kode_daerah,tahun DESC
ERROR - 2020-01-28 05:19:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;data_input.tahun&quot; must appear in the GROUP BY clause or be used in an aggregate function
LINE 5:     order by kode_daerah,tahun DESC
                                 ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-28 05:19:21 --> Query error: ERROR:  column "data_input.tahun" must appear in the GROUP BY clause or be used in an aggregate function
LINE 5:     order by kode_daerah,tahun DESC
                                 ^ - Invalid query: select max(id),max(tahun) from data_input where kode_daerah in ('1207','1373','1472','1403','1709','3202','3311','3572','3524','3502','6301','7172') 

    GROUP BY kode_daerah

    order by kode_daerah,tahun DESC
ERROR - 2020-01-28 05:19:55 --> Severity: Notice --> Undefined index: kabkota C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 24
ERROR - 2020-01-28 05:19:55 --> Severity: Notice --> Undefined index: tahun C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 25
ERROR - 2020-01-28 05:19:55 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:19:56 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:19:56 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:19:56 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:19:56 --> Severity: Notice --> Undefined index: id C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 30
ERROR - 2020-01-28 05:19:56 --> Severity: Notice --> Undefined index: kabkota C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 24
ERROR - 2020-01-28 05:19:56 --> Severity: Notice --> Undefined index: tahun C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 25
ERROR - 2020-01-28 05:19:56 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:19:56 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:19:56 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:19:56 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:19:56 --> Severity: Notice --> Undefined index: id C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 30
ERROR - 2020-01-28 05:19:56 --> Severity: Notice --> Undefined index: kabkota C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 24
ERROR - 2020-01-28 05:19:56 --> Severity: Notice --> Undefined index: tahun C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 25
ERROR - 2020-01-28 05:19:56 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:19:56 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:19:56 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:19:56 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:19:56 --> Severity: Notice --> Undefined index: id C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 30
ERROR - 2020-01-28 05:19:56 --> Severity: Notice --> Undefined index: kabkota C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 24
ERROR - 2020-01-28 05:19:56 --> Severity: Notice --> Undefined index: tahun C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 25
ERROR - 2020-01-28 05:19:56 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:19:56 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:19:56 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:19:56 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:19:56 --> Severity: Notice --> Undefined index: id C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 30
ERROR - 2020-01-28 05:19:56 --> Severity: Notice --> Undefined index: kabkota C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 24
ERROR - 2020-01-28 05:19:56 --> Severity: Notice --> Undefined index: tahun C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 25
ERROR - 2020-01-28 05:19:56 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:19:56 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:19:56 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:19:56 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:19:56 --> Severity: Notice --> Undefined index: id C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 30
ERROR - 2020-01-28 05:19:56 --> Severity: Notice --> Undefined index: kabkota C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 24
ERROR - 2020-01-28 05:19:56 --> Severity: Notice --> Undefined index: tahun C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 25
ERROR - 2020-01-28 05:19:56 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:19:56 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:19:56 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:19:56 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:19:56 --> Severity: Notice --> Undefined index: id C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 30
ERROR - 2020-01-28 05:19:57 --> Severity: Notice --> Undefined index: kabkota C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 24
ERROR - 2020-01-28 05:19:57 --> Severity: Notice --> Undefined index: tahun C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 25
ERROR - 2020-01-28 05:19:57 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:19:57 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:19:57 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:19:57 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:19:57 --> Severity: Notice --> Undefined index: id C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 30
ERROR - 2020-01-28 05:19:57 --> Severity: Notice --> Undefined index: kabkota C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 24
ERROR - 2020-01-28 05:19:57 --> Severity: Notice --> Undefined index: tahun C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 25
ERROR - 2020-01-28 05:19:57 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:19:57 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:19:57 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:19:57 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:19:57 --> Severity: Notice --> Undefined index: id C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 30
ERROR - 2020-01-28 05:19:57 --> Severity: Notice --> Undefined index: kabkota C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 24
ERROR - 2020-01-28 05:19:57 --> Severity: Notice --> Undefined index: tahun C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 25
ERROR - 2020-01-28 05:19:57 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:19:57 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:19:57 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:19:57 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:19:57 --> Severity: Notice --> Undefined index: id C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 30
ERROR - 2020-01-28 05:19:57 --> Severity: Notice --> Undefined index: kabkota C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 24
ERROR - 2020-01-28 05:19:57 --> Severity: Notice --> Undefined index: tahun C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 25
ERROR - 2020-01-28 05:19:57 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:19:57 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:19:57 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:19:57 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:19:57 --> Severity: Notice --> Undefined index: id C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 30
ERROR - 2020-01-28 05:19:57 --> Severity: Notice --> Undefined index: kabkota C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 24
ERROR - 2020-01-28 05:19:57 --> Severity: Notice --> Undefined index: tahun C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 25
ERROR - 2020-01-28 05:19:57 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:19:57 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:19:57 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:19:57 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:19:57 --> Severity: Notice --> Undefined index: id C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 30
ERROR - 2020-01-28 05:19:57 --> Severity: Notice --> Undefined index: kabkota C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 24
ERROR - 2020-01-28 05:19:57 --> Severity: Notice --> Undefined index: tahun C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 25
ERROR - 2020-01-28 05:19:57 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:19:57 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:19:57 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:19:57 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:19:57 --> Severity: Notice --> Undefined index: id C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 30
ERROR - 2020-01-28 05:19:58 --> Severity: Notice --> Undefined index: kabkota C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 24
ERROR - 2020-01-28 05:19:58 --> Severity: Notice --> Undefined index: tahun C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 25
ERROR - 2020-01-28 05:19:58 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:19:58 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:19:58 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:19:58 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:19:58 --> Severity: Notice --> Undefined index: id C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 30
ERROR - 2020-01-28 05:19:58 --> Severity: Notice --> Undefined index: kabkota C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 24
ERROR - 2020-01-28 05:19:58 --> Severity: Notice --> Undefined index: tahun C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 25
ERROR - 2020-01-28 05:19:58 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:19:58 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:19:58 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:19:58 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:19:58 --> Severity: Notice --> Undefined index: id C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 30
ERROR - 2020-01-28 05:19:58 --> Severity: Notice --> Undefined index: kabkota C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 24
ERROR - 2020-01-28 05:19:58 --> Severity: Notice --> Undefined index: tahun C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 25
ERROR - 2020-01-28 05:19:58 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:19:58 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:19:58 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:19:58 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:19:58 --> Severity: Notice --> Undefined index: id C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 30
ERROR - 2020-01-28 05:19:58 --> Severity: Notice --> Undefined index: kabkota C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 24
ERROR - 2020-01-28 05:19:58 --> Severity: Notice --> Undefined index: tahun C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 25
ERROR - 2020-01-28 05:19:58 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:19:58 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:19:58 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:19:58 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:19:58 --> Severity: Notice --> Undefined index: id C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 30
ERROR - 2020-01-28 05:19:58 --> Severity: Notice --> Undefined index: kabkota C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 24
ERROR - 2020-01-28 05:19:58 --> Severity: Notice --> Undefined index: tahun C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 25
ERROR - 2020-01-28 05:19:58 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:19:58 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:19:58 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:19:58 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:19:58 --> Severity: Notice --> Undefined index: id C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 30
ERROR - 2020-01-28 05:19:58 --> Severity: Notice --> Undefined index: kabkota C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 24
ERROR - 2020-01-28 05:19:58 --> Severity: Notice --> Undefined index: tahun C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 25
ERROR - 2020-01-28 05:19:58 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:19:58 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:19:58 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:19:58 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:19:59 --> Severity: Notice --> Undefined index: id C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 30
ERROR - 2020-01-28 05:19:59 --> Severity: Notice --> Undefined index: kabkota C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 24
ERROR - 2020-01-28 05:19:59 --> Severity: Notice --> Undefined index: tahun C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 25
ERROR - 2020-01-28 05:19:59 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:19:59 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:19:59 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:19:59 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:19:59 --> Severity: Notice --> Undefined index: id C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 30
ERROR - 2020-01-28 05:19:59 --> Severity: Notice --> Undefined index: kabkota C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 24
ERROR - 2020-01-28 05:19:59 --> Severity: Notice --> Undefined index: tahun C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 25
ERROR - 2020-01-28 05:19:59 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:19:59 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:19:59 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:19:59 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:19:59 --> Severity: Notice --> Undefined index: id C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 30
ERROR - 2020-01-28 05:19:59 --> Severity: Notice --> Undefined index: kabkota C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 24
ERROR - 2020-01-28 05:19:59 --> Severity: Notice --> Undefined index: tahun C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 25
ERROR - 2020-01-28 05:19:59 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:19:59 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:19:59 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:19:59 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:19:59 --> Severity: Notice --> Undefined index: id C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 30
ERROR - 2020-01-28 05:19:59 --> Severity: Notice --> Undefined index: kabkota C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 24
ERROR - 2020-01-28 05:19:59 --> Severity: Notice --> Undefined index: tahun C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 25
ERROR - 2020-01-28 05:19:59 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:19:59 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:19:59 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:19:59 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:19:59 --> Severity: Notice --> Undefined index: id C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 30
ERROR - 2020-01-28 05:19:59 --> Severity: Notice --> Undefined index: kabkota C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 24
ERROR - 2020-01-28 05:19:59 --> Severity: Notice --> Undefined index: tahun C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 25
ERROR - 2020-01-28 05:19:59 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:19:59 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:19:59 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:19:59 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:19:59 --> Severity: Notice --> Undefined index: id C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 30
ERROR - 2020-01-28 05:19:59 --> Severity: Notice --> Undefined index: kabkota C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 24
ERROR - 2020-01-28 05:19:59 --> Severity: Notice --> Undefined index: tahun C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 25
ERROR - 2020-01-28 05:19:59 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:20:00 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:20:00 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:20:00 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:20:00 --> Severity: Notice --> Undefined index: id C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 30
ERROR - 2020-01-28 05:20:00 --> Severity: Notice --> Undefined index: kabkota C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 24
ERROR - 2020-01-28 05:20:00 --> Severity: Notice --> Undefined index: tahun C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 25
ERROR - 2020-01-28 05:20:00 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:20:00 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:20:00 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:20:00 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:20:00 --> Severity: Notice --> Undefined index: id C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 30
ERROR - 2020-01-28 05:20:00 --> Severity: Notice --> Undefined index: kabkota C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 24
ERROR - 2020-01-28 05:20:00 --> Severity: Notice --> Undefined index: tahun C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 25
ERROR - 2020-01-28 05:20:00 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:20:00 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:20:00 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:20:00 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:20:00 --> Severity: Notice --> Undefined index: id C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 30
ERROR - 2020-01-28 05:20:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;data_input.kabkota&quot; must appear in the GROUP BY clause or be used in an aggregate function
LINE 1: select max(id),max(tahun),kabkota from data_input where kode...
                                  ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-28 05:20:15 --> Query error: ERROR:  column "data_input.kabkota" must appear in the GROUP BY clause or be used in an aggregate function
LINE 1: select max(id),max(tahun),kabkota from data_input where kode...
                                  ^ - Invalid query: select max(id),max(tahun),kabkota from data_input where kode_daerah in ('1207','1373','1472','1403','1709','3202','3311','3572','3524','3502','6301','7172') 

    GROUP BY kode_daerah,tahun

    order by kode_daerah,tahun DESC
ERROR - 2020-01-28 05:21:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;data_input.kabkota&quot; must appear in the GROUP BY clause or be used in an aggregate function
LINE 1: select max(id),max(tahun),kabkota from data_input where kode...
                                  ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-28 05:21:41 --> Query error: ERROR:  column "data_input.kabkota" must appear in the GROUP BY clause or be used in an aggregate function
LINE 1: select max(id),max(tahun),kabkota from data_input where kode...
                                  ^ - Invalid query: select max(id),max(tahun),kabkota from data_input where kode_daerah in ('1207','1373','1472','1403','1709','3202','3311','3572','3524','3502','6301','7172') 

    GROUP BY kode_daerah,tahun

    order by kode_daerah,tahun DESC
ERROR - 2020-01-28 05:21:59 --> Severity: Notice --> Undefined index: kabkota C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 24
ERROR - 2020-01-28 05:21:59 --> Severity: Notice --> Undefined index: tahun C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 25
ERROR - 2020-01-28 05:21:59 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:21:59 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:21:59 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:21:59 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:21:59 --> Severity: Notice --> Undefined index: id C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 30
ERROR - 2020-01-28 05:21:59 --> Severity: Notice --> Undefined index: kabkota C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 24
ERROR - 2020-01-28 05:21:59 --> Severity: Notice --> Undefined index: tahun C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 25
ERROR - 2020-01-28 05:21:59 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:21:59 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:21:59 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:21:59 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:21:59 --> Severity: Notice --> Undefined index: id C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 30
ERROR - 2020-01-28 05:21:59 --> Severity: Notice --> Undefined index: kabkota C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 24
ERROR - 2020-01-28 05:21:59 --> Severity: Notice --> Undefined index: tahun C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 25
ERROR - 2020-01-28 05:21:59 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:21:59 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:22:00 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:22:00 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:22:00 --> Severity: Notice --> Undefined index: id C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 30
ERROR - 2020-01-28 05:22:00 --> Severity: Notice --> Undefined index: kabkota C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 24
ERROR - 2020-01-28 05:22:00 --> Severity: Notice --> Undefined index: tahun C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 25
ERROR - 2020-01-28 05:22:00 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:22:00 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:22:00 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:22:00 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:22:00 --> Severity: Notice --> Undefined index: id C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 30
ERROR - 2020-01-28 05:22:00 --> Severity: Notice --> Undefined index: kabkota C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 24
ERROR - 2020-01-28 05:22:00 --> Severity: Notice --> Undefined index: tahun C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 25
ERROR - 2020-01-28 05:22:00 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:22:00 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:22:00 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:22:00 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:22:00 --> Severity: Notice --> Undefined index: id C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 30
ERROR - 2020-01-28 05:22:00 --> Severity: Notice --> Undefined index: kabkota C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 24
ERROR - 2020-01-28 05:22:00 --> Severity: Notice --> Undefined index: tahun C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 25
ERROR - 2020-01-28 05:22:00 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:22:00 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:22:00 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:22:00 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:22:00 --> Severity: Notice --> Undefined index: id C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 30
ERROR - 2020-01-28 05:22:00 --> Severity: Notice --> Undefined index: kabkota C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 24
ERROR - 2020-01-28 05:22:00 --> Severity: Notice --> Undefined index: tahun C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 25
ERROR - 2020-01-28 05:22:00 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:22:00 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:22:00 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:22:00 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:22:00 --> Severity: Notice --> Undefined index: id C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 30
ERROR - 2020-01-28 05:22:00 --> Severity: Notice --> Undefined index: kabkota C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 24
ERROR - 2020-01-28 05:22:00 --> Severity: Notice --> Undefined index: tahun C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 25
ERROR - 2020-01-28 05:22:00 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:22:00 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:22:00 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:22:00 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:22:00 --> Severity: Notice --> Undefined index: id C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 30
ERROR - 2020-01-28 05:22:00 --> Severity: Notice --> Undefined index: kabkota C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 24
ERROR - 2020-01-28 05:22:00 --> Severity: Notice --> Undefined index: tahun C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 25
ERROR - 2020-01-28 05:22:00 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:22:00 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:22:00 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:22:01 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:22:01 --> Severity: Notice --> Undefined index: id C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 30
ERROR - 2020-01-28 05:22:01 --> Severity: Notice --> Undefined index: kabkota C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 24
ERROR - 2020-01-28 05:22:01 --> Severity: Notice --> Undefined index: tahun C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 25
ERROR - 2020-01-28 05:22:01 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:22:01 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:22:01 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:22:01 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:22:01 --> Severity: Notice --> Undefined index: id C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 30
ERROR - 2020-01-28 05:22:01 --> Severity: Notice --> Undefined index: kabkota C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 24
ERROR - 2020-01-28 05:22:01 --> Severity: Notice --> Undefined index: tahun C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 25
ERROR - 2020-01-28 05:22:01 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:22:01 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:22:01 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:22:01 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:22:01 --> Severity: Notice --> Undefined index: id C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 30
ERROR - 2020-01-28 05:22:01 --> Severity: Notice --> Undefined index: kabkota C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 24
ERROR - 2020-01-28 05:22:01 --> Severity: Notice --> Undefined index: tahun C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 25
ERROR - 2020-01-28 05:22:01 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:22:01 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:22:01 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:22:01 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:22:01 --> Severity: Notice --> Undefined index: id C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 30
ERROR - 2020-01-28 05:22:01 --> Severity: Notice --> Undefined index: kabkota C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 24
ERROR - 2020-01-28 05:22:01 --> Severity: Notice --> Undefined index: tahun C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 25
ERROR - 2020-01-28 05:22:01 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:22:01 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:22:01 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:22:01 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:22:01 --> Severity: Notice --> Undefined index: id C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 30
ERROR - 2020-01-28 05:22:01 --> Severity: Notice --> Undefined index: kabkota C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 24
ERROR - 2020-01-28 05:22:01 --> Severity: Notice --> Undefined index: tahun C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 25
ERROR - 2020-01-28 05:22:01 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:22:01 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:22:01 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:22:01 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:22:01 --> Severity: Notice --> Undefined index: id C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 30
ERROR - 2020-01-28 05:22:01 --> Severity: Notice --> Undefined index: kabkota C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 24
ERROR - 2020-01-28 05:22:01 --> Severity: Notice --> Undefined index: tahun C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 25
ERROR - 2020-01-28 05:22:01 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:22:01 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:22:01 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:22:01 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:22:02 --> Severity: Notice --> Undefined index: id C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 30
ERROR - 2020-01-28 05:22:02 --> Severity: Notice --> Undefined index: kabkota C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 24
ERROR - 2020-01-28 05:22:02 --> Severity: Notice --> Undefined index: tahun C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 25
ERROR - 2020-01-28 05:22:02 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:22:02 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:22:02 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:22:02 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:22:02 --> Severity: Notice --> Undefined index: id C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 30
ERROR - 2020-01-28 05:22:02 --> Severity: Notice --> Undefined index: kabkota C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 24
ERROR - 2020-01-28 05:22:02 --> Severity: Notice --> Undefined index: tahun C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 25
ERROR - 2020-01-28 05:22:02 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:22:02 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:22:02 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:22:02 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:22:02 --> Severity: Notice --> Undefined index: id C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 30
ERROR - 2020-01-28 05:22:02 --> Severity: Notice --> Undefined index: kabkota C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 24
ERROR - 2020-01-28 05:22:02 --> Severity: Notice --> Undefined index: tahun C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 25
ERROR - 2020-01-28 05:22:02 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:22:02 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:22:02 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:22:02 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:22:02 --> Severity: Notice --> Undefined index: id C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 30
ERROR - 2020-01-28 05:22:02 --> Severity: Notice --> Undefined index: kabkota C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 24
ERROR - 2020-01-28 05:22:02 --> Severity: Notice --> Undefined index: tahun C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 25
ERROR - 2020-01-28 05:22:02 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:22:02 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:22:02 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:22:02 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:22:02 --> Severity: Notice --> Undefined index: id C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 30
ERROR - 2020-01-28 05:22:02 --> Severity: Notice --> Undefined index: kabkota C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 24
ERROR - 2020-01-28 05:22:02 --> Severity: Notice --> Undefined index: tahun C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 25
ERROR - 2020-01-28 05:22:02 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:22:02 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:22:02 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:22:02 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:22:02 --> Severity: Notice --> Undefined index: id C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 30
ERROR - 2020-01-28 05:22:02 --> Severity: Notice --> Undefined index: kabkota C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 24
ERROR - 2020-01-28 05:22:02 --> Severity: Notice --> Undefined index: tahun C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 25
ERROR - 2020-01-28 05:22:02 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:22:02 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:22:02 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:22:03 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:22:03 --> Severity: Notice --> Undefined index: id C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 30
ERROR - 2020-01-28 05:22:03 --> Severity: Notice --> Undefined index: kabkota C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 24
ERROR - 2020-01-28 05:22:03 --> Severity: Notice --> Undefined index: tahun C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 25
ERROR - 2020-01-28 05:22:03 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:22:03 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:22:03 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:22:03 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:22:03 --> Severity: Notice --> Undefined index: id C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 30
ERROR - 2020-01-28 05:22:03 --> Severity: Notice --> Undefined index: kabkota C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 24
ERROR - 2020-01-28 05:22:03 --> Severity: Notice --> Undefined index: tahun C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 25
ERROR - 2020-01-28 05:22:03 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:22:03 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:22:03 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:22:03 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:22:03 --> Severity: Notice --> Undefined index: id C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 30
ERROR - 2020-01-28 05:22:03 --> Severity: Notice --> Undefined index: kabkota C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 24
ERROR - 2020-01-28 05:22:03 --> Severity: Notice --> Undefined index: tahun C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 25
ERROR - 2020-01-28 05:22:03 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:22:03 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:22:03 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:22:03 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:22:03 --> Severity: Notice --> Undefined index: id C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 30
ERROR - 2020-01-28 05:22:03 --> Severity: Notice --> Undefined index: kabkota C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 24
ERROR - 2020-01-28 05:22:03 --> Severity: Notice --> Undefined index: tahun C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 25
ERROR - 2020-01-28 05:22:03 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:22:03 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:22:03 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:22:03 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:22:03 --> Severity: Notice --> Undefined index: id C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 30
ERROR - 2020-01-28 05:22:03 --> Severity: Notice --> Undefined index: kabkota C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 24
ERROR - 2020-01-28 05:22:03 --> Severity: Notice --> Undefined index: tahun C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 25
ERROR - 2020-01-28 05:22:03 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:22:03 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:22:03 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:22:03 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:22:03 --> Severity: Notice --> Undefined index: id C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 30
ERROR - 2020-01-28 05:22:22 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:22:22 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:22:22 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:22:22 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:22:22 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:22:22 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:22:22 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:22:22 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:22:22 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:22:22 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:22:22 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:22:22 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:22:22 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:22:22 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:22:22 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:22:22 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:22:22 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:22:22 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:22:22 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:22:22 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:22:22 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:22:22 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:22:22 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:22:22 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:22:22 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:22:22 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:22:22 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:22:22 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:22:22 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:22:22 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:22:22 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:22:22 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:22:22 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:22:23 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:22:23 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:22:23 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:22:23 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:22:23 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:22:23 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:22:23 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:22:23 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:22:23 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:22:23 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:22:23 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:22:23 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:22:23 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:22:23 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:22:23 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:22:23 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:22:23 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:22:23 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:22:23 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:22:23 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:22:23 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:22:23 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:22:23 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:22:23 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:22:23 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:22:23 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:22:23 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:22:23 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:22:23 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:22:23 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:22:23 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:22:23 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:22:23 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:22:23 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:22:23 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:22:23 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:22:23 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:22:23 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:22:24 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:22:24 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:22:24 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:22:24 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:22:24 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:22:24 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:22:24 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:22:24 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:22:24 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:22:24 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:22:24 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:22:24 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:22:24 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:22:24 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:22:24 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:22:24 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:22:24 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:22:24 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:22:24 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:22:24 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:22:24 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:22:24 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:22:24 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:22:24 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:22:24 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:22:24 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:22:24 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:22:24 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:22:24 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:22:24 --> Severity: Notice --> Undefined index: nilai_kinerja_total C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 26
ERROR - 2020-01-28 05:22:24 --> Severity: Notice --> Undefined index: nilai_aspek_keuangan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 27
ERROR - 2020-01-28 05:22:24 --> Severity: Notice --> Undefined index: nilai_aspek_pelayanan C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 28
ERROR - 2020-01-28 05:22:24 --> Severity: Notice --> Undefined index: nilai_aspek_operasional C:\xampp\htdocs\nws\application\views\cahce\641dcf106b159546717143088044cc81631aca0d.php 29
ERROR - 2020-01-28 05:22:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;data_input.nilai_kinerja_total&quot; must appear in the GROUP BY clause or be used in an aggregate function
LINE 1: ...as id,max(tahun) as tahun,min(kabkota) as kabkota,nilai_kine...
                                                             ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-28 05:22:40 --> Query error: ERROR:  column "data_input.nilai_kinerja_total" must appear in the GROUP BY clause or be used in an aggregate function
LINE 1: ...as id,max(tahun) as tahun,min(kabkota) as kabkota,nilai_kine...
                                                             ^ - Invalid query: select max(id) as id,max(tahun) as tahun,min(kabkota) as kabkota,nilai_kinerja_total from data_input where kode_daerah in ('1207','1373','1472','1403','1709','3202','3311','3572','3524','3502','6301','7172') 

    GROUP BY kode_daerah,tahun

    order by kode_daerah,tahun DESC
ERROR - 2020-01-28 06:39:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;sat&quot; does not exist
LINE 1: select * from sat
                      ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-28 06:39:59 --> Query error: ERROR:  relation "sat" does not exist
LINE 1: select * from sat
                      ^ - Invalid query: select * from sat
ERROR - 2020-01-28 06:47:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;tanggal_masuk&quot; does not exist
LINE 1: select * from sat GROUP BY kode_daerah ORDER BY tanggal_masu...
                                                        ^
HINT:  Perhaps you meant to reference the column &quot;sat.tanggal_masukan&quot;. C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-28 06:47:59 --> Query error: ERROR:  column "tanggal_masuk" does not exist
LINE 1: select * from sat GROUP BY kode_daerah ORDER BY tanggal_masu...
                                                        ^
HINT:  Perhaps you meant to reference the column "sat.tanggal_masukan". - Invalid query: select * from sat GROUP BY kode_daerah ORDER BY tanggal_masuk
ERROR - 2020-01-28 06:48:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;sat.id&quot; must appear in the GROUP BY clause or be used in an aggregate function
LINE 1: select * from sat GROUP BY kode_daerah ORDER BY tanggal_masu...
               ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-28 06:48:23 --> Query error: ERROR:  column "sat.id" must appear in the GROUP BY clause or be used in an aggregate function
LINE 1: select * from sat GROUP BY kode_daerah ORDER BY tanggal_masu...
               ^ - Invalid query: select * from sat GROUP BY kode_daerah ORDER BY tanggal_masukan
ERROR - 2020-01-28 06:49:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;sat.id&quot; must appear in the GROUP BY clause or be used in an aggregate function
LINE 1: select * from sat GROUP BY kode_daerah ORDER BY tanggal_masu...
               ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-28 06:49:29 --> Query error: ERROR:  column "sat.id" must appear in the GROUP BY clause or be used in an aggregate function
LINE 1: select * from sat GROUP BY kode_daerah ORDER BY tanggal_masu...
               ^ - Invalid query: select * from sat GROUP BY kode_daerah ORDER BY tanggal_masukan 
ERROR - 2020-01-28 06:50:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;sat.id&quot; must appear in the GROUP BY clause or be used in an aggregate function
LINE 1: select * from sat  GROUP BY kode_daerah ORDER BY tanggal_mas...
               ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-28 06:50:57 --> Query error: ERROR:  column "sat.id" must appear in the GROUP BY clause or be used in an aggregate function
LINE 1: select * from sat  GROUP BY kode_daerah ORDER BY tanggal_mas...
               ^ - Invalid query: select * from sat  GROUP BY kode_daerah ORDER BY tanggal_masukan 
ERROR - 2020-01-28 06:57:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;sat.id&quot; must appear in the GROUP BY clause or be used in an aggregate function
LINE 1: select * from sat  GROUP BY kode_daerah ORDER BY tanggal_mas...
               ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-28 06:57:13 --> Query error: ERROR:  column "sat.id" must appear in the GROUP BY clause or be used in an aggregate function
LINE 1: select * from sat  GROUP BY kode_daerah ORDER BY tanggal_mas...
               ^ - Invalid query: select * from sat  GROUP BY kode_daerah ORDER BY tanggal_masukan 
ERROR - 2020-01-28 07:03:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;from&quot;
LINE 1: select min(id) as id, from sat  GROUP BY kode_daerah ORDER B...
                              ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-28 07:03:47 --> Query error: ERROR:  syntax error at or near "from"
LINE 1: select min(id) as id, from sat  GROUP BY kode_daerah ORDER B...
                              ^ - Invalid query: select min(id) as id, from sat  GROUP BY kode_daerah ORDER BY tanggal_masukan 
ERROR - 2020-01-28 07:03:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;sat.tanggal_masukan&quot; must appear in the GROUP BY clause or be used in an aggregate function
LINE 1: ...id) as id from sat  GROUP BY kode_daerah ORDER BY tanggal_ma...
                                                             ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-28 07:03:54 --> Query error: ERROR:  column "sat.tanggal_masukan" must appear in the GROUP BY clause or be used in an aggregate function
LINE 1: ...id) as id from sat  GROUP BY kode_daerah ORDER BY tanggal_ma...
                                                             ^ - Invalid query: select min(id) as id from sat  GROUP BY kode_daerah ORDER BY tanggal_masukan 
ERROR - 2020-01-28 07:04:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;sat.nama_pdam&quot; must appear in the GROUP BY clause or be used in an aggregate function
LINE 1: select min(id),nama_pdam as id from sat  GROUP BY kode_daera...
                       ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-28 07:04:20 --> Query error: ERROR:  column "sat.nama_pdam" must appear in the GROUP BY clause or be used in an aggregate function
LINE 1: select min(id),nama_pdam as id from sat  GROUP BY kode_daera...
                       ^ - Invalid query: select min(id),nama_pdam as id from sat  GROUP BY kode_daerah ORDER BY max(tanggal_masukan) 
ERROR - 2020-01-28 07:06:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function aggregate_function(character varying) does not exist
LINE 1: select min(id),aggregate_function(nama_pdam) as id from sat ...
                       ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts. C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-28 07:06:51 --> Query error: ERROR:  function aggregate_function(character varying) does not exist
LINE 1: select min(id),aggregate_function(nama_pdam) as id from sat ...
                       ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts. - Invalid query: select min(id),aggregate_function(nama_pdam) as id from sat  GROUP BY kode_daerah ORDER BY max(tanggal_masukan) 
ERROR - 2020-01-28 07:08:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;sat.id&quot; must appear in the GROUP BY clause or be used in an aggregate function
LINE 1: select max(id) as id, CASE WHEN (id=max(id)) THEN kode_daera...
                                         ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-28 07:08:42 --> Query error: ERROR:  column "sat.id" must appear in the GROUP BY clause or be used in an aggregate function
LINE 1: select max(id) as id, CASE WHEN (id=max(id)) THEN kode_daera...
                                         ^ - Invalid query: select max(id) as id, CASE WHEN (id=max(id)) THEN kode_daerah ELSE NULL END AS k from sat  GROUP BY kode_daerah ORDER BY max(tanggal_masukan) 
ERROR - 2020-01-28 07:11:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;sat.keterangan_umum&quot; must appear in the GROUP BY clause or be used in an aggregate function
LINE 2:     keterangan_umum from sat  GROUP BY kode_daerah ORDER BY ...
            ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-28 07:11:48 --> Query error: ERROR:  column "sat.keterangan_umum" must appear in the GROUP BY clause or be used in an aggregate function
LINE 2:     keterangan_umum from sat  GROUP BY kode_daerah ORDER BY ...
            ^ - Invalid query: select max(id) as id, max(kode_daerah), max(nama_pdam) as nama_pdam,max(tanggal_masukan) as tanggal_masukan,
    keterangan_umum from sat  GROUP BY kode_daerah ORDER BY max(tanggal_masukan) 
ERROR - 2020-01-28 07:13:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;JOIN&quot;
LINE 3:     JOIN sat_detail as satd on satd.id_sat = sat.id
            ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-28 07:13:25 --> Query error: ERROR:  syntax error at or near "JOIN"
LINE 3:     JOIN sat_detail as satd on satd.id_sat = sat.id
            ^ - Invalid query: select max(id) as id, max(kode_daerah), max(nama_pdam) as nama_pdam,max(tanggal_masukan) as tanggal_masukan,
    max(keterangan_umum) as keterangan_umum 
    JOIN sat_detail as satd on satd.id_sat = sat.id


    from sat  GROUP BY kode_daerah ORDER BY max(tanggal_masukan)

    
ERROR - 2020-01-28 07:13:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;id&quot; is ambiguous
LINE 1: select max(id) as id, max(kode_daerah), max(nama_pdam) as na...
                   ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-28 07:13:44 --> Query error: ERROR:  column reference "id" is ambiguous
LINE 1: select max(id) as id, max(kode_daerah), max(nama_pdam) as na...
                   ^ - Invalid query: select max(id) as id, max(kode_daerah), max(nama_pdam) as nama_pdam,max(tanggal_masukan) as tanggal_masukan,
    max(keterangan_umum) as keterangan_umum 


    from sat 
    JOIN sat_detail as satd on satd.id_sat = sat.id
    
    GROUP BY kode_daerah ORDER BY max(tanggal_masukan)

    
ERROR - 2020-01-28 07:16:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;satd.id&quot; must appear in the GROUP BY clause or be used in an aggregate function
LINE 1: select satd.*,max(sat.id) as id, max(sat.kode_daerah), max(s...
               ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-28 07:16:55 --> Query error: ERROR:  column "satd.id" must appear in the GROUP BY clause or be used in an aggregate function
LINE 1: select satd.*,max(sat.id) as id, max(sat.kode_daerah), max(s...
               ^ - Invalid query: select satd.*,max(sat.id) as id, max(sat.kode_daerah), max(sat.nama_pdam) as nama_pdam,max(sat.tanggal_masukan) as tanggal_masukan,
    max(sat.keterangan_umum) as keterangan_umum 
    from sat 
    JOIN sat_detail as satd on satd.id_sat = sat.id

    GROUP BY kode_daerah ORDER BY max(tanggal_masukan)

    
ERROR - 2020-01-28 07:17:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;satd.id&quot; must appear in the GROUP BY clause or be used in an aggregate function
LINE 1: select satd.*, max(sat.id) as id, max(sat.kode_daerah), max(...
               ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-28 07:17:47 --> Query error: ERROR:  column "satd.id" must appear in the GROUP BY clause or be used in an aggregate function
LINE 1: select satd.*, max(sat.id) as id, max(sat.kode_daerah), max(...
               ^ - Invalid query: select satd.*, max(sat.id) as id, max(sat.kode_daerah), max(sat.nama_pdam) as nama_pdam,max(sat.tanggal_masukan) as tanggal_masukan,
    max(sat.keterangan_umum) as keterangan_umum 
    from sat 
    JOIN sat_detail as satd on satd.id_sat = sat.id

    GROUP BY kode_daerah ORDER BY max(tanggal_masukan)

    
ERROR - 2020-01-28 07:19:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;sat&quot;
LINE 4:     JOIN sat  on sat.kode_daerah = d.id
                 ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-28 07:19:41 --> Query error: ERROR:  syntax error at or near "sat"
LINE 4:     JOIN sat  on sat.kode_daerah = d.id
                 ^ - Invalid query: select  max(sat.id) as id, max(sat.kode_daerah), max(sat.nama_pdam) as nama_pdam,max(sat.tanggal_masukan) as tanggal_masukan,
    max(sat.keterangan_umum) as keterangan_umum 
    from master_daerah as d,
    JOIN sat  on sat.kode_daerah = d.id
    JOIN sat_detail as satd on satd.id_sat = sat.id
    GROUP BY kode_daerah ORDER BY max(tanggal_masukan)

    
ERROR - 2020-01-28 07:19:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: character varying = bigint
LINE 4:     JOIN sat on sat.kode_daerah = d.id
                                        ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-28 07:19:50 --> Query error: ERROR:  operator does not exist: character varying = bigint
LINE 4:     JOIN sat on sat.kode_daerah = d.id
                                        ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. - Invalid query: select  max(sat.id) as id, max(sat.kode_daerah), max(sat.nama_pdam) as nama_pdam,max(sat.tanggal_masukan) as tanggal_masukan,
    max(sat.keterangan_umum) as keterangan_umum 
    from master_daerah as d
    JOIN sat on sat.kode_daerah = d.id
    JOIN sat_detail as satd on satd.id_sat = sat.id
    GROUP BY kode_daerah ORDER BY max(tanggal_masukan)

    
ERROR - 2020-01-28 07:20:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;kode_daerah&quot; is ambiguous
LINE 6:     GROUP BY kode_daerah ORDER BY max(tanggal_masukan)
                     ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-28 07:20:33 --> Query error: ERROR:  column reference "kode_daerah" is ambiguous
LINE 6:     GROUP BY kode_daerah ORDER BY max(tanggal_masukan)
                     ^ - Invalid query: select  max(sat.id) as id, max(sat.kode_daerah), max(sat.nama_pdam) as nama_pdam,max(sat.tanggal_masukan) as tanggal_masukan,
    max(sat.keterangan_umum) as keterangan_umum 
    from master_daerah as d
    JOIN sat on sat.kode_daerah = d.kode_daerah
    JOIN sat_detail as satd on satd.id_sat = sat.id
    GROUP BY kode_daerah ORDER BY max(tanggal_masukan)

    
ERROR - 2020-01-28 07:23:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;satd.id&quot; must appear in the GROUP BY clause or be used in an aggregate function
LINE 1: select  satd.*,max(sat.id) as id, max(d.kode_daerah), max(sa...
                ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-28 07:23:52 --> Query error: ERROR:  column "satd.id" must appear in the GROUP BY clause or be used in an aggregate function
LINE 1: select  satd.*,max(sat.id) as id, max(d.kode_daerah), max(sa...
                ^ - Invalid query: select  satd.*,max(sat.id) as id, max(d.kode_daerah), max(sat.nama_pdam) as nama_pdam,max(sat.tanggal_masukan) as tanggal_masukan,
    max(sat.keterangan_umum) as keterangan_umum 
    from master_daerah as d
    LEFT JOIN sat on sat.kode_daerah = d.kode_daerah
    LEFT JOIN sat_detail as satd on satd.id_sat = sat.id
    GROUP BY d.kode_daerah ORDER BY max(tanggal_masukan)

    
ERROR - 2020-01-28 07:25:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  aggregate functions are not allowed in JOIN conditions
LINE 5:     LEFT JOIN sat_detail as satd on satd.id_sat = max(sat.id...
                                                          ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-28 07:25:29 --> Query error: ERROR:  aggregate functions are not allowed in JOIN conditions
LINE 5:     LEFT JOIN sat_detail as satd on satd.id_sat = max(sat.id...
                                                          ^ - Invalid query: select  max(sat.id) as id, max(d.kode_daerah), max(sat.nama_pdam) as nama_pdam,max(sat.tanggal_masukan) as tanggal_masukan,
    max(sat.keterangan_umum) as keterangan_umum 
    from master_daerah as d
    LEFT JOIN sat on sat.kode_daerah = d.kode_daerah
    LEFT JOIN sat_detail as satd on satd.id_sat = max(sat.id)
    GROUP BY d.kode_daerah ORDER BY max(tanggal_masukan)

    
ERROR - 2020-01-28 07:25:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function last(bigint) does not exist
LINE 5:     LEFT JOIN sat_detail as satd on satd.id_sat = LAST(sat.i...
                                                          ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts. C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-28 07:25:44 --> Query error: ERROR:  function last(bigint) does not exist
LINE 5:     LEFT JOIN sat_detail as satd on satd.id_sat = LAST(sat.i...
                                                          ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts. - Invalid query: select  max(sat.id) as id, max(d.kode_daerah), max(sat.nama_pdam) as nama_pdam,max(sat.tanggal_masukan) as tanggal_masukan,
    max(sat.keterangan_umum) as keterangan_umum 
    from master_daerah as d
    LEFT JOIN sat on sat.kode_daerah = d.kode_daerah
    LEFT JOIN sat_detail as satd on satd.id_sat = LAST(sat.id)
    GROUP BY d.kode_daerah ORDER BY max(tanggal_masukan)

    
ERROR - 2020-01-28 07:26:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function last(bigint) does not exist
LINE 1: select  last(sat.id) as id, max(d.kode_daerah), max(sat.nama...
                ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts. C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-28 07:26:04 --> Query error: ERROR:  function last(bigint) does not exist
LINE 1: select  last(sat.id) as id, max(d.kode_daerah), max(sat.nama...
                ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts. - Invalid query: select  last(sat.id) as id, max(d.kode_daerah), max(sat.nama_pdam) as nama_pdam,max(sat.tanggal_masukan) as tanggal_masukan,
    max(sat.keterangan_umum) as keterangan_umum 
    from master_daerah as d
    LEFT JOIN sat on sat.kode_daerah = d.kode_daerah
    LEFT JOIN sat_detail as satd on satd.id_sat = (sat.id)
    GROUP BY d.kode_daerah ORDER BY max(tanggal_masukan)

    
ERROR - 2020-01-28 07:27:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;satd.nilai&quot; must appear in the GROUP BY clause or be used in an aggregate function
LINE 1: select satd.nilai, max(sat.id) as id, max(d.kode_daerah), ma...
               ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-28 07:27:50 --> Query error: ERROR:  column "satd.nilai" must appear in the GROUP BY clause or be used in an aggregate function
LINE 1: select satd.nilai, max(sat.id) as id, max(d.kode_daerah), ma...
               ^ - Invalid query: select satd.nilai, max(sat.id) as id, max(d.kode_daerah), max(sat.nama_pdam) as nama_pdam,max(sat.tanggal_masukan) as tanggal_masukan,
    max(sat.keterangan_umum) as keterangan_umum 
    from master_daerah as d
    LEFT JOIN sat on sat.kode_daerah = d.kode_daerah
    LEFT JOIN sat_detail as satd on satd.id_sat = (sat.id)
    GROUP BY sat.kode_daerah ORDER BY max(tanggal_masukan)

    
ERROR - 2020-01-28 10:55:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;program_kegiatan_sipd2&quot; does not exist
LINE 1: ...h_kegiatan, sum(anggaran) as jumlah_anggaran from program_ke...
                                                             ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-28 10:55:50 --> Query error: ERROR:  relation "program_kegiatan_sipd2" does not exist
LINE 1: ...h_kegiatan, sum(anggaran) as jumlah_anggaran from program_ke...
                                                             ^ - Invalid query: select count(*) jumlah_kegiatan, sum(anggaran) as jumlah_anggaran from program_kegiatan_sipd2 where tag_air_minum = true and  tahun=2020
ERROR - 2020-01-28 10:55:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;program_kegiatan_sipd2&quot; does not exist
LINE 1: ...h_kegiatan, sum(anggaran) as jumlah_anggaran from program_ke...
                                                             ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-28 10:55:53 --> Query error: ERROR:  relation "program_kegiatan_sipd2" does not exist
LINE 1: ...h_kegiatan, sum(anggaran) as jumlah_anggaran from program_ke...
                                                             ^ - Invalid query: select count(*) jumlah_kegiatan, sum(anggaran) as jumlah_anggaran from program_kegiatan_sipd2 where tag_air_minum = true and  tahun=2020
