<?php

$errors = [];
$name = "";
$email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);

    if ($name == "") {
        $errors["name"] = "Name is required";
    }

    if ($email == "") {
        $errors["email"] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors["email"] = "Invalid email format";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Error Summary</title>

<style>
.error {
    border: 2px solid red;
}

.alert {
    background: #ffdddd;
    border: 1px solid red;
    padding: 10px;
    margin-bottom: 15px;
}
</style>

</head>
<body>

<h2>Contact Form</h2>

<?php if (!empty($errors)): ?>

<div class="alert">
<strong>Please fix the following errors:</strong>
<ul>
<?php foreach ($errors as $e): ?>
<li><?php echo $e; ?></li>
<?php endforeach; ?>
</ul>
</div>

<?php endif; ?>

<form method="POST">

Name:<br>
<input type="text" name="name"
value="<?php echo htmlspecialchars($name); ?>"
class="<?php echo isset($errors['name']) ? 'error' : ''; ?>">
<br><br>

Email:<br>
<input type="text" name="email"
value="<?php echo htmlspecialchars($email); ?>"
class="<?php echo isset($errors['email']) ? 'error' : ''; ?>">
<br><br>

<button type="submit">Submit</button>

</form>

</body>
</html>