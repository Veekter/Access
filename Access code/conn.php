<?php

/*$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "newaccess";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");*/
$con = mysqli_connect('localhost', 'root', '');
if(!$con){
 die('Could not connect: ' . mysqli_connect_error());
 }

$sel=mysqli_select_db($con,"newaccess");// or die("Could not select database");
if(!$sel){
 die("Error selecting database.");
 }
?>