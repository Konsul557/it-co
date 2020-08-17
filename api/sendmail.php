<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require '../vendor/autoload.php';


$email = $_POST['email'];
if ($email == '') {
    exit('Введите email');
}
session_start();
$_SESSION['email'] = $email;


// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.mail.ru';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'it-co-emailsender@mail.ru';                     // SMTP username
    $mail->Password   = 'localhost_root';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('pavel.danilov.557@mail.ru');
    $mail -> addAddress ($email); 



    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Регистрация';
    $mail->Body    = 'Для завершения регистрации перейдите по ссылке и следуйте инструкциям.<br> http://it-co/password.html';

    $mail->CharSet = "utf-8";

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}