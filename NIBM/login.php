<?php 
if(isset($_POST["btnLogin"]))
{
  //Accept HTML Form Data
  $un = $_POST["txtUN"];
  $pw = $_POST["txtxPW"];
  $type = $_POST["cmbType"];

  //Create a connection to MySql Server
$con = mysqli_connect("localhost","user","Ra1shi**");

//Select DB
mysqli_select_db($con,"empdb");

//Perform SQL
$sql = "SELECT * FROM  tbluser WHERE uname='$un' AND pword='$pw' AND type='$type'";
$result = mysqli_query($con,$sql);

if($row = mysqli_fetch_array($result))
{
  session_start();
  $_SESSION['uname'] = $un;
  $_SESSION['utype'] = $type;
  //Redirect to home.php
  header("Location:home.php");
}
else
{
  echo "<p style=color:red;>Invalid Username or Password </p>";
}
//Disconnect from server
 mysqli_close($con);

}
?>


<html>
<head>
	<title>Login Form </title>
</head>
<body>
  <h1>Login Form</h1>
 
    <form name="frmLogin" method="post" action="#">
  	User Name :<input type="text" name="txtUN" ><br>
  	Password  :<input type="text" name="txtPW" ><br>
    User Type :<select name="cmbType" id="cmbType">
             <option  value="Admin">Admin </option>
             <option value="User">User</option> 
             </select><br>
             </form>

    <input type="submit" name="btnLogin" value="Login" >
</body>
</html>