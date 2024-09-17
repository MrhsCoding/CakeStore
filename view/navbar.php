<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HomeMade</title>
	<!-- cdn icon link  -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<!-- custom css file  -->
	<link rel="stylesheet" href="../css/navbar.css">
</head>

<body>

	<header class="header">
		<a href="home.php">
			<div class="logoContent">
				<img src="../images/logo.png" alt="HomeMade Logo">
				<h1 class="logoName">HomeMade </h1>
			</div>
		</a>

		<nav class="navbar">
			<a href="home.php">home</a>
			<a href="products.php">Menu</a>
			<a href="information.php">Information</a>
		</nav>

		<div class="icon">
			<a href="keranjang.php"><i class="fas fa-shopping-cart"></i></a>
			<a href="../controller/logout.php"><i class="fas fa-sign-out-alt"></i></a>
			<i class="fas fa-bars" id="menu-bar"></i>
		</div>

		<!-- <div class="search">
			<input type="search" placeholder="search...">
		</div> -->
	</header>

	<!-- custom js file  -->
	<script src="../js/navbar.js"></script>

</body>

</html>