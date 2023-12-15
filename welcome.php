<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: index.php");
    exit;
}

if ($_SESSION['role'] == 'admin') {
    echo "Welcome Admin!";
    // แสดงเมนูหรือหน้าจัดการสำหรับ Admin
} else {
    echo "Welcome User!";
    // แสดงเมนูหรือหน้าปกติสำหรับ User
}
?>
