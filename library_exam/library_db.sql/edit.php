<?php
include 'db.php';

$error = "";

if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("Invalid book ID");
}

$id = $_GET['id'];

$stmt = $conn->prepare("SELECT * FROM books WHERE id = ?");
$stmt->execute([$id]);
$book = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$book) {
    die("Book not found");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $isbn = trim($_POST['isbn']);
    $title = trim($_POST['title']);
    $author = trim($_POST['author']);
    $copies = trim($_POST['available_copies']);

    if ($isbn == "" || $title == "" || $author == "" || $copies == "") {
        $error = "Please fill all required fields!";
    } else {
        try {
            $stmt = $conn->prepare("UPDATE books
                                    SET isbn = ?, title = ?, author = ?, available_copies = ?
                                    WHERE id = ?");
            $stmt->execute([$isbn, $title, $author, $copies, $id]);

            header("Location: index.php");
            exit;
        } catch (PDOException $e) {
            $error = "Error: " . $e->getMessage();
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Book</title>
    <style>
        body {
            font-family: Arial;
            background: #f5f5f5;
            padding: 20px;
        }
        .container {
            width: 400px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
        }
        input {
            width: 100%;
            padding: 8px;
            margin: 8px 0 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            width: 100%;
            padding: 10px;
            background: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .back {
            display: block;
            text-align: center;
            margin-top: 10px;
            color: #007bff;
            text-decoration: none;
        }
        .error {
            color: red;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Edit Book</h2>

    <?php if ($error != ""): ?>
        <p class="error"><?= $error ?></p>
    <?php endif; ?>

    <form method="POST">
        ISBN:
        <input name="isbn" value="<?= htmlspecialchars($book['isbn']) ?>" required>

        Title:
        <input name="title" value="<?= htmlspecialchars($book['title']) ?>" required>

        Author:
        <input name="author" value="<?= htmlspecialchars($book['author']) ?>" required>

        Copies:
        <input name="available_copies" value="<?= htmlspecialchars($book['available_copies']) ?>" required>

        <button type="submit">Update</button>
    </form>

    <a href="index.php" class="back">← Back</a>
</div>

</body>
</html>