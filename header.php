<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<nav>
    <ul>
        <li><a href="index.php" title="Home">Home</a></li>
        <li><a href="categories.php" title="Home">Category</a></li>
        <li><a href="baskets.php" title="Home">My Basket</a></li>
        <li><a href="profil.php" title="profil">My Profil</a></li>
        <?php
            if (isset($_SESSION['username'])){
                echo "<li><a href=\"logout.php\" title=\"Home\">Logout</a></li>";
            } else {
                echo "<li><a href=\"sign-in.php\" title=\"Sign In\">Sign In</a></li>";
            }
        ?>
        
    </ul>
</nav>