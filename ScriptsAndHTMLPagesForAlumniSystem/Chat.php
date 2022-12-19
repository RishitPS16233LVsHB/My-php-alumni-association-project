<?php 
    require_once 'SessionManagement/SessionCheck.php';
    require_once 'error.php';
    require_once 'DatabaseConnection/Connections.php';
    SessionCheck();
?>

<?php 
    if(!(isset($_GET['user_id']) && isset($_GET['personal_chat_id'])))
        error("server error","homePage.php");
    else
    {
        // user_id is not you
        $user_id = $_GET['user_id'];
        // Current_id is you
        $Current_ID = $_SESSION['userid'];
        $personal_chat_id = $_GET['personal_chat_id'];  
        $user_index = $_GET['user_index'];      
        if(!(isset($_GET['user_name']) && isset($_GET['show_user_name'])))
        {
            $connection = ConnectToDB();

            if($user_index == 1)
                $query = "update tbl_personal_chats set read_user_2 = 0 where personal_chat_id = $personal_chat_id";
            else if($user_index == 2)
                $query = "update tbl_personal_chats set read_user_1 = 0 where personal_chat_id = $personal_chat_id";
            else
                die("user index is invalid");

            mysqli_query($connection,$query);            

            $query = "select user_name from tbl_user where user_id = $user_id";
            $result = mysqli_query($connection,$query);
            $query = "select user_name from tbl_user where user_id = $Current_ID";
            $result1 = mysqli_query($connection,$query);
            if($result)
            {
                foreach($result as $r)
                    $Show_user_name = $r['user_name'];  
                foreach($result1 as $r)
                    $user_name = $r['user_name'];   
                CloseConnection($connection);
            }
            else
                CloseConnection($connection);
        }
        else
        {
            $user_name = $_GET['user_name'];
            $Show_user_name = $_GET['show_user_name'];
        }
    }
?> 
<!doctype html>
<html lang="en">

<head>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"
        integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css"
        integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="Chatcss.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css"/>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
</head>

<body>
    <div class="row comment-box-main p-4 rounded-bottom mb-2">
        <a class="BackButton" href="OriginalChat.php"> <img src="Images/BackButton.png" class="BackButton"></a>
        <h3 class="ChatTitle"> <?php echo $Show_user_name; ?> </h3>        
    </div>

   




    <div class="chattingWindow">
        <div class="ChatWin">
            <?php
                $connection = ConnectToDB();
                $query = "select content,sender_name from tbl_chat_message where personal_chat_id = $personal_chat_id";
                $result = mysqli_query($connection,$query);
                CloseConnection($connection);
                foreach($result as $rows){
            ?>
            <ul class="p-0">
                <li>
                    <div class="row comments mb-2">
                        <div class="col-md-8 col-sm-5 col-5 comment rounded mb-2">
                            <h4 class="m-0"><a href="#"><?php echo $rows['sender_name'];?></a></h4>
                            <p class="mb-0 text-white"><?php echo $rows['content'];?></p>
                        </div>
                    </div>
                </li>
            </ul>            
            <?php } ?>
        </div>
    </div>  

    <div class="row comment-box-main p-3 rounded-bottom Chatmessage">
        <form action = "AddChatMessage.php" method = "post" enctype = "multipart/form-data">
            <div class="col-md-9 col-sm-9 col-9 pr-0 comment-box" style = "padding-right:100px">
                <input type="hidden" name = "user_id"  value = "<?php echo $user_id;?>">
                <input type="hidden" name = "user_name"  value = "<?php echo $user_name;?>">
                <input type="hidden" name = "show_user_name"  value = "<?php echo $Show_user_name;?>">                
                <input type="hidden" name = "personal_chat_id" value = "<?php echo $_GET['personal_chat_id'];?>">
                <input type="hidden" name = "user_index" value = "<?php echo $_GET['user_id'];?>">                
                <input type="text" style = "width:1000px;" class="form-control" placeholder="message...." name = "message" id = "message" required>
            </div>
                <!-- <button class="sendButton"> <img src="Images/Attach.png" class="AttachButton"></button> -->
                <input  type = "submit" value = "send!">
        </form>
    </div>

</body>
<script src='https://cdnjs.cloudflare.com/ajax/libs/vue/0.12.14/vue.min.js'></script>

</html>