<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Image Gallery</title>
</head>
<body>
    <?php
        /*
            Build an image gallery using the GLOB PHP function
            http://www.php.net.manual/en/funtion.glob.php
            GLOB: Find pathnames mathing a pattern
            GLOB_BRACE (flag) - Expands {a,b,c} to match 'a', 'b',  or 'c' 
        */


        $images = glob("images/cars/{*.jpg,*.png,*.gif}",GLOB_BRACE);
        natcasesort($images);
        //debug
        //var_dump($images);

        foreach($images as $image){
            //echo "<img src='$image' style='margin-right:1em'>";
            echo "<img src='$image' style='margin-right:1em' alt='". basename($image,".")."'>";
        }

        
    ?>
</body>
</html>