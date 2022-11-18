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

        // predefined functions
        $text = "Lorem ipsum dolor sit amet.";
        echo 'text: '.$text;
        echo '<br>';
        echo 'string length: '.strlen($text); // calculate string length
        echo '<br>';
        echo 'string word count: '.str_word_count($text); // calculate string length
        echo '<br>';

        // user defined function
        // basic function to multiply any number by 1000
        function multiplyByOneThousand($num) {
            return $num * 1000;
        }

        echo multiplyByOneThousand(35);

    ?>
</body>
</html>
