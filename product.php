<?php
$code = $_GET['pcode'];
$name = $_GET['pname'];
$price = $_GET['uprice'];
$db = pg_connect("host=localhost port=5433 dbname=postgres user=postgres password=devagiri");
$st = pg_query($db, "insert into product1 values('$code','$name',$price)");
echo "<h1 align = center>";
echo "Product Succesfully Added...";
$rs = pg_query($db, "select * from product1");
echo "<table border=2 align = center width = 50%>";
echo "<tr><td> Product Code </td><td> Product Name </td><td> Unit Price</td></tr>";
while($row = pg_fetch_row($rs))
{
echo "<tr><td>".$row[0]."</td>";
echo "<td>".$row[1]."</td>";
echo "<td>".$row[2]."</td></tr>";
}
echo "</table>";
?>
