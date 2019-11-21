<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sorting Arrays</title>
</head>
<body>
    <h1>Sorting Arrays</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Rating</th>
                <th>Movie Title</th>
            </tr>
        </thead>
        <tbody>
            <tr>
              <td>
                <td colspan ="2">
                        <strong>Movies in Original Order</strong>
                </td>
              </td>
            </tr>
            <?php
            //Generate a list of Christmas Movies
            $movies = array(
                10=>'Chrismas Vacation',
                9=>'Elf',
                2=>'Home Alone',
                7=>'The Grinch',
                8=>'Miracle on 34 Street'
            );
            //var_dump($movies);
            //Display movies in their original order

            foreach($movies as $k=>$v) {
                echo "<tr><td>$k</td><td>$v</td></tr>";
            }
              
           ?>
           <tr>
           <td colspan="2">
                <strong>Movies sorted by the Title(assort)</strong>
           </td>
           </tr>
           <?php
            //2. sort movies by maintaining the original key
              assort($movies); //also -> sort descending using assort
              var_dump($movies);

              //redisplay the newly sorted movies in table
              foreach($movies as $k=>$v) {
                  echo "<tr><td>$k</td><td>$v</td></tr>";
              }
           ?>
           <tr>
           <td colspan="2">
           <strong>Movies Sorted by Original Key (Ksert)</strong>
           </td>
           </tr>
           <?php
           //3. Sort the movies using ksort
           ksort($movies);
           //var_dump($movies);
           
           foreach($movies as $k=>$v) {
               echo "<tr><td>$k</td><td>$v</td></tr>";
           }
           ?>
           <tr>
           <td colspan="2">
           <strong>Movies sorted by Title(new Key using sort)</strong>
           </td>
           </tr>
           <?php
              sort($movies);
              //var_dump($movies);
              foreach($movies as $k=>$v){
               echo "<tr><td>$k</td><td>$v</td></tr>";
           }
            
            ?>
     </tbody>
    </table>
</body>
</html>