<?php
	session_start();
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "login";

	$conn = new mysqli($servername, $username, $password, $dbname);

	if($conn->connect_error){
		die("connection failed");
	}
	$email = $_POST["email"];
	$password = $_POST["password"];
	$result = mysqli_query($conn, 'select * from signup where email="'.$email.'" and password="'.$password.'"');	
	$row = $result->fetch_assoc();
	if(mysqli_num_rows($result)==1){
		$_SESSION['user'] = $row["name"];
		header('Location: success.php');
	}
	else{
		echo "bad luck next time";
	}


?>