<?php 
	    require_once $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/SessionManagement/SessionCheck.php'; 
        require_once "error.php";
        require_once $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/DatabaseConnection/CrudOperations.php';
		SessionCheck();
?>
<?php 
    
    if(!isset($_POST['achievementdate']) || empty($_POST['achievementdate']))
        error("achievment Date is empty","setting.php");
    else
        $AchDate = $_POST['achievementdate'];

    if(!isset($_POST['achievementtitle']) || empty($_POST['achievementtitle']))
        error("achievement title is empty","setting.php");
    else
        $AchTitle = $_POST['achievementtitle'];

    if(!isset($_POST['achievementdescription']) || empty($_POST['achievementdescription']))
        error("achievement description is empty","setting.php");
    else
        $AchDescription = $_POST['achievementdescription'];
    //die("ok till here" . $AchTitle . " " . $AchDescription . " " . $AchDate);
    InsertIntoUserAchievementTable($AchDate,$AchTitle,$AchDescription);
?>