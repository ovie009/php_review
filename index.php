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

        // includes
        $revenue = 89000;
        $profit = seventyFivePercent($revenue);
        echo 'Profit made from a revenue of '.$revenue.' is '.$profit;

    ?>
</body>
</html>
