<?php
$driver = "mysql";
$host = "127.0.0.1:3306";
$un = "root";
$pass = "root";
$db_name = "it_co";
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
); 
$pdo = new PDO("$driver:host=$host;dbname=$db_name", $un, $pass, $options);   //подключение к бд
$query = $pdo->query("SELECT * FROM `users`");
