<?php
ini_set("display_errors",true);

$dbusername = "root";
$dbpassword = "";
$dbhost = "localhost";
$dbdb_name = "ADAS";

try {
    $conn = new PDO("mysql:host =localhost; dbname=ADAS", $dbusername , $dbpassword );
    $conn->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );
}catch(PDOException $e){
    echo $e->getMessage();
}

?>