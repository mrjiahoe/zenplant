<?php 
session_start();
if (isset($_SESSION["user"])) {
    header("Location: index.php");
}
?>

<style>
    <?php include './user/page/page.css'?>
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Here</title>

</head>
<body>
    <?php 
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        require_once "database.php";
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
        if ($user) {
            if (password_verify($password, $user["passwords"])) {
                session_start();
                $_SESSION["user"] = "yes";
                header("Location: index.php");
                die();
            } else {
                echo "<h3>Password does not match.</h3>";
            }
        } else {
            echo "<script>alert('Email does not match.')</script>";
        }
    }
    ?>
    <div class="login-container">
        <div class="login-left">
            <video autoplay loop muted>
                <!-- <video width="540" height="960" autoplay loop muted> -->
                    <source src="/zenplant/user/assets/img/sunflower.mp4" type="video/mp4">
                </video>
        </div>

        <div class="login-form">
            <form action="action_page.php" method="post">
                <div class="imgcontainer">
                    <img src="/zenplant/user/assets/img/logo.png" alt="" class="avatar">
                </div>

                <div class="container">
                    <label for="uname"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="uname" required>
                    
                    <label for="uemail"><b>Email</b></label>
                    <input type="text" placeholder="Enter Email" name="uname" required>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required>

                    <button type="submit">Register</button>
                    <label>
                        <input type="checkbox" checked="checked" name="remember"> Remember me
                    </label>
                    
                    <h2>Have an account? <a href="login">Login here</a></h2>
                    <h2>Want to continue browsing? <a href="home">Click here</a></h2>
                </div>

            </form>
        </div>
    </div>

</body>
</html>