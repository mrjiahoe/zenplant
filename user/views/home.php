<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once './db.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plant</title>

    <!--=============== favicon ===============-->
    <link rel="icon" type="image/png" href="./user/assets/img/logo.png">
    <!--=============== REMIXICONS ===============-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="./user/assets/css/styles.css" />
    <style>
        <?php include './user/assets/css/styles.css'?>
    </style>


</head>

<body>


<?php

    require dirname(__DIR__).'/components/header.php';
    // echo dirname(__DIR__);
    ?>

    <!--==================== MAIN ====================-->
    <section >
        <div class="main">
            <div class="main__left">
                    <?php 
                    if (!empty($_SESSION["username"])) {
                        $username = $_SESSION["username"];
                        echo "<p>Welcome, $username!</p>";
                    } else {
                        echo "<p>Log in to continue</p>";
                    };
                    ?>
                <h1>Plants make life better</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, exercitationem?</p>
                <button>Buy Plant</button>
            </div>
            
            <div class="main__right">
                <img src="user/assets/img/home-plant.png" alt="plant">
            </div>
        </div>
    </section>

    <section >
        <div class="main">
            <h1>monstera Deliciosa</h1>
            <a href="user/views/MonsteraDeliciosa.php"><button class="main__left">Buy now</button></a>
            <img src="./user/assets/img/plant/MonsteraDeliciosa.jpg" alt="MonsteraDeliciosa">
        </div>
    </section>

    <?php 
    require dirname(__DIR__).'/components/footer.php';
    ?>

    <!--=============== MAIN JS ===============-->
    <script src="./user/assets/js/main.js"></script>
</body>

</html>