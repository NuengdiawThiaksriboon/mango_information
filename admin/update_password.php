<?php
require_once 'db.php';

$password = $_POST['password'];
$confirm = $_POST['confirm_password'];
$email = $_POST['email'];

if ($password !== $confirm) {
    die("รหัสผ่านไม่ตรงกัน");
}

$hashed = password_hash($password, PASSWORD_DEFAULT);

// อัปเดตรหัสผ่านในตาราง users
$stmt = $conn->prepare("UPDATE users SET password = ? WHERE email = ?");
$stmt->bind_param("ss", $hashed, $email);
$stmt->execute();

// ลบ token
$conn->query("DELETE FROM password_resets WHERE email = '$email'");

echo "รีเซ็ตรหัสผ่านสำเร็จ! <a href='login.php'>เข้าสู่ระบบ</a>";
