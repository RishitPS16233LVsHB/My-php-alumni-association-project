<?php 
    function CheckIsNumberOrNot($val)
    {
        $Pattern = "/^[0-9.-]+$/";
        if(preg_match($Pattern,$val))
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }

    function CheckIsNumberPositiveNegativeIntegerOrNot($val)
    {
        $Pattern = "/^[0-9-]+$/";
        if(preg_match($Pattern,$val))
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }

    function CheckIsNumberPositiveIntegerOrNot($val)
    {
        $Pattern = "/^[0-9]+$/";
        if(preg_match($Pattern,$val))
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }

    function CheckIsNumberFloatingPointOrNot($val)
    {
        $Pattern = "/^[0-9.-]+$/";
        if(preg_match($Pattern,$val))
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }

    function CheckIsHavingCharactersAdUnderScores($val)
    {
        $Pattern = "/^[a-zA-Z_]+$/i";
        if(preg_match($Pattern,$val))
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }

    function CheckIfPasswordIsStrongOrNot($val)
    {   
        $Pattern = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/i";
        if(preg_match($Pattern,$val))
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    


    function DoesContainsIllegalCharactersAndString($string)
    {
        $string  = trim($string);
        $notAllowedCommands = array(
            "DELETE",
            "TRUNCATE",
            "DROP",
            "USE",
            "SELECT",
            "INSERT",
            "UPDATE"
        );
        $containsNotAllowedCommands = 0;
        foreach($notAllowedCommands as $notAllowedCommand)
        {
            $upperCaseQuery = strtoupper($string); 
            if(preg_Match( "/{$notAllowedCommand}/i",$upperCaseQuery)){
                //echo $notAllowedCommand . " " . $upperCaseQuery;
                return 0;
            }    
        }

        // check for mysql double dash comments
        if(preg_match("/ --/i",$string))
        {
            return 0;
        }

        // check for mysql and or operator
        if(preg_match("/ AND /i",$string) || preg_match("/ OR /i",$string) || preg_match("/ and /i",$string) || preg_match("/ or /i",$string))
        {
            return 0;
        }

        // all blank string
        if(preg_match("/^ +$/i",$string))
        {
            return 0;
        }
        return 1;
    }


    function DoChecksWithSql($Var)
    {
        if(!empty($Var))
        {
            if(DoesContainsIllegalCharactersAndString($Var) == 0)
            {
                return 0;
            }
            else
            {
                return 1;
            }
        }
        else
        {
            echo "<br> is empty <br>";
            return 0;
        }
    }

    function DoCheck($Var)
    {
        if(!empty($Var))
            return 1;
        else
            return 0;     
    }

    function ValidateEmailAddress($Var)
    {
        if(filter_var($Var,FILTER_VALIDATE_EMAIL) === false)
        {
            echo "not matched";
            return 0;
        }
        else
        {
            echo "matched";
            return 1;
        }
    }
?>