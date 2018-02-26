<?php
session_start();
?>
<?php
  include('header2.php');
?>

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

include("admin.html");
include("footer.php");
