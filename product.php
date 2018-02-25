<?php
session_start();
include('db.php');
include('header.php');

echo "PAGE  git PRODUCT ";
echo "<br>";

if(!isset($_GET['id'])) {
    header('Location: categories.php');
}

$sql_select_product = "SELECT * FROM product WHERE id = " . $_GET['id'] ."";

if ($result_select_product = mysqli_query($con, $sql_select_product)) {
    if (!mysqli_num_rows($result_select_product) || mysqli_num_rows($result_select_product) != 1) {
        header('Location: categories.php');
   }
   $row_product = mysqli_fetch_array($result_select_product);
   
   print_r($row_product);
   echo "<br>";

   $sql_select_category = "SELECT * FROM category WHERE id = " . $row_product['category_id'] ."";
   
   if ($result_select_category = mysqli_query($con, $sql_select_category)) {
       if (!mysqli_num_rows($result_select_category) || mysqli_num_rows($result_select_category) != 1) {
           header('Location: categories.php');
        }
        $row_category = mysqli_fetch_array($result_select_category);
        print_r($row_category);
    } else {
        echo "error sql_select_category";
    }
   mysqli_free_result($result_select_product);    
} else {
    echo "error sql_select_product";
}

mysqli_close($con);