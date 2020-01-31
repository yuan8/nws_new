<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-01-29 07:55:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: character varying = integer
LINE 1: select * from data_input where kode_daerah = 6301
                                                   ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-29 07:55:23 --> Query error: ERROR:  operator does not exist: character varying = integer
LINE 1: select * from data_input where kode_daerah = 6301
                                                   ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. - Invalid query: select * from data_input where kode_daerah = 6301
ERROR - 2020-01-29 07:56:23 --> Severity: Notice --> Undefined variable: achive C:\xampp\htdocs\nws\application\views\cahce\96c2936eb962dcc31705f29d56e4e5600b261f82.php 675
ERROR - 2020-01-29 07:56:23 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\nws\application\views\cahce\96c2936eb962dcc31705f29d56e4e5600b261f82.php 675
ERROR - 2020-01-29 07:57:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;=&quot;
LINE 1: ...m data_input where kode_daerah = '6301' and id is not = 6931
                                                                 ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-29 07:57:45 --> Query error: ERROR:  syntax error at or near "="
LINE 1: ...m data_input where kode_daerah = '6301' and id is not = 6931
                                                                 ^ - Invalid query: select * from data_input where kode_daerah = '6301' and id is not = 6931
ERROR - 2020-01-29 07:57:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;6931&quot;
LINE 1: ...om data_input where kode_daerah = '6301' and id is not  6931
                                                                   ^ C:\xampp\htdocs\nws\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-01-29 07:57:54 --> Query error: ERROR:  syntax error at or near "6931"
LINE 1: ...om data_input where kode_daerah = '6301' and id is not  6931
                                                                   ^ - Invalid query: select * from data_input where kode_daerah = '6301' and id is not  6931
ERROR - 2020-01-29 10:04:35 --> Severity: Warning --> Declaration of MY_Router::set_directory($dir) should be compatible with CI_Router::set_directory($dir, $append = false) C:\xampp\htdocs\nws\application\core\MY_Router.php 113
ERROR - 2020-01-29 10:04:38 --> Severity: Warning --> Declaration of MY_Router::set_directory($dir) should be compatible with CI_Router::set_directory($dir, $append = false) C:\xampp\htdocs\nws\application\core\MY_Router.php 113
ERROR - 2020-01-29 10:04:58 --> Severity: error --> Exception: Class 'my_Router' not found C:\xampp\htdocs\nws\system\core\Common.php 203
