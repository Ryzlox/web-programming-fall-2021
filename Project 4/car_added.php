<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <link rel="stylesheet" href="hw4.css">
    <title>car added</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "ajohns9";
$password = "ajohns9";
$dbname = "ajohns9";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
     die("Can't Connect: " . $conn->connect_error);
}
$carName=$_POST["carName"];






$conn->close();
?>

<input type="button" value="Confirm">
</body>
</html>