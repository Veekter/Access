
<?php
include 'conn.php';

?>
<html>
<head>	
<title> MASTER DATA </title>
</head>
<body>
	<form action= "<?php $_PHP_SELF ?> >"	method ="POST" >

		<div id="net1"> 
<fieldset><legend> Internet:</legend>	
<?php
 fivemb();
	echo"<label> (< 5)Mb: </label> ". $data.".";
    echo"<label> Included: </label> ". $inc."."."<br>";
 tenmb();
    echo"<label> (< 10)Mb: </label> ". $tenmb.".";	
	echo"<label> Included: </label> ". $teninc."."."<br>";
 sixteenmb();	
     echo"<label> (< 16)Mb: </label> ". $sixteenmb.".";	
	echo"<label> Included: </label> ". $sixteeninc."."."<br>";
 fifteenmb();
     echo"<label>(>15)Mb Included: </label> ". $fifinc."."."<br>";
  	

?>
<input type="button" id= "btn1" value= "Edit"> </button>
<input type="button" id= "btn2" value= "Cancel"> </button>
	</fieldset>
	</div>	
	
<form id="fivemb" method="post" action="master.php">	
	           
         <fieldset> <legend>	Internet: </legend>	
	<?php
	function fivemb(){    
	global $con;
	global $data;
	global $inc;
	$sql= "SELECT * FROM internnet WHERE unit='1'";
	 	$result= mysqli_query($con,$sql);
		$row= mysqli_fetch_array($result);
		$data= $row['price'];
		$inc =$row['included'];
	}
	fivemb();
	
function update5mb(){
	global $con;
	if(isset($_POST['internet1']) || isset($_POST['boxes1'])){
		$newprice= $_POST['internet1'];
	   	$newbox = $_POST['boxes1'];	
	   
 $sql= " UPDATE internnet SET price= $newprice, included = $newbox WHERE nnet_id= '1' ";	
 $result = mysqli_query($con,$sql); 
 if(!$result){
  	echo"Update failed!";
  }   
} }
 update5mb();	
	
	?> 
				                             
( <5)Mb/s :<input type= "number" name= "internet1" value= "<?php echo $data ?>">	
Included:	 <input type= "number"  name= "boxes1" value= "<?php echo $inc ?>"> Mailboxes.
<input type= "submit" name= "net"  value= "save"/><br>
<?php
  if(isset($_POST['net'])){
  	update5mb();
  }

?>
      </form>

<form id="tenmb" action="master.php" method="post"  >    
<?php
function tenmb(){    
	global $con; global $tenmb; global $teninc;
	$sql= "SELECT * FROM internnet WHERE unit='2'";
	 	$result= mysqli_query($con,$sql);
		$row= mysqli_fetch_array($result);
		$tenmb= $row['price'];
		$teninc =$row['included'];
}
 tenmb();
 
 	
function update10mb(){
	global $con;
	if(isset($_POST['internet2']) || isset($_POST['boxes2']))  {
		$newprice= $_POST['internet2'];
	   	$newbox = $_POST['boxes2'];	
	
 $sql= " UPDATE internnet SET price= $newprice, included = $newbox WHERE nnet_id= '2' ";	   
 $result= mysqli_query($con,$sql);	
 if(!$result){
  	echo"Update failed!";
  } 
}}
  update10mb();
 
 
		?>          
( < 10)Mb/S:<input type= "number" name= "internet2" value = "<?php echo $tenmb ?>">	
Included: <input type= "number" name= "boxes2" value = "<?php echo $teninc ?>"> Mailboxes.
<input type= "submit"  name= "ten" value= "save" /><br>
    
<?php if(isset($_POST['ten'])){
	update10mb();
}    

?>
    </form>
 
 <form id="sixteenmb" action="master.php" method="post">
<?php
 function sixteenmb(){    
	global $con; global $sixteenmb; global $sixteeninc;
	$sql= "SELECT * FROM internnet WHERE unit='3'";
	 	$result= mysqli_query($con,$sql);
		$row= mysqli_fetch_array($result);
		$sixteenmb= $row['price'];
		$sixteeninc =$row['included'];
 }
 sixteenmb();
 	
