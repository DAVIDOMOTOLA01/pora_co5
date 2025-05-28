<?php
// $a = 10;
// $b = 20;
// $first_person = "David";
// $Second_person = "Omolara";

// echo "The value of a is: $a<br>";
// echo "The value of b is: $b<br>";
// echo "The first person is: $first_person<br>";

// echo "$first_person and $Second_person are married.<br>";
// echo "They attended same school.<br>";


// $my_name = "John";
// $my_age = 17;
// $my_height = 1.5;
// $is_student = true;
// $my_students = ['John', 'Peter', 'David', 'Blessing', 'Raphael', 'Lanre'];
// 
// print_r($my_students);
// echo "<br>";
// 
// foreach ($my_students as $students) {
    // echo $students . "<br>";
// }
// 
// 
// Class Person {
    // public $name;
    // public $age;
    // public $height;
    // public $is_student;
    // public $complexion;
    // public $attitude;
// 
// 
    // function __construct($name, $age)
// {
        // $this->name = $name;
        // $this->age = $age;
    // }
// }
// 
// if and esle condition
// if ($my_age >= 18){
    // echo "Hello John  you're now eligible to drive<br>";
// } elseif($my_age ==17){
    // echo "Kindly wait a year more to be able to drive<br>";
// }
//   else {
    // echo "You're not eligible to drive<br>";
// }

// SELF TUTORIALS

// $full_name = "Olukayode David";
// $age = 16;
// $email = "pstolukayodedavid@gmail.com";
// $is_student = true;
// $skills = ["PHP", "HTML", "CSS"];
// 
// echo "Full Name: $full_name<br>";
// echo "Age: $age<br>";
// echo "Email Address: $email<br>";
// echo "Student: " . ($is_student ? "Yes" : "No") . "<br>";
// echo "Skills: " . implode(", ", $skills) . "<br>";
// 
//CONDITIONAL STATEMENTS AND LOOPS (IF, ELSE, ELSEIF)
// if ($age >= 18) {
        // echo "I am eligible to vote<br>";
// }   elseif ($age == 17) {
        // echo "Almost there, one more year!<br>";
// }   else {
        // echo "You are too young to vote<br>";
// }
// 
//LOOPS
//FOR LOOPS
// for ($i = 1; $i <= 5; $i++) {
    // echo "Number: $i<br>";
// }
//FOR EACH
// foreach ($skills as $skill) {
    // echo "$skill<br>";
// }
// 
//while LOOP
// $count = 1;
// while ($count <= 3) {
    // echo "Count is $count<br>";
    // $count++;
// }
//

//PRACTICE EXERCISE 1
// $score = 85;
// if ($score >= 90) {
    // echo "Excellent!<br>";
// }   elseif ($score >=70) {
    // echo "Very Good!<br>";
// }   else {
    // echo "Needs Improvement!<br>";
// }
// for ($i = 1; $i <= 10; $i++) {
    // echo "$i<br>";
// }
// 
//FUNCTIONS IN PHP
//BASIC FUNCTION
// function greetUser() {
    // echo "Welcome to PHP backend development!<br>";
// }
// greetUser();
// 
//FUNCTIONS WITH PARAMETERS
// function greet($name) {
    // echo "Hello, $name<br>";
// }
// greet("David");
// greet("Oluwakemi");
// 
//FUNCTION THAT RETURNS A VALUE
// function add($a, $b) {
    // return $a + $b;
// }
// $result = add(15, 20);
// echo "Sum is: $result<br>";
// 
//PRACTICE EXERCISE 2
// 
// function multiply($c, $d) {
    // return $c * $d;
// }
// $answer = multiply(20, 30);
// echo "Product is: $answer<br>";

//USER INPUT WITH HTML FORM + PHP
//Create a form using HTML;
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // $name = $_POST['username'];
    // $Age = $_POST['age'];
    // $Email = $_POST['email'];
// 
    // echo "Name: $name <br>";
    // echo "Age: $Age <br>";
    // echo "Email: $Email <br>";
// 
// }
?>
<!--  -->

<!-- <form method="post"> -->
    <!-- Name: <input type="text" -->
<!-- name="username"><br><br> -->
    <!-- Age: <input type="number" -->
<!-- name="age"><br><br> -->
    <!-- Email: <input type="email" -->
