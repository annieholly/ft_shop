<?php
session_start();
include('db.php');
include('header.php');

echo "PAGE  CATEGORY ";

if(!isset($_GET['id'])) {
    header('Location: categories.php');
}

$sql_select_category = "SELECT * FROM category WHERE id = " . $_GET['id'] ."";

if ($resultl_select_category = mysqli_query($con, $sql_select_category)) {
   if (!mysqli_num_rows($resultl_select_category) || mysqli_num_rows($resultl_select_category) != 1) {
        header('Location: categories.php');
   }
   $row = mysqli_fetch_array($resultl_select_category);
   ?>
   <p>
       Category : <?php echo htmlspecialchars($row['name']); ?>
   </p>
   <?php

   $sql_select_products = "SELECT * FROM product WHERE category_id = " . $_GET['id'] ."";

   if ($result_select_products = mysqli_query($con, $sql_select_products)) {
        while ($row = mysqli_fetch_array($result_select_products))
        {
            ?>
                <p>
                    Produit :<a href="product.php?id=<?php echo htmlspecialchars($row['id']); ?>"><?php echo htmlspecialchars($row['name']); ?></a>
                </p>        
            <?php
        }
        mysqli_free_result($result_select_products);   
    } else {
        echo "error sql_select_products";
    }

    mysqli_free_result($resultl_select_category);    
} else {
    echo "error sql_select_category";
}

mysqli_close($con);