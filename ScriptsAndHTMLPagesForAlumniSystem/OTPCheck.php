<?php 
	    require_once $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/SessionManagement/SessionCheck.php'; 
	    require_once $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/DatabaseConnection/CrudOperations.php'; 
        require_once "error.php";
		SessionCheck();
?>
<?php 
    try
    {
        if(isset($_POST['token']) && isset($_POST['otp']) && !empty($_POST['token']) && !empty($_POST['otp']))
        {
            $token = $_POST['token'];
            $otp = $_POST['otp'];
            $connection = mysqli_connect("localhost","root","root","Alumni_Association_System_Database");
            if($connection)
            {
                echo "connected";
                $query = "select * from tbl_otp_information where OTPID = ".$token." and OTPNUMBER = ".$otp." and user_id = ".$_SESSION['userid']." and time > 0;";
                //die("ok displayed");
                $result = mysqli_query($connection,$query);
                $number_of_rows = mysqli_num_rows($result);

                if($number_of_rows == 0)
                {
                    error("otp not matched","OTPValidation.php");
                    echo "not matched";
                }
                else{
                    echo "matched";
                    if(isset($_SESSION['userid']))
                    {
                        ActivateAccount($_SESSION['userid']);
                        DeleteOTPFromTable($token);
                        header("location: Login.php");
                    }
                }
            }
            else
            {
                echo "not connected";
            }
            mysqli_close($connection);
        }
    }
    catch(Exception $exception)
    {
        echo "oops some error occured";
    }
?>