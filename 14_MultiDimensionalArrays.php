<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Some North American States, Canadian Provinces, and Mexico Territories</h1>

    <?php
     $mexico = array(
         
         'YU'=>'Yucatan',
         'OA'=>'Oaxaca',
         'BC'=>'Baja California'
     );
     $us = array (
        'MD'=>'MaryLand',
        'MC'=>'Michigan',        
        'KS'=>'Kansas'
     );
     $canada = array (
        'PE'=>'PEI',
        'NS'=>'Nova Scotia',
        'NB'=>'New Brunswick'
     );
     $n_america = array (
        'Mexico' => $mexico,
        'United States' =>$us,
        'Canada'=>$canada
     );
     //debug
     //var_dump($n_america);

     //5. Loop and display the data from the final array
     foreach($n_america as $country=>$list) {
         //Print the country names
         echo "<h3>$country</h3>";

         //start a unordered list for each item in the second dimension
         echo "<ul>";
            
         //loop the $list array to create an list item for each
        foreach($list as $k=>$v) {
            echo "<li>$k - $v</li>";
        }
         //finish the list
         echo "</ul>";
     }     

     ?>
</body>
</html>