<?php 
$data = array(3,6,9,2,7);

//print array data
print_r($data);
echo "<br>";

for ($i=0; $i < 5; $i++) 
{ 
	echo $data[$i].",";
}
echo "<br>";

//reverse order
for ($i=4; $i >= 0; $i--) 
{ 
	echo $data[$i].",";
}
echo "<br>";

//call sum
$sum = array_sum($data);
echo "Sum is $sum <br>";

//max
$max = max($data);
echo "Max is $max <br>";

?>