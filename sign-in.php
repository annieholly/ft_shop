<?php
include("header2.php");
if (count($_POST)){
    include('db.php');
    // INJECTION SQL == 0
    $sql_search = "SELECT * FROM Customer WHERE username = '" . $_POST['username'] . "' AND password = '" . $_POST['password'] . "';";
    $result = mysqli_query($con, $sql_search);
    if (!$result) {
        printf("Select returned %d rows.\n", mysqli_num_rows($result));
    } else {
        $row = mysqli_fetch_array($result);
        if (!count($row)) {
            echo 'Username or password incorrect';
        } else {
            echo 'logiin';
            session_start();
            $_SESSION['username'] = $_POST['username'];
            header('Location: index.php');
        }
    }
    mysqli_free_result($result);
    mysqli_close($con);
} else {
    echo "KO";
}
include("sign-in.html");

?>
    <h1>Sign in</h1>
    <form method="post" action="sign-in.php">
        <label for="username">Username : </label>
        <input id="username" type="text" placeholder="gaetan" name="username" required="required"><br>
        <label for="password">Password : </label>
        <input type="password" name="password" placeholder="*****" required="required"><br>
        <button type="submit">Sign in</button>
    </form>
    <br>
    <a href="sign-up.php" title="Sign Up">Sign Up</a>

<?php
include("footer.php");
