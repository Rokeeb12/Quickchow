<?php


$sql = "SELECT id FROM enter WHERE code = ?"; 
$stmt = $con->prepare($sql);



$stmt->bind_param("s", $dur);
if (!$stmt->execute()) {
    die("Execute failed: " . $stmt->error);
}

$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $so = []; // Array to store unique item_ids
    while ($row = $result->fetch_assoc()) {
        $so[] = $row['id']; // Collect all item_ids
       
    }
  $stmt->close(); 
} 



?>