<?php 
	require_once 'error.php';
	session_start();

	if(!empty($_SESSION['errormsg']))
	{
		echo "<script> alert('".$_SESSION['errormsg']."')</script>";
		$_SESSION['errormsg'] = "";
	}

	if(isset($_SESSION['email']) && isset($_SESSION['user_type']) && $_SESSION['user_type'] == 1){
		echo "normal user";
		header("location: /PHPAlumniProject/homePage.php");
	}
	else if(isset($_SESSION['email']) && isset($_SESSION['user_type']) && $_SESSION['user_type'] == 0){
		echo "admin";
		header("location: /PHPAlumniProject/AdminPanel/html/index.php");
	}
	else
	{
		CheckForErrorMessage();
		$_SESSION['email'] = "";
		$_SESSION['userid'] = 0;
		$_SESSION['username'] = "";
		session_unset();
		session_destroy();
	}
?>

<!DOCTYPE html>
<html>

<head>

	<style>
		body{
			background-image: -webkit-linear-gradient(136deg , rgb(116,235,213) 0% , rgb(63,43,150) 100%);
		}
		.heading
		{
			padding-left : 45%;			
		}
		.RegisterButton{
			font-family: 'Open Sans', sans-serif;
			background-color: #4fab40;
			border: none;
			cursor: pointer;
			font-size: 16px;
			color: #fff;
			padding: 12px 10px;
			width: 120px;
			float: right;
			margin: 35px 10px 20px 15px;
		}
		.RegisterButton:hover{
			background-color:#36782c;
		}
		.showPasswordInput{
			color: grey;
			font-family: normal normal 14px/1 'Material-Design-Iconic-Font';
			cursor: pointer;
			padding-left : 3%;
		}
	</style>


	<meta charset="utf-8">
	<title>Login Form</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/Login_css/opensans-font.css">
	<link rel="stylesheet" type="text/css" href="css/Login_fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- Main Style Css -->
	<link rel="stylesheet" href="css/Login_css/style.css"/>
</head>

<body>
	<div class="page-content">
		<div class="form-v1-content">
			<div class="wizard-form">
				<form class="form-register" method="post">
					<div id="form-total">
						<section>
							<div class="inner">
								<div class="wizard-header">
									<h3 class="heading">Login</h3>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Your Enrollment number</legend>
											<input type="text" name="email" id="your_email" class="form-control" placeholder="example@email.com" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Password</legend>
											<input type="password" class="form-control" id="password" name="password" placeholder="password" required>
										</fieldset>
									</div>
								</div>
								<label class="showPasswordInput" for="showPassword">Show Password</label>
								<input class="showPasswordInput" type="checkbox" name="showPassword" onclick="Toggle()" id="showPasswordinput">
								<!-- <p class="forgotPassword">Forgot password?</p> -->
							</div>
						</section>
						<button class="signIn" formaction="LoginPageValidations.php" formmethod="POST">sign in</button>
						<button class="RegisterButton" formaction = "index.php"><a class="loginRedirect" href="index.php">Register</a></button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<script>
		function Toggle(){
			let temp = document.getElementById('password');
			if(temp.type === "password"){
				temp.type = "text";
			}else{
				temp.type = "password";
			}
		}
	</script>

	<script src="js/Login_js/jquery-3.3.1.min.js"></script>
	<script src="js/Login_js/jquery.steps.js"></script>
	<script src="js/Login_js/main.js"></script>
</body>

</html>