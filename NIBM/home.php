<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
</head>
<body>
	<?php
	//Add home.php to the session
	session_start();
	echo "Welcome,".$_SESSION['uname']."<br>";

	if($_SESSION["utype"]=="admin")
	{
		echo "<a href = view_data.php> View Data</a><br>";
		echo "<a href = add_data.php> Add Data</a><br>";
		echo "<a href = logout.php> Logout</a><br>";
	}
	else if($_SESSION["utype"]=="user")
	{
		echo "<a href = view_data.php> View Data</a><br>";
		echo "<a href = logout.php> Logout</a><br>";
	}

	 ?>

</body>
</html>