<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
$isAdminRequest = true;


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plant List</title>
    <style>
        <?php require "assets/css/style.css" ?>
    </style>
</head>

<body>

    <?php require "sidebar.php"; ?>
    <section class="home">
        <h3>Welcome, <?php echo $_SESSION["username"]  ?> !</h3>

        <!-- ================================== Cards ================================== -->
        <div class="cardBox">

            <div class="card" onClick="location.href='productList';">
                <div>
                    <div class="numbers">123</div>
                    <div class="cardName">Products</div>
                </div>
                <div class="cardImg">
                    <span class="material-symbols-outlined">
                        inventory
                    </span>
                </div>
            </div>

            <div class="card">
                <div>
                    <div class="numbers">123</div>
                    <div class="cardName">Sales</div>
                </div>
                <div class="cardImg">
                    <span class="material-symbols-outlined">
                        shopping_cart
                    </span>
                </div>
            </div>

            <div class="card" onClick="location.href='userList';">
                <div>
                    <div class="numbers">123</div>
                    <div class="cardName">User</div>
                </div>
                <div class="cardImg">
                    <span class="material-symbols-outlined">
                        group
                    </span>
                </div>
            </div>

            <div class="card">
                <div>
                    <div class="numbers">123</div>
                    <div class="cardName">Earning</div>
                </div>
                <div class="cardImg">
                    <span class="material-symbols-outlined">
                        payments
                    </span>
                </div>
            </div>

        </div>

        <!-- ================================== Recent Orders ================================== -->
        <div class="recentOrder">

        </div>
    </section>


</body>

</html>