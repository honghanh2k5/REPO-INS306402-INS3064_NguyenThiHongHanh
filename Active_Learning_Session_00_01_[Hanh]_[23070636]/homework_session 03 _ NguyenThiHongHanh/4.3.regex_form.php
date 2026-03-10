<?php

$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $password = $_POST["password"];

    // username validation
    if (!preg_match("/^[a-zA-Z0-9]+$/", $username)) {
        $errors[] = "Username must contain only letters and numbers";
    }

    // password checks
    if (!preg_match("/[A-Z]/", $password)) {
        $errors[] = "Password missing uppercase letter";
    }

    if (!preg_match("/[a-z]/", $password)) {
        $errors[] = "Password missing lowercase letter";
    }

    if (!preg_match("/[0-9]/", $password)) {
        $errors[] = "Password missing number";
    }

    if (!preg_match("/[\W]/", $password)) {
        $errors[] = "Password missing symbol";
    }

    if (empty($errors)) {
        echo "<h2>Registration Successful</h2>";
        exit;
    }
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Regex Validation</title>
</head>
<body>

<h2>Register</h2>

<?php
foreach ($errors as $e) {
    echo "<p style='color:red;'>$e</p>";
}
?>

<form method="POST">

Username:<br>
<input type="text" name="username"><br><br>

Password:<br>
<input type="password" name="password"><br><br>

<button type="submit">Register</button>

</form>

</body>
</html>