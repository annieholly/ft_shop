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
      <div id="h_title"><a href="./index2.php">shoppy name</a></div>
      <div id="h_login">
        <a href="./sign-in.php">Sign In</a><br>
        <a href="./sign-up.php">Sign Up</a>
      </div>
      <div class="h_cart">
        <a class="btn" href="#open-modal">
          <span id="cart_num"><b>0</b></span>
          <br>cart items</a>
      </div>

      <div id="open-modal" class="h_cart_modal">
        <div id="cart_div">
          <a href="#model-close" title="Close" class="modal-close">X</a>
          <div>
            <h4 id="cart_title">Shopping Cart</h4>
            <?php include('basket2.html') ?>
          </div>
        </div>
      </div>

    </div>

    <div class="nav">
      <ul id="navbar">
        <li><a href="./category1.php">Category 1</a></li>
        <li><a href="./category2.php">Category 2</a></li>
        <li><a href="./category3.php">Category 3</a></li>
      </ul>
    </div>
