<?php 
	    require_once $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/SessionManagement/SessionCheck.php'; 
		SessionCheck();
?>
<html>
    <head>

    </head>
    <body>
        <h1> please enter token and otp sent to you via email to become part of out community</h1><br>
        <h2> Hurry!before otp expires in about 60 mins</h2>
            <form action = "OTPCheck.php" method = "post">
                token : <input type = "number" name = "token">
                otp : <input type = "number" name = "otp">
                <input type = "submit">
            </form>
    </body>
</html>