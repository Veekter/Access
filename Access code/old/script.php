
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<p>
  <?php  $_POST['value'];?>
  
<form action= "script.php" method = "post" action="">
<?php

 function index(){
$password=$_POST["password"];
$email=$_POST["email"];
$name= $_POST["text"];
$phone= $_POST["number"];
function change_password($email, $password, $name, $phone)
{
    if($email && $password && $name && $phone)
    {
            if(login($email, $password, $name, $phone))
            {
            
                    return TRUE;
                }
            }
        }
    
}
index();
  
  function internet(){
	global $box;
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
	$var2= $var1 * 16000;
	echo("Ksh.");
	echo($var2 . ".");
	}
	else if ($var1 < 16){
	echo("Your monthly subscription fees is: ");
	$var2= $var1 * 15000;
	echo("Ksh.");
	echo($var2 . ".");
	}
	else if ($var1 > 15){
	echo " Bespoke price.";
	}
	else
	echo " Invalid entry!";
}
if($var1== 1){
	$box=10;
echo("You have will receive 10 mailboxes.");
    }
	else if ($var1 ==2){
	$box= 20;	
	echo("You will receive 20 mailboxes.");
	}
    else if ($var1==3 | $var1==4 | $var1==5 | $var1==6 | $var1==7 | $var1==8 | $var1==9){
	$box=30;	
		echo("You will receive 30 mailboxes.");
	}
	else if ($var1==10){
	$box=70;	
	echo("You will recieve 70 mailboxes.");
	}
	else if ($var1>=10){
	$box=70;	
	echo("You will receive 70 mailboxes.");
	}
	
  }
echo $box;
$box=internet(); 



 function hosting(){
	 global $var4;
	 hosting.called==true;
 $hst= $_POST["hosting"];
 if (isset($_POST["hosting"])){
	$var4= 2000;
if( $hst == "yes"){
echo(" The amount payable is: ");
echo(" Ksh.2,000 per month, plus you recieve additional 750Mbs shared hosting space.");}
else {
echo ("Please try our other services.");
}
}
}
/*return $var4;*/
hosting(); "/n";
 
 function Email(){
	 global $var3;
	global $box;
	 Email.called== true;
	 
 $mail= $_POST["boxes"];
 if(!empty($mail)){
 if( $newbox >= $mail){
 echo (" No charge.");}
 else{
 echo("Your monthly subscription fee is:");
 $var2= $mail - $newbox;
 $var3= $var2 * 370;
 echo("Ksh." . $var3);
 echo(".");
 echo("You recieve additional". "  " . $mail. "GB space." );
 }
}
 }
/*return $var3;*/
Email(); "/n";

 
 function Eone(){
	global $var5;
	 Eone.called==true;
 $one= $_POST["one"];
 if(isset($_POST["one"])){
if( $one == "yes"){
	$var5= 12000;
echo(" The amount payable is: ");
echo(" Ksh.12,000 per month, plus you recieve additional 2,000 free minutes.");
}
else {
	$var5= 18000;
echo ("The amout payable is:");
echo(" Ksh.18,000 per month, plus you recieve additional 4,500 free minutes.");
}
}
}
/*return $var5;*/
Eone();  "/n";
 
/* End of In House Bundles */
/* Begining of Out There BUndles*/

function Firewall(){
	global $var6;
	Firewall.called==true;
 $wall= $_POST["wall"];
 if (!empty($wall)){
if( $wall == "yes"){
	$var6 = 10500;
echo(" The amount payable is: ");
echo(" Ksh 10,500 per month.");}
else {
echo ("Please try our other services.");}
}
}
/*return $var6;*/
Firewall();  "/n";


