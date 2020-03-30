<?php
	session_start();
$con = mysqli_connect('127.0.0.1', 'root', '', 'lab');

	if(isset($_POST['submit'])){
	
		$name = $_POST['username'];
		$pass = $_POST['password'];
		$mail = $_POST['email'];
		$type = $_POST['type'];

		}

	

		
		$sql = "Insert into user values('{$name}','{$pass}','{$mail}','{$type}')";
			
			if(mysqli_query($con, $sql)){
		header("location: ../index.html");
		}
		else{
		echo "Error";
	}

	?>