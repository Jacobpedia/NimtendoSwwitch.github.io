# NimtendoSwwitch.github.io

<!DOCTYPE html>
<?php
session_start();
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_to_cart'])) {
    $_SESSION['cart'][] = "Nintendo Switch 2 Console + Mario Kart World Bundle";
    header("Location: checkout.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Nintendo Switch 2 Console | Target Mock</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <header class="topbar">
    <div class="logo">🎯 Target</div>
    <nav>
      <a href="#">Categories</a>
      <a href="#">Deals</a>
      <a href="#">New & Featured</a>
      <a href="#">Pickup & Delivery</a>
    </nav>
    <div class="searchbar">
      <input type="text" placeholder="What can we help you find?">
    </div>
  </header>

  <div class="breadcrumb">Target > Video Games > Nintendo Switch 2</div>

  <div class="container">
    <img src="nintendo-switch-2.jpg" alt="Nintendo Switch 2" class="product-img">
    <div class="product-details">
      <h1>Nintendo Switch 2 Console + Mario Kart World Bundle (Digital Download Code)</h1>
      <div class="price">$499.99</div>
      <div class="rating">⭐ 4.2 (1,276 reviews)</div>
      <p class="stock">Out of stock</p>
      <form method="POST">
        <button name="add_to_cart" class="add-cart">Add to cart</button>
      </form>
      <p class="return-policy">Free & easy returns. Return within 30 days for a full refund.</p>

      <div class="highlights">
        <h2>Highlights</h2>
        <ul>
          <li>The next evolution of Nintendo Switch™</li>
          <li>Three modes: TV, Tabletop, and Handheld</li>
          <li>7.9” LCD touchscreen, HDR, up to 120 fps</li>
          <li>4K support when docked to compatible TV</li>
          <li>GameChat: voice chat, screen sharing, video chat</li>
          <li>256GB storage, expandable via microSD Express</li>
          <li>Compatible with physical & digital Switch games</li>
        </ul>
        <button class="show-more">Show more</button>
      </div>

      <div class="desc">
        <h2>Description</h2>
        <p>
          Start your Nintendo Switch™ 2 adventure with this bundle that includes a system and a full game download for the Mario Kart™ World game, exclusive to Nintendo Switch 2.
        </p>
        <p>
          Nintendo Switch 2 is the next evolution of the Nintendo Switch system—packed with upgraded features and fun ways to connect and play together!
        </p>
        <p>
          Your games will leap to life on the vivid, 7.9” 1080p screen that showcases the system’s powerful processing and graphics performance. The updated dock also supports up to 4K resolution and frame rates up to 120 fps with compatible games and TVs.*
        </p>
      </div>

      <div class="tabs">
        <div class="tab">Specifications</div>
        <div class="tab">Shipping & Returns</div>
        <div class="tab">Q&A</div>
      </div>
    </div>
  </div>
</body>
</html>
