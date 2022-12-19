<?php 
	    require_once $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/SessionManagement/SessionCheck.php'; 
        require_once $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/DatabaseConnection/CrudOperations.php'; 
        SessionCheck();
?> 
<?php
    if(isset($_GET['job_apply_id']))
    {
        $ID = $_GET['job_apply_id'];
        $connection = ConnectToDB();
        $query = "update tbl_job_apply set is_enabled = 'n' where job_apply_id = $ID";
        mysqli_query($connection,$query);
        CloseConnection($connection);
        header("location: profile.php");
    }
?>