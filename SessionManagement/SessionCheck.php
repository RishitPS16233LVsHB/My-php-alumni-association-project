<?php
    require_once $_SERVER['DOCUMENT_ROOT']."/PHPAlumniProject/error.php";

    function SessionCheck($tempCheck = false)
    {        
        //echo "check";
        session_start();
        if(session_id() == "" || !isset($_SESSION['email']) || empty($_SESSION['email']))
        {
            echo "here";
            header("location: /PHPAlumniProject/LogoutSession.php");        
        }

    }

    function SessionCheckHead()
    {
        if(session_id() == "" || !isset($_SESSION['email']) || empty($_SESSION['email']))
        {
            echo "here";
            header("location: /PHPAlumniProject/LogoutSession.php");
        }
    }
?>