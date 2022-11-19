<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Review</title>
</head>
<body>

    <form action="index.php" method="get">
        <input type="number" name="num1" placeholder="number 1" required>
        <input type="number" name="num2" placeholder="number 2" required>
        <br>
        <select name="operation">
            <option value="add">add</option>
            <option value="sub">substract</option>
            <option value="mul">multiply</option>
            <option value="div">divide</option>
        </select>
        <button type="submit" name="submit">calculate</button>
    </form>

    <p> Answer: 
        <strong>
            <?php
                $x = 0;
                if (isset($_GET['submit'])) {
                    # code...
                    echo $_GET['num1'];
                    switch ($_GET['operation']) {

                        case 'sub':
                            # code...
                            // substract numbers
                            $x = $_GET['num1'] - $_GET['num2'];
                            echo '-';
                            break;
                            
                        case 'mul':
                            # code...
                            // multiply numbers
                            $x = $_GET['num1'] * $_GET['num2'];
                            echo '*';
                            break;
                            
                        case 'div':
                            # code...
                            // divide numbers
                            $x = $_GET['num1'] / $_GET['num2'];
                            echo '/';
                            break;
                            
                        default:
                            # code...
                            // default action, add numbers
                            $x = $_GET['num1'] + $_GET['num2'];
                            echo '+';
                            break;
                    }

                    echo $_GET['num2'].' = '.$x;
                }
            ?>
        </strong>
    </p>
</body>
</html>