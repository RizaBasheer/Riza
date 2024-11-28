<?php
$name = $_POST['uname'];
$password = $_POST['pswd'];
$db = pg_connect("host=localhost port=5433 dbname=postgres user=postgres password=devagiri");
$rs =pg_query($db, "SELECT * FROM login_page WHERE username = '$name' AND password = '$password'") ;

$count = pg_num_rows($rs);

if($count == 1){
    echo"<h1 align='center'>Welcome, $name !. You have logined succesfully.</h1>";
}else{
    echo"<h1 align='center'>Incorrect username or password.</h1>";
}
?>