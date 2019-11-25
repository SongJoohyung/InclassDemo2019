<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>predefined Variables in PHP</title>
</head>
<body>
    <?php
        //User-defined variable declaration 
        /*
            In PHP a variable starts with the  sign, followed by the name of the variable.

            Rules for PHP variables:
                - A variable name must start with a letter or the underscore
                - A variable name cannot start with a number
                - A variable name can only contain alph-numeric characters and underscores
                    A - Z, 0 - 9, and -
                - variable names are case-sensitve for example:
                       $firstname and $firstname are 2 different variable
                - Note: There a no datatypes in PHP
        */

        //Declare some variables
        $firstname = "Joohyung";
        $lastname = "Song";
        
        $x = 50;

        //print out the input variables
        echo $firstname;
        echo "<br>";
        echo $lastname;
        echo "<p>$x</p>";

        echo '<p>$x</p>';
 
        echo '<p>'. $x . '</p>';
           
        //Now using some PHP Predefined variables
        //Let's create a shorthand version of some of these
        $file = $_SERVER['SCRIPT_FILENAME']; //current script filename
        $device = $_SERVER['HTTP_USER_AGENT']; //user browser device
        $server = $_SERVER['SERVER_SOFTWARE']; //host web server

        //let's print them out
        echo "<p>You are running this file: $file</p>";
        echo "<p>You are using this browser: $device</p>";
        echo "<p>You are using this web server: $server</p>";
    ?>
</body>
</html>