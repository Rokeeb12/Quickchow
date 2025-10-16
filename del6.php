
<?php
include "connect_to_mysqli.php";
error_reporting(E_ALL);
ini_set('display_errors',0);
if (isset($_POST['pox'])) {
    $das = $_POST['pox'];
	$dad = $_POST['tox'];
    $dak = $_POST['cox'];
    $m2 = $_POST['n2'];
    $m3 = $_POST['n3'];
     $m4 = $_POST['n4'];
    $m5 = $_POST['n5'];
    $m6 = $_POST['n6'];
    $m7 = $_POST['n7'];
    $m8 = $_POST['n8'];
    $m9 = $_POST['n9'];
    
    
    $for = 'active';

    $ba=2;
    $ca=3;
    $da=4;
    $fa=5;

$stmt = $con->prepare("SELECT status FROM plan WHERE code = ?");
    if ($stmt) {
        $stmt->bind_param("s", $das);
        $stmt->execute();
        $result = $stmt->get_result();
     
        if ($row = $result->fetch_assoc()) {
            $cap = $row['status'];
			 
        }
        $stmt->close();
    } else {
        die("Failed to prepare plan query: " . $con->error);
    }

   
    $stmt = $con->prepare("SELECT status FROM dat WHERE stat = ? AND cod = ?  ");

if ($stmt) {
   
    $stmt->bind_param("ss", $das, $ba); 

    $stmt->execute();

  
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        $bon = $row['status'];
    
    }
  }

$stmt = $con->prepare("SELECT status FROM dat WHERE stat = ? AND cod = ?  ");

if ($stmt) {
   
    $stmt->bind_param("ss", $das, $ca); 

    $stmt->execute();

  
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        $don = $row['status'];
    
    }
  }
$stmt = $con->prepare("SELECT status FROM dat WHERE stat = ? AND cod = ?  ");

if ($stmt) {
   
    $stmt->bind_param("ss", $das, $da); 

    $stmt->execute();

  
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        $fon = $row['status'];
    
    }
  }

  $stmt = $con->prepare("SELECT status FROM dat WHERE stat = ? AND cod = ?  ");

if ($stmt) {
   
    $stmt->bind_param("ss", $das, $fa); 

    $stmt->execute();

  
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        $gon = $row['status'];
    
    }
  }
    if ($cap === $for) {


          $stmt = $con->prepare("DELETE FROM enter WHERE id = ? AND item = ? AND code= ? ");
  $stmt->bind_param("sss", $dad, $dak, $das);
   if( $stmt->execute()){
            header("Location: order6.php");
            exit();
        } 
	}
    
    if ($bon === $for) {
        $po=2;
      
          $stmt = $con->prepare("DELETE FROM pak WHERE id = ? AND item = ? AND cod = ? ");
  $stmt->bind_param("sss", $m2, $m3, $das);
    $stmt->execute();
    $stmt->close();
    
    
    $stmt = $con->prepare("SELECT SUM(quantity) AS total_quantity FROM pak WHERE num = ? AND cod = ? ");
$stmt->bind_param("ss", $po,$das);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$tot = $row['total_quantity'] ?? 0; 
$stmt->close();
    
        $stmt2 = $con->prepare("UPDATE dat SET quantity =? WHERE  cod = ? AND stat = ? ");
$stmt2->bind_param("iss",  $tot,$po,$das);
$stmt2->execute();
$stmt2->close();
 header("Location: order6.php");
            exit();
	}

     if ($don === $for) {
        $fo=3;
      
          $stmt = $con->prepare("DELETE FROM pak WHERE id = ? AND item = ? AND cod = ? ");
  $stmt->bind_param("sss", $m4, $m5, $das);
    $stmt->execute();
    $stmt->close();
    
    
    $stmt = $con->prepare("SELECT SUM(quantity) AS total_quantity FROM pak WHERE num = ? AND cod = ? ");
$stmt->bind_param("ss", $fo,$das);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$tot = $row['total_quantity'] ?? 0; 
$stmt->close();
    
        $stmt2 = $con->prepare("UPDATE dat SET quantity =? WHERE  cod = ? AND stat = ? ");
$stmt2->bind_param("iss",  $tot,$fo,$das);
$stmt2->execute();
$stmt2->close();
 header("Location: order6.php");
            exit();
	}
    
     if ($fon === $for) {
        $go=4;
      
          $stmt = $con->prepare("DELETE FROM pak WHERE id = ? AND item = ? AND cod = ? ");
  $stmt->bind_param("sss", $m6, $m7, $das);
    $stmt->execute();
    $stmt->close();
    
    
    $stmt = $con->prepare("SELECT SUM(quantity) AS total_quantity FROM pak WHERE num = ? AND cod = ? ");
$stmt->bind_param("ss", $go,$das);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$tot = $row['total_quantity'] ?? 0; 
$stmt->close();
    
        $stmt2 = $con->prepare("UPDATE dat SET quantity =? WHERE  cod = ? AND stat = ? ");
$stmt2->bind_param("iss",  $tot,$go,$das);
$stmt2->execute();
$stmt2->close();
 header("Location: order6.php");
            exit();
	}

     if ($gon === $for) {
        $vo=5;
      
          $stmt = $con->prepare("DELETE FROM pak WHERE id = ? AND item = ? AND cod = ? ");
  $stmt->bind_param("sss", $m8, $m9, $das);
    $stmt->execute();
    $stmt->close();
    
    
    $stmt = $con->prepare("SELECT SUM(quantity) AS total_quantity FROM pak WHERE num = ? AND cod = ? ");
$stmt->bind_param("ss", $vo,$das);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$tot = $row['total_quantity'] ?? 0; 
$stmt->close();
    
        $stmt2 = $con->prepare("UPDATE dat SET quantity =? WHERE  cod = ? AND stat = ? ");
$stmt2->bind_param("iss",  $tot,$vo,$das);
$stmt2->execute();
$stmt2->close();
 header("Location: order6.php");
            exit();
	}
    else{
       echo  header("Location: order6.php");
    }
    
}

?>

