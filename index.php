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

        // SUPERGLOBALS
        
        // superglobals are varables already created by php

        // Examples
        /*
            $GLOBALS
            $_POST
            $_GET
            $_COOKIE
            $_SESSION
            $_SERVER
        */

        function weight($mass){
            $GLOBALS['accelerationDueToGravity'] = 9.81;
            return $mass * $GLOBALS['accelerationDueToGravity'];
        }

        // if John has a mass of 80kg
        $john = 80; 
        echo weight($john).'N';
        echo '<br>where acceleration due to gravity is '.$GLOBALS['accelerationDueToGravity'].'m/s';

    ?>
</body>
</html>
