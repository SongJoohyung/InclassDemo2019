<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Working with Numbers in PHP</title>
</head>
<body>
    <h1>Working with Numbers is PHP</h1>

    <?php
    // setup some variables 
    $quantity = 30;  //30 widget (integer)
    $price = 120.50; // price of each widget (double||float)
    $tax = .15;       //tax rate (double||float)
     
    //Calcualte the total cost 
    $total = $quantity * $price;
     
    //Add the tax on top
    $total += ($total * $tax);

    //Print out the results
    echo "<p>You are purchasing $quantity widgets at a cost off ".
    number_format($price,2)  .
    " each for a grand total including tax of $".
    number_format($total, 2) . "</p>";
    
    ?>
</body>
</html>