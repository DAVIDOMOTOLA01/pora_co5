<?php
include 'db.php';

$csvFile = fopen("users.csv", "r");

if ($csvFile === false) { die("Unable to open the CSV file."); }
fgetcsv($csvFile);
while (($row = fgetcsv($csvFile)) !== false) {
    $username = $row[0];
    $password = $row[1];

    $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)
    ON DUPLICATE KEY UPDATE password = VALUES(password)");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
}
fclose($csvFile);
echo "Import completed successfully.";
?>