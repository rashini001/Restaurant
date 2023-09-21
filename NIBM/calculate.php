
	<?php
	$st_number = 001;
	$st_name = "Rashini";
	$science = 100;
	$maths = 86;
	$english = 79;

	 $sum = $science+$maths+$english;
	 $avg = $sum/3;
	 $color = "";

	 echo "Student Name is " .$st_name."<br>";
	 echo "Student Number is " .$st_number."<br>";

	    if($avg<40)
		{
           echo "Grade is F";
           $color = "red";
		}
		else if($avg<60)
		{
		   echo "Grade is S";
           $color = "brown";
		}
		else if($avg<80)
		{
		   echo "Grade is C";
           $color = "yellow";  
		}
		
		else if($avg<=100)
		{
		   echo "Grade is D";
           $color = "green";
		}

	?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Calculation</title>
</head>
<body bgcolor="<?php echo $color; ?>">
</body>
</html>