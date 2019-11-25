<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Associative Arrays</title>
</head>
<body>
    <h1>Associative Arrays</h1>
    <?php
      //Use an associative array to assign ages to different people
      $names = array(
        "Peter" =>32,
        "Paul" =>30,
        "Mary" => 40,

      );

      var_dump($names);

      foreach($names as $k=>$v){
          echo "<strong>$k</strong> is $v <br>";
      }

      echo ' Paul is' . $names['Paul']. ' years old.';

      //Another 3 element associative array for provinces
      $prov = array(
          'NB' => 'New Brunswick',
          'NS' => 'Nova Scotia',
          'ED' => 'Edmoncton',
          'BC' => 'British Columbia',
          'NF' => 'New Foundland'
      );
      var_dump($prov);

      echo "<h2>Provinces</h2>";
                
      //1. Show the provinces in a dropdown list
      echo "<select name='' id=''>";
      foreach($prov as $k=>$v){
      echo "<option value= '$k'=>$v</option>";
      }  
      echo "</select>";

      //2. Show the provinces in a table
      echo "<h2>Provinces Table</h2>";
      echo "<table border ='1'>";
      echo "<thead><tr><th>Abbr.</th><th>Province</th></tr></thead>";
      foreach ($prov as $k=>$v) {
          echo "<tr><td>$k</td><td>$v</td></tr>";
      }
      

      echo"</table>";
    ?>
    <hr>
      <h2>Another Province Table</h2>
      <table>
          <thead>
              <tr>
              <td>Abbreviation</td>
              <td>Province Name</td>
              </tr>
          </thead>
              <?php
                  foreach ($prov as $k=>$v) {
              ?>
                 <tr>
                    <td><?php echo $v;?></td>
                    <td><?php echo $k;?></td>   
                 </tr>
              <?php
                  }
              ?>
      </table>

</body>
</html>