<?php
if( $_GET["name"] || $_GET["age"] ) 
{ echo "Welcome ". $_GET['name']. "<br />"; 
echo "You are ". $_GET['age']. " years old."; 
} ?> 
<html> <body> 
<form action="#" method="GET"> Name: <input 
type="text" name="name" /> 
Age: <input type="text" name="age" /> 
<input type="submit" /> 
</form> </body> </html>
