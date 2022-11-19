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
        
        // comparison Operators
        $x = 100;
        $y = 80;

        echo 'x = '.$x;
        echo '<br>';
        echo 'y = '.$y;
        echo '<br>';
        
        if ($x === $y) {
            # code...
            echo 'x is equal to y';
        } else {
            # code...
            echo 'x is not equal to y';
        }

        echo '<br>';
        if ($x > $y) {
            # code...
            echo 'x is greater than y';
        } else {
            # code...
            echo 'x is not greater than y';
        }
        
        
        echo '<br>';
        $logic = true;
        echo "'logic' variable is equal to ".$logic; 
        echo '<br>';
        if($logic == 1){
            echo 'Boolean true is equal to 1 in value';
        }
        
        echo '<br>';
        if($logic === 1){
            echo 'Boolean true is equal in both value and datatype to 1';
        } else {
            echo 'Boolean true is not equal in either/both value or datatype to 1';

        }
        
        echo '<br>';
        if($logic !== 0){
            echo 'Boolean true is not equal to 0';
        }

        // == checks for equality in value, checks for equality in value and datatype


    ?>
</body>
</html>