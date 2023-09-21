<?php

//Accept Data
$eno = $_POST['txtNo'];
$name = $_POST['txtName'];
$age = $_POST['txtAge'];
$address=$_POST['txtAddress'];

//Create aconnection to MySql Server
$con = mysqli_connect("localhost","user","Ra1shi**");

//Select DB
mysqli_select_db($con,"empdb");

//Perform SQL
$sql = "INSERT INTO tblemployee(eno,name,age,address) VALUES ($eno,'$name',$age,'$address')";
$return = mysqli_query($con,$sql);
echo "No of records inserted: $return <br>";

//Disconnect from server
 mysqli_close($con);

?>