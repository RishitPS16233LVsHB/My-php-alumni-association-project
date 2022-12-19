<?php
    require_once $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/DatabaseConnection/CrudOperations.php'; 
	require_once $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/SessionManagement/SessionCheck.php'; 
    require_once $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/error.php';
	SessionCheck();
?>
<?php
    try
    {
        $connection = ConnectToDB();
        if(!PHP_SESSION_ACTIVE)
           session_start();
        echo $_GET['user_id'];
        echo $_GET['user_name'];
        if(isset($_GET['user_id']) && isset($_GET['user_name']) && isset($_SESSION['userid']))
        {
            $user_name = $_GET['user_name'];
            $id = $_GET['user_id'];
            $userID = $_SESSION['userid'];
            $query = "select * from tbl_personal_chats where user_1 = $userID and user_2 = $id and is_enabled = 'y'";
            $result = mysqli_query($connection,$query);
            if(mysqli_num_rows($result) >= 1)
                error("you are already in touch with that member","homePage.php");
            else
            {
                echo "ok " . mysqli_num_rows($result);
                $query = "insert into tbl_personal_chats(personal_chat_name,user_1,user_2,created_by,modified_by)values('".$user_name."',$userID,$id,$userID,$userID)";
                if(mysqli_query($connection,$query)){
                    $personal_chat_id = mysqli_insert_id($connection);
                    //header("location: Chat.php?user_id=$id&user_name=$user_name&personal_chat_id=$personal_chat_id");
                    header("location: OriginalChat.php");
                }
                else
                    echo "error occured";
            }
            CloseConnection($connection);
        }
        else
            error("not properly logged in","Login.php");
        //CloseConnection($connection);
    }
    catch(Exception $error)
    {}
?>