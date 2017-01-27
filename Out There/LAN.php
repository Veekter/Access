<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LAN Support</title>
</head>

<body>
<?php echo $_POST[ 'value'];
?>
<form action="LAN.php" method ="post" action=""><br />
<fieldset
 <legend>LAN:</legend>
 Number of Users : <input type = "number" name = "Users" />
<input type = "submit" />
</fieldset>
</form>
</body>
</html>

<?php
function lan(){
$var1 =  $_POST["Users"];
if (!empty($var1))
{
if ($var1< 1){
echo("Please try our other services.");
    }
    else if  ($var1 < 51){
	echo(" Your monthly subscription fees is: ");
	echo(" Ksh.40,000.");
echo("You receive additional 8 hours on site support.");
	}
	else if ($var1 < 101){
	echo(" Your monthly subscription fees is: ");
	echo( " Ksh.64,000.");
echo("You receive additional 16 hours on site support.");
	}
	else if ($var1 < 201){
	echo("Your monthly subscription fees is: ");
	echo( "Ksh.120,000.");
echo("You receive additional 32 hours on site support.");
	}
	else if ($var1 > 200){
	echo " Bespoke price.";
	}
	else
	echo " Invalid entry!";
}
}
lan();
?>