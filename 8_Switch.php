<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Using the switch statement in PHP</title>
</head>
<body>
    <h1>Using the switch statement in PHP</h1>
<?php
    //declare a variable and assign it value of 4
    $x = 4;
    
    switch ($x)  {
        case 1:
            //Do something when x is 1
            echo "numebr is 1";
        break;
        case 2:
            echo "number is 2";
            
        //break;
        default;
        //Do something when x is not 1 or 2
        echo "number is bigger than 2";
    //break;
    }
?>
</body>
</html>