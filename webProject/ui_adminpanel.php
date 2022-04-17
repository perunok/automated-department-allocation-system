<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location: ui_login.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/master.css">
</head>
<body>

    <nav class="navbar navbar-expand-sm shadow-lg">
        <div class="navbar-brand ms-5">Workspace</div>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#collapser"><i class="fa fa-navicon"></i></button>
        <div class="collapse navbar-collapse" id="collapser">
            <ul class="navbar-nav ms-auto me-5">
            <li class="nav-item dropdown ">
                        <a class="nav-link text-reset btn btn-outline-warning dropdown-toggle" data-bs-toggle="dropdown">manage</a>
                        <div class="dropdown-menu">
                        <a href="ui_showallocation.php" target="_newtab" class="dropdown-item">show allocation</a>
                        <a href="#register" class="dropdown-item">allocate manually</a>
                        <a href="#import" class="dropdown-item">import student data</a>
                        </div>
            <li class="nav-item dropdown">
                        <a class="nav-link text-reset btn btn-outline-warning dropdown-toggle " data-bs-toggle="dropdown">profile</a>
                        <div class="dropdown-menu">
                        <a href="php/profile.php?msg=resetpassword" class="dropdown-item">change password</a>
                        <a href="php/profile.php?msg=logout" class="dropdown-item">logout</a>
                        </div>
            </li>
            </li>
            </ul>
        </div>
    </nav>

    <div class=" container-md mt-3">
                <?php 
                include 'php/populate_quota.php'; 
                ?>
                <!-- here i successfuly accessed the $result variable form populate_quota.php script -->
        <section class="container-sm ">
        <form action="php/constitute.php" method="post"> 
        
            <h2 class="text-center">Quota for Students</h2>
            <div class="row form-row ">
                <div class="col-9">
                    <h5 class="text-center bg-primary">department list</h5>
                </div>
                <div class="col-3">
                    <h5 class="text-center">number</h5>
                </div>
            </div>
            <?php
            $i = 1;
            foreach ($result as $value) {
            echo'<div class="row form-row mb-2">';
                echo'<div class="col-9">';
                    echo'<input type="text" class="form-control" placeholder="Department" name="D'.$i.'" value="'.$value[1].'" >';
                echo'</div>';
                echo'<div class="col-3">';
                    echo'<input type="number" class="form-control" placeholder="student numbers" name="DC'.$i.'" value="'.$value[2].'">';
                echo'</div>';
            echo'</div>';
            $i++;
            }
            ?>
            
            <div class="row form-row mb-5 mt-5">
                <div class="col-9">
                <label class="bg-secondary form-control" for="calander">Set A Deadline for Department Selection &nbsp;&nbsp;: <input class="cont-2" type="date" name="calander" id="calander"  required> </label>
                </div>
                <div class="col-3">
                    <input type="submit" class="form-control bg-warning" value="Save" name="update" >
                </div>
            </div>

        </form>
        <form action="php/constitute.php" id="import" method="post" enctype = "multipart/form-data">
            <div class="row form-row">
            <label class="col form-control bg-secondary cont container" for="import">Import Student Data From File  &nbsp; &nbsp;<input class="form-control mb-2" type="file" name="thefile" id="thefile" required>
            <?php
            if(isset($_GET['code'])){
                if($_GET['code'] == 'fileuploaded' || $_GET['code'] == 'filenotuploaded'){
                    if($_GET['code'] == 'fileuploaded'){
                        echo '<script> alert("file uploaded successfuly!") </script>';
                    }else{
                        echo '<script> alert("file uploaded failed!") </script>';
                    }
                }
                if($_GET['code'] == 'constrained'){
                        echo '<script> alert("student data uploaded successfuly!") </script>';
                }if($_GET['code'] == 'na' || $_GET['code'] == 'found'){
                    if($_GET['code'] == 'na'){
                        echo '<script> alert("no student found with this id!") </script>';
                    }
            }
            }
            
            ?>
            <input type="submit" value="Upload" name="upload" class="btn btn-warning form-control"></label>
            </div>
        </form> 
        <br><br>
        </section>
        <section class="container-sm cont" id="register">
            <?php include 'php/constitute.php'; ?>
            <form action="php/constitute.php" method="post">
                <h4 class="text-center mb-4 bg-primary">Manually Allocate A Student</h4>
                <div class="row form-row">
                    <div class="col-9">
                    <input type="text" class="form-control col mb-2 text-center" placeholder="enter a student ID" name="searchid" value="<?php
                    if(isset($_GET['code'])){
                        if($_GET['code'] == 'found'){
                        echo $_GET['i'];
                    }
                    }
                    ?>">
                    </div>
                    <div class="col-3">
                        <input type="submit" class="form-control bg-warning mb-2" value="Find" name="find">
                    </div>
                </div>
                <div class="row form-row">
                    <div class="col-9">
                    <?php 
                        if(isset($_GET['code'])){
                            if($_GET['code'] == 'found'){
                                echo '<input type="text" class="form-control col mb-2 mt-2 text-center" placeholder="Name" disabled value="Name : '.$_GET['n'].'">';
                                echo '<input type="text" class="form-control col mb-2 mt-2 text-center" placeholder="Name" disabled value="Sex : '.$_GET['s'].'">';
                                }else{
                                echo '<input type="text" class="form-control col mb-2 mt-2"  disabled value="no student known with this ID
                                ">';
                        }
                    }
                    ?>
                    </div>
                    <div class="col-9">
                    </div>
                </div>
                <?php
                if(isset($_GET['code'])){
                    if($_GET['code'] == 'found'){
                ?>
                <div class="row form-row">
                    
                        <select class="col-9 " name="departmentlist" id="dl">
                            <?php
                            foreach($result as $element) {
                                if($element[1] == $_GET['d']){
                                echo '<option selected class="form-control col mb-2 mt-2 text-center" value="'.$element[1].'">'.$element[1].'</option>';
                                }elseif($_GET['d'] == 'unallocated'){
                                    unset($_GET['d']);
                                echo '<option selected class="form-control col mb-2 mt-2 text-center" value="unallocated">unallocated</option>';
                                echo '<option class="form-control col mb-2 mt-2 text-center" value="'.$element[1].'">'.$element[1].'</option>';

                                }else{
                                echo '<option class="form-control col mb-2 mt-2 text-center" value="'.$element[1].'">'.$element[1].'</option>';
                                }
                            } 
                            ?>
                        </select>
                    
                    <div class="col-3">
                        <input type="submit" class="form-control bg-warning mb-2 mt-2 " value="Allocate" name="allocate">
                    </div>
                </div>
                <?php
                }}
                ?>
            </form>

            <br><br><br>

            <form action="php/constitute.php" id="set" method="post" >
                <h4 class="text-center bg-primary m-3">weight of criterias</h4>
            <div class="row form-row mb-3">
            <div class="col-8 ms-3">
            <label for="sex" class="bg-secondary">suppliment grade-----------</label>
            </div>
            <div class="col-3">
            <input type="number" name="suppliment" class="form-control" min="0" max = "10" required value="5"> 
            </div>
            </div>
            <div class="row form-row mb-3">
            <div class="col-8 ms-3">
            <label for="sex" class="bg-secondary">weight of CGPA-----------</label>
            </div>
            <div class="col-3">
            <input type="number" name="cgpa" class="form-control" min="10" max = "60" required  value="50"> 
            </div>
            </div>
            <div class="row form-row mb-3">
            <div class="col-8 ms-3">
            <label for="sex" class="bg-secondary">weight of entrance result-----------</label>
            </div>
            <div class="col-3">
            <input type="number" name="entrance" class="form-control" min="10" max = "40" required  value="20"> 
            </div>
            </div>
            <div class="row form-row mb-3">
            <div class="col-8 ms-3">
            <label for="sex" class="bg-secondary">weight of COC result-----------</label>
            </div>
            <div class="col-3">
            <input type="number" name="coc" class="form-control" min="10" max = "40" required value="30"> 
            </div>
            </div>
            <input type="submit" value="set" name="set" class="btn btn-warning form-control"></label>

        </form> 


        </section>
        <br><br><br><br><br><br><br>
    </div>

    <form action="php/allocator_engine.php" id="frm">
        <input type="submit" value="a" hidden="hidden">
    </form>
    <?php
    if(isset($_GET['s'])){
        
    }else{
        echo '<script> const frm = document.getElementById("frm") </script>';
        echo '<script> frm.submit() </script>';
    }
    ?>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/adminpanel.js"></script>
</body>
</html>
