<!DOCTYPE html>
<html>
    <head>
        <title>Armstrong Number</title>
        <style>
            body {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <h1>Armstrong Number Checker</h1>
        <form method="get">
            <label>Enter the number:</label>
            <input type="number" name="num">
            <button type="submit">Check</button><br><br>
        </form>

        <?php 
        if ($_GET) {
            $num = $_GET['num'];
            $sum = 0;
            $n = strlen((string)$num);
            $number = $num; 

            while ($num != 0) {
                $rem = $num % 10;
                $sum += pow($rem, $n);
                $num = ($num / 10); 
            }

            if ($sum == $number) {
                echo "$number is an Armstrong number.";
            } else {
                echo "$number is not an Armstrong number.";
            }
        }
        ?>
    </body>
</html>
