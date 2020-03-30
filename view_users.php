<?php
	session_start();
	//print_r($_SESSION['user']);

	require_once('../service/functions.php');
	//require('db.php');
	$result = getAllUsers();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Profiles</title>
</head>
<body>

		<a href="home.php"> Back</a> | 
		<a href="index.html"> logout</a> 
		<br>
		
		<table border=1>
			<tr>
				<td>ID</td>
				<td>USERNAME</td>
				<td>PASSWORD</td>
				<td>Email</td>
				<td>TYPE</td>
				<td>Action</td>
			</tr>

	<?php	while($row = mysqli_fetch_assoc($result)){ ?>
		
		<tr>
		
			<td><?=$row['name']?></td>
			<td><?=$row['pass']?></td>
			<td><?=$row['mail']?></td>
			<td><?=$row['type']?></td>
			<td>
				<a href="../views/edit.php?pass=<?=$row['pass'],$row['mail'],
				$row['name'],
				$row['type']
				?>">Edit</a> |
				<a href="../views/delete.php?pass=<?=$row['pass']?>">Delete</a> 
			</td>
		</tr>
	<?php } ?>

	</table>
</body>
</html>