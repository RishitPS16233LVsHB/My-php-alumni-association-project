<?php 
    require_once $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/SessionManagement/SessionCheck.php'; 
    require_once "error.php";
    require_once $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/DatabaseConnection/Connections.php';
    SessionCheck();
?>
<?php 
    try
    {
        if(!isset($_GET['user_id']) || empty($_GET['user_id']))
            die("user id not set");
        $connection = ConnectToDB();
        $query = "update tbl_user set is_enabled = 'n' where user_id = ".$_GET['user_id']."";
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