function update16mb(){
	global $con;
	if(isset($_POST['internet3']) || isset($_POST['boxes3'])) {
		$newprice= $_POST['internet3'];
	   	$newbox = $_POST['boxes3'];	
	   
 $sql= " UPDATE internnet SET price= $newprice, included = $newbox WHERE nnet_id= '3' ";	   
	$result= mysqli_query($con,$sql);
	if(!$result){
  	echo"Update failed!";
  } 
}}
 
 update16mb();
		?>               
( < 16)Mb/s:<input type= "number" name= "internet3" value = "<?php echo $sixteenmb ?>">
Included: <input type= "number" name= "boxes3" value= "<?php echo $sixteeninc ?>"> Mailboxes.
<input type="submit" name="sixteen" value="save" /><br />
<?php
 if(isset($_POST['sixteen'])){
 	update16mb();
 }
?>
   </form>
   
   <form id="fifteenmb" method="post" action="master.php">
<?php
 function fifteenmb(){   
	global $con; global $fifinc;
	$sql= "SELECT * FROM internnet WHERE unit='4'";
	 	$result= mysqli_query($con,$sql);
		$row= mysqli_fetch_array($result);
		$data= $row['price'];
		$fifinc =$row['included'];
 }
 fifteenmb();
 	
function update15mb(){
	global $con;
	 if(isset($_POST['boxes4'])){
	   	$newbox = $_POST['boxes4'];	
	   
 $sql= " UPDATE internnet SET included = $newbox WHERE nnet_id= '4' ";	   
	$result= mysqli_query($con,$sql);
	if(!$result){
  	echo"Update failed!";
  } 
}}
 update15mb();
		?>
			              
( >15 )Mb/s: Bespoke Solution!	 
Included: <input type= "number" name= "boxes4" value = "<?php echo $fifinc  ?>"> Mailboxes. 
<input type="submit" name="fifteen" value="save"> <br>
<?php
  if(isset($_POST['fifteen'])){
  	update15mb();
  }
?>
          </form>    
  </fieldset>
  </div>
  
  <!-- This is the end of Internet -->	
  <div id="web1">
  	<fieldset><legend> Web Hosting</legend>
  <?php
  wbhosting();
     echo"<label> Web Hosting & Domain Name: </label> ". $web.".";
     echo"<label> Included: </label> ". $webinc."."."<br>";
  
  ?>		
<input type="button" name="btn1" value="Edit">
<input type="button" name="btn2"  value="Cancel"/>  				
  		
  	</fieldset>
  	</div>
<form id="webhosting" method="post" action="master.php">  
          <fieldset> <legend> Web Hosting: </legend>

	<?php
	function wbhosting() {
		global $con; global $web; global $webinc;  
	 $sql="SELECT * FROM webhosting";
  	$result= mysqli_query($con,$sql);
	$row= mysqli_fetch_array($result);
	$web= $row['price'];
	$webinc = $row['included'];
	}
wbhosting();
	
function updatehosting(){
	global $con;
	if(isset($_POST['hosting']) || isset($_POST['hst']))     {
		$newprice= $_POST['hosting'];
	   	$newbox = $_POST['hst'];	
	   
 $sql= " UPDATE webhosting SET price= $newprice, included = $newbox WHERE web_id= '1' ";	   
	$result= mysqli_query($con,$sql);
	if(!$result){
  	echo"Update failed!";
  } 
}}
	updatehosting();
	?>
Web site Hosting & Domain Name:<input type= "number" name ="hosting" value= "<?php echo $web ?>">
Included: <input type = "number" name = "hst" value= "<?php echo $webinc  ?>"> Hosting Space.
<input type = "submit" name="hosteded" value = "save"> <br>
<?php 
 if(isset($_POST['hosteded'])){
 	updatehosting();
 }
  ?>
  
	     </fieldset>
	</form>
	<!-- This is the end of Web site Hosting -->
	<div id="hosted1">
  <fieldset><legend> Hosted E-mail:</legend>
 <?php
 hstmail();
   echo"<label> Hosted E-mail: </label> ". $hst."."."<br>";
 ?> 	
 	
<input type="button" name="btn1" value="Edit">
<input type="button" name="btn2" value="Cancel"  	 	
  </fieldset>				
	</div>
		
