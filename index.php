<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Review</title>
</head>
<body>
    <?php
        // string
        $text = "coding is fun";
        echo '<strong><em>'.$text.'</em></strong>';
        echo ' is of datatype string<br>';
        
        // integer
        $num = 78;
        echo '<strong><em>'.$num.'</em></strong>';
        echo ' is of datatype integer<br>';
        
        // float
        $dec = 3.142;
        echo '<strong><em>'.$dec.'</em></strong>';
        echo ' is of datatype float<br>';
        
        // Boolean
        $oldAge = true;
        $youngAge = false;
        echo '<strong><em>'.$oldAge.'</em></strong>';
        echo ' is a Boolean datatype<br>';

        // array
        $students = array("John Doe", "Jane Doe", "Jack Doe");
        echo '<strong><h3>Arrays</h3></strong><strong><em>';
        print_r($students);
        echo '</em></strong> Parent Array<br>';
        echo '<strong><em>'.$students[1].'</em></strong>';
        echo ' is an array element';
    ?>
</body>
</html>