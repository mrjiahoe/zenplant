<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// edit.php - Contains the form and logic to edit an existing book
require 'db.php';

if (isset($_GET['id'])) {
    $plantId = $_GET['id'];
    $sql = "SELECT * FROM plants WHERE plantId=$plantId";
    $result = mysqli_query($conn, $sql);
    $plant = mysqli_fetch_assoc($result);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $plantId = $_POST['plantId'];
    $plantName = mysqli_real_escape_string($conn, $_POST['plantName']);
    $plantCategory = mysqli_real_escape_string($conn, $_POST['plantCategory']);
    $plantPrice = mysqli_real_escape_string($conn, $_POST['plantPrice']);
	$plantRating = mysqli_real_escape_string($conn, $_POST['plantRating']);
    $plantDescription = mysqli_real_escape_string($conn, $_POST['plantDescription']);
    $plantPros = mysqli_real_escape_string($conn, $_POST['plantPros']);
    $plantImage = mysqli_real_escape_string($conn, $_POST['plantImage']);

    // Update the book record
    $sql = "UPDATE plants SET name='$plantName', category='$plantCategory', price='$plantPrice', rating='$plantRating', description='$plantDescription', pros='$plantPros', imageUrl='$plantImage' WHERE plantId=$plantId";
    
    if (mysqli_query($conn, $sql)) {
        // After successful update, redirect to the index page
        header("Location: index.php");
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
?>

<!-- Form to edit a book record -->
<h3>Edit Plant</h3>
<form action="edit.php" method="POST">
    <input type="hidden" name="plantId" value="<?php echo $plant['plantId']; ?>">
    <label for="plantName">Name:</label><br>
    <input type="text" id="plantName" name="plantName" value="<?php echo $plant['name']; ?>" required><br><br>

    <label for="plantCategory">Category:</label><br>
    <input type="text" id="plantCategory" name="plantCategory" value="<?php echo $plant['category']; ?>" required><br><br>

    <label for="plantPrice">Price:</label><br>
    <input type="text" id="plantPrice" name="plantPrice" value="<?php echo $plant['price']; ?>" required><br><br>
	
	<label for="plantRating">Rating:</label><br>
    <input type="text" id="plantRating" name="plantRating" value="<?php echo $plant['rating']; ?>" required><br><br>

    <label for="plantDescription">Description:</label><br>
    <input type="text" id="plantDescription" name="plantDescription" value="<?php echo $plant['description']; ?>" required><br><br>

	<label for="plantPros">Pros:</label><br>
    <input type="text" id="plantPros" name="plantPros" value="<?php echo $plant['pros']; ?>" required><br><br>

    <label for="plantImage">Image:</label><br>
    <input type="text" id="plantImage" name="plantImage" value="<?php echo $plant['imageUrl']; ?>" required><br><br>
	
    <input type="submit" value="Update Plant">
</form>
