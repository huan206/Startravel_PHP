<?php
$link=new mysqli("localhost","root","","startravel");
$query="delete from activity";
mysqli_query($link,$query);
header("location:login.php");
?>