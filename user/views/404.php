<style>
        <?php include './user/assets/css/styles.css'?>
    </style>
    
<?php 
require dirname(__DIR__).'/components/header.php';
    // require_once('route.php');
?>

<style>
    body {
        margin-top: 100px;
    }

    .err-container {
        min-height: 80vh;
        text-align: center;
        padding: 40px;
    }

    .err-container img {
        margin: auto;
    }

    .err-container h2 {
        padding: 20px;
    }
</style>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Page Not Found</title>
</head>
<body>
    <div class="err-container">
        <img src="user/assets/img/error-404.png" alt="error icon">
        <h2>Oops! Page not found.</h2>
        <h1>404</h1>
        <p>We're sorry, but the page you're looking for doesn't exist.</p>
        <a href="/zenplant/">Go to Homepage</a>
    </div>
</body>
</html>