<!-- name="email"><br><br> -->
    <!-- <input type="submit" -->
<!-- value="Submit"> -->
<!-- </form> -->
<!--  -->

<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // $num1 = $_POST['num1'];
    // $num2 = $_POST['num2'];
    // 
    // $Answer = multiply($num1, $num2);
    // echo "The product of $num1 and $num2 is $Answer";
// }
?>

<!-- <form method="post"> -->
    <!-- Number 1: <input type="number" -->
<!-- name="num1"><br> -->
    <!-- Number 2: <input type="number" -->
<!-- name="num2"><br> -->
    <!-- <input type="submit" -->
<!-- value="Multiply"> -->
<!-- </form> -->
<!--  -->

<?php
// $name = $Age = $Email = "";
// $errors = [];
// 
// if ($_SERVER["REQUEST_METHOD"] == 
// "POST") {
    // if (empty($_POST['username'])) {
        // $errors[] = "Name is required.";
    // } else {
        // $name = $_POST['username'];
    // }
    // if (empty($_POST['age'])) {
        // $errors[] = "Age is required.";
    // } else {
        // $Age = $_POST['age'];
    // }
    // if (empty($_POST['email'])) {
        // $errors[] = "Email is required.";
    // } else {
        // $Email = $_POST['email'];
    // }
    // if(empty($errors)) {
        // echo "Name: $name <br>";
        // echo "Age: $Age <br>";
        // echo "Email: $Email <br>";
    // } else {
        // foreach ($errors as $erro) {
            // echo "<p
// style='color:red; '>error</p>";
        // }
    // }
// }
?>

<?php
//PRACTICE EXERCISES 3
// TASK: CREATE A FORM TO COLLECT: NAME, AGE, EMAIL, COUNTRY, GENDER (RADIO BUTTON), HOBBIES (CHECKBOX)

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['username'];
    $Age = $_POST['age'];
    $Email = $_POST['email'];
    $Country = $_POST['country'];
    $Gender = $_POST['gender'];
    if (isset($_POST['hobbies'])) {
        $Hobbies = $_POST['hobbies'];
    }

    echo "Name: $name <br>";
    echo "Age: $Age <br>";
    echo "Email: $Email <br>";
    echo "Country: $Country <br>";
    echo "Selected Gender: $Gender <br>";
}
?>
<!--  -->
<!-- <form method="post"> -->
    <!-- Name: <input type="text" -->
<!-- name="username"><br><br> -->
    <!-- Age: <input type="number" -->
<!-- name="age"><br><br> -->
    <!-- Email: <input type="email" -->
<!-- name="email"><br><br> -->
    <!-- Country: <input type="text" -->
<!-- name="country"><br><br> -->
    <!-- <label>Gender: </label><br> -->
    <!-- <input type="radio" id="male" name="gender" value="male"> -->
    <!-- <label for="male">Male</label><br> -->
    <!-- <input type="radio" id="female" name="gender" value="female"> -->
    <!-- <label for="female">Female</label><br> -->
    <!-- <input type="radio" id="other" name="gender" value="other"> -->
    <!-- <label for="other">Other</label><br> -->
    <!-- <label>Hobbies: </label><br> -->
    <!-- <input type="checkbox" id="reading" name="hobbies" value="reading"> -->
    <!-- <label for="reading">Reading</label><br> -->
    <!-- <input type="checkbox" id="gaming" name="hobbies" value="gaming"> -->
    <!-- <label for="gaming">Gaming</label><br> -->
    <!-- <input type="checkbox" id="sports" name="hobbies" value="sports"> -->
    <!-- <label for="sports">Sports</label><br> -->
    <!-- <input type="checkbox" id="music" name="hobbies" value="music"> -->
    <!-- <label for="music">Music</label><br> -->
    <!-- <input type="checkbox" id="traveling" name="hobbies" value="traveling"> -->
    <!-- <label for="traveling">Traveling</label><br> -->
    <!-- <input type="checkbox" id="movies" name="hobbies" value="movies"> -->
    <!-- <label for="movies">Movies</label><br> -->
    <!-- <input type="submit" -->
    <!-- value="Submit"> -->
