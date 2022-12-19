<?php    
    require_once $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/SessionManagement/SessionCheck.php'; 
    SessionCheck();
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
</head>

<body>

    <div class="row comment-box-main p-4 rounded-bottom">    
        <a class="BackButton"  href="OriginalChat.php"> <img class="BackButton" src="Images/BackButton.png" ></a>
        <h3 class = "ChatTitle"> Chats </h3>
    </div> 


    <div class = "chattingWindow">
                <div class="ChatWin">
                    <!-- this is a right side message -->
                        <ul class="p-0">
                            <li>
                                <div class="row comments mb-2">
                                    
                                    <div
                                        class="col-md-1 col-sm-1  col-2 text-center user-img">
                                        <img id="profile-photo" src="http://nicesnippets.com/demo/man04.png" class="rounded-circle" />
                                    </div>


                                    <div class="col-md-5 col-sm-5 col-5 comment rounded mb-2">
                                        <h4 class="m-0"><a href="#">Rishit selia</a></h4>
                                        <time class="text-white ml-3">1 min ago</time>
                                        <p class="mb-0 text-white"><button class = "OpenButton">open chat <img src = "Images/ChatHere.png" class  ="sendButton"></button>
                                            <button class = "OpenButton">Delete chat <img src = "Images/Delete.png" class  ="sendButton"></button></p>
                                    </div>
                                </div>

                            </li>
                        </ul>

                    <!-- this is a left side message -->
                    <ul class="p-0">
                        <li>                        
                            <div class="row comments mb-2">

                                <!-- image div for user profile photo-->
                                <div class="col-md-1 col-sm-2 col-3 text-center user-img">
                                    <img id="profile-photo" src="http://nicesnippets.com/demo/man03.png" class="rounded-circle" />
                                </div>
                                
                                <!-- message body here-->
                                <div class="col-md-5 col-sm-5 col-5 comment rounded mb-2">
                                    <!-- sender name here-->
                                    <h4 class="m-0"><a href="#">Hetvi Bodhanwala</a></h4>
                                    <time class="text-white ml-3">1 hours ago</time>
                                    <p class="mb-0 text-white"><button class = "OpenButton">open chat <img src = "Images/ChatHere.png" class  ="sendButton"></button>
                                        <button class = "OpenButton">Delete chat <img src = "Images/Delete.png" class  ="sendButton"></button></p>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <!-- this is a left side message -->
                    <ul class="p-0">
                        <li>                        
                            <div class="row comments mb-2">

                                <!-- image div for user profile photo-->
                                <div class="col-md-1 col-sm-2 col-3 text-center user-img">
                                    <img id="profile-photo" src="http://nicesnippets.com/demo/man03.png" class="rounded-circle" />
                                </div>
                                
                                <!-- message body here-->
                                <div class="col-md-5 col-sm-5 col-5 comment rounded mb-2">
                                    <!-- sender name here-->
                                    <h4 class="m-0"><a href="#">Hetvi Bodhanwala</a></h4>
                                    <!-- time here-->
                                    <time class="text-white ml-3">1 hours ago</time>
                                    <!-- message here -->                                                                        
                                    <p class="mb-0 text-white"><button class = "OpenButton">open chat <img src = "Images/ChatHere.png" class  ="sendButton"></button>
                                    <button class = "OpenButton">Delete chat <img src = "Images/Delete.png" class  ="sendButton"></button></p>
                                </div>
                            </div>
                        </li>
                    </ul>
                    

                    <!-- this is a left side message -->
                    <ul class="p-0">
                        <li>                        
                            <div class="row comments mb-2">

                                <!-- image div for user profile photo-->
                                <div class="col-md-1 col-sm-2 col-3 text-center user-img">
                                    <img id="profile-photo" src="http://nicesnippets.com/demo/man03.png" class="rounded-circle" />
                                </div>
                                
                                <!-- message body here-->
                                <div class="col-md-5 col-sm-5 col-5 comment rounded mb-2">
                                    <!-- sender name here-->
                                    <h4 class="m-0"><a href="#">Hetvi Bodhanwala</a></h4>
                                    <time class="text-white ml-3">1 hours ago</time>
                                    <p class="mb-0 text-white"><button class = "OpenButton">open chat <img src = "Images/ChatHere.png" class  ="sendButton"></button>
                                        <button class = "OpenButton">Delete chat <img src = "Images/Delete.png" class  ="sendButton"></button></p>
                                </div>
                            </div>
                        </li>
                    </ul>

                    <!-- <div class="row comment-box-main p-3 rounded-bottom">
                        <div class="col-md-9 col-sm-9 col-9 pr-0 comment-box">
                            <input type="text" class="form-control" placeholder="comment ...." />
                        </div>
                        <div class="col-md-3 col-sm-2 col-2 pl-0 text-center send-btn">
                            <button class="btn btn-info">Send</button>
                        </div>
                    </div> -->
                <!-- </div> -->

            </div>
    </div>

    <!-- <div class="row comment-box-main p-3 rounded-bottom">
        <div class="col-md-9 col-sm-9 col-9 pr-0 comment-box">
            <input type="text" class="form-control" placeholder="comment ...." />
        </div>
            <button class="sendButton"> <img src = "Images/Attach.png" class = "AttachButton"></button>
            <button class="sendButton"> <img src = "Images/send.png" class = "sendButton"></button>
    </div>
    -->
</body>
<script src='https://cdnjs.cloudflare.com/ajax/libs/vue/0.12.14/vue.min.js'></script>

</html>