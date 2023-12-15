<?php
session_start();
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
$sql = "SELECT id, password, role FROM users WHERE username = '$username'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        $_SESSION['id'] = $row['id'];
        $_SESSION['role'] = $row['role']; // เพิ่มนี้
        header("location: welcome.php");
    } else {
        echo "Invalid password.";
    }
} else {
    echo "Invalid username.";
}
$conn->close();
}
?>
