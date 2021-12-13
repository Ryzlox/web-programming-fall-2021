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
$spotnum=$_REQUEST['spotnum'];
$numdays=$__REQUEST['numdays'];

$query="SELECT spot_type FROM parking_spots WHERE spotnum=?";
$stmt=$conn->prepare($query);
$stmt->bind_param("s", $spotnum);
$stmt->execute();
$result = $stmt->get_result();
$parking = $result->fetch_assoc();
$spot_type=$parking['spot_type'];
echo " ".$spot_type."<br>";
echo " ".$spotnum."<br>";
echo " ".$numdays."<br>";


//$sql="INSERT INTO confirm_res SET spotnum='$spotnum', spot_type='$spot_type'";

$conn->close();
?>


</body>
</html>