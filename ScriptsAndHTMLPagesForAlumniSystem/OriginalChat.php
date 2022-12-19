
<?php
    require_once $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/DatabaseConnection/CrudOperations.php'; 
	require_once $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/SessionManagement/SessionCheck.php'; 
    require_once $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/error.php';
	SessionCheck();
?>



<?php
    // $query = "select personal_chat_id,personal_chat_name,user_2,user_1 from tbl_personal_chats where (user_1 = ".$_SESSION['userid']." || user_2 = ".$_SESSION['userid'].") and is_enabled = 'y'";
    // $connection = ConnectToDB();
    // $result1 = mysqli_query($connection,$query);
    // foreach($result1 as $ro)
    //     echo $ro['personal_chat_name'] . " " . $ro['user_1'] . " " . $ro['user_2'] . "<br>";
    // CloseConnection($connection);

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
    <link rel="stylesheet" href="css/HomePage_css/OriginalChatCss.css">
    <meta name="viewport" content="width=device-width">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/HomePage_css/all.css">
	<link rel="stylesheet" type="text/css" href="css/HomePage_css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/HomePage_css/lightbox.css">
	<link rel="stylesheet" type="text/css" href="css/HomePage_css/flexslider.css">
	<link rel="stylesheet" type="text/css" href="css/HomePage_css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="css/HomePage_css/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="css/HomePage_css/jquery.rateyo.css" />
	<!-- <link rel="stylesheet" type="text/css" href="css/jquery.mmenu.all.css" /> -->
	<!-- <link rel="stylesheet" type="text/css" href="css/meanmenu.min.css"> -->
	<link rel="stylesheet" type="text/css" href="inner-page-style.css">
	<link rel="stylesheet" type="text/css" href="HomePage_style.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;600&display=swap" rel="stylesheet">
</head>

