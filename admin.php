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
<h1>Admin Panel</h1>

<h3>Add Product</h3>
<form method="post" action="admin.php">
  <label for="article_name">Product Name : </label>
  <input id="article_name" type="text" name="article_name" placeholder="ariticle name"><br>
  <label for="article_price">Price : </label>
  <input id="article_price" type="number" name="article_price" placeholder="$0.00"><br>
  <button type="submit">Add Product</button>
</form>

<h3>Modify Product</h3>
<form method="post" action="admin.php">
  <label for="article_name">Article : </label>
  <input id="article_name" type="text" name="article_name" placeholder="ariticle name"><br>
  <label for="article_price">Old Price : </label>
  $0.00 <br>
  <label for="article_price">New Price : </label>
  <input id="article_price" type="number" name="article_price" placeholder="$0.00"><br>
  <button type="submit">Modify Product</button>
</form>


<h3>Delete Product</h3>
<form method="post" action="admin.php">
  <label for="article_name">Article : </label>
  <input id="article_name" type="text" name="article_name" placeholder="ariticle name">
  <br>
  <button type="submit">Delete Article</button>
</form>


<h3>Add Category</h3>
<form method="post" action="admin.php">
  <label for="category_name">Category : </label>
  <input id="article_name" type="text" name="article_name" placeholder="ariticle name"><br>
  <label for="article_price">Price : </label>
  <input id="article_price" type="number" name="article_price" placeholder="$0.00"><br>
  <button type="submit">Add Article</button>

</form>

<h3>Modify Category</h3>
<form method="post" action="admin.php">
  <label for="article_name">Article : </label>
  <input id="article_name" type="text" name="article_name" placeholder="ariticle name"><br>
  <label for="article_price">Old Price : </label>
  $0.00 <br>
  <label for="article_price">New Price : </label>
  <input id="article_price" type="number" name="article_price" placeholder="$0.00"><br>
  <button type="submit">Modify Product</button>
</form>


<h3>Delete Category</h3>
<form method="post" action="admin.php">
  <label for="article_name">Article : </label>
  <input id="article_name" type="text" name="article_name" placeholder="ariticle name">
  <br>
  <button type="submit">Delete Article</button>
</form>


<h3>Add User</h3>
<form method="post" action="admin.php">
  <label for="category_name">Category : </label>
  <input id="article_name" type="text" name="article_name" placeholder="ariticle name"><br>
  <label for="article_price">Price : </label>
  <input id="article_price" type="number" name="article_price" placeholder="$0.00"><br>
  <button type="submit">Add Article</button>

</form>

<h3>Modify User</h3>
<form method="post" action="admin.php">
  <label for="article_name">Article : </label>
  <input id="article_name" type="text" name="article_name" placeholder="ariticle name"><br>
  <label for="article_price">Old Price : </label>
  $0.00 <br>
  <label for="article_price">New Price : </label>
  <input id="article_price" type="number" name="article_price" placeholder="$0.00"><br>
  <button type="submit">Modify Product</button>
</form>


<h3>Delete User</h3>
<form method="post" action="admin.php">
  <label for="article_name">Article : </label>
  <input id="article_name" type="text" name="article_name" placeholder="ariticle name">
  <br>
  <button type="submit">Delete Article</button>
</form>



<?php
include("footer.php");