<form id="hostedmail" method="post" action="master.php">	
   <fieldset> <legend> Hosted E-mail: </legend>
	<?php
function hstmail() {
	global $con;  global $hst;
	$sql= "SELECT price FROM hostedmail";
		 $result= mysqli_query($con,$sql);
		 $row= mysqli_fetch_array($result);
		 $hst= $row['price'];
}
 hstmail();
	
function updatehstmail(){
	global $con;
	if(isset($_POST['hosted'])){
		$newprice= $_POST['hosted'];
		
 $sql= " UPDATE hostedmail SET price= $newprice WHERE host_id= '1' ";	   
	$result= mysqli_query($con,$sql);
	if(!$result){
  	echo"Update failed!";
  } 
}}
  updatehstmail();

		 ?>
Hosted E-Mail: <input type= "number" name ="hosted" value= "<?php echo $hst ?>">
<input type = "submit"name="uphst" value = "save"> <br>
  <?php
    if(isset($_POST['uphst'])){
    	updatehstmail();
    }
  ?>
	
	</fieldset>	
</form>	
	<!-- This is the end of Hosted E-mail -->

<div id="eone1">
	<fieldset><legend> Half E1 or E1:</legend>   
<?php
fifteen();
     echo"<label> 15: </label> ". $data15.".";
     echo"<label> Included: </label> ". $inc15."."."<br>";
thirty();
     echo"<label> 30: </label> ". $data30.".";
     echo"<label> Included: </label> ". $inc30."."."<br>";	 


?>		
<input type="button" name="btn1" value="Edit" />
<input type="button" name="btn2" value="Cancel" />		
				
		</fieldset>
	</div>	

 <fieldset> <legend> Half E1 or E1: </legend>
<form id="halfE1" method="post" action="master.php"> 	
	<?php
function fifteen(){
	global $con;  global $data15; global $inc15;
	$sql= "SELECT * FROM eone WHERE item='15'";
	   $result= mysqli_query($con,$sql);
	   $row= mysqli_fetch_array($result);
	   $data15= $row['price'];
	   $inc15= $row['included'];
}
 fifteen();
 	
function updatefifteen(){
	global $con; 
	if(isset($_POST['eonefif'])  || isset($_POST['minsfif'])){
		$newprice= $_POST['eonefif'];
	   	$newbox = $_POST['minsfif'];	
	     
 $sql= " UPDATE eone SET price= $newprice, included = $newbox WHERE eone_id= '1' ";	   
	$result= mysqli_query($con,$sql);  
	if(!$result){
  	echo"Update failed!";
  }  
}}
 updatefifteen();
	
	?>
15: <input type= "number" name ="eonefif" value= "<?php echo $data15 ?>">	
Included: <input type = "number"name= "minsfif" value= "<?php echo $inc15 ?>"> Free Minutes.
<input type = "submit" name="fifteen" value = "save"><br>
  <?php 
 if(isset($_POST['fifteen'])){
 	updatefifteen();
 }
    ?>
 </form>
<form id="fullE1" method="post" action="master.php">
<?php
 function thirty(){
 	global $con;  global $data30; global $inc30; 
  $sql= "SELECT * FROM eone WHERE item='30'";
	   $result= mysqli_query($con,$sql);
	   $row= mysqli_fetch_array($result);
	   $data30= $row['price'];
	   $inc30= $row['included'];
 }
 
 thirty(); 	
function updatethirty(){
	global $con;
	if(isset($_POST['eone']) || isset($_POST['mins'])){
		$newprice= $_POST['eone'];
	   	$newbox = $_POST['mins'];	
	   
 $sql= " UPDATE eone SET price= $newprice, included = $newbox WHERE eone_id= '2' ";	   
	$result= mysqli_query($con,$sql);
	if(!$result){
  	echo"Update failed!";
  } 
}}
updatethirty();
 
	   ?>
30: <input type= "number" name ="eone" value= "<?php echo $data30 ?>">
Included: <input type = "number" name= "mins" value= "<?php echo $inc30 ?>"> Free Minutes.
<input type = "submit" name="thirrty" value = "save"> <br>
 <?php   
   if(isset($_POST['thirrty'])){
   	updatethirty();
   }
 ?>
	       </form>
      </fieldset>	
