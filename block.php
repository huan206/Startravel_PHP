<?php
ini_set("display_errors",0);
$idd=$_GET['id'];
$link=new mysqli("localhost","root","","startravel");
$status2="Block";
$query="update account set account_status='$status2' where account_id='$idd'";
mysqli_query($link,$query);
header("location: admin.php");
?>