<?php
include 'db.php';

$stmt = $conn->query("SELECT * FROM books");
$books = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Library</title>

    <style>
        body {
            font-family: Arial;
            background: #f5f5f5;
            padding: 20px;
        }

        h2 {
            text-align: center;
        }

        a {
            text-decoration: none;
            color: white;
            padding: 6px 10px;
            background: #007bff;
            border-radius: 4px;
            margin-right: 5px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            background: white;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }

        th {
            background: #333;
            color: white;
        }

        tr:nth-child(even) {
            background: #f9f9f9;
        }
    </style>

</head>
<body>

<h2>Book List</h2>
<a href="add.php">Add New Book</a>

<table>
<tr>
    <th>ID</th>
    <th>Title</th>
    <th>Author</th>
    <th>Copies</th>
    <th>Actions</th>
</tr>

<?php foreach ($books as $book): ?>
<tr>
    <td><?= $book['id'] ?></td>
    <td><?= $book['title'] ?></td>
    <td><?= $book['author'] ?></td>
    <td><?= $book['available_copies'] ?></td>
    <td>
        <a href="edit.php?id=<?= $book['id'] ?>">Edit</a>
        <a href="delete.php?id=<?= $book['id'] ?>" onclick="return confirm('Delete?')">Delete</a>
    </td>
</tr>
<?php endforeach; ?>

</table>

</body>
</html>