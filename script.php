<?php>
//count number of item 
$res = $con->query("SELECT COUNT(*) AS total FROM enter WHERE code='$dur'");
$row = $res->fetch_assoc();
$tom = $row['total'] ?? 0; 
prepared statement
    
$stmt = $con->prepare(""SELECT COUNT(*) AS total FROM enter WHERE code = ?");
$stmt->bind_param("s", $dur);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$tot = $row['total_quantity'] ?? 0; 
$stmt->close();
///////////////////////////////////////////////////////////////////
//to sum the total number of product
$res = $con->query("SELECT SUM(quantity) AS total FROM pak WHERE cod='$dur'");
$row = $res->fetch_assoc();
$toc = $row['total'] ?? 0;
//prepared statement
    
$stmt = $con->prepare("SELECT SUM(quantity) AS total_quantity FROM pak WHERE cod = ?");
$stmt->bind_param("s", $deal);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$tot = $row['total_quantity'] ?? 0; 
$stmt->close();
///////////////////////////////////////////////////////////////////
//to loop out product from databse
$stmt = $con->prepare("SELECT * FROM kod ");


  
 

   
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
    
    ///////////////////////////////////////////////////////////////////
    to delete a row from database
      $stmt = $con->prepare("DELETE FROM enter WHERE id = ? AND item = ? AND code= ? ");
  $stmt->bind_param("sss", $dad, $dak, $das);
   if( $stmt->execute()){
            header("Location: order5.php");
            exit();
        } 
	///////////////////////////////////////////////////////////////////
    to update 
    // Prepare the statement
$stmt = $con->prepare("UPDATE plan SET status = ? WHERE code = ?");

if ($stmt) {
 
     "ss" = both are strings (use "i" for integer, "d" for double)
    $stmt->bind_param("ss", $kad, $kol);

    // Execute
    if ($stmt->execute()) {
        echo "Update successful!";
    } else {
        echo "Error executing query: " . $stmt->error;
    }

    // Close
    $stmt->close();
} 

$stmt = $con->prepare("UPDATE dat SET quantity = ? WHERE stat = ?");
$stmt->bind_param("is", $tot, $deal);
$stmt->execute();
$stmt->close();
///////////////////////////////////////////////////////////////////
to INSERT

$stmt = $con->prepare("INSERT INTO pak (quantity, item, cod, pod) VALUES (?, ?, ?, ?)");
$stmt->bind_param("isss", $first, $name, $deal, $dok);
$stmt->execute();
$stmt->close();
$cod = "BP".$randomString = substr(md5(microtime()), 0, 7);


    $stmt = $con->prepare("INSERT INTO enter (quantity, code, date, item, price, status, stat, quan2) 
                           VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

    if ($stmt) {

        $quan2 = ''; 

 
        $stmt->bind_param("ssssssss", $first, $deal, $deat, $name, $ola, $status, $email, $cod);

        if ($stmt->execute()) {
    
            header("Location: order5.php");
            session_start(); 
			$_SESSION['id']=$cod;
            exit();
        } 

  
}



///////////////////////////////////////////////////////////////////
to insert to multiple table
  $stmt = $con->prepare("INSERT INTO nadd (email, password, past, status, code, user) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $email, $hashedPassword, $hashedPasswordd, $status, $code, $userCode);

    if ($stmt->execute()) {
     
 
          
        // Insert into 'madd' table
        $amount = '0.00';
        $today = date("Y-m-d");
        $total = '0.00';
        $purchase = '0';
        $rented = '0';
$type = "";      // empty string
$amount2 = "";    // empty string
$title = "";     // empty string
$ref = "";  
        $stmt2 = $con->prepare("INSERT INTO madd (amount, date, total, code, purchase, rented) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt2->bind_param("ssssss", $amount, $today, $total, $code, $purchase, $rented);
        $stmt2->execute();
        $stmt2->close();

         $stmt3 = $con->prepare("INSERT INTO format (type, amount, title, ref, code) VALUES (?, ?, ?, ?, ?)");
        $stmt3->bind_param("sssss",  $type, $amount2, $title, $ref, $code);
        $stmt3->execute();
        $stmt3->close();

       
header("Location: dashboard.php");
    $_SESSION['codd']=$code;
       

    } else {
        echo '<script>alert("Registration failed. Try again."); window.location.href = "for.php";</script>';
        exit();
    }

    $stmt->close();
    $con->close();
} else {
    // Invalid access
    header("Location: form.php");
    exit();
}
?>
///////////////////////////////////////////////////////////////////
// ?>