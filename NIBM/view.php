<?php

//Create aconnection to MySql Server
$con = mysqli_connect("localhost","user","Ra1shi**");

//Select DB
mysqli_select_db($con,"productdb");

//Perform SQL
$sql = "SELECT*FROM tblproduct";
$result = mysqli_query($con,$sql);

//Print Results
echo "<h1>View Product Details</h1>";
echo "<table border=1 width=500px>";
echo "<tr bgcolor = brown>";
echo "<th>PID</th>";
echo "<th>Name</th>";
echo "<th>Price</th>";
echo "<th>Image</th>";
echo "</tr>";

while ($row = mysqli_fetch_array($result)) 
{
	echo "<tr>";
 	echo "<td> $row[0] </td>";
 	echo "<td> $row[1] </td>";
 	echo "<td> $row[2] </td>";
 	echo "<td><img src = 'products/$row[3]' width=200px height=200px></td>";
 	echo "</tr>";
 }
 echo "</table>";

 //Disconnect from server
 mysqli_close($con);

?>