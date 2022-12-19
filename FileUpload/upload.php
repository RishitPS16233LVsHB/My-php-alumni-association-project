<?php 
    require $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/SessionManagement/SessionCheck.php'; 
    SessionCheck();
    echo $_FILES['file']['name'] . "<br>";
    echo $_FILES['file']['tmp_name'] . "<br>";
    echo $_FILES['file']['type'] . "<br>";
    echo $_FILES['file']['size'] . "<br>"; 

    if(!is_dir($_SERVER['DOCUMENT_ROOT']."/PHPAlumniProject/uploads/202006100110028/"))
        mkdir($_SERVER['DOCUMENT_ROOT']."/PHPAlumniProject/uploads/202006100110028/");
    echo $_SERVER['DOCUMENT_ROOT']."/PHPAlumniProject/Uploads/";

    if($_FILES['file']['type'] == 'image/jpg' || $_FILES['file']['type'] == 'image/png')
    {
        echo "done";
        move_uploaded_file($_FILES['file']['tmp_name'],$_SERVER['DOCUMENT_ROOT']."/PHPAlumniProject/Uploads/".$_FILES['file']['name']);
    }
    
?>