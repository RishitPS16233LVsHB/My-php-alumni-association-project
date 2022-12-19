<?php
    require "FormValidations.php";
    require "error.php";
    $AlumniName = "";
    $batch = "";
    $emailID = "";
    $ContactNumber = "";
    $UserName = "";
    $Password = "";
    $CPassword = "";
    $Company = "";
    $Location = "";
    $Technology = "";
    $DateOfBirth;
    $Designation = "";
    $enrollment_number = "";
    $gender = "m";


    CheckForErrorMessage();
    if(DoChecksWithSql($_POST['first_name']) && DoChecksWithSql($_POST['last_name']))
    {
        $AlumniName = $_POST['first_name'] . "-" . $_POST['last_name'];
        echo "alumni name ok";
    }
    else
    {
        error("First name and or or last name not ok should not contain any malicious characters","index.php");
    }
    
    if(DoChecksWithSql($_POST['enrollment_number']))
    {
        $enrollment_number = $_POST['enrollment_number'];
        echo "enrollment number ok";
    }
    else
    {
        error("enrollment number not ok should not contain any malicious characters","index.php");
    }

    if(DoChecksWithSql($_POST['batch']))
    {
        $batch = $_POST['batch'];
        echo "Batch ok";
    }
    else
    {
        error("batch not ok should not contain any malicious characters","index.php");
    }


    if(DoChecksWithSql($_POST['gender']))
    {
        $gender = $_POST['gender'];
        echo "<br>gender ok<br>";
    }
    else 
        error("gender not ok should not contain any malicious characters","index.php");


    if(DoChecksWithSql($_POST['email']))
    {
        if(ValidateEmailAddress($_POST['email']))
        {
            echo "email id ok";
            $emailID = $_POST['email'];
        }   
        else
        {
            error("Email did not got validated as email","index.php");
        }
    }
    else 
    {
        error("email not ok should not contain any malicious characters","index.php");
    }

    if(DoCheck($_POST['contact_number']))
    {
        if(CheckIsNumberPositiveIntegerOrNot($_POST['contact_number']) && strlen($_POST['contact_number']) == 10)
        {
            $ContactNumber = $_POST['contact_number'];
            echo "Contact number ok";
        }
        else
        {
            error("contact number should have 10 numbers","index.php");
        }
    }
    else
    {   
        error("contact number not ok should not contain any malicious characters","index.php");
    }



    if(DoChecksWithSql($_POST['password']))
    {
        $Password = $_POST['password'];
        echo "password ok";
    }
    else
    {    
        error("password not ok should not contain any malicious characters","index.php");
    }


    if(DoChecksWithSql($_POST['cpassword']))
    {
        $CPassword = $_POST['cpassword'];
        echo "Confirm password ok";
    }
    else
    {
        error("confirm password not ok should not contain any malicious characters","index.php");
    }
    
    if($Password == $CPassword)
        echo "password same ok";
    else
    {
        error("confirm password and password should be same","index.php");
    }

    if(DoChecksWithSql($_POST['company']))
    {
        $Company = $_POST['company'];
        echo "company ok";
    }
    else
    {
        error("company name not ok should not contain any malicious characters","index.php");
    }

    
    if(DoChecksWithSql($_POST['location']))
    {
        $Location = $_POST['location'];
        echo "Location ok";
    }
    else
    {
        error("Place of work not ok should not contain any malicious characters","index.php");
    }

    if(DoChecksWithSql($_POST['technology']))
    {
        $Technology = $_POST['technology'];
        echo "Technology ok";
    }
    else
    {
        error("technology name not ok should not contain any malicious characters","index.php");
    }

    if(DoChecksWithSql($_POST['designation'][0]))
    {
        $Designation = $_POST['designation'];
        echo $Designation . "<br>";
        echo "Designation ok";
    }
    else
    {
        error("Desgination not ok should not contain any malicious characters","index.php");
    }

    if(isset($_POST['date_of_birth']) && !empty($_POST['date_of_birth'])){
        $DateOfBirth = $_POST['date_of_birth'];
        require $_SERVER['DOCUMENT_ROOT']."/PHPAlumniProject/DatabaseConnection/CrudOperations.php";
        if(InsertIntoUserTable($AlumniName,$enrollment_number,$DateOfBirth,$gender,$Company,$ContactNumber,$emailID,$Password,$Designation,$Location,$batch))
        {
            session_start();
            $_SESSION['useremail'] = $emailID;
            $_SESSION['email'] = $emailID;
            echo $_SESSION['userid'] . " <br>" . $_SESSION['useremail'] . "<br>"; 
            header("location: OTP.php");
        }
        else
            error("registration not ok","Login.php");
    }
    else
    {
        error("Date of birth is compulsory and should be entered","index.php");
    }
  

    //die("<br><br><br><br>died here");
    // InsertIntoUserTable($username,$en_no,$dob,$gender,$Current_Company,$contact_num,$email_id,$pass,$job,$work,$batch)
    // redirection code here

    
?>