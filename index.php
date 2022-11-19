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
        // hover date function to view possible parameters

        $seconds = date('s');
        echo 'seconds: ';
        echo $seconds;

        $minutes = date('i');
        echo '<br>minutes: ';
        echo $minutes;
        
        $hour = date('H');
        echo '<br>hour: ';
        echo $hour;
        
        $day = date('l');
        echo '<br>day: ';
        echo $day;

        $week = date('W');
        echo '<br>week: ';
        echo $week;

        $month = date('F');
        echo '<br>month: ';
        echo $month;

        $year = date('Y');
        echo '<br>year: ';
        echo $year;

        $todayDate = date('d-m-Y');
        echo '<br>todayDate: ';
        echo $todayDate;


    ?>

</body>
</html>