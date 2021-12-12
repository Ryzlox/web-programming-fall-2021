<?php
include("create.php");
session_start();

	if (!isset($_POST['username'], $_POST['password'])) {
		exit('Please fill the form to complete login');
	}

	if (empty($_POST['username']) || empty($_POST['password'])) {
		exit('Please fill all the fields');
	}

	$stmt = $conn->prepare('SELECT id FROM Customer WHERE username = ? and password = ?');
	$stmt->bind_param('ss', $_POST['username'], $_POST['password']);
	$stmt->execute();
	$stmt->store_result();
	
	if($stmt-> num_rows > 0) {
		echo 'Successfully logged in';
		$_SESSION['loggedIn'] = true;
		$_SESSION['username'] = $_POST['username'];
		header('Location: index.php');
		
	} else {
		header('Location: login_failed.html');
	}

$conn->close();
?>