<?php 

include('db.php');

if ($result = mysqli_query($link, "SELECT * FROM customer")) {
    printf("Select returned %d rows.\n", mysqli_num_rows($result));

	while ($row = mysqli_fetch_array($result))
	{
		echo "first_name: ". $row['first_name'];
		
    }


    mysqli_free_result($result);
}

mysqli_close($link);
?>