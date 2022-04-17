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
    <title>Student Panel</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/master.css">

</head>
<body>

    <nav class="navbar navbar-expand-sm sticky-top shadow-lg bg-secondary">
        <div class="navbar-brand ms-5">Workspace</div>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#collapser"><i class="fa fa-navicon"></i></button>
        <div class="collapse navbar-collapse" id="collapser">
            <ul class="navbar-nav ms-auto me-5">
            <li class="nav-item dropdown ">
                        <a class="nav-link text-reset btn btn-outline-warning dropdown-toggle" data-bs-toggle="dropdown">allocation</a>
                        <div class="dropdown-menu">
                        <a href="ui_showallocation.php" target="_newtab" class="dropdown-item">check allocations</a>
                        <a href="#" class="dropdown-item">new function</a>
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

    <?php 
    //this block reads a json data and spits it out for a javascript file to use
        include 'php/populate_prefrence.php'; 
        $info = json_decode(file_get_contents('data/info.json'),true);
        $deadline = $info[0]['deadline'];
    ?>
    <script>var deadline = "<?php echo $deadline ?>"</script>
    <section>
        <form action="php/choose_department.php" class="disabled" method="post"> 
            <h2 class="text-center">Department Prefrences</h2>
            <?php 
            if(!isset($_GET['status'])){
                    $_GET['status'] = "none";
            }
            ?>
            <h4  class="green-text text-center"><?php
             if($_GET['status'] == "success"){
                 unset($_GET['status']);  
                 echo "your choice have been submitted successfuly!"; 
                 }elseif ($_GET['status'] == "updated") {
                    unset($_GET['status']);  
                    echo "your prefrences have been updated!"; 
                 }
                 ?></h4>
            
            <div class="cont container">
            <?php   
            
            require 'php/populate_prefrence.php';
                $i=0;
                $j=1;
                foreach ($result as $value) {
                    echo'<h6>choice '.(string)($i+1).'</h6>';
                    echo'<select name="prefrence'.(string)$i.'" class="form-control mt-2 ">';
                foreach ($result as  $prefrence) {
                    if($result_prefrence[0][$j] == $prefrence[0]){
                        echo'<option selected  value="'.$prefrence[0].'">'.$prefrence[0].'</option>';
                    }else{
                    echo'<option value="'.$prefrence[0].'">'.$prefrence[0].'</option>';
                    }
                }
                    // 
                echo'</select>';
                $i++;
                $j++;
                }

            ?>


            <input type="submit" class="form-control bg-warning mt-4 mb-2" value="GO" name="update" id = "submitbutton">
            </div>

            

        </form>
        </section>


    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/studentpanel.js"></script>
</body>
</html>