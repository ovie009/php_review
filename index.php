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
        // COOKIES
        // cokkies save information of the user on the browser
        setcookie('user', 'Prometheus', time() + 86400);
        // setcookie('cookie name', 'cookie value', 'time for the cookie to expire')

        // NOTES
        // setting the cookie time to negative would automatically destroy the cookie
        // the time function 'time()' give the current time
        // 86400 is the time addes in seconds to the current time
        // 86400 is equall to 1 day

        echo $_COOKIE['user'];

    ?>
</body>
</html>
