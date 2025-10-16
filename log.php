<?php
session_start();
include "connect_to_mysqli.php";

if (isset($_POST['mail'])) {
    $mail = trim($_POST['mail']);
    $password = $_POST['pass'];

    if (empty($mail) || empty($password)) {
        echo '<script>alert("Fill up the empty fields."); window.location.href = "login3.php";</script>';
        exit;
    }

    $stmt = $con->prepare("SELECT * FROM reg WHERE email = ?");
    $stmt->bind_param("s", $mail);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 0) {
        echo '<script>alert("Invalid credentials."); window.location.href = "login3.php";</script>';
        exit;
    }

    $row = $result->fetch_assoc();

    if (password_verify($password, $row['password'])) {

        if (strtolower(trim($row['status'])) === "member") {
            $_SESSION['ider'] = $row['code'];
            header("Location: dex6.php");
            exit;
        } else {
            echo '<script>alert("Your account is not a member."); window.location.href = "login3.php";</script>';
            exit;
        }

    } else {
        echo '<script>alert("Wrong password."); window.location.href = "login3.php";</script>';
        exit;
    }
}
?>
