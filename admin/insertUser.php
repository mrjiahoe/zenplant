<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// insert.php - Contains the form and logic to insert a new book
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $plantName = mysqli_real_escape_string($conn, 'plant'.$_POST['plantName']);
    $plantCategory = mysqli_real_escape_string($conn, $_POST['plantCategory']);
    $plantPrice = mysqli_real_escape_string($conn, $_POST['plantPrice']);
	$plantRating = mysqli_real_escape_string($conn, $_POST['plantRating']);
    $plantDescription = mysqli_real_escape_string($conn, $_POST['plantDescription']);
    $plantPros = mysqli_real_escape_string($conn, $_POST['plantPros']);
    $plantImage = mysqli_real_escape_string($conn, $_POST['plantImage']);

    // Insert data into Books table
    $sql = "INSERT INTO plants (name, category, price, rating, description, pros, imageUrl) VALUES ('$plantName', '$plantCategory', '$plantPrice', '$plantRating', '$plantDescription', '$plantPros', '$plantImage')";
    
    if (mysqli_query($conn, $sql)) {
        // After successful insert, redirect to the index page
        header("Location: productlist");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
<body>


    <?php require 'sidebar.php'; ?>

<section class="home" >

    <!-- Form to insert a new book record -->
    <h3>Insert a New Plant</h3>
    <form action="insert.php" method="POST">
        <label for="plantName">Name:</label><br>
        <input type="text" id="plantName" name="plantName" required><br><br>
        
        <label for="plantCategory">Category:</label><br>
        <input type="text" id="plantCategory" name="plantCategory" required><br><br>
        
        <label for="plantPrice">Price:</label><br>
        <input type="text" id="plantPrice" name="plantPrice" required><br><br>
        
        <label for="plantRating">Rating:</label><br>
        <input type="text" id="plantRating" name="plantRating" required><br><br>
        
        <label for="plantDescription">Description:</label><br>
        <input type="text" id="plantDescription" name="plantDescription" required><br><br>
        
        <label for="plantPros">Pros:</label><br>
        <input type="text" id="plantPros" name="plantPros" required><br><br>
        
        <label for="plantImage">Image:</label><br>
        <input type="text" id="plantImage" name="plantImage" required><br><br>
        
        <input type="submit" value="Insert Plant">
    </form>
    
</section></body>