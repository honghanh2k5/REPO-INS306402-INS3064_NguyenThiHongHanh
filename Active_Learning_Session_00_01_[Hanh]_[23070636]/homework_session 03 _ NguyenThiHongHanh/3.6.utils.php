<?php

function sanitize($data) {
    return htmlspecialchars(trim($data));
}

function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function validateLength($str, $min, $max) {
    $len = strlen($str);
    return ($len >= $min && $len <= $max);
}

function validatePassword($pass) {
    if (strlen($pass) < 6) {
        return false;
    }

    // kiểm tra có ký tự đặc biệt
    if (!preg_match("/[!@#$%^&*(),.?\":{}|<>]/", $pass)) {
        return false;
    }

    return true;
}

?>