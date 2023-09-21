<html> <head> 
<title>Accessing Cookies with PHP</title> </head>
<body> 
<?php
if (isset($_COOKIE["age"])) {
	echo "Hello,".$_COOKIE["age"]."Welcome Back...";
}
else
{
	echo "Hello New User";
}
?> 
</body> </html>