<?php
$servername = "localhost"; // ชื่อ server
$username = "root"; // ชื่อผู้ใช้ MySQL
$password = ""; // รหัสผ่าน MySQL
$database = "kaophai2"; // ชื่อฐานข้อมูล

// เชื่อมต่อฐานข้อมูล
$conn = mysqli_connect($servername, $username, $password, $database);

// ตรวจสอบการเชื่อมต่อ
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";

// เมื่อเรียบร้อยแล้ว สามารถทำงานกับฐานข้อมูลต่อไปได้
?>
