<?php
ini_set("display_errors",0);
$id=$_GET['idd'];
$link=new mysqli("localhost","root","","startravel");
$query="delete from cart where id_cart='$id'";
mysqli_query($link,$query);
echo "<script>alert('DELETE SUCCESSFULLY !!!')</script>";
echo "<script>window.location.replace('cart.php')</script>";
?>