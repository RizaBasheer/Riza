<!DOCTYPE html>
<html>
    <head>
        <title>Fibonacci Number</title>
        <style>
            body {
                text-align: center;
            }
        </style>
    </head>
    <body>
    <h1>Fibonacci Series</h1>
        <form method="GET">
            <label>Enter the limit:</label>
            <input type="number" name="limit">
            <button type="submit">Show Fibonacci Series</button><br><br>
        </form>

        <?php
        if($_GET){
            $limit= $_GET['limit'];
            $f1 = 0;
            $f2 = 1;

            echo "<p>Fibonacci series up to $limit: </p>";
            echo "$a, $b";

            while($a + $b <= $limit){
                $f3 = $a + $b;
                echo ", $f3"
                $f1 = $f2;
                $f2 = $f3;
            }

        }
        ?>
    </body>
</html>
