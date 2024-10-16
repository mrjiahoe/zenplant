<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "plantEcom";

$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
// $sql = "SELECT * FROM plantUsers WHERE username = '.$userName.' AND upassword = '.$password.'";
// $result = mysqli_query($conn, $sql);
// $row = mysqli_fetch_array($result);

?>

<?php 
session_start();
if (isset($_SESSION["isUser"])) {
    header("Location: home");
}
?>

<style>
    <?php include './user/page/page.css' ?>
</style>

<!DOCTYPE html>
<html lang="en">
    
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    
</head>

<body>
    <?php
    if (isset($_POST['login'])) {
        $userName = $_POST['username'];
        echo $userName;
        $password = $_POST['password'];
        
        // require_once "/zenplant/db.php";
        $sql = "SELECT * FROM users WHERE username = '$userName' AND password = '$password'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        echo $row;
        if ($row['userType'] == "user") {
            session_start();
            $_SESSION["isUser"] = "yes" ;
            $_SESSION["username"] = $userName;
            header("Location: home");
        } else if ($row['userType'] == "admin") {
            session_start();
            $_SESSION["isAdmin"] = "yes";
            $_SESSION["username"] = $userName;
            $isAdminRequest = true;
            header("Location: admin");
        } else {
            echo "<h1>password or username is wrong</h1>";
        }
    }
    ?>
    <div class="login-container">
        <div class="login-left">
            <video autoplay loop muted>
                <source src="/zenplant/user/assets/img/sunflower.mp4" type="video/mp4">
            </video>
        </div>

        <div class="login-form">
            <form method="post">
                <label>Username</label>
                <input type="text" class="form-control" name="username">
                <label>Password</label>
                <input type="text" class="form-control" name="password">
                
                <button type="type" class="btn btn-success mt-2" name="login">Login</button>
            </form>
        </div>
    </div>

</body>

</html>