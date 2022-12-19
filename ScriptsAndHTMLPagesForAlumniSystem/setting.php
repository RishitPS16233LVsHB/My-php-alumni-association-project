<?php 
	require_once$_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/SessionManagement/SessionCheck.php'; 
	SessionCheck();
	require_once $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/DatabaseConnection/CrudOperations.php';
	CheckForErrorMessage();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="CreatePostCss.css">

    <title>Settings </title>
    <style>
        .leftPanel {
            height: 100%;
            width: 35%;
            /* float: left; */
            /* background-color: red; */
        }

        .rightPanel {
            width: 65%;
            height: 100%;
            /* float: right; */
            background-color: red;
        }

        /* .profileImage{
            margin: 5px 10px ;
            padding: 5px 10px;
            width: 20%;
            height: 60px;
            border: 2px solid black;
            border-radius: 30px;
           
        } */
        .profileImage i {
            /* object-fit: fill; */
            font-size: xx-large
        }

        .SocialIcons {
            font-size: 23px;
            opacity: 0.7;
        }

        .SocialIcons:hover {
            opacity: 1;
            cursor: pointer;
        }

        input {
            width: 60%;
            border-top-style: hidden;
            border-right-style: hidden;
            border-left-style: hidden;
            border-bottom-style: groove;
        }

        select {
            width: 60%;
            border-top-style: hidden;
            border-right-style: hidden;
            border-left-style: hidden;
            border-bottom-style: groove;
        }

        label {
            margin-top: 5px;
        }

        .updateInformation {
            /* width: 200px; */
            border: none;
            height: 50px;
            background-color: #1c3961;
            border: 2px solid white;
            color: white;
            /* float: right; */
            font-weight: 600;
            cursor: pointer;
            /* margin-top: 10px; */
            transition-duration: 0.7s;
            margin-bottom: 20px;
        }

        .updateInformation:hover {
            background-color: white;
            border: 3px solid #1c3961;
            color: #1c3961;
        }

        .passwordForm {
            margin-bottom: 20px;
        }

        .nav-link {
            color: #1c3961;
            font-weight: 600;
        }

        .nav-link:hover {
            color: #1c3961;
            /* font-weight: 600; */
        }

        .nav-tabs .nav-item .nav-link {
            background-color: #0080FF;
            color: #FFF;
        }

        .nav-tabs .nav-item .nav-link.active {
            color: #1c3961;
            /* color: red; */

        }

        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            color: #fff;
            /* background-color: #007bff; */
            background-color: #1c3961;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
        }

        .tab-content {
            border: 1px solid white;
            border-top: transparent;
            padding: 15px;
        }
    </style>
</head>

