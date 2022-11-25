<?php
    session_start();
    // starting session in this page
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contacts</title>
</head>
<body>
    <h1>CONTACTS</h1>
    <?php
        include './nav-links.php';
        // include nav links


        echo 'username: ';
        echo '<strong><em>';
        // since session was started at the top of the document
        // it can be accessed in the contact page 
        // despite it was created in the home page
        echo $_SESSION['username'];
        echo '</strong></em>';
    ?>
</body>
</html>