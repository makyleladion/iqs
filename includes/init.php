<?php

define('HOST', 'localhost');
define('DATABASE', 'iqs');
define('USERNAME', 'root');
define('PASSWORD', '');

require_once __DIR__ . '/../libraries/eden.php';
$database = eden('mysql', HOST, DATABASE, USERNAME, PASSWORD);