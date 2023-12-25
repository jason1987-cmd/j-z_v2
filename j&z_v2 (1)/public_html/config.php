<?php
$host = "localhost";
$username = "id21688009_root";
$password = "Jzmilkteahouses2024!";
$database = "id21688009_localhost";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
