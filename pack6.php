<?php 
include "connect_to_mysqli.php";
if(isset($_POST['cod'])){
$kol=$_POST['cod'];
$kod=$_POST['zop'];
$kor=$_POST['pop'];

$bad='inactive';
 $kad='active';




 if($kor==='2') {                

$insert = mysqli_query($con,"UPDATE dat SET status='$kad' where  stat='$kol' AND cod='2'  ") or die ('Could not connect: ' .mysqli_error($con)); 
$insert = mysqli_query($con,"UPDATE plan SET status='$bad' where  code='$kol'  ") or die ('Could not connect: ' .mysqli_error($con)); 
$insert = mysqli_query($con,"UPDATE dat SET status='$bad' where  stat='$kol' AND cod='3'  ") or die ('Could not connect: ' .mysqli_error($con)); 	
$insert = mysqli_query($con,"UPDATE dat SET status='$bad' where  stat='$kol' AND cod='4'  ") or die ('Could not connect: ' .mysqli_error($con)); 
$insert = mysqli_query($con,"UPDATE dat SET status='$bad' where  stat='$kol' AND cod='5'  ") or die ('Could not connect: ' .mysqli_error($con)); 				 
			 header("location:order6.php");
}
 if($kor==='3') {                

$insert = mysqli_query($con,"UPDATE dat SET status='$kad' where  stat='$kol' AND cod='3'  ") or die ('Could not connect: ' .mysqli_error($con)); 
$insert = mysqli_query($con,"UPDATE plan SET status='$bad' where  code='$kol'  ") or die ('Could not connect: ' .mysqli_error($con)); 
$insert = mysqli_query($con,"UPDATE dat SET status='$bad' where  stat='$kol' AND cod='2'  ") or die ('Could not connect: ' .mysqli_error($con)); 	
$insert = mysqli_query($con,"UPDATE dat SET status='$bad' where  stat='$kol' AND cod='4'  ") or die ('Could not connect: ' .mysqli_error($con)); 
$insert = mysqli_query($con,"UPDATE dat SET status='$bad' where  stat='$kol' AND cod='5'  ") or die ('Could not connect: ' .mysqli_error($con)); 				 
			 header("location:order6.php");
}
 if($kor==='4') {                

$insert = mysqli_query($con,"UPDATE dat SET status='$kad' where  stat='$kol' AND cod='4'  ") or die ('Could not connect: ' .mysqli_error($con)); 
$insert = mysqli_query($con,"UPDATE plan SET status='$bad' where  code='$kol'  ") or die ('Could not connect: ' .mysqli_error($con)); 
$insert = mysqli_query($con,"UPDATE dat SET status='$bad' where  stat='$kol' AND cod='2'  ") or die ('Could not connect: ' .mysqli_error($con)); 	
$insert = mysqli_query($con,"UPDATE dat SET status='$bad' where  stat='$kol' AND cod='3'  ") or die ('Could not connect: ' .mysqli_error($con)); 
$insert = mysqli_query($con,"UPDATE dat SET status='$bad' where  stat='$kol' AND cod='5'  ") or die ('Could not connect: ' .mysqli_error($con)); 				 
			 header("location:order6.php");
}
 if($kor==='5') {                

$insert = mysqli_query($con,"UPDATE dat SET status='$kad' where  stat='$kol' AND cod='5'  ") or die ('Could not connect: ' .mysqli_error($con)); 
$insert = mysqli_query($con,"UPDATE plan SET status='$bad' where  code='$kol'  ") or die ('Could not connect: ' .mysqli_error($con)); 
$insert = mysqli_query($con,"UPDATE dat SET status='$bad' where  stat='$kol' AND cod='2'  ") or die ('Could not connect: ' .mysqli_error($con)); 	
$insert = mysqli_query($con,"UPDATE dat SET status='$bad' where  stat='$kol' AND cod='3'  ") or die ('Could not connect: ' .mysqli_error($con)); 
$insert = mysqli_query($con,"UPDATE dat SET status='$bad' where  stat='$kol' AND cod='4'  ") or die ('Could not connect: ' .mysqli_error($con)); 				 
			 header("location:order6.php");
}
else{
 header("location:order6.php");	
}
}


?>
