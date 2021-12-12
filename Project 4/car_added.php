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
$cName=$_POST["carName"];
$sql = "SELECT username from basket;";
$customer = $conn->query($sql);
$cus = $customer->fetch_assoc();
$user =$cus["username"];


$sql = "SELECT price_per_day, type from inventory where carName = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $cName);
$stmt->execute();
$purch = $stmt->get_result();
$purchase = $purch->fetch_assoc();
$p=$purch["price_per_day"];
$t=$purch["type"];

$sql ="UPDATE basket SET price_per_day=?, type=?, carName=? where username=?";
$stmt= $conn->prepare($sql);
$stmt->bind_param("isss", $p,$t,$cName,$user);
$stmt->execute();

$sql = "SELECT username, price_per_day, carName, type FROM basket";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	echo "<table><tr><th>Customer</th><th>Price pr day</th><th>Car Name</th><th>Car Type</th></tr>";
     while($row = $result->fetch_assoc()) {
		 $one=$row["usernamae"];
		 $two=$row["price_per_day"];
		 $three=$row["carName"];
		 $four=$row["type"];


         echo "<tr><td>".$one."</td><td>".$two."</td><td>".$three."</td><td>".$four."</td></tr>";
     }
	 echo "</table>";
} else {
     echo "0 results";
}




$conn->close();
?>

<input type="button" value="Confirm">
</body>
</html>