<?php 
	    require_once $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/SessionManagement/SessionCheck.php'; 
        require_once $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/DatabaseConnection/Connections.php'; 
        SessionCheck();
        echo $_SESSION['userid'];
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
                        <a href="tel:+91 2622 290562" itemprop="telephone"><i class="fas fa-phone"></i> +91 2622 290562</a>
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
                            <li class="menu-parent">Post
									<ul class="sub-menu">
										<li><a href="CreatePost.php">Post</a></li>
										<li><a href="CreateEvent.php">Event</a></li>
										<li><a href="CreateJob.php">Jobs</a></li>
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
    <section class="section" id="resume" style="background-color: white;">
        <div id="mySidepanel" class="sidepanel">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
            <a href="Login.php">Home</a>
            <a href="">Manage Profile</a>
            <a href="">Change Password</a>
            <a href="">Manage Occupation</a>
            <a href="">Manage Post</a>
            <a href="">Manage Events</a>
        </div>
        <div class="container">


            <div class="col-md-8 col-sm-8">
                <div class="right_bottun">
                    <button class="openbtn" onclick="openNav()"><img class="menuimg" src="HomePage_images/menu_icon.png"
                            alt="#" />
                    </button>
                </div>
            </div>


            <h2 class="mb-5"><span class="text-danger">P</span>rofile</h2>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <div class="mt-2">
                                <h4 class="title">Experience</h4>
                                <span class="line"></span>
                            </div>
                        </div>
                        <div class="card-body">
                            <?php 
                                if(!PHP_SESSION_ACTIVE)
                                    session_start();
                                if(isset($_GET['userid']) && !empty($_GET['userid']))
                                {
                                    try{
                                        $userID = $_GET['userid'];
                                        $connection = ConnectToDB();
                                        $query = "select * from tbl_user_experience where user_id = $userID and is_enabled = 'y'";
                                        $result = mysqli_query($connection,$query);
                                        if(mysqli_num_rows($result) == 0)
                                            echo "It seems like you have not shared your experiences with us!!";
                                        CloseConnection($connection);
                                    }
                                    catch(Exception $error)
                                    {
                                    }
                                }
                                else
                                    error("not properly logged in",$_SERVER['DOCUMENT_ROOT']."/PHPAlumniProject/Login.php");
                                foreach($result as $rows){
                            ?>


                                <h6 class="title text-danger"><?php echo date("Y-m-d", strtotime($rows['Start_Date']));?> -- <?php echo date("Y-m-d", strtotime($rows['End_Date']));?></h6>
                                <P><?php echo $rows['experience_title'];?></P>
                                <P class="subtitle"> <?php echo $rows['Experience_Description'];?></P>
                                <hr>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <div class="mt-2">
                                <h4 class="title">Achievements</h4>
                                <span class="line"></span>
                            </div>
                        </div>
                        <div class="card-body">
                            <!--  connection and fetch code here-->
                            <?php 
                                if(!PHP_SESSION_ACTIVE)
                                    session_start();
                                if(isset($_GET['userid']) && !empty($_GET['userid']))
                                {
                                    try{
                                        $userID = $_GET['userid'];
                                        $connection = ConnectToDB();
                                        $query = "select * from tbl_user_achievement where user_id = $userID and is_enabled = 'y'";
                                        $result = mysqli_query($connection,$query);
                                        if(mysqli_num_rows($result) == 0)
                                            echo "It seems like you have not shared your achievment with us!!";
                                        CloseConnection($connection);
                                    }
                                    catch(Exception $error)
                                    {
                                    }
                                }
                                else
                                    error("not properly logged in",$_SERVER['DOCUMENT_ROOT']."/PHPAlumniProject/Login.php");
                            ?>
                            <?php foreach($result as $rows){?>
                                <h6 class="title text-danger"><?php echo $year = date("Y",strtotime($rows['Achievement_Date']));?></h6>
                                <P><?php echo $rows['achievement_title'];?></P>
                                <P class="subtitle">
                                    <?php echo $rows['Achievement_Description'];?>
                                </P>
                                <?php if(isset($rows['certificate_path'])){?>
                                    <img src = "<?php $path = substr($rows['certificate_path'],strlen("C:/xampp/htdocs/PHPAlumniProject/"),strlen($rows['certificate_path']));echo $path;?>" alt = "your certificate or photo was here!!!"style = "width:80%;height:5%">
                                <?php }?>
                            <hr>
                            <?php }?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <div class="pull-left">
                                <h4 class="mt-2 title">Personal Info</h4>
                                <span class="line"></span>
                            </div>
                        </div>
                        <div class="card-body pb-2">
                            <?php 
                                if(!PHP_SESSION_ACTIVE)
                                    session_start();
                                if(isset($_GET['userid']) && !empty($_GET['userid']))
                                {
                                    try{
                                        $userID = $_GET['userid'];
                                        $connection = ConnectToDB();
                                        $query = "select tbl_user.enrollment_number, 
                                                        tbl_user.user_name,
                                                        tbl_user.gender,
                                                        tbl_user.profile_photo_path,
                                                        tbl_user.contact_number,
                                                        tbl_user.email_id,
                                                        tbl_user.date_of_birth,
                                                        tbl_user.experience,
                                                        tbl_user.current_company_working_in,
                                                        tbl_batch.batch_name,
                                                        tbl_job_title.job_title,
                                                        tbl_place_of_work.place_of_work
                                                        from tbl_user,tbl_batch,tbl_place_of_work,tbl_job_title                                                         
                                                        where 
                                                            tbl_user.user_id = $userID and
                                                            tbl_user.batch_id = tbl_batch.batch_id and
                                                            tbl_user.place_of_work_id = tbl_place_of_work.place_of_work_id and
                                                            tbl_user.job_title_id = tbl_job_title.job_title_id and
                                                            tbl_user.is_enabled = 'y';";
                                        $result = mysqli_query($connection,$query);
                                        foreach($result as $r)
                                            $row = $r;
                                        CloseConnection($connection);
                                    }
                                    catch(Exception $error)
                                    {
                                    }
                                }
                                else
                                    error("not properly logged in",$_SERVER['DOCUMENT_ROOT']."/PHPAlumniProject/Login.php");
                            ?>
                            <ul class="mt40 info list-unstyled">
                                <?php if(isset($row['profile_photo_path'])){ ?>
                                    <li>                                         
                                        <img class="flex-shrink-0 img-fluid border rounded" src="
                                        <?php $path = TrimPath($row,'profile_photo_path');
                                            echo $path;
                                        ?>" 
                                        alt="" style="width:auto; height:auto;"></li>
                                <?php } ?>
                                <li><span class="details">Enrollment Number</span> : <?php echo $row['enrollment_number']; ?></li>
                                <li><span class="details">User Name</span> : <?php echo $row['user_name']; ?></li>
                                <li><span class="details">Gender</span> : <?php echo $row['gender'] == 'f'? "female": "male"; ?></li>
                                <li><span class="details">Contact Number</span> : <?php echo $row['contact_number']; ?> </li>
                                <li><span class="details">Email Address</span> : <?php echo $row['email_id']; ?></li>
                                <li><span class="details">Date of birth</span> : <?php echo date("Y-m-d",strtotime($row['date_of_birth'])); ?></     li>
                                <li><span class="details">Experience</span> : <?php echo $row['experience']; ?> </li>
                                <li><span class="details">Current Company</span> : <?php echo $row['current_company_working_in']; ?></li>
                                <li><span class="details">Designation</span> : <?php echo $row['job_title']; ?></li>
                                <li><span class="details">Place of Work</span> : <?php echo $row['place_of_work']; ?> </li>
                                <li><span class="details">Batch</span> : <?php echo $row['batch_name']; ?> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <div class="pull-left">
                                <h4 class="mt-2 title">Skills</h4>
                                <span class="line"></span>
                            </div>
                        </div>
                        <div class="card-body pb-2">
                            <?php 
                                    if(!PHP_SESSION_ACTIVE)
                                        session_start();
                                    if(isset($_GET['userid']) && !empty($_GET['userid']))
                                    {
                                        try{
                                            $userID = $_GET['userid'];
                                            $connection = ConnectToDB();
                                            $query = "select technology_name from tbl_technology where technology_id in(select technology_id from tbl_user_technology where user_id = ".$_SESSION['userid']." and is_enabled = 'y');";
                                            $result = mysqli_query($connection,$query);
                                            if(mysqli_num_rows($result) == 0)
                                                echo "It seems like you have not added your list of technology!!";
                                            CloseConnection($connection);
                                        }
                                        catch(Exception $error)
                                        {
                                        }
                                    }
                                    else
                                        error("not properly logged in",$_SERVER['DOCUMENT_ROOT']."/PHPAlumniProject/Login.php");
                            ?>
                            <?php foreach($result as $row){ 0?>
                            <h6><?php echo $row['technology_name'];?></h6>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
    </section>


    
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