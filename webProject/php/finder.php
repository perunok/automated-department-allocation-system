<?php
ini_set("display_errors",true);

$dbusername = "root";
$dbpassword = "";
$dbhost = "localhost";
$dbdb_name = "ADAS";
$one;
try {
    if(isset($_POST['find'])){
    $fetch_query = "select ID,Firstname,Lastname,Gender,Department from student_information where ID='".$_POST['searchid']."'";
    $conn = new PDO("mysql:host =localhost; dbname=ADAS", $dbusername , $dbpassword );
    $conn->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );
    $data = $conn->prepare($fetch_query);
    $data->execute();
    $search_result = 'hellow';
    header("Location: ../ui_adminpanel.php?code=found");
}
}catch(PDOException $e){
    echo $e->getMessage();
}

?>