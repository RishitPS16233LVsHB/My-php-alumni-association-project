<?php 
	    require_once $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/SessionManagement/SessionCheck.php';
        require_once $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/DatabaseConnection/CrudOperations.php';
        require_once "FormValidations.php"; 
		SessionCheck();
?>
<?php 


        if(DoCheck($_POST['jobtitle'])){
            $JobPostTitle = $_POST['jobtitle'];
            echo "Job post title ok";
        }        
        else 
            error("job title is empty","CreateJob.php");
        
        if(DoCheck($_POST['jobdescription'])){
            $JobPostDescription = $_POST['jobdescription'];
            echo "job post description ok";
        }        
        else 
            error("job description is empty","CreateJob.php");
        
        if(DoChecksWithSql($_POST['designation']))
        {
            $Designation = $_POST['designation'];
            echo "designation ok";
        }    
        else 
            error("company name entered is empty or inappropriate","CreateJob.php");
        
        if(DoChecksWithSql($_POST['company']))
        {
            $Company = $_POST['company'];
            echo "company name ok";
        }        
        else 
            error("company name entered is empty or inappropriate","CreateJob.php");

        if(DoChecksWithSql($_POST['location'])){
            $Location = $_POST['location'];
            echo "location name ok";
        }        
        else 
            error("location entered is empty or inappropriate","CreateJob.php");

        if(DoChecksWithSql($_POST['vacancies']))
        {
            if(CheckIsNumberPositiveIntegerOrNot($_POST['vacancies']))
            {
                $Vacancies = $_POST['vacancies'];
                echo "Vacancies ok";
            }
            else 
                error("vacancies entered is not valid","CreateJob.php");
        }        
        else 
            error("vacancies is empty","CreateJob.php");

        if(DoChecksWithSql($_POST['technology'])){
            $Technology = $_POST['technology'];
            echo "Technology name ok";
        }
        else 
            error("technology is empty or not appropriate","CreateJob.php");
        
        if(DoChecksWithSql($_POST['package']))
        {
            if(CheckIsNumberPositiveIntegerOrNot($_POST['package'])){
                $Salary = $_POST['package'];
                echo "salary ok";
            }
            else 
                error("package entered is not valid","CreateJob.php");
        }        
        else 
            error("package field is empty","CreateJob.php");
        
        if(DoChecksWithSql($_POST['experience']))
        {
            if(CheckIsNumberPositiveIntegerOrNot($_POST['experience'])){                
                $Experience = $_POST['experience'];
                echo "Experience ok";
            }
            else 
                error("experience entered is not valid","CreateJob.php");
        }
        else 
            error("experience field is empty","CreateJob.php");    
        
        if(DoCheck($_POST['cnum']))
        {
            if(CheckIsNumberPositiveIntegerOrNot($_POST['cnum']) && strlen($_POST['cnum']) == 10){
                $ContactNumber1 = $_POST['cnum'];
                echo "Contact 1 ok";
            }
            else 
                error("contact number not of 10 digit or not a proper number","CreateJob.php");
        }
        else 
            error("contact number empty","CreateJob.php");
        
                
        if(DoChecksWithSql($_POST['email']))
        {
            if(ValidateEmailAddress($_POST['email']))
            {
                $Email1 = $_POST['email'];
                echo "Email 1 ok";
            }            
            else 
                error("email not proper","CreateJob.php");
        }        
        else 
            error("email empty","CreateJob.php");


        echo "<h1>  ok </h1>";
        InsertIntoJobAlertTable($JobPostTitle,$JobPostDescription,$Company,$Location,$Technology,$Designation,$Vacancies,$Salary,$Experience,$ContactNumber1,$Email1);
?>