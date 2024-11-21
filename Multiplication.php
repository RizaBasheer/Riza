<?php
    if(isset($_POST['number']) && isset($_POST['limit'])){
        $number = intval($_POST['number']);
        $limit = intval($_POST['limit']);  // Access 'limit' from POST data
        
        // Start the output and add table headers
        $output = "<h3>Multiplication Table for {$number}</h3>";
        $output = "<table border='1' cellpadding='10' cellspacing='0' style='width: 50%; margin: 20px auto; border-collapse: collapse; text-align: center;'>
                        <tr>
                            <th>Multiplication Result</th>
                        </tr>";

        // Loop from 1 to the provided limit
        for($i = 1; $i <= $limit; $i++){
            $result = $number * $i;
            $output = "<tr>
                            <td><center>{$i} x {$number} = {$result}</center></td>
                        </tr>";
        }

        
        $output = "</table>";
        echo $output;
    }
?>