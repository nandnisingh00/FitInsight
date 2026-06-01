<?php
session_start();
if(isset($_SESSION['user'])){
    header("Location: dashboard.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login | FitInsight</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

<!-- Navbar -->
<nav>
    <h1 class="logo">FitInsight</h1>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="features.php">Features</a></li>
        <li><a href="register.php">Register</a></li>
    </ul>
</nav>

<!-- Login Section -->
<section class="login-container">
    <div class="login-box">

        <h2>Welcome Back</h2>
        <p class="login-subtext">Login to access your health dashboard</p>

        <form action="login_process.php" method="POST">

            <div class="input-group">
                <label>Email Address</label>
                <input type="email" name="email" placeholder="Enter your email" required>
            </div>

            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password" placeholder="Enter your password" required>
            </div>

            <div class="remember-forgot">
                <label class="remember">
                    <input type="checkbox"> Remember Me
                </label>
                <a href="forgotpass/forgot_password.php" class="back-login">Forgot Password?</a>
            </div>

            <button type="submit" class="login-btn">Login</button>

            <div class="register-link">
                <p>Don't have an account? <a href="register.php">Register</a></p>
            </div>

        </form>

    </div>
</section>

</body>
</html>