<?php
use PHPMailer\PHPMailer\PHPMailer;
ini_set("display_errors",0);
require_once 'PHPMailer/Exception.php';
require_once 'PHPMailer/PHPMailer.php';
require_once 'PHPMailer/SMTP.php';

$mail = new PHPMailer();
 $email=$_POST['email'];
$alert = '';
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
    $mail->Body = "Welcome to the Start Travel !!!</h3>";

    $mail->send();
    $alert = '<div class="alert-success"> 
                 <span>Message Sent! Thank you for contacting us.</span>
                </div>';
  } catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
  }         
  header("location: index.php")                                                                                        
?>
