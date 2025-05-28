<?php
$host = 'localhost';
$username = 'root';
$database = 'user_auth';
$password = '';

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>