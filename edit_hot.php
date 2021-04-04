<?php
include 'admin_set.php';
ini_set('display_errors',0);
$id=$_POST['id_hot2'];
$tourHotEdit=new tourHot();
$tourHotEdit->edit($id);
header("location:admin.php")
?>