<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/master.css">
    <title>Super User Mode</title>
</head>
<body>

<nav class="navbar navbar-expand-sm shadow-lg">
        <div class="navbar-brand ms-5">SU Space</div>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#collapser"><i class="fa fa-navicon"></i></button>
        <div class="collapse navbar-collapse" id="collapser">
            <ul class="navbar-nav ms-auto me-5">
            <li class="nav-item dropdown">
                        <a class="nav-link text-reset btn btn-outline-warning dropdown-toggle " data-bs-toggle="dropdown">profile</a>
                        <div class="dropdown-menu">
                        <a href="php/profile.php?msg=resetpassword" class="dropdown-item">change password</a>
                        <a href="php/profile.php?msg=logout" class="dropdown-item">logout</a>
                        </div>
            </li>
            </ul>
        </div>
    </nav>


    <div class="tablebase container-sm  d-flex justify-content-center">
        <form action="php/constitute.php" method="post">
        <h2 class="text-center">Add a New Admin</h2>
            <div class="row form-row mb-2 mt-5">
                <div class="col-3">
                    <label>Username</label>
                </div>
                <div class="col-8">
                    <input type="text" class="form-control5" name="username" required>
                </div>
            </div>
            <div class="row form-row mb-2">
                <div class="col-3">
                    <label>Email</label>
                </div>
                <div class="col-8">
                    <input type="email" class="form-control5" name="email" required>
                </div>
            </div>
            <div class="row form-row mb-4">
                <div class="col-3">
                    <label>Password</label>
                </div>
                <div class="col-8">
                    <input type="text" class="form-control5" name="password" required>
                </div>
            </div>
            <div class="row form-row mb-4">
                <div class="col-7" >
                </div>
                <div class="col-3">
                    <input type="submit" class="form-control4" name="register" value="add a new admin" required>
                </div>
            </div>
        </form>

        </div>
        <?php
                    if($_GET['code'] == 'success'){
                        echo '<script> alert("Admin registered successfuly!") </script>';
                    }elseif($_GET['code'] == 'failed'){
                        echo '<script> alert("Failed to register an admin; there might be another admin with the identical username!") </script>';
                    }elseif ($_GET['code'] == 'error') {
                        echo '<script> alert("Something went wrong!") </script>';
                    }
                    ?>


         <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/studentpanel.js"></script>
</body>
</html>