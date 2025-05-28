<?php
session_start();

if(!isset($_SESSION['username'])) { die("You must be logged in to change your password."); }

$currentUser = $_SESSION['username'];
$currentPassword = $_POST['current_password'];
$newPassword = $_POST['new_password'];
$confirmPassword = $_POST['confirm_password'];

if ($newPassword !== $confirmPassword) { die("New passwords do not match."); }

$updatedLines = [];
$passwordChanged = false;

$file = fopen("users.csv", "r");

while (($line = fgetcsv($file)) !== false) {
    if (trim($line[0]) === $currentUser) {
        if (! password_verify($currentPassword, $line[1])) {
            fclose($file); die("Current password is incorrect.");
        }
        $line[1] = password_hash($newPassword, PASSWORD_DEFAULT);
    }
fclose($file);
    
    $file = fopen("users.csv", "w");
    foreach($updatedLines as $line) {
    fputcsv($file, $line);
    }
fclose($file);

if ($passwordChanged) { echo "Password changed successfully! <a href='dashboard.php'>Back to Dashboard</a>";
} else {
    echo "User not found.";
}  
}

?>