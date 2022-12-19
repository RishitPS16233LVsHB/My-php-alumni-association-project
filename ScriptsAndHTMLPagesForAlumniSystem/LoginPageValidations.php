<?php 
    echo "<script> alert('validations');</script>";
    require_once "FormValidations.php";
    session_start();
    //echo $_SESSION['email'];

    if(isset($_POST['email']) && isset($_POST['password']))
    {
        $EmailID = $_POST['email'];
        $Password = $_POST['password'];

        if($EmailID === "admin" && $Password === "admin")
        {
            echo "coordinator detected";
            //header("location: /PHPAlumniProject/AdminPanel/html/index.html");
        }

        if(DoChecksWithSql($Password) == 1)
        {
            if(DoChecksWithSql($EmailID) == 1)
            {
                if(!PHP_SESSION_ACTIVE)
                    session_start();
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['Checkpassword'] = $_POST['password'];
                header("location: /PHPAlumniProject/LoginPageCheck.php");
            }
            else
            {
                if(!PHP_SESSION_ACTIVE)
                    session_start();
                $_SESSION['errormsg'] = 'email is suspicious';
                header("location: Login.php");
            }
        }
        else
        {            
            if(!PHP_SESSION_ACTIVE)
                session_start();
            $_SESSION['errormsg'] = 'password is suspicious';
            header("location: Login.php");
        }
    }
    else
    {

        session_start();
        $_SESSION['errormsg'] = 1;
        header("location: Login.php");    
    }   
?>