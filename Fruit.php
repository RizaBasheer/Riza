<?php
if ($_POST['fruit']) {
    $Fruit = $_POST['fruit']; 
    echo "<h1 style='text-align: center;'>You selected: $Fruit</h1>";
} else {
    echo "<h1 style='text-align: center;'>No fruit selected. Please select a fruit.</h1>";
}
?>