<body>
    <div class="row comment-box-main-job2 p-4 rounded-bottom" style = "color : black">
        <a href="profile.php"> <img class="BackButton" src="HomePage_images/BackButton.png" style="
        width: 50px; height: 50px; padding-left: 3px; filter: grayscale(100%);"> </a>
        <h2 class="ml-4">Settings</h2>
    </div>

    <div class="container" style="box-shadow: rgba(0, 0, 0, 0.2) 0px 60px 40px -7px;background-color: rgb(239, 244, 253);">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="true">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-company-tab" data-toggle="pill" href="#pills-company" role="tab" aria-controls="pills-company" aria-selected="false">Company Details</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-account-tab" data-toggle="pill" href="#pills-account" role="tab" aria-controls="pills-account" aria-selected="false">Change Password</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-bio-tab" data-toggle="pill" href="#pills-bio" role="tab" aria-controls="pills-bio" aria-selected="false">Bio</a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active row" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class=" row">
                <!-- <div class="col mb-5" style="max-width: 100%;">
                    <div class="profileImage  mt-4">
                        <img src="images/userImage.png" alt="" height="80px">
                    </div>
                    <h5 class="mt-3 ">Update Picture</h5>
                    <form action="" class="socialLinks">
                        <i class="fa-brands fa-facebook  mb-1 mt-4 mr-2 SocialIcons"></i> <input type="link" placeholder="Facebook" border-bottom-style: groove; border:none;"><br>
                        <i class="fa-brands fa-github  mb-1 mt-4 SocialIcons mr-2"></i> <input type="link" placeholder="Github"><br>
                        <i class="fa-brands fa-linkedin  mb-1 mt-4 mr-2 SocialIcons"></i> <input type="link" placeholder="LinkedIn"><br>
                    </form>
                    <i class="fa-brands fa-facebook ml-4 mb-2 mt-4 mr-2 SocialIcons"></i> <input type="link" placeholder="Link Facebook" style="outline:none;border-top-style: hidden; border-right-style: hidden; border-left-style: hidden; border-bottom-style: groove; border:none;">
                </div> -->
                <div class="col" style="max-width: 100%;">
                    <form action="">
                        <b><label for="username">Username</label></b><br>
                        <input type="text" name="username" placeholder="Username"> <br>
                        <b><label for="email">Email</label></b><br>
                        <input type="email" name="email" placeholder="Email"><br>
                        <b><label for="number">Number</label></b><br>
                        <input type="tel" name="cnum" placeholder="Change Number"><br>
                        <b><label for="dob">Birth Date</label></b><br>
                        <input type="date" name="dob"><br>
                        <b><label for="city">Profile photo</label></b><br>
                        <input type="file" name="file"><br>
                        <br>
                        <button type="submit" style = "padding-left:20%;padding-right:20%" class="mt-4 updateInformation" formaction = "UpdatePersonalDetails.php" formmethod = "post" formenctype="multipart/form-data">Update! </button> 
                    </form>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-company" role="tabpanel" aria-labelledby="pills-company-tab">
        <form action="">
            <div class="row">
                <div class="col mb-5" style="max-width: 100%;">
                    <!-- <h2>prfile picture here</h2> -->
                    <div class="profileImage  mt-4">
                        <img src="images/userImage.png" alt="" height="80px">
                    </div>

                        <b><label for="companyName">Company Name</label></b><br>
                        <input type="text" name="company" placeholder="Company name" required><br>
                        <b><label for="jobTitle">Job Title</label></b><br>
                        <select name="designation" required>
							<?php DisplayJobTitleInDropDown();?>
						</select><br>   
                        <b><label for="package">Average Package</label></b><br>
                        <input type="number" min="1" name="package" required><br>
                </div>
                <div class="col ml-0 " style="max-width: 100%;">

                        <b><label for="workPlace">Place of work</label></b><br>
                        <select name="location" required>
							<?php DisplayPlaceOfWorkInDropDown();?>
						</select><br>
                        <b><label for="experience">Experience (years)</label></b><br>
                        <input type="number" name="experience" min="1" max="15" placeholder="Experience submitter must have?" required><br>
                        <br>
                        <button type="submit" style = "padding-left:20%;padding-right:20%" class="mt-4 updateInformation" formaction = "UpdateCompanyDetails.php" formmethod = "post">Update! </button> 
                    </div>  
                </div>
            </form>
        </div>
        <div class="tab-pane fade" id="pills-account" role="tabpanel" aria-labelledby="pills-account-tab">
            <div class="container">
                <form action="" class="passwordForm  mb-4">
                    <b><label for="opass">Old Password</label></b><br>
                    <input type="password" name="opass" placeholder="Enter old password you remember" required><br>
                    <b><label for="pass">New Password</label></b><br>
                    <input type="password" name="pass" placeholder="Enter your new password" required><br>
                    <b><label for="cpass">Confirm new password</label></b><br>
                    <input type="password" name="cpass" placeholder="Re-enter new password" required><br>
                    <br>
                    <button type="submit" style = "padding-left:20%;padding-right:20%" class="mt-4 updateInformation" formaction = "ChangePassword.php" formmethod = "post">Change Password </button>
                </form>
            </div>

        </div>
        <div class="tab-pane fade" id="pills-bio" role="tabpanel" aria-labelledby="pills-bio-tab">
            <div class="row">
                <div class="col " style="max-width: 100%;">
                    <h3 style="color: #1c3961;">Add Experience</h3>
                    <form action="AddExperience.php" class="passwordForm" method = "post">
                        <b><label for="Company">Experience title</label></b><br>
                        <input type="text" name="exptitle" placeholder="Describe your experience" required><br>
                        <b><label for="startdate">Start Date</label></b><br>
                        <input type="date" name="startdate" placeholder="Enter start date of your job" required><br>
                        <b><label for="enddate">End Date</label></b><br>
                        <input type="date" name="enddate" placeholder="Enter end date of your job"><br>
                        <b><label for="expdescription">Description</label></b> <br>
                        <textarea name="expdescription" id="description" cols="30" rows="5" placeholder="Enter 200 words about this experience" required></textarea>
                        <br>
                        <button type="submit" style = "padding-left:10%;padding-right:10%" class="mt-4 updateInformation" formaction = "AddExperience.php" formmethod = "post"> Add to your experiences! </button> 
                    </form>
                </div>
                <div class="col " style="max-width: 100%;">
                    <h3 style="color: #1c3961;">Add Skills</h3>
                    <form action="" class="passwordForm ">
                        <h4>Tech Skills</h4>
                        <b><label for="techSkill">Skill</label></b><br>
                        <select name="technology" required>
						    <?php DisplayTechnologyInDropDown(); ?>
						</select>
                        <br>
                        <button type="submit" style = "padding-left:10%;padding-right:10%" class="mt-4 updateInformation" formaction = "AddTechnology.php" formmethod = "post">Add to your tech skills! </button> 
                    </form>
                </div>
                <div class="col " style="max-width: 100%;">
                    <h3 style="color: #1c3961;">Add Achievements</h3>
                    <form action="" class="passwordForm">                        
                        <b><label for="achievementtitle">Achievement title</label></b><br>
                        <input type="text" name="achievementtitle" placeholder="Describe your achievment" required><br>
                        <b><label for="achievementdate">Achievement Date</label></b><br>
                        <input type="date" name="achievementdate" required><br>
                        <b><label for="achievementdescription">Description</label></b><br>
                        <textarea name="achievementdescription" id="caption" cols="30" rows="3" placeholder="Tell us something about your achievements" required></textarea><br>
                        <b><label for="file">Certificate</label></b><br>
                        <input type="file" name="file"><br>
                        <br>
                        <button type="submit" style = "padding-left:20%;padding-right:20%" class="mt-4 updateInformation" formenctype = "multipart/form-data" formaction = "AddAchievement.php" formmethod = "post">Add your Achievments! </button> 
                    </form>
                </div>
            </div>

        </div>
    </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>