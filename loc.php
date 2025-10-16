
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
height:850px;
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
<div c<div class="col-lg-12 col-md-12 col-xs-12">
<div class="food"></div>
<fieldset>
<h2><font color="#000000">Submit payment proof</font></h2><BR />
<input type='radio' name="gender" onClick="loPond()" value="Wallet keystone" style="color:#0000FF;"><font color="#333333"><b>Bank transfer</b></font>
<input type='radio' name="gender" onClick="frofunction()" value="Private key" style="color:#0000FF;"><font color="#333333"><b>Bitcoin</b></font>
<div id="low">
<?php 
error_reporting(0);
include "connect_to_mysqli.php";
session_start();
$rod=$_SESSION['coda'];
if(isset($_POST['id'])){
$fox=$_POST['id'];



	 $sqli = "SELECT sum(price) from kol where code='$rod'";
			
		   $sqli2 = mysqli_query($con,$sqli);
			  
			   while($row = mysqli_fetch_array($sqli2))
				    
					{
					$k=$row[0];
					$tot=$k;
					
					}  
					   
					 $sqli = "SELECT sum(quantity) from kol where code='$rod'";
			
		   $sqli2 = mysqli_query($con,$sqli);
			  
			   while($row = mysqli_fetch_array($sqli2))
				    
					{
					$k=$row[0];
					$tok=$k;
					
					}  
		
					
			
			 $sqli = "SELECT * from kol where id='$fox'" ;
			
		   $sqli2 = mysqli_query($con,$sqli);
			  
			   while($row = mysqli_fetch_array($sqli2))
				    
					{
				       $p1= $row['code']; 	
					    $p2= $row['id']; 			 
					  $p3=$row['bank'];
					   $p4=$row['bit'];
					   $p5=$row['about'];
					   $p6=$row['img'];
					   $p7=$row['time'];
					   
					   }

					   
			 $sqli = "SELECT all* from kol where id='$fox' " ;
			
		   $sqli2 = mysqli_query($con,$sqli);
			  
			   while($row = mysqli_fetch_array($sqli2))
				    
					{
				       $b1= $row['item']; 	
					    
					   
					   }
					   }
					   
					   ?>
					   <form method="post" action="koj.php">
					   	<input type="text" class="form-control" name="fan" value="<?php echo $tot; ?>"  /><br>
							<input type="text" class="form-control" name="can" value="<?php echo $tok; ?>"  /><br>
							<input type="text" class="form-control" name="can" value="<?php echo $dod; ?>"  /><br>
					    <div class="n2"> <div class="n2">ACCOUNT NAME:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" value="<?php echo $p3; ?>" name="s1" /></div>
					     <div class="n2">ACCOUNT NUMBER:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" value="<?php echo $p4; ?>" name="s2" /></div>
						 <div class="n2">BANK NAME:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" value="<?php echo $p5; ?>" name="s3" /></div>
						 
						  <div class="n2">PAYMENT PROOF/DEBIT ALERT:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="file" value="<?php echo $p6; ?>" name="s4" /></div> <div class="n2">TIME:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" value="<?php echo $p7; ?>" name="s5" /></div> <div class="n2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" value="<?php echo $p1; ?>"   name="n8" hidden/></div><div class="n2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="">submit</button></div></form></div>
						  
<div id="kol"></div>
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
<div id="sho"></div>
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
