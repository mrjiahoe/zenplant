<?php
// display.php - Displays the list of books
require 'db.php';

// Fetch all records from the Books table
$sql = "SELECT * FROM plants";
$result = mysqli_query($conn, $sql);
?>

<!-- Display all books in a table -->
<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Category</th>
        <th>Price</th>
		<th>Rating</th>
        <th>Description</th>
        <th>Pros</th>
        <th>Image</th>
        <th>Actions</th>
    </tr>
    

    <?php
    // Check if there are any records
    if (mysqli_num_rows($result) > 0) {
        // Output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["plantId"] . "</td>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["category"] . "</td>";
            echo "<td>" . $row["price"] . "</td>";
			echo "<td>" . $row["rating"] . "</td>";
            echo "<td>" . $row["description"] . "</td>";
            echo "<td>" . $row["pros"] . "</td>";
            echo "<td>" . $row["imageUrl"] . "</td>";
            echo "<td>";
            echo "<a href='/zenplant/admin/test.php'>Test</a> | ";
            echo "<a href='/zenplant/admin/edit.php?id=" . $row["plantId"] . "'>Edit</a> | ";
            echo "<a href='/zenplant/admin/delete.php?id=" . $row["plantId"] . "' onclick='return confirm(\"Are you sure you want to delete this record?\");'>Delete</a>";
            echo "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='8'>No plant found</td></tr>";
    }
    ?>
</table>
