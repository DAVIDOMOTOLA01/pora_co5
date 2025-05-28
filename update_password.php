<?php
$usernameToUpdate = "MO";
$newPassword = "15112025";

$updatedLines = [];
$file = fopen("users.csv", "r");

if (!$file) { die("Could not open users.csv for reading.");
}
echo "<strong>Looking for user: $usernameToUpdate</strong><br><br>";

while (($line = fgetcsv($file)) !== false) {
    echo "Found user: " . htmlspecialchars($line[0]) . "<br>";

    if (trim($line[0]) === $usernameToUpdate) {
        echo "-> Match found. Updating password. <br>";
        $line[1] = password_hash($newPassword, PASSWORD_DEFAULT);
    }
    $updatedLines[] = $line;
}
fclose($file);

$file = fopen("users.csv", "w");

if (!$file) { die("Could not open users.csv for writing."); }
foreach($updatedLines as $line) {
    fputcsv($file, $line);
}
fclose($file);

echo "<br><strong>Password updated successfully.</strong>";

?>
