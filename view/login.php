<?php
require "../model/function.php";

if (!empty($_SESSION["id"])) {
	header("Location: home.php");
}

if (isset($_POST["submit"])) {
	$email = $_POST["email"];
	$password = $_POST["password"];
	$result = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email' OR password = '$password'");
	$row = mysqli_fetch_assoc($result);
	if (mysqli_num_rows($result) > 0) {
		if (password_verify($password, $row["password"])) {
			$_SESSION["login"] = true;
			$_SESSION["id"] = $row["id"];
			header("Location: home.php");
		} else {
			echo "<script>alert('Wrong password');</script>";
		}
	} else {
		echo "<script>alert('User not registration');</script>";
	}
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MRHSstore || Login</title>
	<link rel="stylesheet" type="text/css" href="../css/LogReg.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	<div class="reglog">
		<i class="fa fa-sign-in" style="font-size:36px"></i>
		<h1>Welcome!</h1>
		<p>Sign in to your account</p>
		<form action="" method="POST" class="form">
			<label for="email">Email</label>
			<br>
			<input type="text" name="email" id="email"><i class="fa fa-envelope"></i>
			<br>
			<label for="password">Password</label>
			<br>
			<input type="password" name="password" id="password"><i class="fa fa-lock"></i>
			<br>
			<button type="submit" name="submit">Login <i class="fa fa-arrow-right"></i></button>
		</form>
		<hr>
		<p>Not have account? <a href="register.php">Register</a></p>
	</div>
</body>

</html>