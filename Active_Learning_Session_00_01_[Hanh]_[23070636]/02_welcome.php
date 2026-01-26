<?php
date_default_timezone_set("Asia/Ho_Chi_Minh");

$name  = "Nguyễn Thị Hồng Hạnh";
$id    = "23070636";
$class = "INS3064 - INS306402";
$email = "23070636@vnu.edu.vn";

$date = date("l, F d, Y");
$time = date("H:i:s");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #6a82fb, #8f5bdc);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .card {
            background: white;
            width: 700px;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }
        h1 {
            text-align: center;
            color: #6a82fb;
        }
        .info {
            background: #f2f2f2;
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
        }
        .label {
            color: #6a82fb;
            font-weight: bold;
        }
        p {
            font-size: 18px;
        }
    </style>
</head>
<body>

<div class="card">
    <h1>Welcome to INS306402</h1>

    <div class="info">
        <p><span class="label">Name:</span> <?php echo $name; ?></p>
        <p><span class="label">Student ID:</span> <?php echo $id; ?></p>
        <p><span class="label">Class:</span> <?php echo $class; ?></p>
        <p><span class="label">Email:</span> <?php echo $email; ?></p>
        <p><span class="label">Date:</span> <?php echo $date; ?></p>
        <p><span class="label">Time:</span> <?php echo $time; ?></p>
    </div>
</div>

</body>
</html>
