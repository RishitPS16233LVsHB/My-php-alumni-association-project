<?php 
	    require_once $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/SessionManagement/SessionCheck.php'; 
        require_once $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/error.php';
        require_once $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/DatabaseConnection/CrudOperations.php';         
		SessionCheck();
?>
<?php
    CheckForErrorMessage();
    require_once 'FormValidations.php';
    // change the double quotation marks with $_POST['posttitle'] and $_POST['postdescription']
    $PostTitle = "";
    $PostDescription = "";

    if(isset($_POST['posttitle']) && isset($_POST['postdescription']))
    {   
        $PostTitle = $_POST['posttitle'];
        $PostDescription = $_POST['postdescription'];

        if(DoCheck($PostTitle) && DoCheck($PostDescription))
        {
            echo "post title and post description are good";
            InsertIntoPostTable($PostTitle,$PostDescription);
        }
        else
        {
            echo "post title of description is empty";
            error("post title of description is empty","CreatePost.php");
        }
    }
    else
    {
        echo "server error";
        error("server error","CreatePost.php");
    }
?>