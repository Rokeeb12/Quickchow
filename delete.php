<?php
include "connect_to_mysqli.php";
if(isset($_POST['dat'])){
$das =$_POST['dat'];
$query = "DELETE FROM kod WHERE id='$das'"; 
$result = mysqli_query($con,$query) or die ( mysqli_error($con));
header("Location: view.php"); 
}
?>
