<?php 
	    require_once $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/SessionManagement/SessionCheck.php'; 
        require_once $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/DatabaseConnection/Connections.php'; 
        SessionCheck();
?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require 'Partials/_headerlinks.php' ?>
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="css/jobTitle_css/lib/animate/animate.min.css" rel="stylesheet">
    <link href="css/jobTitle_css/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/jobTitle_css/bootstrap.min.css" rel="stylesheet">
    <link href="css/jobTitle_css/style.css" rel="stylesheet">
</head>

<body style="background-color: rgb(239, 244, 253);">
    <div class="row comment-box-main-job p-4 rounded-bottom">
        <a href="Jobs.php"> <img class="BackButton" src="HomePage_images/BackButton.png" style="
        width: 50px; height: 50px; padding-left: 3px; filter: grayscale(0%);"> </a>
    </div>

    <?php 
        if(!PHP_SESSION_ACTIVE)
            session_start();
        if(isset($_SESSION['userid']) && !empty($_SESSION['userid']))
        {
            try{
                $userID = $_SESSION['userid'];
                if(isset($_GET['job_alert_id']))
                    $id = $_GET['job_alert_id'];
                else
                    header("location: Jobs.php");
                $connection = ConnectToDB();
                $query = "  select 
                            tbl_job_title.job_title,
                            tbl_place_of_work.place_of_work,
                            tbl_job_alert.package,
                            tbl_user.profile_photo_path,

                            tbl_job_alert.job_alert_title,
                            tbl_job_alert.job_description,
                
                            tbl_job_alert.date_created,
                            tbl_job_alert.vacancies,
                            tbl_job_alert.experience,
                            tbl_technology.technology_name,

                            tbl_job_alert.company_name,
                            tbl_job_alert.company_email,
                            tbl_job_alert.company_contact_number,

                            tbl_job_alert.attached_photo_url

                            from tbl_job_alert,
                                 tbl_job_title,
                                 tbl_place_of_work,
                                 tbl_user,
                                 tbl_technology
                            where
                            tbl_job_alert.technology_id = tbl_technology.technology_id and 
                            tbl_job_alert.job_title_id = tbl_job_title.job_title_id and 
                            tbl_job_alert.place_of_work_id = tbl_place_of_work.place_of_work_id and
                            tbl_job_alert.created_by = tbl_user.user_id and
                            tbl_job_alert.job_alert_id = $id and 
                            tbl_job_alert.is_enabled = 'y';";
                $result = mysqli_query($connection,$query);
                foreach($result as $r)
                    $rows = $r;
                CloseConnection($connection);
            }
            catch(Exception $error)
            {
            }
        }
        else
            error("not properly logged in",$_SERVER['DOCUMENT_ROOT']."/PHPAlumniProject/Login.php");
    ?>
    <div class="container-xxl py-5 wow fadeInUp mt-3 mb-3" data-wow-delay="0.1s" style="background-color: #fff;font-size:15px">
        <div class="container">
            <div class="row gy-5 gx-4">
                <div class="col-lg-8">
                    <div class="d-flex align-items-center mb-5">
                        <?php if(isset($rows['profile_photo_url'])){?>
                            <img class="flex-shrink-0 img-fluid border rounded" src="
                                <?php $path = TrimPath($rows,'profile_photo_path');
                                echo $path;
                                ?>" 
                                alt="" style="width: 80px; height: 80px;">
                        <?php } ?>
                        <div class="text-start ps-4">
                            <h2 class="mb-3" style=" color:#1c3961;font-weight:600;font-size:x-large;" style=" color:#1c3961;"><?php echo $rows['job_title'];?></h2>
                        </div>
                    </div>

                    <div class="mb-5">
                        <h2 class="mb-3" style=" color:#1c3961;font-weight:600;"><?php echo $rows['job_alert_title'];?></h4>
                            <p><?php echo $rows['job_description'];?></p>

                                    <div class=" p-5 wow slideInUp " data-wow-delay="0.1s" style="background-color: rgb(239, 244, 253);border-radius:10px">
                                        <h2 class="mb-4 mt-20" style=" color:#1c3961;font-weight:600;">Job Summary</h4>
                                            <p><i class="fa fa-angle-right  me-2" style=" color:#1c3961;"></i>Published On:<?php echo $rows['date_created'];?></p>
                                            <p><i class="fa fa-angle-right  me-2" style=" color:#1c3961;"></i>Vacancy:<?php echo $rows['vacancies'];?></p>
                                            <p><i class="fa fa-angle-right  me-2" style=" color:#1c3961;"></i>Salary:<?php echo $rows['package'];?></p>
                                            <p><i class="fa fa-angle-right  me-2" style=" color:#1c3961;"></i>Location:<?php echo $rows['place_of_work'];?></p>
                                            <p class="m-0"><i class="fa fa-angle-right  me-2"></i>Major technology:<?php echo $rows['technology_name'];?></p>
                                    </div>
                                    <div class="  p-5 mt-5 wow slideInUp" data-wow-delay="0.1s" style="background-color: rgb(239, 244, 253);border-radius:10px">
                                        <h2 class="mb-4" style=" color:#1c3961;font-weight:600;"><?php echo $rows['company_name'];?></h4>
                                        <p><i class="fa fa-angle-right  me-2" style=" color:#1c3961;"></i>Email :<?php echo $rows['company_email'];?></p>
                                        <p><i class="fa fa-angle-right  me-2" style=" color:#1c3961;"></i>Contact:<?php echo $rows['company_contact_number'];?></p>
                                    </div>
                    </div>

                    <div class="">
                        <h2 class="mb-4" style=" color:#1c3961;font-weight:600;">Apply For The Job</h4>
                            <form class="form-horizontal ">
                                <div class="row g-3">
                                    <div class="form-group form-group-lg">
                                        <input class="form-control" id="focusedInput" placeholder="Your Name" type="text">
                                    </div>
                                    <div class="form-group col-12">
                                        <input class="form-control" id="focusedInput" placeholder="Your Email" type="email">
                                    </div>
                                    <div class="form-group col-12 col-sm-6">
                                        <input class="form-control" id="focusedInput" type="text" placeholder="Portfolio Website">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="file" class="form-control bg-white">
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form-control" rows="5" placeholder="Coverletter"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn w-100 applyBtn" type="submit" style="background-color:#1c3961 ; color :#fff;font-size:2rem;">Apply Now</button>
                                    </div>
                                </div>
                            </form>

                    </div>
                </div>

                <div class="col-lg-4 mt-10">
                        <?php if(isset($rows['attached_photo_url'])){?>
                            <img class="flex-shrink-0 img-fluid border rounded" src="
                                <?php $path = TrimPath($rows,'attached_photo_url');
                                echo $path;
                                ?>" 
                                alt="" style="width: 80px; height: 80px;">
                        <?php } ?>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php require 'Partials/footer.php' ?>
    <?php require 'Partials/_navjs.php' ?>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="css/jobTitle_css/lib/wow/wow.min.js"></script>
    <script src="css/jobTitle_css/lib/easing/easing.min.js"></script>
    <script src="css/jobTitle_css/lib/waypoints/waypoints.min.js"></script>
    <script src="css/jobTitle_css/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/jobTitle_js/main"></script>
</body>

</html>