<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>E1</title>
</head>

<body>
<?php echo $_POST['value'];?>
<form action= "E1.php" method = "post" action="">
<fieldset
 <legend>Half E1 and E1:</legend>
<p> Would you prefer Half E1 or E1 voice?( Voice channels: 15 or 30)</p>
<input type= "radio" name= "ans" value= "yes" />Half E1 <br />
<input type= "radio" name= "ans" value= "no"   />E1<br />
</fieldset>
</form>
</body>
</html>
<?php
function Eone(){
 $var1= $_POST["ans"];
 if(isset($_POST["ans"])){
if( $var1 == "yes"){
	$var5= 12000;
echo(" The amount payable is: ");
echo(" Ksh.12,000 per month, plus you recieve additional 2,000 free minutes.");}
else {
	$var5= 18000;
echo ("The amout payable is:");
echo(" Ksh.18,000 per month, plus you recieve additional 4,500 free minutes.");
}
}
}
/*return $var5;*/
Eone();

/*mail('victor.muriithi@gmail.com','Access Kenya','Sample email' ,'From: victor.muriithi@gmail.com');*/
?>