<?php
session_start();
?>

<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

$stmt = $conn->prepare("SELECT password FROM users WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$stmt->bind_result($hashed);

if ($stmt->fetch() && password_verify($password, $hashed)) {
        $_SESSION['username'] = $username; header("Location: dashboard.php");
        exit();
} else {
    echo "Invalid login credentials.";
    }
}


?>
<form method="post">
    <label>Username: </label><br>
    <input type="text" name="username" required><br><br>
    
    <label>Password: </label><br>
    <input type="password" name="password" required><br><br>
    
    <button type="submit">Login</button>
</form>





































