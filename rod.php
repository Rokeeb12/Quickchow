
<?php

include "connect_to_mysqli.php";
ini_set('display_errors',0);




if(isset($_POST['nub'])){
$first=trim($_POST['nub']);
$name=trim($_POST['dod']);
$deat=trim($_POST['tod']);
$idea=trim($_POST['code']); 
$deal=trim($_POST['cod']);
$dal=trim($_POST['pop']);	  
 $pic=trim($_POST['vop']);	  
$status="pending";
 $bo=2;
 $co=3;
 $po=4;
 $ko=5;
 
 
 
 $stmt = $con->prepare("SELECT * FROM kod WHERE code = ?");

if ($stmt) {
  
    $stmt->bind_param("s", $idea); 

   
    $stmt->execute();

   
    $result = $stmt->get_result();


    while ($row = $result->fetch_assoc()) {
        $id = $row["id"];
        $name = $row['name'];
        $user = $row['age'];
        $email = $row['code'];
        $all = $row['price'];
        $wee = 'lists/' . $row['filename'];

     
    }


    $stmt->close();
} 


					



$stmt = $con->prepare("SELECT status FROM plan WHERE code = ?");

if ($stmt) {

    $stmt->bind_param("s", $deal);


    $stmt->execute();


    $result = $stmt->get_result();

   
    while ($row = $result->fetch_assoc()) {
        $kos = $row['status'];
      
    }

 
    $stmt->close();
}


$stmt = $con->prepare("SELECT status FROM dat WHERE stat = ? and cod = ?");

if ($stmt) {
   
    $stmt->bind_param("ss", $deal, $bo); 

    $stmt->execute();

  
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        $bod = $row['status'];
  
    }
    
$stmt = $con->prepare("SELECT cod FROM dat WHERE stat = ? and cod = ?");

if ($stmt) {
   
    $stmt->bind_param("ss", $deal,$bo); 

    $stmt->execute();

  
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        $car = $row['cod'];
  
    }
}

$stmt = $con->prepare("SELECT status FROM dat WHERE stat = ? and cod = ?");

if ($stmt) {
   
    $stmt->bind_param("ss", $deal, $co); 

    $stmt->execute();

  
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        $bod2 = $row['status'];
  
    }
    

    


    $stmt->close();
}
$stmt = $con->prepare("SELECT cod FROM dat WHERE stat = ? and cod = ?");

if ($stmt) {
   
    $stmt->bind_param("ss", $deal,$co); 

    $stmt->execute();

  
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        $car2 = $row['cod'];
  
    }
}

$stmt = $con->prepare("SELECT status FROM dat WHERE stat = ? and cod = ?");

if ($stmt) {
   
    $stmt->bind_param("ss", $deal, $po); 

    $stmt->execute();

  
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        $bod3 = $row['status'];
  
    }
    

    


    $stmt->close();
}
$stmt = $con->prepare("SELECT cod FROM dat WHERE stat = ? and cod = ?");

if ($stmt) {
   
    $stmt->bind_param("ss", $deal,$po); 

    $stmt->execute();

  
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        $car3 = $row['cod'];
  
    }
    
    $stmt->close();
}
$stmt = $con->prepare("SELECT status FROM dat WHERE stat = ? and cod = ?");

if ($stmt) {
   
    $stmt->bind_param("ss", $deal, $ko); 

    $stmt->execute();

  
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        $bod4 = $row['status'];
  
    }
    
 $stmt->close();
}
$stmt = $con->prepare("SELECT cod FROM dat WHERE stat = ? and cod = ?");

if ($stmt) {
   
    $stmt->bind_param("ss", $deal,$ko); 

    $stmt->execute();

  
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        $car4 = $row['cod'];
  
    }
    
    $stmt->close();
}
            $daz='active';
			$pay=$user-$first;
			$ola=$first*$all;
			$deat=date("Y-m-d"); 
	
			
				if($user<$first){
                 echo '<script>alert("stock not available");window.location.href = "order5.php";</script>';
            }
			
			
			
