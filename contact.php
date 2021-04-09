<?php
use PHPMailer\PHPMailer\PHPMailer;
ini_set("display_errors",0);
require_once 'PHPMailer/Exception.php';
require_once 'PHPMailer/PHPMailer.php';
require_once 'PHPMailer/SMTP.php';

$mail = new PHPMailer();
$email=$_POST['email'];
$name=$_POST['name'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$link = new mysqli("localhost", "root", "", "startravel");
$query = "select * from account";
$result = mysqli_query($link, $query);
$kt=0;
while ($row = mysqli_fetch_assoc($result)) {
    $name1 = $row['account_name'];
    $email1= $row['account_email'];
    $pass=$row['account_pass'];
    if(($name==$name1)&&($email==$email1)){
        $kt=1;
        $alert = '';
        try{
          $mail->isSMTP();
          $mail->Host = 'smtp.gmail.com';
          $mail->SMTPAuth = true;
          $mail->Username = $email; 
          $mail->Password = $pass;
          $mail->Port = 465;
          $mail->SMTPSecure = "ssl";
      
          $mail->setFrom($email, 'Admin');
          $mail->addAddress('hangqt3621@gmail.com');
      
          $mail->isHTML(true);
          $mail->Subject = $subject;
          $mail->Body = $message;
      
          $mail->send();
          $alert = '<div class="alert-success"> 
                       <span>Message Sent! Thank you for contacting us.</span>
                      </div>';
        } catch (Exception $e){
          $alert = '<div class="alert-error">
                      <span>'.$e->getMessage().'</span>
                    </div>';
        }                                                   
        echo "<script>window.location.replace('index.php')</script>";    
    }
}
if($kt==0){
    echo "<script>alert('The account or email does not exists !!!')</script>";
}else{
    echo "<script>alert('Submitted successfully !!!')</script>";
}

 // header("location: index.php")                                                                                        
?>
