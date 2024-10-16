<h1>Test</h1>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// edit.php - Contains the form and logic to edit an existing book


  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    echo "<h2>ID: $id</h2>";
  } else {
    echo "<p>No ID provided.</p>";
  }
