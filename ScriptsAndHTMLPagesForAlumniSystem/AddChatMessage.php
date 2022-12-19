<?php 
	    require_once $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/SessionManagement/SessionCheck.php'; 
        require_once "error.php";
        require_once $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/DatabaseConnection/CrudOperations.php';
		SessionCheck();
?>
<?php
    // echo $_POST['personal_chat_id'];

    if(isset($_POST['message']) && isset($_POST['user_id']) && isset($_POST['user_name']) && isset($_POST['personal_chat_id']) && isset($_POST['show_user_name']))
    {
        $message = $_POST['message'];
        $user_id = $_POST['user_id'];
        $user_name = $_POST['user_name'];
        $personal_chat_id = $_POST['personal_chat_id'];
        $Show_User_Name = $_POST['show_user_name'];
        $user_index = $_POST['user_index'];
        $connection = ConnectToDB();
        $query = "insert into tbl_chat_message(personal_chat_id,content,sender_id,sender_name,created_by,modified_by)values
        ($personal_chat_id,'$message',$user_id,'$user_name',$user_id,$user_id)";
        mysqli_query($connection,$query);
        $query = "update tbl_personal_chats set read_user_1 = 1 , read_user_2 = 1 where personal_chat_id = $personal_chat_id";
        mysqli_query($connection,$query);
        CloseConnection($connection); 
        echo "done";
        header("location: Chat.php?user_id=$user_id&user_name=$user_name&personal_chat_id=$personal_chat_id&show_user_name=$Show_User_Name&user_index=$user_index");
    }
    else
        echo "not set";
?>