function Wifi(){
	global $var7;
	Wifi.called==true;
$wif = $_POST["wifi"];
if (!empty($wif)){
	if ($wif == 0){
	echo ("The minimum is one hotspot.");	
	}
	else if ($wif== 1){
		$var7 = 25000;
	echo("Your monthly subscription fees is:");
	echo("Ksh.25,000.");
	}
	else if ($wif== 2){
		$var7 = 47500;
	echo("Your monthly subscription fees is:");
	echo("Ksh.47,500.");
	}
	else if( $wif== 3){
		$var7 = 65000;
	echo("Your monthly subscription fees is:");
	echo("Ksh.65,000.");
	}
    else if ($wif== 4){
		$var7 = 85000;
	echo("Your monthly subscription fees is:");
	echo("Ksh.85,000.");
	}
	else if ($wif== 5) {
		$var7 = 100000;
	echo("Your monthly subscription fees is:");
	echo("Ksh.100,000.");
	}
	else if  ($wif > 5){
	echo("Bespoke solution.");
	}
	else
	echo("Invalid entry");
}
}
 /*return $var7;*/
 Wifi(); "/n";
 

function lan(){
	global $var8;
	lan.called==true;
$ln =  $_POST["Users"];
if (!empty($ln))
{
if ($ln< 1){
echo("Please try our other services.");
    }
    else if  ($ln < 51){
		$var8 = 40000;
	echo(" Your monthly subscription fees is: ");
	echo(" Ksh.40,000.");
echo("You receive additional 8 hours on site support.");
	}
	else if ($ln < 101){
		$var8 = 64000;
	echo(" Your monthly subscription fees is: ");
	echo( " Ksh.64,000.");
echo("You receive additional 16 hours on site support.");
	}
	else if ($ln < 201){
	   $var8 = 120000;
	echo("Your monthly subscription fees is: ");
	echo( "Ksh.120,000.");
echo("You receive additional 32 hours on site support.");
	}
	else if ($ln > 200){
	echo " Bespoke price.";
	}
	else
	echo " Invalid entry!";
}
}
/*return $var8;*/
lan();  "/n";


function files(){
	global $var9;
 files.called==true;
 $fil= $_POST["input"];
 if (!empty($fil)){
 $var9= $fil *430;
echo("Your monthly subscription fees is:  ");
echo('');
echo($var9);
echo('/='.'.');
echo('');
echo(" You receive additional ");
echo($fil);
echo("GB storage space.");
}
}
/*return $var9;*/
files();  "/n";


function Back(){
	global $var10;
	Back.called==true;
 $serv= $_POST["servers"];
 if(!empty($serv)){
 echo("Your monthly subscription fees is:");
 echo("  ");
 $var10= $serv * 7500;
 $var13= $serv * 5;
 echo( $var10. "."."You recieve additional" . "  ".$var13);
 echo ("GB of storage space.");
}
}
/*return $var10;*/
Back();  "/n";


function Backus(){
    global $var11;
	Backus.called==true;
 $usr= $_POST["user"];
 if(!empty($usr)){
 echo("<br />Your monthly subscription fees is:");
 echo("  ");
 $var11= $usr * 7000;
 echo( $var11);
 echo("  " . ".");
 echo( "You recieve additional" . "  ".$usr);
 echo ("GB of storage space.<br />");
 

}
}

Backus(); "/n";
  
function total(){
global $var11;
	/*if (isset($_POST['internet']) ||isset($_POST['hosting']) || isset($_POST['boxes']) || isset($_POST['one'])|| isset($_POST['wall']) || isset($_POST['wifi']) || isset($_POST['Users']) || isset($_POST['input']) || isset($_POST['servers'])|| isset($_POST['user']) ){ */
	$varsum= $var2 + $var3 + $var4 + $var5 + $var6 + $var7 + $var8 + $var9 + $var10 + $var11 + $randomnumber;
    echo("Your sum total amount payable is:  ");
	echo("Ksh. ");
	echo $var11;
	echo(" .");
}

total();
/*mail('victor.muriithi@gmail.com','Access Kenya','Sample email' ,'From: victor.muriithi@gmail.com');*/
	 
?>

</form>