<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['place_order'])) {
    $_SESSION['cart'] = [];
    header("Location: order-success.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Checkout</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="checkout">
    <h2>Shipping Info</h2>
    <form method="POST">
      <input type="text" name="name" placeholder="Full Name" required>
      <input type="text" name="address" placeholder="Shipping Address" required>
      <input type="email" name="email" placeholder="Email Address" required>
      <button name="place_order" class="place-order">Place Order</button>
    </form>
  </div>
</body>
</html> 