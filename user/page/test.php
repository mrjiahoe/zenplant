<h1>Test</h1>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// edit.php - Contains the form and logic to edit an existing book

if (isset($id)) {
    echo "The ID passed is: " . $id;
    // You can now use the $id for querying data, etc.
} else {
    echo "No ID provided!";
}
