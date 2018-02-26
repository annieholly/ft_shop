<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Shoppy Shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <script src="main2.js"></script>
</head>

<body>
  <div class="grid">
    <div class="header">
      <div id="h_title"><a href="/ft_shop_github/index2.php">shoppy name</a></div>
      <div id="h_login">
        <a href="">Sign In</a><br>
        <a href="">Sign Up</a>
      </div>
      <div class="h_cart">
        <a class="btn" href="#open-modal">
          <span id+"cart_num"><b>0</b></span>
          <br>cart items</a>
      </div>

      <div id="open-modal" class="h_cart_modal">
        <div>
          <a href="#model-close" title="Close" class="modal-close">Close</a>
          <div>
            <h3>Shopping Cart</h3>
            <?php include('basket2.html') ?>
          </div>
        </div>
      </div>

    </div>

    <div class="nav">
      <ul id="navbar">
        <li><a href="">Category 1</a></li>
        <li><a href"">Category 2</a></li>
        <li><a href="">Category 3</a></li>
      </ul>
    </div>
