<?php
include("header.php");
?>
    <h1>Sign up</h1>
    <form method="post" action="">
        <label for="name">Name : </label>
        <input id="name" type="text" name="name" required="required"><br>
        <label for="username">Username : </label>
        <input id="username" type="text" name="username" required="required"><br>
        <label for="password">Password : </label>
        <input type="password" name="password" placeholder="*****" required="required"><br>
        <label for="tel">Tel : </label>
        <input type="tel" placeholder="tel" name="tel" id="tel"/><br>
        <label for="address">Adress : </label>
        <textarea name="address" id="address" rows="10" cols="50"></textarea><br>
        <button type="submit">Sign up</button>
    </form>
<?php
include("footer.php");