<?php
session_start();
?>
<?php
  include('header2.php');
?>


<div class="main">
<table class="product_table">
  <tr class="th">
    <th></th>
    <th>Description</th>
    <th>Price</th>
    <th>Amount</th>
    <th>Total</th>
  </tr>
  <tr class="product_row">
    <td class="pr_image"><img src=""></td>
    <td class="pr_item">
      <strong>Item 1</strong>
      <p>Item description</p>
    </td>
    <td class="currency">$0.00</td>
    <td>1</td>
    <td class="current">$0.00</td>
  </tr>
  <tr class="product_row">
    <td><img src=""></td>
    <td>
      <strong>Item 2</strong>
      <p>Item description</p>
    </td>
    <td>$0.00</td>
    <td>1</td>
    <td>$0.00</td>
  </tr>

</table>
<br>
<button class="checkout">Checkout</button>

</div>

<?php
  include('footer2.php');
?>