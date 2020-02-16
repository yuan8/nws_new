<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-02-15 05:51:27 --> Severity: Notice --> Undefined property: stdClass::$username C:\xampp\htdocs\nws\application\controllers\Login.php 32
ERROR - 2020-02-15 06:13:36 --> Severity: Compile Error --> Cannot use isset() on the result of an expression (you can use "null !== expression" instead) C:\xampp\htdocs\nws\application\controllers\h-pdam\Data.php 13
ERROR - 2020-02-15 06:15:31 --> Severity: Notice --> Undefined variable: select2 C:\xampp\htdocs\nws\application\controllers\h-pdam\Data.php 31
ERROR - 2020-02-15 06:15:31 --> Severity: Warning --> pg_query(): Query failed:  C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-15 06:15:31 --> Query error:  - Invalid query: 
ERROR - 2020-02-15 06:29:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;nama_daerah&quot; does not exist
LINE 1: select count(*) as jml from pdam_profile where ( nama_daerah...
                                                         ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-15 06:29:30 --> Query error: ERROR:  column "nama_daerah" does not exist
LINE 1: select count(*) as jml from pdam_profile where ( nama_daerah...
                                                         ^ - Invalid query: select count(*) as jml from pdam_profile where ( nama_daerah ilike '%ss%' or nama_pdam ilike '%ss%') limit 1
ERROR - 2020-02-15 06:31:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;as&quot;
LINE 1: select count(*),  as jml from pdam_profile where (nama_pdam ...
                          ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-15 06:31:54 --> Query error: ERROR:  syntax error at or near "as"
LINE 1: select count(*),  as jml from pdam_profile where (nama_pdam ...
                          ^ - Invalid query: select count(*),  as jml from pdam_profile where (nama_pdam ilike '%ss%') limit 1
ERROR - 2020-02-15 06:33:18 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\nws\application\views\cahce\6daa4b28611017ccff68cafbe40d266f59b9fa14.php 14
ERROR - 2020-02-15 06:33:45 --> Severity: Warning --> in_array() expects parameter 2 to be array, string given C:\xampp\htdocs\nws\application\views\cahce\6daa4b28611017ccff68cafbe40d266f59b9fa14.php 14
ERROR - 2020-02-15 06:35:22 --> Severity: error --> Exception: Call to undefined function implede() C:\xampp\htdocs\nws\application\controllers\h-pdam\Data.php 24
ERROR - 2020-02-15 06:35:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;SEHAT&quot;
LINE 1: ... '%tirta%')and ( penilaian_nuwas in (SAKIT,KURANG SEHAT)) li...
                                                             ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-02-15 06:35:39 --> Query error: ERROR:  syntax error at or near "SEHAT"
LINE 1: ... '%tirta%')and ( penilaian_nuwas in (SAKIT,KURANG SEHAT)) li...
                                                             ^ - Invalid query: select count(*) as jml from pdam_profile where (nama_pdam ilike '%tirta%')and ( penilaian_nuwas in (SAKIT,KURANG SEHAT)) limit 1
ERROR - 2020-02-15 06:40:33 --> Severity: Notice --> Undefined variable: trafix C:\xampp\htdocs\nws\application\views\cahce\6daa4b28611017ccff68cafbe40d266f59b9fa14.php 48
ERROR - 2020-02-15 06:40:33 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\nws\application\views\cahce\6daa4b28611017ccff68cafbe40d266f59b9fa14.php 48
ERROR - 2020-02-15 06:40:33 --> Severity: Notice --> Undefined variable: trafix C:\xampp\htdocs\nws\application\views\cahce\6daa4b28611017ccff68cafbe40d266f59b9fa14.php 51
ERROR - 2020-02-15 06:40:33 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\nws\application\views\cahce\6daa4b28611017ccff68cafbe40d266f59b9fa14.php 51
ERROR - 2020-02-15 06:40:33 --> Severity: Notice --> Undefined variable: trafix C:\xampp\htdocs\nws\application\views\cahce\6daa4b28611017ccff68cafbe40d266f59b9fa14.php 54
ERROR - 2020-02-15 06:40:33 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\nws\application\views\cahce\6daa4b28611017ccff68cafbe40d266f59b9fa14.php 54
ERROR - 2020-02-15 06:40:53 --> Severity: Notice --> Undefined variable: trafik C:\xampp\htdocs\nws\application\views\cahce\6daa4b28611017ccff68cafbe40d266f59b9fa14.php 48
ERROR - 2020-02-15 06:40:53 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\nws\application\views\cahce\6daa4b28611017ccff68cafbe40d266f59b9fa14.php 48
ERROR - 2020-02-15 06:40:53 --> Severity: Notice --> Undefined variable: trafik C:\xampp\htdocs\nws\application\views\cahce\6daa4b28611017ccff68cafbe40d266f59b9fa14.php 51
ERROR - 2020-02-15 06:40:53 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\nws\application\views\cahce\6daa4b28611017ccff68cafbe40d266f59b9fa14.php 51
ERROR - 2020-02-15 06:40:53 --> Severity: Notice --> Undefined variable: trafik C:\xampp\htdocs\nws\application\views\cahce\6daa4b28611017ccff68cafbe40d266f59b9fa14.php 54
ERROR - 2020-02-15 06:40:53 --> Severity: Warning --> in_array() expects parameter 2 to be array, null given C:\xampp\htdocs\nws\application\views\cahce\6daa4b28611017ccff68cafbe40d266f59b9fa14.php 54
ERROR - 2020-02-15 06:41:52 --> Severity: Notice --> Undefined variable: trafic C:\xampp\htdocs\nws\application\views\cahce\6daa4b28611017ccff68cafbe40d266f59b9fa14.php 6
