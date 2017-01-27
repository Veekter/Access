<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Register Page</title>
</head>
<body>

<?php


$con = new mysqli('localhost', 'root', '', 'newaccess');


if(!$con){
 die('Could not connect: ' . mysqli_connect_error());
 }

 if(isset($_POST['submit'])){
	$name= mysqli_real_escape_string($con, $_POST['name']);
	$pass= mysqli_real_escape_string($con, $_POST['pass']);
	$mail= mysqli_real_escape_string($con, $_POST['mail']);

mysqli_select_db($con, 'newaccess');

$sqlinsert = "INSERT INTO loginn (username, password, email) VALUES ('$name', '$pass', '$mail')";

$ingisha = mysqli_query($con, $sqlinsert);
 
if(!$ingisha)
{
  die('Could not enter data: ' . mysqli_connect_error());
}
echo "Entered data successfully\n";

mysqli_close($con);

}

else
{
?>

<h1> Login Page </h1>
<p> Enter credentials to login:    </p>
<form  action="<?php $_PHP_SELF ?>" method = "post">
<label> Username: <input type ="text" name="name" /></label><Br>
<label> Password: <input type ="password" name= "pass" /></label>
<br>
<label> E-mail: <input type ="text" name= "mail" /></label>
<br>
<input type ="submit" name="submit"  value="login"/>
</body>
</form>
<?php
}
?>


