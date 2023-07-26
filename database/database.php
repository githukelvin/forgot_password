<?php

$host = "localhost";
$pass ="";
$dbname="forgot";
$username = "root";

$dsn="mysql:host=$host;dbname=$dbname";

try{
    $pdo = new PDO($dsn,$username,$pass);

    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    throw new PDOException($e->getMessage());
}




include "crud.php";

$crud = new crud($pdo);

?>