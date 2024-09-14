<?php

require "../model/function.php";

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$confirmPassword = $_POST['confirmPassword'];
	$duplicate = mysqli_query($conn, "SELECT * FROM users WHERE name = '$name' OR email = '$email'");
	if (mysqli_num_rows($duplicate) > 0) 
	{
		echo "
		<script>
			alert('name or email has already taken');
		</script>
		";
	}
	else
	{
		if ($password == $confirmPassword) {
			$query = "INSERT INTO users VALUES('','$name','$email','$password','$confirmPassword','')";
			mysqli_query($conn, $query);
			echo "
			<script>
				alert('Register successfully!');
			</script>
			";
		}
		else
		{
			echo "
			<script>
				alert('password does not match');
			</script>
			";
		}
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MRHSstore || Register</title>
	<link rel="stylesheet" type="text/css" href="../css/LogReg.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="reglog">
		<i class="fa fa-user-circle" style="font-size:36px"></i>
		<h1>Create account!</h1>
		<form action="" method="POST" class="form">
			<label for="name">Name</label>
			<br>
			<input type="text" name="name" id="name" required><i class="fa fa-user"></i>
			<br>
			<label for="email">Email</label>
			<br>
			<input type="text" name="email" id="email" required><i class="fa fa-envelope"></i>
			<br>
			<label for="password">Password</label>
			<br>
			<input type="password" name="password" id="password" required><i class="fa fa-lock"></i>
			<br>
			<label for="confirmPassword">Confirm Password</label>
			<br>
			<input type="confirmPassword" name="confirmPassword" id="confirmPassword" required><i class="fa fa-lock"></i>
			<br>
			<button type="submit" name="submit">Create <i class="fa fa-arrow-right"></i></button>
		</form>
		<hr>
		<p>Have account? <a href="login.php">Login</a></p>
	</div>
</body>
</html>