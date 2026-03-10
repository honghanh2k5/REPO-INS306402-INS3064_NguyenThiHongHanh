<?php
$failed = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $password = $_POST["password"];
    $failed = $_POST["failed"];

    if ($username == "admin" && $password == "123456") {
        echo "Login Successful";
    } 
    else {
        $failed++;
        echo "Invalid Credentials<br>";
        echo "Failed Attempts: $failed";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
</head>
<body>

<h2>Login Form</h2>

<form method="POST">

Username:
<input type="text" name="username"><br><br>

Password:
<input type="password" name="password"><br><br>

<input type="hidden" name="failed" value="<?php echo $failed; ?>">

<button type="submit">Login</button>

</form>

</body>
</html>