<!-- This is the end of Half E1 or E1 -->
  <div id="wall1">
  	<fieldset><legend> Firewall:</legend> 
  <?php
  firewall();
      echo"<label> Firewall: </label> ". $wall."."."<br>";
  
  ?>		 		
<input type="button" name="btn1" value="Edit" />
<input type="button" name="btn2" value="Cancel" />  		
  		
  		</fieldset>	
  </div>

<form id="firewall" method="post" action="master.php"></form>
   <fieldset>  <legend> Firewall: </legend>  
	<?php
function firewall(){
	global $con;   	global $wall;
	$sql= "SELECT price FROM firewall";
	   $result= mysqli_query($con,$sql);
	   $row= mysqli_fetch_array($result);
	   $wall= $row['price'];
}
 firewall(); 
	
function updatewall(){
	global $con;
	if(isset($_POST['wall'])){
		$newprice= $_POST['wall'];
	
 $sql= " UPDATE firewall SET price= $newprice WHERE wall_id='1' ";	   
	$result= mysqli_query($con,$sql);
	if(!$result){
  	echo"Update failed!";
  } 
}}
 updatewall();
	?>
Firewall : <input type= "number" name ="wall" value= "<?php echo $wall ?>">	
 <input type ="submit" name="fire" value = "save"><br>
 <?php
   if(isset($_POST['fire'])){
   	echo"Button pressed!";
   	updatewall();
   }
 ?>
	</fieldset>
</form>	
	<!-- This is the end of Firewall -->
	
	<div id="wifwif">
		<fieldset> <legend> Wifi:</legend>  
<?php
wifi1();
      echo"<label> 1: </label> ". $wifi1."."."<br>";
wifi2();
      echo"<label> 2: </label> ". $wifi2."."."<br>";
wifi3();
      echo"<label> 3: </label> ". $wifi3."."."<br>"; 	  	  
wifi4();
      echo"<label> 4: </label> ". $wifi4."."."<br>";
wifi5();
	  echo"<label> 5: </label> ". $wifi5."."."<br>"; 

?>			
			
<input type="button" name="btn1" value="Edit" />
<input type="button" name="btn2" value="Cancel" /> 					
			</fieldset>	
	</div>
	<fieldset>  <legend> Wifi: </legend>  
<form id="wifi1" action="master.php" method="post">	
	<?php
function wifi1(){
	global $con;  global $wifi1; 	
	$sql= "SELECT price FROM wifi WHERE unit='1'";
		  $result= mysqli_query($con,$sql);
	      $row= mysqli_fetch_array($result);
	      $wifi1= $row['price'];
}
 wifi1();
	
function updatewifi1(){
	global $con;
	if(isset($_POST['wifi'])){
		$newprice= $_POST['wifi'];
		 
 $sql= " UPDATE wifi SET price= $newprice WHERE unit= '1' ";	   
	$result= mysqli_query($con,$sql);
	if(!$result){
  	echo"Update failed!";
  } 
}}
updatewifi1();
	?>
	1: <input type= "number" name ="wifi" value= "<?php echo $wifi1 ?>">
	<input type = "submit"  name="wifii1" value = "save"> <br>
	<?php
	if(isset($_POST['wifii1'])){
		updatewifi1();
	}
	
	?>
</form>
<form id="wifi2" action="master.php" method="post">
<?php
function wifi2(){
	global $con;  global $wifi2;
   $sql= "SELECT price FROM wifi WHERE unit='2'";
		  $result= mysqli_query($con,$sql);
	      $row= mysqli_fetch_array($result);
	      $wifi2= $row['price'];
}
 wifi2();
	
function updatewifi2(){
	global $con;
	if(isset($_POST['wifi2'])){
		$newprice= $_POST['wifi2'];
		
 $sql= " UPDATE wifi SET price= $newprice WHERE wifi_id= '2' ";	   
	$result= mysqli_query($con,$sql);
	if(!$result){
  	echo"Update failed!";
  } 
}}
 updatewifi2();

?>
	2: <input type= "number" name ="wifi2" value= "<?php echo $wifi2 ?>">
	<input type = "submit" name="wifii2" value = "save"> <br>
