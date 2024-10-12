<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// delete.php - Contains the logic to delete a book
require 'db.php';

if (isset($_GET['id'])) {
    $plantId = $_GET['id'];
    
    // Delete the book record
    $sql = "DELETE FROM plants WHERE plantId=$plantId";
    
    if (mysqli_query($conn, $sql)) {
        // After successful deletion, redirect to the index page
        header("Location: index.php");
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
?>
