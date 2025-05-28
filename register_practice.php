<?php
$error = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newUsername = trim($_POST["username"]);
    $newPassword = trim($_POST["password"]);

    if (empty($newUsername) || empty($newPassword)) {
        $error = "Username and password are required.";
    } else {
        $file = fopen("users.csv", "a+");
        $exists = false;

        rewind($file);
        while (($line = fgetcsv($file)) !== false) {
            if (trim($line[0]) === $newUsername) { $exists = true; break;}
        }
    }
    if ($exists) { $error = "Username already taken.";
    } else { 
        $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
        fputcsv($file, [$newUsername, $hashedPassword]); 
        $success = "Registration successful! You can now <a href='login.php'>login</a>.";
    } fclose($file); 
        }

?>

<h2>Register New Account</h2>

<?php
if (!empty($error)) echo "<p style='color=red; '>$error</p>";
if (!empty($success)) echo "<p style='color=green; '>$success</p>";
?>

<form method="post">
    Username: <input type="text" name="username"><br><br>
    Password: <input type="password" name="password"><br><br>
    <input type="submit"
value="Register">
</form>
<p>Already have an account? <a href="login.php">Login here</a>.</p>