<?php
 if(isset($_POST['wifii2'])){
 	updatewifi2();
 }
?>
 </form>
<form id="wifi3" action="master.php" method="post"> 
<?php
function wifi3(){
	global $con;  global $wifi3; 
 $sql= "SELECT price FROM wifi WHERE unit='3'";
		  $result= mysqli_query($con,$sql);
	      $row= mysqli_fetch_array($result);
	      $wifi3= $row['price'];
}
	wifi3();
	
function updatewifi3(){
	global $con;
	if(isset($_POST['wifi3'])){
		$newprice= $_POST['wifi3'];
		
 $sql= "UPDATE wifi SET price= $newprice WHERE wifi_id= '3' ";	   
	$result= mysqli_query($con,$sql);
	if(!$result){
  	echo"Update failed!";
  } 
}}
 updatewifi3();	
?>
	3: <input type= "number" name ="wifi3" value= "<?php echo $wifi3 ?>">
	<input type = "submit" name="wifii3" value = "save"><br>
	
 <?php
 if(isset($_POST['wifii3'])){
 	updatewifi3();
 }
 
 ?>
</form>
<form id="wifi4" action="master.php" method="post">
<?php
function wifi4(){
	global $con;  global $wifi4;
  $sql= "SELECT price FROM wifi WHERE unit='4'";
		  $result= mysqli_query($con,$sql);
	      $row= mysqli_fetch_array($result);
	      $wifi4= $row['price'];
}
wifi4();

function updatewifi4(){
	global $con;
	if(isset($_POST['wifi4'])){
		$newprice= $_POST['wifi4'];
		
 $sql= "UPDATE wifi SET price= $newprice WHERE wifi_id= '4' ";
	$result = mysqli_query($con,$sql);	 
	if(!$result){
  	echo"Update failed!";
  }   	
}}
 updatewifi4();

?>
	4: <input type= "number" name ="wifi4" value= "<?php echo $wifi4 ?>">
	<input type = "submit" name="wifii4" value = "save"><br>
<?php
if(isset($_POST['wifii4'])){
	updatewifi4();
}
?>
     </form>
<form id="wifi5" action="master.php" method="post"> 
<?php
function wifi5(){
	global $con;   global $wifi5;
  $sql= "SELECT price FROM wifi WHERE unit='5'";
		  $result= mysqli_query($con,$sql);
	      $row= mysqli_fetch_array($result);
	      $wifi5 = $row['price'];
}
  wifi5();

function updatewifi5(){
	global $con;
	if(isset($_POST['wifi5'])){
		$newprice= $_POST['wifi5'];
		
 $sql= "UPDATE wifi SET price= $newprice WHERE wifi_id= '5' ";	   
	$result= mysqli_query($con,$sql);
	if(!$result){
  	echo"Update failed!";
  } 
}}
   updatewifi5();
?>
	5: <input type= "number" name ="wifi5" value= "<?php echo $wifi5 ?>">
	<input type = "submit" name = "wifii5" value="save"><br>
	<?php
	if(isset($_POST['wifii5'])){
		updatewifi5();
	}
	
	?>
</form>
	Included : Installation & Setup.
	</fieldset>
		<!-- This is the end of Wifi! -->
		
		<div id="lan1">
			<fieldset><legend> LAN:</legend>
	<?php			
lan51();
      	echo"<label> (>51): </label> ". $data51.".";
        echo"<label> Included: </label> ". $inc51."."."<br>";
lan101();
        echo"<label> (>101): </label> ". $data101.".";
        echo"<label> Included: </label> ". $inc101."."."<br>";
lan201();
     	echo"<label> (>201): </label> ". $data201.".";
        echo"<label> Included: </label> ". $inc201."."."<br>";						
							
		?>		
<input type="button" name="btn1" value="Edit" />
<input type="button" name="btn2" value="Cancel" />			
			</fieldset>	
		</div>
   <fieldset> <legend> LAN: </legend> 
<form id="lan51" action="master.php" method="post">	
	<?php
function lan51(){
	 global $con;  	global $data51; global $inc51;
	$sql= "SELECT * FROM lan WHERE item='51'";
		 $result= mysqli_query($con,$sql);
	       $row= mysqli_fetch_array($result);
	       $data51= $row['price'];
		   $inc51= $row['included'];
}
  lan51();
 
