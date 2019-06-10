<?php

  require("PHPMailer/PHPMailer.php");
  require("PHPMailer/SMTP.php");

    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->IsSMTP(); // enable SMTP
    $message = file_get_contents('template.html');

    $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465; // or 587
    $mail->IsHTML(true);
    $mail->Username = "samodaide@gmail.com";
    $mail->Password = "golf123456";
    $mail->SetFrom("samodaide@gmail.com","Registration Form");
    $mail->Subject = "Test";
    $mail->Body = $message;
    $mail->AddAddress("mark.hocevar@gmail.com");

     if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
     } else {
        echo "Message has been sent";
     }
?>