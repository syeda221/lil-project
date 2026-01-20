<?php include 'includes/reuseable_func.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <!-- <?php 
    // cart();
    ?> -->
    <div class="cart-card">

  <div class="cart-card__header">
    <span class="cart-card__back-link">← Shopping Continue</span>
  </div>

  <h2 class="cart-card__title">Shopping cart</h2>
  <p class="cart-card__subtitle">You have 3 items in your cart</p>

  <div class="cart-card__items">

    <div class="cart-item-card">
      <div class="cart-item__img"></div>

      <div class="cart-item__info">
        <div class="cart-item__name">Italy Pizza</div>
        <div class="cart-item__desc">Extra cheese and topping</div>
      </div>

      <div class="cart-item__qty">
        <button class="cart-item__qty-btn">-</button>
        <span class="cart-item__qty-value">1</span>
        <button class="cart-item__qty-btn">+</button>
      </div>

      <div class="cart-item__price">$681</div>
    </div>

  </div>
</div>
</body>
</html>