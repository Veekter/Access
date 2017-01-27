<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

<!-- Basic Page Needs -->
<meta charset="utf-8">
<title>Access Kenya Business Basket</title>
<meta name="description" content="Mastenia Responsive Form wizar landing page">
<meta name="author" content="">

<!-- Mobile Specific Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS -->
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/skeleton.css">
<link rel="stylesheet" href="css/forms.css">
<link rel="stylesheet" href="css/layout.css">
<link rel="stylesheet" href="css/flexslider.css">
<link rel="stylesheet" href="css/socialize-bookmarks.css">
<link rel="stylesheet" href="js/fancybox/source/jquery.fancybox.css?v=2.1.4">
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Favicons-->
<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- Jquery -->
<script src="js/jquery-1.7.1.min.js"></script>
 <script src="js/modernizr.2.5.3.js"></script>
</head>
<body>
<!--[if !IE]><!--><script>if(/*@cc_on!@*/false){document.documentElement.className+=' ie10';}</script><!--<![endif]-->

<header >
  <div class="container">
    <div class=" four mycolumn" id="logo"><img src="img/logo.jpg"  class="scale-with-grid" alt="Logo"></div><!-- Your logo-->

  </div>
</header><!-- End Header-->
<div class=" four columns" id="banner"><center><img src="img/topart.png" class="scale-with-grid" alt="Logo"></center></div>
<section id="form_area">
  <article class="container">
 <p>To login <a href="login.php"> CLick Here! </a></p> 	
<?php	 
 include'conn.php';
/* global $box; global $var10; global $var11; global $var9; global $var8; global $var7; global $var6; global $var5; global $var4; global $var3; global $var2;global $mail*/; 
 function index(){
	 global $name; global $email; global $phone;

$email=$_POST["email"];
$name= $_POST["name"];
$phone= $_POST["phone_number"];
$comp= $_POST["company"];
// define variables and set to empty values
//$nameErr = $emailErr = $phoneErr =$passwordErr = "";
/*$name = $email = $phone = $password =  "";*/

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (!empty($_POST["name"])){
    
   } else {
     $nameErr = "Name is required"; 
   }
  
   if (!empty($_POST["email"])){
     
   } else {
   $emailErr = "E-mail is required";  
   }
    
   if (!empty($_POST["phone_number"])){
    
   } else {
    $phoneErr = "Phone number is required";  
   }
   if (!empty($_POST["password"])){
     $emailErr = "Password is required";
   } else {
     
   }
   if (!empty($_POST["company"])){
     
   } else {
   $compErr = "Company name  is required";  
   }
}}
 
 
index();
  
  function internet(){
	 global $var1;
	 global $var2; 
	 global $box;
	 global $con;
$var1 = $_POST["internet"];
if (!empty($var1))
{
   
     if  ($var1 < 1){
    $var2= $var1* 0;
	 }
	 else if ($var1 < 5){
	 	$sql= "SELECT price FROM internnet WHERE unit='1'";
	 	$result= mysqli_query($con,$sql);
		$row= mysqli_fetch_array($result);
		$data= $row['price'];
	 $var2= $var1* $data;

	}
	  else if ($var1 < 10){
	 $sql= "SELECT price FROM internnet WHERE unit='2'";
	    $result= mysqli_query($con,$sql);
		$row= mysqli_fetch_array($result);
		$data= $row['price'];	
	  $var2= $var1 * $data;

	}
	    else if ($var1 < 16){
	 $sql= "SELECT price FROM internnet WHERE unit='3'";
		$result= mysqli_query($con,$sql);
		$row= mysqli_fetch_array($result);
		$data= $row['price'];  	
	  $var2= $var1 * $data;

	}
	      else if ($var1 > 15){

    }
if($var1== 1){
	$sql= "SELECT included FROM internnet WHERE unit='1'";
	       $result= mysqli_query($con,$sql);
	       $row= mysqli_fetch_array($result);
	       $dat= $row['included'];
	$box=$dat;

    }
	   else if ($var1 ==2){
	   	$sql= "SELECT included FROM internnet WHERE unit='2'";
		   $result= mysqli_query($con,$sql);
	       $row= mysqli_fetch_array($result);
	       $dat= $row['included'];
	   $box= $dat;	

	}
           else if ($var1==3 | $var1==4 | $var1==5 |  $var1==6 | $var1==7 | $var1==8 | $var1==9){
        $sql="SELECT included FROM internnet WHERE unit='3'";
           	$result= mysqli_query($con,$sql);
	        $row= mysqli_fetch_array($result);
	        $dat= $row['included'];
	      $box=$dat;	

	}
	        else if ($var1==10){
	     $sql= "SELECT included FROM internnet WHERE unit='4'";
				$result= mysqli_query($con,$sql);
	            $row= mysqli_fetch_array($result);
	            $dat= $row['included'];
	        $box=$dat;	

	}
	         else if ($var1>=10){
	     $sql= "SELECT included FROM internnet WHERE unit='more'";
				 $result= mysqli_query($con,$sql);
	             $row= mysqli_fetch_array($result);
	             $dat= $row['included'];
	        $box=$dat;	

	}
	
  }
}
internet(); 

 function hosting(){
 	global $con;
	 global $hst;
	 global $var4;
$hst= $_POST["hosting"];
  if (isset($_POST["hosting"])){
 $sql="SELECT price FROM webhosting";
  	    $result= mysqli_query($con,$sql);
	    $row= mysqli_fetch_array($result);
	    $data= $row['price'];
	$var4= $data;
  }
  }

