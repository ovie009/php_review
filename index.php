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
        
        // ARRAYS
        $names = array('John', 'Jane', 'James', 'Jackson');

        // print entire array
        echo 'FULL ARRAY ==> ';
        print_r($names);
        echo '<br>';
        
        // first element of array
        echo 'first element in array => ';
        echo $names[0];
        echo '<br>';
        
        // Third element in array
        echo 'Third element in array => ';
        echo $names[2];
        echo '<br>';

        // reassign a new value to an element in the array
        $names[1] = 'Peter';
        // reprint array
        echo 'FULL ARRAY ==> ';
        print_r($names);
        echo '<br>';
        
        // assigning a new value to an element in the array does
        $names[100] = 'Matthew'; 
        // you can give the 100th element of the array a value 
        // even if the length of the array is just four elements
        // the value of elements between the 4th and 100th element would be empty
        // reprint array
        echo 'FULL ARRAY ==> ';
        print_r($names);
        echo '<br>';
        // not neccessarily have to happen serially
        
        
        ?>

</body>
</html>