<?php

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_FILES["avatar"]) && $_FILES["avatar"]["error"] == 0) {

        $file = $_FILES["avatar"];

        $allowed = ["image/jpeg", "image/png"];
        $maxSize = 2 * 1024 * 1024; // 2MB

        if (!in_array($file["type"], $allowed)) {
            $message = "Only JPG and PNG allowed.";
        }
        elseif ($file["size"] > $maxSize) {
            $message = "File too large (max 2MB).";
        }
        else {

            $ext = pathinfo($file["name"], PATHINFO_EXTENSION);
            $newName = uniqid() . "." . $ext;

            $target = "uploads/" . $newName;

            if (move_uploaded_file($file["tmp_name"], $target)) {
                $message = "Upload successful!";
            } else {
                $message = "Upload failed.";
            }
        }

    } else {
        $message = "File error.";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Avatar Upload</title>
</head>
<body>

<h2>Upload Avatar</h2>

<form method="POST" enctype="multipart/form-data">

<input type="file" name="avatar"><br><br>

<button type="submit">Upload</button>

</form>

<p><?php echo $message; ?></p>

</body>
</html>