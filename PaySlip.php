<?php
if ($_POST) {
    $name = $_POST['name'];
    $basic = $_POST['basic'];
    $desig = $_POST['desig'];  // Changed from $_GET to $_POST
    $CA = 0;
    $EA = 0;
    $HRA = ($basic * 25) / 100;
    $inc_tax = 0;

    // Determine the Allowances based on Designation
    if ($desig == "Manager") {
        $CA = 1000;
        $EA = 500;
    } elseif ($desig == "Supervisor") {
        $CA = 750;
        $EA = 200;
    } elseif ($desig == "Clerk") {
        $CA = 500;
        $EA = 100;
    } elseif ($desig == "peon") {
        $CA = 250;
    }

    // Calculate Gross Salary
    $gross = $basic + $HRA + $CA + $EA;

    // Calculate Income Tax
    if ($gross <= 2500) {
        $inc_tax = 0;
    } elseif ($gross > 2500 && $gross <= 4000) {
        $inc_tax = (3 / 100) * $gross;
    } elseif ($gross > 4000 && $gross <= 5000) {
        $inc_tax = (5 / 100) * $gross;
    } else {
        $inc_tax = (8 / 100) * $gross;
    }

    // Calculate Net Salary
    $net = $gross - $inc_tax;

    // Output the Payslip in Table format, center-aligned
    echo "<br><h1 style='text-align: center;'>Pay Slip</h1>";
    echo "<table border='1' style='border-collapse: collapse; width: 50%; margin: 0 auto;'>";
    echo "<tr><th colspan='2' style='text-align: center;'>Payslip Details</th></tr>";
    echo "<tr><td><strong>Name</strong></td><td>" . $name . "</td></tr>";
    echo "<tr><td><strong>Designation</strong></td><td>" . $desig . "</td></tr>";
    echo "<tr><td><strong>Basic Pay</strong></td><td>" . $basic . "</td></tr>";
    echo "<tr><td><strong>Conveyance Allowance</strong></td><td>" . $CA . "</td></tr>";
    echo "<tr><td><strong>Extra Allowance</strong></td><td>" . $EA . "</td></tr>";
    echo "<tr><td><strong>HRA (Housing Rent Allowance)</strong></td><td>" . $HRA . "</td></tr>";
    echo "<tr><td><strong>Gross Salary</strong></td><td>" . $gross . "</td></tr>";
    echo "<tr><td><strong>Income Tax</strong></td><td>" . $inc_tax . "</td></tr>";
    echo "<tr><td><strong>Net Salary</strong></td><td>" . $net . "</td></tr>";
    echo "</table>";
}
?>
