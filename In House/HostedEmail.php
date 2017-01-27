<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hosted E-mail</title>
</head>

<body>
<?php echo $_POST[ 'value'];
?>
<form action="HostedEmail.php" method ="post" action=""><br /> 
<fieldset
 <legend>Hosted E-mail:</legend>
Number of Mailboxes : <input type = "number" name = "boxes" />
<input type = "submit" />
</fieldset>
</form>
</body>
</html>
<?php
function Email(){
$box = 20;
 $var1= $_POST["boxes"];
 if(!empty($var1)){
 if( $box >= $var1){
 echo (" No charge.");}
 else{
 echo("Your monthly subscription fee is:");
 $var2= $var1 - $box;
 $var3= $var2 * 370;
 echo("Ksh." . $var3);
 echo(".");
 }
}
}
return $var3;
 Email();
 ?>