
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

<br>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    require dirname(__DIR__).'/components/header.php';
    // echo dirname(__DIR__);
    ?>

    <!--==================== MAIN ====================-->
    <section >
        <div class="main">
            <div class="main__left">
                <h1>Plants make life better</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, exercitationem?</p>
                <button>Buy Plant</button>
            </div>
            
            <div class="main__right">
                <img src="user/assets/img/home-plant.png" alt="plant">
            </div>
        </div>
    </section>

    <!--=============== MAIN JS ===============-->
    <script src="./user/assets/js/main.js"></script>
</body>

</html>