/*return $var4;*/
hosting(); 
 
function Email(){
	global $con;
	 global $var3;
	 global $box;
	 global $mail;
 $mail= $_POST["boxes"];
  if(!empty($mail)){
  if( $box >= $mail){
  $var3 = 0;}
     else{
     $var2= $mail - $box;
		 $sql= "SELECT price FROM hostedmail";
		 $result= mysqli_query($con,$sql);
		 $row= mysqli_fetch_array($result);
		 $data= $row['price'];
     $var3= $var2 * $data;

        }
        }
        }
/*return $var3;*/
Email();
function storage(){
	global $con;
	global $mail;
	global $store;
	global $add;
$add= $_POST["storage"];
 if(!empty($add)){     
    $sql= "SELECT * FROM storage";	
       $result = mysqli_query($con,$sql);
       $row= mysqli_fetch_array($result);
       $data= $row['price']; 
       $inc= $row['included'];	
 $store= $add * $mail * $data;				
 $str= $add + $inc;
							
}	
}
// Returns  $store;
storage();

function Eone(){
	global $con;
	global $one;
	global $var5;
$one= $_POST["one"];
   if(isset($_POST["one"])){
   if( $one == "yes"){
   	$sql= "SELECT price FROM eone WHERE item='15'";
	   $result= mysqli_query($con,$sql);
	   $row= mysqli_fetch_array($result);
	   $data= $row['price'];
	$var5= $data;
 }
   else {
   	$sql="SELECT price FROM eone WHERE item='30'";
	    $result= mysqli_query($con,$sql);
	    $row= mysqli_fetch_array($result);
	    $data= $row['price'];
	$var5= $data;

 }
 }
 }
/*return $var5;*/
Eone(); 
 
/* End of In House Bundles */
/* Begining of Out There Bundles*/

function Firewall(){
	global $con;
	global $wall;
	global $var6;
$wall= $_POST["wall"];
  if (!empty($wall)){
  if( $wall == "yes"){
  	$sql= "SELECT price FROM firewall";
	   $result= mysqli_query($con,$sql);
	   $row= mysqli_fetch_array($result);
	   $data= $row['price'];
	$var6 = $data;
	}
    else if( $wall == "no"){
    $var6 = 0;
	}
}
}
/*return $var6;*/
Firewall(); 

function Wifi(){
	global $wif;
	global $var7;
	global $con;
$wif = $_POST["wifi"];
  if (!empty($wif)){
	if ($wif == 0){
	$var7 = 0;	
	}
	 else if ($wif== 1){
	 	$sql= "SELECT price FROM wifi WHERE unit='1'";
		  $result= mysqli_query($con,$sql);
	      $row= mysqli_fetch_array($result);
	      $data= $row['price'];
		$var7 = $data;

	 }
	  else if ($wif== 2){
	  	$sql= "SELECT price FROM wifi WHERE unit='2'";
		   $result= mysqli_query($con,$sql);
	       $row= mysqli_fetch_array($result);
	       $data= $row['price'];
		$var7 = $data;
	 }
	  else if( $wif== 3){
	  	$sql= "SELECT price FROM wifi WHERE unit='3'";
		  $result= mysqli_query($con,$sql);
	       $row= mysqli_fetch_array($result);
	       $data= $row['price'];
		$var7 = $data;
	}
      else if ($wif== 4){
      	$sql="SELECT price FROM wifi WHERE unit='4'";
		  $result= mysqli_query($con,$sql);
	       $row= mysqli_fetch_array($result);
	       $data= $row['price'];
		$var7 = $data;
	}
	 else if ($wif== 5) {
	 	$sql= "SELECT price FROM wifi WHERE unit='5'";
		 $result= mysqli_query($con,$sql);
	       $row= mysqli_fetch_array($result);
	       $data= $row['price'];
		$var7 = $data;
	}
	else if  ($wif > 5){
	echo("Bespoke solution.");
	echo "<br/>";
	}

}
}
 /*return $var7;*/
 Wifi(); 
 

