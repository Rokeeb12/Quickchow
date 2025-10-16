<?php
header('Content-Type: application/json');
include "connect_to_mysqli.php";

$response = [
    'success' => false,
    'total' => 0,
    'item_quantity' => 0,
    'item_name' => ''
];

if (!empty($_POST['item']) && !empty($_POST['code']) && !empty($_POST['id']) && !empty($_POST['status'])) {
   

    $item  = $_POST['item'];
    $code  = $_POST['code'];
    $packId = (int)$_POST['id'];    
     $status = $_POST['status'];
 
  $delStmt = $con->prepare("
    DELETE FROM enter
    WHERE code = ? AND item = ?
    ORDER BY id DESC
    LIMIT 1
");
$delStmt->bind_param("ss", $code, $item);



  
   
if ($delStmt->execute()) {

    $q1 = $con->prepare("SELECT SUM(quantity) AS item_qty FROM enter WHERE code = ? AND item = ?");
    $q1->bind_param("ss", $code, $item);
    $q1->execute();
    $item_qty = (int)$q1->get_result()->fetch_assoc()['item_qty'];
    $q1->close();

  
    $q2 = $con->prepare("SELECT id FROM enter WHERE code = ? AND item = ? ORDER BY id DESC LIMIT 1");
    $q2->bind_param("ss", $code, $item);
    $q2->execute();
    $newId = ($q2->get_result()->fetch_assoc())['id'] ?? null;
    $q2->close();

  
    $q3 = $con->prepare("SELECT SUM(quantity) AS total_qty FROM enter WHERE code = ?");
    $q3->bind_param("s", $code);
    $q3->execute();
    $total = (int)$q3->get_result()->fetch_assoc()['total_qty'];
    $q3->close();

  
    $q2 = $con->prepare("SELECT status FROM plan WHERE code = ? ");
    $q2->bind_param("s", $code);
    $q2->execute();
    $status = ($q2->get_result()->fetch_assoc())['status'] ?? null;
    $q2->close();


        
     
    $q3 = $con->prepare("SELECT SUM(verify) AS verd
                             FROM enter WHERE code = ?");
        $q3->bind_param("s", $code);
        $q3->execute();
        $verify = (int)$q3->get_result()->fetch_assoc()['verd'];
        $q3->close();
       


    $response = [
        'success'        => true,
         'item_verify' =>    $verify,
        'item_quantity'  => $item_qty,
        'total'          => $total,
        'new_item_id'    => $newId,       
        'item_code'      => $code,
        'item_name'      => $item
      
    ];
}

    $delStmt->close();
}

echo json_encode($response);
exit;
