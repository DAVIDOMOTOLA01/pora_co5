<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
  

?>

<h2>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
<p>This is your secure dashboard.</p>
<a href="logout.php">Logout</a></
</p>

<?php
$file = "users.txt";
$errors = [];
$name = $Age = $Email = $Country = $Gender = $Hobbies = "";
$editIndex = -1;

if (isset($_GET['delete'])) {
    $index = $_GET['delete'];
    $lines = file($file, FILE_IGNORE_NEW_LINES);
    unset($lines[$index]);
    file_put_contents($file, implode("\n", $lines));
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

if (isset($_GET['edit'])) {
    $editIndex = $_GET['edit'];
    $lines = file($file, FILE_IGNORE_NEW_LINES);
    if (isset($lines[$editIndex])) {
        list($name, $Age, $Email, $Country, $Gender, $Hobbies) = explode(", ", $lines[$editIndex]);
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $editIndex = $_POST['edit_index'];
    $name = $_POST['name'] ?? '';
    $Age = $_POST['age'] ?? '';
    $Email = $_POST['email'] ?? '';
    $Country = $_POST['country'] ?? '';
    $Gender = $_POST['gender'] ?? '';
    $Hobbies = isset($_POST['hobbies']) ? implode(" | ", $_POST['hobbies']) : '';

    // Validation
    if (empty($name)) $errors[] = "Name is required.";
    if (empty($Age)) $errors[] = "Age is required.";
    if (empty($Email)) $errors[] = "Email is required.";
    elseif (!filter_var($Email, FILTER_VALIDATE_EMAIL)) $errors[] = "Invalid email format.";
    if (empty($Country)) $errors[] = "Country is required.";
    if (empty($Gender)) $errors[] = "Gender is required.";
    if (empty($Hobbies)) $errors[] = "Hobbies are required.";

    if (empty($errors)) {
        $timestamp = date("Y-m-d H:i:s");
        $line = "$name, $Age, $Email, $Country, $Gender, $Hobbies, $timestamp";

        if ($editIndex !== "-1") {
            $lines = file($file, FILE_IGNORE_NEW_LINES);
            $lines[$editIndex] = $line;
            file_put_contents($file, implode("\n", $lines));
        } else {
            file_put_contents($file, $line . "\n", FILE_APPEND);
        }

        echo "<p style='color:green;'>Data saved successfully!</p>";
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }
}
?>

<h3><?= $editIndex !== -1 ? "Edit User" : "Add User" ?></h3>

<?php foreach ($errors as $error): ?>
    <p style='color:red;'><?= htmlspecialchars($error) ?></p>
<?php endforeach; ?>

<form method="post">
    <input type="hidden" name="edit_index" value="<?= htmlspecialchars($editIndex) ?>">

    <label>Name:</label>
    <input type="text" name="name" value="<?= htmlspecialchars($name) ?>"><br><br>

    <label>Age:</label>
    <input type="number" name="age" value="<?= htmlspecialchars($Age) ?>"><br><br>

    <label>Email:</label>
    <input type="email" name="email" value="<?= htmlspecialchars($Email) ?>"><br><br>

    <label>Country:</label>
    <input type="text" name="country" value="<?= htmlspecialchars($Country) ?>"><br><br>

    <label>Gender:</label><br>
    <input type="radio" id="male" name="gender" value="male" <?= $Gender === "male" ? "checked" : "" ?>>
    <label for="male">Male</label><br>
    <input type="radio" id="female" name="gender" value="female" <?= $Gender === "female" ? "checked" : "" ?>>
    <label for="female">Female</label><br>
    <input type="radio" id="other" name="gender" value="other" <?= $Gender === "other" ? "checked" : "" ?>>
    <label for="other">Other</label><br><br>

    <label>Hobbies:</label><br>
    <?php
        $allHobbies = ["reading", "gaming", "sports", "music", "traveling", "movies"];
        $selectedHobbies = explode(" | ", $Hobbies);
        foreach ($allHobbies as $hobby):
    ?>
        <input type="checkbox" name="hobbies[]" value="<?= $hobby ?>" <?= in_array($hobby, $selectedHobbies) ? "checked" : "" ?>>
        <label><?= ucfirst($hobby) ?></label><br>
    <?php endforeach; ?>

    <br>
    <input type="submit" value="<?= $editIndex !== -1 ? "Update" : "Save" ?>">
</form>

<h3>Change Password</h3>
<form method="post"
    action="change_password.php">
    <label>Current Password:</label><br> <input type="password" name="current_password" required><br><br>
    <label>New Password:</label><br> <input type="password" name="new_password" required><br><br>
    <label>Confirm New Password:</label><br> <input type="password" name="current_password" required><br><br>
    <input type="submit" value="Change Password">
</form>

<hr>
<h3>Saved Users:</h3>
<table border="1" cellpadding="8">
    <tr>
        <th>Name</th><th>Age</th><th>Email</th><th>Country</th><th>Gender</th><th>Hobbies</th><th>Timestamp</th><th>Actions</th>
    </tr>
    <?php
    if (file_exists($file)) {
        $lines = file($file, FILE_IGNORE_NEW_LINES);
        foreach ($lines as $index => $line) {
            list($n, $a, $e, $c, $g, $h, $ts) = explode(", ", $line);
            echo "<tr>
                <td>$n</td>
                <td>$a</td>
                <td>$e</td>
                <td>$c</td>
                <td>$g</td>
                <td>$h</td>
                <td>$ts</td>
                <td>
                    <a href='?edit=$index'>Edit</a> |
                    <a href='?delete=$index' onclick='return confirm(\"Delete this entry?\")'>Delete</a>
                </td>
            </tr>";
        }
    } else {
        echo "<tr><td colspan='8'>No records found.</td></tr>";
    }
    ?>
</table>
