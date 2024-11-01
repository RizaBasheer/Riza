<?php
if ($_POST) {
    $name = $_POST["name"];
    $age = $_POST["age"];
    $dob = $_POST["dob"];
    $fname = $_POST["fname"];
    $mname = $_POST["mname"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $hobby = $_POST["hobby"];
    $qualification = $_POST["qualification"];
    $experience = $_POST["experience"];

    echo "<table border='1' align='center' height='500' width='450'><tr><td>";
    echo "<h2><center>Bio Data</center></h2>";
    echo "<p><strong>Name: </strong> $name </p>";
    echo "<p><strong>Age: </strong> $age </p>";
    echo "<p><strong>Date Of Birth: </strong> $dob </p>";
    echo "<p><strong>Father's Name: </strong> $fname </p>";
    echo "<p><strong>Mother's Name: </strong> $mname </p>";
    echo "<p><strong>Email: </strong> $email </p>";
    echo "<p><strong>Address: </strong> $address </p>";
    echo "<p><strong>Hobby: </strong> $hobby </p>";
    echo "<p><strong>Qualifications: </strong> $qualification </p>";
    echo "<p><strong>Experience: </strong> $experience </p>";
    echo "</td></tr></table>";
} else {
    echo "<p>Please fill out the form first. </p>";
}
?>
