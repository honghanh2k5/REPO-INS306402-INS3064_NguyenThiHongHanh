<?php

$method = "POST";

if (isset($_GET["method"])) {
    $method = $_GET["method"];
}

?>

<!DOCTYPE html>
<html>
<head>
<title>GET vs POST</title>
</head>
<body>

<h2>Method Toggle Form</h2>

<form method="<?php echo $method; ?>">

Name:<br>
<input type="text" name="name"><br><br>

<button type="submit">Submit</button>

</form>

<br>

<a href="?method=GET">Send via GET</a> |
<a href="?method=POST">Send via POST</a>

<hr>

<?php

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["name"])) {
    echo "<h3>GET Data:</h3>";
    print_r($_GET);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h3>POST Data:</h3>";
    print_r($_POST);
}

?>

</body>
</html>