<?php 
	require_once $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/SessionManagement/SessionCheck.php'; 
	require_once $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/error.php';
    SessionCheck();
    CheckForErrorMessage(); 
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
    <!-- <div class="conatiner-fluid"> -->
    <div class="conatiner-fluid">
        <div class="row comment-box-main p-4 rounded-bottom">
            <a href="homePage.php"> <img class="BackButton" src="Images/BackButton.png"> </a>
            <h3 class="ChatTitle"> Create Post </h3>
            <a class="Username" href="#"> @Rishit Selia </a>
        </div>


        <div class="chattingWindow">
            <div class="ChatWin">
                <div class="container">
                    <form class="form-horizontal" action="CreatePostValidations.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="focusedInput fw-bold">Post Subject</label>
                            <input class="form-control" id="focusedInput" placeholder="Post title here..." type="text" name = "posttitle">
                        </div><br>
                        <div class="form-group">
                            <label for="focusedInput">Post Description</label>
                            <textarea class="form-control" id="focusedInput" placeholder="Post description..." name = "postdescription"
                                cols="100" rows="5"></textarea><br>
                        </div>
                        <div class="form-group">
                            <label for="focusedInput fw-bold">Attach some media</label>
                            <input class="form-control" id="fileInput" type="file" class="fileInput" name = "file">
                        </div><br>
                        
                        <br>
                            <!-- <input type="submit" class="submitbtn" value="Post!"> -->
                            <input class = "submitbtn" type = "submit" value = "POST!">
                    </form>
                </div>
            </div>
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