<?php 
	    require_once $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/SessionManagement/SessionCheck.php'; 
        require_once $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/DatabaseConnection/CrudOperations.php'; 
        SessionCheck();
?> 
<?php
    if(isset($_GET['job_alert_id']))
    {
        $ID = $_GET['job_alert_id'];
        InsertIntoJobApplyTable($ID);
    }
?>