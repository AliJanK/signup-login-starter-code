<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<body>

    <?php if (isset($_GET['error'])) { ?>
     	<p class="error"><?php echo $_GET['error']; ?></p>
    <?php } ?>
    <div class="container">
        <div class="title">
            <p>Login</p>
        </div>

        <form action="login.php" method="post">
            <div class="user_details">
                <div class="input_box">
                    <label for="name">Email or Username</label>
                    <input type="text" id="email" name="email_or_username" placeholder="Enter your email" required>
                </div>
                <div class="input_box">
                    <label for="name">Password</label>
                    <input type="password" id="pass" name="password" placeholder="Enter your password" required>
                </div>
            </div>
            <div class="reg_btn">
                <input type="submit" value="Login">
            </div>
            <h4>Don't have an account? <a href="signupForm.php">Signup</a> </h4>
        </form>
    </div>

</body>
</html>
