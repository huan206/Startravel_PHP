<?php
    include 'admin_set.php';
    ini_set('display_errors',0);
    $idd=$_GET['id'];
    $delete= new blog();
    $result=$delete->delete($idd);
   header('Location: admin.php');
   ?>