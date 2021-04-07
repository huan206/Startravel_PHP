<?php
ini_set("display_errors",0);
$id=$_GET['id'];
echo $id;
$link=new mysqli("localhost","root","","startravel");
$status="Being active";
$query="update account set account_status='$status' where account_id='$id'";
mysqli_query($link,$query);
use PHPMailer\PHPMailer\PHPMailer;
ini_set("display_errors",0);

require_once 'PHPMailer/Exception.php';
require_once 'PHPMailer/PHPMailer.php';
require_once 'PHPMailer/SMTP.php';

$mail = new PHPMailer();
$email=$_GET['email'];
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

  header("location: admin.php");                                                                                               
?>