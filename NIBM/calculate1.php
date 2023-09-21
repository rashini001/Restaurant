<?php

 
	$st_id = $_POST['txtId'];
	$science = $_POST['txtScience'];
	$maths = $_POST['txtMaths'];
	$english = $_POST['txtEnglish'];

	$sum = $science+$maths+$english;
	$avg = $sum/3;
	$grade = "";

	 if($avg<40)
           {
               $grade = "F";
           }
           else if($avg<60)
           {
           	   $grade = "S";
           }
           else if($avg<80)
           {
           	   $grade = "C";
           }
           else if($avg<=100)
           {
           	   $grade = "D";
           }

           echo "Student Id : $st_id <br>";
           echo "Science Marks : $science <br> ";
           echo "Maths Marks : $maths <br> ";
           echo "English Marks : $english <br> ";
           echo "Average : $avg <br>";
           echo "Grade : $grade <br>";




?>