<?php



$server = 'localhost:3306';
$serverUsername = 'root';
$serverPassword = '';
$dbname = 'sup';

$connection = mysqli_connect($server, $serverUsername, $serverPassword, $dbname);
mysqli_set_charset($connection,"utf8");