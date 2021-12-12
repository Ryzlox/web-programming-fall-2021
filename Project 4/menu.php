<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Main Menu</title>
</head>
<body>
<h1>Welcome to Cartopia</h1>
<p>If you are new to the website, please create an account below.</p>
<p>Otherwise, log in to begin purchasing!</p>
<?php
    $servername = "localhost";
    $username = "ajohns9";
    $password = "ajohns9";
    $dbname = "ajohns9";

$conn->close();
?>

<input type="button" onclick="location.href='register.php'" value="Make a new acccount">
<input type="button" onclick="location.href='login.php'" value="Login">
<input type="button" onclick="location.href='checkout.php'" value="Visit your cart">


</body>
</html>