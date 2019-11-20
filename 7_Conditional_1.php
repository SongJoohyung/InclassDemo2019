<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Working with conditonals in PHP</title>
</head>
<body>
    <h1>Working with conditionals in PHP</h1>
    <h2>If statements (without curly braces{})</h2>
    <?php
     //if elseif else: without using curly braces
     
     $x = 30; //declare variables
     //test the value of $x
     if($x==100)
          echo "You have perfect score!";
          //echo "<br>Well done"; //only one statement is allowed without braces
        elseif($x==90)
          echo "You have an above average score!";
        else
          echo "You have an average score!";
     ?>
    <h2>If statements (without curly braces{})</h2>
    <?php
     $x = 100;

     if($x==100){
     echo "You have perfect score!";
     //echo "<br>Well done"; //only one statement is allowed without braces
     }elseif($x==90){
     echo "You have an above average score!";
     }else{
     echo "You have an average score!";
     }
     
     

     ?>
</body>
</html>