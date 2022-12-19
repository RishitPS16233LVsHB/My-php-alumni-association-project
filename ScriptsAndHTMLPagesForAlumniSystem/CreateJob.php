<?php 
	    require_once $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/SessionManagement/SessionCheck.php';
        require_once $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/DatabaseConnection/CrudOperations.php'; 
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
    <link rel="stylesheet" href="CreatePostCss.css">
</head>

<body>

    <div class="row comment-box-main-job p-4 rounded-bottom">
        <a href="homePage.php"> <img class="BackButton" src="Images/BackButton.png"> </a>
        <h3 class="ChatTitle"> Create Job alert</h3>
        <a class="Username" href=""> @Rishit Selia </a>
    </div>


    <div class="chattingWindow">
        <div class="ChatWin">
            <div class="container">
                <form class="form-horizontal" action="CreateJobAlertValidations.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="focusedInput fw-bold">Job Title</label>
                        <input class="form-control" id="focusedInput" placeholder="Job title here..." type="text" name = "jobtitle">
                    </div>
                    <div class="form-group">
                        <label for="focusedInput">Job Description</label>
                        <textarea class="form-control" id="focusedInput" placeholder="Job description..." cols="100" name = "jobdescription"
                        rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="focusedInput fw-bold">Company</label>
                        <input class="form-control" id="focusedInput" placeholder="Company name here..." type="text" name = "company">
                    </div>
                    <div class="form-group">
                        <label for="focusedInput fw-bold">Company Location</label>
                        <select name="location" required>
							<?php DisplayPlaceOfWorkInDropDown();?>
                        </select>
                        </div>
                    <div class="form-group">
                        <label for="focusedInput fw-bold">Technology</label>
                        <select name="technology" required>
							<?php DisplayTechnologyInDropDown(); ?>
					    </select>
                    </div>

                    <div class="form-group">
                        <label for="focusedInput fw-bold">Designation</label>
                        <select name="designation" required>
							<?php DisplayJobTitleInDropDown();?>
						</select>
                    </div>    
                    <div class="form-group">
                        <label for="focusedInput fw-bold">Vacancies</label>
                        <input class="form-control" id="focusedInput" placeholder="Number of vacancies" type="number" name = "vacancies">
                    </div>
                    <div class="form-group">
                        <label for="focusedInput fw-bold">Package</label>
                        <input class="form-control" id="focusedInput" placeholder="Ex :- 3-6 LPA" type="number" name = "package">
                    </div>
                    <div class="form-group">
                        <label for="focusedInput fw-bold">Experience</label>
                        <input class="form-control" id="focusedInput" placeholder="Ex :- 1-5 years" type="number" name = "experience">
                    </div>

                    <div class="form-group">
                        <label for="focusedInput fw-bold">Contact Number </label>
                        <input class="form-control" id="focusedInput" placeholder="Contact number"
                        name = "cnum">
                    </div>
                    <div class="form-group">
                        <label for="focusedInput fw-bold">Email Address </label>
                        <input class="form-control" id="focusedInput" placeholder="Email Address" type="email" name = "email">
                    </div>
                    <!-- <div class="form-holder form-holder-2">
                        <fieldset>
                            <legend>Post a nice photo for your job post!</legend>
                            <input type = "file" name = "file">
                        </fieldset>
                    </div> -->
                    <br>
                    <input class = "submitbtnjob" value = "Post!" type = "submit">
                </form>
            </div>
            <br>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/lightbox.js"></script>
    <script type="text/javascript" src="js/all.js"></script>
    <script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.js"></script>
    <script type="text/javascript" src="js/jquery.flexslider.js"></script>
    <script type="text/javascript" src="js/jquery.rateyo.js"></script>
    <!-- <script type="text/javascript" src="js/jquery.mmenu.all.js"></script> -->
    <!-- <script type="text/javascript" src="js/jquery.meanmenu.min.js"></script> -->
    <script type="text/javascript" src="js/custom.js"></script>
</body>
<script src='https://cdnjs.cloudflare.com/ajax/libs/vue/0.12.14/vue.min.js'></script>

</html>