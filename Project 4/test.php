<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
$sql = "SELECT username from basket;";
$customer = $conn->query($sql);
$cus = $customer->fetch_assoc();
$user =$cus["username"];
echo "Welcome ".$user."!";
$name=$_POST['carName'];
echo "<br>".$name."<br>";

/*$sql = "INSERT INTO basket(carName) VALUES (?)";
$stmt= $conn->prepare($sql);
$stmt->bind_param("s", $name);
$stmt->execute();*/


$sql= "SELECT * FROM basket where username= ?";
$stmt= $conn->prepare($sql);
$stmt->bind_param("s", $user);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
	echo "<table><tr><th>Customer</th><th>Price pr day</th><th>Car Name</th><th>Car Type</th></tr>";
     while($row = $result->fetch_assoc()) {
		 $one=$row["username"];
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