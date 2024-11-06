<?php
if (isset($_GET['num']) && is_numeric($_GET['num'])) {
    $number = $_GET['num'];
    echo "<h3>Multiplication Table for $number</h3>";
    echo "<ul>";
    for ($i = 1; $i <= 10; $i++) {
        $result = $number * $i;
        echo "<li>$number × $i = $result</li>";
    }
    echo "</ul>";
} else {
    echo "Please enter a valid number.";
}
?>
