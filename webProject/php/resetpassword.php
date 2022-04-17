<?php

ini_set("display_errors",true);

$dbusername = "root";
$dbpassword = "";
$dbhost = "localhost";
$dbdb_name = "ADAS";
$fetch_query = ("select Password from users where Username = '".$_POST['username']."'");
$password = md5($_POST['new_password']);
$change_query = ("update users set Password = '".$password."'"." where username = '".$_POST['username']."'");

try {
    $conn = new PDO("mysql:host =localhost; dbname=ADAS", $dbusername , $dbpassword );
    $conn->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );


    $st = $conn->prepare($fetch_query);
    $st->execute();

    $result = $st->fetchColumn();
    echo md5($result);
    
    if( md5($_POST['old_password']) == $result){
        $st = $conn->prepare($change_query);
        $st->execute();
        // here i need to add a code that checks if it is really updated
        $st = $conn->prepare($fetch_query);
        $st -> execute();
        $result = $st->fetchColumn();
        if($result == md5($_POST['new_password'])){
            header("Location: ../ui_resetpassword.php?error= password updated successfuly!");
        }else{
            header("Location: ../ui_resetpassword.php?error= Something went wrong!");
        }
    }else{
        header("Location: ../ui_resetpassword.php?error= Invalid username or old password!");
        exit();
    }
    
} catch (PDOException $e) {

    echo($e -> getMessage());

}

?>