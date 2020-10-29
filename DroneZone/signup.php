<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
	die("connection failed");
}

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
// $salt="tanishq";
// $password_encrypted = sha1($password,$salt);

$sql = "INSERT INTO signup (name, email, password) VALUES ('$name', '$email', '$password')";

if($conn->query($sql) === TRUE){
	?>
	<script type="text/javascript">
		alert("values have been inserted");
	</script>
	<?php
}
else{
	?>
	<script type="text/javascript">
		alert('values did not insert');
	</script>
	<?php
}

?>