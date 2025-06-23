<?php
require_once 'db.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm = $_POST['confirm_password'];

if ($password !== $confirm) {
    header("Location: register.php?error=รหัสผ่านไม่ตรงกัน");
    exit;
}

// ตรวจสอบว่าซ้ำไหม
$stmt = $pdo->prepare("SELECT id FROM users WHERE username = ? OR email = ?");
$stmt->execute([$username, $email]);

if ($stmt->rowCount() > 0) {
    header("Location: register.php?error=ชื่อผู้ใช้หรืออีเมลถูกใช้แล้ว");
    exit;
}

// บันทึกผู้ใช้ใหม่
$hashed = password_hash($password, PASSWORD_DEFAULT);
$stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
$stmt->execute([$username, $email, $hashed]);

header("Location: register.php?success=1");
exit;
?>
