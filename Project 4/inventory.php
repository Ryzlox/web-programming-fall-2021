<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <link rel="stylesheet" href="hw4.css">
    <title>Rent Car</title>
</head>
<body>
<h1>Pick a rental</h1>
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

$sql = "SELECT carName, type, price_per_day from inventory";
$result = $conn->query($sql);
if($result->num_rows > 0){

    echo "<table class='cr1'><tr><td><img src='BMW430i.jpg'></td><td>BMW 430i</td>";
    echo "<td><img src='Chevrolet_Spark.jpg'></td><td>Chevrolet Spark</td>";
    echo "<tr></table>";
    echo "<table class='cr2'><tr><td><img src='jetta.jpg'></td><td> VW Jetta</td>";
    echo "<td><img src='tiguan.jpg'></td><td> VW Tiguan</td>";
    echo "<tr></table>";
    echo "<table class='e'><tr><th>Car</th><th>Type</th><th>Price Per Day</th></tr>";

    while($row = $result->fetch_assoc()) {
    		 $car=$row["carName"];
    		 $type=$row["type"];
    		 $price=$row["price_per_day"];

             echo "<tr><td>".$car."</td><td>".$type."</td><td>".$price."</td></tr>";
    }
    	 echo "</table>";
    }else{
    echo "0 results";
    }
$conn->close();
?>
<br>
<form action="car_added.php" method="post">
    <label for="carName">Choose a Car:</label>
    <select name="carName" id="carName">
        <option value="Chevrolet Spark">Chevrolet Spark</option>
        <option value="BMW 430i">BMW 430i</option>
        <option value="Tiguan">VW Tiguan</option>
        <option value="VW Jetta">VW Jetta</option>
    </select>
</form>
<a href="car_added.php"><input type="button" value="Confirm"></a>
</body>
</html>