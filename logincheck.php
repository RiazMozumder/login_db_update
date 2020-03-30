<?php
	
	session_start();

	include('../service/functions.php');
	//include_once('db.php');
	//require('db.php');
	//require_once('db.php');

	if(isset($_POST['submit'])){

		$name = $_POST['username'];
		$pass = $_POST['password'];
			
		$user = validate($name, $pass);

		if(count($user) > 0 ){
			$_SESSION['user'] = $user;
			//echo "test";
			header("location: ../views/home.php");
		}else{
			echo "invalid username/password";
		}
	}	

?>