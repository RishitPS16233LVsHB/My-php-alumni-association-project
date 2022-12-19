<?php 
	    require_once $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/SessionManagement/SessionCheck.php'; 
        require_once $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/DatabaseConnection/Connections.php'; 
        SessionCheck();
?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require 'Partials/_headerlinks.php' ?>

    <link href="HomePage_images/favicon.ico" rel="icon">
    
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <link href="css/HomePage_css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/HomePage_css/Jobs.css">

    <style>
        body{
            background-color: rgb(239, 244, 253);
        }
        .scrolltop {
            display: none;
            width: 100%;
            margin: 0 auto;
            position: fixed;
            bottom: 20px;
            right: 10px;
        }

        .scroll {
            position: absolute;
            right: 15px;
            bottom: 40px;
            background: #b2b2b2;
            background: rgba(178, 178, 178, 0.7);
            padding: 20px;
            text-align: center;
            margin: 0 0 0 0;
            cursor: pointer;
            transition: 0.5s;
            -moz-transition: 0.5s;
            -webkit-transition: 0.5s;
            -o-transition: 0.5s;
        }

        .scroll:hover {
            background: rgba(178, 178, 178, 1.0);
            transition: 0.5s;
            cursor: pointer;
            -moz-transition: 0.5s;
            -webkit-transition: 0.5s;
            -o-transition: 0.5s;
        }

        .scroll:hover .fa {
            padding-top: -10px;
        }

        .scroll .fa {
            font-size: 30px;
            margin-top: -5px;
            margin-left: 1px;
            transition: 0.5s;
            -moz-transition: 0.5s;
            -webkit-transition: 0.5s;
            -o-transition: 0.5s;
        }
        .LargerDiv{
            width:100%;            
        }
    </style>
</head>

<body>
    <?php require 'Partials/_nav.php' ?>

    <div class="container-fluid py-5" style="background-color: rgb(239, 244, 253);">
        <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Event Listing</h1>

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
                                                    tbl_user.user_id,
                                                    tbl_event.organizing_member_id
                                                    from tbl_event,tbl_user
                                                    where
                                                    tbl_event.organizing_member_id = tbl_user.user_id and
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

                    <?php foreach($result as $rows) { ?>
                        <div class="job-item p-4 mb-4">
                            <div class="row g-4">                            
                                <div class="col-sm-12 col-md-8 d-flex align-items-center">

                                    <?php if(isset($rows['profile_photo_path'])) {?>
                                        <img class="flex-shrink-0 img-fluid border rounded" src="
                                                <?php $path = TrimPath($rows,'profile_photo_path');
                                                    echo $path;
                                                ?>" 
                                                alt="" style="width: 80px; height: 80px;">
                                    <?php } ?>

                                    <div class="text-start ps-4">
                                        <h2 class="mb-3"><?php echo $rows['event_name'];?></h2>
                                        <h5 class="mb-3"><b>User name: </b><a href = "OtherUserProfile.php?userid=<?php echo $rows['user_id'];?>">@<?php echo $rows['user_name'];?></a></h5>
                                        <h5 class="mb-3"><b>Organized by: </b><?php echo $rows['organizer_name'];?></h5>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                    <div class="d-flex mb-3">
                                        <a class="btn btn-primary" href="eventParticipate.php?event_id=<?php echo $rows['event_id']?>">Participate</a>
                                    </div> 
                                    <span class="text-truncate me-3" style="font-size:13px;"><b>Venue:</b> <?php echo $rows['venue'];?></span>
                                    <span class="text-truncate me-0" style="font-size:13px;"><b>Event Time:</b> <?php echo $rows['event_time'];?></span>                                                          
                                </div>
                                <div class = "LargerDiv">
                                    <h5 style = "text-align:left;padding-left:10px;padding-right:10px;"><?php echo $rows['event_description'];?>
                                    </h5>
                                    <?php if(isset($rows['profile_photo_path'])) {?>
                                        <img class="flex-shrink-0 img-fluid border rounded" src="
                                                <?php $path = TrimPath($rows,'event_photo');
                                                    echo $path;
                                                ?>" 
                                                alt="" style="width: 80px; height: 80px;">
                                    <?php } ?>
                                    <!-- <img src = "HomePage_images/about-1.jpg" style="width: 200px; height: 200px;"> -->
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>           
    <script>
        function participate(){
            alert("OK Aavjo")
        }
    </script>         
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="css/jobs_css/lib/wow/wow.min.js"></script>
    <script src="css/jobs_css/lib/easing/easing.min.js"></script>
    <script src="css/jobs_css/lib/waypoints/waypoints.min.js"></script>
    <script src="css/jobs_css/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="css/jobs_css/js/main.js"></script>
</body>
</html> 