function lan(){
	global $ln;
	global $var8;
	global $con;
$ln =  $_POST["lanusers"];
 if (!empty($ln)){
  if ($ln< 1){
  $var8 = 0;
    }
     else if  ($ln < 51){
     	$sql= "SELECT price FROM lan WHERE item='51'";
		   $result= mysqli_query($con,$sql);
	       $row= mysqli_fetch_array($result);
	       $data= $row['price'];
		$var8 = $data;

	}
	else if ($ln < 101){
		$sql="SELECT price FROM lan WHERE unit='101'";
		   $result= mysqli_query($con,$sql);
	       $row= mysqli_fetch_array($result);
	       $data= $row['price'];
		$var8 = $data;

	}
	else if ($ln < 201){
		$sql= "SELECT price FROM lan WHERE unit='210'";
		$result= mysqli_query($con,$sql);
	       $row= mysqli_fetch_array($result);
	       $data= $row['price'];
	   $var8 = $data;
	}
	else if ($ln > 200){
	echo " Bespoke price.";
    echo "<br/>";
	}

}
}
/*return $var8;*/
lan();  

function files(){
	global $fil;
	global $var9;
	global $con;
$fil= $_POST["fsusers"];
  if (!empty($fil)){
  	$sql="SELECT price FROM filesharing";
	      $result= mysqli_query($con,$sql);
	       $row= mysqli_fetch_array($result);
	       $data= $row['price'];
 $var9= $fil *$data;

}
}
/*return $var9;*/
files();  

function Back(){
	global $serv;
	global $var10;
	global $con;
$serv= $_POST["servers"];
  if(!empty($serv)){
 $sql="SELECT price FROM backserv";
	       $result= mysqli_query($con,$sql);
	       $row= mysqli_fetch_array($result);
	       $data= $row['price'];
 $var10= $serv * $data;
 $var13= $serv * 5;

 }
}
/*return $var10;*/
Back();  

function Backus(){
	global $usr;
    global $var11;
	global $con;
$usr= $_POST["buser"];
  if(!empty($usr)){
  	$sql= "SELECT price FROM backus";	
	       $result= mysqli_query($con,$sql);
	       $row= mysqli_fetch_array($result);
	       $data= $row['price'];
   $var11= $usr * $data;
}
}
/*return $var11;*/
Backus(); "/n";

function total(){
	global $var11;global $con; global $store; global $var10; global $var9; global $var8; global $var7; global $var6; global $var5; global $var4; global $var3; global $var2; global $mail;global $msg; global $varsum; 
	global $name; global $email; global $phone; global $var_mail; global $var1; global $hst; global $one; global $wall; global $wif; global $ln; global $fil; global $serv; global $usr; global $varsum;
	
$varsum= $var2 + $var3 + $var4 + $var5 + $var6 + $var7 + $var8 + $var9 + $var10 + $var11 + $store;
 
$msg = "Subscription for: ". "\n" ."Name: ".$name. "\n" ."E-mail: ".$email. "\n" ."Phone Number: ".$phone."\n"."\n"."Internet: ". $var1. " Mb/s\n"."Web Hosting: " .$hst. "\n"."Hosted E-mail: " .$mail. "\n"."Additional Storage".$store."\n"."Half E1 or E1: " .$one. "\n"."Firewall: " .$wall. "\n"."Wifi: " .$wif. "\n"."LAN: " .$ln. " users \n"."File Sharing: " .$fil. " users \n"."Back-up Servers: " .$serv. " servers \n"."User Back-up: " .$usr. " users \n"."Sum total: KES". $varsum;
	 if(!empty($mail)){
$varcostusr= round($varsum / $mail);
	} 



//if(isset($_POST['submit'])){
	$nme= mysqli_real_escape_string($con, $_POST['name']);
	$maill= mysqli_real_escape_string($con, $_POST['email']);
	$phne= mysqli_real_escape_string($con, $_POST['phone_number']);
	$com= mysqli_real_escape_string($con, $_POST['company']);

$sqlinsert = "INSERT INTO requests (name, phonenumber,company, email,internet,webhosting, hostedemail,storage, eone, firewall, wifi, lan, filesharing, backserv, backusr,total) 
VALUES ('$nme', '$phne','$com', '$maill','$var2', '$var4', '$var3','$store' ,'$var5', '$var6', '$var7', '$var8', '$var9','$var10','$var11', '$varsum')";

$ingisha = mysqli_query($con, $sqlinsert);
 
if(!$ingisha)
{
  die('Could not enter data: ' . mysqli_connect_error());
}
}
total();

