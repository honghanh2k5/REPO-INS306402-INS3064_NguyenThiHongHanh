<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullname = trim($_POST["fullname"]);
    $email = trim($_POST["email"]);
    $phone = trim($_POST["phone"]);
    $message = trim($_POST["message"]);

    if (empty($fullname) || empty($email) || empty($phone) || empty($message)) {
        echo "Missing Data";
    } 
    else {

        echo "<h2>Submitted Information</h2>";
        echo "<ul>";
        echo "<li>Full Name: $fullname</li>";
        echo "<li>Email: $email</li>";
        echo "<li>Phone Number: $phone</li>";
        echo "<li>Message: $message</li>";
        echo "</ul>";

    }

} 
else {
    echo "Invalid Request";
}

?>