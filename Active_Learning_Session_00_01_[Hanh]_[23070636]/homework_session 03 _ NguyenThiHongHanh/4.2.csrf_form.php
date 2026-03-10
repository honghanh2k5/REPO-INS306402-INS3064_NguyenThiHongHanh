<?php
session_start();

if (!isset($_SESSION["csrf_token"])) {
    $_SESSION["csrf_token"] = bin2hex(random_bytes(32));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (!isset($_POST["csrf_token"]) || $_POST["csrf_token"] !== $_SESSION["csrf_token"]) {
        die("403 Forbidden");
    }

    echo "<h2>Form submitted successfully</h2>";
}

?>

<!DOCTYPE html>
<html>
<head>
<title>CSRF Protection</title>
</head>
<body>

<h2>Secure Form</h2>

<form method="POST">

<input type="hidden" name="csrf_token" value="<?php echo $_SESSION["csrf_token"]; ?>">

Name:<br>
<input type="text" name="name"><br><br>

<button type="submit">Submit</button>

</form>

</body>
</html>