<body>
    <header class="site-header">
        <div class="top-header">
            <div class="container">
                <div class="top-header-left">
                    <div class="top-header-block">
                        <a href="mailto:info@educationpro.com" itemprop="email"><i class="fas fa-envelope"></i>
                            info@educationpro.com</a>
                    </div>
                    <div class="top-header-block">
                        <a href="tel:+9779813639131" itemprop="telephone"><i class="fas fa-phone"></i> +977
                            9813639131</a>
                    </div>
                </div>
                <div class="top-header-right">
                    <div class="social-block">
                        <ul class="social-list">
                            <li><a href=""><i class="fab fa-viber"></i></a></li>
                            <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href=""><i class="fab fa-facebook-square"></i></a></li>
                            <li><a href=""><i class="fab fa-facebook-messenger"></i></a></li>
                            <li><a href=""><i class="fab fa-twitter"></i></a></li>
                            <li><a href=""><i class="fab fa-skype"></i></a></li>
                        </ul>
                    </div>
                    <div class="login-block">
                        <a href="LogoutSession.php" id="logOut">Log Out</a>
                        <!-- onclick="preventBack()" -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Top header Close -->
        <div class="main-header">
            <div class="container">
                <div class="logo-wrap" itemprop="logo">
                    <!-- <img src="HomePage_images/site-logo.jpg" alt="Logo Image"> -->
                    <!-- <h1>Education</h1> -->
                </div>
                <div class="nav-wrap">
                    <nav class="nav-desktop">
                        <ul class="menu-list">
                            <li><a href="homePage.php">Home</a></li>
                            <li class="menu-parent">Create Post
                                <ul class="sub-menu">
                                    <li><a href="CreatePost.php">Create Post</a></li>
                                    <li><a href="CreateEvent.php">Create Event</a></li>
                                    <li><a href="CreateJob.php">Create Jobs</a></li>
                                </ul>
                            </li>                            
                            <li><a href="Posts.php">Posts</a></li>
                            <li><a href="Jobs.php">Jobs</a></li>
							<li><a href="Events.php">Events</a></li>
                            <li><a href="OriginalChat.php">Chats</a></li>
                            <li><a href="profile.php">Profile</a></li>
                        </ul>
                    </nav>
                    <div id="bar">
                        <i class="fas fa-bars"></i>
                    </div>
                    <div id="close">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container" id="container">
        <div class=" row comment-box-main p-4 rounded-bottom text-center">
            <h3 class="ChatTitle"> Chats </h3>
            <form action = "OriginalChat.php" method = "post" style = "padding-left:59%;">
            <h4 class="ChatTitle"> Search your friends : <input type = "text" name = "search"> <input type = "submit" value = "search" > </h4>  
            </form>
        </div>
        <?php
            try
            {                
                $connection = ConnectToDB();
                if(!PHP_SESSION_ACTIVE)
                    session_start();
                if(isset($_SESSION['userid']) && !empty($_SESSION['userid']))
                {
                    if(isset($_POST['search']))
                        $query = "select user_id,user_name from tbl_user where user_name like '%".$_POST['search']."%' and user_id != ".$_SESSION['userid']." and is_enabled = 'y';";
                    else                
                        $query = "select personal_chat_id,personal_chat_name,user_2,user_1 from tbl_personal_chats where (user_1 = ".$_SESSION['userid']." || user_2 = ".$_SESSION['userid'].") and is_enabled = 'y'";

                    //echo $query;
                    $result = mysqli_query($connection,$query);
                    CloseConnection($connection);

                    $ro = array();
                    foreach($result as $r)
                    {
                        //echo $r['personal_chat_name'] . " " . $r['user_1'] . " " . $r['user_2'] . "<br>";
                        $ro[] = $r;
                    }


                    if(mysqli_num_rows($result) == 0)
                        echo "<h2 style = \"color:darkblue;\"><b><i>no chats or user found!</i></b></h2>";
                }
                else
                    error("not properly logged in",$_SERVER['DOCUMENT_ROOT']."/PHPAlumniProject/Login.php");
            }
            catch(Exception $error){}
        ?>
        <?php if(isset($_POST['search'])){?>
            <?php foreach($ro as $rows){?>
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
                <?php } ?>
           <?php } 
           else { ?>
                <?php foreach($ro as $rows)
                {
                        if($rows['user_2'] === $_SESSION['userid']){
                            $Other_User_ID = $rows['user_1'];
                            $UserIndex = 1;
                        }
                        else
                        {
                            $Other_User_ID = $rows['user_2']; 
                            $UserIndex = 2;
                        }
                        $connection = ConnectToDB();
                        $Query = "select user_name,user_id from tbl_user where user_id = $Other_User_ID";
                        $re = mysqli_query($connection,$Query);

                        foreach($re as $r){
                            $Other_User_Name = $r['user_name'];
                            $Other_User_ID = $r['user_id'];
                        }
                        CloseConnection($connection);
                ?> 
                    <div class="chattingWindow">
                        <div class="ChatWin">
                            <!-- this is a left side message -->
                            <ul class="p-0">
                                <li>
                                    <div class="row comments mb-2">
                                        <!-- image div for user profile photo-->
                                        <div class="col-md-1 col-sm-2 col-3 text-center user-img" style = "padding-top:21px">
                                            <!-- <img id="profile-photo" src="http://nicesnippets.com/demo/man04.png"
                                                class="rounded-circle" /> -->
                                        </div>
                                        <!-- message body here-->
                                        <div class="col-md-10 col-sm-5s col-5 comment rounded mb-4" style = "margin-top:12px">
                                            <!-- sender name here-->
                                            <h4 class="m-0"><a href = "OtherUserProfile.php?userid=<?php echo $Other_User_ID;?>">@<?php echo $Other_User_Name;?></a></h4>
                                            <p class="mb-0 text-white">
                                                <a class="OpenButton" href = "Chat.php?personal_chat_id=<?php echo $rows['personal_chat_id'];?>&user_id=<?php echo $Other_User_ID;?>&user_index=<?php echo $UserIndex;?>">Open Chat<img
                                                        src="HomePage_images/ChatHere.png" class="sendButton"></a>
                                                <a class="OpenButton" href = "DeleteChat.php?chat_id=<?php echo $rows['personal_chat_id'];?>&user_id=<?php echo $_SESSION['userid'];?>">Delete chat<img src="HomePage_images/Delete.png"
                                                        class="sendButton"></a>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>  
                <?php } ?>
            <?php } ?>








    </div>
    <script type="text/javascript" src="HomePage_js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="HomePage_js/lightbox.js"></script>
    <script type="text/javascript" src="HomePage_js/all.js"></script>
    <script type="text/javascript" src="HomePage_js/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="HomePage_js/owl.carousel.js"></script>
    <script type="text/javascript" src="HomePage_js/jquery.flexslider.js"></script>
    <script type="text/javascript" src="HomePage_js/jquery.rateyo.js"></script>
    <!-- <script type="text/javascript" src="js/jquery.mmenu.all.js"></script> -->
    <!-- <script type="text/javascript" src="js/jquery.meanmenu.min.js"></script> -->
    <script type="text/javascript" src="HomePage_js/custom.js"></script>
</body>
<script src='https://cdnjs.cloudflare.com/ajax/libs/vue/0.12.14/vue.min.js'></script>

</html>