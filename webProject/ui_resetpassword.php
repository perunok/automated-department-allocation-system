<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/master.css">
    <title>Reset your password</title>
</head>
<body>
    


    <div class="navbar  mb-2 shadow d-flex justify-content-center">
                <h1 class="p-1"> <i class="fa fa-unlock-alt" width="50em" height="50em"></i> Reset Password</h1>
    </div>

    <div class="cont container shadow  d-flex justify-content-center mb-1  ">
        <form action="php/resetpassword.php" class="form-group" method="post">
            <input type="text" class="form-control mt-5" id="username" placeholder="enter your username" name="username" required><br>
            <span class="form-control p-0"> <input id="pass-field0" name="old_password" type="password" class="p-1 fullwidth" placeholder="enter your old password" required>
                <i id="toggle-icon0" class="fa fa-eye" ></i></span><br>
            <span class="form-control  p-0"> <input id="pass-field1" name="new_password" type="password" class="p-1 fullwidth" placeholder="enter your new password" required>
                <i id="toggle-icon1" class="fa fa-eye" ></i></span><br>
            <span class="form-control  p-0"> <input id="pass-field2" name="confirm_password" type="password" class="p-1 fullwidth" placeholder="confirm your new password" required>
                <i id="toggle-icon2" class="fa fa-eye" ></i></span><br>
            <button id="btnreset"  type="submit" class=" form-control btn btn-secondary  mb-3 shadow" ><label class="label">reset </label><i class="fa fa-key iconic"></i></button>
            <button  type="button" class=" form-control btn btn-success  mb-5 shadow" ><a class="text-reset text-decoration-none" href="ui_login.php">go back to login </a><i class="fa fa-unlock"></i></button>
            <div id="faildnote"> <p id="faildmessage">
                <?php
                if(isset($_GET['error'])){
                    echo($_GET['error']);
                }
                ?>
            </p> </div>
        </form>
        
    </div>

    <script src="js/reset.js"></script>

</body>
</html>