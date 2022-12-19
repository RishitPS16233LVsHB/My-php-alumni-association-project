<?php 
	    require_once $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/SessionManagement/SessionCheck.php'; 
        require_once "error.php";
        require_once $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/DatabaseConnection/CrudOperations.php';
		SessionCheck();
?>
<?php 
    if(!isset($_POST['username']) || empty($_POST['username']))
        error("username is empty","setting.php");
    else
        $UserName = $_POST['username'];

    if(!isset($_POST['email']) || empty($_POST['email']))
        error("email is empty","setting.php");
    else
        $EmailID = $_POST['email'];

    if(!isset($_POST['cnum']) || empty($_POST['cnum']))
        error("contact number is empty","setting.php");
    else
        $Cnum = $_POST['cnum'];
    
    if(!isset($_POST['dob']) || empty($_POST['dob']))
        error("date of birth is empty","setting.php");
    else
    {
        $DOB = $_POST['dob'];
        UpdatePersonalDetails($UserName,$EmailID,$DOB,$Cnum);    
    }
?>