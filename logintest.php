<?php
// Retrieve user input from POST request
$name = $_POST['uname'];
$password = $_POST['pswd'];

// Establish database connection
$db = pg_connect("host=localhost port=5433 dbname=postgres user=postgres password=devagiri");

if (!$db) {
    die("Database connection failed: " . pg_last_error());
}

// Prepare the SQL query with placeholders
$query = "SELECT * FROM login_page WHERE username = $1 AND password = $2";
$result = pg_prepare($db, "login_query", $query);

// Execute the query with user-provided values
$rs = pg_execute($db, "login_query", array($name, $password));

// Check if the query returns one row
$count = pg_num_rows($rs);

if ($count == 1) {
    echo "<h1 align='center'>Welcome, "$name. You have logined succesfully. "</h1>";
} else {
    echo "<h1 align='center'>Incorrect username or password.</h1>";
}

?>
