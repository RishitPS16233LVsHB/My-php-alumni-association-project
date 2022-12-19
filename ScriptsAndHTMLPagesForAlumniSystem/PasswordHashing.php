<?php 
    //$Password = "YouKnowWhatItIs";
    if(isset($_FILES['file']) && !empty($_FILES['file']))
    {
        echo $_FILES['file']['name'];
    }


    //$hashedPassword = hash("sha256",$Password);
    //echo $hashedPassword . "   " . $Password;
    echo '<form method = "post" enctype="multipart/form-data" action = "PasswordHashing.php">';
    echo '<input type = "file" name = "file">';
    echo '<input type="submit">';
    echo "</form>";

?>


