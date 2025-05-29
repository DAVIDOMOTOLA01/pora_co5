<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$host = "localhost";
$user = "root";
$pass = "123456";
$dbm = "student_db";

$conn = mysqli_connect($host, $user, $pass, $dbm);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8mb4");
?>
