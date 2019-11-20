<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Working with conditionals in PHP</title>
</head>
<body>
    <h1>Working with conditionals in PHP</h1>
    <h2>Single equal logical operator</h2>
    <?php
    //The single equal is the assignment operator
    $name = "John"; //assign the value John to variable called name
    echo $name;

    $x = 25; //assign the value 25 to variable called x


    ?>
    <h2>double equal logical operator</h2>
    <?php
      // The double equal is the comparison operator for testing conditions
      $a = 5;
      $b = 4+1; 

      if($a==$b) echo "Condition is true";
    ?>
    <h2>Triple equal logical operator</h2>
    
    <?php
       $age1 = "5";
       $age2 = 5;
       if(age===$age2) {
           //true
           echo "age 1 and age 2 are the same";
        } else {
                 echo "age 1 and age 2 are different";
        }
    ?>
</body>
</html>