<!DOCTYPE html>
<html>
<head>
    <title>Last Visited Page</title>
</head>
<body>

<h1>Last Visited Date-Time</h1>
<?php

if (isset($_COOKIE['last_visited'])) {
    $lastVisited = $_COOKIE['last_visited']; 
    echo "<h2>Welcome back! You last visited on: $lastVisited</h2>";
} else {
    echo "<h2>Welcome! This is your first visit.</h2>";
}

$currentDateTime = date("Y-m-d H:i:s");
setcookie("last_visited", $currentDateTime, time() + (30 * 24 * 60 * 60), "/"); 

?>
</body>
</html>
