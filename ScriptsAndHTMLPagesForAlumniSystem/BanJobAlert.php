<?php 
    require_once $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/SessionManagement/SessionCheck.php'; 
    require_once "error.php";
    require_once $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/DatabaseConnection/Connections.php';
    SessionCheck();
?>
<?php 
    try
    {
        if(!isset($_GET['job_alert_id']) || empty($_GET['job_alert_id']))
            die("post id not set");
        $connection = ConnectToDB();
        $query = "update tbl_job_alert set is_enabled = 'n' where job_alert_id = ".$_GET['job_alert_id']."";
        if(mysqli_query($connection,$query))
        {
            echo "done";
            header("Location: /PHPAlumniProject/AdminPanel/html/user-activity.php");
        }
        else
            echo "not done";
        CloseConnection($connection);
    }
    catch(Exception $error)
    {

    }
?>