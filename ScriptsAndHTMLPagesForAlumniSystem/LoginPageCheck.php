<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/SessionManagement/SessionCheck.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/DatabaseConnection/CrudOperations.php';
// /require "error.php";

    SessionCheck();
    //session_start();
    if(PHP_SESSION_ACTIVE)
        echo "session active";
    else
        echo "session not active";

    $_SESSION['user_type'] = -1;
    echo $_SESSION['Checkpassword'] . "<br>";
    if(isset($_SESSION['email']) && isset($_SESSION['Checkpassword']))
    {
        $enrollment_number = $_SESSION['email'];
        $password = $_SESSION['Checkpassword'];

        echo "enrollment_number:- " . $enrollment_number . " password:- '" . $password . "'<br>";
        if(DoLogin($enrollment_number,$password))
        {   

            echo "ok";
            $path = $_SERVER['DOCUMENT_ROOT']."/PHPAlumniProject/homePage.php";
            $query = "select user_type from tbl_user where enrollment_number = $enrollment_number";

            $user = "root";
            $pass = "root";
            $server = "localhost";
            $database = "Alumni_Association_System_Database";
    
                $connection = mysqli_connect($server,$user,$pass,$database);
                if($connection)
                {
                    $result = mysqli_query($connection,$query);
                    foreach($result as $row)
                        $user_type = $row['user_type'];
                            

                    if($user_type == 0)
                    {
                        $_SESSION['user_type'] = 0;
                        header("location: /PHPAlumniProject/AdminPanel/html/index.php");
                    }
                        else if($user_type == 1)
                    {
                        $_SESSION['user_type'] = 1;
                        header("location: /PHPAlumniProject/homePage.php");
                    }
                    else
                    {
                        $_SESSION['user_type'] = -1;
                        header("location: /PHPAlumniProject/LogoutSession.php");
                    }
                    echo $_SESSION['user_type'];
                }
                else{
                    die("failed to connect to database");
                }

        }
        else
        {
            $path = "/PHPAlumniProject/LogoutSession.php";
            error("invalid user name or password",$path);
            if(!PHP_SESSION_ACTIVE)
                session_start();
            $_SESSION['email'] = "";
            $_SESSION['user_type'] = -1;
            $_SESSION['errormsg'] = "invalid user name and password";
            echo $path;
            header("location: $path");
        }
    }
?>