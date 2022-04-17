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
    <link rel="stylesheet" href="css/master.css">
    <title>Recover Account</title>
</head>
<body>
    <nav class="navbar mb-2 shadow-lg d-flex justify-content-center">
                
                <h1 class="p-1 "> <i class="fa fa-gear" > </i> recover account</h1>
    </nav>

    <div class="cont container shadow  d-flex justify-content-center mb-1">
        <form action="php/recover.php" class="form-group" method="post">
            <input type="text" name="code" class="form-control mt-3 mb-5" placeholder="enter the code here" required>
            <input type="submit" name="verify" value="Verify" class="form-control bnt btn-secondary mb-3">
        </form>
    </div>
</body>
</html>
