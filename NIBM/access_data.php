<?php

//Create aconnection to MySql Server
$con = mysqli_connect("localhost","user","Ra1shi**");

//Select DB
mysqli_select_db($con,"empdb");

//Perform SQL
$sql = "SELECT*FROM tblemployee";
$result = mysqli_query($con,$sql);

//Print Results
echo "<h1>Emp Details</h1>";
echo "<table border=1 width=500px>";
echo "<tr bgcolor = brown>";
echo "<th>Emp Name</th>";
echo "<th>Emp No</th>";
echo "<th>Emp Age</th>";
echo "<th>Emp Address</th>";
echo "</tr>";

while ($row = mysqli_fetch_array($result)) 
{
	echo "<tr>";
 	echo "<td> $row[0] </td>";
 	echo "<td> $row[1] </td>";
 	echo "<td> $row[2] </td>";
 	echo "<td> $row[3] </td>";
 	echo "</tr>";
 }
 echo "</table>";

 //Disconnect from server
 mysqli_close($con);

?>