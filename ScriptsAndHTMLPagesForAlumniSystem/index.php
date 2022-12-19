<?php 
	//require_once$_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/SessionManagement/SessionCheck.php'; 
	//SessionCheck();
	require_once "error.php";
	require_once $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/DatabaseConnection/CrudOperations.php';
	CheckForErrorMessage();
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Register to Alumni Association</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- bootstrap-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
		integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/opensans-font.css">
	<link rel="stylesheet" type="text/css"
		href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- Main Style Css -->
	<link rel="stylesheet" href="css/style.css"/>
</head>

<body>
	

	<div class="page-content">

		<div class="form-v1-content">

			<div class="wizard-form">
				<form class="form-register" action="RegistrationPageValidations.php" method="post" enctype="multipart/form-data">
					<div id="form-total">

						<!-- SECTION 1 -->
						<h2>
							<!-- <p class="step-icon"><span>0</span></p> -->
							<span class="step-text">Register</span>
						</h2>
						<section>
							<div class="inner">
								<div class="wizard-header">
									<h3 class="heading" style="color : #1c3961;">Register</h3>
									<p>Please enter your infomation and proceed to the next step so we can build your
											accounts. </p>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>First Name</legend>
											<input type="text" class="form-control" id="first-name" name="first_name"
												placeholder="First Name" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder ">
										<fieldset>
											<legend>Last Name</legend>
											<input type="text" class="form-control" id="last-name" name="last_name"
												placeholder="Last Name" required>
										</fieldset>
									</div>
									<div class="form-holder ">
										<fieldset>
											<legend>Enrollment number</legend>
											<input type="text" class="form-control" id="last-name" name="enrollment_number"
												placeholder="enrollment number" required>
										</fieldset>
									</div>									
								</div>
								
								<div >
									<div >
										<fieldset>
										<table>
											<p> Gender</p>
											<!-- <legend>Gender</legend> -->
											
												<tr>
													<td style = "padding-left:3px;padding-right:3px;">	Male: </td>
													<td style = "padding-left:3px;padding-right:3px;"> <input type="radio" name="gender" value = "m" required checked> </td>
												</tr>

												<tr>
													<td>	Female: </td>
													<td> <input type="radio" name="gender" value = "f" required> </td>
												</tr>											
											</table>

										</fieldset>
									</div>
								</div>
								<br>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Your Email</legend>
											<input type="email" name="email" id="yourEmail" class="form-control" placeholder="example@email.com" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Phone Number</legend>
											<input type="text" class="form-control" id="phone" name="contact_number" placeholder="+98564384854" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row ">
									<div class="form-holder form-holder-2">
										<legend>Your Batch</legend>
										<select name="batch" id="batch">
											<?php 
												DisplayBatchInDropDown();
											?>
										</select>
									</div>
								</div>
								<div class="form-row form-row-date">
									<div class="form-holder form-holder-2">
										
										<fieldset>
											<legend>Birth Date</legend>
											<input type="date" name="date_of_birth" id="dateofbirth">
										</fieldset>
									</div>
								</div>
							</div>
							
							<div class="inner">
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Current Company</legend>
											<input type="text" class="form-control" id="currentcompany"
												name="company" placeholder="Company here!" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<!-- <fieldset> -->
											<p>Job Title</p>
											<!-- <legend>Job Title</legend> -->
											<select name="designation" required>
											<?php DisplayJobTitleInDropDown();?>
											</select>
										<!-- </fieldset> -->
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<!-- <fieldset> -->
											<p>Place of work</p>
											<!-- <legend>Place of work</legend> -->
											<select name="location" required>
											<?php DisplayPlaceOfWorkInDropDown();?>
											</select>
										<!-- </fieldset> -->
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Experience</legend>
											<input type="number" class="form-control" id="experience" name="experience"
												placeholder="Your Experience" value = "1" min="1" max="15" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<!-- <fieldset> -->
											<!-- <legend>Technology</legend> -->
											<p>Technology</p>
											<select name="technology" required>
												<?php DisplayTechnologyInDropDown(); ?>
											</select>
										<!-- </fieldset> -->
									</div>
								</div>

								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Password</legend>
											<input type="password" class="form-control" id="currentcompany" name="password" required>
										</fieldset>
									</div>
								</div>

								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Confirm password</legend>
											<input type="password" class="form-control" id="currentcompany" name="cpassword" required>
										</fieldset>
									</div>
								</div>

								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Profile photo</legend>
											<input type = "file" name = "file">
										</fieldset>
									</div>
								</div>
								<input class="register"  type = "submit" value = "Register">
								<a class="register" href="Login.php" >Back to Login</a>
							</div>
						</section>
						<!-- SECTION 2 -->
						<!-- <h2>
							<p class="step-icon"><span>02</span></p>
							<span class="step-text">Company Details</span>
						</h2> -->
						<!-- <section>

						</section> -->
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/jquery.steps.js"></script>
	<script src="js/main.js"></script>

</body>

</html>