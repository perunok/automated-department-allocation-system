<?php

session_start();
ini_set("display_errors",true);

$insert_query = "insert into department_prefrence (Username, Prefrence_1, Prefrence_2, Prefrence_3, Prefrence_4, Prefrence_5, Prefrence_6, Prefrence_7, Prefrence_8, Prefrence_9, Prefrence_10, Prefrence_11) VALUES ('".$_SESSION['username']."', '".$_POST['prefrence0']."', '".$_POST['prefrence1']."', '".$_POST['prefrence2']."', '".$_POST['prefrence3']."', '".$_POST['prefrence4']."', '".$_POST['prefrence5']."', '".$_POST['prefrence6']."','".$_POST['prefrence7']."','".$_POST['prefrence8']."','".$_POST['prefrence9']."','".$_POST['prefrence10']."')";
$update_query = "update department_prefrence set Prefrence_1 ='".$_POST['prefrence0']."', Prefrence_2 ='".$_POST['prefrence1']."', Prefrence_3 ='".$_POST['prefrence2']."', Prefrence_4 ='".$_POST['prefrence3']."', Prefrence_5 ='".$_POST['prefrence4']."', Prefrence_6 ='".$_POST['prefrence5']."', Prefrence_7 ='".$_POST['prefrence6']."', Prefrence_8 ='".$_POST['prefrence7']."', Prefrence_9 ='".$_POST['prefrence8']."', Prefrence_10 ='".$_POST['prefrence9']."', Prefrence_11 ='".$_POST['prefrence10']."' where Username = '".$_SESSION['username']."'";
try {
    require 'db.php';

    $conn->exec($insert_query);
    header("Location: ../ui_studentpanel.php?status=success");

    } catch(PDOException $e){
        if(($e->getCode()) == 23000){
            try {
                $conn->exec($update_query);
                header("Location: ../ui_studentpanel.php?status=updated");
            } catch (PDOException $f) {
                echo $f->getMessage();
            }
        }else{
            echo $e->getCode();
            echo $e->getMessage();
        }
        
    }
?>