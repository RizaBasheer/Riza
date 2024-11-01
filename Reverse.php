<!DOCTYPE html>
<html>
    <head>
        <title>Reverse String</title>
        <style>
            body {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <h1>Reverse a String</h1>
        <form method="post">
            <label>Enter a string: </label>
            <input type="text" id="str" name="str" required>
            <button type="submit">Reverse</button>
        </form>
        
        <?php
        function reverseString($str){
            return strrev($str);
        }

        if($_POST){
            $str = $_POST['str'];
            $reversedstr = reverseString($str);
            echo "<p><strong>Reversed String: </strong>$reversedstr</p>";
        }
        ?>
    </body>
</html>