<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "login";

	$conn = new mysqli($servername, $username, $password, $dbname);

	if($conn->connect_error){
		die("connection failed");
	}

	$email = $_POST["email"];
	 $sql="INSERT INTO letter(email) values ('$email')";
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