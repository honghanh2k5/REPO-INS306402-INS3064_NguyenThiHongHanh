
<?php
// Kiểm tra form có được gửi bằng POST không
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Lấy dữ liệu và loại bỏ khoảng trắng dư
    $fullname = trim($_POST["fullname"]);
    $email    = trim($_POST["email"]);
    $message  = trim($_POST["message"]);

    // Kiểm tra dữ liệu rỗng
    if (empty($fullname) || empty($email) || empty($message)) {
        echo "❌ Please fill in all fields!";
    }
    // Kiểm tra email hợp lệ
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "❌ Invalid email format!";
    }
    else {
        // Nếu hợp lệ
        echo "<h3>✅ Form Submitted Successfully!</h3>";
        echo "Name: " . htmlspecialchars($fullname) . "<br>";
        echo "Email: " . htmlspecialchars($email) . "<br>";
        echo "Message: " . htmlspecialchars($message);
    }

} else {
    echo "⚠️ Invalid request.";
}
?>
