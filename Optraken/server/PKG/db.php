<?php
$db_host = "127.0.0.1";
$db_name = "optraken";
$db_username = "admintest";
$db_password = "12345678";
$db_charset = "utf8mb4";
$pdo = new PDO("mysql:host=$db_host;dbname=$db_name;charset=$db_charset", $db_username, $db_password, [
    PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => false,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
]);