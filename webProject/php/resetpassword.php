<?php

ini_set("display_errors",true);

$dbusername = "root";
$dbpassword = "";
$dbhost = "localhost";
$dbdb_name = "ADAS";
$the_fetch_query = ("select Password from users where Username = '".$_POST['username']."'");
$the_change_query = ("update users set Password = '".$_POST['new_password']."'"." where username = '".$_POST['username']."'");

echo($_POST['username']." ".$_POST['old_password']." ".$_POST['new_password']." ".$_POST['confirm_password']);


try {
    $conn = new PDO("mysql:host =localhost; dbname=ADAS", $dbusername , $dbpassword );
    $conn->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );


    $st = $conn->prepare($the_fetch_query);
    $st->execute();

    $result = $st->fetchColumn();
    
    if($_POST['old_password'] == $result){
        $st = $conn->prepare($the_change_query);
        $st->execute();
    }
    
} catch (PDOException $e) {

    echo($e -> getMessage());

}

?>