
<?php
session_start();

if ($_GET['msg']=='resetpassword') {
    session_unset();
    session_destroy();
    header("Location: ../ui_resetpassword.php");
    exit();
}

    if ($_GET['msg']=='logout') {
        session_unset();
        session_destroy();
        header("Location: ../ui_login.php");
        exit();
    }
?>