<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

<title>Untitled Document</title>
<style>
body{
background-color:#000000;
}
fieldset{
width:80%;
height:690px;
color:#FFFFFF;
background-color:#CCCCCC;
margin-top:70px;
}
#sho{
margin-top:20px;
margin-left:170px;
}
.n1{
margin-top:20px;
color:#000000;
}
.n2{
margin-top:30px;
font-size:21px;
color:#000000;
align:center;
}
.btn-buy{
border:1px solid black;
}
#id{
border:none;
}
.kol{
margin-top:60px;
}


</style>

</head>

<body>
<body onload="foLow()">
<div class="container">
<div class="row">
<div class="col-lg-6 col-md-6 col-xs-12"><fieldset>
<?php 
error_reporting(0);
include "connect_to_mysqli.php";
$x=1;
session_start();
$hold = $_SESSION['nod'];
$cold=$_SESSION['fola'];
$dur=$_SESSION['ider'];
$tola=$_SESSION['dola'];
$rod=$_SESSION['coda'];
$pod=$_SESSION['foxy'];
$ro=$_SESSION['cob'];
include "connect_to_mysqli.php";


	 $sqli = "SELECT sum(price) from kol where code='$rod'";
			
		   $sqli2 = mysqli_query($con,$sqli);
			  
			   while($row = mysqli_fetch_array($sqli2))
				    
					{
					$k=$row[0];
					$tot=$k;
					
					}  
					   
		
			
			 $sqli = "SELECT * from kol where code='$rod'";
			
		   $sqli2 = mysqli_query($con,$sqli);
			  
			   while($row = mysqli_fetch_array($sqli2))
				    
					{
				       $p1= $row['id']; 				
					  $p2=$row['name']; 
					  $p3=$row['mob'];
					   $p4=$row['email'];
					   $p5=$row['code'];
					   $p6=$row['item'];
					   $p7=$row['quatity'];
					   $p8=$row['price'];
					    $p9=$row['date'];
						 $p0=$row['status'];
						 
						
				
				if($p1!=""){
				
			 $sqla = "SELECT * from dos where code='$p5' ";
			
		   $sqli2a = mysqli_query($con,$sqla);
			  
			   while($row = mysqli_fetch_array($sqli2a))
				    
					{
				       $n1= $row['id']; 
				
			
					   }}
					   }
					   
					   
					   ?>
					   <div class="n1"><h2>Customer Information</h2></div>
					    <div class="n2">NAME:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" value="<?php echo $p2; ?>" name="s1" /></div>
					     <div class="n2">EMAIL:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" value="<?php echo $p4; ?>" name="" /></div>
						 <div class="n2">ORDER ID:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" value="<?php echo $p5; ?>" name="" /></div>
						 <div class="n2">TOTAL PRICE:&nbsp;&nbsp;&nbsp;<input type="text" value="&#8358;<?php echo $tot; ?>.00" name="" /></div>
						  <div class="n2">DATE:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" value="<?php echo $p9; ?>" name="s1" /></div>
					   
					   
					   </fieldset>
					   </div>
<div class="col-lg-6 col-md-6 col-xs-12">
<div class="food"></div>
<fieldset>
<input type="radio" name="gender" onClick="payLow()" value="Wallet phrase" style="color:#0000FF;" ><font color="#333333"><b>paystack</b></font><br />
<input type='radio' name="gender" onClick="loPond()" value="Wallet keystone" style="color:#0000FF;"><font color="#333333"><b>Bank transfer</b></font><br />
<input type='radio' name="gender" onClick="frofunction()" value="Private key" style="color:#0000FF;"><font color="#333333"><b>Bitcoin</b></font><br />


<div id="low"><br /> <center><font color="#000000"><b>ACCOUNT 1</b></font></font><br/><font size="5px" font color="#0000FF">Account Name: Joseph Wealth Plc<br/>Account Number: 2221932539<br /> Bank Name: United Bank Of Africa (U.B.A)<br/><br/></font><form method="post" action="loc.php"><input type="text" value="<?php echo $p1; ?>" name="id" hidden/><font color="#000000"><h3>Step-2</h3></font><br /><font color="#0000FF"><h5>Upon payment been paid procced to the paid to submit your details and proof of your payment and wait while your payment is being confirm...<br /><br /><button >submit proof</button></h5></font></form></div></center>


<div id="kol"><br /><center><h6><img src="bit.jpeg"/> <br /><br /><input type="text" value="1bo5DfPArVPX9RBbmgoHQFvhFD1BeVriY" id="myInput" readonly/> <button onClick="myFunction()" class="btn-buy">Copy Wallet Address</button> </h6><form method="post" action="loc.php">	<input type="text" class="form-control" name="dan" value="<?php echo $tot ; ?>"  /><br><font color="#000000"><h3>Step-2</h3></font><br /><font color="#0000FF"><h5>Upon payment been paid procced to the paid to submit your details and proof of your payment and wait while your payment is being confirm...<br /><br /><button >submit proof</button></h5></font></form></div></center>
<script>
function myFunction() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}
</script>

</fieldset>
<div id="sho"><form><button type="submit" name="">Continue</button></form></div>
</div>
</div>
</div>

<script>
function foLow(){
document.getElementById('sho').style.display="none";
document.getElementById('low').style.display="none"
document.getElementById('kol').style.display="none"



}

</script>
<script>
function payLow(){
document.getElementById('sho').style.display="block";
document.getElementById('low').style.display="none"
document.getElementById('kol').style.display="none"

}

</script>
<script>
function loPond(){
document.getElementById('sho').style.display="none";
document.getElementById('low').style.display="block"
document.getElementById('kol').style.display="none"
}

</script>
<script>
function frofunction(){
document.getElementById('sho').style.display="none";
document.getElementById('low').style.display="none"
document.getElementById('kol').style.display="block"
}

</script>
</script>
   
  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

</script>
