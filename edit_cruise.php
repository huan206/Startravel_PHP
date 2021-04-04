<?php
include 'admin_set.php';
ini_set('display_errors',0);
$id=$_POST['id_cruise2'];
$tourCruiseEdit=new tourCruise();
$tourCruiseEdit->edit($id);
header("location:admin.php")
?>