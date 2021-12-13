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

<button id = "button1">Make a new acccount"</button>
<button id = "button2">Login</button>


<script type="text/javascript">
    document.getElementById("button1").onclick = function () {
        location.href = "register.php";
    };
	
    document.getElementById("button2").onclick = function () {
        location.href = "login.php";
    };

</script>

</body>
</html>