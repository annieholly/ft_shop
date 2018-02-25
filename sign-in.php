<?php
include("header.php");
?>
    <h1>Sign in</h1>
    <form method="post" action="">
        <label for="username">Username : </label>
        <input id="username" type="text" name="username" required="required"><br>
        <label for="password">Password : </label>
        <input type="password" name="password" placeholder="*****" required="required"><br>
        <button type="submit">Sign in</button>
    </form>
<?php
include("footer.php");