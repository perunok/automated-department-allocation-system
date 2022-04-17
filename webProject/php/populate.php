<?php

ini_set("display_errors",true);

$the_fetch_query = ("select Firstname,Lastname,ID,Gender,Department from student_information");

try {
    include 'db.php';

    $st = $conn->prepare($the_fetch_query);
    $st->execute();

    $result = $st->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {

    echo($e -> getMessage());

}

?>