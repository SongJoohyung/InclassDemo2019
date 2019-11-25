<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Multidimensional Arrays</title>
</head>
<body>
    <h1>Some North American States, Canadian Provinces, and Mexico Territories</h1>

    <?php 
        // 1. Create some Mexico Territories
        $mexico = array(
            'YU'=>'Yucatan',
            'BC'=>'Baja California',
            'OA'=>'Oaxaca'
        );

        //2.  Create some US States 
        $us = array(
            'MD'=>'Maryland',
            'IL'=>'Illinois',
            'IO'=>'Iowa'
        );

        //3.  Create some Canadian Provinces
        $canada = array(
            'NB'=>'New Brunswick',
            'NS'=>'Nova Scotia',
            'PE'=>'Prince Edward Island'
        );

        //4.  Combine the 3 arrays into one final array
        $n_america = array(
            'Mexico'=>$mexico,
            'United States'=>$us,
            'Canada'=>$canada
        );

        //debug
        //var_dump($n_america);

        //5.  Loop and display the data from the final array
        foreach($n_america as $country=>$list){
            //Print the country names
            echo "<h3>$country</h3>";

            //start a unordered list for each item in the second dimension
            echo "<ul>";
        
            //loop the $list array to create an list item for each 
            foreach($list as $k=>$v){
                echo "<li>$k - $v</li>";
            }

            //finish the list
            echo "</ul>";
        }

    ?>
</body>
</html>