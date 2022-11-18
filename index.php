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
        echo '<em>'.$text.'</em>';
        echo ' is of datatype string<br>';
        
        // integer
        $num = 78;
        echo '<em>'.$num.'</em>';
        echo ' is of datatype integer<br>';
        
        // float
        $dec = 3.142;
        echo '<em>'.$dec.'</em>';
        echo ' is of datatype float<br>';
        
        // Boolean
        $oldAge = true;
        $youngAge = false;
        echo '<em>'.$oldAge.'</em>';
        echo ' is a Boolean datatype<br>';

        // array
        $students = array("John Doe", "Jane Doe", "Jack Doe");
        echo '<strong>Arrays</strong><br><em>';
        print_r($students);
        echo '</em> Parent Array<br>';
        echo '<em>'.$students[1].'</em>';
        echo ' is an array element';
    ?>
</body>
</html>