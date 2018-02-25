<?php 

include('db.php');

if ($result = mysqli_query($con, "SELECT * FROM customer")) {
    //printf("Select returned %d rows.\n", mysqli_num_rows($result));
    //$pass_hache = password_hash($_POST['pass'], PASSWORD_DEFAULT);
	while ($row = mysqli_fetch_array($result))
	{
		echo "first_name: ". $row['first_name'];
		
    }


    mysqli_free_result($result);
}

mysqli_close($con);
?>