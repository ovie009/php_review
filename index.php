<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Review</title>
</head>
<body>
    <h1>
        HOME 
    </h1>
    <?php 
        include './nav-links.php';
        // SESSION
        // sessions save information of the server
        // these can be used to store more sensitive information
        // like username and password
        $_SESSION['username'] = 'johnDoe123';
        $_SESSION['accountType'] = 'admin';

        if ($_SESSION['accountType'] === 'admin') {
            echo 'This user is an Admin';
            echo '<br>username: <strong><em>'.$_SESSION['username'].'</em></strong>';
            # code...
        }

        // session ends when a user closes the browser
        // sessions remains running even if browser tabs are changed

        // for session to be accessed from multiple pages, a session needs to be running on a browser


    ?>
</body>
</html>
