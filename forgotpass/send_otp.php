<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);
include '../db_connect.php';


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../phpmailer/PHPMailer.php';
require '../phpmailer/SMTP.php';
require '../phpmailer/Exception.php';

if(isset($_POST['email']) && !empty($_POST['email'])){

$email = $_POST['email'];

$query = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result) > 0){

$otp = rand(100000,999999);

$_SESSION['otp'] = $otp;
$_SESSION['email'] = $email;

$mail = new PHPMailer(true);

try{
$mail->isSMTP();
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = true;
$mail->Username = "kanhara2814@gmail.com";
$mail->Password = "lbog izsz mhil xgmh";
$mail->SMTPSecure = "tls";
$mail->Port = 587;

$mail->setFrom("kanhara2814@gmail.com","FitInsight");
$mail->addAddress($email);

$mail->Subject = "FitInsight Password Reset OTP";
$mail->Body = "Your OTP for password reset is: $otp";

$mail->send();

header("Location: verify_otp.php");
exit();

} catch (Exception $e){
    echo "Mailer Error: ",$mail->ErrorInfo;
} 
} else {
    echo "Email not found in our database.";
} 
} else {
    echo "No email provided.";
}
?>