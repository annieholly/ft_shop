<?php
include("header2.php");
if (count($_POST)){
    include('db.php');
$sql_insert = "INSERT INTO Customer (name, username, phone, password, address) VALUES
('".$_POST['name']."', '".$_POST['username']."', ".$_POST['phone'].", '".$_POST['password']."', '".$_POST['address']."');";

     $result = mysqli_query($con, $sql_insert);
     if ($result) {
          mysqli_free_result($result);
         mysqli_close($con);

         session_start();
        $_SESSION['username'] = $_POST['username'];
         header('Location: index.php');
     } else {
        echo "Error insert";
     }
} else {
   ?>

<h1>Sign up</h1>
    <form method="post" action="sign-up.php">
        <label for="name">Name : </label>
        <input id="name" type="text" name="name" placeholder="gaetan" required="required"><br>
        <label for="username">Username : </label>
        <input id="username" type="text" placeholder="gaetan" name="username" required="required"><br>
        <label for="password">Password : </label>
        <input type="password" name="password" placeholder="*****" required="required"><br>
        <label for="phone">Telephone : </label>
        <input type="phone" name="phone" placeholder="42" id="phone"/><br>
        <label for="address">Adress : </label>
        <textarea name="address" id="address" rows="10" cols="50" placeholder="6600 Dumbarton Cir, Fremont, CA 94555"></textarea><br>
        <button type="submit">Sign up</button>
    </form>

   <?php
}

include("footer.php");
