<?php

ini_set("display_errors",true);

$fetch_query = "select * from department_quota";


try {
    include 'db.php';
    $st = $conn->prepare($fetch_query);
    $st->execute();
    $result = $st->fetchAll(PDO::FETCH_NUM);
    $conn = null;

    } catch (PDOException $e) {

        echo($e -> getMessage());

    }
?>