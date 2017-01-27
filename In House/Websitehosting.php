<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Website Hosting</title>
</head>

<body>
<?php echo $_POST['value'];?>
<form action= "Websitehosting.php" method = "post" action=""><br />
<fieldset
 <legend>Website Hosting:</legend>

<p> Would you like our web hosting services and domain name registration(.co.ke and .com)?</p>
<input type= "radio" name= "ans" value= "yes" /> Yes<br />
<input type= "radio" name= "ans" value= "no"   />No<br />
</fieldset>
</form>
</body>
</html>
<?php
function hosting(){
 $var1= $_POST["ans"];
 if (isset($_POST["ans"])){
if( $var1 == "yes"){
echo(" The amount payable is: ");
echo(" Ksh.2,000 per month, plus you recieve additional 750Mbs shared hosting space.");}
else {
echo ("Please try our other services.");
}
}
}
hosting();
?>
