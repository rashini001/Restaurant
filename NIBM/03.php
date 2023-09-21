<?php
$sId = $_POST['txtID'];
$name = $_POST['txtName'];
$type = $_POST['select'];
$tAccess = $_POST['radio'];
$status = $_POST['check'];

$reg = 0.00;
$add = 0.00;

if($type == "Student")
{
	$reg = 50;
}
else if($type == "Staff")
{
	$reg = 80;
}
else if($type == "Life Time")
{
	$reg = 100;
}
if($tAccess == "lending")
{
	$add = 10;
}
$total = $reg+$add;

echo "St Id: $sId<br>";
echo "St Name: $name<br>";
echo "Type: $type<br>";
echo "Status: $status<br>";
echo "Access: $tAccess<br>";
echo "Total: $total<br>";




?>