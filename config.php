<?php
session_start();

global $pdo;

//$db_name = '';
$db_name = '';
$db_host = '';
$db_user = '';
$db_pass = '';

try{
   $pdo = new PDO("mysql:dbname=".$db_name.";host=".$db_host, $db_user, $db_pass);
}catch(PDOException $e){
    echo "Falhou: ".$e->getMessage();
}

?>