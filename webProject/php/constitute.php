<?php
ini_set("display_errors",true);


$skeleton_query = "insert into department_quota (no, Department_name, Capacity) values ";
$clear_querry = "delete from department_quota where no = ";
$recover = "select ID,Firstname,Lastname,Gender,Department from student_information where ID = '";


try {
    include 'db.php';
    $info = json_decode(@file_get_contents('../data/info.json'),true);

    function insert(){
        $batch = "insert into student_information (ID, Firstname, Lastname, Gender, CGPA, Special_need, Department,Holistic_point,Entrance_point,Developing_region) VALUES ";
        $notchoosen = "insert into department_prefrence values ";
        require_once 'XLSXReader.php';
        require 'db.php';
        $excel = new XLSXReader('../data/student_data.xlsx');
        $data = $excel->getSheetData('Sheet1');
        $queryl ="";
        $notchoosenq = "";
        $skip = true;
        $i = 1;
        foreach ($data as $value) {
            if(!$skip){
                if($i < count($data)-1){
                    $queryl = "('" .$value[0]."','".$value[1]."','".$value[2]."','".$value[3]."',".$value[4].",'".$value[5]."','".$value[6]."','".$value[7]."','".$value[8]."','".$value[9]."') ,";
                    $notchoosenq = "('" .$value[0]."','notchoosen','notchoosen','notchoosen','notchoosen','notchoosen','notchoosen','notchoosen','notchoosen','notchoosen','notchoosen','notchoosen'),";
                    $i++;
                }else{
                    $queryl = "('" .$value[0]."','".$value[1]."','".$value[2]."','".$value[3]."',".$value[4].",'".$value[5]."','".$value[6]."','".$value[7]."','".$value[8]."','".$value[9]."')";
                    $notchoosenq = "('" .$value[0]."','notchoosen','notchoosen','notchoosen','notchoosen','notchoosen','notchoosen','notchoosen','notchoosen','notchoosen','notchoosen','notchoosen')";
                    $i++;
                }
        }

        $skip = false;
        $batch = $batch.$queryl;
        $notchoosen = $notchoosen.$notchoosenq;
        }
        
        $stl = $conn->prepare($batch);
        $done = $stl->execute();
        if($done > 0){
            $fillout = $conn->prepare($notchoosen);
            $fillout->execute();
        }
        return $done;
    }

    function createAccount(){
        $batch = "insert into users (Username, Password) values ";
        require_once 'XLSXReader.php';
        require 'db.php';
        $excel = new XLSXReader('../data/student_data.xlsx');
        $data = $excel->getSheetData('Sheet1');
        $queryl ="";
        $skip = true;
        $i = 1;
        $OTP = md5('1234');
        foreach ($data as $value) {
            if(!$skip){
                
                if($i < count($data)-1){
                    $queryl = "('" .$value[0]."','".$OTP."') ,";
                    $i++;
                }else{
                    $queryl = "('" .$value[0]."','".$OTP."')";
                    $i++;
                }
        }
        $skip = false;
        $batch = $batch.$queryl;
        }
        
        $stl = $conn->prepare($batch);
        return $stl->execute();
    }




if(isset($_POST['update'])){
        $rs = $conn->prepare('select * from department_quota');
        $rs->execute();
        $nums = $rs->fetchAll(PDO::FETCH_NUM);

        for ($j=1; $j <= count($nums); $j++) { 
            $conn->exec($clear_querry.$j);
        }
        for ($i=1; $i <= count($nums)-1; $i++) { 
            $skeleton_query = $skeleton_query . "(".$i.", '". $_POST['D'.(string)$i] ."' , " . $_POST['DC'.(string)$i] . "), ";
        }
        
        $final_query = $skeleton_query . "(".$i.", '". $_POST['D'.(string)$i] ."' , " . $_POST['DC'.(string)$i] . ") ";
    
        $st = $conn->prepare($final_query);
        $st->execute();
        //constitute the deadline for selection
        $info[0]['deadline'] = $_POST['calander'];
        file_put_contents('../data/info.json',json_encode($info),true);
        header("Location: ../ui_adminpanel.php?code=constrained");
    }elseif(isset($_POST['find'])){
        $rs = $conn->prepare($recover.$_POST['searchid']." '");
        $rs->execute();
        $fetched = $rs->fetchAll(PDO::FETCH_NUM);
        if(count($fetched) > 0){
            header("Location: ../ui_adminpanel.php?code=found&&i=".$_POST['searchid']."&&n=".$fetched[0][1]." ".$fetched[0][2]."&&s=".$fetched[0][3]."&&d=".$fetched[0][4]." ");
        }else{
            header("Location: ../ui_adminpanel.php?code=na");
        }
    }elseif(isset($_POST['allocate'])){
        $rs = $conn->prepare('update student_information set Department = "'.$_POST['departmentlist'].'" where ID = "'.$_POST['searchid'].'"');
        $rs->execute();
        header("Location: ../ui_adminpanel.php?code=allocated");
    }elseif(isset($_POST['upload'])){
        if(isset($_FILES['thefile'])){
            $filename = $_FILES['thefile']['name'];
            $status = move_uploaded_file($_FILES['thefile']['tmp_name'],"../data/student_data.xlsx");
            if($status == 1){
                if(createAccount() == 1 && insert() == 1){
                header("Location: ../ui_adminpanel.php?code=fileuploaded");
                }else{
                header("Location: ../ui_adminpanel.php?code=filenotuploaded");
                }

            }else{
                header("Location: ../ui_adminpanel.php?code=filenotuploaded");
            }
        }else{
            header("Location: ../ui_adminpanel.php?code=invalidfile");
        }
    }elseif(isset($_POST['register'])){
        $rs = $conn->prepare("insert into users (Username, Password, Email, Type) VALUES ('".$_POST['username']."', '".md5($_POST['password'])."', '".$_POST['email']."', 'admin') ");
        if(1 == $rs->execute()){
            header("Location: ../ui_sysadminpanel.php?code=success");   
        }else{
            header("Location: ../ui_sysadminpanel.php?code=wrong");   
        }
    }elseif(isset($_POST['set'])) {
        $info[0]['suppliment'] = (int)$_POST['suppliment'];
        $info[0]['cgpa'] = (int)$_POST['cgpa'];
        $info[0]['entrance'] = (int)$_POST['entrance'];
        $info[0]['coc'] = (int)$_POST['coc'];

        file_put_contents('../data/info.json',json_encode($info),true);
        header("Location: ../ui_adminpanel.php?code=set");
    }

    



    }catch(PDOException $e) {
        if($e -> getCode() == 23000){
            if(isset($_POST['register'])){
                header("Location: ../ui_sysadminpanel.php?code=failed");
            }elseif (isset($_POST['upload'])) {
                header("Location: ../ui_adminpanel.php?code=filenotuploaded");
            }
        }
        echo($e -> getMessage());
    }

?>
