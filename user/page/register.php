<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Here</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <style>
        * {
  	box-sizing: border-box;
  	font-family: -apple-system, BlinkMacSystemFont, "segoe ui", roboto, oxygen, ubuntu, cantarell, "fira sans", "droid sans", "helvetica neue", Arial, sans-serif;
  	font-size: 16px;
}
body {
  	background-color: #435165;
  	margin: 0;
}
.register {
  	width: 400px;
  	background-color: #ffffff;
  	box-shadow: 0 0 9px 0 rgba(0, 0, 0, 0.3);
  	margin: 100px auto;
}
.register h1 {
  	text-align: center;
  	color: #5b6574;
  	font-size: 24px;
  	padding: 20px 0 20px 0;
  	border-bottom: 1px solid #dee0e4;
}
.register form {
  	display: flex;
  	flex-wrap: wrap;
  	justify-content: center;
  	padding-top: 20px;
}
.register form label {
  	display: flex;
  	justify-content: center;
  	align-items: center;
  	width: 50px;
 	height: 50px;
  	background-color: #3274d6;
  	color: #ffffff;
}
.register form input[type="password"], .register form input[type="text"], .register form input[type="email"] {
  	width: 310px;
  	height: 50px;
  	border: 1px solid #dee0e4;
  	margin-bottom: 20px;
  	padding: 0 15px;
}
.register form input[type="submit"] {
  	width: 100%;
  	padding: 15px;
  	margin-top: 20px;
  	background-color: #3274d6;
 	border: 0;
  	cursor: pointer;
  	font-weight: bold;
  	color: #ffffff;
  	transition: background-color 0.2s;
}
.register form input[type="submit"]:hover {
	background-color: #2868c7;
  	transition: background-color 0.2s;
}
    </style>
</head>
<body>
    <div class="register">
        <h1>Register</h1>
        <?php
        require "db.php";

        // Process form submission
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Retrieve register form data
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];

            // Validate form data
            if (empty($username) || empty($password) || empty($email)) {
                echo '<p class="error">Please fill in all required fields.</p>';
            } else {
                // Check if username already exists
                $stmt = $conn->prepare('SELECT userId FROM users WHERE username = ? OR email = ?');
                $stmt->bind_param('ss', $username, $email);
                $stmt->execute();
                $stmt->store_result();

                if ($stmt->num_rows > 0) {
                    echo '<p class="error">Username or email already exists. Please choose another.</p>';
                } else {
                    // Insert new user
                    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                    $userType = 'user';
                    $stmt = $conn->prepare('INSERT INTO users (username, email, password, userType) VALUES (?, ?, ?, ?)');
                    $stmt->bind_param('ssss', $username, $email, $hashedPassword, $userType);
                    $stmt->execute();

                    if ($stmt->affected_rows > 0) {
                        echo '<p class="success">You have successfully registered! You can now login.</p>';
                        session_regenerate_id();
                        $_SESSION["isUser"] = "yes" ;
                        $_SESSION["username"] = $username;
                        // Set a JavaScript timeout to redirect after 1.5 seconds
                        echo '<script>
                            setTimeout(function() {
                                window.location.href = "home";
                            }, 1500); 
                            // 1500 milliseconds = 1.5 seconds
                        </script>';
                    } else {
                        echo '<p class="error">Error registering. Please try again.</p>';
                    }
                }

                $stmt->close();
            }
        }
        ?>
        <form action="" method="post">
            <label for="username">
                <i class="fas fa-user"></i>
            </label>
            <input type="text" name="username" placeholder="Username" id="username" required>
            <label for="password">
                <i class="fas fa-lock"></i>
            </label>
            <input type="password" name="password" placeholder="Password" id="password" required>
            <label for="email">
                <i class="fas fa-envelope"></i>
            </label>
            <input type="email" name="email" placeholder="Email" id="email" required>
            <input type="submit" value="Register">
        </form>
    </div>
</body>
</html>