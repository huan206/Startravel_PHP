<?php
class account{
    private $server ="localhost";
    private $username = "root";
    private $password;
    private $database="startravel";
private $link;
public function __construct(){
      try{
          $this->link=new mysqli($this->server,$this->username,$this->password,$this->database);
      }catch(Exception $e){
          echo "connection failed". $e->getMessage();
      }
}
public function create(){
    ini_set('display_errors',0);
    $name=$_POST['account_name'];
    $email=$_POST['account_email'];
    $pass=$_POST['account_pass'];
    $confirm=$_POST['account_confirm'];
    $kt=1;
    if (strlen($name) < 3) {
        echo "<script>alert('Username must contain at least 3 characters !!!')</script>";
    } else if ($pass != $confirm) {
        echo "<script>alert('Password must match !!!')</script>";
    } else {
    $query1="select * from account";
    if ($sql=$this->link->query($query1)){
          while ($data=mysqli_fetch_assoc($sql)){
              if ($data['account_name']==$name){
                  $kt=0;
              }
          }
    }
    if($kt==1){
     $query="insert into account(account_name,account_pass,account_email) value ('$name','$pass','$email')";
     if ($sql=$this->link->query($query)){
        echo "<script>alert('Sign up successly !!!')</script>";
        header("location: admin.php");
     }
}else{
    echo "<script>alert('Account already exists !!!')</script>";

}
}}}
?>