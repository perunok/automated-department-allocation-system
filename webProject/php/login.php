<?php
session_start();
ini_set("display_errors",true);

$dbusername = "root";
$dbpassword = "";
$dbhost = "localhost";
$dbdb_name = "ADAS";
$check_query = ("select Password from users where Username = '".$_POST['username']."'");
$lead_query = ("select Type from users where Username = '".$_POST['username']."'");


try {
    $conn = new PDO("mysql:host =localhost; dbname=ADAS", $dbusername , $dbpassword );
    $conn->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );

    $st = $conn->prepare($check_query);
    $st->execute();
    $password = $st->fetchColumn();

    $st = $conn->prepare($lead_query);
    $st->execute();
    $user_type = $st->fetchColumn();

    if(md5($_POST['password']) == $password){
        if($user_type == 'student'){
            $_SESSION['username'] = $_POST['username'];
            header("Location: ../ui_studentpanel.php");
            exit();
        }elseif ($user_type == 'admin') {
            $_SESSION['username'] = $_POST['username'];
            header("Location: ../ui_adminpanel.php");
            exit();
        }elseif ($user_type == 'su') {
            $_SESSION['username'] = $_POST['username'];
            header("Location: ../ui_sysadminpanel.php");
            exit();
        }
    }else{
        header("Location: ../ui_login.php?error= Invalid username or password!");
        exit();
    }
} catch (PDOException $e) {

    echo($e -> getMessage());

}

?>