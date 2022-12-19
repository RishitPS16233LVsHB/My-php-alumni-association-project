<?php 
	    require_once $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/SessionManagement/SessionCheck.php'; 
        require_once "error.php";
        require_once $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/DatabaseConnection/CrudOperations.php';
        require_once 'FormValidations.php';
		SessionCheck();
?>
<?php 

            if(DoCheck($_POST['eventtitle'])){
                $EventTitle = $_POST['eventtitle'];
                echo "Event title ok";
            }
            else    
                error("event title is empty","CreateEvent.php");

            if(DoCheck($_POST['eventdescription'])){
                $EventDescription = $_POST['eventdescription'];
                echo "event description ok";
            }
            else    
                error("event description is empty","CreateEvent.php");

            if(DoCheck($_POST['organizername'])){
                $OrganizerName = $_POST['organizername'];
                echo "organizer ok";
            }
            else    
                error("organizer name is empty","CreateEvent.php");

            if(DoChecksWithSql($_POST['eventtime'])){
                $EventTime = $_POST['eventtime'];
                echo "eventtime ok";
            }
            else    
                error("event time is empty","CreateEvent.php");
            
            if(DoCheck($_POST['venue'])){
                $Venue = $_POST['venue'];
                echo "venue ok";
            }
            else    
                error("venue is empty","CreateEvent.php");

            if(DoCheck($_POST['contactnumber1']))
            {
                if(CheckIsNumberPositiveIntegerOrNot($_POST['contactnumber1']) && strlen($_POST['contactnumber1']) == 10){
                    $ContactNumber1 = $_POST['contactnumber1'];
                    echo "Contact 1 ok";
                }
                else    
                    error("not proper contact number in contact 1","CreateEvent.php");
            }
            else    
                error("contact number 1 is empty","CreateEvent.php");


            if(DoCheck($_POST['contactnumber2']))
            {
                if(CheckIsNumberPositiveIntegerOrNot($_POST['contactnumber2']) && strlen($_POST['contactnumber2']) == 10){
                    $ContactNumber2 = $_POST['contactnumber2'];
                    echo "Contact 2 ok";
                }   
                else    
                    error("not proper contact number in contact 2","CreateEvent.php");
            }
            else    
                error("contact number 2 is empty","CreateEvent.php");

            if(DoCheck($_POST['emailaddress1']))
            {
                if(ValidateEmailAddress($_POST['emailaddress1']))
                {
                    $Email1 = $_POST['emailaddress1'];
                    echo "Email 1 ok";
                }
                else    
                    error("not proper email in email 1","CreateEvent.php");
            }
            else    
                error("email 1 is empty","CreateEvent.php");



            if(DoCheck($_POST['emailaddress2']))
            {
                 if(ValidateEmailAddress($_POST['emailaddress2']))
                 {
                    $Email2 = $_POST['emailaddress2'];
                    echo "Email 2 ok";
                }
                else    
                    error("not proper email in email 2","CreateEvent.php");
            }
            else    
                error("email 2 is empty","CreateEvent.php");

            InsertIntoEventTable($EventTitle,$EventDescription,$OrganizerName,$EventTime,$Venue,$ContactNumber1,$ContactNumber2,$Email1,$Email2);
?>