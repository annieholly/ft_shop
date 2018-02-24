<?php 

echo "testing3";

$link = mysqli_connect("localhost", "root", "root", "shop");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if ($result = mysqli_query($link, "SELECT * FROM customer")) {
    printf("Select returned %d rows.\n", mysqli_num_rows($result));

	while ($row = mysqli_fetch_array($result))
	{
		echo "first_name: ". $row['first_name'];
		
	}

    /* free result set */
    mysqli_free_result($result);
}

mysqli_close($link);
?>