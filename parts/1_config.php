<?php

//define('WEB_ROOT', 'http://localhost/php-test/');
define('WEB_ROOT', '/sennheiser75/');

//  php -S localhost:8000 -t ./
// define('WEB_ROOT', '/sennheiser75/');

if (!isset($_SESSION)) {
    session_start();
}


$db_host = 'localhost';
$db_name = 'sennheiser75';
<<<<<<< HEAD

$db_user = 'root';
$db_pass = '';

=======
$db_user = 'root';
$db_pass = '';
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
$db_user = 'kim';
$db_pass = 'adobe30';
>>>>>>> bcce2a745f38381a6b8d86d0d172d05189e05e7c
>>>>>>> 72267228f3e7043cad533bf9ccc9b7622f3978ad
>>>>>>> c4bb2a5477c05fd4985aae0b1398541153068ae2
>>>>>>> 7b53ac9d982d4c70dda223728fbb96e73525a942

$dsn = "mysql:host={$db_host};dbname={$db_name};charset=utf8";
$pdo_options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    // PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_NUM,
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8 ",
];

$pdo = new PDO($dsn, $db_user, $db_pass, $pdo_options);
