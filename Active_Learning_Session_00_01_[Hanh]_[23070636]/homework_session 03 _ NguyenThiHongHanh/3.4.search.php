<!DOCTYPE html>
<html>
<head>
<title>Search</title>
</head>
<body>

<h2>Search</h2>

<form method="GET">

<input 
type="text" 
name="q" 
placeholder="Enter search term"
value="<?php echo isset($_GET['q']) ? htmlspecialchars($_GET['q']) : ''; ?>"
>

<button type="submit">Search</button>

</form>

<?php

if (isset($_GET['q']) && $_GET['q'] != "") {

    $query = htmlspecialchars($_GET['q']);

    echo "<p>You searched for: <b>$query</b></p>";
}

?>

</body>
</html>