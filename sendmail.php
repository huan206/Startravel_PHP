<?php
use PHPMailer\PHPMailer\PHPMailer;
ini_set("display_errors",0);

$code = rand(100000, 999999);
echo $code;
if(isset($_POST['data'])){
require_once 'PHPMailer/Exception.php';
require_once 'PHPMailer/PHPMailer.php';
require_once 'PHPMailer/SMTP.php';

$mail = new PHPMailer();
$email=$_POST['data'];
$alert = '';
  try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'hangqt3621@gmail.com'; 
    $mail->Password = 'Hang@362174';
    $mail->Port = 465;
    $mail->SMTPSecure = "ssl";

    $mail->setFrom('hangqt3621@gmail.com', 'Admin');
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