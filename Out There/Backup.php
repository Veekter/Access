<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Backup Servers</title>
</head>

<body>
<?php echo $_POST[ 'value'];
?>
<form action="Backup.php" method ="post" action=""><br />
<fieldset
 <legend>Backup Servers:</legend>
 Number of Servers : <input type = "number" name = "servers" />
<input type = "submit" />
</fieldset>
</form>
</body>
</html>
<?php
function Back(){
 $var1= $_POST["servers"];
 if(!empty($var1)){
 echo("Your monthly subscription fees is:");
 echo("  ");
 $var2= $var1 * 7500;
 $var3= $var1 * 5;
 echo( $var2. "."."You recieve additional" . "  ".$var3);
 echo ("GB of storage space.");
}
}
Back();
 ?>