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
            <input type="number" name="limit" required><br><br>
            <button type="submit">Show Fibonacci Series</button><br><br>
        </form>

        <?php
        if($_GET){
            $limit= $_GET['limit'];
            $f1 = 0;
            $f2 = 1;

            echo "<p>Fibonacci series up to $limit: </p>";
            echo "$f1, $f2";

            while($f1 + $f2 <= $limit){
                $f3 = $f1 + $f2;
                echo ", $f3";
                $f1 = $f2;
                $f2 = $f3;
            }

        }
        ?>
    </body>
</html>
