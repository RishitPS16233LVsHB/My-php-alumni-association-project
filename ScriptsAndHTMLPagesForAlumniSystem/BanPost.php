<?php 
    require_once $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/SessionManagement/SessionCheck.php'; 
    require_once "error.php";
    require_once $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/DatabaseConnection/Connections.php';
    SessionCheck();
?>
<?php 
    try
    {
        if(!isset($_GET['post_id']) || empty($_GET['post_id']))
            die("post id not set");
        $connection = ConnectToDB();
        $query = "update tbl_community_post set is_enabled = 'n' where community_post_id = ".$_GET['post_id']."";
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