function updatelan51(){
	 global $con;
	if(isset($_POST['lan1']) || isset($_POST['supp1'])){
		$newprice= $_POST['lan1'];
	   	$newbox = $_POST['supp1'];	
	   
 $sql= "UPDATE lan SET price= $newprice , included= $newbox WHERE lan_id= '1' ";	   
	$result= mysqli_query($con,$sql);
	if(!$result){
  	echo"Update failed!";
  } 
} }
  updatelan51();
	?>
	(<51):<input type = "number" name= "lan1" value= "<?php echo $data51 ?>">
	Included:<input type = "number" name= "supp1" value= "<?php echo $inc51 ?>"> Hours onsite support.
	<input type = "submit" name="lan51" value = "save"><br>
<?php
  if(isset($_POST['lan51'])){
  	updatelan51();
  }
?>	
  </form>
<form id="lan101" action="master.php" method="post">  
<?php
 function lan101(){
 	 global $con;   global $data101; global $inc101;   
   $sql= "SELECT * FROM lan WHERE item='101'";
		 $result= mysqli_query($con,$sql);
	       $row= mysqli_fetch_array($result);
	       $data101= $row['price'];
		   $inc101= $row['included'];
 }
 
 lan101();
  
 function updatelan101(){
	 global $con;
	if(isset($_POST['lan2'])  ||  isset($_POST['supp2'])){
		$newprice= $_POST['lan2'];
	   	$newbox = $_POST['supp2'];	
	   
 $sql= "UPDATE lan SET price= $newprice , included= $newbox WHERE lan_id= '2' ";	   
	$result= mysqli_query($con,$sql);
	if(!$result){
  	echo"Update failed!";
  } 
} } 
 updatelan101();
 
?>
	(<101):<input type = "number" name= "lan2" value= "<?php echo $data101  ?>">
	Included:<input type = "number" name= "supp2" value= "<?php echo $inc101 ?>"> Hours onsite support.
	<input type = "submit" name="lan101" value = "save"><br>
    </form>
<form id="lan201" action="master.php" method="post">    
<?php
 function lan201(){
 	global $con;  global $data201; global $inc201; 
  $sql= "SELECT * FROM lan WHERE item='201'";
		 $result= mysqli_query($con,$sql);
	       $row= mysqli_fetch_array($result);
	       $data201= $row['price'];
		   $inc201= $row['included'];
 }
  lan201();
 
 function updatelan201(){
	 global $con;
	if(isset($_POST['lan3'])  || isset($_POST['supp3'])){
		$newprice= $_POST['lan3'];
	   	$newbox = $_POST['supp3'];	
	   
 $sql= "UPDATE lan SET price= $newprice , included= $newbox WHERE lan_id= '3' ";	   
	$result= mysqli_query($con,$sql);
	if(!$result){
  	echo"Update failed!";
  } 
} }
 
  updatelan201();
 
?>
	(<201):<input type = "number" name= "lan3" value= "<?php echo $data201  ?>">
	Included:<input type = "number" name= "supp3" value= "<?php echo $inc201 ?>"> Hours onsite support.
	<input type = "submit" name="lan201" value = "save"> <br>
 </form>
	</fieldset>
	<!-- This is the end of LAN -->
	
	<div id="sharing1">
		<fieldset> <legend> Filesharing:</legend>
	<?php
sharing();	
          echo"<label> Users: </label> ". $shr.".";
          echo"<label> Included: </label> ". $more."."."<br>";
		
	?>		
			
<input type="button" name="btn1" value="Edit" />
<input type="button" name="btn2" value="Cancel" />						
		</fieldset>	
	</div>
