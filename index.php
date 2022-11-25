<!-- include functions -->
<?php include './functions/seventyFivePercent.php'; ?>
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

        // SCOPE

        // variables in the code is a global scope
        // while varibales in a function is a local scope

        $x = 15;
        // global varaible
        // can be used anywhere in the document


        function test(){
            $y = 27;
            // local variable
            // can be used only within the function
        }

        // runs fine
        echo $x;

        echo '<br>';

        // gives an error message
        echo $y;

    ?>
</body>
</html>
