<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>File Sharing</title>
</head>

<body>
<p><?php echo $_POST['value'];
?><br />
<form action= "Filesharing.php" method = "post" action="">
 <fieldset
 <legend>File Sharing:</legend>
<p>Enter the the number of users for our file sharing service:</p>
Users: <input type="number" name="input" /> <br>
<br>
<input type= "Submit"  />
</fieldset>
</form>
</body>
</html>
<?php
function files(){	
 $var1= $_POST["input"];
 if (!empty($var1)){
$var2= $var1 *430;
echo("Your monthly subscription fees is:  ");
echo('');
echo($var2);
echo('/='.'.');
echo('');
echo(" You receive additional ");
echo($var1);
echo("GB storage space.");
}
}
files();

?>