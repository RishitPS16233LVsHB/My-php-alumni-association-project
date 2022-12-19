<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/PHPAlumniProject/SessionManagement/SessionCheck.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/PHPAlumniProject/DatabaseConnection/Connections.php';
SessionCheck();
// echo $_SESSION['userid'] . "-----";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
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
    <title>Document</title>
    <style>
        body{
            background-color: rgb(239, 244, 253);
        }
        .btn-primary {
        color: #fff;
        background-color: #1c3961;
        border-color:1 px solid #fff;
        border-radius:10px;
        font-size:medium;
    }

    .btn-primary {
    color: #fff;
    background-color: #1c3961;
    border-color: #fff;
}

.btn-primary:hover {
        color: #1c3961;
        background-color: transparent;
        border-color:1 px solid #1c3961;
        border-radius:10px;
        font-size:medium;
    }
    .btn-primary:hover {
        color: #1c3961;
        background-color: transparent;
        border-color: 2px solid #1c3961;
        border-radius:10px;
}
.nav-pills .nav-link {
        border-radius: 0.25rem;
        font-size: large;
        }
        a {
            margin-top:3px;
        color: #1c3961;
        text-decoration: none;
        background-color: transparent;
        }
        a:visited{
            color:#1c3961;
        }
        a:hover{
            color:#1c3961;
        }
        .nav-pills .nav-link.active, .nav-pills .show>.nav-link {
        color: #fff;
        /* background-color: #F85C70; */
        border: 1px solid #fff;
        margin-top:10px;
        background-color: #1c3961;
        background-color: none;
        border-radius:10px;
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
    <div class="container-fluid">
        <div class="container" style="background-color: rgb(239, 244, 253);">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Personal Info</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Achievements</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Experience</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-events-tab" data-toggle="pill" href="#pills-events" role="tab" aria-controls="pills-events" aria-selected="false">Events</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-posts-tab" data-toggle="pill" href="#pills-posts" role="tab" aria-controls="pills-posts" aria-selected="false">Posts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-eventsP-tab" data-toggle="pill" href="#pills-eventsP" role="tab" aria-controls="pills-eventsP" aria-selected="false">Events Participation</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-jobAlert-tab" data-toggle="pill" href="#pills-jobAlert" role="tab" aria-controls="pills-jobAlert" aria-selected="false">Job Alerts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-appliedJob-tab" data-toggle="pill" href="#pills-appliedJob" role="tab" aria-controls="pills-appliedJob" aria-selected="false">Applied Jobs</a>
            </li>
        </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="card-body pb-2">
                            <?php
if (!PHP_SESSION_ACTIVE) session_start();
if (isset($_SESSION['userid']) && !empty($_SESSION['userid'])) {
    try {
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
        $result = mysqli_query($connection, $query);
        foreach ($result as $r) $row = $r;
        CloseConnection($connection);
    }
    catch(Exception $error) {
    }
} else error("not properly logged in", $_SERVER['DOC    UMENT_ROOT'] . "/PHPAlumniProject/Login.php");
?>
                            <ul class="mt40 info list-unstyled">
                                <?php if (isset($row['profile_photo_path'])) { ?>
                                <li>
                                    <img class="flex-shrink-0 img-fluid border rounded" src="
                                        <?php $path = TrimPath($row, 'profile_photo_path');
    echo $path;
?>" alt="" style="width:auto; height:auto;">
                                </li>
                                <?php
} ?>
                                <li><span class="details">Enrollment Number</span> :
                                    <?php echo $row['enrollment_number']; ?></li>
                                <li><span class="details">User Name</span> : <?php echo $row['user_name']; ?></li>
                                <li><span class="details">Gender</span> :
                                    <?php echo $row['gender'] == 'f' ? "female" : "male"; ?></li>
                                <li><span class="details">Contact Number</span> : <?php echo $row['contact_number']; ?>
                                </li>
                                <li><span class="details">Email Address</span> : <?php echo $row['email_id']; ?></li>
                                <li><span class="details">Date of birth</span> :
                                    <?php echo date("Y-m-d", strtotime($row['date_of_birth'])); ?></ li>
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
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="card-body">
                            <!--  connection and fetch code here-->
                            <?php
                                if (!PHP_SESSION_ACTIVE) session_start();
                                if (isset($_SESSION['userid']) && !empty($_SESSION['userid'])) {
                                    try {
                                        $userID = $_SESSION['userid'];
                                        $connection = ConnectToDB();
                                        $query = "select * from tbl_user_achievement where user_id = $userID and is_enabled = 'y'";
                                        $result = mysqli_query($connection, $query);
                                        if (mysqli_num_rows($result) == 0) echo "It seems like you have not shared your achievment with us!!";
                                        CloseConnection($connection);
                                    }
                                    catch(Exception $error) {
                                    }
                                } else error("not properly logged in", $_SERVER['DOCUMENT_ROOT'] . "/PHPAlumniProject/Login.php");
                            ?>
                            <?php foreach ($result as $rows) { ?>
                                <?php if (isset($rows['certificate_path'])) { ?>
                            <img src="<?php $path = substr($rows['certificate_path'], strlen("C:/xampp/htdocs/PHPAlumniProject/"), strlen($rows['certificate_path']));
                                echo $path; ?>"
                                alt="your certificate or photo was here!!!" style="width: 220px; height: 200px; margin: 3px 0px 10px 0px;">
                            <?php
                            } ?>

                            
                            <h1 style="text-transform:capitalize;"><?php echo $rows['achievement_title']; ?></h1>
                            <P class="subtitle">
                                <?php echo $rows['Achievement_Description']; ?>
                            </P>
                            <h6 class="title " style="float:right;color:grey; font-family: Source Sans Pro, sans-serif; font-weight: 600;">
                                <?php echo $year = date("Y", strtotime($rows['Achievement_Date'])); ?></h6>
                            <hr>
                            <?php
                        } ?>
                        </div>
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <div class="card-body">
                            <?php
                            if (!PHP_SESSION_ACTIVE) session_start();
                            if (isset($_SESSION['userid']) && !empty($_SESSION['userid'])) {
                                try {
                                    $userID = $_SESSION['userid'];
                                    $connection = ConnectToDB();
                                    $query = "select * from tbl_user_experience where user_id = $userID and is_enabled = 'y'";
                                    $result = mysqli_query($connection, $query);
                                    if (mysqli_num_rows($result) == 0) echo "It seems like you have not shared your experiences with us!!";
                                    CloseConnection($connection);
                                }
                                catch(Exception $error) {
                                }
                            } else error("not properly logged in", $_SERVER['DOCUMENT_ROOT'] . "/PHPAlumniProject/Login.php");
                            foreach ($result as $rows) {
                            ?>


                            <h6 class="title text-danger"><?php echo date("Y-m-d", strtotime($rows['Start_Date'])); ?> --
                                <?php echo date("Y-m-d", strtotime($rows['End_Date'])); ?></h6>
                            <P><?php echo $rows['experience_title']; ?></P>
                            <P class="subtitle"> <?php echo $rows['Experience_Description']; ?></P>
                            <hr>
                            <?php
} ?>
                        </div>
                </div>
                <div class="tab-pane fade" id="pills-events" role="tabpanel" aria-labelledby="pills-events-tab">
                <div class="card-body">
                <?php
                        if (!PHP_SESSION_ACTIVE) session_start();
                        if (isset($_SESSION['userid']) && !empty($_SESSION['userid'])) {
                            try {
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
        $result = mysqli_query($connection, $query);
        $numberofrows = mysqli_num_rows($result);        
        CloseConnection($connection);
    }
    catch(Exception $error) {
    }
} else error("not properly logged in", $_SERVER['DOCUMENT_ROOT'] . "/PHPAlumniProject/Login.php");
?>

    <?php 
        
        if($numberofrows == 0)
            echo "no event organized by you perhaps add one..";
        
        else{
        foreach ($result as $rows) {
        $connection = ConnectToDB();
        $query = "select count(event_participation_id) as members from tbl_event_participation where event_id = " . $rows['event_id'] . " and is_enabled = 'y'";
        $result1 = mysqli_query($connection, $query);
        CloseConnection($connection);
        foreach ($result1 as $r1) $count = $r1;
} ?>

                        <div class="row g-4">
                                <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                    <div class="text-start ps-4">
                                        <h1 class="mb-3 " style="margin-left : 10px;"><?php echo $rows['event_name']; ?></h1>
                                        <h5 class="mb-3 " style="margin-left : 10px;"><b>Organized by: </b><?php echo $rows['organizer_name']; ?></h5>
                                        <h5 class="mb-3 " style="margin-left : 10px;"><b>Total Participation: </b><?php echo $count['members']; ?>
                                        </h5>
                                    </div>
                                </div>
                                <div
                                    class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                    <span class="text-truncate me-3" style="font-size:13px;"><b>Venue:</b>
                                        <?php echo $rows['venue']; ?></span>
                                    <span class="text-truncate me-0" style="font-size:13px;"><b>Event Time:</b>
                                        <?php echo $rows['event_time']; ?></span>
                                    <a class="btn btn-primary"
                                        href="RemoveEvent.php?event_id=<?php echo $rows['event_id'] ?>" style="margin-top : 10px;">Remove Event</a>
                                </div>
                                <div class="LargerDiv">
                                    <h5 style="text-align:left; margin-left: 15px;padding-left:10px;padding-right:10px;">
                                        <?php echo $rows['event_description']; ?></h5>
                                    <?php if (isset($rows['event_photo'])) { ?>
                                            <img class="flex-shrink-0 img-fluid border rounded " src="
                                                        <?php $path = TrimPath($rows, 'event_photo');
                                                        echo $path;
                                                        ?>" alt="" style="width: 220px; height: 250px; margin: 10px 0px 10px 20px;">
                                            <?php
                                    } }?>
                                    <!-- <img src = "HomePage_images/about-1.jpg" style="width: 200px; height: 200px;"> -->
                                </div>
                            </div>
                </div>
                
                              

                </div>
                <!-- Post Section -->
                <div class="tab-pane fade" id="pills-posts" role="tabpanel" aria-labelledby="pills-posts-tab">
                <div class="card-body">
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

            
            <div class="container">
                <!-- <hr style="height:2px"> -->
                <?php 
                    if(mysqli_num_rows($result) == 0)
                        echo "No posts made by you perhaps add one";
                else{
                foreach($result as $rows){?>
                <div class="card-body postcardBody" style="width:100%">
                    <?php if(isset($rows['post_image'])){?>
                    <img src="<?php $path = substr($rows['post_image'],strlen("C:/xampp/htdocs/PHPAlumniProject/"),strlen($rows['post_image']));echo $path;?>"
                        alt="your certificate or photo was here!!!" style="object-fit:contain;width: 220px; height: 250px;margin-bottom:0px;">

                    <b><h2 style="font-size:x-large;font-weight:bolder;"><?php echo $rows['post_title'];?></h2></b>                  
                    
                    
                    <!-- <br><b>
                        <P><?php //echo $rows['post_title'];?></P>
                    </b> -->
                    <P class="subtitle"> <?php echo $rows['content'];?></P>
                    <span><p class="title " style="float:right;font-size:small;color:grey; font-family: Source Sans Pro, sans-serif;font-weight"><?php echo $rows['upload_time'];?></p></span> 
                    <br>
                        <a class="btn btn-primary username"
                        href="RemovePost.php?community_post_id=<?php echo $rows['community_post_id']?>" style="font-size:large;cursor:pointer">Remove Post</a>
                    <?php }?>
                    <hr style="color:darkgrey; margin-top:15px;">
                    
                </div>
                <?php }} ?>
            </div>

                    </div>

                </div>
                
                              

                </div>

                <!-- ends here -->
                <!-- Events participation -->
                <div class="tab-pane fade" id="pills-eventsP" role="tabpanel" aria-labelledby="pills-eventsP-tab">
                <div class="card-body">
                
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
                              
                               
                                    <div class="row g-4">
                                        <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                            <div class="text-start ps-4">
                                                <h1 class="mb-3" style="margin-left : 10px;"><?php echo $rows['event_name'];?></h1>
                                                <h5 class="mb-3" style="margin-left : 10px;"><b>Organized by:
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
                                                href="CancelParticipation.php?event_participation_id=<?php echo $rows['event_participation_id']?>"  style="margin-top : 10px;">Cancel
                                                Participation!</a>
                                        </div>
                                        <div class="LargerDiv">
                                            <h5 style="text-align:left; margin-left: 15px;padding-left:10px;padding-right:10px;">
                                                <?php echo $rows['event_description'];?></h5>
                                            <?php if(isset($rows['event_photo'])){?>
                                            <img class="flex-shrink-0 img-fluid border rounded" src="
                                                <?php $path = TrimPath($rows,'event_photo');
                                                    echo $path;
                                                ?>" alt="" style="width: 220px; height: 250px; margin: 10px 0px 10px 20px;">
                                            <?php } ?>
                                            <!-- <img src = "HomePage_images/about-1.jpg" style="width: 200px; height: 200px;"> -->
                                        </div>
                                    </div>
                              
                                
                                <?php } ?>
                                            </div>
                                            </div>                                   
                <!-- end here -->

                <!-- Job Alerts Section -->
                <div class="tab-pane fade" id="pills-jobAlert" role="tabpanel" aria-labelledby="pills-jobAlert-tab">
                <div class="card-body">
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
                                           
                                            <div class="col-sm-12 col-md-6 d-flex align-items-center">
                                                
                                                <?php if(isset($rows['profile_photo_path'])) {?>
                                                <img class="flex-shrink-0 img-fluid border rounded" src="
                                                <?php $path = TrimPath($rows,'profile_photo_path');
                                                    echo $path;
                                                ?>" alt="" style="width: 80px; height: 80px;">
                                                <?php } ?>

                                                <div class="text-start ps-4 ">
                                                    <h2 class="mb-3" style="text-transform:uppercase;"><b><?php echo $rows['job_title'];?></b></h2>
                                                    <h2 class="mb-3"><?php echo $rows['company_name'];?></h2>
                                                    <span class="text-truncate me-3" style="font-size:17px;"><i
                                                            class="fa fa-map-marker-alt  me-2"
                                                            style="margin-right:10px"></i><?php echo $rows['place_of_work'];?></span><br>
                                                    <span class="text-truncate me-0" style="font-size:13px;"><i
                                                            class="far fa-money-bill-alt  me-2"
                                                            style="margin-right:10px"></i><?php echo $rows['package'];?></span><br>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6 d-flex flex-column align-items-start align-items-md-end justify-content-center" style="float:right;">
                                                <h3 class="text-truncate " style="font-size:10px;color:grey;" ><i
                                                        class="far fa-calendar-alt  me-2"></i><?php echo $rows['date_created'];?>
                                                </h3>
                                                <h4 class="mb-3 mt-1"><b>Total Applicants:<?php echo $count['applicants'];?></b></h4>
                                                <a class="btn btn-primary"
                                                    href="RemoveJobAlert.php?job_alert_id=<?php echo $rows['job_alert_id']?>" style="font-size:medium;">Remove
                                                    this Job Alert</a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <?php } ?>
                                        

                </div>
                 </div>

                <!-- ends here -->

                <!-- Applied job section here -->
                <div class="tab-pane fade" id="pills-appliedJob" role="tabpanel" aria-labelledby="pills-appliedJob-tab">
                <div class="card-body">
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
                                                    <h2 class="mb-3" style="text-transform:uppercase;"><b><?php echo $rows['job_title'];?></b></h2>
                                                    <h2 class="mb-3"><?php echo $rows['company_name'];?></h2>
                                                    <span class="text-truncate me-3" style="font-size:17px;"><i
                                                            class="fa fa-map-marker-alt  me-2"
                                                            style="margin-right:10px"></i><?php echo $rows['place_of_work'];?></span><br>
                                                    <span class="text-truncate me-0" style="font-size:13px;"><i
                                                            class="far fa-money-bill-alt  me-2"
                                                            style="margin-right:10px"></i><?php echo $rows['package'];?></span><br>
                                                </div>
                                                </div>
                                                <div
                                                class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                                <h2 class="text-truncate" style="font-size:10px;color:grey;"><i
                                                        class="far fa-calendar-alt  me-2" ></i><?php echo $rows['date_created'];?>
                                                </h2>
                                                <a class="btn btn-primary"
                                                    href="CancelApplication.php?job_apply_id=<?php echo $rows['job_apply_id']?>" style="font-size:medium;">Cancel
                                                    Application!</a>
                                                </div> 
                                            </div>
                                        </div>
                                        <hr>
                                        <?php } ?>

                </div>
                </div>                                    
                <!--  ends here -->
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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