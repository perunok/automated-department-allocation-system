<?php

$fetch_quota_query = "select Department_name from department_quota";
$fetch_prefrence_query = "select * from department_prefrence where Username = '".$_SESSION['username']."'";



try {
    include 'db.php';

    $st = $conn->prepare($fetch_quota_query);
    $st->execute();
    $st_prefrence = $conn->prepare($fetch_prefrence_query);
    $st_prefrence->execute();
    $result = $st->fetchAll(PDO::FETCH_NUM);
    $result_prefrence = $st_prefrence->fetchAll(PDO::FETCH_NUM);
    $conn = null;

    } catch (PDOException $e) {

        echo($e -> getMessage());

    }
?>