<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="./stylesheet.css">
	<meta charset="utf-8">
	<title>Shopping Card</title>
</head>
<body>

<h2>Reserved Spots</h2>

<table border='2'>
  <tr>
    <th>Price per day</th>
    <th>Car name</th>
    <th>Type</th>
  </tr>

<?php

include ("create.php");
$username = $_SESSION['username'];

$reserved_data = mysqli_query($conn,"SELECT * FROM basket where username = '{$username}'");

while($data = mysqli_fetch_array($reserved_data))
{
?>
  <tr>
    <td><?php echo $data['price_per_day']; ?></td>
    <td><?php echo $data['carName']; ?></td>
    <td><?php echo $data['type']; ?></td>
  </tr>	
<?php
}
?>
</table>

<a href='checkout.html'>Click to checkout</a>

<?php mysqli_close($conn); ?>

</body>
</html>