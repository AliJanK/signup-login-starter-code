<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<body>

    <?php if (isset($_GET['error'])) { ?>
     	<p class="error"><?php echo $_GET['error']; ?></p>
    <?php } ?>

    <?php if (isset($_GET['success'])) { ?>
         <p class="success"><?php echo $_GET['success']; ?></p>
    <?php } ?>

    <div class="container">
        <div class="title">
            <p>Register</p>
        </div>

        <form action="signup.php" method="post">
            <div class="user_details">
            <div class="input_box">
                    <label for="name">Full Name</label>
                    <input type="text" id="fullname" name="fullname" placeholder="Enter your full name" required>
                </div>
                <div class="input_box">
                    <label for="name">Username</label>
                    <input type="text" id="username" name="username" placeholder="Enter your username" required>
                </div>
                <div class="input_box">
                    <label for="name">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="input_box">
                    <label for="name">Phone Number</label>
                    <input type="text" id="phone" name="phone_number" placeholder="Enter your phone" required>
                </div>
                <div class="input_box">
                    <label for="name">Password</label>
                    <input type="password" id="pass" name="password" placeholder="Enter your password" required>
                </div>
                <div class="input_box">
                    <label for="name">Confirm Password</label>
                    <input type="password" id="confimPass" name="confirm_password" placeholder="Confirm your password" required>
                </div>
            </div>
            <div class="reg_btn">
                <input type="submit" value="Register">
            </div>
            <h4>Already registered? <a href="loginForm.php">Login</a> </h4>
        </form>
    </div>

</body>
</html>
