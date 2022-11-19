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
        // Logical operators
        $x = 10;
        $y = 20;

        // or
        if ($x == $y or 1 == 1) {
            echo 'True';
            echo '<br>';
        }
        
        // and
        if ($x == $y and 1 == 1) {
            echo 'True';
            echo '<br>';
        }

        // or logical operator
        if ($x == $y || 1 == 1) {
            echo 'True';
            echo '<br>';
        }

        // and logical operator
        if ($x != $y && 1 != 2) {
            echo 'True';
            echo '<br>';
        }

        // xor (xclusive or, only runs if any of the conditions are true, not both)
        if ($x != $y xor 1 == 2) {
            echo 'True';
            echo '<br>';
        }
    ?>
</body>
</html>