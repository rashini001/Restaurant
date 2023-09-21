<?php

$radius = 45;
$height = 30;
 function calVolume($radius , $height)
{
	$volume = 3.14*$radius*$radius*$height;
	echo "Volume is " .$volume."<br>";
}

function calArea($radius , $height)
{
	$area = 2*3.14*$radius*$height + 2*3.14*$radius*$radius;
	echo "Surface Area is" .$area. "<br";	
} 

calVolume($radius , $height);
calArea($radius , $height);

?>