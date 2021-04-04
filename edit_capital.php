<?php
include 'admin_set.php';
ini_set('display_errors',0);
$id=$_POST['id_capital2'];
$tourCapitalEdit=new tourCapital();
$tourCapitalEdit->edit($id);
header("location:admin.php")
?>