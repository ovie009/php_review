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

        // conditional statements
        $age = 35;
        echo 'John Doe is '.$age.'years old, <strong><em>John is ';

        if ($age < 13) {
            # code...
            echo 'a child';
        
        } else if ($age < 20) {
            # code...
            echo 'a teenager';
            
        } else if ($age < 30) {
            # code...
            echo 'in his 20\'s';
            
        } else if ($age < 40) {
            # code...
            echo 'in his 30\'s';
            
        } else if ($age < 50) {
            # code...
            echo 'in his 40\'s';
            
        } else if ($age < 60) {
            # code...
            echo 'in his 50\'s';
            
        } else if ($age < 70) {
            # code...
            echo 'in his 60\'s';
            
        } else {
            # code...
            echo 'very old';
        }

        echo '</em></strong>'
        

        
    ?>
</body>
</html>