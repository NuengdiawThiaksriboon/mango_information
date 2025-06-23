<?php
require 'vendor/autoload.php'; // ถ้าใช้ Composer โหลด PHPMailer

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'db.php'; // เชื่อมต่อฐานข้อมูล

// ตรวจสอบว่ามีการส่งค่า email มาหรือไม่
if (empty($_POST['email'])) {
    exit("กรุณาระบุอีเมล");
}

$email = trim($_POST['email']);

// ตรวจสอบรูปแบบอีเมล
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    exit("รูปแบบอีเมลไม่ถูกต้อง");
}

// ตั้ง charset ของการเชื่อมต่อฐานข้อมูลเป็น UTF-8
$conn->set_charset("utf8mb4");

$token = bin2hex(random_bytes(32));
$expire = date("Y-m-d H:i:s", strtotime("+1 hour"));

// ตรวจสอบว่ามีอีเมลนี้ในระบบไหม
$stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // ลบ token เดิมด้วย prepared statement
    $delStmt = $conn->prepare("DELETE FROM password_resets WHERE email = ?");
    $delStmt->bind_param("s", $email);
    $delStmt->execute();
    $delStmt->close();

    // บันทึก token ใหม่
    $insertStmt = $conn->prepare("INSERT INTO password_resets (email, token, expires_at) VALUES (?, ?, ?)");
    $insertStmt->bind_param("sss", $email, $token, $expire);
    $insertStmt->execute();
    $insertStmt->close();

    // ส่งอีเมล
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->CharSet = 'UTF-8';
        $mail->Host = 'smtp.gmail.com'; // ตัวอย่าง
        $mail->SMTPAuth = true;
        $mail->Username = 'your_email@gmail.com'; // อีเมลของคุณ
        $mail->Password = 'your_password'; // รหัสผ่านหรือ app password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('your_email@gmail.com', 'ระบบรีเซ็ตรหัสผ่าน');
        $mail->addAddress($email);
        $mail->Subject = 'ลิงก์รีเซ็ตรหัสผ่าน';

        $link = "http://yourdomain.com/reset_password.php?token=$token";
        $mail->Body = "สวัสดีค่ะ/ครับ\n\nกรุณาคลิกที่ลิงก์นี้เพื่อรีเซ็ตรหัสผ่านของคุณ:\n$link\n\nลิงก์นี้จะหมดอายุใน 1 ชั่วโมง";

        $mail->send();
        echo "ส่งลิงก์รีเซ็ตรหัสผ่านเรียบร้อย กรุณาตรวจสอบอีเมล";
    } catch (Exception $e) {
        echo "ส่งอีเมลไม่สำเร็จ: {$mail->ErrorInfo}";
    }
} else {
    echo "ไม่พบบัญชีที่ใช้อีเมลนี้";
}

$stmt->close();
$conn->close();
