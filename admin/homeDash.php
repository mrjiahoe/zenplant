<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plant List</title>
</head>
<body>

    <h2>Plant List</h2>

    <h3>Welcome, <?php echo $_SESSION["username"]  ?> !</h3>
    <!-- Hyperlink to insert a new book record -->
    <a href="admin/insert">Insert New Plant</a>
    <br><br>
    <a href="logout">Logout</a>

    <!-- Display the list of books -->
    <?php include 'display.php'; ?>

</body>
</html>
