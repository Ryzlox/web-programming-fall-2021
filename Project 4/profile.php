<!DOCTYPE html>
<?php
include('create.php');
?>
<html>
<head>
	<link rel="stylesheet" href="./style.css">
	<meta charset="utf-8">
	<title>Profile Info</title>
</head>
<body>

<h5>Profile</h5>
<?php
$username = $_SESSION['username'];
echo "<p>Username: ".$username;
echo "</p>";
?>

<hr>

<h5>Order History</h5>

<table border='2'>
  <tr>
    <th>Car name</th>
    <th>Price per day</th>
    <th>type</th>
  </tr>

<?php

$profile_data = mysqli_query($conn,"SELECT * FROM basket WHERE username = '{$username}'");

while($data = mysqli_fetch_array($profile_data))
{
?>
  <tr>
    <td><?php echo $data['carName']; ?></td>
    <td><?php echo $data['price_per_day']; ?></td>
    <td><?php echo $data['type']; ?></td>
  </tr>	
<?php
}
?>
</table>

</body>
</html>