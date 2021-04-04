<?php
include 'admin_set.php';
ini_set('display_errors',0);
$id=$_POST['id_sport2'];
$tourSportEdit=new tourSport();
$tourSportEdit->edit($id);
header("location:admin.php")
?>