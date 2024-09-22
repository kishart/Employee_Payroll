<?php

$dsn = "mysql:host=localhost;dbname=db_payroll";
$dbusername = "root";
$dbpassword = "";

try{
    $pdo=new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}CATCH(PDOException $e){
    echo "connection failed: ".$e->getMessage();
}

?>