<?php
	session_start();
	require('../service/functions.php');

	if($_SESSION['user']['type'] == "admin")
	{
		$pass = $_GET['pass'];
		$user = getSelectedUser($pass);
		$_SESSION['selectedUser'] = $user;

		echo $user;
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit User Info</title>
</head>
<body>
	<h2>Edit User Info</h2>
	<form action = "../php/update.php" method = "post">
		<table>
			<tr>
				<td>Username:</td>
				<td><input type="text" name="username" value="<?=$user['name']?>"></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="password" value="<?=$user['pass']?>"></td>
			</tr>
			<tr>
				<td>email:</td>
				<td><input type="text" name="email" value="<?=$user['mail']?>"></td>
			</tr>
			<tr>
				<td>type:</td>
				<td><input type="text" name="type" value="<?=$user['type']?>"></td>
			</tr>
			<tr>
				<td><input type="submit" name="change" value="Submit Changes"></td>
				<td><input type="submit" name="cancel" value="Cancel"></td>
			</tr>
		</table>
	</form>
</body>
</html>