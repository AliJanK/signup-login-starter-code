<?php
session_start();
if (!isset($_SESSION['username'])) {
  // If user is not logged in, redirect to login page
  header("Location: loginForm.php");
  exit();
}

// User is logged in, display the home page content
?>

<!DOCTYPE html>
<html>
  <head>
    <title>My Home Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <div class="container">
      <div class="welcome">
        <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
        <p>This is a demo home page.</p>
        <form action="loginForm.php">
          <div class="reg_btn">
            <input type="submit" value="Logout">
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
