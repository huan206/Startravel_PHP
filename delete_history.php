<?php
ini_set("display_errors",0);
$id=$_GET['idd'];
$link=new mysqli("localhost","root","","startravel");
$query="delete from history where id_history='$id'";
mysqli_query($link,$query);
echo "<script>alert('DELETE SUCCESSFULLY !!!')</script>";
echo "<script>window.location.replace('history.php')</script>";
?>