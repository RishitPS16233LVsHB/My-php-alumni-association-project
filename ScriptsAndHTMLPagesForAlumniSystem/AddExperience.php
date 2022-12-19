<?php 
	    require_once $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/SessionManagement/SessionCheck.php'; 
        require_once "error.php";
        require_once $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/DatabaseConnection/CrudOperations.php';
		SessionCheck();
?>
<?php 
    if(!isset($_POST['startdate']) || empty($_POST['startdate']))
        error("startdate is empty","setting.php");
    else
        $StartDate = $_POST['startdate'];

    if(!isset($_POST['enddate']) || empty($_POST['enddate']))
        error("achievement title is empty","setting.php");
    else
        $EndDate = $_POST['enddate'];

    if(!isset($_POST['exptitle']) || empty($_POST['exptitle']))
        error("experience title is is empty","setting.php");
    else
        $ExpTitle = $_POST['exptitle'];


    if(!isset($_POST['expdescription']) || empty($_POST['expdescription']))
        error("experience description is empty","setting.php");
    else
        $ExpDescription = $_POST['expdescription'];

    //echo $AchTitle;
    InsertIntoUserExperienceTable($StartDate,$EndDate,$ExpTitle,$ExpDescription);
?>