<?php
header('Content-Type: application/json');
include "connect_to_mysqli.php";


ini_set('display_errors', 1);
error_reporting(E_ALL);

$response = ['success' => false];

if (isset($_POST['nub'])) {
    $first = (int)$_POST['nub'];      
    $name  = trim($_POST['dod']);     
    $deat  = trim($_POST['tod']);     
    $idea  = trim($_POST['code']);    
    $deal  = trim($_POST['cod']);     
    $pic   = trim($_POST['vop']);     
     $pod   = trim($_POST['pop']);   
    $status2 = "pending";

   
    $stmt = $con->prepare("SELECT age, code, price,pack FROM kod WHERE code = ?");
    $stmt->bind_param("s", $idea);
    $stmt->execute();
    $row = $stmt->get_result()->fetch_assoc();
    $stmt->close();

    if (!$row) {
        echo json_encode(['success' => false, 'message' => 'Item not found']);
        exit;
    }

    $user  = $row['age'];  
    $email = $row['code'];
    $all   = $row['price'];
    $all2   = $row['pack'];
 
    if ($user < $first) {
        echo json_encode(['success' => false, 'message' => 'Stock not available']);
        exit;
    }
       

    $stmt = $con->prepare("SELECT status FROM plan WHERE code = ?");
    $stmt->bind_param("s", $deal);
    $stmt->execute();
    $kosRow = $stmt->get_result()->fetch_assoc();
    $stmt->close();

    if  (!$kosRow || $kosRow['status'] !== 'active') {
        echo json_encode(['success' => false, 'message' => 'Plan not active']);
        exit;
    }



    
 $status=$kosRow['status'];
    $cod   = "BP" . substr(md5(microtime()), 0, 7);
    $deat  = date("Y-m-d");
    $ola   = $first * $all;
$bok=1;
    $stmt = $con->prepare("INSERT INTO enter
        (quantity, code, date, item, price, status, stat, quan2, file,verify,pack)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?,?,?)");
    $stmt->bind_param(
        "sssssssssss",
        $first, $deal, $deat, $name, $ola, $status2, $email, $cod, $pic,$bok,$all2
    );


 $stmt2 = $con->prepare("UPDATE enter SET  status = ? WHERE  code = ? AND item=?  ORDER BY id DESC
    LIMIT 1");
$stmt2->bind_param("sss", $status, $deal,$name);
$stmt2->execute();
$stmt2->close();









    if ($stmt->execute()) {
        
           $newId = $con->insert_id;

$stmt = $con->prepare("SELECT id FROM enter WHERE code = ?");

if ($stmt) {

    $stmt->bind_param("s", $deal);


    $stmt->execute();


    $result = $stmt->get_result();

   
    while ($row = $result->fetch_assoc()) {
        $ko = $row['id'];
      
    }

 
   
}









$dp=2497;


        $q1 = $con->prepare("SELECT SUM(quantity) AS item_qty
                             FROM enter WHERE code = ? AND item = ? AND STAT=? ");
        $q1->bind_param("sss", $deal, $name,$idea);
        $q1->execute();
        $item_qty = (int)$q1->get_result()->fetch_assoc()['item_qty'];
        $q1->close();


        $q2 = $con->prepare("SELECT SUM(quantity) AS total_qty
                             FROM enter WHERE code = ?");
        $q2->bind_param("s", $deal);
        $q2->execute();
        $total = (int)$q2->get_result()->fetch_assoc()['total_qty'];
        $q2->close();

        
        $q3 = $con->prepare("SELECT SUM(verify) AS verd
                             FROM enter WHERE code = ?");
        $q3->bind_param("s", $deal);
        $q3->execute();
        $verify = (int)$q3->get_result()->fetch_assoc()['verd'];
        $q3->close();
       



        $response = [
            
            'success'       => true,
             'item_verify' => $verify,
            'item_name'     => $name,
            'item_quantity' => $item_qty ,  
            'total'         => $total,  
            'item_code' =>  $deal,
            'item_id' => $newId
             
        ];
    } else {
        $response = [
            'success' => false,
            'message' => 'Insert failed: ' . $stmt->error
        ];
    }
    $stmt->close();



session_start();
$_SESSION['item']=$name;

}


echo json_encode($response);
exit;
?>
