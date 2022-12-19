<?php 
	    require_once $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/SessionManagement/SessionCheck.php'; 
		SessionCheck();
?>
<?php
    try{
            
        echo $_SESSION['useremail'];
        if(!isset($_SESSION['userid']) || !isset($_SESSION['useremail']))
            die("server error,please retry");

        $Connection = mysqli_connect("localhost","root","root","Alumni_Association_System_Database");
        if(!$Connection)
            echo "not connected";
        else{
            echo "connected";
                // insert the otp request 
                $Query = "insert into tbl_otp_information(userEmail,user_id)values('".$_SESSION['useremail']."',".$_SESSION['userid'].")";
                mysqli_query($Connection,$Query);
                // get the same request id or token
                $lastID = mysqli_insert_id($Connection);
                // fetch the same request for sending email
                $email = "";
                $otp = "";
                $token = "";
                $result = mysqli_query($Connection,"select * from tbl_OTP_Information where OTPID = ".$lastID."");
                foreach($result as $row)
                {
                    $email = $row['userEmail'];
                    $otp = $row['OTPNUMBER'];
                    $token = $row['OTPID'];                    
                }
                // send email
                $to = $_SESSION['useremail'];
                
                // Set content-type header for sending HTML email
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                
                // Additional headers
                $headers .= "From: rishitselia@gmail.com";
                
                $htmlContent = '
                                <html>
                                    <body>
                                        <h1>OTP Notification </h1>
                                        <p>your otp token is '.$token.' and your otp is '.$otp.'</p>
                                    </body>
                                </html>';
                $subject = "OTP notification for registration process in our Alumni Association";
            
                set_time_limit(3600);
                if(mail($to,$subject,$htmlContent,$headers)){
                    echo "mail has been sent successfully";
                }
                else{
                    mysqli_close($Connection);
                    die("the mail has not been sent");
                }            
            mysqli_close($Connection);
            header("location: OTPValidation.php");
        }
    }
    catch(Exception $exception)
    {
        echo "not found the db " . $exception;
    }
?>