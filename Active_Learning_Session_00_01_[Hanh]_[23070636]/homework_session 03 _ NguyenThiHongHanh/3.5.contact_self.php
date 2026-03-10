<?php

$submitted = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $fullname = trim($_POST['fullname']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

    if (!empty($fullname) && !empty($email) && !empty($message)) {
        $submitted = true;
    } else {
        echo "Missing Data<br><br>";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Contact Form</title>
</head>
<body>

<?php if ($submitted): ?>

<h2>Thank You!</h2>
<p>Your message has been submitted.</p>

<?php else: ?>

<h2>Contact Form</h2>

<form method="POST">

Full Name:<br>
<input type="text" name="fullname"><br><br>

Email:<br>
<input type="email" name="email"><br><br>

Message:<br>
<textarea name="message"></textarea><br><br>

<button type="submit">Submit</button>

</form>

<?php endif; ?>

</body>
</html>