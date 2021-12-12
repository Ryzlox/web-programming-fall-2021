<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <link rel="stylesheet" href="hw4.css">
    <title>Rent Car</title>
</head>
<body>
<h1>Artist Database</h1>
<?php
$servername = "localhost";
$username = "ajohns9";
$password = "ajohns9";
$dbname = "ajohns9";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
     die("Can't Connect: " . $conn->connect_error);
}

$

$conn->close();
?>

<input type="button" onclick="location.href='add_artist.html'" value="Add Artist">
<input type="button" onclick="location.href='add_album.html'" value="Add Album">
<a href="login.php"><input type="button" value="Logout"></a>
</body>
</html>