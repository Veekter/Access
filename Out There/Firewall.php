<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Fire wall</title>
</head>

<body>
<p><?php echo $_POST['value'];
?><br />
<form action= "Firewall.php" method = "post" action="">
<fieldset
 <legend>FireWall:</legend>
<p>Would you like FireWall Service?</p>
<input type = "radio" name="ans" value="yes"  />Yes<br />
<input type = "radio" name="ans"  value="no"  />No<br/>
</fieldset>
</form>
</body>
</html>
<?php
function Firewall(){
 $var1= $_POST["ans"];
 if (!empty($var1)){
if( $var1 == "yes"){
echo(" The amount payable is: ");
echo(" Ksh 10,500 per month.");}
else {
echo ("Please try our other services.");}
}
}

Firewall();

?>

