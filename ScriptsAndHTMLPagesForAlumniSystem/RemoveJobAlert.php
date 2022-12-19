<?php 
	    require_once $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/SessionManagement/SessionCheck.php'; 
        require_once $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/DatabaseConnection/CrudOperations.php'; 
        SessionCheck();
?> 
<?php
    if(isset($_GET['job_alert_id']))
    {
        $ID = $_GET['job_alert_id'];
        $connection = ConnectToDB();
        $query = "update tbl_job_alert set is_enabled = 'n' where job_alert_id = $ID";
        mysqli_query($connection,$query);
        CloseConnection($connection);
        header("location: profile.php");
    }
?>