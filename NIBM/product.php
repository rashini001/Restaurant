<?php
if(isset($_POST['btnSave']))
{
	//Accept form data
	$pid = $_POST["txtPID"];
	$name = $_POST["txtName"];
	$price = $_POST["txtPrice"];
	$image_name = $_FILES['prodImg']["name"];

	//Save to database
	$con = mysqli_connect("localhost","user","Ra1shi**");

	//Select DB
	mysqli_select_db($con,"productdb");

	//Perform SQL
	$sql = "INSERT INTO tblproduct(pid,name,price,image)  VALUES ('$pid','$name','$price','$image_name')";
	$ret = mysqli_query($con,$sql);
	echo "No of records inserted: $ret <br>";

	//Disconnect from server
	 mysqli_close($con);

	 if($ret == 1)
	 {
	 	$uploadfile = "products/$image_name";
	 	move_uploaded_file($_FILES['prodImg']['tmp_name'],$uploadfile);
	 }


 
}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Products</title>
</head>
<body>
	 <h1>Add Products</h1>
    <form name="frmProducts" method="post" action="#" enctype="multipart/form-data">
    PID : <input type="text" name="txtPID"><br>
    Name : <input type="text" name="txtName" ><br>
    Price : <input type="number" name="txtPrice"><br>
    Image : <input type="file" name="prodImg"><br>
    <input type="submit" name="btnSave" value = "Save">
  </form>
</body>
</html>