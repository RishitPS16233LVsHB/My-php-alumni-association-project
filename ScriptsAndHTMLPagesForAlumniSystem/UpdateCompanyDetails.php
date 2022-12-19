<?php 
	    require_once $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/SessionManagement/SessionCheck.php'; 
        require_once "error.php";
        require_once $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/DatabaseConnection/CrudOperations.php';
		SessionCheck();
?>
<?php 
    if(!isset($_POST['company']) || empty($_POST['company']))
        error("company is empty","setting.php");
    else
        $Company = $_POST['company'];

    if(!isset($_POST['designation']) || empty($_POST['designation']))
        error("designation is empty","setting.php");
    else
        $Designation = $_POST['designation'];

    if(!isset($_POST['package']) || empty($_POST['package']))
        error("package is empty","setting.php");
    else
        $Package = $_POST['package'];
    
    if(!isset($_POST['experience']) || empty($_POST['experience']))
        error("experience is empty","setting.php");
    else
        $Experience = $_POST['experience'];

    if(!isset($_POST['location']) || empty($_POST['location']))
        error("location is empty","setting.php");
    else
    {
        $Location = $_POST['location'];
        UpdateCompanyDetails($Company,$Designation,$Package,$Experience,$Location);
    }
?>