<form id="sharing" action="master.php" method="post">	
   <fieldset> <legend> Filesharing:  </legend>
	<?php
	function sharing(){
		global $con;  global $shr; global $more;
	$sql="SELECT * FROM filesharing";
	  $result= mysqli_query($con,$sql);
	       $row= mysqli_fetch_array($result);
	       $shr= $row['price'];
		   $more= $row['included'];
	}
 sharing();
 
 function updatesharing(){
	 global $con;
	if(isset($_POST['file']) || isset($_POST['share'])){
		$newprice= $_POST['file'];
	   	$newbox = $_POST['share'];	
	   
 $sql= "UPDATE filesharing SET price= $newprice , included= $newbox WHERE file_id= '1' ";	   
	$result= mysqli_query($con,$sql);
	if(!$result){
  	echo"Update failed!";
  } 
} }
  updatesharing();
	
	?>
	Users: <input type="number"  name="file" value= "<?php echo $shr  ?>">
	Included:<input type= "number" name= "share" value="<?php echo $more ?>"> GB Storage.
	<input type = "submit" name="shr" value = "save"><br>

<?php
  if(isset($_POST['shr'])){
  	updatesharing();
  }
?>	
	</fieldset>	
</form>	
	<!-- This is the end of File Sharing -->
	<div id="back1">
		<fieldset> <legend> Back-Up Servers:</legend>
	<?php
backserver();	
          echo"<label> Servers: </label> ". $serv.".";
          echo"<label> Included: </label> ". $incserv."."."<br>";
		
	?>		
			
<input type="button" name="btn1" value="Edit" />
<input type="button" name="btn2" value="Cancel" />						
		</fieldset>	
	</div>
<form id="backserv" action="master.php" method="post">	
 <fieldset> <legend> Back-up Servers:  </legend>
	<?php
 function backserver(){
 	global $con;   global $serv; global $incserv;
	$sql="SELECT * FROM backserv";
	  $result= mysqli_query($con,$sql);
	       $row= mysqli_fetch_array($result);
	       $serv= $row['price'];
		   $incserv= $row['included'];
 }
 backserver();
 
  function updatebackserver(){
  	global $con;
	if(isset($_POST['server']) || isset($_POST['back'])){
		$newprice= $_POST['server'];
	   	$newbox = $_POST['back'];	
	   
 $sql= "UPDATE backserv SET price= $newprice, included= $newbox WHERE serv_id= '1' ";	   
	$result= mysqli_query($con,$sql);
	if(!$result){
  	echo"Update failed!";
  } 
} }
  updatebackserver();
	?>
	Servers: <input type="number"  name="server" value= "<?php echo $serv ?>">
	Included:<input type= "number" name= "back" value= "<?php echo $incserv ?>"> GB Storage.
	<input type = "submit" name="serv" value = "save"> <br>
	<?php
	if(isset($_POST['serv'])){
		updatebackserver();
	}
	?>
  </fieldset>
</form>  
  <!-- This is the end of Back-up Servers -->
  <div id="backus1">
		<fieldset> <legend> User Back-Up:</legend>
	<?php
backus();	
          echo"<label> Users: </label> ". $backus.".";
          echo"<label> Included: </label> ". $us."."."<br>";
		
	?>		
			
<input type="button" name="btn1" value="Edit" />
<input type="button" name="btn2" value="Cancel" />						
		</fieldset>	
	</div>
  
<form id="backus" action="master.php" method="post">  
  <fieldset> <legend> User Back-up: </legend>
	<?php
 function backus(){
 	global $con; global $backus; global $us;   
	$sql= "SELECT * FROM backus";	
	  $result= mysqli_query($con,$sql);
	       $row= mysqli_fetch_array($result);
	       $backus= $row['price'];
		   $us= $row['included'];
 }
  backus();
  
 function updatebackus(){
 	global $con;
	if(isset($_POST['usrs'])|| isset($_POST['backus'])){
		$newprice= $_POST['usrs'];
	   	$newbox = $_POST['backus'];	
	   
 $sql= "UPDATE backus SET price= $newprice, included= $newbox WHERE usr_id= '1' ";
    $result= mysqli_query($con,$sql);	   
	if(!$result){
  	echo"Update failed!";
  } 
 } }
 updatebackus();
	?>
	Users: <input type="number"  name="usrs" value= "<?php echo $backus ?>">
	Included:<input type= "number" name= "backus" value= "<?php echo $us  ?>"> GB Storage.
	<input type = "submit" name="save"  value = "save"> <br>
<?php
  if(isset($_POST['save'])){
  	updatebackus();
  }

?>	
	</fieldset>  			
</form>	
</body>	
</html>	
	


 