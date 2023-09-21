<?php

 function calVolume($radius,$height)
{
	$volume = 3.14*$radius*$radius*$height;
	return $volume;
}

function calArea($radius,$height)
{
	$area = 2*3.14*$radius*$height + 2*3.14*$radius*$radius;
	return $area;
} 

echo "Volume is " .calVolume(10,25)."<br>";
echo "Surface Area is" .calArea(10,25). "<br";

?>