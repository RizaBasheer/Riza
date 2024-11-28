<?php
$acno = $_GET['acno'];
$amt = $_GET['amt'];
$trn = $_GET['type'];
$db = pg_connect("host=localhost port=5433 dbname=postgres user=postgres password=devagiri");
if($trn=='d')
{
$rs = pg_query($db, "update bank set balance = balance+$amt where accno='$acno' ");
echo "<h1 align = center>";
echo "Amount deposited successfully ...";
$rs=pg_query($db,"select * from bank where accno='$acno' ");
echo "<table border=2 align = center width = 30%>";
while($row = pg_fetch_row($rs))
{
echo "<tr><td>Account Number</td><td>".$row[0]."</td></tr>";
echo "<tr><td>Customer Name</td><td>".$row[1]."</td></tr>";
echo "<tr><td>Balance Amount</td><td>".$row[2]."</td></tr>";
}
echo "</table>";
}
if($trn=='w')
{
$rs = pg_query($db, "update bank set balance = balance-$amt where accno='$acno' ");
echo "<h1 align = center>";
echo "Amount withdrawed successfully ...";
$rs=pg_query($db,"select * from bank where accno='$acno' ");
echo "<table border=2 align = center width = 30%>";
while($row = pg_fetch_row($rs))
{
echo "<tr><td>Account Number</td><td>".$row[0]."</td></tr>";
echo "<tr><td>Customer Name</td><td>".$row[1]."</td></tr>";
echo "<tr><td>Balance Amount</td><td>".$row[2]."</td></tr>";
}
echo "</table>";
}
?>
