
<?php
include "connect_to_mysqli.php";

if (isset($_POST['n1'])) {
    
      $m1 = $_POST['n1'];
       $m2 = $_POST['n2'];
    	$m3 = $_POST['n3'];
    
    
 
    $for = 'active';

    $ba=1;

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

   
    $stmt = $con->prepare("SELECT  status FROM dat WHERE stat = ? AND cod = ?  ");

if ($stmt) {
   
    $stmt->bind_param("ss", $m1, $ba); 

    $stmt->execute();

  
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        $bon = $row['status'];
    
    }
  }



    if ($cap === $for) {
          $stmt = $con->prepare("DELETE FROM enter WHERE id = ? AND item = ? AND code= ? ");
  $stmt->bind_param("sss", $dad, $dak, $das);
   if( $stmt->execute()){
            header("Location: order5.php");
            exit();
        } 
	}
    
    if ($bon === $for) {
          $stmt = $con->prepare("DELETE FROM pak WHERE id = ? AND item = ? AND cod = ? ");
  $stmt->bind_param("sss", $m2, $m3, $m1);
  
   if( $stmt->execute()){
            header("Location: order5.php");
            exit();
        } 
	}
}

?>

