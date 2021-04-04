<?php
include 'admin_set.php';
ini_set('display_errors',0);
$id=$_POST['id_blog2'];
$tourBlogEdit=new blog();
$tourBlogEdit->edit($id);
header("location:admin.php")
?>