<?php
$rn = $_GET['rollno'];
$db = pg_connect("host=localhost port=5433 dbname=postgres user=postgres password=devagiri");
echo "<h1 align = center>";
echo "Mark Sheet";
$rs=pg_query($db,"select * from student where rollno='$rn' ");
echo "<table border=2 align = center width = 30%>";
while($row = pg_fetch_row($rs))
{
echo "<tr><td>Roll Number</td><td>".$row[0]."</td></tr>";
echo "<tr><td>Student Name</td><td>".$row[1]."</td></tr>";
echo "<tr><td>Mark</td><td>".$row[2]."</td></tr>";
echo "<tr><td>Grade</td><td>".$row[3]."</td></tr>";
}
echo "</table>";
?>
