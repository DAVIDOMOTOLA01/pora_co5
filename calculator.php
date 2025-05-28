<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['num1'], $_POST['num2'], $_POST['operation'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];

        if (!is_numeric($num1) || !is_numeric($num2)) {
            echo "Error: Both inputs must be numeric.";
            exit;
        }

        switch ($operation) {
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

<form action="calculator.php" method="post">
    <label>Number 1:</label>
    <input type="text" name="num1"><br><br>
    <label>Number 2:</label>
    <input type="text" name="num2"><br><br>
    <label>Operation:</label>
    <select name="operation">
        <option value="addition">Addition</option>
        <option value="subtraction">Subtraction</option>
        <option value="multiplication">Multiplication</option>
        <option value="division">Division</option>
    </select><br><br>
    <input type="submit" value="Calculate">
</form>


<pre>
<?php
if (file_exists("users.txt")) {
    echo htmlspecialchars(file_get_contents("users.txt"));
} else {
    echo "No data available yet.";
}
?>
</pre>


