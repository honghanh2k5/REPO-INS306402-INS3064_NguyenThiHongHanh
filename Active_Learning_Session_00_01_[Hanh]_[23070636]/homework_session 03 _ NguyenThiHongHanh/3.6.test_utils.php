<?php

require "utils.php";

echo "<h2>Validation Test</h2>";

$email = "test@gmail.com";
echo "Email Test: ";
echo validateEmail($email) ? "Pass<br>" : "Fail<br>";

$username = "Hanh";
echo "Length Test: ";
echo validateLength($username, 3, 10) ? "Pass<br>" : "Fail<br>";

$password = "abc@123";
echo "Password Test: ";
echo validatePassword($password) ? "Pass<br>" : "Fail<br>";

$data = "  Hello <script> ";
echo "Sanitize Test: ";
echo sanitize($data);

?>