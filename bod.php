<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style>
body{
background-color:#000000;
}
.lol{
margin-left:70px;
margin-top:50px;
color:#FFFFFF;
}
.los{
margin-top:30px;
margin-left:70px;
box
}

</style>
</head>

<body>
<!-- ======= Pricing Section ======= -->

      <div class="container" margin:auto;">
	  <div class="lol">
          <h2 ><b>Customer information</b></h2>
          <p><b>View orders</b></p>
      </div>
  <div class="container-fluid mt-5">
  <div class="row">
            <div class="d-flex" style="overflow: auto;">
                <div class="col-md-12">
				<center><table border="" cellpadding="15" cellspacing="0" width="90%" height="50px" class="table-bordered text-center" style="color:white;">
				 <thead style="background: #FFC700; color: white; border-style: 1px solid #FFC700; ">
<tr>
<td>S/N</td>
<td>item</td>
<td>quatity</td>
<td>price</td>
<td>Order id</td>
<td>Date</td>
<td>payment status</td>







 </thead>
                        <tbody>
						 

</tr><?php 
error_reporting(0);

$do=$_SESSION['hola'];
$x=1;
$hold = $_SESSION['nod'];
$cold=$_SESSION['dat'];
$dur=$_SESSION['ider'];
$tola=$_SESSION['dola'];
$rod=$_SESSION['dog'];
$foda=$_SESSION['dop'];
$doa=$_SESSION['boda'];
$day=$_POST['kay'];
include "connect_to_mysqli.php";

	$sqla = "SELECT * from kol where code='$dur' ";
			
		   $sqli2a = mysqli_query($con,$sqla);
			  
			   while($row = mysqli_fetch_array($sqli2a))
				    
					{
				       $mon= $row['id'];
					   $n1= $row['item'];
					    $n2= $row['quantity'];
						 $n3= $row['price'];
						  $n4= $row['code'];
						   $n5= $row['date'];
						    $n6= $row['status'];
				
				
			
					   
					   
                            echo"
							
	<tr>
	<td>".$x++."</td>
	
	<td>".$n1."</td>
	<td>".$n2."</td>
	<td>&#8358;".$n3.".00</td>
	<td>".$n4."</td>

	<td>".$n5."</td>
	<td>".$n6."</td>
	
	

	</tr>
	";
	}
	
	$_SESSION['koz']=$dur;
	?>
						

	
				</thead>
                        <tbody>
						</table>
						</center>
               </div>
			   </div>
			   </div>
			   </div>
			   </div>
			   </div>			  
						
</body>
</html>
