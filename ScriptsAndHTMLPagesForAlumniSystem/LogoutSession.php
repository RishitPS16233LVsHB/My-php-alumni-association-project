<?php 
    session_set_cookie_params(0);
    session_start();
    //$_SESSION = array();
    //session_destroy();
    $_SESSION['email'] = "";
    $_SESSION['userid'] = 0;
    $_SESSION['username'] = "";
    $_SESSION['user_type'] = -1;
    header("location: /PHPAlumniProject/Login.php");
    //exit();
?>