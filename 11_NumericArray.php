<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NumericArray</title>
</head>
<body>
   <h1>Numeric Array</h1>
    <?php
     $names = array(1=>"Peter","Paul","Marry");
        
     //debug
     //var_dump($names);
        
     //print them out using foreach loop
     foreach($names as $k=>$v){
         //$name is the array object
         //$k is the index (key): 0,1,2
         //$v is the value: Peter, Paul, Mary

         echo "<string>$v</strong> is $k <br>";
     }

     echo "<hr>";
     //We can also return one single element from an array
     //Let's show the second item only
     echo "The second name in the array is $names[1]</b>";

     //================================================
     //Alternative way of creating numeric arrays
     //create an array of provinces
     $prov[1] = 'NB';
     $prov[2] = 'BC';
     $prov[3] = 'ED';
     $prov[4] = 'NF';
     //debug
     var_dump($prov);

     echo $prov[3];

     //echo $prov;
     
     //What about this one
     echo $prov[4]; //OFFSET ERROR
    ?>
</body>
</html>
