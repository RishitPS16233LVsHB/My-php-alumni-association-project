<?php 
    require_once $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/SessionManagement/SessionCheck.php'; 
    require_once "error.php";
    require_once $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/DatabaseConnection/Connections.php';
    SessionCheck();
?>
<?php 
    try
    {
        if(!isset($_GET['event_id']) || empty($_GET['event_id']))
            die("post id not set");
        $connection = ConnectToDB();
        $query = "update tbl_event set is_enabled = 'n' where event_id = ".$_GET['event_id']."";
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