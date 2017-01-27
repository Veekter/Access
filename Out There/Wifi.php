<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Wifi Hotspots</title>
</head>

<body>
<p><?php echo $_POST['value'];
?><br />
<form action= "Wifi.php" method = "post" action="">
<fieldset
 <legend>Wifi:</legend>
<p>Enter the the number of Hotspots required for your wifi:
<input type = "number" name = "internet" />
<input type = "submit" />
</fieldset>
</form>
</p>

<?php
function Wifi(){
$var1 = $_POST["internet"];
if (!empty($var1)){
	if ($var1 == 0){
	echo ("The minimum is one hotspot.");	
	}
	else if ($var1== 1){
	echo("Your monthly subscription fees is:  ");
	echo("Ksh.25,000.");
	}
	else if ($var1== 2){
	echo("Your monthly subscription fees is:  ");
	echo("Ksh.47,500.");
	}
	else if( $var1== 3){
	echo("Your monthly subscription fees is:  ");
	echo("Ksh.65,000.");
	}
    else if ($var1== 4){
	echo("Your monthly subscription fees is:  ");
	echo("Ksh.85,000.");
	}
	else if ($var1== 5) {
	echo("Your monthly subscription fees is:  ");
	echo("Ksh.100,000.");
	}
	else if  ($var1 > 5){
	echo("Bespoke solution.");
	}
	else
	echo("Invalid entry");
}
}

Wifi();
	
	?>
	
	
	
	
	