<!-- </form> -->
<!--  -->
<?php
// $name = $Age = $Email = $Country = $Gender = $Hobbies = "";
// $errors = [];
// 
// if ($_SERVER["REQUEST_METHOD"] == 
// "POST") {
    // if (empty($_POST['username'])) {
        // $errors[] = "Name is required.";
    // } else {
        // $name = $_POST['username'];
    // }
    // if (empty($_POST['age'])) {
        // $errors[] = "Age is required.";
    // } else {
        // $Age = $_POST['age'];
    // }
    // if (empty($_POST['email'])) {
        // $errors[] = "Email is required.";
    // } else {
        // $Email = $_POST['email'];
    // }
    // if (empty($_POST['country'])) {
        // $errors[] = "Country is required.";
    // } else {
        // $Country = $_POST['country'];
    // }
    // if (empty($_POST['gender'])) {
        // $errors[] = "Gender is required.";
    // } else {
        // $Gender = $_POST['gender'];
    // }
    // if (empty($_POST['hobbies'])) {
        // $errors[] = "Hobbies is required.";
    // } else {
        // $Hobbies = $_POST['hobbies'];
    // }
    // if(empty($errors)) {
        // echo "Name: $name <br>";
        // echo "Age: $Age <br>";
        // echo "Email: $Email <br>";
        // echo "Country: $Country <br>";
        // echo "Gender: $Gender <br>";
        // echo "Hobbies: $Hobbies <br>";
    // } else {
        // foreach ($errors as $error) {
            // echo "<p
// style='color:red; '>error</p>";
        // }
    // }
// }

// BUILD A CALCULATOR THAT ACCEPTS TWO NUMBERS AND A DROPDOWN SELECT TO SELECT ALL ARITHMETRIC OPERATIONS
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operation'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];

if (!is_numeric($num1) || !is_numeric($num2)) {
    echo "Error: Both inputs must be numeric.";
    exit;
}
switch($operation) {
    case 'addition':
        $result = $num1 + $num2;
        break;
    case 'subtraction':
        $result = $num1 - $num2;
        break;
    case 'multiplication':
        $result = $num1 * $num2;
        break;
    case 'division':
        if ($num2 == 0) {
            echo "Error: Division by zero is not allowed.";
            exit;
        }
        $result = $num1 / $num2;
            break;
            default:
            echo "Error: Invalid operation.";
            exit;
}
echo "Result: $num1 " . getOperationSymbol($operation) . " $num2 = $result";
  } else {
    echo "Error: Please fill out the form.";
  }
}
function getOperationSymbol($operation) {
    switch ($operation) {
        case 'addition':
            return '+';
        case 'subtraction':
            return '-';
        case 'multiplication':
            return '*';
        case 'division':
            return '/';
        default:
            return '?';
    }
}
?>

<!-- <form action="calculator.php" method="post"> -->
    <!-- <label>Number 1:</label> -->
    <!-- <input type="text" name="num1"><br><br> -->
    <!-- <label>Number 2:</label> -->
    <!-- <input type="text" name="num2"><br><br> -->
    <!-- <label>Operation:</label> -->
    <!-- <select name="operation"> -->
        <!-- <option value="addition">Addition</option> -->
        <!-- <option value="subtraction">Subtraction</option> -->
        <!-- <option value="multiplication">Multiplication</option> -->
        <!-- <option value="division">Division</option> -->
    <!-- </select><br><br> -->
    <!-- <input type="submit" value="Calculate"> -->
<!-- </form> -->
<!--  -->

<?php
// FILE HANDLING IN PHP
$file = "users.txt";
$errors = [];
$name = $Age = $Email = $Country = $Gender = $Hobbies = "";
$editIndex = -1;

if(isset($_GET['delete'])) {
    $index = $_GET['delete'];
    $lines = file($file, FILE_IGNORE_NEW_LINES);
    unset($lines[$index]);
    file_put_contents($file,
    implode("\n", $lines));
        header("Location: ".
        $_SERVER['PHP_SELF']);
            exit();
}

