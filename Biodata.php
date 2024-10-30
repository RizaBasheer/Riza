<?php
if($_POST){
    $name = $_POST["name"];
    $age = $_POST["age"];
    $email = $_POST["email"];
    $address = $_POST["address"];

    echo "<h2>Bio Data</h2>";
    echo "<p><bold>Name: </bold> $name </p>";
    echo "<p><bold>Age: </bold> $age </p>";
    echo "<p><bold>Email: </bold> $email </p>";
    echo "<p><bold>Address: </bold> $address </p>";
}else{
    echo "<p>Please fill out the form first. </p>";
}
?>
