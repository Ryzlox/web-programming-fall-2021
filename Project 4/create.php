<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create</title>
</head>
<body>
<p>Login Successful</p>

<?php
    $servername = "localhost";
    $username = "ajohns9";
    $password = "ajohns9";
    $dbname = "ajohns9";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}

/*the following queries were done directly in DB shell(no workbench used)

$sql = "CREATE TABLE Customer
        (
          username VARCHAR(20) NOT NULL,
          password VARCHAR(10) NOT NULL,
          PRIMARY KEY (username)
        );
";
if ($conn->query($sql) === TRUE) {
} else {

}

$sql = "CREATE TABLE inventory
        (
          type VARCHAR(10) NOT NULL,
          carName VARCHAR(20) NOT NULL,
          numofcars INT NOT NULL,
          price INT NOT NULL,
          PRIMARY KEY (carName)
        );
";
if ($conn->query($sql) === TRUE) {
} else {

}
$sql = "CREATE TABLE parking_spots
        (
          spotnum VARCHAR(10) NOT NULL,
          vip_section VARCHAR(3) NOT NULL,
          spot_type VARCHAR(10) NOT NULL,
          PRIMARY KEY (spotnum)
        );
";
if ($conn->query($sql) === TRUE) {
} else {

}
$sql = "CREATE TABLE reservation
        (
          timeslot VARCHAR(10) NOT NULL,
          price_per_day INT NOT NULL,
          vip_section VARCHAR(3) NOT NULL,
          spotnum VARCHAR(10) NOT NULL,
          username VARCHAR(20) NOT NULL,
          PRIMARY KEY (spotnum, username),
          FOREIGN KEY (spotnum) REFERENCES parking_spots(spotnum),
          FOREIGN KEY (username) REFERENCES Customer(username)
        );
";
if ($conn->query($sql) === TRUE) {
} else {

}
$sql="CREATE TABLE confirm_res
      (
      vip_section VARCHAR(3) NOT NULL,
      price_per_day INT NOT NULL,
      timeslot VARCHAR(10) NOT NULL,
      username VARCHAR(20) NOT NULL,
      spotnum INT NOT NULL,
      spot_type VARCHAR(10) NOT NULL,
      PRIMARY KEY (username),
      FOREIGN KEY (username) REFERENCES Customer(username)
      );
      ";
if ($conn->query($sql) === TRUE) {
} else {

}

$sql = "CREATE TABLE pick_car
        (
          numchosen INT NOT NULL,
          carName VARCHAR(20) NOT NULL,
          PRIMARY KEY (numchosen, carName),
          FOREIGN KEY (carName) REFERENCES inventory(carName)
        );
";
if ($conn->query($sql) === TRUE) {
} else {

}

$sql = "CREATE TABLE basket
        (
          username VARCHAR(20) NOT NULL,
          carName VARCHAR(20) NOT NULL,
          numchosen INT NOT NULL,
          PRIMARY KEY (username, carName, numchosen),
          FOREIGN KEY (username) REFERENCES Customer(username),
          FOREIGN KEY (carName, numchosen) REFERENCES pick_car(carName, numchosen)
        );";
if ($conn->query($sql) === TRUE) {
} else {

}

$sql = "insert into inventory values ('Luxury','BMW 430i','200','2');"

$sql="insert into inventory values ('Compact','Chevrolet Spark','40','2');"

$sql="insert into inventory values ('SUV','Tiguan','100','2');"

$sql=" insert into inventory values ('Midsize','VW Jetta','50','2');"

$sql="insert into reservation values ('7','35','50');"

$sql="insert into reservation values ('6','30','45');"

$sql=" insert into reservation values ('4','20','35');"

$sql="insert into reservation values ('3','15','30');"

$sql="insert into reservation values ('2','10','25');"

$sql="insert into reservation values ('5','25','40');"

*/

$conn->close();

?>

</body>
</html>