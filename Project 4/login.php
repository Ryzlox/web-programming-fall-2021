<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
<h1>Login:</h1>
<p></p>
<p></p>

<form method="post" action="" name="signin-form">
  <div class="form-element">
    <label>Username:</label>
    <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
  </div>
  <div class="form-element">
    <label>Password:</label>
    <input type="password" name="password" required />
  </div>
  <button type="submit" name="login" value="login">Log In</button>
</form>

<?php
    $servername = "localhost";
    $username = "ajohns9";
    $password = "ajohns9";
    $dbname = "ajohns9";

    session_start();
    include('config.php');
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = $connection->prepare("SELECT * FROM users WHERE username=:username");
        $query->bindParam("username", $username, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
        if (!$result) {
            echo '<p class="error">Username password combination is wrong!</p>';
        } else {
            if (password_verify($password, $result['password'])) {
                $_SESSION['user_id'] = $result['id'];
                echo '<p class="success">Congratulations, you are logged in!</p>';
            } else {
                echo '<p class="error">Username password combination is wrong!</p>';
            }
        }
    }
	
$conn->close();
?>



<input type="button" onclick="location.href='register.php'" value="Make a new acccount">
<input type="button" onclick="location.href='login.php'" value="Login">
<input type="button" onclick="location.href='checkout.php'" value="Visit your cart">

</body>
</html>