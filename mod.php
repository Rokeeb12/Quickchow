<?php 
if(isset($_POST['name'])){
$first=$_POST['name'];
$user=$_POST['quan'];
$gog=$_POST['amount'];
$dog=$_POST['amon'];
$file1Name= basename($_FILES["file1"]["name"]);
$file2Name= basename($_FILES["file2"]["name"]);
$file3Name= basename($_FILES["file3"]["name"]);




$status="custotmer";
 	




//$u_agree=$_POST['u_agree'];


include "connect_to_mysqli.php";



//$dateline=time();
		
$mail_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
   $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
   $string_exp = "/^[A-Za-z .'-]+$/";
    
  if($_POST['name']== "" || $_POST['quan'] == "")
 {
echo"you must fill the empty field";

 }
 

 
			   
		else  {					 
		$extract_user = mysqli_query($con,"SELECT * FROM kod WHERE name='$first'");
		$count = mysqli_num_rows($extract_user);
		
		 if ($count > 0) {
					echo '<script>alert("food name already exist. Please try again");window.location.href = "view.php";</script>';
		                 }
		
						 
		
		else 
				    
					{
					$code = "DC".$randomString = substr(md5(microtime()), 0, 7);	
					
					$dear=date("Y-m-d"); // current date
					 //submit to user table
					   $submit = mysqli_query($con,"insert into kod(name,age,code,status,filename,price,File1,file2, date,pack) values ('$first','$user','$code', '$status','".$file1Name."','$gog', '".$file2Name."','".$file3Name."', '$dear','$dog')") or die ('Could not connect: ' .mysqli_error($con));
				
   $statusMsg = '';

// File upload path
$targetDir ="lists/";
$fileName = basename($_FILES["file1"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

 if(isset($_POST["submit"]) && !empty($_FILES["file1"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
     // Upload file to server
     if(move_uploaded_file($_FILES["file1"]["tmp_name"], $targetFilePath)){
     // Insert image file name into database
   
 }}}

 	// File upload path
$targetDir ="file1/";
$fileName = basename($_FILES["file2"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

 if(isset($_POST["submit"]) && !empty($_FILES["file2"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
     // Upload file to server
     if(move_uploaded_file($_FILES["file2"]["tmp_name"], $targetFilePath)){
     // Insert image file name into database
    
 }}}
// File upload path
$targetDir ="file2/";
$fileName = basename($_FILES["file3"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

 if(isset($_POST["submit"]) && !empty($_FILES["file3"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
     // Upload file to server
     if(move_uploaded_file($_FILES["file3"]["tmp_name"], $targetFilePath)){
    
 }}}

 	
 	
 		 echo  header("location:view.php");		
					    
						
					   
					 
		
							   
					   
					   	 
					 session_start(); 
					
$_SESSION['code']=$code;						
$_SESSION['user']=$_POST['fame'];
$_SESSION['past']=$_POST['age'];
$_SESSION['img']=$_POST['img'];				  
					 								 
								 
     
	 	 
					
									 
						
						 
						 

}
}

}
















	?>