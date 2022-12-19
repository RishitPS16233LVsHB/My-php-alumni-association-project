<?php 
	    require_once $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/SessionManagement/SessionCheck.php'; 
        require_once "error.php";
        require_once $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/DatabaseConnection/CrudOperations.php';
		SessionCheck();
?>
<?php 
    
    if(!isset($_POST['opass']) || empty($_POST['opass']))
        error("Old password is empty","setting.php");
    else
        $OPass = $_POST['opass'];

    if(!isset($_POST['pass']) || empty($_POST['pass']))
        error("Password is empty","setting.php");
    else
        $Pass = $_POST['pass'];

    if(!isset($_POST['cpass']) || empty($_POST['cpass']))
        error("cpass is empty","setting.php");
    else
    {
        $Cpass = $_POST['cpass'];
        ChangePassword($OPass,$Pass,$Cpass);
    }
?>