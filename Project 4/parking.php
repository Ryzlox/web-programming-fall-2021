<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <link rel="stylesheet" href="hw4.css">
    <title>Pick parking spot</title>
</head>
<body>
<h1>Pick parking spot</h1>
<?php
$servername = "localhost";
$username = "ajohns9";
$password = "ajohns9";
$dbname = "ajohns9";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
     die("Can't Connect: " . $conn->connect_error);
}
$sql = "SELECT username from Customer;";
$customer = $conn->query($sql);
$cus = $customer->fetch_assoc();
$user =$cus["username"];
echo "Welcome ".$user."!";

$sql = "SELECT spot_type,spotnum, section, vip_section from parking_spots order by spot_type ASC";
$result = $conn->query($sql);
if($result->num_rows > 0){

    echo "<table class='e'><tr><th>Spot Type</th><th>Spot Number</th><th>Section</th><th>Vip Section</th></tr>";

    while($row = $result->fetch_assoc()) {
    		 $spottype=$row["spot_type"];
    		 $spotnum=$row["spotnum"];
    		 $section=$row["section"];
    		 $vip=$row["vip_section"];

             echo "<tr><td>".$spottype."</td><td>".$spotnum."</td><td>".$section."</td><td>".$vip."</td></tr>";
    }
    	 echo "</table>";
    }else{
    echo "0 results";
    }


$conn->close();
?>
<br>
<form action="chosen.php" method="post">
    Pick spot number: <input type="number" name="spotnum">
    <br>
    How many days?
    <select name="numdays">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
    </select>
        <input type="submit">
    </select>
</form>

</body>
</html>