mail('titus@digitalbrush.co.ke','Business Basket Prospect',$msg ,'From: $email');
//header ("Location: thanks.html");
echo "<table align='center' width='50%' cellpadding='1' cellspacing='2' style='font-size:16px; margin-left:100px; padding:20px;
	color: #ffffff;'>";

echo "<tr><td> Name: <span style='font-weight: bold; color: #7FD4FF'>" . $name . " </span></td></tr>";
echo "<tr><td> E-mail: <span style='font-weight: bold; color: #7FD4FF'>" . $email . "</span></td></tr>";
echo "<tr><td> Phone Number: <span style='font-weight: bold; color: #7FD4FF'>" . $phone . "</span> </td></tr>";
echo "<tr><td> Internet: <span style='font-weight: bold; color: #7FD4FF'>" . $var1 . " Mb/s</span></td></tr>";
echo "<tr><td> Web Hosting: <span style='font-weight: bold; color: #7FD4FF'>" . $hst . " </span></td></tr>";
echo "<tr><td> Hosted E-mail: <span style='font-weight: bold; color: #7FD4FF'>" . $mail . " </span></td></tr>";
echo "<tr><td> Additional Storage: <span style='font-weight: bold; color: #7FD4FF'>" . $add . " </span></td></tr>";
echo "<tr><td> Half E1 or E1: <span style='font-weight: bold; color: #7FD4FF'>" . $one . " </span></td></tr>";
echo "<tr><td> Firewall: <span style='font-weight: bold; color: #7FD4FF'>" . $wall . " </span></td></tr>";
echo "<tr><td> Wifi: <span style='font-weight: bold; color: #7FD4FF'>" . $wif . " hotspots</span></td></tr>";
echo "<tr><td> LAN: <span style='font-weight: bold; color: #7FD4FF'>" . $ln . " users</span></td></tr>";
echo "<tr><td> File Sharing: <span style='font-weight: bold; color: #7FD4FF'>" . $fil . " users</span></td></tr>";
echo "<tr><td> Back-up Servers: <span style='font-weight: bold; color: #7FD4FF'>" . $serv . " servers</span></td></tr>";
echo "<tr><td> User Back-up: <span style='font-weight: bold; color: #7FD4FF'>" . $usr . " users</span></td></tr>";

echo "</table>";
echo "<p><table border='1' align='center' width='50%' style='font-size:16px; margin-left:100px; padding:20px;
	color: #ffffff;'>";

echo "<tr><td>Total: <span style='font-size:20px; font-weight: bold; color:#F5EB30;'> KES " . $varsum . " </span></td></tr>";
echo "<tr><td><form id='custom' action='thanks.html'><input type='submit' class='button-back' value='Done' /></form></td></tr>";
echo "</table>";
	 
?>
<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

<!-- Basic Page Needs -->
<meta charset="utf-8">
<title>Access Kenya Business Basket</title>
<meta name="description" content="Mastenia Responsive Form wizar landing page">
<meta name="author" content="">

<!-- Mobile Specific Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS -->
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/skeleton.css">
<link rel="stylesheet" href="css/forms.css">
<link rel="stylesheet" href="css/layout.css">
<link rel="stylesheet" href="css/flexslider.css">
<link rel="stylesheet" href="css/socialize-bookmarks.css">
<link rel="stylesheet" href="js/fancybox/source/jquery.fancybox.css?v=2.1.4">
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Favicons-->
<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- Jquery -->
<script src="js/jquery-1.7.1.min.js"></script>
 <script src="js/modernizr.2.5.3.js"></script>
</head>
<body>
<!--[if !IE]><!--><script>if(/*@cc_on!@*/false){document.documentElement.className+=' ie10';}</script><!--<![endif]-->

<header >
  <div class="container">
    <div class=" four mycolumn" id="logo"><img src="img/logo.jpg"  class="scale-with-grid" alt="Logo"></div><!-- Your logo-->

  </div>
</header><!-- End Header-->
<div class=" four columns" id="banner"><center><img src="img/topart.png" class="scale-with-grid" alt="Logo"></center></div>
<section id="form_area">
 