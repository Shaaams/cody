<?php 

$dsn  = 'mysql:host=localhost;dbname=cody';
$user = 'root';
$pass = 'pdo';
$option = [

    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try{
    $con = new PDO($dsn, $user, $pass, $option);
    $con->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
    //echo 'you are connected your database ';
}catch(PDOException $e)
{
    echo "failed to connect " . $e->getMessage();
}