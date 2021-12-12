<?php
include("create.php");

	if (!isset($_POST['username'], $_POST['password'])) {
		exit('Please fill the form to complete registration');
	}

	if (empty($_POST['username']) || empty($_POST['password'])) {
		exit('Please fill all the fields');
	}

	$stmt = $conn->prepare('SELECT id, password FROM Customer WHERE username = ?');
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	$stmt->store_result();
	
	if($stmt-> num_rows > 0) {
		echo 'User already registered';
	} else {
		$stmt = $conn->prepare('INSERT INTO Customer (username, password) VALUES (?, ?)');
		$stmt->bind_param('ss', $_POST['username'], $_POST['password']);
		$stmt->execute();
		session_start();
		$_SESSION['loggedIn'] = true;
		$_SESSION['username'] = $_POST['username'];
		echo 'User successfully created!';
		header('Location: index.php');
	}
	
$conn->close();
?>