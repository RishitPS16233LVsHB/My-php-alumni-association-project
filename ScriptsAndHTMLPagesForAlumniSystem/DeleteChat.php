<?php
    require_once "error.php";
    require_once "DatabaseConnection/Connections.php";


    if(isset($_GET['chat_id']) && isset($_GET['user_id']))
    {
        $connection = ConnectToDB();
        $user_id = $_GET['user_id'];
        $id = $_GET['chat_id'];
        $query = "update tbl_personal_chats set is_enabled = 'n', modified_by = $user_id where personal_chat_id = $id";
        mysqli_query($connection,$query);
        CloseConnection($connection);
        header("location: OriginalChat.php");
    }
    else
        error("server error","homePage.php");
?>