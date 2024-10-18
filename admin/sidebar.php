<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar</title>
    <style>
        <?php require "assets/css/style.css" ?>
    </style>
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />

</head>

<body>
    <nav class="sidebar">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="/zenplant/user/assets/img/logo.png" alt="logo">
                </span>

                <div class="text header-text">
                    <!-- <span class="name">CodingLab</span>
                    <span class="profession">Web developer</span> -->
                </div>
            </div>

            <i class="bx bx-chevron-right toggle"></i>

        </header>

        <div class="menu-bar">
            <div class="menu">
                <!-- <li class="search-box">
                            <i class="bx bx-search icon"></i>
                            <input type="text" placeholder="Search...">
                    </li> -->
                <ul class="menu-links">

                    <li class="nav-link">
                        <a href="home">
                            <span class="material-symbols-outlined">home
                            </span>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="productList">
                            <span class="material-symbols-outlined">
                                inventory_2
                            </span>
                            <span class="text nav-text">Products</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="userList">
                            <span class="material-symbols-outlined">
                                person
                            </span>
                            <span class="text nav-text">Users</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <span class="material-symbols-outlined">
                                store
                            </span>
                            <span class="text nav-text">Orders</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <span class="material-symbols-outlined">
                                reviews
                            </span>
                            <span class="text nav-text">Reviews</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i class="bx bx-wallet icon"></i>
                            <span class="text nav-text">Wallets</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="logout">
                        <span class="material-symbols-outlined">
                            logout
                        </span>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="moon-sun">
                        <i class="bx bx-moon icon moon"></i>
                        <i class="bx bx-sun icon sun"></i>
                    </div>
                    <span class="mode-text text">Dark Mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>

            </div>

        </div>
    </nav>

    <script>
        <?php require "assets/js/main.js" ?>
    </script>

</body>

</html>