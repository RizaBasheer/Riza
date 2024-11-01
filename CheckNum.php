<!DOCTYPE html>
<html>
    <head>
        <title>Number Type Checker</title>
        <style>
            body {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <h2>Check if a Number is Perfect, Abundant or Deficient</h2> 
        <form method="post">
            <label>Enter a number: </label>
            <input type="number" id="num" name="num" required>
            <button type="submit">Check</button>
        </form>
        
        <?php
        function checkNumber($num){
            $sum = 0;
            for($i=1; $i<= $num/2 ; $i++){
                if($num % $i == 0){
                    $sum += $i;
                }
            }
            if($sum == $num){
                return "Perfect";
            }elseif($sum > $num){
                return "Abundant";
            }else{
                return "Deficient";
            }
        }

        if($_POST){
            $num = $_POST['num'];
            $result = checkNumber($num);
            echo "<p>The number $num is <strong> $result </strong></p>";
        }
        ?>
    </body>
</html>