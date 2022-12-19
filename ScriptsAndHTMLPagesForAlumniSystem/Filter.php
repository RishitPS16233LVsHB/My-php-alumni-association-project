<?php 
	    require_once $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/SessionManagement/SessionCheck.php'; 
        require_once $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/DatabaseConnection/Connections.php'; 
        SessionCheck();
?> 
<?php
    if(isset($_POST['is_location']))
    {
        $connection = ConnectToDB();
        if(!isset($_POST['location']) || empty($_POST['location']))
            die("location not selected");
        $query = "select * from tbl_user where place_of_work_id = ".$_POST['location']."";
        $Result1 = mysqli_query($connection,$query);s
        CloseConnection($connection);
    }
    if(isset($_POST['is_experience']))
    {
        $connection = ConnectToDB();
        if(!isset($_POST['experience']) || empty($_POST['experience']))
            die("location not selected");
        $query = "select * from tbl_user where experience = ".$_POST['experience']."";
        $Result2 = mysqli_query($connection,$query);
        CloseConnection($connection);
    }
    if(isset($_POST['is_technology']))
    {
        $connection = ConnectToDB();
        if(!isset($_POST['technology']) || empty($_POST['technology']))
            die("location not selected");
        $query = "select * from tbl_user where technology_id = ".$_POST['technology']."";
        $Result3 = mysqli_query($connection,$query);s        
        CloseConnection($connection);   
    }
?>


                <?php if(mysqli_num_rows($Result1) != 0){foreach($Result1 as $rows){?>
                    <div class="chattingWindow">
                        <div class="ChatWin">
                            <!-- this is a left side message -->
                            <ul class="p-0">
                                <li>
                                    <div class="row comments mb-2">
                                        <!-- image div for user profile photo-->
                                        <div class="col-md-1 col-sm-2 col-3 text-center user-img" style = "padding-top:21px">
                                            <!-- <img id="profile-photo" src="http://nicesnippets.com/demo/man04.png" -->
                                                <!-- class="rounded-circle" /> -->
                                        </div>
                                        <!-- message body here-->
                                        <div class="col-md-10 col-sm-5s col-5 comment rounded mb-4" style = "margin-top:12px">
                                            <!-- sender name here-->
                                            <h4 class="m-0"><a href = "OtherUserProfile.php?userid=<?php echo $rows['user_id'];?>">@<?php echo $rows['user_name']?></a></h4>
                                            <!-- <time class="text-white ml-3">1 hours ago</time> -->
                                            <p class="mb-0 text-white">
                                                <a class = "OpenButton" href="CreateChat.php?user_id=<?php echo $rows['user_id'];?>&user_name=<?php echo $rows['user_name'];?>">Start a chat 
                                                    <img src="HomePage_images/ChatHere.png" class="sendButton">
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>  
                <?php }} ?>

                <?php if(mysqli_num_rows($Result1) != 0){foreach($Result2 as $rows){?>
                    <div class="chattingWindow">
                        <div class="ChatWin">
                            <!-- this is a left side message -->
                            <ul class="p-0">
                                <li>
                                    <div class="row comments mb-2">
                                        <!-- image div for user profile photo-->
                                        <div class="col-md-1 col-sm-2 col-3 text-center user-img" style = "padding-top:21px">
                                            <!-- <img id="profile-photo" src="http://nicesnippets.com/demo/man04.png" -->
                                                <!-- class="rounded-circle" /> -->
                                        </div>
                                        <!-- message body here-->
                                        <div class="col-md-10 col-sm-5s col-5 comment rounded mb-4" style = "margin-top:12px">
                                            <!-- sender name here-->
                                            <h4 class="m-0"><a href = "OtherUserProfile.php?userid=<?php echo $rows['user_id'];?>">@<?php echo $rows['user_name']?></a></h4>
                                            <!-- <time class="text-white ml-3">1 hours ago</time> -->
                                            <p class="mb-0 text-white">
                                                <a class = "OpenButton" href="CreateChat.php?user_id=<?php echo $rows['user_id'];?>&user_name=<?php echo $rows['user_name'];?>">Start a chat 
                                                    <img src="HomePage_images/ChatHere.png" class="sendButton">
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>  
                <?php } }?>
                <?php if(mysqli_num_rows($Result1) != 0){foreach($Result3 as $rows){?>
                    <div class="chattingWindow">
                        <div class="ChatWin">
                            <!-- this is a left side message -->
                            <ul class="p-0">
                                <li>
                                    <div class="row comments mb-2">
                                        <!-- image div for user profile photo-->
                                        <div class="col-md-1 col-sm-2 col-3 text-center user-img" style = "padding-top:21px">
                                            <!-- <img id="profile-photo" src="http://nicesnippets.com/demo/man04.png" -->
                                                <!-- class="rounded-circle" /> -->
                                        </div>
                                        <!-- message body here-->
                                        <div class="col-md-10 col-sm-5s col-5 comment rounded mb-4" style = "margin-top:12px">
                                            <!-- sender name here-->
                                            <h4 class="m-0"><a href = "OtherUserProfile.php?userid=<?php echo $rows['user_id'];?>">@<?php echo $rows['user_name']?></a></h4>
                                            <!-- <time class="text-white ml-3">1 hours ago</time> -->
                                            <p class="mb-0 text-white">
                                                <a class = "OpenButton" href="CreateChat.php?user_id=<?php echo $rows['user_id'];?>&user_name=<?php echo $rows['user_name'];?>">Start a chat 
                                                    <img src="HomePage_images/ChatHere.png" class="sendButton">
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>  
                <?php } }?>




