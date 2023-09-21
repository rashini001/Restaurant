<?php
//Add page to the session
session_start();

//Get session Data
echo "User Name:".$_SESSION['uname']."<br>";
echo "User Type:".$_SESSION['utype']."<br>";


?>
