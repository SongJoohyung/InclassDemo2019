<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name=
    "viewport"  content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Working with Strings in PHP</title>
</head>
<body>
    <h1>Working with Strings in PHP</h1>
    <?php
        //Create some variables 
        $first_name = 'Joohyung';
        $last_name = 'song';
        $book = 'Building websites with PHP';
        
        //Concatenate the first and last name
        $name = $first_name . " " . $last_name; // Joohyung Song

        //Let's print out the name
        echo "<p>Your full name is $name</p>";

        //Upper case the name
        echo "<p>Your uppercase name is strtoupper($name)</p>"; //You cannot double quote functions

        //Must concatenate when using functions
        echo "<p>Your uppercase name is " . strtoupper($name) .  "</p>";

        //but you can do this
        $ucname = strtoupper($name);
        //end then
        echo "<p>Your uppercase name is $ucname</p>";

        //Uppercase first character of each word in book variables
        echo "<p>Uppercase the first letter of the book: " . ucwords($book)."</p>"
    ?>
</body>
</html>