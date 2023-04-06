<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>My Ecommerce Website</title>
</head>
<body>
  <h1>Welcome to My Ecommerce Website</h1>
  <?php if (isset($_SESSION['username'])) : ?>
    <p>Welcome, <?php echo $_SESSION['username']; ?>!</p>
    <p><a href="shop.php">Shop Now</a></p>
    <p><a href="logout.php">Logout</a></p>
  <?php else : ?>
    <p><a href="login.php">Login</a> or <a href="register.php">Register</a> to start shopping.</p>
  <?php endif; ?>
</body>
</html>
