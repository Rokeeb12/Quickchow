<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    require 'connect_to_mysqli.php';

  
    $userCode = trim($_POST['kod'] ?? '');
    $use = trim($_POST['kot'] ?? '');
    $email = trim($_POST['mail'] ?? '');
    $area = trim($_POST['area'] ?? '');
    $password = $_POST['pass'] ?? '';
    $confirmPassword = $_POST['mass'] ?? '';
    $status = trim($_POST['stat'] ?? '');

    $errors = [];

 
    if (empty($userCode) || empty($use) || empty($email) || empty($area) ||  empty($password) || empty($confirmPassword)) {
        echo '<script>alert("All fields are required."); window.location.href = "register.php";</script>';
        exit();
    }





    if ($password !== $confirmPassword) {
        echo '<script>alert("Passwords do not match."); window.location.href = "register.php";</script>';
        exit();
    }

    $stmt = $con->prepare("SELECT id FROM  reg WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows > 0) {
        echo '<script>alert("Email is already registered."); window.location.href = "register.php";</script>';
        exit();
    }
    $stmt->close();

 
    $code = "DC" . substr(md5(uniqid(mt_rand(), true)), 0, 7);
   


    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $hashedPasswordd = password_hash( $confirmPassword, PASSWORD_DEFAULT);
  
    $stmt = $con->prepare("INSERT INTO reg (name, number,email,area, password, compassword, status, code) VALUES (?, ?, ?, ?, ?, ?,?,?)");
    $stmt->bind_param("ssssssss",$userCode, $use,$email,$area, $hashedPassword, $hashedPasswordd, $status, $code);

    if ($stmt->execute()) {
     
 
       
header("Location:dex6.php");


    $_SESSION['ider']=$code;
     
        
      

       

    } else {
        echo '<script>alert("Registration failed. Try again."); window.location.href = "register.php";</script>';
        exit();
    }

    $stmt->close();
    $con->close();
} else {
    // Invalid access
    header("Location: register.php");
    exit();
}
?>
