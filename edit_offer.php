<?php
include 'admin_set.php';
ini_set('display_errors',0);
$id=$_POST['id_offer2'];
$tourOfferEdit=new tourOffer();
$tourOfferEdit->edit($id);
header("location:admin.php")
?>