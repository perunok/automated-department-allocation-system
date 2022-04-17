<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

    <link rel="stylesheet" href="css/master.css">
    <title>Login</title>
</head>
<body>
    


    <nav class="navbar mb-2 shadow-lg d-flex justify-content-center">
                
                <h1 class="p-1 "> <i class="fa fa-unlock" > </i> Login</h1>
    </nav>

    <div class="cont container shadow  d-flex justify-content-center mb-1  ">
        <form action="php/login.php" class="form-group" method="post">
            <input name="username" type="text" class="form-control mt-5" placeholder="enter your username" required><br>
            
            <span class="form-control  p-0"> <input name="password" type="password" class="p-1" id="pass-field" placeholder="enter your password" required>
                <i id="toggle-icon" class="fa fa-eye" ></i></span><br>

            <button type="submit" class=" form-control btn btn-secondary mb-4 shadow">Login <i class="fa fa-sign-in"></i>  </button>
            <!-- <p class="mb-2"><a class="text-decoration-none text-reset" href="ui_recoveraccount.php">forgot password ? <span class="colorize "></span></a></p>   -->
            
            <div class="faildnote"> <p>
            <?php
            if(isset($_GET['error'])){
                echo($_GET['error']);
            }
            ?>
            </p> </div>
            
        </form>
        
        
    </div>

    <script src="js/login.js"></script>

</body>
</html>
