<?php
require "../model/function.php";

if (!empty($_SESSION["id"])) {
	header("Location: home.php");
}

// Check if the form is submitted
if (isset($_POST['submit'])) {
	// Retrieve and sanitize form inputs
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = $_POST['password'];
	$confirmPassword = $_POST['confirmPassword'];

	// Check if passwords match
	if ($password !== $confirmPassword) {
		echo "<script>alert('Passwords do not match');</script>";
	} else {
		// Hash the password
		$hashedPassword1 = password_hash($password, PASSWORD_DEFAULT);
		$hashedPassword2 = password_hash($confirmPassword, PASSWORD_DEFAULT);

		// Check for duplicate name or email
		$duplicate = mysqli_query($conn, "SELECT * FROM users WHERE name = '$name' OR email = '$email'");
		if (mysqli_num_rows($duplicate) > 0) {
			echo "<script>alert('Name or email has already been taken');</script>";
		} else {
			// Prepare and execute the SQL query
			$stmt = $conn->prepare("INSERT INTO users (name, email, password, confirmPassword) VALUES (?, ?, ?, ?)");
			$stmt->bind_param("ssss", $name, $email, $hashedPassword1, $hashedPassword2);

			if ($stmt->execute()) {
				echo "<script>alert('Register successfully!');</script>";
			} else {
				echo "<script>alert('Registration failed');</script>";
			}

			// Close the statement
			$stmt->close();
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
			<input type="email" name="email" id="email" required><i class="fa fa-envelope"></i>
			<br>
			<label for="password">Password</label>
			<br>
			<input type="password" name="password" id="password" required><i class="fa fa-lock"></i>
			<br>
			<label for="confirmPassword">Confirm Password</label>
			<br>
			<input type="password" name="confirmPassword" id="confirmPassword" required><i class="fa fa-lock"></i>
			<br>
			<button type="submit" name="submit">Create <i class="fa fa-arrow-right"></i></button>
		</form>
		<hr>
		<p>Have an account? <a href="login.php">Login</a></p>
	</div>
</body>

</html>