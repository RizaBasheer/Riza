<?php
// Check if the form is submitted
if ($_POST) {
    // Get form data
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
    $gender = $_POST["gender"]; // Get the gender from the form

    // Display the entered data
    echo "<h2 style='text-align: center;'>Bio Data</h2>";  // Center the Bio Data header
    echo "<table border='1' align='center' style='border-collapse: collapse; width: 50%;'>"; // Apply border-collapse and set table width
    echo "<tr><th colspan='2' style='text-align: center;'>Personal Details</th></tr>";
    echo "<tr><td><strong>Name</strong></td><td>$name</td></tr>";
    echo "<tr><td><strong>Age</strong></td><td>$age</td></tr>";
    echo "<tr><td><strong>Gender</strong></td><td>$gender</td></tr>";
    echo "<tr><td><strong>Date of Birth</strong></td><td>$dob</td></tr>";
    echo "<tr><td><strong>Father's Name</strong></td><td>$fname</td></tr>";
    echo "<tr><td><strong>Mother's Name</strong></td><td>$mname</td></tr>";
    echo "<tr><td><strong>Email</strong></td><td>$email</td></tr>";
    echo "<tr><td><strong>Address</strong></td><td>$address</td></tr>";
    echo "<tr><td><strong>Hobby</strong></td><td>$hobby</td></tr>";
    echo "<tr><td><strong>Qualifications</strong></td><td>$qualification</td></tr>";
    echo "<tr><td><strong>Experience</strong></td><td>$experience</td></tr>";
    echo "</table>";
} else {
    echo "<p>Please fill out the form first.</p>";
}
?>
