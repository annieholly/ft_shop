<?php

$con = mysqli_connect("localhost". "root", "root", "shop");

$articles = mysqli_query($con, "SELECT * FROM article");

$customers = mysqli_query($con, "SELECT * FROM customer");



function add_article($articles){


}


  if ($result = mysqli_query($con, "SELECT * FROM customer")) {
      //printf("Select returned %d rows.\n", mysqli_num_rows($result));
      //$pass_hache = password_hash($_POST['pass'], PASSWORD_DEFAULT);
  	while ($row = mysqli_fetch_array($result))
  	{
  		echo "first_name: ". $row['first_name'];

      }


      mysqli_free_result($result);
  }


 ?>
<h1>Add Article</h1>
<form method="post" action="admin.php">
  <label for="article_name">Article : </label>
  <input id="article_name" type="text" name="article_name" placeholder="ariticle name"><br>
  <label for="article_price">Price : </label>
  <input id="article_price" type="number" name="article_price" placeholder="$0.00"><br>
  <button type="submit">Add Article</button>

</form>
<?php
include("footer.php");
