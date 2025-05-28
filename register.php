<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $check = $conn->prepare("SELECT id FROM users WHERE username = ?");
$check->bind_param("s", $username);
$check->execute();
$check->store_result();

if ($check->num_rows > 0) {
    echo "Username already taken.";
} else {
    $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $password);

    if ($stmt->execute()) {
    echo "Registration successful! <a href='login.php'>Login here</a>";
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
    }
$check->close();

}
?>

<h2>Register</h2>
<form method="post" action="">
    <label>Username: </label><br>
    <input type="text" name="username" required><br><br>
    
    <label>Password: </label><br>
    <input type="password" name="password" required><br><br>
    
    <button type="submit">Register</button>
</form>
<p>Already have an account? <a href="login.php">Login here</a>.</p>
