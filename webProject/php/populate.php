<?php

ini_set("display_errors",true);

$dbusername = "root";
$dbpassword = "";
$dbhost = "localhost";
$dbdb_name = "ADAS";


$the_query = ("select * from student_information");

try {
    $conn = new PDO("mysql:host =localhost; dbname=ADAS", $dbusername , $dbpassword );
    $conn->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );

    $st = $conn->prepare($the_query);
    $st->execute();

    $result = $st->fetchAll();
    
} catch (PDOException $e) {

    echo($e -> getMessage());

}

?>