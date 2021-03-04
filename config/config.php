<?php

// define('URL', 'http://localhost/php_employee_manager_v3/');

define('HOST', 'localhost');
define('DB', 'employee_management');
define('USER', 'root');
define('PASSWORD', '');
define('CHARSET', 'utf8mb4');

define('PROTOCOL', (!empty($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS'] == 'on')) ? 'https://' : 'http://');
define('DOMAIN', $_SERVER['HTTP_HOST']);
define('URL', preg_replace("/\/$/", '', PROTOCOL . DOMAIN . str_replace(array('\\', "index.php", "index.html"), '', dirname(htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES))), 1) . '/');
