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

     var_dump($n_america);
     
     echo json_encode($n_america);
     ?>
</body>
</html>