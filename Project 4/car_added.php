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
$sql = "SELECT username from basket";
 $customer = $conn->query($sql);
 $cus = $customer->fetch_assoc();
 $user =$cus["username"];
echo "<br>Welcome" .$user."!";
$carName=$_POST['carName'];
echo "You chose ".$carName. " ";

$sql = "INSERT INTO basket(carName) VALUES ('$name')";
if ($conn->query($sql) === TRUE) {
    echo "Car added";
} else {
    echo "Car not added";
}

/*$sql = "SELECT price_per_day, type from inventory where carName = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $carName);
$stmt->execute();
$result=$stmt->get_result();
$inven=$result->fetch_assoc();

$price=$inven["price_per_day"];
$carType=$inven["type"];

$sql ="INSERT INTO basket SET price_per_day=?, type=?, carName=? WHERE username=?";
$stmt= $conn->prepare($sql);
$stmt->bind_param("isss", $price,$type,$carName,$user);
$stmt->execute();

$sql= "SELECT * FROM basket";
$result = $conn->query($sql);
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





$sql = "SELECT price_per_day, type from inventory where carName = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $carName);
$stmt->execute();
$purch = $stmt->get_result();
$purchase = $purch->fetch_assoc();
$price=$purchase["price_per_day"];
$type=$purchase["type"];

$sql ="INSERT INTO basket SET price_per_day=?, type=?, carName=? WHERE username=?";
$stmt= $conn->prepare($sql);
$stmt->bind_param("isss", $price,$type,$carName,$user);
$stmt->execute();

$sql = "SELECT username, price_per_day, type, carName FROM basket";
$result = $conn->query($sql);
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
}*/




$conn->close();
?>

<input type="button" value="Confirm">
</body>
</html>