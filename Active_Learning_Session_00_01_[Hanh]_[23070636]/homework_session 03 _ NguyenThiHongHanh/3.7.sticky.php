<?php

$name = "";
$email = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $password = $_POST["password"];

    if (strlen($password) < 6) {
        $error = "Password too short";
    } else {
        echo "<h2>Form Submitted Successfully</h2>";
        exit;
    }
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Sticky Form</title>
</head>
<body>

<h2>Register</h2>

<?php
if ($error != "") {
    echo "<p style='color:red;'>$error</p>";
}
?>

<form method="POST">

Name:<br>
<input type="text" name="name" value="<?php echo $name; ?>"><br><br>

Email:<br>
<input type="text" name="email" value="<?php echo $email; ?>"><br><br>

Password:<br>
<input type="password" name="password"><br><br>

<button type="submit">Submit</button>

</form>

</body>
</html>