<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>$_SERVER superglobal print out</title>
</head>
<body>
    <h1>Display all settings for the $_SERVER superglobal</h1>
    <?php
    //Remeber back in demo 2_Predefined.php, we printed this manually, for example
    echo $_SERVER['SERVER_SOFTWARE'];


    //Since the $_SERVER is an array we can use var_dump on it,like this
    //var_dump($_SERVER);
    //Remember you cannot echo any arrays, only single element
    //echo $_SERVER;

    //Let's loop the server array and display all items in an unordered list

    //start the list
    echo"<ul>";
    //Loop
    foreach($_SERVER as $k=>$v) {
        echo "<li>\$_SERVER['$k']: $v</li>";
    }
    //complete the list
    echo "</ul>"
    ?>
</body>
</html>