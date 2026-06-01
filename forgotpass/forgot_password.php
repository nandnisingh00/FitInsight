<!DOCTYPE html>
<html>

<head>

<title>Forgot Password - FitInsight</title>

<link rel="stylesheet" href="../style.css">

</head>

<body>

<section class="forgot-container">

<div class="forgot-box">

<h2>Forgot Password</h2>

<p>Enter your email to receive OTP</p>

<form action="send_otp.php" method="POST">

<input type="email" name="email" placeholder="Enter your email" required>

<button class="forgot-btn">Send OTP</button>

</form>

<a href="../login.php" class="back-login">Back to Login</a>

</div>

</section>

</body>

</html>