if (isset($_GET['edit'])) {
    $editlndex = $_GET['edit'];
    $lines = file($file, FILE_IGNORE_NEW_LINES);
    if (isset($lines[$editIndex])) {
        list($name, $Age, $Email, $Country, $Gender, $Hobbies) = 
        explode(", ", $lines[$editIndex]);
    }
}
$editIndex = $_POST['edit_index'];
    $name = $_POST['name'] ?? '';
    $Age = $_POST['age'] ?? '';
    $Email = $_POST['email'] ?? '';
    $Country = $_POST['country'] ?? '';
    $Gender = $_POST['gender'] ?? '';
    $Hobbies = isset($_POST['hobbies']) ? implode(" | ", $_POST['hobbies']) : '';

if (empty($name)) $errors[] = "Name is required.";
if (empty($Age))  $errors[] = "Age is required.";
if (empty($_Email)) $errors[] = "Email is required.";
elseif (!filter_var($_POST['email'],
 FILTER_VALIDATE_EMAIL)) $errors[] = "Invalid email format.";
if (empty($Country)) $errors[] = "Country is required.";
if (empty($Gender)) $errors[] = "Gender is required.";
if (empty($Hobbies)) $errors[] = "Hobbies is required.";

if (empty($errors)) {
    $timestamp = date("Y-m-d H:i:s"); 
    $line = "$name, $Age, $Email, $Country, $Gender, $Hobbies, $timestamp";

    if ($editIndex !== -1) {
        $lines = file($file, FILE_IGNORE_NEW_LINES);
        $lines[$editIndex] = $line;
        file_put_contents($file, implode("\n", $lines));
    } else {
        file_put_contents($file, $line . "\n", FILE_APPEND);
    }

    echo "<p style='color:green; '>Data saved successfully!</p>";
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
    }
?>

<h3><?= $editIndex !== -1 ? "Edit User" : "Add User" ?></h3>

<?php foreach ($errors as $error): ?>
    <p style='color:red; '><?= htmlspecialchars($error) ?></p>
<?php endforeach; ?>

<form method="post">
    <input type="hidden"
    name="edit_index" value="<?=$editIndex ?>">
    <label>Name:</label>
    <input type="text" name="name" value="<?=htmlspecialchars($name) ?>"><br><br>
    <label>Age:</label>
    <input type="number" name="age" value="<?=htmlspecialchars($Age) ?>"><br><br>
    <label>Email:</label>
    <input type="email" name="email" value="<?=htmlspecialchars($Email) ?>"><br><br>
    <label>Country:</label> 
    <input type="text" name="country" value="<?=htmlspecialchars($Country) ?>"><br><br>
    <label>Gender: </label><br>
    <input type="radio" id="male" name="gender" value="male"> <?= $Gender === "male" ? "checked" : "" ?>>
    <label for="male">Male</label><br>
    <input type="radio" id="female" name="gender" value="female"> <?= $Gender === "female" ? "checked" : "" ?>>
    <label for="female">Female</label><br>
    <input type="radio" id="other" name="gender" value="other"> <?= $Gender === "other" ? "checked" : "" ?>>
    <label for="other">Other</label><br>
    <label>Hobbies: </label><br>
    <?php
        $allHobbies = ["reading", "gaming", "sports", "music", "travelling", "movies"];
        $selectedHobbies = explode(" | ", $Hobbies);
        foreach ($allHobbies as $hobby) {
        $checked = in_array($hobby, $selectedHobbies) ? "checked" : "";
    echo "<input type='checkbox' name='hobbies[]' value='".htmlspecialchars($hobby)."' $checked> ";
    echo "<label>".htmlspecialchars(ucfirst($hobby))."</label><br>";
    }
    ?>
        
    <br>
    <input type="submit" value="<?=
    $editIndex !== -1 ? "Update" : "Save" ?>">
</form>

<hr>
<!--DISPLAY LIST OF ALL SAVED USERS -->
<h3>Saved Users:</h3>
<table border="1" cellpadding="8">
    <tr>
        <th>Name</th><th>Age</th><th>Email</th><th>Country</th><th>Gender</th><th>Hobbies</th>
    <th>Timestamp</th><th>Actions</th><
    /tr>
    <?php
    if (file_exists($file)) {
        $lines = file($file, FILE_IGNORE_NEW_LINES);
        foreach ($lines as $index =>
        $line) {
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
                <a href='?delete=$index' onclick='return
            confirm(\"Delet this entry?\")'>Delete</a>
            </td>
            </tr>";
        }
    } else {
        echo "<tr><td colspan='5'>No records found.</td></tr>";
    }
    ?>
</table>




















































































