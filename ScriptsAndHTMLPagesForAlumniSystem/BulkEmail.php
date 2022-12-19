<?php 
	    require_once $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/SessionManagement/SessionCheck.php'; 
		SessionCheck();
?>
<?php
    try{
            

        if(!isset($_POST['content']) || empty($_POST['content'])
        || !isset($_POST['subject']) || empty($_POST['subject']))
            {
                echo $_POST['content'];
                echo $_POST['subject'];
                die("mail content or subject is empty");
            }
        $Content = $_POST['content'];
        $Subject = $_POST['subject'];
        $Connection = mysqli_connect("localhost","root","root","Alumni_Association_System_Database");
        if(!$Connection)
            echo "not connected";
        else{
            echo "connected";
                $Query = "select Email_ID from tbl_user";
                $email = "";
                $result = mysqli_query($Connection,$Query);
                foreach($result as $row)
                {
                    $email .= " " . $row['Email_ID'] . ",";                 
                }
                echo $email . "<br> <br>";
                // send email
                $to = $email;
                
                // Set content-type header for sending HTML email
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                
                // Additional headers
                $headers .= "From: rishitselia@gmail.com";
                
                $htmlContent = "<html>
                                    <body>
                                        $Content
                                    </body>
                                </html>";            
                set_time_limit(3600);
                if(mail($to,$Subject,$htmlContent,$headers)){
                    echo "mail has been sent successfully";
                    header("location: /PHPAlumniProject/AdminPanel/html/bulkEmail.php");
                }
                else{
                    mysqli_close($Connection);
                    die("the mail has not been sent");
                }            
            mysqli_close($Connection);
        }
    }
    catch(Exception $exception)
    {
        echo "not found the db " . $exception;
    }
?>