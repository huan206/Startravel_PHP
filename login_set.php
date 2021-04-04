<?php 
class user{
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
public function login(){
    ini_set("display_errors",0);
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    $kt=0;
    $query1="select * from account";
    if ($sql=$this->link->query($query1)){
          while ($data=mysqli_fetch_assoc($sql)){
              if (($data['account_name']==$user)&&($data['account_pass']==$pass)){
                  $kt=1;
              }
          }
    }
     if($kt==1){
     $query="insert into activity(activity_name,activity_password) value ('$user','$pass')";
    if ($sql=$this->link->query($query)){
        echo "<script>alert('LOGGED IN SUCCESSFULLY')</script>";
    }
 }else{
    echo "<script>alert('YOU ENTERED THE WRONG USERNAME OR PASSWORD !!!')</script>";
}
 } 
}
?>