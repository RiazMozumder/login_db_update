<?php
	
	require('db.php');
	
	function validate($name, $pass){

		$con = getConnection();
		$sql = "select * from user where name='{$name}' and pass='{$pass}'";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);

		return $user;
	}


	function getAllUsers(){
		$con = getConnection();
		$sql = "select * from user";
		$result = mysqli_query($con, $sql);
		return $result;
	}
	
		function getSelectedUser($pass)
	{
		$con = getConnection();
		$sql = "select * from user where pass = {$pass}";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);

		return $user;
	}

		function update($name,$pass,$mail,$type)
	{
		$con = getConnection();
		$sql = "update users set name = '{$name}', pass = '{$pass}', mail = '{$mail}', type = '{$type}'";
		
		if(mysqli_query($con, $sql))
		{
			$result = "User info successfully updated!";
		}
		else
		{
			$result = "Error";
		}

		return $result;
	}

	function deleteUser($id)
	{
		$con = getConnection();
		$sql = "delete from user where pss = {$pass}";

		if(mysqli_query($con, $sql))
		{
			$result = "User successfully removed!";
		}
		else
		{
			$result = "Error";
		}

		return $result;
	}


?>