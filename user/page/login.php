<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

require "db.php";

?>

<?php 
session_start();
session_regenerate_id(true);
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>

<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Retrieve login form data
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Now we check if the data from the login form was submitted, isset() will check if the data exists.
if ( !isset($_POST['username'], $_POST['password']) ) {
	// Could not get the data that should have been sent.
	exit('Please fill both the username and password fields!');
}

// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
if ($stmt = $conn->prepare('SELECT userId, password, userType FROM users WHERE username = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	// Store the result so we can check if the account exists in the database.
	$stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($userId, $password, $userType);
        $stmt->fetch();
        // Account exists, now we verify the password.
        // Note: remember to use password_hash in your registration file to store the hashed passwords.
        if (password_verify($_POST['password'], $password)) {
            // if ($_POST['password'] === $password) { use this if you don't want to user password encryption method
            // Verification success! User has logged-in!
            // Create sessions, so we know the user is logged in, they basically act like cookies but remember the data on the server.
            echo '<p class="success">Welcome Back!</p>';
                    session_regenerate_id();;
                        $_SESSION["isUser"] = "yes" ;
                        $_SESSION["username"] = $username;
                        $_SESSION["userType"] = $userType;

                        if ($userType == 'user') {
                            // Set a JavaScript timeout to redirect after 1.5 seconds
                            echo '<script>
                                setTimeout(function() {
                                    window.location.href = "home";
                                }, 1500); 
                                // 1500 milliseconds = 1.5 seconds
                            </script>';
                        } else if ($userType == 'admin') {
                            // Set a JavaScript timeout to redirect after 1.5 seconds
                            echo '<script>
                                setTimeout(function() {
                                    window.location.href = "admin";
                                }, 1500); 
                                // 1500 milliseconds = 1.5 seconds
                            </script>';
                        }
        } else {
            // Incorrect password
            echo 'Incorrect  password!';
        }
    } else {
        // Incorrect username
        echo 'Incorrect username and/or password!';
    }

	$stmt->close();
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
                <label><i class="fas fa-user"></i> Username</label>
                <input type="text" class="form-control" name="username" placeholder="Username" required>
                <label><i class="fas fa-lock"></i> Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password" required>
                
                <!-- <button type="type" class="btn btn-success mt-2" name="login">Login</button> -->
                <input type="submit" value="Login">
            </form>
        </div>
    </div>

</body>

</html>