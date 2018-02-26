<?php
  include('db.php');
  $sql_select = "SELECT * FROM Product";
  if ($result = mysqli_query($con, $sql_select)) {
  	while ($row = mysqli_fetch_array($result))
  	{
        include('product_show.html');
    }
      mysqli_free_result($result);
  }
  mysqli_close($con);
?>
