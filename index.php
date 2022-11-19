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
        $age = 10;
        echo 'John Doe is '.$age.'years old, <strong><em>John is ';

        switch ($age) {
            case $age < 13:
                # code...
                echo 'a child';
                break;
                
                case $age < 20:
                # code...
                echo 'a teenager';
                break;
                
                case $age < 30:
                # code...
                echo 'in his 20\'s';
                break;
            
            case $age < 40:
                # code...
                echo 'in his 30\'s';
                break;
            
            case $age < 50:
                # code...
                echo 'in his 40\'s';
                break;
            
            case $age < 60:
                # code...
                echo 'in his 50\'s';
                break;
            
            case $age < 70:
                # code...
                echo 'in his 60\'s';
                break;
            
            default:
                # code...
                echo 'very old';
                break;
        }
            
        echo '</em></strong>'
        

        
    ?>
</body>
</html>