<?php
$host = 'localhost';     
$db   = 'mango_information';      
$user = 'root';            
$pass = '';                 
$charset = 'utf8mb4';

// ตั้งค่า DSN สำหรับ PDO (หรือใช้ MySQLi ก็ได้)
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // แจ้ง error แบบ exception
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // ดึงข้อมูลแบบ array
    PDO::ATTR_EMULATE_PREPARES   => false,                  // ใช้ prepared statement จริง
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    die("เชื่อมต่อฐานข้อมูลไม่สำเร็จ: " . $e->getMessage());
}
?>
