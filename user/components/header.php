<?php 
// require_once './db.php';
// session_start();
?>
<style>
    <?php include '/user/assets/css/styles.css'?>
</style>

<body>
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">
                <img src="/zenplant/user/assets/img/logo.png" alt="">
                <h1>Plant</h1>
            </a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <?php //foreach ($nav_menu as $name => $path): ?>
                        <li class="nav__item">
                        <a href="home" class="nav__link active">Home</a>
                    </li>

                    <li class="nav__item">
                        <a href="about" class="nav__link">About Us</a>
                    </li>

                    <li class="nav__item">
                        <a href="products" class="nav__link">Products</a>
                    </li>

                    <li class="nav__item">
                        <a href="" class="nav__link">Featured</a>
                    </li>
                    <li class="nav__item">
                        <a href="contact" class="nav__link">Contact</a>
                    </li>

                </ul>

                <!-- Close button -->
                <div class="nav__close" id="nav-close">
                    <i class="ri-close-line"></i>
                </div>
            </div>

            <div class="nav__actions">
                <!-- Search button -->
                <i class="ri-search-line nav__search" id="search-btn"></i>

                <!-- Login button -->
                <i class="ri-user-line nav__login" id="login-btn"></i>

                <!-- Cart button -->
                <i class="ri-shopping-cart-line nav__login" id="cart-btn">
                    <a href="cart.php"></a>
                </i>

                <!-- Toggle button -->
                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-menu-line"></i>
                </div>
            </div>
        </nav>
    </header>

    <!--==================== SEARCH ====================-->
    <div class="search" id="search">
        <form action="" class="search__form">
            <i class="ri-search-line search__icon"></i>
            <input type="search" placeholder="What are you looking for?" class="search__input">
        </form>

        <i class="ri-close-line search__close" id="search-close"></i>
    </div>

    <!--==================== LOGIN ====================-->
    <div class="login" id="login">
        <form action="" class="login__form">
            <h2 class="login__title">Log In</h2>

            <div class="login__group">
                <!-- <div>
                    <label for="email" class="login__label">Email</label>
                    <input type="email" placeholder="Write your email" id="email" class="login__input">
                </div>

                <div>
                    <label for="password" class="login__label">Password</label>
                    <input type="password" placeholder="Enter your password" id="password" class="login__input">
                </div> -->

            </div>

            <div>
                <p class="login__signup">
                    You do not have an account? <a href="register">Sign up</a>
                </p>

                <a href="#" class="login__forgot">
                    You forgot your password
                </a>

                    <a href="login">
                        <h2>Login</h2>
                    </a>

                <a href="logout"><h2>logout</h2></a>
            </div>
        </form>

        <i class="ri-close-line login__close" id="login-close"></i>
    </div>

</body>