<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'PHPMailer/Exception.php';
require_once 'PHPMailer/PHPMailer.php';
require_once 'PHPMailer/SMTP.php';

$mail = new PHPMailer();

$alert = '';
$code = rand(1000, 100000);

if(isset($_POST['register'])){
  $email = "hamongkhang@gmail.com";
  try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'tojiro206@gmail.com'; 
    $mail->Password = 'huan2001';
    $mail->Port = 465;
    $mail->SMTPSecure = "ssl";

    $mail->setFrom('tojiro206@gmail.com', 'huan');
    $mail->addAddress($email);

    $mail->isHTML(true);
    $mail->Subject = "STARTTRAVELS'S CODES";
    $mail->Body = "PLEASE CHECK CODES: $code</h3>";

    $mail->send();
    $alert = '<div class="alert-success"> 
                 <span>Message Sent! Thank you for contacting us.</span>
                </div>';
  } catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
  }                                                                                                 
}
?>