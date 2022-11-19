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
        // operators

        // Addition
        echo "<strong>Addition</strong><br>";
        echo "10+5=";
        echo 10+5;
        
        // substraction
        echo "<br><strong>Substraction</strong><br>";
        echo "10-5=";
        echo 10-5;
        
        // division
        echo "<br><strong>Division</strong><br>";
        echo "10/5=";
        echo 10/5;
        
        // multiplication
        echo "<br><strong>Multiplication</strong><br>";
        echo "10*5=";
        echo 10*5;

        // modulus
        echo "<br><strong>Modulus</strong><br>";
        echo "10%5=";
        echo 10%5;
        
        // power
        echo "<br><strong>Power</strong><br>";
        echo "10<sup>5</sup>=";
        echo 10**5;
        
        // increment operator
        $x = 10;
        echo "<br><strong>Increment</strong><br>";
        echo 'if x = 10, x++ = ';
        $x++;
        echo $x;
        echo "<br><strong>Increment by a value</strong><br>";
        $y = 27;
        echo 'if y = '.$y.', y += 9 is equal to ';
        $y+=9;
        echo $y;

        // Decrement operator
        $x = 10;
        echo "<br><strong>Decrement</strong><br>";
        echo 'if x = 10, x-- = ';
        $x--;
        echo $x;
        echo "<br><strong>Decrement by a value</strong><br>";
        $y = 27;
        echo 'if y = '.$y.', y -= 9 is equal to ';
        $y-=9;
        echo $y;

    ?>
</body>
</html>