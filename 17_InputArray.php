<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <?php
        //check if we have something posted (form is using mehtod="post)
        if($_POST){
                //we have something posted, get the values from inputs (hiding the form)
                //var_dump($_POST);
                //Let's store the input value in variables
                $firstname = $_POST['firstname'];
                $lastname = $_POST['lastname'];
                $email = $_POST['email'];

                echo "<table border='1'>";
                echo "<tr><th>Field</th><th>Value</th></tr>";
                echo "<tr><th>First Name</th><th>$firstname</th></tr>";
                echo "<tr><th>Last Name</th><th>$lastname</th></tr>";
                echo "<tr><th>Email</th><th>$email</th></tr>";

                echo "<h2><a href='17_InputArray.php'>Try again</h2>";
        } else {
            //Not a post - show the form instead
    ?>
    <h1>Please fill out the form below:</h1>
    <form action="17_InputArray.php" method="post">
    First Name: <input type="text" name="firstname" id="firstname"><br>
    Last Name: <input type="text" name="lastname" id="lastname"><br>
    Email : <input type="text" name="email" id="email"><br>


    <input type="submit" value="Send">

    </form>
    <?php
        }
    ?>
</body>
</html>