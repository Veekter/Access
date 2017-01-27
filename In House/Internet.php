<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Internet Access</title>
</head>

<body>

<?php echo $_POST[ 'value'];
?>
<form action="Internet.php" method ="post" action="">
<br />
<fieldset
 <legend>Internet:</legend>
Internet Mbs: <input type = "number" name = "internet" />
<input type = "submit" />
</fieldset>
</form>

<?php
function internet(){
$var1 = $_POST["internet"];
if (!empty($var1))
{
   
     if  ($var1 < 1){
    echo("The Minimum is 1Mb/s");
	 }
	else if ($var1 < 5){
	echo(" Your monthly subscription fees is: ");
	$var2= $var1* 17500;
	echo("Ksh.");
	echo($var2 . ".");
	}
	else if ($var1 < 10){
	echo(" Your monthly subscription fees is: ");
	$var3= $var1 * 16000;
	echo("Ksh.");
	echo($var3 . ".");
	}
	else if ($var1 < 16){
	echo("Your monthly subscription fees is: ");
	$var4= $var1 * 15000;
	echo("Ksh.");
	echo($var4 . ".");
	}
	else if ($var1 > 15){
	echo " Bespoke price.";
	}
	else
	echo " Invalid entry!";
}
if($var1== 1){
echo("You have will receive 10 mailboxes.");
    }
	else if ($var1 ==2){
	echo("You will receive 20 mailboxes.");
	}
    else if ($var1==3 | $var1==4 | $var1==5 | $var1==6 | $var1==7 | $var1==8 | $var1==9){
		echo("You will receive 30 mailboxes.");
	}
	else if ($var1==10){
	echo("You will recieve 70 mailboxes.");
	}
	else if ($var1>=10 && $var1<=15){
	echo("You will receive 70 mailboxes.");
	}
	else if($var1 >= 16){
		echo(" ");
}
}
internet();
	?>