if ($kos === 'active') {

$cod = "BP".$randomString = substr(md5(microtime()), 0, 7);


    $stmt = $con->prepare("INSERT INTO enter (quantity, code, date, item, price, status, stat, quan2,file) 
                           VALUES (?, ?, ?, ?, ?, ?, ?, ?,?)");

    if ($stmt) {

        $quan2 = ''; 

 
        $stmt->bind_param("sssssssss", $first, $deal, $deat, $name, $ola, $status, $email, $cod,$pic);

        if ($stmt->execute()) {
       

			
} 

  
}
}
if ($bod === 'active') {
    $dok = "item";


$stmt = $con->prepare("INSERT INTO pak (quantity, item, cod, pod,num,file,price) VALUES (?, ?, ?, ?, ?,?,?)");
$stmt->bind_param("sssssss",  $first, $name, $deal, $dok,$car,$pic,$ola);
$stmt->execute();		
$stmt->close();



$stmt = $con->prepare("SELECT SUM(quantity) AS total_quantity FROM pak WHERE num = ? AND cod = ? ");
$stmt->bind_param("ss", $bo,$deal);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$tot = $row['total_quantity'] ?? 0; 
$stmt->close();


$stmt2 = $con->prepare("UPDATE dat SET quantity = ? WHERE cod = ? AND stat = ? ");
$stmt2->bind_param("iss", $tot, $bo,$deal);
$stmt2->execute();
$stmt2->close();




	
			 header("location:order5.php");
					   



			
		   			  
					 
					}	  
				if ($bod2 === 'active') {
    $dok = "item";


$stmt = $con->prepare("INSERT INTO pak ( quantity, item, cod, pod,num,file,price) VALUES (?, ?, ?, ?, ?,?,?)");
$stmt->bind_param("sssssss",  $first, $name, $deal, $dok,$car2,$pic,$ola);
$stmt->execute();		
$stmt->close();



$stmt = $con->prepare("SELECT SUM(quantity) AS total_quantity FROM pak WHERE num = ? AND cod = ? ");
$stmt->bind_param("ss",  $co,$deal);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$tot = $row['total_quantity'] ?? 0; 
$stmt->close();


$stmt2 = $con->prepare("UPDATE dat SET quantity = ? WHERE  cod = ? AND stat = ? ");
$stmt2->bind_param("iss", $tot, $co,$deal);
$stmt2->execute();
$stmt2->close();




	
			 header("location:order5.php");
					   



			
		   			  
					 
					}	  
				if ($bod3 === 'active') {
    $dok = "item";


$stmt = $con->prepare("INSERT INTO pak ( quantity, item, cod, pod,num,file,price) VALUES (?, ?, ?, ?, ?,?,?)");
$stmt->bind_param("sssssss", $first, $name, $deal, $dok,$car3,$pic,$ola);
$stmt->execute();		
$stmt->close();



$stmt = $con->prepare("SELECT SUM(quantity) AS total_quantity FROM pak WHERE   num = ? AND cod = ? ");
$stmt->bind_param("ss",  $po,$deal);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$tot = $row['total_quantity'] ?? 0; 
$stmt->close();


$stmt2 = $con->prepare("UPDATE dat SET quantity = ? WHERE  cod = ? AND stat = ? ");
$stmt2->bind_param("iss", $tot, $po,$deal);
$stmt2->execute();
$stmt2->close();




	
			 header("location:order5.php");
					   



			
		   			  
					 
					}	  
				
					   if ($bod4 === 'active') {
    $dok = "item";


$stmt = $con->prepare("INSERT INTO pak ( quantity, item, cod, pod,num,file,price) VALUES (?, ?, ?, ?, ?,?,?)");
$stmt->bind_param("sssssss",  $first, $name, $deal, $dok,$car4,$pic,$ola);
$stmt->execute();		
$stmt->close();



$stmt = $con->prepare("SELECT SUM(quantity) AS total_quantity FROM pak WHERE   num = ? AND cod = ? ");
$stmt->bind_param("ss",  $ko,$deal);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$tot = $row['total_quantity'] ?? 0; 
$stmt->close();


$stmt2 = $con->prepare("UPDATE dat SET quantity = ? WHERE  cod = ? AND stat = ? ");
$stmt2->bind_param("iss", $tot,$ko,$deal);
$stmt2->execute();
$stmt2->close();




	
			 header("location:order5.php");
					   



			
		   			  
					 
					}	  
				
					   

					   

		   			  
					 
					}	  
				
                }
        
		  	  ?>