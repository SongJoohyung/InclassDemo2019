<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Working with Booleans in PHP</title>
</head>
<body>
    <h1>Working with Booleans in PHP</h1>
    <?php
   /*
   * Booleans are used to represent the concept of TRUE|FALSE
   * They are mostly used to test if a statement is true or false
   * Note: there is a difference between true|false and the strings
   * "true" or "false"
    */
     //Declare 3 booleans variables
     $bool1 = true; //valid
     $bool2 = false; //valid
     $bool3 = "true"; //invalid

     /*
       When booleans are displayed (printed to screen), PHP will convert
       a TRUE value to a 1 and NOTHING is displayed for a FALSE value
       */

       echo 'Boolean 1:' . $bool1;
       echo '<br>'; 

       echo 'Boolean 2:' . $bool1;
       echo '<br>';

       echo 'Boolean 3:' . $bool1;
       echo '<br>';

       /*

           Also, you could consider using the is_bool function to test for a
           boolean value, for example...
        */
        echo 'is_bool:' . is_bool($bool3);
        echo '<hr>';

        /* Working with nulls;
            PHP has 2 function for testing true or false
            ISSET --> will test for 0, false, ""(empty testing)
            EMPTY -> will test for 0, false, "", NULL
            
            
            EMPTY is better when checking form inputs
        */

        //Declare some variables for testing ISSET vs. EMPTY
        $var1 = 3;
        $var2 = "cat";
        $var3 = NULL;
        //notice no $var4
        $var5 = "";

        echo "<h1>TEST above variables using ISSET</h1>";

        //1. TEST above variables using ISSET
        echo 'is $var1 set;' . isset($var1); // true - so 1 is printed
        echo '<br>';
               
        echo 'is $var2 set;' . isset($var2); //true - so 1 is printed
        echo '<br>';

        echo 'is $var3 set;' . isset($var3); //false - so NOTHING is printed
        echo '<br>';

        echo 'is $var4 set;' . isset($var4); //false (does not exist) - so nothing is existed
        echo '<br>';

        echo 'is $var5 set;' . isset($var5); //true (empty string) - so nothing is printed
        echo '<br>';
        //2. TEST above variables using EMPTY
        echo "<h1>TEST above variables using EMPTY</h1>";

        echo 'is $var1 empty:' . empty($var1); //false (it's = 3) - so nothing is printed
        echo '<br>';
        echo 'is $var2 set;' . isset($var2); //false (it's cat) - so nothing is printed
        echo '<br>';
        echo 'is $var3 set;' . isset($var3); // true (NULL) - so 1 is printed
        echo '<br>';
        echo 'is $var4 set;' . isset($var4); // true (does not exist) 
        echo '<br>';
        echo 'is $var5 set;' . isset($var5); //
        echo '<br>';
        
           ?>
</body>
</html>