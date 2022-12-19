<?php 
	    require_once $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/SessionManagement/SessionCheck.php'; 
        require_once $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/DatabaseConnection/Connections.php'; 
        SessionCheck();
        // echo $_SESSION['userid'] . "-----";
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
        .postcardBody {
        /* background-color:black; */
        margin-bottom: 8px;
        padding: 10px 20px;
        border: 1px solid grey;
        border-radius: 12px;
        background-color: whitesmoke;
    }   
    .username {
        color: white;
        font-size:large;
    }

    .username:visited {
        color: black;
    }
    .username:hover{

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
                        <span style="color : white">|</span>
                        <a href="setting.php">Settings</a>
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
    <section class="section" id="resume" style="background-color: white;">

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
                                if(isset($_SESSION['userid']) && !empty($_SESSION['userid']))
                                {
                                    try{
                                        $userID = $_SESSION['userid'];
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


                            <h6 class="title text-danger"><?php echo date("Y-m-d", strtotime($rows['Start_Date']));?> --
                                <?php echo date("Y-m-d", strtotime($rows['End_Date']));?></h6>
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
                                if(isset($_SESSION['userid']) && !empty($_SESSION['userid']))
                                {
                                    try{
                                        $userID = $_SESSION['userid'];
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
                            <h6 class="title text-danger">
                                <?php echo $year = date("Y",strtotime($rows['Achievement_Date']));?></h6>
                            <P><?php echo $rows['achievement_title'];?></P>
                            <P class="subtitle">
                                <?php echo $rows['Achievement_Description'];?>
                            </P>
                            <?php if(isset($rows['certificate_path'])){?>
                            <img src="<?php $path = substr($rows['certificate_path'],strlen("C:/xampp/htdocs/PHPAlumniProject/"),strlen($rows['certificate_path']));echo $path;?>"
                                alt="your certificate or photo was here!!!" style="height:40px; width:50px">
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
                                if(isset($_SESSION['userid']) && !empty($_SESSION['userid']))
                                {
                                    try{
                                        $userID = $_SESSION['userid'];
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
                                    error("not properly logged in",$_SERVER['DOC    UMENT_ROOT']."/PHPAlumniProject/Login.php");
                            ?>
                            <ul class="mt40 info list-unstyled">
                                <?php if(isset($row['profile_photo_path'])){ ?>
                                <li>
                                    <img class="flex-shrink-0 img-fluid border rounded" src="
                                        <?php $path = TrimPath($row,'profile_photo_path');
                                            echo $path;
                                        ?>" alt="" style="width:auto; height:auto;">
                                </li>
                                <?php } ?>
                                <li><span class="details">Enrollment Number</span> :
                                    <?php echo $row['enrollment_number']; ?></li>
                                <li><span class="details">User Name</span> : <?php echo $row['user_name']; ?></li>
                                <li><span class="details">Gender</span> :
                                    <?php echo $row['gender'] == 'f'? "female": "male"; ?></li>
                                <li><span class="details">Contact Number</span> : <?php echo $row['contact_number']; ?>
                                </li>
                                <li><span class="details">Email Address</span> : <?php echo $row['email_id']; ?></li>
                                <li><span class="details">Date of birth</span> :
                                    <?php echo date("Y-m-d",strtotime($row['date_of_birth'])); ?></ li>
                                <li><span class="details">Experience</span> : <?php echo $row['experience']; ?> </li>
                                <li><span class="details">Current Company</span> :
                                    <?php echo $row['current_company_working_in']; ?></li>
                                <li><span class="details">Designation</span> : <?php echo $row['job_title']; ?></li>
                                <li><span class="details">Place of Work</span> : <?php echo $row['place_of_work']; ?>
                                </li>
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
                                    if(isset($_SESSION['userid']) && !empty($_SESSION['userid']))
                                    {
                                        try{
                                            $userID = $_SESSION['userid'];
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

    <div class="row">
    <div class="col-md-6 col-lg-4">
                    
                        <div class="card-header">
                            <div class="mt-2">
                            <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Achievements</h1>
                                <span class="line"></span>
                            </div>
                        </div>
                        <div class="card-body">
                            <!--  connection and fetch code here-->
                            <?php 
                                if(!PHP_SESSION_ACTIVE)
                                    session_start();
                                if(isset($_SESSION['userid']) && !empty($_SESSION['userid']))
                                {
                                    try{
                                        $userID = $_SESSION['userid'];
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
                            <h6 class="title text-danger">
                                <?php echo $year = date("Y",strtotime($rows['Achievement_Date']));?></h6>
                            <P><?php echo $rows['achievement_title'];?></P>
                            <P class="subtitle">
                                <?php echo $rows['Achievement_Description'];?>
                            </P>
                            <?php if(isset($rows['certificate_path'])){?>
                            <img src="<?php $path = substr($rows['certificate_path'],strlen("C:/xampp/htdocs/PHPAlumniProject/"),strlen($rows['certificate_path']));echo $path;?>"
                                alt="your certificate or photo was here!!!" style="height:40px; width:50px">
                            <?php }?>
                            <hr>
                            <?php }?>
                        </div>
                    
                </div>
    </div>
    <hr style="height:2px">
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
                                            tbl_user.user_name,
                                            tbl_user.profile_photo_path,
                                            tbl_community_post.community_post_id,
                                            tbl_community_post.post_title,
                                            tbl_community_post.content,
                                            tbl_community_post.post_image,
                                            tbl_community_post.upload_time
                                                from tbl_user,tbl_community_post 
                                                where 
                                                    tbl_user.user_id = tbl_community_post.user_id and
                                                    tbl_community_post.is_enabled = 'y' and 
                                                    tbl_user.user_id = $userID 
                                                        order by tbl_community_post.upload_time desc;";
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
                    
        <div class="col-md-6 col-lg-12 ">

            <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Posts</h1>
            <div class="container">
                <!-- <hr style="height:2px"> -->
                <?php foreach($result as $rows){?>
                <div class="card-body postcardBody" style="width:100%">
                    <div style="width:50px;height:50px">
                        <?php if(isset($rows['profile_photo_path'])){?>
                        <img src="<?php $path = substr($rows['post_image'],strlen("C:/xampp/htdocs/PHPAlumniProject/"),strlen($rows['post_image']));echo $path;?>"
                            alt="your certificate or photo was here!!!"
                            style="object-fit:contain;width:auto;height:auto">
                        <?php } ?>
                    </div>
                    <h5 class="title text-danger"><b><?php echo @$rows['user_name'];?></b></h5>
                    <h6 class="title text-danger"><?php echo $rows['upload_time'];?></h6>
                    
                    <br><b>
                        <P><?php echo $rows['post_title'];?></P>
                    </b>
                    <P class="subtitle"> <?php echo $rows['content'];?></P>
                    <?php if(isset($rows['post_image'])){?>
                    <img src="<?php $path = substr($rows['post_image'],strlen("C:/xampp/htdocs/PHPAlumniProject/"),strlen($rows['post_image']));echo $path;?>"
                        alt="your certificate or photo was here!!!" style="object-fit:contain;width:80px;height:150px"><br>
                        <a class="btn btn-primary username"
                        href="RemovePost.php?community_post_id=<?php echo $rows['community_post_id']?>" >Remove Post</a>
                    <?php }?>
                    
                </div>
                <?php } ?>
            </div>

        </div>
                        
        <!-- <hr style="height:2px"> -->
        <div class="container-fluid " style="background-color: rgb(239, 244, 253);margin-top:20px;">
            <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s"><b>Your Events </b></h1>
            <hr style="height:2px">
            <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <?php 
                        if(!PHP_SESSION_ACTIVE)
                            session_start();
                        if(isset($_SESSION['userid']) && !empty($_SESSION['userid']))
                        {
                            try{
                                $userID = $_SESSION['userid'];
                                //echo $userID;
                                $connection = ConnectToDB();
                                        $query = "select 
                                                        tbl_event.event_id,
                                                        tbl_event.event_name,                                                    
                                                        tbl_event.event_photo,
                                                        tbl_event.event_description,
                                                        tbl_event.venue,
                                                        tbl_event.upload_time,                                                    
                                                        tbl_event.event_time,
                                                        tbl_event.organizer_name,
                                                        tbl_user.profile_photo_path,
                                                        tbl_user.user_name,
                                                        tbl_event.organizing_member_id
                                                        from tbl_event,tbl_user
                                                        where
                                                        tbl_user.user_id = tbl_event.organizing_member_id and
                                                        tbl_event.organizing_member_id = $userID and
                                                        tbl_event.is_enabled = 'y';";
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

                        <?php foreach($result as $rows) { 
                        $connection = ConnectToDB();
                        $query = "select count(event_participation_id) as members from tbl_event_participation where event_id = ".$rows['event_id']." and is_enabled = 'y'";
                        $result1 = mysqli_query($connection,$query);    
                        CloseConnection($connection);
                        foreach($result1 as $r1)
                            $count = $r1;                        
                    ?>
                        <hr>
                        <div class="job-item p-4 mb-4">
                            <div class="row g-4">
                                <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                    <div class="text-start ps-4">
                                        <h2 class="mb-3"><?php echo $rows['event_name'];?></h2>
                                        <h5 class="mb-3"><b>Organized by: </b><?php echo $rows['organizer_name'];?></h5>
                                        <h5 class="mb-3"><b>Total Participation: </b><?php echo $count['members'];?>
                                        </h5>
                                    </div>
                                </div>
                                <div
                                    class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                    <span class="text-truncate me-3" style="font-size:13px;"><b>Venue:</b>
                                        <?php echo $rows['venue'];?></span>
                                    <span class="text-truncate me-0" style="font-size:13px;"><b>Event Time:</b>
                                        <?php echo $rows['event_time'];?></span>
                                    <a class="btn btn-primary"
                                        href="RemoveEvent.php?event_id=<?php echo $rows['event_id']?>">Remove Event</a>
                                </div>
                                <div class="LargerDiv">
                                    <h5 style="text-align:left;padding-left:10px;padding-right:10px;">
                                        <?php echo $rows['event_description'];?></h5>
                                    <?php if(isset($rows['event_photo'])){?>
                                    <img class="flex-shrink-0 img-fluid border rounded" src="
                                                <?php $path = TrimPath($rows,'event_photo');
                                                    echo $path;
                                                ?>" alt="" style="width: 200px; height: 200px;">
                                    <?php } ?>
                                    <!-- <img src = "HomePage_images/about-1.jpg" style="width: 200px; height: 200px;"> -->
                                </div>
                            </div>
                        </div>
                        <hr>
                        <?php } ?>
                    </div>
                </div>

                <hr style="height:2px">
                <div class="container-fluid py-5" style="background-color: rgb(239, 244, 253);">
                    <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s"><b>Your Participation in Events</b>
                    </h1>
                    <hr style="height:2px">
                    <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">
                        <div class="tab-content">
                            <div id="tab-1" class="tab-pane fade show p-0 active">
                                <?php 
                        if(!PHP_SESSION_ACTIVE)
                            session_start();
                        if(isset($_SESSION['userid']) && !empty($_SESSION['userid']))
                        {
                            try{
                                $userID = $_SESSION['userid'];
                                //echo $userID;
                                $connection = ConnectToDB();
                                        $query = "select 
                                                        tbl_event.event_id,
                                                        tbl_event.event_name,                                                    
                                                        tbl_event.event_photo,
                                                        tbl_event.event_description,
                                                        tbl_event_participation.event_participation_id,
                                                        tbl_event.venue,
                                                        tbl_event.upload_time,                                                    
                                                        tbl_event.event_time,
                                                        tbl_event.organizer_name,
                                                        tbl_user.profile_photo_path,
                                                        tbl_user.user_name,
                                                        tbl_event.organizing_member_id
                                                        from tbl_event,tbl_user,tbl_event_participation
                                                        where
                                                        tbl_event_participation.participant_id = ".$_SESSION['userid']." and                                                        
                                                        tbl_event_participation.event_id = tbl_event.event_id and
                                                        tbl_event_participation.is_enabled = 'y' and
                                                        tbl_event.is_enabled = 'y' and
                                                        tbl_event_participation.participant_id = tbl_user.user_id 
                                                        ;"
                                                        // "where
                                                        // tbl_event_participation.participant_id = tbl_user.user_id and
                                                        // tbl_event.organizing_member_id = tbl_user.user_id and
                                                        // tbl_event_participation.event_id = tbl_event.event_id and 
                                                        // tbl_event_participation.participant_id = 2 and
                                                        // tbl_event_participation.is_enabled = 'y' and 
                                                        // tbl_event.is_enabled = 'y';"
                                                        ;
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

                                <?php foreach($result as $rows) {                      
                    ?>
                                <hr>
                                <div class="job-item p-4 mb-4">
                                    <div class="row g-4">
                                        <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                            <div class="text-start ps-4">
                                                <h2 class="mb-3"><?php echo $rows['event_name'];?></h2>
                                                <h5 class="mb-3"><b>Organized by:
                                                    </b><?php echo $rows['organizer_name'];?></h5>
                                            </div>
                                        </div>
                                        <div
                                            class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                            <span class="text-truncate me-3" style="font-size:13px;"><b>Venue:</b>
                                                <?php echo $rows['venue'];?></span>
                                            <span class="text-truncate me-0" style="font-size:13px;"><b>Event Time:</b>
                                                <?php echo $rows['event_time'];?></span>
                                            <a class="btn btn-primary"
                                                href="CancelParticipation.php?event_participation_id=<?php echo $rows['event_participation_id']?>">Cancel
                                                Participation!</a>
                                        </div>
                                        <div class="LargerDiv">
                                            <h5 style="text-align:left;padding-left:10px;padding-right:10px;">
                                                <?php echo $rows['event_description'];?></h5>
                                            <?php if(isset($rows['event_photo'])){?>
                                            <img class="flex-shrink-0 img-fluid border rounded" src="
                                                <?php $path = TrimPath($rows,'event_photo');
                                                    echo $path;
                                                ?>" alt="" style="width: 200px; height: 200px;">
                                            <?php } ?>
                                            <!-- <img src = "HomePage_images/about-1.jpg" style="width: 200px; height: 200px;"> -->
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <?php } ?>
                            </div>
                        </div>


                        <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">
                            <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s"><b>Your Job Alert
                                    Listing</b></h1>
                            <hr style="height:2px">
                            <div class="tab-content">
                                <div id="tab-1" class="tab-pane fade show p-0 active">
                                    <?php 
                        if(!PHP_SESSION_ACTIVE)
                            session_start();
                        if(isset($_SESSION['userid']) && !empty($_SESSION['userid']))
                        {
                            try{
                                $userID = $_SESSION['userid'];
                                $connection = ConnectToDB();
                                    $query = "select tbl_job_alert.job_alert_id,
                                                    tbl_job_title.job_title,
                                                    tbl_job_alert.company_name,
                                                    tbl_place_of_work.place_of_work,
                                                    tbl_job_alert.package,
                                                    tbl_job_alert.date_created,
                                                    tbl_user.profile_photo_path
                                                    from tbl_job_alert,tbl_job_title,tbl_place_of_work,tbl_user
                                                    where
                                                    tbl_job_alert.job_title_id = tbl_job_title.job_title_id and 
                                                    tbl_job_alert.place_of_work_id = tbl_place_of_work.place_of_work_id and
                                                    tbl_job_alert.created_by = tbl_user.user_id and
                                                    tbl_job_alert.is_enabled = 'y' and 
                                                    tbl_user.user_id = $userID;";
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

                                    <?php foreach($result as $rows) {
                            $connection = ConnectToDB();
                            $query = "select count(job_apply_id) as applicants from tbl_job_apply where job_alert_id = ".$rows['job_alert_id']." and is_enabled = 'y'";
                            $result1 = mysqli_query($connection,$query);    
                            CloseConnection($connection);
                            foreach($result1 as $r1)
                                $count = $r1;  
                        ?>
                                    <div class="job-item p-4 mb-4">
                                        <div class="row g-4">
                                            <div class="col-sm-12 col-md-8 d-flex align-items-center">

                                                <?php if(isset($rows['profile_photo_path'])) {?>
                                                <img class="flex-shrink-0 img-fluid border rounded" src="
                                                <?php $path = TrimPath($rows,'profile_photo_path');
                                                    echo $path;
                                                ?>" alt="" style="width: 80px; height: 80px;">
                                                <?php } ?>

                                                <div class="text-start ps-4">
                                                    <h2 class="mb-3"><b><?php echo $rows['job_title'];?><b></h2>
                                                    <h5 class="mb-3"><?php echo $rows['company_name'];?></h5>
                                                    <span class="text-truncate me-3" style="font-size:13px;"><i
                                                            class="fa fa-map-marker-alt  me-2"
                                                            style="margin-right:10px"></i><?php echo $rows['place_of_work'];?></span><br>
                                                    <span class="text-truncate me-0" style="font-size:13px;"><i
                                                            class="far fa-money-bill-alt  me-2"
                                                            style="margin-right:10px"></i><?php echo $rows['package'];?></span><br>
                                                </div>
                                            </div>
                                            <div
                                                class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                                <h3 class="text-truncate" style="font-size:10px;"><i
                                                        class="far fa-calendar-alt  me-2"></i><?php echo $rows['date_created'];?>
                                                </h3>
                                                <h4 class="mb-3"><b>Total
                                                        Applicants:<?php echo $count['applicants'];?></b></h4>
                                                <a class="btn btn-primary"
                                                    href="RemoveJobAlert.php?job_alert_id=<?php echo $rows['job_alert_id']?>">Remove
                                                    this post</a>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <?php } ?>
                                </div>
                            </div>



                            <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">
                                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s"><b>Your Applications on
                                        Job Alert</b></h1>
                                <hr style="height:2px">
                                <div class="tab-content">
                                    <div id="tab-1" class="tab-pane fade show p-0 active">
                                        <?php 
                        if(!PHP_SESSION_ACTIVE)
                            session_start();
                        if(isset($_SESSION['userid']) && !empty($_SESSION['userid']))
                        {
                            try{
                                $userID = $_SESSION['userid'];
                                $connection = ConnectToDB();
                                    $query = "select tbl_job_alert.job_alert_id,
                                                    tbl_job_apply.job_apply_id,
                                                    tbl_job_title.job_title,
                                                    tbl_job_alert.company_name,
                                                    tbl_place_of_work.place_of_work,
                                                    tbl_job_alert.package,
                                                    tbl_job_alert.date_created,
                                                    tbl_user.profile_photo_path
                                                    from tbl_job_alert,tbl_job_title,tbl_place_of_work,tbl_user,tbl_job_apply
                                                    where
                                                    tbl_job_alert.job_title_id = tbl_job_title.job_title_id and 
                                                    tbl_job_alert.place_of_work_id = tbl_place_of_work.place_of_work_id and
                                                    tbl_job_alert.created_by = tbl_user.user_id and
                                                    tbl_job_apply.is_enabled = 'y' and 
                                                    tbl_job_apply.job_alert_id = tbl_job_alert.job_alert_id and
                                                    tbl_job_apply.applicant_id = $userID and 
                                                    tbl_job_alert.is_enabled = 'y';";
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

                                        <?php foreach($result as $rows) {
                        ?>
                                        <div class="job-item p-4 mb-4">
                                            <div class="row g-4">
                                                <div class="col-sm-12 col-md-8 d-flex align-items-center">

                                                    <?php if(isset($rows['profile_photo_path'])) {?>
                                                    <img class="flex-shrink-0 img-fluid border rounded" src="
                                                <?php $path = TrimPath($rows,'profile_photo_path');
                                                    echo $path;
                                                ?>" alt="" style="width: 80px; height: 80px;">
                                                    <?php } ?>

                                                    <div class="text-start ps-4">
                                                        <h2 class="mb-3"><b><?php echo $rows['job_title'];?><b></h2>
                                                        <h5 class="mb-3"><?php echo $rows['company_name'];?></h5>
                                                        <span class="text-truncate me-3" style="font-size:13px;"><i
                                                                class="fa fa-map-marker-alt  me-2"
                                                                style="margin-right:10px"></i><?php echo $rows['place_of_work'];?></span><br>
                                                        <span class="text-truncate me-0" style="font-size:13px;"><i
                                                                class="far fa-money-bill-alt  me-2"
                                                                style="margin-right:10px"></i><?php echo $rows['package'];?></span><br>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                                    <h3 class="text-truncate" style="font-size:10px;"><i
                                                            class="far fa-calendar-alt  me-2"></i><?php echo $rows['date_created'];?>
                                                    </h3>
                                                    <a class="btn btn-primary"
                                                        href="CancelApplication.php?job_apply_id=<?php echo $rows['job_apply_id']?>">Cancel
                                                        Application!</a>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
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