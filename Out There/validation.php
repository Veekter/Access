<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (!empty($_POST["name"])){
    
   } else {
     $nameErr = "Name is required"; 
   }
  
   if (!empty($_POST["email"])){
     
   } else {
   $emailErr = "E-mail is required";  
   }
    
   if (!empty($_POST["number"])){
    
   } else {
    $phoneErr = "Phone number is required";  
   }
   if (!empty($_POST["password"])){
     $emailErr = "Password is required";
   } else {
     
   }
}
 
/* if (isset($_POST["hosting"])) || if (isset($_POST["hosting"])) || if (isset($_POST["hosting"])) || if (isset($_POST["hosting"])) || if (isset($_POST["hosting"])) || if (isset($_POST["hosting"])) || if (isset($_POST["hosting"])) || if (isset($_POST["hosting"])) */

function mailing(){
	 global $mail;global $msg; global $varsum; global $name; global $email; global $phone; global $var1; global $hst; global $one; global $wall; global $wif; global $ln; global $fil;global $serv; global $usr;
	
	if(isset($_POST["internet"])){
		echo"Internet: ". $var1. "\n";}
	if (isset($_POST["hosting"])){
		echo"Web Hosting: " .$hst. "\n";}  
	if (isset($_POST["boxes"])){
		echo"hosted E-mail: " .$mail. "\n";}
	if (isset($_POST["one"])){
		echo"Half E1 or E1: " .$one. "\n";}	
	if (isset($_POST["wall"])){
		echo"Firewall: " .$wall. "\n";}
	if (isset($_POST["wifi"])){
		echo"Wifi: " .$wif. "\n";}	
	if (isset($_POST["Users"])){
		echo"LAN: " .$ln. "\n";}
	if (isset($_POST["input"])){
		echo"File Sharing: " .$fil. "\n";}
	if (isset($_POST["servers"])){
		echo"Back-up Servers: " .$serv. "\n";}
	if (isset($_POST["user"])){
		echo"User Back-up: " .$usr. "\n";}	}


 $var_mail= "mailing";					
	

?>
</body>
</html>