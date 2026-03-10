<?php

$username = $_POST["username"] ?? "";
$password = $_POST["password"] ?? "";

if (isset($_POST["bio"])) {

    $bio = $_POST["bio"];
    $location = $_POST["location"];

    echo "<h2>Registration Complete</h2>";
    echo "<ul>";
    echo "<li>Username: $username</li>";
    echo "<li>Password: $password</li>";
    echo "<li>Bio: $bio</li>";
    echo "<li>Location: $location</li>";
    echo "</ul>";

    exit;
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Step 2</title>
</head>
<body>

<h2>Step 2: Profile Info</h2>

<form method="POST">

<input type="hidden" name="username" value="<?php echo $username; ?>">
<input type="hidden" name="password" value="<?php echo $password; ?>">

Bio:<br>
<textarea name="bio"></textarea><br><br>

Location:<br>
<input type="text" name="location"><br><br>

<button type="submit">Submit</button>

</form>

</body>
</html>