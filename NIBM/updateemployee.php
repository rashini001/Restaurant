<?php

$eid = "";
$n = "";
$a = "";
$ad = "";

if(isset($_POST["txtSK"]))
{
    //Accept Search Key
    $sk = $_POST["txtSK"];

    //Create aconnection to MySql Server
    $con = mysqli_connect("localhost","user","Ra1shi**");

    //Select DB
    mysqli_select_db($con,"empdb");

    //Perform SQL
    $sql = "SELECT * FROM tblemployee WHERE eno=$sk";
    $result = mysqli_query($con,$sql);

    if($row = mysqli_fetch_array($result))
    {
       $eid = $row[0];
       $n = $row[1];
       $a = $row[2];
       $ad = $row[3];
    }
    else
    {
      echo "No Records Found...";
    }
}
 ?>




<!DOCTYPE html>
<html>
<head>
	<title>Update Employee </title>
</head>
<body>
  <h1>Employee Data Sheet</h1>

  <form name="frmSearch" method="post" action="#">
    Enter Emp No : <input type="text" name="txtSK" >
    <input type="submit" name="btnSearch" value="Search"><br><hr>
  </form>
 
    <form name="frmEmployee" method="post" action="update.php">
  	Emp No : <input type="text" name="txtNo" value="<?php echo $eid; ?>" readonly ><br>
  	Name : <input type="text" name="txtName" size="30" value="<?php echo $n; ?>"><br>
    Age : <input type="number" name="txtAge" value="<?php echo $a; ?>"><br>
    Address : <textarea cols="20" rows="4" name="txtAddress"><?php echo $ad; ?></textarea><br>

    <input type="submit" name="btnUpdate" value="Update" >
    <input type="reset" name="btnreset" value="Reset">

    
</body>
</html>