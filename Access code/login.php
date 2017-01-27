<?php session_start(); ?>
<html>
<head>
<title> LOGIN PAGE </title>
</head>
<body>
<p>
	<form action = "<?php $_PHP_SELF  ?>" method= "POST"  >
		<label>
			<fieldset >
<legend><b> Member Login</b></legend>
<input type='hidden' name='submitted' id='submitted' value='1'/> 
 
<label for='username' >UserName*:</label>
<input type='text' name='username' id='username'  maxlength="50" /> <br>
 
<label for='password' >Password*:</label>
<input type='password' name='password' id='password' maxlength="50" /><br>
 
<input type='submit' name='Submit' value='Login' />
 
</fieldset>
		
		</form>
<?php
include 'conn.php';
 $name = "";
 $pass = '';
 if(isset ($_POST['username']) && isset($_POST['password'])){
 	$name= $_POST["username"];
 $pass= $_POST["password"];
 }
     $name = stripslashes($name);
     $pass = stripslashes($pass);
  $name = mysqli_real_escape_string($con,$name);
  $password = mysqli_real_escape_string($con,$pass);
 
       $sql = "SELECT username, password FROM login WHERE password = '$pass'";
         $result = mysqli_query($con, $sql);
          $row = mysqli_fetch_array($result);

       if($row["username"]==$name && $row["password"]==$pass){  
             echo"You are a validated user.";
 }
       else{
             echo"Sorry, your credentials are not valid, Please try again.";
 }
//If result matched $name and $pass, table row must be 1 row
 //    $count=mysqli_num_rows($result);
/*if($count == 1){
	
	// Register $myusername, $mypassword and redirect to file "login_success.php"
session_register("name");
session_register("pass");
header("location:login_success.php");
}
else {
echo "Wrong Username or Password";
}
*/

	
	
 
?>			