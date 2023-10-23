<?php
	$name = $_POST['name'];
	$city = $_POST['city'];
	$nic = $_POST['nic'];
	$contactNo = $_POST['contactNo'];
	$host = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "customer_info";

	$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

	if (mysqli_connect_error()) {
		die('Connect Error ('.
			mysqli_connect_errorno().')'.
			mysqli_connect_errorno());
	}
	else {
		$sql = "INSERT INTO customer_info (name, city, nic, contact_no) values ('$name', '$city', '$nic', '$contactNo')";
		if ($conn->query($sql)) {
			echo "OK!";
		}
		else{
			echo "Error: ". $sql . "<br>". $conn->error;
		}
		$conn->close();
	}
?>