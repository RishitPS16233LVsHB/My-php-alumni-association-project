<?php 
	    require_once $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/SessionManagement/SessionCheck.php'; 
        require_once $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/DatabaseConnection/Connections.php'; 
        SessionCheck();
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/HomePage_css/all.css">
    <link rel="stylesheet" type="text/css" href="css/HomePage_css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/HomePage_css/lightbox.css">
    <link rel="stylesheet" type="text/css" href="css/HomePage_css/flexslider.css">
    <link rel="stylesheet" type="text/css" href="css/HomePage_css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/HomePage_css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="css/HomePage_css/jquery.rateyo.css" />
    <link rel="stylesheet" type="text/css" href="inner-page-style.css">
    <link rel="stylesheet" type="text/css" href="HomePage_style.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/HomePage_css/johndoe.css">
    <style>
    * {
        margin: 0;
        padding: 0;
    }

    .container-fluid {
        background-color: rgb(239, 244, 253);
    }

    .card-body {
        /* background-color:black; */
        margin-bottom: 8px;
        padding: 15px 45px;
        border: 1px solid grey;
        border-radius: 12px;
        background-color: whitesmoke;
    }

    .username {
        color: black;
    }

    .username:visited {
        color: black;
    }

    .postTime {
        font-size: small;
        color: grey;
    }
    </style>
</head>

<body>
    <header class="site-header" style="background-color: white;">
        <div class="top-header">
            <div class="container">
                <div class="top-header-left">
                    <div class="top-header-block">
                        <a href="mailto:info@educationpro.com" itemprop="email"><i class="fas fa-envelope"></i>
                            director.bmiit@utu.ac.in</a>
                    </div>
                    <div class="top-header-block">
                        <a href="tel:+91 2622 290562" itemprop="telephone"><i class="fas fa-phone"></i> +91 2622
                            290562</a>
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
                    </div>
                </div>
            </div>
        </div>
        <!-- Top header Close -->
        <div class="main-header">
            <div class="container">
                <div class="logo-wrap" itemprop="logo">


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
    <section class="section" id="resume" style="background-color: white; position : fixed;">
        <div id="mySidepanel" class="sidepanel">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
            <a href="Login.php">Home</a>
            <a href="">Manage Profile</a>
            <a href="">Change Password</a>
            <a href="">Manage Occupation</a>
            <a href="">Manage Post</a>
            <a href="">Manage Events</a>
        </div>
    </section>
    <div class="container-fluid">


        <div class="col-md-8 col-sm-8">
            <div class="right_bottun">
                <button class="openbtn" onclick="openNav()"><img class="menuimg" src="HomePage_images/menu_icon.png"
                        alt="#" />
                </button>
            </div>
        </div>


        <!-- <h2 class="mb-5"><span class="text-danger">P</span>rofile</h2> -->
        <div class="row">
            <?php 
                    if(!PHP_SESSION_ACTIVE)
                        session_start();
                    if(isset($_SESSION['userid']) && !empty($_SESSION['userid']))
                    {
                        try{
                            $userID = $_SESSION['userid'];
                            $connection = ConnectToDB();
                            $query = "select  
                                            tbl_user.user_id,
                                            tbl_user.user_name,
                                            tbl_user.profile_photo_path,
                                            tbl_community_post.post_title,
                                            tbl_community_post.content,
                                            tbl_community_post.post_image,
                                            tbl_community_post.upload_time
                                                from tbl_user,tbl_community_post where tbl_user.user_id = tbl_community_post.user_id and
                                                tbl_community_post.is_enabled = 'y' order by tbl_community_post.upload_time desc;";
                            $result = mysqli_query($connection,$query);
                            CloseConnection($connection);
                        }
                        catch(Exception $error)
                        {
                        }
                    }
                    else
                        error("not properly logged in",$_SERVER['DOCUMENT_ROOT']."/PHPAlumniProject/Login.php");
                    ?>
            <div class="col-md-6 col-lg-12">

                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Posts</h1>
                <div class="container">
                    <?php foreach($result as $rows){?>
                    <div class="card-body" style="width:100%">
                        <div style="width:50px;height:50px">
                            <?php if(isset($rows['profile_photo_path'])){?>
                            <img src="<?php $path = substr($rows['post_image'],strlen("C:/xampp/htdocs/PHPAlumniProject/"),strlen($rows['post_image']));echo $path;?>"
                                alt="your certificate or photo was here!!!"
                                style="border-radius:50%;object-fit:contain;width:auto;height:auto">
                            <?php } ?>
                        </div>
                        <h5 class="title  text-danger"><b><a class="username"
                                    href="OtherUserProfile.php?userid=<?php echo $rows['user_id'];?>"><?php echo @$rows['user_name'];?></a></b>
                        </h5>
                        <p class="postTime"><?php echo $rows['upload_time'];?></p>
                        <br><b>
                            <h1 style="font-weight:bold;"><?php echo $rows['post_title'];?></h1>
                        </b>
                        <P class="subtitle" style="font-size:large;"> <?php echo $rows['content'];?></P>
                        <?php if(isset($rows['post_image'])){?>
                        <img src="<?php $path = substr($rows['post_image'],strlen("C:/xampp/htdocs/PHPAlumniProject/"),strlen($rows['post_image']));echo $path;?>"
                            alt="your certificate or photo was here!!!"
                            style="object-fit:contain;width:20%;height:20% ; border-radius:10%; margin-bottom:10px;">
                        <?php }?>

                    </div>

                    <?php } ?>
                </div>

            </div>
            <script type="text/javascript" src="HomePage_js/jquery-3.3.1.min.js"></script>
            <script type="text/javascript" src="HomePage_js/lightbox.js"></script>
            <script type="text/javascript" src="HomePage_js/all.js"></script>
            <script type="text/javascript" src="HomePage_js/isotope.pkgd.min.js"></script>
            <script type="text/javascript" src="HomePage_js/owl.carousel.js"></script>
            <script type="text/javascript" src="HomePage_js/jquery.flexslider.js"></script>
            <script type="text/javascript" src="HomePage_js/jquery.rateyo.js"></script>
            <script type="text/javascript" src="HomePage_js/custom.js"></script>
            <script>
            function openNav() {
                document.getElementById("mySidepanel").style.width = "250px";
            }

            function closeNav() {
                document.getElementById("mySidepanel").style.width = "0";
            }
            </script>
</body>

</html>