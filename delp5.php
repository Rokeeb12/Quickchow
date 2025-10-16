<?php
header('Content-Type: application/json');
include "connect_to_mysqli.php";

$response = [
    'success' => false,
    'total' => 0,
    'item_quantity' => 0,
    'item_name' => ''
];

if (!empty($_POST['item']) && !empty($_POST['code']) && !empty($_POST['id'])) {


    $item      = $_POST['item'];
    $code  = $_POST['code'];
    $packId    = $_POST['id'];    
   
    $ga=5;
 $delStmt = $con->prepare("
    DELETE FROM pak
    WHERE cod = ? AND item = ? AND  num=?
    ORDER BY id DESC
    LIMIT 1
");
$delStmt->bind_param("ssi", $code, $item,$ga);
   
if ($delStmt->execute()) {
 
    $q1 = $con->prepare("SELECT SUM(quantity) AS item_qty FROM pak WHERE cod = ?  AND  num=?  AND item = ?");
    $q1->bind_param("sis", $code, $ga, $item);
    $q1->execute();
    $item_qty = (int)$q1->get_result()->fetch_assoc()['item_qty'];
    $q1->close();

  

   
        $q2 = $con->prepare("SELECT SUM(quantity) AS total_qty
                             FROM pak WHERE cod = ? AND num=?");
        $q2->bind_param("si", $code,$ga);
        $q2->execute();
        $total = (int)$q2->get_result()->fetch_assoc()['total_qty'];
        $q2->close();

$u = $con->prepare("UPDATE dat SET quantity = ? WHERE stat  = ? AND cod = ?");
$u->bind_param("isi", $total, $code, $ga);
$u->execute();
$u->close();


$q3= $con->prepare("SELECT SUM(quantity) AS item_qtyy FROM pak WHERE cod = ? AND num = ? AND item=? ");
        $q3->bind_param("sis", $code, $ga,$item);
        $q3->execute();
        $item_qtyy = (int)$q3->get_result()->fetch_assoc()['item_qtyy'];
        $q3->close();






$stmt = $con->prepare("SELECT quantity FROM dat WHERE stat = ? and cod = ?");

if ($stmt) {
   
    $stmt->bind_param("si", $code, $ga); 

    $stmt->execute();

  
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        $tot = $row['quantity'];
  
    }
}



    $response = [
      'success'       => true,
            'item_name'     => $item,
            'item_quantity' => $item_qty,  
            'total'         => $tot, 
                'item_quantityy' => $item_qtyy,  
            'item_code' =>     $code
           
    ];
}

    $delStmt->close();
}

echo json_encode($response);
exit;
