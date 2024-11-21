<?php
$name = $_POST['name'];
$password = $_POST['pswd'];
$db = pg_connect();

if(!db){
    die("Database connection failed: " preg_last_error());
}

$query = "SELECT * FROM login WHERE username = $1 AND password = $2";
$result = pg_prepare($db,"login_query,$query");