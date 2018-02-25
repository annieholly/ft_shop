<?php
include('db.php');

if ($result = mysqli_query($link, "SELECT * FROM category")) {
	while ($row = mysqli_fetch_array($result))
	{
        ?>
            <p>
                Name : <?php echo htmlspecialchars($row['name']); ?>
            </p>        
        <?php
    }

    mysqli_free_result($result);
}

mysqli_close($link);