<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Working with Constants in PHP</title>
</head>
<body>
    <h1>Working with Constants in PHP</h1>
    <?php
         //Constants are like variables except that once they are defined
         // they cannot be changed or undefined
         /*
             Syntax: define (string $name, mixed $value [,bool $case_insensitive = FALSE]) : bool
             - name: specifies the name of the constant
             - value : specifies the value of the constants
             - case_insensitives : specifies whether the constant name should be case insensitive
                                   (default is false) 
         */    
              
         //Define some constants
         define('BASE_URL', 'locations:8888/InclassDemo2019');

         //Alternative (as of PHP 5.3), we can use const
         const HELLO = 'Hello World';

         //Print out the constants
         echo "<h2>This website is running at <storng>". BASE_URL . "</strong> location</p>";
         echo "<p>". HELLO . "</p>";

         //PHP also has some built-in constants, for example
         echo "<p>Current operation system is ". PHP_OS . "</p>"

         
    ?>
</body>
</html>