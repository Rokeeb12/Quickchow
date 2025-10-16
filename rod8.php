<?php
header('Content-Type: application/json');
include "connect_to_mysqli.php";

$response = ['success' => false];

if (!empty($_POST['nub'])) {
    $first = (int)$_POST['nub'];
    $name  = trim($_POST['dod']);
    $deat  = date("Y-m-d");
    $idea  = trim($_POST['code']);
    $deal  = trim($_POST['cod']);
    $pic   = trim($_POST['vop']);
    
    
    



    $stmtItem = $con->prepare("SELECT age, code, price,pack FROM kod WHERE code = ?");
    $stmtItem->bind_param("s", $idea);
    $stmtItem->execute();
    $row = $stmtItem->get_result()->fetch_assoc();
    $stmtItem->close();

    if (!$row) {
        echo json_encode(['success' => false, 'message' => 'Item not found']);
        exit;
    }

    $stock = (int)$row['age'];
    $price = $row['price'];
    $price2 =$row['pack'];
    
    if ($stock < $first) {
        echo json_encode(['success' => false, 'message' => 'Stock not available']);
        exit;
    }

    $ola = $first * $price;
    $dok = "item";
    $to = 3;

    $stmtStatus = $con->prepare("SELECT status FROM dat WHERE stat = ? AND cod = ?");
    $stmtStatus->bind_param("si", $deal, $to);
    $stmtStatus->execute();
    $kosRow = $stmtStatus->get_result()->fetch_assoc();
    $stmtStatus->close();

    if (!$kosRow || $kosRow['status'] !== 'active') {
        echo json_encode(['success' => false, 'message' => 'Plan not active']);
        exit;
    }

    
    $stmtCod = $con->prepare("SELECT cod FROM dat WHERE stat = ? AND cod = ?");
    $stmtCod->bind_param("ss", $deal, $to);
    $stmtCod->execute();
    $carRow = $stmtCod->get_result()->fetch_assoc();
    $car = $carRow['cod'] ?? '';
    $stmtCod->close();

 $status='active';
 $status2='pending';

  
    $stmtInsert = $con->prepare("
        INSERT INTO pak (quantity, item, cod, pod, num, file, price,status,pack)
        VALUES (?, ?, ?, ?, ?, ?, ?,?,?)
    ");
    $stmtInsert->bind_param("issssssss", $first, $name, $deal, $dok, $car, $pic, $ola,$status2,$price2);


    $stmt2 = $con->prepare("UPDATE pak SET  status = ? WHERE  cod = ? AND item=? AND num=?  ORDER BY id DESC
    LIMIT 1");
$stmt2->bind_param("ssss", $status, $deal,$name,$to);
$stmt2->execute();
$stmt2->close();
    
    if ($stmtInsert->execute()) {
        $newId = $con->insert_id;

      
        $q1 = $con->prepare("SELECT SUM(quantity) AS item_qty FROM pak WHERE cod = ? AND num = ?");
        $q1->bind_param("ss", $deal, $to);
        $q1->execute();
        $item_qty = (int)$q1->get_result()->fetch_assoc()['item_qty'];
        $q1->close();

        $q2 = $con->prepare("SELECT SUM(quantity) AS total_qty FROM pak WHERE cod = ? AND num = ?");
        $q2->bind_param("si", $deal, $to);
        $q2->execute();
        $total = (int)$q2->get_result()->fetch_assoc()['total_qty'];
        $q2->close();


        $stmtUpdate = $con->prepare("UPDATE dat SET quantity = ? WHERE cod = ? AND stat = ?");
        $stmtUpdate->bind_param("iss", $total, $to, $deal);
        $stmtUpdate->execute();
        $stmtUpdate->close();


    $q3= $con->prepare("SELECT SUM(quantity) AS item_qtyy FROM pak WHERE cod = ? AND num = ? AND item=? ");
        $q3->bind_param("sss", $deal, $to,$name);
        $q3->execute();
        $item_qtyy = (int)$q3->get_result()->fetch_assoc()['item_qtyy'];
        $q3->close();

        
 
        
        $response = [
            'success' => true,
            'item_name' => $name,
            'item_quantity' => $item_qty,
             'item_quantityy' => $item_qtyy,
            'total' =>  $total,
            'item_code' => $deal,
            'item_id' => $newId
        ];
    } else {
        $response = ['success' => false, 'message' => 'Insert failed: ' . $stmtInsert->error];
    }

    $stmtInsert->close();
}

echo json_encode($response);
exit;
?>
