<?php

//define('WEB_ROOT', 'http://localhost/php-test/');
define('WEB_ROOT', '/sennheiser75/');

//  php -S localhost:8000 -t ./
// define('WEB_ROOT', '/sennheiser75/');

if (!isset($_SESSION)) {
    session_start();
}

$db_host = 'localhost';
$db_name = 'proj57';
<<<<<<< HEAD
$db_user = 'root';
$db_pass = '';
=======
=======
$db_name = 'sennheiser75';
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> e79b1b8f66fb5dc65eba97bd7c53c46d053a4b86
$db_user = 'root';
$db_pass = '';
=======
>>>>>>> faeac9dc2dbe921a235c3debc9a49dcacd42231b
$db_user = 'kim';
$db_pass = 'adobe30';
>>>>>>> 2e87b194b610a79974537a5986cdd7ff94a1ea1c

$dsn = "mysql:host={$db_host};dbname={$db_name};charset=utf8";
$pdo_options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    // PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_NUM,
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8 ",
];

$pdo = new PDO($dsn, $db_user, $db_pass, $pdo_options);
