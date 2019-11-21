<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Implode and Explode Array Functions</title>
</head>
<body>
    <h1>Implode and Explode Array Functions</h1>
    <?php  
         // Create an array of random numbers
         $array1 = array(4,6,8,9,33,56);
         //IMPLODE:  Converts an array into a string using a "JOIN STRING"
         //          a.k.a the "GLUE"

         $string1 = implode(",", $array1);
         //$string1 = implode("-", $array1);

         //print out result
         echo "<p>Implode result of Array1 is: $string1<p>";

         //EXPLODE:  Converts a string into an array using a "DIVIDE STRING"
         //          a.k.a. the "DELIMITER"
         var_dump(explode(",",$string1));

         echo "<hr>";

         //---------------- Build a pizza ---------------------
        //Create a list of ingredients for pizza
        $pizza = "bacon,pepperoni,hamburg,onions,green peppers,mushrooms";

        //Build an array of ingredients using list above
        $pizza_array = explode(",",$pizza);
        //var_dump($pizza_array);

        //Display pizza ingredients in a unordered list
        echo "<ul>";
        foreach($pizza_array as $k=>$v){
            echo "<li>$v</li>";
        }
        echo "</ul>";

        //Make an HTML Form to display each pizza ingredient in a checkbox control      
    ?>
    <h3>Pick your Pizza ingredients:</h3>
    <form action="15_pizza.php" method="post">
        <?php  
            foreach($pizza_array as $k=>$v){
                echo "<input type='checkbox' name='$v' value='$v'>$v <br>";
            }
        ?>
        <button type="submit">Order</button>
    </form>
</body>
</html>