<?php
session_start();
include('db.php');
include('header.php');

echo "PAGE CATEGORIES";

$sql_select_categories = "SELECT * FROM category";

if ($result = mysqli_query($con, $sql_select_categories)) {
	while ($row = mysqli_fetch_array($result))
	{
        ?>
            <p>
                Name :<a href="category.php?id=<?php echo htmlspecialchars($row['id']); ?>"><?php echo htmlspecialchars($row['name']); ?></a>
            </p>        
        <?php
    }
    mysqli_free_result($result);
}

mysqli_close($con);