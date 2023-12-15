<?php
$servername = "localhost";
$username = "root";
$password = "}Ww]3v2CX<2mSH$7";
$dbname = "test";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
