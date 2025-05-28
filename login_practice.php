<?php
session_start();
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputUsername = trim($_POST["username"]);
    $inputPassword = trim($_POST["password"]);
    
    $found = false;
    $file = fopen("users.csv", "r");
    
    while (($line = fgetcsv($file)) !== false) {
        $username = trim($line[0]);
        $hashedPassword = trim($line[1]);

        if ($inputUsername === $username && password_verify($inputPassword, $hashedPassword)) {

            $_SESSION["loggedin"] = true;
            $_SESSION["username"] = $username;
            $found = true;
            break;
        }
    }
    fclose($file);

    if ($found) { header("Location: dashboard.php"); exit();
    } else {
        $error = "Invalid login credentials.";
    }
}
?>

<h2>Login</h2>
<?php if (!empty($error))
echo "<p style='color:red;'>$error/p>"; 
?>

<form method="post">
    Username: <input type="text" name="username"><br><br>
    Password: <input type="password" name="password"><br><br>
    <input type="submit"
value="Login">
</form>
<p>Don't have an account? <a href="register.php">Register</a></p>