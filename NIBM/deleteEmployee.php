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
    //Dissconnect from serever
    mysqli_close($con);
}

  ?>

  <?php

  if(isset($_POST["txtDel"]))
  {
    if($_POST['txtDel'] == "1")
{
//Accept Data
$eno = $_POST['txtNo'];


//Create aconnection to MySql Server
$con = mysqli_connect("localhost","user","Ra1shi**");

//Select DB
mysqli_select_db($con,"empdb");

//Perform SQL
$sql = "DELETE FROM tblemployee  WHERE eno=$eno";
echo $sql;
$return = mysqli_query($con,$sql);
echo "No of records deleted: $return <br>";

//Disconnect from server
 mysqli_close($con);
}
}

?>




<!DOCTYPE html>
<html>
<head>
	<title>Delete Employee </title>
</head>
<body>
  <h1>Employee Data Sheet</h1>

  <form name="frmSearch" method="post" action="#">
    Enter Emp No : <input type="text" name="txtSK" >
    <input type="submit" name="btnSearch" value="Search"><br><hr>
  </form>
 
    <form name="frmEmployee" id="frmEmp" method="post" action="#">
  	Emp No : <input type="text" name="txtNo" value="<?php echo $eid; ?>" readonly ><br>
  	Name : <input type="text" name="txtName" size="30" value="<?php echo $n; ?>"><br>
    Age : <input type="number" name="txtAge" value="<?php echo $a; ?>"><br>
    Address : <textarea cols="20" rows="4" name="txtAddress"><?php echo $ad; ?></textarea><br>

    
    <input type="button" name="btnDelete" value="Delete" onclick="getConfirmation();" >
    <input type="reset" name="btnreset" value="Reset">
    <input type="hidden" name="txtDel" id="txtDel" value="0">
  </form>
  <script type="text/javascript">
    function getConfirmation()
    {
      var ret = confirm("Are you sure to delete this record?");
      if(ret == true)
      {
        document.getElementById('txtDel').value = "1";
        document.getElementById('frmEmp').submit();
      }
    }
  </script>

    
</body>
</html>

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