<?php 
function CheckForErrorMessage()
{
    if(!PHP_SESSION_ACTIVE)
        session_start();

    if(isset($_SESSION['errormsg'])){
        if(!empty($_SESSION['errormsg']))
        {			
            echo "<script> alert('".$_SESSION['errormsg']."');</script>";			        
            $_SESSION['errormsg'] = "";
        }
    }
}

// function error($error,$redirect)
// {
//     if(!PHP_SESSION_ACTIVE)
//         session_start();
//     $_SESSION['errormsg'] = $error;
//     //echo $_SESSION['errormsg'];
//     echo "<script> alert('".$_SESSION['errormsg']."');</script>";	
//     header("Location: $redirect");
// }

function error($error,$redirect)
{
    echo "<script>";
        echo "alert('$error');";
        echo "window.location.replace('$redirect');";
    echo "</script>";    
}
?>