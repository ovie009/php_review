<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Review</title>
</head>
<body>
    <!-- form with no action attribute -->
    <!-- which means the data would be submitted to the same page -->
    <form method="GET">
        <input type="text" name="user" id="" placeholder="your name">
        <button type="submit">SUBMIT</button>
    </form>
    <?php
        // variables

        // string
        $name = "John Doe";
        echo $name;

        // concantenation
        echo '<br>'; // new line
        echo $name.' is a handsome fellow';
        
        echo '<br>'; // new line
        $user =  $_GET["user"]; // get user variable submitted from input using GET method
        echo $user.' is a logged in'; // concantenate variable with text

    ?>
</body>
</html>
