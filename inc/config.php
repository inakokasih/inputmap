<?php

define('db_host', 'localhost');
define('db_user', 'root');
define('db_pass', 'ina');
define('db_name', 'lokasi');

mysql_connect(db_host, db_user, db_pass);
mysql_select_db(db_name);
?>
