<?php 

    function TrimPath($rows,$field)
    {
        $path = substr($rows[$field],strlen("C:/xampp/htdocs/PHPAlumniProject/"),strlen($rows[$field]));
        return $path;
    }
    function ConnectToDB()
    {
        $user = "root";
        $pass = "root";
        $server = "localhost";
        $database = "Alumni_Association_System_Database";

            $connection = mysqli_connect($server,$user,$pass,$database);
            if($connection)
            {
                //echo "connected<br>";
                return $connection;
            }
            else{
                die("failed to connect to database");
            }
    }
    function CloseConnection($connection)
    {
        if($connection)
        {
            mysqli_close($connection);
            //echo "disconnected";
        }
        else
            echo "connection is null";  
    }

    function createUserDirectory($userID)
    {
        if(!is_dir($_SERVER['DOCUMENT_ROOT']."/PHPAlumniProject/uploads/$userID/"))
            mkdir($_SERVER['DOCUMENT_ROOT']."/PHPAlumniProject/uploads/$userID/");
    }

    function moveUploadedImageToUserDirectory($userID)
    {
        if($_FILES['file']['type'] == 'image/jpeg' || $_FILES['file']['type'] == 'image/jpg' || $_FILES['file']['type'] == 'image/png')
        {
            echo "profile photo moved done";
            move_uploaded_file($_FILES['file']['tmp_name'],$_SERVER['DOCUMENT_ROOT']."/PHPAlumniProject/Uploads/$userID/".$_FILES['file']['name']);
        }
        else{
            echo "<br><br><br> profile photo not moved,thus that not done<br><br><br>".$_FILES['file']['type']."";
        }
    }
?>