<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Alumni System</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" type="text/css" href="css/opensans-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="css/style.css">
	<style>
		.form-v1-content {
			background: #fff;
			width: 820px;
			box-shadow: 0px 8px 20px 0px rgb(0 0 0 / 15%);
			-o-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
			-ms-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
			-moz-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
			-webkit-box-shadow: 0px 8px 20px 0px rgb(0 0 0 / 15%);
			border-radius: 10px;
			-o-border-radius: 10px;
			-ms-border-radius: 10px;
			-moz-border-radius: 10px;
			-webkit-border-radius: 10px;
			margin: 60px 0;
			font-family: 'Open Sans', sans-serif;
			position: relative;
			display: flex;
			display: -webkit-flex;
		}

		.form-register .content .inner {
			padding: 0 50px;
			margin-bottom: 5px;
		}

		.inner .form-row .form-holder {
			width: 50%;
			padding: 0 10px;
			margin-bottom: 0px;
			margin-top: 7px;
			position: relative;
		}

		.error {
			color: red;
			font-size: small;
		}
	</style>
</head>


<body>
	<?php
	$validInfo = 0;
	$nameErr = $emailErr = $passwordErr = $phoneErr = $batchErr = $companyErr = $jobTitleErr = $place_ExperienceErr = $technologyErr = "";
	$username = $email = $phone = $batch = $dob = $password = $confirmpassword = $company = $jobtitle = $placeofwork = $experience = $technology = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		echo "post";
		if (!preg_match("/^[A-Za-z-' ]*$/", $_POST['username'])) {
			$nameErr = "Only character and whitespace are allowed";
		} else
			$validInfo++;

		$email = $_POST['email'];
		if (empty($_POST['email'])) {
			$emailErr = "Email is required";
		} else {
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$emailErr = "Enter valid email Id";
			} else {
				// $email = $_POST['email'];
				$validInfo++;
			}
		}

		if ($_POST['password'] != $_POST['confirmpassword']) {
			$passwordErr = "Passwords doesn't match";
		} else
			$validInfo++;

		$phone = $_POST['phone'];
		if (strlen($phone) < 10) {
			$phoneErr = "Enter valid phone number";
		} else
			$validInfo++;

		$batch = $_POST['batch'];
		$currentYear = date("Y");
		// echo $batch ." " . $currentYear; 
		if (!($batch > 2011 && $batch <= $currentYear)) {
			$batchErr = "Batch must be between 2011-" . $currentYear;
		} else
			$validInfo++;

		$experience = $_POST['experience'];
		if ($experience < 1) {
			$place_ExperienceErr = "Enter valid experience";
		} else
			$validInfo++;

		$company = $_POST['company'];
		if (!preg_match("/^[A-Za-z-' ]*$/", $company)) {
			$companyErr = "Only characters and whitespace are allowed";
		} else
			$validInfo++;

		$jobtitle = $_POST['jobtitle'];
		if (!preg_match("/^[A-Za-z-' ]*$/", $jobtitle)) {
			$jobTitleErr = "Only characters and whitespace are allowed";
		} else
			$validInfo++;

		$placeofwork = $_POST['placeofwork'];
		if (!preg_match("/^[A-Za-z]*$/", $placeofwork)) {
			$place_ExperienceErr = "Only characters are allowed";
		} else
			$validInfo++;

		$technology = $_POST['technology'];
		if (!preg_match("/^[A-Za-z0-9-,' ]*$/", $technology)) {
			$technologyErr = "Characters , numbers and whitespace are allowed";
		} else
			$validInfo++;

		if ($validInfo == 10) {
			header("location: Login.php");
		} else
			echo "validinfo = false";
	} 
	// else
	// 	echo "get";


	?>
	<div class="page-content">
		<div class="form-v1-content">
			<div class="wizard-form">
				<!-- <form class="form-register mt-0" method="POST" action=" <?php //echo htmlspecialchars($_SERVER["PHP_SELF"]); 
																				?>"> -->
				<form class="form-register mt-0">

					<div id="form-total">

						<h2>
							<p class="step-icon"></p>
							<span class="step-text">Register</span>
						</h2>
						<section>
							<div class="inner">
								<form method="POST" action=" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
									<div class="wizard-header">
										<h3 class="heading" style="color: #1c3961;">REGISTER</h3>
										<p>Please enter your infomation and proceed to the next step so we can build your
											accounts. </p>
									</div>
									<div class="form-row">
										<div class="form-holder form-holder-2">
											<fieldset>
												<legend>Username</legend>
												<input type="text" name="username" id="first-name" class="form-control" placeholder="Your username" required>
											</fieldset>
										</div>
									</div>
									<span class="error">*<?php echo $nameErr; ?></span>
									<div class="form-row">
										<div class="form-holder form-holder-2">
											<fieldset>
												<legend>Your Email</legend>
												<input type="text" name="email" id="yourEmail" class="form-control" placeholder="example@email.com" required>
												<!-- pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" -->
											</fieldset>
										</div>
									</div>
									<span class="error">*<?php echo $emailErr; ?></span>
									<div class="form-row">
										<div class="form-holder form-holder-2">
											<fieldset>
												<legend>Phone Number</legend>
												<input type="text" class="form-control" id="phone" name="phone" placeholder="+1 888-999-7777" required>
											</fieldset>
										</div>
									</div>
									<span class="error">*<?php echo $phoneErr; ?></span>
									<div class="form-row">
										<div class="form-holder">
											<fieldset>
												<legend>Your Batch</legend>
												<input type="text" class="form-control" id="batch" name="batch" placeholder="Start from 2011" required>
											</fieldset>
										</div>
										<div class="form-holder">
											<fieldset>
												<legend>Birth Date</legend>
												<input type="date" name="dob" id="" required>
											</fieldset>
										</div>
									</div>
									<span class="error">*<?php echo $batchErr;
															?></span>
									<div class="form-row">
										<div class="form-holder">
											<fieldset>
												<legend>Password</legend>
												<input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
											</fieldset>
										</div>
										<div class="form-holder">
											<fieldset>
												<legend>Confirm Password</legend>
												<input type="password" class="form-control" id="confirmpassword" name="confirmpassword" placeholder="Confirm Password" required>
											</fieldset>
										</div>
									</div>
									<span class="error">*<?php echo $passwordErr;
															?></span>
									<div class="form-row">
										<div class="form-holder form-holder-2">
											<fieldset>
												<legend>Current Company</legend>
												<input type="text" class="form-control" id="currentcompany" name="company" placeholder="Company here!" required>
											</fieldset>
										</div>
									</div>
									<span class="error">*<?php echo $companyErr;
															?></span>
									<div class="form-row">
										<div class="form-holder form-holder-2">
											<fieldset>
												<legend>Job Title</legend>
												<input type="text" class="form-control" id="jobtitle" name="jobtitle" placeholder="Your Job title" required>
											</fieldset>
										</div>
									</div>
									<span class="error">*<?php echo $jobTitleErr;
															?></span>
									<div class="form-row">
										<div class="form-holder">
											<fieldset>
												<legend>Place of work</legend>
												<input type="text" class="form-control" id="placeofwork" name="placeofwork" placeholder="Place of work" required>
											</fieldset>
										</div>
										<div class="form-holder">
											<fieldset>
												<legend>Experience</legend>
												<input type="number" class="form-control" id="experience" name="experience" placeholder="Your Experience" required>
											</fieldset>
										</div>
									</div>
									<span class="error">*<?php echo $place_ExperienceErr;?></span>
									<div class="form-row">
										<div class="form-holder form-holder-2">
											<fieldset>
												<legend>Technology</legend>
												<input type="text" class="form-control" id="technology" name="technology" placeholder="Your current working technologies" required>
											</fieldset>
										</div>
									</div>
									<span class="error">*<?php echo $technologyErr; ?></span>


									<button class="register" name="register" formmethod="post" style="margin: 18px 1px 20px 0px;">Register</button>
								</form>
							</div>

						</section>
					</div>
				</form>

				<!-- <form action="Register.php" method="post">
					Name: <input type="text" name="name"><br>
					E-mail: <input type="text" name="email"><br>
					<input type="submit">
				</form> -->

				<?php


				?>
			</div>
		</div>
	</div>

	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/jquery.steps.js"></script>
	<script src="js/main.js"></script>

</body>

</html>