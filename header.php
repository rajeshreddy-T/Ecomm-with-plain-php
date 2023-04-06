<!-- header file consists of topmenu bar with links to login/register/shop pages -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>My E-commerce Website</title>
	<!-- Add your CSS and JavaScript files here -->
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<header>
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="shop.php">Shop</a></li>
				<li><a href="cart.php">Cart</a></li>
				<?php if(isset($_SESSION['user_id'])): ?>
				<!-- If user is logged in, display the profile and logout links -->
				<li><a href="profile.php">Profile</a></li>
				<li><a href="logout.php">Logout</a></li>
				<?php else: ?>
				<!-- If user is not logged in, display the login and register links -->
				<li><a href="login.php">Login</a></li>
				<li><a href="register.php">Register</a></li>
				<?php endif; ?>
			</ul>
		</nav>
	</header>

