<?php 
	    require_once $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/SessionManagement/SessionCheck.php'; 
        require_once $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/DatabaseConnection/CrudOperations.php'; 
        SessionCheck();
?> 
<?php
    if(isset($_GET['community_post_id']))
    {
        $ID = $_GET['community_post_id'];
        $connection = ConnectToDB();
        $query = "update tbl_community_post set is_enabled = 'n' where community_post_id = $ID";
        mysqli_query($connection,$query);
        CloseConnection($connection);
        header("location: profile.php");
    }
?>