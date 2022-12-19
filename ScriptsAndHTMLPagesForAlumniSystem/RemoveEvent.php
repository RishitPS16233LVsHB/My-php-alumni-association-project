<?php 
	    require_once $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/SessionManagement/SessionCheck.php'; 
        require_once $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/DatabaseConnection/CrudOperations.php'; 
        SessionCheck();
?> 
<?php
    if(isset($_GET['event_id']))
    {
        $ID = $_GET['event_id'];
        $connection = ConnectToDB();
        $query = "update tbl_event set is_enabled = 'n' where event_id = $ID";
        mysqli_query($connection,$query);
        CloseConnection($connection);
        header("location: profile.php");
    }
?>