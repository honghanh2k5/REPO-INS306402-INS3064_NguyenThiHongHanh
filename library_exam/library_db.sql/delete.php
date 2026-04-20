<?php
include 'db.php';

if (!isset($_GET['id'])) {
    die("Invalid book ID.");
}

$id = $_GET['id'];

$stmt = $conn->prepare("DELETE FROM books WHERE id=?");
$stmt->execute([$id]);

header("Location: index.php");
exit;
?>