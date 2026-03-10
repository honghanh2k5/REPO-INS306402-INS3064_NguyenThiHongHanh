<?php

$page = $_GET["page"] ?? "home";

$file = "pages/" . $page . ".php";

?>

<!DOCTYPE html>
<html>
<head>
<title>Simple Router</title>
</head>
<body>

<h2>Simple Router</h2>

<nav>
<a href="?page=home">Home</a> |
<a href="?page=contact">Contact</a>
</nav>

<hr>

<?php

if (file_exists($file)) {
    include $file;
} else {
    echo "<h3>Page Not Found</h3>";
}

?>

</body>
</html>