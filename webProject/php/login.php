<?php

ini_set("display_errors",true);

$dbusername = "root";
$dbpassword = "";
$dbhost = "localhost";
$dbdb_name = "ADAS";
$the_query = ("select Password from users where Username = '".$_POST['username']."'");

try {
    $conn = new PDO("mysql:host =localhost; dbname=ADAS", $dbusername , $dbpassword );
    $conn->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );

    $st = $conn->prepare($the_query);
    $st->execute();

    $result = $st->fetchColumn();
    
    if($_POST['password'] == $result){
        header("Location: ../showallocation.html");
    }else{
       echo('login failed');
    }
    
} catch (PDOException $e) {

    echo($e -> getMessage());

}

?>