<?php
session_start();

include('db.php');

include('header.php');
 
echo "PAGE HOME\n";

print_r($_SESSION);

if ($result = mysqli_query($con, "SELECT * FROM customer")) {
    //printf("Select returned %d rows.\n", mysqli_num_rows($result));
    //$pass_hache = password_hash($_POST['pass'], PASSWORD_DEFAULT);
    //htmlspecialchars("");
	while ($row = mysqli_fetch_array($result))
	{
		echo "first_name: ". $row['first_name'];
		
    }


    mysqli_free_result($result);
}

mysqli_close($con);



include('footer.php');
?>