<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Working with quotes in PHP</title>
</head>
<body>
    <h1>Working with quotes in PHP</h1>
    <!-- regular static hyperlink using HTML -->
    <p>
           <a href="1_First.php">First Demo</a>
    </p>

    <?php
        //Dynamically create some hyperlinks
        //1. single quotes outside (double quotes inside)
        echo '<a href="1_First.php">First Demo</a>';
        echo "<br>";
        //2. double quotes outside (single Quotes inside)
        echo "<a href='1_First.php'>First Demo</a>";
        echo "<br>";
        //3. escaping the quotes
        echo "<a href=\"1_First.PHP\">First Demo</a>";
        echo "<br>";
        //4. escaping the single quotes
        echo '<a href=\'1_First.PHP\'>First Demo</a>';

        //5. Or using variables
        $page = "1_First.php";
        echo "<a href = '$page'>First Page</a>";
        echo "<br>";

        //reverse
        echo '<a href="$page">First Page</a>';
                
        echo "<br>";
        //fix
        echo '<a href ="' . $page . '">FirstPage</a>'; 
    ?>
</body>
</html>