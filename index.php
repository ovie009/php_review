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
        // LOOPS

        // while loop
        $x = 1;
        echo '<strong>While loop</strong><br>';
        while ($x <= 5) {
            # code...
            echo 'loop stops when x is gereater than 5<br>';
            echo 'current x value is '.$x.'<br>';
            $x++;
        }
        
        // do while loop
        // do while loop runs once before checking if condition is true
        $y = 1;
        echo '<br><strong>Do While loop</strong><br>';
        do {
            # code...
            echo 'loop stops when y is gereater than 3<br>';
            echo 'current y value is '.$y.'<br>';
            $y++;
        } while ($y <= 3);
        
        // for loop
        echo '<br><strong>for loop</strong><br>';
        for ($i=0; $i <= 12; $i+=3) { 
            # code...
            echo 'loop stops when i is gereater than 12<br>';
            echo 'current i value is '.$i.'<br>';
        }
        
        // for each loop
        echo '<br><strong>foreach loop</strong><br>';
        $students = array('John', 'Mark', 'Peter', 'Paul');
        print_r($students);
        echo '<br>';
        foreach ($students as $student) {
            # code...
            echo $student.' is a disciple of Christ<br>';
        }
    ?>

</body>
</html>