<!DOCTYPE html>
<html>
<head>
    <title>Arithmetic Calculator</title>
</head>
<body>

<h2>Arithmetic Calculator</h2>

<form method="POST">

Number 1:
<input type="text" name="num1"><br><br>

Number 2:
<input type="text" name="num2"><br><br>

Operation:
<select name="op">
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="*">*</option>
    <option value="/">/</option>
</select>

<br><br>
<button type="submit">Calculate</button>

</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $op = $_POST["op"];

    if (!is_numeric($num1) || !is_numeric($num2)) {
        echo "Inputs must be numeric.";
    }
    else {

        $num1 = (float)$num1;
        $num2 = (float)$num2;

        if ($op == "/" && $num2 == 0) {
            echo "Cannot divide by zero.";
        }
        else {

            switch ($op) {

                case "+":
                    $result = $num1 + $num2;
                    break;

                case "-":
                    $result = $num1 - $num2;
                    break;

                case "*":
                    $result = $num1 * $num2;
                    break;

                case "/":
                    $result = $num1 / $num2;
                    break;
            }

            echo "$num1 $op $num2 = $result";
        }
    }
}

?>

</body>
</html>