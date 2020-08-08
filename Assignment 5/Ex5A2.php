<?php

$hname = $_GET['hname'];

$db = pg_connect("host=localhost dbname=Slips user=hp password= ");
if($db)
{
$query = "select * from doc where dno in(select dno from doc_hosp where hno in(select hno from hosp where
hname='$hname'))";
$resultSet = pg_query($db,$query);
echo "<h1>Doctor from hospital $hname are ...</h1>";
echo "<table style=height:400;width:400; border=3>";
echo "<tr><th>Dno</th>";
echo "<th>Name</th>";
echo "<th>Address</th>";
echo "<th>City</th></tr>";
while(($row = pg_fetch_array($resultSet)) != null)
{
echo "<tr><td>".$row['dno']."</td>";
echo "<td>".$row['dname']."</td>";
echo "<td>".$row['addr']."</td>";
echo "<td>".$row['city']."</td></tr>";
}
echo "</table>";
}

?>