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
    <link rel="stylesheet" href="CreatePostCss.css">
</head>

<body>

    <div class="row comment-box-main-event p-4 rounded-bottom">
        <a href="homePage.php"> <img class="BackButton" src="Images/BackButton.png"> </a>
        <h3 class="ChatTitle"> Create Event </h3>
        <a class="Username" href="#"> @Rishit Selia </a>
    </div>


    <div class="chattingWindow">
        <div class="ChatWin">
            <div class="container">
                <form class="form-horizontal" action = "CreateEventValidations.php" method = "post" enctype = "multipart/form-data">
                    <div class="form-group">
                        <label for="focusedInput fw-bold">Event Title</label>
                        <input class="form-control" id="focusedInput" placeholder="Event title here..." type="text" name = "eventtitle">
                    </div>
                    <div class="form-group">
                        <label for="focusedInput">Event Description</label>
                        <textarea class="form-control" id="focusedInput" placeholder="Event description..." cols="100" name = "eventdescription"
                            rows="5">
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="focusedInput fw-bold">Organiser Name</label>
                        <input class="form-control" id="focusedInput" placeholder="Organiser name" type="text" name = "organizername">
                    </div>
                    <div class="form-group">
                        <label for="focusedInput fw-bold">Event Time</label>
                        <input class="form-control" id="focusedInput" type="date" name = "eventtime">
                    </div>
                    <div class="form-group">
                        <label for="focusedInput fw-bold">Event Venue</label>
                        <input class="form-control" id="focusedInput" placeholder="Event Venue" type="text" name = "venue">
                    </div>
                    <div class="form-group">
                        <label for="focusedInput fw-bold">Contact Number 1</label>
                        <input class="form-control" id="focusedInput" placeholder="Contact number" type = "text" name = "contactnumber1">
                    </div>
                    <div class="form-group">
                        <label for="focusedInput fw-bold">Email Address 2</label>
                        <input class="form-control" id="focusedInput" placeholder="Email Address" type="email" name = "emailaddress1">
                    </div>
                    <div class="form-group">
                        <label for="focusedInput fw-bold">Contact Number 2</label>
                        <input class="form-control" id="focusedInput" placeholder="Contact number" type = "text" name = "contactnumber2">
                    </div>
                    <div class="form-group">
                        <label for="focusedInput fw-bold">Email Address 2</label>
                        <input class="form-control" id="focusedInput" placeholder="Email Address" type="email" name = "emailaddress2">
                    </div>
                    <div class="form-group">
                        <label for="focusedInput fw-bold">Attach some media</label>
                        <input class="form-control" id="fileInput" type="file" name = "file" class="fileInput" multiple>
                    </div>
                    <br>
                    <input class="submitbtnevent" type = "submit" value =" Post!">
                </form>
            </div>
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