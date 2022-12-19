<?php 
	    require_once $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/SessionManagement/SessionCheck.php'; 
        require_once "error.php";
        require_once $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/DatabaseConnection/CrudOperations.php';
		SessionCheck();
?>
<?php
    if(isset($_POST['technology']) && !empty($_POST['technology']))
    {
        InsertIntoUserTechnologyTable($_POST['technology']);
    }
    else
        error("technology is empty must fill it out","setting.php");
?>